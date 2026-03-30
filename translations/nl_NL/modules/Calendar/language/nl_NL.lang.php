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

    'LBL_SHAREDWEEK' => 'Gedeelde week',
    'LBL_SHAREDMONTH' => 'Gedeelde maand',

    'LBL_MODULE_NAME' => 'Agenda',
    'LBL_MODULE_TITLE' => 'Agenda',
    'LNK_NEW_CALL' => 'Nieuw telefoongesprek',
    'LNK_NEW_MEETING' => 'Nieuwe afspraak',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Telefoongesprekken',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'Taak weergeven',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'Bekijk Evenement',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'Jaar',

    'LBL_AGENDAWEEK' => 'Week',
    'LBL_PREVIOUS_MONTH' => 'Vorige maand',
    'LBL_PREVIOUS_DAY' => 'Vorige dag',
    'LBL_PREVIOUS_YEAR' => 'Vorig jaar',
    'LBL_PREVIOUS_WEEK' => 'Vorige week',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Volgende dag',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Volgende week',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Gepland',
    'LBL_BUSY' => 'Bezet',
    'LBL_CONFLICT' => 'Conflict',
    'LBL_USER_CALENDARS' => 'Gebruikersagendas',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Volgende',
    'LBL_SHARED_CAL_TITLE' => 'Gedeelde agenda',
    'LBL_USERS' => 'Gebruikers',
    'LBL_REFRESH' => 'Ververs',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Selecteer gebruikers voor agenda',
    'LBL_FILTER_BY_TEAM' => 'Filter gebruikerslijst per team:',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_DATE' => 'Startdatum & tijd',
    'LBL_CREATE_MEETING' => 'Vergadering plannen',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'u',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Creeer Activiteit',
    'LBL_LOADING' => 'Laden...',
    'LBL_SAVING' => 'Opslaan...',
    'LBL_SENDING_INVITES' => 'Opslaan & uitnodigingen versturen...',
    'LBL_CONFIRM_REMOVE' => 'Weet u zeker dat u dit record wilt verwijderen?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Weet u zker dat u al deze records wilt verwijderen?',
    'LBL_EDIT_RECORD' => 'Bewerkt activiteit',
    'LBL_ERROR_SAVING' => 'Fout bij opslaan',
    'LBL_ERROR_LOADING' => 'Fout bij laden',
    'LBL_GOTO_DATE' => 'Ga naar datum',
    'NOTICE_DURATION_TIME' => 'Tijdsduur moet groter zijn dan 0',
    'LBL_STYLE_BASIC' => 'Basis', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Geavanceerd', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Geen match voor veld: Toegekend aan',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Toon tijden in Dag en Week stijl:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start tijd:',
    'LBL_SETTINGS_TIME_ENDS' => 'Eind tijd:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Toon taken:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Toon taken:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Overzicht afgehandelde Vergaderingen, Oproepen en Taken:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Gedeelde agenda afzonderlijk:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Toepassen',
    'LBL_SEND_INVITES' => 'Verstuur uitnodigingen',
    'LBL_CANCEL_BUTTON' => 'Annuleren',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Herhaling',

    'LBL_REPEAT_TYPE' => 'Herhaal',
    'LBL_REPEAT_INTERVAL' => 'Allen',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'Herhalingen',
    'LBL_REPEAT_END_BY' => 'Door',
    'LBL_REPEAT_DOW' => 'Op/Verder',
    'LBL_REPEAT_UNTIL' => 'Herhaal tot',
    'LBL_REPEAT_COUNT' => 'Aantal Herhalingen',
    'LBL_REPEAT_LIMIT_ERROR' => 'Uw verzoek gaat meer dan de toegestane $limit van afspraken creeeren.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Bewerk alles',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Verwijder alles',

    'LBL_DATE_END_ERROR' => 'Eind datum is voor de start datum',
    'ERR_YEAR_BETWEEN' => 'Sorry, de agenda kan niet in dit jaar plannen<br>Het jaar moet tussen 1970 en 2037 zijn',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: niet gedefineerd voor deze opmaak',
    'LBL_NO_ITEMS_MOBILE' => 'U agenda is leeg voor deze week.',
    'LBL_GENERAL_SETTINGS' => 'Algemene instellingen',
    'LBL_COLOR_SETTINGS' => 'Kleurinstellingen',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Grens',
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
