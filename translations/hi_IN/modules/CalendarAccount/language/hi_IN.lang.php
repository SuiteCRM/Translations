<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = [
    // System fields
    'LBL_ASSIGNED_TO_ID' => 'असाइन किया गया उपयोगकर्ता आईडी',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_DELETED' => 'हटाई गई',

    // Security groups
    'LBL_SECURITYGROUPS' => 'सुरक्षा समूह',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'सुरक्षा समूह',

    // List view labels
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_DELETE' => 'हटाएं',
    'LBL_EDIT_BUTTON' => 'संशोधन करें',
    'LBL_REMOVE' => 'हटाऐं',
    'LBL_ASCENDING' => 'आरोही',
    'LBL_DESCENDING' => 'अवरोही',

    // Email opt-in labels
    'LBL_OPT_IN' => 'में चुनें',
    'LBL_OPT_IN_PENDING_EMAIL_NOT_SENT' => 'पुष्टि ऑप्ट इन लंबित, पुष्टि ऑप्ट इन नहीं भेजा गया',
    'LBL_OPT_IN_PENDING_EMAIL_SENT' => 'पुष्टि ऑप्ट इन लंबित, पुष्टि ऑप्ट इन भेजा गया',
    'LBL_OPT_IN_CONFIRMED' => 'चुना गया',

    // Subpanel titles
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_CALENDARACCOUNT_SUBPANEL_TITLE' => 'कैलेंडर खाते',
    'LBL_MEETINGS_SUBPANEL_TITLE' => 'सिंक्रनाइज़्ड मीटिंग्स',

    // Import links
    'LNK_IMPORT_CALENDARACCOUNT' => 'कैलेंडर खाते आयात करें',

    // Additional menu links
    'LNK_LIST_CREATE_NEW_GROUP' => 'नया समूह बनाएँ',
    'LNK_LIST_CREATE_NEW_PERSONAL' => 'व्यक्तिगत कैलेंडर खाता बनाएँ',
    'LNK_LIST_INBOUND_EMAILS' => 'इनबाउंड ईमेल',
    'LNK_LIST_OUTBOUND_EMAILS' => 'आउटबाउंड ईमेल',
    'LNK_LIST_EXTERNAL_OAUTH_PROVIDERS' => 'बाहरी OAuth प्रदाता',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTIONS' => 'बाहरी OAuth कनेक्शन',

    // Basic module labels
    'LBL_MODULE_NAME' => 'कैलेंडर खाते',
    'LBL_MODULE_TITLE' => 'कैलेंडर खाते',
    'LBL_LIST_FORM_TITLE' => 'कैलेंडर खातों की सूची',
    'LBL_SEARCH_FORM_TITLE' => 'कैलेंडर खातों की खोज करें',
    'LBL_NEW_FORM_TITLE' => 'नया कैलेंडर खाता',
    'LBL_HOMEPAGE_TITLE' => 'मेरे कैलेंडर खाते',

    // Navigation links
    'LNK_NEW_RECORD' => 'कैलेंडर खाता बनाएँ',
    'LNK_LIST' => 'कैलेंडर खाते देखें',

    // Standard fields
    'LBL_NAME' => 'नाम',
    'LBL_ID' => 'आईडी',
    'LBL_TYPE' => 'प्रकार',
    'LBL_SOURCE' => 'कैलेंडर स्रोत',

    // OAuth2 Fields
    'LBL_OAUTH_CONNECTION' => 'OAuth कनेक्शन',
    'LBL_CONNECT_OAUTH' => 'OAuth से कनेक्ट करें',

    // Basic Auth Fields
    'LBL_USERNAME' => 'उपयोगकर्ता नाम',
    'LBL_PASSWORD' => 'पासवर्ड',
    'LBL_SERVER_URL' => 'सर्वर यूआरएल',
    'LBL_TEST_CONNECTION' => 'कनेक्शन का परीक्षण करें',

    // API Key Fields
    'LBL_API_KEY' => 'API कुंजी',
    'LBL_API_ENDPOINT' => 'एपीआई एंडपॉइंट',
    'LBL_VALIDATE_API' => 'एपीआई को मान्य करें',

    // Calendar User Fields
    'LBL_CALENDAR_USER_ID' => 'कैलेंडर उपयोगकर्ता आईडी',
    'LBL_CALENDAR_USER_NAME' => 'कैलेंडर उपयोगकर्ता',
    'LBL_CALENDAR_USER' => 'कैलेंडर उपयोगकर्ता',

    // Auth Actions
    'LBL_AUTH_ACTIONS' => 'प्रमाणीकरण क्रियाएँ',

    // Panel Labels
    'LBL_SYNC_STATUS' => 'सिंक स्थिति',

    // Connection Status Fields
    'LBL_LAST_CONNECTION_STATUS' => 'परीक्षण सफल रहा',
    'LBL_LAST_CONNECTION_TEST' => 'अंतिम कनेक्शन परीक्षण',
    'LBL_LAST_SYNC_ATTEMPT_DATE' => 'अंतिम सिंक प्रयास',
    'LBL_LAST_SYNC_ATTEMPT_STATUS' => 'सिंक स्थिति',
    'LBL_LAST_SYNC_ATTEMPT_MESSAGE' => 'सिंक संदेश',
    'LBL_LAST_SYNC_DATE' => 'अंतिम सिंक तिथि',
    'LBL_EXTERNAL_CALENDAR_ID' => 'बाह्य कैलेंडर आईडी',
    'LBL_DUPLICATE_EXTERNAL_CALENDAR' => 'यह बाहरी कैलेंडर पहले से ही खाते से जुड़ा हुआ है',

    // Sync Actions
    'LBL_SYNC_NOW' => 'अभी सिंक करें',
    'LBL_SYNC_NOW_TITLE' => 'इस कैलेंडर खाते को अभी सिंक्रनाइज़ करें',
    'LBL_SYNC_NOW_CONFIRM' => 'क्या आप वाकई इस कैलेंडर खाते को अभी सिंक करना चाहते हैं?',
    'LBL_NO_ACCOUNT_ID' => 'कोई कैलेंडर खाता आईडी प्रदान नहीं की गई',
    'LBL_SYNCING' => 'सिंक्रनाइज़ हो रहा है...',
    'LBL_NETWORK_ERROR' => 'कैलेंडर खाते को सिंक करते समय नेटवर्क त्रुटि उत्पन्न हुई। कृपया पुनः प्रयास करें।',
    'LBL_UNKNOWN' => 'अनजान',
    'LBL_NOW' => 'अभी',
    'LBL_SYNC_SUCCESS' => 'कैलेंडर का सिंक्रनाइज़ेशन सफलतापूर्वक पूरा हो गया',
    'LBL_SYNC_FAILED' => 'सिंक्रोनाइज़ेशन विफल',
    'LBL_SYNC_FAILED_DEFAULT' => 'कैलेंडर सिंक्रोनाइज़ेशन विफल रहा। कृपया विवरण के लिए लॉग देखें।',
    'LBL_SYNC_RESPONSE_ERROR' => 'सिंक्रोनाइज़ेशन प्रतिक्रिया को संसाधित करते समय एक त्रुटि उत्पन्न हुई। कृपया विवरण के लिए लॉग देखें।',
    'LBL_SYNC_IN_PROGRESS' => 'सिंक्रोनाइज़ेशन पहले से ही जारी है। कृपया प्रतीक्षा करें...',
    'LBL_SYNC_IN_PROGRESS_MESSAGE' => 'कैलेंडर इवेंट्स को सिंक्रनाइज़ किया जा रहा है। इसमें कुछ समय लग सकता है...',
    'LBL_PLEASE_WAIT' => 'कृपया प्रतीक्षा करें',
    // Permission and validation messages
    'LBL_NO_ACCESS' => 'आपको यह कार्य करने की अनुमति नहीं है।',
    'LBL_ALREADY_HAS_PERSONAL_ACCOUNT' => 'इस उपयोगकर्ता के पास पहले से ही एक व्यक्तिगत कैलेंडर खाता है।',
    'LBL_ADMIN_ONLY_GROUP_ACCOUNT' => 'केवल प्रशासक ही समूह कैलेंडर खाते बना सकते हैं।',

    // Authentication validation messages
    'LBL_OAUTH_CONNECTION_REQUIRED' => 'कृपया पहले एक OAuth कनेक्शन चुनें।',
    'LBL_BASIC_AUTH_FIELDS_REQUIRED' => 'कृपया प्रमाणीकरण से संबंधित सभी बुनियादी फ़ील्ड (उपयोगकर्ता नाम, पासवर्ड, सर्वर यूआरएल) भरें।',
    'LBL_API_KEY_REQUIRED' => 'कृपया एक एपीआई कुंजी दर्ज करें।',
    'LBL_USING_SAVED_API_KEY' => 'पहले से सहेजी गई एपीआई कुंजी का उपयोग करना।',
    'LBL_UNKNOWN_AUTH_METHOD' => 'अज्ञात प्रमाणीकरण विधि',
    'LBL_SELECT_CALENDAR_SOURCE_FIRST' => 'कृपया पहले कैलेंडर स्रोत का चयन करें।',

    // Connection test messages
    'LBL_CALENDAR' => 'कैलेंडर',
    'LBL_SUCCESSFUL' => 'सफल',
    'LBL_FAILED' => 'असफल',
    'LBL_CONNECTION_TEST' => 'कनेक्शन परीक्षण',
    'LBL_YES' => 'हाँ',
    'LBL_NO' => 'नहीं',
    'LBL_FOUND_CALENDARS' => '{count} कैलेंडर मिले।',
    'LBL_CONNECTION_TEST_RESPONSE_ERROR' => 'कनेक्शन परीक्षण प्रतिक्रिया को संसाधित करते समय एक त्रुटि उत्पन्न हुई। कृपया विवरण के लिए लॉग देखें।',
    'LBL_CONNECTION_TEST_HTTP_ERROR' => 'HTTP स्थिति के साथ कनेक्शन परीक्षण विफल रहा',
    'LBL_CONNECTION_NETWORK_ERROR' => 'कैलेंडर कनेक्शन की जांच करते समय नेटवर्क त्रुटि उत्पन्न हुई। कृपया पुनः प्रयास करें।',
    'LBL_CONNECTION_TEST_SUCCESS_MESSAGE' => 'कनेक्शन परीक्षण सफलतापूर्वक पूरा हो गया है।<br>आपके क्रेडेंशियल मान्य हैं और कैलेंडर सुलभ है।',
    'LBL_DUPLICATE_CALENDAR_ERROR' => 'यह कैलेंडर पहले से ही खाते से जुड़ा हुआ है',

    // Authentication method error messages
    'LBL_AUTH_METHOD_ERROR' => 'प्रमाणीकरण विधि निर्धारित करने में त्रुटि',
    'LBL_AUTH_METHOD_PARSE_ERROR' => 'प्रमाणीकरण विधि प्रतिक्रिया को पार्स करने में त्रुटि',
    'LBL_AUTH_METHOD_GET_ERROR' => 'स्रोत के लिए प्रमाणीकरण विधि प्राप्त करने में त्रुटि',

    // Dialog labels
    'LBL_NOTIFICATION' => 'अधिसूचना',
    'LBL_CONFIRM' => 'पुष्टि करें',
    'LBL_ARE_YOU_SURE' => 'क्या आपको यकीन है?',

    // Sync status enum translations
    'LBL_SYNC_STATUS_IN_PROGRESS' => 'प्रगति में',
    'LBL_SYNC_STATUS_SUCCESS' => 'सफलता',
    'LBL_SYNC_STATUS_WARNING' => 'चेतावनी',
    'LBL_SYNC_STATUS_ERROR' => 'गलती',

    // Sync message enum translations
    'LBL_SYNC_MSG_SYNC_COMPLETE' => 'सभी मीटिंग सिंक्रनाइज़ हो गईं।',
    'LBL_SYNC_MSG_UP_TO_DATE' => 'सिंक्रनाइज़ करने के लिए कोई नई मीटिंग नहीं है।',
    'LBL_SYNC_MSG_MEETINGS_FAILED' => 'कुछ मीटिंग सिंक नहीं हो पाईं। लॉग चेक करें।',
    'LBL_SYNC_MSG_SYNC_PARTIAL' => 'कुछ मीटिंग्स सिंक हो गईं। सीमाओं के कारण और भी मीटिंग्स लंबित हैं।',
    'LBL_SYNC_MSG_SYNC_ERROR' => 'सिंक्रोनाइज़ेशन में त्रुटि। लॉग्स देखें।',
    'LBL_SYNC_MSG_TOKEN_EXPIRED' => 'प्रमाणीकरण टोकन की समय सीमा समाप्त हो गई है।',
    'LBL_SYNC_MSG_CONNECTION_ERROR' => 'संपर्क त्रुटि।',
    'LBL_SYNC_MSG_CALENDAR_NOT_FOUND' => 'कैलेंडर नहीं मिला।',

    // Relationship labels
    'LBL_MEETINGS' => 'बैठकें',
];