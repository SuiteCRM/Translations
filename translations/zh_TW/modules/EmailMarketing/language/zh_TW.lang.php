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
    'LBL_REPLY_ADDR' => '"回覆" 地址: ',
    'LBL_REPLY_NAME' => '"回覆" 姓名: ',

    'LBL_MODULE_NAME' => '電子郵件營銷',
    'LBL_MODULE_TITLE' => '電子郵件營銷:首頁',
    'LBL_LIST_FORM_TITLE' => '電子郵件市場活動',
    'LBL_NAME' => '名稱',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_FROM_ADDR' => '發件人電子郵件',
    'LBL_LIST_DATE_START' => '開始日期',
    'LBL_LIST_TEMPLATE_NAME' => '電子郵件範本',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_STATUS' => '狀態',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => '狀態:',
    'LBL_TEMPLATE_NAME' => '範本名稱',
    'LBL_DATE_ENTERED' => '創建日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_MODIFIED' => '修改人:',
    'LBL_CREATED' => '建立人: ',
    'LBL_MESSAGE_FOR' => '發送消息給:',

    'LBL_FROM_NAME' => '發件人姓名:',
    'LBL_FROM_ADDR' => '發件人電子郵件地址:',
    'LBL_DATE_START' => '開始日期',
    'LBL_SEND_DATE' => '發送日期',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => '開始時間',
    'LBL_START_DATE_TIME' => '開始日期和時間:',
    'LBL_TEMPLATE' => '電子郵件模板:',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => '修改人:',
    'LBL_CREATED_BY' => '建立人: ',

    'LNK_NEW_CAMPAIGN' => '新增市場活動',
    'LNK_CAMPAIGN_LIST' => '市場活動',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => '新增目標列表',
    'LNK_PROSPECT_LIST_LIST' => '銷售前景列表',
    'LNK_NEW_PROSPECT' => '新增目標',
    'LNK_PROSPECT_LIST' => '目標',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '電子郵件營銷',
    'LBL_CREATE_EMAIL_TEMPLATE' => '創建',
    'LBL_EDIT_EMAIL_TEMPLATE' => '編輯',
    'LBL_FROM_MAILBOX' => '從郵箱中',
    'LBL_FROM_MAILBOX_NAME' => '使用郵箱:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => '出站電子郵件帳戶:',
    'LBL_FROM' => '發件人',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => '銷售前景列表',
    'LBL_ALL_PROSPECT_LISTS' => '在市場活動中的所有目標列表。',
    'LBL_RELATED_PROSPECT_LISTS' => '所有和這條消息相關的目標列表。',
    'LBL_PROSPECT_LIST_NAME' => '目標列表名稱',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => '目標的清單',
    'LBL_MODULE_SEND_TEST' => '營銷活動： 發送測試',
    'LBL_MODULE_SEND_EMAILS' => '營銷活動： 發送電郵',
    'LBL_SCHEDULE_MESSAGE_TEST' => '請選擇您想要測試的營銷活動訊息：',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => '請選擇您想安排在指定開始日期和時間上發送的營銷活動訊息：',
    'LBL_SCHEDULE_BUTTON_TITLE' => '發送',
    'LBL_SEND_BUTTON_LABEL' => '發送',
    'LBL_SCHEDULE_BUTTON_LABEL' => '時間表',
    'LBL_ERROR_ON_MARKETING' => '缺少必需的欄位',

    'LBL_CAMPAIGN_ID' => '市場活動ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => '出站電子郵件帳戶 ID',
    'LBL_EMAIL_TEMPLATE' => '電子郵件範本',
    'LBL_PROSPECT_LISTS' => '潛在目標清單',
    'LBL_OVERVIEW' => '基本',
    'LBL_EMAIL_CONFIG' => '電子郵件設置',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => '電子郵件',
    'LBL_BODY' => '正文',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => '調查問卷',
    'LBL_SCHEDULE' => '時間表',
    'LBL_DELETE_TEST_ENTRIES' => '刪除測試實例',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => '使用者',
    'LBL_SEND_TEST_EMAIL' => '發送測試電子郵件',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => '訊息佇列',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => '收取退訂郵件',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => '排程程序',
    'LBL_INBOUND_EMAIL' => '收件箱',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
