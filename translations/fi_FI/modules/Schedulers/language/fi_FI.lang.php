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
    'LBL_OOTB_WORKFLOW' => 'Käsittele työnkulkutehtävät',
    'LBL_OOTB_REPORTS' => 'Suorita ajoitetut raportin luonti tehtävät',
    'LBL_OOTB_IE' => 'Tarkista saapuvien postilaatikot',
    'LBL_OOTB_BOUNCE' => 'Suorita yöllä prosessi Bounced kampanjasähköposteille',
    'LBL_OOTB_CAMPAIGN' => 'Suorita yöllä massasähköpostikampanjat',
    'LBL_OOTB_PRUNE' => 'Karsi tietokanta kuukauden 1. päivänä',
    'LBL_OOTB_TRACKER' => 'Karsi seurantataulut',
    'LBL_OOTB_SUITEFEEDS' => 'Karsi SuiteCRM syötteen taulukot',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Suorita muistutus sähköpostiilmoituksista',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Siivoa työjono',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Asiakirjojen poistaminen tiedostojärjestelmästä',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google-kalenterin synkronointi',
    'LBL_OOTB_ELASTIC_INDEX' => 'Suorita joustavahaku-Indeksi',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Aikaväli:',
    'LBL_LIST_LIST_ORDER' => 'Ajastukset:',
    'LBL_LIST_NAME' => 'Ajastin:',
    'LBL_LIST_RANGE' => 'Alue:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Aikataululuettelo:',
// human readable:
    'LBL_SUN' => 'Sunday',
    'LBL_MON' => 'Monday',
    'LBL_TUE' => 'Tuesday',
    'LBL_WED' => 'Wednesday',
    'LBL_THU' => 'Thursday',
    'LBL_FRI' => 'Friday',
    'LBL_SAT' => 'Saturday',
    'LBL_ALL' => 'Joka päivä',
    'LBL_EVERY' => 'Kuinka usein',
    'LBL_FROM' => 'From',
    'LBL_ON_THE' => 'Ajankohtana',
    'LBL_RANGE' => 'to',
    'LBL_AND' => 'ja',
    'LBL_MINUTES' => 'minuuttia',
    'LBL_HOUR' => 'tuntia',
    'LBL_HOUR_SING' => 'hour',
    'LBL_OFTEN' => 'Niin usein kuin mahdollista.',
    'LBL_MIN_MARK' => 'minuuttimerkki',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'tunnit',
    'LBL_DAY_OF_MONTH' => 'päivä',
    'LBL_MONTHS' => 'kk',
    'LBL_DAY_OF_WEEK' => 'day',
    'LBL_CRONTAB_EXAMPLES' => 'Yllä oleva käyttää standardi-crontab-merkintää.',
// Labels
    'LBL_ALWAYS' => 'Always',
    'LBL_CATCH_UP' => 'Suorita jos Puuttuu',
    'LBL_CATCH_UP_WARNING' => 'Uncheck if this job may take more than a moment to run.',
    'LBL_DATE_TIME_END' => 'Date & Time End',
    'LBL_DATE_TIME_START' => 'Aloitus pvm & aika',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Job',
    'LBL_JOB_URL' => 'Job URL',
    'LBL_LAST_RUN' => 'Last Successful Run',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Schedulers',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Never',
    'LBL_NEW_FORM_TITLE' => 'New Schedule',
    'LBL_PERENNIAL' => 'perpetual',
    'LBL_SEARCH_FORM_TITLE' => 'Scheduler Search',
    'LBL_SCHEDULER' => 'Scheduler:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Active From',
    'LBL_TIME_TO' => 'Active To',
    'LBL_WARN_CURL_TITLE' => 'cURL Warning:',
    'LBL_WARN_CURL' => 'Warning:',
    'LBL_WARN_NO_CURL' => 'This system does not have the cURL libraries enabled/compiled into the PHP module (--with-curl=/path/to/curl_library). Please contact your administrator to resolve this issue. Without the cURL functionality, the Scheduler cannot thread its jobs.',
    'LBL_BASIC_OPTIONS' => 'Basic Setup',
    'LBL_ADV_OPTIONS' => 'Advanced Options',
    'LBL_TOGGLE_ADV' => 'Näytä lisäasetukset',
    'LBL_TOGGLE_BASIC' => 'Show Basic Options',
// Links
    'LNK_LIST_SCHEDULER' => 'Schedulers',
    'LNK_NEW_SCHEDULER' => 'Create Scheduler',
// Cron
    'ERR_CRON_SYNTAX' => 'Invalid Cron syntax',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'Set the order this schedule will appear in the Scheduler dropdown lists',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'To Setup Windows Scheduler',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'To Setup Crontab',
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
    'LBL_EXECUTE_TIME' => 'Suoritusaika',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Suorita yöllä massasähköpostikampanjat',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Suorita yöllä prosessi Bounced kampanjasähköposteille',
    'LBL_PRUNEDATABASE' => 'Prune Database on 1st of Month',
    'LBL_TRIMTRACKER' => 'Karsi seurantataulut',
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
