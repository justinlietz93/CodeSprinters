<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegistrationController extends CI_Controller {

    public function form() {
        $data = array('registration_form' => 'true');
        $this->load->view('admin/registration_form', $data);
    }
}