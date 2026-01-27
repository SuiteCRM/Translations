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
    'language_pack_name' => 'Afrikaans (South Africa) - af_ZA',
    'moduleList' => array(
        'Home' => 'Tuis',
        'ResourceCalendar' => 'BronKalender',
        'Contacts' => 'Kontakte',
        'Accounts' => 'Rekeninge',
        'Alerts' => 'Waarskuwings',
        'Opportunities' => 'Geleenthede',
        'Cases' => 'Gebeure',
        'Notes' => 'Notas',
        'Calls' => 'Oproepe',
        'TemplateSectionLine' => 'Templaat afdeling lyn',
        'Calls_Reschedule' => 'Herskeduleer Oproepe',
        'Emails' => 'Eposse',
        'EAPM' => 'EAPM',
        'Meetings' => 'Vergaderings',
        'Tasks' => 'Take',
        'Calendar' => 'Kalender',
        'Leads' => 'Potensiële kliënte',
        'Currencies' => 'Wisselkoerse',
        'Activities' => 'Aktiwiteite',
        'Bugs' => 'Goggas',
        'Feeds' => 'Voere',
        'iFrames' => 'My webwerwe',
        'TimePeriods' => 'Tydperke',
        'ContractTypes' => 'Tipes Kontrakte',
        'Schedulers' => 'Skedulerings',
        'Project' => 'Projekte',
        'ProjectTask' => 'Projek Take',
        'Campaigns' => 'Veldtogte',
        'CampaignLog' => 'Veldtog Rekord',
        'Documents' => 'Dokumente',
        'DocumentRevisions' => 'Dokument Wysigings',
        'Connectors' => 'Koppelvlakke',
        'Roles' => 'Rolle',
        'Notifications' => 'Kennisgewings',
        'Sync' => 'Sinkroniseer',
        'Users' => 'Gebruikers',
        'Employees' => 'Werkgewers',
        'Administration' => 'Administrasie',
        'ACLRoles' => 'Rolle',
        'InboundEmail' => 'Inkomende Epos',
        'Releases' => 'Vrystellings',
        'Prospects' => 'Teikens',
        'Queues' => 'In beplanning',
        'EmailMarketing' => 'Epos Bemarking',
        'EmailTemplates' => 'Epos - Template',
        'ProspectLists' => 'Teikens - Lyste',
        'SavedSearch' => 'Gestoorde Soektogte',
        'UpgradeWizard' => 'Opgradeer Hulpprogram',
        'Trackers' => 'Opvolgers',
        'TrackerSessions' => 'Opvolg Geleenthede',
        'TrackerQueries' => 'Opvolg Navrae',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Nuusbriewe',
        'SugarFeed' => 'SuiteCRM Voer',
        'SugarFavorites' => 'SuiteCRM Gunstelinge',

        'OAuthKeys' => 'OAuth Gebruiker Kodes',
        'OAuthTokens' => 'OAuth Sleutel',
        'OAuth2Clients' => 'OAuth Kliënte',
        'OAuth2Tokens' => 'OAuth Sleutel',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Tuis',
        'Dashboard' => 'Werkskerm',
        'Contacts' => 'Kontak',
        'Accounts' => 'Rekening',
        'Opportunities' => 'Geleentheid',
        'Cases' => 'Geval',
        'Notes' => 'Nota',
        'Calls' => 'Oproep',
        'Emails' => 'Epos',
        'EmailTemplates' => 'Epos - Template',
        'Meetings' => 'Vergadering',
        'Tasks' => 'Taak',
        'Calendar' => 'Kalender',
        'Leads' => 'Potensiele kliënt',
        'Activities' => 'Aktiwiteit',
        'Bugs' => 'Gogga',
        'KBDocuments' => 'KBDocument',
        'Feeds' => 'Voere',
        'iFrames' => 'My webwerwe',
        'TimePeriods' => 'Tydperk',
        'Project' => 'Projek',
        'ProjectTask' => 'Projek Taak',
        'Prospects' => 'Teiken',
        'Campaigns' => 'Veldtog',
        'Documents' => 'Dokument',
        'Sync' => 'Sinkroniseer',
        'Users' => 'Gebruiker',
        'SugarFavorites' => 'SuiteCRM Gunstelinge',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Ja',
        '2' => 'Nee',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analis',
        'Competitor' => 'Kompetisie',
        'Customer' => 'Klient',
        'Integrator' => 'Integreerder',
        'Investor' => 'Belegger',
        'Partner' => 'Vennoot',
        'Press' => 'Pers',
        'Prospect' => 'Vooruitsig',
        'Reseller' => 'Herverkoper',
        'Other' => 'Ander',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Toerusting',
        'Banking' => 'Bankdienste',
        'Biotechnology' => 'Biotegnologie',
        'Chemicals' => 'Chemikalieë',
        'Communications' => 'Kommunikasie',
        'Construction' => 'Konstruksie',
        'Consulting' => 'Konsultasie',
        'Education' => 'Opvoeding',
        'Electronics' => 'Elektronika',
        'Energy' => 'Energie',
        'Engineering' => 'Ingenieurswese',
        'Entertainment' => 'Vermaak',
        'Environmental' => 'Omgewing',
        'Finance' => 'Finansies',
        'Government' => 'Regering',
        'Healthcare' => 'Gesondheidsorg',
        'Hospitality' => 'Toerisme',
        'Insurance' => 'Versekering',
        'Machinery' => 'Masjinerie',
        'Manufacturing' => 'Vervaardiging',
        'Media' => 'Media',
        'Not For Profit' => 'Nie-winsgewend',
        'Recreation' => 'Ontspanning',
        'Retail' => 'Kleinhandel',
        'Shipping' => 'Afleweringsdienste',
        'Technology' => 'Tegnologie',
        'Telecommunications' => 'Telekommunikasie',
        'Transportation' => 'Vervoer',
        'Utilities' => 'Nutsdienste',
        'Other' => 'Ander',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Koue oproep',
        'Existing Customer' => 'Bestaande kliënt',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Werknemer',
        'Partner' => 'Vennoot',
        'Public Relations' => 'Openbare betrekkinge',
        'Direct Mail' => 'Direkte e-pos',
        'Conference' => 'Konferensie',
        'Trade Show' => 'Handelskou',
        'Web Site' => 'Webwerf',
        'Word of mouth' => 'Verwysing',
        'Email' => 'Epos',
        'Campaign' => 'Veldtog',
        'Other' => 'Ander',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Bestaande Besigheid',
        'New Business' => 'Nuwe Besigheid',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Inkomste',
        'Investment' => 'Belegging',
        'Expected_Revenue' => 'Verwagte inkomste',
        'Budget' => 'Begroting',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Besigheid Besluitnemer',
        'Business Evaluator' => 'Besigheid Evalueerder',
        'Technical Decision Maker' => 'Tegniese Besluitnemer',
        'Technical Evaluator' => 'Tegniese Evalueerder',
        'Executive Sponsor' => 'Uitvoerende Borg',
        'Influencer' => 'Beinvloeder',
        'Other' => 'Ander',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Alternatiewe Kontak',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Netto 15',
        'Net 30' => 'Netto 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kwalifikasie',
        'Needs Analysis' => 'Behoefte Analise',
        'Value Proposition' => 'Waarde Proposisie',
        'Id. Decision Makers' => 'Identifiseer Besluitnemer',
        'Perception Analysis' => 'Persepsie Analis',
        'Proposal/Price Quote' => 'Voorstel/Kwotasie',
        'Negotiation/Review' => 'Onderhandeling/Oorweging',
        'Closed Won' => 'Gesluit Gewen',
        'Closed Lost' => 'Gesluit Verloor',
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
        'Call' => 'Oproep',
        'Meeting' => 'Vergadering',
        'Task' => 'Taak',
        'Email' => 'Epos',
        'Note' => 'Nota',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Mnr.',
        'Ms.' => 'Me.',
        'Mrs.' => 'Mev.',
        'Miss' => 'Mej',
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
        60 => '1 minuut vooraf',
        300 => '5 minute vooraf',
        600 => '10 minute vooraf',
        900 => '15 minute vooraf',
        1800 => '30 minute vooraf',
        3600 => '1 uur vooraf',
        7200 => '2 uur vooraf',
        10800 => '3 uur vooraf',
        18000 => '5 ure vooraf',
        86400 => '1 dag vooraf',
    ),

    'task_priority_default' => 'Medium',
    'task_priority_dom' => array(
        'High' => 'Hoog',
        'Medium' => 'Medium',
        'Low' => 'Laag',
    ),
    'task_status_default' => 'Not Started',
    'task_status_dom' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'Besig',
        'Completed' => 'Afgehandel',
        'Pending Input' => 'Hangende insette',
        'Deferred' => 'Uitgestel',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Gehou',
        'Not Held' => 'Nie gehou nie',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Ander',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Gehou',
        'Not Held' => 'Nie gehou nie',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Inkomende',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nuut',
        'Assigned' => 'Toegeken',
        'In Process' => 'In proses',
        'Converted' => 'Omgeskep',
        'Recycled' => 'Herwinde',
        'Dead' => 'Nie gerealiseer nie',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Hoog',
        'P2' => 'Medium',
        'P3' => 'Laag',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Gereelde gebruiker',
        'Administrator' => 'Administrateur',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktief',
        'Inactive' => 'Onaktief',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Epos Kode',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktief',
        'Terminated' => 'Bedank',
        'Leave of Absence' => 'Verlof',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Hoog',
        'Medium' => 'Medium',
        'Low' => 'Laag',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'Besig',
        'Completed' => 'Afgehandel',
        'Pending Input' => 'Hangende insette',
        'Deferred' => 'Uitgestel',
    ),
    'project_task_utilization_options' => array(
        '0' => 'geen',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Konsep',
        'In Review' => 'In Oorweging',
        'Underway' => 'Aan die gang',
        'On_Hold' => 'Op Hou',
        'Completed' => 'Afgehandel',
    ),
    'project_status_default' => 'Konsep',

    'project_duration_units_dom' => array(
        'Days' => 'Dae',
        'Hours' => 'Ure',
    ),

    'activity_status_type_dom' => array(
        '' => '-Geen-',
        'active' => 'Aktief',
        'inactive' => 'Onaktief',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Rekeninge',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Rekening',
        'Opportunities' => 'Geleentheid',
        'Cases' => 'Geval',
        'Leads' => 'Potensiele kliënt',
        'Contacts' => 'Kontak', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Gogga',
        'Project' => 'Projek',

        'Prospects' => 'Teiken',
        'ProjectTask' => 'Projek Taak',

        'Tasks' => 'Taak',

        'AOS_Contracts' => 'Kontrak',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produk',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Rekening',
        'Contacts' => 'Kontak',
        'Opportunities' => 'Geleentheid',
        'Campaigns' => 'Veldtog',
        'Tasks' => 'Taak',
        'Emails' => 'Epos',

        'Bugs' => 'Gogga',
        'Project' => 'Projek',
        'ProjectTask' => 'Projek Taak',
        'Prospects' => 'Teiken',
        'Cases' => 'Geval',
        'Leads' => 'Potensiele kliënt',

        'Meetings' => 'Vergadering',
        'Calls' => 'Oproep',

        'AOS_Contracts' => 'Kontrak',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produk',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Rekening',
        'Contacts' => 'Kontak',
        'Tasks' => 'Taak',
        'Opportunities' => 'Geleentheid',

        'Bugs' => 'Gogga',
        'Cases' => 'Geval',
        'Leads' => 'Potensiele kliënt',

        'Project' => 'Projek',
        'ProjectTask' => 'Projek Taak',

        'Prospects' => 'Teiken',

        'AOS_Contracts' => 'Kontrak',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produk',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Kwotasies',
        'AOS_Invoices' => 'Fakture',
        'AOS_Contracts' => 'Kontrakte',
    ),
    'issue_priority_default_key' => 'Medium',
    'issue_priority_dom' => array(
        'Urgent' => 'Dringend',
        'High' => 'Hoog',
        'Medium' => 'Medium',
        'Low' => 'Laag',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Aanvaar',
        'Duplicate' => 'Duplikaat',
        'Closed' => 'Gesluit',
        'Out of Date' => 'Verouderd',
        'Invalid' => 'Ongeldig',
    ),

    'issue_status_default_key' => 'Nuut',
    'issue_status_dom' => array(
        'New' => 'Nuut',
        'Assigned' => 'Toegeken',
        'Closed' => 'Gesluit',
        'Pending' => 'Hangende',
        'Rejected' => 'Verwerp',
    ),

    'bug_priority_default_key' => 'Medium',
    'bug_priority_dom' => array(
        'Urgent' => 'Dringend',
        'High' => 'Hoog',
        'Medium' => 'Medium',
        'Low' => 'Laag',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Aanvaar',
        'Duplicate' => 'Duplikaat',
        'Fixed' => 'Reggemaak',
        'Out of Date' => 'Verouderd',
        'Invalid' => 'Ongeldig',
        'Later' => 'Later',
    ),
    'bug_status_default_key' => 'Nuut',
    'bug_status_dom' => array(
        'New' => 'Nuut',
        'Assigned' => 'Toegeken',
        'Closed' => 'Gesluit',
        'Pending' => 'Hangende',
        'Rejected' => 'Verwerp',
    ),
    'bug_type_default_key' => 'Gogga',
    'bug_type_dom' => array(
        'Defect' => 'Defek',
        'Feature' => 'Kenmerk',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administrasie',
        'Product' => 'Produk',
        'User' => 'Gebruiker',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interne',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Epos',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Rekeninge',
        'Activities' => 'Aktiwiteite',
        'Bugs' => 'Goggas',
        'Calendar' => 'Kalender',
        'Calls' => 'Oproepe',
        'Campaigns' => 'Veldtogte',
        'Cases' => 'Gebeure',
        'Contacts' => 'Kontakte',
        'Currencies' => 'Wisselkoerse',
        'Dashboard' => 'Werkskerm',
        'Documents' => 'Dokumente',
        'Emails' => 'Eposse',
        'Feeds' => 'Verwysings',
        'Forecasts' => 'Voorspellings',
        'Help' => 'Help',
        'Home' => 'Tuis',
        'Leads' => 'Potensiële kliënte',
        'Meetings' => 'Vergaderings',
        'Notes' => 'Notas',
        'Opportunities' => 'Geleenthede',
        'Outlook Plugin' => 'Outlook Inprop',
        'Projects' => 'Projekte',
        'Quotes' => 'Kwotasies',
        'Releases' => 'Vrystellings',
        'RSS' => 'Voere',
        'Studio' => 'Studio',
        'Upgrade' => 'Opgradeer',
        'Users' => 'Gebruikers',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Beplanning',
        'Active' => 'Aktief',
        'Inactive' => 'Onaktief',
        'Complete' => 'Afgehandel',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Tele-verkope',
        'Mail' => 'Pos',
        'Email' => 'Epos',
        'Print' => 'Druk',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Televisie',
        'NewsLetter' => 'Nuusbrief',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Weekliks',
        'Monthly' => 'Maandeliks',
        'Quarterly' => 'Kwartaalliks',
        'Annually' => 'Jaarliks',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Januarie',
        '2' => 'Februarie',
        '3' => 'Maart',
        '4' => 'April',
        '5' => 'Mei',
        '6' => 'Junie',
        '7' => 'Julie',
        '8' => 'Augustus',
        '9' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Feb',
        '3' => 'Mrt',
        '4' => 'Apr',
        '5' => 'Mei',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Aug',
        '9' => 'September',
        '10' => 'Okt',
        '11' => 'Nov',
        '12' => 'Des',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Sondag',
        '2' => 'Maandag',
        '3' => 'Dinsdag',
        '4' => 'Woensdag',
        '5' => 'Donderdag',
        '6' => 'Vrydag',
        '7' => 'Saterdag',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Son',
        '2' => 'Ma',
        '3' => 'Di',
        '4' => 'Woe',
        '5' => 'Do',
        '6' => 'Vr',
        '7' => 'Sat',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'vm',
        'pm' => 'nm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'VM',
        'PM' => 'NM',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Personal',
        'group' => 'Groep',
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
        'group' => 'Groep',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personal',
        'group' => 'Groep',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personal',
        'group' => 'Groep',
        'system' => 'Stelsel',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktief',
        'Inactive' => 'Onaktief',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Gestuur',
        'archived' => 'Geargiveer',
        'draft' => 'Konsep',
        'inbound' => 'Inkomende',
        'campaign' => 'Veldtog',
    ),
    'dom_email_status' => array(
        'archived' => 'Geargiveer',
        'closed' => 'Gesluit',
        'draft' => 'In Konsep',
        'read' => 'Gelees',
        'replied' => 'Geantwoord',
        'sent' => 'Gestuur',
        'send_error' => 'Stuur Fout',
        'unread' => 'Ongelees',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Geargiveer',
    ),

    'dom_email_server_type' => array(
        '' => '-Geen-',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-Geen-',
        'createcase' => 'Skep \'n geval',
        'bounce' => 'Bons hantering',
    ),
    'dom_email_distribution' => array(
        '' => '-Geen-',
        'direct' => 'Direkte toekenning',
        'roundRobin' => 'Om die beurt',
        'leastBusy' => 'Minste besig',
    ),
    'dom_email_errors' => array(
        1 => 'Kies slegs een gebruiker wanneer items Direk Toegewys word.',
        2 => 'Jy moet slegs gemerkte items toewys wanneer items direk toegewys word.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Ja',
        'bool_false' => 'Nee',
    ),
    'dom_int_bool' => array(
        1 => 'Ja',
        0 => 'Nee',
    ),
    'dom_switch_bool' => array(
        'on' => 'Ja',
        'off' => 'Nee',
        '' => 'Nee',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM e-pos kliënt',
        'mailto' => 'Eksterne e-pos kliënt',
    ),

    'dom_editor_type' => array(
        'none' => 'Direkte HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Verstek e-pos formaat',
        'html' => 'HTML e-pos',
        'plain' => 'Gewone teks e-pos',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Vorige Loop Tyd, is nie uitgevoer nie',
        'ready' => 'Gereed',
        'in progress' => 'Besig',
        'failed' => 'Onsuksesvol',
        'completed' => 'Afgehandel',
        'no curl' => 'Nie geloop nie: Geen cURL beskikbar nie',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktief',
        'Inactive' => 'Onaktief',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minute',
        'hour' => 'Ure',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Bemarking',
        'Knowledege Base' => 'Inligting bronne',
        'Sales' => 'Verkope',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Geargiveer',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Kollaterale Bemarking',
        'Product Brochures' => 'Produk Brosjures',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktief',
        'Draft' => 'Konsep',
        'FAQ' => 'FAQ',
        'Expired' => 'Verstreke',
        'Under Review' => 'Onder Hersiening',
        'Pending' => 'Hangende',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Saamsmelt en e-pos',
        'eula' => 'EGLO',
        'nda' => 'NDA',
        'license' => 'Lisensie-ooreenkoms',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Aanvaar',
        'decline' => 'Verwerp',
        'tentative' => 'Tentatief',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Aanvaar',
        'decline' => 'Afgekeur',
        'tentative' => 'Tentatief',
        'none' => 'Geen',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Geen',
        'Daily' => 'Daagliks',
        'Weekly' => 'Weekliks',
        'Monthly' => 'Maandeliks',
        'Yearly' => 'Jaarliks',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dag (dae)',
        'Weekly' => 'week (weke)',
        'Monthly' => 'maand (e)',
        'Yearly' => 'jaar (jare)',
    ),

    'duration_dom' => array(
        '' => 'Geen',
        '900' => '15 Minute',
        '1800' => '30 minute',
        '2700' => '45 minute',
        '3600' => '1 uur',
        '5400' => '1.5 uur',
        '7200' => '2 ure',
        '10800' => '3 ure',
        '21600' => '6 ure',
        '86400' => '1 dag',
        '172800' => '2 dae',
        '259200' => '3 dae',
        '604800' => '1 week',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Verstekwaarde',
        'seed' => 'Potensieël',
        'exempt_domain' => 'Onderdrukking lys - Deur Domein',
        'exempt_address' => 'Onderdrukking lys - Deur Epos Adres',
        'exempt' => 'Onderdrukking lys - Deur Id',
        'test' => 'Toets',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktief',
        'inactive' => 'Onaktief',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Boodskap gestuur/Pobeer',
        'send error' => 'Terugekeerde Boodskappe, Ander',
        'invalid email' => 'Teruggekeerde Boodskappe, Ongeldige Epos',
        'link' => 'Klik-deur Skakel',
        'viewed' => 'Vertoonde boodskap',
        'removed' => 'Verwyderd',
        'lead' => 'Potensiële kliënt geskep',
        'contact' => 'Kontakte geskep',
        'blocked' => 'Onderdruk deur adres of domein',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontakte',
        'Users' => 'Gebruikers',
        'Prospects' => 'Teikens',
        'Leads' => 'Potensiële kliënte',
        'Accounts' => 'Rekeninge',
    ),
    'merge_operators_dom' => array(
        'like' => 'Bevat',
        'exact' => 'Presies',
        'start' => 'Begin met',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Ja',
        'false' => 'Nee',
        'required' => 'Vereis',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Onbeskikbaar',
        1 => 'Geaktiveer',
        2 => 'Filter',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Hoog',
        'medium' => 'Medium',
        'low' => 'Laag',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Not Started',
        'inprogress' => 'Besig',
        'completed' => 'Afgehandel',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Brei struktuur uit',
        'collapselegend' => 'Versamel struktuur',
        'clickfordrilldown' => 'Klik vir uitbreiding',
        'detailview' => 'Meer besonderhede...',
        'piechart' => 'Sirkeldiagram',
        'groupchart' => 'Groep grafiek',
        'stackedchart' => 'Gestapelde grafiek',
        'barchart' => 'Staafgrafiek',
        'horizontalbarchart' => 'Horisontaal Staafgrafiek',
        'linechart' => 'Lyn grafiek',
        'noData' => 'Data nie beskikbaar nie',
        'print' => 'Druk',
        'pieWedgeName' => 'afdelings',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktief',
        'Inactive' => 'Onaktief',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Enkel aanhaling (&#39;)',
        '"' => 'Dubbel aanhaling (&#34;)',
        '' => 'Geen',
        'other' => 'Ander:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Ander:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nuwe venster',
        '_self' => 'Dieselfde venster',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Moenie Self-verfris nie',
        '30' => 'Elke 30 sekondes',
        '60' => 'Elke 1 minuut',
        '180' => 'Elke 3 minute',
        '300' => 'Elke 5 minute',
        '600' => 'Elke 10 minute',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Nooit',
        '30' => 'Elke 30 sekondes',
        '60' => 'Elke 1 minuut',
        '180' => 'Elke 3 minute',
        '300' => 'Elke 5 minute',
        '600' => 'Elke 10 minute',
    ),
    'date_range_search_dom' => array(
        '=' => 'Is gelyk aan',
        'not_equal' => 'Nie op nie',
        'greater_than' => 'Na',
        'less_than' => 'Voor',
        'last_7_days' => 'Laaste 7 dae',
        'next_7_days' => 'Volgende 7 dae',
        'last_30_days' => 'Laaste 30 dae',
        'next_30_days' => 'Volgende 30 dae',
        'last_month' => 'Verlede maand',
        'this_month' => 'Hierdie maand',
        'next_month' => 'Volgende maand',
        'last_year' => 'Verlede jaar',
        'this_year' => 'Hierdie jaar',
        'next_year' => 'Volgende jaar',
        'between' => 'Is tussen',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Is gelyk aan',
        'not_equal' => 'Is nie gelyk aan',
        'greater_than' => 'Groter as',
        'greater_than_equals' => 'Groter as of gelyk aan',
        'less_than' => 'Minder as',
        'less_than_equals' => 'Minder as of gelyk aan',
        'between' => 'Is tussen',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopieër',
        'move' => 'Skuif',
        'donothing' => 'Doen niks nie',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Uitslae',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Soektog uitgevoer in',
    'LBL_EMAIL_CODE' => 'Epos Kode:',
    'LBL_SEND' => 'Stuur',
    'LBL_LOGOUT' => 'Teken Uit',
    'LBL_TOUR_NEXT' => 'Volgende',
    'LBL_TOUR_SKIP' => 'Slaan oor',
    'LBL_TOUR_BACK' => 'Terug',
    'LBL_TOUR_TAKE_TOUR' => 'Kyk na die toer',
    'LBL_MOREDETAIL' => 'Meer Besonderhede' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Redigeer inlyn' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Bekyk' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filter' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Voeg by' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Voeg Epos Adres in' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Wys/versteek' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Verwyder' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Maak skoon' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Verwyder' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Verwyder Epos Adres' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Kies Uit',
    'LBL_ID_FF_INVALID' => 'Maak Ongeldig',
    'LBL_ADD' => 'Voeg by' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Maatskappy kenteken' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Koppeling inproppe',
    'LBL_CLOSEINLINE' => 'Maak toe',
    'LBL_VIEWINLINE' => 'Bekyk',
    'LBL_INFOINLINE' => 'Inligting',
    'LBL_PRINT' => 'Druk',
    'LBL_HELP' => 'Help',
    'LBL_ID_FF_SELECT' => 'Kies',
    'DEFAULT' => 'Basiese',
    'LBL_SORT' => 'Rangskik',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Kies SMTP bo SSL of TLS?',
    'LBL_NO_ACTION' => 'There is no action by that name: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Daar is geen aksies beskikbaar nie.',
    'LBL_NO_DATA' => 'Geen data',

    'LBL_ROUTING_FLAGGED' => 'vlaggie gestel',
    'LBL_ROUTING_TO' => 'na',
    'LBL_ROUTING_TO_ADDRESS' => 'na adres',
    'LBL_ROUTING_WITH_TEMPLATE' => 'met templaat',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Hierdie rekord bevat tans waardes in die kantoor telefoonnommer en adres velde. Om hierdie waardes met die volgende kantoor telefoonnommer en adres van die rekening wat jy gekies het te oorskryf, klik "OK". Indien jy die huidige waardes wil behou, klik "Kanselleer".',
    'LBL_DROP_HERE' => 'Sleep hierheen',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Vul Gmail&#153; verstek waardes outomaties',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Naam',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Uitgaande epos bediener besonderhede',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP wagwoord',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP poort',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP-bediener',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP Gebruikersnaam',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Verstekwaarde',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Waarskuwing: Gebruikernaam en wagwoord vir uitgaande epos rekening is weg.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Stel Epos Rekenings op om nuwe inkomende eposse van jou epos rekenings te lees.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Verskaf SMTP epos bediener inligting om te gebruik vir uitgaande epos in Epos Rekeninge.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Gedoen',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Maak skoon',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Aan:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'CC:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Aan/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-pos adres',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Naam',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Geen adres gevind nie',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Stoor en voeg by Adresboek',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Kies Epos Geadresseerdes',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresboek',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Waarskuwing! Die uitgaande rekening wat jy wil skrap is verbonde aan \'n bestaande inkomende rekening.  Is jy seker jy wil voortgaan?',
    'LBL_EMAIL_ADDRESSES' => 'Epos',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-pos adres',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Unable to confirm email address',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Voer in na SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Toekenning',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Heg aan',
    'LBL_EMAIL_ATTACHMENT' => 'Heg aan',
    'LBL_EMAIL_ATTACHMENTS' => 'Vanaf lokale stelsel',
    'LBL_EMAIL_ATTACHMENTS2' => 'Vanaf SuiteCRM Dokumente',
    'LBL_EMAIL_ATTACHMENTS3' => 'Templaat aanhegtings',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Lêer',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokument',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Kanselleer',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Karakter stel',
    'LBL_EMAIL_CHECK' => 'Kyk of daar pos is',
    'LBL_EMAIL_CHECKING_NEW' => 'Besig om te kyk of daar nuwe epos is',
    'LBL_EMAIL_CHECKING_DESC' => 'Een oomblik asseblief... <br><br>As dit die eerste toets van die e-pos rekening is, is mag dit \'n rukkie neem.',
    'LBL_EMAIL_CLOSE' => 'Maak toe',
    'LBL_EMAIL_COFFEE_BREAK' => 'Soek tans nuwe e-pos. <br><br>Groot e-pos rekeninge kan \'n aansienlike hoeveelheid tyd neem.',

    'LBL_EMAIL_COMPOSE' => 'Epos',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Voer asb. ontvanger(s) in vir hierdie epos.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Hierdie epos het geen inhoud nie. Wil jy dit steeds stuur?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Hierdie epos het geen onderwerp nie.  Wil jy dit steeds stuur?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(geen onderwerp)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Voer asb \'n geldige epos in vir die Na, CC en BCC velde',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Ignoreer hierdie epos?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Is jy seker jy wil hierdie ondertekening verwyder?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Epos gestuur',

    'LBL_EMAIL_CREATE_NEW' => '--Skep wanneer stoor--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Veelvoudig',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Leeg',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Datum deur die Sender gestuur',
    'LBL_EMAIL_DATE_TODAY' => 'Vandag',
    'LBL_EMAIL_DELETE' => 'Verwyder',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Skrap geselekteerde boodskappe?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-pos suksesvol geskrap.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Besig om boodskap te skrap',
    'LBL_EMAIL_DETAILS' => 'Besonderhede',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Slegs die primêre adres sal gebruik word wanneer met kontakte gewerk word.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Besig om asblik leeg te maak',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Besig om sturende bediener te skrap',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Besig om cache-lêers te skrap',
    'LBL_EMAIL_EMPTY_MSG' => 'Geen e-posse om te wys nie.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Geen e-pos adresse om te wys nie.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Vouernaam moet uniek en nie leeg wees nie. Probeer asseblief weer.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Kan nie \'n vouer skrap nie. Die vouer of sub-vouers het e-posse of \'n e-pos boks wat daarmee geassosieer word.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Kan nie die beoogde vouer uit die konteks bepaal nie. Probeer weer.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Kontroleer asseblief jou instellings.',
    'LBL_EMAIL_ERROR_DESC' => 'Foute wat bespeur is: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Jy het nie toegang tot hierdie area nie. Kontak jou web administrateur om toegang te verkry.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM Vouername moet uniek wees.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Tik asseblief \'n paar soekterme in.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => '\'n Fout het plaasgevind',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Boodskap van bediener verwyder',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Óf die boodskap was van die bediener verwyder of geskuif na \'n ander vouer',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Verbinding aan die e-pos bediener het misluk. Kontak asseblief jou administrateur',
    'LBL_EMAIL_ERROR_MOVE' => 'Om E-pos tussen bedieners en/of e-pos rekeninge te skuif word nie tans ondersteun nie.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Skuif fout',
    'LBL_EMAIL_ERROR_NAME' => '\'n Naam word vereis.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Vanaf adres word vereis. Tik asseblief \'n geldige e-posadres in.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Verskaf asseblief \'n lêer.',
    'LBL_EMAIL_ERROR_SERVER' => '\'n E-pos bediener-adres word vereis.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Die e-pos rekening mag dalk nie gestoor wees nie.',
    'LBL_EMAIL_ERROR_TIMEOUT' => '\'n Fout het voorgekom terwyl daar met die e-pos bediener gekommunikeer is.',
    'LBL_EMAIL_ERROR_USER' => '\'n Inteken naam word vereis.',
    'LBL_EMAIL_ERROR_PORT' => '\'n Epos bediener poort word benodig.',
    'LBL_EMAIL_ERROR_PROTOCOL' => '\'n Bediener protokol word benodig.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => '\'n Gids wat gemonitor moet word, word benodig.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => '\'n Asblik gids word benodig.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Hierdie inligting is nie beskikbaar nie',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Geen uitgaande bediener is gespesifiseer nie.',
    'LBL_EMAIL_ERROR_SENDING' => 'Stuur van E-pos Fout. Kontak asseblief jou administrateur vir hulp.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Vouers',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Voeg by',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Voeg \'n nuwe gids by',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Hernoem \'n gids',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Stoor',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Voeg hierdie gids by',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Hierdie gids kan nie verander word nie',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Is jy seker jy wil hierdie gids verwyder?\nHierdie proses kan nie ongedaan gemaak word nie.\nDieverwydering van vouers sal afwentel na alle vouers.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nuwe gids naam',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Kies \'n gids voordat jy hierdie aksie uitvoer.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gids Bestuur',

    'LBL_EMAIL_FORWARD' => 'Aanstuur',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[[count]] van [[total]] eposse afgelaai',
    'LBL_EMAIL_FROM' => 'Vanaf',
    'LBL_EMAIL_GROUP' => 'groep',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Groep',
    'LBL_EMAIL_HOME_FOLDER' => 'Tuis',
    'LBL_EMAIL_IE_DELETE' => 'Verwyder epos rekening',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Verwyder ondertekening',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Is jy seker jy wil hierdie epos rekening verwyder?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Verwydering was suksesvol.',
    'LBL_EMAIL_IE_SAVE' => 'E-pos rekening inligting word gestoor',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Voer e-pos in',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Voer in SuiteCRM in',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Voer instellings in',
    'LBL_EMAIL_INVALID' => 'Ongeldig',
    'LBL_EMAIL_LOADING' => 'Laai tans...',
    'LBL_EMAIL_MARK' => 'Merk',
    'LBL_EMAIL_MARK_FLAGGED' => 'Na gevlag',
    'LBL_EMAIL_MARK_READ' => 'Na Gelees',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Na nie gevlag nie',
    'LBL_EMAIL_MARK_UNREAD' => 'Na ongelees',
    'LBL_EMAIL_ASSIGN_TO' => 'Assosieer met',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Skep lêer',
    'LBL_EMAIL_MENU_COMPOSE' => 'Skryf aan',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Skrap vouer',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Maak asblik leeg',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinchroniseer',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Skrap cache-lêers',
    'LBL_EMAIL_MENU_REMOVE' => 'Verwyder',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Hernoem \'n gids',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Hernoem \'n gids',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Maak asseblief \'n keuse voordat hierdie opdrag uitgevoer word.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Skep \'n Vouer (aanlyn of in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Empties all Trash folders for your mail accounts',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Mark these email(s) read',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Mark these email(s) unflagged',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Rename a Folder (remote or in SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'messages',

    'LBL_EMAIL_ML_NAME' => 'List Name',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Selected List Addresses',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Available List Addresses',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> to select multiples<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Nee',
    'LBL_EMAIL_NOT_SENT' => 'System is unable to process your request. Please contact the system administrator.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => '’n Oomblik asb...',
    'LBL_EMAIL_OPEN_ALL' => 'Open Multiple Messages',
    'LBL_EMAIL_OPTIONS' => 'Opsies',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Quick Compose',
    'LBL_EMAIL_OPT_OUT' => 'Verwyderd',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Opted Out and Invalid',
    'LBL_EMAIL_PERFORMING_TASK' => 'Performing Task',
    'LBL_EMAIL_PRIMARY' => 'Primêre',
    'LBL_EMAIL_PRINT' => 'Druk',

    'LBL_EMAIL_QC_BUGS' => 'Gogga',
    'LBL_EMAIL_QC_CASES' => 'Geval',
    'LBL_EMAIL_QC_LEADS' => 'Potensiele kliënt',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontak',
    'LBL_EMAIL_QC_TASKS' => 'Taak',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Geleentheid',
    'LBL_EMAIL_QUICK_CREATE' => 'Quick Create',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Rebuilding Folders',
    'LBL_EMAIL_RELATE_TO' => 'Relate',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'View Relationships',
    'LBL_EMAIL_RECORD' => 'Email Record',
    'LBL_EMAIL_REMOVE' => 'Verwyder',
    'LBL_EMAIL_REPLY' => 'Beantwoord',
    'LBL_EMAIL_REPLY_ALL' => 'Beantwoord Almal',
    'LBL_EMAIL_REPLY_TO' => 'Reply-to',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Retrieving Message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Retrieving Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Please select only one email record',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Return to Previous Module?',
    'LBL_EMAIL_REVERT' => 'Val Terug',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE' => 'Rule Management',

    'LBL_EMAIL_SAVE' => 'Stoor',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Save & Reply',
    'LBL_EMAIL_SAVE_DRAFT' => 'Stoor Konsep',
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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Date From',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Date Until',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'No results match your search criteria.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Soek Resultaat',

    'LBL_EMAIL_SELECT' => 'Kies',

    'LBL_EMAIL_SEND' => 'Stuur',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sending Email',

    'LBL_EMAIL_SETTINGS' => 'Verstellings',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mail Accounts',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Clear Form',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Check for New Mail',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'From Address',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email Address For Test Notification:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Vanaf Naam',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Antwoord na Adres',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinchroniseer alle Epos Rekeninge',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'An email was sent to the specified email address using the provided outgoing mail settings. Please check to see if the email was received to verify the settings are correct.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'See full SMTP Log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Perform a full synchronization?\nLarge mail accounts may take a few minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Click the Shift key or the Ctrl key to select multiple folders.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Algemeen',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Create Group Folders',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Redigeer Groep Vouer',

    'LBL_EMAIL_SETTINGS_NAME' => 'Epos Rekening Naam',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Kies die hoeveelheid eposse per bladsy in die Inboks. Dit mag dalk nodig wees om die bladsy te verfris om hierdie verstelling te aktiveer.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Ontvangende Epos Rekening',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Die verstellings is gestoor.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Stuur slegs Gewone Teks E-posse',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'E-posse per Bladsy',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuele Verstellings',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Voorkeure',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Beskikbarre Gebruiker Vouers',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Die uitgaande e-pos bediener vir die e-pos rekening wat gekies het, is ongeldig. Hersien die verstellings of kies \'n ander e-pos bediener vir die e-pos rekening.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => '\'n Uitgaande epos bediener is nie opgestel om eposse te stuur nie. Stel asb. \'n uitgaande epos bediener op of kies \'n uitgaande epos bediener vir die epos rekening wat reeds in Verstellings >> Epos Rekening gebruik word.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Verstek Handtekening',
    'LBL_EMAIL_SIGNATURES' => 'Ondertekenings',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Epos',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ander',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Afgeleë Vouers ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM Vouers ]',
    'LBL_EMAIL_SUBJECT' => 'Onderwerp',
    'LBL_EMAIL_SUCCESS' => 'Sukses',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM Vouer',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Epos templaat se inhoud is leeg',
    'LBL_EMAIL_TEMPLATES' => 'Template',
    'LBL_EMAIL_TO' => 'Aan',
    'LBL_EMAIL_VIEW' => 'Bekyk',
    'LBL_EMAIL_VIEW_HEADERS' => 'Vertoon Hoofopsrifte',
    'LBL_EMAIL_VIEW_RAW' => 'Vertoon Ongeformatteerde Epos',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Hierdie opsie word nie ondersteun wanneer POP3 gebruik word nie.',
    'LBL_DEFAULT_LINK_TEXT' => 'Verstek skakel teks.',
    'LBL_EMAIL_YES' => 'Ja',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Stuur Toets Epos',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Toets Epos gestuur',
    'LBL_EMAIL_MESSAGE_NO' => 'Boodskap nr.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Invoer Suksesvol',
    'LBL_EMAIL_IMPORT_FAIL' => 'Invoer het misluk omdat die boodskap reeds ingevoer is of van die bediener verwyder is',

    'LBL_LINK_NONE' => 'Geen',
    'LBL_LINK_ALL' => 'Alle',
    'LBL_LINK_RECORDS' => 'Items',
    'LBL_LINK_SELECT' => 'Kies',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Bevestig',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Wil jy hierdie #module# toemaak?',
    'LBL_INVALID_FILE_EXTENSION' => 'Ongeldige Lêer Ekstensie',

    'ERR_AJAX_LOAD' => '\'n Fout het plaasgevind:',
    'ERR_AJAX_LOAD_FAILURE' => 'Daar het \'n fout ingesluip terwyl jou versoek uitgevoer is; probeer asb. later weer.',
    'ERR_AJAX_LOAD_FOOTER' => 'As hierdie fout bly voorkom, laat jou administrateur Ajax vir hierdie module ontsper',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Die desimale skeidingkarakter kan nie dieselfde wees as die duisende-skeidingkarakter nie.\\n\\n Verander asb. die karakters.',
    'ERR_DELETE_RECORD' => '\'n Item nommer moet gespesifiseer word om \'n kontak te verwyder.',
    'ERR_EXPORT_DISABLED' => 'Uitvoere Gesper.',
    'ERR_EXPORT_TYPE' => 'Fout met uitvoer ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nie \'n geldige e-posadres nie.',
    'ERR_INVALID_FILE_REFERENCE' => 'Ongeldige Lêer Verwysing',
    'ERR_NO_HEADER_ID' => 'Hierdie opsie is nie beskikbaar in hierdie tema nie.',
    'ERR_NOT_ADMIN' => 'Ontoelaatbare toegang tot administrasie.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Vermiste vereiste veld:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Ongeldige vereiste veld:',
    'ERR_INVALID_VALUE' => 'Ongeldige Waarde:',
    'ERR_NO_SUCH_FILE' => 'Lêer bestaan nie op sisteem nie',
    'ERR_NO_SINGLE_QUOTE' => 'Kan nie die enkel aanhalingteken gebruik vir ',
    'ERR_NOTHING_SELECTED' => 'Maak asb. \'n keuse voor jy voortgaan.',
    'ERR_SELF_REPORTING' => 'Gebruiker kan nie aan hom-/haarself rapporteer nie.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Geen gepaste veld vir: ',
    'ERR_SQS_NO_MATCH' => 'No Match',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Error: The Portal Name is already assigned to another contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_NO_DB' => 'Could not connect to the database. Please refer to suitecrm.log for details (0).',
    'ERR_DB_FAIL' => 'Database failure. Please refer to suitecrm.log for details.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} Files May Only Be Used With A SuiteCRM {1} Database.',

    'LBL_ACCOUNT' => 'Rekening',
    'LBL_ACCOUNTS' => 'Rekeninge',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiwiteite',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Bekyk Opsomming',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Bekyk Opsomming',
    'LBL_ADD_BUTTON' => 'Voeg by',
    'LBL_ADD_DOCUMENT' => 'Voeg Dokument by',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Voeg by Teiken Lys',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Voeg Kontakte by Teiken Lys',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kliek om toe te maak',
    'LBL_ADDITIONAL_DETAILS' => 'Bykomende Detail',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Argiveer',
    'LBL_ASSIGNED_TO_USER' => 'Toegewys aan Gebruiker',
    'LBL_ASSIGNED_TO' => 'Toegewys aan:',
    'LBL_BACK' => 'Terug',
    'LBL_BILLING_ADDRESS' => 'Posadres',
    'LBL_QUICK_CREATE' => 'Skep ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Goggas',
    'LBL_BY' => 'deur',
    'LBL_CALLS' => 'Oproepe',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Queued Campaign Emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Dien in',
    'LBL_CASE' => 'Geval',
    'LBL_CASES' => 'Gebeure',
    'LBL_CHANGE_PASSWORD' => 'Verander Wagwoord',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Merk Alles',
    'LBL_CITY' => 'City',
    'LBL_CLEAR_BUTTON_LABEL' => 'Maak skoon',
    'LBL_CLEAR_BUTTON_TITLE' => 'Maak skoon',
    'LBL_CLEARALL' => 'Verwyder Alles',
    'LBL_CLOSE_BUTTON_TITLE' => 'Maak toe',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Maak toe en Skep Nuwe',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Maak toe en Skep Nuwe',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Oop Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Skep e-pos',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Skep e-pos',
    'LBL_SEARCH_DROPDOWN_YES' => 'Ja',
    'LBL_SEARCH_DROPDOWN_NO' => 'Nee',
    'LBL_CONTACT_LIST' => 'Kontak Lys',
    'LBL_CONTACT' => 'Kontak',
    'LBL_CONTACTS' => 'Kontakte',
    'LBL_CONTRACT' => 'Kontrak',
    'LBL_CONTRACTS' => 'Kontrakte',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATE_BUTTON_LABEL' => 'Skep',
    'LBL_CREATED_BY_USER' => 'Geskep deur Gebruiker',
    'LBL_CREATED_USER' => 'Geskep deur Gebruiker',
    'LBL_CREATED' => 'Geskep deur',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Geldeenheid:',
    'LBL_DOCUMENTS' => 'Dokumente',
    'LBL_DATE_ENTERED' => 'Datum geskep:',
    'LBL_DATE_MODIFIED' => 'Datum Gewysig:',
    'LBL_EDIT_BUTTON' => 'Wysig',
    'LBL_DUPLICATE_BUTTON' => 'Duplikaat',
    'LBL_DELETE_BUTTON' => 'Verwyder',
    'LBL_DELETE' => 'Verwyder',
    'LBL_DELETED' => 'Geskrap',
    'LBL_DIRECT_REPORTS' => 'Direkte Verslae',
    'LBL_DONE_BUTTON_LABEL' => 'Gedoen',
    'LBL_DONE_BUTTON_TITLE' => 'Gedoen',
    'LBL_FAVORITES' => 'Favorites',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Please select a vCard file',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Import vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Import vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import vCard',
    'LBL_VIEW_BUTTON' => 'Bekyk',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-pos as PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-pos as PDF',
    'LBL_EMAILS' => 'Eposse',
    'LBL_EMPLOYEES' => 'Werkgewers',
    'LBL_ENTER_DATE' => 'Voer Datum in',
    'LBL_EXPORT' => 'Uitvoer',
    'LBL_FAVORITES_FILTER' => 'My gunstelinge:',
    'LBL_GO_BUTTON_LABEL' => 'Gaan',
    'LBL_HIDE' => 'Verberg',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Voer In',
    'LBL_IMPORT_STARTED' => 'Invoer is begin: ',
    'LBL_LAST_VIEWED' => 'Onlangs Gekyk',
    'LBL_LEADS' => 'Potensiële kliënte',
    'LBL_LESS' => 'minder',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_CAMPAIGNS' => 'Veldtogte',
    'LBL_CAMPAIGNLOG' => 'Veldtog Rekord',
    'LBL_CAMPAIGN_CONTACT' => 'Veldtogte',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Geen',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Gevind In Weergawe',
    'LBL_FIXED_IN_RELEASE' => 'Reggemaak in Weergawe',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_ASSIGNED_USER' => 'Gebruiker',
    'LBL_LIST_CONTACT_NAME' => 'Kontak naam',
    'LBL_LIST_CONTACT_ROLE' => 'Kontak rol',
    'LBL_LIST_DATE_ENTERED' => 'Datum geskep',
    'LBL_LIST_EMAIL' => 'Epos',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_OF' => 'van',
    'LBL_LIST_PHONE' => 'Telefoon',
    'LBL_LIST_RELATED_TO' => 'Verwant tot',
    'LBL_LIST_USER_NAME' => 'Gebruikernaam',
    'LBL_LISTVIEW_NO_SELECTED' => 'Selekteer asseblief ten minste 1 rekord om voort te gaan.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Selekteer asseblief ten minste 2 rekords om voort te gaan.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Geselekteerde rekords',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Gekies: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Dawid',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Kanselleer',
    'LBL_VERIFY' => 'Verifieer',
    'LBL_RESEND' => 'Herstuur',
    'LBL_PROFILE' => 'Profiel',
    'LBL_MAILMERGE' => 'Saamsmelt en e-pos',
    'LBL_MASS_UPDATE' => 'Massa bywerking',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Daar is geen velde beskikbaar vir die massa redigeer bewerking nie',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Kies uit primêre e-pos',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Kies in primêre e-pos',
    'LBL_MEETINGS' => 'Vergaderings',
    'LBL_MEETING_GO_BACK' => 'Gaan terug na die vergadering',
    'LBL_MEMBERS' => 'Lede',
    'LBL_MEMBER_OF' => 'Lid van',
    'LBL_MODIFIED_BY_USER' => 'Verander deur gebruiker',
    'LBL_MODIFIED_USER' => 'Verander deur gebruiker',
    'LBL_MODIFIED' => 'Gewysig deur',
    'LBL_MODIFIED_NAME' => 'Gewysig deur Naam',
    'LBL_MORE' => 'Meer',
    'LBL_MY_ACCOUNT' => 'My Instellings',
    'LBL_NAME' => 'Naam',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Skep',
    'LBL_NEW_BUTTON_TITLE' => 'Skep',
    'LBL_NEXT_BUTTON_LABEL' => 'Volgende',
    'LBL_NONE' => '-Geen-',
    'LBL_NOTES' => 'Notas',
    'LBL_OPPORTUNITIES' => 'Geleenthede',
    'LBL_OPPORTUNITY_NAME' => 'Geleentheid naam',
    'LBL_OPPORTUNITY' => 'Geleentheid',
    'LBL_OR' => 'OF',
    'LBL_PANEL_OVERVIEW' => 'Oorsig',
    'LBL_PANEL_ASSIGNMENT' => 'ANDER',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Ouer tipe',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Poskode:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primêre adres Stad:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primêre adres Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primêre Adres Poskode:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primêre adres Provinsie/Staat:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primêre Adres Straat 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primêre Adres Straat 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Produkte',
    'LBL_PROJECT_TASKS' => 'Projek Take',
    'LBL_PROJECTS' => 'Projekte',
    'LBL_QUOTES' => 'Kwotasies',

    'LBL_RELATED' => 'Related',
    'LBL_RELATED_RECORDS' => 'Related Records',
    'LBL_REMOVE' => 'Verwyder',
    'LBL_REPORTS_TO' => 'Reports To',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Dui vereiste veld aan',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Gedoen',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Full Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Full Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Save & Create New',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Save & Create New',
    'LBL_SAVE_OBJECT' => 'Save {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Soek',
    'LBL_SEARCH_BUTTON_TITLE' => 'Soek',
    'LBL_FILTER' => 'Filter',
    'LBL_SEARCH' => 'Soek',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'more',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Invalid file format, only image file can be uploaded.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Kies',
    'LBL_SELECT_BUTTON_TITLE' => 'Kies',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Browse Documents',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Select Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Select Contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'SELECT FROM Reports',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Select Reports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Select User',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Select User',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Select File',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Select File',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Select User',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Select User',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Clear User',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Clear User',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Kies Rekening',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Kies Rekening',
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
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Select Contact',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Select Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resources used to construct this page (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'seconds.',
    'LBL_SERVER_RESPONSE_TIME' => 'Bediener respons tyd:',
    'LBL_SERVER_MEMORY_BYTES' => 'grepe',
    'LBL_SERVER_MEMORY_USAGE' => 'Server Memory Usage: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Afleweringsadres',
    'LBL_SHOW' => 'Wys',
    'LBL_STATE' => 'Staat/Provinsie:',
    'LBL_STATUS_UPDATED' => 'Your Status for this event has been updated!',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Straat',
    'LBL_SUBJECT' => 'Onderwerp',

    'LBL_INBOUNDEMAIL_ID' => 'Inkomende Epos ID',

    'LBL_SCENARIO_SALES' => 'Verkope',
    'LBL_SCENARIO_MARKETING' => 'Bemarking',
    'LBL_SCENARIO_FINANCE' => 'Finansies',
    'LBL_SCENARIO_SERVICE' => 'Diens',
    'LBL_SCENARIO_PROJECT' => 'Projekbestuur',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'Sinkroniseer',
    'LBL_TABGROUP_ALL' => 'Alle',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktiwiteite',
    'LBL_TABGROUP_COLLABORATION' => 'Samewerking',
    'LBL_TABGROUP_MARKETING' => 'Bemarking',
    'LBL_TABGROUP_OTHER' => 'Ander',
    'LBL_TABGROUP_SALES' => 'Verkope',
    'LBL_TABGROUP_SUPPORT' => 'Ondersteuning',
    'LBL_TASKS' => 'Take',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Argiveer Epos',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Argiveer Epos',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Ontskrap',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Ontskrap',
    'LBL_UNDELETE_BUTTON' => 'Ontskrap',
    'LBL_UNDELETE' => 'Ontskrap',
    'LBL_UNSYNC' => 'Onsinkroniseer',
    'LBL_UPDATE' => 'Opdateer',
    'LBL_USER_LIST' => 'Gebruiker lys',
    'LBL_USERS' => 'Gebruikers',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Kontroleer bestaande e-pos inskrywing...',
    'LBL_VERIFY_PORTAL_NAME' => 'Kontroleer bestaande portaalnaam...',
    'LBL_VIEW_IMAGE' => 'bekyk',

    'LNK_ABOUT' => 'Aangaande',
    'LNK_ADVANCED_FILTER' => 'Gevorderde Filter',
    'LNK_BASIC_FILTER' => 'Blits Filter',
    'LBL_ADVANCED_SEARCH' => 'Gevorderde Filter',
    'LBL_QUICK_FILTER' => 'Blits Filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Wys alles',
    'LNK_CLOSE' => 'Maak toe',
    'LBL_MODIFY_CURRENT_FILTER' => 'Wysig huidige filter',
    'LNK_SAVED_VIEWS' => 'Uitleg opsies',
    'LNK_DELETE' => 'Verwyder',
    'LNK_EDIT' => 'Wysig',
    'LNK_GET_LATEST' => 'Kry jongste',
    'LNK_GET_LATEST_TOOLTIP' => 'Vervang deur nuutste weergawe',
    'LNK_HELP' => 'Help',
    'LNK_CREATE' => 'Skep',
    'LNK_LIST_END' => 'Einde',
    'LNK_LIST_NEXT' => 'Volgende',
    'LNK_LIST_PREVIOUS' => 'Vorige',
    'LNK_LIST_RETURN' => 'Terug na lys',
    'LNK_LIST_START' => 'Begin',
    'LNK_LOAD_SIGNED' => 'Teken',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Vervang met getekende dokument',
    'LNK_PRINT' => 'Druk',
    'LNK_BACKTOTOP' => 'Terug na bo',
    'LNK_REMOVE' => 'Verwyder',
    'LNK_RESUME' => 'Hervat',
    'LNK_VIEW_CHANGE_LOG' => 'Kyk na lys van veranderinge',

    'NTC_CLICK_BACK' => 'Kliek asb. die blaaier terug-knoppie om die fout reg te stel.',
    'NTC_DATE_FORMAT' => '(jjjj-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Is jy seker jy wil die gekose item(s) skrap?',
    'NTC_TEMPLATE_IS_USED' => 'Die templaat is gebruik in ten minste een e-pos bemarking rekord. Is jy seker jy wil dit skrap?',
    'NTC_TEMPLATES_IS_USED' => 'Die volgende template word in e-pos bemarking rekords gebruik. Is jy seker jy wil hulle skrap?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Is jy seker jy wil die rekord skrap?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Is jy seker jy wil dit skrap ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Is jy seker jy wil dit bywerk ',
    'NTC_DELETE_SELECTED_RECORDS' => ' geselekteerde rekord(s)?',
    'NTC_LOGIN_MESSAGE' => 'Voer asseblief jou gebruikersnaam en wagwoord in.',
    'NTC_NO_ITEMS_DISPLAY' => 'geen',
    'NTC_REMOVE_CONFIRMATION' => 'Is jy seker jy wil hierdie verhouding verwyder? Slegs die verhouding sal verwyder word. Die rekord sal nie geskrap word nie.',
    'NTC_REQUIRED' => 'Dui vereiste veld aan',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Welkom',
    'NTC_YEAR_FORMAT' => '(jjjj)',
    'WARN_UNSAVED_CHANGES' => 'Jy is oppad om hierdie rekord te verlaat sonder om enige veranderinge wat jy aangebring het aan die rekord te stoor. Is jy seker jy wil van hierdie rekord af weggaan?',
    'ERROR_NO_RECORD' => 'Fout met herwinning van rekord. Hierdie rekord kan geskrap word of jy mag dlk nie gemagtig wees om dit te bekyk.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Waarskuwing:</b> jou blaaier weergawe word nie meer ondersteun nie of jy gebruik \'n blaaier wat nie ondersteun word nie.<p></p>Die volgende blaaiers word aanbeveel:<p></p><ul><li>Internet Explorer 10 (aanpasbare opsie nie ondersteun nie)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Waarskuwing:</b> Jou blaaier is in IE aanpasbare modus wat nie ondersteun word nie.',
    'ERROR_TYPE_NOT_VALID' => 'Fout. Hierdie tipe is ongeldig.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'Vind Duplikate',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Bestuur Subskripsies',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Bestuur Subskripsies vir ',
    // Ajax status strings
    'LBL_LOADING' => 'Laai tans...',
    'LBL_SEARCHING' => 'Besig om te soek...',
    'LBL_SAVING_LAYOUT' => 'Stoor uitleg...',
    'LBL_SAVED_LAYOUT' => 'Uitleg is gestoor.',
    'LBL_SAVED' => 'Gestoor',
    'LBL_SAVING' => 'Stoor',
    'LBL_DISPLAY_COLUMNS' => 'Vertoon Kolomme',
    'LBL_HIDE_COLUMNS' => 'Verberg Kolomme',
    'LBL_SEARCH_CRITERIA' => 'Soek Kriteria',
    'LBL_SAVED_VIEWS' => 'Gestoorde Aansigte',
    'LBL_PROCESSING_REQUEST' => 'Verwerk...',
    'LBL_REQUEST_PROCESSED' => 'Gedoen',
    'LBL_AJAX_FAILURE' => 'Ajax gefaal',
    'LBL_MERGE_DUPLICATES' => 'Smelt saam',
    'LBL_SAVED_FILTER_SHORTCUT' => 'My Filters',
    'LBL_SEARCH_POPULATE_ONLY' => 'Perform a search using the search form above',
    'LBL_DETAILVIEW' => 'Gedetailleerde Aansig',
    'LBL_LISTVIEW' => 'Lysaansig',
    'LBL_EDITVIEW' => 'Wysig Aansig',
    'LBL_BILLING_STREET' => 'Straat:',
    'LBL_SHIPPING_STREET' => 'Straat:',
    'LBL_SEARCHFORM' => 'Soek Vorm',
    'LBL_SAVED_SEARCH_ERROR' => 'Please provide a name for this view.',
    'LBL_DISPLAY_LOG' => 'Vertoon Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Stelsel',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Your session is about to timeout in 2 minutes. Please save your work.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Your session has timed out.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Vergadering',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Oproep',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Tyd: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Plek: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Beskrywing: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Verwant tot: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Gebeurtenis',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'No results found.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'No results found for <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Create <item1> as a new <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'You currently have no records saved. <item2> or <item3> one now.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Add to My Favorites',
    'LBL_CREATE_CONTACT' => 'Create Contact',
    'LBL_CREATE_CASE' => 'Skep \'n geval',
    'LBL_CREATE_NOTE' => 'Create Note',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SCHEDULE_CALL' => 'Log Call',
    'LBL_SCHEDULE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_TASK' => 'Create Task',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generate Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Save Web Form',
    'LBL_AVAILABLE_FIELDS' => 'Available Fields',
    'LBL_FIRST_FORM_COLUMN' => 'First Form Column',
    'LBL_SECOND_FORM_COLUMN' => 'Second Form Column',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Missing required field: Assigned to',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Vermiste vereiste veld: verwante veldtog',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Indiening van hierdie vorm sal skep ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Voeg al die velde by',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Herstel alle velde',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Verwyder alle velde',
    'LBL_NEXT_BTN' => 'Volgende',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Only the following supported image type attachments can be embedded: JPG, PNG.',
    'LBL_TRAINING' => 'Ondersteuning Forums',
    'ERR_MSSQL_DB_CONTEXT' => 'Veranderde databasis konteks na',
    'ERR_MSSQL_WARNING' => 'Waarskuwing:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] is missing. Unable to create because no corresponding HTML file was found.',
    'ERR_CANNOT_FIND_MODULE' => 'Fout: Module [module] bestaan nie.',
    'LBL_ALT_ADDRESS' => 'Ander adres:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Algemeen',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Net My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Wys rye',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Besig om SuiteCRM Dashlet by te voeg...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet bygevoeg',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Is jy seker jy wil hierdie SuiteCRM Dashlet verwyder?',
    'LBL_REMOVING_DASHLET' => 'Besig om SuiteCRM Dashlet te verwyder...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet is verwyder',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Besig om bladsy te laai, wag asseblief...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Voeg Dashlets by',
    'LBL_CLOSE_DASHLETS' => 'Maak toe',
    'LBL_OPTIONS' => 'Opsies',
    'LBL_1_COLUMN' => '1 kolom',
    'LBL_2_COLUMN' => '2 Kolomme',
    'LBL_3_COLUMN' => '3 Kolomme',
    'LBL_PAGE_NAME' => 'Bladsy naam',

    'LBL_SEARCH_RESULTS' => 'Soek Resultaat',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_TOOLS' => 'Gereedskap',
    'LBL_SEARCH_HELP_TITLE' => 'Soek wenke',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Geen beeld',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopieer adres van links:',
    'LBL_SAVE_AND_CONTINUE' => 'Stoor en gaan voort',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad. For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Error: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'Gebruiker-Id',
    'LBL_MODULE_NAME' => 'Module Naam',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Opsoming',
    'LBL_ACTION' => 'Aksie',
    'LBL_SESSION_ID' => 'Sessie Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Datum van Laaste Aksie',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is nie voor nie',
    'MSG_IS_MORE_THAN' => 'is meer as',
    'MSG_SHOULD_BE' => 'moet wees',
    'MSG_OR_GREATER' => 'of groter',

    'LBL_LIST' => 'Lys',
    'LBL_CREATE_BUG' => 'Skep \'n Gogga',

    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Kies Datum',

    'LBL_VALIDATE_RANGE' => 'is not within the valid range',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Please choose both a starting and ending date range',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Alle',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector. The service may currently be inaccessible or the configuration settings may be invalid. Connector error message: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Naam',
    'LBL_COLLECTION_PRIMARY' => 'Primêre',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Leë verpligte veld',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Toegewys aan',
    'LBL_DESCRIPTION' => 'Beskrywing',

    'LBL_YESTERDAY' => 'gister',
    'LBL_TODAY' => 'vandag',
    'LBL_TOMORROW' => 'môre',
    'LBL_NEXT_WEEK' => 'volgende week',
    'LBL_NEXT_MONDAY' => 'volgende Maandag',
    'LBL_NEXT_FRIDAY' => 'volgende Vrydag',
    'LBL_TWO_WEEKS' => 'twee weke',
    'LBL_NEXT_MONTH' => 'volgende maand',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'eerste dag van volgende maand',
    'LBL_THREE_MONTHS' => 'drie maande',
    'LBL_SIXMONTHS' => 'ses maande',
    'LBL_NEXT_YEAR' => 'volgende jaar',

    //Datetimecombo fields
    'LBL_HOURS' => 'Ure',
    'LBL_MINUTES' => 'Minute',
    'LBL_MERIDIEM' => 'Meridiaan',
    'LBL_DATE' => 'Datum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Auto-Refresh',

    'LBL_DURATION_DAY' => 'dag',
    'LBL_DURATION_HOUR' => 'uur',
    'LBL_DURATION_MINUTE' => 'minuut',
    'LBL_DURATION_DAYS' => 'dae',
    'LBL_DURATION_HOURS' => 'Duration Hours',
    'LBL_DURATION_MINUTES' => 'Duration Minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Kies Maand',
    'LBL_ENTER_YEAR' => 'Voer Jaar in',
    'LBL_ENTER_VALID_YEAR' => 'Voer asb. \'n geldige jaar in',

    //File write error label
    'ERR_FILE_WRITE' => 'Error: Could not write file {0}. Please check system and web server permissions.',
    'ERR_FILE_NOT_FOUND' => 'Error: Could not load file {0}. Please check system and web server permissions.',

    'LBL_AND' => 'And',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sekuriteit',

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

    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_SORT_DESC' => 'Sorted Descending',
    'LBL_ALT_SORT_ASC' => 'Sorted Ascending',
    'LBL_ALT_SORT' => 'Rangskik',
    'LBL_ALT_SHOW_OPTIONS' => 'Show Options',
    'LBL_ALT_HIDE_OPTIONS' => 'Hide Options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Move selected entry to the list on the left',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Move selected entry to the list on the right',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Move selected entry up in the displayed list order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Move selected entry down in the displayed list order',
    'LBL_ALT_INFO' => 'Inligting',
    'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below. Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'e-posadres',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'ongeldige e-posadres',
    'LBL_EMAIL_PRIM_TITLE' => 'Make Primary Email Address',
    'LBL_SELECT_ALL_TITLE' => 'Kies alles',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Select this row',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERROR: There was an error during upload. Error code: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: There was an error during upload. Error code: {0} - {1}. The upload_maxsize is {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERROR: There was an error during your upload, please contact an administrator for help.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Size of Upload ({0} bytes) Exceeded Allowed Maximum: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'An error has occurred. Please refresh your page and try again.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Wysig',
    'LBL_EDIT_BUTTON_TITLE' => 'Wysig',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikaat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikaat',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Verwyder',
    'LBL_DELETE_BUTTON_TITLE' => 'Verwyder',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Aksie',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Stoor',
    'LBL_SAVE_BUTTON_TITLE' => 'Stoor',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Kanselleer',
    'LBL_CANCEL_BUTTON_TITLE' => 'Kanselleer',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Bad response from the server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Quote',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Sale Price',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manually',
        '5' => 'Elke 5 minute',
        '15' => 'Every 15 minutes',
        '30' => 'Every 30 minutes',
        '60' => 'Every hour',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Kies kolomme',
    'LBL_COLUMN_CHOOSER' => 'Column Chooser',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Stoor veranderinge',
    'LBL_DISPLAYED' => 'Vertoonde',
    'LBL_HIDDEN' => 'Versteek',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Kategorie',
    'LBL_LIST_CATEGORY' => 'Kategorie',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'Styl',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dawn',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Dag',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Dusk',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Nag',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Noon',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Disregard draft',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'This operation will delete this email, do you want to continue?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Apply an Email Template',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'This operation will override the email Body and Subject fields, do you want to continue?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmed Opt In',
    'LBL_OPT_IN_TITLE' => 'Kies In',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Bevestig In kies datum',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Bevestig In kies stuur datum',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Bevestig In kies fout datum',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Bevestig kies In Penning',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Ingetekende e-pos templaat is nie gekonfigureer nie. Stel asseblief op in e-pos vertellings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Primêre Groep",

    // footer
    'LBL_SUITE_TOP' => 'Terug na bo',
    'LBL_SUITE_SUPERCHARGED' => 'Bygewerk deur SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Gedryf deur SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Herstel wagwoord',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Biblioteek';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-pos adres';
$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Hoog',
    'Medium' => 'Medium',
    'Low' => 'Laag',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Toestemming',
    'contract' => 'Kontrak',
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
    'website' => 'Webwerf',
    'phone' => 'Telefoon',
    'given_to_user' => 'Given to User',
    'email' => 'Epos',
    'third_party' => 'Derdeparty',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Inligting bronne';

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
    'BHUTAN' => 'BUTAN',
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
    'CAMEROON' => 'KAMEROEN',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'KANARIESE EILANDE',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'CHILE',
    'CHINA' => 'SJINA',
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
    'DENMARK' => 'DENEMARKE',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINIKAANSE REPUBLIEK',
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
    'GREENLAND' => 'GROENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARY',
    'ICELAND' => 'YSLAND',
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
    'OTHER' => 'ANDER',
    'PACIFIC ISLAND' => 'PACIFIC ISLAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILLIPYNE',
    'POLAND' => 'POLE',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'SUID-AFRIKA',
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
    'SINGAPORE' => 'SINGAPOR',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'SUID-AFRIKA',
    'SOUTH YEMEN' => 'SUID YEMEN',
    'SPAIN' => 'SPANJE',
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
    2 => 'Access',
    3 => 'Ongeldig',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Veldtog',
    'email' => 'Epos',
    'event' => 'Gebeurtenis',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Veldtog',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Veldtog',
    'email' => 'Epos',
    'event' => 'Gebeurtenis',
    'system' => 'Stelsel',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Inligting bronne';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Konsep';
$app_list_strings['aok_status_list']['Expired'] = 'Verstreke';
$app_list_strings['aok_status_list']['In_Review'] = 'In Oorweging';
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
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Aanvaar';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Afgekeur';
$app_list_strings['fp_event_status_dom']['No Response'] = 'No Response';

$app_strings['LBL_STATUS_EVENT'] = 'Invite Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Accept Status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Select This Page';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Select All';
$app_strings['LBL_LISTVIEW_NONE'] = 'Deselect All';

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
        'Closed' => 'Gesluit',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nuut',
        'Open_Assigned' => 'Toegeken',
        'Closed_Closed' => 'Gesluit',
        'Open_Pending Input' => 'Hangende insette',
        'Closed_Rejected' => 'Verwerp',
        'Closed_Duplicate' => 'Duplikaat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Single user',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'System Default',
    'singleUser' => 'Single User',
    'roundRobin' => 'Om die beurt',
    'leastBusy' => 'Minste besig',
    'random' => 'Random',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Verslae';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Report Charts';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Fields';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Groter as';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Minder as';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aor_operator_list']['Contains'] = 'Bevat';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Begin met';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'And';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OF';
$app_list_strings['aor_condition_type_list']['Value'] = 'Value';
$app_list_strings['aor_condition_type_list']['Field'] = 'Field';
$app_list_strings['aor_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minute';
$app_list_strings['aor_date_type_list']['hour'] = 'Ure';
$app_list_strings['aor_date_type_list']['day'] = 'Dae';
$app_list_strings['aor_date_type_list']['week'] = 'Weeks';
$app_list_strings['aor_date_type_list']['month'] = 'Months';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aor_date_options']['now'] = 'Now';
$app_list_strings['aor_date_options']['field'] = 'This Field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascending';
$app_list_strings['aor_sort_operator']['DESC'] = 'Descending';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Count';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Sum';
$app_list_strings['aor_function_list']['AVG'] = 'Average';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Count';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Bar chart';
$app_list_strings['aor_chart_types']['line'] = 'Line chart';
$app_list_strings['aor_chart_types']['pie'] = 'Pie chart';
$app_list_strings['aor_chart_types']['radar'] = 'Radar chart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Maandeliks';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Weekliks';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Daagliks';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktief';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Onaktief';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Epos';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Gebruiker';
$app_list_strings['aor_email_type_list']['Users'] = 'Gebruikers';
$app_list_strings['aor_assign_options']['all'] = 'ALL Users';
$app_list_strings['aor_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'Vandag';
$app_list_strings['date_time_period_list']['yesterday'] = 'Yesterday';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Last Week';
$app_list_strings['date_time_period_list']['last_month'] = 'Verlede maand';
$app_list_strings['date_time_period_list']['this_month'] = 'Hierdie maand';
$app_list_strings['date_time_period_list']['this_quarter'] = 'This Quarter';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Last Quarter';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'on the';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Gevorderd';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'Dag';
$app_strings['LBL_CRON_MONTH'] = 'Month';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Daagliks';
$app_strings['LBL_CRON_WEEKLY'] = 'Weekliks';
$app_strings['LBL_CRON_MONTHLY'] = 'Maandeliks';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontrakte';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Fakture';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkte';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Line Items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Kwotasies';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analis';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Kompetisie';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integreerder';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Belegger';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Vennoot';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Pers';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Vooruitsig';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Herverkoper';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Ander';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Konsep';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Onderhandeling';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Afgelewer';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Op Hou';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Bevestig';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Gesluit Aanvaar';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Gesluit Verloor';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Gesluit Onbeskikbaar';
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
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analis';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Kompetisie';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integreerder';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Belegger';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Vennoot';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Pers';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Vooruitsig';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Herverkoper';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Ander';
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
$app_list_strings['product_type_dom']['Service'] = 'Diens';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Kwotasies';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Fakture';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontrakte';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Kwotasies';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Fakture';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontrakte';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Rekeninge';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakte';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Potensiële kliënte';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Not Started';
$app_list_strings['contract_status_list']['In Progress'] = 'Besig';
$app_list_strings['contract_status_list']['Signed'] = 'Signed';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Print as PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Please Select a Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNo templates found.\nPlease go to the PDF templates module and create one';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'WorkFlow Conditions';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Actions';
$app_list_strings['aow_status_list']['Active'] = 'Aktief';
$app_list_strings['aow_status_list']['Inactive'] = 'Onaktief';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Groter as';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Minder as';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'Bevat';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Begin met';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Is Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Afgehandel';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'Hangende';
$app_list_strings['aow_process_status_list']['Failed'] = 'Onsuksesvol';
$app_list_strings['aow_condition_operator_list']['And'] = 'And';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OF';
$app_list_strings['aow_condition_type_list']['Value'] = 'Value';
$app_list_strings['aow_condition_type_list']['Field'] = 'Field';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_action_type_list']['Date'] = 'Datum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minute';
$app_list_strings['aow_date_type_list']['hour'] = 'Ure';
$app_list_strings['aow_date_type_list']['day'] = 'Dae';
$app_list_strings['aow_date_type_list']['week'] = 'Weeks';
$app_list_strings['aow_date_type_list']['month'] = 'Months';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'Vandag';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Epos';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Gebruiker';
$app_list_strings['aow_email_type_list']['Users'] = 'Gebruikers';
$app_list_strings['aow_email_to_list']['to'] = 'Aan';
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
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['duration_unit_dom']['Days'] = 'Dae';
$app_list_strings['duration_unit_dom']['Hours'] = 'Ure';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'View Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Create Project';

//gmaps
$app_strings['LBL_MAP'] = 'Map';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Address';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Maps';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometers';

$app_list_strings['map_module_type_list']['Accounts'] = 'Rekeninge';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakte';
$app_list_strings['map_module_type_list']['Cases'] = 'Gebeure';
$app_list_strings['map_module_type_list']['Leads'] = 'Potensiële kliënte';
$app_list_strings['map_module_type_list']['Meetings'] = 'Vergaderings';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Geleenthede';
$app_list_strings['map_module_type_list']['Project'] = 'Projekte';
$app_list_strings['map_module_type_list']['Prospects'] = 'Teikens';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Rekening';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontak';
$app_list_strings['map_relate_type_list']['Cases'] = 'Geval';
$app_list_strings['map_relate_type_list']['Leads'] = 'Potensiele kliënt';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Vergadering';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Geleentheid';
$app_list_strings['map_relate_type_list']['Project'] = 'Projek';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Teiken';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administrasie';
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
$app_list_strings['marker_image_list']['company'] = 'Company';
$app_list_strings['marker_image_list']['conference'] = 'Konferensie';
$app_list_strings['marker_image_list']['construction'] = 'Konstruksie';
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
$app_list_strings['marker_image_list']['friday'] = 'Vrydag';
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
$app_list_strings['marker_image_list']['home'] = 'Tuis';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Inligting';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Biblioteek';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'Maandag';
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
$app_list_strings['marker_image_list']['saturday'] = 'Saterdag';
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
$app_list_strings['marker_image_list']['sun'] = 'Son';
$app_list_strings['marker_image_list']['sunday'] = 'Sondag';
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
$app_list_strings['marker_image_list']['thursday'] = 'Donderdag';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'Dinsdag';
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
$app_list_strings['marker_image_list']['wednesday'] = 'Woensdag';
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
$app_strings['LBL_ROLE'] = 'Role';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_EDIT_TAB'] = 'Edit Tabs';
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
    'Tasks' => 'Take',
    'Meetings' => 'Vergaderings',
    'Calls' => 'Oproepe',
    'Notes' => 'Notas',
    'Emails' => 'Eposse'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Verkope',
    'getAccountsSpotsData' => 'Rekeninge',
    'getLeadsSpotsData' => 'Potensiële kliënte',
    'getServiceSpotsData' => 'Diens',
    'getMarketingSpotsData' => 'Bemarking',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktiwiteite',
    'getQuotesSpotsData' => 'Kwotasies'
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
$app_list_strings['day_list']['Monday'] = 'Maandag';
$app_list_strings['day_list']['Tuesday'] = 'Dinsdag';
$app_list_strings['day_list']['Wednesday'] = 'Woensdag';
$app_list_strings['day_list']['Thursday'] = 'Donderdag';
$app_list_strings['day_list']['Friday'] = 'Vrydag';
$app_list_strings['day_list']['Saturday'] = 'Saterdag';
$app_list_strings['day_list']['Sunday'] = 'Sondag';
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
$app_list_strings['survey_status_list']['Draft'] = 'Konsep';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Gesluit';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Datum';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Rating';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Pending Confirm opt in, Confirm opt in not sent';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Pending Confirm opt in, Confirm opt in sent';
$app_strings['LBL_OPT_IN'] = 'Opted in';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Verwyderd';
$app_strings['LBL_OPT_IN_INVALID'] = 'Ongeldig';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Onbeskikbaar',
    'opt-in' => 'Kies In',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Kies In',
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
    'minute' => 'minutes',
    'hour' => 'hours',
    'day' => 'dae',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personal',
    'shared' => 'Shared',
    'group' => 'Groep',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Connected',
    'failed' => 'Onsuksesvol',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Besig',
    'success' => 'Sukses',
    'warning' => 'Warning',
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
$app_strings['LBL_CLICK_HERE'] = 'Click here';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Soek';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Soek';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Soek';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Vorige';
$app_strings['LBL_SEARCH_NEXT'] = 'Volgende';
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

$app_strings['LBL_KEY'] = 'Key';
$app_strings['LBL_VALUE'] = 'Value';
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
