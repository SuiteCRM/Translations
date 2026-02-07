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
    'LBL_REPLY_ADDR' => 'Endereço para Responder a: ',
    'LBL_REPLY_NAME' => 'Nome para Responder a: ',

    'LBL_MODULE_NAME' => 'E-mail Marketing',
    'LBL_MODULE_TITLE' => 'Marketing por E-mail: Início',
    'LBL_LIST_FORM_TITLE' => 'Campanhas de E-mail Marketing',
    'LBL_NAME' => 'Nome',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FROM_ADDR' => 'E-mail do Remetente',
    'LBL_LIST_DATE_START' => 'Data Início:',
    'LBL_LIST_TEMPLATE_NAME' => 'Modelo de E-mail',
    'LBL_LIST_STATUS' => 'Estado',
    'LBL_STATUS' => 'Estado',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Nome de Modelo',
    'LBL_DATE_ENTERED' => 'Data de Introdução',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado por:',
    'LBL_CREATED' => 'Criado por:',
    'LBL_MESSAGE_FOR' => 'Enviar Esta Mensagem Para:',

    'LBL_FROM_NAME' => 'Nome De:',
    'LBL_FROM_ADDR' => 'Endereço De:',
    'LBL_DATE_START' => 'Data Início:',
    'LBL_SEND_DATE' => 'Data de Envio',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Hora de Início',
    'LBL_START_DATE_TIME' => 'Data & Hora de Início:',
    'LBL_TEMPLATE' => 'Modelo de E-mail:',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modificado por:',
    'LBL_CREATED_BY' => 'Criado por:',

    'LNK_NEW_CAMPAIGN' => 'Criar Nova Campanha',
    'LNK_CAMPAIGN_LIST' => 'Campanhas',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Criar Nova Lista de Alvos',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de Alvos',
    'LNK_NEW_PROSPECT' => 'Criar alvo',
    'LNK_PROSPECT_LIST' => 'Alvos',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-mail Marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Criar',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editar',
    'LBL_FROM_MAILBOX' => 'Caixa de Correio De',
    'LBL_FROM_MAILBOX_NAME' => 'Usar Caixa de Correio:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Conta para envio de e-mails:',
    'LBL_FROM' => 'De',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Listas de Alvos',
    'LBL_ALL_PROSPECT_LISTS' => 'Selecione para escolher todas listas de alvos na campanha.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Todas listas de alvos relacionadas a esta mensagem.',
    'LBL_PROSPECT_LIST_NAME' => 'Nome de Lista de Alvos',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listas de Alvos',
    'LBL_MODULE_SEND_TEST' => 'Campanha: Enviar Teste',
    'LBL_MODULE_SEND_EMAILS' => 'Campanha: Enviar Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Por favor, selecione as mensagens de campanha que gostaria de enviar como teste:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Por favor, selecione as mensagens de campanha para as quais gostaria de agendar o envio em determinada data e hora:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Enviar',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Agendar',
    'LBL_ERROR_ON_MARKETING' => 'Campo(s) obrigatório(s) não preenchidos',

    'LBL_CAMPAIGN_ID' => 'ID da Campanha',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID de conta de e-mail de saída',
    'LBL_EMAIL_TEMPLATE' => 'Modelo de E-mail',
    'LBL_PROSPECT_LISTS' => 'Listas de Alvos',
    'LBL_OVERVIEW' => 'Básica',
    'LBL_EMAIL_CONFIG' => 'Definições de E-mail',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Corpo',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Pesquisa',
    'LBL_SCHEDULE' => 'Agendar',
    'LBL_DELETE_TEST_ENTRIES' => 'Excluir Entradas de Teste',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Usuários',
    'LBL_SEND_TEST_EMAIL' => 'Enviar e-mail de teste',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Fila de Mensagens',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Executar Processo Noturno de Emails de Campanha Retornados',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Agendadores',
    'LBL_INBOUND_EMAIL' => 'E-mail Inbound',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
