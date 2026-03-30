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
    'LBL_REPLY_ADDR' => 'Adres "Odpowiedź do": ',
    'LBL_REPLY_NAME' => 'Nazwa "Odpowiedź do": ',

    'LBL_MODULE_NAME' => 'Marketing e-mailowy',
    'LBL_MODULE_TITLE' => 'Mailing marketingowy: Strona główna',
    'LBL_LIST_FORM_TITLE' => 'Mailing marketingowy kampanie',
    'LBL_NAME' => 'Nazwa',
    'LBL_LIST_NAME' => 'Nazwa dokument',
    'LBL_LIST_FROM_ADDR' => 'Adres nadawcy',
    'LBL_LIST_DATE_START' => 'Data Rozpoczęcia',
    'LBL_LIST_TEMPLATE_NAME' => 'Szablon e-mail',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Template Name',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DATE_MODIFIED' => 'Data Modyfikacji',
    'LBL_MODIFIED' => 'Zmodyfikowane przez: ',
    'LBL_CREATED' => 'Utworzone przez: ',
    'LBL_MESSAGE_FOR' => 'Send This Message To:',

    'LBL_FROM_NAME' => 'Nazwa nadawcy: ',
    'LBL_FROM_ADDR' => 'Adres "Od": ',
    'LBL_DATE_START' => 'Data rozpoczęcia',
    'LBL_SEND_DATE' => 'Send Date',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Czas rozpoczęcia',
    'LBL_START_DATE_TIME' => 'Data i Czas Rozpoczęcia: ',
    'LBL_TEMPLATE' => 'Szablon e-mail: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modified by: ',
    'LBL_CREATED_BY' => 'Created by: ',

    'LNK_NEW_CAMPAIGN' => 'Utwórz kampanię reklamową',
    'LNK_CAMPAIGN_LIST' => 'Campaigns',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Utwórz grupę docelowych odbiorców',
    'LNK_PROSPECT_LIST_LIST' => 'Lista docelowych odbiorców',
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'Docelowi odbiorcy',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Marketing e-mailowy',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Utwórz',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Edytuj',
    'LBL_FROM_MAILBOX' => 'Ze Skrzynki',
    'LBL_FROM_MAILBOX_NAME' => 'Użyj skrzynki pocztowej:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Konto poczty wychodzącej:',
    'LBL_FROM' => 'Od',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Lista docelowych odbiorców',
    'LBL_ALL_PROSPECT_LISTS' => 'Wszystkie listy grup odbiorców w kampanii reklamowej.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Wszystkie listy grup odbiorców powiązane z tą wiadmością.',
    'LBL_PROSPECT_LIST_NAME' => 'Nazwa listy docelowych odbiorców',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listy docelowych odbiorców',
    'LBL_MODULE_SEND_TEST' => 'Kampania: wyślij wiadomość testową',
    'LBL_MODULE_SEND_EMAILS' => 'Kampania: wyślij wiadomości email',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Wybierz wiadomości kampanii, które chcesz przetestować:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Wybierz wiadomości kampanii, dla których chcesz zaplanować wysyłkę z określoną datą i godziną rozpoczęcia:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Wyślij',
    'LBL_SEND_BUTTON_LABEL' => 'Wyślij',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Zaplanuj',
    'LBL_ERROR_ON_MARKETING' => 'Brakujące pola wymagane',

    'LBL_CAMPAIGN_ID' => 'ID Kampanii reklamowej',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID konta e-mail poczty wychodzącej',
    'LBL_EMAIL_TEMPLATE' => 'Szablon e-mail',
    'LBL_PROSPECT_LISTS' => 'Lista perspektyw',
    'LBL_OVERVIEW' => 'Basic',
    'LBL_EMAIL_CONFIG' => 'Ustawienia poczty e-mail',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'E-MAIL',
    'LBL_BODY' => 'Treść',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Ankieta',
    'LBL_SCHEDULE' => 'Zaplanuj',
    'LBL_DELETE_TEST_ENTRIES' => 'Delete Test Entries',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Użytkownicy',
    'LBL_SEND_TEST_EMAIL' => 'Wyślij wiadomość testową',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Message Queue',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Wykonaj nocny proces odbitej poczty kampanii mailowej',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Planery',
    'LBL_INBOUND_EMAIL' => 'Email',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
