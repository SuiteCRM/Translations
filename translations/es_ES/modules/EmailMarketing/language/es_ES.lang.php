<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_REPLY_ADDR' => 'Dirección de "Responder a":',
    'LBL_REPLY_NAME' => 'Nombre de "Responder A": ',

    'LBL_MODULE_NAME' => 'Marketing por Email',
    'LBL_MODULE_TITLE' => 'Marketing por Email: Inicio',
    'LBL_LIST_FORM_TITLE' => 'Campañas de Marketing por Email',
    'LBL_NAME' => 'Nombre',
    'LBL_LIST_NAME' => 'Nombre',
    'LBL_LIST_FROM_ADDR' => 'Email Remitente',
    'LBL_LIST_DATE_START' => 'Fecha de inicio',
    'LBL_LIST_TEMPLATE_NAME' => 'Plantilla de Email',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_STATUS' => 'Estado',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Estado:',
    'LBL_TEMPLATE_NAME' => 'Nombre de Plantilla',
    'LBL_DATE_ENTERED' => 'Fecha de Alta',
    'LBL_DATE_MODIFIED' => 'Fecha de Modificación',
    'LBL_MODIFIED' => 'Modificado por:',
    'LBL_CREATED' => 'Creado por:',
    'LBL_MESSAGE_FOR' => 'Enviar Este Mensaje A:',

    'LBL_FROM_NAME' => 'Nombre del Remitente: ',
    'LBL_FROM_ADDR' => 'Dirección Email Remitente:',
    'LBL_DATE_START' => 'Fecha de inicio',
    'LBL_SEND_DATE' => 'Fecha de Envío',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Hora de Inicio',
    'LBL_START_DATE_TIME' => 'Fecha y Hora de Inicio:',
    'LBL_TEMPLATE' => 'Plantilla de Email:',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modificado por:',
    'LBL_CREATED_BY' => 'Creado por:',

    'LNK_NEW_CAMPAIGN' => 'Crear Campaña',
    'LNK_CAMPAIGN_LIST' => 'Campañas',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Crear Lista de Público Objetivo',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de Público Objetivo',
    'LNK_NEW_PROSPECT' => 'Crear Público Objetivo',
    'LNK_PROSPECT_LIST' => 'Público Objetivo',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Marketing por Email',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Crear',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editar',
    'LBL_FROM_MAILBOX' => 'De buzón',
    'LBL_FROM_MAILBOX_NAME' => 'Usar buzón:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Cuenta de correo electrónico saliente:',
    'LBL_FROM' => 'De',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Listas de Público Objetivo',
    'LBL_ALL_PROSPECT_LISTS' => 'Seleccionar Todas las listas de público objetivo de la campaña.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Todas las listas de público objetivo relacionadas con este mensaje.',
    'LBL_PROSPECT_LIST_NAME' => 'Nombre de Lista de Público Objetivo',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listas de destino',
    'LBL_MODULE_SEND_TEST' => 'Campaña: Enviar Prueba',
    'LBL_MODULE_SEND_EMAILS' => 'Campaña: Enviar correos electrónicos',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Por favor, seleccione los mensajes de la campaña que le gustaría probar:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Por favor, seleccione los mensajes de la campaña que desea programar para su distribución en la fecha y hora de inicio especificadas:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Enviar',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Establecer horario',
    'LBL_ERROR_ON_MARKETING' => 'Falta(n) campo(s) obligatorio(s)',

    'LBL_CAMPAIGN_ID' => 'ID Campaña',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID cuenta de correo Saliente',
    'LBL_EMAIL_TEMPLATE' => 'Plantilla de Email',
    'LBL_PROSPECT_LISTS' => 'Listas de Público Objetivo',
    'LBL_OVERVIEW' => 'Básica',
    'LBL_EMAIL_CONFIG' => 'Configuración de Email',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Contenido',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Encuesta',
    'LBL_SCHEDULE' => 'Establecer horario',
    'LBL_DELETE_TEST_ENTRIES' => 'Eliminar Entradas de Pruebas',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Usuarios',
    'LBL_SEND_TEST_EMAIL' => 'Enviar Correo de Prueba',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Cola de Mensajes',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Ejecutar Proceso Nocturno de Emails de Campaña Rebotados',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Planificadores',
    'LBL_INBOUND_EMAIL' => 'Email Entrante',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
