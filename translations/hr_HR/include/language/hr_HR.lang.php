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
    'language_pack_name' => 'Hrvatski (Croatia) - hr_HR',
    'moduleList' => array(
        'Home' => 'Početno',
        'ResourceCalendar' => 'Kalendar resursa',
        'Contacts' => 'Contacts',
        'Accounts' => 'Tvrtke',
        'Alerts' => 'Upozorenja',
        'Opportunities' => 'Prilike',
        'Cases' => 'Slučajevi',
        'Notes' => 'Zabilješke',
        'Calls' => 'Pozivi',
        'TemplateSectionLine' => 'Redak sekcije predloška',
        'Calls_Reschedule' => 'Planiranje poziva',
        'Emails' => 'E-pošte',
        'EAPM' => 'EAPM',
        'Meetings' => 'Sastanci',
        'Tasks' => 'Zadaci',
        'Calendar' => 'Kalendar',
        'Leads' => 'Leads',
        'Currencies' => 'Valute',
        'Activities' => 'Aktivnosti',
        'Bugs' => 'Bugovi',
        'Feeds' => 'RSS',
        'iFrames' => 'Moje stranice',
        'TimePeriods' => 'Vremenski periodi',
        'ContractTypes' => 'Tipovi ugovora',
        'Schedulers' => 'Rasporedi',
        'Project' => 'Projects',
        'ProjectTask' => 'Projektni zadaci',
        'Campaigns' => 'Kampanje',
        'CampaignLog' => 'Dnevnik kampanje',
        'Documents' => 'Documents',
        'DocumentRevisions' => 'Revizije dokumenata',
        'Connectors' => 'Spojnice',
        'Roles' => 'Uloge',
        'Notifications' => 'Notifikacije',
        'Sync' => 'Sinhronizacija',
        'CalendarAccount' => 'Calendar Accounts',
        'Users' => 'korisnik',
        'Employees' => 'Zaposlenici',
        'Administration' => 'Administration',
        'ACLRoles' => 'Roles',
        'InboundEmail' => 'Inbound Email Accounts',
        'Releases' => 'Distribucije',
        'Prospects' => 'Ciljevi',
        'Queues' => 'Redovi',
        'EmailMarketing' => 'Email marketing',
        'EmailTemplates' => 'Email - Predlošci',
        'ProspectLists' => 'Ciljevi - Liste',
        'SavedSearch' => 'Spremljena pretraživanja',
        'UpgradeWizard' => 'Čarobnjak za nadogradnju',
        'Trackers' => 'Trackeri',
        'TrackerSessions' => 'Sesije trackera',
        'TrackerQueries' => 'Upiti trackera',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Newsletteri',
        'SugarFeed' => 'SuiteCRM feed',
        'SugarFavorites' => 'SuiteCRM favoriti',

        'OAuthKeys' => 'OAuth potrošački ključevi',
        'OAuthTokens' => 'OAuth tokeni',
        'OAuth2Clients' => 'OAuth Clients',
        'OAuth2Tokens' => 'OAuth Tokens',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Home',
        'Dashboard' => 'Nadzorna ploča',
        'Contacts' => 'Kontakt',
        'Accounts' => 'Tvrtka',
        'Opportunities' => 'Prodajna prilika',
        'Cases' => 'Slučaj',
        'Notes' => 'Bilješka',
        'Calls' => 'Poziv',
        'Emails' => 'e-pošta',
        'EmailTemplates' => 'Predložak e-pošte',
        'Meetings' => 'Sastanak',
        'Tasks' => 'Zadatak',
        'Calendar' => 'Calendar',
        'Leads' => 'Potencijalni klijent',
        'Activities' => 'Aktivnost',
        'History' => 'Povijest',
        'Bugs' => 'Bug',
        'KBDocuments' => 'KBDokument',
        'Feeds' => 'RSS',
        'iFrames' => 'My Sites',
        'TimePeriods' => 'Vremenski period',
        'Project' => 'Projekt',
        'ProjectTask' => 'Projektni zadatak',
        'Prospects' => 'Cilj',
        'Campaigns' => 'Kampanja',
        'Documents' => 'Document',
        'Sync' => 'Sync',
        'Users' => 'User',
        'SugarFavorites' => 'SuiteCRM favoriti',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Da',
        '2' => 'Ne',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analitičar',
        'Competitor' => 'Konkurent',
        'Customer' => 'Kupac',
        'Integrator' => 'Integrator',
        'Investor' => 'Investitor',
        'Partner' => 'Partner',
        'Press' => 'Tisak',
        'Prospect' => 'Potencijalni kupac',
        'Reseller' => 'Preprodavač',
        'Other' => 'Ostalo',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Odjeća',
        'Banking' => 'Bankarstvo',
        'Biotechnology' => 'Biotehnologija',
        'Chemicals' => 'Kemijska industrija',
        'Communications' => 'Komunikacije',
        'Construction' => 'Gradnja',
        'Consulting' => 'Konzalting',
        'Education' => 'Edukacija',
        'Electronics' => 'Elektronika',
        'Energy' => 'Energija',
        'Engineering' => 'Inženjering',
        'Entertainment' => 'Zabava',
        'Environmental' => 'Okoliš',
        'Finance' => 'Financije',
        'Government' => 'Vlada',
        'Healthcare' => 'Zdravstvo',
        'Hospitality' => 'Ugostiteljstvo',
        'Insurance' => 'Osiguranje',
        'Machinery' => 'Strojarstvo',
        'Manufacturing' => 'Proizvodnja',
        'Media' => 'Mediji',
        'Not For Profit' => 'Neprofitno',
        'Recreation' => 'Rekreacija',
        'Retail' => 'Maloprodaja',
        'Shipping' => 'Dostava',
        'Technology' => 'Tehnologija',
        'Telecommunications' => 'Telekomunikacije',
        'Transportation' => 'Prijevoz',
        'Utilities' => 'Komunalne usluge',
        'Other' => 'Ostalo',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Prvi poziv',
        'Existing Customer' => 'Postojeći kupac',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Zaposlenik',
        'Partner' => 'Partner',
        'Public Relations' => 'Odnosi s javnošću',
        'Direct Mail' => 'Direktna e-pošta',
        'Conference' => 'Konferencija',
        'Trade Show' => 'Sajam',
        'Web Site' => 'Web stranica',
        'Word of mouth' => 'Usmena preporuka',
        'Email' => 'Email',
        'Campaign' => 'Campaign',
        'Other' => 'Ostalo',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Existing Business',
        'New Business' => 'New Business',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Prihod',
        'Investment' => 'Investicija',
        'Expected_Revenue' => 'Očekivani prihod',
        'Budget' => 'Budžet',

    ),
    'subpanel_pagination_type' => [
        'pagination' => 'Pagination',
        'load-more' => 'Load More'
    ],
    'listview_pagination_type' => [
        'pagination' => 'Pagination',
        'load-more' => 'Load More'
    ],
    'record_modal_pagination_type' => [
        'pagination' => 'Pagination',
        'load-more' => 'Load More'
    ],
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Poslovni donositelj odluke',
        'Business Evaluator' => 'Poslovni procijenitelj',
        'Technical Decision Maker' => 'Tehnički donositelj odluke',
        'Technical Evaluator' => 'Tehnički procijenitelj',
        'Executive Sponsor' => 'Izvršni sponzor',
        'Influencer' => 'Utjecatelj',
        'Other' => 'Ostalo',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Alternativni kontakt',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Neto 15 dana',
        'Net 30' => 'Neto 30 dana',
    ),
    'sales_stage_default_key' => 'Istraživanje potencijalnog kupca',
    'sales_stage_dom' => array(
        'Prospecting' => 'Istraživanje potencijalnog kupca',
        'Qualification' => 'Kvalifikacija',
        'Needs Analysis' => 'Treba analizu',
        'Value Proposition' => 'Prijedlog vrijednosti',
        'Id. Decision Makers' => 'Identificiranje donositelja odluke',
        'Perception Analysis' => 'Analiza opažanja',
        'Proposal/Price Quote' => 'Prijedlog/ponuda cijene',
        'Negotiation/Review' => 'Pregovor/Recenzija',
        'Closed Won' => 'Zaključeno dobiveno',
        'Closed Lost' => 'Zaključeno izgubljeno',
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
        'Call' => 'Call',
        'Meeting' => 'Meeting',
        'Task' => 'Task',
        'Email' => 'Email',
        'Note' => 'Note',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'G.',
        'Ms.' => 'Gđa.',
        'Mrs.' => 'Gđica.',
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
        60 => '1 minutu prije',
        300 => '5 minuta prije',
        600 => '10 minuta prije',
        900 => '15 minuta prije',
        1800 => '30 minuta prije',
        3600 => '1 sat prije',
        7200 => '2 sata prije',
        10800 => '3 sata prije',
        18000 => '5 sati prije',
        86400 => '1 dan prije',
    ),

    // snooze for alerts
    'snooze_alert_timer' => array(
        60 => 'Snooze for 1 minute',
        300 => 'Snooze for 5 minutes',
        600 => 'Snooze for 10 minutes',
        900 => 'Snooze for 15 minutes',
        1800 => 'Snooze for 30 minutes',
        3600 => 'Snooze for 1 hour',
        7200 => 'Snooze for 2 hours',
        10800 => 'Snooze for 3 hours',
        18000 => 'Snooze for 5 hours',
        86400 => 'Snooze for 1 day',
    ),

    'snooze_alert_timer_simple' => array(
        60 => '1 min',
        300 => '5 mins',
        600 => '10 mins',
        900 => '15 mins',
        1800 => '30 mins',
        3600 => '1 hour',
        7200 => '2 hours',
        10800 => '3 hours',
        18000 => '5 hours',
        86400 => '1 day',
    ),

    'task_priority_default' => 'Medium',
    'task_priority_dom' => array(
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'task_status_default' => 'Nije započet',
    'task_status_dom' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'U tijeku',
        'Completed' => 'Dovršeno',
        'Pending Input' => 'Pending Input',
        'Deferred' => 'Odgođeno',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Održano',
        'Not Held' => 'Nije održano',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Ostalo',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Held',
        'Not Held' => 'Not Held',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Dolazni',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'New',
        'Assigned' => 'Assigned',
        'In Process' => 'U procesu',
        'Converted' => 'Pretvoreni',
        'Recycled' => 'Recikliran',
        'Dead' => 'Mrtav',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'High',
        'P2' => 'Medium',
        'P3' => 'Low',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Regularni korisnik',
        'Administrator' => 'Administrator',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktivan',
        'Inactive' => 'neaktivan',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Email Kod',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktivan',
        'Terminated' => 'Poništen',
        'Leave of Absence' => 'Odsustvo',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'In Progress',
        'Completed' => 'Completed',
        'Pending Input' => 'Pending Input',
        'Deferred' => 'Deferred',
    ),
    'project_task_utilization_options' => array(
        '0' => 'nijedan',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Draft',
        'In Review' => 'U pregledu',
        'Underway' => 'U toku',
        'On_Hold' => 'Na čekanju',
        'Completed' => 'Completed',
    ),
    'project_status_default' => 'Draft',

    'project_duration_units_dom' => array(
        'Days' => 'dana',
        'Hours' => 'sati',
    ),

    'activity_status_type_dom' => array(
        '' => '-Nijedan-',
        'active' => 'Aktivan',
        'inactive' => 'Inactive',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Tvrtke',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Account',
        'Opportunities' => 'Opportunity',
        'Cases' => 'Case',
        'Leads' => 'Lead',
        'Contacts' => 'Kontakt', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Bug',
        'Project' => 'Project',

        'Prospects' => 'Target',
        'ProjectTask' => 'Project Task',

        'Tasks' => 'Task',

        'AOS_Contracts' => 'Ugovor',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Ponuda',
        'AOS_Products' => 'Product',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Account',
        'Contacts' => 'Kontakt',
        'Opportunities' => 'Opportunity',
        'Campaigns' => 'Campaign',
        'Tasks' => 'Task',
        'Emails' => 'Email',

        'Bugs' => 'Bug',
        'Project' => 'Project',
        'ProjectTask' => 'Project Task',
        'Prospects' => 'Target',
        'Cases' => 'Case',
        'Leads' => 'Lead',

        'Meetings' => 'Meeting',
        'Calls' => 'Call',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Product',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Account',
        'Contacts' => 'Kontakt',
        'Tasks' => 'Task',
        'Opportunities' => 'Opportunity',

        'Bugs' => 'Bug',
        'Cases' => 'Case',
        'Leads' => 'Lead',

        'Project' => 'Project',
        'ProjectTask' => 'Project Task',

        'Prospects' => 'Target',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Product',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Ponude',
        'AOS_Invoices' => 'Fakture',
        'AOS_Contracts' => 'Ugovori',
    ),
    'issue_priority_default_key' => 'Medium',
    'issue_priority_dom' => array(
        'Urgent' => 'Hitno',
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepted',
        'Duplicate' => 'Duplicate',
        'Closed' => 'Closed',
        'Out of Date' => 'Out of Date',
        'Invalid' => 'Invalid',
    ),

    'issue_status_default_key' => 'New',
    'issue_status_dom' => array(
        'New' => 'New',
        'Assigned' => 'Assigned',
        'Closed' => 'Closed',
        'Pending' => 'Pending',
        'Rejected' => 'Rejected',
    ),

    'bug_priority_default_key' => 'Medium',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepted',
        'Duplicate' => 'Duplicate',
        'Fixed' => 'Ispravljeno',
        'Out of Date' => 'Out of Date',
        'Invalid' => 'Invalid',
        'Later' => 'Kasnije',
    ),
    'bug_status_default_key' => 'New',
    'bug_status_dom' => array(
        'New' => 'New',
        'Assigned' => 'Assigned',
        'Closed' => 'Closed',
        'Pending' => 'Pending',
        'Rejected' => 'Rejected',
    ),
    'bug_type_default_key' => 'Bug',
    'bug_type_dom' => array(
        'Defect' => 'Defekt',
        'Feature' => 'Svojstvo',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administration',
        'Product' => 'Product',
        'User' => 'User',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Unutarnji',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Email',
    ),

    'file_field_storage_type_dom' => [
        'private-documents' => 'Private Documents',
        'public-documents' => 'Public Documents',
        'archived-documents' => 'Archived Documents',
    ],


    'image_field_storage_type_dom' => [
        'private-images' => 'Private Images',
        'public-images' => 'Public Images',
    ],

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Tvrtke',
        'Activities' => 'Aktivnosti',
        'Bugs' => 'Bugs',
        'Calendar' => 'Calendar',
        'Calls' => 'Calls',
        'Campaigns' => 'Campaigns',
        'Cases' => 'Cases',
        'Contacts' => 'Contacts',
        'Currencies' => 'Currencies',
        'Dashboard' => 'Dashboard',
        'Documents' => 'Documents',
        'Emails' => 'Emails',
        'Feeds' => 'Kanali',
        'Forecasts' => 'Prognoze',
        'Help' => 'Pomoć',
        'Home' => 'Home',
        'Leads' => 'Leads',
        'Meetings' => 'Meetings',
        'Notes' => 'Notes',
        'Opportunities' => 'Opportunities',
        'Outlook Plugin' => 'Outlook priključak',
        'Projects' => 'Projects',
        'Quotes' => 'Quotes',
        'Releases' => 'Releases',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Nadogradnja',
        'Users' => 'Users',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        'Planning' => 'Planiranje',
        'Active' => 'Aktivan',
        'Inactive' => 'Inactive',
        'Complete' => 'Dovršeno',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Teleprodaje',
        'Mail' => 'E-pošta',
        'Email' => 'Email',
        'Print' => 'Ispis',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Televizija',
        'NewsLetter' => 'Bilten',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Tjedno',
        'Monthly' => 'Mjesečno',
        'Quarterly' => 'Kvartalno',
        'Annually' => 'Godišnje',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'Smtp',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Siječanj',
        '2' => 'Veljača',
        '3' => 'Ožujak',
        '4' => 'Travanj',
        '5' => 'Svibanj',
        '6' => 'Lipanj',
        '7' => 'Srpanj',
        '8' => 'Kolovoz',
        '9' => 'Rujan',
        '10' => 'Listopad',
        '11' => 'Studeni',
        '12' => 'Prosinac',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Siječanj',
        '2' => 'Veljača',
        '3' => 'Ožujak',
        '4' => 'Travanj',
        '5' => 'May',
        '6' => 'Lipanj',
        '7' => 'Srpanj',
        '8' => 'Kolovoz',
        '9' => 'Rujan',
        '10' => 'Listopad',
        '11' => 'Studeni',
        '12' => 'Prosinac',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Nedjelja',
        '2' => 'Ponedjeljak',
        '3' => 'Utorak',
        '4' => 'Srijeda',
        '5' => 'Četvrtak',
        '6' => 'Petak',
        '7' => 'Subota',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Sunce',
        '2' => 'Pon',
        '3' => 'Uto',
        '4' => 'Sri',
        '5' => 'Čet',
        '6' => 'Pet',
        '7' => 'Sub',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'prijepodne',
        'pm' => 'popodne',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'prijepodne',
        'PM' => 'popodne',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Osobno',
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
        'personal' => 'Personal',
        'group' => 'Group',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personal',
        'group' => 'Group',
    ],

    'dom_manual_migration_tasks_types' => [
        'background' => 'Background Process',
        'immediate' => 'Immediate',
    ],

    'dom_manual_migration_tasks_statuses' => [
        'initial' => 'Initial',
        'pending' => 'Pending',
        'running' => 'Running',
        'failed' => 'Failed',
        'completed_with_failures' => 'Completed With Failures',
        'completed' => 'Completed'
    ],

    'dom_processes_types' => [
        'background' => 'Background Process',
        'immediate' => 'Immediate',
    ],

    'dom_processes_statuses' => [
        'initial' => 'Initial',
        'pending' => 'Pending',
        'running' => 'Running',
        'failed' => 'Failed',
        'completed_with_failures' => 'Completed With Failures',
        'completed' => 'Completed'
    ],

    'dom_async_task_phases' => [
        '' => '',
        'queueing' => 'Queueing',
        'processing' => 'Processing',
        'finalizing' => 'Finalizing',
        'completed' => 'Completed',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personal',
        'group' => 'Group',
        'system' => 'Sustav',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktivan',
        'Inactive' => 'Inactive',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Poslano',
        'archived' => 'Arhivirano',
        'draft' => 'Draft',
        'inbound' => 'Inbound',
        'campaign' => 'Campaign',
    ),
    'dom_email_status' => array(
        'archived' => 'Archived',
        'closed' => 'Closed',
        'draft' => 'Skica',
        'read' => 'Pročitano',
        'replied' => 'Odgovoreno',
        'sent' => 'Sent',
        'send_error' => 'Greška slanja',
        'unread' => 'Nepročitano',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archived',
    ),

    'dom_email_server_type' => array(
        '' => '--None--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--None--',
        'createcase' => 'Kreiraj slučaj',
        'bounce' => 'Odskočno upravljanje',
    ),
    'dom_email_distribution' => array(
        '' => '--None--',
        'direct' => 'Direktno dodijeljivanje',
        'roundRobin' => 'Razigravanje',
        'leastBusy' => 'Najmanje zauzeto',
    ),
    'dom_email_errors' => array(
        1 => 'Odaberite samo jednog korisnika kod direktno dodjeljivih objekata.',
        2 => 'Odaberite samo označene objekte kod direktnog dodjeljivanja.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Yes',
        'bool_false' => 'No',
    ),
    'dom_int_bool' => array(
        1 => 'Yes',
        0 => 'No',
    ),
    'dom_int_bool_string' => array(
        '1' => 'Yes',
        '0' => 'No',
    ),
    'dom_switch_bool' => array(
        'on' => 'Yes',
        'off' => 'No',
        '' => 'No',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM E-mail klijent',
        'mailto' => 'Vanjski email klijent',
    ),

    'dom_editor_type' => array(
        'none' => 'Direktni HTML',
        'tinymce' => 'Tiny MCE',
    ),

    'dom_email_editor_option' => array(
        '' => 'Zadani format e-pošte',
        'html' => 'HTML E-mail',
        'plain' => 'Jednostavni tekst Email',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Prošlo vrijeme izvođenja, nije izvršeno',
        'ready' => 'Spremno',
        'in progress' => 'In Progress',
        'failed' => 'Neuspjelo',
        'completed' => 'Completed',
        'no curl' => 'Nije pokrenuto: cURL nedostupan',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktivan',
        'Inactive' => 'Inactive',
    ),

    'scheduler_period_dom' => array(
        'min' => 'minuta',
        'hour' => 'Hours',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Knowledge Base',
        'Sales' => 'Sales',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archived',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketing Collateral',
        'Product Brochures' => 'Product Brochures',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktivan',
        'Draft' => 'Draft',
        'FAQ' => 'FAQ',
        'Expired' => 'Expired',
        'Under Review' => 'Under Review',
        'Pending' => 'Pending',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Spajanje e-pošte',
        'eula' => 'LICENCNI UGOVOR',
        'nda' => 'NDA',
        'license' => 'Ugovor o licenci',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Prihvati',
        'decline' => 'Odbaci',
        'tentative' => 'Privremeni',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accepted',
        'decline' => 'Odbijeno',
        'tentative' => 'Tentative',
        'none' => 'Nijedan',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'None',
        'Daily' => 'dnevno',
        'Weekly' => 'Weekly',
        'Monthly' => 'Monthly',
        'Yearly' => 'Godišnje',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dan(a)',
        'Weekly' => 'tjedan(a)',
        'Monthly' => 'mjesec(i)',
        'Yearly' => 'godina(e)',
    ),

    'duration_dom' => array(
        '' => 'None',
        '900' => '15 minuta',
        '1800' => '30 minuta',
        '2700' => '45 minuta',
        '3600' => '1 sat',
        '5400' => '1.5 sati',
        '7200' => '2 sata',
        '10800' => '3 sata',
        '21600' => '6 sati',
        '86400' => '1 dan',
        '172800' => '2 dana',
        '259200' => '3 dana',
        '604800' => '1 tjedan',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Zadano',
        'seed' => 'Seed',
        'exempt_domain' => 'Lista suzbijanja - prema domeni',
        'exempt_address' => 'Lista suzbijanja - prema adresi e-pošte',
        'exempt' => 'Lista suzbijanja - prema Id',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktivan',
        'draft' => 'Draft',
        'scheduled' => 'Scheduled',
        'pending_send' => 'Pending Send',
        'aborted' => 'Aborted',
        'sending' => 'Sending',
        'sent' => 'Sent',
        'paused' => 'Paused',
    ),
    'email_marketing_duplicate_dom' => [
        'email' => 'Prevent sending to duplicate records and email addresses',
        'record' => 'Prevent sending to duplicate records',
    ],
    'email_marketing_queueing_status_dom' => array(
        'not_started' => 'Not Started',
        'in_progress' => 'In Progress',
        'finished' => 'Finished',
    ),
    'email_marketing_type_dom' => array(
        'legacy' => 'Legacy',
        'marketing' => 'Marketing',
        'survey' => 'Survey',
        'transactional' => 'Transactional',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Sent/Attempted',
        'send error' => 'Vraćene poruke,Ostalo',
        'invalid email' => 'Vraćene poruke,Pogrešan Email',
        'link' => 'Klikni-kroz poveznica',
        'viewed' => 'Pregledana poruka',
        'removed' => 'Odjavljeno',
        'lead' => 'Kreirani potencijalni klijenti',
        'contact' => 'Kreirani kontakti',
        'blocked' => 'Suzbijeno prema adresi e-pošte ili domeni',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contacts',
        'Users' => 'Users',
        'Prospects' => 'Targets',
        'Leads' => 'Leads',
        'Accounts' => 'Tvrtke',
    ),
    'merge_operators_dom' => array(
        'like' => 'Sadrži',
        'exact' => 'Točno',
        'start' => 'Počinje sa',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Yes',
        'false' => 'No',
        'required' => 'Potrebno',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Onemogućeno',
        1 => 'Omogućeno',
        2 => 'Pretraživanje',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'High',
        'medium' => 'Medium',
        'low' => 'Low',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Not Started',
        'inprogress' => 'In Progress',
        'completed' => 'Completed',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Proširi legendu',
        'collapselegend' => 'Sažmi legendu',
        'clickfordrilldown' => 'Klikni da bi istražio',
        'detailview' => 'Više detalja...',
        'piechart' => 'Pita grafikon',
        'groupchart' => 'Grupni grafikon',
        'stackedchart' => 'Nagomilani grafikon',
        'barchart' => 'Stupčasti grafikon',
        'horizontalbarchart' => 'Horizontalni grafikon',
        'linechart' => 'Linijski grafikon',
        'noData' => 'Podatci nedostupni',
        'print' => 'Print',
        'pieWedgeName' => 'sekcije',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktivan',
        'Inactive' => 'Inactive',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Jednostruki navod (&#39;)',
        '"' => 'Dvostruki navod (&#34;)',
        '' => 'None',
        'other' => 'Ostalo:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Other:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Novi prozor',
        '_self' => 'Isti prozor',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Nemoj automatski osvježiti',
        '30' => 'Svakih 30 sekundi',
        '60' => 'Svaku 1 minutu',
        '180' => 'Svake 3 minute',
        '300' => 'Svakih 5 minuta',
        '600' => 'Svakih 10 minuta',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Nikad',
        '30' => 'Every 30 seconds',
        '60' => 'Every 1 minute',
        '180' => 'Every 3 minutes',
        '300' => 'Every 5 minutes',
        '600' => 'Every 10 minutes',
    ),
    'date_range_search_dom' => array(
        '=' => 'Jednako',
        'not_equal' => 'Ne na',
        'greater_than' => 'Poslije',
        'less_than' => 'Prije',
        'last_7_days' => 'Zadnjih 7 dana',
        'next_7_days' => 'Sljedećih 7 dana',
        'last_30_days' => 'Zadnjih 30 dana',
        'next_30_days' => 'Sljedećih 30 dana',
        'last_month' => 'Prošli mjesec',
        'this_month' => 'Ovaj mejsec',
        'next_month' => 'Sljedeći mjesec',
        'last_year' => 'Prošle godine',
        'this_year' => 'Ove godine',
        'next_year' => 'Sljedeće godine',
        'between' => 'je između',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Equals',
        'not_equal' => 'Nije jednako',
        'greater_than' => 'veće od',
        'greater_than_equals' => 'veće od ili jednako',
        'less_than' => 'manje od',
        'less_than_equals' => 'manje od ili jednako',
        'between' => 'Is Between',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopiraj',
        'move' => 'Premjesti',
        'donothing' => 'Ne uradi ništa',
    ),
);

