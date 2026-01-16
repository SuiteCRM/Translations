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
    'LBL_SEND_DATE_TIME' => 'तारीख बताएं',
    'LBL_IN_QUEUE' => 'इस प्रक्रिया में',
    'LBL_IN_QUEUE_DATE' => 'कतारबद्ध तिथि',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'प्रति बैच भेजे गए ईमेल की संख्या निर्दिष्ट करने के लिए केवल पूर्णांक मानों का उपयोग करें',

    'LBL_ATTACHMENT_AUDIT' => ' भेजा था। डिस्क उपयोग को संरक्षित करने के लिए इसे स्थानीय रूप से डुप्लिकेट नहीं किया गया था।',
    'LBL_CONFIGURE_SETTINGS' => 'ईमेल सेटिंग्स कॉन्फ़िगर करें',
    'LBL_CUSTOM_LOCATION' => 'उपयोगकर्ता परिभाषित',
    'LBL_DEFAULT_LOCATION' => 'डिफॉल्ट',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'हटाए गए ईमेल से संबंधित नोट्स और अनुलग्नक हटाएं',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'ईमेल चेतावनी सूचनाएं',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'सेटिंग्स में ऑप्ट इन करें',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'स्वचालित रूप से ऑप्ट इन ईमेल भेजें',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'ईमेल टेम्पलेट में ऑप्ट इन की पुष्टि करें',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'लीगेसी ईमेल कंपोज व्यवहार सक्षम करें',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'आउटगोइंग मेल कॉन्फ़िगरेशन',
    'LBL_EMAILS_PER_RUN' => 'प्रति बैच भेजे गए ईमेल की संख्या:',
    'LBL_ID' => 'आईडी',
    'LBL_LIST_CAMPAIGN' => 'अभियान',
    'LBL_LIST_FORM_TITLE' => 'कतार',
    'LBL_LIST_FROM_NAME' => 'नाम से',
    'LBL_LIST_IN_QUEUE' => 'इस प्रक्रिया में',
    'LBL_LIST_MESSAGE_NAME' => 'विपणन संदेश',
    'LBL_LIST_RECIPIENT_EMAIL' => 'प्राप्तकर्ता ईमेल',
    'LBL_LIST_RECIPIENT_NAME' => 'प्राप्तकर्ता का नाम',
    'LBL_LIST_SEND_ATTEMPTS' => 'प्रयास भेजें',
    'LBL_LIST_SEND_DATE_TIME' => 'इस पर भेजें',
    'LBL_LIST_USER_NAME' => 'उपयोगकर्ता नाम',
    'LBL_LOCATION_ONLY' => 'स्थान',
    'LBL_LOCATION_TRACK' => 'अभियान ट्रैकिंग फ़ाइलों का स्थान (जैसे अभियान_ट्रैकर.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'अभियान संदेशों की प्रतियां रखें:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'क्या आप सभी अभियानों के दौरान भेजे गए <bold>EACH</bold> ईमेल संदेश की पूरी प्रतियां संग्रहीत करना चाहेंगे? <bold>हम अनुशंसा करते हैं और डिफ़ॉल्ट नहीं है</bold>. नहीं चुनने से केवल भेजा गया टेम्पलेट और व्यक्तिगत संदेश को फिर से बनाने के लिए आवश्यक चर संग्रहीत होंगे।',
    'LBL_MAIL_SENDTYPE' => 'मेल ट्रांसफ़र एजेंट:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'एसएमटीपी प्रमाणीकरण का प्रयोग करें:',
    'LBL_MAIL_SMTPPASS' => 'पासवर्ड:',
    'LBL_MAIL_SMTPPORT' => 'SMTP पोर्ट:',
    'LBL_MAIL_SMTPSERVER' => 'एसएमटीपी मेल सर्वर:',
    'LBL_MAIL_SMTPUSER' => 'प्रयोक्ता नाम:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'अपना ईमेल प्रदाता चुनें',
    'LBL_YAHOOMAIL_SMTPPASS' => 'याहू! मेल पासवर्ड',
    'LBL_YAHOOMAIL_SMTPUSER' => 'याहू! मेल आईडी',
    'LBL_GMAIL_SMTPPASS' => 'जीमेल पासवर्ड',
    'LBL_GMAIL_SMTPUSER' => 'जीमेल ईमेल पता',
    'LBL_EXCHANGE_SMTPPASS' => 'पासवर्ड एक्सचेंज करें',
    'LBL_EXCHANGE_SMTPUSER' => 'एक्सचेंज उपयोगकर्ता नाम',
    'LBL_EXCHANGE_SMTPPORT' => 'एक्सचेंज सर्वर पोर्ट',
    'LBL_EXCHANGE_SMTPSERVER' => 'सर्वर की अदला बदली करें',
    'LBL_EMAIL_LINK_TYPE' => 'ईमेल क्लाइंट',
    'LBL_MARKETING_ID' => 'मार्केटिंग आईडी',
    'LBL_MODULE_ID' => 'ईमेलमैन',
    'LBL_MODULE_NAME' => 'ईमेल सेटिंग्स',
    'LBL_MODULE_TITLE' => 'आउटबाउंड ईमेल कतार प्रबंधन',
    'LBL_NOTIFICATION_ON_DESC' => 'सक्षम होने पर, उपयोगकर्ताओं को रिकॉर्ड सौंपे जाने पर ईमेल भेजे जाते हैं।',
    'LBL_NOTIFY_FROMADDRESS' => '"इस" पते से:',
    'LBL_NOTIFY_FROMNAME' => '"से" नाम:',
    'LBL_NOTIFY_ON' => 'असाइनमेंट अधिसूचनाएँ',
    'LBL_NOTIFY_TITLE' => 'ईमेल विकल्प',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'आउटबाउंड ईमेल विकल्प',
    'LBL_RELATED_ID' => 'संबंधित आईडी',
    'LBL_RELATED_TYPE' => 'संबंधित प्रकार',
    'LBL_SEARCH_FORM_TITLE' => 'कतार खोज',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php सेटिंग साइट_यूआरएल का मान',
    'TXT_REMOVE_ME_ALT' => 'स्वयं को इस ईमेल सूची से हटाने के लिए यहां जाएं',
    'TXT_REMOVE_ME_CLICK' => 'यहाँ क्लिक करें',
    'TXT_REMOVE_ME' => 'स्वयं को इस ईमेल सूची से हटाने के लिए',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'असाइन करने वाले उपयोगकर्ता के ईमेल पते से अधिसूचना भेजें',

    'LBL_SECURITY_TITLE' => 'ईमेल सुरक्षा सेटिंग्स',
    'LBL_SECURITY_DESC' => 'निम्नलिखित की जाँच करें जिन्हें इनबाउंडईमेल के माध्यम से अनुमति नहीं दी जानी चाहिए या ईमेल मॉड्यूल में प्रदर्शित नहीं किया जाना चाहिए।',
    'LBL_SECURITY_APPLET' => 'एप्लेट टैग',
    'LBL_SECURITY_BASE' => 'बेस टैग',
    'LBL_SECURITY_EMBED' => 'टैग एम्बेड करें',
    'LBL_SECURITY_FORM' => 'प्रपत्र टैग',
    'LBL_SECURITY_FRAME' => 'फ़्रेम टैग',
    'LBL_SECURITY_FRAMESET' => 'फ़्रेमसेट टैग',
    'LBL_SECURITY_IFRAME' => 'आईफ़्रेम टैग',
    'LBL_SECURITY_IMPORT' => 'टैग आयात करें',
    'LBL_SECURITY_LAYER' => 'परत टैग',
    'LBL_SECURITY_LINK' => 'लिंक टैग',
    'LBL_SECURITY_OBJECT' => 'ऑब्जेक्ट टैग',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'आउटलुक डिफ़ॉल्ट न्यूनतम सुरक्षा सेटिंग्स का चयन करें (सही प्रदर्शन के पक्ष में त्रुटियां)।',
    'LBL_SECURITY_STYLE' => 'स्टाइल टैग',
    'LBL_SECURITY_TOGGLE_ALL' => 'सभी विकल्प टॉगल करें',
    'LBL_SECURITY_XMP' => 'एक्सएमपी टैग',
    'LBL_YES' => 'हाँ',
    'LBL_NO' => 'नहीं',
    'LBL_PREPEND_TEST' => '[परीक्षा]: ',
    'LBL_SEND_ATTEMPTS' => 'प्रयास भेजें',
    'LBL_OUTGOING_SECTION_HELP' => 'वर्कफ़्लो अलर्ट सहित ईमेल सूचनाएं भेजने के लिए डिफ़ॉल्ट आउटगोइंग मेल सर्वर कॉन्फ़िगर करें।',
    'LBL_ALLOW_DEFAULT_SELECTION' => "उपयोगकर्ता इस खाते की पहचान के रूप में भेज सकते हैं:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'जब यह विकल्प चुना जाता है, तो सभी उपयोगकर्ता उसी आउटगोइंग मेल खाते का उपयोग करके ईमेल भेज सकेंगे जिसका उपयोग सिस्टम सूचनाएं और अलर्ट भेजने के लिए किया जाता है।<br> यदि विकल्प नहीं चुना गया है, तो उपयोगकर्ता अपना खाता प्रदान करने के बाद भी आउटगोइंग मेल सर्वर का उपयोग कर सकते हैं जानकारी।',
    'LBL_FROM_ADDRESS_HELP' => 'सक्षम होने पर, निर्दिष्ट उपयोगकर्ता का नाम और ईमेल पता ईमेल के प्रेषक फ़ील्ड में शामिल किया जाएगा। यह सुविधा एसएमटीपी सर्वर के साथ काम नहीं कर सकती है जो सर्वर खाते के अलावा किसी अन्य ईमेल खाते से भेजने की अनुमति नहीं देते हैं।',
    'LBL_HELP' => 'मदद' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'आउटबाउंड ईमेल खाते देखें',
    'LBL_ALLOW_SEND_AS_USER' => 'उपयोगकर्ता स्वयं के रूप में भेज सकते हैं:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'सक्षम होने पर, <b>सभी</b> उपयोगकर्ता आउटगोइंग मेल सर्वर का उपयोग करके अपने स्वयं के प्राथमिक ईमेल पते को &quot;From:&quot; के रूप में उपयोग करके ईमेल भेज सकते हैं। पता।<br>यह सुविधा एसएमटीपी सर्वर के साथ काम नहीं कर सकती है जो सर्वर खाते के अलावा किसी अन्य ईमेल खाते से भेजने की अनुमति नहीं देते हैं।',
);
