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
    'LBL_OOTB_WORKFLOW' => 'Ang proseso ng daloy ng trabaho sa mga gawain',
    'LBL_OOTB_REPORTS' => 'Magpatakbo ng Report Generation naka-iskedyul na mga gawain',
    'LBL_OOTB_IE' => 'Suriin ang mhga inbound mailbox',
    'LBL_OOTB_BOUNCE' => 'Patakbuhin gabi-gabi ang mga proseso ng Bounced Kampanya emaim',
    'LBL_OOTB_CAMPAIGN' => 'Patakbuhin ang gabi-gabi ang mga mass email na kampanya',
    'LBL_OOTB_PRUNE' => 'I-prune ang database sa unang taon ng buwan',
    'LBL_OOTB_TRACKER' => 'I-prune ang tagapasunod ng talahanayan',
    'LBL_OOTB_SUITEFEEDS' => 'I-prune ang SuiteCEM fee ng mga talahanayan',
    'LBL_OOTB_LUCENE_INDEX' => 'Magsagawa ng lucene index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'I-optimize ang AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Patakbuhin ang email ng mga paalalaang notification',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Linisin ang mga trabaho ng queue',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Pag-alis ng mga dokumento mula sa filesystem',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Agwat:',
    'LBL_LIST_LIST_ORDER' => 'Ang mga taga-iskedyul:',
    'LBL_LIST_NAME' => 'Taga-iskedyul:',
    'LBL_LIST_RANGE' => 'Saklaw:',
    'LBL_LIST_STATUS' => 'Katayuan:',
    'LBL_LIST_TITLE' => 'Listahan ng iskedyul:',
// human readable:
    'LBL_SUN' => 'Linggo',
    'LBL_MON' => 'Lunes',
    'LBL_TUE' => 'Martes',
    'LBL_WED' => 'Miyerkules',
    'LBL_THU' => 'Huwebes',
    'LBL_FRI' => 'Biyernes',
    'LBL_SAT' => 'Sabado',
    'LBL_ALL' => 'Bawat araw',
    'LBL_EVERY' => 'Bawat',
    'LBL_FROM' => 'Galing sa',
    'LBL_ON_THE' => 'Sa ',
    'LBL_RANGE' => 'sa',
    'LBL_AND' => ' at ',
    'LBL_MINUTES' => ' minuto ',
    'LBL_HOUR' => ' oras',
    'LBL_HOUR_SING' => 'oras',
    'LBL_OFTEN' => ' Hangga\'t maari.',
    'LBL_MIN_MARK' => ' minutong marka',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'mga oras',
    'LBL_DAY_OF_MONTH' => 'petsa',
    'LBL_MONTHS' => 'mo',
    'LBL_DAY_OF_WEEK' => 'araw',
    'LBL_CRONTAB_EXAMPLES' => 'Ang ibabaw ay ginagamit sa pamantayang crontab notasyon.',
// Labels
    'LBL_ALWAYS' => 'Palagi',
    'LBL_CATCH_UP' => 'Ipatupad kung naiwan',
    'LBL_CATCH_UP_WARNING' => 'Alisin ang tsek kung itong trabaho ay kung kumuha na higit pa sa isang sandali upang patakbuhin.',
    'LBL_DATE_TIME_END' => 'Petsa at oras na matapos',
    'LBL_DATE_TIME_START' => 'Petsa at oras na magsimula',
    'LBL_INTERVAL' => 'Agwat',
    'LBL_JOB' => 'Trabaho',
    'LBL_JOB_URL' => 'URL ng trabaho',
    'LBL_LAST_RUN' => 'Huling matagumpay napatakbo',
    'LBL_MODULE_NAME' => 'Ang taga-iskedyul ng SuiteCRM',
    'LBL_MODULE_TITLE' => 'Mga Iskedyul',
    'LBL_NAME' => 'Pangalan ng trabaho',
    'LBL_NEVER' => 'Hindi kailanman',
    'LBL_NEW_FORM_TITLE' => 'Bagong iskedyul',
    'LBL_PERENNIAL' => 'perpetual',
    'LBL_SEARCH_FORM_TITLE' => 'Ang paghahanap ng taga-iskedyul',
    'LBL_SCHEDULER' => 'Taga-iskedyul:',
    'LBL_STATUS' => 'Katayuan',
    'LBL_TIME_FROM' => 'Aktibo mula sa',
    'LBL_TIME_TO' => 'Aktibo sa',
    'LBL_WARN_CURL_TITLE' => 'cURL na babala:',
    'LBL_WARN_CURL' => 'Babala:',
    'LBL_WARN_NO_CURL' => 'Ang sistemang ito ay walang cURL library na pinagana/naipon sa PHP modyul (--with-curl=/path/to/curl_library). Mangyaring kontakin ang iyong tagapangasiwa upang resolbahin ang isyung ito. Na walang cURL na pag-andar, ang taga-iskedyul ay hindi mai-thread ang trabahong ito.',
    'LBL_BASIC_OPTIONS' => 'Pangunahing setup',
    'LBL_ADV_OPTIONS' => 'Naka-advance ng mga opsyon',
    'LBL_TOGGLE_ADV' => 'Ipakita ang pag-advance ng mga opsyon',
    'LBL_TOGGLE_BASIC' => 'Magpakita ng mga pangunahing opsyon',
