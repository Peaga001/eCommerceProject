
<head>
    <title>Criar Conta</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/templatemo.css">
    

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>

    <?php include_once "components/nav-bar/nav-bar.php";?>

    <!-- Form-Login -->

    <div class="container py-5">
        <div class="row py-5">
            <form class="col-md-9 m-auto" method="post" name ="form-cadastro" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputnome">Nome</label>
                            <input type="text" class="form-control mt-1" id="nome" name="nome" placeholder="Insira seu nome">
                    </div>

                    <div class="form-group col-md-6 mb-3">
                        <label for="inputsobrenome">Sobrenome</label>
                            <input type="text" class="form-control mt-1" id="sobrenome" name="sobrenome" placeholder="Complete com seu sobrenome">
                    </div>
                </div>

                <div class="row">
                    
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputemail">E-mail</label>
                            <input type="email" class="form-control mt-1" id="email" name="email" placeholder="exemplo@email.com"><br>
                    </div>        
                    
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputtelefone">Telefone</label>
                            <input type="text" class="form-control mt-1" id="telefone" name="telefone" placeholder="(00)98765-4321"><br>
                    </div>
                </div>
                
                <div class="row">

                    <div class="form-group col-md-6 mb-3">    
                        <label for="inputcpf">Cpf</label>
                            <input type="text" class="form-control mt-1" id="cpf" name="cpf" placeholder="000-000-000-00"><br>
                    </div>

                    <div class="form-group col-md-6 mb-3">    
                        <label for="inputcpf">Data de Nascimento</label>
                            <input type="date" class="form-control mt-1" id="data" name="dataNascimento" placeholder="00/00/0000"><br>
                    </div>

                </div>

                <div class="row">

                    <div class="form-group col-md-6 mb-3">    
                        <label for="inputlogin">Login</label>
                            <input type="text" class="form-control mt-1" id="login" name="login" placeholder="Escolha seu login"><br>
                    </div>

                    <div class="form-group col-md-6 mb-3">    
                        <label for="inputsenha">Senha</label>
                            <input type="password" class="form-control mt-1" id="senha" name="senha" placeholder="Preencha sua senha"><br>
                    </div>
                    
                </div>    
                    
                    <input class="btn btn-success" type="submit" id="bt_enviar" name="bt_enviar" value="Entrar" style="width: 100%; margin-top:5%; font-size:20px">
                        <p style="text-align: center;"><a href="esqueci_minha_senha.php" style="text-decoration: none; color:black">Esqueci minha senha </a> / <a href="login.php" style="text-decoration: none; color:black">Entrar</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>



    <?php 

        require_once './lib/host.php';
        require_once './models/crud/createModel.php';
        require_once './controllers/crud/createController.php';

        $createUser = new createController;
        $createUser->createUser($_POST);

    ?>



</body>