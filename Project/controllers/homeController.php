<?php 


    function exibeInfo(){

        session_start();
        $id     = $_SESSION['id'];
        $nome   = $_SESSION['nome'];

        $result = getInfo($id);

        $agencia = $result['agencia'];
        $conta   = $result['conta'];

        print"<div class ='nav'>";
            print"<p><strong>Bem vindo(a)</strong>$nome";
            print"<strong>Agência:</strong>$agencia";
            print"<strong>Conta:</strong>$conta";
            print"<strong>Saldo:</strong>R$0,00";
            print"<a href='../lib/logout.php'><strong>Sair</strong></p></a>";
        print"</div>";        

    }

    exibeInfo();


        


?>