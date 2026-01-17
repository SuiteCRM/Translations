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
    'LBL_SEND_DATE_TIME' => '發送日期',
    'LBL_IN_QUEUE' => '處理中',
    'LBL_IN_QUEUE_DATE' => '排隊日期',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => '每一批發送過的電子郵件數量只可以是整數',

    'LBL_ATTACHMENT_AUDIT' => ' 已發送。它未複製到本地端以節省硬碟使用。',
    'LBL_CONFIGURE_SETTINGS' => '配置',
    'LBL_CUSTOM_LOCATION' => '使用者定義',
    'LBL_DEFAULT_LOCATION' => '預設',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => '刪除電子郵件的同時也刪除相關的備忘錄和附件',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => '電子郵件通知',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => '確認參加設定',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => '自動發送確認參加郵件',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => '確認參加郵件範本',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => '外發電子郵件配置',
    'LBL_EMAILS_PER_RUN' => '每一批發送電子郵件的數量:',
    'LBL_ID' => '編號',
    'LBL_LIST_CAMPAIGN' => '市場活動',
    'LBL_LIST_FORM_TITLE' => '隊列',
    'LBL_LIST_FROM_NAME' => '發信人名稱',
    'LBL_LIST_IN_QUEUE' => '處理中',
    'LBL_LIST_MESSAGE_NAME' => '市場行銷消息',
    'LBL_LIST_RECIPIENT_EMAIL' => '收件人電子郵件',
    'LBL_LIST_RECIPIENT_NAME' => '收件人姓名',
    'LBL_LIST_SEND_ATTEMPTS' => '嘗試發送',
    'LBL_LIST_SEND_DATE_TIME' => '發送於',
    'LBL_LIST_USER_NAME' => '使用者名稱',
    'LBL_LOCATION_ONLY' => '地點',
    'LBL_LOCATION_TRACK' => '市場活動追蹤文件的位置(像campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => '保留市場活動訊息的備份:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => '您是否希望存儲在所有市場活動中發送的每一封電子郵件的消息副本? 我們建議且系統默認不會這樣做. 選擇否僅存儲發送的範本和創建消息所需的變數.',
    'LBL_MAIL_SENDTYPE' => '郵件傳送代理:',
    'LBL_MAIL_SMTPAUTH_REQ' => '使用SMTP認證?',
    'LBL_MAIL_SMTPPASS' => '密碼:',
    'LBL_MAIL_SMTPPORT' => 'SMTP埠:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP伺服器地址:',
    'LBL_MAIL_SMTPUSER' => '使用者名稱:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => '選擇電子郵件提供商：',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail 密碼:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail密碼:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail地址:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange密碼:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange 使用者名稱',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange伺服器埠:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange伺服器:',
    'LBL_EMAIL_LINK_TYPE' => '電子郵件客戶端',
    'LBL_MARKETING_ID' => '市場活動Id',
    'LBL_MODULE_ID' => '郵遞員',
    'LBL_MODULE_NAME' => '電子郵件設置',
    'LBL_MODULE_TITLE' => '發件箱電子郵件隊列管理',
    'LBL_NOTIFICATION_ON_DESC' => '當有記錄被指派的時候，發送通知郵件。',
    'LBL_NOTIFY_FROMADDRESS' => '“發件人”地址:',
    'LBL_NOTIFY_FROMNAME' => '“發件人”姓名:',
    'LBL_NOTIFY_ON' => '打開通知郵件?',
    'LBL_NOTIFY_TITLE' => '電子郵件通知選項',
    'LBL_OUTBOUND_EMAIL_TITLE' => '發件箱電子郵件選項',
    'LBL_RELATED_ID' => '相關編號',
    'LBL_RELATED_TYPE' => '關聯類似',
    'LBL_SEARCH_FORM_TITLE' => '搜尋佇列',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'config.php中變數site_url的值',
    'TXT_REMOVE_ME_ALT' => '要把自己從這個郵件列表中移除，請去',
    'TXT_REMOVE_ME_CLICK' => '點擊這兒',
    'TXT_REMOVE_ME' => '把自己從電子郵件列表中移除',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => '透過電子郵件寄送通知給負責人',

    'LBL_SECURITY_TITLE' => '電子郵件安全設置',
    'LBL_SECURITY_DESC' => '不允許進入收件箱，或者不允許顯示電子郵件模組。',
    'LBL_SECURITY_APPLET' => '小應用程序標簽',
    'LBL_SECURITY_BASE' => '基本標簽',
    'LBL_SECURITY_EMBED' => '嵌入標簽',
    'LBL_SECURITY_FORM' => '表單標簽',
    'LBL_SECURITY_FRAME' => '結構標簽',
    'LBL_SECURITY_FRAMESET' => '框架標簽',
    'LBL_SECURITY_IFRAME' => 'Iframe標簽',
    'LBL_SECURITY_IMPORT' => '導入標簽',
    'LBL_SECURITY_LAYER' => '層次標簽',
    'LBL_SECURITY_LINK' => '鏈接標簽',
    'LBL_SECURITY_OBJECT' => '對象標簽',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => '選擇Outlook默認最低安全防範(錯誤在正確的一邊顯示)。',
    'LBL_SECURITY_STYLE' => '風格標簽',
    'LBL_SECURITY_TOGGLE_ALL' => '選中所有的選項',
    'LBL_SECURITY_XMP' => 'Xmp標簽',
    'LBL_YES' => 'Yes',
    'LBL_NO' => '不',
    'LBL_PREPEND_TEST' => '[測試]:',
    'LBL_SEND_ATTEMPTS' => '嘗試發送',
    'LBL_OUTGOING_SECTION_HELP' => '配置預設的外發電子郵件伺服器，用來發送提醒、工作流告警等。',
    'LBL_ALLOW_DEFAULT_SELECTION' => "使用者可能使用這個身份寄送:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => '選中此選項後，所有使用者都將都能夠發送電子郵件使用同一個傳出 <br>郵件帳戶用於發送系統通知和警報。 如果未選中的選項，<br>使用者仍然可以提供他們自己的帳戶資訊後使用傳出的郵件伺服器。',
    'LBL_FROM_ADDRESS_HELP' => 'When enabled, the assigning user\\\'s name and email address will be included in the From field of the email. This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_HELP' => '幫助' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => '查看出站電子郵件帳戶',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => '使用者可能寄送給他們自己:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => '當開啟的時候,<b>所有</b>使用者可以使用外部的電子郵件系統寄送,透過他們的使用者主要信箱, &quot;從&quot; 郵件地址. <br> 這個功能可能沒有作用,因為外部的電子郵件系統不允許使用不同的帳號.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
