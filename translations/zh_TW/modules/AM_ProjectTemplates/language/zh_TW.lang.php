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
    'LBL_ASSIGNED_TO_ID' => '負責人Id',
    'LBL_ASSIGNED_TO_NAME' => '專案負責人',
    'LBL_ID' => '編號',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_MODIFIED' => '修改人',
    'LBL_MODIFIED_NAME' => '修改人姓名',
    'LBL_CREATED' => '建立人',
    'LBL_DELETED' => '已刪除',
    'LBL_NAME' => '範本名稱',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'LBL_LIST_NAME' => '名稱',
    'LBL_EDIT_BUTTON' => '編輯',
    'LBL_REMOVE' => '刪除',
    'LBL_LIST_FORM_TITLE' => '專案範本清單',
    'LBL_MODULE_NAME' => '專案範本',
    'LBL_MODULE_TITLE' => '專案範本',
    'LBL_HOMEPAGE_TITLE' => '我的專案範本',
    'LNK_NEW_RECORD' => '創建專案範本',
    'LNK_LIST' => '查看專案範本',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => '匯入專案範本',
    'LBL_SEARCH_FORM_TITLE' => '搜尋專案範本',
    'LBL_HISTORY_SUBPANEL_TITLE' => '查看歷史記錄',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_NEW_FORM_TITLE' => '新專案範本',
    'LBL_STATUS' => '狀態',
    'LBL_PRIORITY' => '優先順序',
    'LBL_PROJECT_NAME' => '專案名稱',
    'LBL_START_DATE' => '開始日期',
    'LBL_CREATE_PROJECT_TITLE' => '從該範本創建一個新的專案嗎?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => '任務範本',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => '使用者',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => '連絡人',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => '選擇資源',
    'LBL_NEW_PROJECT_CREATED' => '新專案已創建',
    'LBL_NEW_PROJECT' => '創建專案',
    'LBL_CANCEL_PROJECT' => '取消',

    'LBL_SUBTASK' => '任務',
    'LBL_MILESTONE_FLAG' => '里程碑',
    'LBL_RELATIONSHIP_TYPE' => '關聯類型',
    'LBL_LAG' => '延遲',
    'LBL_DAYS' => '天',
    'LBL_HOURS' => '時',
    'LBL_MONTHS' => '月',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => '專案工作',
    'LBL_VIEW_GANTT_TITLE' => '甘特圖',
    'LBL_VIEW_GANTT_DURATION' => '持續時間',
    'LBL_TASK_TITLE' => '編輯任務',
    'LBL_DURATION_TITLE' => '編輯期間',
    'LBL_DESCRIPTION' => '備註',
    'LBL_ASSIGNED_USER_ID' => '負責人:',

    'LBL_LIST_ASSIGNED_USER' => '專案負責人',
    'LBL_UNASSIGNED' => '未分配',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => '資源',
    'LBL_DELETE_TASK' => '刪除任務',
    'LBL_VIEW_DETAIL' => '查看細節',
    'LBL_ADD_NEW_TASK' => '新增任務',
    'LBL_ASSIGNED_USER_NAME' => '專案負責人:',

    'LBL_TASK_ID' => '編號',
    'LBL_TASK_NAME' => '任務名稱',
    'LBL_DURATION' => '持續時間',
    'LBL_ACTUAL_DURATION' => '實際期間',
    'LBL_START' => '開始',
    'LBL_FINISH' => '結束',
    'LBL_PREDECESSORS' => '前任',
    'LBL_PERCENT_COMPLETE' => '% 完成',
    'LBL_EDIT_TASK_PROPERTIES' => '編輯任務內容。',

    'LBL_OVERRIDE_BUSINESS_HOURS' => '考慮工作天',
    'LBL_COPY_ALL_TASKS' => '複製所有任務與資源',
    'LBL_COPY_SEL_TASKS' => '複製所選的任務與資源',
    'LBL_TOOLTIP_TITLE' => '提示',
    'LBL_TOOLTIP_TEXT' => '複製指派的使用者的所有任務',

    'LBL_EMAIL' => '電子郵件',
    'LBL_PHONE' => '客戶電話:',
    'LBL_ADD_BUTTON' => '新增',
    'LBL_ADD_INVITEE' => '添加資源',
    'LBL_FIRST_NAME' => '名',
    'LBL_LAST_NAME' => '姓',
    'LBL_SEARCH_BUTTON' => '搜尋',
    'LBL_EMPTY_SEARCH_RESULT' => '對不起，沒找到記錄。請創建一個被邀請人。',
    'LBL_CREATE_INVITEE' => '創建資源',
    'LBL_CREATE_CONTACT' => '作為聯絡人',
    'LBL_CREATE_AND_ADD' => '創建並添加',
    'LBL_CANCEL_CREATE_INVITEE' => '取消',
    'LBL_NO_ACCESS' => '您沒有許可權創建模組 $module',
    'LBL_SCHEDULING_FORM_TITLE' => '資源清單',
    'LBL_NONE' => '無',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => '專案範本: 來自專案標題的專案',


);
