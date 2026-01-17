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
    'language_pack_name' => 'Tagalog (Philippines) - tl_PH',
    'moduleList' => array(
        'Home' => 'Ang Tahanan',
        'ResourceCalendar' => 'Ang magpagkukunan ng kalendaryo',
        'Contacts' => 'Ang mga koneksyon',
        'Accounts' => 'Ang mga Akawnt',
        'Alerts' => 'Ang mga alerto',
        'Opportunities' => 'Ang mga pagkakataon',
        'Cases' => 'Ang mga kaso',
        'Notes' => 'Ang mga tala',
        'Calls' => 'Ang mga tawag',
        'TemplateSectionLine' => 'Ang seksyon na linya ng template',
        'Calls_Reschedule' => 'Tawagan para sa pagpapalit ng iskedyul',
        'Emails' => 'Ang mga email',
        'EAPM' => 'EAPM',
        'Meetings' => 'Ang mga pagpupulong',
        'Tasks' => 'Ang mga gawain',
        'Calendar' => 'Ang kalendaryo',
        'Leads' => 'Pamunuan',
        'Currencies' => 'Ang mga halaga',
        'Activities' => 'Ang mga aktibidad',
        'Bugs' => 'Ang mga mali',
        'Feeds' => 'RSS',
        'iFrames' => 'Ang aking mga sayt',
        'TimePeriods' => 'Ang oras ng mga panahon',
        'ContractTypes' => 'Ang uri ng mga kontrata',
        'Schedulers' => 'Ang mga tagapag iskedyul',
        'Project' => 'Ang mga proyekto',
        'ProjectTask' => 'Ang mga gawain sa proyekto',
        'Campaigns' => 'Ang mga kampanya',
        'CampaignLog' => 'Ang talaan ng kampanya',
        'Documents' => 'Ang mga dokumento',
        'DocumentRevisions' => 'Ang pagpapalit ng bersyon ng dokumento',
        'Connectors' => 'Ang mga Konekonekta',
        'Roles' => 'Ang mga gagampanan',
        'Notifications' => 'Ang mga abiso',
        'Sync' => 'Pagpapareho',
        'Users' => 'Ang mga gumagamit',
        'Employees' => 'Ang mga empleyado',
        'Administration' => 'Pangangasiwa',
        'ACLRoles' => 'Ang mga gagampanan',
        'InboundEmail' => 'Ang paparating na email',
        'Releases' => 'Ang pagpapalabas',
        'Prospects' => 'Ang mga pinapatamaan',
        'Queues' => 'Kwikes',
        'EmailMarketing' => 'Ang email para sa pamimili',
        'EmailTemplates' => 'Ang mga template ng - email',
        'ProspectLists' => 'Ang mga listahan ng mga - Papatamaan',
        'SavedSearch' => 'I-seyb ang mga nahanap',
        'UpgradeWizard' => 'I-upgrade ang mahiko',
        'Trackers' => 'Ang mga tagasubaybay',
        'TrackerSessions' => 'Ang mga sesyon ng pagsubaybay',
        'TrackerQueries' => 'Ang pagsubaybay ng mga Katanungan',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Ang pamahayagang mga kasalutan',
        'SugarFeed' => 'Ang Feed ng SuiteCRM',
        'SugarFavorites' => 'Ang mga Paborito ng SuiteCRM',

        'OAuthKeys' => 'Ang Susi ng Taga-konsumo ng OAuth',
        'OAuthTokens' => 'Ang mga Token ng OAuth',
        'OAuth2Clients' => 'Ang mga kliyente sa OAuth',
        'OAuth2Tokens' => 'Ang mga Token ng OAuth',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Ang Tahanan',
        'Dashboard' => 'Ang dashboard',
        'Contacts' => 'Kontak',
        'Accounts' => 'Ang account',
        'Opportunities' => 'Ang oportunidad',
        'Cases' => 'Ang kaso',
        'Notes' => 'Tandaan',
        'Calls' => 'Tawagan',
        'Emails' => 'Ang Email',
        'EmailTemplates' => 'Ang Template ng Email',
        'Meetings' => 'Ang pagpupulong',
        'Tasks' => 'Ang Gawain',
        'Calendar' => 'Ang kalendaryo',
        'Leads' => 'Pamunuan',
        'Activities' => 'Aktibidad',
        'Bugs' => 'Ang mali',
        'KBDocuments' => 'KBDocument',
        'Feeds' => 'RSS',
        'iFrames' => 'Ang aking mga sayt',
        'TimePeriods' => 'Ang Oras ng Panahon',
        'Project' => 'Proyekto',
        'ProjectTask' => 'Ang Gawain sa Proyekto',
        'Prospects' => 'Pinatatamaan',
        'Campaigns' => 'Kampanya',
        'Documents' => 'Ang Dokumento',
        'Sync' => 'Pagpapareho',
        'Users' => 'Ang Tagagamit',
        'SugarFavorites' => 'Ang mga Paborito ng SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Oo',
        '2' => 'Hindi',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Pagsusuri',
        'Competitor' => 'Kakompentsya',
        'Customer' => 'Kustomer',
        'Integrator' => 'Integerator',
        'Investor' => 'Namumuhunan',
        'Partner' => 'Ang Kapareha',
        'Press' => 'Pindutin',
        'Prospect' => 'Paghahanap',
        'Reseller' => 'Taga-benta',
        'Other' => 'Iba pa',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Kasuotan',
        'Banking' => 'Pag-babangko',
        'Biotechnology' => 'Biyoteknolohiya',
        'Chemicals' => 'Ang mga kemikal',
        'Communications' => 'Ang mga komunikasyon',
        'Construction' => 'Konstruksiyon',
        'Consulting' => 'Pagsangguni',
        'Education' => 'Edukasyon',
        'Electronics' => 'Elektroniks',
        'Energy' => 'Lakas',
        'Engineering' => 'Inhinyero',
        'Entertainment' => 'Aliwan',
        'Environmental' => 'Kapaligiran',
        'Finance' => 'Pananalapi',
        'Government' => 'Pamahalaan',
        'Healthcare' => 'Pangangalaga sa pangkalusugan',
        'Hospitality' => 'Mabuting pakikitungo',
        'Insurance' => 'Sigurado',
        'Machinery' => 'Ang makinarya',
        'Manufacturing' => 'Pagmamanupaktura',
        'Media' => 'Mamamahayag',
        'Not For Profit' => 'Hindi para sa tubo',
        'Recreation' => 'Libangan',
        'Retail' => 'Tingian',
        'Shipping' => 'Pagpapadala',
        'Technology' => 'Teknolohiya',
        'Telecommunications' => 'Telekomunikasyon',
        'Transportation' => 'Transportasyon',
        'Utilities' => 'Mga kagamitan sa panglinis',
        'Other' => 'Iba pa',
    ),
    'lead_source_default_key' => 'Sariling likha',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Malamig na tawag',
        'Existing Customer' => 'Umiiral ng kustomer',
        'Self Generated' => 'Sariling likha',
        'Employee' => 'Empleyado',
        'Partner' => 'Ang Kapareha',
        'Public Relations' => 'Ang mag relasyong pampubliko',
        'Direct Mail' => 'Direkta ang Sulat',
        'Conference' => 'Pagpupulong',
        'Trade Show' => 'Ipakita ang palitan',
        'Web Site' => 'Web sayt',
        'Word of mouth' => 'Bali-balita',
        'Email' => 'Ang Email',
        'Campaign' => 'Kampanya',
        'Other' => 'Iba pa',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Ang umiiral na negosyo',
        'New Business' => 'Ang bagong negosyo',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Kita',
        'Investment' => 'Ang pamumuhunan',
        'Expected_Revenue' => 'Inaasahang Kita',
        'Budget' => 'Badyet',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Ang pangunahing desisyon na ginawa',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Ang pangunahing desisyon na ginawa',
        'Business Decision Maker' => 'Ang desisyon sa negosyong ginawa',
        'Business Evaluator' => 'Ang pagpapahalaga sa negosyo',
        'Technical Decision Maker' => 'Ang desisyon sa teknikal na ginawa',
        'Technical Evaluator' => 'Ang pagpapahalaga sa teknikal',
        'Executive Sponsor' => 'Ang Tagapagpaganap sa tumatangkilik',
        'Influencer' => 'Ang mga mai-impluwensiya',
        'Other' => 'Iba pa',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Ang mga pangunahing kontak',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Ang mga pangunahing kontak',
        'Alternate Contact' => 'Kahaliling kontak',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Ang Net 15',
        'Net 30' => 'Ang Net 30',
    ),
    'sales_stage_default_key' => 'Paghahanap',
    'sales_stage_dom' => array(
        'Prospecting' => 'Paghahanap',
        'Qualification' => 'Ang kwalipikasyon',
        'Needs Analysis' => 'Ang mga kailangan ng pagsusuri',
        'Value Proposition' => 'Kahalagahan ng panukala',
        'Id. Decision Makers' => 'Pagkilala sa Mga Tagagawa ng Desisyon',
        'Perception Analysis' => 'Pang-unawa sa Pagsusuri',
        'Proposal/Price Quote' => 'Pag-sipi sa Panukala/Presyo',
        'Negotiation/Review' => 'Negosasyon/Pagsusuri',
        'Closed Won' => 'Isanara na panalo',
        'Closed Lost' => 'Isanara na pagkatalo',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => 'Sampu',
            'Qualification' => 'Bente',
            'Needs Analysis' => 'Bentisingko',
            'Value Proposition' => 'Tatlumpo',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => 'Limampu',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => 'Isandaan',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Tawagan',
        'Meeting' => 'Ang pagpupulong',
        'Task' => 'Ang Gawain',
        'Email' => 'Ang Email',
        'Note' => 'Tandaan',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Ginoo.',
        'Ms.' => 'Ms.',
        'Mrs.' => 'Gng.',
        'Miss' => 'Miss',
        'Dr.' => 'Dr.',
        'Prof.' => 'Prof.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => 'Isang minuto bago',
        300 => 'Limang minuto bago',
        600 => 'Mga sampung minuto bago',
        900 => 'Labing limang minuto bago',
        1800 => 'Labingtatlong minuto bago',
        3600 => 'Isang oras bago',
        7200 => 'Mga dalawang minuto bago',
        10800 => 'Mga tatlong oras bago',
        18000 => 'Mga limang oras bago',
        86400 => 'Isang araw bago',
    ),

    'task_priority_default' => 'Katamtaman',
    'task_priority_dom' => array(
        'High' => 'Mataas',
        'Medium' => 'Katamtaman',
        'Low' => 'Mababa',
    ),
    'task_status_default' => 'Hindi pag nagsisimula',
    'task_status_dom' => array(
        'Not Started' => 'Hindi pag nagsisimula',
        'In Progress' => 'Nasa pag-unlad',
        'Completed' => 'Nakumpleto',
        'Pending Input' => 'Nakabinbing input',
        'Deferred' => 'Ipinagpaliban',
    ),
    'meeting_status_default' => 'Binalak',
    'meeting_status_dom' => array(
        'Planned' => 'Binalak',
        'Held' => 'Gaganapin',
        'Not Held' => 'Hindi gaganapin',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'Webex',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Iba pa',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Binalak',
    'call_status_dom' => array(
        'Planned' => 'Binalak',
        'Held' => 'Gaganapin',
        'Not Held' => 'Hindi gaganapin',
    ),
    'call_direction_default' => 'Papalabas',
    'call_direction_dom' => array(
        'Inbound' => 'Papasok',
        'Outbound' => 'Papalabas',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Bago',
        'Assigned' => 'Ang naitalaga',
        'In Process' => 'Nasa pagpapaproseso',
        'Converted' => 'Ang pagpapalit',
        'Recycled' => 'Naka-recycle',
        'Dead' => 'Patay',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Mataas',
        'P2' => 'Katamtaman',
        'P3' => 'Mababa',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Ang madalas na gumagamit',
        'Administrator' => 'Ang tagapangasiwa',
    ),
    'user_status_dom' => array(
        'Active' => 'Gawing aktibo',
        'Inactive' => 'Huwag gawing aktibo',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Ang code ng email',
    ),
    'employee_status_dom' => array(
        'Active' => 'Gawing aktibo',
        'Terminated' => 'Natapos na',
        'Leave of Absence' => 'Ang pahintulot sa pagliban',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yehey!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Mataas',
        'Medium' => 'Katamtaman',
        'Low' => 'Mababa',
    ),
    'project_task_priority_default' => 'Katamtaman',

    'project_task_status_options' => array(
        'Not Started' => 'Hindi pag nagsisimula',
        'In Progress' => 'Nasa pag-unlad',
        'Completed' => 'Nakumpleto',
        'Pending Input' => 'Nakabinbing input',
        'Deferred' => 'Ipinagpaliban',
    ),
    'project_task_utilization_options' => array(
        '0' => 'wala',
        '25' => 'Bentisingko',
        '50' => 'Limampu',
        '75' => 'Putumput-lima',
        '100' => 'Isandaan',
    ),

    'project_status_dom' => array(
        'Draft' => 'Naka-draft',
        'In Review' => 'Sa Pagsusuri',
        'Underway' => 'Isinasagawa',
        'On_Hold' => 'Nasa hawakan',
        'Completed' => 'Nakumpleto',
    ),
    'project_status_default' => 'Naka-draft',

    'project_duration_units_dom' => array(
        'Days' => 'Ang mga araw',
        'Hours' => 'Ang mga oras',
    ),

    'activity_status_type_dom' => array(
        '' => '--Wala--',
        'active' => 'Gawing aktibo',
        'inactive' => 'Huwag gawing aktibo',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Ang mga Akawnt',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Ang account',
        'Opportunities' => 'Ang oportunidad',
        'Cases' => 'Ang kaso',
        'Leads' => 'Pamunuan',
        'Contacts' => 'Kontak', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Ang mali',
        'Project' => 'Proyekto',

        'Prospects' => 'Pinatatamaan',
        'ProjectTask' => 'Ang Gawain sa Proyekto',

        'Tasks' => 'Ang Gawain',

        'AOS_Contracts' => 'Kontrata',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Ang quote',
        'AOS_Products' => 'Ang produkto',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Ang account',
        'Contacts' => 'Kontak',
        'Opportunities' => 'Ang oportunidad',
        'Campaigns' => 'Kampanya',
        'Tasks' => 'Ang Gawain',
        'Emails' => 'Ang Email',

        'Bugs' => 'Ang mali',
        'Project' => 'Proyekto',
        'ProjectTask' => 'Ang Gawain sa Proyekto',
        'Prospects' => 'Pinatatamaan',
        'Cases' => 'Ang kaso',
        'Leads' => 'Pamunuan',

        'Meetings' => 'Ang pagpupulong',
        'Calls' => 'Tawagan',

        'AOS_Contracts' => 'Kontrata',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Ang quote',
        'AOS_Products' => 'Ang produkto',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Ang account',
        'Contacts' => 'Kontak',
        'Tasks' => 'Ang Gawain',
        'Opportunities' => 'Ang oportunidad',

        'Bugs' => 'Ang mali',
        'Cases' => 'Ang kaso',
        'Leads' => 'Pamunuan',

        'Project' => 'Proyekto',
        'ProjectTask' => 'Ang Gawain sa Proyekto',

        'Prospects' => 'Pinatatamaan',

        'AOS_Contracts' => 'Kontrata',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Ang quote',
        'AOS_Products' => 'Ang produkto',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Mga panipi',
        'AOS_Invoices' => 'Mga invoice',
        'AOS_Contracts' => 'Mga kontrata',
    ),
    'issue_priority_default_key' => 'Katamtaman',
    'issue_priority_dom' => array(
        'Urgent' => 'Madalian',
        'High' => 'Mataas',
        'Medium' => 'Katamtaman',
        'Low' => 'Mababa',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Tinanggap',
        'Duplicate' => 'Kopyahin',
        'Closed' => 'Sarado',
        'Out of Date' => 'Luma',
        'Invalid' => 'Hindi wasto',
    ),

    'issue_status_default_key' => 'Bago',
    'issue_status_dom' => array(
        'New' => 'Bago',
        'Assigned' => 'Ang naitalaga',
        'Closed' => 'Sarado',
        'Pending' => 'Nakabinbin',
        'Rejected' => 'Tinanggihan',
    ),

    'bug_priority_default_key' => 'Katamtaman',
    'bug_priority_dom' => array(
        'Urgent' => 'Madalian',
        'High' => 'Mataas',
        'Medium' => 'Katamtaman',
        'Low' => 'Mababa',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Tinanggap',
        'Duplicate' => 'Kopyahin',
        'Fixed' => 'Nakapirme',
        'Out of Date' => 'Luma',
        'Invalid' => 'Hindi wasto',
        'Later' => 'Mamaya',
    ),
    'bug_status_default_key' => 'Bago',
    'bug_status_dom' => array(
        'New' => 'Bago',
        'Assigned' => 'Ang naitalaga',
        'Closed' => 'Sarado',
        'Pending' => 'Nakabinbin',
        'Rejected' => 'Tinanggihan',
    ),
    'bug_type_default_key' => 'Ang mali',
    'bug_type_dom' => array(
        'Defect' => 'Depekto',
        'Feature' => 'Ang tampok',
    ),
    'case_type_dom' => array(
        'Administration' => 'Pangangasiwa',
        'Product' => 'Ang produkto',
        'User' => 'Ang Tagagamit',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Panloob',
        'Forum' => 'Talakayan',
        'Web' => 'Ang web',
        'InboundEmail' => 'Ang Email',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Ang mga Akawnt',
        'Activities' => 'Ang mga aktibidad',
        'Bugs' => 'Ang mga mali',
        'Calendar' => 'Ang kalendaryo',
        'Calls' => 'Ang mga tawag',
        'Campaigns' => 'Ang mga kampanya',
        'Cases' => 'Ang mga kaso',
        'Contacts' => 'Ang mga koneksyon',
        'Currencies' => 'Ang mga halaga',
        'Dashboard' => 'Ang dashboard',
        'Documents' => 'Ang mga dokumento',
        'Emails' => 'Ang mga email',
        'Feeds' => 'Ang mga feed',
        'Forecasts' => 'Mga Pagtataya',
        'Help' => 'Saklolo',
        'Home' => 'Ang Tahanan',
        'Leads' => 'Pamunuan',
        'Meetings' => 'Ang mga pagpupulong',
        'Notes' => 'Ang mga tala',
        'Opportunities' => 'Ang mga pagkakataon',
        'Outlook Plugin' => 'Tanaw ang plugin',
        'Projects' => 'Ang mga proyekto',
        'Quotes' => 'Mga panipi',
        'Releases' => 'Ang pagpapalabas',
        'RSS' => 'RSS',
        'Studio' => 'Ang estudyo',
        'Upgrade' => 'I-upgrade',
        'Users' => 'Ang mga gumagamit',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Pagpaplano',
        'Active' => 'Gawing aktibo',
        'Inactive' => 'Huwag gawing aktibo',
        'Complete' => 'Kumpleto',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Mga telesale',
        'Mail' => 'Ang sulat',
        'Email' => 'Ang Email',
        'Print' => 'I-print',
        'Web' => 'Ang web',
        'Radio' => 'Ang radyo',
        'Television' => 'Ang telebesyon',
        'NewsLetter' => 'Pangpahayagang kasulatan',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Linggo-linggo',
        'Monthly' => 'Buwan-buwan',
        'Quarterly' => 'Minsan sa tatlong buwan',
        'Annually' => 'Taon-taun',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Enero',
        '2' => 'Pebrero',
        '3' => 'Marso',
        '4' => 'Abril',
        '5' => 'Mayo',
        '6' => 'Hunyo',
        '7' => 'Hulyo',
        '8' => 'Agosto',
        '9' => 'Septiyembre',
        '10' => 'Oktobre',
        '11' => 'Nobiyembre',
        '12' => 'Disyembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Enero',
        '2' => 'Pebrero',
        '3' => 'Marso',
        '4' => 'Abril',
        '5' => 'Mayo',
        '6' => 'Hunyo',
        '7' => 'Hulyo',
        '8' => 'Agosto',
        '9' => 'Septiyembre',
        '10' => 'Oktobre',
        '11' => 'Nobiyembre',
        '12' => 'Disyembre',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Linggo',
        '2' => 'Lunes',
        '3' => 'Martes',
        '4' => 'Miyerkules',
        '5' => 'Huwebes',
        '6' => 'Biyernes',
        '7' => 'Sabado',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Linggo',
        '2' => 'Lunes',
        '3' => 'Martes',
        '4' => 'Miyerkules',
        '5' => 'Huwebes',
        '6' => 'Biyernes',
        '7' => 'Sabado',
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
        'personal' => 'Personal',
        'group' => 'Grupo',
        'bounce' => 'Bounce',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'Basic Auth',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'Basic Auth',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'Personal',
        'group' => 'Grupo',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personal',
        'group' => 'Grupo',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personal',
        'group' => 'Grupo',
        'system' => 'Sistema',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Gawing aktibo',
        'Inactive' => 'Huwag gawing aktibo',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Naipadala',
        'archived' => 'Naka-archive',
        'draft' => 'Naka-draft',
        'inbound' => 'Papasok',
        'campaign' => 'Kampanya',
    ),
    'dom_email_status' => array(
        'archived' => 'Naka-archive',
        'closed' => 'Sarado',
        'draft' => 'Nasa draft',
        'read' => 'Basahin',
        'replied' => 'Sumagot',
        'sent' => 'Naipadala',
        'send_error' => 'Nagpadala ng pagkakamali',
        'unread' => 'Hindi binasa',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Naka-archive',
    ),

    'dom_email_server_type' => array(
        '' => '--Wala--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Wala--',
        'createcase' => 'Lumikha ng kaso',
        'bounce' => 'Talbog na paghawak',
    ),
    'dom_email_distribution' => array(
        '' => '--Wala--',
        'direct' => 'Direktang pagtakda',
        'roundRobin' => 'Ang Paikot-Robin',
        'leastBusy' => 'Masyado-Abala',
    ),
    'dom_email_errors' => array(
        1 => 'Pumili lamang ng isa sa mga gumagamit kung saan Direktang nakatalaga sa mga item.',
        2 => 'Kailangan mong italaga Lamang ang na Suri na mga item kung saan Direkta Nakatalaga sa mga Item.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Oo',
        'bool_false' => 'Hindi',
    ),
    'dom_int_bool' => array(
        1 => 'Oo',
        0 => 'Hindi',
    ),
    'dom_switch_bool' => array(
        'on' => 'Oo',
        'off' => 'Hindi',
        '' => 'Hindi',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM Email ng Kleyente',
        'mailto' => 'Panlabas na email ng kleyente',
    ),

    'dom_editor_type' => array(
        'none' => 'Ang direktang HTML',
        'tinymce' => 'Ang katitingMCE',
        'mozaik' => 'Ang Mosaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Depekto ang pormat ng email',
        'html' => 'Ang HTML Email',
        'plain' => 'Ang malinaw na teksto sa email',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Ang nakalipas na tumatakbong oras, Ay hindi naisagawa',
        'ready' => 'Handa',
        'in progress' => 'Nasa pag-unlad',
        'failed' => 'Pumalya',
        'completed' => 'Nakumpleto',
        'no curl' => 'Hindi tumatakbo: Walang cURL na magagamit',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Gawing aktibo',
        'Inactive' => 'Huwag gawing aktibo',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Ang mga minuto',
        'hour' => 'Ang mga oras',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Ang pamimili',
        'Knowledege Base' => 'Base sa kaalaman',
        'Sales' => 'Ang mga benta',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Naka-archive',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Pinsala sa pamimili',
        'Product Brochures' => 'Mga Brochure ng Produkto',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Gawing aktibo',
        'Draft' => 'Naka-draft',
        'FAQ' => 'FAQ',
        'Expired' => 'Nag-expire na',
        'Under Review' => 'Nasa ilalim ng pagsusuri',
        'Pending' => 'Nakabinbin',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Ang pagsasama ng sulat',
        'eula' => 'Ang EULA',
        'nda' => 'Ang NDA',
        'license' => 'Ang linsensya ng kasunduan',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Tanggapin',
        'decline' => 'Tanggihan',
        'tentative' => 'Pansamantala',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Tinanggap',
        'decline' => 'Tinanggihan',
        'tentative' => 'Pansamantala',
        'none' => 'Wala',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => 'Labing lima',
        '30' => 'Tatlumpo',
        '45' => 'Apatnaput-lima',
    ),
    'repeat_type_dom' => array(
        '' => 'Wala',
        'Daily' => 'Arawaraw',
        'Weekly' => 'Linggo-linggo',
        'Monthly' => 'Buwan-buwan',
        'Yearly' => 'Taon-taon',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => '(mga) araw',
        'Weekly' => 'ang (mga) linggo',
        'Monthly' => 'ang (mga) buwan',
        'Yearly' => 'ang (mga) taon',
    ),

    'duration_dom' => array(
        '' => 'Wala',
        '900' => 'Labing-limang minuto',
        '1800' => 'Tatlumpong minuto',
        '2700' => 'Apat naput limang minuto',
        '3600' => 'Isang oras',
        '5400' => 'isat limang minuto na oras',
        '7200' => 'dalawang oras',
        '10800' => 'tatlong oras',
        '21600' => 'anim na oras',
        '86400' => 'Isang araw',
        '172800' => 'dalawang araw',
        '259200' => 'tatlong araw',
        '604800' => 'Isang linggo',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Naka-default',
        'seed' => 'Buto',
        'exempt_domain' => 'Listahan ng Pagpigil - Ayon sa Domain',
        'exempt_address' => 'Listahan ng Pagpigil - Sa pamamagitan ng Email Address',
        'exempt' => 'Listahan ng Pagpigil - Ayon sa Id',
        'test' => 'Ang pagsusulit',
    ),

    'email_settings_num_dom' => array(
        '10' => 'Sampu',
        '20' => 'Bente',
        '50' => 'Limampu',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Gawing aktibo',
        'inactive' => 'Huwag gawing aktibo',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Ang Mensaheng pinadala/tinangka',
        'send error' => 'Tumalbog ang mga mensahe, sa iba',
        'invalid email' => 'Tumalbog ang mga mensahe, hindi wastong email',
        'link' => 'Pindutin gamit ang Link',
        'viewed' => 'Pagtingin ng mensahe',
        'removed' => 'Piniling palabasin',
        'lead' => 'Pamunuan ang Ginawa',
        'contact' => 'Ang gumawa ng mga Kontak',
        'blocked' => 'Pinigilan sa pamamagitan ng address o domain',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Ang mga koneksyon',
        'Users' => 'Ang mga gumagamit',
        'Prospects' => 'Ang mga pinapatamaan',
        'Leads' => 'Pamunuan',
        'Accounts' => 'Ang mga Akawnt',
    ),
    'merge_operators_dom' => array(
        'like' => 'Mga nilalaman',
        'exact' => 'Eksakto',
        'start' => 'Nagsisimula Sasa',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Oo',
        'false' => 'Hindi',
        'required' => 'Ang kinakailangan',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Huwag Paganahin',
        1 => 'Paganahin',
        2 => 'Salain',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Mataas',
        'medium' => 'Katamtaman',
        'low' => 'Mababa',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Hindi pag nagsisimula',
        'inprogress' => 'Nasa pag-unlad',
        'completed' => 'Nakumpleto',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Ang alamat ay pahabain',
        'collapselegend' => 'Ang alamat ay bumagsak',
        'clickfordrilldown' => 'Pindutin para butasin paibaba',
        'detailview' => 'Para sa mga detalye...',
        'piechart' => 'Ang pie tsart',
        'groupchart' => 'Ang tsart ng grupo',
        'stackedchart' => 'I-stack ang Tsart',
        'barchart' => 'Ang bar tsart',
        'horizontalbarchart' => 'Pahigang bar tsart',
        'linechart' => 'Ang tsart na linya',
        'noData' => 'Hindi magagamit ang datos',
        'print' => 'I-print',
        'pieWedgeName' => 'mga seksyon',
    ),
    'release_status_dom' => array(
        'Active' => 'Gawing aktibo',
        'Inactive' => 'Huwag gawing aktibo',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Nag-iisang panlipi (&#39;)',
        '"' => 'Dobleng panlipi (&#34;)',
        '' => 'Wala',
        'other' => 'Iba pa:',
    ),
    'import_delimeter_options' => array(
        ',' => 'kuwait',
        ';' => ';',
        '\t' => '\t',
        '.' => 'tuldok.',
        ':' => 'Tutuldok:',
        '|' => '|',
        'other' => 'Iba pa:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Bagong Window',
        '_self' => 'Parehang bintana',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Huwag awto-refresh',
        '30' => 'Sa kada tatlumpong segundo',
        '60' => 'Sa kada isang minuto',
        '180' => 'Sa kada tatlong minuto',
        '300' => 'Sa kada limang minuto',
        '600' => 'Sa kada sampung minuto',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Hindi kailanman',
        '30' => 'Sa kada tatlumpong segundo',
        '60' => 'Sa kada isang minuto',
        '180' => 'Sa kada tatlong minuto',
        '300' => 'Sa kada limang minuto',
        '600' => 'Sa kada sampung minuto',
    ),
    'date_range_search_dom' => array(
        '=' => 'Katumbas',
        'not_equal' => 'Hindi bukas',
        'greater_than' => 'Pagkatapos',
        'less_than' => 'Bago',
        'last_7_days' => 'Ang huling pitong araw',
        'next_7_days' => 'Ang susunod na pitong araw',
        'last_30_days' => 'Ang Huling Tatlumpong Araw',
        'next_30_days' => 'Ang Susunod na Tatlumpong Araw',
        'last_month' => 'Ang huling buwan',
        'this_month' => 'Ngayong Buwan',
        'next_month' => 'Sa susunod na Buwan',
        'last_year' => 'Ang Huling Taon',
        'this_year' => 'Ngayong Taon',
        'next_year' => 'Sa Susunod na Taon',
        'between' => 'Ay Nasa pagitan',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Katumbas',
        'not_equal' => 'Ay hindi katumbas ng',
        'greater_than' => 'Mahigit sa',
        'greater_than_equals' => 'Mas malaki kaysa sa o katumbas ng',
        'less_than' => 'Mas mababa sa',
        'less_than_equals' => 'Mas Mababa sa o kaya ay Katumbas Sa',
        'between' => 'Ay Nasa pagitan',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopyahin',
        'move' => 'Ilipat',
        'donothing' => 'Walang gawin',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Results',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'Ang code ng email:',
    'LBL_SEND' => 'Ipadala',
    'LBL_LOGOUT' => 'Mag-Logout',
    'LBL_TOUR_NEXT' => 'Ang susunod',
    'LBL_TOUR_SKIP' => 'Laktawan',
    'LBL_TOUR_BACK' => 'Bumalik',
    'LBL_TOUR_TAKE_TOUR' => 'Kunin ng paglalakbay',
    'LBL_MOREDETAIL' => 'Marami pang detalye' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Baguhin ang Inline' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Ang Tanawin' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Salain' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Magdagdag' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Magdagdag ng Email Address' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Itago/Ipakita' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Burahin' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Linisin' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'ang vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Alisin' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Tanggalin ang Email Address' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Ang Opt ay Nasa labas',
    'LBL_ID_FF_INVALID' => 'Gawing hindi wasto',
    'LBL_ADD' => 'Magdagdag' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo ng kompanya' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Ang mga konektor sa mga popup',
    'LBL_CLOSEINLINE' => 'Sarado',
    'LBL_VIEWINLINE' => 'Ang Tanawin',
    'LBL_INFOINLINE' => 'Impormasyon',
    'LBL_PRINT' => 'I-print',
    'LBL_HELP' => 'Saklolo',
    'LBL_ID_FF_SELECT' => 'Piliin',
    'DEFAULT' => 'Saligan',
    'LBL_SORT' => 'Pagkakasunod',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Paganahin sa SMTP higit sa SSL at TLS?',
    'LBL_NO_ACTION' => 'Dito ay walang aksyon ayon sa kanyang pangalan: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Dito ay walang mga aksyon na magagamit.',
    'LBL_NO_DATA' => 'Walang datus',

    'LBL_ROUTING_FLAGGED' => 'watawat na tinakda',
    'LBL_ROUTING_TO' => 'sa',
    'LBL_ROUTING_TO_ADDRESS' => 'sa address',
    'LBL_ROUTING_WITH_TEMPLATE' => 'mayroong template',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Itong talaan ay kasalukuyang naglalaman ng mga halaga sa mga patlang ng Opisina ng Telepono at Address. Upang i-overwrite ang mga halagang ito sa sumusunod na Phone Office at Address ng Account na iyong pinili, i-klik ang "OK". Upang panatilihin ang mga kasalukuyang halaga, i-klik ang "Kanselahin".',
    'LBL_DROP_HERE' => '[Ibagsak Dito]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Prefill Gmail&#153; Defaults',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Ang Pangalan',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Ang paparating na sulat ng serber ng mga katangian',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Ang password ng SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Ang port ng SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Ang serber ng SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Ang username ng SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Naka-default',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Babala: Nawawala ang username at password para sa paparating ng account para sa sulat.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Itakda ang mga account ng sulat para makita ang mga paparating mula sa iyong mga email account.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Maglaan ng impormasyon ng serber para sa SMTP na sulat para magamit sa papalabas na email sa sulat ng mga account.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Tapos na',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Linisin',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Para sa:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Ang email na padalahan',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Salain',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Ang Pangalan',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Walang nakitang mga address',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'I-seyb at Idagdag sa libro ng padalahan',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Pumili ng email ng mga taga tanggap',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Libro ng padalahan',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Babala! Ang papalabas na account na iyong sinusubukang burahin ay kasama sa umiiral na papasok na account. Ikaw ba ay sigurado na gusto mong mag patuloy?',
    'LBL_EMAIL_ADDRESSES' => 'Ang Email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Ang email na padalahan',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Unable to confirm email address',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'I-angkat sa SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Takdang-aralin',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Ilakip',
    'LBL_EMAIL_ATTACHMENT' => 'Ilakip',
    'LBL_EMAIL_ATTACHMENTS' => 'Mula sa lokal an sistema',
    'LBL_EMAIL_ATTACHMENTS2' => 'Mula sa mga dokumento ng SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Ang mga nakalakip na template',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Payl',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Ang Dokumento',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'I-cancel',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Nagpapakita ng buo',
    'LBL_EMAIL_CHECK' => 'Suriin ang lahat',
    'LBL_EMAIL_CHECKING_NEW' => 'I-tsek para sa bagong mensahe',
    'LBL_EMAIL_CHECKING_DESC' => 'Paki-usap sa Isang pagkakataon...<br><br>una itong suriin para sa mail akawnt, maaaring tumagal ito ng ilang oras.',
    'LBL_EMAIL_CLOSE' => 'Sarado',
    'LBL_EMAIL_COFFEE_BREAK' => 'I-tsek ang bagong Email. <br><br>ang mga malalaking akawnt ay maari gumagamit ng dami ng oras.',

    'LBL_EMAIL_COMPOSE' => 'Ang Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Pakiusap ipasok ang (mga) tumanggap para dito sa email.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Ang katawan nitong email ay walang laman. Mag-padala ng isa?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Ang email na ito ay walang paksa. Ipapadala mo na ba?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(walang paksa)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Pakiusap ipasok ang wastong email address para sa, CC at BCC sa mga field',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Waksiin ang email na ito?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Sigurado ka gusto mong burahin itong pirma?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Ipasa ang Email',

    'LBL_EMAIL_CREATE_NEW' => 'Lumikha sa pag-save',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Madami',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Walang laman',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Ang petsa ay ipinadala ayon sa nagpadala',
    'LBL_EMAIL_DATE_TODAY' => 'Ngayon',
    'LBL_EMAIL_DELETE' => 'Burahin',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Burahin ang mga napiling minsahe?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Ang mesahe binura at naging matagumpay.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Binurang mensahe',
    'LBL_EMAIL_DETAILS' => 'Detalye',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Tanging ang unang address ang kailangan na gamitin sa nagtatrabaho kasama ang mga makikipag-ugnayan.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Walang basura',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Pagtatanggal ng papalabas na paghihiwa-hiwalayin',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Naglilinis sa mga payl ng cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Walang mga email na pinapakita.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Walang email address ang nakalagay.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Dapat lalagyan ng pangalan ang natatangi at saka walang laman. Pakiusap sunukan ult.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Hindi pwedeng mabura ang polder. Alin-man sa polder o mga email ng bata o sa mensahe sa kahon na naguunay dito.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ang polder na inilaan ay hindi matukoy mula sa konteksto. Subukan muli.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Pakiusap suriin ang iyong mga pagtatakda.',
    'LBL_EMAIL_ERROR_DESC' => 'Mga error na nadiskubre: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Hindi ka magkakaroon ng daan para dito sa pook. Kontakin mo ung pook pamahalaan upang makuha ang daan.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM Lalagyan ng mga pangalan maging kakaiba.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Pakiusap maghanap ng ilan ilagay sa pamantayan.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'May maling naganap',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Ang Mensahe ay Tinanggal mula sa Serber',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Maging ang mensahe ay tinanggal mula sa Serber o kaya ay nilipat sa ibang polder',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Nabigo ang koneksyon sa serber ng mensahe. Pakiusap kontakin ang iyong Tagapangasiwa',
    'LBL_EMAIL_ERROR_MOVE' => 'Nililipat ang email sa pagitan ng mga serber/o kaya ang mga akawnt ng mensahe ay hindi suportado ngayong oras na ito.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Ang Mali ay Tanggalin',
    'LBL_EMAIL_ERROR_NAME' => 'Ang pangalan ay kinakailangan.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Mula sa Adres ay kinakailangan. Pakiusap ilagaya ng balidong email adres.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Pakiusap maglaan ng payl.',
    'LBL_EMAIL_ERROR_SERVER' => 'Ang adres ng serber ng mensahe ay kinakailangan.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Ang akawnt ng mensahel ay hindi siguro na i-seyb.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'May maling naganap habang nakikipagkonekta kasama ang serber ng sulat.',
    'LBL_EMAIL_ERROR_USER' => 'Ang pangalan sa pag login ay kailangan.',
    'LBL_EMAIL_ERROR_PORT' => 'Ang serber ng sulat ay kailangan.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Ang serber ng protokol ay kailangan.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Ang pagmamanman sa polder ay kailangan.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Ang polder na basuharan ay kailangan.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ang impormasyon ito ay hindi pwede',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Tinutukoy ang serber walang paparating na sulat.',
    'LBL_EMAIL_ERROR_SENDING' => 'Maling pagpapadala ng email. Pakiusap kontakin ang iyong tagapangasiwa para sa tulong.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Ang mga polder',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Magdagdag',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Magdagdag ng bagong polder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Baguhin ang pangalan ng polder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'I-seyb',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Idagdag ang polder na ito sa',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ang polder na ito ay hindi mapalitan',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Ikaw ba ay sigurado na gusto mong burahin ang polder na ito?\nAng prosesong ito ay hindi na uulitin.\nAng pagbubura ng polder ay ilalagaslas ang mga natitirang pang mga polder.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Ang bagong pangalan ng folder',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Pakiusap pumili ng polder bago isagawa ang aksyong ito.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Ang namamahal sa polder',

    'LBL_EMAIL_FORWARD' => 'Magpatuloy',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Nagdadownlud [[count]] ng [[total]] mga email',
    'LBL_EMAIL_FROM' => 'Mula sa',
    'LBL_EMAIL_GROUP' => 'grupo',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupo',
    'LBL_EMAIL_HOME_FOLDER' => 'Ang Tahanan',
    'LBL_EMAIL_IE_DELETE' => 'Nagbubura ng mga email akwant',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Binubura ang mga lagda',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Ikaw ba ay sigurado na gusto mong burahin ang akwant ng sulat na ito?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Matagumpay ang pagbubura.',
    'LBL_EMAIL_IE_SAVE' => 'Sini seyb ang impormasyon ng akwant ng sulat',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Pag-aangkat ng email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Iangakt papunta sa SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Ang mga seting ng pag-angkat',
    'LBL_EMAIL_INVALID' => 'Hindi wasto',
    'LBL_EMAIL_LOADING' => 'Nag-lo-load...',
    'LBL_EMAIL_MARK' => 'Marka',
    'LBL_EMAIL_MARK_FLAGGED' => 'Bilang naglagyan ng palantandaan',
    'LBL_EMAIL_MARK_READ' => 'Bilang nagbabasa',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Bilang hindi nalagyan ng palatandaan',
    'LBL_EMAIL_MARK_UNREAD' => 'Bilang hindi nagbabasa',
    'LBL_EMAIL_ASSIGN_TO' => 'Itinakda kay',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Gumawa ng polder',
    'LBL_EMAIL_MENU_COMPOSE' => 'Nilikha ni',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Burahin ang polder',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Walang laman na basurahan',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Pagaakma',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Linisin ang mga payl kaki',
    'LBL_EMAIL_MENU_REMOVE' => 'Alisin',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Baguhin ang pangalan ng polder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Pagbabago ng Pangalan ng Polder',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Pakiusap gumawa ng pagpipilian bago subukan ang operasyong ito.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Lumikha ng Polder para sa (remote o kaya sa SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Alisin ang Polder ng (remote o kaya sa SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tanggalin ang lahat ng nalaman ng basurahan ng polder para sa iyong mga akawnt ng mensahe',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Markahan ang mga email(s) na nabasa',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Markahan ang (mga) email na ito ng hindi nakabandera',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Lumikha ng pilder para sa (remote o kaya sa SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'ang mga mensahe',

    'LBL_EMAIL_ML_NAME' => 'Nakalistang pangalan',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Mga nakalistang address',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Magagamit ang listahan ng mga address',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Pindutin</b>upang pumili ng mga maramihan<br />(Mac gumamit ng gumamit<b>CMD-Pindutin</b>)',

    'LBL_EMAIL_NO' => 'Hindi',
    'LBL_EMAIL_NOT_SENT' => 'Mga pinadalang minsahe.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Isang sandali pakiusap...',
    'LBL_EMAIL_OPEN_ALL' => 'Nakabukas ang mga maramihang mensahe',
    'LBL_EMAIL_OPTIONS' => 'Mga pagpipilian',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Mabilisang Pagsulat',
    'LBL_EMAIL_OPT_OUT' => 'Piniling palabasin',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Pumiling Lumabas at Imbalido',
    'LBL_EMAIL_PERFORMING_TASK' => 'Ang Gawain ay Isagawa',
    'LBL_EMAIL_PRIMARY' => 'Pangunahin',
    'LBL_EMAIL_PRINT' => 'I-print',

    'LBL_EMAIL_QC_BUGS' => 'Ang mali',
    'LBL_EMAIL_QC_CASES' => 'Ang kaso',
    'LBL_EMAIL_QC_LEADS' => 'Pamunuan',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontak',
    'LBL_EMAIL_QC_TASKS' => 'Ang Gawain',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Ang oportunidad',
    'LBL_EMAIL_QUICK_CREATE' => 'Mabilisang Paglikha',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Ang mga polder ay muling itatayo',
    'LBL_EMAIL_RELATE_TO' => 'Releyt',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Makikita ang mga relasyon',
    'LBL_EMAIL_RECORD' => 'Email rekord',
    'LBL_EMAIL_REMOVE' => 'Alisin',
    'LBL_EMAIL_REPLY' => 'Replay',
    'LBL_EMAIL_REPLY_ALL' => 'Replayan lahat',
    'LBL_EMAIL_REPLY_TO' => 'Pagtugon-kay',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Pagkuha ng mensahe',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Pagkuha ng Email sa talaan',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Pakiusap ilagay ang nag iisang email rekord',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Ibalik sa pinaka-unang modyul?',
    'LBL_EMAIL_REVERT' => 'Maibalik',
    'LBL_EMAIL_RELATE_EMAIL' => 'Releyt Email',

    'LBL_EMAIL_RULES_TITLE' => 'Ang panuntunan sa polder',

    'LBL_EMAIL_SAVE' => 'I-seyb',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'I-save at I-reply',
    'LBL_EMAIL_SAVE_DRAFT' => 'I-save ang Draft',
    'LBL_EMAIL_DRAFT_SAVED' => 'Ang plano ay sini-seyb',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Petsa mula sa',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Ang petsa hanggang',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Walang resulta na tumugma sa iyong pamantayan ng paghahanap.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Ang resulta ng paghahanap',

    'LBL_EMAIL_SELECT' => 'Piliin',

    'LBL_EMAIL_SEND' => 'Ipadala',
    'LBL_EMAIL_SENDING_EMAIL' => 'Nagpapadala ng email',

    'LBL_EMAIL_SETTINGS' => 'Ang mga seting',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Ang mga akawnt ng mensahe',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Ang anyo ang linisin',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'I-tsek para sa bagong mensahe',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Mula sa padalahan',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Ang email address para sa notipikasyon ng pagsubok:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Mula sa pangalan',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Sumagot sa padalahan',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Iakma ang lahat ng akwant ng mensahe',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Ang email ay pinadala sa tinutukot na email address gamit ang ibinigay na paparating na setting ng mensahe. Pakiusap i-tsek para makita kung ang email ay natanggap para berepikahin kung ang setting ay tama.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Ang SMTP tingnan ng buo at mag-log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Isagawa ang buong pagaakma?\nAng malaking akwan ng mensahe ay magtatagal ng ilang mag minuto.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Pindutin ang paglipat na susi o kaya ang kontrol para pumili ng maramihang mga polder.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Pangkalahatan',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Gumawa ng mga polder ng grupo',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Baguhin ang polder ng grupo',

    'LBL_EMAIL_SETTINGS_NAME' => 'Ang pangalan ng akwant ng mensahe',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Pumili ng numero ng mga mensahe kada pahina duon sa inbaks. Ang setting ay kailangang ang pahina ay marefresh ayun sa pagkakasundo para makuha ang epekto.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Ang pagpapanumbalik ng akwant ng mensahe',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Nai-save na ang mga setting.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Magpadala lamang ng mga email na plain text',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Mga Email kada Pahina',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Ang mga Biswal na pagtatakda',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Mga Preperensiya',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Ang magagamit ng mga gumagamit ng polder',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Ang napili na mail server para sa mail akawnt na iyong ginagamit ay hindi wasto. Suriin ang mga pagtatakda o pumili ng ibang mail server para sa mail akawnt.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Ang papalabas na sulat paghiwalayin at hindi isinaayos para madala sa mga email. Pakiusap i-configure ang papalabas na sulat paghiwalayin o ilagay sa papalabas na sulat para sa sulat ng akawnt na ikaw ay gumamit ng mga natagpuang sulat sa akawnt.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Kakulangang Pirma',
    'LBL_EMAIL_SIGNATURES' => 'Mga pirma',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Palitan',
    'LBL_SMTPTYPE_OTHER' => 'Iba pa',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Ang remote ng mga folder ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM Folders]',
    'LBL_EMAIL_SUBJECT' => 'Paksa',
    'LBL_EMAIL_SUCCESS' => 'Pagtatagumpay',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM Folder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Ang katawan ng Email template ay walang laman',
    'LBL_EMAIL_TEMPLATES' => 'Mga template',
    'LBL_EMAIL_TO' => 'Para',
    'LBL_EMAIL_VIEW' => 'Ang Tanawin',
    'LBL_EMAIL_VIEW_HEADERS' => 'Ipikita ang mga Header',
    'LBL_EMAIL_VIEW_RAW' => 'Display Raw Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ang Tampok ay hindi supportado kailangan gamitin na may POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Naka-default na teksto ng link.',
    'LBL_EMAIL_YES' => 'Oo',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Sinubukang padala ang Email',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Sinubukan ipadala sa Email',
    'LBL_EMAIL_MESSAGE_NO' => 'Ilang mensahe.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Lumipas ang pag angkat',
    'LBL_EMAIL_IMPORT_FAIL' => 'Ang angkat ay nabigo dahil sa alinmang mensahe na-import na o tinanggal mula sa pumutol',

    'LBL_LINK_NONE' => 'Wala',
    'LBL_LINK_ALL' => 'Lahat',
    'LBL_LINK_RECORDS' => 'Mga nakatala',
    'LBL_LINK_SELECT' => 'Piliin',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Kumpirmahin',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Gusto mo ba isara itong #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Imbalidong Ekstensyon ng Payl',

    'ERR_AJAX_LOAD' => 'May maling nagawa:',
    'ERR_AJAX_LOAD_FAILURE' => 'Nagkaroon ng error sa pag proseso ng iyong hiling, pakiusap subukan muli sa ibang pagkakataon.',
    'ERR_AJAX_LOAD_FOOTER' => 'Kung eto ay error sa mga presist, pakiusap mayroon kayo pamahalaan na baldado Ajax para etong modyul',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Ang desimal separator ay hindi gumamit sa parehas na katangian para sa mga libong separator.\\n\\n Pakiusap pakibago ang mga ugali.',
    'ERR_DELETE_RECORD' => 'Ang rekord na numero ay dapat na ispecified para mabura sa pagdikit.',
    'ERR_EXPORT_DISABLED' => 'Hindi Pinagana ang Pag-luluwas.',
    'ERR_EXPORT_TYPE' => 'Kamalian sa pag-luluwas ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'hindi wasto ang address.',
    'ERR_INVALID_FILE_REFERENCE' => 'Imbalidong Reperensiya sa Payl',
    'ERR_NO_HEADER_ID' => 'Etong katangian ay wala dito sa paksa.',
    'ERR_NOT_ADMIN' => 'Hindi awtorisadong pag-akses sa administrasyon.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Nawawalang patlang na kinakailangan:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Imbalidong patlang na kinakailangan:',
    'ERR_INVALID_VALUE' => 'Hindi wastong Halaga:',
    'ERR_NO_SUCH_FILE' => 'Ang payl ay hindi umiiral ang systema',
    'ERR_NO_SINGLE_QUOTE' => 'Hindi maaring gamitin ang isang bahaging binanggit markahan para sa ',
    'ERR_NOTHING_SELECTED' => 'Pakiusap gumawa ng pagpili bago magpatuloy.',
    'ERR_SELF_REPORTING' => 'Ang user hindi maaaring mag-ulat sa kanyang sarili.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Walang tumugma para sa patlang: ',
    'ERR_SQS_NO_MATCH' => 'Hindi tugma',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Mangyari pakitukoy sa indeks ng \'susi\' sa atribyut na displayParams para sa depinisyong Meta-Data',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Error: Nakatalaga ang pangalan ng portal sa ibang kontak.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Ang halaga ng patlang ay hindi kompatible sa halagang presisyon',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Isang kamalian ang nangyari habang sinusubukang mag-seyb patungo sa account na pang-eksternal.',
    'ERR_NO_DB' => 'Hindi makakonekta sa database. Pakiusap sumangguni sa suitecrm.log para sa mga detalye.',
    'ERR_DB_FAIL' => 'Ang pagkabagsak ng database. Pakiusap sumangguni sa suitecrm.log para sa mga detalye.',
    'ERR_DB_VERSION' => 'Ang mga {0} Payl ng SuiteCRM ay Maaaring Lamang Gamitin Kasama ang Isang {1} na Database ng SuiteCRM.',

    'LBL_ACCOUNT' => 'Ang account',
    'LBL_ACCOUNTS' => 'Ang mga Akawnt',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Tignan ang buod',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Tignan ang buod',
    'LBL_ADD_BUTTON' => 'Magdagdag',
    'LBL_ADD_DOCUMENT' => 'Idagdag sa Dokumento',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Isama sa target na listahan',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Magdagdag ng mga Kontak sa Listahan ng Target',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Pindutin para isara',
    'LBL_ADDITIONAL_DETAILS' => 'Mga dagdag detalye',
    'LBL_ADMIN' => 'Pangangasiwa',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Sinupan',
    'LBL_ASSIGNED_TO_USER' => 'Nakalagay para sa Gagamit',
    'LBL_ASSIGNED_TO' => 'Ang Itinalaga kay:',
    'LBL_BACK' => 'Bumalik',
    'LBL_BILLING_ADDRESS' => 'Pagsingil sa Address',
    'LBL_QUICK_CREATE' => 'Create ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM-Open Source CRM',
    'LBL_BUGS' => 'Ang mga mali',
    'LBL_BY' => 'sa pamamagitan',
    'LBL_CALLS' => 'Ang mga tawag',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Magpadala ng Nakalinyang Mga Email na Pangkampanya',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Ipinasa',
    'LBL_CASE' => 'Ang kaso',
    'LBL_CASES' => 'Ang mga kaso',
    'LBL_CHANGE_PASSWORD' => 'Magpalit ng password',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Suriin ang lahat',
    'LBL_CITY' => 'Ang Syudad',
    'LBL_CLEAR_BUTTON_LABEL' => 'Linisin',
    'LBL_CLEAR_BUTTON_TITLE' => 'Linisin',
    'LBL_CLEARALL' => 'Wala lahat',
    'LBL_CLOSE_BUTTON_TITLE' => 'Sarado',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Isarado at gumawa ng bago',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Isarado at gumawa ng bago',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Buksan ang mga bagay:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Sumulat ng Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Sumulat ng Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Oo',
    'LBL_SEARCH_DROPDOWN_NO' => 'Hindi',
    'LBL_CONTACT_LIST' => 'Listahan ng kontak',
    'LBL_CONTACT' => 'Kontak',
    'LBL_CONTACTS' => 'Ang mga koneksyon',
    'LBL_CONTRACT' => 'Kontrata',
    'LBL_CONTRACTS' => 'Mga kontrata',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_CREATE_BUTTON_LABEL' => 'Nilikha',
    'LBL_CREATED_BY_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_CREATED_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_CREATED' => 'Nilikha sa pamamagitan ng',
    'LBL_CURRENT_USER_FILTER' => 'Ang mga item:',
    'LBL_CURRENCY' => 'Ang Halaga:',
    'LBL_DOCUMENTS' => 'Ang mga dokumento',
    'LBL_DATE_ENTERED' => 'Ang Petsa ng Pagkagawa:',
    'LBL_DATE_MODIFIED' => 'Huling binago:',
    'LBL_EDIT_BUTTON' => 'I-edit',
    'LBL_DUPLICATE_BUTTON' => 'Kopyahin',
    'LBL_DELETE_BUTTON' => 'Burahin',
    'LBL_DELETE' => 'Burahin',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_DIRECT_REPORTS' => 'Mga direktang ulat',
    'LBL_DONE_BUTTON_LABEL' => 'Tapos na',
    'LBL_DONE_BUTTON_TITLE' => 'Tapos na',
    'LBL_FAVORITES' => 'Mga paborito',
    'LBL_VCARD' => 'ang vCard',
    'LBL_EMPTY_VCARD' => 'Pakiusap ilagay ang vCard file',
    'LBL_EMPTY_REQUIRED_VCARD' => 'ang vCard ay wala lahat ng kailangan sa mga field para sa module na ito. Pakiusap suriin sa suitecrm.log para sa iba pang detalye.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Ang na-upload na file ay lumagpas sa limitasyon na laki ng 30000 bytes na tinukoy sa form na HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Nagkaroon ng error sa pag upload ng vCard file. Pakiusap suriin sa suitecrm.log para sa iba pang detalye.',
    'LBL_IMPORT_VCARD' => 'Ang vCard ay i-angkat:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'I-import ang vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'I-import ang vCard',
    'LBL_VIEW_BUTTON' => 'Ang Tanawin',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email as PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email as PDF',
    'LBL_EMAILS' => 'Ang mga email',
    'LBL_EMPLOYEES' => 'Ang mga empleyado',
    'LBL_ENTER_DATE' => 'Ang petsa ay ipasok',
    'LBL_EXPORT' => 'I-export',
    'LBL_FAVORITES_FILTER' => 'Mga paborito ko:',
    'LBL_GO_BUTTON_LABEL' => 'Pumunta',
    'LBL_HIDE' => 'Itago',
    'LBL_ID' => 'Ang ID',
    'LBL_IMPORT' => 'Angkat',
    'LBL_IMPORT_STARTED' => 'I-angkat ang Nasimulan: ',
    'LBL_LAST_VIEWED' => 'MakaIlan lang Nakita',
    'LBL_LEADS' => 'Pamunuan',
    'LBL_LESS' => 'Ang mas mababa',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_CAMPAIGNS' => 'Ang mga kampanya',
    'LBL_CAMPAIGNLOG' => 'Ang talaan ng mga kampanya',
    'LBL_CAMPAIGN_CONTACT' => 'Ang mga kampanya',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Wala',
    'LBL_THEME' => 'Ang tema:',
    'LBL_FOUND_IN_RELEASE' => 'Pagpapalaya na Itatag',
    'LBL_FIXED_IN_RELEASE' => 'Naayos Sa Pagpakawala',
    'LBL_LIST_ACCOUNT_NAME' => 'Ang Pangalan ng akawnt',
    'LBL_LIST_ASSIGNED_USER' => 'Ang Tagagamit',
    'LBL_LIST_CONTACT_NAME' => 'Kontak na Pangalan',
    'LBL_LIST_CONTACT_ROLE' => 'Kontak ng Tungkulin',
    'LBL_LIST_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_LIST_EMAIL' => 'Ang Email',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_OF' => 'ng',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_RELATED_TO' => 'Para sa kaugnayan',
    'LBL_LIST_USER_NAME' => 'Gamit na Pangalan',
    'LBL_LISTVIEW_NO_SELECTED' => 'Pakiusap pumilli ng hindi bababa sa isang rekord para magpatuloy.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Pakiusap pumili ng hindi bababa sa pangalawang rekord para magpatuloy.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Mga napiling rekord',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Napagpilian: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Extraordinaire na Kodigong Monkey',
    'LBL_CANCEL' => 'I-cancel',
    'LBL_VERIFY' => 'Ang Patunayan',
    'LBL_RESEND' => 'Muling ipadala',
    'LBL_PROFILE' => 'Propyl',
    'LBL_MAILMERGE' => 'Ang pagsasama ng sulat',
    'LBL_MASS_UPDATE' => 'Maramihang Updeyt',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Ang mga field ay wala ng magagamit para sa operasyon ng Mass Update',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Puniling lumabas sa Primaryong Email',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Piniling pumasok sa Primaryong Email',
    'LBL_MEETINGS' => 'Ang mga pagpupulong',
    'LBL_MEETING_GO_BACK' => 'Bumalik sa meeting',
    'LBL_MEMBERS' => 'Ang mga myembro',
    'LBL_MEMBER_OF' => 'Myembro ng',
    'LBL_MODIFIED_BY_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_MODIFIED_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_MORE' => 'Higit pa',
    'LBL_MY_ACCOUNT' => 'Ang mga setting',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Nilikha',
    'LBL_NEW_BUTTON_TITLE' => 'Nilikha',
    'LBL_NEXT_BUTTON_LABEL' => 'Ang susunod',
    'LBL_NONE' => '--Wala--',
    'LBL_NOTES' => 'Ang mga tala',
    'LBL_OPPORTUNITIES' => 'Ang mga pagkakataon',
    'LBL_OPPORTUNITY_NAME' => 'Pangalan ng Pagkakataon',
    'LBL_OPPORTUNITY' => 'Ang oportunidad',
    'LBL_OR' => 'OR',
    'LBL_PANEL_OVERVIEW' => 'Sa taas ng tanawin',
    'LBL_PANEL_ASSIGNMENT' => 'Ang IBA PA',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Uri ng magulang',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postal kowd:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pangunahing Address sa Lungsod:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Ang Pangunahing Address sa Bansa:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Postal Code ng Pangunahing Tirahan:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado ng Pangunahing Tirahan:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ang Dalawang Kalye ng Pangunahing Tirahan:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ang Pangunahing Address Kalye 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ang pangunahing Address sa Kalye:',
    'LBL_PRIMARY_ADDRESS' => 'Pangunahing address:',

    'LBL_PROSPECTS' => 'Ang mga hinahanap',
    'LBL_PRODUCTS' => 'Ang mga produkto',
    'LBL_PROJECT_TASKS' => 'Ang mga gawain sa proyekto',
    'LBL_PROJECTS' => 'Ang mga proyekto',
    'LBL_QUOTES' => 'Mga panipi',

    'LBL_RELATED' => 'Releyt',
    'LBL_RELATED_RECORDS' => 'Mga napiling rekord',
    'LBL_REMOVE' => 'Alisin',
    'LBL_REPORTS_TO' => 'Ang mga ulat',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Ang field ay pinahihiwatig ang mga kinakailangan',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Tapos na',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Buong anyo',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Buong anyo',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'I-save at Gumawa ng bago',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'I-save at Gumawa ng bago',
    'LBL_SAVE_OBJECT' => 'I-save{0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Maghanap',
    'LBL_SEARCH_BUTTON_TITLE' => 'Maghanap',
    'LBL_FILTER' => 'Salain',
    'LBL_SEARCH' => 'Maghanap',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'marami',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Ang payl ng pormat ay hindi wasto, tanging larawan ng payl ang maaaring i-upload



































',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Piliin',
    'LBL_SELECT_BUTTON_TITLE' => 'Piliin',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Mag-browse ng mga Dokumento',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Mag-browse ng mga Dokumento',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Pumili ng kontak',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Pumili ng kontak',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Pumili galing sa mga ulat',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Pumili sa mga ulat',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Pinili ng gumagamit',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Pinili ng gumagamit',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Pumili ng file',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Pumili ng file',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Pinili ng gumagamit',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Pinili ng gumagamit',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Malinaw sa Gumagamit',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Malinaw sa Gumagamit',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Pumili ng account',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Pumili ng account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Clear Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Clear Account',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Select Campaign',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Select Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Clear Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Clear Campaign',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Pumili ng kontak',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Pumili ng kontak',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ito ang mga ginagamit na mapagkukunan upang bumuo ng pahinang ito (mga query, mga file)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'ang mga segundo.',
    'LBL_SERVER_RESPONSE_TIME' => 'Panahon sa pagresponde ng serber:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Pagkakagamit sa Memorya ng Serber: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Paggamit: - module: {0} -aksyon: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Pinakamataas na Pagkakagamit sa Memorya ng Serber: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Pagpapadala sa address',
    'LBL_SHOW' => 'Ipakita',
    'LBL_STATE' => 'Estado:',
    'LBL_STATUS_UPDATED' => 'Ang iyong Estado sa gaganaping pagdaraos ay na-updeyt!',
    'LBL_STATUS' => 'Ang Kalagayan:',
    'LBL_STREET' => 'Kalye',
    'LBL_SUBJECT' => 'Paksa',

    'LBL_INBOUNDEMAIL_ID' => 'Ang paparating na email',

    'LBL_SCENARIO_SALES' => 'Ang mga benta',
    'LBL_SCENARIO_MARKETING' => 'Ang pamimili',
    'LBL_SCENARIO_FINANCE' => 'Pananalapi',
    'LBL_SCENARIO_SERVICE' => 'Ang Serbisyo',
    'LBL_SCENARIO_PROJECT' => 'Pamamahala ng proyekto',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Etong pangyayari padaliin ng mga pamamahala sa mga nagbebenta ng item',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ang sitwasyong ito ay nagpapadali sa pangangasiwa ng mga aytem na pangkalakal',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ang senaryong ito ay nagpapadali sa pangangasiwa ng mga aytem na kaugnay sa paggastos',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ang senaryong ito ay nagpapadali sa pangangasiwa ng mga aytem na kaugnay sa serbisyo',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ang senaryong ito ay nagpapadali sa pangangasiwa sa mga aytem na kaugnay sa proyeko',

    'LBL_SYNC' => 'Pagpapareho',
    'LBL_TABGROUP_ALL' => 'Lahat',
    'LBL_TABGROUP_ACTIVITIES' => 'Ang mga aktibidad',
    'LBL_TABGROUP_COLLABORATION' => 'Kolaborasyon',
    'LBL_TABGROUP_MARKETING' => 'Ang pamimili',
    'LBL_TABGROUP_OTHER' => 'Iba pa',
    'LBL_TABGROUP_SALES' => 'Ang mga benta',
    'LBL_TABGROUP_SUPPORT' => 'Suporta',
    'LBL_TASKS' => 'Ang mga gawain',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Email na Nasinup',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Email na Nasinup',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Hindi nabura',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Hindi nabura',
    'LBL_UNDELETE_BUTTON' => 'Hindi nabura',
    'LBL_UNDELETE' => 'Hindi nabura',
    'LBL_UNSYNC' => 'Huwag i-sync',
    'LBL_UPDATE' => 'I-upadate',
    'LBL_USER_LIST' => 'Gumamit ng Talaan',
    'LBL_USERS' => 'Ang mga gumagamit',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Sumusuri para sa umiiral na pasukan ng email...',
    'LBL_VERIFY_PORTAL_NAME' => 'Sumusuri para sa umiiral na pangalan ng portal...',
    'LBL_VIEW_IMAGE' => 'tanawin',

    'LNK_ABOUT' => 'Patungkol',
    'LNK_ADVANCED_FILTER' => 'Naunang pag Sala',
    'LNK_BASIC_FILTER' => 'Mabilis na pag sala',
    'LBL_ADVANCED_SEARCH' => 'Naunang pag Sala',
    'LBL_QUICK_FILTER' => 'Mabilis na pag sala',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Ipakita lahat',
    'LNK_CLOSE' => 'Sarado',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modipikahin ang kasalukuyang salaan',
    'LNK_SAVED_VIEWS' => 'Mga pagpipiliang mga ayos',
    'LNK_DELETE' => 'Burahin',
    'LNK_EDIT' => 'I-edit',
    'LNK_GET_LATEST' => 'Kunin ang pinakabago',
    'LNK_GET_LATEST_TOOLTIP' => 'Palitan ng pinakabagong bersyon',
    'LNK_HELP' => 'Saklolo',
    'LNK_CREATE' => 'Nilikha',
    'LNK_LIST_END' => 'Huli',
    'LNK_LIST_NEXT' => 'Ang susunod',
    'LNK_LIST_PREVIOUS' => 'Nakaraan',
    'LNK_LIST_RETURN' => 'Bumalik sa talaan',
    'LNK_LIST_START' => 'Simula',
    'LNK_LOAD_SIGNED' => 'Pirma',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Ang dokumento ilipat kasama ang pirma',
    'LNK_PRINT' => 'I-print',
    'LNK_BACKTOTOP' => 'Balik sa itaas',
    'LNK_REMOVE' => 'Alisin',
    'LNK_RESUME' => 'Ituloy',
    'LNK_VIEW_CHANGE_LOG' => 'Tingnan ang Log ng Pagbabago',

    'NTC_CLICK_BACK' => 'Pakiusap i-click ang pindutan na nasa likod ng browser at ayusin ang error.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Sigurado kaba na gusto mong burahin ang mga napiling rekord? ',
    'NTC_TEMPLATE_IS_USED' => 'Ang templeyt ay nagamit ng di bababa sa isang rekord sa email ng pangangalakal. Sigurado ka bang gusto mo itong burahin?',
    'NTC_TEMPLATES_IS_USED' => 'Ang mga sumusunod na template ay ginagamit sa email para sa mga marketing rekord.Sigurado ka ba na gusto mong tanggalin ang mga ito?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Sigurado kabang gusto mong burahin itong talaan?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Sigurado ka bang gusto mong burahin ang ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Sigurado ka bang gusto mong i-updeyt ang ',
    'NTC_DELETE_SELECTED_RECORDS' => ' napagpiliang (mga) rekord?',
    'NTC_LOGIN_MESSAGE' => 'Paki enter ang iyong login at password.',
    'NTC_NO_ITEMS_DISPLAY' => 'wala',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado kaba na gusto mo tanggaling etong relasyon? Isa sa relasyon ang aalisin. Ang rekord ay hindi kayang mabura.',
    'NTC_REQUIRED' => 'Ang field ay pinahihiwatig ang mga kinakailangan',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Walang anuman',
    'NTC_YEAR_FORMAT' => '(yyy)',
    'WARN_UNSAVED_CHANGES' => 'Ikaw ay malapit nang lumisan sa rekord nang hindi pa nagse-seyb sa anumang mga pagbabago na maaaring mong nagawa sa rekord. Sigurado ka bang gusto mong magnabiga palayo mula sa rekord na ito?',
    'ERROR_NO_RECORD' => 'May mali sa pagbabawi ng rekord. Ang rekord na ito ay maaaring nabura o maaaring ikaw ay hindi inawtorisahan na makagtingin nito.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Babala:</b> Ang bersyon ng iyong browser ay hindi na suportado o ikaw ay gumagamit ng isang hindi suportadong browser.<p></p>Ang sumusunod na mga bersyon ng browser ay inererekomenda:<p></p><ul><li>Internet Explore 10 (kompatibiliad na byu ay hindi suportado)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Babala:</b> Ang iyong browser ay nasa kompatibilidad na byu ng IE na kung saan hindi ito suportado.',
    'ERROR_TYPE_NOT_VALID' => 'Nagkamali. Ito ang klase na hindi totoo.',
    'ERROR_NO_BEAN' => 'Pumalya sa pagkuha ng sitaw.',
    'LBL_DUP_MERGE' => 'Matatagpuan ang mga Kopya ng orihinal',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Nangasiwa ang mga Suskripsyon',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Mamahala sa mga Subskripsyon para sa ',
    // Ajax status strings
    'LBL_LOADING' => 'Nag-lo-load...',
    'LBL_SEARCHING' => 'Magsaliksik...',
    'LBL_SAVING_LAYOUT' => 'Nagse-seyb sa Layout ...',
    'LBL_SAVED_LAYOUT' => 'Ang pagkakaayos ay sini-seyb.',
    'LBL_SAVED' => 'I-save',
    'LBL_SAVING' => 'Ipon',
    'LBL_DISPLAY_COLUMNS' => 'Ilagay ang mga Haligi',
    'LBL_HIDE_COLUMNS' => 'Itago ang mga Haligi',
    'LBL_SEARCH_CRITERIA' => 'Pagsasaliksik sa Pamantayan',
    'LBL_SAVED_VIEWS' => 'I-save ang mga Natanaw',
    'LBL_PROCESSING_REQUEST' => 'Pino-proseso..',
    'LBL_REQUEST_PROCESSED' => 'Tapos na',
    'LBL_AJAX_FAILURE' => 'Pagkabigong Ajax',
    'LBL_MERGE_DUPLICATES' => 'Pagsamahin',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Ang aking mga sinala',
    'LBL_SEARCH_POPULATE_ONLY' => 'Maghanap ng isang paghahanap gamit ang porma sa paghahanap sa itaas',
    'LBL_DETAILVIEW' => 'Ipakita ang Detalye',
    'LBL_LISTVIEW' => 'Ipakita ang listahan',
    'LBL_EDITVIEW' => 'I-edit ang View',
    'LBL_BILLING_STREET' => 'Lansangan:',
    'LBL_SHIPPING_STREET' => 'Lansangan:',
    'LBL_SEARCHFORM' => 'Hanapan ng Anyo',
    'LBL_SAVED_SEARCH_ERROR' => 'Pakiusap maglagay ng pangalan para ito tingnan.',
    'LBL_DISPLAY_LOG' => 'Mag-displey sa Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistema',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Paggatol ng Sesyon',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Ang iyong sesyon ay umabot sa oras na palugit na mga dalawang minuto. Pakiusap i-seyb ang iyong trabaho.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Ang iyong sesyon ay nagtapos na.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Ang pagpupulong',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Tawagan',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Oras: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokasyon: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Deskripsyon: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Katayuan: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Kaugnay Sa: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Kaganapan',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Ang kaganapan ay nakaayos.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Ang lokasyon ay hindi pa naitakda.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Ang petsa ng pagsisimula ay hindi pa natukoy.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Walang mga resultang nahanap.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Walang mga resultang nakita... Marahil baguhin mo ang iyong kriterya sa paghahanap at subukang muli?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Waliang mga resulta para sa <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Lumikha <item1> para sa bago <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'o baguhin ang iyong kriterya sa paghahanap',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Wala kang mga rekord na pangkasalukuyang nai-seyb.<item2> o <item3> isa ngayon.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Idagdag ang aking mga paborito',
    'LBL_CREATE_CONTACT' => 'Gumawa ng Kontak',
    'LBL_CREATE_CASE' => 'Lumikha ng kaso',
    'LBL_CREATE_NOTE' => 'Gumawa ng tala',
    'LBL_CREATE_OPPORTUNITY' => ' Oportunidad ang lumikha',
    'LBL_SCHEDULE_CALL' => 'I-log ang tawag',
    'LBL_SCHEDULE_MEETING' => 'Naka-iskedyul na ang pagpupulong',
    'LBL_CREATE_TASK' => 'Gumawa ng Gawain',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Lumikha ng Porma',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'I-seyb ang Porma ng Web',
    'LBL_AVAILABLE_FIELDS' => 'Magagamit na patlang',
    'LBL_FIRST_FORM_COLUMN' => 'Halagi ng Unang Porma',
    'LBL_SECOND_FORM_COLUMN' => 'Ikalawang Haligi ng Porma',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Nawawalang patlang na kinakailangan: Naitalaga sa',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Nawawalang patlang na kinakailangan: Kampanyang kaugnay',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Lilikhaing porma ng web ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Ang pagsusumite sa pormang ito ay lilikha ng ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Idagdag lahat ang mga field',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Ireset ang lahat ng mga larangan',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Alisin ang mga larangan',
    'LBL_NEXT_BTN' => 'Ang susunod',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Lamang ang mga sumusunod na suportadong sa mga attachment ng uri ay maaaring ma-embed: JPG, PNG.',
    'LBL_TRAINING' => 'Suportahan ang forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Baguhin ang database para sa konteksto',
    'ERR_MSSQL_WARNING' => 'Babala:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error. Hanay [[file]] ay nawawala. Hindi makakalikha dahil walang nararapat na HTML ang hanay ay natagpuan.',
    'ERR_CANNOT_FIND_MODULE' => 'Mali: Modyul [module] ay hindi umiiral.',
    'LBL_ALT_ADDRESS' => 'Iba pang address:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error. May isang numero ang hindi pantay ng mga argumento para sa \'susi\' at kopya ng mga elemento na nasa displayParahams array.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Pangkalahatan',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Mga salain',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Mga item lamang',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Ang Pamagat',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Ipakita ang mga hilera',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Naabot mo na ang pinakamalaking nomero ng Suitecrm ang mga Dashlet na itinakda ng iyong tagapangasiwa. Pakiusap tanggalin ang SuiteCRM Dashlet para marami ang madagdag.',
    'LBL_ADDING_DASHLET' => 'Pagdaragdag SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM hindi pagdaragdag',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Sigurado ka na gusto mong alisin itong SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Pag-alis ng SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet inalis',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Ang pahina ay nag loloading pakiusap hintayin...',

    'LBL_RELOAD_PAGE' => 'Pakiusap <a href="javascript: window.lokasyon.i-reload()">i-reload ang window</a> para magamit ito SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Mga idagdag na Dashlet',
    'LBL_CLOSE_DASHLETS' => 'Sarado',
    'LBL_OPTIONS' => 'Mga pagpipilian',
    'LBL_1_COLUMN' => 'Isang haligi',
    'LBL_2_COLUMN' => 'Dalawang haligi',
    'LBL_3_COLUMN' => '3 haligi',
    'LBL_PAGE_NAME' => 'Pangalan ng pahina',

    'LBL_SEARCH_RESULTS' => 'Ang resulta ng paghahanap',
    'LBL_SEARCH_MODULES' => 'Mga module',
    'LBL_SEARCH_TOOLS' => 'Mga kagamitan',
    'LBL_SEARCH_HELP_TITLE' => 'Mga tip sa paghahanap',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Walang larawan',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopyahin ang adress mula sa kaliwa:',
    'LBL_SAVE_AND_CONTINUE' => 'I-save at i-tuloy',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Ang mga maramihang pagpili sa mga kontrol</strong></p><ul><li>Mag-Click sa mga halaga upang makapili ng katangian.</li><li>Ctrl-click&nbsp;sa&nbsp;maramihan na pagpili. mga gumagamit ng Mac gamit ang CMD-click.</li><li>Upang pumili ng mga halaga sa gitna ng dalawang mga katangian,&nbsp; I-click una ang halaga&nbsp;at pagkatapos shift-click ang huling halaga.</li></ul><p><strong>Pinaghusay na Pagsaliksik at mga Pagpipilian sa Layout</strong><br><br>Gamit ang<b>Pag-Save sa Pagsaliksik at Layout</b> pagpipilian, maaari mong i-save ang pag-set sa pagsasaliksik ng mga parametro at/o ang pasadya na Matanaw ang Listahan upang mabilis na makuha ang ninanais na pagsasaliksik sa mga resulta sa hinaharap. Maaari kang mag-save ng walang katapusan na numero sa pasadya na pagsasaliksik at mga Layout. Lahat ng na-saved na mga pagsasaliksik ay lilitaw sa pangalan sa na-saved na pagsasaliksik sa Listahan. kasama ang huling na-load sa na-save na lumitaw sa pagsasaliksik na nasa taas ng listahan.<br><br> Upang pasadya na matanaw ang layout ng listahan, piliin ang patlang mula sa mga nakatagong listahan ng hanay at gamitin sa kaliwa ng arrow upang gumalaw papunta sa na-display na mga hanay sa listahan at gamitin ang kanan na arrow upang magalaw ito papunta sa Nakatagong mga Hanay sa Listahan.<br><br>kung i-save ang layout ng mga pagtatakda, magagawa mong ma-load sila sa kahit anong oras na matanaw ang mga resulta sa pagsasaliksik sa pasadya na Layout.<br><br>Upang ma-save at ma-update ang pagsasaliksik at/o layout:<ol><li>Mag pasok ng pangalan para sa pagsasaliksik ng mga resulta sa<b>I-save ang pagsasaliksik na ito bilang</b> patlang at i-click<b>I-save</b> buton.</li><li>Upang ma tanaw ang na-save na pagsasaliksik, piliin ito mula sa na-saved na listahan sa pagsasaliksik. Ang mga resulta ng pagsasaliksik ay naka-display sa mga Listahan na Natanaw.</li><li>Upang ma-update ang mga ari-arian sa na-save na pagsasaliksik, piliin ang na-save sa pagsasaliksik mula sa listahan,ipasok ang bagong sinaliksik na pamantayan at/o layout nga mga pagpipilian sa isulong na mga pagsasaliksik na lugar, at i-click<b>magpabago</b> sa susunod para sa <b>Baguhin ang Kasalukuyang Pagsasaliksik</b>.</li><li>Upang burahin ang na-saved na pagsasaliksik, pumilli sa mga pagsasaliksik na nai-save na listahan, pindutin <b>Baguhin</b> sa susunod<b>baguhin ang kasalukuyang Pagsasaliksik</b>, at pagtapos ay i-click<b>OK</b> upang kumpirmahin ang pagbura.</li></ol><p><strong>Mga Tip</strong><br><br> gamit ang % bilang wildcard operator maaari mong magawa ang iyong pagsasaliksik ng mas malawak. Halimbawa sa halip na pagsasaliksik sa mga resulta ng pantay "Mga Mansanas"
maaari mong palitan ang iyong pagsasaliksik sa "Mga Mansanas%" Kung saan magtutugma ang lahat ng mga resulta na nag umpisa kasama ang salitang Mga Mansanas ngunit naglalaman ng ibang mga karakter din,</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Mali: Ang Limitasyon ng query $limit naabot para sa $module modyul.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error. Yamang Tagapagmasid->ipaunawa() ang mga kailangan maging magpawalang halaga.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Mali: Ang payl ng metadata ay walang laman o hindi umiiral ang payl kaya Hindi makagawa ng monitor.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Kamalian. Walang monitor na isinaayos para sa hinihinging pangalan',
    'ERR_UNDEFINED_METRIC' => 'Error. Walang kaya para ihanda ang halaga para sa walang paliwanag na panukat',
    'ERR_STORE_FILE_MISSING' => 'Mali: Ang pagpapatupad ng Store ay Hindi mahanap ang payl',

    'LBL_MONITOR_ID' => 'I-monitor id',
    'LBL_USER_ID' => 'Gamit na id',
    'LBL_MODULE_NAME' => 'Pangalan ng Module',
    'LBL_ITEM_ID' => 'Item id',
    'LBL_ITEM_SUMMARY' => 'Ang buod ng item',
    'LBL_ACTION' => 'Aksyon',
    'LBL_SESSION_ID' => 'Session id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'Ang BreadCrumbStack ay lumikha para sa gumagamit ng id {0}',
    'LBL_VISIBLE' => 'Ang talaan ay makikita',
    'LBL_DATE_LAST_ACTION' => 'Ang petsa sa huling aksyon',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'hindi ito bago',
    'MSG_IS_MORE_THAN' => 'mas marami',
    'MSG_SHOULD_BE' => 'ay dapat na',
    'MSG_OR_GREATER' => 'o mas malaki',

    'LBL_LIST' => 'Listahan',
    'LBL_CREATE_BUG' => 'Gumawa ng Bug',

    'LBL_OBJECT_IMAGE' => 'ang larawang bagay',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Pumili ng Petsa',

    'LBL_VALIDATE_RANGE' => 'ang hanay ay hindi wasto ang nasa loob',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Pakiusap mamili sa parehas na simula at nagtatapos sa huling petsa',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Pakiusap piliin ang parehong nagsisimula at nagtatapos sa mga hanay ng entry',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Lahat',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Mali: Ang bilang ng Array ng parameter na bean ay hindi tumutugma sa bilang ng Array ng mga resulta.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Mali: Ang nawawalang pagmamap na pumasok para sa modyul.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Mali: Hindi makuha ang data para sa {0} konektor. Ang serbisyo ay maaaring kasalukuyang hindi maa-access o maaaring hindi wasto ang mga setting ng pagsasaayos. Ang mensahe ng konektor ay mali: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pinakamainam ang paggamit ng karanasan sa IIS/FastCGI sapi, i-set fastcgi. i-pag-log sa 0 sa iyong php.ini file.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Ang Pangalan',
    'LBL_COLLECTION_PRIMARY' => 'Pangunahin',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Ang kinakailangang patlang ay walang laman',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',

    'LBL_YESTERDAY' => 'kahapon',
    'LBL_TODAY' => 'ngayon',
    'LBL_TOMORROW' => 'bukas',
    'LBL_NEXT_WEEK' => 'susunod na linggo',
    'LBL_NEXT_MONDAY' => 'sususnod na lunes',
    'LBL_NEXT_FRIDAY' => 'sa susunod na biyernes',
    'LBL_TWO_WEEKS' => 'mga dalawang linggo',
    'LBL_NEXT_MONTH' => 'sa susunod na buwan',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'unang araw sa susunod na lunes',
    'LBL_THREE_MONTHS' => 'mga tatlong buwan',
    'LBL_SIXMONTHS' => 'mga anim na buwan',
    'LBL_NEXT_YEAR' => 'susunod na taon',

    //Datetimecombo fields
    'LBL_HOURS' => 'Ang mga oras',
    'LBL_MINUTES' => 'Ang mga minuto',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Petsa',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'I-Auto-Refresh',

    'LBL_DURATION_DAY' => 'araw',
    'LBL_DURATION_HOUR' => 'oras',
    'LBL_DURATION_MINUTE' => 'minuto',
    'LBL_DURATION_DAYS' => 'mga araw',
    'LBL_DURATION_HOURS' => 'Mga tagal na oras',
    'LBL_DURATION_MINUTES' => 'Mga tagal na minuto',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Mamili ng buwan',
    'LBL_ENTER_YEAR' => 'Pumasok na taon',
    'LBL_ENTER_VALID_YEAR' => 'Pakiusap itala ang wastong taon',

    //File write error label
    'ERR_FILE_WRITE' => 'Mali: Hindi maisulat ang payl {0}, Pakiusap suriin ang sistema at web sever ng mga pahintulot.',
    'ERR_FILE_NOT_FOUND' => 'Mali: Hindi maisulat ang payl {0}. Pakiusap suriin ang sistema at web sever ng mga pahintulot.',

    'LBL_AND' => 'At',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Ang payl sa Panlabas na pinagmulan',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Seguridad',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Ito ay isang halimbawa ng payl ng pag-import na nagbibigay ng isang halimbawa ng mga inaasahang nilalaman ng isang payl na handa para sa pag-import."
"Ang payl ay isang paly na .csv na pinaghihiwalay ng kuwit, gamit ang double quotes bilang patlang sa qualifier."


"Ang hilera ng header ay ang pinakamataas na hilera sa payl at naglalaman ng mga patlang ng mga label tulad ng makikita mo ang mga ito sa aplikasyon."
"Ang mga label na ito ay ginagamit para sa pagmamapa ng data sa file sa mga patlang sa aplikasyon."


"Mga tandan: Ang mga pangalan ng database ay maaari ring gamitin sa hilera ng header. Ito ay kapaki-pakinabang kapag gumagamit ka ng phpMyAdmin o ibang tool sa database upang magbigay ng isang nai-export na listahan ng data upang i-import."
"Ang hanay ng order ay hindi kritikal dahil ang proseso ng pag-import ay tumutugma sa data sa naaangkop na mga patlang batay sa hilera ng header."


"Upang gamitin ang file na ito bilang isang template, gawin ang mga sumusunod:"
"1. Alisin ang sample sa mga hilera ng data"
"2. Alisin ang teksto ng tulong na iyong binabasa ngayon"
"3. Ipasok ang iyong sariling data sa naaangkop na mga hilera at mga haligi"
"4. I-save ang payl sa isang kilalang lokasyon sa iyong sistema"
"5. Mag-click sa opsyon ng Import mula sa menu ng Mga Pagkilos sa aplikasyon at piliin ang payl na mag-upload ng"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Walang Kasalukuyang Mga notipikasyon',
    'LBL_ALT_SORT_DESC' => 'Ang pagbaba ay pinagsunod sunod',
    'LBL_ALT_SORT_ASC' => 'Ang Pataas na pagkakasunod-sunod',
    'LBL_ALT_SORT' => 'Pagkakasunod',
    'LBL_ALT_SHOW_OPTIONS' => 'Ipakita ang mga pagpipilian',
    'LBL_ALT_HIDE_OPTIONS' => 'Itago ang mga pagpipilian',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Ilipat ang napiling entry sa listahan sa kaliwa',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Ilipat ang napiling entry sa listahan sa kanan',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Ilipat ang napiling entry sa ipinapakitang listahan ng order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Ilipat ang napiling entry pababa sa ipinakita na order ng listahan',
    'LBL_ALT_INFO' => 'Impormasyon',
    'MSG_DUPLICATE' => 'Ang {0} talaan na iyong gagawin ay maaaring maging isang kopyahin {0} Ang mga umiiral ay nasa talaan na. {1} Ang mga talaan na naglalaman ng mga katulad na pangalan ay nakalista sa ibaba. <br>i-click lumikha {1} para magpatuloy sa paglikha ng bago {0}. o pumili ng umiiral na {0} sa baba ay nakalista.',
    'MSG_SHOW_DUPLICATES' => 'Ang {0} Ang talaan na iyong gagawin ay maaaring maging isang kopayahan ng {0} ang mga umiiral na talaan. {1} Ang mga talaan na naglalaman ng mga katulad na pangalan ay nakalista sa ibaba. pindutin ang seyb para magpatuloy sa bago {0}, 
i-click Kanselahin upang bumalik sa modyul nang hindi nililikha ang {0}.',
    'LBL_EMAIL_TITLE' => 'ang email na padalahan',
    'LBL_EMAIL_OPT_TITLE' => 'nagpasyang sumali sa email address',
    'LBL_EMAIL_INV_TITLE' => 'ang email address ay hindi wasto',
    'LBL_EMAIL_PRIM_TITLE' => 'Gumawa ng pangunahing email address',
    'LBL_SELECT_ALL_TITLE' => 'Piliin lahat',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Piliin itong row',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'MALI: Nagkaroon ng error sa pag-upload. Mali ang kowd: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'MALI: Nagkaroon ng error sa pag-upload. Mali ang kowd: {0} - {1}. I-upoad_maxsize sa {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'MALI: Nagkaroon ng error sa pag-upload. pakiusap kontakin ang administrator para matulungan.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Ang size ng i-upload {0} bytes) Lumagpas sa Maximum na Pinapayagan: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'May nangyaring pagakamali. Mangyaring i-refresh ang iyong pahina at subukan muli.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'I-edit',
    'LBL_EDIT_BUTTON_TITLE' => 'I-edit',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Kopyahin',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Kopyahin',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Burahin',
    'LBL_DELETE_BUTTON_TITLE' => 'Burahin',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Aksyon',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'I-seyb',
    'LBL_SAVE_BUTTON_TITLE' => 'I-seyb',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'I-cancel',
    'LBL_CANCEL_BUTTON_TITLE' => 'I-cancel',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => 'Pito',
    'LBL_ADV_SEARCH_LNK_KEY' => 'walo',
    'LBL_FIRST_INPUT_SEARCH_KEY' => 'siyam',

    'ERR_CONNECTOR_NOT_ARRAY' => 'ang konektor ng array {0} ay nilinaw nang mali o walang laman at hindi magagamit.',
    'ERR_SUHOSIN' => 'Ang stream ng pag-upload ay hinarangan ng Suhosin, pakiusap idagdag &quot;i-upload&quot;para sa suhosin,executor.include.whitelist (tingnan ang suitecrm.log para sa maraming impormasyon)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Ang Masamang tugon mula sa server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Ang quote',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Presyo ng Pagbenta',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Mano-mano',
        '5' => 'Sa kada limang minuto',
        '15' => 'Sa kada labing limang minuto',
        '30' => 'Sa kada tatlongput tatlong minuto',
        '60' => 'Bawat oras',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Ang tagapagpapaalala ay walang laman o hindi wasto.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Ang tagapagpapaalala ay hindi naitakda para sa alinman sa popup o email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Walang mga naimbita para sa tagapagpapaalala.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Ang tagapagpapalala ay hindi nagpapasama sa anumang mga naimbitahan, gusto mo bang tanggalin ang tagapagpapaalala?',
    'LBL_DELETE_REMINDER' => 'Burahin ang Tagapagpapaalala',
    'LBL_OK' => 'Sige',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Pumili ng mga haligi',
    'LBL_COLUMN_CHOOSER' => 'Tagapagpili ng Haligi',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'I-save ang mga nagbago',
    'LBL_DISPLAYED' => 'Pagpapahayag',
    'LBL_HIDDEN' => 'Nakatago',
    'ERR_EMPTY_COLUMNS_LIST' => 'Di bababa, sa isang elementong kinakailangan',

    'LBL_FILTER_HEADER_TITLE' => 'Salain',

    'LBL_CATEGORY' => 'Kategorya',
    'LBL_LIST_CATEGORY' => 'Kategorya',
    'ERR_FACTOR_TPL_INVALID' => 'Imbalido ang mensahe sa Awtentikasyon ng Paktor, mangyaring kontakin ang iyong administrador.',
    'LBL_SUBTHEMES' => 'Istilo',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Madaling Araw',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Ang araw',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Takipsilim',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Gabi',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Tanghali',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Balewalain ang burador',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Itong operasyon ay nabura sa email, gusto mo ipagpatuloy?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Mag-aplay ng isang Templeyt sa Email',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Ang operasyong ito ay sumasapaw sa mga patlang para sa Laman at Paksa ng email, gusto mo bang magpatuloy?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Nakumpirmang Pagpili na Papasok',
    'LBL_OPT_IN_TITLE' => 'Ang Opt ay nasa loob',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Kumpirmadong Petsa ng Pagpili Papasok',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Kumpirmadong Petsa ng Pagpadala ng Pagpiling Papasok',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Kumpirmadong Petsa sa Pagpalya na Nag-opt in',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Ang Templeyt sa Email na Nag-opt in ay hindi naikompigura. Mangyaring itakda ang mga setting sa email.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Ang Pag-opt in ay nangangailangan sa email na maging kaugnay sa Account/Kontak/Namumuno/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Hindi Namamanang Pangkat',
    'LBL_PRIMARY_GROUP' => "Pangunahing Pangkat",

    // footer
    'LBL_SUITE_TOP' => 'Balik sa itaas',
    'LBL_SUITE_SUPERCHARGED' => 'Pina-supercharge ng SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Pinapatakbo Ng SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ang porgramang ito ay software na libre; maaaring mo itong mai-distribyut muli at/o mamodipika ito sa ilalim ng mga termino ng GNU Affero Pangkalahatang Pampublikong Lisensya bersyong 3 sa pagkakalathala ng Free Software Foundation, kasama na ang karagdagang permisyong naipahayag sa header ng kodigong pinagmumulan.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'I-reset ang password',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Kumpirmahin at ipadala sa Opt email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Kumpirmahin ang pagpapadala lamang ng Email na Naka-opt in para sa mga Account/Kontak/Namumuno/Inaasahan',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Kumpirmahin ang pagpapadala sa Email na naka-Opt in ay hindi pinagana, paganahin ang Kumpirmahin ang Opt In na opsyon sa mga Setting ng Email o kontakin ang iyong Administrador.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Ang pagkumpirma sa pagpapadala sa Email na naka-Opt in ay hindi posible dahil ang Kontak ay walang Pangunahing Address sa Email',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Pumalya ang pagpapadala ng Nakumpirmang naka-Opt in na Email',
    'LBL_CONFIRM_EMAIL_SENT' => 'Matagumpay na naipadala ang Email na Nakumpirmang naka-Opt in',
);

$app_list_strings['moduleList']['Library'] = 'Aklatan';
$app_list_strings['moduleList']['EmailAddresses'] = 'Ang email na padalahan';
$app_list_strings['project_priority_default'] = 'Katamtaman';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Mataas',
    'Medium' => 'Medyum',
    'Low' => 'Mababa',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consent',
    'contract' => 'Kontrata',
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
    'website' => 'Website',
    'phone' => 'Telepono',
    'given_to_user' => 'Given to User',
    'email' => 'Ang Email',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Base sa kaalaman';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANYA',
    'ALGERIA' => 'ALGERYA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARTICA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENYA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALYA',
    'AUSTRIA' => 'AUSTRYA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'Ang BELARUS',
    'BELGIUM' => 'Ang BELGIUM',
    'BELIZE' => 'Ang BELIZE',
    'BENIN' => 'Ang BENIN',
    'BERMUDA' => 'Ang BERMUDA',
    'BHUTAN' => 'Ang BHUTAN',
    'BOLIVIA' => 'Ang BOLIVIA',
    'BOSNIA' => 'Ang BOSNIA',
    'BOTSWANA' => 'Ang BOTSWANA',
    'BOUVET ISLAND' => 'Ang BOUVET ISLAND',
    'BRAZIL' => 'Ang BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'Ang BRITISH ANTARCTICA TERRITORY',
    'BRITISH INDIAN OCEAN TERRITORY' => 'Ang BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'Ang BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'Ang BRITISH WEST INDIES',
    'BRUNEI' => 'Ang BRUNEI',
    'BULGARIA' => 'Ang BULGARIA',
    'BURKINA FASO' => 'Ang BURKINA FASO',
    'BURUNDI' => 'Ang BURUNDI',
    'CAMBODIA' => 'Ang Kambodya',
    'CAMEROON' => 'Ang CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'Ang CANAL ZONE',
    'CANARY ISLAND' => 'CANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'Ang CAPE VERDE ISLANDS',
    'CAYMAN ISLANDS' => 'Ang CAYMAN ISLANDS',
    'CHAD' => 'Ang CHAD',
    'CHANNEL ISLAND UK' => 'Ang CHANNEL ISLAND UK',
    'CHILE' => 'Ang CHILE',
    'CHINA' => 'Ang CHINA',
    'CHRISTMAS ISLAND' => 'Ang CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'Ang COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'Ang Kolombya',
    'COMORO ISLANDS' => 'Ang COMORO ISLANDS',
    'CONGO' => 'Ang CONGO',
    'CONGO KINSHASA' => 'Ang CONGO KINSHASA',
    'COOK ISLANDS' => 'Ang MGA ISLA NG COOK',
    'COSTA RICA' => 'Ang KOSTA RIKA',
    'CROATIA' => 'Ang CROATIA',
    'CUBA' => 'Ang CUBA',
    'CURACAO' => 'Ang CURACAO',
    'CYPRUS' => 'Ang CYPRUS',
    'CZECH REPUBLIC' => 'Ang CZECH REPUBLIC',
    'DAHOMEY' => 'Ang DAHOMEY',
    'DENMARK' => 'Ang DENMARK',
    'DJIBOUTI' => 'Ang DJIBOUTI',
    'DOMINICA' => 'Ang DOMINICA',
    'DOMINICAN REPUBLIC' => 'Ang REPUBLIKANG DOMINIKANO',
    'DUBAI' => 'Ang DUBAI',
    'ECUADOR' => 'Ang EKWADOR',
    'EGYPT' => 'Ang EHIPTO',
    'EL SALVADOR' => 'Ang EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
    'ESTONIA' => 'ESTONYA',
    'ETHIOPIA' => 'ETHIOPIA',
    'FAEROE ISLANDS' => 'FAEROE ISLANDS',
    'FALKLAND ISLANDS' => 'Ang MGA ISLA NG FALKLAND',
    'FIJI' => 'Ang FIJI',
    'FINLAND' => 'Ang PINLANDIYA',
    'FRANCE' => 'Ang PRANSIYA',
    'FRENCH GUIANA' => 'Ang FRENCH GUIANA',
    'FRENCH POLYNESIA' => 'Ang FRENCH POLYNESIA',
    'GABON' => 'Ang GABON',
    'GAMBIA' => 'Ang GAMBIA',
    'GEORGIA' => 'Ang GEORGIA',
    'GERMANY' => 'Ang ALEMANYA',
    'GHANA' => 'Ang GHANA',
    'GIBRALTAR' => 'Ang GIBRALTAR',
    'GREECE' => 'Ang GREECE',
    'GREENLAND' => 'Ang GREENLAND',
    'GUADELOUPE' => 'Ang GUADELOUPE',
    'GUAM' => 'Ang GUAM',
    'GUATEMALA' => 'Ang GUATEMALA',
    'GUINEA' => 'Ang GUINEA',
    'GUYANA' => 'Ang GUYANA',
    'HAITI' => 'Ang HAITI',
    'HONDURAS' => 'Ang HONDURAS',
    'HONG KONG' => 'Ang HONG KONG',
    'HUNGARY' => 'Ang HUNGARY',
    'ICELAND' => 'Ang ICELAND',
    'IFNI' => 'Ang IFNI',
    'INDIA' => 'Ang Indiya',
    'INDONESIA' => 'Ang INDONESIA',
    'IRAN' => 'Ang IRAN',
    'IRAQ' => 'Ang IRAQ',
    'IRELAND' => 'Ang IRELAND',
    'ISRAEL' => 'Ang ISRAEL',
    'ITALY' => 'Ang ITALIYA',
    'IVORY COAST' => 'Ang IVORY COAST',
    'JAMAICA' => 'Ang JAMAICA',
    'JAPAN' => 'Ang JAPAN',
    'JORDAN' => 'Ang JORDAN',
    'KAZAKHSTAN' => 'Ang KASAKSTAN',
    'KENYA' => 'Ang KENYA',
    'KOREA' => 'Ang KOREA',
    'KOREA, SOUTH' => 'Ang TIMOG, KOREA',
    'KUWAIT' => 'Ang KUWAIT',
    'KYRGYZSTAN' => 'Ang KYRGYZSTAN',
    'LAOS' => 'Ang LAOS',
    'LATVIA' => 'Ang LATVIA',
    'LEBANON' => 'Ang LEBANON',
    'LEEWARD ISLANDS' => 'Ang LEEWARD ISLANDS',
    'LESOTHO' => 'Ang LESOTHO',
    'LIBYA' => 'Ang LIBYA',
    'LIECHTENSTEIN' => 'Ang LIECHTENSTEIN',
    'LITHUANIA' => 'Ang LITHUANIA',
    'LUXEMBOURG' => 'Ang LUXEMBOURG',
    'MACAO' => 'Ang MACAO',
    'MACEDONIA' => 'Ang MACEDONIA',
    'MADAGASCAR' => 'Ang MADAGASCAR',
    'MALAWI' => 'Ang MALAWI',
    'MALAYSIA' => 'Ang MALAYSIA',
    'MALDIVES' => 'Ang MALDIVES',
    'MALI' => 'Ang MALI',
    'MALTA' => 'Ang MALTA',
    'MARTINIQUE' => 'Ang MARTINIQUE',
    'MAURITANIA' => 'Ang MAURITANIA',
    'MAURITIUS' => 'Ang MAURITIUS',
    'MELANESIA' => 'Ang MELANESIA',
    'MEXICO' => 'Ang MEHIKO',
    'MOLDOVIA' => 'Ang MOLDOVIA',
    'MONACO' => 'Ang MONACO',
    'MONGOLIA' => 'Ang MONGOLIA',
    'MOROCCO' => 'Ang MOROCCO',
    'MOZAMBIQUE' => 'Ang MOZAMBIQUE',
    'MYANAMAR' => 'Ang MYANAMAR',
    'NAMIBIA' => 'Ang NAMIBIA',
    'NEPAL' => 'Ang NEPAL',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'Ang MGA ANTILLES NG NETHERLANDS',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'Ang NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'Ang NEW CALADONIA',
    'NEW HEBRIDES' => 'Ang NEW HEBRIDES',
    'NEW ZEALAND' => 'Ang NEW ZEALAND',
    'NICARAGUA' => 'Ang NICARAGUA',
    'NIGER' => 'Ang NIGER',
    'NIGERIA' => 'Ang NIGERIA',
    'NORFOLK ISLAND' => 'Ang NORFOLK ISLAND',
    'NORWAY' => 'Ang NORWAY',
    'OMAN' => 'Ang OMAN',
    'OTHER' => 'Ang IBA PA',
    'PACIFIC ISLAND' => 'Ang PACIFIC ISLAND',
    'PAKISTAN' => 'Ang PAKISTAN',
    'PANAMA' => 'Ang PANAMA',
    'PAPUA NEW GUINEA' => 'Ang PAPUA NEW GUINEA',
    'PARAGUAY' => 'Ang PARAGWAY',
    'PERU' => 'Ang PERU',
    'PHILIPPINES' => 'PILIPINAS',
    'POLAND' => 'Ang POLAND',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'Ang EAST TIMOR',
    'PUERTO RICO' => 'Ang PUERTO RIKO',
    'QATAR' => 'Ang QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIKA NG BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIKA NG SOUTH AFRICA',
    'REUNION' => 'Ang REUNION',
    'ROMANIA' => 'Ang ROMANIA',
    'RUSSIA' => 'Ang RUSSIA',
    'RWANDA' => 'Ang RWANDA',
    'RYUKYU ISLANDS' => 'Ang RYUKYU ISLANDS',
    'SABAH' => 'Ang SABAH',
    'SAN MARINO' => 'Ang SAN MARINO',
    'SAUDI ARABIA' => 'Ang SAUDI ARABIA',
    'SENEGAL' => 'Ang SENEGAL',
    'SERBIA' => 'Ang SERBIA',
    'SEYCHELLES' => 'Ang SEYCHELLES',
    'SIERRA LEONE' => 'Ang SIERRA LEONE',
    'SINGAPORE' => 'Ang SINGAPORE',
    'SLOVAKIA' => 'Ang SLOVAKIA',
    'SLOVENIA' => 'Ang SLOVENIA',
    'SOMALILIAND' => 'Ang SOMALILIAND',
    'SOUTH AFRICA' => 'Ang SOUTH AFRICA',
    'SOUTH YEMEN' => 'Ang SOUTH YEMEN',
    'SPAIN' => 'Ang ESPANYA',
    'SPANISH SAHARA' => 'Ang SPANISH SAHARA',
    'SRI LANKA' => 'Ang SRI LANKA',
    'ST. KITTS AND NEVIS' => 'Ang ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'Ang ST. LUCIA',
    'SUDAN' => 'Ang SUDAN',
    'SURINAM' => 'Ang SURINAM',
    'SW AFRICA' => 'Ang SW AFRICA',
    'SWAZILAND' => 'Ang SWAZILAND',
    'SWEDEN' => 'Ang SWEDEN',
    'SWITZERLAND' => 'Ang SWITZERLAND',
    'SYRIA' => 'Ang SYRIA',
    'TAIWAN' => 'Ang TAIWAN',
    'TAJIKISTAN' => 'Ang TAJIKISTAN',
    'TANZANIA' => 'Ang TANZANIA',
    'THAILAND' => 'Ang THAILAND',
    'TONGA' => 'Ang TONGA',
    'TRINIDAD' => 'Ang TRINIDAD',
    'TUNISIA' => 'Ang TUNISIA',
    'TURKEY' => 'Ang TURKEY',
    'UGANDA' => 'Ang UGANDA',
    'UKRAINE' => 'Ang UKRAINE',
    'UNITED ARAB EMIRATES' => 'Ang UNITED ARAB EMIRATES',
    'UNITED KINGDOM' => 'Ang UNITED KINGDOM',
    'URUGUAY' => 'Ang URUGWAY',
    'US PACIFIC ISLAND' => 'Ang US PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'Ang US VIRGIN ISLANDS',
    'USA' => 'Ang ESTADOS UNIDOS',
    'UZBEKISTAN' => 'Ang UZBEKISTAN',
    'VANUATU' => 'Ang VANUATU',
    'VATICAN CITY' => 'Ang VATICAN CITY',
    'VENEZUELA' => 'Ang VENEZUELA',
    'VIETNAM' => 'Ang VIETNAM',
    'WAKE ISLAND' => 'Ang WAKE ISLAND',
    'WEST INDIES' => 'Ang WEST INDIES',
    'WESTERN SAHARA' => 'Ang WESTERN SAHARA',
    'YEMEN' => 'Ang YEMEN',
    'ZAIRE' => 'Ang ZAIRE',
    'ZAMBIA' => 'Ang ZAMBIA',
    'ZIMBABWE' => 'Ang ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'Ang BIG-5 sa (Taiwan at Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'Ang CP1251 (MS Cyrillic)',
    'CP1252' => 'Ang CP1252 (MS Western European at US)',
    'EUC-CN' => 'Ang EUC-CN (Pinasimple Chinese GB2312)',
    'EUC-JP' => 'Ang EUC-JP (Unix Japanese)',
    'EUC-KR' => 'Ang EUC-KR (Korean)',
    'EUC-TW' => 'Ang EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'Ang ISO-2022-JP (Hapones)',
    'ISO-2022-KR' => 'Ang ISO-2022-KR (Koreano)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European at US)',
    'ISO-8859-2' => 'ISO-8859-2 (Sentral at Eastern European)',
    'ISO-8859-3' => 'Ang ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'Ang ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'Ang ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'Ang ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'Ang ISO-8859-7 (Griyego)',
    'ISO-8859-8' => 'Ang ISO-8859-8 (Hebreo)',
    'ISO-8859-9' => 'Ang ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'Ang ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'Ang ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'Ang ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'Ang ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'Ang KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'Ang KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)
',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Ang Africa/Algiers',
    'Africa/Luanda' => 'Ang Africa/Luanda',
    'Africa/Porto-Novo' => 'Ang Africa/Porto-Novo
',
    'Africa/Gaborone' => 'Ang Africa/Gaborone
 ',
    'Africa/Ouagadougou' => 'Ang Aprika/Ouagadougou',
    'Africa/Bujumbura' => 'Ang Aprika/Bujumbura',
    'Africa/Douala' => 'Ang Aprika/Douala',
    'Atlantic/Cape_Verde' => 'Ang Atlantiko/Cape Verde',
    'Africa/Bangui' => 'Ang Aprika/Bangui',
    'Africa/Ndjamena' => 'Ang Aprika/Ndjamena',
    'Indian/Comoro' => 'Ang Indiyano/Comoro',
    'Africa/Kinshasa' => 'Ang Aprika/Kinshasa',
    'Africa/Lubumbashi' => 'Ang Aprika/Lubumbashi',
    'Africa/Brazzaville' => 'Ang Aprika/Brazzaville',
    'Africa/Abidjan' => 'Ang Aprika/Abidjan',
    'Africa/Djibouti' => 'Ang Aprika/Djibouti',
    'Africa/Cairo' => 'Ang Aprika/Cairo',
    'Africa/Malabo' => 'Ang Aprika/Malabo',
    'Africa/Asmera' => 'Ang Aprika/Asmera',
    'Africa/Addis_Ababa' => 'Ang Aprika/Addis Ababa',
    'Africa/Libreville' => 'Ang Aprika/Libreville',
    'Africa/Banjul' => 'Ang Aprika/Banjul',
    'Africa/Accra' => 'Ang Aprika/Accra',
    'Africa/Conakry' => 'Ang Aprika/Conakry',
    'Africa/Bissau' => 'Ang Aprika/Bissau',
    'Africa/Nairobi' => 'Ang Aprika/Nairobi',
    'Africa/Maseru' => 'Ang Aprika/Maseru',
    'Africa/Monrovia' => 'Ang Aprika/Monrovia',
    'Africa/Tripoli' => 'Ang Aprika/Tripoli',
    'Indian/Antananarivo' => 'Ang Indiyano/Antananarivo',
    'Africa/Blantyre' => 'Ang Aprika/Blantyre',
    'Africa/Bamako' => 'Ang Aprika/Bamako',
    'Africa/Nouakchott' => 'Ang Aprika/Nouakchott',
    'Indian/Mauritius' => 'Ang Indiyano/Mauritius',
    'Indian/Mayotte' => 'Ang Indiyano/Mayotte',
    'Africa/Casablanca' => 'Ang Aprika/Casablanca',
    'Africa/El_Aaiun' => 'Ang Aprika/El Aaiun',
    'Africa/Maputo' => 'Ang Aprikano/Maputo',
    'Africa/Windhoek' => 'Ang Aprika/Windhoek',
    'Africa/Niamey' => 'Ang Aprika/Niamey',
    'Africa/Lagos' => 'Ang Aprika/Lagos',
    'Indian/Reunion' => 'Ang Indiyano/Reunion',
    'Africa/Kigali' => 'Ang Aprika/Kigali',
    'Atlantic/St_Helena' => 'Ang Atlantiko/St. Helena',
    'Africa/Sao_Tome' => 'Ang Aprika/Sao Tome',
    'Africa/Dakar' => 'Ang Aprika/Dakar',
    'Indian/Mahe' => 'Ang Indiyano/Mahe',
    'Africa/Freetown' => 'Ang Aprika/Freetown',
    'Africa/Mogadishu' => 'Ang Aprika/Mogadishu',
    'Africa/Johannesburg' => 'Ang Aprika/Johannesburg',
    'Africa/Khartoum' => 'Ang Aprika/Khartoum',
    'Africa/Mbabane' => 'Ang Aprika/Mbabane',
    'Africa/Dar_es_Salaam' => 'Ang Aprika/Dar es Salaam',
    'Africa/Lome' => 'Ang Aprika/Lome',
    'Africa/Tunis' => 'Ang Aprika/Tunis',
    'Africa/Kampala' => 'Ang Aprika/Kampala',
    'Africa/Lusaka' => 'Ang Aprika/Lusaka',
    'Africa/Harare' => 'Ang Aprika/Harare',
    'Antarctica/Casey' => 'Ang Antarctica/Casey',
    'Antarctica/Davis' => 'Ang Antarctica/Davis',
    'Antarctica/Mawson' => 'Ang Antarctica/Mawson',
    'Indian/Kerguelen' => 'Ang Indiyano/Kerguelen',
    'Antarctica/DumontDUrville' => 'Ang Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Ang Antarctica/Syowa',
    'Antarctica/Vostok' => 'Ang Antarctica/Vostok',
    'Antarctica/Rothera' => 'Ang Antarctica/Rothera',
    'Antarctica/Palmer' => 'Ang Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Ang Antarctica/McMurdo',
    'Asia/Kabul' => 'Ang Asya/Kabul',
    'Asia/Yerevan' => 'Ang Asya/Yerevan',
    'Asia/Baku' => 'Ang Asya/Baku',
    'Asia/Bahrain' => 'Ang Asya/Bahrain',
    'Asia/Dhaka' => 'Ang Asya/Dhaka',
    'Asia/Thimphu' => 'Ang Asya/Thimphu',
    'Indian/Chagos' => 'Ang Indiyano/Chagos',
    'Asia/Brunei' => 'Ang Asya/Brunei',
    'Asia/Rangoon' => 'Ang Asya/Rangoon',
    'Asia/Phnom_Penh' => 'Ang Asya/Phnom Penh',
    'Asia/Beijing' => 'Ang Asya/Beijing',
    'Asia/Harbin' => 'Ang Asya/Harbin',
    'Asia/Shanghai' => 'Ang Asya/Shanghai',
    'Asia/Chongqing' => 'Ang Asya/Chongqing',
    'Asia/Urumqi' => 'Ang Asya/Urumqi',
    'Asia/Kashgar' => 'Ang Asya/Kashgar',
    'Asia/Hong_Kong' => 'Ang Asya/Hong Kong',
    'Asia/Taipei' => 'Ang Asya/Taipei',
    'Asia/Macau' => 'Ang Asya/Macau',
    'Asia/Nicosia' => 'Ang Asya/Nicosia',
    'Asia/Tbilisi' => 'Ang Asya/Tbilisi',
    'Asia/Dili' => 'Ang Asya/Dili',
    'Asia/Calcutta' => 'Ang Asya/Calcutta',
    'Asia/Jakarta' => 'Ang Asya/Jakarta',
    'Asia/Pontianak' => 'Ang Asya/Pontianak',
    'Asia/Makassar' => 'Ang Asya/Makassar',
    'Asia/Jayapura' => 'Ang Asya/Jayapura',
    'Asia/Tehran' => 'Ang Asya/Tehran',
    'Asia/Baghdad' => 'Ang Asya/Banghdad',
    'Asia/Jerusalem' => 'Ang Asya/Jerusalem',
    'Asia/Tokyo' => 'Ang Asya/Tokyo',
    'Asia/Amman' => 'Ang Asya/Amman',
    'Asia/Almaty' => 'Ang Asya/Almaty',
    'Asia/Qyzylorda' => 'Ang Asya/Qyzylorda',
    'Asia/Aqtobe' => 'Ang Asya/Aqtobe',
    'Asia/Aqtau' => 'Ang Asya/Aqtau',
    'Asia/Oral' => 'Ang Asya/Oral',
    'Asia/Bishkek' => 'Ang Asya/Bishkek',
    'Asia/Seoul' => 'Ang Asya/Seoul',
    'Asia/Pyongyang' => 'Ang Asya/Pyongyang',
    'Asia/Kuwait' => 'Ang Asya/Kuwait',
    'Asia/Vientiane' => 'Ang Asya/AqtobeVientiane',
    'Asia/Beirut' => 'Ang Asya/Beirut',
    'Asia/Kuala_Lumpur' => 'Ang Asya//Kuala Lumpur',
    'Asia/Kuching' => 'Ang Asya/Kuching',
    'Indian/Maldives' => 'Ang Indyano/Maldives',
    'Asia/Hovd' => 'Ang Asya/Hovd',
    'Asia/Ulaanbaatar' => 'Asya/Ulaanbaatar',
    'Asia/Choibalsan' => 'Ang Asya/Choibalsan',
    'Asia/Katmandu' => 'Ang Asya/Katmandu',
    'Asia/Muscat' => 'Ang Asya/Muscat',
    'Asia/Karachi' => 'Ang Asya/Karachi',
    'Asia/Gaza' => 'Ang Asya/Gaza',
    'Asia/Manila' => 'Asya/Manila',
    'Asia/Qatar' => 'Asya/Qatar',
    'Asia/Riyadh' => 'Asya/Riyadh',
    'Asia/Singapore' => 'Asya/Singapore',
    'Asia/Colombo' => 'Asya/Colombo',
    'Asia/Damascus' => 'Asya/Damascus',
    'Asia/Dushanbe' => 'Asya/Dushanbe',
    'Asia/Bangkok' => 'Asya/Bangkok',
    'Asia/Ashgabat' => 'Asya/Ashgabat',
    'Asia/Dubai' => 'Asya/Dubai',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asya/Tashkent',
    'Asia/Saigon' => 'Asya/Saigon',
    'Asia/Aden' => 'Asya/Aden',
    'Australia/Darwin' => 'Australya/Darwin',
    'Australia/Perth' => 'Australya/Perth',
    'Australia/Brisbane' => 'Australya/Brisbane',
    'Australia/Lindeman' => 'Australya/Lindeman',
    'Australia/Adelaide' => 'Australya/Adelaide',
    'Australia/Hobart' => 'Australya/Hobart',
    'Australia/Currie' => 'Australya/Currie',
    'Australia/Melbourne' => 'Australya/Melbourne',
    'Australia/Sydney' => 'Australya/Sydney',
    'Australia/Broken_Hill' => 'Australya/Broken Hill',
    'Indian/Christmas' => 'Indiano/Christmas',
    'Pacific/Rarotonga' => 'Pasipiko/Rarotonga',
    'Indian/Cocos' => 'Indiano/Cocos',
    'Pacific/Fiji' => 'Pasipiko/Fiji',
    'Pacific/Gambier' => 'Pasipiko/Gambier',
    'Pacific/Marquesas' => 'Pasipiko/Marquesas',
    'Pacific/Tahiti' => 'Pasipiko/Tahiti',
    'Pacific/Guam' => 'Pasipiko/Guam',
    'Pacific/Tarawa' => 'Pasipiko/Tarawa',
    'Pacific/Enderbury' => 'Pasipiko/Edenbury',
    'Pacific/Kiritimati' => 'Pasipiko/Kiritimati',
    'Pacific/Saipan' => 'Pasipiko/Saipan',
    'Pacific/Majuro' => 'Pasipiko/Majuro',
    'Pacific/Kwajalein' => 'Pasipiko/Kwajalein',
    'Pacific/Truk' => 'Pasipiko/Truk',
    'Pacific/Pohnpei' => 'Pasipiko/Pohnpei',
    'Pacific/Kosrae' => 'Pasipiko/Kosrae',
    'Pacific/Nauru' => 'Pasipiko/Nauru',
    'Pacific/Noumea' => 'Pasipiko/Noumea',
    'Pacific/Auckland' => 'Pasipiko/Auckland',
    'Pacific/Chatham' => 'Pasipiko/Chatham',
    'Pacific/Niue' => 'Pasipiko/Niue',
    'Pacific/Norfolk' => 'Pasipiko/Norfolk',
    'Pacific/Palau' => 'Pasipiko/Palau',
    'Pacific/Port_Moresby' => 'Pasipiko/Port Moresby',
    'Pacific/Pitcairn' => 'Pasipiko/Pitcairn',
    'Pacific/Pago_Pago' => 'Pasipiko/Pago Pago
 ',
    'Pacific/Apia' => 'Pasipiko/Apia',
    'Pacific/Guadalcanal' => 'Pasipiko/Guadalcanal
 ',
    'Pacific/Fakaofo' => 'Pasipiko/Fakaofo',
    'Pacific/Tongatapu' => 'Pasipiko/Tongatapu
 ',
    'Pacific/Funafuti' => 'Pasipiko/Funafuti',
    'Pacific/Johnston' => 'Pasipiko/Johnston
 ',
    'Pacific/Midway' => 'Pasipiko/Midway
',
    'Pacific/Wake' => 'Pasipiko/Wake',
    'Pacific/Efate' => 'Pasipiko/Efate',
    'Pacific/Wallis' => 'Pasipiko/Wallis',
    'Europe/London' => ' Europe/London',
    'Europe/Dublin' => 'Europe/Dublin
',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'Europe/Andorra',
    'Europe/Vienna' => 'Europe/Vienna',
    'Europe/Minsk' => 'Europe/Minsk
 ',
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
    'Europe/Paris' => 'Europe/Paris
',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Ang Europa/Athens',
    'Europe/Budapest' => 'Ang Europa/Budapest',
    'Atlantic/Reykjavik' => 'Ang Atlantika/Reykjavik',
    'Europe/Rome' => 'Ang Europa/Roma',
    'Europe/Riga' => 'Ang Europa/Riga',
    'Europe/Vaduz' => 'Ang Europa/Vaduz',
    'Europe/Vilnius' => 'Ang Europa/Vilnius',
    'Europe/Luxembourg' => 'Ang Europa/Luxembourg',
    'Europe/Malta' => 'Ang Europa/Malta',
    'Europe/Chisinau' => 'Ang Europa/Chisinau',
    'Europe/Monaco' => 'Ang Europa/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Warsaw
 ',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantiko/Azores',
    'Atlantic/Madeira' => 'Atlantiko/Madeira',
    'Europe/Bucharest' => 'Europa/Bucharest',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Moscow',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Asya/Yekaterinburg',
    'Asia/Omsk' => 'Asya/Omsk',
    'Asia/Novosibirsk' => 'Asya/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asya/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asya/Irkutsk',
    'Asia/Yakutsk' => 'Asya/Yakutsk',
    'Asia/Vladivostok' => 'Asya/Vladivostok',
    'Asia/Sakhalin' => 'Asya/Sakhalin',
    'Asia/Magadan' => 'Asya/Magadan',
    'Asia/Kamchatka' => 'Asya/Kamchatka',
    'Asia/Anadyr' => 'Asya/Anadyr',
    'Europe/Belgrade' => 'Europa/Belgrade',
    'Europe/Madrid' => 'Europa/Madrid',
    'Africa/Ceuta' => 'Ang Aprika/Ceuta',
    'Atlantic/Canary' => 'Ang Atlantika/Canary',
    'Europe/Stockholm' => 'Ang Europa/Stockholm',
    'Europe/Zurich' => 'Ang Europa/Zurich',
    'Europe/Istanbul' => 'Ang Europa/Istanbul',
    'Europe/Kiev' => 'Ang Europa/Kiev',
    'Europe/Uzhgorod' => 'Ang Europa/Uzhgorod',
    'Europe/Zaporozhye' => 'Ang Europa/Zaporozhye',
    'Europe/Simferopol' => 'Ang Europa/Simferopol',
    'America/New_York' => 'Ang Amerika/New York',
    'America/Chicago' => 'Ang Amerika/Chicago',
    'America/North_Dakota/Center' => 'Ang Amerika/North Dakota/Sentro',
    'America/Denver' => 'Ang Amerika/Denver',
    'America/Los_Angeles' => 'Ang Amerika/Los Angeles',
    'America/Juneau' => 'Ang Amerika/Juneau',
    'America/Yakutat' => 'Ang Amerika/Yakutat',
    'America/Anchorage' => 'Ang Amerika/Anchorage',
    'America/Nome' => 'Ang Amerika/Nome',
    'America/Adak' => 'Ang Amerika/Adak',
    'Pacific/Honolulu' => 'Ang Pasipiko/Honolulu',
    'America/Phoenix' => 'Ang Amerika/Phoenix',
    'America/Boise' => 'Ang Amerika/Boise',
    'America/Indiana/Indianapolis' => 'Ang Amerika/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Ang Amerika/Indiana/Marengo',
    'America/Indiana/Knox' => 'Ang Americka/Indiana/Knox',
    'America/Indiana/Vevay' => 'Ang Amerika/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Ang Amerika/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns
',
    'America/Goose_Bay' => 'America/Goose_Bay
',
    'America/Halifax' => 'America/Halifax
 ',
    'America/Glace_Bay' => 'America/Glace Bay
',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy River
',
    'America/Winnipeg' => 'America/Winnipeg
',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver
 ',
    'America/Dawson_Creek' => 'America/Dawson Creek
',
    'America/Pangnirtung' => 'America/Pangnirtung
',
    'America/Iqaluit' => 'America/Iqaluit
',
    'America/Coral_Harbour' => 'America/Coral Harbour
',
    'America/Rankin_Inlet' => 'America/Rankin Inlet
 ',
    'America/Cambridge_Bay' => 'America/Cambridge Bay
 ',
    'America/Yellowknife' => 'Amerika/Yellowknife',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Whitehorse' => 'Amerika/Whitehorse',
    'America/Dawson' => 'Amerika/Dawson',
    'America/Cancun' => 'Amerika/Cancun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Monterrey',
    'America/Mexico_City' => 'Amerika/Lungsod ng Mexico',
    'America/Chihuahua' => 'Amerika/Chihuahua',
    'America/Hermosillo' => 'Amerika/Hermosillo',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Tijuana' => 'Amerika/Tijuana',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Nassau' => 'Amerika/Nassau',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belize' => 'Amerika/Belize',
    'Atlantic/Bermuda' => 'Atlantiko/Bermuda',
    'America/Cayman' => 'Amerika/Cayman',
    'America/Costa_Rica' => 'Amerika/Costa Rica',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominica',
    'America/Santo_Domingo' => 'Amerika/Santo Domingo',
    'America/El_Salvador' => 'Amerika/El Salvador',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Guadeloupe',
    'America/Guatemala' => 'Amerika/Guatemala',
    'America/Port-au-Prince' => 'Ang Amerika/Port-au-Prince',
    'America/Tegucigalpa' => 'Ang America/Tegucigalpa
',
    'America/Jamaica' => 'Ang America/Jamaica',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent
',
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
    'America/Argentina/Mendoza' => ' America/Argentina/Mendoza
',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza
',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'America/Sao Paulo
',
    'America/Campo_Grande' => 'America/Campo Grande
',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho
',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe
',
    'America/Rio_Branco' => 'America/Eirunepe
 ',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pasipiko/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pasipiko/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana
',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima
',
    'Atlantic/South_Georgia' => 'Atlantic/South Georgia
 ',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'Webex',
    'GoToMeeting' => 'Sa pulong ay pumunta',
    'IBMSmartCloud' => 'Ang IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Mga Kontak sa Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drayb',
);
$app_list_strings['token_status'] = array(
    1 => 'Kahilingan',
    2 => 'Akses',
    3 => 'Hindi wasto',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanya',
    'email' => 'Ang Email',
    'event' => 'Kaganapan',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanya',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanya',
    'email' => 'Ang Email',
    'event' => 'Kaganapan',
    'system' => 'Sistema',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base sa kaalaman';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Mga Kategorya';
$app_list_strings['aok_status_list']['Draft'] = 'Naka-draft';
$app_list_strings['aok_status_list']['Expired'] = 'Nag-expire na';
$app_list_strings['aok_status_list']['In_Review'] = 'Sa Pagsusuri';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Pribado';
$app_list_strings['aok_status_list']['published_public'] = 'Publiko';

$app_list_strings['moduleList']['FP_events'] = 'Mga kaganapan';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Mga Lokasyon';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Imbitado';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Hindi Imbitado';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Napuntahan';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Hindi Napuntahan';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Tinanggap';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Tinanggihan';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Walang Tugon';

$app_strings['LBL_STATUS_EVENT'] = 'Katayuan ng Inimbita';
$app_strings['LBL_ACCEPT_STATUS'] = 'Tanggapin ang estado';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Piliin ang Pahinang Ito';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Piliin Lahat';
$app_strings['LBL_LISTVIEW_NONE'] = 'Huwag Piliin Lahat';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indeks ng Pangyayari';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Mga Kasong Pangyayari';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Mga Kaso ng Updeyt';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Mangyaring mag-reply sa itaas ng linyang ito ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Buksan';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Buksan',
        'Closed' => 'Sarado',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Bago',
        'Open_Assigned' => 'Ang naitalaga',
        'Closed_Closed' => 'Sarado',
        'Open_Pending Input' => 'Nakabinbing input',
        'Closed_Rejected' => 'Tinanggihan',
        'Closed_Duplicate' => 'Kopyahin',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Isang gumagamit',
        'Account' => 'Account ng gumagamit',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Default ng Sistema',
    'singleUser' => 'Isang Gumagamit',
    'roundRobin' => 'Ang Paikot-Robin',
    'leastBusy' => 'Masyado-Abala',
    'random' => 'Random',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Ang mga ulat';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Iulat ang mga Kondisyon';
$app_list_strings['moduleList']['AOR_Charts'] = 'Iulat ang mga Tsart';
$app_list_strings['moduleList']['AOR_Fields'] = 'Iulat ang mga Patlang';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Naka-iskedyul na mga Ulat';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Katumbas Sa';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Hindi Katumbas Sa';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Mahigit sa';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mas mababa sa';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Mas Higit Pa o Katumbas Sa';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mas Mababa o Katumbas Sa';
$app_list_strings['aor_operator_list']['Contains'] = 'Mga nilalaman';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Nagsisimula Sasa';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Nagtatapos Sa';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Ang Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Y';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'ang d/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'Ang Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Ang Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'At';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aor_condition_type_list']['Value'] = 'Halaga';
$app_list_strings['aor_condition_type_list']['Field'] = 'Patlang';
$app_list_strings['aor_condition_type_list']['Date'] = 'Petsa';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Isa sa';
$app_list_strings['aor_condition_type_list']['Period'] = 'Ang Panahon';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Ang Gumagamit ngayon';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Ang mga minuto';
$app_list_strings['aor_date_type_list']['hour'] = 'Ang mga oras';
$app_list_strings['aor_date_type_list']['day'] = 'Ang mga araw';
$app_list_strings['aor_date_type_list']['week'] = 'Ang mga linggo';
$app_list_strings['aor_date_type_list']['month'] = 'Ang mga linggo';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Ang mga oras ng negosyo';
$app_list_strings['aor_date_options']['now'] = 'Ngayon';
$app_list_strings['aor_date_options']['field'] = 'Ang itong patlang';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Pataas';
$app_list_strings['aor_sort_operator']['DESC'] = 'Pababa';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Ang Bilang';
$app_list_strings['aor_function_list']['MIN'] = 'Ang pinakamaliit';
$app_list_strings['aor_function_list']['MAX'] = 'Ang Pinakamataas';
$app_list_strings['aor_function_list']['SUM'] = 'Ang kabuuan';
$app_list_strings['aor_function_list']['AVG'] = 'Ang average';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Ang Bilang';
$app_list_strings['aor_total_options']['SUM'] = 'Ang kabuuan';
$app_list_strings['aor_total_options']['AVG'] = 'Ang average';
$app_list_strings['aor_chart_types']['bar'] = 'Ang bar tsart';
$app_list_strings['aor_chart_types']['line'] = 'Ang tsart na linya';
$app_list_strings['aor_chart_types']['pie'] = 'Ang pie tsart';
$app_list_strings['aor_chart_types']['radar'] = 'Ang radar tsart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Ang isinasalin ng tsart';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Ang nakapangkat na bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Buwan-buwan';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Linggo-linggo';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Arawaraw';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Gawing aktibo';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Huwag gawing aktibo';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Ang Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Ang Tagagamit';
$app_list_strings['aor_email_type_list']['Users'] = 'Ang mga gumagamit';
$app_list_strings['aor_assign_options']['all'] = 'Ang lahat ng gumagamit';
$app_list_strings['aor_assign_options']['role'] = 'Ang lahat ng gumagamit ng role';
$app_list_strings['aor_assign_options']['security_group'] = 'Ang mga gumagamit ng seguridad na grupo';
$app_list_strings['date_time_period_list']['today'] = 'Ngayon';
$app_list_strings['date_time_period_list']['yesterday'] = 'Kahapon';
$app_list_strings['date_time_period_list']['this_week'] = 'Ngayong Linggo';
$app_list_strings['date_time_period_list']['last_week'] = 'Nakaraang Linggo';
$app_list_strings['date_time_period_list']['last_month'] = 'Ang huling buwan';
$app_list_strings['date_time_period_list']['this_month'] = 'Ngayong Buwan';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Kwarter na Ito';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Huling Kwarter';
$app_list_strings['date_time_period_list']['this_year'] = 'Ngayong taon';
$app_list_strings['date_time_period_list']['last_year'] = 'Nakaraang taon';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'sa';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'sa';
$app_strings['LBL_CRON_AT'] = 'sa';
$app_strings['LBL_CRON_RAW'] = 'Naka-adbans';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Oras';
$app_strings['LBL_CRON_DAY'] = 'Ang araw';
$app_strings['LBL_CRON_MONTH'] = 'Buwan';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Arawaraw';
$app_strings['LBL_CRON_WEEKLY'] = 'Linggo-linggo';
$app_strings['LBL_CRON_MONTHLY'] = 'Buwan-buwan';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Mga kontrata';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Mga invoice';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Mga Templeyt';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Mga Produkto - Mga Kategoriya';
$app_list_strings['moduleList']['AOS_Products'] = 'Ang mga produkto';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Ang Aytem sa Linya';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Mga Pangkat ng Aytem sa Linya';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Mga panipi';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Pagsusuri';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Kakompentsya';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kustomer';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integerator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Namumuhunan';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Ang Kapareha';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Pindutin';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Paghahanap';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Taga-benta';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Iba pa';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Naka-draft';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negosasyon';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Naihatid';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Nasa hawakan';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Kumpirmado';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Saradong Tinanggap';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Isanara na pagkatalo';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Saradong Patay';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Aprubado';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Hindi Aprubado';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Pagsusuri';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Kakompentsya';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kustomer';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integerator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Namumuhunan';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Ang Kapareha';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Pindutin';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Paghahanap';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Taga-benta';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Iba pa';
$app_list_strings['invoice_status_dom']['Paid'] = 'Nabayaran';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Hindi nabayaran';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Kinansela';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Hindi Natalaan';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Natalaan';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Mga Laptop';
$app_list_strings['product_category_dom']['Desktops'] = 'Mga Desktop';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Mabuti';
$app_list_strings['product_type_dom']['Service'] = 'Ang Serbisyo';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Mga panipi';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Mga invoice';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Mga kontrata';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Mga panipi';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Mga invoice';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Mga kontrata';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Ang mga Akawnt';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Ang mga koneksyon';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Pamunuan';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Hindi pag nagsisimula';
$app_list_strings['contract_status_list']['In Progress'] = 'Nasa pag-unlad';
$app_list_strings['contract_status_list']['Signed'] = 'Napirmahan';
$app_list_strings['contract_type_list']['Type'] = 'Klase';
$app_strings['LBL_PRINT_AS_PDF'] = 'I-imprinta bilang PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Mangyaring Pumili ng isang Templeyt';
$app_strings['LBL_NO_TEMPLATE'] = 'MALI\nwalang mga template na natagpuan.\npakiusap pumunta sa PDF ng mga template ng modyul at isang lumikha';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Ang daloy ng trabaho';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Mga kondiyon sa WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Proseso sa Awdit';
$app_list_strings['moduleList']['AOW_Actions'] = 'Mga Aksyon sa WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Gawing aktibo';
$app_list_strings['aow_status_list']['Inactive'] = 'Huwag gawing aktibo';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Katumbas Sa';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Hindi Katumbas Sa';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Mahigit sa';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mas mababa sa';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Mas Higit Pa o Katumbas Sa';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mas Mababa o Katumbas Sa';
$app_list_strings['aow_operator_list']['Contains'] = 'Mga nilalaman';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Nagsisimula Sasa';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Nagtatapos Sa';
$app_list_strings['aow_operator_list']['is_null'] = 'Ay Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Kumpleto';
$app_list_strings['aow_process_status_list']['Running'] = 'Tumatakbo';
$app_list_strings['aow_process_status_list']['Pending'] = 'Nakabinbin';
$app_list_strings['aow_process_status_list']['Failed'] = 'Pumalya';
$app_list_strings['aow_condition_operator_list']['And'] = 'At';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aow_condition_type_list']['Value'] = 'Halaga';
$app_list_strings['aow_condition_type_list']['Field'] = 'Patlang';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Ang anumang pagbabago';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Ang seguridad ng grupo';
$app_list_strings['aow_condition_type_list']['Date'] = 'Petsa';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Isa sa';
$app_list_strings['aow_action_type_list']['Value'] = 'Halaga';
$app_list_strings['aow_action_type_list']['Field'] = 'Patlang';
$app_list_strings['aow_action_type_list']['Date'] = 'Petsa';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Pagikot ng robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Hindi gaanong abala';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Halaga';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Patlang';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Ang mga minuto';
$app_list_strings['aow_date_type_list']['hour'] = 'Ang mga oras';
$app_list_strings['aow_date_type_list']['day'] = 'Ang mga araw';
$app_list_strings['aow_date_type_list']['week'] = 'Ang mga linggo';
$app_list_strings['aow_date_type_list']['month'] = 'Ang mga linggo';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Ang mga oras ng negosyo';
$app_list_strings['aow_date_options']['now'] = 'Ngayon';
$app_list_strings['aow_date_options']['today'] = 'Ngayon';
$app_list_strings['aow_date_options']['field'] = 'Ang itong patlang';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Ang lahat ng gumagamit';
$app_list_strings['aow_assign_options']['role'] = 'Ang lahat ng gumagamit ng role';
$app_list_strings['aow_assign_options']['security_group'] = 'Ang mga gumagamit ng seguridad na grupo';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Ang Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Ang talaan ng email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Ang kaugnay na larangan';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Ang Tagagamit';
$app_list_strings['aow_email_type_list']['Users'] = 'Ang mga gumagamit';
$app_list_strings['aow_email_to_list']['to'] = 'Para';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Ang mga Talaan';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Ang mga Bagong Talaan';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Ang mga Talaan ay Binago';
$app_list_strings['aow_run_when_list']['Always'] = 'Palagi';
$app_list_strings['aow_run_when_list']['On_Save'] = 'I-save Lamang sa';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Lamang ang scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Ang mga proyekto-ang mga template';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Ang proyektong gawain sa mga template';
$app_list_strings['relationship_type_list']['FS'] = 'Natapos sa Simula';
$app_list_strings['relationship_type_list']['SS'] = 'Simula sa Simula';
$app_list_strings['duration_unit_dom']['Days'] = 'Ang mga araw';
$app_list_strings['duration_unit_dom']['Hours'] = 'Ang mga oras';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Tingnan ang Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Tingnan ang Detalye';
$app_strings['LBL_CREATE_PROJECT'] = 'Lumikha ng proyekto';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longhitud';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitud';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Katayuan ng Geocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Tirahan';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mga Mapa';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Mga Mapa - Mga Tagapagmarka';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Mga Mapa - Mga Lugar';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Mga Mapa - Cache ng Address';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP ang mga partner';

$app_list_strings['map_unit_type_list']['mi'] = 'Mga Milya';
$app_list_strings['map_unit_type_list']['km'] = 'Ang mga kilometro';

$app_list_strings['map_module_type_list']['Accounts'] = 'Ang mga Akawnt';
$app_list_strings['map_module_type_list']['Contacts'] = 'Ang mga koneksyon';
$app_list_strings['map_module_type_list']['Cases'] = 'Ang mga kaso';
$app_list_strings['map_module_type_list']['Leads'] = 'Pamunuan';
$app_list_strings['map_module_type_list']['Meetings'] = 'Ang mga pagpupulong';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Ang mga pagkakataon';
$app_list_strings['map_module_type_list']['Project'] = 'Ang mga proyekto';
$app_list_strings['map_module_type_list']['Prospects'] = 'Ang mga pinapatamaan';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Ang account';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontak';
$app_list_strings['map_relate_type_list']['Cases'] = 'Ang kaso';
$app_list_strings['map_relate_type_list']['Leads'] = 'Pamunuan';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Ang pagpupulong';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Ang oportunidad';
$app_list_strings['map_relate_type_list']['Project'] = 'Proyekto';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Pinatatamaan';

$app_list_strings['marker_image_list']['accident'] = 'Disgrasya';
$app_list_strings['marker_image_list']['administration'] = 'Pangangasiwa';
$app_list_strings['marker_image_list']['agriculture'] = 'Agrikultura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Maliit na Eroplano';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Ang turista sa eroplano';
$app_list_strings['marker_image_list']['airport'] = 'Paliparan';
$app_list_strings['marker_image_list']['amphitheater'] = 'Ampiteatro';
$app_list_strings['marker_image_list']['apartment'] = 'Paupahan';
$app_list_strings['marker_image_list']['aquarium'] = 'Ang akwaryum';
$app_list_strings['marker_image_list']['arch'] = 'Ang arko';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Awdyo';
$app_list_strings['marker_image_list']['bank'] = 'Banko';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bangkong Pang-euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bangkong Pang-pound';
$app_list_strings['marker_image_list']['bar'] = 'Ang bar';
$app_list_strings['marker_image_list']['beach'] = 'Dalampasigan';
$app_list_strings['marker_image_list']['beautiful'] = 'Maganda';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parkingan ng Bisekleta';
$app_list_strings['marker_image_list']['big_city'] = 'Malaking Lungsod';
$app_list_strings['marker_image_list']['bridge'] = 'Tulay';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Mabagong Tulay';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Ang kable ng kotse';
$app_list_strings['marker_image_list']['car'] = 'Kotse';
$app_list_strings['marker_image_list']['car_rental'] = 'Rentahan ng Sasakyan';
$app_list_strings['marker_image_list']['carrepair'] = 'Ang kotse ay i-repir';
$app_list_strings['marker_image_list']['castle'] = 'Kastilyo';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedral';
$app_list_strings['marker_image_list']['chapel'] = 'Kapilya';
$app_list_strings['marker_image_list']['church'] = 'Simbahan';
$app_list_strings['marker_image_list']['city_square'] = 'Ang parisukat na lungsod';
$app_list_strings['marker_image_list']['cluster'] = 'Kumpol';
$app_list_strings['marker_image_list']['cluster_2'] = 'Ika-2 na Kumpol';
$app_list_strings['marker_image_list']['cluster_3'] = 'Ika-3 na Kumpol';
$app_list_strings['marker_image_list']['cluster_4'] = 'Ika-4 na Kumpol';
$app_list_strings['marker_image_list']['cluster_5'] = 'Ika-5 na Kumpol';
$app_list_strings['marker_image_list']['coffee'] = 'Kape';
$app_list_strings['marker_image_list']['community_centre'] = 'Sentro ng Komunidad';
$app_list_strings['marker_image_list']['company'] = 'Kompanya';
$app_list_strings['marker_image_list']['conference'] = 'Pagpupulong';
$app_list_strings['marker_image_list']['construction'] = 'Konstruksiyon';
$app_list_strings['marker_image_list']['convenience'] = 'Kaluwagan';
$app_list_strings['marker_image_list']['court'] = 'Korte';
$app_list_strings['marker_image_list']['cruise'] = 'Ang cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Palitan sa Pera';
$app_list_strings['marker_image_list']['customs'] = 'Mga Kustom';
$app_list_strings['marker_image_list']['cycling'] = 'Ang pagbebesikleta';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Dentista';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Ang Department Store';
$app_list_strings['marker_image_list']['disability'] = 'Disabilidad';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Ang Disabled Parking';
$app_list_strings['marker_image_list']['doctor'] = 'Doktor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Ang tali sa aso';
$app_list_strings['marker_image_list']['down'] = 'Pababa';
$app_list_strings['marker_image_list']['down_left'] = 'Pababa ang Kaliwa';
$app_list_strings['marker_image_list']['down_right'] = 'Pababa ang Kanan';
$app_list_strings['marker_image_list']['down_then_left'] = 'Pababa Pagkatapos Kaliwa';
$app_list_strings['marker_image_list']['down_then_right'] = 'Pababa Pagkatapos Kanan';
$app_list_strings['marker_image_list']['drugs'] = 'Mga Droga';
$app_list_strings['marker_image_list']['elevator'] = 'Elebeytor';
$app_list_strings['marker_image_list']['embassy'] = 'Embahada';
$app_list_strings['marker_image_list']['expert'] = 'Eksperto';
$app_list_strings['marker_image_list']['factory'] = 'Pagawaan';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Mga Batong Nahuhulog';
$app_list_strings['marker_image_list']['fast_food'] = 'Mabilis na Pagkain';
$app_list_strings['marker_image_list']['festival'] = 'Ang pista';
$app_list_strings['marker_image_list']['fjord'] = 'Ang Fjord
';
$app_list_strings['marker_image_list']['forest'] = 'Kagubatan';
$app_list_strings['marker_image_list']['fountain'] = 'Ang Fountain';
$app_list_strings['marker_image_list']['friday'] = 'Biyernes';
$app_list_strings['marker_image_list']['garden'] = 'Harden';
$app_list_strings['marker_image_list']['gas_station'] = 'Istasyon ng Gaas';
$app_list_strings['marker_image_list']['geyser'] = 'Ang Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Mga Regalo';
$app_list_strings['marker_image_list']['gourmet'] = 'Ang Gourmet
';
$app_list_strings['marker_image_list']['grocery'] = 'Ang Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Ang Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Ang helokopter';
$app_list_strings['marker_image_list']['highway'] = 'Ang highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Ang makasaysayang kwarter';
$app_list_strings['marker_image_list']['home'] = 'Ang Tahanan';
$app_list_strings['marker_image_list']['hospital'] = 'Ospital';
$app_list_strings['marker_image_list']['hostel'] = 'Ang Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Ang Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Ang Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Ang Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Ang Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Ang Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Ang Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Impormasyon';
$app_list_strings['marker_image_list']['justice'] = 'Hustisya';
$app_list_strings['marker_image_list']['lake'] = 'Ang lawa';
$app_list_strings['marker_image_list']['laundromat'] = 'Ang labahin';
$app_list_strings['marker_image_list']['left'] = 'Kaliwa';
$app_list_strings['marker_image_list']['left_then_down'] = 'Kaliwa Pagtapos Pababa';
$app_list_strings['marker_image_list']['left_then_up'] = 'Kaliwa Pagkatapos Taas';
$app_list_strings['marker_image_list']['library'] = 'Aklatan';
$app_list_strings['marker_image_list']['lighthouse'] = 'Mailaw na Bahay';
$app_list_strings['marker_image_list']['liquor'] = 'Ang alak';
$app_list_strings['marker_image_list']['lock'] = 'Sarado';
$app_list_strings['marker_image_list']['main_road'] = 'Pangunahing Daanan';
$app_list_strings['marker_image_list']['massage'] = 'Minsahe';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Tore ng Mobile na Telepono';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modernong Tore';
$app_list_strings['marker_image_list']['monastery'] = 'Monasteryo';
$app_list_strings['marker_image_list']['monday'] = 'Lunes';
$app_list_strings['marker_image_list']['monument'] = 'Monumento';
$app_list_strings['marker_image_list']['mosque'] = 'Mosque';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorsiklo';
$app_list_strings['marker_image_list']['museum'] = 'Museo';
$app_list_strings['marker_image_list']['music_live'] = 'Ang live na musika';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Ang Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palasyo';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramiko';
$app_list_strings['marker_image_list']['park'] = 'Parke';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Iparada at Sumakay';
$app_list_strings['marker_image_list']['parking'] = 'Parkingan';
$app_list_strings['marker_image_list']['photo'] = 'Litrato';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Mga Lugar na Hindi Nabisita';
$app_list_strings['marker_image_list']['places_visited'] = 'Mga Lugar na Nabisita';
$app_list_strings['marker_image_list']['playground'] = 'Palaruan';
$app_list_strings['marker_image_list']['police'] = 'Pulis';
$app_list_strings['marker_image_list']['port'] = 'Ang Port';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Ang kapangyarihan ng linya sa poste';
$app_list_strings['marker_image_list']['power_plant'] = 'Kapangyarihan ng plant';
$app_list_strings['marker_image_list']['power_substation'] = 'Kapangyarihan ng subistasyon';
$app_list_strings['marker_image_list']['public_art'] = 'Pampublikong Sining';
$app_list_strings['marker_image_list']['rain'] = 'Ulan';
$app_list_strings['marker_image_list']['real_estate'] = 'Ang Real Estate';
$app_list_strings['marker_image_list']['regroup'] = 'Ipagpatuloy';
$app_list_strings['marker_image_list']['resort'] = 'Ang Resort
';
$app_list_strings['marker_image_list']['restaurant'] = 'Kainan';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restawrang Pang-aprikano';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restawrang Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restawrang Pang-buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Pang-instik na Restawran';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restawran sa Isda';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Ang Restawran na may Fish Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Ang Restawran na may Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restawrang Pang-griyego';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Pang-indianong Restawran';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restawrang Pang-italyano';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restawrang Pang-hapones';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Ang Restawran na may Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Ang Restawran na may Koreano';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Ang Restawran na may Mediteraneo';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Ang Restawran na may Mehikano';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Ang Restawran na may Romantiko';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Ang Restawran na may Thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Ang Restawran na may Turkish';
$app_list_strings['marker_image_list']['right'] = 'Kanan';
$app_list_strings['marker_image_list']['right_then_down'] = 'Pakanan Tapos Pababa';
$app_list_strings['marker_image_list']['right_then_up'] = 'Kanan Pagtapos Taas';
$app_list_strings['marker_image_list']['saturday'] = 'Sabado';
$app_list_strings['marker_image_list']['school'] = 'Paaralan';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Ang Shopping Mall';
$app_list_strings['marker_image_list']['shore'] = 'Baybayin';
$app_list_strings['marker_image_list']['sight'] = 'Paningin';
$app_list_strings['marker_image_list']['small_city'] = 'Maliit na Lungsod';
$app_list_strings['marker_image_list']['snow'] = 'Niyebe';
$app_list_strings['marker_image_list']['spaceport'] = 'Ang Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Ang bilis ng isang daang piso';
$app_list_strings['marker_image_list']['speed_110'] = 'Ang bilis ng isang daan at sampu';
$app_list_strings['marker_image_list']['speed_120'] = 'Ang bilis ng isaang daan at dalawampu';
$app_list_strings['marker_image_list']['speed_130'] = 'Ang bilis na isang daan at tatlumpo';
$app_list_strings['marker_image_list']['speed_20'] = 'Ang bilis na dalawampu';
$app_list_strings['marker_image_list']['speed_30'] = 'Ang bilis na tatlumpo';
$app_list_strings['marker_image_list']['speed_40'] = 'Ang bilis na apatnapu';
$app_list_strings['marker_image_list']['speed_50'] = 'Ang bilis na limampu';
$app_list_strings['marker_image_list']['speed_60'] = 'Ang bilis na animnapu';
$app_list_strings['marker_image_list']['speed_70'] = 'Ang bilis na pitumpo';
$app_list_strings['marker_image_list']['speed_80'] = 'Ang bilis na walampu';
$app_list_strings['marker_image_list']['speed_90'] = 'Ang bilis na siyamnapu';
$app_list_strings['marker_image_list']['speed_hump'] = 'Ang bilis ng hump';
$app_list_strings['marker_image_list']['stadium'] = 'Istadyum';
$app_list_strings['marker_image_list']['statue'] = 'Istatwa';
$app_list_strings['marker_image_list']['steam_train'] = 'Ang Singaw ng Train';
$app_list_strings['marker_image_list']['stop'] = 'Itigil';
$app_list_strings['marker_image_list']['stoplight'] = 'Ang Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'Ang Subway';
$app_list_strings['marker_image_list']['sun'] = 'Linggo';
$app_list_strings['marker_image_list']['sunday'] = 'Linggo';
$app_list_strings['marker_image_list']['supermarket'] = 'Ang Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Ang Sinagog';
$app_list_strings['marker_image_list']['tapas'] = 'Ang Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Ang Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Ang Daanan ng Taxi';
$app_list_strings['marker_image_list']['teahouse'] = 'Ang Bahay Tsaa';
$app_list_strings['marker_image_list']['telephone'] = 'Telepono';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Ang Templo ng Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Ang Terrace';
$app_list_strings['marker_image_list']['text'] = 'I-text';
$app_list_strings['marker_image_list']['theater'] = 'Teatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Ang Tema ng Parke';
$app_list_strings['marker_image_list']['thursday'] = 'Huwebes';
$app_list_strings['marker_image_list']['toilets'] = 'Ang mga palikuran';
$app_list_strings['marker_image_list']['toll_station'] = 'Ang Toll na Istasyon';
$app_list_strings['marker_image_list']['tower'] = 'Tore';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Ang Kamera sa Pagpapatupad ng Trapiko';
$app_list_strings['marker_image_list']['train'] = 'Tren';
$app_list_strings['marker_image_list']['tram'] = 'Ang Tram';
$app_list_strings['marker_image_list']['truck'] = 'Trak';
$app_list_strings['marker_image_list']['tuesday'] = 'Martes';
$app_list_strings['marker_image_list']['tunnel'] = 'Lagusan';
$app_list_strings['marker_image_list']['turn_left'] = 'Lumiko ng Pakaliwa';
$app_list_strings['marker_image_list']['turn_right'] = 'Lumiko Pakanan';
$app_list_strings['marker_image_list']['university'] = 'Unibersidad';
$app_list_strings['marker_image_list']['up'] = 'Pataas';
$app_list_strings['marker_image_list']['up_left'] = 'Taas sa Kaliwa';
$app_list_strings['marker_image_list']['up_right'] = 'Taas sa Kanan';
$app_list_strings['marker_image_list']['up_then_left'] = 'Taas pagkatapos sa kaliwa';
$app_list_strings['marker_image_list']['up_then_right'] = 'Taas pagkatapos sa Kanan';
$app_list_strings['marker_image_list']['vespa'] = 'Ang Vespa';
$app_list_strings['marker_image_list']['video'] = 'Ang Video';
$app_list_strings['marker_image_list']['villa'] = 'Ang Villa';
$app_list_strings['marker_image_list']['water'] = 'Tubig';
$app_list_strings['marker_image_list']['waterfall'] = 'Talon';
$app_list_strings['marker_image_list']['watermill'] = 'Ang Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Ang Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Ang Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'Miyerkules';
$app_list_strings['marker_image_list']['wifi'] = 'Ang Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Ang Hangin sa Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Ang Windmill';
$app_list_strings['marker_image_list']['winery'] = 'Ang Gawaan ng alak';
$app_list_strings['marker_image_list']['work_office'] = 'Ang Trabaho sa Opisina';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Ang Sayt ng World Heritage';
$app_list_strings['marker_image_list']['zoo'] = 'Ang zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Wala sa opisina';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Ang isang pulong';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Muling mag-iskedyul';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Mangyaring magpasok ng impormasyon sa muling pag-iskedyul';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Petsa:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Dahilan:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Mangyaring pumili ng petsang balido';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Mangyaring pumili ng isang rason';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Muling mag-iskedyul';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Kasaysayan sa nasubukang pagtawag';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Mga Nasubukang Pagtawag';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Ang seguridad ng grupo';
$app_strings['LBL_ROLE'] = 'Tungkulin';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Ang papalabas ng mga email akawnt';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Ang Sosyal na mga Detalye sa Feed';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Salain';

$app_strings['LBL_COLLECTION_TYPE'] = 'Klase';

$app_strings['LBL_ADD_TAB'] = 'Idagdag sa tab';
$app_strings['LBL_EDIT_TAB'] = 'I-edit ang mga tabs';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Ipasok ang pangalan ng dashboard:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Ang bilang ng mga haligi:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Sigurago kaba na gusto mong tanggalin ang';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'ang dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Magdagdag sa pahina ng dashboard';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Alisin ang kasalukuyang pahina ng dashboard';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Palitan ng pangalan ng pahina ng dashboard';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Ang mga gawain',
    'Meetings' => 'Ang mga pagpupulong',
    'Calls' => 'Ang mga tawag',
    'Notes' => 'Ang mga tala',
    'Emails' => 'Ang mga email'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Ang Parte ng Editor sa Template';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Na-click mo ang layo mula sa patlang na iyong ini-edit nang hindi nag-i-seyb ito. 
I-click ang ok kung masaya ka na mawala ang iyong pagbabago, o kanselahin kung nais mong magpatuloy sa pag-edit";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Mayroong kamalian sa paglo-load ng patlang. Ang iyong sesyon ay maaaring nagtapos na. Mangyaring mag-log in muli para maisayos ito";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Ang mga benta',
    'getAccountsSpotsData' => 'Ang mga Akawnt',
    'getLeadsSpotsData' => 'Pamunuan',
    'getServiceSpotsData' => 'Ang Serbisyo',
    'getMarketingSpotsData' => 'Ang pamimili',
    'getMarketingActivitySpotsData' => 'Ang Aktibidad sa Marketing',
    'getActivitiesSpotsData' => 'Ang mga aktibidad',
    'getQuotesSpotsData' => 'Mga panipi'
);

