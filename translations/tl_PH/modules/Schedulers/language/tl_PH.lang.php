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
    'LBL_OOTB_WORKFLOW' => 'Proseso ng Workflow ng mga Gawain',
    'LBL_OOTB_REPORTS' => 'Patakbuhin ang Report Generation Scheduled Tasks',
    'LBL_OOTB_IE' => 'Suriin ang papasok na mga mailbox',
    'LBL_OOTB_BOUNCE' => 'Patakbuhin ang pang gabing proseso ng pinatalbog na mga email ng kampanya',
    'LBL_OOTB_CAMPAIGN' => 'Patakbuhin ang pang gabing pangkat ng mga kampanya ng email',
    'LBL_OOTB_PRUNE' => 'Putulin ang database sa unang araw ng buwan',
    'LBL_OOTB_TRACKER' => 'Prune Tracker Tables',
    'LBL_OOTB_SUITEFEEDS' => 'Putulin ang mga feed table ng SuiteCRM',
    'LBL_OOTB_LUCENE_INDEX' => 'Isagawa ang Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Gawing mabuti ang AOD na Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Patakbuhin ang mga talastas ng tagapagpaalala ng email',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Linisin ang mga trabahong Queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Pagtanggal ng mga dokumento mula sa filesystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Agwat:',
    'LBL_LIST_LIST_ORDER' => 'Mga tagapag-iskedyul:',
    'LBL_LIST_NAME' => 'Tagapag-iskedyul:',
    'LBL_LIST_RANGE' => 'Pagitan:',
    'LBL_LIST_STATUS' => 'Ang Kalagayan:',
    'LBL_LIST_TITLE' => 'Listahan ng Iskedyul:',
// human readable:
    'LBL_SUN' => 'Linggo',
    'LBL_MON' => 'Lunes',
    'LBL_TUE' => 'Martes',
    'LBL_WED' => 'Miyerkules',
    'LBL_THU' => 'Huwebes',
    'LBL_FRI' => 'Biyernes',
    'LBL_SAT' => 'Sabado',
    'LBL_ALL' => 'Sa bawat araw',
    'LBL_EVERY' => 'Bawat',
    'LBL_FROM' => 'Mula sa',
    'LBL_ON_THE' => 'Sa ',
    'LBL_RANGE' => 'sa',
    'LBL_AND' => ' at ',
    'LBL_MINUTES' => ' mga minuto ',
    'LBL_HOUR' => ' mga oras',
    'LBL_HOUR_SING' => 'oras',
    'LBL_OFTEN' => ' Nang madalas hangga\'t maaari.',
    'LBL_MIN_MARK' => ' marka ng minuto',


// crontabs
    'LBL_MINS' => 'minuto',
    'LBL_HOURS' => 'oras',
    'LBL_DAY_OF_MONTH' => 'petsa',
    'LBL_MONTHS' => 'mo',
    'LBL_DAY_OF_WEEK' => 'araw',
    'LBL_CRONTAB_EXAMPLES' => 'Ang ibabaw ay gumagamit ng standard na crontab notation.',
