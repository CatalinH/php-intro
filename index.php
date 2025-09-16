<?php

$pagina = $_GET['pagina'] ?? 'despre';
switch ($pagina) {
    case 'despre':
        include 'despre.php';
        break;
    case 'contact':
        include 'contact.php';
}
