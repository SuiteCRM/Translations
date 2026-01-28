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
    'LBL_OOTB_WORKFLOW' => 'ක්රියාවලිය කාර්ය ප්රවාහ කර්තව්යයෝ',
    'LBL_OOTB_REPORTS' => 'දත්ත වාර්තාවක් උත්පාදනය නියමිත කාර්යයන්',
    'LBL_OOTB_IE' => 'රට තුළට පැමිණෙන සංචාරකයින්ට තුළද පරීක්ෂා කරන්න',
    'LBL_OOTB_BOUNCE' => 'ධාවනය රාත්රි ක්රියාවලිය ව්යාපාරය විද්යුත් තැපැල් පණිවුඩ පොළා පැන',
    'LBL_OOTB_CAMPAIGN' => 'ධාවනය රාත්රි ජනමාධ්ය විද්යුත් ප්රචාරණ ව්යාපාර',
    'LBL_OOTB_PRUNE' => 'මාසික 1 වන දින කප්පාදු දත්ත සමුදාය',
    'LBL_OOTB_TRACKER' => 'කප්පාදු ට්රැකර් මේස ගැන',
    'LBL_OOTB_SUITEFEEDS' => 'කප්පාදු SuiteCRM කැවීම් මේස ගැන',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'විද්යුත් මතක් නිවේදන ධාවනය',
    'LBL_OOTB_CLEANUP_QUEUE' => 'පිරිසිදු රැකියා පෝලිමේ',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'ගොනු පද්ධතිය ලේඛන ඉවත් කිරීම',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'පරතරය:',
    'LBL_LIST_LIST_ORDER' => 'සැලසුම් කරණයන් සඳහා:',
    'LBL_LIST_NAME' => 'කාර්ය සටහන්:',
    'LBL_LIST_RANGE' => 'රංගේ:',
    'LBL_LIST_STATUS' => 'තත්වය:',
    'LBL_LIST_TITLE' => 'උපෙල්ඛනෙය් ලැයිස්තුව:',
// human readable:
    'LBL_SUN' => 'ඉරිදා',
    'LBL_MON' => 'සඳුදා',
    'LBL_TUE' => 'අගහරුවදා',
    'LBL_WED' => 'බදාදා',
    'LBL_THU' => 'බ්රහස්පතින්දා',
    'LBL_FRI' => 'සිකුරාදා',
    'LBL_SAT' => 'සෙනසුරාදා',
    'LBL_ALL' => 'සෑම දිනම',
    'LBL_EVERY' => 'සෑම',
    'LBL_FROM' => 'වෙතින්',
    'LBL_ON_THE' => 'මත',
    'LBL_RANGE' => 'දක්වා',
    'LBL_AND' => 'සහ',
    'LBL_MINUTES' => 'මිනිත්තු',
    'LBL_HOUR' => 'පැය',
    'LBL_HOUR_SING' => 'පැය',
    'LBL_OFTEN' => 'බොහෝ විට හැකිතාක්.',
    'LBL_MIN_MARK' => 'විනාඩි ලකුණ',


// crontabs
    'LBL_MINS' => 'විනාඩි',
    'LBL_HOURS' => 'පැය',
    'LBL_DAY_OF_MONTH' => 'දින',
    'LBL_MONTHS' => 'mo',
    'LBL_DAY_OF_WEEK' => 'දවස',
    'LBL_CRONTAB_EXAMPLES' => 'ඉහත සම්මත පද්ධතියේ crontab අංකනය භාවිතා කරයි.',
