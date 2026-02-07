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
    'LBL_REPLY_ADDR' => '"Atbildēt-kam" adrese:',
    'LBL_REPLY_NAME' => '"Atbildēt-kam" vārds:',

    'LBL_MODULE_NAME' => 'E-pasta mārketings',
    'LBL_MODULE_TITLE' => 'E-pasta mārketings',
    'LBL_LIST_FORM_TITLE' => 'E-pasta marketinga kampaņas',
    'LBL_NAME' => 'Vārds:',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_FROM_ADDR' => 'Sūtītāja e-pasts',
    'LBL_LIST_DATE_START' => 'Sākuma datums:',
    'LBL_LIST_TEMPLATE_NAME' => 'E-pasta veidne',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_STATUS' => 'Statuss',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Statuss:',
    'LBL_TEMPLATE_NAME' => 'Veidnes nosaukums',
    'LBL_DATE_ENTERED' => 'Izveidots',
    'LBL_DATE_MODIFIED' => 'Modificēts',
    'LBL_MODIFIED' => 'Modificēja:',
    'LBL_CREATED' => 'Izveidoja:',
    'LBL_MESSAGE_FOR' => 'Sūtīt šo ziņu uz:',

    'LBL_FROM_NAME' => 'Sūtītāja vārds:',
    'LBL_FROM_ADDR' => 'Sūtītāja e-pasts:',
    'LBL_DATE_START' => 'Sākuma datums:',
    'LBL_SEND_DATE' => 'Nosūtīšanas datums',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Sākuma laiks',
    'LBL_START_DATE_TIME' => 'Sākuma datums un laiks:',
    'LBL_TEMPLATE' => 'E-pasta veidne:',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modificēja:',
    'LBL_CREATED_BY' => 'Izveidoja:',

    'LNK_NEW_CAMPAIGN' => 'Izveidot kampaņu (Vednis)',
    'LNK_CAMPAIGN_LIST' => 'Mārketings',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Izveidot mērķu sarakstu',
    'LNK_PROSPECT_LIST_LIST' => 'Mērķu saraksti',
    'LNK_NEW_PROSPECT' => 'Izveidot mērķi',
    'LNK_PROSPECT_LIST' => 'Mērķi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-pasta mārketings',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Jauns',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Rediģēt',
    'LBL_FROM_MAILBOX' => 'No pastkastes',
    'LBL_FROM_MAILBOX_NAME' => 'Lietot pastkasti:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account:',
    'LBL_FROM' => 'No',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Mērķu saraksti',
    'LBL_ALL_PROSPECT_LISTS' => 'Atzīmēt lai kampaņā izmantotu visus mērķu sarakstus.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Visi ar šo ziņu saistītie mērķu saraksti.',
    'LBL_PROSPECT_LIST_NAME' => 'Mērķu saraksta nosaukums',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Nosūtīt',
    'LBL_SEND_BUTTON_LABEL' => 'Nosūtīt',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Schedule',
    'LBL_ERROR_ON_MARKETING' => 'Iztrūkst obligātie lauki',

    'LBL_CAMPAIGN_ID' => 'Kampaņas ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'E-pasta veidne',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',
    'LBL_OVERVIEW' => 'Pamata',
    'LBL_EMAIL_CONFIG' => 'E-pasta iestatījumi',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Ķermenis',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Survey',
    'LBL_SCHEDULE' => 'Schedule',
    'LBL_DELETE_TEST_ENTRIES' => 'Dzēst testa ierakstus',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Lietotājs',
    'LBL_SEND_TEST_EMAIL' => 'Sūtīt testa e-pastu',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Ziņojumu rinda',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Palaist marketinga kampaņas e-pasta izsūtīšanas nakts procesu',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Plānotāji',
    'LBL_INBOUND_EMAIL' => 'Ienākošais e-pasts',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
