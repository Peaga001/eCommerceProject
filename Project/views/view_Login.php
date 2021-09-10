<style>

    body{

        background-color:#00BFFF;
    }

    form{
        margin-left: 33%;
        margin-top:10%;
        width: 30%;
        height: 750px;
    }
    .form{

        background-color:white;
        padding: 30px;
        border-radius: 4%;
    }

    form label{
        font-size: 40px;
    }

    form input{
        margin-top: 1%;
        margin-bottom: 1%;
        font-size: 20px;
        width:100%;
        height: 40px;
    }

    .form p a{
        text-decoration: none;
        color: black;
    }

    #bt_entrar{
        
        font-size: 25px;
        border: 1px solid white;
        background-color:#00BFFF;
        color: white;
        border-radius: 5px;
    }

    #bt_voltar{

        position: relative;
        font-size: 20px;
        background-color:#00BFFF;
        color: white;
        border: 3px solid white;
        border-radius: 5px;
        padding: 5px;
        text-decoration: none;
        left: 35%;

    }

    
</style>

    <form action="" method="POST">

        <div class="form">

            <label for="login">Login</label><br>
                <input id="login" type="text" name="login"><br>
            

            <label for="senha">Senha</label><br>
                <input id="senha" type="password" name="senha">
            

            <input type="submit" id="bt_entrar" name="enviar" value="Entrar">

            <p><a href="">Esqueci minha senha / </a><a href=""> Criar Conta</a></p>


        <a href="../index.php" id="bt_voltar">Voltar -></a>

        </div>

    </form>

    <?php
    
        require_once "../lib/host.php"; 
        require_once "../models/loginModel.php";
        require_once "../controllers/loginController.php";
                

        

       

       




