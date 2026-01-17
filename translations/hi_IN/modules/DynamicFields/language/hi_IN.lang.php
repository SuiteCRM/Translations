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
    'LNK_NEW_CALL' => 'कॉल लॉग करें',
    'LNK_NEW_MEETING' => 'मीटिंग शेड्यूल करें',
    'LNK_NEW_TASK' => 'कार्य बनाएँ',
    'LNK_NEW_NOTE' => 'नोट या अनुलग्नक बनाएँ',
    'LNK_NEW_EMAIL' => 'ईमेल संग्रहित करें',
    'LNK_CALL_LIST' => 'कॉल',
    'LNK_MEETING_LIST' => 'बैठकें',
    'LNK_TASK_LIST' => 'कार्य',
    'LNK_NOTE_LIST' => 'नोट्स',
    'LBL_ADD_FIELD' => 'क्षेत्र जोड़ें:',
    'LBL_SEARCH_FORM_TITLE' => 'मॉड्यूल खोज',
    'COLUMN_TITLE_NAME' => 'फ़ील्ड नाम',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'लेबल प्रदर्शित करें',
    'COLUMN_TITLE_LABEL_VALUE' => 'लेबल मान',
    'COLUMN_TITLE_LABEL' => 'सिस्टम लेबल',
    'COLUMN_TITLE_DATA_TYPE' => 'डेटा प्रकार',
    'COLUMN_TITLE_MAX_SIZE' => 'अधिकतम आकार',
    'COLUMN_TITLE_HELP_TEXT' => 'सहायता पाठ',
    'COLUMN_TITLE_COMMENT_TEXT' => 'टिप्पणी पाठ',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'आवश्यक क्षेत्र',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'तयशुदा मान',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'आईफ़्रेम ऊंचाई',
    'COLUMN_TITLE_HTML_CONTENT' => 'एचटीएमएल',
    'COLUMN_TITLE_URL' => 'डिफ़ॉल्ट यूआरएल',
    'COLUMN_TITLE_AUDIT' => 'अंकेक्षण',
    'COLUMN_TITLE_MIN_VALUE' => 'न्यूनतम मूल्य',
    'COLUMN_TITLE_MAX_VALUE' => 'अधिकतम मूल्य',
    'COLUMN_TITLE_LABEL_ROWS' => 'पंक्तियाँ',
    'COLUMN_TITLE_LABEL_COLS' => 'स्तंभ',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# आइटम प्रदर्शित',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'स्वचालित वृद्धि अगला मूल्य',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'प्रारूप अक्षम करें',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'रेंज खोज सक्षम करें',
    'LBL_DROP_DOWN_LIST' => 'ड्रॉप डाउन सूची',
    'LBL_RADIO_FIELDS' => 'रेडियो फ़ील्ड',
    'LBL_MULTI_SELECT_LIST' => 'बहु चयन सूची',
    'COLUMN_TITLE_PRECISION' => 'निखारा',
    'LBL_MODULE' => 'मोड्यूल',
    'COLUMN_TITLE_MASS_UPDATE' => 'बड़े पैमाने पर अद्यतन',
    'COLUMN_TITLE_IMPORTABLE' => 'आयात योग्य',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'डुप्लिकेट मर्ज',
    'LBL_LABEL' => 'नामपत्र',
    'LBL_DATA_TYPE' => 'डेटा प्रकार',
    'LBL_DEFAULT_VALUE' => 'तयशुदा मान',
    'ERR_RESERVED_FIELD_NAME' => "आरक्षित कीवर्ड",
    'ERR_SELECT_FIELD_TYPE' => 'कृपया फ़ील्ड प्रकार चुनें',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'फ़ील्ड नाम पहले से मौजूद है',
    'LBL_BTN_ADD' => 'जोड़ें',
    'LBL_BTN_EDIT' => 'संशोधन करें',
    'LBL_GENERATE_URL' => 'यूआरएल जनरेट करें',
    'LBL_CALCULATED' => 'परिकलित मूल्य',
    'LBL_LINK_TARGET' => 'लिंक इन खोलें',
    'LBL_IMAGE_WIDTH' => 'चौड़ाई',
    'LBL_IMAGE_HEIGHT' => 'ऊँचाई',
    'LBL_IMAGE_BORDER' => 'सीमा',
    'LBL_HELP' => 'मदद' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'इनलाइन संपादित करें',
    'COLUMN_TITLE_PARENT_ENUM' => 'अभिभावक ड्रॉपडाउन',
    'LBL_INSERT_FIELD' => 'फ़ील्ड सम्मिलित करें',
);
