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
    'LBL_ACCEPT_THIS' => 'קבל?',
    'LBL_ADD_BUTTON' => 'הוסף',
    'LBL_ADD_INVITEE' => 'הוסף מוזמנים',
    'LBL_CONTACT_NAME' => 'איש קשר:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'אנשי קשר',
    'LBL_CREATED_BY' => 'נוצר ע"י:',
    'LBL_DATE_END' => 'תאריך סיום',
    'LBL_DATE_TIME' => 'תאריך וזמן התחלה:',
    'LBL_DATE' => 'תאריך התחלה:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'פגישות',
    'LBL_DESCRIPTION' => 'תאור:',
    'LBL_DIRECTION' => 'הכוונה:',
    'LBL_DURATION_HOURS' => 'משך שעות:',
    'LBL_DURATION_MINUTES' => 'משך דקות:',
    'LBL_DURATION' => 'משך:',
    'LBL_EMAIL' => 'מיילים',
    'LBL_FIRST_NAME' => 'שם פרטי',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'רשימות',
    'LBL_HOURS_ABBREV' => 'ה',
    'LBL_HOURS_MINS' => '(שעות /דקות)',
    'LBL_INVITEE' => 'מוזמנים',
    'LBL_LAST_NAME' => 'שם משפחה',
    'LBL_ASSIGNED_TO_NAME' => 'הקצה ל:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש שהוקצה',
    'LBL_LIST_CLOSE' => 'סגור',
    'LBL_LIST_CONTACT' => 'אנשי קשר',
    'LBL_LIST_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_LIST_DATE' => 'תאריך התחלה',
    'LBL_LIST_DIRECTION' => 'הכוונה',
    'LBL_LIST_DUE_DATE' => 'תאריך סיום',
    'LBL_LIST_FORM_TITLE' => 'רשימת פגישות',
    'LBL_LIST_MY_MEETINGS' => 'הפגישות שלי',
    'LBL_LIST_RELATED_TO' => 'קשור ל',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_LIST_SUBJECT' => 'נושא',
    'LBL_LEADS_SUBPANEL_TITLE' => 'לידים',
    'LBL_LOCATION' => 'מיקום:',
    'LBL_MINSS_ABBREV' => 'מ',
    'LBL_MODIFIED_BY' => 'שונה ע"י:',
    'LBL_MODULE_NAME' => 'פגישות',
    'LBL_MODULE_TITLE' => 'פגישות: דף ראשי',
    'LBL_NAME' => 'שם',
    'LBL_NEW_FORM_TITLE' => 'שיחות מתוזמנות',
    'LBL_OUTLOOK_ID' => 'זיהוי אאוטלוק',
    'LBL_SEQUENCE' => 'עדכון רצף פגישה',
    'LBL_PHONE' => 'טלפון במשרד:',
    'LBL_REMINDER_TIME' => 'זמן תזכורת',
    'LBL_EMAIL_REMINDER_SENT' => 'נשלח דוא"ל תזכורת',
    'LBL_REMINDER' => 'תיזכורת',
    'LBL_REMINDER_POPUP' => 'חלון קופץ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'שליחת דוא"ל לכל המוזמנים',
    'LBL_EMAIL_REMINDER' => 'תזכורת דוא"ל',
    'LBL_EMAIL_REMINDER_TIME' => 'זמן תזכורת דוא"ל',
    'LBL_REMOVE' => 'הסרה',
    'LBL_SCHEDULING_FORM_TITLE' => 'מתזמן',
    'LBL_SEARCH_BUTTON' => 'חיפוש',
    'LBL_SEARCH_FORM_TITLE' => 'חפש פגישה',
    'LBL_SEND_BUTTON_LABEL' => 'שלח הזמנות',
    'LBL_SEND_BUTTON_TITLE' => 'שלח הזמנות',
    'LBL_STATUS' => 'סטטוס',
    'LBL_TYPE' => 'סוג פגישה',
    'LBL_PASSWORD' => 'סיסמת פגישה',
    'LBL_URL' => 'התחל/הצטרף לפגישה',
    'LBL_HOST_URL' => 'כתובת URL מארח',
    'LBL_DISPLAYED_URL' => 'הצג כתובת URL',
    'LBL_CREATOR' => 'יוצר הפגישה',
    'LBL_EXTERNALID' => 'מזהה אפליקצייה חיצונית',
    'LBL_SUBJECT' => 'נושא:',
    'LBL_TIME' => 'זמן התחלה:',
    'LBL_USERS_SUBPANEL_TITLE' => 'משתמשים',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'סוג הורה',
    'LBL_PARENT_ID' => 'מזהה האב',
    'LNK_MEETING_LIST' => 'פגישות',
    'LNK_NEW_APPOINTMENT' => 'שיחות מתוזמנות',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_IMPORT_MEETINGS' => 'ייבוא פגישות',

    'LBL_CREATED_USER' => 'משתמשים שנוצרו',
    'LBL_MODIFIED_USER' => 'משתמשים ששונו',
    'NOTICE_DURATION_TIME' => 'משך זמן חייב להיות גדול מאפס',
    'LBL_MEETING_INFORMATION' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'הצטרף לפגישה',
    'LBL_ACCEPT_STATUS' => 'אשר סטטוס',
    'LBL_ACCEPT_LINK' => 'קבל קישור',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'אינך יכול להצטרף לפגישה זאת כיוון שאינך מוזמן.',
    'LBL_EXTNOT_RECORD_LINK' => 'צפה בפגישה',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'אינך יכול להתחיל פגישה זאת כיוון שאינך מנהל מערכת או יוצר הפגישה.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'יצירת מוזמן',
    'LBL_CREATE_CONTACT' => 'כאיש קשר',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'כליד',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'ליצור & להוסיף',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'בטל',
    'LBL_EMPTY_SEARCH_RESULT' => 'מצטערים, לא נמצאו תוצאות. אנא צור מוזמן למטה.',
    'LBL_NO_ACCESS' => 'אין לך גישה כדי ליצור $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'סוג חזרה',
    'LBL_REPEAT_INTERVAL' => 'פרק זמן לחזרה',
    'LBL_REPEAT_DOW' => 'חזרה יומית',
    'LBL_REPEAT_UNTIL' => 'חזור עד ש',
    'LBL_REPEAT_COUNT' => 'כמות חזרות',
    'LBL_REPEAT_PARENT_ID' => 'מזהה האב של החזרה',
    'LBL_RECURRING_SOURCE' => 'מקור נשנה',

    'LBL_SYNCED_RECURRING_MSG' => 'מקור פגישה זאת במערכת אחרת שסונכרנה ל-SuiteCRM. כדי לבצע שינויים, ערוך את הפגישה המקורית במערכת האחרת. השינויים שתבצע במערכת האחרת יסונכרנו לרשומה זאת.',
    'LBL_RELATED_TO' => 'קשור אל',

    // for reminders
    'LBL_REMINDERS' => 'הצג תזכורת?',
    'LBL_REMINDERS_ACTIONS' => 'פעולות:',
    'LBL_REMINDERS_POPUP' => 'חלון קופץ',
    'LBL_REMINDERS_EMAIL' => 'מוזמני דוא"ל',
    'LBL_REMINDERS_WHEN' => 'כאשר:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'להסיר את התזכורת',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'הוספת כל המוזמנים',
    'LBL_REMINDERS_ADD_REMINDER' => 'הוספת תזכורת',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
