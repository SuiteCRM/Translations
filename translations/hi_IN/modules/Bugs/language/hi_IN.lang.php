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
    'LBL_MODULE_NAME' => 'Galatiya',
    'LBL_MODULE_TITLE' => 'बग ट्रैकर: होम',
    'LBL_MODULE_ID' => 'Galatiya',
    'LBL_SEARCH_FORM_TITLE' => 'बग खोज',
    'LBL_LIST_FORM_TITLE' => 'बग सूची',
    'LBL_NEW_FORM_TITLE' => 'नया बग',
    'LBL_SUBJECT' => 'विषय:',
    'LBL_NUMBER' => 'संख्या:',
    'LBL_STATUS' => 'स्थिति:',
    'LBL_PRIORITY' => 'प्राथमिकता:',
    'LBL_DESCRIPTION' => 'विवरण:',
    'LBL_CONTACT_NAME' => 'संपर्क नाम:',
    'LBL_CONTACT_ROLE' => 'भूमिका:',
    'LBL_LIST_NUMBER' => 'संख्या.',
    'LBL_LIST_SUBJECT' => 'विषय',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LIST_PRIORITY' => 'प्राथमिकता',
    'LBL_LIST_RESOLUTION' => 'विभेदन',
    'LBL_LIST_LAST_MODIFIED' => 'अंतिम रूपांतरित',
    'LBL_INVITEE' => 'संपर्कों',
    'LBL_TYPE' => 'प्रकार:',
    'LBL_LIST_TYPE' => 'प्रकार',
    'LBL_RESOLUTION' => 'विभेदन:',
    'LBL_RELEASE' => 'प्रकाशन:',
    'LNK_NEW_BUG' => 'रिपोर्ट बग',
    'LNK_BUG_LIST' => 'कीड़े देखें',
    'ERR_DELETE_RECORD' => 'बग को हटाने के लिए आपको एक रिकॉर्ड संख्या निर्दिष्ट करनी होगी।',
    'LBL_LIST_MY_BUGS' => 'मेरे निर्दिष्ट बग',
    'LNK_IMPORT_BUGS' => 'बग आयात करें',
    'LBL_FOUND_IN_RELEASE' => 'रिलीज में मिला:',
    'LBL_FIXED_IN_RELEASE' => 'रिलीज़ में निश्चित:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'रिलीज़ में निश्चित',
    'LBL_WORK_LOG' => 'काम का लॉग:',
    'LBL_SOURCE' => 'स्रोत:',
    'LBL_PRODUCT_CATEGORY' => 'श्रेणी:',

    'LBL_CREATED_BY' => 'के द्वारा बनाया गया:',
    'LBL_MODIFIED_BY' => 'अंतिम बार संशोधित:',

    'LBL_LIST_EMAIL_ADDRESS' => 'ईमेल पता',
    'LBL_LIST_CONTACT_NAME' => 'संपर्क नाम',
    'LBL_LIST_ACCOUNT_NAME' => 'खाता नाम',
    'LBL_LIST_PHONE' => 'फोन',
    'NTC_DELETE_CONFIRMATION' => 'क्या आप वाकई इस संपर्क को इस बग से हटाना चाहते हैं?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'बग ट्रैकर',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'गतिविधियाँ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'इतिहास',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'खाता',
    'LBL_CASES_SUBPANEL_TITLE' => 'मांमले ',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'परियोजना ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'दस्तावेज',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_ASSIGNED_TO_NAME' => 'को सौंपना',

    'LBL_BUG_INFORMATION' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
