<?php
/**
 * Created by PhpStorm.
 * User: JulioCesar
 * Date: 15/01/2019
 * Time: 20:57
 */

include_once ('../Config/Conexao_mysql.php');

    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];

    $rcadastro = "INSERT INTO agenda (nome, telefone, email) VALUES ('$nome', '$telefone', '$email')";

    $rescadastro = mysqli_query ( $link, $rcadastro );
?>


