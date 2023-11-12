<?php
if (isset($_POST['submit'])) {
    //print_r($_POST['nome']);
    //print_r('<br>');
    //print_r($_POST['ingredientes']);
    //print_r('<br>');
    //print_r($_POST['mdpreparo']);
    //print_r('<br>');


    include_once('config2.php');

    $nome = $_POST['nome'];
    $ingredientes = $_POST['ingredientes'];
    $mdpreparo = $_POST['mdpreparo'];



    $result = mysqli_query($conexaoreceita, "INSERT INTO receitas(nome,ingredientes,mdpreparo) VALUES ('$nome','$ingredientes','$mdpreparo')");

    header('Location: restaurante.html');
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            background-image: url(images/comida-saludable.jpg);
            background-size: cover;

        }

        .box {
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: rgba(0, 0, 0, 0.9);
            padding: 15px;
            border-radius: 15px;
            width: 60%;
            margin: auto;

        }

        fieldset {
            border: 3px solid dodgerblue;

        }

        legend {
            border: 1px solid dodgerblue;
            padding: 10px;
            text-align: center;
            background-color: dodgerblue;
            border-radius: 8px;
        }

        .inputBox {
            position: relative;
        }

        .inputUser {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;

        }

        .inputUser1 {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            height: 100px;

        }

        .inputUser2 {
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
            height: 200px;
        }

        .labelInput {
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .5s;
        }

        .inputUser:focus~.labelInput,
        .inputUser:valid~.labelInput,
        .inputUser1:focus~.labelInput,
        .inputUser1:valid~.labelInput,
        .inputUser2:focus~.labelInput,
        .inputUser2:valid~.labelInput {
            top: -20px;
            font-size: 12px;
            color: dodgerblue;
        }

        

        #submit {
            background-image: linear-gradient(to right, rgb(0, 92, 197), rgb(79, 14, 201));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;

        }

        a {

            color: white;
            background-color: black;
            border-radius: 10px;
            padding: 10px;
        }
    </style>
</head>

<body>
    <a href="restaurante.html">Voltar</a>
    <div class="box">
        <form action="formulariodereceita.php" method="POST">
            <fieldset>
                <legend><b>ESCREVA AQUI SUA RECEITA</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome da Receita</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <textarea name="ingredientes" id="ingredientes" class="inputUser1" required></textarea>
                    <label for="ingredientes" class="labelInput">Ingredientes</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <textarea name="mdpreparo" id="mdpreparo" class="inputUser2" required></textarea>
                    <label for="mdpreparo" class="labelInput">Modo de Preparo</label>
                </div>
                <br></br>

                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>

</html>