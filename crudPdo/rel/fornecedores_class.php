<?php
require_once('../conexao.php');

//CARREGAR DOMPDF
require_once '../dompdf/autoload.inc.php';
use  Dompdf\Dompdf ;

// instanciar e usar a classe dompdf 
$dompdf = new  Dompdf ();
$dompdf -> loadHtml ( 'olá mundo' );

// (Opcional) Configure o tamanho e a orientação do papel 
$dompdf -> setPaper ( 'A4' , 'landscape' );

// Renderiza o HTML como PDF 
$dompdf -> render ();

// Saída do PDF gerado para o navegador 
$dompdf -> stream ();