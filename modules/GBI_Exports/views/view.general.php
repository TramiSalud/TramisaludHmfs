<?php

class ViewGeneral extends SugarView {

    function ViewGeneral() {
        parent::SugarView();
    }

    function do_list_csv_output($rows, $filename)
    {
        header("Content-type: application/octet-stream");
        //header("content-type:application/csv;charset=UTF-8");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Transfer-Encoding: binary");
        //header('Content-Encoding: UTF-8');
        echo "\xEF\xBB\xBF";
        if(strpos($_SERVER['HTTP_USER_AGENT'], 'MSIE')) {
            // IE cannot download from sessions without a cache
            header('Cache-Control: public');
        }
        foreach (array_keys($rows) as $key) {
            $row = $rows[$key];
            echo $this->list_row_to_csv($row);
        }
    }

    //function list_row_to_csv(array $fields, $delimiter = ',', $enclosure = '"', $mysql_null = false) {
    function list_row_to_csv(array $fields, $delimiter = ',', $enclosure = '"', $mysql_null = false) {
        $delimiter_esc = preg_quote($delimiter, '/');
        $enclosure_esc = preg_quote($enclosure, '/');

        $output = array();
        foreach ($fields as $field) {
            if ($field === null && $mysql_null) {
                $output[] = 'NULL';
                continue;
            }

            $output[] = preg_match("/(?:${delimiter_esc}|${enclosure_esc}|\s)/", $field) ? (
                $enclosure . str_replace($enclosure, $enclosure . $enclosure, $field) . $enclosure
            ) : $field;
        }

        return (join($delimiter, $output) . "\n");
    }

