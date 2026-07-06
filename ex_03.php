<?php


function mascararCpf($cpf){

$cpf = preg_replace("/[^0-9]/", "", $cpf);


}
    $cpf = "123.456.789-10";

echo marcararCpf($cpf);











?>