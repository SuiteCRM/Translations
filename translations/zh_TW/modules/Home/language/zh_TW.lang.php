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
    'LBL_MODULE_NAME' => '首頁',
    'LBL_NEW_FORM_TITLE' => '新聯絡人',
    'LBL_FIRST_NAME' => '名:',
    'LBL_LAST_NAME' => '姓:',
    'LBL_LIST_LAST_NAME' => '姓',
    'LBL_PHONE' => '電話:',
    'LBL_EMAIL_ADDRESS' => '電子郵件地址:',
    'LBL_MY_PIPELINE_FORM_TITLE' => '我的管道',
    'LBL_PIPELINE_FORM_TITLE' => '銷售數據(按階段)',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => '銷售數據(按階段)',
    'LNK_NEW_CONTACT' => '創建聯絡人',
    'LNK_NEW_ACCOUNT' => '新增客戶',
    'LNK_NEW_OPPORTUNITY' => '新增商業機會',
    'LNK_NEW_LEAD' => '新增潛在客戶',
    'LNK_NEW_CASE' => '創建案例',
    'LNK_NEW_NOTE' => '創建備忘或附件',
    'LNK_NEW_CALL' => '安排通話',
    'LNK_NEW_EMAIL' => '存檔電子郵件',
    'LNK_NEW_MEETING' => '安排會議',
    'LNK_NEW_TASK' => '創建任務',
    'LNK_NEW_BUG' => '彙報缺陷',
    'LNK_NEW_SEND_EMAIL' => '撰寫電子郵件',
    'LBL_NO_ACCESS' => '您沒有許可權，請聯繫管理員',
    'LBL_NO_RESULTS_IN_MODULE' => '--沒有結果--',
    'LBL_NO_RESULTS' => '<h2>未發現結果。請重新搜尋。</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>搜尋技巧:</h3><ul><li>確定您選擇了合適的分類。</li><li>放寬您的搜尋條件</li><li>如果您還是無法找到結果，請使用那個模組的進階搜尋。</li></ul>',

    'LBL_ADD_DASHLETS' => '增加新增欄',
    'LBL_WEBSITE_TITLE' => '網站',
    'LBL_RSS_TITLE' => '新聞Feed',
    'LBL_CLOSE_DASHLETS' => '結束',
    'LBL_OPTIONS' => '選項',
    // dashlet search fields
    'LBL_TODAY' => '今天',
    'LBL_YESTERDAY' => '昨天',
    'LBL_TOMORROW' => '明天',
    'LBL_NEXT_WEEK' => '下周',
    'LBL_LAST_7_DAYS' => '過去7天',
    'LBL_NEXT_7_DAYS' => '未來7天',
    'LBL_LAST_MONTH' => '上月',
    'LBL_NEXT_MONTH' => '下月',
    'LBL_LAST_YEAR' => '去年',
    'LBL_NEXT_YEAR' => '明年',
    'LBL_LAST_30_DAYS' => '過去30天',
    'LBL_NEXT_30_DAYS' => '未來30天',
    'LBL_THIS_MONTH' => '本月',
    'LBL_THIS_YEAR' => '今年',

    'LBL_MODULES' => '模組',
    'LBL_CHARTS' => '圖表',
    'LBL_TOOLS' => '工具',
    'LBL_WEB' => '網路',
    'LBL_SEARCH_RESULTS' => '搜尋結果',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => '模組檢視',
        'Portal' => '門戶網站',
        'Charts' => '圖表',
        'Tools' => '工具',
        'Miscellaneous' => '混合'
    ),
    'LBL_ADDING_DASHLET' => '新增 SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet 已成功添加',
    'LBL_REMOVE_DASHLET_CONFIRM' => '確定要刪除此 SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => '正在刪除 SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => '一般',
    'LBL_DASHLET_CONFIGURE_FILTERS' => '過濾',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '只顯示我的記錄',
    'LBL_DASHLET_CONFIGURE_TITLE' => '標題',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '顯示行數:',

    'LBL_DASHLET_DELETE' => '刪除 SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => '刷新 SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => '編輯 SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => '結束',

    'LBL_SEARCH' => '搜尋',
    'LBL_CLEAR' => '清除',

    'LBL_BASIC_CHARTS' => '基本檢視',

    'LBL_DASHLET_SEARCH' => '找尋 SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => '版本',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM 公司 - CE 架構供應商',

    'LBL_DASHLET_TITLE' => '我的網站',
    'LBL_DASHLET_OPT_TITLE' => '標題',
    'LBL_DASHLET_INCORRECT_URL' => '指定了不正確的網站位置',
    'LBL_DASHLET_OPT_URL' => '網站地址',
    'LBL_DASHLET_OPT_HEIGHT' => '小工具高度(像素)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM 新聞',
    'LBL_DASHLET_DISCOVER_SUITE' => '探索SuiteCRM',
    'LBL_BASIC_SEARCH' => '快速過濾' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => '進階過濾' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => '首頁圖示',
    'LBL_TOUR_HOME_DESCRIPTION' => '一次點擊就能快速的回到首頁儀表板。',
    'LBL_TOUR_MODULES' => '模組',
    'LBL_TOUR_MODULES_DESCRIPTION' => '所有您重要的模組都在此。',
    'LBL_TOUR_MORE' => '更多模組',
    'LBL_TOUR_MORE_DESCRIPTION' => '您其餘的模組都在此。',
    'LBL_TOUR_SEARCH' => '全文檢索搜尋',
    'LBL_TOUR_SEARCH_DESCRIPTION' => '搜尋變得更好了。',
    'LBL_TOUR_NOTIFICATIONS' => '通知',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM 代理程式通知會在此。',
    'LBL_TOUR_PROFILE' => '帳號',
    'LBL_TOUR_PROFILE_DESCRIPTION' => '訪問設定檔、 設置和登出。',
    'LBL_TOUR_QUICKCREATE' => '快速新增',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => '快速建立記錄而不須切換現有頁面。',
    'LBL_TOUR_FOOTER' => '可折疊的頁尾',
    'LBL_TOUR_FOOTER_DESCRIPTION' => '輕鬆地展開和折疊頁尾。',
    'LBL_TOUR_CUSTOM' => '自訂應用程式',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => '自訂集合包會在這裡。',
    'LBL_TOUR_BRAND' => '你的客製化形象',
    'LBL_TOUR_BRAND_DESCRIPTION' => '這裡是您的Logo。您可以將滑鼠移到上方取得更多資訊。',
    'LBL_TOUR_WELCOME' => '歡迎來到 SuiteCRM',
    'LBL_TOUR_WATCH' => '看看 SuiteCRM 中新增了什麼功能',
    'LBL_TOUR_FEATURES' => '<ul style=""> <li class="icon-ok"> 新的簡化導覽列</li> <li class="icon-ok"> 新的可折疊頁尾</li> <li class="icon-ok"> 改進的搜尋功能</li> <li class="icon-ok"> 更新操作功能表</li></ul><p>還有更多 ！</p>',
    'LBL_TOUR_VISIT' => '有關詳細資訊，請訪問我們的應用程式',
    'LBL_TOUR_DONE' => '已完成！',
    'LBL_TOUR_REFERENCE_1' => '你總是可以參考我們的',
    'LBL_TOUR_REFERENCE_2' => '通過設定檔頁籤底下的"技術支援論壇"連結。',
    'LNK_TOUR_DOCUMENTATION' => '文件',
    'LBL_TOUR_CALENDAR_URL_1' => '您有將您的SuiteCRM日曆與第三方應用程式共享嗎？例如Microsoft Outlook或Exchange？如果有，您會取得一個新的URL。這個新的並且較安全的URL含有個人金鑰，可阻止未經授權的日曆發布。',
    'LBL_TOUR_CALENDAR_URL_2' => '取得您新的日曆分享URL。',
    'LBL_CONTRIBUTORS' => '貢獻者',
    'LBL_ABOUT_SUITE' => '關於SuiteCRM',
    'LBL_PARTNERS' => '合作夥伴',
    'LBL_EDIT_ALL_RECURRENCES' => '編輯所有周期重覆紀錄',
    'LBL_REMOVE_ALL_RECURRENCES' => '刪除所有周期重覆紀錄',
    'LBL_CONFIRM_REMOVE' => '你確定要刪除紀錄嗎？',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - 獻給世界的開源 CRM',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'Jason Eggers提供的SecuritySuite',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'Jeffrey J. Walters提供的JJWDesign Google Maps',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => '工作流程計算規則由 diligent 科技及商業顧問有限公司提供',

    'LBL_LANGUAGE_ABOUT' => '關於 SuiteCRM 翻譯',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => '由SuiteCRM社群協作翻譯',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => '使用 Crowdin 創建的翻譯',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM發布為開源授權 AGPLv3',
    'LBL_ABOUT_SUITE_4' => '所有的 SuiteCRM 代碼管理和開發的專案將作為開放源碼-AGPLv3 發佈',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM的支援可以免費及付費方式。',

    'LBL_SUITE_PARTNERS' => '我們有一群忠於SuiteCRM且熱情的開源合作夥伴。我們的網站可閱讀完整合作夥伴列表。',

    'LBL_SAVE_BUTTON' => '儲存',
    'LBL_DELETE_BUTTON' => '刪除',
    'LBL_APPLY_BUTTON' => '應用',
    'LBL_SEND_INVITES' => '儲存並發送邀請函',
    'LBL_CANCEL_BUTTON' => '取消',
    'LBL_CLOSE_BUTTON' => '結束',

    'LBL_CREATE_NEW_RECORD' => '創建活動',
    'LBL_CREATE_CALL' => '安排通話',
    'LBL_CREATE_MEETING' => '安排會議',

    'LBL_GENERAL_TAB' => '詳細信息',
    'LBL_PARTICIPANTS_TAB' => '被邀請人',
    'LBL_REPEAT_TAB' => '周期重覆',

    'LBL_REPEAT_TYPE' => '重覆',
    'LBL_REPEAT_INTERVAL' => '每',
    'LBL_REPEAT_END' => '結束',
    'LBL_REPEAT_END_AFTER' => '以後',
    'LBL_REPEAT_OCCURRENCES' => '重覆次數',
    'LBL_REPEAT_END_BY' => '到',
    'LBL_REPEAT_DOW' => '在',
    'LBL_REPEAT_UNTIL' => '重覆直到',
    'LBL_REPEAT_COUNT' => '重覆次數',
    'LBL_REPEAT_LIMIT_ERROR' => '你的設置將創建 $limit 個會議。',

    //Events
    'LNK_EVENT' => '事件',
    'LNK_EVENT_VIEW' => '查看事件',
    'LBL_DATE' => '日期： ',
    'LBL_DURATION' => '活動時間: ',
    'LBL_NAME' => '標題: ',
    'LBL_HOUR_ABBREV' => '小時',
    'LBL_HOURS_ABBREV' => '小時',
    'LBL_MINSS_ABBREV' => '分鐘',
    'LBL_LOCATION' => '地點:',
    'LBL_STATUS' => '狀態:',
    'LBL_DESCRIPTION' => '描述: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => '執行搜尋時發生錯誤。 您的查詢可能無效。',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => '找不到需求的搜尋引擎. 嘗試再搜尋一次.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => '連接 Elasticsearch 伺服器失敗',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => '搜尋時內部發生錯誤.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => '搜尋時發生未知的錯誤.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => '聯絡系統管理員如果這個問題持續的發生. 更多的資訊細節紀錄可以在日誌查詢.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => '沒有符合您搜尋條件的結果。 建議擴大搜尋範圍。',

    'LNK_TASK_VIEW' => '查看任務',
);
