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

    'LBL_SHAREDWEEK' => '共有された週',
    'LBL_SHAREDMONTH' => '共有された月',

    'LBL_MODULE_NAME' => 'Calendar',
    'LBL_MODULE_TITLE' => 'Calendar',
    'LNK_NEW_CALL' => 'コール作成',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_CALL_LIST' => 'Calls',
    'LNK_MEETING_LIST' => 'Meetings',
    'LNK_TASK_LIST' => 'Tasks',
    'LNK_TASK' => 'Task',
    'LNK_TASK_VIEW' => 'タスクを表示',
    'LNK_EVENT' => 'イベント',
    'LNK_EVENT_VIEW' => 'イベントを表示',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => '日',
    'LBL_YEAR' => '年',

    'LBL_AGENDAWEEK' => '週',
    'LBL_PREVIOUS_MONTH' => '前月',
    'LBL_PREVIOUS_DAY' => '前日',
    'LBL_PREVIOUS_YEAR' => '前年',
    'LBL_PREVIOUS_WEEK' => '前週',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => '翌日',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => '翌週',
    'LBL_AM' => '午前',
    'LBL_PM' => '午後',
    'LBL_SCHEDULED' => 'スケジュール済み',
    'LBL_BUSY' => '予定あり',
    'LBL_CONFLICT' => '他のスケジュールと重複',
    'LBL_USER_CALENDARS' => 'ユーザーのカレンダー',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => '共有カレンダー',
    'LBL_USERS' => 'ユーザー',
    'LBL_REFRESH' => '更新',
    'LBL_EDIT_USERLIST' => 'ユーザー一覧',
    'LBL_SELECT_USERS' => '表示するユーザーを選択',
    'LBL_FILTER_BY_TEAM' => 'チームでユーザーリストのフィルタリング：',
    'LBL_ASSIGNED_TO_NAME' => '担当ユーザー名',
    'LBL_DATE' => '開始日時',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => '時',
    'LBL_MINS_ABBREV' => '分',


    'LBL_YES' => 'はい',
    'LBL_NO' => 'No',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => '活動作成',
    'LBL_LOADING' => '読込中...',
    'LBL_SAVING' => '保存中...',
    'LBL_SENDING_INVITES' => '保存中 & 招待送信中...',
    'LBL_CONFIRM_REMOVE' => 'レコードを削除しても宜しいですか？',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => '全てのレコードを削除しても宜しいですか？',
    'LBL_EDIT_RECORD' => '活動を編集',
    'LBL_ERROR_SAVING' => '保存エラー',
    'LBL_ERROR_LOADING' => '読込エラー',
    'LBL_GOTO_DATE' => '日付へ',
    'NOTICE_DURATION_TIME' => '期間は0以上を設定してください。',
    'LBL_STYLE_BASIC' => '基本', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => '詳細', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => '一致するフィールドが見つかりません: 担当ユーザー',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => '時間を表示する:',
    'LBL_SETTINGS_TIME_STARTS' => '開始時間:',
    'LBL_SETTINGS_TIME_ENDS' => '終了時間:',
    'LBL_SETTINGS_CALLS_SHOW' => 'コール情報を表示:',
    'LBL_SETTINGS_TASKS_SHOW' => 'タスクを表示:',
    'LBL_SETTINGS_COMPLETED_SHOW' => '完了した情報を表示:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => '共有されたカレンダーを分離:',

    'LBL_SAVE_BUTTON' => '新しいグループフォルダを追加',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => '適用',
    'LBL_SEND_INVITES' => '保存 & 招待',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'リピート',

    'LBL_REPEAT_TYPE' => 'リピート',
    'LBL_REPEAT_INTERVAL' => '毎',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => '繰り返し',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => '～まで繰り返す',
    'LBL_REPEAT_COUNT' => '回数',
    'LBL_REPEAT_LIMIT_ERROR' => ' $limit を超える数のミーティングを作成できません',

    'LBL_EDIT_ALL_RECURRENCES' => '全て編集',
    'LBL_REMOVE_ALL_RECURRENCES' => '全て削除',

    'LBL_DATE_END_ERROR' => '終了日が開始日より前に設定されています。',
    'ERR_YEAR_BETWEEN' => '指定の年は閲覧できません。<br>1970～2037まで利用可能です。',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: このビューに対して定義されていません',
    'LBL_NO_ITEMS_MOBILE' => 'その週のカレンダーはクリアです。',
    'LBL_GENERAL_SETTINGS' => '全般設定',
    'LBL_COLOR_SETTINGS' => '色の設定',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => '境界',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sun",
            '1' => "Mon",
            '2' => "Tue",
            '3' => "Wed",
            '4' => "Thu",
            '5' => "Fri",
            '6' => "Sat",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sunday",
            '1' => "Monday",
            '2' => "Tuesday",
            '3' => "Wednesday",
            '4' => "Thursday",
            '5' => "Friday",
            '6' => "Saturday",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "5月",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "January",
            '2' => "February",
            '3' => "3月",
            '4' => "April",
            '5' => "5月",
            '6' => "6月",
            '7' => "7月",
            '8' => "August",
            '9' => "September",
            '10' => "October",
            '11' => "November",
            '12' => "December",
        ),
);
