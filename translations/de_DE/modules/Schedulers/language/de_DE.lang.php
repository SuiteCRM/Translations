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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Workflow-Aufgaben verarbeiten',
    'LBL_OOTB_REPORTS' => 'Aufgabenberichte verarbeiten',
    'LBL_OOTB_IE' => 'Eingehende E-Mail Konten überprüfen',
    'LBL_OOTB_BOUNCE' => 'Unzustellbare Kampagnen E-Mails verarbeiten (Nacht)',
    'LBL_OOTB_CAMPAIGN' => 'E-Mail Kampagnen-Massenaussendung (Nacht)',
    'LBL_OOTB_PRUNE' => 'Datenbank am 1. des Monats säubern',
    'LBL_OOTB_TRACKER' => 'Benutzerverlauf löschen',
    'LBL_OOTB_SUITEFEEDS' => 'SuiteCRMFeed Tabellen löschen',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'E-Mail Erinnerungsbenachrichtigungen ausführen',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Job-Warteschlange leeren',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Entfernung von Dokumenten aus dem Dateisystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Kalender Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Elasticsearch Indexierung starten',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervall:',
    'LBL_LIST_LIST_ORDER' => 'Geplante Aufgaben:',
    'LBL_LIST_NAME' => 'Geplante Aufgabe:',
    'LBL_LIST_RANGE' => 'Bereich:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Aufgaben Liste:',
// human readable:
    'LBL_SUN' => 'Sonntag',
    'LBL_MON' => 'Montag',
    'LBL_TUE' => 'Dienstag',
    'LBL_WED' => 'Mittwoch',
    'LBL_THU' => 'Donnerstag',
    'LBL_FRI' => 'Freitag',
    'LBL_SAT' => 'Samstag',
    'LBL_ALL' => 'Jeden Tag',
    'LBL_EVERY' => 'alle',
    'LBL_FROM' => 'Von',
    'LBL_ON_THE' => 'Am',
    'LBL_RANGE' => 'bis',
    'LBL_AND' => 'und',
    'LBL_MINUTES' => 'minuten',
    'LBL_HOUR' => 'stunden',
    'LBL_HOUR_SING' => 'Stunde',
    'LBL_OFTEN' => 'So oft wie möglich.',
    'LBL_MIN_MARK' => 'Minuten nach',


// crontabs
    'LBL_MINS' => 'Min',
    'LBL_HOURS' => 'h',
    'LBL_DAY_OF_MONTH' => 'Datum',
    'LBL_MONTHS' => 'Monate',
    'LBL_DAY_OF_WEEK' => 'Tag',
    'LBL_CRONTAB_EXAMPLES' => 'Das oben stehende verwendet die Standard Crontab Notation.',
// Labels
    'LBL_ALWAYS' => 'Immer',
    'LBL_CATCH_UP' => 'Ausführen, wenn versäumt',
    'LBL_CATCH_UP_WARNING' => 'Deaktivieren, wenn der Lauf dieses Jobs mehr als einen Moment dauert.',
    'LBL_DATE_TIME_END' => 'Enddatum &  Zeit',
    'LBL_DATE_TIME_START' => 'Startdatum & Zeit',
    'LBL_INTERVAL' => 'Intervall',
    'LBL_JOB' => 'Auftrag',
    'LBL_JOB_URL' => 'Job-URL',
    'LBL_LAST_RUN' => 'Letzte erfolgreiche Durchführung',
    'LBL_MODULE_NAME' => 'SuiteCRM Planer',
    'LBL_MODULE_TITLE' => 'Geplante Aufgaben',
    'LBL_NAME' => 'Name des Jobs',
    'LBL_NEVER' => 'Nie',
    'LBL_NEW_FORM_TITLE' => 'Neuer Termin',
    'LBL_PERENNIAL' => 'andauernd',
    'LBL_SEARCH_FORM_TITLE' => 'Geplante Aufgabe suchen',
    'LBL_SCHEDULER' => 'Geplante Aufgabe:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktiv von',
    'LBL_TIME_TO' => 'Aktiv bis',
    'LBL_WARN_CURL_TITLE' => 'cURL Warnung:',
    'LBL_WARN_CURL' => 'Warnung:',
    'LBL_WARN_NO_CURL' => 'In diesem System sind die cURL Bibliotheken im PHP Modul nicht aktiviert (--with-curl=/pfad/zu/curl_library). Bitte kontaktieren Sie den Administrator zur Lösung dieses Problems. Ohne diese Funktionalität kann der Zeitplaner die Jobs nicht einreihen.',
    'LBL_BASIC_OPTIONS' => 'Basis Setup',
    'LBL_ADV_OPTIONS' => 'Erw. Optionen',
    'LBL_TOGGLE_ADV' => 'Zeige erweiterte Optionen',
    'LBL_TOGGLE_BASIC' => 'Basisoptionen anzeigen',
