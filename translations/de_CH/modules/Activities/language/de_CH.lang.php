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
    'LBL_MODULE_NAME' => 'Aktivitäten',
    'LBL_MODULE_TITLE' => 'Aktivitäten: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Aktivitäten Suche',
    'LBL_LIST_FORM_TITLE' => 'Aktivitäten Liste',
    'LBL_LIST_SUBJECT' => 'Betreff',
    'LBL_OVERVIEW' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'AUFGABEN', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEETINGS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'ANRUFE', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'E-Mails', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTIZEN', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'DRUCKEN', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Meetings',
    'LBL_CALL_TYPE' => 'Anrufe',
    'LBL_EMAIL_TYPE' => 'E-Mail',
    'LBL_NOTE_TYPE' => 'Notizen',
    'LBL_DATA_TYPE_START' => 'Starten:',
    'LBL_DATA_TYPE_SENT' => 'Gesendet:',
    'LBL_DATA_TYPE_MODIFIED' => 'Verändert:',
    'LBL_LIST_CONTACT' => 'Kontakte',
    'LBL_LIST_RELATED_TO' => 'Gehört zu:',
    'LBL_LIST_DATE' => 'Datum',
    'LBL_LIST_CLOSE' => 'Schliessen',
    'LBL_SUBJECT' => 'Betreff:',
    'LBL_STATUS' => 'Status',
    'LBL_LOCATION' => 'Ort:',
    'LBL_DATE_TIME' => 'Startdatum und -zeit:',
    'LBL_DATE' => 'Startdatum:',
    'LBL_TIME' => 'Beginn:',
    'LBL_DURATION' => 'Dauer:',
    'LBL_HOURS_MINS' => '(Stunden/Minuten)',
    'LBL_CONTACT_NAME' => 'Kontaktname: ',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LNK_NEW_CALL' => 'Anruf Log',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage:',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Anrufe',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Aufgaben',
    'LNK_NOTE_LIST' => 'Notizen',
    'LBL_DELETE_ACTIVITY' => 'Soll diese Aktivität wirklich gelöscht werden?',
    'ERR_DELETE_RECORD' => 'Es muß die Datensatznummer angegeben werden, um diesen Datensatz löschen zu können.',
    'LBL_INVITEE' => 'Teilnehmer',
    'LBL_LIST_DIRECTION' => 'Richtung',
    'LBL_DIRECTION' => 'Richtung',
    'LNK_NEW_APPOINTMENT' => 'Neuer Termin',
    'LNK_VIEW_CALENDAR' => 'Kalender anzeigen',
    'LBL_OPEN_ACTIVITIES' => 'Offene Aktivitäten',
    'LBL_HISTORY' => 'Verlauf',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Aufgabe erstellen',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Aufgabe erstellen',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Neues Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Neues Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Anruf Log',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Neue Notiz oder Anlage:',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Neue Notiz oder Anlage:',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'E-Mail archivieren',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'E-Mail archivieren',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Fälligkeitsdatum',
    'LBL_LIST_LAST_MODIFIED' => 'Zuletzt bearbeitet am',
    'LNK_IMPORT_CALLS' => 'Anrufe importieren',
    'LNK_IMPORT_MEETINGS' => 'Termine importieren',
    'LNK_IMPORT_TASKS' => 'Aufgaben importieren',
    'LNK_IMPORT_NOTES' => 'Notizen importieren',
    'LBL_ACCEPT_THIS' => 'Bestätigen?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Offene Aktivitäten',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesener Benutzer',

    'LBL_ACCEPT' => 'Bestätigen' /*for 508 compliance fix*/,
);
