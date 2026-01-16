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
    'ERR_DELETE_RECORD' => 'संपर्क हटाने के लिए रिकॉर्ड नंबर निर्दिष्ट करें.',
    'LBL_ACCOUNT_ID' => 'खाता पहचान:',
    'LBL_ACCOUNT_NAME' => 'खाते का नाम:',
    'LBL_CAMPAIGN' => 'अभियान:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_ADDRESS_INFORMATION' => 'पते की जानकारी',
    'LBL_ALT_ADDRESS_CITY' => 'वैकल्पिक पता शहर:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'वैकल्पिक पता देश:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'वैकल्पिक पता डाक कोड:',
    'LBL_ALT_ADDRESS_STATE' => 'वैकल्पिक पता राज्य:',
    'LBL_ALT_ADDRESS_STREET_2' => 'वैकल्पिक पता पंक्ति 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'प्राथमिक पता पंक्ति 3:',
    'LBL_ALT_ADDRESS_STREET' => 'वैकल्पिक पता स्ट्रीट:',
    'LBL_ALTERNATE_ADDRESS' => 'अन्य पता:',
    'LBL_ALT_ADDRESS' => 'अन्य पता:',
    'LBL_ANY_ADDRESS' => 'कोई भी पता:',
    'LBL_ANY_EMAIL' => 'कोई भी ईमेल:',
    'LBL_ANY_PHONE' => 'कोई भी फ़ोन:',
    'LBL_ASSIGNED_TO_NAME' => 'को असाइन किया:',
    'LBL_ASSIGNED_TO_ID' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_ASSISTANT_PHONE' => 'सहायक फ़ोन:',
    'LBL_ASSISTANT' => 'सहायक:',
    'LBL_BIRTHDATE' => 'जन्मतिथि:',
    'LBL_CITY' => 'शहर:',
    'LBL_CAMPAIGN_ID' => 'अभियान आईडी',
    'LBL_CONTACT_INFORMATION' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'संपर्क नाम:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'संपर्क-अवसर:',
    'LBL_CONTACT_ROLE' => 'भूमिका:',
    'LBL_CONTACT' => 'संपर्कः',
    'LBL_COUNTRY' => 'देश:',
    'LBL_CREATED_ACCOUNT' => 'एक नया खाता बनाया',
    'LBL_CREATED_CALL' => 'एक नई कॉल बनाई गई',
    'LBL_CREATED_CONTACT' => 'एक नया संपर्क बनाया गया',
    'LBL_CREATED_MEETING' => 'एक नई मीटिंग बनाई गई',
    'LBL_CREATED_OPPORTUNITY' => 'एक नया अवसर बनाया',
    'LBL_DATE_MODIFIED' => 'संशोधन दिनांक:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_DEPARTMENT' => 'विभाग:',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'प्रत्यक्ष रिपोर्ट',
    'LBL_DO_NOT_CALL' => 'फ़ोन मत करो:',
    'LBL_DUPLICATE' => 'संभावित डुप्लिकेट संपर्क',
    'LBL_EMAIL_ADDRESS' => 'ई-मेल पता:',
    'LBL_EMAIL_OPT_OUT' => 'ईमेल ऑप्ट आउट:',
    'LBL_EXISTING_ACCOUNT' => 'किसी मौजूदा खाते का उपयोग किया गया',
    'LBL_EXISTING_CONTACT' => 'किसी मौजूदा संपर्क का उपयोग किया गया',
    'LBL_EXISTING_OPPORTUNITY' => 'मौजूदा अवसर का उपयोग किया',
    'LBL_FAX_PHONE' => 'फैक्स:',
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास',
    'LBL_HOME_PHONE' => 'घर:',
    'LBL_ID' => 'आईडी:',
    'LBL_IMPORT_VCARD' => 'वीकार्ड आयात करें',
    'LBL_VCARD' => 'वीपत्रक',
    'LBL_IMPORT_VCARDTEXT' => 'अपने फ़ाइल सिस्टम से vCard आयात करके स्वचालित रूप से एक नया संपर्क बनाएं।',
    'LBL_INVALID_EMAIL' => 'अमान्य ईमेल:',
    'LBL_INVITEE' => 'प्रत्यक्ष रिपोर्ट',
    'LBL_LAST_NAME' => 'अंतिम नाम:',
    'LBL_LEAD_SOURCE' => 'लीड स्रोत:',
    'LBL_LIST_ACCEPT_STATUS' => 'स्थिति स्वीकार करें',
    'LBL_LIST_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_LIST_CONTACT_NAME' => 'संपर्क नाम',
    'LBL_LIST_CONTACT_ROLE' => 'भूमिका',
    'LBL_LIST_EMAIL_ADDRESS' => 'ईमेल',
    'LBL_LIST_FIRST_NAME' => 'पहला नाम:',
    'LBL_LIST_FORM_TITLE' => 'संपर्क सूची',
    'LBL_LIST_LAST_NAME' => 'परिवार का नाम',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_PHONE' => 'कार्यालय फ़ोन',
    'LBL_LIST_TITLE' => 'कार्य शीर्षक',
    'LBL_MOBILE_PHONE' => 'गतिमान:',
    'LBL_MODIFIED' => 'द्वारा संशोधित:',
    'LBL_MODULE_NAME' => 'संपर्कों',
    'LBL_MODULE_TITLE' => 'संपर्क: घर',
    'LBL_NAME' => 'नाम:',
    'LBL_NEW_FORM_TITLE' => 'नया संपर्क',
    'LBL_NOTE_SUBJECT' => 'नोट विषय',
    'LBL_OFFICE_PHONE' => 'कार्यालयीन फोन:',
    'LBL_OPP_NAME' => 'अवसर का नाम:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'अवसर भूमिका आईडी:',
    'LBL_OPPORTUNITY_ROLE' => 'अवसर भूमिका',
    'LBL_OTHER_EMAIL_ADDRESS' => 'अन्य ईमेल:',
    'LBL_OTHER_PHONE' => 'अन्य फोन:',
    'LBL_PHONE' => 'फ़ोन:',
    'LBL_PORTAL_APP' => 'पोर्टल आवेदन:',
    'LBL_PORTAL_INFORMATION' => 'पोर्टल सूचना',
    'LBL_PORTAL_NAME' => 'पोर्टल का नाम:',
    'LBL_STREET' => 'स्ट्रीट',
    'LBL_POSTAL_CODE' => 'डाक कोड:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'प्राथमिक पता शहर:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'प्राथमिक पता देश:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'प्राथमिक पता डाक कोड:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'प्राथमिक पता राज्य:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'प्राथमिक पता पंक्ति 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'प्राथमिक पता पंक्ति 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'प्राथमिक पता गली:',
    'LBL_PRIMARY_ADDRESS' => 'प्राथमिक पता:',
    'LBL_PRODUCTS_TITLE' => 'उत्पादों',
    'LBL_REPORTS_TO_ID' => 'आईडी को रिपोर्ट:',
    'LBL_REPORTS_TO' => 'इन्हें रिपोर्ट करें:',
    'LBL_RESOURCE_NAME' => 'संसाधन का नाम',
    'LBL_SALUTATION' => 'अभिवादन:',
    'LBL_SAVE_CONTACT' => 'संपर्क सहेजें',
    'LBL_SEARCH_FORM_TITLE' => 'खोज से संपर्क करें',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'जाँचे गए संपर्क चुनें',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'जाँचे गए संपर्क चुनें',
    'LBL_STATE' => 'राज्य/क्षेत्र:',
    'LBL_SYNC_CONTACT' => 'आउटलुक से सिंक करें&reg;:',
    'LBL_PROSPECT_LIST' => 'संभावना सूची',
    'LBL_TITLE' => 'कार्य शीर्षक:',
    'LNK_CONTACT_LIST' => 'संपर्क देखें',
    'LNK_IMPORT_VCARD' => 'Vcard से संपर्क बनाएं',
    'LNK_NEW_ACCOUNT' => 'खाता बनाएं',
    'LNK_NEW_APPOINTMENT' => 'अपॉइंटमेंट बनाएं',
    'LNK_NEW_CALL' => 'कॉल लॉग करें',
    'LNK_NEW_CASE' => 'केस बनाएं',
    'LNK_NEW_CONTACT' => 'नया कोन्टैक्ट बनाएँ',
    'LNK_NEW_EMAIL' => 'ईमेल संग्रहित करें',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_NEW_NOTE' => 'नोट बनाएँ',
    'LNK_NEW_OPPORTUNITY' => 'अवसर बनाएँ',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'LNK_SELECT_ACCOUNT' => "खाता चुनें",
    'NTC_DELETE_CONFIRMATION' => 'क्या आप वाकई इस रिकॉर्ड को हटाना चाहते हैं?',
    'NTC_SNOOZE_CONFIRMATION' => 'क्या आप वाकई स्नूज़ करना चाहते हैं?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'अवसर बनाने के लिए एक खाते की आवश्यकता होती है।\n कृपया या तो एक नया खाता बनाएं या कोई मौजूदा खाता चुनें।',
    'NTC_REMOVE_CONFIRMATION' => 'क्या आप वाकई इस संपर्क को केस से हटाना चाहते हैं?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'नेतृत्व',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'मौक़े ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'दस्तावेज',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'प्राथमिक पते पर कॉपी करें',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'अन्य पते पर कॉपी करें',

    'LBL_CASES_SUBPANEL_TITLE' => 'मांमले ',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Galatiya',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'परियोजना ',
    'LBL_PROJECTS_RESOURCES' => 'परियोजना संसाधन',
    'LBL_CAMPAIGNS' => 'अभीयाँन ',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'अभीयाँन ',
    'LBL_LIST_CITY' => 'शहर',
    'LBL_LIST_STATE' => 'राज्य',
    'LBL_HOMEPAGE_TITLE' => 'मेरे संपर्क',
    'LBL_OPPORTUNITIES' => 'मौक़े ',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'परियोजना ',
    'LNK_IMPORT_CONTACTS' => 'संपर्क आयात करें',

    // SNIP
    'LBL_USER_SYNC' => 'उपयोगकर्ता समन्वयन',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'घटना ',

    'LBL_AOP_CASE_UPDATES' => 'केस अपडेट',
    'LBL_CREATE_PORTAL_USER' => 'पोर्टल उपयोगकर्ता बनाएं',
    'LBL_ENABLE_PORTAL_USER' => 'पोर्टल उपयोगकर्ता सक्षम करें',
    'LBL_DISABLE_PORTAL_USER' => 'पोर्टल उपयोगकर्ता को अक्षम करें',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'पोर्टल उपयोगकर्ता बनाने में विफल',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'पोर्टल उपयोगकर्ता को सक्षम करने में विफल',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'पोर्टल उपयोगकर्ता को अक्षम करने में विफल',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'पोर्टल उपयोगकर्ता बनाया गया',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'सक्षम पोर्टल उपयोगकर्ता',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'अक्षम पोर्टल उपयोगकर्ता',
    'LBL_NO_JOOMLA_URL' => 'कोई पोर्टल URL निर्दिष्ट नहीं है',
    'LBL_PORTAL_USER_TYPE' => 'पोर्टल उपयोगकर्ता प्रकार',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'खाता निष्क्रिय किया गया',
    'LBL_JOOMLA_ACCOUNT_ID' => 'जूमला खाता आईडी',

    'LBL_AOS_CONTRACTS' => 'अनुबंध',
    'LBL_AOS_INVOICES' => 'बीजक',
    'LBL_AOS_QUOTES' => 'उद्धरण',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'प्रोजेक्ट शीर्षक से प्रोजेक्ट संपर्क',
    'LBL_LAST_MEETING' => 'आपकी अंतिम बातचीत निम्नलिखित पर एक बैठक थी:',
    'LBL_LAST_CALL' => 'आपकी अंतिम बातचीत एक कॉल थी:',
    'LBL_LAST_EMAIL' => 'आपकी अंतिम बातचीत एक ईमेल थी:',
    'LBL_NO_INTERACTION' => 'आपको अभी तक इस संपर्क से बातचीत नहीं करनी है.',

    'LBL_LIST_INVITE_STATUS' => 'आमंत्रण स्थिति',
);
