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
    'LBL_MODULE_NAME' => '대상',
    'LBL_MODULE_ID' => '대상',
    'LBL_INVITEE' => '직속 보고자 목록',
    'LBL_MODULE_TITLE' => '타겟: 홈',
    'LBL_SEARCH_FORM_TITLE' => '타겟 검색',
    'LBL_LIST_FORM_TITLE' => 'Target List',
    'LBL_NEW_FORM_TITLE' => '새 타겟',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => '성',
    'LBL_LIST_TITLE' => '직위',
    'LBL_LIST_EMAIL_ADDRESS' => '이메일',
    'LBL_LIST_PHONE' => '전화',
    'LBL_LIST_FIRST_NAME' => '이름',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ASSIGNED_TO_ID' => '담당자:',
    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    'LBL_EXISTING_ACCOUNT' => '기존의 거래처로 사용하였습니다',
    'LBL_CREATED_ACCOUNT' => '새로운 거래처를 추가하였습니다',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_MEETING' => '새로운 미팅을 추가하였습니다',
    'LBL_NAME' => '이름:',
    'LBL_PROSPECT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => '이름:',
    'LBL_OFFICE_PHONE' => '회사전화:',
    'LBL_ANY_PHONE' => '모든 전화:',
    'LBL_PHONE' => '전화번호:',
    'LBL_LAST_NAME' => '성:',
    'LBL_MOBILE_PHONE' => '휴대폰번호:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => '기타 전화:',
    'LBL_FAX_PHONE' => '팩스번호:',
    'LBL_PRIMARY_ADDRESS_STREET' => '메인 상세:',
    'LBL_PRIMARY_ADDRESS_CITY' => '메인 주소 시구군:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '기본 국가:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternate Address Street:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternate Address City:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternate Address Country:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternate Address State:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternate Address Postal Code:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => '부서:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_OTHER_EMAIL_ADDRESS' => '기타 이메일:',
    'LBL_ANY_EMAIL' => '모든 메일:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => '이메일 송신 제외:',
    'LBL_PRIMARY_ADDRESS' => '기본 주소:',
    'LBL_ALTERNATE_ADDRESS' => '보조 주소:',
    'LBL_ANY_ADDRESS' => '모든 주소:',
    'LBL_CITY' => '시/도:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => '국가:',
    'LBL_ADDRESS_INFORMATION' => '주소정보',
    'LBL_DESCRIPTION' => '상세설명:',
    'LBL_OPP_NAME' => '영업기회 이름:',
    'LBL_IMPORT_VCARD' => 'vCard로 가져오기',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Possible Duplicate Targets',
    'MSG_SHOW_DUPLICATES' => '작성하시고자 하는 타겟 정보는 이미 존재하는 타겟과 중복될 수 있습니다. 비슷한 이름이 포함된 타겟은 아래와 같습니다.<br>이 정보를 신규로 타겟 생성을 하려면 저장을 클릭하십시오.',
    'MSG_DUPLICATE' => 'The target record you are about to create might be a duplicate of a target record that already exists. Target records containing similar names and/or email addresses are listed below.<br>Click Save to continue creating this new target, or click Cancel to return to the module without creating the target.',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => '거래처 생성',
    'LNK_NEW_OPPORTUNITY' => '신규 예비고객 만들기',
    'LNK_NEW_CASE' => '고객 요청사례 추가하기',
    'LNK_NEW_NOTE' => '노트작성',
    'LNK_NEW_CALL' => '콜스케쥴작성',
    'LNK_NEW_EMAIL' => '메일작성',
    'LNK_NEW_MEETING' => '미팅스케쥴작성',
    'LNK_NEW_TASK' => '업무 작성',
    'LNK_NEW_APPOINTMENT' => '약속 추가하기',
    'LNK_IMPORT_PROSPECTS' => 'Import Targets',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => '정말로 나중에 알림을 받으시겠습니까?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'LBL_SALUTATION' => '인사말',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'View Targets',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => '캠페인 목록',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Target Lists',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Select Checked Targets',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => '유효하지 않은 이메일:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '대상',
    'LBL_PROSPECT_LIST' => '잠재고객 목록',
    'LBL_CONVERT_BUTTON_TITLE' => 'Convert Target',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => '신규 거래처 담당자',
    'LBL_CREATED_CONTACT' => "새로운 거래처 담당자가 작성되었습니다.",
    'LBL_CAMPAIGNS' => '캠페인 목록',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaign Log',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Lead Id',
    'LBL_CONVERTED_LEAD' => '전환 완료된 리드',
    'LBL_ACCOUNT_NAME' => 'Account Name',
    'LBL_EDIT_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CREATED_USER' => '신규 사용자',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_HISTORY_SUBPANEL_TITLE' => '보관함',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
