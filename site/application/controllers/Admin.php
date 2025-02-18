<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	/**
	 * | Change History
	 * |----------------------------------------------------------------------------------
	 * | Date         | Developer      | Description
	 * |----------------------------------------------------------------------------------
	 * | 2024-02-17  | Justin         | Added routing logic for admin dashboard

	 * 
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
    public function index() {
        redirect('admin/home');
    }

	public function __construct() {
		parent::__construct();
		// Check if user is logged in and is admin
		if(!$this->session->userdata('logged_in') || $this->session->userdata('user_type') != 1) {
			redirect('home');
		}
	}

	public function dashboard() {
		$data = array('dashboard'=>'true');
		$this->load->view('admin/dashboard', $data);
	}

	public function home() {
		$data = array('dashboard'=>'true');
		$this->load->view('admin/home', $data);
	}

	public function add_race()
	{
		$this->load->model('Race');
		$this->Race->add_race($this->input->post('txtName'), $this->input->post('txtLocation'), $this->input->post('txtDescription'),$this->input->post('txtDate'));
		redirect("admin/manage_marathons","refresh");
	}

	public function edit_race()
	{
		$this->load->model('Race');
		$this->Race->update_race($this->input->post('txtName'), $this->input->post('txtLocation'), $this->input->post('txtDescription'),$this->input->post('txtDate'), $this->input->post('txtID'));
		redirect("admin/manage_marathons","refresh");
	}

	public function  delete_race($id)
	{
		$this->load->model('Race');
		$this->Race->delete_race($id);
		redirect("admin/manage_marathons","refresh");
	}

	public function  update_race($id)
	{
		$this->load->model('Race');
		$data['race'] = $this->Race->get_race($id);
		$this->load->view('admin/update_marathon' , $data);
	}

	public function manage_marathons() {
		$this->load->model('Race');
		$data = array(
			'manage_marathons' => 'true',
			'races' => $this->Race->get_races()
		);
		$this->load->view('admin/manage_marathons', $data);
	}

	public function add_marathon() {
		$data=array('add_marathon'=>'true');
		$this->load->view('admin/add_marathon', $data);
	}

	public function manage_runners() {
		$this->load->model('Runner');
		$data = array(
			'manage_runners' => 'true',
			'runners' => $this->Runner->get_runners()
		);
		$this->load->view('admin/manage_runners', $data);
	}

	public function registration_form() {
		$data=array('registration_form'=>'true');
		$this->load->view('admin/registration_form', $data);
	}

	public function charts() {
		$data = array('charts' => 'true');
		$this->load->view('admin/4', $data);  // Using 4.php for charts
	}

	public function tables() {
		$data = array('tables' => 'true');
		$this->load->view('admin/7', $data);  // Using 7.php for tables
	}

	public function forms() {
		$this->load->view('admin/5');  // Forms page
	}

	public function elements() {
		$this->load->view('admin/2');  // Bootstrap Elements page
	}

	public function grid() {
		$this->load->view('admin/3');  // Bootstrap Grid page
	}

	public function blank() {
		$this->load->view('admin/1');  // Blank page
	}

	public function rtl() {
		$this->load->view('admin/6');  // RTL Dashboard page
	}

	public function add_runner() {
		$data = array(
			'add_runner' => 'true'
		);
		$this->load->view('admin/add_runner', $data);
	}

	public function save_runner() {
		$this->load->model('Runner');
		
		$data = array(
			'name' => $this->input->post('name'),
			'email' => $this->input->post('email'),
			'phone' => $this->input->post('phone'),
			'dob' => $this->input->post('dob'),
			'gender' => $this->input->post('gender'),
			'emergency_contact' => $this->input->post('emergency_contact'),
			'emergency_phone' => $this->input->post('emergency_phone'),
			'registration_date' => date('Y-m-d')
		);

		// For now, just redirect since we don't have the database set up
		redirect('admin/manage_runners');
	}

	public function profile() {
		$this->load->model('Member');
		$user_id = $this->session->userdata('user_id');
		
		$data = array(
			'profile' => 'true',
			'user' => $this->Member->get_member($user_id)
		);
		
		$this->load->view('admin/profile', $data);
	}

	public function update_profile() {
		$this->load->model('Member');
		$user_id = $this->session->userdata('user_id');
		
		$data = array(
			'username' => $this->input->post('username'),
			'email' => $this->input->post('email'),
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone')
		);
		
		// For now just redirect since we don't have the database set up
		redirect('admin/profile');
	}

	public function upload_profile_pic() {
		$config['upload_path'] = './uploads/profile/';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';
		$config['max_size'] = 2048; // 2MB max
		$config['file_name'] = 'profile_' . $this->session->userdata('user_id');
		
		// Create directory if it doesn't exist
		if (!is_dir('uploads/profile')) {
			mkdir('./uploads/profile', 0777, TRUE);
		}
		
		$this->load->library('upload', $config);
		
		if (!$this->upload->do_upload('profile_pic')) {
			$this->session->set_flashdata('error', $this->upload->display_errors());
		} else {
			$upload_data = $this->upload->data();
			
			// Update user profile with new image
			$this->load->model('Member');
			$this->Member->update_profile_pic($this->session->userdata('user_id'), $upload_data['file_name']);
			
			$this->session->set_flashdata('success', 'Profile picture updated successfully');
		}
		
		redirect('admin/profile');
	}

	public function print_registration_form() {
		// Load PDF library
		$this->load->library('pdf');
		
		// Create new PDF document
		$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
		
		// Set document information
		$pdf->SetCreator('Code Sprinters');
		$pdf->SetAuthor('Marathon Admin');
		$pdf->SetTitle('Runner Registration Form');
		
		// Remove default header/footer
		$pdf->setPrintHeader(false);
		$pdf->setPrintFooter(false);
		
		// Set margins
		$pdf->SetMargins(15, 15, 15);
		
		// Add a page
		$pdf->AddPage();
		
		// Get the template path
		$template_path = FCPATH . 'assets/pdfs/Registration Signup Form Template.pdf';
		
		// Import the template as background
		$pdf->setSourceFile($template_path);
		$tplIdx = $pdf->importPage(1);
		$pdf->useTemplate($tplIdx);
		
		// Output the PDF
		$pdf->Output('runner_registration_form.pdf', 'I');
	}
}
