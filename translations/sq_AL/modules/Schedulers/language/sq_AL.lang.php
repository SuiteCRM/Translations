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
    'LBL_OOTB_WORKFLOW' => 'Detyrat e procesit të rrjedhës së punës',
    'LBL_OOTB_REPORTS' => 'Detyrat e planifikuara të gjenerimit të drejtimit të raporteve',
    'LBL_OOTB_IE' => 'Kontrollo kutitë e maileve të drejtuara përbrenda',
    'LBL_OOTB_BOUNCE' => 'Drejtimi i procesit të natës refuzon Emailat e Kampanjës',
    'LBL_OOTB_CAMPAIGN' => 'Drejtimi i natës së Emailave masive të Kampanjës',
    'LBL_OOTB_PRUNE' => 'Baza e të dhënave të trapave në muajin e 1',
    'LBL_OOTB_TRACKER' => 'Tabela të trapave të gjurmuesve',
    'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Emailat e drejtuar kujtojnë njoftimet',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Pastrimi i punëve të reshtit',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Removal of documents from filesystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervali',
    'LBL_LIST_LIST_ORDER' => 'Planifikimet',
    'LBL_LIST_NAME' => 'Planifikimi:',
    'LBL_LIST_RANGE' => 'Gama:',
    'LBL_LIST_STATUS' => 'statusi',
    'LBL_LIST_TITLE' => 'Lista e planifikimit',
// human readable:
    'LBL_SUN' => 'E diel',
    'LBL_MON' => 'E hënë',
    'LBL_TUE' => 'E martë',
    'LBL_WED' => 'E mërkurë',
    'LBL_THU' => 'E enjte',
    'LBL_FRI' => 'E premte',
    'LBL_SAT' => 'E shtunë',
    'LBL_ALL' => 'Çdo ditë',
    'LBL_EVERY' => 'Intervali',
    'LBL_FROM' => 'nga',
    'LBL_ON_THE' => 'në',
    'LBL_RANGE' => 'tek',
    'LBL_AND' => 'dhe',
    'LBL_MINUTES' => 'minutat',
    'LBL_HOUR' => 'orët',
    'LBL_HOUR_SING' => 'orë',
    'LBL_OFTEN' => 'sa më shpesh që mundet',
    'LBL_MIN_MARK' => 'shënues i minutave',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'Orët',
    'LBL_DAY_OF_MONTH' => 'data',
    'LBL_MONTHS' => 'Muajtë',
    'LBL_DAY_OF_WEEK' => 'dita',
    'LBL_CRONTAB_EXAMPLES' => 'E lartëshënuara përdor simbole planifikuese të etiketimit.',
// Labels
    'LBL_ALWAYS' => 'Çdoherë',
    'LBL_CATCH_UP' => 'ekzekuto nëse mungon',
    'LBL_CATCH_UP_WARNING' => 'Mos kontrollo nësë puna do të kap më tepër se një minutë për ta drejtuar',
    'LBL_DATE_TIME_END' => 'Data dhe koha e përfundimit',
    'LBL_DATE_TIME_START' => 'Data dhe ora e nisjes',
    'LBL_INTERVAL' => 'Intervali',
    'LBL_JOB' => 'puna',
    'LBL_JOB_URL' => 'Puna URL',
    'LBL_LAST_RUN' => 'Drejtimi i fundit i suksesshëm',
    'LBL_MODULE_NAME' => 'SuiteCRM planifikimet',
    'LBL_MODULE_TITLE' => 'Planifikuesit',
    'LBL_NAME' => 'Emri i punës',
    'LBL_NEVER' => 'Asnjëherë',
    'LBL_NEW_FORM_TITLE' => 'Planifikim i ri',
    'LBL_PERENNIAL' => 'I vazhdueshëm',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkim i planifikimeve:',
    'LBL_SCHEDULER' => 'Planifikimi:',
    'LBL_STATUS' => 'Statusi',
    'LBL_TIME_FROM' => 'Aktive nga',
    'LBL_TIME_TO' => 'Aktive deri',
    'LBL_WARN_CURL_TITLE' => 'cURL paralajmërim:',
    'LBL_WARN_CURL' => 'Paralajmërim:',
    'LBL_WARN_NO_CURL' => 'Ky sistem nuk ka bibliotekat cURL të mundësuara/përpiluara në modulin e PHP.<br />(--withcurl=/path/to/curl_library). Ju lutemi të kontaktoni administratorin tuaj për të zgjidhur këtë çështje. Pa funksionalitetin e cURL, orari nuk mund të fute punët e saja.',
    'LBL_BASIC_OPTIONS' => 'Themelimi bazë',
    'LBL_ADV_OPTIONS' => 'Opcionet e avancuara',
    'LBL_TOGGLE_ADV' => 'Trego opcionet e avancuara',
    'LBL_TOGGLE_BASIC' => 'Trego opcionet bazike',
// Links
    'LNK_LIST_SCHEDULER' => 'Planifikuesit',
    'LNK_NEW_SCHEDULER' => 'Krijo planifikues',
// Messages
    'ERR_CRON_SYNTAX' => 'Sintaksë e planifikuar jo valide',
    'NTC_LIST_ORDER' => 'Përcakto porosinë që ky planifikim do të shfaq në listën e poshtme të planifikimeve',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Për të themeluar planifikues të Windowsit',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Për të themeluar etiketim planifikues',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
    'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_WINDOWS_DESC' => 'Vërejtje: Në mënyrë për të drejtuar orarin SuiteCRM, krijoni serinë e dosjes për të drejtuar përdorimin e detyrave të planifikuara të Windows. Seria e dosjes duhet të përfshijë komandat vijuese:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Job Log',
    'LBL_EXECUTE_TIME' => 'koha e ekzekutimit',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Drejtimi i natës së Emailave masive të Kampanjës',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Drejtimi i procesit të natës refuzon Emailat e Kampanjës',
    'LBL_PRUNEDATABASE' => 'Baza e të dhënave të trapave në muajin e 1',
    'LBL_TRIMTRACKER' => 'Tabela të trapave të gjurmuesve',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRM Feed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Removal of documents from filesystem',

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
