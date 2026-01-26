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
    'LBL_MODULE_NAME' => '銷售活動',
    'LBL_MODULE_TITLE' => '銷售活動: 首頁',
    'LBL_SEARCH_FORM_TITLE' => '活動搜尋',
    'LBL_LIST_FORM_TITLE' => '活動列表',
    'LBL_LIST_SUBJECT' => '主旨',
    'LBL_OVERVIEW' => '總覽', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => '任務', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => '會議', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => '通話', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => '電子郵件', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => '備忘', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => '列印', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => '會議',
    'LBL_CALL_TYPE' => '通話',
    'LBL_EMAIL_TYPE' => '電子郵件',
    'LBL_NOTE_TYPE' => '備註',
    'LBL_DATA_TYPE_START' => '開始:',
    'LBL_DATA_TYPE_SENT' => '已發送:',
    'LBL_DATA_TYPE_MODIFIED' => '已修改:',
    'LBL_LIST_CONTACT' => '聯絡人',
    'LBL_LIST_RELATED_TO' => '關聯到',
    'LBL_LIST_DATE' => '日期型',
    'LBL_LIST_CLOSE' => '結束',
    'LBL_SUBJECT' => '主旨:',
    'LBL_STATUS' => '狀態:',
    'LBL_LOCATION' => '地點:',
    'LBL_DATE_TIME' => '開始日期和時間:',
    'LBL_DATE' => '開始日期:',
    'LBL_TIME' => '開始時間:',
    'LBL_DURATION' => '期間:',
    'LBL_HOURS_MINS' => '(時/分)',
    'LBL_CONTACT_NAME' => '聯絡人姓名: ',
    'LBL_DESCRIPTION' => '描述:',
    'LNK_NEW_CALL' => '安排通話',
    'LNK_NEW_MEETING' => '安排會議',
    'LNK_NEW_TASK' => '創建任務',
    'LNK_NEW_NOTE' => '新增備忘錄',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => '查看通話',
    'LNK_MEETING_LIST' => '查看會議',
    'LNK_TASK_LIST' => '查看任務',
    'LNK_NOTE_LIST' => '查看備忘',
    'LBL_DELETE_ACTIVITY' => '確定刪除此活動嗎?',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'LBL_INVITEE' => '被邀請人',
    'LBL_LIST_DIRECTION' => '方向',
    'LBL_DIRECTION' => '方向',
    'LNK_NEW_APPOINTMENT' => '新會議',
    'LNK_VIEW_CALENDAR' => '今天',
    'LBL_OPEN_ACTIVITIES' => '在做的活動',
    'LBL_HISTORY' => '歷史',
    'LBL_NEW_TASK_BUTTON_TITLE' => '創建任務',
    'LBL_NEW_TASK_BUTTON_LABEL' => '創建任務',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => '安排會議',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => '安排會議',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => '安排通話',
    'LBL_NEW_NOTE_BUTTON_TITLE' => '創建備忘或附件',
    'LBL_NEW_NOTE_BUTTON_LABEL' => '創建備忘或附件',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => '存檔電子郵件',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => '存檔電子郵件',
    'LBL_LIST_STATUS' => '狀態',
    'LBL_LIST_DUE_DATE' => '到期時間',
    'LBL_LIST_LAST_MODIFIED' => '最新修改',
    'LNK_IMPORT_CALLS' => '導入通話',
    'LNK_IMPORT_MEETINGS' => '導入會議',
    'LNK_IMPORT_TASKS' => '導入任務',
    'LNK_IMPORT_NOTES' => '導入備忘錄',
    'LBL_ACCEPT_THIS' => '接受?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '在做的活動',
    'LBL_LIST_ASSIGNED_TO_NAME' => '負責的使用者',

    'LBL_ACCEPT' => '接受' /*for 508 compliance fix*/,
);
