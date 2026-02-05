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

    'LBL_SHAREDWEEK' => 'Zdieľaný týždeň',
    'LBL_SHAREDMONTH' => 'Zdieľaný mesiac',

    'LBL_MODULE_NAME' => 'Kalendár',
    'LBL_MODULE_TITLE' => 'Kalendár',
    'LNK_NEW_CALL' => 'Záznam volania',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_NEW_TASK' => 'Vytvoriť úlohu',
    'LNK_CALL_LIST' => 'Hovory',
    'LNK_MEETING_LIST' => 'Schôdzky',
    'LNK_TASK_LIST' => 'Úlohy',
    'LNK_TASK' => 'Úlohy',
    'LNK_TASK_VIEW' => 'Zobraziť úlohu',
    'LNK_EVENT' => 'Udalosť',
    'LNK_EVENT_VIEW' => 'Zobrazenie udalosti',
    'LNK_VIEW_CALENDAR' => 'Dnes',
    'LNK_IMPORT_CALLS' => 'Import volaní',
    'LNK_IMPORT_MEETINGS' => 'Import schôdzok',
    'LNK_IMPORT_TASKS' => 'Import úloh',
    'LBL_MONTH' => 'Mesiac',
    'LBL_AGENDADAY' => 'Deň',
    'LBL_YEAR' => 'Rok',

    'LBL_AGENDAWEEK' => 'Týždeň',
    'LBL_PREVIOUS_MONTH' => 'Predchadzajúci mesiac',
    'LBL_PREVIOUS_DAY' => 'Predošlý deň',
    'LBL_PREVIOUS_YEAR' => 'Predošlý rok',
    'LBL_PREVIOUS_WEEK' => 'Predošlý týždeň',
    'LBL_NEXT_MONTH' => 'Nasledujúci mesiac',
    'LBL_NEXT_DAY' => 'Nasledujúci deň',
    'LBL_NEXT_YEAR' => 'Nasledujúci rok',
    'LBL_NEXT_WEEK' => 'Ďalší týždeň',
    'LBL_AM' => 'dopoludnia',
    'LBL_PM' => 'popoludní',
    'LBL_SCHEDULED' => 'Plánované',
    'LBL_BUSY' => 'Zaneprázdnený',
    'LBL_CONFLICT' => 'Konflikt',
    'LBL_USER_CALENDARS' => 'Kalendáre užívateľa',
    'LBL_SHARED' => 'Zdieľaný',
    'LBL_PREVIOUS_SHARED' => 'Predošlý',
    'LBL_NEXT_SHARED' => 'Ďalší',
    'LBL_SHARED_CAL_TITLE' => 'Zdieľaný kalendár',
    'LBL_USERS' => 'Užívatelia',
    'LBL_REFRESH' => 'Obnoviť',
    'LBL_EDIT_USERLIST' => 'Zoznam užívateľov',
    'LBL_SELECT_USERS' => 'Vyberte používateľov pre zobrazenie kalendára',
    'LBL_FILTER_BY_TEAM' => 'Filter užívateľa podľa tímu',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_DATE' => 'Dátum a čas zahájenia:',
    'LBL_CREATE_MEETING' => 'Harmonogram rokovaní',
    'LBL_CREATE_CALL' => 'Naplánovať hovor',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Áno',
    'LBL_NO' => 'Nie',
    'LBL_SETTINGS' => 'Nastavenia',
    'LBL_CREATE_NEW_RECORD' => 'Vytvoriť aktivitu',
    'LBL_LOADING' => 'Načítavanie...',
    'LBL_SAVING' => 'Ukladanie ......',
    'LBL_SENDING_INVITES' => 'Ukladanie a odosielanie vyzýva .....',
    'LBL_CONFIRM_REMOVE' => 'Ste si istý, že chcete tento záznam odstrániť?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ste si istí, že chcete odstrániť všetky opakujúce sa záznamy?',
    'LBL_EDIT_RECORD' => 'Upraviť aktivitu',
    'LBL_ERROR_SAVING' => 'Chyba počas ukladania',
    'LBL_ERROR_LOADING' => 'Vyskytla sa chyba počas načítavania',
    'LBL_GOTO_DATE' => 'Choď na dátum',
    'NOTICE_DURATION_TIME' => 'Čas trvania musí byť väčší ako 0',
    'LBL_STYLE_BASIC' => 'Základné', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Pokročilé', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Nič sa nenašlo pre pole: Pridelený k',
    'LBL_SUBJECT' => 'Predmet',
    'LBL_DURATION' => 'Trvanie',
    'LBL_STATUS' => 'Stav',
    'LBL_PRIORITY' => 'Priorita',

    'LBL_SETTINGS_TITLE' => 'Nastavenia',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zobraziť časové úseky v zobrazení dňa a týždňa:',
    'LBL_SETTINGS_TIME_STARTS' => 'Čas začiatku:',
    'LBL_SETTINGS_TIME_ENDS' => 'Čas konca:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Zobraziť volania:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Zobraziť úlohy:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Zobraziť ukončené mítingy, hovory a úlohy:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Samostatný zdieľaný kalendár:',

    'LBL_SAVE_BUTTON' => 'Uložiť',
    'LBL_DELETE_BUTTON' => 'Vymazať',
    'LBL_APPLY_BUTTON' => 'Použiť',
    'LBL_SEND_INVITES' => 'Poslať pozvánky',
    'LBL_CANCEL_BUTTON' => 'Zrušiť',
    'LBL_CLOSE_BUTTON' => 'Uzavrieť',

    'LBL_GENERAL_TAB' => 'Detaily',
    'LBL_PARTICIPANTS_TAB' => 'Pozvaní',
    'LBL_REPEAT_TAB' => 'opakovanie',

    'LBL_REPEAT_TYPE' => 'opakovanie',
    'LBL_REPEAT_INTERVAL' => 'každý',
    'LBL_REPEAT_END' => 'Ukončenie',
    'LBL_REPEAT_END_AFTER' => 'Po',
    'LBL_REPEAT_OCCURRENCES' => 'opakovanie',
    'LBL_REPEAT_END_BY' => 'podľa',
    'LBL_REPEAT_DOW' => 'Na',
    'LBL_REPEAT_UNTIL' => 'opakujte kým',
    'LBL_REPEAT_COUNT' => 'Čísla opakovaní',
    'LBL_REPEAT_LIMIT_ERROR' => 'Váš požiadavaok vytvorí viac ako je $limit schôdzok.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editovat všetky opakovania',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Odstrániť všetky opakovania',

    'LBL_DATE_END_ERROR' => 'Dátum ukončenia je pred dátum začatia',
    'ERR_YEAR_BETWEEN' => 'Je nám ľúto, kalendár nespracováva rok, ktorý ste požadujete.<br />Rok musí byť v rozmedzí 1970 a 2037.',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: nie je definovaný pre tento pohľad',
    'LBL_NO_ITEMS_MOBILE' => 'Pre tento týždeň je váš kalendár prázdny.',
    'LBL_GENERAL_SETTINGS' => 'Všeobecné nastavenia',
    'LBL_COLOR_SETTINGS' => 'Nastavenia farieb',
    'LBL_MODULE' => 'Modul',
    'LBL_BODY' => 'Telo',
    'LBL_BORDER' => 'Okraj',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Ne",
            '1' => "Po",
            '2' => "Ut",
            '3' => "St",
            '4' => "Št",
            '5' => "Pia",
            '6' => "So",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Nedeľa",
            '1' => "Pondelok",
            '2' => "Utorok",
            '3' => "Streda",
            '4' => "Štvrtok",
            '5' => "Piatok",
            '6' => "Sobota",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "Máj",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Okt",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Január",
            '2' => "Ferbuár",
            '3' => "Marec",
            '4' => "Apríl",
            '5' => "Máj",
            '6' => "Jún",
            '7' => "Júl",
            '8' => "August",
            '9' => "September",
            '10' => "Október",
            '11' => "November",
            '12' => "December",
        ),
);
