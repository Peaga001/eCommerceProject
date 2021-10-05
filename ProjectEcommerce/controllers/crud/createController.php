<?php 

    class createController{

        protected $model;

        public function createUser(array $var){

            $this->model = new createModel;

            if(isset($var['bt_enviar'])){

                $cpf   = $var['cpf'];
                $login = $var['login'];

                //Verifica se existe usuario criado com uma das condições
                $verify = $this->model->getUser($cpf,$login);

                if(empty($verify)){

                    $user = array();

                    $user['nome']           = $var['nome'].' '.$var['sobrenome'];
                    $user['email']          = $var['email'];
                    $user['telefone']       = $var['telefone'];
                    $user['dataNascimento'] = $var['dataNascimento'];
                    $user['senha']          = $var['senha'];   
                    $user['cpf']            = $cpf;
                    $user['login']          = $login;
                    
                    $newUser = $this->model->setUser($user);

                    return $newUser;

                }

            }

            else{
                exit;
            }



        }

    }

?>