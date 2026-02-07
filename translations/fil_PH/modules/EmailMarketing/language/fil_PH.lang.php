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
    'LBL_REPLY_ADDR' => '"Tumugon sa" Tirahan: ',
    'LBL_REPLY_NAME' => '"Tumugon sa" Pangalan: ',

    'LBL_MODULE_NAME' => 'Ang Email Maketing',
    'LBL_MODULE_TITLE' => 'Marketing ng email: Home',
    'LBL_LIST_FORM_TITLE' => 'Mga kampanya ng Marketing ng email',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_FROM_ADDR' => 'Mula sa email',
    'LBL_LIST_DATE_START' => 'Petsa ng pagsimula',
    'LBL_LIST_TEMPLATE_NAME' => 'Ang template ng email',
    'LBL_LIST_STATUS' => 'Ang Katayuan',
    'LBL_STATUS' => 'Ang Katayuan',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Katayuan:',
    'LBL_TEMPLATE_NAME' => 'Pangalan ng Template',
    'LBL_DATE_ENTERED' => 'Petsa nakapasok',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni: ',
    'LBL_CREATED' => 'Nilikha ni: ',
    'LBL_MESSAGE_FOR' => 'Ipadala Ang Mensahing Ito Kay:',

    'LBL_FROM_NAME' => 'Pangalan Mula sa: ',
    'LBL_FROM_ADDR' => 'Mula sa email address: ',
    'LBL_DATE_START' => 'Petsa ng pagsimula',
    'LBL_SEND_DATE' => 'Ipadala ang petsa',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Oras ng Pagsisimula ',
    'LBL_START_DATE_TIME' => 'I-start ang petsa at oras: ',
    'LBL_TEMPLATE' => 'Template ng Email: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Binago ni: ',
    'LBL_CREATED_BY' => 'Nilikha ni: ',

    'LNK_NEW_CAMPAIGN' => 'Lumikha ng kampanya',
    'LNK_CAMPAIGN_LIST' => 'Kampanya',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Lumikha ng listahan na target',
    'LNK_PROSPECT_LIST_LIST' => 'Mga listahan ng target',
    'LNK_NEW_PROSPECT' => 'Lumikha ng target',
    'LNK_PROSPECT_LIST' => 'Mga target',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ang Email Maketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Lumikha',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'I-edit',
    'LBL_FROM_MAILBOX' => 'Mula sa Mailbox',
    'LBL_FROM_MAILBOX_NAME' => 'Gamitin ang mailbox:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Account ng outbound email:',
    'LBL_FROM' => 'Mula',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Mga listahan ng target',
    'LBL_ALL_PROSPECT_LISTS' => 'I-select upang piliin ang lagat ng (mga) target list sa kampanya.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Lahat ng (mga) Listahan ng Target na may kaugnayan sa mensaheng ito.',
    'LBL_PROSPECT_LIST_NAME' => 'Pangalan ng Listahan ng Target',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Mga listahan ng nai-target',
    'LBL_MODULE_SEND_TEST' => 'Kampanya: magpadala ng pagsusuri',
    'LBL_MODULE_SEND_EMAILS' => 'Kampanya: magpadala ng mga email',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Paki-select ang mga mensahe ng kampanya na gusto mong suriin:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Paki-select ang mga mensahe ng kampanya na gusto mong i-iskedyul para sa distribusyon sa tinukoy na simulang petsa at oras:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Ang Pinadala',
    'LBL_SEND_BUTTON_LABEL' => 'Ang Pinadala',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Iskedyul',
    'LBL_ERROR_ON_MARKETING' => 'Nawawalang (mga) kailangan na field',

    'LBL_CAMPAIGN_ID' => 'ID ng kampanya',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Account ID ng outbound email',
    'LBL_EMAIL_TEMPLATE' => 'Ang template ng email',
    'LBL_PROSPECT_LISTS' => 'Mga listahan ng prospect',
    'LBL_OVERVIEW' => 'Pangunahin',
    'LBL_EMAIL_CONFIG' => 'Mga Setting ng Email',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Ang katawan',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Pag-aaral',
    'LBL_SCHEDULE' => 'Iskedyul',
    'LBL_DELETE_TEST_ENTRIES' => 'Tanggalin ang mga Entry ng Pagsubok',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Ang mga gumagamit',
    'LBL_SEND_TEST_EMAIL' => 'Pagpapadala ng susubukang email',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Pila ng Mensahe',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Patakbuhin gabi-gabi ang mga proseso ng Bounced Kampanya emaim',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Mga Iskedyul',
    'LBL_INBOUND_EMAIL' => 'May Dumarating na Elektronek na sulat',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
