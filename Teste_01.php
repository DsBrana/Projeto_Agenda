<?php
/**
 * Created by PhpStorm.
 * User: JulioCesar
 * Date: 14/01/2019
 * Time: 18:52
 */


$valor01 = $_GET["A"];
    echo "<br/>Digite sua nota da prova 01 aqui: $valor01<br/> ";
    if ( ( $valor01 < 0 ) && ( $valor01 > 10 ) ) {
        echo "<br/> Digite valores de 0 a 10 para um resultado preciso!";
    } else {
        $resultado = $valor01 * 0.4;
        if ( ( $resultado == 0 ) || ( $resultado < 4 ) ) {
            echo "<br/> A sua nota da B1 é: $resultado";
            echo "<br/> Você foi reprovado!!!";
        } else {
            echo "<br/> A sua nota da B1 é: $resultado";
            echo "<br/> Você foi aprovado. Parabéns!!";
        }
    }
?>
