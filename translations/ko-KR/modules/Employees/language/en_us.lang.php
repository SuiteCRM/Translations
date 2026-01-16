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
    'LBL_MODULE_NAME' => '사원',
    'LBL_MODULE_TITLE' => '사원: 홈',
    'LBL_SEARCH_FORM_TITLE' => '사원 검색',
    'LBL_LIST_FORM_TITLE' => '사원',
    'LBL_NEW_FORM_TITLE' => '신규 사원',
    'LBL_LOGIN' => '로그인',
    'LBL_RESET_PREFERENCES' => '초기값으로 설정',
    'LBL_TIME_FORMAT' => '시간표시형식:',
    'LBL_DATE_FORMAT' => '일자표시형식:',
    'LBL_TIMEZONE' => '현재시간:',
    'LBL_CURRENCY' => '통화:',
    'LBL_LIST_NAME' => '이름',
    'LBL_LIST_LAST_NAME' => '성',
    'LBL_LIST_EMPLOYEE_NAME' => '사원 이름:',
    'LBL_LIST_DEPARTMENT' => '부서',
    'LBL_LIST_REPORTS_TO_NAME' => '직속상사',
    'LBL_LIST_EMAIL' => '이메일',
    'LBL_LIST_USER_NAME' => '사용자 이름',
    'LBL_ERROR' => '에러:',
    'LBL_PASSWORD' => '비밀번호',
    'LBL_USER_NAME' => '사용자 이름:',
    'LBL_USER_TYPE' => '유저 형태',
    'LBL_FIRST_NAME' => '이름:',
    'LBL_LAST_NAME' => '성:',
    'LBL_THEME' => '테마:',
    'LBL_LANGUAGE' => '언어:',
    'LBL_ADMIN' => '관리자:',
    'LBL_EMPLOYEE_INFORMATION' => '사원 정보',
    'LBL_OFFICE_PHONE' => '회사전화:',
    'LBL_REPORTS_TO' => '직속상사Id:',
    'LBL_REPORTS_TO_NAME' => '직속상사:',
    'LBL_OTHER_PHONE' => '기타전화:',
    'LBL_NOTES' => '노트:',
    'LBL_DEPARTMENT' => '부문:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => '연락주소:',
    'LBL_ANY_PHONE' => '전화:',
    'LBL_ANY_EMAIL' => '이메일:',
    'LBL_ADDRESS' => '주소:',
    'LBL_CITY' => '시구군:',
    'LBL_STATE' => '주 또는 지역',
    'LBL_POSTAL_CODE' => '우편번호:',
    'LBL_COUNTRY' => '국가:',
    'LBL_NAME' => '이름:',
    'LBL_MOBILE_PHONE' => '휴대폰:',
    'LBL_FAX' => '팩스:',
    'LBL_EMAIL' => '이메일 주소:',
    'LBL_EMAIL_LINK_TYPE' => '이메일 클라이언트',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM 메일 클라이언트:</b> SuiteCRM 응용 프로그램에서 직접 이메일 클라이언트를 사용하여 이메일을 보냅니다. <br><b>외부 메일 클라이언트:</b> Microsoft Outlook과 같은 SuiteCRM 응용 프로그램 외부의 이메일 클라이언트를 사용하여 이메일을 보냅니다.',
    'LBL_HOME_PHONE' => '자택전화:',
    'LBL_WORK_PHONE' => '업무용전화:',
    'LBL_EMPLOYEE_STATUS' => '상태:',
    'LBL_PRIMARY_ADDRESS' => '메인주소:',
    'LBL_SAVED_SEARCH' => '레이아웃 옵션',
    'LBL_MESSENGER_ID' => 'IM 명:',
    'LBL_MESSENGER_TYPE' => 'IM 종류:',
    'ERR_LAST_ADMIN_1' => '사원 이름 "',
    'ERR_LAST_ADMIN_2' => '" 은 관리자 권한을 갖는 마지막 사원입니다. 최소 한 명의 관리자가 필요합니다.',
    'LNK_NEW_EMPLOYEE' => '사원 등록',
    'LNK_EMPLOYEE_LIST' => '사원 리스트',
    'ERR_DELETE_RECORD' => '거래처를 삭제하려면 레코드 번호를 지정해야 합니다.',
    'LBL_LIST_EMPLOYEE_STATUS' => '사원 상태',

    'LBL_SUITE_LOGIN' => '은 사용자입니다.',
    'LBL_RECEIVE_NOTIFICATIONS' => '할당통보',
    'LBL_IS_ADMIN' => '관리자',
    'LBL_GROUP' => '그룹 유저',
    'LBL_PHOTO' => '사진',
    'LBL_DELETE_USER_CONFIRM' => '이 사원은 사용자 이기도 합니다. 사원 정보를 삭제하면, 사용자 정보도 삭제되며, 어플리케이션에 접속할 수 없게 됩니다. 정말로 이 정보를 삭제 하시겠습니까?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => '정말로 이 사원을 삭제하시겠습니까?',
    'LBL_ONLY_ACTIVE' => '활성화된 사원',
    'LBL_SELECT' => '선택' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => '인증ID',
    'LBL_EXT_AUTHENTICATE' => '외부 인증',
    'LBL_GROUP_USER' => '그룹 유저',
    'LBL_LIST_ACCEPT_STATUS' => '허가상태',
    'LBL_MODIFIED_BY' => '변경됨',
    'LBL_MODIFIED_BY_ID' => 'Id로 변경됨',
    'LBL_CREATED_BY_NAME' => '작성자', //bug48978
    'LBL_PORTAL_ONLY_USER' => '포털 API 유저',
    'LBL_PSW_MODIFIED' => '패스워드 변경일',
    'LBL_SHOW_ON_EMPLOYEES' => '사원 정보를 표시',
    'LBL_USER_HASH' => '비밀번호:',
    'LBL_SYSTEM_GENERATED_PASSWORD' => '시스템 패스워드 생성',
    'LBL_DESCRIPTION' => '상세',
    'LBL_FAX_PHONE' => '팩스:',
    'LBL_STATUS' => '상태',
    'LBL_ADDRESS_CITY' => '시구군:',
    'LBL_ADDRESS_COUNTRY' => '국가',
    'LBL_ADDRESS_INFORMATION' => '주소 정보',
    'LBL_ADDRESS_POSTALCODE' => '우편번호:',
    'LBL_ADDRESS_STATE' => '읍면동:',
    'LBL_ADDRESS_STREET' => '나머지주소:',

    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_DATE_ENTERED' => '입력일',
    'LBL_DELETED' => '삭제됨',

    'LBL_BUTTON_SELECT' => '선택',
    'LBL_BUTTON_CLEAR' => '지우기',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth 토큰',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => '프로젝트 제목에서 프로젝트 사용자',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => '역할',
    'LBL_SECURITYGROUPS' => '보안 그룹',
    'LBL_PROSPECT_LIST' => '가망고객 목록',

    'LBL_FACTOR_AUTH_INTERFACE' => '2단계 인증 인터페이스:',
    'LBL_EDITOR_TYPE' => '편집기',
);
