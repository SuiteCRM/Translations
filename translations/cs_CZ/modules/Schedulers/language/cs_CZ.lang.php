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
    'LBL_OOTB_WORKFLOW' => 'Zpracovat úkoly Workflow',
    'LBL_OOTB_REPORTS' => 'Spustit generování reportů naplánovaných úkolů',
    'LBL_OOTB_IE' => 'Kontrola poštovních schránek pro příchozí poštu',
    'LBL_OOTB_BOUNCE' => 'Spouštět noční zpracování nedoručených e-mailů z kampaní',
    'LBL_OOTB_CAMPAIGN' => 'Spouštět noční hromadné rozesílání e-mailových kampaní',
    'LBL_OOTB_PRUNE' => 'Provést údržbu databáze každého prvního v měsíci',
    'LBL_OOTB_TRACKER' => 'Pročistit tabulky Sledování',
    'LBL_OOTB_SUITEFEEDS' => 'Vyčistit SuiteCRM feed tabulky',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Spustit upozornění připomenutí e-mailem',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Vyprázdnit frontu úlohy',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Odebrání dokumentů ze souborového systému',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Synchronizace Google kalendáře',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_OOTB_CLEAN_UP_TEMP_FILES' => 'Clean Up Temporary Files',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Plánovače:',
    'LBL_LIST_NAME' => 'Plánovač:',
    'LBL_LIST_RANGE' => 'Rozpětí:',
    'LBL_LIST_STATUS' => 'Stav:',
    'LBL_LIST_TITLE' => 'Seznam plánovače:',
// human readable:
    'LBL_SUN' => 'Neděle',
    'LBL_MON' => 'Pondělí',
    'LBL_TUE' => 'Úterý',
    'LBL_WED' => 'Středa',
    'LBL_THU' => 'Čtvrtek',
    'LBL_FRI' => 'Pátek',
    'LBL_SAT' => 'Sobota',
    'LBL_ALL' => 'Každý den',
    'LBL_EVERY' => 'Každý',
    'LBL_FROM' => 'Odesílatel',
    'LBL_ON_THE' => 'Na',
    'LBL_RANGE' => 'k',
    'LBL_AND' => 'a',
    'LBL_MINUTES' => 'minuty',
    'LBL_HOUR' => 'hodiny',
    'LBL_HOUR_SING' => 'hodina',
    'LBL_OFTEN' => 'Tak často jak je možné.',
    'LBL_MIN_MARK' => 'značka minuty',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'hod',
    'LBL_DAY_OF_MONTH' => 'datum',
    'LBL_MONTHS' => 'měs',
    'LBL_DAY_OF_WEEK' => 'den',
    'LBL_CRONTAB_EXAMPLES' => 'To co je nahoře používá standartní crontab zápis',
// Labels
    'LBL_ALWAYS' => 'Vždy',
    'LBL_CATCH_UP' => 'Spustit, pokud mine',
    'LBL_CATCH_UP_WARNING' => 'Odškrtněte, pokud tato úloha může běžet déle než chvilku.',
    'LBL_DATE_TIME_END' => 'Datum a čas konce',
    'LBL_DATE_TIME_START' => 'Datum a čas začátku',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Úloha',
    'LBL_JOB_URL' => 'URL úlohy',
    'LBL_LAST_RUN' => 'Poslední úspěšný běh',
    'LBL_MODULE_NAME' => 'SuiteCRM Plánovač',
    'LBL_MODULE_TITLE' => 'Plánovače',
    'LBL_NAME' => 'Scheduler Name',
    'LBL_NEVER' => 'Nikdy',
    'LBL_NEW_FORM_TITLE' => 'Nový plán',
    'LBL_PERENNIAL' => 'trvalý',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání plánovače',
    'LBL_SCHEDULER' => 'Plánovač:',
    'LBL_STATUS' => 'Stav',
    'LBL_TIME_FROM' => 'Aktivní od',
    'LBL_TIME_TO' => 'Aktivní do',
    'LBL_WARN_CURL_TITLE' => 'cURL varování:',
    'LBL_WARN_CURL' => 'Varování:',
    'LBL_WARN_NO_CURL' => 'Tento systém nemá cURL knihovny povolené/zkompilované v modulu PHP (--with-curl=/path/to/curl_library). Prosím kontaktujte svého administrátora k vyřešení. Bez funkce cURL plánovač nemůže fungovat.',
    'LBL_BASIC_OPTIONS' => 'Základní nastavení',
    'LBL_ADV_OPTIONS' => 'Rozšířené volby',
    'LBL_TOGGLE_ADV' => 'Rozšířené volby',
    'LBL_TOGGLE_BASIC' => 'Základní volby',
