<?php

$lista = [
    'Mihai',
    'Ana',
    'Cristi',
    'Maria',
];

echo 'Salut! Echipa noastra este compusa din: ' . PHP_EOL;
foreach ($lista as $nume) {
    echo '- ' . $nume . PHP_EOL;
}

?>