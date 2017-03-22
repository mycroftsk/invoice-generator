<?php

require_once('../vendor/autoload.php');

use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
$dompdf->set_option('chroot', realpath(dirname(__DIR__)));
$dompdf->set_option('isHtml5ParserEnabled', true);
//echo realpath(dirname(__DIR__));

$dompdf->loadHtmlFile(realpath(dirname(__DIR__)) . "/invoice-template/base-template.html");

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('document-faktura.pdf');


