<?php 

    function getInfo($id){

        $conn = Connection::getConn();

        $sql = "SELECT agencia,conta FROM Users WHERE id = :id LIMIT 1";
        $sql = $conn->prepare($sql);
        $sql->bindValue(':id', $id, PDO::PARAM_INT);
        $sql->execute();

        $result = $sql->fetch(PDO::FETCH_ASSOC);

        return $result;

    }

    



?>