    function display() {
        global $db;
        global $currentModule;
        global $current_user;
        global $app_list_strings;

        if (!empty($_REQUEST['export_trigger'])) {
            if (!empty($_REQUEST['fecha_inicio'])) $fecha_inicio = $_REQUEST['fecha_inicio'];
            if (!empty($_REQUEST['fecha_final']))  $fecha_final = $_REQUEST['fecha_final'];

            $this->options['show_footer']=false;

            $field_headings = array('ANEXOS 1 GESTIONANDOS', 'ANEXOS 1 ENVIADOS', 'GENERAL ANEXOS 1 ACTUALMENTE NO ENVIADOS', 'ANEXOS 2 GESTIONADOS', 'ANEXOS 2 ENVIADOS', 'GENERAL ANEXOS 2 ACTUALMENTE NO ENVIADOS', 'DIAGNOSTICOS CIE10 1 REGISTRADOS ANEXO 2', 'DIAGNOSTICOS CIE10 2 REGISTRADOS ANEXO 2', 'DIAGNOSTICOS CIE10 3 REGISTRADOS ANEXO 2', 'DIAGNOSTICOS CIE10 4 REGISTRADOS ANEXO 2', 'ANEXOS 3 GESTIONADOS', 'ANEXOS 3 ENVIADOS', 'GENERAL ANEXOS 3 ACTUALMENTE NO ENVIADOS', 'DIAGNOSTICOS CIE10 1 REGISTRADOS ANEXO 3', 'DIAGNOSTICOS CIE10 2 REGISTRADOS ANEXO 3', 'DIAGNOSTICOS CIE10 3 REGISTRADOS ANEXO 3', 'ANEXOS 4 GESTIONADOS', 'ANEXOS 9 GESTIONANDOS', 'GENERAL DIAGNOSTICOS CIE10 1 REGISTRADOS ANEXO 9', 'GENERAL DIAGNOSTICOS CIE10 2 REGISTRADOS ANEXO 9', 'GENERAL DIAGNOSTICOS CIE10 3 REGISTRADOS ANEXO 9', 'PACIENTES CREADOS', 'DOCUMENTOS GESTIONADOS');

            $row = array();
            $rows = array();
            foreach ($field_headings as $heading) {
                $row[$heading] = $heading;
            }
            $rows['Headings'] = $row;



            $query = "SELECT
	    COUNT(*) AS 'ANEXOS 1 GESTIONANDOS',
	    (select count(*) FROM basa1_anexo1_cstm where correo_enviado_c = '1' AND DATE_FORMAT(DATE_SUB(basa1_anexo1_cstm.fecha_envio_correo_c,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'ANEXOS 1 ENVIADOS',
	    (select count(*) FROM basa1_anexo1_cstm where correo_enviado_c = '0') AS 'GENERAL ANEXOS 1 ACTUALMENTE NO ENVIADOS',
	    (SELECT  COUNT(*) FROM  gbian_anexo2 WHERE deleted = '0' AND DATE_FORMAT(DATE_SUB(gbian_anexo2.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'ANEXOS 2 GESTIONADOS',
	    (select count(*) from gbian_anexo2_cstm where correo_enviado_c = '1' AND DATE_FORMAT(DATE_SUB(gbian_anexo2_cstm.fecha_envio_correo_c,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'ANEXOS 2 ENVIADOS',
	    (select count(*) from gbian_anexo2_cstm where correo_enviado_c = '0') AS 'GENERAL ANEXOS 2 ACTUALMENTE NO ENVIADOS',
	    (select count(cie_cie10_id3_c) from gbian_anexo2_cstm where gbian_anexo2_cstm.cie_cie10_id3_c is not null and DATE_FORMAT(DATE_SUB(gbian_anexo2_cstm.fecha_ingreso_c,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') as 'DIAGNOSTICOS CIE10 1 REGISTRADOS ANEXO 2',
	    (select count(cie_cie10_id_c) from gbian_anexo2 where gbian_anexo2.cie_cie10_id_c is not null AND DATE_FORMAT(DATE_SUB(gbian_anexo2.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') as 'DIAGNOSTICOS CIE10 2 REGISTRADOS ANEXO 2',
	    (select count(cie_cie10_id1_c) from gbian_anexo2 where gbian_anexo2.cie_cie10_id1_c is not null AND DATE_FORMAT(DATE_SUB(gbian_anexo2.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') as 'DIAGNOSTICOS CIE10 3 REGISTRADOS ANEXO 2',
	    (select count(cie_cie10_id2_c) from gbian_anexo2 where gbian_anexo2.cie_cie10_id2_c is not null AND DATE_FORMAT(DATE_SUB(gbian_anexo2.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') as 'DIAGNOSTICOS CIE10 4 REGISTRADOS ANEXO 2',
	    (SELECT COUNT(*) FROM gbia3_anexo3  WHERE  deleted = '0' AND DATE_FORMAT(DATE_SUB(gbia3_anexo3.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'ANEXOS 3 GESTIONADOS',
	    (select count(*) from gbia3_anexo3_cstm where correo_enviado_c = '1' AND DATE_FORMAT(DATE_SUB(gbia3_anexo3_cstm.fecha_envio_correo_c,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'ANEXOS 3 ENVIADOS',
	    (select count(*) from gbia3_anexo3_cstm where correo_enviado_c = '0') AS 'GENERAL ANEXOS 3 ACTUALMENTE NO ENVIADOS',
	    (select count(cie_cie10_id_c) from gbia3_anexo3 where gbia3_anexo3.cie_cie10_id_c is not null AND DATE_FORMAT(DATE_SUB(gbia3_anexo3.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'DIAGNOSTICOS CIE10 1 REGISTRADOS ANEXO 3',
	    (select count(cie_cie10_id1_c) from gbia3_anexo3 where gbia3_anexo3.cie_cie10_id1_c is not null AND DATE_FORMAT(DATE_SUB(gbia3_anexo3.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'DIAGNOSTICOS CIE10 2 REGISTRADOS ANEXO 3',
	    (select count(cie_cie10_id2_c) from gbia3_anexo3 where gbia3_anexo3.cie_cie10_id2_c is not null AND DATE_FORMAT(DATE_SUB(gbia3_anexo3.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'DIAGNOSTICOS CIE10 3 REGISTRADOS ANEXO 3',
	    (select count(*) FROM gbia4_anexo4 WHERE deleted = '0' AND DATE_FORMAT(DATE_SUB(gbia4_anexo4.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'ANEXOS 4 GESTIONADOS',
	    (select count(*) FROM gbi_anexo9 WHERE deleted = '0' AND DATE_FORMAT(DATE_SUB(gbi_anexo9.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'ANEXOS 9 GESTIONANDOS',
	    (select count(cie_cie10_id_c) from gbi_anexo9_cstm where gbi_anexo9_cstm.cie_cie10_id_c is not null) AS 'GENERAL DIAGNOSTICOS CIE10 1 REGISTRADOS ANEXO 9',
	    (select count(cie_cie10_id1_c) from gbi_anexo9_cstm where gbi_anexo9_cstm.cie_cie10_id1_c is not null) AS 'GENERAL DIAGNOSTICOS CIE10 2 REGISTRADOS ANEXO 9',
	    (select count(cie_cie10_id2_c) from gbi_anexo9_cstm where gbi_anexo9_cstm.cie_cie10_id2_c is not null) AS 'GENERAL DIAGNOSTICOS CIE10 3 REGISTRADOS ANEXO 9',
	    (select count(*) from accounts where deleted = '0' AND DATE_FORMAT(DATE_SUB(accounts.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'PACIENTES CREADOS',
	    (select count(*) from documents where deleted = '0' AND DATE_FORMAT(DATE_SUB(documents.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."') AS 'DOCUMENTOS GESTIONADOS'
	FROM
	    basa1_anexo1
	WHERE
	    deleted = '0'";

            if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
            {
                
                $query .= "AND DATE_FORMAT(DATE_SUB(basa1_anexo1.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."'";
            }

            $result = $db->query($query);
            while ($row = $db->fetchByAssoc($result)) {
                //var_dump($row);
                $rows[] = $row;
            }

            $filename = 'GESTION_GENERAL_PLATAFORMATRAMISALUD_'.date("dmY").".csv";
            $this->do_list_csv_output($rows, $filename);


        }
        else
        {

            ?>
            <h1>Reporte - Gestión General Plataforma Tramisalud</h1>



            <p>
                <div>
                <table border="0" cellpadding="0" cellspacing="0" width="730"><tr>
                    <tr>
                        <td class="tabForm">
                            <script>
                                function validateForm() {
                                    var date1 = document.forms['reportfm']['fecha_inicio'].value;
                                    if(date1 == null || date1 == ""){
                                        alert("Debe ingresar la fecha de inicio");
                                        return false;
                                    }

                                    var date2 = document.forms['reportfm']['fecha_final'].value;
                                    if(date2 == null || date2 == ""){
                                        alert("Debe ingresar la fecha final");
                                        return false;
                                    }
                                }
                            </script>
                            <form id="reportfm" name="reportfm" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get" onsubmit="return validateForm()">
                                <input type="hidden" name="module" value="<?php echo $currentModule; ?>">
                                <input type="hidden" name="action" value="general" />
                                </br>&nbsp;

                                <strong>Fecha de inicio:</strong>
                                <input class="date_input" autocomplete="off" name="fecha_inicio" id="fecha_inicio" value="" title="" tabindex="0" size="11" maxlength="10" type="text">
                                <img src="themes/Sugar5/images/jscalendar.gif?v=RUobVqiTBjwNdouVd8IaYA" alt="Introducir Fecha" style="position:relative; top:6px" id="fecha_inicio_c_trigger" border="0">
                                <script type="text/javascript">
                                    Calendar.setup ({
                                        inputField : "fecha_inicio",
                                        form : "reportfm",
                                        ifFormat : "%Y/%m/%d",
                                        daFormat : "%Y/%m/%d",
                                        button : "fecha_inicio_c_trigger",
                                        singleClick : true,
                                        dateStr : "",
                                        startWeekday: 0,
                                        step : 1,
                                        weekNumbers:false
                                    }
                                    );
                                </script>
                                <strong>Fecha de Final:</strong>
                                <input class="date_input" autocomplete="off" name="fecha_final" id="fecha_final" value="" title="" tabindex="0" size="11" maxlength="10" type="text">
                                <img src="themes/Sugar5/images/jscalendar.gif?v=RUobVqiTBjwNdouVd8IaYA" alt="Introducir Fecha" style="position:relative; top:6px" id="fecha_final_c_trigger" border="0">
                                <script type="text/javascript">
                                    Calendar.setup ({
                                        inputField : "fecha_final",
                                        form : "reportfm",
                                        ifFormat : "%Y/%m/%d",
                                        daFormat : "%Y/%m/%d",
                                        button : "fecha_final_c_trigger",
                                        singleClick : true,
                                        dateStr : "",
                                        startWeekday: 0,
                                        step : 1,
                                        weekNumbers:false
                                    }
                                    );
                                </script>

                                <input class="button" type="submit" name="submit" value="Exportar" align="bottom" style="margin: 5px; vertical-align: middle; ">
                                <input type="hidden" name="export_trigger" value="yes">
                            </form>
                        </td>
                    </tr>
                </table>
                </div>
            </p>
            <?php
        }

    } // end of display
} // end of class
