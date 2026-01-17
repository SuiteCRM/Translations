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
    'language_pack_name' => 'Azeri (Azerbaijani) - az_AZ',
    'moduleList' => array(
        'Home' => 'Ana səhifə',
        'ResourceCalendar' => 'Təqvim Resursu',
        'Contacts' => 'Əlaqələr',
        'Accounts' => 'Hesablar',
        'Alerts' => 'Xəbərdarlıqlar',
        'Opportunities' => 'İmkanlar',
        'Cases' => 'Mübahisələr',
        'Notes' => 'Qeydlər',
        'Calls' => 'Zənglər',
        'TemplateSectionLine' => 'Bölmə xətinin şablonu',
        'Calls_Reschedule' => 'Zənglərin yenidən qurulması',
        'Emails' => 'E-poçtlar',
        'EAPM' => 'EAPM',
        'Meetings' => 'Görüşlər',
        'Tasks' => 'Tapşırıqlar',
        'Calendar' => 'Təqvim',
        'Leads' => 'Rəhbərlər',
        'Currencies' => 'Valyutalar',
        'Activities' => 'Fəaliyyətlər',
        'Bugs' => 'Boşluqlar',
        'Feeds' => 'RSS',
        'iFrames' => 'Mənim saytlarım',
        'TimePeriods' => 'Vaxt dövrləri',
        'ContractTypes' => 'Müqavilə növləri',
        'Schedulers' => 'Planlamalar',
        'Project' => 'Layihələr',
        'ProjectTask' => 'Layihə tapşırıqları',
        'Campaigns' => 'Kampaniyalar',
        'CampaignLog' => 'Kampaniya girişi',
        'Documents' => 'Sənədlər',
        'DocumentRevisions' => 'Sənəd təftişləri',
        'Connectors' => 'Konnektorlar',
        'Roles' => 'Rol',
        'Notifications' => 'Bildirişlər',
        'Sync' => 'Sinxronizasiya',
        'Users' => 'İstifadəçilər',
        'Employees' => 'İşçilər',
        'Administration' => 'Admin',
        'ACLRoles' => 'Rol',
        'InboundEmail' => 'Girən E-poçt',
        'Releases' => 'Nəşr edilmiş',
        'Prospects' => 'Hədəflər',
        'Queues' => 'Quyruq',
        'EmailMarketing' => 'E-poçt Marketinki',
        'EmailTemplates' => 'E-poçt - Şablonlar',
        'ProspectLists' => 'Hədəflər - Siyahılar',
        'SavedSearch' => 'Saxlanılan Axtarışlar',
        'UpgradeWizard' => 'Sehirbazı Yüksəltmək',
        'Trackers' => 'İzləmələr',
        'TrackerSessions' => 'İzləmə Sessiyaları',
        'TrackerQueries' => 'Izləmə Sorğuları',
        'FAQ' => 'TVS',
        'Newsletters' => 'Xəbərlər',
        'SugarFeed' => 'SuiteCRM Bəsləməsi',
        'SugarFavorites' => 'SuiteCRM Sevimliləri',

        'OAuthKeys' => 'OAuth İstehlakçı Açarları',
        'OAuthTokens' => 'OAuth Tokenləri',
        'OAuth2Clients' => 'OAuth Müştəriləri',
        'OAuth2Tokens' => 'OAuth Tokenləri',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Ana səhifə',
        'Dashboard' => 'İdarəetmə paneli',
        'Contacts' => 'Əlaqə',
        'Accounts' => 'Hesab',
        'Opportunities' => 'Fürsət',
        'Cases' => 'Mübahisə',
        'Notes' => 'Qeyd',
        'Calls' => 'Zəng',
        'Emails' => 'E-poçt',
        'EmailTemplates' => 'E-poçt Şablonu',
        'Meetings' => 'Görüş',
        'Tasks' => 'Tapşırıq',
        'Calendar' => 'Təqvim',
        'Leads' => 'Rəhbər',
        'Activities' => 'Aktivlik',
        'Bugs' => 'Boşluq',
        'KBDocuments' => 'Bilik bazası sənədi',
        'Feeds' => 'RSS',
        'iFrames' => 'Mənim saytlarım',
        'TimePeriods' => 'Vaxt dövrü',
        'Project' => 'Layihə',
        'ProjectTask' => 'Layihə Tapşırığı',
        'Prospects' => 'Hədəf',
        'Campaigns' => 'Kampaniya',
        'Documents' => 'Sənəd',
        'Sync' => 'Sinxronizasiya',
        'Users' => 'İstifadəçi',
        'SugarFavorites' => 'SuiteCRM Sevimliləri',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Bəli',
        '2' => 'Xeyr',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analitik',
        'Competitor' => 'Rəqib',
        'Customer' => 'Müştəri',
        'Integrator' => 'İnteqrasiya',
        'Investor' => 'İnvestor',
        'Partner' => 'Şərik',
        'Press' => 'Mətbuat',
        'Prospect' => 'Prospekt',
        'Reseller' => 'Satışçı',
        'Other' => 'Digər',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Libas',
        'Banking' => 'Bankçılıq',
        'Biotechnology' => 'Biotexnologiya',
        'Chemicals' => 'Kimyəvi maddələr',
        'Communications' => 'Rabitələr',
        'Construction' => 'İnşaat',
        'Consulting' => 'Məsləhətçi',
        'Education' => 'Təhsil',
        'Electronics' => 'Elektronikalar',
        'Energy' => 'Enerji',
        'Engineering' => 'Texnika',
        'Entertainment' => 'Məşğuliyyət',
        'Environmental' => 'Ətraf mühit',
        'Finance' => 'Maliyyə',
        'Government' => 'Hökümət',
        'Healthcare' => 'Sağlamlıq',
        'Hospitality' => 'Qonaqpərvərlik',
        'Insurance' => 'Sığorta',
        'Machinery' => 'Mexanizm',
        'Manufacturing' => 'İstehsalat',
        'Media' => 'Media',
        'Not For Profit' => 'Mənfəətli deyil',
        'Recreation' => 'İstirahət',
        'Retail' => 'Pərakəndə',
        'Shipping' => 'Daşıma',
        'Technology' => 'Texnologiya',
        'Telecommunications' => 'Telerabitə',
        'Transportation' => 'Nəqliyyat',
        'Utilities' => 'Kommunal xidmətlər',
        'Other' => 'Digər',
    ),
    'lead_source_default_key' => 'Özü yaradılmış',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Soyuq çağırma',
        'Existing Customer' => 'Mövcud müştəri',
        'Self Generated' => 'Özü yaradılmış',
        'Employee' => 'İşçi',
        'Partner' => 'Şərik',
        'Public Relations' => 'İctimai ünsiyyət',
        'Direct Mail' => 'Birbaşa Poçt',
        'Conference' => 'Konfrans',
        'Trade Show' => 'Ticarəti Göstər',
        'Web Site' => 'Web Sayt',
        'Word of mouth' => 'Ağız sözü',
        'Email' => 'E-poçt',
        'Campaign' => 'Kampaniya',
        'Other' => 'Digər',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Mövcud Biznes',
        'New Business' => 'Yeni Biznes',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Gəlir',
        'Investment' => 'İnvestisiya',
        'Expected_Revenue' => 'Gözlənilən Gəlir',
        'Budget' => 'Büdcə',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Əsas qərar qəbul edən',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Əsas qərar qəbul edən',
        'Business Decision Maker' => 'Biznesi qərarı qəbul edən',
        'Business Evaluator' => 'Biznes Qiymətləndirici',
        'Technical Decision Maker' => 'Texniki Qərar qəbul edən',
        'Technical Evaluator' => 'Texniki Qiymətləndirici',
        'Executive Sponsor' => 'İcra Sponsoru',
        'Influencer' => 'Təsir',
        'Other' => 'Digər',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Əsas Əlaqə',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Əsas Əlaqə',
        'Alternate Contact' => 'Alternativ Əlaqə',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Xalis 15',
        'Net 30' => 'Xalis 30',
    ),
    'sales_stage_default_key' => 'Kəşfiyyat',
    'sales_stage_dom' => array(
        'Prospecting' => 'Kəşfiyyat',
        'Qualification' => 'İxtisas',
        'Needs Analysis' => 'Təhlilə ehtiyac var',
        'Value Proposition' => 'Dəyər təklifi',
        'Id. Decision Makers' => 'Qərar qəbul edənləri müəyyənləşdirmək',
        'Perception Analysis' => 'Analtikin qavrayışı',
        'Proposal/Price Quote' => 'Təklif/Qiymət limiti',
        'Negotiation/Review' => 'Müzakirə/Nəzərdən keçirtmə',
        'Closed Won' => 'Qazanan Bağladı',
        'Closed Lost' => 'Uduzan Bağladı',
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
        'Call' => 'Zəng',
        'Meeting' => 'Görüş',
        'Task' => 'Tapşırıq',
        'Email' => 'E-poçt',
        'Note' => 'Qeyd',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Cən.',
        'Ms.' => 'Xan.',
        'Mrs.' => 'Xan.',
        'Miss' => 'Xanım',
        'Dr.' => 'Dok.',
        'Prof.' => 'Prof.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 dəqiqə əvvəl',
        300 => '5 dəqiqə əvvəl',
        600 => '10 dəqiqə əvvəl',
        900 => '15 dəqiqə əvvəl',
        1800 => '30 dəqiqə əvvəl',
        3600 => '1 saat əvvəl',
        7200 => '2 saat əvvəl',
        10800 => '3 saat əvvəl',
        18000 => '5 saat əvvəl',
        86400 => '1 gün əvvəl',
    ),

    'task_priority_default' => 'Orta',
    'task_priority_dom' => array(
        'High' => 'Yüksək',
        'Medium' => 'Orta',
        'Low' => 'Aşağı',
    ),
    'task_status_default' => 'Başlamayıb',
    'task_status_dom' => array(
        'Not Started' => 'Başlamayıb',
        'In Progress' => 'Davam edir',
        'Completed' => 'Başa çatmışdır',
        'Pending Input' => 'Giriş gözləyir',
        'Deferred' => 'Təxirə salınmışdır',
    ),
    'meeting_status_default' => 'Planlanmışdır',
    'meeting_status_dom' => array(
        'Planned' => 'Planlanmışdır',
        'Held' => 'Tutulub',
        'Not Held' => 'Tutulmayıb',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Digər',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planlanmışdır',
    'call_status_dom' => array(
        'Planned' => 'Planlanmışdır',
        'Held' => 'Tutulub',
        'Not Held' => 'Tutulmayıb',
    ),
    'call_direction_default' => 'Çıxış',
    'call_direction_dom' => array(
        'Inbound' => 'Giriş',
        'Outbound' => 'Çıxış',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Yeni',
        'Assigned' => 'Təyin edilmiş',
        'In Process' => 'Prosesdə',
        'Converted' => 'Çevrilmiş',
        'Recycled' => 'Təkrarlanan',
        'Dead' => 'Ölmüş',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Yüksək',
        'P2' => 'Orta',
        'P3' => 'Aşağı',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Daimi İstifadəçi',
        'Administrator' => 'Admin',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktivdir',
        'Inactive' => 'Aktiv deyil',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'E-poçt kodu',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktivdir',
        'Terminated' => 'Sonlandırıldı',
        'Leave of Absence' => 'Abundən çıxmaq',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Yüksək',
        'Medium' => 'Orta',
        'Low' => 'Aşağı',
    ),
    'project_task_priority_default' => 'Orta',

    'project_task_status_options' => array(
        'Not Started' => 'Başlamayıb',
        'In Progress' => 'Davam edir',
        'Completed' => 'Başa çatmışdır',
        'Pending Input' => 'Giriş gözləyir',
        'Deferred' => 'Təxirə salınmışdır',
    ),
    'project_task_utilization_options' => array(
        '0' => 'heç nə',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Qaralama',
        'In Review' => 'Baxılmada',
        'Underway' => 'Hazırlaşmaq',
        'On_Hold' => 'Saxlamada',
        'Completed' => 'Başa çatmışdır',
    ),
    'project_status_default' => 'Qaralama',

    'project_duration_units_dom' => array(
        'Days' => 'Günlər',
        'Hours' => 'Saatlar',
    ),

    'activity_status_type_dom' => array(
        '' => '--Heç nə--',
        'active' => 'Aktivdir',
        'inactive' => 'Aktiv deyil',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Hesablar',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Hesab',
        'Opportunities' => 'Fürsət',
        'Cases' => 'Mübahisə',
        'Leads' => 'Rəhbər',
        'Contacts' => 'Əlaqə', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Boşluq',
        'Project' => 'Layihə',

        'Prospects' => 'Hədəf',
        'ProjectTask' => 'Layihə Tapşırığı',

        'Tasks' => 'Tapşırıq',

        'AOS_Contracts' => 'Müqavilə',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Alıntı',
        'AOS_Products' => 'Məhsul',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Hesab',
        'Contacts' => 'Əlaqə',
        'Opportunities' => 'Fürsət',
        'Campaigns' => 'Kampaniya',
        'Tasks' => 'Tapşırıq',
        'Emails' => 'E-poçt',

        'Bugs' => 'Boşluq',
        'Project' => 'Layihə',
        'ProjectTask' => 'Layihə Tapşırığı',
        'Prospects' => 'Hədəf',
        'Cases' => 'Mübahisə',
        'Leads' => 'Rəhbər',

        'Meetings' => 'Görüş',
        'Calls' => 'Zəng',

        'AOS_Contracts' => 'Müqavilə',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Alıntı',
        'AOS_Products' => 'Məhsul',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Hesab',
        'Contacts' => 'Əlaqə',
        'Tasks' => 'Tapşırıq',
        'Opportunities' => 'Fürsət',

        'Bugs' => 'Boşluq',
        'Cases' => 'Mübahisə',
        'Leads' => 'Rəhbər',

        'Project' => 'Layihə',
        'ProjectTask' => 'Layihə Tapşırığı',

        'Prospects' => 'Hədəf',

        'AOS_Contracts' => 'Müqavilə',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Alıntı',
        'AOS_Products' => 'Məhsul',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Qiymətlər',
        'AOS_Invoices' => 'Qəbzlər',
        'AOS_Contracts' => 'Müqavilələr',
    ),
    'issue_priority_default_key' => 'Orta',
    'issue_priority_dom' => array(
        'Urgent' => 'Təcili',
        'High' => 'Yüksək',
        'Medium' => 'Orta',
        'Low' => 'Aşağı',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Qəbul edildi',
        'Duplicate' => 'Dublikat',
        'Closed' => 'Bağlı',
        'Out of Date' => 'Köhnəlmiş',
        'Invalid' => 'Etibarsız',
    ),

    'issue_status_default_key' => 'Yeni',
    'issue_status_dom' => array(
        'New' => 'Yeni',
        'Assigned' => 'Təyin edilmiş',
        'Closed' => 'Bağlı',
        'Pending' => 'Gözləmədə',
        'Rejected' => 'Rədd edilmiş',
    ),

    'bug_priority_default_key' => 'Orta',
    'bug_priority_dom' => array(
        'Urgent' => 'Təcili',
        'High' => 'Yüksək',
        'Medium' => 'Orta',
        'Low' => 'Aşağı',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Qəbul edildi',
        'Duplicate' => 'Dublikat',
        'Fixed' => 'Sabit',
        'Out of Date' => 'Köhnəlmiş',
        'Invalid' => 'Etibarsız',
        'Later' => 'Sonra',
    ),
    'bug_status_default_key' => 'Yeni',
    'bug_status_dom' => array(
        'New' => 'Yeni',
        'Assigned' => 'Təyin edilmiş',
        'Closed' => 'Bağlı',
        'Pending' => 'Gözləmədə',
        'Rejected' => 'Rədd edilmiş',
    ),
    'bug_type_default_key' => 'Boşluq',
    'bug_type_dom' => array(
        'Defect' => 'Qüsur',
        'Feature' => 'Xüsusiyyət',
    ),
    'case_type_dom' => array(
        'Administration' => 'Admin',
        'Product' => 'Məhsul',
        'User' => 'İstifadəçi',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Daxili',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'E-poçt',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Hesablar',
        'Activities' => 'Fəaliyyətlər',
        'Bugs' => 'Boşluqlar',
        'Calendar' => 'Təqvim',
        'Calls' => 'Zənglər',
        'Campaigns' => 'Kampaniyalar',
        'Cases' => 'Mübahisələr',
        'Contacts' => 'Əlaqələr',
        'Currencies' => 'Valyutalar',
        'Dashboard' => 'İdarəetmə paneli',
        'Documents' => 'Sənədlər',
        'Emails' => 'E-poçtlar',
        'Feeds' => 'Bəsləmələr',
        'Forecasts' => 'Proqnozlar',
        'Help' => 'Kömək',
        'Home' => 'Ana səhifə',
        'Leads' => 'Rəhbərlər',
        'Meetings' => 'Görüşlər',
        'Notes' => 'Qeydlər',
        'Opportunities' => 'İmkanlar',
        'Outlook Plugin' => 'Outlook Plaqini',
        'Projects' => 'Layihələr',
        'Quotes' => 'Qiymətlər',
        'Releases' => 'Nəşr edilmiş',
        'RSS' => 'RSS',
        'Studio' => 'Studiya',
        'Upgrade' => 'Yüksəltmək',
        'Users' => 'İstifadəçilər',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planlama',
        'Active' => 'Aktivdir',
        'Inactive' => 'Aktiv deyil',
        'Complete' => 'Tamamlama',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Telesatışlar',
        'Mail' => 'Poçt',
        'Email' => 'E-poçt',
        'Print' => 'Çap',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Televiziya',
        'NewsLetter' => 'Xəbərlər',
        'Survey' => 'Sorğu',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Həftəlik',
        'Monthly' => 'Aylıq',
        'Quarterly' => 'Rüblük',
        'Annually' => 'İllik',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Yanvar',
        '2' => 'Fevral',
        '3' => 'Mart',
        '4' => 'Aprel',
        '5' => 'May',
        '6' => 'İyun',
        '7' => 'İyul',
        '8' => 'Avqust',
        '9' => 'Sentyabr',
        '10' => 'Oktyabr',
        '11' => 'Noyabr',
        '12' => 'Dekabr',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Yan',
        '2' => 'Fev',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'May',
        '6' => 'İyn',
        '7' => 'İyu',
        '8' => 'Avq',
        '9' => 'Sen',
        '10' => 'Okt',
        '11' => 'Noy',
        '12' => 'Dek',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Bazar',
        '2' => 'Bazar ertəsi',
        '3' => 'Çərşənbə axşamı',
        '4' => 'Çərşənbə',
        '5' => 'Cümə axşamı',
        '6' => 'Cümə',
        '7' => 'Şənbə',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Baz',
        '2' => 'B. E',
        '3' => 'Çr. ax',
        '4' => 'Çər',
        '5' => 'Cüm ax',
        '6' => 'Cüm',
        '7' => 'Şən',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Şəxsi',
        'group' => 'Qrup',
        'bounce' => 'Geri dönüş',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'Əsas autentifikasiya',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'Əsas autentifikasiya',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'Şəxsi',
        'group' => 'Qrup',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Şəxsi',
        'group' => 'Qrup',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Şəxsi',
        'group' => 'Qrup',
        'system' => 'Sistem',
        'system-override' => 'Sistem dəyişikliyi',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktivdir',
        'Inactive' => 'Aktiv deyil',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Çox Sözlü Axtarış',
      'single' => 'Tək söz axtarışı',
    ],

    'dom_email_types' => array(
        'out' => 'Göndər',
        'archived' => 'Arxivlənmiş',
        'draft' => 'Qaralama',
        'inbound' => 'Giriş',
        'campaign' => 'Kampaniya',
    ),
    'dom_email_status' => array(
        'archived' => 'Arxivlənmiş',
        'closed' => 'Bağlı',
        'draft' => 'Qaralamada',
        'read' => 'Oxu',
        'replied' => 'Cavalar',
        'sent' => 'Göndər',
        'send_error' => 'Göndərərkən səhv baş verdi',
        'unread' => 'Oxunmamış',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arxivlənmiş',
    ),

    'dom_email_server_type' => array(
        '' => '--Heç nə--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Heç nə--',
        'createcase' => 'Mübahisə Yarat',
        'bounce' => 'Sıçrayışa Nəzarət',
    ),
    'dom_email_distribution' => array(
        '' => '--Heç nə--',
        'direct' => 'Birbaşa təyin etmək',
        'roundRobin' => 'Mərhələ-Robin',
        'leastBusy' => 'Ən az-Məşğul',
    ),
    'dom_email_errors' => array(
        1 => 'Birbaşa Təyinat bəndlərindən yalnızca bir istifadəçini seçin.',
        2 => 'Birbaşa Təyinat bəndlərindən yalnız yoxlanmış bəndləri istifadə edə bilərsiniz.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Bəli',
        'bool_false' => 'Xeyr',
    ),
    'dom_int_bool' => array(
        1 => 'Bəli',
        0 => 'Xeyr',
    ),
    'dom_switch_bool' => array(
        'on' => 'Bəli',
        'off' => 'Xeyr',
        '' => 'Xeyr',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM E-poçt proqramı',
        'mailto' => 'Xarici E-poçt proqramı',
    ),

    'dom_editor_type' => array(
        'none' => 'Birbaşa HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Satandart E-poçt Formatı',
        'html' => 'HTML E-poçt',
        'plain' => 'Sadə Mətn E-poçtu',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Keçmiş işləmə vaxtı, icra edilməmişdir',
        'ready' => 'Hazırdır',
        'in progress' => 'Davam edir',
        'failed' => 'Alınmadı',
        'completed' => 'Başa çatmışdır',
        'no curl' => 'İşləmədi, mümkün cURL yoxdur',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktivdir',
        'Inactive' => 'Aktiv deyil',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Dəqiqələr',
        'hour' => 'Saatlar',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketinq',
        'Knowledege Base' => 'Bilik bazası',
        'Sales' => 'Satışlar',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arxivlənmiş',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketinq Girovu',
        'Product Brochures' => 'Məhsul Broşürləri',
        'FAQ' => 'TVS',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktivdir',
        'Draft' => 'Qaralama',
        'FAQ' => 'TVS',
        'Expired' => 'Vaxtı bitmiş',
        'Under Review' => 'Baxışda',
        'Pending' => 'Gözləmədə',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Poçt Birləşdirmə',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Lisenziya Sazişi',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Qəbul etmək',
        'decline' => 'Rədd Etmək',
        'tentative' => 'Sınaq',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Qəbul edildi',
        'decline' => 'Rədd edildi',
        'tentative' => 'Sınaq',
        'none' => 'Heç nə',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Heç nə',
        'Daily' => 'Gündəlik',
        'Weekly' => 'Həftəlik',
        'Monthly' => 'Aylıq',
        'Yearly' => 'İllik',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'gün(lər)',
        'Weekly' => 'həftə(lər)',
        'Monthly' => 'ay(lar)',
        'Yearly' => 'il(lər)',
    ),

    'duration_dom' => array(
        '' => 'Heç nə',
        '900' => '15 dəqiqə',
        '1800' => '30 dəqiqə',
        '2700' => '45 dəqiqə',
        '3600' => '1 saat',
        '5400' => '1.5 saat',
        '7200' => '2 saat',
        '10800' => '3 saat',
        '21600' => '6 saat',
        '86400' => '1 gün',
        '172800' => '2 gün',
        '259200' => '3 gün',
        '604800' => '1 həftə',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Standart',
        'seed' => 'Toxum',
        'exempt_domain' => 'Sıxma siyahısı - Domain tərəfindən',
        'exempt_address' => 'Sıxma siyahısı - E-poçt ünvanı tərəfindən',
        'exempt' => 'Sıxma siyahısı - İd tərəfindən',
        'test' => 'İmtahan',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktivdir',
        'inactive' => 'Aktiv deyil',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Mesaj Göndərmə/Cəhd edildi',
        'send error' => 'Mesajlar Yoxdur, Digər',
        'invalid email' => 'Mesajlar Yoxdur, Etibarsız E-poçt',
        'link' => 'Linkə Klikləmək',
        'viewed' => 'Baxılmış Mesaj',
        'removed' => 'Çıxdı',
        'lead' => 'Yaradılan rəhbərlər',
        'contact' => 'Yaradılan Əlaqələr',
        'blocked' => 'Ünvan və ya domen tərəfindən boşaldıldı',
        'Survey' => 'Sorğu cavablandırılıb',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Əlaqələr',
        'Users' => 'İstifadəçilər',
        'Prospects' => 'Hədəflər',
        'Leads' => 'Rəhbərlər',
        'Accounts' => 'Hesablar',
    ),
    'merge_operators_dom' => array(
        'like' => 'İçərisindələr',
        'exact' => 'Həqiqətən',
        'start' => 'Başlayır',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Bəli',
        'false' => 'Xeyr',
        'required' => 'Vacibdir',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Deaktivdir',
        1 => 'Aktivdir',
        2 => 'Filtrə',
        3 => 'Defolt seçilmiş filtr',
        4 => 'Yalnız filtr',
    ),

    'projects_priority_options' => array(
        'high' => 'Yüksək',
        'medium' => 'Orta',
        'low' => 'Aşağı',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Başlamayıb',
        'inprogress' => 'Davam edir',
        'completed' => 'Başa çatmışdır',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Genişlənmiş Əfsanə',
        'collapselegend' => 'Dağılmış Əfsanə',
        'clickfordrilldown' => 'Məqsəd üçün kliklə',
        'detailview' => 'Daha ətraflı...',
        'piechart' => 'Pie Qrafik',
        'groupchart' => 'Qrup Qrafiki',
        'stackedchart' => 'Tayalanmış Qrafik',
        'barchart' => 'Külçə Qrafiki',
        'horizontalbarchart' => 'Üfüqü külçə qrafiki',
        'linechart' => 'Xətt Qrafiki',
        'noData' => 'Məlumat mümkün deyil',
        'print' => 'Çap',
        'pieWedgeName' => 'bölmələr',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktivdir',
        'Inactive' => 'Aktiv deyil',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Tək dırnaq (\')',
        '"' => 'Çoxlu Kvota (&#34;)',
        '' => 'Heç nə',
        'other' => 'Başqa:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Başqa:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Yeni Pəncərə',
        '_self' => 'Eyni Pəncərə',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Avtomatik yeniləməni aktiv etmə',
        '30' => 'Hər 30 saniyə',
        '60' => 'Hər 1 dəqiqə',
        '180' => 'Hər 3 dəqiqə',
        '300' => 'Hər 5 dəqiqə',
        '600' => 'Hər 10 dəqiqə',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Heç vaxt',
        '30' => 'Hər 30 saniyə',
        '60' => 'Hər 1 dəqiqə',
        '180' => 'Hər 3 dəqiqə',
        '300' => 'Hər 5 dəqiqə',
        '600' => 'Hər 10 dəqiqə',
    ),
    'date_range_search_dom' => array(
        '=' => 'Bərabərlər',
        'not_equal' => 'Olmayan',
        'greater_than' => 'Sonra',
        'less_than' => 'Əvvəl',
        'last_7_days' => 'Son 7 günlər',
        'next_7_days' => 'Növbəti 7 günlər',
        'last_30_days' => 'Son 30 günlər',
        'next_30_days' => 'Növbəti 30 günlər',
        'last_month' => 'Əvvəlki Ay',
        'this_month' => 'Bu ay',
        'next_month' => 'Gələn Ay',
        'last_year' => 'Əvvəlki İl',
        'this_year' => 'Bu il',
        'next_year' => 'Növbəti İl',
        'between' => 'Arasında',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Bərabərlər',
        'not_equal' => 'Bərabər deyildir',
        'greater_than' => 'Bundan daha böyük',
        'greater_than_equals' => 'Bundan daha böyük və ya buna bərabər',
        'less_than' => 'Daha az',
        'less_than_equals' => 'Daha az və ya buna bərabər',
        'between' => 'Arasında',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopya',
        'move' => 'Daşıma',
        'donothing' => 'Heçnə etməmək',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Nəticələr',
    'ERR_SEARCH_INVALID_QUERY' => 'Axtarışı həyata keçirərkən xəta baş verdi. Sorğu sintaksisi yanlış ola bilər.',
    'ERR_SEARCH_NO_RESULTS' => 'Axtarış kriteriyalarınıza uyğun nəticə yoxdur. Axtarışınızı genişləndirməyə çalışın.',
    'LBL_SEARCH_PERFORMED_IN' => 'Axtarış həyata keçirildi',
    'LBL_EMAIL_CODE' => 'E-poçt kodu:',
    'LBL_SEND' => 'Göndər',
    'LBL_LOGOUT' => 'Çıxış',
    'LBL_TOUR_NEXT' => 'Növbəti',
    'LBL_TOUR_SKIP' => 'Keç',
    'LBL_TOUR_BACK' => 'Geriyə',
    'LBL_TOUR_TAKE_TOUR' => 'Tura başla',
    'LBL_MOREDETAIL' => 'Daha ətraflı' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Xəti Redaktə et' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Bax' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtrə' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Əlavə et' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'E-poçt ünvanı əlavə et' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Göstər/Gizlət' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Təmizlə' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'E-poçt ünvanını sil' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Çıxdı',
    'LBL_ID_FF_INVALID' => 'Etibarsız olaraq Təyin et',
    'LBL_ADD' => 'Əlavə et' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Şirkət logosu' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Birdən görünən konnektorlar',
    'LBL_CLOSEINLINE' => 'Bağla',
    'LBL_VIEWINLINE' => 'Bax',
    'LBL_INFOINLINE' => 'Məlumat',
    'LBL_PRINT' => 'Çap',
    'LBL_HELP' => 'Kömək',
    'LBL_ID_FF_SELECT' => 'Seç',
    'DEFAULT' => 'Başlıca',
    'LBL_SORT' => 'Çeşid',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP üzərində SSL və ya TLS aktivləşdirmək istəyirsiniz?',
    'LBL_NO_ACTION' => 'Bu ad üçün əməliyyat yoxdur: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Heç bir əməliyyat yoxdur.',
    'LBL_NO_DATA' => 'Məlumat Yoxdur',

    'LBL_ROUTING_FLAGGED' => 'bayraqla',
    'LBL_ROUTING_TO' => 'na',
    'LBL_ROUTING_TO_ADDRESS' => 'ünvana',
    'LBL_ROUTING_WITH_TEMPLATE' => 'şablon ilə',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Bu qeyd hazırda nə ehtiva edir. Ofis Telefonu və Ünvan sahələrinin dəyərlərin üzərinə yazmaq istəyirsinizə, "OLDU" düyməsinə basın. Əgər hazırki dəyərləri saxlamaq istəyirsinizsə, "İmtina" düyməsinə basın.',
    'LBL_DROP_HERE' => '[Bura at]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Prefill Gmail&#153; Defoltlar',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Ad',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Çıxan Poçt Serveri Tənzimləmələri',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP Şifrəsi',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Portu',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP Serveri',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP İstifadəçi adı',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Standart',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Xəbərdarlıq: Çıxan poçt hesabında istifadəçi adı və şifrə əskikdir.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Zəhmət olmasa Xarici OAuth Bağlantısı quraşdırın.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Xəbərdarlıq: Parol təyin edilməyib.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Xəbərdarlıq: Etibarnamələr çatışmır',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'E-poçt hesablarınızdan gələn e-poçtları görmək üçün Mail Hesabları qurun.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Mail hesablarında gedən e-poçtdan istifadə etmək üçün SMTP poçt server məlumatını təmin edin.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Hazır',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Təmizlə',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Kimə:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-poçt Ünvanları',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtrə',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Ad',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Ünvanlar Tapılmadı',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Saxla & Ünvan kitabçasına əlavə et',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'E-poçt Qəbul edicilərini seçin',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Ünvan Kitabçası',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Diqqət! Silmək istədiyiniz çıxış hesabı mövcud olan giriş hesabına bağlıdır. Hələ də davam etmək istəyirsinizmi?',
    'LBL_EMAIL_ADDRESSES' => 'E-poçt',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-poçt Ünvanları',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Siz e-poçt ünvanınızın ünsiyyət məqsədləri üçün istifadəsinə razılıq verirsiniz: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'E-poçt ünvanını təsdiqləmək mümkün deyil',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'SuiteCRM İdxal et',
    'LBL_EMAIL_ASSIGNMENT' => 'Təyinat',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Əlavə et',
    'LBL_EMAIL_ATTACHMENT' => 'Əlavə et',
    'LBL_EMAIL_ATTACHMENTS' => 'Lokal Sistemdən',
    'LBL_EMAIL_ATTACHMENTS2' => 'SuiteCRM sənədlərindən',
    'LBL_EMAIL_ATTACHMENTS3' => 'Şablon Əlavələri',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fayl',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Sənəd',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'İmtina',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Xarakter Sayı',
    'LBL_EMAIL_CHECK' => 'Poçtu Yoxla',
    'LBL_EMAIL_CHECKING_NEW' => 'Yeni poçtları yoxlamaq',
    'LBL_EMAIL_CHECKING_DESC' => 'Bir dəqiqə zəhmət olmasa...<br><br>bu poçt hesabının ilk yoxlamasıdır, bu bir qədər vaxt ala bilər.',
    'LBL_EMAIL_CLOSE' => 'Bağla',
    'LBL_EMAIL_COFFEE_BREAK' => 'Yeni poçtlar yoxlanılır.<br><br>Böyük poçt hesabları çox vaxt apara bilər.',

    'LBL_EMAIL_COMPOSE' => 'E-poçt',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Zəhmət olmasa bu poçt üçün alıcı(lar) ı daxil edin.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Bu poçt boşdur. Göndərmək istəyirsiniz?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Bu e-poçtun mövzusu yoxdurş Göndərmək istəyirsiniz?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(mövzusuz)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Zəhmət olasa Kimə, CC və BCC xanalarına düzgün e-poçt ünvanı daxil edin',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Bu e-poçtu atırsız?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Bu imzanı silmək istəyirsiniz?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-poçt göndərildi',

    'LBL_EMAIL_CREATE_NEW' => '--Saxlama Yarat--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Çoxlu',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Boş',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Göndərən tərəfindən göndərilən tarix',
    'LBL_EMAIL_DATE_TODAY' => 'Bugün',
    'LBL_EMAIL_DELETE' => 'Sil',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Seçilən mesajları silmək istəyirsiniz?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-poçt uğurla silindi.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Mesajları Silmək',
    'LBL_EMAIL_DETAILS' => 'Ətraflı məlumat',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Əlaqələr ilə işləyərkən yalnız Əsas ünvan istifadə ediləcək.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Zibil qutusunu boşalt',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Gedən serveri sil',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Keş fayllarını təmizlə',
    'LBL_EMAIL_EMPTY_MSG' => 'Göstəriləcək e-poçt yoxdur.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Göstəriləcək e-poçt ünvanları yoxdur.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Qovluq adı unikal və boş olmamalıdır. Zəhmət olmasa birdaha cəhd edin.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Bu qovluq silinmir. Burada qovluq və ya uşaq e-poçtları və ya onunla əlaqəli bir poçt qutusu var.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'İstənilən qovluq kontekstdən təyin etmək olmur. Zəhmət olmasa bir daha yoxlayın.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Zəhmət olmasa tənzimləmələrinizi yoxlayın.',
    'LBL_EMAIL_ERROR_DESC' => 'Səhvlər aşkar olundu: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Sizin bu sahəyə daxil olmağa icazəniz yoxdur. Sizə icazə verməsi üçün sayt inzibatçınızla əlaqə saxlayın.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM Qovluq adları unikal olmalıdır.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Zəhmət olmasa bəzi axtarış meyarları daxil edin.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Bir xəta baş verdi',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Mesaj Serverdən Silindi',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Mesaj Serverdən silinmişdir və ya başqa qovluğa daşınmışdır',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Poçt serverinə qoşularkən xəta baş verdi. Zəhmət olmasa İnzibatçınızla əlaqə saxlayın',
    'LBL_EMAIL_ERROR_MOVE' => 'Poçtun serverlər arasında və/və ya poçt hesabları arasında daşınması hal-hazırda dəstəklənmir.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Daşıma zamanı səhv baş verdi',
    'LBL_EMAIL_ERROR_NAME' => 'Ad vacibdir.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Göndəriləcək ünvan vacibdir. Zəhmət olmasa etibarlı poçt ünvanları daxil edin.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Zəhmət olmasa faylı təmin edin.',
    'LBL_EMAIL_ERROR_SERVER' => 'Poçt server ünvanı vacibdir.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Bu poçt hesabı saxlanılmadı.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Poçt serveri ilə əlaqə yaradılarkən xəta baş verdi.',
    'LBL_EMAIL_ERROR_USER' => 'Ləqəb adı vacibdir.',
    'LBL_EMAIL_ERROR_PORT' => 'Poçt serveri portu vacibdir.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Server protokolu vacibdir.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Müşahidə Qovluğu vacibdir.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Zibil Qovluğu vacibdir.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Belə bir məlumat yoxdur',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Heç bir çıxış poçt serveri təqdim olunmadı.',
    'LBL_EMAIL_ERROR_SENDING' => 'E-poçt göndərilərkən səhv baş verdi. Zəhmət olmasa sistem inzibatçınızdan kömək istəyin.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Qovluqlar',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Əlavə et',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Yeni Qovluq əlavə et',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Qovluqu yenidən adlandır',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Saxla',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Bu qovluğa əlavə et',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Bu qovluq dəyişdirilə bilməz',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Siz bu qovluğu silmək istəyirsiniz?\nBu əməliyyat geri qaytarılmayacaq.\nQovluğun silinməsi bütün iç qovluqlarada tətbiq olunacaq.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Yeni Qovluq Adı',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Əməliyyata başlamazdan əvvəl zəhmət olmasa qovluğu seçin.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Qovluq Meneceri',

    'LBL_EMAIL_FORWARD' => 'Yönləndirmə',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Yükləndi [[count]] dan [[total]] e-poçtlar',
    'LBL_EMAIL_FROM' => 'Kimdən',
    'LBL_EMAIL_GROUP' => 'qrup',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Qrup',
    'LBL_EMAIL_HOME_FOLDER' => 'Ana səhifə',
    'LBL_EMAIL_IE_DELETE' => 'Poçt Hesabını Silin',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'İmzanı silin',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Siz poçt hesabını silmək istədiyinizdən əminsinizmi?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Silinmə uğurla başa çatdı.',
    'LBL_EMAIL_IE_SAVE' => 'Poçt Hesabı məlumatları saxlanılır',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'E-poçt İdxal olunur',
    'LBL_EMAIL_IMPORT_EMAIL' => 'SuiteCRMdən idxal et',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'İdxal Tənzimləmələri',
    'LBL_EMAIL_INVALID' => 'Etibarsız',
    'LBL_EMAIL_LOADING' => 'Yüklənir...',
    'LBL_EMAIL_MARK' => 'İşarələ',
    'LBL_EMAIL_MARK_FLAGGED' => 'Bayraqlanmış',
    'LBL_EMAIL_MARK_READ' => 'Oxunmuş',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Bayraqlanmamış',
    'LBL_EMAIL_MARK_UNREAD' => 'Oxunmamış',
    'LBL_EMAIL_ASSIGN_TO' => 'Təyin edilmiş',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Qovluq Yarat',
    'LBL_EMAIL_MENU_COMPOSE' => 'Yazmaq',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Qovluqu Sil',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Zibil qutusunu boşald',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinxronlaşdırın',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Keş fayllarını təmizlə',
    'LBL_EMAIL_MENU_REMOVE' => 'Sil',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Qovluqu yenidən adlandır',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Qovluqu yenidən adlandırmaq',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Xahiş edirik bu əməliyyata başlamazdan əvvəl bir seçim edin.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Qovluq Yarat (uzaqdan və ya SuiteCRMdə)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Qovluqu Sil (uzaqdan və ya SuiteCRMdə)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Poçt hesablarınızda olan bütün lazımsız qovuqları boşaldın',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'İşarələniş e-poçt(lar) ı oxunmuş kimi təyin et',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'İşarələniş e-poçt(lar) ı bayraqlama',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Qovluqu yenidən adlandır (uzaqdan və ya SuiteCRMdə)',

    'LBL_EMAIL_MESSAGES' => 'mesajar',

    'LBL_EMAIL_ML_NAME' => 'Siyahı Adı',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Seçilmiş ünvanlar siyahısı',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Mümkün olan ünvanlar siyahısı',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Klik</b> çoxlu seçim<br />(Mac istifadəçiləri isə <b>CMD-klik</b>)',

    'LBL_EMAIL_NO' => 'Xeyr',
    'LBL_EMAIL_NOT_SENT' => 'Sistem sizin sorğunuzu yerinə yetirə bilmir. Zəhmət olmasa sistem inzibatçınızla əlaqə saxlayın.',

    'LBL_EMAIL_OK' => 'Oldu',
    'LBL_EMAIL_ONE_MOMENT' => 'Bir dəqiqə zəhmət olmasa...',
    'LBL_EMAIL_OPEN_ALL' => 'Çoxlu Mesajları Aç',
    'LBL_EMAIL_OPTIONS' => 'Seçimlər',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Sürətlə Yaratma',
    'LBL_EMAIL_OPT_OUT' => 'Çıxdı',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Çıxmış və ya etibarsız',
    'LBL_EMAIL_PERFORMING_TASK' => 'Tapşırıq Performansı',
    'LBL_EMAIL_PRIMARY' => 'Əsas',
    'LBL_EMAIL_PRINT' => 'Çap',

    'LBL_EMAIL_QC_BUGS' => 'Boşluq',
    'LBL_EMAIL_QC_CASES' => 'Mübahisə',
    'LBL_EMAIL_QC_LEADS' => 'Rəhbər',
    'LBL_EMAIL_QC_CONTACTS' => 'Əlaqə',
    'LBL_EMAIL_QC_TASKS' => 'Tapşırıq',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Fürsət',
    'LBL_EMAIL_QUICK_CREATE' => 'Sürətli Yarat',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Qovluqları Yenidən yaratma',
    'LBL_EMAIL_RELATE_TO' => 'Bağlamaq',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Qohumluqlara baxmaq',
    'LBL_EMAIL_RECORD' => 'E-poçt qeydiyyatı',
    'LBL_EMAIL_REMOVE' => 'Sil',
    'LBL_EMAIL_REPLY' => 'Cavab ver',
    'LBL_EMAIL_REPLY_ALL' => 'Hamısına cavab ver',
    'LBL_EMAIL_REPLY_TO' => 'Cavabla',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Mesajların alınması',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'E-poçt qeydiyyatının alınması',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Xahiş edirik bir e-poçt yazısını seçin',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Əvvəlki modula geri qayıtsın?',
    'LBL_EMAIL_REVERT' => 'Geri dön',
    'LBL_EMAIL_RELATE_EMAIL' => 'E-poçt ilə əlaqə saxlayın',

    'LBL_EMAIL_RULES_TITLE' => 'İdarəetmə qaydaları',

    'LBL_EMAIL_SAVE' => 'Saxla',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Saxlayın və Cavab verin',
    'LBL_EMAIL_SAVE_DRAFT' => 'Qaralamada Saxla',
    'LBL_EMAIL_DRAFT_SAVED' => 'Qaalamada saxlanıldı',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Tarixdən',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Tarixə qədər',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Sizin axtarış kriteriyanıza heç bir nəticə uyğun gəlmir.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Axtarış nəticələri',

    'LBL_EMAIL_SELECT' => 'Seç',

    'LBL_EMAIL_SEND' => 'Göndər',
    'LBL_EMAIL_SENDING_EMAIL' => 'E-poçt göndərmək',

    'LBL_EMAIL_SETTINGS' => 'Tənzimləmələr',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'E-Poçt Hesabları',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Formanı təmizlə',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Yeni Poçtları Yoxla',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Ünvandan',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Test Bildirişi üçün E-poçt ünvanı:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Adından',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Ünvana cavab ver',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Bütün Poçt Hesablarını Sinxronizasiya etmək',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Bu e-poçt təqdim olunmuş çıxış poçt tənzimləmələri ilə xüsusi e-poçt ünvanına göndərildi. Zəhmət olmasa e-poçtun qəbul edilməsini yoxlayın və tənzimləmələrinizin düzgün olmasından əmin olun.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Tam SMTP günlüyə baxın',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Tam sinxronizasiya aparılsın?\nBöyük poçt hesabları bir neçə dəqiqə çəkə bilər.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Birdən daha çox qovluq seçmək üçün Shift düyməsinə və ya Ctrl düyməsinə basaraq seçin.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Ümumi',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Qrup Qovluqları Yarat',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Qrup qovluğunu redaktə et',

    'LBL_EMAIL_SETTINGS_NAME' => 'E-Poçtun Hesab adı',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Gələnlər qutusunda hər səhifədə olan e-poçt sayısını seçin. Bu parametrin təsir etməsi üçün bir dəfə səhifə yeniləməsi tələb edə bilər.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Poçt Hesabı Alma',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Tənzimləmələr qeyd edildi.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Yalnız sadə mətinlər göndər',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Səhifə başına e-poçt',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Əyani quraşdırmalar',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Tənzimləmələr',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Mövcud İstifadəçi Qovluqları',
    'LBL_EMAIL_ERROR_PREPEND' => 'E-poçt xətası baş verdi:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'İstifadə etdiyiniz poçt hesabı üçün seçilmiş gedən poçt serveri etibarsızdır. Tənzimləmələri yoxlayın və ya bu poçt hesabı üçün başqa poçt serveri seçin.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Çıxış poçt hesabı e-poçt göndərmək üçün konfuqrasiya olunmamışdır. Zəhmət olmasa çıxış poçt serverini tənzimləyin və ya çıxış poçt serveri seçmək üçün poçt hesabınızda Tənzimləmələr >> Poçt Hesabı bölməsinə keçin.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Əsas imza',
    'LBL_EMAIL_SIGNATURES' => 'İmzalar',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Digər',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[Uzaqdan qoşulma Qovluqlar]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM Qovluqları ]',
    'LBL_EMAIL_SUBJECT' => 'Mövzu',
    'LBL_EMAIL_SUCCESS' => 'Müvəffəqiyyət',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM Qovluq',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'E-poçt şablonu boşdur',
    'LBL_EMAIL_TEMPLATES' => 'Şablonlar',
    'LBL_EMAIL_TO' => 'Kimə',
    'LBL_EMAIL_VIEW' => 'Bax',
    'LBL_EMAIL_VIEW_HEADERS' => 'Başlıqların görünüşü',
    'LBL_EMAIL_VIEW_RAW' => 'Raw e-poçt görünüşü',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Bu xüsusiyyət POP3 tərəfindən dəstəklənmir.',
    'LBL_DEFAULT_LINK_TEXT' => 'Defolt mətn linki.',
    'LBL_EMAIL_YES' => 'Bəli',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Test E-poçtu göndər',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test E-poçt göndər',
    'LBL_EMAIL_MESSAGE_NO' => 'Mesaj nömrəsi.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'İdxal Keçildi',
    'LBL_EMAIL_IMPORT_FAIL' => 'İdxal uğursuz alındı çünkü, artıq idxal olunub və ya serverdən silinmişdir',

    'LBL_LINK_NONE' => 'Heç nə',
    'LBL_LINK_ALL' => 'Hamısı',
    'LBL_LINK_RECORDS' => 'Qeydiyyatlar',
    'LBL_LINK_SELECT' => 'Seç',
    'LBL_LINK_ACTIONS' => 'ƏMƏLİYYATLAR',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Təsdiqli',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Bunu bağlamaq istəyirsinizmi? #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Etibarsız fayl genişləməsi',

    'ERR_AJAX_LOAD' => 'Bir səhv baş verdi:',
    'ERR_AJAX_LOAD_FAILURE' => 'Sorğunuz yerinə yetirilərkən səvh baş verdi, zəhmət olmasa daha sonra cəhd edin.',
    'ERR_AJAX_LOAD_FOOTER' => 'Bu səhv davam edərsə, zəhmət olmasa Ajax modulunun deaktiv olunması üçün inzibatçınızla əlaqə saxlayın',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Onluq ayırıcı minlik ayırıcı ilə eyni xarakterdən istifadə oluna bilməz.\\n\\n Zəhmət olmasa dəyəri dəyişdirin.',
    'ERR_DELETE_RECORD' => 'Əlaqəni silmək üçün qeyd nömrəsi olmalıdır.',
    'ERR_EXPORT_DISABLED' => 'İxraclar deaktivdir.',
    'ERR_EXPORT_TYPE' => 'İxrac zamanı xəta baş verdi ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'etibarlı e-poçt ünvanı deyil.',
    'ERR_INVALID_FILE_REFERENCE' => 'Etibarsız Fayl İstinadı',
    'ERR_NO_HEADER_ID' => 'Bu xüsusiyyət seçilən mövzü üçün mümkün deyil.',
    'ERR_NOT_ADMIN' => 'İnzibatçıya icazəsiz giriş.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Çatışmayan vacib sahə:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Etibarsız vacib sahə:',
    'ERR_INVALID_VALUE' => 'Eubarsız Dəyər:',
    'ERR_NO_SUCH_FILE' => 'Fayl sistemdə yoxdur',
    'ERR_NO_SINGLE_QUOTE' => 'Tək tiraj işarələnməsindən istifadə etmək olmur ',
    'ERR_NOTHING_SELECTED' => 'Zəhmət olmasa öncə seçim edin sonra davam edin.',
    'ERR_SELF_REPORTING' => 'İstifadəçi ona və özünə hesabat verə bilməz.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Sahə üçün heç bir uyğunluq tapılmadı: ',
    'ERR_SQS_NO_MATCH' => 'Uyğunluq yoxdur',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Zəhmət olmasa xüsusi \'açar\' indeksinin displayParams atributunda Meta-Data təyini üçün istfadə olunduğuna əmin olun',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Səhv: Portal adı artıq başqa əlaqə ilə birləşdirilmişdir.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Sahə dəyəri dəqiq dəyərlə uyğun deyil',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Xarici hesabda saxlanılarkən xəta baş verdi.',
    'ERR_NO_DB' => 'Verilənlər bazasına qoşulmadı. Zəhmət olmasa məlumat almaq üçün suitecrm.log baxın (0).',
    'ERR_DB_FAIL' => 'Verilənlər bazasında uğursuzluq. Zəhmət olmasa məlumat almaq üçün suitecrm.log baxın.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} faylları yalnızca SuiteCRM {1} Verilənlər bazasında istifadə oluna bilər.',

    'LBL_ACCOUNT' => 'Hesab',
    'LBL_ACCOUNTS' => 'Hesablar',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Xülasəyə Baxış',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Xülasəyə Baxış',
    'LBL_ADD_BUTTON' => 'Əlavə et',
    'LBL_ADD_DOCUMENT' => 'Sənəd əlavə et',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Hədəf siyahısı əlavə et',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Hədəf siyahısına Əlaqələr əlavə et',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klik edərək Bağla',
    'LBL_ADDITIONAL_DETAILS' => 'Əlavə məlumatlar',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arxiv',
    'LBL_ASSIGNED_TO_USER' => 'Təyin edilmiş İstifadəçi',
    'LBL_ASSIGNED_TO' => 'Təyin edilsin:',
    'LBL_BACK' => 'Geriyə',
    'LBL_BILLING_ADDRESS' => 'Billinq Ünvanı',
    'LBL_QUICK_CREATE' => 'Yarat ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Boşluqlar',
    'LBL_BY' => 'tərəfindən',
    'LBL_CALLS' => 'Zənglər',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Növbədə olan E-poçt kampaniyalarını göndərin',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Təqdim et',
    'LBL_CASE' => 'Mübahisə',
    'LBL_CASES' => 'Mübahisələr',
    'LBL_CHANGE_PASSWORD' => 'Şifrəni Dəyiş',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Hamsini Yoxla',
    'LBL_CITY' => 'Şəhər',
    'LBL_CLEAR_BUTTON_LABEL' => 'Təmizlə',
    'LBL_CLEAR_BUTTON_TITLE' => 'Təmizlə',
    'LBL_CLEARALL' => 'Hamısını təmizlə',
    'LBL_CLOSE_BUTTON_TITLE' => 'Bağla',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Bağla və Yenisini Yarat',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Bağla və Yenisini Yarat',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Bəndləri Aç:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'E-poçt Yarat',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'E-poçt Yarat',
    'LBL_SEARCH_DROPDOWN_YES' => 'Bəli',
    'LBL_SEARCH_DROPDOWN_NO' => 'Xeyr',
    'LBL_CONTACT_LIST' => 'Əlaqə siyahısı',
    'LBL_CONTACT' => 'Əlaqə',
    'LBL_CONTACTS' => 'Əlaqələr',
    'LBL_CONTRACT' => 'Müqavilə',
    'LBL_CONTRACTS' => 'Müqavilələr',
    'LBL_COUNTRY' => 'Ölkə:',
    'LBL_CREATE_BUTTON_LABEL' => 'Yarat',
    'LBL_CREATED_BY_USER' => 'İstifadəçi tərəfindən yaradılıb',
    'LBL_CREATED_USER' => 'İstifadəçi tərəfindən yaradılıb',
    'LBL_CREATED' => 'Müəllif',
    'LBL_CURRENT_USER_FILTER' => 'Mənim maddələrim:',
    'LBL_CURRENCY' => 'Valyuta:',
    'LBL_DOCUMENTS' => 'Sənədlər',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi:',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi:',
    'LBL_EDIT_BUTTON' => 'Redaktə et',
    'LBL_DUPLICATE_BUTTON' => 'Dublikat',
    'LBL_DELETE_BUTTON' => 'Sil',
    'LBL_DELETE' => 'Sil',
    'LBL_DELETED' => 'Silinib',
    'LBL_DIRECT_REPORTS' => 'Birbaşa Hesabatlar',
    'LBL_DONE_BUTTON_LABEL' => 'Hazır',
    'LBL_DONE_BUTTON_TITLE' => 'Hazır',
    'LBL_FAVORITES' => 'Sevimlilər',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Zəhmət olmasa vCard faylını seçin',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard üçün lazım olan modulun bütün vacib sahələri yoxdur. Zəhmət olmasa məlumat üçün suitecrm.log baxın.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Yüklənmiş fayl HTML formatında göstərilən 30000 baytlıq həddi aşır.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Vcard faylını yükləyərkən xəta baş verdi. Zəhmət olmasa məlumat üçün suitecrm.log baxın.',
    'LBL_IMPORT_VCARD' => 'Vcard İdxal:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Vcard İdxal',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Vcard İdxal',
    'LBL_VIEW_BUTTON' => 'Bax',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-poçt PDF olaraq',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-poçt PDF olaraq',
    'LBL_EMAILS' => 'E-poçtlar',
    'LBL_EMPLOYEES' => 'İşçilər',
    'LBL_ENTER_DATE' => 'Tarix daxil et',
    'LBL_EXPORT' => 'İxrac',
    'LBL_FAVORITES_FILTER' => 'Mənim Sevimlilərim:',
    'LBL_GO_BUTTON_LABEL' => 'Get',
    'LBL_HIDE' => 'Gizlət',
    'LBL_ID' => 'Kimlik',
    'LBL_IMPORT' => 'İdxal',
    'LBL_IMPORT_STARTED' => 'İdxal Başladı: ',
    'LBL_LAST_VIEWED' => 'Sonuncu Baxılanlar',
    'LBL_LEADS' => 'Rəhbərlər',
    'LBL_LESS' => 'daha az',
    'LBL_CAMPAIGN' => 'Kampaniya:',
    'LBL_CAMPAIGNS' => 'Kampaniyalar',
    'LBL_CAMPAIGNLOG' => 'Kampaniya girişi',
    'LBL_CAMPAIGN_CONTACT' => 'Kampaniyalar',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Heç nə',
    'LBL_THEME' => 'Mövzu:',
    'LBL_FOUND_IN_RELEASE' => 'Nəşr tapıldı',
    'LBL_FIXED_IN_RELEASE' => 'Nəşr aradan qaldırıldı',
    'LBL_LIST_ACCOUNT_NAME' => 'İstifadəçinin adı',
    'LBL_LIST_ASSIGNED_USER' => 'İstifadəçi',
    'LBL_LIST_CONTACT_NAME' => 'Əlaqə adı',
    'LBL_LIST_CONTACT_ROLE' => 'Əlaqə Rolu',
    'LBL_LIST_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_LIST_EMAIL' => 'E-poçt',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_OF' => 'dair',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'İlə bağlı',
    'LBL_LIST_USER_NAME' => 'İstifadəçi adı',
    'LBL_LISTVIEW_NO_SELECTED' => 'Davam etmək üçün ən azı 1 qeyd seçin.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Davam etmək üçün ən azı 2 qeyd seçin.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Seçilmiş Qeydlər',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Seçilmiş: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dok.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Monkey Extraordinaire Kodu',
    'LBL_CANCEL' => 'İmtina',
    'LBL_VERIFY' => 'Təsdiqlə',
    'LBL_RESEND' => 'Yenidən göndər',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Poçt Birləşdirmə',
    'LBL_MASS_UPDATE' => 'Çoxlu Yeniləmə',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Çoxlu Yeniləmə əməliyyatı üçün heç bir sahə yoxdur',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Əsas E-poçtdan çıxın',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Əsas E-poçta girin',
    'LBL_MEETINGS' => 'Görüşlər',
    'LBL_MEETING_GO_BACK' => 'Danışığa geri qayıt',
    'LBL_MEMBERS' => 'Üzvlər',
    'LBL_MEMBER_OF' => 'Üzvdür',
    'LBL_MODIFIED_BY_USER' => 'İstifadəçi tərəfindən dəyişdirildi',
    'LBL_MODIFIED_USER' => 'İstifadəçi tərəfindən dəyişdirildi',
    'LBL_MODIFIED' => 'Tərəfindən dəyişdirildi',
    'LBL_MODIFIED_NAME' => 'Ad tərəfindən dəyişdirildi',
    'LBL_MORE' => 'Daha çox',
    'LBL_MY_ACCOUNT' => 'Mənim Tənzimləmələrim',
    'LBL_NAME' => 'Ad',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Yarat',
    'LBL_NEW_BUTTON_TITLE' => 'Yarat',
    'LBL_NEXT_BUTTON_LABEL' => 'Növbəti',
    'LBL_NONE' => '--Heç nə--',
    'LBL_NOTES' => 'Qeydlər',
    'LBL_OPPORTUNITIES' => 'İmkanlar',
    'LBL_OPPORTUNITY_NAME' => 'Fürsət Ad',
    'LBL_OPPORTUNITY' => 'Fürsət',
    'LBL_OR' => 'VƏ YA',
    'LBL_PANEL_OVERVIEW' => '	İcmal',
    'LBL_PANEL_ASSIGNMENT' => 'Digər',
    'LBL_PANEL_ADVANCED' => 'ƏTRAFLI MƏLUMAT',
    'LBL_PARENT_TYPE' => 'Valideyn Növü',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Poçt Kodu:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Əsas şəhər ünvanı:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Əsas Ölkə ünvanı:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Əsas ünvanın Poçt kodu:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Əsas Ştat ünvanı:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Əsas 2-ci küçə ünvanı:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Əsas 3-cü küçə ünvanı:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Əsas küçə ünvanı:',
    'LBL_PRIMARY_ADDRESS' => 'Əsas ünvan:',

    'LBL_PROSPECTS' => 'Prospektlər',
    'LBL_PRODUCTS' => 'Məhsullar',
    'LBL_PROJECT_TASKS' => 'Layihə tapşırıqları',
    'LBL_PROJECTS' => 'Layihələr',
    'LBL_QUOTES' => 'Qiymətlər',

    'LBL_RELATED' => 'Bağlama',
    'LBL_RELATED_RECORDS' => 'Bağlama Qeydləri',
    'LBL_REMOVE' => 'Sil',
    'LBL_REPORTS_TO' => 'Hesabat ver',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Tələb olunan sahəni göstərir',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Hazır',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Tam Forma',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Tam Forma',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Saxla & Yenisin Yarat',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Saxla & Yenisin Yarat',
    'LBL_SAVE_OBJECT' => 'Saxla {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Axtar',
    'LBL_SEARCH_BUTTON_TITLE' => 'Axtar',
    'LBL_FILTER' => 'Filtrə',
    'LBL_SEARCH' => 'Axtar',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'daha çox',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Eibarsız fayl formatı, yalnızca şəkil faylı yüklənə bilər.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Seç',
    'LBL_SELECT_BUTTON_TITLE' => 'Seç',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Sənədlərə göz atmaq',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Sənədlərə göz atmaq',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Əlaqə seç',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Əlaqə seç',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Hesabatlardan seç',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Hesabtları seç',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'İstifadəçini seç',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'İstifadəçini seç',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Seçimi təmizləyin',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Seçimi təmizləyin',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Seçimi təmizləyin',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Seçimi təmizləyin',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Faylı seçin',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Faylı seçin',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Faylı təmizləyin',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Faylı təmizləyin',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'İstifadəçini seç',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'İstifadəçini seç',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'İstifadəçini Təmizlə',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'İstifadəçini Təmizlə',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Hesab seçin',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Hesab seçin',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Hesabı təmizləyin',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Hesabı təmizləyin',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Kampaniya seçin',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Kampaniya seçin',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Kampaniyadan çıxın',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Kampaniyadan çıxın',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Əlaqə seç',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Əlaqə seç',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Komanda seçin',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Komanda seçin',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Komandanı təmizləyin',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Komandanı təmizləyin',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Bu səhifəni qurmaq üçün istifadə olunan resurslar (sorğular, fayllar)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'saniyələr.',
    'LBL_SERVER_RESPONSE_TIME' => 'Serverin cavab vermə vaxtı:',
    'LBL_SERVER_MEMORY_BYTES' => 'baytlar',
    'LBL_SERVER_MEMORY_USAGE' => 'Server Yaddaş İstifadəsi: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'İstifadə: - modul: {0} -fəaliyyət: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Serverin Pik Yaddaş İstifadəsi: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Göndərmə Ünvanı',
    'LBL_SHOW' => 'Göstər',
    'LBL_STATE' => 'Ştat:',
    'LBL_STATUS_UPDATED' => 'Bu hadisə üçün Sizin statusunuz yeniləndi!',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Küçə',
    'LBL_SUBJECT' => 'Mövzu',

    'LBL_INBOUNDEMAIL_ID' => 'Girən E-poçt İD',

    'LBL_SCENARIO_SALES' => 'Satışlar',
    'LBL_SCENARIO_MARKETING' => 'Marketinq',
    'LBL_SCENARIO_FINANCE' => 'Maliyyə',
    'LBL_SCENARIO_SERVICE' => 'Xidmət',
    'LBL_SCENARIO_PROJECT' => 'Layihənin idarə olunması',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Bu ssenari satış maddələr idarəsini asanlaşdırır',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Bu ssenari marketing maddələrinin idarəsini asanlaşdırır',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Bu ssenarilər maliyyələ bağlı maddələrin idarə olunmasına kömək edir',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Bu ssenarilər xidmətlə bağlı maddələrin idarə olunmasına kömək edir',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Bu ssenarilər layihə ilə əlaqəli maddələrin idarə olunmasına kömək edir',

    'LBL_SYNC' => 'Sinxronizasiya',
    'LBL_TABGROUP_ALL' => 'Hamısı',
    'LBL_TABGROUP_ACTIVITIES' => 'Fəaliyyətlər',
    'LBL_TABGROUP_COLLABORATION' => 'Əməkdaşlıq',
    'LBL_TABGROUP_MARKETING' => 'Marketinq',
    'LBL_TABGROUP_OTHER' => 'Digər',
    'LBL_TABGROUP_SALES' => 'Satışlar',
    'LBL_TABGROUP_SUPPORT' => 'Dəstək',
    'LBL_TASKS' => 'Tapşırıqlar',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arxiv e-poçt',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arxiv e-poçt',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Silinməyən',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Silinməyən',
    'LBL_UNDELETE_BUTTON' => 'Silinməyən',
    'LBL_UNDELETE' => 'Silinməyən',
    'LBL_UNSYNC' => 'Sinxronlaşmayan',
    'LBL_UPDATE' => 'Yenilə',
    'LBL_USER_LIST' => 'İstifadəçi siyahısı',
    'LBL_USERS' => 'İstifadəçilər',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Mövcud olan e-poçt girişləri yoxlanılır...',
    'LBL_VERIFY_PORTAL_NAME' => 'Mövcud olan portal adları yoxlanılır...',
    'LBL_VIEW_IMAGE' => 'bax',

    'LNK_ABOUT' => 'Haqqında',
    'LNK_ADVANCED_FILTER' => 'Qabaqcıl Filtirləmə',
    'LNK_BASIC_FILTER' => 'Sürətli Filtirləmə',
    'LBL_ADVANCED_SEARCH' => 'Qabaqcıl Filtirləmə',
    'LBL_QUICK_FILTER' => 'Sürətli Filtirləmə',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Hamısını Göstər',
    'LNK_CLOSE' => 'Bağla',
    'LBL_MODIFY_CURRENT_FILTER' => 'Hazırkı filtiri dəyişdir',
    'LNK_SAVED_VIEWS' => 'Tərtibat tənzimləmələri',
    'LNK_DELETE' => 'Sil',
    'LNK_EDIT' => 'Redaktə et',
    'LNK_GET_LATEST' => 'Sonuncunu əldə et',
    'LNK_GET_LATEST_TOOLTIP' => 'Sonuncu versiyaya dəyişdir',
    'LNK_HELP' => 'Kömək',
    'LNK_CREATE' => 'Yarat',
    'LNK_LIST_END' => 'Son',
    'LNK_LIST_NEXT' => 'Növbəti',
    'LNK_LIST_PREVIOUS' => 'Əvvəlki',
    'LNK_LIST_RETURN' => 'Siyahıya Qayıt',
    'LNK_LIST_START' => 'Başla',
    'LNK_LOAD_SIGNED' => 'Daxil ol',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'İmzalanmış sənədi dəyişdir',
    'LNK_PRINT' => 'Çap',
    'LNK_BACKTOTOP' => 'Yuxarıya qayıt',
    'LNK_REMOVE' => 'Sil',
    'LNK_RESUME' => 'Davam et',
    'LNK_VIEW_CHANGE_LOG' => 'Günlük dəyişikliyinə Baxış',

    'NTC_CLICK_BACK' => 'Zəhmət olmasa brauzerinizin geri düyməsinə basın və səhvləri aradan qaldırın.',
    'NTC_DATE_FORMAT' => '(il-ay-gün)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Seçilmiş qeyd(lər) i silmək istəyirsiniz?',
    'NTC_TEMPLATE_IS_USED' => 'Şablon ən azı bir marketinq qeydində istifadə olunur. Siz hələdə silmək istəyirsinizmi?',
    'NTC_TEMPLATES_IS_USED' => 'Qeyd olunan şablonlar marketinq qeydlərində istifadə olunur. Siz hələdə silmək istəyirsinizmi?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Bu qeydləri silmək istədiyinizə əminsiniz?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Siz silmək istəyirsinizmi ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Siz yükləmək istəyirsinizmi ',
    'NTC_DELETE_SELECTED_RECORDS' => ' seçilmiş qeyd(lər) i?',
    'NTC_LOGIN_MESSAGE' => 'Zəhmət olmasa istifadəçi adınızı və şifrənizi daxil edin.',
    'NTC_NO_ITEMS_DISPLAY' => 'heç nə',
    'NTC_REMOVE_CONFIRMATION' => 'Siz bu əlaqəni silmək istəyirsinizmi? Sadəcə əlaqə silinəcək. Qeydlər silinməyəcək.',
    'NTC_REQUIRED' => 'Tələb olunan sahəni göstərir',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Xoş gəlmişsiniz',
    'NTC_YEAR_FORMAT' => '(il)',
    'WARN_UNSAVED_CHANGES' => 'Siz tərk etsəniz bu qeydə etdiyiniz dəyişikliklər saxlanılmayacaqdır. Bu qeyddən çıxmaq istəyirsinizmi?',
    'ERROR_NO_RECORD' => 'Qeyd alınarkən səhv baş verdi. Bu qeyd ya silinib və ya sizin buna baxmağa icazəniz yoxdur.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Xəbərdarlıq:</b>Sizin brauzer versiyanız artıq dəstəkləmir və ya si dəstəklənməyən brauzerdən istifadə edirsiniz.<p></p>Bu brauzer versiyalarını məsləhətdir:<p></p><ul><li>Internet Explorer 10 (uyğunluq baxışını dəstəklənmir)<li>Firefox 32.0<li><li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Xəbərdarlıq:</b>Sizin İE brauzeriniz uyğunluq baxışını dəstəkləmir.',
    'ERROR_TYPE_NOT_VALID' => 'Səhv. Bu növ etibarsızdır.',
    'ERROR_NO_BEAN' => 'Lobya əldə olunarkən xəta baş verdi.',
    'LBL_DUP_MERGE' => 'Dublikatları Tap',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Abunəlikləri İdarə et',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Abunəlikləri üçün idarə et ',
    // Ajax status strings
    'LBL_LOADING' => 'Yüklənir...',
    'LBL_SEARCHING' => 'Axtarılır...',
    'LBL_SAVING_LAYOUT' => 'Sxem saxlanılır...',
    'LBL_SAVED_LAYOUT' => 'Sxem saxlanıldı.',
    'LBL_SAVED' => 'Saxlanıldı',
    'LBL_SAVING' => 'Saxlanılır',
    'LBL_DISPLAY_COLUMNS' => 'Göstərilən sütunlar',
    'LBL_HIDE_COLUMNS' => 'Gizlədilən sütunlar',
    'LBL_SEARCH_CRITERIA' => 'Axtarış Meyarı',
    'LBL_SAVED_VIEWS' => 'Saxlanılan Baxışlar',
    'LBL_PROCESSING_REQUEST' => 'Emal olunur...',
    'LBL_REQUEST_PROCESSED' => 'Hazır',
    'LBL_AJAX_FAILURE' => 'Ajax uğursuzluğu',
    'LBL_MERGE_DUPLICATES' => 'Birləşdir',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mənim filtirlərim',
    'LBL_SEARCH_POPULATE_ONLY' => 'Yukarıdaki axtarış formunu istifadə edərək, bir axtarış edin',
    'LBL_DETAILVIEW' => 'Ətraflı Baxış',
    'LBL_LISTVIEW' => 'Siyahıya Baxış',
    'LBL_EDITVIEW' => 'Baxışı redaktə et',
    'LBL_BILLING_STREET' => 'Küçə:',
    'LBL_SHIPPING_STREET' => 'Küçə:',
    'LBL_SEARCHFORM' => 'Axtarış formu',
    'LBL_SAVED_SEARCH_ERROR' => 'Xahiş edirik bu görünüş üçün bir ad verin.',
    'LBL_DISPLAY_LOG' => 'Günlüyü Göstər',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistem',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sessiya Vaxt bitimi',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sizin sessiyanız 2 dəqiqəyə bitəcək. Zəhmət olmasa işinizi yaddaşa verin.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Sizin sessiyanız bitdi.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Görüş',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Zəng',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Vaxt: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Məkan: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Açıqlama: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Əlaqədar: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Hadisə',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Hadisə təyin olunmadı.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Məkan təyin olunmadı.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Başlama tarixi müəyyənləşdirilməmişdir.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Heç bir nəticə tapılmadı.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Heç bir nəticə tapılmadı... Bəlkə axtarış meyarlarını dəyişdirib və yenidən cəhd edəsiniz?',
    'MSG_LIST_VIEW_NO_RESULTS' => '<item1> üçün heç bir nəticə tapılmadı',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Yarat <item1> yeni <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'və ya axtarış meyarınızı dəyişin',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Siz hazırda heç bir qeydlər saxlamamısınız. <item2> və ya <item3> indi birdir.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Mənim Sevimlilərimə əlavə et',
    'LBL_CREATE_CONTACT' => 'Əlaqə Yarat',
    'LBL_CREATE_CASE' => 'Mübahisə Yarat',
    'LBL_CREATE_NOTE' => 'Qeyd Yarat',
    'LBL_CREATE_OPPORTUNITY' => 'Fürsət Yarat',
    'LBL_SCHEDULE_CALL' => 'Zəng Günlüyü',
    'LBL_SCHEDULE_MEETING' => 'Görüş cədvəli',
    'LBL_CREATE_TASK' => 'Tapşırıq Yarat',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Forma Yarat',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Web Forması Saxla',
    'LBL_AVAILABLE_FIELDS' => 'Sahələr mövcuddur',
    'LBL_FIRST_FORM_COLUMN' => 'İlk forma sütünu',
    'LBL_SECOND_FORM_COLUMN' => 'İkinci Forma Sütunu',
    'LBL_ASSIGNED_TO_REQUIRED' => 'İtən lazımlı sahə: Təyin edildi',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'İtən lazımlı sahə: Əlaqəli kampaniya',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web formada yarat ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Yaradılacaq bu forma təqdim olunacaq ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Bütün Sahələri əlavə et',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Bütün sahələri sıfırla',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Bütün sahələri sil',
    'LBL_NEXT_BTN' => 'Növbəti',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Sadəcə dəstəklənən şəkil növləri əlavə oluna bilər: JPG, PNG.',
    'LBL_TRAINING' => 'Dəstək Forumu',
    'ERR_MSSQL_DB_CONTEXT' => 'Verilənlər bazası konteksini dəyişdir',
    'ERR_MSSQL_WARNING' => 'Xəbərdarlıq:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Xəta: [[file]] faylı tapılmadı. Heç bir müvafiq HTML faylı tapılmadığından yaradıla bilmir.',
    'ERR_CANNOT_FIND_MODULE' => 'Xəta: [module] modulu tapılmadı.',
    'LBL_ALT_ADDRESS' => 'Digər Ünvanlar:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Xəta: displayParams sahəsinə bərabər olmayan sayda \'key\' ve \'copy\' kompanenti var.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Ümumi',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtirlər',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Sadəcə mənim maddələrim',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Başlıq',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Sıraları göstər',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Siz administrator tərəfindən təyin edilmiş SuiteCRM panel komponentlərinin maksimum sayına çatdınız. Yeni komponent əlavə etmək üçün mövcud olanlardan birini silməlisiniz.',
    'LBL_ADDING_DASHLET' => 'SuiteCRM Dashlet əlavə olunur...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet əlavə olundu',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'SuiteCRM Dashlet silmək istəyirsiniz?',
    'LBL_REMOVING_DASHLET' => 'SuiteCRM Dashlet silinir...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet silindi',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Səhifə yüklənir, zəhmət olmasa gözləyin...',

    'LBL_RELOAD_PAGE' => 'Zəhmət olmasa <a href="javascript: window.location.reload()">pəncərəni yenilə</a>SuiteCRM Dashlet üçün istifadə edin.',
    'LBL_ADD_DASHLETS' => 'Dashletlər əlavə et',
    'LBL_CLOSE_DASHLETS' => 'Bağla',
    'LBL_OPTIONS' => 'Seçimlər',
    'LBL_1_COLUMN' => '1 sütun',
    'LBL_2_COLUMN' => '2 sütun',
    'LBL_3_COLUMN' => '3 sütun',
    'LBL_PAGE_NAME' => 'Səhifə adı',

    'LBL_SEARCH_RESULTS' => 'Axtarış nəticələri',
    'LBL_SEARCH_MODULES' => 'Modullar',
    'LBL_SEARCH_TOOLS' => 'Alətlər',
    'LBL_SEARCH_HELP_TITLE' => 'Axtarış İpuçları',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Şəkil Yoxdur',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Ünvanı soldan kopyala:',
    'LBL_SAVE_AND_CONTINUE' => 'Saxla və Davam et',

    'LBL_SEARCH_HELP_TEXT' => '<p><br/><strong>bir çox seçim yoxlamaları </strong></p><ul><li>Bir atributu seçmək üçün dəyərlərin üzərinə klikləyin. </li><li>Ctrl düyməsinə basarkən klikləyərək birdən çox seçim edə bilərsiniz. Mac istifadəçiləri CMD düyməsinə basarkən klikləyə bilər. </li><li>İki atribut arasındakı bütün atributları seçmək üçün, ilk atributa kliklədikdən sonra, Shift düyməsini basaraq son dəyəri seçin.</li></ul> <p> <strong> Ətraflı axtarış və Görünüş parametrləri</strong><br>İstifadə<b>Saxlanan axtarış və Görünüş </b> seçimi ilə gələcəkdə istədiyiniz axtarış nəticələrini tez bir zamanda əldə etmək üçün bir sıra axtarış parametrləri və /və ya xüsusi siyahıda görünüş variyantını saxlaya bilərsiniz. Sonsuz sayıda xüsusi axtarış və görünüş saxlaya bilərsiniz. Qeyd edilən bütün axtarışlar, son istifadə olunan axtarışın, yazılan Zənglər Siyahısında adlarına görə ən yuxarıda olacaq şəkildə göstərilir. <br><br> Siyahı görünüşü tənzimləmələrini şəxsiləşdirmək üçün, axtarış nəticələrində hansı sahələrin görünəcəyini seçməklə Sütunları Gizlət və Sütunları Göstər funksiyalarından istifadə edin. Məsələn, Qeydiyyat Adı, Təyin edilmiş İstifadəçi, Təyin edilmiş Komanda kimi bir axtarış nəticəsini əlavə edə və ya silə bilərsiniz. Siyahı yeni bir sütun əlavə etmək üçün, əlaqədar sütunu Gizlənəcək Sütunlar siyahısından seçib soldakı oxun üzərinə basaraq GöstəriləGöstəriləcək Sütunlar siyahısından seçib sağdakı oxun üzərinə basaraq Gizlənəcək Sütunlar siyahısına daşıyın. <br>Görünüş parametrləri yadda saxlasanız, axtarış nəticələrini uyğunlaşdırılmış qaydada istədiyiniz zaman görə biləcəksiniz. <br>Bir axtarışı ya da görünüşü saxlamaq ya da yeniləmək üçün: <ol><li><b>Bu axtarışı fərqli qeyd et</b> sahəsinə bir ad yazaraq <b> Saxla </ b> üzərinə basın. Yazdığınız ad<b>təmizlə</b> düyməsinin yanındakı Saxlanan Zənglər siyahısında göstərilir. </li><li>Saxlanan axtarış nəticələrini göstərmək üçün, Saxlanan Zənglər siyahısından bir ad seçin. Axtarışın nəticələri Siyahıda göstərilir. </li><li>Saxlanan hər hansı bir axtarışın xüsusiyyətlərini yeniləmək üçün, siyahıdan həmin yazılmış axtarışı seçin. Ətraflı axtarış hissəsindən yeni axtarış meyarı və görüntü ayarları seçib <b>Cari Axtarışı Dəyiş </ b>yanındakı <b>Yenilə</b> üzərinə basın. </li><li> Saxlanan bir axtarışı silmək üçün, Saxlanan Zənglər siyahısından seçin, <b>Cari Axtarışı Dəyiş</b> yanındakı <b>Sil</b>üzərinə basıb <b>OK</b> üzərinə basaraq təsdiqləyin. </li></ol><p> <strong> göstərişlər </strong><br><br>% ətraflı axtarış xarakterindən daha çox nəticə əldə edə bilərsiniz. Məsələn "Almalar" sözünə bərabər olan nəticələr yerinə "Almalar%" yazıb axtarış etsəniz Alma sözü ilə başlayan bütün nəticələri görə bilərsiniz.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Xəta: $module modulu üçün $limit Sorğu sərhəddinə çatdı.',
    'ERROR_NOTIFY_OVERRIDE' => 'Hata: ResourceObserver->notify() ləğv edilməlidir.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Xəta: Metadata faylının boş olduğu və ya fayl mövcud olmadığından monitor yaratmaq mümkün deyil.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Xəta: İstənilən ad üçün konfiqurasiya edilmiş monitor yoxdur',
    'ERR_UNDEFINED_METRIC' => 'Xəta: Müəyyən edilməyən ölçü üçün dəyər təyin edə bilmir',
    'ERR_STORE_FILE_MISSING' => 'Xəta: Store tətbiq faylı tapılmadı',

    'LBL_MONITOR_ID' => 'Ekran İd',
    'LBL_USER_ID' => 'İstifadəçi İd',
    'LBL_MODULE_NAME' => 'Modul adı',
    'LBL_ITEM_ID' => 'Maddə İd',
    'LBL_ITEM_SUMMARY' => 'Maddə Xülasəsi',
    'LBL_ACTION' => 'Fəaliyyət',
    'LBL_SESSION_ID' => 'Sessiya İd',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack yaradıldı istifadəçi id üçün {0}',
    'LBL_VISIBLE' => 'Qeyd görünür',
    'LBL_DATE_LAST_ACTION' => 'Son fəaliyyətin tarixi',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'əvvəl deyil',
    'MSG_IS_MORE_THAN' => 'daha çoxdur',
    'MSG_SHOULD_BE' => 'olmalıdır',
    'MSG_OR_GREATER' => 'və ya daha çox',

    'LBL_LIST' => 'Siyahı',
    'LBL_CREATE_BUG' => 'Prazit yarat',

    'LBL_OBJECT_IMAGE' => 'obyekt şəkil',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Tarix seç',

    'LBL_VALIDATE_RANGE' => 'etibarlı sıra deyil',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Zəhmət olmasa başlamahəm də qurtarma vaxtını seçin',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Zəhmət olmasa sıra girişlərinin başlama həmdə bitmə aralığını seçin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Hamısı',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Xəta: bean parametr serial miqdarı, nəticələrin miqdarı ilə eyni deyil.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Xəta: Modul üçün qarşılaşdırma mümkün olmadı.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Xəta: {0} əlaqəsi üçün məlumatlar alına bilmədi. Xidmət hazırda mövcud deyil və ya konfiqurasiya parametrləri etibarsızdır. Bağlantı səhv mesajı: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'IIS / FastCGI sapı istifadə edərkən ən yaxşı təcrübə üçün php.ini faylında fastcgi.logging dəyərini 0 olaraq seçin.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Ad',
    'LBL_COLLECTION_PRIMARY' => 'Əsas',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Lazım olan yer boş',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Təyin Edilsin',
    'LBL_DESCRIPTION' => 'Açıqlama',

    'LBL_YESTERDAY' => 'dünən',
    'LBL_TODAY' => 'bugün',
    'LBL_TOMORROW' => 'sabah',
    'LBL_NEXT_WEEK' => 'növbəti həftə',
    'LBL_NEXT_MONDAY' => 'növbəti ay',
    'LBL_NEXT_FRIDAY' => 'növbəti cümə',
    'LBL_TWO_WEEKS' => 'iki həftə',
    'LBL_NEXT_MONTH' => 'növbəti ay',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'gələn ayın ilk günü',
    'LBL_THREE_MONTHS' => 'üç ay',
    'LBL_SIXMONTHS' => 'altı ay',
    'LBL_NEXT_YEAR' => 'növbəti il',

    //Datetimecombo fields
    'LBL_HOURS' => 'Saatlar',
    'LBL_MINUTES' => 'Dəqiqələr',
    'LBL_MERIDIEM' => 'Günorta',
    'LBL_DATE' => 'Tarix',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Avtomatik yeniləmə',

    'LBL_DURATION_DAY' => 'gün',
    'LBL_DURATION_HOUR' => 'saat',
    'LBL_DURATION_MINUTE' => 'dəqiqə',
    'LBL_DURATION_DAYS' => 'günlər',
    'LBL_DURATION_HOURS' => 'Müddəti saat',
    'LBL_DURATION_MINUTES' => 'Müddətli dəqiqələr',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Ay seç',
    'LBL_ENTER_YEAR' => 'İl daxil edin',
    'LBL_ENTER_VALID_YEAR' => 'Zəhmət olmasa etibarlı il daxil edin',

    //File write error label
    'ERR_FILE_WRITE' => 'Səhf: Yazmaq mümkün olmadı {0}. Zəhmət olmasa sistem və web server icazələrini yoxlayın.',
    'ERR_FILE_NOT_FOUND' => 'Xəta: {0} faylı yüklənə bilmir. Zəhmət olmasa sistem və veb server icazələrini yoxlayın.',

    'LBL_AND' => 'Və',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Xarici mənbədəki fayl',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Təhlükəsizlik',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"İçəriyə nəql edilməyə hazır bir faylın necə olacağını görmək üçün bu nümunə içə köçürmə faylı istifadə edilə bilər."
"Fayl, içindəki məlumatlar vergül ilə ayrılmış bir .csv faylıdır, sahədəki məlumatı təyin etmək cüt dırnaq işarələri istifadə edilir."

"Üst məlumat sətiri faylın ən üstündə yerləşir və tətbiqdə görülən domen adlarını ehtiva edir."
"Bu domen adları tətbiq sahələri ilə fayldakı məlumatları uyğunlaşdırmaq üçün istifadə olunur."

"Qeydlər: Verilənlər bazası adları üst məlumat sətirində də istifadə edilə bilər. Beləliklə, phpMyAdmin və ya başqa verilənlər bazası alətindən istifadə edərək verilənlər ixrac daha sonra idxal üçün ixrac edilə bilər. "
"İdxal əməliyyatı zamanı tətbiq sahələri üst məlumat sətirindəki domen adları ilə uyğunlaşacağı üçün sütun sıralaması əhəmiyyətli deyil.


"Bu faylı şablon kimi istifadə etmək üçün bunları edin:"
"1. Nümunə məlumat sətirlərini çıxarın."
"2. Bu anda oxuduğunuz kömək mətnini çıxarın."
"3. Öz məlumatlarınızı uyğun sətir və sütunlara yazın"
"4. Faylı sisteminizdə bilinən bir mövqeyə qeyd edin"
"5. Proqramda əməliyyatlar menyusundan transfer üzərinə klikləyin və yüklənəcək faylı seçin"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Heç bir bildiriş yoxdur',
    'LBL_ALT_SORT_DESC' => 'Azalaraq sıralama',
    'LBL_ALT_SORT_ASC' => 'Artaraq sıralama',
    'LBL_ALT_SORT' => 'Çeşid',
    'LBL_ALT_SHOW_OPTIONS' => 'Seçimləri göstər',
    'LBL_ALT_HIDE_OPTIONS' => 'Tənzimləmələri gizlət',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Seçilmiş girişləri sol tərəfdəki siyahıya daşıyın',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Seçilmiş girişləri sağ tərəfdəki siyahıya daşıyın',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Seçilmiş girişləri siyahıda yuxarıya daşıyın',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Seçilmiş girişləri siyahıda aşağıya daşıyın',
    'LBL_ALT_INFO' => 'İnformasiya',
    'MSG_DUPLICATE' => 'Yaratmaq üçün hazırladığınız {0} qeydiniz əvvəlcədən var olan bir {0} qeydinin bir kopyası ola bilər. {1} oxşar adları daşıyan qeydlər aşağıda verilmişdir.<br>Yeni birini {0} yaratmağa davam etmək üçün {1} Yarat üzərinə klikləyin və ya aşağıdakı siyahıdan mövcud olanı {0} seçin.',
    'MSG_SHOW_DUPLICATES' => 'Yaratmaq üçün hazırladığınız {0} qeydiniz əvvəlcədən var olan bir {0} qeydinin bir kopyası ola bilər. {1} oxşar adları olan qeydlər aşağıda verilmişdir. Yenisini {0} yaratmağa davam etmək üçün Saxla üzərinə basın və ya {0} yaratmadan modula dönmək üçün Ləğv et üzərinə basın.',
    'LBL_EMAIL_TITLE' => 'e-poçt ünvanı',
    'LBL_EMAIL_OPT_TITLE' => 'e-poçt ünvanından çıxdı',
    'LBL_EMAIL_INV_TITLE' => 'etibarsız e-poçt ünvanı',
    'LBL_EMAIL_PRIM_TITLE' => 'Əsas E-poçt Ünvanı olaraq təyin et',
    'LBL_SELECT_ALL_TITLE' => 'Hamısını seç',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Bu sıranı seç',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'XƏTA: Yüklənmə zamanı səhv baş verdi. Xəta kodu: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'XƏTA: Yüklənmə zamanı səhv baş verdi. Xəta kodu: {0} - {1}. Upload_maxsize dəyəri: {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'XƏTA: Yüklənmə zamanı səhv baş verdi. Zəhmət olmasa yardım almaq üçün administratorunuz ilə əlaqə saxlayın.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Yüklənmə ölçüsü ({0} bayt) icazə verilən maksimum: {1} bayt ölçüsündən böyükdür',
    'UPLOAD_REQUEST_ERROR' => 'Xəta baş verdi. Zəhmət olmasa səhifəni yeniləyib yenidən yoxlayın.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Redaktə et',
    'LBL_EDIT_BUTTON_TITLE' => 'Redaktə et',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dublikat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dublikat',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Sil',
    'LBL_DELETE_BUTTON_TITLE' => 'Sil',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Fəaliyyət',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Saxla',
    'LBL_SAVE_BUTTON_TITLE' => 'Saxla',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'İmtina',
    'LBL_CANCEL_BUTTON_TITLE' => 'İmtina',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => '{0} -dakı bağlayıcı sahə düzgün deyil və ya boş olduğundan istifadə edilə bilməz.',
    'ERR_SUHOSIN' => 'Yükləmə axını Suhosin tərəfindən bloklandı, Zəhmət olmasa &quot; yüklə &quot; suhosin.executor.include.whitelist əlavə edin (Daha ətraflı məlumat üçün suitecrm.log səhifəsinə bax)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Serverdən gələn cavab pisdir',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Alıntı',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Satış Qiyməti',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Əllə',
        '5' => 'Hər 5 dəqiqə',
        '15' => 'Hər 15 dəqiqə',
        '30' => 'Hər 30 dəqiqə',
        '60' => 'Hər saat',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Xatırlatma boşdur və ya yanlışdır.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Xatırladıcı popup və ya e-poçt olaraq təyin olunmayıb.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Heç bir dəvət xatırlatması yoxdur.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Xatırlatmaya heç bir dəvət daxil edilməyib, bu xatırlatmanı silmək istəyirsinizmi?',
    'LBL_DELETE_REMINDER' => 'Xatırlatmanı sil',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Sütunları seç',
    'LBL_COLUMN_CHOOSER' => 'Sütun Seçici',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Dəyişiklikləri saxla',
    'LBL_DISPLAYED' => 'Göstərilir',
    'LBL_HIDDEN' => 'Gizlədilmiş',
    'ERR_EMPTY_COLUMNS_LIST' => 'Ən az, bir element vacibdir',

    'LBL_FILTER_HEADER_TITLE' => 'Filtrə',

    'LBL_CATEGORY' => 'Kateqoriya',
    'LBL_LIST_CATEGORY' => 'Kateqoriya',
    'ERR_FACTOR_TPL_INVALID' => 'Faktor İdentifikasiyası mesajı etibarsızdır, zəhmət olmasa inzibatçınızla əlaqə saxlayın.',
    'LBL_SUBTHEMES' => 'Stil',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Sübh',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Gün',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Toran',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Gecə',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Günorta',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Proyekti ləğv et',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Bu əməliyyat bu e-poçtu siləcək, davam etmək istəyirsinizmi?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Yaratmaq dialoqundan çıxmaqla bütün daxil edilmiş məlumatlar itiriləcək, davam etmək istəyirsiniz?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'E-poçt nümunəsi tətbiq edin',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Bu əməliyyat e-poçt Məzmun və Mövzu bölmələrini dəyişdirəcək, davam etmək istəyirsiniz?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Abunəlik təsdiqləndi',
    'LBL_OPT_IN_TITLE' => 'Girdi',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Abunəliyin təsdiqlənmə tarixi',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Abunəliyin təstiqlənməsi üçün göndəriş tarixi',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Abunəliyin təstiqlənməməsi tarixi',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Tokenə qoşulmağı təsdiqləyin',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Abunə olma e-poçt qəlibi quraşdırılmayıb. Xahiş olunur E-poçt parametrləri bölməsindən quraşdırın.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Abunə olmaq üçün e-poçt hesab / Kontakt / Potensiyal / Hədəf ilə əlaqələndirilmiş olması lazımdır',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Qeyri-mirasçı qrup',
    'LBL_PRIMARY_GROUP' => "Əsas Grup",

    // footer
    'LBL_SUITE_TOP' => 'Yuxarıya qayıt',
    'LBL_SUITE_SUPERCHARGED' => 'SuiteCRM tərəfindən superşarjlı',
    'LBL_SUITE_POWERED_BY' => 'SugarCRM tərəfindən dəstəklənməkdədir',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Bu program azad və pulsuz bir proqramdır; yenidən paylaşıla bilər və Azad Proqram təminatı Fondu tərəfindən nəşr olunan GNU Affero General Public License 3 versiyası şərtlərinə əsasən, mənbə kodu üst məlumatında göstərilən əlavə icazə də daxil olmaqla dəyişdirilə bilər.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Şifrənizi yeniləyin',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Abunə olmaq təsdiqi E-poçtu göndərildi',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Abunə olmaq təsdiqi E-poçtu yanlız Hesablar/Kontaktlar/Potensiyallar/Namizədlərə göndərilsin',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Abunə olmaq təsdiqi E-poçtunun göndərilməsi deaktiv olunub. E-poçt parametrləri hissəsindən Abunə Olma təsdiqi butonunu aktivləşdirin ya da İdarəçinizlə ilə görüşün.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Firmanın Ilkin E-poçt ünvanı olmadığından Abunə Olma təsdiqi E-poçtu göndərilə bilmir',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Abunə olmaq təsdiqi E-poçtu göndəriləmədi',
    'LBL_CONFIRM_EMAIL_SENT' => 'Abunə olmaq təsdiqi E-poçtu göndərildi',
);

$app_list_strings['moduleList']['Library'] = 'Kitabxana';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-poçt Ünvanları';
$app_list_strings['project_priority_default'] = 'Orta';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Yüksək',
    'Medium' => 'Orta',
    'Low' => 'Aşağı',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Razılıq',
    'contract' => 'Müqavilə',
    'legal_obligation' => 'Hüquqi öhdəlik',
    'protection_of_interest' => 'Maraqların qorunması',
    'public_interest' => 'İctimai maraq',
    'legitimate_interest' => 'Qanuni maraq',
    'withdrawn' => 'Withdrawn',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Veb sayt',
    'phone' => 'Telefon',
    'given_to_user' => 'İstifadəçiyə verilir',
    'email' => 'E-poçt',
    'third_party' => 'Üçüncü Tərəf',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Bilik bazası';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'Abu Dabi',
    'ADEN' => 'Aden',
    'AFGHANISTAN' => 'Əfqanıstan',
    'ALBANIA' => 'Albaniya',
    'ALGERIA' => 'Əlcəzair',
    'AMERICAN SAMOA' => 'AMERİKA SOMASI',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANQOLA',
    'ANTARCTICA' => 'ANTRAKTİDA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTİNA',
    'ARMENIA' => 'ERMƏNİSTAN',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AVSTRALİYA',
    'AUSTRIA' => 'AVSTRİYA',
    'AZERBAIJAN' => 'AZƏRBAYCAN',
    'BAHAMAS' => 'BAHAMA',
    'BAHRAIN' => 'BƏHREYN',
    'BANGLADESH' => 'BANQLADEŞ',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUS',
    'BELGIUM' => 'BELÇİKA',
    'BELIZE' => 'BELİZ',
    'BENIN' => 'BENİN',
    'BERMUDA' => 'BERMUD',
    'BHUTAN' => 'BUTAN',
    'BOLIVIA' => 'BOLİVİYA',
    'BOSNIA' => 'BOSNİYA',
    'BOTSWANA' => 'BOSTVANA',
    'BOUVET ISLAND' => 'BOUVET ADASI',
    'BRAZIL' => 'BRAZİLİYA',
    'BRITISH ANTARCTICA TERRITORY' => 'Böyük Britaniyanın Antarktika əraziləri',
    'BRITISH INDIAN OCEAN TERRITORY' => 'Böyük Britaniya Hind Okeanı əraziləri',
    'BRITISH VIRGIN ISLANDS' => 'Britaniya Virgin adaları',
    'BRITISH WEST INDIES' => 'Britaniya Qərbi Hind Adaları',
    'BRUNEI' => 'Bruney',
    'BULGARIA' => 'BOLQARISTAN',
    'BURKINA FASO' => 'Burkina Faso',
    'BURUNDI' => 'BURİNDİ',
    'CAMBODIA' => 'Kamboca',
    'CAMEROON' => 'KAMERON',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'Kanal Zonası',
    'CANARY ISLAND' => 'Kanar adaları',
    'CAPE VERDI ISLANDS' => 'Kabo - Verde adaları',
    'CAYMAN ISLANDS' => 'KAYMAN ADALARI',
    'CHAD' => 'ÇAD',
    'CHANNEL ISLAND UK' => 'İngilis Kanal Adası',
    'CHILE' => 'ÇİLİ',
    'CHINA' => 'ÇİN',
    'CHRISTMAS ISLAND' => 'CHRISTMAS -ADASI',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ADASI',
    'COLOMBIA' => 'KOLOMBİYA',
    'COMORO ISLANDS' => 'Komoro Adaları',
    'CONGO' => 'KONQO',
    'CONGO KINSHASA' => 'Konqo Kinşasa',
    'COOK ISLANDS' => 'Kuk Adaları',
    'COSTA RICA' => 'Kosta Rika',
    'CROATIA' => 'Xorvatiya',
    'CUBA' => 'Kuba',
    'CURACAO' => 'Kurakao',
    'CYPRUS' => 'Kipr',
    'CZECH REPUBLIC' => 'Çexiya Respublikası',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANİMARKA',
    'DJIBOUTI' => 'CİBUTİ',
    'DOMINICA' => 'DOMİNİKAN',
    'DOMINICAN REPUBLIC' => 'DOMİNİKAN RESPUBLİKASI',
    'DUBAI' => 'DUBAY',
    'ECUADOR' => 'EKVADOR',
    'EGYPT' => 'MİSİR',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EKVATORİAL QVİNEYA',
    'ESTONIA' => 'ESTONİYA',
    'ETHIOPIA' => 'EFİYOPİYA',
    'FAEROE ISLANDS' => 'FAROE ADALARI',
    'FALKLAND ISLANDS' => 'FALKLAND ADALARI',
    'FIJI' => 'Fici',
    'FINLAND' => 'FİNLANDİYA',
    'FRANCE' => 'FRANSA',
    'FRENCH GUIANA' => 'FRANSIZ GUYANASI',
    'FRENCH POLYNESIA' => 'FRANSIZ POLİNEZİYASI',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBİYA',
    'GEORGIA' => 'GÜRCÜSTAN',
    'GERMANY' => 'ALMANİYA',
    'GHANA' => 'QANA',
    'GIBRALTAR' => 'CƏBƏLLÜTARİQ',
    'GREECE' => 'YUNANISTAN',
    'GREENLAND' => 'QRENLANDİYA',
    'GUADELOUPE' => 'QUADELUPA',
    'GUAM' => 'QUAM',
    'GUATEMALA' => 'QUATEMALA',
    'GUINEA' => 'YENİ QVİNEYA',
    'GUYANA' => 'QAYANA',
    'HAITI' => 'HAİTİ',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'MACARISTAN',
    'ICELAND' => 'İSLANDİYA',
    'IFNI' => 'IFNI',
    'INDIA' => 'HİNDİSTAN',
    'INDONESIA' => 'İNDONEZİYA',
    'IRAN' => 'İRAN',
    'IRAQ' => 'İRAQ',
    'IRELAND' => 'İRLANDİYA',
    'ISRAEL' => 'İSRAİL',
    'ITALY' => 'İTALİYA',
    'IVORY COAST' => 'FİLDİŞİ SAHİLİ',
    'JAMAICA' => 'YAMAYKA',
    'JAPAN' => 'YAPONİYA',
    'JORDAN' => 'İORDANİYA',
    'KAZAKHSTAN' => 'QAZAXISTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KOREYA',
    'KOREA, SOUTH' => 'CƏNUBİ KOREYA',
    'KUWAIT' => 'KÜVEYT',
    'KYRGYZSTAN' => 'QIRĞIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVİYA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'LEEWARD ADALARI',
    'LESOTHO' => 'LESOTO',
    'LIBYA' => 'LİBYA',
    'LIECHTENSTEIN' => 'LİXTENŞTEYN',
    'LITHUANIA' => 'LİTVA',
    'LUXEMBOURG' => 'LÜKSENBURQ',
    'MACAO' => 'MAKAO',
    'MACEDONIA' => 'MAKEDONİYA',
    'MADAGASCAR' => 'MADAQASKAR',
    'MALAWI' => 'MALAVİ',
    'MALAYSIA' => 'MALAYZA',
    'MALDIVES' => 'MALDİV ADALARI',
    'MALI' => 'MALİ',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAvritaniya',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEKSİKA',
    'MOLDOVIA' => 'MOLDOVİYA',
    'MONACO' => 'MONAKO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROKKO',
    'MOZAMBIQUE' => 'MOZAMBİK',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMİBİYA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'Hollandiya',
    'NETHERLANDS ANTILLES' => 'Hollandiya Antillaları',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'NEW CALADONIA',
    'NEW HEBRIDES' => 'NEW HEBRIDES',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK ISLAND',
    'NORWAY' => 'NORVEÇ',
    'OMAN' => 'OMAN',
    'OTHER' => 'Digər',
    'PACIFIC ISLAND' => 'PACIFIC ISLAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLŞA',
    'PORTUGAL' => 'PORTUQALİYA',
    'PORTUGUESE TIMOR' => 'ŞƏRQİ TİMOR',
    'PUERTO RICO' => 'PUERTO RIKO',
    'QATAR' => 'QƏTƏR',
    'REPUBLIC OF BELARUS' => 'BELARUS RESPUBLİKASI',
    'REPUBLIC OF SOUTH AFRICA' => 'CƏNUBİ AFRİKA RESPUBLİKASI',
    'REUNION' => 'Yenidən birləşmə',
    'ROMANIA' => 'RUMINİYA',
    'RUSSIA' => 'RUSİYA',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ADALARI',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARİNO',
    'SAUDI ARABIA' => 'SƏUDİYYƏ ƏRƏBİSTANI',
    'SENEGAL' => 'SENEQAL',
    'SERBIA' => 'SERBİYA',
    'SEYCHELLES' => 'SEYŞEL ADALARI',
    'SIERRA LEONE' => 'SİERRA LEONE',
    'SINGAPORE' => 'SİNQAPUR',
    'SLOVAKIA' => 'SLOVAKİYA',
    'SLOVENIA' => 'SLOVENİYA',
    'SOMALILIAND' => 'SOMALI',
    'SOUTH AFRICA' => 'CƏNUBİ AFRİKA',
    'SOUTH YEMEN' => 'CƏNUBİ YƏMƏN',
    'SPAIN' => 'İSPANİYA',
    'SPANISH SAHARA' => 'İSPANYA SAHARASI',
    'SRI LANKA' => 'ŞRİ-LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS VƏ NEVİS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'Cənub-Qərbi AFRİKA',
    'SWAZILAND' => 'SVAZİLAND',
    'SWEDEN' => 'İSVEÇ',
    'SWITZERLAND' => 'İSVEÇİRƏ',
    'SYRIA' => 'SURİYA',
    'TAIWAN' => 'TAYVAN',
    'TAJIKISTAN' => 'TACİKİSTAN',
    'TANZANIA' => 'TANZANİYA',
    'THAILAND' => 'TAYLAND',
    'TONGA' => 'TONQA',
    'TRINIDAD' => 'TRİNİDAD',
    'TUNISIA' => 'TUNİS',
    'TURKEY' => 'TÜRKİYƏ',
    'UGANDA' => 'UQANDA',
    'UKRAINE' => 'UKRANİYA',
    'UNITED ARAB EMIRATES' => 'BİRLƏŞMİŞ ƏRƏB ƏMİRLİKLƏRİ',
    'UNITED KINGDOM' => 'BİRLƏŞMİŞ KRALLIQ',
    'URUGUAY' => 'URUQVAY',
    'US PACIFIC ISLAND' => 'ABŞ SAKİT OKEAN ADALARI',
    'US VIRGIN ISLANDS' => 'ABŞ VİRGİNİYA ADALARI',
    'USA' => 'ABŞ',
    'UZBEKISTAN' => 'ÖZBƏKİSTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATİKAN ŞƏHƏRİ',
    'VENEZUELA' => 'VENESUELLA',
    'VIETNAM' => 'VİETNAM',
    'WAKE ISLAND' => 'Wake adası',
    'WEST INDIES' => 'Qərbi Hind Adaları',
    'WESTERN SAHARA' => 'Qərbi Saxara',
    'YEMEN' => 'YƏMƏN',
    'ZAIRE' => 'Zair',
    'ZAMBIA' => 'ZAMBİA',
    'ZIMBABWE' => 'ZİMBABVE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Tayvan ve Honkonq)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Kiril)',
    'CP1252' => 'CP1252 (MS Qərbi Avropa və ABŞ)',
    'EUC-CN' => 'EUC-CN (Sadələşdirilmiş Çincə GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Yaponca)',
    'EUC-KR' => 'EUC-KR (Koreyaca)',
    'EUC-TW' => 'EUC-TW (Tayvanca)',
    'ISO-2022-JP' => 'ISO-2022-JP (yaponiya dili)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreya dili)',
    'ISO-8859-1' => 'ISO-8859-1 (Qərbi Avropa və ABŞ)',
    'ISO-8859-2' => 'ISO-8859-2 (Mərkəzi və Şərqi Avropa)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Kiril)',
    'ISO-8859-6' => 'ISO-8859-6 (Ərəbcə)',
    'ISO-8859-7' => 'ISO-8859-7 (Yunanca)',
    'ISO-8859-8' => 'ISO-8859-8 (İbranicə)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Kiril Rusça)',
    'KOI8-U' => 'KOI8-U (Slavyan Əlifbası Ukraynca)',
    'SJIS' => 'SJIS (MS Yapon)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Algiers',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlantik/Cape Verde',
    'Africa/Bangui' => 'Afrika/Bangui',
    'Africa/Ndjamena' => 'Afrika/Ndjamena',
    'Indian/Comoro' => 'Hindli/Comoro',
    'Africa/Kinshasa' => 'Afrika/Kinshasa',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Brazzaville' => 'Afrika/Brazzaville',
    'Africa/Abidjan' => 'Afrika/Abidjan',
    'Africa/Djibouti' => 'Afrika/Cibuti',
    'Africa/Cairo' => 'Afrika/Qahirə',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Asmera' => 'Afrika/Əsməra',
    'Africa/Addis_Ababa' => 'Afrika/Əddis Əbəbə',
    'Africa/Libreville' => 'Afrika/Libreville',
    'Africa/Banjul' => 'Afrika/Bancul',
    'Africa/Accra' => 'Afrika/Akkra',
    'Africa/Conakry' => 'Afrika/Konakri',
    'Africa/Bissau' => 'Afrika/Bisau',
    'Africa/Nairobi' => 'Afrika/Nayrobi',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monroviya',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Indian/Antananarivo' => 'Hind/Antananarivu',
    'Africa/Blantyre' => 'Afrika/Blantyre',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Nouakchott' => 'Afrika/Nuakşot',
    'Indian/Mauritius' => 'Hind/Mauritius',
    'Indian/Mayotte' => 'Hind/Mayotta',
    'Africa/Casablanca' => 'Afrika/Kasablanka',
    'Africa/El_Aaiun' => 'Afrika/Layun',
    'Africa/Maputo' => 'Afrika/Maputu',
    'Africa/Windhoek' => 'Afrika/Vindhuk',
    'Africa/Niamey' => 'Afrika/Niamey',
    'Africa/Lagos' => 'Afrika/Laqos',
    'Indian/Reunion' => 'Hint/Reyunyon',
    'Africa/Kigali' => 'Afrika/Kiqali',
    'Atlantic/St_Helena' => 'Atlantik/Müqəddəs Yelena adası',
    'Africa/Sao_Tome' => 'Afrika/San Tome',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Indian/Mahe' => 'Hind/Mae',
    'Africa/Freetown' => 'Afrika/Fritaun',
    'Africa/Mogadishu' => 'Afrika/Moqadişu',
    'Africa/Johannesburg' => 'Afrika/Yohannesburq',
    'Africa/Khartoum' => 'Afrika/Xartum',
    'Africa/Mbabane' => 'Afrika/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar es Salaam',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Tunis' => 'Afrika/Tunis',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Harare',
    'Antarctica/Casey' => 'Antarktida/Keysi',
    'Antarctica/Davis' => 'Antarktida/Devis',
    'Antarctica/Mawson' => 'Antarktida/Mawson',
    'Indian/Kerguelen' => 'Hindistan/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarktida/Dumontdurville',
    'Antarctica/Syowa' => 'Antarktida/Syowa',
    'Antarctica/Vostok' => 'Antarktida/Vostok',
    'Antarctica/Rothera' => 'Antarktida/Rothera',
    'Antarctica/Palmer' => 'Antarktida/Palmer',
    'Antarctica/McMurdo' => 'Antarktida/McMurdo',
    'Asia/Kabul' => 'Asiya/Kabil',
    'Asia/Yerevan' => 'Asiya/İrəvan',
    'Asia/Baku' => 'Asiya/Bakı',
    'Asia/Bahrain' => 'Asiya/Bəhreyn',
    'Asia/Dhaka' => 'Asiya/Dəkkə',
    'Asia/Thimphu' => 'Asiya/Timphu',
    'Indian/Chagos' => 'Hindistan/Çaqos',
    'Asia/Brunei' => 'Asiya/Bruney',
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
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
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
    'Asia/Damascus' => 'Asiya/Dəməşq',
    'Asia/Dushanbe' => 'Asiya/Dəməşq',
    'Asia/Bangkok' => 'Asiya/Banqkok',
    'Asia/Ashgabat' => 'Asiya/Aşqabad',
    'Asia/Dubai' => 'Asiya/Dubay',
    'Asia/Samarkand' => 'Asiya/Səmərqənd',
    'Asia/Tashkent' => 'Asiya/Daşkənd',
    'Asia/Saigon' => 'Asiya/Saiqon',
    'Asia/Aden' => 'Asiya/Aden',
    'Australia/Darwin' => 'Avstraliya/Darvin',
    'Australia/Perth' => 'Avstraliya/Pers',
    'Australia/Brisbane' => 'Avstraliya/Brisben',
    'Australia/Lindeman' => 'Avstraliya/Lindeman',
    'Australia/Adelaide' => 'Avstraliya/Adelaide',
    'Australia/Hobart' => 'Avstraliya/Xobart',
    'Australia/Currie' => 'Avstraliya/Kurri',
    'Australia/Melbourne' => 'Avstraliya/Melburn',
    'Australia/Sydney' => 'Avstraliya/Sidney',
    'Australia/Broken_Hill' => 'Avstraliya/Broken Xill',
    'Indian/Christmas' => 'Hindistan/Milad',
    'Pacific/Rarotonga' => 'Sakit okean/Rarotonqa',
    'Indian/Cocos' => 'Hindistan/Kokos',
    'Pacific/Fiji' => 'Sakit okean/Fici',
    'Pacific/Gambier' => 'Sakit okean/Qambier',
    'Pacific/Marquesas' => 'Sakit okean/Marquesas',
    'Pacific/Tahiti' => 'Sakit okean/Taiti',
    'Pacific/Guam' => 'Sakit okean/Quam',
    'Pacific/Tarawa' => 'Sakit okean/Tarava',
    'Pacific/Enderbury' => 'Sakit okean/Enderberi',
    'Pacific/Kiritimati' => 'Sakit okean/Kiritimati',
    'Pacific/Saipan' => 'Sakit okean/Saipan',
    'Pacific/Majuro' => 'Sakit okean/Majuro',
    'Pacific/Kwajalein' => 'Sakit okean/Kwajalein',
    'Pacific/Truk' => 'Sakit okean/Truk',
    'Pacific/Pohnpei' => 'Sakit okean/Pohnpei',
    'Pacific/Kosrae' => 'Sakit okean/Kosrae',
    'Pacific/Nauru' => 'Sakit okean/Nauru',
    'Pacific/Noumea' => 'Sakit okean/Noumea',
    'Pacific/Auckland' => 'Sakit okean/Oklend',
    'Pacific/Chatham' => 'Sakit okean/Çatem',
    'Pacific/Niue' => 'Sakit okean/Niue',
    'Pacific/Norfolk' => 'Sakit okean/Norfolk',
    'Pacific/Palau' => 'Sakit okean/Palau',
    'Pacific/Port_Moresby' => 'Sakit okean/Port Moresbi',
    'Pacific/Pitcairn' => 'Sakit okean/Pitkern',
    'Pacific/Pago_Pago' => 'Sakit okean/Paqo Paqo',
    'Pacific/Apia' => 'Sakit okean/Apia',
    'Pacific/Guadalcanal' => 'Sakit okean/Qvadalkanal',
    'Pacific/Fakaofo' => 'Sakit okean/Fakaofo',
    'Pacific/Tongatapu' => 'Sakit okean/Tonqatapu',
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
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Warsaw',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscow',
    'Europe/Samara' => 'Avropa/Samara',
    'Asia/Yekaterinburg' => 'Asiya/Yekaterinburq',
    'Asia/Omsk' => 'Asiya/Omsk',
    'Asia/Novosibirsk' => 'Asiya/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asiya/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asiya/İrkutsk',
    'Asia/Yakutsk' => 'Asiya/Yakutsk',
    'Asia/Vladivostok' => 'Asiya/Vladivostok',
    'Asia/Sakhalin' => 'Asiya/Saxalin',
    'Asia/Magadan' => 'Asiya/Maqadan',
    'Asia/Kamchatka' => 'Asiya/Kamçatka',
    'Asia/Anadyr' => 'Asiya/Anadyr',
    'Europe/Belgrade' => 'Avropa/Belqrad',
    'Europe/Madrid' => 'Avropa/Madrid',
    'Africa/Ceuta' => 'Afrika/Seuta',
    'Atlantic/Canary' => 'Atlantik/Kanar',
    'Europe/Stockholm' => 'Avropa/Stokholm',
    'Europe/Zurich' => 'Avropa/Sürix',
    'Europe/Istanbul' => 'Avropa/İstanbul',
    'Europe/Kiev' => 'Avropa/Kiyev',
    'Europe/Uzhgorod' => 'Avropa/Ujqorod',
    'Europe/Zaporozhye' => 'Avropa/Zaporojye',
    'Europe/Simferopol' => 'Avropa/Simferopol',
    'America/New_York' => 'Amerika/Nyu York',
    'America/Chicago' => 'Amerika/Çikaqo',
    'America/North_Dakota/Center' => 'Amerika/Şimali Dakota/Mərkəz',
    'America/Denver' => 'Amerika/Denver',
    'America/Los_Angeles' => 'Amerika/Los Anceles',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Yakutat' => 'Amerika/Yakutat',
    'America/Anchorage' => 'Amerika/Yakutat',
    'America/Nome' => 'Amerika/Nome',
    'America/Adak' => 'Amerika/Adak',
    'Pacific/Honolulu' => 'Sakit okean/Honolulu',
    'America/Phoenix' => 'Amerika/Feniks',
    'America/Boise' => 'Amerika/Boise',
    'America/Indiana/Indianapolis' => 'Amerika/İndiana/İndianapolis',
    'America/Indiana/Marengo' => 'Amerika/İndiana/Marenqo',
    'America/Indiana/Knox' => 'Amerika/İndiana/Knox',
    'America/Indiana/Vevay' => 'Amerika/İndiana/Vevay',
    'America/Kentucky/Louisville' => 'Amerika/Kentukki/Louisville',
    'America/Kentucky/Monticello' => 'Amerika/Kentukki/Monticello',
    'America/Detroit' => 'Amerika/Detroit',
    'America/Menominee' => 'Amerika/Menominee',
    'America/St_Johns' => 'Amerika/St. Johns',
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
    'America/Bahia' => 'America/Bahia',
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
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Request',
    2 => 'Girişə icazə',
    3 => 'Etibarsız',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampaniya',
    'email' => 'E-poçt',
    'event' => 'Hadisə',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampaniya',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampaniya',
    'email' => 'E-poçt',
    'event' => 'Hadisə',
    'system' => 'Sistem',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Bilik bazası';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Qaralama';
$app_list_strings['aok_status_list']['Expired'] = 'Vaxtı bitmiş';
$app_list_strings['aok_status_list']['In_Review'] = 'Baxılmada';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Private';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = 'Events';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Locations';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invited';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Not Invited';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Attended';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Not Attended';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Qəbul edildi';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Rədd edildi';
$app_list_strings['fp_event_status_dom']['No Response'] = 'No Response';

$app_strings['LBL_STATUS_EVENT'] = 'Invite Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Accept Status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Bu səhifəni seç';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Select All';
$app_strings['LBL_LISTVIEW_NONE'] = 'Deselect All';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Case Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Açmaq';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Açmaq',
        'Closed' => 'Bağlı',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Yeni',
        'Open_Assigned' => 'Təyin edilmiş',
        'Closed_Closed' => 'Bağlı',
        'Open_Pending Input' => 'Giriş gözləyir',
        'Closed_Rejected' => 'Rədd edilmiş',
        'Closed_Duplicate' => 'Dublikat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Single user',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'System Default',
    'singleUser' => 'Single User',
    'roundRobin' => 'Mərhələ-Robin',
    'leastBusy' => 'Ən az-Məşğul',
    'random' => 'Random',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Hesabatlar';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Report Charts';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Fields';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Bundan daha böyük';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Daha az';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aor_operator_list']['Contains'] = 'İçərisindələr';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Başlayır';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Ends With';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'Və';
$app_list_strings['aor_condition_operator_list']['OR'] = 'VƏ YA';
$app_list_strings['aor_condition_type_list']['Value'] = 'Dəyər';
$app_list_strings['aor_condition_type_list']['Field'] = 'Sahə';
$app_list_strings['aor_condition_type_list']['Date'] = 'Tarix';
$app_list_strings['aor_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Dəqiqələr';
$app_list_strings['aor_date_type_list']['hour'] = 'Saatlar';
$app_list_strings['aor_date_type_list']['day'] = 'Günlər';
$app_list_strings['aor_date_type_list']['week'] = 'Həftələr';
$app_list_strings['aor_date_type_list']['month'] = 'Aylar';
$app_list_strings['aor_date_type_list']['business_hours'] = 'İş Saatları';
$app_list_strings['aor_date_options']['now'] = 'İndi';
$app_list_strings['aor_date_options']['field'] = 'Bu Sahə';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Artan';
$app_list_strings['aor_sort_operator']['DESC'] = 'Azalan';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Sayı';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Sum';
$app_list_strings['aor_function_list']['AVG'] = 'Average';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Sayı';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Bar chart';
$app_list_strings['aor_chart_types']['line'] = 'Line chart';
$app_list_strings['aor_chart_types']['pie'] = 'Pie chart';
$app_list_strings['aor_chart_types']['radar'] = 'Radar chart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Aylıq';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Həftəlik';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Gündəlik';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktivdir';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Aktiv deyil';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-poçt';
$app_list_strings['aor_email_type_list']['Specify User'] = 'İstifadəçi';
$app_list_strings['aor_email_type_list']['Users'] = 'İstifadəçilər';
$app_list_strings['aor_assign_options']['all'] = 'BÜTÜN İstifadəçilər';
$app_list_strings['aor_assign_options']['role'] = 'Roldaki BÜTÜN İstifadəçilər';
$app_list_strings['aor_assign_options']['security_group'] = 'Təhlükəsizlik Qrupundaki Bütün İstifadəçilər';
$app_list_strings['date_time_period_list']['today'] = 'Bugün';
$app_list_strings['date_time_period_list']['yesterday'] = 'Dünən';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Last Week';
$app_list_strings['date_time_period_list']['last_month'] = 'Əvvəlki Ay';
$app_list_strings['date_time_period_list']['this_month'] = 'Bu ay';
$app_list_strings['date_time_period_list']['this_quarter'] = 'This Quarter';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Last Quarter';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'on the';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Qabaqcıl';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'Gün';
$app_strings['LBL_CRON_MONTH'] = 'Ay';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Gündəlik';
$app_strings['LBL_CRON_WEEKLY'] = 'Həftəlik';
$app_strings['LBL_CRON_MONTHLY'] = 'Aylıq';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Müqavilələr';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Qəbzlər';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Məhsullar';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Sətir elementləri';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Qiymətlər';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analitik';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Rəqib';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Müştəri';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'İnteqrasiya';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'İnvestor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Şərik';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Mətbuat';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Satışçı';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Digər';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Qaralama';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negotiation';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Delivered';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Saxlamada';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmed';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Closed Accepted';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Uduzan Bağladı';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Closed Dead';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Approved';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Not Approved';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analitik';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Rəqib';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Müştəri';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'İnteqrasiya';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'İnvestor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Şərik';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Mətbuat';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Satışçı';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Digər';
$app_list_strings['invoice_status_dom']['Paid'] = 'Paid';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Unpaid';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Cancelled';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Not Invoiced';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Invoiced';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Good';
$app_list_strings['product_type_dom']['Service'] = 'Xidmət';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Qiymətlər';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Qəbzlər';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Müqavilələr';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Qiymətlər';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Qəbzlər';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Müqavilələr';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Hesablar';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Əlaqələr';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Rəhbərlər';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Başlamayıb';
$app_list_strings['contract_status_list']['In Progress'] = 'Davam edir';
$app_list_strings['contract_status_list']['Signed'] = 'Signed';
$app_list_strings['contract_type_list']['Type'] = 'Növ';
$app_strings['LBL_PRINT_AS_PDF'] = 'PDF olaraq çap edin';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Please Select a Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNo templates found.\nPlease go to the PDF templates module and create one';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'İş axını şərtləri';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Actions';
$app_list_strings['aow_status_list']['Active'] = 'Aktivdir';
$app_list_strings['aow_status_list']['Inactive'] = 'Aktiv deyil';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Bundan daha böyük';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Daha az';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'İçərisindələr';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Başlayır';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Is Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Tamamlama';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'Gözləmədə';
$app_list_strings['aow_process_status_list']['Failed'] = 'Alınmadı';
$app_list_strings['aow_condition_operator_list']['And'] = 'Və';
$app_list_strings['aow_condition_operator_list']['OR'] = 'VƏ YA';
$app_list_strings['aow_condition_type_list']['Value'] = 'Dəyər';
$app_list_strings['aow_condition_type_list']['Field'] = 'Sahə';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Tarix';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Dəyər';
$app_list_strings['aow_action_type_list']['Field'] = 'Sahə';
$app_list_strings['aow_action_type_list']['Date'] = 'Tarix';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Dəyər';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Sahə';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Dəqiqələr';
$app_list_strings['aow_date_type_list']['hour'] = 'Saatlar';
$app_list_strings['aow_date_type_list']['day'] = 'Günlər';
$app_list_strings['aow_date_type_list']['week'] = 'Həftələr';
$app_list_strings['aow_date_type_list']['month'] = 'Aylar';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'İş Saatları';
$app_list_strings['aow_date_options']['now'] = 'İndi';
$app_list_strings['aow_date_options']['today'] = 'Bugün';
$app_list_strings['aow_date_options']['field'] = 'Bu Sahə';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'BÜTÜN İstifadəçilər';
$app_list_strings['aow_assign_options']['role'] = 'Roldaki BÜTÜN İstifadəçilər';
$app_list_strings['aow_assign_options']['security_group'] = 'Təhlükəsizlik Qrupundaki Bütün İstifadəçilər';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-poçt';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'İstifadəçi';
$app_list_strings['aow_email_type_list']['Users'] = 'İstifadəçilər';
$app_list_strings['aow_email_to_list']['to'] = 'Kimə';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'All Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'New Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modified Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Always';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Layihə tapşırıq şablonları';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['duration_unit_dom']['Days'] = 'Günlər';
$app_list_strings['duration_unit_dom']['Hours'] = 'Saatlar';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Gantt-a baxın';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Layihə Yarat';

//gmaps
$app_strings['LBL_MAP'] = 'Map';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Ünvan';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Xəritələr';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometers';

$app_list_strings['map_module_type_list']['Accounts'] = 'Hesablar';
$app_list_strings['map_module_type_list']['Contacts'] = 'Əlaqələr';
$app_list_strings['map_module_type_list']['Cases'] = 'Mübahisələr';
$app_list_strings['map_module_type_list']['Leads'] = 'Rəhbərlər';
$app_list_strings['map_module_type_list']['Meetings'] = 'Görüşlər';
$app_list_strings['map_module_type_list']['Opportunities'] = 'İmkanlar';
$app_list_strings['map_module_type_list']['Project'] = 'Layihələr';
$app_list_strings['map_module_type_list']['Prospects'] = 'Hədəflər';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Hesab';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Əlaqə';
$app_list_strings['map_relate_type_list']['Cases'] = 'Mübahisə';
$app_list_strings['map_relate_type_list']['Leads'] = 'Rəhbər';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Görüş';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Fürsət';
$app_list_strings['map_relate_type_list']['Project'] = 'Layihə';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Hədəf';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Admin';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Aircraft Small';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Airplane Tourism';
$app_list_strings['marker_image_list']['airport'] = 'Airport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Apartment';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Beach';
$app_list_strings['marker_image_list']['beautiful'] = 'Beautiful';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bicycle Parking';
$app_list_strings['marker_image_list']['big_city'] = 'Big City';
$app_list_strings['marker_image_list']['bridge'] = 'Bridge';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Bridge Modern';
$app_list_strings['marker_image_list']['bus'] = 'Avtobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Cable Car';
$app_list_strings['marker_image_list']['car'] = 'Maşın';
$app_list_strings['marker_image_list']['car_rental'] = 'Car Rental';
$app_list_strings['marker_image_list']['carrepair'] = 'Carrepair';
$app_list_strings['marker_image_list']['castle'] = 'Castle';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathedral';
$app_list_strings['marker_image_list']['chapel'] = 'Chapel';
$app_list_strings['marker_image_list']['church'] = 'Church';
$app_list_strings['marker_image_list']['city_square'] = 'City Square';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cluster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kofe';
$app_list_strings['marker_image_list']['community_centre'] = 'Community Centre';
$app_list_strings['marker_image_list']['company'] = 'Şirkət';
$app_list_strings['marker_image_list']['conference'] = 'Konfrans';
$app_list_strings['marker_image_list']['construction'] = 'İnşaat';
$app_list_strings['marker_image_list']['convenience'] = 'Convenience';
$app_list_strings['marker_image_list']['court'] = 'Court';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Currency Exchange';
$app_list_strings['marker_image_list']['customs'] = 'Customs';
$app_list_strings['marker_image_list']['cycling'] = 'Cycling';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Dentist';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Deptartment Store';
$app_list_strings['marker_image_list']['disability'] = 'Disability';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Disabled Parking';
$app_list_strings['marker_image_list']['doctor'] = 'Doctor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Down';
$app_list_strings['marker_image_list']['down_left'] = 'Down Left';
$app_list_strings['marker_image_list']['down_right'] = 'Down Right';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Drugs';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Embassy';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Factory';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Falling Rocks';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forest';
$app_list_strings['marker_image_list']['fountain'] = 'Fountain';
$app_list_strings['marker_image_list']['friday'] = 'Cümə';
$app_list_strings['marker_image_list']['garden'] = 'Garden';
$app_list_strings['marker_image_list']['gas_station'] = 'Gas Station';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Gifts';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historical Quarter';
$app_list_strings['marker_image_list']['home'] = 'Ana səhifə';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Məlumat';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Kitabxana';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'Bazar ertəsi';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosque';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorcycle';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Music Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palace';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramic';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park And Ride';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Şəkil';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Places Unvisited';
$app_list_strings['marker_image_list']['places_visited'] = 'Places Visited';
$app_list_strings['marker_image_list']['playground'] = 'Playground';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Power Plant';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Public Art';
$app_list_strings['marker_image_list']['rain'] = 'Rain';
$app_list_strings['marker_image_list']['real_estate'] = 'Real Estate';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant African';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinese';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Fish';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant Greek';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant Indian';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant Italian';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant Japanese';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Korean';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediterranean';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant Mexican';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant Romantic';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant Thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Turkish';
$app_list_strings['marker_image_list']['right'] = 'Right';
$app_list_strings['marker_image_list']['right_then_down'] = 'Right Then Down';
$app_list_strings['marker_image_list']['right_then_up'] = 'Right Then Up';
$app_list_strings['marker_image_list']['saturday'] = 'Şənbə';
$app_list_strings['marker_image_list']['school'] = 'School';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Shopping Mall';
$app_list_strings['marker_image_list']['shore'] = 'Shore';
$app_list_strings['marker_image_list']['sight'] = 'Sight';
$app_list_strings['marker_image_list']['small_city'] = 'Small City';
$app_list_strings['marker_image_list']['snow'] = 'Snow';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Speed 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Speed 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Speed 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Speed 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Speed 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Speed 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Speed 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Speed 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Speed 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Speed 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Speed 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Speed 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Speed Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Stadium';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Steam Train';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Baz';
$app_list_strings['marker_image_list']['sunday'] = 'Bazar';
$app_list_strings['marker_image_list']['supermarket'] = 'Super Market';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Teahouse';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terrace';
$app_list_strings['marker_image_list']['text'] = 'Mətn';
$app_list_strings['marker_image_list']['theater'] = 'Tiyatır';
$app_list_strings['marker_image_list']['theme_park'] = 'Theme Park';
$app_list_strings['marker_image_list']['thursday'] = 'Cümə axşamı';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'Çərşənbə axşamı';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Turn Left';
$app_list_strings['marker_image_list']['turn_right'] = 'Turn Right';
$app_list_strings['marker_image_list']['university'] = 'University';
$app_list_strings['marker_image_list']['up'] = 'Up';
$app_list_strings['marker_image_list']['up_left'] = 'Up Left';
$app_list_strings['marker_image_list']['up_right'] = 'Up Right';
$app_list_strings['marker_image_list']['up_then_left'] = 'Up Then Left';
$app_list_strings['marker_image_list']['up_then_right'] = 'Up Then Right';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Water';
$app_list_strings['marker_image_list']['waterfall'] = 'Waterfall';
$app_list_strings['marker_image_list']['watermill'] = 'Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'Çərşənbə';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Wind Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windmill';
$app_list_strings['marker_image_list']['winery'] = 'Winery';
$app_list_strings['marker_image_list']['work_office'] = 'Work Office';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'World Heritage Site';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Out of Office';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In a Meeting';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Please enter the reschedule information';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Date:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Reason:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Please select a valid date';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Please select a reason';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Call attempt history';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Call Attempts';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Təhlükəsizlik paketi İdarəetmə';
$app_strings['LBL_SECURITYGROUP'] = 'Security Group';
$app_strings['LBL_ROLE'] = 'Rol';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtrə';

$app_strings['LBL_COLLECTION_TYPE'] = 'Növ';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_EDIT_TAB'] = 'Nişanları redaktə edin';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Number of Columns:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Silmək istədiyinizdən əminsiniz mi';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ƏMƏLİYYATLAR';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Tapşırıqlar',
    'Meetings' => 'Görüşlər',
    'Calls' => 'Zənglər',
    'Notes' => 'Qeydlər',
    'Emails' => 'E-poçtlar'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Sahəni yükləyərkən bir səhv baş verdi. Sessiyanız başa çatmış ola bilər. Zəhmət olmasa bunu düzəltmək üçün yenidən daxil olun";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Satışlar',
    'getAccountsSpotsData' => 'Hesablar',
    'getLeadsSpotsData' => 'Rəhbərlər',
    'getServiceSpotsData' => 'Xidmət',
    'getMarketingSpotsData' => 'Marketinq',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Fəaliyyətlər',
    'getQuotesSpotsData' => 'Qiymətlər'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'İş Saatları';
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
$app_list_strings['day_list']['Monday'] = 'Bazar ertəsi';
$app_list_strings['day_list']['Tuesday'] = 'Çərşənbə axşamı';
$app_list_strings['day_list']['Wednesday'] = 'Çərşənbə';
$app_list_strings['day_list']['Thursday'] = 'Cümə axşamı';
$app_list_strings['day_list']['Friday'] = 'Cümə';
$app_list_strings['day_list']['Saturday'] = 'Şənbə';
$app_list_strings['day_list']['Sunday'] = 'Bazar';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portrait';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Landscape';


$app_list_strings['moduleList']['SurveyResponses'] = 'Anket Cavabları';
$app_list_strings['moduleList']['Surveys'] = 'Sorğular';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Anket sualları';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'Qaralama';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Bağlı';
$app_list_strings['surveys_question_type']['Text'] = 'Mətn';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Yoxlama qutusu';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Tarix';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Dərəcə';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Abunə olmaq təsdiqi gözləyən, Abunə olmaq təsdiqi göndərilməmiş';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Abunə olmaq təsdiqi gözləyən, Abunə olmaq təsdiqi göndərilmiş';
$app_strings['LBL_OPT_IN'] = 'Abunə olmuş';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Çıxdı';
$app_strings['LBL_OPT_IN_INVALID'] = 'Etibarsız';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Deaktivdir',
    'opt-in' => 'Girdi',
    'confirmed-opt-in' => 'Abunəlik təsdiqləndi'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Girdi',
    'confirmed-opt-in' => 'Abunəlik təsdiqləndi'
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
    'minute' => 'minutes',
    'hour' => 'hours',
    'day' => 'günlər',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Şəxsi',
    'shared' => 'Paylaşıldı',
    'group' => 'Qrup',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Əlaqəli',
    'failed' => 'Alınmadı',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Davam edir',
    'success' => 'Müvəffəqiyyət',
    'warning' => 'Xəbərdarlıq',
    'error' => 'Xəta',
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
$app_strings['LBL_CLICK_HERE'] = 'Bura klik edin';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Axtar';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Axtar';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Axtar';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Əvvəlki';
$app_strings['LBL_SEARCH_NEXT'] = 'Növbəti';
$app_strings['LBL_SEARCH_PAGE'] = 'Səhifə ';
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

$app_strings['LBL_KEY'] = 'Açar';
$app_strings['LBL_VALUE'] = 'Dəyər';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Signature';

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
