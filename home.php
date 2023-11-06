<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SITE</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            text-align: center;
            color: yellow;
            background-image: url(/images/comida-saludable.jpg);
            background-size: cover;
            margin: 200px;


        }

        .box {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, 50%);
            background-color: rgba(0, 0, 0, 0.8);
            padding: 30px;
            border-radius: 10px;

        }

        a {
            text-decoration: none;
            color: white;
            border: 3px solid dodgerblue;
            border-radius: 10px;
            padding: 10px;
        }

        a:hover {
            background-color: dodgerblue;
        }

        .titulo {
            color: yellow;
            background-color: rgba(0, 0, 0, 0.8);
            display: inline-block;


        }
    </style>
</head>

<body>
    <div class="titulo">
        <h1><strong> COOKING SCHOOL</strong></h1>
        <h2><strong>Vem cozinhar com a gente!</strong></h2>
    </div>
    <div class="box">
        <a href="login.php">Login</a>
        <a href="formulario.php">Cadastre-se</a>
    </div>
</body>

</html>