// Links
    'LNK_LIST_SCHEDULER' => 'Geplante Aufgaben',
    'LNK_NEW_SCHEDULER' => 'Neue Aufgabe',
// Messages
    'ERR_CRON_SYNTAX' => 'Ungültige Cron Syntax',
    'NTC_LIST_ORDER' => 'Setzen Sie die Reihenfolge, in der dieser Plan in der Terminplaner Auswahlliste erscheinen soll',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Konfiguration des Windows Terminplaners',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Konfiguration eines crontab Eintrages',
    'LBL_CRON_LINUX_DESC1' => 'Um die SuiteCRM-Aufgabenplanung auszuführen, bearbeiten Sie die Crontab-Datei des Webservers mit diesem Befehl: ',
    'LBL_CRON_LINUX_DESC2' => '... füge folgende Zeile in die Crontab-Datei hinzu: ',
    'LBL_CRON_LINUX_DESC3' => 'Sie sollten dies erst nach Abschluss der Installation machen.',
    'LBL_CRON_WINDOWS_DESC' => 'Hinweis: Um den SuiteCRM Zeitplaner auszuführen, erstellen Sie eine Stapeldatei, die Sie mit Windows Geplante Aufgaben ausführen. Die Stapeldatei sollte folgende Kommandos enthalten: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Jobprotokoll',
    'LBL_EXECUTE_TIME' => 'Ausführungszeit',

//jobstrings
    'LBL_REFRESHJOBS' => 'Jobs aktualisieren',
    'LBL_POLLMONITOREDINBOXES' => 'Eingehende E-Mail-Konten synchronisieren',
    'LBL_PERFORMFULLFTSINDEX' => 'Volltextsuche Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'E-Mail Kampagnen-Massenaussendung (Nacht)',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Unzustellbare Kampagnen E-Mails verarbeiten (Nacht)',
    'LBL_PRUNEDATABASE' => 'Datenbank am 1. des Monats säubern',
    'LBL_TRIMTRACKER' => 'Benutzerverlauf löschen',
    'LBL_TRIMSUGARFEEDS' => 'SuiteCRMFeed Tabellen löschen',
    'LBL_SENDEMAILREMINDERS' => 'Emailerinnerungen senden',
    'LBL_CLEANJOBQUEUE' => 'Bereinigung Warteschleife',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Entfernung von Dokumenten aus dem Dateisystem',

    'LBL_AODOPTIMISEINDEX' => 'Erweiterter OpenDiscovery Index optimieren',
    'LBL_AODINDEXUNINDEXED' => 'Nichtindizierte Dokumente indizieren',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Abfragen der überwachten Posteingänge',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Geplante Berichte ausführen',
    'LBL_PROCESSAOW_WORKFLOW' => 'Prozess AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch Indexierer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Geplante Aufgaben',
    'LBL_SYNCGOOGLECALENDAR' => 'Google Kalender synchronisieren',
);

global $sugar_config;
