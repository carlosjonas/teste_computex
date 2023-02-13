<?php

	// require no autoload de classes e no fpdf
	require ("../vendor/autoload.php");
	require ("../vendor/setasign/fpdf/fpdf.php");

	//Namespace de Url
	use \App\Entity\Url;

	//Instanciando a classe e trazendo dados dos alunos
	$jsoninfo = new Url();
	$jsondataAluno = $jsoninfo->getInfoJsonAluno();

	//Definindo as estilizações do PDF
	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',16);
	$pdf->Cell(190,10,'Listagem de alunos',0,0,'C');
	$pdf->Ln(15);

	$pdf->SetFont('Arial','I',10);
	$pdf->Cell(70,7,utf8_decode('Matrícula'),1,0,'C');
	$pdf->Cell(120,7,'Nome',1,0,'C');
	$pdf->Ln();

	//Percorrendo os arrays para mostrar todos os alunos
	foreach ($jsondataAluno as $aluno){
		$pdf->Cell(70,7,utf8_decode($aluno['matricula']),1,0,"C");
		$pdf->Cell(120,7,utf8_decode($aluno['nome']),1,0,"C");
		$pdf->Ln();
	}

	$pdf->Output();

 ?>