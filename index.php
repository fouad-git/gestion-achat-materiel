<?php
require_once 'vendor/autoload.php';
/*require_once 'db.php';*/

$loader = new \Twig\Loader\FilesystemLoader('templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);


$template = $twig->load('pages/index.html.twig');
echo $template->render();
?>