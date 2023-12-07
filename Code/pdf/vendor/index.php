<?php

// Autoload do composer
require __DIR__.'/vendor/autoload.php';

use Dompdf\Dompdf;

//Instaciar o DomPDF
$dompdf = new Dompdf();


// Carrega o html  para dentro da classe
$dompdf->loadHtml('Olá mundo!');

// Renderizar o arquivo 
$dompdf->render();

// imprime arquivo do pdf na tela
header('Content-type: application/pdf');
echo $dompdf->output();