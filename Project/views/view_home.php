<!DOCTYPE html>
<html lang="pt-br">
<head>

<style>

.nav{

    background-color:#20B2AA;
    font-size: 25px;
    color: #1C1C1C;
    width: 100%;
    height: 100px;
    text-align: left;

}

.nav p{

    padding: 20px;
    margin-top: 0;
    color: white;

}

.nav p strong, .nav a{

    color: black;
    margin-left: 5%;
    text-decoration: none;
}

.nav a{

    font-size: 30px;
    color: black;
}


.options{

    text-align: center;
    height: 500px;
}





</style>

    <?php require_once "../lib/verify_logout.php";?>

    <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Sans+Arabic:wght@100;200&display=swap" rel="stylesheet"> 

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/index.css">
    <link rel="stylesheet" href="../components/footer/footer.css">

    <title>Home</title>
</head>
<body>

    <?php require_once "../lib/host.php";?>    
    <?php require_once "../models/homeModel.php";?>
    <?php require_once "../controllers/homeController.php";?>

        <div class="options">
            <h1>Opções</h1>
        </div>

    <?php require_once "../components/footer/footer.php";?>

    
</body>
</html>