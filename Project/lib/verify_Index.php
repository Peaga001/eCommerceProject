<?php

    session_start();

    if(isset($_SESSION['id'])){
        header('Location: views/view_home.php');
    }

?>