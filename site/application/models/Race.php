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
                'raceName' => 'Spring Marathon 2024',
                'raceLocation' => 'Central Park',
                'raceDateTime' => '2024-04-15',
                'raceDescription' => 'Annual spring marathon'
            ),
            array(
                'raceID' => 2,
                'raceName' => 'Summer Half Marathon',
                'raceLocation' => 'Beach Track',
                'raceDateTime' => '2024-07-01',
                'raceDescription' => 'Scenic beach route'
            ),
            array(
                'raceID' => 3,
                'raceName' => 'Winter 10K',
                'raceLocation' => 'Downtown',
                'raceDateTime' => '2024-12-10',
                'raceDescription' => 'City center race'
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
