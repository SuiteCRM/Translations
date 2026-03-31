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
    'LBL_MODULE_TITLE' => 'שיחות:בית',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש שיחות',
    'LBL_LIST_FORM_TITLE' => 'רשימת שיחות',
    'LBL_NEW_FORM_TITLE' => 'שיחות מתוזמנות',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => 'קשור אל ID',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'תזכורת:',
    'LBL_CONTACT_NAME' => 'איש קשר:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'הכוונה:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => 'משך שעות:',
    'LBL_DURATION_MINUTES' => 'משך דקות:',
    'LBL_HOURS_MINUTES' => 'שעות/דקות',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'ה',
    'LBL_MINSS_ABBREV' => 'מ',
    'LNK_NEW_CALL' => 'יומן שיחה',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'יבוא שיחות',
    'ERR_DELETE_RECORD' => 'יש לציין מספר רשומה של החשבון על מנת למחוק אותו.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'קשור ל:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'מתזמן',
    'LBL_ADD_INVITEE' => 'הוסף מוזמנים',
    'LBL_NAME' => 'שם',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'דוא"ל',
    'LBL_PHONE' => 'טלפון',
    'LBL_REMINDER_POPUP' => 'חלון קופץ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'שליחת דוא"ל לכל המוזמנים',
    'LBL_EMAIL_REMINDER' => 'תזכורת דוא"ל',
    'LBL_EMAIL_REMINDER_TIME' => 'זמן תזכורת דוא"ל',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'תאריך סיום',
    'LBL_REMINDER_TIME' => 'זמן תזכורת',
    'LBL_EMAIL_REMINDER_SENT' => 'נשלח דוא"ל תזכורת',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'הוסף',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'הזדמנות חדשה',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_USERS_SUBPANEL_TITLE' => 'משתמשים',
    'LBL_OUTLOOK_ID' => 'זיהוי אאוטלוק',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_LIST_MY_CALLS' => 'השיחות שלי',
    'LBL_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'הסר',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'קבל קישור',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'יצירת מוזמן',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'כליד',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'מצטערים, לא נמצאו תוצאות. אנא צור מוזמן למטה.',
    'LBL_NO_ACCESS' => 'אין לך גישה כדי ליצור $module',

    'LBL_REPEAT_TYPE' => 'סוג חזרה',
    'LBL_REPEAT_INTERVAL' => 'פרק זמן לחזרה',
    'LBL_REPEAT_DOW' => 'חזרה יומית',
    'LBL_REPEAT_UNTIL' => 'חזור עד ש',
    'LBL_REPEAT_COUNT' => 'כמות חזרות',
    'LBL_REPEAT_PARENT_ID' => 'מזהה האב של החזרה',
    'LBL_RECURRING_SOURCE' => 'מקור נשנה',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'הצג תזכורת?',
    'LBL_REMINDERS_ACTIONS' => 'פעולות:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'מוזמני דוא"ל',
    'LBL_REMINDERS_WHEN' => 'כאשר:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'להסיר את התזכורת',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'הוספת כל המוזמנים',
    'LBL_REMINDERS_ADD_REMINDER' => 'הוספת תזכורת',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'סיבה',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'היסטוריית נסיונות שיחה',
    'LBL_CANCEL' => 'Cancel',
    'LBL_SAVE' => 'שמור',

    'LBL_CALLS_RESCHEDULE' => 'שינוי מועד שיחות',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'התאריך שונה',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'by',
);
