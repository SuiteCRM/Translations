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
    'language_pack_name' => 'fa-IR - Persian',
    'moduleList' => array(
        'Home' => 'خانه',
        'ResourceCalendar' => 'تقویم منابع',
        'Contacts' => 'مخاطب‌ها',
        'Accounts' => 'حساب ها',
        'Alerts' => 'هشدارها',
        'Opportunities' => 'فرصت‌ها',
        'Cases' => 'خدمات',
        'Notes' => 'یادداشت‌ها',
        'Calls' => 'تماس‌ها',
        'TemplateSectionLine' => 'Template Section Line',
        'Calls_Reschedule' => 'برنامه ریزی مجدد تماس ها',
        'Emails' => 'ایمیل‌ها',
        'EAPM' => 'EAPM',
        'Meetings' => 'جلسات',
        'Tasks' => 'وظایف',
        'Calendar' => 'تقویم',
        'Leads' => 'سرنخ‌ها',
        'Currencies' => 'واحدهای پول',
        'Activities' => 'فعالیت‌ها',
        'Bugs' => 'اشکالات',
        'Feeds' => 'خبرخوان',
        'iFrames' => 'سایت‌های من',
        'TimePeriods' => 'دوره‌های زمانی',
        'ContractTypes' => 'انواع قرارداد',
        'Schedulers' => 'برنامه‌ریز',
        'Project' => 'پروژه ها',
        'ProjectTask' => 'وظایف پروژه',
        'Campaigns' => 'کمپین‌ها',
        'CampaignLog' => 'گزارش وضعیت کمپین',
        'Documents' => 'اسناد',
        'DocumentRevisions' => 'اصلاحیه‌های اسناد',
        'Connectors' => 'متصل‌کننده‌ها',
        'Roles' => 'نقش‌ها',
        'Notifications' => 'اعلان‌ها',
        'Sync' => 'همگام‌سازی',
        'Users' => 'کاربرها',
        'Employees' => 'کارمندها',
        'Administration' => 'مدیریت',
        'ACLRoles' => 'نقش‌ها',
        'InboundEmail' => 'ایمیل‌های ورودی',
        'Releases' => 'نسخه‌ها',
        'Prospects' => 'اهداف',
        'Queues' => 'صف‌ها',
        'EmailMarketing' => 'بازاریابی ایمیلی',
        'EmailTemplates' => 'قالب‌های ایمیل',
        'ProspectLists' => 'فهرست - اهداف',
        'SavedSearch' => 'جستجوهای ذخیره شده',
        'UpgradeWizard' => 'برنامه خبره ارتقا',
        'Trackers' => 'ردیاب',
        'TrackerSessions' => 'جلسات ردیاب',
        'TrackerQueries' => 'کوئری‌های ردیاب',
        'FAQ' => 'سوالات متداول',
        'Newsletters' => 'خبرنامه',
        'SugarFeed' => 'خوراک SuiteCRM',
        'SugarFavorites' => 'برگزیده‌های SuiteCRM',

        'OAuthKeys' => 'کلید های مصرفی OAuth',
        'OAuthTokens' => 'توکن OAuth',
        'OAuth2Clients' => 'OAuth Clients',
        'OAuth2Tokens' => 'توکن OAuth',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'خانه',
        'Dashboard' => 'پیشخوان',
        'Contacts' => 'مخاطب',
        'Accounts' => 'مرکز',
        'Opportunities' => 'فرصت',
        'Cases' => 'خدمات',
        'Notes' => 'یادداشت',
        'Calls' => 'تماس',
        'Emails' => 'ایمیل',
        'EmailTemplates' => 'قالب ایمیل',
        'Meetings' => 'جلسه',
        'Tasks' => 'وظیفه',
        'Calendar' => 'تقویم',
        'Leads' => 'سرنخ',
        'Activities' => 'فعالیت',
        'Bugs' => 'اشکال',
        'KBDocuments' => 'اسناد دانش محور',
        'Feeds' => 'خبرخوان',
        'iFrames' => 'سایت‌های من',
        'TimePeriods' => 'دوره زمانی',
        'Project' => 'پروژه',
        'ProjectTask' => 'وظیفه‌ی پروژه',
        'Prospects' => 'هدف',
        'Campaigns' => 'کمپین',
        'Documents' => 'سند',
        'Sync' => 'همگام‌سازی',
        'Users' => 'کاربر',
        'SugarFavorites' => 'برگزیده‌های SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'بله',
        '2' => 'خير',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'تحلیل‌گر',
        'Competitor' => 'رقیب',
        'Customer' => 'مشتری',
        'Integrator' => 'تلفیق کننده',
        'Investor' => 'سرمایه‌گذار',
        'Partner' => 'شریک',
        'Press' => 'مطبوعات',
        'Prospect' => 'مشتری بالقوه',
        'Reseller' => 'نماینده‌ی فروش',
        'Other' => 'سایر',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'پوشاک',
        'Banking' => 'بانک‌داری',
        'Biotechnology' => 'بیوتکنولوژی',
        'Chemicals' => 'مواد شیمیایی',
        'Communications' => 'ارتباطات',
        'Construction' => 'ساخت و ساز',
        'Consulting' => 'مشاوره',
        'Education' => 'آموزش',
        'Electronics' => 'الکترونیک',
        'Energy' => 'انرژی',
        'Engineering' => 'مهندسی',
        'Entertainment' => 'سرگرمی',
        'Environmental' => 'محیط زیست',
        'Finance' => 'امور مالی',
        'Government' => 'دولت',
        'Healthcare' => 'بهداشت و درمان',
        'Hospitality' => 'مهمان‌داری',
        'Insurance' => 'بیمه',
        'Machinery' => 'ماشین آلات',
        'Manufacturing' => 'تولیدی',
        'Media' => 'رسانه',
        'Not For Profit' => 'غیرانتفاعی',
        'Recreation' => 'تفریح و سرگرمی',
        'Retail' => 'خرده فروشی',
        'Shipping' => 'حمل و نقل',
        'Technology' => 'فن‌آوری',
        'Telecommunications' => 'ارتباطات راه دور',
        'Transportation' => 'حمل و نقل',
        'Utilities' => 'صنایع همگانی',
        'Other' => 'سایر',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'تماس سرد',
        'Existing Customer' => 'مشتری‌های موجود',
        'Self Generated' => 'Self Generated',
        'Employee' => 'کارمند',
        'Partner' => 'شریک',
        'Public Relations' => 'روابط عمومی',
        'Direct Mail' => 'پست مستقیم',
        'Conference' => 'کنفرانس',
        'Trade Show' => 'نمایشگاه تجاری',
        'Web Site' => 'وب سایت',
        'Word of mouth' => 'دهان به دهان',
        'Email' => 'ایمیل',
        'Campaign' => 'کمپین',
        'Other' => 'سایر',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'تجارت موجود',
        'New Business' => 'تجارت جدید',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'درآمد',
        'Investment' => 'سرمایه‌گذاری',
        'Expected_Revenue' => 'درآمد مورد انتظار',
        'Budget' => 'بودجه',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'تصمیم‌گیرنده‌ی کسب و کار',
        'Business Evaluator' => 'ارزیاب کسب و کار',
        'Technical Decision Maker' => 'تصمیم‌گیرنده‌ی فنی',
        'Technical Evaluator' => 'ارزیاب فنی',
        'Executive Sponsor' => 'حامی اجرایی',
        'Influencer' => 'تاثیرگذار',
        'Other' => 'سایر',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'مخاطب جایگزین',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'نقدی 15 روزه',
        'Net 30' => 'نقدی 30 روزه',
    ),
    'sales_stage_default_key' => 'بالقوه سازی',
    'sales_stage_dom' => array(
        'Prospecting' => 'بالقوه سازی',
        'Qualification' => 'صلاحیت سنجی',
        'Needs Analysis' => 'نیاز به بررسی',
        'Value Proposition' => 'مقایسه ارزش',
        'Id. Decision Makers' => 'شناسایی تصمیم گیرندگان',
        'Perception Analysis' => 'تحلیل ادراک',
        'Proposal/Price Quote' => 'پیشنهاد قیمت',
        'Negotiation/Review' => 'مذاکره/مرور',
        'Closed Won' => 'قرارداد بسته شد',
        'Closed Lost' => 'شکست خورد',
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
        'Call' => 'تماس',
        'Meeting' => 'جلسه',
        'Task' => 'وظیفه',
        'Email' => 'ایمیل',
        'Note' => 'یادداشت',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'آقای',
        'Ms.' => 'خانم',
        'Mrs.' => 'خانم.',
        'Miss' => 'خانم',
        'Dr.' => 'دکتر',
        'Prof.' => 'پروفسور',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 دقیقه قبل',
        300 => '5 دقیقه قبل',
        600 => '10 دقیقه قبل',
        900 => '15 دقیقه قبل',
        1800 => '30 دقیقه قبل',
        3600 => '1 ساعت قبل',
        7200 => '2 ساعت قبل',
        10800 => '3 ساعت قبل',
        18000 => '5 ساعت قبل',
        86400 => '1 روز قبل',
    ),

    'task_priority_default' => 'متوسط',
    'task_priority_dom' => array(
        'High' => 'بالا',
        'Medium' => 'متوسط',
        'Low' => 'پایین',
    ),
    'task_status_default' => 'شروع نشده',
    'task_status_dom' => array(
        'Not Started' => 'شروع نشده',
        'In Progress' => 'در حال انجام',
        'Completed' => 'تکمیل شده',
        'Pending Input' => 'منتظر ورودی',
        'Deferred' => 'معوق',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'برقرار شد',
        'Not Held' => 'برقرار نشد',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'سایر',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'برقرار شد',
        'Not Held' => 'برقرار نشد',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'ورودی',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'جدید',
        'Assigned' => 'محول شده',
        'In Process' => 'در حال پردازش',
        'Converted' => 'تبدیل شده',
        'Recycled' => 'بازیابی شده',
        'Dead' => 'از بین رفته',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'بالا',
        'P2' => 'متوسط',
        'P3' => 'پایین',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'کاربر عادی',
        'Administrator' => 'مدیر کل',
    ),
    'user_status_dom' => array(
        'Active' => 'فعال',
        'Inactive' => 'غیر فعال',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'کد ایمیل',
    ),
    'employee_status_dom' => array(
        'Active' => 'فعال',
        'Terminated' => 'فسخ شده',
        'Leave of Absence' => 'مرخصی',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'بالا',
        'Medium' => 'متوسط',
        'Low' => 'پایین',
    ),
    'project_task_priority_default' => 'متوسط',

    'project_task_status_options' => array(
        'Not Started' => 'شروع نشده',
        'In Progress' => 'در حال انجام',
        'Completed' => 'تکمیل شده',
        'Pending Input' => 'منتظر ورودی',
        'Deferred' => 'معوق',
    ),
    'project_task_utilization_options' => array(
        '0' => 'هیچ‌کدام',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'پیش نویس',
        'In Review' => 'در حال بررسی',
        'Underway' => 'در حال انجام',
        'On_Hold' => 'در انتظار',
        'Completed' => 'تکمیل شده',
    ),
    'project_status_default' => 'پیش نویس',

    'project_duration_units_dom' => array(
        'Days' => 'روز',
        'Hours' => 'ساعت',
    ),

    'activity_status_type_dom' => array(
        '' => '--هیچ--',
        'active' => 'فعال',
        'inactive' => 'غیر فعال',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'حساب ها',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'مرکز',
        'Opportunities' => 'فرصت',
        'Cases' => 'خدمات',
        'Leads' => 'سرنخ',
        'Contacts' => 'مخاطب', // cn (11/22/2005) added to support Emails

        'Bugs' => 'اشکال',
        'Project' => 'پروژه',

        'Prospects' => 'هدف',
        'ProjectTask' => 'وظیفه‌ی پروژه',

        'Tasks' => 'وظیفه',

        'AOS_Contracts' => 'قرارداد',
        'AOS_Invoices' => 'فاکتور',
        'AOS_Quotes' => 'پیش‌فاکتور',
        'AOS_Products' => 'مجصول',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'مرکز',
        'Contacts' => 'مخاطب',
        'Opportunities' => 'فرصت',
        'Campaigns' => 'کمپین',
        'Tasks' => 'وظیفه',
        'Emails' => 'ایمیل',

        'Bugs' => 'اشکال',
        'Project' => 'پروژه',
        'ProjectTask' => 'وظیفه‌ی پروژه',
        'Prospects' => 'هدف',
        'Cases' => 'خدمات',
        'Leads' => 'سرنخ',

        'Meetings' => 'جلسه',
        'Calls' => 'تماس',

        'AOS_Contracts' => 'قرارداد',
        'AOS_Invoices' => 'فاکتور',
        'AOS_Quotes' => 'پیش‌فاکتور',
        'AOS_Products' => 'مجصول',
    ),

    'parent_type_display' => array(
        'Accounts' => 'مرکز',
        'Contacts' => 'مخاطب',
        'Tasks' => 'وظیفه',
        'Opportunities' => 'فرصت',

        'Bugs' => 'اشکال',
        'Cases' => 'خدمات',
        'Leads' => 'سرنخ',

        'Project' => 'پروژه',
        'ProjectTask' => 'وظیفه‌ی پروژه',

        'Prospects' => 'هدف',

        'AOS_Contracts' => 'قرارداد',
        'AOS_Invoices' => 'فاکتور',
        'AOS_Quotes' => 'پیش‌فاکتور',
        'AOS_Products' => 'مجصول',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'پیش‌فاکتورها',
        'AOS_Invoices' => 'فاکتورها',
        'AOS_Contracts' => 'قراردادها',
    ),
    'issue_priority_default_key' => 'متوسط',
    'issue_priority_dom' => array(
        'Urgent' => 'فوری',
        'High' => 'بالا',
        'Medium' => 'متوسط',
        'Low' => 'پایین',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'پذیرفته شده',
        'Duplicate' => 'تکراری',
        'Closed' => 'بسته',
        'Out of Date' => 'تاریخ گذشته',
        'Invalid' => 'نامعتبر',
    ),

    'issue_status_default_key' => 'جدید',
    'issue_status_dom' => array(
        'New' => 'جدید',
        'Assigned' => 'محول شده',
        'Closed' => 'بسته',
        'Pending' => 'انتظار',
        'Rejected' => 'رد شده',
    ),

    'bug_priority_default_key' => 'متوسط',
    'bug_priority_dom' => array(
        'Urgent' => 'فوری',
        'High' => 'بالا',
        'Medium' => 'متوسط',
        'Low' => 'پایین',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'پذیرفته شده',
        'Duplicate' => 'تکراری',
        'Fixed' => 'برطرف شده',
        'Out of Date' => 'تاریخ گذشته',
        'Invalid' => 'نامعتبر',
        'Later' => 'بعداً',
    ),
    'bug_status_default_key' => 'جدید',
    'bug_status_dom' => array(
        'New' => 'جدید',
        'Assigned' => 'محول شده',
        'Closed' => 'بسته',
        'Pending' => 'انتظار',
        'Rejected' => 'رد شده',
    ),
    'bug_type_default_key' => 'اشکال',
    'bug_type_dom' => array(
        'Defect' => 'نقص',
        'Feature' => 'ویژگی',
    ),
    'case_type_dom' => array(
        'Administration' => 'مدیریت',
        'Product' => 'مجصول',
        'User' => 'کاربر',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'داخلی',
        'Forum' => 'انجمن',
        'Web' => 'وب',
        'InboundEmail' => 'ایمیل',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'حساب ها',
        'Activities' => 'فعالیت‌ها',
        'Bugs' => 'اشکالات',
        'Calendar' => 'تقویم',
        'Calls' => 'تماس‌ها',
        'Campaigns' => 'کمپین‌ها',
        'Cases' => 'خدمات',
        'Contacts' => 'مخاطب‌ها',
        'Currencies' => 'واحدهای پول',
        'Dashboard' => 'پیشخوان',
        'Documents' => 'اسناد',
        'Emails' => 'ایمیل‌ها',
        'Feeds' => 'خوراک‌ها',
        'Forecasts' => 'پیش‌بینی‌ها',
        'Help' => 'کمک',
        'Home' => 'خانه',
        'Leads' => 'سرنخ‌ها',
        'Meetings' => 'جلسات',
        'Notes' => 'یادداشت‌ها',
        'Opportunities' => 'فرصت‌ها',
        'Outlook Plugin' => 'افزونه Outlook',
        'Projects' => 'پروژه ها',
        'Quotes' => 'پیش‌فاکتورها',
        'Releases' => 'نسخه‌ها',
        'RSS' => 'خبرخوان',
        'Studio' => 'استودیو',
        'Upgrade' => 'ارتقاء',
        'Users' => 'کاربرها',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'در حال برنامه‌ریزی',
        'Active' => 'فعال',
        'Inactive' => 'غیر فعال',
        'Complete' => 'تکمیل',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'فروش تلفنی',
        'Mail' => 'پست',
        'Email' => 'ایمیل',
        'Print' => 'چاپی',
        'Web' => 'وب',
        'Radio' => 'رادیو',
        'Television' => 'تلویزیون',
        'NewsLetter' => 'خبرنامه',
        'Survey' => 'نظرسنجی',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'هفتگی',
        'Monthly' => 'ماهیانه',
        'Quarterly' => 'فصلی',
        'Annually' => 'سالانه',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'ژانویه',
        '2' => 'فوریه',
        '3' => 'مارس',
        '4' => 'آوریل',
        '5' => 'می',
        '6' => 'ژوئن',
        '7' => 'جولای',
        '8' => 'آگوست',
        '9' => 'سپتامبر',
        '10' => 'اکتبر',
        '11' => 'نوامبر',
        '12' => 'دسامبر',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'ژانویه',
        '2' => 'فوریه',
        '3' => 'مارس',
        '4' => 'آوریل',
        '5' => 'می',
        '6' => 'ژوئن',
        '7' => 'جولای',
        '8' => 'آگوست',
        '9' => 'سپتامبر',
        '10' => 'اکتبر',
        '11' => 'نوامبر',
        '12' => 'دسامبر',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'یکشنبه',
        '2' => 'دوشنبه',
        '3' => 'سه‌شنبه',
        '4' => 'چهارشنبه',
        '5' => 'پنج‌شنبه',
        '6' => 'جمعه',
        '7' => 'شنبه',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'یکشنبه',
        '2' => 'دوشنبه',
        '3' => 'سه‌شنبه',
        '4' => 'چهارشنبه',
        '5' => 'پنج‌شنبه',
        '6' => 'جمعه',
        '7' => 'شنبه',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'قبل از ظهر',
        'pm' => 'بعد از ظهر',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'قبل از ظهر',
        'PM' => 'بعد از ظهر',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'شخصی',
        'group' => 'گروه',
        'bounce' => 'پرش',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'احراز هویت پایه',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'احراز هویت پایه',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'شخصی',
        'group' => 'گروه',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'شخصی',
        'group' => 'گروه',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'شخصی',
        'group' => 'گروه',
        'system' => 'سیستم',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'فعال',
        'Inactive' => 'غیر فعال',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'جستجوی چند کلمه ای',
      'single' => 'جستجوی یک کلمه ای',
    ],

    'dom_email_types' => array(
        'out' => 'ارسال شده',
        'archived' => 'آرشیو شده',
        'draft' => 'پیش نویس',
        'inbound' => 'ورودی',
        'campaign' => 'کمپین',
    ),
    'dom_email_status' => array(
        'archived' => 'آرشیو شده',
        'closed' => 'بسته',
        'draft' => 'در پیش‌نویس',
        'read' => 'خوانده‌شده',
        'replied' => 'پاسخ داده‌شده',
        'sent' => 'ارسال شده',
        'send_error' => 'خطای ارسال',
        'unread' => 'خوانده نشده',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'آرشیو شده',
    ),

    'dom_email_server_type' => array(
        '' => '--هیچ--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--هیچ--',
        'createcase' => 'ایجاد خدمات',
        'bounce' => 'Bounce Handling',
    ),
    'dom_email_distribution' => array(
        '' => '--هیچ--',
        'direct' => 'اختصاص مستقیم',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'کم مشغله‌ترین',
    ),
    'dom_email_errors' => array(
        1 => 'در هنگام اختصاص مستقیم آیتم ها تنها انتخاب یک کاربر مجاز است.',
        2 => 'در زمان اختصاص مستقیم ، باید فقط موارد تأیید شده را اختصاص دهید.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'بله',
        'bool_false' => 'خير',
    ),
    'dom_int_bool' => array(
        1 => 'بله',
        0 => 'خير',
    ),
    'dom_switch_bool' => array(
        'on' => 'بله',
        'off' => 'خير',
        '' => 'خير',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'کلاینت ایمیل SuiteCRM',
        'mailto' => 'کلاینت ایمیل خارجی',
    ),

    'dom_editor_type' => array(
        'none' => 'HTML مستقیم',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'موزاییک',
    ),

    'dom_email_editor_option' => array(
        '' => 'فرمت ایمیل پیش‌فرض',
        'html' => 'ایمیل‌ HTML',
        'plain' => 'ایمیل‌ متنی ساده',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'از زمان اجرا گذشته، اجرا نشده',
        'ready' => 'آماده',
        'in progress' => 'در حال انجام',
        'failed' => 'انجام نشد',
        'completed' => 'تکمیل شده',
        'no curl' => 'اجرا نشده: cURL در دسترس نیست',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'فعال',
        'Inactive' => 'غیر فعال',
    ),

    'scheduler_period_dom' => array(
        'min' => 'دقیقه',
        'hour' => 'ساعت',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'بازاریابی',
        'Knowledege Base' => 'دانش بنیان',
        'Sales' => 'فروش',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'آرشیو شده',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'تضمین بازاریابی',
        'Product Brochures' => 'بروشور محصولات',
        'FAQ' => 'سوالات متداول',
    ),

    'document_status_dom' => array(
        'Active' => 'فعال',
        'Draft' => 'پیش نویس',
        'FAQ' => 'سوالات متداول',
        'Expired' => 'منقضی شده',
        'Under Review' => 'تحت بررسی',
        'Pending' => 'انتظار',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'ادغام پست',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'مجوز توافقنامه',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'پذیرش',
        'decline' => 'رد',
        'tentative' => 'آزمایشی',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'پذیرفته شده',
        'decline' => 'رد شده',
        'tentative' => 'آزمایشی',
        'none' => 'هیچ‌کدام',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'هیچ‌کدام',
        'Daily' => 'روزانه',
        'Weekly' => 'هفتگی',
        'Monthly' => 'ماهیانه',
        'Yearly' => 'سالانه',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'روز',
        'Weekly' => 'هفته',
        'Monthly' => 'ماه',
        'Yearly' => 'سال',
    ),

    'duration_dom' => array(
        '' => 'هیچ‌کدام',
        '900' => '15 دقیقه',
        '1800' => '30 دقیقه',
        '2700' => '45 دقیقه',
        '3600' => '1 ساعت',
        '5400' => '1.5 ساعت',
        '7200' => '2 ساعت',
        '10800' => '3 ساعت',
        '21600' => '6 ساعت',
        '86400' => '1 روز',
        '172800' => '2 روز',
        '259200' => '3 روز',
        '604800' => '1 هفته',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'پیش‌فرض',
        'seed' => 'دانه',
        'exempt_domain' => 'لیست توقیف - توسط دامنه',
        'exempt_address' => 'لیست توقیف - توسط آدرس ایمیل',
        'exempt' => 'لیست توقیف - توسط شناسه',
        'test' => 'تست',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'فعال',
        'inactive' => 'غیر فعال',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'پیام ارسال شد/به ارسال پیام اقدام شد',
        'send error' => 'ارسال ناموفق، سایر',
        'invalid email' => 'ارسال ناموفق، ایمیل نامعتبر',
        'link' => 'لینک قابل کلیک',
        'viewed' => 'پیام مشاهده‌شده',
        'removed' => 'انصراف داده',
        'lead' => 'سرنخ‌های ایجاد شده',
        'contact' => 'مخاطب‌های ایجاد شده',
        'blocked' => 'توسط آدرس یا دامنه متوقف شده',
        'Survey' => 'نظرسنجی پاسخ داده شد',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'مخاطب‌ها',
        'Users' => 'کاربرها',
        'Prospects' => 'اهداف',
        'Leads' => 'سرنخ‌ها',
        'Accounts' => 'حساب ها',
    ),
    'merge_operators_dom' => array(
        'like' => 'شامل',
        'exact' => 'دقیقاً',
        'start' => 'شروع می‌شود با',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'بله',
        'false' => 'خير',
        'required' => 'ضروری',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'غیرفعال شده',
        1 => 'فعال شده',
        2 => 'فیلتر',
        3 => 'فیلتر انتخاب شده پیش فرض',
        4 => 'تنها فیلتر',
    ),

    'projects_priority_options' => array(
        'high' => 'بالا',
        'medium' => 'متوسط',
        'low' => 'پایین',
    ),

    'projects_status_options' => array(
        'notstarted' => 'شروع نشده',
        'inprogress' => 'در حال انجام',
        'completed' => 'تکمیل شده',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'گسترش Legend',
        'collapselegend' => 'بستن Legend',
        'clickfordrilldown' => 'برای Drilldown کلیک کنید',
        'detailview' => 'جزئیات بیشتر...',
        'piechart' => 'نمودار دایره‌ای',
        'groupchart' => 'نمودار گروهی',
        'stackedchart' => 'نمودار پشته‌ای',
        'barchart' => 'نمودار میله‌ای',
        'horizontalbarchart' => 'نمودار میله‌ای افقی',
        'linechart' => 'نمودار خطی',
        'noData' => 'داده در دسترس نیست',
        'print' => 'چاپی',
        'pieWedgeName' => 'بخش‌ها',
    ),
    'release_status_dom' => array(
        'Active' => 'فعال',
        'Inactive' => 'غیر فعال',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'کوتیشن تکی (\')',
        '"' => 'کوتیشن دوتایی (")',
        '' => 'هیچ‌کدام',
        'other' => 'سایر:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'سایر:',
    ),
    'link_target_dom' => array(
        '_blank' => 'پنجره جديد',
        '_self' => 'همان پنجره',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'خودکار ریفرش نشود',
        '30' => 'هر 30 ثانیه',
        '60' => 'هر 1 دقیقه',
        '180' => 'هر 3 دقیقه',
        '300' => 'هر 5 دقیقه',
        '600' => 'هر 10 دقیقه',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'هرگز',
        '30' => 'هر 30 ثانیه',
        '60' => 'هر 1 دقیقه',
        '180' => 'هر 3 دقیقه',
        '300' => 'هر 5 دقیقه',
        '600' => 'هر 10 دقیقه',
    ),
    'date_range_search_dom' => array(
        '=' => 'برابراست با',
        'not_equal' => 'نه در',
        'greater_than' => 'بعد از',
        'less_than' => 'قبل از',
        'last_7_days' => '7 روز گذشته',
        'next_7_days' => '7 روز آینده',
        'last_30_days' => '30 روز گذشته',
        'next_30_days' => '30 روز آینده',
        'last_month' => 'ماه گذشته',
        'this_month' => 'این ماه',
        'next_month' => 'ماه آینده',
        'last_year' => 'سال گذشته',
        'this_year' => 'امسال',
        'next_year' => 'سال آینده',
        'between' => 'هست بین',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'برابراست با',
        'not_equal' => 'برابر نیست با',
        'greater_than' => 'بزرگ‌تر از',
        'greater_than_equals' => 'بزرگ‌تر یا برابر با',
        'less_than' => 'کوچک‌تر از',
        'less_than_equals' => 'کوچک‌تر یا برابر با',
        'between' => 'هست بین',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'کپی',
        'move' => 'جابجا',
        'donothing' => 'هیچ کاری انجام نده',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'نتایج',
    'ERR_SEARCH_INVALID_QUERY' => 'در هنگام جستجو خطایی رخ داده است. ممکن است متن جستجوی شما معتبر نباشد.',
    'ERR_SEARCH_NO_RESULTS' => 'هیچ نتیجه ای مطابق با معیارهای جستجوی شما یافت نشد. جستجوی خود را کلی تر کنید.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'کد ایمیل:',
    'LBL_SEND' => 'ارسال',
    'LBL_LOGOUT' => 'خروج',
    'LBL_TOUR_NEXT' => 'ادامه',
    'LBL_TOUR_SKIP' => 'صرف‌نظر',
    'LBL_TOUR_BACK' => 'بازگشت',
    'LBL_TOUR_TAKE_TOUR' => 'تور آشنایی با سیستم را ببین',
    'LBL_MOREDETAIL' => 'جزئیات بیشتر' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'ویرایش درون‌خطی' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'نمايش' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'فیلتر' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'ﺍﻓﺰﻭﺩﻥ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'افزودن آدرس ایمیل' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'مخفی کردن/نمایش' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'حذف' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'پاکسازی' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'حذف' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'حذف آدرس ایمیل' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'انصراف',
    'LBL_ID_FF_INVALID' => 'Make Invalid',
    'LBL_ADD' => 'ﺍﻓﺰﻭﺩﻥ' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'لوگوی شرکت' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'پاپ-آپ اتصالگرها',
    'LBL_CLOSEINLINE' => 'بستن',
    'LBL_VIEWINLINE' => 'نمايش',
    'LBL_INFOINLINE' => 'اطلاعات',
    'LBL_PRINT' => 'چاپی',
    'LBL_HELP' => 'کمک',
    'LBL_ID_FF_SELECT' => 'انتخاب',
    'DEFAULT' => 'ساده',
    'LBL_SORT' => 'مرتب‌سازی',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP براساس SSL فعال شود یا TLS؟',
    'LBL_NO_ACTION' => 'هیچ عملیاتی با این نام وجود ندارد: %s',
    'LBL_NO_SHORTCUT_MENU' => 'هیچ اقدامی در دسترس نیست.',
    'LBL_NO_DATA' => 'بدون داده',

    'LBL_ROUTING_FLAGGED' => 'پرچم‌گذاری شد',
    'LBL_ROUTING_TO' => 'به',
    'LBL_ROUTING_TO_ADDRESS' => 'به آدرس',
    'LBL_ROUTING_WITH_TEMPLATE' => 'با الگو',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'در حال حاضر این رکورد شامل مقادیر در فیلد دفتر تلفن و آدرس می باشد. برای بازنویسی این مقادیر براساس تلفن و آدرس حسابی که شما انتخاب نموده اید، روی "تایید" کلیک نمایید در غیر این صورت برای حفظ مقادیر فعلی، روی "لغو" کلیک نمایید.',
    'LBL_DROP_HERE' => '[در اینجا رها کنید]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'با پیش فرض &#153; پرکنید',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'نام',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'ویژگی‌های سرور ایمیل خروجی',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'گذرواژه SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'پورت SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'سرور SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'نام کاربری SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'پیش‌فرض',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'هشدار: نام کاربری و گذرواژه برای حساب ایمیل خروجی وجود ندارد.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'لطفاً یک اتصال OAuth خارجی تنظیم کنید.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'اخطار: رمز عبور تعیین نشده است.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => '',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => '"حساب‌های پست الکترونیک" را برای مشاهده پست الکترونیک های ورودی (از حساب پست الکترونیک خودتان) تنظیم نمایید.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'اطلاعات سرور پست الکترونیک SMTP را برای استفاده از پست الکترونیک خروجی در حساب‌های پست الکترونیک ارائه دهید.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'ﺍﻧﺠﺎﻡ شد',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'پاکسازی',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'به:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'رونوشت:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'رونوشت مخفی:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'آدرس ایمیل',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'فیلتر',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'نام',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'هیچ آدرسی یافت نشد',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'ذخیره و افزودن به دفترچه آدرس',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'انتخاب دریافت کنندگان ایمیل',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'دفترچه‌ آدرس',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'هشدار! این حساب کاربری خروجی که شما سعی در حذف آن دارید، مربوط به یک حساب کاربری وردوی موجود است. آیا از ادامه اطمینان دارید؟',
    'LBL_EMAIL_ADDRESSES' => 'ایمیل',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'آدرس ایمیل',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'تایید آدرس ایمیل امکان‌پذیر نیست',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'درون‌ریزی به SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'تکلیف',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'پیوست',
    'LBL_EMAIL_ATTACHMENT' => 'پیوست',
    'LBL_EMAIL_ATTACHMENTS' => 'از سیستم محلی',
    'LBL_EMAIL_ATTACHMENTS2' => 'از اسناد SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'پیوست‌های قالب',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'فایل',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'سند',
    'LBL_EMAIL_BCC' => 'رونوشت پنهان',
    'LBL_EMAIL_CANCEL' => 'لغو',
    'LBL_EMAIL_CC' => 'رونوشت',
    'LBL_EMAIL_CHARSET' => 'مجموعه کاراکترها',
    'LBL_EMAIL_CHECK' => 'بررسی ایمیل',
    'LBL_EMAIL_CHECKING_NEW' => 'بررسی برای ایمیل جدید',
    'LBL_EMAIL_CHECKING_DESC' => 'لطفا یک لحظه صبر کنید...<br><br>اگر این اولین بررسی حساب ایمیل است، احتمال دارد کمی طول بکشد.',
    'LBL_EMAIL_CLOSE' => 'بستن',
    'LBL_EMAIL_COFFEE_BREAK' => 'بررسی ایمیل‌ جدید. <br><br>برای حساب‌های ایمیل حجیم ممکن است خیلی طول بکشد.',

    'LBL_EMAIL_COMPOSE' => 'ایمیل',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'لطفاً گیرند(گان) این ایمیل را وارد کنید.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'متن ایمیل خالی است. با این حال ارسال شود؟',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'این ایمیل عنوان ندارد. با این حال ارسال شود؟',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(بدون موضوع)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'لطفاً برای کادرهای To/CC/BCC آدرس ایمیل معتبر وارد کنید',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'از بین بردن این ایمیل؟',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'آیا از حذف این امضا اطمینان دارید؟',

    'LBL_EMAIL_SENT_SUCCESS' => 'ایمیل فرستاده شد',

    'LBL_EMAIL_CREATE_NEW' => '--ایجاد در ذخیره--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'چندگانه',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'خالی',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'تاریخ ارسال توسط فرستنده',
    'LBL_EMAIL_DATE_TODAY' => 'امروز',
    'LBL_EMAIL_DELETE' => 'حذف',
    'LBL_EMAIL_DELETE_CONFIRM' => 'حذف پیام‌های انتخاب شده؟',
    'LBL_EMAIL_DELETE_SUCCESS' => 'ایمیل با موفقیت حذف شد.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'در حال حذف پیام',
    'LBL_EMAIL_DETAILS' => 'جزئيات',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'تنها آدرس‌ اصلی در زمان کار کردن با مخاطب‌ها استفاده می‌شود.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'خالی کردن سطل زباله',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'در حال حذف سرور خروجی',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'پاک کردن فایل‌های کش',
    'LBL_EMAIL_EMPTY_MSG' => 'هیچ ایمیلی برای نمایش وجود ندارد.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'هیچ آدرس ایمیلی برای نمایش وجود ندارد.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'نام پوشه باید یکتا بوده و خالی نباشد. لطفا دوباره تلاش کنید.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'یک پوشه قابل حذف نیست. این پوشه یا زیرمجموعه‌هایش با ایمیل‌ها یا یک صندوق پستی مرتبط هستند.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'نمی توان پوشه‌ی مورد نظر در این زمینه را مشخص کرد. لطفا دوباره سعی کنید.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'لطفا تنظیمات را بررسی کنید.',
    'LBL_EMAIL_ERROR_DESC' => 'خطاهایی یافت شد: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'شما به این بخش دسترسی ندارید. جهت بدست آوردن دسترسی با مدیر سایت خود تماس بگیرید.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'نام پوشه SuiteCRM باید یکتا باشد.',
    'LBL_EMAIL_ERROR_EMPTY' => 'لطفاً چند معیار جستجو وارد کنید.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'یک خطا رخ داده است',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'پیام از سرور حذف شد',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'پیام مورد نظر حذف شده یا به پوشه‌ی دیگری منتقل شده است',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'عدم موفقیت در اتصال به سرور ایمیل. لطفا با مدیر تماس بگیرید',
    'LBL_EMAIL_ERROR_MOVE' => 'در حال حاضر از جابجا کردن ایمیل بین سرورها و/یا بین حساب‌های ایمیل، پشتیبانی نمی‌شود.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'خطا در جابجایی',
    'LBL_EMAIL_ERROR_NAME' => 'یک نام مورد نیاز است.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'آدرس فرستنده مورد نیاز است. لطفا یک آدرس ایمیل معتبر وارد کنید.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'لطفا یک فایل فراهم کنید.',
    'LBL_EMAIL_ERROR_SERVER' => 'آدرس سرور ایمیل مورد نیاز است.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'حساب ایمیل احتمالا ذخیره نشده است.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'در برقراری ارتباط با سرور ایمیل خطایی رخ داده است.',
    'LBL_EMAIL_ERROR_USER' => 'نام ورود به سیستم مورد نیاز است.',
    'LBL_EMAIL_ERROR_PORT' => 'پورت سرور ایمیل مورد نیاز است.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'پروتکل سرور مورد نیاز است.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'پوشه های تحت نظارت مورد نیاز است.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'پوشه سطل زباله مورد نیاز است.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'این اطلاعات در دسترس نیست',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'هیچ سرور خروجی ایمیلی مشخص نشده است.',
    'LBL_EMAIL_ERROR_SENDING' => 'خطا در ارسال ایمیل. لطفا برای رسیدگی با مدیر تماس حاصل نمایید.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'پوشه‌ها',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'ﺍﻓﺰﻭﺩﻥ',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'افزودن پوشه جدید',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'تغییر نام پوشه',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'ذخيره',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'افزودن این پوشه به',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'این پوشه را نمی‌توان تغییر داد',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'آیا از حذف این پوشه مطمئن هستید؟\nاین فرآیند برگشت پذیر نیست.\nبا حذف این پوشه، تمام پوشه‌های درون آن نیز خذف خواهند شد.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'نام پوشه جدید',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'لطفا قبل از انجام این کار یک پوشه را انتخاب کنید.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'مدیریت پوشه‌ها',

    'LBL_EMAIL_FORWARD' => 'ارسال',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[count] از [total] ایمیل دانلود شد',
    'LBL_EMAIL_FROM' => 'فرستنده',
    'LBL_EMAIL_GROUP' => 'گروه',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'گروه',
    'LBL_EMAIL_HOME_FOLDER' => 'خانه',
    'LBL_EMAIL_IE_DELETE' => 'در حال حذف حساب ایمیل',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'در حال حذف امضا',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'آیا از حذف این حساب ایمیل مطمئن هستید؟',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'حذف موفق.',
    'LBL_EMAIL_IE_SAVE' => 'در حال ذخیره‌ی اطلاعات حساب ایمیل',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'درون‌ریزی ایمیل',
    'LBL_EMAIL_IMPORT_EMAIL' => 'درون‌ریزی به SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'درون‌ریزی تنظیمات',
    'LBL_EMAIL_INVALID' => 'نامعتبر',
    'LBL_EMAIL_LOADING' => 'در حال بارگذاری...',
    'LBL_EMAIL_MARK' => 'علامت‌گذاری',
    'LBL_EMAIL_MARK_FLAGGED' => 'نشانه دار',
    'LBL_EMAIL_MARK_READ' => 'به عنوان خوانده‌شده',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'به عنوان علامتگذاری نشده',
    'LBL_EMAIL_MARK_UNREAD' => 'به عنوان خوانده‌نشده',
    'LBL_EMAIL_ASSIGN_TO' => 'اختصاص به',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'ایجاد پوشه',
    'LBL_EMAIL_MENU_COMPOSE' => 'ارسال به',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'حذف پوشه',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'خالی کردن زباله‌دان',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'همگام‌سازی',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'خالی کردن حافظه موقت',
    'LBL_EMAIL_MENU_REMOVE' => 'حذف',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'تغییر نام پوشه',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'در حال تغییر نام پوشه',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'لطفا پیش از انجام این عملیات، بخشی را انتخاب کنید.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'ایجاد پوشه (از راه دور و یا در SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'حذف یک پوشه (از راه دور و یا در SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'تمام پوشه‌های زباله‌دان در حساب‌های ایمیل شما را خالی خواهد کرد',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'این ایمیل(ها) را به عنوان خوانده شده علامت‌گذاری کن',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'علامت گذاری ایمیل(ها) به عنوان نشان گذاری نشده',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'تغییر نام پوشه (از راه دور و یا در SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'پیام‌ها',

    'LBL_EMAIL_ML_NAME' => 'نام لیست',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'آدرس‌های لیست انتخاب شده',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'آدرس‌های لیست موجود',

    'LBL_EMAIL_MULTISELECT' => 'برای انتخاب چند گزینه با نگهداشتن دکمه کنترل کلیک نمایید<br/>
(کاربران مک از دکمه کامند و کلیک استفاده نمایند)',

    'LBL_EMAIL_NO' => 'خير',
    'LBL_EMAIL_NOT_SENT' => 'سیستم قادر به پردازش درخواست شما نیست. لطفاً با مدیر سیستم تماس بگیرید.',

    'LBL_EMAIL_OK' => 'باشه',
    'LBL_EMAIL_ONE_MOMENT' => 'یک لحظه لطفاً...',
    'LBL_EMAIL_OPEN_ALL' => 'باز کردن چندین پیام',
    'LBL_EMAIL_OPTIONS' => 'گزینه ها',
    'LBL_EMAIL_QUICK_COMPOSE' => 'نوشتن سریع',
    'LBL_EMAIL_OPT_OUT' => 'انصراف داده',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'رد شد و غیر معتبر است',
    'LBL_EMAIL_PERFORMING_TASK' => 'در حال انجام وظیفه',
    'LBL_EMAIL_PRIMARY' => 'اصلی',
    'LBL_EMAIL_PRINT' => 'چاپی',

    'LBL_EMAIL_QC_BUGS' => 'اشکال',
    'LBL_EMAIL_QC_CASES' => 'خدمات',
    'LBL_EMAIL_QC_LEADS' => 'سرنخ',
    'LBL_EMAIL_QC_CONTACTS' => 'مخاطب',
    'LBL_EMAIL_QC_TASKS' => 'وظیفه',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'فرصت',
    'LBL_EMAIL_QUICK_CREATE' => 'ایجاد سریع',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'در حال بازسازی پوشه‌ها',
    'LBL_EMAIL_RELATE_TO' => 'مربوط',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'مشاهده روابط',
    'LBL_EMAIL_RECORD' => 'رکورد ایمیل',
    'LBL_EMAIL_REMOVE' => 'حذف',
    'LBL_EMAIL_REPLY' => 'پاسخ',
    'LBL_EMAIL_REPLY_ALL' => 'پاسخ به همه',
    'LBL_EMAIL_REPLY_TO' => 'پاسخ به',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'بازیابی پیام',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'بازیابی رکورد ایمیل',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'لطفا فقط یک رکورد ایمیل را انتخاب کنید',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'بازگشت به ماژول قبلی؟',
    'LBL_EMAIL_REVERT' => 'برگرداندن',
    'LBL_EMAIL_RELATE_EMAIL' => 'ایمیل مربوط',

    'LBL_EMAIL_RULES_TITLE' => 'مدیریت قوانین',

    'LBL_EMAIL_SAVE' => 'ذخيره',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'ذخیره و پاسخ',
    'LBL_EMAIL_SAVE_DRAFT' => 'ذخیره‌ی پیش‌نویس',
    'LBL_EMAIL_DRAFT_SAVED' => 'پیش‌نویس ذخیره شده است',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'از تاریخ',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'تا تاریخ',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'هیچ نتیجه‌ای مطابق جستجوی شما وجود ندارد.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'نتایج جستجو',

    'LBL_EMAIL_SELECT' => 'انتخاب',

    'LBL_EMAIL_SEND' => 'ارسال',
    'LBL_EMAIL_SENDING_EMAIL' => 'در حال ارسال ایمیل',

    'LBL_EMAIL_SETTINGS' => 'تنطیمات',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'حساب ایمیل',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'پاک کردن فرم',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'بررسی برای ایمیل جدید',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'آدرس فرستنده',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'آدرس ایمیل برای آزمودن اعلان:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'نام فرستنده',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'پاسخ به آدرس',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'همگام‌سازی حساب‌های ایمیل',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'یک ایمیل به آدرس مشخص شده، با استفاده از تنظیمات ثبت شده برای نامه ی خروجی، ارسال شد. لطفا برای آنکه از صحت تنظیمات مطمئن شوید، بررسی نمایید که ایمیل دریافت شده باشد.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'مشاهده لاگ کامل SMTP',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'انجام همگام‌سازی کامل\nبرای ایمیل‌هایی با حجم زیاد ممکن است چند دقیقه زمان ببرد.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'برای انتخاب چند پوشه دکمه Ctrl یا Shift را نگه دارید.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'عمومی',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'ایجاد گروه پوشه‌ها',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'ویرایش گروه پوشه',

    'LBL_EMAIL_SETTINGS_NAME' => 'نام حساب ایمیل',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'تعداد ایمیل در هر صفحه در صندوق ورودی را انتخاب کنید. ممکن است برای اعمال تغییرات نیاز به بروزرسانی صقحه باشد.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'در حال بازیابی حساب ایمیل',
    'LBL_EMAIL_SETTINGS_SAVED' => 'تنظیمات ذخیره شد.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'فقط ایمیل با متن ساده ارسال کنید',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'ایمیل در هر صفحه',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'تنظیمات مربوط به نمایش',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'تنظیمات دلخواه',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'پوشه‌های در دسترس کاربر',
    'LBL_EMAIL_ERROR_PREPEND' => 'خطایی در ایمیل رخ داد:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'سرور ایمیل خروجی انتخاب شده برای حساب ایمیلی که استفاده می‌کنید نامعتبر است. تنظیمات را بررسی کنید یا سرور ایمیل دیگری را برای حساب ایمیل انتخاب کنید.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'سرور ایمیل خروجی تنظیم شده، برای ارسال ایمیل پیکربندی نشده است. لطفاً یک سرور ایمیل خروجی تنظیم کنید و یا یک سرور ایمیل خروجی برای حساب ایمیلی که استفاده می‌کنید در قسمت «تنظیمات >> حساب ایمیل» انتخاب کنید.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'امضای پیش‌فرض',
    'LBL_EMAIL_SIGNATURES' => 'امضاها',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'سایر',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Remote Folders ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[پوشه های SuiteCRM ]',
    'LBL_EMAIL_SUBJECT' => 'موضوع',
    'LBL_EMAIL_SUCCESS' => 'موفق',
    'LBL_EMAIL_SUITE_FOLDER' => 'پوشه SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'متن body قالب ایمیل خالی است',
    'LBL_EMAIL_TEMPLATES' => 'قالب‌ها',
    'LBL_EMAIL_TO' => 'به',
    'LBL_EMAIL_VIEW' => 'نمايش',
    'LBL_EMAIL_VIEW_HEADERS' => 'نمایش سرصفحه',
    'LBL_EMAIL_VIEW_RAW' => 'نمایش ایمیل‌های خام',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'این ویژگی هنگام استفاده با POP3 پشتیبانی نمی‌شود.',
    'LBL_DEFAULT_LINK_TEXT' => 'متن پیش‌فرض لینک.',
    'LBL_EMAIL_YES' => 'بله',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'ارسال ایمیل آزمایشی',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'ایمیل آزمایشی ارسال شد',
    'LBL_EMAIL_MESSAGE_NO' => 'شماره پیام',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'درون‌ریزی سپری شد',
    'LBL_EMAIL_IMPORT_FAIL' => 'ایمپورت ناموفق بود زیرا یا پیام از قبل وارد شده یا از سرور حذف شده است',

    'LBL_LINK_NONE' => 'هیچ‌کدام',
    'LBL_LINK_ALL' => 'همه',
    'LBL_LINK_RECORDS' => 'سوابق',
    'LBL_LINK_SELECT' => 'انتخاب',
    'LBL_LINK_ACTIONS' => 'اقدامات',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'تایید',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'آیا می‌خواهید #module# را ببندید؟',
    'LBL_INVALID_FILE_EXTENSION' => 'پسوند فایل نامعتبر',

    'ERR_AJAX_LOAD' => 'یک خطا رخ داده است:',
    'ERR_AJAX_LOAD_FAILURE' => 'مشکلی هنگام پردازش درخواست شما وجود دارد. لطفا بعداً مجددا تلاش کنید.',
    'ERR_AJAX_LOAD_FOOTER' => 'اگر این خطا همچنان ادامه داشت، لطفاً از مدیر سیستم خود بخواهید Ajax را برای این ماژول غیرفعال کند',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'جداکننده اعشاری نمی‌تواند از همان کاراکتر جداکننده هزارگان استفاده کند.\\n\\n لطفاً مقادیر را تغییر دهید.',
    'ERR_DELETE_RECORD' => 'برای حذف این مخاطب یک شماره سابقه باید مشخص شود.',
    'ERR_EXPORT_DISABLED' => 'برون‌بری غیر فعال گردید.',
    'ERR_EXPORT_TYPE' => 'خطا هنگام خروجی گرفتن ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'آدرس ایمیل معتبر نیست.',
    'ERR_INVALID_FILE_REFERENCE' => 'مرجع فایل نامعتبر است',
    'ERR_NO_HEADER_ID' => 'این ویژگی در این قالب در دسترس نیست.',
    'ERR_NOT_ADMIN' => 'دسترسی های غیر مجاز به مدیر.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'فیلدهای مورد نیاز تکمیل نشده:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'فیلدهای مورد نیاز با مقادیر نامعتبر:',
    'ERR_INVALID_VALUE' => 'مقدار نامعتبر:',
    'ERR_NO_SUCH_FILE' => 'فایل در سیستم وجود ندارد',
    'ERR_NO_SINGLE_QUOTE' => 'نمی‌توان از علامت نقل قول تکی استفاده کرد برای ',
    'ERR_NOTHING_SELECTED' => 'لطفا قبل از ادامه یک گزینه را انتخاب کنید.',
    'ERR_SELF_REPORTING' => 'کاربر نمی تواند به خودش گزارش دهد.',
    'ERR_SQS_NO_MATCH_FIELD' => 'بدون تطابق زمینه: ',
    'ERR_SQS_NO_MATCH' => 'مطابق نیست',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'لطفا \'کلید\' شاخص را در ویژگی displayParams برای تعریف متا-دیتا مشخص کنید',
    'ERR_EXISTING_PORTAL_USERNAME' => 'خطا: نام پورتال در حال حاضر به مخاطب دیگری اختصاص یافته است.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'هنگام تلاش برای ذخیره در حساب خارجی، خطایی روی داد.',
    'ERR_NO_DB' => 'امکان اتصال به پایگاه داده وجود ندارد. لطفا برای جزئیات بیشتر به suitecrm.log رجوع کنید (0).',
    'ERR_DB_FAIL' => 'خرابی پایگاه داده. برای جزئیات بیشتر به suitecrm.log مراجعه کنید.',
    'ERR_DB_VERSION' => 'فایل‌های SuiteCRM {0} فقط می‌توانند با یک پایگاه داده SuiteCRM {1} استفاده شوند.',

    'LBL_ACCOUNT' => 'مرکز',
    'LBL_ACCOUNTS' => 'حساب ها',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'فعالیت‌ها',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'مشاهده خلاصه',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'مشاهده خلاصه',
    'LBL_ADD_BUTTON' => 'ﺍﻓﺰﻭﺩﻥ',
    'LBL_ADD_DOCUMENT' => 'افزودن پرونده',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'افزودن به ليست هدف',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'مخاطبین را به لیست اهداف اضافه کنید',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'برای بستن کلیک کنید',
    'LBL_ADDITIONAL_DETAILS' => 'جزئیات بیشتر',
    'LBL_ADMIN' => 'مدیر سیستم',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'بایگانی',
    'LBL_ASSIGNED_TO_USER' => 'اختصاص یافته به کاربر',
    'LBL_ASSIGNED_TO' => 'اختصاص داده شده به:',
    'LBL_BACK' => 'بازگشت',
    'LBL_BILLING_ADDRESS' => 'آدرس صورت‌حساب',
    'LBL_QUICK_CREATE' => 'ایجاد ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'اشکالات',
    'LBL_BY' => 'توسط',
    'LBL_CALLS' => 'تماس‌ها',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'ارسال ایمیل‌های کمپین در صف انتظار',
    'LBL_SUBMIT_BUTTON_LABEL' => 'ثبت',
    'LBL_CASE' => 'خدمات',
    'LBL_CASES' => 'خدمات',
    'LBL_CHANGE_PASSWORD' => 'تغییر گذرواژه',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'انتخاب همه',
    'LBL_CITY' => 'شهر',
    'LBL_CLEAR_BUTTON_LABEL' => 'پاکسازی',
    'LBL_CLEAR_BUTTON_TITLE' => 'پاکسازی',
    'LBL_CLEARALL' => 'پاک کردن همه',
    'LBL_CLOSE_BUTTON_TITLE' => 'بستن',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'بستن و ایجاد جدید',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'بستن و ایجاد جدید',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'نوشتن ایمیل',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'نوشتن ایمیل',
    'LBL_SEARCH_DROPDOWN_YES' => 'بله',
    'LBL_SEARCH_DROPDOWN_NO' => 'خير',
    'LBL_CONTACT_LIST' => 'لیست مخاطب‌ها',
    'LBL_CONTACT' => 'مخاطب',
    'LBL_CONTACTS' => 'مخاطب‌ها',
    'LBL_CONTRACT' => 'قرارداد',
    'LBL_CONTRACTS' => 'قراردادها',
    'LBL_COUNTRY' => 'کشور:',
    'LBL_CREATE_BUTTON_LABEL' => 'ایجاد',
    'LBL_CREATED_BY_USER' => 'کاربر ایجاد کننده',
    'LBL_CREATED_USER' => 'کاربر ایجاد کننده',
    'LBL_CREATED' => 'ایجاد کننده',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'واحد پول:',
    'LBL_DOCUMENTS' => 'اسناد',
    'LBL_DATE_ENTERED' => 'تاریخ ایجاد:',
    'LBL_DATE_MODIFIED' => 'تاریخ ویرایش:',
    'LBL_EDIT_BUTTON' => 'ویرایش',
    'LBL_DUPLICATE_BUTTON' => 'تکراری',
    'LBL_DELETE_BUTTON' => 'حذف',
    'LBL_DELETE' => 'حذف',
    'LBL_DELETED' => 'حذف شده',
    'LBL_DIRECT_REPORTS' => 'گزارش‌های مستقیم',
    'LBL_DONE_BUTTON_LABEL' => 'ﺍﻧﺠﺎﻡ شد',
    'LBL_DONE_BUTTON_TITLE' => 'ﺍﻧﺠﺎﻡ شد',
    'LBL_FAVORITES' => 'علاقمندی‌ها',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'لطفا یک فایل vCard انتخاب کنید',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard تمام فیلدهای مورد نیاز برای این ماژول را ندارد. برای اطلاعات بیشتر به suitecrm.log مراجعه کنید.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'وارد‌سازی vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'وارد‌سازی vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'وارد‌سازی vCard',
    'LBL_VIEW_BUTTON' => 'نمايش',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'ایمیل به عنوان PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'ایمیل به عنوان PDF',
    'LBL_EMAILS' => 'ایمیل‌ها',
    'LBL_EMPLOYEES' => 'کارمندها',
    'LBL_ENTER_DATE' => 'تاریخ را وارد کنید',
    'LBL_EXPORT' => 'خروجي گرفتن',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'برو',
    'LBL_HIDE' => 'پنهان کن',
    'LBL_ID' => 'شناسه',
    'LBL_IMPORT' => 'واردسازی',
    'LBL_IMPORT_STARTED' => 'وارد‌سازی آغاز شد: ',
    'LBL_LAST_VIEWED' => 'مشاهده‌های اخیر',
    'LBL_LEADS' => 'سرنخ‌ها',
    'LBL_LESS' => 'کمتر',
    'LBL_CAMPAIGN' => 'کمپین:',
    'LBL_CAMPAIGNS' => 'کمپین‌ها',
    'LBL_CAMPAIGNLOG' => 'گزارش وضعیت کمپین',
    'LBL_CAMPAIGN_CONTACT' => 'کمپین‌ها',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'هیچ‌کدام',
    'LBL_THEME' => 'قالب:',
    'LBL_FOUND_IN_RELEASE' => 'یافت شده در انتشار یافته ها',
    'LBL_FIXED_IN_RELEASE' => 'رفع شده در انتشار',
    'LBL_LIST_ACCOUNT_NAME' => 'نام حساب',
    'LBL_LIST_ASSIGNED_USER' => 'کاربر',
    'LBL_LIST_CONTACT_NAME' => 'نام مخاطب',
    'LBL_LIST_CONTACT_ROLE' => 'نقش مخاطب',
    'LBL_LIST_DATE_ENTERED' => 'تاریخ ایجاد',
    'LBL_LIST_EMAIL' => 'ایمیل',
    'LBL_LIST_NAME' => 'نام',
    'LBL_LIST_OF' => 'از',
    'LBL_LIST_PHONE' => 'تلفن',
    'LBL_LIST_RELATED_TO' => 'مربوط به',
    'LBL_LIST_USER_NAME' => 'نام کاربر',
    'LBL_LISTVIEW_NO_SELECTED' => 'لطفا برای ادامه ی عملیات حداقل 1 ردیف را انتخاب کنید.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'لطفا برای ادامه ی عملیات حداقل 2 ردیف را انتخاب کنید.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'سوابق انتخاب شده',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'انتخاب شده: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'سیاوش',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'دکتر',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'لغو',
    'LBL_VERIFY' => 'تایید',
    'LBL_RESEND' => 'ارسال مجدد',
    'LBL_PROFILE' => 'پروفایل',
    'LBL_MAILMERGE' => 'ادغام پست',
    'LBL_MASS_UPDATE' => 'به‌روز‌رسانی جمعی',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'هیچ فیلدی برای عملیات به‌روز‌رسانی جمعی در دسترس نیست',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'لغو ایمیل اصلی',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt in Primary Email',
    'LBL_MEETINGS' => 'جلسات',
    'LBL_MEETING_GO_BACK' => 'بازگشت به جلسه',
    'LBL_MEMBERS' => 'اعضای',
    'LBL_MEMBER_OF' => 'عضوی از',
    'LBL_MODIFIED_BY_USER' => 'کاربر ویرایش کننده',
    'LBL_MODIFIED_USER' => 'کاربر ویرایش کننده',
    'LBL_MODIFIED' => 'ویرایش کننده',
    'LBL_MODIFIED_NAME' => 'نام ویرایش کننده',
    'LBL_MORE' => 'بيشتر',
    'LBL_MY_ACCOUNT' => 'تنظیمات من',
    'LBL_NAME' => 'نام',
    'LBL_NEW_BUTTON_KEY' => 'شمال',
    'LBL_NEW_BUTTON_LABEL' => 'ایجاد',
    'LBL_NEW_BUTTON_TITLE' => 'ایجاد',
    'LBL_NEXT_BUTTON_LABEL' => 'ادامه',
    'LBL_NONE' => '--هیچ--',
    'LBL_NOTES' => 'یادداشت‌ها',
    'LBL_OPPORTUNITIES' => 'فرصت‌ها',
    'LBL_OPPORTUNITY_NAME' => 'نام فرصت',
    'LBL_OPPORTUNITY' => 'فرصت',
    'LBL_OR' => 'یا',
    'LBL_PANEL_OVERVIEW' => 'خلاصه',
    'LBL_PANEL_ASSIGNMENT' => 'دیگر',
    'LBL_PANEL_ADVANCED' => 'اطلاعات بیشتر',
    'LBL_PARENT_TYPE' => 'نوع والد',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'کد پستی:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'شهر آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'کشور آدرس اصلی:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'کد پستی آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'استان آدرس اولیه:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ادامه ی خیابان آدرس اصلی 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'خیابان آدرس اصلی 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'آدرس خیابان اصلی:',
    'LBL_PRIMARY_ADDRESS' => 'آدرس اصلی:',

    'LBL_PROSPECTS' => 'چشم انداز',
    'LBL_PRODUCTS' => 'محصولات',
    'LBL_PROJECT_TASKS' => 'وظایف پروژه',
    'LBL_PROJECTS' => 'پروژه ها',
    'LBL_QUOTES' => 'پیش‌فاکتورها',

    'LBL_RELATED' => 'مربوط',
    'LBL_RELATED_RECORDS' => 'سوابق مرتبط',
    'LBL_REMOVE' => 'حذف',
    'LBL_REPORTS_TO' => 'گزارش به',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'فیلد های مورد نیاز را نشان می دهد',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'ﺍﻧﺠﺎﻡ شد',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'فرم کامل',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'فرم کامل',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'ذخیره و ایجاد جدید',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'ذخیره و ایجاد جدید',
    'LBL_SAVE_OBJECT' => 'ذخیره {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'جستجو',
    'LBL_SEARCH_BUTTON_TITLE' => 'جستجو',
    'LBL_FILTER' => 'فیلتر',
    'LBL_SEARCH' => 'جستجو',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'بیشتر',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'فرمت فایل معتبر نیست، تنها فایل های از نوع عکس می توانند بارگذاری شوند.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'انتخاب',
    'LBL_SELECT_BUTTON_TITLE' => 'انتخاب',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'مرور اسناد',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'مرور اسناد',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'انتخاب مخاطب',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'انتخاب مخاطب',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'از میان گزارش ها انتخاب کنید',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'گزارش ها را انتخاب کنید.',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'انتخاب کاربر',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'انتخاب کاربر',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'لغو انتخاب شده‌ها',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'لغو انتخاب شده‌ها',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'لغو انتخاب شده‌ها',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'لغو انتخاب شده‌ها',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'فایل را انتخاب کنید',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'فایل را انتخاب کنید',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'انتخاب کاربر',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'انتخاب کاربر',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'پاک کردن کاربر ',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'پاک کردن کاربر ',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'انتخاب مرکز',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'انتخاب مرکز',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Clear Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Clear Account',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'انتخاب کمپین',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'انتخاب کمپین',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'پاک کردن کمپین',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'پاک کردن کمپین',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'انتخاب مخاطب',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'انتخاب مخاطب',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'انتخاب تیم',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'انتخاب تیم',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'منابع مورد استفاده برای ساخت این صفحه (کوئری ها ، فایل ها)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'ثانیه.',
    'LBL_SERVER_RESPONSE_TIME' => 'زمان پاسخ سرور:',
    'LBL_SERVER_MEMORY_BYTES' => 'بایت',
    'LBL_SERVER_MEMORY_USAGE' => 'استفاده از حافظه سرور: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'کاربرد:-ماژول: {0} - عمل: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'آدرس ارسال کالا',
    'LBL_SHOW' => 'نمایش',
    'LBL_STATE' => 'وضعیت:',
    'LBL_STATUS_UPDATED' => 'Your Status for this event has been updated!',
    'LBL_STATUS' => 'وضعیت',
    'LBL_STREET' => 'خیابان',
    'LBL_SUBJECT' => 'موضوع',

    'LBL_INBOUNDEMAIL_ID' => 'شناسه کاربری ایمیل‌های ورودی',

    'LBL_SCENARIO_SALES' => 'فروش',
    'LBL_SCENARIO_MARKETING' => 'بازاریابی',
    'LBL_SCENARIO_FINANCE' => 'امور مالی',
    'LBL_SCENARIO_SERVICE' => 'خدمات',
    'LBL_SCENARIO_PROJECT' => 'مدیریت پروژه',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'همگام‌سازی',
    'LBL_TABGROUP_ALL' => 'همه',
    'LBL_TABGROUP_ACTIVITIES' => 'فعالیت‌ها',
    'LBL_TABGROUP_COLLABORATION' => 'همکاری',
    'LBL_TABGROUP_MARKETING' => 'بازاریابی',
    'LBL_TABGROUP_OTHER' => 'سایر',
    'LBL_TABGROUP_SALES' => 'فروش',
    'LBL_TABGROUP_SUPPORT' => 'پشتیبانی',
    'LBL_TASKS' => 'وظایف',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'آرشیو ایمیل',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'آرشیو ایمیل',
    'LBL_UNDELETE_BUTTON_LABEL' => 'بازگردانی',
    'LBL_UNDELETE_BUTTON_TITLE' => 'بازگردانی',
    'LBL_UNDELETE_BUTTON' => 'بازگردانی',
    'LBL_UNDELETE' => 'بازگردانی',
    'LBL_UNSYNC' => 'نا همگام',
    'LBL_UPDATE' => 'بروز رسانی',
    'LBL_USER_LIST' => 'لیست کاربران',
    'LBL_USERS' => 'کاربرها',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME' => 'Checking for existing portal name...',
    'LBL_VIEW_IMAGE' => 'مشاهده',

    'LNK_ABOUT' => 'درباره',
    'LNK_ADVANCED_FILTER' => 'فیلتر پیشرفته',
    'LNK_BASIC_FILTER' => 'فیلتر سریع',
    'LBL_ADVANCED_SEARCH' => 'فیلتر پیشرفته',
    'LBL_QUICK_FILTER' => 'فیلتر سریع',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'نمایش همه',
    'LNK_CLOSE' => 'بستن',
    'LBL_MODIFY_CURRENT_FILTER' => 'ویرایش فیلتر فعلی',
    'LNK_SAVED_VIEWS' => 'تنظیمات چیدمان',
    'LNK_DELETE' => 'حذف',
    'LNK_EDIT' => 'ویرایش',
    'LNK_GET_LATEST' => 'مشاهده آخرین',
    'LNK_GET_LATEST_TOOLTIP' => 'جایگزینی با آخرین نسخه',
    'LNK_HELP' => 'کمک',
    'LNK_CREATE' => 'ایجاد',
    'LNK_LIST_END' => 'پايان',
    'LNK_LIST_NEXT' => 'ادامه',
    'LNK_LIST_PREVIOUS' => 'قبلی',
    'LNK_LIST_RETURN' => 'بازگشت به فهرست',
    'LNK_LIST_START' => 'شروع',
    'LNK_LOAD_SIGNED' => 'امضا',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'جایگزینی بجای سند امضا شده',
    'LNK_PRINT' => 'چاپی',
    'LNK_BACKTOTOP' => 'بازگشت به بالا',
    'LNK_REMOVE' => 'حذف',
    'LNK_RESUME' => 'ادامه',
    'LNK_VIEW_CHANGE_LOG' => 'نمایش تغییرات',

    'NTC_CLICK_BACK' => 'Please click the browser back button and fix the error.',
    'NTC_DATE_FORMAT' => '(سال-ماه-روز)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Are you sure you want to delete selected record(s)?',
    'NTC_TEMPLATE_IS_USED' => 'The template is used in at least one email marketing record. Are you sure you want to delete it?',
    'NTC_TEMPLATES_IS_USED' => 'The following templates are used in email marketing records. Are you sure you want to delete them?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'آیا از حذف این سابقه مطمئن هستید؟',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Are you sure you want to delete the ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Are you sure you want to update the ',
    'NTC_DELETE_SELECTED_RECORDS' => ' رکورد (های) انتخاب شده؟',
    'NTC_LOGIN_MESSAGE' => 'Please enter your user name and password.',
    'NTC_NO_ITEMS_DISPLAY' => 'هیچ‌کدام',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this relationship? Only the relationship will be removed. The record will not be deleted.',
    'NTC_REQUIRED' => 'فیلد های مورد نیاز را نشان می دهد',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'خوش آمدید',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'You are about to leave this record without saving any changes you may have made to the record. Are you sure you want to navigate away from this record?',
    'ERROR_NO_RECORD' => 'مشکلی در بازیابی اطلاعات وجود داشت. احتمالاً این اطلاعات حذف شده اند یا شما اجازه دسترسی به آنها را ندارید.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Warning:</b> Your browser is in IE compatibility view which is not supported.',
    'ERROR_TYPE_NOT_VALID' => 'Error. This type is not valid.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'یافتن موارد تکراری',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'مدیریت اشتراک‌ها',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'مدیریت اشتراک برای ',
    // Ajax status strings
    'LBL_LOADING' => 'در حال بارگذاری...',
    'LBL_SEARCHING' => 'Searching...',
    'LBL_SAVING_LAYOUT' => 'ذخیره سازی طرح ...',
    'LBL_SAVED_LAYOUT' => 'طرح ذخیره شد.',
    'LBL_SAVED' => 'ذخیره شده',
    'LBL_SAVING' => 'درحال ذخیره',
    'LBL_DISPLAY_COLUMNS' => 'نمایش ستون ها',
    'LBL_HIDE_COLUMNS' => 'مخفی کردن ستون ها',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST' => 'در حال پردازش...',
    'LBL_REQUEST_PROCESSED' => 'ﺍﻧﺠﺎﻡ شد',
    'LBL_AJAX_FAILURE' => 'شکست در آژاکس',
    'LBL_MERGE_DUPLICATES' => 'ادغام',
    'LBL_SAVED_FILTER_SHORTCUT' => 'My Filters',
    'LBL_SEARCH_POPULATE_ONLY' => 'Perform a search using the search form above',
    'LBL_DETAILVIEW' => 'مشاهده جزئیات',
    'LBL_LISTVIEW' => 'نمای لیستی',
    'LBL_EDITVIEW' => 'نمای ویرایش',
    'LBL_BILLING_STREET' => 'خیابان:',
    'LBL_SHIPPING_STREET' => 'خیابان:',
    'LBL_SEARCHFORM' => 'فرم جستجو',
    'LBL_SAVED_SEARCH_ERROR' => 'Please provide a name for this view.',
    'LBL_DISPLAY_LOG' => 'Display Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'سیستم',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Your session is about to timeout in 2 minutes. Please save your work.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'جلسه شما را به اتمام رسیده است.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'جلسه',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'تماس',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'زمان: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'مکان: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'توضیحات: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'وضعیت',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'مربوط به: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'رویداد',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'رویداد تنظیم نیست.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'قادر به تعیین مکان نیست.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'نتیجه ای یافت نشد.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'نتیجه ای یافت نشد برای <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Create <item1> as a new <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'You currently have no records saved. <item2> or <item3> one now.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'افزودن به مورد علاقه های شما',
    'LBL_CREATE_CONTACT' => 'ایجاد مخاطب',
    'LBL_CREATE_CASE' => 'ایجاد خدمات',
    'LBL_CREATE_NOTE' => 'ایجاد یادداشت',
    'LBL_CREATE_OPPORTUNITY' => 'ایجاد فرصت',
    'LBL_SCHEDULE_CALL' => 'ثبت تماس',
    'LBL_SCHEDULE_MEETING' => 'ثبت قرار ملاقات یا جلسه',
    'LBL_CREATE_TASK' => 'ساخت وظیفه',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'تولید فرم',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Save Web Form',
    'LBL_AVAILABLE_FIELDS' => 'فیلدهای در دسترس',
    'LBL_FIRST_FORM_COLUMN' => 'First Form Column',
    'LBL_SECOND_FORM_COLUMN' => 'Second Form Column',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Missing required field: Assigned to',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Missing required field: Related campaign',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Submitting this form will create ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'اضافه کردن همه فیلد ها',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset all Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'حذف همه فیلدها',
    'LBL_NEXT_BTN' => 'ادامه',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Only the following supported image type attachments can be embedded: JPG, PNG.',
    'LBL_TRAINING' => 'انجمن پشتیبانی',
    'ERR_MSSQL_DB_CONTEXT' => 'Changed database context to',
    'ERR_MSSQL_WARNING' => 'هشدار:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] is missing. Unable to create because no corresponding HTML file was found.',
    'ERR_CANNOT_FIND_MODULE' => 'Error: Module [module] does not exist.',
    'LBL_ALT_ADDRESS' => 'آدرس های دیگر:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'عمومی',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'فیلترها',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'فقط موارد من',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'عنوان',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'نمایش سطور',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'صفحه در حال بارگذاری است، لطفا منتظر بمانید...',

    'LBL_RELOAD_PAGE' => 'لطفا <a href="javascript: window.location.reload()"> مجدد پنجره</a> برای استفاده از این SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'افزودن دشلت',
    'LBL_CLOSE_DASHLETS' => 'بستن',
    'LBL_OPTIONS' => 'گزینه ها',
    'LBL_1_COLUMN' => '1 ستون',
    'LBL_2_COLUMN' => '2 ستون',
    'LBL_3_COLUMN' => '3 ستون',
    'LBL_PAGE_NAME' => 'نام برگه',

    'LBL_SEARCH_RESULTS' => 'نتایج جستجو',
    'LBL_SEARCH_MODULES' => 'ماژولها',
    'LBL_SEARCH_TOOLS' => 'ابزار',
    'LBL_SEARCH_HELP_TITLE' => 'نکات جستجو',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'هیچ تصویری موجود نیست.',

    'LBL_MODULE' => 'ماژول',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'آدرس را از سمت چپ کپی کنید:',
    'LBL_SAVE_AND_CONTINUE' => 'ذخیره و ادامه',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad. For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Error: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'شناسه نظارت',
    'LBL_USER_ID' => 'شناسه کاربری',
    'LBL_MODULE_NAME' => 'نام ماژول',
    'LBL_ITEM_ID' => 'شناسه آیتم',
    'LBL_ITEM_SUMMARY' => 'خلاصه آیتم',
    'LBL_ACTION' => 'عملکرد',
    'LBL_SESSION_ID' => 'شناسه جلسه',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'رکورد قابل مشاهده',
    'LBL_DATE_LAST_ACTION' => 'تاریخ آخرین عملکرد',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'نیست قبل از',
    'MSG_IS_MORE_THAN' => 'بیشتر است از',
    'MSG_SHOULD_BE' => 'باید',
    'MSG_OR_GREATER' => 'یا بیشتر',

    'LBL_LIST' => 'لیست',
    'LBL_CREATE_BUG' => 'ایجاد اشکال',

    'LBL_OBJECT_IMAGE' => 'تصویر شی',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'انتخاب تاریخ',

    'LBL_VALIDATE_RANGE' => 'در محدوده مجاز نیست',
    'LBL_CHOOSE_START_AND_END_DATES' => 'لطفا هر دو محدوده تاریخ شروع و پایان را انتخاب کنید',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'لطفا هر دو محدوده تاریخ شروع و پایان را انتخاب کنید',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'همه',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector. The service may currently be inaccessible or the configuration settings may be invalid. Connector error message: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'برای اینکه در استفاده از IIS/FastCGI بهترین نتیجه حاصل شود، لازم است در پیکربندی php.ini، مقدار fastcgi.logging را عدد ۰ (صفر) تنظیم کنید.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'نام',
    'LBL_COLLECTION_PRIMARY' => 'اصلی',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'اختصاص داده شده به',
    'LBL_DESCRIPTION' => 'توضیحات',

    'LBL_YESTERDAY' => 'دیروز',
    'LBL_TODAY' => 'امروز',
    'LBL_TOMORROW' => 'فردا',
    'LBL_NEXT_WEEK' => 'هفته‌ی بعد',
    'LBL_NEXT_MONDAY' => 'دوشنبه آینده',
    'LBL_NEXT_FRIDAY' => 'جمعه آینده',
    'LBL_TWO_WEEKS' => 'دو هفته',
    'LBL_NEXT_MONTH' => 'ماه بعد',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'اولین روز از ماه آینده',
    'LBL_THREE_MONTHS' => 'سه ماه',
    'LBL_SIXMONTHS' => 'شش ماه',
    'LBL_NEXT_YEAR' => 'سال آینده',

    //Datetimecombo fields
    'LBL_HOURS' => 'ساعت',
    'LBL_MINUTES' => 'دقیقه',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'تاریخ',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'تازه سازی خودکار',

    'LBL_DURATION_DAY' => 'روز',
    'LBL_DURATION_HOUR' => 'ساعت',
    'LBL_DURATION_MINUTE' => 'دقیقه',
    'LBL_DURATION_DAYS' => 'روز',
    'LBL_DURATION_HOURS' => 'Duration Hours',
    'LBL_DURATION_MINUTES' => 'Duration Minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'ماه مورد نظر را انتخاب کنید.',
    'LBL_ENTER_YEAR' => 'سال مورد نظر را انتخاب کنید.',
    'LBL_ENTER_VALID_YEAR' => 'لطفا یک سال معتبر را وارد کنید.',

    //File write error label
    'ERR_FILE_WRITE' => 'Error: Could not write file {0}. Please check system and web server permissions.',
    'ERR_FILE_NOT_FOUND' => 'Error: Could not load file {0}. Please check system and web server permissions.',

    'LBL_AND' => 'و',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'امنیت',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"This is a sample import file which provides an example of the expected contents of a file that is ready for import."
"The file is a comma-delimited .csv file, using double-quotes as the field qualifier."

"The header row is the top-most row in the file and contains the field labels as you would see them in the application."
"These labels are used for mapping the data in the file to the fields in the application."

"Notes: The database names could also be used in the header row. This is useful when you are using phpMyAdmin or another database tool to provide an exported list of data to import."
"The column order is not critical as the import process matches the data to the appropriate fields based on the header row."


"To use this file as a template, do the following:"
"1. Remove the sample rows of data"
"2. Remove the help text that you are reading right now"
"3. Input your own data into the appropriate rows and columns"
"4. Save the file to a known location on your system"
"5. Click on the Import option from the Actions menu in the application and choose the file to upload"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'هیچ اطلاعیه در جریانی موجود نیست',
    'LBL_ALT_SORT_DESC' => 'مرتب شده نزولی',
    'LBL_ALT_SORT_ASC' => 'مرتب سازی صعودی',
    'LBL_ALT_SORT' => 'مرتب‌سازی',
    'LBL_ALT_SHOW_OPTIONS' => 'نمایش گزینه های',
    'LBL_ALT_HIDE_OPTIONS' => 'پنهان کردن گزینه ها',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Move selected entry to the list on the left',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Move selected entry to the list on the right',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Move selected entry up in the displayed list order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Move selected entry down in the displayed list order',
    'LBL_ALT_INFO' => 'اطلاعات',
    'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below. Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'آدرس ایمیل',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'آدرس ایمیل نامعتبر می باشد',
    'LBL_EMAIL_PRIM_TITLE' => 'Make Primary Email Address',
    'LBL_SELECT_ALL_TITLE' => 'انتخاب همه',
    'LBL_SELECT_THIS_ROW_TITLE' => 'این سطر را انتخاب کنید',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERROR: There was an error during upload. Error code: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: There was an error during upload. Error code: {0} - {1}. The upload_maxsize is {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERROR: There was an error during your upload, please contact an administrator for help.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Size of Upload ({0} bytes) Exceeded Allowed Maximum: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'An error has occurred. Please refresh your page and try again.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'ویرایش',
    'LBL_EDIT_BUTTON_TITLE' => 'ویرایش',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'تکراری',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'تکراری',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'حذف',
    'LBL_DELETE_BUTTON_TITLE' => 'حذف',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'عملکرد',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'ذخيره',
    'LBL_SAVE_BUTTON_TITLE' => 'ذخيره',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'لغو',
    'LBL_CANCEL_BUTTON_TITLE' => 'لغو',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'پاسخ بد از سمت سرور',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'پیش‌فاکتور',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'قیمت فروش',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'دستی',
        '5' => 'هر 5 دقیقه',
        '15' => 'هر 15 دقیقه',
        '30' => 'هر 30 دقیقه',
        '60' => 'هر ساعت',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'باشه',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choose columns',
    'LBL_COLUMN_CHOOSER' => 'Column Chooser',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Save changes',
    'LBL_DISPLAYED' => 'Displayed',
    'LBL_HIDDEN' => 'مخفی',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'فیلتر',

    'LBL_CATEGORY' => 'دسته',
    'LBL_LIST_CATEGORY' => 'دسته',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'استایل',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dawn',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'روز',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Dusk',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'حالت شب',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Noon',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Disregard draft',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'This operation will delete this email, do you want to continue?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Apply an Email Template',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'This operation will override the email Body and Subject fields, do you want to continue?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmed Opt In',
    'LBL_OPT_IN_TITLE' => 'عضویت',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Confirmed Opt In Date',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Confirmed Opt In Sent Date',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Confirmed Opt In Fail Date',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Opt In Email Template is not configured. Please set up in email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Primary Group",

    // footer
    'LBL_SUITE_TOP' => 'بازگشت به بالا',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'قدرت گرفته از SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'تنظیم مجدد رمز عبور',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'کتابخانه';
$app_list_strings['moduleList']['EmailAddresses'] = 'آدرس ایمیل';
$app_list_strings['project_priority_default'] = 'متوسط';
$app_list_strings['project_priority_options'] = array(
    'High' => 'بالا',
    'Medium' => 'متوسط',
    'Low' => 'پایین',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'رضایت',
    'contract' => 'قرارداد',
    'legal_obligation' => 'Legal obligation',
    'protection_of_interest' => 'Protection of interest',
    'public_interest' => 'Public interest',
    'legitimate_interest' => 'Legitimate interest',
    'withdrawn' => 'Withdrawn',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'وب سایت',
    'phone' => 'تلفن',
    'given_to_user' => 'Given to User',
    'email' => 'ایمیل',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'دانش بنیان';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ابوظبی',
    'ADEN' => 'عدن',
    'AFGHANISTAN' => 'افغانستان',
    'ALBANIA' => 'آلبانی',
    'ALGERIA' => 'الجزایر',
    'AMERICAN SAMOA' => 'ساموا آمریکایی',
    'ANDORRA' => 'آندورا',
    'ANGOLA' => 'آنگولا',
    'ANTARCTICA' => 'قطب جنوب',
    'ANTIGUA' => 'آنتیگوا',
    'ARGENTINA' => 'آرژانتین',
    'ARMENIA' => 'ارمنستان',
    'ARUBA' => 'آروبا',
    'AUSTRALIA' => 'استرالیا',
    'AUSTRIA' => 'اتریش',
    'AZERBAIJAN' => 'آذربایجان',
    'BAHAMAS' => 'باهاما',
    'BAHRAIN' => 'بحرین',
    'BANGLADESH' => 'بنگلادش',
    'BARBADOS' => 'باربادوس',
    'BELARUS' => 'بلاروس',
    'BELGIUM' => 'بلژیک',
    'BELIZE' => 'بلیز',
    'BENIN' => 'بنین',
    'BERMUDA' => 'برمودا',
    'BHUTAN' => 'بوتان',
    'BOLIVIA' => 'بولیوی',
    'BOSNIA' => 'بوسنی',
    'BOTSWANA' => 'بوتسوانا',
    'BOUVET ISLAND' => 'جزیره بووت',
    'BRAZIL' => 'برزیل',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
    'BRUNEI' => 'برونئی',
    'BULGARIA' => 'بلغارستان',
    'BURKINA FASO' => 'بورکینا فاسو',
    'BURUNDI' => 'بوروندی',
    'CAMBODIA' => 'کامبوج',
    'CAMEROON' => 'کامرون',
    'CANADA' => 'کانادا',
    'CANAL ZONE' => 'منطقه کانال',
    'CANARY ISLAND' => 'جزیره قناری',
    'CAPE VERDI ISLANDS' => 'جزایر کیپ وردی',
    'CAYMAN ISLANDS' => 'جزایر کیمن',
    'CHAD' => 'چاد',
    'CHANNEL ISLAND UK' => 'کانال جزیره انگلستان',
    'CHILE' => 'شیلی',
    'CHINA' => 'چین',
    'CHRISTMAS ISLAND' => 'جزیره کریسمس',
    'COCOS (KEELING) ISLAND' => 'جزیره کوکوس',
    'COLOMBIA' => 'کلمبیا',
    'COMORO ISLANDS' => 'جزایر COMORO',
    'CONGO' => 'کنگو',
    'CONGO KINSHASA' => 'کنگو کینشاسا',
    'COOK ISLANDS' => 'جزایر کوک',
    'COSTA RICA' => 'کاستاریکا',
    'CROATIA' => 'کرواسی',
    'CUBA' => 'کوبا',
    'CURACAO' => 'کوراسائو',
    'CYPRUS' => 'قبرس',
    'CZECH REPUBLIC' => 'جمهوری چک',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'دانمارک',
    'DJIBOUTI' => 'جیبوتی',
    'DOMINICA' => 'دومینیکا',
    'DOMINICAN REPUBLIC' => 'جمهوری دومینیکن',
    'DUBAI' => 'دبی',
    'ECUADOR' => 'اکوادور',
    'EGYPT' => 'مصر',
    'EL SALVADOR' => 'السالوادور',
    'EQUATORIAL GUINEA' => 'گینه استوایی',
    'ESTONIA' => 'استونی',
    'ETHIOPIA' => 'اتیوپی',
    'FAEROE ISLANDS' => 'جزایر FAEROE',
    'FALKLAND ISLANDS' => 'جزایر فالکلند',
    'FIJI' => 'فیجی',
    'FINLAND' => 'فنلاند',
    'FRANCE' => 'فرانسه',
    'FRENCH GUIANA' => 'گیانا فرانسه',
    'FRENCH POLYNESIA' => 'پلینزی فرانسه',
    'GABON' => 'گابن',
    'GAMBIA' => 'گامبیا',
    'GEORGIA' => 'گرجستان',
    'GERMANY' => 'آلمان',
    'GHANA' => 'غنا',
    'GIBRALTAR' => 'جبل الطارق',
    'GREECE' => 'یونان',
    'GREENLAND' => 'گرینلند',
    'GUADELOUPE' => 'گوادلوپ',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'گواتمالا',
    'GUINEA' => 'گینه',
    'GUYANA' => 'گویان',
    'HAITI' => 'هائیتی',
    'HONDURAS' => 'هندوراس',
    'HONG KONG' => 'هنگ کنگ',
    'HUNGARY' => 'مجارستان',
    'ICELAND' => 'ایسلند',
    'IFNI' => 'ایفنی',
    'INDIA' => 'هند',
    'INDONESIA' => 'اندونزی',
    'IRAN' => 'ایران',
    'IRAQ' => 'عراق',
    'IRELAND' => 'ایرلند',
    'ISRAEL' => 'اسرائیل',
    'ITALY' => 'ایتالیا',
    'IVORY COAST' => 'ساحل عاج',
    'JAMAICA' => 'جامائیکا',
    'JAPAN' => 'ژاپن',
    'JORDAN' => 'اردن',
    'KAZAKHSTAN' => 'قزاقستان',
    'KENYA' => 'کنیا',
    'KOREA' => 'کره',
    'KOREA, SOUTH' => 'کره جنوبی',
    'KUWAIT' => 'کویت',
    'KYRGYZSTAN' => 'قرقیزستان',
    'LAOS' => 'لائوس',
    'LATVIA' => 'لتونی',
    'LEBANON' => 'لبنان',
    'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'لیبی',
    'LIECHTENSTEIN' => 'لیختن اشتاین',
    'LITHUANIA' => 'لیتوانی',
    'LUXEMBOURG' => 'لوکزامبورگ',
    'MACAO' => 'ماکائو',
    'MACEDONIA' => 'مقدونیه',
    'MADAGASCAR' => 'ماداگاسکار',
    'MALAWI' => 'مالاوی',
    'MALAYSIA' => 'مالزی',
    'MALDIVES' => 'مالدیو',
    'MALI' => 'مالی',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'موریتانی',
    'MAURITIUS' => 'موریس',
    'MELANESIA' => 'ملانزی',
    'MEXICO' => 'مکزیک',
    'MOLDOVIA' => 'مالدیو',
    'MONACO' => 'موناکو',
    'MONGOLIA' => 'مغولستان',
    'MOROCCO' => 'مراکش',
    'MOZAMBIQUE' => 'موزامبیک',
    'MYANAMAR' => 'میان مار',
    'NAMIBIA' => 'نامیبیا',
    'NEPAL' => 'نپال',
    'NETHERLANDS' => 'هلند',
    'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'NEW CALADONIA',
    'NEW HEBRIDES' => 'NEW HEBRIDES',
    'NEW ZEALAND' => 'زلاند نو',
    'NICARAGUA' => 'نیکاراگوئه',
    'NIGER' => 'نیجر',
    'NIGERIA' => 'نیجریه',
    'NORFOLK ISLAND' => 'جزیره نورفولک',
    'NORWAY' => 'نروژ',
    'OMAN' => 'عمان',
    'OTHER' => 'دیگر',
    'PACIFIC ISLAND' => 'جزیره های اقیانوس آرام',
    'PAKISTAN' => 'پاکستان',
    'PANAMA' => 'پاناما',
    'PAPUA NEW GUINEA' => 'گینه نو',
    'PARAGUAY' => 'پاراگوئه',
    'PERU' => 'پرو',
    'PHILIPPINES' => 'فیلیپین',
    'POLAND' => 'لهستان',
    'PORTUGAL' => 'پرتغال',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'پورتوریکو',
    'QATAR' => 'قطر',
    'REPUBLIC OF BELARUS' => 'جمهوری بلاروس',
    'REPUBLIC OF SOUTH AFRICA' => 'افریقای جنوبی',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'رومانی',
    'RUSSIA' => 'روسیه',
    'RWANDA' => 'رواندا',
    'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
    'SABAH' => 'صباح',
    'SAN MARINO' => 'سن مارینو',
    'SAUDI ARABIA' => 'عربستان سعودی',
    'SENEGAL' => 'سنگال',
    'SERBIA' => 'صربستان',
    'SEYCHELLES' => 'سیشل',
    'SIERRA LEONE' => 'سیرالئون',
    'SINGAPORE' => 'سنگاپور',
    'SLOVAKIA' => 'اسلواکی',
    'SLOVENIA' => 'اسلوونی',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'آفریقای جنوبی',
    'SOUTH YEMEN' => 'یمن جنوبی',
    'SPAIN' => 'اسپانیا',
    'SPANISH SAHARA' => 'SPANISH SAHARA',
    'SRI LANKA' => 'سری لانکا',
    'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'سنت لوسیا',
    'SUDAN' => 'سودان',
    'SURINAM' => 'سورینام',
    'SW AFRICA' => 'جنوب غربی آفریقا',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'سوئد',
    'SWITZERLAND' => 'سوئیس',
    'SYRIA' => 'سوریه',
    'TAIWAN' => 'تایوان',
    'TAJIKISTAN' => 'تاجیکستان',
    'TANZANIA' => 'تانزانیا',
    'THAILAND' => 'تایلند',
    'TONGA' => 'تونگا',
    'TRINIDAD' => 'ترینیداد',
    'TUNISIA' => 'تونس',
    'TURKEY' => 'ترکیه',
    'UGANDA' => 'اوگاندا',
    'UKRAINE' => 'اوکراین',
    'UNITED ARAB EMIRATES' => 'امارات متحده عربی',
    'UNITED KINGDOM' => 'انگلستان',
    'URUGUAY' => 'اروگوئه',
    'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
    'USA' => 'ایالات متحده آمریکا',
    'UZBEKISTAN' => 'ازبکستان',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'شهر واتیکان',
    'VENEZUELA' => 'ونزوئلا',
    'VIETNAM' => 'ویتنام',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'غرب هند',
    'WESTERN SAHARA' => 'WESTERN SAHARA',
    'YEMEN' => 'یمن',
    'ZAIRE' => 'زئیر',
    'ZAMBIA' => 'زامبیا',
    'ZIMBABWE' => 'زیمبابوه',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Cyrillic)',
    'CP1252' => 'CP1252 (MS Western European & US)',
    'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japanese)',
    'EUC-KR' => 'EUC-KR (Korean)',
    'EUC-TW' => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'ISO-8859-7 (Greek)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Cape Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Indian/Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Djibouti',
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'Africa/Addis Ababa',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Nairobi' => 'Africa/Nairobi',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Tripoli' => 'Africa/Tripoli',
    'Indian/Antananarivo' => 'Indian/Antananarivo',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Bamako' => 'Africa/Bamako',
    'Africa/Nouakchott' => 'Africa/Nouakchott',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/El_Aaiun' => 'Africa/El Aaiun',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St. Helena',
    'Africa/Sao_Tome' => 'Africa/Sao Tome',
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'Africa/Tunis',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macau',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'آسیا/تهران',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'آسیا/توکیو',
    'Asia/Amman' => 'آسیا/امان',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldives',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'آسیا/دبی',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Indian/Christmas',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'Pacific/Auckland',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'Europe/London',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'Europe/Andorra',
    'Europe/Vienna' => 'Europe/Vienna',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Brussels',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athens',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'اروپا/رم',
    'Europe/Riga' => 'اروپا/ریگا',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'اروپا/ویلنیوس',
    'Europe/Luxembourg' => 'اروپا / لوکزامبورگ',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'اروپا /موناکو',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Warsaw',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscow',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'America/New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/North Dakota/Center',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America/Los Angeles',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral Harbour',
    'America/Rankin_Inlet' => 'America/Rankin Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Mexico City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantic/Bermuda',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'America/Costa Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo Domingo',
    'America/El_Salvador' => 'America/El Salvador',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'America/Jamaica',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'امریکا/باهیا',
    'America/Sao_Paulo' => 'America/Sao Paulo',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
    'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'گوگل',
    'Box' => 'Box.net',
    'Facebook' => 'فیس‌بوک',
    'Twitter' => 'توییتر',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'درخواست',
    2 => 'دسترسی',
    3 => 'نامعتبر',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'کمپین',
    'email' => 'ایمیل',
    'event' => 'رویداد',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'کمپین',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'کمپین',
    'email' => 'ایمیل',
    'event' => 'رویداد',
    'system' => 'سیستم',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'دانش بنیان';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'پیش نویس';
$app_list_strings['aok_status_list']['Expired'] = 'منقضی شده';
$app_list_strings['aok_status_list']['In_Review'] = 'در حال بررسی';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'خصوصی';
$app_list_strings['aok_status_list']['published_public'] = 'عمومی';

$app_list_strings['moduleList']['FP_events'] = 'رویدادها';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'محل';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'دعوت شده';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'دعوت نشده';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'شرکت کرده';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'شرکت نکرده';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'پذیرفته شده';
$app_list_strings['fp_event_status_dom']['Declined'] = 'رد شده';
$app_list_strings['fp_event_status_dom']['No Response'] = 'بدون پاسخ';

$app_strings['LBL_STATUS_EVENT'] = 'وضعیت دعوت';
$app_strings['LBL_ACCEPT_STATUS'] = 'وضعیت';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'این صفحه را انتخاب کنید';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'انتخاب همه';
$app_strings['LBL_LISTVIEW_NONE'] = 'عدم انتخاب همه';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'فهرست';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'رویدادهای خدمات';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'تغییرات خدمات';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== لطفا بالای این خدمت پاسخ دهید ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'بسته',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'جدید',
        'Open_Assigned' => 'محول شده',
        'Closed_Closed' => 'بسته',
        'Open_Pending Input' => 'منتظر ورودی',
        'Closed_Rejected' => 'رد شده',
        'Closed_Duplicate' => 'تکراری',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'تک کاربره',
        'Account' => 'کاربر حساب',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'پیشفرض سیستم',
    'singleUser' => 'تک کاربره',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'کم مشغله‌ترین',
    'random' => 'تصادفی',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'گزارش‌ها';
$app_list_strings['moduleList']['AOR_Conditions'] = 'شرایط گزارش';
$app_list_strings['moduleList']['AOR_Charts'] = 'نمودارهای گزارش';
$app_list_strings['moduleList']['AOR_Fields'] = 'زمینه‌های گزارش';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'گزارش‌های برنامه‌ریزی‌شده';
$app_list_strings['aor_operator_list']['Equal_To'] = 'برابر با';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'مخالف';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'بزرگ‌تر از';
$app_list_strings['aor_operator_list']['Less_Than'] = 'کوچک‌تر از';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'بزرگ‌تر یا برابر با';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'کوچک‌تر یا برابر با';
$app_list_strings['aor_operator_list']['Contains'] = 'شامل';
$app_list_strings['aor_operator_list']['Starts_With'] = 'شروع می‌شود با';
$app_list_strings['aor_operator_list']['Ends_With'] = 'پایان می‌یابد با';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Y';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'و';
$app_list_strings['aor_condition_operator_list']['OR'] = 'یا';
$app_list_strings['aor_condition_type_list']['Value'] = 'مقدار';
$app_list_strings['aor_condition_type_list']['Field'] = 'فیلد';
$app_list_strings['aor_condition_type_list']['Date'] = 'تاریخ';
$app_list_strings['aor_condition_type_list']['Multi'] = 'یکی از';
$app_list_strings['aor_condition_type_list']['Period'] = 'دوره';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'کاربر فعلی';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'دقیقه';
$app_list_strings['aor_date_type_list']['hour'] = 'ساعت';
$app_list_strings['aor_date_type_list']['day'] = 'روز';
$app_list_strings['aor_date_type_list']['week'] = 'هفته';
$app_list_strings['aor_date_type_list']['month'] = 'ماه';
$app_list_strings['aor_date_type_list']['business_hours'] = 'ساعت کاری';
$app_list_strings['aor_date_options']['now'] = 'اکنون';
$app_list_strings['aor_date_options']['field'] = 'این فیلد';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'صعودی';
$app_list_strings['aor_sort_operator']['DESC'] = 'نزولی';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'تعداد';
$app_list_strings['aor_function_list']['MIN'] = 'کمترین';
$app_list_strings['aor_function_list']['MAX'] = 'بیشترین';
$app_list_strings['aor_function_list']['SUM'] = 'مجموع';
$app_list_strings['aor_function_list']['AVG'] = 'میانگین';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'تعداد';
$app_list_strings['aor_total_options']['SUM'] = 'مجموع';
$app_list_strings['aor_total_options']['AVG'] = 'میانگین';
$app_list_strings['aor_chart_types']['bar'] = 'نمودار میله‌ای';
$app_list_strings['aor_chart_types']['line'] = 'نمودار خطی';
$app_list_strings['aor_chart_types']['pie'] = 'نمودار دایره‌ای';
$app_list_strings['aor_chart_types']['radar'] = 'نمودار راداری';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'میله‌ای ِ انباشه';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'میله‌ای گروه‌بندی شده';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'ماهیانه';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'هفتگی';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'روزانه';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'فعال';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'غیر فعال';
$app_list_strings['aor_email_type_list']['Email Address'] = 'ایمیل';
$app_list_strings['aor_email_type_list']['Specify User'] = 'کاربر';
$app_list_strings['aor_email_type_list']['Users'] = 'کاربرها';
$app_list_strings['aor_assign_options']['all'] = 'همه‌ کاربرها';
$app_list_strings['aor_assign_options']['role'] = 'همه کاربرها با این نقش';
$app_list_strings['aor_assign_options']['security_group'] = 'تمام کاربرها در گروه امنیتی';
$app_list_strings['date_time_period_list']['today'] = 'امروز';
$app_list_strings['date_time_period_list']['yesterday'] = 'دیروز';
$app_list_strings['date_time_period_list']['this_week'] = 'این هفته';
$app_list_strings['date_time_period_list']['last_week'] = 'هفته پیش';
$app_list_strings['date_time_period_list']['last_month'] = 'ماه گذشته';
$app_list_strings['date_time_period_list']['this_month'] = 'این ماه';
$app_list_strings['date_time_period_list']['this_quarter'] = 'این فصل';
$app_list_strings['date_time_period_list']['last_quarter'] = 'سه ماهه گذشته';
$app_list_strings['date_time_period_list']['this_year'] = 'امسال';
$app_list_strings['date_time_period_list']['last_year'] = 'سال گذشته';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'در';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'در';
$app_strings['LBL_CRON_AT'] = 'در';
$app_strings['LBL_CRON_RAW'] = 'پیشرفته';
$app_strings['LBL_CRON_MIN'] = 'دقیقه';
$app_strings['LBL_CRON_HOUR'] = 'ساعت';
$app_strings['LBL_CRON_DAY'] = 'روز';
$app_strings['LBL_CRON_MONTH'] = 'ماه';
$app_strings['LBL_CRON_DOW'] = 'روزِ هفته';
$app_strings['LBL_CRON_DAILY'] = 'روزانه';
$app_strings['LBL_CRON_WEEKLY'] = 'هفتگی';
$app_strings['LBL_CRON_MONTHLY'] = 'ماهیانه';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'قراردادها';
$app_list_strings['moduleList']['AOS_Invoices'] = 'فاکتورها';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'محصولات';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'ردیف';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'گروه‌های موارد';
$app_list_strings['moduleList']['AOS_Quotes'] = 'پیش‌فاکتورها';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'تحلیل‌گر';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'رقیب';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'مشتری';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'تلفیق کننده';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'سرمایه‌گذار';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'شریک';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'مطبوعات';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'مشتری بالقوه';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'نماینده‌ی فروش';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'سایر';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'پیش نویس';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'مذاکره';
$app_list_strings['quote_stage_dom']['Delivered'] = 'تحویل‌شده';
$app_list_strings['quote_stage_dom']['On Hold'] = 'در انتظار';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'تأیید شده';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'بسته و پذیرفته شده';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'شکست خورد';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'بسته و از بین‌رفته';
$app_list_strings['quote_term_dom']['Net 15'] = 'نقدی 15 روزه';
$app_list_strings['quote_term_dom']['Net 30'] = 'نقدی 30 روزه';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'تأیید شده';
$app_list_strings['approval_status_dom']['Not Approved'] = 'تأیید نشده';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'درصد';
$app_list_strings['discount_list']['Amount'] = 'مقدار';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'تحلیل‌گر';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'رقیب';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'مشتری';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'تلفیق کننده';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'سرمایه‌گذار';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'شریک';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'مطبوعات';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'مشتری بالقوه';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'نماینده‌ی فروش';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'سایر';
$app_list_strings['invoice_status_dom']['Paid'] = 'پرداخت شده';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'پرداخت نشده';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'لغو شده';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'فاکتور نشده';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'فاکتور شده';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'لپ‌تاپ';
$app_list_strings['product_category_dom']['Desktops'] = 'کامپیوتر رومیزی';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'کالا';
$app_list_strings['product_type_dom']['Service'] = 'خدمات';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'پیش‌فاکتورها';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'فاکتورها';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'قراردادها';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'پیش‌فاکتورها';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'فاکتورها';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'قراردادها';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'حساب ها';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'مخاطب‌ها';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'سرنخ‌ها';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'شروع نشده';
$app_list_strings['contract_status_list']['In Progress'] = 'در حال انجام';
$app_list_strings['contract_status_list']['Signed'] = 'امضاء شده';
$app_list_strings['contract_type_list']['Type'] = 'نوع';
$app_strings['LBL_PRINT_AS_PDF'] = 'چاپ به صورت PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'لطفا یک قالب انتخاب کنید';
$app_strings['LBL_NO_TEMPLATE'] = 'خطا\n
هیچ قالبی یافت نشد.\n
لطفاً به ماژول قالب PDF مراجعه نموده و یک قالب بسازید';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'گردش کار';
$app_list_strings['moduleList']['AOW_Conditions'] = 'شرايط گردش کار';
$app_list_strings['moduleList']['AOW_Processed'] = 'فرایند ممیزی';
$app_list_strings['moduleList']['AOW_Actions'] = 'اقدامات گردش کار';
$app_list_strings['aow_status_list']['Active'] = 'فعال';
$app_list_strings['aow_status_list']['Inactive'] = 'غیر فعال';
$app_list_strings['aow_operator_list']['Equal_To'] = 'برابر با';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'مخالف';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'بزرگ‌تر از';
$app_list_strings['aow_operator_list']['Less_Than'] = 'کوچک‌تر از';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'بزرگ‌تر یا برابر با';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'کوچک‌تر یا برابر با';
$app_list_strings['aow_operator_list']['Contains'] = 'شامل';
$app_list_strings['aow_operator_list']['Starts_With'] = 'شروع می‌شود با';
$app_list_strings['aow_operator_list']['Ends_With'] = 'پایان می‌یابد با';
$app_list_strings['aow_operator_list']['is_null'] = 'Null است';
$app_list_strings['aow_process_status_list']['Complete'] = 'تکمیل';
$app_list_strings['aow_process_status_list']['Running'] = 'در حال اجرا';
$app_list_strings['aow_process_status_list']['Pending'] = 'انتظار';
$app_list_strings['aow_process_status_list']['Failed'] = 'انجام نشد';
$app_list_strings['aow_condition_operator_list']['And'] = 'و';
$app_list_strings['aow_condition_operator_list']['OR'] = 'یا';
$app_list_strings['aow_condition_type_list']['Value'] = 'مقدار';
$app_list_strings['aow_condition_type_list']['Field'] = 'فیلد';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'هرگونه تغییر';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'در گروه امنیتی';
$app_list_strings['aow_condition_type_list']['Date'] = 'تاریخ';
$app_list_strings['aow_condition_type_list']['Multi'] = 'یکی از';
$app_list_strings['aow_action_type_list']['Value'] = 'مقدار';
$app_list_strings['aow_action_type_list']['Field'] = 'فیلد';
$app_list_strings['aow_action_type_list']['Date'] = 'تاریخ';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'کم مشغله‌ترین';
$app_list_strings['aow_action_type_list']['Random'] = 'تصادفی';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'مقدار';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'فیلد';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'دقیقه';
$app_list_strings['aow_date_type_list']['hour'] = 'ساعت';
$app_list_strings['aow_date_type_list']['day'] = 'روز';
$app_list_strings['aow_date_type_list']['week'] = 'هفته';
$app_list_strings['aow_date_type_list']['month'] = 'ماه';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'ساعت کاری';
$app_list_strings['aow_date_options']['now'] = 'اکنون';
$app_list_strings['aow_date_options']['today'] = 'امروز';
$app_list_strings['aow_date_options']['field'] = 'این فیلد';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'همه‌ کاربرها';
$app_list_strings['aow_assign_options']['role'] = 'همه کاربرها با این نقش';
$app_list_strings['aow_assign_options']['security_group'] = 'تمام کاربرها در گروه امنیتی';
$app_list_strings['aow_email_type_list']['Email Address'] = 'ایمیل';
$app_list_strings['aow_email_type_list']['Record Email'] = 'ثبت نامه الکترونیک';
$app_list_strings['aow_email_type_list']['Related Field'] = 'فیلدهای مرتبط';
$app_list_strings['aow_email_type_list']['Specify User'] = 'کاربر';
$app_list_strings['aow_email_type_list']['Users'] = 'کاربرها';
$app_list_strings['aow_email_to_list']['to'] = 'به';
$app_list_strings['aow_email_to_list']['cc'] = 'رونوشت';
$app_list_strings['aow_email_to_list']['bcc'] = 'رونوشت مخفی';
$app_list_strings['aow_run_on_list']['All_Records'] = 'همه رکوردها';
$app_list_strings['aow_run_on_list']['New_Records'] = 'رکوردهای جدید';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'رکوردهای اصلاح‌شده';
$app_list_strings['aow_run_when_list']['Always'] = 'همیشه';
$app_list_strings['aow_run_when_list']['On_Save'] = 'تنها هنگام ذخیره';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'تنها در برنامه زمان‌بندی';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'الگوهای کارهای مرتبط به پروژه';
$app_list_strings['relationship_type_list']['FS'] = 'از پایان تا شروع';
$app_list_strings['relationship_type_list']['SS'] = 'از شروع تا شروع';
$app_list_strings['duration_unit_dom']['Days'] = 'روز';
$app_list_strings['duration_unit_dom']['Hours'] = 'ساعت';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'نمای Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'ایجاد پروژه';

//gmaps
$app_strings['LBL_MAP'] = 'نقشه';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'طول جغرافیایی';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'عرض جغرافیایی';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'وضعیت Geocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'آدرس';

$app_list_strings['moduleList']['jjwg_Maps'] = 'نقشه ها';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'مایل';
$app_list_strings['map_unit_type_list']['km'] = 'کیلومتر';

$app_list_strings['map_module_type_list']['Accounts'] = 'حساب ها';
$app_list_strings['map_module_type_list']['Contacts'] = 'مخاطب‌ها';
$app_list_strings['map_module_type_list']['Cases'] = 'خدمات';
$app_list_strings['map_module_type_list']['Leads'] = 'سرنخ‌ها';
$app_list_strings['map_module_type_list']['Meetings'] = 'جلسات';
$app_list_strings['map_module_type_list']['Opportunities'] = 'فرصت‌ها';
$app_list_strings['map_module_type_list']['Project'] = 'پروژه ها';
$app_list_strings['map_module_type_list']['Prospects'] = 'اهداف';

$app_list_strings['map_relate_type_list']['Accounts'] = 'مرکز';
$app_list_strings['map_relate_type_list']['Contacts'] = 'مخاطب';
$app_list_strings['map_relate_type_list']['Cases'] = 'خدمات';
$app_list_strings['map_relate_type_list']['Leads'] = 'سرنخ';
$app_list_strings['map_relate_type_list']['Meetings'] = 'جلسه';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'فرصت';
$app_list_strings['map_relate_type_list']['Project'] = 'پروژه';
$app_list_strings['map_relate_type_list']['Prospects'] = 'هدف';

$app_list_strings['marker_image_list']['accident'] = 'حادثه';
$app_list_strings['marker_image_list']['administration'] = 'مدیریت';
$app_list_strings['marker_image_list']['agriculture'] = 'کشاورزی';
$app_list_strings['marker_image_list']['aircraft_small'] = 'هواپیمای کوچک';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'هواپیمای گردشگری';
$app_list_strings['marker_image_list']['airport'] = 'فرودگاه';
$app_list_strings['marker_image_list']['amphitheater'] = 'آمفی تئاتر';
$app_list_strings['marker_image_list']['apartment'] = 'آپارتمان';
$app_list_strings['marker_image_list']['aquarium'] = 'آکواریوم';
$app_list_strings['marker_image_list']['arch'] = 'قوس';
$app_list_strings['marker_image_list']['atm'] = 'دستگاه های خودپرداز';
$app_list_strings['marker_image_list']['audio'] = 'صوت';
$app_list_strings['marker_image_list']['bank'] = 'بانک';
$app_list_strings['marker_image_list']['bank_euro'] = 'بانک یورو';
$app_list_strings['marker_image_list']['bank_pound'] = 'بانک پوند';
$app_list_strings['marker_image_list']['bar'] = 'بار';
$app_list_strings['marker_image_list']['beach'] = 'ساحل';
$app_list_strings['marker_image_list']['beautiful'] = 'زیبا';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'پارکینگ دوچرخه';
$app_list_strings['marker_image_list']['big_city'] = 'شهر بزرگ';
$app_list_strings['marker_image_list']['bridge'] = 'پل';
$app_list_strings['marker_image_list']['bridge_modern'] = 'پل مدرن';
$app_list_strings['marker_image_list']['bus'] = 'اتوبوس';
$app_list_strings['marker_image_list']['cable_car'] = 'خودروی کابلی';
$app_list_strings['marker_image_list']['car'] = 'خودرو';
$app_list_strings['marker_image_list']['car_rental'] = 'اجاره خودرو';
$app_list_strings['marker_image_list']['carrepair'] = 'تعمیر خودرو';
$app_list_strings['marker_image_list']['castle'] = 'قلعه';
$app_list_strings['marker_image_list']['cathedral'] = 'کلیسای جامع';
$app_list_strings['marker_image_list']['chapel'] = 'نمازخانه';
$app_list_strings['marker_image_list']['church'] = 'کلیسا';
$app_list_strings['marker_image_list']['city_square'] = 'میدان شهر';
$app_list_strings['marker_image_list']['cluster'] = 'خوشه';
$app_list_strings['marker_image_list']['cluster_2'] = 'خوشه 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'خوشه 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'خوشه 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'خوشه 5';
$app_list_strings['marker_image_list']['coffee'] = 'قهوه';
$app_list_strings['marker_image_list']['community_centre'] = 'مرکز انجمن';
$app_list_strings['marker_image_list']['company'] = 'شرکت';
$app_list_strings['marker_image_list']['conference'] = 'کنفرانس';
$app_list_strings['marker_image_list']['construction'] = 'ساخت و ساز';
$app_list_strings['marker_image_list']['convenience'] = 'راحتی';
$app_list_strings['marker_image_list']['court'] = 'دادگاه';
$app_list_strings['marker_image_list']['cruise'] = 'کشتی مسافری';
$app_list_strings['marker_image_list']['currency_exchange'] = 'تبادل ارز';
$app_list_strings['marker_image_list']['customs'] = 'گمرک';
$app_list_strings['marker_image_list']['cycling'] = 'دوچرخه سواری';
$app_list_strings['marker_image_list']['dam'] = 'سد';
$app_list_strings['marker_image_list']['dentist'] = 'دندانپزشک';
$app_list_strings['marker_image_list']['deptartment_store'] = 'فروشگاه بزرگ';
$app_list_strings['marker_image_list']['disability'] = 'ناتوانی';
$app_list_strings['marker_image_list']['disabled_parking'] = 'پارکینگ معلولین';
$app_list_strings['marker_image_list']['doctor'] = 'دکتر';
$app_list_strings['marker_image_list']['dog_leash'] = 'قلاده سگ';
$app_list_strings['marker_image_list']['down'] = 'پایین';
$app_list_strings['marker_image_list']['down_left'] = 'پایین چپ';
$app_list_strings['marker_image_list']['down_right'] = 'پایین راست';
$app_list_strings['marker_image_list']['down_then_left'] = 'پایین بعد چپ';
$app_list_strings['marker_image_list']['down_then_right'] = 'پایین بعد راست';
$app_list_strings['marker_image_list']['drugs'] = 'مواد مخدر';
$app_list_strings['marker_image_list']['elevator'] = 'آسانسور';
$app_list_strings['marker_image_list']['embassy'] = 'سفارت';
$app_list_strings['marker_image_list']['expert'] = 'کارشناس';
$app_list_strings['marker_image_list']['factory'] = 'کارخانه';
$app_list_strings['marker_image_list']['falling_rocks'] = 'سنگ در حال سقوط';
$app_list_strings['marker_image_list']['fast_food'] = 'فست فود';
$app_list_strings['marker_image_list']['festival'] = 'جشنواره';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'جنگل';
$app_list_strings['marker_image_list']['fountain'] = 'فواره';
$app_list_strings['marker_image_list']['friday'] = 'جمعه';
$app_list_strings['marker_image_list']['garden'] = 'باغ';
$app_list_strings['marker_image_list']['gas_station'] = 'پمپ بنزین';
$app_list_strings['marker_image_list']['geyser'] = 'چشمه اب گرم';
$app_list_strings['marker_image_list']['gifts'] = 'هدایا';
$app_list_strings['marker_image_list']['gourmet'] = 'خوراک شناس';
$app_list_strings['marker_image_list']['grocery'] = 'خواربار فروشی';
$app_list_strings['marker_image_list']['hairsalon'] = 'آرایشگاه';
$app_list_strings['marker_image_list']['helicopter'] = 'هلیکوپتر';
$app_list_strings['marker_image_list']['highway'] = 'بزرگراه';
$app_list_strings['marker_image_list']['historical_quarter'] = 'سه ماهه تاریخی';
$app_list_strings['marker_image_list']['home'] = 'خانه';
$app_list_strings['marker_image_list']['hospital'] = 'بیمارستان';
$app_list_strings['marker_image_list']['hostel'] = 'خوابگاه';
$app_list_strings['marker_image_list']['hotel'] = 'هتل';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'هتل 1 ستاره';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'هتل 2 ستاره';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'هتل 3 ستاره';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'هتل 4 ستاره';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'هتل 5 ستاره';
$app_list_strings['marker_image_list']['info'] = 'اطلاعات';
$app_list_strings['marker_image_list']['justice'] = 'عدالت';
$app_list_strings['marker_image_list']['lake'] = 'دریاچه';
$app_list_strings['marker_image_list']['laundromat'] = 'ماشین لباسشویی';
$app_list_strings['marker_image_list']['left'] = 'چپ';
$app_list_strings['marker_image_list']['left_then_down'] = 'چپ بعد پایین';
$app_list_strings['marker_image_list']['left_then_up'] = 'چپ بعد بالا';
$app_list_strings['marker_image_list']['library'] = 'کتابخانه';
$app_list_strings['marker_image_list']['lighthouse'] = 'فانوس دریایی';
$app_list_strings['marker_image_list']['liquor'] = 'مشروب';
$app_list_strings['marker_image_list']['lock'] = 'قفل';
$app_list_strings['marker_image_list']['main_road'] = 'جاده اصلی';
$app_list_strings['marker_image_list']['massage'] = 'ماساژ';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'برج تلفن همراه';
$app_list_strings['marker_image_list']['modern_tower'] = 'برج مدرن';
$app_list_strings['marker_image_list']['monastery'] = 'صومعه';
$app_list_strings['marker_image_list']['monday'] = 'دوشنبه';
$app_list_strings['marker_image_list']['monument'] = 'بنای یادبود';
$app_list_strings['marker_image_list']['mosque'] = 'مسجد';
$app_list_strings['marker_image_list']['motorcycle'] = 'موتور سیکلت';
$app_list_strings['marker_image_list']['museum'] = 'موزه';
$app_list_strings['marker_image_list']['music_live'] = 'موسیقی زنده';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'محل استخراج نفت';
$app_list_strings['marker_image_list']['pagoda'] = 'بتکده';
$app_list_strings['marker_image_list']['palace'] = 'کاخ';
$app_list_strings['marker_image_list']['panoramic'] = 'پانوراما';
$app_list_strings['marker_image_list']['park'] = 'پارک';
$app_list_strings['marker_image_list']['park_and_ride'] = 'پارک سوار';
$app_list_strings['marker_image_list']['parking'] = 'پارکینگ';
$app_list_strings['marker_image_list']['photo'] = 'عکس';
$app_list_strings['marker_image_list']['picnic'] = 'پیک نیک';
$app_list_strings['marker_image_list']['places_unvisited'] = 'مکان های بازدید نشده';
$app_list_strings['marker_image_list']['places_visited'] = 'مکان های بازدید شده';
$app_list_strings['marker_image_list']['playground'] = 'زمین بازی';
$app_list_strings['marker_image_list']['police'] = 'پلیس';
$app_list_strings['marker_image_list']['port'] = 'درگاه';
$app_list_strings['marker_image_list']['postal'] = 'پستی';
$app_list_strings['marker_image_list']['power_line_pole'] = 'خط انتقال برق';
$app_list_strings['marker_image_list']['power_plant'] = 'نیروگاه';
$app_list_strings['marker_image_list']['power_substation'] = 'پست برق';
$app_list_strings['marker_image_list']['public_art'] = 'هنر عمومی';
$app_list_strings['marker_image_list']['rain'] = 'باران';
$app_list_strings['marker_image_list']['real_estate'] = 'مشاور املاک';
$app_list_strings['marker_image_list']['regroup'] = 'گروه‌ بندی مجدد';
$app_list_strings['marker_image_list']['resort'] = 'تفرجگاه';
$app_list_strings['marker_image_list']['restaurant'] = 'رستوران';
$app_list_strings['marker_image_list']['restaurant_african'] = 'رستوران آفریقایی';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'رستوران باربیکیو';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'بوفه رستوران';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'رستوران چینی';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'رستوران ماهی';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'رستوران فیش چیپس';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'رستوران خوراک شناس';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'رستوران یونانی';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'رستوران هندی';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'رستوران ایتالیایی';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'رستوران ژاپنی';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'رستوران کباب';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'رستوران کره‌ای';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'رستوران مدیترانه‌ای';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'رستوران مکزیکی';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'رستوران رمانتیک';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'رستوران تایلندی';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'رستوران ترکی';
$app_list_strings['marker_image_list']['right'] = 'سمت راست';
$app_list_strings['marker_image_list']['right_then_down'] = 'راست بعد پایین';
$app_list_strings['marker_image_list']['right_then_up'] = 'راست بعد بالا';
$app_list_strings['marker_image_list']['saturday'] = 'شنبه';
$app_list_strings['marker_image_list']['school'] = 'مدرسه';
$app_list_strings['marker_image_list']['shopping_mall'] = 'مرکز خرید';
$app_list_strings['marker_image_list']['shore'] = 'ساحل';
$app_list_strings['marker_image_list']['sight'] = 'منظره';
$app_list_strings['marker_image_list']['small_city'] = 'شهر کوچک';
$app_list_strings['marker_image_list']['snow'] = 'برف';
$app_list_strings['marker_image_list']['spaceport'] = 'پایگاه فضایی';
$app_list_strings['marker_image_list']['speed_100'] = 'سرعت 100';
$app_list_strings['marker_image_list']['speed_110'] = 'سرعت 110';
$app_list_strings['marker_image_list']['speed_120'] = 'سرعت 120';
$app_list_strings['marker_image_list']['speed_130'] = 'سرعت 130';
$app_list_strings['marker_image_list']['speed_20'] = 'سرعت 20';
$app_list_strings['marker_image_list']['speed_30'] = 'سرعت 30';
$app_list_strings['marker_image_list']['speed_40'] = 'سرعت 40';
$app_list_strings['marker_image_list']['speed_50'] = 'سرعت 50';
$app_list_strings['marker_image_list']['speed_60'] = 'سرعت 60';
$app_list_strings['marker_image_list']['speed_70'] = 'سرعت 70';
$app_list_strings['marker_image_list']['speed_80'] = 'سرعت 80';
$app_list_strings['marker_image_list']['speed_90'] = 'سرعت 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'سرعت‌گیر';
$app_list_strings['marker_image_list']['stadium'] = 'استادیوم';
$app_list_strings['marker_image_list']['statue'] = 'مجسمه';
$app_list_strings['marker_image_list']['steam_train'] = 'قطار بخار';
$app_list_strings['marker_image_list']['stop'] = 'توقف';
$app_list_strings['marker_image_list']['stoplight'] = 'چراغ راهنمایی';
$app_list_strings['marker_image_list']['subway'] = 'مترو';
$app_list_strings['marker_image_list']['sun'] = 'یکشنبه';
$app_list_strings['marker_image_list']['sunday'] = 'یکشنبه';
$app_list_strings['marker_image_list']['supermarket'] = 'سوپر مارکت';
$app_list_strings['marker_image_list']['synagogue'] = 'کنیسه';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'تاکسی';
$app_list_strings['marker_image_list']['taxiway'] = 'مسیر ویژه تاکسی';
$app_list_strings['marker_image_list']['teahouse'] = 'چایخانه';
$app_list_strings['marker_image_list']['telephone'] = 'تلفن';
$app_list_strings['marker_image_list']['temple_hindu'] = 'معبد هندو';
$app_list_strings['marker_image_list']['terrace'] = 'تراس';
$app_list_strings['marker_image_list']['text'] = 'متن';
$app_list_strings['marker_image_list']['theater'] = 'تئاتر';
$app_list_strings['marker_image_list']['theme_park'] = 'پارک';
$app_list_strings['marker_image_list']['thursday'] = 'پنج‌شنبه';
$app_list_strings['marker_image_list']['toilets'] = 'سرویس بهداشتی';
$app_list_strings['marker_image_list']['toll_station'] = 'ایستگاه عوارضی';
$app_list_strings['marker_image_list']['tower'] = 'برج';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'دوربین‌ کنترل ترافیک';
$app_list_strings['marker_image_list']['train'] = 'قطار';
$app_list_strings['marker_image_list']['tram'] = 'تراموا';
$app_list_strings['marker_image_list']['truck'] = 'کامیون';
$app_list_strings['marker_image_list']['tuesday'] = 'سه‌شنبه';
$app_list_strings['marker_image_list']['tunnel'] = 'تونل';
$app_list_strings['marker_image_list']['turn_left'] = 'گردش به چپ';
$app_list_strings['marker_image_list']['turn_right'] = 'گردش به راست';
$app_list_strings['marker_image_list']['university'] = 'دانشگاه';
$app_list_strings['marker_image_list']['up'] = 'بالا';
$app_list_strings['marker_image_list']['up_left'] = 'بالا چپ';
$app_list_strings['marker_image_list']['up_right'] = 'بالا راست';
$app_list_strings['marker_image_list']['up_then_left'] = 'بالا بعد چپ';
$app_list_strings['marker_image_list']['up_then_right'] = 'بالا بعد راست';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'ویدیو';
$app_list_strings['marker_image_list']['villa'] = 'ویلا';
$app_list_strings['marker_image_list']['water'] = 'آب';
$app_list_strings['marker_image_list']['waterfall'] = 'آبشار';
$app_list_strings['marker_image_list']['watermill'] = 'آسیاب آبی';
$app_list_strings['marker_image_list']['waterpark'] = 'پارک آبی';
$app_list_strings['marker_image_list']['watertower'] = 'Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'چهارشنبه';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'توربین بادی';
$app_list_strings['marker_image_list']['windmill'] = 'آسیاب بادی';
$app_list_strings['marker_image_list']['winery'] = 'کارخانه شراب سازی';
$app_list_strings['marker_image_list']['work_office'] = 'دفتر کار';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'مکان مربوط به میراث جهانی';
$app_list_strings['marker_image_list']['zoo'] = 'باغ وحش';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'خارج از دفتر';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'در جلسه';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'زمانبندی مجدد';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'لطفا اطلاعات برنامه‌ریزی مجدد را وارد کنید';
$app_strings['LBL_RESCHEDULE_DATE'] = 'تاریخ:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'دلیل:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'لطفاً یک تاریخ معتبرانتخاب کنید';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'لطفا یک دلیل انتخاب کنید';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'زمانبندی مجدد';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'تاریخچه تماس‌';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'تماس‌ها';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'گروه امنیتی';
$app_strings['LBL_ROLE'] = 'نقش';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'حساب ایمیل خارجی';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'فیس‌بوک';
$app_strings['TWITTER_USER_C'] = 'توییتر';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'جزئیات فید شبکه‌های اجتماعی';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'فیلتر';

$app_strings['LBL_COLLECTION_TYPE'] = 'نوع';

$app_strings['LBL_ADD_TAB'] = 'افزودن زبانه';
$app_strings['LBL_EDIT_TAB'] = 'ویرایش تب ها';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'نام پیشخوان را وارد کنید:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'تعداد ستون‌ها:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'آیا از حذف این پیشخوان مطمئن هستید';
$app_strings['LBL_DELETE_DASHBOARD2'] = '؟';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'افزودن یک صفحه پیشخوان';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'حذف صفحه پیشخوان فعلی';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'تغییر نام صفحه پیشخوان';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'اقدامات';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'وظایف',
    'Meetings' => 'جلسات',
    'Calls' => 'تماس‌ها',
    'Notes' => 'یادداشت‌ها',
    'Emails' => 'ایمیل‌ها'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'فروش',
    'getAccountsSpotsData' => 'حساب ها',
    'getLeadsSpotsData' => 'سرنخ‌ها',
    'getServiceSpotsData' => 'خدمات',
    'getMarketingSpotsData' => 'بازاریابی',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'فعالیت‌ها',
    'getQuotesSpotsData' => 'پیش‌فاکتورها'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'ساعت کاری';
$app_list_strings['business_hours_list']['0'] = '12am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6am';
$app_list_strings['business_hours_list']['7'] = '7am';
$app_list_strings['business_hours_list']['8'] = '8am';
$app_list_strings['business_hours_list']['9'] = '9am';
$app_list_strings['business_hours_list']['10'] = '10am';
$app_list_strings['business_hours_list']['11'] = '11am';
$app_list_strings['business_hours_list']['12'] = '12pm';
$app_list_strings['business_hours_list']['13'] = '1pm';
$app_list_strings['business_hours_list']['14'] = '2pm';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = 'دوشنبه';
$app_list_strings['day_list']['Tuesday'] = 'سه‌شنبه';
$app_list_strings['day_list']['Wednesday'] = 'چهارشنبه';
$app_list_strings['day_list']['Thursday'] = 'پنج‌شنبه';
$app_list_strings['day_list']['Friday'] = 'جمعه';
$app_list_strings['day_list']['Saturday'] = 'شنبه';
$app_list_strings['day_list']['Sunday'] = 'یکشنبه';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portrait';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Landscape';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'پیش نویس';
$app_list_strings['survey_status_list']['Public'] = 'عمومی';
$app_list_strings['survey_status_list']['Closed'] = 'بسته';
$app_list_strings['surveys_question_type']['Text'] = 'متن';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'کادر انتخاب';
$app_list_strings['surveys_question_type']['Radio'] = 'رادیو';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'تاریخ';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'امتیاز دهی';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'در انتظار تایید عضویت، تایید عضویت ارسال نشده است';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'در انتظار تایید عضویت، تایید عضویت ارسال شد';
$app_strings['LBL_OPT_IN'] = 'عضو شد';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'انصراف داده';
$app_strings['LBL_OPT_IN_INVALID'] = 'نامعتبر';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'غیرفعال شده',
    'opt-in' => 'عضویت',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'عضویت',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'The confirm opt in email has been added to the email queue for %s email address(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Unable to send email to %s email address(es), because they are not opted in. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s email address do not have a valid id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Two Factor Authentication failed';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Two Factor Authentication code sent.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Two Factor Authentication code failed to send.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Thank you for submitting your interest.';

$app_strings['ERR_IP_CHANGE'] = 'Your session was terminated due to a significant change in your IP address';
$app_strings['ERR_RETURN'] = 'Return to Home';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Grant',
    'client_credentials' => 'Client Credentials',
    'implicit' => 'Implicit',
    'authorization_code' => 'Authorization Code'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'دقیقه',
    'hour' => ' ساعت',
    'day' => 'روز',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'شخصی',
    'shared' => 'اشتراک‌گذاری‌شده',
    'group' => 'گروه',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'متصل شد',
    'failed' => 'انجام نشد',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'در حال انجام',
    'success' => 'موفق',
    'warning' => 'هشدار',
    'error' => 'خطا',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API Error';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API Error occurred.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api Version: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Please ensure you fill in the fields required';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API expects body of the request to be JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Request';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Response';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API cannot find resource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API expects the "Accept" header to be application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API expects the "Content-Type" header to be application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Desktop notifications are now enabled for this web browser.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Desktop notifications are disabled for this web browser. Use your browser preferences to enable them again.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'This browser does not support desktop notifications.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'There was an error: ';
$app_strings['LBL_CLICK_HERE'] = 'اینجا کلیک کنید';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'جستجو';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'جستجو';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'جستجو';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'قبلی';
$app_strings['LBL_SEARCH_NEXT'] = 'ادامه';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' of ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Use Advanced Search';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Use Basic Search';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Legacy MPDF Engine';
$app_strings['LBL_TCPDF_ENGINE'] = 'TCPDF Engine';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Invalid file name:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'This can only be alphanumeric characters, plus \'.\' , \'-\' and \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Invalid import file name';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = 'Password set. Enter value to set new password.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = 'Value set. Enter new value to override current one.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login with Inbound Email server. For connection: ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = 'Your IMAP OAuth session has expired, please login again in the connection: ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = 'کلید';
$app_strings['LBL_VALUE'] = 'مقدار';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'امضا';

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
