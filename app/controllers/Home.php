<?php

class Home extends mainController{

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
    
    public function index(){
        session_start();
        $data['title'] = 'Home';
        $data['user'] = $this->model('User_model')->getAllDisposisi();
        $data['allStatus'] = $this->model('user_model')->allStatus();
        // deklarasiin variable untuk jadi sebuah array
        $id_jenis_disposisi = [];
        $suratAsal = [];
        $perihal_surat_masuk = [];
        $listUser = [];
        
        foreach ($data['user'] as $a) {
            $id_jenis_disposisi[] = $this->model('user_model')->getJenisDisposisi($a);
            $suratAsal[] = $this->model('user_model')->getDataSurat($a);
            $perihal_surat_masuk[] = $this->model('user_model')->getDataSurat($a);
            $listUser[] = $this->model('user_model')->getUser($a);
            $status[] = $this->model('user_model')->getStatus($a['id_status']);
            // print_r($a['id_status']);
            // $statusUser[] = $this->model('user_model')->getStatus($a['id_s'])
        }
        $data['status'] = $status;
        $data['perihal'] = $perihal_surat_masuk;
        $data['suratAsal'] = $suratAsal;
        $data['jenis_disposisi'] =$id_jenis_disposisi;
        $data['listUser'] =$listUser;
        // $data['test'] = $this->model('User_model')->getUser();
        $this->view('templates/headerUser', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
    // update status
    public function updateStatus($id_surat){
        
        if ( isset($_POST['submit']) ) {
            if ( $this->model('user_model')->updateStatus($_POST['status'], $id_surat) > 0 ) {
                $this->index();
            }
        }
    }


}

?>