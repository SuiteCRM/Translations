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

    'LBL_SHAREDWEEK' => 'Shared Week',
    'LBL_SHAREDMONTH' => 'Shared Month',

    'LBL_MODULE_NAME' => 'Egutegia',
    'LBL_MODULE_TITLE' => 'Egutegia',
    'LNK_NEW_CALL' => 'Deia programatu',
    'LNK_NEW_MEETING' => 'Bilera planifikatu',
    'LNK_NEW_TASK' => 'Ataza berria',
    'LNK_CALL_LIST' => 'Deiak',
    'LNK_MEETING_LIST' => 'Bilerak',
    'LNK_TASK_LIST' => 'Atazak',
    'LNK_TASK' => 'Atazak',
    'LNK_TASK_VIEW' => 'View Task',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LNK_VIEW_CALENDAR' => 'Gaur',
    'LNK_IMPORT_CALLS' => 'Inportatu deiak',
    'LNK_IMPORT_MEETINGS' => 'Inportatu bilerak',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Hilabetea',
    'LBL_AGENDADAY' => 'Eguna',
    'LBL_YEAR' => 'Urtea',

    'LBL_AGENDAWEEK' => 'Astea',
    'LBL_PREVIOUS_MONTH' => 'Aurreko hilabetea',
    'LBL_PREVIOUS_DAY' => 'Aurreko eguna',
    'LBL_PREVIOUS_YEAR' => 'Aurreko urtea',
    'LBL_PREVIOUS_WEEK' => 'Aurreko astea',
    'LBL_NEXT_MONTH' => 'Hurrengo hilabetea ',
    'LBL_NEXT_DAY' => 'Hurrengo eguna',
    'LBL_NEXT_YEAR' => 'Hurrengo urtea',
    'LBL_NEXT_WEEK' => 'Hurrengo astea',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planifikatua',
    'LBL_BUSY' => 'Lanpetua',
    'LBL_CONFLICT' => 'Gatazka',
    'LBL_USER_CALENDARS' => 'Erabiltzaile egutegiak',
    'LBL_SHARED' => 'Partekatua',
    'LBL_PREVIOUS_SHARED' => 'Aurrekoa',
    'LBL_NEXT_SHARED' => 'Hurrengoa',
    'LBL_SHARED_CAL_TITLE' => 'Partekatutako egutegia',
    'LBL_USERS' => 'Erabiltzaileak',
    'LBL_REFRESH' => 'Eguneratu',
    'LBL_EDIT_USERLIST' => 'Erabiltzaileen zerrenda',
    'LBL_SELECT_USERS' => 'Aukeratu erabiltzaileak egutegia bistaratzeko',
    'LBL_FILTER_BY_TEAM' => 'Ekipoka egindako erabiltzaile iragazpena',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitutako erabiltzailearen izena',
    'LBL_DATE' => 'Hasiera-data eta ordua',
    'LBL_CREATE_MEETING' => 'Bilera planifikatu',
    'LBL_CREATE_CALL' => 'Deia planifikatu',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'Ez',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_LOADING' => 'Loading...',
    'LBL_SAVING' => 'Saving...',
    'LBL_SENDING_INVITES' => 'Saving & Sending Invites...',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
    'LBL_EDIT_RECORD' => 'Edit Activity',
    'LBL_ERROR_SAVING' => 'Error while saving',
    'LBL_ERROR_LOADING' => 'Error while loading',
    'LBL_GOTO_DATE' => 'Go to Date',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Aurreratua', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Gaia',
    'LBL_DURATION' => 'Iraupena',
    'LBL_STATUS' => 'Egoera',
    'LBL_PRIORITY' => 'Lehentasuna',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Show Calls:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Gorde',
    'LBL_DELETE_BUTTON' => 'Ezabatu',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Gonbidapenak bidali ',
    'LBL_CANCEL_BUTTON' => 'Ezeztatu',
    'LBL_CLOSE_BUTTON' => 'Itxi',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Bertaratutakoak',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'Amaiera',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Border',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Iga",
            '1' => "Astel",
            '2' => "Astear",
            '3' => "Asteaz",
            '4' => "Oste",
            '5' => "Osti",
            '6' => "Lar",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Igandea",
            '1' => "Astelehena",
            '2' => "Asteartea",
            '3' => "Asteazkena",
            '4' => "Osteguna",
            '5' => "Ostirala",
            '6' => "Larunbata",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Urt",
            '2' => "Ots",
            '3' => "Mar",
            '4' => "Api",
            '5' => "Maiatza",
            '6' => "Eka",
            '7' => "Uzt",
            '8' => "Abu",
            '9' => "Ira",
            '10' => "Urr",
            '11' => "Aza",
            '12' => "Abe",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Urtarrila",
            '2' => "Otsaila",
            '3' => "Martxoa",
            '4' => "Apirila",
            '5' => "Maiatza",
            '6' => "Ekaina",
            '7' => "Uztaila",
            '8' => "Abuztua",
            '9' => "Iraila",
            '10' => "Urria",
            '11' => "Azaroa",
            '12' => "Abendua",
        ),
);
