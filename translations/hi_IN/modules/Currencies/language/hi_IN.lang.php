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
    'LBL_MODULE_NAME' => 'मुद्राओं',
    'LBL_LIST_FORM_TITLE' => 'मुद्राओं',
    'LBL_CURRENCY' => 'मुद्रा',
    'LBL_ADD' => 'जोड़ें',
    'LBL_MERGE' => 'मर्ज करें',
    'LBL_MERGE_TXT' => 'कृपया उन मुद्राओं का चयन करें जिन्हें आप चयनित मुद्रा में मैप करना चाहते हैं। यह एक चेकमार्क के साथ सभी मुद्राओं को हटा देगा और उनके साथ जुड़े किसी भी मूल्य को चयनित मुद्रा में पुन: असाइन कर देगा।',
    'LBL_US_DOLLAR' => 'अमेरिकी डॉलर',
    'LBL_DELETE' => 'हटाएं',
    'LBL_LIST_SYMBOL' => 'मुद्रा चिह्न',
    'LBL_LIST_NAME' => 'मुद्रा का नाम',
    'LBL_LIST_ISO4217' => 'आईएसओ 4217 कोड',
    'LBL_LIST_ISO4217_HELP' => 'तीन अक्षरों वाला ISO 4217 कोड दर्ज करें जो मुद्रा नाम और मुद्रा प्रतीक को परिभाषित करता है।',
    'LBL_UPDATE' => 'अद्यतन',
    'LBL_LIST_RATE' => 'रूपांतरण दर',
    'LBL_LIST_RATE_HELP' => 'यूरो के लिए 0.5 की रूपांतरण दर का मतलब है कि 10 USD = 5 यूरो।',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LNK_NEW_CONTACT' => 'नया संपर्क',
    'LNK_NEW_ACCOUNT' => 'नया खाता',
    'LNK_NEW_OPPORTUNITY' => 'नया मौका',
    'LNK_NEW_CASE' => 'नया मामला',
    'LNK_NEW_NOTE' => 'नोट या अनुलग्नक बनाएँ',
    'LNK_NEW_CALL' => 'नया कॉल',
    'LNK_NEW_EMAIL' => 'नया ईमेल',
    'LNK_NEW_MEETING' => 'नई बैठक',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'NTC_DELETE_CONFIRMATION' => 'क्या आप वाकई यह रिकॉर्ड हटाना चाहते हैं? इस मुद्रा का उपयोग करने वाला कोई भी रिकॉर्ड एक्सेस होने पर सिस्टम डिफ़ॉल्ट मुद्रा में परिवर्तित हो जाएगा। स्थिति को निष्क्रिय पर सेट करना बेहतर हो सकता है।',
    'LBL_BELOW_MIN' => 'रूपांतरण दर 0 से ऊपर होनी चाहिए',
    'currency_status_dom' =>
        array(
            'Active' => 'सक्रिय',
            'Inactive' => 'निष्क्रिय',
        ),
    'LBL_CREATED_BY' => 'के द्वारा बनाई गई',
    'LBL_EDIT_LAYOUT' => 'लेआउट संपादित करें' /*for 508 compliance fix*/,
);
