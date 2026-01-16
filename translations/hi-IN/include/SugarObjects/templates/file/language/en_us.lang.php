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
    'LNK_DOCUMENT_LIST' => 'दस्तावेज़ सूची',
    'LBL_SEARCH_FORM_TITLE' => 'दस्तावेज़ खोज',
    //vardef labels
    'LBL_NAME' => 'दस्तावेज़ का नाम',
    'LBL_DESCRIPTION' => 'विवरण',
    'LBL_ASSIGNED_TO' => 'को असाइन किया:',
    'LBL_CATEGORY' => 'श्रेणी',
    'LBL_SUBCATEGORY' => 'उप श्रेणी',
    'LBL_STATUS' => 'स्थिति',
    'LBL_IS_TEMPLATE' => 'एक टेम्पलेट है',
    'LBL_TEMPLATE_TYPE' => 'दस्तावेज़ प्रकार',
    'LBL_REVISION_NAME' => 'संशोधन क्रमांक',
    'LBL_MIME' => 'माइम प्रकार',
    'LBL_REVISION' => 'दोहराव',
    'LBL_DOCUMENT' => 'संबंधित दस्तावेज़',
    'LBL_LATEST_REVISION' => 'नवीनतम संशोधन',
    'LBL_CHANGE_LOG' => 'लॉग बदलें',
    'LBL_ACTIVE_DATE' => 'प्रकाशित तिथि',
    'LBL_EXPIRATION_DATE' => 'समय सीमा समाप्ति दिनांक',
    'LBL_FILE_EXTENSION' => 'फाइल एक्सटेंशन',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'अनिर्दिष्ट',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'नया दस्तावेज़',
    //document edit and detail view
    'LBL_DOC_NAME' => 'दस्तावेज़ का नाम:',
    'LBL_FILENAME' => 'फ़ाइल का नाम:',
    'LBL_FILE_UPLOAD' => 'फ़ाइल:',
    'LBL_DOC_VERSION' => 'दोहराव:',
    'LBL_CATEGORY_VALUE' => 'श्रेणी:',
    'LBL_SUBCATEGORY_VALUE' => 'उप श्रेणी:',
    'LBL_DOC_STATUS' => 'स्थिति:',
    'LBL_DET_TEMPLATE_TYPE' => 'दस्तावेज़ प्रकार:',
    'LBL_DOC_DESCRIPTION' => 'विवरण:',
    'LBL_DOC_ACTIVE_DATE' => 'प्रकाशित तिथि:',
    'LBL_DOC_EXP_DATE' => 'समाप्ति तिथि:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'दस्तावेज़ सूची',
    'LBL_LIST_DOCUMENT' => 'दस्तावेज़',
    'LBL_LIST_CATEGORY' => 'श्रेणी',
    'LBL_LIST_SUBCATEGORY' => 'उप श्रेणी',
    'LBL_LIST_REVISION' => 'दोहराव',
    'LBL_LIST_LAST_REV_CREATOR' => 'द्वारा प्रकाशित',
    'LBL_LIST_LAST_REV_DATE' => 'पुनरीक्षण तिथि',
    'LBL_LIST_VIEW_DOCUMENT' => 'देखें',
    'LBL_LIST_ACTIVE_DATE' => 'प्रकाशित तिथि',
    'LBL_LIST_EXP_DATE' => 'समय सीमा समाप्ति दिनांक',
    'LBL_LIST_STATUS' => 'स्थिति',

    //document search form.
    'LBL_SF_CATEGORY' => 'श्रेणी:',
    'LBL_SF_SUBCATEGORY' => 'उप श्रेणी:',

    'DEF_CREATE_LOG' => 'दस्तावेज़ बनाया गया',

    //error messages
    'ERR_DOC_NAME' => 'दस्तावेज़ का नाम',
    'ERR_DOC_ACTIVE_DATE' => 'प्रकाशित तिथि',
    'ERR_FILENAME' => 'फ़ाइल का नाम',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'दस्तावेज़ का नाम',

    'LBL_EDIT_BUTTON' => 'संपादन करना ',
    'LBL_REMOVE' => 'हटाऐं',

);
