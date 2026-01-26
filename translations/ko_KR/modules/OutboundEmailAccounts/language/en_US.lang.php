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
    'LBL_ASSIGNED_TO_ID' => '할당된 사용자 Id',
    'LBL_ASSIGNED_TO_NAME' => '담당자',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => '생성날짜',
    'LBL_DATE_MODIFIED' => '수정일',
    'LBL_MODIFIED' => '변경됨',
    'LBL_MODIFIED_NAME' => '이름으로 변경됨',
    'LBL_CREATED' => '작성자',
    'LBL_DESCRIPTION' => '상세',
    'LBL_DELETED' => '삭제됨',
    'LBL_NAME' => '이름',
    'LBL_CREATED_USER' => '사용자로 생성됨',
    'LBL_MODIFIED_USER' => '변경유저',
    'LBL_LIST_NAME' => '이름',
    'LBL_EDIT_BUTTON' => '편집',
    'LBL_REMOVE' => '삭제',
    'LBL_LIST_FORM_TITLE' => '아웃 바운드 이메일 계정 목록',
    'LBL_MODULE_NAME' => '아웃바운드 이메일 계정',
    'LBL_MODULE_TITLE' => '아웃바운드 이메일 계정',
    'LBL_HOMEPAGE_TITLE' => '아웃바운드 이메일 계정',
    'LNK_NEW_RECORD' => 'Create Outbound Email Accounts',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => '아웃바운드 이메일 계정',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => '인바운드 이메일 계정',
    'LBL_SEARCH_FORM_TITLE' => 'Search Outbound Email Accounts',
    'LBL_HISTORY_SUBPANEL_TITLE' => '이력 표시',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '영업활동',
    'LBL_NEW_FORM_TITLE' => 'New Outbound Email Accounts',
    'LBL_USERNAME' => '사용자 이름',
    'LBL_PASSWORD' => '비밀번호:',
    'LBL_SMTP_SERVERNAME' => 'SMTP Server Name',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'SMTP 포트',
    'LBL_SMTP_PROTOCOL' => 'SMTP Protocol',
    'LBL_EDITVIEW_PANEL1' => 'Account settings',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => '비밀번호 변경',
    'LBL_SEND_TEST_EMAIL' => '테스트 메일 보내기',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '관리자가 발신계정 초기설정을 형성하지 않아 테스트 이메일을 보낼수 없습니다.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP 인증 사용?',
    'LBL_MAIL_SMTPPASS' => '비밀번호:',
    'LBL_MAIL_SMTPPORT' => '포트',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => '사용자 이름',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP 서버 사양',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '이메일 공급자를 선택하십시오.',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! 메일 비밀번호',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! 메일 ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail 비밀번호:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail 이메일 주소:',
    'LBL_EXCHANGE_SMTPPASS' => '비밀번호 교환',
    'LBL_EXCHANGE_SMTPUSER' => '사용자명 교환',
    'LBL_EXCHANGE_SMTPPORT' => '서버 포트 교환',
    'LBL_EXCHANGE_SMTPSERVER' => '서버 교환',

    'LBL_TYPE' => '종류',
    'LBL_MAIL_SENDTYPE' => 'Mail Send Type',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"From" name',
    'LBL_SMTP_FROM_ADDR' => '"From" address',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => '보안 그룹',

    'LBL_OWNER' => '소유자',
    'LBL_OWNER_NAME' => '소유자',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => '외부 OAuth 연결',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => '외부 OAuth 연결',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
