<?php
    class suratMasukModel{
        private $db, $table = "tbl_surat_masuk";

        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        public function addSuratMasuk($data){
            // var_dump($_POST);
            $no_surat = $data['nmr_srt_msk'];
            $tanggal_surat = $data['tgl_srt_msk'];
            $alamat_surat = $data['alamat_srt_msk'];
            $perihal_surat = $data['perihal_srt_msk'];
            $lampiran_surat = $data['lampiran_srt_msk'];
            $disposisi_surat = $data['disposisi_srt_msk'];

            $query = "INSERT INTO $this->table
                        VALUES(
                                '',
                                :lampiran_surat_masuk,
                                :alamat_pengirim,
                                :tanggal_surat_masuk,
                                :nomor_surat_masuk,
                                :perihal_surat_masuk,
                                disposisi_surat_masuk
                                )";
                    
            $this->db->query($query);
            $this->db->bind(':lampiran_surat_masuk', $lampiran_surat );
            $this->db->bind(':alamat_pengirim', $alamat_surat);
            $this->db->bind(':tanggal_surat_masuk', $tanggal_surat);
            $this->db->bind(':nomor_surat_masuk', $no_surat);
            $this->db->bind(':perihal_surat_masuk',$perihal_surat);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>