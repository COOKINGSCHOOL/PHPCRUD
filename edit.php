<?php
include_once('config2.php');

session_start();

if (!empty($_GET['id'])) {
    $id = $_GET['id'];

    // Obtém o user_id da sessão
    $user_id_session = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : null;

    $sqlSelect = "SELECT * FROM receita WHERE id=$id AND user_id=$user_id_session";
    $result = $conexaoreceita->query($sqlSelect);

    if ($result->num_rows > 0) {
        while ($user_data = mysqli_fetch_assoc($result)) {
            $nome = $user_data['nome'];
            $categoria = $user_data['categoria'];
            $ingredientes = $user_data['ingredientes'];
            $mdpreparo = $user_data['mdpreparo'];
        }
    } else {
        header('Location: bancodereceita.php');
        exit(); // Certifique-se de encerrar o script após o redirecionamento
    }
} else {
    header('Location: bancodereceita.php');
    exit(); // Certifique-se de encerrar o script após o redirecionamento
}
?>
<!-- Restante do seu código HTML -->

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Receita</title>
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


        #update {
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
    <a href="bancodereceita.php">Voltar</a>
    <div class="box">
        <form action="saveEdit.php" method="POST" enctype="multipart/form-data">
            <fieldset>
                <legend><b>EDITAR RECEITA</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome; ?>" required>
                    <label for="nome" class="labelInput">Nome da Receita</label>
                </div>
                <br></br>
                <div class="inputBox2">

                    <p>Escolha uma imagem:</p>
                    <input type="file" name="imagem" id="imagem"  accept="image/*">
                    <img style="max-width: 100%; max-height: 200px; margin-top: 10px;">

                </div>
                <br></br>
                <div class="inputBox1">
                    <select name="categoria" id="categoria" class="inputUser" required>
                        <option value="" disabled selected>Selecione a categoria</option>
                        <option value="massas" <?php echo (strtolower($categoria) == 'massas') ? 'selected' : ''; ?>>Massas</option>
                        <option value="oriental" <?php echo (strtolower($categoria) == 'oriental') ? 'selected' : ''; ?>>Oriental</option>
                        <option value="vegana" <?php echo (strtolower($categoria) == 'vegana') ? 'selected' : ''; ?>>Vegana</option>
                        <option value="frutos-do-mar" <?php echo (strtolower($categoria) == 'frutos-do-mar') ? 'selected' : ''; ?>>Frutos do Mar</option>
                        <option value="mexicana" <?php echo (strtolower($categoria) == 'mexicana') ? 'selected' : ''; ?>>Mexicana</option>
                        <option value="sobremesas" <?php echo (strtolower($categoria) == 'sobremesas') ? 'selected' : ''; ?>>Sobremesas</option>
                    </select>
                </div>
                <br>
                <div class="inputBox">
                    <textarea name="ingredientes" id="ingredientes" class="inputUser1" required><?php echo $ingredientes; ?></textarea>
                    <label for="ingredientes" class="labelInput">Ingredientes</label>
                </div>
                <br></br>
                <div class="inputBox">
                    <textarea name="mdpreparo" id="mdpreparo" class="inputUser2" required><?php echo $mdpreparo; ?></textarea>
                    <label for="mdpreparo" class="labelInput">Modo de Preparo</label>
                </div>
                <br></br>
                <input type="hidden" name="id" value=<?php echo $id;?>>
                <input type="submit" name="update" id="update">
            </fieldset>
        </form>
    </div>
</body>
</html>