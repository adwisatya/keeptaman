<?php
//============================================================+
// File name   : example_006.php
// Begin       : 2008-03-04
// Last Update : 2013-05-14
//
// Description : Example 006 for TCPDF class
//               WriteHTML and RTL support
//
// Author: Nicola Asuni
//
// (c) Copyright:
//               Nicola Asuni
//               Tecnick.com LTD
//               www.tecnick.com
//               info@tecnick.com
//============================================================+

/**
 * Creates an example PDF TEST document using TCPDF
 * @package com.tecnick.tcpdf
 * @abstract TCPDF - Example: WriteHTML and RTL support
 * @author Nicola Asuni
 * @since 2008-03-04
 */

// Include the main TCPDF library (search for installation path).
require_once('tcpdf_include.php');

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

// set document information
$pdf->SetCreator(PDF_CREATOR);
$pdf->SetAuthor('Keep Taman');
$pdf->SetTitle('Daftar Pengaduan Masuk Keep Taman');
$pdf->SetSubject('Daftar Pengaduan Masuk Keep Taman');
$pdf->SetKeywords('PKL, Kebersihan, Pengemis');

// set default header data
$pdf->SetHeaderData("Pemkot-Bandung.jpg", PDF_HEADER_LOGO_WIDTH, "Daftar Pengaduan", "Keep Taman");

// set header and footer fonts
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));

// set default monospaced font
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);

// set margins
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);

// set auto page breaks
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);

// set image scale factor
$pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);

// set some language-dependent strings (optional)
if (@file_exists(dirname(__FILE__).'/lang/eng.php')) {
	require_once(dirname(__FILE__).'/lang/eng.php');
	$pdf->setLanguageArray($l);
}

// ---------------------------------------------------------

// set font
$pdf->SetFont('dejavusans', '', 10);

// add a page
$pdf->AddPage();

// writeHTML($html, $ln=true, $fill=false, $reseth=false, $cell=false, $align='')
// writeHTMLCell($w, $h, $x, $y, $html='', $border=0, $ln=0, $fill=0, $reseth=true, $align='', $autopadding=true)

// create some HTML content
require_once("../connect.php");
$result = mysql_query("SELECT * FROM pengaduan");
$html = '<h1>Daftar Pengaduan Total</h1><br>';
$pdf->writeHTML($html, true, false, true, false, '');

if(mysql_num_rows($result)>0){
	$i = 1;
	while($data = mysql_fetch_array($result)){
		$pdf->writeHTML("No:$i".
		"<br>Nama Pelapor:".$data['nama_pelapor'].
		"<br>Email Pelapor:".$data['email_pelapor'].
		"<br>Subjek Laporan:".$data['subjek_laporan'].
		"<br>", true, false, true, false, '');
		$i++;
	}
}
// output the HTML content
//$pdf->writeHTML($html, true, false, true, false, '');

// reset pointer to the last page
$pdf->lastPage();

// ---------------------------------------------------------

//Close and output PDF document
$pdf->Output('example_006.pdf', 'I');

//============================================================+
// END OF FILE
//============================================================+
