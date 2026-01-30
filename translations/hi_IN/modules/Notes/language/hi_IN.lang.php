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
    'LBL_ACCOUNT_ID' => 'खाता पहचान:',
    'LBL_CASE_ID' => 'मामले आईडी:',
    'LBL_CLOSE' => 'बंद:',
    'LBL_CONTACT_ID' => 'संपर्क आईडी:',
    'LBL_CONTACT_NAME' => 'संपर्कः',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'नोट्स',
    'LBL_DESCRIPTION' => 'ध्यान दें',
    'LBL_EMAIL_ADDRESS' => 'ई-मेल पता:',
    'LBL_EMAIL_ATTACHMENT' => 'ईमेल संलग्नक',
    'LBL_FILE_MIME_TYPE' => 'माइम प्रकार',
    'LBL_FILE_URL' => 'फ़ाइल यूआरएल',
    'LBL_FILENAME' => 'लगाव:',
    'LBL_LEAD_ID' => 'लीड आईडी:',
    'LBL_LIST_CONTACT_NAME' => 'संपर्क करें',
    'LBL_LIST_DATE_MODIFIED' => 'अंतिम रूपांतरित',
    'LBL_LIST_FILENAME' => 'अटैचमेंट',
    'LBL_LIST_FORM_TITLE' => 'नोट सूची',
    'LBL_LIST_RELATED_TO' => 'संदर्भ के',
    'LBL_LIST_SUBJECT' => 'विषय',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LIST_CONTACT' => 'संपर्क करें',
    'LBL_MODULE_NAME' => 'नोट्स',
    'LBL_MODULE_TITLE' => 'नोट्स: होम',
    'LBL_NEW_FORM_TITLE' => 'नोट या अनुलग्नक बनाएँ',
    'LBL_NOTE_STATUS' => 'ध्यान दें',
    'LBL_NOTE_SUBJECT' => 'विषय:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'संलग्नक',
    'LBL_NOTE' => 'टिप्पणी:',
    'LBL_OPPORTUNITY_ID' => 'अवसर आईडी:',
    'LBL_PARENT_ID' => 'माता पिता की पहचान:',
    'LBL_PARENT_TYPE' => 'मूल प्रकार',
    'LBL_PHONE' => 'फ़ोन:',
    'LBL_PORTAL_FLAG' => 'पोर्टल में प्रदर्शित करें?',
    'LBL_EMBED_FLAG' => 'ईमेल में एम्बेड करें?',
    'LBL_PRODUCT_ID' => 'उत्पाद आयडी:',
    'LBL_QUOTE_ID' => 'उद्धरण आईडी:',
    'LBL_RELATED_TO' => 'संदर्भ के:',
    'LBL_SEARCH_FORM_TITLE' => 'नोट खोज',
    'LBL_STATUS' => 'स्थिति',
    'LBL_SUBJECT' => 'विषय:',
    'LNK_IMPORT_NOTES' => 'नोट्स आयात करें',
    'LNK_NEW_NOTE' => 'नोट या अनुलग्नक बनाएँ',
    'LNK_NOTE_LIST' => 'नोट्स देखें',
    'LBL_MEMBER_OF' => 'के सदस्य:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'निर्दिष्ट उपयोगकर्ता',
    'LBL_REMOVING_ATTACHMENT' => 'अनुलग्नक हटाया जा रहा है...',
    'ERR_REMOVING_ATTACHMENT' => 'फाइल-नाम बहुत लंबा...',
    'LBL_CREATED_BY' => 'के द्वारा बनाई गई',
    'LBL_MODIFIED_BY' => 'द्वारा संशोधित',
    'LBL_SEND_ANYWAYS' => 'इस ईमेल का कोई विषय नहीं है. फिर भी भेजें/सहेजें?',
    'LBL_NOTE_INFORMATION' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'मेरे नोट्स',
    'LBL_EDITLAYOUT' => 'लेआउट संपादित करें' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'पहला नाम:',
    'LBL_LAST_NAME' => 'परिवार का नाम',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_FILE_CONTENTS' => 'फ़ाइल सामग्री',

    'LBL_ASCENDING' => 'आरोही',
    'LBL_DESCENDING' => 'अवरोही',
);
