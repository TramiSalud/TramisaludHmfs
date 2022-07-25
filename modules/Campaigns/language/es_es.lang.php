<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Public License Version
 * 1.1.3 ("License"); You may not use this file except in compliance with the
 * License. You may obtain a copy of the License at http://www.sugarcrm.com/SPL
 * Software distributed under the License is distributed on an "AS IS" basis,
 * WITHOUT WARRANTY OF ANY KIND, either express or implied.  See the License
 * for the specific language governing rights and limitations under the
 * License.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *    (i) the "Powered by SugarCRM" logo and
 *    (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * The Original Code is: SugarCRM Open Source
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.16 2010/10/31 16:22:58 aserrano Exp $
 * Source: SugarCRM 6.1.0RC2
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_FROM_ADDR' => 'Dirección de Remitente: ',
  'LBL_REPLY_ADDR' => 'Dirección de "Responder a": ',
  'LBL_REPLY_NAME' => 'Nombre de "Responder a": ',
  'LBL_MODULE_NAME' => 'Campañas',
  'LBL_MODULE_TITLE' => 'Campañas: Inicio',
  'LBL_NEWSLETTER_TITLE'=>'Campañas: Boletines de noticias',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Campañas',
  'LBL_LIST_FORM_TITLE' => 'Lista de Campañas',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Lista de Boletines de noticias',
  'LBL_CAMPAIGN_NAME' => 'Nombre:',
  'LBL_CAMPAIGN' => 'Campaña:',
  'LBL_NAME' => 'Nombre: ',
  'LBL_INVITEE' => 'Contactos',
  'LBL_LIST_CAMPAIGN_NAME' => 'Campaña',
  'LBL_LIST_STATUS' => 'Estado',
  'LBL_LIST_TYPE' => 'Tipo',
  'LBL_LIST_START_DATE' => 'Fecha Inicio',
  'LBL_LIST_END_DATE' => 'Fecha Fin',
  'LBL_DATE_ENTERED' => 'Fecha Creación',
  'LBL_DATE_MODIFIED' => 'Fecha Modificación',
  'LBL_MODIFIED' => 'Modificada por: ',
  'LBL_CREATED' => 'Creada por: ',
  'LBL_TEAM' => 'Equipo: ',
  'LBL_ASSIGNED_TO' => 'Asignada a: ',
  'LBL_ASSIGNED_TO_ID' => 'Asignada a: ',
  'LBL_ASSIGNED_TO_NAME' => 'Asignada a: ',
  'LBL_CAMPAIGN_START_DATE' => 'Fecha Inicio: ',
  'LBL_CAMPAIGN_END_DATE' => 'Fecha Fin: ',
  'LBL_CAMPAIGN_STATUS' => 'Estado: ',
  'LBL_CAMPAIGN_BUDGET' => 'Presupuesto: ',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Coste Esperado: ',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Coste Real: ',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Ingresos Esperados: ',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Impresiones: ',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Coste Por Impresión: ',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Coste Por Clic en Banner: ',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' =>'Oportunidades Ganadas:',
  'LBL_CAMPAIGN_TYPE' => 'Tipo: ',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Objetivo: ',
  'LBL_CAMPAIGN_CONTENT' => 'Descripción: ',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Días Restantes',
  'LNK_NEW_CAMPAIGN' => 'Crear Campaña (Clásica)',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Creación de Campaña (Asistente)',
  'LNK_CAMPAIGN_LIST' => 'Ver Campañas',
  'LNK_NEW_PROSPECT' => 'Crear Público Objetivo',
  'LNK_PROSPECT_LIST' => 'Ver Público Objetivo',
  'LNK_NEW_PROSPECT_LIST' => 'Crear Lista de Público Objetivo',
  'LNK_PROSPECT_LIST_LIST' => 'Ver Listas de Público Objetivo',
  'LBL_MODIFIED_BY' => 'Modificada por: ',
  'LBL_CREATED_BY' => 'Creada por: ',
  'LBL_DATE_CREATED' => 'Fecha Creación: ',
  'LBL_DATE_LAST_MODIFIED' => 'Fecha Modificación: ',
  'LBL_TRACKER_KEY' => 'Seguimiento: ',
  'LBL_TRACKER_URL' => 'URL de Seguimiento: ',
  'LBL_TRACKER_TEXT' => 'Texto de Enlace de Seguimiento: ',
  'LBL_TRACKER_COUNT' => 'Contador de Seguimiento: ',
  'LBL_REFER_URL' => 'URL de Redirección de Seguimiento: ',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campañas',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Campañas por Email',
  'LBL_NEW_FORM_TITLE' => 'Nueva Campaña',
  'LBL_TRACKED_URLS'=>'URLs de Sequimiento',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE'=>'URLs de Seguimiento',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE'=>'Cuentas',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Lista de Público Objetivo',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Marketing por EMail',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Nueva Plantilla de Email',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Ver Plantillas de Email',
  'LBL_TRACK_BUTTON_TITLE' => 'Ver Estado',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_TRACK_BUTTON_LABEL' => 'Ver Estado',
  'LBL_QUEUE_BUTTON_TITLE' => 'Enviar Emails',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_QUEUE_BUTTON_LABEL' => 'Enviar Emails',
  'LBL_TEST_BUTTON_TITLE' => 'Enviar Prueba',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TEST_BUTTON_LABEL' => 'Enviar Prueba',
  'LBL_COPY_AND_PASTE_CODE' => 'O copiar y pegar el siguiente código HTML en una página existente',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Ver Detalles',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Ver Detalles',
  'LBL_DEFAULT' => 'Todas las Listas de Público Objetivo',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Cola de Mensajes',
  'LBL_LOG_ENTRIES_TITLE' => 'Respuestas',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Mensaje Enviado/Intentado',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Mensajes Rebotados,Otras causas',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Mensajes Rebotados,Email no válido',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Enlace',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Mensaje Visto',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Descartados',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Clientes Portenciales Creados',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE'=>'Clientes Potenciales',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE'=>'Oportunidades',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contactos Creados',
  'LBL_BACK_TO_CAMPAIGNS' => 'Volver a Campañas',
  'ERR_NO_EMAIL_MARKETING' => 'Debe haber al menos un mensaje de Marketing por Email asociado con la campaña.',
  'ERR_NO_TARGET_LISTS' => 'Debe haber al menos una Lista de Público Objetivo asociada con la campaña.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Debe haber al menos una Lista de Público Objetivo de tipo Pruebas asociada con la campaña.',
  'ERR_SENDING_NOW' => 'Los mensajes están siendo enviados, por favor inténtelo de nuevo más tarde.',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'No se ha definido un mensaje de Marketing por Email para esta lista de público objetivo',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Se han definido múltiples mensajes de Marketing por Email para esta lista de público objetivo',
  'ERR_FIX_MESSAGES' => 'Por favor, corrija los siguientes errores antes de proceder',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_TRACK_ROI_BUTTON_LABEL' =>'Ver ROI', // Es más usado ROI que RSI (Retorno Sobre la Inversión)
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Eliminar Entradas de Pruebas',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Eliminar Entradas de Pruebas',
  'LBL_TRACK_DELETE_CONFIRM' => 'Esta opción eliminará las entradas del registro creadas por el juego de pruebas. ¿Desea continuar?',
  'ERR_NO_MAILBOX'=>"Los siguientes mensajes de marketing no tiene una cuenta de correo asociada.<BR>Por favor, corrija este problema antes de continuar.",
  'LBL_LIST_TO_ACTIVITY'=>'Ver Estado',
  'LBL_CURRENCY_ID'=>'ID Moneda',
  'LBL_CURRENCY'=>'Moneda:',
  'LBL_ROLLOVER_VIEW' => 'Mueva el cursor sobre una barra para más detalle.',
  'LBL_TARGETED' => 'Objetivos',
  'LBL_TOTAL_TARGETED' => 'Total Objetivos',
  'LBL_CAMPAIGN_FREQUENCY'=>'Frecuencia:',
  'LBL_NEWSLETTERS'=>'Ver Boletines de Noticias',
  'LBL_NEWSLETTER'=>'Boletín de Noticias',
  'LBL_NEWSLETTER_FORENTRY'=>'Boletín de Noticias',
  'LBL_MORE_DETAILS' => 'Más Detalles',
  'LBL_CREATE_NEWSLETTER'=>'Nuevo Boletín de Noticias',
  'LBL_LIST_NAME' => 'Nombre',  
  'LBL_STATUS_TEXT' =>  'Estado:' ,
  'LBL_FROM_MAILBOX_NAME'=>'Usar Cuenta de Correo:',
  'LBL_FROM_NAME' => 'Nombre Remitente: ',
  'LBL_START_DATE_TIME' => 'Fecha y Hora de Inicio: ',
  'LBL_DATE_START' => 'Fecha de Inicio ',
  'LBL_TIME_START' => 'Hora de Inicio ',
  'LBL_TEMPLATE' => 'Plantilla de Email: ',
  'LBL_CREATE_EMAIL_TEMPLATE'=> 'Crear',
  'LBL_MESSAGE_FOR' => 'Enviar Este Mensaje A:',
  'LBL_FINISH' => 'Finalizar',  
  'LBL_ALL_PROSPECT_LISTS'=>'Todas las Listas de Público Objetivo en la Campaña.',
  'LBL_EDIT_EMAIL_TEMPLATE'=>   'Editar',
  'LBL_EMAIL_SETUP_WIZARD'=>   'Configurar Email',
  'LBL_DIAGNOSTIC_WIZARD'=>   'Ver Diagnósticos',
  'LBL_ALREADY_SUBSCRIBED_HEADER'=>'Boletines de Noticias Suscritos',
  'LBL_UNSUBSCRIBED_HEADER'=>'Boletines de Noticias Disponibles/Sin Suscripción',
  'LBL_UNSUBSCRIBED_HEADER_EXPL'=>'Al mover el boletín de noticias a la lista de Boletines de Noticias Disponibles/Sin Suscripción añadirá el contacto a la Lista de Sin Suscripción para este boletín de noticias.  El contacto no será eliminado de la Lista de Suscripción o Lista de Público Objetivo original.', 
  'LBL_FILTER_CHART_BY'=>'Filtrar Gráfico Por:',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE'=>'Administrar Subscripciones',
  'LBL_MARK_AS_SENT' =>'Marcar Como Enviado',
  'LBL_DEFAULT_LIST_NOT_FOUND'=>'Lista de público objetivo por defecto no encontrada',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND'=>'No se han encontrado entradas',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Las entradas han sido procesadas',
  //newsletter wizard
  'LBL_EDIT_TRACKER_NAME'=>'Nombre de Seguimiento:',
  'LBL_EDIT_TRACKER_URL'=>'URL de Seguimiento:', 
  'LBL_EDIT_OPT_OUT_'=>'¿Enlace para rehusar?',
  'LBL_EDIT_OPT_OUT'=>'Enlace para rehusar:',
  'LBL_UNSUBSCRIPTION_LIST_NAME'=>'Nombre de Lista de No suscripción:',
  'LBL_SUBSCRIPTION_LIST_NAME'=>'Nombre de Lista de Suscripción:',
  'LBL_TEST_LIST_NAME'=>'Nombre de Lista de Prueba:',
  'LBL_UNSUBSCRIPTION_TYPE_NAME'=>'No suscripción',
  'LBL_SUBSCRIPTION_TYPE_NAME'=>'Suscripción',
  'LBL_TEST_TYPE_NAME'=>'Pruebas',  
  'LBL_UNSUBSCRIPTION_LIST'=>'Lista de No suscripción',
  'LBL_SUBSCRIPTION_LIST'=>'Lista de Suscripción',
   'LBL_MRKT_NAME' => 'Nombre', 
  'LBL_TEST_LIST'=>'Lista de Pruebas',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Rellene los campos requerido para ayudar a identificar la campaña.',  
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Introduzca el presupuesto para calcular el ROI.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Cada boletín de noticias debe tener tres listas de público objetivo (Suscripción, No suscripción, y Pruebas). Puede asignar una lista existente de público objetivo. Si no, se creará una lista vacía al guardar el boletín de noticias.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Seleccione o cree una lista de público objetivo para utilizar con su campaña.  Esta lista se usará para enviar emails con sus mensajes de marketing.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'O cree una nueva usando el siguiente formulario:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Defina aquí un URL de seguimiento para utilizar con esta campaña. Debe introducir tanto el nombre como el URL para crear el seguimiento.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Rellene el siguiente formulario para crear una instancia de email para su boletín de noticias.  Esto le permitirá especificar cuándo y cómo su boletín de noticias debería ser distribuido.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Éste es el último paso del proceso.  Elija si quiere enviar una prueba, planificar la distribución de su boletín de noticias, o simplemente guardar su trabajo e ir al resumen.',
  'LBL_HOME_START_MESSAGE' => 'Seleccione el tipo de Campaña que desea crear.',    
  'LBL_WIZARD_LAST_STEP_MESSAGE'=> '             Ya está en el último paso.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE'=>'             Ya está en el primer paso.',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Encabezado de la Campaña',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Presupuesto de la Campaña',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'URLs de seguimiento de la Campaña ',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Información de Suscripción',
  'LBL_WIZ_MARKETING_TITLE' => 'Email de Marketing',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Enviar Email',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Probar Email',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Resumen', 
  'LBL_NAVIGATION_MENU_GEN1' => 'Encabezado de la Campaña',
  'LBL_NAVIGATION_MENU_GEN2' => 'Presupuesto',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Seguimientos',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Marketing',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Enviar Email',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Subscripciones',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Resumen',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' =>  'Esto definirá la lista de público objetivo de tipo Suscripción para esta campaña.<br>  Esta lista de público objetivo se usará para enviar los emails de esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo No suscripción para esta campaña.  <br>Esta lista de público objetivo contendrá los nombres de las personas que han decidido no participar en su campaña y no deberían ser contactados por email. <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Esto definirá la lista de público objetivo de tipo Pruebas para esta campaña.  <br>Esta lista de público objetivo se usará para enviar emails de pruebas para esta campaña.  <br>Si no ha preparado previamente una lista, el sistema creará para usted una lista vacía.',
  'LBL_TRACKERS' => 'Seguimientos',
  'LBL_ADD_TRACKER' => 'Nuevo Seguimiento',
  'LBL_ADD_TARGET' => 'Añadir',
  'LBL_CREATE_TARGET'=> 'Crear',
  'LBL_SELECT_TARGET'=> 'Usar Lista de Público Objetivo existente',
  'LBL_REMOVE' => ' quit',
  'LBL_CONFIRM' => 'Iniciar',
  'LBL_START' => 'Iniciar',
  'LBL_TOTAL_ENTRIES' => 'Entradas',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Guardar el trabajo y proceder con el Email de Marketing',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Guardar Opciones',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => '¿Desea guardar toda la información y salir?',  
  'LBL_CONFIRM_SEND_SAVE' => 'Está a punto de terminar y proceder con la página de Envío de Email de Campaña.  ¿Desea guardar los cambios y continuar?',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Boletín de noticias: ',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editar boletín de noticias: ',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editar Campaña: ',
  'LBL_SEND_AS_TEST' => 'Enviar Marketing por Email como Pruebas',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Finalizar',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Guardar y Continuar', 
  'LBL_TARGET_LISTS' => 'Listas de Público Objetivo',  
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'No puede enviar un email de marketing hasta que su lista de suscriptores tenga al menos una entrada.  Puede rellenar su lista tras finalizar.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'No puede enviar un email de marketing hasta que su lista de público objetivo tenga al menos una entrada.  Puede rellenar su lista tras finalizar.',
  'LBL_NO_TARGETS_WARNING' => 'No puede enviar un email de marketing hasta que su campaña tenga al menos una lista de público objetivo.',
  'LBL_NONE' => 'ninguna creada',
  'LBL_CAMPAIGN_WIZARD' => 'Asistente de Campañas',
  'LBL_EMAIL' =>'Email',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Campaña no basada en email',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Tipo de Campaña',
  'LBL_TARGET_LIST' => 'Lista de Público Objetivo',
  'LBL_TARGET_TYPE' => 'Tipo de Lista de Público Objetivo',
  'LBL_TARGET_NAME' => 'Nombre de Lista de Público Objetivo',
  'LBL_EMAILS_SCHEDULED' => 'Emails Planificados',
  'LBL_TEST_EMAILS_SENT' => 'Probar Emails Enviados',
  'LBL_USERS_CANNOT_OPTOUT' => 'Los Usuarios de Sistema no pueden optar por no recibir emails.',
  'LBL_ELECTED_TO_OPTOUT' => 'Ha elegido optar por no recibir emails.',
  'LBL_COPY_OF' => 'Copia de ',
  'LBL_SAVED_SEARCH' => 'Búsquedas y Diseños Guardados',
  //email setup wizard
  'LBL_WIZ_FROM_NAME'                         => 'Nombre del Remitente:',  
  'LBL_WIZ_FROM_ADDRESS'                      => 'Dirección del Remitente:',
  'LBL_EMAILS_PER_RUN'                        => 'Número de emails enviados por lote:',
  'LBL_CUSTOM_LOCATION'                       => 'Definida por el Usuario',
  'LBL_DEFAULT_LOCATION'                      => 'Por Defecto',  
  'ERR_INT_ONLY_EMAIL_PER_RUN'                => 'Sólo se permiten valores enteros para el Número de emails enviados por lote',
  'LBL_LOCATION_TRACK'                        => 'Localización de los archivos de seguimiento de la campaña (como campaign_tracker.php):',
  'LBL_MAIL_SENDTYPE'                         => 'Agente de Transferencia de Correo (MTA):',
  'LBL_MAIL_SMTPAUTH_REQ'                     => '¿Utilizar Autenticación SMTP?',
  'LBL_MAIL_SMTPPASS'                         => 'Contraseña SMTP:',
  'LBL_MAIL_SMTPPORT'                         => 'Puerto SMTP',
  'LBL_MAIL_SMTPSERVER'                       => 'Servidor SMTP',
  'LBL_MAIL_SMTPUSER'                         => 'Usuario SMTP',
  'LBL_EMAIL_SETUP_WIZARD_TITLE'              => 'Configuración de Email para Campañas',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE'   => 'Valor de site_url en Config.php',
  'LBL_NOTIFY_TITLE'                          => 'Opciones de Notificación por Email',
  'LBL_MASS_MAILING_TITLE'                    => 'Opciones de Envío de Correo Masivo',
  'LBL_SERVER_TYPE'                           => 'Protocolo del Servidor de Correo',
  'LBL_SERVER_URL'                            => 'Dirección del Servidor de Correo',
  'LBL_LOGIN'                                 => 'Nombre de Usuario',
  'LBL_PORT'                                  => 'Puerto del Servidor de Correo',
  'LBL_MAILBOX_NAME'                          => 'Nombre de Cuenta de Correo:',
  'LBL_PASSWORD'                              => 'Contraseña',
  'LBL_MAILBOX_DEFAULT'                       => 'INBOX',
  'LBL_MAILBOX'                               => 'Carpeta Monitorizada',
  'LBL_NAVIGATION_MENU_SETUP'                 => 'Configuración de Email',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX'           => 'Nueva Cuenta de Correo',
  'LBL_NAVIGATION_MENU_SUMMARY'               => 'Resumen',
  'LBL_MAILBOX_CHECK_WIZ_GOOD'                => 'Se han detectado cuentas de correo con gestión de rebote de correo.  No necesita crear una nueva, pero puede hacerlo a continuación si aun así lo desea.',
  'LBL_MAILBOX_CHECK_WIZ_BAD'                 => 'No se ha detectado ninguna cuenta de correo con gestión de rebote de correo. Por favor, cree una nueva a continuación.',
  'LBL_CAMP_MESSAGE_COPY'                     => 'Guardar copias de los mensajes de la campaña:',
  'LBL_CAMP_MESSAGE_COPY_DESC'                => '¿Desea guardar copias completas de <bold>CADA</bold> mensaje de email enviado durante todas las campañas?  <bold>Se recomienda el valor por defecto de no hacerlo</bold>.  Si elige no, sólo se guardará la plantilla enviada y las variables para recrear el mensaje individual.',
  'LBL_YES'                                   => 'Sí',
  'LBL_NO'                                    => 'No',
  'LBL_FROM_ADDR'                             => 'Dirección del Remitente',    
  'LBL_DEFAULT_FROM_ADDR'                     => 'Por defecto: ',
  'LBL_EMAIL_SETUP_DESC'                      => 'Rellene el siguiente formulario para modificar su configuración del sistema de forma que puedan enviarse los emails de la campaña.',
  'LBL_CREATE_MAILBOX'                        => 'Crear Nueva Cuenta de Correo',
  'LBL_SSL_DESC'                              => 'Si su servidor de correo soporta conexiones seguras de sockets (SSL), habilitar esta opción forzará conexiones SSL al importar el correo.',
  'LBL_SSL'                                   => 'Usar SSL',
//campaign diagnostics
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campaña puede no tener el comportamiento deseado y sus emails puede que no sean enviados por las siguientes razones:',
  'LBL_CAMPAIGN_DIAGNOSTICS'  => 'Diagnósticos de Campaña',
  'LBL_DIAGNOSTIC'            => 'Diagnóstico',
  'LBL_MAILBOX_CHECK1_GOOD'   => ' Cuentas de correo con gestión de rebote detectadas:',
  'LBL_MAILBOX_CHECK1_BAD'    => 'No se han detectado cuentas de correo con gestión de rebote.',
  'LBL_MAILBOX_CHECK2_GOOD'   => ' Las opciones de E-mail han sido configuradas:',  
  'LBL_MAILBOX_CHECK2_BAD'    => 'Por favor, configure la dirección de email de su sistema. Las opciones de E-mail no han sido configuradas.',    
  'LBL_SCHEDULER_CHECK_GOOD' => 'Se han detectado Planificadores',
  'LBL_SCHEDULER_CHECK_BAD' =>   'No se han detectado Planificadores',
  'LBL_SCHEDULER_CHECK1_BAD'  => 'No se ha configurado el Planificador para procesar los Emails Rebotados de Campaña.',
  'LBL_SCHEDULER_CHECK2_BAD'  => 'No se ha configurado el Planificador para procesar los Emails de Campaña.',  
  'LBL_SCHEDULER_NAME' =>   'Planificador',
  'LBL_SCHEDULER_STATUS' =>   'Estado',
  'LBL_MARKETING_CHECK1_GOOD' => 'Se han detectado los componentes de marketing por Email.',
  'LBL_MARKETING_CHECK1_BAD'  => 'No Email marketing components detected, you will need to create one to mail out a campaign.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Se han detectado listas de público objetivo.',
  'LBL_MARKETING_CHECK2_BAD'  => 'No se han detectado listas de público objetivo, tendrá que crear una de la pantalla de la campaña deseada.',
  'LBL_EMAIL_SETUP_WIZ' => 'Lanzar Configuración de Email',
  'LBL_SCHEDULER_LINK' => 'ir a la pantalla de administración del planificador.',
  'LBL_TO_WIZARD' => 'lanzar',
  'LBL_TO_WIZARD_TITLE' => 'Lanzar Asistente',
  'LBL_EDIT_EXISTING' => 'Editar Campaña',
  'LBL_EDIT_TARGET_LIST' => 'Editar Lista de Público Objetivo',
  'LBL_SEND_EMAIL'  => 'Planificar Email',
  'LBL_USE_EXISTING'  => 'Utilizar Existente',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Crear Nuevo Email de Marketing',
  'LBL_CHOOSE_NEXT_STEP'  => 'Elija su siguiente paso',
  'LBL_NON_ADMIN_ERROR_MSG'  => 'Por favor, notifíqueselo a su administrador del sistema para que corrija este problema',
  'LBL_EMAIL_COMPONENTS' => 'Componentes de Email',
  'LBL_SCHEDULER_COMPONENTS' => 'Componentes del Planificador',
  'LBL_RECHECK_BTN'=>'Comprobar de Nuevo',
//web to lead wizard titles
	'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Nuevo Formulario de Cliente Potencial: Seleccione campos',
	'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Nuevo Formulario de Cliente Potencial: Propiedades del formulario',
	'LBL_DRAG_DROP_COLUMNS' => 'Arrastre y suelte los campos del cliente potencial en las columnas 1 y 2',
	'LBL_DEFINE_LEAD_HEADER' => 'Cabecera del Formulario:',
	'LBL_LEAD_DEFAULT_HEADER' => 'Formulario Web a cliente potencial para la Campaña',
	'LBL_DEFINE_LEAD_SUBMIT' => 'Etiqueta del Botón de Envío:',
	'LBL_DEFINE_LEAD_POST_URL' => 'URL de Envío (Post):',
	'LBL_EDIT_LEAD_POST_URL' => '¿Editar URL de Envío (Post)?',
	'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL de Redirección:',
	'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campaña Relacionada:',
	'LBL_DEFAULT_LEAD_SUBMIT' => 'Enviar',
    'LBL_WEB_TO_LEAD'    =>  'Nuevo Formulario de Cliente Potencial',
    'LBL_LEAD_FOOTER' => 'Pie del Formulario:',
    'LBL_CAMPAIGN_NOT_SELECTED' => 'Seleccione y asocie una campaña:',
    'NTC_NO_LEGENDS' => 'Ninguno',
    'LBL_SELECT_LEAD_FIELDS' => 'Por favor, seleccione de entre los campos disponibles',
    'LBL_DESCRIPTION_LEAD_FORM' => 'Descripción del Formulario:',
    'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Al enviar este formulario se creará un cliente potencial vinculado con la campaña',
    'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' =>'Por favor, descargue su formulario Web a Cliente potencial',
    'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' =>'Formulario Web A Cliente Potencial',
    'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' =>'Por favor, indique todos los campos requeridos',
    'LBL_NOT_VALID_EMAIL_ADDRESS' =>'No es una dirección de correo válida',
    'LBL_AVALAIBLE_FIELDS_HEADER' => 'Campos Disponibles',
    'LBL_LEAD_FORM_FIRST_HEADER' => 'Formulario de Cliente Potencial (Primera Columna)',
    'LBL_LEAD_FORM_SECOND_HEADER' =>'Formulario de Cliente Potencial (Segunda Columna)',
    'LBL_LEAD_MODULE'  => 'Clientes Potenciales',
    'LBL_CREATE_WEB_TO_LEAD_FORM' => 'CreateWebToLeadForm', 
    'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Por favor, seleccione los campos requeridos:',
    //Campaign charts
    'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' =>'Retorno de Inversión de la Campaña',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY'=>'Respuesta a la Campaña por Actividad del Destinatario', 
    'LBL_LOG_ENTRIES_BLOCKEDD_TITLE'=>'Excluidos por Dirección de Correo o dominio', 

	'LBL_AMOUNT_IN' => 'Cantidad en ',

    // Labels for ROI Chart
    'LBL_ROI_CHART_REVENUE' => 'Ingresos',
    'LBL_ROI_CHART_INVESTMENT' => 'Inversión',
    'LBL_ROI_CHART_BUDGET' => 'Presupuesto',
    'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Ingresos Esperados',

    // Top Campaigns Dashlet
    'LBL_TOP_CAMPAIGNS' => 'Campañas Principales',
    'LBL_TOP_CAMPAIGNS_NAME' => 'Nombre de Campaña',
    'LBL_TOP_CAMPAIGNS_REVENUE' => 'Ingresos',
    'LBL_LEADS' => 'Clientes Potenciales',
    'LBL_CONTACTS'	=>	'Contactos',
    'LBL_ACCOUNTS'	=>	'Cuentas',
    'LBL_OPPORTUNITIES'	=>	'Oportunidades',
    'LBL_CREATED_USER' => 'Usuario Creado',
    'LBL_MODIFIED_USER' => 'Usuario Modificado',
    'LBL_LOG_ENTRIES' => 'Entradas del Registro',
    'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Lista de Público Objetivo',
    'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Email Marketing',
    'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'Cola de Seguimiento',
    'LBL_TARGETED_SUBPANEL_TITLE' => 'Objetivos Seleccionados',
    'LBL_VIEWED_SUBPANEL_TITLE' => 'Visto',
    'LBL_LINK_SUBPANEL_TITLE' => 'Enlace',
    'LBL_LEAD_SUBPANEL_TITLE' => 'Cliente Potencial',
    'LBL_CONTACT_SUBPANEL_TITLE' => 'Contacto',
    'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Email no Válido',
    'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Error de Envío',
    'LBL_REMOVED_SUBPANEL_TITLE' => 'Eliminado',
    'LBL_BLOCKED_SUBPANEL_TITLE' => 'Bloqueado',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Cuentas',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',

    'LBL_IMPORT_PROSPECTS'=>'Importar Público Objetivo',
    'LBL_LEAD_FORM_WIZARD' => 'Asistente de Formularios para Clientes Potenciales',
    'LBL_CAMPAIGN_INFORMATION' => 'Visión General',

	'LBL_MONTH' => "Mes",
	'LBL_YEAR' 	=> "Año",
	'LBL_DAY' 	=> "Día",
);


?>