$app_strings = array(
    'LBL_SEARCH_RESULTS_TITLE' => 'Rezultati',
    'ERR_SEARCH_INVALID_QUERY' => 'Prilikom pretraživanja došlo je do pogreške. Vaša sintaksa upita možda nije valjana.',
    'ERR_SEARCH_NO_RESULTS' => 'Nema rezultata koji odgovaraju kriterijima pretraživanja. Pokušajte proširiti svoje pretraživanje.',
    'LBL_SEARCH_PERFORMED_IN' => 'Pretraživanje je izvršeno u',
    'LBL_EMAIL_CODE' => 'E-mail kod:',
    'LBL_SEND' => 'Pošalji',
    'LBL_SEND_BUTTON_TITLE' => 'Send',
    'LBL_LOGOUT' => 'Odjavi se',
    'LBL_LOGOUT_SUCCESS' => 'Logout Success',
    'LBL_LOGGED_OUT_MESSAGE' => 'You have been logged out',
    'LBL_LOGIN_AGAIN' => 'To login again ',
    'LBL_TOUR_NEXT' => 'Sljedeće',
    'LBL_TOUR_SKIP' => 'Preskoči',
    'LBL_TOUR_BACK' => 'Natrag',
    'LBL_TOUR_TAKE_TOUR' => 'Započnite obilazak',
    'LBL_MOREDETAIL' => 'Više detalja', /*for 508 compliance fix*/
    'LBL_EDIT_INLINE' => 'Uređivanje u liniji', /*for 508 compliance fix*/
    'LBL_VIEW_INLINE' => 'View', /*for 508 compliance fix*/
    'LBL_BASIC_SEARCH' => 'Filter', /*for 508 compliance fix*/
    'LBL_Blank' => ' ', /*for 508 compliance fix*/
    'LBL_ID_FF_ADD' => 'Dodaj', /*for 508 compliance fix*/
    'LBL_ID_FF_ADD_EMAIL' => 'Dodaj adresu E-pošte', /*for 508 compliance fix*/
    'LBL_HIDE_SHOW' => 'Sakrij/Prikaži', /*for 508 compliance fix*/
    'LBL_DELETE_INLINE' => 'Izbriši', /*for 508 compliance fix*/
    'LBL_ID_FF_CLEAR' => 'Očisti', /*for 508 compliance fix*/
    'LBL_ID_FF_VCARD' => 'vCard', /*for 508 compliance fix*/
    'LBL_ID_FF_REMOVE' => 'Remove', /*for 508 compliance fix*/
    'LBL_ID_FF_REMOVE_EMAIL' => 'Uklonite adresu e-pošte', /*for 508 compliance fix*/
    'LBL_ID_FF_OPT_OUT' => 'Isključivanje',
    'LBL_ID_FF_INVALID' => 'Nije valjana',
    'LBL_ADD' => 'Add', /*for 508 compliance fix*/
    'LBL_COMPANY_LOGO' => 'Logo kompanije', /*for 508 compliance fix*/
    'LBL_CONNECTORS_POPUPS' => 'Iskočni prozori priključnika',
    'LBL_CLOSEINLINE' => 'Zatvori',
    'LBL_VIEWINLINE' => 'View',
    'LBL_INFOINLINE' => 'Informacije',
    'LBL_PRINT' => 'Print',
    'LBL_HELP' => 'Help',
    'LBL_ID_FF_SELECT' => 'Odaberi',
    'DEFAULT' => 'Osnovno',
    'LBL_SORT' => 'Sortiraj',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Omogući SMTP iznad SSL ili TLS?',
    'LBL_NO_ACTION' => 'Ne postoji akcija pod tim imenom: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Nema dostupnih akcija.',
    'LBL_NO_DATA' => 'Nema podatka',

    'LBL_ROUTING_FLAGGED' => 'podešavanje zastavice',
    'LBL_ROUTING_TO' => 'prema',
    'LBL_ROUTING_TO_ADDRESS' => 'prema adresi',
    'LBL_ROUTING_WITH_TEMPLATE' => 'sa predloškom',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ovaj zapis trenutno sadrži vrijednosti u poljima Uredski telefoni i Adrese. Kako bi zapisali preko tih vrijednosti sa sljedećim Uredski telefoni i Adrese od Tvrtke koju ste odabrali, kliknite "OK". Za zadržati trenutne vrijednosti, kliknite "Odustani".',
    'LBL_DROP_HERE' => '[Odbaci ovdje]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Predpuni Gmail&#153; Zadano',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Name',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Svojstva odlaznog mail servera',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP lozinka',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP server',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP korisničko ime',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Zadano',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Upozorenje: Nedostaje korisničko ime i lozinka za račun odlazne e-pošte.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Postavite račun e-pošte za pregledavanje dolaznih e-pošta od vaših računa e-pošte.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Pružite informacije SMTP servera e-pošte za korištenje odlaznih e-pošti u računu e-pošte.',
    'ERR_TIMEOUT' => "Forced failure on timeout",
    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Učinjeno',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Clear',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Prema:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Skrivena kopija:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Prema/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email Address',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Name',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Adrese nisu pronađene',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Spremi i dodaj u adresar',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Odaberi primatelje e-pošte',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresar',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Upozorenje! Odlazni račun koji pokušavati izbrisati povezan je sa postojećim dolaznim računom. Jesti li sigurni želite li nastaviti?',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMAIL' => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Email Address',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Potvrdili ste korištenje vaše e-adrese: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Nije moguće potvrditi adresu e-pošte',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Uvezi u SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Dodjela',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Prilijepi',
    'LBL_EMAIL_ATTACHMENT' => 'Attach',
    'LBL_EMAIL_ATTACHMENTS' => 'Od lokalnog sustava',
    'LBL_EMAIL_ATTACHMENTS2' => 'Iz SuiteCRM dokumenata',
    'LBL_EMAIL_ATTACHMENTS3' => 'Predlošci privitaka',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Datoteka',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_BCC' => 'SKRIVENA KOPIJA',
    'LBL_EMAIL_CANCEL' => 'Odustani',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Skup znakova',
    'LBL_EMAIL_CHECK' => 'Provjeri e-poštu',
    'LBL_EMAIL_CHECKING_NEW' => 'Provjeravanje nove e-pošte',
    'LBL_EMAIL_CHECKING_DESC' => 'Trenutak molim.. <br><br>Ako je ovo prvo provjeravanje e-pošte za ovaj račun, može potrajati neko vrijeme.',
    'LBL_EMAIL_CLOSE' => 'Zatvori',
    'LBL_EMAIL_COFFEE_BREAK' => 'Provjeravanje voe e-pošte. <br><br>Kod velikih računa e-pošte to može potrajati veći dio vremena.',

    'LBL_EMAIL_COMPOSE' => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Molim unesite primatelja(e) za ovu e-poštu.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Tijelo ove e-pošte je prazno. Poslati svejedno?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Ova e-pošta nema subjekt. Poslati svejedno?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(bez subjekta)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Molim unesite ispravnu adresu e-pošte za Prema, CC i BCC polja',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Odbaci ovu e-poštu?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Jeste li sigurni želite li izbrisati ovaj potpis?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Mail poslan',

    'LBL_EMAIL_CREATE_NEW' => '--Kreiraj na Spremi--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Višestruko',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Isprazni',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Datum slanja prema pošiljatelju',
    'LBL_EMAIL_DATE_TODAY' => 'Danas',
    'LBL_EMAIL_DELETE' => 'Delete',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Izbriši odabrane poruke?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-pošta uspješno izbrisana.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Brisanje poruke',
    'LBL_EMAIL_DETAILS' => 'Detalji',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Samo će se primarna adresa koristiti u radu s kontaktima.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Pražnjenje smeća',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Brisanje odlaznog servera',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Čišćenje datoteka predmemorije',
    'LBL_EMAIL_EMPTY_MSG' => 'Nema e-poruka za prikaz.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nema adrese e-pošte za prikaz.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Naziv mape mora biti jedinstven i ne smije biti prazan. Molimo pokušajte ponovo.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Mapu nije moguće obrisati. Mapa ili njezin sadržaj ima poštu ili sandučić koji je povezan s njim.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Iz konteksta nije moguće odrediti namijenjenu mapu. Pokušajte ponovno.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Molimo provjerite vaše postavke.',
    'LBL_EMAIL_ERROR_DESC' => 'Otkrivene su greške:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nemate pristup ovom području. Kontaktirajte vašeg administratora stranice za dobivanje pristupa.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM ime mape mora biti jedinstveno.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Unesite kriterij za pretraživanje.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Pojavila se greška',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Poruka uklonjena sa Servera',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Poruka je ili uklonjena sa servera ili premještena u drugu mapu',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Veza prema serveru e-pošte nije uspjela. Molimo kontaktirajte vašeg Administratora',
    'LBL_EMAIL_ERROR_MOVE' => 'Premještanje e-pošte između servera i/ili računa e-pošte nije podržano u ovome trenutku.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Greška pri premještanju',
    'LBL_EMAIL_ERROR_NAME' => 'Ime je obavezno.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Polje Od Adrese je obavezno. Molimo unesti ispravnu adresu e-pošte.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Molimo navedite datoteku.',
    'LBL_EMAIL_ERROR_SERVER' => 'Ime servera e-pošte je obavezno.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Račun e-pošte možda nije spremljen.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Dogodila se greška pri komuniciranju sa serverom e-pošte.',
    'LBL_EMAIL_ERROR_USER' => 'Ime za prijavu je obavezno.',
    'LBL_EMAIL_ERROR_PORT' => 'Port servera e-pošte je obavezan.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protokol servera je obavezan.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Monitored mapa je obavezna.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Trash mapa je obavezna.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ova informacija nije dostupna',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nije definiran server za izlaznu e-poštu.',
    'LBL_EMAIL_ERROR_SENDING' => 'Pogreška slanja e-pošte. Obratite se administratoru za pomoć.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '') . 'Mape',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Add',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Dodaj novu Mapu',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Preimenuj Mapu',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Spremi',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Dodaj ovu mapu u',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ova mapa ne može biti promijenjena',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Jeste li sigurni da želite obrisati ovu mapu?\n Ovaj proces se ne može poništiti.\n Brisanje mape uključuje i brisanje svih mapa unutar iste.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Novo Ime Mape',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Molimo odaberite mapu za izvođenje ove akcije.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Upravljanje Mapama',

    'LBL_EMAIL_FORWARD' => 'Proslijedi',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Preuzeto [[count]] of [[total]] e-pošte.',
    'LBL_EMAIL_FROM' => 'Od',
    'LBL_EMAIL_GROUP' => 'grupa',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Group',
    'LBL_EMAIL_HOME_FOLDER' => 'Home',
    'LBL_EMAIL_IE_DELETE' => 'Brisanje računa e-pošte',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Brisanje potpisa',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Jeste li sigurni želite li izbrisati ovaj račun e-pošte?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Uspješno izbrisano.',
    'LBL_EMAIL_IE_SAVE' => 'Spremanje informacija računa e-pošte.',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Uvoz e-pošte',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Uvezi u SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Uvoz postavki',
    'LBL_EMAIL_INVALID' => 'Invalid',
    'LBL_EMAIL_LOADING' => 'Učitavanje ......',
    'LBL_EMAIL_MARK' => 'Obilježi',
    'LBL_EMAIL_MARK_FLAGGED' => 'kao označeno',
    'LBL_EMAIL_MARK_READ' => 'kao pročitano',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'kao neoznačeno',
    'LBL_EMAIL_MARK_UNREAD' => 'kao nepročitano',
    'LBL_EMAIL_ASSIGN_TO' => 'Dodijeli',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Kreiraj mapu',
    'LBL_EMAIL_MENU_COMPOSE' => 'Sastavi za',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Izbriši mapu',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Isprazni smeće',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinhroniziraj',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Isprazni datoteke predmemorije',
    'LBL_EMAIL_MENU_REMOVE' => 'Remove',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Rename Folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Preimenovanje mape',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Molim učinite odabir prije obavljanja ove operacije.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Kreiranje mape (daljinski ili u SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Obriši folder (na udaljenoj lokaciji ili u SuiteCRM-u)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Prazni sve mape smeća za sve Vaše račune e-pošte',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Obilježi ovaj e-mail(ove) pročitanima',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Obilježi ovaj e-mail(ove) neoznačenima.',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Preimenuj folder (na udaljenoj lokaciji ili u SuiteCRM-u)',

    'LBL_EMAIL_MESSAGES' => 'poruke',

    'LBL_EMAIL_ML_NAME' => 'Ime liste',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Odabrane liste adresa',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Dostupne liste adresa',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Klik</b> za odabrati višestruko<br />(Mac korisnici koriste <b>CMD-Klik</b>)',

    'LBL_EMAIL_NO' => 'No',
    'LBL_EMAIL_NOT_SENT' => 'Sustav ne može procesuirati Vaš zahtjev. Molim kontaktirajte sistem administratora.',

    'LBL_EMAIL_OK' => 'U redu',
    'LBL_EMAIL_ONE_MOMENT' => 'Trenutak molim...',
    'LBL_EMAIL_OPEN_ALL' => 'Otvori višestruke poruke',
    'LBL_EMAIL_OPTIONS' => 'Opcije',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Brzo sastavljanje',
    'LBL_EMAIL_OPT_OUT' => 'Opted Out',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Odjavljeno i pogrešno',
    'LBL_EMAIL_PERFORMING_TASK' => 'Obavljanje zadatka',
    'LBL_EMAIL_PRIMARY' => 'Primarno',
    'LBL_EMAIL_PRINT' => 'Print',

    'LBL_EMAIL_QC_BUGS' => 'Bug',
    'LBL_EMAIL_QC_CASES' => 'Case',
    'LBL_EMAIL_QC_LEADS' => 'Lead',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
    'LBL_EMAIL_QC_TASKS' => 'Task',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Opportunity',
    'LBL_EMAIL_QUICK_CREATE' => 'Brzo kreiranje',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Obnavljanje mapa',
    'LBL_EMAIL_RELATE_TO' => 'Poveži',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Pregledaj veze',
    'LBL_EMAIL_RECORD' => 'Zapis e-pošte',
    'LBL_EMAIL_REMOVE' => 'Remove',
    'LBL_EMAIL_REPLY' => 'Odgovori',
    'LBL_EMAIL_REPLY_ALL' => 'Odgovori svima',
    'LBL_EMAIL_REPLY_TO' => 'Odgovori prema',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Zaprimanje poruke',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Zaprimanje zapisa e-pošte',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Molim odaberite samo jedan zapis e-pošte',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Povratak na prethodni modul?',
    'LBL_EMAIL_REVERT' => 'Vrati',
    'LBL_EMAIL_RELATE_EMAIL' => 'Poveži e-poštu',

    'LBL_EMAIL_RULES_TITLE' => 'Upravljanje pravilima',

    'LBL_EMAIL_SAVE' => 'Save',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Spremi i odgovori',
    'LBL_EMAIL_SAVE_DRAFT' => 'Spremi skicu',
    'LBL_EMAIL_DRAFT_SAVED' => 'Draft has been saved.',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Datum Od',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Datum Dok',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nema rezultata koji se podudaraju sa Vašim kriterijima pretraživanja.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Pretraga rezultata',

    'LBL_EMAIL_SELECT' => 'Select',

    'LBL_EMAIL_SEND' => 'Send',
    'LBL_EMAIL_SENDING_EMAIL' => 'Slanje e-pošte',

    'LBL_EMAIL_SETTINGS' => 'Postavke',
    'LBL_EMAIL_SETTINGS_TITLE' => 'Email Settings',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Računi e-pošte',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Očisti obrazac',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Provjeri novu e-poštu',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Od adrese',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresa e-pošte za test notifikacije:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Od imena',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Odgovori Adresa e-pošte',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinhroniziraj sve račune e-pošte',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Pošta je poslana na navedenu e-mail adresu koristeći navedene postavke izlazne e-pošte. Molimo vas provjerite ako je e-mail primljen da bi potvrdili da su postavke ispravne.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Pogledajte cijeli SMTP dnevnik',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Izvršiti punu sinhronizaciju?\nVeliki računi e-pošte mogu potrajati nekoliko minuta.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Kliknite Shift tipku ili Ctrl tipku za odabrati više mapa.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Općenito',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Kreiraj grupne mape',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Uredi grupnu mapu',

    'LBL_EMAIL_SETTINGS_NAME' => 'Naziv računa e-pošte',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Odaberite broj e-pošte po stranici u pretincu. Ova postavka može zahtjevati osvježavanje stranice kako bi se aktivirala.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Dohvaćanje računa e-pošte',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Postavke su spremljene.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Šalji samo e-poštu s običnim tekstom',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'E-pošte po stranici',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Vizualne postavke',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Postavke',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dostupne korisničke mape',
    'LBL_EMAIL_ERROR_PREPEND' => 'Došlo je do pogreške u e-pošti:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Server odlazne e-pošte odabran za račun e-pošte koji koristite je pogrešan. Provjerite postavke ili odaberite drugi server za račun e-pošte.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Server odlazne pošte nije podešen za slanje e-pošte. Molim konfigurirajte server odlazne e-pošte ili odaberite server odlazne pošte za račun e-pošte koji koristite u Postavke >> Račun e-pošte.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Zadani potpis',
    'LBL_EMAIL_SIGNATURES' => 'Potpisi',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ostalo',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Daljinske mape ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM mape',
    'LBL_EMAIL_SUBJECT' => 'Subjekt',
    'LBL_EMAIL_SUCCESS' => 'Uspjeh',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM mape',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Tijelo predloška e-pošte je prazno',
    'LBL_EMAIL_TEMPLATES' => 'Predlošci',
    'LBL_EMAIL_TO' => 'Prema',
    'LBL_EMAIL_VIEW' => 'View',
    'LBL_EMAIL_VIEW_HEADERS' => 'Prikaži zaglavlja',
    'LBL_EMAIL_VIEW_RAW' => 'Prikaži izvorni Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ovo svojstvo nije podržano kada se koristi sa POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Zadani tekst poveznice.',
    'LBL_EMAIL_YES' => 'Yes',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Pošalji testnu e-poštu',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testna e-pošta poslana',
    'LBL_EMAIL_MESSAGE_NO' => 'Poruka br.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Uvoz prošao',
    'LBL_EMAIL_IMPORT_FAIL' => 'Uvoz neuspješan jer je poruka već uvezena ili izbrisana sa servera',

    'LBL_LINK_NONE' => 'None',
    'LBL_LINK_ALL' => 'Sve',
    'LBL_LINK_RECORDS' => 'Zapisi',
    'LBL_LINK_SELECT' => 'Select',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Potvrdi',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Želite li zatvoriti ovaj #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Pogrešna ekstenzija datoteke',

    'ERR_AJAX_LOAD' => 'Pojavila se greška:',
    'ERR_AJAX_LOAD_FAILURE' => 'Pojavila se greška kod procesuiranja Vašeg zahtjeva, molim pokušajte ponovo kasnije.',
    'ERR_AJAX_LOAD_FOOTER' => 'Ako se greška ponavlja, neka Vaš administrator onemogući Ajax za ovaj modul',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Odvajatelj decimala ne može koristiti isti znak kao i odvajatelj tisućica.\\n\\n Molim promijenite vrijednosti.',
    'ERR_DELETE_RECORD' => 'Broj zapisa mora biti označen kako bi se izbrisao kontakt.',
    'ERR_EXPORT_DISABLED' => 'Izvoz onemogućen.',
    'ERR_EXPORT_TYPE' => 'Greška izvoza',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nije važeća adresa e-pošte.',
    'ERR_INVALID_FILE_REFERENCE' => 'Pogrešna referenca datoteke',
    'ERR_NO_HEADER_ID' => 'Ovo svojstvo je nedostupni u ovoj temi.',
    'ERR_NOT_ADMIN' => 'Neautorizirani pristup administraciji.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS' => 'You are not authorized to view this page. Please contact your system administrator.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS_TO_HOME_PAGE' => 'You are not authorized to view this page. Redirecting to Home Page...',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Nedostaje potrebno polje:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Pogrešno potrebno polje:',
    'ERR_INVALID_VALUE' => 'Pogrešna vrijednost:',
    'ERR_NO_SUCH_FILE' => 'Datoteka ne postoji u sustavu',
    'ERR_NO_SINGLE_QUOTE' => 'Ne može se koristiti jednostruki citat za',
    'ERR_NOTHING_SELECTED' => 'Molim učinite odabir prije nastavka.',
    'ERR_SELF_REPORTING' => 'Korisnik ne može izvještavati samom ili samoj sebi.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nema podudaranja za polje:',
    'ERR_SQS_NO_MATCH' => 'Nema podudaranja',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Navedite indeks "ključ" u atributu displayParams za definiciju Meta-podataka',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Greška: Ime portala je već dodijeljeno drugom kontaktu.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Vrijednost polja nije kompatibilna sa vrijednošću preciznosti.',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Dogodila se pogreška pri pokušaju spremanja na vanjski račun.',
    'ERR_NO_DB' => 'Ne moze se povezati s bazom podataka. Molimo pogledajte suitecrm.log za detalje.',
    'ERR_DB_FAIL' => 'Greška sa bazom podataka. Molimo Vas da pogledate suitecrm.log za detalje.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} fajlovi mogu biti korišćeni samo sa SuiteCRM {1} bazom podataka.',

    'LBL_ACCOUNT' => 'Account',
    'LBL_ACCOUNTS' => 'Tvrtke',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Pregledaj rezime',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'View Summary',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_DOCUMENT' => 'Dodaj dokument',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj na Listu Ciljeva',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Dodaj Kontakt na listu Ciljeva',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikni za zatvoriti',
    'LBL_ADDITIONAL_DETAILS' => 'Dodatni detalji',
    'LBL_ADMIN' => 'Administrator',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arhiviraj',
    'LBL_ASSIGNED_TO_USER' => 'Dodijeljeno korisniku',
    'LBL_ASSIGNED_TO' => 'Assigned to:',
    'LBL_BACK' => 'Back',
    'LBL_BILLING_ADDRESS' => 'Adresa za naplatu',
    'LBL_QUICK_CREATE' => 'Napravi ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Komercijalni CRM Otvorenog Koda',
    'LBL_BUGS' => 'Bugs',
    'LBL_BY' => 'od',
    'LBL_CALLS' => 'Calls',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Pošalji kampanjsku e-poštu na čekanju',
    'LBL_CAMPAIGNS_SEND_NEXT_BATCH' => 'Send Next Batch of Queued Emails',
    'LBL_SENT_NEXT_BATCH' => 'Batch sent successfully',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Pošalji',
    'LBL_CASE' => 'Case',
    'LBL_CASES' => 'Cases',
    'LBL_CHANGE_PASSWORD' => 'Promijeni lozinku',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHARTS' => 'Charts',
    'LBL_QUICK_CHARTS' => 'Quick Charts',
    'LBL_QUICK_HISTORY' => 'Timeline',
    'LBL_CHECKALL' => 'Provjeri Sve',
    'LBL_CITY' => 'City',
    'LBL_CLEAR_BUTTON_LABEL' => 'Clear',
    'LBL_CLEAR_BUTTON_TITLE' => 'Clear',
    'LBL_CLEARALL' => 'Očisti sve',
    'LBL_CLOSE_BUTTON_TITLE' => 'Zatvori',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zatvori i kreiraj novo',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Close and Create New',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Sastavi e-poštu',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Compose Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Yes',
    'LBL_SEARCH_DROPDOWN_NO' => 'No',
    'LBL_CONTACT_LIST' => 'Lista kontakata',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_CONTRACT' => 'Contract',
    'LBL_CONTRACTS' => 'Contracts',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATE_BUTTON_LABEL' => 'Kreiraj',
    'LBL_CREATED_BY_USER' => 'Created by User',
    'LBL_CREATED_BY' => 'Created By',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_CREATED' => 'Kreirano od',
    'LBL_CURRENT_USER_FILTER' => 'My Items',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_DOCUMENTS' => 'Documents',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_DUPLICATE_BUTTON' => 'Duplicate',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_DELETE' => 'Delete',
    'LBL_DELETED' => 'Deleted',
    'LBL_LIMIT' => 'Limit: ',
    'LBL_DIRECT_REPORTS' => 'Direktni izvještaji',
    'LBL_DONE_BUTTON_LABEL' => 'Done',
    'LBL_DONE_BUTTON_TITLE' => 'Done',
    'LBL_FAVORITES' => 'Omiljeni',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Molim odaberite vCard datoteku',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard nema sva potrebna polja za ovaj modul. Molim referirajte se sa suitecrm.log za detalje.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Učitana datoteka premašuje ograničenje od 30000 bajtova koje je određeno u HTML formi.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Pojavila se greška kod učitanja vCard datoteke. Molim referirajte se sa suitecrm.log za detalje.',
    'LBL_IMPORT_VCARD' => 'Uvoz vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Uvoz vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import vCard',
    'LBL_VIEW_BUTTON' => 'View',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Mailaj kao PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email as PDF',
    'LBL_EMAILS' => 'Emails',
    'LBL_EMPLOYEES' => 'Employees',
    'LBL_ENTER_DATE' => 'Unesite datum',
    'LBL_EXPORT' => 'Izvoz',
    'LBL_FAVORITES_FILTER' => 'My Favorites',
    'LBL_GO_BUTTON_LABEL' => 'Idi',
    'LBL_HIDE' => 'Sakrij',
    'LBL_HISTORY' => 'Povijest',
    'LBL_NEW' => 'New',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Uvoz',
    'LBL_IMPORT_STARTED' => 'Uvoz počeo: ',
    'LBL_LAST_VIEWED' => 'Nedavno pregledano',
    'LBL_LAST_VIEWED_NO_RESULT' => 'No Recently Viewed Items',
    'LBL_LEADS' => 'Leads',
    'LBL_LESS' => 'manje',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGNLOG' => 'Dnevnik kampanje',
    'LBL_CAMPAIGN_CONTACT' => 'Campaigns',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'None',
    'LBL_CAMPAIGN_CHARTS' => 'Campaign Charts',
    'LBL_EMAIL_MARKETING_CHARTS' => 'Email Marketing Charts',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Message Queue',
    'LBL_CAMPAIGN_SEND_STATUS' => 'Campaign Send Status',
    'LBL_CAMPAIGN_SEND_ERROR_THRESHOLD_EXCEEDED' => 'Error threshold per batch (%d) reached: %s',
    'LBL_CAMPAIGN_SEND_FAILURE_THRESHOLD_EXCEEDED' => 'Failure threshold per batch of %d exceeded',
    'LBL_EMAIL_MARKETING_SEND_STATUS' => 'Email Marketing Send Status',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Campaign Response By Recipient Activity',
    'LBL_EMAIL_MARKETING_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Email Marketing Response By Recipient Activity',
    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Sent/Attempted',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Bounced Messages, Other',
    'LBL_LOG_ENTRIES_BOUNCED_TITLE' => 'Bounced Messages',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Bounced Messages, Invalid Email',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'Click-thru Link',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Viewed Message',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Opted Out',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Leads Created',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Leads',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contacts Created',
    'LBL_LOG_ENTRIES_BLOCKED_TITLE' => 'Suppressed/Blocked',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Pronađeno u distribuciji',
    'LBL_FIXED_IN_RELEASE' => 'Ispravljeno u distribuciji',
    'LBL_IN_EVERYWHERE' => 'In Everywhere',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime tvrtke',
    'LBL_LIST_ASSIGNED_USER' => 'User',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga kontakta',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_OF' => 'od',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_RELATED_TO' => 'Povezano sa',
    'LBL_LIST_USER_NAME' => 'Korisničko ime',
    'LBL_LISTVIEW_NO_SELECTED' => 'Molim odaberite barem 1 zapis za nastavak.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Molim odaberite barem 2 zapisa za nastavak.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Odabrani zapisi',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Odabrano:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Junior programer',
    'LBL_COPY' => 'Copy',
    'LBL_CANCEL' => 'Cancel',
    'LBL_CONFIRM' => 'Confirm',
    'LBL_SNOOZE' => 'Snooze',
    'LBL_SNOOZE_INLINE_CONFIRM' => 'Snooze? ({{preferences.snooze_alert_timer|enum:snooze_alert_timer_simple}})',
    'LBL_DISMISS' => 'Dismiss',
    'LBL_DISMISS_INLINE_CONFIRM' => 'Dismiss?',
    'LBL_DISMISS_ALL_INLINE_CONFIRM' => 'Dismiss All?',
    'LBL_DISMISS_ALL_DRAFTS_CONFIRM' => 'Dismiss all drafts?',
    'NTC_DISMISS_CONFIRMATION' => 'Are you sure you want to dismiss this alert?',
    'NTC_DISMISS_ALL_CONFIRMATION' => 'Are you sure you want to dismiss all alerts?',
    'LBL_ALERT_DISMISS_SUCCESS' => 'Alert dismissed successfully',
    'LBL_ALERT_DISMISS_ERROR' => 'Error while trying to dismiss alert',
    'LBL_ALERT_DISMISS_ALL_SUCCESS' => 'Alerts dismissed successfully',
    'LBL_DISMISS_ALL' => 'Dismiss All',
    'LBL_DISMISS_SUCCESS' => 'Successfully Dismissed',
    'LBL_VERIFY' => 'Potvrdite',
    'LBL_RESEND' => 'Pošaljite ponovno ',
    'LBL_RECORD_DOES_NOT_EXIST' => 'Error retrieving record. This record may be deleted or you may not be authorized to view it.',
    'LBL_PROFILE' => 'Profil',
    'LBL_PROFILE_EDIT' => 'Edit Profile',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MASS_UPDATE' => 'Masovno ažuriranje',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nema dostupnih polja za operaciju masovnog ažuriranja',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Odjavna primarna e-pošta',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Prijavite se primarnom adresom e-pošte',
    'LBL_MEETINGS' => 'Meetings',
    'LBL_MEETING_GO_BACK' => 'Povratak na sastanak',
    'LBL_MEMBERS' => 'Članovi',
    'LBL_MEMBER_OF' => 'Član od',
    'LBL_MODIFIED_BY_USER' => 'Modified by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_MODIFIED' => 'Izmijenjeno od',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_MORE' => 'Više',
    'LBL_MY_ACCOUNT' => 'Moje postavke',
    'LBL_NAME' => 'Name',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Kreiraj',
    'LBL_NEW_BUTTON_TITLE' => 'Create',
    'LBL_EDIT' => 'Edit',
    'LBL_NEXT_BUTTON_LABEL' => 'Next',
    'LBL_NONE' => '--None--',
    'LBL_NOTES' => 'Notes',
    'LBL_OPPORTUNITIES' => 'Opportunities',
    'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike',
    'LBL_OPPORTUNITY' => 'Opportunity',
    'LBL_OR' => 'ili',
    'LBL_PANEL_OVERVIEW' => 'Pregled',
    'LBL_PANEL_ASSIGNMENT' => 'Ostalo',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Matični tip',
    'LBL_PARENT_FIELD_DYNAMIC_LABEL' => '{{fields.parent_type.value}}',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primarna adresa županije',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',

    'LBL_PROSPECTS' => 'Potencijalni kupac',
    'LBL_PRODUCTS' => 'Proizvodi',
    'LBL_PROJECT_TASKS' => 'Project Tasks',
    'LBL_PROJECTS' => 'Projects',
    'LBL_QUOTES' => 'Quotes',

    'LBL_RELATED' => 'Povezano',
    'LBL_RELATED_RECORDS' => 'Povezani zapisi',
    'LBL_REMOVE' => 'Remove',
    'LBL_REPORTS_TO' => 'Izvještava prema',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Ukazuje na potrebno polje',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Done',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Puni oblik',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Full Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Spremi i kreiraj novo',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Save & Create New',
    'LBL_SAVE_OBJECT' => 'Spremi {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Pretraživanje',
    'LBL_SEARCH_BUTTON_TITLE' => 'Search',
    'LBL_FILTER' => 'Filter',
    'LBL_CLEAR_FILTER' => 'Clear Filter',
    'LBL_FILTER_MODULES' => 'Filter Modules',
    'LBL_SEARCH' => 'Search',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'više',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Pogrešan format datoteke, samo se slikovne datoteke mogu učitati.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Select',
    'LBL_SELECT_BUTTON_TITLE' => 'Select',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Pregledaj dokumente',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Odaberi kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Select Contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Odaberi iz izvještaja',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Odaberi izvještaje',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Odaberi korisnika',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Select User',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Očisti odabir',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Očisti odabir',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Očisti odabir',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Očisti odabir',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Odaberi datoteku',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Select File',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Obriši datoteku',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Obriši datoteku',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Select User',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Select User',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Očisti korisnika',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Clear User',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Odaberi tvrtku',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Select Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Očistite Tvrtku',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Očistite Tvrtku',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Odaberite Kampanju',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Odaberite Kampanju',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Očistite Kampanju',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Očistite Kampanju',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Select Contact',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Select Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Očistite Kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Očistite Kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Odaberite Tim',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Odaberite Tim',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Očistite Tim',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Očistite Tim',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resursi korišteni u izradi ove stranice (upiti, datoteke)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekunda.',
    'LBL_SERVER_RESPONSE_TIME' => 'Vrijeme odaziva servera:',
    'LBL_SERVER_MEMORY_BYTES' => 'bajtova',
    'LBL_SERVER_MEMORY_USAGE' => 'Zauzeće memorije servera: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Korištenje: - modul: {0} - radnja: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Vrhunac zauzeća memorije servera: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresa za dostavu',
    'LBL_SHOW' => 'Prikaži',
    'LBL_STATE' => 'State:',
    'LBL_STATUS_UPDATED' => 'Vaš status za ovaj događaj je ažuriran!',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Ulica',
    'LBL_SUBJECT' => 'Subjekt',

    'LBL_INBOUNDEMAIL_ID' => 'ID dolazne e-pošte',

    'LBL_ALL_SCHEDULERS' => 'All Schedulers',
    'LBL_LEGACY_SCHEDULERS' => 'Legacy Schedulers',
    'LBL_SCHEDULERS' => 'Schedulers',
    'LBL_RUN_LEGACY_SCHEDULERS' => 'Running Legacy Schedulers',
    'LBL_LEGACY_SCHEDULERS_RUN_SUCCESSFULLY' => 'Legacy Schedulers run successfully!',
    'LBL_RUN_SCHEDULERS' => 'Running Schedulers',
    'LBL_LEGACY_SCHEDULER_FAILED' => 'Not all Schedulers were successful. See Logs.',
    'LBL_PASSED' => 'Passed',
    'LBL_FAILED' => 'Failed',

    'LBL_SCENARIO_SALES' => 'Sales',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finance',
    'LBL_SCENARIO_SERVICE' => 'Usluga',
    'LBL_SCENARIO_PROJECT' => 'Upravljanje projektima',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje prodajom',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje marketingom',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje finansijama',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje uslugama',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje projektima',

    'LBL_SYNC' => 'Sync',
    'LBL_TABGROUP_ALL' => 'All',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktivnosti',
    'LBL_TABGROUP_COLLABORATION' => 'Kolaboracija',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Ostalo',
    'LBL_TABGROUP_SALES' => 'Sales',
    'LBL_TABGROUP_SUPPORT' => 'Podrška',
    'LBL_TASKS' => 'Tasks',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhiviraj e-poštu',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email',
    'LBL_TOO_MANY_ADDRESSES' => 'You have selected too many email addresses.',
    'LBL_NO_ADDRESSES_SELECTED' => 'Please select an address to send to.',
    'LBL_NOT_ALL_SENT' => 'Not all Emails sent. See logs for more info.',
    'LBL_NOT_VALID_TARGETS' => 'No targets validated to send to.',
    'LBL_ALL_EMAILS_SENT' => 'All test Emails sent successfully',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Povrati',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Undelete',
    'LBL_UNDELETE_BUTTON' => 'Undelete',
    'LBL_UNDELETE' => 'Undelete',
    'LBL_UNSYNC' => 'Odsinhroniziraj',
    'LBL_UPDATE' => 'Ažuriraj',
    'LBL_USER_LIST' => 'Lista korisnika',
    'LBL_USERS' => 'Users',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Provjera postojećih unosa e-pošte...',
    'LBL_VERIFY_PORTAL_NAME' => 'Provjera postojećeg imena portala...',
    'LBL_VIEW_IMAGE' => 'pogledaj',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',

    'LNK_ABOUT' => 'O SuiteCRM',
    'LNK_ADVANCED_FILTER' => 'Napredni filtar',
    'LNK_BASIC_FILTER' => 'Brzi Filter',
    'LBL_ADVANCED_SEARCH' => 'Napredni filtar',
    'LBL_QUICK_FILTER' => 'Brzi Filter',
    'LBL_BASIC_FILTER' => 'Basic Filter',
    'LBL_QUICK' => 'Quick',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Prikaži sve',
    'LNK_CLOSE' => 'Zatvori',
    'LBL_MODIFY_CURRENT_FILTER' => 'Izmjeni trenutni filter',
    'LNK_SAVED_VIEWS' => 'Opcije izgleda',
    'LNK_DELETE' => 'Delete',
    'LNK_EDIT' => 'Edit',
    'LNK_GET_LATEST' => 'Dohvati najnovije',
    'LNK_GET_LATEST_TOOLTIP' => 'Zamijeni sa najnovijom verzijom',
    'LNK_HELP' => 'Help',
    'LNK_CREATE' => 'Create',
    'LNK_LIST_END' => 'Kraj',
    'LNK_LIST_NEXT' => 'Next',
    'LNK_LIST_PREVIOUS' => 'Prethodno',
    'LNK_LIST_RETURN' => 'Povratak na listu',
    'LNK_LIST_START' => 'Započni',
    'LNK_LOAD_SIGNED' => 'Potpiši',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Zamijeni sa potpisanim dokumentom',
    'LNK_PRINT' => 'Print',
    'LNK_BACKTOTOP' => 'Povratak na vrh',
    'LNK_REMOVE' => 'Remove',
    'LNK_RESUME' => 'Nastavi',
    'LNK_VIEW_CHANGE_LOG' => 'Pogledaj zapisnik izmjena',
    'LBL_CHANGE_LOG' => 'Change Log',

    'NTC_CLICK_BACK' => 'Molim kliknite natrag u Vašem pregledniku i ispravite grešku.',
    'NTC_DATE_FORMAT' => '(gggg-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Jeste li sigurni želite li izbrisati odabrani zapis(e)?',
    'NTC_SEND_QUEUED_CAMPAIGN_EMAILS' => 'Send Next Batch of Queued Campaign Emails?',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_TEMPLATE_IS_USED' => 'Predložak je korišten u barem jednom zapisu email marketinga. Jeste li sigurni želite li ga izbrisati?',
    'NTC_TEMPLATES_IS_USED' => 'Prikazani predlošci koriste se u marketinškim zapisima e-pošte. Jeste li sigurni da ih želite izbrisati?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_ABORT_CONFIRMATION' => 'Are you sure you want to abort?',
    'LBL_EMAIL_MARKETING_NOT_SENT' => 'Email Marketing status is not Sent, cannot reschedule',
    'NTC_RESUME_CONFIRMATION' => 'Resuming will re-queue failed recipients and continue sending.',
    'LBL_EMAIL_MARKETING_NOT_PAUSED' => 'Email Marketing status is not Paused, cannot resume',
    'LBL_CAMPAIGN_PAUSED_THRESHOLD' => 'This campaign has been paused —',
    'LBL_CAMPAIGN_PAUSED_DYNAMIC_LABEL' => '{{ fields.email-marketing-pause-reason.value }}',
    'NTC_SCHEDULE_CONFIRMATION' => "When Scheduled, The Sending Process will begin once the Scheduled Run Date has been reached.",
    'NTC_DELETE_TEST_ENTRIES' => 'Scheduling will Delete Test Entries.',
    'NTC_DELETE_TEST_ENTRIES_CONFIRMATION' => 'Are you sure you want to delete test entries?',
    'NTC_PROCEED' => 'Would you like to proceed?',
    'NTC_UNSCHEDULE_CONFIRMATION' => 'Unscheduling will set the Status to "Draft".',
    'NTC_UNSCHEDULE_CONFIRMATION_OTHER' => 'The Sending Process will no longer begin, unless Re-Scheduled.',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Jeste li sigurni želite li izbrisati',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Jeste li sigurni želite li izbrisati',
    'NTC_DELETE_SELECTED_RECORDS' => 'odabrani zapis(e)?',
    'NTC_LOGIN_MESSAGE' => 'Molim unesite Vaše korisničko ime i lozinku.',
    'NTC_NO_ITEMS_DISPLAY' => 'none',
    'NTC_REMOVE_CONFIRMATION' => 'Jeste li sigurni želite li ukloniti ovu vezu? Samo će se veza ukloniti. Zapis se neće izbrisati.',
    'NTC_REQUIRED' => 'Indicates required field',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Dobrodošli',
    'NTC_YEAR_FORMAT' => '(gggg)',
    'WARN_UNSAVED_CHANGES' => 'Napuštate ovaj zapis bez spremanja bilo kakvih promjena koje ste možda napravili. Jeste li sigurni da želite izaći iz ovog zapisa?',
    'ERROR_NO_RECORD' => 'Greška zaprimanja zapisa. Zapis je možda izbrisan ili niste autorizirani kako bi ga vidjeli',
    'LBL_TEMPLATE_CONFIRMATION' => 'Apply new Email Template? (This will override your current email body and subject field)',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Upozorenje:</b>Vaš preglednik više nije podržan ili koristite nepodržani preglednik.<p></p>Sljedeće verzije preglednika su podržane<p></p><ul><li>Internet Explorer 10 (pogled kompatibilnosti nije podržan)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Upozorenje:</b> Vaš preglednik je u IE kompatibilnom pogledu koi nije podržan.',
    'ERROR_TYPE_NOT_VALID' => 'Greška. Ovaj tip nije važeći.',
    'ERROR_NO_BEAN' => 'Neuspjeli dohvat beana.',
    'LBL_DUP_MERGE' => 'Pronađi duplikate',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Upravljanje predbilježbama',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Upravljanje pretplatama za',
    // Ajax status strings
    'LBL_LOADING' => 'Učitavanje ...',
    'LBL_SEARCHING' => 'Pretraživanje...',
    'LBL_SAVING_LAYOUT' => 'Spremanje izgelda ...',
    'LBL_SAVED_LAYOUT' => 'Izgled je spremljen.',
    'LBL_SAVED' => 'Spremljeno',
    'LBL_SAVING' => 'Spremanje',
    'LBL_DISPLAY_COLUMNS' => 'Prikaži stupce',
    'LBL_HIDE_COLUMNS' => 'Sakrij stupce',
    'LBL_COLUMNS' => 'Columns',
    'LBL_SEARCH_CRITERIA' => 'Opcije pretrage',
    'LBL_SAVED_VIEWS' => 'Spremljeni prikazi',
    'LBL_PROCESSING_REQUEST' => 'Procesuiranje...',
    'LBL_REQUEST_PROCESSED' => 'Done',
    'LBL_AJAX_FAILURE' => 'Ajax kvar',
    'LBL_MERGE_DUPLICATES' => 'Spoji',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Moji filteri',
    'LBL_SEARCH_POPULATE_ONLY' => 'Izvrši pretragu koristeći pretragu od iznad',
    'LBL_DETAILVIEW' => 'Pregled detalja',
    'LBL_LISTVIEW' => 'Pregled liste',
    'LBL_EDITVIEW' => 'Uredi pregled',
    'LBL_BILLING_STREET' => 'Ulica:',
    'LBL_SHIPPING_STREET' => 'Street:',
    'LBL_SEARCHFORM' => 'Obrazac pretraživanja',
    'LBL_SAVED_SEARCH_ERROR' => 'Molim pružite ime za ovaj pregled.',
    'LBL_DISPLAY_LOG' => 'Prikaži zapisnik',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Istek sesije',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Vaša sesija isteći će za 2 minute. Molim spremite Vaš rad.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Vaša sesija je istekla.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Meeting',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Call',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Vrijeme:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokacija:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Opis:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Povezano s:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Događaj',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Događaj nije postavljen.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Lokacija nije određena.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Početni datum nije postavljen.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nisu pronađeni rezultati.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Pretraživanje nema rezultata... Probajte izmjeniti opcije pretraživanja te probajte ponovno?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Nisu pronađeni rezultati za <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Kreiraj <item1> kao novi <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'ili promijenite kriterije pretraživanja',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Trenutno nemate spremljnih zapisa. <item2> ili <item3> sada.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Dodaj u moje favorite:',
    'LBL_CREATE_CONTACT' => 'Kreiraj kontakt',
    'LBL_CREATE_CASE' => 'Create Case',
    'LBL_CREATE_NOTE' => 'Kreiraj bilješku',
    'LBL_CREATE_OPPORTUNITY' => 'Kreiraj priliku',
    'LBL_SCHEDULE_CALL' => 'Zabilježi poziv',
    'LBL_SCHEDULE_MEETING' => 'Zakaži sastanak',
    'LBL_CREATE_TASK' => 'Kreiraj zadatak',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generiraj obrazac',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Snimite web formu',
    'LBL_AVAILABLE_FIELDS' => 'Dostupna polja',
    'LBL_FIRST_FORM_COLUMN' => 'Prvi stupac u formi',
    'LBL_SECOND_FORM_COLUMN' => 'Drugi stupac u formi',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Nedostaje obvezno polje: Dodijeljeno je',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Nedostaje obvezno polje: Povezana kampanja',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web obrazac za izradu ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Slanjem ovog obrasca stvorit će se ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Dodaj sva polja',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Poništite sva polja',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Ukloni sva polja',
    'LBL_NEXT_BTN' => 'Next',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Samo se sljedeći tipovi slikovnih privitaka mogu ugraditi: JPG, PNG.',
    'LBL_TRAINING' => 'Community Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Promijenjen kontekst baze podataka u',
    'ERR_MSSQL_WARNING' => 'Upozorenje:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Greška: Datoteka [[file]] nedostaje.  Nije moguće kreirati jer nije pronađena odgovarajuća HTML datoteka.',
    'ERR_CANNOT_FIND_MODULE' => 'Greška: Modul [module] ne postoji.',
    'LBL_ALT_ADDRESS' => 'Ostala adresa:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Pogreška: U nizu displayParams postoji nejednak broj argumenata za elemente \'tipka\' i \'kopiraj\'.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filteri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Samo moje stavke',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Prikaži redove',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Dosegli ste maksimalni broj SuiteCRM Dashleta koje je postavio vaš administrator. Uklonite postojeći SuiteCRM Dashlet kako biste dodali novi.',
    'LBL_ADDING_DASHLET' => 'Dodavanje SuiteCRM Dashleta...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet je dodan',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Jeste li sigurni da želite ukloniti ovaj SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Uklanjanje SuiteCRM Dashleta...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Učitavanje stranice, molim pričekajte...',

    'LBL_RELOAD_PAGE' => 'Molimo <a href="javascript: window.location.reload()">ponovo učitajte prozor</a> kako biste koristili ovaj SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Dodaj dashlete',
    'LBL_CLOSE_DASHLETS' => 'Zatvori',
    'LBL_OPTIONS' => 'Options',
    'LBL_1_COLUMN' => '1 stupac',
    'LBL_2_COLUMN' => '2 stupca',
    'LBL_3_COLUMN' => '3 stupca',
    'LBL_PAGE_NAME' => 'Ime stranice',

    'LBL_SEARCH_RESULTS' => 'Search Results',
    'LBL_SEARCH_MODULES' => 'Moduli',
    'LBL_SEARCH_TOOLS' => 'Alati',
    'LBL_SEARCH_HELP_TITLE' => 'Tipovi pretraživanja',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Nema slike',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopiraj adresu sa lijeve strane:',
    'LBL_SAVE_AND_CONTINUE' => 'Spremi i nastavi',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Kontole višestrukog odabira</strong></p><ul><li>Kliknite na vrijednosti za odabir atributa.</li><li>Ctrl-click&nbsp;to&nbsp;višestruki odabir. Mac korisnici koriste CMD-click.</li><li>Za odabir svih vrijednosti između dva atributa,&nbsp; kliknite prvo vrijednost&nbsp;a zatim shift-klik zadnuu vrijednost.</li></ul><p><strong>Opcije naprednog pretraživanja i izgleda</strong><br><br>Koristeći <b>Spremljeno pretraživanje i izgled</b> opciju, možete spremiti set parametara pretraživanja i/ili prilagođenu listu izgleda kako bi ubuduće brzo dobili željene rezultate pretraživanja. Možete spremiti neograničen broj prilagođenih pretraživanja i izgleda. Sva spremljna preraživanja prikazuju se prema imenu u listi spremljenih pretraživanja sa zadnje učitanjim spremljenim pretraživanjem koje se pojavljuje na vrhu liste.<br><br>Za prilagoditi listu pregleda, koristite kućice Sakrij stupce i Prikaži stupce kako bi odabrali koja polja želite da se prikazuju u rezultatima pretraživanja. Na primjer, možete pregledati ili sakriti detalje poput imena zapisa, dodijeljenog korisnika i dodijeljenog tima u rezultatima pretraživanja. Za dodati stupac u pregled liste, odaberite polje iz liste Sakrij Stupce i koristite lijevu strelicu za pomaknuti ga na listu Prikaži stupce. Za maknuti stupac iz pregleda listi, odaberite ga iz liste Prikaži stupce i koristite desnu strelicu kako bi pomaknuli u listu Sakrij Stupce .<br><br>Ako spremite postavke izgleda, moći ćete ih učitati bilo kada za pregled rezultata pretraživanja u prilagođenom izgledu.<br><br>Za spremiti i ažurirati pretraživanje i/ili izgled:<ol><li>Unesite ime za rezulate pretraživanja u <b>SPremi ovo pretraživanje kao</b> polje i kliknite <b>Spremi</b>.Ime se sad prikazuje u listi spremlejnih pretraživanja uz <b>Očisti</b> gumb.</li><li>Za pregledati spremljeno pretraživanje, odaberite ga iz liste spremljenih pretraživanja. Rezultati pretraživanja prikazani su na pregledu liste.</li><li>Za ažurirati svojstva spremljenog pretraživanja, odaberite spremljeno pretraživanje s liste,unesite nove kriterije pretraživanja i/ili opcija izgleda u području naprednog pretraživanja i klikinite  <b>Ažuriraj</b> odmah uz <b>Izmijeni trenutno poretraživanje</b>.</li><li>Za izbrisati sprevljeno pretraživanje, odaberite ga iz liste spremljenih pretražinvaja, kliknite <b>Izbriši</b> odmah uz <b>Izmijeni trenutni pretraživanje</b>, i zatim kliknite <b>OK</b> za potvrdu brisanja.</li></ol><p><strong>Savjeti</strong><br><br>Korištenjem %  kao zamjenskog operatora možete proširit pretraživanje.  Na primjer, umjesto pretraživanja samo rezultata koji prikazuju samo "Jabuke" Možete izmijeniti pretraživanje u "Jabuke%" koje će prikazati sve rezultate koji počinju sa riječju Jabuke, ali mogu sadržavati i ostale znakove.</p> \'% a\'',

    //resource management
    'ERR_QUERY_LIMIT' => 'Greška: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Greška: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Greška: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Greška: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Greška: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Greška: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'Id korisnika',
    'LBL_MODULE_NAME' => 'Naziv modula',
    'LBL_ITEM_ID' => 'Id stavke',
    'LBL_ITEM_SUMMARY' => 'Rezime stavki',
    'LBL_ACTION' => 'Radnja',
    'LBL_SESSION_ID' => 'Id sesije',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack za korisnički id {0}',
    'LBL_VISIBLE' => 'Zapis vidljiv',
    'LBL_DATE_LAST_ACTION' => 'Datum posljednje radnje',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nije prije',
    'MSG_IS_MORE_THAN' => 'je više od',
    'MSG_SHOULD_BE' => 'trebao bi biti',
    'MSG_OR_GREATER' => 'ili veći',

    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Kreiraj bug',

    'LBL_OBJECT_IMAGE' => 'objekt slika',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Odaberi datum',

    'LBL_VALIDATE_RANGE' => 'nije u važećem rasponu',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Molim odaberite raspon početnog i završnog datuma',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Molim odaberite unose početnih i završnih raspona',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'All',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Greška: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Greška: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Greška: Unable to retrieve data for {0} Connector.  The service may currently be inaccessible or the configuration settings may be invalid.  Connector error message: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Za optimalno iskustvo koriteći IIS/FastCGI sapi, postavite fastcgi.logging na 0 u vašoj php.ini datoteci.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Name',
    'LBL_COLLECTION_PRIMARY' => 'Primary',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Potrebno polje',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DESCRIPTION' => 'Description',

    'LBL_YESTERDAY' => 'jučer',
    'LBL_TODAY' => 'danas',
    'LBL_TOMORROW' => 'sutra',
    'LBL_NEXT_WEEK' => 'sljedeći tjedan',
    'LBL_NEXT_MONDAY' => 'sljedeći ponedjeljak',
    'LBL_NEXT_FRIDAY' => 'sljedeći petak',
    'LBL_TWO_WEEKS' => 'dva tjedna',
    'LBL_NEXT_MONTH' => 'sljedeći tjedan',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'prvi dan sljedećeg mjeseca',
    'LBL_THREE_MONTHS' => 'tri mjeseca',
    'LBL_SIXMONTHS' => 'šest mjeseci',
    'LBL_NEXT_YEAR' => 'sljedeće godine',

    //Datetimecombo fields
    'LBL_HOURS' => 'Hours',
    'LBL_MINUTES' => 'Minutes',
    'LBL_MERIDIEM' => 'Podne',
    'LBL_DATE' => 'Datum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatsko osvježivanje',

    'LBL_DURATION_DAY' => 'dan',
    'LBL_DURATION_HOUR' => 'sat',
    'LBL_DURATION_MINUTE' => 'minuta',
    'LBL_DURATION_DAYS' => 'dana',
    'LBL_DURATION_HOURS' => 'Trajanje u satima',
    'LBL_DURATION_MINUTES' => 'Trajanje u minutama',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Odaberite mjesec',
    'LBL_ENTER_YEAR' => 'Unesite godinu',
    'LBL_ENTER_VALID_YEAR' => 'Molim unesite važeću godinu',

    //File write error label
    'ERR_FILE_WRITE' => 'Greška: Could not write file {0}.  Please check system and web server permissions.',
    'ERR_FILE_NOT_FOUND' => 'Greška: Could not load file {0}.  Please check system and web server permissions.',

    'LBL_AND' => 'i',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Dokument na Vanjskom Izvoru',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sigurnost',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Ovo je uzorak datoteke za uvoz koja daje primjer očekivanog sadržaja za uvoz."
"Datoteka je .csv odvojena zarezom i koristi dvostruke navodnike kao kvalifikator polja."

"Red zaglavlja je najviši red u datoteci i sadrži oznake polja koje bi vidjeli u aplikaciji."
"Te se oznake koriste za mapiranje podataka iz datoteke u polja u aplikaciji."

"Napomene: Imena baze podataka mogu se koristiti i u zaglavlju. Ovo je korisno kada koristite phpMyAdmin ili neki drugi alat baze podataka za pružanje izvezenog popisa podataka za uvoz."
"Redoslijed stupca nije presudan jer se pri uvozu provjerava ime polja na temelju retka zaglavlja."


"Da biste koristili ovu datoteku kao predložak, napravite sljedeće:"
"1. Uklonite uzorke redaka podataka"
"2. Uklonite pomoćni koji trenutno čitate."
"3. Unesite vlastite podatke u odgovarajuće redove i stupce"
"4. Spremite datoteku na poznato mjesto u vašem sustavu"
"5. Kliknite na opciju Uvezi iz izbornika Akcije u aplikaciji i odaberite datoteku za prijenos"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Nema obavijesti',
    'ERR_NOTIFICATIONS_MARK_AS_READ' => 'Error while trying to mark notifications as read',
    'ERR_FIELD_LOGIC_BACKEND_CALCULATION' => 'Error while trying to get the value',
    'LBL_FAILED_TO_UPDATE_TEMPLATE_VARIABLES' => 'Failed to update template variables',
    'LBL_ALT_SORT_DESC' => 'Sortirano silazno',
    'LBL_ALT_SORT_ASC' => 'Sortirano uzlazno',
    'LBL_ALT_SORT' => 'Sort',
    'LBL_ALT_SHOW_OPTIONS' => 'Prikaži opcije',
    'LBL_ALT_HIDE_OPTIONS' => 'Sakrij opcije',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Pomaknite odabrani unos na listi nalijevo.',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Pomaknite odabrani unos na list nadesno.',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Pomaknite odabrani unos gore na prikazanom poretku liste.',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Pomaknite odabrani unos dolje na prikazanom poretku liste',
    'LBL_ALT_INFO' => 'Informacija',
    'MSG_DUPLICATE' => 'Zapis {0} koji želite stvoriti mogući je duplikat zapisa {0} koji već postoji. {1} zapisi koji sadrže slična imena navedeni su u nastavku. <br> Kliknite Stvori {1} za nastavak stvaranja ovog {0} ili odaberite postojeći {0} naveden u nastavku.',
    'MSG_SHOW_DUPLICATES' => 'Zapis {0} koji ćete stvoriti mogući je duplikat zapisa {0} koji već postoji. {1} zapisi koji sadrže slična imena navedeni su u nastavku. Kliknite Spremi za nastavak stvaranja ovog {0} ili kliknite Odustani za povratak u modul bez kreiranja {0}.',
    'LBL_EMAIL_TITLE' => 'adresa e-pošte',
    'LBL_EMAIL_OPT_TITLE' => 'adresa odjavne e-pošte',
    'LBL_EMAIL_INV_TITLE' => 'pograšna adresa e-pošte',
    'LBL_EMAIL_PRIM_TITLE' => 'Napravite primarnu adresu e-pošte',
    'LBL_SELECT_ALL_TITLE' => 'Odaberi sve',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Odaberi ovaj red',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'GREŠKA: Dogodila se greška prilikom učitavanja. Kod greške: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'GREŠKA: Dogodila se greška priliko učitavanja. Kod greške: {0} - {1}. Maksimalna veličina učitanja je {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'GREŠKA: Dogodila se greška prilikom učitanja. Molim kontaktiraje administratora za pomoć.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Veličina učitanja ({0} bajtova) prelazi dopušteni maksimum: {1} bajtova',
    'UPLOAD_REQUEST_ERROR' => 'Greška. Molim osvježite vašu stranicu i ponovno pokušajte.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Edit',
    'LBL_EDIT_BUTTON_TITLE' => 'Edit',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplicate',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplicate',
    'LBL_DISABLE_USER_2FA' => 'Disable 2FA',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Delete',
    'LBL_DELETE_BUTTON_TITLE' => 'Delete',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Masovne Radnje',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Radnja',
    'LBL_TOO_FEW_SELECTED' => 'Invalid number of records selected. You must select a minimum of {min} records.',
    'LBL_TOO_MANY_SELECTED' => 'Invalid number of records selected. You must select a maximum of {max} records.',
    'LBL_SELECT_ALL_NOT_ALLOWED' => 'Selecting all records is not available for this action. Please select individual records.',
    'LBL_MISSING_HANDLER_DATA' => 'Unexpected error. Missing bulk action handler data from response',
    'LBL_MISSING_HANDLER' => 'Unexpected error. No handler defined for the select bulk action',
    'LBL_MISSING_HANDLER_DATA_ROUTE' => 'Unexpected error. Missing bulk action route',
    'LBL_ACTION_ERROR' => 'Unexpected error when calling action',
    'LBL_BULK_ACTION_ERROR' => 'Unexpected error when calling Bulk Action',
    'LBL_BULK_ACTION_DELETE_SUCCESS' => 'Record(s) deleted successfully',
    'LBL_BULK_ACTION_MASS_UPDATE_CONFIRMATION' => 'Are you sure you want to update the selected record(s)?',
    'LBL_BULK_ACTION_MASS_UPDATE_SUCCESS' => 'All Record(s) updated successfully',
    'LBL_BULK_ACTION_MASS_UPDATE_PARTIAL_SUCCESS' => 'Partial success. Some records were not updated. please check log',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_FIELDS' => 'No fields to update',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_RECORDS' => 'No records to update',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_ACLS' => 'Insufficient Privilege, Save action not allowed',
    'LBL_UNEXPECTED_ERROR' => 'Unexpected error. No able to perform action.',
    'LBL_RECORD_DELETE_SUCCESS' => 'Record deleted successfully',
    'LBL_RECORD_DELETE_ALL_SUCCESS' => 'Records deleted successfully',
    'LBL_RECORD_SNOOZE_SUCCESS' => 'Notification Snoozed',
    'LBL_ERROR_SAVING' => 'Error occurred while saving record',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Save',
    'LBL_NEW_EM_SURVEY' => 'New Survey Email',
    'LBL_NEW_EM_TRANSACTIONAL' => 'New Transactional Email',
    'LBL_NEW_EM_MARKETING' => 'New Marketing Email',
    'LBL_NEW_SURVEY' => 'New Survey',
    'LBL_WEB_TO_LEAD' => 'New Web to Person Form',
    'LBL_TYPE' => 'Type',
    'LBL_DATE_START' => 'Date Start',
    'LBL_SEND_DATE' => 'Send Date',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Schedule',
    'LBL_UNABLE_TO_UNSCHEDULE' => 'Unable to unschedule as not scheduled',
    'LBL_SAVE_BUTTON_TITLE' => 'Save',
    'LBL_SAVE_CONTINUE_LABEL' => 'Save And Continue',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancel',
    'LBL_CANCEL_BUTTON_TITLE' => 'Cancel',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ANNUAL_REVENUE_BY_ACCOUNTS' => 'Annual Revenue By Accounts',
    'PIPELINE_BY_SALES_STAGE' => 'Pipeline By Sales Stage',
    'LEADS_BY_SOURCE' => 'Leads By Source',
    'LEADS_BY_STATUS' => 'Leads By Status',
    'ACCOUNT_TYPES_PER_MONTH' => 'New Accounts by Month',

    'ERR_CONNECTOR_NOT_ARRAY' => 'niz priključaka u {0} pogrešno definiran je ili prazan i ne može se koristiti.',
    'ERR_SUHOSIN' => 'Tok prijenosa blokirao je Suhosin, molimo dodajte &quot;Učitaj&quot; u suhosin.executor.include.whitelist (pogledajte dodatne informacije za suitecrm.log)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Pogrešan odaziv servera.',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Quote',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prodajna cijena',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Ručno',
        '5' => 'Every 5 minutes',
        '15' => 'Svakih 15 minuta',
        '30' => 'Svakih 30 minuta',
        '60' => 'Svaki sat',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Podsjetnik je prazan ili netočan.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Podsjetnik nije određen ni kao popup prozor ni kao email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Nema pozvanih za podsjetnik.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Podsjetnik ne uključuje ni jedno pozvano lice, da li želite da uklonite podsjetnik?',
    'LBL_DELETE_REMINDER' => 'Izbriši podsjetnik',
    'LBL_OK' => 'Ok',
    'LBL_PROCEED' => 'Proceed',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Odabir stupaca',
    'LBL_COLUMN_CHOOSER' => 'Izbornik stupca',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Spremi izmjene',
    'LBL_DISPLAYED' => 'Prikaz',
    'LBL_HIDDEN' => 'Sakriveno',
    'ERR_EMPTY_COLUMNS_LIST' => 'Barem jedan element potreban',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Category',
    'LBL_LIST_CATEGORY' => 'Category',
    'ERR_FACTOR_TPL_INVALID' => 'Autentifikacijska poruka ovjere nije važeća, kontaktirajte svog administratora.',
    'LBL_SUBTHEMES' => 'Stil',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Zora',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Dan',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Sumrak',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Noć',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Podne',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Odbaciti nacrt',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Ova će operacija obrisati ovaj e-mail, želiš li nastaviti?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Izađite iz okvira za sastavljanje',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Izlaskom iz okvira za pisanje poruka svi uneseni podaci bit će izgubljeni, želite li nastaviti?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Primijeni predložak e-pošte',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Ovaj postupak će zamijeniti tekst i naslov e-maila, želite li nastaviti?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Opt-In Potvrđen',
    'LBL_OPT_IN_TITLE' => 'Uključiti u',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Opt-In Datum Potvrđen',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Opt-In Datum Slanja Potvrđen',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Opt-In Neuspjeli Datum Potvrđen',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Potvrdi Opt-In',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Predložak za priključenje e-pošte nije konfiguriran. Podesite postavke e-pošte.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Za priključenje e-pošta mora biti povezana s računom/kontaktom/potencijalnim klijentom/ciljem',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Ne-nasljedna Grupa',
    'LBL_PRIMARY_GROUP' => "Glavna Grupa",

    // footer
    'LBL_SUITE_TOP' => 'Back to top',
    'LBL_SUITE_SUPERCHARGED' => 'Unaprijedio SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Pokreće ga SuiteCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ovaj program je besplatan; možete ga distribuirati i/ili modificirati pod uvjetima GNU Affero General Public License, inačice 3, koju je objavila Fondacija za slobodni softver, uključujući dodatnu dozvolu navedenu u zaglavlju izvornog koda.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Resetiraj lozinku',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Pošalji potvrdnu e-poštu za uključenje',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Potvrdi slanje e-pošte uključenja samo za tvrtke/kontakte/potencijalne klijente/potencijalne kupce',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Slanje e-pošte uključenja je onemogućeno. Kako bi ste ga omogućili odaberite opciju uključenja pod postavkama e-pošte ili kontaktirajte vašeg Administratora.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Slanje e-pošte uključenja nije moguće jer kontakt nema primarnu adresu e-pošte',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Neuspješno slanje e-pošte za suglasnost uključenja',
    'LBL_CONFIRM_EMAIL_SENT' => 'Slanje e-pošte za suglasnost uključenja uspješno',

    'LBL_SEND_TEST_EMAIL' => 'Send Test Email',
    'LBL_SEND_TEST_EMAIL_DESC' => 'Please select the Email Addresses / User(s) and/or Target List(s) to send to.',
    'LBL_EMAIL_SENT_SUCCESSFULLY' => 'Email sent successfully',
    'LBL_PROSPECT_LIST_NAME' => 'Target Lists',

    //List View Column Selector Modal
    'LBL_COLUMN_SELECTOR_DISPLAYED_COLS' => 'DISPLAYED',
    'LBL_COLUMN_SELECTOR_HIDDEN_COLS' => 'HIDDEN',
    'LBL_COLUMN_SELECTOR_CLOSE_BUTTON' => 'Zatvori',
    'LBL_COLUMN_SELECTOR_SAVE_BUTTON' => 'Save Changes',
    'LBL_COLUMN_SELECTOR_MODAL_TITLE' => 'Choose Columns',

    // Two-Factor Authentication
    'LBL_ENTER_AUTH_APP_2FA_CODE' => 'Please enter the verification code from your authenticator app',
    'LBL_ENABLE_2FA_LABEL' => 'Enable Two-Factor Authentication',
    'LBL_BACKUP_CODES' => 'Recovery/Backup Codes',
    'LBL_BACKUP_CODES_INFO' => 'Backup codes are one time passcodes to use when you are unable to verify via your Authenticator app.',
    'LBL_BACKUP_CODES_WARN' => ' WARNING: These codes are only generated once. Please copy BEFORE verifying as these will not be displayed again.',
    'LBL_PROBLEMS_GENERATING_CODE' => 'Problems generating the code?',
    'LBL_BACKUP_CODES_FALLBACK_INSTRUCTIONS' => 'Use one of the backup codes (it expires after being used)',
    'LBL_OTP_SETUP' => 'Use a OTP (one time password) authenticator on your mobile or computer to enable 2FA (Two-Factor Authentication)',
    'LBL_QR_CODE_HELP' => "If you haven't already, please download an Authenticator Application (such as FreeOTP or Google Authenticator). Use that app to scan the QR code.",
    'LBL_USE_SECRET' => "Unable to scan the QR Code?",
    'LBL_USE_SECRET_DESC' => "If you are unable to scan the QR code, please enter the secret below manually into your authenticator app.",
    'LBL_HIDE_SECRET' => "Hide TOTP Secret",
    'LBL_2FA_LOGIN_CANCEL' => 'Two Factor Authentication cancelled',

    'LBL_FACTOR_AUTH_DISABLE' => 'Two Factor Authentication was Disabled',
    'LBL_FACTOR_AUTH_SUCCESS' => 'Two Factor Authentication was Successful',
    'LBL_FACTOR_AUTH_FAIL' => "Two Factor Authentication failed. Try again.",

    'LBL_VERIFY_2FA' => 'Verify Code',
    'LBL_TWO_FACTOR_AUTH' => 'Two Factor Authentication',
    'LBL_TWO_FACTOR_AUTH_APP_METHOD' => 'Authenticator app',
    'LBL_TWO_FACTOR_AUTH_APP_METHOD_DESCRIPTION' => 'Use an authentication app to generate 2-factor authentication codes when prompted',
    'LBL_ENABLE' => 'Enable',
    'LBL_ENABLED' => 'Enabled',
    'LBL_DISABLE' => 'Disable',
    'LBL_GENERATED' => 'Generated',
    'LBL_REGENERATE_CODES' => 'Regenerate',
    'LBL_REGENERATED_BACKUP_CODES' => 'Backup Codes Regenerated'

);

