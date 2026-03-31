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

    'LBL_SHAREDWEEK' => 'Delad vecka',
    'LBL_SHAREDMONTH' => 'Delad månad',

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'Schemalägg telefonsamtal',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'Visa uppgift',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'Visa händelse',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'År',

    'LBL_AGENDAWEEK' => 'Vecka',
    'LBL_PREVIOUS_MONTH' => 'Föregående månad',
    'LBL_PREVIOUS_DAY' => 'Föregående dag',
    'LBL_PREVIOUS_YEAR' => 'Föregående år',
    'LBL_PREVIOUS_WEEK' => 'Föregående vecka',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Nästa dag',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Nästa vecka',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Schemalagd',
    'LBL_BUSY' => 'Upptagen',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Användar kalendrar',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'Delade kalendrar',
    'LBL_USERS' => 'Users',
    'LBL_REFRESH' => 'Uppdatera',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Välj använder för att visa i kalendern',
    'LBL_FILTER_BY_TEAM' => 'Filtrera användarlistan efter team:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE' => 'Startdatum & tid',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'tim',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nej',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Skapa aktivitet',
    'LBL_LOADING' => 'Laddar......',
    'LBL_SAVING' => 'Sparar......',
    'LBL_SENDING_INVITES' => 'Sparar och skickar inbjudningar...',
    'LBL_CONFIRM_REMOVE' => 'Är du säker du vill ta bort posten?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Är du säker på att du vill ta bort alla återkommande poster?',
    'LBL_EDIT_RECORD' => 'Redigera aktivitet',
    'LBL_ERROR_SAVING' => 'Fel vid sparande',
    'LBL_ERROR_LOADING' => 'Fel vid laddning',
    'LBL_GOTO_DATE' => 'Gå till datum',
    'NOTICE_DURATION_TIME' => 'Varaktighetstiden måste vara större än 0',
    'LBL_STYLE_BASIC' => 'Grundläggande', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Avancerad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Ingen match för fält: Tilldelad till',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Visa tider i dag- och veckovisningar:',
    'LBL_SETTINGS_TIME_STARTS' => 'Starttid:',
    'LBL_SETTINGS_TIME_ENDS' => 'Sluttid:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Visa samtal:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Visa uppgifter:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Visa avslutade möten, samtal och uppgifter:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Delad kalender separat:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Tillämpa',
    'LBL_SEND_INVITES' => 'Skicka inbjudan',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Återkommande',

    'LBL_REPEAT_TYPE' => 'Upprepa',
    'LBL_REPEAT_INTERVAL' => 'Varje',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'upprepningar',
    'LBL_REPEAT_END_BY' => 'Av',
    'LBL_REPEAT_DOW' => 'Den',
    'LBL_REPEAT_UNTIL' => 'Upprepa tills',
    'LBL_REPEAT_COUNT' => 'Antal upprepningar',
    'LBL_REPEAT_LIMIT_ERROR' => 'Din förfrågan skulle skapa fler än $limit möten.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Redigera alla upprepningar',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Ta bort alla upprepningar',

    'LBL_DATE_END_ERROR' => 'Slutdatum är innan startdatum',
    'ERR_YEAR_BETWEEN' => 'Tyvärr, kalendern kan inte hantera det år du begärde<br>År måste vara mellan 1970 och 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: inte definierad för denna vy',
    'LBL_NO_ITEMS_MOBILE' => 'Din kalender är klar för veckan.',
    'LBL_GENERAL_SETTINGS' => 'Allmänna inställningar',
    'LBL_COLOR_SETTINGS' => 'Färginställningar',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Ram',
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
            '8' => "Augusti",
            '9' => "September",
            '10' => "Oktober",
            '11' => "November",
            '12' => "December",
        ),
);
