<?php

function converterTemperatura($temperatura){

$Fahrenheit = ($temperatura * 1.8) + 32;
$Kelvin = ($temperatura + 273.15);

return [
    "Fahrenheit" => $Fahrenheit,
    "Kelvin" => $Kelvin
];
}



$temperatura = 30;

$resultado = converterTemperatura($temperatura);

echo "sua temperatura é 30 graus Celsius <br>";
echo "Em Fahrenheit é : <br>". $resultado['Fahrenheit'] . "<br>" ;
echo "Em Kelvin é : <br>". $resultado['Kelvin'] . "<br>";


?>

