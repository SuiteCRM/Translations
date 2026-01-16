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

    'LBL_SHAREDWEEK' => 'Megosztott hét',
    'LBL_SHAREDMONTH' => 'Megosztott hónap',

    'LBL_MODULE_NAME' => 'Naptár',
    'LBL_MODULE_TITLE' => 'Naptár',
    'LNK_NEW_CALL' => 'Hívás naplózása',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_NEW_TASK' => 'Feladat létrehozása',
    'LNK_CALL_LIST' => 'Hívások',
    'LNK_MEETING_LIST' => 'Találkozók',
    'LNK_TASK_LIST' => 'Feladatok',
    'LNK_TASK' => 'Feladat',
    'LNK_TASK_VIEW' => 'Feladat megtekintése',
    'LNK_EVENT' => 'Esemény',
    'LNK_EVENT_VIEW' => 'Esemény megtekintése',
    'LNK_VIEW_CALENDAR' => 'Ma',
    'LNK_IMPORT_CALLS' => 'Hívások importálása',
    'LNK_IMPORT_MEETINGS' => 'Találkozók importálása',
    'LNK_IMPORT_TASKS' => 'Feladatok importálása',
    'LBL_MONTH' => 'Hónap',
    'LBL_AGENDADAY' => 'Nap',
    'LBL_YEAR' => 'Év',

    'LBL_AGENDAWEEK' => 'Hét',
    'LBL_PREVIOUS_MONTH' => 'Előző hónap',
    'LBL_PREVIOUS_DAY' => 'Előző nap',
    'LBL_PREVIOUS_YEAR' => 'Előző év',
    'LBL_PREVIOUS_WEEK' => 'Előző hét',
    'LBL_NEXT_MONTH' => 'Következő hónap',
    'LBL_NEXT_DAY' => 'Következő nap',
    'LBL_NEXT_YEAR' => 'Következő év',
    'LBL_NEXT_WEEK' => 'Következő hét',
    'LBL_AM' => 'DE',
    'LBL_PM' => 'DU',
    'LBL_SCHEDULED' => 'Ütemezett',
    'LBL_BUSY' => 'Foglalt',
    'LBL_CONFLICT' => 'Ütközés',
    'LBL_USER_CALENDARS' => 'Felhasználó naptárai',
    'LBL_SHARED' => 'Megosztott',
    'LBL_PREVIOUS_SHARED' => 'Előző',
    'LBL_NEXT_SHARED' => 'Következő',
    'LBL_SHARED_CAL_TITLE' => 'Megosztott naptár',
    'LBL_USERS' => 'Felhasználók',
    'LBL_REFRESH' => 'Frissítés',
    'LBL_EDIT_USERLIST' => 'Felhasználói lista',
    'LBL_SELECT_USERS' => 'Válassza ki a felhasználót a naptár megtekintéséhez',
    'LBL_FILTER_BY_TEAM' => 'Felhasználói lista szűrése csoport szerint:',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_DATE' => 'Kezdő dátum & idő',
    'LBL_CREATE_MEETING' => 'Találkozó ütemezése',
    'LBL_CREATE_CALL' => 'Hívásnapló',
    'LBL_HOURS_ABBREV' => 'ó',
    'LBL_MINS_ABBREV' => 'p',


    'LBL_YES' => 'Igen',
    'LBL_NO' => 'Nem',
    'LBL_SETTINGS' => 'Beállítások',
    'LBL_CREATE_NEW_RECORD' => 'Tevékenység létrehozása',
    'LBL_LOADING' => 'Betöltés...',
    'LBL_SAVING' => 'Mentés...',
    'LBL_SENDING_INVITES' => 'Ment és meghívót küld...',
    'LBL_CONFIRM_REMOVE' => 'Biztos benne, hogy el kívánja távolítani ezt a rekordot?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Biztosan el kívánja távolítani az összes ismétlődő rekordokat?',
    'LBL_EDIT_RECORD' => 'Tevékenység szerkesztése',
    'LBL_ERROR_SAVING' => 'Hiba történt mentéskor',
    'LBL_ERROR_LOADING' => 'Hiba betöltése közben',
    'LBL_GOTO_DATE' => 'Ugrás dátumhoz',
    'NOTICE_DURATION_TIME' => 'Az időtartamnak nagyobbnak kell lennie 0-nál',
    'LBL_STYLE_BASIC' => 'Alapvető', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Haladóknak', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Nincs találat: Felelős',
    'LBL_SUBJECT' => 'Tárgy',
    'LBL_DURATION' => 'Időtartam',
    'LBL_STATUS' => 'Állapot',
    'LBL_PRIORITY' => 'Prioritás',

    'LBL_SETTINGS_TITLE' => 'Beállítások',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Megjelenítés napi és heti nézetben',
    'LBL_SETTINGS_TIME_STARTS' => 'Kezdés időpontja:',
    'LBL_SETTINGS_TIME_ENDS' => 'Befejezés időpontja:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Hívások:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Tevékenységek:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Befejezett Találkozók, Hívások és Feladatok megjelenítése:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Megosztott naptár külön:',

    'LBL_SAVE_BUTTON' => 'Mentés',
    'LBL_DELETE_BUTTON' => 'Törlés',
    'LBL_APPLY_BUTTON' => 'Alkalmaz',
    'LBL_SEND_INVITES' => 'Meghívók küldése',
    'LBL_CANCEL_BUTTON' => 'Mégsem',
    'LBL_CLOSE_BUTTON' => 'Bezárás',

    'LBL_GENERAL_TAB' => 'Részletek',
    'LBL_PARTICIPANTS_TAB' => 'Meghívottak',
    'LBL_REPEAT_TAB' => 'Ismétlődés',

    'LBL_REPEAT_TYPE' => 'Ismételje meg ',
    'LBL_REPEAT_INTERVAL' => 'Minden',
    'LBL_REPEAT_END' => 'Vége',
    'LBL_REPEAT_END_AFTER' => 'Után',
    'LBL_REPEAT_OCCURRENCES' => 'Ismétlődés',
    'LBL_REPEAT_END_BY' => 'Által',
    'LBL_REPEAT_DOW' => 'Be',
    'LBL_REPEAT_UNTIL' => 'Ismételjük meg, amíg',
    'LBL_REPEAT_COUNT' => 'Imétlések száma',
    'LBL_REPEAT_LIMIT_ERROR' => 'Kérésének megfelelően készül $limit találkozó.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Minden imsétlődés szerkesztése',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Minden ismétlődés törlése',

    'LBL_DATE_END_ERROR' => 'Záró dátum a Kezdődátum előtti kell legyen',
    'ERR_YEAR_BETWEEN' => 'Sajnáljuk, de naptár nem tudja kezelni a kérését. <br>Az év 1970 és 2037 között kell legyen',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: Ebben a nézetben nem definiált',
    'LBL_NO_ITEMS_MOBILE' => 'Az ön naptára üres a héten.',
    'LBL_GENERAL_SETTINGS' => 'Általános beállítások',
    'LBL_COLOR_SETTINGS' => 'Színbeállítások',
    'LBL_MODULE' => 'Modul',
    'LBL_BODY' => 'Tartalom',
    'LBL_BORDER' => 'Keret',
    'LBL_TEXT' => 'Szöveg',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "v",
            '1' => "h",
            '2' => "k",
            '3' => "sze",
            '4' => "cs",
            '5' => "p",
            '6' => "szo",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "vasárnap",
            '1' => "hétfő",
            '2' => "kedd",
            '3' => "szerda",
            '4' => "csütörtök",
            '5' => "péntek",
            '6' => "szombat",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "jan",
            '2' => "febr",
            '3' => "márc",
            '4' => "ápr",
            '5' => "Május",
            '6' => "jún",
            '7' => "júl",
            '8' => "aug",
            '9' => "szept",
            '10' => "okt",
            '11' => "nov",
            '12' => "dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Január",
            '2' => "Február",
            '3' => "Március",
            '4' => "Április",
            '5' => "Május",
            '6' => "Június",
            '7' => "Július",
            '8' => "Augusztus",
            '9' => "Szeptember",
            '10' => "Október",
            '11' => "November",
            '12' => "December",
        ),
);
