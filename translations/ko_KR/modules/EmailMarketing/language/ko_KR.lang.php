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
    'LBL_REPLY_ADDR' => '"Reply-to" 주소: ',
    'LBL_REPLY_NAME' => '"Reply-to" 이름: ',

    'LBL_MODULE_NAME' => 'Email Marketing',
    'LBL_MODULE_TITLE' => '이메일 마케팅',
    'LBL_LIST_FORM_TITLE' => '이메일 마케팅 캠페인',
    'LBL_NAME' => 'Name',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FROM_ADDR' => '이메일에서',
    'LBL_LIST_DATE_START' => 'Start Date',
    'LBL_LIST_TEMPLATE_NAME' => '이메일 서식',
    'LBL_LIST_STATUS' => '상태',
    'LBL_STATUS' => '상태',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Template Name',
    'LBL_DATE_ENTERED' => '입력일',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '편집자:',
    'LBL_CREATED' => '등록자: ',
    'LBL_MESSAGE_FOR' => 'Send This Message To:',

    'LBL_FROM_NAME' => '발신자 명: ',
    'LBL_FROM_ADDR' => '발신 이메일 주소: ',
    'LBL_DATE_START' => 'Start Date',
    'LBL_SEND_DATE' => 'Send Date',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Start Time',
    'LBL_START_DATE_TIME' => '시작 일자 & 시간: ',
    'LBL_TEMPLATE' => '이메일 서식: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modified by: ',
    'LBL_CREATED_BY' => 'Created by: ',

    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => '캠페인 목록',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Target Lists',
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => '대상',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Email Marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => '새로 만들기',
    'LBL_EDIT_EMAIL_TEMPLATE' => '편집',
    'LBL_FROM_MAILBOX' => '발신 메일박스',
    'LBL_FROM_MAILBOX_NAME' => '사용할 메일박스:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => '아웃바운드 이메일 계정:',
    'LBL_FROM' => '발신자',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Target Lists',
    'LBL_ALL_PROSPECT_LISTS' => '캠페인의 모든 타겟 목록을 선택하세요.',
    'LBL_RELATED_PROSPECT_LISTS' => '이 메세지와 관련된 모든 타겟 목록',
    'LBL_PROSPECT_LIST_NAME' => 'Target List Name',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => '타겟 목록',
    'LBL_MODULE_SEND_TEST' => '캠페인: 테스트 전송',
    'LBL_MODULE_SEND_EMAILS' => '캠페인: 이메일 전송',
    'LBL_SCHEDULE_MESSAGE_TEST' => '테스트할 캠페인 메시지를 선택하세요:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => '지정된 시작 날짜와 시간에 배포할 예정인 캠페인 메시지를 선택하십시오:',
    'LBL_SCHEDULE_BUTTON_TITLE' => '보내기',
    'LBL_SEND_BUTTON_LABEL' => '보내기',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Schedule',
    'LBL_ERROR_ON_MARKETING' => '필수 입력 필드가 비어있습니다',

    'LBL_CAMPAIGN_ID' => '캠페인 ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => '아웃바운드 이메일 계정 Id',
    'LBL_EMAIL_TEMPLATE' => '이메일 서식',
    'LBL_PROSPECT_LISTS' => '잠재고객 목록',
    'LBL_OVERVIEW' => 'Basic',
    'LBL_EMAIL_CONFIG' => '이메일 설정',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => '이메일',
    'LBL_BODY' => 'Body',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => '설문조사',
    'LBL_SCHEDULE' => 'Schedule',
    'LBL_DELETE_TEST_ENTRIES' => 'Delete Test Entries',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => '사용자',
    'LBL_SEND_TEST_EMAIL' => 'Send Test Email',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Message Queue',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Run Nightly Process Bounced Campaign Emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Schedulers',
    'LBL_INBOUND_EMAIL' => '수신 이메일',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
