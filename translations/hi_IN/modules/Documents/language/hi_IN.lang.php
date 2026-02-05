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
    //module
    'LBL_MODULE_NAME' => 'दस्तावेज',
    'LBL_MODULE_TITLE' => 'दस्तावेज़: घर',
    'LNK_NEW_DOCUMENT' => 'दस्तावेज़ बनाएँ',
    'LNK_DOCUMENT_LIST' => 'दस्तावेज़ देखें',
    'LBL_DOC_REV_HEADER' => 'दस्तावेज संशोधन ',
    'LBL_SEARCH_FORM_TITLE' => 'दस्तावेज़ खोज',
    //vardef labels
    'LBL_NAME' => 'दस्तावेज़ का नाम',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_CATEGORY' => 'श्रेणी',
    'LBL_SUBCATEGORY' => 'उप श्रेणी',
    'LBL_STATUS' => 'स्थिति',
    'LBL_CREATED_BY' => 'के द्वारा बनाया गया',
    'LBL_DATE_ENTERED' => 'बनाया गया दिनांक',
    'LBL_DATE_MODIFIED' => 'तिथि संशोधित',
    'LBL_DELETED' => 'हटाए गए',
    'LBL_MODIFIED' => 'आईडी द्वारा संशोधित',
    'LBL_MODIFIED_USER' => 'के द्वारा संशोधित',
    'LBL_CREATED' => 'के द्वारा बनाया गया',
    'LBL_REVISIONS' => 'पुनरावलोकन',
    'LBL_RELATED_DOCUMENT_ID' => 'संबंधित दस्तावेज़ आईडी',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'संबंधित दस्तावेज़ संशोधन आईडी',
    'LBL_IS_TEMPLATE' => 'एक टेम्पलेट है',
    'LBL_TEMPLATE_TYPE' => 'दस्तावेज़ प्रकार',
    'LBL_ASSIGNED_TO_NAME' => 'को असाइन किया:',
    'LBL_REVISION_NAME' => 'संशोधन क्रमांक',
    'LBL_MIME' => 'माइम प्रकार',
    'LBL_REVISION' => 'दोहराव',
    'LBL_DOCUMENT' => 'संबंधित दस्तावेज़',
    'LBL_LATEST_REVISION' => 'नवीनतम संशोधन',
    'LBL_CHANGE_LOG' => 'लॉग बदलें',
    'LBL_ACTIVE_DATE' => 'प्रकाशित तिथि',
    'LBL_EXPIRATION_DATE' => 'समय सीमा समाप्ति दिनांक',
    'LBL_FILE_EXTENSION' => 'फाइल एक्सटेंशन',
    'LBL_LAST_REV_MIME_TYPE' => 'अंतिम संशोधन MIME प्रकार',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'अनिर्दिष्ट',
    'LBL_HOMEPAGE_TITLE' => 'मेरे दस्तावेज़',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'नया दस्तावेज़',
    //document edit and detail view
    'LBL_DOC_NAME' => 'दस्तावेज़ का नाम:',
    'LBL_FILENAME' => 'फ़ाइल का नाम:',
    'LBL_LIST_FILENAME' => 'फ़ाइल:',
    'LBL_DOC_VERSION' => 'दोहराव:',
    'LBL_FILE_UPLOAD' => 'फ़ाइल:',

    'LBL_CATEGORY_VALUE' => 'श्रेणी:',
    'LBL_LIST_CATEGORY' => 'श्रेणी',
    'LBL_SUBCATEGORY_VALUE' => 'उप श्रेणी:',
    'LBL_DOC_STATUS' => 'स्थिति:',
    'LBL_LAST_REV_CREATOR' => 'संशोधन इनके द्वारा बनाया गया:',
    'LBL_LASTEST_REVISION_NAME' => 'नवीनतम संशोधन नाम:',
    'LBL_SELECTED_REVISION_NAME' => 'चयनित संशोधन नाम:',
    'LBL_CONTRACT_STATUS' => 'अनुबंध की स्थिति:',
    'LBL_CONTRACT_NAME' => 'अनुबंध का नाम:',
    'LBL_DET_RELATED_DOCUMENT' => 'संबंधित दस्तावेज़:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "संबंधित दस्तावेज़ संशोधन:",
    'LBL_DET_IS_TEMPLATE' => 'नमूना?:',
    'LBL_DET_TEMPLATE_TYPE' => 'दस्तावेज़ प्रकार:',
    'LBL_DOC_DESCRIPTION' => 'विवरण:',
    'LBL_DOC_ACTIVE_DATE' => 'प्रकाशित तिथि:',
    'LBL_DOC_EXP_DATE' => 'समाप्ति तिथि:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'दस्तावेज़ सूची',
    'LBL_LIST_DOCUMENT' => 'दस्तावेज़',
    'LBL_LIST_SUBCATEGORY' => 'उप श्रेणी',
    'LBL_LIST_REVISION' => 'दोहराव',
    'LBL_LIST_LAST_REV_CREATOR' => 'द्वारा प्रकाशित',
    'LBL_LIST_LAST_REV_DATE' => 'पुनरीक्षण तिथि',
    'LBL_LIST_VIEW_DOCUMENT' => 'देखें',
    'LBL_LIST_ACTIVE_DATE' => 'प्रकाशित तिथि',
    'LBL_LIST_EXP_DATE' => 'समय सीमा समाप्ति दिनांक',
    'LBL_LIST_STATUS' => 'स्थिति',
    'LBL_LINKED_ID' => 'लिंक की गई आईडी',
    'LBL_SELECTED_REVISION_ID' => 'चयनित संशोधन आईडी',
    'LBL_LATEST_REVISION_ID' => 'नवीनतम संशोधन आईडी',
    'LBL_SELECTED_REVISION_FILENAME' => 'चयनित पुनरीक्षण फ़ाइल नाम',
    'LBL_FILE_URL' => 'फ़ाइल यूआरएल',

    //document search form.
    'LBL_SF_CATEGORY' => 'श्रेणी:',
    'LBL_SF_SUBCATEGORY' => 'उप श्रेणी:',

    'DEF_CREATE_LOG' => 'दस्तावेज़ बनाया गया',

    //error messages
    'ERR_DOC_NAME' => 'दस्तावेज़ का नाम',
    'ERR_DOC_ACTIVE_DATE' => 'प्रकाशित तिथि',
    'ERR_FILENAME' => 'फ़ाइल का नाम',
    'ERR_DOC_VERSION' => 'दस्तावेज़ संस्करण',
    'ERR_DELETE_CONFIRM' => 'क्या आप इस दस्तावेज़ संशोधन को हटाना चाहते हैं?',
    'ERR_DELETE_LATEST_VERSION' => 'आपको किसी दस्तावेज़ के नवीनतम संशोधन को हटाने की अनुमति नहीं है।',
    'LNK_NEW_MAIL_MERGE' => 'डाक मिलान',
    'ERR_MISSING_FILE' => 'इस दस्तावेज़ में एक फ़ाइल गुम है, संभवतः अपलोड के दौरान किसी त्रुटि के कारण। कृपया फ़ाइल अपलोड करने का पुनः प्रयास करें या अपने व्यवस्थापक से संपर्क करें।',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'नाम',
    'LBL_LIST_IS_TEMPLATE' => 'नमूना?',
    'LBL_LIST_TEMPLATE_TYPE' => 'दस्तावेज़ प्रकार',
    'LBL_LAST_REV_CREATE_DATE' => 'अंतिम पुनरीक्षण निर्माण दिनांक',
    'LBL_CONTRACTS' => 'अनुबंध',
    'LBL_CREATED_USER' => 'उपयोगकर्ता बनाया गया',
    'LBL_DOCUMENT_INFORMATION' => 'सिंहावलोकन', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'दस्तावेज़ स्रोत आईडी',
    'LBL_DOC_TYPE' => 'स्रोत',
    'LBL_DOC_TYPE_POPUP' => 'उस स्रोत का चयन करें जिस पर यह दस्तावेज़ अपलोड किया जाएगा<br> और जहां से यह उपलब्ध होगा।',
    'LBL_DOC_URL' => 'दस्तावेज़ स्रोत यूआरएल',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'फ़ाइल का नाम',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'पहली 20 सबसे हाल ही में संशोधित फ़ाइलें नीचे दी गई सूची में घटते क्रम में प्रदर्शित की गई हैं। अन्य फ़ाइलें ढूंढने के लिए खोज का उपयोग करें.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'फ़ाइल का नाम',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'उपयोगकर्ता ने एक अमान्य बाहरी एपीआई ({0}) तक पहुंचने का प्रयास किया',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'बाहरी एपीआई के लिए लॉगिन जांच विफल रही ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'खाता',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'संपर्कों',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'मौक़े ',
    'LBL_CASES_SUBPANEL_TITLE' => 'मांमले ',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Galatiya',

    'LBL_AOS_CONTRACTS' => 'अनुबंध',
);
