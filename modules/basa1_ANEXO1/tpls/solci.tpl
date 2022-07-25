<table width="100%" style="margin-top:-50px;">
	<thead>
			<tr>
			<td  align="right" width="100px">
				<img src="include/images/Colombia.png"  width="150px"  />
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			</td>
			<td style="text-align: center;" width="1360px" align="center">
				<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ANEXO TÉNICO No. 1</h2>
				<h4><p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;INFORME DE POSIBLE INCONSISTENCIAS EN LAS BASES DE DATOS 
				DE LA ENTIDAD RESPONSABLE DE PAGO</p>
				</h4>
			</td>
			<td  align="left" width="50px">
				<img src="include/images/logo_hmfsb.jpg"  width="150px"  />
			</td>
		</tr>
	</thead>
</table>
<br/>
<table width="100%" border="1">
	<tr>
		<td align="center" width="90%">NUMERO DE INFORME:</td>
		<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;{ $bean->name}</td>
		<td align="center">FECHA Y HORA:</td>
		<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;{ $bean->fecha }</td>
	</tr>
	<tr>
		<td width="390%"></td>
	</tr>
	<tr>
		<td align="left" width="390%">&nbsp;&nbsp;&nbsp;<b>INFORMACION DEL PRESTADOR</b></td>
	</tr>
	<tr>
		<td align="left" width="40%">&nbsp;NOMBRE:</td>
		<td align="center" width="110%">{ $prestador->name }</td>
		<td align="left" width="70%">&nbsp;TIPO DOCUMENTO:</td>
		<td align="center" width="20%">NIT</td>
		<td align="center" width="20%">{if $prestador->tipodocumento eq 'NIT'} X{/if}</td>
		<td align="center" width="20%">CC</td>
		<td align="center" width="20%">{if $prestador->tipodocumento eq 'C.C.'} X{/if}</td>
		<td align="left" width="30%">&nbsp;NUMERO:</td>
		<td align="center" width="60%">{$prestador->nrodocumento}</td>
	</tr>
	<tr>
		<td align="left" width="40%">&nbsp;CODIGO:</td>
		<td align="center" width="110%">{$prestador->codigoips}</td>
		<td align="left">&nbsp;&nbsp;DIRECCION PRESTADOR :</td>
		<td align="center" width="140%">{$prestador->direccion}</td>
	</tr>
	<tr>
		<td align="left" width="40%">&nbsp;TELEFONO:</td>
		<td align="center" width="40%">{$prestador->telefono}</td>
		<td align="left" width="70%">&nbsp;DEPARTAMENTO:</td>
		<td align="center" width="80%">{$prestador->departamento}</td>
		<td align="left" width="60%">&nbsp;MUNICIPIO:</td>
		<td align="center">{$prestador->municipio}</td>
	</tr>
	<tr>
		<td align="left" width="150%">&nbsp;ENTIDAD ALA QUE SE LE INFORMA (PAGADOR) :</td>
		<td align="center" width="240%">&nbsp;{$eps->name}</td>
	</tr>
	<tr>
		<br/>
	</tr>
	<tr>
		<td align="center" colspan="2" width="40%"><b>TIPO DE INCOSISTENCIA:</b></td>
		<td width="20%" align="center">{if $bean->usuarionoexiste eq '1'} X {/if}</td>
		<td width="150%" align="center">EL USUARIO NO EXISTE EN LA BASE DE DATOS</td>
		<td width="20%" align="center">{if $bean->datosincorrectos} X {/if}</td>
		<td width="120%" align="left">LOS DATOS DEL USUARIO NO CORRESPONDEN CON LOS DEL DOCUMENTO DE IDENTIFICACIÒN PRESENTADO</td>
	</tr>
	<tr>
		<br/>
	</tr>
	<tr>
		<td align="center" width="390%"><b>DATOS DEL USUARIO (como aparece en la base de datos)</b></td>
	</tr>
	<tr>
		<td align="center" width="98%">{$paciente->primerapellido_c}</td>
		<td align="center" width="97%">{$paciente->segundoapellido_c}</td>
		<td align="center" width="97%">{$paciente->primernombre_c}</td>
		<td align="center" width="98%">{$paciente->segundonombre_c}</td>
	</tr>
	<tr>
		<td align="center" width="98%">1er. APELLIDO</td>
		<td align="center" width="97%">2do. APELLIDO</td>
		<td align="center" width="97%">1er. NOMBRE</td>
		<td align="center" width="98%">2do. NOMBRE</td>
	</tr>
	<tr>
		<br/>
	</tr>
	<tr>
		<td width="390%">&nbsp;&nbsp;<b>TIPO DE IDENTIFICACION</b></td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $paciente->tipo_documento_c eq 'R.C.'} X {/if}</td>
		<td width="80%" align="left">&nbsp;REGISTRO CIVIL</td>
		<td width="10%" align="center">{if $paciente->tipo_documento_c eq 'pasaporte'} X {/if}</td>
		<td width="80%" align="left">&nbsp;PASAPORTE</td>
		<td width="210%"></td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $paciente->tipo_documento_c eq 'T.I.'} X {/if}</td>
		<td width="80%" align="left">&nbsp;TARJETA DE IDENTIDAD</td>
		<td width="10%" align="center">{if $paciente->tipo_documento_c eq 'adulto_sin_identificar'} X {/if}</td>
		<td width="100%" align="left">&nbsp;ADULTO SIN IDENTIFICACION</td>
		<td align="left">&nbsp;NUMERO DE IDENTIFICACION</td>
		<td align="center" width="90%">&nbsp;{$paciente->name}</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $paciente->tipo_documento_c eq 'CC'} X {/if}</td>
		<td width="80%" align="left">&nbsp;CEDULA DE CIUDADANIA</td>
		<td width="10%" align="center">{if $paciente->tipo_documento_c eq 'menor_sin_identificar'} X {/if}</td>
		<td width="100%" align="left">&nbsp;MENOR SIN IDENTIFICACION</td>
		<td width="190%"></td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $paciente->tipo_documento_c eq 'CE'} X {/if}</td>
		<td width="80%" align="left">&nbsp;CEDULA DE EXTRANJERIA</td>
		<td width="110%"></td>
		<td align="left">&nbsp;FECHA DE NACIMIENTO</td>
		<td width="90%" align="center">&nbsp;{$paciente->fechanacimiento_c}</td>
	</tr>
	<br/>
	<tr>
		<td width="130%" align="left">&nbsp;DIRECCION DE RESIDENCIA HABITUAL</td>
		<td width="100%" align="center">{$paciente->direccionresidencia_c}</td>
		<td width="70%" align="left">&nbsp;TELEFONO</td>
		<td width="90%" align="center">{$paciente->telefonopersonal_c}</td>
	</tr>
	<tr>
		<td width="130%" align="left">&nbsp;DEPARTAMENTO</td>
		<td width="100%" align="center">{$paciente->departamento_c}</td>
		<td width="70%" align="left">&nbsp;MUNICIPIO</td>
		<td width="90%" align="center">{$paciente->municipio_c}</td>
	</tr>
	<tr>
		<br/>
	</tr>
	<tr>
		<td width="390%">&nbsp;&nbsp;<b>COBERTURA EN SALUD</b></td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'regimen_contributivo'} X {/if}</td>
		<td width="80%" align="center">REGIMEN CONTRIBUTIVO</td>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'regimen_subsidiado_parcial'} X {/if}</td>
		<td width="100%" align="center">REGIMEN SUBSIDIADO-PARCIAL</td>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'no_asegurada_sin_sisben'} X {/if}</td>
		<td width="80%" align="center">POBLACION POBRE NO ASEGURADA SIN SISBEN</td>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'plan_adicional_salud'} X {/if}</td>
		<td width="90%" align="center">PLAN ADICIONAL DE SALUD</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'regimen_subsidiado_total'} X {/if}</td>
		<td width="80%" align="center">REGIMEN SUBSIDIADO - TOTAL</td>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'no_asegurada_con_sisben'} X {/if}</td>
		<td width="100%" align="center">POBLACION POBRE NO ASEGURADA CON SISBEN</td>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'desplazado'} X {/if}</td>
		<td width="80%" align="center">DESPLAZADO</td>
		<td width="10%" align="center">{if $paciente->tipocobertura_c eq 'otro'} X {/if}</td>
		<td width="90%" align="center">OTRO</td>
	</tr>
	<tr>
		<br/>
	</tr>
	<tr>
		<td width="390%">&nbsp;&nbsp;<b>INFORMACION DE LA POSIBLE INCOSISTENCIA</b></td>
	</tr>
	<tr>
		<td width="80%" colspan="2">&nbsp;<b>VARIABLE PRESUNTAMENTE INCORRECTA</b></td>
		<td width="115%" colspan="2">&nbsp;<b>DATOS SEGUN DOCUMENTO DE IDENTIFICACION (fisico)</b></td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $bean->primerapellido eq '1'} X {/if}</td>
		<td width="150%" align="left">&nbsp;PRIMER APELLIDO</td>
		<td width="100%">&nbsp;&nbsp;PRIMER APELLIDO</td>
		<td width="130%">&nbsp;&nbsp;{$bean->primerapellidotext}</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $bean->segundoapellido eq '1'} X {/if}</td>
		<td width="150%" align="left">&nbsp;SEGUNDO APELLIDO</td>
		<td width="100%">&nbsp;&nbsp;SEGUNDO APELLIDO</td>
		<td width="130%">&nbsp;&nbsp;{$bean->segundoapellidotext}</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $bean->primernombre eq '1'} X {/if}</td>
		<td width="150%" align="left">&nbsp;PRIMER NOMBRE</td>
		<td width="100%">&nbsp;&nbsp;PRIMER APELLIDO</td>
		<td width="130%">&nbsp;&nbsp;{$bean->primernombretext}</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $bean->segundonombre eq '1'} X {/if}</td>
		<td width="150%" align="left">&nbsp;SEGUNDO NOMBRE</td>
		<td width="100%">&nbsp;&nbsp;SEGUNDO NOMBRE</td>
		<td width="130%">&nbsp;&nbsp;{$bean->segundonombretext}</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $bean->tipodocumento eq '1'} X {/if}</td>
		<td width="150%" align="left">&nbsp;TIPO DE DOCUMENTO IDENTIFICACION</td>
		<td width="100%">&nbsp;&nbsp;TIPO DE DOCUMENTO IDENTIFICACION</td>
		<td width="130%">&nbsp;&nbsp;{$bean->tipodocumentolist}</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $bean->tipodocumento eq '1'} X {/if}</td>
		<td width="150%" align="left">&nbsp;DOCUMENTO DE IDENTIFICACION</td>
		<td width="100%">&nbsp;&nbsp;DOCUMENTO DE &nbsp;&nbsp;IDENTIFICACION</td>
		<td width="130%">&nbsp;{$bean->nrodocumentotext}</td>
	</tr>
	<tr>
		<td width="10%" align="center">{if $bean->fechanacimiento eq '1'} X {/if}</td>
		<td width="150%" align="left">&nbsp;FECHA DE NACIMIENTO</td>
		<td width="100%">&nbsp;&nbsp;FECHA DE NACIMIENTO</td>
		<td width="130%">&nbsp;&nbsp;{$bean->fechanacimientodate}</td>
	</tr>
	<br/>
	<tr>
		<td width="390%">&nbsp;&nbsp;<b>OBSERVACIONES</b></td>
	</tr>
	<tr>
		<td width="390%">
			&nbsp;&nbsp;{$bean->description}
		</td>
	</tr>
	<br/>
	<tr>
		<td width="390%" align="center">&nbsp;&nbsp;<b>INFORMACION DE LA PERSONA QUE REPORTA</b></td>
	</tr>
	<tr>
		<td width="80%" colspan="2">&nbsp;<b>NOMBRE DE QUIEN REPORTA</b></td>
		<td width="115%" colspan="2">&nbsp;<b>TELEFONO</b></td>		
	</tr>
	<tr>
		<td width="160%">&nbsp;{$user->first_name}&nbsp;{$user->last_name}</td>
		<td width="230%">&nbsp;{$user->phone_work}</td>
	</tr>
	<tr>
		<td width="80%" colspan="2">&nbsp;<b>CARGO O ACTIVIDAD</b></td>
		<td width="115%" colspan="2">&nbsp;<b>TELEFONO CELULAR</b></td>		
	</tr>
	<tr>
		<td width="160%">&nbsp;{$user->title}</td>
		<td width="230%">&nbsp;{$user->phone_mobile}</td>
	</tr>
	
	



</table>