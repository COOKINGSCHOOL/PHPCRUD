<?php
include_once('config2.php');

// Verifica se o usuário está logado
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

$user_id_session = $_SESSION['user_id'];

$sql = "SELECT * FROM receita";
$result = $conexaoreceita->query($sql);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receitas dos Alunos</title>

    <style>
        h1 {
            
            text-align: center;
            color: white;
            border-radius: 10px;
            padding: 10px;
            margin-top: 20px;
            margin-left: 425px;
            text-decoration: none;
            background-color: black;
            display: inline-block;

           
        }

        a {
            
            color: white;
            background-color: black;
            border-radius: 10px;
            padding: 10px;
            display: inline-block;
           
        }


        body {
            background-color: dodgerblue;
            font-family: Arial, Helvetica, sans-serif;
            background-image: url(images/3d-rendem-de-uma-mesa-de-madeira-com-uma-cozinha-no-fundo.jpg);
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 20px;

        }

        table {
            margin-top: 20px;
            width: 100%;
            background-color: white;
            border-collapse: collapse;
            color: #333;
            /* Cor do texto nas células da tabela */
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
            /* Cor da borda das células da tabela */
        }

        th,
        td {

            padding: 12px;
            text-align: left;
        }

        th {
            background-color: dodgerblue;
            color: black;
            text-align: center;
        }

        
    </style>
</head>

<body>
    <a href="restaurante.html">Voltar</a>
    <h1>Receitas dos Alunos</h1>

    <table>
        <thead>
            <tr>
                <th>#</th>
                <th scope="col">Nome da Receita</th>
                <th scope="col">Categoria</th>
                <th scope="col">Ingredientes</th>
                <th scope="col">Modo de Preparo</th>
                <th scope="col">Imagem da Receita</th>
                <th scope="col">...</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            while ($user_data = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>". $user_data['id'] ."</td>";
                echo "<td>" . $user_data['nome'] . "</td>";
                echo "<td>". $user_data["categoria"] . "</td>";
                echo "<td>" . $user_data['ingredientes'] . "</td>";
                echo "<td>" . $user_data['mdpreparo'] . "</td>";
                echo "<td><img src='data:image/jpeg;base64," . base64_encode($user_data['imagem']) . "' alt='Imagem Receita' style='max-width: 100px; max-height: 100px;'></td>";
                echo "<td>";

                // Verifica se o usuário logado é o criador da receita
                if ($user_data['user_id'] == $user_id_session) {
                    echo "<a class='btn btn-sm btn-primary' href='edit.php?id=$user_data[id]' title='Editar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-pencil' viewBox='0 0 16 16'>
                                    <path d='M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z'/>
                                </svg>
                            </a> 
                            <a class='btn btn-sm btn-danger' href='#' onclick='confirmarExclusao($user_data[id], \"$user_data[nome]\")' title='Deletar'>
                                <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                                    <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z'/>
                                </svg>
                            </a>";
                }

                echo "</td>";
                echo "</tr>";
            }
            ?>
        </tbody>
    </table>

    <script>
        function confirmarExclusao(id, nome) {
            var confirmDelete = confirm("Tem certeza que deseja apagar a receita '" + nome + "'?");
            if (confirmDelete) {
                window.location.href = "delete.php?id=" + id;
            }
        }
    </script>
</body>

</html>