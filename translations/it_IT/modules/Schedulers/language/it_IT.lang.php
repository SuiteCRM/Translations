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
    'LBL_OOTB_WORKFLOW' => 'Esegui i compiti del flusso di lavoro',
    'LBL_OOTB_REPORTS' => 'Esegui il report dei compiti schedulati',
    'LBL_OOTB_IE' => 'Controlla la posta in entrata',
    'LBL_OOTB_BOUNCE' => 'Invia durante la notte le email rimbalzate della campagna',
    'LBL_OOTB_CAMPAIGN' => 'Invia di notte le campagne email massive',
    'LBL_OOTB_PRUNE' => 'Riduci il Database il primo giorno del mese',
    'LBL_OOTB_TRACKER' => 'Riduci le tabelle del tracker',
    'LBL_OOTB_SUITEFEEDS' => 'Riduci le tabelle SuiteCRMFeed',
    'LBL_OOTB_LUCENE_INDEX' => 'Eseguire Indicizzazione Lucene',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Ottimizzare indice AOD',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Esegui notifiche Email di promemoria',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Svuota Coda Jobs',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Rimozione documenti dal filesystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Esegui indicizzazione Elasticsearch',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Intervallo:',
    'LBL_LIST_LIST_ORDER' => 'Schedulatori:',
    'LBL_LIST_NAME' => 'Schedulatore:',
    'LBL_LIST_RANGE' => 'Intervallo:',
    'LBL_LIST_STATUS' => 'Stato:',
    'LBL_LIST_TITLE' => 'Elenco Schedulazioni:',
// human readable:
    'LBL_SUN' => 'Domenica',
    'LBL_MON' => 'Lunedì',
    'LBL_TUE' => 'Martedì',
    'LBL_WED' => 'Mercoledì',
    'LBL_THU' => 'Giovedì',
    'LBL_FRI' => 'Venerdì',
    'LBL_SAT' => 'Sabato',
    'LBL_ALL' => 'Ogni Giorno',
    'LBL_EVERY' => 'Ogni',
    'LBL_FROM' => 'Da',
    'LBL_ON_THE' => 'Al',
    'LBL_RANGE' => 'a',
    'LBL_AND' => 'e',
    'LBL_MINUTES' => 'minuti',
    'LBL_HOUR' => 'ore',
    'LBL_HOUR_SING' => 'ora',
    'LBL_OFTEN' => 'Il più spesso possibile.',
    'LBL_MIN_MARK' => 'minuto scelto',


// crontabs
    'LBL_MINS' => 'minuti',
    'LBL_HOURS' => 'ore',
    'LBL_DAY_OF_MONTH' => 'data',
    'LBL_MONTHS' => 'mese',
    'LBL_DAY_OF_WEEK' => 'giorno',
    'LBL_CRONTAB_EXAMPLES' => 'Questo utilizza soprattutto la notazione standard crontab.',
// Labels
    'LBL_ALWAYS' => 'Sempre',
    'LBL_CATCH_UP' => 'Esegui Se Mancato',
    'LBL_CATCH_UP_WARNING' => 'Togli la selezione se questa operazione può richiedere molto tempo per l´esecuzione.',
    'LBL_DATE_TIME_END' => 'Data e Ora di Fine',
    'LBL_DATE_TIME_START' => 'Data e Ora di Inizio',
    'LBL_INTERVAL' => 'Intervallo',
    'LBL_JOB' => 'Operazione',
    'LBL_JOB_URL' => 'URL Job',
    'LBL_LAST_RUN' => 'Ultima Esecuzione senza errori',
    'LBL_MODULE_NAME' => 'Schedulatore SuiteCRM',
    'LBL_MODULE_TITLE' => 'Pianificazioni',
    'LBL_NAME' => 'Nome Operazione',
    'LBL_NEVER' => 'Mai',
    'LBL_NEW_FORM_TITLE' => 'Nuova Schedulazione',
    'LBL_PERENNIAL' => 'perpetua',
    'LBL_SEARCH_FORM_TITLE' => 'Cerca Schedulazione',
    'LBL_SCHEDULER' => 'Schedulatore:',
    'LBL_STATUS' => 'Stato',
    'LBL_TIME_FROM' => 'Attivo Da',
    'LBL_TIME_TO' => 'Attivo A',
    'LBL_WARN_CURL_TITLE' => 'Avviso cURL:',
    'LBL_WARN_CURL' => 'Avviso:',
    'LBL_WARN_NO_CURL' => 'Il PHP di questo sistema non ha le librerie cURL (--with-curl=/path/to/curl_library). Contatta l´amministratore del server per risolvere questo problema. Senza queste librerie non è possibile eseguire le operazioni schedulate.',
    'LBL_BASIC_OPTIONS' => 'Configurazione Base',
    'LBL_ADV_OPTIONS' => 'Opzioni Avanzate',
    'LBL_TOGGLE_ADV' => 'Mostra le Opzioni Avanzate',
    'LBL_TOGGLE_BASIC' => 'Mostra Opzioni Base',
// Links
    'LNK_LIST_SCHEDULER' => 'Pianificazioni',
    'LNK_NEW_SCHEDULER' => 'Nuova Schedulazione',
// Messages
    'ERR_CRON_SYNTAX' => 'Syntax Cron non valida',
    'NTC_LIST_ORDER' => 'Imposta l´ordine con cui appariranno queste schedulazioni nell´elenco dei schedulatori.',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Per impostare il schedulatore di Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Per impostare il Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Al fine di eseguire le utilità di pianificazione di SuiteCRM, modificare il file crontab dell\'utente web server con questo comando:',
    'LBL_CRON_LINUX_DESC2' => '... e aggiungere la seguente riga al file crontab:',
    'LBL_CRON_LINUX_DESC3' => 'Si dovrebbe fare questo solo dopo che l\'installazione è conclusa.',
    'LBL_CRON_WINDOWS_DESC' => 'Nota: Per eseguire gli schedulatori di SuiteCRM, creare un file batch usando le operazioni schedulate di Windows. Il file batch dovrebbe includere i seguenti comandi:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Registro di lavoro',
    'LBL_EXECUTE_TIME' => 'Tempo di Esecuzione',

//jobstrings
    'LBL_REFRESHJOBS' => 'Aggiorna Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Controlla gli indirizzi email della posta in arrivo',
    'LBL_PERFORMFULLFTSINDEX' => 'Sistema Indice per la Ricerca full-text',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Invia di notte le campagne email massive',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Invia durante la notte le email rimbalzate della campagna',
    'LBL_PRUNEDATABASE' => 'Riduci il Database il primo giorno del mese',
    'LBL_TRIMTRACKER' => 'Riduci le tabelle del tracker',
    'LBL_TRIMSUGARFEEDS' => 'Riduci le tabelle SuiteCRMFeed',
    'LBL_SENDEMAILREMINDERS' => 'Esegui Invio email di Promemoria',
    'LBL_CLEANJOBQUEUE' => 'Pulisci Coda Job',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Rimozione documenti dal filesystem',

    'LBL_AODOPTIMISEINDEX' => 'Ottimizza indicizzazione Advanced OpenDiscovery',
    'LBL_AODINDEXUNINDEXED' => 'Indicizza documenti non indicizzati',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Monitoraggio caselle di posta',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Avvia Report Schedulati',
    'LBL_PROCESSAOW_WORKFLOW' => 'Processa AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Motore di ricerca elastica',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Orari Schedulatore',
    'LBL_SYNCGOOGLECALENDAR' => 'Sincronizzare i calendari di Google',
);

global $sugar_config;
