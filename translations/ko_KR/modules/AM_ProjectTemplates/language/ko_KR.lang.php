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
    'LBL_ASSIGNED_TO_ID' => '할당된 사용자 Id',
    'LBL_ASSIGNED_TO_NAME' => '프로젝트 매니저',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '생성날짜',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '변경됨',
    'LBL_MODIFIED_NAME' => '이름으로 변경됨',
    'LBL_CREATED' => '작성자',
    'LBL_DELETED' => '삭제됨',
    'LBL_NAME' => '서식명',
    'LBL_CREATED_USER' => '사용자로 생성됨',
    'LBL_MODIFIED_USER' => '변경유저',
    'LBL_LIST_NAME' => '이름',
    'LBL_EDIT_BUTTON' => '편집',
    'LBL_REMOVE' => '삭제',
    'LBL_LIST_FORM_TITLE' => '프로젝트 서식 목록',
    'LBL_MODULE_NAME' => '프로젝트 서식',
    'LBL_MODULE_TITLE' => '프로젝트 서식',
    'LBL_HOMEPAGE_TITLE' => '나의 프로젝트 서식',
    'LNK_NEW_RECORD' => '프로젝트 서식 만들기',
    'LNK_LIST' => '프로젝트 서식 보기',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => '프로젝트 서식 가져오기',
    'LBL_SEARCH_FORM_TITLE' => '프로젝트 서식 검색',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력 표시',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_NEW_FORM_TITLE' => '새로운 프로젝트 서식',
    'LBL_STATUS' => '상태',
    'LBL_PRIORITY' => '우선순위',
    'LBL_PROJECT_NAME' => '프로젝트명',
    'LBL_START_DATE' => '시작일',
    'LBL_CREATE_PROJECT_TITLE' => '이 서식으로 새로운 프로젝트 생성',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => '업무 서식',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => '사용자',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => '연락처',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => '자원 선택',
    'LBL_NEW_PROJECT_CREATED' => '새로운 프로젝트 생성',
    'LBL_NEW_PROJECT' => '프로젝트 작성',
    'LBL_CANCEL_PROJECT' => '취소',

    'LBL_SUBTASK' => '업무',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => '일',
    'LBL_HOURS' => '시간',
    'LBL_MONTHS' => '월별',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => '프로젝트 작업',
    'LBL_VIEW_GANTT_TITLE' => '간트차트 보기',
    'LBL_VIEW_GANTT_DURATION' => '시간',
    'LBL_TASK_TITLE' => '업무 편집',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_DESCRIPTION' => '노트',
    'LBL_ASSIGNED_USER_ID' => '담당자:',

    'LBL_LIST_ASSIGNED_USER' => '프로젝트 매니저',
    'LBL_UNASSIGNED' => '미 배정',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => '자원',
    'LBL_DELETE_TASK' => '업무 삭제',
    'LBL_VIEW_DETAIL' => '상세표시',
    'LBL_ADD_NEW_TASK' => '새 업무 추가',
    'LBL_ASSIGNED_USER_NAME' => '프로젝트 매니저:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => '업무 이름',
    'LBL_DURATION' => '시간',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => '최초',
    'LBL_FINISH' => '종료',
    'LBL_PREDECESSORS' => '선행 작업',
    'LBL_PERCENT_COMPLETE' => '진척률(%)',
    'LBL_EDIT_TASK_PROPERTIES' => '업무 속성 편집',

    'LBL_OVERRIDE_BUSINESS_HOURS' => '작업 일 고려',
    'LBL_COPY_ALL_TASKS' => '모든 작업과 자원 복사',
    'LBL_COPY_SEL_TASKS' => '선택한 작업과 리소스 복사',
    'LBL_TOOLTIP_TITLE' => '힌트',
    'LBL_TOOLTIP_TEXT' => '모든 작업 및 배정된 사용자 복사',

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
    'LBL_NONE' => '없음',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',


);
