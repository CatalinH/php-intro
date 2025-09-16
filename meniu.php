<?php

$pagini = [
    'contact.php' => 'Contact',
    'despre.php' => 'Despre',
    'readme.md' => 'Readme',
    '1-salut.php' => 'Salut',
    '2-variabile.php' => 'Variabile',
    '3-structuri-de-control.php' => 'Structuri de control',
    '4-functii.php' => 'Functii',
    '5-clase-si-obiecte.php' => 'Clase si Obiecte',
    '6-interfete-clase.php' => 'Interfete si Clase',
];

echo '<ul>';
foreach ($pagini as $pagina => $titlu) {
    echo "<li><a href='$pagina'>$titlu</a></li>";
}
echo '</ul>';