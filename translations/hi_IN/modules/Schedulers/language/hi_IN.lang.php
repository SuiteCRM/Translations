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
    'LBL_OOTB_WORKFLOW' => 'प्रक्रिया वर्कफ़्लो कार्य',
    'LBL_OOTB_REPORTS' => 'रिपोर्ट जनरेशन शेड्यूल किए गए कार्य चलाएं',
    'LBL_OOTB_IE' => 'इनबाउंड मेलबॉक्स की जाँच करें',
    'LBL_OOTB_BOUNCE' => 'रात्रिकालीन प्रक्रिया के तहत बाउंस हुए अभियान ईमेल चलाएँ',
    'LBL_OOTB_CAMPAIGN' => 'रात्रिकालीन सामूहिक ईमेल अभियान चलाएं',
    'LBL_OOTB_PRUNE' => 'महीने की पहली तारीख को डेटाबेस की छंटाई करें',
    'LBL_OOTB_TRACKER' => 'प्रून ट्रैकर टेबल्स',
    'LBL_OOTB_SUITEFEEDS' => 'प्रून सूइटसीआरएम फ़ीड टेबल',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'ईमेल अनुस्मारक सूचनाएँ चलाएँ',
    'LBL_OOTB_CLEANUP_QUEUE' => 'नौकरियों की कतार साफ करें',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'फ़ाइल सिस्टम से दस्तावेज़ों को हटाना',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'गूगल कैलेंडर सिंक',
    'LBL_OOTB_ELASTIC_INDEX' => 'इलास्टिकसर्च इंडेक्स निष्पादित करें',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'अंतराल:',
    'LBL_LIST_LIST_ORDER' => 'समयबद्दक:',
    'LBL_LIST_NAME' => 'अनुसूचक:',
    'LBL_LIST_RANGE' => 'सीमा:',
    'LBL_LIST_STATUS' => 'स्थिति:',
    'LBL_LIST_TITLE' => 'अनुसूची सूची:',
// human readable:
    'LBL_SUN' => 'रविवार',
    'LBL_MON' => 'सोमवार',
    'LBL_TUE' => 'मंगलवार',
    'LBL_WED' => 'बुधवार',
    'LBL_THU' => 'गुरुवार',
    'LBL_FRI' => 'शुक्रवार',
    'LBL_SAT' => 'शनिवार',
    'LBL_ALL' => 'प्रतिदिन',
    'LBL_EVERY' => 'प्रत्येक',
    'LBL_FROM' => 'से',
    'LBL_ON_THE' => 'पर',
    'LBL_RANGE' => 'को',
    'LBL_AND' => 'और',
    'LBL_MINUTES' => 'मिनट',
    'LBL_HOUR' => 'घंटा',
    'LBL_HOUR_SING' => 'घंटा',
    'LBL_OFTEN' => 'जितनी बार संभव हो।',
    'LBL_MIN_MARK' => 'मिनट चिह्न',


// crontabs
    'LBL_MINS' => 'मिनट',
    'LBL_HOURS' => 'घंटे',
    'LBL_DAY_OF_MONTH' => 'तारीख',
    'LBL_MONTHS' => 'माह',
    'LBL_DAY_OF_WEEK' => 'दिन',
    'LBL_CRONTAB_EXAMPLES' => 'उपरोक्त में मानक क्रोनटैब संकेतन का उपयोग किया गया है।',
