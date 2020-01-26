<?php

$connect = new mysqli("localhost", "root", "", "db_persuratan");

if(!$connect){
    echo "Connection Error";  
}

?>