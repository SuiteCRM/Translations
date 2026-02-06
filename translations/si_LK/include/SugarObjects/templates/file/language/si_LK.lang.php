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
    'LBL_MODULE_NAME' => 'ලිපි ලේඛන',
    'LBL_MODULE_TITLE' => 'සනාථ කරන ලියකියවිලි: මුල් පිටුව',
    'LNK_NEW_DOCUMENT' => 'ලේඛන නිර්මාණය',
    'LNK_DOCUMENT_LIST' => 'ලිපි ලේඛන ලැයිස්තු',
    'LBL_SEARCH_FORM_TITLE' => 'ලේඛන සොයන්න',
    //vardef labels
    'LBL_NAME' => 'ලේඛන නම',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_ASSIGNED_TO' => ' පවරා:',
    'LBL_CATEGORY' => 'වර්ගය',
    'LBL_SUBCATEGORY' => 'උප ප්රවර්ගය',
    'LBL_STATUS' => 'තත්වය',
    'LBL_IS_TEMPLATE' => 'එය, සැකිල්ල',
    'LBL_TEMPLATE_TYPE' => 'ලිපි වර්ගය',
    'LBL_REVISION_NAME' => 'සංශෝධනය අංකය',
    'LBL_MIME' => 'MIME ශෛලිය',
    'LBL_REVISION' => 'සංශෝධනය',
    'LBL_DOCUMENT' => 'සබැඳි ලේඛන',
    'LBL_LATEST_REVISION' => 'නවතම සංශෝධනය',
    'LBL_CHANGE_LOG' => 'වෙනස් ලොග්',
    'LBL_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි',
    'LBL_EXPIRATION_DATE' => 'කල්පිරෙන දිනය',
    'LBL_FILE_EXTENSION' => 'ගොනුව ව්යාප්ති',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'නම් නොකල',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'නව ලේඛන',
    //document edit and detail view
    'LBL_DOC_NAME' => 'ලේඛන නම:',
    'LBL_FILENAME' => 'ගොනුවේ නම:',
    'LBL_FILE_UPLOAD' => 'ගොනුව:',
    'LBL_DOC_VERSION' => 'සංශෝධනය:',
    'LBL_CATEGORY_VALUE' => 'වර්ගය:',
    'LBL_SUBCATEGORY_VALUE' => 'උප ප්රවර්ගය:',
    'LBL_DOC_STATUS' => 'තත්වය:',
    'LBL_DET_TEMPLATE_TYPE' => 'ලිපි වර්ගය:',
    'LBL_DOC_DESCRIPTION' => 'විස්තරය:',
    'LBL_DOC_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි:',
    'LBL_DOC_EXP_DATE' => 'කල්පිරෙන දිනය:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'ලේඛන ලැයිස්තු',
    'LBL_LIST_DOCUMENT' => 'ලේඛන',
    'LBL_LIST_CATEGORY' => 'වර්ගය',
    'LBL_LIST_SUBCATEGORY' => 'උප ප්රවර්ගය',
    'LBL_LIST_REVISION' => 'සංශෝධනය',
    'LBL_LIST_LAST_REV_CREATOR' => 'විසින් පළ',
    'LBL_LIST_LAST_REV_DATE' => 'සංශෝධනය දිනය',
    'LBL_LIST_VIEW_DOCUMENT' => 'දැක්ම',
    'LBL_LIST_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි',
    'LBL_LIST_EXP_DATE' => 'කල්පිරෙන දිනය',
    'LBL_LIST_STATUS' => 'තත්වය',

    //document search form.
    'LBL_SF_CATEGORY' => 'වර්ගය:',
    'LBL_SF_SUBCATEGORY' => 'උප ප්රවර්ගය:',

    'DEF_CREATE_LOG' => 'ලේඛන නිර්මාණය',

    //error messages
    'ERR_DOC_NAME' => 'ලේඛන නම',
    'ERR_DOC_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි',
    'ERR_FILENAME' => 'ගොනුවේ නම',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'ලේඛන නම',

    'LBL_EDIT_BUTTON' => 'සංස්කරණය ',
    'LBL_REMOVE' => 'ඉවත් කරන්න',

);
