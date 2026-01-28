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

    'LBL_ADMINISTRATION_MAIN' => 'कनेक्टर सेटिंग्स',
    'LBL_AVAILABLE' => 'उपलब्ध',
    'LBL_BACK' => '< पीछे',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'कुछ आवश्यक फ़ील्ड खाली छोड़ दी गई हैं. परिवर्तन सहेजने के लिए आगे बढ़ें?',
    'LBL_CONNECTOR_FIELDS' => 'कनेक्टर फ़ील्ड',
    'LBL_DATA' => 'डेटा',
    'LBL_DEFAULT' => 'डिफॉल्ट',
    'LBL_DISABLED' => 'विकलांग',
    'LBL_ENABLED' => 'सक्रिय',
    'LBL_EXTERNAL' => 'उपयोगकर्ताओं को इस कनेक्टर में बाहरी खाता रिकॉर्ड बनाने में सक्षम करें।',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' इस कनेक्टर का उपयोग करने के लिए, गुणों को सेट कनेक्टर गुण सेटिंग पृष्ठ में भी सेट किया जाना चाहिए।',
    'LBL_MERGE' => 'मर्ज करें',
    'LBL_MODIFY_DISPLAY_TITLE' => 'कनेक्टर्स सक्षम करें',
    'LBL_MODIFY_DISPLAY_DESC' => 'चुनें कि प्रत्येक कनेक्टर के लिए कौन से मॉड्यूल सक्षम हैं।',
    'LBL_MODULE_FIELDS' => 'मॉड्यूल फ़ील्ड',
    'LBL_MODIFY_MAPPING_TITLE' => 'मानचित्र कनेक्टर फ़ील्ड',
    'LBL_MODIFY_MAPPING_DESC' => 'यह निर्धारित करने के लिए कनेक्टर फ़ील्ड को मॉड्यूल फ़ील्ड में मैप करें कि कौन सा कनेक्टर डेटा देखा जा सकता है और मॉड्यूल रिकॉर्ड में मर्ज किया जा सकता है।',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'कनेक्टर गुण सेट करें',
    'LBL_MODIFY_PROPERTIES_DESC' => 'यूआरएल और एपीआई कुंजियों सहित प्रत्येक कनेक्टर के लिए गुणों को कॉन्फ़िगर करें।',
    'LBL_MODIFY_SEARCH_TITLE' => 'कनेक्टर खोज प्रबंधित करें',
    'LBL_MODIFY_SEARCH' => 'खोजें',
    'LBL_MODIFY_SEARCH_DESC' => 'प्रत्येक मॉड्यूल के लिए डेटा खोजने के लिए उपयोग करने के लिए कनेक्टर फ़ील्ड का चयन करें।',
    'LBL_MODULE_NAME' => 'योजक ',
    'LBL_NO_PROPERTIES' => 'इस कनेक्टर के लिए कोई कॉन्फ़िगर करने योग्य गुण नहीं हैं.',
    'LBL_SAVE' => 'रखना',
    'LBL_SUMMARY' => 'सारांश',
    'LBL_STEP1' => 'डेटा खोजें और देखें',
    'LBL_STEP2' => 'रिकॉर्ड्स को इसके साथ मर्ज करें',
    'LBL_TEST_SOURCE' => 'परीक्षण कनेक्टर',
    'LBL_TEST_SOURCE_FAILED' => 'परीक्षण विफल',
    'LBL_TEST_SOURCE_SUCCESS' => 'परीक्षण सफल',
    'LBL_TITLE' => 'तारीख जाती है',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'त्रुटि: रिकॉर्ड के लिए कोई अतिरिक्त विवरण नहीं मिला।',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'इस कनेक्टर के लिए कोई मॉड्यूल सक्षम नहीं किया गया है. कनेक्टर्स सक्षम करें पृष्ठ में इस कनेक्टर के लिए एक मॉड्यूल का चयन करें।',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'त्रुटि: ऐसे कोई कनेक्टर सक्षम नहीं हैं जिनमें खोज फ़ील्ड परिभाषित हों।',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'त्रुटि: मॉड्यूल और कनेक्टर के लिए कोई खोज फ़ील्ड परिभाषित नहीं हैं। कृपया सिस्टम व्यवस्थापक से संपर्क करें।',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'त्रुटि: कोई भी मॉड्यूल फ़ील्ड नहीं है जिसे परिणामों में प्रदर्शित करने के लिए मैप किया गया हो। कृपया सिस्टम व्यवस्थापक से संपर्क करें।',
    'LBL_INFO_INLINE' => 'जानकारी' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'बंद करें' /*for 508 compliance fix*/,

);
