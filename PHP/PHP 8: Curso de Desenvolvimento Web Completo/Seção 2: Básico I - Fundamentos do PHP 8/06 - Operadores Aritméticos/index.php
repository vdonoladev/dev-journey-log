<?php

$numero_um = 2;
$numero_dois = 2;

// Adição
$soma = $numero_um + $numero_dois;
echo "A soma de $numero_um + $numero_dois é: $soma <br>";

// Subtração
$subtracao = $numero_um - $numero_dois;
echo "A subtração de $numero_um - $numero_dois é: $subtracao <br>";

// Multiplicação
$multiplicacao = $numero_um * $numero_dois;
echo "A multiplicação de $numero_um * $numero_dois é: $multiplicacao <br>";

// Divisão
$divisao = $numero_um / $numero_dois;
echo "A divisão de $numero_um / $numero_dois é: $divisao <br>";

// Módulo
$modulo = $numero_um % $numero_dois;
echo "O módulo de $numero_um % $numero_dois é: $modulo <br>";

// Exponenciação
$exponenciacao = $numero_um ** $numero_dois;
echo "A exponenciação de $numero_um ** $numero_dois é: $exponenciacao <br>";

// Operador de incremento
$numero_um++;
echo "O valor da variável 'numero_um' após o incremento é: $numero_um <br>";

// Operador de decremento
$numero_dois--;
echo "O valor da variável 'numero_dois' após o decremento é: $numero_dois <br>";

// Operador de concatenação
$texto_um = "Olá, ";$texto_dois = "mundo!";
$concatenacao = $texto_um . $texto_dois;
echo "A concatenação de '$texto_um' e '$texto_dois' é: $concatenacao <br>";

// Operador de atribuição composta
$numero_um += 5; // Equivalente a $numero_um = $numero_um + 5
echo "O valor da variável 'numero_um' após a atribuição composta é: $numero_um <br>";

// Operador de atribuição composta com concatenação
$texto_um .= "como vai você?"; // Equivalente a $texto_um = $texto_um . "como vai você?"
echo "O valor da variável 'texto_um' após a atribuição composta é: $texto_um <br>";

?>