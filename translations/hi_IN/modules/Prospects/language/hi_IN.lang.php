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
    'LBL_MODULE_NAME' => 'लक्ष्यों को ',
    'LBL_MODULE_ID' => 'लक्ष्यों को ',
    'LBL_INVITEE' => 'प्रत्यक्ष रिपोर्ट',
    'LBL_MODULE_TITLE' => 'लक्ष्य: होम',
    'LBL_SEARCH_FORM_TITLE' => 'लक्ष्य खोज',
    'LBL_LIST_FORM_TITLE' => 'लक्ष्य सूची',
    'LBL_NEW_FORM_TITLE' => 'नया लक्ष्य',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_LAST_NAME' => 'परिवार का नाम',
    'LBL_LIST_TITLE' => 'कार्य शीर्षक',
    'LBL_LIST_EMAIL_ADDRESS' => 'ईमेल',
    'LBL_LIST_PHONE' => 'फोन',
    'LBL_LIST_FIRST_NAME' => 'पहला नाम:',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',
    'LBL_ASSIGNED_TO_ID' => 'को सौंपना:',
    'LBL_CAMPAIGN_ID' => 'अभियान आईडी',
    'LBL_EXISTING_ACCOUNT' => 'किसी मौजूदा खाते का उपयोग किया गया',
    'LBL_CREATED_ACCOUNT' => 'एक नया खाता बनाया',
    'LBL_CREATED_CALL' => 'एक नई कॉल बनाई गई',
    'LBL_CREATED_MEETING' => 'एक नई मीटिंग बनाई गई',
    'LBL_NAME' => 'नाम:',
    'LBL_PROSPECT_INFORMATION' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'अधिक जानकारी',
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_OFFICE_PHONE' => 'कार्यालयीन फोन:',
    'LBL_ANY_PHONE' => 'कोई भी फ़ोन:',
    'LBL_PHONE' => 'फ़ोन:',
    'LBL_LAST_NAME' => 'अंतिम नाम:',
    'LBL_MOBILE_PHONE' => 'गतिमान:',
    'LBL_HOME_PHONE' => 'घर:',
    'LBL_OTHER_PHONE' => 'अन्य फोन:',
    'LBL_FAX_PHONE' => 'फैक्स:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'प्राथमिक पता गली:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'प्राथमिक पता शहर:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'प्राथमिक पता देश:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'प्राथमिक पता राज्य:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'प्राथमिक पता डाक कोड:',
    'LBL_ALT_ADDRESS_STREET' => 'वैकल्पिक पता स्ट्रीट:',
    'LBL_ALT_ADDRESS_CITY' => 'वैकल्पिक पता शहर:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'वैकल्पिक पता देश:',
    'LBL_ALT_ADDRESS_STATE' => 'वैकल्पिक पता राज्य:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'वैकल्पिक पता डाक कोड:',
    'LBL_TITLE' => 'कार्य शीर्षक:',
    'LBL_DEPARTMENT' => 'विभाग:',
    'LBL_BIRTHDATE' => 'जन्मतिथि:',
    'LBL_EMAIL_ADDRESS' => 'ई-मेल पता:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'अन्य ईमेल:',
    'LBL_ANY_EMAIL' => 'कोई भी ईमेल:',
    'LBL_ASSISTANT' => 'सहायक:',
    'LBL_ASSISTANT_PHONE' => 'सहायक फ़ोन:',
    'LBL_DO_NOT_CALL' => 'फ़ोन मत करो:',
    'LBL_EMAIL_OPT_OUT' => 'ईमेल ऑप्ट आउट:',
    'LBL_PRIMARY_ADDRESS' => 'प्राथमिक पता:',
    'LBL_ALTERNATE_ADDRESS' => 'अन्य पता:',
    'LBL_ANY_ADDRESS' => 'कोई भी पता:',
    'LBL_CITY' => 'शहर:',
    'LBL_STATE' => 'राज्य/क्षेत्र:',
    'LBL_POSTAL_CODE' => 'डाक कोड:',
    'LBL_COUNTRY' => 'देश:',
    'LBL_ADDRESS_INFORMATION' => 'पते की जानकारी',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_OPP_NAME' => 'अवसर का नाम:',
    'LBL_IMPORT_VCARD' => 'वीकार्ड आयात करें',
    'LBL_IMPORT_VCARDTEXT' => 'अपने फ़ाइल सिस्टम से vCard आयात करके स्वचालित रूप से एक नया संपर्क बनाएं।',
    'LBL_DUPLICATE' => 'संभावित डुप्लिकेट लक्ष्य',
    'MSG_SHOW_DUPLICATES' => 'आप जो लक्ष्य रिकॉर्ड बनाने जा रहे हैं, वह पहले से मौजूद किसी लक्ष्य रिकॉर्ड का डुप्लिकेट हो सकता है। समान नाम और/या ईमेल पते वाले लक्ष्य रिकॉर्ड नीचे सूचीबद्ध हैं।<br>इस नए लक्ष्य को बनाना जारी रखने के लिए लक्ष्य बनाएँ पर क्लिक करें, या नीचे सूचीबद्ध किसी मौजूदा लक्ष्य का चयन करें।',
    'MSG_DUPLICATE' => 'आप जो लक्ष्य रिकॉर्ड बनाने जा रहे हैं, वह पहले से मौजूद लक्ष्य रिकॉर्ड का डुप्लिकेट हो सकता है। समान नाम और/या ईमेल पते वाले लक्ष्य रिकॉर्ड नीचे सूचीबद्ध हैं।<br>इस नए लक्ष्य को बनाना जारी रखने के लिए सहेजें पर क्लिक करें, या लक्ष्य बनाए बिना मॉड्यूल पर वापस लौटने के लिए रद्द करें पर क्लिक करें।',
    'LNK_IMPORT_VCARD' => 'वीकार्ड से बनाएं',
    'LNK_NEW_ACCOUNT' => 'खाता बनाएं',
    'LNK_NEW_OPPORTUNITY' => 'अवसर बनाएँ',
    'LNK_NEW_CASE' => 'केस बनाएं',
    'LNK_NEW_NOTE' => 'नोट या अनुलग्नक बनाएँ',
    'LNK_NEW_CALL' => 'कॉल लॉग करें',
    'LNK_NEW_EMAIL' => 'ईमेल संग्रहित करें',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'LNK_NEW_APPOINTMENT' => 'अपॉइंटमेंट बनाएं',
    'LNK_IMPORT_PROSPECTS' => 'आयात लक्ष्य',
    'NTC_DELETE_CONFIRMATION' => 'क्या आप वाकई इस रिकॉर्ड को हटाना चाहते हैं?',
    'NTC_REMOVE_CONFIRMATION' => 'क्या आप वाकई इस संपर्क को केस से हटाना चाहते हैं?',
    'ERR_DELETE_RECORD' => 'संपर्क को हटाने के लिए रिकॉर्ड संख्या निर्दिष्ट की जानी चाहिए.',
    'LBL_SALUTATION' => 'अभिवादन',
    'LBL_CREATED_OPPORTUNITY' => 'एक नया अवसर बनाया',
    'LNK_SELECT_ACCOUNT' => "खाता चुनें",
    'LNK_NEW_PROSPECT' => 'लक्ष्य बनाएं',
    'LNK_PROSPECT_LIST' => 'लक्ष्य देखें',
    'LNK_NEW_CAMPAIGN' => 'अभियान बनाएँ',
    'LNK_CAMPAIGN_LIST' => 'अभीयाँन ',
    'LNK_NEW_PROSPECT_LIST' => 'लक्ष्य सूची बनाएं',
    'LNK_PROSPECT_LIST_LIST' => 'लक्ष्य सूचियाँ',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'चुने गए लक्ष्य चुनें',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'चुने गए लक्ष्य चुनें',
    'LBL_INVALID_EMAIL' => 'अमान्य ईमेल:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'लक्ष्यों को ',
    'LBL_PROSPECT_LIST' => 'संभावना सूची',
    'LBL_CONVERT_BUTTON_TITLE' => 'लक्ष्य परिवर्तित करें',
    'LBL_CONVERT_BUTTON_LABEL' => 'लक्ष्य परिवर्तित करें',
    'LNK_NEW_CONTACT' => 'नया संपर्क',
    'LBL_CREATED_CONTACT' => "एक नया संपर्क बनाया गया",
    'LBL_CAMPAIGNS' => 'अभीयाँन ',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'अभियान लॉग ',
    'LBL_TRACKER_KEY' => 'ट्रैकर कुंजी',
    'LBL_LEAD_ID' => 'लीड आईडी',
    'LBL_CONVERTED_LEAD' => 'परिवर्तित लीड',
    'LBL_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_EDIT_ACCOUNT_NAME' => 'खाते का नाम:',
    'LBL_CREATED_USER' => 'उपयोगकर्ता बनाया गया',
    'LBL_MODIFIED_USER' => 'संशोधित उपयोगकर्ता',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'घटना ',
);
