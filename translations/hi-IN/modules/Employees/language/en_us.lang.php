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
    'LBL_MODULE_NAME' => 'कर्मचारियों ',
    'LBL_MODULE_TITLE' => 'कर्मचारी: घर',
    'LBL_SEARCH_FORM_TITLE' => 'कर्मचारी खोज',
    'LBL_LIST_FORM_TITLE' => 'कर्मचारियों ',
    'LBL_NEW_FORM_TITLE' => 'नया कर्मचारी',
    'LBL_LOGIN' => 'लॉग इन करें',
    'LBL_RESET_PREFERENCES' => 'डिफ़ॉल्ट प्राथमिकताओं पर रीसेट करें',
    'LBL_TIME_FORMAT' => 'समय स्वरूप:',
    'LBL_DATE_FORMAT' => 'तारिख का प्रारूप:',
    'LBL_TIMEZONE' => 'वर्तमान समय:',
    'LBL_CURRENCY' => 'मुद्रा:',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_LAST_NAME' => 'परिवार का नाम',
    'LBL_LIST_EMPLOYEE_NAME' => 'कर्मचारी का नाम',
    'LBL_LIST_DEPARTMENT' => 'विभाग',
    'LBL_LIST_REPORTS_TO_NAME' => 'को रिपोर्ट करता है',
    'LBL_LIST_EMAIL' => 'ईमेल',
    'LBL_LIST_USER_NAME' => 'उपयोगकर्ता नाम',
    'LBL_ERROR' => 'त्रुटि:',
    'LBL_PASSWORD' => 'पासवर्ड:',
    'LBL_USER_NAME' => 'उपयोगकर्ता नाम:',
    'LBL_USER_TYPE' => 'उपयोगकर्ता का प्रकार',
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_LAST_NAME' => 'अंतिम नाम:',
    'LBL_THEME' => 'थीम:',
    'LBL_LANGUAGE' => 'भाषा:',
    'LBL_ADMIN' => 'व्यवस्थापक:',
    'LBL_EMPLOYEE_INFORMATION' => 'कर्मचारी सूचना',
    'LBL_OFFICE_PHONE' => 'कार्यालयीन फोन:',
    'LBL_REPORTS_TO' => 'आईडी को रिपोर्ट:',
    'LBL_REPORTS_TO_NAME' => 'को रिपोर्ट करता है',
    'LBL_OTHER_PHONE' => 'अन्य फोन:',
    'LBL_NOTES' => 'नोट्स:',
    'LBL_DEPARTMENT' => 'विभाग:',
    'LBL_TITLE' => 'कार्य शीर्षक:',
    'LBL_ANY_ADDRESS' => 'कोई भी पता:',
    'LBL_ANY_PHONE' => 'कोई भी फ़ोन:',
    'LBL_ANY_EMAIL' => 'कोई भी ईमेल:',
    'LBL_ADDRESS' => 'पता:',
    'LBL_CITY' => 'शहर:',
    'LBL_STATE' => 'राज्य/क्षेत्र:',
    'LBL_POSTAL_CODE' => 'डाक कोड:',
    'LBL_COUNTRY' => 'देश:',
    'LBL_NAME' => 'नाम:',
    'LBL_MOBILE_PHONE' => 'गतिमान:',
    'LBL_FAX' => 'फैक्स:',
    'LBL_EMAIL' => 'ई-मेल पता:',
    'LBL_EMAIL_LINK_TYPE' => 'ईमेल क्लाइंट',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM मेल क्लाइंट:</b> SuiteCRM एप्लिकेशन में ईमेल क्लाइंट का उपयोग करके ईमेल भेजें।<br><b>बाहरी मेल क्लाइंट:</b> SuiteCRM एप्लिकेशन के बाहर ईमेल क्लाइंट का उपयोग करके ईमेल भेजें, जैसे माइक्रोसॉफ्ट दृष्टिकोण।',
    'LBL_HOME_PHONE' => 'आवास फोन:',
    'LBL_WORK_PHONE' => 'कार्यस्थल फोन:',
    'LBL_EMPLOYEE_STATUS' => 'कर्मचारी स्थिति:',
    'LBL_PRIMARY_ADDRESS' => 'प्राथमिक पता:',
    'LBL_SAVED_SEARCH' => 'लेआउट विकल्प',
    'LBL_MESSENGER_ID' => 'आईएम नाम:',
    'LBL_MESSENGER_TYPE' => 'आईएम प्रकार:',
    'ERR_LAST_ADMIN_1' => 'कर्मचारी का नाम "',
    'ERR_LAST_ADMIN_2' => '" प्रशासक पहुंच वाला अंतिम कर्मचारी है। कम से कम एक कर्मचारी प्रशासक होना चाहिए।',
    'LNK_NEW_EMPLOYEE' => 'कर्मचारी बनाएँ',
    'LNK_EMPLOYEE_LIST' => 'कर्मचारी देखें',
    'ERR_DELETE_RECORD' => 'खाता हटाने के लिए आपको एक रिकॉर्ड संख्या निर्दिष्ट करनी होगी।',
    'LBL_LIST_EMPLOYEE_STATUS' => 'कर्मचारी स्थिति',

    'LBL_SUITE_LOGIN' => 'उपयोगकर्ता है',
    'LBL_RECEIVE_NOTIFICATIONS' => 'असाइनमेंट पर सूचित करें',
    'LBL_IS_ADMIN' => 'प्रशासक है',
    'LBL_GROUP' => 'समूह उपयोगकर्ता',
    'LBL_PHOTO' => 'फोटो',
    'LBL_DELETE_USER_CONFIRM' => 'यह कर्मचारी भी एक उपयोगकर्ता है. कर्मचारी रिकॉर्ड को हटाने से उपयोगकर्ता रिकॉर्ड भी हट जाएगा, और उपयोगकर्ता एप्लिकेशन तक नहीं पहुंच पाएगा। क्या आप इस रिकॉर्ड को हटाने के साथ आगे बढ़ना चाहते हैं?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'क्या आप वाकई इस कर्मचारी को हटाना चाहते हैं?',
    'LBL_ONLY_ACTIVE' => 'सक्रिय कर्मचारी',
    'LBL_SELECT' => 'चयन' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'प्रमाणीकरण आईडी',
    'LBL_EXT_AUTHENTICATE' => 'बाह्य प्रमाणीकरण',
    'LBL_GROUP_USER' => 'समूह उपयोगकर्ता',
    'LBL_LIST_ACCEPT_STATUS' => 'स्थिति स्वीकार करें',
    'LBL_MODIFIED_BY' => 'द्वारा संशोधित',
    'LBL_MODIFIED_BY_ID' => 'आईडी द्वारा संशोधित',
    'LBL_CREATED_BY_NAME' => 'के द्वारा बनाई गई', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'पोर्टल एपीआई उपयोगकर्ता',
    'LBL_PSW_MODIFIED' => 'पासवर्ड अंतिम बार बदला गया',
    'LBL_SHOW_ON_EMPLOYEES' => 'कर्मचारी रिकॉर्ड प्रदर्शित करें',
    'LBL_USER_HASH' => 'पासवर्ड',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'सिस्टम जनरेटेड पासवर्ड',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_FAX_PHONE' => 'फेक्स',
    'LBL_STATUS' => 'स्थिति',
    'LBL_ADDRESS_CITY' => 'पता शहर',
    'LBL_ADDRESS_COUNTRY' => 'पता देश',
    'LBL_ADDRESS_INFORMATION' => 'पते की जानकारी',
    'LBL_ADDRESS_POSTALCODE' => 'पता डाक कोड',
    'LBL_ADDRESS_STATE' => 'पता राज्य',
    'LBL_ADDRESS_STREET' => 'पता मार्ग',

    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_DATE_ENTERED' => 'दर्ज किया गया दिनांक',
    'LBL_DELETED' => 'हटाए गए',

    'LBL_BUTTON_SELECT' => 'चयन',
    'LBL_BUTTON_CLEAR' => 'साफ़ करें',

    'LBL_CONTACTS_SYNC' => 'सिंक से संपर्क करें',
    'LBL_OAUTH_TOKENS' => 'OAuth टोकन',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'प्रोजेक्ट शीर्षक से प्रोजेक्ट उपयोगकर्ता',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'संपर्क शीर्षक से परियोजना संपर्क',
    'LBL_ROLES' => 'भूमिकाओं',
    'LBL_SECURITYGROUPS' => 'सुरक्षा समूह',
    'LBL_PROSPECT_LIST' => 'संभावना सूची',

    'LBL_FACTOR_AUTH_INTERFACE' => 'दो कारक प्रमाणीकरण इंटरफ़ेस:',
    'LBL_EDITOR_TYPE' => 'संपादक',
);
