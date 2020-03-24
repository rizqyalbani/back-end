<?php 

class Register extends mainController
{
    public function Register()
    {
        $data['title'] = 'Register';
        $this->view("templates/header",$data);
        $this->view("Register/Register");
        $this->view("templates/footer");
      
    }
}