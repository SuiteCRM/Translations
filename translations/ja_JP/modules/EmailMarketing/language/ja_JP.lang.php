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
    'LBL_REPLY_ADDR' => '返信先(\"Reply-To\")のアドレス:',
    'LBL_REPLY_NAME' => '返信先(\"Reply-To\")の名前:',

    'LBL_MODULE_NAME' => 'Email Marketing',
    'LBL_MODULE_TITLE' => '電子メールマーケティング: ホーム',
    'LBL_LIST_FORM_TITLE' => '電子メールマーケティング キャンペーン',
    'LBL_NAME' => '名称',
    'LBL_LIST_NAME' => '名称',
    'LBL_LIST_FROM_ADDR' => 'From(アドレス)',
    'LBL_LIST_DATE_START' => 'Start Date',
    'LBL_LIST_TEMPLATE_NAME' => 'メールテンプレート',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Template Name',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => '更新者: ',
    'LBL_CREATED' => '作成者: ',
    'LBL_MESSAGE_FOR' => 'Send This Message To:',

    'LBL_FROM_NAME' => 'From（名）: ',
    'LBL_FROM_ADDR' => 'From（アドレス）: ',
    'LBL_DATE_START' => 'Start Date',
    'LBL_SEND_DATE' => 'Send Date',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Start Time',
    'LBL_START_DATE_TIME' => '開始日時: ',
    'LBL_TEMPLATE' => '電子メールテンプレート: ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modified by: ',
    'LBL_CREATED_BY' => 'Created by: ',

    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Campaigns',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Target Lists',
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'Targets',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Email Marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => '作成',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Edit',
    'LBL_FROM_MAILBOX' => '受信箱から',
    'LBL_FROM_MAILBOX_NAME' => '使用受信箱:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => '送信用メールアカウント',
    'LBL_FROM' => 'From',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Target Lists',
    'LBL_ALL_PROSPECT_LISTS' => 'キャンペーンの中のすべてのターゲットリスト',
    'LBL_RELATED_PROSPECT_LISTS' => 'このメッセージに関連するすべてのターゲットリスト',
    'LBL_PROSPECT_LIST_NAME' => 'Target List Name',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => '対象リスト',
    'LBL_MODULE_SEND_TEST' => 'キャンペーン: 送信テスト',
    'LBL_MODULE_SEND_EMAILS' => 'キャンペーン: メールを送る',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'テストしたいキャンペーン用メッセージを選択してください:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'スケジュールで指定された開始日付と時刻に配布にしたいキャンペーン メッセージを選択してください。',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Send',
    'LBL_SEND_BUTTON_LABEL' => 'Send',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'スケジュール',
    'LBL_ERROR_ON_MARKETING' => '必要なフィールドがありません',

    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => '送信メール アカウントID:',
    'LBL_EMAIL_TEMPLATE' => 'メールテンプレート',
    'LBL_PROSPECT_LISTS' => '見込みリスト',
    'LBL_OVERVIEW' => '基本',
    'LBL_EMAIL_CONFIG' => 'Email Settings',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'メール',
    'LBL_BODY' => 'Body',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => '調査',
    'LBL_SCHEDULE' => 'スケジュール',
    'LBL_DELETE_TEST_ENTRIES' => 'Delete Test Entries',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'ユーザー',
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
    'LBL_INBOUND_EMAIL' => '受信メール',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
