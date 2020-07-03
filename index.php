<?php

require_once 'vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('template');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

// Initialisation variables
$title = "Le titre de la page";
$nom = "Sonia";
// relier le fichier
$template = $twig->load('base.html.twig');
// faire un tableau associatif
echo $template->render([
    'title' => $title,
    'nom'   => $nom
]);
