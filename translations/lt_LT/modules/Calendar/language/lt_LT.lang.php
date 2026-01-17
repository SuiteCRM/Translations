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

    'LBL_MODULE_NAME' => 'Kalendorius',
    'LBL_MODULE_TITLE' => 'Kalendorius',
    'LNK_NEW_CALL' => 'Suplanuoti skambutį',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_NEW_TASK' => 'Sukurti užduotį',
    'LNK_CALL_LIST' => 'Skambučiai',
    'LNK_MEETING_LIST' => 'Susitikimai',
    'LNK_TASK_LIST' => 'Užduotys',
    'LNK_TASK' => 'Užduotis',
    'LNK_TASK_VIEW' => 'View Task',
    'LNK_EVENT' => 'Atvejis',
    'LNK_EVENT_VIEW' => 'View Event',
    'LNK_VIEW_CALENDAR' => 'Šiandien',
    'LNK_IMPORT_CALLS' => 'Importuoti skambučius',
    'LNK_IMPORT_MEETINGS' => 'Importuoti susitikimus',
    'LNK_IMPORT_TASKS' => 'Importuoti užduotis',
    'LBL_MONTH' => 'Mėnesis',
    'LBL_AGENDADAY' => 'Diena',
    'LBL_YEAR' => 'Metai',

    'LBL_AGENDAWEEK' => 'Savaitė',
    'LBL_PREVIOUS_MONTH' => 'Ankstesnis mėnuo',
    'LBL_PREVIOUS_DAY' => 'Ankstesnė diena',
    'LBL_PREVIOUS_YEAR' => 'Ankstesni metai',
    'LBL_PREVIOUS_WEEK' => 'Ankstesnė savaitė',
    'LBL_NEXT_MONTH' => 'Kita mėnesį',
    'LBL_NEXT_DAY' => 'Kita diena',
    'LBL_NEXT_YEAR' => 'Kiti metai',
    'LBL_NEXT_WEEK' => 'Kitą savaitę',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Suplanuota',
    'LBL_BUSY' => 'Užimta',
    'LBL_CONFLICT' => 'Konfliktas',
    'LBL_USER_CALENDARS' => 'Vartotojo kalendoriai',
    'LBL_SHARED' => 'Bendras',
    'LBL_PREVIOUS_SHARED' => 'Ankstesnė',
    'LBL_NEXT_SHARED' => 'Kita',
    'LBL_SHARED_CAL_TITLE' => 'Bendras kalendorius',
    'LBL_USERS' => 'Vartotojas',
    'LBL_REFRESH' => 'Atnaujinti',
    'LBL_EDIT_USERLIST' => 'Vartotojų sąrašas',
    'LBL_SELECT_USERS' => 'Pasirinkti vartotojus, kuriuos rodyti kalendoriuje',
    'LBL_FILTER_BY_TEAM' => 'Filtruoti vartotojų sąrašą pagal komandą:',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_DATE' => 'Pradžios data ir laikas',
    'LBL_CREATE_MEETING' => 'Suplanuoti susitikimą',
    'LBL_CREATE_CALL' => 'Registruoti skambutį',
    'LBL_HOURS_ABBREV' => 'v',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => '--Tuščia--',
    'LBL_SETTINGS' => 'Nustatymai',
    'LBL_CREATE_NEW_RECORD' => 'Sukurti Veiklą',
    'LBL_LOADING' => 'Kraunasi...',
    'LBL_SAVING' => 'Saugo...',
    'LBL_SENDING_INVITES' => 'Išsaugoma & Siunčiamas kvietimas ...',
    'LBL_CONFIRM_REMOVE' => 'Ar tikrai norite šalinti įrašą?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ar tikrai norite pašalinti visus pasikartojančius įrašų?',
    'LBL_EDIT_RECORD' => 'Redaguoti Veiklą',
    'LBL_ERROR_SAVING' => 'Klaida išsaugojant',
    'LBL_ERROR_LOADING' => 'Klaida įkeliant',
    'LBL_GOTO_DATE' => 'Pereiti prie Datos',
    'NOTICE_DURATION_TIME' => 'Trukmės periodas turi būti daugiau už 0',
    'LBL_STYLE_BASIC' => 'Bazinis', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Išplėstinis', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Nerastas atitikmuo laukui: Priskirtas',
    'LBL_SUBJECT' => 'Tema:',
    'LBL_DURATION' => 'Trukmė',
    'LBL_STATUS' => 'Būsena',
    'LBL_PRIORITY' => 'Svarba',

    'LBL_SETTINGS_TITLE' => 'Nustatymai',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Rodyti laiko tarpsnius dienomis  ir savaitės rodiniuose:',
    'LBL_SETTINGS_TIME_STARTS' => 'Pradžios laikas:',
    'LBL_SETTINGS_TIME_ENDS' => 'Pabaigos laikas:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Rodyti Skambučius:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Rodyti Užduotis:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Rodyti Įvykusius Susitikimus, Skambučius ir Užduotis:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Saugoti',
    'LBL_DELETE_BUTTON' => 'Ištrinti',
    'LBL_APPLY_BUTTON' => 'Taikyti',
    'LBL_SEND_INVITES' => 'Siųsti pakvietimus',
    'LBL_CANCEL_BUTTON' => 'Atšaukti',
    'LBL_CLOSE_BUTTON' => 'Užbaigti',

    'LBL_GENERAL_TAB' => 'Detalės',
    'LBL_PARTICIPANTS_TAB' => 'Dalyviai',
    'LBL_REPEAT_TAB' => 'Pasikartojimas',

    'LBL_REPEAT_TYPE' => 'Pakartokite',
    'LBL_REPEAT_INTERVAL' => 'Kiekvienas',
    'LBL_REPEAT_END' => 'Pabaiga',
    'LBL_REPEAT_END_AFTER' => 'Po',
    'LBL_REPEAT_OCCURRENCES' => 'pasikartojimai',
    'LBL_REPEAT_END_BY' => 'Iš',
    'LBL_REPEAT_DOW' => 'Įjungti',
    'LBL_REPEAT_UNTIL' => 'Kartoti iki',
    'LBL_REPEAT_COUNT' => 'Pasikartojimo Numeris',
    'LBL_REPEAT_LIMIT_ERROR' => 'Jūsų prašymas bus viršytas nei $ susitikimų limitas.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Redaguoti visus Pasikartojimus',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Naikinti visus Pasikartojimus',

    'LBL_DATE_END_ERROR' => 'Pabaigos data yra nustatyta aksčiau pradžios datos',
    'ERR_YEAR_BETWEEN' => 'Atsiprašome, kalendorius negali apdoroti jūsų užklausos <br>Metai turi būti nuo 1970 iki 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: nėra apibrėžta šiai peržiūrai',
    'LBL_NO_ITEMS_MOBILE' => 'Jūsų kalendorius tuščias šiai savaitei.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Modulis',
    'LBL_BODY' => 'Kūnas',
    'LBL_BORDER' => 'Rėmelis',
    'LBL_TEXT' => 'Tekstas',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sek",
            '1' => "Pir",
            '2' => "Ant",
            '3' => "Tre",
            '4' => "Ket",
            '5' => "Pen",
            '6' => "Šeš",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sekmadienis",
            '1' => "Pirmadienis",
            '2' => "Antradienis",
            '3' => "Trečiadienis",
            '4' => "Ketvirtadienis",
            '5' => "Penktadienis",
            '6' => "Šeštadienis",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Sau",
            '2' => "Vas",
            '3' => "Kov",
            '4' => "Bal",
            '5' => "Gegužė",
            '6' => "Bir",
            '7' => "Lie",
            '8' => "Rugp",
            '9' => "Rugs",
            '10' => "Spa",
            '11' => "Lap",
            '12' => "Gru",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Sausis",
            '2' => "Vasaris",
            '3' => "Kovas",
            '4' => "Balandis",
            '5' => "Gegužė",
            '6' => "Birželis",
            '7' => "Liepa",
            '8' => "Rugpjūtis",
            '9' => "Rugsėjis",
            '10' => "Spalis",
            '11' => "Lapkritis",
            '12' => "Gruodis",
        ),
);
