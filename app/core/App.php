<?php
    Class App{
        protected
            $controller = "Admin",
            $method = "Index",
            $params = [];

        public function parseUrl(){
            if( isset($_GET['url']) ){
                $url = rtrim($_GET['url'], "/");
                $url = filter_var($url, FILTER_SANITIZE_URL);
                $url = explode("/", $url);
                // var_dump($url);
                return $url;
            //end of if
            }
        //end function parseUrl
        }

        public function __CONSTRUCT(){
            $url = $this->parseUrl();
            if ( file_exists("../app/controllers/". $url[0] . ".php" ) ) {
                $this->controller = $url[0];
                unset($url[0]);
            //end file exists
            }
            require_once "../app/controllers/" . $this->controller . ".php";
            $this->controller = new $this->controller();

            if ( isset($url[1]) ){
                if( method_exists($this->controller, $url[1]) ){
                    $this->method = $url[1];
                    unset($url[1]);
                //end of method exists
                }
            //end of isset
            }
            if( !empty($url) ){
                $this->params = array_values($url);
            }
            call_user_func_array([$this->controller, $this->method], $this->params);

        }
    }
?>