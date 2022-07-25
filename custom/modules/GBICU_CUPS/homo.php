<?php
//if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

global $db;

$queryCUPS = "select DISTINCT p.cod_cups, p.cod_soat, p.descripcion_soat from gbicu_cups CUPS 
 INNER JOIN 
 pruebas_hospital p 
 ON p.cod_cups = CUPS.id 
where descripcion_soat not IN ('', '#N/A')";

$resultCUPS = $db->query($queryCUPS);

$iss = 0;
$soat = 0;

while ($row = $db->fetchByAssoc($resultCUPS))
{
	//$queryISS = "SELECT * FROM prueba_clinica WHERE cod_cups = '".$row["cod_cups"]."' ";
	//echo $queryISS;
	//$resultISS = $db->query($queryISS);
	
	//while ($rowISS = $db->fetchByAssoc($resultISS))
	//{
		//$updateISS = "UPDATE gbicu_cups SET nombreserviss = '".$rowISS["descripcion_iss"]."' WHERE id = '".$row["cod_cups"]."'";
		//$db->query($updateISS);
		
	//	$insertISS_cstm = "INSERT INTO gbicu_cups_cstm (id_c, codiss_c) VALUES ('".$row["cod_cups"]."', '".$rowISS["cod_iss"]."')";
		//$db->query($insertISS_cstm);
		
		//$iss++;
		//echo $rowISS["cod_cups"]." ".$rowISS["cod_iss"]." ".$rowISS["descripcion_iss"]."<br>";
	//}
	//$updateISS = "UPDATE gbicu_cups SET nombreserviss = '".$row["descripcion_iss"]."' WHERE id = '".$row["cod_cups"]."'";
	//$db->query($updateISS);
	
	$resultExiste = $db->query("SELECT * FROM gbicu_cups_cstm WHERE id_c = '".$row["cod_cups"]."'");
		
	$rowExists = $db->fetchByAssoc($resultExiste);
		
	if (empty($rowExists['id_c']))
	{
		$SOAT_cstm = "INSERT INTO gbicu_cups_cstm (id_c, codsoat_c) VALUES ('".$row["cod_cups"]."', '".$row["cod_soat"]."')";
		//$db->query($insertISS_cstm);

	}
	else
	{
		$SOAT_cstm = "UPDATE gbicu_cups_cstm SET codsoat_c = '".$row["cod_soat"]."' WHERE id_c = '".$row["cod_cups"]."'";

	}
	
	
	//$insertISS_cstm = "INSERT INTO gbicu_cups_cstm (id_c, codiss_c) VALUES ('".$row["cod_cups"]."', '".$row["cod_iss"]."')";
	$db->query($SOAT_cstm);
		
	$iss++;
	/*$querySOAT = "SELECT * FROM pruebas_hospital WHERE cod_cups = '".$row["id"]."' AND descripcion_soat NOT IN ('', '#N/A') LIMIT 1";
	
	$resultSOAT = $db->query($querySOAT);
	
	while ($rowSOAT = $db->fetchByAssoc($resultSOAT))
	{
		$updateSOAT = "UPDATE gbicu_cups SET nombreservsoat = '".$rowSOAT["descripcion_soat"]."' WHERE id = '".$row["id"]."'";
		$db->query($updateSOAT);
		
		$resultExiste = $db->query("SELECT * FROM gbicu_cups_cstm WHERE id_c = '".$row["id"]."'");
		
		$rowExists = $db->fetchByAssoc($resultExiste);
		
		if (empty($rowExists['id_c']))
		{
			$SOAT_cstm = "INSERT INTO gbicu_cups_cstm (id_c, codsoat_c) VALUES ('".$row["id"]."', '".$rowSOAT["cod_soat"]."')";
		}
		else
		{
			$SOAT_cstm = "UPDATE gbicu_cups_cstm SET codsoat_c = '".$rowSOAT["cod_soat"]."' WHERE id_c = '".$row["id"]."'";
		}
		
		$db->query($SOAT_cstm);
		
		$soat++;
	}*/
	
	//break;
	
}

$queries = array('idCUPS' => $queryCUPS, 
'cli medellin' => $queryISS, 
'update cups cli medellin' => $updateISS, 
'insert cups_cstm cli medellin' => $insertISS_cstm, 
'Hosp marco...' => $querySOAT, 
'update cups marco..' => $updateSOAT, 
'insert cups_cstm marco...' => $insertSOAT_cstm);

//var_dump($queries);
echo "ISS: $iss<br> SOAT: $soat";

?>