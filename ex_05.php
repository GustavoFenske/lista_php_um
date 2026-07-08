<?php

function analisarTexto($texto)
{

    $quantidadeCaracteres = mb_strlen($texto);
    $palavras = explode(" ", $texto);
    $palavras = count($palavras);

    $vogais = preg_match_all('/[aeiou]/i', $texto);
      $consoantes = $quantidadeCaracteres - $vogais;





    return [
        "quantidade" => $quantidadeCaracteres,
        "palavras" => $palavras,
        "vogais" => $vogais,
        "consoantes" => $consoantes
    ];


}
$texto = "Certa manhã, ao despertar de sonhos intranquilos, Gregor Samsa encontrou-se em sua cama metamorfoseado num inseto monstruosos";

$resultado = analisarTexto($texto);





echo "seu texto é : " . $texto . "<br>";
echo "a quantidade de caractere é : " . $resultado['quantidade'] . "<br>";
echo "a quantidade de palavras é : " . $resultado['palavras'] . "<br>";
echo "a quantidade de vogais é : " . $resultado['vogais'] . "<br>";
echo "a quantidade de consoantes é : " . $resultado['consoantes'] . "<br>";









?>