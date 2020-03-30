<?php
    class disposisiModel{
        
        private $db, $table = " tbl_disposisi ";

        //function construct database
        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        public function getJenisDisposisi(){
            $query = "SELECT * FROM " . $this->table;
            $this->db->query($query);
            return $this->db->allResult();
        }
        public function addDisposisi(){
            // print_r($_POST);
            //belom buat tampilin user
            $query = "INSERT INTO $this->table 
                    VALUES(
                        '',
                        :tanggal,
                        :tanggal_penyelesaian,
                        :no_agenda,
                        :id_jenis_disposisi,
                        :instruksi,
                        :id_user,
                        :id_surat_masuk
                    )";
            //buat bindingnya
            $this->db->query($query);
            $this->db->bind(':tanggal', $_POST['tanggal'] );
            $this->db->bind(':tanggal_penyelesaian', $_POST['tanggal_penyelesaian'] );
            $this->db->bind(':no_agenda', $_POST['agenda'] );
            $this->db->bind(':id_jenis_disposisi', $_POST['jenis_disposisi'] );
            $this->db->bind(':instruksi', $_POST['instruksi'] );
            $this->db->bind(':id_user', $_POST['user'] );
            $this->db->bind(':id_surat_masuk', $_POST['id_surat_masuk'] );
            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>