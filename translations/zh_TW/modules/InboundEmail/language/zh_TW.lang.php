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


    'LBL_RE' => '回覆:',

    'ERR_BAD_LOGIN_PASSWORD' => '登入名稱或者密碼錯誤',
    'ERR_INI_ZLIB' => '暫時無法關閉Zlib壓縮。“測試設置”可能失敗。',
    'ERR_NO_IMAP' => '未發現IMAP類庫。請在使用收件箱前解決這個問題。',
    'ERR_NO_OPTS_SAVED' => '沒有最佳設置收件箱。請重新查看設置。',
    'ERR_TEST_MAILBOX' => '請檢查您的設置，再重試。',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => '負責的使用者',
    'LBL_AUTOREPLY' => '自動回覆範本',
    'LBL_AUTOREPLY_HELP' => '選擇收到電子郵件時的自動回覆發件人。',
    'LBL_BASIC' => '基本設置',
    'LBL_CASE_MACRO' => '案例巨集',
    'LBL_CASE_MACRO_DESC' => '設置巨集，可以用來解析和鏈接導入的電子郵件到案例。',
    'LBL_CASE_MACRO_DESC2' => '設置它為任何值，但是保留<b>"%1"</b>。',
    'LBL_CLOSE_POPUP' => '關閉窗口',
    'LBL_CREATE_TEMPLATE' => '建立',
    'LBL_DELETE_SEEN' => '在導入後刪除已讀的電子郵件',
    'LBL_EDIT_TEMPLATE' => '編輯',
    'LBL_EMAIL_OPTIONS' => '電子郵件處理選項',
    'LBL_EMAIL_BOUNCE_OPTIONS' => '彈回郵件處理選項',
    'LBL_FILTER_DOMAIN_DESC' => '不要發送自動回覆的電子郵件到這個域。',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => '沒有自動回覆的域',
    'LBL_FIND_SSL_WARN' => '<br>測試SSL可能會需要一段時間。請耐心等待。<br>',
    'LBL_FROM_ADDR' => '“發件人”地址',
    'LBL_FROM_ADDR_DESC' => '這裡的電子郵件不會出現在 &quot;發信人&quot; 地址區塊當信件被電子郵件供應商寄出時. 在這情況下, 電子郵件是以被定義在發送伺服器的為主.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '“發件人”姓名',
    'LBL_GROUP_QUEUE' => '指派給組',
    'LBL_HOME' => '首頁',
    'LBL_LIST_MAILBOX_TYPE' => '使用收件箱',
    'LBL_LIST_NAME' => '名稱:',
    'LBL_LIST_GLOBAL_PERSONAL' => '類型',
    'LBL_LIST_SERVER_URL' => '郵件伺服器:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LOGIN' => '使用者名稱',
    'LBL_USERNAME' => '使用者名稱',
    'LBL_MAILBOX_DEFAULT' => '收件箱',
    'LBL_MAILBOX_SSL' => '使用SSL',
    'LBL_MAILBOX_TYPE' => '可能的動作',
    'LBL_DISTRIBUTION_METHOD' => '分發方法',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => '新建案例回覆範本',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting. This response is only sent when the first email is received from the recipient.',
    'LBL_MAILBOX' => '已監視的文件夾',
    'LBL_TRASH_FOLDER' => '垃圾郵件',
    'LBL_SENT_FOLDER' => '已發送郵件',
    'LBL_SELECT' => '選擇',
    'LBL_MARK_READ_NO' => '導入後刪除標記過的電子郵件',
    'LBL_MARK_READ_YES' => '導入後在伺服器上保留電子郵件',
    'LBL_MARK_READ' => '在伺服器上備份',
    'LBL_MAX_AUTO_REPLIES' => '自動響應的數量',
    'LBL_MAX_AUTO_REPLIES_DESC' => '設置自動響應發送一個唯一郵件地址的最大數值在24小時內.',
    'LBL_PERSONAL_MODULE_NAME' => '個人電子郵件帳號',
    'LBL_CREATE_CASE' => '從電子郵件創建案例',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => '彈回電子郵件處理郵箱',
    'LBL_MODULE_TITLE' => '收件箱',
    'LBL_NAME' => '名稱',
    'LBL_NONE' => '無',
    'LBL_ONLY_SINCE_NO' => '不。檢查此郵件伺服器上的所有郵件。',
    'LBL_ONLY_SINCE_YES' => '是。',
    'LBL_PASSWORD' => '密碼',
    'LBL_EMAIL_PASSWORD' => '密碼',
    'LBL_POP3_SUCCESS' => 'POP3測試連接成功。',
    'LBL_POPUP_TITLE' => '測試設置',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => '選擇訂閱',
    'LBL_SELECT_TRASH_FOLDERS' => '選擇垃圾郵件',
    'LBL_SELECT_SENT_FOLDERS' => '選擇已發送郵件',
    'LBL_DELETED_FOLDERS_LIST' => '以下目錄 %s 不存在或已從伺服器上刪除',
    'LBL_PORT' => '郵件伺服器埠',
    'LBL_REPLY_TO_NAME' => '"回覆到" 名稱',
    'LBL_REPLY_TO_ADDR' => '"回覆到" 地址',
    'LBL_SAME_AS_ABOVE' => '使用從名稱/地址',
    'LBL_SERVER_OPTIONS' => '進階設定',
    'LBL_SERVER_TYPE' => '郵件伺服器協議',
    'LBL_SERVER_PORT' => '郵件伺服器埠',
    'LBL_SERVER_URL' => '郵件伺服器地址',
    'LBL_SSL_DESC' => '如有您的郵件伺服器支持安全埠連接，在導入電子郵件的時候，請啟用SLL連接。',
    'LBL_ASSIGN_TO_TEAM_DESC' => '所選團隊擁有此郵件帳號許可權. 如果選擇組文件夾,指派給該文件夾的團隊將覆蓋所選團隊.',
    'LBL_SSL' => '使用SSL',
    'LBL_STATUS' => '狀態',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => '系統默認',
    'LBL_TEST_BUTTON_TITLE' => '測試',
    'LBL_TEST_SETTINGS' => '測試設置',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => '連接完全成功。',
    'LBL_TEST_WAIT_MESSAGE' => '請稍後...',
    'LBL_WARN_IMAP_TITLE' => '禁用收件箱',
    'LBL_WARN_IMAP' => '警告:',
    'LBL_WARN_NO_IMAP' => '收件箱功能<b>不能使用</b>如果在編譯PHP的時候未打開IMAPc-client類庫。請聯繫管理員來解決這個問題。',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => '入站電子郵件帳戶',
    'LNK_LIST_OUTBOUND_EMAILS' => '出站電子郵件帳號',
    'LNK_LIST_SCHEDULER' => '排程程序',
    'LNK_SEED_QUEUES' => '團隊的記錄隊列',
    'LBL_GROUPFOLDER_ID' => '組文件夾編號',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => '發送郵件時，允許使用者使用"發件人"的姓名和地址作為回覆地址',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => '如果選中該選擇，當有權訪問這個群組郵件的使用者發郵件時，這個群組郵件對應的"發件人"姓名和電子郵件地址將出現在發件人選項中。',
    'LBL_STATUS_ACTIVE' => '啟用',
    'LBL_STATUS_INACTIVE' => '停用',
    'LBL_IS_PERSONAL' => '個人帳號',
    'LBL_IS_GROUP' => '群組',
    'LBL_ENABLE_AUTO_IMPORT' => '欄位導入電子郵件',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => '警告：你修改了自動導入設置，這將會導致生產大量數據。',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => '警告：如果要自動創建案例，必須啟用自動導入。',
    'LBL_LIST_TITLE_MY_DRAFTS' => '草稿',
    'LBL_LIST_TITLE_MY_INBOX' => '收件匣',
    'LBL_LIST_TITLE_MY_SENT' => '發送的郵件',
    'LBL_LIST_TITLE_MY_ARCHIVES' => '已存檔的電子郵件',
    'LNK_MY_DRAFTS' => '草稿',
    'LNK_MY_INBOX' => '電子郵件',
    'LNK_VIEW_MY_INBOX' => '查看電子郵件',
    'LNK_QUICK_REPLY' => '回覆',
    'LNK_SENT_EMAIL_LIST' => '發件箱',
    'LBL_EDIT_LAYOUT' => '編輯佈局' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => '修改人',
    'LBL_SERVICE' => '服務',
    'LBL_STORED_OPTIONS' => '保存的選項',
    'LBL_GROUP_ID' => '群組 ID',

    'LBL_OUTBOUND_CONFIGURATION' => '出站電子郵件設定',
    'LBL_CONNECTION_CONFIGURATION' => '服務器配置',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => '安全群組',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => '分發方法',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => '外部 Oauth 連結',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => '外部 Oauth 連結',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => '外部 Oauth 連結',

    'LBL_TYPE' => '類型',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => '預設',
    'LBL_SIGNATURE' => '簽名',

    'LBL_OWNER_NAME' => '負責人',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