$app_list_strings['moduleList']['Library'] = 'Knjižnica';
$app_list_strings['moduleList']['EmailAddresses'] = 'Email Address';
$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array(
    'High' => 'High',
    'Medium' => 'Medium',
    'Low' => 'Low',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Suglasnost',
    'contract' => 'Contract',
    'legal_obligation' => 'Pravna obveza',
    'protection_of_interest' => 'Zaštita interesa',
    'public_interest' => 'Javni interes',
    'legitimate_interest' => 'Legitiman interes',
    'withdrawn' => 'Povučen',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Web stranica',
    'phone' => 'Phone',
    'given_to_user' => 'Dodijeljeno korisniku',
    'email' => 'Email',
    'third_party' => 'Treća strana',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Knowledge Base';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'Afganistan',
    'ALBANIA' => 'Albanija',
    'ALGERIA' => 'Alžir',
    'AMERICAN SAMOA' => 'AMERIČKA SAMOA',
    'ANDORRA' => 'ANDORA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTIKA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'Argentina',
    'ARMENIA' => 'Armenija',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'Australija',
    'AUSTRIA' => 'Austrija',
    'AZERBAIJAN' => 'Azerbajdžan',
    'BAHAMAS' => 'BAHAMI',
    'BAHRAIN' => 'Bahrein',
    'BANGLADESH' => 'BANGLADEŠ',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'Bjelorusija',
    'BELGIUM' => 'Belgija',
    'BELIZE' => 'Belize',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'Bermudi',
    'BHUTAN' => 'Butan',
    'BOLIVIA' => 'Bolivija',
    'BOSNIA' => 'Bosna i Hercegovina',
    'BOTSWANA' => 'Bocvana',
    'BOUVET ISLAND' => 'Otok Bouvet',
    'BRAZIL' => 'Brazil',
    'BRITISH ANTARCTICA TERRITORY' => 'Britanski Antarktički teritorij',
    'BRITISH INDIAN OCEAN TERRITORY' => 'Britanski Indijskooceanski teritorij',
    'BRITISH VIRGIN ISLANDS' => 'Britanski Djevičanski otoci',
    'BRITISH WEST INDIES' => 'Britanski Indijskooceanski zapadni teritorij',
    'BRUNEI' => 'Brunej',
    'BULGARIA' => 'Bugarska',
    'BURKINA FASO' => 'Burkina Faso',
    'BURUNDI' => 'Burundi',
    'CAMBODIA' => 'Kambodža',
    'CAMEROON' => 'Kamerun',
    'CANADA' => 'Kanada',
    'CANAL ZONE' => 'Panama Kanalska zona',
    'CANARY ISLAND' => 'Kanarski otoci',
    'CAPE VERDI ISLANDS' => 'Zelenortski Otoci',
    'CAYMAN ISLANDS' => 'Kajmanski otoci',
    'CHAD' => 'Čad',
    'CHANNEL ISLAND UK' => 'Kanalski otoci UK',
    'CHILE' => 'Čile',
    'CHINA' => 'Kina',
    'CHRISTMAS ISLAND' => 'Božićni Otok',
    'COCOS (KEELING) ISLAND' => 'Kokosovi otoci',
    'COLOMBIA' => 'Kolumbija',
    'COMORO ISLANDS' => 'Komori',
    'CONGO' => 'Kongo',
    'CONGO KINSHASA' => 'Kongo Kinšasa',
    'COOK ISLANDS' => 'Cookovi otoci',
    'COSTA RICA' => 'Kostarika',
    'CROATIA' => 'Hrvatska',
    'CUBA' => 'Kuba',
    'CURACAO' => 'Kurasao',
    'CYPRUS' => 'Cipar',
    'CZECH REPUBLIC' => 'Češka',
    'DAHOMEY' => 'Dahomej',
    'DENMARK' => 'Danska',
    'DJIBOUTI' => 'Džibuti',
    'DOMINICA' => 'Dominika',
    'DOMINICAN REPUBLIC' => 'Dominikanska Republika',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'Ekvador',
    'EGYPT' => 'Egipat',
    'EL SALVADOR' => 'El Salvador',
    'EQUATORIAL GUINEA' => 'EKVATORIJALNA GVINEJA',
    'ESTONIA' => 'Estonija',
    'ETHIOPIA' => 'ETIOPIJA',
    'FAEROE ISLANDS' => 'FARSKI OTOCI',
    'FALKLAND ISLANDS' => 'FALKLANDSKI OTOCI',
    'FIJI' => 'FIDŽI',
    'FINLAND' => 'Finska',
    'FRANCE' => 'Francuska',
    'FRENCH GUIANA' => 'FRANCUSKA GVAJANA',
    'FRENCH POLYNESIA' => 'FRANCUSKA POLINEZIJA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIJA',
    'GEORGIA' => 'Gruzija',
    'GERMANY' => 'Njemačka',
    'GHANA' => 'GANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'Grčka',
    'GREENLAND' => 'GRENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'Gvatemala',
    'GUINEA' => 'GVINEJA',
    'GUYANA' => 'GVAJANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'Honduras',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'Mađarska',
    'ICELAND' => 'Island',
    'IFNI' => 'IFNI',
    'INDIA' => 'Indija',
    'INDONESIA' => 'Indonezija',
    'IRAN' => 'Iran',
    'IRAQ' => 'Irak',
    'IRELAND' => 'Irska',
    'ISRAEL' => 'Izrael',
    'ITALY' => 'Italija',
    'IVORY COAST' => 'OBALA BJELOKOSTI',
    'JAMAICA' => 'Jamajka',
    'JAPAN' => 'Japan',
    'JORDAN' => 'Jordan',
    'KAZAKHSTAN' => 'Kazakstan',
    'KENYA' => 'Kenija',
    'KOREA' => 'Koreja',
    'KOREA, SOUTH' => 'JUŽNA KOREJA',
    'KUWAIT' => 'Kuvajt',
    'KYRGYZSTAN' => 'Kirgistan',
    'LAOS' => 'LAOS',
    'LATVIA' => 'Latvija',
    'LEBANON' => 'Libanon',
    'LEEWARD ISLANDS' => 'LEEWARDSKI OTOCI',
    'LESOTHO' => 'Lesoto',
    'LIBYA' => 'Libija',
    'LIECHTENSTEIN' => 'Lihtenštajn',
    'LITHUANIA' => 'Litva',
    'LUXEMBOURG' => 'Luksemburg',
    'MACAO' => 'Makao',
    'MACEDONIA' => 'Makedonija',
    'MADAGASCAR' => 'Madagaskar',
    'MALAWI' => 'Malavi',
    'MALAYSIA' => 'Malezija',
    'MALDIVES' => 'Maldivi',
    'MALI' => 'Mali',
    'MALTA' => 'Malta',
    'MARTINIQUE' => 'Martinik',
    'MAURITANIA' => 'Mauritanija',
    'MAURITIUS' => 'Mauricijus',
    'MELANESIA' => 'Mikronezija',
    'MEXICO' => 'Meksiko',
    'MOLDOVIA' => 'Moldova',
    'MONACO' => 'Monako',
    'MONGOLIA' => 'Mongolija',
    'MOROCCO' => 'Maroko',
    'MOZAMBIQUE' => 'Mozambik',
    'MYANAMAR' => 'Mjanmar',
    'NAMIBIA' => 'Namibija',
    'NEPAL' => 'Nepal',
    'NETHERLANDS' => 'Nizozemska',
    'NETHERLANDS ANTILLES' => 'Nizozemski Antili',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'Nizozemski Antili Neutralna Zona',
    'NEW CALADONIA' => 'Nova Kaladonija',
    'NEW HEBRIDES' => 'Novi Hebridi',
    'NEW ZEALAND' => 'Novi Zeland',
    'NICARAGUA' => 'Nikaragva',
    'NIGER' => 'Niger',
    'NIGERIA' => 'Nigerija',
    'NORFOLK ISLAND' => 'Otok Norfolk',
    'NORWAY' => 'Norveška',
    'OMAN' => 'Oman',
    'OTHER' => 'Ostalo',
    'PACIFIC ISLAND' => 'Pacifički otok',
    'PAKISTAN' => 'Pakistan',
    'PANAMA' => 'Panama',
    'PAPUA NEW GUINEA' => 'Papua Nova Gvineja',
    'PARAGUAY' => 'Paragvaj',
    'PERU' => 'Peru',
    'PHILIPPINES' => 'Filipini',
    'POLAND' => 'Poljska',
    'PORTUGAL' => 'Portugal',
    'PORTUGUESE TIMOR' => 'Istočni Timor',
    'PUERTO RICO' => 'Portoriko',
    'QATAR' => 'Katar',
    'REPUBLIC OF BELARUS' => 'REPUBLIKA BJELORUSIJA',
    'REPUBLIC OF SOUTH AFRICA' => 'JUŽNA AFRIKA',
    'REUNION' => 'Reunion',
    'ROMANIA' => 'Rumunjska',
    'RUSSIA' => 'Rusija',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'RYUKYU OTOČJE',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'Saudijska Arabija',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'Srbija',
    'SEYCHELLES' => 'SEJŠELI',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'Singapur',
    'SLOVAKIA' => 'Slovačka',
    'SLOVENIA' => 'Slovenija',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'Južna Afrika',
    'SOUTH YEMEN' => 'JUŽNI JEMEN',
    'SPAIN' => 'Španjolska',
    'SPANISH SAHARA' => 'ŠPANJOLSKA SAHARA',
    'SRI LANKA' => 'ŠRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'SVETA LUCIJA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'JUG AFRIKE',
    'SWAZILAND' => 'SVAZILAND',
    'SWEDEN' => 'Švedska',
    'SWITZERLAND' => 'Švicarska',
    'SYRIA' => 'Sirija',
    'TAIWAN' => 'Tajvan',
    'TAJIKISTAN' => 'TADŽIKISTAN',
    'TANZANIA' => 'TANZANIJA',
    'THAILAND' => 'Tajland',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'Tunis',
    'TURKEY' => 'Turska',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'Ukrajina',
    'UNITED ARAB EMIRATES' => 'UJEDINJENI ARAPSKI EMIRATI',
    'UNITED KINGDOM' => 'Ujedinjena Kraljevina',
    'URUGUAY' => 'Urugvaj',
    'US PACIFIC ISLAND' => 'AMERIČKI PACIFIČKI OTOK',
    'US VIRGIN ISLANDS' => 'AMERIČKI DJEVIČANSKI OTOCI',
    'USA' => 'SJEDINJENE AMERIČKE DRŽAVE',
    'UZBEKISTAN' => 'Uzbekistan',
    'VANUATU' => 'Vanuatu',
    'VATICAN CITY' => 'Vatikan',
    'VENEZUELA' => 'Venezuela',
    'VIETNAM' => 'Vijetnam',
    'WAKE ISLAND' => 'Otok Wake',
    'WEST INDIES' => 'Karibi',
    'WESTERN SAHARA' => 'Zapadna Sahara',
    'YEMEN' => 'Jemen',
    'ZAIRE' => 'Zair',
    'ZAMBIA' => 'Zambija',
    'ZIMBABWE' => 'Zimbabve',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Tajvan i Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Ćirilica)',
    'CP1252' => 'CP1252 (MS Zapadna Europa i SAD)',
    'EUC-CN' => 'EUC-CN (Pojednostavljeni Kineski GB2312)',
    'EUC-JP' => 'EUC-JP (Japanski Unix)',
    'EUC-KR' => 'EUC-KR (Korejski)',
    'EUC-TW' => 'EUC-TW (Tajvanski)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanski)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korejski)',
    'ISO-8859-1' => 'ISO-8859-1 (Zapadna Europa i SAD)',
    'ISO-8859-2' => 'ISO-8859-2 (Centralna i Istočna Europa)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Ćirilica)',
    'ISO-8859-6' => 'ISO-8859-6 (Arapski)',
    'ISO-8859-7' => 'ISO-8859-7 (Grčki)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrejski)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Ruska ćirilica)',
    'KOI8-U' => 'KOI8-U (Ukrajinska ćirilica)',
    'SJIS' => 'SJIS (MS Japanski)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Alžir',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Afrika/Gaborone',
    'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Afrika/Zelenortski otoci',
    'Africa/Bangui' => 'Afrika/Bangui',
    'Africa/Ndjamena' => 'Afrika/N\'Djamena',
    'Indian/Comoro' => 'Indijski ocean/Komori',
    'Africa/Kinshasa' => 'Afrika/Kinshasa',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Brazzaville' => 'Afrika/Brazzaville',
    'Africa/Abidjan' => 'Afrika/Abidjan',
    'Africa/Djibouti' => 'Afrika/Djibouti',
    'Africa/Cairo' => 'Afrika/Cairo',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Asmera' => 'Afrika/Asmera',
    'Africa/Addis_Ababa' => 'Afrika/Addis Abeba',
    'Africa/Libreville' => 'Afrika/Libreville',
    'Africa/Banjul' => 'Afrika/Banjul',
    'Africa/Accra' => 'Afrika/Asmera',
    'Africa/Conakry' => 'Afrika/Cairo',
    'Africa/Bissau' => 'Afrika/Bissau',
    'Africa/Nairobi' => 'Afrika/Nairobi',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monrovia',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Indian/Antananarivo' => 'Indijski ocean/Antanarivo',
    'Africa/Blantyre' => 'Afrika/Blantyre',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Nouakchott' => 'Afrika/Nouakchott',
    'Indian/Mauritius' => 'Indijski ocean/Mauricijus',
    'Indian/Mayotte' => 'Indijski ocean/Mayotte',
    'Africa/Casablanca' => 'Afrika/Casablanca',
    'Africa/El_Aaiun' => 'Afrika/El Aaiun',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Windhoek' => 'Afrika/Windhoek',
    'Africa/Niamey' => 'Afrika/N\'Djamena',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Indian/Reunion' => 'Indijski ocean/Reunion',
    'Africa/Kigali' => 'Afrika/Tripoli',
    'Atlantic/St_Helena' => 'Atlantik/Sveta Helena',
    'Africa/Sao_Tome' => 'Afrika/Sveti Toma i Princip',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Indian/Mahe' => 'Indijski ocean/Mahe',
    'Africa/Freetown' => 'Afrika/Freetown',
    'Africa/Mogadishu' => 'Afrika/Mogadishu',
    'Africa/Johannesburg' => 'Afrika/Johannesburg',
    'Africa/Khartoum' => 'Afrika/Khartoum',
    'Africa/Mbabane' => 'Afrika/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar-es-Salaam',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Tunis' => 'Afrika/Tunis',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Harare',
    'Antarctica/Casey' => 'Antartika/Casey',
    'Antarctica/Davis' => 'Antartika/Davis',
    'Antarctica/Mawson' => 'Antartika/Mawson',
    'Indian/Kerguelen' => 'Indijski ocean/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antartika/Dumont d\'Urville',
    'Antarctica/Syowa' => 'Antartika/Syowa',
    'Antarctica/Vostok' => 'Antartika/Vostok',
    'Antarctica/Rothera' => 'Antartika/Rothera',
    'Antarctica/Palmer' => 'Antartika/Palmer',
    'Antarctica/McMurdo' => 'Antartika/McMurdo',
    'Asia/Kabul' => 'Azija/Kabul',
    'Asia/Yerevan' => 'Azija/Yerevan',
    'Asia/Baku' => 'Azija/Baku',
    'Asia/Bahrain' => 'Azija/Bahrein',
    'Asia/Dhaka' => 'Azija/Dhaka',
    'Asia/Thimphu' => 'Azija/Thimphu',
    'Indian/Chagos' => 'Indijski ocean/Chagos',
    'Asia/Brunei' => 'Azija/Brunej',
    'Asia/Rangoon' => 'Azija/Rangoon',
    'Asia/Phnom_Penh' => 'Azija/Phnom Penh',
    'Asia/Beijing' => 'Azija/Peking',
    'Asia/Harbin' => 'Azija/Harbin',
    'Asia/Shanghai' => 'Azija/Šangaj',
    'Asia/Chongqing' => 'Azija/Chongqing',
    'Asia/Urumqi' => 'Azija/Urumqi',
    'Asia/Kashgar' => 'Azija/Kashgar',
    'Asia/Hong_Kong' => 'Azija/Hong Kong',
    'Asia/Taipei' => 'Azija/Taipei',
    'Asia/Macau' => 'Azija/Makao',
    'Asia/Nicosia' => 'Azija/Nicosia',
    'Asia/Tbilisi' => 'Azija/Tbilisi',
    'Asia/Dili' => 'Azija/Dili',
    'Asia/Calcutta' => 'Azija/Kolkata',
    'Asia/Jakarta' => 'Azija/Džakarta',
    'Asia/Pontianak' => 'Azija/Pontianak',
    'Asia/Makassar' => 'Azija/Makasar',
    'Asia/Jayapura' => 'Azija/Jayapura',
    'Asia/Tehran' => 'Azija/Teheran',
    'Asia/Baghdad' => 'Azija/Bagdad',
    'Asia/Jerusalem' => 'Azija/Jeruzalem',
    'Asia/Tokyo' => 'Azija/Tokio',
    'Asia/Amman' => 'Azija/Amman',
    'Asia/Almaty' => 'Azija/Almati',
    'Asia/Qyzylorda' => 'Azija/Kizilorda',
    'Asia/Aqtobe' => 'Azija/Aktobe',
    'Asia/Aqtau' => 'Azija/Aktau',
    'Asia/Oral' => 'Asia/Uralsk',
    'Asia/Bishkek' => 'Azija/Biškek',
    'Asia/Seoul' => 'Azija/Seul',
    'Asia/Pyongyang' => 'Azija/Pjongjang',
    'Asia/Kuwait' => 'Azija/Kuwait',
    'Asia/Vientiane' => 'Azija/Vientiane',
    'Asia/Beirut' => 'Azija/Beirut',
    'Asia/Kuala_Lumpur' => 'Azija/Kuala Lumpur',
    'Asia/Kuching' => 'Azija/Kuching',
    'Indian/Maldives' => 'Indijski ocean/Maldivi',
    'Asia/Hovd' => 'Azija/Khovd',
    'Asia/Ulaanbaatar' => 'Azija/Ulan Bator',
    'Asia/Choibalsan' => 'Azija/Choibalsan',
    'Asia/Katmandu' => 'Azija/Katmandu',
    'Asia/Muscat' => 'Azia/Muskat',
    'Asia/Karachi' => 'Azija/Karachi',
    'Asia/Gaza' => 'Azija/Gaza',
    'Asia/Manila' => 'Azija/Manila',
    'Asia/Qatar' => 'Azija/Katar',
    'Asia/Riyadh' => 'Azija/Rijad',
    'Asia/Singapore' => 'Azija/Singapur',
    'Asia/Colombo' => 'Azija/Colombo',
    'Asia/Damascus' => 'Azija/Damask',
    'Asia/Dushanbe' => 'Azija/Dušanbe',
    'Asia/Bangkok' => 'Azija/Bangkok',
    'Asia/Ashgabat' => 'Azija/Ašgabat',
    'Asia/Dubai' => 'Azija/Dubai',
    'Asia/Samarkand' => 'Azija/Samarkand',
    'Asia/Tashkent' => 'Azija/Taškent',
    'Asia/Saigon' => 'Azija/Ho Ši Min',
    'Asia/Aden' => 'Azija/Aden',
    'Australia/Darwin' => 'Australija/Darwin',
    'Australia/Perth' => 'Australija/Perth',
    'Australia/Brisbane' => 'Australija/Brisbane',
    'Australia/Lindeman' => 'Australija/Lindeman',
    'Australia/Adelaide' => 'Australija/Adelaide',
    'Australia/Hobart' => 'Australija/Hobart',
    'Australia/Currie' => 'Australija/Currie',
    'Australia/Melbourne' => 'Australija/Melbourne',
    'Australia/Sydney' => 'Australija/Sydney',
    'Australia/Broken_Hill' => 'Australija/Broken Hill',
    'Indian/Christmas' => 'Indijski ocean/Božični otoci',
    'Pacific/Rarotonga' => 'Tihi ocean/Rarotonga',
    'Indian/Cocos' => 'Indijski ocean/Kokosovi otoci',
    'Pacific/Fiji' => 'Tihi ocean/Fidži',
    'Pacific/Gambier' => 'Tihi ocean/Gambier',
    'Pacific/Marquesas' => 'Tihi ocean/Markižansko otočje',
    'Pacific/Tahiti' => 'Tihi ocean/Tahiti',
    'Pacific/Guam' => 'Tihi ocean/Guam',
    'Pacific/Tarawa' => 'Tihi ocean/Tarawa',
    'Pacific/Enderbury' => 'Tihi ocean/Enderbury',
    'Pacific/Kiritimati' => 'Tihi ocean/Kiritimati',
    'Pacific/Saipan' => 'Tihi ocean/Saipan',
    'Pacific/Majuro' => 'Tihi ocean/Majuro',
    'Pacific/Kwajalein' => 'Tihi ocean/Kwajalein',
    'Pacific/Truk' => 'Tihi ocean/Truk',
    'Pacific/Pohnpei' => 'Tihi ocean/Pohnpei',
    'Pacific/Kosrae' => 'Tihi ocean/Kosrae',
    'Pacific/Nauru' => 'Tihi ocean/Nauru',
    'Pacific/Noumea' => 'Tihi ocean/Noumea',
    'Pacific/Auckland' => 'Tihi ocean/Auckland',
    'Pacific/Chatham' => 'Tihi ocean/Chatham',
    'Pacific/Niue' => 'Tihi ocean/Niue',
    'Pacific/Norfolk' => 'Tihi ocean/Norfolk',
    'Pacific/Palau' => 'Tihi ocean/Palau',
    'Pacific/Port_Moresby' => 'Tihi ocean/Port Moresby',
    'Pacific/Pitcairn' => 'Tihi ocean/Pitcairn',
    'Pacific/Pago_Pago' => 'Tihi ocean/Pago Pago',
    'Pacific/Apia' => 'Tihi ocean/Apia',
    'Pacific/Guadalcanal' => 'Tihi ocean/Guadalcanal',
    'Pacific/Fakaofo' => 'Tihi ocean/Fakaofo',
    'Pacific/Tongatapu' => 'Tihi ocean/Tongatapu',
    'Pacific/Funafuti' => 'Tihi ocean/Funafuti',
    'Pacific/Johnston' => 'Tihi ocean/Johnston',
    'Pacific/Midway' => 'Tihi ocean/Midway',
    'Pacific/Wake' => 'Tihi ocean/Wake',
    'Pacific/Efate' => 'Tihi ocean/Efate',
    'Pacific/Wallis' => 'Tihi ocean/Wallis',
    'Europe/London' => 'Europa/London',
    'Europe/Dublin' => 'Europa/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europa/Tirana',
    'Europe/Andorra' => 'Europa/Andora',
    'Europe/Vienna' => 'Europa/Beč',
    'Europe/Minsk' => 'Europa/Minsk',
    'Europe/Brussels' => 'Europa/Bruxelles',
    'Europe/Sofia' => 'Europa/Sofija',
    'Europe/Prague' => 'Europa/Prag',
    'Europe/Copenhagen' => 'Europa/Kopenhagen',
    'Atlantic/Faeroe' => 'Atlantski ocean/Farski otoci',
    'America/Danmarkshavn' => 'Amerika/Danmark Havn',
    'America/Scoresbysund' => 'Amerika/Ittoqqortoormiit',
    'America/Godthab' => 'Amerika/Nuuk',
    'America/Thule' => 'Amerika/Qaanaaq',
    'Europe/Tallinn' => 'Europa/Talin',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Paris',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibraltar',
    'Europe/Athens' => 'Europa/Atena',
    'Europe/Budapest' => 'Europa/Budimpešta',
    'Atlantic/Reykjavik' => 'Atlantski ocean/Reykjavik',
    'Europe/Rome' => 'Europa/Rim',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europa/Vilnius',
    'Europe/Luxembourg' => 'Europa/Luksemburg',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europa/Kišinjev',
    'Europe/Monaco' => 'Europa/Monako',
    'Europe/Amsterdam' => 'Europa/Amsterdam',
    'Europe/Oslo' => 'Europa/Oslo',
    'Europe/Warsaw' => 'Europa/Varšava',
    'Europe/Lisbon' => 'Europa/Lisabon',
    'Atlantic/Azores' => 'Atlantski ocean/Azori',
    'Atlantic/Madeira' => 'Atlantski ocean/Madeira',
    'Europe/Bucharest' => 'Europa/Bukurešt',
    'Europe/Kaliningrad' => 'Europa/Kalinjingrad',
    'Europe/Moscow' => 'Europa/Moskva',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Azija/Jekaterinburg',
    'Asia/Omsk' => 'Azija/Omsk',
    'Asia/Novosibirsk' => 'Azija/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Azija/Krasnojarsk',
    'Asia/Irkutsk' => 'Azija/Irkutsk',
    'Asia/Yakutsk' => 'Azija/Jakutsk',
    'Asia/Vladivostok' => 'Azija/Vladivostok',
    'Asia/Sakhalin' => 'Azija/Sahalin',
    'Asia/Magadan' => 'Azija/Magadan',
    'Asia/Kamchatka' => 'Azija/Kamčatka',
    'Asia/Anadyr' => 'Azija/Anadir',
    'Europe/Belgrade' => 'Europa/Beograd',
    'Europe/Madrid' => 'Europa/Madrid',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Atlantic/Canary' => 'Atlantski ocean/Kanari',
    'Europe/Stockholm' => 'Europa/Stockholm',
    'Europe/Zurich' => 'Europa/Zurich',
    'Europe/Istanbul' => 'Europa/Istanbul',
    'Europe/Kiev' => 'Europa/Kijev',
    'Europe/Uzhgorod' => 'Europa/Užgorod',
    'Europe/Zaporozhye' => 'Europa/Zaporožje',
    'Europe/Simferopol' => 'Europa/Simferopolj',
    'America/New_York' => 'Amerika/New York',
    'America/Chicago' => 'Amerika/Chicago',
    'America/North_Dakota/Center' => 'Amerika/Sjeverna Dakota/Center',
    'America/Denver' => 'Amerika/Denver',
    'America/Los_Angeles' => 'Amerika/Los Angeles',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Yakutat' => 'Amerika/Yakutat',
    'America/Anchorage' => 'Amerika/Anchorage',
    'America/Nome' => 'Amerika/Nome',
    'America/Adak' => 'Amerika/Adak',
    'Pacific/Honolulu' => 'Tihi ocean/Honolulu',
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
    'America/St_Johns' => 'Amerika/St. Johns',
    'America/Goose_Bay' => 'Amerika/Goose Bay',
    'America/Halifax' => 'Amerika/Halifax',
    'America/Glace_Bay' => 'Amerika/Glace Bay',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Thunder_Bay' => 'Amerika/Thunder Bay',
    'America/Nipigon' => 'Amerika/Nipigon',
    'America/Rainy_River' => 'Amerika/Rainy River',
    'America/Winnipeg' => 'Amerika/Winnipeg',
    'America/Regina' => 'Amerika/Regina',
    'America/Swift_Current' => 'Amerika/Swift Current',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Vancouver' => 'Amerika/Vancouver',
    'America/Dawson_Creek' => 'Amerika/Dawson Creek',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Iqaluit' => 'Amerika/Iqaluit',
    'America/Coral_Harbour' => 'Amerika/Coral Harbour',
    'America/Rankin_Inlet' => 'Amerika/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amerika/Cambridge Bay',
    'America/Yellowknife' => 'Amerika/Yellowknife',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Whitehorse' => 'Amerika/Whitehorse',
    'America/Dawson' => 'Amerika/Dawson',
    'America/Cancun' => 'Amerika/Kankun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Monterrey',
    'America/Mexico_City' => 'Amerika/Ciudad de Mexico',
    'America/Chihuahua' => 'Amerika/Chihuahua',
    'America/Hermosillo' => 'Amerika/Hermosillo',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Tijuana' => 'Amerika/Tijuana',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Nassau' => 'Amerika/Nassau',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belize' => 'Amerika/Belize',
    'Atlantic/Bermuda' => 'Amerika/Bermuda',
    'America/Cayman' => 'Amerika/Kajmanski otoci',
    'America/Costa_Rica' => 'Amerika/Kostarika',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominika',
    'America/Santo_Domingo' => 'Amerika/Santo Domingo',
    'America/El_Salvador' => 'Amerika/Salvador',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Gvadalupa',
    'America/Guatemala' => 'Amerika/Gvatemala',
    'America/Port-au-Prince' => 'Amerika/Port-au-Prince',
    'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
    'America/Jamaica' => 'Amerika/Jamajka',
    'America/Martinique' => 'Amerika/Martinique',
    'America/Montserrat' => 'Amerika/Montserrat',
    'America/Managua' => 'Amerika/Managua',
    'America/Panama' => 'Amerika/Panama',
    'America/Puerto_Rico' => 'Amerika/Portoriko',
    'America/St_Kitts' => 'Amerika/Sveti Kits',
    'America/St_Lucia' => 'Amerika/Sveta Lucija',
    'America/Miquelon' => 'Amerika/Mikelon',
    'America/St_Vincent' => 'Amerika/Sveti Vincent',
    'America/Grand_Turk' => 'Amerika/Grand Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/Saint Thomas',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amerika/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'Amerika/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'Amerika/Argentina/La Rioja',
    'America/Argentina/San_Juan' => 'Amerika/Argentina/San Juan',
    'America/Argentina/Jujuy' => 'Amerika/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'Amerika/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'Amerika/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amerika/Argentina/Ushuaia',
    'America/Aruba' => 'Amerika/Aruba',
    'America/La_Paz' => 'Amerika/La Paz',
    'America/Noronha' => 'Amerika/Noronha',
    'America/Belem' => 'Amerika/Belem',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Recife' => 'Amerika/Recife',
    'America/Araguaina' => 'Amerika/Araguaina',
    'America/Maceio' => 'Amerika/Maceio',
    'America/Bahia' => 'Amerika/Bahia',
    'America/Sao_Paulo' => 'Amerika/Sao Paulo',
    'America/Campo_Grande' => 'Amerika/Campo Grande',
    'America/Cuiaba' => 'Amerika/Cuiaba',
    'America/Porto_Velho' => 'Amerika/Porto Velho',
    'America/Boa_Vista' => 'Amerika/Boa Vista',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Eirunepe' => 'Amerika/Eirunepe',
    'America/Rio_Branco' => 'Amerika/Rio Branco',
    'America/Santiago' => 'Amerika/Santiago',
    'Pacific/Easter' => 'Amerika/Uskršnji otok',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Curacao',
    'America/Guayaquil' => 'Amerika/Guayaquil',
    'Pacific/Galapagos' => 'Amerika/Galapagos',
    'Atlantic/Stanley' => 'Amerika/Stanley',
    'America/Cayenne' => 'Amerika/Cayenne',
    'America/Guyana' => 'Amerika/Gvajana',
    'America/Asuncion' => 'Amerika/Asuncion',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlantski ocean/Južna Gruzija',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Port_of_Spain' => 'Amerika/Port-of-Spain',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Caracas' => 'Amerika/',
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
    'Google' => 'Google Kontakti',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Zatraži',
    2 => 'Pristup',
    3 => 'Invalid',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campaign',
    'email' => 'Email',
    'event' => 'Event',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campaign',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campaign',
    'email' => 'Email',
    'event' => 'Event',
    'system' => 'System',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Knowledge Base';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Baza Znanja - Kategorije';
