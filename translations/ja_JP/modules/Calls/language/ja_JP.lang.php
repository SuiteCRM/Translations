<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Calls',
    'LBL_MODULE_TITLE' => 'コール情報: ホーム',
    'LBL_SEARCH_FORM_TITLE' => 'コール検索',
    'LBL_LIST_FORM_TITLE' => 'コール一覧',
    'LBL_NEW_FORM_TITLE' => 'アポイント作成',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => '取引先担当者',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => '関連先ID',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => '方向',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => '通知:',
    'LBL_CONTACT_NAME' => '連絡先:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => '方向:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => '時間:',
    'LBL_DURATION_MINUTES' => '分:',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => '取引先を削除するにはレコード番号を指定する必要があります。',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => '関係先:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'スケジューリング',
    'LBL_ADD_INVITEE' => 'スケジュールにユーザーを追加',
    'LBL_NAME' => '名称',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'メール',
    'LBL_PHONE' => '電話番号',
    'LBL_REMINDER_POPUP' => 'ポップアップ',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Eメール通知',
    'LBL_EMAIL_REMINDER' => 'Eメール通知',
    'LBL_EMAIL_REMINDER_TIME' => 'Eメール通知時間',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => '通知',
    'LBL_EMAIL_REMINDER_SENT' => 'Eメール通知送信',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
    'LNK_SELECT_ACCOUNT' => '取引先の選択',
    'LNK_NEW_ACCOUNT' => '取引先作成',
    'LNK_NEW_OPPORTUNITY' => '商談作成',
    'LBL_LEADS_SUBPANEL_TITLE' => 'リード',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '取引先担当者',
    'LBL_USERS_SUBPANEL_TITLE' => 'ユーザ',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => '担当ユーザー',
    'LBL_LIST_MY_CALLS' => 'コール情報',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名',
    'LBL_ASSIGNED_TO_ID' => '担当ユーザー名',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Remove',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'リンク承認',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => '参加者情報',
    'LBL_CREATE_CONTACT' => '取引先担当者として',
    'LBL_CREATE_LEAD' => '潜在顧客として',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'リピートタイプ',
    'LBL_REPEAT_INTERVAL' => 'リピートインターバル',
    'LBL_REPEAT_DOW' => 'リピートDOW',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'リピート回数',
    'LBL_REPEAT_PARENT_ID' => 'リピート親会社ID',
    'LBL_RECURRING_SOURCE' => 'リピートソース',

    'LBL_SYNCED_RECURRING_MSG' => 'この連絡は別のシステムで発生し、SuiteCRM と同期されました。変更をするためには、他のシステム内で元の連絡に移動します。他のシステムで行われた変更は、このレコードに同期できます。',

    // for reminders
    'LBL_REMINDERS' => '通知する',
    'LBL_REMINDERS_ACTIONS' => 'アクション:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'メールで招待',
    'LBL_REMINDERS_WHEN' => 'いつ：',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'リマインダの削除',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'すべての招待を追加',
    'LBL_REMINDERS_ADD_REMINDER' => 'リマインダを追加',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => '理由',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => '連絡試行履歴',
    'LBL_CANCEL' => 'Cancel',
    'LBL_SAVE' => '新しいグループフォルダを追加',

    'LBL_CALLS_RESCHEDULE' => '電話をリスケジュール',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Date Modified',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'by',
);
