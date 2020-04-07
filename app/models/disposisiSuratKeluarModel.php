<?php
    class disposisiSuratKeluarModel{

        private $db, $tbl = "tbl_disposisi";

        //function construct database
        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        public function getValidateDisposisi($id){
            //manggil disposisi berdasarkan user yang bersangkutan
            $binded = $id ;
            // ambil disposisi yang berkaitan dengan user yang sudah login aja
            $this->db->query("SELECT * FROM $this->table WHERE id_surat_masuk = :id"); //apa ga gila pake function tuh
            $this->db->bind('id', $binded);
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>