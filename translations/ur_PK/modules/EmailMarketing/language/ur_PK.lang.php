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
    'LBL_REPLY_ADDR' => 'پتے کا جواب دینا: ',
    'LBL_REPLY_NAME' => 'نام کا جواب دینا: ',

    'LBL_MODULE_NAME' => 'ای میل مارکیٹنگ',
    'LBL_MODULE_TITLE' => 'ایمل مارکیٹنگ کا گھر',
    'LBL_LIST_FORM_TITLE' => 'ایمل مارکیٹنگ کا کمپیگنس',
    'LBL_NAME' => 'نام',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_FROM_ADDR' => 'ایمیل سے',
    'LBL_LIST_DATE_START' => 'شروع ہونے کی تاریخ',
    'LBL_LIST_TEMPLATE_NAME' => 'ای میل سانچہ',
    'LBL_LIST_STATUS' => 'حیثیت',
    'LBL_STATUS' => 'حیثیت',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'حیثیت:',
    'LBL_TEMPLATE_NAME' => 'سانچے کا نام',
    'LBL_DATE_ENTERED' => 'تاریخ ڈالی',
    'LBL_DATE_MODIFIED' => 'تاریخ میں ترمیم',
    'LBL_MODIFIED' => 'کے لیے تبدیل کریں: ',
    'LBL_CREATED' => 'کی طرف سے بنایا گیا: ',
    'LBL_MESSAGE_FOR' => 'اس پیغام کو بھیجیں:',

    'LBL_FROM_NAME' => 'نام سے: ',
    'LBL_FROM_ADDR' => 'ای میل ایڈریس سے: ',
    'LBL_DATE_START' => 'شروع ہونے کی تاریخ',
    'LBL_SEND_DATE' => 'ڈیٹا بھیجنا',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'وقت آغاز ',
    'LBL_START_DATE_TIME' => 'شروع کی تاریخ اور وقت: ',
    'LBL_TEMPLATE' => 'ای میل سانچہ: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'کے لیے تبدیل کریں: ',
    'LBL_CREATED_BY' => 'کی طرف سے بنایا گیا: ',

    'LNK_NEW_CAMPAIGN' => 'مہم بنائیں',
    'LNK_CAMPAIGN_LIST' => 'مہمات',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'ھدف کی فہرست بنائیں',
    'LNK_PROSPECT_LIST_LIST' => 'ہدف کی فہرستیں',
    'LNK_NEW_PROSPECT' => 'ہدف بنائیں',
    'LNK_PROSPECT_LIST' => 'اہداف',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ای میل مارکیٹنگ',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'بنانا',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'ردوبدل',
    'LBL_FROM_MAILBOX' => 'میل باکس سے',
    'LBL_FROM_MAILBOX_NAME' => 'میل باکس کا استعمال کریں:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'باہر نکالے گئے ای میل اکاؤنٹ:',
    'LBL_FROM' => 'سے',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'ہدف کی فہرستیں',
    'LBL_ALL_PROSPECT_LISTS' => 'تمام نشانوں کو انتخاب کریں کمپین فہرست میں.',
    'LBL_RELATED_PROSPECT_LISTS' => 'تمام نشانوں کی فہرست پیغام کے ساتھ تعلق رکھتی ہے.',
    'LBL_PROSPECT_LIST_NAME' => 'نیشانی والی فہرست کا نام',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'نیشانی والی فہرست',
    'LBL_MODULE_SEND_TEST' => 'کمپین بھیجنے کی جانچ پڑتال',
    'LBL_MODULE_SEND_EMAILS' => 'کمپین بھیجنے والے ای میل',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'پیغام والے میدان کو انتخاب کریں جس پیغام کی اور جانچ پڑتال کرنا چاہتے ہیں:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'پیغام والے میدان کو انتخاب کریں کے شیڈول کو اپ پسند کرتے ہیں مخصوص تقسیم کرنے کے لیے تاریخ اور وقت کو چلائیں:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'بھیجنا',
    'LBL_SEND_BUTTON_LABEL' => 'بھیجنا',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'شیڈول',
    'LBL_ERROR_ON_MARKETING' => 'مطلوبہ میدان (لاپتہ)',

    'LBL_CAMPAIGN_ID' => 'مہم کی شناخت',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'آؤٹ باؤنڈ ای میل اکاؤنٹ کی شناخت',
    'LBL_EMAIL_TEMPLATE' => 'ای میل سانچہ',
    'LBL_PROSPECT_LISTS' => 'متوقع فہرستیں',
    'LBL_OVERVIEW' => 'ابتدائی',
    'LBL_EMAIL_CONFIG' => 'ای میل کی ترتیبات',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'ای میل',
    'LBL_BODY' => 'جسم',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'معائنه کرنا',
    'LBL_SCHEDULE' => 'شیڈول',
    'LBL_DELETE_TEST_ENTRIES' => 'ٹیسٹ کے اندراج کو حذف کریں',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'صارفین',
    'LBL_SEND_TEST_EMAIL' => 'پیغمات چیک کرنے کے لئے بھیجی',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'پیغام کی قطار',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'رات کو بونڈ کمپین میل عامل چلائیں',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'زمان بند',
    'LBL_INBOUND_EMAIL' => 'ان باؤنڈ ای میل',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
