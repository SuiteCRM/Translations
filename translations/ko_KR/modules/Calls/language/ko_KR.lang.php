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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => '방문',
    'LBL_MODULE_TITLE' => '콜: 홈',
    'LBL_SEARCH_FORM_TITLE' => '콜 검색',
    'LBL_LIST_FORM_TITLE' => '콜 리스트',
    'LBL_NEW_FORM_TITLE' => '콜스케쥴작성',
    'LBL_LIST_CLOSE' => '닫기',
    'LBL_LIST_SUBJECT' => '제목',
    'LBL_LIST_CONTACT' => '연락처',
    'LBL_LIST_RELATED_TO' => '관련처',
    'LBL_LIST_RELATED_TO_ID' => 'ID 관련',
    'LBL_LIST_DATE' => '시작일',
    'LBL_LIST_DIRECTION' => '방향',
    'LBL_SUBJECT' => '제목:',
    'LBL_REMINDER' => '미리 알림:',
    'LBL_CONTACT_NAME' => '연락처:',
    'LBL_DESCRIPTION' => '상세:',
    'LBL_STATUS' => '상태',
    'LBL_DIRECTION' => '방향:',
    'LBL_DATE' => '시작일:',
    'LBL_DURATION' => '시간:',
    'LBL_DURATION_HOURS' => '시:',
    'LBL_DURATION_MINUTES' => '분:',
    'LBL_HOURS_MINUTES' => '(시간/분)',
    'LBL_DATE_TIME' => '시작일시:',
    'LBL_TIME' => '시작시간:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => '전화통화 예약',
    'LNK_NEW_MEETING' => '미팅일정 추가',
    'LNK_CALL_LIST' => '콜리스트',
    'LNK_IMPORT_CALLS' => '콜 가져오기',
    'ERR_DELETE_RECORD' => '계정을 삭제하기 위해 레코드번호가 지정되어야 합니다.',
    'LBL_INVITEE' => '참석자',
    'LBL_RELATED_TO' => '관련처:',
    'LNK_NEW_APPOINTMENT' => '콜스케쥴작성',
    'LBL_SCHEDULING_FORM_TITLE' => '스케쥴',
    'LBL_ADD_INVITEE' => '참석자 추가',
    'LBL_NAME' => '이름',
    'LBL_FIRST_NAME' => '이름',
    'LBL_LAST_NAME' => '성',
    'LBL_EMAIL' => '이메일',
    'LBL_PHONE' => '전화:',
    'LBL_REMINDER_POPUP' => '팝업',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => '모든 참석자에게 이메일 보내기',
    'LBL_EMAIL_REMINDER' => '이메일 미리 알림',
    'LBL_EMAIL_REMINDER_TIME' => '이메일 미리 알림 시간',
    'LBL_SEND_BUTTON_TITLE' => '초대메일송신',
    'LBL_SEND_BUTTON_LABEL' => '초대메일송신',
    'LBL_DATE_END' => '종료일',
    'LBL_REMINDER_TIME' => '미리 알림 시간',
    'LBL_EMAIL_REMINDER_SENT' => '이메일 미리 알림 전송',
    'LBL_SEARCH_BUTTON' => '검색',
    'LBL_ADD_BUTTON' => '추가',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '방문',
    'LNK_SELECT_ACCOUNT' => '거래처선택',
    'LNK_NEW_ACCOUNT' => '신규 거래처',
    'LNK_NEW_OPPORTUNITY' => '신규안건작성',
    'LBL_LEADS_SUBPANEL_TITLE' => '가망고객',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처',
    'LBL_USERS_SUBPANEL_TITLE' => '사용자',
    'LBL_OUTLOOK_ID' => '아웃룩ID',
    'LBL_MEMBER_OF' => '멤버',
    'LBL_HISTORY_SUBPANEL_TITLE' => '노트',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
    'LBL_LIST_MY_CALLS' => '내 전화',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ASSIGNED_TO_ID' => '담당자',
    'NOTICE_DURATION_TIME' => '시간이 0 보다 커야 합니다.',
    'LBL_CALL_INFORMATION' => '개요', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => '삭제',
    'LBL_ACCEPT_STATUS' => '허가상태',
    'LBL_ACCEPT_LINK' => '링크를 허용',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => '참석자 작성하기',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => '만들기 및 추가',
    'LBL_CANCEL_CREATE_INVITEE' => '취소',
    'LBL_EMPTY_SEARCH_RESULT' => '죄송합니다. 결과를 찾을 수 없습니다. 참석자를 만들어 주십시오.',
    'LBL_NO_ACCESS' => '$module을 만들 수 없습니다.',

    'LBL_REPEAT_TYPE' => '유형 반복',
    'LBL_REPEAT_INTERVAL' => '인터벌 반복',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => '~할 때까지 반복',
    'LBL_REPEAT_COUNT' => '카운트 반복',
    'LBL_REPEAT_PARENT_ID' => '상위 아이디 반복',
    'LBL_RECURRING_SOURCE' => '반복 소스',

    'LBL_SYNCED_RECURRING_MSG' => '이 콜은 다른 시스템에서 SuitCRM으로 동기화 되었습니다. 변경하려면, 해당 시스템에서 수행하십시오. 다른시스템에서 변경된 내용은 동기화 됩니다.',

    // for reminders
    'LBL_REMINDERS' => '미리 알림',
    'LBL_REMINDERS_ACTIONS' => '동작',
    'LBL_REMINDERS_POPUP' => '팝업',
    'LBL_REMINDERS_EMAIL' => '이메일 알림',
    'LBL_REMINDERS_WHEN' => '언제:',
    'LBL_REMINDERS_REMOVE_REMINDER' => '미리 알림 제거',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => '모든 참석자 추가',
    'LBL_REMINDERS_ADD_REMINDER' => '미리 알림 추가',

    'LBL_RESCHEDULE' => '일정 변경',
    'LBL_RESCHEDULE_COUNT' => '통화 시도',
    'LBL_RESCHEDULE_DATE' => '날짜',
    'LBL_RESCHEDULE_REASON' => '원인',
    'LBL_RESCHEDULE_ERROR1' => '유효한 날짜를 선택 하십시오',
    'LBL_RESCHEDULE_ERROR2' => '이유를 선택 하십시오',
    'LBL_RESCHEDULE_PANEL' => '일정 변경',
    'LBL_RESCHEDULE_HISTORY' => '통화 시도 내역',
    'LBL_CANCEL' => '취소',
    'LBL_SAVE' => '저장',

    'LBL_CALLS_RESCHEDULE' => '통화 재시도',
    'LBL_LIST_STATUS'=>'상태',
    'LBL_LIST_DATE_MODIFIED'=>'수정일',
    'LBL_LIST_DUE_DATE'=>'종료일',
    'LBL_RESCHEDULED_BY'=>'으로',
);
