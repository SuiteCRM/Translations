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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => '회사 상세정보',
    'LBL_ACCOUNT_ID' => '거래처 ID',
    'LBL_ACCOUNT_NAME' => '거래처명:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_ADDRESS_INFORMATION' => '주소 정보',
    'LBL_ALT_ADDRESS_CITY' => '부가주소 시도구',
    'LBL_ALT_ADDRESS_COUNTRY' => '부주소 국가',
    'LBL_ALT_ADDRESS_POSTALCODE' => '우편번호',
    'LBL_ALT_ADDRESS_STATE' => '도',
    'LBL_ALT_ADDRESS_STREET_2' => '상세주소 2',
    'LBL_ALT_ADDRESS_STREET_3' => '상세주소 3',
    'LBL_ALT_ADDRESS_STREET' => '상세주소',
    'LBL_ALTERNATE_ADDRESS' => '연락주소:',
    'LBL_ALT_ADDRESS' => '연락주소:',
    'LBL_ANY_ADDRESS' => '연락주소:',
    'LBL_ANY_EMAIL' => '이메일:',
    'LBL_ANY_PHONE' => '전화:',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ASSIGNED_TO_ID' => '담당자:',
    'LBL_CITY' => '시구군:',
    'LBL_CONTACT_ID' => '거래처 담당자 ID',
    'LBL_CONTACT_INFORMATION' => '개요', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => '리드명:',
    'LBL_CONTACT_OPP_FORM_TITLE' => '리드-영업기회:',
    'LBL_CONTACT_ROLE' => '역할:',
    'LBL_CONTACT' => '관심고객:',
    'LBL_CONVERTED_ACCOUNT' => '전환 완료된 거래처:',
    'LBL_CONVERTED_CONTACT' => '전환 완료된 거래처 담당자:',
    'LBL_CONVERTED_OPP' => '전환된 영업기회명:',
    'LBL_CONVERTED' => '변환됨',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => '고객으로 전환하기',
    'LBL_CONVERTLEAD' => '고객으로 전환하기',
    'LBL_CONVERTLEAD_WARNING' => '주의: 현재 전환하려는 관심고객의 상태가 이미 전환된 상태입니다. 현재 자료는 이미 연락처 혹은 거래처로 전환되어 있을 수 있습니다. 그래도 현재 자료를 전환하기 원하시면 저장 버튼을 눌러주세요. 전환없이 기존 자료로 돌아가시려면 취소 버튼을 눌러주세요.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => '연관 가능한 연락처:',
    'LBL_COUNTRY' => '국가:',
    'LBL_CREATED_NEW' => '새로운 자료를 추가를 하였습니다',
    'LBL_CREATED_ACCOUNT' => '새로운거래처가 작성되었습니다',
    'LBL_CREATED_CALL' => '새로운콜이 작성되었습니다',
    'LBL_CREATED_CONTACT' => '새로운 거래처 담당자가 작성되었습니다.',
    'LBL_CREATED_MEETING' => '새로운 미팅약속이 작성되었습니다',
    'LBL_CREATED_OPPORTUNITY' => '신규 상담 작성',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '가망고객',
    'LBL_DEPARTMENT' => '부문:',
    'LBL_DESCRIPTION' => '상세:',
    'LBL_DO_NOT_CALL' => '통화금지:',
    'LBL_DUPLICATE' => '유사한 관심고객목록',
    'LBL_EMAIL_ADDRESS' => '이메일 주소:',
    'LBL_EMAIL_OPT_OUT' => '이메일 수신거부:',
    'LBL_EXISTING_ACCOUNT' => '기존 거래처를 사용',
    'LBL_EXISTING_CONTACT' => '기존 거래처 담당자를 사용',
    'LBL_EXISTING_OPPORTUNITY' => '기존 안건정보를 사용',
    'LBL_FAX_PHONE' => '팩스:',
    'LBL_FIRST_NAME' => '이름:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력',
    'LBL_HOME_PHONE' => '자택전화:',
    'LBL_IMPORT_VCARD' => 'vCard 가져오기',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => '현재 저장된 파일의 vCard 정보를 이용하여 자동적으로 관심고객으로 추가합니다.',
    'LBL_INVALID_EMAIL' => '유효하지 않은 이메일:',
    'LBL_INVITEE' => '직접 보고',
    'LBL_LAST_NAME' => '성:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => '관심고객 출처 세부정보:',
    'LBL_LEAD_SOURCE' => '리드 소스:',
    'LBL_LIST_ACCEPT_STATUS' => '허가상태',
    'LBL_LIST_ACCOUNT_NAME' => '거래처명',
    'LBL_LIST_CONTACT_NAME' => '리드명',
    'LBL_LIST_CONTACT_ROLE' => '역할',
    'LBL_LIST_DATE_ENTERED' => '생성날짜',
    'LBL_LIST_EMAIL_ADDRESS' => '이메일',
    'LBL_LIST_FIRST_NAME' => '이름',
    'LBL_LIST_FORM_TITLE' => '관심고객 목록',
    'LBL_LIST_LAST_NAME' => '성',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => '관심고객 출처 세부정보',
    'LBL_LIST_LEAD_SOURCE' => '관심고객 출처',
    'LBL_LIST_MY_LEADS' => '내 리드',
    'LBL_LIST_NAME' => '이름',
    'LBL_LIST_PHONE' => '회사전화',
    'LBL_LIST_REFERED_BY' => '추천인',
    'LBL_LIST_STATUS' => '상태',
    'LBL_LIST_TITLE' => '직위',
    'LBL_MOBILE_PHONE' => '휴대폰:',
    'LBL_MODULE_NAME' => '가망고객',
    'LBL_MODULE_TITLE' => '관심고객관리: 전체목록',
    'LBL_NAME' => '이름:',
    'LBL_NEW_FORM_TITLE' => '신규 관심고객',
    'LBL_OFFICE_PHONE' => '회사전화:',
    'LBL_OPP_NAME' => '영업기회 이름:',
    'LBL_OPPORTUNITY_AMOUNT' => '영업 상담금액:',
    'LBL_OPPORTUNITY_ID' => '상담ID',
    'LBL_OPPORTUNITY_NAME' => '영업기회 이름:',
    'LBL_OTHER_EMAIL_ADDRESS' => '연락용 이메일:',
    'LBL_OTHER_PHONE' => '기타전화:',
    'LBL_PHONE' => '전화:',
    'LBL_PORTAL_APP' => '포털 작성신청서',
    'LBL_PORTAL_INFORMATION' => '포탈정보',
    'LBL_PORTAL_NAME' => '포탈명:',
    'LBL_POSTAL_CODE' => '우편번호:',
    'LBL_STREET' => '상세',
    'LBL_PRIMARY_ADDRESS_CITY' => '메인 주소 시구군',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '메인 주소 국가',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '우편번호',
    'LBL_PRIMARY_ADDRESS_STATE' => '도',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '상세주소 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '상세주소 3',
    'LBL_PRIMARY_ADDRESS_STREET' => '상세주소',
    'LBL_PRIMARY_ADDRESS' => '메인주소:',
    'LBL_REFERED_BY' => '추천인:',
    'LBL_REPORTS_TO_ID' => '다음 ID로 보고',
    'LBL_REPORTS_TO' => '상사:',
    'LBL_SALUTATION' => '경칭',
    'LBL_MODIFIED' => '변경됨',
    'LBL_CREATED' => '작성자',
    'LBL_SEARCH_FORM_TITLE' => '관심고객 검색',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => '체크된 관심고객 선택하기',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => '체크된 관심고객 선택하기',
    'LBL_STATE' => '주 또는 지역',
    'LBL_STATUS_DESCRIPTION' => '상태 상세설명:',
    'LBL_STATUS' => '상태',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'vCard로부터 관심고객 추가하기',
    'LNK_LEAD_LIST' => '관심고객 목록보기',
    'LNK_NEW_ACCOUNT' => '거래처 작성',
    'LNK_NEW_APPOINTMENT' => '콜스케쥴작성',
    'LNK_NEW_CONTACT' => '거래고객작성',
    'LNK_NEW_LEAD' => '리드 작성',
    'LNK_NEW_NOTE' => '노트 작성',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_NEW_CASE' => '사례 작성',
    'LNK_NEW_CALL' => '전화통화 예약',
    'LNK_NEW_MEETING' => '미팅일정 추가',
    'LNK_NEW_OPPORTUNITY' => '영업기회 작성',
    'LNK_SELECT_ACCOUNTS' => '<b>혹은</b> 거래처 선택하기',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => '해당 레코드를 정말 삭제하시겠습니까?',
    'NTC_REMOVE_CONFIRMATION' => '현재 관심고객을 지금 고객 요청사례에서 삭제하시겠습니까?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => '캠페인',
    'LBL_CAMPAIGN' => '캠페인:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
    'LBL_PROSPECT_LIST' => '가망고객 목록',
    'LBL_CAMPAIGN_LEAD' => '캠페인',
    'LBL_BIRTHDATE' => '생년월일:',
    'LBL_ASSISTANT_PHONE' => '보조전화',
    'LBL_ASSISTANT' => '보조',
    'LBL_CREATED_USER' => '신규 사용자',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => '캠페인',
    'LBL_CONVERT_MODULE_NAME' => '모듈',
    'LBL_CONVERT_REQUIRED' => '필수',
    'LBL_CONVERT_SELECT' => '선택항목 허용',
    'LBL_CONVERT_COPY' => '자료 복사',
    'LBL_CONVERT_EDIT' => '편집',
    'LBL_CONVERT_DELETE' => '삭제',
    'LBL_CONVERT_ADD_MODULE' => '모듈 추가',
    'LBL_CREATE' => '작성',
    'LBL_SELECT' => '<b>혹은</b> 선택하기',
    'LBL_WEBSITE' => '웹사이트',
    'LNK_IMPORT_LEADS' => '잠재고객 가져오기',
