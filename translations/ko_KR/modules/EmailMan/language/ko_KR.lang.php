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
    'LBL_SEND_DATE_TIME' => '보낸 날짜',
    'LBL_IN_QUEUE' => '처리중',
    'LBL_IN_QUEUE_DATE' => '대기 중인된 날짜',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => '일괄적으로 전송할 이메일의 수를 정수값으로 지정하십시오',

    'LBL_ATTACHMENT_AUDIT' => '보냈습니다. 디스크 사용을 절약하기 위해 로컬로 복사하지 않았습니다.',
    'LBL_CONFIGURE_SETTINGS' => '이메일 설정 구성',
    'LBL_CUSTOM_LOCATION' => '사용자 정의',
    'LBL_DEFAULT_LOCATION' => '초기값',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => '삭제된 이메일과 관련된 메모 & 첨부 파일 삭제',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => '이메일 경고 알림',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In 설정',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => '자동으로 Opt In Email 전송',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Opt In Email 템플릿 확인',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Legacy Email 작성 동작 활성화',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => '발신 메일 설정',
    'LBL_EMAILS_PER_RUN' => '일괄 처리당 보낸 이메일 수:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => '캠페인',
    'LBL_LIST_FORM_TITLE' => '큐',
    'LBL_LIST_FROM_NAME' => '발신자 명',
    'LBL_LIST_IN_QUEUE' => '처리중',
    'LBL_LIST_MESSAGE_NAME' => '마케팅 메시지',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Recipient Email',
    'LBL_LIST_RECIPIENT_NAME' => 'Recipient Name',
    'LBL_LIST_SEND_ATTEMPTS' => '전송 시도',
    'LBL_LIST_SEND_DATE_TIME' => '보내기',
    'LBL_LIST_USER_NAME' => '사용자 이름',
    'LBL_LOCATION_ONLY' => '위치',
    'LBL_LOCATION_TRACK' => '캠페인 추적 파일 위치(예: campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => '캠페인 메시지의 복사본을 보관:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => '모든 캠페인에서 발송한 <bold>각각의</bold> 이메일 내용 전부의 복사본을 저장하겠습니까? <bold>아니오를 추천합니다.</bold> 아니오를 선택하면 발송한 서식만을 저장하고, 각각의 메시지에서 필요한 변수는 재생성됩니다.',
    'LBL_MAIL_SENDTYPE' => '메일 전송 에이전트:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP 인증 사용:',
    'LBL_MAIL_SMTPPASS' => '비밀번호',
    'LBL_MAIL_SMTPPORT' => 'SMTP 포트:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP 메일 서버:',
    'LBL_MAIL_SMTPUSER' => '사용자 이름:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '이메일 제공자 선택',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! 메일 비밀번호',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! 메일 ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail 비밀번호',
    'LBL_GMAIL_SMTPUSER' => 'Gmail 이메일 주소',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange 비밀번호',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange 사용자 이름',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchangne 서버 포트',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange 서버',
    'LBL_EMAIL_LINK_TYPE' => '이메일 클라이언트',
    'LBL_MARKETING_ID' => '마케팅 Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => '이메일 설정',
    'LBL_MODULE_TITLE' => '아웃바운드 이메일 큐 관리',
    'LBL_NOTIFICATION_ON_DESC' => '활성화되면, 레코드가 사용자에게 할당될 때 이메일이 사용자에게 전송됩니다.',
    'LBL_NOTIFY_FROMADDRESS' => '"From" 주소:',
    'LBL_NOTIFY_FROMNAME' => '발신자 명:',
    'LBL_NOTIFY_ON' => 'Assignment Notifications',
    'LBL_NOTIFY_TITLE' => '이메일 옵션',
    'LBL_OUTBOUND_EMAIL_TITLE' => '아웃바운드 이메일 옵션',
    'LBL_RELATED_ID' => '관련된 Id',
    'LBL_RELATED_TYPE' => '관련 유형',
    'LBL_SEARCH_FORM_TITLE' => '대기열(Queue) 검색',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php 설정 site_url 값',
    'TXT_REMOVE_ME_ALT' => '해당 이메일 목록에서 자신을 제거하려면 다음으로 이동하세요',
    'TXT_REMOVE_ME_CLICK' => '여기를 클릭',
    'TXT_REMOVE_ME' => '해당 이메일 목록에서 자신을 제거하려면',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => '할당된 사용자의 이메일 주소에서 알림을 보내기',

    'LBL_SECURITY_TITLE' => '이메일 보안 설정',
    'LBL_SECURITY_DESC' => '인바운드 이메일을 통해 들어오는 것을 허용하지 않거나, 이메일 모듈에 표시하지 않을 사항을 확인하세요',
    'LBL_SECURITY_APPLET' => '애플릿 태그',
    'LBL_SECURITY_BASE' => 'Base 태그',
    'LBL_SECURITY_EMBED' => 'Embed 태그',
    'LBL_SECURITY_FORM' => 'Form 태그',
    'LBL_SECURITY_FRAME' => 'Frame 태그',
    'LBL_SECURITY_FRAMESET' => 'Frameset 태그',
    'LBL_SECURITY_IFRAME' => 'iFrame 태그',
    'LBL_SECURITY_IMPORT' => 'Import 태그',
    'LBL_SECURITY_LAYER' => 'Layer 태그',
    'LBL_SECURITY_LINK' => 'Link 태그',
    'LBL_SECURITY_OBJECT' => 'Object 태그',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Outlook의 기본 최소 보안 설정(올바른 디스플레이 측면의 오류)을 선택하세요',
    'LBL_SECURITY_STYLE' => 'Style 태그',
    'LBL_SECURITY_TOGGLE_ALL' => '모든 옵션 전환',
    'LBL_SECURITY_XMP' => 'Xmp 태그',
    'LBL_YES' => '예',
    'LBL_NO' => '아니오',
    'LBL_PREPEND_TEST' => '[테스트]:',
    'LBL_SEND_ATTEMPTS' => '전송 시도',
    'LBL_OUTGOING_SECTION_HELP' => '이메일 알림, 워크플로우 경고 등을 보내기 위한 기본 발신 메일 서버를 설정하세요.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "사용자는 이 계정의 Id로 다음과 같은 내용을 전송할 수 있습니다:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => '이 옵션을 선택하면, 모든 사용자가 시스템 알림 및 경고를 전송하기 위해 사용하는 것과 동일한 발신 메일 계정을 사용하여 이메일을 전송할 수 있습니다. <br> 옵션을 선택하지 않은 경우, 사용자는 자신의 계정 정보를 제공한 후에도 발신 메일 서버를 사용할 수 있습니다.',
    'LBL_FROM_ADDRESS_HELP' => '활성화되면, 할당한 사용자의 이름과 이메일 주소가 이메일의 발신자 필드(From field)에 포함됩니다. 이 기능은 서버 계정과 다른 이메일 계정에서 보내는 것을 허용하지 않는 SMTP 서버에서는 작동하지 않을 수 있습니다.',
    'LBL_HELP' => '도움말' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => '아웃바운드 이메일 계정 보기',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => '사용자가 직접 전송할 수 있습니다:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => '활성화되면, <b>모든</b> 사용자가 기본 이메일 주소를&quot;발신자:&quot; 주소로 사용하여, 발신 메일 서버를 통해 이메일을 보낼 수 있습니다. <br> 이 기능은 서버 계정과 다른 이메일 계정에서 보내는 것을 허용하지 않는 SMTP 서버에서는 작동하지 않을 수 있습니다.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
