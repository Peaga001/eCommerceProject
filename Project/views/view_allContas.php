<style>

    body{
    
        background-color:#00BFFF;
    }

    .container{
        position: relative;
        margin-top: 1%;
        background-color: white;
        text-align: center;
        height: 250px;
    }

    form{
        padding: 10px;
    }

    form input{
        border: 1px solid #00BFFF;

    }

    #bt_voltar{

        background-color: #00BFFF;
        color: white;
        padding: 10px;
        font-size: 15px;
        border-radius: 3%;
        text-decoration: none;
    }

    #bt_enviar{
        border-style: none;
        background-color: #00BFFF;
        color: white;
        padding:10px;
        margin-top: 20px;
        border-radius: 3%;
        font-size: 20px;
        cursor: pointer;
    }

    .relatorio{

        background-color: white;
        height: 750px;
        margin-top: 5%;
    }

    .tabela{
        position: relative;
        left: 10%;
        width: 80%;
        border: 1px solid black;
        padding: 10px;
    }
    .cabecalho{
        background-color: #00BFFF;
        color: white;


    }

    .colunas{
        padding:5px;
        text-align: center;
    }

</style>

<div class="container">

    <form method="post" action="">

        <h1>Digite o período desejado</h1>

        <label>De:
            <input type="date" name="inicio">
        </label>

        <label>Até:
            <input type="date" name="fim">
        </label> <br>

        <input type="submit" value="Buscar Período" id="bt_enviar" name="enviar">

    </form>


    <a href="../index.php" id="bt_voltar">Voltar</a>

    <?php
        require_once "../lib/host.php";
        require_once "../models/allContasModel.php";
        require_once "../controllers/allContasController.php";
    ?>


    <div class="relatorio">
        <br><table class="tabela">
            <tr class="cabecalho">
                <td class="colunas">Nome</td>
                <td class="colunas">Cpf</td>
                <td class="colunas">Agência</td>
                <td class="colunas">Conta</td>
            </tr>

            <?php getDados();?>

        </table>
    </div>



</div>
