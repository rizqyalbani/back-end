<?php
    class Admin extends mainController{
        //function default
        public function index(){
            //array buat nyimpan data
            $data['judul'] = "Admin";
            $data["process"] = "admin/addData";

            $this->view("templates/header", $data['judul']);
            $this->view("admin/index", $data);
            $this->view("templates/footer");
        }

        //function lain
        public function addData(){
            if( !empty($_POST) ){
                $no_surat = $_POST['nmr_srt_msk'];
                $tanggal_surat = $_POST['tgl_srt_msk'];
                $alamat_surat = $_POST['alamat_srt_msk'];
                $perihal_surat = $_POST['perihal_srt_msk'];
                $lampiran_surat = $_POST['lampiran_srt_msk'];
                $Disposisi_surat = $_POST['disposisi_srt_msk'];

                if($this->model("suratMasukModel")->addSuratMasuk($_POST) > 0 ){
                    header("Location: " . BASE_URL . "Admin");
                }

            }
        }

    }
?>