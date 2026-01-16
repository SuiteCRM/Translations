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
    'LBL_MODULE_NAME' => 'פעילויות',
    'LBL_MODULE_TITLE' => 'פעילויות: דף ראשי',
    'LBL_SEARCH_FORM_TITLE' => 'חיפוש פעילויות',
    'LBL_LIST_FORM_TITLE' => 'רשימת פעילויות',
    'LBL_LIST_SUBJECT' => 'נושא',
    'LBL_OVERVIEW' => 'סקירת חשבון', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'TASKS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEETINGS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CALLS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'פגישות',
    'LBL_CALL_TYPE' => 'שיחות טלפון',
    'LBL_EMAIL_TYPE' => 'מיילים',
    'LBL_NOTE_TYPE' => 'תזכורת',
    'LBL_DATA_TYPE_START' => 'התחל:',
    'LBL_DATA_TYPE_SENT' => 'שלח:',
    'LBL_DATA_TYPE_MODIFIED' => 'שנה:',
    'LBL_LIST_CONTACT' => 'אנשי קשר',
    'LBL_LIST_RELATED_TO' => 'קשור ל',
    'LBL_LIST_DATE' => 'תאריך',
    'LBL_LIST_CLOSE' => 'סגור',
    'LBL_SUBJECT' => 'נושא:',
    'LBL_STATUS' => 'סטטוס',
    'LBL_LOCATION' => 'מיקום:',
    'LBL_DATE_TIME' => 'תאריך וזמן התחלה:',
    'LBL_DATE' => 'תאריך התחלה:',
    'LBL_TIME' => 'זמן התחלה:',
    'LBL_DURATION' => 'משך:',
    'LBL_HOURS_MINS' => '(שעות /דקות)',
    'LBL_CONTACT_NAME' => 'שם איש קשר: ',
    'LBL_DESCRIPTION' => 'תאור:',
    'LNK_NEW_CALL' => 'לקבוע שיחה',
    'LNK_NEW_MEETING' => 'לקבוע פגישה',
    'LNK_NEW_TASK' => 'ליצור משימה',
    'LNK_NEW_NOTE' => 'צור תזכורת או קישור',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'שיחות',
    'LNK_MEETING_LIST' => 'פגישות',
    'LNK_TASK_LIST' => 'תצוגת משימות',
    'LNK_NOTE_LIST' => 'תזכורות',
    'LBL_DELETE_ACTIVITY' => 'האם אתה בטוח שברצונך למחוק פעילות זו?',
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את החשבון',
    'LBL_INVITEE' => 'מוזמנים',
    'LBL_LIST_DIRECTION' => 'הכוונה',
    'LBL_DIRECTION' => 'הכוונה',
    'LNK_NEW_APPOINTMENT' => 'פגישה חדשה',
    'LNK_VIEW_CALENDAR' => 'צפיה ביומן',
    'LBL_OPEN_ACTIVITIES' => 'פעילויות פתוחות',
    'LBL_HISTORY' => 'הסטוריה',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'ליצור משימה',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'ליצור משימה',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'לקבוע פגישה',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'לקבוע פגישה',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'לקבוע שיחה',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'ליצור הערה',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'ליצור הערה',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'דואל לארכיון',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'דואל לארכיון',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_LIST_DUE_DATE' => 'תאריך סיום',
    'LBL_LIST_LAST_MODIFIED' => 'שונה לאחרונה',
    'LNK_IMPORT_CALLS' => 'ייבא שיחות',
    'LNK_IMPORT_MEETINGS' => 'ייבוא פגישות',
    'LNK_IMPORT_TASKS' => 'ייבא משימות',
    'LNK_IMPORT_NOTES' => 'יבא תזכורות',
    'LBL_ACCEPT_THIS' => 'קבל?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'פעילויות פתוחות',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'משתמש שהוקצה',

    'LBL_ACCEPT' => 'לקבל?' /*for 508 compliance fix*/,
);
