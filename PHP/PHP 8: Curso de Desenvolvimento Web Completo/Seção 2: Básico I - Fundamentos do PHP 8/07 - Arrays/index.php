<?php

// Arrays são estruturas de dados que armazenam múltiplos valores em uma única variável.

$prateleira = array("Livro A", "Livro B", "Livro C"); // Sintaxe tradicional

$prateleira_dois = ["Livro D", "Livro E", "Livro F"]; // Sintaxe curta (PHP 5.4+)

// O comando 'echo' não pode imprimir arrays diretamente.

echo $prateleira[0]; // Imprime "Livro A"

print_r($prateleira); // Usado para imprimir arrays de forma legível

// Array associativo

// Arrays associativos permitem usar chaves nomeadas em vez de índices numéricos.

$exemplo = [
    "nome" => "João",
    "idade" => 25,
    "cidade" => "São Paulo"
];
print_r($exemplo); // Imprime o array associativo
print_r($exemplo["nome"]); // Imprime "João"
?>