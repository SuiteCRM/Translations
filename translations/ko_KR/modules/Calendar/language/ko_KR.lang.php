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

    'LBL_SHAREDWEEK' => '주단위 공유일정',
    'LBL_SHAREDMONTH' => '월단위 공유일정',

    'LBL_MODULE_NAME' => '일정',
    'LBL_MODULE_TITLE' => '일정',
    'LNK_NEW_CALL' => '콜예약작성',
    'LNK_NEW_MEETING' => '미팅일정 추가',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_CALL_LIST' => '방문',
    'LNK_MEETING_LIST' => '미팅',
    'LNK_TASK_LIST' => '작업',
    'LNK_TASK' => '업무',
    'LNK_TASK_VIEW' => '업무 보기',
    'LNK_EVENT' => '이벤트',
    'LNK_EVENT_VIEW' => '이벤트 보기',
    'LNK_VIEW_CALENDAR' => '오늘',
    'LNK_IMPORT_CALLS' => '콜 가져오기',
    'LNK_IMPORT_MEETINGS' => '미팅 가져오기',
    'LNK_IMPORT_TASKS' => '업무 가져오기',
    'LBL_MONTH' => '월',
    'LBL_AGENDADAY' => '일별',
    'LBL_YEAR' => '년도별',

    'LBL_AGENDAWEEK' => '주별',
    'LBL_PREVIOUS_MONTH' => '전월',
    'LBL_PREVIOUS_DAY' => '전일',
    'LBL_PREVIOUS_YEAR' => '전년',
    'LBL_PREVIOUS_WEEK' => '전주',
    'LBL_NEXT_MONTH' => '차월',
    'LBL_NEXT_DAY' => '다음날',
    'LBL_NEXT_YEAR' => '차년',
    'LBL_NEXT_WEEK' => '다음주',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => '작성완료',
    'LBL_BUSY' => '예정있음',
    'LBL_CONFLICT' => '다른일정과중복',
    'LBL_USER_CALENDARS' => '유저일정',
    'LBL_SHARED' => '공유',
    'LBL_PREVIOUS_SHARED' => '이전',
    'LBL_NEXT_SHARED' => '다음',
    'LBL_SHARED_CAL_TITLE' => '공유일정',
    'LBL_USERS' => '사용자',
    'LBL_REFRESH' => '갱긴',
    'LBL_EDIT_USERLIST' => '유저리스트',
    'LBL_SELECT_USERS' => '표시할유저선택',
    'LBL_FILTER_BY_TEAM' => '팀별 표시:',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_DATE' => '시작 날짜 및 시간',
    'LBL_CREATE_MEETING' => '미팅일정 추가',
    'LBL_CREATE_CALL' => '전화통화 예약',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => '예',
    'LBL_NO' => '아니오',
    'LBL_SETTINGS' => '설정',
    'LBL_CREATE_NEW_RECORD' => '활동 만들기',
    'LBL_LOADING' => '로드 중...',
    'LBL_SAVING' => '저장중 입니다.',
    'LBL_SENDING_INVITES' => 'Saving & Sending Invites .....',
    'LBL_CONFIRM_REMOVE' => '이 기록을 삭제하시겠습니까?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '모든 반복 레코드를 제거 하 시겠습니까?',
    'LBL_EDIT_RECORD' => '활동 편집',
    'LBL_ERROR_SAVING' => '저장 중 오류 발생',
    'LBL_ERROR_LOADING' => '로딩 중 오류 발생',
    'LBL_GOTO_DATE' => 'Goto Date',
    'NOTICE_DURATION_TIME' => '시간이 0 보다 커야 합니다.',
    'LBL_STYLE_BASIC' => '기본', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'ADVANCED', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => '필드에 연관되는게 없습니다:',
    'LBL_SUBJECT' => '제목',
    'LBL_DURATION' => '시간',
    'LBL_STATUS' => '상태',
    'LBL_PRIORITY' => '우선순위',

    'LBL_SETTINGS_TITLE' => '설정',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '일 및 주 보기에서 시간 슬롯을 표시:',
    'LBL_SETTINGS_TIME_STARTS' => '시간시간:',
    'LBL_SETTINGS_TIME_ENDS' => '종료 시간:',
    'LBL_SETTINGS_CALLS_SHOW' => '전화 정보 표시:',
    'LBL_SETTINGS_TASKS_SHOW' => '업무 보기:',
    'LBL_SETTINGS_COMPLETED_SHOW' => '완료된 미팅, 전화, 업무 보기',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => '공유일정은 분류해서 보기',

    'LBL_SAVE_BUTTON' => '저장',
    'LBL_DELETE_BUTTON' => '삭제',
    'LBL_APPLY_BUTTON' => '적용',
    'LBL_SEND_INVITES' => '초대메일송신',
    'LBL_CANCEL_BUTTON' => '취소',
    'LBL_CLOSE_BUTTON' => '닫기',

    'LBL_GENERAL_TAB' => '상세정보',
    'LBL_PARTICIPANTS_TAB' => '참석자',
    'LBL_REPEAT_TAB' => '레퍼런스',

    'LBL_REPEAT_TYPE' => '반복',
    'LBL_REPEAT_INTERVAL' => '모든',
    'LBL_REPEAT_END' => '최후',
    'LBL_REPEAT_END_AFTER' => '이후',
    'LBL_REPEAT_OCCURRENCES' => '재발',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => '시간:',
    'LBL_REPEAT_UNTIL' => '~할 때까지 반복',
    'LBL_REPEAT_COUNT' => '재발의 수',
    'LBL_REPEAT_LIMIT_ERROR' => '$limit 개 이상의 일정생성이 요청되었습니다.',

    'LBL_EDIT_ALL_RECURRENCES' => '모든 재발 편집',
    'LBL_REMOVE_ALL_RECURRENCES' => '모든 재발 삭제',

    'LBL_DATE_END_ERROR' => '마지막 날짜는 시작날짜 전입니다.',
    'ERR_YEAR_BETWEEN' => '죄송합니다. 캘린더는 당신이 요청한 해로 조정할 수 업습니다. 해당 연도는 1970년과 2037년 사이어야 합니다.',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => '현재 주에는 일정이 없습니다.',
    'LBL_GENERAL_SETTINGS' => '일반 설정',
    'LBL_COLOR_SETTINGS' => '색상 설정',
    'LBL_MODULE' => '모듈',
    'LBL_BODY' => '본문',
    'LBL_BORDER' => '경계',
    'LBL_TEXT' => '텍스트',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "일",
            '1' => "월",
            '2' => "화",
            '3' => "수",
            '4' => "목",
            '5' => "금",
            '6' => "토",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "일요일",
            '1' => "월요일",
            '2' => "화요일",
            '3' => "수요일",
            '4' => "목요일",
            '5' => "금요일",
            '6' => "토요일",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "1",
            '2' => "2",
            '3' => "3",
            '4' => "4",
            '5' => "5월",
            '6' => "6",
            '7' => "7",
            '8' => "8",
            '9' => "9",
            '10' => "10",
            '11' => "11",
            '12' => "12월",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "1월",
            '2' => "2월",
            '3' => "3월",
            '4' => "4월",
            '5' => "5월",
            '6' => "6월",
            '7' => "7월",
            '8' => "8월",
            '9' => "9월",
            '10' => "10월",
            '11' => "11월",
            '12' => "12월",
        ),
);
