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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'उन्नत',
    'DEFAULT_CURRENCY_ISO4217' => 'आईएसओ 4217 मुद्रा कोड',
    'DEFAULT_CURRENCY_NAME' => 'मुद्रा का नाम',
    'DEFAULT_CURRENCY_SYMBOL' => 'मुद्रा चिन्ह',
    'DEFAULT_DATE_FORMAT' => 'डिफ़ॉल्ट दिनांक प्रारूप',
    'DEFAULT_DECIMAL_SEP' => 'दशमलव चिह्न',
    'DEFAULT_LANGUAGE' => 'डिफ़ॉल्ट भाषा',
    'DEFAULT_SYSTEM_SETTINGS' => 'प्रयोक्ता इंटरफ़ेस',
    'DEFAULT_THEME' => 'पूर्व निर्धारित विषय',
    'DEFAULT_TIME_FORMAT' => 'डिफ़ॉल्ट समय प्रारूप',

    'DISPLAY_RESPONSE_TIME' => 'सर्वर प्रतिक्रिया समय प्रदर्शित करें',

    'IMAGES' => 'लोगो',
    'LBL_ALLOW_USER_TABS' => 'उपयोगकर्ताओं को टैब छिपाने की अनुमति दें',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'सिस्टम सेटिंग्स',
    'LBL_LOGVIEW' => 'लॉग देखें',
    'LBL_MAIL_SMTPAUTH_REQ' => 'एसएमटीपी प्रमाणीकरण का प्रयोग करें?',
    'LBL_MAIL_SMTPPASS' => 'एसएमटीपी पासवर्ड:',
    'LBL_MAIL_SMTPPORT' => 'SMTP पोर्ट:',
    'LBL_MAIL_SMTPSERVER' => 'एसएमटीपी सर्वर:',
    'LBL_MAIL_SMTPUSER' => 'एसएमटीपी उपयोगकर्ता नाम:',
    'LBL_MAIL_SMTP_SETTINGS' => 'एसएमटीपी सर्वर विशिष्टता',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'अपना ईमेल प्रदाता चुनें:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'याहू! मेल पासवर्ड:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'याहू! मेल आईडी:',
    'LBL_GMAIL_SMTPPASS' => 'जीमेल पासवर्ड:',
    'LBL_GMAIL_SMTPUSER' => 'जीमेल ईमेल पता:',
    'LBL_EXCHANGE_SMTPPASS' => 'पासवर्ड एक्सचेंज करें:',
    'LBL_EXCHANGE_SMTPUSER' => 'एक्सचेंज उपयोगकर्ता नाम:',
    'LBL_EXCHANGE_SMTPPORT' => 'एक्सचेंज सर्वर पोर्ट:',
    'LBL_EXCHANGE_SMTPSERVER' => 'सर्वर की अदला बदली करें:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'उपयोगकर्ताओं को आउटगोइंग ईमेल के लिए इस खाते का उपयोग करने की अनुमति दें:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'जब यह विकल्प चुना जाता है, तो सभी उपयोगकर्ता उसी आउटगोइंग मेल खाते का उपयोग करके ईमेल भेजने में सक्षम होंगे जिसका उपयोग सिस्टम सूचनाएं और अलर्ट भेजने के लिए किया जाता है। यदि विकल्प चयनित नहीं है, तो उपयोगकर्ता अपने खाते की जानकारी प्रदान करने के बाद भी आउटगोइंग मेल सर्वर का उपयोग कर सकते हैं।',
    'LBL_MAILMERGE' => 'डाक मिलान',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'न्यूनतम डैशलेट ऑटो-रिफ्रेश अंतराल',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'यह वह न्यूनतम मूल्य है जिसे कोई व्यक्ति डैशलेट ऑटो-रीफ्रेश के लिए चुन सकता है। \'नेवर\' पर सेट करने से डैशलेट की ऑटो-रिफ्रेशिंग पूरी तरह से अक्षम हो जाती है।',
    'LBL_MODULE_FAVICON' => 'मॉड्यूल आइकन को फ़ेविकॉन के रूप में प्रदर्शित करें',
    'LBL_MODULE_FAVICON_HELP' => 'यदि आप किसी आइकन वाले मॉड्यूल में हैं, तो ब्राउज़र टैब में थीम के फ़ेविकॉन के बजाय मॉड्यूल के आइकन को फ़ेविकॉन के रूप में उपयोग करें।',
    'LBL_MODULE_NAME' => 'सिस्टम सेटिंग्स',
    'LBL_MODULE_ID' => 'कौन्फ़िगरेटर',
    'LBL_MODULE_TITLE' => 'प्रयोक्ता इंटरफ़ेस',
    'LBL_NOTIFY_FROMADDRESS' => '"इस" पते से:',
    'LBL_NOTIFY_SUBJECT' => 'ईमेल का विषय:',

    'LBL_PROXY_AUTH' => 'प्रमाणीकरण?',
    'LBL_PROXY_HOST' => 'छद्म मेजबान',
    'LBL_PROXY_ON_DESC' => 'प्रॉक्सी सर्वर पता और प्रमाणीकरण सेटिंग्स कॉन्फ़िगर करें',
    'LBL_PROXY_ON' => 'प्रॉक्सी सर्वर का उपयोग करें?',
    'LBL_PROXY_PASSWORD' => 'पासवर्ड',
    'LBL_PROXY_PORT' => 'पोर्ट',
    'LBL_PROXY_TITLE' => 'प्रॉक्सी सेटिंग्स',
    'LBL_PROXY_USERNAME' => 'उपयोगकर्ता नाम',
    'LBL_RESTORE_BUTTON_LABEL' => 'पुनर्संग्रहित करें',
    'LBL_SYSTEM_SETTINGS' => 'सिस्टम सेटिंग्स',
    'LBL_USE_REAL_NAMES' => 'पूरे नाम दिखाएँ',
    'LBL_USE_REAL_NAMES_DESC' => 'असाइनमेंट फ़ील्ड में उपयोगकर्ताओं के उपयोगकर्ता नाम के बजाय उनका पूरा नाम प्रदर्शित करें।',
    'LBL_DISALBE_CONVERT_LEAD' => 'परिवर्तित लीड के लिए कन्वर्ट लीड कार्रवाई अक्षम करें',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'यदि कोई लीड पहले ही परिवर्तित हो चुकी है, तो इस विकल्प को सक्षम करने से कन्वर्ट लीड कार्रवाई हटा दी जाएगी।',
    'LBL_ENABLE_ACTION_MENU' => 'मेनू के भीतर क्रियाएँ प्रदर्शित करें',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'ड्रॉपडाउन मेनू में डिटेल व्यू और सबपैनल क्रियाएं प्रदर्शित करने के लिए चयन करें। यदि अचयनित किया जाता है, तो क्रियाएँ अलग-अलग बटन के रूप में प्रदर्शित होंगी।',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'सूची दृश्य पर इनलाइन संपादन सक्षम करें',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'सूची दृश्य पर फ़ील्ड के लिए इनलाइन संपादन सक्षम करने के लिए चयन करें। यदि अचयनित किया गया तो सूची दृश्य पर इनलाइन संपादन अक्षम कर दिया जाएगा।',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'विवरण दृश्य पर इनलाइन संपादन सक्षम करें',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'विवरण दृश्य पर फ़ील्ड के लिए इनलाइन संपादन सक्षम करने के लिए चयन करें। यदि अचयनित किया गया तो विवरण दृश्य पर इनलाइन संपादन अक्षम कर दिया जाएगा।',
    'LBL_HIDE_SUBPANELS' => 'ढहे हुए उप पैनल',
    'LIST_ENTRIES_PER_LISTVIEW' => 'प्रति पृष्ठ सूचीदृश्य आइटम',
    'LIST_ENTRIES_PER_SUBPANEL' => 'प्रति पृष्ठ उपपैनल आइटम',
    'LOG_MEMORY_USAGE' => 'स्मृति उपयोग लॉग करें',
    'LOG_SLOW_QUERIES' => 'धीमी क्वेरी लॉग करें',
    'CURRENT_LOGO' => 'वर्तमान लोगो:',
    'CURRENT_LOGO_HELP' => 'यह लोगो SuiteCRM एप्लिकेशन की लॉगिन स्क्रीन के केंद्र में प्रदर्शित होता है।',
    'NEW_LOGO' => 'लोगो चुनें:',
    'NEW_LOGO_HELP' => 'छवि फ़ाइल स्वरूप .png या .jpg हो सकता है। अधिकतम ऊँचाई 170px है, और अधिकतम चौड़ाई 450px है। अपलोड की गई कोई भी छवि जो किसी भी दिशा में बड़ी हो, उसे इन अधिकतम आयामों पर स्केल किया जाएगा।',
    'NEW_LOGO_HELP_NO_SPACE' => 'छवि फ़ाइल स्वरूप .png या .jpg हो सकता है। अधिकतम ऊँचाई 170px है, और अधिकतम चौड़ाई 450px है। अपलोड की गई कोई भी छवि जो किसी भी दिशा में बड़ी हो, उसे इन अधिकतम आयामों पर स्केल किया जाएगा।',
    'SLOW_QUERY_TIME_MSEC' => 'धीमी क्वेरी समय सीमा (एमएसईसी)',
    'STACK_TRACE_ERRORS' => 'त्रुटियों का स्टैक ट्रेस प्रदर्शित करें',
    'UPLOAD_MAX_SIZE' => 'अधिकतम अपलोड आकार',
    'VERIFY_CLIENT_IP' => 'उपयोगकर्ता आईपी पता मान्य करें',
    'LOCK_HOMEPAGE' => 'उपयोगकर्ता अनुकूलन योग्य होमपेज लेआउट को रोकें',
    'LOCK_SUBPANELS' => 'उपयोगकर्ता अनुकूलन योग्य उपपैनल लेआउट को रोकें',
    'MAX_DASHLETS' => 'होमपेज पर सुइटसीआरएम डैशलेट्स की अधिकतम संख्या',
    'SYSTEM_NAME' => 'सिस्टम का नाम:',
    'SYSTEM_NAME_WIZARD' => 'नाम:',
    'SYSTEM_NAME_HELP' => 'यह वह नाम है जो आपके ब्राउज़र के शीर्षक बार में प्रदर्शित होता है।',
    'LBL_LDAP_TITLE' => 'एलडीएपी प्रमाणीकरण समर्थन',
    'LBL_LDAP_ENABLE' => 'एलडीएपी सक्षम करें',
    'LBL_LDAP_SERVER_HOSTNAME' => 'सर्वर:',
    'LBL_LDAP_SERVER_PORT' => 'पोर्ट नंबर:',
    'LBL_LDAP_ADMIN_USER' => 'उपयोगकर्ता नाम:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'एलडीएपी उपयोगकर्ता की खोज के लिए उपयोग किया जाता है। इसके लिए पूरी तरह से योग्य होने की आवश्यकता हो सकती है।',
    'LBL_LDAP_ADMIN_PASSWORD' => 'पासवर्ड:',
    'LBL_LDAP_AUTHENTICATION' => 'प्रमाणीकरण:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'विशिष्ट उपयोगकर्ता क्रेडेंशियल का उपयोग करके एलडीएपी सर्वर से जुड़ें। यदि उपलब्ध नहीं कराया गया तो यह गुमनाम रूप से बाध्य होगा।',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'स्वतः उपयोगकर्ता बनाएँ:',
    'LBL_LDAP_USER_DN' => 'उपयोगकर्ता डीएन:',
    'LBL_LDAP_GROUP_DN' => 'समूह डीएन:',
    'LBL_LDAP_GROUP_DN_DESC' => 'उदाहरण: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'उपयोगकर्ता फ़िल्टर:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'समूह सदस्यता:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'उपयोगकर्ताओं को एक विशिष्ट समूह का सदस्य होना चाहिए',
    'LBL_LDAP_GROUP_USER_ATTR' => 'उपयोगकर्ता विशेषता:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'व्यक्ति का विशिष्ट पहचानकर्ता जिसका उपयोग यह जांचने के लिए किया जाएगा कि क्या वे समूह के सदस्य हैं उदाहरण: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'समूह की विशेषता जिसका उपयोग उपयोगकर्ता विशेषता उदाहरण के विरुद्ध फ़िल्टर करने के लिए किया जाएगा: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'समूह विशेषता:',
    'LBL_LDAP_USER_FILTER_DESC' => 'उपयोगकर्ताओं को प्रमाणित करते समय लागू करने के लिए कोई अतिरिक्त फ़िल्टर पैरामीटर जैसे<em>is_suitecrm_user=1 या (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'लॉगिन विशेषता:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'बाइंड गुण:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'एलडीएपी उपयोगकर्ता उदाहरणों को बाइंड करने के लिए:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'एलडीएपी उपयोगकर्ता उदाहरणों की खोज के लिए:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b> &nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'उदाहरण: एसएसएल के लिए ldap.example.com या ldaps://ldap.example.com',
    'LBL_LDAP_SERVER_PORT_DESC' => 'उदाहरण: <em>एसएसएल के लिए 389 या 636</em>',
    'LBL_LDAP_GROUP_NAME' => 'समूह नाम:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'उदाहरण <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'उदाहरण: <em>ou=लोग,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'यदि कोई प्रमाणित उपयोगकर्ता मौजूद नहीं है, तो SuiteCRM में एक बनाया जाएगा।',
    'LBL_LDAP_ENC_KEY' => 'एन्क्रिप्शन कुंजी:',
    'DEVELOPER_MODE' => 'डेवलपर मोड',

    'SHOW_DOWNLOADS_TAB' => 'डाउनलोड टैब प्रदर्शित करें',
    'SHOW_DOWNLOADS_TAB_HELP' => 'चयनित होने पर, डाउनलोड टैब उपयोगकर्ता सेटिंग्स में दिखाई देगा और उपयोगकर्ताओं को SuiteCRM प्लग-इन और अन्य उपलब्ध फ़ाइलों तक पहुंच प्रदान करेगा',
    'LBL_LDAP_ENC_KEY_DESC' => 'एलडीएपी का उपयोग करते समय एसओएपी प्रमाणीकरण के लिए।',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'आपकी php.ini फ़ाइल में php_mcrypt एक्सटेंशन सक्षम होना चाहिए।',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'आपकी php.ini फ़ाइल में ओपनएसएल एक्सटेंशन सक्षम होना चाहिए।',
    'LBL_ALL' => 'सब',
    'LBL_MARK_POINT' => 'मार्क प्वाइंट',
    'LBL_NEXT_' => 'अगला>>',
    'LBL_REFRESH_FROM_MARK' => 'मार्क से ताज़ा करेंv',
    'LBL_SEARCH' => 'खोजें:',
    'LBL_REG_EXP' => 'रेग ऍक्स्प:',
    'LBL_IGNORE_SELF' => 'स्वयं को अनदेखा करें:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'यह चिन्हित करना कि लॉगिंग कहाँ से प्रारंभ करें',
    'LBL_DISPLAYING_LOG' => 'लॉग प्रदर्शित हो रहा है',
    'LBL_YOUR_PROCESS_ID' => 'आपकी प्रक्रिया आईडी',
    'LBL_YOUR_IP_ADDRESS' => 'आपका IP पता है',
    'LBL_IT_WILL_BE_IGNORED' => ' इसे नजरअंदाज कर दिया जाएगा ',
    'LBL_LOG_NOT_CHANGED' => 'लॉग नहीं बदला है',
    'LBL_ALERT_JPG_IMAGE' => 'छवि का फ़ाइल स्वरूप JPEG होना चाहिए. फ़ाइल एक्सटेंशन .jpg के साथ एक नई फ़ाइल अपलोड करें।',
    'LBL_ALERT_TYPE_IMAGE' => 'छवि का फ़ाइल स्वरूप JPEG या PNG होना चाहिए. फ़ाइल एक्सटेंशन .jpg या .png के साथ एक नई फ़ाइल अपलोड करें।',
    'LBL_ALERT_SIZE_RATIO' => 'छवि का पक्षानुपात 1:1 और 10:1 के बीच होना चाहिए. छवि का आकार बदल दिया जाएगा.',
    'ERR_ALERT_FILE_UPLOAD' => 'छवि अपलोड करते समय त्रुटि.',
    'LBL_LOGGER' => 'लकड़हारा सेटिंग्स',
    'LBL_LOGGER_FILENAME' => 'लॉग फ़ाइल नाम',
    'LBL_LOGGER_FILE_EXTENSION' => 'विस्तार',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'अधिकतम लॉग आकार',
    'LBL_STACK_TRACE' => 'स्टैक ट्रेस सक्षम करें',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'डिफ़ॉल्ट दिनांक प्रारूप',
    'LBL_LOGGER_LOG_LEVEL' => 'लॉग स्तर',
    'LBL_LEAD_CONV_OPTION' => 'लीड रूपांतरण विकल्प',
    'LEAD_CONV_OPT_HELP' => "<b>कॉपी</b> - लीड की सभी गतिविधियों की प्रतियां बनाता है और उन्हें नए रिकॉर्ड से जोड़ता है जो रूपांतरण के दौरान उपयोगकर्ता द्वारा चुने जाते हैं। प्रत्येक चयनित रिकॉर्ड के लिए प्रतियां बनाई जाती हैं।<br><br><b>स्थानांतरित करें</b> - लीड की सभी गतिविधियों को एक नए रिकॉर्ड में ले जाता है जिसे उपयोगकर्ता द्वारा रूपांतरण के दौरान चुना जाता है।<br><br> <b>कुछ न करें</b> - रूपांतरण के दौरान लीड की गतिविधियों के साथ कुछ नहीं करता। गतिविधियाँ केवल लीड से संबंधित रहती हैं।",
    'LBL_CONFIG_AJAX' => 'AJAX उपयोगकर्ता इंटरफ़ेस कॉन्फ़िगर करें',
    'LBL_CONFIG_AJAX_DESC' => 'विशिष्ट मॉड्यूल के लिए AJAX UI के उपयोग को सक्षम या अक्षम करें।',
    'LBL_LOGGER_MAX_LOGS' => 'लॉग की अधिकतम संख्या (रोलिंग से पहले)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'फ़ाइल नाम के बाद जोड़ें',
    'LBL_VCAL_PERIOD' => 'vCal अद्यतन समय अवधि:',
    'LBL_IMPORT_MAX_RECORDS' => 'आयात - पंक्तियों की अधिकतम संख्या:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'निर्दिष्ट करें कि आयात फ़ाइलों में कितनी पंक्तियों की अनुमति है।<br>यदि आयात फ़ाइल में पंक्तियों की संख्या इस संख्या से अधिक है, तो उपयोगकर्ता को सतर्क कर दिया जाएगा।<br>यदि कोई संख्या दर्ज नहीं की जाती है, तो असीमित संख्या में पंक्तियों की अनुमति है।',
    'vCAL_HELP' => 'इस सेटिंग का उपयोग यह निर्धारित करने के लिए करें कि वर्तमान तिथि से कितने महीने पहले कॉल और मीटिंग के लिए खाली/व्यस्त जानकारी प्रकाशित की जाती है।<BR>खाली/व्यस्त प्रकाशन को बंद करने के लिए, "0" दर्ज करें। न्यूनतम 1 महीना है; अधिकतम 12 महीने है.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'आपके परिदृश्य',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'कोई परिदृश्य कॉन्फ़िगर नहीं किया गया है',
    'LBL_WIZARD_SCENARIOS_DESC' => 'चुनें कि आपके इंस्टॉलेशन के लिए कौन से परिदृश्य उपयुक्त हैं। इन विकल्पों को इंस्टॉल के बाद बदला जा सकता है।',

    'LBL_WIZARD_TITLE' => 'व्यवस्थापक विज़ार्ड',
    'LBL_WIZARD_WELCOME_TAB' => 'स्वागत है',
    'LBL_WIZARD_WELCOME_TITLE' => 'सुइटसीआरएम में आपका स्वागत है!',
    'LBL_WIZARD_WELCOME' => 'SuiteCRM को अभी ब्रांड, स्थानीयकृत और कॉन्फ़िगर करने के लिए <b>अगला</b> पर क्लिक करें। यदि आप बाद में SuiteCRM को कॉन्फ़िगर करना चाहते हैं, तो <b>छोड़ें</b> पर क्लिक करें।',
    'LBL_WIZARD_NEXT_BUTTON' => 'अगला >',
    'LBL_WIZARD_BACK_BUTTON' => '< पीछे',
    'LBL_WIZARD_SKIP_BUTTON' => 'छोड़ें',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'जारी रखें',
    'LBL_WIZARD_FINISH_TITLE' => 'बुनियादी सिस्टम कॉन्फ़िगरेशन पूरा हो गया है',
    'LBL_WIZARD_SYSTEM_TITLE' => 'ब्रांडिंग',
    'LBL_WIZARD_SYSTEM_DESC' => 'अपने SuiteCRM को ब्रांड बनाने के लिए अपने संगठन का नाम और लोगो प्रदान करें।',
    'LBL_WIZARD_LOCALE_DESC' => 'निर्दिष्ट करें कि आप अपनी भौगोलिक स्थिति के आधार पर सुइटसीआरएम में डेटा कैसे प्रदर्शित करना चाहते हैं। आपके द्वारा यहां प्रदान की गई सेटिंग्स डिफ़ॉल्ट सेटिंग्स होंगी। उपयोगकर्ता अपनी प्राथमिकताएं स्वयं निर्धारित कर सकेंगे.',
    'LBL_WIZARD_SMTP_DESC' => 'वह ईमेल खाता प्रदान करें जिसका उपयोग ईमेल भेजने के लिए किया जाएगा, जैसे असाइनमेंट सूचनाएं और नए उपयोगकर्ता पासवर्ड। उपयोगकर्ताओं को SuiteCRM से ईमेल प्राप्त होंगे, जैसा कि निर्दिष्ट ईमेल खाते से भेजा गया है।',
    'LBL_LOADING' => 'लोड हो रहा है...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'हटाएं' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'स्वागत है' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'लोगो' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'मॉड्यूल के लिए इतिहास उपपैनल में संबंधित संपर्कों के ईमेल दिखाएं',
);
