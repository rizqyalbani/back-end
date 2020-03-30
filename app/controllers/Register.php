<?php 

class Register extends mainController
{
    public function index()
    {
        $data['title'] = 'Register';
        $this->view("templates/header",$data);
        $this->view("Register/Register");
        $this->view("templates/footer");
      
    }
}