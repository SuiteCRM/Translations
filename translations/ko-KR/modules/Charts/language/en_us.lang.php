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
    'ERR_NO_OPPS' => '영업기회 그래프를 표시하기 위해서는, 먼저 영업기회를 작성해야 합니다.',
    'LBL_ALL_OPPORTUNITIES' => '모든 기회의 총 금액은 ',
    'LBL_CHART_TYPE' => '차트 유형:',
    'LBL_CREATED_ON' => '마지막 실행 ',
    'LBL_CLOSE_DATE_START' => 'Expected Close Date - From:',
    'LBL_CLOSE_DATE_END' => 'Expected Close Date - To:',
    'LBL_DATE_END' => '종료일:',
    'LBL_DATE_RANGE_TO' => '받는 사람',
    'LBL_DATE_RANGE' => '날짜 범위는',
    'LBL_DATE_START' => '시작 날짜:',
    'LBL_EDIT' => '편집',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => '선택된 유저에 대한 결과와 리드 소스에 관한 영업기회마다의 누적 금액을 표시합니다. 영업기회 결과는 영업기회 스테이지가 수주, 손실, 기타로 구분됩니다.',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => '결과값 리드소스의 모든 기회',
    'LBL_LEAD_SOURCE_FORM_DESC' => '선택한 유저의 영업기회 누적 금액을 리드 소스별로 표시합니다.',
    'LBL_LEAD_SOURCE_FORM_TITLE' => '모든 리드 소스별 상담',
    'LBL_LEAD_SOURCE_OTHER' => '기타',
    'LBL_LEAD_SOURCES' => '리드 소스:',
    'LBL_MODULE_NAME' => '대시보드',
    'LBL_MODULE_TITLE' => '대시보드: 홈',
    'LBL_MONTH_BY_OUTCOME_DESC' => '선택된 유저에 관해, 지정 범위내 수주 예정일이 있는 영업기회의 금액을, 영업기회별로 월별 누적 금액을 표시합니다. 영업기회 결과는 영업기회 스테이지가 수주, 실주, 기타로 구분됩니다.',
    'LBL_OPP_SIZE' => '영업기회 금액의 단위는 ',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => '리드 소스가 다음에 해당하는 영업기회는 ',
    'LBL_OPPS_IN_STAGE' => ' where sales stage is',
    'LBL_OPPS_OUTCOME' => ' where outcome is',
    'LBL_OPPS_WORTH' => '영업기회의 가치',
    'LBL_PIPELINE_FORM_TITLE_DESC' => '선택 영업 스테이지별로, 수주 예정일이 지정된 기간내에 있는 영업기회의 금액을 누적 표시합니다.',
    'LBL_REFRESH' => '갱긴',
    'LBL_ROLLOVER_DETAILS' => 'Rollover a bar for details.',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'Rollover a wedge for details.',
    'LBL_SALES_STAGE_FORM_DESC' => '선택된 유저에 대해, 수주 예정일이 지정된 기간내에 있는 영업기회의 금액을 영업기회 스테이지별로 누적 표시합니다.',
    'LBL_SALES_STAGE_FORM_TITLE' => '판매 단계 파이프라인',
    'LBL_SALES_STAGES' => 'Sales Stages:',
    'LBL_TOTAL_PIPELINE' => 'Pipeline total is',
    'LBL_USERS' => '사용자:',
    'LBL_YEAR_BY_OUTCOME' => '월별 결과값의 파이프라인',
    'LBL_YEAR' => '년:',
    'LNK_NEW_ACCOUNT' => '거래처 작성',
    'LNK_NEW_CALL' => '전화통화 예약',
    'LNK_NEW_CASE' => '사례 작성',
    'LNK_NEW_CONTACT' => '거래고객작성',
    'LNK_NEW_LEAD' => '리드 작성',
    'LNK_NEW_MEETING' => '미팅일정 추가',
    'LNK_NEW_NOTE' => '노트작성',
    'LNK_NEW_OPPORTUNITY' => '영업기회 작성',
    'LNK_NEW_TASK' => '업무 작성',
    'NTC_NO_LEGENDS' => '없음',

    'LBL_TITLE' => '제목: ',
    'LBL_MY_MODULES_USED_SIZE' => '액세스 수',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => '판매 단계 파이프라인',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => '결과 리드소스',
    'LBL_CHART_OUTCOME_BY_MONTH' => '월별 결과',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => '리드소스 파이프라인',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => '내 판매단계 파이프라인',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => '나의 사용된 모듈(지난 30일)',
);
