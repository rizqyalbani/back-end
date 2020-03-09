<?php

class Home extends mainController{
    
    public function index(){
        $data['title'] = 'Home';
        $data['user'] = $this->model('User_model')->getAllDisposisi();
        $this->view('templates/header', $data);
        $this->view('user/index', $data);
        $this->view('templates/footer');
    }
}

?>