$app_list_strings['aok_status_list']['Draft'] = 'Draft';
$app_list_strings['aok_status_list']['Expired'] = 'Expired';
$app_list_strings['aok_status_list']['In_Review'] = 'In Review';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privatno';
$app_list_strings['aok_status_list']['published_public'] = 'Javno';

$app_list_strings['moduleList']['FP_events'] = 'Događaji';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Lokacije';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Pozvan';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nije pozvan';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Prisustvovano';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nije prisustvovano';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accepted';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Declined';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nema odaziva';

$app_strings['LBL_STATUS_EVENT'] = 'Status pozivnice';
$app_strings['LBL_ACCEPT_STATUS'] = 'Status prihvaćanja';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Odaberi ovu stranicu';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Odaberi sve';
$app_strings['LBL_LISTVIEW_NONE'] = 'Odznači sve';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Događaji Slučaja';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Ažuriranja slučajeva';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Molimo vas odgovorite iznad ove crte ==========';

//aop
$app_list_strings['case_state_default_key'] = 'Otvoren';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'Closed',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'New',
        'Open_Assigned' => 'Assigned',
        'Closed_Closed' => 'Closed',
        'Open_Pending Input' => 'Pending Input',
        'Closed_Rejected' => 'Rejected',
        'Closed_Duplicate' => 'Duplicate',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Pojedinačan korisnik',
        'Account' => 'Korisnik računa',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'System Default',
    'singleUser' => 'Pojedinačan korisnik',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy',
    'random' => 'Nasumično',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Izvještaji';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Uvjeti izvješća';
