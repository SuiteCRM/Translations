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

    'LBL_SHAREDWEEK' => 'Pinagsaluhang linggo',
    'LBL_SHAREDMONTH' => 'Pinagsaluhang buwan',

    'LBL_MODULE_NAME' => 'Ang Kalendaryo',
    'LBL_MODULE_TITLE' => 'Ang Kalendaryo',
    'LNK_NEW_CALL' => 'Iskedyul na Tawag',
    'LNK_NEW_MEETING' => 'Iskedyul ng meeting',
    'LNK_NEW_TASK' => 'Gumawa ng gawain',
    'LNK_CALL_LIST' => 'Ang mga tawag',
    'LNK_MEETING_LIST' => 'Mga pagpupulong',
    'LNK_TASK_LIST' => 'Ang mga gawain',
    'LNK_TASK' => 'Tunkulin',
    'LNK_TASK_VIEW' => 'I-view ang gawain',
    'LNK_EVENT' => 'Kaganapan',
    'LNK_EVENT_VIEW' => 'I-view ang event',
    'LNK_VIEW_CALENDAR' => 'Sa araw na ito',
    'LNK_IMPORT_CALLS' => 'Mag-angkat ng mga tawag',
    'LNK_IMPORT_MEETINGS' => 'I-import ang mga pagpupulong',
    'LNK_IMPORT_TASKS' => 'Mag-angkat ng mga gawain',
    'LBL_MONTH' => 'Buwan',
    'LBL_AGENDADAY' => 'Araw',
    'LBL_YEAR' => 'Taon',

    'LBL_AGENDAWEEK' => 'Linggo',
    'LBL_PREVIOUS_MONTH' => 'Nakaraang buwan',
    'LBL_PREVIOUS_DAY' => 'Nakalipas na araw',
    'LBL_PREVIOUS_YEAR' => 'Nakalipas na Taon',
    'LBL_PREVIOUS_WEEK' => 'Nakalipas na linggo',
    'LBL_NEXT_MONTH' => 'Sa susunod na buwan',
    'LBL_NEXT_DAY' => 'Susunod na araw',
    'LBL_NEXT_YEAR' => 'Sunod na Taon',
    'LBL_NEXT_WEEK' => 'Susunod na linggo',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Naka-iskedyul',
    'LBL_BUSY' => 'Abala',
    'LBL_CONFLICT' => 'Gusot',
    'LBL_USER_CALENDARS' => 'Mga Kalendaryo ng user',
    'LBL_SHARED' => 'Naibahagi',
    'LBL_PREVIOUS_SHARED' => 'Nakaraan',
    'LBL_NEXT_SHARED' => 'Susunod',
    'LBL_SHARED_CAL_TITLE' => 'Naibahagi na kalendaryo',
    'LBL_USERS' => 'Ang mga gumagamit',
    'LBL_REFRESH' => 'I-refresh',
    'LBL_EDIT_USERLIST' => 'Ang listahan ng gumagamit',
    'LBL_SELECT_USERS' => 'Pumili ng mga user para sa displey ng kalendaryo',
    'LBL_FILTER_BY_TEAM' => 'I-filiter ang listahan ng user ayon sa grupo:',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_DATE' => 'I-start ang petsa at oras',
    'LBL_CREATE_MEETING' => 'Iskedyul ng meeting',
    'LBL_CREATE_CALL' => 'Tawag ay log',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Oo',
    'LBL_NO' => 'Hindi',
    'LBL_SETTINGS' => 'Ang mga setting',
    'LBL_CREATE_NEW_RECORD' => 'Lumikha ng aktibidad',
    'LBL_LOADING' => 'Kumakarga...',
    'LBL_SAVING' => 'Nagse-save...',
    'LBL_SENDING_INVITES' => 'Nagsi-save at nagsi-send ng mga invite...',
    'LBL_CONFIRM_REMOVE' => 'Sigurado ka ba na gusto mong tangalin ang rekord?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Sigurado ka ba na gusto mong tangalin ang lahat ng umuulit na mga rekord?',
    'LBL_EDIT_RECORD' => 'I-edit ang aktibidad',
    'LBL_ERROR_SAVING' => 'Nagka-error habang nagsi-save',
    'LBL_ERROR_LOADING' => 'Naka-error habang naglo-load',
    'LBL_GOTO_DATE' => 'Pumunta sa petsa',
    'NOTICE_DURATION_TIME' => 'Ang agwat ng oras ay dapat mas malaki sa 0',
    'LBL_STYLE_BASIC' => 'Pangunahin', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Ang advans', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Walang tugma para sa field: naka-assign sa',
    'LBL_SUBJECT' => 'Ang paksa',
    'LBL_DURATION' => 'Agwat',
    'LBL_STATUS' => 'Katayuan',
    'LBL_PRIORITY' => 'Prayoridad',

    'LBL_SETTINGS_TITLE' => 'Ang mga setting',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'I-displey ang mga puwang ng oras sa mga view na araw at linggo:',
    'LBL_SETTINGS_TIME_STARTS' => 'Oras ng Pagsisimula:',
    'LBL_SETTINGS_TIME_ENDS' => 'Oras ng wakas:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Ipakita ang mga tawag:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Ipakita ang mga gawain:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Ipakita ang mga natapos na mga meeting, mga tawag at mga gawain:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'I-separate ang naibahagi na kalendaryo:',

    'LBL_SAVE_BUTTON' => 'I-seyb',
    'LBL_DELETE_BUTTON' => 'Tanggalin',
    'LBL_APPLY_BUTTON' => 'Mag aplay',
    'LBL_SEND_INVITES' => 'I-save at magpadala ng mga imbitasyon',
    'LBL_CANCEL_BUTTON' => 'Kanselahin',
    'LBL_CLOSE_BUTTON' => 'Ang pagsasara',

    'LBL_GENERAL_TAB' => 'Mga detalye',
    'LBL_PARTICIPANTS_TAB' => 'Mga imbitado',
    'LBL_REPEAT_TAB' => 'Pag ulit',

    'LBL_REPEAT_TYPE' => 'Ulitin',
    'LBL_REPEAT_INTERVAL' => 'Bawat',
    'LBL_REPEAT_END' => 'Katapusan',
    'LBL_REPEAT_END_AFTER' => 'Pagkatapos',
    'LBL_REPEAT_OCCURRENCES' => 'pag ulit',
    'LBL_REPEAT_END_BY' => 'Sa pamamagitan ng',
    'LBL_REPEAT_DOW' => 'Sa',
    'LBL_REPEAT_UNTIL' => 'Ulitin hanggang sa',
    'LBL_REPEAT_COUNT' => 'Bilang ng mga recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Ang iyong kahilingan ay pagpunta upang lumikha nang mahigit $limit mga pulong.',

    'LBL_EDIT_ALL_RECURRENCES' => 'I-edit ang lahat ng mga pag-uulit',
    'LBL_REMOVE_ALL_RECURRENCES' => 'I-delete lahat ng mga pag-uulit',

    'LBL_DATE_END_ERROR' => 'Ang wakas na petsa ay bago ang simula na petsa',
    'ERR_YEAR_BETWEEN' => 'Pasyensya, ang kalendaryo ay hindi kayang i-handle ang taon na iyong ni-request<br>Ang taon ay kailangan na nasa pagitan ng 1970 at 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: hindi nai-define para sa view na ito',
    'LBL_NO_ITEMS_MOBILE' => 'Ang iyong kalendaryo ay malinaw sa linggo.',
    'LBL_GENERAL_SETTINGS' => 'Mga general setting',
    'LBL_COLOR_SETTINGS' => 'Mga Setting ng kulay',
    'LBL_MODULE' => 'Modyul',
    'LBL_BODY' => 'Ang katawan',
    'LBL_BORDER' => 'Border',
    'LBL_TEXT' => 'Ang teksto',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Linggo",
            '1' => "Lunes",
            '2' => "Martes",
            '3' => "Miyerkules",
            '4' => "Huwebes",
            '5' => "Biyernes",
            '6' => "Sabado",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Linggo",
            '1' => "Lunes",
            '2' => "Martes",
            '3' => "Miyerkules",
            '4' => "Huwebes",
            '5' => "Biyernes",
            '6' => "Sabado",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Enero",
            '2' => "Pebrero",
            '3' => "Marso",
            '4' => "Abril",
            '5' => "Mayo",
            '6' => "Hunyo",
            '7' => "Hulyo",
            '8' => "Agosto",
            '9' => "Setyembre",
            '10' => "Oktubre",
            '11' => "Nobyembre",
            '12' => "Desyembre",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Enero",
            '2' => "Pebrero",
            '3' => "Marso",
            '4' => "Abril",
            '5' => "Mayo",
            '6' => "Hunyo",
            '7' => "Hulyo",
            '8' => "Agosto",
            '9' => "Setyembre",
            '10' => "Oktubre",
            '11' => "Nobyembre",
            '12' => "Disyembre",
        ),
);
