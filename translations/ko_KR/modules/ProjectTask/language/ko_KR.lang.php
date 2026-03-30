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
    'LBL_MODULE_NAME' => '프로젝트 작업',
    'LBL_MODULE_TITLE' => '프로젝트 업무: 홈',

    'LBL_ID' => 'Id:',
    'LBL_PROJECT_TASK_ID' => '프로젝트 업무 Id:',
    'LBL_PROJECT_ID' => '프로젝트 Id:',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => '변경일:',
    'LBL_ASSIGNED_USER_ID' => '담당자:',
    'LBL_MODIFIED_USER_ID' => '수정된 유저 Id:',
    'LBL_CREATED_BY' => 'Created By:',
    'LBL_NAME' => '이름:',
    'LBL_STATUS' => 'Status:',
    'LBL_DATE_DUE' => '만료일:',
    'LBL_TIME_DUE' => '만료시간:',
    'LBL_PREDECESSORS' => 'Predecessor',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_FINISH' => 'Finish Date:',
    'LBL_TIME_START' => 'Start Time:',
    'LBL_TIME_FINISH' => 'Finish Time:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'Actual Duration:',
    'LBL_PARENT_ID' => '프로젝트:',
    'LBL_PARENT_TASK_ID' => '상위 업무 Id:',
    'LBL_PERCENT_COMPLETE' => '진척율 (%):',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_DESCRIPTION' => 'Notes:',
    'LBL_ORDER_NUMBER' => '주문:',
    'LBL_TASK_NUMBER' => '업무 번호:',
    'LBL_TASK_ID' => '업무 ID:',
    'LBL_MILESTONE_FLAG' => '중요:',
    'LBL_ESTIMATED_EFFORT' => '견적시간(시간):',
    'LBL_ACTUAL_EFFORT' => '실적시간(시간):',
    'LBL_UTILIZATION' => '부하률 (%):',
    'LBL_DELETED' => '삭제됨:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PARENT_NAME' => 'Project',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => '% Complete',
    'LBL_LIST_STATUS' => '상태',
    'LBL_LIST_ASSIGNED_USER_ID' => '담당자',
    'LBL_LIST_DATE_DUE' => '만료일',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_CLOSE' => '닫기',
    'LBL_PROJECT_NAME' => 'Project Name',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Project List',
    'LNK_NEW_PROJECT_TASK' => 'Create Project Task',
    'LNK_PROJECT_TASK_LIST' => '프로젝트 작업',

    'LBL_LIST_MY_PROJECT_TASKS' => '내 프로젝트 업무',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '프로젝트 작업',
    'LBL_NEW_FORM_TITLE' => '신규 프로젝트 업무',

    'LBL_HISTORY_TITLE' => '연혁',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '활동내역',
    'LBL_HISTORY_SUBPANEL_TITLE' => '보관함',

    'LBL_ASSIGNED_USER_NAME' => '담당자',
    'LBL_PARENT_NAME' => 'Project Name',
    'LBL_EDITLAYOUT' => '레이아웃 수정' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => '타임라인',

    'LBL_SUBTASK' => '하위 업무',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_RELATIONSHIP_TYPE' => 'Relationship Type',

    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
