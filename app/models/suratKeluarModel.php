<?php
    class suratKeluarModel{
        private $db, $table = "tbl_surat_keluar";

        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        public function addSuratKeluar($data){
            // var_dump($_POST);
            $no_surat = $data['nmr_srt_klr'];
            $tanggal_surat = $data['tgl_srt_klr'];
            $alamat_surat = $data['alamat_srt_klr'];
            $perihal_surat = $data['perihal_srt_klr'];
            $lampiran_surat = $data['lampiran_srt_klr'];
            $disposisi_surat = $data['disposisi_srt_klr'];

            $query = "INSERT INTO tbl_surat_keluar
                        VALUES(
                                '',
                                :lampiran_surat_keluar,
                                :alamat_tujuan,
                                :tanggal_surat_keluar,
                                :nomor_surat_keluar,
                                :perihal_surat_keluar,
                                disposisi_surat_keluar
                                )";
                    
            $this->db->query($query);
            $this->db->bind(':lampiran_surat_keluar', $data['lampiran_srt_klr']);
            $this->db->bind(':alamat_tujuan', $data['alamat_srt_klr']);
            $this->db->bind(':tanggal_surat_keluar', $data['tgl_srt_klr']);
            $this->db->bind(':nomor_surat_keluar', $data['nmr_srt_klr']);
            $this->db->bind(':perihal_surat_keluar', $data['perihal_srt_klr']);

            $this->db->execute();
            return $this->db->rowCount();
        }
    }
?>