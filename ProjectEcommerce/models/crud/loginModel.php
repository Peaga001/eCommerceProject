<?php

class loginModel{

    public function verifyLogin(array $array){

        $conn = Connection::getConn();

        $sql = "SELECT c.id as id, c.nome as nome, u.adm as adm 
                FROM cadastro c 
                INNER JOIN usuario u ON u.cpf = c.cpf 
                WHERE u.login = :login and u.senha = :senha 
                ORDER BY u.id DESC LIMIT 1";

        $sql = $conn->prepare($sql);
        $sql->bindValue(':login',$array['login']);
        $sql->bindValue(':senha',$array['senha']);
        $sql->execute();

        $result = $sql->fetchObject();

        try {
            if(count($result)>=1){
                return $result;
            }
        }
        
        catch (\Exception $th) {
            throw new Exception('Login ou senha inválidos, favor verificar!');
            die('Erro: 2' . $th->getMessage());
        }
        
    }


}

?>