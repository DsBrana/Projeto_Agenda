<?php
/**
 * Created by PhpStorm.
 * User: JulioCesar
 * Date: 15/01/2019
 * Time: 17:59
 */
$servidor = "localhost";
$banco = "projeto_php";
$usuario = "root";
$senha = "";

$link = mysqli_connect($servidor, $usuario, $senha, $banco);

$conn = new PDO ("mysql:host=$servidor;dbname=$banco","$usuario", "$senha");

if (!$link) {
    echo "Erro na conexão com seu banco de dados: (".$mysqli->connect_errno.") ".$mysqli->connect_error;
    exit();
} else {
    echo "<br/>Conexão com sucesso ao banco de dados!!!!<br/><br/>";
}
?>