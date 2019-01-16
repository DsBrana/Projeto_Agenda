<?php
/**
 * Created by PhpStorm.
 * User: JulioCesar
 * Date: 15/01/2019
 * Time: 20:29
 */

    include("../Config/Conexao_mysql.php");
?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf8">
        <title> Agenda Telefonica - Projeto PHP/MySQL(WAMP)</title>
    </head>

    <body>
        <form method="POST" action="../Model/salva_dados.php">
            <label>Nome:</label><input type="text" placeholder="Nome completo" name="nome" id="nome" required><br/><br/>
            <label>Telefone:</label><input type="int" placeholder="Telefone com DDD" name="telefone" id="telefone" required><br/><br/>
            <label>Email:</label><input type="email" placeholder="Seu email" name="email" id="email" required><br/><br/>
            <input type="submit" value="Cadastrar" id="cadastrar" name="cadastrar">
        </form>
    </body>
    <body>
    <form method="POST" action="../Model/visualizar_dados.php">
    <input type="submit" value="Visualizar" id="visualizar" name="visualizar">
    </body>

</html>