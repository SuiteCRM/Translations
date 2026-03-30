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
    'LBL_OOTB_WORKFLOW' => 'Behandling af arbejdsgangopgaver',
    'LBL_OOTB_REPORTS' => 'Kør planlagte opgaver til rapportgenerering',
    'LBL_OOTB_IE' => 'Tjek indgående postkasser',
    'LBL_OOTB_BOUNCE' => 'Kør hver nat proces med afviste kampagne-e-mails',
    'LBL_OOTB_CAMPAIGN' => 'Kør hver nat kampagner med masse-e-mails',
    'LBL_OOTB_PRUNE' => 'Beskær databasen den 1. i måneden',
    'LBL_OOTB_TRACKER' => 'Beskær sporingstabeller',
    'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Run Email Reminder Notifications',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Removal of documents from filesystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Planlæggere:',
    'LBL_LIST_NAME' => 'Planlægger:',
    'LBL_LIST_RANGE' => 'Interval:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Liste over tidsplaner:',
// human readable:
    'LBL_SUN' => 'Sunday',
    'LBL_MON' => 'Monday',
    'LBL_TUE' => 'Tuesday',
    'LBL_WED' => 'Wednesday',
    'LBL_THU' => 'Thursday',
    'LBL_FRI' => 'Friday',
    'LBL_SAT' => 'Saturday',
    'LBL_ALL' => 'Hver dag',
    'LBL_EVERY' => 'Hver',
    'LBL_FROM' => 'Fra',
    'LBL_ON_THE' => 'På den',
    'LBL_RANGE' => 'til',
    'LBL_AND' => 'og',
    'LBL_MINUTES' => 'minutter',
    'LBL_HOUR' => 'timer',
    'LBL_HOUR_SING' => 'time',
    'LBL_OFTEN' => 'Så tit som muligt.',
    'LBL_MIN_MARK' => 'minutmærke',


// crontabs
    'LBL_MINS' => 'min.',
    'LBL_HOURS' => 't.',
    'LBL_DAY_OF_MONTH' => 'dato',
    'LBL_MONTHS' => 'ma',
    'LBL_DAY_OF_WEEK' => 'day',
    'LBL_CRONTAB_EXAMPLES' => 'Ovennævnte bruger standard crontab-notation.',
// Labels
    'LBL_ALWAYS' => 'Always',
    'LBL_CATCH_UP' => 'Udfør hvis ubesvaret',
    'LBL_CATCH_UP_WARNING' => 'Fjern markeringen, hvis dette job må tage mere end et øjeblik at køre.',
    'LBL_DATE_TIME_END' => 'Dato & tid slut',
    'LBL_DATE_TIME_START' => 'Dato & tid start',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Job',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Seneste succesfulde kørsel',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Planlæggere',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Never',
    'LBL_NEW_FORM_TITLE' => 'Ny tidsplan',
    'LBL_PERENNIAL' => 'tidsubegrænset',
    'LBL_SEARCH_FORM_TITLE' => 'Søg efter planlægger',
    'LBL_SCHEDULER' => 'Scheduler:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktiv fra',
    'LBL_TIME_TO' => 'Aktiv til',
    'LBL_WARN_CURL_TITLE' => 'cURL-advarsel:',
    'LBL_WARN_CURL' => 'Warning:',
    'LBL_WARN_NO_CURL' => 'Dette system har ikke cURL-biblioteker aktiveret/kompileret i PHP-modulet "- with-curl=/sti/til/curl_library". Kontakt administratoren for at løse dette problem. Uden cURL-funktionaliteten, kan planlæggeren ikke tråde sine job.',
    'LBL_BASIC_OPTIONS' => 'Basiskonfiguration',
    'LBL_ADV_OPTIONS' => 'Avancerede indstillinger',
    'LBL_TOGGLE_ADV' => 'Show Advanced Options',
    'LBL_TOGGLE_BASIC' => 'Grundlæggende indstillinger',
// Links
    'LNK_LIST_SCHEDULER' => 'Planlæggere',
    'LNK_NEW_SCHEDULER' => 'Opret planlægger',
// Cron
    'ERR_CRON_SYNTAX' => 'Ugyldig Cron-syntaks',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'Angiv den rækkefølge, hvori denne tidsplan vil blive vist i Planlægger-rullelisterne',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Til Setup Windows Scheduler',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Til Setup crontab',
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
    'LBL_JOBS_SUBPANEL_TITLE' => 'Job Log',
    'LBL_EXECUTE_TIME' => 'Udfør tid',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Run Nightly Mass Email Campaigns',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Run Nightly Process Bounced Campaign Emails',
    'LBL_PRUNEDATABASE' => 'Prune Database on 1st of Month',
    'LBL_TRIMTRACKER' => 'Prune Tracker Tables',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Removal of documents from filesystem',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_SENDFROMQUEUE' => 'Send Emails from Email Queue',
    'LBL_CLEANUPTEMPORARYFILES' => 'Clean Up Temporary Files',
    'LBL_EMAILTOQUEUE' => 'Send Scheduled Emails to Email Queue',

    'LBL_SCHEDULER_TIMES' => 'Scheduler Times',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
