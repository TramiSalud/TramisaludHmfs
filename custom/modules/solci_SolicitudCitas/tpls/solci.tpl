<table width="100%"  >
	<tr>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="include/images/logo_hmfsb.jpg"  width="150px"  /></th>
		<th style="text-align:center"><h2>E.S.E HOSPITAL MARCO FIDEL SUÁREZ</h2><br/><p>SOLICITUD DE CITAS</p></th>
		<th style="text-align:center"><br/><b>ID:</b>{ $bean->name }</th>
	</tr>
</table>
<br/>
<table border="0" cellspacing="2" cellpadding="2">
<tr><td >FECHA SOLICITUD ( H. C. )</td><td>{ $bean->fechasolicitud|substr:0:11 }</td><td >HORA</td><td>{ $bean->fechasolicitud|substr:11:15 }</td></tr>
<tr><td >FECHA CENTRO REGULADOR</td><td>{ $bean->fechacenregulador|substr:0:11 }</td><td >HORA</td><td>{ $bean->fechacenregulador|substr:11:15 }</td></tr>
<tr><td >NOMBRES Y APELLIDOS DEL PACIENTE</td><td>{ $bean->nombresapellpaciente }</td><td >DOCUMENTO</td><td>{ $bean->paciente }</td></tr>
<tr><td >TELÉFONO</td><td>{ $bean->telpersonal }</td><td >TELÉFONO</td><td>{ $bean->teladicional }</td></tr>
<tr><td >ACOMPAÑANTE</td><td>{ $bean->acompanante }</td><td >TELÉFONO</td><td>{ $bean->telacompanante }</td></tr>
<tr><td >MUNICIPIO</td><td>{ $bean->municipio }</td><td >SEXO</td><td>{ $sexo }</td></tr>
<tr><td >FECHA NACIMIENTO</td><td>{ $bean->fechanac }</td><td >EDAD</td><td>{ $bean->edad }</td></tr>
<tr><td >ENTIDAD ASEGURADORA</td><td>{ $bean->eps }</td><td >CAMA</td><td>{ $bean->cama }</td></tr>
<tr><td >DIAGNÓSTICO</td><td>{ $bean->cie10descripcion }</td><td >CIE 10</td><td>{ $bean->diagnostico }</td></tr>
<tr><td >DIAGNÓSTICO 2</td><td>{ $bean->codigodediagnostico2_c }</td><td >CIE 10 (2)</td><td>{ $bean->codigodediagnostico2descripc_c }</td></tr>
<tr><td >DIAGNÓSTICO 3</td><td>{ $bean->codigodiagnostico3_c}</td><td >CIE 10 (3)</td><td>{ $bean->codigodiagnostico3descripcio_c }</td></tr>
<tr><td >EXÁMEN O PROCEDIMIENTO A REALIZAR</td><td>{ $bean->cupdescripcion }</td><td >CUPS</td><td>{ $bean->cup }</td></tr>
<tr><td >EXÁMEN O PROCEDIMIENTO A REALIZAR 2</td><td>{ $bean->cup2_descripcion_c }</td><td >CUPS 2</td>
<td>{ $bean->cup2_c }</td></tr>
<tr><td >EXÁMEN O PROCEDIMIENTO A REALIZAR 3</td><td>{ $bean->cup3_descripcion_c }</td><td >CUPS 3</td>
<td>{ $bean->cup3_c }</td></tr>
<tr><td >MÉDICO SOLICITANTE</td><td>{ $bean->nombremedico }</td><td >ESPECIALIDAD</td><td>{ $espec }</td></tr>
<tr><td >PESO</td><td>{ $bean->peso_c }</td><td >TALLA</td><td>{ $bean->talla_c}</td></tr>
</table>
<br/>
<table border="0.5" cellspacing="2" cellpadding="2">
<tr><td align="center"  width="700px">CRITERIOS</td><td align="center"  width="100px">SI</td><td align="center"  width="100px">NO</td><td align="center"  width="700px">OBSERVACIONES</td></tr>
<tr><td width="700px">¿EL PACIENTE TIENE VIH, TBC, HB, INFLUENZA O ALGUNA ENFERMEDAD INFECTOCONTAGIOSA? CUÁL?</td>
<td align="center" width="100px">{if $bean->infectocontagio eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->infectocontagio eq "NO"}X{/if}</td>
<td width="700px">{ $listcontagio|cat:$bean->obsinfectocontagio }</td></tr>
<tr><td width="700px">¿EL PACIENTE TIENE ALGÚN TIPO DE AISLAMIENTO? CUÁL? POR QUÉ?</td>
<td align="center" width="100px">{if $bean->aislamiento eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->aislamiento eq "NO"}X{/if}</td>
<td width="700px">{ $bean->obsaislamiento }</td></tr>
<tr><td width="700px">¿EL PACIENTE TIENE CATÉTER CENTRAL, SONDA VESICAL, SONDA A TÓRAX, SONDA DE ALIMENTACIÓN, LÍNEAS?</td>
<td align="center" width="100px">{if $bean->pacientetienecateter eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->pacientetienecateter eq "NO"}X{/if}</td>
<td width="700px">{ $listcatet|cat:$bean->obspacientetienecateter }</td></tr>
<tr><td width="700px">¿SE VALORA ESCALA DE GLASGOW? ESPECIFIQUE EL VALOR</td>
<td align="center" width="100px">{if $bean->escalaglasgow eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->escalaglasgow eq "NO"}X{/if}</td>
<td width="700px">{ "VALOR: "|cat:$bean->valorglasgow|cat:" "|cat:$bean->obsglasgow }</td></tr>
<tr><td width="700px">¿EL PACIENTE SE MOVILIZA? SI ES NO ESPECIFIQUE POR QUÉ Y MODO</td>
<td align="center" width="100px">{if $bean->pacientemoviliza_c eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->pacientemoviliza_c eq "NO"}X{/if}</td>
<td width="700px">{ $bean->obstienemovilidad_c }</td></tr>
<tr><td width="700px">¿TIENE MARCAPASOS O IMPLEMENTOS METÁLICOS EN SU CUERPO? CUÁLES?</td>
<td align="center" width="100px">{if $bean->tienemarcapasos eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->tienemarcapasos eq "NO"}X{/if}</td>
<td width="700px">{ $bean->obstienemarcapasos }</td></tr>
<tr><td width="700px">¿EL PACIENTE TIENE OXÍGENO SUPLEMENTARIO? ESPECIFIQUE CUÁL Y A CUÁNTOS LITROS POR MINUTO</td>
<td align="center" width="100px">{if $bean->tieneoxigeno eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->tieneoxigeno eq "NO"}X{/if}</td>
<td width="700px">{ $bean->obstieneoxigeno }</td></tr>
<tr><td width="700px">¿EL PACIENTE TIENE ACOMPAÑANTE? ESPECIFIQUE LOS DATOS PERSONALES DE ÉSTE</td>
<td align="center" width="100px">{if $bean->acompanante neq ""}X{/if}</td>
<td align="center" width="100px">{if $bean->acompanante eq ""}X{/if}</td>
<td width="700px">{ "NOMBRE: "|cat:$bean->acompanante|cat:"  TELÉFONO: "|cat:$bean->telacompanante|cat:"  "|cat:$bean->obsadicionacompanan_c }</td></tr>
<tr><td width="700px">¿EL PACIENTE TIENE ANTECEDENTES DE CLAUSTROFOBIA?</td>
<td align="center" width="100px">{if $bean->tieneclaustrofobia eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->tieneclaustrofobia eq "NO"}X{/if}</td>
<td width="700px">{ $bean->obstieneclaustrofobia }</td></tr>
<tr><td width="700px">¿EL PACIENTE SE HA REALIZADO ALGÚN EXÁMEN O PROCEDIMIENTO CON MEDIO DE CONTRASTE EN LAS ÚLTIMAS 48H?</td>
<td align="center" width="100px">{if $bean->realizadoexamen48h eq "SI"}X{/if}</td>
<td align="center" width="100px">{if $bean->realizadoexamen48h eq "NO"}X{/if}</td>
<td width="700px">{ $bean->obsexamen48h }</td></tr>
<tr><td colspan="3" width="900px">ESPECIFICAR TIPO DE AMBULANCIA QUE SE REQUIERE PARA EL TRASLADO</td>
<td width="700px">&nbsp;&nbsp;{ $ambulanc }</td></tr>
</table><br><br>
<table>
<tr><td colspan="4" align="center" >RECUERDE QUE DEBE ANEXAR</td></tr>
<tr><td colspan="4">{ $bean->description|nl2br }</td></tr>
</table>
<br><br><br><br><br><br>
<table>
<tr><td>
{ $enfermera->first_name}&nbsp;{ $enfermera->last_name}</td>
<td>
{ $centro_reg->first_name}&nbsp;{ $centro_reg->last_name}</td></tr>
<tr>
<td>______________________________________________________</td>
<td>______________________________________________________</td>
</tr>
<tr><td>
ENFERMERA QUE SOLICITA</td><td>
FIRMA CENTRO REGULADOR</td></tr>
</table>
