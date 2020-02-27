<?php
    class suratMasuk{
        private $db, $table = "tbl_surat_masuk";

        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        public function addSuratMasuk(){
            $no_surat = $_POST['nmr_srt_msk'];
            $tanggal_surat = $_POST['tgl_srt_msk'];
            $alamat_surat = $_POST['alamat_srt_msk'];
            $perihal_surat = $_POST['perihal_srt_msk'];
            $lampiran_surat = $_POST['lampiran_srt_msk'];
            $Disposisi_surat = $_POST['disposisi_srt_msk'];

            //selanjutnya buat function nya, gw lagi abis waktu mo berangkat ngantor
        }
    }
?>