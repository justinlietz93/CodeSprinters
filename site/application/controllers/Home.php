<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
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
	public function index()
	{
        $this->load->helper('form');
		$this->load->view('public/home');
	}

    public function login()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('user_name','User Name','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');

        if($this->form_validation->run() == false){
            $data = array('load_error'=>'true');
            $this->load->view('public/home',$data);
        }else{
            //Data Stuff
            $this->load->model('Member');

            if($this->Member->user_login($this->input->post('user_name'),$this->input->post('password'))){
                $this->load->view('admin/home');
                echo "Member Added";
            }else{
                //Bad Password
                $data = array('load_error'=>'true','error_message'=>'Invalid Username or Password');
                $this->load->view('public/home',$data);
            }
        }
    }

    public function create()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('full_name','Full Name','trim|required');
        $this->form_validation->set_rules('email_address','Email Address','trim|required|valid_email');
        $this->form_validation->set_rules('password','Password','trim|required');
        $this->form_validation->set_rules('retype_password','Retype Password','trim|required');

        if($this->form_validation->run() == false){
            $data = array('load_error'=>'true');
            $this->load->view('public/home',$data);
        }else{
            //Data Stuff
            $this->load->model('Member');

            if($this->Member->add_user($this->input->post('full_name'),$this->input->post('email_address'),$this->input->post('password'),$this->input->post('retype_password'))){
                $this->load->view('public/home');
            }
            else{
                $data = array('load_error'=>'true','error_message'=>'You have been added!');
                $this->load->view('public/home',$data);
            }
        }
    }
}
