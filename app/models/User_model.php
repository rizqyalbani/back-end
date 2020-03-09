<?php 

class User_model{
    private $table = 'tbl_disposisi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDisposisi(){
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->allResult();
    }
}

?>