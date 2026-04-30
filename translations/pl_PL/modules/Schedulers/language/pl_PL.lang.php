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
    'LBL_OOTB_WORKFLOW' => 'Przetwórz zadania WorkFlow',
    'LBL_OOTB_REPORTS' => 'Wykonaj Raport z Wykonania Zaplanowanych Zadań',
    'LBL_OOTB_IE' => 'Sprawdź Skrzynki Poczty Przychodzącej',
    'LBL_OOTB_BOUNCE' => 'Wykonaj nocną wysyłkę odbitej poczty kampanii',
    'LBL_OOTB_CAMPAIGN' => 'Wykonaj nocną masową wysyłkę poczty kampanii',
    'LBL_OOTB_PRUNE' => 'Oczyść bazę danych 1-go dnia miesiąca',
    'LBL_OOTB_TRACKER' => 'Oczyść tabele tropiciela',
    'LBL_OOTB_SUITEFEEDS' => 'Przytnij  tabele SuiteCRM Feed',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Uruchom powiadomienia e-mail',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Wyczyść Kolejkę Zadań',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Usówanie wszstkich dokumentów z systemu plików',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Synchronizacja z kalendarzem Google',
    'LBL_OOTB_ELASTIC_INDEX' => 'Uruchom indeks Elasticsearch',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interwał:',
    'LBL_LIST_LIST_ORDER' => 'Zadanie cykliczne:',
    'LBL_LIST_NAME' => 'Harmonogram:',
    'LBL_LIST_RANGE' => 'Zakres:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Lista harmonogramów:',
// human readable:
    'LBL_SUN' => 'Niedziela',
    'LBL_MON' => 'Poniedziałek',
    'LBL_TUE' => 'Wtorek',
    'LBL_WED' => 'Środa',
    'LBL_THU' => 'Czwartek',
    'LBL_FRI' => 'Piątek',
    'LBL_SAT' => 'Sobota',
    'LBL_ALL' => 'Każdego dnia',
    'LBL_EVERY' => 'Każdego',
    'LBL_FROM' => 'Od',
    'LBL_ON_THE' => 'Co',
    'LBL_RANGE' => 'do',
    'LBL_AND' => 'i',
    'LBL_MINUTES' => 'minut',
    'LBL_HOUR' => 'godzin',
    'LBL_HOUR_SING' => 'godzina',
    'LBL_OFTEN' => 'Tak często, jak tylko możliwe.',
    'LBL_MIN_MARK' => 'minut',


// crontabs
    'LBL_MINS' => 'minuty',
    'LBL_HOURS' => 'godziny',
    'LBL_DAY_OF_MONTH' => 'dzień miesiąca',
    'LBL_MONTHS' => 'miesiąc',
    'LBL_DAY_OF_WEEK' => 'day',
    'LBL_CRONTAB_EXAMPLES' => 'Powyżej użyto notacji crontaba.',
// Labels
    'LBL_ALWAYS' => 'Zawsze',
    'LBL_CATCH_UP' => 'Przeprowadź, jeżeli przegapiono',
    'LBL_CATCH_UP_WARNING' => 'Odznacz, jeżeli to działanie ma potrwać dłuzej.',
    'LBL_DATE_TIME_END' => 'Data i czas zakończenia',
    'LBL_DATE_TIME_START' => 'Data i czas rozpoczęcia',
    'LBL_INTERVAL' => 'Interwał',
    'LBL_JOB' => 'Praca',
    'LBL_JOB_URL' => 'Adres URL zadania',
    'LBL_LAST_RUN' => 'Ostanie wykonanie',
    'LBL_MODULE_NAME' => 'Harmonogramy SuiteCRM',
    'LBL_MODULE_TITLE' => 'Zadania cykliczne',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Nigdy',
    'LBL_NEW_FORM_TITLE' => 'Nowy harmonogram',
    'LBL_PERENNIAL' => 'bez przerwy',
    'LBL_SEARCH_FORM_TITLE' => 'Szukanie harmonogramu',
    'LBL_SCHEDULER' => 'Zadanie cykliczne:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktywny od',
    'LBL_TIME_TO' => 'Aktywny do',
    'LBL_WARN_CURL_TITLE' => 'Ostrzeżenie cURL:',
    'LBL_WARN_CURL' => 'Warning:',
    'LBL_WARN_NO_CURL' => 'Ten system nie posiada bibliotek cURL włączonych lub wkompilowanych w moduł PHP (--with-curl=/path/to/curl_library).  Skontaktuj się z Administratorem, aby rozwiązać ten problem.  Bez cURL nie można przeprowadzić harmonogramu.',
    'LBL_BASIC_OPTIONS' => 'Podstawowe ustawienia',
    'LBL_ADV_OPTIONS' => 'Opcje zaawansowane',
    'LBL_TOGGLE_ADV' => 'Show Advanced Options',
    'LBL_TOGGLE_BASIC' => 'Podstawowe ustawienia',
