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
    'LNK_DOCUMENT_LIST' => 'දැක්ම ලේඛන',
    'LBL_DOC_REV_HEADER' => 'ලේඛන සංෙශෝධන',
    'LBL_SEARCH_FORM_TITLE' => 'ලේඛන සොයන්න',
    //vardef labels
    'LBL_NAME' => 'ලේඛන නම',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_CATEGORY' => 'වර්ගය',
    'LBL_SUBCATEGORY' => 'උප ප්රවර්ගය',
    'LBL_STATUS' => 'තත්වය',
    'LBL_CREATED_BY' => 'සෑදුවේ',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_MODIFIED' => 'හැඳුනුම් විසින් නවීකරණය කරන ලද',
    'LBL_MODIFIED_USER' => 'ෙවනස්කර',
    'LBL_CREATED' => 'සෑදුවේ',
    'LBL_REVISIONS' => 'සංශෝධනය මඟින්',
    'LBL_RELATED_DOCUMENT_ID' => 'සබැඳි ලේඛන ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'සබැඳි ලේඛන සංශෝධනය ID',
    'LBL_IS_TEMPLATE' => 'එය, සැකිල්ල',
    'LBL_TEMPLATE_TYPE' => 'ලිපි වර්ගය',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා:',
    'LBL_REVISION_NAME' => 'සංශෝධනය අංකය',
    'LBL_MIME' => 'MIME ශෛලිය',
    'LBL_REVISION' => 'සංශෝධනය',
    'LBL_DOCUMENT' => 'සබැඳි ලේඛන',
    'LBL_LATEST_REVISION' => 'නවතම සංශෝධනය',
    'LBL_CHANGE_LOG' => 'වෙනස් ලොග්',
    'LBL_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි',
    'LBL_EXPIRATION_DATE' => 'කල්පිරෙන දිනය',
    'LBL_FILE_EXTENSION' => 'ගොනුව ව්යාප්ති',
    'LBL_LAST_REV_MIME_TYPE' => 'අවසන් අනුවාදය MIME ශෛලිය',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'නම් නොකල',
    'LBL_HOMEPAGE_TITLE' => 'මගේ ලේඛන',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'නව ලේඛන',
    //document edit and detail view
    'LBL_DOC_NAME' => 'ලේඛන නම:',
    'LBL_FILENAME' => 'ගොනුවේ නම:',
    'LBL_LIST_FILENAME' => 'ගොනුව:',
    'LBL_DOC_VERSION' => 'සංශෝධනය:',
    'LBL_FILE_UPLOAD' => 'ගොනුව:',

    'LBL_CATEGORY_VALUE' => 'වර්ගය:',
    'LBL_LIST_CATEGORY' => 'වර්ගය',
    'LBL_SUBCATEGORY_VALUE' => 'උප ප්රවර්ගය:',
    'LBL_DOC_STATUS' => 'තත්වය:',
    'LBL_LAST_REV_CREATOR' => 'විසින් නිර්මාණය කරන සංශෝධනය:',
    'LBL_LASTEST_REVISION_NAME' => 'නවතම සංශෝධනය නම:',
    'LBL_SELECTED_REVISION_NAME' => 'තෝරාගත් සංශෝධනය නම:',
    'LBL_CONTRACT_STATUS' => 'කොන්ත්රාත් තත්වය:',
    'LBL_CONTRACT_NAME' => 'කොන්ත්රාත් නම:',
    'LBL_DET_RELATED_DOCUMENT' => 'සබැඳි ලේඛන:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "සබැඳි ලේඛන සංශෝධනය:",
    'LBL_DET_IS_TEMPLATE' => 'සැකිල්ල? :',
    'LBL_DET_TEMPLATE_TYPE' => 'ලිපි වර්ගය:',
    'LBL_DOC_DESCRIPTION' => 'විස්තරය:',
    'LBL_DOC_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි:',
    'LBL_DOC_EXP_DATE' => 'කල්පිරෙන දිනය:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'ලේඛන ලැයිස්තු',
    'LBL_LIST_DOCUMENT' => 'ලේඛන',
    'LBL_LIST_SUBCATEGORY' => 'උප ප්රවර්ගය',
    'LBL_LIST_REVISION' => 'සංශෝධනය',
    'LBL_LIST_LAST_REV_CREATOR' => 'විසින් පළ',
    'LBL_LIST_LAST_REV_DATE' => 'සංශෝධනය දිනය',
    'LBL_LIST_VIEW_DOCUMENT' => 'දැක්ම',
    'LBL_LIST_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි',
    'LBL_LIST_EXP_DATE' => 'කල්පිරෙන දිනය',
    'LBL_LIST_STATUS' => 'තත්වය',
    'LBL_LINKED_ID' => 'සම්බන්ධ id',
    'LBL_SELECTED_REVISION_ID' => 'තෝරාගත් සංශෝධනය id',
    'LBL_LATEST_REVISION_ID' => 'නවතම සංශෝධනය id',
    'LBL_SELECTED_REVISION_FILENAME' => 'තෝරාගත් සංශෝධනය ගොනු',
    'LBL_FILE_URL' => 'ගොනුව url එක',

    //document search form.
    'LBL_SF_CATEGORY' => 'වර්ගය:',
    'LBL_SF_SUBCATEGORY' => 'උප ප්රවර්ගය:',

    'DEF_CREATE_LOG' => 'ලේඛන නිර්මාණය',

    //error messages
    'ERR_DOC_NAME' => 'ලේඛන නම',
    'ERR_DOC_ACTIVE_DATE' => 'දිනය ප්රකාශයට පත් කරනු ලබයි',
    'ERR_FILENAME' => 'ගොනුවේ නම',
    'ERR_DOC_VERSION' => 'ලේඛන සංස්කරණය',
    'ERR_DELETE_CONFIRM' => 'ඔබ මෙම ලියවිල්ල සංශෝධනය ඉවත් කිරීමට අවශ්යද?',
    'ERR_DELETE_LATEST_VERSION' => 'ඔබ ලියවිල්ලක් නවතම සංශෝධනය ඉවත් කිරීමට ඉඩ දෙනු නොලැබේ.',
    'LNK_NEW_MAIL_MERGE' => 'තැපැල් ඒකාබද්ධ',
    'ERR_MISSING_FILE' => 'මෙම ලේඛනය බොහෝ දුරට ඉඩ නිසා උඩුගත තුළ දෝෂයක් සඳහා ගොනුව, අතුරුදහන්. මෙම ගොනුව උඩුගත කිරීම නැවත උත්සහ හෝ පරිපාලක අමතන්න.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'නම',
    'LBL_LIST_IS_TEMPLATE' => 'සැකිල්ල?',
    'LBL_LIST_TEMPLATE_TYPE' => 'ලිපි වර්ගය',
    'LBL_LAST_REV_CREATE_DATE' => 'පසුගිය සංශෝධනය දිනය සාදන්න',
    'LBL_CONTRACTS' => 'කොන්ත්රාත්',
    'LBL_CREATED_USER' => 'නිර්මාණය කරන ලද්දේ පරිශීලක',
    'LBL_DOCUMENT_INFORMATION' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'ලේඛන මූලාශ්රය ID',
    'LBL_DOC_TYPE' => 'මූලාශ්රය',
    'LBL_DOC_TYPE_POPUP' => 'මෙම ලියවිල්ල උඩුගත කරන අතර ඉන් එය ලබා ගත හැකි වනු ඇත කිරීමට ප්රභවයක් තෝරන්න.',
    'LBL_DOC_URL' => 'ලේඛන මූලාශ්රය URL එක',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'ගොනුවේ නම',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'පළමු 20 ඉතා මෑතක විකරණය ගොනු පහත ලැයිස්තුවේ අනුව අවරෝහණ ක්රමයට ප්රදර්ශනය කර ඇත. වෙනත් ගොනු සොයා ගැනීමට සොයන්න භාවිතා කරන්න.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'ගොනුවේ නම',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'පරිශීලක වලංගු නොවන බාහිර API ({0}) වෙත ප්රවේශ වීමට උත්සාහ',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'පිවිසුම් චෙක්පත ({0}) බාහිර API සඳහා අසාර්ථක',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ගිණුම්',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_CASES_SUBPANEL_TITLE' => ' නඩු',
    'LBL_BUGS_SUBPANEL_TITLE' => ' බග්ස්',

    'LBL_AOS_CONTRACTS' => 'කොන්ත්රාත්',
);
