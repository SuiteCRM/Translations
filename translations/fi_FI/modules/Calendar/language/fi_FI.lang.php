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

    'LBL_SHAREDWEEK' => 'Jaettu viikko',
    'LBL_SHAREDMONTH' => 'Jaettu kuukausi',

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'Kirjaa puhelu',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Tehtävä',
    'LNK_TASK_VIEW' => 'Näytä tehtävä',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'Näytä tapahtuma',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'Vuosi',

    'LBL_AGENDAWEEK' => 'Viikko',
    'LBL_PREVIOUS_MONTH' => 'Edellinen kuukausi',
    'LBL_PREVIOUS_DAY' => 'Edellinen päivä',
    'LBL_PREVIOUS_YEAR' => 'Edellinen vuosi',
    'LBL_PREVIOUS_WEEK' => 'Edellinen viikko',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Seuraava päivä',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Seuraava viikko',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Ajoitettu',
    'LBL_BUSY' => 'Varattu',
    'LBL_CONFLICT' => 'Ristiriita',
    'LBL_USER_CALENDARS' => 'Käyttäjän kalenterit',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'Jaettu kalenteri',
    'LBL_USERS' => 'Users',
    'LBL_REFRESH' => 'Päivitä',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Valitse kalenterissa näytettävät käyttäjät',
    'LBL_FILTER_BY_TEAM' => 'Suodata tiimin mukaan:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE' => 'Aloitus pvm & aika',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'min',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Luo tehtävä',
    'LBL_LOADING' => 'Ladataan...',
    'LBL_SAVING' => 'Saving...',
    'LBL_SENDING_INVITES' => 'Kutsujen tallennus ja lähetys...',
    'LBL_CONFIRM_REMOVE' => 'Haluatko varmasti poistaa tämän tietueen?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Haluatko varmasti poistaa kaikki toistuvat tietueet?',
    'LBL_EDIT_RECORD' => 'Muokkaa tehtävää',
    'LBL_ERROR_SAVING' => 'Virhe tallennettaessa',
    'LBL_ERROR_LOADING' => 'Virhe ladattaessa',
    'LBL_GOTO_DATE' => 'Siirry päivämäärään',
    'NOTICE_DURATION_TIME' => 'Keston tulee olla yli 0',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Edistynyt', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Ei vastaavuutta tietokentälle: Kohdistettu käyttäjälle',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Näytä aikavälit päivä- ja viikkonäkymissä:',
    'LBL_SETTINGS_TIME_STARTS' => 'Ensimmäinen aika:',
    'LBL_SETTINGS_TIME_ENDS' => 'Viimeinen aika:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Näytä puhelut:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Näytä tehtävät:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Näytä tapahtuneet tapaamiset, puhelut ja tehtävät:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Erillinen jaettu kalenteri:',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Hyväksy',
    'LBL_SEND_INVITES' => 'Lähetä kutsut',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Toistuvuus',

    'LBL_REPEAT_TYPE' => 'Toista',
    'LBL_REPEAT_INTERVAL' => 'Kuinka usein?',
    'LBL_REPEAT_END' => 'Toisto loppuu',
    'LBL_REPEAT_END_AFTER' => ' ',
    'LBL_REPEAT_OCCURRENCES' => 'kerran jälkeen',
    'LBL_REPEAT_END_BY' => 'tänä päivänä:',
    'LBL_REPEAT_DOW' => 'Viikonpäivinä',
    'LBL_REPEAT_UNTIL' => 'Toista kunnes',
    'LBL_REPEAT_COUNT' => 'Toistumiskertoja',
    'LBL_REPEAT_LIMIT_ERROR' => 'Pyyntösi aikoi luoda yli $limit tapaamista.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Muokkaa kaikkia toistoja',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Poista kaikki toistumiset',

    'LBL_DATE_END_ERROR' => 'Lopetus pvm on ennen aloitus pvm',
    'ERR_YEAR_BETWEEN' => 'Kalenteri ei pysty käsittelemään pyydettyä vuotta.<br>Vuoden pitää olla välillä 1970–2037.',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: määrittelemättä tässä näkymässä',
    'LBL_NO_ITEMS_MOBILE' => 'Tällä viikolla kalenterissasi ei ole mitään.',
    'LBL_GENERAL_SETTINGS' => 'Yleisasetukset',
    'LBL_COLOR_SETTINGS' => 'Väriasetukset',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Reuna',
    'LBL_TEXT' => 'Teksti',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Aurinko",
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
