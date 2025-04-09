1.

<?php
$num1 = 10;
$num2 = 15;
$soma = $num1 + $num2;

if ($soma > 20) {
    $soma += 8;
    echo "O resultado é: " . $soma . "\n";
} else {
    $soma -= 5;
    echo "O resultado é: " . $soma . "\n";
}
?>

2.

<?php
$num = 30;

if ($num % 10 == 0) {
    echo "O número é divisível por 10.\n";
} elseif ($num % 5 == 0) {
    echo "O número é divisível por 5.\n";
} elseif ($num % 2 == 0) {
    echo "O número é divisível por 2.\n";
} else {
    echo "O número não é divisível por 10, 5 ou 2.\n";
}
?>


3.

<?php
$nome = "Maria";
$sexo = "F";
$idade = 22;

if ($sexo == "F" && $idade < 25) {
    echo $nome . " - ACEITA\n";
} else {
    echo $nome . " - NÃO ACEITA\n";
}
?>


4.

<?php
$num1 = 5;
$num2 = 8;
$num3 = 3;

if ($num1 > $num2 && $num1 > $num3) {
    if ($num2 > $num3) {
        echo $num1 . ", " . $num2 . ", " . $num3 . "\n";
    } else {
        echo $num1 . ", " . $num3 . ", " . $num2 . "\n";
    }
} elseif ($num2 > $num1 && $num2 > $num3) {
    if ($num1 > $num3) {
        echo $num2 . ", " . $num1 . ", " . $num3 . "\n";
    } else {
        echo $num2 . ", " . $num3 . ", " . $num1 . "\n";
    }
} else {
    if ($num1 > $num2) {
        echo $num3 . ", " . $num1 . ", " . $num2 . "\n";
    } else {
        echo $num3 . ", " . $num2 . ", " . $num1 . "\n";
    }
}
?>


5.

<?php
$contador = 1;
$alturaMulheres = 0;
$contMulheres = 0;
$maiorAltura = 0;
$menorAltura = 999;
$homemMaisVelho = 0;
$mulherMaisNova = 999;

