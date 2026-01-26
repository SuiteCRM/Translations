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
    'LBL_ASSIGNED_TO_NAME' => 'संविदा प्रबंधक',
    'LBL_CONTRACT_ACCOUNT' => 'लेखा',
    'LBL_OPPORTUNITY' => 'अवसर',
    'LBL_ID' => 'आईडी',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_MODIFIED' => 'द्वारा संशोधित',
    'LBL_MODIFIED_NAME' => 'नाम से संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाई गई',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'अनुबंध शीर्षक',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_LIST_FORM_TITLE' => 'अनुबंध सूची',
    'LBL_MODULE_NAME' => 'अनुबंध',
    'LBL_MODULE_TITLE' => 'अनुबंध: घर',
    'LBL_HOMEPAGE_TITLE' => 'मेरे अनुबंध',
    'LNK_NEW_RECORD' => 'अनुबंध बनाएं',
    'LNK_LIST' => 'अनुबंध देखें',
    'LBL_SEARCH_FORM_TITLE' => 'अनुबंध खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नया अनुबंध',
    'LBL_CONTRACT_NAME' => 'अनुबंध का नाम',
    'LBL_REFERENCE_CODE ' => 'संदर्भ कोड ',
    'LBL_START_DATE' => 'आरंभ करने की तिथि',
    'LBL_END_DATE' => 'समाप्ति दिनांक',
    'LBL_TOTAL_CONTRACT_VALUE' => 'अनुबंध मूल्य',
    'LBL_STATUS' => 'स्थिति',
    'LBL_CUSTOMER_SIGNED_DATE' => 'ग्राहक द्वारा हस्ताक्षरित दिनांक',
    'LBL_COMPANY_SIGNED_DATE' => 'कंपनी हस्ताक्षरित तिथि',
    'LBL_RENEWAL_REMINDER' => ' अनुबंध नवीनीकरण अनुस्मारक',
    'LBL_RENEWAL_REMINDER_DATE' => 'नवीनीकरण अनुस्मारक दिनांक',
    'LBL_CONTRACT_TYPE' => 'करार का प्रकार',
    'LBL_CONTACT' => 'संपर्क करें',
    'LBL_ADD_GROUP' => 'समूह जोड़ें',
    'LBL_DELETE_GROUP' => 'समूह हटाएँ',
    'LBL_GROUP_NAME' => 'समूह नाम',
    'LBL_GROUP_TOTAL' => 'समूह कुल',
    'LBL_PRODUCT_QUANITY' => 'मात्रा',
    'LBL_PRODUCT_NAME' => 'उत्पाद',
    'LBL_PART_NUMBER' => 'भाग संख्या',
    'LBL_PRODUCT_NOTE' => 'ध्यान दें',
    'LBL_PRODUCT_DESCRIPTION' => 'विवरण',
    'LBL_LIST_PRICE' => 'सूची',
    'LBL_DISCOUNT_AMT' => 'छूट',
    'LBL_UNIT_PRICE' => 'विक्रय कीमत',
    'LBL_TOTAL_PRICE' => 'कुल',
    'LBL_VAT' => 'कर',
    'LBL_VAT_AMT' => 'कर राशि',
    'LBL_SERVICE_NAME' => 'सेवा',
    'LBL_SERVICE_LIST_PRICE' => 'सूची',
    'LBL_SERVICE_PRICE' => 'विक्रय कीमत',
    'LBL_SERVICE_DISCOUNT' => 'छूट',
    'LBL_LINE_ITEMS' => 'पंक्ति वस्तुएँ',
    'LBL_SUBTOTAL_AMOUNT' => 'उप-योग',
    'LBL_DISCOUNT_AMOUNT' => 'छूट',
    'LBL_TAX_AMOUNT' => 'कर',
    'LBL_SHIPPING_AMOUNT' => 'शिपिंग',
    'LBL_TOTAL_AMT' => 'कुल',
    'LBL_GRAND_TOTAL' => 'कुल योग',
    'LBL_SHIPPING_TAX' => 'शिपिंग टैक्स',
    'LBL_SHIPPING_TAX_AMT' => 'शिपिंग टैक्स',
    'LBL_ADD_PRODUCT_LINE' => 'उत्पाद पंक्ति जोड़ें',
    'LBL_ADD_SERVICE_LINE' => 'सर्विस लाइन जोड़ें ',
    'LBL_PRINT_AS_PDF' => 'पीडीएफ के रूप में प्रिंट करें',
    'LBL_EMAIL_PDF' => 'ईमेल पीडीएफ',
    'LBL_PDF_NAME' => 'अनुबंध',
    'LBL_EMAIL_NAME' => 'के लिए अनुबंध',
    'LBL_NO_TEMPLATE' => 'त्रुटि\nकोई टेम्प्लेट नहीं मिला. यदि आपने कोई कॉन्ट्रैक्ट टेम्प्लेट नहीं बनाया है, तो पीडीएफ टेम्प्लेट मॉड्यूल पर जाएं और एक बनाएं',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'अनुबंध मूल्य (डिफ़ॉल्ट मुद्रा)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'उपयोग (डिफ़ॉल्ट मुद्रा)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'छूट (डिफ़ॉल्ट मुद्रा)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'कर (डिफ़ॉल्ट मुद्रा)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'शिपिंग (डिफ़ॉल्ट मुद्रा)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'कुल (डिफ़ॉल्ट मुद्रा)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'शिपिंग टैक्स (डिफ़ॉल्ट मुद्रा)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'कुल योग (डिफ़ॉल्ट मुद्रा)',

    'LBL_CALL_ID' => 'कॉल आईडी',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'लाइन आइटम समूह',
    'LBL_AOS_PRODUCT_QUOTES' => 'उत्पाद उद्धरण',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'उद्धरण: अनुबंध',
);
