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
    'LBL_MODULE_NAME' => '文件',
    'LBL_MODULE_TITLE' => '文件: 首頁',
    'LNK_NEW_DOCUMENT' => '新增文件',
    'LNK_DOCUMENT_LIST' => '查看文件',
    'LBL_DOC_REV_HEADER' => '文件修訂版本',
    'LBL_SEARCH_FORM_TITLE' => '文件搜索',
    //vardef labels
    'LBL_NAME' => '文件名稱',
    'LBL_DESCRIPTION' => '描述',
    'LBL_CATEGORY' => '類別',
    'LBL_SUBCATEGORY' => '子類別',
    'LBL_STATUS' => '狀態',
    'LBL_CREATED_BY' => '建立人',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_DELETED' => '已刪除',
    'LBL_MODIFIED' => '修改人編號',
    'LBL_MODIFIED_USER' => '修改人:',
    'LBL_CREATED' => '建立人',
    'LBL_REVISIONS' => '修訂版',
    'LBL_RELATED_DOCUMENT_ID' => '相關文件編號',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => '相關文件修訂版本編號',
    'LBL_IS_TEMPLATE' => '是否是範本',
    'LBL_TEMPLATE_TYPE' => '文件類型',
    'LBL_ASSIGNED_TO_NAME' => '負責人:',
    'LBL_REVISION_NAME' => '版本編號',
    'LBL_MIME' => 'Mime類型',
    'LBL_REVISION' => '版本',
    'LBL_DOCUMENT' => '相關文件',
    'LBL_LATEST_REVISION' => '最新版本',
    'LBL_CHANGE_LOG' => '修改日誌',
    'LBL_ACTIVE_DATE' => '公佈日期',
    'LBL_EXPIRATION_DATE' => '有效期',
    'LBL_FILE_EXTENSION' => '副檔名',
    'LBL_LAST_REV_MIME_TYPE' => '上一個版本的文件類型',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => '不確定的',
    'LBL_HOMEPAGE_TITLE' => '我的文件',
    //quick search
    'LBL_NEW_FORM_TITLE' => '新建文件',
    //document edit and detail view
    'LBL_DOC_NAME' => '文件名稱:',
    'LBL_FILENAME' => '文件名稱:',
    'LBL_LIST_FILENAME' => '文件:',
    'LBL_DOC_VERSION' => '版本:',
    'LBL_FILE_UPLOAD' => '文件:',

    'LBL_CATEGORY_VALUE' => '類別:',
    'LBL_LIST_CATEGORY' => '類別',
    'LBL_SUBCATEGORY_VALUE' => '子類別',
    'LBL_DOC_STATUS' => '狀態:',
    'LBL_LAST_REV_CREATOR' => '改版人:',
    'LBL_LASTEST_REVISION_NAME' => '最新版本的名稱:',
    'LBL_SELECTED_REVISION_NAME' => '選擇的版本的名稱:',
    'LBL_CONTRACT_STATUS' => '合約狀態:',
    'LBL_CONTRACT_NAME' => '合約名稱:',
    'LBL_DET_RELATED_DOCUMENT' => '相關文件:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "相關的文件修訂版本:",
    'LBL_DET_IS_TEMPLATE' => '範本?:',
    'LBL_DET_TEMPLATE_TYPE' => '文件類型:',
    'LBL_DOC_DESCRIPTION' => '描述:',
    'LBL_DOC_ACTIVE_DATE' => '公佈日期:',
    'LBL_DOC_EXP_DATE' => '有效期:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => '文件清單',
    'LBL_LIST_DOCUMENT' => '文件',
    'LBL_LIST_SUBCATEGORY' => '子類別',
    'LBL_LIST_REVISION' => '版本',
    'LBL_LIST_LAST_REV_CREATOR' => '最新改版人',
    'LBL_LIST_LAST_REV_DATE' => '改版日期',
    'LBL_LIST_VIEW_DOCUMENT' => '查看',
    'LBL_LIST_ACTIVE_DATE' => '公佈日期',
    'LBL_LIST_EXP_DATE' => '有效期',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LINKED_ID' => '鏈接id',
    'LBL_SELECTED_REVISION_ID' => '選擇版本的id',
    'LBL_LATEST_REVISION_ID' => '最新版本的id',
    'LBL_SELECTED_REVISION_FILENAME' => '選擇版本的文件名',
    'LBL_FILE_URL' => '文件URL',

    //document search form.
    'LBL_SF_CATEGORY' => '類別:',
    'LBL_SF_SUBCATEGORY' => '子類別',

    'DEF_CREATE_LOG' => '已創建文件',

    //error messages
    'ERR_DOC_NAME' => '文件名稱',
    'ERR_DOC_ACTIVE_DATE' => '公佈日期',
    'ERR_FILENAME' => '文件名',
    'ERR_DOC_VERSION' => '文件版本',
    'ERR_DELETE_CONFIRM' => '你想要刪除此文件的修訂版本嗎？',
    'ERR_DELETE_LATEST_VERSION' => '您沒有許可權刪除這個文件的最新修訂版本。',
    'LNK_NEW_MAIL_MERGE' => '郵件合併',
    'ERR_MISSING_FILE' => '該文件沒有對應的檔案，可能是上傳是有錯誤。請重新上傳，或聯繫管理員解決。',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => '名稱',
    'LBL_LIST_IS_TEMPLATE' => '範本?',
    'LBL_LIST_TEMPLATE_TYPE' => '文件類型',
    'LBL_LAST_REV_CREATE_DATE' => '最新版本修改日期',
    'LBL_CONTRACTS' => '合約',
    'LBL_CREATED_USER' => '創建人',
    'LBL_DOCUMENT_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => '文件源標識',
    'LBL_DOC_TYPE' => '文件源',
    'LBL_DOC_TYPE_POPUP' => '選擇文件源.',
    'LBL_DOC_URL' => '文件源URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => '文件名',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '這裡僅按照倒序顯示了最近修改的20個文件, 請使用搜尋查找其他文件',
    'LBL_LIST_EXT_DOCUMENT_NAME' => '文件名',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => '使用者試圖訪問一個無效的外部API({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => '外部API登錄驗證失敗({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客戶',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商業機會',
    'LBL_CASES_SUBPANEL_TITLE' => '案例',
    'LBL_BUGS_SUBPANEL_TITLE' => '程式錯誤',

    'LBL_AOS_CONTRACTS' => '合約',
);