$app_list_strings['moduleList']['AOR_Charts'] = 'Dijagrami izvješća';
$app_list_strings['moduleList']['AOR_Fields'] = 'Polja izvješća';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Planirani izvještaji';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Jednako';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Različito';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Veće od ili Jednako';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Manje od ili Jednako';
$app_list_strings['aor_operator_list']['Contains'] = 'Contains';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Starts With';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Završava sa';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'G-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-G';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-G';
$app_list_strings['aor_format_options']['Y/m/d'] = 'G/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/G';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/G';
$app_list_strings['aor_format_options']['Y.m.d'] = 'G.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.G';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.G';
$app_list_strings['aor_format_options']['Ymd'] = 'Gmd';
$app_list_strings['aor_format_options']['Y-m'] = 'G-m';
$app_list_strings['aor_format_options']['Y'] = 'G';
$app_list_strings['aor_condition_operator_list']['And'] = 'And';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aor_condition_type_list']['Value'] = 'vrijednost';
$app_list_strings['aor_condition_type_list']['Field'] = 'Polje';
$app_list_strings['aor_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Jedan od';
$app_list_strings['aor_condition_type_list']['Period'] = 'Razdoblje';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Trenutni korisnik';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aor_date_type_list']['hour'] = 'Hours';
$app_list_strings['aor_date_type_list']['day'] = 'Days';
$app_list_strings['aor_date_type_list']['week'] = 'tjedana';
$app_list_strings['aor_date_type_list']['month'] = 'mjeseci';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Radno vrijeme';
$app_list_strings['aor_date_options']['now'] = 'Sad';
$app_list_strings['aor_date_options']['field'] = 'ovo polje';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascending';
$app_list_strings['aor_sort_operator']['DESC'] = 'Descending';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Brojati';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Zbroj';
$app_list_strings['aor_function_list']['AVG'] = 'Prosjek';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Count';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Trakasti grafikon';
$app_list_strings['aor_chart_types']['line'] = 'Linijski grafikon';
$app_list_strings['aor_chart_types']['pie'] = 'Pita grafikon';
$app_list_strings['aor_chart_types']['radar'] = 'Radar grafikon';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Naslagane trake';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grupirane trake';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Monthly';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Weekly';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Daily';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktivan';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inactive';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'User';
$app_list_strings['aor_email_type_list']['Users'] = 'Users';
$app_list_strings['aor_assign_options']['all'] = 'Svi Korisnici';
$app_list_strings['aor_assign_options']['role'] = 'SVI Korisnici u Ulozi';
$app_list_strings['aor_assign_options']['security_group'] = 'SVI Korisnici u Sigurnosnoj Grupi';
$app_list_strings['date_time_period_list']['today'] = 'Today';
$app_list_strings['date_time_period_list']['yesterday'] = 'Jučer';
$app_list_strings['date_time_period_list']['this_week'] = 'Ovaj tjedan';
$app_list_strings['date_time_period_list']['last_week'] = 'Prošli tjedan';
$app_list_strings['date_time_period_list']['last_month'] = 'Last Month';
$app_list_strings['date_time_period_list']['this_month'] = 'This Month';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ovaj kvartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Prošli kvartal';
$app_list_strings['date_time_period_list']['this_year'] = 'Ove godine';
$app_list_strings['date_time_period_list']['last_year'] = 'Prošle godine';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'na';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'na';
$app_strings['LBL_CRON_AT'] = 'na';
$app_strings['LBL_CRON_RAW'] = 'Napredno';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Sat';
$app_strings['LBL_CRON_DAY'] = 'Day';
$app_strings['LBL_CRON_MONTH'] = 'Mjesec';
$app_strings['LBL_CRON_DOW'] = 'Dan u tjednu';
$app_strings['LBL_CRON_DAILY'] = 'Daily';
$app_strings['LBL_CRON_WEEKLY'] = 'Weekly';
$app_strings['LBL_CRON_MONTHLY'] = 'Monthly';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contracts';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Invoices';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Predlošci';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Proizvodi - Kategorije';
$app_list_strings['moduleList']['AOS_Products'] = 'Products';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Stavke';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Grupe stavaka';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Quotes';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analitičar';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kupac';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Tisak';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Potencijalni kupac';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Preprodavač';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Ostalo';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Draft';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Pregovor';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Dostavljeno';
$app_list_strings['quote_stage_dom']['On Hold'] = 'On Hold';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Potvrđeno';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Dobiveno';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Closed Lost';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Nerealizirano';
$app_list_strings['quote_term_dom']['Net 15'] = 'Neto 15 dana';
$app_list_strings['quote_term_dom']['Net 30'] = 'Neto 30 dana';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Odobreno';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Neodobreno';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Postotak';
$app_list_strings['discount_list']['Amount'] = 'Iznos';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analitičar';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kupac';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Tisak';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Potencijalni kupac';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Preprodavač';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Ostalo';
$app_list_strings['invoice_status_dom']['Paid'] = 'Plaćeno';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Neplaćeno';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Odgođeno';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Nefakturirano';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Fakturirano';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptopi';
$app_list_strings['product_category_dom']['Desktops'] = 'Stolna računala';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Roba';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Quotes';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Invoices';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contracts';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Quotes';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Invoices';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contracts';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Tvrtke';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contacts';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Leads';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Not Started';
$app_list_strings['contract_status_list']['In Progress'] = 'In Progress';
$app_list_strings['contract_status_list']['Signed'] = 'Potpisano';
$app_list_strings['contract_type_list']['Type'] = 'Tip';
$app_strings['LBL_PRINT_AS_PDF'] = 'Ispiši kao PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Molim odaberite predložak';
$app_string['LBL_PDF_GENERATION_FAILED'] = 'Unable to generate PDF document. See logs for more info.';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNije pronađen niti jedan predložak.\nMolimo pokrenite Modul PDF Predložaka i stvorite novi';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Tijek Rada';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Uvijeti tijeka rada';
$app_list_strings['moduleList']['AOW_Processed'] = 'Revizija procesa';
$app_list_strings['moduleList']['AOW_Actions'] = 'Radnje tijeka rada';
$app_list_strings['aow_status_list']['Active'] = 'Aktivan';
$app_list_strings['aow_status_list']['Inactive'] = 'Inactive';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'Contains';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Starts With';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Završava sa';
$app_list_strings['aow_operator_list']['is_null'] = 'Je ništavan';
$app_list_strings['aow_process_status_list']['Complete'] = 'Complete';
$app_list_strings['aow_process_status_list']['Running'] = 'Traje';
$app_list_strings['aow_process_status_list']['Pending'] = 'Pending';
$app_list_strings['aow_process_status_list']['Failed'] = 'Failed';
$app_list_strings['aow_condition_operator_list']['And'] = 'And';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aow_condition_type_list']['Value'] = 'Value';
$app_list_strings['aow_condition_type_list']['Field'] = 'Field';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Svaka Promjena';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'U sigurnosnoj grupi';
$app_list_strings['aow_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_action_type_list']['Date'] = 'Datum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Razigravanje';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Najmanje zauzet';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aow_date_type_list']['hour'] = 'Hours';
$app_list_strings['aow_date_type_list']['day'] = 'Days';
$app_list_strings['aow_date_type_list']['week'] = 'Weeks';
$app_list_strings['aow_date_type_list']['month'] = 'Months';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'Today';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Zapiši E-mail';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Povezano polje';
$app_list_strings['aow_email_type_list']['Specify User'] = 'User';
$app_list_strings['aow_email_type_list']['Users'] = 'Users';
$app_list_strings['aow_email_to_list']['to'] = 'To';
$app_list_strings['aow_email_to_list']['cc'] = 'Kopija';
$app_list_strings['aow_email_to_list']['bcc'] = 'Skrivena kopija';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Svi zapisi';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Novi zapisi';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modificirani zapisi';
$app_list_strings['aow_run_when_list']['Always'] = 'Uvijek';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Samo pri spremanju';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Samo u planeru';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projekti - Predlošci';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Predlošci Projektnog Zadatka';
$app_list_strings['relationship_type_list']['FS'] = 'Finalizirati početak';
$app_list_strings['relationship_type_list']['SS'] = 'Započeti početak';
$app_list_strings['duration_unit_dom']['Days'] = 'Days';
$app_list_strings['duration_unit_dom']['Hours'] = 'Hours';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Pogledaj Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Pogledaj detalje';
$app_strings['LBL_CREATE_PROJECT'] = 'Kreiraj projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Geografska dužina';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Geografska širina';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status geokodiranja';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Address';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mape';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Karte - Markeri';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Karte - Područja';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Karte - Memorija adresa';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partneri';

