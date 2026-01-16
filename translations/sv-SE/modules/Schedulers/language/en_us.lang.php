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
    'LBL_OOTB_WORKFLOW' => 'Genomför workflow uppgifter',
    'LBL_OOTB_REPORTS' => 'Kör schemalagd process för att generera rapporter',
    'LBL_OOTB_IE' => 'Kontrollera inkommande mailboxar',
    'LBL_OOTB_BOUNCE' => 'Kör nattlig process för studsad kampanj epost',
    'LBL_OOTB_CAMPAIGN' => 'Kör nattliga mass epost kampanjer',
    'LBL_OOTB_PRUNE' => 'Rensa databasen den 1:a varje månad',
    'LBL_OOTB_TRACKER' => 'Rensa användarhistorik den 1:a varje månad',
    'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Run Email Reminder Notifications',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Borttagning av dokument från filesystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervall:',
    'LBL_LIST_LIST_ORDER' => 'Schemaläggare:',
    'LBL_LIST_NAME' => 'Schemaläggare:',
    'LBL_LIST_RANGE' => 'Intervall:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Lista schema:',
// human readable:
    'LBL_SUN' => 'Söndag',
    'LBL_MON' => 'Måndag',
    'LBL_TUE' => 'Tisdag',
    'LBL_WED' => 'Onsdag',
    'LBL_THU' => 'Torsdag',
    'LBL_FRI' => 'Fredag',
    'LBL_SAT' => 'Lördag',
    'LBL_ALL' => 'Varje dag',
    'LBL_EVERY' => 'Varje',
    'LBL_FROM' => 'Från',
    'LBL_ON_THE' => 'På',
    'LBL_RANGE' => 'a',
    'LBL_AND' => 'och',
    'LBL_MINUTES' => 'minuter',
    'LBL_HOUR' => 'timmar',
    'LBL_HOUR_SING' => 'timme',
    'LBL_OFTEN' => 'Så ofta som möjligt.',
    'LBL_MIN_MARK' => 'minut markering',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'tim',
    'LBL_DAY_OF_MONTH' => 'datum',
    'LBL_MONTHS' => 'må',
    'LBL_DAY_OF_WEEK' => 'dag',
    'LBL_CRONTAB_EXAMPLES' => 'Det ovan använder standard crontab notation.',
// Labels
    'LBL_ALWAYS' => 'Alltid',
    'LBL_CATCH_UP' => 'Exekvera om missat',
    'LBL_CATCH_UP_WARNING' => 'Kryssa ur detta jobb kan ta längre än en stund att köra.',
    'LBL_DATE_TIME_END' => 'Slutdatum & -tid',
    'LBL_DATE_TIME_START' => 'Startdatum & -tid',
    'LBL_INTERVAL' => 'Intervall',
    'LBL_JOB' => 'Jobb',
    'LBL_JOB_URL' => 'Jobb-URL',
    'LBL_LAST_RUN' => 'Senast lyckade körningen',
    'LBL_MODULE_NAME' => 'SuiteCRM Scheduler',
    'LBL_MODULE_TITLE' => 'Schemaläggare',
    'LBL_NAME' => 'Jobbnamn',
    'LBL_NEVER' => 'Aldrig',
    'LBL_NEW_FORM_TITLE' => 'Nytt schema',
    'LBL_PERENNIAL' => 'evig',
    'LBL_SEARCH_FORM_TITLE' => 'Sök schemaläggare',
    'LBL_SCHEDULER' => 'Schemaläggare:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Aktiv från',
    'LBL_TIME_TO' => 'Aktiv till',
    'LBL_WARN_CURL_TITLE' => 'cURL varning:',
    'LBL_WARN_CURL' => 'Varning',
    'LBL_WARN_NO_CURL' => 'Systemet har inte cURL biblioteken aktiverade/kopilerade i PHP modulen  (--with-curl=/path/to/curl_library). Var god kontakta administratören för att lösa problemet. Utan cURL funktionaliteten kan inte shcemaläggaren tråda jobben.',
    'LBL_BASIC_OPTIONS' => 'Enkla inställningar',
    'LBL_ADV_OPTIONS' => 'Avancerade alternativ',
    'LBL_TOGGLE_ADV' => 'Avancerade alternativ',
    'LBL_TOGGLE_BASIC' => 'Enkla alternativ',
// Links
    'LNK_LIST_SCHEDULER' => 'Schemaläggare',
    'LNK_NEW_SCHEDULER' => 'Skapa schemaläggning',
// Messages
    'ERR_CRON_SYNTAX' => 'Invalidera Cron-syntax',
    'NTC_LIST_ORDER' => 'Sätt ordningen för hur schemaläggningen ska visas i dropdownmenyn över schemaläggning',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Sätta upp windows schemaläggare',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Sätt upp crontab',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
    'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM schedulers, create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Jobblogg',
    'LBL_EXECUTE_TIME' => 'Exekveringstid',

//jobstrings
    'LBL_REFRESHJOBS' => 'Uppdatera jobb',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Kör nattliga mass epost kampanjer',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Kör nattlig process för studsad kampanj epost',
    'LBL_PRUNEDATABASE' => 'Rensa databasen den 1:a varje månad',
    'LBL_TRIMTRACKER' => 'Rensa användarhistorik den 1:a varje månad',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Borttagning av dokument från filesystem',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',

    'LBL_SCHEDULER_TIMES' => 'Scheduler Times',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
