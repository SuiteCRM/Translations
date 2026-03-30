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

    'LBL_SHAREDWEEK' => 'Sdílený týden',
    'LBL_SHAREDMONTH' => 'Sdílený měsíc',

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'Naplánovat hovor',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'Zobrazit úkol',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'Zobrazit událost',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'Rok',

    'LBL_AGENDAWEEK' => 'Týden',
    'LBL_PREVIOUS_MONTH' => 'Předchozí měsíc',
    'LBL_PREVIOUS_DAY' => 'Předchozí den',
    'LBL_PREVIOUS_YEAR' => 'Předchozí rok',
    'LBL_PREVIOUS_WEEK' => 'Předchozí týden',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Následující den',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Následující týden',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Naplánováno',
    'LBL_BUSY' => 'Obsazeno',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Kalendáře uživatelů',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'Sdílený kalendář',
    'LBL_USERS' => 'Users',
    'LBL_REFRESH' => 'Obnovit',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Vyberte uživatele pro zobrazení kalendáře',
    'LBL_FILTER_BY_TEAM' => 'Vyfiltrovat uživatele podle týmu:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE' => 'Datum a čas zahájení',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Vytvořit aktivitu',
    'LBL_LOADING' => 'Loading...',
    'LBL_SAVING' => 'Saving...',
    'LBL_SENDING_INVITES' => 'Ukládání a rozesílání pozvánek...',
    'LBL_CONFIRM_REMOVE' => 'Opravdu chcete odebrat tento záznam?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Opravdu chcete odebrat všechny opakující se záznamy?',
    'LBL_EDIT_RECORD' => 'Upravit aktivitu',
    'LBL_ERROR_SAVING' => 'Chyba při ukládání',
    'LBL_ERROR_LOADING' => 'Chyba při načítání',
    'LBL_GOTO_DATE' => 'Přejít na datum',
    'NOTICE_DURATION_TIME' => 'Doba trvání musí být větší než 0',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Rozšířené', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Žádná shoda pro pole: Přiřazeno k',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zobrazit časové úseky v zobrazení dnů a týdnů:',
    'LBL_SETTINGS_TIME_STARTS' => 'Čas zahájení:',
    'LBL_SETTINGS_TIME_ENDS' => 'Čas ukončení:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Zobrazit hovory:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Zobrazit úkoly:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Zobrazit dokončené schůzky, hovory a úkoly:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Sdílené kalendáře samostatné:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Použít',
    'LBL_SEND_INVITES' => 'Odeslat pozvání',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Opakování',

    'LBL_REPEAT_TYPE' => 'Opakovat',
    'LBL_REPEAT_INTERVAL' => 'Každý',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'opakování',
    'LBL_REPEAT_END_BY' => 'Podle',
    'LBL_REPEAT_DOW' => 'Na',
    'LBL_REPEAT_UNTIL' => 'Opakovat dokud',
    'LBL_REPEAT_COUNT' => 'Počet opakování',
    'LBL_REPEAT_LIMIT_ERROR' => 'Váš požadavek chtěl vytvořit více než $limit schůzek.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Upravit všechna opakování',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Smazat všechny opakování',

    'LBL_DATE_END_ERROR' => 'Datum ukončení je před počátečním datem',
    'ERR_YEAR_BETWEEN' => 'Promiňte, kalendář nemůže zpracovat rok který požadujete <br>rok musí být mezi lety 1970 a 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: není definována pro toto zobrazení.',
    'LBL_NO_ITEMS_MOBILE' => 'Váš kalendář je pro tento týden prázdný.',
    'LBL_GENERAL_SETTINGS' => 'Obecná nastavení',
    'LBL_COLOR_SETTINGS' => 'Nastavení barev',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Okraj',
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
