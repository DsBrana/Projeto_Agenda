<?php
/**
 * Created by PhpStorm.
 * User: JulioCesar
 * Date: 16/01/2019
 * Time: 12:17
 */

include ("../Config/Conexao_mysql.php");

$nome = $POST["nome"];
$telefone = $POST["telefone"];
$email = $POST["email"];

$sql = "update agenda set nome = '".$nome."', telefone = '".$telefone."', email = '".$email."' where codigo = ".$id;

if ( msqli_query ( $sql, $link) ) {
    echo "Atualizado com sucesso!!";
} else {
    echo "Erro ao atualizar este dados!";
}

mysqli_close ( $link );

?>