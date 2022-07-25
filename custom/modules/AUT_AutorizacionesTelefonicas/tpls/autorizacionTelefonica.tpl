<table border="1" cellpadding="1">
	<tr>
		<td rowspan="2" align="center" width="60%">
			<img src="include/images/logo-clinica-medellin.jpg" width='85' height='50' />	
		</td>
		<td align="center" rowspan="2" width="160%">AUTORIZACIÓN TELEFÓNICA</td>
		<td align="center" width="67%">
			Código: {$bean->name}
		</td>
	</tr>
	<tr>
		<td align="center" width="67%">Versión: 3</td>
	</tr>
</table>
<br>
<br>
<table border="1" cellpadding="2">
<tr>
	<td width="70%">Entidad</td>
	<td width="120%">{$bean->eps}</td>
</tr>

<tr>
	<td width="70%">Fecha de Ingreso</td>
	<td width="120%">{$bean->fechaingreso}</td>
</tr>

<tr>
<td width="70%">Paciente</td>
<td width="120%">{$paciente->primernombre_c} {$paciente->segundonombre_c} {$paciente->primerapellido_c} {$paciente->segundoapellido_c}</td>
</tr>

<tr>
<td width="70%">Documento de Identidad</td>
<td width="30%">Tipo</td>
<td width="30%">{$tipo_docu}</td>
<td width="30%">Número</td>
<td width="30%" align="right">{$paciente->name}</td>
</tr>
<tr>
<td width="70%">Número de Autorización</td>
<td width="120%" align="left">{$bean->autorizacionnro}</td>
</tr>

<tr>
<td width="70%">Autoriza</td>
<td width="120%">{$bean->quienautoriza_c}</td>
</tr>
</table>
<BR>
<BR>
Firma del Responsable: {$bean->assigned_user_name}



