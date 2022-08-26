<?php

class Book extends CI_Model{
    private $_table = "book";

    public function addBook($param) {
        $this->db->insert($this->_table, $param);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function editBook($param, $data) {
        $this->db->where('id', $param);
        $this->db->update($this->_table, $data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function deleteBook($param) {
        $this->db->where('id', $param);
        $this->db->delete($this->_table);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
    public function getBooks() {
        return $this->db->get($this->_table)->result();
    }
    public function getBook($param) {
        $this->db->where('id', $param);
        return $this->db->get($this->_table)->row();
    }
    public function searchBook($param){
        $this->db->like('title',$param)
        ->or_like('category', $param)
        ->or_like('author', $param);
		return $this->db->get($this->_table)->result();
	}
    public function getBooksCount() {
        $this->db->select("count(*) as total");
        return $this->db->from($this->_table)->get()->row();
    }
}