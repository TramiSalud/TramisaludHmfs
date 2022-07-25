<?php
	require_once('include/FPDF/fpdf.php');    
	
	class PDF extends FPDF
	{		
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

		function Row($data)
		{
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
				
				$this->Rect($x,$y,$w,$h);

				$this->MultiCell($w,5,$data[$i],0,$a,'true');
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

		function Header()
		{
			$this->SetFont('Arial','B',10);
			$this->Cell(0,10,utf8_decode('ANEXO TÉCNICO No. 9'),0,0,'C');
			$this->Ln(4);	
			$this->Cell(0,10,'REPORTE DE TRAZABILIDAD',0,0,'C');
			$this->Ln(10);	
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','',8);
			$this->Cell(0,10,'Este reporte ha sido creado mediante el CRM de Tramisalud',0,0,'C');
		}
	}
	
	$anexo_9 =  BeanFactory::getBean("gbi_Anexo9", $this->bean->id);
	
	$ips =  BeanFactory::getBean("IPS_IPS", $this->bean->ips_ips_id_c);

	$eps =  BeanFactory::getBean("EPS_EPS", $this->bean->eps_eps_id_c);
	
	$creador_3 = new User();
	$creador_3->retrieve($this->bean->created_by);
	
	$pacientes = $this->bean->get_linked_beans('accounts_gbi_anexo9_1', 'Accounts');
	
	if (!empty($pacientes)){
		$paciente = null;
		foreach ($pacientes as $item){
			$paciente = $item;
			break;		
		}       
	}	
	
	$historial = $this->bean->get_linked_beans('gbi_anexo9_gbihi_historialcorreo_1', 'GBIHI_HistorialCorreo');
	
	$pdf=new PDF('L','mm','Letter');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	
	
	
	
	
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,10, 'REMITENTE: '.utf8_decode($ips->codigoips.' '.$ips->name),0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'DESTINO: '.utf8_decode($eps->odigoeps.' '.$eps->name),0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Correo: '.utf8_decode($eps->emailanexo3),0,0,'L');
	$pdf->Ln(8);
	
	$pdf->Cell(0,10, 'Informe: '.utf8_decode('Solicitud Autorización de Servicios de Salud '.$anexo_9->name),0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Documento: '.utf8_decode($paciente->name),0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Paciente: '.utf8_decode($paciente->primernombre_c.' '.$paciente->segundonombre_c.' '.$paciente->primerapellido_c.' '.$paciente->segundoapellido_c),0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, utf8_decode('Fecha de petición de envío: ').utf8_decode($anexo_9->date_entered),0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Responsable: '.utf8_decode($creador_3->first_name.' '.$creador_3->last_name),0,0,'L');
	$pdf->Ln(12);
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,10, utf8_decode('Proceso de Envío'),0,0,'L');
	$pdf->Ln(12);
	
	$pdf->SetWidths(array(30, 60, 30, 30, 30, 60));
	$pdf->SetAligns(array('C', 'C', 'C', 'C', 'C', 'C'));
	$pdf->SetFont('Arial','B',8);
	$pdf->SetFillColor(205);
    $pdf->SetTextColor(0);
	$pdf->SetDrawColor(0);
	$pdf->SetLineWidth(1);
	
	for($i=0;$i<1;$i++)
	{
		$pdf->Row(array('Consecutivo', 'Para', utf8_decode("Fecha de envío"), utf8_decode("Número de reintento"), 'Correo enviado', 'Usuario'));
	}
	
	foreach ($historial as $key)
	{			
		$pdf->SetFont('Arial','',8);		
		$pdf->SetFillColor(255);
		$pdf->SetTextColor(0);
		$pdf->SetDrawColor(0);
		$pdf->SetLineWidth(1);
		$pdf->SetAligns(array('C', 'C', 'C', 'C', 'C', 'C'));
		
		$usuario = new User();
		$usuario->retrieve($key->created_by);
		
		$pdf->Row(array($key->name,$key->correo_envio,$key->fecha_envio_correo,$key->numero_reintento,$key->correo_enviado,$usuario->first_name.' '.$usuario->last_name));	
	}
	$pdf->Ln(6);
	
	$pdf->SetFont('Arial','B',10);
	$pdf->Cell(0,10, utf8_decode('Ultimo Proceso'),0,0,'L');
	$pdf->Ln(6);
		
	$correo_enviado = '';
	if($anexo_9->correo_enviado_c == 0) { $correo_enviado = 'NO'; }
	if($anexo_9->correo_enviado_c == 1) { $correo_enviado = 'SI'; }
	
	$marcado_enviar = '';
	if($anexo_9->marcado_enviar_c == 0) { $marcado_enviar = 'NO'; }
	if($anexo_9->marcado_enviar_c == 1) { $marcado_enviar = 'SI'; }
	
	$rebotado = '';
	if($anexo_9->rebotado_c == 0) { $rebotado = 'NO'; }
	if($anexo_9->rebotado_c == 1) { $rebotado = 'SI'; }
		
	$pdf->SetFont('Arial','',8);
	$pdf->Cell(0,10, utf8_decode('Fecha Envío de Correo: ').$anexo_9->fecha_envio_correo_c,0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Numero Reintentos: '.$anexo_9->numero_reintentos_c,0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Correo Enviado: '.$correo_enviado,0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Marcado Para Enviar: '.$marcado_enviar,0,0,'L');
	$pdf->Ln(4);
	$pdf->Cell(0,10, 'Rebotado: '.$rebotado,0,0,'L');
	$pdf->Ln(4);
	
	
	
	
	
	$pdf->Output("TRAZABILIDAD - AT9 - ".$anexo_9->name.".pdf",'I');	
?>