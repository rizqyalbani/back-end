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
        }
        $data['perihal'] = $perihal_surat_masuk;
        $data['suratAsal'] = $suratAsal;
        $data['jenis_disposisi'] =$id_jenis_disposisi;
        $data['listUser'] =$listUser;
        // print_r( $this->model('user_model')->getJenisDisposisi($a));
        // $data['test'] = $this->model('User_model')->getUser();
        $this->view('templates/headerUser', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
}

?>