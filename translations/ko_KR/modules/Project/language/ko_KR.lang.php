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
    'LBL_MODULE_NAME' => '프로젝트',
    'LBL_MODULE_TITLE' => '프로젝트: 홈',
    'LBL_SEARCH_FORM_TITLE' => '프로젝트 검색',
    'LBL_LIST_FORM_TITLE' => '프로젝트 리스트',
    'LBL_HISTORY_TITLE' => '이력',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => '등록일:',
    'LBL_DATE_MODIFIED' => '변경일:',
    'LBL_ASSIGNED_USER_ID' => '담당자:',
    'LBL_ASSIGNED_USER_NAME' => '프로젝트 매니저:',
    'LBL_MODIFIED_USER_ID' => '수정된 유저 Id:',
    'LBL_CREATED_BY' => '등록자:',
    'LBL_NAME' => '이름:',
    'LBL_DESCRIPTION' => '상세:',
    'LBL_DELETED' => '삭제됨:',
    'LBL_DATE' => '날짜',
    'LBL_DATE_START' => '시작일:',
    'LBL_DATE_END' => '종료일:',
    'LBL_PRIORITY' => '우선순위:',
    'LBL_LIST_NAME' => '이름',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => '견적시간계 (시간)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => '실질시간계 (시간)',
    'LBL_LIST_END_DATE' => '종료일',
    'LBL_PROJECT_SUBPANEL_TITLE' => '프로젝트',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => '프로젝트 작업',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => '영업기회',
    'LBL_PROJECT_PREDECESSOR_NONE' => '없음',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => '프로젝트 작성',
    'LNK_NEW_PROJECT' => '프로젝트 작성',
    'LNK_PROJECT_LIST' => '프로젝트 리스트',
    'LNK_NEW_PROJECT_TASK' => '프로젝트 업무 작성',
    'LNK_PROJECT_TASK_LIST' => '프로젝트 업무',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '프로젝트',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '거래처',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '영업기회',
    'LBL_CASES_SUBPANEL_TITLE' => '사례',
    'LBL_BUGS_SUBPANEL_TITLE' => '버그',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => '업무 이름',
    'LBL_DURATION' => '시간',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => '최초',
    'LBL_FINISH' => '종료',
    'LBL_PREDECESSORS' => '선행 작업',
    'LBL_PERCENT_COMPLETE' => '진척률(%)',
    'LBL_MORE' => 'More...',
    'LBL_OPPORTUNITIES' => '영업기회',
    'LBL_NEXT_WEEK' => '다음',
    'LBL_PROJECT_INFORMATION' => '프로젝트 개요',
    'LBL_EDITLAYOUT' => '레이아웃 편집' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => '프로젝트 작업',
    'LBL_VIEW_GANTT_TITLE' => '간트차트 보기',
    'LBL_VIEW_GANTT_DURATION' => '시간',
    'LBL_TASK_TITLE' => '업무 편집',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => '일',
    'LBL_HOURS' => '시간',
    'LBL_MONTHS' => '월별',
    'LBL_SUBTASK' => '업무',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => '새 업무 추가',
    'LBL_DELETE_TASK' => '업무 삭제',
    'LBL_EDIT_TASK_PROPERTIES' => '업무 속성 편집',
    'LBL_PARENT_TASK_ID' => '상위 업무 Id',
    'LBL_RESOURCE_CHART' => '리소스 일정',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => '프로젝트 매니저',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => '프로젝트 서식',
    'LBL_STATUS' => '상태',
    'LBL_LIST_ASSIGNED_USER_ID' => '프로젝트 매니저',
    'LBL_TOOLTIP_PROJECT_NAME' => '프로젝트',
    'LBL_TOOLTIP_TASK_NAME' => '업무 이름',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => '시간',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Resource is a User',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Resource is a Contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => '전월',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => '차월',
    'LBL_RESOURCE_CHART_WEEK' => '주별',
    'LBL_RESOURCE_CHART_DAY' => '일별',
    'LBL_RESOURCE_CHART_WARNING' => '프로젝트 배정된 자원이 없습니다.',
    'LBL_PROJECT_DELETE_MSG' => '프로젝트와 연관된 작업목록을 정말 삭제하시겠습니까?',
    'LBL_LIST_MY_PROJECT' => '내 프로젝트',
    'LBL_LIST_ASSIGNED_USER' => '프로젝트 매니저',
    'LBL_UNASSIGNED' => '미 배정',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => '자원',

    'LBL_EMAIL' => '이메일',
    'LBL_PHONE' => '회사전화:',
    'LBL_ADD_BUTTON' => '추가',
    'LBL_ADD_INVITEE' => '자원 추가',
    'LBL_FIRST_NAME' => '이름',
    'LBL_LAST_NAME' => '성',
    'LBL_SEARCH_BUTTON' => '검색',
    'LBL_EMPTY_SEARCH_RESULT' => '죄송합니다. 결과를 찾을 수 없습니다. 참석자를 만들어 주십시오.',
    'LBL_CREATE_INVITEE' => '자원 등록',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => '만들기 및 추가',
    'LBL_CANCEL_CREATE_INVITEE' => '취소',
    'LBL_NO_ACCESS' => '$module을 만들 수 없습니다.',
    'LBL_SCHEDULING_FORM_TITLE' => '자원 목록',
    'LBL_REMOVE' => '삭제',
    'LBL_VIEW_DETAIL' => '상세표시',
    'LBL_OVERRIDE_BUSINESS_HOURS' => '작업 일 고려',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => '프로젝트 검색',
    'LBL_USERS_SEARCH' => '사용자 검색',
    'LBL_CONTACTS_SEARCH' => '연락처 선택',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => '검색',

    'LBL_CHART_TYPE' => '종류',
    'LBL_CHART_WEEKLY' => '매주',
    'LBL_CHART_MONTHLY' => '매월',
    'LBL_CHART_QUARTERLY' => '분기별',

    'LBL_RESOURCE_CHART_MONTH' => '월',
    'LBL_RESOURCE_CHART_QUARTER' => '분기',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => '오름차순',
    'LBL_DESCENDING' => '내림차순',
);
