<table width="100%"  >
	<tr>
		<th><img src="include/images/logo_hmfsb.jpg"  width="150px"  />	
		</th>
		<th style="text-align:center"><h2>E.S.E HOSPITAL MARCO FIDEL SUÁREZ</h2><br/><p>EGRESO CENTRO REGULADOR HOSPITALARIO</p></th>
		<th style="text-align:center"><br/><b>ID:</b>{ $bean->name }</th>
	</tr>
<br/><br/>
<table width="100%" border="1">
  <tr>
    <td align="center"><b>DATOS DEL USUARIO</b></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="160%">&nbsp;<b>NOMBRES COMPLETOS DEL USUARIO:</b>&nbsp;{ $bean->nombres_apepaciente } &nbsp;{ $bean->segundonombre_c }&nbsp;{ $bean->primerapellido_c }&nbsp;{ $bean->segundoapellido_c }</td>
    <td width="40%">&nbsp;<b>EDAD:</b>&nbsp;{ $bean->edad_paciente }</td>
  </tr>
  <tr>
    <td width="100%">&nbsp;<b>TIPO DE DOCUMENTO DE IDENTIDAD:</b>&nbsp;{$tipo_doc} </td>
    <td width="100%">&nbsp;<b>NUMERO DE DOCUMENTO:</b> &nbsp;{ $bean->paciente }</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>TELEFONO:</b> &nbsp;{ $bean->tele_paciente }</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>ASEGURADORA:</b>&nbsp;{ $bean->aseguradora_p }</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td align="center"><b>DATOS CLINICOS</b></td>
  </tr>
</table>
<table width="100%"  border="1">
  <tr>
    <td colspan="2">&nbsp;<b>AREA DE SERVICIO:</b>&nbsp;{ $bean->area_servicio }</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>ESPECIALIDAD REQUERIDA:</b>&nbsp;{ $espec }</td>
  </tr>
   <tr>
    <td colspan="2"></td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>DIAGNOSTICO:</b>&nbsp;{$bean->descrip_dig}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>CODIGO DIAGNOSTICO:</b>&nbsp;{$bean->diagnostico_clini}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>DIAGNOSTICO 2:</b>&nbsp;{$bean->dx2_c}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>CODIGO DIAGNOSTICO 2:</b>&nbsp;{$bean->dx2_desc_c}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>DIAGNOSTICO 3:</b>&nbsp;{$bean->dx3_c}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<b>CODIGO DIAGNOSTICO 3:</b>&nbsp;{$bean->dx3_desc_c}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="130%">&nbsp;<b>AYUDA DE DIAGNOSTICA:</b>&nbsp;{$bean->cups_clinica}</td>
    <td width="70%">&nbsp;<b>CUPS:</b>&nbsp;{$bean->ayuda_diag_clinica}</td>
  </tr>
  <tr>
    <td width="130%">&nbsp;<b>AYUDA DE DIAGNOSTICA 2:</b>&nbsp;{$bean->cup2_desc_c}</td>
    <td width="70%">&nbsp;<b>CUPS 2:</b>&nbsp;{$bean->cups2_c}</td>
  </tr>
  <tr>
    <td width="130%">&nbsp;<b>AYUDA DE DIAGNOSTICA 3:</b>&nbsp;{$bean->cups3_desc_c}</td>
    <td width="70%">&nbsp;<b>CUPS 3:</b>&nbsp;{$bean->cups3_c}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="120%">&nbsp;<b>NOMBRE DEL ACOMPAÑANTE:</b>&nbsp;{$bean->nombre_acompa}</td>
    <td width="80%">&nbsp;<b>TELEFONO FIJO:</b>&nbsp;{$bean->telefono_fijo}</td>
  </tr>
  <tr>
    <td align="right" width="200%"><b>CELULAR:</b>&nbsp;{$bean->celular_acom}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;<SPAN><b>JUSTIFICACIÒN:&nbsp;</b>{$bean->description}</SPAN></td>
  </tr>
  <tr>
  	<td colspan="2">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td align="center"><b>DATOS DE CITA</b></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td colspan="2">&nbsp;<b>INSTITUCION ASIGNADA:</b>&nbsp;{$bean->institucion_asi_ips} </td>
  </tr>
  <tr>
    <td width="100%">&nbsp;<b>FECHA:</b>&nbsp;{ $bean->fecha_hora_cita|substr:0:11 }</td>
    <td width="100%">&nbsp;<b>HORA:</b>&nbsp;{ $bean->fecha_hora_cita|substr:11:15 }</td>
  </tr>
  <tr>
    <td width="100%">&nbsp;<b>COPAGO:</b>&nbsp;{$bean->copago}</td>
    <td width="100%">&nbsp;<b>VALOR:</b>&nbsp;${$valor}</td>
  </tr>
