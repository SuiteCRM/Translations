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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '문서',
    // Dashlet Categories
    'LBL_CHARTS' => '도표 목록',
    'LBL_DEFAULT' => '표시',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => '거래처를 삭제 하려면 레코드 번호를 지정 해야 합니다.',
    'LBL_ACCOUNT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACCOUNT' => '거래처:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '활동내역',
    'LBL_ADDRESS_INFORMATION' => '주소정보',
    'LBL_ANNUAL_REVENUE' => '연간 매출:',
    'LBL_ANY_ADDRESS' => '모든 주소:',
    'LBL_ANY_EMAIL' => '모든 메일:',
    'LBL_ANY_PHONE' => '모든 전화:',
    'LBL_ASSIGNED_TO_NAME' => '담당자:',
    'LBL_ASSIGNED_TO_ID' => '담당자:',
    'LBL_BILLING_ADDRESS_CITY' => '청구처 시구군:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '청구처 국가:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '청구처 우편번호:',
    'LBL_BILLING_ADDRESS_STATE' => '청구처 읍면동:',
    'LBL_BILLING_ADDRESS_STREET_2' => '청구처 주소2',
    'LBL_BILLING_ADDRESS_STREET_3' => '청구처 주소3',
    'LBL_BILLING_ADDRESS_STREET_4' => '청구처 주소4',
    'LBL_BILLING_ADDRESS_STREET' => '청구처 주소1:',
    'LBL_BILLING_ADDRESS' => '청구처 주소:',
    'LBL_BUGS_SUBPANEL_TITLE' => '버그',
    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    'LBL_CASES_SUBPANEL_TITLE' => '사례',
    'LBL_CITY' => '시/도:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '거래처 담당자',
    'LBL_COUNTRY' => '국가:',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => '변경일:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '거래처',
    'LBL_DESCRIPTION_INFORMATION' => 'Description Information',
    'LBL_DESCRIPTION' => '상세설명:',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => '이메일 수신거부:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => '팩스번호:',
    'LBL_HISTORY_SUBPANEL_TITLE' => '보관함',
    'LBL_HOMEPAGE_TITLE' => '내 거래처',
    'LBL_INDUSTRY' => '산업군:',
    'LBL_INVALID_EMAIL' => '유효하지 않은 이메일:',
    'LBL_INVITEE' => '연락처',
    'LBL_LEADS_SUBPANEL_TITLE' => '가망고객',
    'LBL_LIST_ACCOUNT_NAME' => 'Name',
    'LBL_LIST_CITY' => '시/도',
    'LBL_LIST_CONTACT_NAME' => '거래처 담당자 이름',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_FORM_TITLE' => '거래처 목록',
    'LBL_LIST_PHONE' => '전화',
    'LBL_LIST_STATE' => '주',
    'LBL_MEMBER_OF' => '상위 거래처:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '협회',
    'LBL_MODULE_NAME' => '거래처',
    'LBL_MODULE_TITLE' => '거래처: 홈',
    'LBL_MODULE_ID' => '거래처',
    'LBL_NAME' => '이름:',
    'LBL_NEW_FORM_TITLE' => '신규 거래처',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => '영업기회',
    'LBL_OTHER_EMAIL_ADDRESS' => '기타 이메일:',
    'LBL_OTHER_PHONE' => '기타 전화:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => '상위 거래처 ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => '사무실 전화:',
    'LBL_PHONE' => '전화번호:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '프로젝트',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => '연락처에 복사',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => '복사...',
    'LBL_RATING' => '등급:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SEARCH_FORM_TITLE' => '거래처 검색',
    'LBL_SHIPPING_ADDRESS_CITY' => '배송처 시구군:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '배송처 국가:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '배송처 우편번호:',
    'LBL_SHIPPING_ADDRESS_STATE' => '배송처 주소:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '배송처 주소2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '배송처 주소3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '배송처 주소4',
    'LBL_SHIPPING_ADDRESS_STREET' => '배송처 주소:',
    'LBL_SHIPPING_ADDRESS' => '배송처 주소:',
    'LBL_SIC_CODE' => 'SIC 코드:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => '종목 코드:',
    'LBL_TYPE' => '유형:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => '캠페인 목록',
    'LNK_ACCOUNT_LIST' => '거래처 보기',
    'LNK_NEW_ACCOUNT' => '거래처 생성',
    'LNK_IMPORT_ACCOUNTS' => '거래처 가져오기',
    'MSG_DUPLICATE' => '거래처 정보가 이미 존재하는 거래처와 중복될 수 있습니다. 비슷한 이름이 포함된 거래처는 아래와 같습니다.<br>신규 거래처로 등록하거나 목록에서 거래처를 선택하세요.',
    'MSG_SHOW_DUPLICATES' => '작성하시고자 하는 거래처 정보는 이미 존재하는 거래처와 중복될 수 있습니다. 비슷한 이름이 포함된 거래처는 아래와 같습니다.<br>이 정보를 신규로 거래처 생성을 하려면 저장을 클릭하십시오.',
    'LBL_ASSIGNED_USER_NAME' => '담당자:',
    'LBL_PROSPECT_LIST' => '가망고객 목록',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => '거래처',
    'LBL_PROJECT_SUBPANEL_TITLE' => '프로젝트',
    //For export labels
    'LBL_PARENT_ID' => '상위 ID:',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => '제품 및 서비스 구입',

    'LBL_AOS_CONTRACTS' => '계약',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_LIST_WEBSITE' => 'website',
);
