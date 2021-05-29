<?php

require_once __DIR__ . '/../config/twig.php';

$test = 'Hello';
echo $twig->render('Item/details.html.twig', ['test' => $test]);
