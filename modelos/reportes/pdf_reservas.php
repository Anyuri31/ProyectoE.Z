<?php
require "fpdf.php";
require "../database.php";

class pdf_reservas extends FPDF{
 
	   public function header(){
	   	//tipo de letra 
	   	$this -> setfont('Arial','B',20);
	   	//agregar imagen 
		   $this -> Image("escudo.jpg",15,10,30);
		   $this -> Image("educacion.png",150,8,50);
		
		//diseño de titulo
		$this -> setfont('Arial','I',30);
		// $this->SetTextColor(225, 72, 35);
		$this -> cell(180,45,"Reservas",0,0,'C');
		$this-> SetDrawColor(51, 181, 255);
		$this-> SetLineWidth(1);
		
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
	$this -> cell(25,10,"Usuario",0,0,'C','true');
	$this -> cell(25,10,"Aula",0,0,'C','true');
	$this -> cell(20,10,"Programa",0,0,'C','true');
	$this -> cell(30,10,"Fecha Inicio",0,0,'C','true');
	$this -> cell(28,10,"Hora Inicio",0,0,'C','true');
	$this -> cell(26,10,"Fecha Fin",0,0,'C','true');
	$this -> cell(26,10,"Hora Fin",0,0,'C','true');
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
	   	$stm = $pdo -> Query("SELECT r.Id_reserva, u.Nombres, a.Nombre_aula, p.Nombre_programa, r.Fecha_reserva, r.Hora_inicio, r.Fecha_final, r.Hora_final, e.id_estado FROM reserva r LEFT JOIN usuario u on r.Id_usuario = u.Id_usuario LEFT JOIN aula a on r.Id_aula = a.Id_aula LEFT JOIN programa p on r.Codigo_programa = p.Codigo_programa LEFT join estado e on r.id_estado = e.id_estado");
	   	while ($data = $stm -> fetch(PDO::FETCH_OBJ))
	   	{
			$this -> Ln(10);
			$this -> cell(25,10,$data->Nombres,1,0,'L');
			$this -> cell(25,10,$data->Nombre_aula,1,0,'L');
			$this -> cell(20,10,$data->Nombre_programa,1,0,'L');
			$this -> cell(30,10,$data->Fecha_reserva,1,0,'L');
			$this -> cell(28,10,$data->Hora_inicio,1,0,'L');
			$this -> cell(26,10,$data->Fecha_final,1,0,'L');
			$this -> cell(26,10,$data->Hora_final,1,0,'L');
	   			
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

$pdf = new pdf_reservas();
$pdf -> AliasNbPages(); 
$pdf -> AddPage('P','A4',0);
$pdf -> Encabezado_Tabla();
$pdf -> Cuerpo_Tabla($pdo);
$pdf -> Output();

?>