<?php

class regisaterModel
{
    private $tb = "tbl_user",
    		$db,
    		$url;

    public function __CONSTRUCT()
    {
        $this->db = new Database();
    }

   	public function register($data)
    {
        $query ="INSERT INTO tbl_user VALUES ('', :id_role, :nip, :nama, :password)";
        $this->db->query($query);

        $this->db->bind('id_role', $data['id_role']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nama', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();
    }
   
}