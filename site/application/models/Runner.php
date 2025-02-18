<?php

/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Created runner model
 * 
 */
defined('BASEPATH') OR exit('No direct script access allowed');

class Runner extends CI_Model {

    public function get_runners() {
        // Return dummy data for front-end development
        return array(
            array(
                'runnerID' => 1,
                'name' => 'John Smith',
                'email' => 'john@example.com',
                'phone' => '555-0101',
                'registrationDate' => '2024-01-15'
            ),
            array(
                'runnerID' => 2,
                'name' => 'Sarah Johnson',
                'email' => 'sarah@example.com',
                'phone' => '555-0102',
                'registrationDate' => '2024-01-16'
            ),
            array(
                'runnerID' => 3,
                'name' => 'Mike Wilson',
                'email' => 'mike@example.com',
                'phone' => '555-0103',
                'registrationDate' => '2024-01-17'
            )
        );
    }

    public function get_monthly_stats() {
        $query = $this->db->query("
            SELECT 
                DATE_FORMAT(registration_date, '%Y-%m') as month,
                race_type,
                COUNT(*) as count
            FROM runners
            GROUP BY DATE_FORMAT(registration_date, '%Y-%m'), race_type
            ORDER BY month
        ");
        
        return $query->result_array();
    }
} 