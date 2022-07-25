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
			$this->Cell(0,10,utf8_decode('ANEXO TÉCNICO No. 3'),0,0,'C');
			$this->Ln(3);	
			$this->Cell(0,10,'SOLICITUD DE AUTORIZACION DE SERVICIOS DE SALUD',0,0,'C');
			$this->Ln(4);		
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','',5);
			$this->Cell(0,10,'MPS-SAS V5.0 2008-07-11',0,0,'L');
		}
	}
	
	global $app_list_strings;
	
	//file_put_contents('\\\192.168.0.15\\htdocs\\tramisalud_Dev\\custom\\modules\\GBIA3_ANEXO3\\log.txt', var_export($this->bean->id, true), FILE_APPEND);
	
	$anexo_3 =  BeanFactory::getBean("GBIA3_ANEXO3", $this->bean->id);
	
	$ips =  BeanFactory::getBean("IPS_IPS", $this->bean->ips_ips_id_c);

	$eps =  BeanFactory::getBean("EPS_EPS", $this->bean->eps_eps_id_c);
	
	$departamento_ips =  BeanFactory::getBean("DEP_Departamentos", $ips->dep_departamentos_id_c);
	
	$municipio_ips =  BeanFactory::getBean("MUN_Municipio", $ips->mun_municipio_id_c);
	
	//$paciente =  BeanFactory::getBean("Accounts", $this->bean->account_id_c);
	
	$pacientes = $this->bean->get_linked_beans('accounts_gbia3_anexo3_1', 'Accounts');
	
	if (!empty($pacientes)){
		$paciente = null;
		foreach ($pacientes as $item){
			$paciente = $item;
			break;		
		}       
	}	
	       
	
	$departamento_paci =  BeanFactory::getBean("DEP_Departamentos", $paciente->dep_departamentos_id_c);
	
	$municipio_paci =  BeanFactory::getBean("MUN_Municipio", $paciente->mun_municipio_id1_c);
	
	//$especialista =  BeanFactory::getBean("Contacts", $this->bean->contact_id_c);
	$especialista =  BeanFactory::getBean("ESP_Especialista", $this->bean->esp_especialista_id_c);
	
	$cie_10_1 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id_c);
	
	$cie_10_2 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id1_c);
	
	$cie_10_3 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id2_c);
	
	$cups = $this->bean->get_linked_beans('gbia3_anexo3_gbia3_manejointegral_1', 'GBIA3_ManejoIntegral');
	
	
	
	date_default_timezone_set('America/Bogota');
	$today = date("Y-m-d h:i"); 
	
	$pdf=new PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true,10); 
	$pdf->SetMargins(20, 5 , 20); 
	
	
	
	
	$pdf->Image('include/images/escudo_colombia.jpg',35,20,10);
	$pdf->Image('include/images/logo_hmfsb.jpg',170,20,10);
	
	
	
	
	
	$pdf->SetFont('Arial','B',5);
	$pdf->Cell(0,10,'MINISTERIO DE LA PROTECCION SOCIAL',0,0,'C');
	$pdf->Ln(4);
	$pdf->Cell(0,10,'SOLICITUD DE AUTORIZACION DE SERVICIOS DE SALUD',0,0,'C');
	
	
	
	
	
	$pdf->SetXY(60,24);
	$pdf->Cell(0,10, 'NUMERO DE SOLICITUD',0,0,'L');
	$pdf->Line(83, 30, 110, 30);
	
	$pdf->SetXY(114,24);
	$pdf->Cell(0,10, 'Fecha y Hora:',0,0,'L');
	$pdf->Line(130, 30, 146, 30);
	
	/*$pdf->SetXY(100,24);
	$pdf->Cell(0,10, 'Fecha:',0,0,'L');
	$pdf->Line(108, 30, 123, 30);*/
	
	/*$pdf->SetXY(125,24);
	$pdf->Cell(0,10, 'Hora:',0,0,'L');
	$pdf->Line(132, 30, 147, 30);*/
	
	$pdf->SetXY(85,24);
	$pdf->Cell(0,10, $anexo_3->name,0,0,'L');
	
	$pdf->SetXY(130,24);
	$pdf->Cell(0,10, $anexo_3->date_entered,0,0,'L');
	
	/*$dt = new DateTime($anexo_3->date_entered);
	$fecha = $dt->format('Y-m-d');
	$pdf->SetXY(110,24);
	$pdf->Cell(0,10, $fecha,0,0,'L');
	
	$ht = new DateTime($anexo_3->date_entered);
	$hora = $ht->format('h:i');
	$pdf->SetXY(130,24);
	$pdf->Cell(0,10, $hora,0,0,'L');*/
	
	
	
	
	
	$pdf->SetXY(20,28);
	$pdf->Cell(0,10, 'INFORMACION DEL PRESTADOR (Solicitante)',0,0,'L');
	
	
	
	
	
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
	
	
	
	
	
	$pdf->SetXY(20,51);
	$pdf->Cell(0,10, 'ENTIDAD A LA QUE SE LE SOLICITA (PAGADOR)',0,0,'L');
	$pdf->Line(65, 57, 148, 57);
	
	$pdf->SetXY(150,51);
	$pdf->Cell(0,10, 'CODIGO:',0,0,'L');
	$pdf->Line(160, 57, 190, 57);
	
	$pdf->SetXY(70,51);
	$pdf->Cell(0,10, utf8_decode($eps->name),0,0,'L');
	
	$pdf->SetXY(165,51);
	$pdf->Cell(0,10, $eps->odigoeps,0,0,'L');
	
	
	
	
	
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

	$pdf->SetXY(20,73);
	$pdf->Line(82, 79, 87, 79);
	
	$pdf->SetXY(87 ,73);
	$pdf->Cell(0,10, 'Permiso especial de Permanencia',0,0,'L');
	
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

	$pdf->SetXY(20,77);
	$pdf->Line(82, 83, 87, 83);
	
	$pdf->SetXY(87 ,77);
	$pdf->Cell(0,10, utf8_decode('Salvo conducto'),0,0,'L');
	
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

	$pdf->SetXY(20,81);
	$pdf->Line(82, 87, 87, 87);
	
	$pdf->SetXY(87 ,81);
	$pdf->Cell(0,10, utf8_decode('Carnet Diplomático'),0,0,'L');
	
	
	
	
	
	
	$pdf->SetXY(20,85);
	$pdf->Line(21, 91, 26, 91);
	
	$pdf->SetXY(26 ,85);
	$pdf->Cell(0,10, utf8_decode('Cédula de extranjeria'),0,0,'L');

	$pdf->SetXY(20,81);
	$pdf->Line(50, 91, 55, 91);
	
	$pdf->SetXY(55 ,85);
	$pdf->Cell(0,10, utf8_decode('Certificado de nacido vivo'),0,0,'L');

	$pdf->SetXY(20,81);
	$pdf->Line(82, 91, 87, 91);
	
	$pdf->SetXY(87 ,85);
	$pdf->Cell(0,10, utf8_decode('Número único de identificación personal'),0,0,'L');

	
	
	$pdf->SetXY(130,85);
	$pdf->Cell(0,10, 'Fecha de Nacimiento',0,0,'L');
	$pdf->Line(150, 91, 165, 91);
	
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
	
	if($paciente->tipo_documento_c == 'P.E.P')
	{
		$pdf->SetXY(83,73);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($paciente->tipo_documento_c == 'pasaporte')
	{
		$pdf->SetXY(51,73);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipo_documento_c == 'S.C')
	{
		$pdf->SetXY(83,77);
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

	if($paciente->tipo_documento_c == 'C.D')
	{
		$pdf->SetXY(83,81);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($paciente->tipo_documento_c == 'C.N')
	{
		$pdf->SetXY(51,85);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($paciente->tipo_documento_c == 'N.U.I.P')
	{
		$pdf->SetXY(83,85);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	$pdf->SetXY(145,73);
	$pdf->Cell(0,10, $paciente->name,0,0,'L');
	
	$pdf->SetXY(151,85);
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
	$pdf->Cell(0,10, utf8_decode('Teléfono celular'),0,0,'L');
	$pdf->Line(36, 103, 81, 103);
	
	$pdf->SetXY(82,97);
	$pdf->Cell(0,10,  utf8_decode('Correo electrónico'),0,0,'L');
	$pdf->Line(100, 103, 190, 103);
	
	$pdf->SetXY(40,97);
	$pdf->Cell(0,10, $paciente->celular_c,0,0,'L');
	
	if(empty($paciente->email1)){		
		$pdf->SetXY(105,97);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(105,97);
		$pdf->Cell(0,10, utf8_decode($paciente->email1),0,0,'L');
	}
	
	
	
	
	
	$pdf->SetXY(20,101);
	$pdf->Cell(0,10, 'Cobertura en  Salud',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,105);
	$pdf->Line(21, 111, 26, 111);
	
	$pdf->SetXY(26 ,105);
	$pdf->Cell(0,10, 'Regimen Contributivo',0,0,'L');
	
	$pdf->SetXY(20,105);
	$pdf->Line(60, 111, 65, 111);
	
	$pdf->SetXY(65 ,105);
	$pdf->Cell(0,10, 'Regimen Subsidiado - parcial',0,0,'L');
	
	$pdf->SetXY(20,105);
	$pdf->Line(111, 111, 116, 111);
	
	$pdf->SetXY(116 ,105);
	$pdf->Cell(0,10, utf8_decode('Población Pobre no asegurada sin SISBEN'),0,0,'L');
	
	$pdf->SetXY(20,105);
	$pdf->Line(160, 111, 165, 111);
	
	$pdf->SetXY(165 ,105);
	$pdf->Cell(0,10, 'Plan adicional de salud',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,109);
	$pdf->Line(21, 115, 26, 115);
	
	$pdf->SetXY(26 ,109);
	$pdf->Cell(0,10, 'Regimen Subsidiado - total',0,0,'L');
	
	$pdf->SetXY(20,109);
	$pdf->Line(60, 115, 65, 115);
	
	$pdf->SetXY(65 ,109);
	$pdf->Cell(0,10, utf8_decode('Población pobre No asegurada con SISBEN'),0,0,'L');
	
	$pdf->SetXY(20,109);
	$pdf->Line(111, 115, 116, 115);
	
	$pdf->SetXY(116 ,109);
	$pdf->Cell(0,10, 'Desplazado',0,0,'L');
	
	$pdf->SetXY(20,109);
	$pdf->Line(160, 115, 165, 115);
	
	$pdf->SetXY(165 ,109);
	$pdf->Cell(0,10, 'Otro',0,0,'L');
	
	//TIPO COBERTURA
	if($paciente->tipocobertura_c == 'regimen_contributivo')
	{
		$pdf->SetXY(22,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'regimen_subsidiado_total')
	{
		$pdf->SetXY(22,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'regimen_subsidiado_parcial')
	{
		$pdf->SetXY(61,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'no_asegurada_con_sisben')
	{
		$pdf->SetXY(61,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'no_asegurada_sin_sisben')
	{
		$pdf->SetXY(112,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'desplazado')
	{
		$pdf->SetXY(112,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'plan_adicional_salud')
	{
		$pdf->SetXY(161,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	
	if($paciente->tipocobertura_c == 'otro')
	{
		$pdf->SetXY(161,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	//FIN 
	
	
	
	
	
	$pdf->SetXY(10,115);
	$pdf->Cell(0,10, 'INFORMACION DE LA ATENCION Y SERVICIOS SOLICITADOS',0,0,'C');
	
	
	
	
	
	
	$pdf->SetXY(20,119);
	$pdf->Cell(0,10, utf8_decode('Origen de atención'),0,0,'L');
	
	$pdf->SetXY(110,119);
	$pdf->Cell(0,10, 'Tipo de servicios solicitados',0,0,'L');
	
	$pdf->SetXY(159,119);
	$pdf->Cell(0,10, utf8_decode('Prioridad de la atención'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,123);
	$pdf->Line(21, 129, 26, 129);
	
	$pdf->SetXY(26 ,123);
	$pdf->Cell(0,10, 'Enfermedad General',0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(50, 129, 55, 129);
	
	$pdf->SetXY(55 ,123);
	$pdf->Cell(0,10, 'Accidente de trabajo',0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(80, 129, 85, 129);
	
	$pdf->SetXY(85 ,123);
	$pdf->Cell(0,10, utf8_decode('Evento Catastrófico'),0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(111, 129, 116, 129);
	
	$pdf->SetXY(116 ,123);
	$pdf->Cell(0,10, utf8_decode('Posterior a la atención inicial de urgencias'),0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(160, 129, 165, 129);
	
	$pdf->SetXY(165 ,123);
	$pdf->Cell(0,10, 'Prioritaria',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,127);
	$pdf->Line(21, 133, 26, 133);
	
	$pdf->SetXY(26 ,127);
	$pdf->Cell(0,10, 'Enfermedad Profesional',0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(50, 133, 55, 133);
	
	$pdf->SetXY(55 ,127);
	$pdf->Cell(0,10, utf8_decode('Accidente de tránsito'),0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(111, 133, 116, 133);
	
	$pdf->SetXY(116 ,127);
	$pdf->Cell(0,10, 'Servicios electivos',0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(160, 133, 165, 133);
	
	$pdf->SetXY(165 ,127);
	$pdf->Cell(0,10, 'No prioritaria',0,0,'L');
	
	//ORIGEN DE ATENCION, TIPOS DE SERVICIOS SOLCITADOS, PRIORIDAD DE LA ATENCION	
	if($anexo_3->origenatencion == 'enfermedad_general')
	{
		$pdf->SetXY(22,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'enfermedad_profesional')
	{
		$pdf->SetXY(22,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'accidente_trabajo')
	{
		$pdf->SetXY(51,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'accidente_transito')
	{
		$pdf->SetXY(51,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'evento_catastrofico')
	{
		$pdf->SetXY(81,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->prioridadatencion2 == 'prioritaria')
	{
		$pdf->SetXY(161,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->prioridadatencion2 == 'no_prioritaria')
	{
		$pdf->SetXY(161,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	
	if($anexo_3->tiposerviciosolicitado == '1')
	{
		$pdf->SetXY(112,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($anexo_3->tiposerviciosolicitado == '2')
	{
		$pdf->SetXY(112,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	//FIN 
	
	
	
	
	
	$pdf->SetXY(20,131);
	$pdf->Cell(0,10, utf8_decode('Ubicación del Paciente al momento de la solicitud de autorización'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,135);
	$pdf->Line(21, 141, 26, 141);
	
	$pdf->SetXY(26 ,135);
	$pdf->Cell(0,10, 'Consulta Externa',0,0,'L');
	
	$pdf->SetXY(20,135);
	$pdf->Line(43, 141, 48, 141);
	
	$pdf->SetXY(48 ,135);
	$pdf->Cell(0,10, utf8_decode('Hospitalización'),0,0,'L');
	
	$pdf->SetXY(20,135);
	$pdf->Line(64, 141, 69, 141);
	
	$pdf->SetXY(69 ,135);
	$pdf->Cell(0,10, 'Urgencias',0,0,'L');
	
	$pdf->SetXY(86 ,135);
	$pdf->Cell(0,10, 'Servicio',0,0,'L');
	$pdf->Line(96, 141, 150, 141);
	
	$pdf->SetXY(160 ,135);
	$pdf->Cell(0,10, 'Cama',0,0,'L');
	$pdf->Line(168, 141, 190, 141);
	
	//UBICACION, SERVICIO, CAMA 	
	if($anexo_3->ubicacion == 'consulta_externa')
	{
		$pdf->SetXY(22,135);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->ubicacion == 'urgencias')
	{
		$pdf->SetXY(65,135);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($anexo_3->ubicacion == 'hospitalizacion')
	{
		$pdf->SetXY(44,135);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	$pdf->SetXY(100,135);
	$pdf->Cell(0,10, utf8_decode($anexo_3->servicio),0,0,'L');
		
	$pdf->SetXY(170,135);
	$pdf->Cell(0,10, utf8_decode($anexo_3->cama),0,0,'L');
	//FIN 
	
	
	
	
	
	
	$pdf->SetXY(20 ,139);
	$pdf->Cell(0,10, utf8_decode('Manejo Integral según Guía de:'),0,0,'L');
	$pdf->Line(49, 145, 190, 145);
	
	//$pdf->SetXY(49,139);
	//$pdf->Cell(0,10, $anexo_3->guia,0,0,'L');
	
	
	
	
	$pdf->SetXY(25,144);
	$pdf->Cell(0,10, utf8_decode('Código CUPS'),0,0,'L');
	
	$pdf->SetXY(55,144);
	$pdf->Cell(0,10, 'Cantidad',0,0,'L');
	
	$pdf->SetXY(75,144);
	$pdf->Cell(0,10, utf8_decode('Descripción'),0,0,'L');
	
	
	$m = 144;
	$y = 0;
	
	for($x = 154; $x <= 230; $x = $x + 4)
	{
		$m = $m + 4;
		$y = $y + 1;
	
		$pdf->SetXY(21,$m);
		$pdf->Cell(0,10, $y,0,0,'L');
	
		$pdf->SetXY(20,147);
		$pdf->Line(25, $x, 50, $x);
		
		$pdf->SetXY(20,147);
		$pdf->Line(56, $x, 67, $x);
		
		$pdf->SetXY(20,147);
		$pdf->Line(75, $x, 190, $x);
	}
	
	$s = 144;
	
	$result = count($cups);
	
	$ii = 0;
	
	while($ii < 20)
	{
		/*$detalles =  BeanFactory::getBean("GBICU_CUPS", $cups[$ii]->gbicu_cups_id_c);	
		
		$s = $s + 4;
	
		$pdf->SetXY(33,$s);
		$pdf->Cell(0,10, $detalles->name,0,'L');
		
		$pdf->SetXY(58,$s);
		$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidadcups),0,0,'L');
		
		$pdf->SetXY(75,$s);
		$pdf->Cell(0,10, utf8_decode($detalles->description),0,0,'L');
		
		$ii++;*/
		
		if(!empty($cups[$ii]->gbicu_cups_id_c))
		{
			$detalles =  BeanFactory::getBean("GBICU_CUPS", $cups[$ii]->gbicu_cups_id_c);	
		
			$s = $s + 4;
		
			$pdf->SetXY(33,$s);
			$pdf->Cell(0,10, $detalles->name,0,'L');
			
			$pdf->SetXY(58,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidadcups),0,0,'L');
			
			$pdf->SetXY(75,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->gbi_detalle_c),0,0,'L');
			
			$ii++;
		}	
		else	
		{
			$s = $s + 4;
		
			$pdf->SetXY(33,$s);
			$pdf->Cell(0,10, $cups[$ii]->cups_interno_c,0,'L');
			
			$pdf->SetXY(58,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidadcups),0,0,'L');
			
			$pdf->SetXY(75,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->gbi_detalle_c),0,0,'L');
			
			$ii++;
		}
	}
	
	
	
	
	
	$pdf->SetXY(20,230);
	$pdf->Cell(0,10, utf8_decode('Justificación Clínica:'),0,0,'L');
	
	$pdf->SetXY(20,230);
	$pdf->Line(40, 236, 190, 236);
	
	$pdf->SetXY(20,230);
	$pdf->Line(21, 240, 190, 240);
	
	$pdf->SetXY(20,230);
	$pdf->Line(21, 244, 190, 244);
	
	$pdf->SetXY(20,230);
	$pdf->Line(21, 248, 190, 248);
	
	$pdf->SetXY(40,233);
	$pdf->Multicell(0,4,utf8_decode($anexo_3->justificacionclinica),0,'J');
	
	//$pdf->Cell(0,10, utf8_decode(),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,246);
	$pdf->Cell(0,10, utf8_decode('Impresión Diagnóstica'),0,0,'L');
	
	$pdf->SetXY(55,246);
	$pdf->Cell(0,10, 'Codigo CIE10',0,0,'L');
	
	$pdf->SetXY(75,246);
	$pdf->Cell(0,10, utf8_decode('Descripción'),0,0,'L');
	
	
	
	
	$pdf->SetXY(20,250);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico principal'),0,0,'L');
	
	$pdf->SetXY(20,250);
	$pdf->Line(56, 256, 67, 256);
	
	$pdf->SetXY(20,250);
	$pdf->Line(75, 256, 190, 256);
	
	$pdf->SetXY(58,250);
	$pdf->Cell(0,10, $cie_10_1->name,0,0,'L');
	
	$pdf->SetXY(75,250);
	$pdf->Cell(0,10, utf8_decode($cie_10_1->description),0,0,'L');
	
		
	
	$pdf->SetXY(20,254);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico relacionado 1'),0,0,'L');
	
	$pdf->SetXY(20,254);
	$pdf->Line(56, 260, 67, 260);
	
	$pdf->SetXY(20,254);
	$pdf->Line(75, 260, 190, 260);
	
	$pdf->SetXY(58,254);
	$pdf->Cell(0,10, $cie_10_2->name,0,0,'L');
	
	$pdf->SetXY(75,254);
	$pdf->Cell(0,10, utf8_decode($cie_10_2->description),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,258);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico relacionado 2'),0,0,'L');
	
	$pdf->SetXY(20,258);
	$pdf->Line(56, 264, 67, 264);
	
	$pdf->SetXY(20,258);
	$pdf->Line(75, 264, 190, 264);
	
	$pdf->SetXY(58,258);
	$pdf->Cell(0,10, $cie_10_3->name,0,0,'L');
	
	$pdf->SetXY(75,258);
	$pdf->Cell(0,10, utf8_decode($cie_10_3->description),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(10,262);
	$pdf->Cell(0,10, 'INFORMACION DE LA PERSONA QUE SOLICITA',0,0,'C');
	
	
	
	
	
	$pdf->SetXY(20,266);
	$pdf->Cell(0,10, 'Nombre de quien solicita',0,0,'L');
	$pdf->Line(42, 272, 119, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Cell(0,10, utf8_decode('Teléfono'),0,0,'L');
	$pdf->Line(131, 272, 146, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(147, 272, 174, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(175, 272, 190, 272);
	
	$pdf->SetXY(45,266);
	$pdf->Cell(0,10, utf8_decode($especialista->nombres)." ".utf8_decode($especialista->apellidos)."   -   Reg. Medico  ".$especialista->name,0,0,'L');
	
	$pdf->SetXY(152,266);
	$pdf->Cell(0,10, $especialista->telppal,0,0,'L');
	
	$pdf->SetXY(178,266);
	$pdf->Cell(0,10, $especialista->extension,0,0,'L');
	
	
	
	
	
	$pdf->SetXY(133,270);
	$pdf->Cell(0,10, 'indicativo',0,0,'L');
	
	$pdf->SetXY(157,270);
	$pdf->Cell(0,10, utf8_decode('número'),0,0,'L');
	
	$pdf->SetXY(177,270);
	$pdf->Cell(0,10, utf8_decode('extensión'),0,0,'L');
	
			
	$pdf->SetXY(20,274);
	$pdf->Cell(0,10, 'Cargo o actividad:',0,0,'L');
	$pdf->Line(38, 280, 119, 280);
	
	$pdf->SetXY(120,274);
	$pdf->Cell(0,10, utf8_decode('Teléfono celular:'),0,0,'L');
	$pdf->Line(137, 280, 190, 280);
	
	$pdf->SetXY(41,274);
	$pdf->Cell(0,10, utf8_decode($app_list_strings["cargactirela_c_anexo3"][$especialista->cargo]),0,0,'L');
	
	$pdf->SetXY(140,274);
	$pdf->Cell(0,10, $especialista->telcel,0,0,'L');
	
	
	
	
	
	if($result > 20)
	{
	$pdf->AddPage();	
	
	
	
	
	$pdf->Image('include/images/escudo_colombia.jpg',35,20,10);
	
	
	
	
	
	$pdf->SetFont('Arial','B',5);
	$pdf->Cell(0,10,'MINISTERIO DE LA PROTECCION SOCIAL',0,0,'C');
	$pdf->Ln(4);
	$pdf->Cell(0,10,'SOLICITUD DE AUTORIZACION DE SERVICIOS DE SALUD',0,0,'C');
	
	
	
	
	
	$pdf->SetXY(60,24);
	$pdf->Cell(0,10, 'NUMERO DE SOLICITUD',0,0,'L');
	$pdf->Line(83, 30, 98, 30);
	
	$pdf->SetXY(100,24);
	$pdf->Cell(0,10, 'Fecha y Hora:',0,0,'L');
	$pdf->Line(114, 30, 144, 30);
	
	/*$pdf->SetXY(100,24);
	$pdf->Cell(0,10, 'Fecha:',0,0,'L');
	$pdf->Line(108, 30, 123, 30);*/
	
	/*$pdf->SetXY(125,24);
	$pdf->Cell(0,10, 'Hora:',0,0,'L');
	$pdf->Line(132, 30, 147, 30);*/
	
	$pdf->SetXY(85,24);
	$pdf->Cell(0,10, $anexo_3->name,0,0,'L');
	
	$pdf->SetXY(120,24);
	$pdf->Cell(0,10, $anexo_3->date_entered,0,0,'L');
	
	/*$dt = new DateTime($anexo_3->date_entered);
	$fecha = $dt->format('Y-m-d');
	$pdf->SetXY(110,24);
	$pdf->Cell(0,10, $fecha,0,0,'L');
	
	$ht = new DateTime($anexo_3->date_entered);
	$hora = $ht->format('h:i');
	$pdf->SetXY(130,24);
	$pdf->Cell(0,10, $hora,0,0,'L');*/
	
	
	
	
	
	$pdf->SetXY(20,28);
	$pdf->Cell(0,10, 'INFORMACION DEL PRESTADOR (Solicitante)',0,0,'L');
	
	
	
	
	
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
	
	
	
	
	
	$pdf->SetXY(20,51);
	$pdf->Cell(0,10, 'ENTIDAD A LA QUE SE LE SOLICITA (PAGADOR)',0,0,'L');
	$pdf->Line(65, 57, 148, 57);
	
	$pdf->SetXY(150,51);
	$pdf->Cell(0,10, 'CODIGO:',0,0,'L');
	$pdf->Line(160, 57, 190, 57);
	
	$pdf->SetXY(70,51);
	$pdf->Cell(0,10, utf8_decode($eps->name),0,0,'L');
	
	$pdf->SetXY(165,51);
	$pdf->Cell(0,10, $eps->odigoeps,0,0,'L');
	
	
	
	
	
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
	$pdf->Cell(0,10, utf8_decode('Teléfono celular'),0,0,'L');
	$pdf->Line(36, 103, 81, 103);
	
	$pdf->SetXY(82,97);
	$pdf->Cell(0,10,  utf8_decode('Correo electrónico'),0,0,'L');
	$pdf->Line(100, 103, 190, 103);
	
	$pdf->SetXY(40,97);
	$pdf->Cell(0,10, $paciente->celular_c,0,0,'L');
	
	if(empty($paciente->email1)){		
		$pdf->SetXY(105,97);
		$pdf->Cell(0,10, 'No tiene',0,0,'L');
	}
	else{
		$pdf->SetXY(105,97);
		$pdf->Cell(0,10, utf8_decode($paciente->email1),0,0,'L');
	}
	
	
	
	
	
	$pdf->SetXY(20,101);
	$pdf->Cell(0,10, 'Cobertura en  Salud',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,105);
	$pdf->Line(21, 111, 26, 111);
	
	$pdf->SetXY(26 ,105);
	$pdf->Cell(0,10, 'Regimen Contributivo',0,0,'L');
	
	$pdf->SetXY(20,105);
	$pdf->Line(60, 111, 65, 111);
	
	$pdf->SetXY(65 ,105);
	$pdf->Cell(0,10, 'Regimen Subsidiado - parcial',0,0,'L');
	
	$pdf->SetXY(20,105);
	$pdf->Line(111, 111, 116, 111);
	
	$pdf->SetXY(116 ,105);
	$pdf->Cell(0,10, utf8_decode('Población Pobre no asegurada sin SISBEN'),0,0,'L');
	
	$pdf->SetXY(20,105);
	$pdf->Line(160, 111, 165, 111);
	
	$pdf->SetXY(165 ,105);
	$pdf->Cell(0,10, 'Plan adicional de salud',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,109);
	$pdf->Line(21, 115, 26, 115);
	
	$pdf->SetXY(26 ,109);
	$pdf->Cell(0,10, 'Regimen Subsidiado - total',0,0,'L');
	
	$pdf->SetXY(20,109);
	$pdf->Line(60, 115, 65, 115);
	
	$pdf->SetXY(65 ,109);
	$pdf->Cell(0,10, utf8_decode('Población pobre No asegurada con SISBEN'),0,0,'L');
	
	$pdf->SetXY(20,109);
	$pdf->Line(111, 115, 116, 115);
	
	$pdf->SetXY(116 ,109);
	$pdf->Cell(0,10, 'Desplazado',0,0,'L');
	
	$pdf->SetXY(20,109);
	$pdf->Line(160, 115, 165, 115);
	
	$pdf->SetXY(165 ,109);
	$pdf->Cell(0,10, 'Otro',0,0,'L');
	
	//TIPO COBERTURA
	if($paciente->tipocobertura_c == 'regimen_contributivo')
	{
		$pdf->SetXY(22,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'regimen_subsidiado_total')
	{
		$pdf->SetXY(22,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'regimen_subsidiado_parcial')
	{
		$pdf->SetXY(61,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'no_asegurada_con_sisben')
	{
		$pdf->SetXY(61,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'no_asegurada_sin_sisben')
	{
		$pdf->SetXY(112,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'desplazado')
	{
		$pdf->SetXY(112,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($paciente->tipocobertura_c == 'plan_adicional_salud')
	{
		$pdf->SetXY(161,105);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	
	if($paciente->tipocobertura_c == 'otro')
	{
		$pdf->SetXY(161,109);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	//FIN 
	
	
	
	
	
	$pdf->SetXY(10,115);
	$pdf->Cell(0,10, 'INFORMACION DE LA ATENCION Y SERVICIOS SOLICITADOS',0,0,'C');
	
	
	
	
	
	
	$pdf->SetXY(20,119);
	$pdf->Cell(0,10, utf8_decode('Origen de atención'),0,0,'L');
	
	$pdf->SetXY(110,119);
	$pdf->Cell(0,10, 'Tipo de servicios solicitados',0,0,'L');
	
	$pdf->SetXY(159,119);
	$pdf->Cell(0,10, utf8_decode('Prioridad de la atención'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,123);
	$pdf->Line(21, 129, 26, 129);
	
	$pdf->SetXY(26 ,123);
	$pdf->Cell(0,10, 'Enfermedad General',0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(50, 129, 55, 129);
	
	$pdf->SetXY(55 ,123);
	$pdf->Cell(0,10, 'Accidente de trabajo',0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(80, 129, 85, 129);
	
	$pdf->SetXY(85 ,123);
	$pdf->Cell(0,10, utf8_decode('Evento Catastrófico'),0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(111, 129, 116, 129);
	
	$pdf->SetXY(116 ,123);
	$pdf->Cell(0,10, utf8_decode('Posterior a la atención inicial de urgencias'),0,0,'L');
	
	$pdf->SetXY(20,123);
	$pdf->Line(160, 129, 165, 129);
	
	$pdf->SetXY(165 ,123);
	$pdf->Cell(0,10, 'Prioritaria',0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,127);
	$pdf->Line(21, 133, 26, 133);
	
	$pdf->SetXY(26 ,127);
	$pdf->Cell(0,10, 'Enfermedad Profesional',0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(50, 133, 55, 133);
	
	$pdf->SetXY(55 ,127);
	$pdf->Cell(0,10, utf8_decode('Accidente de tránsito'),0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(111, 133, 116, 133);
	
	$pdf->SetXY(116 ,127);
	$pdf->Cell(0,10, 'Servicios electivos',0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(160, 133, 165, 133);
	
	$pdf->SetXY(165 ,127);
	$pdf->Cell(0,10, 'No prioritaria',0,0,'L');
	
	//ORIGEN DE ATENCION, TIPOS DE SERVICIOS SOLCITADOS, PRIORIDAD DE LA ATENCION	
	if($anexo_3->origenatencion == 'enfermedad_general')
	{
		$pdf->SetXY(22,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'enfermedad_profesional')
	{
		$pdf->SetXY(22,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'accidente_trabajo')
	{
		$pdf->SetXY(51,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'accidente_transito')
	{
		$pdf->SetXY(51,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->origenatencion == 'evento_catastrofico')
	{
		$pdf->SetXY(81,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->prioridadatencion2 == 'prioritaria')
	{
		$pdf->SetXY(161,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->prioridadatencion2 == 'no_prioritaria')
	{
		$pdf->SetXY(161,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	
	if($anexo_3->tiposerviciosolicitado == '1')
	{
		$pdf->SetXY(112,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($anexo_3->tiposerviciosolicitado == '2')
	{
		$pdf->SetXY(112,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	//FIN 
	
	
	
	
	
	$pdf->SetXY(20,131);
	$pdf->Cell(0,10, utf8_decode('Ubicación del Paciente al momento de la solicitud de autorización'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,135);
	$pdf->Line(21, 141, 26, 141);
	
	$pdf->SetXY(26 ,135);
	$pdf->Cell(0,10, 'Consulta Externa',0,0,'L');
	
	$pdf->SetXY(20,135);
	$pdf->Line(43, 141, 48, 141);
	
	$pdf->SetXY(48 ,135);
	$pdf->Cell(0,10, utf8_decode('Hospitalización'),0,0,'L');
	
	$pdf->SetXY(20,135);
	$pdf->Line(64, 141, 69, 141);
	
	$pdf->SetXY(69 ,135);
	$pdf->Cell(0,10, 'Urgencias',0,0,'L');
	
	$pdf->SetXY(86 ,135);
	$pdf->Cell(0,10, 'Servicio',0,0,'L');
	$pdf->Line(96, 141, 150, 141);
	
	$pdf->SetXY(160 ,135);
	$pdf->Cell(0,10, 'Cama',0,0,'L');
	$pdf->Line(168, 141, 190, 141);
	
	//UBICACION, SERVICIO, CAMA 	
	if($anexo_3->ubicacion == 'consulta_externa')
	{
		$pdf->SetXY(22,135);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->ubicacion == 'urgencias')
	{
		$pdf->SetXY(65,135);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($anexo_3->ubicacion == 'hospitalizacion')
	{
		$pdf->SetXY(44,135);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	$pdf->SetXY(100,135);
	$pdf->Cell(0,10, utf8_decode($anexo_3->servicio),0,0,'L');
		
	$pdf->SetXY(170,135);
	$pdf->Cell(0,10, utf8_decode($anexo_3->cama),0,0,'L');
	//FIN 
	
	
	
	
	
	
	$pdf->SetXY(20 ,139);
	$pdf->Cell(0,10, utf8_decode('Manejo Integral según Guía de:'),0,0,'L');
	$pdf->Line(49, 145, 190, 145);
	
	//$pdf->SetXY(49,139);
	//$pdf->Cell(0,10, $anexo_3->guia,0,0,'L');
	
	
	
	
	$pdf->SetXY(25,144);
	$pdf->Cell(0,10, utf8_decode('Código CUPS'),0,0,'L');
	
	$pdf->SetXY(55,144);
	$pdf->Cell(0,10, 'Cantidad',0,0,'L');
	
	$pdf->SetXY(75,144);
	$pdf->Cell(0,10, utf8_decode('Descripción'),0,0,'L');
	
	
	$m = 144;
	$y = 20;
	
	for($x = 154; $x <= 230; $x = $x + 4)
	{
		$m = $m + 4;
		$y = $y + 1;
	
		$pdf->SetXY(21,$m);
		$pdf->Cell(0,10, $y,0,0,'L');
	
		$pdf->SetXY(20,147);
		$pdf->Line(25, $x, 50, $x);
		
		$pdf->SetXY(20,147);
		$pdf->Line(56, $x, 67, $x);
		
		$pdf->SetXY(20,147);
		$pdf->Line(75, $x, 190, $x);
	}
	
	$s = 144;
	
	$result = count($cups);
	
	$ii = 20;
	
	while($ii < 40)
	{
		/*$detalles =  BeanFactory::getBean("GBICU_CUPS", $cups[$ii]->gbicu_cups_id_c);	
		
		$s = $s + 4;
	
		$pdf->SetXY(33,$s);
		$pdf->Cell(0,10, $detalles->name,0,'L');
		
		$pdf->SetXY(58,$s);
		$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidadcups),0,0,'L');
		
		$pdf->SetXY(75,$s);
		$pdf->Cell(0,10, utf8_decode($detalles->description),0,0,'L');
		
		$ii++;*/
		
		if(!empty($cups[$ii]->gbicu_cups_id_c))
		{
			$detalles =  BeanFactory::getBean("GBICU_CUPS", $cups[$ii]->gbicu_cups_id_c);	
		
			$s = $s + 4;
		
			$pdf->SetXY(33,$s);
			$pdf->Cell(0,10, $detalles->name,0,'L');
			
			$pdf->SetXY(58,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidadcups),0,0,'L');
			
			$pdf->SetXY(75,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->gbi_detalle_c),0,0,'L');
			
			$ii++;
		}	
		else	
		{
			$s = $s + 4;
		
			$pdf->SetXY(33,$s);
			$pdf->Cell(0,10, $cups[$ii]->cups_interno_c,0,'L');
			
			$pdf->SetXY(58,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidadcups),0,0,'L');
			
			$pdf->SetXY(75,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->gbi_detalle_c),0,0,'L');
			
			$ii++;
		}
	}
	
	
	
	
	
	$pdf->SetXY(20,230);
	$pdf->Cell(0,10, utf8_decode('Justificación Clínica:'),0,0,'L');
	
	$pdf->SetXY(20,230);
	$pdf->Line(40, 236, 190, 236);
	
	$pdf->SetXY(20,230);
	$pdf->Line(21, 240, 190, 240);
	
	$pdf->SetXY(20,230);
	$pdf->Line(21, 244, 190, 244);
	
	$pdf->SetXY(20,230);
	$pdf->Line(21, 248, 190, 248);
	
	$pdf->SetXY(40,233);
	$pdf->Multicell(0,4,utf8_decode($anexo_3->justificacionclinica),0,'J');
	
	//$pdf->Cell(0,10, utf8_decode(),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,246);
	$pdf->Cell(0,10, utf8_decode('Impresión Diagnóstica'),0,0,'L');
	
	$pdf->SetXY(55,246);
	$pdf->Cell(0,10, 'Codigo CIE10',0,0,'L');
	
	$pdf->SetXY(75,246);
	$pdf->Cell(0,10, utf8_decode('Descripción'),0,0,'L');
	
	
	
	
	$pdf->SetXY(20,250);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico principal'),0,0,'L');
	
	$pdf->SetXY(20,250);
	$pdf->Line(56, 256, 67, 256);
	
	$pdf->SetXY(20,250);
	$pdf->Line(75, 256, 190, 256);
	
	$pdf->SetXY(58,250);
	$pdf->Cell(0,10, $cie_10_1->name,0,0,'L');
	
	$pdf->SetXY(75,250);
	$pdf->Cell(0,10, utf8_decode($cie_10_1->description),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,254);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico relacionado 1'),0,0,'L');
	
	$pdf->SetXY(20,254);
	$pdf->Line(56, 260, 67, 260);
	
	$pdf->SetXY(20,254);
	$pdf->Line(75, 260, 190, 260);
	
	$pdf->SetXY(58,254);
	$pdf->Cell(0,10, $cie_10_2->name,0,0,'L');
	
	$pdf->SetXY(75,254);
	$pdf->Cell(0,10, utf8_decode($cie_10_2->description),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,258);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico relacionado 2'),0,0,'L');
	
	$pdf->SetXY(20,258);
	$pdf->Line(56, 264, 67, 264);
	
	$pdf->SetXY(20,258);
	$pdf->Line(75, 264, 190, 264);
	
	$pdf->SetXY(58,258);
	$pdf->Cell(0,10, $cie_10_3->name,0,0,'L');
	
	$pdf->SetXY(75,258);
	$pdf->Cell(0,10, utf8_decode($cie_10_3->description),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(10,262);
	$pdf->Cell(0,10, 'INFORMACION DE LA PERSONA QUE SOLICITA',0,0,'C');
	
	
	
	
	
	$pdf->SetXY(20,266);
	$pdf->Cell(0,10, 'Nombre de quien solicita',0,0,'L');
	$pdf->Line(42, 272, 119, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Cell(0,10, utf8_decode('Teléfono'),0,0,'L');
	$pdf->Line(131, 272, 146, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(147, 272, 174, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(175, 272, 190, 272);
	
	$pdf->SetXY(45,266);
	$pdf->Cell(0,10, utf8_decode($especialista->nombres)." ".utf8_decode($especialista->apellidos)."   -   Reg. Medico  ".$especialista->name,0,0,'L');
	
	$pdf->SetXY(152,266);
	$pdf->Cell(0,10, $especialista->telppal,0,0,'L');
	
	$pdf->SetXY(178,266);
	$pdf->Cell(0,10, $especialista->extension,0,0,'L');
	
	
	
	
	
	$pdf->SetXY(133,270);
	$pdf->Cell(0,10, 'indicativo',0,0,'L');
	
	$pdf->SetXY(157,270);
	$pdf->Cell(0,10, utf8_decode('número'),0,0,'L');
	
	$pdf->SetXY(177,270);
	$pdf->Cell(0,10, utf8_decode('extensión'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,274);
	$pdf->Cell(0,10, 'Cargo o actividad:',0,0,'L');
	$pdf->Line(38, 280, 119, 280);
	
	$pdf->SetXY(120,274);
	$pdf->Cell(0,10, utf8_decode('Teléfono celular:'),0,0,'L');
	$pdf->Line(137, 280, 190, 280);
	
	$pdf->SetXY(41,274);
	$pdf->Cell(0,10, utf8_decode($app_list_strings["cargactirela_c_anexo3"][$especialista->cargo]),0,0,'L');
	
	$pdf->SetXY(140,274);
	$pdf->Cell(0,10, $especialista->telcel,0,0,'L');
	}
	
	
	
	
	$pdf->Output("upload\PDF_Anexo3\A3-".$anexo_3->name.".pdf",'F');
	$pdf->Output("ANEXO TECNICO NO 3 - Numero de Solicitud ".$anexo_3->name.".pdf",'I');	
?>