<?php
session_start(); // Inicie a sessão se ainda não foi iniciada

// Verifique se o usuário está logado
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirecione para a página de login se não estiver logado
    exit();
}

if (isset($_POST['submit'])) {
    include_once('config2.php');

    $user_id = $_SESSION['user_id']; // Obtém o user_id da sessão

    $nome = $_POST['nome'];
    $categoria = $_POST['categoria'];
    $ingredientes = $_POST['ingredientes'];
    $mdpreparo = $_POST['mdpreparo'];

    // Verificar se um arquivo de imagem foi enviado
    if (isset($_FILES['imagem']) && $_FILES['imagem']['size'] > 0) {
        $imagem_tmp = $_FILES['imagem']['tmp_name'];
        $imagem_binario = file_get_contents($imagem_tmp);
        $imagem_binario_sql = mysqli_real_escape_string($conexaoreceita, $imagem_binario);
        $result = mysqli_query($conexaoreceita, "INSERT INTO receita(nome, categoria, ingredientes, mdpreparo, imagem, user_id) VALUES ('$nome', '$categoria', '$ingredientes', '$mdpreparo', '$imagem_binario_sql', $user_id)");
    } else {
        // Se não houver imagem, insira apenas os outros campos
        $result = mysqli_query($conexaoreceita, "INSERT INTO receita(nome, categoria, ingredientes, mdpreparo, user_id) VALUES ('$nome', '$categoria', '$ingredientes', '$mdpreparo', $user_id)");
    }

    header('Location: bancodereceita.php');
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
            /* Ajuste a altura conforme necessário */
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
            height: 100px;
            /* Ajuste a altura conforme necessário */
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


        option[disabled] {
            color: black;
        }

        option[value] {
            color: black;
        }
    </style>
</head>

<body>
    <a href="restaurante.html">Voltar</a>
    <div class="box">
        <form action="formulariodereceita.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>ESCREVA AQUI SUA RECEITA</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" required>
                    <label for="nome" class="labelInput">Nome da Receita</label>
                </div>
                <br></br>
                <div class="inputBox2">

                    <p>Escolha uma imagem:</p>
                    <input type="file" name="imagem" id="imagem" accept="image/*">
                    <img  style="max-width: 100%; max-height: 200px; margin-top: 10px;">
                </div>
                <br></br>
                <div class="inputBox1">
                    <select name="categoria" id="categoria" class="inputUser" required>
                        <option value="" disabled selected>Selecione a categoria</option>
                        <option value="Massas">Massas</option>
                        <option value="Oriental">Oriental</option>
                        <option value="Vegana">Vegana</option>
                        <option value="Frutos-do-mar">Frutos do Mar</option>
                        <option value="Mexicana">Mexicana</option>
                        <option value="Sobremesas">Sobremesas</option>


                    </select>
                </div>
                <br>
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

</script>
</html>