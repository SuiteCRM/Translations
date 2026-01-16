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
    'LBL_NAME' => '작업 이름',
    'LBL_EXECUTE_TIME' => '실행 시간',
    'LBL_SCHEDULER_ID' => '일정 관리',
    'LBL_STATUS' => '작업 상태',
    'LBL_RESOLUTION' => 'Result',
    'LBL_MESSAGE' => '메시지',
    'LBL_DATA' => '작업 데이터',
    'LBL_REQUEUE' => '실패 시 다시 시도',
    'LBL_RETRY_COUNT' => '최대 다시 시도 횟수',
    'LBL_FAIL_COUNT' => '실패',
    'LBL_INTERVAL' => '재시도 사이의 최소 간격',
    'LBL_CLIENT' => '클라이언트 소유',
    'LBL_PERCENT' => '완료율',
// Errors
    'ERR_CALL' => "함수를 호출할 수 없습니다: %s",
    'ERR_CURL' => "No CURL - URL 작업을 실행 할 수 없습니다",
    'ERR_FAILED' => "예기치 않은 오류, PHP 로그 및 suitecrm.log을 확인 하시기 바랍니다",
    'ERR_PHP' => "%s [%d]: 라인 %d에 %s에 %s",
    'ERR_NOUSER' => "작업에 대해 지정 된 사용자 ID가 없습니다",
    'ERR_NOSUCHUSER' => "사용자 ID %s 를 찾을 수 없습니다",
    'ERR_JOBTYPE' => "알 수 없는 작업 유형: %s",
    'ERR_TIMEOUT' => "타임 아웃에 의한 강제 실패",
    'ERR_JOB_FAILED_VERBOSE' => 'CRON에 의한 실행에서 작업 %1$s (%2$s) 가 실패 하였습니다',
);
