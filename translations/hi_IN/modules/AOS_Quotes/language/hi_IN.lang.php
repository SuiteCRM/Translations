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
    'LBL_ASSIGNED_TO_ID' => 'पहचानकर्ता कुंजी:
$मॉड_स्ट्रिंग्स [लेबल_असाइन_टू_आईडी\']
$मॉड_स्ट्रिंग्स [लेबल_असाइन_टू_आईडी\']',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',
    'LBL_ID' => 'आईडी',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'शीर्षक',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'ERR_DELETE_RECORD' => 'खाता हटाने के लिए एक रिकॉर्ड संख्या निर्दिष्ट की जानी चाहिए।',
    'LBL_ACCOUNT_NAME' => 'शीर्षक',
    'LBL_ACCOUNT' => 'कंपनी:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_ADDRESS_INFORMATION' => 'पते की जानकारी',
    'LBL_ANNUAL_REVENUE' => 'वार्षिक राजस्व:',
    'LBL_ANY_ADDRESS' => 'कोई भी पता:',
    'LBL_ANY_EMAIL' => 'कोई भी ईमेल:',
    'LBL_ANY_PHONE' => 'कोई भी फ़ोन:',
    'LBL_RATING' => 'दर',
    'LBL_ASSIGNED_USER' => 'उपयोगकर्ता',
    'LBL_BILLING_ADDRESS_CITY' => 'बिलिंग शहर:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'बिलिंग देश:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'बिलिंग डाक कोड:',
    'LBL_BILLING_ADDRESS_STATE' => 'बिलिंग राज्य:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'बिलिंग स्ट्रीट 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'बिलिंग स्ट्रीट 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'बिलिंग स्ट्रीट 4',
    'LBL_BILLING_ADDRESS_STREET' => 'बिलिंग स्ट्रीट:',
    'LBL_BILLING_ADDRESS' => 'बिलिंग पता:',
    'LBL_ACCOUNT_INFORMATION' => 'संग्रह',
    'LBL_CITY' => 'शहर:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_COUNTRY' => 'देश:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'खाता',
    'LBL_DUPLICATE' => 'संभावित डुप्लिकेट खाता',
    'LBL_EMAIL' => 'ईमेल:',
    'LBL_EMPLOYEES' => 'कर्मचारी:',
    'LBL_FAX' => 'फैक्स:',
    'LBL_INDUSTRY' => 'उद्योग:',
    'LBL_LIST_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_LIST_CITY' => 'शहर',
    'LBL_LIST_EMAIL_ADDRESS' => 'ईमेल पता',
    'LBL_LIST_PHONE' => 'फोन',
    'LBL_LIST_STATE' => 'राज्य',
    'LBL_MEMBER_OF' => 'के सदस्य:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'सदस्य संगठन',
    'LBL_OTHER_EMAIL_ADDRESS' => 'अन्य ईमेल:',
    'LBL_OTHER_PHONE' => 'अन्य फोन:',
    'LBL_OWNERSHIP' => 'मालिकी:',
    'LBL_PARENT_ACCOUNT_ID' => 'मूल खाता आईडी',
    'LBL_PHONE_ALT' => 'वैकल्पिक फ़ोन:',
    'LBL_PHONE_FAX' => 'फ़ोन फैक्स:',
    'LBL_PHONE_OFFICE' => 'फ़ोन कार्यालय:',
    'LBL_PHONE' => 'फ़ोन:',
    'LBL_POSTAL_CODE' => 'डाक कोड:',
    'LBL_SAVE_ACCOUNT' => 'खाता सहेजें',
    'LBL_SHIPPING_ADDRESS_CITY' => 'शिपिंग शहर:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'शिपिंग देश:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'शिपिंग डाक कोड:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'शिपिंग स्थिति:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'शिपिंग स्ट्रीट 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'शिपिंग स्ट्रीट 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'शिपिंग स्ट्रीट 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'शिपिंग स्ट्रीट:',
    'LBL_SHIPPING_ADDRESS' => 'शिपिंग पता:',
    'LBL_STATE' => 'राज्य/क्षेत्र:',
    'LBL_TICKER_SYMBOL' => 'टिकर प्रतीक:',
    'LBL_TYPE' => 'प्रकार:',
    'LBL_WEBSITE' => 'वेबसाइट:',
    'LNK_ACCOUNT_LIST' => 'खाता',
    'LNK_NEW_ACCOUNT' => 'खाता बनाएं',
    'MSG_DUPLICATE' => 'इस खाते को बनाने से संभावित रूप से डुप्लिकेट खाता बन सकता है। आप या तो नीचे दी गई सूची से एक खाता चुन सकते हैं या पहले दर्ज किए गए डेटा के साथ एक नया खाता बनाना जारी रखने के लिए सेव पर क्लिक कर सकते हैं।',
    'MSG_SHOW_DUPLICATES' => 'इस खाते को बनाने से संभावित रूप से डुप्लिकेट खाता बन सकता है। पहले दर्ज किए गए डेटा के साथ यह नया खाता बनाना जारी रखने के लिए आप या तो सहेजें पर क्लिक कर सकते हैं या रद्द करें पर क्लिक कर सकते हैं।',
    'NTC_DELETE_CONFIRMATION' => 'क्या आप वाकई इस रिकॉर्ड को हटाना चाहते हैं?',
    'LBL_LIST_FORM_TITLE' => 'उद्धरण सूची',
    'LBL_MODULE_NAME' => 'उद्धरण',
    'LBL_MODULE_TITLE' => 'उद्धरण सूची',
    'LBL_HOMEPAGE_TITLE' => 'मेरे उद्धरण',
    'LNK_NEW_RECORD' => 'उद्धरण बनाएँ',
    'LNK_LIST' => 'उद्धरण देखें',
    'LBL_SEARCH_FORM_TITLE' => 'उद्धरण खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_NEW_FORM_TITLE' => 'नया उद्धरण',
    'LBL_TERMS_C' => 'मामले',
    'LBL_APPROVAL_ISSUE' => 'अनुमोदन मुद्दे',
    'LBL_APPROVAL_STATUS' => 'अनुमोदन स्थिति',
    'LBL_BILLING_ACCOUNT' => 'लेखा',
    'LBL_BILLING_CONTACT' => 'संपर्क करें',
    'LBL_EXPIRATION' => 'तब तक वैध',
    'LBL_QUOTE_NUMBER' => 'उद्धरण संख्या',
    'LBL_OPPORTUNITY' => 'अवसर',
    'LBL_TEMPLATE_DDOWN_C' => 'उद्धरण टेम्पलेट',
    'LBL_STAGE' => 'उद्धरण चरण',
    'LBL_TERM' => 'भुगतान की शर्तें',
    'LBL_SUBTOTAL_AMOUNT' => 'उप-योग',
    'LBL_DISCOUNT_AMOUNT' => 'छूट',
    'LBL_TAX_AMOUNT' => 'कर',
    'LBL_SHIPPING_AMOUNT' => 'शिपिंग',
    'LBL_TOTAL_AMT' => 'कुल',
    'VALUE' => 'शीर्षक',
    'LBL_EMAIL_ADDRESSES' => 'ई-मेल पते:',
    'LBL_LINE_ITEMS' => 'पंक्ति वस्तुएँ',
    'LBL_GRAND_TOTAL' => 'कुल योग',
    'LBL_INVOICE_STATUS' => 'चालान स्थिति',
    'LBL_PRODUCT_QUANITY' => 'मात्रा',
    'LBL_PRODUCT_NAME' => 'उत्पाद',
    'LBL_PART_NUMBER' => 'भाग संख्या',
    'LBL_PRODUCT_NOTE' => 'ध्यान दें',
    'LBL_PRODUCT_DESCRIPTION' => 'विवरण',
    'LBL_LIST_PRICE' => 'सूची',
    'LBL_DISCOUNT_AMT' => 'छूट',
    'LBL_UNIT_PRICE' => 'विक्रय कीमत',
    'LBL_TOTAL_PRICE' => 'कुल',
    'LBL_VAT' => 'कर', // VAT
    'LBL_VAT_AMT' => 'कर राशि', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'उत्पाद पंक्ति जोड़ें',
    'LBL_SERVICE_NAME' => 'सेवा',
    'LBL_SERVICE_LIST_PRICE' => 'सूची',
    'LBL_SERVICE_PRICE' => 'विक्रय कीमत',
    'LBL_SERVICE_DISCOUNT' => 'छूट',
    'LBL_ADD_SERVICE_LINE' => 'सर्विस लाइन जोड़ें ',
    'LBL_REMOVE_PRODUCT_LINE' => 'हटाऐं',
    'LBL_CONVERT_TO_INVOICE' => 'चालान में कनवर्ट करें',
    'LBL_PRINT_AS_PDF' => 'पीडीएफ के रूप में प्रिंट करें',
    'LBL_EMAIL_QUOTE' => 'ईमेल कोटेशन',
    'LBL_CREATE_CONTRACT' => 'अनुबंध बनाएं',
    'LBL_LIST_NUM' => 'संख्या',
    'LBL_PDF_NAME' => 'उद्धरण',
    'LBL_EMAIL_NAME' => 'बोली',
    'LBL_QUOTE_DATE' => 'बोली की तारीख',
    'LBL_NO_TEMPLATE' => 'त्रुटि\nकोई टेम्प्लेट नहीं मिला. यदि आपने कोट टेम्प्लेट नहीं बनाया है, तो पीडीएफ टेम्प्लेट मॉड्यूल पर जाएं और एक बनाएं',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'उप योग + कर',//pre shipping
    'LBL_EMAIL_PDF' => 'ईमेल पीडीएफ',
    'LBL_ADD_GROUP' => 'समूह जोड़ें',
    'LBL_DELETE_GROUP' => 'समूह हटाएँ',
    'LBL_GROUP_NAME' => 'समूह नाम',
    'LBL_GROUP_TOTAL' => 'समूह कुल',
    'LBL_SHIPPING_TAX' => 'शिपिंग टैक्स',
    'LBL_SHIPPING_TAX_AMT' => 'शिपिंग टैक्स',
    'LBL_IMPORT_LINE_ITEMS' => 'पंक्ति वस्तुएँ आयात करें',
    'LBL_CREATE_OPPORTUNITY' => 'अवसर बनाएँ',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'उपयोग (डिफ़ॉल्ट मुद्रा)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'छूट (डिफ़ॉल्ट मुद्रा)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'कर (डिफ़ॉल्ट मुद्रा)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'शिपिंग (डिफ़ॉल्ट मुद्रा)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'कुल (डिफ़ॉल्ट मुद्रा)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'शिपिंग टैक्स (डिफ़ॉल्ट मुद्रा)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'कुल योग (डिफ़ॉल्ट मुद्रा)',
    'LBL_QUOTE_TO' => 'उद्धरण के लिए',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'उपयोग + कर (डिफ़ॉल्ट मुद्रा)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'उद्धरण: अनुबंध',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'उद्धरण: चालान',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'लाइन आइटम समूह',
    'LBL_AOS_PRODUCT_QUOTES' => 'उत्पाद उद्धरण',
    'LBL_AOS_QUOTES_PROJECT' => 'उद्धरण: परियोजना',
);