</table>
<table width="100%" height="78" border="1">
  <tr>
    <td colspan="4">&nbsp;<b>OBSERVACIONES:</b>&nbsp;{$bean->observacion_1}</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td>&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td align="center"><b>DATOS DE LA REMISION</b></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="50%" align="center">&nbsp;<b>INSTITUCION ASIGNADA</b></td>
    <td width="150%">&nbsp;{$bean->institucion_asign}</td>
  </tr>
  <tr>
    <td width="50%" align="center">&nbsp;&nbsp;<b>CODIGO DE AUTORIZACION:</b></td>
    <td width="150%">&nbsp;{$bean->codigo_autorizacion_rem_c}</td>
  </tr>
  <tr>
    <td width="50%" align="center">&nbsp;<b>FUNCIONARIO EPS:</b></td>
    <td width="150%" >&nbsp;{$bean->funcionario_eps}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
  <tr>
    <td width="50%" align="center">&nbsp;<b>MEDICO AUTORIZA:</b></td>
    <td width="150%">&nbsp;{$bean->nombre_medicos}</td>
  </tr>
  <tr>
    <td colspan="2">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td align="center"><b>AMBULANCIA</b></td>
  </tr>
</table>
<table width="100%" border="1">
  <tr>
    <td width="80%">&nbsp;<b>TIPO:</b>&nbsp;</td>
    <td width="150%">&nbsp;<b>INSTITUCIONAL:</b>&nbsp;{$bean->institucional}</td>
    <td width="70%">&nbsp;<b>TEL:</b>&nbsp;{$bean->tele_1}</td>
  </tr>
  <tr>
    <td width="80%">&nbsp;<b>BASICA:</b>&nbsp;{if $bean->tipo_am eq "basica"}X{/if}</td>
    <td width="150%">&nbsp;<b>PROVEEDOR DE AMBULANCIA:</b>&nbsp;&nbsp;{$tipoamb}</td> 
    <td width="70%">&nbsp;<b>TEL:</b>&nbsp;{$bean->tel_2}</td>
  </tr>
  <tr>
    <td width="80%">&nbsp;<b>MEDICALIZADA:</b>&nbsp;{if $bean->tipo_am eq "medicalizada"}X{/if}</td>
    <td width="110%" colspan="2">&nbsp;<b>CODIGO AUTORIZACION:</b>&nbsp;{$bean->codigo_autorizacion_c}</td>
  </tr>
</table>
<table width="100%" height="79" border="1">
  <tr>
  <td colspan="2"></td>
</tr>
  <tr>
    <td width="200%">&nbsp;<b>OBSERVACIONES:</b>&nbsp;{$bean->observaciones}</td>
  </tr>
</table>
<table width="100%" border="1">
<tr>
  <td colspan="2"></td>
</tr>
<tr>
	<td width="200%">
		<p>&nbsp;<b>FIRMA DE CENTRO REGULADOR:</b>&nbsp;{ $centro_reg->first_name}&nbsp;{ $centro_reg->last_name}</p>
	</td>
</tr>
<tr>
	<td width="200%">
		<p>&nbsp;<b>FECHA Y HORA : ENTREGA </b>&nbsp;{$bean->fecha_hora_entrega}</p>
	</td>
</tr>
</table>
