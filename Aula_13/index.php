<?php

//$nome = "Gunnar Correa";
//echo substr($nome, 0, 6); //Motra X Quantidade de caracteres
//echo strtolower("OLA, COMO VAI?");
//cho strtoupper("ola, como vai?");
//$msg = strip_tags("<h1>Bem-vindo</h1>, acesse o <a href=''><b>link</b></a>", "<a> <b>");
//echo $msg;
//$comida = "Banana, Maça, Pera, Uva";
//$alt = str_ireplace("banana", "Morango", $comida);
//echo $alt;
//$nome = "Gunnar Correa Pereira";
//$ex = explode(" ", $nome);
//echo $ex[0];
$nome = "Fulano";

if (strlen($nome) <= 10) {
    echo "Válido";
} else {
    echo "Inválido";
}