$app_list_strings['map_unit_type_list']['mi'] = 'Milja';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometara';

$app_list_strings['map_module_type_list']['Accounts'] = 'Tvrtke';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_module_type_list']['Cases'] = 'Cases';
$app_list_strings['map_module_type_list']['Leads'] = 'Leads';
$app_list_strings['map_module_type_list']['Meetings'] = 'Meetings';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Opportunities';
$app_list_strings['map_module_type_list']['Project'] = 'Projects';
$app_list_strings['map_module_type_list']['Prospects'] = 'Targets';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Account';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakt';
$app_list_strings['map_relate_type_list']['Cases'] = 'Case';
$app_list_strings['map_relate_type_list']['Leads'] = 'Lead';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Meeting';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Opportunity';
$app_list_strings['map_relate_type_list']['Project'] = 'Project';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Target';

$app_list_strings['marker_image_list']['accident'] = 'Nezgoda';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
$app_list_strings['marker_image_list']['agriculture'] = 'Agrokultura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Mala letjelica';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Zrakoplovni turizam';
$app_list_strings['marker_image_list']['airport'] = 'Zračna luka';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteatar';
$app_list_strings['marker_image_list']['apartment'] = 'Apartman';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvarij';
$app_list_strings['marker_image_list']['arch'] = 'Svod';
$app_list_strings['marker_image_list']['atm'] = 'Bankomat';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banka';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banka Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banka funta';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plaža';
$app_list_strings['marker_image_list']['beautiful'] = 'Lijep';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parkiralište za bicikle';
$app_list_strings['marker_image_list']['big_city'] = 'Velegrad';
$app_list_strings['marker_image_list']['bridge'] = 'Most';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderni most';
$app_list_strings['marker_image_list']['bus'] = 'Autobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Žičara';
$app_list_strings['marker_image_list']['car'] = 'Automobil';
$app_list_strings['marker_image_list']['car_rental'] = 'Iznajmljivanje automobila';
$app_list_strings['marker_image_list']['carrepair'] = 'Popravak automobila';
$app_list_strings['marker_image_list']['castle'] = 'Dvorac';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedrala';
$app_list_strings['marker_image_list']['chapel'] = 'Kapela';
$app_list_strings['marker_image_list']['church'] = 'Crkva';
$app_list_strings['marker_image_list']['city_square'] = 'Gradski trg';
$app_list_strings['marker_image_list']['cluster'] = 'Klaster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Klaster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Klaster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Klaster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Klaster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kava';
$app_list_strings['marker_image_list']['community_centre'] = 'Zajednički centar';
$app_list_strings['marker_image_list']['company'] = 'Kompanija';
$app_list_strings['marker_image_list']['conference'] = 'Conference';
$app_list_strings['marker_image_list']['construction'] = 'Construction';
$app_list_strings['marker_image_list']['convenience'] = 'Pogodnost';
$app_list_strings['marker_image_list']['court'] = 'Sud';
$app_list_strings['marker_image_list']['cruise'] = 'Krstarenje';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Mjenjačnica';
$app_list_strings['marker_image_list']['customs'] = 'Carina';
$app_list_strings['marker_image_list']['cycling'] = 'Bicikliranje';
$app_list_strings['marker_image_list']['dam'] = 'Brana';
$app_list_strings['marker_image_list']['dentist'] = 'Zubar';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Robna kuća';
$app_list_strings['marker_image_list']['disability'] = 'Invalidnost';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Prakiralište za invalide';
$app_list_strings['marker_image_list']['doctor'] = 'Liječnik';
$app_list_strings['marker_image_list']['dog_leash'] = 'Povodac za pse';
$app_list_strings['marker_image_list']['down'] = 'Dolje';
$app_list_strings['marker_image_list']['down_left'] = 'Dolje lijevo';
$app_list_strings['marker_image_list']['down_right'] = 'Dolje desno';
$app_list_strings['marker_image_list']['down_then_left'] = 'Dolje pa lijevo';
$app_list_strings['marker_image_list']['down_then_right'] = 'Dolje pa desno';
$app_list_strings['marker_image_list']['drugs'] = 'Lijekovi';
$app_list_strings['marker_image_list']['elevator'] = 'Dizalo';
$app_list_strings['marker_image_list']['embassy'] = 'Veleposlanstvo';
$app_list_strings['marker_image_list']['expert'] = 'Stučnjak';
$app_list_strings['marker_image_list']['factory'] = 'Tvornica';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Padajuće kamenje';
$app_list_strings['marker_image_list']['fast_food'] = 'Brza prehrana';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Šuma';
$app_list_strings['marker_image_list']['fountain'] = 'Fontana';
$app_list_strings['marker_image_list']['friday'] = 'Friday';
$app_list_strings['marker_image_list']['garden'] = 'Vrt';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzinska postaja';
$app_list_strings['marker_image_list']['geyser'] = 'Gejzir';
$app_list_strings['marker_image_list']['gifts'] = 'Darovi';
$app_list_strings['marker_image_list']['gourmet'] = 'Sladokusac';
$app_list_strings['marker_image_list']['grocery'] = 'Namirnice';
$app_list_strings['marker_image_list']['hairsalon'] = 'Frizerski salon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Autocesta';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Povijesna jezgra';
$app_list_strings['marker_image_list']['home'] = 'Home';
$app_list_strings['marker_image_list']['hospital'] = 'Bolnica';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 zvjezdica';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 zvjezdice';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hote 3 zvjezdice';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 zvjezdice';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hote 5 zvjezdica';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Pravo';
$app_list_strings['marker_image_list']['lake'] = 'Jezero';
$app_list_strings['marker_image_list']['laundromat'] = 'Praonica rublja';
$app_list_strings['marker_image_list']['left'] = 'Lijevo';
$app_list_strings['marker_image_list']['left_then_down'] = 'Lijevo pa dolje';
$app_list_strings['marker_image_list']['left_then_up'] = 'Lijevo pa gore';
$app_list_strings['marker_image_list']['library'] = 'Library';
$app_list_strings['marker_image_list']['lighthouse'] = 'Svjetionik';
$app_list_strings['marker_image_list']['liquor'] = 'Žestoka pića';
$app_list_strings['marker_image_list']['lock'] = 'Ključanica';
$app_list_strings['marker_image_list']['main_road'] = 'Glavna cesta';
$app_list_strings['marker_image_list']['massage'] = 'Masaža';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Toranj za mobitele';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderni toranj';
$app_list_strings['marker_image_list']['monastery'] = 'Samostan';
$app_list_strings['marker_image_list']['monday'] = 'Monday';
$app_list_strings['marker_image_list']['monument'] = 'Spomenik';
$app_list_strings['marker_image_list']['mosque'] = 'Džamija';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocikl';
$app_list_strings['marker_image_list']['museum'] = 'Muzej';
$app_list_strings['marker_image_list']['music_live'] = 'Živa muzika';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Crpilište nafte';
$app_list_strings['marker_image_list']['pagoda'] = 'Nadstrešnica';
$app_list_strings['marker_image_list']['palace'] = 'Palača';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramski';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park i prijevoz';
$app_list_strings['marker_image_list']['parking'] = 'Parkiralište';
$app_list_strings['marker_image_list']['photo'] = 'Photo';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Neposjećena mjesta';
$app_list_strings['marker_image_list']['places_visited'] = 'Posjećena mjesta';
$app_list_strings['marker_image_list']['playground'] = 'Igralište';
$app_list_strings['marker_image_list']['police'] = 'Policija';
$app_list_strings['marker_image_list']['port'] = 'Luka';
$app_list_strings['marker_image_list']['postal'] = 'Pošta';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Dalekovod';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektrana';
$app_list_strings['marker_image_list']['power_substation'] = 'Trafostanica';
$app_list_strings['marker_image_list']['public_art'] = 'Javna Umjetnost';
$app_list_strings['marker_image_list']['rain'] = 'Kiša';
$app_list_strings['marker_image_list']['real_estate'] = 'Nekretnina';
$app_list_strings['marker_image_list']['regroup'] = 'Regrupiranje';
$app_list_strings['marker_image_list']['resort'] = 'Boravište';
$app_list_strings['marker_image_list']['restaurant'] = 'Restoran';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Afrički restoran';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Roštilj restoran';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Bifet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Kineski restoran';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Riblji restoran';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Riblji čips restoran';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gurmanski restoran';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Grčki restoran';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indijski restoran';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Talijanski restoran';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japanski restoran';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab restoran';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Korejski restoran';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Mediteranski restoran';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Meksički restoran';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantični restoran';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Tajlandski restoran';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Turski restoran';
$app_list_strings['marker_image_list']['right'] = 'Desno';
$app_list_strings['marker_image_list']['right_then_down'] = 'Desno pa dolje';
$app_list_strings['marker_image_list']['right_then_up'] = 'Desno pa gore';
$app_list_strings['marker_image_list']['saturday'] = 'Saturday';
$app_list_strings['marker_image_list']['school'] = 'Škola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Trgovački centar';
$app_list_strings['marker_image_list']['shore'] = 'Obala';
$app_list_strings['marker_image_list']['sight'] = 'Vidik';
$app_list_strings['marker_image_list']['small_city'] = 'Mali grad';
$app_list_strings['marker_image_list']['snow'] = 'Snijeg';
$app_list_strings['marker_image_list']['spaceport'] = 'Svemirska luka';
$app_list_strings['marker_image_list']['speed_100'] = 'Brzina 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Brzina 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Brzina 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Brzina 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Brzina 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Brzina 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Brzina 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Brzina 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Brzina 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Brzina 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Brzina 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Brzina 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Izbočina';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Kip';
$app_list_strings['marker_image_list']['steam_train'] = 'Parni vlak';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Zaustavno svijetlo';
$app_list_strings['marker_image_list']['subway'] = 'Podzemna';
$app_list_strings['marker_image_list']['sun'] = 'Sun';
$app_list_strings['marker_image_list']['sunday'] = 'Sunday';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Put za taksi';
$app_list_strings['marker_image_list']['teahouse'] = 'Čajdžinica';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hinduistički hram';
$app_list_strings['marker_image_list']['terrace'] = 'Terasa';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Kazalište';
$app_list_strings['marker_image_list']['theme_park'] = 'Lunapark';
$app_list_strings['marker_image_list']['thursday'] = 'Thursday';
$app_list_strings['marker_image_list']['toilets'] = 'WC';
$app_list_strings['marker_image_list']['toll_station'] = 'Naplatna postaja';
$app_list_strings['marker_image_list']['tower'] = 'Toranj';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Prometna kamera';
$app_list_strings['marker_image_list']['train'] = 'Vlak';
$app_list_strings['marker_image_list']['tram'] = 'Tramvaj';
$app_list_strings['marker_image_list']['truck'] = 'Kamion';
$app_list_strings['marker_image_list']['tuesday'] = 'Tuesday';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunel';
$app_list_strings['marker_image_list']['turn_left'] = 'Skrenite lijevo';
$app_list_strings['marker_image_list']['turn_right'] = 'Skrenite desno';
$app_list_strings['marker_image_list']['university'] = 'Sveučilište';
$app_list_strings['marker_image_list']['up'] = 'Gore';
$app_list_strings['marker_image_list']['up_left'] = 'Gore Lijevo';
$app_list_strings['marker_image_list']['up_right'] = 'Gore Desno';
$app_list_strings['marker_image_list']['up_then_left'] = 'Gore pa Lijevo';
$app_list_strings['marker_image_list']['up_then_right'] = 'Gore pa Desno';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Vila';
$app_list_strings['marker_image_list']['water'] = 'Voda';
$app_list_strings['marker_image_list']['waterfall'] = 'Vodopad';
$app_list_strings['marker_image_list']['watermill'] = 'Mlin';
$app_list_strings['marker_image_list']['waterpark'] = 'Vodeni park';
$app_list_strings['marker_image_list']['watertower'] = 'Vodeni toranj';
$app_list_strings['marker_image_list']['wednesday'] = 'Wednesday';
$app_list_strings['marker_image_list']['wifi'] = 'Bežični internet';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Turbina za vjetar';
$app_list_strings['marker_image_list']['windmill'] = 'Vjetrenjača';
$app_list_strings['marker_image_list']['winery'] = 'Vinarija';
$app_list_strings['marker_image_list']['work_office'] = 'Ured';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Svjetska kulturna baština';
$app_list_strings['marker_image_list']['zoo'] = 'Zoološki vrt';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Izvan ureda';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Na sastanku';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Napravi novi raspored';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Molim unesite podatke o novom rasporedu';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Datum:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Razlog:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Molim odaberite važeći datum';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Molim odaberite razlog';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Povijest pokušaja poziva';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Pokušaji poziva';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Upravljanje sigurnosnim postavkama';
$app_strings['LBL_SECURITYGROUP'] = 'Sigurnosna grupa';
$app_strings['LBL_ROLE'] = 'Uloga';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Izlazni računi e-pošte';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';
$app_list_strings['moduleList']['ManualMigrationTasks'] = 'Migrations';
$app_list_strings['moduleList']['Processes'] = 'Processes';
$app_list_strings['moduleList']['AsyncTaskItems'] = 'Async Task Item';

