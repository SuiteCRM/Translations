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

    'LBL_SHAREDWEEK' => 'Megosztott hét',
    'LBL_SHAREDMONTH' => 'Megosztott hónap',

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'Hívás naplózása',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'Feladat megtekintése',
    'LNK_EVENT' => 'Esemény',
    'LNK_EVENT_VIEW' => 'Esemény megtekintése',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'Év',

    'LBL_AGENDAWEEK' => 'Hét',
    'LBL_PREVIOUS_MONTH' => 'Előző hónap',
    'LBL_PREVIOUS_DAY' => 'Előző nap',
    'LBL_PREVIOUS_YEAR' => 'Előző év',
    'LBL_PREVIOUS_WEEK' => 'Előző hét',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Következő nap',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Következő hét',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Ütemezett',
    'LBL_BUSY' => 'Foglalt',
    'LBL_CONFLICT' => 'Ütközés',
    'LBL_USER_CALENDARS' => 'Felhasználó naptárai',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'Megosztott naptár',
    'LBL_USERS' => 'Users',
    'LBL_REFRESH' => 'Frissítés',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Válassza ki a felhasználót a naptár megtekintéséhez',
    'LBL_FILTER_BY_TEAM' => 'Felhasználói lista szűrése csoport szerint:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_DATE' => 'Kezdő dátum & idő',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'ó',
    'LBL_MINS_ABBREV' => 'p',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Tevékenység létrehozása',
    'LBL_LOADING' => 'Loading...',
    'LBL_SAVING' => 'Saving...',
    'LBL_SENDING_INVITES' => 'Ment és meghívót küld...',
    'LBL_CONFIRM_REMOVE' => 'Biztos benne, hogy el kívánja távolítani ezt a rekordot?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Biztosan el kívánja távolítani az összes ismétlődő rekordokat?',
    'LBL_EDIT_RECORD' => 'Tevékenység szerkesztése',
    'LBL_ERROR_SAVING' => 'Hiba történt mentéskor',
    'LBL_ERROR_LOADING' => 'Hiba betöltése közben',
    'LBL_GOTO_DATE' => 'Ugrás dátumhoz',
    'NOTICE_DURATION_TIME' => 'Az időtartamnak nagyobbnak kell lennie 0-nál',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Haladóknak', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Nincs találat: Felelős',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Megjelenítés napi és heti nézetben',
    'LBL_SETTINGS_TIME_STARTS' => 'Kezdés időpontja:',
    'LBL_SETTINGS_TIME_ENDS' => 'Befejezés időpontja:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Hívások:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Tevékenységek:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Befejezett Találkozók, Hívások és Feladatok megjelenítése:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Megosztott naptár külön:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Törlés',
    'LBL_APPLY_BUTTON' => 'Alkalmaz',
    'LBL_SEND_INVITES' => 'Meghívók küldése',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Bezárás',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Ismétlődés',

    'LBL_REPEAT_TYPE' => 'Ismételje meg ',
    'LBL_REPEAT_INTERVAL' => 'Minden',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'Ismétlődés',
    'LBL_REPEAT_END_BY' => 'Által',
    'LBL_REPEAT_DOW' => 'Be',
    'LBL_REPEAT_UNTIL' => 'Ismételjük meg, amíg',
    'LBL_REPEAT_COUNT' => 'Imétlések száma',
    'LBL_REPEAT_LIMIT_ERROR' => 'Kérésének megfelelően készül $limit találkozó.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Minden imsétlődés szerkesztése',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Minden ismétlődés törlése',

    'LBL_DATE_END_ERROR' => 'Záró dátum a Kezdődátum előtti kell legyen',
    'ERR_YEAR_BETWEEN' => 'Sajnáljuk, de naptár nem tudja kezelni a kérését. <br>Az év 1970 és 2037 között kell legyen',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: Ebben a nézetben nem definiált',
    'LBL_NO_ITEMS_MOBILE' => 'Az ön naptára üres a héten.',
    'LBL_GENERAL_SETTINGS' => 'Általános beállítások',
    'LBL_COLOR_SETTINGS' => 'Színbeállítások',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Tartalom',
    'LBL_BORDER' => 'Keret',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sun",
            '1' => "Mon",
            '2' => "Tue",
            '3' => "Wed",
            '4' => "Thu",
            '5' => "Fri",
            '6' => "Sat",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sunday",
            '1' => "Monday",
            '2' => "Tuesday",
            '3' => "Wednesday",
            '4' => "Thursday",
            '5' => "Friday",
            '6' => "Saturday",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "May",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "January",
            '2' => "February",
            '3' => "March",
            '4' => "April",
            '5' => "May",
            '6' => "June",
            '7' => "July",
            '8' => "August",
            '9' => "September",
            '10' => "October",
            '11' => "November",
            '12' => "December",
        ),
);
