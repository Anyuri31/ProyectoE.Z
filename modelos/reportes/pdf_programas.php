<?php
require "fpdf.php";
require "../database.php";

class pdf_programas extends FPDF{
 
	   public function header(){
	   	//tipo de letra 
	   	$this -> setfont('Arial','B',20);
	   	//agregar imagen 
		   $this -> Image("escudo.jpg",15,10,30);
		   $this -> Image("educacion.png",150,8,50);
		
		//diseño de titulo
		$this -> setfont('Arial','I',30);
		// $this->SetTextColor(225, 72, 35);
		$this -> cell(180,45,"Programas",0,0,'C');
		$this-> SetDrawColor(51, 181, 255);
		$this-> SetLineWidth(1);
		$this->Line(120,37,80,37);
	   	//salto de linea
		   
		$this->Ln(40);
		$this-> SetFont('Arial', 'B',12);
		$this->SetTextColor(16, 15, 15);
		$this->Cell( 20,5,'Direccion: Cra. 7c Este ## 92 - 48 Sur, Bogota');
		$this->Ln();
		$this->Cell(20,5,'Telefono: (1) 7646710');
		$this -> Ln(20);
	   }

	public function Encabezado_Tabla(){
	$this -> setfont('Arial','B',12);
	$this -> setfillcolor(255, 255, 255);
	 // $this->SetTextColor(255, 255, 255);
	$this -> cell(40,10,"Nombre",0,0,'C','true');
	$this -> cell(35,10,"Fecha inicial",0,0,'C','true');
	$this -> cell(35,10,"Fecha final",0,0,'C','true');
	$this -> cell(40,10,"Dia entre semana",0,0,'C','true');
	$this -> cell(40,10,"Fin de semana",0,0,'C','true');
	$this-> SetDrawColor(51, 181, 255);
	$this-> SetLineWidth(1);
	$this->Line(10,83,200,83);
	$this -> Ln(2);
	}

	   public function Cuerpo_Tabla($pdo){
		$this -> setfont('Arial','I',10);
		$this->SetLineWidth(0);
		$this -> setfillcolor(16, 15, 15 );	
		// $this->SetTextColor(40, 40, 40);
		$this->SetDrawColor(16, 15, 15);
	   	$stm = $pdo -> Query("SELECT * FROM programa");
	   	while ($data = $stm -> fetch(PDO::FETCH_OBJ))
	   	{
			$this -> Ln(10);
			$this -> cell(40,10,$data->Nombre_programa,1,0,'L');
			$this -> cell(35,10,$data->fecha_inicio,1,0,'L');
			$this -> cell(35,10,$data->fecha_final,1,0,'L');
			$this -> cell(40,10,$data->dia_entre_semana,1,0,'L');
	   		$this -> cell(40,10,$data->fin_de_semana,1,0,'L');
	   }
	}
	function Footer()
	{
		// Go to 1.5 cm froom bootm
		$this->SetY(-10);
		// Select Arial italic B
		$this->setfont('Arial','I',14);
		$this->SetTextColor(1,1,1);
		$this->cell(250,0,"Colegio Estanislao Zuleta I.E.D",0,0,'c');
		// Print centered page numbre
		$this->SetY(-15);
		$this->SetX(-30);
		$this->AliasNbPages();

		$this->Write(5, $this->PageNo(). '/{nb}');
	}
}

$pdf = new pdf_programas();
$pdf -> AliasNbPages(); 
$pdf -> AddPage('P','A4',0);
$pdf -> Encabezado_Tabla();
$pdf -> Cuerpo_Tabla($pdo);
$pdf -> Output();

?>