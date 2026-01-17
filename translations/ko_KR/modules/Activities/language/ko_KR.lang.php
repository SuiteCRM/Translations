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
    'LBL_MODULE_NAME' => '영업활동',
    'LBL_MODULE_TITLE' => '영엉활동: 홈',
    'LBL_SEARCH_FORM_TITLE' => '활동 검색',
    'LBL_LIST_FORM_TITLE' => '활동 목록',
    'LBL_LIST_SUBJECT' => '제목',
    'LBL_OVERVIEW' => '개요', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => '작업', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => '회의 목록', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => '전화통화', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => '메일', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => '노트', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => '인쇄', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => '미팅',
    'LBL_CALL_TYPE' => '전화통화',
    'LBL_EMAIL_TYPE' => '이메일',
    'LBL_NOTE_TYPE' => '노트',
    'LBL_DATA_TYPE_START' => '시작:',
    'LBL_DATA_TYPE_SENT' => '보냄:',
    'LBL_DATA_TYPE_MODIFIED' => '변경됨:',
    'LBL_LIST_CONTACT' => '연락처',
    'LBL_LIST_RELATED_TO' => '관련처',
    'LBL_LIST_DATE' => '날짜',
    'LBL_LIST_CLOSE' => '닫기',
    'LBL_SUBJECT' => '제목:',
    'LBL_STATUS' => '상태',
    'LBL_LOCATION' => '장소:',
    'LBL_DATE_TIME' => '시작일시:',
    'LBL_DATE' => '시작일:',
    'LBL_TIME' => '시작시간:',
    'LBL_DURATION' => '시간:',
    'LBL_HOURS_MINS' => '(시간/분)',
    'LBL_CONTACT_NAME' => '거래처 담당자명: ',
    'LBL_DESCRIPTION' => '상세:',
    'LNK_NEW_CALL' => '전화통화 예약',
    'LNK_NEW_MEETING' => '미팅일정 추가',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_NEW_NOTE' => '노트 작성',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => '콜리스트',
    'LNK_MEETING_LIST' => '미팅리스트',
    'LNK_TASK_LIST' => '업무',
    'LNK_NOTE_LIST' => '노트',
    'LBL_DELETE_ACTIVITY' => '이 활동을 삭제 하시겠습니까?',
    'ERR_DELETE_RECORD' => '거래처를 삭제하려면 레코드 번호를 지정해야 합니다.',
    'LBL_INVITEE' => '참석자',
    'LBL_LIST_DIRECTION' => '방향',
    'LBL_DIRECTION' => '방향',
    'LNK_NEW_APPOINTMENT' => '새 약속',
    'LNK_VIEW_CALENDAR' => '일정 보기',
    'LBL_OPEN_ACTIVITIES' => '영업활동 열기',
    'LBL_HISTORY' => '이력',
    'LBL_NEW_TASK_BUTTON_TITLE' => '업무 작성',
    'LBL_NEW_TASK_BUTTON_LABEL' => '업무 작성',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => '미팅일정 추가',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => '미팅일정 추가',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => '전화통화 예약',
    'LBL_NEW_NOTE_BUTTON_TITLE' => '노트작성',
    'LBL_NEW_NOTE_BUTTON_LABEL' => '노트작성',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => '메일저장',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => '메일저장',
    'LBL_LIST_STATUS' => '상태',
    'LBL_LIST_DUE_DATE' => '종료일',
    'LBL_LIST_LAST_MODIFIED' => '최종변경일',
    'LNK_IMPORT_CALLS' => '콜 가져오기',
    'LNK_IMPORT_MEETINGS' => '미팅 가져오기',
    'LNK_IMPORT_TASKS' => '업무 가져오기',
    'LNK_IMPORT_NOTES' => '노트읽어들이기',
    'LBL_ACCEPT_THIS' => '허가?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '영업활동 열기',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',

    'LBL_ACCEPT' => '승인' /*for 508 compliance fix*/,
);
