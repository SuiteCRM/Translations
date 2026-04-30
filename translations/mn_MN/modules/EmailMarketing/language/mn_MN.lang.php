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
    'LBL_REPLY_ADDR' => 'Хариу авах хаяг: ',
    'LBL_REPLY_NAME' => 'Хариу авах нэр: ',

    'LBL_MODULE_NAME' => 'Е-майл Маркетинг',
    'LBL_MODULE_TITLE' => 'Мэйл Маркетинг: Үндсэн',
    'LBL_LIST_FORM_TITLE' => 'Мэйл Маркетинг компанит ажил',
    'LBL_NAME' => 'Нэр',
    'LBL_LIST_NAME' => 'Нэр',
    'LBL_LIST_FROM_ADDR' => 'Илгээгч',
    'LBL_LIST_DATE_START' => 'Эхлэх огноо',
    'LBL_LIST_TEMPLATE_NAME' => 'E-мэйлийн загвар',
    'LBL_LIST_STATUS' => 'Төлөв',
    'LBL_STATUS' => 'Төлөв',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Төлөв:',
    'LBL_TEMPLATE_NAME' => 'Загварын нэр',
    'LBL_DATE_ENTERED' => 'Оруулсан огноо',
    'LBL_DATE_MODIFIED' => 'Өөрчилсөн',
    'LBL_MODIFIED' => 'Өөрчилсөн: ',
    'LBL_CREATED' => 'Үүсгэсэн: ',
    'LBL_MESSAGE_FOR' => 'Энэ мессежийг илгээ:',

    'LBL_FROM_NAME' => 'From Name: ',
    'LBL_FROM_ADDR' => 'From Email Address: ',
    'LBL_DATE_START' => 'Эхлэх огноо',
    'LBL_SEND_DATE' => 'Илгээсэн огноо',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Эхлэх цаг',
    'LBL_START_DATE_TIME' => 'Start Date & Time: ',
    'LBL_TEMPLATE' => 'Email Template: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Өөрчилсөн: ',
    'LBL_CREATED_BY' => 'Үүсгэсэн: ',

    'LNK_NEW_CAMPAIGN' => 'Компанит ажил үүсгэх',
    'LNK_CAMPAIGN_LIST' => 'Компанит ажлууд',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Зорилтот бүлэг үүсгэх',
    'LNK_PROSPECT_LIST_LIST' => 'Зорилтын жасгаалт',
    'LNK_NEW_PROSPECT' => 'Зорилтот бүлэг үүсгэх',
    'LNK_PROSPECT_LIST' => 'Зорилт',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Е-майл Маркетинг',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Үүсгэх',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Засах',
    'LBL_FROM_MAILBOX' => 'From Mailbox',
    'LBL_FROM_MAILBOX_NAME' => 'Use Mailbox:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account:',
    'LBL_FROM' => 'Илгээгч',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Зорилтын жасгаалт',
    'LBL_ALL_PROSPECT_LISTS' => 'Select to choose all Target List(s) in the Campaign.',
    'LBL_RELATED_PROSPECT_LISTS' => 'All Target List(s) related to this message.',
    'LBL_PROSPECT_LIST_NAME' => 'Зорилт жагсаалтын нэр',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Илгээх',
    'LBL_SEND_BUTTON_LABEL' => 'Илгээх',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Schedule',
    'LBL_ERROR_ON_MARKETING' => 'Шаардлагатай талбаруудыг оруулаагүй байна',

    'LBL_CAMPAIGN_ID' => 'Компанит ажлын ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'E-мэйлийн загвар',
    'LBL_PROSPECT_LISTS' => 'Боломжит харилцагчийн жагсаалт',
    'LBL_OVERVIEW' => 'Үндсэн',
    'LBL_EMAIL_CONFIG' => 'Мэйлийн тохиргоо',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'МЭЙЛ',
    'LBL_BODY' => 'Body',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Судалгаа',
    'LBL_SCHEDULE' => 'Schedule',
    'LBL_DELETE_TEST_ENTRIES' => 'Тест өгөгдлүүдийг устгах',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Хэрэглэгчид',
    'LBL_SEND_TEST_EMAIL' => 'Тест мэйл илгээх',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Мессежний дараалал',
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
    'LBL_SCHEDULERS' => 'Төлөвлөгч',
    'LBL_INBOUND_EMAIL' => 'Ирсэн мэйл',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
