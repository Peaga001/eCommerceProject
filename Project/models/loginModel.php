<?php  

    function Login($login,$senha){

        $conn = Connection::getConn();

        $sql = "SELECT COUNT(*) as contador FROM Users WHERE login = :login and senha = :senha";
        $sql = $conn->prepare($sql);
        $sql->bindValue(':login',$login, PDO::PARAM_STR);
        $sql->bindValue(':senha',$senha, PDO::PARAM_STR);
        $sql->execute();

        $result = $sql->fetchObject();

        if($result->contador==1){
            return "Logado com sucesso!";
        }

        else{
            return "Login ou senha errados, favor verificar!";
        }
    }

?>