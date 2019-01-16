<?php
/**
 * Created by PhpStorm.
 * User: JulioCesar
 * Date: 15/01/2019
 * Time: 21:50
 */

include ("../config/Conexao_mysql.php");
$visual = "Select*from agenda";

$resvisual = mysqli_query($link, $visual);

    while ($fetch = mysqli_fetch_array($resvisual)) {
        echo "<p>".$fetch[0]. " - " .$fetch[1]. " - " .$fetch[2]. " - " .$fetch[3]. "</p>";
    }
    mysqli_free_result($resvisual);

?>

<!DOCTYPE HTML>
<head lang="pt-br">
    <meta charset="utf8">
    <body>
        <form method="POST" action="../View/Cadastro.php">
        <input type="submit" value="Voltar" id="voltar" name="voltar">
    </body>
</head>
</html>
