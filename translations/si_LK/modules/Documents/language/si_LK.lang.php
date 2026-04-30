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
    'LBL_MODULE_NAME' => 'ලේඛන',
    'LBL_MODULE_TITLE' => 'Documents: Home',
    'LNK_NEW_DOCUMENT' => 'ලේඛනය සාදන්න',
    'LNK_DOCUMENT_LIST' => 'View Documents',
    'LBL_DOC_REV_HEADER' => 'Document Revisions',
    'LBL_NEW_REVISION' => 'Add Revision',
    'LBL_FILENAME_REVISION_HINT' => 'Remove and replace this file to create a new revision.',
    'LBL_SEARCH_FORM_TITLE' => 'Document Search',
    //vardef labels
    'LBL_NAME' => 'Document Name',
    'LBL_DESCRIPTION' => 'විස්තරය',
    'LBL_CATEGORY' => 'ප්‍රවර්ගය',
    'LBL_SUBCATEGORY' => 'Sub Category',
    'LBL_STATUS' => '  තත්ත්වය',
    'LBL_CREATED_BY' => 'නිර්මාණය කළේ',
    'LBL_DATE_ENTERED' => 'දිනය නිර්මාණය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_MODIFIED' => 'හැඳුනුම් විසින් නවීකරණය කරන ලද',
    'LBL_MODIFIED_USER' => 'Modified by',
    'LBL_CREATED' => 'නිර්මාණය කළේ',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'සබැඳි ලේඛන ID',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'සබැඳි ලේඛන සංශෝධනය ID',
    'LBL_IS_TEMPLATE' => 'Is a Template',
    'LBL_TEMPLATE_TYPE' => 'Document Type',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා:',
    'LBL_REVISION_NAME' => 'Revision Number',
    'LBL_MIME' => 'Mime Type',
    'LBL_REVISION' => 'Revision',
    'LBL_DOCUMENT' => 'Related Document',
    'LBL_LATEST_REVISION' => 'Latest Revision',
    'LBL_CHANGE_LOG' => 'Change Log',
    'LBL_ACTIVE_DATE' => 'Publish Date',
    'LBL_EXPIRATION_DATE' => 'Expiration Date',
    'LBL_FILE_EXTENSION' => 'File Extension',
    'LBL_LAST_REV_MIME_TYPE' => 'අවසන් අනුවාදය MIME ශෛලිය',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Unspecified',
    'LBL_HOMEPAGE_TITLE' => 'මගේ ලේඛන',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'New Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Document Name:',
    'LBL_FILENAME' => 'File:',
    'LBL_LIST_FILENAME' => 'File:',
    'LBL_DOC_VERSION' => 'Revision:',
    'LBL_FILE_UPLOAD' => 'File:',

    'LBL_CATEGORY_VALUE' => 'Category:',
    'LBL_LIST_CATEGORY' => 'ප්‍රවර්ගය',
    'LBL_SUBCATEGORY_VALUE' => 'Sub Category:',
    'LBL_DOC_STATUS' => ' තත්ත්වය:',
    'LBL_LAST_REV_CREATOR' => 'විසින් නිර්මාණය කරන සංශෝධනය:',
    'LBL_LASTEST_REVISION_NAME' => 'නවතම සංශෝධනය නම:',
    'LBL_SELECTED_REVISION_NAME' => 'තෝරාගත් සංශෝධනය නම:',
    'LBL_CONTRACT_STATUS' => 'කොන්ත්රාත් තත්වය:',
    'LBL_CONTRACT_NAME' => 'කොන්ත්රාත් නම:',
    'LBL_DET_RELATED_DOCUMENT' => 'සබැඳි ලේඛන:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "සබැඳි ලේඛන සංශෝධනය:",
    'LBL_DET_IS_TEMPLATE' => 'සැකිල්ල? :',
    'LBL_DET_TEMPLATE_TYPE' => 'Document Type:',
    'LBL_DOC_DESCRIPTION' => 'Description:',
    'LBL_DOC_ACTIVE_DATE' => 'Publish Date:',
    'LBL_DOC_EXP_DATE' => 'Expiration Date:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Document List',
    'LBL_LIST_DOCUMENT' => 'ලේඛනය',
    'LBL_LIST_SUBCATEGORY' => 'Sub Category',
    'LBL_LIST_REVISION' => 'Revision',
    'LBL_LIST_LAST_REV_CREATOR' => 'Published By',
    'LBL_LIST_LAST_REV_DATE' => 'Revision Date',
    'LBL_LIST_VIEW_DOCUMENT' => 'View',
    'LBL_LIST_ACTIVE_DATE' => 'Publish Date',
    'LBL_LIST_EXP_DATE' => 'Expiration Date',
    'LBL_LIST_STATUS' => 'තත්ත්වය',
    'LBL_LINKED_ID' => 'සම්බන්ධ id',
    'LBL_SELECTED_REVISION_ID' => 'තෝරාගත් සංශෝධනය id',
    'LBL_LATEST_REVISION_ID' => 'නවතම සංශෝධනය id',
    'LBL_SELECTED_REVISION_FILENAME' => 'තෝරාගත් සංශෝධනය ගොනු',
    'LBL_FILE_URL' => 'ගොනුව url එක',

    //document search form.
    'LBL_SF_CATEGORY' => 'Category:',
    'LBL_SF_SUBCATEGORY' => 'Sub Category:',

    'DEF_CREATE_LOG' => 'Document Created',

    //error messages
    'ERR_DOC_NAME' => 'Document Name',
    'ERR_DOC_ACTIVE_DATE' => 'Publish Date',
    'ERR_FILENAME' => 'File Name',
    'ERR_DOC_VERSION' => 'Document Version',
    'ERR_DELETE_CONFIRM' => 'Do you want to delete this document revision?',
    'ERR_DELETE_LATEST_VERSION' => 'You are not allowed to delete the latest revision of a document.',
    'LNK_NEW_MAIL_MERGE' => 'තැපැල් ඒකාබද්ධ',
    'ERR_MISSING_FILE' => 'මෙම ලේඛනය බොහෝ දුරට ඉඩ නිසා උඩුගත තුළ දෝෂයක් සඳහා ගොනුව, අතුරුදහන්. මෙම ගොනුව උඩුගත කිරීම නැවත උත්සහ හෝ පරිපාලක අමතන්න.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => ' නම',
    'LBL_LIST_IS_TEMPLATE' => 'සැකිල්ල?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Document Type',
    'LBL_LAST_REV_CREATE_DATE' => 'පසුගිය සංශෝධනය දිනය සාදන්න',
    'LBL_CONTRACTS' => 'කොන්ත්රාත්',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_DOCUMENT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'Source',
    'LBL_DOC_TYPE_POPUP' => 'මෙම ලියවිල්ල උඩුගත කරන අතර ඉන් එය ලබා ගත හැකි වනු ඇත කිරීමට ප්රභවයක් තෝරන්න.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'File Name',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'පළමු 20 ඉතා මෑතක විකරණය ගොනු පහත ලැයිස්තුවේ අනුව අවරෝහණ ක්රමයට ප්රදර්ශනය කර ඇත. වෙනත් ගොනු සොයා ගැනීමට සොයන්න භාවිතා කරන්න.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'File Name',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'පරිශීලක වලංගු නොවන බාහිර API ({0}) වෙත ප්රවේශ වීමට උත්සාහ',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'පිවිසුම් චෙක්පත ({0}) බාහිර API සඳහා අසාර්ථක',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_CASES_SUBPANEL_TITLE' => ' නඩු',
    'LBL_BUGS_SUBPANEL_TITLE' => ' බග්ස්',

    'LBL_AOS_CONTRACTS' => 'කොන්ත්රාත්',

    'LBL_REV_LIST_REVISION' => 'Revision',
    'LBL_REV_LIST_ENTERED' => 'සෑදූ දිනය',
    'LBL_REV_LIST_CREATED' => 'සෑදුවේ',
    'LBL_REV_LIST_LOG' => 'Change Log',
    'LBL_REV_LIST_FILENAME' => 'File',
);
