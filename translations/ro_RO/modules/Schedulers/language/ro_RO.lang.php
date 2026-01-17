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
    'LBL_OOTB_WORKFLOW' => 'Sarcini de flux de lucru al procesului',
    'LBL_OOTB_REPORTS' => 'Execută sarcinile programate pentru generarea raportului',
    'LBL_OOTB_IE' => 'Verifică email-urile de intrare',
    'LBL_OOTB_BOUNCE' => 'Rulați procesul nocturn pentru e-mailurile de campanie respinse',
    'LBL_OOTB_CAMPAIGN' => 'Rulați campanii de e-mail în masă în fiecare noapte',
    'LBL_OOTB_PRUNE' => 'Baza de date Prune la data de 1 a lunii',
    'LBL_OOTB_TRACKER' => 'Tabele de urmărire Prune',
    'LBL_OOTB_SUITEFEEDS' => 'Tabele de date SuiteCRM în Prune',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Rulează notificările prin e-mail',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Clean Jobs Queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Eliminarea documentelor din sistemul de fișiere',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Sincronizare cu Calendarul Google',
    'LBL_OOTB_ELASTIC_INDEX' => 'Efectuează indexare Elasticsearch',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Interval:',
    'LBL_LIST_LIST_ORDER' => 'Programări:',
    'LBL_LIST_NAME' => 'Planificator:',
    'LBL_LIST_RANGE' => 'Interval:',
    'LBL_LIST_STATUS' => 'Status:',
    'LBL_LIST_TITLE' => 'Lista de programări:',
// human readable:
    'LBL_SUN' => 'Duminică',
    'LBL_MON' => 'Luni',
    'LBL_TUE' => 'Marți',
    'LBL_WED' => 'Miercuri',
    'LBL_THU' => 'Joi',
    'LBL_FRI' => 'Vineri',
    'LBL_SAT' => 'Sâmbătă',
    'LBL_ALL' => 'In fiecare zi',
    'LBL_EVERY' => 'La fiecare',
    'LBL_FROM' => 'Expeditor',
    'LBL_ON_THE' => 'Pe',
    'LBL_RANGE' => 'până la',
    'LBL_AND' => 'și',
    'LBL_MINUTES' => 'minute',
    'LBL_HOUR' => 'ore',
    'LBL_HOUR_SING' => 'oră',
    'LBL_OFTEN' => 'Cât se poate de des.',
    'LBL_MIN_MARK' => 'marcaj minut',


// crontabs
    'LBL_MINS' => 'minute',
    'LBL_HOURS' => 'ore',
    'LBL_DAY_OF_MONTH' => 'data',
    'LBL_MONTHS' => 'luni',
    'LBL_DAY_OF_WEEK' => 'zi',
    'LBL_CRONTAB_EXAMPLES' => 'Mai sus s-a folosit notația standard crontab.',
// Labels
    'LBL_ALWAYS' => 'Întotdeauna',
    'LBL_CATCH_UP' => 'Execută dacă este lipsește',
    'LBL_CATCH_UP_WARNING' => 'Debifați dacă această activitate poate dura mai mult de un moment.',
    'LBL_DATE_TIME_END' => 'Data și ora expirării',
    'LBL_DATE_TIME_START' => 'Data și ora începerii',
    'LBL_INTERVAL' => 'Interval',
    'LBL_JOB' => 'Activitate',
    'LBL_JOB_URL' => 'Activitate URL',
    'LBL_LAST_RUN' => 'Ultima rulare reușită',
    'LBL_MODULE_NAME' => 'Planificator SuiteCRM',
    'LBL_MODULE_TITLE' => 'Programatore',
    'LBL_NAME' => 'Nume activitate',
    'LBL_NEVER' => 'Niciodată',
    'LBL_NEW_FORM_TITLE' => 'Programare nouă',
    'LBL_PERENNIAL' => 'perpetuu',
    'LBL_SEARCH_FORM_TITLE' => 'Căutare în planificator',
    'LBL_SCHEDULER' => 'Planificator:',
    'LBL_STATUS' => 'Status',
    'LBL_TIME_FROM' => 'Activ de la',
    'LBL_TIME_TO' => 'Activ până la',
    'LBL_WARN_CURL_TITLE' => 'Avertisment cURL-uri:',
    'LBL_WARN_CURL' => 'Avertizare:',
    'LBL_WARN_NO_CURL' => 'Acest sistem nu are librăriile cURL activate/compilate în modulul PHP (--with-curl=/path/to/curl_library). Vă rugăm să contactați administratorul pentru a rezolva această problemă. Fără funcționalitatea cURL, Planificatorul nu poate amâna sarcinile.',
    'LBL_BASIC_OPTIONS' => 'Configurare de bază',
    'LBL_ADV_OPTIONS' => 'Opțiuni avansate',
    'LBL_TOGGLE_ADV' => 'Arata opțiunile avansate',
    'LBL_TOGGLE_BASIC' => 'Arată opțiunile de bază',
// Links
    'LNK_LIST_SCHEDULER' => 'Programatore',
    'LNK_NEW_SCHEDULER' => 'Creează programator activități',
// Messages
    'ERR_CRON_SYNTAX' => 'Sintaxa Cron invalida',
    'NTC_LIST_ORDER' => 'Setați ordinea în care acest program va apărea în listele abandonate',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Pentru a configura planificatorul de activități Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Pentru a seta Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Pentru a rula planificatorul SugarCRM, editați fișierul crontab al utilizatorului web server cu aceasta comanda:',
    'LBL_CRON_LINUX_DESC2' => '... și adaugă următoarea linie la fișierul crontab:',
    'LBL_CRON_LINUX_DESC3' => 'Ar trebui să faceți acest lucru numai după ce s-a încheiat instalarea.',
    'LBL_CRON_WINDOWS_DESC' => 'Pentru a rula programatorul din SuiteCRM, creează un fișier batch pentru a fi rulat folosind Windows Scheduled Tasks. Fișierul batch ar trebui să includă următoarele comenzi:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Jurnal de activități',
    'LBL_EXECUTE_TIME' => 'Timp de execuție',

//jobstrings
    'LBL_REFRESHJOBS' => 'Reîmprospătare activități',
    'LBL_POLLMONITOREDINBOXES' => 'Controlează conturile de e-mail de intrare',
    'LBL_PERFORMFULLFTSINDEX' => 'Sistem index de căutare text complet',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Rulați campanii de e-mail în masă în fiecare noapte',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Rulați procesul nocturn pentru e-mailurile de campanie respinse',
    'LBL_PRUNEDATABASE' => 'Baza de date Prune la data de 1 a lunii',
    'LBL_TRIMTRACKER' => 'Tabele de urmărire Prune',
    'LBL_TRIMSUGARFEEDS' => 'Tabele de date SuiteCRM în Prune',
    'LBL_SENDEMAILREMINDERS' => 'Rulăm trimiterea de e-mailuri de reamintire',
    'LBL_CLEANJOBQUEUE' => 'Curățare coadă de activități',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Eliminarea documentelor din sistemul de fișiere',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Sondaj de email monitorizate',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Rulează rapoartele programate',
    'LBL_PROCESSAOW_WORKFLOW' => 'Procesează fluxuri de lucru AOW',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Indexare Elasticsearch',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Orar de planificare',
    'LBL_SYNCGOOGLECALENDAR' => 'Sincronizare Google Calendare',
);

global $sugar_config;
