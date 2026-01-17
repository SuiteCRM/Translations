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
    'ERR_DELETE_RECORD' => 'खाता हटाने के लिए एक रिकॉर्ड संख्या निर्दिष्ट की जानी चाहिए।',
    'LBL_ACCOUNT_NAME' => 'कंपनी का नाम:',
    'LBL_ACCOUNT' => 'कंपनी:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_ADDRESS_INFORMATION' => 'पते की जानकारी',
    'LBL_ANNUAL_REVENUE' => 'वार्षिक राजस्व:',
    'LBL_ANY_ADDRESS' => 'कोई भी पता:',
    'LBL_ANY_EMAIL' => 'कोई भी ईमेल:',
    'LBL_EMAIL_NON_PRIMARY' => 'गैर प्राथमिक ई-मेल',
    'LBL_ANY_PHONE' => 'कोई भी फ़ोन:',
    'LBL_ASSIGNED_TO_NAME' => 'उपयोगकर्ता:',
    'LBL_RATING' => 'दर',
    'LBL_ASSIGNED_TO' => 'को असाइन किया:',
    'LBL_ASSIGNED_USER' => 'को असाइन किया:',
    'LBL_ASSIGNED_TO_ID' => 'को असाइन किया:',
    'LBL_BILLING_ADDRESS_CITY' => 'बिलिंग शहर:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'बिलिंग देश:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'बिलिंग डाक कोड:',
    'LBL_BILLING_ADDRESS_STATE' => 'बिलिंग राज्य:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'बिलिंग स्ट्रीट 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'बिलिंग स्ट्रीट 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'बिलिंग स्ट्रीट 4',
    'LBL_BILLING_ADDRESS_STREET' => 'बिलिंग स्ट्रीट:',
    'LBL_BILLING_ADDRESS' => 'बिलिंग पता:',
    'LBL_ACCOUNT_INFORMATION' => 'कारखाना की जानकारी',
    'LBL_CITY' => 'शहर:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_COUNTRY' => 'देश:',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक:',
    'LBL_DATE_MODIFIED' => 'संशोधन दिनांक:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'खाता',
    'LBL_DESCRIPTION_INFORMATION' => 'विवरण जानकारी',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_DUPLICATE' => 'संभावित डुप्लिकेट खाता',
    'LBL_EMAIL' => 'ई-मेल पता:',
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
    'LBL_NAME' => 'नाम:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'अन्य ईमेल:',
    'LBL_OTHER_PHONE' => 'अन्य फोन:',
    'LBL_OWNERSHIP' => 'मालिकी:',
    'LBL_PARENT_ACCOUNT_ID' => 'मूल खाता आईडी',
    'LBL_PHONE_ALT' => 'वैकल्पिक फ़ोन:',
    'LBL_PHONE_FAX' => 'फ़ोन फैक्स:',
    'LBL_PHONE_OFFICE' => 'कार्यालयीन फोन:',
    'LBL_PHONE' => 'फ़ोन:',
    'LBL_EMAIL_ADDRESS' => 'ईमेल पता',
    'LBL_EMAIL_ADDRESSES' => 'ईमेल पता',
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

    'LBL_STATE' => 'राज्य:',
    'LBL_TICKER_SYMBOL' => 'टिकर प्रतीक:',
    'LBL_TYPE' => 'प्रकार:',
    'LBL_WEBSITE' => 'वेबसाइट:',

    'LNK_ACCOUNT_LIST' => 'खाता',
    'LNK_NEW_ACCOUNT' => 'खाता बनाएं',

    'MSG_DUPLICATE' => 'आप जो खाता रिकॉर्ड बनाने जा रहे हैं वह पहले से मौजूद खाता रिकॉर्ड का डुप्लिकेट हो सकता है। समान नामों वाले खाता रिकॉर्ड नीचे सूचीबद्ध हैं।<br>इस नए खाते को बनाना जारी रखने के लिए खाता बनाएं पर क्लिक करें, या नीचे सूचीबद्ध किसी मौजूदा खाते का चयन करें।',
    'MSG_SHOW_DUPLICATES' => 'आप जो खाता रिकॉर्ड बनाने जा रहे हैं वह पहले से मौजूद खाता रिकॉर्ड का डुप्लिकेट हो सकता है। समान नामों वाले खाता रिकॉर्ड नीचे सूचीबद्ध हैं।<br>इस नए खाते को बनाना जारी रखने के लिए सहेजें पर क्लिक करें, या खाता बनाए बिना मॉड्यूल पर लौटने के लिए रद्द करें पर क्लिक करें।',

    'NTC_DELETE_CONFIRMATION' => 'क्या आप वाकई इस रिकॉर्ड को हटाना चाहते हैं?',

    'LBL_EDIT_BUTTON' => 'संपादन करना  ',
    'LBL_REMOVE' => 'हटाऐं',

);
