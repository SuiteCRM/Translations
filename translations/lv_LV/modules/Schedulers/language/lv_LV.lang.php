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
    'LBL_OOTB_WORKFLOW' => 'Izpildīt darbplūsmas uzdevumus',
    'LBL_OOTB_REPORTS' => 'Izpildīt atskaišu veidošanas ieplānotos uzdevumus',
    'LBL_OOTB_IE' => 'Pārbaudīt ienākušos e-pastus',
    'LBL_OOTB_BOUNCE' => 'Palaist marketinga kampaņas e-pasta izsūtīšanas nakts procesu',
    'LBL_OOTB_CAMPAIGN' => 'Palaist nakts masveida e-pasta kampaņu',
    'LBL_OOTB_PRUNE' => 'Arhivēt datubāzi 1.mēneša dienā',
    'LBL_OOTB_TRACKER' => 'Attīrīt sekotāja tabulas',
    'LBL_OOTB_SUITEFEEDS' => 'Iztīrīt SuiteCRM tabulas',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Palaist e-pasta notikumu atgādinātāju',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Attīrīšanas uzdevumu rinda',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Dokumentu aizvākšana no failu sistēmas',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervāls:',
    'LBL_LIST_LIST_ORDER' => 'Plānotāji:',
    'LBL_LIST_NAME' => 'Plānotājs:',
    'LBL_LIST_RANGE' => 'Diapazons:',
    'LBL_LIST_STATUS' => 'Statuss:',
    'LBL_LIST_TITLE' => 'Grafiku saraksts:',
// human readable:
    'LBL_SUN' => 'Svētdiena',
    'LBL_MON' => 'Pirmdiena',
    'LBL_TUE' => 'Otrdiena',
    'LBL_WED' => 'Trešdiena',
    'LBL_THU' => 'Ceturtdiena',
    'LBL_FRI' => 'Piektdiena',
    'LBL_SAT' => 'Sestdiena',
    'LBL_ALL' => 'Katru dienu',
    'LBL_EVERY' => 'Intervāls',
    'LBL_FROM' => 'No',
    'LBL_ON_THE' => 'Precīzi',
    'LBL_RANGE' => 'līdz',
    'LBL_AND' => 'un',
    'LBL_MINUTES' => 'minūtes',
    'LBL_HOUR' => 'stundas',
    'LBL_HOUR_SING' => 'stundas',
    'LBL_OFTEN' => 'Cik bieži vien iespējams.',
    'LBL_MIN_MARK' => 'noteikt minūti',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'st',
    'LBL_DAY_OF_MONTH' => 'datums',
    'LBL_MONTHS' => 'mēn',
    'LBL_DAY_OF_WEEK' => 'diena',
    'LBL_CRONTAB_EXAMPLES' => 'Augstāk redzamais balstīts uz standarta crontab notāciju.',
// Labels
    'LBL_ALWAYS' => 'Vienmēr',
    'LBL_CATCH_UP' => 'Izpildīt ja neveiksmīgs',
    'LBL_CATCH_UP_WARNING' => 'Neatzīmēt, ja procesa izpildei vajaga daudz laika.',
    'LBL_DATE_TIME_END' => 'Beigu datums un laiks',
    'LBL_DATE_TIME_START' => 'Sākuma datums un laiks',
    'LBL_INTERVAL' => 'Intervāls',
    'LBL_JOB' => 'Uzdevums',
    'LBL_JOB_URL' => 'Uzdevuma URL',
    'LBL_LAST_RUN' => 'Pēdēja veiksmīgā izpilde',
    'LBL_MODULE_NAME' => 'SuiteCRM Plānotājs',
    'LBL_MODULE_TITLE' => 'Plānotāji',
    'LBL_NAME' => 'Uzdevuma nosaukums',
    'LBL_NEVER' => 'nekad',
    'LBL_NEW_FORM_TITLE' => 'Jauns Grafiks',
    'LBL_PERENNIAL' => 'nepārtraukts',
    'LBL_SEARCH_FORM_TITLE' => 'Plānotāja meklēšana',
    'LBL_SCHEDULER' => 'Plānotājs:',
    'LBL_STATUS' => 'Statuss',
    'LBL_TIME_FROM' => 'Aktīvs no',
    'LBL_TIME_TO' => 'Aktīvs līdz',
    'LBL_WARN_CURL_TITLE' => 'cURL brīdinājums:',
    'LBL_WARN_CURL' => 'Brīdinājums:',
    'LBL_WARN_NO_CURL' => 'Šīs sistēmas PHP modulī nav aktivizētas/nokompilētas cURL bibliotēkas (--with-curl=/path/to/curl_library).  Sazinieties ar administratoru, lai atrisinātu šo problēmu.  Bez cURL funkcionalitātes, Plānotājs nevar izpildīt savus uzdevumus.',
    'LBL_BASIC_OPTIONS' => 'Pamata uzstādījumi',
    'LBL_ADV_OPTIONS' => 'Detalizētas iespējas',
    'LBL_TOGGLE_ADV' => 'Parādīt detalizētas iespējas',
    'LBL_TOGGLE_BASIC' => 'Parādīt standarta iespējas',
// Links
    'LNK_LIST_SCHEDULER' => 'Plānotāji',
    'LNK_NEW_SCHEDULER' => 'Jauns plānotājs',
// Messages
    'ERR_CRON_SYNTAX' => 'Kļūdaina Cron sintakse',
    'NTC_LIST_ORDER' => 'Noradiet kartību, pēc kuras grafiki būs sakārtoti plānotāju nolaižamajos sarakstos',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Lai uzstādītu Windows Plānotāju',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Lai uzstādītu Crontab',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
    'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_WINDOWS_DESC' => 'Piezīme: SuiteCRM plānotāju darbināšanai, izveidojiet batch failu darbināšanai, izmantojot Windows uzdevumu plānotāju. Batch failam jāsatur sekojošas komandas:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Job Log',
    'LBL_EXECUTE_TIME' => 'Izpildes laiks',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Palaist nakts masveida e-pasta kampaņu',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Palaist marketinga kampaņas e-pasta izsūtīšanas nakts procesu',
    'LBL_PRUNEDATABASE' => 'Arhivēt datubāzi 1.mēneša dienā',
    'LBL_TRIMTRACKER' => 'Attīrīt sekotāja tabulas',
    'LBL_TRIMSUGARFEEDS' => 'Iztīrīt SuiteCRM tabulas',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Dokumentu aizvākšana no failu sistēmas',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Scheduler Times',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
