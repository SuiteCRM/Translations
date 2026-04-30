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
    'LBL_ACCEPT_THIS' => 'Accept?',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_END' => 'End Date',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Meetings',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DURATION_HOURS' => 'Duration Hours:',
    'LBL_DURATION_MINUTES' => 'Duration Minutes:',
    'LBL_DURATION' => 'Duration:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'Nome próprio',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LAST_NAME' => 'Apelido',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Data de alteração',
    'LBL_LIST_DATE' => 'Data de início',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_LIST_DUE_DATE' => 'Data-limite',
    'LBL_LIST_FORM_TITLE' => 'Listar Reuniões',
    'LBL_LIST_MY_MEETINGS' => 'Minhas reuniões',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_LOCATION' => 'Location:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Alterado por',
    'LBL_MODULE_NAME' => 'Meetings',
    'LBL_MODULE_TITLE' => 'Reuniões: Entrada',
    'LBL_NAME' => 'Nome',
    'LBL_NEW_FORM_TITLE' => 'Marcar compromisso',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Sequência de atualização de reuniões',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_REMINDER' => 'Lembretes:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email a todos os convidados',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_REMOVE' => 'Remover',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar reuniões',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_STATUS' => 'Situação:',
    'LBL_TYPE' => 'Tipo de reunião',
    'LBL_PASSWORD' => 'Senha de reunião',
    'LBL_URL' => 'Iniciar/Participar em reunião',
    'LBL_HOST_URL' => 'URL do hospedeiro',
    'LBL_DISPLAYED_URL' => 'Exibir URL',
    'LBL_CREATOR' => 'Criador da reunião',
    'LBL_EXTERNALID' => 'ID de aplicativo externo',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_TIME' => 'Start Time:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilizadores',
    'LBL_PARENT_TYPE' => 'Tipo de hospedeiro',
    'LBL_PARENT_ID' => 'Parent ID',
    'LNK_MEETING_LIST' => 'View Meetings',
    'LNK_NEW_APPOINTMENT' => 'Marcar compromisso',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Utilizador modificado',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Participar na reunião',
    'LBL_ACCEPT_STATUS' => 'Situação da aceitação',
    'LBL_ACCEPT_LINK' => 'Accept Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Não pode assistir a esta reunião porque não foi convidado.',
    'LBL_EXTNOT_RECORD_LINK' => 'Ver reunião',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Não pode assistir a esta reunião porque não é um administrador ou o proprietário da reunião.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Criar convidado',
    'LBL_CREATE_CONTACT' => 'As Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'As Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Create & Add',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'Não tem permissões para criar $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'Esta reunião foi criada noutro sistema e sincronizada com o CRM. Para efetuar alterações, deverá aceder à reunião original dentro do outro sistema. As alterações efetuadas no outro sistema podem ser sincronizadas com este registo.',
    'LBL_RELATED_TO' => 'Relacionado com:',

    // for reminders
    'LBL_REMINDERS' => 'Lembretes',
    'LBL_REMINDERS_ACTIONS' => 'Ações:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email aos convidados',
    'LBL_REMINDERS_WHEN' => 'Quando:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remover lembrete',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Adicionar todos os convidados',
    'LBL_REMINDERS_ADD_REMINDER' => 'Adicionar lembrete',

    // for google sync
    'LBL_GSYNC_ID' => 'ID do evento Google',
    'LBL_GSYNC_LASTSYNC' => 'Último carimbo temporal de sincronização Google',
);
