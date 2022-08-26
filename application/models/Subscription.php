<?php

class Subscription extends CI_Model{
    private $_table = "subscription";

    public function addPayment($param) {
        $this->db->insert($this->_table, $param);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function getSubs() {
        $this->db->select('s.id as id, s.receipt as receipt, u.name as name, s.image as image, s.transaction_date as transaction_date, s.price as price');
        $this->db->from('subscription s');
        $this->db->join('user u', 'u.id = s.id_user');
        return $this->db->get()->result();
    }
    public function getSubsCount() {
        $this->db->select("sum(price) as total");
        return $this->db->from($this->_table)->get()->row();
    }
}