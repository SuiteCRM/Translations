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
    'LBL_MODULE_NAME' => '통화',
    'LBL_LIST_FORM_TITLE' => '통화',
    'LBL_CURRENCY' => '통화',
    'LBL_ADD' => '추가',
    'LBL_MERGE' => '복제',
    'LBL_MERGE_TXT' => '선택된 통화에 매핑할 새로운 통화를 선택해주세요. 이 작업으로 체크된 모든 통화는 삭제되고, 해당 통화에 연동된 모든 데이터를 선택한 통화로 변경합니다.',
    'LBL_US_DOLLAR' => '미국 달러',
    'LBL_DELETE' => '삭제',
    'LBL_LIST_SYMBOL' => '통화 기호',
    'LBL_LIST_NAME' => '통화 이름',
    'LBL_LIST_ISO4217' => 'ISO 4217 코드',
    'LBL_LIST_ISO4217_HELP' => '통화 이름과 통화 기호를 정의 하는 세 문자로 된 ISO 4217 코드를 입력 합니다.',
    'LBL_UPDATE' => '변경',
    'LBL_LIST_RATE' => '환율',
    'LBL_LIST_RATE_HELP' => '환율을 0.5 유로로 설정하게 되면 10 달러 = 5 유로가 됩니다.',
    'LBL_LIST_STATUS' => '상태',
    'LNK_NEW_CONTACT' => '신규 거래처 담당자',
    'LNK_NEW_ACCOUNT' => '신규 거래처',
    'LNK_NEW_OPPORTUNITY' => '신규안건작성',
    'LNK_NEW_CASE' => '신규사례작성',
    'LNK_NEW_NOTE' => '노트작성',
    'LNK_NEW_CALL' => '새로운 콜',
    'LNK_NEW_EMAIL' => '새로운 이메일',
    'LNK_NEW_MEETING' => '새 미팅',
    'LNK_NEW_TASK' => '업무 작성',
    'NTC_DELETE_CONFIRMATION' => '이 레코드를 삭제 하시겠습니까? 이 통화를 사용하는 모든 레코드는 시스템 기본 통화로 변경됩니다. 삭제하는 대신에 통화 상태를 비활성으로 설정하는 방법을 추천합니다.',
    'LBL_BELOW_MIN' => '환율은 0이상이어야 합니다.',
    'currency_status_dom' =>
        array(
            'Active' => '활성',
            'Inactive' => '비활성',
        ),
    'LBL_CREATED_BY' => '작성자',
    'LBL_EDIT_LAYOUT' => '레이아웃 편집' /*for 508 compliance fix*/,
);
