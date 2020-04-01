<?php 

class Register extends mainController
{
    public function index()
    {
        $data['title'] = 'Register';
        $this->view("Register/Register", $data);
        $this->view("templates/footer");
      
    }
}