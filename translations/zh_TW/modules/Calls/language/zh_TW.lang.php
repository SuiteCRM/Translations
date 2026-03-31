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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => '電話',
    'LBL_MODULE_TITLE' => '通話: 首頁',
    'LBL_SEARCH_FORM_TITLE' => '通話搜尋',
    'LBL_LIST_FORM_TITLE' => '通話清單',
    'LBL_NEW_FORM_TITLE' => '安排會議',
    'LBL_LIST_CLOSE' => '結束',
    'LBL_LIST_SUBJECT' => '主旨',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => '關聯到',
    'LBL_LIST_RELATED_TO_ID' => '關聯到ID',
    'LBL_LIST_DATE' => '開始日期:',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => '主旨:',
    'LBL_REMINDER' => '提醒:',
    'LBL_CONTACT_NAME' => '聯絡人:',
    'LBL_DESCRIPTION' => '說明:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => '方向:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => '活動時間:',
    'LBL_DURATION_HOURS' => '期間(小時):',
    'LBL_DURATION_MINUTES' => '持續時間:',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => '快速通話',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_CALL_LIST' => '電話',
    'LNK_IMPORT_CALLS' => '導入電話',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_INVITEE' => '被邀請人',
    'LBL_RELATED_TO' => '相關:',
    'LNK_NEW_APPOINTMENT' => '安排會議',
    'LBL_SCHEDULING_FORM_TITLE' => '日程安排',
    'LBL_ADD_INVITEE' => '增加受邀者',
    'LBL_NAME' => '名稱',
    'LBL_FIRST_NAME' => '名字',
    'LBL_LAST_NAME' => '姓氏',
    'LBL_EMAIL' => '撰寫郵件',
    'LBL_PHONE' => '電話',
    'LBL_REMINDER_POPUP' => '彈出',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => '電子郵件給所有受邀者',
    'LBL_EMAIL_REMINDER' => '電子郵件提醒',
    'LBL_EMAIL_REMINDER_TIME' => '電子郵件提醒時間',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => '結束日期',
    'LBL_REMINDER_TIME' => '提醒時間',
    'LBL_EMAIL_REMINDER_SENT' => '電子郵件提醒寄送',
    'LBL_SEARCH_BUTTON' => '搜尋',
    'LBL_ADD_BUTTON' => '填加',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '電話',
    'LNK_SELECT_ACCOUNT' => '選擇客戶',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => '新增商業機會',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '聯繫人',
    'LBL_USERS_SUBPANEL_TITLE' => '使用者',
    'LBL_OUTLOOK_ID' => 'Outlook編號',
    'LBL_MEMBER_OF' => '屬於',
    'LBL_HISTORY_SUBPANEL_TITLE' => '備註',
    'LBL_LIST_ASSIGNED_TO_NAME' => '負責人',
    'LBL_LIST_MY_CALLS' => '我的通話',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => '刪除',
    'LBL_ACCEPT_STATUS' => '接收狀態',
    'LBL_ACCEPT_LINK' => '接受鏈接',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => '創建被邀請人',
    'LBL_CREATE_CONTACT' => '作為聯絡人',
    'LBL_CREATE_LEAD' => '作為潛在客戶',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => '取消',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => '重覆',
    'LBL_REPEAT_INTERVAL' => '每',
    'LBL_REPEAT_DOW' => '重覆Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => '重覆次數',
    'LBL_REPEAT_PARENT_ID' => '重覆父記錄ID',
    'LBL_RECURRING_SOURCE' => '周期重覆源',

    'LBL_SYNCED_RECURRING_MSG' => '這個電話紀錄起源在另一個系統，被同步到SuiteCRM來。要進行更改，請前往原本的系統。在原系統中進行的修改會同步到這裡。',

    // for reminders
    'LBL_REMINDERS' => '提醒',
    'LBL_REMINDERS_ACTIONS' => '動作:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => '電子郵件通知受邀者',
    'LBL_REMINDERS_WHEN' => '當:',
    'LBL_REMINDERS_REMOVE_REMINDER' => '刪除提醒',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => '添加所有受邀者',
    'LBL_REMINDERS_ADD_REMINDER' => '添加提醒',

    'LBL_RESCHEDULE' => '再預約',
    'LBL_RESCHEDULE_COUNT' => '通聯嘗試',
    'LBL_RESCHEDULE_DATE' => '日期型',
    'LBL_RESCHEDULE_REASON' => '原因',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => '再預約',
    'LBL_RESCHEDULE_HISTORY' => '通聯記錄',
    'LBL_CANCEL' => '取消',
    'LBL_SAVE' => '儲存',

    'LBL_CALLS_RESCHEDULE' => '電話重新安排',
    'LBL_LIST_STATUS'=>'狀態',
    'LBL_LIST_DATE_MODIFIED'=>'修改日期',
    'LBL_LIST_DUE_DATE'=>'到期時間',
    'LBL_RESCHEDULED_BY'=>'by',
);
