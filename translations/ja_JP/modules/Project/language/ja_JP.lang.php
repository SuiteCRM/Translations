<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'Project',
    'LBL_MODULE_TITLE' => 'プロジェクト: ホーム',
    'LBL_SEARCH_FORM_TITLE' => 'プロジェクト検索',
    'LBL_LIST_FORM_TITLE' => 'プロジェクト一覧',
    'LBL_HISTORY_TITLE' => 'History',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => '更新日:',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',
    'LBL_ASSIGNED_USER_NAME' => 'プロジェクト マネージャー:',
    'LBL_MODIFIED_USER_ID' => '更新ユーザーID:',
    'LBL_CREATED_BY' => '作成者:',
    'LBL_NAME' => 'Name:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DELETED' => '削除済み:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_END' => 'End Date:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => '見積時間合計',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => '実績時間合計',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'None',
    'LBL_ALL_PROJECTS' => 'すべてのプロジェクト',
    'LBL_ALL_USERS' => 'すべてのユーザー',
    'LBL_ALL_CONTACTS' => 'すべての連絡先',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'プロジェクト作成',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'プロジェクト',
    'LNK_NEW_PROJECT_TASK' => 'プロジェクトタスク作成',
    'LNK_PROJECT_TASK_LIST' => 'プロジェクトタスク',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projects',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '取引先',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'さらに...',
    'LBL_OPPORTUNITIES' => 'Opportunities',
    'LBL_NEXT_WEEK' => 'Next',
    'LBL_PROJECT_INFORMATION' => 'プロジェクト概要',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duration',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'マイルストーン',
    'LBL_ADD_NEW_TASK' => '新規タスクを追加',
    'LBL_DELETE_TASK' => 'タスクを削除',
    'LBL_EDIT_TASK_PROPERTIES' => 'タスクのプロパティを編集。',
    'LBL_PARENT_TASK_ID' => '親タスクID',
    'LBL_RESOURCE_CHART' => 'リソース カレンダー',
    'LBL_RELATIONSHIP_TYPE' => '関連タイプ',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'プロジェクト テンプレート',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Project Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Project',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'この日のタスク',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duration',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'リソースはユーザーです',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'リソースは連絡先です',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Next Month',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => '日',
    'LBL_RESOURCE_CHART_WARNING' => 'プロジェクトにリソースは割り当てられていません。',
    'LBL_PROJECT_DELETE_MSG' => 'このプロジェクトとその関連タスクを削除してよろしいですか？',
    'LBL_LIST_MY_PROJECT' => '私のプロジェクト',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => '未割り当て',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'リソース',

    'LBL_EMAIL' => 'メール',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'リソースを追加',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'リソースを作成',
    'LBL_CREATE_CONTACT' => '取引先担当者として',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'リソース一覧',
    'LBL_REMOVE' => 'Remove',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => '営業日を考慮する',

    'LBL_IMPORT_PROJECTS' => 'プロジェクトをインポート',

    'LBL_PROJECTS_SEARCH' => 'プロジェクトの検索',
    'LBL_USERS_SEARCH' => 'ユーザーの検索',
    'LBL_CONTACTS_SEARCH' => '連絡先の選択',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Monthly',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => '四半期',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'コンタクトのタイトルからプロジェクトの連絡先',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'プロジェクト テンプレート: プロジェクト タイトルからプロジェクト',
    'LBL_AOS_QUOTES_PROJECT' => '見積: プロジェクト',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => '昇順',
    'LBL_DESCENDING' => '降順',
);
