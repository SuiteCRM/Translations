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
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '생성날짜',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '변경됨',
    'LBL_MODIFIED_NAME' => '이름으로 변경됨',
    'LBL_CREATED' => '작성자',
    'LBL_DESCRIPTION' => '상세',
    'LBL_DELETED' => '삭제됨',
    'LBL_NAME' => '이름',
    'LBL_SAVING' => '저장중 입니다.',
    'LBL_SAVED' => '저장',
    'LBL_CREATED_USER' => '사용자로 생성됨',
    'LBL_MODIFIED_USER' => '변경유저',
    'LBL_LIST_FORM_TITLE' => '필드 목록',
    'LBL_MODULE_NAME' => '활동 스트림',
    'LBL_MODULE_TITLE' => '활동 스트림',
    'LBL_DASHLET_DISABLED' => '경고: 피드 시스템 비활성화 되었습니다. 활성화 될 때까지 새로운 피드 항목이 게시 되지 않을 것입니다.',
    'LBL_RECORDS_DELETED' => '모든 이전 피드 항목들이 제거 되었습니다, 피드 시스템이 활성화 될 경우, 새 항목들이 자동으로 생성 됩니다.',
    'LBL_CONFIRM_DELETE_RECORDS' => '모든 피드 항목을 삭제하시겠습니까?',
    'LBL_FLUSH_RECORDS' => '피드 항목을 삭제 합니다',
    'LBL_ENABLE_FEED' => '내 활동 스트림 Dashlet을 활성화',
    'LBL_ENABLE_MODULE_LIST' => '다음에 대한 피드 활성화',
    'LBL_HOMEPAGE_TITLE' => '내 활동 스트림',
    'LNK_NEW_RECORD' => '피드 만들기',
    'LNK_LIST' => '공급',
    'LBL_SEARCH_FORM_TITLE' => '검색 피드',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력 표시',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_NEW_FORM_TITLE' => '새 피드',
    'LBL_ALL' => '전체',
    'LBL_USER_FEED' => '사용자 피드',
    'LBL_ENABLE_USER_FEED' => '사용자 피드를 활성화',
    'LBL_TO' => '팀을 볼 수있는',
    'LBL_IS' => 'is',
    'LBL_DONE' => '완료',
    'LBL_TITLE' => '제목',
    'LBL_ROWS' => '행',
    'LBL_CATEGORIES' => 'Module',
    'LBL_TIME_LAST_WEEK' => '전주',
    'LBL_TIME_WEEKS' => '주',
    'LBL_TIME_DAYS' => '일',
    'LBL_TIME_YESTERDAY' => '어제',
    'LBL_TIME_HOURS' => '시간',
    'LBL_TIME_HOUR' => '시간',
    'LBL_TIME_MINUTES' => '분',
    'LBL_TIME_MINUTE' => '분',
    'LBL_TIME_SECONDS' => '초',
    'LBL_TIME_SECOND' => '초',
    'LBL_TIME_AND' => '그리고',
    'LBL_TIME_AGO' => '전',
// Activity stream
    'CREATED_CONTACT' => 'created a <b>NEW</b> {0}',
    'CREATED_OPPORTUNITY' => 'created a <b>NEW</b> {0}',
    'CREATED_CASE' => 'created a <b>NEW</b> {0}',
    'CREATED_LEAD' => 'created a <b>NEW</b> {0}',
    'FOR' => 'for', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '사례 {0} 를 <b>완료</b>했습니다.',
    'CONVERTED_LEAD' => '{0}를 <b>전환하였습니다.</b>',
    'WON_OPPORTUNITY' => 'has <b>WON</b> an {0}',
    'WITH' => 'with',

    'LBL_LINK_TYPE_Link' => '링크',
    'LBL_LINK_TYPE_Image' => '이미지',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => '선택',
    'LBL_POST' => '올리기',
    'LBL_AUTHENTICATE' => '에 연결',
    'LBL_AUTHENTICATION_PENDING' => '선택한 외부 계정들 모두가 인증 되지는 않았습니다. 외부 계정을 인증하기 위한 옵션 창으로 돌아가려면 \'취소\'를 클릭하시고, 인증 하지 않고 계속 하려면 \' 확인\'을 클릭하십시오.',
    'LBL_ADVANCED_SEARCH' => '고급 필터' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => '추가 옵션 표시',
    'LBL_HIDE_OPTIONS' => '옵션 숨기기',
    'LBL_VIEW' => '표시',
    'LBL_POST_TITLE' => '다음에 관한 상태 업데이트 ',
    'LBL_URL_LINK_TITLE' => '사용할 URL 링크',
);
