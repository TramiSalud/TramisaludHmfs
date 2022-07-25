<?php

class ViewAsegurador_A3 extends SugarView {

    function ViewAsegurador_A3() {
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

            $field_headings = array('ASEGURADORES MAS GESTIONADOS', 'ANEXOS 3 CANTIDAD DE ANEXOS GESTIONADOS');

            $row = array();
            $rows = array();
            foreach ($field_headings as $heading) {
                $row[$heading] = $heading;
            }
            $rows['Headings'] = $row;



            $query = "SELECT 
            eps.name AS 'ASEGURADORES MAS GESTIONADOS',
            COUNT(eps_eps_id_c) AS 'ANEXOS 3 CANTIDAD DE ANEXOS GESTIONADOS'
        FROM
            gbia3_anexo3 a3
                LEFT JOIN
            eps_eps eps ON eps.id = a3.eps_eps_id_c
        WHERE
            a3.deleted = '0'";

            if (!empty($_REQUEST["fecha_inicio"]) && !empty($_REQUEST["fecha_final"]))
            {
                
                $query .= "AND DATE_FORMAT(DATE_SUB(a3.date_entered,INTERVAL + 5 HOUR),'%Y/%m/%d') BETWEEN '".$_REQUEST["fecha_inicio"]."' AND '".$_REQUEST["fecha_final"]."'";
            }

            $query .= "group by a3.eps_eps_id_c having count(eps_eps_id_c) > 1 order by count(eps_eps_id_c) desc limit 5";
        

            $result = $db->query($query);
            while ($row = $db->fetchByAssoc($result)) {
                //var_dump($row);
                $rows[] = $row;
            }

            $filename = 'ASEGURADORES_A3_MASCOMUNES_'.date("dmY").".csv";
            $this->do_list_csv_output($rows, $filename);


        }
        else
        {

            ?>
            <h1>Reporte - Asegurador Más Gestionado Anexo 3</h1>



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
                                <input type="hidden" name="action" value="asegurador_a3" />
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
