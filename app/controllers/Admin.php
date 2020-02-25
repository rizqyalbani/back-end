<?php
    class Admin extends mainController{
        public function index(){
            $this->view("templates/header");
            $this->view("admin/index");
            $this->view("templates/footer");
        }
    }
?>