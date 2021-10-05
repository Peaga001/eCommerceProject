<?php 

    abstract class Connection{

        private static $conn;

        public static function getConn(){

            $servidor = 'mysql.strong.kinghost.net';
            $banco    = 'strong';
            $usuario  = 'strong';
            $senha    = 'PmdC1290';
        
            try {
                
                if(!self::$conn){
                    self::$conn = new PDO("mysql:host=$servidor;dbname=$banco",$usuario, $senha);
                    return self::$conn;

                }
                else{
                    return self::$conn;
                }

            } catch(PDOException $e) {
                die('Erro: ' . $e->getMessage());
            }

        }

    }            

?>