//Convert lead tooltips
    'LBL_MODULE_TIP' => '새로운 자료를 추가하기 위한 모듈입니다.',
    'LBL_REQUIRED_TIP' => '필수 모듈은 리드가 전환되기 전에 반드시 생성하거나 선택하셔야 합니다.',
    'LBL_COPY_TIP' => '선택하시면 관심 고객에 기입된 항목은 새로 생성된 자료에 해당되는 동일한 항목에 자동 복사됩니다.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => '현재 전환 화면에서 이 모듈의 레이아웃을 수정합니다.',
    'LBL_DELETE_TIP' => '현재 모듈을 전환 화면 레이아웃에서 삭제합니다.',

    'LBL_ACTIVITIES_MOVE' => '활동내역을 다음으로 이동:',
    'LBL_ACTIVITIES_COPY' => '활동내역을 다음으로 복사:',
    'LBL_ACTIVITIES_MOVE_HELP' => "관심고객 활동내역으로 옮기고 싶은 자료를 선택해주세요. 업무내역, 전화상담내역, 미팅, 메모 및 이메일 상담내역들이 선택된 자료로 이동됩니다.",
    'LBL_ACTIVITIES_COPY_HELP' => "관심고객 활동내역으로 복사하고 싶은 자료를 선택해주세요. 업무내역, 전화상담내역, 미팅, 메모 및 이메일 상담내역들이 선택된 자료로 새로 복사됩니다.",
    //For export labels
    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    'LBL_EDITLAYOUT' => '레이아웃 편집' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => '작성일' /*for 508 compliance fix*/,
    'LBL_LOADING' => '로딩중' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '편집' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => '이벤트',
);
