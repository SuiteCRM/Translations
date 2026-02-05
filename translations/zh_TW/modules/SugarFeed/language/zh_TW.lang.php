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
    'LBL_SAVING' => '保存...',
    'LBL_SAVED' => '保存',
    'LBL_CREATED_USER' => '創建者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'LBL_LIST_FORM_TITLE' => 'Feed 清單',
    'LBL_MODULE_NAME' => '活動流',
    'LBL_MODULE_TITLE' => '活動流',
    'LBL_DASHLET_DISABLED' => '警告︰ Feed 系統處於禁用狀態，直到它被啟動之前，將不會有新的 Feed 內容會被張貼',
    'LBL_RECORDS_DELETED' => '所有以前的 Feed 內容已被刪除，如果 Feed 系統是啟用的，將自動產生新的內容。',
    'LBL_CONFIRM_DELETE_RECORDS' => '你確定你想要刪除所有Feed內容嗎？',
    'LBL_FLUSH_RECORDS' => '刪除所有條目',
    'LBL_ENABLE_FEED' => '啟用我的活動流 Dashlet',
    'LBL_ENABLE_MODULE_LIST' => '啟動 Feed 給',
    'LBL_HOMEPAGE_TITLE' => '我的活動流',
    'LNK_NEW_RECORD' => '創建 Feed',
    'LNK_LIST' => '訂閱',
    'LBL_SEARCH_FORM_TITLE' => '搜尋 Feed',
    'LBL_HISTORY_SUBPANEL_TITLE' => '查看歷史記錄',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_NEW_FORM_TITLE' => '新的 Feed',
    'LBL_ALL' => '全部',
    'LBL_USER_FEED' => '使用者 Feed',
    'LBL_ENABLE_USER_FEED' => '啟動使用者 Feed',
    'LBL_TO' => '發動給',
    'LBL_IS' => '是',
    'LBL_DONE' => '已完成',
    'LBL_TITLE' => '標題',
    'LBL_ROWS' => '列',
    'LBL_CATEGORIES' => '模組',
    'LBL_TIME_LAST_WEEK' => '上周',
    'LBL_TIME_WEEKS' => '週',
    'LBL_TIME_DAYS' => '天數',
    'LBL_TIME_YESTERDAY' => '昨天',
    'LBL_TIME_HOURS' => '時',
    'LBL_TIME_HOUR' => '時',
    'LBL_TIME_MINUTES' => '分',
    'LBL_TIME_MINUTE' => '分',
    'LBL_TIME_SECONDS' => '秒',
    'LBL_TIME_SECOND' => '秒',
    'LBL_TIME_AND' => '和',
    'LBL_TIME_AGO' => '之前',
// Activity stream
    'CREATED_CONTACT' => '創建一個<b>新的</b> {0}',
    'CREATED_OPPORTUNITY' => '創建一個<b>新的</b> {0}',
    'CREATED_CASE' => '創建一個<b>新的</b> {0}',
    'CREATED_LEAD' => '創建一個<b>新的</b> {0}',
    'FOR' => '為', // Activity stream for cases
    'FOR_AMOUNT' => '總計', // Activity stream for cases
    'CLOSED_CASE' => '<b>已關閉</b> {0} ',
    'CONVERTED_LEAD' => '<b>轉換</b>一個潛在客戶',
    'WON_OPPORTUNITY' => '已經<b>贏得一個</b>商業機會',
    'WITH' => '和',

    'LBL_LINK_TYPE_Link' => '鏈接',
    'LBL_LINK_TYPE_Image' => '圖片',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => '選擇',
    'LBL_POST' => '發送',
    'LBL_AUTHENTICATE' => '連接到',
    'LBL_AUTHENTICATION_PENDING' => '並非所有的你已選擇的外部帳戶皆通過身份驗證。按一下"取消"以返回到選項視窗來驗證外部帳戶，或按一下"確定"繼續而不進行身份驗證。',
    'LBL_ADVANCED_SEARCH' => '進階過濾' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => '顯示更多選項',
    'LBL_HIDE_OPTIONS' => '隱藏選項',
    'LBL_VIEW' => '查看',
    'LBL_POST_TITLE' => '發佈狀態更新用於 ',
    'LBL_URL_LINK_TITLE' => '要使用的 URL 連結',
);