// Links
    'LNK_LIST_SCHEDULER' => 'Plánovače',
    'LNK_NEW_SCHEDULER' => 'Vytvořit plánovač',
// Cron
    'ERR_CRON_SYNTAX' => 'Špatná Cron syntax',
    'LBL_CRON_SETUP' => 'Setup Schedulers',
    'NTC_LIST_ORDER' => 'Nastavit pořadí tohoto plánovače jak se bude zobrazovat v seznamu rozbalovací nabídky Plánovače',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Nastavit plánovač Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Nastavení Crontabu',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers',
    'LBL_CRON_LINUX_DESC2' => '1. Edit your web server user\'s crontab file with this command',
    'LBL_CRON_LINUX_DESC3' => '2. Then update and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC4' => 'Měli byste to udělat pouze po dokončení instalace.',
    'LBL_CRON_LINUX_DESC5' => '2(i). To define the environment variables, add the following line:',
    'LBL_CRON_LINUX_DESC6' => 'Please update [path/to/php] and [path/to/suite/instance] to reflect your environment.',
    'LBL_CRON_WINDOWS_DESC' => 'In order to run the SuiteCRM Schedulers',
    'LBL_CRON_WINDOWS_DESC2' => '1. Create a batch file to run using Windows Scheduled Tasks. The batch file should include the following commands:',
    'LBL_CRON_WINDOWS_DESC3' => 'Please update [path\to\php.exe] and [path\to\suite\instance] to reflect your environment.',
    'LBL_SCHEDULERS_INFO' => 'Scheduler Information',
    'LBL_SCHEDULERS_NEVER_RUN' => 'Schedulers have never been run.',
    // Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Protokol úlohy',
    'LBL_EXECUTE_TIME' => 'Čas spuštění',

//jobstrings
    'LBL_REFRESHJOBS' => 'Aktualizovat úlohy',
    'LBL_POLLMONITOREDINBOXES' => 'Kontrola příchozích emailových účtů',
    'LBL_PERFORMFULLFTSINDEX' => 'Systém Full-textového indexu vyhledávání',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Spouštět noční hromadné rozesílání e-mailových kampaní',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Spouštět noční zpracování nedoručených e-mailů z kampaní',
    'LBL_PRUNEDATABASE' => 'Provést údržbu databáze každého prvního v měsíci',
    'LBL_TRIMTRACKER' => 'Pročistit tabulky Sledování',
    'LBL_TRIMSUGARFEEDS' => 'Vyčistit SuiteCRM feed tabulky',
    'LBL_SENDEMAILREMINDERS' => 'Spustit odeslání připomenutí e-mailem',
    'LBL_CLEANJOBQUEUE' => 'Vyprázdnit frontu úlohy',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Odebrání dokumentů ze souborového systému',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP načíst sledované schránky',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Spustit naplánované reporty',
    'LBL_PROCESSAOW_WORKFLOW' => 'Zpracovat AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexátor',
    'LBL_SENDFROMQUEUE' => 'Send Emails from Email Queue',
    'LBL_CLEANUPTEMPORARYFILES' => 'Clean Up Temporary Files',
    'LBL_EMAILTOQUEUE' => 'Send Scheduled Emails to Email Queue',

    'LBL_SCHEDULER_TIMES' => 'Plánovač času',
    'LBL_SYNCGOOGLECALENDAR' => 'Synchronizovat Google kalendáře',
);

global $sugar_config;
