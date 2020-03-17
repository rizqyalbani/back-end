<?php
    class jenisDisposisiModel{

        private $db, $table = "tbl_jenis_disposisi";

        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        //mengambil jenis disposisi dari database
        public function getJenis(){
            $query = "SELECT * FROM " . $this->table ;
            //function untuk query data
            $this->db->query($query);
            return $this->db->allResult();
        }

    }
?>