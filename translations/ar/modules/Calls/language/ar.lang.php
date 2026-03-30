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
    'LBL_MODULE_NAME' => 'Calls',
    'LBL_MODULE_TITLE' => 'المكالمات: الرئيسية',
    'LBL_SEARCH_FORM_TITLE' => 'بحث المكالمات',
    'LBL_LIST_FORM_TITLE' => 'قائمة المكالمات',
    'LBL_NEW_FORM_TITLE' => 'إنشاء موعد',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => 'ذو علاقة بمُعرف',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'للتذكير:',
    'LBL_CONTACT_NAME' => 'جهة الإتصال:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'الاتجاه:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => 'المدة بالساعات:',
    'LBL_DURATION_MINUTES' => 'المدة بالدقائق:',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'متعلق بـ:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'جدولة',
    'LBL_ADD_INVITEE' => 'إضافة مدعوين',
    'LBL_NAME' => 'Name',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'مُنبثقة',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'أرسل لكل المدعوين',
    'LBL_EMAIL_REMINDER' => 'رسالة تذكير',
    'LBL_EMAIL_REMINDER_TIME' => 'وقت رسالة التذكير',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => 'وقت التذكير',
    'LBL_EMAIL_REMINDER_SENT' => 'تم إرسال التذكير',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'فرصة جديدة',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_USERS_SUBPANEL_TITLE' => 'Users',
    'LBL_OUTLOOK_ID' => 'معرف أوتلوك',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_LIST_MY_CALLS' => 'مكالماتي',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Remove',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'رابط القبول',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'إنشاء مدعو',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'كعميل محتمل',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'كرر النوع',
    'LBL_REPEAT_INTERVAL' => 'كرر الفاصل الزمني للتكرار',
    'LBL_REPEAT_DOW' => 'تكرار يوم الأسبوع (Dow)',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'مرات التكرار',
    'LBL_REPEAT_PARENT_ID' => 'تكرار معرف الأصل',
    'LBL_RECURRING_SOURCE' => 'مصدر متكرر',

    'LBL_SYNCED_RECURRING_MSG' => 'هذه المكالمة نشأت في نظام آخر، وتم مزامنتها إلى SuiteCRM. لإجراء تغييرات، انتقل إلى المكالمة الأصلية في النظام الآخر. يمكن مزامنة التغييرات التي تتم في النظام الآخر ونقلها إلى هذا السجل.',

    // for reminders
    'LBL_REMINDERS' => 'رسائل التذكير',
    'LBL_REMINDERS_ACTIONS' => 'الإجراءات:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'أرسل للمدعوين',
    'LBL_REMINDERS_WHEN' => 'عندما:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'إزالة التذكير',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'إضافة كافة المدعوين',
    'LBL_REMINDERS_ADD_REMINDER' => 'إضافة تذكير',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'السبب',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'سجل محاولات الاتصال',
    'LBL_CANCEL' => 'Cancel',
    'LBL_SAVE' => 'Save',

    'LBL_CALLS_RESCHEDULE' => 'Calls Reschedule',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Date Modified',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'by',
);
