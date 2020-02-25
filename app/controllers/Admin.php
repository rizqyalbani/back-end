<?php
    class Admin extends mainController{
        public function index(){
            $this->view("templates/header");
            $this->view("templates/footer");
        }
    }
?>