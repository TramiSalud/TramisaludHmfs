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
			$this->Cell(0,10,utf8_decode('ANEXO TÉCNICO No. 2'),0,0,'C');
			$this->Ln(3);	
			
			$this->Cell(0,10,utf8_decode ('INFORME DE LA ATENCION INICIAL DE URGENCIAS'),0,0,'C');
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
	
	$anexo_2 =  BeanFactory::getBean("gbian_Anexo2", $this->bean->id);
	$ips =  BeanFactory::getBean("IPS_IPS", $this->bean->ips_ips_id_c);
	$departamento_ips =  BeanFactory::getBean("DEP_Departamentos", $ips->dep_departamentos_id_c);
	$municipio_ips =  BeanFactory::getBean("MUN_Municipio", $ips->mun_municipio_id_c);
	$eps =  BeanFactory::getBean("EPS_EPS", $this->bean->eps_eps_id_c);	
	$departamento_eps =  BeanFactory::getBean("DEP_Departamentos",$eps->dep_departamentos_id_c);
	$municipio_eps =  BeanFactory::getBean("MUN_Municipio",$eps->mun_municipio_id_c);
	
	$eps_rem =  BeanFactory::getBean("IPS_IPS", $this->bean->ips_ips_id1_c);	
	$departamento_eps_rem =  BeanFactory::getBean("DEP_Departamentos",$eps_rem->dep_departamentos_id_c);
	$municipio_eps_rem =  BeanFactory::getBean("MUN_Municipio",$eps_rem->mun_municipio_id_c);
	
	//$paciente =  BeanFactory::getBean("Accounts", $this->bean->account_id_c);
	
	$pacientes = $this->bean->get_linked_beans('gbian_anexo2_accounts', 'Accounts');
	
	if (!empty($pacientes)){
		$paciente = null;
		foreach ($pacientes as $item){
			$paciente = $item;
			break;		
		}       
	}	
	
	$especialista =  BeanFactory::getBean("ESP_Especialista", $this->bean->esp_especialista_id_c);
	
	$cie_10_p =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id3_c);
	$cie_10_1 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id_c);
	$cie_10_2 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id1_c);	
	$cie_10_3 =  BeanFactory::getBean("CIE_CIE10", $this->bean->cie_cie10_id2_c);
	
	$departamento_paci =  BeanFactory::getBean("DEP_Departamentos", $paciente->dep_departamentos_id_c);
	$municipio_paci =  BeanFactory::getBean("MUN_Municipio", $paciente->mun_municipio_id1_c);
	
	
	
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
	$pdf->Cell(0,10,utf8_decode('MINISTERIO DE LA PROTECCIÓN SOCIAL'),0,0,'C');
	
	
	
	$pdf->SetXY(20,28);
	$pdf->Cell(0,10,utf8_decode('INFORMACION DEL PRESTADOR'),0,0,'L');
	
	$pdf->SetXY(60,24);
	$pdf->Cell(0,10,utf8_decode('NÚMERO DE SOLICITUD'),0,0,'L');
	$pdf->Line(83, 30, 98, 30);
	
	$pdf->SetXY(100,24);
	$pdf->Cell(0,10, 'Fecha y Hora:',0,0,'L');
	$pdf->Line(114, 30, 144, 30);

	
	$pdf->SetXY(85,24);
	$pdf->Cell(0,10,$anexo_2->name,0,0,'L');
	
	$pdf->SetXY(120,24);
	$pdf->Cell(0,10, $anexo_2->date_entered,0,0,'L');	
	
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
	
	/*$pdf->SetXY(35,47);
	$pdf->Cell(0,10, 'indicativo',0,0,'L');
	*/
	$pdf->SetXY(46,47);
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
	$pdf->Cell(0,10, 'ENTIDAD A LA QUE SE LE INFORMA (PAGADOR)',0,0,'L');
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
	$pdf->Cell(0,10, utf8_decode('Número documento de identificación'),0,0,'L');
	
	
	
	
	
	$pdf->SetXY(20,81);
	$pdf->Line(21, 87, 26, 87);
	
	$pdf->SetXY(26 ,81);
	$pdf->Cell(0,10, utf8_decode('Cédula de ciudadanía'),0,0,'L');
	
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
	$pdf->Cell(0,10, utf8_decode('Cédula de extranjería'),0,0,'L');

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
	
	$pdf->SetXY(20,101);
	$pdf->Cell(0,10, 'Cobertura en  Salud',0,0,'L');
	
	
	$pdf->SetXY(20,105);
	$pdf->Line(21, 111, 26, 111);
	
	$pdf->SetXY(26 ,105);
	$pdf->Cell(0,10, 'Regimen Contributivo',0,0,'L');
	
	$pdf->SetXY(20,105);
	$pdf->Line(60, 111, 65, 111);
	
	$pdf->SetXY(65 ,105);
	$pdf->Cell(0,10, utf8_decode('Régimen Subsidiado - parcial'),0,0,'L');
	
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
	$pdf->Cell(0,10,utf8_decode('Régimen Subsidiado - total'),0,0,'L');
	
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
	$pdf->Cell(0,10,utf8_decode('INFORMACION DE LA ATENCION'),0,0,'C');
	

	$pdf->SetXY(20,119);
	$pdf->Cell(0,10, utf8_decode('Origen de la atención'),0,0,'L');

	
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
	
	
	
	$pdf->SetXY(116 ,123);
	$pdf->Cell(0,10, utf8_decode('Clasificación Triage'),0,0,'L');

	$pdf->SetXY(120 ,123);
	$pdf->Line(135, 129, 138, 129);
	$pdf->Line(135, 131.5, 138, 131.5);
	$pdf->Line(135, 134.5, 138, 134.5);
	

	
	$pdf->SetXY(138,122.5);
	$pdf->Cell(0,12, '1.Rojo',0,0,'L');
	if($anexo_2->clasificacion_c=='rojo')
	{
		$pdf->SetXY(135,122.5);
		$pdf->Cell(0,11, 'X',0,0,'L');
	}
	
	

	$pdf->SetXY(20,127);
	$pdf->Line(21, 133, 26, 133);
	
	$pdf->SetXY(26 ,127);
	$pdf->Cell(0,10, 'Enfermedad Profesional',0,0,'L');
	
	$pdf->SetXY(20,127);
	$pdf->Line(50, 133, 55, 133);
	
	$pdf->SetXY(55 ,127);
	$pdf->Cell(0,10, utf8_decode('Accidente de tránsito'),0,0,'L');
	

		
	$pdf->SetXY(138 ,127);
	$pdf->Cell(0,8, utf8_decode('2.Amarillo'),0,0,'L');
	if($anexo_2->clasificacion_c=='amarillo')
	{
		$pdf->SetXY(135,125);
		$pdf->Cell(0,11, 'X',0,0,'L');
	}
	
	
	

	//ORIGEN DE ATENCION, TIPOS DE SERVICIOS SOLCITADOS, PRIORIDAD DE LA ATENCION	
	if($anexo_2->origen_atencion == 'enfermedad_g')
	{
		$pdf->SetXY(22,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_2->origen_atencion == 'enfermedad_p')
	{
		$pdf->SetXY(22,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_2->origen_atencion == 'Accidente_trab')
	{
		$pdf->SetXY(51,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_2->origen_atencion == 'accidente_trans')
	{
		$pdf->SetXY(51,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_2->origen_atencion == 'Evento')
	{
		$pdf->SetXY(81,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_2->prioridadatencion2 == 'prioritaria')
	{
		$pdf->SetXY(161,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_2->prioridadatencion2 == 'no_prioritaria')
	{
		$pdf->SetXY(161,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}	
	
	if($anexo_2->tiposerviciosolicitado == 'posterior_urgencias')
	{
		$pdf->SetXY(112,123);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($anexo_2->tiposerviciosolicitado == 'servicios_electivos')
	{
		$pdf->SetXY(112,127);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	//FIN 
	
	
	
	
	
	$pdf->SetXY(20,130.7);
	$pdf->Cell(0,10, utf8_decode('Ingreso a Urgencias'),0,0,'L');
	
	$pdf->SetXY(195,95);
	$pdf->Line(40, 140.5, 60, 140.5);
	
	$pdf->SetXY(42,136);
	$pdf->Cell(0,6, $anexo_2->fecha_ingreso_c,0,0,'L');
	
	
	
	
	$pdf->SetXY(138 ,127);
	$pdf->Cell(0,13, utf8_decode('3.Verde'),0,0,'L');
	if($anexo_2->clasificacion_c=='verde')
	{
		$pdf->SetXY(135,128);
		$pdf->Cell(0,11, 'X',0,0,'L');
	}
	
	
	$pdf->SetXY(20,132);
	$pdf->Cell(0,15, utf8_decode('Fecha y Hora'),0,0,'L');
	
	
	$pdf->SetXY(85,132);
	$pdf->Cell(0,15, utf8_decode('Paciente viene Remitido'),0,0,'L');
	
	
	$pdf->SetXY(110,132);
	$pdf->Cell(0,15, utf8_decode('SI'),0,0,'L');
	
	$pdf->SetXY(95,105);
	$pdf->Line(114,140.5,119,140.5);
	
	if ($anexo_2->paciente_remitido_c=='SI')
	{
		$pdf->SetXY(115,131.5);
		$pdf->Cell(0,15, 'X',0,0,'L');
	}
	
	
	
	$pdf->SetXY(120,132);
	$pdf->Cell(0,15, utf8_decode('NO'),0,0,'L');
	
	
	
	$pdf->SetXY(95,105);
	$pdf->Line(125,140.5,131,140.5);	
	
	if ($anexo_2->paciente_remitido_c=='NO')
	{
		$pdf->SetXY(126,131.5);
		$pdf->Cell(0,15, 'X',0,0,'L');
	}
	
	
	
	
	
	$pdf->SetXY(20,130);
	$pdf->Cell(0,26,utf8_decode('Nombre del prestador de servicios de salud que remite'),0,0,'L');
	
	$pdf->SetXY(75,141);
	$pdf->Cell(0,4, utf8_decode($eps_rem->name),0,0,'L');
	
	$pdf->SetXY(75,135);
	$pdf->Line(71, 144, 120, 144);
	
	$pdf->SetXY(105,132);
	$pdf->Line(98, 148, 108, 148);
	
	$pdf->SetXY(105,132);
	$pdf->Line(153, 148.5, 163, 148.5);
	
	
	$pdf->SetXY(20,131.5);
	$pdf->Cell(0,30,utf8_decode('Departamento'),0,0,'L');

	$pdf->SetXY(75,145);
	$pdf->Cell(0,4, utf8_decode($departamento_eps_rem->name),0,0,'L');
	
	
	$pdf->SetXY(100,145);
	$pdf->Cell(0,4, utf8_decode($departamento_eps_rem->codigodane),0,0,'L');
	
	$pdf->SetXY(155,145.5);
	$pdf->Cell(0,4, utf8_decode($municipio_eps_rem->codigodane),0,0,'L');
		
	
		
	$pdf->SetXY(110,132);
	$pdf->Cell(0,30,utf8_decode('Municipio'),0,0,'L');

	$pdf->SetXY(100,145);
	$pdf->Line(126, 148.5, 150, 148.5);
	
	$pdf->SetXY(130,145.5);
	$pdf->Cell(0,4, utf8_decode($municipio_eps_rem->name),0,0,'L');
	
	$pdf->SetXY(100,145);
	$pdf->Line(150, 145, 135, 145);
	
	$pdf->SetXY(125,142);
	$pdf->Cell(0,4,utf8_decode('Código'),0,0,'L');
	
	
	$pdf->SetXY(138,142);
	$pdf->Cell(0,4, $eps->odigoeps,0,0,'L');
	

	$pdf->SetXY(15,75);
	$pdf->Line(71,148,95,148);
	
	$pdf->SetXY(15,75);
	
	$pdf->SetXY(20,136);
	$pdf->Cell(0,30,utf8_decode('Motivo de la Consulta'),0,0,'L');
	
	
	$pdf->SetXY(20,230);
	$pdf->Line(40,152, 190, 152);
	
	$pdf->SetXY(20,230);
	$pdf->Line(40,155, 190, 155);
	
	$pdf->SetXY(20,230);
	$pdf->Line(40,158, 190, 158);
	
	$pdf->SetXY(40,149);
	$pdf->Multicell(0,3,utf8_decode($anexo_2->description),0,'J');
	
	//$pdf->MultiCell(0,30,utf8_decode('Movito de la Consulta'),0,0,'L');
	
	
	$pdf->SetXY(20,157);
	$pdf->Cell(0,10, utf8_decode('Impresión Diagnóstica'),0,0,'L');
	
	$pdf->SetXY(55,157);
	$pdf->Cell(0,10, 'Codigo CIE10',0,0,'L');
	
	$pdf->SetXY(75,157);
	$pdf->Cell(0,10, utf8_decode('Descripción'),0,0,'L');
	
	$pdf->SetXY(20,162);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico principal'),0,0,'L');
	
	$pdf->SetXY(20,155);
	$pdf->Line(56, 168, 67, 168);
	
	$pdf->SetXY(20,155);
	$pdf->Line(75, 168, 190, 168);
		
	$pdf->SetXY(58,162);
	$pdf->Cell(0,10, $cie_10_p ->name,0,0,'L');
	
	$pdf->SetXY(75,162);
	$pdf->Cell(0,10, utf8_decode($cie_10_p ->description),0,0,'L');
	
	
	//diagnositco 1
	$pdf->SetXY(20,166.5);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico relacionado 1'),0,0,'L');
	
	$pdf->SetXY(20,160);
	$pdf->Line(56,172.5, 67, 172.5);
	
	$pdf->SetXY(20,160);
	$pdf->Line(75, 172.5, 190, 172.5);
	
	$pdf->SetXY(58,166.5);
	$pdf->Cell(0,10, $cie_10_1->name,0,0,'L');
	
	$pdf->SetXY(75,166.5);
	$pdf->Cell(0,10, utf8_decode($cie_10_1->description),0,0,'L');
	
	//dignostico2
	$pdf->SetXY(20,172);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico relacionado 2'),0,0,'L');
	
	$pdf->SetXY(20,166);
	$pdf->Line(56,177, 67, 177);
	
	$pdf->SetXY(20,166);
	$pdf->Line(75,177, 190, 177);
	
	$pdf->SetXY(58,171);
	$pdf->Cell(0,10,$cie_10_2->name,0,0,'L');
	
	$pdf->SetXY(75,171);
	$pdf->Cell(0,10, utf8_decode($cie_10_2->description),0,0,'L');
	
	
	
	//dignos3
	$pdf->SetXY(20,177);
	$pdf->Cell(0,10, utf8_decode('Diagnóstico relacionado 3'),0,0,'L');
	
	$pdf->SetXY(20,167);
	$pdf->Line(56,182, 67,182);
	
	$pdf->SetXY(20,167);
	$pdf->Line(75,182, 190, 182);
	
	$pdf->SetXY(58,176);
	$pdf->Cell(0,10,$cie_10_3->name,0,0,'L');
	
	$pdf->SetXY(75,176);
	$pdf->Cell(0,10, utf8_decode($cie_10_3->description),0,0,'L');
	

	$pdf->SetXY(20,184);
	$pdf->Cell(0,10, utf8_decode('Destino del Paciente'),0,0,'L');
	
	$pdf->SetXY(15,150);
	$pdf->Line(27,194,37,194);

	$pdf->SetXY(39,188);
	$pdf->Cell(0,10, utf8_decode('Domicilio'),0,0,'L');
	
	
	if ($anexo_2->destino_pte=='Domicilio_pte')
	{		
		$pdf->SetXY(30,187);
		$pdf->Cell(0,12, 'X',0,0,'L');
	}	
	
	$pdf->SetXY(39,193);
	$pdf->Cell(0,10, utf8_decode('Observación'),0,0,'L');
	$pdf->SetXY(95,150);
	$pdf->Line(27,199,37,199);
	
	if ($anexo_2->destino_pte=='Observacion_pte')
	{	
		$pdf->SetXY(30,192);
		$pdf->Cell(0,12, 'X',0,0,'L');
	}
	
	
	$pdf->SetXY(65,193);
	$pdf->Line(77,194,87,194);
	
	
	$pdf->SetXY(90,188);
	$pdf->Cell(0,10, utf8_decode('Internación'),0,0,'L');
	
	if ($anexo_2->destino_pte=='internacion_pte')
	{
		
		$pdf->SetXY(81,187);
		$pdf->Cell(0,12, 'X',0,0,'L');
	}
	
	
	$pdf->SetXY(65,185);
	$pdf->Line(77,199,87,199);
	
	$pdf->SetXY(90,193);
	$pdf->Cell(0,10, utf8_decode('Remisión'),0,0,'L');
	
	
	if ($anexo_2->destino_pte=='Remision_pte')
	{
		$pdf->SetXY(81,192);
		$pdf->Cell(0,12, 'X',0,0,'L');
	}
	
	
	$pdf->SetXY(110,188);
	$pdf->Cell(0,10, utf8_decode('Contrarremisión'),0,0,'C');
	$pdf->SetXY(23,155);
	$pdf->Line(130,194,140,194);
	
	if ($anexo_2->destino_pte=='contrarremision_pte')
	{
		$pdf->SetXY(133,187);
		$pdf->Cell(0,12, 'X',0,0,'L');
	}
	
	$pdf->SetXY(23,165);
	$pdf->Line(130,199,140,199);
	
	$pdf->SetXY(100,193);
	$pdf->Cell(0,10, utf8_decode('Otro'),0,0,'C');

	
	if ($anexo_2->destino_pte=='otro')
	{
		$pdf->SetXY(133,192);
		$pdf->Cell(0,12, 'X',0,0,'L');
	}
	
	////////////
	
	$pdf->SetXY(10,200);
	$pdf->Cell(0,10, 'INFORMACION DE LA PERSONA QUE INFORMA',0,0,'C');
	
	
	$pdf->SetXY(20,205);
	$pdf->Cell(0,10, 'Nombre de quien Informa ',0,0,'L');
	$pdf->Line(42, 211, 119, 211);
	
	$pdf->SetXY(120,205);
	$pdf->Cell(0,10, utf8_decode('Teléfono'),0,0,'L');
	$pdf->Line(131, 211, 146,211);
	
	$pdf->SetXY(120,204);
	$pdf->Line(147, 211, 174, 211);
	
	$pdf->SetXY(120,266);
	$pdf->Line(175, 211, 190, 211);
	
	
	
	$pdf->SetXY(45,205);
	$pdf->Cell(0,10, utf8_decode($anexo_2->nombre_informador)." ".utf8_decode($anexo_2->apellidos_informador_c),0,0,'L');
	
	//$pdf->SetXY(135,204);
	//$pdf->Cell(0,10, $anexo_2->indicativo_a_c,0,0,'L');
	
	$pdf->SetXY(152,204);
	$pdf->Cell(0,10, $anexo_2->tel_informador,0,0,'L');

	$pdf->SetXY(178,204);
	$pdf->Cell(0,10, $anexo_2->ext,0,0,'L');
	
	$pdf->SetXY(20,213);
	$pdf->Cell(0,10,'Cargo o Actividad ',0,0,'L');
	
	$pdf->SetXY(135,209);
	$pdf->Cell(0,10,'Indicativo ',0,0,'L');
	
	$pdf->SetXY(155,209);
	$pdf->Cell(0,10,utf8_decode('número'),0,0,'L');
	
	$pdf->SetXY(177,209);
	$pdf->Cell(0,10,utf8_decode('extensión'),0,0,'L');
	
	$pdf->Line(38, 219, 119, 219);
	
	
	
	$pdf->SetXY(40,213);
	$pdf->Cell(0,10, utf8_decode($anexo_2->cargo_informador),0,0,'L');
	
	$pdf->SetXY(120,213);
	$pdf->Cell(0,10,utf8_decode('Teléfono Celular'),0,0,'L');
	
	$pdf->SetXY(100,200);
	$pdf->Line(138, 219, 190, 219);
	
	$pdf->SetXY(150,213);
	$pdf->Cell(0,10, utf8_decode($anexo_2->cel_informador_c),0,0,'L');

	
	$pdf->Output("upload\PDF_Anexo2\A2-".$anexo_2->name.".pdf",'F');
	$pdf->Output("ANEXO TECNICO NO 2 - Numero de Solicitud ".$anexo_2->name.".pdf",'I');	
?>