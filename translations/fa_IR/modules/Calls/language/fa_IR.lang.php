<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'تماس‌ها',
    'LBL_MODULE_TITLE' => 'تماس‌ها: صفحه اصلی',
    'LBL_SEARCH_FORM_TITLE' => 'جستجوی تماس',
    'LBL_LIST_FORM_TITLE' => 'لیست تماس',
    'LBL_NEW_FORM_TITLE' => 'ایجاد قرار ملاقات',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_SUBJECT' => 'موضوع',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => 'شناسه مربوط به',
    'LBL_LIST_DATE' => 'تاریخ شروع ',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'یادآوری:',
    'LBL_CONTACT_NAME' => 'مخاطب:',
    'LBL_DESCRIPTION' => 'توضیحات: ',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'جهت:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => 'مدت (ساعت):',
    'LBL_DURATION_MINUTES' => 'مدت (دقیقه):',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'ثبت تماس',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'مربوط به:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'برنامه‌ریزی',
    'LBL_ADD_INVITEE' => 'افزودن مدعوین',
    'LBL_NAME' => 'نام',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'ایمیل',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'پاپ-آپ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'ارسال ایمیل به همه مدعوین',
    'LBL_EMAIL_REMINDER' => 'ارسال ایمیل یادآوری',
    'LBL_EMAIL_REMINDER_TIME' => 'زمان یادآوری را ایمیل کن',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => 'زمان یادآوری',
    'LBL_EMAIL_REMINDER_SENT' => 'ایمیل یادآوری ارسال شد',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'ﺍﻓﺰﻭﺩﻥ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'تماس‌ها',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'فرصت جدید',
    'LBL_LEADS_SUBPANEL_TITLE' => 'سرنخ‌ها',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'مخاطب‌ها',
    'LBL_USERS_SUBPANEL_TITLE' => 'کاربرها',
    'LBL_OUTLOOK_ID' => 'شناسه Outlook',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'یادداشت‌ها',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_LIST_MY_CALLS' => 'تماس‌های من',
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'حذف',
    'LBL_ACCEPT_STATUS' => 'وضعیت پذیرش',
    'LBL_ACCEPT_LINK' => 'لینک پذیرش',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'ایجاد یک مدعو',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'به عنوان سرنخ',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'لغو',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'نوع تکرار',
    'LBL_REPEAT_INTERVAL' => 'فاصله زمانی تکرار',
    'LBL_REPEAT_DOW' => 'تکرار روز هفته',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'تعداد دفعات تکرار',
    'LBL_REPEAT_PARENT_ID' => 'شناسه والد تکرار',
    'LBL_RECURRING_SOURCE' => 'منبع تکرار',

    'LBL_SYNCED_RECURRING_MSG' => 'این تماس در یک سیستم دیگر ایجاد شده و با SuiteCRM همگام‌سازی شده است. برای تغییر، به سابقه تماس در سیستم اصلی مراجعه نمایید. تغییرات ایجاد شده در سیستم دیگر را می‌توان با این سابقه همگام‌سازی کرد.',

    // for reminders
    'LBL_REMINDERS' => 'یادآوری‌ها',
    'LBL_REMINDERS_ACTIONS' => 'عملیات‌ها:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'ارسال ایمیل به مدعوین',
    'LBL_REMINDERS_WHEN' => 'وقتی:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'حذف یادآوری',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'افزودن تمام مدعوین',
    'LBL_REMINDERS_ADD_REMINDER' => 'افزودن یادآوری',

    'LBL_RESCHEDULE' => 'برنا مه‌ریزی مجدد',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'تاریخ',
    'LBL_RESCHEDULE_REASON' => 'دلیل',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'برنا مه‌ریزی مجدد',
    'LBL_RESCHEDULE_HISTORY' => 'تاریخچه تلاش تماس',
    'LBL_CANCEL' => 'لغو',
    'LBL_SAVE' => 'ذخيره',

    'LBL_CALLS_RESCHEDULE' => 'برنامه ریزی مجدد تماس ها',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Date Modified',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'by',
);