// Links
    'LNK_LIST_SCHEDULER' => 'Planery',
    'LNK_NEW_SCHEDULER' => 'Utwórz Zadanie cykliczne',
// Cron
    'ERR_CRON_SYNTAX' => 'Niewłaściwa składnia Crona',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'Kolejność wykonywania tego Harmonogramu pojawi się na liście rozwijalnej',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Aby ustawić Harmonogram Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Aby ustawić Crontab',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers',
    'LBL_CRON_LINUX_DESC2' => '1. Edit your web server user\'s crontab file with this command',
    'LBL_CRON_LINUX_DESC3' => '2. Then update and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC4' => 'Należy to zrobić dopiero po zakończeniu instalacji.',
    'LBL_CRON_LINUX_DESC5' => '2(i). To define the environment variables, add the following line:',
    'LBL_CRON_LINUX_DESC6' => 'Please update [path/to/php] and [path/to/suite/instance] to reflect your environment.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM Schedulers',
    'LBL_CRON_WINDOWS_DESC2' => '1. Create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
    'LBL_CRON_WINDOWS_DESC3' => 'Please update [path\to\php.exe] and [path\to\suite\instance] to reflect your environment.',
    'LBL_SCHEDULERS_INFO' => 'Scheduler Information',
    'LBL_SCHEDULERS_NEVER_RUN' => 'Schedulers have never been run.',
    // Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Dziennik zadań',
    'LBL_EXECUTE_TIME' => 'Czas Wykonania',

//jobstrings
    'LBL_REFRESHJOBS' => 'Odśwież akcje',
    'LBL_POLLMONITOREDINBOXES' => 'Sprawdzanie kont poczty przychodzącej',
    'LBL_PERFORMFULLFTSINDEX' => 'System indeksowania w wyszukiwaniu pełnotekstowym',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Wykonaj nocną masową wysyłkę kampanii mailowej',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Wykonaj nocny proces odbitej poczty kampanii mailowej',
    'LBL_PRUNEDATABASE' => 'Oczyść bazę danych 1-go dnia miesiąca',
    'LBL_TRIMTRACKER' => 'Oczyść tabele tropiciela',
    'LBL_TRIMSUGARFEEDS' => 'Wyczyść tabele kanałów SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Uruchomić wysyłanie przypomnień pocztą E-mail',
    'LBL_CLEANJOBQUEUE' => 'Wyczyść kolejkę zadań',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Usówanie dokumentów z systemu plików',

    'LBL_POLLMONITOREDINBOXESAOP' => 'Skrzynki email monitororowane przez AOP (Advanced Open Portal)',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Uruchamianie raportów zaplanowanych',
    'LBL_PROCESSAOW_WORKFLOW' => 'Przetwarzaj procesy WorkFlow AOW (Advanced Open Workflow)',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Indeksator elasticsearch',
    'LBL_SENDFROMQUEUE' => 'Send Emails from Email Queue',
    'LBL_CLEANUPTEMPORARYFILES' => 'Clean Up Temporary Files',
    'LBL_EMAILTOQUEUE' => 'Send Scheduled Emails to Email Queue',

    'LBL_SCHEDULER_TIMES' => 'Terminy Zadań cyklicznych',
    'LBL_SYNCGOOGLECALENDAR' => 'Synchronizacja kalendarzy Google',
);

global $sugar_config;
