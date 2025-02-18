<?php

/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Wired up the member model
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {

    public function user_login($username, $password)
    {
        $this->db->where('UserName', $username);
        $this->db->where('Password', $password);
        $query = $this->db->get('Users');
        
        if($query->num_rows() == 1){
            $user = $query->row();
            // Set session data
            $this->session->set_userdata([
                'user_id' => $user->UserId,
                'user_type' => $user->UserTypeID,
                'username' => $user->UserName,
                'logged_in' => TRUE
            ]);
            return $user->UserTypeID;
        }
        return 0;  // Return 0 for failed login
    }

    public function add_user($fullname, $email, $password, $retype_password)
    {
        if($password != $retype_password) {
            return false;
        }

        // Check if username/email already exists
        $this->db->where('UserName', $email);
        if($this->db->get('Users')->num_rows() > 0) {
            return false;
        }

        $data = array(
            'UserName' => $email,
            'Password' => $password,
            'UserTypeID' => 3  // Default to Runner type
        );

        return $this->db->insert('Users', $data);
    }

    public function get_user_type($user_id)
    {
        $this->db->select('UserTypes.Type');
        $this->db->from('Users');
        $this->db->join('UserTypes', 'Users.UserTypeID = UserTypes.UserTypeId');
        $this->db->where('Users.UserId', $user_id);
        $query = $this->db->get();
        
        if($query->num_rows() == 1){
            return $query->row()->Type;
        }
        return false;
    }

    public function get_member($id) {
        // dummy data for now since we don't have a full database
        return array(
            'id' => $id,
            'username' => $this->session->userdata('username'),
            'name' => 'Runner',
            'email' => 'runner@codesprinter.com',
            'phone' => '555-0123'
        );
    }

    public function update_member($id, $data) {
        // Will implement database update later
        return true;
    }

    public function change_password($id, $current_password, $new_password) {
        // Will implement password change later
        return true;
    }

    public function update_profile_pic($id, $filename) {
        // return true since we don't have the database set up
        return true;
    }
}
