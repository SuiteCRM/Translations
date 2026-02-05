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

    'LBL_MODULE_NAME' => 'Kalendārs',
    'LBL_MODULE_TITLE' => 'Kalendārs',
    'LNK_NEW_CALL' => 'Reģistrēt zvanu',
    'LNK_NEW_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'LNK_CALL_LIST' => 'Zvani',
    'LNK_MEETING_LIST' => 'Tikšanās',
    'LNK_TASK_LIST' => 'Uzdevumi',
    'LNK_TASK' => 'Uzdevums',
    'LNK_TASK_VIEW' => 'View Task',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LNK_VIEW_CALENDAR' => 'Šodien',
    'LNK_IMPORT_CALLS' => 'Importēt zvanus',
    'LNK_IMPORT_MEETINGS' => 'Importēt tikšanās',
    'LNK_IMPORT_TASKS' => 'Importēt uzdevumus',
    'LBL_MONTH' => 'Mēnesis',
    'LBL_AGENDADAY' => 'Diena',
    'LBL_YEAR' => 'Gads',

    'LBL_AGENDAWEEK' => 'Nedēļa',
    'LBL_PREVIOUS_MONTH' => 'Iepriekšējais mēnesis',
    'LBL_PREVIOUS_DAY' => 'Iepriekšējā diena',
    'LBL_PREVIOUS_YEAR' => 'Iepriekšējais gads',
    'LBL_PREVIOUS_WEEK' => 'Iepriekšējā nedēļa',
    'LBL_NEXT_MONTH' => 'Nākamais mēnesis',
    'LBL_NEXT_DAY' => 'Nākamā diena',
    'LBL_NEXT_YEAR' => 'Nākamais gads',
    'LBL_NEXT_WEEK' => 'Nākamajā nedēļā',
    'LBL_AM' => 'Rīts',
    'LBL_PM' => 'Vakars',
    'LBL_SCHEDULED' => 'Ieplānots',
    'LBL_BUSY' => 'Aizņemts',
    'LBL_CONFLICT' => 'Konflikts',
    'LBL_USER_CALENDARS' => 'Lietotāja kalendāri',
    'LBL_SHARED' => 'Kopīgs',
    'LBL_PREVIOUS_SHARED' => 'Iepriekšējais',
    'LBL_NEXT_SHARED' => 'Saglabāt un turpināt',
    'LBL_SHARED_CAL_TITLE' => 'Kopīgais kalendārs',
    'LBL_USERS' => 'Lietotājs',
    'LBL_REFRESH' => 'Atjaunot',
    'LBL_EDIT_USERLIST' => 'Lietotāju saraksts',
    'LBL_SELECT_USERS' => 'Izvēlēties lietotājus kalendāra parādīšanai',
    'LBL_FILTER_BY_TEAM' => 'Filtrēt lietotājs pēc darba grupas:',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_DATE' => 'Sākuma datums un laiks:',
    'LBL_CREATE_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LBL_CREATE_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Uzstādījumi',
    'LBL_CREATE_NEW_RECORD' => 'Izveidot darbību',
    'LBL_LOADING' => 'Notiek ielāde ...',
    'LBL_SAVING' => 'Saglabā...',
    'LBL_SENDING_INVITES' => 'Sūta ielūgumus .....',
    'LBL_CONFIRM_REMOVE' => 'Vai tiešām vēlaties noņemt ierakstu?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Vai tiešām vēlaties izņemt visus ierakstus periodiskos ierakstus?',
    'LBL_EDIT_RECORD' => 'Rediģēt darbību',
    'LBL_ERROR_SAVING' => 'Kļūda saglabājot',
    'LBL_ERROR_LOADING' => 'Kļūda ielādējot',
    'LBL_GOTO_DATE' => 'Doties uz datumu',
    'NOTICE_DURATION_TIME' => 'Ilgumam jābūt lielākam par 0',
    'LBL_STYLE_BASIC' => 'Pamata', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Papildus', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Nav atbilstības laukam: Piešķirts lietotājam',
    'LBL_SUBJECT' => 'Temats',
    'LBL_DURATION' => 'Ilgums',
    'LBL_STATUS' => 'Statuss',
    'LBL_PRIORITY' => 'Prioritāte',

    'LBL_SETTINGS_TITLE' => 'Uzstādījumi',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Attēlot laika spraugas dienas un nedēļas skatos:',
    'LBL_SETTINGS_TIME_STARTS' => 'Sākuma laiks:',
    'LBL_SETTINGS_TIME_ENDS' => 'Beigu laiks:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Rādīt zvanus:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Rādīt uzdevumus:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Parādīt veiktās tikšanās, Zvanus un uzdevumus:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Pabeigt',
    'LBL_DELETE_BUTTON' => 'Dzēsts',
    'LBL_APPLY_BUTTON' => 'Apstiprināt',
    'LBL_SEND_INVITES' => 'Sūtīt uzaicinājumus [Alt+I]',
    'LBL_CANCEL_BUTTON' => 'Atcelt',
    'LBL_CLOSE_BUTTON' => 'Slēgt',

    'LBL_GENERAL_TAB' => 'Detaļas',
    'LBL_PARTICIPANTS_TAB' => 'Ielūgtais',
    'LBL_REPEAT_TAB' => 'Atkārtošanās',

    'LBL_REPEAT_TYPE' => 'Atkārtot',
    'LBL_REPEAT_INTERVAL' => 'Intervāls',
    'LBL_REPEAT_END' => 'Beigas',
    'LBL_REPEAT_END_AFTER' => 'Pēc',
    'LBL_REPEAT_OCCURRENCES' => 'atkārtoti notikumi',
    'LBL_REPEAT_END_BY' => 'Ar',
    'LBL_REPEAT_DOW' => 'Uz',
    'LBL_REPEAT_UNTIL' => 'Atkārtot, kamēr',
    'LBL_REPEAT_COUNT' => 'Atkārtošanos skaits',
    'LBL_REPEAT_LIMIT_ERROR' => 'Jūsu pieprasījums gatavojas izveidot vairāk kā $limit sanāksmes.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Rediģēt visus atkārtojumus',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Dzēst visus atkārtojumus',

    'LBL_DATE_END_ERROR' => 'Beigu datums ir pirms sākuma datuma',
    'ERR_YEAR_BETWEEN' => 'Atvainojiet, kalendārs nevar apstrādāt, Jūsu, pieprasīto gada skaitli<br>Gada skaitlim jābūt starp 1970 un 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: nav definēts šim skatījumam',
    'LBL_NO_ITEMS_MOBILE' => 'Šonedēļ Jūsu kalendārā nav ierakstu.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Modulis',
    'LBL_BODY' => 'Ķermenis',
    'LBL_BORDER' => 'Mala',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sv.",
            '1' => "P",
            '2' => "O",
            '3' => "T",
            '4' => "C",
            '5' => "Pk",
            '6' => "Se",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Svētdiena",
            '1' => "Pirmdiena",
            '2' => "Otrdiena",
            '3' => "Trešdiena",
            '4' => "Ceturtdiena",
            '5' => "Piektdiena",
            '6' => "Sestdiena",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "Mai",
            '6' => "Jūn",
            '7' => "Jūl",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Okt",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Janvāris",
            '2' => "Februāris",
            '3' => "Marts",
            '4' => "Aprīlis",
            '5' => "Mai",
            '6' => "Jūnijs",
            '7' => "Jūlijs",
            '8' => "Augusts",
            '9' => "Septembris",
            '10' => "Oktobris",
            '11' => "Novembris",
            '12' => "Decembris",
        ),
);
