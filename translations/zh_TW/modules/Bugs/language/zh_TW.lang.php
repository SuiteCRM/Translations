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
    'LBL_MODULE_NAME' => '程式錯誤',
    'LBL_MODULE_TITLE' => '缺陷追蹤:首頁',
    'LBL_MODULE_ID' => '程式錯誤',
    'LBL_SEARCH_FORM_TITLE' => 'Bug 搜尋',
    'LBL_LIST_FORM_TITLE' => '缺陷列表',
    'LBL_NEW_FORM_TITLE' => '新增缺陷',
    'LBL_SUBJECT' => '主旨:',
    'LBL_NUMBER' => '編號:',
    'LBL_STATUS' => '狀態:',
    'LBL_PRIORITY' => '優先順序:',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_CONTACT_NAME' => '聯絡人姓名:',
    'LBL_CONTACT_ROLE' => '角色:',
    'LBL_LIST_NUMBER' => '編號',
    'LBL_LIST_SUBJECT' => '主旨',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LIST_PRIORITY' => '優先順序',
    'LBL_LIST_RESOLUTION' => '分析',
    'LBL_LIST_LAST_MODIFIED' => '最新修改',
    'LBL_INVITEE' => '連絡人',
    'LBL_TYPE' => '類型:',
    'LBL_LIST_TYPE' => '類型',
    'LBL_RESOLUTION' => '分析:',
    'LBL_RELEASE' => '版本:',
    'LNK_NEW_BUG' => '彙報缺陷',
    'LNK_BUG_LIST' => '缺陷',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除缺陷。',
    'LBL_LIST_MY_BUGS' => '指派給我的缺陷',
    'LNK_IMPORT_BUGS' => '導入缺陷',
    'LBL_FOUND_IN_RELEASE' => '發現缺陷的版本:',
    'LBL_FIXED_IN_RELEASE' => '將被修正的版本:',
    'LBL_LIST_FIXED_IN_RELEASE' => '將被修正的版本',
    'LBL_WORK_LOG' => '工作記錄',
    'LBL_SOURCE' => '來源:',
    'LBL_PRODUCT_CATEGORY' => '類別:',

    'LBL_CREATED_BY' => '建立人:',
    'LBL_MODIFIED_BY' => '最後更新者:',

    'LBL_LIST_EMAIL_ADDRESS' => '電子郵箱地址',
    'LBL_LIST_CONTACT_NAME' => '聯絡人姓名',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_PHONE' => '電話',
    'NTC_DELETE_CONFIRMATION' => '您確定要從這個臭蟲中移除這個聯絡人嗎?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => '缺陷追蹤',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客戶',
    'LBL_CASES_SUBPANEL_TITLE' => '案例',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '專案',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文件',
    'LBL_LIST_ASSIGNED_TO_NAME' => '負責的使用者',
    'LBL_ASSIGNED_TO_NAME' => '負責人',

    'LBL_BUG_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
