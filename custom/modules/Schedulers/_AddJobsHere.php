<?php

$job_strings[] = 'envio_de_anexos';
$job_strings[] = 'envio_de_correos_anexo_2';
$job_strings[] = 'envio_de_correos_anexo_3';
$job_strings[] = 'envio_de_correos_anexo_3_no_pos';
$job_strings[] = 'rebotes_de_correo';
$job_strings[] = 'limpiar_rebotes';
$job_strings[] = 'clean_job_queue';
$job_strings[] = 'envio_de_correos_anexo_2_4h';
$job_strings[] = 'envio_de_correos_anexo_3_4h';

function clean_job_queue() {
	require_once('custom/modules/Schedulers/Tareas/clean_job_queue.php');
	$clean_job_queue = new clean_job_queue();
	return true;
}

function limpiar_rebotes() {
	require_once('custom/modules/Schedulers/Tareas/limpiar_rebotes.php');
	$rebotes = new rebotes_de_correo();

	return true;
}

function rebotes_de_correo() {
	require_once('custom/modules/Schedulers/Tareas/rebotes_de_correo.php');
	$rebotes = new rebotes_de_correo();

	return true;
}

function envio_de_anexos() {

	require_once('custom/modules/Schedulers/Tareas/envio_de_anexos.php');
	$envios = new envio_de_anexos();

	return true;
}

function envio_de_correos_anexo_2() {

	require_once('custom/modules/Schedulers/Tareas/envio_de_correos_anexo_2.php');
	$envioA2 = new envio_de_correos_anexo_2();

	return true;
}

function envio_de_correos_anexo_3() {

	require_once('custom/modules/Schedulers/Tareas/envio_de_correos_anexo_3.php');
	$envioA3 = new envio_de_correos_anexo_3();

	return true;
}

function envio_de_correos_anexo_3_no_pos() {

	require_once('custom/modules/Schedulers/Tareas/envio_de_correos_anexo_3_no_pos.php');
	$envioA3NP = new envio_de_correos_anexo_3_no_pos();

	return true;
}

function envio_de_correos_anexo_2_4h() {

	require_once('custom/modules/Schedulers/Tareas/envio_de_correos_anexo2_each4h.php');
	$envioA2 = new envio_de_correos_anexo2_each4h();

	return true;
}

function envio_de_correos_anexo_3_4h() {

	require_once('custom/modules/Schedulers/Tareas/envio_de_correos_anexo3_each4h.php');
	$envioA3 = new envio_de_correos_anexo3_each4h();

	return true;
}

?>
