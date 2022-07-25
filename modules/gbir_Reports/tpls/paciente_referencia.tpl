
<h1>BUSQUEDA TRAZABILIDAD DE PACIENTE REFERENCIA</h1>
<div>
    <table border="0" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td class="tabForm">
                <form name="reportfm" id="reportfm" action="index.php" method="post">
                    <input type="hidden" name="module" value="gbir_Reports"> 
                    <input type="hidden" name="action" value="paciente_referencia" /> 
                    <input type="hidden" name="report_trigger" value="yes">
                    <strong>Fecha Inicial: </strong> 
                    <input autocomplete="off" type="text" name="start_date" id="start_date" 
                        value="{$start_date}"
                        title='' tabindex='1' size="11" maxlength="10"> <img border="0"
                        src="themes/default/images/jscalendar.gif" alt="Start Date"
                        id="start_date_trigger" align="absmiddle" />
                    &nbsp; <span class="FontSoftSmall">(Formato: aaaa/mm/dd)</span> <br/><br/>
                    <strong>Fecha Final:&nbsp;&nbsp;</strong> 
                    <input autocomplete="off" type="text" name="end_date" id="end_date"
                        value="{$end_date}"
                        title='' tabindex='1' size="11" maxlength="10"> <img border="0"
                        src="themes/default/images/jscalendar.gif" alt="End Date"
                        id="end_date_trigger" align="absmiddle" />
                    &nbsp; <span class="FontSoftSmall">(Formato: aaaa/mm/dd)</span> <br /><br />
                    <strong>Documento Paciente:&nbsp;&nbsp;</strong> 
                    <input autocomplete="off" type="text" name="documento" id="documento"
                        value="{$numdoc}"
                        title='' tabindex='1'>&nbsp;  <br /><br />
                    <strong>EPS:&nbsp;&nbsp;</strong> 
                    <select name="eps" id="eps">
                            <option value="">Seleccione una eps</option>
                        {foreach name=outer  item=item from=$epss}
				            <option value="{$item->id}">{$item->name}</option>
						{/foreach}
                    </select>
                    &nbsp;  <br /><br />
                    <input class="button" name="submit" value="Consultar" align="bottom" type="submit">
                </form>
            </td>
        </tr>
    </table>
    {if $report_trigger == 'yes'}
    <table border="0" cellpadding="2" cellspacing="3" width="100%" class="h3Row">
        <tr>
            <td>Numero de Anexo</td>
            <td>Fecha de Solicitud</td>
            <td>Nombre</td>
            <td>Servicio Solicitado</td>
        </tr>
         {foreach name=outer  item=item from=$ingresos}
        <tr>
            <td><a href="index.php?module=gbir_Reports&action=paciente_referencia&numsol={$item->id}">{$item->name}</a> </td>
            <td>{$item->date_entered}</td>
            <td>{$item->primernombre} {$item->segundonombre} {$item->primerapellido} {$item->segundoapellido}</td>
            <td>{$item->servicio_soli}</td>
        </tr>				
        {/foreach}
    <table>
    {/if}
    {if $viewreferencia == '1'}
    <table border="0" cellpadding="2" cellspacing="3" width="100%" class="h3Row">
        <tr>
            <td align="left" valign="top" colspan="2">
                <h3 style="margin: 0px;">INFORME TRAZABILIDA DE PACIENTRE REFERENCIA </h3>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>ID</td>
            <td>FECHA</td>
            <td>CEDULA</td>
            <td>CAUSA REMISION</td>
            <td >NOMBRES Y APELLIDOS</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>{$ingreso->name}</td>
            <td>{$ingreso->date_entered}</td>
            <td>{$ingreso->accounts_gbi_anexo9_1_name}</td>
            <td>{$ingreso->description}</td>
            <td>{$ingreso->primernombre} {$ingreso->segundonombre} {$ingreso->primerapellido} {$ingreso->segundoapellido}</td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>ENTIDAD</td>
            <td></td>
            <td></td>
            <td>MUNICIPIO</td>
            <td></td>
            <td>SEXO</td>
            <td>FECHA NACIMIENTO</td>
            <td>TELEFONO</td>
        </tr>
        <tr>
            <td>{$ingreso->eps}</td>
            <td></td>
            <td></td>
            <td>{$account->municipio_c}</td>
            <td></td>
            <td>{$account->genero_c}</td>
            <td>{$account->fechanacimiento_c}</td>
            <td>{$account->telefonopersonal_c}</td>
        </tr>
        <tr>
            <td>ESPECIALIDAD REQUERIDA</td>
            <td></td>
            <td></td>
            <td>ESPECIALIDAD REMISON</td>
            <td></td>
            <td>AREA REMISION</td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td>MEDICO RESPONSABLE</td>
            <td></td>
            <td></td>
            <td>NOMBRE DIAGNOSTICO</td>
            <td></td>
            <td></td>
            <td>DIAGNOSTICO</td>
            <td>RESPONSABLE</td>
        </tr>
        <tr>
            <td>{$ingreso->nombreespecialistaso} {$ingreso->apellidoespecialistaso}</td>
            <td></td>
            <td></td>
            <td>{$ingreso->codigo_diagnostico_c}</td>
            <td></td>
            <td></td>
            <td>{$ingreso->dxcodigodiagnostico_c}</td>
            <td></td>
        </tr>
    </table>
    <h3>TRAMITES</h3>
    <table border="0" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <td class="listViewThS1" align="center"><strong>RESPOSABLE HOSPITAL MARCO FIDEL SUAREZ</strong></td>
            <td class="listViewThS1" align="center"><strong>QUIEN CONTESTA</strong></td>
            <td class="listViewThS1" align="center"><strong>FECHA/HORA</strong></td>
            <td class="listViewThS1" align="center"><strong>RESPUESTA</strong></td>
            <td class="listViewThS1" align="center"><strong>TELEFONO</strong></td>
            <td class="listViewThS1" align="center"><strong>OBSERVACION</strong></td>
        </tr>
        {foreach name=outer  item=item from=$tramites}
				            
        <tr>
            <td align="left" width="" ><strong>{$item->created_by_name}</strong></td>
            <td align="left" width="" ><strong>{$item->con_quien_hablo_c}</strong></td>
            <td align="left" width="" ><strong>{$item->date_start}</strong></td>
            <td align="left" width="" ><strong>{$item->name}</strong></td>
            <td align="left" width="" ><strong>{$item->telefono_que_llamo_c}</strong></td>
            <td align="left" width="" ><strong>{$item->description}</strong></td>
        </tr>
        {/foreach}
    </table>   
    <h3>EGRESO</h3>
    <table border="0" cellpadding="10" cellspacing="0" width="100%">
        <tr>
            <td class="listViewThS1" align="center"><strong>CONTADOR</strong></td>
            <td class="listViewThS1" align="center"><strong>RESPONSABLE</strong></td>
            <td class="listViewThS1" align="center"><strong>QUIEN CONTESTA</strong></td>
            <td class="listViewThS1" align="center"><strong>FECHA/HORA</strong></td>
            <td class="listViewThS1" align="center"><strong>DESTINO</strong></td>
            <td class="listViewThS1" align="center"><strong>RESPUESTA</strong></td>
            <td class="listViewThS1" align="center"><strong>AMBULANCIAS</strong></td>
            <td class="listViewThS1" align="center"><strong>OBSERVACION</strong></td>
        </tr>
          {foreach name=outer  item=item from=$egreso}
        <tr>
            <td align="left" width=""><strong>{$item->name}</strong></td>
            <td align="left" width="" ><strong>{$item->created_by_name}</strong></td>
            <td align="left" width="" ><strong>{$item->funcionario_eps}</strong></td>
            <td align="left" width="" ><strong>{$item->date_entered}</strong></td>
            <td align="left" width="" ><strong>{$item->institucion_asign}</strong></td>
            <td align="left" width="" ><strong>{$item->funcionario_eps_dc_c}{$item->funcionario_eps}</strong></td>
            <td align="left" width="" ><strong>{$item->tipo_am}</strong></td>
            <td align="left" width="" ><strong>{$item->observaciones}</strong></td>
        </tr>
        {/foreach}
    </table> 
    {/if}
</div>
{literal}
<script>
Calendar.setup ({
			inputField : "end_date",
			form : "reportfm",
			ifFormat : "%Y/%m/%d %I:%M%P",
			daFormat : "%Y/%m/%d %I:%M%P",
			button : "end_date_trigger",
			singleClick : true,
			dateStr : "01/01/2015",
			startWeekday: 1,
			step : 1,
			weekNumbers:false
			});
    
Calendar.setup ({
			inputField : "start_date",
			form : "reportfm",
			ifFormat : "%Y/%m/%d %I:%M%P",
			daFormat : "%Y/%m/%d %I:%M%P",
			button : "start_date_trigger",
			singleClick : true,
			dateStr : "01/01/2015",
			startWeekday: 1,
			step : 1,
			weekNumbers:false
			});
</script>
{/literal}