<?php 

class User_model{
    private $table = 'tbl_disposisi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDisposisi(){
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->allResult();
    }

    public function getAllUser(){
        $query = "SELECT * FROM tbl_user";
        $this->db->query($query);
        return $this->db->allResult();
    }
}

?>