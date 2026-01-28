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
    'LBL_OOTB_WORKFLOW' => 'Voer workflow taken uit',
    'LBL_OOTB_REPORTS' => 'Draai Report Generation Scheduled Tasks',
    'LBL_OOTB_IE' => 'Contreer inkomende e-mailboxen',
    'LBL_OOTB_BOUNCE' => 'Draai \'s nachts opgestuurde teruggekomen campagne e-mails',
    'LBL_OOTB_CAMPAIGN' => 'Verstuur \'s nachts campagnes e-mails',
    'LBL_OOTB_PRUNE' => 'Schoon database elke 1e van de maand op',
    'LBL_OOTB_TRACKER' => 'Schoon gebruikers geschiedenis tabel elke 1e van de maand op',
    'LBL_OOTB_SUITEFEEDS' => 'Schoon SuiteCRM Feed Tables op',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Draai e-mail herinnering notificaties',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Schoon taken rij op',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Verwijderen van documenten van het bestandssysteem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Agenda Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Elasticsearch index uitvoeren',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Taakplanners:',
    'LBL_LIST_NAME' => 'Taakplanner:',
    'LBL_LIST_RANGE' => 'Bereik:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Taaklijst:',
// human readable:
    'LBL_SUN' => 'Zondag',
    'LBL_MON' => 'Maandag',
    'LBL_TUE' => 'Dinsdag',
    'LBL_WED' => 'Woensdag',
    'LBL_THU' => 'Donderdag',
    'LBL_FRI' => 'Vrijdag',
    'LBL_SAT' => 'Zaterdag',
    'LBL_ALL' => 'Elke dag',
    'LBL_EVERY' => 'Allen',
    'LBL_FROM' => 'Van',
    'LBL_ON_THE' => 'op ',
    'LBL_RANGE' => 'naar',
    'LBL_AND' => 'en ',
    'LBL_MINUTES' => 'minuten',
    'LBL_HOUR' => ' uren',
    'LBL_HOUR_SING' => 'uur',
    'LBL_OFTEN' => ' Zo vaak mogelijk',
    'LBL_MIN_MARK' => ' minuutaanwijzing',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'uur',
    'LBL_DAY_OF_MONTH' => 'datum',
    'LBL_MONTHS' => 'ma',
    'LBL_DAY_OF_WEEK' => 'dag',
    'LBL_CRONTAB_EXAMPLES' => 'Bovenstaand kan de standaard CRONTAB notatie gebruikt worden.',
// Labels
    'LBL_ALWAYS' => 'Altijd',
    'LBL_CATCH_UP' => 'Uitvoeren wanneer gemist',
    'LBL_CATCH_UP_WARNING' => 'Uitvinken als deze taak vrij lang gaat duren',
    'LBL_DATE_TIME_END' => 'Einddatum en tijd',
    'LBL_DATE_TIME_START' => 'Startdatum en tijd',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Taak',
    'LBL_JOB_URL' => 'Taak Url',
    'LBL_LAST_RUN' => 'Laatste succesvolle run',
    'LBL_MODULE_NAME' => 'SuiteCRM taakplanner',
    'LBL_MODULE_TITLE' => 'Taakplanners',
    'LBL_NAME' => 'Taaknaam',
    'LBL_NEVER' => 'Nooit',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe taak',
    'LBL_PERENNIAL' => 'oneindig',
    'LBL_SEARCH_FORM_TITLE' => 'Taak zoeken',
    'LBL_SCHEDULER' => 'Taakplanner:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Actief van',
    'LBL_TIME_TO' => 'Actief tot',
    'LBL_WARN_CURL_TITLE' => 'cURL waarschuwing:',
    'LBL_WARN_CURL' => 'Waarschuwing:',
    'LBL_WARN_NO_CURL' => 'Dit systeem heeft geen cURL libraries geactiveerd/gecompileerd in de PHP module (--with-curl=/path/to/curl_library). Neem contact op met je systeembeheerder om dit probleem op te lossen. Zonder cURL functionaliteit werkt de Taakplanner in SuiteCRM niet.',
    'LBL_BASIC_OPTIONS' => 'Standaard setup',
    'LBL_ADV_OPTIONS' => 'Geavanceeerde opties',
    'LBL_TOGGLE_ADV' => 'Geavanceeerde opties',
    'LBL_TOGGLE_BASIC' => 'Standaard opties',
// Links
    'LNK_LIST_SCHEDULER' => 'Taakplanners',
    'LNK_NEW_SCHEDULER' => 'Nieuwe taak',
// Messages
    'ERR_CRON_SYNTAX' => 'Ongeldige CRON syntax',
    'NTC_LIST_ORDER' => 'Zet de volgorde van de taken in de takenlijst',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Configureer windows taakplanner',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Configureer crontab',
    'LBL_CRON_LINUX_DESC1' => 'Om SuiteCRM Schedulers te kunnen uitvoeren, bewerk het crontab bestand van uw webserver met deze opdracht:',
    'LBL_CRON_LINUX_DESC2' => '--- voeg de volgende regel toe aan het crontab bestand: ',
    'LBL_CRON_LINUX_DESC3' => 'U moet dit alleen doen als de installatie is afgesloten.',
    'LBL_CRON_WINDOWS_DESC' => 'Opmerking: Om SuiteCRM planners uit te voeren, maak een batch-file aan (en zet deze in Windows Takenplanner) met de volgende commando\'s: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Taaklog',
    'LBL_EXECUTE_TIME' => 'Uitvoertijd',

//jobstrings
    'LBL_REFRESHJOBS' => 'Vernieuw taken',
    'LBL_POLLMONITOREDINBOXES' => 'Inkomende E-mail Accounts controleren',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search indexsysteem',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Verstuur \'s nachts campagnes e-mails',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Draai \'s nachts opgestuurde teruggekomen campagne e-mails',
    'LBL_PRUNEDATABASE' => 'Schoon database elke 1e van de maand op',
    'LBL_TRIMTRACKER' => 'Schoon gebruikers geschiedenis tabel elke 1e van de maand op',
    'LBL_TRIMSUGARFEEDS' => 'Schoon SuiteCRM Feed Tables op',
    'LBL_SENDEMAILREMINDERS' => 'Start E-mail herrinering verzending',
    'LBL_CLEANJOBQUEUE' => 'Opschonen taakwachtrij',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Verwijderen van documenten van het bestandssysteem',

    'LBL_AODOPTIMISEINDEX' => 'Optimaliseer Advanced OpenDiscovery index',
    'LBL_AODINDEXUNINDEXED' => 'Indexeer niet geindexeerde documenten',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll gecontroleerde Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Geplande rapporten uitvoeren',
    'LBL_PROCESSAOW_WORKFLOW' => 'AOW workflow uitvoeren',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Planner tijden',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Agenda',
);

global $sugar_config;
