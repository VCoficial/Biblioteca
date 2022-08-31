<?php

//Incluímos a la clase PDF_MC_Table

require_once  APPROOT . '\views\fpdf184\PDF_MC_Table_ok.php';


//Instanciamos la clase para generar el documento pdf
$pdf = new PDF_MC_Table();

//Agregamos la primera página al documento pdf
$pdf->AddPage();

//Seteamos el inicio del margen superior en 25 pixeles 
$y_axis_initial = 25;

//Seteamos el tipo de letra y creamos el título de la página. No es un encabezado no se repetirá
$pdf->SetFont('Arial', 'B', 12);

$pdf->Cell(100, 6,  SITENAME, 0, 1, 'C');
$pdf->Cell(100, 6, 'LIBROS', 0, 1, 'C');
$pdf->Ln(3);

//Creamos las celdas para los títulos de cada columna y le asignamos un fondo gris y el tipo de letra
$pdf->SetFillColor(232, 232, 232);
$pdf->SetFont('Arial', 'B', 10);
$pdf->Cell(27, 6, 'IdLibro', 1, 0, 'C', 1);
$pdf->Cell(27, 6, utf8_decode('Nombre'), 1, 0, 'C', 1);
$pdf->Cell(27, 6, utf8_decode('IdEditoriales'), 1, 0, 'C', 1);
$pdf->Cell(27, 6, utf8_decode('Ingreso'), 1, 0, 'C', 1);
$pdf->Cell(27, 6, 'Autor', 1, 0, 'C', 1);
$pdf->Cell(27, 6, 'Cantidad', 1, 0, 'C', 1);
$pdf->Cell(27, 6, 'Estado', 1, 0, 'C', 1);

$pdf->Ln(10);

//Table with 20 rows and 4 columns
$pdf->SetWidths(array(27, 27,27, 27,27, 27,27));

/* require_once('app/listarPacientes.php'); */

foreach ($data as $libro) {
    #$nombre = $reg->nombre;
    $idLibro = $libro->idLibro;
    $Nombre = $libro->Nombre;
    $IdEditoriales = $libro->Editoriales_idEditoriales;
    $Ingreso = $libro->fechaDeIngreso;
    $Autor = $libro->Autor;
    $Cantidad = $libro->Cantidad;
    $Estado = $libro->Estado;

    $pdf->SetFont('Arial', '', 10);
    $pdf->Row(array($idLibro, utf8_decode($Nombre), $IdEditoriales, utf8_decode($Ingreso), utf8_decode($Autor), $Cantidad, $Estado));
};

//Mostramos el documento pdf
$pdf->Output('I');