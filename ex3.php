<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 2</title>
    <style>
        body{
            display:flex;
            flex-direction:column;
        }

    </style>
</head>
<body>


</body>
</html>

<?php 

    $nome = $_POST["nome"];
    $senha = $_POST["password"];

        echo $nome;
        echo $senha;

        if ($nome == "etecia" && $senha == "etecia238") {
            
            echo "Autenticação realizada com sucesso";
            }
        else {
            echo "<h2>Você não tem autorização para visualizar está página</h2>";
        }

?>