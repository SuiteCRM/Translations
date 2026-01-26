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

    'LBL_SHAREDWEEK' => 'Gemeinsame Woche',
    'LBL_SHAREDMONTH' => 'Gemeinsamer Monat',

    'LBL_MODULE_NAME' => 'Kalender',
    'LBL_MODULE_TITLE' => 'Kalender',
    'LNK_NEW_CALL' => 'Neuer Anruf',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_CALL_LIST' => 'Anrufe',
    'LNK_MEETING_LIST' => 'Termine',
    'LNK_TASK_LIST' => 'Aufgaben',
    'LNK_TASK' => 'Aufgabe',
    'LNK_TASK_VIEW' => 'Aufgabe anzeigen',
    'LNK_EVENT' => 'Ereignis',
    'LNK_EVENT_VIEW' => 'Ereignis ansehen',
    'LNK_VIEW_CALENDAR' => 'Heute',
    'LNK_IMPORT_CALLS' => 'Anrufe importieren',
    'LNK_IMPORT_MEETINGS' => 'Termine importieren',
    'LNK_IMPORT_TASKS' => 'Aufgaben importieren',
    'LBL_MONTH' => 'Monat',
    'LBL_AGENDADAY' => 'Tag',
    'LBL_YEAR' => 'Jahr',

    'LBL_AGENDAWEEK' => 'Woche',
    'LBL_PREVIOUS_MONTH' => 'Vorheriger Monat',
    'LBL_PREVIOUS_DAY' => 'Vorheriger Tag',
    'LBL_PREVIOUS_YEAR' => 'Vorheriges Jahr',
    'LBL_PREVIOUS_WEEK' => 'Vorherige Woche',
    'LBL_NEXT_MONTH' => 'Nächster Monat',
    'LBL_NEXT_DAY' => 'Nächster Tag',
    'LBL_NEXT_YEAR' => 'Nächstes Jahr',
    'LBL_NEXT_WEEK' => 'Nächste Woche',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'Nachmittags',
    'LBL_SCHEDULED' => 'Eingeplant',
    'LBL_BUSY' => 'Belegt',
    'LBL_CONFLICT' => 'Terminkonflikt',
    'LBL_USER_CALENDARS' => 'Benutzerkalender',
    'LBL_SHARED' => 'Gemeinsam',
    'LBL_PREVIOUS_SHARED' => 'Zurück',
    'LBL_NEXT_SHARED' => 'Weiter',
    'LBL_SHARED_CAL_TITLE' => 'Gemeinsamer Kalender',
    'LBL_USERS' => 'Benutzer',
    'LBL_REFRESH' => 'Aktualisieren',
    'LBL_EDIT_USERLIST' => 'Benutzerliste',
    'LBL_SELECT_USERS' => 'Benutzer für Kalenderanzeige auswählen',
    'LBL_FILTER_BY_TEAM' => 'Benutzerliste nach Team filtern:',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_DATE' => 'Startdatum und -zeit:',
    'LBL_CREATE_MEETING' => 'Neues Meeting',
    'LBL_CREATE_CALL' => 'Anruf Log',
    'LBL_HOURS_ABBREV' => 'Std.',
    'LBL_MINS_ABBREV' => 'min',


    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nein',
    'LBL_SETTINGS' => 'Einstellungen',
    'LBL_CREATE_NEW_RECORD' => 'Aktivität erstellen',
    'LBL_LOADING' => 'Laden...',
    'LBL_SAVING' => 'Wird gespeichert...',
    'LBL_SENDING_INVITES' => 'Speichere & Versende Einladungen …..',
    'LBL_CONFIRM_REMOVE' => 'Sind Sie sicher, diesen Eintrag entfernen zu wollen?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Sind Sie sicher, alle Wiederholungen entfernen zu wollen?',
    'LBL_EDIT_RECORD' => 'Aktivität bearbeiten',
    'LBL_ERROR_SAVING' => 'Fehler beim Speichern',
    'LBL_ERROR_LOADING' => 'Fehler beim Laden',
    'LBL_GOTO_DATE' => 'Gehe zu Datum',
    'NOTICE_DURATION_TIME' => 'Zeitdauer muss größer als 0 sein',
    'LBL_STYLE_BASIC' => 'Einfach', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Erweitert', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Kein Treffer für Feld: Zugewiesen an',
    'LBL_SUBJECT' => 'Betreff',
    'LBL_DURATION' => 'Dauer',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priorität',

    'LBL_SETTINGS_TITLE' => 'Einstellungen',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Zeitfenster in Tages- und Wochenansicht anzeigen:',
    'LBL_SETTINGS_TIME_STARTS' => 'Startzeit:',
    'LBL_SETTINGS_TIME_ENDS' => 'Endzeit:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Anrufe anzeigen:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Aufgaben anzeigen:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Abgeschlossene Meetings, Anrufe und Aufgaben anzeigen:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Gemeinsame Kalender trennen:',

    'LBL_SAVE_BUTTON' => 'Speichern',
    'LBL_DELETE_BUTTON' => 'Löschen',
    'LBL_APPLY_BUTTON' => 'Anwenden',
    'LBL_SEND_INVITES' => 'Speichern & Einladungen versenden',
    'LBL_CANCEL_BUTTON' => 'Abbrechen',
    'LBL_CLOSE_BUTTON' => 'Schliessen',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Teilnehmer',
    'LBL_REPEAT_TAB' => 'Serie',

    'LBL_REPEAT_TYPE' => 'Wiederholen',
    'LBL_REPEAT_INTERVAL' => 'alle',
    'LBL_REPEAT_END' => 'Ende',
    'LBL_REPEAT_END_AFTER' => 'Nach',
    'LBL_REPEAT_OCCURRENCES' => 'Wiederholungen',
    'LBL_REPEAT_END_BY' => 'Ab',
    'LBL_REPEAT_DOW' => 'Am',
    'LBL_REPEAT_UNTIL' => 'Wiederhole bis',
    'LBL_REPEAT_COUNT' => 'Anzahl der Wiederholungen',
    'LBL_REPEAT_LIMIT_ERROR' => 'Ihr Befehl hätte mehr als als $limit Meetings erstellt.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Alle Wiederholungen bearbeiten',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Alle Wiederholungen löschen',

    'LBL_DATE_END_ERROR' => 'Das Enddatum ist vor dem Beginndatum',
    'ERR_YEAR_BETWEEN' => 'Der Kalender versteht das verlangte Jahr nicht<br>Die Jahreszahl muss zwischen 1970 und 2037 liegen',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: für diese Ansicht nicht definiert',
    'LBL_NO_ITEMS_MOBILE' => 'Ihr Kalender ist für diese Woche frei.',
    'LBL_GENERAL_SETTINGS' => 'Allgemeine Einstellungen',
    'LBL_COLOR_SETTINGS' => 'Farb-Einstellungen',
    'LBL_MODULE' => 'Modul',
    'LBL_BODY' => 'Text',
    'LBL_BORDER' => 'Rand',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "So",
            '1' => "Mo",
            '2' => "Di",
            '3' => "Mi",
            '4' => "Do",
            '5' => "Fr",
            '6' => "Sa",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sonntag",
            '1' => "Montag",
            '2' => "Dienstag",
            '3' => "Mittwoch",
            '4' => "Donnerstag",
            '5' => "Freitag",
            '6' => "Samstag",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mär",
            '4' => "Apr",
            '5' => "Mai",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sept",
            '10' => "Okt",
            '11' => "Nov",
            '12' => "Dez",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Januar",
            '2' => "Februar",
            '3' => "März",
            '4' => "April",
            '5' => "Mai",
            '6' => "Juni",
            '7' => "Juli",
            '8' => "August",
            '9' => "September",
            '10' => "Oktober",
            '11' => "November",
            '12' => "Dezember",
        ),
);
