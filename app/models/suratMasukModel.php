<?php
    class suratMasukModel{
        private $db, $table = "tbl_surat_masuk";

        //function construct database
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
            $nama_instansi_surat_masuk = $data['nama_instansi_surat_masuk'];

            $query = "INSERT INTO $this->table
                        VALUES(
                                '',
                                :lampiran_surat_masuk,
                                :alamat_pengirim,
                                :tanggal_surat_masuk,
                                :nomor_surat_masuk,
                                :perihal_surat_masuk,
                                :nama_instansi_surat_masuk
                                )";
                    
            $this->db->query($query);
            // mengkaitkan data untuk di query
            $this->db->bind(':lampiran_surat_masuk', $lampiran_surat );
            $this->db->bind(':alamat_pengirim', $alamat_surat);
            $this->db->bind(':tanggal_surat_masuk', $tanggal_surat);
            $this->db->bind(':nomor_surat_masuk', $no_surat);
            $this->db->bind(':perihal_surat_masuk',$perihal_surat);
            $this->db->bind(':nama_instansi_surat_masuk',$nama_instansi_surat_masuk);

            $this->db->execute();
            // penghitung apakah ada baris yang terpengahruh
            return $this->db->rowCount();
        // end of add surat masuk 
        }
        
        public function getAllSuratMasuk(){
            $query = "SELECT * FROM " . $this->table;
            //function query ada di db-wrapper
            $this->db->query($query);
            //function untuk ambil semua data, ada di file db-wrapper
            return $this->db->allResult();
        // end of surat masuk function
        }

        public function getSuratMasukById($id){
            $query = ("SELECT * FROM " . $this->table . " WHERE id_surat_masuk = :id");
            $this->db->query($query);
            $this->db->bind("id", $id);
            return $this->db->singleResult();
        }

        //delete surat masuk
        public function deleteSuratMasuk($id){
            $delete = "DELETE FROM $this->table WHERE id_surat_masuk = :id";
            $this->db->query($delete);
            $this->db->bind("id", $id);
            $this->db->execute();
            return $this->db->rowCount();
        }

        //update surat masuk masih belom lengkap
        public function updatedata($id){
            $id_surat_masuk = $this->input->post('id_surat_masuk');
            $lampiran_surat_masuk = $this->input->post('lampiran_surat_masuk');
            $alamat_pengirim = $this->input->post('alamat_pengirim');
            $tanggal_surat_masuk = $this->input->post('tanggal_surat_masuk');
            $nomor_surat_masuk = $this->input->post('nomor_surat_masuk');
            $perihal_surat_masuk = $this->input->post('perihal_surat_masuk');
            $nama_instansi_surat_masuk = $this->input->post('nama_instansi_surat_masuk');
            $data = array(
                    'id_surat_masuk'=>$id_surat_masuk,
                    'lampiran_surat_masuk'=>$lampiran_surat_masuk,
                    'alamat_pengirim'=>$alamat_pengirim,
                    'tanggal_surat_masuk'=>$tanggal_surat_masuk,
                    'nomor_surat_masuk'=>$nomor_surat_masuk,
                    'perihal_surat_masuk'=>$perihal_surat_masuk,
                    'nama_instansi_surat_masuk'=>$nama_instansi_surat_masuk
                    );
            // $this->db->where(array('no_bukti'=>$no_bukti,
            //                         'tgl_entry'=>$tgl_entry));
            // $this->db->update('entry_buku_kas',$data);
        }
     
        function filterdata($no_bukti,$tgl_entry){
            return $this->db->get_where('entry_buku_kas',
                              array('no_bukti'=>$no_bukti,
                                    'tgl_entry'=>$tgl_entry))->row();

        }                       

    }
?>