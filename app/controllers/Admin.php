<?php
    class Admin extends mainController{
        //function default
        public function index(){

            $data = [
                "judul" => "Persuratan",
            ];

            $this->view("templates/header", $data['judul']);
            $this->view("admin/index");
            $this->view("templates/footer");
        }

        //function lain
        public function addDataSuratMasuk(){

            $data = [
                "judul" => "Tambah Surat Masuk",
                "process" => "admin/AddDataSuratMasuk"
            ];

            $this->view("templates/header", $data['judul']);
            $this->view("admin/addDataSuratMasuk", $data);
            $this->view("templates/footer");
            // var_dump($_POST);
            if( !empty($_POST) ){
                if($this->model("suratMasukModel")->addSuratMasuk($_POST) > 0){
                    // header("Location: " . BASE_URL . "Admin");
                }
            //end of if
            }
        //end of addData
        }

        public function addDataSuratKeluar(){
            $data = [
                "judul" => "Tambah Surat Keluar",
                "process" => "admin/AddDataSuratKeluar"
            ];

            $this->view("templates/header", $data['judul']);
            $this->view("admin/addDataSuratKeluar", $data);
            $this->view("templates/footer");
            // var_dump($_POST);
            if( !empty($_POST) ){
                if($this->model("suratKeluarModel")->addSuratKeluar($_POST) > 0){
                    // header("Location: " . BASE_URL . "Admin");
                }
            //end of if
            }
        //end of addDataSuratKeluar
        }

    }
?>