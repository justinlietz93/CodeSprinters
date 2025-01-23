<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Model {

    public function user_login($email,$pwd)
    {
        $this->load->database();
        $this->load->library('session');

        try {
            $db = new PDO($this->db->dsn, $this->db->username, $this->db->password, $this->db->options);
            $sql = $db->prepare("select memberID, memberPassword, memberKey from memberLogin where memberEmail = :Email and RoleID = 2");
            $sql->bindValue(":Email", $email);
            $sql->execute();
            $row = $sql->fetch();

            if ($row != null) {
                $hashedPassword = md5($pwd . $row["memberKey"]);

                if ($hashedPassword == $row["memberPassword"]) {
                    $this->session->set_userdata(array("UID" => $row["memberID"]));
                    return true;
                } else {
                    return false;
                }
            }else{
                return false;
            }

        }catch (PDOException $e){
            return false;
        }
    }

    public function add_user($FName, $Email, $Password)
    {
        $key = sprintf('%04X%04X%04X%04X%04X%04X%04X%04X' , mt_rand(0, 65535) ,mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(16384, 65535), mt_rand(32768, 65535), mt_rand(0, 65535), mt_rand(0, 65535), mt_rand(0, 65535));
            try {
                $db = new PDO($this->db->dsn, $this->db->username, $this->db->password, $this->db->options);
                $sql = $db->prepare("insert into memberLogin (memberName, memberEmail, memberPassword, memberKey) VALUE (:Name, :Email, :Password, :Key)");
                $sql->bindValue(":Name", $FName);
                $sql->bindValue(":Email", $Email);
                $sql->bindValue(":Password", md5($Password . $key));
                $sql->bindValue(":Key", $key);

                $sql->execute();
                $row = $sql->fetch();

                if ($row != null) {
                    $hashedPassword = md5($Password . $row["memberKey"]);

                    if ($hashedPassword == $row["memberPassword"]) {
                        $this->session->set_userdata(array("UID" => $row["memberID"]));
                        return true;
                    } else {
                        return false;
                    }
                }else{
                    return false;
                }

            }catch (PDOException $e){
                return false;
            }
    }

}
