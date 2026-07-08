<?php


function mascararCpf($cpf){

$cpf = preg_replace("/[^0-9]/", "", $cpf);

$ultimosdigitos = substr($cpf, -4);

return "Seu cpf é : *******" . $ultimosdigitos;

}

    $cpf = '123.456.789-10';
    echo mascararCpf($cpf);













?>