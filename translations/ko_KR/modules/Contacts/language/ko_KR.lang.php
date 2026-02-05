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
    'ERR_DELETE_RECORD' => '연락처를 삭제하려면 레코드 번호를 지정합니다.',
    'LBL_ACCOUNT_ID' => '거래처 ID:',
    'LBL_ACCOUNT_NAME' => '거래처명:',
    'LBL_CAMPAIGN' => '캠페인:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_ADDRESS_INFORMATION' => '주소 정보',
    'LBL_ALT_ADDRESS_CITY' => '부가주소 시도구:',
    'LBL_ALT_ADDRESS_COUNTRY' => '부가주소 국가:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '부가주소  우편번호:',
    'LBL_ALT_ADDRESS_STATE' => '부가주소 동읍면:',
    'LBL_ALT_ADDRESS_STREET_2' => '부가주소 주소 2:',
    'LBL_ALT_ADDRESS_STREET_3' => '부가주소 주소 3:',
    'LBL_ALT_ADDRESS_STREET' => '부가주소 주소 1:',
    'LBL_ALTERNATE_ADDRESS' => '연락주소:',
    'LBL_ALT_ADDRESS' => '연락주소:',
    'LBL_ANY_ADDRESS' => '연락주소:',
    'LBL_ANY_EMAIL' => '이메일:',
    'LBL_ANY_PHONE' => '전화:',
    'LBL_ASSIGNED_TO_NAME' => '담당자:',
    'LBL_ASSIGNED_TO_ID' => '담당자',
    'LBL_ASSISTANT_PHONE' => '보조자 전화:',
    'LBL_ASSISTANT' => '보조자:',
    'LBL_BIRTHDATE' => '생년월일:',
    'LBL_CITY' => '시구군:',
    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    'LBL_CONTACT_INFORMATION' => '개요', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => '거래처 담당자명:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '거래담당자-영업기회:',
    'LBL_CONTACT_ROLE' => '역할:',
    'LBL_CONTACT' => '연락처:',
    'LBL_COUNTRY' => '국가:',
    'LBL_CREATED_ACCOUNT' => '새로운거래처가 작성되었습니다',
    'LBL_CREATED_CALL' => '새로운콜이 작성되었습니다',
    'LBL_CREATED_CONTACT' => '새로운 거래처 담당자가 작성되었습니다.',
    'LBL_CREATED_MEETING' => '새로운 미팅약속이 작성되었습니다',
    'LBL_CREATED_OPPORTUNITY' => '신규 상담 작성',
    'LBL_DATE_MODIFIED' => '변경일:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '연락처',
    'LBL_DEPARTMENT' => '부문:',
    'LBL_DESCRIPTION' => '상세:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => '직접 보고',
    'LBL_DO_NOT_CALL' => '통화금지:',
    'LBL_DUPLICATE' => '중복 가능성이 있는 거래처 담당자',
    'LBL_EMAIL_ADDRESS' => '이메일 주소:',
    'LBL_EMAIL_OPT_OUT' => '이메일 수신거부:',
    'LBL_EXISTING_ACCOUNT' => '기존 거래처를 사용',
    'LBL_EXISTING_CONTACT' => '기존 거래처 담당자를 사용',
    'LBL_EXISTING_OPPORTUNITY' => '기존 안건정보를 사용',
    'LBL_FAX_PHONE' => '팩스:',
    'LBL_FIRST_NAME' => '이름:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력',
    'LBL_HOME_PHONE' => '자택전화:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'vCard 가져오기',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => '자동으로 당신의 파일시스템에서 vCARD를 가져와 새로운 연락처를 만듭니다.',
    'LBL_INVALID_EMAIL' => '유효하지 않은 이메일:',
    'LBL_INVITEE' => '직접 보고',
    'LBL_LAST_NAME' => '성:',
    'LBL_LEAD_SOURCE' => '리드 소스:',
    'LBL_LIST_ACCEPT_STATUS' => '허가상태',
    'LBL_LIST_ACCOUNT_NAME' => '거래처명',
    'LBL_LIST_CONTACT_NAME' => '거래처 담당자명',
    'LBL_LIST_CONTACT_ROLE' => '역할',
    'LBL_LIST_EMAIL_ADDRESS' => '이메일',
    'LBL_LIST_FIRST_NAME' => '이름',
    'LBL_LIST_FORM_TITLE' => '거래처 담당자 목록',
    'LBL_LIST_LAST_NAME' => '성',
    'LBL_LIST_NAME' => '이름',
    'LBL_LIST_PHONE' => '회사전화',
    'LBL_LIST_TITLE' => '직위',
    'LBL_MOBILE_PHONE' => '휴대폰:',
    'LBL_MODIFIED' => '변경한 유저ID:',
    'LBL_MODULE_NAME' => '연락처',
    'LBL_MODULE_TITLE' => '거래처 담당자: 홈',
    'LBL_NAME' => '이름:',
    'LBL_NEW_FORM_TITLE' => '신규 거래처 담당자',
    'LBL_NOTE_SUBJECT' => '노트 제목',
    'LBL_OFFICE_PHONE' => '회사전화:',
    'LBL_OPP_NAME' => '영업기회 이름:',
    'LBL_OPPORTUNITY_ROLE_ID' => '상담 역할 ID:',
    'LBL_OPPORTUNITY_ROLE' => '상담 역할',
    'LBL_OTHER_EMAIL_ADDRESS' => '연락용 이메일:',
    'LBL_OTHER_PHONE' => '기타전화:',
    'LBL_PHONE' => '전화:',
    'LBL_PORTAL_APP' => '포탈 애플리케이션:',
    'LBL_PORTAL_INFORMATION' => '포탈정보',
    'LBL_PORTAL_NAME' => '포탈명:',
    'LBL_STREET' => '상세',
    'LBL_POSTAL_CODE' => '우편번호:',
    'LBL_PRIMARY_ADDRESS_CITY' => '메인 주소 시구군:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '기본 국가:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '메인 주소 우편번호:',
    'LBL_PRIMARY_ADDRESS_STATE' => '메인 주소 읍면동:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '기본 상세주소2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '기본 상세주소3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '메인 상세:',
    'LBL_PRIMARY_ADDRESS' => '메인주소:',
    'LBL_PRODUCTS_TITLE' => '제품',
    'LBL_REPORTS_TO_ID' => '상사ID:',
    'LBL_REPORTS_TO' => '상사:',
    'LBL_RESOURCE_NAME' => '리소스 이름',
    'LBL_SALUTATION' => '경칭:',
    'LBL_SAVE_CONTACT' => '거래처 담당자 저장',
    'LBL_SEARCH_FORM_TITLE' => '거래처 담당자 검색',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '체크된 거래처 담당자 선택',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '체크된 거래처 담당자 선택',
    'LBL_STATE' => '주 또는 지역',
    'LBL_SYNC_CONTACT' => '아웃룩하고동기:',
    'LBL_PROSPECT_LIST' => '가망고객 목록',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => '거래처 담당자 목록',
    'LNK_IMPORT_VCARD' => 'vCard에서작성',
    'LNK_NEW_ACCOUNT' => '거래처 작성',
    'LNK_NEW_APPOINTMENT' => '콜스케쥴작성',
    'LNK_NEW_CALL' => '전화통화 예약',
    'LNK_NEW_CASE' => '사례 작성',
    'LNK_NEW_CONTACT' => '거래고객작성',
    'LNK_NEW_EMAIL' => '메일저장',
    'LNK_NEW_MEETING' => '미팅일정 추가',
    'LNK_NEW_NOTE' => '노트 작성',
    'LNK_NEW_OPPORTUNITY' => '영업기회 작성',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_SELECT_ACCOUNT' => "거래처선택",
    'NTC_DELETE_CONFIRMATION' => '해당 레코드를 정말 삭제하시겠습니까?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Creating an opportunity requires an account.\n Please either create a new one or select an existing one.',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from this case?',

    'LBL_LEADS_SUBPANEL_TITLE' => '가망고객',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '영업기회',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '문서',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => '기본 주소를 복사',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => '다른 주소로 복사',

    'LBL_CASES_SUBPANEL_TITLE' => '사례',
    'LBL_BUGS_SUBPANEL_TITLE' => '버그',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '프로젝트',
    'LBL_PROJECTS_RESOURCES' => '프로젝트 리소스',
    'LBL_CAMPAIGNS' => '캠페인',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '캠페인',
    'LBL_LIST_CITY' => '시구군:',
    'LBL_LIST_STATE' => '읍면동:',
    'LBL_HOMEPAGE_TITLE' => '내 거래처 담당자',
    'LBL_OPPORTUNITIES' => '영업기회',

    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처',
    'LBL_PROJECT_SUBPANEL_TITLE' => '프로젝트',
    'LNK_IMPORT_CONTACTS' => '연락처 가져오기',

    // SNIP
    'LBL_USER_SYNC' => '사용자 동기화',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => '이벤트',

    'LBL_AOP_CASE_UPDATES' => '사례 업데이트',
    'LBL_CREATE_PORTAL_USER' => '포털 사용자 만들기',
    'LBL_ENABLE_PORTAL_USER' => '이용가능한 포털 사용자',
    'LBL_DISABLE_PORTAL_USER' => '불가능한 포털 사용자',
    'LBL_CREATE_PORTAL_USER_FAILED' => '포털 사용자를 생성 하지 못했습니다.',
    'LBL_ENABLE_PORTAL_USER_FAILED' => '포털 사용자를 활성화 하지 못했습니다.',
    'LBL_DISABLE_PORTAL_USER_FAILED' => '포탈 사용자 비활성화 실패',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => '포털 사용자를 생성',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => '포털 사용자 활성화',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => '포털 사용자 비활성화',
    'LBL_NO_JOOMLA_URL' => '포털 URL 정의 안됨',
    'LBL_PORTAL_USER_TYPE' => '포털 사용자 타입',
    'LBL_PORTAL_ACCOUNT_DISABLED' => '계정 비활성화',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla 계정 ID',

    'LBL_AOS_CONTRACTS' => '계약',
    'LBL_AOS_INVOICES' => '송장',
    'LBL_AOS_QUOTES' => '견적',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => '프로젝트 제목의 연락처',

    'LBL_LIST_INVITE_STATUS' => '초대 상태',
);
