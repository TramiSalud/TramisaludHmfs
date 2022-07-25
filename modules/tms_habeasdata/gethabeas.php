<?php

require_once("modules/tms_habeasdata/tms_habeasdata.php") ;
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');

$result = Array();

global $current_user;
global $db;

$user = $current_user->id;


if(!empty($user)) {
    $query = "SELECT id, `name`, nombre, cedula, usuarios
                FROM tms_habeasdata 
                WHERE estado = 'en_proceso'
                and DATEDIFF(NOW(), fecha) > 10
                AND usuarios NOT LIKE '%$user%'";
    $resultquery = $db->query($query);
    $i = 0;

    while ($row = $db->fetchByAssoc($resultquery)) {
        $result[$i] = $row;
        $id = $row['id'];
        $usu = $row['usuarios'];

        $usuarios = $usu . "$user,";
        $query = "UPDATE tms_habeasdata SET usuarios = '$usuarios', estado = 'en_proceso' WHERE id = '$id'";
        $execute = $db->query($query);
        $i++;
    }
    echo json_encode($result);
}
?>