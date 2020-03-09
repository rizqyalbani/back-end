<?php 

class Login extends mainController
{
    public function login()
    {
        if(!isset($_POST['submit']))
        {
            $data = [
                "judul" => "Persuratan",
            ];
            $this->view("Login/Login",$data);
        }else{
            $this->model('loginModel')->login($_POST);
        }
    }
}