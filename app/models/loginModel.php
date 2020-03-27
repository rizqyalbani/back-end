<?php

class loginModel
{
    private $tb = "tbl_user",
    		$db,
    		$url;

    public function __CONSTRUCT()
    {
        $this->db = new Database();
    }

   	public function getUserBy($verificator, $value)
    {
        if (isset($verificator) && isset($value)) {
            $q = "SELECT * FROM $this->tb WHERE $verificator = :$verificator";
            // var_dump($q);
            $this->db->query($q);
            $this->db->bind($verificator, $value);
            return $this->db->singleResult();
        }
    }
    public function login($data)
    {
        $user =  $data['username'];
        $pass = $data['password']; 


        if(isset($user) && $user != ""){
        
            if($data_user = $this->getUserBy("nama", $user)){
                // var_dump($data_user);
                $password = $data_user['password'];
                $role = $data_user['id_role'];
                if(isset($password) && $password != ""){
                    if($pass == $password){
                        if($role == '1' || $role == 1){
                            session_start();
                            $_SESSION['username'] = $user;
                            $_SESSION['password'] = $pass;
                            header('Location: '.BASE_URL.'admin');
                        }elseif($role == '2' || $role == 2){
                            session_start();
                            $_SESSION['username'] = $user;
                            $_SESSION['password'] = $pass;
                            header('Location: '.BASE_URL.'home');
                            // var_dump("DATA USER");die;
                        }
                    }else{ //end if cek password
                        var_dump("Wrong Password!");die;
                    }
                }else{ //end if password
                    var_dump("Fill Password!");die;
                }
            }else{ //end if data_user
                var_dump("Wrong Username!");die;
            }
        

        }else{ //end if user
            var_dump("Fill Username!");die;
        }
    }
}