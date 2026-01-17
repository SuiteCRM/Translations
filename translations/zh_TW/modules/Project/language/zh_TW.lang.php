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
    'LBL_MODULE_NAME' => '專案',
    'LBL_MODULE_TITLE' => '專案: 主頁',
    'LBL_SEARCH_FORM_TITLE' => '搜尋專案',
    'LBL_LIST_FORM_TITLE' => '專案清單',
    'LBL_HISTORY_TITLE' => '歷史',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => '創建日期:',
    'LBL_DATE_MODIFIED' => '修改日期:',
    'LBL_ASSIGNED_USER_ID' => '負責人:',
    'LBL_ASSIGNED_USER_NAME' => '專案負責人:',
    'LBL_MODIFIED_USER_ID' => '修改人編號:',
    'LBL_CREATED_BY' => '建立人:',
    'LBL_NAME' => '名稱:',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_DELETED' => '已刪除:',
    'LBL_DATE' => '日期:',
    'LBL_DATE_START' => '開始日期:',
    'LBL_DATE_END' => '結束日期:',
    'LBL_PRIORITY' => '優先順序:',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => '估算總時間 (小時)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => '估算總時間 (小時)',
    'LBL_LIST_END_DATE' => '結束日期',
    'LBL_PROJECT_SUBPANEL_TITLE' => '專案',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => '專案工作',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '商業機會',
    'LBL_PROJECT_PREDECESSOR_NONE' => '無',
    'LBL_ALL_PROJECTS' => '所有專案',
    'LBL_ALL_USERS' => '所有使用者',
    'LBL_ALL_CONTACTS' => '所有連絡人',

    // quick create label
    'LBL_NEW_FORM_TITLE' => '新建專案',
    'LNK_NEW_PROJECT' => '創建專案',
    'LNK_PROJECT_LIST' => '查看專案清單',
    'LNK_NEW_PROJECT_TASK' => '新增專案任務',
    'LNK_PROJECT_TASK_LIST' => '查看專案工作',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '專案',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_HISTORY_SUBPANEL_TITLE' => '歷史',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '客戶',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '商業機會',
    'LBL_CASES_SUBPANEL_TITLE' => '案例',
    'LBL_BUGS_SUBPANEL_TITLE' => '程式錯誤',
    'LBL_TASK_ID' => '編號',
    'LBL_TASK_NAME' => '任務名稱',
    'LBL_DURATION' => '持續時間',
    'LBL_ACTUAL_DURATION' => '實際期間',
    'LBL_START' => '開始',
    'LBL_FINISH' => '結束',
    'LBL_PREDECESSORS' => '前任',
    'LBL_PERCENT_COMPLETE' => '% 完成',
    'LBL_MORE' => '多...',
    'LBL_OPPORTUNITIES' => '商業機會',
    'LBL_NEXT_WEEK' => '下一步',
    'LBL_PROJECT_INFORMATION' => '專案概述',
    'LBL_EDITLAYOUT' => '編輯佈局' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => '專案工作',
    'LBL_VIEW_GANTT_TITLE' => '甘特圖',
    'LBL_VIEW_GANTT_DURATION' => '持續時間',
    'LBL_TASK_TITLE' => '編輯任務',
    'LBL_DURATION_TITLE' => '編輯期間',
    'LBL_LAG' => '延遲',
    'LBL_DAYS' => '天',
    'LBL_HOURS' => '時',
    'LBL_MONTHS' => '月',
    'LBL_SUBTASK' => '任務',
    'LBL_MILESTONE_FLAG' => '里程碑',
    'LBL_ADD_NEW_TASK' => '新增任務',
    'LBL_DELETE_TASK' => '刪除任務',
    'LBL_EDIT_TASK_PROPERTIES' => '編輯任務內容。',
    'LBL_PARENT_TASK_ID' => '父任務編號',
    'LBL_RESOURCE_CHART' => '資源日曆',
    'LBL_RELATIONSHIP_TYPE' => '關聯類型',
    'LBL_ASSIGNED_TO' => '專案負責人',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => '專案範本',
    'LBL_STATUS' => '狀態:',
    'LBL_LIST_ASSIGNED_USER_ID' => '專案負責人',
    'LBL_TOOLTIP_PROJECT_NAME' => '專案',
    'LBL_TOOLTIP_TASK_NAME' => '任務名稱',
    'LBL_TOOLTIP_TITLE' => '本日任務',
    'LBL_TOOLTIP_TASK_DURATION' => '持續時間',
    'LBL_RESOURCE_TYPE_TITLE_USER' => '資源是一個使用者',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => '資源是聯絡人',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => '上月',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => '下月',
    'LBL_RESOURCE_CHART_WEEK' => '周',
    'LBL_RESOURCE_CHART_DAY' => '日',
    'LBL_RESOURCE_CHART_WARNING' => '此專案未被分配任何資源。',
    'LBL_PROJECT_DELETE_MSG' => '您確定要刪除此專案及相關工作嗎?',
    'LBL_LIST_MY_PROJECT' => '我的專案',
    'LBL_LIST_ASSIGNED_USER' => '專案負責人',
    'LBL_UNASSIGNED' => '未分配',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => '資源',

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
    'LBL_REMOVE' => '刪除',
    'LBL_VIEW_DETAIL' => '查看細節',
    'LBL_OVERRIDE_BUSINESS_HOURS' => '考慮工作天',

    'LBL_IMPORT_PROJECTS' => '匯入專案',

    'LBL_PROJECTS_SEARCH' => '搜尋專案',
    'LBL_USERS_SEARCH' => '搜尋使用者',
    'LBL_CONTACTS_SEARCH' => '選擇連絡人',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => '搜尋',

    'LBL_CHART_TYPE' => '類型',
    'LBL_CHART_WEEKLY' => '周',
    'LBL_CHART_MONTHLY' => '月',
    'LBL_CHART_QUARTERLY' => '每季度',

    'LBL_RESOURCE_CHART_MONTH' => '月',
    'LBL_RESOURCE_CHART_QUARTER' => '季',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => '來自聯絡人標題的專案聯絡人',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => '專案範本: 來自專案標題的專案',
    'LBL_AOS_QUOTES_PROJECT' => '報價: 專案',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => '升序',
    'LBL_DESCENDING' => '降序',
);
