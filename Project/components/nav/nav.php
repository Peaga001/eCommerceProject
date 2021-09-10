<?php

    $verify_adm ="";

    if ($verify_adm=="ok") {

        print"<br>";
            print"<div class='nav-options'>";
                print"<a href='views/view_aberturaDeConta.php'>Abertura de Conta</a>";
                print"<a href='lib/logout.php>Sair</a>";
                print"<a href='views/view_allContas.php'>Relatório</a>";
        print"</div>";
        
    }

    else{

        print"<br>";
            print"<div class='nav-options'>";
                print"<a href='views/view_Login.php'>Login</a>";
        print"</div>";

    }

    