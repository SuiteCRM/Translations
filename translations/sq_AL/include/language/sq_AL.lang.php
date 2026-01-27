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
    'language_pack_name' => 'Shqip (Albanian) - sq_AL',
    'moduleList' => array(
        'Home' => 'Ballina',
        'ResourceCalendar' => 'Resource Calendar',
        'Contacts' => 'Kontaktet',
        'Accounts' => 'Accounts',
        'Alerts' => 'Alerts',
        'Opportunities' => 'Mundësite',
        'Cases' => 'rastet',
        'Notes' => 'Shënimet',
        'Calls' => 'Thirjet',
        'TemplateSectionLine' => 'Template Section Line',
        'Calls_Reschedule' => 'Calls Reschedule',
        'Emails' => 'Emailet',
        'EAPM' => 'EAPM',
        'Meetings' => 'Mbledhjet',
        'Tasks' => 'Detyrat',
        'Calendar' => 'Kalendari',
        'Leads' => 'udhëheqjet',
        'Currencies' => 'Monedhat',
        'Activities' => 'Aktivitetet',
        'Bugs' => 'Gjyrmues i gabimeve',
        'Feeds' => 'RSS',
        'iFrames' => 'Faqet e mia',
        'TimePeriods' => 'Kohëzgjatja',
        'ContractTypes' => 'Llojet e kontratës',
        'Schedulers' => 'Planifikuesit',
        'Project' => 'Projektet',
        'ProjectTask' => 'Detyrat projektuese',
        'Campaigns' => 'fushatat',
        'CampaignLog' => 'identifikimi i fushatës',
        'Documents' => 'Dokumentacionet',
        'DocumentRevisions' => 'Revizioni i dokumentacionit',
        'Connectors' => 'Lidhjet',
        'Roles' => 'Rolet',
        'Notifications' => 'Shënimet',
        'Sync' => 'Sinkronizim',
        'Users' => 'përdoruesit',
        'Employees' => 'Punëtorët',
        'Administration' => 'Administrata',
        'ACLRoles' => 'Rolet',
        'InboundEmail' => 'Email drejtuar përbrenda',
        'Releases' => 'Publikimet',
        'Prospects' => 'synimet',
        'Queues' => 'Radhët',
        'EmailMarketing' => 'Email marketingu',
        'EmailTemplates' => 'Email - Templates',
        'ProspectLists' => 'Targets - Lists',
        'SavedSearch' => 'Kërkimet e ruajtura',
        'UpgradeWizard' => 'Rindërto wizardin',
        'Trackers' => 'Gjurmuesit',
        'TrackerSessions' => 'sesionet e gjurmuesit',
        'TrackerQueries' => 'Pyetjet e gjurmuesit',
        'FAQ' => 'pyetje më shpesh të parashtruara',
        'Newsletters' => 'Buletinet',
        'SugarFeed' => 'SuiteCRM furnizimet',
        'SugarFavorites' => 'Favoritet',

        'OAuthKeys' => 'OAuth çelësat e konsumimit',
        'OAuthTokens' => 'OAuth Shenjat',
        'OAuth2Clients' => 'OAuth Clients',
        'OAuth2Tokens' => 'OAuth Shenjat',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Ballina',
        'Dashboard' => 'Paneli',
        'Contacts' => 'Kontaktet',
        'Accounts' => 'llogaritë',
        'Opportunities' => 'Mundësite',
        'Cases' => 'rastet',
        'Notes' => 'Shënimet',
        'Calls' => 'Thirjet',
        'Emails' => 'Emailet',
        'EmailTemplates' => 'Email Template',
        'Meetings' => 'Mbledhjet',
        'Tasks' => 'Detyrat',
        'Calendar' => 'Kalendari',
        'Leads' => 'udhëheqjet',
        'Activities' => 'Aktivitetet',
        'Bugs' => 'Gjyrmues i gabimeve',
        'KBDocuments' => 'KBDokument',
        'Feeds' => 'RSS',
        'iFrames' => 'Faqet e mia',
        'TimePeriods' => 'Kohëzgjatja',
        'Project' => 'Projekti',
        'ProjectTask' => 'Detyrat projektuese',
        'Prospects' => 'Synim',
        'Campaigns' => 'fushatat',
        'Documents' => 'Dokumentacion',
        'Sync' => 'Sinkronizim',
        'Users' => 'Përdorues',
        'SugarFavorites' => 'Favoritet',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Po',
        '2' => 'Jo',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analist',
        'Competitor' => 'Konkurent',
        'Customer' => 'Konsumator',
        'Integrator' => 'Integrues',
        'Investor' => 'Investitor',
        'Partner' => 'Partner',
        'Press' => 'shtypi',
        'Prospect' => 'Prospekti',
        'Reseller' => 'Rishitës',
        'Other' => 'Tjetër',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Veshje',
        'Banking' => 'Veprime bankare',
        'Biotechnology' => 'Bioteknlogjia',
        'Chemicals' => 'Kimikale',
        'Communications' => 'Komunikimi',
        'Construction' => 'Ndërtimtari',
        'Consulting' => 'Konsulting',
        'Education' => 'Edukimi',
        'Electronics' => 'Elektronika',
        'Energy' => 'Energjia',
        'Engineering' => 'Inxhinjeri',
        'Entertainment' => 'Dëfrimi',
        'Environmental' => 'Mjedisi',
        'Finance' => 'Financa',
        'Government' => 'Publike',
        'Healthcare' => 'Kujdesi mjeksor',
        'Hospitality' => 'Mikpritja',
        'Insurance' => 'Sigurimi',
        'Machinery' => 'Maqineria',
        'Manufacturing' => 'Prodhimtaria',
        'Media' => 'Media',
        'Not For Profit' => 'Jo profitabile',
        'Recreation' => 'Rikrijim',
        'Retail' => 'Rishitje',
        'Shipping' => 'Transporti',
        'Technology' => 'Teknologjia',
        'Telecommunications' => 'Telekomunikimi',
        'Transportation' => 'Transporti',
        'Utilities' => 'Shërbimet',
        'Other' => 'Tjetër',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Thirje e ftohtë',
        'Existing Customer' => 'Konsumator ekzitues',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Punëtorët',
        'Partner' => 'Partner',
        'Public Relations' => 'Mardhënie publike',
        'Direct Mail' => 'Mail direkt',
        'Conference' => 'Konferencë',
        'Trade Show' => 'Ekspozimi i tregtisë',
        'Web Site' => 'Ueb faqe',
        'Word of mouth' => 'Fjalë e gojës',
        'Email' => 'Emailet',
        'Campaign' => 'fushatat',
        'Other' => 'Tjetër',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Biznes ekzistues',
        'New Business' => 'Biznes i ri',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Të ardhurat',
        'Investment' => 'Investimi',
        'Expected_Revenue' => 'Të ardhurat e pritura',
        'Budget' => 'Buxheti',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Vendimarës biznesi',
        'Business Evaluator' => 'Vlerësues biznesi',
        'Technical Decision Maker' => 'Vendimmarës teknik',
        'Technical Evaluator' => 'Vlerësues teknik',
        'Executive Sponsor' => 'Sponzor ekzekutiv',
        'Influencer' => 'Influencues',
        'Other' => 'Tjetër',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Kontakti alternativ',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kualifikimi',
        'Needs Analysis' => 'Nevojitet analizë',
        'Value Proposition' => 'Propozim me vlerë',
        'Id. Decision Makers' => 'Identifying Decision Makers',
        'Perception Analysis' => 'Analiza e perceptimit',
        'Proposal/Price Quote' => 'Kuota Propozim/Çmim',
        'Negotiation/Review' => 'Negocimi/Shqyrtimi',
        'Closed Won' => 'Fitimi i mbyllur',
        'Closed Lost' => 'Humbja e mbyllur',
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
        'Call' => 'Thirjet',
        'Meeting' => 'Mbledhjet',
        'Task' => 'Detyrat',
        'Email' => 'Emailet',
        'Note' => 'Shënimet',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Zr.',
        'Ms.' => 'Z-shë',
        'Mrs.' => 'Z-një',
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
        60 => '1 minutë para',
        300 => '5 minuta para',
        600 => '10 minuta para',
        900 => '15 minuta para',
        1800 => '30 minuta para',
        3600 => '1 orë para',
        7200 => '2 orë para',
        10800 => '3 orë para',
        18000 => '5 orë para',
        86400 => '1 ditë para',
    ),

    'task_priority_default' => 'Mesatar',
    'task_priority_dom' => array(
        'High' => 'I lartë',
        'Medium' => 'Mesatar',
        'Low' => 'I ulët',
    ),
    'task_status_default' => 'Not Started',
    'task_status_dom' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'Në progres',
        'Completed' => 'Ka përfunduar',
        'Pending Input' => 'Të hyrat e pezulluara',
        'Deferred' => 'I shtyrë',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'I mbajtur',
        'Not Held' => 'I pambajtur',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Tjetër',
        'Sugar' => 'SuiteCRMCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'I mbajtur',
        'Not Held' => 'I pambajtur',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'përbrenda',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'I ri',
        'Assigned' => 'Drejtuar',
        'In Process' => 'Në proces e sipër',
        'Converted' => 'I konvertuar',
        'Recycled' => 'ricikluar',
        'Dead' => 'Vdekur',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'I lartë',
        'P2' => 'Mesatar',
        'P3' => 'I ulët',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Përdorues i rregullt',
        'Administrator' => 'Administratori',
    ),
    'user_status_dom' => array(
        'Active' => 'aktive',
        'Inactive' => 'pasive',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Email Code',
    ),
    'employee_status_dom' => array(
        'Active' => 'aktive',
        'Terminated' => 'e ndërpritura',
        'Leave of Absence' => 'Largim i mungesave',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'I lartë',
        'Medium' => 'Mesatar',
        'Low' => 'I ulët',
    ),
    'project_task_priority_default' => 'Mesatar',

    'project_task_status_options' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'Në progres',
        'Completed' => 'Ka përfunduar',
        'Pending Input' => 'Të hyrat e pezulluara',
        'Deferred' => 'I shtyrë',
    ),
    'project_task_utilization_options' => array(
        '0' => 'none',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Skicë',
        'In Review' => 'Në shqyrtim',
        'Underway' => 'Underway',
        'On_Hold' => 'Në pritje',
        'Completed' => 'Ka përfunduar',
    ),
    'project_status_default' => 'Skicë',

    'project_duration_units_dom' => array(
        'Days' => 'Ditët',
        'Hours' => 'Orët',
    ),

    'activity_status_type_dom' => array(
        '' => '-Asnjëra',
        'active' => 'aktive',
        'inactive' => 'pasive',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Accounts',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'llogaritë',
        'Opportunities' => 'Mundësite',
        'Cases' => 'rastet',
        'Leads' => 'udhëheqjet',
        'Contacts' => 'Kontaktet', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Gjyrmues i gabimeve',
        'Project' => 'Projekti',

        'Prospects' => 'Synim',
        'ProjectTask' => 'Detyrat projektuese',

        'Tasks' => 'Detyrat',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produkti',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'llogaritë',
        'Contacts' => 'Kontaktet',
        'Opportunities' => 'Mundësite',
        'Campaigns' => 'fushatat',
        'Tasks' => 'Detyrat',
        'Emails' => 'Emailet',

        'Bugs' => 'Gjyrmues i gabimeve',
        'Project' => 'Projekti',
        'ProjectTask' => 'Detyrat projektuese',
        'Prospects' => 'Synim',
        'Cases' => 'rastet',
        'Leads' => 'udhëheqjet',

        'Meetings' => 'Mbledhjet',
        'Calls' => 'Thirjet',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produkti',
    ),

    'parent_type_display' => array(
        'Accounts' => 'llogaritë',
        'Contacts' => 'Kontaktet',
        'Tasks' => 'Detyrat',
        'Opportunities' => 'Mundësite',

        'Bugs' => 'Gjyrmues i gabimeve',
        'Cases' => 'rastet',
        'Leads' => 'udhëheqjet',

        'Project' => 'Projekti',
        'ProjectTask' => 'Detyrat projektuese',

        'Prospects' => 'Synim',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produkti',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Kuotat',
        'AOS_Invoices' => 'Invoices',
        'AOS_Contracts' => 'Kontratat',
    ),
    'issue_priority_default_key' => 'Mesatar',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgjente',
        'High' => 'I lartë',
        'Medium' => 'Mesatar',
        'Low' => 'I ulët',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'I pranuar',
        'Duplicate' => 'Dublo',
        'Closed' => 'I mbyllur',
        'Out of Date' => 'Jashtë datës',
        'Invalid' => 'Jo valide',
    ),

    'issue_status_default_key' => 'I ri',
    'issue_status_dom' => array(
        'New' => 'I ri',
        'Assigned' => 'Drejtuar',
        'Closed' => 'I mbyllur',
        'Pending' => 'Pezull',
        'Rejected' => 'Anuluar',
    ),

    'bug_priority_default_key' => 'Mesatar',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgjente',
        'High' => 'I lartë',
        'Medium' => 'Mesatar',
        'Low' => 'I ulët',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'I pranuar',
        'Duplicate' => 'Dublo',
        'Fixed' => 'Fiks',
        'Out of Date' => 'Jashtë datës',
        'Invalid' => 'Jo valide',
        'Later' => 'Më vonë',
    ),
    'bug_status_default_key' => 'I ri',
    'bug_status_dom' => array(
        'New' => 'I ri',
        'Assigned' => 'Drejtuar',
        'Closed' => 'I mbyllur',
        'Pending' => 'Pezull',
        'Rejected' => 'Anuluar',
    ),
    'bug_type_default_key' => 'Gjyrmues i gabimeve',
    'bug_type_dom' => array(
        'Defect' => 'Defekt',
        'Feature' => 'Ardhmëri',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administrata',
        'Product' => 'Produkti',
        'User' => 'Përdorues',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'I brendshëm',
        'Forum' => 'Forum',
        'Web' => 'Uebi',
        'InboundEmail' => 'Emailet',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Accounts',
        'Activities' => 'Aktivitetet',
        'Bugs' => 'Gjyrmues i gabimeve',
        'Calendar' => 'Kalendari',
        'Calls' => 'Thirjet',
        'Campaigns' => 'fushatat',
        'Cases' => 'rastet',
        'Contacts' => 'Kontaktet',
        'Currencies' => 'Monedhat',
        'Dashboard' => 'Paneli',
        'Documents' => 'Dokumentacionet',
        'Emails' => 'Emailet',
        'Feeds' => 'Furnizimet',
        'Forecasts' => 'Parashikimet',
        'Help' => 'ndihmë',
        'Home' => 'Ballina',
        'Leads' => 'udhëheqjet',
        'Meetings' => 'Mbledhjet',
        'Notes' => 'Shënimet',
        'Opportunities' => 'Mundësite',
        'Outlook Plugin' => 'Vendosja e pikëpamjes',
        'Projects' => 'Projektet',
        'Quotes' => 'Kuotat',
        'Releases' => 'Publikimet',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Rindërto',
        'Users' => 'përdoruesit',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planifikim',
        'Active' => 'aktive',
        'Inactive' => 'pasive',
        'Complete' => 'Plotëso',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Teleshitjet',
        'Mail' => 'Mail',
        'Email' => 'Emailet',
        'Print' => 'Shtyp',
        'Web' => 'Uebi',
        'Radio' => 'Radio',
        'Television' => 'Televizion',
        'NewsLetter' => 'Buletinat',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Javore',
        'Monthly' => 'Mujore',
        'Quarterly' => 'Semestrale',
        'Annually' => 'Vjetore',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Janar',
        '2' => 'Shkurt',
        '3' => 'Mars',
        '4' => 'Prill',
        '5' => 'Maj',
        '6' => 'Qershor',
        '7' => 'Korrik',
        '8' => 'Gusht',
        '9' => 'Shtator',
        '10' => 'Tetor',
        '11' => 'Nëntor',
        '12' => 'Dhjetor',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Shku',
        '3' => 'Mar',
        '4' => 'Pri',
        '5' => 'Maj',
        '6' => 'Qer',
        '7' => 'Korr',
        '8' => 'Gush',
        '9' => 'Shat',
        '10' => 'Tet',
        '11' => 'Nënt',
        '12' => 'Dhjet',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'E diel',
        '2' => 'E hënë',
        '3' => 'E martë',
        '4' => 'E mërkurë',
        '5' => 'E enjte',
        '6' => 'E premte',
        '7' => 'E shtunë',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Diel',
        '2' => 'Hënë',
        '3' => 'Mart',
        '4' => 'Mërk',
        '5' => 'Enjt',
        '6' => 'Prem',
        '7' => 'Shtu',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'Paradite',
        'pm' => 'pasdite',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'Paradite',
        'PM' => 'Pasdite',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'personale',
        'group' => 'Grup',
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
        'personal' => 'personale',
        'group' => 'Grup',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'personale',
        'group' => 'Grup',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'personale',
        'group' => 'Grup',
        'system' => 'Sistemi',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'aktive',
        'Inactive' => 'pasive',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'e dërguar',
        'archived' => 'Arkivuar',
        'draft' => 'Skicë',
        'inbound' => 'përbrenda',
        'campaign' => 'fushatat',
    ),
    'dom_email_status' => array(
        'archived' => 'Arkivuar',
        'closed' => 'I mbyllur',
        'draft' => 'Në skicë',
        'read' => 'Lexo',
        'replied' => 'e përgjigjur',
        'sent' => 'e dërguar',
        'send_error' => 'Dërgo gabim',
        'unread' => 'E palexuar',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arkivuar',
    ),

    'dom_email_server_type' => array(
        '' => '-Asnjëra',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-Asnjëra',
        'createcase' => 'Krijo rast',
        'bounce' => 'Kthimi i Trajtimit',
    ),
    'dom_email_distribution' => array(
        '' => '-Asnjëra',
        'direct' => 'drejtim direkt',
        'roundRobin' => 'Rotull-Robin',
        'leastBusy' => 'Më pak i zënët',
    ),
    'dom_email_errors' => array(
        1 => 'Only select one user when Direct Assigning items.',
        2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Po',
        'bool_false' => 'Jo',
    ),
    'dom_int_bool' => array(
        1 => 'Po',
        0 => 'Jo',
    ),
    'dom_switch_bool' => array(
        'on' => 'Po',
        'off' => 'Jo',
        '' => 'Jo',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Klienti i emailit SuiteCRM',
        'mailto' => 'Klient i emailit të jashtëm',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Format i emailit të çaktivizuar',
        'html' => 'HTML Email',
        'plain' => 'Email me tekst të thjeshtë',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Koha e drejtimit të fundit, nuk u ekzekutua',
        'ready' => 'Gati',
        'in progress' => 'Në progres',
        'failed' => 'dështuar',
        'completed' => 'Ka përfunduar',
        'no curl' => 'Nuk është drejtuar: Nuk ka asnjë URL të disponueshëm',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'aktive',
        'Inactive' => 'pasive',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutat',
        'hour' => 'Orët',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'marketingu',
        'Knowledege Base' => 'baza e njohurisë',
        'Sales' => 'Shitjet',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arkivuar',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'marketingu kolateral',
        'Product Brochures' => 'Broshurë e produkteve',
        'FAQ' => 'pyetje më shpesh të parashtruara',
    ),

    'document_status_dom' => array(
        'Active' => 'aktive',
        'Draft' => 'Skicë',
        'FAQ' => 'pyetje më shpesh të parashtruara',
        'Expired' => 'Skaduar',
        'Under Review' => 'Në shqyrtim',
        'Pending' => 'Pezull',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Bashkim i  maileve',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Kontrata e licencës',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'I pranuar',
        'decline' => 'Refuzo',
        'tentative' => 'Tentativa',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'I pranuar',
        'decline' => 'Refuzo',
        'tentative' => 'Tentativa',
        'none' => 'Asnjëra',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Asnjëra',
        'Daily' => 'Për ditë',
        'Weekly' => 'Javore',
        'Monthly' => 'Mujore',
        'Yearly' => 'Vjetore',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'Për ditë',
        'Weekly' => 'Javore',
        'Monthly' => 'Mujore',
        'Yearly' => 'Vjetore',
    ),

    'duration_dom' => array(
        '' => 'Asnjëra',
        '900' => '15 minuta',
        '1800' => '30 minuta',
        '2700' => '45 minuta',
        '3600' => '1 orë',
        '5400' => '1.5 orë',
        '7200' => '2 orë',
        '10800' => '3 orë',
        '21600' => '6 orë',
        '86400' => '1 ditë',
        '172800' => '2 ditë',
        '259200' => '3 ditë',
        '604800' => '1 javë',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Parazgjedhur',
        'seed' => 'fillim',
        'exempt_domain' => 'Shtypja e listës - Nga Sfera',
        'exempt_address' => 'Shtypja e listës - Nga Email Adresa',
        'exempt' => 'Shtypja e listës - Nga identifikimi',
        'test' => 'Testo',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'aktive',
        'inactive' => 'pasive',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Mesazhi është dërguar/ Është provuar',
        'send error' => 'Mesazhet e refuzuara,Tjera',
        'invalid email' => 'Mesazhet e refuzuara,Email jovalid',
        'link' => 'Shtyp përmes lidhjes',
        'viewed' => 'Mesazhet e para',
        'removed' => 'e zgjedhur jashtë',
        'lead' => 'Udhëheqjet e krijuara',
        'contact' => 'Kontakted e krijuara',
        'blocked' => 'Shtypur nga adresa ose domaini',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontaktet',
        'Users' => 'përdoruesit',
        'Prospects' => 'synimet',
        'Leads' => 'udhëheqjet',
        'Accounts' => 'Accounts',
    ),
    'merge_operators_dom' => array(
        'like' => 'Përmban',
        'exact' => 'Saktësisht',
        'start' => 'fillon me',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Po',
        'false' => 'Jo',
        'required' => 'E nevojshme',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Disabled',
        1 => 'Mundësuar',
        2 => 'Filtër',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'I lartë',
        'medium' => 'Mesatar',
        'low' => 'I ulët',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Not Started',
        'inprogress' => 'Në progres',
        'completed' => 'Ka përfunduar',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Zgjerimi i legjendës',
        'collapselegend' => 'Legjenda e Kolapsit',
        'clickfordrilldown' => 'Klikoni për stërvitjen poshtë',
        'detailview' => 'Më tepër detaje',
        'piechart' => 'Grafiku në formë torte',
        'groupchart' => 'Grafiku në fomrë grupi',
        'stackedchart' => 'Grafiku i rregulluar',
        'barchart' => 'Grafiku në formë shtylle',
        'horizontalbarchart' => 'Grafiku në formë shtylle horizontale',
        'linechart' => 'Grafiku në fomrë drejtëze',
        'noData' => 'Të dhënat nuk janë të disponueshme',
        'print' => 'Shtyp',
        'pieWedgeName' => 'pjesët',
    ),
    'release_status_dom' => array(
        'Active' => 'aktive',
        'Inactive' => 'pasive',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Citim i vetëm (&#39;)',
        '"' => 'Double Quote (")',
        '' => 'Asnjëra',
        'other' => 'Tjetër:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Tjetër:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Dritare e re',
        '_self' => 'Dritare e njejtë',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Mos vetë-rifresko',
        '30' => 'Çdo 30 sekonda',
        '60' => 'Çdo 1 minutë',
        '180' => 'Çdo 3 miunta',
        '300' => 'Çdo 5 minuta',
        '600' => 'Çdo 10 minuta',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Asnjëherë',
        '30' => 'Çdo 30 sekonda',
        '60' => 'Çdo 1 minutë',
        '180' => 'Çdo 3 miunta',
        '300' => 'Çdo 5 minuta',
        '600' => 'Çdo 10 minuta',
    ),
    'date_range_search_dom' => array(
        '=' => 'Është i barabrtë',
        'not_equal' => 'nuk është',
        'greater_than' => 'pas',
        'less_than' => 'para',
        'last_7_days' => '7 ditët e fundit',
        'next_7_days' => '7 ditët e ardhëshme',
        'last_30_days' => '30 ditët e fundit',
        'next_30_days' => '30 ditët e ardhëshme',
        'last_month' => 'Muajin e kaluar',
        'this_month' => 'Këtë muaj',
        'next_month' => 'Muajin e ardhshëm',
        'last_year' => 'Vitin e kaluar',
        'this_year' => 'Këtë vit',
        'next_year' => 'Vitin e ardhshëm',
        'between' => 'është mes',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Është i barabrtë',
        'not_equal' => 'Nuk është e barabrtë',
        'greater_than' => 'Më i madh se',
        'greater_than_equals' => 'Më e madhe ose e barabartë me',
        'less_than' => 'Më i vogël se',
        'less_than_equals' => 'Më e vogël ose e barabartë me',
        'between' => 'është mes',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopjo',
        'move' => 'lëviz',
        'donothing' => 'Mos bë gjë',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Results',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'Email Code:',
    'LBL_SEND' => 'Dërgo',
    'LBL_LOGOUT' => 'Dalje',
    'LBL_TOUR_NEXT' => 'Vijues',
    'LBL_TOUR_SKIP' => 'Anashkalo',
    'LBL_TOUR_BACK' => 'Kthe',
    'LBL_TOUR_TAKE_TOUR' => 'Merre një turne',
    'LBL_MOREDETAIL' => 'Më tepër detaje' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Ndrysho njëshkolonën' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Pamje' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtër' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'shto' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Add Email Address' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Fshih/Shfaq' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Fshi' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Fshi' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Fshijë' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Remove Email Address' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Opt Out',
    'LBL_ID_FF_INVALID' => 'Make Invalid',
    'LBL_ADD' => 'shto' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logoja e Kompanisë' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Shfaqjet e lidhjeve',
    'LBL_CLOSEINLINE' => 'Mbyll:',
    'LBL_VIEWINLINE' => 'Pamje',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Shtyp',
    'LBL_HELP' => 'ndihmë',
    'LBL_ID_FF_SELECT' => 'Selekto',
    'DEFAULT' => 'Bazike',
    'LBL_SORT' => 'Lloj',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Mundëso SMTP gjatë SSL ose TLS?',
    'LBL_NO_ACTION' => 'There is no action by that name: %s',
    'LBL_NO_SHORTCUT_MENU' => 'There are no actions available.',
    'LBL_NO_DATA' => 'Nuk ka të dhëna',

    'LBL_ROUTING_FLAGGED' => 'vednosje flamuri',
    'LBL_ROUTING_TO' => 'tek',
    'LBL_ROUTING_TO_ADDRESS' => 'tek adresa',
    'LBL_ROUTING_WITH_TEMPLATE' => 'Me shabllon',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ky regjistrim përmban vlera në telefonin e zyrës dhe fushat e adresës. Për të rishkruajtur këtë vlera në telefonin e tyrës dhe adresën vijuese të llogarisë që keni zgjedhur, shtypni OK. Për të ruajtur vlerat aktuale shtyp Anulo.',
    'LBL_DROP_HERE' => 'Hudhu këtu',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Parambush çaktivizimet e Gmail™',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Emri',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Vetitë e serverit të emailit të dërguar për jashtë.',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Fjalëkalimi i SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Severi i SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Emri i përdorimit SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Parazgjedhur',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Paralajmërim: Mungon emri i përdorimit dhe fjalëkalimi për llogaritë e maileve të dërguar për jashtë.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Vendosni postën e llogarive për të parë emailat hyrëse nga llogaritë tuaja të emailit.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Mundëso infomracione të mail serverit SMTP për të përdorur për emailit të dërguar për jashta në Llogaritë e Maileve.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'E bërë',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Fshi',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Tek:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Tek/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email adresa',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtër',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Emri',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nuk është gjetur asnjë adresë',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Ruaj dhe Shto në librin e adresave.',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Selekto pranuesin e emailit',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Libri i adresave',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Kujdes!Llogaria e drejtuar nga jashtë që ju jeni duke u përpjekur për të fshirë është e lidhur në një llogari ekzistuese të drejtuar përbrenda. A jeni te sigurte që doni te vazhdoni?',
    'LBL_EMAIL_ADDRESSES' => 'Emailet',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Email adresa',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Unable to confirm email address',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importo në SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Detyrë',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Bashkëngjit',
    'LBL_EMAIL_ATTACHMENT' => 'Bashkëngjit',
    'LBL_EMAIL_ATTACHMENTS' => 'Nga sistemi lokal',
    'LBL_EMAIL_ATTACHMENTS2' => 'Nga SuiteCRM dokumentacioni',
    'LBL_EMAIL_ATTACHMENTS3' => 'Bashkëngjitjet e shablloneve',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Dosja',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumentacion',
    'LBL_EMAIL_BCC' => 'BCC:',
    'LBL_EMAIL_CANCEL' => 'Anulo',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Përcaktimi i karakterit',
    'LBL_EMAIL_CHECK' => 'Kontrollo mailin',
    'LBL_EMAIL_CHECKING_NEW' => 'Kontrolli për email të ri',
    'LBL_EMAIL_CHECKING_DESC' => 'Një moment ju lutem...<br /><br />Nëse ky është kontrolli i parë për mail llogarinë, munt të zgjasë për një kohë.',
    'LBL_EMAIL_CLOSE' => 'Mbyll:',
    'LBL_EMAIL_COFFEE_BREAK' => 'Kontrolli për email të ri.<br /><br />Mail llogaritë e mëdha mund të marrin njësasi të konisderueshme të kohës.',

    'LBL_EMAIL_COMPOSE' => 'Emailet',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Ju lutemi shënoni pranuesin (it) e këtij emaili.T',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Trupi i këtij emaili është i zbrazët. Dërgoni gjithsesi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Ky email nuk ka subjekt. Dërgoni gjithsesi?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '( pa subjekt)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Ju lutemi shkruani email adresë valide për Tek, CC dhe BCC fushat',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Hidhe posht këtë email?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'A jeni i sigurt që dëshironi të fshini këtë nënshkrim?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Email sent',

    'LBL_EMAIL_CREATE_NEW' => '-- krijo në Ruaj--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Shumfishe',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Bosh',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Data e dërgimit sipas dërguesit',
    'LBL_EMAIL_DATE_TODAY' => 'Sot',
    'LBL_EMAIL_DELETE' => 'Fshi',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Fshi mesazhet e selektuara?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Fshirja e emailit me sukses.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Fshirja e mesazhit',
    'LBL_EMAIL_DETAILS' => 'Detajet',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Vetëm adresa primare do të përdoret kur punoni me Kontaktet.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Zbrazja e plehrave',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Fshirja e serverit të drejtuar nga jashtë',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Pastrimi i sasisë së dosjeve',
    'LBL_EMAIL_EMPTY_MSG' => 'No emails to display.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Emri i folderit duhet të jetë unik dhe jo i zbrazët. Ju lutemi provoni përsëri.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Nuk mund të fshi folderin. Ose folderi ose bijtë kanë emaile ose kutia postare e ka lidhur me të.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Nuk mund të përcaktohet dosja me qëllim nga konteksti. Provoni përsëri.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Ju lutemi kontrolloni parametrat tuaja.',
    'LBL_EMAIL_ERROR_DESC' => 'Janë detektuar gabime:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nuk keni qasje për këtë sipërfaqe. Kontakoni administratorin e faqes për të siguruar qasje',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Emri i SuiteCRM Folderit duhet të jetë unik.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Ju lutemi shruani ca kriteriume kërkimi.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Ka ndodhur një gabim',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Mesazhi është larguar nga ServeriLlo',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Ose mesazhin heqni nga serveri ose lëvizni në një dosje të ndryshme',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Lidhja me serverin e postës ka dështuar. Ju lutemi kontaktoni administratorin',
    'LBL_EMAIL_ERROR_MOVE' => 'Lëvizni emailin midis serverave dhe/ose llogaritë e postës që nuk janë të mbështetura në këtë kohë.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Lëvizni gabimin',
    'LBL_EMAIL_ERROR_NAME' => 'Është e nevojshme një emër',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Prej Adresës është e nevojshme. Ju lutemi shkruani një adresë valide të emailit.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Ju lutemi ofroni një dosje.',
    'LBL_EMAIL_ERROR_SERVER' => 'Një postë e adresës të serverit është e nevojshme.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Llogaria e ostës nuk mund të jetë ruajtur.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Një gabim ka ndodhur, duke komunikuar me serverin e postës.',
    'LBL_EMAIL_ERROR_USER' => 'Një emër i identifikimit është i nevojshëm.',
    'LBL_EMAIL_ERROR_PORT' => 'Nevoitet port i mail serverit.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Është i nevojshëm protokoli i serverit',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Është i nevojshëm Folder i monitoruar.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Është i nevojshëm Folder i plehrave.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ky informacion nuk është i disponueshëm',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nuk është specifikuar asnjë server i email të drejtuar për jashtë.',
    'LBL_EMAIL_ERROR_SENDING' => 'Error Sending Email. Please contact your administrator for assistance.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Folders',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'shto',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Shto folder të ri',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Riemëro folderin',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Ruaj',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Shtoja këtë folderin',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ky folder nuk mund të ndryshojë',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'A jeni të sigurt që dëshironi të fshini këtë folder? Ky proces nuk mund të ndryshohet. Fshirjet e \nFolderave do të kaskadojnë tek të gjitha folderët e përfshira.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'emri i ri i folderit',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Ju lutemi selektoni një folder para se të perfomoni veprimin.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Menaxhmenti i Folderit',

    'LBL_EMAIL_FORWARD' => 'Përcill',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Ngarkimi [[count]] [[total]] i emaileve',
    'LBL_EMAIL_FROM' => 'nga',
    'LBL_EMAIL_GROUP' => 'Grup',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grup',
    'LBL_EMAIL_HOME_FOLDER' => 'Ballina',
    'LBL_EMAIL_IE_DELETE' => 'Fshirja e llogarisë së mailit',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Fshirja e nënshkrimit',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'A jeni i sigurt që dëshironi të fshini këtë mail llogari?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Fshirja me sukses.',
    'LBL_EMAIL_IE_SAVE' => 'Ruajtja e informacionit të mail llogarisë',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importimi i emailit',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Import into SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Parametrat e importit',
    'LBL_EMAIL_INVALID' => 'Jo valide',
    'LBL_EMAIL_LOADING' => 'Ngarkimi...',
    'LBL_EMAIL_MARK' => 'Nënvizo',
    'LBL_EMAIL_MARK_FLAGGED' => 'Me flamur.',
    'LBL_EMAIL_MARK_READ' => 'Si të lexuar',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Pa flamur.',
    'LBL_EMAIL_MARK_UNREAD' => 'Si të palexuara',
    'LBL_EMAIL_ASSIGN_TO' => 'Drejtuar',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Krijo folder',
    'LBL_EMAIL_MENU_COMPOSE' => 'Kompozoi',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Fshi Folderin',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Zbraz plehrat',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinkronizo',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Fshi dosjet e fshehta',
    'LBL_EMAIL_MENU_REMOVE' => 'Fshijë',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Riemëro folderin',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Riemërimi i folderit',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Ju lutemi bëni një selektim para se të provoni këtë operim.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Krijo Folder (distanco ose në SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Krijo Folder (distanco ose në SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Zbrazni të gjitha dosjet e shportës për llogaritë tuaja të emailit',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Shnoi këto emaile si të lexuara',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Shënoi këto emaile pa flamur',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Riemëro Folderin (distanco ose në SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'mesazhet',

    'LBL_EMAIL_ML_NAME' => 'Emri i listës',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Adresat e selektuara të listës',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Adresat e disponueshme të listës',

    'LBL_EMAIL_MULTISELECT' => 'Ctrl-Kliko për të selektuar shumëfishtë<br />(Përdoruesit Mac përdorin CKM-Kliko)',

    'LBL_EMAIL_NO' => 'Jo',
    'LBL_EMAIL_NOT_SENT' => 'Sistemi nuk mund të përpunoj kërkimin tuaj. Ju lutemi kontaktoni administratorin e sistemit.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Një moment ju lutem...',
    'LBL_EMAIL_OPEN_ALL' => 'Hapni mesazhe të shumta',
    'LBL_EMAIL_OPTIONS' => 'Opcionet',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Kompozim i shpejtë',
    'LBL_EMAIL_OPT_OUT' => 'e zgjedhur jashtë',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Përjashtuar dhe jovalid',
    'LBL_EMAIL_PERFORMING_TASK' => 'Detyrat e performuara',
    'LBL_EMAIL_PRIMARY' => 'Primare',
    'LBL_EMAIL_PRINT' => 'Shtyp',

    'LBL_EMAIL_QC_BUGS' => 'Gjyrmues i gabimeve',
    'LBL_EMAIL_QC_CASES' => 'rastet',
    'LBL_EMAIL_QC_LEADS' => 'udhëheqjet',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontaktet',
    'LBL_EMAIL_QC_TASKS' => 'Detyrat',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Mundësite',
    'LBL_EMAIL_QUICK_CREATE' => 'Krijim i shpejtë',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Rindërtimi i Folderëve',
    'LBL_EMAIL_RELATE_TO' => 'Lidh',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Shih lidhjet',
    'LBL_EMAIL_RECORD' => 'Regjistrimet e emailit',
    'LBL_EMAIL_REMOVE' => 'Fshijë',
    'LBL_EMAIL_REPLY' => 'Përgjigju',
    'LBL_EMAIL_REPLY_ALL' => 'Përgjigju të gjithve',
    'LBL_EMAIL_REPLY_TO' => 'PërgjigjuRua',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Rigjetja e mesazhit',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Rigjetja e regjistrimit të emailit',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Ju lutemi selektoni vetëm një regjistrim emaili',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Kthehu në modulën e mëparshme?',
    'LBL_EMAIL_REVERT' => 'Kthehu',
    'LBL_EMAIL_RELATE_EMAIL' => 'Lidh emailin',

    'LBL_EMAIL_RULES_TITLE' => 'Menaxhmenti i rregullit',

    'LBL_EMAIL_SAVE' => 'Ruaj',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Ruaj dhe Përgjigju',
    'LBL_EMAIL_SAVE_DRAFT' => 'Ruaj skicë',
    'LBL_EMAIL_DRAFT_SAVED' => 'Draft has been saved',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Nga Data',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Deri në Datën',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Asnjë rezultat  nuk i përshtatet kriteriumit tënd.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Rezultatet e kërkimit',

    'LBL_EMAIL_SELECT' => 'Selekto',

    'LBL_EMAIL_SEND' => 'Dërgo',
    'LBL_EMAIL_SENDING_EMAIL' => 'Dërgimi i emailit',

    'LBL_EMAIL_SETTINGS' => 'parametrat',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mail llogaritë',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Fshi formën',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Kontrollo për email të rind',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Nga adresa',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email adresa për njoftimin e testimit',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nga emri',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Përgjigju adresës',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinkronizo të gjithë mail llogaritë',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Një email është dërguar në adresën e specifikuar të emailit duke përdorur parametrat e ofruara të postës dalëse. Ju lutemi kontrolloni për të parë nëse emaili është pranuar për të verifikuar a janë parametrat e sakta.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'See full SMTP Log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Performo sinkronizim të plotë? \n Mail llogaritë e mëdha mund të zgjasin disa minuta.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Klikoni butonin Shift ose butonin Ctrl për të selektuar dosje të shumta.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'E përgjithëshme',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Krijo Foldera të grupit',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Ndryshi Folderin e grupit',

    'LBL_EMAIL_SETTINGS_NAME' => 'Emri i mail llogarisë',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Selektoni numrin e emailave për faqë në postë. Kjo mund të kërkojë vendosjen e rifreskimit të faqës në mënyrë që të ketë efekt.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Rigjetja e Mail llogarive',
    'LBL_EMAIL_SETTINGS_SAVED' => 'The settings have been saved.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Dërgoni vetëm emailat e tekstit të thjeshtë',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Emaile për faqe',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Parametrat vizuale',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferencat',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dosjet e disponueshme të përdoruesit',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Posta në drejtim të jashtëm të serverit selektohet për llogari të postës që ju jeni duke përdorur është jovalide. Kontrolloni parametrat ose selektoni një server tjetër të postës për llogarinë e postës.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Një postë dalëse të serverit nuk është konfiguruar për të dërguar emailat. Ju lutemi të konfiguroni një postë dalësë të serverit ose selektoni një postë dalëse të serverit për llogarinë e postës që ju jeni duke e përdorur në parametrat >> e llogarisë së postës.  >>',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Default Signature',
    'LBL_EMAIL_SIGNATURES' => 'Nënshkrimet',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Shkëmbimi',
    'LBL_SMTPTYPE_OTHER' => 'Tjetër',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '(Distanco Folderat)',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM Folderat ]',
    'LBL_EMAIL_SUBJECT' => 'Subjekti',
    'LBL_EMAIL_SUCCESS' => 'sukses',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRMFolderi',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Trupi i Email shabllonit është i zbarzët.',
    'LBL_EMAIL_TEMPLATES' => 'Shabllonet',
    'LBL_EMAIL_TO' => 'deri',
    'LBL_EMAIL_VIEW' => 'Pamje',
    'LBL_EMAIL_VIEW_HEADERS' => 'Shfaqni kryefaqët',
    'LBL_EMAIL_VIEW_RAW' => 'Shfaqni emailin e papërpunuar',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ky funksion është i pambështetur, kur përdoret me POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Lidhja e albumit të teksiti.',
    'LBL_EMAIL_YES' => 'Po',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Dërgoni një email testues',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Emaili i testimit të dërguar',
    'LBL_EMAIL_MESSAGE_NO' => 'Message No',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Importo fjalëkaliminRe',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importi dështoi sepse ose mesazhi është tashmë i importuar ose fshihet nga serveri',

    'LBL_LINK_NONE' => 'Asnjëra',
    'LBL_LINK_ALL' => 'Të gjitha',
    'LBL_LINK_RECORDS' => 'Regjistrimet',
    'LBL_LINK_SELECT' => 'Selekto',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Konfirmo',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'A dëshiron ta mbyllish këtë #modulë#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Zgjerim jovalid i dosjes',

    'ERR_AJAX_LOAD' => 'Një gabim ka ndodhur:',
    'ERR_AJAX_LOAD_FAILURE' => 'Ndodhi një gabim gjatë përpunimit të kërkesës tuaj, ju lutemi provoni përsëri në një kohë të mëvonshme.',
    'ERR_AJAX_LOAD_FOOTER' => 'Nëse ky gabim vazhdon, ju lutemi të keni administratori tuaj disaktivizuar Ajax për këtë modul',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Ndarësi decimal nuk mund të përdorë karakterin e njëjtë si mijëra ndarës.\\n\\n Ju lutemi ndryshoni vlerat.',
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë konaktin',
    'ERR_EXPORT_DISABLED' => 'eksportimi i çaktivizuar',
    'ERR_EXPORT_TYPE' => 'gabim gjatë eksportim',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Nuk është email adresë valide',
    'ERR_INVALID_FILE_REFERENCE' => 'Referenca jovalide e dosjes',
    'ERR_NO_HEADER_ID' => 'Ky funksion është i padisponueshëm në këtë temë.',
    'ERR_NOT_ADMIN' => 'Qasje të paautorizuar në administratë.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Mungojnë fushat e nevojshme:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Fushë  e nevojshme jo valide',
    'ERR_INVALID_VALUE' => 'Vlerë jo valide:',
    'ERR_NO_SUCH_FILE' => 'Dosja nuk ekziston në sistem',
    'ERR_NO_SINGLE_QUOTE' => 'Nuk mund të përdor shenjën e citimit për',
    'ERR_NOTHING_SELECTED' => 'Ju lutemi bëni një zgjedhje para se të vazhdoni.',
    'ERR_SELF_REPORTING' => 'Përdoruesi nuk mund ti raportojë vetes së tij ose saj.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nuk ka asnjë përputhje për fushën:',
    'ERR_SQS_NO_MATCH' => 'Asjnë përputhje',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Ju lutemi specifikoni "çelësin" e indeksit në shfaqjen parametrave që atribuojnë për definimin e të dhënave- Meta',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Gabim: Emri i portalit është caktuar tashmë në një tjetër kontakt.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Vlera e fushë nuk është në përputhje me vlerën precize',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Një gabim ka ndodhur duke u përpjekur për të ruajtur llogarinë e jashtme.',
    'ERR_NO_DB' => 'Nuk mund të lidheni në bazën e të dhënave. Ju lutemi referohuni në suitecrm.log per detajet.',
    'ERR_DB_FAIL' => 'Dështimi i bazës së të dhënave. Ju lutemi referohuni në suitecrm.log për detajet.',
    'ERR_DB_VERSION' => 'Fajllat e SuiteCRM {0} mund të përdoren vetëm me databazën {1} të SuiteCRM.',

    'LBL_ACCOUNT' => 'llogaritë',
    'LBL_ACCOUNTS' => 'Accounts',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Shih përmbatjen',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Shih përmbatjen',
    'LBL_ADD_BUTTON' => 'shto',
    'LBL_ADD_DOCUMENT' => 'Shto dokumentacion',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Shto në listën e synimeve',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Add Contacts To Target List',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Shtyp për ta mbyll',
    'LBL_ADDITIONAL_DETAILS' => 'Detaje plotësuese',
    'LBL_ADMIN' => 'Administratori',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arkiva',
    'LBL_ASSIGNED_TO_USER' => 'Drejtuar përdoruesit',
    'LBL_ASSIGNED_TO' => 'drejtuar',
    'LBL_BACK' => 'Kthe',
    'LBL_BILLING_ADDRESS' => 'Adresa e faturës',
    'LBL_QUICK_CREATE' => 'Create ',
    'LBL_BROWSER_TITLE' => 'SugiteCRM - Burim i hapur CRM',
    'LBL_BUGS' => 'Gjyrmues i gabimeve',
    'LBL_BY' => 'nga',
    'LBL_CALLS' => 'Thirjet',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Dërgo emaile fushatash të radhitura',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Paraqit',
    'LBL_CASE' => 'rastet',
    'LBL_CASES' => 'rastet',
    'LBL_CHANGE_PASSWORD' => 'Ndrysho fjalëkalimin',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Verifiko të gjitha',
    'LBL_CITY' => 'Qyteti',
    'LBL_CLEAR_BUTTON_LABEL' => 'Fshi',
    'LBL_CLEAR_BUTTON_TITLE' => 'Fshi',
    'LBL_CLEARALL' => 'Fshi të gjitha',
    'LBL_CLOSE_BUTTON_TITLE' => 'Mbyll:',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Mbyll dhe krijo të re',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Mbyll dhe krijo të re',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Ndërto email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Ndërto email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Po',
    'LBL_SEARCH_DROPDOWN_NO' => 'Jo',
    'LBL_CONTACT_LIST' => 'Lista e kontakteve',
    'LBL_CONTACT' => 'Kontaktet',
    'LBL_CONTACTS' => 'Kontaktet',
    'LBL_CONTRACT' => 'Contract',
    'LBL_CONTRACTS' => 'Kontratat',
    'LBL_COUNTRY' => 'Shteti',
    'LBL_CREATE_BUTTON_LABEL' => 'Krijo',
    'LBL_CREATED_BY_USER' => 'Krijuar nga përdoruesi',
    'LBL_CREATED_USER' => 'Krijuar nga përdoruesi',
    'LBL_CREATED' => 'Krijuar nga',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'monedha:',
    'LBL_DOCUMENTS' => 'Dokumentacionet',
    'LBL_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_DATE_MODIFIED' => 'Të dhënat e modifikuara',
    'LBL_EDIT_BUTTON' => 'Ndrysho',
    'LBL_DUPLICATE_BUTTON' => 'Dublo',
    'LBL_DELETE_BUTTON' => 'Fshi',
    'LBL_DELETE' => 'Fshi',
    'LBL_DELETED' => 'E fshirë',
    'LBL_DIRECT_REPORTS' => 'Raportet direkte',
    'LBL_DONE_BUTTON_LABEL' => 'E bërë',
    'LBL_DONE_BUTTON_TITLE' => 'E bërë',
    'LBL_FAVORITES' => 'Favoritet',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Ju lutemi selektoni dosje të vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Importo vCard',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importo vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importo vCard',
    'LBL_VIEW_BUTTON' => 'Pamje',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email si PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email si PDF',
    'LBL_EMAILS' => 'Emailet',
    'LBL_EMPLOYEES' => 'Punëtorët',
    'LBL_ENTER_DATE' => 'Data e nisjes',
    'LBL_EXPORT' => 'Eksporto',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Shko',
    'LBL_HIDE' => 'Fsheh',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importo',
    'LBL_IMPORT_STARTED' => 'Importimi ka filluar',
    'LBL_LAST_VIEWED' => 'Shikuar i fundit',
    'LBL_LEADS' => 'udhëheqjet',
    'LBL_LESS' => 'më pak',
    'LBL_CAMPAIGN' => 'Fushata',
    'LBL_CAMPAIGNS' => 'fushatat',
    'LBL_CAMPAIGNLOG' => 'identifikimi i fushatës',
    'LBL_CAMPAIGN_CONTACT' => 'fushatat',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Asnjëra',
    'LBL_THEME' => 'Albumi:',
    'LBL_FOUND_IN_RELEASE' => 'Gjetur në publikim',
    'LBL_FIXED_IN_RELEASE' => 'Ndrequr në publikim',
    'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_LIST_ASSIGNED_USER' => 'Përdorues',
    'LBL_LIST_CONTACT_NAME' => 'Emri i kontaktit',
    'LBL_LIST_CONTACT_ROLE' => 'Roli i kontaktit',
    'LBL_LIST_DATE_ENTERED' => 'Të dhënat e krijuara',
    'LBL_LIST_EMAIL' => 'Emailet',
    'LBL_LIST_NAME' => 'Emri',
    'LBL_LIST_OF' => 'nga',
    'LBL_LIST_PHONE' => 'Telefoni',
    'LBL_LIST_RELATED_TO' => 'Në lidhje me',
    'LBL_LIST_USER_NAME' => 'Emri i përdoruesit',
    'LBL_LISTVIEW_NO_SELECTED' => 'Ju lutemi selektoni së paku një regjistrim për të vazhduar.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Ju lutemi selektoni të paktën 2 regjistrime për të vazhduar.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Regjistrimet e selektuara',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selektuara:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Kodi monkey i shtesës ordinare',
    'LBL_CANCEL' => 'Anulo',
    'LBL_VERIFY' => 'Verify',
    'LBL_RESEND' => 'Resend',
    'LBL_PROFILE' => 'Profili',
    'LBL_MAILMERGE' => 'Bashkim i  maileve',
    'LBL_MASS_UPDATE' => 'Masa e rinovuar',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nuk ka asnjë fushë në dispozicion për operacionin masiv të azhurnimit',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'C$#39;kycja e emailit primar',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt in Primary Email',
    'LBL_MEETINGS' => 'Mbledhjet',
    'LBL_MEETING_GO_BACK' => 'Kthehu mbrapa në mbledhjen',
    'LBL_MEMBERS' => 'Antarët',
    'LBL_MEMBER_OF' => 'Anëtar i',
    'LBL_MODIFIED_BY_USER' => 'Modifikuar nga përdoruesi',
    'LBL_MODIFIED_USER' => 'Modifikuar nga përdoruesi',
    'LBL_MODIFIED' => 'Modifikuar nga',
    'LBL_MODIFIED_NAME' => 'Modifikuar nga emri',
    'LBL_MORE' => 'Më tepër',
    'LBL_MY_ACCOUNT' => 'Parametrat e mia',
    'LBL_NAME' => 'Emri',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Krijo',
    'LBL_NEW_BUTTON_TITLE' => 'Krijo',
    'LBL_NEXT_BUTTON_LABEL' => 'Vijues',
    'LBL_NONE' => '-Asnjëra',
    'LBL_NOTES' => 'Shënimet',
    'LBL_OPPORTUNITIES' => 'Mundësite',
    'LBL_OPPORTUNITY_NAME' => 'Emri i mundësisë',
    'LBL_OPPORTUNITY' => 'Mundësite',
    'LBL_OR' => 'OSE',
    'LBL_PANEL_OVERVIEW' => 'Pasqyra',
    'LBL_PANEL_ASSIGNMENT' => 'TJERËi',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Lloji mëmë',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Kodi postal',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresë primare e qytetit',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresë primare e kodit postal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresë primare e shtetit',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresa e rrugës primare 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresa e rrugës primare 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresë primare e rrugës',
    'LBL_PRIMARY_ADDRESS' => 'Adresa primare',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Produktet',
    'LBL_PROJECT_TASKS' => 'Detyrat projektuese',
    'LBL_PROJECTS' => 'Projektet',
    'LBL_QUOTES' => 'Kuotat',

    'LBL_RELATED' => 'Në lidhje me',
    'LBL_RELATED_RECORDS' => 'Regjistrimet e lidhura',
    'LBL_REMOVE' => 'Fshijë',
    'LBL_REPORTS_TO' => 'I reporton',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Fushat e nevojshme të indikuara',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'E bërë',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formë e plotë',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formë e plotë',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Ruaj dhe krijo të re',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Ruaj dhe krijo të re',
    'LBL_SAVE_OBJECT' => 'Ruaj {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Kërkim',
    'LBL_SEARCH_BUTTON_TITLE' => 'Kërkim',
    'LBL_FILTER' => 'Filtër',
    'LBL_SEARCH' => 'Kërkim',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'më tepër',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format jovalid i dosjes, vetëm imazhi i dosjes mund të jetë i ngarkuar.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Selekto',
    'LBL_SELECT_BUTTON_TITLE' => 'Selekto',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Shfleto dokumentet',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Shfleto dokumentet',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Selekto kontaktin',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Selekto kontaktin',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Selekto nga raportet',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Selekto raportet',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Selekto përdoruesin',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Selekto përdoruesin',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Selekto dosje',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Selekto dosje',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Selekto përdoruesin',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Selekto përdoruesin',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Fshi përdoruesin',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Fshi përdoruesin',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Selekto llogarinë',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Selekto llogarinë',
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
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Selekto kontaktin',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Selekto kontaktin',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Burimet e përdorura për të ndërtuar këtë faqe (pyetjet, dosjet)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekonda.',
    'LBL_SERVER_RESPONSE_TIME' => 'Koha e reagimit të serverit:',
    'LBL_SERVER_MEMORY_BYTES' => 'Bitë',
    'LBL_SERVER_MEMORY_USAGE' => 'Përdorimi i mamorisë së serverit: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Përdorimi: - modula: {0} - veprimi: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Kulmi i serverit të memorjes së përdorimit : {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresa e transportit',
    'LBL_SHOW' => 'trego',
    'LBL_STATE' => 'State:',
    'LBL_STATUS_UPDATED' => 'Statusi juaj për këtë ndodhi është rinovuar.',
    'LBL_STATUS' => 'statusi',
    'LBL_STREET' => 'Rruga',
    'LBL_SUBJECT' => 'Subjekti',

    'LBL_INBOUNDEMAIL_ID' => 'ID e emailit të dërguar përbrenda',

    'LBL_SCENARIO_SALES' => 'Shitjet',
    'LBL_SCENARIO_MARKETING' => 'marketingu',
    'LBL_SCENARIO_FINANCE' => 'Financa',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Project Management',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'Sinkronizim',
    'LBL_TABGROUP_ALL' => 'Të gjitha',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktivitetet',
    'LBL_TABGROUP_COLLABORATION' => 'Bashkëbunimi',
    'LBL_TABGROUP_MARKETING' => 'marketingu',
    'LBL_TABGROUP_OTHER' => 'Tjetër',
    'LBL_TABGROUP_SALES' => 'Shitjet',
    'LBL_TABGROUP_SUPPORT' => 'Mbështetje',
    'LBL_TASKS' => 'Detyrat',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Emaili i arkivuar',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Emaili i arkivuar',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Mos fshi',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Mos fshi',
    'LBL_UNDELETE_BUTTON' => 'Mos fshi',
    'LBL_UNDELETE' => 'Mos fshi',
    'LBL_UNSYNC' => 'Mos sinkronizo',
    'LBL_UPDATE' => 'Rifresko',
    'LBL_USER_LIST' => 'Lista e përdoruesve',
    'LBL_USERS' => 'përdoruesit',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Kontrolloni për hyrjen ekzistuese të emailit ...',
    'LBL_VERIFY_PORTAL_NAME' => 'Kontrolloni për emrin ekzistues të portalit ..',
    'LBL_VIEW_IMAGE' => 'pamje',

    'LNK_ABOUT' => 'Rreth',
    'LNK_ADVANCED_FILTER' => 'Advanced Filter',
    'LNK_BASIC_FILTER' => 'Quick Filter',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_QUICK_FILTER' => 'Quick Filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Trego të gjitha',
    'LNK_CLOSE' => 'Mbyll:',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modify current filter',
    'LNK_SAVED_VIEWS' => 'Opcionet e formatit:',
    'LNK_DELETE' => 'Fshi',
    'LNK_EDIT' => 'Ndrysho',
    'LNK_GET_LATEST' => 'Mer të fundit',
    'LNK_GET_LATEST_TOOLTIP' => 'Zavendëso me versionin e fundit',
    'LNK_HELP' => 'ndihmë',
    'LNK_CREATE' => 'Krijo',
    'LNK_LIST_END' => 'Përfundim',
    'LNK_LIST_NEXT' => 'Vijues',
    'LNK_LIST_PREVIOUS' => 'Mëparshëm',
    'LNK_LIST_RETURN' => 'Kthehu në listë',
    'LNK_LIST_START' => 'Fillim',
    'LNK_LOAD_SIGNED' => 'Nënshkrim',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Zëvendësuar me dokument të nënshkruar',
    'LNK_PRINT' => 'Shtyp',
    'LNK_BACKTOTOP' => 'Mbrapsht në krye',
    'LNK_REMOVE' => 'Fshijë',
    'LNK_RESUME' => 'Rezyme',
    'LNK_VIEW_CHANGE_LOG' => 'Shih ndryshimin e hyrjes',

    'NTC_CLICK_BACK' => 'Ju lutem klikoni butonin mbrapa shfletuesit dhe rregulloni gabimin.',
    'NTC_DATE_FORMAT' => '(vvvvv-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'A jeni të sigurt që dëshironi të fshini regjistrimin-et e selektuar',
    'NTC_TEMPLATE_IS_USED' => 'Shablloni është përdorur të paktën në një regjistrim të emailit të marketingut. A jeni të sigurtë që doni të fshini atë?',
    'NTC_TEMPLATES_IS_USED' => 'The following templates are used in email marketing records. Are you sure you want to delete them?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi të fshini këtë regjistrim?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'A jeni të sigurtë që dëshironi të fshini',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'A jeni të sigurtë që dëshironi të rinovoni',
    'NTC_DELETE_SELECTED_RECORDS' => 'regjistrimin(et) e selektuar?',
    'NTC_LOGIN_MESSAGE' => 'Ju lutemi shtypni emrin e përdoruesit dhe fjalëkalimin',
    'NTC_NO_ITEMS_DISPLAY' => 'none',
    'NTC_REMOVE_CONFIRMATION' => 'A jeni të sigurt që dëshironi të largoni këtë lidhje? Vetëm lidhja do të largohet. Regjistrimi nuk do të fshihet.',
    'NTC_REQUIRED' => 'Fushat e nevojshme të indikuara',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Mirësevini',
    'NTC_YEAR_FORMAT' => '(vvvv)',
    'WARN_UNSAVED_CHANGES' => 'Ju jeni gati për të lënë këtë regjistrim pa ruajtur çdo ndryshim që mund të keni bërë në regjistrim. A jeni të sigurtë që doni të navigoni larg nga ky regjistrim?',
    'ERROR_NO_RECORD' => 'Gabim në marrje të rekordit. Ky proces mund të fshihet ose ju mund të mos jetë i autorizuar për të parë atë.',
    'WARN_BROWSER_VERSION_WARNING' => 'Kujdes: Versioni i shfletuesit ose shfletuesi që ju jeni duke përdorur nuk është i mbështetur.<br />Versionet e shfletuesve që janë të rekomanduara<br />                  *Internet Explorer 9<br />                  * Mozilla Firefox 14, 15<br />                  *Safari 6<br />                  *Google Chrome 22 (ose versioni më i fundit)',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => 'Paralajmërim: Shfletuesi juaj është në funksion të pajtueshëm me IE e cila nuk është e mbështetur.',
    'ERROR_TYPE_NOT_VALID' => 'Gabim: Ky lloj nuk është valid.',
    'ERROR_NO_BEAN' => 'Nuk arriti të marrë kokërr.',
    'LBL_DUP_MERGE' => 'Gjej dublimet',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Menaxho abonimet',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Menaxho abonime për',
    // Ajax status strings
    'LBL_LOADING' => 'Ngarkimi...',
    'LBL_SEARCHING' => 'Searching...',
    'LBL_SAVING_LAYOUT' => 'Ruajtje të formatit...',
    'LBL_SAVED_LAYOUT' => 'Formati është ruajtur',
    'LBL_SAVED' => 'E ruajtur',
    'LBL_SAVING' => 'DështuarRuatje',
    'LBL_DISPLAY_COLUMNS' => 'Shfaq kolonat',
    'LBL_HIDE_COLUMNS' => 'Fsheh kolonat',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST' => 'Procesimi...',
    'LBL_REQUEST_PROCESSED' => 'E bërë',
    'LBL_AJAX_FAILURE' => 'Dështimi i Ajaxit',
    'LBL_MERGE_DUPLICATES' => 'Bashko',
    'LBL_SAVED_FILTER_SHORTCUT' => 'My Filters',
    'LBL_SEARCH_POPULATE_ONLY' => 'Kryeni një kërkim duke përdorur formularin e kërkimit më lart',
    'LBL_DETAILVIEW' => 'Shikim i detajuar',
    'LBL_LISTVIEW' => 'Pamje në formë liste',
    'LBL_EDITVIEW' => 'Ndrysho pamje',
    'LBL_BILLING_STREET' => 'Rruga:',
    'LBL_SHIPPING_STREET' => 'Rruga:',
    'LBL_SEARCHFORM' => 'Forma e kërkimit',
    'LBL_SAVED_SEARCH_ERROR' => 'Ju lutemi siguroni një emër për këtë pamje.',
    'LBL_DISPLAY_LOG' => 'Identifikimi i shfaqjes',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistemi',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sesioni i kohëzgjatjes',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sesioni juaj është gati të ndalet në 2 minuta. Ju lutemi të ruani punën tuaj.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Sesioni juaj ka mbaruar.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Mbledhjet',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Thirjet',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Koha:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokacioni:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Përshkrimi:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Related To: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nuk janë gjetur rezultate.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Nuk janë gjetur rezultate për',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Create <item1> as a new <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'You currently have no records saved. <item2> or <item3> one now.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Sho tek favoritet e mia',
    'LBL_CREATE_CONTACT' => 'Krijo kontakt',
    'LBL_CREATE_CASE' => 'Krijo rast',
    'LBL_CREATE_NOTE' => 'Krijo shënim',
    'LBL_CREATE_OPPORTUNITY' => 'Krijo mundësi',
    'LBL_SCHEDULE_CALL' => 'Thirje identifikuese',
    'LBL_SCHEDULE_MEETING' => 'Cakto mbledhje',
    'LBL_CREATE_TASK' => 'Krijo detyrë',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Formular i gjenruar',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Ruani faqën për të drejtuar formularin',
    'LBL_AVAILABLE_FIELDS' => 'Fushat në dipozicion',
    'LBL_FIRST_FORM_COLUMN' => 'First Form Column',
    'LBL_SECOND_FORM_COLUMN' => 'Second Form Column',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Missing required field: Assigned to',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Missing required field: Related campaign',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Submitting this form will create ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Shto të gjitha fushat',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset all Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Largo të gjitha fushat',
    'LBL_NEXT_BTN' => 'Vijues',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Vetëm lloji i imazhit të bashkangjitjes mund të fiksohet',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Ndryshoi konteksti i bazës së të dhënave për',
    'ERR_MSSQL_WARNING' => 'Paralajmërim:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Gabim: Dosja [[file]] është zhdukur. Në pamundësi për të krijuar, sepse asnjë dosje që korrespondon HTML nuk është gjetur.',
    'ERR_CANNOT_FIND_MODULE' => 'Gabim: Moduli [moduli] nuk ekziston.',
    'LBL_ALT_ADDRESS' => 'Adresë tjetër:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Gabim: Ka një numër të pabarabartë për argumentët e $#39;çelësit$#39; dhe $#39;kopjimit$#39; të elementëve në shfaqjen e rrjetit të parametrave.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'E përgjithëshme',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'fFlterë',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Vetëm artikujtë e mi.',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulli',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Shfaq reshtat',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Keni arritur numrin maksimum të nënvizimeve të SuiteCRM që administruesi ka përcaktuar. Ju lutemi largoni një nënvizim të SuiteCRM për të shtuar një të re.',
    'LBL_ADDING_DASHLET' => 'Shtimi i nënvizimit të SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Nënvizimi i SuiteCRM është shtuar',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'A jeni të sigurt që dëshironi të largoni nënvizimin e SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Largimi i Nënvizimit të SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Nënvizimi i Suarg është larguar',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Ngarkimi i faqes, ju lutemi prisni...',

    'LBL_RELOAD_PAGE' => 'Ju lutemi të ringarkoni dritaren për të përdorur këtë SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Shto nënvizime',
    'LBL_CLOSE_DASHLETS' => 'Mbyll:',
    'LBL_OPTIONS' => 'Opcionet',
    'LBL_1_COLUMN' => '1 Kolonë',
    'LBL_2_COLUMN' => '2 Kolona',
    'LBL_3_COLUMN' => '3 Kolona',
    'LBL_PAGE_NAME' => 'Emri i faqes',

    'LBL_SEARCH_RESULTS' => 'Rezultatet e kërkimit',
    'LBL_SEARCH_MODULES' => 'Modulet',
    'LBL_SEARCH_TOOLS' => 'Mjetet',
    'LBL_SEARCH_HELP_TITLE' => 'Këshillat e kërkimit',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Pa figurë',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopjo adresën nga e majta:',
    'LBL_SAVE_AND_CONTINUE' => 'IRuaj dhe vazhdo',

    'LBL_SEARCH_HELP_TEXT' => 'Kontrollet e shumë selektimit<br />Klikoni mbi vlerat për të selektuar një atribut.<br />Klikoni-Ctrl për të selektuar të shumtë. Përdoruesit Mac përdorin klikim-CKM.<br />Për të selektuar të gjitha vlerat ndërmjet dy atributeve, klikoni vlerën e parë dhe pastaj klikoni Shift për vlerën e fundit.<br />Kërkim i Avancuar & Opsionet e faqosjes<br /><br />Duke përdorur kërkimin e ruajtur & opsionin e faqosjes, ju mund të ruani një sërë parametra të kërkimit dhe/ose një porosi të faqosjes për pamjen e listës me qëllim të shpejtë të merrni rezultatet e dëshiruara të kërkimit në të ardhmen. Ju mund të ruani një numër të palimituar me porosi të kërkimeve dhe faqosjeve. Të gjitha kërkimet e ruajtura shfaqen sipas emrit në listën e ruajtur të kërkimit, me ngrakimin e fundit të kërkimit të ruajtur që shfaqet në krye të listës.<br /><br />Për të rregulluar faqosjen e pamjes të listës, përdorni kolonat e fshehura dhe kolona e shfaqjes të kutive për të selektuar se cilat fusha do të shfaqen në rezultatet e kërkimit. Për shembull, ju mund të shikoni ose të fshini detajet të tilla si emrin e regjistrimit, dhe përdoruesin e caktuar, dhe grupi i caktuar në rezultatet e kërkimit. Për të shtuar një kolonë në listën e pamjes, selektoni fushën nga lista e kolonave të fshehura dhe përdorni shigjetën e majtë për të lëvizur atë në listën e kolonave të shfaqjes. Për të hequr një kolonë prej listës së shikuar, selektoni atë nga lista e kolonës të shfaqjes dhe të përdorni shigjetën e drejtë për të lëvizur atë në listën e kolonave të fshehur.<br /><br />Nëse keni ruajtur parametrat e faqosjes, ju do të jeni në gjendje të ngarkoni ato në çdo kohë për të parë rezultatet e kërkimit në faqosjen me porosi.<br /><br />Për të ruajtur dhe azhurnuar një kërkim dhe/ose faqosjen:<br />1.Shkruani një emër për rezultatet e kërkimit në Ruaj këtë kërkim si fushë dhe klikoni Ruaj.Emri tani shfaqet në listën e ruajtur të ngjitur me butonin e qartë.<br />2.Për të parë një kërkim të ruajtur, selektoni atë nga lista e ruajtur. Rezultatet e kërkimit janë shfaqur në Listën e pamjes.<br />3.Për të azhurnuar karakteristikat e një kërkimi të ruajtur, selektoni kërkimin e ruajtur nga lista, shkruani kriteret e kërkimit të reja dhe/ose opsionet e faqosjes në fushën e kërkimit të avancuar, dhe klikoni azhurno pranë Modifikimit të Kërkimit aktual.<br />4.Për të fshirë një kërkim të ruajtur, selektoni atë në listën e ruajtur, klikoni Fshijë pranë Modifikimit të Kërkimit aktual, dhe pastaj klikoni OK për të konfirmuar fshirjen.<br /><br />Këshillat<br /><br />Duke përdorur % si një operator të wildcard ju mund të bëni kërkimin tuaj më të gjerë. Për shembull në vend të kërkimit të vetëm për rezultatet që janë të barabarta "Apples" ju mund të ndryshoni kërkimin tuaj për "% Apples" e cili do të përputhet me të gjitha rezultatet që fillojnë me fjalën Apples, por mund të përmbajë karaktere të tjera.',

    //resource management
    'ERR_QUERY_LIMIT' => 'Gabim: Afati i pyetjes prej $afatit të arritur për $ modulë modulë.',
    'ERROR_NOTIFY_OVERRIDE' => 'Gabim: Burimet vëzhguese-> njoftimi () duhet të parandalohen.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Gabim: Në pamundësi për të krijuar monitor sepse dosja metadata është e zbrazët ose nuk ekziston.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Gabim: Nuk ka monitor të konfiguruar për emrin e kërkuar',
    'ERR_UNDEFINED_METRIC' => 'Gabim: Në pamundësi për të vendosur vlerën për metrikën e padefinuar',
    'ERR_STORE_FILE_MISSING' => 'Error: Në pamundësi për të gjetur implementimin e dosjes Store',

    'LBL_MONITOR_ID' => 'Id e monitorit',
    'LBL_USER_ID' => 'ID e përdoruesit',
    'LBL_MODULE_NAME' => 'Emri i modulës',
    'LBL_ITEM_ID' => 'Id e artikullit',
    'LBL_ITEM_SUMMARY' => 'Përmbledhja e artikullit',
    'LBL_ACTION' => 'Veprim',
    'LBL_SESSION_ID' => 'Id e sesionit',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack e krijuar për id përdoruesit {0}',
    'LBL_VISIBLE' => 'Regjistrimi i dukshëm',
    'LBL_DATE_LAST_ACTION' => 'Data e veprimit të fundit',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nuk është para',
    'MSG_IS_MORE_THAN' => 'është më shumë se',
    'MSG_SHOULD_BE' => 'duhet të jetë',
    'MSG_OR_GREATER' => 'ose më e madhe',

    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Krijo gabim',

    'LBL_OBJECT_IMAGE' => 'imazhi i objektit',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Selekto datën',

    'LBL_VALIDATE_RANGE' => 'nuk është brenda gamës valide',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Please choose both a starting and ending date range',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Të gjitha',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Gabim: Koleksioni i numërimi të parametrit kokërr nuk përputhet me numërimin e koleksionit të rezultateve.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Gabim: Mungon hyrja e hartimit për modulin.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Gabim: Në gjendje të pamudshme që të marrë të dhënat për {0} lidhësin.Shërbimi mund të jetë aktualisht i paaritshëm apo parametrat e konfigurimit mund të jenë jovalide. Lidhësi gabim i mesazhit: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Për eksperiencën optimale duhet përdorur IIS/FastCGI sapi, të vendosur fastcgi.kycu në 0 te skedari juaj php.ini',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Emri',
    'LBL_COLLECTION_PRIMARY' => 'Primare',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',
    'LBL_DESCRIPTION' => 'Përshkrim',

    'LBL_YESTERDAY' => 'dje',
    'LBL_TODAY' => 'sot',
    'LBL_TOMORROW' => 'nesër',
    'LBL_NEXT_WEEK' => 'javën e ardhëshme',
    'LBL_NEXT_MONDAY' => 'të hënën e ardhëshme',
    'LBL_NEXT_FRIDAY' => 'të premten e ardhëshme',
    'LBL_TWO_WEEKS' => 'dy javë',
    'LBL_NEXT_MONTH' => 'muajin e ardhshëm',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'ditën e arë të muajit të ardshëm',
    'LBL_THREE_MONTHS' => 'tre muaj',
    'LBL_SIXMONTHS' => 'gjashtë muaj',
    'LBL_NEXT_YEAR' => 'vitin e ardhshëm',

    //Datetimecombo fields
    'LBL_HOURS' => 'Orët',
    'LBL_MINUTES' => 'Minutat',
    'LBL_MERIDIEM' => 'Pasditë',
    'LBL_DATE' => 'minutData',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Rifreskim automatik',

    'LBL_DURATION_DAY' => 'dita',
    'LBL_DURATION_HOUR' => 'orë',
    'LBL_DURATION_MINUTE' => 'minuta',
    'LBL_DURATION_DAYS' => 'Ditët',
    'LBL_DURATION_HOURS' => 'Duration Hours',
    'LBL_DURATION_MINUTES' => 'Duration Minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Zgjidh Muajin',
    'LBL_ENTER_YEAR' => 'Zgjidh Vitin',
    'LBL_ENTER_VALID_YEAR' => 'Ju lutemi shkruani vit valid',

    //File write error label
    'ERR_FILE_WRITE' => 'Gabim: Nuk arrin të shkruaje dosjen {0}. Ju lutemi kontrolloni sistemin dhe lejet e web serverit.',
    'ERR_FILE_NOT_FOUND' => 'Gabim: Nuk arrin të ngarkoje dosjen {0}. Ju lutemi kontrolloni sistemin dhe lejet e web serverit.',

    'LBL_AND' => 'Dhe',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Security',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ky është një shembull i importit të dosjes e cila ofron një shembull të përmbajtjes së pritur të një dosjeje që është gati për importim." "Dosja është një presje- e palimituar.të dosjes .csv, duke përdorur  dyfishimin e -kuotave si fushë kualifikuese." "Rreshti i kryefaqës është rreshti më i lartë në dosjen dhe përmban etiketat në fushë që ju do t$#39;i shihni ato në aplikim." "Këto etiketa janë përdorur për ndarjen e të dhënave në dosjen për fushat në aplikim." "Shënime:.. Emrat e bazës së të dhënave mund të përdoret gjithashtu në rreshtin e kryefaqës. Kjo është e dobishme kur ju jeni duke përdorur phpMyAdmin ose një tjetër mjetë të bazës së të dhënave për të siguruar një listë për eksportimit e të dhënave për importim" "Rendi i kolonës nuk është kritike si procesi i importit të përputhjes me të dhënat për fushat përkatëse të bazuara në rreshtin e kryefaqës." "Për të përdorur këtë dosje si një shabllon, veproni në vijim:" "1 ​​Hiqni rreshtat e shembullit të të dhënave" "2 Hiqni ndihmën e tekstit që  jeni duke e lexuar tani". "3 Vendosni të dhënat tuaja në rreshtat e duhura dhe kolonat "" 4. Ruani dosjen në një vend të njohur në sistemin tuaj "" 5. Klikoni mbi opsionin e Importit nga menyja e veprimeve në aplikimin dhe zgjidhni dosjen për të ngarkuar "',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_SORT_DESC' => 'Të renditura në zbritje',
    'LBL_ALT_SORT_ASC' => 'Të renditura në ngjitje',
    'LBL_ALT_SORT' => 'Lloj',
    'LBL_ALT_SHOW_OPTIONS' => 'Shfaq opcionet',
    'LBL_ALT_HIDE_OPTIONS' => 'Fshih opcione',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Lëvize hyrjen e selektuar në listën majtas',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Lëvize hyrjen e selektuar në listën djathtas',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Levizë hyrjen e selektuar në mënyrë që të shfaqet lista',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Lëvize hyrjen e selektuar poshtë me qëllim të listës së shfaqur',
    'LBL_ALT_INFO' => 'Informacioni',
    'MSG_DUPLICATE' => 'Regjistrimi i llogarisë që kryeni mund të jetë dublim i llogarisë së regjistruar që tashmë ekziston. Llogaritë e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Krijo Llogari për të vazhduar me krijimin e llogarisë së re, ose selekto një nga llogaritë ekzistuese të poshtërënditura',
    'MSG_SHOW_DUPLICATES' => 'Regjistrimi i llogarisë që kryeni mund të jetë dublim i llogarisë së regjistruar që tashmë ekziston. Llogaritë e regjistruara që përmbajnë emra të ngjashëm janë të rënditura posht. Shtyp Ruaj për të vazhduar me krijimin e llogarisë së re, ose shtyp Anulo për tu kthyer në modulë pa krijuar llogarinë.',
    'LBL_EMAIL_TITLE' => 'email adresa',
    'LBL_EMAIL_OPT_TITLE' => 'Përjashtimi i email adresës',
    'LBL_EMAIL_INV_TITLE' => 'email adresë jo valide',
    'LBL_EMAIL_PRIM_TITLE' => 'Make Primary Email Address',
    'LBL_SELECT_ALL_TITLE' => 'Selekto të gjitha',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Selekto këtë reshtin',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'GABIM: Ndoshi një gabim gjatë ngarkimit. Kodi Gabim: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'GABIM: Ndodhi një gabim gjatë ngarkimit. Kodi Gabim: {0} - {1}.Ngarkim_i madhësisë maksimale  është {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'GABIM: Ndodhi një gabim gjatë ngarkimit tuaj, ju lutemi kontaktoni një administrator për ndihmë.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Madhësia e ngarkimit ({0} bytes) tejkalon lejimin maksimal: {1} byte',
    'UPLOAD_REQUEST_ERROR' => 'Ka ndodhur një gabim. Ju lutemi të rifreskoni faqën tuaj dhe të provoni përsëri.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Ndrysho',
    'LBL_EDIT_BUTTON_TITLE' => 'Ndrysho',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dublo',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dublo',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Fshi',
    'LBL_DELETE_BUTTON_TITLE' => 'Fshi',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Veprim',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Ruaj',
    'LBL_SAVE_BUTTON_TITLE' => 'Ruaj',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Anulo',
    'LBL_CANCEL_BUTTON_TITLE' => 'Anulo',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'koleksioni lidhës në {0} është përcaktuar gabimisht ose është bosh dhe nuk mund të përdoret.',
    'ERR_SUHOSIN' => 'Ngarkimi i rrjedhjes është i bllokuar nga Suhosin, ju lutemi shtoni "ngarkim" për  suhosin.executor.include.whitelist (Shih suitecrm.log për më shumë informacione)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Përgjigje e keqe nga serveri',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Quote',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Sale Price',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuale',
        '5' => 'Çdo 5 minuta',
        '15' => 'Çdo 15 minuta',
        '30' => 'Çdo 30 minuta',
        '60' => 'Çdo orë',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choose columns',
    'LBL_COLUMN_CHOOSER' => 'Column Chooser',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Save changes',
    'LBL_DISPLAYED' => 'Displayed',
    'LBL_HIDDEN' => 'E fshehur',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'Filtër',

    'LBL_CATEGORY' => 'Kategoria',
    'LBL_LIST_CATEGORY' => 'Kategoria',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'Stili',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dawn',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'dita',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Dusk',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Night',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Noon',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Disregard draft',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'This operation will delete this email, do you want to continue?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Apply an Email Template',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'This operation will override the email Body and Subject fields, do you want to continue?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmed Opt In',
    'LBL_OPT_IN_TITLE' => 'Opt In',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Confirmed Opt In Date',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Confirmed Opt In Sent Date',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Confirmed Opt In Fail Date',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Opt In Email Template is not configured. Please set up in email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Primary Group",

    // footer
    'LBL_SUITE_TOP' => 'Mbrapsht në krye',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Mundësuar nga SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Ripërcakto fjalëkalimin',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Libraria';
$app_list_strings['moduleList']['EmailAddresses'] = 'Email adresa';
$app_list_strings['project_priority_default'] = 'Mesatar';
$app_list_strings['project_priority_options'] = array(
    'High' => 'I lartë',
    'Medium' => 'Mesatar',
    'Low' => 'I ulët',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consent',
    'contract' => 'Contract',
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
    'website' => 'ueb faqja',
    'phone' => 'Telefoni',
    'given_to_user' => 'Given to User',
    'email' => 'Emailet',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'baza e njohurisë';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGANISTAN',
    'ALBANIA' => 'Shqipëria',
    'ALGERIA' => 'ALGjERIA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTIKU',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGJENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBEXHAN',
    'BAHAMAS' => 'BAHAMA',
    'BAHRAIN' => 'BAHRAN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUSIA',
    'BELGIUM' => 'BELGJIA',
    'BELIZE' => 'BELIZI',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNJA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET ISLAND',
    'BRAZIL' => 'BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'Territori i Antartikut Britanik',
    'BRITISH INDIAN OCEAN TERRITORY' => 'Teritori i Oqeanit Indian Britanik',
    'BRITISH VIRGIN ISLANDS' => 'Ishujt e Virxhinjës Britanike',
    'BRITISH WEST INDIES' => 'Britanikët e Indisë Perëndimore',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULLGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODIA',
    'CAMEROON' => 'KAMERON',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'ZONA E KANALIT',
    'CANARY ISLAND' => 'KANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'kAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'kAYMAN ISLANDS',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'Kanali i ishullit në Britaninë e Madhe',
    'CHILE' => 'KILI',
    'CHINA' => 'KINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'KOLUMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'KONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'KOSTA RIKA',
    'CROATIA' => 'KROACI',
    'CUBA' => 'KUBA',
    'CURACAO' => 'KURAKAO',
    'CYPRUS' => 'QIPRI',
    'CZECH REPUBLIC' => 'REPUBLIKA E ÇEKISË',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANIMARKË',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIKA',
    'DOMINICAN REPUBLIC' => 'REPUBLICA DOMENIKANE',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'EKUADOR',
    'EGYPT' => 'EGJIPT',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'GUINEA EKUATORIALE',
    'ESTONIA' => 'ESTONI',
    'ETHIOPIA' => 'ETIOPI',
    'FAEROE ISLANDS' => 'Ishujt Faeroe',
    'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLANDA',
    'FRANCE' => 'FRANCA',
    'FRENCH GUIANA' => 'GUIANA FRANCEZE',
    'FRENCH POLYNESIA' => 'POLYNESIA FRACENZE',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'XHORXHIA',
    'GERMANY' => 'GJERMANIA',
    'GHANA' => 'GANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GREQIA',
    'GREENLAND' => 'GRINLAND',
    'GUADELOUPE' => 'GUADELUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARIA',
    'ICELAND' => 'IRLANDA',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLAND',
    'ISRAEL' => 'IZRAEL',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'IVORY KOAST',
    'JAMAICA' => 'JAMAIKA',
    'JAPAN' => 'JAPONIA',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKISTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA, JUGORE',
    'KUWAIT' => 'KUVAITI',
    'KYRGYZSTAN' => 'KIRGIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'ISHUJTË E LEEWARD',
    'LESOTHO' => 'LESOTO',
    'LIBYA' => 'LIBIA',
    'LIECHTENSTEIN' => 'LITENSHTAJN',
    'LITHUANIA' => 'LITUANIA',
    'LUXEMBOURG' => 'LUKSEMBURG',
    'MACAO' => 'MAKAO',
    'MACEDONIA' => 'MAQEDONIA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAVIA',
    'MALAYSIA' => 'MALAZIA',
    'MALDIVES' => 'MALDIVI',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIKUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANEZIA',
    'MEXICO' => 'MEKSIKË',
    'MOLDOVIA' => 'MOLDOVI',
    'MONACO' => 'MONAKO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROKO',
    'MOZAMBIQUE' => 'MOZAMBIK',
    'MYANAMAR' => 'MIANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'Antilet Hollandeze',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'Antilet Hollandeze të zonës neutrale',
    'NEW CALADONIA' => 'KALADONIA E RE',
    'NEW HEBRIDES' => 'HEBRIDET E REJA',
    'NEW ZEALAND' => 'ZEJLANDI I RI',
    'NICARAGUA' => 'NIKARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'ISHUJTË E NORFLOK',
    'NORWAY' => 'NORVEGJIA',
    'OMAN' => 'OMAN',
    'OTHER' => 'TJERËi',
    'PACIFIC ISLAND' => 'ISHULLI PACIFIK',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA  GUINEA E RE',
    'PARAGUAY' => 'PARAGUAJ',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPINËT',
    'POLAND' => 'POLONIA',
    'PORTUGAL' => 'PORTUGALIA',
    'PORTUGUESE TIMOR' => 'Timori i portugezit',
    'PUERTO RICO' => 'PUERTO RIKO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIKA E BELARUSISË',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIKA E  AFRIKËS JUGORE',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSIA',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'ISHUJTË RUKUJI',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SËRBIA',
    'SEYCHELLES' => 'Sishell',
    'SIERRA LEONE' => 'SIERRA LIONE',
    'SINGAPORE' => 'SINGAPUR',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALIA',
    'SOUTH AFRICA' => 'AFRIKA JUGORE',
    'SOUTH YEMEN' => 'JEMENI JUGOR',
    'SPAIN' => 'SPANJA',
    'SPANISH SAHARA' => 'SAHARA SPANJOLLE',
    'SRI LANKA' => 'SHRI LANKA',
    'ST. KITTS AND NEVIS' => 'SHËN. KITTS AND NEVIS',
    'ST. LUCIA' => 'SHËN. LUSIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRIKA',
    'SWAZILAND' => 'ZVICRA',
    'SWEDEN' => 'SUEDIA',
    'SWITZERLAND' => 'ZVICRA',
    'SYRIA' => 'SIRIA',
    'TAIWAN' => 'TAJVANI',
    'TAJIKISTAN' => 'TAZAKISTANI',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'TAJLANDA',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNIZI',
    'TURKEY' => 'TURQIA',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'SHTETET E BASKUARA TË EMIRATËVE',
    'UNITED KINGDOM' => 'KOMBET E BASHKUARA',
    'URUGUAY' => 'URUGUAJ',
    'US PACIFIC ISLAND' => 'Ishulli paqësor Amerikan',
    'US VIRGIN ISLANDS' => 'ISHUJTË E VIRXHINJËS SË SHTETEVE TË BASHKUARA',
    'USA' => 'SHBA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'QYTETI I VATIKANIT',
    'VENEZUELA' => 'VENECUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'ISHULLI WAKE',
    'WEST INDIES' => 'INDIETDIMORE PERENDIMOR',
    'WESTERN SAHARA' => 'SAHARA PERENDIMORE',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABUE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => '5 e madhe (Tajvani dhe Hong Kongu)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS KIrilliK)',
    'CP1252' => 'CP1252 (MS Europa Perendimore & SHBA)',
    'EUC-CN' => 'EUC-CN (Kinezisht e thjeshtuar GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japoneze)',
    'EUC-KR' => 'EUC-KR (Koreane)',
    'EUC-TW' => 'EUC-TW (Tajvanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japonese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreane)',
    'ISO-8859-1' => 'ISO-8859-1 (Europës Perendimore dhe SHBA)',
    'ISO-8859-2' => 'ISO-8859-2 (Europaës Qendrore dhe Lindore)',
    'ISO-8859-3' => 'ISO-8859-3 (LatinIC 3)',
    'ISO-8859-4' => 'ISO-8859-4 (LatinIC 4)',
    'ISO-8859-5' => 'ISO-8859-5 (KIrilliK)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabike)',
    'ISO-8859-7' => 'ISO-8859-7 (Greqishte)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebreike)',
    'ISO-8859-9' => 'ISO-8859-9 (Latincë 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latinic 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latinic 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latinic 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latinic 9)',
    'KOI8-R' => 'KOI8-R (Rusishta Kirilike)',
    'KOI8-U' => 'KOI8-U (Ukraniase në kirilisht)',
    'SJIS' => 'SJIS (MS Japonese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Algjeria',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Afrika/Gaboron',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlantiku/Kape_Verde',
    'Africa/Bangui' => 'Afrika/Bangai',
    'Africa/Ndjamena' => 'Afrika/Ndxhamena',
    'Indian/Comoro' => 'India/Komoro',
    'Africa/Kinshasa' => 'Afrika/Kinshasa',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Brazzaville' => 'Afrika/Brazavill',
    'Africa/Abidjan' => 'Afrika/Abidxhan',
    'Africa/Djibouti' => 'Afrika/Dxhibouti',
    'Africa/Cairo' => 'Afrika/Kairo',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Asmera' => 'Afrika/Asmera',
    'Africa/Addis_Ababa' => 'Afrika/Addis_Ababa',
    'Africa/Libreville' => 'Afrika/Libreville',
    'Africa/Banjul' => 'Afrika/Banjul',
    'Africa/Accra' => 'Afrika/Akra',
    'Africa/Conakry' => 'Afrika/Konakri',
    'Africa/Bissau' => 'Afrika/Bisau',
    'Africa/Nairobi' => 'Afrika/Nairobi',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monrovia',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Indian/Antananarivo' => 'India/Antananarivo',
    'Africa/Blantyre' => 'Afrika/Blantir',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Nouakchott' => 'Afrika/Nouakchott',
    'Indian/Mauritius' => 'India/Mauritis',
    'Indian/Mayotte' => 'India/Majot',
    'Africa/Casablanca' => 'Afrika/Kasablanka',
    'Africa/El_Aaiun' => 'Afrika/El_Aaiun',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Windhoek' => 'Afrika/Windhoek',
    'Africa/Niamey' => 'Afrika/Namej',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Indian/Reunion' => 'India/Reunion',
    'Africa/Kigali' => 'Afrika/Kigali',
    'Atlantic/St_Helena' => 'Atlantiku/Shën_Helena',
    'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Indian/Mahe' => 'India/Mahe',
    'Africa/Freetown' => 'Afrika/Fritaun',
    'Africa/Mogadishu' => 'Afrika/Mogadishu',
    'Africa/Johannesburg' => 'Afrika/Johanesburg',
    'Africa/Khartoum' => 'Afrika/Kartoum',
    'Africa/Mbabane' => 'Afrikia/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salam',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Tunis' => 'Afrika/Tunis',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Harar',
    'Antarctica/Casey' => 'Antarctiku/Kejsi',
    'Antarctica/Davis' => 'Antarctiku/Davis',
    'Antarctica/Mawson' => 'Antarctiku/Mauson',
    'Indian/Kerguelen' => 'India/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctiku/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctiku/Syova',
    'Antarctica/Vostok' => 'Antarctiku/Vostok',
    'Antarctica/Rothera' => 'Antarctiku/Rotera',
    'Antarctica/Palmer' => 'Antarctiku/Palmer',
    'Antarctica/McMurdo' => 'Antarctiku/McMurdo',
    'Asia/Kabul' => 'Azia/Kabul',
    'Asia/Yerevan' => 'Azia/Jerevan',
    'Asia/Baku' => 'Azia/Baku',
    'Asia/Bahrain' => 'Azia/Bahrain',
    'Asia/Dhaka' => 'Azia/Dhaka',
    'Asia/Thimphu' => 'Azia/Timfu',
    'Indian/Chagos' => 'India/Çagos',
    'Asia/Brunei' => 'Azia/Brunej',
    'Asia/Rangoon' => 'Azia/Rangun',
    'Asia/Phnom_Penh' => 'Azia/Phnom_Penh',
    'Asia/Beijing' => 'Azia/Bejing',
    'Asia/Harbin' => 'Azia/Harbin',
    'Asia/Shanghai' => 'Azia/Shangai',
    'Asia/Chongqing' => 'Azia/Kongqing',
    'Asia/Urumqi' => 'Azia/Urumqi',
    'Asia/Kashgar' => 'Azia/Kashgar',
    'Asia/Hong_Kong' => 'Azia/Hong_Kong',
    'Asia/Taipei' => 'Azia/Tajpei',
    'Asia/Macau' => 'Azia/Makau',
    'Asia/Nicosia' => 'Azia/Nikosia',
    'Asia/Tbilisi' => 'Azia/Tbilisi',
    'Asia/Dili' => 'Azia/Dili',
    'Asia/Calcutta' => 'Azia/Kalkuta',
    'Asia/Jakarta' => 'Azia/Xhakarta',
    'Asia/Pontianak' => 'Azia/Pontianak',
    'Asia/Makassar' => 'Azia/Makasar',
    'Asia/Jayapura' => 'Azia/Xhajapura',
    'Asia/Tehran' => 'Azia/Tehran',
    'Asia/Baghdad' => 'Azia/Bagdad',
    'Asia/Jerusalem' => 'Azia/Jerusalem',
    'Asia/Tokyo' => 'Azia/Tokio',
    'Asia/Amman' => 'Azia/Aman',
    'Asia/Almaty' => 'Azia/Almati',
    'Asia/Qyzylorda' => 'Azia/Kyzylorda',
    'Asia/Aqtobe' => 'Azia/Aktobe',
    'Asia/Aqtau' => 'Azia/Aktau',
    'Asia/Oral' => 'Azia/Oral',
    'Asia/Bishkek' => 'Azia/Bishkek',
    'Asia/Seoul' => 'Azia/Seul',
    'Asia/Pyongyang' => 'Azia/Pyongjang',
    'Asia/Kuwait' => 'Azia/Kuvait',
    'Asia/Vientiane' => 'Azia/Vientane',
    'Asia/Beirut' => 'Asza/Bejrut',
    'Asia/Kuala_Lumpur' => 'Azia/Kuala_Lumpur',
    'Asia/Kuching' => 'Azia/Kuçing',
    'Indian/Maldives' => 'India/Maldivis',
    'Asia/Hovd' => 'Azia/Hovd',
    'Asia/Ulaanbaatar' => 'Azia/Ulanbatar',
    'Asia/Choibalsan' => 'Azia/Çoibalsan',
    'Asia/Katmandu' => 'Azia/Katmandu',
    'Asia/Muscat' => 'Azia/Muskat',
    'Asia/Karachi' => 'Azia/Karaçi',
    'Asia/Gaza' => 'Azia/Gaza',
    'Asia/Manila' => 'Azia/Manila',
    'Asia/Qatar' => 'Azia/Qatar',
    'Asia/Riyadh' => 'Azia/Rijad',
    'Asia/Singapore' => 'Azia/Singapor',
    'Asia/Colombo' => 'Azia/Kolombo',
    'Asia/Damascus' => 'Azia/Damaskus',
    'Asia/Dushanbe' => 'Azia/Dushanb',
    'Asia/Bangkok' => 'Azia/Bangkok',
    'Asia/Ashgabat' => 'Azia/Ashgabat',
    'Asia/Dubai' => 'Azia/Dubai',
    'Asia/Samarkand' => 'Azia/Samarkand',
    'Asia/Tashkent' => 'Azia/Tashkent',
    'Asia/Saigon' => 'Azia/Saigon',
    'Asia/Aden' => 'Azia/Aden',
    'Australia/Darwin' => 'Australi/Darvin',
    'Australia/Perth' => 'Australi/Pert',
    'Australia/Brisbane' => 'Australi/Brisban',
    'Australia/Lindeman' => 'Australi/Lindman',
    'Australia/Adelaide' => 'Australi/Adelaide',
    'Australia/Hobart' => 'Australi/Hobart',
    'Australia/Currie' => 'Australia/Kuri',
    'Australia/Melbourne' => 'Australi/Melburn',
    'Australia/Sydney' => 'Australi/Sidnej',
    'Australia/Broken_Hill' => 'Australi/Broken_Hill',
    'Indian/Christmas' => 'India/Kristmas',
    'Pacific/Rarotonga' => 'Pacifik/Rarotonga',
    'Indian/Cocos' => 'Indian/Kokos',
    'Pacific/Fiji' => 'Pacifik/Fixhi',
    'Pacific/Gambier' => 'Pacifik/Gambier',
    'Pacific/Marquesas' => 'Pacifik/Markusas',
    'Pacific/Tahiti' => 'Pacifik/Tahiti',
    'Pacific/Guam' => 'Pacifik/Guam',
    'Pacific/Tarawa' => 'Pacifik/Tarava',
    'Pacific/Enderbury' => 'Pacifik/Enderbur',
    'Pacific/Kiritimati' => 'Pacifik/Kiritimati',
    'Pacific/Saipan' => 'PacifickSaipan',
    'Pacific/Majuro' => 'Pacifik/Maxhuro',
    'Pacific/Kwajalein' => 'Pacifik/Kajalein',
    'Pacific/Truk' => 'Pacifik/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacifik/Kosra',
    'Pacific/Nauru' => 'Pacifik/Nauru',
    'Pacific/Noumea' => 'Pacifik/Noumia',
    'Pacific/Auckland' => 'Pacifik/Aukland',
    'Pacific/Chatham' => 'Pacifi/Katam',
    'Pacific/Niue' => 'Pacifik/Niue',
    'Pacific/Norfolk' => 'Pacifik/Norfolk',
    'Pacific/Palau' => 'PacifickPalai',
    'Pacific/Port_Moresby' => 'Pacifik/Port_Moresbi',
    'Pacific/Pitcairn' => 'Pacifik/Pitkairn',
    'Pacific/Pago_Pago' => 'Pacifik/Pago_Pago',
    'Pacific/Apia' => 'Pacifik/Apia',
    'Pacific/Guadalcanal' => 'PacifickGuadalkanal',
    'Pacific/Fakaofo' => 'Pacifik/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifik/Tongatapu',
    'Pacific/Funafuti' => 'Pacifik/Funafuti',
    'Pacific/Johnston' => 'Pacifik/Jonston',
    'Pacific/Midway' => 'Pacifik/Miduej',
    'Pacific/Wake' => 'Pacific/Uejk',
    'Pacific/Efate' => 'Pacifik/Efate',
    'Pacific/Wallis' => 'Pacifik/Vallis',
    'Europe/London' => 'Europë/Londër',
    'Europe/Dublin' => 'Europë/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'EuropëTiranë',
    'Europe/Andorra' => 'Europë/Andora',
    'Europe/Vienna' => 'Europë/Vienë',
    'Europe/Minsk' => 'Europë/Minsk',
    'Europe/Brussels' => 'Europë/Brisel',
    'Europe/Sofia' => 'Europë/Sofi',
    'Europe/Prague' => 'Europë/Prag',
    'Europe/Copenhagen' => 'Europë/Kopenhagen',
    'Atlantic/Faeroe' => 'Atlantiku/Faroi',
    'America/Danmarkshavn' => 'Amerikë/Danmarkshavn',
    'America/Scoresbysund' => 'Amerika/Skorsbisund',
    'America/Godthab' => 'Amerika/Godthab',
    'America/Thule' => 'Amerika/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Paris',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibraltar',
    'Europe/Athens' => 'Europa/Athina',
    'Europe/Budapest' => 'Europa/Budapest',
    'Atlantic/Reykjavik' => 'Atlantik/Reykjavik',
    'Europe/Rome' => 'Europa/Roma',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europë/Vilnius',
    'Europe/Luxembourg' => 'Europë/Luksemburg',
    'Europe/Malta' => 'Europë/Malta',
    'Europe/Chisinau' => 'Europa/Chisinau',
    'Europe/Monaco' => 'Europë/Monako',
    'Europe/Amsterdam' => 'Europë/Amsterdam',
    'Europe/Oslo' => 'Europë/Oslo',
    'Europe/Warsaw' => 'Europë/Varshavë',
    'Europe/Lisbon' => 'Europë/Lisabon',
    'Atlantic/Azores' => 'Atlantiku/Azores',
    'Atlantic/Madeira' => 'Atlantiku/Madeira',
    'Europe/Bucharest' => 'Europa/Bukuresht',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europë/Moskë',
    'Europe/Samara' => 'Europë/Samara',
    'Asia/Yekaterinburg' => 'Azia/Yekaterinburg',
    'Asia/Omsk' => 'Azia/Omsk',
    'Asia/Novosibirsk' => 'Azia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Azia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Azia/Irkutsk',
    'Asia/Yakutsk' => 'Azia/Yakutsk',
    'Asia/Vladivostok' => 'Azia/Vladivostok',
    'Asia/Sakhalin' => 'Azia/Sakhalin',
    'Asia/Magadan' => 'Azia/Magadan',
    'Asia/Kamchatka' => 'Azia/Kamçatka',
    'Asia/Anadyr' => 'Azia/Anadyr',
    'Europe/Belgrade' => 'Europë/Beograd',
    'Europe/Madrid' => 'Europë/Madrid',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Atlantic/Canary' => 'Atlantiku/Canari',
    'Europe/Stockholm' => 'Europë/Stokholm',
    'Europe/Zurich' => 'Europë/Zvicër',
    'Europe/Istanbul' => 'Europë/Stanboll',
    'Europe/Kiev' => 'Europë/Kiev',
    'Europe/Uzhgorod' => 'Europë/Uzhgorod',
    'Europe/Zaporozhye' => 'Europë/Zaporozhie',
    'Europe/Simferopol' => 'Europë/Simferopol',
    'America/New_York' => 'Amerika/Nju_Jork',
    'America/Chicago' => 'Amerika/Çikago',
    'America/North_Dakota/Center' => 'Amerika e/Veriut_Qendra e/Dakotës',
    'America/Denver' => 'Amerika/Denver',
    'America/Los_Angeles' => 'Amerika/Los_Anxheles',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Yakutat' => 'Amerika/Jakutat',
    'America/Anchorage' => 'Amerika/Ançorag',
    'America/Nome' => 'Amerika/Nomi',
    'America/Adak' => 'Amerika/Adak',
    'Pacific/Honolulu' => 'Honolulu/Paqësor',
    'America/Phoenix' => 'Amerika/Phoenix',
    'America/Boise' => 'Amerika/Boise',
    'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amerika/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amerika/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amerika/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amerika/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amerika/Kentucky/Monticello',
    'America/Detroit' => 'Amerika/Detroit',
    'America/Menominee' => 'Amerika/Menominee',
    'America/St_Johns' => 'Amerika/St_Johns',
    'America/Goose_Bay' => 'Amerika/Goose_Bay',
    'America/Halifax' => 'Amerika/Halifaks',
    'America/Glace_Bay' => 'Amerika/Glejs_Bej',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Thunder_Bay' => 'Amerika/Thander_Bej',
    'America/Nipigon' => 'Amerika/Nipigon',
    'America/Rainy_River' => 'Amerika/Reini_River',
    'America/Winnipeg' => 'Amerika/Uinipeg',
    'America/Regina' => 'Amerika/Regina',
    'America/Swift_Current' => 'Amerika/Suift_Kjurënt',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Vancouver' => 'Amerika/Vancuvër',
    'America/Dawson_Creek' => 'Amerika/Dauson_Krik',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Iqaluit' => 'Amerika/Ikaluit',
    'America/Coral_Harbour' => 'Amerika/Koral_Harbur',
    'America/Rankin_Inlet' => 'Amerika/Rankin_Inlet',
    'America/Cambridge_Bay' => 'Amerika/Kembridxh_Bej',
    'America/Yellowknife' => 'Amerika/Jellounife',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Whitehorse' => 'Amerika/Uajthors',
    'America/Dawson' => 'Amerika/Dauson',
    'America/Cancun' => 'Amerika/Kankun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Monterej',
    'America/Mexico_City' => 'Amerika/Meksiko_Siti',
    'America/Chihuahua' => 'Amerika/Çihuahua',
    'America/Hermosillo' => 'Amerika/Hermosillo',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Tijuana' => 'Amerika/Tihuana',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Nassau' => 'Amerika/Nasai',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belize' => 'Amerika/Beliz',
    'Atlantic/Bermuda' => 'Atlantiku/Bermuda',
    'America/Cayman' => 'Amerika/Kajman',
    'America/Costa_Rica' => 'Amerika/Kosta_Rika',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominika',
    'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
    'America/El_Salvador' => 'Amerika/El_Salvador',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Guadalupe',
    'America/Guatemala' => 'Amerika/Guatamala',
    'America/Port-au-Prince' => 'Amerika/Port-au-Princ',
    'America/Tegucigalpa' => 'Amerika/Tegusigalpa',
    'America/Jamaica' => 'Amerika/Xhamajka',
    'America/Martinique' => 'Amerika/Martiniku',
    'America/Montserrat' => 'Amerika/Montserat',
    'America/Managua' => 'Amerika/Managua',
    'America/Panama' => 'Amerika/Panama',
    'America/Puerto_Rico' => 'Amerika/Puerto_Riko',
    'America/St_Kitts' => 'Amerika/Shën_Kits',
    'America/St_Lucia' => 'Amerika/Shën_Lusia',
    'America/Miquelon' => 'Amerika/Mikelon',
    'America/St_Vincent' => 'Amerika/Shën_Vinsent',
    'America/Grand_Turk' => 'Amerika/Grand_Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/Shën_Tomas',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argjentina/Buenos_Aires',
    'America/Argentina/Cordoba' => 'Amerika/Argjentina/Kordoba',
    'America/Argentina/Tucuman' => 'Amerika/Argjentina/Tukuman',
    'America/Argentina/La_Rioja' => 'Amerika/Argjentina/La_Rioja',
    'America/Argentina/San_Juan' => 'Amerika/Argjentina/San_Huan',
    'America/Argentina/Jujuy' => 'Amerika/Argjentina/Juju',
    'America/Argentina/Catamarca' => 'Amerika/Argjentina/Katamarka',
    'America/Argentina/Mendoza' => 'Amerika/Argjentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argjentina/Rio_Gallegos',
    'America/Argentina/Ushuaia' => 'Amerika/Argjentina/Ushuaia',
    'America/Aruba' => 'Amerika/Aruba',
    'America/La_Paz' => 'Amerika/La_Paz',
    'America/Noronha' => 'Amerika/Noronha',
    'America/Belem' => 'Amerika/Belem',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Recife' => 'Amerika/Rekife',
    'America/Araguaina' => 'Amerika/Araguana',
    'America/Maceio' => 'Amerika/Maseio',
    'America/Bahia' => 'Amerika/Bahia',
    'America/Sao_Paulo' => 'Amerika/Sao_Paulo',
    'America/Campo_Grande' => 'Amerika/Kampo_Grande',
    'America/Cuiaba' => 'Amerika/Suiaba',
    'America/Porto_Velho' => 'Amerika/Porto_Velho',
    'America/Boa_Vista' => 'Amerika/Boa_Vista',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Eirunepe' => 'Amerika/Erunepi',
    'America/Rio_Branco' => 'Amerika/Rio_Branko',
    'America/Santiago' => 'Amerika/Santiago',
    'Pacific/Easter' => 'Pacifkuc/Easter',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Kurakao',
    'America/Guayaquil' => 'Amerija/Guayakul',
    'Pacific/Galapagos' => 'Pacifiku/Galapagos',
    'Atlantic/Stanley' => 'Atlantkuc/Stanli',
    'America/Cayenne' => 'Amerika/Kajeni',
    'America/Guyana' => 'Amerika/Guyana',
    'America/Asuncion' => 'Amerika/Asunsion',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlantiku/Xhorxhia Jugore',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Port_of_Spain' => 'Amerika/Porit_i_Spanjës',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Caracas' => 'Amerika/Karakas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRMCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'Sko në mbledhje',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Kontakte',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Dok',
);
$app_list_strings['token_status'] = array(
    1 => 'Kërkesë',
    2 => 'Qasje',
    3 => 'Jo valide',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'fushatat',
    'email' => 'Emailet',
    'event' => 'Event',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'fushatat',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'fushatat',
    'email' => 'Emailet',
    'event' => 'Event',
    'system' => 'Sistemi',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'baza e njohurisë';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Skicë';
$app_list_strings['aok_status_list']['Expired'] = 'Skaduar';
$app_list_strings['aok_status_list']['In_Review'] = 'Në shqyrtim';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privat';
$app_list_strings['aok_status_list']['published_public'] = 'Publike';

$app_list_strings['moduleList']['FP_events'] = 'Events';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Locations';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invited';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Not Invited';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Attended';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Not Attended';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'I pranuar';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Refuzo';
$app_list_strings['fp_event_status_dom']['No Response'] = 'No Response';

$app_strings['LBL_STATUS_EVENT'] = 'Invite Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Prano statusin';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Selekto këtë faqe';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Selekto të gjitha';
$app_strings['LBL_LISTVIEW_NONE'] = 'Deselkto të gjitha';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Case Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'I mbyllur',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'I ri',
        'Open_Assigned' => 'Drejtuar',
        'Closed_Closed' => 'I mbyllur',
        'Open_Pending Input' => 'Të hyrat e pezulluara',
        'Closed_Rejected' => 'Anuluar',
        'Closed_Duplicate' => 'Dublo',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Single user',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Sistem i çaktivizuar',
    'singleUser' => 'Single User',
    'roundRobin' => 'Rotull-Robin',
    'leastBusy' => 'Më pak i zënët',
    'random' => 'Random',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Raportet';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Raport grafikat';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Fields';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Më i madh se';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Më i vogël se';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aor_operator_list']['Contains'] = 'Përmban';
$app_list_strings['aor_operator_list']['Starts_With'] = 'fillon me';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'Dhe';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OSE';
$app_list_strings['aor_condition_type_list']['Value'] = 'Value';
$app_list_strings['aor_condition_type_list']['Field'] = 'Field';
$app_list_strings['aor_condition_type_list']['Date'] = 'minutData';
$app_list_strings['aor_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutat';
$app_list_strings['aor_date_type_list']['hour'] = 'Orët';
$app_list_strings['aor_date_type_list']['day'] = 'Ditët';
$app_list_strings['aor_date_type_list']['week'] = 'Javët';
$app_list_strings['aor_date_type_list']['month'] = 'Muajtë';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aor_date_options']['now'] = 'Now';
$app_list_strings['aor_date_options']['field'] = 'This Field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ngritje';
$app_list_strings['aor_sort_operator']['DESC'] = 'Zbritje';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Numri';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Sum';
$app_list_strings['aor_function_list']['AVG'] = 'Average';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Numri';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Bar chart';
$app_list_strings['aor_chart_types']['line'] = 'Line chart';
$app_list_strings['aor_chart_types']['pie'] = 'Pie chart';
$app_list_strings['aor_chart_types']['radar'] = 'Radar chart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mujore';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Javore';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Për ditë';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'aktive';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'pasive';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Emailet';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Përdorues';
$app_list_strings['aor_email_type_list']['Users'] = 'përdoruesit';
$app_list_strings['aor_assign_options']['all'] = 'ALL Users';
$app_list_strings['aor_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'Sot';
$app_list_strings['date_time_period_list']['yesterday'] = 'Dje';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Javën e kaluar';
$app_list_strings['date_time_period_list']['last_month'] = 'Muajin e kaluar';
$app_list_strings['date_time_period_list']['this_month'] = 'Këtë muaj';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Këtë semestër';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Semestrin e kaluar';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'on the';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Avancuar';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'dita';
$app_strings['LBL_CRON_MONTH'] = 'Muaji';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Për ditë';
$app_strings['LBL_CRON_WEEKLY'] = 'Javore';
$app_strings['LBL_CRON_MONTHLY'] = 'Mujore';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontratat';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Invoices';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produktet';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Line Items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Kuotat';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Konsumator';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrues';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'shtypi';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospekti';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Rishitës';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Tjetër';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Skicë';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Nogocimi';
$app_list_strings['quote_stage_dom']['Delivered'] = 'E dërguar';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Në pritje';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Konfirmuar';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Afër e pranuar';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Humbja e mbyllur';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Afër e vdekur';
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
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Konsumator';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrues';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'shtypi';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospekti';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Rishitës';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Tjetër';
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
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Kuotat';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Invoices';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontratat';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Kuotat';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Invoices';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontratat';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Accounts';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontaktet';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'udhëheqjet';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Not Started';
$app_list_strings['contract_status_list']['In Progress'] = 'Në progres';
$app_list_strings['contract_status_list']['Signed'] = 'Signed';
$app_list_strings['contract_type_list']['Type'] = 'Lloji';
$app_strings['LBL_PRINT_AS_PDF'] = 'Shtyp si PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Please Select a Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNo templates found.\nPlease go to the PDF templates module and create one';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'WorkFlow Conditions';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Actions';
$app_list_strings['aow_status_list']['Active'] = 'aktive';
$app_list_strings['aow_status_list']['Inactive'] = 'pasive';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Më i madh se';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Më i vogël se';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'Përmban';
$app_list_strings['aow_operator_list']['Starts_With'] = 'fillon me';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'është zero';
$app_list_strings['aow_process_status_list']['Complete'] = 'Plotëso';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'Pezull';
$app_list_strings['aow_process_status_list']['Failed'] = 'dështuar';
$app_list_strings['aow_condition_operator_list']['And'] = 'Dhe';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OSE';
$app_list_strings['aow_condition_type_list']['Value'] = 'Value';
$app_list_strings['aow_condition_type_list']['Field'] = 'Field';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'minutData';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_action_type_list']['Date'] = 'minutData';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutat';
$app_list_strings['aow_date_type_list']['hour'] = 'Orët';
$app_list_strings['aow_date_type_list']['day'] = 'Ditët';
$app_list_strings['aow_date_type_list']['week'] = 'Javët';
$app_list_strings['aow_date_type_list']['month'] = 'Muajtë';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'Sot';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Emailet';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Përdorues';
$app_list_strings['aow_email_type_list']['Users'] = 'përdoruesit';
$app_list_strings['aow_email_to_list']['to'] = 'deri';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'All Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'New Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modified Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Çdoherë';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['duration_unit_dom']['Days'] = 'Ditët';
$app_list_strings['duration_unit_dom']['Hours'] = 'Orët';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'View Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Create Project';

//gmaps
$app_strings['LBL_MAP'] = 'Map';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'adresat';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Maps';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometers';

$app_list_strings['map_module_type_list']['Accounts'] = 'Accounts';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontaktet';
$app_list_strings['map_module_type_list']['Cases'] = 'rastet';
$app_list_strings['map_module_type_list']['Leads'] = 'udhëheqjet';
$app_list_strings['map_module_type_list']['Meetings'] = 'Mbledhjet';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Mundësite';
$app_list_strings['map_module_type_list']['Project'] = 'Projektet';
$app_list_strings['map_module_type_list']['Prospects'] = 'synimet';

$app_list_strings['map_relate_type_list']['Accounts'] = 'llogaritë';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontaktet';
$app_list_strings['map_relate_type_list']['Cases'] = 'rastet';
$app_list_strings['map_relate_type_list']['Leads'] = 'udhëheqjet';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Mbledhjet';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Mundësite';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekti';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Synim';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administrata';
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
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Cable Car';
$app_list_strings['marker_image_list']['car'] = 'Car';
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
$app_list_strings['marker_image_list']['coffee'] = 'Coffee';
$app_list_strings['marker_image_list']['community_centre'] = 'Community Centre';
$app_list_strings['marker_image_list']['company'] = 'Kompania';
$app_list_strings['marker_image_list']['conference'] = 'Konferencë';
$app_list_strings['marker_image_list']['construction'] = 'Ndërtimtari';
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
$app_list_strings['marker_image_list']['friday'] = 'E premte';
$app_list_strings['marker_image_list']['garden'] = 'Garden';
$app_list_strings['marker_image_list']['gas_station'] = 'Gas Station';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Gifts';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helicopter';
$app_list_strings['marker_image_list']['highway'] = 'Highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historical Quarter';
$app_list_strings['marker_image_list']['home'] = 'Ballina';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Libraria';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'E hënë';
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
$app_list_strings['marker_image_list']['photo'] = 'Photo';
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
$app_list_strings['marker_image_list']['saturday'] = 'E shtunë';
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
$app_list_strings['marker_image_list']['subway'] = 'Subway';
$app_list_strings['marker_image_list']['sun'] = 'Diel';
$app_list_strings['marker_image_list']['sunday'] = 'E diel';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Teahouse';
$app_list_strings['marker_image_list']['telephone'] = 'Telephone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terrace';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Theater';
$app_list_strings['marker_image_list']['theme_park'] = 'Theme Park';
$app_list_strings['marker_image_list']['thursday'] = 'E enjte';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'E martë';
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
$app_list_strings['marker_image_list']['wednesday'] = 'E mërkurë';
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
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Security Group';
$app_strings['LBL_ROLE'] = 'Roli';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtër';

$app_strings['LBL_COLLECTION_TYPE'] = 'Lloji';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_EDIT_TAB'] = 'Ndrysho butonat';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Number of Columns:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Are you sure you want to delete the';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Detyrat',
    'Meetings' => 'Mbledhjet',
    'Calls' => 'Thirjet',
    'Notes' => 'Shënimet',
    'Emails' => 'Emailet'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Shitjet',
    'getAccountsSpotsData' => 'Accounts',
    'getLeadsSpotsData' => 'udhëheqjet',
    'getServiceSpotsData' => 'Service',
    'getMarketingSpotsData' => 'marketingu',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktivitetet',
    'getQuotesSpotsData' => 'Kuotat'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Business Hours';
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
$app_list_strings['day_list']['Monday'] = 'E hënë';
$app_list_strings['day_list']['Tuesday'] = 'E martë';
$app_list_strings['day_list']['Wednesday'] = 'E mërkurë';
$app_list_strings['day_list']['Thursday'] = 'E enjte';
$app_list_strings['day_list']['Friday'] = 'E premte';
$app_list_strings['day_list']['Saturday'] = 'E shtunë';
$app_list_strings['day_list']['Sunday'] = 'E diel';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portret';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Peizazh';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'Skicë';
$app_list_strings['survey_status_list']['Public'] = 'Publike';
$app_list_strings['survey_status_list']['Closed'] = 'I mbyllur';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'minutData';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Klasifikimi:';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Pending Confirm opt in, Confirm opt in not sent';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Pending Confirm opt in, Confirm opt in sent';
$app_strings['LBL_OPT_IN'] = 'Opted in';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'e zgjedhur jashtë';
$app_strings['LBL_OPT_IN_INVALID'] = 'Jo valide';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Disabled',
    'opt-in' => 'Opt In',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Opt In',
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
    'minute' => 'minutat',
    'hour' => 'orët',
    'day' => 'Ditët',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'personale',
    'shared' => 'e përbashkët',
    'group' => 'Grup',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'E konektuar',
    'failed' => 'dështuar',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Në progres',
    'success' => 'sukses',
    'warning' => 'Paralajmërim',
    'error' => 'Gabim:',
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
$app_strings['LBL_CLICK_HERE'] = 'Shtyp këtu';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Kërkim';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Kërkim';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Kërkim';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Mëparshëm';
$app_strings['LBL_SEARCH_NEXT'] = 'Vijues';
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

$app_strings['LBL_KEY'] = 'Çelësi';
$app_strings['LBL_VALUE'] = 'Value';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Nënshkrimi';

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
