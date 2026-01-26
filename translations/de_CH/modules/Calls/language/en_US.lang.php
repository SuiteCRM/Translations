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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Anrufe',
    'LBL_MODULE_TITLE' => 'Anrufe: Startseite',
    'LBL_SEARCH_FORM_TITLE' => 'Anrufe suchen',
    'LBL_LIST_FORM_TITLE' => 'Anrufliste',
    'LBL_NEW_FORM_TITLE' => 'Termin erstellen',
    'LBL_LIST_CLOSE' => 'Schliessen',
    'LBL_LIST_SUBJECT' => 'Betreff',
    'LBL_LIST_CONTACT' => 'Kontakte',
    'LBL_LIST_RELATED_TO' => 'Gehört zu:',
    'LBL_LIST_RELATED_TO_ID' => 'Gehört zu ID',
    'LBL_LIST_DATE' => 'Startdatum',
    'LBL_LIST_DIRECTION' => 'Richtung',
    'LBL_SUBJECT' => 'Betreff:',
    'LBL_REMINDER' => 'Erinnerungen:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_STATUS' => 'Status',
    'LBL_DIRECTION' => 'Richtung:',
    'LBL_DATE' => 'Startdatum:',
    'LBL_DURATION' => 'Dauer:',
    'LBL_DURATION_HOURS' => 'Dauer in Stunden:',
    'LBL_DURATION_MINUTES' => 'Dauer in Minuten:',
    'LBL_HOURS_MINUTES' => '(Stunden/Minuten)',
    'LBL_DATE_TIME' => 'Startdatum und -zeit:',
    'LBL_TIME' => 'Beginn:',
    'LBL_HOURS_ABBREV' => 'Std.',
    'LBL_MINSS_ABBREV' => 'min',
    'LNK_NEW_CALL' => 'Anruf Log',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_CALL_LIST' => 'Anrufe',
    'LNK_IMPORT_CALLS' => 'Anrufe importieren',
    'ERR_DELETE_RECORD' => 'Es muß die Datensatznummer angegeben werden, um diesen Datensatz löschen zu können.',
    'LBL_INVITEE' => 'Teilnehmer',
    'LBL_RELATED_TO' => 'Gehört zu:',
    'LNK_NEW_APPOINTMENT' => 'Termin erstellen',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planung',
    'LBL_ADD_INVITEE' => 'Teilnehmer hinzufügen',
    'LBL_NAME' => 'Name',
    'LBL_FIRST_NAME' => 'Vorname',
    'LBL_LAST_NAME' => 'Nachname',
    'LBL_EMAIL' => 'E-Mail',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-Mail an alle Teilnehmer',
    'LBL_EMAIL_REMINDER' => 'E-Mail Erinnerung',
    'LBL_EMAIL_REMINDER_TIME' => 'E-Mail Erinnerungszeit',
    'LBL_SEND_BUTTON_TITLE' => 'Speichern & Einladungen versenden',
    'LBL_SEND_BUTTON_LABEL' => 'Speichern & Einladungen versenden',
    'LBL_DATE_END' => 'Enddatum',
    'LBL_REMINDER_TIME' => 'Erinnerungszeitpunkt',
    'LBL_EMAIL_REMINDER_SENT' => 'E-Mail Erinnerung gesendet',
    'LBL_SEARCH_BUTTON' => 'Suchen',
    'LBL_ADD_BUTTON' => 'Hinzufügen',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Anrufe',
    'LNK_SELECT_ACCOUNT' => 'Firma auswählen',
    'LNK_NEW_ACCOUNT' => 'Neue Firma',
    'LNK_NEW_OPPORTUNITY' => 'Neue Verkaufschance',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_USERS_SUBPANEL_TITLE' => 'Benutzer',
    'LBL_OUTLOOK_ID' => 'Outlook-ID',
    'LBL_MEMBER_OF' => 'Mitglied von',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notizen',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_LIST_MY_CALLS' => 'Meine Anrufe',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesener Benutzer',
    'NOTICE_DURATION_TIME' => 'Zeitdauer muss größer als 0 sein',
    'LBL_CALL_INFORMATION' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Entfernen',
    'LBL_ACCEPT_STATUS' => 'Status akzeptieren',
    'LBL_ACCEPT_LINK' => 'Link annehmen',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Einen Teilnehmer erstellen',
    'LBL_CREATE_CONTACT' => 'Als Kontakt',
    'LBL_CREATE_LEAD' => 'Als Interessent',
    'LBL_CREATE_AND_ADD' => 'Erstellen und hinzufügen',
    'LBL_CANCEL_CREATE_INVITEE' => 'Abbrechen',
    'LBL_EMPTY_SEARCH_RESULT' => 'Keine Resultate gefunden, bitte unten einen Teilnehmer erstellen.',
    'LBL_NO_ACCESS' => 'Sie haben keine Berechtigung, $module zu erstellen',

    'LBL_REPEAT_TYPE' => 'Wiederholungstyp',
    'LBL_REPEAT_INTERVAL' => 'Wiederholungsintervall',
    'LBL_REPEAT_DOW' => 'Wiederhole Wochentage',
    'LBL_REPEAT_UNTIL' => 'Wiederhole bis',
    'LBL_REPEAT_COUNT' => 'Wiederholungszähler',
    'LBL_REPEAT_PARENT_ID' => 'Wiederhole Eltern ID',
    'LBL_RECURRING_SOURCE' => 'Quelle Wiederholungen',

    'LBL_SYNCED_RECURRING_MSG' => 'Dieser Anruf entstammt aus einem anderen Systen und wurde mit SuiteCRM synchronisiert. Benutzen Sie das Ursprungssystem, um Anpassungen an diesem Anruf zu machen. Änderungen, welche im anderen System gemacht werden, können mit diesem Anrufeintrag synchronisiert werden.',

    // for reminders
    'LBL_REMINDERS' => 'Erinnerungen',
    'LBL_REMINDERS_ACTIONS' => 'Aktionen:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'E-Mail-Teilnehmer',
    'LBL_REMINDERS_WHEN' => 'Wann:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Erinnerung entfernen',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Alle eingeladenen Personen hinzufügen',
    'LBL_REMINDERS_ADD_REMINDER' => 'Erinnerung hinzufügen',

    'LBL_RESCHEDULE' => 'Wiedervorlage',
    'LBL_RESCHEDULE_COUNT' => 'Rufen Sie Versuche',
    'LBL_RESCHEDULE_DATE' => 'Datum',
    'LBL_RESCHEDULE_REASON' => 'Grund',
    'LBL_RESCHEDULE_ERROR1' => 'Bitte ein gültiges Datum auswählen',
    'LBL_RESCHEDULE_ERROR2' => 'Bitte einen Grund auswählen',
    'LBL_RESCHEDULE_PANEL' => 'Wiedervorlage',
    'LBL_RESCHEDULE_HISTORY' => 'Verlauf Anrufversuche',
    'LBL_CANCEL' => 'Abbrechen',
    'LBL_SAVE' => 'Speichern',

    'LBL_CALLS_RESCHEDULE' => 'Anrufe planen',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Letzte Änderung',
    'LBL_LIST_DUE_DATE'=>'Fälligkeitsdatum',
    'LBL_RESCHEDULED_BY'=>'durch',
);
