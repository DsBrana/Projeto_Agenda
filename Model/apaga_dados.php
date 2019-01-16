<?php
/**
 * Created by PhpStorm.
 * User: JulioCesar
 * Date: 16/01/2019
 * Time: 12:26
 */

include ("../config/Conexao_mysql.php");

$id = $_POST["id"];

$sql = "delete from agenda where codigo = ".$id;

if ( mysqli_query ( $sql, $link ) ) {
    echo "Deletado com sucesso!";
} else {
    echo "Erro ao deletar este dado!";
}

mysqli_close ( $link );

?>