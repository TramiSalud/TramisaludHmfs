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
			$this->Cell(0,10,utf8_decode('ANEXO TÉCNICO No. 4'),0,0,'C');
			$this->Ln(3);	
			$this->Cell(0,10,'AUTORIZACION DE SERVICIOS DE SALUD',0,0,'C');
			$this->Ln(4);		
		}

		function Footer()
		{
			$this->SetY(-15);
			$this->SetFont('Arial','',5);
			$this->Cell(0,10,'MPS-SAS V5.0 2008-07-11',0,0,'L');
		}
	}

	//anexo 3
	$anexo_3 =  BeanFactory::getBean("GBIA3_ANEXO3", $this->bean->gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida);
	$ips3 =  BeanFactory::getBean("IPS_IPS", $this->bean->ips_ips_id_c);
	$eps3 =  BeanFactory::getBean("EPS_EPS", $anexo_3->eps_eps_id_c);
	$departamento_ips3 =  BeanFactory::getBean("DEP_Departamentos", $ips3->dep_departamentos_id_c);
	$municipio_ips3 =  BeanFactory::getBean("MUN_Municipio", $ips3->mun_municipio_id_c);
	//$paciente3=  BeanFactory::getBean("Accounts",$anexo_3->account_id_c);	
	
	$pacientes = $anexo_3->get_linked_beans('accounts_gbia3_anexo3_1', 'Accounts');
	
	if (!empty($pacientes)){
		$paciente3 = null;
		foreach ($pacientes as $item){
			$paciente3 = $item;
			break;		
		}       
	}
	
	$departamento_paci3 =  BeanFactory::getBean("DEP_Departamentos", $paciente3->dep_departamentos_id_c);
	$municipio_paci3 =  BeanFactory::getBean("MUN_Municipio", $paciente3->mun_municipio_id1_c);
	
	
	
	//anexo2 
	
	$anexo_2 =  BeanFactory::getBean("gbian_Anexo2", $this->bean->gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida);
	$ips =  BeanFactory::getBean("IPS_IPS", $this->bean->ips_ips_id_c);
	$eps =  BeanFactory::getBean("EPS_EPS", $anexo_2->eps_eps_id_c);
	
	
	
	
	$departamento_ips =  BeanFactory::getBean("DEP_Departamentos",$ips->dep_departamentos_id_c);
	$municipio_ips =  BeanFactory::getBean("MUN_Municipio",$ips->mun_municipio_id_c);
	//$paciente =  BeanFactory::getBean("Accounts",$anexo_2->account_id_c);
	
	$pacientes = $anexo_2->get_linked_beans('gbian_anexo2_accounts', 'Accounts');
	
	if (!empty($pacientes)){
		$paciente = null;
		foreach ($pacientes as $item){
			$paciente = $item;
			break;		
		}       
	}
	
	$departamento_paci =  BeanFactory::getBean("DEP_Departamentos", $paciente->dep_departamentos_id_c);
	$municipio_paci =  BeanFactory::getBean("MUN_Municipio", $paciente->mun_municipio_id1_c);
	
	
	
	//file_put_contents('C:\\xampp\\htdocs\\log.txt', var_export($this->bean->gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida), true), FILE_APPEND);	
	$cups = $this->bean->get_linked_beans('gbia4_aprobacioncups_gbia4_anexo4', 'gbiA4_Aprobacioncups');

	global $app_list_strings;
		
	date_default_timezone_set('America/Bogota');
	$today = date("Y-m-d h:i"); 
	
	$pdf=new PDF('P','mm','A4');
	$pdf->AliasNbPages();
	$pdf->AddPage();
	$pdf->SetAutoPageBreak(true,10); 
	$pdf->SetMargins(20, 5 , 20); 
	
	
	// IMAGEN
	
	$pdf->Image('include/images/escudo_colombia.jpg',35,20,10);
	$pdf->Image('include/images/logo_hmfsb.jpg',170,20,10);
		
	$pdf->SetFont('Arial','B',5);
	$pdf->Cell(0,10,'MINISTERIO DE LA PROTECCION SOCIAL',0,0,'C');
	$pdf->Ln(4);
	$pdf->Cell(0,10,'AUTORIZACION DE SERVICIOS DE SALUD',0,0,'C');
	
		
	$pdf->SetXY(55,24);
	$pdf->Cell(0,10, 'NUMERO DE AUTORIZACION',0,0,'L');
	$pdf->Line(83, 30, 98, 30);
	
	$pdf->SetXY(100,24);
	$pdf->Cell(0,10, 'Fecha y Hora:',0,0,'L');
	$pdf->Line(114, 30, 144, 30);
	
	
	$pdf->SetXY(85,24);
	$pdf->Cell(0,10, utf8_decode($this->bean->name),0,0,'L');
	
	$pdf->SetXY(120,24);
	$pdf->Cell(0,10, $this->bean->fecha_recibida_c,0,0,'L');
	

	
	$pdf->SetXY(20,31.5);
	$pdf->Cell(0,10, 'INFORMACION DEL PRESTADOR (autorizado)',0,0,'L');
	
	
	$pdf->SetXY(20,35);
	$pdf->Cell(0,10, 'Nombre',0,0,'L');
	$pdf->Line(30, 41, 149, 41);
	
	$pdf->SetXY(150,35);
	$pdf->Cell(0,10, 'NIT',0,0,'L');
	$pdf->Line(155, 41, 160, 41);
	
	$pdf->SetXY(150,35);
	$pdf->Line(161, 41, 190, 41);
	
	$idanexo3= $this->bean->gbia4_anexo4_gbia3_anexo3gbia3_anexo3_ida;
	$idanexo2=$this->bean->gbian_anexo2_gbia4_anexo4_1gbian_anexo2_ida;
	//imprimir anexo 2
	if (!empty($idanexo3))
	{
			$pdf->SetXY(33,35);
			$pdf->Cell(0,10, utf8_decode($ips3->name),0,0,'L');
	
			if($ips3->tipodocumento == 'NIT')
			{
				$pdf->SetXY(156,35);
				$pdf->Cell(0,10, 'X',0,0,'L');
				
				$pdf->SetXY(170,35);
				$pdf->Cell(0,10, $ips3->nrodocumento,0,0,'L');
				
				$pdf->SetXY(185,35);
				$pdf->Cell(0,10, $ips3->digitoverificacion,0,0,'L');
			}
			
				
			$pdf->SetXY(150,39);
			$pdf->Cell(0,10, 'CC',0,0,'L');
			$pdf->Line(155, 45, 160, 45);
			
			$pdf->SetXY(160,39);
			$pdf->Cell(0,10, utf8_decode('Número'),0,0,'L');
			
			$pdf->SetXY(185,39);
			$pdf->Cell(0,10, 'DV',0,0,'L');
			
		if($ips3->tipodocumento != 'NIT')
		{
			$pdf->SetXY(156,39);
			$pdf->Cell(0,10, 'X',0,0,'L');
			
			$pdf->SetXY(170,31);
			$pdf->Cell(0,10, $ips3->nrodocumento,0,0,'L');
			
			$pdf->SetXY(185,31);
			$pdf->Cell(0,10, $ips3->digitoverificacion,0,0,'L');
		}
	
			
			$pdf->SetXY(20,43);
			$pdf->Cell(0,10, utf8_decode('Código'),0,0,'L');
			$pdf->Line(31, 49, 79, 49);
			
			$pdf->SetXY(80,43);
			$pdf->Cell(0,10,  utf8_decode('Dirección prestador:'),0,0,'L');
			$pdf->Line(100, 49, 190, 49);
			
			$pdf->SetXY(35,43);
			$pdf->Cell(0,10, $ips3->codigoips,0,0,'L');

			$pdf->SetXY(103,43);
			$pdf->Cell(0,10, utf8_decode($ips3->direccion),0,0,'L');
			
			$pdf->SetXY(20,48);
			$pdf->Cell(0,10, utf8_decode('Teléfono:'),0,0,'L');
			$pdf->Line(31, 53, 79, 53);	
			
			$pdf->SetXY(35,50);
			$pdf->Cell(0,10, 'indicativo',0,0,'L');
			
			$pdf->SetXY(60,50);
			$pdf->Cell(0,10, utf8_decode('número'),0,0,'L');
			
			$pdf->SetXY(80,47);
			$pdf->Cell(0,10, 'Departamento:',0,0,'L');
			$pdf->Line(95, 53, 125, 53);
			
			$pdf->SetXY(136,47);
			$pdf->Cell(0,10, 'Municipio:',0,0,'L');
			$pdf->Line(148, 53, 180, 53);
			
			
			$pdf->SetXY(98,47);
			$pdf->Cell(0,10, utf8_decode($departamento_ips3->name),0,0,'L');
			
			
			
			$pdf->SetXY(130,47);
			$pdf->Cell(0,10, $departamento_ips3->codigodane,0,0,'L');
			
			$pdf->SetXY(135,47);
			$pdf->Line(128, 53, 135, 53);
		
			
			$pdf->SetXY(150,47);
			$pdf->Cell(0,10, utf8_decode($municipio_ips3->name),0,0,'L');
			
			$pdf->SetXY(185,47);
			$pdf->Cell(0,10, $municipio_ips3->codigodane,0,0,'L');
			
			$pdf->SetXY(165,35);
			$pdf->Line(183, 53, 190, 53);
			
			
			$pdf->SetXY(45,47);
			$pdf->Cell(0,10, $ips3->telefono,0,0,'L');

			$pdf->SetXY(20,28);
			$pdf->Cell(0,10, 'ENTIDAD RESPONSABLE DEL PAGO',0,0,'L');
			$pdf->Line(65, 34, 148, 34);
			
			$pdf->SetXY(150,28);
			$pdf->Cell(0,10, 'CODIGO:',0,0,'L');
			$pdf->Line(160, 34, 190, 34);
			
			$pdf->SetXY(70,28);
			$pdf->Cell(0,10, utf8_decode($eps3->name),0,0,'L');
			
			$pdf->SetXY(165,28);
			$pdf->Cell(0,10, $eps3->odigoeps,0,0,'L');
			
			//DATOS DEL PACIENTE
	
	
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
		
	
	
			if(empty($paciente3->primerapellido_c)){		
				$pdf->SetXY(30,60);
				$pdf->Cell(0,10, 'No tiene',0,0,'L');
			}
			else{
				$pdf->SetXY(30,60);
				$pdf->Cell(0,10, utf8_decode($paciente3->primerapellido_c),0,0,'L');
			}
			
			//
			if(empty($paciente3->segundoapellido_c)){		
				$pdf->SetXY(75,60);
				$pdf->Cell(0,10, 'No tiene',0,0,'L');
			}
			else{
				$pdf->SetXY(75,60);
				$pdf->Cell(0,10, utf8_decode($paciente3->segundoapellido_c),0,0,'L');
			}
			
	//
			if(empty($paciente3->primernombre_c)){		
				$pdf->SetXY(120,60);
				$pdf->Cell(0,10, 'No tiene',0,0,'L');
			}
			else{
				$pdf->SetXY(120,60);
				$pdf->Cell(0,10, utf8_decode($paciente3->primernombre_c),0,0,'L');
			}
			
			//
			if(empty($paciente3->segundonombre_c)){		
				$pdf->SetXY(160,60);
				$pdf->Cell(0,10, 'No tiene',0,0,'L');
			}
			else{
				$pdf->SetXY(160,60);
				$pdf->Cell(0,10, utf8_decode($paciente3->segundonombre_c),0,0,'L');
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
			$pdf->Cell(0,10, utf8_decode('Número documento de identificación'),0,0,'L');
	
			$pdf->SetXY(20,81);
			$pdf->Line(21, 87, 26, 87);
			
			$pdf->SetXY(26 ,81);
			$pdf->Cell(0,10, utf8_decode('Cédula de ciudadanía'),0,0,'L');
			
			$pdf->SetXY(20,81);
			$pdf->Line(50, 87, 55, 87);
			
			$pdf->SetXY(55 ,81);
			$pdf->Cell(0,10, utf8_decode('Menor sin identificación'),0,0,'L');
			
				
			$pdf->SetXY(20,85);
			$pdf->Line(21, 91, 26, 91);
			
			$pdf->SetXY(26 ,85);
			$pdf->Cell(0,10, utf8_decode('Cédula de extranjería'),0,0,'L');
			
			$pdf->SetXY(100,85);
			$pdf->Cell(0,10, 'Fecha de Nacimiento',0,0,'L');
			$pdf->Line(120, 91, 135, 91);
	
	//TIPO DOC, NUMERO DOC, FECHA NAC
			if($paciente3->tipo_documento_c == 'R.C.')
			{
				$pdf->SetXY(22,73);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			if($paciente3->tipo_documento_c == 'T.I.')
			{
				$pdf->SetXY(22,77);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			if($paciente3->tipo_documento_c == 'CC')
			{
				$pdf->SetXY(22,81);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			if($paciente3->tipo_documento_c == 'CE')
			{
				$pdf->SetXY(22,85);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			if($paciente3->tipo_documento_c == 'pasaporte')
			{
				$pdf->SetXY(51,73);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			if($paciente3->tipo_documento_c == 'adulto_sin_identificar')
			{
				$pdf->SetXY(51,77);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			if($paciente3->tipo_documento_c == 'menor_sin_identificar')
			{
				$pdf->SetXY(51,81);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			$pdf->SetXY(145,73);
			$pdf->Cell(0,10, $paciente3->name,0,0,'L');
			
			$pdf->SetXY(121,85);
			$pdf->Cell(0,10, $paciente3->fechanacimiento_c,0,0,'L');	
			//FIN 
			
	
	
			$pdf->SetXY(20,89);
			$pdf->Cell(0,10,  utf8_decode('Dirección de Residencia Habitual:'),0,0,'L');
			$pdf->Line(51, 95, 141, 95);
			
			$pdf->SetXY(142,89);
			$pdf->Cell(0,10, utf8_decode('Teléfono:'),0,0,'L');
			$pdf->Line(153, 95, 190, 95);
			
			$pdf->SetXY(55,89);
			$pdf->Cell(0,10, utf8_decode($paciente3->direccionresidencia_c),0,0,'L');
			
			$pdf->SetXY(158,89);
			$pdf->Cell(0,10, $paciente3->telefonopersonal_c,0,0,'L');
			
					
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
			$pdf->Cell(0,10, utf8_decode($departamento_paci3->name),0,0,'L');
			
			$pdf->SetXY(100,93);
			$pdf->Cell(0,10, $departamento_paci3->codigodane,0,0,'L');
			
			$pdf->SetXY(122,93);
			$pdf->Cell(0,10, utf8_decode($municipio_paci3->name),0,0,'L');
			
			$pdf->SetXY(183,93);
			$pdf->Cell(0,10, $municipio_paci3->codigodane,0,0,'L');
			
				
			$pdf->SetXY(20,97);
			$pdf->Cell(0,10, utf8_decode('Teléfono celular'),0,0,'L');
			$pdf->Line(36, 103, 81, 103);
			
			$pdf->SetXY(82,97);
			$pdf->Cell(0,10,  utf8_decode('Correo electrónico'),0,0,'L');
			$pdf->Line(100, 103, 190, 103);
			
			$pdf->SetXY(40,97);
			$pdf->Cell(0,10, $paciente3->celular_c,0,0,'L');
			
			if(empty($paciente3->email1)){		
				$pdf->SetXY(105,97);
				$pdf->Cell(0,10, 'No tiene',0,0,'L');
			}
			else{
				$pdf->SetXY(105,97);
				$pdf->Cell(0,10, utf8_decode($paciente3->email1),0,0,'L');
			}
			
		
	//FIN 
	
	
	//SERVICIOS AUTORIZADOS
	
	
			$pdf->SetXY(10,104);
			$pdf->Cell(0,10, 'SERVICIOS AUTORIZADOS',0,0,'C');
			
				
			$pdf->SetXY(20,108);
			$pdf->Cell(0,10, utf8_decode('Ubicación del Paciente al momento de la solicitud de autorización:'),0,0,'L');
			
			
			$pdf->SetXY(20,112);
			$pdf->Cell(0,10,  utf8_decode('Consulta Externa:'),0,0,'L');
			$pdf->SetXY(20,112);
			$pdf->Line(38, 118, 46, 118);
			
				
			$pdf->SetXY(100,112);
			$pdf->Cell(0,10, utf8_decode('Servicios'),0,0,'L');
			$pdf->SetXY(20,135);
			$pdf->Line(110, 118, 150, 118);
			
			$pdf->SetXY(20 ,116);
			$pdf->Cell(0,10, 'Urgencias',0,0,'L');
			$pdf->Line(38, 121, 46, 121);
			
			$pdf->SetXY(70,112);
			$pdf->Cell(0,10, utf8_decode('Hospitalización'),0,0,'L');
			 $pdf->Line(85, 118, 93, 118);
			
			$pdf->SetXY(160 ,112);
			$pdf->Cell(0,10, 'Cama',0,0,'L');
			$pdf->Line(167, 118, 177, 118);
			
	
	
	//UBICACION, SERVICIO, CAMA 	
	if($anexo_3->ubicacion == 'consulta_externa')
	{
		$pdf->SetXY(40,112);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($anexo_3->ubicacion == 'urgencias')
	{
		$pdf->SetXY(40,115);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}

	if($anexo_3->ubicacion == 'hospitalizacion')
	{
		$pdf->SetXY(90,112);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	$pdf->SetXY(110,112);
	$pdf->Cell(0,10, utf8_decode($anexo_3->servicio),0,0,'L');
		
	$pdf->SetXY(170,112);
	$pdf->Cell(0,10, utf8_decode($anexo_3->cama),0,0,'L');
	//FIN 
	
	
		
	$pdf->SetXY(20 ,125);
	$pdf->Cell(0,10, utf8_decode('Manejo Integral según Guía de:'),0,0,'L');

	$pdf->SetXY(70,112);
			//$pdf->Cell(0,10, utf8_decode('Hospitalización'),0,0,'L');
	$pdf->Line(50, 131, 155, 131);
	//$pdf->SetXY(49,139);
	//$pdf->Cell(0,10, $this->bean->guia,0,0,'L');
	
	
	
	
	$pdf->SetXY(25,136);
	$pdf->Cell(0,10, utf8_decode('Código CUPS'),0,0,'L');
	
	$pdf->SetXY(55,136);
	$pdf->Cell(0,10, 'Cantidad',0,0,'L');
	
	$pdf->SetXY(75,136);
	$pdf->Cell(0,10, utf8_decode('Descripción'),0,0,'L');
	
	
	$m = 136;
	$y = 0;
	
	for($x = 146; $x <= 224; $x = $x + 4)
	{
		$m = $m + 4;
		$y = $y + 1;
	
		$pdf->SetXY(21,$m);
		$pdf->Cell(0,10, $y,0,0,'L');
		$pdf->Line(25, $x, 50, $x);
		$pdf->Line(56, $x, 67, $x);
		$pdf->Line(75, $x, 190, $x);
	}
	
	$s = 136;
	
	$result = count($cups);
	
	$ii = 0;
	
	while($ii < 20)
	{
		$detalles =  BeanFactory::getBean("GBICU_CUPS", $cups[$ii]->gbicu_cups_id_c);	
		
		$s = $s + 4;
	
		$pdf->SetXY(33,$s);
		$pdf->Cell(0,10, $detalles->name,0,'L');
		
		$pdf->SetXY(58,$s);
		$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidad_cups),0,0,'L');
		
		$pdf->SetXY(75,$s);
		$pdf->Cell(0,10, utf8_decode($detalles->description),0,0,'L');
		
		$ii++;
	}


    // ANEXO 3

	$pdf->SetXY(20,225);
	$pdf->Cell(0,10, utf8_decode('NÚMERO DE SOLICITUD ORIGEN:'),0,0,'L');
    $pdf->Line(51, 231, 75, 231);
	
	$pdf->SetXY(80,225);
	$pdf->Cell(0,10, 'Fecha y Hora:',0,0,'L');
	$pdf->Line(94, 231, 120, 231);
	
	$pdf->SetXY(55,225);
	$pdf->Cell(0,10, $anexo_3->name,0,0,'L');
	
	$pdf->SetXY(98,225);
	$pdf->Cell(0,10, $anexo_3->date_entered,0,0,'L');
	
	

	
	
	// PAGOS COMPARTIDOS
	
	$pdf->SetXY(10,233);
	$pdf->Cell(0,10, 'PAGOS COMPARTIDOS',0,0,'C');
	
		
	$pdf->SetXY(20,237);
	$pdf->Cell(0,10, utf8_decode('Porcentaje del valor de los servicios de esta autorización a pagar por la entidad responsable del pago  '),0,0,'L');
	$pdf->Line(107, 243, 115, 243);
	
	$simbolPorc = !empty($this->bean->porcentaje_servicio) ? '%' : '';
	
	$pdf->SetXY(107,237);
	$pdf->Cell(0,10, utf8_decode($this->bean->porcentaje_servicio).$simbolPorc,0,0,'L');
	
	$pdf->SetXY(20,240);
	$pdf->Cell(0,10, utf8_decode('Semana de afiliación del paciente a la solicitud de la autorización  '),0,0,'L');
	$pdf->SetXY(20,240);
    $pdf->Line(76, 246, 88, 246);
	
	$pdf->SetXY(76,240);
	$pdf->Cell(0,10, $this->bean->semanas_afiliacion,0,0,'L');
	
	$pdf->SetXY(100,240);
	$pdf->Cell(0,10, utf8_decode('Reclamo de tiquete, bono o vale de pago  '),0,0,'L');
	$pdf->SetXY(100,240);
    $pdf->Line(136, 246, 139, 246);
	
	$reclamo = $this->bean->reclamo_tiquete == 0 ? '' : 'X';
	$pdf->SetXY(136,240);
	$pdf->Cell(0,10, $reclamo,0,0,'L');
	
    $pdf->SetXY(20,243);
	$pdf->Cell(0,10, utf8_decode('Recaudo del Prestador:'),0,0,'L');


	
	$pdf->SetXY(30,246);
	$pdf->Cell(0,10, utf8_decode('Concepto:'),0,0,'L');
	
		
	$pdf->SetXY(30 ,250);
	$pdf->Cell(0,10, 'Cuota Moderadora',0,0,'L');
	$pdf->SetXY(30,250);
	$pdf->Line(52, 255, 62, 255);
	
	
	$pdf->SetXY(30 ,253);
	$pdf->Cell(0,10, 'Copago',0,0,'L');
	$pdf->SetXY(30,253);
	$pdf->Line(52, 258, 62, 258);
	
			
	$pdf->SetXY(30 ,256);
	$pdf->Cell(0,10, utf8_decode('Cuota de Recuperación'),0,0,'L');
	$pdf->SetXY(30,256);
	$pdf->Line(52, 261, 62, 261);
	
	
	$pdf->SetXY(30 ,259);
	$pdf->Cell(0,10, 'Otro',0,0,'L');
	$pdf->SetXY(30,259);
	$pdf->Line(52, 264, 62, 264);
	
	//MARCACION CONCEPTO
	
	if($this->bean->concepto == 'Cuota')
	{
		$pdf->SetXY(55,249);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($this->bean->concepto == 'copago')
	{
		$pdf->SetXY(55 ,252);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($this->bean->concepto == 'cuota_recuperacion')
	{
		$pdf->SetXY(55,255);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($this->bean->concepto == 'otro')
	{
		$pdf->SetXY(55 ,258);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	//FIN
	
	
    $pdf->SetXY(65,246);
	$pdf->Cell(0,10, utf8_decode('Valor en pesos:'),0,0,'L');
	$pdf->Line(80, 252, 98, 252);
		
	$pdf->SetXY(80,246);
	$pdf->Cell(0,10, number_format($this->bean->valor_pesos, 2),0,0,'L');
	
    $pdf->SetXY(100,246);
	$pdf->Cell(0,10, utf8_decode('Porcentaje (%):'),0,0,'L');
	$pdf->Line(115, 252, 128, 252);
	
	$pdf->SetXY(115,246);
	$pdf->Cell(0,10, $this->bean->porcentaje,0,0,'L');
	 
    $pdf->SetXY(135,246);
	$pdf->Cell(0,10, utf8_decode('Valor Máximo (Tope) en pesos: '),0,0,'L');
	$pdf->Line(164, 252, 180, 252);
		
	$pdf->SetXY(164,246);
	$pdf->Cell(0,10, number_format($this->bean->maximo_valor, 2),0,0,'L');
		
	// INFORMACION DE LA PERSONA QUE AUTORIZA
	
	$pdf->SetXY(10,262);
	$pdf->Cell(0,10, 'INFORMACION DE LA PERSONA QUE AUTORIZA',0,0,'C');
	
		
	$pdf->SetXY(20,266);
	$pdf->Cell(0,10, 'Nombre de quien autoriza',0,0,'L');
	$pdf->Line(45, 272, 119, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Cell(0,10, utf8_decode('Teléfono'),0,0,'L');
	$pdf->Line(131, 272, 146, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(147, 272, 174, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(175, 272, 190, 272);
	
	$pdf->SetXY(48,266);
	$pdf->Cell(0,10, utf8_decode($this->bean->nombquienautoriza_c),0,0,'L');
	
	$pdf->SetXY(135,266);
	$pdf->Cell(0,10, $this->bean->indicativoquienautoriza_c,0,0,'L');
	
	$pdf->SetXY(155,266);
	$pdf->Cell(0,10, $this->bean->numeroquienautoriza_c,0,0,'L');
	
	$pdf->SetXY(177,266);
	$pdf->Cell(0,10, $this->bean->extensionquienautoriza_c,0,0,'L');

		
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
	$pdf->Cell(0,10, utf8_decode($this->bean->cargoquienautoriza_c),0,0,'L');
	
	$pdf->SetXY(145,274);
	$pdf->Cell(0,10, $this->bean->celquienautoriza_c,0,0,'L');
	
}

else
{
	if(!empty($idanexo2))
	{
			$pdf->SetXY(33,35);
			$pdf->Cell(0,10, utf8_decode($ips->name),0,0,'L');
	
			if($ips->tipodocumento == 'NIT')
			{
				$pdf->SetXY(156,35);
				$pdf->Cell(0,10, 'X',0,0,'L');
				
				$pdf->SetXY(170,35);
				$pdf->Cell(0,10, $ips->nrodocumento,0,0,'L');
				
				$pdf->SetXY(185,35);
				$pdf->Cell(0,10, $ips->digitoverificacion,0,0,'L');
			}
			
			
			$pdf->SetXY(150,39);
			$pdf->Cell(0,10, 'CC',0,0,'L');
			$pdf->Line(155, 45, 160, 45);
			
			$pdf->SetXY(160,39);
			$pdf->Cell(0,10, utf8_decode('Número'),0,0,'L');
			
			$pdf->SetXY(185,39);
			$pdf->Cell(0,10, 'DV',0,0,'L');
			
			if($ips->tipodocumento != 'NIT')
			{
				$pdf->SetXY(156,39);
				$pdf->Cell(0,10, 'X',0,0,'L');
				
				$pdf->SetXY(170,31);
				$pdf->Cell(0,10, $ips->nrodocumento,0,0,'L');
				
				$pdf->SetXY(185,31);
				$pdf->Cell(0,10, $ips->digitoverificacion,0,0,'L');
			}
			
			
			$pdf->SetXY(20,43);
			$pdf->Cell(0,10, utf8_decode('Código'),0,0,'L');
			$pdf->Line(31, 49, 79, 49);
			
			$pdf->SetXY(80,43);
			$pdf->Cell(0,10,  utf8_decode('Dirección prestador:'),0,0,'L');
			$pdf->Line(100, 49, 190, 49);
			
			$pdf->SetXY(35,43);
			$pdf->Cell(0,10, $ips->codigoips,0,0,'L');

			$pdf->SetXY(103,43);
			$pdf->Cell(0,10, utf8_decode($ips->direccion),0,0,'L');
			
			$pdf->SetXY(20,48);
			$pdf->Cell(0,10, utf8_decode('Teléfono:'),0,0,'L');
			$pdf->Line(31, 53, 79, 53);	
			
			$pdf->SetXY(35,50);
			$pdf->Cell(0,10, 'indicativo',0,0,'L');
			
			
			$pdf->SetXY(60,50);
			$pdf->Cell(0,10, utf8_decode('número'),0,0,'L');
			
			$pdf->SetXY(80,47);
			$pdf->Cell(0,10, 'Departamento:',0,0,'L');
			$pdf->Line(95, 53, 125, 53);
			
			
			$pdf->SetXY(136,47);
			$pdf->Cell(0,10, 'Municipio:',0,0,'L');
			$pdf->Line(148, 53, 180, 53);
			$pdf->SetXY(98,47);
			$pdf->Cell(0,10, utf8_decode($departamento_ips->name),0,0,'L');
			
			$pdf->SetXY(150,47);
			$pdf->Cell(0,10, utf8_decode($municipio_ips->name),0,0,'L');
			
			$pdf->SetXY(45,47);
			$pdf->Cell(0,10, $ips->telefono,0,0,'L');
			
			
			
			
		
			
			$pdf->SetXY(130,47);
			$pdf->Cell(0,10, $departamento_ips->codigodane,0,0,'L');
				
			$pdf->SetXY(135,47);
			$pdf->Line(128, 53, 135, 53);
		
			$pdf->SetXY(185,47);
			$pdf->Cell(0,10, $municipio_ips->codigodane,0,0,'L');
			
			
			$pdf->SetXY(165,35);
			$pdf->Line(183, 53, 190, 53);
			
			$pdf->SetXY(20,28);
			$pdf->Cell(0,10, 'ENTIDAD RESPONSABLE DEL PAGO',0,0,'L');
			$pdf->Line(65, 34, 148, 34);
			
			$pdf->SetXY(150,28);
			$pdf->Cell(0,10, 'CODIGO:',0,0,'L');
			$pdf->Line(160, 34, 190, 34);
			
			$pdf->SetXY(70,28);
			$pdf->Cell(0,10, utf8_decode($eps->name),0,0,'L');
			
			$pdf->SetXY(165,28);
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
			$pdf->Cell(0,10, utf8_decode('Número documento de identificación'),0,0,'L');
	
			$pdf->SetXY(20,81);
			$pdf->Line(21, 87, 26, 87);
			
			$pdf->SetXY(26 ,81);
			$pdf->Cell(0,10, utf8_decode('Cédula de ciudadanía'),0,0,'L');
			
			$pdf->SetXY(20,81);
			$pdf->Line(50, 87, 55, 87);
			
			$pdf->SetXY(55 ,81);
			$pdf->Cell(0,10, utf8_decode('Menor sin identificación'),0,0,'L');
			
				
			$pdf->SetXY(20,85);
			$pdf->Line(21, 91, 26, 91);
			
			$pdf->SetXY(26 ,85);
			$pdf->Cell(0,10, utf8_decode('Cédula de extranjería'),0,0,'L');
			
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
			
	//FIN 
	//SERVICIOS AUTORIZADOS
	
	
			$pdf->SetXY(10,104);
			$pdf->Cell(0,10, 'SERVICIOS AUTORIZADOS',0,0,'C');
			
				
			$pdf->SetXY(20,108);
			$pdf->Cell(0,10, utf8_decode('Ubicación del Paciente al momento de la solicitud de autorización:'),0,0,'L');
			
			
			$pdf->SetXY(20,112);
			$pdf->Cell(0,10,  utf8_decode('Consulta Externa:'),0,0,'L');
			$pdf->SetXY(20,112);
			$pdf->Line(38, 118, 46, 118);
			
				
			$pdf->SetXY(100,112);
			$pdf->Cell(0,10, utf8_decode('Servicios'),0,0,'L');
			$pdf->SetXY(20,135);
			$pdf->Line(110, 118, 150, 118);
			
			$pdf->SetXY(20 ,116);
			$pdf->Cell(0,10, 'Urgencias',0,0,'L');
			$pdf->Line(38, 121, 46, 121);
			
			$pdf->SetXY(70,112);
			$pdf->Cell(0,10, utf8_decode('Hospitalización'),0,0,'L');
			 $pdf->Line(85, 118, 93, 118);
			
			$pdf->SetXY(160 ,112);
			$pdf->Cell(0,10, 'Cama',0,0,'L');
			$pdf->Line(167, 118, 177, 118);
		
			//UBICACION, SERVICIO, CAMA 	
			if($anexo_3->ubicacion == 'consulta_externa')
			{
				$pdf->SetXY(40,112);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			if($anexo_3->ubicacion == 'urgencias')
			{
				$pdf->SetXY(40,115);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}

			if($anexo_3->ubicacion == 'hospitalizacion')
			{
				$pdf->SetXY(90,112);
				$pdf->Cell(0,10, 'X',0,0,'L');
			}
			
			$pdf->SetXY(110,112);
			$pdf->Cell(0,10, utf8_decode($anexo_3->servicio),0,0,'L');
				
			$pdf->SetXY(170,112);
			$pdf->Cell(0,10, utf8_decode($anexo_3->cama),0,0,'L');
			//FIN 
	
			$pdf->SetXY(20 ,124);
			$pdf->Cell(0,10, utf8_decode('Manejo Integral según Guía de:'),0,0,'L');

				$pdf->SetXY(70,112);
			//$pdf->Cell(0,10, utf8_decode('Hospitalización'),0,0,'L');
			 $pdf->Line(50, 130, 155, 130);
			 
			 $pdf->SetXY(25,136);
			$pdf->Cell(0,10, utf8_decode('Código CUPS'),0,0,'L');
			
			$pdf->SetXY(55,136);
			$pdf->Cell(0,10, 'Cantidad',0,0,'L');
			
			$pdf->SetXY(75,136);
			$pdf->Cell(0,10, utf8_decode('Descripción'),0,0,'L');
			
	
			$m = 136;
			$y = 0;
			
		for($x = 146; $x <= 224; $x = $x + 4)
		{
			$m = $m + 4;
			$y = $y + 1;
		
			$pdf->SetXY(21,$m);
			$pdf->Cell(0,10, $y,0,0,'L');
			$pdf->Line(25, $x, 50, $x);
			$pdf->Line(56, $x, 67, $x);
			$pdf->Line(75, $x, 190, $x);
		}
	
		$s = 136;
	
		$result = count($cups);
	
		$ii = 0;
		
		while($ii < 20)
		{
			$detalles =  BeanFactory::getBean("GBICU_CUPS", $cups[$ii]->gbicu_cups_id_c);	
			
			$s = $s + 4;
		
			$pdf->SetXY(33,$s);
			$pdf->Cell(0,10, $detalles->name,0,'L');
			
			$pdf->SetXY(58,$s);
			$pdf->Cell(0,10, utf8_decode($cups[$ii]->cantidad_cups),0,0,'L');
			
			$pdf->SetXY(75,$s);
			$pdf->Cell(0,10, utf8_decode($detalles->description),0,0,'L');
			
			$ii++;
		}

		$pdf->SetXY(20,225);
		$pdf->Cell(0,10, utf8_decode('NÚMERO DE SOLICITUD ORIGEN:'),0,0,'L');
		$pdf->Line(51, 231, 75, 231);
		
		$pdf->SetXY(80,225);
		$pdf->Cell(0,10, 'Fecha y Hora:',0,0,'L');
		$pdf->Line(94, 231, 115, 231);
			
		$pdf->SetXY(55,225);
		$pdf->Cell(0,10, $anexo_2->name,0,0,'L');
		
		$pdf->SetXY(98,225);
		$pdf->Cell(0,10, $anexo_2->date_entered,0,0,'L');
	
	
	// PAGOS COMPARTIDOS
	
	$pdf->SetXY(10,233);
	$pdf->Cell(0,10, 'PAGOS COMPARTIDOS',0,0,'C');
	
		
	$pdf->SetXY(20,237);
	$pdf->Cell(0,10, utf8_decode('Porcentaje del valor de los servicios de esta autorización a pagar por la entidad responsable del pago  '),0,0,'L');
	$pdf->Line(107, 243, 115, 243);
	
	$simbolPorc = !empty($this->bean->porcentaje_servicio) ? '%' : '';
	
	$pdf->SetXY(107,237);
	$pdf->Cell(0,10, utf8_decode($this->bean->porcentaje_servicio).$simbolPorc,0,0,'L');
	
	$pdf->SetXY(20,240);
	$pdf->Cell(0,10, utf8_decode('Semana de afiliación del paciente a la solicitud de la autorización  '),0,0,'L');
	$pdf->SetXY(20,240);
    $pdf->Line(76, 246, 88, 246);
	
	$pdf->SetXY(76,240);
	$pdf->Cell(0,10, $this->bean->semanas_afiliacion,0,0,'L');
	
	$pdf->SetXY(100,240);
	$pdf->Cell(0,10, utf8_decode('Reclamo de tiquete, bono o vale de pago  '),0,0,'L');
	$pdf->SetXY(100,240);
    $pdf->Line(136, 246, 139, 246);
	
	$reclamo = $this->bean->reclamo_tiquete == 0 ? '' : 'X';
	$pdf->SetXY(136,240);
	$pdf->Cell(0,10, $reclamo,0,0,'L');
	
    $pdf->SetXY(20,243);
	$pdf->Cell(0,10, utf8_decode('Recaudo del Prestador:'),0,0,'L');


	
	$pdf->SetXY(30,246);
	$pdf->Cell(0,10, utf8_decode('Concepto:'),0,0,'L');
	
		
	$pdf->SetXY(30 ,250);
	$pdf->Cell(0,10, 'Cuota Moderadora',0,0,'L');
	$pdf->SetXY(30,250);
	$pdf->Line(52, 255, 62, 255);
	
	
	$pdf->SetXY(30 ,253);
	$pdf->Cell(0,10, 'Copago',0,0,'L');
	$pdf->SetXY(30,253);
	$pdf->Line(52, 258, 62, 258);
	
			
	$pdf->SetXY(30 ,256);
	$pdf->Cell(0,10, utf8_decode('Cuota de Recuperación'),0,0,'L');
	$pdf->SetXY(30,256);
	$pdf->Line(52, 261, 62, 261);
	
	
	$pdf->SetXY(30 ,259);
	$pdf->Cell(0,10, 'Otro',0,0,'L');
	$pdf->SetXY(30,259);
	$pdf->Line(52, 264, 62, 264);
	
	//MARCACION CONCEPTO
	
	if($this->bean->concepto == 'Cuota')
	{
		$pdf->SetXY(55,249);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($this->bean->concepto == 'copago')
	{
		$pdf->SetXY(55 ,252);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($this->bean->concepto == 'cuota_recuperacion')
	{
		$pdf->SetXY(55,255);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	
	if($this->bean->concepto == 'otro')
	{
		$pdf->SetXY(55 ,258);
		$pdf->Cell(0,10, 'X',0,0,'L');
	}
	//FIN
	
	
    $pdf->SetXY(65,246);
	$pdf->Cell(0,10, utf8_decode('Valor en pesos:'),0,0,'L');
	$pdf->Line(80, 252, 98, 252);
		
	$pdf->SetXY(80,246);
	$pdf->Cell(0,10, number_format($this->bean->valor_pesos, 2),0,0,'L');
	
    $pdf->SetXY(100,246);
	$pdf->Cell(0,10, utf8_decode('Porcentaje (%):'),0,0,'L');
	$pdf->Line(115, 252, 128, 252);
	
	$pdf->SetXY(115,246);
	$pdf->Cell(0,10, $this->bean->porcentaje,0,0,'L');
	 
    $pdf->SetXY(135,246);
	$pdf->Cell(0,10, utf8_decode('Valor Máximo (Tope) en pesos: '),0,0,'L');
	$pdf->Line(164, 252, 180, 252);
		
	$pdf->SetXY(164,246);
	$pdf->Cell(0,10, number_format($this->bean->maximo_valor, 2),0,0,'L');
		
	// INFORMACION DE LA PERSONA QUE AUTORIZA
	
	$pdf->SetXY(10,262);
	$pdf->Cell(0,10, 'INFORMACION DE LA PERSONA QUE AUTORIZA',0,0,'C');
	
		
	$pdf->SetXY(20,266);
	$pdf->Cell(0,10, 'Nombre de quien autoriza',0,0,'L');
	$pdf->Line(45, 272, 119, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Cell(0,10, utf8_decode('Teléfono'),0,0,'L');
	$pdf->Line(131, 272, 146, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(147, 272, 174, 272);
	
	$pdf->SetXY(120,266);
	$pdf->Line(175, 272, 190, 272);
	
	$pdf->SetXY(48,266);
	$pdf->Cell(0,10, utf8_decode($this->bean->nombquienautoriza_c),0,0,'L');
	
	$pdf->SetXY(135,266);
	$pdf->Cell(0,10, $this->bean->indicativoquienautoriza_c,0,0,'L');
	
	$pdf->SetXY(155,266);
	$pdf->Cell(0,10, $this->bean->numeroquienautoriza_c,0,0,'L');
	
	$pdf->SetXY(177,266);
	$pdf->Cell(0,10, $this->bean->extensionquienautoriza_c,0,0,'L');

		
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
	$pdf->Cell(0,10, utf8_decode($this->bean->cargoquienautoriza_c),0,0,'L');
	
	$pdf->SetXY(145,274);
	$pdf->Cell(0,10, $this->bean->celquienautoriza_c,0,0,'L');
	
	
	
	
	
			
	
	
	
	
	
	
	}//end del if 


}
//fin de la info
	
	
	$pdf->Output("ANEXO TECNICO NO 4 - Numero de Solicitud ".$this->bean->name.".pdf",'I');	
?>