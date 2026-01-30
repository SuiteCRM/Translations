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
    'LBL_ADD_DOCUMENT' => 'एक दस्तावेज़ जोड़ें',
    'LBL_ADD_FILE' => 'एक फ़ाइल जोड़ें',
    'LBL_ATTACHMENTS' => 'संलग्नक',
    'LBL_BODY' => 'बॉडी:',
    'LBL_CLOSE' => 'बंद:',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_EDIT_ALT_TEXT' => 'सादा पाठ संपादित करें',
    'LBL_EMAIL_ATTACHMENT' => 'ईमेल संलग्नक',
    'LBL_HIDE_ALT_TEXT' => 'सादा पाठ छिपाएँ',
    'LBL_HTML_BODY' => 'HTML Body',
    'LBL_INSERT_VARIABLE' => 'वेरिएबल डालें:',
    'LBL_INSERT_URL_REF' => 'यूआरएल संदर्भ डालें',
    'LBL_INSERT_TRACKER_URL' => 'ट्रैकर यूआरएल डालें:',
    'LBL_INSERT' => 'शामिल करें',
    'LBL_LIST_DATE_MODIFIED' => 'अंतिम रूपांतरित',
    'LBL_LIST_DESCRIPTION' => 'विवरण',
    'LBL_LIST_FORM_TITLE' => 'ईमेल टेम्प्लेट सूची',
    'LBL_LIST_NAME' => 'नाम',
    'LBL_MODULE_NAME' => 'ईमेल टेम्पलेट्स',
    'LBL_MODULE_TITLE' => 'ईमेल टेम्प्लेट: होम',
    'LBL_NAME' => 'नाम:',
    'LBL_NEW_FORM_TITLE' => 'ईमेल टेम्प्लेट बनाएं',
    'LBL_PUBLISH' => 'प्रकाशित:',
    'LBL_RELATED_TO' => 'संदर्भ के:',
    'LBL_SEARCH_FORM_TITLE' => 'ईमेल टेम्प्लेट खोजें',
    'LBL_SHOW_ALT_TEXT' => 'सादा पाठ दिखाएँ',
    'LBL_SUBJECT' => 'विषय:',
    'LBL_SUITE_DOCUMENT' => 'दस्तावेज़',
    'LBL_UPLOAD_FILE' => 'फ़ाइल अपलोड करें',
    'LBL_TEXT_BODY' => 'पाठ का मुख्य भाग',
    'LBL_USERS' => 'उपयोगकर्ताओं ',

    'LNK_EMAIL_TEMPLATE_LIST' => 'ईमेल टेम्प्लेट देखें',
    'LNK_IMPORT_NOTES' => 'नोट्स आयात करें',
    'LNK_NEW_EMAIL_TEMPLATE' => 'ईमेल टेम्प्लेट बनाएं',
    'LNK_NEW_EMAIL' => 'ईमेल संग्रहित करें',
    'LNK_NEW_SEND_EMAIL' => 'ईमेल लिखें',
    'LNK_SENT_EMAIL_LIST' => 'ईमेल भेजे गए',
    'LNK_VIEW_CALENDAR' => 'आज',
    // for Inbox
    'LBL_NEW' => 'नया',
    'LNK_MY_DRAFTS' => 'मेरे ड्राफ्ट',
    'LNK_MY_INBOX' => 'मेरे ईमेल',
    'LBL_TEXT_ONLY' => 'केवल पाठ',
    'LBL_SEND_AS_TEXT' => 'केवल पाठ भेजें',
    'LBL_ACCOUNT' => 'लेखा',
    'LBL_FROM_NAME' => 'नाम से',
    'LBL_PLAIN_TEXT' => 'सादा पाठ',
    'LBL_CREATED_BY' => 'के द्वारा बनाई गई',
    'LBL_PUBLISHED' => 'प्रकाशित',
    'LNK_VIEW_MY_INBOX' => 'मेरा ईमेल देखें',
    'LBL_ASSIGNED_TO_ID' => 'को सौंपना',
    'LBL_EDIT_LAYOUT' => 'लेआउट संपादित करें' /*for 508 compliance fix*/,
    'LBL_SELECT' => 'चयन' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'साफ़ करें' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'प्रकार',
    'LBL_WIDTH' => 'चौड़ाई डिफ़ॉल्ट',
    'LNK_IMPORT_CAMPAIGNS' => 'आयात अभियान',
);
