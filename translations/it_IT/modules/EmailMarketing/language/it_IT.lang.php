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
    'LBL_REPLY_ADDR' => '"Rispondi A" Indirizzo: ',
    'LBL_REPLY_NAME' => '"Rispondi A" Nome: ',

    'LBL_MODULE_NAME' => 'Email Marketing',
    'LBL_MODULE_TITLE' => 'Email Marketing: Home',
    'LBL_LIST_FORM_TITLE' => 'Campagne Email Marketing',
    'LBL_NAME' => 'Nome',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FROM_ADDR' => 'Da Email',
    'LBL_LIST_DATE_START' => 'Data di Inizio',
    'LBL_LIST_TEMPLATE_NAME' => 'Modello Email',
    'LBL_LIST_STATUS' => 'Stato',
    'LBL_STATUS' => 'Stato',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Stato:',
    'LBL_TEMPLATE_NAME' => 'Nome Modello',
    'LBL_DATE_ENTERED' => 'Data di inserimento',
    'LBL_DATE_MODIFIED' => 'Data Modifica',
    'LBL_MODIFIED' => 'Modificato da:',
    'LBL_CREATED' => 'Creato da:',
    'LBL_MESSAGE_FOR' => 'Invia il Messaggio A:',

    'LBL_FROM_NAME' => 'Nome mittente: ',
    'LBL_FROM_ADDR' => 'Indirizzo Email Mittente:',
    'LBL_DATE_START' => 'Data di Inizio',
    'LBL_SEND_DATE' => 'Data Invio',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Ora Inizio',
    'LBL_START_DATE_TIME' => 'Data e Ora di Inizio: ',
    'LBL_TEMPLATE' => 'Template Email: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modificato da:',
    'LBL_CREATED_BY' => 'Creato da:',

    'LNK_NEW_CAMPAIGN' => 'Crea Campagna',
    'LNK_CAMPAIGN_LIST' => 'Campagne',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Nuova Lista Obiettivi',
    'LNK_PROSPECT_LIST_LIST' => 'Liste Obiettivi',
    'LNK_NEW_PROSPECT' => 'Nuovo Obiettivo',
    'LNK_PROSPECT_LIST' => 'Obiettivi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Email Marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Crea',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Modifica',
    'LBL_FROM_MAILBOX' => 'Dalla Casella',
    'LBL_FROM_MAILBOX_NAME' => 'Utilizza Casella:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Account di posta elettronica in uscita:',
    'LBL_FROM' => 'Da',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Liste Obiettivi',
    'LBL_ALL_PROSPECT_LISTS' => 'Seleziona per scegliere tutti gli Elenchi Obiettivi nella Campagna.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Tutti gli Elenchi Obiettivi collegati al messaggio.',
    'LBL_PROSPECT_LIST_NAME' => 'Nome Lista Obiettivi',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Elenchi Obiettivi',
    'LBL_MODULE_SEND_TEST' => 'Campagna: Invia Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campagna: Invia Messaggi',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Seleziona i messaggi della campagna che vuoi inviare come test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Seleziona i messaggi della campagna che vuoi programmare per l´invio, in una data e in un orario specifico:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Invia',
    'LBL_SEND_BUTTON_LABEL' => 'Invia',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Pianifica',
    'LBL_ERROR_ON_MARKETING' => 'Campo(i) obbligatorio(i) mancante(i)',

    'LBL_CAMPAIGN_ID' => 'ID Campagna',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Account ID Email in uscita',
    'LBL_EMAIL_TEMPLATE' => 'Modello Email',
    'LBL_PROSPECT_LISTS' => 'Elenco prospetti',
    'LBL_OVERVIEW' => 'Base',
    'LBL_EMAIL_CONFIG' => 'Impostazioni Email',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Corpo',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Sondaggio',
    'LBL_SCHEDULE' => 'Pianifica',
    'LBL_DELETE_TEST_ENTRIES' => 'Eliminare le voci di Test',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Utenti',
    'LBL_SEND_TEST_EMAIL' => 'Invia Email di Test',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Coda Messaggi',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Invia durante la notte le email rimbalzate della campagna',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Schedulatori',
    'LBL_INBOUND_EMAIL' => 'Posta in Entrata',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
