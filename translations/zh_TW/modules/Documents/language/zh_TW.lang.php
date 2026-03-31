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
    'LBL_MODULE_NAME' => 'Documents',
    'LBL_MODULE_TITLE' => 'Documents: Home',
    'LNK_NEW_DOCUMENT' => 'Create Document',
    'LNK_DOCUMENT_LIST' => 'View Documents',
    'LBL_DOC_REV_HEADER' => 'Document Revisions',
    'LBL_SEARCH_FORM_TITLE' => 'Document Search',
    //vardef labels
    'LBL_NAME' => '文件名稱',
    'LBL_DESCRIPTION' => '說明:',
    'LBL_CATEGORY' => '類別',
    'LBL_SUBCATEGORY' => 'Sub Category',
    'LBL_STATUS' => '狀態',
    'LBL_CREATED_BY' => '建立人',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_DELETED' => '已刪除',
    'LBL_MODIFIED' => '修改人編號',
    'LBL_MODIFIED_USER' => '修改人:',
    'LBL_CREATED' => '建立人',
    'LBL_REVISIONS' => '版本',
    'LBL_RELATED_DOCUMENT_ID' => '相關文件編號',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => '相關文件修訂版本編號',
    'LBL_IS_TEMPLATE' => 'Is a Template',
    'LBL_TEMPLATE_TYPE' => 'Document Type',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_REVISION_NAME' => 'Revision Number',
    'LBL_MIME' => 'Mime Type',
    'LBL_REVISION' => 'Revision',
    'LBL_DOCUMENT' => 'Related Document',
    'LBL_LATEST_REVISION' => 'Latest Revision',
    'LBL_CHANGE_LOG' => '更改日誌',
    'LBL_ACTIVE_DATE' => 'Publish Date',
    'LBL_EXPIRATION_DATE' => 'Expiration Date',
    'LBL_FILE_EXTENSION' => 'File Extension',
    'LBL_LAST_REV_MIME_TYPE' => '上一個版本的文件類型',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Unspecified',
    'LBL_HOMEPAGE_TITLE' => '我的文件',
    //quick search
    'LBL_NEW_FORM_TITLE' => '新建文件',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Document Name:',
    'LBL_FILENAME' => 'File Name:',
    'LBL_LIST_FILENAME' => '文件名',
    'LBL_DOC_VERSION' => 'Revision:',
    'LBL_FILE_UPLOAD' => '文件:',

    'LBL_CATEGORY_VALUE' => 'Category:',
    'LBL_LIST_CATEGORY' => '類別',
    'LBL_SUBCATEGORY_VALUE' => 'Sub Category:',
    'LBL_DOC_STATUS' => 'Status:',
    'LBL_LAST_REV_CREATOR' => '改版人:',
    'LBL_LASTEST_REVISION_NAME' => '最新版本的名稱:',
    'LBL_SELECTED_REVISION_NAME' => '選擇的版本的名稱:',
    'LBL_CONTRACT_STATUS' => '合約狀態:',
    'LBL_CONTRACT_NAME' => '合約名稱:',
    'LBL_DET_RELATED_DOCUMENT' => '相關文件:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "相關的文件修訂版本:",
    'LBL_DET_IS_TEMPLATE' => '範本?:',
    'LBL_DET_TEMPLATE_TYPE' => 'Document Type:',
    'LBL_DOC_DESCRIPTION' => '說明:',
    'LBL_DOC_ACTIVE_DATE' => 'Publish Date:',
    'LBL_DOC_EXP_DATE' => 'Expiration Date:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Document List',
    'LBL_LIST_DOCUMENT' => 'Document',
    'LBL_LIST_SUBCATEGORY' => 'Sub Category',
    'LBL_LIST_REVISION' => 'Revision',
    'LBL_LIST_LAST_REV_CREATOR' => 'Published By',
    'LBL_LIST_LAST_REV_DATE' => 'Revision Date',
    'LBL_LIST_VIEW_DOCUMENT' => 'View',
    'LBL_LIST_ACTIVE_DATE' => 'Publish Date',
    'LBL_LIST_EXP_DATE' => 'Expiration Date',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LINKED_ID' => '鏈接id',
    'LBL_SELECTED_REVISION_ID' => '選擇版本的id',
    'LBL_LATEST_REVISION_ID' => '最新版本的id',
    'LBL_SELECTED_REVISION_FILENAME' => '選擇版本的文件名',
    'LBL_FILE_URL' => '文件URL',

    //document search form.
    'LBL_SF_CATEGORY' => 'Category:',
    'LBL_SF_SUBCATEGORY' => 'Sub Category:',

    'DEF_CREATE_LOG' => 'Document Created',

    //error messages
    'ERR_DOC_NAME' => '文件名稱',
    'ERR_DOC_ACTIVE_DATE' => 'Publish Date',
    'ERR_FILENAME' => '文件名',
    'ERR_DOC_VERSION' => 'Document Version',
    'ERR_DELETE_CONFIRM' => 'Do you want to delete this document revision?',
    'ERR_DELETE_LATEST_VERSION' => 'You are not allowed to delete the latest revision of a document.',
    'LNK_NEW_MAIL_MERGE' => 'Mail Merge',
    'ERR_MISSING_FILE' => '該文件沒有對應的檔案，可能是上傳是有錯誤。請重新上傳，或聯繫管理員解決。',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => '名稱:',
    'LBL_LIST_IS_TEMPLATE' => '範本?',
    'LBL_LIST_TEMPLATE_TYPE' => 'Document Type',
    'LBL_LAST_REV_CREATE_DATE' => '最新版本修改日期',
    'LBL_CONTRACTS' => '合約',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_DOCUMENT_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => '文檔源標識',
    'LBL_DOC_TYPE' => '源',
    'LBL_DOC_TYPE_POPUP' => '選擇文件源.',
    'LBL_DOC_URL' => '文檔源URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => '文件名稱',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => '這裡僅按照倒序顯示了最近修改的20個文件, 請使用搜尋查找其他文件',
    'LBL_LIST_EXT_DOCUMENT_NAME' => '文件名',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => '使用者試圖訪問一個無效的外部API({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => '外部API登錄驗證失敗({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客戶',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '聯繫人',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => '缺陷追蹤',

    'LBL_AOS_CONTRACTS' => '合約',
);
