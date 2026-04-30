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
    'LBL_MODULE_NAME' => 'Activities',
    'LBL_MODULE_TITLE' => '活動: ホーム',
    'LBL_SEARCH_FORM_TITLE' => '活動検索',
    'LBL_LIST_FORM_TITLE' => '活動',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_OVERVIEW' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'タスク', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'ミーティング', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'コール', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'メール', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'ノート', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => '印刷', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Meeting',
    'LBL_CALL_TYPE' => 'Call',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Note',
    'LBL_DATA_TYPE_START' => '開始日',
    'LBL_DATA_TYPE_SENT' => '送信日',
    'LBL_DATA_TYPE_MODIFIED' => '更新日',
    'LBL_LIST_CONTACT' => '取引先担当者',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_DATE' => 'Date',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_STATUS' => 'Status:',
    'LBL_LOCATION' => '場所:',
    'LBL_DATE_TIME' => '開始日時:',
    'LBL_DATE' => '開始日:',
    'LBL_TIME' => '開始時間:',
    'LBL_DURATION' => '時間:',
    'LBL_HOURS_MINS' => '(時/分)',
    'LBL_CONTACT_NAME' => '連絡先名: ',
    'LBL_DESCRIPTION' => 'Description:',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_NOTE' => 'ノート作成',
    'LNK_NEW_EMAIL' => 'アーカイブされたEメールの作成',
    'LNK_CALL_LIST' => 'コール',
    'LNK_MEETING_LIST' => 'ミーティング',
    'LNK_TASK_LIST' => 'タスク',
    'LNK_NOTE_LIST' => '備考を表示',
    'LBL_DELETE_ACTIVITY' => 'この活動を削除してもよろしいですか？',
    'ERR_DELETE_RECORD' => '口座を削除するためにはレコード番号を指定する必要があります。',
    'LBL_INVITEE' => '招待者',
    'LBL_LIST_DIRECTION' => '方向',
    'LBL_DIRECTION' => '方向',
    'LNK_NEW_APPOINTMENT' => 'アポイント作成',
    'LNK_VIEW_CALENDAR' => '今日',
    'LBL_OPEN_ACTIVITIES' => '未実施の活動',
    'LBL_HISTORY' => 'History',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Create Task',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Create Task',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Schedule Meeting',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Schedule Meeting',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Log Call',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'ノート作成',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Create Note or Attachment',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'メールをアーカイブする',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'メールをアーカイブする',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_DUE_DATE' => 'Due Date',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LNK_IMPORT_CALLS' => 'コールをインポート',
    'LNK_IMPORT_MEETINGS' => 'ミーティングをインポート',
    'LNK_IMPORT_TASKS' => 'タスクをインポート',
    'LNK_IMPORT_NOTES' => 'ノートのインポート',
    'LBL_ACCEPT_THIS' => '承諾？',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Open Activities',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'アサインされたユーザー',

    'LBL_ACCEPT' => 'Accept' /*for 508 compliance fix*/,
);
