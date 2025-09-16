<?php

$lista = [
    'Mihai' => 22,
    'Ana' => 24,
    'Cristi' => 19,
    'Maria' => 21,
];

function concatenare(string $nume, int $varsta): string
{
    return '- ' . $nume . ',' . $varsta . PHP_EOL;
}

echo 'Salut! Echipa nostra este compusa din: ' . PHP_EOL;

foreach ($lista as $nume => $varsta) {
    echo concatenare($nume, $varsta);
}

?>