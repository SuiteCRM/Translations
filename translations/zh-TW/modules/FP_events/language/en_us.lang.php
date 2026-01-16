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
    'LBL_ASSIGNED_TO_ID' => '負責人Id',
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_ID' => '編號',
    'LBL_DATE_ENTERED' => '建立日期',
    'LBL_DATE_MODIFIED' => '修改日期',
    'LBL_MODIFIED' => '修改人',
    'LBL_MODIFIED_NAME' => '修改人姓名',
    'LBL_CREATED' => '建立人',
    'LBL_DESCRIPTION' => '描述',
    'LBL_DELETED' => '已刪除',
    'LBL_NAME' => '名稱',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'LBL_LIST_NAME' => '名稱',
    'LBL_EDIT_BUTTON' => '編輯',
    'LBL_REMOVE' => '刪除',
    'LBL_LIST_FORM_TITLE' => '事件清單',
    'LBL_MODULE_NAME' => '事件',
    'LBL_MODULE_TITLE' => '事件',
    'LBL_HOMEPAGE_TITLE' => '我的事件',
    'LNK_NEW_RECORD' => '創建事件',
    'LNK_LIST' => '查看事件',
    'LBL_SEARCH_FORM_TITLE' => '搜尋事件',
    'LBL_HISTORY_SUBPANEL_TITLE' => '查看歷史記錄',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_NEW_FORM_TITLE' => '新建事件',
    'LBL_LOCATION' => '地點',
    'LBL_START_DATE' => '開始日期',
    'LBL_END_DATE' => '結束日期',
    'LBL_BUDGET' => '預算',
    'LBL_DATE' => '開始日期',
    'LBL_DATE_END' => '結束日期',
    'LBL_DURATION' => '持續時間',
    'LBL_INVITE_TEMPLATES' => '電子郵件邀請範本',
    'LBL_INVITE_PDF' => '發送邀請',
    'LBL_EDITVIEW_PANEL1' => '事件詳細資訊',
    'LBL_DEFAULT_SUBPANEL_TITLE' => '與會代表',
    'LBL_ACCEPT_REDIRECT' => '接受重定向 URL',
    'LBL_DECLINE_REDIRECT' => '拒絕重定向 URL',
    'LBL_SELECT_DELEGATES' => '選擇與會代表',
    'LBL_SELECT_DELEGATES_TITLE' => '選擇與會代表:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => '目標列表',
    'LBL_SELECT_DELEGATES_TARGETS' => '目標',
    'LBL_SELECT_DELEGATES_CONTACTS' => '連絡人',
    'LBL_SELECT_DELEGATES_LEADS' => '潛在客戶',
    'LBL_MANAGE_DELEGATES' => '管理與會代表',
    'LBL_MANAGE_DELEGATES_TITLE' => '管理與會代表:-',
    'LBL_MANAGE_ACCEPTANCES' => '管理接受狀態',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => '管理接受狀態:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => '已接受',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => '已拒絕',
    'LBL_MANAGE_POPUP_ERROR' => '沒有與會代表被選定。',
    'LBL_MANAGE_DELEGATES_INVITED' => '受邀請',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => '未受邀請',
    'LBL_MANAGE_DELEGATES_ATTENDED' => '已參加',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => '未參加',
    'LBL_SUCCESS_MSG' => '所有邀請都已被成功發送。',
    'LBL_ERROR_MSG_1' => '所有已經連結的連絡人都已經被邀請。',
    'LBL_ERROR_MSG_2' => '發送邀請電子郵件失敗 ！請檢查您的電子郵件設定。',
    'LBL_ERROR_MSG_3' => '超過 10 封郵件無法發送。請檢查您邀請的所有連絡人是否都有有效的電子郵件地址。(請查閱 suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' 封郵件無法發送。請檢查您邀請的所有連絡人是否都有有效的電子郵件地址。(請查閱 suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => '不正確的電子郵件範本',
    'LBL_EMAIL_INVITE' => '電子郵件邀請',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => '連絡人',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => '地點',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => '潛在客戶',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => '目標',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => '與會代表',

    // Attendance report
    'LBL_CONTACT_NAME' => '名稱',
    'LBL_ACCOUNT_NAME' => '公司',
    'LBL_SIGNATURE' => '簽名',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => '受邀請',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => '狀態',

    'LBL_ACTIVITY_STATUS' => '活動狀態',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => '事件地點來自事件標題',
    // Email links
    'LBL_ACCEPT_LINK' => '接受',
    'LBL_DECLINE_LINK' => '拒絕',
    
);
