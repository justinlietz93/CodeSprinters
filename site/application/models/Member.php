<?php
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
}
