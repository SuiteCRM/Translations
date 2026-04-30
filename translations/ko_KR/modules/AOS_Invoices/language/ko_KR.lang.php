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
    'LBL_ASSIGNED_TO_ID' => '담당자 Id',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '작성일',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '수정자',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => '생성됨',
    'LBL_DESCRIPTION' => '설명',
    'LBL_DELETED' => '삭제됨',
    'LBL_NAME' => '제목',
    'LBL_CREATED_USER' => '사용자로 생성됨',
    'LBL_MODIFIED_USER' => '사용자로 수정됨',
    'ERR_DELETE_RECORD' => '거래처를 삭제하시려면 레코드 번호를 지정해야 합니다.',
    'LBL_ACCOUNT_NAME' => '제목',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '활동내역',
    'LBL_ADDRESS_INFORMATION' => '주소정보',
    'LBL_ANNUAL_REVENUE' => '연간 매출:',
    'LBL_ANY_ADDRESS' => '모든 주소:',
    'LBL_ANY_EMAIL' => '모든 메일:',
    'LBL_ANY_PHONE' => '모든 전화:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => '사용자',
    'LBL_BILLING_ADDRESS_CITY' => '청구처 시구군:',
    'LBL_BILLING_ADDRESS_COUNTRY' => '청구처 국가:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => '청구처 우편번호:',
    'LBL_BILLING_ADDRESS_STATE' => '청구처 읍면동:',
    'LBL_BILLING_ADDRESS_STREET_2' => '청구처 주소2',
    'LBL_BILLING_ADDRESS_STREET_3' => '청구처 주소3',
    'LBL_BILLING_ADDRESS_STREET_4' => '청구처 주소4',
    'LBL_BILLING_ADDRESS_STREET' => '청구처 주소1:',
    'LBL_BILLING_ADDRESS' => '청구처 주소:',
    'LBL_ACCOUNT_INFORMATION' => '개요',
    'LBL_CITY' => '시/도:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '거래처 담당자',
    'LBL_COUNTRY' => '국가:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '거래처',
    'LBL_DUPLICATE' => 'Possible Duplicate Account',
    'LBL_EMAIL' => '이메일:',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => '팩스번호:',
    'LBL_INDUSTRY' => '산업군:',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CITY' => '시/도',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_PHONE' => '전화',
    'LBL_LIST_STATE' => '주',
    'LBL_MEMBER_OF' => '상위 거래처:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => '협회',
    'LBL_OTHER_EMAIL_ADDRESS' => '기타 이메일:',
    'LBL_OTHER_PHONE' => '기타 전화:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => '상위 거래처 ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => '회사전화:',
    'LBL_PHONE' => '전화번호:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SHIPPING_ADDRESS_CITY' => '배송처 시구군:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => '배송처 국가:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => '배송처 우편번호:',
    'LBL_SHIPPING_ADDRESS_STATE' => '배송처 주소:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '배송처 주소2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '배송처 주소3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '배송처 주소4',
    'LBL_SHIPPING_ADDRESS_STREET' => '배송처 주소:',
    'LBL_SHIPPING_ADDRESS' => '배송처 주소:',
    'LBL_STATE' => '주 또는 지역',
    'LBL_TICKER_SYMBOL' => '종목 코드:',
    'LBL_TYPE' => '유형:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => '거래처',
    'LNK_NEW_ACCOUNT' => '거래처 생성',
    'MSG_DUPLICATE' => '이 계정을 만드는 것은 잠재적으로 중복계정을 만들 수 있습니다. 아래 리스트로부터 계정을 선택하거나 이전에 입력한 데이터로 새 계정을 만들어주세요.',
    'MSG_SHOW_DUPLICATES' => '이 거레처 작성은 중복된 거래처 정보를 만들 수 있습니다. 이전에 입력한 거래처 정보로 새 거래처를 작성하거나, 취소 버튼을 클릭해 주십시오.',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'LBL_LIST_FORM_TITLE' => '송장 목록',
    'LBL_MODULE_NAME' => 'Invoices',
    'LBL_MODULE_TITLE' => '송장: 홈',
    'LBL_HOMEPAGE_TITLE' => '내 송장',
    'LNK_NEW_RECORD' => '송장 작성',
    'LNK_LIST' => '송장 보기',
    'LBL_SEARCH_FORM_TITLE' => '송장 검색',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력 보기',
    'LBL_NEW_FORM_TITLE' => '새 송장',
    'LBL_TERMS_C' => '이용 약관',
    'LBL_APPROVAL_ISSUE' => '승인 문제',
    'LBL_APPROVAL_STATUS' => '승인 상태',
    'LBL_BILLING_ACCOUNT' => '거래처',
    'LBL_BILLING_CONTACT' => '연락처',
    'LBL_EXPIRATION' => '까지 유효',
    'LBL_INVOICE_NUMBER' => '송장 번호',
    'LBL_OPPORTUNITY' => 'Opportunity Name',
    'LBL_TEMPLATE_DDOWN_C' => '송장 서식',
    'LBL_STAGE' => '견적 단계',
    'LBL_TERM' => '지불 조건',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => '직책',
    'LBL_EMAIL_ADDRESSES' => '이메일 주소',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => '견적 번호',
    'LBL_QUOTE_DATE' => '견적 날짜',
    'LBL_INVOICE_DATE' => '송장 날짜',
    'LBL_DUE_DATE' => '종료일',
    'LBL_STATUS' => '상태',
    'LBL_INVOICE_STATUS' => '송장 상태',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => '노트',
    'LBL_PRODUCT_DESCRIPTION' => '설명:',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => '제거',
    'LBL_PRINT_AS_PDF' => 'PDF출력',
    'LBL_EMAIL_INVOICE' => '이메일 송장',
    'LBL_LIST_NUM' => '번호',
    'LBL_PDF_NAME' => 'Invoice',
    'LBL_EMAIL_NAME' => '에 대한 송장',
    'LBL_NO_TEMPLATE' => '오류\n서식을 발견하지 못했습니다. 송장 서식을 생성하지 않았다면 PDF 서식 모듈에서 새로 만들어 주십시오.',
    'LBL_SUBTOTAL_TAX_AMOUNT' => '소계 + 세금',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => '라인 항목 가져오기',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => 'Invoice To',
    'LBL_AOS_LINE_ITEM_GROUPS' => '개별 항목 그룹',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
);