$app_list_strings['moduleList']['Spots'] = 'Mga Spot';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Ang mga oras ng negosyo';
$app_list_strings['business_hours_list']['0'] = 'Ang 12am';
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
$app_list_strings['day_list']['Monday'] = 'Lunes';
$app_list_strings['day_list']['Tuesday'] = 'Martes';
$app_list_strings['day_list']['Wednesday'] = 'Miyerkules';
$app_list_strings['day_list']['Thursday'] = 'Huwebes';
$app_list_strings['day_list']['Friday'] = 'Biyernes';
$app_list_strings['day_list']['Saturday'] = 'Sabado';
$app_list_strings['day_list']['Sunday'] = 'Linggo';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Ang sulat';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Ang Larawan';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Ang Tanawin';


$app_list_strings['moduleList']['SurveyResponses'] = 'Ang pag Susuri sa mga Pagtugon';
$app_list_strings['moduleList']['Surveys'] = 'Mga Pagsusuri';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Ang Pagsusuri sa mga Pagtugon sa Katanungan';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Ang mga Pagsusuri sa Katanungan';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Ang Pagsusuri sa mga Pagppipilian ng Katanungan';
$app_list_strings['survey_status_list']['Draft'] = 'Naka-draft';
$app_list_strings['survey_status_list']['Public'] = 'Publiko';
$app_list_strings['survey_status_list']['Closed'] = 'Sarado';
$app_list_strings['surveys_question_type']['Text'] = 'I-text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Kahon ng teksto';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Tsekbox';
$app_list_strings['surveys_question_type']['Radio'] = 'Ang radyo';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Naka-dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Ang Maramihan na pag pili';
$app_list_strings['surveys_question_type']['Matrix'] = 'Ang Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'Ang Oras sa Petsa';
$app_list_strings['surveys_question_type']['Date'] = 'Petsa';
$app_list_strings['surveys_question_type']['Scale'] = 'Ang Iskala';
$app_list_strings['surveys_question_type']['Rating'] = 'Ang Marka';
$app_list_strings['surveys_matrix_options'][0] = 'Nasiyahan';
$app_list_strings['surveys_matrix_options'][1] = 'Wala nang nasiyahan o hindi nasiyahan';
$app_list_strings['surveys_matrix_options'][2] = 'Hindi nasiyahan';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Ang Nakabinbin na Kumpirmasyon sa opt in, Kumpirmahin ang opt na hindi napadala';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Kumpirmahin ang opt sa email pinadala ay Palya';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Nakabinbin Kumpirmahin ang opt in, Kumpirmahin ang opt in na ipinadala';
$app_strings['LBL_OPT_IN'] = 'Ang sumali';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Kumpirmahin ang pumili sa';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Piniling palabasin';
$app_strings['LBL_OPT_IN_INVALID'] = 'Hindi wasto';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Huwag Paganahin',
    'opt-in' => 'Ang Opt ay nasa loob',
    'confirmed-opt-in' => 'Nakumpirmang Pagpili na Papasok'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Hindi Opt Sa',
    'opt-in' => 'Ang Opt ay nasa loob',
    'confirmed-opt-in' => 'Nakumpirmang Pagpili na Papasok'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Ang pagkumpirma sa opt email ay nadagdagan para sa pila ng email %s email (mga) address. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Hindi makapag padala ang email para sa %s email (mga) address, dahil sila ay hindi sumali sa. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'Ang email address na %s ay hindi nagkakaroon ng isang balidong id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Ang dalawang sanhi ng pagpapatunay ay nabigo';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Ang dalawang sanhi na pagpapatunay ng pagpapadala ng kowd.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Two Factor Authentication code failed to send.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Salamat sa pagsusumite ng iyong intere.';

