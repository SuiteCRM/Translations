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
    'LBL_MODULE_NAME' => '영업기회',
    'LBL_MODULE_TITLE' => '영업기회: 홈',
    'LBL_SEARCH_FORM_TITLE' => '영업기회 검색',
    'LBL_LIST_FORM_TITLE' => '영업기회 목록',
    'LBL_OPPORTUNITY_NAME' => '영업기회 이름:',
    'LBL_OPPORTUNITY' => '영업기회:',
    'LBL_NAME' => 'Opportunity Name',
    'LBL_INVITEE' => '연락처',
    'LBL_CURRENCIES' => 'Currencies',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Name',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_AMOUNT' => '금액',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Amount',
    'LBL_LIST_DATE_CLOSED' => '닫기',
    'LBL_LIST_SALES_STAGE' => 'Sales Stage',
    'LBL_ACCOUNT_ID' => '회사 ID',
    'LBL_CURRENCY_NAME' => 'Currency Name',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol',
    'LBL_DAYS_OPEN_FOR' => 'This Opportunity Was Open For',

    'UPDATE' => '영업기회 - 통화 변경',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_AMOUNT' => '영업 상담금액:',
    'LBL_AMOUNT_USDOLLAR' => 'Amount:',
    'LBL_CURRENCY' => '화폐:',
    'LBL_DATE_CLOSED' => 'Expected Close Date:',
    'LBL_TYPE' => '유형:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_NEXT_STEP' => 'Next Step:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_SALES_STAGE' => 'Sales Stage:',
    'LBL_PROBABILITY' => 'Probability (%):',
    'LBL_DESCRIPTION' => '상세설명:',
    'LBL_DUPLICATE' => '중복 가능성이 있는 영업기회',
    'MSG_DUPLICATE' => '작성하고자 하는 영업기회 레코드는 기존의 영업기회 레코드와 중복 가능성이 있습니다. 유사한 영업기회는 아래에 표시되고 있습니다.<br>저장을 선택하면, 영업기회가 신규로 작성됩니다.',
    'LBL_NEW_FORM_TITLE' => '신규 예비고객 만들기',
    'LNK_NEW_OPPORTUNITY' => '신규 예비고객 만들기',
    'LNK_OPPORTUNITY_LIST' => '안건 리스트',
    'ERR_DELETE_RECORD' => '영업기회를 삭제하려면 레코드 번호를 지정하여야 합니다.',
    'LBL_TOP_OPPORTUNITIES' => '진행중 영업기회 랭킹',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => '영업기회를 프로젝트에서 제거하시겠습니까?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '영업기회',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '활동내역',
    'LBL_HISTORY_SUBPANEL_TITLE' => '보관함',

    'LBL_LEADS_SUBPANEL_TITLE' => '가망고객',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '거래처 담당자',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => '문서',
    'LBL_PROJECTS_SUBPANEL_TITLE' => '프로젝트',
    'LBL_ASSIGNED_TO_NAME' => '담당자:',
    'LBL_LIST_ASSIGNED_TO_NAME' => '담당자',
    'LBL_MY_CLOSED_OPPORTUNITIES' => '내 종료된 상담',
    'LBL_TOTAL_OPPORTUNITIES' => '총 영업기회',
    'LBL_CLOSED_WON_OPPORTUNITIES' => '획득한 상담',
    'LBL_ASSIGNED_TO_ID' => '담당자:',
    'LBL_MODIFIED_NAME' => 'Modified by User Name',
    'LBL_CREATED_USER' => '신규 사용자',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGN_OPPORTUNITY' => '캠페인 목록',
    'LBL_PROJECT_SUBPANEL_TITLE' => '프로젝트',
    'LNK_IMPORT_OPPORTUNITIES' => '영업기회 가져오기',
    'LBL_EDITLAYOUT' => '레이아웃 수정'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => '계약',
    'LBL_AOS_QUOTES' => 'Quotes',

    'LBL_SIZE_ANALYSIS' => 'Size Analysis',
    'LBL_POSITION' => 'Position',
    'LBL_OUT_OF' => 'Out of',
);
