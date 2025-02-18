<?php

/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Created auth controller
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Member');
    }

    public function login() {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        
        $user_type = $this->Member->user_login($username, $password);
        
        if($user_type > 0) {
            if($user_type == 1) { // Admin
                redirect('admin/dashboard');
            } else { // Regular user
                redirect('home');
            }
        } else {
            $this->session->set_flashdata('error', 'Invalid username or password');
            redirect('home');
        }
    }

    public function logout() {
        // Clear all session data
        $this->session->sess_destroy();
        
        // Redirect to home page
        redirect('home');
    }
} 