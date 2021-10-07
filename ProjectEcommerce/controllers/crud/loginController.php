<?php 

    class loginController{

        public function login(array $post){

            if(!empty($post['bt_entrar'])){

                $loginModel = new loginModel;

                $verify = $loginModel->verifyLogin($post);

                if(isset($verify->id)){

                    $id     = $verify->id;
                    $nome   = $verify->nome;
                    $adm    = $verify->adm;

                    session_start();

                    $_SESSION['id']   = $id;
                    $_SESSION['nome'] = $nome;
                    $_SESSION['adm']  = $adm;

                    header('Location: index.php');

                
                }

                

            }
        }
    }

?>