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
    'LBL_ASSIGNED_TO_ID' => '負責人Id',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ID' => '編號',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_MODIFIED' => '修改人',
    'LBL_MODIFIED_NAME' => '修改人姓名',
    'LBL_CREATED' => '建立人',
    'LBL_DESCRIPTION' => '描述',
    'LBL_DELETED' => '已刪除',
    'LBL_NAME' => '名稱',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'LBL_LIST_NAME' => '名稱',
    'LBL_EDIT_BUTTON' => '編輯',
    'LBL_REMOVE' => '刪除',
    'LBL_LIST_FORM_TITLE' => '出站電子郵件帳號清單',
    'LBL_MODULE_NAME' => '出站電子郵件帳號',
    'LBL_MODULE_TITLE' => '出站電子郵件帳號',
    'LBL_HOMEPAGE_TITLE' => '我的出站電子郵件帳號清單',
    'LNK_NEW_RECORD' => '建立出站電子郵件帳號',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => '新增系統覆蓋出站電子郵件帳戶',

    'LNK_LIST' => '出站電子郵件帳號',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => '入站電子郵件帳戶',
    'LBL_SEARCH_FORM_TITLE' => '搜尋出站電子郵件帳戶',
    'LBL_HISTORY_SUBPANEL_TITLE' => '查看歷史記錄',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_NEW_FORM_TITLE' => '新增出站電子郵件帳戶',
    'LBL_USERNAME' => '使用者名稱',
    'LBL_PASSWORD' => '密碼',
    'LBL_SMTP_SERVERNAME' => 'SMTP 伺服器名稱',
    'LBL_SMTP_AUTH' => 'SMTP 需要驗證',
    'LBL_SMTP_PORT' => 'SMTP埠',
    'LBL_SMTP_PROTOCOL' => 'SMTP 協定',
    'LBL_EDITVIEW_PANEL1' => '帳戶設定',
    'LBL_OUTBOUND_CONFIGURATION' => '出站電子郵件設定',
    'LBL_CONNECTION_CONFIGURATION' => '服務器配置',
    'LBL_CHANGE_PASSWORD' => '修改密碼',
    'LBL_SEND_TEST_EMAIL' => '發送測試電子郵件',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => '管理員沒有配置預設外發電子郵件帳號。無法發送測試郵件。',
    'LBL_MAIL_SMTPAUTH_REQ' => '使用SMTP認證?',
    'LBL_MAIL_SMTPPASS' => '密碼',
    'LBL_MAIL_SMTPPORT' => '港口',
    'LBL_MAIL_SMTPSERVER' => '伺服器',
    'LBL_MAIL_SMTPUSER' => '使用者名稱',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP伺服器設置',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '選擇電子郵件提供商：',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail 密碼:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail密碼:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail地址:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange密碼:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange 使用者名稱:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange伺服器埠:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange伺服器:',

    'LBL_TYPE' => '類型',
    'LBL_MAIL_SENDTYPE' => '郵件發送類型',
    'LBL_MAIL_SMTPSSL' => '使用 SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '發信人名稱',
    'LBL_SMTP_FROM_ADDR' => '發信人地址',
    'LBL_REPLY_TO_NAME' => '"回覆" 姓名:',
    'LBL_REPLY_TO_ADDR' => '"回覆" 地址:',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => '安全群組',

    'LBL_OWNER' => '負責人',
    'LBL_OWNER_NAME' => '負責人',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => '外部 Oauth 連結',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => '外部 Oauth 連結',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => '外部 Oauth 連結',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
