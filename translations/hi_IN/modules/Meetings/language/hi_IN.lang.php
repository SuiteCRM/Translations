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
    'LBL_ACCEPT_THIS' => 'स्वीकार करना?',
    'LBL_ADD_BUTTON' => 'जोड़ें',
    'LBL_ADD_INVITEE' => 'आमंत्रित व्यक्ति जोड़ें',
    'LBL_CONTACT_NAME' => 'संपर्कः',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_CREATED_BY' => 'के द्वारा बनाया गया',
    'LBL_DATE_END' => 'समाप्ति दिनांक',
    'LBL_DATE_TIME' => 'प्रारंभ दिनांक और समय:',
    'LBL_DATE' => 'प्रारंभ दिनांक:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'बैठकें',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_DIRECTION' => 'दिशा:',
    'LBL_DURATION_HOURS' => 'अवधि घंटे:',
    'LBL_DURATION_MINUTES' => 'अवधि मिनट:',
    'LBL_DURATION' => 'अवधि:',
    'LBL_EMAIL' => 'ईमेल',
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'नोट्स',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(घंटे/मिनट)',
    'LBL_INVITEE' => 'आमंत्रित',
    'LBL_LAST_NAME' => 'परिवार का नाम',
    'LBL_ASSIGNED_TO_NAME' => 'को असाइन किया:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_LIST_CLOSE' => 'बंद करें',
    'LBL_LIST_CONTACT' => 'संपर्क करें',
    'LBL_LIST_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_LIST_DATE' => 'आरंभ करने की तिथि',
    'LBL_LIST_DIRECTION' => 'दिशा',
    'LBL_LIST_DUE_DATE' => 'अन्तिम तिथि',
    'LBL_LIST_FORM_TITLE' => 'मीटिंग सूची',
    'LBL_LIST_MY_MEETINGS' => 'मेरी बैठकें',
    'LBL_LIST_RELATED_TO' => 'संदर्भ के',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LIST_SUBJECT' => 'विषय',
    'LBL_LEADS_SUBPANEL_TITLE' => 'नेतृत्व',
    'LBL_LOCATION' => 'स्थान:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'के द्वारा संशोधित',
    'LBL_MODULE_NAME' => 'बैठकें',
    'LBL_MODULE_TITLE' => 'बैठकें: होम',
    'LBL_NAME' => 'नाम',
    'LBL_NEW_FORM_TITLE' => 'अपॉइंटमेंट बनाएं',
    'LBL_OUTLOOK_ID' => 'आउटलुक आईडी',
    'LBL_SEQUENCE' => 'मीटिंग अद्यतन अनुक्रम',
    'LBL_PHONE' => 'फ़ोन कार्यालय:',
    'LBL_REMINDER_TIME' => 'अनुस्मारक समय',
    'LBL_EMAIL_REMINDER_SENT' => 'ईमेल अनुस्मारक भेजा गया',
    'LBL_REMINDER' => 'रिमाइंडर:',
    'LBL_REMINDER_POPUP' => 'पॉप अप',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'सभी आमंत्रितों को ईमेल करें',
    'LBL_EMAIL_REMINDER' => 'ईमेल अनुस्मारक',
    'LBL_EMAIL_REMINDER_TIME' => 'ईमेल अनुस्मारक समय',
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_SCHEDULING_FORM_TITLE' => 'सिडुलिंग',
    'LBL_SEARCH_BUTTON' => 'खोजें',
    'LBL_SEARCH_FORM_TITLE' => 'मीटिंग खोज',
    'LBL_SEND_BUTTON_LABEL' => 'आमंत्रण सहेजें और भेजें',
    'LBL_SEND_BUTTON_TITLE' => 'आमंत्रण सहेजें और भेजें',
    'LBL_STATUS' => 'स्थिति:',
    'LBL_TYPE' => 'बैठक का प्रकार',
    'LBL_PASSWORD' => 'मीटिंग पासवर्ड',
    'LBL_URL' => 'मीटिंग शुरू करें/शामिल हों',
    'LBL_HOST_URL' => 'होस्ट यूआरएल',
    'LBL_DISPLAYED_URL' => 'प्रदर्शन यूआरएल',
    'LBL_CREATOR' => 'मीटिंग निर्माता',
    'LBL_EXTERNALID' => 'बाहरी ऐप आईडी',
    'LBL_SUBJECT' => 'विषय:',
    'LBL_TIME' => 'प्रारंभ समय:',
    'LBL_USERS_SUBPANEL_TITLE' => 'उपयोगकर्ताओं ',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'मूल प्रकार',
    'LBL_PARENT_ID' => 'माता पिता की पहचान',
    'LNK_MEETING_LIST' => 'बैठकें देखें',
    'LNK_NEW_APPOINTMENT' => 'अपॉइंटमेंट बनाएं',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_IMPORT_MEETINGS' => 'आयात बैठकें',

    'LBL_CREATED_USER' => 'उपयोगकर्ता बनाया गया',
    'LBL_MODIFIED_USER' => 'संशोधित उपयोगकर्ता',
    'NOTICE_DURATION_TIME' => 'अवधि का समय 0 से अधिक होना चाहिए',
    'LBL_MEETING_INFORMATION' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'बैठक में शामिल',
    'LBL_ACCEPT_STATUS' => 'स्थिति स्वीकार करें',
    'LBL_ACCEPT_LINK' => 'लिंक स्वीकार करें',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'आप इस मीटिंग में शामिल नहीं हो सकते क्योंकि आप आमंत्रित व्यक्ति नहीं हैं।',
    'LBL_EXTNOT_RECORD_LINK' => 'मीटिंग देखें',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'आप यह मीटिंग शुरू नहीं कर सकते क्योंकि आप व्यवस्थापक या मीटिंग के स्वामी नहीं हैं।',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'एक आमंत्रित व्यक्ति बनाएँ',
    'LBL_CREATE_CONTACT' => 'संपर्क के रूप में',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'लीड के रूप में',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'बनाएं और जोड़ें',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'रद्द करें',
    'LBL_EMPTY_SEARCH_RESULT' => 'क्षमा करें, कोई परिणाम नहीं खोजे जा सके। कृपया नीचे एक आमंत्रित व्यक्ति बनाएं.',
    'LBL_NO_ACCESS' => 'आपके पास $module बनाने की कोई पहुंच नहीं है',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'दोहराएँ प्रकार',
    'LBL_REPEAT_INTERVAL' => 'दोहराएँ अंतराल',
    'LBL_REPEAT_DOW' => 'डॉव दोहराएँ',
    'LBL_REPEAT_UNTIL' => 'दोहराओ जब तक',
    'LBL_REPEAT_COUNT' => 'दोहराएँ गिनती',
    'LBL_REPEAT_PARENT_ID' => 'अभिभावक आईडी दोहराएँ',
    'LBL_RECURRING_SOURCE' => 'आवर्ती स्रोत',

    'LBL_SYNCED_RECURRING_MSG' => 'यह मीटिंग किसी दूसरे सिस्टम में शुरू हुई थी और सूइटसीआरएम से सिंक की गई थी। बदलाव करने के लिए, दूसरे सिस्टम में मूल मीटिंग पर जाएँ। दूसरे सिस्टम में किए गए बदलावों को इस रिकॉर्ड से सिंक किया जा सकता है।',
    'LBL_RELATED_TO' => 'संदर्भ के:',

    // for reminders
    'LBL_REMINDERS' => 'रिमाइंडर',
    'LBL_REMINDERS_ACTIONS' => 'क्रियाएँ:',
    'LBL_REMINDERS_POPUP' => 'पॉप अप',
    'LBL_REMINDERS_EMAIL' => 'आमंत्रितों को ईमेल करें',
    'LBL_REMINDERS_WHEN' => 'कब:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'रिमाइंडर निकालें',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'सभी आमंत्रितों को जोड़ें',
    'LBL_REMINDERS_ADD_REMINDER' => 'रिमाइंडर जोड़ें',

    // for google sync
    'LBL_GSYNC_ID' => 'गूगल इवेंट आईडी',
    'LBL_GSYNC_LASTSYNC' => 'अंतिम गूगल सिंक टाइमस्टैम्प',
);
