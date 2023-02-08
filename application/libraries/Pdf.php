<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	
	// Incluimos el archivo fpdf
    require_once 'assets/fpdf/fpdf.php';
	
    //Extendemos la clase Pdf de la clase fpdf para que herede todas sus variables y funciones
    class Pdf extends FPDF {
        public function __construct() {
            parent::__construct();
		}
		
        // El encabezado del PDF
        public function Header(){
            $this->Image('assets/img/logo-edomex.png',13,6,45);
            $this->Image('assets/img/logo-cobaem.png',175,6,20);
            $this->SetFont('Arial','B',8);
			$this->Ln(15);
		}
		// El pie del pdf
		public function Footer(){
			
			$this->SetY(-28);
			$this->SetFont('Arial','B',7);
			$this->Cell(0,10, utf8_decode('SECRETARÍA DE EDUCACIÓN') ,0,0,'R');
			$this->SetFont('Arial','B',6);
			$this->Ln(3);
			$this->Cell(0,10, utf8_decode('SUBSECRETARÍA DE EDUCACIÓN MEDIA SUPERIOR Y SUPERIOR') ,0,0,'R');
			$this->SetFont('Arial','B',6);
			$this->Ln(3);
			$this->Cell(0,10,utf8_decode( 'Página '.$this->PageNo().' de {nb}' ),0,0,'L');
			$this->Cell(0,10, utf8_decode('COLEGIO DE BACHILLERES DEL ESTADO DE MÉXICO') ,0,0,'R');
			$this->Ln(6);
			$this->SetFillColor(192,192,192);
			$this->SetFont('Arial','B',5);
			$this->Cell(0,4, utf8_decode('2DA PRIVADA DE LA LIBERTAD #102. LA MERCED Y ALAMEDA, TOLUCA, ESTADO DE MÉXICO, TELÉFONOS: (01722) 2.26.04.50 AL 54'),0,0,'C',true);
			$this->Ln(3);
			$this->Cell(25,4,'www.edomex.gob.mx',0,0,'L',true);
			$this->Cell(130,4, utf8_decode('verción vigente: 01'),0,0,'C',true); 
			$fecha=date('d/m/Y');
			$this->Cell(0,4,"fecha: $fecha",0,0,'R',true);
		}
		
		var $angle=0;
		
		function girar($angle=0,$x=-1,$y=-1){
			if($x==-1)
			$x=$this->x;
			if($y==-1)
			$y=$this->y;
			if($this->angle!=0)
			$this->_out('Q');
			$this->angle=$angle;
			if($angle!=0)
			{
				$angle*=M_PI/180;
				$c=cos($angle);
				$s=sin($angle);
				$cx=$x*$this->k;
				$cy=($this->h-$y)*$this->k;
				$this->_out(sprintf('q %.5F %.5F %.5F %.5F %.2F %.2F cm 1 0 0 1 %.2F %.2F cm',$c,$s,-$s,$c,$cx,$cy,-$cx,-$cy));
			}
		}
		
		//Lineas para definir multicell ajustable
		var $widths; 
		var $aligns; 

		function SetWidths($w) 
		{ 
			//Set the array of column widths 
			$this->widths=$w; 
		} 

		function SetAligns($a) 
		{ 
			//Set the array of column alignments 
			$this->aligns=$a; 
		} 

		function fill($f)
		{
			//juego de arreglos de relleno
			$this->fill=$f;
		}

		function Row($data) 
		{
			$style=null;
			$fill=null;
			//Calculate the height of the row 
			$nb=0; 
			for($i=0;$i<count($data);$i++) 
				$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i])); 
			$h=5*$nb; 
			//Issue a page break first if needed 
			$this->CheckPageBreak($h); 
			//Draw the cells of the row 
			for($i=0;$i<count($data);$i++) 
			{ 
				$w=$this->widths[$i]; 
				$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L'; 
				//Save the current position 
				$x=$this->GetX(); 
				$y=$this->GetY(); 
				//Draw the border 
				$this->Rect($x,$y,$w,$h,$style); 
				//Print the text 
				$this->MultiCell($w,5,$data[$i],'LTR',$a,$fill); 
				//Put the position to the right of the cell 
				$this->SetXY($x+$w,$y); 
			} 
			//Go to the next line 
			$this->Ln($h); 
		} 

		function CheckPageBreak($h) 
		{ 
			//If the height h would cause an overflow, add a new page immediately 
			if($this->GetY()+$h>$this->PageBreakTrigger) 
				$this->AddPage($this->CurOrientation); 
		} 

		function NbLines($w,$txt) 
		{ 
			//Computes the number of lines a MultiCell of width w will take 
			$cw=&$this->CurrentFont['cw']; 
			if($w==0) 
				$w=$this->w-$this->rMargin-$this->x; 
			$wmax=($w-2*$this->cMargin)*1000/$this->FontSize; 
			$s=str_replace("\r",'',$txt); 
			$nb=strlen($s); 
			if($nb>0 and $s[$nb-1]=="\n") 
				$nb--; 
			$sep=-1; 
			$i=0; 
			$j=0; 
			$l=0; 
			$nl=1; 
			while($i<$nb) 
			{ 
				$c=$s[$i]; 
				if($c=="\n") 
				{ 
					$i++; 
					$sep=-1; 
					$j=$i; 
					$l=0; 
					$nl++; 
					continue; 
				} 
				if($c==' ') 
					$sep=$i; 
				$l+=$cw[$c]; 
				if($l>$wmax) 
				{ 
					if($sep==-1) 
					{ 
						if($i==$j) 
							$i++; 
					} 
					else 
						$i=$sep+1; 
					$sep=-1; 
					$j=$i; 
					$l=0; 
					$nl++; 
				} 
				else 
					$i++; 
			} 
			return $nl; 
		}
		//Fin Lineas para definir multicell ajustable
		
	}		
