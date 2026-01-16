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
    'LBL_OOTB_WORKFLOW' => 'Procesné Úlohy pracovného toku',
    'LBL_OOTB_REPORTS' => 'Spustite vytváranie správ Naplánovaných úloh',
    'LBL_OOTB_IE' => 'Skontrolujte Prichádzajúce poštové schránky',
    'LBL_OOTB_BOUNCE' => 'Spustiť Nightly proces Bounced kampane e-mailov',
    'LBL_OOTB_CAMPAIGN' => 'Spustiť nočne hromadné emailové kampane',
    'LBL_OOTB_PRUNE' => 'Prerezávať databázy na 1. mesiaca',
    'LBL_OOTB_TRACKER' => 'Prerezávať Tracker tabuľky',
    'LBL_OOTB_SUITEFEEDS' => 'Prerezávať SuiteCRMFeed tabuľky',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Spustiť emailovú upomienku Upozornenie',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Poradie čistej práce',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Odstránenie dokumentov z súborového systému',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Synchronizácia kalendára Google',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Automatické plánovače:',
    'LBL_LIST_NAME' => 'Plánovač',
    'LBL_LIST_RANGE' => 'rozsah:',
    'LBL_LIST_STATUS' => 'Stav:',
    'LBL_LIST_TITLE' => 'Zoznam plánovača',
// human readable:
    'LBL_SUN' => 'Nedeľa',
    'LBL_MON' => 'Pondelok',
    'LBL_TUE' => 'Utorok',
    'LBL_WED' => 'Streda',
    'LBL_THU' => 'Štvrtok',
    'LBL_FRI' => 'Piatok',
    'LBL_SAT' => 'Sobota',
    'LBL_ALL' => 'Každý deň',
    'LBL_EVERY' => 'každý',
    'LBL_FROM' => 'Od',
    'LBL_ON_THE' => 'na',
    'LBL_RANGE' => 'do',
    'LBL_AND' => 'a',
    'LBL_MINUTES' => 'Minúty',
    'LBL_HOUR' => 'hodiny',
    'LBL_HOUR_SING' => 'hodina',
    'LBL_OFTEN' => 'Tak často, ako je to možné.',
    'LBL_MIN_MARK' => 'minúte',


// crontabs
    'LBL_MINS' => 'minúta',
    'LBL_HOURS' => 'Hodiny',
    'LBL_DAY_OF_MONTH' => 'dátum',
    'LBL_MONTHS' => 'Mesiace',
    'LBL_DAY_OF_WEEK' => 'deň',
    'LBL_CRONTAB_EXAMPLES' => 'Vyššie používa štandardný zápis crontab.',
// Labels
    'LBL_ALWAYS' => 'Vždy',
    'LBL_CATCH_UP' => 'Prevedenie Ak chýba',
    'LBL_CATCH_UP_WARNING' => 'Zrušte začiarknutie, ak táto práca môže trvať dlhšie ako okamih spustiť.',
    'LBL_DATE_TIME_END' => 'Dátum & čas koniec',
    'LBL_DATE_TIME_START' => 'Dátum & čas začiatok',
    'LBL_INTERVAL' => 'interval',
    'LBL_JOB' => 'práca',
    'LBL_JOB_URL' => 'URL práca',
    'LBL_LAST_RUN' => 'Posledné Úspešné Riešenie',
    'LBL_MODULE_NAME' => 'SuiteCRM plány',
    'LBL_MODULE_TITLE' => 'Automatické plánovače',
    'LBL_NAME' => 'Názov práce',
    'LBL_NEVER' => 'Nikdy',
    'LBL_NEW_FORM_TITLE' => 'nový plán',
    'LBL_PERENNIAL' => 'trvalý',
    'LBL_SEARCH_FORM_TITLE' => 'Hľadaj plán',
    'LBL_SCHEDULER' => 'Plánovač',
    'LBL_STATUS' => 'Stav',
    'LBL_TIME_FROM' => 'aktívne Z',
    'LBL_TIME_TO' => 'Ak chcete aktívny',
    'LBL_WARN_CURL_TITLE' => 'cURL Upozornenie:',
    'LBL_WARN_CURL' => 'Výstraha',
    'LBL_WARN_NO_CURL' => 'tento systém nemá Curl knižnice povolený / skompilovaný do modulu PHP (- with-curl = / cesta / k / curl_library). Prosím, obráťte sa na správcu, aby tento problém vyriešiť. Bez CURL funkcie, môže Plánovač nie je navliecť svojej práci.',
    'LBL_BASIC_OPTIONS' => 'zakladné nastavenie',
    'LBL_ADV_OPTIONS' => 'Rozšírené možnosti',
    'LBL_TOGGLE_ADV' => 'zobraziť rozšírene možnosti',
    'LBL_TOGGLE_BASIC' => 'zobrazit základné možnosti',
// Links
    'LNK_LIST_SCHEDULER' => 'Automatické plánovače',
    'LNK_NEW_SCHEDULER' => 'vytvoriť plány',
// Messages
    'ERR_CRON_SYNTAX' => 'Neplatný syntaxe Cron',
    'NTC_LIST_ORDER' => 'Nastavte poradie, v ktorom sa táto verzia objaví vo výberových poliach.',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Ak chcete Nastavenie systému Windows Plánovač',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Ak chcete Nastavenie crontab',
    'LBL_CRON_LINUX_DESC1' => 'Ak chcete spustiť plánovač SuiteCRM, upravte súbor crontab vášho webového servera pomocou tohto príkazu: ',
    'LBL_CRON_LINUX_DESC2' => '... a pridajte nasledujúci riadok do súboru crontab: ',
    'LBL_CRON_LINUX_DESC3' => 'Toto môžete vykonať iba po dokončení inštalácIe.',
    'LBL_CRON_WINDOWS_DESC' => 'Poznámka: Aby bolo možné spustiť plánovača, vytvorte dávkový súbor spustiť pomocou systému Windows Naplánované úlohy. Dávkový súbor by mal obsahovať nasledujúce príkazy:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Protokol úloh',
    'LBL_EXECUTE_TIME' => 'Čas spustenia',

//jobstrings
    'LBL_REFRESHJOBS' => 'Aktualizovať úlohy',
    'LBL_POLLMONITOREDINBOXES' => 'Skontrolovať účty prichádzajúcej pošty',
    'LBL_PERFORMFULLFTSINDEX' => 'Systém indexového úplného textového vyhľadávania',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Spustiť nočne hromadné emailové kampane',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Spustiť Nightly proces Bounced kampane e-mailov',
    'LBL_PRUNEDATABASE' => 'Prerezávať databázy na 1. mesiaca',
    'LBL_TRIMTRACKER' => 'Prerezávať Tracker tabuľky',
    'LBL_TRIMSUGARFEEDS' => 'Prerezávať SuiteCRMFeed tabuľky',
    'LBL_SENDEMAILREMINDERS' => 'Spustiť odosielanie pripomienok emailom',
    'LBL_CLEANJOBQUEUE' => 'Vyprázdnenie frontu úloh',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Odstránenie dokumentov z súborového systému',

    'LBL_POLLMONITOREDINBOXESAOP' => 'Emaily monitorované pomocou AOP',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Spustiť plánované správy',
    'LBL_PROCESSAOW_WORKFLOW' => 'Spracovať AOW',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Indexátor pružného vyhľadávania',

    'LBL_SCHEDULER_TIMES' => 'Plánovač času',
    'LBL_SYNCGOOGLECALENDAR' => 'Synchronizácia kalendárov Google',
);

global $sugar_config;
