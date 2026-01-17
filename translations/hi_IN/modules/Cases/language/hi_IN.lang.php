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
    'ERR_DELETE_RECORD' => 'खाता हटाने के लिए आपको एक रिकॉर्ड संख्या निर्दिष्ट करनी होगी।',
    'LBL_TOOL_TIP_BOX_TITLE' => 'नॉलेजबेस सुझाव',
    'LBL_TOOL_TIP_TITLE' => 'शीर्षक',
    'LBL_TOOL_TIP_BODY' => 'बॉडी:',
    'LBL_TOOL_TIP_INFO' => 'अतिरिक्त जानकारी:',
    'LBL_TOOL_TIP_USE' => 'के रूप में उपयोग:',
    'LBL_SUGGESTION_BOX' => 'सुझाव',
    'LBL_NO_SUGGESTIONS' => 'कोई सुझाव नहीं',
    'LBL_RESOLUTION_BUTTON' => 'विभेदन',
    'LBL_SUGGESTION_BOX_STATUS' => 'स्थिति',
    'LBL_SUGGESTION_BOX_TITLE' => 'शीर्षक',
    'LBL_SUGGESTION_BOX_REL' => 'प्रासंगिकता',

    'LBL_ACCOUNT_ID' => 'खाता आईडी',
    'LBL_ACCOUNT_NAME' => 'खाते का नाम:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'खाता',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Galatiya',
    'LBL_CASE_NUMBER' => 'केस नंबर:',
    'LBL_CASE' => 'मामला:',
    'LBL_CONTACT_NAME' => 'संपर्क नाम:',
    'LBL_CONTACT_ROLE' => 'भूमिका:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'मांमले ',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास',
    'LBL_INVITEE' => 'संपर्कों',
    'LBL_MEMBER_OF' => 'लेखा',
    'LBL_MODULE_NAME' => 'मांमले ',
    'LBL_MODULE_TITLE' => 'मामले: घर',
    'LBL_NEW_FORM_TITLE' => 'नया मामला',
    'LBL_NUMBER' => 'संख्या:',
    'LBL_PRIORITY' => 'प्राथमिकता:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'परियोजना ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'दस्तावेज',
    'LBL_RESOLUTION' => 'विभेदन:',
    'LBL_SEARCH_FORM_TITLE' => 'केस खोज',
    'LBL_STATUS' => 'स्थिति:',
    'LBL_SUBJECT' => 'विषय:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_LIST_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_LIST_ASSIGNED' => 'को सौंपना',
    'LBL_LIST_CLOSE' => 'बंद करें',
    'LBL_LIST_FORM_TITLE' => 'केस सूची',
    'LBL_LIST_LAST_MODIFIED' => 'अंतिम रूपांतरित',
    'LBL_LIST_MY_CASES' => 'मेरे खुले मामले',
    'LBL_LIST_NUMBER' => 'संख्या.',
    'LBL_LIST_PRIORITY' => 'प्राथमिकता',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LIST_SUBJECT' => 'विषय',

    'LNK_CASE_LIST' => 'मामले देखें',
    'LNK_NEW_CASE' => 'केस बनाएं',
    'LBL_LIST_DATE_CREATED' => 'बनाया गया दिनांक',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',
    'LBL_TYPE' => 'प्रकार',
    'LBL_WORK_LOG' => 'काम का लॉग',
    'LNK_IMPORT_CASES' => 'आयात मामले',

    'LBL_CREATED_USER' => 'उपयोगकर्ता बनाया गया',
    'LBL_MODIFIED_USER' => 'संशोधित उपयोगकर्ता',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'परियोजना ',
    'LBL_CASE_INFORMATION' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'अद्यतन - पाठ', //Field for Case updates with text only
    'LBL_INTERNAL' => 'आंतरिक अद्यतन',
    'LBL_AOP_CASE_UPDATES' => 'केस अपडेट',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'केस अपडेट थ्रेडेड',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'सभी को संकुचित करें',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'सभी का विस्तार',
    'LBL_AOP_CASE_ATTACHMENTS' => 'संलग्नक:',

    'LBL_AOP_CASE_EVENTS' => 'केस घटनाक्रम',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'सभी का विस्तार',
    'LBL_ADD_CASE_FILE' => 'फ़ाइल जोड़ें',
    'LBL_REMOVE_CASE_FILE' => 'फ़ाइल निकालें',
    'LBL_SELECT_CASE_DOCUMENT' => 'सभी का विस्तार',
    'LBL_CLEAR_CASE_DOCUMENT' => 'सभी का विस्तार',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'सभी का विस्तार',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'सभी का विस्तार',
    'LBL_CONTACT_CREATED_BY_NAME' => 'संपर्क द्वारा बनाया गया',
    'LBL_CONTACT_CREATED_BY' => 'के द्वारा बनाया गया',
    'LBL_CASE_UPDATE_FORM' => 'अद्यतन - अनुलग्नक प्रपत्र', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'अज्ञात संपर्क',
);