while ($contador <= 50) {
    if ($contador == 1) {
        $nome = "Carlos"; $sexo = "M"; $idade = 30; $altura = 1.75;
    } elseif ($contador == 2) {
        $nome = "Ana"; $sexo = "F"; $idade = 20; $altura = 1.60;
    } elseif ($contador == 3) {
        $nome = "Pedro"; $sexo = "M"; $idade = 40; $altura = 1.80;
    } elseif ($contador == 4) {
        $nome = "Lucia"; $sexo = "F"; $idade = 18; $altura = 1.55;
    } elseif ($contador == 5) {
        $nome = "João"; $sexo = "M"; $idade = 25; $altura = 1.70;
    } elseif ($contador == 6) {
        $nome = "Beatriz"; $sexo = "F"; $idade = 22; $altura = 1.62;
    } elseif ($contador == 7) {
        $nome = "Felipe"; $sexo = "M"; $idade = 35; $altura = 1.78;
    } elseif ($contador == 8) {
        $nome = "Patricia"; $sexo = "F"; $idade = 27; $altura = 1.65;
    } elseif ($contador == 9) {
        $nome = "Ricardo"; $sexo = "M"; $idade = 50; $altura = 1.82;
    } elseif ($contador == 10) {
        $nome = "Mariana"; $sexo = "F"; $idade = 30; $altura = 1.60;
    } elseif ($contador == 11) {
        $nome = "Gustavo"; $sexo = "M"; $idade = 28; $altura = 1.68;
    } elseif ($contador == 12) {
        $nome = "Clara"; $sexo = "F"; $idade = 33; $altura = 1.63;
    } elseif ($contador == 13) {
        $nome = "Eduardo"; $sexo = "M"; $idade = 29; $altura = 1.72;
    } elseif ($contador == 14) {
        $nome = "Sofia"; $sexo = "F"; $idade = 21; $altura = 1.75;
    } elseif ($contador == 15) {
        $nome = "Lucas"; $sexo = "M"; $idade = 45; $altura = 1.85;
    } elseif ($contador == 16) {
        $nome = "Fernanda"; $sexo = "F"; $idade = 38; $altura = 1.60;
    } elseif ($contador == 17) {
        $nome = "Thiago"; $sexo = "M"; $idade = 32; $altura = 1.78;
    } elseif ($contador == 18) {
        $nome = "Juliana"; $sexo = "F"; $idade = 26; $altura = 1.67;
    } elseif ($contador == 19) {
        $nome = "André"; $sexo = "M"; $idade = 55; $altura = 1.90;
    } elseif ($contador == 20) {
        $nome = "Isabela"; $sexo = "F"; $idade = 24; $altura = 1.62;
    } elseif ($contador == 21) {
        $nome = "Renato"; $sexo = "M"; $idade = 60; $altura = 1.77;
    } elseif ($contador == 22) {
        $nome = "Juliana"; $sexo = "F"; $idade = 23; $altura = 1.59;
    } elseif ($contador == 23) {
        $nome = "Caio"; $sexo = "M"; $idade = 33; $altura = 1.81;
    } elseif ($contador == 24) {
        $nome = "Gabriela"; $sexo = "F"; $idade = 29; $altura = 1.66;
    } elseif ($contador == 25) {
        $nome = "Paulo"; $sexo = "M"; $idade = 30; $altura = 1.80;
    } elseif ($contador == 26) {
        $nome = "Carla"; $sexo = "F"; $idade = 37; $altura = 1.61;
    } elseif ($contador == 27) {
        $nome = "Marcio"; $sexo = "M"; $idade = 29; $altura = 1.74;
    } elseif ($contador == 28) {
        $nome = "Raquel"; $sexo = "F"; $idade = 28; $altura = 1.64;
    } elseif ($contador == 29) {
        $nome = "Alberto"; $sexo = "M"; $idade = 44; $altura = 1.85;
    } elseif ($contador == 30) {
        $nome = "Luciana"; $sexo = "F"; $idade = 31; $altura = 1.70;
    } elseif ($contador == 31) {
        $nome = "Ricardo"; $sexo = "M"; $idade = 53; $altura = 1.79;
    } elseif ($contador == 32) {
        $nome = "Daniela"; $sexo = "F"; $idade = 41; $altura = 1.69;
    } elseif ($contador == 33) {
        $nome = "Eduardo"; $sexo = "M"; $idade = 36; $altura = 1.74;
    } elseif ($contador == 34) {
        $nome = "Flávia"; $sexo = "F"; $idade = 25; $altura = 1.68;
    } elseif ($contador == 35) {
        $nome = "Felipe"; $sexo = "M"; $idade = 39; $altura = 1.73;
    } elseif ($contador == 36) {
        $nome = "Bruna"; $sexo = "F"; $idade = 21; $altura = 1.55;
    } elseif ($contador == 37) {
        $nome = "Ricardo"; $sexo = "M"; $idade = 60; $altura = 1.75;
    } elseif ($contador == 38) {
        $nome = "Mariana"; $sexo = "F"; $idade = 32; $altura = 1.68;
    } elseif ($contador == 39) {
        $nome = "Gustavo"; $sexo = "M"; $idade = 33; $altura = 1.79;
    } elseif ($contador == 40) {
        $nome = "Lúcia"; $sexo = "F"; $idade = 25; $altura = 1.80;
    } elseif ($contador == 41) {
        $nome = "José"; $sexo = "M"; $idade = 49; $altura = 1.72;
    } elseif ($contador == 42) {
        $nome = "Amanda"; $sexo = "F"; $idade = 27; $altura = 1.69;
    } elseif ($contador == 43) {
        $nome = "Leandro"; $sexo = "M"; $idade = 41; $altura = 1.84;
    } elseif ($contador == 44) {
        $nome = "Vanessa"; $sexo = "F"; $idade = 35; $altura = 1.63;
    } elseif ($contador == 45) {
        $nome = "Lucas"; $sexo = "M"; $idade = 22; $altura = 1.70;
    } elseif ($contador == 46) {
        $nome = "Alice"; $sexo = "F"; $idade = 27; $altura = 1.66;
    } elseif ($contador == 47) {
        $nome = "Felipe"; $sexo = "M"; $idade = 29; $altura = 1.75;
    } elseif ($contador == 48) {
        $nome = "Paula"; $sexo = "F"; $idade = 34; $altura = 1.64;
    } elseif ($contador == 49) {
        $nome = "Ricardo"; $sexo = "M"; $idade = 50; $altura = 1.80;
    } elseif ($contador == 50) {
        $nome = "Maria"; $sexo = "F"; $idade = 31; $altura = 1.70;
    }

    if ($altura > $maiorAltura) {
        $maiorAltura = $altura;
    }
    if ($altura < $menorAltura) {
        $menorAltura = $altura;
    }

    if ($sexo == "F") {
        $alturaMulheres += $altura;
        $contMulheres++;
        if ($idade < $mulherMaisNova) {
            $mulherMaisNova = $idade;
        }
    }

    if ($sexo == "M" && $idade > $homemMaisVelho) {
        $homemMaisVelho = $idade;
    }

    $contador++;
}

$médiaAlturaMulheres = 0;
if ($contMulheres > 0) {
    $médiaAlturaMulheres = $alturaMulheres / $contMulheres;
}

echo "Maior altura: " . $maiorAltura . "\n";
echo "Menor altura: " . $menorAltura . "\n";
echo "Média de altura das mulheres: " . $médiaAlturaMulheres . "\n";
echo "Idade do homem mais velho: " . $homemMaisVelho . "\n";
echo "Idade da mulher mais nova: " . $mulherMaisNova . "\n";
?>
