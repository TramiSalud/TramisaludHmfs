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
			$this->SetFont('Arial','B',8);
			$this->Cell(0,10,utf8_decode('ANEXO TÉCNICO No.9'),0,0,'C');
			$this->Ln(3);	
			
			$this->Cell(0,10,utf8_decode ('FORMATO ESTANDARIZADO DE REFERENCIA DE PACIENTES'),0,0,'C');
			$this->Ln(4);		
		}

		function Footer()
		{
			/*$this->SetY(-15);
			$this->SetFont('Arial','',5);
			$this->Cell(0,10,'MPS-SAS V5.0 2008-07-11',0,0,'L');
		*/
		}
	}
	
	global $app_list_strings;
	
	$anexo_9 =  BeanFactory::getBean("gbi_Anexo9", $this->bean->id);
	$ips =  BeanFactory::getBean("IPS_IPS",$this->bean->ips_ips_id_c);
	$departamento_ips =  BeanFactory::getBean("DEP_Departamentos", $ips->dep_departamentos_id_c);
	$municipio_ips =  BeanFactory::getBean("MUN_Municipio", $ips->mun_municipio_id_c);
	$eps =  BeanFactory::getBean("EPS_EPS", $this->bean->eps_eps_id_c);	
	$departamento_eps =  BeanFactory::getBean("DEP_Departamentos",$eps->dep_departamentos_id_c);
	$municipio_eps =  BeanFactory::getBean("MUN_Municipio",$eps->mun_municipio_id_c);
	$dptorespo= BeanFactory::getBean("dep_departamentos_id_c",$anexo_9->dep_departamentos_id_c);
	$mpiorespo= BeanFactory::getBean("MUN_Municipio",$anexo_9->mun_municipio_id_c);
	
	/*
	$eps_rem =  BeanFactory::getBean("EPS_EPS", $this->bean->eps_eps_id1_c);	
	$departamento_eps_rem =  BeanFactory::getBean("DEP_Departamentos",$eps_rem->dep_departamentos_id_c);
	$municipio_eps_rem =  BeanFactory::getBean("MUN_Municipio",$eps_rem->mun_municipio_id_c);
	
	//$paciente =  BeanFactory::getBean("Accounts", $this->bean->account_id_c);
	*/
	$pacientes = $this->bean->get_linked_beans('accounts_gbi_anexo9_1','Accounts');
	
	if (!empty($pacientes)){
		$paciente = null;
		foreach ($pacientes as $item){
			$paciente = $item;
			break;		
		}       
	}
	
	$especialista =  BeanFactory::getBean("ESP_Especialista", $this->bean->esp_especialista_id_c);
	
	/*$cie_10_p =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id3_c);
	$cie_10_1 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id_c);
	$cie_10_2 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id1_c);	
	$cie_10_3 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id2_c);
	*/
	$departamento_paci =  BeanFactory::getBean("DEP_Departamentos", $paciente->dep_departamentos_id_c);
	$municipio_paci =  BeanFactory::getBean("MUN_Municipio", $paciente->mun_municipio_id1_c);
	
	$cup =  BeanFactory::getBean("GBICU_CUPS", $anexo_9->gbicu_cups_id_c);	
	$cup2 =  BeanFactory::getBean("GBICU_CUPS", $anexo_9->gbicu_cups_id1_c);	
	$cup3 =  BeanFactory::getBean("GBICU_CUPS", $anexo_9->gbicu_cups_id2_c);	
	
	$cie_10_1 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id_c);
	$cie_10_12 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id1_c);
	$cie_10_13 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id2_c);

	
	
	
	date_default_timezone_set('America/Bogota');
	$today = date("Y-m-d h:i"); 
	
	$pdf=new PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true,10); 
	$pdf->SetMargins(20, 5 , 20); 
	
	
	
	
	$pdf->Image('include/images/escudo_colombia.jpg',35,20,10);
	//$pdf->Image('include/images/escudo_colombia.jpg',35,10,10);
	$pdf->Image('include/images/logo_hmfsb.jpg',170,20,10);
	$pdf->SetFont('Arial','B',5);
	$pdf->Cell(0,10,utf8_decode('MINISTERIO DE LA SALUD Y PROTECCION SOCIAL'),0,0,'C');
	$pdf->Ln(4);
	$pdf->Cell(0,10,'FORMATO ESTANDARIZADO DE REFERENCIA DE PACIENTES',0,0,'C');
	
	
	
	
	$pdf->SetXY(60,24);
	$pdf->Cell(0,10,utf8_decode('NÚMERO DE SOLICITUD'),0,0,'L');
	$pdf->Line(83, 30, 98, 30);
	
	$pdf->SetXY(100,24);
	$pdf->Cell(0,10, 'Fecha y Hora:',0,0,'L');
	$pdf->Line(114, 30, 144, 30);

	
	$pdf->SetXY(85,24);
	$pdf->Cell(0,10,$anexo_9->name,0,0,'L');
	
	$pdf->SetXY(120,24);
	$pdf->Cell(0,10, $anexo_9->date_entered,0,0,'L');	
	
		$pdf->SetXY(20,28);
	$pdf->Cell(0,10, 'INFORMACION DEL PRESTADOR',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,31);
	$pdf->Cell(0,10, 'Nombre',0,0,'L');
	$pdf->Line(29, 37, 149, 37);
	
	$pdf->SetXY(150,31);
	$pdf->Cell(0,10, 'NIT',0,0,'L');
	$pdf->Line(155, 37, 160, 37);
	
	$pdf->SetXY(150,31);
	$pdf->Line(161, 37, 190, 37);
	
	$pdf->SetXY(33,31);
	$pdf->Cell(0,10, utf8_decode($ips->name),0,0,'L');
	
	if($ips->tipodocumento == 'NIT')
	{
		$pdf->SetXY(156,31);
		$pdf->Cell(0,10, 'X',0,0,'L');
		
		$pdf->SetXY(170,31);
		$pdf->Cell(0,10, $ips->nrodocumento,0,0,'L');
		
		$pdf->SetXY(185,31);
		$pdf->Cell(0,10, $ips->digitoverificacion,0,0,'L');
	}
	
	
	
	
	
	$pdf->SetXY(150,35);
	$pdf->Cell(0,10, 'CC',0,0,'L');
	$pdf->Line(155, 41, 160, 41);
	
	$pdf->SetXY(160,35);
	$pdf->Cell(0,10, utf8_decode('Número'),0,0,'L');
	
	$pdf->SetXY(185,35);
	$pdf->Cell(0,10, 'DV',0,0,'L');
	
	if($ips->tipodocumento != 'NIT')
	{
		$pdf->SetXY(156,35);
		$pdf->Cell(0,10, 'X',0,0,'L');
		
		$pdf->SetXY(170,31);
		$pdf->Cell(0,10, $ips->nrodocumento,0,0,'L');
		
		$pdf->SetXY(185,31);
		$pdf->Cell(0,10, $ips->digitoverificacion,0,0,'L');
	}
	
	
	
	
	
	$pdf->SetXY(20,39);
	$pdf->Cell(0,10, utf8_decode('Código'),0,0,'L');
	$pdf->Line(31, 45, 79, 45);
	
	$pdf->SetXY(80,39);
	$pdf->Cell(0,10,  utf8_decode('Dirección prestador:'),0,0,'L');
	$pdf->Line(100, 45, 190, 45);
	
	$pdf->SetXY(35,39);
	$pdf->Cell(0,10, $ips->codigoips,0,0,'L');
	
	$pdf->SetXY(103,39);
	$pdf->Cell(0,10, $ips->direccion,0,0,'L');
	

	
	
	
	
	
	$pdf->SetXY(20,43);
	$pdf->Cell(0,10, utf8_decode('Teléfono:'),0,0,'L');
	$pdf->Line(31, 49, 79, 49);
	
	$pdf->SetXY(45,43);
	$pdf->Cell(0,10, $ips->telefono,0,0,'L');
	
	
	
	
	
	
	$pdf->SetXY(35,47);
	$pdf->Cell(0,10, 'indicativo',0,0,'L');
	
	$pdf->SetXY(60,47);
	$pdf->Cell(0,10, utf8_decode('número'),0,0,'L');
	
	$pdf->SetXY(80,47);
	$pdf->Cell(0,10, 'Departamento:',0,0,'L');
	$pdf->Line(95, 53, 125, 53);
	
	$pdf->SetXY(80,47);
	$pdf->Line(126, 53, 134, 53);
	
	$pdf->SetXY(136,47);
	$pdf->Cell(0,10, 'Municipio:',0,0,'L');
	$pdf->Line(148, 53, 180, 53);
	
	$pdf->SetXY(136,47);
	$pdf->Line(181, 53, 190, 53);
	
	$pdf->SetXY(98,47);
	$pdf->Cell(0,10, utf8_decode($departamento_ips->name),0,0,'L');
	
	$pdf->SetXY(128,47);
	$pdf->Cell(0,10, $departamento_ips->codigodane,0,0,'L');
	
	$pdf->SetXY(150,47);
	$pdf->Cell(0,10, utf8_decode($municipio_ips->name),0,0,'L');
	
	$pdf->SetXY(183,47);
	$pdf->Cell(0,10, $municipio_ips->codigodane,0,0,'L');
	
	
	
	
	
	/*$pdf->SetXY(20,51);
	$pdf->Cell(0,10, 'ENTIDAD A LA QUE SE LE INFORMA (PAGADOR)',0,0,'L');
	$pdf->Line(65, 57, 148, 57);
	
	$pdf->SetXY(150,51);
	$pdf->Cell(0,10, 'CODIGO:',0,0,'L');
	$pdf->Line(160, 57, 190, 57);
	
	$pdf->SetXY(70,51);
	$pdf->Cell(0,10, utf8_decode($eps->name),0,0,'L');
	
	$pdf->SetXY(165,51);
	$pdf->Cell(0,10, $eps->odigoeps,0,0,'L');*/
	
	
	
	
	
	$pdf->SetXY(10,56);
	$pdf->Cell(0,10, 'DATOS DEL PACIENTE',0,0,'C');
	
	
	
	
	
	$pdf->SetXY(20,60);
	$pdf->Line(20, 67, 63, 67);
	
	$pdf->SetXY(20,60);
	$pdf->Line(64, 67, 107, 67);
	
	$pdf->SetXY(20,60);
	$pdf->Line(108, 67, 151, 67);
	
	$pdf->SetXY(20,60);
	$pdf->Line(152, 67, 190, 67);
	
	//
	if(empty($paciente->primerapellido_c)){		
		$pdf->SetXY(30,60);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(30,60);
		$pdf->Cell(0,10, utf8_decode($paciente->primerapellido_c),0,0,'L');
	}
	
	//
	if(empty($paciente->segundoapellido_c)){		
		$pdf->SetXY(75,60);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(75,60);
		$pdf->Cell(0,10, utf8_decode($paciente->segundoapellido_c),0,0,'L');
	}
	
	//
	if(empty($paciente->primernombre_c)){		
		$pdf->SetXY(120,60);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(120,60);
		$pdf->Cell(0,10, utf8_decode($paciente->primernombre_c),0,0,'L');
	}
	
	//
	if(empty($paciente->segundonombre_c)){		
		$pdf->SetXY(160,60);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(160,60);
		$pdf->Cell(0,10, utf8_decode($paciente->segundonombre_c),0,0,'L');
	}
	
	
	
	
	
	$pdf->SetXY(35,65);
	$pdf->Cell(0,10, '1er Apellido',0,0,'L');
	
	$pdf->SetXY(80,65);
	$pdf->Cell(0,10, '2do Apellido',0,0,'L');
	
	$pdf->SetXY(125,65);
	$pdf->Cell(0,10, '1er Nombre',0,0,'L');
	
	$pdf->SetXY(165 ,65);
	$pdf->Cell(0,10, '2do Nombre',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,69);
	$pdf->Cell(0,10, utf8_decode('Tipo Documento de Identificación'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,73);
	$pdf->Line(21, 79, 26, 79);
	
	$pdf->SetXY(26 ,73);
	$pdf->Cell(0,10, 'Registro Civil',0,0,'L');
	
	$pdf->SetXY(20,73);
	$pdf->Line(50, 79, 55, 79);
	
	$pdf->SetXY(55 ,73);
	$pdf->Cell(0,10, 'Pasaporte',0,0,'L');
	
	$pdf->SetXY(55,73);
	$pdf->Line(130, 79, 170, 79);
	
	
	
	
	
	$pdf->SetXY(20,77);
	$pdf->Line(21, 83, 26, 83);
	
	$pdf->SetXY(26 ,77);
	$pdf->Cell(0,10, 'Tarjeta de identidad',0,0,'L');
	
	$pdf->SetXY(20,77);
	$pdf->Line(50, 83, 55, 83);
	
	$pdf->SetXY(55 ,77);
	$pdf->Cell(0,10, utf8_decode('Adulto sin identificación'),0,0,'L');
	
	$pdf->SetXY(133 ,77);
	$pdf->Cell(0,10, utf8_decode('Numero documento de identificación'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,81);
	$pdf->Line(21, 87, 26, 87);
	
	$pdf->SetXY(26 ,81);
	$pdf->Cell(0,10, utf8_decode('Cédula de ciudadania'),0,0,'L');
	
	$pdf->SetXY(20,81);
	$pdf->Line(50, 87, 55, 87);
	
	$pdf->SetXY(55 ,81);
	$pdf->Cell(0,10, utf8_decode('Menor sin identificación'),0,0,'L');
	
	
	
	
	
	
	$pdf->SetXY(20,85);
	$pdf->Line(21, 91, 26, 91);
	
	$pdf->SetXY(26 ,85);
	$pdf->Cell(0,10, utf8_decode('Cédula de extranjeria'),0,0,'L');
	
	$pdf->SetXY(100,85);
	$pdf->Cell(0,10, 'Fecha de Nacimiento',0,0,'L');
	$pdf->Line(120, 91, 135, 91);
	
	//TIPO DOC, NUMERO DOC, FECHA NAC
	if($paciente->tipo_documento_c == 'R.C.')
	{
		$pdf->SetXY(22,73);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipo_documento_c == 'T.I.')
	{
		$pdf->SetXY(22,77);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipo_documento_c == 'CC')
	{
		$pdf->SetXY(22,81);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipo_documento_c == 'CE')
	{
		$pdf->SetXY(22,85);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipo_documento_c == 'pasaporte')
	{
		$pdf->SetXY(51,73);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipo_documento_c == 'adulto_sin_identificar')
	{
		$pdf->SetXY(51,77);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipo_documento_c == 'menor_sin_identificar')
	{
		$pdf->SetXY(51,81);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	$pdf->SetXY(145,73);
	$pdf->Cell(0,10, $paciente->name,0,0,'L');
	
	$pdf->SetXY(121,85);
	$pdf->Cell(0,10, $paciente->fechanacimiento_c,0,0,'L');	
	//FIN 
	
	
	
	
	
	
	
	
	$pdf->SetXY(20,89);
	$pdf->Cell(0,10,  utf8_decode('Dirección de Residencia Habitual:'),0,0,'L');
	$pdf->Line(51, 95, 141, 95);
	
	$pdf->SetXY(142,89);
	$pdf->Cell(0,10, utf8_decode('Teléfono:'),0,0,'L');
	$pdf->Line(153, 95, 190, 95);
	
	$pdf->SetXY(55,89);
	$pdf->Cell(0,10, utf8_decode($paciente->direccionresidencia_c),0,0,'L');
	
	$pdf->SetXY(158,89);
	$pdf->Cell(0,10, $paciente->telefonopersonal_c,0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,93);
	$pdf->Cell(0,10, 'Departamento:',0,0,'L');
	$pdf->Line(35, 99, 97, 99);
	
	$pdf->SetXY(20,93);
	$pdf->Line(98, 99, 106, 99);
	
	$pdf->SetXY(107,93);
	$pdf->Cell(0,10, 'Municipio:',0,0,'L');
	$pdf->Line(118, 99, 180, 99);
	
	$pdf->SetXY(136,93);
	$pdf->Line(181, 99, 190, 99);
	
	$pdf->SetXY(38,93);
	$pdf->Cell(0,10, utf8_decode($departamento_paci->name),0,0,'L');
	
	$pdf->SetXY(100,93);
	$pdf->Cell(0,10, $departamento_paci->codigodane,0,0,'L');
	
	$pdf->SetXY(122,93);
	$pdf->Cell(0,10, utf8_decode($municipio_paci->name),0,0,'L');
	
	$pdf->SetXY(183,93);
	$pdf->Cell(0,10, $municipio_paci->codigodane,0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,97);
	$pdf->Cell(0,10, 'ENTIDAD RESPONSABLE DEL PAGO',0,0,'L');
	$pdf->Line(54, 103, 148, 103);
	
	$pdf->SetXY(150,97);
	$pdf->Cell(0,10, 'CODIGO:',0,0,'L');
	$pdf->Line(160, 103, 190, 103);
	
	$pdf->SetXY(56,97);
	$pdf->Cell(0,10, utf8_decode($eps->name),0,0,'L');
	
	$pdf->SetXY(165,97);
	$pdf->Cell(0,10, $eps->odigoeps,0,0,'L');
	
	
	
	
	$pdf->SetXY(10,102);
	$pdf->Cell(0,10, 'DATOS DE LA PERSONA RESPONSABLE DEL PACIENTE',0,0,'C');
	
	
	
	
	
	$pdf->SetXY(20,60);
	$pdf->Line(20, 114, 63, 114);
	
	$pdf->SetXY(20,60);
	$pdf->Line(64, 114, 107, 114);
	
	$pdf->SetXY(20,60);
	$pdf->Line(108, 114, 151, 114);
	
	$pdf->SetXY(20,60);
	$pdf->Line(152, 114, 190, 114);
	
	//
	if(empty($anexo_9->primer_apellido)){		
		$pdf->SetXY(30,107);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(30,107);
		$pdf->Cell(0,10, utf8_decode($anexo_9->primer_apellido),0,0,'L');
	}
	
	//
	if(empty($anexo_9->segundo_apellido)){		
		$pdf->SetXY(75,107);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(75,107);
		$pdf->Cell(0,10, utf8_decode($anexo_9->segundo_apellido),0,0,'L');
	}
	
	//
	if(empty($anexo_9->primer_nom)){		
		$pdf->SetXY(120,107);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(120,107);
		$pdf->Cell(0,10, utf8_decode($anexo_9->primer_nom),0,0,'L');
	}
	
	//
	if(empty($anexo_9->sdo_nombre)){		
		$pdf->SetXY(160,107);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(160,107);
		$pdf->Cell(0,10, utf8_decode($anexo_9->sdo_nombre),0,0,'L');
	}
	
	
	
	
	
	$pdf->SetXY(35,111);
	$pdf->Cell(0,10, '1er Apellido',0,0,'L');
	
	$pdf->SetXY(80,111);
	$pdf->Cell(0,10, '2do Apellido',0,0,'L');
	
	$pdf->SetXY(125,111);
	$pdf->Cell(0,10, '1er Nombre',0,0,'L');
	
	$pdf->SetXY(165 ,111);
	$pdf->Cell(0,10, '2do Nombre',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,115);
	$pdf->Cell(0,10, utf8_decode('Tipo Documento de Identificación'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,119);
	$pdf->Line(21, 125, 26, 125);
	
	$pdf->SetXY(26 ,119);
	$pdf->Cell(0,10, 'Registro Civil',0,0,'L');
	
	$pdf->SetXY(20,119);
	$pdf->Line(50, 125, 55, 125);
	
	$pdf->SetXY(55 ,119);
	$pdf->Cell(0,10, 'Pasaporte',0,0,'L');
	
	$pdf->SetXY(55,119);
	$pdf->Line(130, 125, 170, 125);
	
	
	
	
	
	$pdf->SetXY(20,123);
	$pdf->Line(21, 129, 26, 129);
	
	$pdf->SetXY(26 ,123);
	$pdf->Cell(0,10, 'Tarjeta de identidad',0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(50, 129, 55, 129);
	
	$pdf->SetXY(55 ,123);
	$pdf->Cell(0,10, utf8_decode('Adulto sin identificación'),0,0,'L');
	
	$pdf->SetXY(133 ,123);
	$pdf->Cell(0,10, utf8_decode('Numero documento de identificación'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,127);
	$pdf->Line(21, 133, 26, 133);
	
	$pdf->SetXY(26 ,127);
	$pdf->Cell(0,10, utf8_decode('Cédula de ciudadania'),0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(50, 133, 55, 133);
	
	$pdf->SetXY(55 ,127);
	$pdf->Cell(0,10, utf8_decode('Menor sin identificación'),0,0,'L');
	
	
	
	
	
	
	$pdf->SetXY(20,131);
	$pdf->Line(21, 137, 26, 137);
	
	$pdf->SetXY(26 ,131);
	$pdf->Cell(0,10, utf8_decode('Cédula de extranjeria'),0,0,'L');
	
	//TIPO DOC, NUMERO DOC, FECHA NAC
	if($anexo_9->tipo_documento == 'regist_civl')
	{
		$pdf->SetXY(22,119);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_9->tipo_documento == 'tarjeta_ident')
	{
		$pdf->SetXY(22,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_9->tipo_documento == 'cc')
	{
		$pdf->SetXY(22,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_9->tipo_documento == 'Ce')
	{
		$pdf->SetXY(22,131);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_9->tipo_documento == 'pasaporte')
	{
		$pdf->SetXY(51,119);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_9->tipo_documento == 'adulto_sidentificar')
	{
		$pdf->SetXY(51,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_9->tipo_documento == 'menor_sidentificar')
	{
		$pdf->SetXY(51,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	$pdf->SetXY(145,119);
	$pdf->Cell(0,10, $anexo_9->documento_respon,0,0,'L');	
	//FIN 
	
	
	
	
	
	
	
	
	$pdf->SetXY(20,135);
	$pdf->Cell(0,10,  utf8_decode('Dirección de Residencia Habitual:'),0,0,'L');
	$pdf->Line(51, 141, 141, 141);
	
	$pdf->SetXY(142,135);
	$pdf->Cell(0,10, utf8_decode('Teléfono:'),0,0,'L');
	$pdf->Line(153, 141, 190, 141);
	
	$pdf->SetXY(55,135);
	$pdf->Cell(0,10, utf8_decode($anexo_9->direccion_r),0,0,'L');
	
	$pdf->SetXY(158,135);
	$pdf->Cell(0,10, $anexo_9->telefono,0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,139);
	$pdf->Cell(0,10, 'Departamento:',0,0,'L');
	$pdf->Line(35, 145, 97, 145);
	
	$pdf->SetXY(20,139);
	$pdf->Line(98, 145, 106, 145);
	
	$pdf->SetXY(107,139);
	$pdf->Cell(0,10, 'Municipio:',0,0,'L');
	$pdf->Line(118, 145, 180, 145);
	
	$pdf->SetXY(136,139);
	$pdf->Line(181, 145, 190, 145);
	
	$pdf->SetXY(38,139);
	$pdf->Cell(0,10, utf8_decode($dptorespo->name),0,0,'L');
	
	$pdf->SetXY(100,139);
	$pdf->Cell(0,10, $dptorespo->codigodane,0,0,'L');
	
	$pdf->SetXY(122,139);
	$pdf->Cell(0,10, utf8_decode($mpiorespo->name),0,0,'L');
	
	$pdf->SetXY(183,139);
	$pdf->Cell(0,10, $mpiorespo->codigodane,0,0,'L');
	
	
	
	

	$pdf->SetXY(10,143);
	$pdf->Cell(0,10, 'PROFESIONAL QUE SOLICITA LA REFERENCIA Y SERVICIO AL CUAL SE REMITE',0,0,'C');
	
	
	
	
	
	$pdf->SetXY(20,147);
	$pdf->Cell(0,10, 'Nombre',0,0,'L');
	$pdf->Line(28, 153, 119, 153);
	
	$pdf->SetXY(120,147);
	$pdf->Cell(0,10, utf8_decode('Teléfono'),0,0,'L');
	$pdf->Line(131, 153, 146, 153);
	
	$pdf->SetXY(120,147);
	$pdf->Line(147, 153, 174, 153);
	
	$pdf->SetXY(120,147);
	$pdf->Line(175, 153, 190, 153);
	
	$pdf->SetXY(45,147);
	$pdf->Cell(0,10, utf8_decode($especialista->nombres)." ".utf8_decode($especialista->apellidos),0,0,'L');
	
	$pdf->SetXY(152,147);
	$pdf->Cell(0,10, $especialista->telppal,0,0,'L');
	
	$pdf->SetXY(178,147);
	$pdf->Cell(0,10, $especialista->extension,0,0,'L');
	
	
	
	
	
	$pdf->SetXY(133,151);
	$pdf->Cell(0,10, 'indicativo',0,0,'L');
	
	$pdf->SetXY(157,151);
	$pdf->Cell(0,10, utf8_decode('número'),0,0,'L');
	
	$pdf->SetXY(177,151);
	$pdf->Cell(0,10, utf8_decode('extensión'),0,0,'L');
	
			
	$pdf->SetXY(20,155);
	$pdf->Cell(0,10, 'Servicio que solicita la referencia:',0,0,'L');
	$pdf->Line(50, 161, 119, 161);
	
	$pdf->SetXY(20,159);
	$pdf->Cell(0,10, 'Servicio para el cual solicita la referencia:',0,0,'L');
	$pdf->Line(57, 165, 190, 165);
	
	$pdf->SetXY(20,163);
	$pdf->Cell(0,10, 'CUP 2:',0,0,'L');
	$pdf->Line(57, 169, 190, 169);
	
	$pdf->SetXY(20,167);
	$pdf->Cell(0,10, 'CUP 3:',0,0,'L');
	$pdf->Line(57, 173, 190, 173);
	
	$pdf->SetXY(120,155);
	$pdf->Cell(0,10, utf8_decode('Teléfono celular:'),0,0,'L');
	$pdf->Line(137, 161, 190, 161);
	
	$pdf->SetXY(52,155);
	$pdf->Cell(0,10, utf8_decode($app_list_strings["cargactirela_c_anexo3"][$especialista->cargo]),0,0,'L');
	
	$pdf->SetXY(60,159);
	$pdf->Cell(0,10, utf8_decode($cup->name.' '.$cup->description),0,0,'L');
	
	$pdf->SetXY(60,163);
	$pdf->Cell(0,10, utf8_decode($cup2->name.' '.$cup2->description),0,0,'L');
	
	$pdf->SetXY(60,167);
	$pdf->Cell(0,10, utf8_decode($cup3->name.' '.$cup3->description),0,0,'L');
	
	$pdf->SetXY(140,155);
	$pdf->Cell(0,10, $especialista->telcel,0,0,'L');
	
	
	
	
	
	$pdf->SetXY(25,174);
	$pdf->Cell(0,10,utf8_decode('INFORMACION CLINICA RELEVANTE'),0,0,'C');
	
	$pdf->SetXY(20,182);
	$pdf->Multicell(0,3,utf8_decode('Diligencie en el orden indicado el resumen de anamnesis y examen físico y resultados de exámenes auxiliares de diagnóstico, resumen de la evolución, diagnósticos, complicaciones, tratamientos aplicados y motivos de remisión. Al finalizar, el profesional tratante debe firmar la solicitud de referencia y anotar su registro profesional.'),0,'J');



	

	$pdf->Line(20,195,190,195);
	$pdf->Line(20,199,190,199);
	$pdf->Line(20,203,190,203);
	$pdf->Line(20,207,190,207);
	$pdf->Line(20,211,190,211);
	$pdf->Line(20,215,190,215);
	$pdf->Line(20,219,190,219);
	$pdf->Line(20,223,190,223);
	$pdf->Line(20,227,190,227);
	$pdf->Line(20,231,190,231);
	$pdf->Line(20,235,190,235);
	$pdf->Line(20,239,190,239);
	$pdf->Line(20,243,190,243);
	
	$pdf->SetXY(20,242);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico principal'),0,0,'L');
	
	$pdf->SetXY(20,246);
	$pdf->Cell(0,10, utf8_decode('DX 2'),0,0,'L');
	
	$pdf->SetXY(20,250);
	$pdf->Cell(0,10, utf8_decode('DX 3'),0,0,'L');
	
	$pdf->SetXY(20,250);
	$pdf->Line(43, 256, 54, 256);
	
	$pdf->SetXY(20,250);
	$pdf->Line(43, 252, 54, 252);
	
	$pdf->SetXY(20,250);
	$pdf->Line(43, 248, 54, 248);
	
	$pdf->SetXY(20,250);
	$pdf->Line(57, 248, 190, 248);
	
	$pdf->SetXY(20,250);
	$pdf->Line(57, 252, 190, 252);
	
	$pdf->SetXY(20,250);
	$pdf->Line(57, 256, 190, 256);
	
	$pdf->SetXY(45,242);
	$pdf->Cell(0,10, $cie_10_1->name,0,0,'L');
	
	$pdf->SetXY(60,242);
	$pdf->Cell(0,10, utf8_decode($cie_10_1->description),0,0,'L');
	
	$pdf->SetXY(45,246);
	$pdf->Cell(0,10, $cie_10_12->name,0,0,'L');
	
	$pdf->SetXY(60,246);
	$pdf->Cell(0,10, utf8_decode($cie_10_12->description),0,0,'L');
	
	$pdf->SetXY(45,250);
	$pdf->Cell(0,10, $cie_10_13->name,0,0,'L');
	
	$pdf->SetXY(60,250);
	$pdf->Cell(0,10, utf8_decode($cie_10_13->description),0,0,'L');
	
	$pdf->SetXY(20 ,254);
	$pdf->Cell(0,10, 'Servicio',0,0,'L');
	$pdf->Line(29, 260, 159, 260);
	
	$pdf->SetXY(160 ,254);
	$pdf->Cell(0,10, 'Cama',0,0,'L');
	$pdf->Line(168, 260, 190, 260);
	
	$pdf->SetXY(32,254);
	$pdf->Cell(0,10, utf8_decode($app_list_strings["servicio_c_list"][$anexo_9->servicio_c]),0,0,'L');
		
	$pdf->SetXY(170,254);
	$pdf->Cell(0,10, utf8_decode($app_list_strings["cama_c_list"][$anexo_9->cama_c]),0,0,'L'); 
	
	
	
	$pdf->SetXY(20,192);
	$pdf->Multicell(0,4,utf8_decode($anexo_9->description),0,'J');
	
	
	$pdf->SetXY(80,263);
	$pdf->Multicell(0,3,utf8_decode('FIRMA Y REGISTRO DEL PROFESIONAL QUE REMITE'),0,'J');
	$pdf->Line(20,266,190,266);
	$pdf->Line(20,270,190,270);	
	
	
	$pdf->SetXY(20,263.2);
	$pdf->Cell(0,10, utf8_decode($especialista->nombres)." ".utf8_decode($especialista->apellidos)." -   Reg. Medico  ".$especialista->name,0,0,'L');
	
	
	
	$pdf->Output("upload\PDF_Anexo9\A9-".$anexo_9->name.".pdf",'F');	
	$pdf->Output("ANEXO TECNICO NO 9 - Numero de Solicitud ".$anexo_9->name.".pdf",'I');	
?>