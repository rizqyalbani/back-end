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
            print_r($_POST);
            //belom buat tampilin user
            if(isset($_POST['submit'])){
                $d = time()+21600;//3600 = 60 menit, 21600 / 3600 = dihitung sendiri ya
                // echo date("H:i:s", $d). " "; 
                $datePost = date('Y-m-d H:i:s', $d);
            }

            $query = "INSERT INTO $this->table 
                    VALUES(
                        '',
                        :tanggal,
                        :tanggal_penyelesaian,
                        :no_agenda,
                        :id_jenis_disposisi,
                        :instruksi,
                        :id_user,
                        :id_status,
                        :id_surat_masuk,
                        :postedTime
                    )";
            //buat bindingnya
            $this->db->query($query);
            $this->db->bind(':tanggal', $_POST['tanggal'] );
            $this->db->bind(':tanggal_penyelesaian', $_POST['tanggal_penyelesaian'] );
            $this->db->bind(':no_agenda', $_POST['agenda'] );
            $this->db->bind(':id_jenis_disposisi', $_POST['jenis_disposisi'] );
            $this->db->bind(':instruksi', $_POST['instruksi'] );
            $this->db->bind(':id_user', $_POST['user'] );
            $this->db->bind(':id_status', 1 );
            $this->db->bind(':id_surat_masuk', $_POST['id_surat_masuk'] );
            $this->db->bind(':postedTime', $datePost );
            $this->db->execute();
            return $this->db->rowCount();
        }
        // get disposisi

        public function getValidateDisposisi($id){
            //manggil disposisi berdasarkan user yang bersangkutan
            $binded = $id ;
            // ambil disposisi yang berkaitan dengan user yang sudah login aja
            $this->db->query("SELECT * FROM $this->table WHERE id_surat_masuk = :id"); //apa ga gila pake function tuh
            $this->db->bind('id', $binded);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getDisposisi($id){
            //manggil disposisi berdasarkan user yang bersangkutan
            $binded = $id ;
            //print_r($id);
            // ambil disposisi yang berkaitan dengan user yang sudah login aja
            $this->db->query("SELECT * FROM $this->table WHERE id_surat_masuk = :id"); //apa ga gila pake function tuh
            $this->db->bind('id', $binded);
            return $this->db->allResult();
        }
        public function getDisposisiIdj($id){
            print_r($id);
            
            //manggil disposisi berdasarkan user yang bersangkutan
            $binded = $id ;
            // print_r($id);
            // ambil disposisi yang berkaitan dengan user yang sudah login aja
            $this->db->query("SELECT * FROM $this->table WHERE id_surat_masuk = :id"); //apa ga gila pake function tuh
            $this->db->bind('id', $binded);
            return $this->db->singleResult();
        }

        public function getJenisDisposisis($data){
            // print_r($data);
            $user = "SELECT * FROM tbl_jenis_disposisi WHERE id_jenis_disposisi =  :id ";
            // echo $user;
            $this->db->query($user);
            $this->db->bind('id', $data);
            $a = $this->db->singleResult();
            return $a['jenis_disposisi'];
        }

        public function getAsalDisposisis($data){
            $user = "SELECT * FROM tbl_surat_masuk WHERE id_surat_masuk =  :id ";
            // echo $user;
            $this->db->query($user);
            $this->db->bind('id', $data[0]['id_surat_masuk']);
            $a = $this->db->singleResult();
            return $a['nama_instansi_surat_masuk'];
        }

        public function getUser($id){
            $getUser = "SELECT * FROM tbl_user WHERE id_user =  :id ";
            $this->db->query($getUser);
            $this->db->bind('id', $id);
            return $this->db->singleResult();
        }

        public function deleteDisposisi($id){
            $delete = "DELETE FROM $this->table WHERE id_disposisi = :id";
            $this->db->query($delete);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        public function getStatus($id){
            $getStatus = "SELECT status FROM tbl_status WHERE id_status = :id";
            $this->db->query($getStatus);
            $this->db->bind('id', $id);
            return $this->db->singleResult()['status'];
        }

    }
?>