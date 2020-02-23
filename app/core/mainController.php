<?php
    class mainController{
        public function view($view, $data = []){
            require_once "../app/view/" . $view . ".php";
        }

        public function model($model, $data = []){
            require_once "../app/models/" . $model . ".php";
            return new $model;
        }
    }
?>