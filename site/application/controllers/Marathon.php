<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MarathonController extends CI_Controller {

    public function add() {
        $data = array('add_marathon' => 'true');
        $this->load->view('admin/add_marathon', $data);
    }

    public function manage() {
        $data = array('manage_marathons' => 'true');
        $this->load->view('admin/manage_marathons', $data);
    }
}