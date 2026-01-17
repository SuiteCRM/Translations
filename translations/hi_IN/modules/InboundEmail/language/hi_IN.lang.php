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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'लॉगिन या पासवर्ड ग़लत है',
    'ERR_INI_ZLIB' => 'Zlib संपीड़न को अस्थायी रूप से बंद नहीं किया जा सका। "परीक्षण सेटिंग" विफल हो सकती है।',
    'ERR_NO_IMAP' => 'कोई IMAP लाइब्रेरी नहीं मिली। कृपया इनबाउंड ईमेल जारी रखने से पहले इसे हल करें',
    'ERR_NO_OPTS_SAVED' => 'आपके इनबाउंड ईमेल खाते में कोई ऑप्टिमम सेव नहीं किया गया। कृपया सेटिंग की समीक्षा करें',
    'ERR_TEST_MAILBOX' => 'कृपया अपनी सेटिंग देखें और पुनः प्रयास करें।',
    'ERR_INVALID_PORT' => 'अमान्य पोर्ट',

    'LBL_ASSIGN_TO_USER' => 'उपयोगकर्ता को असाइन करें',
    'LBL_AUTOREPLY' => 'ऑटो-रिप्लाई टेम्पलेट',
    'LBL_AUTOREPLY_HELP' => 'ईमेल प्रेषकों को यह सूचित करने के लिए कि उनका प्रत्युत्तर प्राप्त हो गया है, एक स्वचालित प्रत्युत्तर चुनें.',
    'LBL_BASIC' => 'मेल खाता जानकारी',
    'LBL_CASE_MACRO' => 'केस मैक्रो',
    'LBL_CASE_MACRO_DESC' => 'मैक्रो सेट करें जिसे पार्स किया जाएगा और आयातित ईमेल को केस से लिंक करने के लिए उपयोग किया जाएगा।',
    'LBL_CASE_MACRO_DESC2' => 'इसे किसी भी मान पर सेट करें, लेकिन <b>"%1"</b> को सुरक्षित रखें।',
    'LBL_CLOSE_POPUP' => 'विंडो बंद करें',
    'LBL_CREATE_TEMPLATE' => 'बनाएँ',
    'LBL_DELETE_SEEN' => 'आयात के बाद पढ़े गए ईमेल हटाएं',
    'LBL_EDIT_TEMPLATE' => 'संशोधन करें',
    'LBL_EMAIL_OPTIONS' => 'ईमेल प्रबंधन विकल्प',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'बाउंस हैंडलिंग विकल्प',
    'LBL_FILTER_DOMAIN_DESC' => 'वह डोमेन निर्दिष्ट करें जिस पर कोई स्वचालित उत्तर नहीं भेजा जाएगा.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'सभी आने वाले ईमेल के लिए SuiteCRM में स्वचालित रूप से ईमेल रिकॉर्ड बनाने के लिए चयन करें।',
    'LBL_FILTER_DOMAIN' => 'इस डोमेन पर कोई स्वचालित उत्तर नहीं',
    'LBL_FIND_SSL_WARN' => '<br>SSL का परीक्षण करने में लंबा समय लग सकता है। कृपया धैर्य रखें।<br>',
    'LBL_FROM_ADDR' => '"इस" पते से',
    'LBL_FROM_ADDR_DESC' => 'मेल सेवा प्रदाता द्वारा लगाए गए प्रतिबंधों के कारण यहां दिया गया ईमेल पता भेजे गए ईमेल के &quot;प्रेषक&quot; पते अनुभाग में दिखाई नहीं दे सकता है। इन परिस्थितियों में, आउटगोइंग मेल सर्वर में परिभाषित ईमेल पता उपयोग किया जाएगा।', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"से" नाम',
    'LBL_GROUP_QUEUE' => 'समूह को असाइन करें',
    'LBL_HOME' => 'निवास',
    'LBL_LIST_MAILBOX_TYPE' => 'मेल खाता उपयोग',
    'LBL_LIST_NAME' => 'नाम:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'प्रकार',
    'LBL_LIST_SERVER_URL' => 'मेल सर्वर',
    'LBL_SERVER_ADDRESS' => 'सर्वर पता',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LOGIN' => 'उपयोगकर्ता नाम',
    'LBL_USERNAME' => 'उपयोगकर्ता नाम',
    'LBL_MAILBOX_DEFAULT' => 'इनबॉक्स',
    'LBL_MAILBOX_SSL' => 'एसएसएल का प्रयोग करें',
    'LBL_MAILBOX_TYPE' => 'संभावित कार्रवाइयां',
    'LBL_DISTRIBUTION_METHOD' => 'वितरण विधि',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'नया केस ऑटो-रिप्लाई टेम्पलेट',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'ईमेल भेजने वालों को सूचित करने के लिए एक स्वचालित प्रतिक्रिया चुनें कि कोई मामला बनाया गया है। ईमेल में विषय पंक्ति में केस नंबर होता है जो केस मैक्रो सेटिंग का पालन करता है। यह प्रतिक्रिया केवल तभी भेजी जाती है जब प्राप्तकर्ता से पहला ईमेल प्राप्त होता है।',
    'LBL_MAILBOX' => 'मॉनिटर किए गए फ़ोल्डर',
    'LBL_TRASH_FOLDER' => 'ट्रैश फ़ोल्डर',
    'LBL_SENT_FOLDER' => 'भेजा गया फ़ोल्डर',
    'LBL_SELECT' => 'चयन',
    'LBL_MARK_READ_NO' => 'आयात के बाद ईमेल को हटा दिया गया चिह्नित किया गया',
    'LBL_MARK_READ_YES' => 'आयात के बाद ईमेल सर्वर पर छोड़ दिया गया',
    'LBL_MARK_READ' => 'सर्वर पर संदेश छोड़ें',
    'LBL_MAX_AUTO_REPLIES' => 'स्वतः-प्रतिक्रियाओं की संख्या',
    'LBL_MAX_AUTO_REPLIES_DESC' => '24 घंटे की अवधि के दौरान किसी विशिष्ट ईमेल पते पर भेजे जाने वाले स्वतः-प्रतिक्रियाओं की अधिकतम संख्या निर्धारित करें।',
    'LBL_PERSONAL_MODULE_NAME' => 'व्यक्तिगत मेल खाता',
    'LBL_CREATE_CASE' => 'ईमेल से केस बनाएं',
    'LBL_CREATE_CASE_HELP' => 'आने वाले ईमेल से सूइटसीआरएम में स्वचालित रूप से केस रिकॉर्ड बनाने के लिए चयन करें।',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'बाउंस हैंडलिंग मेलबॉक्स',
    'LBL_MODULE_TITLE' => 'भीतर का ईमेल ',
    'LBL_NAME' => 'नाम',
    'LBL_NONE' => 'कोई नहीं',
    'LBL_ONLY_SINCE_NO' => 'नहीं. मेल सर्वर पर सभी ईमेल की जांच करें.',
    'LBL_ONLY_SINCE_YES' => 'हाँ।',
    'LBL_PASSWORD' => 'पासवर्ड',
    'LBL_EMAIL_PASSWORD' => 'पासवर्ड',
    'LBL_POP3_SUCCESS' => 'आपका POP3 परीक्षण कनेक्शन सफल रहा.',
    'LBL_POPUP_TITLE' => 'परीक्षण सेटिंग्स',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'सब्सक्राइब्ड फ़ोल्डर चुनें',
    'LBL_SELECT_TRASH_FOLDERS' => 'ट्रैश फ़ोल्डर चुनें',
    'LBL_SELECT_SENT_FOLDERS' => 'भेजा गया फ़ोल्डर चुनें',
    'LBL_DELETED_FOLDERS_LIST' => 'निम्न फ़ोल्डर %s या तो मौजूद नहीं है या सर्वर से हटा दिया गया है',
    'LBL_PORT' => 'मेल सर्वर पोर्ट',
    'LBL_REPLY_TO_NAME' => '"उत्तर-प्रदाता" नाम',
    'LBL_REPLY_TO_ADDR' => '"जवाब दें" पता',
    'LBL_SAME_AS_ABOVE' => 'नाम/पता का उपयोग करना',
    'LBL_SERVER_OPTIONS' => 'अग्रिम सेटअप',
    'LBL_SERVER_TYPE' => 'मेल सर्वर प्रोटोकॉल',
    'LBL_SERVER_PORT' => 'मेल सर्वर पोर्ट',
    'LBL_SERVER_URL' => 'मेल सर्वर पता',
    'LBL_SSL_DESC' => 'यदि आपका मेल सर्वर सुरक्षित सॉकेट कनेक्शन का समर्थन करता है, तो इसे सक्षम करने से ईमेल आयात करते समय एसएसएल कनेक्शन को बाध्य किया जाएगा।',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'चयनित टीम को मेल खाते तक पहुंच प्राप्त होगी।',
    'LBL_SSL' => 'एसएसएल का प्रयोग करें',
    'LBL_STATUS' => 'स्थिति',
    'LBL_EMAIL_BODY_FILTERING' => 'ईमेल बॉडी फ़िल्टर प्रकार',
    'LBL_SYSTEM_DEFAULT' => 'सिस्टम डिफ़ॉल्ट',
    'LBL_TEST_BUTTON_TITLE' => 'परीक्षा',
    'LBL_TEST_SETTINGS' => 'परीक्षण सेटिंग्स',
    'LBL_TEST_CONNECTION_SETTINGS' => 'कनेक्शन सेटिंग्स का परीक्षण करें',
    'LBL_TEST_SUCCESSFUL' => 'कनेक्शन सफलतापूर्वक पूरा हुआ.',
    'LBL_TEST_WAIT_MESSAGE' => 'कृपया एक क्षण...',
    'LBL_WARN_IMAP_TITLE' => 'इनबाउंड ईमेल अक्षम',
    'LBL_WARN_IMAP' => 'चेतावनियाँ:',
    'LBL_WARN_NO_IMAP' => 'PHP मॉड्यूल के साथ सक्षम/संकलित IMAP c-क्लाइंट लाइब्रेरी के बिना इनबाउंड ईमेल <b>कार्य नहीं कर सकता</b>। इस समस्या को हल करने के लिए कृपया अपने व्यवस्थापक से संपर्क करें।',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'इनबाउंड ईमेल खाते',
    'LNK_LIST_OUTBOUND_EMAILS' => 'आउटबाउंड ईमेल खाते',
    'LNK_LIST_SCHEDULER' => 'समयबद्दक ',
    'LNK_SEED_QUEUES' => 'टीमों से बीज कतारें',
    'LBL_GROUPFOLDER_ID' => 'समूह फ़ोल्डर आईडी',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'उपयोगकर्ताओं को उत्तर पते के रूप में "प्रेषक" नाम और पते का उपयोग करके ईमेल भेजने की अनुमति दें',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'जब यह विकल्प चुना जाता है, तो इस समूह मेल खाते से संबद्ध प्रेषक नाम और प्रेषक ईमेल पता, समूह मेल खाते तक पहुंच रखने वाले उपयोगकर्ताओं के लिए ईमेल लिखते समय प्रेषक फ़ील्ड के लिए एक विकल्प के रूप में दिखाई देंगे।',
    'LBL_STATUS_ACTIVE' => 'सक्रिय',
    'LBL_STATUS_INACTIVE' => 'निष्क्रिय',
    'LBL_IS_PERSONAL' => 'व्यक्तिगत',
    'LBL_IS_GROUP' => 'समूह',
    'LBL_ENABLE_AUTO_IMPORT' => 'ईमेल स्वचालित रूप से आयात करें',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'चेतावनी: आप अपनी स्वचालित आयात सेटिंग को संशोधित कर रहे हैं जिसके परिणामस्वरूप डेटा की हानि हो सकती है।',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'चेतावनी: स्वचालित रूप से मामले बनाते समय स्वतः आयात सक्षम होना चाहिए.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'ड्राफ्ट्स',
    'LBL_LIST_TITLE_MY_INBOX' => 'इनबॉक्स',
    'LBL_LIST_TITLE_MY_SENT' => 'ईमेल भेजी',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'संग्रहीत ईमेल',
    'LNK_MY_DRAFTS' => 'ड्राफ्ट्स',
    'LNK_MY_INBOX' => 'ईमेल',
    'LNK_VIEW_MY_INBOX' => 'ईमेल देखें',
    'LNK_QUICK_REPLY' => 'उत्तर',
    'LNK_SENT_EMAIL_LIST' => 'ईमेल भेजे गए',
    'LBL_EDIT_LAYOUT' => 'लेआउट संपादित करें' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'द्वारा संशोधित',
    'LBL_SERVICE' => 'सेवा',
    'LBL_STORED_OPTIONS' => 'संग्रहीत विकल्प',
    'LBL_GROUP_ID' => 'समूह आईडी',

    'LBL_OUTBOUND_CONFIGURATION' => 'आउटबाउंड कॉन्फ़िगरेशन',
    'LBL_CONNECTION_CONFIGURATION' => 'सर्वर कॉन्फ़िगरेशन',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'स्वचालित उत्तर कॉन्फ़िगरेशन',
    'LBL_CASE_CONFIGURATION' => 'केस कॉन्फ़िगरेशन',
    'LBL_GROUP_CONFIGURATION' => 'समूह कॉन्फ़िगरेशन',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'सुरक्षा समूह',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'आउटबाउंड ईमेल खाता',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'आउटबाउंड ईमेल खाता आईडी',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'आउटबाउंड ईमेल खाता',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'ऑटो रिप्लाई ईमेल टेम्पलेट',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'ऑटो रिप्लाई ईमेल टेम्पलेट आईडी',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'ऑटो रिप्लाई ईमेल टेम्पलेट',

    'LBL_CASE_EMAIL_TEMPLATE' => 'केस ईमेल टेम्पलेट',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'केस ईमेल टेम्पलेट आईडी',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'केस ईमेल टेम्पलेट',

    'LBL_PROTOCOL' => 'नवाचार',
    'LBL_CONNECTION_STRING' => 'कनेक्शन स्ट्रिंग',
    'LBL_DISTRIB_METHOD' => 'वितरण विधि',
    'LBL_DISTRIB_OPTIONS' => 'वितरण विकल्प',

    'LBL_DISTRIBUTION_USER' => 'वितरण उपयोगकर्ता',
    'LBL_DISTRIBUTION_USER_ID' => 'वितरण उपयोगकर्ता आईडी',
    'LBL_DISTRIBUTION_USER_NAME' => 'वितरण उपयोगकर्ता',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'बाहरी OAuth कनेक्शन',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'बाहरी OAuth कनेक्शन आईडी',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'बाहरी OAuth कनेक्शन',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'बाहरी OAuth कनेक्शन',

    'LBL_TYPE' => 'प्रकार',
    'LBL_AUTH_TYPE' => 'प्रमाणीकरण प्रकार',
    'LBL_IS_DEFAULT' => 'डिफॉल्ट',
    'LBL_SIGNATURE' => 'हस्ताक्षर',

    'LBL_OWNER_NAME' => 'मालिक',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'डिफ़ॉल्ट के रूप में सेट करें',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'आयात के बाद संदेशों को कूड़ेदान में ले जाएं?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
