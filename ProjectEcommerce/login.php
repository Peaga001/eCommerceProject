
<head>
    <title>Login</title>
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
            <form class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputlogin">Login</label>
                            <input type="text" class="form-control mt-1" id="login" name="login" placeholder="Insira seu Login"><br>
                        <label for="inputsenha">Senha</label>
                            <input type="password" class="form-control mt-1" id="senha" name="senha" placeholder="Insira sua Senha">
                        <input class="btn btn-success" type="submit" id="bt_entrar" name="bt_entrar" value="Entrar" style="width: 100%; margin-top:5%">
                        <p style="text-align: center;"><a href="esqueci_minha_senha.php" style="text-decoration: none; color:black">Esqueci minha senha </a> / <a href="create_account.php" style="text-decoration: none; color:black">Criar Conta</a></p>
                    </div>
                </div>
            </form>
        </div>
    </div>


    <?php 

        require_once './lib/host.php';
        require_once './models/crud/loginModel.php';
        require_once './controllers/crud/loginController.php';

        $login = new loginController;
        $login->login($_POST);

    ?>




</body>