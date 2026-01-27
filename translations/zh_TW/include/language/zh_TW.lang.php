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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => '中文(繁體) Chinese (Traditional) -zh_TW',
    'moduleList' => array(
        'Home' => '首頁',
        'ResourceCalendar' => '資源日曆',
        'Contacts' => '連絡人',
        'Accounts' => '客戶',
        'Alerts' => '警告',
        'Opportunities' => '商業機會',
        'Cases' => '案例',
        'Notes' => '備註',
        'Calls' => '通話',
        'TemplateSectionLine' => '範本區段線',
        'Calls_Reschedule' => '通話重新安排',
        'Emails' => '電子郵件',
        'EAPM' => '外部API模組 EAPM',
        'Meetings' => '會議',
        'Tasks' => '任務',
        'Calendar' => '日曆',
        'Leads' => '潛在客戶',
        'Currencies' => '貨幣',
        'Activities' => '銷售活動',
        'Bugs' => '程式錯誤',
        'Feeds' => 'RSS',
        'iFrames' => '我的網站',
        'TimePeriods' => '時段',
        'ContractTypes' => '合約類型',
        'Schedulers' => '排程程序',
        'Project' => '專案',
        'ProjectTask' => '專案工作',
        'Campaigns' => '市場活動',
        'CampaignLog' => '市場活動日誌',
        'Documents' => '文件',
        'DocumentRevisions' => '文件修訂版本',
        'Connectors' => '連接器',
        'Roles' => '角色',
        'Notifications' => '通知',
        'Sync' => '同步',
        'Users' => '使用者',
        'Employees' => '員工',
        'Administration' => '系統管理',
        'ACLRoles' => '角色',
        'InboundEmail' => '收件箱',
        'Releases' => '版本',
        'Prospects' => '目標',
        'Queues' => '隊列',
        'EmailMarketing' => '電子郵件營銷',
        'EmailTemplates' => '電子郵件範本',
        'ProspectLists' => '目標 - 列表',
        'SavedSearch' => '已保存的查詢結果',
        'UpgradeWizard' => '升級精靈',
        'Trackers' => '訪問記錄',
        'TrackerSessions' => '記錄用登入資訊',
        'TrackerQueries' => '查詢追蹤',
        'FAQ' => '常見問題',
        'Newsletters' => '列表',
        'SugarFeed' => 'SuiteCRM 訂閱源',
        'SugarFavorites' => 'SuiteCRM 最愛書籤',

        'OAuthKeys' => 'OAuth 消費者密鑰',
        'OAuthTokens' => 'OAuth 權杖',
        'OAuth2Clients' => 'OAuth 客戶端',
        'OAuth2Tokens' => 'OAuth 權杖',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => '首頁',
        'Dashboard' => '儀表板',
        'Contacts' => '聯絡人',
        'Accounts' => '客戶',
        'Opportunities' => '商業機會',
        'Cases' => '案例',
        'Notes' => '備註',
        'Calls' => '通話',
        'Emails' => '電子郵件',
        'EmailTemplates' => '電子郵件範本',
        'Meetings' => '會議',
        'Tasks' => '任務',
        'Calendar' => '日曆',
        'Leads' => '潛在客戶',
        'Activities' => '活動',
        'Bugs' => '缺陷追蹤',
        'KBDocuments' => '知識庫',
        'Feeds' => 'RSS',
        'iFrames' => '我的網站',
        'TimePeriods' => '時段',
        'Project' => '專案',
        'ProjectTask' => '專案工作',
        'Prospects' => '目標',
        'Campaigns' => '市場活動',
        'Documents' => '文件',
        'Sync' => '同步',
        'Users' => '使用者',
        'SugarFavorites' => 'SuiteCRM 最愛書籤',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Yes',
        '2' => '不',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => '分析者',
        'Competitor' => '競爭者',
        'Customer' => '客戶',
        'Integrator' => '整合者',
        'Investor' => '投資者',
        'Partner' => '合作者',
        'Press' => '出版商',
        'Prospect' => '銷售前景',
        'Reseller' => '批發商',
        'Other' => '其它',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => '服裝',
        'Banking' => '銀行',
        'Biotechnology' => '生物技術',
        'Chemicals' => '化學化工',
        'Communications' => '通訊',
        'Construction' => '建築',
        'Consulting' => '顧問諮詢',
        'Education' => '教育',
        'Electronics' => '電子',
        'Energy' => '能源',
        'Engineering' => '工程',
        'Entertainment' => '文化娛樂',
        'Environmental' => '環境',
        'Finance' => '金融',
        'Government' => '政府機構',
        'Healthcare' => '衛生保健',
        'Hospitality' => '醫療機構',
        'Insurance' => '保險',
        'Machinery' => '機械',
        'Manufacturing' => '製造業',
        'Media' => '媒體',
        'Not For Profit' => '非盈利機構',
        'Recreation' => '休閒娛樂',
        'Retail' => '零售',
        'Shipping' => '物流',
        'Technology' => '技術',
        'Telecommunications' => '電信',
        'Transportation' => '運輸',
        'Utilities' => '公用事業',
        'Other' => '其它',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => '意外來電',
        'Existing Customer' => '現有客戶',
        'Self Generated' => 'Self Generated',
        'Employee' => '員工',
        'Partner' => '合作者',
        'Public Relations' => '公共關係',
        'Direct Mail' => '直郵',
        'Conference' => '會議',
        'Trade Show' => '展覽',
        'Web Site' => '網站',
        'Word of mouth' => '他人介紹',
        'Email' => '電子郵件',
        'Campaign' => '市場活動',
        'Other' => '其它',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => '已有生意',
        'New Business' => '新生意',
    ),
    'roi_type_dom' => array(
        'Revenue' => '收益',
        'Investment' => '投資',
        'Expected_Revenue' => '期望收益',
        'Budget' => '預算',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => '商業決策者',
        'Business Evaluator' => '商業評估者',
        'Technical Decision Maker' => '技術決策者',
        'Technical Evaluator' => '技術評估人',
        'Executive Sponsor' => '主管助理',
        'Influencer' => '影響者',
        'Other' => '其它',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => '其他聯絡人',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '貨到15天付款',
        'Net 30' => '貨到30天付款',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => '資格合格',
        'Needs Analysis' => '需要分析',
        'Value Proposition' => '價值陳述',
        'Id. Decision Makers' => 'ID 決策標記',
        'Perception Analysis' => '感覺分析',
        'Proposal/Price Quote' => '建議/出價',
        'Negotiation/Review' => '談判/回顧',
        'Closed Won' => '結束(談成)',
        'Closed Lost' => '結束(丟單)',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => '通話',
        'Meeting' => '會議',
        'Task' => '任務',
        'Email' => '電子郵件',
        'Note' => '備註',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => '先生',
        'Ms.' => '小姐',
        'Mrs.' => '女士',
        'Miss' => '小姐',
        'Dr.' => '博士',
        'Prof.' => '教授',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 分鐘前',
        300 => '5 分鐘前',
        600 => '10 分鐘前',
        900 => '15 分鐘前',
        1800 => '30 分鐘前',
        3600 => '1 小時前',
        7200 => '2 小時前',
        10800 => '3 小時前',
        18000 => '5 小時前',
        86400 => '1 天前',
    ),

    'task_priority_default' => '中',
    'task_priority_dom' => array(
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'task_status_default' => '未開始',
    'task_status_dom' => array(
        'Not Started' => '未開始',
        'In Progress' => '處理中',
        'Completed' => '完成',
        'Pending Input' => '等待輸入',
        'Deferred' => '延期',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => '完成',
        'Not Held' => '未開始',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => '其它',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => '完成',
        'Not Held' => '未開始',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => '打入',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => '新建',
        'Assigned' => '已分配',
        'In Process' => '處理中',
        'Converted' => '已轉換',
        'Recycled' => '已重覆',
        'Dead' => '終止',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => '高',
        'P2' => '中',
        'P3' => '低',
    ),
    'user_type_dom' => array(
        'RegularUser' => '普通使用者',
        'Administrator' => '管理員',
    ),
    'user_status_dom' => array(
        'Active' => '啟用',
        'Inactive' => '停用',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => '電子郵件驗證碼',
    ),
    'employee_status_dom' => array(
        'Active' => '啟用',
        'Terminated' => '終止',
        'Leave of Absence' => '離職',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'project_task_priority_default' => '中',

    'project_task_status_options' => array(
        'Not Started' => '未開始',
        'In Progress' => '處理中',
        'Completed' => '完成',
        'Pending Input' => '等待輸入',
        'Deferred' => '延期',
    ),
    'project_task_utilization_options' => array(
        '0' => '無',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => '草稿',
        'In Review' => '審查中',
        'Underway' => '進行中',
        'On_Hold' => '等待',
        'Completed' => '完成',
    ),
    'project_status_default' => '草稿',

    'project_duration_units_dom' => array(
        'Days' => '天',
        'Hours' => '時',
    ),

    'activity_status_type_dom' => array(
        '' => '--無--',
        'active' => '啟用',
        'inactive' => '停用',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => '客戶',
    'record_type_display' => array(
        '' => '',
        'Accounts' => '客戶',
        'Opportunities' => '商業機會',
        'Cases' => '案例',
        'Leads' => '潛在客戶',
        'Contacts' => '聯絡人', // cn (11/22/2005) added to support Emails

        'Bugs' => '缺陷追蹤',
        'Project' => '專案',

        'Prospects' => '目標',
        'ProjectTask' => '專案工作',

        'Tasks' => '任務',

        'AOS_Contracts' => '合約',
        'AOS_Invoices' => '發票',
        'AOS_Quotes' => '報價單',
        'AOS_Products' => '產品',

    ),

    'record_type_display_notes' => array(
        'Accounts' => '客戶',
        'Contacts' => '聯絡人',
        'Opportunities' => '商業機會',
        'Campaigns' => '市場活動',
        'Tasks' => '任務',
        'Emails' => '電子郵件',

        'Bugs' => '缺陷追蹤',
        'Project' => '專案',
        'ProjectTask' => '專案工作',
        'Prospects' => '目標',
        'Cases' => '案例',
        'Leads' => '潛在客戶',

        'Meetings' => '會議',
        'Calls' => '通話',

        'AOS_Contracts' => '合約',
        'AOS_Invoices' => '發票',
        'AOS_Quotes' => '報價單',
        'AOS_Products' => '產品',
    ),

    'parent_type_display' => array(
        'Accounts' => '客戶',
        'Contacts' => '聯絡人',
        'Tasks' => '任務',
        'Opportunities' => '商業機會',

        'Bugs' => '缺陷追蹤',
        'Cases' => '案例',
        'Leads' => '潛在客戶',

        'Project' => '專案',
        'ProjectTask' => '專案工作',

        'Prospects' => '目標',

        'AOS_Contracts' => '合約',
        'AOS_Invoices' => '發票',
        'AOS_Quotes' => '報價單',
        'AOS_Products' => '產品',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => '報價單',
        'AOS_Invoices' => '發票',
        'AOS_Contracts' => '合約',
    ),
    'issue_priority_default_key' => '中',
    'issue_priority_dom' => array(
        'Urgent' => '緊急',
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => '已接受',
        'Duplicate' => '複製',
        'Closed' => '關閉',
        'Out of Date' => '過期',
        'Invalid' => '無效',
    ),

    'issue_status_default_key' => '新建',
    'issue_status_dom' => array(
        'New' => '新建',
        'Assigned' => '已分配',
        'Closed' => '關閉',
        'Pending' => '未決定',
        'Rejected' => '拒絕',
    ),

    'bug_priority_default_key' => '中',
    'bug_priority_dom' => array(
        'Urgent' => '緊急',
        'High' => '高',
        'Medium' => '中',
        'Low' => '低',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => '已接受',
        'Duplicate' => '複製',
        'Fixed' => '固定價格',
        'Out of Date' => '過期',
        'Invalid' => '無效',
        'Later' => '以後',
    ),
    'bug_status_default_key' => '新建',
    'bug_status_dom' => array(
        'New' => '新建',
        'Assigned' => '已分配',
        'Closed' => '關閉',
        'Pending' => '未決定',
        'Rejected' => '拒絕',
    ),
    'bug_type_default_key' => '缺陷追蹤',
    'bug_type_dom' => array(
        'Defect' => '缺陷',
        'Feature' => '特性',
    ),
    'case_type_dom' => array(
        'Administration' => '系統管理',
        'Product' => '產品',
        'User' => '使用者',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => '內部',
        'Forum' => '論壇',
        'Web' => '網路',
        'InboundEmail' => '電子郵件',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => '客戶',
        'Activities' => '銷售活動',
        'Bugs' => '程式錯誤',
        'Calendar' => '日曆',
        'Calls' => '通話',
        'Campaigns' => '市場活動',
        'Cases' => '案例',
        'Contacts' => '連絡人',
        'Currencies' => '貨幣',
        'Dashboard' => '儀表板',
        'Documents' => '文件',
        'Emails' => '電子郵件',
        'Feeds' => '訂閱源',
        'Forecasts' => '銷售預測',
        'Help' => '幫助',
        'Home' => '首頁',
        'Leads' => '潛在客戶',
        'Meetings' => '會議',
        'Notes' => '備註',
        'Opportunities' => '商業機會',
        'Outlook Plugin' => 'Outlook插件',
        'Projects' => '專案',
        'Quotes' => '報價單',
        'Releases' => '版本',
        'RSS' => 'RSS',
        'Studio' => '工作室',
        'Upgrade' => '更新',
        'Users' => '使用者',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => '計劃中',
        'Active' => '啟用',
        'Inactive' => '停用',
        'Complete' => '完成',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => '電話行銷',
        'Mail' => '郵件',
        'Email' => '電子郵件',
        'Print' => '列印',
        'Web' => '網路',
        'Radio' => '單選框',
        'Television' => '電視',
        'NewsLetter' => '簡訊',
        'Survey' => '調查問卷',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => '周',
        'Monthly' => '月',
        'Quarterly' => '每季度',
        'Annually' => '每年',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => '一月',
        '2' => '二月',
        '3' => '三月',
        '4' => '4 月',
        '5' => '5 月',
        '6' => '六月',
        '7' => '七月',
        '8' => '八月',
        '9' => '九月',
        '10' => '十月',
        '11' => '十一月',
        '12' => '十二月',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => '1 月',
        '2' => '2 月',
        '3' => '3月',
        '4' => '4 月',
        '5' => '5 月',
        '6' => '6 月',
        '7' => '7 月',
        '8' => '8 月',
        '9' => '9 月',
        '10' => '10月',
        '11' => '11月',
        '12' => '12月',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => '星期日',
        '2' => '星期一',
        '3' => '星期二',
        '4' => '星期三',
        '5' => '星期四',
        '6' => '星期五',
        '7' => '星期六',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => '周日',
        '2' => '週一',
        '3' => '週二',
        '4' => '週三',
        '5' => '週四',
        '6' => '週五',
        '7' => '週六',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => '上午',
        'pm' => '下午',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => '上午',
        'PM' => '下午',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => '個人帳號',
        'group' => '群組',
        'bounce' => '退回郵件',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => '基本權限',
        'oauth' => 'OAuth 權限',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => '基本權限',
        'oauth' => 'OAuth 權限',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => '個人帳號',
        'group' => '群組',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => '個人帳號',
        'group' => '群組',
    ],

    'dom_outbound_email_account_types' => [
        'user' => '個人帳號',
        'group' => '群組',
        'system' => '系統',
        'system-override' => '系統覆蓋',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => '啟用',
        'Inactive' => '停用',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => '已發送',
        'archived' => '已存檔',
        'draft' => '草稿',
        'inbound' => '打入',
        'campaign' => '市場活動',
    ),
    'dom_email_status' => array(
        'archived' => '已存檔',
        'closed' => '關閉',
        'draft' => '草稿',
        'read' => '已閱讀',
        'replied' => '已回覆',
        'sent' => '已發送',
        'send_error' => '發送錯誤',
        'unread' => '未閱讀',
    ),
    'dom_email_archived_status' => array(
        'archived' => '已存檔',
    ),

    'dom_email_server_type' => array(
        '' => '--無--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--無--',
        'createcase' => '創建案例',
        'bounce' => '處理退信',
    ),
    'dom_email_distribution' => array(
        '' => '--無--',
        'direct' => '直接指派',
        'roundRobin' => '循環',
        'leastBusy' => '最不忙碌',
    ),
    'dom_email_errors' => array(
        1 => '在直接分配項時僅可選擇一個使用者。',
        2 => '你只可從已選的項目中，直接分配項目。',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Yes',
        'bool_false' => '不',
    ),
    'dom_int_bool' => array(
        1 => 'Yes',
        0 => '不',
    ),
    'dom_switch_bool' => array(
        'on' => 'Yes',
        'off' => '不',
        '' => '不',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM 電子郵件用戶端',
        'mailto' => '外部郵件客戶端',
    ),

    'dom_editor_type' => array(
        'none' => '直接 HTML',
        'tinymce' => 'Tiny MCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => '預設電子郵件格式',
        'html' => 'HTML電子郵件',
        'plain' => '純文本電子郵件',
    ),

    'schedulers_times_dom' => array(
        'not run' => '超時, 沒有被執行',
        'ready' => '就緒',
        'in progress' => '處理中',
        'failed' => '失敗',
        'completed' => '完成',
        'no curl' => '未運行:沒有可利用的cURL',
    ),

    'scheduler_status_dom' => array(
        'Active' => '啟用',
        'Inactive' => '停用',
    ),

    'scheduler_period_dom' => array(
        'min' => '分',
        'hour' => '時',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => '市場行銷',
        'Knowledege Base' => '知識庫',
        'Sales' => '銷售',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => '已存檔',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => '市場營銷',
        'Product Brochures' => '產品手冊',
        'FAQ' => '常見問題',
    ),

    'document_status_dom' => array(
        'Active' => '啟用',
        'Draft' => '草稿',
        'FAQ' => '常見問題',
        'Expired' => '有效期',
        'Under Review' => '審查中',
        'Pending' => '未決定',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => '郵件合併',
        'eula' => '使用者授權合約 EULA',
        'nda' => '保密協議',
        'license' => '許可證協議',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => '接受',
        'decline' => '拒絕',
        'tentative' => '擱置',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => '已接受',
        'decline' => '已拒絕',
        'tentative' => '擱置',
        'none' => '無',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => '無',
        'Daily' => '日',
        'Weekly' => '周',
        'Monthly' => '月',
        'Yearly' => '年',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => '天',
        'Weekly' => '週',
        'Monthly' => '月',
        'Yearly' => '年',
    ),

    'duration_dom' => array(
        '' => '無',
        '900' => '15分鐘',
        '1800' => '30分鐘',
        '2700' => '45分鐘',
        '3600' => '1小時',
        '5400' => '1.5小時',
        '7200' => '2小時',
        '10800' => '3小時',
        '21600' => '6小時',
        '86400' => '1天',
        '172800' => '2天',
        '259200' => '3天',
        '604800' => '1周',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => '預設',
        'seed' => '種子',
        'exempt_domain' => '阻止列表 – 根據域',
        'exempt_address' => '阻止列表 – 根據電子郵件地址',
        'exempt' => '阻止列表 – 根據編號',
        'test' => '測試',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => '啟用',
        'inactive' => '停用',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => '嘗試發送/發送消息',
        'send error' => '退信，其它',
        'invalid email' => '退信，無效的郵箱',
        'link' => '點擊鏈接',
        'viewed' => '已查看的訊息',
        'removed' => '選擇排除',
        'lead' => '現有銷售潛在客戶',
        'contact' => '聯絡人已建立',
        'blocked' => '禁止的郵件地址或域',
        'Survey' => '問卷回答',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => '連絡人',
        'Users' => '使用者',
        'Prospects' => '目標',
        'Leads' => '潛在客戶',
        'Accounts' => '客戶',
    ),
    'merge_operators_dom' => array(
        'like' => '包含',
        'exact' => '精確地',
        'start' => '開始於',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Yes',
        'false' => '不',
        'required' => '必須',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => '已停用',
        1 => '開啟',
        2 => '過濾條件',
        3 => '預設選擇過濾器',
        4 => '唯一過濾器',
    ),

    'projects_priority_options' => array(
        'high' => '高',
        'medium' => '中',
        'low' => '低',
    ),

    'projects_status_options' => array(
        'notstarted' => '未開始',
        'inprogress' => '處理中',
        'completed' => '完成',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => '打開圖例',
        'collapselegend' => '關閉圖例',
        'clickfordrilldown' => '點擊查看明細',
        'detailview' => '更多細節...',
        'piechart' => '餅狀圖表',
        'groupchart' => '圖表組',
        'stackedchart' => '圖表棧',
        'barchart' => '柱狀圖表',
        'horizontalbarchart' => '水平柱狀圖表',
        'linechart' => '線狀圖表',
        'noData' => '無效數據',
        'print' => '列印',
        'pieWedgeName' => '段',
    ),
    'release_status_dom' => array(
        'Active' => '啟用',
        'Inactive' => '停用',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => '單引號 (\')',
        '"' => '雙引號 (&#34;)',
        '' => '無',
        'other' => '其他:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => '其他:',
    ),
    'link_target_dom' => array(
        '_blank' => '新窗口',
        '_self' => '當前窗口',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => '不自動刷新',
        '30' => '每 30 秒',
        '60' => '每1分鐘',
        '180' => '每3分鐘',
        '300' => '每5分鐘',
        '600' => '每10分鐘',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => '從不',
        '30' => '每 30 秒',
        '60' => '每1分鐘',
        '180' => '每3分鐘',
        '300' => '每5分鐘',
        '600' => '每10分鐘',
    ),
    'date_range_search_dom' => array(
        '=' => '等於',
        'not_equal' => '不等於',
        'greater_than' => '以後',
        'less_than' => '以前',
        'last_7_days' => '過去7天',
        'next_7_days' => '未來7天',
        'last_30_days' => '過去30天',
        'next_30_days' => '未來30天',
        'last_month' => '上月',
        'this_month' => '本月',
        'next_month' => '下月',
        'last_year' => '去年',
        'this_year' => '今年',
        'next_year' => '明年',
        'between' => '在該範圍內',
    ),
    'numeric_range_search_dom' => array(
        '=' => '等於',
        'not_equal' => '不等於',
        'greater_than' => '大於',
        'greater_than_equals' => '大於等於',
        'less_than' => '小於',
        'less_than_equals' => '小於等於',
        'between' => '在該範圍內',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => '複製',
        'move' => '移動',
        'donothing' => '什麼都不做',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => '結果',
    'ERR_SEARCH_INVALID_QUERY' => '執行搜尋時發生錯誤。 您的查詢可能無效。',
    'ERR_SEARCH_NO_RESULTS' => '沒有符合您搜尋條件的結果。 建議擴大搜尋範圍。',
    'LBL_SEARCH_PERFORMED_IN' => '執行搜尋',
    'LBL_EMAIL_CODE' => '電子郵件驗證碼:',
    'LBL_SEND' => '發送',
    'LBL_LOGOUT' => '登出',
    'LBL_TOUR_NEXT' => '下一步',
    'LBL_TOUR_SKIP' => '跳過',
    'LBL_TOUR_BACK' => '上一步',
    'LBL_TOUR_TAKE_TOUR' => '請瀏覽',
    'LBL_MOREDETAIL' => '更多詳細資訊' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => '內聯編輯' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => '查看' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => '過濾條件' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => '新增' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => '新增電子郵件地址' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => '隱藏/顯示' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => '刪除' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => '清除' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => '刪除' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => '移除電子郵件地址' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => '選擇退出',
    'LBL_ID_FF_INVALID' => '標記為無效',
    'LBL_ADD' => '新增' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => '公司徽標' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => '連接器彈出窗口',
    'LBL_CLOSEINLINE' => '結束',
    'LBL_VIEWINLINE' => '查看',
    'LBL_INFOINLINE' => '資訊',
    'LBL_PRINT' => '列印',
    'LBL_HELP' => '幫助',
    'LBL_ID_FF_SELECT' => '選擇',
    'DEFAULT' => '基礎',
    'LBL_SORT' => '排序',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => '以SSL或TLS啟用SMTP',
    'LBL_NO_ACTION' => '沒有此名稱的動作: %s',
    'LBL_NO_SHORTCUT_MENU' => '沒有操作可用。',
    'LBL_NO_DATA' => '無數據',

    'LBL_ROUTING_FLAGGED' => '標識設置',
    'LBL_ROUTING_TO' => '到',
    'LBL_ROUTING_TO_ADDRESS' => '到地址',
    'LBL_ROUTING_WITH_TEMPLATE' => '與範本',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => '此記錄目前包含辦公電話和地址欄位中的資料。用以下的辦公室電話和您選擇的帳戶地址覆蓋這些資料，請按一下"確定"。要保留現有資料，請按一下"取消"。',
    'LBL_DROP_HERE' => '[拖到這裡]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => '填入Gmail的默認',
    'LBL_EMAIL_ACCOUNTS_NAME' => '名稱',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => '外部郵件伺服器',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP密碼',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP埠',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP伺服器',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP 使用者名稱',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => '預設',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => '警告：沒有設定發信電子郵件帳號的使用者名稱和密碼。',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => '警告: 錯失權狀',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => '設置接收的電子郵件帳號。',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => '提供SMTP伺服器相關設置。',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => '已完成',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => '清除',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => '至：',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => '副本：',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => '密件副本：',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => '收件人/副本/密件副本',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => '電子郵箱地址',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => '過濾條件',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => '名稱',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => '找不到地址',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => '保存 & 添加到地址薄',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => '選擇地址薄入口',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => '地址薄',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => '警告! 你要刪除的電子郵件外發帳號已經與一個電子郵件接收帳號綁定。你是否確信要刪除這個帳號？',
    'LBL_EMAIL_ADDRESSES' => '電子郵件',
    'LBL_EMAIL_ADDRESS_PRIMARY' => '電子郵箱地址',
    'LBL_EMAIL_ADDRESS_OPT_IN' => '您確認您的電子郵件地址已主動選擇加入: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => '無法確認電子郵件地址',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => '匯入到 SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => '任務',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => '附件',
    'LBL_EMAIL_ATTACHMENT' => '附件',
    'LBL_EMAIL_ATTACHMENTS' => '附件文件',
    'LBL_EMAIL_ATTACHMENTS2' => '從 SuiteCRM 檔案',
    'LBL_EMAIL_ATTACHMENTS3' => '範本附件',
    'LBL_EMAIL_ATTACHMENTS_FILE' => '文件',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => '文件',
    'LBL_EMAIL_BCC' => '密送',
    'LBL_EMAIL_CANCEL' => '取消',
    'LBL_EMAIL_CC' => '抄送',
    'LBL_EMAIL_CHARSET' => '字元集設置',
    'LBL_EMAIL_CHECK' => '接收郵件',
    'LBL_EMAIL_CHECKING_NEW' => '為新郵件標記',
    'LBL_EMAIL_CHECKING_DESC' => '為新郵件標記. <br><br>如果這是為郵件帳戶做第一次標記, 它將花費一些時間.',
    'LBL_EMAIL_CLOSE' => '結束',
    'LBL_EMAIL_COFFEE_BREAK' => '為新郵件標記. <br><br>大郵件帳戶可能花費更多一些時間.',

    'LBL_EMAIL_COMPOSE' => '電子郵件',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => '請為郵件輸入接受人.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => '郵件內容為空.  無論如何都發送嗎?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => '這個郵件沒有主題.  無論如何都發送嗎?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(無主題)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => '請輸入有效的郵件地址在到, 抄送和密送位置',

    'LBL_EMAIL_CONFIRM_CLOSE' => '放棄這封郵件嗎?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => '確認刪除此簽名?',

    'LBL_EMAIL_SENT_SUCCESS' => '電子郵件己發送',

    'LBL_EMAIL_CREATE_NEW' => '--保存後創建--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => '多個',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => '空',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => '接收時間',
    'LBL_EMAIL_DATE_TODAY' => '今天',
    'LBL_EMAIL_DELETE' => '刪除',
    'LBL_EMAIL_DELETE_CONFIRM' => '刪除選定的郵件嗎？',
    'LBL_EMAIL_DELETE_SUCCESS' => '郵件刪除成功.',
    'LBL_EMAIL_DELETING_MESSAGE' => '刪除郵件中',
    'LBL_EMAIL_DETAILS' => '詳細信息',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => '當與聯絡人工作時只有主要地址被使用.',

    'LBL_EMAIL_EMPTYING_TRASH' => '清空垃圾箱',
    'LBL_EMAIL_DELETING_OUTBOUND' => '刪除發件伺服器',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => '清除緩存文件',
    'LBL_EMAIL_EMPTY_MSG' => '沒有可以顯示的電子郵件.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => '沒有任何電子郵件地址',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => '資料夾名稱必須唯一且不為空。請再試一次。',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => '不能刪除文件夾. 文件夾和它的子文件夾都與一個郵箱相關聯.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => '從上下文不能確定文件夾的用意,重試.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => '請查看您的設置.',
    'LBL_EMAIL_ERROR_DESC' => '發現錯誤: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => '您沒有許可權，請聯繫管理員',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM 資料夾名稱必須是唯一的。',
    'LBL_EMAIL_ERROR_EMPTY' => '請輸入一些搜尋條件.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => '發生錯誤',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => '消息從伺服器上移除',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => '消息不是被從伺服器上刪除就是轉移到一個不同的文件夾中',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => '連接郵件伺服器失敗. 請聯繫您的管理員',
    'LBL_EMAIL_ERROR_MOVE' => '在伺服器和郵件帳戶中移動郵件目前還不被支持.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => '移動錯誤',
    'LBL_EMAIL_ERROR_NAME' => '名稱是被需要的.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => '來源地址是需要的.',
    'LBL_EMAIL_ERROR_NO_FILE' => '請提供一個文件.',
    'LBL_EMAIL_ERROR_SERVER' => '一個郵件伺服器地址是需要的.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => '郵件帳戶可能未被保存.',
    'LBL_EMAIL_ERROR_TIMEOUT' => '一個錯誤發生在與郵件伺服器通信時.',
    'LBL_EMAIL_ERROR_USER' => '一個登陸名稱被需要.',
    'LBL_EMAIL_ERROR_PORT' => '一個郵件服務埠被需要.',
    'LBL_EMAIL_ERROR_PROTOCOL' => '一個服務協議被需要.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => '需要設定被監督的文件夾.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => '需要設定垃圾文件夾.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => '這個資訊是無效的',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => '沒有指定發送電子郵件帳號',
    'LBL_EMAIL_ERROR_SENDING' => '電子郵件發送錯誤。請與管理員聯絡以取得協助。',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . '文件夾',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => '新增',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => '添加新文件夾',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => '重命名文件夾',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => '儲存',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => '添加這個文件夾到',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => '這個文件夾不能被改變',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => '您確定您要刪除這個文件夾嗎?\n這個過程不能被回滾.\n文件夾刪除將關聯到所有包含的文件夾.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => '新建文件夾',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => '請選擇一個文件夾在執行這個動作前.',
    'LBL_EMAIL_FOLDERS_TITLE' => '資料夾管理',

    'LBL_EMAIL_FORWARD' => '轉發',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '下載 [[count]] / [[total]] 郵件',
    'LBL_EMAIL_FROM' => '發件人',
    'LBL_EMAIL_GROUP' => '群組',
    'LBL_EMAIL_UPPER_CASE_GROUP' => '群組',
    'LBL_EMAIL_HOME_FOLDER' => '首頁',
    'LBL_EMAIL_IE_DELETE' => '刪除郵件帳戶',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => '刪除簽名',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => '您確定您要刪除這個郵件帳戶嗎?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => '刪除成功.',
    'LBL_EMAIL_IE_SAVE' => '保存郵件帳戶資訊',
    'LBL_EMAIL_IMPORTING_EMAIL' => '導入郵件',
    'LBL_EMAIL_IMPORT_EMAIL' => '導入到 SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => '導入設置',
    'LBL_EMAIL_INVALID' => '無效',
    'LBL_EMAIL_LOADING' => '載入中...',
    'LBL_EMAIL_MARK' => '標記',
    'LBL_EMAIL_MARK_FLAGGED' => '設為已標識',
    'LBL_EMAIL_MARK_READ' => '作為已讀',
    'LBL_EMAIL_MARK_UNFLAGGED' => '設為未標識',
    'LBL_EMAIL_MARK_UNREAD' => '作為未讀',
    'LBL_EMAIL_ASSIGN_TO' => '分配給',

    'LBL_EMAIL_MENU_ADD_FOLDER' => '創建文件夾',
    'LBL_EMAIL_MENU_COMPOSE' => '排版',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => '刪除文件夾',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => '清空垃圾箱',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => '同步',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => '清除緩存文件',
    'LBL_EMAIL_MENU_REMOVE' => '刪除',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => '重命名文件夾',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => '重命名文件夾',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => '請做一個選擇在做此操作之前.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => '創建一個資料夾 (遠端或 SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => '刪除資料夾 (遠端或 SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => '為您郵件莊戶清空所有破損的文件夾',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => '標記這些郵件已讀',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => '標記這些郵件為未標識',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => '重命名一個資料夾 (遠端或 SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => '消息',

    'LBL_EMAIL_ML_NAME' => '列表名稱',
    'LBL_EMAIL_ML_ADDRESSES_1' => '選擇列表地址',
    'LBL_EMAIL_ML_ADDRESSES_2' => '有效列表地址',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-點擊</b> 選擇多個<br />(Mac使用者用 <b>CMD-點擊</b>)',

    'LBL_EMAIL_NO' => '不',
    'LBL_EMAIL_NOT_SENT' => '系統不能處理你的請求。請聯繫系統管理員。',

    'LBL_EMAIL_OK' => '確定',
    'LBL_EMAIL_ONE_MOMENT' => '請稍後...',
    'LBL_EMAIL_OPEN_ALL' => '打開多行消息',
    'LBL_EMAIL_OPTIONS' => '選項',
    'LBL_EMAIL_QUICK_COMPOSE' => '快速編寫電子郵件',
    'LBL_EMAIL_OPT_OUT' => '選擇排除',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => '選擇排除及無效',
    'LBL_EMAIL_PERFORMING_TASK' => '完成任務',
    'LBL_EMAIL_PRIMARY' => '主要團隊',
    'LBL_EMAIL_PRINT' => '列印',

    'LBL_EMAIL_QC_BUGS' => '缺陷追蹤',
    'LBL_EMAIL_QC_CASES' => '案例',
    'LBL_EMAIL_QC_LEADS' => '潛在客戶',
    'LBL_EMAIL_QC_CONTACTS' => '聯絡人',
    'LBL_EMAIL_QC_TASKS' => '任務',
    'LBL_EMAIL_QC_OPPORTUNITIES' => '商業機會',
    'LBL_EMAIL_QUICK_CREATE' => '快速新增',

    'LBL_EMAIL_REBUILDING_FOLDERS' => '重建文件夾',
    'LBL_EMAIL_RELATE_TO' => '關係',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => '查看關係',
    'LBL_EMAIL_RECORD' => '郵件記錄',
    'LBL_EMAIL_REMOVE' => '刪除',
    'LBL_EMAIL_REPLY' => '回覆',
    'LBL_EMAIL_REPLY_ALL' => '全部回覆',
    'LBL_EMAIL_REPLY_TO' => '回覆',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => '查詢消息',
    'LBL_EMAIL_RETRIEVING_RECORD' => '查詢郵件記錄',
    'LBL_EMAIL_SELECT_ONE_RECORD' => '請選擇一條郵件記錄',
    'LBL_EMAIL_RETURN_TO_VIEW' => '返回到前一個模組?',
    'LBL_EMAIL_REVERT' => '查詢',
    'LBL_EMAIL_RELATE_EMAIL' => '相關郵件',

    'LBL_EMAIL_RULES_TITLE' => '規則管理',

    'LBL_EMAIL_SAVE' => '儲存',
    'LBL_EMAIL_SAVE_AND_REPLY' => '保存 & 回覆',
    'LBL_EMAIL_SAVE_DRAFT' => '保存草稿',
    'LBL_EMAIL_DRAFT_SAVED' => '草稿已儲存',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_DATE_FROM' => '開始日期',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => '結束日期',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => '沒有結果匹配您的搜尋條件。',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => '搜尋結果',

    'LBL_EMAIL_SELECT' => '選擇',

    'LBL_EMAIL_SEND' => '發送',
    'LBL_EMAIL_SENDING_EMAIL' => '發送郵件',

    'LBL_EMAIL_SETTINGS' => '設置',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => '電子郵件帳戶',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => '清除窗口',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => '檢查新郵件',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => '發信人地址',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => '提醒測試電子郵件地址：',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => '發信人名稱',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => '回覆電子郵件地址',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => '同步所有郵件帳戶',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => '已經通過這個外發電子郵件伺服器發送了一封測試電子郵件。請檢查受否收到。',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => '請參閱完整的 SMTP 日誌',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => '執行一個全同步嗎?\n大郵件帳戶可能會花費幾分鐘.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => '按Shift鍵或Ctrl鍵來選在多個文件夾.',
    'LBL_EMAIL_SETTINGS_GENERAL' => '一般',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => '創建組文件夾',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => '編輯組文件夾',

    'LBL_EMAIL_SETTINGS_NAME' => '名稱',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => '這些設置將需要頁面刷新被激活.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => '恢復郵件帳戶',
    'LBL_EMAIL_SETTINGS_SAVED' => '設定已儲存。',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => '象平時的文本發送郵件',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => '每頁郵件數量',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => '可視設置',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => '偏好設定',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => '可用的使用者資料夾',
    'LBL_EMAIL_ERROR_PREPEND' => '電子郵件發生錯誤:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => '你選擇的外發電子郵件帳戶無效。請檢查配置，或嘗試一下其他帳戶。',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => '您的電子郵件帳戶還沒有配置外發電子郵件伺服器。請為這個帳戶選擇或新加一個外發電子郵件伺服器。',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => '預設簽名',
    'LBL_EMAIL_SIGNATURES' => '簽名',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => '其它',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ 遠程文件夾 ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM 資料夾]',
    'LBL_EMAIL_SUBJECT' => '主旨',
    'LBL_EMAIL_SUCCESS' => '成功',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM 資料夾',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => '電子郵件範本的正文為空',
    'LBL_EMAIL_TEMPLATES' => '範本',
    'LBL_EMAIL_TO' => '收件人',
    'LBL_EMAIL_VIEW' => '查看',
    'LBL_EMAIL_VIEW_HEADERS' => '查看頭',
    'LBL_EMAIL_VIEW_RAW' => '顯示原始郵件',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => '當使用POP3協議這項功能不被支持.',
    'LBL_DEFAULT_LINK_TEXT' => '預設連文本.',
    'LBL_EMAIL_YES' => 'Yes',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => '發送測試電子郵件',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => '測試電子郵件已發送',
    'LBL_EMAIL_MESSAGE_NO' => '消息',
    'LBL_EMAIL_IMPORT_SUCCESS' => '導入成功',
    'LBL_EMAIL_IMPORT_FAIL' => '導入失敗，該消息已導入或已從伺服器刪除',

    'LBL_LINK_NONE' => '無',
    'LBL_LINK_ALL' => '全部',
    'LBL_LINK_RECORDS' => '記錄',
    'LBL_LINK_SELECT' => '選擇',
    'LBL_LINK_ACTIONS' => '動作',
    'LBL_CLOSE_ACTIVITY_HEADER' => '確定',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => '您確定要關閉 #module# 嗎？',
    'LBL_INVALID_FILE_EXTENSION' => '文件擴展名無效',

    'ERR_AJAX_LOAD' => '發生錯誤:',
    'ERR_AJAX_LOAD_FAILURE' => '處理過程中出現錯誤，請稍候重試。',
    'ERR_AJAX_LOAD_FOOTER' => '如果此錯誤仍然存在，請讓您的管理員禁用 Ajax 此模組',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => '小數分隔符和千分符不能相同。\\n\\n請更改它們的值。',
    'ERR_DELETE_RECORD' => '必須指定記錄編號才能刪除客戶。',
    'ERR_EXPORT_DISABLED' => '禁止導出。',
    'ERR_EXPORT_TYPE' => '錯誤導出',
    'ERR_INVALID_EMAIL_ADDRESS' => '不是有效的電子郵件地址。',
    'ERR_INVALID_FILE_REFERENCE' => '無效文件引用',
    'ERR_NO_HEADER_ID' => '此功能在本主題中無效.',
    'ERR_NOT_ADMIN' => '沒有管理許可權。',
    'ERR_MISSING_REQUIRED_FIELDS' => '缺少必填欄位:',
    'ERR_INVALID_REQUIRED_FIELDS' => '無效的必填欄位:',
    'ERR_INVALID_VALUE' => '無效值:',
    'ERR_NO_SUCH_FILE' => '文件在系統中不存在',
    'ERR_NO_SINGLE_QUOTE' => '不可以使用單引號',
    'ERR_NOTHING_SELECTED' => '繼續之前請選擇。',
    'ERR_SELF_REPORTING' => '使用者不可以彙報給自己。',
    'ERR_SQS_NO_MATCH_FIELD' => '沒有匹配欄位:',
    'ERR_SQS_NO_MATCH' => '沒有匹配',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => '請聲明 \'關鍵值\' 索引在顯示參數屬性中為元數據定義',
    'ERR_EXISTING_PORTAL_USERNAME' => '錯誤: 門戶名稱已經分配給另一個聯絡人。',
    'ERR_COMPATIBLE_PRECISION_VALUE' => '數值與精度不匹配',
    'ERR_EXTERNAL_API_SAVE_FAIL' => '保存外部帳號是出錯.',
    'ERR_NO_DB' => '無法連接到資料庫。請參閱 suitecrm.log 的詳細資訊。',
    'ERR_DB_FAIL' => '資料庫失敗。請參閱 suitecrm.log 的詳細資訊。',
    'ERR_DB_VERSION' => 'SuiteCRM {0} 檔案只能與 SuiteCRM {1} 資料庫一起使用。',

    'LBL_ACCOUNT' => '客戶',
    'LBL_ACCOUNTS' => '客戶',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => '銷售活動',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => '查看摘要',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => '查看摘要',
    'LBL_ADD_BUTTON' => '新增',
    'LBL_ADD_DOCUMENT' => '增加文件',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => '增加到目標列表',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => '將連絡人添加到目標清單',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => '關閉',
    'LBL_ADDITIONAL_DETAILS' => '額外資訊',
    'LBL_ADMIN' => '系統管理',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => '存檔',
    'LBL_ASSIGNED_TO_USER' => '負責的使用者',
    'LBL_ASSIGNED_TO' => '負責人:',
    'LBL_BACK' => '上一步',
    'LBL_BILLING_ADDRESS' => '帳單地址',
    'LBL_QUICK_CREATE' => '創建 ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM-開源 CRM',
    'LBL_BUGS' => '程式錯誤',
    'LBL_BY' => '被',
    'LBL_CALLS' => '通話',
    'LBL_CAMPAIGNS_SEND_QUEUED' => '發送隊列中的市場活動郵件',
    'LBL_SUBMIT_BUTTON_LABEL' => '提交',
    'LBL_CASE' => '案例',
    'LBL_CASES' => '案例',
    'LBL_CHANGE_PASSWORD' => '修改密碼',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => '全選',
    'LBL_CITY' => '城市',
    'LBL_CLEAR_BUTTON_LABEL' => '清除',
    'LBL_CLEAR_BUTTON_TITLE' => '清除',
    'LBL_CLEARALL' => '全部清除',
    'LBL_CLOSE_BUTTON_TITLE' => '結束',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => '關閉並且新增',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => '關閉並且新增',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => '撰寫電子郵件',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => '撰寫電子郵件',
    'LBL_SEARCH_DROPDOWN_YES' => 'Yes',
    'LBL_SEARCH_DROPDOWN_NO' => '不',
    'LBL_CONTACT_LIST' => '聯絡人列表',
    'LBL_CONTACT' => '聯絡人',
    'LBL_CONTACTS' => '連絡人',
    'LBL_CONTRACT' => '合約',
    'LBL_CONTRACTS' => '合約',
    'LBL_COUNTRY' => '國家:',
    'LBL_CREATE_BUTTON_LABEL' => '建立',
    'LBL_CREATED_BY_USER' => '創建者',
    'LBL_CREATED_USER' => '創建者',
    'LBL_CREATED' => '建立人',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => '貨幣:',
    'LBL_DOCUMENTS' => '文件',
    'LBL_DATE_ENTERED' => '創建日期:',
    'LBL_DATE_MODIFIED' => '修改日期:',
    'LBL_EDIT_BUTTON' => '編輯',
    'LBL_DUPLICATE_BUTTON' => '複製',
    'LBL_DELETE_BUTTON' => '刪除',
    'LBL_DELETE' => '刪除',
    'LBL_DELETED' => '已刪除',
    'LBL_DIRECT_REPORTS' => '直接報告人',
    'LBL_DONE_BUTTON_LABEL' => '已完成',
    'LBL_DONE_BUTTON_TITLE' => '已完成',
    'LBL_FAVORITES' => '收藏夾',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => '請選擇一個vCard文件',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard並沒有得到此模組的所有必填的欄位。詳細資訊請參閱 suitecrm.log 。',
    'LBL_VCARD_ERROR_FILESIZE' => '上傳的檔案大小超過在 HTML 表單中指定的 30000 位元組限制。',
    'LBL_VCARD_ERROR_DEFAULT' => '上傳的 vCard 檔案時出錯。請參閱 suitecrm.log 的詳細資訊。',
    'LBL_IMPORT_VCARD' => '導入vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => '導入vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => '導入vCard',
    'LBL_VIEW_BUTTON' => '查看',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => '以PDF格式發送電子郵件',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => '以PDF格式發送電子郵件',
    'LBL_EMAILS' => '電子郵件',
    'LBL_EMPLOYEES' => '員工',
    'LBL_ENTER_DATE' => '輸入日期',
    'LBL_EXPORT' => '導出',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => '執行',
    'LBL_HIDE' => '隱藏',
    'LBL_ID' => '編號',
    'LBL_IMPORT' => '導入',
    'LBL_IMPORT_STARTED' => '已開始導入:',
    'LBL_LAST_VIEWED' => '最近查看',
    'LBL_LEADS' => '潛在客戶',
    'LBL_LESS' => '少於',
    'LBL_CAMPAIGN' => '市場活動:',
    'LBL_CAMPAIGNS' => '市場活動',
    'LBL_CAMPAIGNLOG' => '市場活動日誌',
    'LBL_CAMPAIGN_CONTACT' => '市場活動',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => '無',
    'LBL_THEME' => '主題:',
    'LBL_FOUND_IN_RELEASE' => '在發佈版本中存在',
    'LBL_FIXED_IN_RELEASE' => '在發佈版本中已修改',
    'LBL_LIST_ACCOUNT_NAME' => '客戶名稱',
    'LBL_LIST_ASSIGNED_USER' => '使用者',
    'LBL_LIST_CONTACT_NAME' => '聯絡人姓名',
    'LBL_LIST_CONTACT_ROLE' => '聯絡人角色',
    'LBL_LIST_DATE_ENTERED' => '建立日期',
    'LBL_LIST_EMAIL' => '電子郵件',
    'LBL_LIST_NAME' => '名稱',
    'LBL_LIST_OF' => '的',
    'LBL_LIST_PHONE' => '電話',
    'LBL_LIST_RELATED_TO' => '關聯到',
    'LBL_LIST_USER_NAME' => '使用者名稱',
    'LBL_LISTVIEW_NO_SELECTED' => '請選擇至少1條記錄進行操作。',
    'LBL_LISTVIEW_TWO_REQUIRED' => '請選擇至少2條記錄進行操作。',
    'LBL_LISTVIEW_OPTION_SELECTED' => '已選擇的記錄',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => '已選擇',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => '大衛',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => '李文斯頓',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => '博士',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => '取消',
    'LBL_VERIFY' => '驗證',
    'LBL_RESEND' => '重新發送',
    'LBL_PROFILE' => '帳號',
    'LBL_MAILMERGE' => '郵件合併',
    'LBL_MASS_UPDATE' => '批量更新',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => '沒有支持批量操作的欄位',
    'LBL_OPT_OUT_FLAG_PRIMARY' => '拒絕收信主要電子郵件',
    'LBL_OPT_IN_FLAG_PRIMARY' => '用戶主電子郵件',
    'LBL_MEETINGS' => '會議',
    'LBL_MEETING_GO_BACK' => '返回會議',
    'LBL_MEMBERS' => '成員',
    'LBL_MEMBER_OF' => '附屬於',
    'LBL_MODIFIED_BY_USER' => '修改的使用者',
    'LBL_MODIFIED_USER' => '修改的使用者',
    'LBL_MODIFIED' => '修改人:',
    'LBL_MODIFIED_NAME' => '修改人姓名',
    'LBL_MORE' => '更多',
    'LBL_MY_ACCOUNT' => '我的帳戶',
    'LBL_NAME' => '名稱',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => '建立',
    'LBL_NEW_BUTTON_TITLE' => '建立',
    'LBL_NEXT_BUTTON_LABEL' => '下一步',
    'LBL_NONE' => '--無--',
    'LBL_NOTES' => '備註',
    'LBL_OPPORTUNITIES' => '商業機會',
    'LBL_OPPORTUNITY_NAME' => '商業機會名稱',
    'LBL_OPPORTUNITY' => '商業機會',
    'LBL_OR' => '或者',
    'LBL_PANEL_OVERVIEW' => '總覽',
    'LBL_PANEL_ASSIGNMENT' => '其它',
    'LBL_PANEL_ADVANCED' => '更多資訊',
    'LBL_PARENT_TYPE' => '父類類型',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => '郵遞區號:',
    'LBL_PRIMARY_ADDRESS_CITY' => '[主要住址]城市:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => '[主要住址]國家:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => '[主要住址]郵遞區號:',
    'LBL_PRIMARY_ADDRESS_STATE' => '[主要住址] 州/省:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '[主要住址]街道2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '[主要住址]街道3:',
    'LBL_PRIMARY_ADDRESS_STREET' => '[主要住址]街道:',
    'LBL_PRIMARY_ADDRESS' => '主要地址:',

    'LBL_PROSPECTS' => '前景',
    'LBL_PRODUCTS' => '產品',
    'LBL_PROJECT_TASKS' => '專案工作',
    'LBL_PROJECTS' => '專案',
    'LBL_QUOTES' => '報價單',

    'LBL_RELATED' => '相關',
    'LBL_RELATED_RECORDS' => '相關記錄',
    'LBL_REMOVE' => '刪除',
    'LBL_REPORTS_TO' => '彙報給',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => '表示必填欄位',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => '已完成',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => '完整表格',
    'LBL_FULL_FORM_BUTTON_TITLE' => '完整表格',
    'LBL_SAVE_NEW_BUTTON_LABEL' => '保存並且新增',
    'LBL_SAVE_NEW_BUTTON_TITLE' => '保存並且新增',
    'LBL_SAVE_OBJECT' => '保存 {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'C',
    'LBL_SEARCH_BUTTON_LABEL' => '搜尋',
    'LBL_SEARCH_BUTTON_TITLE' => '搜尋',
    'LBL_FILTER' => '過濾條件',
    'LBL_SEARCH' => '搜尋',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => '更多',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => '文件格式無效，只能上傳圖片文件。',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => '選擇',
    'LBL_SELECT_BUTTON_TITLE' => '選擇',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => '瀏覽文件',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => '瀏覽文件',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => '選擇聯絡人',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => '選擇聯絡人',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => '從報表中選擇',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => '選擇報表',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => '選擇使用者',
    'LBL_SELECT_USER_BUTTON_TITLE' => '選擇使用者',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => '清除選擇的區塊',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => '清除選擇的區塊',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => '清除選擇的區塊',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => '清除選擇的區塊',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => '選擇文件',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => '選擇文件',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => '全部清除',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => '全部清除',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => '選擇使用者',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => '選擇使用者',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => '清除使用者',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => '清除使用者',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => '選擇帳戶',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => '選擇帳戶',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => '清除帳戶',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => '清除帳戶',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => '選擇市場活動',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => '選擇市場活動',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => '清除市場活動',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => '清除市場活動',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => '選擇聯絡人',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => '選擇聯絡人',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => '清除聯繫人',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => '清除聯繫人',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => '選擇隊伍',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => '選擇隊伍',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => '清除團隊',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => '清除團隊',
    'LBL_SERVER_RESPONSE_RESOURCES' => '創建這個頁面的資源(查詢，文件)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => '秒。',
    'LBL_SERVER_RESPONSE_TIME' => '伺服器響應時間:',
    'LBL_SERVER_MEMORY_BYTES' => '位元組',
    'LBL_SERVER_MEMORY_USAGE' => '伺服器內存使用: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => '用途: - 模組: {0} - 行動: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => '伺服器峰值內存使用: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => '裝運地址',
    'LBL_SHOW' => '顯示',
    'LBL_STATE' => '狀態:',
    'LBL_STATUS_UPDATED' => '對於這個事件，您的狀態已更新！',
    'LBL_STATUS' => '狀態:',
    'LBL_STREET' => '街道',
    'LBL_SUBJECT' => '主旨',

    'LBL_INBOUNDEMAIL_ID' => '接收電子郵件ID',

    'LBL_SCENARIO_SALES' => '銷售',
    'LBL_SCENARIO_MARKETING' => '市場行銷',
    'LBL_SCENARIO_FINANCE' => '金融',
    'LBL_SCENARIO_SERVICE' => '服務',
    'LBL_SCENARIO_PROJECT' => '專案管理',

    'LBL_SCENARIO_SALES_DESCRIPTION' => '此情境便於管理銷售項目',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => '此情境便於管理行銷項目',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => '此情境便於管理財務相關項目',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => '此情境便於管理服務相關項目',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => '此情境便於管理專案相關項目',

    'LBL_SYNC' => '同步',
    'LBL_TABGROUP_ALL' => '全部',
    'LBL_TABGROUP_ACTIVITIES' => '銷售活動',
    'LBL_TABGROUP_COLLABORATION' => '協同項目',
    'LBL_TABGROUP_MARKETING' => '市場行銷',
    'LBL_TABGROUP_OTHER' => '其它',
    'LBL_TABGROUP_SALES' => '銷售',
    'LBL_TABGROUP_SUPPORT' => '客戶服務',
    'LBL_TASKS' => '任務',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => '存檔電子郵件',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => '存檔電子郵件',
    'LBL_UNDELETE_BUTTON_LABEL' => '不刪除',
    'LBL_UNDELETE_BUTTON_TITLE' => '不刪除',
    'LBL_UNDELETE_BUTTON' => '不刪除',
    'LBL_UNDELETE' => '不刪除',
    'LBL_UNSYNC' => '不同步',
    'LBL_UPDATE' => '更新',
    'LBL_USER_LIST' => '使用者清單',
    'LBL_USERS' => '使用者',
    'LBL_VERIFY_EMAIL_ADDRESS' => '查看是否存在新郵件...',
    'LBL_VERIFY_PORTAL_NAME' => '查看存在的門戶名稱...',
    'LBL_VIEW_IMAGE' => '查看',

    'LNK_ABOUT' => '關於',
    'LNK_ADVANCED_FILTER' => '進階過濾',
    'LNK_BASIC_FILTER' => '快速過濾',
    'LBL_ADVANCED_SEARCH' => '進階過濾',
    'LBL_QUICK_FILTER' => '快速過濾',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => '顯示所有',
    'LNK_CLOSE' => '結束',
    'LBL_MODIFY_CURRENT_FILTER' => '修改目前過濾條件',
    'LNK_SAVED_VIEWS' => '佈局選項',
    'LNK_DELETE' => '刪除',
    'LNK_EDIT' => '編輯',
    'LNK_GET_LATEST' => '獲取最新的',
    'LNK_GET_LATEST_TOOLTIP' => '用最新版本替換',
    'LNK_HELP' => '幫助',
    'LNK_CREATE' => '建立',
    'LNK_LIST_END' => '結束',
    'LNK_LIST_NEXT' => '下一步',
    'LNK_LIST_PREVIOUS' => '上一項',
    'LNK_LIST_RETURN' => '返回列表',
    'LNK_LIST_START' => '開始',
    'LNK_LOAD_SIGNED' => '簽署',
    'LNK_LOAD_SIGNED_TOOLTIP' => '用簽署文件代替',
    'LNK_PRINT' => '列印',
    'LNK_BACKTOTOP' => '返回頂端',
    'LNK_REMOVE' => '刪除',
    'LNK_RESUME' => '重試',
    'LNK_VIEW_CHANGE_LOG' => '查看更改日誌',

    'NTC_CLICK_BACK' => '請按瀏覽器的“返回”按鈕返回，並糾正錯誤。',
    'NTC_DATE_FORMAT' => '(年-月-日)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => '確定要刪除所選擇的記錄嗎?',
    'NTC_TEMPLATE_IS_USED' => '這個範本被至少1個營銷活動所使用。你確定要刪除它嗎？',
    'NTC_TEMPLATES_IS_USED' => '以下範本用於電子郵件行銷記錄。請確認是否要刪除它們？' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => '您確定要刪除這些記錄嗎？',
    'NTC_DELETE_CONFIRMATION_NUM' => '您確定要刪除 ',
    'NTC_UPDATE_CONFIRMATION_NUM' => '您確定要更新 ',
    'NTC_DELETE_SELECTED_RECORDS' => ' 選擇記錄?',
    'NTC_LOGIN_MESSAGE' => '請輸入您的使用者名稱及密碼。',
    'NTC_NO_ITEMS_DISPLAY' => '無',
    'NTC_REMOVE_CONFIRMATION' => '您確定要移除這個關係嗎?',
    'NTC_REQUIRED' => '表示必填欄位',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => '開始',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => '當前記錄已修改，離開當前界面，修改數據將丟失。您確定要離開當前界面嗎？',
    'ERROR_NO_RECORD' => '檢索記錄出錯。這條記錄可能已被刪除，或者您可能沒有許可權查看它。',
    'WARN_BROWSER_VERSION_WARNING' => '<b>警告:</b>您的瀏覽器版本不再受支援，或者您正在使用不受支援的瀏覽器。<p></p> 推薦使用以下瀏覽器版本: <p></p> <ul><li>Internet Explorer 10 (相容性檢視不支援)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>警告:</b>您的瀏覽器是 IE 相容性檢視，這是不被支援的。',
    'ERROR_TYPE_NOT_VALID' => '錯誤. 無效的類型.',
    'ERROR_NO_BEAN' => '未能獲取 bean。',
    'LBL_DUP_MERGE' => '查找重覆記錄',
    'LBL_MANAGE_SUBSCRIPTIONS' => '管理訂閱',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => '管理訂閱為',
    // Ajax status strings
    'LBL_LOADING' => '載入中...',
    'LBL_SEARCHING' => '搜尋中...',
    'LBL_SAVING_LAYOUT' => '佈局保存中...',
    'LBL_SAVED_LAYOUT' => '佈局已被保存。',
    'LBL_SAVED' => '保存',
    'LBL_SAVING' => '保存中',
    'LBL_DISPLAY_COLUMNS' => '顯示欄',
    'LBL_HIDE_COLUMNS' => '隱藏欄',
    'LBL_SEARCH_CRITERIA' => '搜尋條件',
    'LBL_SAVED_VIEWS' => '保存視圖',
    'LBL_PROCESSING_REQUEST' => '處理中...',
    'LBL_REQUEST_PROCESSED' => '已完成',
    'LBL_AJAX_FAILURE' => 'Ajax調用失敗',
    'LBL_MERGE_DUPLICATES' => '合併',
    'LBL_SAVED_FILTER_SHORTCUT' => '我的過濾條件',
    'LBL_SEARCH_POPULATE_ONLY' => '使用上面的搜尋表單執行搜尋',
    'LBL_DETAILVIEW' => '詳細檢視',
    'LBL_LISTVIEW' => '清單檢視',
    'LBL_EDITVIEW' => '編輯檢視',
    'LBL_BILLING_STREET' => '街道:',
    'LBL_SHIPPING_STREET' => '街道:',
    'LBL_SEARCHFORM' => '搜尋表單',
    'LBL_SAVED_SEARCH_ERROR' => '請為這個檢視提供一個名稱。',
    'LBL_DISPLAY_LOG' => '顯示日誌',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => '系統',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => '會話過期',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => '您的會話將在2分鐘後過期。請保存您的工作。',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => '您的會話已經過期。',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => '會議',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => '通話',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => '時間:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => '地點:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => '描述: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => '狀態:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => '關聯到: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => '事件',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => '事件還沒被設置。',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => '位置還沒被設置。',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => '開始日期還沒被定義。',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => '找不到任何結果。',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => '未找到任何結果... 或許您可嘗試更改搜尋條件然後重試？',
    'MSG_LIST_VIEW_NO_RESULTS' => '找不到任何結果： <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => '創建 <item1> 作為一個新的 <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => '或更改您的搜尋條件',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => '你現在還沒有保存任何記錄。 現在保存 <item2> 或 <item3> 。',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => '增加到我的收藏夾',
    'LBL_CREATE_CONTACT' => '創建聯絡人',
    'LBL_CREATE_CASE' => '創建案例',
    'LBL_CREATE_NOTE' => '新增備忘錄',
    'LBL_CREATE_OPPORTUNITY' => '新增商業機會',
    'LBL_SCHEDULE_CALL' => '安排通話',
    'LBL_SCHEDULE_MEETING' => '安排會議',
    'LBL_CREATE_TASK' => '創建任務',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => '產生表單',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => '保存 Web 表單',
    'LBL_AVAILABLE_FIELDS' => '有效欄位',
    'LBL_FIRST_FORM_COLUMN' => '表單第一行',
    'LBL_SECOND_FORM_COLUMN' => '表單第二行',
    'LBL_ASSIGNED_TO_REQUIRED' => '缺少所需的欄位: 負責人',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => '缺少所需的欄位: 相關市場活動',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web 表單類型 ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => '提交此表單將創建 ',

    'LBL_ADD_ALL_LEAD_FIELDS' => '增加所有的欄位',
    'LBL_RESET_ALL_LEAD_FIELDS' => '重設所有欄位',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => '移除所有的欄位',
    'LBL_NEXT_BTN' => '下一步',
    'LBL_ONLY_IMAGE_ATTACHMENT' => '只有圖片類型的附件才可以被嵌入',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => '修改資料庫文本',
    'ERR_MSSQL_WARNING' => '警告:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => '錯誤: 文件 [[file]] 丟失. 不能創建因為沒有對應的 HTML 文件可以找到.',
    'ERR_CANNOT_FIND_MODULE' => '錯誤: Module [module] 不存在.',
    'LBL_ALT_ADDRESS' => '其它地址:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => '錯誤: 有一些不相等若乾論據關於 \'key\' 和 \'copy\' 元素在顯示參數的數組中.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => '一般',
    'LBL_DASHLET_CONFIGURE_FILTERS' => '過濾',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => '只顯示我的記錄',
    'LBL_DASHLET_CONFIGURE_TITLE' => '標題',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => '顯示行數:',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => '你的 SuiteCRM Dashlets 已經達到管理員設置的最大數目。若要新增更多 SuiteCRM Dashlet ，請先刪除一個現有的。',
    'LBL_ADDING_DASHLET' => '新增 SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet 已成功添加',
    'LBL_REMOVE_DASHLET_CONFIRM' => '確定要刪除此 SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => '正在刪除 SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => '載入頁面, 請等待...',

    'LBL_RELOAD_PAGE' => '請 <a href="javascript: window.location.reload()"> 重新載入視窗</a> 來使用此 SuiteCRM Dashlet。',
    'LBL_ADD_DASHLETS' => '添加 Dashlets',
    'LBL_CLOSE_DASHLETS' => '結束',
    'LBL_OPTIONS' => '選項',
    'LBL_1_COLUMN' => '1 行',
    'LBL_2_COLUMN' => '2 行',
    'LBL_3_COLUMN' => '3 行',
    'LBL_PAGE_NAME' => '頁名稱',

    'LBL_SEARCH_RESULTS' => '搜尋結果',
    'LBL_SEARCH_MODULES' => '模組',
    'LBL_SEARCH_TOOLS' => '工具',
    'LBL_SEARCH_HELP_TITLE' => '搜尋提示',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => '無圖象',

    'LBL_MODULE' => '模組',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => '從左側複製地址:',
    'LBL_SAVE_AND_CONTINUE' => '保存並繼續',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>多選控制</strong></p><ul><li>點擊一個值以選擇一個屬性.</li><li>Ctrl-點擊&nbsp;來&nbsp;選擇多個. Mac使用者請用 CMD-點擊.</li><li>在兩個屬性中來選擇所有值,&nbsp; 點擊第一個值&nbsp;之後shift-點擊最後一個值.</li></ul><p><strong>進階搜尋 & 佈局選項</strong><br><br>使用 <b>儲存搜尋 & 佈局</b> 選項， 你可以儲存一個集合的搜尋參數和/或一個自訂的清單檢視佈局，以在將來能夠快速的取得想要的搜尋結果。你可以儲存數量無上限的自訂搜尋或佈局。所有儲存的搜尋都會以名稱顯示在儲存的搜尋清單中，最上方為最新儲存的項目。<br><br>要自訂清單檢視佈局，請使用隱藏欄和顯示欄來選擇什麼欄位要顯示在搜尋結果中。例如：你可以顯示或隱藏詳細資訊如紀錄名稱、負責人、負責團隊。要在清單檢視中增加一欄，在隱藏欄中選一個欄位，使用左箭頭來移動到顯示欄。要移除一個欄，在顯示欄裡選擇一個欄位，用右箭頭來移動到隱藏欄。<br><br>儲存佈局設定後，就可以在檢視搜尋結果的時候載入這些自訂佈局。<br><br>如要儲存並更新一個儲存和/或佈局：<ol><li>在<b>儲存此搜尋為</b>欄位中輸入一個名稱並且按<b>儲存</b>。名稱會顯示在儲存的搜尋中，靠近<b>清除</b>按鈕。</li><li>要查看一個儲存的搜尋，從儲存的搜尋清單中選擇。搜尋的結果將會在清單檢視中顯示。</li><li>要更新一個已儲存的搜尋的屬性，從清單中選擇它，在進階搜尋區中輸入新的搜尋條件和/或佈局選項，按一下<b>修改目前搜尋</b>旁邊的<b>更新</b>。</li><li>要刪除一個已儲存的搜尋，從清單中選擇它，按一下<b>修改目前搜尋</b>旁的<b>刪除</b>。並且按一下<b>OK</b>以確認刪除。</li></ol><p><strong>提示</strong><br><br>使用 % 當作萬用字元，你可以讓你的搜尋更廣泛。例如：不是只有搜尋"Apples"，你可以輸入"Apples%"來找到所有以 Apples 開頭的文字。</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Error:達到 $module module 查詢上限 $limit.',
    'ERROR_NOTIFY_OVERRIDE' => '錯誤: ResourceObserver->notify() 需要被重寫.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => '錯誤: 無法創建監視器，因為metedata文件為空或者不存在',
    'ERR_MONITOR_NOT_CONFIGURED' => '錯誤: 不存在為被請求的名字配置的監視器',
    'ERR_UNDEFINED_METRIC' => '錯誤: 不能為未定義量設置值',
    'ERR_STORE_FILE_MISSING' => '錯誤: 不能找到實現存儲的文件',

    'LBL_MONITOR_ID' => '監視器編號',
    'LBL_USER_ID' => '使用者 Id',
    'LBL_MODULE_NAME' => '模組名稱',
    'LBL_ITEM_ID' => '項目編號',
    'LBL_ITEM_SUMMARY' => '項目彙總',
    'LBL_ACTION' => '動作',
    'LBL_SESSION_ID' => 'Session編號',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack 為使用者 id {0} 創建',
    'LBL_VISIBLE' => '記錄可見',
    'LBL_DATE_LAST_ACTION' => '修改日期',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => '必須早於',
    'MSG_IS_MORE_THAN' => '大於',
    'MSG_SHOULD_BE' => '應該是',
    'MSG_OR_GREATER' => '或者大於',

    'LBL_LIST' => '列表',
    'LBL_CREATE_BUG' => '創建缺陷追蹤',

    'LBL_OBJECT_IMAGE' => '圖形',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => '請選擇日期',

    'LBL_VALIDATE_RANGE' => '不在有效範圍之內',
    'LBL_CHOOSE_START_AND_END_DATES' => '請選擇開始和結束的日期範圍',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => '請選擇開始和結束範圍項目',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => '全部',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => '錯誤: Bean參數的數組個數和結果數組的個數不相符。',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => '錯誤︰ 缺少模組的映射條目。',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => '錯誤：連接器不能獲得數據。',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => '為了使用 IIS/FastCGI sapi 的最佳體驗，請在在 php.ini 檔案中設置 fastcgi.logging 為 0 。',

    //Collection Field
    'LBL_COLLECTION_NAME' => '名稱',
    'LBL_COLLECTION_PRIMARY' => '主要團隊',
    'ERROR_MISSING_COLLECTION_SELECTION' => '這裡必須填入資料',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => '負責人',
    'LBL_DESCRIPTION' => '描述',

    'LBL_YESTERDAY' => '昨天',
    'LBL_TODAY' => '今天',
    'LBL_TOMORROW' => '明天',
    'LBL_NEXT_WEEK' => '下周',
    'LBL_NEXT_MONDAY' => '下周一',
    'LBL_NEXT_FRIDAY' => '下周五',
    'LBL_TWO_WEEKS' => '兩周',
    'LBL_NEXT_MONTH' => '下月',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => '下個月第一天',
    'LBL_THREE_MONTHS' => '三個月',
    'LBL_SIXMONTHS' => '兩個月',
    'LBL_NEXT_YEAR' => '明年',

    //Datetimecombo fields
    'LBL_HOURS' => '時',
    'LBL_MINUTES' => '分',
    'LBL_MERIDIEM' => '正午',
    'LBL_DATE' => '日期型',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => '自動刷新',

    'LBL_DURATION_DAY' => '天',
    'LBL_DURATION_HOUR' => '小時',
    'LBL_DURATION_MINUTE' => '分鐘',
    'LBL_DURATION_DAYS' => '天數',
    'LBL_DURATION_HOURS' => '期間(小時)',
    'LBL_DURATION_MINUTES' => '期間(分鐘)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => '選擇月份',
    'LBL_ENTER_YEAR' => '輸入年',
    'LBL_ENTER_VALID_YEAR' => '請輸入一個有效的年份',

    //File write error label
    'ERR_FILE_WRITE' => '錯誤: 無法寫入文件 {0}. 請檢查伺服器配置.',
    'ERR_FILE_NOT_FOUND' => '錯誤: 無法載入文件 {0}. 請檢查伺服器配置.',

    'LBL_AND' => '和',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => '外部來源的檔案',
    'LBL_EXTERNAL_SECURITY_LEVEL' => '安全性',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"這是一個範例匯入檔，用來提供要被匯入的檔案裡面預期應該有的內容。"
"該檔案是以逗號分隔的csv檔案，使用雙引號當作欄位辨識符號。"

"如您所見，表頭列在檔案的最頂端，並且包含欄位標籤。"
"這些標籤用在將檔案中的資料對應到應用程式中的欄位。"

"提示： 資料庫名稱也可被用在表頭列。當您使用phpMyAdmin或其他資料庫工具來產生要匯入的匯出資料時很實用。"
"匯入資料時是按照表頭列來分配對應的欄位，因此行順序並不會很精準。"

"若要用此檔案當作範本，請按照以下步驟："
"1. 刪除範例資料列"
"2. 刪除您正在閱讀的說明文件"
"3. 按對應的行列將您的資料輸入"
"4. 儲存資料到您系統上的一個可知位置"
"5. 在應用程式的動作選單中點選匯入並選擇上傳檔案"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => '沒有新的通知',
    'LBL_ALT_SORT_DESC' => '降序',
    'LBL_ALT_SORT_ASC' => '升序',
    'LBL_ALT_SORT' => '排序',
    'LBL_ALT_SHOW_OPTIONS' => '顯示選項',
    'LBL_ALT_HIDE_OPTIONS' => '隱藏選項',
    'LBL_ALT_MOVE_COLUMN_LEFT' => '把選中的記錄移動到左側列表',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => '把選中的記錄移動到右側列表',
    'LBL_ALT_MOVE_COLUMN_UP' => '把選中的記錄靠前顯示',
    'LBL_ALT_MOVE_COLUMN_DOWN' => '把選中的記錄靠後顯示',
    'LBL_ALT_INFO' => '資訊',
    'MSG_DUPLICATE' => '將要創建的記錄 {0} ，可能跟已有記錄 {0} 重覆。記錄 {1} 含有相同的名字，如下所示。<br>點擊創建 {1} 來創建一個新的 {0}, 或者從下方列表選擇一個已存在的 {0} 。',
    'MSG_SHOW_DUPLICATES' => '將要創建的記錄 {0} ，可能跟已有記錄 {0} 重覆。 {1} 含有相同的名字，如下所示。 點擊保存將創建一個新的 {0} ，或者點擊取消返回模組{0}，不創建新紀錄。',
    'LBL_EMAIL_TITLE' => '電子郵件地址',
    'LBL_EMAIL_OPT_TITLE' => '拒絕收信電子郵件',
    'LBL_EMAIL_INV_TITLE' => '無效的電子郵件位址',
    'LBL_EMAIL_PRIM_TITLE' => '使用作為主要電子郵件',
    'LBL_SELECT_ALL_TITLE' => '全選',
    'LBL_SELECT_THIS_ROW_TITLE' => '選擇該行',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => '錯誤: 上傳時發生錯誤。 錯誤編號{0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => '錯誤: 上傳時發生錯誤。 錯誤編號{0} - {1}. 最大上傳大小： {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => '錯誤: 上傳時發生錯誤，請聯繫管理員解決。',
    'UPLOAD_MAXIMUM_EXCEEDED' => '上傳大小 ({0} bytes) 超出了最大限制: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => '錯誤發生。請刷新您的頁面，然後重試。',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => '編輯',
    'LBL_EDIT_BUTTON_TITLE' => '編輯',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => '複製',
    'LBL_DUPLICATE_BUTTON_TITLE' => '複製',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => '刪除',
    'LBL_DELETE_BUTTON_TITLE' => '刪除',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => '動作',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => '儲存',
    'LBL_SAVE_BUTTON_TITLE' => '儲存',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => '取消',
    'LBL_CANCEL_BUTTON_TITLE' => '取消',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => '連接器中的 {0} 配置不正確，無法使用。',
    'ERR_SUHOSIN' => '上傳被 Suhosin 阻擋，請將 &quot;upload&quot; 添加到 suhosin.executor.include.whitelist (詳細資訊見 suitecrm.log)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => '伺服器未正確回應',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => '報價單',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => '銷售價格',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => '手動',
        '5' => '每5分鐘',
        '15' => '每 15 分鐘',
        '30' => '每 30 分鐘',
        '60' => '每小時',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => '提醒是空的或不正確。',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => '未設定彈出提醒或電子郵件提醒。',
    'ERR_NO_INVITEES_FOR_REMINDER' => '沒有設定自動提醒的受邀者。',
    'LBL_DELETE_REMINDER_CONFIRM' => '此提醒並未包含任何被邀請者，您是否想要刪除這個提醒？',
    'LBL_DELETE_REMINDER' => '刪除提醒',
    'LBL_OK' => '確定',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => '選擇行',
    'LBL_COLUMN_CHOOSER' => '欄選取器',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => '儲存更改',
    'LBL_DISPLAYED' => '已顯示',
    'LBL_HIDDEN' => '隱藏',
    'ERR_EMPTY_COLUMNS_LIST' => '至少需要一個元素',

    'LBL_FILTER_HEADER_TITLE' => '過濾條件',

    'LBL_CATEGORY' => '類別',
    'LBL_LIST_CATEGORY' => '類別',
    'ERR_FACTOR_TPL_INVALID' => '驗證訊息無效, 請與管理員聯繫。',
    'LBL_SUBTHEMES' => '樣式',
    'LBL_SUBTHEME_OPTIONS_DAWN' => '清晨',
    'LBL_SUBTHEME_OPTIONS_DAY' => '日',
    'LBL_SUBTHEME_OPTIONS_DUSK' => '黃昏',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => '晚上',
    'LBL_SUBTHEME_OPTIONS_NOON' => '中午',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => '捨棄草稿',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => '此操作會刪除這個電子郵件，你想繼續嗎？',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => '撰寫結束',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => '關閉撰寫對話方塊橫候, 所有已輸入的資訊都將遺失, 您想繼續嗎？',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => '套用Email範本',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => '此操作將會覆蓋電子郵件內容及主旨欄位，你想繼續嗎？',

    'LBL_CONFIRM_OPT_IN_TITLE' => '確認參加',
    'LBL_OPT_IN_TITLE' => '選擇參加',
    'LBL_CONFIRM_OPT_IN_DATE' => '確認參加日期',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => '確認參加發送日期',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => '確認參加失效日期',
    'LBL_CONFIRM_OPT_IN_TOKEN' => '確認參加標記',
    'ERR_OPT_IN_TPL_NOT_SET' => '未配置 "參加電子郵件" 範本。請在電子郵件設定中設置。',
    'ERR_OPT_IN_RELATION_INCORRECT' => '選擇參加需要電子郵件與客戶/聯絡人/潛在目標/目標之間的關聯',

    'LBL_SECURITYGROUP_NONINHERITABLE' => '非可繼承的群組',
    'LBL_PRIMARY_GROUP' => "主群組",

    // footer
    'LBL_SUITE_TOP' => '返回頂端',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => '重設密碼',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => '發送確認選擇參加的電子郵件',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => '確認參加電子郵件只發送給客戶/聯絡人/潛在客戶/未來目標',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => '確認參加電子郵件發送已停用，可在電子郵件設定啟用或與您的管理員聯繫.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => '確認參加電子郵件發送不可行，因為此聯絡人無主要電子郵件',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => '確認參加電子郵件發送失敗',
    'LBL_CONFIRM_EMAIL_SENT' => '確認參加電子郵件發送成功',
);

$app_list_strings['moduleList']['Library'] = '圖書館';
$app_list_strings['moduleList']['EmailAddresses'] = '電子郵箱地址';
$app_list_strings['project_priority_default'] = '中';
$app_list_strings['project_priority_options'] = array(
    'High' => '高',
    'Medium' => '中',
    'Low' => '低',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => '同意',
    'contract' => '合約',
    'legal_obligation' => '法律義務',
    'protection_of_interest' => '保護利益',
    'public_interest' => '公共利益',
    'legitimate_interest' => '合法利益',
    'withdrawn' => '撤回',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => '網站',
    'phone' => '電話',
    'given_to_user' => '用户管理',
    'email' => '電子郵件',
    'third_party' => '第三方',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = '知識庫';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => '阿布扎比',
    'ADEN' => '亞丁',
    'AFGHANISTAN' => '阿富汗伊斯蘭共和國',
    'ALBANIA' => '阿爾巴尼亞',
    'ALGERIA' => '阿爾及利亞',
    'AMERICAN SAMOA' => '美屬薩摩亞',
    'ANDORRA' => '安道爾',
    'ANGOLA' => '安哥拉',
    'ANTARCTICA' => '南極洲',
    'ANTIGUA' => '安提瓜',
    'ARGENTINA' => '阿根廷',
    'ARMENIA' => '亞美尼亞',
    'ARUBA' => '阿魯巴',
    'AUSTRALIA' => '澳大利亞',
    'AUSTRIA' => '奧地利',
    'AZERBAIJAN' => '亞塞拜然',
    'BAHAMAS' => '巴哈馬',
    'BAHRAIN' => '巴林',
    'BANGLADESH' => '孟加拉',
    'BARBADOS' => '巴貝多',
    'BELARUS' => '白俄羅斯',
    'BELGIUM' => '比利時',
    'BELIZE' => '伯里茲',
    'BENIN' => '貝南',
    'BERMUDA' => '百幕達',
    'BHUTAN' => '不丹',
    'BOLIVIA' => '玻利維亞',
    'BOSNIA' => '波斯尼亞',
    'BOTSWANA' => '波札那',
    'BOUVET ISLAND' => '布維島',
    'BRAZIL' => '巴西',
    'BRITISH ANTARCTICA TERRITORY' => '英國南極洲領土',
    'BRITISH INDIAN OCEAN TERRITORY' => '英屬印度洋領地',
    'BRITISH VIRGIN ISLANDS' => '英屬維爾京群島',
    'BRITISH WEST INDIES' => '英屬西印度群島',
    'BRUNEI' => '汶萊',
    'BULGARIA' => '保加利亞',
    'BURKINA FASO' => '布吉納法索',
    'BURUNDI' => '蒲隆地',
    'CAMBODIA' => '柬埔寨',
    'CAMEROON' => '喀麥隆',
    'CANADA' => '加拿大',
    'CANAL ZONE' => '運河區',
    'CANARY ISLAND' => '迦納利島',
    'CAPE VERDI ISLANDS' => '哥連臣角威爾第群島',
    'CAYMAN ISLANDS' => '開曼群島',
    'CHAD' => '查德',
    'CHANNEL ISLAND UK' => '頻道島屋',
    'CHILE' => '智力',
    'CHINA' => '中國',
    'CHRISTMAS ISLAND' => '聖誕島',
    'COCOS (KEELING) ISLAND' => '科科斯（基林）島',
    'COLOMBIA' => '哥倫比亞',
    'COMORO ISLANDS' => '葛摩群島',
    'CONGO' => '剛果',
    'CONGO KINSHASA' => '剛果金沙薩',
    'COOK ISLANDS' => '庫克群島',
    'COSTA RICA' => '哥斯大黎加',
    'CROATIA' => '克羅埃西亞',
    'CUBA' => '古巴',
    'CURACAO' => '庫拉索',
    'CYPRUS' => '塞普勒斯',
    'CZECH REPUBLIC' => '捷克共和國',
    'DAHOMEY' => '達荷美',
    'DENMARK' => '丹麥',
    'DJIBOUTI' => '吉布地',
    'DOMINICA' => '多米尼亞',
    'DOMINICAN REPUBLIC' => '多明尼加共和國',
    'DUBAI' => '迪拜',
    'ECUADOR' => '厄瓜多',
    'EGYPT' => '埃及',
    'EL SALVADOR' => '薩爾瓦多',
    'EQUATORIAL GUINEA' => '赤道幾內亞',
    'ESTONIA' => '愛沙尼亞',
    'ETHIOPIA' => '衣索比亞',
    'FAEROE ISLANDS' => '法羅群島',
    'FALKLAND ISLANDS' => '福克蘭群島',
    'FIJI' => '斐濟',
    'FINLAND' => '芬蘭',
    'FRANCE' => '法國',
    'FRENCH GUIANA' => '法屬蓋亞那',
    'FRENCH POLYNESIA' => '法屬玻利尼西亞',
    'GABON' => '加彭',
    'GAMBIA' => '甘比亞',
    'GEORGIA' => '喬治亞',
    'GERMANY' => '德國',
    'GHANA' => '迦納',
    'GIBRALTAR' => '直布羅陀',
    'GREECE' => '希臘',
    'GREENLAND' => '格林蘭',
    'GUADELOUPE' => '哥德洛普',
    'GUAM' => '關島',
    'GUATEMALA' => '瓜地馬拉',
    'GUINEA' => '幾內亞',
    'GUYANA' => '蓋亞那',
    'HAITI' => '海地',
    'HONDURAS' => '宏都拉斯',
    'HONG KONG' => '香港',
    'HUNGARY' => '匈牙利',
    'ICELAND' => '冰島',
    'IFNI' => '伊夫尼',
    'INDIA' => '印度',
    'INDONESIA' => '印度尼西亞',
    'IRAN' => '伊朗',
    'IRAQ' => '伊拉克',
    'IRELAND' => '愛爾蘭',
    'ISRAEL' => '以色列',
    'ITALY' => '義大利',
    'IVORY COAST' => '象牙海岸',
    'JAMAICA' => '牙買加',
    'JAPAN' => '日本',
    'JORDAN' => '約旦',
    'KAZAKHSTAN' => '哈薩克',
    'KENYA' => '肯亞',
    'KOREA' => '韓國',
    'KOREA, SOUTH' => '南朝鮮',
    'KUWAIT' => '科威特',
    'KYRGYZSTAN' => '吉爾吉斯斯坦',
    'LAOS' => '寮國',
    'LATVIA' => '拉托維亞',
    'LEBANON' => '黎巴嫩',
    'LEEWARD ISLANDS' => '背風群島',
    'LESOTHO' => '賴索托',
    'LIBYA' => '利比亞',
    'LIECHTENSTEIN' => '列支敦斯登',
    'LITHUANIA' => '立陶宛',
    'LUXEMBOURG' => '盧森堡',
    'MACAO' => '澳門',
    'MACEDONIA' => '馬其頓',
    'MADAGASCAR' => '馬達加斯加',
    'MALAWI' => '馬拉維',
    'MALAYSIA' => '馬來西亞',
    'MALDIVES' => '馬爾地夫',
    'MALI' => '馬裡',
    'MALTA' => '馬爾他',
    'MARTINIQUE' => '馬提尼克',
    'MAURITANIA' => '茅利塔尼亞',
    'MAURITIUS' => '模里西斯',
    'MELANESIA' => '美拉尼西亞',
    'MEXICO' => '墨西哥',
    'MOLDOVIA' => '摩爾多瓦',
    'MONACO' => '摩納哥',
    'MONGOLIA' => '內蒙古',
    'MOROCCO' => '摩洛哥',
    'MOZAMBIQUE' => '莫三比克',
    'MYANAMAR' => '緬甸',
    'NAMIBIA' => '納米比亞',
    'NEPAL' => '尼泊爾',
    'NETHERLANDS' => '荷蘭共和國',
    'NETHERLANDS ANTILLES' => '荷屬安的列斯群島',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => '荷屬安的列斯群島中立區',
    'NEW CALADONIA' => '新加多利亞',
    'NEW HEBRIDES' => '新赫布里底',
    'NEW ZEALAND' => '紐西蘭',
    'NICARAGUA' => '尼加拉瓜',
    'NIGER' => '尼日',
    'NIGERIA' => '奈及利亞',
    'NORFOLK ISLAND' => '諾福克島',
    'NORWAY' => '挪威',
    'OMAN' => '阿曼',
    'OTHER' => '其它',
    'PACIFIC ISLAND' => '太平洋島國',
    'PAKISTAN' => '巴基斯坦',
    'PANAMA' => '巴拿馬',
    'PAPUA NEW GUINEA' => '巴布亞紐幾內亞',
    'PARAGUAY' => '巴拉圭',
    'PERU' => '秘魯',
    'PHILIPPINES' => '菲律賓群島',
    'POLAND' => '波蘭',
    'PORTUGAL' => '葡萄牙',
    'PORTUGUESE TIMOR' => '東帝汶',
    'PUERTO RICO' => '波多黎各',
    'QATAR' => '卡達',
    'REPUBLIC OF BELARUS' => '白俄羅斯共和國',
    'REPUBLIC OF SOUTH AFRICA' => '南非共和國',
    'REUNION' => '留尼汪',
    'ROMANIA' => '羅馬尼亞',
    'RUSSIA' => '前蘇聯',
    'RWANDA' => '盧安達',
    'RYUKYU ISLANDS' => '琉球群島',
    'SABAH' => '沙巴',
    'SAN MARINO' => '聖馬利諾',
    'SAUDI ARABIA' => '沙烏地阿拉伯',
    'SENEGAL' => '塞內加爾',
    'SERBIA' => '塞爾維亞',
    'SEYCHELLES' => '塞舌耳',
    'SIERRA LEONE' => '獅子山',
    'SINGAPORE' => '新加坡',
    'SLOVAKIA' => '斯洛伐克',
    'SLOVENIA' => '斯洛維尼亞',
    'SOMALILIAND' => '索馬利亞蘭',
    'SOUTH AFRICA' => '南非',
    'SOUTH YEMEN' => '南葉門',
    'SPAIN' => '西班牙',
    'SPANISH SAHARA' => '西班牙撒哈拉',
    'SRI LANKA' => '斯裡蘭卡',
    'ST. KITTS AND NEVIS' => '聖.基茨和尼維斯',
    'ST. LUCIA' => '聖.露西婭',
    'SUDAN' => '蘇丹',
    'SURINAM' => '蘇利南',
    'SW AFRICA' => '西南非洲',
    'SWAZILAND' => '史瓦濟蘭',
    'SWEDEN' => '瑞典',
    'SWITZERLAND' => '瑞士',
    'SYRIA' => '敘利亞',
    'TAIWAN' => '臺灣',
    'TAJIKISTAN' => '塔吉克',
    'TANZANIA' => '坦尚尼亞',
    'THAILAND' => '泰國',
    'TONGA' => '湯加',
    'TRINIDAD' => '專案熾暄',
    'TUNISIA' => '突尼西亞',
    'TURKEY' => '土耳其',
    'UGANDA' => '烏乾達',
    'UKRAINE' => '烏克蘭',
    'UNITED ARAB EMIRATES' => '阿拉伯聯合大公國',
    'UNITED KINGDOM' => '聯合王國',
    'URUGUAY' => '  烏拉圭 ',
    'US PACIFIC ISLAND' => '美軍太平洋島嶼',
    'US VIRGIN ISLANDS' => '美屬維爾京群島',
    'USA' => '美國',
    'UZBEKISTAN' => '烏茲別克',
    'VANUATU' => '  萬那杜 ',
    'VATICAN CITY' => '梵蒂岡城',
    'VENEZUELA' => '委內瑞拉',
    'VIETNAM' => '越南',
    'WAKE ISLAND' => '威克島',
    'WEST INDIES' => '西印度群島',
    'WESTERN SAHARA' => '西撒哈拉',
    'YEMEN' => '葉門',
    'ZAIRE' => '扎伊爾',
    'ZAMBIA' => '尚比亞',
    'ZIMBABWE' => '辛巴威',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (臺灣和香港)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (微軟西里爾)',
    'CP1252' => 'CP1252 (微軟西歐和美國)',
    'EUC-CN' => 'EUC-CN (繁體中文GB2312)',
    'EUC-JP' => 'EUC-JP (Unix日本)',
    'EUC-KR' => 'EUC-KR (韓國)',
    'EUC-TW' => 'EUC-TW (臺灣)',
    'ISO-2022-JP' => 'ISO-2022-JP (日本)',
    'ISO-2022-KR' => 'ISO-2022-KR (韓國)',
    'ISO-8859-1' => 'ISO-8859-1 (西歐和美國)',
    'ISO-8859-2' => 'ISO-8859-2 (中東歐)',
    'ISO-8859-3' => 'ISO-8859-3 (拉丁3)',
    'ISO-8859-4' => 'ISO-8859-4 (拉丁4)',
    'ISO-8859-5' => 'ISO-8859-5 (西里爾)',
    'ISO-8859-6' => 'ISO-8859-6 (阿拉伯)',
    'ISO-8859-7' => 'ISO-8859-7 (希臘)',
    'ISO-8859-8' => 'ISO-8859-8 (希伯來)',
    'ISO-8859-9' => 'ISO-8859-9 (拉丁5)',
    'ISO-8859-10' => 'ISO-8859-10 (拉丁6)',
    'ISO-8859-13' => 'ISO-8859-13 (拉丁7)',
    'ISO-8859-14' => 'ISO-8859-14 (拉丁8)',
    'ISO-8859-15' => 'ISO-8859-15 (拉丁9)',
    'KOI8-R' => 'KOI8-R (西里爾俄羅斯)',
    'KOI8-U' => 'KOI8-U (西里爾烏克蘭)',
    'SJIS' => 'SJIS (微軟日本)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => '非洲/阿爾及爾',
    'Africa/Luanda' => '非洲/羅安達',
    'Africa/Porto-Novo' => '非洲/波多諾伏',
    'Africa/Gaborone' => '非洲/哈博羅內',
    'Africa/Ouagadougou' => '非洲/瓦加杜古',
    'Africa/Bujumbura' => '非洲/布瓊布拉',
    'Africa/Douala' => '非洲/杜阿拉',
    'Atlantic/Cape_Verde' => '大西洋/維德角',
    'Africa/Bangui' => '非洲/班吉',
    'Africa/Ndjamena' => '非洲/恩賈梅納',
    'Indian/Comoro' => '印度洋/葛摩',
    'Africa/Kinshasa' => '非洲/金沙薩',
    'Africa/Lubumbashi' => '非洲/盧本巴希',
    'Africa/Brazzaville' => '非洲/布拉柴維爾',
    'Africa/Abidjan' => '非洲/阿比讓',
    'Africa/Djibouti' => '非洲/吉布地',
    'Africa/Cairo' => '非洲/開羅',
    'Africa/Malabo' => '非洲/馬拉博',
    'Africa/Asmera' => '非洲/阿斯馬拉',
    'Africa/Addis_Ababa' => '非洲/亞的斯亞貝巴',
    'Africa/Libreville' => '非洲/利伯維爾',
    'Africa/Banjul' => '非洲/班珠爾',
    'Africa/Accra' => '非洲/阿克拉',
    'Africa/Conakry' => '非洲/科納克裡',
    'Africa/Bissau' => '非洲/比紹',
    'Africa/Nairobi' => '非洲/內羅畢',
    'Africa/Maseru' => '非洲/馬塞盧',
    'Africa/Monrovia' => '非洲/蒙羅維亞',
    'Africa/Tripoli' => '非洲/的黎波里',
    'Indian/Antananarivo' => '印度洋/塔那那利佛',
    'Africa/Blantyre' => '非洲/布蘭太爾',
    'Africa/Bamako' => '非洲/巴馬科',
    'Africa/Nouakchott' => '非洲/努瓦克肖特',
    'Indian/Mauritius' => '印度洋/模里西斯',
    'Indian/Mayotte' => '印度洋/馬約特',
    'Africa/Casablanca' => '非洲/卡薩布蘭卡',
    'Africa/El_Aaiun' => '非洲/阿尤恩',
    'Africa/Maputo' => '非洲/馬普托',
    'Africa/Windhoek' => '非洲/溫得和克',
    'Africa/Niamey' => '非洲/尼亞美',
    'Africa/Lagos' => '非洲/拉各斯',
    'Indian/Reunion' => '印度洋/留尼汪島',
    'Africa/Kigali' => '非洲/基加利',
    'Atlantic/St_Helena' => '大西洋/聖赫勒拿島',
    'Africa/Sao_Tome' => '非洲/聖多美',
    'Africa/Dakar' => '非洲/達喀爾',
    'Indian/Mahe' => '印度洋/馬埃',
    'Africa/Freetown' => '非洲/弗里敦',
    'Africa/Mogadishu' => '非洲/摩加迪沙',
    'Africa/Johannesburg' => '非洲/約翰內斯堡',
    'Africa/Khartoum' => '非洲/喀土穆',
    'Africa/Mbabane' => '非洲/姆巴巴內',
    'Africa/Dar_es_Salaam' => '非洲/達累斯薩拉姆',
    'Africa/Lome' => '非洲/洛美',
    'Africa/Tunis' => '非洲/突尼西亞',
    'Africa/Kampala' => '非洲/坎帕拉',
    'Africa/Lusaka' => '非洲/盧薩卡',
    'Africa/Harare' => '非洲/哈爾',
    'Antarctica/Casey' => '南極洲/凱西站',
    'Antarctica/Davis' => '南極洲/戴維斯站',
    'Antarctica/Mawson' => '南極洲/莫森站',
    'Indian/Kerguelen' => '印度洋/克爾格倫群島',
    'Antarctica/DumontDUrville' => '南極洲/都蒙特得烏爾維爾站',
    'Antarctica/Syowa' => '南極洲/斯由瓦站',
    'Antarctica/Vostok' => '南極洲/東方站',
    'Antarctica/Rothera' => '南極洲/羅西拉',
    'Antarctica/Palmer' => '南極洲/帕瑪',
    'Antarctica/McMurdo' => '南極洲/麥克默多站',
    'Asia/Kabul' => '亞洲/喀布爾',
    'Asia/Yerevan' => '亞洲/埃里溫',
    'Asia/Baku' => '亞洲/巴庫',
    'Asia/Bahrain' => '亞洲/巴林',
    'Asia/Dhaka' => '亞洲/達卡',
    'Asia/Thimphu' => '亞洲/廷布',
    'Indian/Chagos' => '印度洋/查戈斯群島',
    'Asia/Brunei' => '亞洲/汶萊',
    'Asia/Rangoon' => '亞洲/仰光',
    'Asia/Phnom_Penh' => '亞洲/金邊',
    'Asia/Beijing' => '亞洲/北京',
    'Asia/Harbin' => '亞洲/哈爾濱',
    'Asia/Shanghai' => '亞洲/上海',
    'Asia/Chongqing' => '亞洲/重慶',
    'Asia/Urumqi' => '亞洲/烏魯木齊',
    'Asia/Kashgar' => '亞洲/喀什',
    'Asia/Hong_Kong' => '亞洲/香港',
    'Asia/Taipei' => '亞洲/臺北',
    'Asia/Macau' => '亞洲/澳門',
    'Asia/Nicosia' => '亞洲/尼科西亞',
    'Asia/Tbilisi' => '亞洲/梯比利斯',
    'Asia/Dili' => '亞洲/帝力',
    'Asia/Calcutta' => '亞洲/加爾各答',
    'Asia/Jakarta' => '亞洲/雅加達',
    'Asia/Pontianak' => '亞洲/坤甸',
    'Asia/Makassar' => '亞洲/望加錫',
    'Asia/Jayapura' => '亞洲/查亞普拉',
    'Asia/Tehran' => '亞洲/德黑蘭',
    'Asia/Baghdad' => '亞洲/巴格達',
    'Asia/Jerusalem' => '亞洲/耶路撒冷',
    'Asia/Tokyo' => '亞洲/東京',
    'Asia/Amman' => '亞洲/安曼',
    'Asia/Almaty' => '亞洲/阿拉木圖',
    'Asia/Qyzylorda' => '亞洲/奧爾達',
    'Asia/Aqtobe' => '亞洲/阿克托博',
    'Asia/Aqtau' => '亞洲/阿克陶',
    'Asia/Oral' => '亞洲/烏拉爾',
    'Asia/Bishkek' => '亞洲/比什凱克',
    'Asia/Seoul' => '亞洲/漢城',
    'Asia/Pyongyang' => '亞洲/平壤',
    'Asia/Kuwait' => '亞洲/科威特',
    'Asia/Vientiane' => '亞洲/萬象',
    'Asia/Beirut' => '亞洲/貝魯特',
    'Asia/Kuala_Lumpur' => '亞洲/吉隆坡',
    'Asia/Kuching' => '亞洲/古晉',
    'Indian/Maldives' => '印度洋/馬爾地夫',
    'Asia/Hovd' => '亞洲/霍伏得',
    'Asia/Ulaanbaatar' => '亞洲/烏蘭巴托',
    'Asia/Choibalsan' => '亞洲/喬巴山',
    'Asia/Katmandu' => '亞洲/加德滿都',
    'Asia/Muscat' => '亞洲/馬斯喀特',
    'Asia/Karachi' => '亞洲/卡拉奇',
    'Asia/Gaza' => '亞洲/加沙',
    'Asia/Manila' => '亞洲/馬尼拉',
    'Asia/Qatar' => '亞洲/卡達',
    'Asia/Riyadh' => '亞洲/利雅得',
    'Asia/Singapore' => '亞洲/新加坡',
    'Asia/Colombo' => '亞洲/科倫坡',
    'Asia/Damascus' => '亞洲/大馬士革',
    'Asia/Dushanbe' => '亞洲/杜尚別',
    'Asia/Bangkok' => '亞洲/曼谷',
    'Asia/Ashgabat' => '亞洲/阿什哈巴德',
    'Asia/Dubai' => '亞洲/迪拜',
    'Asia/Samarkand' => '亞洲/撒馬爾罕',
    'Asia/Tashkent' => '亞洲/塔什乾',
    'Asia/Saigon' => '亞洲/西貢',
    'Asia/Aden' => '亞洲/亞丁',
    'Australia/Darwin' => '澳大利亞/達爾文',
    'Australia/Perth' => '澳大利亞/佩思',
    'Australia/Brisbane' => '澳大利亞/布裡斯班',
    'Australia/Lindeman' => '澳大利亞/林德曼島',
    'Australia/Adelaide' => '澳大利亞/阿得雷德',
    'Australia/Hobart' => '澳大利亞/霍巴特',
    'Australia/Currie' => '澳大利亞/柯里',
    'Australia/Melbourne' => '澳大利亞/墨爾本',
    'Australia/Sydney' => '澳大利亞/悉尼',
    'Australia/Broken_Hill' => '澳大利亞/斷山',
    'Indian/Christmas' => '印度洋/聖誕島',
    'Pacific/Rarotonga' => '太平洋/拉羅湯加島',
    'Indian/Cocos' => '印度洋/可可斯島',
    'Pacific/Fiji' => '太平洋/斐濟',
    'Pacific/Gambier' => '太平洋/甘比亞島',
    'Pacific/Marquesas' => '太平洋/馬爾薩斯群島',
    'Pacific/Tahiti' => '太平洋/塔希提島',
    'Pacific/Guam' => '太平洋/關島',
    'Pacific/Tarawa' => '太平洋/塔拉瓦島',
    'Pacific/Enderbury' => '太平洋/恩的伯利',
    'Pacific/Kiritimati' => '太平洋/基里提馬蒂',
    'Pacific/Saipan' => '太平洋/塞班島',
    'Pacific/Majuro' => '太平洋/馬朱羅',
    'Pacific/Kwajalein' => '太平洋/卡瓦加蘭',
    'Pacific/Truk' => '太平洋/特魯克群島',
    'Pacific/Pohnpei' => '太平洋/波納佩',
    'Pacific/Kosrae' => '太平洋/庫賽埃',
    'Pacific/Nauru' => '太平洋/諾魯',
    'Pacific/Noumea' => '太平洋/努美阿',
    'Pacific/Auckland' => '太平洋/奧克蘭',
    'Pacific/Chatham' => '太平洋/查塔姆',
    'Pacific/Niue' => '太平洋/扭埃',
    'Pacific/Norfolk' => '太平洋/諾福克',
    'Pacific/Palau' => '太平洋/帛琉',
    'Pacific/Port_Moresby' => '太平洋/莫爾茲比港',
    'Pacific/Pitcairn' => '太平洋/皮特克恩島',
    'Pacific/Pago_Pago' => '太平洋/帕果帕果',
    'Pacific/Apia' => '太平洋/阿批亞',
    'Pacific/Guadalcanal' => '太平洋/瓜達爾卡納爾島',
    'Pacific/Fakaofo' => '太平洋/法考福',
    'Pacific/Tongatapu' => '太平洋/湯加塔埔',
    'Pacific/Funafuti' => '太平洋/富納富提',
    'Pacific/Johnston' => '太平洋/約翰斯頓島',
    'Pacific/Midway' => '太平洋/中途島',
    'Pacific/Wake' => '太平洋/威克島',
    'Pacific/Efate' => '太平洋/埃法特',
    'Pacific/Wallis' => '太平洋/瓦利斯島',
    'Europe/London' => '歐洲/倫敦',
    'Europe/Dublin' => '歐洲/都伯林',
    'WET' => '西部歐洲時間',
    'CET' => '中部歐洲時間',
    'MET' => '中部歐洲時間',
    'EET' => '歐洲東部時間',
    'Europe/Tirane' => '歐洲/地拉那',
    'Europe/Andorra' => '歐洲/安道爾',
    'Europe/Vienna' => '歐洲/維也納',
    'Europe/Minsk' => '歐洲/明斯克',
    'Europe/Brussels' => '歐洲/布魯塞爾',
    'Europe/Sofia' => '歐洲/索非亞',
    'Europe/Prague' => '歐洲/布拉格',
    'Europe/Copenhagen' => '歐洲/哥本哈根',
    'Atlantic/Faeroe' => '大西洋/法羅群島',
    'America/Danmarkshavn' => '美洲/格陵蘭東北城市',
    'America/Scoresbysund' => '美洲/斯格裡斯比桑得',
    'America/Godthab' => '美洲/戈德霍普',
    'America/Thule' => '美洲/圖列',
    'Europe/Tallinn' => '歐洲/塔林',
    'Europe/Helsinki' => '歐洲/赫爾辛基',
    'Europe/Paris' => '歐洲/巴黎',
    'Europe/Berlin' => '歐洲/伯林',
    'Europe/Gibraltar' => '歐洲/直布羅陀',
    'Europe/Athens' => '歐洲/雅典',
    'Europe/Budapest' => '歐洲/佈達佩斯',
    'Atlantic/Reykjavik' => '大西洋/雷克雅未克',
    'Europe/Rome' => '歐洲/羅馬',
    'Europe/Riga' => '歐洲/裡加',
    'Europe/Vaduz' => '歐洲/瓦杜茲',
    'Europe/Vilnius' => '歐洲/維爾紐斯',
    'Europe/Luxembourg' => '歐洲/盧森堡',
    'Europe/Malta' => '歐洲/馬爾他',
    'Europe/Chisinau' => '歐洲/基希訥烏',
    'Europe/Monaco' => '歐洲/摩納哥',
    'Europe/Amsterdam' => '歐洲/阿姆斯特丹',
    'Europe/Oslo' => '歐洲/奧斯陸',
    'Europe/Warsaw' => '歐洲/華沙',
    'Europe/Lisbon' => '歐洲/裡斯本',
    'Atlantic/Azores' => '大西洋/亞速爾',
    'Atlantic/Madeira' => '大西洋/馬德拉群島',
    'Europe/Bucharest' => '歐洲/布加勒斯特',
    'Europe/Kaliningrad' => '歐洲/加裡寧格勒',
    'Europe/Moscow' => '歐洲/莫斯科',
    'Europe/Samara' => '歐洲/薩馬拉',
    'Asia/Yekaterinburg' => '亞洲/葉卡捷琳堡',
    'Asia/Omsk' => '亞洲/鄂木斯克',
    'Asia/Novosibirsk' => '亞洲/諾夫哥羅德',
    'Asia/Krasnoyarsk' => '亞洲/克拉斯諾亞爾斯克',
    'Asia/Irkutsk' => '亞洲/伊爾庫茨克',
    'Asia/Yakutsk' => '亞洲/雅庫次克',
    'Asia/Vladivostok' => '亞洲/符拉迪沃斯托克',
    'Asia/Sakhalin' => '亞洲/薩哈林',
    'Asia/Magadan' => '亞洲/瑪格丹',
    'Asia/Kamchatka' => '亞洲/勘察加',
    'Asia/Anadyr' => '亞洲/阿納德爾',
    'Europe/Belgrade' => '歐洲/貝爾格萊德',
    'Europe/Madrid' => '歐洲/馬德里',
    'Africa/Ceuta' => '非洲/休達',
    'Atlantic/Canary' => '大西洋/加那利',
    'Europe/Stockholm' => '歐洲/斯德哥爾摩',
    'Europe/Zurich' => '歐洲/蘇黎世',
    'Europe/Istanbul' => '歐洲/伊斯坦布爾',
    'Europe/Kiev' => '歐洲/基輔',
    'Europe/Uzhgorod' => '歐洲/烏茲哥羅德',
    'Europe/Zaporozhye' => '歐洲/扎波羅熱',
    'Europe/Simferopol' => '歐洲/辛菲羅波爾',
    'America/New_York' => '美洲/紐約',
    'America/Chicago' => '美洲/芝加哥',
    'America/North_Dakota/Center' => '美洲/北達科達州/中部',
    'America/Denver' => '美洲/丹佛',
    'America/Los_Angeles' => '美洲/洛杉磯',
    'America/Juneau' => '美洲/朱諾',
    'America/Yakutat' => '美洲/亞庫塔特',
    'America/Anchorage' => '美洲/安科雷齊',
    'America/Nome' => '美洲/諾姆',
    'America/Adak' => '美洲/埃達克',
    'Pacific/Honolulu' => '太平洋/火奴魯魯',
    'America/Phoenix' => '美洲/菲尼克斯',
    'America/Boise' => '美洲/博伊西',
    'America/Indiana/Indianapolis' => '美洲/印第安那/印第安納波利斯',
    'America/Indiana/Marengo' => '美洲/印第安那/馬倫哥',
    'America/Indiana/Knox' => '美洲/印第安那/諾克斯',
    'America/Indiana/Vevay' => '美洲/印第安那/瓦維',
    'America/Kentucky/Louisville' => '美洲/肯塔基/路易斯維爾',
    'America/Kentucky/Monticello' => '美洲/肯塔基/蒙帝塞羅',
    'America/Detroit' => '美洲/底特律',
    'America/Menominee' => '美洲/梅諾米尼',
    'America/St_Johns' => '美洲/聖約翰',
    'America/Goose_Bay' => '美洲/古斯貝',
    'America/Halifax' => '美洲/哈利法克斯',
    'America/Glace_Bay' => '美洲/格雷斯灣',
    'America/Montreal' => '美洲/蒙特利爾',
    'America/Toronto' => '美洲/多倫多',
    'America/Thunder_Bay' => '美洲/桑德貝',
    'America/Nipigon' => '美洲/尼皮岡',
    'America/Rainy_River' => '美洲/多雨河',
    'America/Winnipeg' => '美洲/溫尼伯',
    'America/Regina' => '美洲/里迦納',
    'America/Swift_Current' => '美洲/斯威福特卡潤特',
    'America/Edmonton' => '美洲/埃德蒙頓',
    'America/Vancouver' => '美洲/溫哥華',
    'America/Dawson_Creek' => '美洲/道森溪',
    'America/Pangnirtung' => '美洲/潘尼爾頓',
    'America/Iqaluit' => '美洲/伊魁特',
    'America/Coral_Harbour' => '美洲/珊瑚港',
    'America/Rankin_Inlet' => '美洲/',
    'America/Cambridge_Bay' => '美洲/劍橋灣',
    'America/Yellowknife' => '美洲/黃刀鎮',
    'America/Inuvik' => '美洲/伊努維克',
    'America/Whitehorse' => '美洲/白馬',
    'America/Dawson' => '美洲/道森',
    'America/Cancun' => '美洲/坎昆',
    'America/Merida' => '美洲/梅里達',
    'America/Monterrey' => '美洲/蒙特雷',
    'America/Mexico_City' => '美洲/墨西哥城',
    'America/Chihuahua' => '美洲/奇瓦瓦',
    'America/Hermosillo' => '美洲/埃爾莫西略',
    'America/Mazatlan' => '美洲/馬薩特蘭',
    'America/Tijuana' => '美洲/蒂華納',
    'America/Anguilla' => '美洲/安圭拉',
    'America/Antigua' => '美洲/安提瓜島',
    'America/Nassau' => '美洲/拿騷',
    'America/Barbados' => '美洲/巴貝多',
    'America/Belize' => '美洲/貝裡斯',
    'Atlantic/Bermuda' => '大西洋/百慕大',
    'America/Cayman' => '美洲/開曼',
    'America/Costa_Rica' => '美洲/哥斯大黎加',
    'America/Havana' => '美洲/哈瓦那',
    'America/Dominica' => '美洲/多明尼加',
    'America/Santo_Domingo' => '美洲/聖多明各',
    'America/El_Salvador' => '美洲/薩爾瓦多',
    'America/Grenada' => '美洲/格瑞那達',
    'America/Guadeloupe' => '美洲/瓜德羅普島',
    'America/Guatemala' => '美洲/瓜地馬拉',
    'America/Port-au-Prince' => '美洲/太子港',
    'America/Tegucigalpa' => '美洲/特古西加爾巴',
    'America/Jamaica' => '美洲/牙買加',
    'America/Martinique' => '美洲/馬提尼克島',
    'America/Montserrat' => '美洲/蒙特塞拉特',
    'America/Managua' => '美洲/馬那瓜',
    'America/Panama' => '美洲/巴拿馬',
    'America/Puerto_Rico' => '美洲/波多黎各',
    'America/St_Kitts' => '美洲/聖基茨',
    'America/St_Lucia' => '美洲/聖露西亞',
    'America/Miquelon' => '美洲/密克隆',
    'America/St_Vincent' => '美洲/聖文森特',
    'America/Grand_Turk' => '美洲/大特克島',
    'America/Tortola' => '美洲/托投拉',
    'America/St_Thomas' => '美洲/聖托馬斯',
    'America/Argentina/Buenos_Aires' => '美洲/阿根廷/布宜諾斯艾利斯',
    'America/Argentina/Cordoba' => '美洲/阿根廷/科爾多瓦',
    'America/Argentina/Tucuman' => '美洲/阿根廷/圖庫曼',
    'America/Argentina/La_Rioja' => '美洲/阿根廷/里奧哈',
    'America/Argentina/San_Juan' => '美洲/阿根廷/聖胡安',
    'America/Argentina/Jujuy' => '美洲/阿根廷/胡胡伊',
    'America/Argentina/Catamarca' => '美洲/阿根廷/卡塔馬卡',
    'America/Argentina/Mendoza' => '美洲/阿根廷/門多薩',
    'America/Argentina/Rio_Gallegos' => '美洲/阿根廷/里約熱內盧',
    'America/Argentina/Ushuaia' => '美洲/阿根廷/烏斯懷亞',
    'America/Aruba' => '美洲/阿魯巴',
    'America/La_Paz' => '美洲/拉巴斯',
    'America/Noronha' => '美洲/諾羅尼亞',
    'America/Belem' => '美洲/貝倫',
    'America/Fortaleza' => '美洲/福塔雷薩',
    'America/Recife' => '美洲/累西腓',
    'America/Araguaina' => '美洲/阿拉瓜伊納',
    'America/Maceio' => '美洲/馬塞約',
    'America/Bahia' => '美洲/Bahia',
    'America/Sao_Paulo' => '美洲/聖保羅',
    'America/Campo_Grande' => '美洲/大坎普',
    'America/Cuiaba' => '美洲/庫亞巴',
    'America/Porto_Velho' => '美洲/波多韋柳',
    'America/Boa_Vista' => '美洲/泊亞維斯特',
    'America/Manaus' => '美洲/馬瑙斯',
    'America/Eirunepe' => '美洲/依倫尼貝',
    'America/Rio_Branco' => '美洲/里約布蘭科',
    'America/Santiago' => '美洲/聖地亞哥',
    'Pacific/Easter' => '太平洋/複活節島',
    'America/Bogota' => '美洲/波哥大',
    'America/Curacao' => '美洲/庫拉索',
    'America/Guayaquil' => '美洲/瓜亞基爾',
    'Pacific/Galapagos' => '太平洋/加拉帕戈斯群島',
    'Atlantic/Stanley' => '大西洋/斯坦利',
    'America/Cayenne' => '美洲/卡宴',
    'America/Guyana' => '美洲/蓋亞那',
    'America/Asuncion' => '美洲/亞松森',
    'America/Lima' => '美洲/利馬',
    'Atlantic/South_Georgia' => '大西洋/南喬治亞',
    'America/Paramaribo' => '美洲/帕拉馬裡博',
    'America/Port_of_Spain' => '美洲/西班牙港',
    'America/Montevideo' => '美洲/蒙得維的亞',
    'America/Caracas' => '美洲/加拉加斯',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google聯絡人',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google聯絡人',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => '請求',
    2 => '存取',
    3 => '無效',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => '市場活動',
    'email' => '電子郵件',
    'event' => '事件',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => '市場活動',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => '市場活動',
    'email' => '電子郵件',
    'event' => '事件',
    'system' => '系統',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = '知識庫';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = '知識庫 - 類別';
$app_list_strings['aok_status_list']['Draft'] = '草稿';
$app_list_strings['aok_status_list']['Expired'] = '有效期';
$app_list_strings['aok_status_list']['In_Review'] = '審查中';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = '私有';
$app_list_strings['aok_status_list']['published_public'] = '公共';

$app_list_strings['moduleList']['FP_events'] = '事件';
$app_list_strings['moduleList']['FP_Event_Locations'] = '地點';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = '受邀請';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = '未受邀請';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = '已參加';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = '未參加';
$app_list_strings['fp_event_status_dom']['Accepted'] = '已接受';
$app_list_strings['fp_event_status_dom']['Declined'] = '已拒絕';
$app_list_strings['fp_event_status_dom']['No Response'] = '無回應';

$app_strings['LBL_STATUS_EVENT'] = '邀請狀態';
$app_strings['LBL_ACCEPT_STATUS'] = '接收狀態';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = '當前頁';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = '整個列表';
$app_strings['LBL_LISTVIEW_NONE'] = '取消選擇';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = '索引';

$app_list_strings['moduleList']['AOP_Case_Events'] = '案件事件';
$app_list_strings['moduleList']['AOP_Case_Updates'] = '案件更新';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '= = = 請在這條線上面回復 = = =';


//aop
$app_list_strings['case_state_default_key'] = '開啟中';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => '開啟中',
        'Closed' => '關閉',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => '新建',
        'Open_Assigned' => '已分配',
        'Closed_Closed' => '關閉',
        'Open_Pending Input' => '等待輸入',
        'Closed_Rejected' => '拒絕',
        'Closed_Duplicate' => '複製',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => '單一使用者',
        'Account' => '帳戶使用者',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => '系統默認',
    'singleUser' => '單一使用者',
    'roundRobin' => '循環',
    'leastBusy' => '最不忙碌',
    'random' => '隨機',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = '報表';
$app_list_strings['moduleList']['AOR_Conditions'] = '報表條件';
$app_list_strings['moduleList']['AOR_Charts'] = '報表圖表';
$app_list_strings['moduleList']['AOR_Fields'] = '報表欄位';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'DCE 報告';
$app_list_strings['aor_operator_list']['Equal_To'] = '等於';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = '不等於';
$app_list_strings['aor_operator_list']['Greater_Than'] = '大於';
$app_list_strings['aor_operator_list']['Less_Than'] = '小於';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = '大於等於';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = '小於等於';
$app_list_strings['aor_operator_list']['Contains'] = '包含';
$app_list_strings['aor_operator_list']['Starts_With'] = '開始於';
$app_list_strings['aor_operator_list']['Ends_With'] = '來結束';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = '月-日-年';
$app_list_strings['aor_format_options']['d-m-Y'] = '日-月-年';
$app_list_strings['aor_format_options']['Y/m/d'] = '年/月/日';
$app_list_strings['aor_format_options']['m/d/Y'] = '月/日/年';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = '年.月.日';
$app_list_strings['aor_format_options']['m.d.Y'] = '月.日.年';
$app_list_strings['aor_format_options']['d.m.Y'] = '日.月.年';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = '和';
$app_list_strings['aor_condition_operator_list']['OR'] = '或者';
$app_list_strings['aor_condition_type_list']['Value'] = '值';
$app_list_strings['aor_condition_type_list']['Field'] = '欄位';
$app_list_strings['aor_condition_type_list']['Date'] = '日期型';
$app_list_strings['aor_condition_type_list']['Multi'] = '之一';
$app_list_strings['aor_condition_type_list']['Period'] = '期間';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = '目前使用者';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = '分';
$app_list_strings['aor_date_type_list']['hour'] = '時';
$app_list_strings['aor_date_type_list']['day'] = '天';
$app_list_strings['aor_date_type_list']['week'] = '周';
$app_list_strings['aor_date_type_list']['month'] = '月';
$app_list_strings['aor_date_type_list']['business_hours'] = '工時';
$app_list_strings['aor_date_options']['now'] = '現在';
$app_list_strings['aor_date_options']['field'] = '此欄位';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = '升序';
$app_list_strings['aor_sort_operator']['DESC'] = '降序';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = '合計';
$app_list_strings['aor_function_list']['MIN'] = '最小';
$app_list_strings['aor_function_list']['MAX'] = '最大';
$app_list_strings['aor_function_list']['SUM'] = '總計';
$app_list_strings['aor_function_list']['AVG'] = '平均';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = '合計';
$app_list_strings['aor_total_options']['SUM'] = '總計';
$app_list_strings['aor_total_options']['AVG'] = '平均';
$app_list_strings['aor_chart_types']['bar'] = '柱狀圖表';
$app_list_strings['aor_chart_types']['line'] = '折線圖表';
$app_list_strings['aor_chart_types']['pie'] = '餅狀圖表';
$app_list_strings['aor_chart_types']['radar'] = '雷達圖表';
$app_list_strings['aor_chart_types']['stacked_bar'] = '堆疊直條圖';
$app_list_strings['aor_chart_types']['grouped_bar'] = '群組直條圖';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = '月';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = '周';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = '日';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = '啟用';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = '停用';
$app_list_strings['aor_email_type_list']['Email Address'] = '電子郵件';
$app_list_strings['aor_email_type_list']['Specify User'] = '使用者';
$app_list_strings['aor_email_type_list']['Users'] = '使用者';
$app_list_strings['aor_assign_options']['all'] = '所有使用者';
$app_list_strings['aor_assign_options']['role'] = '角色中的所有使用者';
$app_list_strings['aor_assign_options']['security_group'] = '群組中的所有使用者';
$app_list_strings['date_time_period_list']['today'] = '今天';
$app_list_strings['date_time_period_list']['yesterday'] = '昨天';
$app_list_strings['date_time_period_list']['this_week'] = '本周';
$app_list_strings['date_time_period_list']['last_week'] = '上周';
$app_list_strings['date_time_period_list']['last_month'] = '上月';
$app_list_strings['date_time_period_list']['this_month'] = '本月';
$app_list_strings['date_time_period_list']['this_quarter'] = '本季';
$app_list_strings['date_time_period_list']['last_quarter'] = '上季';
$app_list_strings['date_time_period_list']['this_year'] = '今年';
$app_list_strings['date_time_period_list']['last_year'] = '去年';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '於';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = '在';
$app_strings['LBL_CRON_AT'] = '在';
$app_strings['LBL_CRON_RAW'] = '進階';
$app_strings['LBL_CRON_MIN'] = '分';
$app_strings['LBL_CRON_HOUR'] = '時';
$app_strings['LBL_CRON_DAY'] = '日';
$app_strings['LBL_CRON_MONTH'] = '月';
$app_strings['LBL_CRON_DOW'] = '星期幾';
$app_strings['LBL_CRON_DAILY'] = '日';
$app_strings['LBL_CRON_WEEKLY'] = '周';
$app_strings['LBL_CRON_MONTHLY'] = '月';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = '合約';
$app_list_strings['moduleList']['AOS_Invoices'] = '發票';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - 範本';
$app_list_strings['moduleList']['AOS_Product_Categories'] = '產品 - 類別';
$app_list_strings['moduleList']['AOS_Products'] = '產品';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = '行項目';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = '行項目群組';
$app_list_strings['moduleList']['AOS_Quotes'] = '報價單';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = '分析者';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = '競爭者';
$app_list_strings['aos_quotes_type_dom']['Customer'] = '客戶';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = '整合者';
$app_list_strings['aos_quotes_type_dom']['Investor'] = '投資者';
$app_list_strings['aos_quotes_type_dom']['Partner'] = '合作者';
$app_list_strings['aos_quotes_type_dom']['Press'] = '出版商';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = '銷售前景';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = '批發商';
$app_list_strings['aos_quotes_type_dom']['Other'] = '其它';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = '草稿';
$app_list_strings['quote_stage_dom']['Negotiation'] = '談判';
$app_list_strings['quote_stage_dom']['Delivered'] = '已交付';
$app_list_strings['quote_stage_dom']['On Hold'] = '等待';
$app_list_strings['quote_stage_dom']['Confirmed'] = '已確認';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = '結束(接受)';
$app_list_strings['quote_stage_dom']['Closed Lost'] = '結束(丟單)';
$app_list_strings['quote_stage_dom']['Closed Dead'] = '結束(未成)';
$app_list_strings['quote_term_dom']['Net 15'] = '貨到15天付款';
$app_list_strings['quote_term_dom']['Net 30'] = '貨到30天付款';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = '已審核';
$app_list_strings['approval_status_dom']['Not Approved'] = '未審核';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20$';
$app_list_strings['discount_list']['Percentage'] = '件Pct';
$app_list_strings['discount_list']['Amount'] = '量Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = '分析者';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = '競爭者';
$app_list_strings['aos_invoices_type_dom']['Customer'] = '客戶';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = '整合者';
$app_list_strings['aos_invoices_type_dom']['Investor'] = '投資者';
$app_list_strings['aos_invoices_type_dom']['Partner'] = '合作者';
$app_list_strings['aos_invoices_type_dom']['Press'] = '出版商';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = '銷售前景';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = '批發商';
$app_list_strings['aos_invoices_type_dom']['Other'] = '其它';
$app_list_strings['invoice_status_dom']['Paid'] = '已付款';
$app_list_strings['invoice_status_dom']['Unpaid'] = '未付款';
$app_list_strings['invoice_status_dom']['Cancelled'] = '已取消';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = '未開發票';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = '已開發票';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = '筆電';
$app_list_strings['product_category_dom']['Desktops'] = '桌電';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = '好';
$app_list_strings['product_type_dom']['Service'] = '服務';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = '報價單';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = '發票';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = '合約';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = '報價單';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = '發票';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = '合約';
$app_list_strings['pdf_template_type_dom']['Accounts'] = '客戶';
$app_list_strings['pdf_template_type_dom']['Contacts'] = '連絡人';
$app_list_strings['pdf_template_type_dom']['Leads'] = '潛在客戶';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = '未開始';
$app_list_strings['contract_status_list']['In Progress'] = '處理中';
$app_list_strings['contract_status_list']['Signed'] = '已簽署';
$app_list_strings['contract_type_list']['Type'] = '類型';
$app_strings['LBL_PRINT_AS_PDF'] = '以PDF格式列印';
$app_strings['LBL_SELECT_TEMPLATE'] = '請選擇一個範本';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\n查無範本。\n請前往PDF範本模組並新增一個';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = '工作流程';
$app_list_strings['moduleList']['AOW_Conditions'] = '工作流程條件';
$app_list_strings['moduleList']['AOW_Processed'] = '過程審核';
$app_list_strings['moduleList']['AOW_Actions'] = '行為';
$app_list_strings['aow_status_list']['Active'] = '啟用';
$app_list_strings['aow_status_list']['Inactive'] = '停用';
$app_list_strings['aow_operator_list']['Equal_To'] = '等於';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = '不等於';
$app_list_strings['aow_operator_list']['Greater_Than'] = '大於';
$app_list_strings['aow_operator_list']['Less_Than'] = '小於';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = '大於等於';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = '小於等於';
$app_list_strings['aow_operator_list']['Contains'] = '包含';
$app_list_strings['aow_operator_list']['Starts_With'] = '開始於';
$app_list_strings['aow_operator_list']['Ends_With'] = '來結束';
$app_list_strings['aow_operator_list']['is_null'] = '為空';
$app_list_strings['aow_process_status_list']['Complete'] = '完成';
$app_list_strings['aow_process_status_list']['Running'] = '運行中';
$app_list_strings['aow_process_status_list']['Pending'] = '未決定';
$app_list_strings['aow_process_status_list']['Failed'] = '失敗';
$app_list_strings['aow_condition_operator_list']['And'] = '和';
$app_list_strings['aow_condition_operator_list']['OR'] = '或者';
$app_list_strings['aow_condition_type_list']['Value'] = '值';
$app_list_strings['aow_condition_type_list']['Field'] = '欄位';
$app_list_strings['aow_condition_type_list']['Any_Change'] = '任何改變';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = '在使用者群組中';
$app_list_strings['aow_condition_type_list']['Date'] = '日期型';
$app_list_strings['aow_condition_type_list']['Multi'] = '之一';
$app_list_strings['aow_action_type_list']['Value'] = '值';
$app_list_strings['aow_action_type_list']['Field'] = '欄位';
$app_list_strings['aow_action_type_list']['Date'] = '日期型';
$app_list_strings['aow_action_type_list']['Round_Robin'] = '輪詢';
$app_list_strings['aow_action_type_list']['Least_Busy'] = '最少忙碌';
$app_list_strings['aow_action_type_list']['Random'] = '隨機';
$app_list_strings['aow_rel_action_type_list']['Value'] = '值';
$app_list_strings['aow_rel_action_type_list']['Field'] = '欄位';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = '分';
$app_list_strings['aow_date_type_list']['hour'] = '時';
$app_list_strings['aow_date_type_list']['day'] = '天';
$app_list_strings['aow_date_type_list']['week'] = '周';
$app_list_strings['aow_date_type_list']['month'] = '月';
$app_list_strings['aow_date_type_list']['year'] = '年';
$app_list_strings['aow_date_type_list']['business_hours'] = '工時';
$app_list_strings['aow_date_options']['now'] = '現在';
$app_list_strings['aow_date_options']['today'] = '今天';
$app_list_strings['aow_date_options']['field'] = '此欄位';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = '所有使用者';
$app_list_strings['aow_assign_options']['role'] = '角色中的所有使用者';
$app_list_strings['aow_assign_options']['security_group'] = '群組中的所有使用者';
$app_list_strings['aow_email_type_list']['Email Address'] = '電子郵件';
$app_list_strings['aow_email_type_list']['Record Email'] = '記錄的電子郵件';
$app_list_strings['aow_email_type_list']['Related Field'] = '相關欄位';
$app_list_strings['aow_email_type_list']['Specify User'] = '使用者';
$app_list_strings['aow_email_type_list']['Users'] = '使用者';
$app_list_strings['aow_email_to_list']['to'] = '收件人';
$app_list_strings['aow_email_to_list']['cc'] = '副本';
$app_list_strings['aow_email_to_list']['bcc'] = '密件副本';
$app_list_strings['aow_run_on_list']['All_Records'] = '所有紀錄';
$app_list_strings['aow_run_on_list']['New_Records'] = '新紀錄';
$app_list_strings['aow_run_on_list']['Modified_Records'] = '已修改紀錄';
$app_list_strings['aow_run_when_list']['Always'] = '始終';
$app_list_strings['aow_run_when_list']['On_Save'] = '只有在儲存時';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = '只有在排程器中';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = '專案 - 範本';
$app_list_strings['moduleList']['AM_TaskTemplates'] = '專案工作範本';
$app_list_strings['relationship_type_list']['FS'] = '完成到開始';
$app_list_strings['relationship_type_list']['SS'] = '開始到開始';
$app_list_strings['duration_unit_dom']['Days'] = '天';
$app_list_strings['duration_unit_dom']['Hours'] = '時';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = '甘特圖';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = '查看詳細資訊';
$app_strings['LBL_CREATE_PROJECT'] = '創建專案';

//gmaps
$app_strings['LBL_MAP'] = '地圖';

$app_strings['LBL_JJWG_MAPS_LNG'] = '經度';
$app_strings['LBL_JJWG_MAPS_LAT'] = '緯度';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = '地理編碼狀態';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = '地址';

$app_list_strings['moduleList']['jjwg_Maps'] = '地圖';
$app_list_strings['moduleList']['jjwg_Markers'] = '地圖 - 標記';
$app_list_strings['moduleList']['jjwg_Areas'] = '地圖 - 地區';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = '地圖 - 地址快取';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP 合作夥伴';

$app_list_strings['map_unit_type_list']['mi'] = '哩';
$app_list_strings['map_unit_type_list']['km'] = '公里';

$app_list_strings['map_module_type_list']['Accounts'] = '客戶';
$app_list_strings['map_module_type_list']['Contacts'] = '連絡人';
$app_list_strings['map_module_type_list']['Cases'] = '案例';
$app_list_strings['map_module_type_list']['Leads'] = '潛在客戶';
$app_list_strings['map_module_type_list']['Meetings'] = '會議';
$app_list_strings['map_module_type_list']['Opportunities'] = '商業機會';
$app_list_strings['map_module_type_list']['Project'] = '專案';
$app_list_strings['map_module_type_list']['Prospects'] = '目標';

$app_list_strings['map_relate_type_list']['Accounts'] = '客戶';
$app_list_strings['map_relate_type_list']['Contacts'] = '聯絡人';
$app_list_strings['map_relate_type_list']['Cases'] = '案例';
$app_list_strings['map_relate_type_list']['Leads'] = '潛在客戶';
$app_list_strings['map_relate_type_list']['Meetings'] = '會議';
$app_list_strings['map_relate_type_list']['Opportunities'] = '商業機會';
$app_list_strings['map_relate_type_list']['Project'] = '專案';
$app_list_strings['map_relate_type_list']['Prospects'] = '目標';

$app_list_strings['marker_image_list']['accident'] = '意外';
$app_list_strings['marker_image_list']['administration'] = '系統管理';
$app_list_strings['marker_image_list']['agriculture'] = '農業';
$app_list_strings['marker_image_list']['aircraft_small'] = '小型飛行器';
$app_list_strings['marker_image_list']['airplane_tourism'] = '飛機旅遊';
$app_list_strings['marker_image_list']['airport'] = '機場';
$app_list_strings['marker_image_list']['amphitheater'] = '競技場';
$app_list_strings['marker_image_list']['apartment'] = '公寓';
$app_list_strings['marker_image_list']['aquarium'] = '水族館';
$app_list_strings['marker_image_list']['arch'] = '拱門';
$app_list_strings['marker_image_list']['atm'] = '自動取款機';
$app_list_strings['marker_image_list']['audio'] = '音訊';
$app_list_strings['marker_image_list']['bank'] = '銀行';
$app_list_strings['marker_image_list']['bank_euro'] = '歐元銀行';
$app_list_strings['marker_image_list']['bank_pound'] = '英鎊銀行';
$app_list_strings['marker_image_list']['bar'] = '酒吧';
$app_list_strings['marker_image_list']['beach'] = '海灘';
$app_list_strings['marker_image_list']['beautiful'] = '美麗的';
$app_list_strings['marker_image_list']['bicycle_parking'] = '自行車停車';
$app_list_strings['marker_image_list']['big_city'] = '大城市';
$app_list_strings['marker_image_list']['bridge'] = '橋';
$app_list_strings['marker_image_list']['bridge_modern'] = '現代橋樑';
$app_list_strings['marker_image_list']['bus'] = '公共汽車';
$app_list_strings['marker_image_list']['cable_car'] = '纜車';
$app_list_strings['marker_image_list']['car'] = '車';
$app_list_strings['marker_image_list']['car_rental'] = '租車';
$app_list_strings['marker_image_list']['carrepair'] = '汽車修理';
$app_list_strings['marker_image_list']['castle'] = '城堡';
$app_list_strings['marker_image_list']['cathedral'] = '大教堂';
$app_list_strings['marker_image_list']['chapel'] = '禮拜堂';
$app_list_strings['marker_image_list']['church'] = '教堂';
$app_list_strings['marker_image_list']['city_square'] = '市中心';
$app_list_strings['marker_image_list']['cluster'] = '群集';
$app_list_strings['marker_image_list']['cluster_2'] = '群集2';
$app_list_strings['marker_image_list']['cluster_3'] = '群集3';
$app_list_strings['marker_image_list']['cluster_4'] = '群集4';
$app_list_strings['marker_image_list']['cluster_5'] = '群集5';
$app_list_strings['marker_image_list']['coffee'] = '咖啡';
$app_list_strings['marker_image_list']['community_centre'] = '活動中心';
$app_list_strings['marker_image_list']['company'] = '公司';
$app_list_strings['marker_image_list']['conference'] = '會議';
$app_list_strings['marker_image_list']['construction'] = '建築';
$app_list_strings['marker_image_list']['convenience'] = '便利';
$app_list_strings['marker_image_list']['court'] = '法院';
$app_list_strings['marker_image_list']['cruise'] = '郵輪';
$app_list_strings['marker_image_list']['currency_exchange'] = '貨幣兌換';
$app_list_strings['marker_image_list']['customs'] = '海關';
$app_list_strings['marker_image_list']['cycling'] = '騎自行車';
$app_list_strings['marker_image_list']['dam'] = '大壩';
$app_list_strings['marker_image_list']['dentist'] = '牙科診所';
$app_list_strings['marker_image_list']['deptartment_store'] = '百貨公司';
$app_list_strings['marker_image_list']['disability'] = '殘疾';
$app_list_strings['marker_image_list']['disabled_parking'] = '身心障礙停車';
$app_list_strings['marker_image_list']['doctor'] = '醫生';
$app_list_strings['marker_image_list']['dog_leash'] = '寵物寄放';
$app_list_strings['marker_image_list']['down'] = '下';
$app_list_strings['marker_image_list']['down_left'] = '向下左';
$app_list_strings['marker_image_list']['down_right'] = '向下右';
$app_list_strings['marker_image_list']['down_then_left'] = '向下後向左';
$app_list_strings['marker_image_list']['down_then_right'] = '向下後向右';
$app_list_strings['marker_image_list']['drugs'] = '藥品';
$app_list_strings['marker_image_list']['elevator'] = '電梯';
$app_list_strings['marker_image_list']['embassy'] = '大使館';
$app_list_strings['marker_image_list']['expert'] = '專家';
$app_list_strings['marker_image_list']['factory'] = '工廠';
$app_list_strings['marker_image_list']['falling_rocks'] = '落石';
$app_list_strings['marker_image_list']['fast_food'] = '速食';
$app_list_strings['marker_image_list']['festival'] = '節日';
$app_list_strings['marker_image_list']['fjord'] = '峽灣';
$app_list_strings['marker_image_list']['forest'] = '森林';
$app_list_strings['marker_image_list']['fountain'] = '噴泉';
$app_list_strings['marker_image_list']['friday'] = '星期五';
$app_list_strings['marker_image_list']['garden'] = '花園';
$app_list_strings['marker_image_list']['gas_station'] = '加油站';
$app_list_strings['marker_image_list']['geyser'] = '間歇泉';
$app_list_strings['marker_image_list']['gifts'] = '禮品';
$app_list_strings['marker_image_list']['gourmet'] = '美食';
$app_list_strings['marker_image_list']['grocery'] = '雜貨';
$app_list_strings['marker_image_list']['hairsalon'] = '髮廊';
$app_list_strings['marker_image_list']['helicopter'] = '直昇機';
$app_list_strings['marker_image_list']['highway'] = '高速公路';
$app_list_strings['marker_image_list']['historical_quarter'] = '歷史街區';
$app_list_strings['marker_image_list']['home'] = '首頁';
$app_list_strings['marker_image_list']['hospital'] = '醫院';
$app_list_strings['marker_image_list']['hostel'] = '旅社';
$app_list_strings['marker_image_list']['hotel'] = '旅館';
$app_list_strings['marker_image_list']['hotel_1_star'] = '1星旅館';
$app_list_strings['marker_image_list']['hotel_2_stars'] = '2星旅館';
$app_list_strings['marker_image_list']['hotel_3_stars'] = '3星旅館';
$app_list_strings['marker_image_list']['hotel_4_stars'] = '4星旅館';
$app_list_strings['marker_image_list']['hotel_5_stars'] = '5星旅館';
$app_list_strings['marker_image_list']['info'] = '資訊';
$app_list_strings['marker_image_list']['justice'] = '法院';
$app_list_strings['marker_image_list']['lake'] = '湖';
$app_list_strings['marker_image_list']['laundromat'] = '自助洗衣';
$app_list_strings['marker_image_list']['left'] = '左';
$app_list_strings['marker_image_list']['left_then_down'] = '向左後向下';
$app_list_strings['marker_image_list']['left_then_up'] = '向左後向上';
$app_list_strings['marker_image_list']['library'] = '圖書館';
$app_list_strings['marker_image_list']['lighthouse'] = '燈塔';
$app_list_strings['marker_image_list']['liquor'] = '酒品';
$app_list_strings['marker_image_list']['lock'] = '鎖';
$app_list_strings['marker_image_list']['main_road'] = '主要道路';
$app_list_strings['marker_image_list']['massage'] = '按摩';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = '手機訊號塔';
$app_list_strings['marker_image_list']['modern_tower'] = '現代大廈';
$app_list_strings['marker_image_list']['monastery'] = '修道院';
$app_list_strings['marker_image_list']['monday'] = '星期一';
$app_list_strings['marker_image_list']['monument'] = '紀念碑';
$app_list_strings['marker_image_list']['mosque'] = '清真寺';
$app_list_strings['marker_image_list']['motorcycle'] = '摩托車';
$app_list_strings['marker_image_list']['museum'] = '博物館';
$app_list_strings['marker_image_list']['music_live'] = '音樂現場';
$app_list_strings['marker_image_list']['oil_pump_jack'] = '輸油泵';
$app_list_strings['marker_image_list']['pagoda'] = '寶塔';
$app_list_strings['marker_image_list']['palace'] = '宮殿';
$app_list_strings['marker_image_list']['panoramic'] = '全景';
$app_list_strings['marker_image_list']['park'] = '停車';
$app_list_strings['marker_image_list']['park_and_ride'] = '停車換乘';
$app_list_strings['marker_image_list']['parking'] = '停車場';
$app_list_strings['marker_image_list']['photo'] = '照片';
$app_list_strings['marker_image_list']['picnic'] = '野餐';
$app_list_strings['marker_image_list']['places_unvisited'] = '未拜訪地點';
$app_list_strings['marker_image_list']['places_visited'] = '已拜訪地點';
$app_list_strings['marker_image_list']['playground'] = '運動場';
$app_list_strings['marker_image_list']['police'] = '警察';
$app_list_strings['marker_image_list']['port'] = '港口';
$app_list_strings['marker_image_list']['postal'] = '郵務';
$app_list_strings['marker_image_list']['power_line_pole'] = '電線桿';
$app_list_strings['marker_image_list']['power_plant'] = '電廠';
$app_list_strings['marker_image_list']['power_substation'] = '變電所';
$app_list_strings['marker_image_list']['public_art'] = '公共藝術';
$app_list_strings['marker_image_list']['rain'] = '雨';
$app_list_strings['marker_image_list']['real_estate'] = '房地產';
$app_list_strings['marker_image_list']['regroup'] = '重組';
$app_list_strings['marker_image_list']['resort'] = '渡假村';
$app_list_strings['marker_image_list']['restaurant'] = '餐廳';
$app_list_strings['marker_image_list']['restaurant_african'] = '非洲餐廳';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = '燒烤餐廳';
$app_list_strings['marker_image_list']['restaurant_buffet'] = '自助餐廳';
$app_list_strings['marker_image_list']['restaurant_chinese'] = '中國餐廳';
$app_list_strings['marker_image_list']['restaurant_fish'] = '魚餐廳';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = '魚薯條餐廳';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = '美食餐廳';
$app_list_strings['marker_image_list']['restaurant_greek'] = '希臘餐廳';
$app_list_strings['marker_image_list']['restaurant_indian'] = '印度餐廳';
$app_list_strings['marker_image_list']['restaurant_italian'] = '義大利餐廳';
$app_list_strings['marker_image_list']['restaurant_japanese'] = '日本餐廳';
$app_list_strings['marker_image_list']['restaurant_kebab'] = '烤肉餐廳';
$app_list_strings['marker_image_list']['restaurant_korean'] = '韓國餐廳';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = '地中海餐廳';
$app_list_strings['marker_image_list']['restaurant_mexican'] = '墨西哥餐廳';
$app_list_strings['marker_image_list']['restaurant_romantic'] = '浪漫餐廳';
$app_list_strings['marker_image_list']['restaurant_thai'] = '泰國餐廳';
$app_list_strings['marker_image_list']['restaurant_turkish'] = '土耳其餐廳';
$app_list_strings['marker_image_list']['right'] = '右';
$app_list_strings['marker_image_list']['right_then_down'] = '向右然後向下';
$app_list_strings['marker_image_list']['right_then_up'] = '向右然後向上';
$app_list_strings['marker_image_list']['saturday'] = '星期六';
$app_list_strings['marker_image_list']['school'] = '學校';
$app_list_strings['marker_image_list']['shopping_mall'] = '購物中心';
$app_list_strings['marker_image_list']['shore'] = '岸';
$app_list_strings['marker_image_list']['sight'] = '風景';
$app_list_strings['marker_image_list']['small_city'] = '小城市';
$app_list_strings['marker_image_list']['snow'] = '雪';
$app_list_strings['marker_image_list']['spaceport'] = '太空站';
$app_list_strings['marker_image_list']['speed_100'] = '速限100';
$app_list_strings['marker_image_list']['speed_110'] = '速限110';
$app_list_strings['marker_image_list']['speed_120'] = '速限120';
$app_list_strings['marker_image_list']['speed_130'] = '速限130';
$app_list_strings['marker_image_list']['speed_20'] = '速限20';
$app_list_strings['marker_image_list']['speed_30'] = '速限30';
$app_list_strings['marker_image_list']['speed_40'] = '速限40';
$app_list_strings['marker_image_list']['speed_50'] = '速限50';
$app_list_strings['marker_image_list']['speed_60'] = '速限60';
$app_list_strings['marker_image_list']['speed_70'] = '速限70';
$app_list_strings['marker_image_list']['speed_80'] = '速限80';
$app_list_strings['marker_image_list']['speed_90'] = '速限90';
$app_list_strings['marker_image_list']['speed_hump'] = '減速帶';
$app_list_strings['marker_image_list']['stadium'] = '體育場';
$app_list_strings['marker_image_list']['statue'] = '雕像';
$app_list_strings['marker_image_list']['steam_train'] = '蒸氣火車';
$app_list_strings['marker_image_list']['stop'] = '停';
$app_list_strings['marker_image_list']['stoplight'] = '紅綠燈';
$app_list_strings['marker_image_list']['subway'] = '地下鐵';
$app_list_strings['marker_image_list']['sun'] = '周日';
$app_list_strings['marker_image_list']['sunday'] = '星期日';
$app_list_strings['marker_image_list']['supermarket'] = '超市';
$app_list_strings['marker_image_list']['synagogue'] = '猶太教堂';
$app_list_strings['marker_image_list']['tapas'] = '小吃';
$app_list_strings['marker_image_list']['taxi'] = '計程車';
$app_list_strings['marker_image_list']['taxiway'] = '滑行道';
$app_list_strings['marker_image_list']['teahouse'] = '茶館';
$app_list_strings['marker_image_list']['telephone'] = '電話';
$app_list_strings['marker_image_list']['temple_hindu'] = '印度廟';
$app_list_strings['marker_image_list']['terrace'] = '陽台';
$app_list_strings['marker_image_list']['text'] = '文字';
$app_list_strings['marker_image_list']['theater'] = '戲院';
$app_list_strings['marker_image_list']['theme_park'] = '主題公園';
$app_list_strings['marker_image_list']['thursday'] = '星期四';
$app_list_strings['marker_image_list']['toilets'] = '廁所';
$app_list_strings['marker_image_list']['toll_station'] = '收費站';
$app_list_strings['marker_image_list']['tower'] = '塔';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = '交通管制照相';
$app_list_strings['marker_image_list']['train'] = '火車';
$app_list_strings['marker_image_list']['tram'] = '礦車';
$app_list_strings['marker_image_list']['truck'] = '卡車';
$app_list_strings['marker_image_list']['tuesday'] = '星期二';
$app_list_strings['marker_image_list']['tunnel'] = '隧道';
$app_list_strings['marker_image_list']['turn_left'] = '左轉';
$app_list_strings['marker_image_list']['turn_right'] = '右轉';
$app_list_strings['marker_image_list']['university'] = '大學';
$app_list_strings['marker_image_list']['up'] = '上';
$app_list_strings['marker_image_list']['up_left'] = '向上左';
$app_list_strings['marker_image_list']['up_right'] = '向上右';
$app_list_strings['marker_image_list']['up_then_left'] = '向上後向左';
$app_list_strings['marker_image_list']['up_then_right'] = '向上後向右';
$app_list_strings['marker_image_list']['vespa'] = '摩托車';
$app_list_strings['marker_image_list']['video'] = '影片';
$app_list_strings['marker_image_list']['villa'] = '別墅';
$app_list_strings['marker_image_list']['water'] = '水';
$app_list_strings['marker_image_list']['waterfall'] = '瀑布';
$app_list_strings['marker_image_list']['watermill'] = '水車';
$app_list_strings['marker_image_list']['waterpark'] = '水上公園';
$app_list_strings['marker_image_list']['watertower'] = '水塔';
$app_list_strings['marker_image_list']['wednesday'] = '星期三';
$app_list_strings['marker_image_list']['wifi'] = '無線上網';
$app_list_strings['marker_image_list']['wind_turbine'] = '風力發電';
$app_list_strings['marker_image_list']['windmill'] = '風車';
$app_list_strings['marker_image_list']['winery'] = '酒廠';
$app_list_strings['marker_image_list']['work_office'] = '工作辦公室';
$app_list_strings['marker_image_list']['world_heritage_site'] = '世界遺產';
$app_list_strings['marker_image_list']['zoo'] = '動物園';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = '外出';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = '會議中';

$app_strings['LBL_RESCHEDULE_LABEL'] = '再預約';
$app_strings['LBL_RESCHEDULE_TITLE'] = '請輸入再預約資訊';
$app_strings['LBL_RESCHEDULE_DATE'] = '日期:';
$app_strings['LBL_RESCHEDULE_REASON'] = '原因:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = '請選擇有效日期';
$app_strings['LBL_RESCHEDULE_ERROR2'] = '請選擇原因';

$app_strings['LBL_RESCHEDULE_PANEL'] = '再預約';
$app_strings['LBL_RESCHEDULE_HISTORY'] = '通聯記錄';
$app_strings['LBL_RESCHEDULE_COUNT'] = '通聯嘗試';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = '安全套件管理';
$app_strings['LBL_SECURITYGROUP'] = '群組';
$app_strings['LBL_ROLE'] = '角色';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = '出站電子郵件帳號';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = '外部 Oauth 連結';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = '外部 OAuth 服務供應商';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = '社群來源詳情';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = '過濾條件';

$app_strings['LBL_COLLECTION_TYPE'] = '類型';

$app_strings['LBL_ADD_TAB'] = '新增標籤';
$app_strings['LBL_EDIT_TAB'] = '編輯標簽';
$app_strings['LBL_SUITE_DASHBOARD'] = '儀表板';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = '輸入儀表名稱:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = '欄數:';
$app_strings['LBL_DELETE_DASHBOARD1'] = '您確定要刪除';
$app_strings['LBL_DELETE_DASHBOARD2'] = '儀表板?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = '新增儀表頁面';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = '刪除此儀表頁面';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = '重新命名儀表頁面';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = '動作';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => '任務',
    'Meetings' => '會議',
    'Calls' => '通話',
    'Notes' => '備註',
    'Emails' => '電子郵件'
);

$app_list_strings['moduleList']['TemplateEditor'] = '範本組件編輯器';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "有些已被你編輯的欄位尚未被保存。如果你樂意失去您的更改或取消，按一下確定。如果你想要繼續編輯，按一下取消。";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "載入欄位時出錯。您的session可能已超時。請重新登錄以修復此問題";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => '銷售',
    'getAccountsSpotsData' => '客戶',
    'getLeadsSpotsData' => '潛在客戶',
    'getServiceSpotsData' => '服務',
    'getMarketingSpotsData' => '市場行銷',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => '銷售活動',
    'getQuotesSpotsData' => '報價單'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = '工時';
$app_list_strings['business_hours_list']['0'] = '上午12點';
$app_list_strings['business_hours_list']['1'] = '上午1點';
$app_list_strings['business_hours_list']['2'] = '上午2點';
$app_list_strings['business_hours_list']['3'] = '上午3點';
$app_list_strings['business_hours_list']['4'] = '上午4點';
$app_list_strings['business_hours_list']['5'] = '上午5點';
$app_list_strings['business_hours_list']['6'] = '上午6點';
$app_list_strings['business_hours_list']['7'] = '上午7點';
$app_list_strings['business_hours_list']['8'] = '上午8點';
$app_list_strings['business_hours_list']['9'] = '上午9點';
$app_list_strings['business_hours_list']['10'] = '上午10點';
$app_list_strings['business_hours_list']['11'] = '上午11點';
$app_list_strings['business_hours_list']['12'] = '下午12點';
$app_list_strings['business_hours_list']['13'] = '下午1點';
$app_list_strings['business_hours_list']['14'] = '下午2點';
$app_list_strings['business_hours_list']['15'] = '下午3點';
$app_list_strings['business_hours_list']['16'] = '下午4點';
$app_list_strings['business_hours_list']['17'] = '下午5點';
$app_list_strings['business_hours_list']['18'] = '下午6點';
$app_list_strings['business_hours_list']['19'] = '下午7點';
$app_list_strings['business_hours_list']['20'] = '下午8點';
$app_list_strings['business_hours_list']['21'] = '下午9點';
$app_list_strings['business_hours_list']['22'] = '下午10點';
$app_list_strings['business_hours_list']['23'] = '下午11點';
$app_list_strings['day_list']['Monday'] = '星期一';
$app_list_strings['day_list']['Tuesday'] = '星期二';
$app_list_strings['day_list']['Wednesday'] = '星期三';
$app_list_strings['day_list']['Thursday'] = '星期四';
$app_list_strings['day_list']['Friday'] = '星期五';
$app_list_strings['day_list']['Saturday'] = '星期六';
$app_list_strings['day_list']['Sunday'] = '星期日';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = '直向';
$app_list_strings['pdf_orientation_dom']['Landscape'] = '橫向';


$app_list_strings['moduleList']['SurveyResponses'] = '問卷回應';
$app_list_strings['moduleList']['Surveys'] = '調查問卷';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = '問卷問題回應';
$app_list_strings['moduleList']['SurveyQuestions'] = '問卷問題';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = '問卷問題選項';
$app_list_strings['survey_status_list']['Draft'] = '草稿';
$app_list_strings['survey_status_list']['Public'] = '公共';
$app_list_strings['survey_status_list']['Closed'] = '關閉';
$app_list_strings['surveys_question_type']['Text'] = '文字';
$app_list_strings['surveys_question_type']['Textbox'] = '文字輸入框';
$app_list_strings['surveys_question_type']['Checkbox'] = '布爾型';
$app_list_strings['surveys_question_type']['Radio'] = '單選框';
$app_list_strings['surveys_question_type']['Dropdown'] = '下拉選單';
$app_list_strings['surveys_question_type']['Multiselect'] = '多選';
$app_list_strings['surveys_question_type']['Matrix'] = '選擇矩陣';
$app_list_strings['surveys_question_type']['DateTime'] = '日期時間';
$app_list_strings['surveys_question_type']['Date'] = '日期型';
$app_list_strings['surveys_question_type']['Scale'] = '刻度';
$app_list_strings['surveys_question_type']['Rating'] = '分攤';
$app_list_strings['surveys_matrix_options'][0] = '滿意';
$app_list_strings['surveys_matrix_options'][1] = '普通';
$app_list_strings['surveys_matrix_options'][2] = '不滿意';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = '待定確認參加，確認參加未發送';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = '確認參加電子郵件發送失敗';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = '待定確認參加，確認參加已發送';
$app_strings['LBL_OPT_IN'] = '已選擇參加';
$app_strings['LBL_OPT_IN_CONFIRMED'] = '確認參加';
$app_strings['LBL_OPT_IN_OPT_OUT'] = '選擇排除';
$app_strings['LBL_OPT_IN_INVALID'] = '無效';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => '已停用',
    'opt-in' => '選擇參加',
    'confirmed-opt-in' => '確認參加'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => '選擇不參加',
    'opt-in' => '選擇參加',
    'confirmed-opt-in' => '確認參加'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = '確認參加的電子郵件已被加入電子郵件佇列，共 %s 個電子郵件地址 ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = '無法發送電子郵件給 %s 個電子郵件地址，因為他們未被選擇. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s 個電子郵件地址沒有有效的 id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = '雙因素身份驗證失敗';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = '雙因素身份驗證碼已發送.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = '發送雙重認証碼失敗';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = '感謝您的關注。';

$app_strings['ERR_IP_CHANGE'] = '由於您的IP地址有大更改而終止你的會話';
$app_strings['ERR_RETURN'] = '返回首頁';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => '密碼重置',
    'client_credentials' => '用戶端憑據',
    'implicit' => '隱式',
    'authorization_code' => '授權碼'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => '分鐘',
    'hour' => '小時',
    'day' => '天數',
    'week' => '週',
    'month' => '月',
];

$app_list_strings['search_controllers'] = [
    'Search' => '搜尋 (新)',
    'UnifiedSearch' => '全域統一搜尋 (舊版)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => '個人帳號',
    'shared' => '共享',
    'group' => '群組',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => '已連接',
    'failed' => '失敗',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => '處理中',
    'success' => '成功',
    'warning' => '警告',
    'error' => '錯誤:',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API 錯誤';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = '出現 JSON API 錯誤。';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = '應用程式介面版本: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = '請確保填寫所需的欄位';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'JSON API 預期請求的正文為 JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = '無法驗證 JSON API 有效負載請求';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = '無法驗證 Json Api 負載回應';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'JSON API 找不到資源';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json api 預期"接受" 標頭是 application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'JSON API 預期"Content-Type" 標頭是 application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = '此瀏覽器已啟用桌面通知。';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = '此瀏覽器禁用桌面通知。請在瀏覽器設置再次開啟選項。';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = '此瀏覽器不支援桌面通知。';

$app_strings['LBL_THERE_WAS_AN_ERR'] = '出現錯誤：';
$app_strings['LBL_CLICK_HERE'] = '點擊這裡';
$app_strings['LBL_TO_CONTINUE'] = '來繼續';

$app_strings['IMAP_HANDLER_ERROR'] = '錯誤: {error}; key是: "{key}"。';
$app_strings['IMAP_HANDLER_SUCCESS'] = '確認: 測試設定更改為 "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = '連線無效, 請使用 "{var}"做為值。';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = '發生未知的錯誤, key "{key}"未儲存。';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = '測試設定不存在';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key 未找到';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key 儲存錯誤';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = '未知的錯誤';
$app_strings['LBL_SEARCH_TITLE']                   = '搜尋';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = '輸入搜尋條件';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = '搜尋';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = '搜尋';
$app_strings['LBL_SEARCH_QUERY']                   = '搜尋條件: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = '引擎：';
$app_strings['LBL_SEARCH_TOTAL'] = '全部結果：';
$app_strings['LBL_SEARCH_PREV'] = '上一項';
$app_strings['LBL_SEARCH_NEXT'] = '下一步';
$app_strings['LBL_SEARCH_PAGE'] = '頁 ';
$app_strings['LBL_SEARCH_OF'] = ' 之 ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = '進階搜尋';
$app_strings['LBL_USE_BASIC_SEARCH'] = '基本搜尋';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'MPDF 引擎';
$app_strings['LBL_TCPDF_ENGINE'] = 'TCPDF 引擎';


$app_strings['ERR_INVALID_FILE_NAME'] = '無效的檔案名稱:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = '只允許使用英文字母, 加上 \'.\' , \'-\' 和 \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = '匯入的檔案名稱無效';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = '密碼設定. 輸入值去設定新的密碼.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = '值設定. 輸入新的值去覆蓋現在的.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = '不允許使用 OAuth 登入連結入站電子郵件伺服器. 確認連結: ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = '你的 IMAP OAuth 會話已經過期, 請重新登入連結: ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = '索引';
$app_strings['LBL_VALUE'] = '值';
$app_strings['LBL_OPTIONAL'] = '可選擇的';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = '可選擇的. 設定去使用特定的連接符字串';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = '出站帳號';
$app_strings['LBL_INBOUND_ACCOUNT'] = '入站帳號';
$app_strings['LBL_SYSTEM_ACCOUNT'] = '系統帳號';
$app_strings['LBL_FROM_SYSTEM'] = '從系統寄信';
$app_strings['LBL_SIGNATURE'] = '簽名';

$app_list_strings['email_import_timeframe_start_dom'] = [
    '-1 year' => '1 Year',
    '-6 months' => '6 Months',
    '-3 months' => '3 Months',
    '-30 days' => '30 Days',
    '-15 days' => '15 Days',
    '-5 days' => '5 Days',
    '-1 days' => '1 Day',
    '0 days' => '0 Days',
];
