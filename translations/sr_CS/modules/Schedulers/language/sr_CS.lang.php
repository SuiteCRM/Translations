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
    'LBL_OOTB_WORKFLOW' => 'Pokreni zadatke radnog toka',
    'LBL_OOTB_REPORTS' => 'Pokreni generisanje izveštaja o planiranim zadacima',
    'LBL_OOTB_IE' => 'Proveri dolazno poštansko sanduče',
    'LBL_OOTB_BOUNCE' => 'Pokreni noćno procesiranje vraćenih email poruka iz kampanja',
    'LBL_OOTB_CAMPAIGN' => 'Pokreni noćne masovne Email kampanje',
    'LBL_OOTB_PRUNE' => 'Smanji bazu prvog dana u mesecu',
    'LBL_OOTB_TRACKER' => 'Smanji tabele sistema za praćenje',
    'LBL_OOTB_SUITEFEEDS' => 'Smanji SuiteCRM Feed tabele',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Pokreni email podsetnike',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Red poslova čišćenja',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Uklanjanje dokumenata iz fajl sistema',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Planeri:',
    'LBL_LIST_NAME' => 'Planer:',
    'LBL_LIST_RANGE' => 'Opseg:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Lista planova:',
// human readable:
    'LBL_SUN' => 'Nedelja',
    'LBL_MON' => 'Ponedeljak',
    'LBL_TUE' => 'Utorak',
    'LBL_WED' => 'Sreda',
    'LBL_THU' => 'Četvrtak',
    'LBL_FRI' => 'Petak',
    'LBL_SAT' => 'Subota',
    'LBL_ALL' => 'Svaki dan',
    'LBL_EVERY' => 'Svaki',
    'LBL_FROM' => 'Od',
    'LBL_ON_THE' => 'Na',
    'LBL_RANGE' => 'za',
    'LBL_AND' => 'i',
    'LBL_MINUTES' => 'minuta',
    'LBL_HOUR' => ' sati',
    'LBL_HOUR_SING' => ' sat',
    'LBL_OFTEN' => 'Koliko god je moguće često.',
    'LBL_MIN_MARK' => 'oznaka minute',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'sati',
    'LBL_DAY_OF_MONTH' => 'datum',
    'LBL_MONTHS' => 'mesec',
    'LBL_DAY_OF_WEEK' => 'dan',
    'LBL_CRONTAB_EXAMPLES' => 'Iznad koristi standardnu crontab notaciju.',
// Labels
    'LBL_ALWAYS' => 'Uvek',
    'LBL_CATCH_UP' => 'Izvrši ako je propušteno',
    'LBL_CATCH_UP_WARNING' => 'Isključite ako je za izvršavanje ovoga potrebno više od nekoliko trenutaka.',
    'LBL_DATE_TIME_END' => 'Datum i vreme završetka',
    'LBL_DATE_TIME_START' => 'Datum i vreme početka',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Zadatak',
    'LBL_JOB_URL' => 'URL posla',
    'LBL_LAST_RUN' => 'Poslednje uspešno izvršavanje',
    'LBL_MODULE_NAME' => 'Suger planer',
    'LBL_MODULE_TITLE' => 'Zakazivači',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Nikada',
    'LBL_NEW_FORM_TITLE' => 'Novo planiranje',
    'LBL_PERENNIAL' => 'neograničeno',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga planera',
    'LBL_SCHEDULER' => 'Planer:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktivan od',
    'LBL_TIME_TO' => 'Aktivan do',
    'LBL_WARN_CURL_TITLE' => 'cURL upozorenje:',
    'LBL_WARN_CURL' => 'Upozorenje:',
    'LBL_WARN_NO_CURL' => 'Ovaj sistem nema cURL biblioteke omogućene/kompajlirane u PHP modulu  (--with-curl=/path/to/curl_library). Molim, obratite se vašem administratoru za rešenje ovog problema. Bez cURL funkcionalnosti, Planer ne može nizati svoje poslove.',
    'LBL_BASIC_OPTIONS' => 'Osnovna podešavanja',
    'LBL_ADV_OPTIONS' => 'Napredne opcije',
    'LBL_TOGGLE_ADV' => 'Prikaži Napredne Opcije',
    'LBL_TOGGLE_BASIC' => 'Prikaži osnovne opcije',
// Links
    'LNK_LIST_SCHEDULER' => 'Zakazivači',
    'LNK_NEW_SCHEDULER' => 'Kreiraj Planera',
// Cron
    'ERR_CRON_SYNTAX' => 'Neispravna Cron sintaksa',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'Postavi redosled po kome će se ovaj zadatak prikazati u padajućoj listi Planera',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Da bi podesli Windows Planer',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Da bi podesili Crontab',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers',
    'LBL_CRON_LINUX_DESC2' => '1. Edit your web server user\'s crontab file with this command',
    'LBL_CRON_LINUX_DESC3' => '2. Then update and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC4' => 'Ovo treba da uradite tek kada je instalacija završena.',
    'LBL_CRON_LINUX_DESC5' => '2(i). To define the environment variables, add the following line:',
    'LBL_CRON_LINUX_DESC6' => 'Please update [path/to/php] and [path/to/suite/instance] to reflect your environment.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM Schedulers',
    'LBL_CRON_WINDOWS_DESC2' => '1. Create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
    'LBL_CRON_WINDOWS_DESC3' => 'Please update [path\to\php.exe] and [path\to\suite\instance] to reflect your environment.',
    'LBL_SCHEDULERS_INFO' => 'Scheduler Information',
    'LBL_SCHEDULERS_NEVER_RUN' => 'Schedulers have never been run.',
    // Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Log posla',
    'LBL_EXECUTE_TIME' => 'Vreme izvršavanja',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Pokreni noćne masovne Email kampanje',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Pokreni noćno procesiranje vraćenih email poruka iz kampanja',
    'LBL_PRUNEDATABASE' => 'Smanji bazu prvog dana u mesecu',
    'LBL_TRIMTRACKER' => 'Smanji tabele sistema za praćenje',
    'LBL_TRIMSUGARFEEDS' => 'Smanji SuiteCRM Feed tabele',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Uklanjanje dokumenata iz fajl sistema',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_SENDFROMQUEUE' => 'Send Emails from Email Queue',
    'LBL_CLEANUPTEMPORARYFILES' => 'Clean Up Temporary Files',
    'LBL_EMAILTOQUEUE' => 'Send Scheduled Emails to Email Queue',

    'LBL_SCHEDULER_TIMES' => 'Vremena rasporeda',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
