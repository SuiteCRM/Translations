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
    'LBL_REPLY_ADDR' => '"Odgovori" adresa:',
    'LBL_REPLY_NAME' => '"Odgovori" ime:',

    'LBL_MODULE_NAME' => 'Email marketing',
    'LBL_MODULE_TITLE' => 'Email marketing: Početno',
    'LBL_LIST_FORM_TITLE' => 'Email marketing kampanje',
    'LBL_NAME' => 'Ime',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_FROM_ADDR' => 'Od e-pošte',
    'LBL_LIST_DATE_START' => 'Početni datum',
    'LBL_LIST_TEMPLATE_NAME' => 'Predložak e-pošte',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Ime predloška',
    'LBL_DATE_ENTERED' => 'Uneseni datum',
    'LBL_DATE_MODIFIED' => 'Izmijenjeno:',
    'LBL_MODIFIED' => 'Izmijenjeno od:',
    'LBL_CREATED' => 'Kreirano od:',
    'LBL_MESSAGE_FOR' => 'Pošalji ovu poruku prema:',

    'LBL_FROM_NAME' => 'Od imena:',
    'LBL_FROM_ADDR' => 'Od adrese e-pošte:',
    'LBL_DATE_START' => 'Početni datum',
    'LBL_SEND_DATE' => 'Datum slanja',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Vrijeme početka',
    'LBL_START_DATE_TIME' => 'Početni datum i vrijeme:',
    'LBL_TEMPLATE' => 'Predložak e-pošte:',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Izmijenjeno od:',
    'LBL_CREATED_BY' => 'Kreirano od:',

    'LNK_NEW_CAMPAIGN' => 'Kreiraj kampanju',
    'LNK_CAMPAIGN_LIST' => 'Kampanje',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Kreiraj listu ciljeva',
    'LNK_PROSPECT_LIST_LIST' => 'Liste ciljeva',
    'LNK_NEW_PROSPECT' => 'Kreiraj cilj',
    'LNK_PROSPECT_LIST' => 'Ciljevi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Email marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Kreiraj',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Uredi',
    'LBL_FROM_MAILBOX' => 'Iz pretinca e-pošte',
    'LBL_FROM_MAILBOX_NAME' => 'Koristi pretinac e-pošte:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account:',
    'LBL_FROM' => 'Od',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Liste ciljeva',
    'LBL_ALL_PROSPECT_LISTS' => 'Označite za odabrati sve liste(a) ciljeva u kampanji.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Sve liste(a) ciljeva povezane s ovom porukom.',
    'LBL_PROSPECT_LIST_NAME' => 'Ime liste ciljeva',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Pošalji',
    'LBL_SEND_BUTTON_LABEL' => 'Pošalji',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Raspored',
    'LBL_ERROR_ON_MARKETING' => 'Missing required field(s)',

    'LBL_CAMPAIGN_ID' => 'ID kampanje',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'Predložak e-pošte',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',
    'LBL_OVERVIEW' => 'Osnovno',
    'LBL_EMAIL_CONFIG' => 'Postavke e-pošte',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Tijelo',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Survey',
    'LBL_SCHEDULE' => 'Raspored',
    'LBL_DELETE_TEST_ENTRIES' => 'Izbriši test unose.',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'korisnik',
    'LBL_SEND_TEST_EMAIL' => 'Pošalji testnu e-poštu',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Red poruka',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Run Nightly Process Bounced Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Rasporedi',
    'LBL_INBOUND_EMAIL' => 'Dolazna e-pošta',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
