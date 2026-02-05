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
    'LBL_DESCRIPTION' => 'ध्यान दें',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_NAME' => 'नाम',
    'LBL_CREATED_USER' => 'उपयोगकर्ता द्वारा बनाया गया',
    'LBL_MODIFIED_USER' => 'उपयोगकर्ता द्वारा संशोधित',
    'LBL_LIST_FORM_TITLE' => 'उत्पाद उद्धरण सूची',
    'LBL_MODULE_NAME' => 'पंक्ति वस्तुएँ',
    'LBL_MODULE_TITLE' => 'उत्पाद उद्धरण: घर',
    'LBL_HOMEPAGE_TITLE' => 'मेरे उत्पाद उद्धरण',
    'LNK_NEW_RECORD' => 'उत्पाद उद्धरण बनाएँ',
    'LNK_LIST' => 'उत्पाद उद्धरण',
    'LBL_SEARCH_FORM_TITLE' => 'उत्पाद उद्धरण खोजें',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास देखें',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_NEW_FORM_TITLE' => 'नया उत्पाद उद्धरण',
    'LBL_PRODUCT_NAME' => 'नाम',
    'LBL_PRODUCT_QTY' => 'मात्रा',
    'LBL_PRODUCT_COST_PRICE' => 'लागत मूल्य',
    'LBL_PRODUCT_LIST_PRICE' => 'मूल्य सूची',
    'LBL_PRODUCT_UNIT_PRICE' => 'यूनिट मूल्य',
    'LBL_PRODUCT_DISCOUNT' => 'छूट',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'छूट राशि',
    'LBL_PART_NUMBER' => 'भाग संख्या',
    'LBL_PRODUCT_DESCRIPTION' => 'विवरण',
    'LBL_DISCOUNT' => 'छूट का प्रकार',
    'LBL_VAT_AMT' => 'कर राशि',
    'LBL_VAT' => 'कर',
    'LBL_PRODUCT_TOTAL_PRICE' => 'कुल राशि',
    'LBL_PRODUCT_NOTE' => 'ध्यान दें',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'संदर्भ के',
    'LBL_PRODUCT' => 'उत्पाद',

    'LBL_SERVICE_MODULE_NAME' => 'सेवाएं',
    'LBL_LIST_NUM' => 'संख्या',
    'LBL_PARENT_ID' => 'माता पिता की पहचान',
    'LBL_GROUP_NAME' => 'समूह',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'लागत मूल्य (डिफ़ॉल्ट मुद्रा)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'सूची मूल्य (डिफ़ॉल्ट मुद्रा)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'इकाई मूल्य (डिफ़ॉल्ट मुद्रा)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'कुल मूल्य (डिफ़ॉल्ट मुद्रा)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'छूट (डिफ़ॉल्ट मुद्रा)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'छूट राशि (डिफ़ॉल्ट मुद्रा)',
    'LBL_VAT_AMT_USDOLLAR' => 'कर राशि (डिफ़ॉल्ट मुद्रा)',
    'LBL_PRODUCTS_SERVICES' => 'उत्पाद/सेवा',
    'LBL_PRODUCT_ID' => 'उत्पाद आयडी',

    'LBL_AOS_CONTRACTS' => 'अनुबंध',
    'LBL_AOS_INVOICES' => 'बीजक',
    'LBL_AOS_PRODUCTS' => 'उत्पादों',
    'LBL_AOS_QUOTES' => 'उद्धरण',
);
