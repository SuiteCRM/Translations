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
    'LNK_DOCUMENT_LIST' => '文件清單',
    'LBL_SEARCH_FORM_TITLE' => '文件搜索',
    //vardef labels
    'LBL_NAME' => '文件名稱',
    'LBL_DESCRIPTION' => '描述',
    'LBL_ASSIGNED_TO' => '負責人:',
    'LBL_CATEGORY' => '類別',
    'LBL_SUBCATEGORY' => '子類別',
    'LBL_STATUS' => '狀態',
    'LBL_IS_TEMPLATE' => '是否是範本',
    'LBL_TEMPLATE_TYPE' => '文件類型',
    'LBL_REVISION_NAME' => '版本編號',
    'LBL_MIME' => 'Mime類型',
    'LBL_REVISION' => '版本',
    'LBL_DOCUMENT' => '相關文件',
    'LBL_LATEST_REVISION' => '最新版本',
    'LBL_CHANGE_LOG' => '修改日誌',
    'LBL_ACTIVE_DATE' => '公佈日期',
    'LBL_EXPIRATION_DATE' => '有效期',
    'LBL_FILE_EXTENSION' => '副檔名',

    'LBL_CAT_OR_SUBCAT_UNSPEC' => '不確定的',
    //quick search
    'LBL_NEW_FORM_TITLE' => '新建文件',
    //document edit and detail view
    'LBL_DOC_NAME' => '文件名稱:',
    'LBL_FILENAME' => '文件名稱:',
    'LBL_FILE_UPLOAD' => '文件:',
    'LBL_DOC_VERSION' => '版本:',
    'LBL_CATEGORY_VALUE' => '類別:',
    'LBL_SUBCATEGORY_VALUE' => '子類別',
    'LBL_DOC_STATUS' => '狀態:',
    'LBL_DET_TEMPLATE_TYPE' => '文件類型:',
    'LBL_DOC_DESCRIPTION' => '描述:',
    'LBL_DOC_ACTIVE_DATE' => '公佈日期:',
    'LBL_DOC_EXP_DATE' => '有效期:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => '文件清單',
    'LBL_LIST_DOCUMENT' => '文件',
    'LBL_LIST_CATEGORY' => '類別',
    'LBL_LIST_SUBCATEGORY' => '子類別',
    'LBL_LIST_REVISION' => '版本',
    'LBL_LIST_LAST_REV_CREATOR' => '最新改版人',
    'LBL_LIST_LAST_REV_DATE' => '改版日期',
    'LBL_LIST_VIEW_DOCUMENT' => '查看',
    'LBL_LIST_ACTIVE_DATE' => '公佈日期',
    'LBL_LIST_EXP_DATE' => '有效期',
    'LBL_LIST_STATUS' => '狀態',

    //document search form.
    'LBL_SF_CATEGORY' => '類別:',
    'LBL_SF_SUBCATEGORY' => '子類別',

    'DEF_CREATE_LOG' => '已創建文件',

    //error messages
    'ERR_DOC_NAME' => '文件名稱',
    'ERR_DOC_ACTIVE_DATE' => '公佈日期',
    'ERR_FILENAME' => '文件名',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => '文件名稱',

    'LBL_EDIT_BUTTON' => '編輯 ',
    'LBL_REMOVE' => '刪除',

);
