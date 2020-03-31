<?php
    class Database{
        //conncect database
        private $host = host,
                $user = user,
                $pass = pass,
                $dbName = db;
        //statement and database home
        private $stmt, $dbh;

        public function __CONSTRUCT(){
            //database source
            $dsn = "mysqli:host" . $this->host . "; dbName=" . $this->db;

            $option = [
                PDO::ATTR_PERSISTENT => true,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            ];

            //connect, mirip kayak mysqli_connect
            try{
                // new PDO($dsn, $user, $pass)
                $this->dbh = new PDO($this->dsn, $this->user, $this->pass);
            }
            //kalo error tangkap errornya simpan di variable e lalu tampilkan pesannya
            catch(PDOException $e){
                die($e->getMessage);
            }
        //end of constructs
        }
        //untuk query data ke database
        public function query($query){
            $this->stmt = $this->dbh->prepare($query);
        }

        //untuk ngaitin value yang mau dimasukin ke database, kalo udah belajar mvc di unpas tau ini buat apa
        public function bind($param, $value, $type = null){
            if ( is_null($type) ) {
                switch(true){
                    case is_int($value) :
                        $type = PDO::PARAM_INT;

                    case is_bool($value) :
                        $type = PDO::PARAM_BOOL;

                    //kalo datanya null
                    case is_null($type) :
                        $type = PDO::PARAM_NULL;
                    
                    default :
                        $type = PDO::PARAM_STR;
                }
            }
            $this->stmt->bindValue($param,$value,$type);
        //end of function bind
        }

        //function execute
        public function execute(){
            $this->stmt->execute();
        }

        //function ambil semua data menjadi array assosiative
        public function allResult(){
            $this->execute();
            return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        //function untuk ambil data 1 aja
        public function singleResult(){
            $this->execute();
            return $this->stmt->fetch(PDO::FETCH_ASSOC);
        }

        //menghitung baris yang terpengaruh
        public function rowCount(){
            $this->stmt->rowCount();
        }

    //end of class
    }
?>