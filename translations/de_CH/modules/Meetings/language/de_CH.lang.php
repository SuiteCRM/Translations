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
    'LBL_ACCEPT_THIS' => 'Bestätigen?',
    'LBL_ADD_BUTTON' => 'Hinzufügen',
    'LBL_ADD_INVITEE' => 'Teilnehmer hinzufügen',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_CREATED_BY' => 'Erstellt von',
    'LBL_DATE_END' => 'Enddatum',
    'LBL_DATE_TIME' => 'Startdatum und -zeit:',
    'LBL_DATE' => 'Startdatum:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Termine',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DIRECTION' => 'Richtung:',
    'LBL_DURATION_HOURS' => 'Dauer in Stunden:',
    'LBL_DURATION_MINUTES' => 'Dauer in Minuten:',
    'LBL_DURATION' => 'Dauer:',
    'LBL_EMAIL' => 'E-Mail',
    'LBL_FIRST_NAME' => 'Vorname',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notizen',
    'LBL_HOURS_ABBREV' => 'Std.',
    'LBL_HOURS_MINS' => '(Stunden/Minuten)',
    'LBL_INVITEE' => 'Teilnehmer',
    'LBL_LAST_NAME' => 'Nachname',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesener Benutzer',
    'LBL_LIST_CLOSE' => 'Schliessen',
    'LBL_LIST_CONTACT' => 'Kontakte',
    'LBL_LIST_DATE_MODIFIED' => 'Letzte Änderung',
    'LBL_LIST_DATE' => 'Startdatum',
    'LBL_LIST_DIRECTION' => 'Richtung',
    'LBL_LIST_DUE_DATE' => 'Fälligkeitsdatum',
    'LBL_LIST_FORM_TITLE' => 'Meetingliste',
    'LBL_LIST_MY_MEETINGS' => 'Meine Meetings',
    'LBL_LIST_RELATED_TO' => 'Gehört zu:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Betreff',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
    'LBL_LOCATION' => 'Ort:',
    'LBL_MINSS_ABBREV' => 'min',
    'LBL_MODIFIED_BY' => 'Geändert von',
    'LBL_MODULE_NAME' => 'Termine',
    'LBL_MODULE_TITLE' => 'Meetings: Startseite',
    'LBL_NAME' => 'Name',
    'LBL_NEW_FORM_TITLE' => 'Termin erstellen',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_SEQUENCE' => 'Meeting Aktualisierungsreihenfolge',
    'LBL_PHONE' => 'Telefon Büro:',
    'LBL_REMINDER_TIME' => 'Erinnerungszeitpunkt',
    'LBL_EMAIL_REMINDER_SENT' => 'E-Mail Erinnerung gesendet',
    'LBL_REMINDER' => 'Erinnerungen:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-Mail an alle Teilnehmer',
    'LBL_EMAIL_REMINDER' => 'E-Mail Erinnerung',
    'LBL_EMAIL_REMINDER_TIME' => 'E-Mail Erinnerungszeit',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planung',
    'LBL_SEARCH_BUTTON' => 'Suchen',
    'LBL_SEARCH_FORM_TITLE' => 'Meeting suchen',
    'LBL_SEND_BUTTON_LABEL' => 'Speichern & Einladungen versenden',
    'LBL_SEND_BUTTON_TITLE' => 'Speichern & Einladungen versenden',
    'LBL_STATUS' => 'Status',
    'LBL_TYPE' => 'Meeting Typ',
    'LBL_PASSWORD' => 'Meeting Passwort',
    'LBL_URL' => 'Meeting starten/teilnehmen',
    'LBL_HOST_URL' => 'Gastgeber URL',
    'LBL_DISPLAYED_URL' => 'Anzeige URL',
    'LBL_CREATOR' => 'Meeting Erstellung',
    'LBL_EXTERNALID' => 'Externe App ID',
    'LBL_SUBJECT' => 'Betreff:',
    'LBL_TIME' => 'Beginn:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Benutzer',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Eltern-Typ',
    'LBL_PARENT_ID' => 'Eltern ID',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_NEW_APPOINTMENT' => 'Termin erstellen',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_IMPORT_MEETINGS' => 'Termine importieren',

    'LBL_CREATED_USER' => 'Erstellter Benutzer',
    'LBL_MODIFIED_USER' => 'Geänderter Benutzer',
    'NOTICE_DURATION_TIME' => 'Zeitdauer muss größer als 0 sein',
    'LBL_MEETING_INFORMATION' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Am Meeting teilnehmen',
    'LBL_ACCEPT_STATUS' => 'Status akzeptieren',
    'LBL_ACCEPT_LINK' => 'Link annehmen',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Sie können an diesem Meeting nicht teilnehmen, da Sie nicht eingeladen wurden.',
    'LBL_EXTNOT_RECORD_LINK' => 'Meeting anzeigen',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Sie können dieses Meeting nicht starten, da Sie kein Administrator oder Eigentümer des Meetings sind.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Einen Teilnehmer erstellen',
    'LBL_CREATE_CONTACT' => 'Als Kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Als Interessent',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Erstellen und hinzufügen',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Abbrechen',
    'LBL_EMPTY_SEARCH_RESULT' => 'Keine Resultate gefunden, bitte unten einen Teilnehmer erstellen.',
    'LBL_NO_ACCESS' => 'Sie haben keine Berechtigung, $module zu erstellen',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Wiederholungstyp',
    'LBL_REPEAT_INTERVAL' => 'Wiederholungsintervall',
    'LBL_REPEAT_DOW' => 'Wiederhole Wochentage',
    'LBL_REPEAT_UNTIL' => 'Wiederhole bis',
    'LBL_REPEAT_COUNT' => 'Wiederholungszähler',
    'LBL_REPEAT_PARENT_ID' => 'Wiederhole Eltern ID',
    'LBL_RECURRING_SOURCE' => 'Quelle Wiederholungen',

    'LBL_SYNCED_RECURRING_MSG' => 'Dieses Meeting kommt aus einem anderen System und wurde nach SuiteCRM synchronisiert. Änderungen im anderen System können wieder synchronisiert werden.',
    'LBL_RELATED_TO' => 'Gehört zu',

    // for reminders
    'LBL_REMINDERS' => 'Erinnerungen',
    'LBL_REMINDERS_ACTIONS' => 'Aktionen:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'E-Mail-Teilnehmer',
    'LBL_REMINDERS_WHEN' => 'Wann:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Erinnerung entfernen',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Alle eingeladenen Personen hinzufügen',
    'LBL_REMINDERS_ADD_REMINDER' => 'Erinnerung hinzufügen',

    // for google sync
    'LBL_GSYNC_ID' => 'Google-Ereignis-ID',
    'LBL_GSYNC_LASTSYNC' => 'Letzter Google Sync Zeitstempel',
);
