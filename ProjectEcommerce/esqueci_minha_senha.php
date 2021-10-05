
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
            <form action="login.php" class="col-md-9 m-auto" method="post" role="form">
                <div class="row">
                    <div class="form-group col-md-6 mb-3">
                        <label for="inputcpf">Insira seu cpf</label>
                            <input type="text" class="form-control mt-1" id="cpf" name="cpf" placeholder="Insira seu cpf"><br>
                        <label for="inputemail">Insira seu e-mail</label>
                            <input type="email" class="form-control mt-1" id="email" name="email" placeholder="exemplo@email.com">
                        <input class="btn btn-success" type="submit" id="bt_enviar" name="bt_enviar" value="Enviar Email" style="width: 100%; margin-top:5%">
                    </div>
                </div>
            </form>
        </div>
    </div>




</body>