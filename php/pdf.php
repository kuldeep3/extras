<?php
session_start();
$id = $_SESSION['id'];
$result = $_SESSION['res'];

use mikehaertl\wkhtmlto\Pdf;

// You can pass a filename, a HTML string, an URL or an options array to the constructor
ob_start();
include 'demo.php';
$string = ob_get_clean();
$pdf = new Pdf($string);

// On some systems you may have to set the path to the wkhtmltopdf executable
$pdf->binary = 'C:\Program Files\wkhtmltopdf\bin\wkhtmltopdf.exe';

if (!$pdf->saveAs("$id.pdf")) {
    $error = $pdf->getError();
    // ... handle error here
} else {
    header('Content-Type: application/pdf');
    header('location:/');
}

// use Knp\Snappy\Pdf;
// $snappy = new Pdf('E:\snappy\wkhtmltopdf\bin\wkhtmltopdf.exe');
// header('Content-Type: application/pdf');
// header('Content-Disposition: attachment; filename="file.pdf"');
// echo $snappy->getOutput('http://localhost/demo.php');