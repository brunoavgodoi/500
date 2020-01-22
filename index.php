<?php

$numero1 = '5';
$numero2 = '2';
$operacao = 'Somar';

switch ($operacao) {
    case 'Somar':$resultado = $numero1 + $numero2;
break;
    case 'Subtrair':$resultado = $numero1 - $numero2;
break;
    case 'multiplicar':$resultado = $numero1 * $numero2;
break;
    case 'dividir':$resultado = $numero1 / $numero2;
break;
    
}

echo $resultado;
{}
echo "<br>";


$a = 1;

while ($a <= 9) {
    for ($b=0; $b <= 10; $b++) {
        echo "$a * $b =  ".$a *$b;
        echo "<br>";
        
    }
    echo "<br>";
    $a++;
}

