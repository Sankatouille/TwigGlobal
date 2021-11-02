<?php

require_once __DIR__ . '/../config/twig.php';


$details = 'jesaispas';

echo $twig->render('details.html.twig', ['details' => $details]);