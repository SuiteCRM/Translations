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
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_TOOL_TIP_BOX_TITLE' => '知識庫建議',
    'LBL_TOOL_TIP_TITLE' => '標題: ',
    'LBL_TOOL_TIP_BODY' => '正文: ',
    'LBL_TOOL_TIP_INFO' => '附加資訊: ',
    'LBL_TOOL_TIP_USE' => '用作: ',
    'LBL_SUGGESTION_BOX' => '建議',
    'LBL_NO_SUGGESTIONS' => '無建議',
    'LBL_RESOLUTION_BUTTON' => '分析',
    'LBL_SUGGESTION_BOX_STATUS' => '狀態',
    'LBL_SUGGESTION_BOX_TITLE' => '標題',
    'LBL_SUGGESTION_BOX_REL' => '相關性',

    'LBL_ACCOUNT_ID' => '客戶編號',
    'LBL_ACCOUNT_NAME' => '客戶名稱:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客戶',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_BUGS_SUBPANEL_TITLE' => '程式錯誤',
    'LBL_CASE_NUMBER' => '案例編號:',
    'LBL_CASE' => '案例:',
    'LBL_CONTACT_NAME' => '聯絡人姓名:',
    'LBL_CONTACT_ROLE' => '角色:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '案例',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    'LBL_INVITEE' => '連絡人',
    'LBL_MEMBER_OF' => '客戶',
    'LBL_MODULE_NAME' => '案例',
    'LBL_MODULE_TITLE' => '案例: 首頁',
    'LBL_NEW_FORM_TITLE' => '新案例',
    'LBL_NUMBER' => '編號:',
    'LBL_PRIORITY' => '優先順序:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '專案',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '文件',
    'LBL_RESOLUTION' => '分析:',
    'LBL_SEARCH_FORM_TITLE' => '案例搜尋',
    'LBL_STATUS' => '狀態:',
    'LBL_SUBJECT' => '主旨:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '負責的使用者',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_ASSIGNED' => '負責人',
    'LBL_LIST_CLOSE' => '結束',
    'LBL_LIST_FORM_TITLE' => '案例清單',
    'LBL_LIST_LAST_MODIFIED' => '最新修改',
    'LBL_LIST_MY_CASES' => '我的未解決案例',
    'LBL_LIST_NUMBER' => '編號',
    'LBL_LIST_PRIORITY' => '優先順序',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LIST_SUBJECT' => '主旨',

    'LNK_CASE_LIST' => '查看案例',
    'LNK_NEW_CASE' => '創建案例',
    'LBL_LIST_DATE_CREATED' => '建立日期',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_TYPE' => '類型',
    'LBL_WORK_LOG' => '工作日誌',
    'LNK_IMPORT_CASES' => '導入案例',

    'LBL_CREATED_USER' => '創建人',
    'LBL_MODIFIED_USER' => '修改人',
    'LBL_PROJECT_SUBPANEL_TITLE' => '專案',
    'LBL_CASE_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => '更新 - 文字', //Field for Case updates with text only
    'LBL_INTERNAL' => '內部更新',
    'LBL_AOP_CASE_UPDATES' => '案件更新',
    'LBL_AOP_CASE_UPDATES_THREADED' => '案例更新',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => '全部收回',
    'LBL_CASE_UPDATES_EXPAND_ALL' => '全部展開',
    'LBL_AOP_CASE_ATTACHMENTS' => '附件:',

    'LBL_AOP_CASE_EVENTS' => '案件事件',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => '案件附件:',
    'LBL_ADD_CASE_FILE' => '新增檔案',
    'LBL_REMOVE_CASE_FILE' => '移除檔案',
    'LBL_SELECT_CASE_DOCUMENT' => '選擇文件',
    'LBL_CLEAR_CASE_DOCUMENT' => '清除文件',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => '內部CRM文件',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => '外部檔案',
    'LBL_CONTACT_CREATED_BY_NAME' => '創建自聯絡人',
    'LBL_CONTACT_CREATED_BY' => '建立人',
    'LBL_CASE_UPDATE_FORM' => '更新 - 附件', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => '未知的聯絡人',
);