// Labels
    'LBL_ALWAYS' => 'නිතරම',
    'LBL_CATCH_UP' => 'මිස්ඩ් නම් ක්රියාත්මක කරන්න',
    'LBL_CATCH_UP_WARNING' => 'මෙම රැකියා ක්රියාත්මක කිරීමට මොහොතක් වඩා ලබා ගැනීමට හැකි නම් නොතේරූ නිසාවෙන්.',
    'LBL_DATE_TIME_END' => 'දිනය සහ වේලාව අවසානය',
    'LBL_DATE_TIME_START' => 'දිනය සහ වේලාව අරඹන්න',
    'LBL_INTERVAL' => 'පරතරය',
    'LBL_JOB' => 'රැකියා',
    'LBL_JOB_URL' => 'රැකියා URL එක',
    'LBL_LAST_RUN' => 'පසුගිය සාර්ථක ධාවනය',
    'LBL_MODULE_NAME' => 'SuiteCRM නියමාකාරකය',
    'LBL_MODULE_TITLE' => 'සැලසුම් කරණයන් සඳහා',
    'LBL_NAME' => 'රැකියා නම',
    'LBL_NEVER' => 'කිසිදා',
    'LBL_NEW_FORM_TITLE' => 'නව වැඩසටහන',
    'LBL_PERENNIAL' => 'සදාතනික',
    'LBL_SEARCH_FORM_TITLE' => 'කාර්ය සටහන් සොයන්න',
    'LBL_SCHEDULER' => 'කාර්ය සටහන්:',
    'LBL_STATUS' => 'තත්වය',
    'LBL_TIME_FROM' => 'සිට සක්රීය',
    'LBL_TIME_TO' => 'කිරීම සඳහා ක්රියාකාරී',
    'LBL_WARN_CURL_TITLE' => 'සමහර දත්ත සම්පිණ්ඩක අවවාදයයි:',
    'LBL_WARN_CURL' => 'අවවාදයයි:',
    'LBL_WARN_NO_CURL' => 'මෙම පද්ධතිය එම PHP මොඩියුලය (--with-curl = / path / to / curl_library) බවට සකස් / සක්රීය පයේ පුස්තකාල නැහැ. මෙම ගැටළුව විසඳීම සඳහා ඔබගේ පරිපාලක අමතන්න. පයේ ක්රියාකාරිත්වය තොරව, නියමාකාරකය එහි රැකියා නූල් නොහැක.',
    'LBL_BASIC_OPTIONS' => 'මූලික සැකසුම',
    'LBL_ADV_OPTIONS' => 'ඉහල විකල්ප',
    'LBL_TOGGLE_ADV' => 'පෙන්වන්න උසස් විකල්ප',
    'LBL_TOGGLE_BASIC' => 'මූලික විකල්ප පෙන්වන්න',
// Links
    'LNK_LIST_SCHEDULER' => 'සැලසුම් කරණයන් සඳහා',
    'LNK_NEW_SCHEDULER' => 'නියමාකාරකය සාදන්න',
// Messages
    'ERR_CRON_SYNTAX' => 'වලංගු නොවන ක්රොන් කාරක රීති',
    'NTC_LIST_ORDER' => 'මෙම නියෝගය සකසන්න මෙම කාලසටහන මේ නියමාකාරකය මෙනුව තෝරන්න ලැයිස්තු දිස් වනු ඇත',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'සැකසුම වින්ඩෝස් නියමාකාරකය කිරීම',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'සැකසුම crontab කිරීම',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
    'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_WINDOWS_DESC' => 'මෙම SuiteCRM සැලසුම් කරණයන් ක්රියාත්මක කිරීම සඳහා, වින්ඩෝස් නියමිත කාර්යයන් භාවිතා කරමින් ධාවනය කිරීම සඳහා කණ්ඩායම ගොනු නිර්මාණය සටහන:. මෙම කණ්ඩායම ගොනු පහත සඳහන් විධානයන් ඇතුළත් විය යුතුය:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'රැකියා ලොග්',
    'LBL_EXECUTE_TIME' => 'වේලාව ක්රියාත්මක',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'ධාවනය රාත්රි ජනමාධ්ය විද්යුත් ප්රචාරණ ව්යාපාර',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'ධාවනය රාත්රි ක්රියාවලිය ව්යාපාරය විද්යුත් තැපැල් පණිවුඩ පොළා පැන',
    'LBL_PRUNEDATABASE' => 'මාසික 1 වන දින කප්පාදු දත්ත සමුදාය',
    'LBL_TRIMTRACKER' => 'කප්පාදු ට්රැකර් මේස ගැන',
    'LBL_TRIMSUGARFEEDS' => 'කප්පාදු SuiteCRM කැවීම් මේස ගැන',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'ගොනු පද්ධතිය ලේඛන ඉවත් කිරීම',

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
