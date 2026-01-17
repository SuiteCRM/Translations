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
    'LBL_MODULE_NAME' => '通話',
    'LBL_MODULE_TITLE' => '通話: 首頁',
    'LBL_SEARCH_FORM_TITLE' => '通話搜尋',
    'LBL_LIST_FORM_TITLE' => '通話清單',
    'LBL_NEW_FORM_TITLE' => '安排會議',
    'LBL_LIST_CLOSE' => '結束',
    'LBL_LIST_SUBJECT' => '主旨',
    'LBL_LIST_CONTACT' => '聯絡人',
    'LBL_LIST_RELATED_TO' => '關聯到',
    'LBL_LIST_RELATED_TO_ID' => '關聯到ID',
    'LBL_LIST_DATE' => '開始日期',
    'LBL_LIST_DIRECTION' => '方向',
    'LBL_SUBJECT' => '主旨:',
    'LBL_REMINDER' => '提醒:',
    'LBL_CONTACT_NAME' => '聯絡人:',
    'LBL_DESCRIPTION' => '描述:',
    'LBL_STATUS' => '狀態:',
    'LBL_DIRECTION' => '方向:',
    'LBL_DATE' => '開始日期:',
    'LBL_DURATION' => '期間:',
    'LBL_DURATION_HOURS' => '期間(小時):',
    'LBL_DURATION_MINUTES' => '持續時間:',
    'LBL_HOURS_MINUTES' => '(時/分)',
    'LBL_DATE_TIME' => '開始日期和時間:',
    'LBL_TIME' => '開始時間:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => '安排通話',
    'LNK_NEW_MEETING' => '安排會議',
    'LNK_CALL_LIST' => '查看通話',
    'LNK_IMPORT_CALLS' => '導入通話',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_INVITEE' => '被邀請人',
    'LBL_RELATED_TO' => '相關:',
    'LNK_NEW_APPOINTMENT' => '安排會議',
    'LBL_SCHEDULING_FORM_TITLE' => '日程安排',
    'LBL_ADD_INVITEE' => '增加受邀者',
    'LBL_NAME' => '名稱',
    'LBL_FIRST_NAME' => '名',
    'LBL_LAST_NAME' => '姓',
    'LBL_EMAIL' => '電子郵件',
    'LBL_PHONE' => '電話',
    'LBL_REMINDER_POPUP' => '彈出',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => '電子郵件給所有受邀者',
    'LBL_EMAIL_REMINDER' => '電子郵件提醒',
    'LBL_EMAIL_REMINDER_TIME' => '電子郵件提醒時間',
    'LBL_SEND_BUTTON_TITLE' => '儲存並發送邀請函',
    'LBL_SEND_BUTTON_LABEL' => '儲存並發送邀請函',
    'LBL_DATE_END' => '結束日期',
    'LBL_REMINDER_TIME' => '提醒時間',
    'LBL_EMAIL_REMINDER_SENT' => '電子郵件提醒寄送',
    'LBL_SEARCH_BUTTON' => '搜尋',
    'LBL_ADD_BUTTON' => '新增',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '通話',
    'LNK_SELECT_ACCOUNT' => '選擇帳戶',
    'LNK_NEW_ACCOUNT' => '新增客戶',
    'LNK_NEW_OPPORTUNITY' => '新增商業機會',
    'LBL_LEADS_SUBPANEL_TITLE' => '潛在客戶',
    'LBL_CONTACTS_SUBPANEL_TITLE' => '連絡人',
    'LBL_USERS_SUBPANEL_TITLE' => '使用者',
    'LBL_OUTLOOK_ID' => 'Outlook編號',
    'LBL_MEMBER_OF' => '附屬於',
    'LBL_HISTORY_SUBPANEL_TITLE' => '備註',
    'LBL_LIST_ASSIGNED_TO_NAME' => '負責人',
    'LBL_LIST_MY_CALLS' => '我的通話',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ASSIGNED_TO_ID' => '負責的使用者',
    'NOTICE_DURATION_TIME' => '持續時間必須大於0',
    'LBL_CALL_INFORMATION' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => '刪除',
    'LBL_ACCEPT_STATUS' => '接收狀態',
    'LBL_ACCEPT_LINK' => '接受鏈接',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => '創建被邀請人',
    'LBL_CREATE_CONTACT' => '作為聯絡人',
    'LBL_CREATE_LEAD' => '作為潛在客戶',
    'LBL_CREATE_AND_ADD' => '創建並添加',
    'LBL_CANCEL_CREATE_INVITEE' => '取消',
    'LBL_EMPTY_SEARCH_RESULT' => '對不起，沒找到記錄。請創建一個被邀請人。',
    'LBL_NO_ACCESS' => '您沒有許可權創建模組 $module',

    'LBL_REPEAT_TYPE' => '重覆',
    'LBL_REPEAT_INTERVAL' => '每',
    'LBL_REPEAT_DOW' => '重覆Dow',
    'LBL_REPEAT_UNTIL' => '重覆直到',
    'LBL_REPEAT_COUNT' => '重覆次數',
    'LBL_REPEAT_PARENT_ID' => '重覆父記錄ID',
    'LBL_RECURRING_SOURCE' => '周期重覆源',

    'LBL_SYNCED_RECURRING_MSG' => '這個電話紀錄起源在另一個系統，被同步到SuiteCRM來。要進行更改，請前往原本的系統。在原系統中進行的修改會同步到這裡。',

    // for reminders
    'LBL_REMINDERS' => '提醒',
    'LBL_REMINDERS_ACTIONS' => '動作:',
    'LBL_REMINDERS_POPUP' => '彈出',
    'LBL_REMINDERS_EMAIL' => '電子郵件通知受邀者',
    'LBL_REMINDERS_WHEN' => '當:',
    'LBL_REMINDERS_REMOVE_REMINDER' => '刪除提醒',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => '添加所有受邀者',
    'LBL_REMINDERS_ADD_REMINDER' => '添加提醒',

    'LBL_RESCHEDULE' => '再預約',
    'LBL_RESCHEDULE_COUNT' => '通聯嘗試',
    'LBL_RESCHEDULE_DATE' => '日期型',
    'LBL_RESCHEDULE_REASON' => '原因',
    'LBL_RESCHEDULE_ERROR1' => '請選擇有效日期',
    'LBL_RESCHEDULE_ERROR2' => '請選擇原因',
    'LBL_RESCHEDULE_PANEL' => '再預約',
    'LBL_RESCHEDULE_HISTORY' => '通聯記錄',
    'LBL_CANCEL' => '取消',
    'LBL_SAVE' => '儲存',

    'LBL_CALLS_RESCHEDULE' => '通話重新安排',
    'LBL_LIST_STATUS'=>'狀態',
    'LBL_LIST_DATE_MODIFIED'=>'修改日期',
    'LBL_LIST_DUE_DATE'=>'到期時間',
    'LBL_RESCHEDULED_BY'=>'被',
);
