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

    'LBL_SHAREDWEEK' => 'Shared Week',
    'LBL_SHAREDMONTH' => 'Shared Month',

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'Načrtuj klic',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'View Task',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'Leto',

    'LBL_AGENDAWEEK' => 'Teden',
    'LBL_PREVIOUS_MONTH' => 'Prejšnji mesec',
    'LBL_PREVIOUS_DAY' => 'Prejšnji dan',
    'LBL_PREVIOUS_YEAR' => 'Prejšnje leto',
    'LBL_PREVIOUS_WEEK' => 'Prejšnji teden',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Naslednji dan',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Naslednji teden',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planirano',
    'LBL_BUSY' => 'Zaseden',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Koledarji uporabnikov',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'Skupni koledar',
    'LBL_USERS' => 'Users',
    'LBL_REFRESH' => 'Osveži',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Izberite uporabnike za prikaz koledarja',
    'LBL_FILTER_BY_TEAM' => 'Filtriraj seznam uporabnikov po timih:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE' => 'Začetni datum in čas',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'ur',
    'LBL_MINS_ABBREV' => 'Spremenil',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Ustvari aktivnost',
    'LBL_LOADING' => 'Loading...',
    'LBL_SAVING' => 'Saving...',
    'LBL_SENDING_INVITES' => 'Shranjevanje in pošiljanje vabil ...',
    'LBL_CONFIRM_REMOVE' => 'Ste prepričani, da želite odstraniti izbran vnos?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ste prepričani, da želite odstraniti vse ponavljajoče zapise?',
    'LBL_EDIT_RECORD' => 'Uredi aktivnost',
    'LBL_ERROR_SAVING' => 'Napaka pri shranjevanju',
    'LBL_ERROR_LOADING' => 'Napaka pri nalaganju',
    'LBL_GOTO_DATE' => 'Pojdi na datum',
    'NOTICE_DURATION_TIME' => 'Čas trajanja mora biti večji od 0',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Napredno', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Ni zadetka za polje: Dodeljeno',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Prikaži časovne reže v skupnem dnevnem in tedenskem pogledu:',
    'LBL_SETTINGS_TIME_STARTS' => 'Čas začetka:',
    'LBL_SETTINGS_TIME_ENDS' => 'Čas zaključka',
    'LBL_SETTINGS_CALLS_SHOW' => 'Prikaži klice',
    'LBL_SETTINGS_TASKS_SHOW' => 'Prikaži naloge',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Prikaži opravljene sestanke, klice in naloge',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Ločeni skupni koledarji:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Sprejmi',
    'LBL_SEND_INVITES' => 'Pošlji povabila',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Ponavljanje',

    'LBL_REPEAT_TYPE' => 'Ponovi',
    'LBL_REPEAT_INTERVAL' => 'Vsak',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'ponovitve',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Ponavljaj do',
    'LBL_REPEAT_COUNT' => 'Število ponovitev',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Uredi vse ponovitve',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Izbriši vse ponovitve',

    'LBL_DATE_END_ERROR' => 'Datum zaključka je manjši od datuma začetka',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'Splošne nastavitve',
    'LBL_COLOR_SETTINGS' => 'Barvne nastavitve',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Obroba',
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
            '8' => "Avgust",
            '9' => "September",
            '10' => "Oktober",
            '11' => "November",
            '12' => "December",
        ),
);