$app_strings['LNK_USER_MENU_PROCESSES'] = 'Processes';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Detalji društvenih kanala';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Dodaj tab';
$app_strings['LBL_EDIT_TAB'] = 'Uredi kartice';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Unesite naziv nadzorne ploče';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Broj stupaca';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Jeste li sigurni želite li izbrisati';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'nadzornu ploču?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Dodaj stranicu nadzorne ploče';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Uklonite trenutnu stranicu nadzorne ploče';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Preimenuj stranicu nadzorne ploče';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Tasks',
    'Meetings' => 'Meetings',
    'Calls' => 'Calls',
    'Notes' => 'Notes',
    'Emails' => 'Emails'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Uređivač dijela predloška';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Kliknuli ste dalje od polja koje ste uređivali bez da ste ga spremili. Kliknite u redu ako želite izgubiti promjenu ili odustani ako želite nastaviti s uređivanjem";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Došlo je do pogreške prilikom učitavanja polja. Moguće da je istekla vaša sesija. Prijavite se ponovo kako biste to ispravili";

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Business Hours';
$app_list_strings['business_hours_list']['0'] = '00:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '12:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Monday';
$app_list_strings['day_list']['Tuesday'] = 'Tuesday';
$app_list_strings['day_list']['Wednesday'] = 'Wednesday';
$app_list_strings['day_list']['Thursday'] = 'Thursday';
$app_list_strings['day_list']['Friday'] = 'Friday';
$app_list_strings['day_list']['Saturday'] = 'Saturday';
$app_list_strings['day_list']['Sunday'] = 'Sunday';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Pismo';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Pravni';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portret';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Pejzaž';


$app_list_strings['moduleList']['SurveyResponses'] = 'Odgovori ankete';
$app_list_strings['moduleList']['Surveys'] = 'Ankete';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Odgovori na anketno pitanje';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Anketna pitanja';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Opcije anketnih pitanja';
$app_list_strings['survey_status_list']['Draft'] = 'Draft';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Closed';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Tekstni okvir';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Potvrdni okvir';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Padajući izbornik';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Višestruki izbornik';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matriks';
$app_list_strings['surveys_question_type']['DateTime'] = 'Datum i vrijeme';
$app_list_strings['surveys_question_type']['Date'] = 'Datum';
$app_list_strings['surveys_question_type']['Scale'] = 'Skala';
$app_list_strings['surveys_question_type']['Rating'] = 'Rating';
$app_list_strings['surveys_matrix_options'][0] = 'Zadovoljan/a';
$app_list_strings['surveys_matrix_options'][1] = 'Niti Zadovoljan/a niti Nezadovoljan/a';
$app_list_strings['surveys_matrix_options'][2] = 'Nezadavoljan/a';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Čeka potvrdu prijave, potvrda prijave nije poslana';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Slanje potvrdne e-poštu za uključenje je neuspjelo';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Čeka potvrdu prijave, potvrda prijave poslana';
$app_strings['LBL_OPT_IN'] = 'Uključen u';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Uključenje potvrđeno';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Opted Out';
$app_strings['LBL_OPT_IN_INVALID'] = 'Invalid';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Disabled',
    'opt-in' => 'Uključiti u',
    'confirmed-opt-in' => 'Opt-In Potvrđen'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Nije uključeno',
    'opt-in' => 'Uključiti u',
    'confirmed-opt-in' => 'Opt-In Potvrđen'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'E-pošta za potvrdu uključenja dodana je u red slanja za %s adrese e-pošte. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Slanje e-pošte nije moguće jer %s e-pošta nije uključena. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s adresa e-pošte nema važeći Id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Provjera autentičnosti s dva faktora nije uspjela';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Kod autentifikacije s dva faktora je poslan.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Neuspješno slanje koda autentifikacije s dva faktora.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Zahvaljujemo na vašem interesu.';

$app_strings['ERR_IP_CHANGE'] = 'Sesija je prekinuta zbog značajne promjene vaše IP adrese';
$app_strings['ERR_RETURN'] = 'Povratak na početnu stranicu';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Dodjela lozinke',
    'client_credentials' => 'Akreditacija klijenta',
    'implicit' => 'Implicitan',
    'authorization_code' => 'Kod autorizacije'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minuta',
    'hour' => 'sati',
    'day' => 'days',
    'week' => 'tjedni',
    'month' => 'mjeseci',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Pretraga (nova)',
    'UnifiedSearch' => 'Globalna objedinjena pretraga (naslijeđeno)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personal',
    'shared' => 'Dijeljeno',
    'group' => 'Group',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Spojeno',
    'failed' => 'Failed',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'In Progress',
    'success' => 'Success',
    'warning' => 'Upozorenje',
    'error' => 'Greška',
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
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API Greška.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api verzija: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Provjerite popunjenost svih obveznih polja';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API očekuje da tijelo zahtjeva bude JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Nije moguće provjeriti zahtjev Json Api tereta';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Nije moguće provjeriti odgovor Json Api tereta';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API ne može pronaći resurs';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API očekuje da će zaglavlje "Accept" biti application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API očekuje da će zaglavlje "Content-Type" biti application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Obavijesti radne površine sada su omogućene za ovaj web preglednik.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Obavijesti radne površine onemogućene su za ovaj web preglednik. Upotrijebite postavke web preglednika da biste ih ponovo omogućili.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Ovaj web preglednik ne podržava obavijesti radne površine.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Došlo je do pogreške: ';
$app_strings['LBL_CLICK_HERE'] = 'Kliknite ovdje';
$app_strings['LBL_TO_CONTINUE'] = ' nastaviti.';
$app_strings['LBL_OPT_OUT'] = 'Isključivanje';
$app_strings['LBL_INVALID_EMAIL'] = 'Invalid';
$app_strings['LBL_PRIMARY'] = 'Primary';
$app_strings['LBL_EMAIL_ADDRESS'] = 'Email Address';

$app_strings['IMAP_HANDLER_ERROR'] = 'GREŠKA: {error}; ključ je bio: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'U redu: postavke ispitivanja promijenjene su u "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Nevažeći zahtjev, koristite vrijednost "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Dogodila se nepoznata greška, tipka "{key}" nije spremljena.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Postavke testa ne postoje.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Ključ nije pronađen.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Greška kod spremanja ključa.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Nepoznata greška';
$app_strings['LBL_SEARCH_TITLE']                   = 'Search';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Kriteriji pretraživanja';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Search';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Search';
$app_strings['LBL_SEARCH_QUERY']                   = 'Upit za pretraživanje: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Podprogrami: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Ukupno rezultatata: ';
$app_strings['LBL_SEARCH_PREV'] = 'Previous';
$app_strings['LBL_SEARCH_NEXT'] = 'Next';
$app_strings['LBL_SEARCH_PAGE'] = 'Stranica ';
$app_strings['LBL_SEARCH_OF'] = ' od ';
$app_strings['LBL_INSIGHTS'] = 'Insights';
$app_strings['LBL_CHARTS'] = 'Charts';
$app_strings['LBL_CHART_NOT_FOUND'] = 'Chart not found';
$app_strings['LBL_NO_DATA'] = 'Nema podatka';
$app_strings['LBL_ERROR_FETCHING_METADATA'] = 'Error occurred while fetching metadata';
$app_strings['LBL_TOTAL'] = 'Total';
$app_strings['LBL_ACTIONS'] = 'Actions';
$app_strings['LBL_SELECT_SUBPANEL_BANNER'] = 'Select which subpanels to view';
$app_strings['LBL_SELECT_ITEM'] = 'Select an item';
$app_strings['LBL_ITEMS_SELECTED'] = 'items selected';
$app_strings['LBL_WIDGET_NOT_FOUND'] = 'Widget not found';
$app_strings['LBL_BAD_CONFIG'] = 'Incorrect configuration';
$app_strings['LBL_CONFIG_BAD_CONTEXT'] = 'Incorrect configuration: context not properly configured';
$app_strings['LBL_CONFIG_NO_CONFIG'] = 'Incorrect configuration: missing config';
$app_strings['LBL_CONFIG_NO_STATISTICS_KEY'] = 'Incorrect configuration: missing statistics key';
$app_strings['LBL_STATISTIC_ERROR'] = 'Error loading statistic';
$app_strings['LBL_STATISTIC_ERROR_DESC'] = 'Error loading statistic';
$app_strings['LBL_STATISTIC_ERROR_DESC_TOOLTIP'] = 'Error loading statistic. Please contact your administrator';
$app_strings['LBL_AVERAGE_CLOSED_WON_PER_YEAR'] = 'Average Won Opportunity Per Year';
$app_strings['LBL_OPPORTUNITIES_TOTAL'] = 'Total Opportunity Value';
$app_strings['LBL_CASE_TOTAL_DAYS_OPEN'] = 'Total Days Open';
$app_strings['LBL_DAYS_OPEN'] = 'Days Open';
$app_strings['LBL_DAYS_IN_SALE_STAGE'] = 'DAY(S) THIS OPPORTUNITY HAS BEEN AT THIS SALES STAGE';
$app_strings['LBL_STAT_DAYS'] = 'Day(s)';
$app_strings['LBL_CLOSED_PER_YEAR'] = 'Closed Per Year';
$app_strings['LBL_WAS_OPEN'] = 'This Case was Open For';
$app_strings['LBL_HAS_BEEN_OPEN'] = 'This Case has been Open For';
$app_strings['LBL_NUMBER_OF_CASES_PER_ACCOUNT'] = 'Number of Cases Per Account';
$app_strings['LBL_TOTAL_CASES_FOR_THIS_ACCOUNT'] = 'Total Cases For This Account';
$app_strings['LBL_NONE_OUTSTANDING'] = 'None';
$app_strings['LBL_VALIDATION_ERROR_REQUIRED'] = 'Missing required field: {{fields.field.label}}';
$app_strings['LBL_VALIDATION_ERROR_ATTACHMENT'] = 'File attachment(s) not valid.';
$app_strings['LBL_VALIDATION_ERROR_CURRENCY_FORMAT'] = "Invalid currency format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_INT_FORMAT'] = "Invalid int format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_FLOAT_FORMAT'] = "Invalid float format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATE_FORMAT'] = "Invalid date format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATETIME_FORMAT'] = "Invalid datetime format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_UNSUBSCRIBE_LINK'] = "Non-Transactional Emails must contain an unsubscribe link. Please add an opt out tracker, '{{ unsubscribe_link }}' or select the icon: ";
$app_strings['LBL_VALIDATION_ERROR_REMOVE_UNSUBSCRIBE_LINK'] = "Transactional Emails must NOT contain an unsubscribe link. Please remove '{{ unsubscribe_link }}'";
$app_strings['LBL_VALIDATION_ERROR_EMAIL_FORMAT'] = "Invalid email format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_PHONE_FORMAT'] = "Invalid phone format.";
$app_strings['LBL_VALIDATION_ERROR_MIN'] = "Invalid value. Value must greater or equal to '{{context.min}}'";
$app_strings['LBL_VALIDATION_ERROR_VERSIONING'] = "Invalid format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_MAX'] = "Invalid value. Value must smaller or equal to '{{context.max}}'";
$app_strings['LBL_MULTIPLE_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Only one Valid Email Address should be marked as primary";
$app_strings['LBL_DUPLICATE_EMAIL_VALIDATION_ERROR'] = "Duplicate email addresses are not allowed";
$app_strings['LBL_NO_PRIMARY_EMAIL_VALIDATION_ERROR'] = "One Valid Email Address should be marked as primary";
$app_strings['LBL_NO_EM_ID'] = 'Unable to get Email Marketing ID';
$app_strings['LBL_VALIDATION_ERRORS'] = 'There are validation errors, unable to perform action.';
$app_strings['LBL_LOADING_IN_PROGRESS'] = 'The calculation is currently in progress, please wait a few moments before trying again.';
$app_strings['LBL_SELECT_EMAIL_FOR_TEST'] = 'Please Select Targets/ Users or Enter an Email';
$app_strings['LBL_TYPE_TO_SEARCH'] = 'Type to search...';
$app_strings['LBL_SEARCHING'] = 'searching...';
$app_strings['LBL_NOT_FOUND'] = 'Not found.';
$app_strings['LBL_SEARCH_ERROR'] = 'Search error.';
$app_strings['LBL_FOUND'] = 'Found';
$app_strings['LBL_GET_RECORD_LIST_ERROR'] = 'Error occurred while retrieving records';
$app_strings['LBL_NUMBER_OF_RECORDS'] = 'The Number of Records';
$app_strings['LBL_FORWARD_SLASH'] = '/';
$app_strings['LBL_CASES_INSIGHT'] = ' {{fields.cases.value}} ( {{fields.default.value}} )';
$app_strings['LBL_INVOICES_INSIGHT'] = ' {{fields.invoices.value}} ( {{fields.default.value}} )';
$app_strings['LBL_CONTRACT_RENEWAL_TOOLTIP'] = 'Date of the next Contract Renewal';
$app_strings['LBL_INVOICES_OVERDUE_TOOLTIP'] = 'Total number of Overdue Invoices';
$app_strings['LBL_ACTIVITIES_NEXT_DATE_TOOLTIP'] = 'Date of the next interaction';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED_TOOLTIP'] = 'Date of the most recent Campaign received';
$app_strings['LBL_OPEN_CASES_COUNT_TOOLTIP'] = 'Total number of Open Cases';
$app_strings['LBL_EVENTS_LAST_DATE_TOOLTIP'] = 'Date of the most recent Event';
$app_strings['LBL_HISTORY_LAST_DATE_TOOLTIP'] = 'Date of the most recent interaction';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM_TOOLTIP'] = 'Total Sum of Opportunities';
$app_strings['LBL_QUOTES_EXPIRY_TOOLTIP'] = 'Date of the next Quote Expiration';
$app_strings['LBL_DEFAULT_TOTAL_TOOLTIP'] = 'Total number of records';
$app_strings['LBL_CONTRACT_RENEWAL'] = 'Renewal Date';
$app_strings['LBL_INVOICES_OVERDUE'] = 'Total Overdue';
$app_strings['LBL_ACTIVITIES_NEXT_DATE'] = 'Next Activity Date';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED'] = 'Last Participated';
$app_strings['LBL_OPEN_CASES_COUNT'] = 'Open Cases';
$app_strings['LBL_EVENTS_LAST_DATE'] = 'Last Event Attended';
$app_strings['LBL_HISTORY_LAST_DATE'] = 'Last Touchpoint';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM'] = 'Total Value';
$app_strings['LBL_QUOTES_EXPIRY'] = 'Next Expiration Date';
$app_strings['LBL_DEFAULT_TOTAL'] = 'Total';
$app_strings['AOS_Contracts'] = 'Contracts';
$app_strings['AOS_Quotes'] = 'Quotes';
$app_strings['AOS_Invoices'] = 'Invoices';
$app_strings['LBL_PHOTO'] = 'Photo';
$app_strings['LBL_CASE_UPDATES'] = 'Case Updates';
$app_strings['LBL_CASE_UPDATE_SUBMITTED'] = 'Case Update Submitted';
$app_strings['LBL_SUMMARY_DEFAULT'] = "{{fields.name.value}}";
$app_strings['LBL_SUMMARY_PERSON'] = "{{fields.salutation.value}} {{fields.first_name.value}} {{fields.last_name.value}}";
$app_strings['LBL_REVISION_FILENAME'] = "{{fields.document_name.value}} - v{{fields.revision.value}}";
$app_strings['LBL_SUMMARY_DOCUMENT'] = "{{fields.document_name.value}}";
$app_strings['LBL_CREATE'] = 'Create';
$app_strings['LBL_CLEAR_FILTER'] = 'Clear Filter';
$app_strings['LBL_QUICK_FILTERS'] = 'Quick Filters';
$app_strings['LBL_SAVED_FILTER_SAVED'] = 'Filter successfully saved';
$app_strings['LBL_FILTER_ID_NOT_DEFINED'] = 'Filter id not defined';
$app_strings['LBL_GENERIC_CONFIRMATION'] = 'Do you want to proceed with action?';
$app_strings['LBL_SHOW_MORE'] = 'Show more';
$app_strings['LBL_SHOW_LESS'] = 'Show less';
$app_strings['LBL_LOAD_MORE'] = 'Load More';
$app_strings['LBL_EMPTY'] = '-- Empty --';
$app_strings['LBL_OPERATOR'] = 'Operater';
$app_strings['LBL_START'] = 'Start';
$app_strings['LBL_END'] = 'End';
$app_strings['LBL_LINE_ITEMS_FIELD_CONFIG'] = 'Bad config';


$app_strings['LBL_ACTION_SUCCESS'] = 'Action successful';

$app_strings['LBL_YES'] = 'Yes';
$app_strings['LBL_NO'] = 'No';

$app_list_strings['sort_order'] = [];
$app_list_strings['sort_order']['asc'] = 'Ascending';
$app_list_strings['sort_order']['desc'] = 'Descending';

// Labels used by subpanel unlink relationship process
$app_strings['LBL_LINK'] = 'Link';
$app_strings['LBL_LINK_UNLINK'] = 'Link / Unlink';
$app_strings['LBL_SAVE'] = 'Save';
$app_strings['LBL_UNLINK_RECORD'] = 'Unlink Record';
$app_strings['LBL_DELETE_RECORD'] = 'Delete Record';
$app_strings['LBL_EDIT_RECORD'] = 'Edit Record';
$app_strings['LBL_UNLINK_RELATIONSHIP_CONFIRM'] = 'Are you sure you want to unlink this record? Only the relationship will be unlinked. The record will not be deleted.';
$app_strings['LBL_UNLINK_RELATIONSHIP_SUCCESS'] = 'Record unlinked successfully.';
$app_strings['LBL_UNLINK_RELATIONSHIP_FAILED'] = 'There was an error unlinking this record.';
$app_strings['LBL_ALL_RECORDS_UNLINKED'] = 'All records unlinked successfully';
$app_strings['LBL_SOME_RECORDS_UNLINKED_FAILED'] = 'There was an issue unlinking some records. See the logs for more.';
$app_strings['LBL_LINK_RELATIONSHIP_SUCCESS'] = 'Relationship linked successfully.';
$app_strings['LBL_LINK_RELATIONSHIP_FAILED'] = 'There was an error linking this Relationship.';
$app_strings['LBL_MODULE_NOT_FOUND'] = 'Module not found.';
$app_strings['LBL_RECORD_NOT_FOUND'] = 'Unable to load record';
$app_strings['LBL_FILE_NOT_FOUND'] = 'Unable to load file';
$app_strings['LBL_RELATIONSHIP_LOAD_ERROR'] = 'Unable to load relationship';
$app_strings['LBL_NOT_LINKED'] = 'Unable to unlink. Records are not linked';
$app_strings['LBL_ACCESS_DENIED'] = 'Access Denied';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_SUCCESS'] = 'Records added to target list successfully.';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_FAILED'] = 'There was an error adding records to target list.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_SUCCESS'] = 'Contacts added to target list successfully.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_FAILED'] = 'There was an error adding contacts to target list.';
$app_strings['LBL_CHANGED_TO_TEXT'] = 'changed to';
$app_strings['LBL_RECORD_CHANGED'] = 'Record Updated';
$app_strings['LBL_CREATE'] = "Create";
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Koristite napredno pretraživanje';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Koristite osnovno pretraživanje';
$app_strings['LBL_NO_MODULE_SELECTED'] = 'No module selected';
$app_strings['LBL_CLOSE_MENU'] = 'Close Menu';
$app_strings['LOGIN_INCORRECT'] = 'Login credentials incorrect, please try again.';
$app_strings['LOGIN_TOO_MANY_FAILED'] = 'Too many failed login attempts, please try again later.';

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

