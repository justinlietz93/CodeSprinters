<?php

/**
 * | Change History
 * |----------------------------------------------------------------------------------
 * | Date         | Developer      | Description
 * |----------------------------------------------------------------------------------
 * | 2024-02-17  | Justin         | Wired up the race model
 * 
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Race extends CI_Model {

    public function get_races()
    {
        // Return dummy data for front-end development
        return array(
            array(
                'raceID' => 1,
                'raceName' => 'St. Pattys 5K',
                'raceLocation' => '123 Green Bay Road, Green Bay',
                'raceDateTime' => '2025-03-17',
                'raceDescription' => 'Annual marathon. Deadline is March 1st, 2025.'
            ),
            array(
                'raceID' => 2,
                'raceName' => 'Spring Fest 5K & 10K',
                'raceLocation' => '222 Lake Park Drive, Menasha',
                'raceDateTime' => '2025-05-10',
                'raceDescription' => 'Deadline is April 1st, 2025.'
            ),
            array(
                'raceID' => 3,
                'raceName' => 'Firework 4th Marathon',
                'raceLocation' => '987 Fondy Lane, Fond du Lac',
                'raceDateTime' => '2025-07-04',
                'raceDescription' => 'Deadline is May 31st, 2025.'
            )
        );
    }

    public function add_race($name, $location,$description, $date)
    {
        $this->load->database();

        $data = array(
            'raceName' => $name,
            'raceLocation' => $location, 
            'raceDescription' => $description, 
            'raceDateTime' => $date
        );
        
        return $this->db->insert('race', $data);
    }

    public function update_race($name, $location,$description, $date, $id)
    {
        $this->load->database();

        $data = array(
            'raceName' => $name,
            'raceLocation' => $location, 
            'raceDescription' => $description, 
            'raceDateTime' => $date
        );
        
        $this->db->where('raceID', $id);
        return $this->db->update('race', $data);
    }

    public function delete_race($id)
    {
        $this->load->database();
        
        $this->db->where('raceID', $id);
        return $this->db->delete('race');
    }

    public function get_race($id)
    {
        $this->load->database();

        try {
            $data = array('raceID' => $id);
            $query = $this->db->get_where('race',$data);
            return $query->result_array();

        }catch (PDOException $e){
            return false;
        }
    }

}
