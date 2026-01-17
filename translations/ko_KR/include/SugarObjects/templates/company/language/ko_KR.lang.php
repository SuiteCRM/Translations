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
    'ERR_DELETE_RECORD' => '계정을 삭제하기 위해 레코드번호가 지정되어야 합니다.',
    'LBL_ACCOUNT_NAME' => '회사 이름:',
    'LBL_ACCOUNT' => '회사:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_ADDRESS_INFORMATION' => '주소 정보',
    'LBL_ANNUAL_REVENUE' => '연간 매출:',
    'LBL_ANY_ADDRESS' => '연락주소:',
    'LBL_ANY_EMAIL' => '이메일:',
    'LBL_EMAIL_NON_PRIMARY' => '비주요메일',
    'LBL_ANY_PHONE' => '전화:',
    'LBL_ASSIGNED_TO_NAME' => '사용자:',
    'LBL_RATING' => '별점',
    'LBL_ASSIGNED_TO' => '담당자:',
    'LBL_ASSIGNED_USER' => '담당자:',
    'LBL_ASSIGNED_TO_ID' => '담당자:',
    'LBL_BILLING_ADDRESS_CITY' => '청구지 시/도:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '청구지 국가:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '청구지 우편번호:',
    'LBL_BILLING_ADDRESS_STATE' => '청구지 주:',
    'LBL_BILLING_ADDRESS_STREET_2' => '청구지 상세주소2',
    'LBL_BILLING_ADDRESS_STREET_3' => '청구지 상세주소3',
    'LBL_BILLING_ADDRESS_STREET_4' => '청구지 상세주소4',
    'LBL_BILLING_ADDRESS_STREET' => '청구지 상세주소:',
    'LBL_BILLING_ADDRESS' => '청구지 주소:',
    'LBL_ACCOUNT_INFORMATION' => '회사 정보',
    'LBL_CITY' => '시구군:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '연락처',
    'LBL_COUNTRY' => '국가:',
    'LBL_DATE_ENTERED' => '등록일:',
    'LBL_DATE_MODIFIED' => '변경일:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '거래처',
    'LBL_DESCRIPTION_INFORMATION' => '상세정보',
    'LBL_DESCRIPTION' => '상세:',
    'LBL_DUPLICATE' => '중복가능 계정',
    'LBL_EMAIL' => '이메일 주소:',
    'LBL_EMPLOYEES' => '사원:',
    'LBL_FAX' => '팩스:',
    'LBL_INDUSTRY' => '업종:',
    'LBL_LIST_ACCOUNT_NAME' => '거래처명',
    'LBL_LIST_CITY' => '시구군:',
    'LBL_LIST_EMAIL_ADDRESS' => '이메일 주소',
    'LBL_LIST_PHONE' => '전화:',
    'LBL_LIST_STATE' => '읍면동:',
    'LBL_MEMBER_OF' => '멤버:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '멤버조직',
    'LBL_NAME' => '이름:',
    'LBL_OTHER_EMAIL_ADDRESS' => '연락용 이메일:',
    'LBL_OTHER_PHONE' => '기타전화:',
    'LBL_OWNERSHIP' => '소유자:',
    'LBL_PARENT_ACCOUNT_ID' => '상위 계정 ID',
    'LBL_PHONE_ALT' => '연락전화:',
    'LBL_PHONE_FAX' => '팩스:',
    'LBL_PHONE_OFFICE' => '회사전화:',
    'LBL_PHONE' => '전화:',
    'LBL_EMAIL_ADDRESS' => '이메일 주소',
    'LBL_EMAIL_ADDRESSES' => '메일주소',
    'LBL_POSTAL_CODE' => '우편번호:',
    'LBL_SAVE_ACCOUNT' => '거래처저장',
    'LBL_SHIPPING_ADDRESS_CITY' => '배송지 시/도:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '배송지 국가:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '배송지 우편번호:',
    'LBL_SHIPPING_ADDRESS_STATE' => '배송지 주:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '배송지 상세주소2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '배송지 상세주소3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '배송지 상세주소4',
    'LBL_SHIPPING_ADDRESS_STREET' => '배송지 상세주소:',
    'LBL_SHIPPING_ADDRESS' => '배송지 주소:',

    'LBL_STATE' => '상태:',
    'LBL_TICKER_SYMBOL' => '증권코드:',
    'LBL_TYPE' => '종류:',
    'LBL_WEBSITE' => '웹사이트:',

    'LNK_ACCOUNT_LIST' => '거래처',
    'LNK_NEW_ACCOUNT' => '거래처 작성',

    'MSG_DUPLICATE' => '작성하시고자 하는 거래처 정보는 이미 존재하는 거래처와 중복될 수 있습니다. 비슷한 이름이 포함된 거래처는 아래와 같습니다.<br>신규 거래처 생성을 위해 거래처 작성을 클릭하거나 목록에서 선택하세요.',
    'MSG_SHOW_DUPLICATES' => '작성하시고자 하는 거래처 정보는 이미 존재하는 거래처와 중복될 수 있습니다. 비슷한 이름이 포함된 거래처는 아래와 같습니다.<br>이 정보를 신규로 거래처 생성을 하려면 저장을 클릭하십시오.',

    'NTC_DELETE_CONFIRMATION' => '해당 레코드를 정말 삭제하시겠습니까?',

    'LBL_EDIT_BUTTON' => '편집  ',
    'LBL_REMOVE' => '삭제',

);
