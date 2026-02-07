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
    'LBL_REPLY_ADDR' => 'השב לכתובת',
    'LBL_REPLY_NAME' => 'השב ל-שם',

    'LBL_MODULE_NAME' => 'מייל שיווקי',
    'LBL_MODULE_TITLE' => 'מייל שיווקי:בית',
    'LBL_LIST_FORM_TITLE' => 'קמפיין מיילים שיווקי',
    'LBL_NAME' => 'שם',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_FROM_ADDR' => 'מייל השולח',
    'LBL_LIST_DATE_START' => 'תאריך התחלה',
    'LBL_LIST_TEMPLATE_NAME' => 'טמפלייט המייל',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_STATUS' => 'סטטוס',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'סטטוס:',
    'LBL_TEMPLATE_NAME' => 'שם התבנית',
    'LBL_DATE_ENTERED' => 'תאריך כניסה',
    'LBL_DATE_MODIFIED' => 'תאריך שינוי',
    'LBL_MODIFIED' => 'שונה ע"י:',
    'LBL_CREATED' => 'נוצר ע"י:',
    'LBL_MESSAGE_FOR' => 'שלח הודעה זו אל:',

    'LBL_FROM_NAME' => 'שם השולח:',
    'LBL_FROM_ADDR' => 'מייל השולח:',
    'LBL_DATE_START' => 'תאריך התחלה',
    'LBL_SEND_DATE' => 'תאריך שליחה',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'שעת התחלה ',
    'LBL_START_DATE_TIME' => 'תאריך ושעת התחלה:',
    'LBL_TEMPLATE' => 'טמפלייט של המייל:',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'שונה ע"י:',
    'LBL_CREATED_BY' => 'נוצר ע"י:',

    'LNK_NEW_CAMPAIGN' => 'קמפיין נוצר',
    'LNK_CAMPAIGN_LIST' => 'קמפיינים',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'צור רשימת מטרות',
    'LNK_PROSPECT_LIST_LIST' => 'רשימת מטרות',
    'LNK_NEW_PROSPECT' => 'צור מטרה',
    'LNK_PROSPECT_LIST' => 'מטרות',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'מייל שיווקי',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'צור',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'לערוך',
    'LBL_FROM_MAILBOX' => 'מתיבת מייל',
    'LBL_FROM_MAILBOX_NAME' => 'השתמש בתיבת מייל:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account:',
    'LBL_FROM' => 'מאצ',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'רשימת מטרות',
    'LBL_ALL_PROSPECT_LISTS' => 'כל רשימות המוגדרות בקמפיין',
    'LBL_RELATED_PROSPECT_LISTS' => 'כל הרשימות המוגדרות להודעה זו',
    'LBL_PROSPECT_LIST_NAME' => 'רשימת שמות מוגדרת',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'שלח',
    'LBL_SEND_BUTTON_LABEL' => 'שלח',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'לוח זמנים',
    'LBL_ERROR_ON_MARKETING' => 'Missing required field(s)',

    'LBL_CAMPAIGN_ID' => 'זהות קמפיין',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'טמפלייט המייל',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',
    'LBL_OVERVIEW' => 'בסיסי',
    'LBL_EMAIL_CONFIG' => 'הגדרות דוא"ל',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'גוף',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'סקר',
    'LBL_SCHEDULE' => 'לוח זמנים',
    'LBL_DELETE_TEST_ENTRIES' => 'מחק רשומות ניסוי',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'משתמשים',
    'LBL_SEND_TEST_EMAIL' => 'שלח הודעת בדיקה',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'תור הודעות',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'אבד משימות ריצת דואר יוצא ליליות',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'מתזמנים',
    'LBL_INBOUND_EMAIL' => 'מיילים נכנסים',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
