<?php 

class User_model{
    private $table = 'tbl_disposisi';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllDisposisi(){
        //manggil disposisi berdasarkan user yang bersangkutan
        $binded = $this->getUser();
        // ambil disposisi yang berkaitan dengan user yang sudah login aja
        $this->db->query("SELECT * FROM $this->table WHERE id_user = :id"); //apa ga gila pake function tuh
        $this->db->bind('id', $binded);
        // print_r($binded);
        return $this->db->allResult();
    }

    //function get id_user ini buatnya gilak gw kayangin otak baru dapet
    // dapetin user id buat dipake query
    public function getUser(){
        // get usernya disini
        $user = "SELECT id_user FROM tbl_user WHERE nama = :nama ";
        $this->db->query($user);
        $this->db->bind('nama', $_SESSION['username']);
        $a = $this->db->singleResult();
        return $a['id_user'];
    }

    // munculin jenis disposisi buat ditampilin sebagai keterangan 
    public function getJenisDisposisi($data){
        $user = "SELECT * FROM tbl_jenis_disposisi WHERE id_jenis_disposisi =  :id ";
        // echo $user;
        $this->db->query($user);
        $this->db->bind('id', $data['id_jenis_disposisi']);
        $a = $this->db->singleResult();
        return($a['jenis_disposisi']) ;
    }

    // untuk memunculkan list user di admin, sorry pinjem model ve :D
    public function getAllUser(){
        $allUser = "SELECT * FROM tbl_user WHERE id_role = :id";
        $this->db->query($allUser);
        $this->db->bind('id', 2);
        return $this->db->allResult();
    }

    public function getDataSurat($data){
        $user = "SELECT * FROM tbl_surat_masuk WHERE id_surat_masuk =  :id ";
        $this->db->query($user);
        $this->db->bind('id', $data['id_surat_masuk']);
        $a = $this->db->singleResult();
        return $a;
    }
    
}

?>