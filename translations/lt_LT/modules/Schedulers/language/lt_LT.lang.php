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
    'LBL_OOTB_WORKFLOW' => 'Vykdyti darbo sekų užduotis',
    'LBL_OOTB_REPORTS' => 'Vykdyti suplanuotų ataskaitų užduotis',
    'LBL_OOTB_IE' => 'Tikrinti įeinančio el. pašto dėžutes',
    'LBL_OOTB_BOUNCE' => 'Vykdyti grįžtančių laiškų apdorojimą',
    'LBL_OOTB_CAMPAIGN' => 'Vykdyti masinių laiškų siuntimą',
    'LBL_OOTB_PRUNE' => 'Išvalyti duomenų bazę pirmą mėnesio dieną',
    'LBL_OOTB_TRACKER' => 'Išvalyti audito lenteles',
    'LBL_OOTB_SUITEFEEDS' => 'Sumažinti SuiteCRM santraukų lenteles',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Paleisti el. pašto Priminimas Pranešimais',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Išvalyti Darbus iš Queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Pašalinti dokumentus iš failų sistemos',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervalas:',
    'LBL_LIST_LIST_ORDER' => 'Planuotojai:',
    'LBL_LIST_NAME' => 'Planuotojas:',
    'LBL_LIST_RANGE' => 'Periodas:',
    'LBL_LIST_STATUS' => 'Būsena:',
    'LBL_LIST_TITLE' => 'Planuotojų sąrašas:',
// human readable:
    'LBL_SUN' => 'Sunday',
    'LBL_MON' => 'Monday',
    'LBL_TUE' => 'Tuesday',
    'LBL_WED' => 'Wednesday',
    'LBL_THU' => 'Thursday',
    'LBL_FRI' => 'Friday',
    'LBL_SAT' => 'Saturday',
    'LBL_ALL' => 'Kiekvieną dieną',
    'LBL_EVERY' => 'Every',
    'LBL_FROM' => 'Nuo',
    'LBL_ON_THE' => 'Kas',
    'LBL_RANGE' => 'į',
    'LBL_AND' => 'ir',
    'LBL_MINUTES' => 'minutes',
    'LBL_HOUR' => 'valandos',
    'LBL_HOUR_SING' => 'hour',
    'LBL_OFTEN' => 'Kaip įmanoma dažnai.',
    'LBL_MIN_MARK' => 'minutės žymuo',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'val',
    'LBL_DAY_OF_MONTH' => 'm.diena',
    'LBL_MONTHS' => 'mėnuo',
    'LBL_DAY_OF_WEEK' => 'day',
    'LBL_CRONTAB_EXAMPLES' => 'Viršuje naudojama standartinė crontab žymėjimo sistema.',
// Labels
    'LBL_ALWAYS' => 'Always',
    'LBL_CATCH_UP' => 'Vykdyti jei praleistas',
    'LBL_CATCH_UP_WARNING' => 'Nuimti pažymėjimą, jeigu darbas gali užtrukti ilgiau.',
    'LBL_DATE_TIME_END' => 'Užbaigimo data ir laikas',
    'LBL_DATE_TIME_START' => 'Pradžios data ir laikas',
    'LBL_INTERVAL' => 'Intervalas',
    'LBL_JOB' => 'Darbas',
    'LBL_JOB_URL' => 'Užduoties URL',
    'LBL_LAST_RUN' => 'Paskutinis sėkmingas įvykdymas',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Schedulers',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Never',
    'LBL_NEW_FORM_TITLE' => 'Naujas planuotojas',
    'LBL_PERENNIAL' => 'Amžinas',
    'LBL_SEARCH_FORM_TITLE' => 'Planuotojo paieška',
    'LBL_SCHEDULER' => 'Scheduler:',
    'LBL_STATUS' => 'Statusas:',
    'LBL_TIME_FROM' => 'Aktyvus nuo',
    'LBL_TIME_TO' => 'Aktyvus iki',
    'LBL_WARN_CURL_TITLE' => 'cURL perspėjimas:',
    'LBL_WARN_CURL' => 'Warning:',
    'LBL_WARN_NO_CURL' => 'Ši sistema netri cURL bibliotekų įjungtų/sukompiliuotų PHP modulyje(--su-curl=/kelias/į/curl_biblioteką).  Prašome susisiekti su administratoriumi ir išspręsti šią problemą.  Be cURL funkcionalumo, planuotojas negali daryti savo darbų.',
    'LBL_BASIC_OPTIONS' => 'Baziniai nustatymai',
    'LBL_ADV_OPTIONS' => 'Sudėtingesni nustatymai',
    'LBL_TOGGLE_ADV' => 'Rodyti papildomus nustatymus',
    'LBL_TOGGLE_BASIC' => 'Baziniai nustatymai',
// Links
    'LNK_LIST_SCHEDULER' => 'Schedulers',
    'LNK_NEW_SCHEDULER' => 'Sukurti planuotoją',
// Cron
    'ERR_CRON_SYNTAX' => 'Neteisinga Cron sintaksė',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'Nustatykite tvarką, kuria norite matyti iššokančiame sąraše',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Nustatyti Windows planuotoją',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Nustatyti crontab',
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
    'LBL_JOBS_SUBPANEL_TITLE' => 'Darbų registratorius',
    'LBL_EXECUTE_TIME' => 'Vykdymo laikas',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Vykdyti masinių laiškų siuntimą',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Vykdyti grįžtančių laiškų apdorojimą',
    'LBL_PRUNEDATABASE' => 'Išvalyti duomenų bazę pirmą mėnesio dieną',
    'LBL_TRIMTRACKER' => 'Išvalyti audito lenteles',
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
