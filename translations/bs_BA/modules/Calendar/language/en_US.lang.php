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

    'LBL_SHAREDWEEK' => 'Podijeljeni sedmični pregled',
    'LBL_SHAREDMONTH' => 'Podijeljeni mjesečni pregled',

    'LBL_MODULE_NAME' => 'Kalendar',
    'LBL_MODULE_TITLE' => 'Kalendar',
    'LNK_NEW_CALL' => 'Zakaži poziv',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_TASK' => 'Kreirajte zadatak',
    'LNK_CALL_LIST' => 'Pozivi',
    'LNK_MEETING_LIST' => 'Sastanci',
    'LNK_TASK_LIST' => 'Zadaci',
    'LNK_TASK' => 'Zadatak',
    'LNK_TASK_VIEW' => 'Pregledaj zadatke',
    'LNK_EVENT' => 'Događaj',
    'LNK_EVENT_VIEW' => 'Pregledajte Događaj',
    'LNK_VIEW_CALENDAR' => 'Danas',
    'LNK_IMPORT_CALLS' => 'Uvoz poziva',
    'LNK_IMPORT_MEETINGS' => 'Uvoz sastanaka',
    'LNK_IMPORT_TASKS' => 'Uvoz zadataka',
    'LBL_MONTH' => 'Mjesec',
    'LBL_AGENDADAY' => 'Dan',
    'LBL_YEAR' => 'Godina',

    'LBL_AGENDAWEEK' => 'Sedmica',
    'LBL_PREVIOUS_MONTH' => 'Prethodni mjesec',
    'LBL_PREVIOUS_DAY' => 'Prethodni dan',
    'LBL_PREVIOUS_YEAR' => 'Prethodna godina',
    'LBL_PREVIOUS_WEEK' => 'Prethodna sedmica',
    'LBL_NEXT_MONTH' => 'Sljedeći mjesec',
    'LBL_NEXT_DAY' => 'Sljedeći dan',
    'LBL_NEXT_YEAR' => 'Sljedeće godine',
    'LBL_NEXT_WEEK' => 'Sljedeća sedmica',
    'LBL_AM' => 'Prijepodne',
    'LBL_PM' => 'Popodne',
    'LBL_SCHEDULED' => 'Raspored',
    'LBL_BUSY' => 'Zauzet',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Korisnički kalendari',
    'LBL_SHARED' => 'Dijeljeno',
    'LBL_PREVIOUS_SHARED' => 'Prethodno',
    'LBL_NEXT_SHARED' => 'Sljedeće',
    'LBL_SHARED_CAL_TITLE' => 'Djeljeni kalendar',
    'LBL_USERS' => 'Korisnici',
    'LBL_REFRESH' => 'Osvježi',
    'LBL_EDIT_USERLIST' => 'Lista korisnika',
    'LBL_SELECT_USERS' => 'Odaberi korisnike za prikaz kalendara',
    'LBL_FILTER_BY_TEAM' => 'Filtriraj listu korisnika prema timu:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku',
    'LBL_DATE' => 'Početni datum i vrijeme',
    'LBL_CREATE_MEETING' => 'Zakaži sastanak',
    'LBL_CREATE_CALL' => 'Zabilježite tel.poziv',
    'LBL_HOURS_ABBREV' => 'sat',
    'LBL_MINS_ABBREV' => 'min',


    'LBL_YES' => 'Da',
    'LBL_NO' => 'Ne',
    'LBL_SETTINGS' => 'Postavke',
    'LBL_CREATE_NEW_RECORD' => 'Kreiraj aktivnost',
    'LBL_LOADING' => 'Učitavanje...',
    'LBL_SAVING' => 'Spremanje...',
    'LBL_SENDING_INVITES' => 'Spremanje i slanje pozivnica .....',
    'LBL_CONFIRM_REMOVE' => 'Sigurni ste da želite obrisati ovaj zapis?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Jeste li sigurni želite li ukloniti sve obnavljajuće zapise?',
    'LBL_EDIT_RECORD' => 'Uredi aktivnost',
    'LBL_ERROR_SAVING' => 'Greška kod spremanja',
    'LBL_ERROR_LOADING' => 'Greška kod učitavanja',
    'LBL_GOTO_DATE' => 'Idi na datum',
    'NOTICE_DURATION_TIME' => 'Vrijeme trajanja mora biti veće od 0',
    'LBL_STYLE_BASIC' => 'Osnovni', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Napredno', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Nema podudaranja za polje: Dodijeljeno',
    'LBL_SUBJECT' => 'Naziv',
    'LBL_DURATION' => 'Trajanje',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritet',

    'LBL_SETTINGS_TITLE' => 'Postavke',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Prikaži vrijeme u danima i sedmicama:',
    'LBL_SETTINGS_TIME_STARTS' => 'Vrijeme početka:',
    'LBL_SETTINGS_TIME_ENDS' => 'Vrijeme završetka:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Prikaži pozive:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Prikaži zadatke:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Prikaži dovršene sastanke, pozive i zadatke:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Spremi',
    'LBL_DELETE_BUTTON' => 'Obriši',
    'LBL_APPLY_BUTTON' => 'Primjeni',
    'LBL_SEND_INVITES' => 'Spremi i pošalji pozivnice',
    'LBL_CANCEL_BUTTON' => 'Otkaži',
    'LBL_CLOSE_BUTTON' => 'Zatvori',

    'LBL_GENERAL_TAB' => 'Detalji',
    'LBL_PARTICIPANTS_TAB' => 'Gosti',
    'LBL_REPEAT_TAB' => 'Ponavljanje',

    'LBL_REPEAT_TYPE' => 'Ponovi',
    'LBL_REPEAT_INTERVAL' => 'Svaki',
    'LBL_REPEAT_END' => 'Kraj',
    'LBL_REPEAT_END_AFTER' => 'Nakon',
    'LBL_REPEAT_OCCURRENCES' => 'ponavljanja',
    'LBL_REPEAT_END_BY' => 'Od',
    'LBL_REPEAT_DOW' => 'Na',
    'LBL_REPEAT_UNTIL' => 'Ponavljaj dok',
    'LBL_REPEAT_COUNT' => 'Broj ponavljanja',
    'LBL_REPEAT_LIMIT_ERROR' => 'Vaš zahtjev je krenuo kreirati više od $limit sastanaka.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Uredi sva ponavljanja',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Izbriši sva ponavljanja',

    'LBL_DATE_END_ERROR' => 'Datum završetka je prije datuma početka',
    'ERR_YEAR_BETWEEN' => 'Kalendar ne može rukovati s godinom koju ste zatražili.<br>Godina mora biti između 1970 i 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Vaš kalendar je prazan za ovu sedmicu.',
    'LBL_GENERAL_SETTINGS' => 'Osnovne postavke',
    'LBL_COLOR_SETTINGS' => 'Postavke boje',
    'LBL_MODULE' => 'Modul',
    'LBL_BODY' => 'Tijelo',
    'LBL_BORDER' => 'Granica',
    'LBL_TEXT' => 'Tekst',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Ned",
            '1' => "Pon",
            '2' => "Uto",
            '3' => "Sri",
            '4' => "Čet",
            '5' => "Pet",
            '6' => "Sub",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Nedjelja",
            '1' => "Ponedjeljak",
            '2' => "Utorak",
            '3' => "Srijeda",
            '4' => "Četvrtak",
            '5' => "Petak",
            '6' => "Subota",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Januar",
            '2' => "Februar",
            '3' => "Mart",
            '4' => "April",
            '5' => "Maj",
            '6' => "Juni",
            '7' => "Juli",
            '8' => "August",
            '9' => "Septembar",
            '10' => "Oktobar",
            '11' => "Novembar",
            '12' => "Decembar",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Januar",
            '2' => "Februar",
            '3' => "Mart",
            '4' => "April",
            '5' => "Maj",
            '6' => "Juni",
            '7' => "Juli",
            '8' => "August",
            '9' => "Septembar",
            '10' => "Oktobar",
            '11' => "Novembar",
            '12' => "Decembar",
        ),
);
