<?php

class User extends CI_Model{
    private $_table = "user";
    public function register($data){      
        // Insert user
        return $this->db->insert($this->_table, $data);
    }

    function login($email, $password) {		
		$where = array(
            'email' => $email,
            'password' => $password
            );
            $query = $this->db->get_where($this->_table, $where);
            if($query) {
                return $query->row();
            }
        return false;
	}	
    public function getUsers() {
        return $this->db->get($this->_table)->result();
    }
    public function editUser($param, $data) {
        $this->db->where('id', $param);
        $this->db->update($this->_table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function getUsersCount() {
        $this->db->select("count(*) as total");
        return $this->db->from($this->_table)->get()->row();
    }
}