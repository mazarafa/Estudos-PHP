<?php

$req = filter_input(INPUT_GET, "req", FILTER_SANITIZE_NUMBER_INT);

switch ($req) {
    case 1:
        Criar();
        break;
    case 2:
        Ler();
        break;
    case 3:
        Alterar();
        break;
    case 4:
        Deletar();
        break;
}

function Criar() {
    echo "Criar";
    setcookie("nome", "Gunnar", time() + 100);
}

function Ler() {
    ///echo $_COOKIE["nome"];
    echo filter_input(INPUT_COOKIE, "nome", FILTER_SANITIZE_STRING);
}

function Alterar() {
    echo "Alterar";
    setcookie("nome", "Angélica");
}

function Deletar() {
    echo "Deletar";
    setcookie("nome", "Gunnar", time() -1);
}
