<?php


$nomeCliente = $_GET["nome"];
$cpfCliente = $_GET["cpf"];
$foneCliente = $_GET["fone"];
$emailCliente = $_GET["email"];

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salvar Cliente</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nome Completo</td>
            <td><?php echo $nomeCliente; ?></td>
        </tr>
        <tr>
        <td>CPF</td>
            <td><?php echo $cpfCliente; ?></td>
</tr>
<tr>
            <td>telefone</td>
            <td><?php echo $foneCliente; ?></td>
        </tr>
        <tr>
            <td>email</td>
            <td><?php echo $emailCliente; ?></td>
        </tr>
    </table>
</body>
</html>
