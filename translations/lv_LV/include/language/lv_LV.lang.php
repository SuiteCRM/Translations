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
    'language_pack_name' => 'Latvian (Latvia) - lv_LV',
    'moduleList' => array(
        'Home' => 'Sākums',
        'ResourceCalendar' => 'Resource Calendar',
        'Contacts' => 'Ielūgtie',
        'Accounts' => 'Klienti',
        'Alerts' => 'Alerts',
        'Opportunities' => 'Iespējas',
        'Cases' => 'Pieteikumi',
        'Notes' => 'Piezīmes',
        'Calls' => 'Zvani',
        'TemplateSectionLine' => 'Template Section Line',
        'Calls_Reschedule' => 'Calls Reschedule',
        'Emails' => 'E-pasti',
        'EAPM' => 'EAPM',
        'Meetings' => 'Tikšanās',
        'Tasks' => 'Uzdevumi',
        'Calendar' => 'Kalendārs',
        'Leads' => 'Interesenti',
        'Currencies' => 'Valūtas',
        'Activities' => 'Darbības',
        'Bugs' => 'Kļūdas',
        'Feeds' => 'RSS',
        'iFrames' => 'Mani portāli',
        'TimePeriods' => 'Laika periodi',
        'ContractTypes' => 'Līguma veidi',
        'Schedulers' => 'Plānotāji',
        'Project' => 'Projekti',
        'ProjectTask' => 'Projekta uzdevumi',
        'Campaigns' => 'Mārketings',
        'CampaignLog' => 'Kampaņas žurnāls',
        'Documents' => 'Dokumenti',
        'DocumentRevisions' => 'Dokumenta versijas',
        'Connectors' => 'Konektori',
        'Roles' => 'Lomas',
        'Notifications' => 'Paziņojumi',
        'Sync' => 'Sinhronizācija',
        'Users' => 'Lietotājs',
        'Employees' => 'Darbinieki',
        'Administration' => 'Administrēšana',
        'ACLRoles' => 'Lomas',
        'InboundEmail' => 'Ienākošais e-pasts',
        'Releases' => 'Laidieni',
        'Prospects' => 'Mērķi',
        'Queues' => 'Rindas',
        'EmailMarketing' => 'E-pasta mārketings',
        'EmailTemplates' => 'Email - Templates',
        'ProspectLists' => 'Targets - Lists',
        'SavedSearch' => 'Saglabātie meklējumi',
        'UpgradeWizard' => 'Atjauninājumu vednis',
        'Trackers' => 'Sekotājs',
        'TrackerSessions' => 'Sekotāja sesijas',
        'TrackerQueries' => 'Sekotāja vaicājumi',
        'FAQ' => 'BUJ',
        'Newsletters' => 'Biļeteni',
        'SugarFeed' => 'SuiteCRM Barotne',
        'SugarFavorites' => 'SuiteCRM Favorīti',

        'OAuthKeys' => 'OAuth patērētāja atslēgas',
        'OAuthTokens' => 'OAuth atslēgas',
        'OAuth2Clients' => 'OAuth Clients',
        'OAuth2Tokens' => 'OAuth atslēgas',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Sākums',
        'Dashboard' => 'Darba vieta',
        'Contacts' => 'Kontaktpersonas',
        'Accounts' => 'Klients',
        'Opportunities' => 'Iespēja',
        'Cases' => 'Pieteikums',
        'Notes' => 'Piezīme',
        'Calls' => 'Zvans',
        'Emails' => 'E-pasts',
        'EmailTemplates' => 'E-pasta veidne',
        'Meetings' => 'Tikšanās',
        'Tasks' => 'Uzdevums',
        'Calendar' => 'Kalendārs',
        'Leads' => 'Interesents',
        'Activities' => 'Darbības',
        'Bugs' => 'Kļūda',
        'KBDocuments' => 'ZBDokuments',
        'Feeds' => 'RSS',
        'iFrames' => 'Mani portāli',
        'TimePeriods' => 'Laika periods',
        'Project' => 'Projekts',
        'ProjectTask' => 'Projekta uzdevums',
        'Prospects' => 'Mērķis',
        'Campaigns' => 'Kampaņa',
        'Documents' => 'SuiteCRM dokuments',
        'Sync' => 'Sinhronizācija',
        'Users' => 'Lietotājs',
        'SugarFavorites' => 'SuiteCRM Favorīti',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Yes',
        '2' => 'No',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Konsultants',
        'Competitor' => 'Konkurents',
        'Customer' => 'Klients',
        'Integrator' => 'Integrators',
        'Investor' => 'Investors',
        'Partner' => 'Partneris',
        'Press' => 'Prese',
        'Prospect' => 'Potenciāls klients',
        'Reseller' => 'Izplatītājs',
        'Other' => 'Cita nozare',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Apģērbi',
        'Banking' => 'Banku pakalpojumi',
        'Biotechnology' => 'Biotehnoloģija',
        'Chemicals' => 'Ķīmiskā rūpniecība',
        'Communications' => 'Komunikācijas',
        'Construction' => 'Celtniecība',
        'Consulting' => 'Konsultācijas',
        'Education' => 'Izglītība',
        'Electronics' => 'Elektronika',
        'Energy' => 'Enerģētika',
        'Engineering' => 'Inženierija',
        'Entertainment' => 'Izklaide',
        'Environmental' => 'Vides aizsardzība',
        'Finance' => 'Finansu pakalpojumi',
        'Government' => 'Valstiska organizācija',
        'Healthcare' => 'Veselības aprūpe',
        'Hospitality' => 'Izmitināšana',
        'Insurance' => 'Apdrošināšana',
        'Machinery' => 'Mašīnbūve',
        'Manufacturing' => 'Ražošana',
        'Media' => 'Mēdiji',
        'Not For Profit' => 'Bezpeļņas organizācija',
        'Recreation' => 'Rehabilitācija',
        'Retail' => 'Mazumtirdzniecība',
        'Shipping' => 'Piegādes pakalpojumi',
        'Technology' => 'Tehnoloģijas',
        'Telecommunications' => 'Telekomunikācijas',
        'Transportation' => 'Transporta pakalpojumi',
        'Utilities' => 'Komunālie pakalpojumi',
        'Other' => 'Cita nozare',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Darījuma zvans',
        'Existing Customer' => 'Esošs klients',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Darbinieks',
        'Partner' => 'Partneris',
        'Public Relations' => 'Sabiedriskās attiecības',
        'Direct Mail' => 'Tiešais pasts',
        'Conference' => 'Konference',
        'Trade Show' => 'Nozares izstāde',
        'Web Site' => 'Mājas lapa',
        'Word of mouth' => 'Privāta saziņa',
        'Email' => 'E-pasts',
        'Campaign' => 'Kampaņa',
        'Other' => 'Cita nozare',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Esošs bizness',
        'New Business' => 'Jauns bizness',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Ieņēmumi',
        'Investment' => 'Investīcija',
        'Expected_Revenue' => 'Paredzamie ieņēmumi',
        'Budget' => 'Budžets',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Biznesa lēmumpieņēmējs',
        'Business Evaluator' => 'Biznesa novērtētājs',
        'Technical Decision Maker' => 'Tehniskais lēmumpieņēmējs',
        'Technical Evaluator' => 'Tehniskais vērtētājs',
        'Executive Sponsor' => 'Vadošais sponsors',
        'Influencer' => 'Ietekmētājs',
        'Other' => 'Cita nozare',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Alternatīvā kontaktpersona',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '15 dienas',
        'Net 30' => '30 dienas',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kvalificējies',
        'Needs Analysis' => 'Nepieciešama analīze',
        'Value Proposition' => 'Vērtības piedāvājums',
        'Id. Decision Makers' => 'Identifying Decision Makers',
        'Perception Analysis' => 'Uztveres analīze',
        'Proposal/Price Quote' => 'Ierosinājums/Cenas piedāvājums',
        'Negotiation/Review' => 'Pārrunas/caurskate',
        'Closed Won' => 'Aizvērts - uzvarēts',
        'Closed Lost' => 'Aizvērts - zaudēts',
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
        'Call' => 'Zvans',
        'Meeting' => 'Tikšanās',
        'Task' => 'Uzdevums',
        'Email' => 'E-pasts',
        'Note' => 'Piezīme',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'A. god.',
        'Ms.' => 'Ļ. cien.',
        'Mrs.' => 'Ļ. cien.',
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
        60 => '1 minuti pirms',
        300 => '5 minūtes pirms',
        600 => '10 minūtes pirms',
        900 => '15 minūtes pirms',
        1800 => '30 minūtes pirms',
        3600 => '1 stundu pirms',
        7200 => '2 stundas pirms',
        10800 => '3 stundas pirms',
        18000 => '5 stundas pirms',
        86400 => '1 dienu pirms',
    ),

    'task_priority_default' => 'Vidēja',
    'task_priority_dom' => array(
        'High' => 'Augsta',
        'Medium' => 'Vidēja',
        'Low' => 'Zema',
    ),
    'task_status_default' => 'Not Started',
    'task_status_dom' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'Procesā',
        'Completed' => 'Pabeigts',
        'Pending Input' => 'Gaida ievadi',
        'Deferred' => 'Noraidīts',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Noticis',
        'Not Held' => 'Nav noticis',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Cita nozare',
        'Sugar' => 'Sugar',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Noticis',
        'Not Held' => 'Nav noticis',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Ienākošs',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Jauns',
        'Assigned' => 'Piešķirts lietotājam',
        'In Process' => 'Apstrādē',
        'Converted' => 'Konvertēts',
        'Recycled' => 'Atkārtotā procesā',
        'Dead' => 'Izbeigts',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Augsta',
        'P2' => 'Vidēja',
        'P3' => 'Zema',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Parasts lietotājs',
        'Administrator' => 'Administrators',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Email Code',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktīvs',
        'Terminated' => 'Pārtrauktas darba attiecības',
        'Leave of Absence' => 'Atvaļinājumā',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Augsta',
        'Medium' => 'Vidēja',
        'Low' => 'Zema',
    ),
    'project_task_priority_default' => 'Vidēja',

    'project_task_status_options' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'Procesā',
        'Completed' => 'Pabeigts',
        'Pending Input' => 'Gaida ievadi',
        'Deferred' => 'Noraidīts',
    ),
    'project_task_utilization_options' => array(
        '0' => 'neviens',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Uzmetums',
        'In Review' => 'Vērtēšanā',
        'Underway' => 'Underway',
        'On_Hold' => 'Pagaidām apturēts',
        'Completed' => 'Pabeigts',
    ),
    'project_status_default' => 'Uzmetums',

    'project_duration_units_dom' => array(
        'Days' => 'Dienas',
        'Hours' => 'Stundas',
    ),

    'activity_status_type_dom' => array(
        '' => '--None--',
        'active' => 'Aktīvs',
        'inactive' => 'Neaktīvs',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Klienti',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Klients',
        'Opportunities' => 'Iespēja',
        'Cases' => 'Pieteikums',
        'Leads' => 'Interesents',
        'Contacts' => 'Kontaktpersonas', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Kļūda',
        'Project' => 'Projekts',

        'Prospects' => 'Mērķis',
        'ProjectTask' => 'Projekta uzdevums',

        'Tasks' => 'Uzdevums',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Rēķins',
        'AOS_Quotes' => 'Piedāvājums',
        'AOS_Products' => 'Produkts',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Klients',
        'Contacts' => 'Kontaktpersonas',
        'Opportunities' => 'Iespēja',
        'Campaigns' => 'Kampaņa',
        'Tasks' => 'Uzdevums',
        'Emails' => 'E-pasts',

        'Bugs' => 'Kļūda',
        'Project' => 'Projekts',
        'ProjectTask' => 'Projekta uzdevums',
        'Prospects' => 'Mērķis',
        'Cases' => 'Pieteikums',
        'Leads' => 'Interesents',

        'Meetings' => 'Tikšanās',
        'Calls' => 'Zvans',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Rēķins',
        'AOS_Quotes' => 'Piedāvājums',
        'AOS_Products' => 'Produkts',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Klients',
        'Contacts' => 'Kontaktpersonas',
        'Tasks' => 'Uzdevums',
        'Opportunities' => 'Iespēja',

        'Bugs' => 'Kļūda',
        'Cases' => 'Pieteikums',
        'Leads' => 'Interesents',

        'Project' => 'Projekts',
        'ProjectTask' => 'Projekta uzdevums',

        'Prospects' => 'Mērķis',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Rēķins',
        'AOS_Quotes' => 'Piedāvājums',
        'AOS_Products' => 'Produkts',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Piedāvājumi',
        'AOS_Invoices' => 'Rēķini',
        'AOS_Contracts' => 'Līgumi',
    ),
    'issue_priority_default_key' => 'Vidēja',
    'issue_priority_dom' => array(
        'Urgent' => 'Steidzama',
        'High' => 'Augsta',
        'Medium' => 'Vidēja',
        'Low' => 'Zema',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Apstiprināts',
        'Duplicate' => 'Dublicēt',
        'Closed' => 'Slēgts',
        'Out of Date' => 'Novecojis',
        'Invalid' => 'nederīgs',
    ),

    'issue_status_default_key' => 'Jauns',
    'issue_status_dom' => array(
        'New' => 'Jauns',
        'Assigned' => 'Piešķirts lietotājam',
        'Closed' => 'Slēgts',
        'Pending' => 'Gaidošs',
        'Rejected' => 'Noraidīts',
    ),

    'bug_priority_default_key' => 'Vidēja',
    'bug_priority_dom' => array(
        'Urgent' => 'Steidzama',
        'High' => 'Augsta',
        'Medium' => 'Vidēja',
        'Low' => 'Zema',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Apstiprināts',
        'Duplicate' => 'Dublicēt',
        'Fixed' => 'Izlabots',
        'Out of Date' => 'Novecojis',
        'Invalid' => 'nederīgs',
        'Later' => 'Atiekams',
    ),
    'bug_status_default_key' => 'Jauns',
    'bug_status_dom' => array(
        'New' => 'Jauns',
        'Assigned' => 'Piešķirts lietotājam',
        'Closed' => 'Slēgts',
        'Pending' => 'Gaidošs',
        'Rejected' => 'Noraidīts',
    ),
    'bug_type_default_key' => 'Kļūda',
    'bug_type_dom' => array(
        'Defect' => 'Defekts',
        'Feature' => 'Īpašība',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administrēšana',
        'Product' => 'Produkts',
        'User' => 'Lietotājs',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Iekšējs',
        'Forum' => 'Forums',
        'Web' => 'Tīmeklis',
        'InboundEmail' => 'E-pasts',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Klienti',
        'Activities' => 'Darbības',
        'Bugs' => 'Kļūdas',
        'Calendar' => 'Kalendārs',
        'Calls' => 'Zvani',
        'Campaigns' => 'Mārketings',
        'Cases' => 'Pieteikumi',
        'Contacts' => 'Ielūgtie',
        'Currencies' => 'Valūtas',
        'Dashboard' => 'Darba vieta',
        'Documents' => 'Dokumenti',
        'Emails' => 'E-pasti',
        'Feeds' => 'Barotnes',
        'Forecasts' => 'Prognozes',
        'Help' => 'Palīdzība',
        'Home' => 'Sākums',
        'Leads' => 'Interesenti',
        'Meetings' => 'Tikšanās',
        'Notes' => 'Piezīmes',
        'Opportunities' => 'Iespējas',
        'Outlook Plugin' => 'Outlook spraudnis',
        'Projects' => 'Projekti',
        'Quotes' => 'Piedāvājumi',
        'Releases' => 'Laidieni',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Atjaunināšana',
        'Users' => 'Lietotājs',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Plānošanā',
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
        'Complete' => 'Plotëso',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Pārdošana pa telefonu',
        'Mail' => 'Pasts',
        'Email' => 'E-pasts',
        'Print' => 'Drukāt',
        'Web' => 'Tīmeklis',
        'Radio' => 'Radio',
        'Television' => 'Televīzija',
        'NewsLetter' => 'Biļetens',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Katru nedēļu',
        'Monthly' => 'Katru mēnesi',
        'Quarterly' => 'Reizi ceturksnī',
        'Annually' => 'Reizi gadā',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Janvāris',
        '2' => 'Februāris',
        '3' => 'Marts',
        '4' => 'Aprīlis',
        '5' => 'Mai',
        '6' => 'Jūnijs',
        '7' => 'Jūlijs',
        '8' => 'Augusts',
        '9' => 'Septembris',
        '10' => 'Oktobris',
        '11' => 'Novembris',
        '12' => 'Decembris',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Mai',
        '6' => 'Jūn',
        '7' => 'Jūl',
        '8' => 'Aug',
        '9' => 'Sep',
        '10' => 'Okt',
        '11' => 'Nov',
        '12' => 'Dec',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Svētdiena',
        '2' => 'Pirmdiena',
        '3' => 'Otrdiena',
        '4' => 'Trešdiena',
        '5' => 'Ceturtdiena',
        '6' => 'Piektdiena',
        '7' => 'Sestdiena',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Sv.',
        '2' => 'P',
        '3' => 'O',
        '4' => 'T',
        '5' => 'C',
        '6' => 'Pk',
        '7' => 'Se',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'Rīts',
        'PM' => 'Vakars',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Personīgs',
        'group' => 'Grupa',
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
        'personal' => 'Personīgs',
        'group' => 'Grupa',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personīgs',
        'group' => 'Grupa',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personīgs',
        'group' => 'Grupa',
        'system' => 'Sistēma',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Nosūtīts',
        'archived' => 'Arhivēts',
        'draft' => 'Uzmetums',
        'inbound' => 'Ienākošs',
        'campaign' => 'Kampaņa',
    ),
    'dom_email_status' => array(
        'archived' => 'Arhivēts',
        'closed' => 'Slēgts',
        'draft' => 'Sagatavošanā',
        'read' => 'Izlasīts',
        'replied' => 'Atbildēts',
        'sent' => 'Nosūtīts',
        'send_error' => 'Nosūtīšanas kļūda',
        'unread' => 'Nelasīts',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arhivēts',
    ),

    'dom_email_server_type' => array(
        '' => '--None--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--None--',
        'createcase' => 'Izveidot pieteikumu',
        'bounce' => 'Noraidītiem ziņojumiem',
    ),
    'dom_email_distribution' => array(
        '' => '--None--',
        'direct' => 'Tiešā piešķiršana',
        'roundRobin' => 'Viens-visiem',
        'leastBusy' => 'Mazāk aizņemtajiem',
    ),
    'dom_email_errors' => array(
        1 => 'Only select one user when Direct Assigning items.',
        2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Yes',
        'bool_false' => 'No',
    ),
    'dom_int_bool' => array(
        1 => 'Yes',
        0 => 'No',
    ),
    'dom_switch_bool' => array(
        'on' => 'Yes',
        'off' => 'No',
        '' => 'No',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM E-pasta klients',
        'mailto' => 'Ārējs E-pasta klients',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Noklusētais E-pasta formāts',
        'html' => 'HTML E-pasts',
        'plain' => 'Atklāta teksta E-pasts',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Izpildes laiks pagājis, nav izpildīts',
        'ready' => 'Gatavs',
        'in progress' => 'Procesā',
        'failed' => 'Beidzies ar kļūdu',
        'completed' => 'Pabeigts',
        'no curl' => 'Nav palaists: nav pieejama cURL',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minūtes',
        'hour' => 'Stundas',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Mārketings',
        'Knowledege Base' => 'Zināšanu bāze',
        'Sales' => 'Pārdošana',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arhivēts',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketinga materiāli',
        'Product Brochures' => 'Produktu brošūras',
        'FAQ' => 'BUJ',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktīvs',
        'Draft' => 'Uzmetums',
        'FAQ' => 'BUJ',
        'Expired' => 'Izbeidzies',
        'Under Review' => 'Caurskatē',
        'Pending' => 'Gaidošs',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Pasta sapludināšana',
        'eula' => 'EULA līgums',
        'nda' => 'NDA līgums',
        'license' => 'Licences līgums',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Apstiprināt',
        'decline' => 'Noraidīt',
        'tentative' => 'Nekonkrēts',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Apstiprināts',
        'decline' => 'Noraidīts',
        'tentative' => 'Nekonkrēts',
        'none' => 'Nav',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Nav',
        'Daily' => 'Katru dienu',
        'Weekly' => 'Katru nedēļu',
        'Monthly' => 'Katru mēnesi',
        'Yearly' => 'Reizi gadā',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'diena(s)',
        'Weekly' => 'nedēļa(as)',
        'Monthly' => 'mēnesis(ši)',
        'Yearly' => 'gads(i)',
    ),

    'duration_dom' => array(
        '' => 'Nav',
        '900' => '15 minūtes',
        '1800' => '30 minūtes',
        '2700' => '45 minūtes',
        '3600' => '1 stunda',
        '5400' => '1.5 stundas',
        '7200' => '2 stundas',
        '10800' => '3 stundas',
        '21600' => '6 stundas',
        '86400' => '1 diena',
        '172800' => '2 dienas',
        '259200' => '3 dienas',
        '604800' => '1 nedēļa',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Noklusētā',
        'seed' => 'Izsēts',
        'exempt_domain' => 'Noklusētais saraksts pēc domēna',
        'exempt_address' => 'Noklusētais saraksts pēc e-pasta adreses',
        'exempt' => 'Noklusētais saraksts pēc ID',
        'test' => 'Tests',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktīvs',
        'inactive' => 'Neaktīvs',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Ziņa nosūtīta/mēģināta nosūtīt',
        'send error' => 'Noraidītie ziņojumi, cits',
        'invalid email' => 'Noraidītie ziņojumi, nederīga e-pasta adrese',
        'link' => 'Click-thru saite',
        'viewed' => 'Apskatīta ziņa',
        'removed' => 'Nelieto',
        'lead' => 'Interesenti izveidoti',
        'contact' => 'Kontaktpersonas izveidotas',
        'blocked' => 'Noklusēts pēc adreses vai domēna',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Ielūgtie',
        'Users' => 'Lietotājs',
        'Prospects' => 'Mērķi',
        'Leads' => 'Interesenti',
        'Accounts' => 'Klienti',
    ),
    'merge_operators_dom' => array(
        'like' => 'Satur',
        'exact' => 'Tieša sakritība',
        'start' => 'Sākas ar',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Yes',
        'false' => 'No',
        'required' => 'Obligāts',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Izslēgta',
        1 => 'Ieslēgta',
        2 => 'Filtrs',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Augsta',
        'medium' => 'Vidēja',
        'low' => 'Zema',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Not Started',
        'inprogress' => 'Procesā',
        'completed' => 'Pabeigts',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Izvērst apzīmējumus',
        'collapselegend' => 'Savērst apzīmējumus',
        'clickfordrilldown' => 'Klikšķini detalizētai informācijai',
        'detailview' => 'Vairāk informācijas...',
        'piechart' => 'Sektoru diagramma',
        'groupchart' => 'Grupu diagramma',
        'stackedchart' => 'Kaudzes diagramma',
        'barchart' => 'Joslu diagramma',
        'horizontalbarchart' => 'Horizontāla joslu diagramma',
        'linechart' => 'Līniju diagramma',
        'noData' => 'Dati nav pieejami',
        'print' => 'Drukāt',
        'pieWedgeName' => 'sekcijas',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktīvs',
        'Inactive' => 'Neaktīvs',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Parastas pēdiņas (&#39;)',
        '"' => 'Dubultas pēdiņas (&#34;)',
        '' => 'Nav',
        'other' => 'Cits:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Cits:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Jauns logs',
        '_self' => 'Esošais logs',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Neatjaunot',
        '30' => 'Ik pēc 30 sekundēm',
        '60' => 'Ik pēc 1 minūtes',
        '180' => 'Ik pēc 3 minūtēm',
        '300' => 'Ik pēc 5 minūtēm',
        '600' => 'Ik pēc 10 minūtēm',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'nekad',
        '30' => 'Ik pēc 30 sekundēm',
        '60' => 'Ik pēc 1 minūtes',
        '180' => 'Ik pēc 3 minūtēm',
        '300' => 'Ik pēc 5 minūtēm',
        '600' => 'Ik pēc 10 minūtēm',
    ),
    'date_range_search_dom' => array(
        '=' => 'Vienāds ar',
        'not_equal' => 'Nav vienāds',
        'greater_than' => 'Pēc',
        'less_than' => 'Pirms',
        'last_7_days' => 'Pēdējās 7 dienās',
        'next_7_days' => 'Nākamajās 7 dienās',
        'last_30_days' => 'Pēdējās 30 dienās',
        'next_30_days' => 'Nākamajās 30 dienās',
        'last_month' => 'Pēdējā mēnesī',
        'this_month' => 'Šajā mēnesī',
        'next_month' => 'Nākamais mēnesis',
        'last_year' => 'Pagājušajā gadā',
        'this_year' => 'Šajā gadā',
        'next_year' => 'Nākamais gads',
        'between' => 'Starp',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Vienāds ar',
        'not_equal' => 'Nav vienāds',
        'greater_than' => 'Vairāk kā',
        'greater_than_equals' => 'Lielāks vai vienāds ar',
        'less_than' => 'Mazāk par',
        'less_than_equals' => 'Mazāks vai vienāds ar',
        'between' => 'Starp',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopēt',
        'move' => 'Pārvietot',
        'donothing' => 'Nedarīt neko',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Results',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'Email Code:',
    'LBL_SEND' => 'Sūtīt',
    'LBL_LOGOUT' => 'Iziet',
    'LBL_TOUR_NEXT' => 'Saglabāt un turpināt',
    'LBL_TOUR_SKIP' => 'Izlaist',
    'LBL_TOUR_BACK' => 'Atpakaļ',
    'LBL_TOUR_TAKE_TOUR' => 'Iepazīties',
    'LBL_MOREDETAIL' => 'Sīkāk' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Rediģēt iekļauto' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Skats' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtrs' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Pievienot' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Add Email Address' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Slēpt/Rādīt' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Dzēsts' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Dzēst' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Izņemt' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Remove Email Address' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Opt Out',
    'LBL_ID_FF_INVALID' => 'Make Invalid',
    'LBL_ADD' => 'Pievienot' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Uzņēmuma logo' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Savienojumu uznirstošie logi',
    'LBL_CLOSEINLINE' => 'Slēgt',
    'LBL_VIEWINLINE' => 'Skats',
    'LBL_INFOINLINE' => 'Informācija',
    'LBL_PRINT' => 'Drukāt',
    'LBL_HELP' => 'Palīdzība',
    'LBL_ID_FF_SELECT' => 'Izvēlieties',
    'DEFAULT' => 'Pamata',
    'LBL_SORT' => 'Kārtot',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Aktivizēt STMP pār SSL vai TLS?',
    'LBL_NO_ACTION' => 'There is no action by that name: %s',
    'LBL_NO_SHORTCUT_MENU' => 'There are no actions available.',
    'LBL_NO_DATA' => 'Dati nav atrasti',

    'LBL_ROUTING_FLAGGED' => 'karogs uzlikts',
    'LBL_ROUTING_TO' => 'līdz',
    'LBL_ROUTING_TO_ADDRESS' => 'uz adresei',
    'LBL_ROUTING_WITH_TEMPLATE' => 'ar sagatavi',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Šis ieraksts patreiz satur vērtības laukos - Darba tālrunis un Adrese. Lai pārrakstītu šīs vērtības ar sekojošu Darba tālruni un adresi no atlasītā uzņēmuma, klikšķini "Labi". Lai paturētu patreizējās vērtības, klikšķini "Atcelt".',
    'LBL_DROP_HERE' => '[Nomest šeit]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Ierakstīt Gmail&#153; noklusētos datus',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Vārds:',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Izejošā e-pasta servera īpašības',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP parole',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP ports:',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP serveris',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP lietotāja vārds',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Noklusētā',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Brīdinājums: Nav norādīts lietotājvārds un parole izejošā pasta kontam',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Iestatiet pasta kontus, lai redzētu ienākošos e-pastus no jūsu e-pasta kontiem',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Ievadi SMTP pasta servera informāciju, kuru izmantot izejošajiem e-pastiem Pasta Kontos.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Pabeigts',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Dzēst',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Uz:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-pasts',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtrs',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Vārds:',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Adrese nav atrasta',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Saglabāt un pievienot adrešu grāmatai',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Atzīmēt e-pasta saņēmējus',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adrešu grāmata',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Brīdinājums! Izejošais konts, kuru mēģiniet dzēst ir sasaistīts ar kādu ienākošo kontu. Vai vēlaties turpināt?',
    'LBL_EMAIL_ADDRESSES' => 'E-pasts',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-pasts',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Unable to confirm email address',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importēt uz SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Piešķīrumi',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Pielikums',
    'LBL_EMAIL_ATTACHMENT' => 'Pielikums',
    'LBL_EMAIL_ATTACHMENTS' => 'No lokālās sistēmas',
    'LBL_EMAIL_ATTACHMENTS2' => 'No SuiteCRM dokumentiem',
    'LBL_EMAIL_ATTACHMENTS3' => 'Veidņu pielikumi',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Faila nosaukums',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'SuiteCRM dokuments',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Atcelt',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Rakstu zīmes',
    'LBL_EMAIL_CHECK' => 'Pārbaudīt pastu',
    'LBL_EMAIL_CHECKING_NEW' => 'Pārbauda jaunos e-pastus',
    'LBL_EMAIL_CHECKING_DESC' => 'Uzgaidiet, lūdzu... <br><br>Ja tā ir pirmā e-pastu pārbaude, tas var aizņemt kādu laiku.',
    'LBL_EMAIL_CLOSE' => 'Slēgt',
    'LBL_EMAIL_COFFEE_BREAK' => 'Pārbauda jaunos e-pastus. <br><br>Lieliem e-pasta kontiem tas var aizņemt ievērojamu laiku.',

    'LBL_EMAIL_COMPOSE' => 'E-pasts',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Lūdzu ievadiet e-pasta saņēmēju(us)',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'E-pasta ziņojums ir tukšs. Vai tomēr sūtīt?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'E-pasta temats nav aizpildīta. Vai tomērt sūtīt?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(bez temata)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Ievadiet derīgu e-pasta adresi laukos - To, CC un BCC.',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Vai atcelt šo e-pastu?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Vai tiešām vēlies dzēst šo parakstu?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Email sent',

    'LBL_EMAIL_CREATE_NEW' => '--Izveidot pie saglabāšanas--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Vairāki',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tukšs',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Sūtītāja sūtīšanas datums',
    'LBL_EMAIL_DATE_TODAY' => 'Šodien',
    'LBL_EMAIL_DELETE' => 'Dzēsts',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Vai dzēst atzīmētos ziņojumus?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'e-pasts veiksmīgi izdzēsts.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Dzēš ziņojumu',
    'LBL_EMAIL_DETAILS' => 'Detaļas',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Darbam ar kontaktpersonām tiks izmantota tikai primārā adrese.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Iztīra miskasti',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Izejošā servera dzēšana',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Kešfailu tīrīšana',
    'LBL_EMAIL_EMPTY_MSG' => 'No emails to display.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Kataloga nosaukumam jābūt unikāls un tas nedrīkst būt tukšs. Lūdzu mēģiniet vēlreiz.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Nevar izdzēst katalogu. Katalogam vai tā pēctecim ir sasaistīti e-pasti vai pastkastes.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Nevar noteikt paredzēto katalogu no konteksta. Mēģiniet vēlreiz.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Lūdzu pārbaudiet savus iestatījumus.',
    'LBL_EMAIL_ERROR_DESC' => 'Atklātas kļūdas.',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Jums nav piekļuves tiesību šim apgabalam. Sazinieties ar vietnes administratoru, lai iegūtu piekļuvi.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM kataloga vārdiem jābūt unikāliem.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Lūdzu ievadīt kādu meklēšanas kritēriju.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Notikusi kļūda',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Ziņa izņemta no servera',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Ziņa izņemta no servera vai pārvietota uz citu katalogu.',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Savienojums ar pasta serveri neizdevās. Lūdzu sazinieties ar administratoru',
    'LBL_EMAIL_ERROR_MOVE' => 'E-pasta pārvietošana starp serveriem un/vai pasta kontiem šobrīd nav pieejama.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Pārvietot kļūdu',
    'LBL_EMAIL_ERROR_NAME' => 'Nepieciešams lietotāja vārds.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Sūtītāja adrese ir obligāta. Norādiet derīgu e-pasta adresi.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Lūdzu sagādājiet failu.',
    'LBL_EMAIL_ERROR_SERVER' => 'Nepieciešama pasta servera adrese.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Pasta kontu nevar saglabāt.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Notikusi kļūda, sazinoties ar pasta serveri.',
    'LBL_EMAIL_ERROR_USER' => 'Nepieciešams lietotāja vārds.',
    'LBL_EMAIL_ERROR_PORT' => 'Nepieciešams pasta servera ports.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Nepieciešams servera protokols.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Ir jānorāda Monitorētais katalogs',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Nepieciešams miskastes katalogs.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Informācija nav pieejama',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nav norādīts izejošais pasta serveris.',
    'LBL_EMAIL_ERROR_SENDING' => 'Error Sending Email. Please contact your administrator for assistance.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Katalogi',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Pievienot',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Pievienot jaunu katalogu',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Pārsaukt katalogu',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Pabeigt',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Pievienot šo katalogu',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Šo katalogu nevar izmainīt',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Vai tiešām vēlaties dzēst šo katalogu?\nProcess ir neatgriežams.\nKataloga dzēšana tiks attiecināma uz visiem tajā esošajiem katalogiem.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Jauns kataloga nosaukums',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Pirms veiciet šo darbību izvēlaties katalogu.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Kataloga pārvaldība',

    'LBL_EMAIL_FORWARD' => 'Pārsūtīt',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Lejuplādēti [[count]] no [[total]] e-pastiem',
    'LBL_EMAIL_FROM' => 'No',
    'LBL_EMAIL_GROUP' => 'grupa',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupa',
    'LBL_EMAIL_HOME_FOLDER' => 'Sākums',
    'LBL_EMAIL_IE_DELETE' => 'Pasta konta dzēšana',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Paraksta dzēšana',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Vai tiešām vēlaties dzēst šo e-pasta kontu?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Veiksmīgi izdzēsts.',
    'LBL_EMAIL_IE_SAVE' => 'Pasta konta informācijas saglabāšana',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'E-pasta importēšana',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Import into SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importēt iestatījumus',
    'LBL_EMAIL_INVALID' => 'nederīgs',
    'LBL_EMAIL_LOADING' => 'Notiek ielāde ...',
    'LBL_EMAIL_MARK' => 'Atzīmēt',
    'LBL_EMAIL_MARK_FLAGGED' => 'iezīmēts',
    'LBL_EMAIL_MARK_READ' => 'Kā izlasīts',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Neiezīmēts',
    'LBL_EMAIL_MARK_UNREAD' => 'Kā neizlasīts',
    'LBL_EMAIL_ASSIGN_TO' => 'Piešķirt',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Izveidot katalogu',
    'LBL_EMAIL_MENU_COMPOSE' => 'Izveidot',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Dzēst katalogu',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Iztīrīt miskasti',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinhronizēt',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Iztīrīt keša failus',
    'LBL_EMAIL_MENU_REMOVE' => 'Izņemt',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Pārsaukt katalogu',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Kataloga pārsaukšana',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Lūdzu veiciet izvēli pirms mēģināt veikt šo darbību.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Izveidot katalogu (attālināti vai SuiteCRM sistēmā)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Dzēst katalogu (attālināti vai SuiteCRM sistēmā)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Iztukšot visus atkritumu katalogus saviem pasta kontiem',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Atzīmēt šo/šos e-pastu(us) kā izlasītus',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Atzīmēt šo/šos e-pastu(us) kā neatzīmētus',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Pārsaukt katalogu (attālināti vai SuiteCRM sistēmā)',

    'LBL_EMAIL_MESSAGES' => 'ziņojumi',

    'LBL_EMAIL_ML_NAME' => 'Saraksta nosaukums',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Izvēlētās saraksta adreses',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Pieejamās saraksta adreses',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> lai izvēlētos vairākus<br />(Mac lietotājiem <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'No',
    'LBL_EMAIL_NOT_SENT' => 'Sistēma nevar izpildīt jūsu pieprasījumu. Lūdzu sazinieties ar sistēmas administratoru',

    'LBL_EMAIL_OK' => 'Labi',
    'LBL_EMAIL_ONE_MOMENT' => 'Uzgaidiet, lūdzu...',
    'LBL_EMAIL_OPEN_ALL' => 'Atvērt vairākas ziņas',
    'LBL_EMAIL_OPTIONS' => 'Opcijas',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Ātrā izveide',
    'LBL_EMAIL_OPT_OUT' => 'Nelieto',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Nelieto vai nederīgs',
    'LBL_EMAIL_PERFORMING_TASK' => 'Izpilda uzdevumu',
    'LBL_EMAIL_PRIMARY' => 'Primārs',
    'LBL_EMAIL_PRINT' => 'Drukāt',

    'LBL_EMAIL_QC_BUGS' => 'Kļūda',
    'LBL_EMAIL_QC_CASES' => 'Pieteikums',
    'LBL_EMAIL_QC_LEADS' => 'Interesents',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontaktpersonas',
    'LBL_EMAIL_QC_TASKS' => 'Uzdevums',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Iespēja',
    'LBL_EMAIL_QUICK_CREATE' => 'Ātrā izveide',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Katalogu pārģenerēšana',
    'LBL_EMAIL_RELATE_TO' => 'Relate',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Skatīt relācijas',
    'LBL_EMAIL_RECORD' => 'E-pasta ieraksts',
    'LBL_EMAIL_REMOVE' => 'Izņemt',
    'LBL_EMAIL_REPLY' => 'Atbildēt',
    'LBL_EMAIL_REPLY_ALL' => 'Atbildēt visiem',
    'LBL_EMAIL_REPLY_TO' => 'Atbildēt-uz',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Ziņojuma iegūšana',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'E-pasta ieraksta iegūšana',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Lūdzu izvētaties tikai vienu e-pasta ierakstu',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Atgriezties iepriekšējo moduli?',
    'LBL_EMAIL_REVERT' => 'Atgriezt atpakaļ',
    'LBL_EMAIL_RELATE_EMAIL' => 'Saistītais e-pasts',

    'LBL_EMAIL_RULES_TITLE' => 'Likumu pārvaldība',

    'LBL_EMAIL_SAVE' => 'Pabeigt',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Saglabāt un atbildēt',
    'LBL_EMAIL_SAVE_DRAFT' => 'Saglabāt uzmetumu',
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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Datums no',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Datums līdz',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nav rezultātu, kuri atbilstu Jūsu meklēšanas kritērijiem',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Meklēšanas rezultāti',

    'LBL_EMAIL_SELECT' => 'Izvēlieties',

    'LBL_EMAIL_SEND' => 'Sūtīt',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sūta e-pastu',

    'LBL_EMAIL_SETTINGS' => 'Uzstādījumi',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'E-pasta konti',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Notīrīt formu',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Pārbaudīt jaunu pastu',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'No adreses',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-pasta adrese testa paziņojumam:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'No vārda',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Atbildēt uz adresi',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinhronizēt visus pasta kontus',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'E-pasts aizsūtīts uz norādīto adresi, izmantojot piedāvātos izejošā pasta uzstādījumus. Lūdzu pārbaudiet vai e-pasts tika saņemts, lai pārbaudītu vai uzstādījumi ir pareizi.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'See full SMTP Log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Vai vēlaties veikt pilnu sinhronizāciju?\nApjomīgi pasta konti var aizņemt vairākas minūtes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Nospiediet Shift pogu vai Ctrl pogu, lai izvēlētos vairākus katalogus.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Vispārīgi',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Izveidot grupas katalogus',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Rediģēt grupas katalogu',

    'LBL_EMAIL_SETTINGS_NAME' => 'Pasta konta nosaukums:',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Norādi e-pastu skaitu Iesūtnes lapā. Šim iestatījumam nepieciešams lapas atjauninājums, lai tas stātos spēkā.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Pasta konta izgūšana',
    'LBL_EMAIL_SETTINGS_SAVED' => 'The settings have been saved.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'E-pastus sūtīt tikai vienkāršā tekstā',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'E-pastu skaits lapā',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Vizuālie uzstādījumi',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Izvēles',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Pieejamie lietotāja katalogi',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Ārējais pasta serveris, kas izvēlēts lietojam pasta kontam ir nederīgs. Pārbaudiet uzstādījumus vai izvēlieties citu pasta serveri pasta kontam.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Izejošais pasta serveris nav nokonfigurēts, lai sūtītu e-pastus. Nokonfigurē izejošā pasta serveri vai izvēlies izejošā pasta serveri kontam, kuru tu lieto. Iestatījumi  >> Pasta Konts.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Default Signature',
    'LBL_EMAIL_SIGNATURES' => 'Paraksti',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! pasts',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Cita nozare',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Attālinātie katalogi ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM katalogi ]',
    'LBL_EMAIL_SUBJECT' => 'Temats',
    'LBL_EMAIL_SUCCESS' => 'Veiksmīgi',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM katalogs',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'E-pasta veidnes ķermenis ir tukšs',
    'LBL_EMAIL_TEMPLATES' => 'Veidnes',
    'LBL_EMAIL_TO' => 'Uz',
    'LBL_EMAIL_VIEW' => 'Skats',
    'LBL_EMAIL_VIEW_HEADERS' => 'Attēlot galveni',
    'LBL_EMAIL_VIEW_RAW' => 'Attēlot neapstrādātu e-pastu',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Iespēja netiek atbalstīta, ja to lieto ar POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Noklusētais saites teksts.',
    'LBL_EMAIL_YES' => 'Yes',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Sūtīt testa e-pastu',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testa e-pasts aizsūtīts',
    'LBL_EMAIL_MESSAGE_NO' => 'Ziņojums nr.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Importēšana pabeigta',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importēšana neveiksmīga. Ziņojums jau ir importēts vai izdzēsts no servera.',

    'LBL_LINK_NONE' => 'Nav',
    'LBL_LINK_ALL' => 'Visus',
    'LBL_LINK_RECORDS' => 'Ieraksti',
    'LBL_LINK_SELECT' => 'Izvēlieties',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Apstiprināt',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Vai vēlaties aizvērt šo #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Nederīgs faila paplašinājums',

    'ERR_AJAX_LOAD' => 'Notikusi kļūda:',
    'ERR_AJAX_LOAD_FAILURE' => 'Apstrādājot jūsu pieprasījumu notikusi kļūda, vēlāk mēģini vēlreiz.',
    'ERR_AJAX_LOAD_FOOTER' => 'Ja kļūda atkārtojas, palūdziet administratoru, lai deaktivizē Ajax šim modulim',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Decimālais atdalītājs nevar būt tāds pats kā tūkstošu atdalītājs. \\n\\n  Lūdzu nomainiet to vērtības.',
    'ERR_DELETE_RECORD' => 'Lai dzēstu kontaktpersonu, jānorāda ieraksta numurs.',
    'ERR_EXPORT_DISABLED' => 'Eksporta funkcija izslēgta',
    'ERR_EXPORT_TYPE' => 'Kļūdas eksportēšana',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nederīga e-pasta adrese.',
    'ERR_INVALID_FILE_REFERENCE' => 'Nederīga faila atsauce',
    'ERR_NO_HEADER_ID' => 'Šajā motīvā šī iespēja nav pieejama.',
    'ERR_NOT_ADMIN' => 'Neautorizēta piekļuve administratora funkcijām.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Nav pieejams obligātais lauks:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Nederīgs obligātais lauks',
    'ERR_INVALID_VALUE' => 'Nederīga vērtība:',
    'ERR_NO_SUCH_FILE' => 'Šāda faila nav jūsu sistēmā',
    'ERR_NO_SINGLE_QUOTE' => 'Nevar izmantot vienu pēdiņu priekš',
    'ERR_NOTHING_SELECTED' => 'Pirms turpināt veiciet izvēli.',
    'ERR_SELF_REPORTING' => 'Lietotājs nevar būt tiešais vadītājs pats sev.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nav atbilstības šim laukam:',
    'ERR_SQS_NO_MATCH' => 'Nav atbilstības',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Meta-data definīcijā atribūtam displayParams norādiet  $#39;key$#39; indeksu',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Kļūda. Portāla nosaukums jau ir piesaistīts citam kontaktam.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Lauka vērtība nav pabeidzama ar pareizo vērtību',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Notikusi kļūda mēģinot saglabāt ārējo kontu.',
    'ERR_NO_DB' => 'Nevar savienoties ar datubāzi. Aplūkojiet failu suitecrm.log detalizētai informācijai.',
    'ERR_DB_FAIL' => 'Datubāzes atteikums. Lūdzu aplūkojiet failu suitecrm.log, detalizētam apskatam.',
    'ERR_DB_VERSION' => 'SuiteCRM CRM {0} failus var izmantot tikai kopā ar  SuiteCRM CRM {1} datubāzi.',

    'LBL_ACCOUNT' => 'Klients',
    'LBL_ACCOUNTS' => 'Klienti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Apskatīt kopsavilkumu [Alt+H]',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Apskatīt kopsavilkumu [Alt+H]',
    'LBL_ADD_BUTTON' => 'Pievienot',
    'LBL_ADD_DOCUMENT' => 'Pievienot dokumentu',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Pievienot mērķu sarakstam',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Add Contacts To Target List',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikšķiniet, lai aizvērtu',
    'LBL_ADDITIONAL_DETAILS' => 'Papildus detaļas',
    'LBL_ADMIN' => 'Administrators',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arhīvs',
    'LBL_ASSIGNED_TO_USER' => 'Piešķirts lietotājam',
    'LBL_ASSIGNED_TO' => 'Piešķirts lietotājam:',
    'LBL_BACK' => 'Atpakaļ',
    'LBL_BILLING_ADDRESS' => 'Norēķinu adrese',
    'LBL_QUICK_CREATE' => 'Create ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - komerciāls atvērtā koda CRM',
    'LBL_BUGS' => 'Kļūdas',
    'LBL_BY' => 'kas',
    'LBL_CALLS' => 'Zvani',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Izsūtīt rindā esošos kampaņu e-pastus',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Apstiprināt',
    'LBL_CASE' => 'Pieteikums',
    'LBL_CASES' => 'Pieteikumi',
    'LBL_CHANGE_PASSWORD' => 'Mainīt paroli',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Pārbaudīt visu',
    'LBL_CITY' => 'Pilsēta',
    'LBL_CLEAR_BUTTON_LABEL' => 'Dzēst',
    'LBL_CLEAR_BUTTON_TITLE' => 'Dzēst',
    'LBL_CLEARALL' => 'Notīrīt visu',
    'LBL_CLOSE_BUTTON_TITLE' => 'Slēgt',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Aizvērt un veidot jaunu',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Aizvērt un veidot jaunu',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Rakstīt e-pastu',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Rakstīt e-pastu',
    'LBL_SEARCH_DROPDOWN_YES' => 'Yes',
    'LBL_SEARCH_DROPDOWN_NO' => 'No',
    'LBL_CONTACT_LIST' => 'Kontaktpersonu saraksts',
    'LBL_CONTACT' => 'Kontaktpersonas',
    'LBL_CONTACTS' => 'Ielūgtie',
    'LBL_CONTRACT' => 'Contract',
    'LBL_CONTRACTS' => 'Līgumi',
    'LBL_COUNTRY' => 'Valsts:',
    'LBL_CREATE_BUTTON_LABEL' => 'Jauns',
    'LBL_CREATED_BY_USER' => 'Izveidoja lietotājs',
    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_CREATED' => 'Izveidoja',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Valūta:',
    'LBL_DOCUMENTS' => 'Dokumenti',
    'LBL_DATE_ENTERED' => 'Izveidots:',
    'LBL_DATE_MODIFIED' => 'Modificēts:',
    'LBL_EDIT_BUTTON' => 'Rediģēt',
    'LBL_DUPLICATE_BUTTON' => 'Dublicēt',
    'LBL_DELETE_BUTTON' => 'Dzēsts',
    'LBL_DELETE' => 'Dzēsts',
    'LBL_DELETED' => 'Izdzēsts',
    'LBL_DIRECT_REPORTS' => 'Padotie (?) / Tieši atskaitās',
    'LBL_DONE_BUTTON_LABEL' => 'Pabeigts',
    'LBL_DONE_BUTTON_TITLE' => 'Pabeigts',
    'LBL_FAVORITES' => 'Favorīti',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Izvēlieties vCard failu',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard nesatur visus vajadzīgos laukus, kas nepieciešami šim modulim. Papildus informācijai skatieties suitecrm.log failu.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Importēt vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importēt vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importēt vCard',
    'LBL_VIEW_BUTTON' => 'Skats',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-pasts PDF formātā',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-pasts PDF formātā',
    'LBL_EMAILS' => 'E-pasti',
    'LBL_EMPLOYEES' => 'Darbinieki',
    'LBL_ENTER_DATE' => 'Ievades datums',
    'LBL_EXPORT' => 'Eksports',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Iet uz',
    'LBL_HIDE' => 'Paslēpt',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importēšana',
    'LBL_IMPORT_STARTED' => 'Importēšana uzsākta:',
    'LBL_LAST_VIEWED' => 'Pēdējā apskate',
    'LBL_LEADS' => 'Interesenti',
    'LBL_LESS' => 'mazāk',
    'LBL_CAMPAIGN' => 'Kampaņa:',
    'LBL_CAMPAIGNS' => 'Mārketings',
    'LBL_CAMPAIGNLOG' => 'Kampaņas žurnāls',
    'LBL_CAMPAIGN_CONTACT' => 'Mārketings',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Nav',
    'LBL_THEME' => 'Ekrāntēma:',
    'LBL_FOUND_IN_RELEASE' => 'Atrasta laidienā:',
    'LBL_FIXED_IN_RELEASE' => 'Izlabota laidienā:',
    'LBL_LIST_ACCOUNT_NAME' => 'Konta nosaukums',
    'LBL_LIST_ASSIGNED_USER' => 'Lietotājs',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktpersonas vārds',
    'LBL_LIST_CONTACT_ROLE' => 'Kontaktpersonas loma',
    'LBL_LIST_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_LIST_EMAIL' => 'E-pasts',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_OF' => 'no',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_RELATED_TO' => 'Attiecas uz',
    'LBL_LIST_USER_NAME' => 'Lietotāja vārds',
    'LBL_LISTVIEW_NO_SELECTED' => 'Lūdzu, izvēlies vismaz vienu ierakstu, ko apstrādāt.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Lūdzu, izvēlies vismaz divus ierakstus, ko apstrādāt.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Atzīmētie ieraksti',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Atzīmēti:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Atcelt',
    'LBL_VERIFY' => 'Verify',
    'LBL_RESEND' => 'Resend',
    'LBL_PROFILE' => 'Profils',
    'LBL_MAILMERGE' => 'Pasta sapludināšana',
    'LBL_MASS_UPDATE' => 'Masveida izmaiņas',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Masveida izmaiņu operācijai nav pieejamu lauku.',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Izvēlēties primāro e-pastu',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt in Primary Email',
    'LBL_MEETINGS' => 'Tikšanās',
    'LBL_MEETING_GO_BACK' => 'Atgriezties tikšanās ierakstā',
    'LBL_MEMBERS' => 'Dalībnieki',
    'LBL_MEMBER_OF' => 'Dalībnieks',
    'LBL_MODIFIED_BY_USER' => 'Modificēja',
    'LBL_MODIFIED_USER' => 'Modificēja',
    'LBL_MODIFIED' => 'Modificēja',
    'LBL_MODIFIED_NAME' => 'Modificēja vārds',
    'LBL_MORE' => 'Vairāk',
    'LBL_MY_ACCOUNT' => 'Mani uzstādījumi',
    'LBL_NAME' => 'Vārds:',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Jauns',
    'LBL_NEW_BUTTON_TITLE' => 'Jauns',
    'LBL_NEXT_BUTTON_LABEL' => 'Saglabāt un turpināt',
    'LBL_NONE' => '--None--',
    'LBL_NOTES' => 'Piezīmes',
    'LBL_OPPORTUNITIES' => 'Iespējas',
    'LBL_OPPORTUNITY_NAME' => 'Iespējas nosaukums',
    'LBL_OPPORTUNITY' => 'Iespēja',
    'LBL_OR' => 'VAI',
    'LBL_PANEL_OVERVIEW' => 'Apskats',
    'LBL_PANEL_ASSIGNMENT' => 'OTHER',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Vecāka veids',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Pasta indekss:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pamatadrese - Pilsēta:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pamata adreses valsts:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pamatadrese - Pasta indekss:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pamatadrese - Novads:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pamatadrese - Iela 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pamatadrese - Iela 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pamatadrese - Iela:',
    'LBL_PRIMARY_ADDRESS' => 'Primārā adrese:',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Produkti',
    'LBL_PROJECT_TASKS' => 'Projekta uzdevumi',
    'LBL_PROJECTS' => 'Projekti',
    'LBL_QUOTES' => 'Piedāvājumi',

    'LBL_RELATED' => 'Saistīts ar',
    'LBL_RELATED_RECORDS' => 'Saistītie ieraksti',
    'LBL_REMOVE' => 'Izņemt',
    'LBL_REPORTS_TO' => 'Vadītājs',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Norāda obligāti aizpildāmu lauku',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Pabeigts',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Pilna ekrānforma',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Pilna ekrānforma',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Saglabāt un veidot jaunu',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Saglabāt un veidot jaunu',
    'LBL_SAVE_OBJECT' => 'Saglabāt {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Meklēšana',
    'LBL_SEARCH_BUTTON_TITLE' => 'Meklēšana',
    'LBL_FILTER' => 'Filtrs',
    'LBL_SEARCH' => 'Meklēšana',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'vairāk',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Nederīgs faila formāts. Tikai attēla faili var tikt augšuplādēti.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Izvēlieties',
    'LBL_SELECT_BUTTON_TITLE' => 'Izvēlieties',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'pārlūkot dokumentus',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'pārlūkot dokumentus',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Izvēlēties kontaktpersonu',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Izvēlēties kontaktpersonu',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Izvēlēties no atskaitēm',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Izvēlēties atskaites',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Izvēlēties lietotāju',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Izvēlēties lietotāju',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Izvēlēties failu [Alt+F]',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Izvēlēties failu [Alt+F]',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Izvēlēties lietotāju',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Izvēlēties lietotāju',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Notīrīt lietotāju',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Notīrīt lietotāju',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Izvēlēties uzņēmumu [Alt+A]',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Izvēlēties uzņēmumu [Alt+A]',
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
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Izvēlēties kontaktpersonu',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Izvēlēties kontaktpersonu',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Šīs lapas atainošanā izmantotie servera resursi (SQL pieprasījumi un faili)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundes.',
    'LBL_SERVER_RESPONSE_TIME' => 'Servera reakcijas laiks:',
    'LBL_SERVER_MEMORY_BYTES' => 'baiti',
    'LBL_SERVER_MEMORY_USAGE' => 'Servera atmiņas lietojums: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Lietojums: - modulis: {0} - darbība: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Atmiņas izmantošana pie servera maksimālās noslodzes: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Piegādes adrese',
    'LBL_SHOW' => 'Rādīt',
    'LBL_STATE' => 'Novads:',
    'LBL_STATUS_UPDATED' => 'Jūsu statuss šim notikumam ir izmainīts!',
    'LBL_STATUS' => 'Statuss:',
    'LBL_STREET' => 'Iela',
    'LBL_SUBJECT' => 'Temats',

    'LBL_INBOUNDEMAIL_ID' => 'Ienākošā e-pasta ID',

    'LBL_SCENARIO_SALES' => 'Pārdošana',
    'LBL_SCENARIO_MARKETING' => 'Mārketings',
    'LBL_SCENARIO_FINANCE' => 'Finansu pakalpojumi',
    'LBL_SCENARIO_SERVICE' => 'Pakalpojums',
    'LBL_SCENARIO_PROJECT' => 'Project Management',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'Sinhronizācija',
    'LBL_TABGROUP_ALL' => 'Visus',
    'LBL_TABGROUP_ACTIVITIES' => 'Darbības',
    'LBL_TABGROUP_COLLABORATION' => 'Sadarbība',
    'LBL_TABGROUP_MARKETING' => 'Mārketings',
    'LBL_TABGROUP_OTHER' => 'Cita nozare',
    'LBL_TABGROUP_SALES' => 'Pārdošana',
    'LBL_TABGROUP_SUPPORT' => 'Atbalsts',
    'LBL_TASKS' => 'Uzdevumi',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhivēt E-pastu [Alt+K]',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhivēt E-pastu [Alt+K]',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Atsaukt dzēšanu',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Atsaukt dzēšanu',
    'LBL_UNDELETE_BUTTON' => 'Atsaukt dzēšanu',
    'LBL_UNDELETE' => 'Atsaukt dzēšanu',
    'LBL_UNSYNC' => 'Atcelt sinhronizēšanu',
    'LBL_UPDATE' => 'Atjaunināt',
    'LBL_USER_LIST' => 'Lietotāju saraksts',
    'LBL_USERS' => 'Lietotājs',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Esošā e-pasta ieraksta pārbaudīšana...',
    'LBL_VERIFY_PORTAL_NAME' => 'Esošā portāla nosaukuma pārbaudīšana...',
    'LBL_VIEW_IMAGE' => 'Apskatīt',

    'LNK_ABOUT' => 'Par produktu',
    'LNK_ADVANCED_FILTER' => 'Advanced Filter',
    'LNK_BASIC_FILTER' => 'Quick Filter',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_QUICK_FILTER' => 'Quick Filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Parādīt visu',
    'LNK_CLOSE' => 'Slēgt',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modify current filter',
    'LNK_SAVED_VIEWS' => 'Izkārtojuma opcijas',
    'LNK_DELETE' => 'Dzēsts',
    'LNK_EDIT' => 'Rediģēt',
    'LNK_GET_LATEST' => 'Iegūt jaunāko',
    'LNK_GET_LATEST_TOOLTIP' => 'Aizvietot ar jaunāko versiju',
    'LNK_HELP' => 'Palīdzība',
    'LNK_CREATE' => 'Jauns',
    'LNK_LIST_END' => 'Beigas',
    'LNK_LIST_NEXT' => 'Saglabāt un turpināt',
    'LNK_LIST_PREVIOUS' => 'Iepriekšējais',
    'LNK_LIST_RETURN' => 'Atgriezties sarakstā',
    'LNK_LIST_START' => 'Sākt',
    'LNK_LOAD_SIGNED' => 'Parakstīt',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Aizvietot ar parakstītu dokumentu',
    'LNK_PRINT' => 'Drukāt',
    'LNK_BACKTOTOP' => 'Atpakaļ uz augšu',
    'LNK_REMOVE' => 'Izņemt',
    'LNK_RESUME' => 'Atsākt',
    'LNK_VIEW_CHANGE_LOG' => 'Apskatīt izmaiņu žurnālu',

    'NTC_CLICK_BACK' => 'Klikšķiniet pārlūka pogu &amp;amp;#39;Back&amp;amp;#39; un izlabojiet kļūdu.',
    'NTC_DATE_FORMAT' => '(gggg-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Vai tiešām vēlaties dzēst izvēlēto(s) ierakstu(s)?',
    'NTC_TEMPLATE_IS_USED' => 'Veidni lieto vismaz viens e-pasta ieraksts. Vai tiešām vēlaties to dzēst?',
    'NTC_TEMPLATES_IS_USED' => 'The following templates are used in email marketing records. Are you sure you want to delete them?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Vai jūs tiešām vēlaties dzēst šo ierakstu?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Vai tiešām vēlaties dzēst',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Vai tiešām vēlaties izmainīt',
    'NTC_DELETE_SELECTED_RECORDS' => 'izvēlēto(s) ierakstu(s)?',
    'NTC_LOGIN_MESSAGE' => 'Lūdzu ievadiet lietotāja vārdu un paroli.',
    'NTC_NO_ITEMS_DISPLAY' => 'neviens',
    'NTC_REMOVE_CONFIRMATION' => 'Vai tiešām vēlaties noņemt šo relāciju? Tiks noņemta tikai relācija. Ieraksts netiks izdzēsts.',
    'NTC_REQUIRED' => 'Norāda obligāti aizpildāmu lauku',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Sveiks',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Ieraksta atstāšana bez izmaiņu saglabāšanas. Vai tiešām vēlaties atstāt ierakstu?',
    'ERROR_NO_RECORD' => 'Kļūda atgriežot ierakstu. Šis ieraksts ir vai nu jau dzēsts vai arī jums nav piekļuves tiesību.',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Uzmanību:</b>Izmantotais pārlūks vai pārlūka versija netiek atbalstīta.</p><p>Ieteicamas sekojošas pārlūku versijas</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (vai jaunāka versija)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Uzmanību:</b> Jūsu pārlūks darbojas IE compatibility skatā, kas netiek atbalstīts.',
    'ERROR_TYPE_NOT_VALID' => 'Kļūda. Šis tips nav derīgs.',
    'ERROR_NO_BEAN' => 'Neizdevās iegūt bean',
    'LBL_DUP_MERGE' => 'Atrast dublikātus',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Pārvaldīt abonementus',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Pārvaldīt abonementus priekš',
    // Ajax status strings
    'LBL_LOADING' => 'Notiek ielāde ...',
    'LBL_SEARCHING' => 'Searching...',
    'LBL_SAVING_LAYOUT' => 'Saglabā izkārtojumu ...',
    'LBL_SAVED_LAYOUT' => 'Izkārtojums saglabāts.',
    'LBL_SAVED' => 'Saglabāts',
    'LBL_SAVING' => 'Saglabā',
    'LBL_DISPLAY_COLUMNS' => 'Rādīt kolonnas',
    'LBL_HIDE_COLUMNS' => 'Paslēpt kolonnas',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST' => 'Apstrādā...',
    'LBL_REQUEST_PROCESSED' => 'Pabeigts',
    'LBL_AJAX_FAILURE' => 'Ajax kļūda',
    'LBL_MERGE_DUPLICATES' => 'Sapludināt',
    'LBL_SAVED_FILTER_SHORTCUT' => 'My Filters',
    'LBL_SEARCH_POPULATE_ONLY' => 'Veiciet meklēšanu, izmantojot augstāk esošo meklēšanas formu',
    'LBL_DETAILVIEW' => 'Detalizēts skatījums',
    'LBL_LISTVIEW' => 'Saraksta skatījums',
    'LBL_EDITVIEW' => 'Rediģēt skatījumu',
    'LBL_BILLING_STREET' => 'Iela:',
    'LBL_SHIPPING_STREET' => 'Iela:',
    'LBL_SEARCHFORM' => 'Mekēšanas forma',
    'LBL_SAVED_SEARCH_ERROR' => 'Lūdzu ievadiet šī skatījuma nosaukumu.',
    'LBL_DISPLAY_LOG' => 'Rādīt žurnālu',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistēma',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sesijas noilgums',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Jūsu sesija beigsies pēc apmēram 2 minūtēm. Saglabājiet savu darbu.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Jūsu sesijai ir noilgums.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Tikšanās',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Zvans',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Laiks:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Novietojums:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Apraksts:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Statuss:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Attiecas uz:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Rezultāti nav atrasti.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'No results found for <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Create <item1> as a new <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Jums pašreiz nav saglabātu ierakstu. <item2> vai <item3> tagad.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Pievienot maniem favorītiem',
    'LBL_CREATE_CONTACT' => 'Izveidot kontaktpersonu',
    'LBL_CREATE_CASE' => 'Izveidot pieteikumu',
    'LBL_CREATE_NOTE' => 'Izveidot piezīmi',
    'LBL_CREATE_OPPORTUNITY' => 'Jauna iespēja',
    'LBL_SCHEDULE_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LBL_SCHEDULE_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LBL_CREATE_TASK' => 'Izveidot uzdevumu [Alt+N]',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Ģenerēt formu',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Saglabāt "No tīmekļa uz interesentu" formu',
    'LBL_AVAILABLE_FIELDS' => 'Pieejamie lauki',
    'LBL_FIRST_FORM_COLUMN' => 'First Form Column',
    'LBL_SECOND_FORM_COLUMN' => 'Second Form Column',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Missing required field: Assigned to',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Missing required field: Related campaign',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Submitting this form will create ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Pievienot visus laukus',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset all Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Izņemt visus laukus',
    'LBL_NEXT_BTN' => 'Saglabāt un turpināt',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Var iebūvēt tikai attēla tipa pielikumu',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Datubāzes konteksts ir izmainīts uz',
    'ERR_MSSQL_WARNING' => 'Brīdinājums:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Kļūda: Fails [[file]] nav pieejams. Izveidot nav iespējams, jo atbilstošais HTML fails netika atrasts.',
    'ERR_CANNOT_FIND_MODULE' => 'Kļūda: Modulis [module] neeksistē.',
    'LBL_ALT_ADDRESS' => 'Cita adrese:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Kļūda: Neatbilstošs argumentu skaits &amp;amp;#39;atslēgai&amp;amp;#39;un &amp;amp;#39;kopēšanas&amp;amp;#39; elementiem attēlotajā parametru masīvā.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Vispārīgi',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tikai mani ieraksti',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulli',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Rādīt rindas',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Ir sasniegts administratora uzstādītais maksimālais SuiteCRM dašletu skaits. Lai pievienotu jaunu SuiteCRM dašletu izņem kādu no esošajiem.',
    'LBL_ADDING_DASHLET' => 'Dašlets tiek pievienots...',
    'LBL_ADDED_DASHLET' => 'Dašlets pievienots',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Vai tiešām vēlaties noņemt SuiteCRM dašletu?',
    'LBL_REMOVING_DASHLET' => 'Dašlets tiek noņemts...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dašlets noņemts',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Notiek lapas ielāde. Lūdzu uzgaidiet...',

    'LBL_RELOAD_PAGE' => 'Lūdzu <a href="javascript: window.location.reload()">atjaunojiet logu</a>, lai lietotu šo SuiteCRM dašletu.',
    'LBL_ADD_DASHLETS' => 'Pievienot dašletus',
    'LBL_CLOSE_DASHLETS' => 'Slēgt',
    'LBL_OPTIONS' => 'Opcijas',
    'LBL_1_COLUMN' => '1 kolona',
    'LBL_2_COLUMN' => '2 kolonas',
    'LBL_3_COLUMN' => '3 kolonas',
    'LBL_PAGE_NAME' => 'Lapas nosaukums',

    'LBL_SEARCH_RESULTS' => 'Meklēšanas rezultāti',
    'LBL_SEARCH_MODULES' => 'Moduļi:',
    'LBL_SEARCH_TOOLS' => 'Rīki',
    'LBL_SEARCH_HELP_TITLE' => 'Meklēšanas padomi',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Nav attēla',

    'LBL_MODULE' => 'Modulis',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopēt adresi no kreisās puses:',
    'LBL_SAVE_AND_CONTINUE' => 'Saglabāt un turpināt',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Izvēles vadības</strong></p><ul><li>Uzspiest uz vērtībām, lai izvēlētos atribūtu.</li><li>Ctrl-click&amp;amp;nbsp;lai&amp;amp;nbsp;izvēlētos vairākus. Mac lietotājiem CMD-click.</li><li>Lai izvēlētos visas vērtības starp diviem atribūtiem,&amp;amp;nbsp; uzspiest uz pirmo vērtību&amp;amp;nbsp;un tad spiest shift un pēdējo vērtību.</li></ul><p><strong>Izvērstās meklēšanas un izkārtojuma iespējas</strong><br><br>Lietojot <b>saglabāto meklēšanas un izkārtojuma</b> opciju, var saglabāt meklējamos parametrus un/vai pielāgoto saraksta skata izkārtojumu, lai ātri iegūtu vēlamos meklēšanas rezultātusturpmāk. Jūs variet glabāt neierobežoti meklēšanas un izkārtojuma skaitu. Visi saglabātie rezultāti tiks attēloti pēc nosaukuma sarakstā saglabātie meklējumi ar pēdējo ielādēto, saglabāto meklējumu, kas parādās augšējā sarakstā.<br><br>Lai pielāgotu saraksta skata izkārtojumu, lietojiet paslēptās kolonas un attēlojiet kolonu kastes lai izvēlētos, kurus laukus attēlot meklēšanas rezultātos. Piemēram, Jūs varat apskatīt paslēptās detaļas tādas kā ieraksta nosaukums, un pievienotie lietotāji, un pievienotās darbu grupas meklēšanas rezultātos. Lai pievienotu kolonu saraksta skatam, jāizvēlas lauks no paslēptā kolonu saraksta un jālieto kreisā bulta, lai to pārvietotu uz attēloto kolonu sarakstu. Lai izņemtu kolonu no saraksta skata, tā ir jāizvēlas no attēlotā kolonu saraksta un jālieto labā bulta, lai to pārvietotu uz paslēpto kolonu sarakstu.<br><br>Ja izkārtojuma uzstādījumus saglabā, tos varēs ielādēt jebkurā laikā lai apskatītu meklēšanas rezultātus pielāgotajā izkārtojumā.<br><br>Lai saglabātu un uzlabotu meklēšanu un/vai izkārtojumu:<ol><li>Ievadīt meklējamo nosaukumu <b>Saglabāt meklēšanu kā</b> lauku un spiest <b>Saglabāt</b>.Nosaukums parādās saglabāto meklējumu sarakstā blakus <b>Notīrīt</b> pogai.</li><li>Lai apskatītu saglabāto meklēšanu, tā jāizvēlas no saglabāto meklēšanas saraksta. Sarakstā ir attēloti meklēšanas rezultāti.</li><li>Lai uzlabotu saglabāto meklējumu iespējas, jāizvēlas saglabātā meklēšanas forma no saraksta, jāievada jauns meklēšanas kritērijs un/vai izkārtojuma iespējas paplašinātajā meklēšanas apgabalā, un jāspiež <b>Uzlabot</b> nākamā pēc <b>Modificēt pašreizējo meklēšanu</b>.</li><li>Lai dzēstu saglabātos meklējumus, tas jāizvēlas saglabāto meklējumu sarakstā, jāspiež <b>Dzēst</b> nākošā pēc <b>Modificēt pašreizējo meklēšanu</b>, un jāspiež <b>OK</b> lai apstiprinātu dzēšanu.</li></ol><p><strong>Padomi</strong><br><br>Lietojot % kā aizstājējzīmes operatoru, meklēšanu var padarīt pārskatāmāku. Piemēram, meklējot rezultātus, kas ir vienādi ar "Apples", var nomainīt meklēšanu uz "Apples%" kurš atzīmēs visus rezultātus, kas sākas ar vārdu Apples, bet nesaturēs citus simbolus.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Kļūda: Vaicājuma ierobežojums $limit sasniegts modulī  $module .',
    'ERROR_NOTIFY_OVERRIDE' => 'Kļūda: ResourceObserver->notify() ir jāignorē.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Kļūda: Nevar izveidot monitoru, jo metadatu fails ir tukšs vai neeksistē.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Kļūda: Norādītajam vārdam nav nokonfigurēts monitors',
    'ERR_UNDEFINED_METRIC' => 'Kļūda: Nenodefinētai metrikai nevar uzstādīt vērtību',
    'ERR_STORE_FILE_MISSING' => 'Kļūda: Nevar atrast glabājamo implementācijas failu',

    'LBL_MONITOR_ID' => 'Monitora Id',
    'LBL_USER_ID' => 'Lietotāja ID',
    'LBL_MODULE_NAME' => 'Moduļa nosaukums',
    'LBL_ITEM_ID' => 'Ieraksta Id',
    'LBL_ITEM_SUMMARY' => 'Ieraksta kopsavilkums',
    'LBL_ACTION' => 'Darbība',
    'LBL_SESSION_ID' => 'Sesijas Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack izveidots lietotājam ar id {0}',
    'LBL_VISIBLE' => 'Ieraksts redzams',
    'LBL_DATE_LAST_ACTION' => 'Pēdējās darbības datums',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nav pirms',
    'MSG_IS_MORE_THAN' => 'vairāk kā',
    'MSG_SHOULD_BE' => 'vajadzētu būt',
    'MSG_OR_GREATER' => 'vai vairāk',

    'LBL_LIST' => 'Saraksts',
    'LBL_CREATE_BUG' => 'Izveidot kļūdas pieteikumu',

    'LBL_OBJECT_IMAGE' => 'objekta attēls',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Izvēlēties datumu',

    'LBL_VALIDATE_RANGE' => 'nav derīgā intervālā',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Please choose both a starting and ending date range',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Visus',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Kļūda: Masīvu skaits bean parametrā nesakrīt ar masīvu skaitu rezultātā.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Kļūda: Moduļa kartēšanas ieraksts nav pieejams.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Kļūda: Nav iespējams saņemt datus {0} savienotājam. Serviss pagaidām var būt nepieejams vai konfigurācijas uzstādījumi var būt nederīgi. Savienotāja kļūdas ziņojums: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Optimālai IIS/FastCGI sapi lietošanai php.ini datnē parametram fastcgi.logging uzstādiet vērtību 0.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Vārds:',
    'LBL_COLLECTION_PRIMARY' => 'Primārs',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_DESCRIPTION' => 'Apraksts',

    'LBL_YESTERDAY' => 'Vakar',
    'LBL_TODAY' => 'šodien',
    'LBL_TOMORROW' => 'rīt',
    'LBL_NEXT_WEEK' => 'nākamnedēļ',
    'LBL_NEXT_MONDAY' => 'nākamajā Pirmdienā',
    'LBL_NEXT_FRIDAY' => 'nākamajā Piektdienā',
    'LBL_TWO_WEEKS' => 'divas nedēļas',
    'LBL_NEXT_MONTH' => 'nākamajā mēnesī',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'Nakošā mēneša pirmā diena',
    'LBL_THREE_MONTHS' => 'trīs mēneši',
    'LBL_SIXMONTHS' => 'seši mēneši',
    'LBL_NEXT_YEAR' => 'Nākamajā gadā',

    //Datetimecombo fields
    'LBL_HOURS' => 'Stundas',
    'LBL_MINUTES' => 'Minūtes',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automātiski atjaunot',

    'LBL_DURATION_DAY' => 'diena',
    'LBL_DURATION_HOUR' => 'stundas',
    'LBL_DURATION_MINUTE' => 'minūte',
    'LBL_DURATION_DAYS' => 'dienas',
    'LBL_DURATION_HOURS' => 'Duration Hours',
    'LBL_DURATION_MINUTES' => 'Duration Minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Izvēlēties mēnesi',
    'LBL_ENTER_YEAR' => 'Ievadiet gadu',
    'LBL_ENTER_VALID_YEAR' => 'Lūdzu ievadiet derīgu gadu',

    //File write error label
    'ERR_FILE_WRITE' => 'Kļūda: Nevar ierakstīt failā {0}. Lūdzu pārbaudiet sistēmas un tīmekļa servera atļaujas.',
    'ERR_FILE_NOT_FOUND' => 'Kļūda: Nevar ielādēt failu {0}. Lūdzu pārbaudiet sistēmas un tīmekļa servera pieejas tiesības.',

    'LBL_AND' => 'un',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Security',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Šis ir importa faila paraugs, kurš piedāvā piemēru faila saturam, kurš ir gatavs importēšanai." "Faila formāts ir ar paplašinājumu .csv, kurš izmanto dubultās pēdiņas, lauku noteikšanai." "Galvenes rinda ir pirmā rinda failā un satur lauka iezīmes, kā redzams lietojumā." "Šīs iezīmes lieto, kartējot datus no faila uz lietojumprogrammas laukiem." "Piezīmes: Arī datubāzes lauku nosaukumus var lietot galvenes rindā. Tas noder gadījumos, kad tiek lietots phpMyAdmin vai cits datubāzes rīks, lai varētu importēt eksportēto datu sarakstu." "Kolonu secība nav tik nozīmīga, kā importēšanas procesā kur lauki sakrīt balstoties uz galvenes rindu." "Lai lietotu failu kā veidni, veic sekojošas darbības:" "1.Izņemiet parauga datu ierakstus" "2. Izņemiet palīdzības tekstu, kuru šobrīd lasiet" "3. Ievietojiet savus datus paredzētajās rindās un kolonās" "4. Saglabājiet failus savā sistēmā, jums zināmā vietā" "5. Nospiežiet uz importēšanas iespējas, kura atrodas darbību izvēlnē lietojumā, un izvēlieties failu, kuru augšuplādēt"',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_SORT_DESC' => 'Sakārtots dilstošā secībā',
    'LBL_ALT_SORT_ASC' => 'Sakārtots augošā secībā',
    'LBL_ALT_SORT' => 'Kārtot',
    'LBL_ALT_SHOW_OPTIONS' => 'Rādīt opcijas',
    'LBL_ALT_HIDE_OPTIONS' => 'Slēpt opcijas',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Pārvietot atzīmēto ierakstu uz sarakstu kreisajā pusē',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Pārvietot atzīmēto ieraksu uz sarakstu labajā pusē',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Pārvietot izvēlēto ierakstu augšā attēlotajā sarakstā',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Pārvietot izvēlēto ierakstu lejā attēlotajā sarakstā',
    'LBL_ALT_INFO' => 'Informācija',
    'MSG_DUPLICATE' => '{0} ieraksts, kuru vēlies izveidot, iespējams ir dublikāts jau esošam ierakstam {0}. {1} ieraksti ar līdzīgu nosaukumu ir izkārtoti zemāk<br>Klikšķini Izveidot {1} , lai turpinātu veidot šo jauno  {0}, vai klikšķiniet uz esošu {0} izkārtotu zemāk.',
    'MSG_SHOW_DUPLICATES' => '{0} ieraksts, kuru vēlies izveidot, iespējams ir dublikāts jau esošam ierakstam {0}. {1} ieraksti ar līdzīgu nosaukumu ir izkārtoti zemāk.<br>Klikšķini Saglabāt {1} lai turpinātu veidot šo jauno  {0}, vai klikšķini Atcelt, lai atgrieztos modulī neveidojot {0}.',
    'LBL_EMAIL_TITLE' => 'e-pasta adrese',
    'LBL_EMAIL_OPT_TITLE' => 'nederīgās e-pasta adreses',
    'LBL_EMAIL_INV_TITLE' => 'nederīga e-pasta adrese',
    'LBL_EMAIL_PRIM_TITLE' => 'Make Primary Email Address',
    'LBL_SELECT_ALL_TITLE' => 'Izvēlēties visu',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Izvēlēties šo ierakstu',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'KĻŪDA: Kļūda augšupielādes laikā. Kļūdas kods: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'KĻŪDA: Kļūda augšupielādes laikā. Kļūdas kods: {0} - {1}.  upload_maxsize ir {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'KĻŪDA: Kļūda augšupielādes laikā, pēc palīdzības lūdzu griezieties pie administratora.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Ielādes izmērs ({0} baiti) pārsniedz maksimāli atļauto: {1} baitus',
    'UPLOAD_REQUEST_ERROR' => 'Notika kļūda. Atjauniniet laupu un mēģiniet vēlreiz.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Rediģēt',
    'LBL_EDIT_BUTTON_TITLE' => 'Rediģēt',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dublicēt',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dublicēt',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Dzēsts',
    'LBL_DELETE_BUTTON_TITLE' => 'Dzēsts',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Darbība',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Pabeigt',
    'LBL_SAVE_BUTTON_TITLE' => 'Pabeigt',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Atcelt',
    'LBL_CANCEL_BUTTON_TITLE' => 'Atcelt',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'savienotāju masīvs {0} ir nodefinēts nekorekti vai ir tukšs un nevar tikt izmantots.',
    'ERR_SUHOSIN' => 'Suhosin ir bloķējis plūsmas ielādi, suhosin.executor.include.whitelist pievienojiet &quot;upload&quot;(Vairāk informācijas suitecrm.log failā)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Slikta atilde no servera',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Piedāvājums',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Pārdošanas cena',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuāli',
        '5' => 'Ik pēc 5 minūtēm',
        '15' => 'Ik pēc 15 minūtēm',
        '30' => 'Ik pēc 30 minūtēm',
        '60' => 'Ik pēc stundas',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Atgādinājums ir tukšs vai nepareizs.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choose columns',
    'LBL_COLUMN_CHOOSER' => 'Column Chooser',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Save changes',
    'LBL_DISPLAYED' => 'Displayed',
    'LBL_HIDDEN' => 'Slēpts',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'Filtrs',

    'LBL_CATEGORY' => 'Kategorija',
    'LBL_LIST_CATEGORY' => 'Kategorija',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'Stils',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dawn',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Diena',
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
    'LBL_SUITE_TOP' => 'Atpakaļ uz augšu',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Nodrošina SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Atiestatīt paroli',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Bibliotēka';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-pasts';
$app_list_strings['project_priority_default'] = 'Vidēja';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Augsta',
    'Medium' => 'Vidēja',
    'Low' => 'Zema',
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
    'website' => 'Mājas lapa',
    'phone' => 'Phone',
    'given_to_user' => 'Given to User',
    'email' => 'E-pasts',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Zināšanu bāze';

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
    'PORTUGUESE TIMOR' => 'PORTUGUESE TIMOR',
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
    'Atlantic/Cape_Verde' => 'Atlantic/Cape_Verde',
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
    'Africa/Addis_Ababa' => 'Africa/Addis_Ababa',
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
    'Africa/El_Aaiun' => 'Africa/El_Aaiun',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St_Helena',
    'Africa/Sao_Tome' => 'Africa/Sao_Tome',
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar_es_Salaam',
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
    'Asia/Phnom_Penh' => 'Asia/Phnom_Penh',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong_Kong',
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
    'Asia/Kuala_Lumpur' => 'Asia/Kuala_Lumpur',
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
    'Australia/Broken_Hill' => 'Australia/Broken_Hill',
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
    'Pacific/Port_Moresby' => 'Pacific/Port_Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago_Pago',
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
    'America/New_York' => 'America/New_York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/North_Dakota/Center',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America/Los_Angeles',
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
    'America/St_Johns' => 'America/St_Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace_Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder_Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy_River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift_Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson_Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral_Harbour',
    'America/Rankin_Inlet' => 'America/Rankin_Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge_Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Mexico_City',
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
    'America/Costa_Rica' => 'America/Costa_Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo_Domingo',
    'America/El_Salvador' => 'America/El_Salvador',
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
    'America/St_Vincent' => 'America/St_Vincent',
    'America/Grand_Turk' => 'America/Grand_Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St_Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos_Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio_Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La_Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'America/Sao_Paulo',
    'America/Campo_Grande' => 'America/Campo_Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa_Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio_Branco',
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
    'Atlantic/South_Georgia' => 'Atlantic/South_Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port_of_Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'Sugar',
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
    'Google' => 'Google Docs',
);
$app_list_strings['token_status'] = array(
    1 => 'Pieprasīts',
    2 => 'Piekļuve',
    3 => 'nederīgs',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampaņa',
    'email' => 'E-pasts',
    'event' => 'Event',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampaņa',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampaņa',
    'email' => 'E-pasts',
    'event' => 'Event',
    'system' => 'Sistēma',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Zināšanu bāze';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Uzmetums';
$app_list_strings['aok_status_list']['Expired'] = 'Izbeidzies';
$app_list_strings['aok_status_list']['In_Review'] = 'Vērtēšanā';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privāts';
$app_list_strings['aok_status_list']['published_public'] = 'Publisks';

$app_list_strings['moduleList']['FP_events'] = 'Notikumi';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Atrašanās vietas';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Uzaicināts';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nav uzaicināts';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Piedalījās';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nav piedalījies';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Apstiprināts';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Noraidīts';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nav atbildes';

$app_strings['LBL_STATUS_EVENT'] = 'Uzaicinājuma statuss';
$app_strings['LBL_ACCEPT_STATUS'] = 'Apstiprināt statusu';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Atzīmēt šo lapu';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Atzīmēt visu';
$app_strings['LBL_LISTVIEW_NONE'] = 'Neatzīmēt visu';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Indekss';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Pieteikumu UPDATES (?)';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'Slēgts',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Jauns',
        'Open_Assigned' => 'Piešķirts lietotājam',
        'Closed_Closed' => 'Slēgts',
        'Open_Pending Input' => 'Gaida ievadi',
        'Closed_Rejected' => 'Noraidīts',
        'Closed_Duplicate' => 'Dublicēt',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Single user',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Sistēmas noklusējums',
    'singleUser' => 'Single User',
    'roundRobin' => 'Viens-visiem',
    'leastBusy' => 'Mazāk aizņemtajiem',
    'random' => 'Nejaušs',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Atskaites';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Atskaites nosacījumi';
$app_list_strings['moduleList']['AOR_Charts'] = 'Atskaišu diagrammas';
$app_list_strings['moduleList']['AOR_Fields'] = 'Pārskata lauki';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Vienāds ar';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Nav vienāds ar';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Vairāk kā';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mazāk par';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Lielāks vai vienāds ar';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mazāks vai vienāds ar';
$app_list_strings['aor_operator_list']['Contains'] = 'Satur';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Sākas ar';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Beidzas ar';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'y-m-d';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'un';
$app_list_strings['aor_condition_operator_list']['OR'] = 'VAI';
$app_list_strings['aor_condition_type_list']['Value'] = 'Vērtība';
$app_list_strings['aor_condition_type_list']['Field'] = 'Lauks';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Viens no';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minūtes';
$app_list_strings['aor_date_type_list']['hour'] = 'Stundas';
$app_list_strings['aor_date_type_list']['day'] = 'Dienas';
$app_list_strings['aor_date_type_list']['week'] = 'Nedēļas';
$app_list_strings['aor_date_type_list']['month'] = 'Mēneši';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aor_date_options']['now'] = 'Now';
$app_list_strings['aor_date_options']['field'] = 'This Field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Augoši';
$app_list_strings['aor_sort_operator']['DESC'] = 'Dilstoši';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Skaits';
$app_list_strings['aor_function_list']['MIN'] = 'Minimālais';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimālais';
$app_list_strings['aor_function_list']['SUM'] = 'Summa';
$app_list_strings['aor_function_list']['AVG'] = 'Vidēji';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Skaits';
$app_list_strings['aor_total_options']['SUM'] = 'Summa';
$app_list_strings['aor_total_options']['AVG'] = 'Vidēji';
$app_list_strings['aor_chart_types']['bar'] = 'Bar chart';
$app_list_strings['aor_chart_types']['line'] = 'Line chart';
$app_list_strings['aor_chart_types']['pie'] = 'Pie chart';
$app_list_strings['aor_chart_types']['radar'] = 'Radar chart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Katru mēnesi';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Katru nedēļu';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Katru dienu';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktīvs';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Neaktīvs';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-pasts';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Lietotājs';
$app_list_strings['aor_email_type_list']['Users'] = 'Lietotājs';
$app_list_strings['aor_assign_options']['all'] = 'Visi lietotāji';
$app_list_strings['aor_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'Šodien';
$app_list_strings['date_time_period_list']['yesterday'] = 'Vakar';
$app_list_strings['date_time_period_list']['this_week'] = 'Šonedēļ';
$app_list_strings['date_time_period_list']['last_week'] = 'Pēdējā nedēļā';
$app_list_strings['date_time_period_list']['last_month'] = 'Pēdējā mēnesī';
$app_list_strings['date_time_period_list']['this_month'] = 'Šajā mēnesī';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Šajā ceturkšnī';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Pēdējā ceturkšnī';
$app_list_strings['date_time_period_list']['this_year'] = 'Šogad';
$app_list_strings['date_time_period_list']['last_year'] = 'Iepriekšējais gads';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'on the';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Papildus';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Stunda';
$app_strings['LBL_CRON_DAY'] = 'Diena';
$app_strings['LBL_CRON_MONTH'] = 'Mēnesis';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Katru dienu';
$app_strings['LBL_CRON_WEEKLY'] = 'Katru nedēļu';
$app_strings['LBL_CRON_MONTHLY'] = 'Katru mēnesi';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Līgumi';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Rēķini';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkti';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Line Items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Piedāvājumi';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Konsultants';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurents';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Klients';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrators';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investors';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partneris';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Prese';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Potenciāls klients';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Izplatītājs';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Cita nozare';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Uzmetums';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Pārrunu procesā';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Piegādāts';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Pagaidām apturēts';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Apstiprināts';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Aizvērts - akceptēts';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Aizvērts - zaudēts';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Aizvērts - bezcerīgs';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Approved';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Not Approved';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0 %';
$app_list_strings['vat_list']['5.0'] = '5 %';
$app_list_strings['vat_list']['7.5'] = '7,5 %';
$app_list_strings['vat_list']['17.5'] = '17,5 %';
$app_list_strings['vat_list']['20.0'] = '20 %';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Konsultants';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurents';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Klients';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrators';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investors';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partneris';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Prese';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Potenciāls klients';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Izplatītājs';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Cita nozare';
$app_list_strings['invoice_status_dom']['Paid'] = 'Apmaksāts';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Nav apmaksāts';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Atcelts';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Nav piestādīts rēķins';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Invoiced';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Labs';
$app_list_strings['product_type_dom']['Service'] = 'Pakalpojums';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Piedāvājumi';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Rēķini';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Līgumi';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Piedāvājumi';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Rēķini';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Līgumi';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Klienti';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Ielūgtie';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Interesenti';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Not Started';
$app_list_strings['contract_status_list']['In Progress'] = 'Procesā';
$app_list_strings['contract_status_list']['Signed'] = 'Parakstīts';
$app_list_strings['contract_type_list']['Type'] = 'Tips:';
$app_strings['LBL_PRINT_AS_PDF'] = 'Izdrukāt PDF formātā';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Atlasiet veidni';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nVeidne nav atrasta. \nDodiedies uz PDF veidņu moduli un izveidojiet jaunu';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Darbplūsma';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Darbplūsmas nosacījumi';
$app_list_strings['moduleList']['AOW_Processed'] = 'Auditēt';
$app_list_strings['moduleList']['AOW_Actions'] = 'Darbplūsmas darbības';
$app_list_strings['aow_status_list']['Active'] = 'Aktīvs';
$app_list_strings['aow_status_list']['Inactive'] = 'Neaktīvs';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Vienāds ar';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Nav vienāds ar';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Vairāk kā';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mazāk par';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Lielāks vai vienāds ar';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mazāks vai vienāds ar';
$app_list_strings['aow_operator_list']['Contains'] = 'Satur';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Sākas ar';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Beidzas ar';
$app_list_strings['aow_operator_list']['is_null'] = 'ir Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Plotëso';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'Gaidošs';
$app_list_strings['aow_process_status_list']['Failed'] = 'Beidzies ar kļūdu';
$app_list_strings['aow_condition_operator_list']['And'] = 'un';
$app_list_strings['aow_condition_operator_list']['OR'] = 'VAI';
$app_list_strings['aow_condition_type_list']['Value'] = 'Vērtība';
$app_list_strings['aow_condition_type_list']['Field'] = 'Lauks';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Viens no';
$app_list_strings['aow_action_type_list']['Value'] = 'Vērtība';
$app_list_strings['aow_action_type_list']['Field'] = 'Lauks';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Nejaušs';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Vērtība';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Lauks';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minūtes';
$app_list_strings['aow_date_type_list']['hour'] = 'Stundas';
$app_list_strings['aow_date_type_list']['day'] = 'Dienas';
$app_list_strings['aow_date_type_list']['week'] = 'Nedēļas';
$app_list_strings['aow_date_type_list']['month'] = 'Mēneši';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'Šodien';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Visi lietotāji';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-pasts';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Lietotājs';
$app_list_strings['aow_email_type_list']['Users'] = 'Lietotājs';
$app_list_strings['aow_email_to_list']['to'] = 'Uz';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'All Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'New Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modified Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Vienmēr';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['duration_unit_dom']['Days'] = 'Dienas';
$app_list_strings['duration_unit_dom']['Hours'] = 'Stundas';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Ganta skats';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Izveidot projektu';

//gmaps
$app_strings['LBL_MAP'] = 'Karte';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Address';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kartes';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Jūdzes';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometri';

$app_list_strings['map_module_type_list']['Accounts'] = 'Klienti';
$app_list_strings['map_module_type_list']['Contacts'] = 'Ielūgtie';
$app_list_strings['map_module_type_list']['Cases'] = 'Pieteikumi';
$app_list_strings['map_module_type_list']['Leads'] = 'Interesenti';
$app_list_strings['map_module_type_list']['Meetings'] = 'Tikšanās';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Iespējas';
$app_list_strings['map_module_type_list']['Project'] = 'Projekti';
$app_list_strings['map_module_type_list']['Prospects'] = 'Mērķi';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Klients';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontaktpersonas';
$app_list_strings['map_relate_type_list']['Cases'] = 'Pieteikums';
$app_list_strings['map_relate_type_list']['Leads'] = 'Interesents';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Tikšanās';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Iespēja';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekts';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Mērķis';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administrēšana';
$app_list_strings['marker_image_list']['agriculture'] = 'Lauksaimniecība';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Aircraft Small';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Airplane Tourism';
$app_list_strings['marker_image_list']['airport'] = 'Lidosta';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Dzīvoklis';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvārijs';
$app_list_strings['marker_image_list']['arch'] = 'Arka';
$app_list_strings['marker_image_list']['atm'] = 'ATM';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banka';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Beach';
$app_list_strings['marker_image_list']['beautiful'] = 'Beautiful';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bicycle Parking';
$app_list_strings['marker_image_list']['big_city'] = 'Big City';
$app_list_strings['marker_image_list']['bridge'] = 'Tilts';
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
$app_list_strings['marker_image_list']['company'] = 'Uzņēmums:';
$app_list_strings['marker_image_list']['conference'] = 'Konference';
$app_list_strings['marker_image_list']['construction'] = 'Celtniecība';
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
$app_list_strings['marker_image_list']['doctor'] = 'Ārsts';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Down';
$app_list_strings['marker_image_list']['down_left'] = 'Down Left';
$app_list_strings['marker_image_list']['down_right'] = 'Down Right';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Drugs';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Vēstniecība';
$app_list_strings['marker_image_list']['expert'] = 'Eksperts';
$app_list_strings['marker_image_list']['factory'] = 'Rūpnīca';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Krītoši akmeņi';
$app_list_strings['marker_image_list']['fast_food'] = 'Ātrā ēdināšana';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjords';
$app_list_strings['marker_image_list']['forest'] = 'Mežš';
$app_list_strings['marker_image_list']['fountain'] = 'Strūklaka';
$app_list_strings['marker_image_list']['friday'] = 'Piektdiena';
$app_list_strings['marker_image_list']['garden'] = 'Dārzs';
$app_list_strings['marker_image_list']['gas_station'] = 'Degvielas uzpildes stacija';
$app_list_strings['marker_image_list']['geyser'] = 'Geizers';
$app_list_strings['marker_image_list']['gifts'] = 'Dāvanas';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helicopter';
$app_list_strings['marker_image_list']['highway'] = 'Highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historical Quarter';
$app_list_strings['marker_image_list']['home'] = 'Sākums';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Viesnīca';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Viesnīca 1 zvaigzne';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Viesnīca 2 zvaigznes';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Viesnīca 3 zvaigžņu';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Viesnīca 4 zvaigžņu';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Viesnīca 5 zvaigznes';
$app_list_strings['marker_image_list']['info'] = 'Informācija';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Bibliotēka';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'Pirmdiena';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosque';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorcycle';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Music Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Pils';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramic';
$app_list_strings['marker_image_list']['park'] = 'Parks';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park And Ride';
$app_list_strings['marker_image_list']['parking'] = 'Autostāvvieta';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Pikniks';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Places Unvisited';
$app_list_strings['marker_image_list']['places_visited'] = 'Places Visited';
$app_list_strings['marker_image_list']['playground'] = 'Playground';
$app_list_strings['marker_image_list']['police'] = 'Policija';
$app_list_strings['marker_image_list']['port'] = 'Ports';
$app_list_strings['marker_image_list']['postal'] = 'Pasts';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektrostacija';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Public Art';
$app_list_strings['marker_image_list']['rain'] = 'Lietus';
$app_list_strings['marker_image_list']['real_estate'] = 'Real Estate';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restorāns';
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
$app_list_strings['marker_image_list']['saturday'] = 'Sestdiena';
$app_list_strings['marker_image_list']['school'] = 'Skola';
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
$app_list_strings['marker_image_list']['sun'] = 'Sv.';
$app_list_strings['marker_image_list']['sunday'] = 'Svētdiena';
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
$app_list_strings['marker_image_list']['thursday'] = 'Ceturtdiena';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'Otrdiena';
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
$app_list_strings['marker_image_list']['wednesday'] = 'Trešdiena';
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

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Pārplānot';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Please enter the reschedule information';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Datums:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Reason:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Lūdzu, izvēlieties derīgu datumu';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Lūdzu, izvēlieties iemeslu';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Pārplānot';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Call attempt history';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Zvana mēģinājums';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Security Group';
$app_strings['LBL_ROLE'] = 'Loma';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtrs';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tips:';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_EDIT_TAB'] = 'Rediģēt cilnes';
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
    'Tasks' => 'Uzdevumi',
    'Meetings' => 'Tikšanās',
    'Calls' => 'Zvani',
    'Notes' => 'Piezīmes',
    'Emails' => 'E-pasti'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Pārdošana',
    'getAccountsSpotsData' => 'Klienti',
    'getLeadsSpotsData' => 'Interesenti',
    'getServiceSpotsData' => 'Pakalpojums',
    'getMarketingSpotsData' => 'Mārketings',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Darbības',
    'getQuotesSpotsData' => 'Piedāvājumi'
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
$app_list_strings['day_list']['Monday'] = 'Pirmdiena';
$app_list_strings['day_list']['Tuesday'] = 'Otrdiena';
$app_list_strings['day_list']['Wednesday'] = 'Trešdiena';
$app_list_strings['day_list']['Thursday'] = 'Ceturtdiena';
$app_list_strings['day_list']['Friday'] = 'Piektdiena';
$app_list_strings['day_list']['Saturday'] = 'Sestdiena';
$app_list_strings['day_list']['Sunday'] = 'Svētdiena';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portrets';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Ainava';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'Uzmetums';
$app_list_strings['survey_status_list']['Public'] = 'Publisks';
$app_list_strings['survey_status_list']['Closed'] = 'Slēgts';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Date';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Vērtējums';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Pending Confirm opt in, Confirm opt in not sent';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Pending Confirm opt in, Confirm opt in sent';
$app_strings['LBL_OPT_IN'] = 'Opted in';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Nelieto';
$app_strings['LBL_OPT_IN_INVALID'] = 'nederīgs';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Izslēgta',
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
    'minute' => 'minūtes',
    'hour' => 'stundas',
    'day' => 'dienas',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personīgs',
    'shared' => 'Kopīgs',
    'group' => 'Grupa',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Pieslēdzies',
    'failed' => 'Beidzies ar kļūdu',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Procesā',
    'success' => 'Veiksmīgi',
    'warning' => 'Brīdinājums',
    'error' => 'Kļūda',
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
$app_strings['LBL_CLICK_HERE'] = 'Klikšķināt šeit';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Meklēšana';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Meklēšana';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Meklēšana';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Iepriekšējais';
$app_strings['LBL_SEARCH_NEXT'] = 'Saglabāt un turpināt';
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

$app_strings['LBL_KEY'] = 'Atslēga';
$app_strings['LBL_VALUE'] = 'Vērtība';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Paraksts';

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
