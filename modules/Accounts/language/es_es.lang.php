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
 * The Original Code is: SugarCRM Enterprise
 * The Initial Developer of the Original Code is SugarCRM, Inc.
 * Portions created by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.;
 * All Rights Reserved.
 ********************************************************************************/
/*********************************************************************************
 * Description:  Defines the Spanish language pack for the base application.
 * $Id: es_es.lang.php,v 1.21 2010/08/03 14:51:14 aserrano Exp $
 * Source: SugarCRM 6.0.0
 * Contributor(s): Alberto Serrano (alb.serrano@gmail.com).
 ********************************************************************************/

$mod_strings = array (
  'LBL_MODULE_NAME' => 'Cuentas',
  'LBL_MODULE_TITLE' => 'Cuentas: Inicio',
  'LBL_MODULE_ID' => 'Cuentas',
  'LBL_HOMEPAGE_TITLE' => 'Mis Cuentas',
  'LBL_SEARCH_FORM_TITLE' => 'Búsqueda de Cuentas',
  'LBL_LIST_FORM_TITLE' => 'Lista de Cuentas',
  'LBL_VIEW_FORM_TITLE' => 'Vista de Cuenta',  
  'LBL_NEW_FORM_TITLE' => 'Nueva Cuenta',
  'LBL_MEMBER_ORG_FORM_TITLE' => 'Organizaciones Miembro',
  'LBL_BUG_FORM_TITLE' => 'Cuentas',
  'LBL_LIST_ACCOUNT_NAME' => 'Nombre',
  'LBL_LIST_CITY' => 'Ciudad',
  'LBL_LIST_WEBSITE' => 'Sitio Web',
  'LBL_MEETINGS_SUBPANEL_TITLE' => 'Reuniones',
  'LBL_LIST_STATE' => 'Estado/Provincia',
  'LBL_LIST_PHONE' => 'Teléfono',
  'LBL_LIST_EMAIL_ADDRESS' => 'Email',
  'LBL_LIST_CONTACT_NAME' => 'Contacto',
  'LBL_BILLING_ADDRESS_STREET_2' => 'Calle de facturación 2',
  'LBL_BILLING_ADDRESS_STREET_3' => 'Calle de facturación 3',
  'LBL_BILLING_ADDRESS_STREET_4' => 'Calle de facturación 4',
  'LBL_SHIPPING_ADDRESS_STREET_2' => 'Calle de envío 2',
  'LBL_SHIPPING_ADDRESS_STREET_3' => 'Calle de envío 3',
  'LBL_SHIPPING_ADDRESS_STREET_4' => 'Calle de envío 4',
  'LBL_PARENT_ACCOUNT_ID' => 'ID Cuenta Padre',
  'LBL_CAMPAIGN_ID' => 'ID Campaña',
  //DON'T CONVERT THESE THEY ARE MAPPINGS
  'db_name' => 'LBL_LIST_ACCOUNT_NAME',
  'db_website' => 'LBL_LIST_WEBSITE',
  'db_billing_address_city' => 'LBL_LIST_CITY',
  //END DON'T CONVERT
  'LBL_ACCOUNT_INFORMATION' => 'Visión General',
  'LBL_ACCOUNT' => 'Cuenta:',
  'LBL_ACCOUNT_NAME' => 'Nombre:',
  'LBL_PHONE' => 'Teléfono:',
  'LBL_PHONE_ALT' => 'Teléfono alternativo:',
  'LBL_WEBSITE' => 'Web:',
  'LBL_CREATED_ID' => 'Creado Por Id',
  'LBL_CAMPAIGNS' => 'Campañas',
  'LBL_FAX' => 'Fax:',
  'LBL_TICKER_SYMBOL' => 'Símbolo Ticker:',
  'LBL_OTHER_PHONE' => 'Tel. alternativo:',
  'LBL_ANY_PHONE' => 'Cualquier teléfono:',
  'LBL_MEMBER_OF' => 'Miembro de:',
  'LBL_PHONE_OFFICE' => 'Teléfono oficina:',
  'LBL_PHONE_FAX' => 'Fax oficina:',
  'LBL_EMAIL' => 'Correo electrónico:',
  'LBL_EMAIL_OPT_OUT' => 'Rehusar Email:',
//'LBL_EMAIL_ADDRESSES' => 'Direcciones de Email:',
  'LBL_EMPLOYEES' => 'Empleados:',
  'LBL_OTHER_EMAIL_ADDRESS' => 'Email alternativo:',
  'LBL_ANY_EMAIL' => 'Cualquier email:',
  'LBL_OWNERSHIP' => 'Propietario:',
  'LBL_RATING' => 'Rating:',
  'LBL_INDUSTRY' => 'Industria:',
  'LBL_INVALID_EMAIL' => 'Email no válido:',
  'LBL_SIC_CODE' => 'Código CNAE/SIC:',
  'LBL_TYPE' => 'Tipo:',
  'LBL_ANNUAL_REVENUE' => 'Ingresos anuales:',
  'LBL_ADDRESS_INFORMATION' => 'Direcciones',
  'LBL_BILLING_ADDRESS' => 'Dirección de facturación:',
  'LBL_BILLING_ADDRESS_STREET' => 'Calle de facturación:',
  'LBL_BILLING_ADDRESS_CITY' => 'Ciudad de facturación:',
  'LBL_BILLING_ADDRESS_STATE' => 'Estado/provincia de facturación:',
  'LBL_BILLING_ADDRESS_POSTALCODE' => 'CP de facturación:',
  'LBL_BILLING_ADDRESS_COUNTRY' => 'País de facturación:',
  'LBL_SHIPPING_ADDRESS_STREET' => 'Calle de envío:',
  'LBL_SHIPPING_ADDRESS_CITY' => 'Ciudad de envío:',
  'LBL_SHIPPING_ADDRESS_STATE' => 'Estado/provincia de envío:',
  'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CP de envío:',
  'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de envío:',
  'LBL_SHIPPING_ADDRESS' => 'Dirección de envío:',
  'LBL_DATE_MODIFIED' => 'Modificado:',
  'LBL_MODIFIED_ID' => 'Modificado Por Id:',
  'LBL_DATE_ENTERED' => 'Creado:',
  'LBL_ANY_ADDRESS' => 'Cualquier dirección:',
  'LBL_CITY' => 'Ciudad:',
  'LBL_STATE' => 'Estado/Provincia:',
  'LBL_TASKS_SUBPANEL_TITLE' => 'Tareas',
  'LBL_POSTAL_CODE' => 'Código postal:',
  'LBL_COUNTRY' => 'País:',
  'LBL_PUSH_BILLING' => 'Emisión de Facturas', // TODO: Revisar.
  'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copiar...',
  'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copiar a Contactos',
  'LBL_PUSH_SHIPPING' => 'Emisión de Envíos', // TODO: Revisar.
  'LBL_DESCRIPTION_INFORMATION' => 'Información adicional',
  'LBL_DESCRIPTION' => 'Descripción:',
  'NTC_COPY_BILLING_ADDRESS' => 'Copiar dirección de facturación a dirección de envío',
  'NTC_COPY_BILLING_ADDRESS2' => 'Copiar a dirección de envío',
  'NTC_COPY_SHIPPING_ADDRESS' => 'Copiar dirección de envío a dirección de facturación',
  'NTC_COPY_SHIPPING_ADDRESS2' => 'Copiar a dirección de facturación',
  'NTC_REMOVE_MEMBER_ORG_CONFIRMATION' => '¿Está seguro de que desea quitar este registro como organización miembro?',
  'NTC_REMOVE_ACCOUNT_CONFIRMATION' => '¿Está seguro de que desea quitar este registro?',
  'LBL_DUPLICATE' => 'Posible cuenta duplicada',
  'MSG_SHOW_DUPLICATES' => 'El registro para la cuenta que va a crear podría ser un duplicado de otro registro de cuenta existente. Los registros de cuenta con nombres similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de esta cuenta, o en Cancelar para volver al módulo sin crear la cuenta.',
  'MSG_DUPLICATE' => 'El registro para la cuenta que va a crear podría ser un duplicado de otro registro de cuenta existente. Los registros de cuenta con nombres similares se listan a continuación.<br>Haga clic en Guardar para continuar con la creación de esta cuenta, o en Cancelar para volver al módulo sin crear la cuenta.',
  'LNK_NEW_ACCOUNT' => 'Nueva Cuenta',
  'LNK_ACCOUNT_REPORTS' => 'Ver Informes de Cuentas',
  'LNK_ACCOUNT_LIST' => 'Ver Cuentas',
  'LNK_IMPORT_ACCOUNTS' => 'Importar Cuentas',
  'LBL_INVITEE' => 'Contactos',
  'ERR_DELETE_RECORD' => 'Debe especificar un número de registro para eliminar la cuenta.',
  'NTC_DELETE_CONFIRMATION' => '¿Está seguro de que desea eliminar este registro?',
  'LBL_SAVE_ACCOUNT' => 'Guardar Cuenta',
  'ACCOUNT_REMOVE_PROJECT_CONFIRM' => '¿Está seguro de que desea quitar esta cuenta del proyecto?',
  'LBL_USERS_ASSIGNED_LINK' => 'Usuarios Asignados',
  'LBL_USERS_MODIFIED_LINK' => 'Usuarios Modificados',
  'LBL_USERS_CREATED_LINK' => 'Creado por Usuarios',
  'LBL_TEAMS_LINK' => 'Equipos',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuentas',
  'LBL_PRODUCTS_TITLE' => 'Productos',
  'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Actividades',
  'LBL_HISTORY_SUBPANEL_TITLE' => 'Historial',
  'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizaciones Miembro',
  'LBL_NAME' => 'Nombre:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
  'LBL_CASES_SUBPANEL_TITLE' => 'Casos',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productos',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Presupuestos',
  'LBL_CONTRACTS'=>'Contratos',	
  'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',
  'LBL_CALLS_SUBPANEL_TITLE' => 'Llamadas',	
 'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
 'LBL_USERS_ASSIGNED_LINK'=>'Usuarios Asignados',
 'LBL_USERS_MODIFIED_LINK'=>'Usuarios Modificados',
 'LBL_USERS_CREATED_LINK'=>'Usuarios Creado Por', // TODO: Revisar
 'LBL_TEAMS_LINK'=>'Equipos',
 'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cuentas',
 'LBL_PRODUCTS_TITLE'=>'Productos',
 'LBL_ACTIVITIES_SUBPANEL_TITLE'=>'Actividades',
 'LBL_HISTORY_SUBPANEL_TITLE'=>'Historial',
 'LBL_MEMBER_ORG_SUBPANEL_TITLE'=>'Organizaciones Miembro',
 'LBL_NAME'=>'Nombre:',
    
 'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
 'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
 'LBL_LEADS_SUBPANEL_TITLE' => 'Clientes Potenciales',
 'LBL_CASES_SUBPANEL_TITLE' => 'Casos',

 'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Productos',
 'LBL_QUOTES_SUBPANEL_TITLE' => 'Presupuestos',
 'LBL_CONTRACTS'=>'Contratos',	
 'LBL_CONTRACTS_SUBPANEL_TITLE'=>'Contratos',

 'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizaciones Miembro',
 'LBL_BUGS_SUBPANEL_TITLE' => 'Incidencias',
 'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proyectos',
 'LBL_ASSIGNED_TO_NAME' => 'Asignado a:',
 'LBL_ASSIGNED_TO_ID' => 'Usuario Asignado:',
 'LBL_ASSIGNED_USER_NAME' => 'Asignado a:',
 'LBL_PROSPECT_LIST' => 'Lista de Público Objetivo',
 'LBL_ACCOUNTS_SUBPANEL_TITLE'=>'Cuentas',
 'LBL_PROJECT_SUBPANEL_TITLE' => 'Proyectos',

 // Dashlet Categories
 'LBL_DEFAULT' => 'Vistas',
 'LBL_CHARTS'  => 'Gráficos',
 'LBL_UTILS'   => 'Utilidades',
 'LBL_MISC'    => 'Varios',
 'LBL_VALIDACION_DERECHOS'=>'Pendiente validación de derechos',
 'LBL_PACIENTE_ESTANCIA' =>'Paciente en estancia',
 // END Dashlet Categories
);


?>