$app_strings['ERR_IP_CHANGE'] = 'Your session was terminated due to a significant change in your IP address';
$app_strings['ERR_RETURN'] = 'Return to Home';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Grant',
    'client_credentials' => 'Ang Kredensyal ng mga kliyente',
    'implicit' => 'Ang implicit',
    'authorization_code' => 'Awtorisadi na Code'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => ' mga minuto ',
    'hour' => ' mga oras',
    'day' => 'mga araw',
    'week' => 'mga linggo',
    'month' => 'mga buwan',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personal',
    'shared' => 'Ibinahagi',
    'group' => 'Grupo',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Nakakonekta',
    'failed' => 'Pumalya',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Nasa pag-unlad',
    'success' => 'Pagtatagumpay',
    'warning' => 'Babala',
    'error' => 'Error',
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
$app_strings['LBL_CLICK_HERE'] = 'Pindutin dito';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Maghanap';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Maghanap';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Maghanap';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Nakaraan';
$app_strings['LBL_SEARCH_NEXT'] = 'Ang susunod';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' of ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Gamitin ang paunang paghahanap';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Gamitin ang basic na paghahanap';

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

$app_strings['LBL_KEY'] = 'Susi';
$app_strings['LBL_VALUE'] = 'Halaga';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Paglagda';

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
