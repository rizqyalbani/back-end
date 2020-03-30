<?php
    class Admin extends mainController{

        public function logOut(){
            session_start();
            $_SESSION['username'] = '';
            $_SESSION['password'] = '';
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            session_unset();
            session_destroy();
            header("Location:".BASE_URL);
        }

        public function logCheck(){
            session_start();
            if ($_SESSION['username'] == '' && $_SESSION['password'] == '') {
                header('Location:'.BASE_URL);
            }
        }
        //function default
        public function index(){
            $this->logCheck();
            $data = [
                "title" => "Persuratan"
            ];

            $this->view("templates/header", $data);
            $this->view("admin/index");
            $this->view("templates/footer");
        }

        //function lain
        public function addDataSuratMasuk(){
            $this->logCheck();
            $data = [
                "title" => "Tambah Surat Masuk",
                "process" => "admin/AddDataSuratMasuk",
                "judul" => "Tambah Surat Masuk",
                "surat" => $this->model("suratMasukModel")->getAllSuratMasuk()
            ];

            $this->view("templates/header", $data);
            $this->view("admin/addDataSuratMasuk", $data);
            $this->view("templates/footer");
            // var_dump($_POST);
            if( !empty($_POST) ){
                if($this->model("suratMasukModel")->addSuratMasuk($_POST) > 0){
                    header("Location: " . BASE_URL . "Admin");
                }
            //end of if
            }
        //end of addData
        }

        public function addDataSuratKeluar(){
            $this->logCheck();
            $data = [
                "title" => "Tambah Surat Keluar",
                "process" => "admin/AddDataSuratKeluar",
                "judul" => "Tambah Surat Keluar",
                "surat" => $this->model("suratKeluarModel")->getAllSuratKeluar()
            ];

            $this->view("templates/header", $data);
            $this->view("admin/addDataSuratKeluar", $data);
            $this->view("templates/footer");
            // var_dump($_POST);
            if( !empty($_POST) ){
                if($this->model("suratKeluarModel")->addSuratKeluar($_POST) > 0){
                    header("Location: " . BASE_URL . "admin/addDataSuratKeluar");
                }
            //end of if
            }
        //end of addDataSuratKeluar
        }

        //nanti diisi function disposisi, itu juga baru buat view untuk disposisi
        public function disposisi($id){
            $data = [
                "surat_masuk" => $this->model("suratMasukModel")->getSuratMasukById($id), //memanggil method di dalam model
                "jDisposisi" => $this->model("jenisDisposisiModel")->getJenis(), //memanggil method di dalam model
                "user"  => $this->model("User_model")->getAllUser($id),
                "process" => "admin/addDisposisi"
            ];
            $this->view("templates/header", $data);
            $this->view("admin/disposisi", $data);
            $this->view("templates/footer");
        }

        public function addDisposisi(){
            $this->logCheck();
            if( !empty($_POST) ){
                echo "halo";
                if($this->model("disposisiModel")->addDisposisi($_POST) > 0){
                    header("Location: " . BASE_URL . "Admin/addDataSuratMasuk");
                }
            //end of if
            }
        }

        public function deleteSuratMasuk($id){
            if ($this->model("suratMasukModel")->deleteSuratMasuk($id) > 0) {
                    header("Location:" . BASE_URL . "admin/addDataSuratMasuk");
            }
        }
        public function deleteSuratKeluar($id){
            if ($this->model("suratKeluarModel")->deleteSuratKeluar($id) > 0) {
                    header("Location:" . BASE_URL . "admin/addDataSuratKeluar");
            }
        }

        public function deleteDisposisi($id){
            if ($this->model("disposisiModel")->deleteDisposisi($id) > 0) {
                    header("Location:" . BASE_URL . "admin/addDataSuratMasuk");
            }
        }

        // lihat disposisi
        public function lihatDisposisi($id){
            if ($this->model('disposisiModel')->getValidateDisposisi($id) > 0) {

                    $data['disposisi'] = $this->model('disposisiModel')->getDisposisi($id);
                    // deklarasi array untuk menampung data
                    $asal = [];
                    $jenis = [];
                    $user = [];
                    foreach ($data['disposisi'] as $disposisi) {
                        $asal[] =  $this->model('disposisiModel')->getAsalDisposisis($this->model('disposisiModel')->getDisposisi($id));
                        $jenis[] = $this->model('disposisiModel')->getJenisDisposisis($this->model('disposisiModel')->getDisposisi($id));
                        $user[] = $this->model('disposisiModel')->getUser($disposisi['id_user']);
                    }  
                    $data["asal"] = $asal;
                    $data["jenis"] = $jenis;
                    $data["title"] = "Disposisi";
                    $data["id_surat"] = $id;
                    $data["user"] = $user;
                    // var_dump($data['disposisi']);

                    $this->view('templates/header', $data);
                    $this->view('admin/lihatDisposisi',$data);
                    $this->view('templates/footer', $data);
            }

            else{
                $this->logCheck();
                $data = [
                    "surat_masuk" => $this->model("suratMasukModel")->getSuratMasukById($id), //memanggil method di dalam model
                    "jDisposisi" => $this->model("jenisDisposisiModel")->getJenis(), //memanggil method di dalam model
                    "user"  => $this->model("User_model")->getAllUser(),
                    "process" => "admin/addDisposisi",
                    "title" => "Add Disposisi"
                ];
                $this->view("templates/header", $data);
                $this->view("admin/disposisi", $data);
                $this->view("templates/footer");
            }

        }

    }
?>