$app_strings['LBL_KEY'] = 'Ključ';
$app_strings['LBL_VALUE'] = 'Value';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Potpis';
$app_strings['LBL_NEW_NOTIFICATION'] = "You have {{context.unread}} new notifications";
$app_strings['LBL_ALERT_STATUS_COMPLETED'] = 'Completed';
$app_strings['LBL_ALERT_STATUS_COMPLETED_WITH_FAILURES'] = 'Completed With Failures';
$app_strings['LBL_ALERT_STATUS_FAILED'] = 'Failed';
$app_strings['LBL_NOTIFICATION_ITEM_DATE'] = 'Due: {{fields.date_start.value}}';
$app_strings['LBL_NOTIFICATION_ITEM_DATE_ENTERED'] = 'Notified: {{fields.snooze.value}}';
$app_strings['LBL_QUICK_ACTIONS'] = 'Quick Actions';
$app_strings['LBL_RELATIONSHIPS'] = 'Relationships';
$app_strings['LBL_SHOW_CC'] = 'Show Cc';
$app_strings['LBL_SHOW_BCC'] = 'Show Bcc';
$app_strings['LBL_CC'] = 'Kopija';
$app_strings['LBL_BCC'] = 'Skrivena kopija';
$app_strings['LNK_NEW_EMAIL'] = 'New Email';
$app_strings['LBL_INSERT_TEMPLATE'] = 'Insert Template';
$app_strings['LBL_MISSING_RECORD_DATA'] = 'Missing Record Data';
$app_strings['LBL_MISSING_FIELDS_DATA'] = 'Missing Fields Data';
$app_strings['LBL_WRONG_MODULE_PROVIDED'] = 'Wrong module provided';
$app_strings['LBL_NO_TEMPLATE_ID_PROVIDED'] = 'No template id provided';
$app_strings['LBL_TEMPLATE_NOT_FOUND'] = 'Template not found';
$app_strings['LBL_EMAIL_MODAL_DYNAMIC_TITLE'] = 'New Email{{fields.name.value|prefix:\' - \'}}';
$app_strings['LBL_EMAIL_MODAL_DRAFT_DYNAMIC_TITLE'] = 'Draft{{fields.name.value|prefix:\' - \'}}';
$app_strings['LBL_CLOSE_EMAIL_MODAL'] = 'Are you sure you wish to discard this Email? (Changes will be lost)';
$app_strings['LBL_RELATED_TO_DYNAMIC'] = '{{fields.parent_type.value|uppercase}}';
$app_strings['LBL_RELATED_TO'] = 'Related To';
$app_strings['LBL_OUTBOUND_EMAIL_NAME_COMPOSE_LABEL'] = '{{fields.smtp_from_name}}';
$app_strings['LBL_OUTBOUND_EMAIL_NAME_COMPOSE_SUB_LABEL'] = '{{fields.smtp_from_addr}}';
$app_strings['LBL_SMALL'] = 'Small';
$app_strings['LBL_MEDIUM'] = 'Medium';
$app_strings['LBL_NORMAL'] = 'Normal';
$app_strings['LBL_LARGE'] = 'Large';
$app_strings['LBL_HUGE'] = 'Huge';
$app_strings['LBL_DEFAULT'] = 'Zadano';
$app_strings['LBL_APPLY'] = 'Apply';
$app_strings['LBL_INSERT_LINK_URL_DESCRIPTION'] = 'Insert URL or email:';
$app_strings['LBL_INSERT_LINK_PLACEHOLDER'] = 'e.g.: https://www.example.com';

$app_strings['LBL_COLOR_BLACK'] = 'Black';
$app_strings['LBL_COLOR_FIREBRICK'] = 'Firebrick';
$app_strings['LBL_COLOR_RED'] = 'Red';
$app_strings['LBL_COLOR_SALMON'] = 'Salmon';
$app_strings['LBL_COLOR_BLUSH'] = 'Blush';
$app_strings['LBL_COLOR_DARK_RED'] = 'Dark Red';
$app_strings['LBL_COLOR_BROWN'] = 'Brown';
$app_strings['LBL_COLOR_DARK_ORANGE'] = 'Dark Orange';
$app_strings['LBL_COLOR_ORANGE'] = 'Orange';
$app_strings['LBL_COLOR_ANTIQUE_WHITE'] = 'Antique White';
$app_strings['LBL_COLOR_SADDLE_BROWN'] = 'Saddle Brown';
$app_strings['LBL_COLOR_GOLDENROD'] = 'Golden Rod';
$app_strings['LBL_COLOR_GOLD'] = 'Gold';
$app_strings['LBL_COLOR_YELLOW'] = 'Yellow';
$app_strings['LBL_COLOR_LIGHT_YELLOW'] = 'Light Yellow';
$app_strings['LBL_COLOR_DARK_SLATE_GRAY'] = 'Dark Slate Grey';
$app_strings['LBL_COLOR_DARK_GREEN'] = 'Dark Green';
$app_strings['LBL_COLOR_GREEN'] = 'Green';
$app_strings['LBL_COLOR_LIME'] = 'Lime';
$app_strings['LBL_COLOR_HONEYDEW'] = 'Honeydew';
$app_strings['LBL_COLOR_TEAL'] = 'Teal';
$app_strings['LBL_COLOR_TURQUOISE'] = 'Turquoise';
$app_strings['LBL_COLOR_AQUA'] = 'Aqua';
$app_strings['LBL_COLOR_PALE_TURQUOISE'] = 'Pale Turquoise';
$app_strings['LBL_COLOR_AZURE'] = 'Azure';
$app_strings['LBL_COLOR_NAVY_BLUE'] = 'Navy Blue';
$app_strings['LBL_COLOR_MEDIUM_BLUE'] = 'Medium Blue';
$app_strings['LBL_COLOR_BLUE'] = 'Blue';
$app_strings['LBL_COLOR_LIGHT_BLUE'] = 'Light Blue';
$app_strings['LBL_COLOR_ALICE_BLUE'] = 'Alice Blue';
$app_strings['LBL_COLOR_INDIGO'] = 'Indigo';
$app_strings['LBL_COLOR_PATRIARCH_PURPLE'] = 'Patriarch Purple';
$app_strings['LBL_COLOR_VIOLET_PURPLE'] = 'Violet Purple';
$app_strings['LBL_COLOR_PLUM'] = 'Plum';
$app_strings['LBL_COLOR_LAVENDER'] = 'Lavender';
$app_strings['LBL_COLOR_DIM_GRAY'] = 'Dim Gray';
$app_strings['LBL_COLOR_GRAY'] = 'Gray';
$app_strings['LBL_COLOR_DARK_GRAY'] = 'Dark Gray';
$app_strings['LBL_COLOR_LIGHT_GRAY'] = 'Light Gray';
$app_strings['LBL_COLOR_WHITE'] = 'White';

$app_strings['LBL_BOLD'] = 'Bold';
$app_strings['LBL_ITALIC'] = 'Italic';
$app_strings['LBL_INSERT_TEMPLATE_VARIABLE'] = 'Insert Variable';
$app_strings['LBL_UNDERLINE'] = 'Underline';
$app_strings['LBL_STRIKETHROUGH'] = 'Strikethrough';
$app_strings['LBL_FONT_FACE'] = 'Font Face';
$app_strings['LBL_TEXT_SIZE'] = 'Text Size';
$app_strings['LBL_TEXT_COLOR'] = 'Text Color';
$app_strings['LBL_TEXT_HIGHLIGHT'] = 'Text Highlight';
$app_strings['LBL_LINK'] = 'Link';
$app_strings['LBL_UNORDERED_LIST'] = 'Unordered List';
$app_strings['LBL_ORDERED_LIST'] = 'Ordered List';
$app_strings['LBL_QUOTE'] = 'Quote';
$app_strings['LBL_UNQUOTE'] = 'Unquote';
$app_strings['LBL_ALIGN'] = 'Align';
$app_strings['LBL_ALIGN_LEFT'] = 'Left';
$app_strings['LBL_ALIGN_CENTER'] = 'Center';
$app_strings['LBL_ALIGN_RIGHT'] = 'Right';
$app_strings['LBL_JUSTIFY'] = 'Justify';
$app_strings['LBL_TEXT_LEFT_TO_RIGHT'] = 'Text Direction: Left to Right';
$app_strings['LBL_TEXT_RIGHT_TO_LEFT'] = 'Text Direction: Right to Left';
$app_strings['LBL_CLEAR_FORMATTING'] = 'Clear Formatting';
$app_strings['LBL_INJECT_UNSUBSCRIBE'] = 'Unsubscribe Link';
$app_strings['LBL_TEXT_INDENT_LEFT'] = 'Indent Text Left';
$app_strings['LBL_TEXT_INDENT_RIGHT'] = 'Indent Text Right';

// Day and Time labels
$app_strings['LBL_SUN'] = 'Sunday';
$app_strings['LBL_MON'] = 'Monday';
$app_strings['LBL_TUE'] = 'Tuesday';
$app_strings['LBL_WED'] = 'Wednesday';
$app_strings['LBL_THU'] = 'Thursday';
$app_strings['LBL_FRI'] = 'Friday';
$app_strings['LBL_SAT'] = 'Saturday';
$app_strings['LBL_ALL'] = 'Every Day';
$app_strings['LBL_EVERY'] = 'Svaki';
$app_strings['LBL_ON_THE'] = 'Na';
$app_strings['LBL_RANGE'] = 'to';
$app_strings['LBL_FROM'] = 'Od';
$app_strings['LBL_AND'] = 'and';
$app_strings['LBL_MINS'] = 'Min';
$app_strings['LBL_MINUTES'] = 'minuta';
$app_strings['LBL_HOUR'] = 'sati';
$app_strings['LBL_HOUR_SING'] = 'sat';
$app_strings['LBL_OFTEN'] = 'As often as possible.';
$app_strings['LBL_MIN_MARK'] = 'minute mark';
$app_strings['LBL_INBOUND_EMAIL'] = 'Inbound Email';

$app_strings['LBL_LEGEND'] = 'Legend';

$app_strings['LBL_EMAIL_MARKETING_NOT_UNSCHEDULED'] = 'Email Marketing is not Un Scheduled cannot schedule';
$app_strings['LBL_INCORRECT_RECORD_ID'] = 'Incorrect record id';

$app_strings['LBL_TEST_ENTRIES_DELETED'] = 'Test Entries Deleted.';
$app_strings['LBL_UNABLE_TO_GET_ID'] = 'Unable to retrieve Email Marketing ID';
$app_strings['LBL_UNABLE_TO_DELETE_TEST_ENTRIES'] = 'Error Deleting Test Entries. See logs for more info';
$app_strings['LBL_SECTION_KEY_NOT_DEFINED'] = 'Section key not defined';
$app_strings['LBL_DOES_BOUNCE_EXIST'] = 'Does a Bounce Email exist?';
$app_strings['LBL_IS_OUTBOUND_CONNECTED'] = 'Is Outbound Email Connected?';
$app_strings['LBL_CAMPAIGN_SETTINGS'] = 'Settings';

$app_strings['LBL_SEND_FROM_QUEUE_DYNAMIC_LABEL'] = '{{ fields.send-from-queue.value }}';
$app_strings['LBL_EMAIL_TO_QUEUE_DYNAMIC_LABEL'] = '{{ fields.email-to-queue.value }}';
$app_strings['LBL_POLL_BOUNCED_CAMPAIGN_DYNAMIC_LABEL'] = '{{ fields.pollMonitoredInboxesForBouncedCampaignEmails.value }}';

$app_strings['LBL_CRON_LINUX_DESC1_DYNAMIC'] = '{{ fields.desc1.value }}';
$app_strings['LBL_CRON_LINUX_DESC2_DYNAMIC'] = '{{ fields.desc2.value }}';
$app_strings['LBL_CRON_LINUX_DESC3_DYNAMIC'] = '{{ fields.desc3.value }}';
$app_strings['LBL_CRON_LINUX_DESC4_DYNAMIC'] = '{{ fields.desc4.value }}';
$app_strings['LBL_CRON_LINUX_DESC5_DYNAMIC'] = '{{ fields.desc5.value }}';
$app_strings['LBL_CRON_LINUX_DESC6_DYNAMIC'] = '{{ fields.desc6.value }}';
$app_strings['LBL_CRON_LINUX_DESC7_DYNAMIC'] = '{{ fields.desc7.value }}';
$app_strings['LBL_CRON_LINUX_DESC8_DYNAMIC'] = '{{ fields.desc8.value }}';

$app_strings['LBL_CRON_WIN_DESC1_DYNAMIC'] = '{{ fields.desc1.value }}';
$app_strings['LBL_CRON_WIN_DESC2_DYNAMIC'] = '{{ fields.desc2.value }}';
$app_strings['LBL_CRON_WIN_DESC3_DYNAMIC'] = '{{ fields.desc3.value }}';
$app_strings['LBL_CRON_WIN_DESC4_DYNAMIC'] = '{{ fields.desc4.value }}';
$app_strings['LBL_CRON_WIN_DESC5_DYNAMIC'] = '{{ fields.desc5.value }}';

$app_strings['LBL_CRON_LAST_RUN'] = 'Last successful run';
$app_strings['LBL_CRON_LAST_USER_TO_RUN'] = 'Last user to run schedulers';
$app_strings['LBL_LAST_RUN_VALUE'] = '{{ fields.lastRun.value }}';
$app_strings['LBL_LAST_USER_RUN_VALUE'] = '{{ fields.user.value }}';
$app_strings['LBL_RUN_USER_INVALID'] = 'This user is not part of `allowed_cron_users` config setting. Therefore the last run was not successful';
$app_strings['LBL_SCHEDULERS_NEVER_RUN'] = 'Schedulers have never been run.';
$app_strings['LBL_MARKETING_ITEMS_PER_RUN'] = 'Campaign Marketing Items Per Run';
$app_strings['LBL_EMAILS_PER_RUN'] = 'Campaign Emails Per Run';
$app_strings['LBL_TRACKERS_ENABLED'] = 'Trackers Enabled';
$app_strings['LBL_TRACKER_LINKS_ENABLED'] = 'Tracker Links Enabled';

$app_strings['LBL_MARKETING_ITEMS_PER_RUN_DYNAMIC_LABEL'] = '{{ fields.campaign_marketing_items_per_run.value }}';
$app_strings['LBL_EMAILS_PER_RUN_DYNAMIC_LABEL'] = '{{ fields.campaign_emails_per_run.value }}';
$app_strings['LBL_EMAILS_MAX_RETRIES'] = 'Campaign Emails Max Retries';
$app_strings['LBL_EMAILS_MAX_RETRIES_DYNAMIC_LABEL'] = '{{ fields.campaign_emails_max_retries.value }}';
$app_strings['LBL_EMAILS_THRESHOLD'] = 'Campaign Emails Error Threshold Per Batch';
$app_strings['LBL_EMAILS_THRESHOLD_DYNAMIC_LABEL'] = '{{ fields.campaign_emails_threshold.value }}';
$app_strings['LBL_TRACKERS_ENABLED_DYNAMIC_LABEL'] = '{{ fields.trackers_enabled.value }}';
$app_strings['LBL_UNSUBSCRIBE'] = 'Unsubscribe';
$app_strings['LBL_INACTIVE'] = 'Inactive';
$app_strings['LBL_DISPLAYING_TEST_EMAIL_MARKETING_DATA'] = 'Charts and Subpanels currently displaying data generated from Test Emails.';
$app_strings['LBL_DASH_SYMBOL'] = '-';
$app_strings['LBL_FIELD_STORAGE_NOT_SET'] = 'File storage type not set for field. Unable to upload file.';
$app_strings['LBL_FIELD_STORAGE_INVALID_TYPE'] = 'File storage type is not valid for field. Unable to upload file.';
$app_strings['LBL_UPLOAD'] = 'Učitaj';
$app_strings['LBL_UPLOAD_FAILED'] = 'Upload failed, please try again later';
$app_strings['LBL_UPLOADING'] = 'Uploading';
$app_strings['LBL_UPLOAD_FROM_FILES'] = 'Upload from files';
$app_strings['LBL_ATTACH_DOCUMENTS'] = 'Attach Documents';
$app_strings['LBL_FILE_FIELD_UPLOAD_BUTTON_DESCRIPTION'] = 'Click or drag a file here to upload';
$app_strings['LBL_ATTACHMENTS_FIELD_UPLOAD_BUTTON_DESCRIPTION'] = 'Drag and drop a file here to upload';
$app_strings['LBL_SOME_ATTACHMENTS_FAILED'] = 'Some attachments failed to upload. See logs for more info.';
$app_strings['LBL_UPLOAD_IMAGE'] = 'Upload Image';
$app_strings['LBL_DOWNLOAD_IMAGE'] = 'Download Image';
$app_strings['LBL_PREVIEW_IMAGE'] = 'Preview Image';
$app_strings['LBL_UPLOAD_IMAGE_DESCRIPTION'] = 'Click or drag an image here to upload';
$app_strings['LBL_INVALID_PROCESS_OPTIONS'] = 'Invalid process options. See logs for more info.';
$app_strings['LBL_TEMPORARY'] = 'Temporary';
$app_strings['LBL_MAX_FILE_SIZE_EXCEEDED'] = 'The file exceeds the maximum allowed size.';
$app_strings['LBL_UNSUPPORTED_IMAGE_TYPE'] = 'The image type is not supported.';
$app_strings['LBL_UNSUPPORTED_FILE_TYPE'] = 'The file type is not supported.';
$app_strings['LBL_UNSUPPORTED_IMAGE_FILE_TYPE'] = 'This image type is not supported.';
$app_strings['LBL_MALWARE_DETECTED'] = 'Malware detected in uploaded file. The upload has been rejected.';

$app_strings['LBL_DEFAULT_OUTBOUND_NOT_SET'] = 'Unable to retrieve Default Outbound Email';
$app_strings['LBL_SMTP_UNABLE_TO_CONNECT']='Unable to connect to SMTP server with the current Outbound Email settings.';
$app_strings['LBL_DEFAULT_OUTBOUND_NOT_CONFIGURED'] = 'Outbound Email Account not correctly configured.';

$app_strings['LBL_CRON_UNRECOMMENDED_USER'] = 'You are currently running as root, this is NOT recommended, would you like to continue (y,n)? ';
$app_strings['LBL_UNKNOWN_USER'] = 'Unknown User';

$app_strings['LBL_DRAFTS'] = 'Drafts';
$app_strings['LBL_DRAFT_ITEM_LAST_MODIFIED'] = '{{fields.date_modified.value}}';
$app_strings['LBL_DRAFT_ITEM_TO_EMPTY'] = 'No Recipient(s)';
$app_strings['LBL_DRAFT_ITEM_TO'] = '{{fields.to_addrs_names.valueList|filter:primary=true:attributeKey=name}}';
$app_strings['LBL_DRAFT_ITEM_TO_ICON'] = '{{fields.to_icon_type.value}}';
$app_strings['LBL_DRAFTS_TOTAL'] = '{{fields.count.value}}';
$app_strings['LBL_DRAFTS_DELETED_SUCCESSFULLY'] = 'Drafts Deleted Successfully.';
$app_strings['LBL_DRAFT_DELETED_SUCCESSFULLY'] = 'Draft Deleted Successfully.';
$app_strings['LBL_DRAFTS_DELETED_UNSUCCESSFULLY'] = 'Drafts Not Deleted Successfully. See logs for more info.';
$app_strings['LBL_DRAFT_DELETED_UNSUCCESSFULLY'] = 'Draft Not Deleted Successfully. See logs for more info.';
$app_strings['LBL_OPEN_DRAFT'] = 'Open Draft';
$app_strings['LBL_DELETE_DRAFT'] = 'Delete Draft';
$app_strings['LBL_UNABLE_TO_GET_DRAFT_ID'] = 'Unable to retrieve Draft ID.';
$app_strings['LBL_UNABLE_TO_DELETE_DRAFT'] = 'Unable to delete draft.';
$app_strings['LBL_EMAIL_NOT_DRAFT'] = 'Email is no longer a draft.';
$app_strings['LBL_DRAFT_DELETED_SUCCESSFULLY'] = 'Draft Deleted Successfully.';

$app_strings['LBL_CANNOT_DELETE_LATEST_REVISION'] = 'You cannot delete the latest revision of a document.';
$app_strings['LBL_NO_DOCUMENT_ID_PROVIDED'] = 'Cannot find document to delete revision, no document id provided.';
$app_strings['LBL_NO_RECORD_ID_PROVIDED'] = 'Cannot find docuemnt revision to delete, no record id provided.';
$app_strings['LBL_DELETE_REVISION_CONFIRM'] = 'Are you sure you want to delete this revision?';
$app_strings['LBL_DOCUMENT_NOT_FOUND'] = 'Document not found.';
$app_strings['LBL_EMAIL_ATTACHMENT_DOCUMENT_DELETED'] = 'One or more attached documents have been deleted and cannot be sent.';

$app_strings['LBL_DISMISS_INVALID_STATUS'] = 'This record cannot be dismissed while it is still in progress.';
$app_strings['LBL_DISMISS_FAILED'] = 'Failed to dismiss. Please try again.';
$app_strings['LBL_RERUN_NOT_ELIGIBLE'] = 'This record is not eligible for re-run. It may not have completed with failures or re-run may not be supported.';
$app_strings['LBL_RETRY_FAILED_NOT_ELIGIBLE'] = 'This record is not eligible for retry. It may not have completed with failures or retry may not be supported.';
$app_strings['LBL_ASYNC_TASK_UNSUPPORTED_MODULE'] = 'This module does not support async task actions.';
$app_strings['LBL_RERUN_SUCCESS'] = 'Task has been re-queued and will restart from the beginning.';
$app_strings['LBL_RETRY_FAILED_SUCCESS'] = 'Failed items have been re-queued for processing.';

$app_strings['LBL_MIGRATE_GOOGLE_CALENDAR_SYNC_SIBLING_RUNNING'] = 'Cannot run this migration while "Migrate Google Calendar Users Sync" is currently pending / running.';
$app_strings['LBL_MIGRATE_GOOGLE_CALENDAR_SYNC_USERS_SIBLING_RUNNING'] = 'Cannot run this migration while "Migrate Google Calendar Sync" is currently pending / running.';

$app_strings['LBL_CANNOT_DELETE_LATEST_REVISION'] = 'You cannot delete the latest revision of a document.';
$app_strings['LBL_NO_DOCUMENT_ID_PROVIDED'] = 'Cannot find document to delete revision, no document id provided.';
$app_strings['LBL_NO_RECORD_ID_PROVIDED'] = 'Cannot find docuemnt revision to delete, no record id provided.';

$app_strings['LBL_CANNOT_DELETE_LATEST_REVISION'] = 'You cannot delete the latest revision of a document.';
$app_strings['LBL_NO_DOCUMENT_ID_PROVIDED'] = 'Cannot find document to delete revision, no document id provided.';
$app_strings['LBL_NO_RECORD_ID_PROVIDED'] = 'Cannot find docuemnt revision to delete, no record id provided.';

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

$app_strings['LBL_NOT_AUTHORIZED'] = 'Not authorized';
