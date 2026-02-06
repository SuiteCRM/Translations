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
    'LBL_OOTB_WORKFLOW' => 'Kjør workflow-oppgaver',
    'LBL_OOTB_REPORTS' => 'Kjør rapportgenerering på planlagte oppgaver',
    'LBL_OOTB_IE' => 'Sjekk innkommende e-post',
    'LBL_OOTB_BOUNCE' => 'Kjør nattlige prosesser på returnert kampanje-e-post',
    'LBL_OOTB_CAMPAIGN' => 'Kjør nattlige masse-e-post kampanjer',
    'LBL_OOTB_PRUNE' => 'Redusér databasen den første i hver måned',
    'LBL_OOTB_TRACKER' => 'Redusér brukerhistorikktabeller den første i hver måned',
    'LBL_OOTB_SUITEFEEDS' => 'Beskjær SuiteCRM kildetabeller',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Kjør e-postpåminnelser',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Tøm jobbkø',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Fjerner dokumenter fra filsystemet',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervall:',
    'LBL_LIST_LIST_ORDER' => 'Planleggere:',
    'LBL_LIST_NAME' => 'Planlegger:',
    'LBL_LIST_RANGE' => 'Rekkevidde:',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Planlegg liste:',
// human readable:
    'LBL_SUN' => 'Søndag',
    'LBL_MON' => 'Mandag',
    'LBL_TUE' => 'Tirsdag',
    'LBL_WED' => 'Onsdag',
    'LBL_THU' => 'Torsdag',
    'LBL_FRI' => 'Fredag',
    'LBL_SAT' => 'Lørdag',
    'LBL_ALL' => 'Hver dag',
    'LBL_EVERY' => 'Hver',
    'LBL_FROM' => 'Fra',
    'LBL_ON_THE' => 'På den/det',
    'LBL_RANGE' => 'til',
    'LBL_AND' => 'og',
    'LBL_MINUTES' => 'minutter',
    'LBL_HOUR' => 'timer',
    'LBL_HOUR_SING' => 'time',
    'LBL_OFTEN' => 'Så ofte som mulig.',
    'LBL_MIN_MARK' => 'minuttmarkør',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'timer',
    'LBL_DAY_OF_MONTH' => 'dato',
    'LBL_MONTHS' => 'måned',
    'LBL_DAY_OF_WEEK' => 'dag',
    'LBL_CRONTAB_EXAMPLES' => 'De ovenstående bruker standardisert crontab-tegnsystem.',
// Labels
    'LBL_ALWAYS' => 'Alltid',
    'LBL_CATCH_UP' => 'Gjennomfør hvis savnet',
    'LBL_CATCH_UP_WARNING' => 'Ta vekk markering hvis oppgaven tar land tid å gjennomføre.',
    'LBL_DATE_TIME_END' => 'Dato & tid start',
    'LBL_DATE_TIME_START' => 'Dato & tid slutt',
    'LBL_INTERVAL' => 'Intervall',
    'LBL_JOB' => 'Jobb',
    'LBL_JOB_URL' => 'JobbURL',
    'LBL_LAST_RUN' => 'Siste suksessrike kjøring',
    'LBL_MODULE_NAME' => 'SuiteCRM Planlegger',
    'LBL_MODULE_TITLE' => 'Planleggere',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Aldri',
    'LBL_NEW_FORM_TITLE' => 'Nytt skjema',
    'LBL_PERENNIAL' => 'evig',
    'LBL_SEARCH_FORM_TITLE' => 'Søk planlegger',
    'LBL_SCHEDULER' => 'Planlegger:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktiv fra',
    'LBL_TIME_TO' => 'Aktiv til',
    'LBL_WARN_CURL_TITLE' => 'cURL-advarsel:',
    'LBL_WARN_CURL' => 'Advarsel:',
    'LBL_WARN_NO_CURL' => 'Dette systemet har ikke integrert cURL-bibliotek i PHP-modulen (--with-curl=/path/to/curl_library).  Vennligst ta kontakt med din administrator for å løse dette problemet. Uten cURL-funksjonen kan ikke Planleggeren gjenge oppgavene sine.',
    'LBL_BASIC_OPTIONS' => 'Grunnleggende oppsett',
    'LBL_ADV_OPTIONS' => 'Avanserte innstillinger',
    'LBL_TOGGLE_ADV' => 'Avanserte innstillinger',
    'LBL_TOGGLE_BASIC' => 'Grunnleggende innstillinger',
// Links
    'LNK_LIST_SCHEDULER' => 'Planleggere',
    'LNK_NEW_SCHEDULER' => 'Opprett planlegger',
// Cron
    'ERR_CRON_SYNTAX' => 'Ugyldig Cron syntaks',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'Velg rekkefølgen for hvordan dette skjemaet vil vises i Planlegger-rullelisten',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Til oppsett for Windows-planlegger',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Til Crontab-oppsett',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers',
    'LBL_CRON_LINUX_DESC2' => '1. Edit your web server user\'s crontab file with this command',
    'LBL_CRON_LINUX_DESC3' => '2. Then update and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC4' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_LINUX_DESC5' => '2(i). To define the environment variables, add the following line:',
    'LBL_CRON_LINUX_DESC6' => 'Please update [path/to/php] and [path/to/suite/instance] to reflect your environment.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM Schedulers',
    'LBL_CRON_WINDOWS_DESC2' => '1. Create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
    'LBL_CRON_WINDOWS_DESC3' => 'Please update [path\to\php.exe] and [path\to\suite\instance] to reflect your environment.',
    'LBL_SCHEDULERS_INFO' => 'Scheduler Information',
    'LBL_SCHEDULERS_NEVER_RUN' => 'Schedulers have never been run.',
    // Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Arbeidslogg',
    'LBL_EXECUTE_TIME' => 'Avslutningstid',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Kjør nattlige masse-e-post kampanjer',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Kjør nattlige prosesser på returnert kampanje-e-post',
    'LBL_PRUNEDATABASE' => 'Redusér databasen den første i hver måned',
    'LBL_TRIMTRACKER' => 'Redusér brukerhistorikktabeller den første i hver måned',
    'LBL_TRIMSUGARFEEDS' => 'Beskjær SuiteCRM kildetabeller',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Fjerner dokumenter fra filsystemet',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_SENDFROMQUEUE' => 'Send Emails from Email Queue',
    'LBL_CLEANUPTEMPORARYFILES' => 'Clean Up Temporary Files',
    'LBL_EMAILTOQUEUE' => 'Send Scheduled Emails to Email Queue',

    'LBL_SCHEDULER_TIMES' => 'Oppgaveplanlegging tider',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