// Labels
    'LBL_ALWAYS' => 'हमेशा',
    'LBL_CATCH_UP' => 'यदि छूट गया हो तो निष्पादित करें',
    'LBL_CATCH_UP_WARNING' => 'यदि इस कार्य को चलने में एक क्षण से अधिक समय लग सकता है तो चेक बॉक्स को अनचेक करें।',
    'LBL_DATE_TIME_END' => 'दिनांक और समय समाप्ति',
    'LBL_DATE_TIME_START' => 'दिनांक और समय प्रारंभ',
    'LBL_INTERVAL' => 'अंतराल',
    'LBL_JOB' => 'काम',
    'LBL_JOB_URL' => 'नौकरी यूआरएल',
    'LBL_LAST_RUN' => 'अंतिम सफल रन',
    'LBL_MODULE_NAME' => 'सूइटसीआरएम शेड्यूलर',
    'LBL_MODULE_TITLE' => 'समयबद्दक ',
    'LBL_NAME' => 'नौकरी का नाम',
    'LBL_NEVER' => 'कभी नहीं',
    'LBL_NEW_FORM_TITLE' => 'नया शेड्यूल',
    'LBL_PERENNIAL' => 'लगातार',
    'LBL_SEARCH_FORM_TITLE' => 'शेड्यूलर खोज',
    'LBL_SCHEDULER' => 'अनुसूचक:',
    'LBL_STATUS' => 'स्थिति',
    'LBL_TIME_FROM' => 'सक्रिय से',
    'LBL_TIME_TO' => 'सक्रिय',
    'LBL_WARN_CURL_TITLE' => 'cURL चेतावनी:',
    'LBL_WARN_CURL' => 'चेतावनी:',
    'LBL_WARN_NO_CURL' => 'इस सिस्टम में PHP मॉड्यूल (--with-curl=/path/to/curl_library) में cURL लाइब्रेरी सक्षम/संकलित नहीं है। कृपया इस समस्या को हल करने के लिए अपने व्यवस्थापक से संपर्क करें। cURL कार्यक्षमता के बिना, शेड्यूलर अपने कार्यों को थ्रेड नहीं कर सकता।',
    'LBL_BASIC_OPTIONS' => 'बुनियादी सेटअप',
    'LBL_ADV_OPTIONS' => 'उन्नत विकल्प',
    'LBL_TOGGLE_ADV' => 'उन्नत विकल्प दिखाएं',
    'LBL_TOGGLE_BASIC' => 'मूल विकल्प दिखाएँ',
// Links
    'LNK_LIST_SCHEDULER' => 'समयबद्दक ',
    'LNK_NEW_SCHEDULER' => 'शेड्यूलर बनाएं',
// Messages
    'ERR_CRON_SYNTAX' => 'अमान्य क्रॉन सिंटैक्स',
    'NTC_LIST_ORDER' => 'शेड्यूलर ड्रॉपडाउन सूची में इस शेड्यूल के प्रदर्शित होने का क्रम सेट करें',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'विंडोज शेड्यूलर सेटअप करने के लिए',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'क्रोनटैब सेटअप करने के लिए',
    'LBL_CRON_LINUX_DESC1' => 'सूइटसीआरएम शेड्यूलर चलाने के लिए, अपने वेब सर्वर उपयोगकर्ता की crontab फ़ाइल को इस कमांड से संपादित करें:',
    'LBL_CRON_LINUX_DESC2' => '... और crontab फ़ाइल में निम्न पंक्ति जोड़ें:',
    'LBL_CRON_LINUX_DESC3' => 'इंस्टॉलेशन समाप्त होने के बाद ही आपको ऐसा करना चाहिए।',
    'LBL_CRON_WINDOWS_DESC' => 'सूइटसीआरएम शेड्यूलर चलाने के लिए, Windows शेड्यूल्ड टास्क का उपयोग करके चलाने के लिए एक बैच फ़ाइल बनाएँ। बैच फ़ाइल में निम्नलिखित कमांड शामिल होने चाहिए:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'जॉब लॉग',
    'LBL_EXECUTE_TIME' => 'निष्पादन समय',

//jobstrings
    'LBL_REFRESHJOBS' => 'नौकरियां ताज़ा करें',
    'LBL_POLLMONITOREDINBOXES' => 'इनबाउंड मेल खातों की जाँच करें',
    'LBL_PERFORMFULLFTSINDEX' => 'पूर्ण-पाठ खोज अनुक्रमणिका प्रणाली',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'रात्रिकालीन सामूहिक ईमेल अभियान चलाएं',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'रात्रिकालीन प्रक्रिया के तहत बाउंस हुए अभियान ईमेल चलाएँ',
    'LBL_PRUNEDATABASE' => 'महीने की पहली तारीख को डेटाबेस की छंटाई करें',
    'LBL_TRIMTRACKER' => 'प्रून ट्रैकर टेबल्स',
    'LBL_TRIMSUGARFEEDS' => 'प्रून सूइटसीआरएम फ़ीड टेबल',
    'LBL_SENDEMAILREMINDERS' => 'ईमेल अनुस्मारक भेजना चलाएँ',
    'LBL_CLEANJOBQUEUE' => 'क्लीनअप जॉब कतार',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'फ़ाइल सिस्टम से दस्तावेज़ों को हटाना',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'एओपी पोल मॉनिटर किए गए इनबॉक्स',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'शेड्यूल की गई रिपोर्ट चलाएं',
    'LBL_PROCESSAOW_WORKFLOW' => 'प्रक्रिया AOW वर्कफ़्लो',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'इलास्टिकसर्च इंडेक्सर',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'शेड्यूलर समय',
    'LBL_SYNCGOOGLECALENDAR' => 'Google कैलेंडर सिंक करें',
);

global $sugar_config;
