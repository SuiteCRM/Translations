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
    'LBL_REPLY_ADDR' => '"Odgovori" na adresu: ',
    'LBL_REPLY_NAME' => 'Odgovor pošalji na ime: ',

    'LBL_MODULE_NAME' => 'Marketing putem elektronskih poruka',
    'LBL_MODULE_TITLE' => 'Marketinška elektronska pošta: Početna Strana',
    'LBL_LIST_FORM_TITLE' => 'Marketinška kampanja putem elektronskih poruka',
    'LBL_NAME' => 'Ime',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_FROM_ADDR' => 'Iz elektronske pošte',
    'LBL_LIST_DATE_START' => 'Datum početka',
    'LBL_LIST_TEMPLATE_NAME' => 'Email šablon',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Ime šablona',
    'LBL_DATE_ENTERED' => 'Datum unosa',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio: ',
    'LBL_CREATED' => 'Autor: ',
    'LBL_MESSAGE_FOR' => 'Pošalji ovu poruku ka:',

    'LBL_FROM_NAME' => 'Ime pošiljaoca: ',
    'LBL_FROM_ADDR' => 'Od adrese elektronske pošte: ',
    'LBL_DATE_START' => 'Datum početka',
    'LBL_SEND_DATE' => 'Datum slanja',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Vreme početka ',
    'LBL_START_DATE_TIME' => 'Datum i vreme početka: ',
    'LBL_TEMPLATE' => 'Šablon elektronske pošte: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Izmenio: ',
    'LBL_CREATED_BY' => 'Autor: ',

    'LNK_NEW_CAMPAIGN' => 'Kreiraj kampanju',
    'LNK_CAMPAIGN_LIST' => 'Kampanje',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Kreiranje liste ciljeva',
    'LNK_PROSPECT_LIST_LIST' => 'Liste ciljeva',
    'LNK_NEW_PROSPECT' => 'Kreiranje cilja',
    'LNK_PROSPECT_LIST' => 'Ciljevi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Marketing putem elektronskih poruka',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Kreiraj',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Izmeni',
    'LBL_FROM_MAILBOX' => 'Iz poštanskog sandučeta',
    'LBL_FROM_MAILBOX_NAME' => 'Koristi poštansko sanduče:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Odlazni email nalog:',
    'LBL_FROM' => 'Od',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Liste ciljeva',
    'LBL_ALL_PROSPECT_LISTS' => 'Označite da izaberete sve ciljne liste u kampanji',
    'LBL_RELATED_PROSPECT_LISTS' => 'Sve ciljne liste koje su u vezi sa porukom.',
    'LBL_PROSPECT_LIST_NAME' => 'Ime liste ciljeva',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Pošalji',
    'LBL_SEND_BUTTON_LABEL' => 'Pošalji',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Planer',
    'LBL_ERROR_ON_MARKETING' => 'Nedostaju obavezna polja',

    'LBL_CAMPAIGN_ID' => 'ID broj kampanje',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID odlaznog email naloga',
    'LBL_EMAIL_TEMPLATE' => 'Email šablon',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',
    'LBL_OVERVIEW' => 'Osnovno',
    'LBL_EMAIL_CONFIG' => 'Email podešavanja',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Sadržaj',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Anketa',
    'LBL_SCHEDULE' => 'Planer',
    'LBL_DELETE_TEST_ENTRIES' => 'Obriši unose testa',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Korisnici',
    'LBL_SEND_TEST_EMAIL' => 'Pošalji test Email',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Lista čekanja poruka',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Pokreni noćno procesiranje vraćenih email poruka iz kampanja',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Zakazivači',
    'LBL_INBOUND_EMAIL' => 'Dolazni email',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
