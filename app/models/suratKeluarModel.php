<?php
    class suratKeluarModel{
        // keperluan table yang dipilih dan database yang digunakan, untuk tau db yang digunakan cek db-wrapper
        private $db, $table = "tbl_surat_keluar";

        // construct ke database
        public function __CONSTRUCT(){
            $this->db = new Database;
        }

        // function tambah surat keluar
        public function addSuratKeluar($data){
            // var_dump($_POST);
            $no_surat = $data['nmr_srt_klr'];
            $tanggal_surat = $data['tgl_srt_klr'];
            $alamat_surat = $data['alamat_srt_klr'];
            $perihal_surat = $data['perihal_srt_klr'];
            $lampiran_surat = $data['lampiran_srt_klr'];
            $nama_instansi_surat_keluar = $data['nama_instansi_surat_keluar'];

            $query = "INSERT INTO tbl_surat_keluar
                        VALUES(
                                '',
                                :lampiran_surat_keluar,
                                :alamat_tujuan,
                                :tanggal_surat_keluar,
                                :nomor_surat_keluar,
                                :perihal_surat_keluar,
                                :nama_instansi_surat_keluar
                                )";
                    
            $this->db->query($query);
            // binding data disini guys, untuk dikaitkan sama VALUES query data diatas
            $this->db->bind(':lampiran_surat_keluar', $data['lampiran_srt_klr']);
            $this->db->bind(':alamat_tujuan', $data['alamat_srt_klr']);
            $this->db->bind(':tanggal_surat_keluar', $data['tgl_srt_klr']);
            $this->db->bind(':nomor_surat_keluar', $data['nmr_srt_klr']);
            $this->db->bind(':perihal_surat_keluar', $data['perihal_srt_klr']);
            $this->db->bind(':nama_instansi_surat_keluar', $data['nama_instansi_surat_keluar']);

            $this->db->execute();
            // dihitung apakah ada baris di database yang terpengaruh
            return $this->db->rowCount();
        // end of function tambah data 
        }
        public function getAllSuratKeluar(){
            $query = "SELECT * FROM " . $this->table;
            $this->db->query($query);
            return $this->db->allResult();
        //end of getAllSuratKeluar
        }
    // end of class model
    
    // untuk delete
        public function deleteSuratKeluar($id){
            $delete = "DELETE FROM $this->table WHERE id_surat_keluar = :id";
            $this->db->query($delete);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }
    
    // get surat keluar by id nya 
    public function getSuratKeluarById($id){
        $query = ("SELECT * FROM " . $this->table . " WHERE id_surat_keluar = :id");
        $this->db->query($query);
        $this->db->bind("id", $id);
        return $this->db->singleResult();
    }
    
    }
?>