// Links
    'LNK_LIST_SCHEDULER' => 'Mga Iskedyul',
    'LNK_NEW_SCHEDULER' => 'Lumikha ng iskedyul',
// Messages
    'ERR_CRON_SYNTAX' => 'Hindi tama ang Cron syntax',
    'NTC_LIST_ORDER' => 'Magtakda ng order sa iskedyul na ito ay lilitaw sa mga listahan ng Scheduler dropdown',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Upang mag-setup ng mga window scheduler',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Upang mag-setup ng Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Upang mapatakbo ang nga SuiteCRM Scheduler, i-edit ang iyong web server crontab file sa command na ito: ',
    'LBL_CRON_LINUX_DESC2' => '... at magdagdag ng sumusunod na linua sa crontab file: ',
    'LBL_CRON_LINUX_DESC3' => 'Dapat mong gawin ito lamang pagkatapos ng pag-install ay natapos na.',
    'LBL_CRON_WINDOWS_DESC' => 'Upang mapagana ang mga SuiteCRM scheduler, lumikha ng isang batch file na patakbihin gamit ang mga Windows Scheduled na gawain. Ang isang batch ay dapat napasama sa mga sumusunod na mga command: ',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Log ng trabaho',
    'LBL_EXECUTE_TIME' => 'Panahon ng katuparan',

//jobstrings
    'LBL_REFRESHJOBS' => 'I-refresh ang mga trabaho',
    'LBL_POLLMONITOREDINBOXES' => 'Suriin ang mga Inbound Mail Account',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text na paghahanap ng sistemang index',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Patakbuhin ang gabi-gabi ang mga mass email na kampanya',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Patakbuhin gabi-gabi ang mga proseso ng Bounced Kampanya emaim',
    'LBL_PRUNEDATABASE' => 'I-prune ang database sa unang taon ng buwan',
    'LBL_TRIMTRACKER' => 'I-prune ang tagapasunod ng talahanayan',
    'LBL_TRIMSUGARFEEDS' => 'I-prune ang SuiteCEM fee ng mga talahanayan',
    'LBL_SENDEMAILREMINDERS' => 'Patakbuhin ang email na paalala ng nagpapadala',
    'LBL_CLEANJOBQUEUE' => 'Maglinis ng trabaho sa Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Pag-alis ng mga dokumento mula sa filesystem',

    'LBL_AODOPTIMISEINDEX' => 'I-optimize at naka-advance ang index ng OpenDiscovery',
    'LBL_AODINDEXUNINDEXED' => 'Ang index na mga dokumentong unindex',
    'LBL_POLLMONITOREDINBOXESAOP' => 'Ang AOP ng mga Poll inbox n sinusubaybayan',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Patakbuhin ang naka iskedyul ng mga iskedyul',
    'LBL_PROCESSAOW_WORKFLOW' => 'Proseso ng AOW workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Taga-iskedyul ng mga oras',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
