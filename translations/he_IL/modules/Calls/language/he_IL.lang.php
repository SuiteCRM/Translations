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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'שיחות',
    'LBL_MODULE_TITLE' => 'שיחות:בית',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש שיחות',
    'LBL_LIST_FORM_TITLE' => 'רשימת שיחות',
    'LBL_NEW_FORM_TITLE' => 'שיחות מתוזמנות',
    'LBL_LIST_CLOSE' => 'סגור',
    'LBL_LIST_SUBJECT' => 'נושא',
    'LBL_LIST_CONTACT' => 'אנשי קשר',
    'LBL_LIST_RELATED_TO' => 'קשור ל',
    'LBL_LIST_RELATED_TO_ID' => 'קשור אל ID',
    'LBL_LIST_DATE' => 'תאריך התחלה',
    'LBL_LIST_DIRECTION' => 'הכוונה',
    'LBL_SUBJECT' => 'נושא:',
    'LBL_REMINDER' => 'תזכורת:',
    'LBL_CONTACT_NAME' => 'איש קשר:',
    'LBL_DESCRIPTION' => 'תאור:',
    'LBL_STATUS' => 'סטטוס',
    'LBL_DIRECTION' => 'הכוונה:',
    'LBL_DATE' => 'תאריך התחלה:',
    'LBL_DURATION' => 'משך:',
    'LBL_DURATION_HOURS' => 'משך שעות:',
    'LBL_DURATION_MINUTES' => 'משך דקות:',
    'LBL_HOURS_MINUTES' => '(שעות /דקות)',
    'LBL_DATE_TIME' => 'תאריך וזמן התחלה:',
    'LBL_TIME' => 'זמן התחלה:',
    'LBL_HOURS_ABBREV' => 'ה',
    'LBL_MINSS_ABBREV' => 'מ',
    'LNK_NEW_CALL' => 'לקבוע שיחה',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_CALL_LIST' => 'שיחות',
    'LNK_IMPORT_CALLS' => 'ייבא שיחות',
    'ERR_DELETE_RECORD' => 'יש לציין מספר רשומה של החשבון על מנת למחוק אותו.',
    'LBL_INVITEE' => 'מוזמנים',
    'LBL_RELATED_TO' => 'קשור ל:',
    'LNK_NEW_APPOINTMENT' => 'שיחות מתוזמנות',
    'LBL_SCHEDULING_FORM_TITLE' => 'מתזמן',
    'LBL_ADD_INVITEE' => 'הוסף מוזמנים',
    'LBL_NAME' => 'שם',
    'LBL_FIRST_NAME' => 'שם פרטי',
    'LBL_LAST_NAME' => 'שם משפחה',
    'LBL_EMAIL' => 'מיילים',
    'LBL_PHONE' => 'טלפון',
    'LBL_REMINDER_POPUP' => 'חלון קופץ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'שליחת דוא"ל לכל המוזמנים',
    'LBL_EMAIL_REMINDER' => 'תזכורת דוא"ל',
    'LBL_EMAIL_REMINDER_TIME' => 'זמן תזכורת דוא"ל',
    'LBL_SEND_BUTTON_TITLE' => 'שלח הזמנות',
    'LBL_SEND_BUTTON_LABEL' => 'שלח הזמנות',
    'LBL_DATE_END' => 'תאריך סיום',
    'LBL_REMINDER_TIME' => 'זמן תזכורת',
    'LBL_EMAIL_REMINDER_SENT' => 'נשלח דוא"ל תזכורת',
    'LBL_SEARCH_BUTTON' => 'חיפוש',
    'LBL_ADD_BUTTON' => 'הוסף',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'שיחות',
    'LNK_SELECT_ACCOUNT' => 'בחר חשבון',
    'LNK_NEW_ACCOUNT' => 'חשבון חדש',
    'LNK_NEW_OPPORTUNITY' => 'הזדמנות חדשה',
    'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_USERS_SUBPANEL_TITLE' => 'משתמשים',
    'LBL_OUTLOOK_ID' => 'זיהוי אאוטלוק',
    'LBL_MEMBER_OF' => 'חבר ב',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'רשימות',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_LIST_MY_CALLS' => 'השיחות שלי',
    'LBL_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_ASSIGNED_TO_ID' => 'משתמש שהוקצה',
    'NOTICE_DURATION_TIME' => 'משך זמן חייב להיות גדול מאפס',
    'LBL_CALL_INFORMATION' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'הסרה',
    'LBL_ACCEPT_STATUS' => 'אשר סטטוס',
    'LBL_ACCEPT_LINK' => 'קבל קישור',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'יצירת מוזמן',
    'LBL_CREATE_CONTACT' => 'כאיש קשר',
    'LBL_CREATE_LEAD' => 'כליד',
    'LBL_CREATE_AND_ADD' => 'ליצור & להוסיף',
    'LBL_CANCEL_CREATE_INVITEE' => 'בטל',
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
    'LBL_REMINDERS_POPUP' => 'חלון קופץ',
    'LBL_REMINDERS_EMAIL' => 'מוזמני דוא"ל',
    'LBL_REMINDERS_WHEN' => 'כאשר:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'להסיר את התזכורת',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'הוספת כל המוזמנים',
    'LBL_REMINDERS_ADD_REMINDER' => 'הוספת תזכורת',

    'LBL_RESCHEDULE' => 'תזמן מחדש',
    'LBL_RESCHEDULE_COUNT' => 'ניסיונות שיחה',
    'LBL_RESCHEDULE_DATE' => 'תאריך',
    'LBL_RESCHEDULE_REASON' => 'סיבה',
    'LBL_RESCHEDULE_ERROR1' => 'נא בחר תאריך חוקי',
    'LBL_RESCHEDULE_ERROR2' => 'נא בחר סיבה',
    'LBL_RESCHEDULE_PANEL' => 'תזמן מחדש',
    'LBL_RESCHEDULE_HISTORY' => 'היסטוריית נסיונות שיחה',
    'LBL_CANCEL' => 'בטל',
    'LBL_SAVE' => 'שמור',

    'LBL_CALLS_RESCHEDULE' => 'שינוי מועד שיחות',
    'LBL_LIST_STATUS'=>'סטטוס',
    'LBL_LIST_DATE_MODIFIED'=>'שונה בתאריך',
    'LBL_LIST_DUE_DATE'=>'תאריך סיום',
    'LBL_RESCHEDULED_BY'=>'על-ידי',
);
