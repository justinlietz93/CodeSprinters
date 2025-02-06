<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RunnerController extends CI_Controller {

    public function manage() {
        $data = array('manage_runners' => 'true');
        $this->load->view('admin/manage_runners', $data);
    }
}