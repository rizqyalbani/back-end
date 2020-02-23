<?php
    //flash message
    class Flash{
        // untuk set messagenya yang terdiri dari pesannya, aksinya apa, dan tipe alertnya
        public static function setFlashbang($pesan, $aksi, $tipe){
            //pake variable global session
            $_SESSION['flash'] = [
                'pesan' => $pesan,
                'aksi' => $aksi,
                'tipe' => $tipe
            ];
        //end of static function
        }

        public static function flashbang(){
            if ( isset($_SESSION['flash']) ){
                echo '<div class="alert alert-' . $_SESSION['flash']['tipe'] . ' alert-dismissible fade show" role="alert">' 
                        . $_SESSION['flash']['pesan'] . '<strong>'. $_SESSION['flash']['aksi'] .'</strong>' .
                        '<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                unset($_SESSION['flash']);
            //end if
            }
        //end of function static
        }
    }
?>