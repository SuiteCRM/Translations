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
    'language_pack_name' => 'Cebuano (Philippines) - ceb_PH',
    'moduleList' => array(
        'Home' => 'Home',
        'ResourceCalendar' => 'Kapanguhaan kalendaryo',
        'Contacts' => 'Kontak',
        'Accounts' => 'Mga Account',
        'Alerts' => 'Alerto',
        'Opportunities' => 'Mga oportunidad',
        'Cases' => 'Mga Kaso',
        'Notes' => 'Tima-ilhan',
        'Calls' => 'Tawag',
        'TemplateSectionLine' => 'Plaka Sikyon na linya',
        'Calls_Reschedule' => 'Usab ang schedule sa panawag',
        'Emails' => 'Imong Email',
        'EAPM' => 'EAPM',
        'Meetings' => 'Mag Kapunungan',
        'Tasks' => 'Naay isugo',
        'Calendar' => 'Kalendaryo',
        'Leads' => 'Nag-una',
        'Currencies' => 'Kwarta',
        'Activities' => 'Kalihukan',
        'Bugs' => 'Manananap',
        'Feeds' => 'RSS',
        'iFrames' => 'Akong Sites',
        'TimePeriods' => 'Orasa na mag Periods',
        'ContractTypes' => 'Kontrata gusto',
        'Schedulers' => 'Skidyol ninyo',
        'Project' => 'Mga Proyekto',
        'ProjectTask' => 'Dunay Buhaton',
        'Campaigns' => 'Mangompanya',
        'CampaignLog' => 'Mangumpanya sa Log',
        'Documents' => 'Mga dokumento',
        'DocumentRevisions' => 'Papel na Rebisyon',
        'Connectors' => 'Mga linya',
        'Roles' => 'Mga role',
        'Notifications' => 'Tim-ilhan',
        'Sync' => 'Sync',
        'Users' => 'Tig gamit',
        'Employees' => 'Mga Trabahante',
        'Administration' => 'Mga Admin',
        'ACLRoles' => 'Mga role',
        'InboundEmail' => 'Regards imong Email',
        'Releases' => 'Makuha na',
        'Prospects' => 'Targetanan',
        'Queues' => 'Queues',
        'EmailMarketing' => 'Email sa Merkado',
        'EmailTemplates' => 'Email - Plaka',
        'ProspectLists' => 'Targetanan sa listahan',
        'SavedSearch' => 'Ge luwas ang ge search',
        'UpgradeWizard' => 'Gepanindut ang barang',
        'Trackers' => 'Taga track',
        'TrackerSessions' => 'Taga track og makig kita',
        'TrackerQueries' => 'Taga track ng Queries',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Diaryo',
        'SugarFeed' => 'SuiteCRM freed',
        'SugarFavorites' => 'SuiteCRM Paborito',

        'OAuthKeys' => 'OAuth Kunsumer Yabi',
        'OAuthTokens' => 'OAuth dulaan na barya',
        'OAuth2Clients' => 'OAuth Kliyente',
        'OAuth2Tokens' => 'OAuth dulaan na barya',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Home',
        'Dashboard' => 'DashTabla',
        'Contacts' => 'Kontak',
        'Accounts' => 'Account',
        'Opportunities' => 'Naay chance',
        'Cases' => 'Kaso',
        'Notes' => 'Libro',
        'Calls' => 'Tawag',
        'Emails' => 'Email',
        'EmailTemplates' => 'Email plaka',
        'Meetings' => 'Mag tipok',
        'Tasks' => 'Sugoun',
        'Calendar' => 'Kalendaryo',
        'Leads' => 'Mag una',
        'Activities' => 'Naat Kalingawan',
        'Bugs' => 'Mananap',
        'KBDocuments' => 'KBDocument',
        'Feeds' => 'RSS',
        'iFrames' => 'Akong Sites',
        'TimePeriods' => 'Oras na mag period',
        'Project' => 'Himoun',
        'ProjectTask' => 'Himoun ang ge sugo',
        'Prospects' => 'Targetanan',
        'Campaigns' => 'Mangompanya',
        'Documents' => 'Dokumento',
        'Sync' => 'Sync',
        'Users' => 'Tig gamit',
        'SugarFavorites' => 'SuiteCRM Paborito',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Oo',
        '2' => 'Dili',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analist',
        'Competitor' => 'Kumbati hahah',
        'Customer' => 'Kustomer',
        'Integrator' => 'Integrator',
        'Investor' => 'Tig inverst',
        'Partner' => 'Kauban',
        'Press' => 'Pinduton',
        'Prospect' => 'Prospect',
        'Reseller' => 'Tig baligya',
        'Other' => 'Lahi',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Apparel',
        'Banking' => 'Nagbanking',
        'Biotechnology' => 'Bioteknolohiya',
        'Chemicals' => 'Kemikals',
        'Communications' => 'Nag tawganay',
        'Construction' => 'Nag buhat og',
        'Consulting' => 'Nag kunsulta',
        'Education' => 'Edukasyon',
        'Electronics' => 'Elektroniks',
        'Energy' => 'Abtik',
        'Engineering' => 'Tig himo',
        'Entertainment' => 'Taga Balita',
        'Environmental' => 'Atong Enbayronment',
        'Finance' => 'Tig Lista',
        'Government' => 'Gobyerno',
        'Healthcare' => 'Taga ayo',
        'Hospitality' => 'Pagka buotan',
        'Insurance' => 'Tig Bayad og naay ma bangga',
        'Machinery' => 'Makinarya',
        'Manufacturing' => 'Mga mo manufactur',
        'Media' => 'Mga medya',
        'Not For Profit' => 'Dili ni Profit',
        'Recreation' => 'Buhat balik',
        'Retail' => 'Balik og lista',
        'Shipping' => 'Nagpadala',
        'Technology' => 'Teknology',
        'Telecommunications' => 'Teletawganay',
        'Transportation' => 'Pag uli sainyo og pag balik',
        'Utilities' => 'Utilitis',
        'Other' => 'Lahi',
    ),
    'lead_source_default_key' => 'Imong kaugalingong gebuhat',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Bugnaw tawag',
        'Existing Customer' => 'Naay kustomer',
        'Self Generated' => 'Imong kaugalingong gebuhat',
        'Employee' => 'Trabahante',
        'Partner' => 'Kauban',
        'Public Relations' => 'Publiko Manag-uban',
        'Direct Mail' => 'Daling sulat',
        'Conference' => 'Konperins',
        'Trade Show' => 'Pagbinayloay ang katag',
        'Web Site' => 'Web Tan aw',
        'Word of mouth' => 'Mga word ginak. saimong baba',
        'Email' => 'Email',
        'Campaign' => 'Mangompanya',
        'Other' => 'Lahi',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Nakit-ang Negosyo',
        'New Business' => 'Bag-ong Negosyo',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Lahing lugar',
        'Investment' => 'Nag invest',
        'Expected_Revenue' => 'Klarong Bag-ong lugar',
        'Budget' => 'Nay Budget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Unang nag Disisyon Maghimoay',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Unang nag Disisyon Maghimoay',
        'Business Decision Maker' => 'Negosyo Nagbout Manghimoay',
        'Business Evaluator' => 'Negosyong Nag-ebalwit',
        'Technical Decision Maker' => 'Teknilal Nagdesisyon Magbuhat',
        'Technical Evaluator' => 'Tagacheck og teknikal',
        'Executive Sponsor' => 'Eksikyutib Tigbayad',
        'Influencer' => 'Influencer',
        'Other' => 'Lahi',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Unang ge Kontak',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Unang ge Kontak',
        'Alternate Contact' => 'Lahi-lahing ge Kontak',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Pukot 15',
        'Net 30' => 'Pukot 30',
    ),
    'sales_stage_default_key' => 'Master sa tan aw',
    'sales_stage_dom' => array(
        'Prospecting' => 'Master sa tan aw',
        'Qualification' => 'Pag apil',
        'Needs Analysis' => 'Gustong tighunahuna',
        'Value Proposition' => 'Balyo sa ge propos',
        'Id. Decision Makers' => 'Ge check ang desisyon sa pagbuhat',
        'Perception Analysis' => 'Prensipyo nimong Maghunahuna',
        'Proposal/Price Quote' => 'Nagpropos/Baligya Kot',
        'Negotiation/Review' => 'Nagsabot/Nagbuhat',
        'Closed Won' => 'Siradong ni daog',
        'Closed Lost' => 'Siradong nawala',
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
        'Call' => 'Tawag',
        'Meeting' => 'Mag tipok',
        'Task' => 'Sugoun',
        'Email' => 'Email',
        'Note' => 'Libro',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Mister.',
        'Ms.' => 'Ms.',
        'Mrs.' => 'Mrs.',
        'Miss' => 'Miss',
        'Dr.' => 'Doc.',
        'Prof.' => 'Prof.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minuto prayor',
        300 => '5 minuto prayor',
        600 => '10 minuto prayor',
        900 => '15 minuto prayor',
        1800 => '30 minuto prayor',
        3600 => '1 kaoras prayor',
        7200 => '2 kaoras prayor',
        10800 => '3 kaoras prayor',
        18000 => '5 kaoras prayor',
        86400 => '1 ka adlaw prayor',
    ),

    'task_priority_default' => 'Katunga nga kadak-onon',
    'task_priority_dom' => array(
        'High' => 'Taas o Habog',
        'Medium' => 'Katunga nga kadak-onon',
        'Low' => 'Hinay',
    ),
    'task_status_default' => 'Wala pa na sugdan',
    'task_status_dom' => array(
        'Not Started' => 'Wala pa na sugdan',
        'In Progress' => 'Ge prosiso',
        'Completed' => 'Nahumana',
        'Pending Input' => 'Pundo ang gebuhat',
        'Deferred' => 'Na Agian',
    ),
    'meeting_status_default' => 'Plano',
    'meeting_status_dom' => array(
        'Planned' => 'Plano',
        'Held' => 'Naay Buhaton',
        'Not Held' => 'Walay buhaton',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Lahi',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Plano',
    'call_status_dom' => array(
        'Planned' => 'Plano',
        'Held' => 'Naay Buhaton',
        'Not Held' => 'Walay buhaton',
    ),
    'call_direction_default' => 'Gawasang bawn',
    'call_direction_dom' => array(
        'Inbound' => 'Inbawn',
        'Outbound' => 'Gawasang bawn',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Bag o',
        'Assigned' => 'Naay asayn',
        'In Process' => 'Ge prosiso',
        'Converted' => 'Ge konbert',
        'Recycled' => 'Ge bag o',
        'Dead' => 'Patay',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Taas o Habog',
        'P2' => 'Katunga nga kadak-onon',
        'P3' => 'Hinay',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Regular pag gamit',
        'Administrator' => 'Taga pamahala',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktib',
        'Inactive' => 'Dili aktib',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Email Code',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktib',
        'Terminated' => 'Tangtangunon',
        'Leave of Absence' => 'Nihawa sa Absence',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Taas o Habog',
        'Medium' => 'Katunga nga kadak-onon',
        'Low' => 'Hinay',
    ),
    'project_task_priority_default' => 'Katunga nga kadak-onon',

    'project_task_status_options' => array(
        'Not Started' => 'Wala pa na sugdan',
        'In Progress' => 'Ge prosiso',
        'Completed' => 'Nahumana',
        'Pending Input' => 'Pundo ang gebuhat',
        'Deferred' => 'Na Agian',
    ),
    'project_task_utilization_options' => array(
        '0' => 'wala',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Tig drap',
        'In Review' => 'Nag balik basa',
        'Underway' => 'Sa ilalom ni agi',
        'On_Hold' => 'Ge Gunitan usa',
        'Completed' => 'Nahumana',
    ),
    'project_status_default' => 'Tig drap',

    'project_duration_units_dom' => array(
        'Days' => 'Mga Adlaw',
        'Hours' => 'Oras',
    ),

    'activity_status_type_dom' => array(
        '' => 'Wala',
        'active' => 'Aktib',
        'inactive' => 'Dili aktib',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Mga Account',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Account',
        'Opportunities' => 'Naay chance',
        'Cases' => 'Kaso',
        'Leads' => 'Mag una',
        'Contacts' => 'Kontak', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Mananap',
        'Project' => 'Himoun',

        'Prospects' => 'Targetanan',
        'ProjectTask' => 'Himoun ang ge sugo',

        'Tasks' => 'Sugoun',

        'AOS_Contracts' => 'Kontrata',
        'AOS_Invoices' => 'Resibo',
        'AOS_Quotes' => 'Kutlo',
        'AOS_Products' => 'Produkto',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Account',
        'Contacts' => 'Kontak',
        'Opportunities' => 'Naay chance',
        'Campaigns' => 'Mangompanya',
        'Tasks' => 'Sugoun',
        'Emails' => 'Email',

        'Bugs' => 'Mananap',
        'Project' => 'Himoun',
        'ProjectTask' => 'Himoun ang ge sugo',
        'Prospects' => 'Targetanan',
        'Cases' => 'Kaso',
        'Leads' => 'Mag una',

        'Meetings' => 'Mag tipok',
        'Calls' => 'Tawag',

        'AOS_Contracts' => 'Kontrata',
        'AOS_Invoices' => 'Resibo',
        'AOS_Quotes' => 'Kutlo',
        'AOS_Products' => 'Produkto',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Account',
        'Contacts' => 'Kontak',
        'Tasks' => 'Sugoun',
        'Opportunities' => 'Naay chance',

        'Bugs' => 'Mananap',
        'Cases' => 'Kaso',
        'Leads' => 'Mag una',

        'Project' => 'Himoun',
        'ProjectTask' => 'Himoun ang ge sugo',

        'Prospects' => 'Targetanan',

        'AOS_Contracts' => 'Kontrata',
        'AOS_Invoices' => 'Resibo',
        'AOS_Quotes' => 'Kutlo',
        'AOS_Products' => 'Produkto',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Mga Quote',
        'AOS_Invoices' => 'Mga Resibo',
        'AOS_Contracts' => 'Mga kontrata',
    ),
    'issue_priority_default_key' => 'Katunga nga kadak-onon',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Taas o Habog',
        'Medium' => 'Katunga nga kadak-onon',
        'Low' => 'Hinay',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Nadawat',
        'Duplicate' => 'Duplikit',
        'Closed' => 'Sirado',
        'Out of Date' => 'Walay date',
        'Invalid' => 'Dili pwede',
    ),

    'issue_status_default_key' => 'Bag o',
    'issue_status_dom' => array(
        'New' => 'Bag o',
        'Assigned' => 'Naay asayn',
        'Closed' => 'Sirado',
        'Pending' => 'Na stack up',
        'Rejected' => 'Dili pwede',
    ),

    'bug_priority_default_key' => 'Katunga nga kadak-onon',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Taas o Habog',
        'Medium' => 'Katunga nga kadak-onon',
        'Low' => 'Hinay',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Nadawat',
        'Duplicate' => 'Duplikit',
        'Fixed' => 'Ayuhon',
        'Out of Date' => 'Walay date',
        'Invalid' => 'Dili pwede',
        'Later' => 'Unya na',
    ),
    'bug_status_default_key' => 'Bag o',
    'bug_status_dom' => array(
        'New' => 'Bag o',
        'Assigned' => 'Naay asayn',
        'Closed' => 'Sirado',
        'Pending' => 'Na stack up',
        'Rejected' => 'Dili pwede',
    ),
    'bug_type_default_key' => 'Mananap',
    'bug_type_dom' => array(
        'Defect' => 'Naay guba',
        'Feature' => 'Eh pasikat',
    ),
    'case_type_dom' => array(
        'Administration' => 'Mga Admin',
        'Product' => 'Produkto',
        'User' => 'Tig gamit',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Naa sa sulod',
        'Forum' => 'Porum',
        'Web' => 'Web',
        'InboundEmail' => 'Email',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Mga Account',
        'Activities' => 'Kalihukan',
        'Bugs' => 'Manananap',
        'Calendar' => 'Kalendaryo',
        'Calls' => 'Tawag',
        'Campaigns' => 'Mangompanya',
        'Cases' => 'Mga Kaso',
        'Contacts' => 'Kontak',
        'Currencies' => 'Kwarta',
        'Dashboard' => 'DashTabla',
        'Documents' => 'Mga dokumento',
        'Emails' => 'Imong Email',
        'Feeds' => 'Mga Feed',
        'Forecasts' => 'Mga Forecast',
        'Help' => 'Nangita og tabang',
        'Home' => 'Home',
        'Leads' => 'Nag-una',
        'Meetings' => 'Mag Kapunungan',
        'Notes' => 'Tima-ilhan',
        'Opportunities' => 'Mga oportunidad',
        'Outlook Plugin' => 'Wala ni tan aw Plugin',
        'Projects' => 'Mga Proyekto',
        'Quotes' => 'Mga Quote',
        'Releases' => 'Makuha na',
        'RSS' => 'RSS',
        'Studio' => 'Studyo',
        'Upgrade' => 'Bag-ohon',
        'Users' => 'Tig gamit',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Mag plano',
        'Active' => 'Aktib',
        'Inactive' => 'Dili aktib',
        'Complete' => 'Kompleto',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Telebaligya',
        'Mail' => 'Mail',
        'Email' => 'Email',
        'Print' => 'Print',
        'Web' => 'Web',
        'Radio' => 'Radyo',
        'Television' => 'Telebesyon',
        'NewsLetter' => 'Mga Balitang na sulat',
        'Survey' => 'Panuhid',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Simana',
        'Monthly' => 'Buwan',
        'Quarterly' => 'Ika upat',
        'Annually' => 'Taga adlaw',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Enero',
        '2' => 'Febrero',
        '3' => 'Marso',
        '4' => 'Abril',
        '5' => 'Mayo',
        '6' => 'Hunyo',
        '7' => 'Hulyo',
        '8' => 'Augosto',
        '9' => 'Septyembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Deciembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Mayo',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Aug',
        '9' => 'Sep',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Dec',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Domingo',
        '2' => 'Lunes',
        '3' => 'Martes',
        '4' => 'Merkules',
        '5' => 'Huwebes',
        '6' => 'Biernes',
        '7' => 'Sabado',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Sun',
        '2' => 'Mon',
        '3' => 'Tue',
        '4' => 'Wed',
        '5' => 'Thu',
        '6' => 'Fri',
        '7' => 'Sat',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'buntag',
        'pm' => 'hapon',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'BUNTAG',
        'PM' => 'HAPON',
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
        'Active' => 'Aktib',
        'Inactive' => 'Dili aktib',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Na pasa',
        'archived' => 'Maynakuha',
        'draft' => 'Tig drap',
        'inbound' => 'Inbawn',
        'campaign' => 'Mangompanya',
    ),
    'dom_email_status' => array(
        'archived' => 'Maynakuha',
        'closed' => 'Sirado',
        'draft' => 'Sa ge Guhit',
        'read' => 'Basa',
        'replied' => 'Ni reply',
        'sent' => 'Na pasa',
        'send_error' => 'Nag send og Mali',
        'unread' => 'Wala ge basa',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Maynakuha',
    ),

    'dom_email_server_type' => array(
        '' => 'Wala',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => 'Wala',
        'createcase' => 'Nag buhat og kaso',
        'bounce' => 'Nag untol-untol Pag-gunit',
    ),
    'dom_email_distribution' => array(
        '' => 'Wala',
        'direct' => 'Direkta ma Butang',
        'roundRobin' => 'Lingin-Robin',
        'leastBusy' => 'Gamay-Busy',
    ),
    'dom_email_errors' => array(
        1 => 'Ikaw ray maka pili og isa nga mo gamit anang Direkta Assigning items.',
        2 => 'Ikaw dapat ang mo assign og check sa mga items na kailangan sa Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Oo',
        'bool_false' => 'Dili',
    ),
    'dom_int_bool' => array(
        1 => 'Oo',
        0 => 'Dili',
    ),
    'dom_switch_bool' => array(
        'on' => 'Oo',
        'off' => 'Dili',
        '' => 'Dili',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM Email Kleyente',
        'mailto' => 'Sa gawas na email kleyente',
    ),

    'dom_editor_type' => array(
        'none' => 'Derikta HTML',
        'tinymce' => 'GamayMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Dili pwede nga Email Pormat',
        'html' => 'HTML email',
        'plain' => 'Limpyo na Teks Email',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Sauna mo dagan og oras, Dili patyon',
        'ready' => 'Ready',
        'in progress' => 'Ge prosiso',
        'failed' => 'Hagbong',
        'completed' => 'Nahumana',
        'no curl' => 'Wala ni dagan: Walay cURL abelabol',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktib',
        'Inactive' => 'Dili aktib',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minuto',
        'hour' => 'Oras',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Magmamalengki',
        'Knowledege Base' => 'Ang basehan sa nahibaw-an',
        'Sales' => 'Baligya',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Maynakuha',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Merkadong Kulateral',
        'Product Brochures' => 'Produkto naka butang sa papel',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktib',
        'Draft' => 'Tig drap',
        'FAQ' => 'FAQ',
        'Expired' => 'Ekspire',
        'Under Review' => 'Ge review ang nasa ilalom',
        'Pending' => 'Na stack up',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Ang mail e merge',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Lisensya Tugtanan',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Nadawat',
        'decline' => 'Wala ge dawat',
        'tentative' => 'Dila pa sure',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Nadawat',
        'decline' => 'Wala dawata',
        'tentative' => 'Dila pa sure',
        'none' => 'Wala',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Wala',
        'Daily' => 'Taga Adlaw',
        'Weekly' => 'Simana',
        'Monthly' => 'Buwan',
        'Yearly' => 'Taga tuig',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => '(mga) adlaw',
        'Weekly' => 'mga semana',
        'Monthly' => 'mga buwan',
        'Yearly' => 'mga tuig',
    ),

    'duration_dom' => array(
        '' => 'Wala',
        '900' => '15 ka minutos',
        '1800' => '30 ka minutos',
        '2700' => 'Kwarentay singko ka minutos',
        '3600' => '1 ka oras',
        '5400' => '1.5 kaoras',
        '7200' => '2 ka oras',
        '10800' => '3 ka oras',
        '21600' => 'Unom ka oras',
        '86400' => 'Usa ka adlaw',
        '172800' => 'Duha ka adlaw',
        '259200' => '3 ka adlaw',
        '604800' => 'Usa ka semana',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Sinugdanan',
        'seed' => 'Liso',
        'exempt_domain' => 'Pagsumpo sa Listahan - ni Domain',
        'exempt_address' => 'Pagsumpo sa Listahan - ni Email Address',
        'exempt' => 'Pagsumpo sa Listahan - ni Id',
        'test' => 'Suwayi',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktib',
        'inactive' => 'Dili aktib',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Nasend na ang mensahe/Gisulayan',
        'send error' => 'Nag-bounce nga mga Mensahe, og uban pa',
        'invalid email' => 'Nag-bounce nga mga Mensahe, Dili balido ang email',
        'link' => 'Pislita gamit ang link',
        'viewed' => 'Mga natan.aw na nga mga Mensahe',
        'removed' => 'Napili nga pagawson',
        'lead' => 'Nahimo na ang mga Lead',
        'contact' => 'Nabuhat na ang mga Contact',
        'blocked' => 'Pagsumpo gamit ang address o domain',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontak',
        'Users' => 'Tig gamit',
        'Prospects' => 'Targetanan',
        'Leads' => 'Nag-una',
        'Accounts' => 'Mga Account',
    ),
    'merge_operators_dom' => array(
        'like' => 'Naglangkob og mga',
        'exact' => 'Pareha kaayo',
        'start' => 'Nag-una og',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Oo',
        'false' => 'Dili',
        'required' => 'Kinahanglan',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Wala paganaha',
        1 => 'Gipagana',
        2 => 'Filter',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Taas o Habog',
        'medium' => 'Katunga nga kadak-onon',
        'low' => 'Hinay',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Wala pa na sugdan',
        'inprogress' => 'Ge prosiso',
        'completed' => 'Nahumana',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Padak-an ang Legend',
        'collapselegend' => 'Nahugno nga Legend',
        'clickfordrilldown' => 'Pislita para sa Drilldown',
        'detailview' => 'Uban pang mga detalye...',
        'piechart' => 'Chart nga naka Pie Graph',
        'groupchart' => 'Grupo nga Chart',
        'stackedchart' => 'Nag ipon og chart',
        'barchart' => 'Puthaw na Chart',
        'horizontalbarchart' => 'Istrit na puthaw chart',
        'linechart' => 'Linya nga chart',
        'noData' => 'Data walay available',
        'print' => 'Print',
        'pieWedgeName' => 'seksyon',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktib',
        'Inactive' => 'Dili aktib',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Isa ka Quote (&#39;)',
        '"' => 'Duha ka Qoute (&#34;)',
        '' => 'Wala',
        'other' => 'Lahi:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => 'l',
        'other' => 'Lahi:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Bag o nga bintana',
        '_self' => 'Pareha na bintana',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Ayaw eh auto represh',
        '30' => 'Taga 30 segundos',
        '60' => 'Taga 1 minuto',
        '180' => 'Taga 3 minutos',
        '300' => 'Taga 5 minuto',
        '600' => 'Taga 10 minuto',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Dil jid',
        '30' => 'Taga 30 segundos',
        '60' => 'Taga 1 minuto',
        '180' => 'Taga 3 minutos',
        '300' => 'Taga 5 minuto',
        '600' => 'Taga 10 minuto',
    ),
    'date_range_search_dom' => array(
        '=' => 'Pareha',
        'not_equal' => 'Dili sa',
        'greater_than' => 'Kabag-ohan',
        'less_than' => 'Sauna',
        'last_7_days' => 'Las 7 ka adlaw',
        'next_7_days' => 'Sunod 7 ka adlaw',
        'last_30_days' => 'Last 30 ka adlaw',
        'next_30_days' => 'Sunod 30 ka adlaw',
        'last_month' => 'Last Sa isa ka bulan',
        'this_month' => 'Karung buwana',
        'next_month' => 'Sunod buwan',
        'last_year' => 'Las na tuig',
        'this_year' => 'Karung tuiga',
        'next_year' => 'Sunod tuig',
        'between' => 'Ay mag ka pareha',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Pareha',
        'not_equal' => 'Dili equal',
        'greater_than' => 'Dakoa pa kaysa',
        'greater_than_equals' => 'Mas dako o Pareha sa',
        'less_than' => 'Mas gamay pa sa',
        'less_than_equals' => 'Mas gamay pa o Pareha sa',
        'between' => 'Ay mag ka pareha',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopya',
        'move' => 'Balhina',
        'donothing' => 'Walay buhaton',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Results',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'Code sa Email:',
    'LBL_SEND' => 'Ipadala',
    'LBL_LOGOUT' => 'Logout',
    'LBL_TOUR_NEXT' => 'Sunod',
    'LBL_TOUR_SKIP' => 'Iskip',
    'LBL_TOUR_BACK' => 'Balik',
    'LBL_TOUR_TAKE_TOUR' => 'Pagtour sa',
    'LBL_MOREDETAIL' => 'Uban pang detalye' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Usba ang naas linya' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Tan-awa' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filter' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Dungagi' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Dungagi og Email Address' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Itago/Ipakita' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Tangtangon' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Tin-awa' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Tangtangon' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Tangtanga ang Email Address' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Opt Out',
    'LBL_ID_FF_INVALID' => 'Himoang di balid',
    'LBL_ADD' => 'Dungagi' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo sa kompanya' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Mga konsksyon sa Popups',
    'LBL_CLOSEINLINE' => 'Sirado',
    'LBL_VIEWINLINE' => 'Tan-awa',
    'LBL_INFOINLINE' => 'Impormasyon',
    'LBL_PRINT' => 'Print',
    'LBL_HELP' => 'Nangita og tabang',
    'LBL_ID_FF_SELECT' => 'Pili',
    'DEFAULT' => 'Sukaranan',
    'LBL_SORT' => 'Han-ayon',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Paganahon ang SMTP pina-agi sa SSL o TLS?',
    'LBL_NO_ACTION' => 'Walay gihimong aksyon sa kana ng pangan: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Walay mga aksyon nga anaa.',
    'LBL_NO_DATA' => 'Walay Data',

    'LBL_ROUTING_FLAGGED' => 'gitakda nga flag',
    'LBL_ROUTING_TO' => 'padong sa',
    'LBL_ROUTING_TO_ADDRESS' => 'para ma-address',
    'LBL_ROUTING_WITH_TEMPLATE' => 'naay template',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Sa pagkakaron kini nga rekord kay adunay mga balur sa Office Phone og Address fields. Para mausab kiniang mga balur sa mga mosunod nga Office Phone og Address sa Account nga imong gipili, pislita ang "OK". Para ipabilin ang mga balur, pislita ang "Cancel".',
    'LBL_DROP_HERE' => '[Ihulog Diri]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Fill up-an daan ang Gmail&#153; mga Default',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Pangalan',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Mga pagawas nga Mail Server Properties',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Password sa SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port sa SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Server sa SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Username sa SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Sinugdanan',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Pasidaan: Walay username og password para sa pagawas nga mail account.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Pagset-up og mga Mail Account para makita ang mga padulong nga emails sa imong mga email account.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Ihatag ang impormasyon sa SMTP mail server para magamit sa mga pagawas nga email sa Mail Accounts.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Humana',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Tin-awa',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Padong sa:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email Address',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Pangalan',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Walay mga Address nga nakita',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Isave og idungag sa Address Book',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Pilia ang mga makadawat sa Email',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Address sa libro',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Pasidaan! Ang outbound nga account nga imohang gisuwayan pagtangtang kay nagalangkit sa inbound nga account. Gusto pa ba kang magpadayon?',
    'LBL_EMAIL_ADDRESSES' => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Email Address',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Unable to confirm email address',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'I-import padong sa SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Asaynment',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Sukipan',
    'LBL_EMAIL_ATTACHMENT' => 'Sukipan',
    'LBL_EMAIL_ATTACHMENTS' => 'Gikan sa Lokal nga Sistema',
    'LBL_EMAIL_ATTACHMENTS2' => 'Gikan sa mga Dokumento sa SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Mga sumpay sa Template',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'File',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumento',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Kanselahon',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Set sa Character',
    'LBL_EMAIL_CHECK' => 'Susiha ang Mail',
    'LBL_EMAIL_CHECKING_NEW' => 'Gisusi kung naay bag-ong email',
    'LBL_EMAIL_CHECKING_DESC' => 'Palihog sa paghuwat kadiyot... <br><br>Kung kini ang unang pagsusi sa mail account, mulungtad kini og pipila ka minuto.',
    'LBL_EMAIL_CLOSE' => 'Sirado',
    'LBL_EMAIL_COFFEE_BREAK' => 'Gisusi kung naay bag-ong email. <br><br>Ang dagko nga mga mail account kay mugahin og igo nga oras.',

    'LBL_EMAIL_COMPOSE' => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Palihog og butang sa mga makadawat ani nga email.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Walay sulod ang lawas sa email. Gusto pa ba nimo nga ipadala gihapon?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Walay subject kini nga email. Gusto pa ba nimo nga ipadala gihapon?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(walay subject)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Palihog butngi og balido nga email address para sa To, CC og BCC nga mga suwatanan',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Isalikway kini nga email?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Sigurado ka ba nga tangtangon kini nga pirma?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Napadala na ang Email',

    'LBL_EMAIL_CREATE_NEW' => '--Himoun igka Save--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Daghan',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Walay sulod',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Ang adlaw kung kanus-a gipadala sa nagpadala',
    'LBL_EMAIL_DATE_TODAY' => 'Karon',
    'LBL_EMAIL_DELETE' => 'Tangtangon',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Tangtangon ang mga gipili nga mensahe?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Ang email kay malampuson nga natangtang.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Gitangtang ang Mensahe',
    'LBL_EMAIL_DETAILS' => 'Mga detalye',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Ang Nahaunang address lamang ang pwedeng gamiton kung motrabaho kauban ang mga kontak.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Gikuhaan og sulod ang basura',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Gitangtang ang pagawas nga server',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Paghawan sa mga cache nga file',
    'LBL_EMAIL_EMPTY_MSG' => 'Walay mga email nga mapakita.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Walay mga email address nga mapakita.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Kinahanglan nga naay talagsaon nga pangan ang Folder og di dapat bakante. Palihog sa pag-usab.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Dili pwede tangtangon ang folder. Bisan asa sa folder o sa mga anak adunay mga email o mailbox nga nalangkit niini.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Dili matino kung unsa nga folder ang gitumong gikan sa context. Usba pagbalik.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Palihog susiha ang imong settings.',
    'LBL_EMAIL_ERROR_DESC' => 'Adunay nakit-an nga mga kasaypanan: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Dili ka pwede ka-access aning lugara. Kontaka ang imong administrador niining site para makakuha og access.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Kinahanglang talagsaon nga pangan ang ibutang sa SuiteCRM Folder.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Palihog sa pagbutang og mga pipila ka criteria sa pagpangita.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Adunay error nga mitumaw',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Gitangtang ang mensahe gikan sa Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Bisan og asa sa mensahe kay gitangtang gikan sa Server o gibalhin sa laing folder',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Napakyas ang pagkonek padong sa mail server. Palihog kontaka ang imong Administrator',
    'LBL_EMAIL_ERROR_MOVE' => 'Ang pagbalhin sa email sa servers og/o mail accounts kay dili suportado karong higayuna.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Error sa pagbalhin',
    'LBL_EMAIL_ERROR_NAME' => 'Kinahanglan ang pangan.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Gikinahanglan ang gikan sa Address. Palihog sa pagbutang og balido nga email address.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Palihog sa paghatag og file.',
    'LBL_EMAIL_ERROR_SERVER' => 'Kinahanglan ang mail server address.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Ang email account kay basin wala na-save.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Naay mitumaw nga kasaypanan samtang nag-communicate uban sa mail server.',
    'LBL_EMAIL_ERROR_USER' => 'Gikinahanglan ang pangan sa login.',
    'LBL_EMAIL_ERROR_PORT' => 'Kinahanglan ang mail server port.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Kinahanglan ang server protocol.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Kinahanglan ang pag-monitor sa Folder.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Kinahanglang ang Folder para sa mga Trash.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Kini nga impormasyon kay dili aveylabol',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Walay gibungat nga paggawas nga mail server.',
    'LBL_EMAIL_ERROR_SENDING' => 'Naay kasaypanan sa pagpadala sa Email, Palihog og kontak sa imong administrador para sa tabang.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Mga folder',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Dungagi',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Dungagi og bag-ong folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Usba ang pangan sa Folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'I-save',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Idungag ni nga folder sa',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Kini nga folder kay dili na pwedeng usbon',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Sigurado ba ka nga imo ning wagtangon nga folder?\n Kini nga proseso kay di na pwedeng balikon.\nAng pagwagtang sa mga folder kay mo-cascade sa tanang anaa nga mga folder.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Bag-ong pangan sa Folder',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Palihog sa pagpili og folder sa dili pa ipahigayon kini nga aksyon.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Pagdumala sa Folder',

    'LBL_EMAIL_FORWARD' => 'Sa unahan',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Na-download [[count]] sa [[total]] nga mga email',
    'LBL_EMAIL_FROM' => 'Gikan sa',
    'LBL_EMAIL_GROUP' => 'grupo',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupo',
    'LBL_EMAIL_HOME_FOLDER' => 'Home',
    'LBL_EMAIL_IE_DELETE' => 'Gawangtang og Mail Account',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Gawagtang sa pirma',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Sigurado ba ka nga wagtangon ni nga mail account?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Malampuson ang pagwagtang.',
    'LBL_EMAIL_IE_SAVE' => 'Pag-save sa mga impormasyon sa Mail Account',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Nag-import og Email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'I-import padong sa SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Ang settings sa pag-import',
    'LBL_EMAIL_INVALID' => 'Dili pwede',
    'LBL_EMAIL_LOADING' => 'Ga-loading...',
    'LBL_EMAIL_MARK' => 'Marka',
    'LBL_EMAIL_MARK_FLAGGED' => 'Ingon nga Flagged',
    'LBL_EMAIL_MARK_READ' => 'Ingon nga mabasa',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Ingon sa dili pag-flagged',
    'LBL_EMAIL_MARK_UNREAD' => 'Ingon nga dili mabasa',
    'LBL_EMAIL_ASSIGN_TO' => 'Gi-assign sa',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Paghimo og Folder',
    'LBL_EMAIL_MENU_COMPOSE' => 'Gihimo sa',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Tangtang og Folder',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Pagkuha og sulod sa basura',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Dungan',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Paghawan sa mga cache nga file',
    'LBL_EMAIL_MENU_REMOVE' => 'Tangtangon',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Usba ang pangan sa Folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Pag-usab sa pangan sa Folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Palihog paghimo sa pagpili sa dili pa mosuway ani nga opersyon.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Paghimo og Folder (pina-agi og remote o sa SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Pagwagtang og Folder (pina-agi og remote o sa SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Pagkuha sa tanang sulod nga naas Trash folders para sa imong mga mail account',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Markahi ni nga mga email nga nahumana og basa',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Markahi ni nga mga email ingon nga wala na-flagged',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Usba ang pangan sa Folder (pina-agi og remote o sa SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'mga mensahe',

    'LBL_EMAIL_ML_NAME' => 'Listahan sa mga pangan',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Napili nga listahan sa mga Address',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Aveylabol nga listahan sa mga Address',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> para mopili og daghang <br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Dili',
    'LBL_EMAIL_NOT_SENT' => 'Dili maproseso ang imong request sa system. Palihog kontaka ang system administartor.',

    'LBL_EMAIL_OK' => 'Sige',
    'LBL_EMAIL_ONE_MOMENT' => 'Palihog sa paghuwat...',
    'LBL_EMAIL_OPEN_ALL' => 'Abli og daghang mga mensahe',
    'LBL_EMAIL_OPTIONS' => 'Mga kapilian',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Paspas nga pagkompos',
    'LBL_EMAIL_OPT_OUT' => 'Napili nga pagawson',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Opted sa gawas og Imbalid',
    'LBL_EMAIL_PERFORMING_TASK' => 'Nagbuhat og task',
    'LBL_EMAIL_PRIMARY' => 'Panguna',
    'LBL_EMAIL_PRINT' => 'Print',

    'LBL_EMAIL_QC_BUGS' => 'Mananap',
    'LBL_EMAIL_QC_CASES' => 'Kaso',
    'LBL_EMAIL_QC_LEADS' => 'Mag una',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontak',
    'LBL_EMAIL_QC_TASKS' => 'Sugoun',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Naay chance',
    'LBL_EMAIL_QUICK_CREATE' => 'Paspas nga paghimo',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Pagtukod og balik sa mga Folder',
    'LBL_EMAIL_RELATE_TO' => 'Isaysay',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Tan-aw sa mga relasyon',
    'LBL_EMAIL_RECORD' => 'Rekord sa Email',
    'LBL_EMAIL_REMOVE' => 'Tangtangon',
    'LBL_EMAIL_REPLY' => 'Tubag',
    'LBL_EMAIL_REPLY_ALL' => 'Tubaga tanan',
    'LBL_EMAIL_REPLY_TO' => 'Tubag-sa',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Gikuha ang mensahe',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Gikuha ang Rekord sa Email',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Palihog pili lang og usa ka email rekord',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Balik sa ni-aging modyul?',
    'LBL_EMAIL_REVERT' => 'Ibalik',
    'LBL_EMAIL_RELATE_EMAIL' => 'Isaysay ang Email',

    'LBL_EMAIL_RULES_TITLE' => 'Pagdumala sa mga balaod',

    'LBL_EMAIL_SAVE' => 'I-save',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'I-save og tubag',
    'LBL_EMAIL_SAVE_DRAFT' => 'I-save ang draft',
    'LBL_EMAIL_DRAFT_SAVED' => 'Na-save na ang draft',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Petsa gikan sa',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Petsa hangtud sa',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Walay mga resulta nga pareha sa imong gipangita nga criteria.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Mga resulta nga gipangita',

    'LBL_EMAIL_SELECT' => 'Pili',

    'LBL_EMAIL_SEND' => 'Ipadala',
    'LBL_EMAIL_SENDING_EMAIL' => 'Ga-send og Email',

    'LBL_EMAIL_SETTINGS' => 'Settings',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mga Mail Account',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Tin-awon ang Form',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Gisusi kung naay bag-ong email',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Gikan sa address',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email address para sa pagsulay sa pahibalo:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Gikan sa pangalan',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Reply sa address',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'I-synchronize ang tanang mail accounts',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Ang email gipadala ngadto sa bungat nga email address gamit ang gipangandamang email settings. Palihug susiha kung makita ang email kay nakadawat sa klaro nga setting ang na husto.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Tan-awa ang puno nga SMTP log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Paghimo sa usa ka puno nga synchronozation?\n Dako nga email accounts mahimong mo balor ug pipila ka mga minuto.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'I-klik ang shift key o ang ctrl key para sa pagpili sa multiple folders.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Katibuk-an',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Paghimo ug grupo sa mga folder',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Usba ang grupo sa mga folder',

    'LBL_EMAIL_SETTINGS_NAME' => 'Mga pangalan sa email account',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Pagpili ug numero sa mga email matag panid sa inbox. Kani nga setting tingaling nagkinahanglan ug pag-refresh sa maong panid aron makuha ang epekto.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Pagkuha og email account',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Ang settings kay naluwas na.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Ipadala ang patag nga teksto gamit ang mga email lamang',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Mga email matag panid',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Biswal nga settings',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Gusto',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Anaa ang mga tiggamit sa mga folder',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Ang outbound mail server nga gipili para sa mail account nga imong gigamit kay imbalid. Susiha ang naas settings o pagpili og lain nga mail server para sa mail account.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Naay outgoing mail sever nga wala na-configure para maka-send og mga email. Palihog sa pag-configure og outgoing mail server o pagpili og outgoing mail server para sa mail account nga imong gigamit adto sa Settings >> Mail Account.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Default nga Pirma',
    'LBL_EMAIL_SIGNATURES' => 'Imong perma',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Lahi',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[Remote nga mga Folder]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Mga Folder sa SuiteCRM ]',
    'LBL_EMAIL_SUBJECT' => 'Sabjek',
    'LBL_EMAIL_SUCCESS' => 'Kalampusan',
    'LBL_EMAIL_SUITE_FOLDER' => 'Folder sa SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Ang lawas sa Email template kay walay sulod',
    'LBL_EMAIL_TEMPLATES' => 'Mga Template',
    'LBL_EMAIL_TO' => 'Sa',
    'LBL_EMAIL_VIEW' => 'Tan-awa',
    'LBL_EMAIL_VIEW_HEADERS' => 'Ipakita ang naas ulohan',
    'LBL_EMAIL_VIEW_RAW' => 'Ipakita ang Raw nga Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Kini nga bahin kay dili suportado kung mogamit og POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Ang default nga link teksto.',
    'LBL_EMAIL_YES' => 'Oo',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Padala og Test nga Email',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Napadala na ang Test nga Email',
    'LBL_EMAIL_MESSAGE_NO' => 'Numero sa mensahe',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Pasar ang pag-import',
    'LBL_EMAIL_IMPORT_FAIL' => 'Napakyas ang pag-import tungod kay ang mensahe na-import na o giwagtang na sa server',

    'LBL_LINK_NONE' => 'Wala',
    'LBL_LINK_ALL' => 'Tanan',
    'LBL_LINK_RECORDS' => 'Mga rekord',
    'LBL_LINK_SELECT' => 'Pili',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Pagpamatuod',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Gusto ba kang isirado ni nga #modyul#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Imbalid ang Extension sa File',

    'ERR_AJAX_LOAD' => 'Adunay kasaypanan nga mitumaw:',
    'ERR_AJAX_LOAD_FAILURE' => 'Adunay kasaypanan sa pagproseso sa imong hangyo, palihog sa pag-usab balik taod-taod.',
    'ERR_AJAX_LOAD_FOOTER' => 'Kung kini nga error nagpadayon, palihog ipa-disable sa imong administrador ang Ajax sa kini nga module',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Ang decimal kay dili pwede gamiton kung adunay kapareha sa libuan ka mga separator.\\n\\n Palihog usba ang mga balur.',
    'ERR_DELETE_RECORD' => 'Ang numero sa rekord kay kinahanglan i-specify para matangtang ang kontak.',
    'ERR_EXPORT_DISABLED' => 'Gi-disable ang pag-export.',
    'ERR_EXPORT_TYPE' => 'Naay problema sa pag-export ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'dili balid ang email address.',
    'ERR_INVALID_FILE_REFERENCE' => 'Imbalido ang Reperensiya sa File',
    'ERR_NO_HEADER_ID' => 'Kini nga feature kay dili pwede sa kini nga tema.',
    'ERR_NOT_ADMIN' => 'Dili awtorisadong pag-access padong sa administrador.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Walay suwat ang gikinahanglan nga field:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Imbalid ang gikinahanglan nga field:',
    'ERR_INVALID_VALUE' => 'Imbalid nga balur:',
    'ERR_NO_SUCH_FILE' => 'Ang file kay wala makita sa system',
    'ERR_NO_SINGLE_QUOTE' => 'Dili magamit ang usa ka quotation mark para sa ',
    'ERR_NOTHING_SELECTED' => 'Palihog paghimo sa pagpili sa dili pa magpadayon.',
    'ERR_SELF_REPORTING' => 'Ang user kay dili maka-report sa iyahang kaugalingon.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Walay kapareha para sa field: ',
    'ERR_SQS_NO_MATCH' => 'Walay Kapareha',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Palihog i-espesipiko ang \'key\' index sa displayParams nga attribute para sa Meta-Data nga depinisyon',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Error: Ang Pangan sa Portal kay na-assign na sa lain nga kontak.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Ang Field value kay wala nahiuyon sa percision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Adunay error nga mitumaw sa pagsuway og pag-save sa external nga account.',
    'ERR_NO_DB' => 'Dili maka-konek sa database. Palihog og tan-aw sa suitecrm.log para sa mga detalye (0).',
    'ERR_DB_FAIL' => 'Kapakyasan sa Database. Palihog og tan-aw sa suitecrm.log para sa mga detalye.',
    'ERR_DB_VERSION' => 'Ang SuiteCRM {0} Files kay mamahimo lamang gamiton uban sa SuiteCRM {1} Database.',

    'LBL_ACCOUNT' => 'Account',
    'LBL_ACCOUNTS' => 'Mga Account',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Tan-awa ang Summary',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Tan-awa ang Summary',
    'LBL_ADD_BUTTON' => 'Dungagi',
    'LBL_ADD_DOCUMENT' => 'Dungagi og Dokumento',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Idungag sa gi-target nga listahan',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Dungagi og mga Kontak ang naas Target nga listahan',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Pislita para masirado',
    'LBL_ADDITIONAL_DETAILS' => 'Mga kadungagang detalye',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Gikuha',
    'LBL_ASSIGNED_TO_USER' => 'Gi-assign sa User',
    'LBL_ASSIGNED_TO' => 'Gi-assign sa:',
    'LBL_BACK' => 'Balik',
    'LBL_BILLING_ADDRESS' => 'Address kung asa ipadala ang bill',
    'LBL_QUICK_CREATE' => 'Create ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Libre para sa tanan nga CRM',
    'LBL_BUGS' => 'Manananap',
    'LBL_BY' => 'pinaagi sa',
    'LBL_CALLS' => 'Tawag',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Padalhi og gi-queue nga mga Campaign Email',
    'LBL_SUBMIT_BUTTON_LABEL' => 'I-summiter',
    'LBL_CASE' => 'Kaso',
    'LBL_CASES' => 'Mga Kaso',
    'LBL_CHANGE_PASSWORD' => 'Ilisan og password',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Susiha ang tanan',
    'LBL_CITY' => 'Siyudad',
    'LBL_CLEAR_BUTTON_LABEL' => 'Tin-awa',
    'LBL_CLEAR_BUTTON_TITLE' => 'Tin-awa',
    'LBL_CLEARALL' => 'Tin-awon ang tanan',
    'LBL_CLOSE_BUTTON_TITLE' => 'Sirado',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Isirado og magbuhat og bag-o',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Isirado og magbuhat og bag-o',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Ablihi ang mga item:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Magbuhat og Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Magbuhat og Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Oo',
    'LBL_SEARCH_DROPDOWN_NO' => 'Dili',
    'LBL_CONTACT_LIST' => 'Listahan sa mga Kontak',
    'LBL_CONTACT' => 'Kontak',
    'LBL_CONTACTS' => 'Kontak',
    'LBL_CONTRACT' => 'Kontrata',
    'LBL_CONTRACTS' => 'Mga kontrata',
    'LBL_COUNTRY' => 'Nasud:',
    'LBL_CREATE_BUTTON_LABEL' => 'Paghimo',
    'LBL_CREATED_BY_USER' => 'Gihimo ni User',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_CURRENT_USER_FILTER' => 'Akong mga item:',
    'LBL_CURRENCY' => 'Salapi:',
    'LBL_DOCUMENTS' => 'Mga dokumento',
    'LBL_DATE_ENTERED' => 'Adlaw nga Gihimo:',
    'LBL_DATE_MODIFIED' => 'Adlaw nga Gi-usab:',
    'LBL_EDIT_BUTTON' => 'Usba',
    'LBL_DUPLICATE_BUTTON' => 'Duplikit',
    'LBL_DELETE_BUTTON' => 'Tangtangon',
    'LBL_DELETE' => 'Tangtangon',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_DIRECT_REPORTS' => 'Mga direkta nga Report',
    'LBL_DONE_BUTTON_LABEL' => 'Humana',
    'LBL_DONE_BUTTON_TITLE' => 'Humana',
    'LBL_FAVORITES' => 'Mga Paborito',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Palihog og pili og vCard nga file',
    'LBL_EMPTY_REQUIRED_VCARD' => 'wala sa vCard ang tanang gikinahanglang nga mga field sa kini nga module. Palihog og tan-aw sa suitecrm.log para sa ubang detalye.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Ang gi-upload nga file kay nilapas sa size nga 30000 bytes nga gi-specify sa HTML nga form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Naay error sa pag-upload sa vCard nga file. Palihog og tan-aw sa suitecrm.log para sa ubang detalye.',
    'LBL_IMPORT_VCARD' => 'Import og vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Import og vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import og vCard',
    'LBL_VIEW_BUTTON' => 'Tan-awa',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'I-email nga naka PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'I-email nga naka PDF',
    'LBL_EMAILS' => 'Imong Email',
    'LBL_EMPLOYEES' => 'Mga Trabahante',
    'LBL_ENTER_DATE' => 'Butngi og Petsa',
    'LBL_EXPORT' => 'I-export',
    'LBL_FAVORITES_FILTER' => 'Akong mga Paborito:',
    'LBL_GO_BUTTON_LABEL' => 'Lakaw',
    'LBL_HIDE' => 'Itago',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Import',
    'LBL_IMPORT_STARTED' => 'Nagsugod og import: ',
    'LBL_LAST_VIEWED' => 'Bag-o lang nagtan-aw',
    'LBL_LEADS' => 'Nag-una',
    'LBL_LESS' => 'dili kaayo',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_CAMPAIGNS' => 'Mangompanya',
    'LBL_CAMPAIGNLOG' => 'Log sa Kampanya',
    'LBL_CAMPAIGN_CONTACT' => 'Mangompanya',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Wala',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Nakit-an sa pagpagawas',
    'LBL_FIXED_IN_RELEASE' => 'Sakto nga pagpagawas',
    'LBL_LIST_ACCOUNT_NAME' => 'Ngalan sa Account',
    'LBL_LIST_ASSIGNED_USER' => 'Tig gamit',
    'LBL_LIST_CONTACT_NAME' => 'Kontak nga pangalan',
    'LBL_LIST_CONTACT_ROLE' => 'Kontak nga papel',
    'LBL_LIST_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_OF' => 'sa',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_RELATED_TO' => 'Nga may kalabutan sa',
    'LBL_LIST_USER_NAME' => 'Gigamit nga pangalan',
    'LBL_LISTVIEW_NO_SELECTED' => 'Palihug pagpili bisag usa lng ka rekord para magpadayon.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Palihug pagpili bisag duha ka mga rekord para magpadayon.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Mga napili nga mga rekord',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Mga napili: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Doc.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code monkey extraordinaire',
    'LBL_CANCEL' => 'Kanselahon',
    'LBL_VERIFY' => 'Susihon',
    'LBL_RESEND' => 'Ibalik ug padala',
    'LBL_PROFILE' => 'Ilhanan',
    'LBL_MAILMERGE' => 'Ang mail e merge',
    'LBL_MASS_UPDATE' => 'Mass update',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Wala\'y mga fields ang available para sa Mass Update operasyon',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Pag-opt out sa permirong email',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Magpili sa permirong email',
    'LBL_MEETINGS' => 'Mag Kapunungan',
    'LBL_MEETING_GO_BACK' => 'Balik sa meeting',
    'LBL_MEMBERS' => 'Mga miyembro',
    'LBL_MEMBER_OF' => 'Miyembro sa',
    'LBL_MODIFIED_BY_USER' => 'Giusab ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'LBL_MODIFIED' => 'Ge bag-o sa',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_MORE' => 'Naa pa',
    'LBL_MY_ACCOUNT' => 'Akong pagpahimutang',
    'LBL_NAME' => 'Pangalan',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Paghimo',
    'LBL_NEW_BUTTON_TITLE' => 'Paghimo',
    'LBL_NEXT_BUTTON_LABEL' => 'Sunod',
    'LBL_NONE' => 'Wala',
    'LBL_NOTES' => 'Tima-ilhan',
    'LBL_OPPORTUNITIES' => 'Mga oportunidad',
    'LBL_OPPORTUNITY_NAME' => 'Oportunidad nga pangalan',
    'LBL_OPPORTUNITY' => 'Naay chance',
    'LBL_OR' => 'O',
    'LBL_PANEL_OVERVIEW' => 'Kinatibuk-ang panan-aw',
    'LBL_PANEL_ASSIGNMENT' => 'OTHER',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Ginikanan nga klase',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Panguna nga Address sa Syudad:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Panguna nga Address sa Nasud:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Panguna nga Address sa Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Panguna nga Address sa Probinsya:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Panguna nga Address sa Dalan 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Panguna nga Address sa Dalan 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Panguna nga Address sa Dalan:',
    'LBL_PRIMARY_ADDRESS' => 'Panguna nga Address:',

    'LBL_PROSPECTS' => 'Mga Palaabuton',
    'LBL_PRODUCTS' => 'Mga Produkto',
    'LBL_PROJECT_TASKS' => 'Dunay Buhaton',
    'LBL_PROJECTS' => 'Mga Proyekto',
    'LBL_QUOTES' => 'Mga Quote',

    'LBL_RELATED' => 'May kalabutan',
    'LBL_RELATED_RECORDS' => 'May kalabutan sa mga rekord',
    'LBL_REMOVE' => 'Tangtangon',
    'LBL_REPORTS_TO' => 'Mga report sa',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Nagpakita og kinahanglan nga field',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Humana',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Puno nga Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Puno nga Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'I-save og Maghimo og bag-o',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'I-save og Maghimo og bag-o',
    'LBL_SAVE_OBJECT' => 'Save {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Pangitaa',
    'LBL_SEARCH_BUTTON_TITLE' => 'Pangitaa',
    'LBL_FILTER' => 'Filter',
    'LBL_SEARCH' => 'Pangitaa',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'naa pa',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Imbalid ang format sa file, mga image file lang ang pwedeng i-upload.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Pili',
    'LBL_SELECT_BUTTON_TITLE' => 'Pili',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Pag-browse sa mga dokumento',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Pag-browse sa mga dokumento',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Pili og Kontak',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Pili og Kontak',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'PILI GIKAN SA mga Report',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Pili og mga Report',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Pili og User',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Pili og User',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Pilia ang File',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Pilia ang File',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Pili og User',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Pili og User',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Klaruhon ang User',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Klaruhon ang User',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Pagpili ug Akawnt',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Pagpili ug Akawnt',
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
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Pili og Kontak',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Pili og Kontak',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Gigamit ang mga kapanguhaan para sa pagtukod ani nga page (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'mga segundo.',
    'LBL_SERVER_RESPONSE_TIME' => 'Oras sa pagtubag sa server:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Nagamit nga memory sa Server: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Paggamit: - module: {0} - aksyon: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Kinatas-ang paggamit sa Memory sa Server: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Address kung asa ipadala',
    'LBL_SHOW' => 'Ipakita',
    'LBL_STATE' => 'Estado:',
    'LBL_STATUS_UPDATED' => 'Ang imong estado ani nga event kay na-update na!',
    'LBL_STATUS' => 'Estado:',
    'LBL_STREET' => 'Dalan',
    'LBL_SUBJECT' => 'Sabjek',

    'LBL_INBOUNDEMAIL_ID' => 'Inbound sa Email ID',

    'LBL_SCENARIO_SALES' => 'Baligya',
    'LBL_SCENARIO_MARKETING' => 'Magmamalengki',
    'LBL_SCENARIO_FINANCE' => 'Tig Lista',
    'LBL_SCENARIO_SERVICE' => 'Serbisyo',
    'LBL_SCENARIO_PROJECT' => 'Pagdumala sa Proyekto',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Kini nga sitwasyon gi-facilitate sa tag-dumala sa mga naka-sale nga item',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Kini nga sitwasyon gi-facilitate sa tag-dumala sa mga item sa marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Kini nga sitwasyon gi-facilitate sa tag-dumala sa bayrunon nga may kalabutan sa mga item',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Kini nga sitwasyon gi-facilitate sa tag-dumala sa serbisyo nga may kalabutan sa mga item',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Kini nga sitwasyon gi-facilitate sa tag-dumala sa proyekto nga may kalabutan sa mga item',

    'LBL_SYNC' => 'Sync',
    'LBL_TABGROUP_ALL' => 'Tanan',
    'LBL_TABGROUP_ACTIVITIES' => 'Kalihukan',
    'LBL_TABGROUP_COLLABORATION' => 'Kolaborasyon',
    'LBL_TABGROUP_MARKETING' => 'Magmamalengki',
    'LBL_TABGROUP_OTHER' => 'Lahi',
    'LBL_TABGROUP_SALES' => 'Baligya',
    'LBL_TABGROUP_SUPPORT' => 'Suporta',
    'LBL_TASKS' => 'Naay isugo',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive nga Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive nga Email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Dili tangtangon',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Dili tangtangon',
    'LBL_UNDELETE_BUTTON' => 'Dili tangtangon',
    'LBL_UNDELETE' => 'Dili tangtangon',
    'LBL_UNSYNC' => 'Dili i-sync',
    'LBL_UPDATE' => 'Update',
    'LBL_USER_LIST' => 'Listahan sa User',
    'LBL_USERS' => 'Tig gamit',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Gisusi kung naay email entry...',
    'LBL_VERIFY_PORTAL_NAME' => 'Gisusi kung naay portal name...',
    'LBL_VIEW_IMAGE' => 'pagtan-aw',

    'LNK_ABOUT' => 'Mahitungod sa',
    'LNK_ADVANCED_FILTER' => 'Abante nga Filter',
    'LNK_BASIC_FILTER' => 'Paspas nga Filter',
    'LBL_ADVANCED_SEARCH' => 'Abante nga Filter',
    'LBL_QUICK_FILTER' => 'Paspas nga Filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Ipakita ang tanan',
    'LNK_CLOSE' => 'Sirado',
    'LBL_MODIFY_CURRENT_FILTER' => 'Usba ang karon nga filter',
    'LNK_SAVED_VIEWS' => 'Mga opsyon sa Layout',
    'LNK_DELETE' => 'Tangtangon',
    'LNK_EDIT' => 'Usba',
    'LNK_GET_LATEST' => 'Kuhaa ang pinakabag-o',
    'LNK_GET_LATEST_TOOLTIP' => 'Ilisan og bag-ong bersyon',
    'LNK_HELP' => 'Nangita og tabang',
    'LNK_CREATE' => 'Paghimo',
    'LNK_LIST_END' => 'Katapusan',
    'LNK_LIST_NEXT' => 'Sunod',
    'LNK_LIST_PREVIOUS' => 'Kaniadto',
    'LNK_LIST_RETURN' => 'Balik sa listhan',
    'LNK_LIST_START' => 'Pag sugod',
    'LNK_LOAD_SIGNED' => 'Ilhanan',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Ilisan og gipirmahan nga dokumento',
    'LNK_PRINT' => 'Print',
    'LNK_BACKTOTOP' => 'Balik sa taas',
    'LNK_REMOVE' => 'Tangtangon',
    'LNK_RESUME' => 'Pagpadayon',
    'LNK_VIEW_CHANGE_LOG' => 'Tan-awa ang kausabang sa log',

    'NTC_CLICK_BACK' => 'Palihog i-klik ang pabalik nga button sa browser ug tarongon ang sayop.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Sigurado ka ba nga gusto nimo tangtangon ang mga napili nga rekord?',
    'NTC_TEMPLATE_IS_USED' => 'Gigamit ang template bisag usa lang ka email sa pagpamaligyag rekord. Sigurado ka ba nga gusto nimo tangtangon to?',
    'NTC_TEMPLATES_IS_USED' => 'Ang mosunod nga mga template kay gigamit sa email na pagpamaligyag rekord. Sigurado ka ba nga gusto nimo tangtangon sila?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka ba sa pagtangtang niining rekord?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Sigurado ka ba nga gusto nimo tangtangon ang ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Sigurado ka ba nga gusto nomo i-update ang ',
    'NTC_DELETE_SELECTED_RECORDS' => ' mga napili nga rekord?',
    'NTC_LOGIN_MESSAGE' => 'Palihug pagsulod sa imong pangalan ug ang password.',
    'NTC_NO_ITEMS_DISPLAY' => 'wala',
    'NTC_REMOVE_CONFIRMATION' => 'Sigurado ka ba nga gusto nimo kuhaon kini nga relasyon> Ang relasyon lamang ang kuhaon. Ang rekord kay dili na matangtang.',
    'NTC_REQUIRED' => 'Nagpakita og kinahanglan nga field',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Maayong pagabot',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Hapit naka mobiya ani nga rekord nga wala pa na-save ang imong mga gipang-usab sa rekord. Sigurado ba ka na mo-navigate ka palayo ani nga rekord?',
    'ERROR_NO_RECORD' => 'Naay error sa pagkuha sa rekord. Kini nga rekord kay basin na-delete na o dili ka awtorisado para makit-ani kini.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Pasidaan:</b> Ang bersyon sa imong browser kay dili na suportado o di kaha gagamit ka og dili suportado nga browser.<p></p>Kini nga mga bersyon sa browser ang girekomendar:<p></p><ul><li>Internet Explorer 10 (dili suportado ang compitability view)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Pasidaan:</b> Ang imong browser kay naka IE compatability view nga dili suportado.',
    'ERROR_TYPE_NOT_VALID' => 'Error. Kini nga klase kay dili balido.',
    'ERROR_NO_BEAN' => 'Napakyas sa pagkuha sa bean.',
    'LBL_DUP_MERGE' => 'Pangita og mga magkapareha',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Pagdumala sa mga Subscription',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Pagdumala sa mga Subscription para sa ',
    // Ajax status strings
    'LBL_LOADING' => 'Ga-loading...',
    'LBL_SEARCHING' => 'Gapangita...',
    'LBL_SAVING_LAYOUT' => 'Ga-save sa Layout...',
    'LBL_SAVED_LAYOUT' => 'Na-save na ang layout.',
    'LBL_SAVED' => 'Na-save',
    'LBL_SAVING' => 'Ga-save',
    'LBL_DISPLAY_COLUMNS' => 'Ipakita ang Columns',
    'LBL_HIDE_COLUMNS' => 'Itago ang Columns',
    'LBL_SEARCH_CRITERIA' => 'Pangita og Criteria',
    'LBL_SAVED_VIEWS' => 'Na-save na ang Views',
    'LBL_PROCESSING_REQUEST' => 'Nagproseso...',
    'LBL_REQUEST_PROCESSED' => 'Humana',
    'LBL_AJAX_FAILURE' => 'Napakyas ang Ajax',
    'LBL_MERGE_DUPLICATES' => 'Isagol',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Akong mga Filter',
    'LBL_SEARCH_POPULATE_ONLY' => 'Pagsearch gamit ang search nga form nga naas taas',
    'LBL_DETAILVIEW' => 'Detalye nga matan-aw',
    'LBL_LISTVIEW' => 'Listahan nga matan-aw',
    'LBL_EDITVIEW' => 'Edit nga matan-aw',
    'LBL_BILLING_STREET' => 'Dalan:',
    'LBL_SHIPPING_STREET' => 'Dalan:',
    'LBL_SEARCHFORM' => 'Search nga Form',
    'LBL_SAVED_SEARCH_ERROR' => 'Palihog paghatag og pangan ani nga view.',
    'LBL_DISPLAY_LOG' => 'Ipakita ang Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistema',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Nahuman na ang sesyon',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Ang imong sesyon kay mahuman na sulod sa duha ka minuto. Palihog og save sa imong gibuhat.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Ang imong sesyon kay nahuman na.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Mag tipok',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Tawag',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Oras: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokasyon: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Deskripsyon: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Istado: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Naay kalabutan sa: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Wala pa na-set ang Event.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Wala pa na-set ang lokasyon.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Wala pa na-define ang sinugdanan sa petsa.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Walay nakita nga resulta.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Walay nakita nga resulta... Ilisi tingali ang imong search criteria og usba pagbalik?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Walay makita nga resulta sa <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Paghimo og <item1> isip bag-o nga <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'o ilisi ang imong criteria sa pagpangita',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Wala kay mga rekord nga naka-save karon, <item2> o <item3> usa karon.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Idugang sa akong mga Paborito',
    'LBL_CREATE_CONTACT' => 'Paghimo og Kontak',
    'LBL_CREATE_CASE' => 'Nag buhat og kaso',
    'LBL_CREATE_NOTE' => 'Paghimo og Note',
    'LBL_CREATE_OPPORTUNITY' => 'Paghimo og Oportunidad',
    'LBL_SCHEDULE_CALL' => 'Log sa Tawag',
    'LBL_SCHEDULE_MEETING' => 'Iskedyul sa Meeting',
    'LBL_CREATE_TASK' => 'Paghimo og buhaton',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Pagmugna og Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'I-save ang Web Form',
    'LBL_AVAILABLE_FIELDS' => 'Mga Field nga naa',
    'LBL_FIRST_FORM_COLUMN' => 'Una nga Form Column',
    'LBL_SECOND_FORM_COLUMN' => 'Ikaduha nga Form Column',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Walay suwat ang gikinahanglan nga field: Gi-assign sa',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Walay suwat ang gikinahanglan nga field: Nga may kalabutan sa kampanya',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Magbuhat og web form ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Ang pag-submit niining form kay maghimo og ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Idungag ang tanang Fields',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Ireset tanang Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Tangtangon tanang Fields',
    'LBL_NEXT_BTN' => 'Sunod',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Ang mga sunod lang nga imahi ang suportado nga klase sa mga attachement ang pwedeng ma-embed: JPG, PNG.',
    'LBL_TRAINING' => 'Suporta sa Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Gi-ilisan ang konteksto sa database sa',
    'ERR_MSSQL_WARNING' => 'Pahimangno:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: Wala ang File nga [[file]]. Wala nakahimo kay ang corresponding nga HTML file kay wala nakita.',
    'ERR_CANNOT_FIND_MODULE' => 'Error: Ang module nga [module] kay wala ni-exist.',
    'LBL_ALT_ADDRESS' => 'Laing Address:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: Naay mga di parehang numero nga mga argumento sa \'key\' og \'copy\' nga mga element sa displayParams array.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Katibuk-an',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Mga Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Akong mga Item lamang',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulo',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Ipakita ang mga Row',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Naka-abot naka sa pinakadakong numero sa SuiteCRM Dashlets nga gi-set sa imong administrador. Palihog sa pagtangtang og SuiteCRM Dashlet para maka-dugang pa.',
    'LBL_ADDING_DASHLET' => 'Gadungag sa SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'Nadungagan og SuiteCRM Dashlet',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Sigurado ka ba nga tangtangon ni ang SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Gatangtang sa SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'Natangtang na ang SuiteCRM Dashlet',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Ga-loading ang page, palihog sa paghuwat...',

    'LBL_RELOAD_PAGE' => 'Palihog <a href="javascript: window.location.reload()"> i-reload ang window</a> para magamit ni nga SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Dungagan og mga Dashlet',
    'LBL_CLOSE_DASHLETS' => 'Sirado',
    'LBL_OPTIONS' => 'Mga kapilian',
    'LBL_1_COLUMN' => 'Unang Column',
    'LBL_2_COLUMN' => 'Ikaduhang Column',
    'LBL_3_COLUMN' => 'Ikatulong Column',
    'LBL_PAGE_NAME' => 'Pangan sa Page',

    'LBL_SEARCH_RESULTS' => 'Mga resulta nga gipangita',
    'LBL_SEARCH_MODULES' => 'Mga Module',
    'LBL_SEARCH_TOOLS' => 'Mga gamit',
    'LBL_SEARCH_HELP_TITLE' => 'Mga Search Tip',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Walay Imahe',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopyaha ang address gikan sa wala:',
    'LBL_SAVE_AND_CONTINUE' => 'I-save og magpadayon',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Pili og daghan nga controls</strong></p><ul><li>Pislita ang mga balur para makapili og attribute.</li><li>Ctrl-click&nbsp;to&nbsp;pili og daghan. Ang mga Mac user gamit og CMD-click.</li><li>Para makapili sa tanang balur tali sa duha ka mga attiribute,&nbsp; pislita ang unang value&nbsp;og dayon shift-click ang katapusang balur.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Gamit ang <b>Saved Search & Layout</b> nga opsyon, mahimo nimong maka-save og koleksyon sa search parameters og/o custom List View nga layout para dali nga makuha ang gustong resulta sa pag-search sa umaabot. Mahimo kang maka-save og walay katapusan nga numero sa custom searches og layouts. Tanang naka-save nga searches kay makita ang pangan nga naa sa listahan sa Saved Searches, uban sa katapusang gi-load nga saved search nga makita sa ibabaw sa listahan.<br><br>Para ma-customize ang layout sa List View, gamita ang Hide Columns og Display Columns nga mga box para makapili kung unsa nga fields ang ipakita sa mga resulta sa search. Pananglitan, ma-mahimo nimong makita o matago ang mga detalye sama sa pangan sa rekord, og naka-assign nga user, og ang team nga naka-assign sa resulta sa mga search. Para makadungag og column sa List View, pilia ang field nga naa sa Hide Columns nga listahan og gamita ang wala nga arrow para malihok kini sa Display Columns nga listahan. Para maka-tangtang og column gikan sa List View, pilia kini sa Display Columns nga listahan og gamita ang tuo nga arrow para malihok kini sa Hide Columns nga listahan..<br><br>Kung naa kay save layout settings, Makahimo ka nga ma-load sila bisan unsa orasa para makita ang mga resulta sa search nga naa sa custom layout.<br><br>Para maka-save og update sa search og/o layout:<ol><li>Pagbutang og pangan sa search results sa <b>I-save ni nga search ingon sa</b>field og pislita ang <b>Save</b>. Ang pangan karon mopakita sa Saved Searches nga listahan tupad sa <b>Clear</b> nga button.</li><li>Para makita ang naka-save nga search, pilia kini sa Saved Searches nga listahan. Ang mga resulta sa search kay makita sa List View.</li><li>Para maka-update sa mga property sa saved search, pilia ang saved search gikan sa listahan, ibutang ang bag-ong search criteria og/o mga opsyon sa layout nga naa sa Advanced Search nga lugar, og pislita ang <b>Update</b> sunod sa <b>Modify Current Search</b>.</li><li>Para maka-delete og naka-save nga search, pilia kini sa Saved Searches nga listahan, pislita ang <b>Delete</b> sunod sa <b>Modify Current Search</b>, og dayon pislita ang <b>OK</b> para makumpirma ang pag-delete.</li></ol><p><strong>Mga Tip</strong><br><br>Pinaagi sa paggamit og % ingon nga usa ka wildcard operator mahimo nimo imong search nga mas lapad. Pananglitan imbis nga pag-search lang sa mga resulta nga pareha sa "Apples" mahimo nimo nga mausab imong pag-search og "Apples%" nga mopareha sa tanang resulta nga nagsugod og word nga Apples para pwede ang naay laing sagol nga mga character.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Ang query limit sa $limit ni-abot sa $module nga module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() kinahanglan nga ibalewala.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Wala maka-create og monitor tungod kay ang metadata nga file kay walay sulod o di kaha ang file kay wala ni-exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: Walay monitor nga gi-configure para sa gi-request nga pangan',
    'ERR_UNDEFINED_METRIC' => 'Error: Wala naka-set og balur para sa dili ma-define nga metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Wala makakita sa Store implementation file',

    'LBL_MONITOR_ID' => 'Id sa Monitor',
    'LBL_USER_ID' => 'Id sa User',
    'LBL_MODULE_NAME' => 'Pangan sa Module',
    'LBL_ITEM_ID' => 'Id sa Item',
    'LBL_ITEM_SUMMARY' => 'Summary sa Item',
    'LBL_ACTION' => 'Aksyon',
    'LBL_SESSION_ID' => 'Id sa Session',
    'LBL_BREADCRUMBSTACK_CREATED' => 'Ang BreadCrumbStack gihimo para sa user id nga {0}',
    'LBL_VISIBLE' => 'Makita nga Rekord',
    'LBL_DATE_LAST_ACTION' => 'Adlaw sa Katapusang Aksyon',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'dili sa wala pa',
    'MSG_IS_MORE_THAN' => 'labaw pa kay sa',
    'MSG_SHOULD_BE' => 'kinahanglan nga',
    'MSG_OR_GREATER' => 'o mas dako',

    'LBL_LIST' => 'Listahan',
    'LBL_CREATE_BUG' => 'Paghimo og Bug',

    'LBL_OBJECT_IMAGE' => 'butang nga imahe',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Pili og Adlaw',

    'LBL_VALIDATE_RANGE' => 'kay wala sa balido nga gidak-on',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Palihog og pili sa duha ang sinugdanan og katapusan nga range sa adlaw',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Palihog og pili sa duha ang sinugdanan og katapusan nga range sa mga entry',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tanan',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: Ang Array count sa bean parameter kay wala nitugma sa Array count nga naas mga resulta.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Nawala ang mapping entry para sa module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Wala nakuha ang data para sa {0} Connector. Basin ang serbisyo sa pagkakaron kay dili ma-access o basin ang configuration settings kay dili balido. Mensahe sa Connector error: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Para sa labing maayo nga kasinatiaan gamit ang IIS/FastCGI sapi, i-set ang fastcgi.logging sa 0 sa imong php.ini nga file.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Pangalan',
    'LBL_COLLECTION_PRIMARY' => 'Panguna',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Walay sulod ang gikinahanglan nga field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_DESCRIPTION' => 'Deskripsyon',

    'LBL_YESTERDAY' => 'kagahapon',
    'LBL_TODAY' => 'karon',
    'LBL_TOMORROW' => 'ugma',
    'LBL_NEXT_WEEK' => 'sunod semana',
    'LBL_NEXT_MONDAY' => 'sunod lunes',
    'LBL_NEXT_FRIDAY' => 'sunod biyernes',
    'LBL_TWO_WEEKS' => 'duha ka semana',
    'LBL_NEXT_MONTH' => 'sunod buwan',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'unang adlaw sa sunod buwan',
    'LBL_THREE_MONTHS' => 'tulo ka bulan',
    'LBL_SIXMONTHS' => 'unom ka bulan',
    'LBL_NEXT_YEAR' => 'sunod tuig',

    //Datetimecombo fields
    'LBL_HOURS' => 'Oras',
    'LBL_MINUTES' => 'Minuto',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Petsa',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Awtomatik sa pag Refresh',

    'LBL_DURATION_DAY' => 'adlaw',
    'LBL_DURATION_HOUR' => 'oras',
    'LBL_DURATION_MINUTE' => 'minuto',
    'LBL_DURATION_DAYS' => 'mga adlaw',
    'LBL_DURATION_HOURS' => 'Gidugayon nga mga Oras',
    'LBL_DURATION_MINUTES' => 'Gidugayon nga mga Minuto',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Pili og Bulan',
    'LBL_ENTER_YEAR' => 'Butngig Tuig',
    'LBL_ENTER_VALID_YEAR' => 'Palihog sa pagbutang og balid nga tuig',

    //File write error label
    'ERR_FILE_WRITE' => 'Error: Dili masuwatan ang file {0}. Palihog susiha ang system og mga pagtugot sa web server.',
    'ERR_FILE_NOT_FOUND' => 'Error: Dili ma-load ang file {0}. Palihog susiha ang system og mga pagtugot sa web server.',

    'LBL_AND' => 'Og',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File sa External nga Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Seguridad',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Kini usa ka sampol nga import file nga naghatag og ehemplo sa gi-expect nga mga sulod sa usa sa file nga andam na i-import."
"Ang file kay usa ka comma-delimited .csv file, gagamit og duha ka kutlo isip field qualifier."

"Ang header row kay ang naas labing taas nga row nga anaa sa file og naglangkob sa mga label sa field nga makita nimo sa aplikasyon."
"Kini nga mga label kay gigamit para pag-map sa data nga naas file ngadto sa mga fields sa aplikasyon."

"Mga Note: Ang mga pangan sa database kay mamahimong gamiton ngadto sa header row. Gamit kaayo kini kung gagamit ka og phpMyAdmin o laing database tool aron makahatag og listahan sa gi-export nga data ngadto sa import."
"Ang pagkahan-ay sa column kay dili kritikal sama sa pagproseso sa mag-import nga mutugma sa data ngadto sa angay nga mga field base sa header row."


"Para magamit kini nga file isip usa ka template, buhata ang mga mosunod:"
"1. Tangtanga ang sampol nga mga row sa data"
"2. Tangtanga ang help text nga imong gibasa karon"
"3. Ibutang imong kaugalingong data sa angay nga mga rows og columns"
"4. I-save ang file sa ilado nga lokasyon diha sa imong sistema"
"5. Pislita ang Import opsyon gikan sa Aksyons menu diha sa aplikasyon og pilia ang file nga i-upload"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Walay mga notification karon',
    'LBL_ALT_SORT_DESC' => 'Paubos nga pagkahan-ay',
    'LBL_ALT_SORT_ASC' => 'Pataas nga pagkahan-ay',
    'LBL_ALT_SORT' => 'Han-ayon',
    'LBL_ALT_SHOW_OPTIONS' => 'Ipakita ang mga Opsyon',
    'LBL_ALT_HIDE_OPTIONS' => 'Itago ang mga Opsyon',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Ibalhin ang gipili nga entry sa listahan nga naas wala',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Ibalhin ang gipili nga entry sa listahan nga naas tuo',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Ibalhin ang gipili nga entry ibabaw sa gipakita nga order sa listahan',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Ibalhin ang gipili nga entry ubos sa gipakita nga listahan sa order',
    'LBL_ALT_INFO' => 'Impormasyon',
    'MSG_DUPLICATE' => 'Ang {0} rekord nga imong buhaton kay tingalig maduplicate sa {0} rekord nga naa na. {1} ang mga rekord nga naay kaparehas og pangan kay gilista sa ubos.<br>Pislita ang Create {1} para magpadayon sa paghimo og bag-o {0}, o pili og naa na {0} nga gilista sa ubos.',
    'MSG_SHOW_DUPLICATES' => 'Ang {0} rekord nga imong buhaton kay tingalig maduplicate sa {0} rekord nga naa na. {1} ang mga rekord nga naay kaparehas og pangan kay gilista sa ubos. Pislita ang Save para magpadayon sa paghimo og bag-o {0}, o pislita ang Cancel para mabalik sa module nga dili na magbuhat sa {0}.',
    'LBL_EMAIL_TITLE' => 'email address',
    'LBL_EMAIL_OPT_TITLE' => 'mipili og email address',
    'LBL_EMAIL_INV_TITLE' => 'imbalid nga email address',
    'LBL_EMAIL_PRIM_TITLE' => 'Paghimo og Panguna nga Email Address',
    'LBL_SELECT_ALL_TITLE' => 'Pilia ang tanan',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Pilia ni nga row',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERROR: Adunay error sa pag-upload. Ang Error code: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: Adunay error sa pag-upload. Ang Error code: {0} - {1}. Ang upload_maxsize kay {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERROR: Adunay error sa pag-upload, palihog og kontak sa administrador para sa tabang.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Ang sukod sa Upload ({0} bytes) kay nilapas na sa gitugotan nga kadak-on: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'Adunay error nga mitumaw. Palihog og refresh sa imong page og usba balik.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Usba',
    'LBL_EDIT_BUTTON_TITLE' => 'Usba',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikit',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikit',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Tangtangon',
    'LBL_DELETE_BUTTON_TITLE' => 'Tangtangon',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Aksyon',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'I-save',
    'LBL_SAVE_BUTTON_TITLE' => 'I-save',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Kanselahon',
    'LBL_CANCEL_BUTTON_TITLE' => 'Kanselahon',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => 'pito',
    'LBL_ADV_SEARCH_LNK_KEY' => 'walo',
    'LBL_FIRST_INPUT_SEARCH_KEY' => 'siyam',

    'ERR_CONNECTOR_NOT_ARRAY' => 'ang connector array sa {0} kay gi-define nga sayop o walay sulod maong di magamit.',
    'ERR_SUHOSIN' => 'Ang upload stream kay gi-block sa Suhosin, palihog dungagi og &quot;upload&quot; sa suhosin.executor.include.whitelist (Tan-awa ang suitecrm.log para sa dugang impormasyon)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Bati ang tubag gikan sa server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Kutlo',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Presyo sa Pagbaligya',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Gi-manual',
        '5' => 'Taga 5 minuto',
        '15' => 'Kada kinse minutos',
        '30' => 'Kada traynta minutos',
        '60' => 'Kada oras',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Naay reminder nga walay sulod o sayop.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Wala na-set ang reminder nga naas popup o di kaha sa email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Walay mga imbestigasyon para sa reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Wala gilabot ang reminder sa bisan unsa sa mga imbestigasyon, ganahan baka nga tangtangon ang reminder?',
    'LBL_DELETE_REMINDER' => 'Wagtangon ang Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Pili og columns',
    'LBL_COLUMN_CHOOSER' => 'Tigpili og Column',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'I-save ang mga kabag-ohan',
    'LBL_DISPLAYED' => 'Gipakita',
    'LBL_HIDDEN' => 'Gitago',
    'ERR_EMPTY_COLUMNS_LIST' => 'Labing menus, usa ka-element ang kinahanglan',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Kategorya',
    'LBL_LIST_CATEGORY' => 'Kategorya',
    'ERR_FACTOR_TPL_INVALID' => 'Ang Factor Authentication nga mensahe kay imbalido, palihog og kontak sa imong administrador.',
    'LBL_SUBTHEMES' => 'Estilo',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Kaadlawon',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Adlaw',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Abog',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Gabie',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Udto',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Isalikway ang draft',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Kini nga operasyon kay mo-tangtang sa email, gusto ka bang magpadayon?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Butangi og Email Template',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Kini nga operasyon kay mosalikway sa Body sa email og ang naas Subject fields, gusto ka bang magpadayon?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Gikumpirma ang Opt In',
    'LBL_OPT_IN_TITLE' => 'Opt sa sud',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Gikumpirma ang adlaw nga napadala sa Opt In',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Gikumpirma ang adlaw nga napadala sa Opt In',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Gikumpirma ang adlaw nga napakyas ang Opt In',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Ang Opt In Email Temlplate kay wala na-configure. Palihog og set up sa email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Ang Opt In nagkinahanglan sa email nga may kalabutan sa Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Dili maka-anak nga Grupo',
    'LBL_PRIMARY_GROUP' => "Primarya na Grupo",

    // footer
    'LBL_SUITE_TOP' => 'Balik sa taas',
    'LBL_SUITE_SUPERCHARGED' => 'Gi-supercharge pinaagi sa SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Gi-poweran ni SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Kini nga program kay libre nga software; mahimo nimo kining ipang-apod-apod og/o usbon ubos sa mga termino sa GNU Affero General Public License bersyon 3 nga gi-publish sa Free Software Foundation, labot ang mga dugang permiso nga gi-set sa gawas sa source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Alisdan nga Password',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Padala og kompirmasyon sa Opt sa Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Kompirmaha ang Opt sa Email sa pagpadala lang para sa Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Ang pagpadala og kompirmasyon sa Opt sa Email kay gi-disable, i-enable ang Kompermasyon sa Opt nga opsyon nga anaa sa Email Settings o kontaka imong Administrador.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Ang pagpadala og kompirmasyon sa Opt sa Email kay dili posible kay ang Kontak walay Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Pakyas ang pagpadala og Kompermasyon sa Opt sa Email',
    'LBL_CONFIRM_EMAIL_SENT' => 'Malampuson nga napadala ang kompermasyon sa Opt sa Email',
);

$app_list_strings['moduleList']['Library'] = 'Librarya';
$app_list_strings['moduleList']['EmailAddresses'] = 'Email Address';
$app_list_strings['project_priority_default'] = 'Katunga nga kadak-onon';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Taas o Habog',
    'Medium' => 'Katunga nga kadak-onon',
    'Low' => 'Hinay',
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
    'email' => 'Email',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Ang basehan sa nahibaw-an';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTICA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUS',
    'BELGIUM' => 'BELGIUM',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET ISLAND',
    'BRAZIL' => 'BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'CANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPRUS',
    'CZECH REPUBLIC' => 'CZECH REPUBLIC',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DENMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPT',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
    'ESTONIA' => 'ESTONIA',
    'ETHIOPIA' => 'ETHIOPIA',
    'FAEROE ISLANDS' => 'FAEROE ISLANDS',
    'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANCE',
    'FRENCH GUIANA' => 'FRENCH GUIANA',
    'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANY',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GREECE',
    'GREENLAND' => 'GREENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARY',
    'ICELAND' => 'ICELAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'IRELAND',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALY',
    'IVORY COAST' => 'IVORY COAST',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAPAN',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA, SOUTH',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KYRGYZSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITHUANIA',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MOROCCO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'NEW CALADONIA',
    'NEW HEBRIDES' => 'NEW HEBRIDES',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK ISLAND',
    'NORWAY' => 'NORWAY',
    'OMAN' => 'OMAN',
    'OTHER' => 'OTHER',
    'PACIFIC ISLAND' => 'PACIFIC ISLAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLAND',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSSIA',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'SOUTH AFRICA',
    'SOUTH YEMEN' => 'SOUTH YEMEN',
    'SPAIN' => 'SPAIN',
    'SPANISH SAHARA' => 'SPANISH SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SWEDEN',
    'SWITZERLAND' => 'SWITZERLAND',
    'SYRIA' => 'SYRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TAJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURKEY',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
    'UNITED KINGDOM' => 'UNITED KINGDOM',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
    'USA' => 'USA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATICAN CITY',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'WESTERN SAHARA',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan og Hong Kong)',
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
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
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
    'GoToMeeting' => 'AdtoSaMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Mga Kontak sa Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Hangyo',
    2 => 'I-access',
    3 => 'Dili pwede',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Mangompanya',
    'email' => 'Email',
    'event' => 'Event',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Mangompanya',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Mangompanya',
    'email' => 'Email',
    'event' => 'Event',
    'system' => 'Sistema',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Ang basehan sa nahibaw-an';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Mga Kategorya';
$app_list_strings['aok_status_list']['Draft'] = 'Tig drap';
$app_list_strings['aok_status_list']['Expired'] = 'Ekspire';
$app_list_strings['aok_status_list']['In_Review'] = 'Nag balik basa';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Pribado';
$app_list_strings['aok_status_list']['published_public'] = 'Publiko';

$app_list_strings['moduleList']['FP_events'] = 'Mga Panghitabo';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Mga Lokasyon';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Gi-imbitar';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Wala gi-imbitar';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Mitambong';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Wala mitambong';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Nadawat';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Wala dawata';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Walay tubag';

$app_strings['LBL_STATUS_EVENT'] = 'Status sa Imbitar';
$app_strings['LBL_ACCEPT_STATUS'] = 'Daway Kahimtang';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Pilia ni nga Page';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Pilia ang tanan';
$app_strings['LBL_LISTVIEW_NONE'] = 'Ayaw pilia ang tanan';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Panghitabo sa Index';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Kaso sa mga. Paligsahan';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Kaso nga mga Bag-o';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Palihog og tubag sa ibabaw ani nga linya ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Ablihi';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Ablihi',
        'Closed' => 'Sirado',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Bag o',
        'Open_Assigned' => 'Naay asayn',
        'Closed_Closed' => 'Sirado',
        'Open_Pending Input' => 'Pundo ang gebuhat',
        'Closed_Rejected' => 'Dili pwede',
        'Closed_Duplicate' => 'Duplikit',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Usa ka user',
        'Account' => 'Tig gamit sa Account',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Default sa Sistema',
    'singleUser' => 'Usa ka User',
    'roundRobin' => 'Lingin-Robin',
    'leastBusy' => 'Gamay-Busy',
    'random' => 'Bisag asa',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Mga report';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Mga Report nga Kondisyon';
$app_list_strings['moduleList']['AOR_Charts'] = 'Mga Report sa Chart';
$app_list_strings['moduleList']['AOR_Fields'] = 'Mga Report Field';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Mga naka-eskedyul nga report';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Katumbas sa';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Dili katumbas sa';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Dakoa pa kaysa';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mas gamay pa sa';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Mas dako o Katumbas sa';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mas gamay o Katumbas sa';
$app_list_strings['aor_operator_list']['Contains'] = 'Naglangkob og mga';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Nag-una og';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Ga-awahi og';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'Og';
$app_list_strings['aor_condition_operator_list']['OR'] = 'O';
$app_list_strings['aor_condition_type_list']['Value'] = 'Bili';
$app_list_strings['aor_condition_type_list']['Field'] = 'Kaumahan';
$app_list_strings['aor_condition_type_list']['Date'] = 'Petsa';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Usa sa';
$app_list_strings['aor_condition_type_list']['Period'] = 'Tulbok';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'User Karon';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuto';
$app_list_strings['aor_date_type_list']['hour'] = 'Oras';
$app_list_strings['aor_date_type_list']['day'] = 'Mga Adlaw';
$app_list_strings['aor_date_type_list']['week'] = 'Semana';
$app_list_strings['aor_date_type_list']['month'] = 'Buwan';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Oras sa Negosyo';
$app_list_strings['aor_date_options']['now'] = 'Karon';
$app_list_strings['aor_date_options']['field'] = 'Kini nga field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Pasaka';
$app_list_strings['aor_sort_operator']['DESC'] = 'Pakanaog';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Ihap';
$app_list_strings['aor_function_list']['MIN'] = 'Kinagamyan';
$app_list_strings['aor_function_list']['MAX'] = 'Kinadak-an';
$app_list_strings['aor_function_list']['SUM'] = 'Kinatibuk-an';
$app_list_strings['aor_function_list']['AVG'] = 'Average';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Ihap';
$app_list_strings['aor_total_options']['SUM'] = 'Kinatibuk-an';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Chart nga naka-bar';
$app_list_strings['aor_chart_types']['line'] = 'Chart nga naka-linya';
$app_list_strings['aor_chart_types']['pie'] = 'Chart nga naka-pie';
$app_list_strings['aor_chart_types']['radar'] = 'Chart nga naka-radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Gipundok nga bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Gi-grupo nga bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Buwan';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Simana';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Taga Adlaw';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktib';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Dili aktib';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Tig gamit';
$app_list_strings['aor_email_type_list']['Users'] = 'Tig gamit';
$app_list_strings['aor_assign_options']['all'] = 'Tanang Users';
$app_list_strings['aor_assign_options']['role'] = 'Tanang Users sa Role';
$app_list_strings['aor_assign_options']['security_group'] = 'Tanang Users sa Security Group';
$app_list_strings['date_time_period_list']['today'] = 'Karon';
$app_list_strings['date_time_period_list']['yesterday'] = 'Kagahapon';
$app_list_strings['date_time_period_list']['this_week'] = 'Karon nga Semana';
$app_list_strings['date_time_period_list']['last_week'] = 'Katapusang semana';
$app_list_strings['date_time_period_list']['last_month'] = 'Last Sa isa ka bulan';
$app_list_strings['date_time_period_list']['this_month'] = 'Karung buwana';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Karon nga kwarter';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Ni-aging kwarter';
$app_list_strings['date_time_period_list']['this_year'] = 'Karong tuiga';
$app_list_strings['date_time_period_list']['last_year'] = 'Niaging tuig';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'sa';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'sa';
$app_strings['LBL_CRON_AT'] = 'sa';
$app_strings['LBL_CRON_RAW'] = 'Nag-una';
$app_strings['LBL_CRON_MIN'] = 'Minuto';
$app_strings['LBL_CRON_HOUR'] = 'Oras';
$app_strings['LBL_CRON_DAY'] = 'Adlaw';
$app_strings['LBL_CRON_MONTH'] = 'Buwan';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Taga Adlaw';
$app_strings['LBL_CRON_WEEKLY'] = 'Simana';
$app_strings['LBL_CRON_MONTHLY'] = 'Buwan';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Mga kontrata';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Mga Resibo';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Mga Template';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Mga Produkto - Mga Kategorya';
$app_list_strings['moduleList']['AOS_Products'] = 'Mga Produkto';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Linya sa mga Butang';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Mga Grupo sa Linya sa Butang';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Mga Quote';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Kumbati hahah';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kustomer';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Tig inverst';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Kauban';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Pinduton';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Tig baligya';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Lahi';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Tig drap';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negosasyon';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Gi-deliver';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Ge Gunitan usa';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Gi-kumpirma';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Gisirado nga gidawat';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Siradong nawala';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Gisirado nga patay';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Gi-aprobahan';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Wala gi-aprobahan';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Kumbati hahah';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kustomer';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Tig inverst';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Kauban';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Pinduton';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Tig baligya';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Lahi';
$app_list_strings['invoice_status_dom']['Paid'] = 'Gibayaran';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Wala gibayaran';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Gi-kansela';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Wala gi-invoice';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Gi-invoice';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Mga laptop';
$app_list_strings['product_category_dom']['Desktops'] = 'Mga desktop';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Maayo';
$app_list_strings['product_type_dom']['Service'] = 'Serbisyo';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Mga Quote';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Mga Resibo';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Mga kontrata';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Mga Quote';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Mga Resibo';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Mga kontrata';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Mga Account';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontak';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Nag-una';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Wala pa na sugdan';
$app_list_strings['contract_status_list']['In Progress'] = 'Ge prosiso';
$app_list_strings['contract_status_list']['Signed'] = 'Gi-pirmahan';
$app_list_strings['contract_type_list']['Type'] = 'Isulat';
$app_strings['LBL_PRINT_AS_PDF'] = 'Ipatik ingon nga PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Palihug sa pagpili og Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nWalay mga template nga makita.\nPalihog og adto sa mga template sa PDF module og pagbuhat og usa';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Mga kondisyon sa WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Proseso sa Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'Mga Aksyon sa WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Aktib';
$app_list_strings['aow_status_list']['Inactive'] = 'Dili aktib';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Katumbas sa';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Dili katumbas sa';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Dakoa pa kaysa';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mas gamay pa sa';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Mas dako o Katumbas sa';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mas gamay o Katumbas sa';
$app_list_strings['aow_operator_list']['Contains'] = 'Naglangkob og mga';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Nag-una og';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ga-awahi og';
$app_list_strings['aow_operator_list']['is_null'] = 'Kay Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Kompleto';
$app_list_strings['aow_process_status_list']['Running'] = 'Gadagan';
$app_list_strings['aow_process_status_list']['Pending'] = 'Na stack up';
$app_list_strings['aow_process_status_list']['Failed'] = 'Hagbong';
$app_list_strings['aow_condition_operator_list']['And'] = 'Og';
$app_list_strings['aow_condition_operator_list']['OR'] = 'O';
$app_list_strings['aow_condition_type_list']['Value'] = 'Bili';
$app_list_strings['aow_condition_type_list']['Field'] = 'Kaumahan';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Bisan unsa nga kausaban';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Sa SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Petsa';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Usa sa';
$app_list_strings['aow_action_type_list']['Value'] = 'Bili';
$app_list_strings['aow_action_type_list']['Field'] = 'Kaumahan';
$app_list_strings['aow_action_type_list']['Date'] = 'Petsa';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Ituyok';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Dili kaayo Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Bisag asa';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Bili';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Kaumahan';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuto';
$app_list_strings['aow_date_type_list']['hour'] = 'Oras';
$app_list_strings['aow_date_type_list']['day'] = 'Mga Adlaw';
$app_list_strings['aow_date_type_list']['week'] = 'Semana';
$app_list_strings['aow_date_type_list']['month'] = 'Buwan';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Oras sa Negosyo';
$app_list_strings['aow_date_options']['now'] = 'Karon';
$app_list_strings['aow_date_options']['today'] = 'Karon';
$app_list_strings['aow_date_options']['field'] = 'Kini nga field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Tanang Users';
$app_list_strings['aow_assign_options']['role'] = 'Tanang Users sa Role';
$app_list_strings['aow_assign_options']['security_group'] = 'Tanang Users sa Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'I-record ang Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Mga kapareha nga Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Tig gamit';
$app_list_strings['aow_email_type_list']['Users'] = 'Tig gamit';
$app_list_strings['aow_email_to_list']['to'] = 'Sa';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tanang mga rekord';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Bag-ong mga rekord';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Gi-usab nga mga rekord';
$app_list_strings['aow_run_when_list']['Always'] = 'Pirmi';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Igka-save lamang';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Sa taga-schedule lamang';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Mga Proyekto - Mga Template';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Proyekto Gesugp na mga Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Humana para makasugod';
$app_list_strings['relationship_type_list']['SS'] = 'Sugdi para makasugod';
$app_list_strings['duration_unit_dom']['Days'] = 'Mga Adlaw';
$app_list_strings['duration_unit_dom']['Hours'] = 'Oras';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Tan-awa ang Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Tan-awa ang Detalye';
$app_strings['LBL_CREATE_PROJECT'] = 'Paghimo og Proyekto';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Taas na latid';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latid';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Estado sa Geocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adres';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mga Mapa';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Mga Mapa - Mga Marka';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Mga Mapa - Mga Lugar';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Mga Mapa - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Mga Partner sa JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Mga milya';
$app_list_strings['map_unit_type_list']['km'] = 'Mga kilometro';

$app_list_strings['map_module_type_list']['Accounts'] = 'Mga Account';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontak';
$app_list_strings['map_module_type_list']['Cases'] = 'Mga Kaso';
$app_list_strings['map_module_type_list']['Leads'] = 'Nag-una';
$app_list_strings['map_module_type_list']['Meetings'] = 'Mag Kapunungan';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Mga oportunidad';
$app_list_strings['map_module_type_list']['Project'] = 'Mga Proyekto';
$app_list_strings['map_module_type_list']['Prospects'] = 'Targetanan';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Account';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontak';
$app_list_strings['map_relate_type_list']['Cases'] = 'Kaso';
$app_list_strings['map_relate_type_list']['Leads'] = 'Mag una';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Mag tipok';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Naay chance';
$app_list_strings['map_relate_type_list']['Project'] = 'Himoun';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Targetanan';

$app_list_strings['marker_image_list']['accident'] = 'Aksidente';
$app_list_strings['marker_image_list']['administration'] = 'Mga Admin';
$app_list_strings['marker_image_list']['agriculture'] = 'Agrikultura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Gamay nga Aircraft';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Turismo sa Eroplano';
$app_list_strings['marker_image_list']['airport'] = 'Tugpahanan';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Apartment';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arko';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banko';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banko Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banko Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Dagat';
$app_list_strings['marker_image_list']['beautiful'] = 'Gwapa';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parkinganan sa bisikleta';
$app_list_strings['marker_image_list']['big_city'] = 'Dako nga Siyudad';
$app_list_strings['marker_image_list']['bridge'] = 'Tulay';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderno nga Tulay';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Sakyanan nga ga-kable';
$app_list_strings['marker_image_list']['car'] = 'Sakyanan';
$app_list_strings['marker_image_list']['car_rental'] = 'Sakyanan nga paabangan';
$app_list_strings['marker_image_list']['carrepair'] = 'Paayuhan sa sakyanan';
$app_list_strings['marker_image_list']['castle'] = 'Kastilyo';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedral';
$app_list_strings['marker_image_list']['chapel'] = 'Kapilya';
$app_list_strings['marker_image_list']['church'] = 'Simbahan';
$app_list_strings['marker_image_list']['city_square'] = 'Siyudad nga naka-square';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Ikaduhang Cluster';
$app_list_strings['marker_image_list']['cluster_3'] = 'Ikatulong Cluster';
$app_list_strings['marker_image_list']['cluster_4'] = 'Ikaupat nga Cluster';
$app_list_strings['marker_image_list']['cluster_5'] = 'Ikalimang Cluster';
$app_list_strings['marker_image_list']['coffee'] = 'Kape';
$app_list_strings['marker_image_list']['community_centre'] = 'Sentro sa Komunidad';
$app_list_strings['marker_image_list']['company'] = 'Kompanya';
$app_list_strings['marker_image_list']['conference'] = 'Konperins';
$app_list_strings['marker_image_list']['construction'] = 'Nag buhat og';
$app_list_strings['marker_image_list']['convenience'] = 'Kasayon';
$app_list_strings['marker_image_list']['court'] = 'Korte';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Pag-ilis sa Kurensiya';
$app_list_strings['marker_image_list']['customs'] = 'Mga Custom';
$app_list_strings['marker_image_list']['cycling'] = 'Pagbisikleta';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Dentista';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Department Store';
$app_list_strings['marker_image_list']['disability'] = 'Kakulangan';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Gi-disable ang Paradahan';
$app_list_strings['marker_image_list']['doctor'] = 'Doktor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Higot sa Iro';
$app_list_strings['marker_image_list']['down'] = 'Ubos';
$app_list_strings['marker_image_list']['down_left'] = 'Sa wala sa ubos';
$app_list_strings['marker_image_list']['down_right'] = 'Sa tuo sa ubos';
$app_list_strings['marker_image_list']['down_then_left'] = 'Sa ubos dayon sa wala';
$app_list_strings['marker_image_list']['down_then_right'] = 'Sa ubos dayon sa tuo';
$app_list_strings['marker_image_list']['drugs'] = 'Drogas';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Embahada';
$app_list_strings['marker_image_list']['expert'] = 'Eksperto';
$app_list_strings['marker_image_list']['factory'] = 'Pabrika';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Nahulog nga mga bato';
$app_list_strings['marker_image_list']['fast_food'] = 'Mga pagkaon nga dali ma-prepara';
$app_list_strings['marker_image_list']['festival'] = 'Pista';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Kalasangan';
$app_list_strings['marker_image_list']['fountain'] = 'Tuburan';
$app_list_strings['marker_image_list']['friday'] = 'Biernes';
$app_list_strings['marker_image_list']['garden'] = 'Tanoman';
$app_list_strings['marker_image_list']['gas_station'] = 'Gasolinahan';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Mga regalo';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Groserihan';
$app_list_strings['marker_image_list']['hairsalon'] = 'Tupihanan';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Taas nga dalan';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Bahin sa Kasaysayan';
$app_list_strings['marker_image_list']['home'] = 'Home';
$app_list_strings['marker_image_list']['hospital'] = 'Ospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Usa ka-star nga Hotel';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Duha ka-star nga Hotel';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Tulo ka-star nga Hotel';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Upat ka-star nga Hotel';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Lima ka-star nga Hotel';
$app_list_strings['marker_image_list']['info'] = 'Impormasyon';
$app_list_strings['marker_image_list']['justice'] = 'Hustisya';
$app_list_strings['marker_image_list']['lake'] = 'Linaw';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Wala';
$app_list_strings['marker_image_list']['left_then_down'] = 'Wala dayon sa Ubos';
$app_list_strings['marker_image_list']['left_then_up'] = 'Wala dayon sa Ibabaw';
$app_list_strings['marker_image_list']['library'] = 'Librarya';
$app_list_strings['marker_image_list']['lighthouse'] = 'Parola';
$app_list_strings['marker_image_list']['liquor'] = 'Bino';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Agi-anan nga Dalan';
$app_list_strings['marker_image_list']['massage'] = 'Masahe';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Tower sa Mobile Phone';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderno nga Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monasteryo';
$app_list_strings['marker_image_list']['monday'] = 'Lunes';
$app_list_strings['marker_image_list']['monument'] = 'Monumento';
$app_list_strings['marker_image_list']['mosque'] = 'Moske';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorsiklo';
$app_list_strings['marker_image_list']['museum'] = 'Museyo';
$app_list_strings['marker_image_list']['music_live'] = 'Live nga Musika';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palasyo';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramic';
$app_list_strings['marker_image_list']['park'] = 'Parke';
$app_list_strings['marker_image_list']['park_and_ride'] = 'I-park og Sakyan';
$app_list_strings['marker_image_list']['parking'] = 'Paradahan';
$app_list_strings['marker_image_list']['photo'] = 'Litrato';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Mga lugar nga wa nabisita';
$app_list_strings['marker_image_list']['places_visited'] = 'Mga lugar nga nabisita';
$app_list_strings['marker_image_list']['playground'] = 'Dulaanan';
$app_list_strings['marker_image_list']['police'] = 'Pulis';
$app_list_strings['marker_image_list']['port'] = 'Pantalan';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Planta sa Kuryente';
$app_list_strings['marker_image_list']['power_substation'] = 'Mga ikaduhang stasyon sa kuryente';
$app_list_strings['marker_image_list']['public_art'] = 'Publiko nga Art';
$app_list_strings['marker_image_list']['rain'] = 'Uwan';
$app_list_strings['marker_image_list']['real_estate'] = 'Balay og Lote';
$app_list_strings['marker_image_list']['regroup'] = 'Usbon pag-grupo';
$app_list_strings['marker_image_list']['resort'] = 'Bakasyonan';
$app_list_strings['marker_image_list']['restaurant'] = 'Kan-anan';
$app_list_strings['marker_image_list']['restaurant_african'] = 'African nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Barbeque-han nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Buffet nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Chinese nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Isda nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Isda nga mga Chips nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gourmet nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Greek nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indian nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Italian nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japanese nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Korean nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Mediterranean nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Mexican nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantiko nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Thai nga kan-anan';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Turkish nga kan-anan';
$app_list_strings['marker_image_list']['right'] = 'Tuo';
$app_list_strings['marker_image_list']['right_then_down'] = 'Tuo dayon Ubos';
$app_list_strings['marker_image_list']['right_then_up'] = 'Tuo dayon taas';
$app_list_strings['marker_image_list']['saturday'] = 'Sabado';
$app_list_strings['marker_image_list']['school'] = 'Skwelahan';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Shopping Mall';
$app_list_strings['marker_image_list']['shore'] = 'Baybayon';
$app_list_strings['marker_image_list']['sight'] = 'Panan-aw';
$app_list_strings['marker_image_list']['small_city'] = 'Gamay nga syudad';
$app_list_strings['marker_image_list']['snow'] = 'Snow';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Kakusgon 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Kakusgon 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Kakusgon 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Kakusgon 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Kakusgon 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Kakusgon 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Kakusgon 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Kakusgon 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Kakusgon 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Kakusgon 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Kakusgon 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Kakusgon 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Kakusog nga Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Estadyum';
$app_list_strings['marker_image_list']['statue'] = 'Estatwa';
$app_list_strings['marker_image_list']['steam_train'] = 'Steam nga Train';
$app_list_strings['marker_image_list']['stop'] = 'Hunong';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'Ubos nga dalan';
$app_list_strings['marker_image_list']['sun'] = 'Sun';
$app_list_strings['marker_image_list']['sunday'] = 'Domingo';
$app_list_strings['marker_image_list']['supermarket'] = 'Merkado';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Agi-anan sa taxi';
$app_list_strings['marker_image_list']['teahouse'] = 'Balay sa tsa';
$app_list_strings['marker_image_list']['telephone'] = 'Telepono';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Templo sa Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terrace';
$app_list_strings['marker_image_list']['text'] = 'Teksto';
$app_list_strings['marker_image_list']['theater'] = 'Teatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Theme Park';
$app_list_strings['marker_image_list']['thursday'] = 'Huwebes';
$app_list_strings['marker_image_list']['toilets'] = 'Mga kasilyas';
$app_list_strings['marker_image_list']['toll_station'] = 'Estastyon kung asa magbayad';
$app_list_strings['marker_image_list']['tower'] = 'Torre';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Kamera sa tigpatuman sa Traffic';
$app_list_strings['marker_image_list']['train'] = 'Tren';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Trak';
$app_list_strings['marker_image_list']['tuesday'] = 'Martes';
$app_list_strings['marker_image_list']['tunnel'] = 'Tanel';
$app_list_strings['marker_image_list']['turn_left'] = 'Liko sa wala';
$app_list_strings['marker_image_list']['turn_right'] = 'Liko sa tuo';
$app_list_strings['marker_image_list']['university'] = 'Unibersidad';
$app_list_strings['marker_image_list']['up'] = 'Ibabaw';
$app_list_strings['marker_image_list']['up_left'] = 'Wala nga ibabaw';
$app_list_strings['marker_image_list']['up_right'] = 'Tuo nga ibabaw';
$app_list_strings['marker_image_list']['up_then_left'] = 'Sa ibabaw dayon sa wala';
$app_list_strings['marker_image_list']['up_then_right'] = 'Ibabaw dayon sa Tuo';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Tubig';
$app_list_strings['marker_image_list']['waterfall'] = 'Busay';
$app_list_strings['marker_image_list']['watermill'] = 'Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Tubig nga parke';
$app_list_strings['marker_image_list']['watertower'] = 'Torre nga tubig';
$app_list_strings['marker_image_list']['wednesday'] = 'Merkules';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Wind Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windmill';
$app_list_strings['marker_image_list']['winery'] = 'Winery';
$app_list_strings['marker_image_list']['work_office'] = 'Opisina sa trabaho-an';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'World Heritage Site';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Gawas sa Opisina';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Naa sa Meeting';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Untroschedule';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Palihog og butang sa gi-reschedule nga impormasyon';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Petsa:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Rason:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Palihog sa pagpili og balido nga petsa';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Palihog sa pagpili og rason';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Untroschedule';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Mga mi-aging suway sa pagtawag';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Mga nisuway sa pagtawag';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Grupo para sa Seguridad';
$app_strings['LBL_ROLE'] = 'Imong Role';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Mga Outbound Email Account';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Mga detalye sa Social Feed';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Isulat';

$app_strings['LBL_ADD_TAB'] = 'Pagdungag og Tab';
$app_strings['LBL_EDIT_TAB'] = 'Usba ang mga kawil';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Pagbutang og pangan sa Dashboard:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Numero kung pila ka Columns:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Sigurado ka ba nga gusto nimo tangtangon ang';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Dugangi og Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Tangtanga ang kasamtangang Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Usaba ang pangan sa Dashboard Page';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Naay isugo',
    'Meetings' => 'Mag Kapunungan',
    'Calls' => 'Tawag',
    'Notes' => 'Tima-ilhan',
    'Emails' => 'Imong Email'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editor sa Template Part';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Nipislit ka sa gawas sa field nga wala gi-save imong gi-edit. Pislita ang ok kung malipayon raka nga mawala imong gipang-usab, o cancel kung ganahan ka nga magpadayon sa pag-edit";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Adunay error sa pagload sa field. Ang imong session kay basin nahuman na. Palihog og log in sa pag-usab para maayo kini";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Baligya',
    'getAccountsSpotsData' => 'Mga Account',
    'getLeadsSpotsData' => 'Nag-una',
    'getServiceSpotsData' => 'Serbisyo',
    'getMarketingSpotsData' => 'Magmamalengki',
    'getMarketingActivitySpotsData' => 'Mga aktibidad sa Marketing',
    'getActivitiesSpotsData' => 'Kalihukan',
    'getQuotesSpotsData' => 'Mga Quote'
);

$app_list_strings['moduleList']['Spots'] = 'Mga spot';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Oras sa Negosyo';
$app_list_strings['business_hours_list']['0'] = 'Alas dose sa kadlawn';
$app_list_strings['business_hours_list']['1'] = 'Ala una sa kadlawn';
$app_list_strings['business_hours_list']['2'] = 'Alas dos sa kadlawn';
$app_list_strings['business_hours_list']['3'] = 'Alas tres sa kadlawn';
$app_list_strings['business_hours_list']['4'] = 'Alas cuatro sa kadlawn';
$app_list_strings['business_hours_list']['5'] = 'Alas cinco sa kadlawn';
$app_list_strings['business_hours_list']['6'] = 'Alas seis sa buntag';
$app_list_strings['business_hours_list']['7'] = 'Alas siete sa buntag';
$app_list_strings['business_hours_list']['8'] = 'Alas ocho sa buntag';
$app_list_strings['business_hours_list']['9'] = 'Alas nueve sa buntag';
$app_list_strings['business_hours_list']['10'] = 'Alas diez sa buntag';
$app_list_strings['business_hours_list']['11'] = 'Alas once sa buntag';
$app_list_strings['business_hours_list']['12'] = 'Alas doce sa udto';
$app_list_strings['business_hours_list']['13'] = 'Ala una sa hapon';
$app_list_strings['business_hours_list']['14'] = 'Alas dos sa hapon';
$app_list_strings['business_hours_list']['15'] = 'Alas tres sa hapon';
$app_list_strings['business_hours_list']['16'] = 'Alas cuatro sa hapon';
$app_list_strings['business_hours_list']['17'] = 'Alas cinco sa hapon';
$app_list_strings['business_hours_list']['18'] = 'Alas seis sa gabie';
$app_list_strings['business_hours_list']['19'] = 'Alas siete sa gabie';
$app_list_strings['business_hours_list']['20'] = 'Alas ocho sa gabie';
$app_list_strings['business_hours_list']['21'] = 'Alas nueve sa gabie';
$app_list_strings['business_hours_list']['22'] = 'Alas diez sa gabie';
$app_list_strings['business_hours_list']['23'] = 'Alas once sa gabie';
$app_list_strings['day_list']['Monday'] = 'Lunes';
$app_list_strings['day_list']['Tuesday'] = 'Martes';
$app_list_strings['day_list']['Wednesday'] = 'Merkules';
$app_list_strings['day_list']['Thursday'] = 'Huwebes';
$app_list_strings['day_list']['Friday'] = 'Biernes';
$app_list_strings['day_list']['Saturday'] = 'Sabado';
$app_list_strings['day_list']['Sunday'] = 'Domingo';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Suwat';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portrait';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Talan-awon';


$app_list_strings['moduleList']['SurveyResponses'] = 'Mga pag tubag sa survey';
$app_list_strings['moduleList']['Surveys'] = 'Mga survey';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Mga pangutana ug mga tubag sa maong survey';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Mga pangutana sa pagsurvey';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Mga kapilian ug pangutana sa maong survey';
$app_list_strings['survey_status_list']['Draft'] = 'Tig drap';
$app_list_strings['survey_status_list']['Public'] = 'Publiko';
$app_list_strings['survey_status_list']['Closed'] = 'Sirado';
$app_list_strings['surveys_question_type']['Text'] = 'Teksto';
$app_list_strings['surveys_question_type']['Textbox'] = 'Suwatanan';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'Radyo';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'Petsa og oras';
$app_list_strings['surveys_question_type']['Date'] = 'Petsa';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Rating';
$app_list_strings['surveys_matrix_options'][0] = 'Natagbaw';
$app_list_strings['surveys_matrix_options'][1] = 'Natagbaw ba or wala matagbaw';
$app_list_strings['surveys_matrix_options'][2] = 'Wala matagbaw';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Naghulat sa kompirmasyon sa opt in, Wala napadala ang kompirmasyon sa opt in';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Pakyas ang pagpadala og kompermasyon sa opt sa email';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Naghulat sa kopirmasyon sa opt in, Napadala na ang kompirmasyon sa opt in';
$app_strings['LBL_OPT_IN'] = 'Opted sa sud';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Gikumpirma ang Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Napili nga pagawson';
$app_strings['LBL_OPT_IN_INVALID'] = 'Dili pwede';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Wala paganaha',
    'opt-in' => 'Opt sa sud',
    'confirmed-opt-in' => 'Gikumpirma ang Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Dili Opt In',
    'opt-in' => 'Opt sa sud',
    'confirmed-opt-in' => 'Gikumpirma ang Opt In'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Ang nakompirma nga opt in nga email kay nadugang sa email queue para sa %s nga mga email address. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Dili ma-send ang email sa %s nga email address, kay wala sila na opted in. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s nga email address kay walay balido nga id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Napakyas ang Two Factor Authentication';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Napadala na ang code sa Two Factor Authentication.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Two Factor Authentication code failed to send.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Salamat sa pagsumiter sa imong pagka-interesado.';

$app_strings['ERR_IP_CHANGE'] = 'Your session was terminated due to a significant change in your IP address';
$app_strings['ERR_RETURN'] = 'Return to Home';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Grant',
    'client_credentials' => 'Mga kredensyal sa kliyente',
    'implicit' => 'Implicit',
    'authorization_code' => 'Awtorisasyon nga Code'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => ' mga minuto ',
    'hour' => ' mga takna',
    'day' => 'mga adlaw',
    'week' => 'semana',
    'month' => 'mga bulan',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personal',
    'shared' => 'Ishare',
    'group' => 'Grupo',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Nakonekta',
    'failed' => 'Hagbong',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Ge prosiso',
    'success' => 'Kalampusan',
    'warning' => 'Pasidaan',
    'error' => 'Dili Mao',
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
$app_strings['LBL_CLICK_HERE'] = 'Pislita diri';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Pangitaa';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Pangitaa';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Pangitaa';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Kaniadto';
$app_strings['LBL_SEARCH_NEXT'] = 'Sunod';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' of ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Gamiton og pag una sa pangita';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Gamita ang Basic na pangitaon';

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

$app_strings['LBL_KEY'] = 'Yawi';
$app_strings['LBL_VALUE'] = 'Bili';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Ang Pirma';

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
