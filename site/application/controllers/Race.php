<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RaceController extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('Race');
    }

    public function add() {
        $this->Race->add_race(
            $this->input->post('txtName'),
            $this->input->post('txtLocation'),
            $this->input->post('txtDescription'),
            $this->input->post('txtDate')
        );
        redirect("race/manage", "refresh");
    }

    public function edit() {
        $this->Race->update_race(
            $this->input->post('txtName'),
            $this->input->post('txtLocation'),
            $this->input->post('txtDescription'),
            $this->input->post('txtDate'),
            $this->input->post('txtID')
        );
        redirect("race/manage", "refresh");
    }

    public function delete($id) {
        $this->Race->delete_race($id);
        redirect("race/manage", "refresh");
    }

    public function update($id) {
        $data['race'] = $this->Race->get_race($id);
        $this->load->view('admin/update_marathon', $data);
    }

    public function manage() {
        $data['races'] = $this->Race->get_races();
        $this->load->view('admin/manage_marathons', $data);
    }
}