// Labels
    'LBL_ALWAYS' => 'Palagi',
    'LBL_CATCH_UP' => 'Gawin kapag pumalya',
    'LBL_CATCH_UP_WARNING' => 'Alisin ang tsek kung ang trabahong ito ay maaaring tumagal ng higit sa isang sandali para tumakbo.',
    'LBL_DATE_TIME_END' => 'Petsa & Oras na natapos',
    'LBL_DATE_TIME_START' => 'Petsa & Oras na nagsimula',
    'LBL_INTERVAL' => 'Agwat',
    'LBL_JOB' => 'Trabaho',
    'LBL_JOB_URL' => 'URL ng trabaho',
    'LBL_LAST_RUN' => 'Huling matagumpay na pagtakbo',
    'LBL_MODULE_NAME' => 'Tagapag-iskedyul ng SuiteCRM',
    'LBL_MODULE_TITLE' => 'Ang mga tagapag iskedyul',
    'LBL_NAME' => 'Pangalang ng trabaho',
    'LBL_NEVER' => 'Hindi kailanman',
    'LBL_NEW_FORM_TITLE' => 'Bagong iskedyul',
    'LBL_PERENNIAL' => 'pirmihan',
    'LBL_SEARCH_FORM_TITLE' => 'Hanapan ng tagapag-iskedyul',
    'LBL_SCHEDULER' => 'Tagapag-iskedyul:',
    'LBL_STATUS' => 'Kalagayan',
    'LBL_TIME_FROM' => 'Aktibo mula sa',
    'LBL_TIME_TO' => 'Aktibo sa',
    'LBL_WARN_CURL_TITLE' => 'babala ng cURL:',
    'LBL_WARN_CURL' => 'Babala:',
    'LBL_WARN_NO_CURL' => 'Ang sistemang ito ay walang cURL na mga librerya na gumana/na-compile sa PHP na modyul (--kasama-curl=/daan/patungo/curl_librerya). Pakikontak ang iyong administrador para lutasin ang isyung ito. Kapag walang paggana ng cURL, ang tagapag-iskedyul ay hindi makatuhog sa kanyang trabaho.',
    'LBL_BASIC_OPTIONS' => 'Pangunahing Setup',
    'LBL_ADV_OPTIONS' => 'Advanced na mga pagpipilian',
    'LBL_TOGGLE_ADV' => 'Ipakita ang mga pinahusay na pagpipilian',
    'LBL_TOGGLE_BASIC' => 'Ipakita ang pangunahing mga pagpipilian',
// Links
    'LNK_LIST_SCHEDULER' => 'Ang mga tagapag iskedyul',
    'LNK_NEW_SCHEDULER' => 'Lumikha ng tagapag-iskedyul',
// Messages
    'ERR_CRON_SYNTAX' => 'Di wastong Cron syntax',
    'NTC_LIST_ORDER' => 'I-set ang pagkasunod-sunod para lilitaw ang iskedyul na ito sa mga listahan ng dropdown na tagapag-iskedyul',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para i-setup ang tagapag-iskedyula ng mga windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para i-setup ang crontab',
    'LBL_CRON_LINUX_DESC1' => 'Para gumana ang mga tagapag-iskedyula ng SuiteCRM, i-edit ang web server user\'s crontab na file gamit ang command na ito: ',
    'LBL_CRON_LINUX_DESC2' => '... at idagdag ang sumusunod na linya sa crontab na file: ',
    'LBL_CRON_LINUX_DESC3' => 'Gawin mo lang ito pagkatapos mapagtibayan ang instalasyon.',
    'LBL_CRON_WINDOWS_DESC' => 'Para mapatakbo ang mga tagapag-iskedyula ng SuiteCRM, gumawa ng batch file gamit ang Windows Scheduled Tasks para tumakbo ito. Isali dapat ng batch file ang sumusunod na mga command: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Log ng Trabaho',
    'LBL_EXECUTE_TIME' => 'Magsagawa ng oras',

//jobstrings
    'LBL_REFRESHJOBS' => 'Papreskuhan ang mga trabaho',
    'LBL_POLLMONITOREDINBOXES' => 'Suriin ang mga dumarating na account ng mail',
    'LBL_PERFORMFULLFTSINDEX' => 'Buong teksto ng paghahanap ng sistema ng palatuntunan',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Patakbuhin ang pang gabing pangkat ng mga kampanya ng email',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Patakbuhin ang pang gabing proseso ng pinatalbog na mga email ng kampanya',
    'LBL_PRUNEDATABASE' => 'Putulin ang database sa unang araw ng buwan',
    'LBL_TRIMTRACKER' => 'Prune Tracker Tables',
    'LBL_TRIMSUGARFEEDS' => 'Putulin ang mga feed table ng SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Patakbuhin ang mga paalala ng email na ipinapadala',
    'LBL_CLEANJOBQUEUE' => 'Linisin ang pila ng nga trabaho',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Pagtanggal ng mga dokumento mula sa filesystem',

    'LBL_AODOPTIMISEINDEX' => 'I-optimise ang paunang bukas na pagtuklas ng taluntunan',
    'LBL_AODINDEXUNINDEXED' => 'Isatalunton ang mga unindexed na dokumento',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP ng sinusubaybayan na mga inbox ng pagboto',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Patakbuhin ang mga naka-iskedyul na mga report',
    'LBL_PROCESSAOW_WORKFLOW' => 'I-proseso ang AOW na Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Mga oras ng scheduler',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
