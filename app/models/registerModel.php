<?php

class registerModel
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
        $query ="INSERT INTO $this->tb VALUES ('', :id_role, :nip, :nama, :password)";
        $this->db->query($query);

        $this->db->bind('id_role', $data['id_role']);
        $this->db->bind('nip', $data['nip']);
        $this->db->bind('nama', $data['username']);
        $this->db->bind('password', $data['password']);
        $this->db->execute();
        return $this->db->rowCount();

        var_dump($data);
    }

    public function getRegister(){
        $query = "SELECT * FROM $this->tb WHERE id_role = 1";
        $this->db->query($query);
        return $this->db->allResult();
    }

    public function deleteRegister($id){
        $query = "DELETE FROM $this->tb WHERE id_user = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function updateRegister(){
        // query buat get password
        $id = $_POST['id'];
        // $query = "SELECT * FROM $this->tb WHERE id_user = :id";
        // $this->db->query($query);
        // $this->db->bind('id', $id);
        // $this->db->execute();
        // $pass = $this->db->singleResult()['password'];
        // print_r($pass);

        if($_POST['password'] == ""){
            $query = "UPDATE $this->tb SET nip = :nip, nama = :nama WHERE id_user = '$id' ";
            $this->db->query($query);
            $this->db->bind('nip', $_POST['nip']);
            $this->db->bind('nama', $_POST['username']);
            $this->db->execute();
            return $this->db->rowCount();
        }
        else{

            $query = "UPDATE $this->tb SET nip = :nip, nama = :nama, password = :pass WHERE id_user = '$id' ";
            $this->db->query($query);
            $this->db->bind('nip', $_POST['nip']);
            $this->db->bind('nama', $_POST['username']);
            $this->db->bind('pass', $_POST['password']);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }

}