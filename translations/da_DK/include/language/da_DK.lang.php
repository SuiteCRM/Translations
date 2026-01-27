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
    'language_pack_name' => 'Dansk (Denmark) - da_DK',
    'moduleList' => array(
        'Home' => 'Hjem',
        'ResourceCalendar' => 'Ressourcekalender',
        'Contacts' => 'Kontakter',
        'Accounts' => 'Kunder',
        'Alerts' => 'Advarsler',
        'Opportunities' => 'Muligheder',
        'Cases' => 'Sager',
        'Notes' => 'Noter',
        'Calls' => 'Opkald',
        'TemplateSectionLine' => 'Skabelon Afsnit Linje',
        'Calls_Reschedule' => 'Opkald Omplanlæg',
        'Emails' => 'Emails',
        'EAPM' => 'EAPM',
        'Meetings' => 'Møder',
        'Tasks' => 'Opgaver',
        'Calendar' => 'Kalender',
        'Leads' => 'Emner',
        'Currencies' => 'Valutaer',
        'Activities' => 'Aktiviteter',
        'Bugs' => 'Fejlrapport',
        'Feeds' => 'RSS',
        'iFrames' => 'Portal',
        'TimePeriods' => 'Tidsperioder',
        'ContractTypes' => 'Kontrakttyper',
        'Schedulers' => 'Planlæggere',
        'Project' => 'Projekter',
        'ProjectTask' => 'Projektopgaver',
        'Campaigns' => 'Kampagner',
        'CampaignLog' => 'Kampagne Log',
        'Documents' => 'Dokumenter',
        'DocumentRevisions' => 'Dokument revisioner',
        'Connectors' => 'Forbindelser',
        'Roles' => 'Roller',
        'Notifications' => 'Notifikation',
        'Sync' => 'Synkronisering',
        'Users' => 'Brugere',
        'Employees' => 'Medarbejdere',
        'Administration' => 'Administration',
        'ACLRoles' => 'Roller',
        'InboundEmail' => 'Indgående email',
        'Releases' => 'Versioner',
        'Prospects' => 'Målgrupper',
        'Queues' => 'Køer',
        'EmailMarketing' => 'Email markedsføring',
        'EmailTemplates' => 'Email - Skabeloner',
        'ProspectLists' => 'Mål - lister',
        'SavedSearch' => 'Gemte søgninger',
        'UpgradeWizard' => 'Guiden Opgradering',
        'Trackers' => 'Tråd',
        'TrackerSessions' => 'Sporingssessioner',
        'TrackerQueries' => 'Sporingsforespørgsler',
        'FAQ' => 'Ofte stillede spørgsmål',
        'Newsletters' => 'Nyhedsbrev',
        'SugarFeed' => 'SuiteCRM Rss',
        'SugarFavorites' => 'SuiteCRM favoritter',

        'OAuthKeys' => 'OAuth nøgler',
        'OAuthTokens' => 'OAuth token',
        'OAuth2Clients' => 'OAuth klienter',
        'OAuth2Tokens' => 'OAuth token',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Hjem',
        'Dashboard' => 'Oversigtspanel',
        'Contacts' => 'Kontakt',
        'Accounts' => 'Kunder',
        'Opportunities' => 'Mulighed',
        'Cases' => 'Sager',
        'Notes' => 'Noter',
        'Calls' => 'Opkald',
        'Emails' => 'Emails',
        'EmailTemplates' => 'Email skabelon',
        'Meetings' => 'Møder',
        'Tasks' => 'Opgaver',
        'Calendar' => 'Kalender',
        'Leads' => 'Emner',
        'Activities' => 'Aktiviteter',
        'Bugs' => 'Fejlrapporter',
        'KBDocuments' => 'Knowledge Base',
        'Feeds' => 'RSS',
        'iFrames' => 'Portal',
        'TimePeriods' => 'Tidsperioder',
        'Project' => 'Projekter',
        'ProjectTask' => 'Projektopgaver',
        'Prospects' => 'Målgrupper',
        'Campaigns' => 'Kampagner',
        'Documents' => 'Dokumenter',
        'Sync' => 'Synkronisering',
        'Users' => 'Tildelt til',
        'SugarFavorites' => 'SuiteCRM favoritter',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Ja',
        '2' => 'Nej',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Rådgiver',
        'Competitor' => 'Konkurrent',
        'Customer' => 'Kunde',
        'Integrator' => 'Integrator',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Press' => 'Presse',
        'Prospect' => 'Prospekt',
        'Reseller' => 'Forhandler',
        'Other' => 'Andre',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Beklædning',
        'Banking' => 'Bank',
        'Biotechnology' => 'Bioteknologi',
        'Chemicals' => 'Kemi',
        'Communications' => 'Kommunikation',
        'Construction' => 'Konstruktion',
        'Consulting' => 'Konsulent',
        'Education' => 'Uddannelse',
        'Electronics' => 'Elektronik',
        'Energy' => 'Energi',
        'Engineering' => 'Rådgivning',
        'Entertainment' => 'Underholdning',
        'Environmental' => 'Miljø',
        'Finance' => 'Finans',
        'Government' => 'Offentlig',
        'Healthcare' => 'Sundhed',
        'Hospitality' => 'Hotel og ophold',
        'Insurance' => 'Forsikring',
        'Machinery' => 'Maskiner',
        'Manufacturing' => 'Produktion',
        'Media' => 'Medie',
        'Not For Profit' => 'Non-profit',
        'Recreation' => 'Rekreation',
        'Retail' => 'Detail',
        'Shipping' => 'Fragt',
        'Technology' => 'Teknologi',
        'Telecommunications' => 'Telekommunikation',
        'Transportation' => 'Transport',
        'Utilities' => 'Offentligselskab',
        'Other' => 'Andre',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Kold canvas',
        'Existing Customer' => 'Eksisterende kunde',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Medarbejder',
        'Partner' => 'Partner',
        'Public Relations' => 'PR',
        'Direct Mail' => 'Mail',
        'Conference' => 'Konference',
        'Trade Show' => 'Udstilling',
        'Web Site' => 'Hjemmeside',
        'Word of mouth' => 'Mund-til-mund',
        'Email' => 'Emails',
        'Campaign' => 'Kampagner',
        'Other' => 'Andre',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Eksisterende forretning',
        'New Business' => 'Ny forretning',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Omsætning',
        'Investment' => 'Investering',
        'Expected_Revenue' => 'Forventet omsætning',
        'Budget' => 'Budget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Forretningsbeslutningstager',
        'Business Evaluator' => 'Forretningsrådgiver',
        'Technical Decision Maker' => 'Teknisk beslutningstager',
        'Technical Evaluator' => 'Teknisk rådgiver',
        'Executive Sponsor' => 'Ledelse',
        'Influencer' => 'Meningsdanner',
        'Other' => 'Andre',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Alternativ kontakt',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Netto 15 dage',
        'Net 30' => 'Netto 30 dage',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kvalifikation',
        'Needs Analysis' => 'Behov for analyse',
        'Value Proposition' => 'Værdi',
        'Id. Decision Makers' => 'Identificerer beslutningstagere',
        'Perception Analysis' => 'Analyse',
        'Proposal/Price Quote' => 'Tilbud',
        'Negotiation/Review' => 'Forhandling',
        'Closed Won' => 'Lukket og vundet',
        'Closed Lost' => 'Lukket og tabt',
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
        'Call' => 'Opkald',
        'Meeting' => 'Møder',
        'Task' => 'Opgaver',
        'Email' => 'Emails',
        'Note' => 'Noter',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Hr.',
        'Ms.' => 'Frøken.',
        'Mrs.' => 'Fru.',
        'Miss' => 'Frøken',
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
        60 => '1 minut før',
        300 => '5 minutter før',
        600 => '10 minutter før',
        900 => '15 minutter før',
        1800 => '30 minutter før',
        3600 => '1 time før',
        7200 => '2 timer før',
        10800 => '3 timer før',
        18000 => '5 timer før',
        86400 => '1 dag før',
    ),

    'task_priority_default' => 'Medium',
    'task_priority_dom' => array(
        'High' => 'Høj',
        'Medium' => 'Medium',
        'Low' => 'Lav',
    ),
    'task_status_default' => 'Ikke startet',
    'task_status_dom' => array(
        'Not Started' => 'Ikke startet',
        'In Progress' => 'I gang',
        'Completed' => 'Afsluttet',
        'Pending Input' => 'Afventer input',
        'Deferred' => 'Aflyst',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Afholdt',
        'Not Held' => 'Ikke afholdt',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Andre',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Afholdt',
        'Not Held' => 'Ikke afholdt',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Indgående',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Ny',
        'Assigned' => 'Tildelt',
        'In Process' => 'I gang',
        'Converted' => 'Konverteret',
        'Recycled' => 'Genbrugt',
        'Dead' => 'Død',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Høj',
        'P2' => 'Medium',
        'P3' => 'Lav',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Almindelig bruger',
        'Administrator' => 'Administrator',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Emailkode',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktiv',
        'Terminated' => 'Stoppet',
        'Leave of Absence' => 'Fravær',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Høj',
        'Medium' => 'Medium',
        'Low' => 'Lav',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array(
        'Not Started' => 'Ikke startet',
        'In Progress' => 'I gang',
        'Completed' => 'Afsluttet',
        'Pending Input' => 'Afventer input',
        'Deferred' => 'Aflyst',
    ),
    'project_task_utilization_options' => array(
        '0' => 'ingen',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Udkast',
        'In Review' => 'Til gennemsyn',
        'Underway' => 'Undervejs',
        'On_Hold' => 'På hold',
        'Completed' => 'Afsluttet',
    ),
    'project_status_default' => 'Udkast',

    'project_duration_units_dom' => array(
        'Days' => 'Dage',
        'Hours' => 'Timer',
    ),

    'activity_status_type_dom' => array(
        '' => '--Ingen--',
        'active' => 'Aktiv',
        'inactive' => 'Inaktiv',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Kunder',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Kunder',
        'Opportunities' => 'Mulighed',
        'Cases' => 'Sager',
        'Leads' => 'Emner',
        'Contacts' => 'Kontakt', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Fejlrapporter',
        'Project' => 'Projekter',

        'Prospects' => 'Målgrupper',
        'ProjectTask' => 'Projektopgaver',

        'Tasks' => 'Opgaver',

        'AOS_Contracts' => 'Kontrakt',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Tilbud',
        'AOS_Products' => 'Produkt',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Kunder',
        'Contacts' => 'Kontakt',
        'Opportunities' => 'Mulighed',
        'Campaigns' => 'Kampagner',
        'Tasks' => 'Opgaver',
        'Emails' => 'Emails',

        'Bugs' => 'Fejlrapporter',
        'Project' => 'Projekter',
        'ProjectTask' => 'Projektopgaver',
        'Prospects' => 'Målgrupper',
        'Cases' => 'Sager',
        'Leads' => 'Emner',

        'Meetings' => 'Møder',
        'Calls' => 'Opkald',

        'AOS_Contracts' => 'Kontrakt',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Tilbud',
        'AOS_Products' => 'Produkt',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Kunder',
        'Contacts' => 'Kontakt',
        'Tasks' => 'Opgaver',
        'Opportunities' => 'Mulighed',

        'Bugs' => 'Fejlrapporter',
        'Cases' => 'Sager',
        'Leads' => 'Emner',

        'Project' => 'Projekter',
        'ProjectTask' => 'Projektopgaver',

        'Prospects' => 'Målgrupper',

        'AOS_Contracts' => 'Kontrakt',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Tilbud',
        'AOS_Products' => 'Produkt',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Tilbud',
        'AOS_Invoices' => 'Fakturaer',
        'AOS_Contracts' => 'Kontrakter',
    ),
    'issue_priority_default_key' => 'Medium',
    'issue_priority_dom' => array(
        'Urgent' => 'Haster',
        'High' => 'Høj',
        'Medium' => 'Medium',
        'Low' => 'Lav',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepteret',
        'Duplicate' => 'Kopi',
        'Closed' => 'Lukket',
        'Out of Date' => 'Udløbet',
        'Invalid' => 'Ugyldig',
    ),

    'issue_status_default_key' => 'Ny',
    'issue_status_dom' => array(
        'New' => 'Ny',
        'Assigned' => 'Tildelt',
        'Closed' => 'Lukket',
        'Pending' => 'Afventer',
        'Rejected' => 'Afvist',
    ),

    'bug_priority_default_key' => 'Medium',
    'bug_priority_dom' => array(
        'Urgent' => 'Haster',
        'High' => 'Høj',
        'Medium' => 'Medium',
        'Low' => 'Lav',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepteret',
        'Duplicate' => 'Kopi',
        'Fixed' => 'Løst',
        'Out of Date' => 'Udløbet',
        'Invalid' => 'Ugyldig',
        'Later' => 'Senere',
    ),
    'bug_status_default_key' => 'Ny',
    'bug_status_dom' => array(
        'New' => 'Ny',
        'Assigned' => 'Tildelt',
        'Closed' => 'Lukket',
        'Pending' => 'Afventer',
        'Rejected' => 'Afvist',
    ),
    'bug_type_default_key' => 'Fejlrapporter',
    'bug_type_dom' => array(
        'Defect' => 'Defekt',
        'Feature' => 'Funktion',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administration',
        'Product' => 'Produkt',
        'User' => 'Tildelt til',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Intern',
        'Forum' => 'Forum',
        'Web' => 'Internettet',
        'InboundEmail' => 'Emails',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Kunder',
        'Activities' => 'Aktiviteter',
        'Bugs' => 'Fejlrapport',
        'Calendar' => 'Kalender',
        'Calls' => 'Opkald',
        'Campaigns' => 'Kampagner',
        'Cases' => 'Sager',
        'Contacts' => 'Kontakter',
        'Currencies' => 'Valutaer',
        'Dashboard' => 'Oversigtspanel',
        'Documents' => 'Dokumenter',
        'Emails' => 'Emails',
        'Feeds' => 'Feeds',
        'Forecasts' => 'Prognoser',
        'Help' => 'Hjælp',
        'Home' => 'Hjem',
        'Leads' => 'Emner',
        'Meetings' => 'Møder',
        'Notes' => 'Noter',
        'Opportunities' => 'Muligheder',
        'Outlook Plugin' => 'Outlook Plugin',
        'Projects' => 'Projekter',
        'Quotes' => 'Tilbud',
        'Releases' => 'Versioner',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Opgradering',
        'Users' => 'Brugere',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planlagt',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Afsluttet',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Telesalg',
        'Mail' => 'Brev',
        'Email' => 'Emails',
        'Print' => 'Udskriv',
        'Web' => 'Internettet',
        'Radio' => 'Radio',
        'Television' => 'Tv',
        'NewsLetter' => 'Nyhedsbrev',
        'Survey' => 'Undersøgelse',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Ugentlig',
        'Monthly' => 'Månedlig',
        'Quarterly' => 'Kvartal',
        'Annually' => 'Årlig',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Januar',
        '2' => 'Februar',
        '3' => 'Marts',
        '4' => 'April',
        '5' => 'Maj',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'August',
        '9' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'December',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Maj',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Aug',
        '9' => 'Sep',
        '10' => 'Okt',
        '11' => 'Nov',
        '12' => 'Dec',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Søndag',
        '2' => 'Mandag',
        '3' => 'Tirsdag',
        '4' => 'Onsdag',
        '5' => 'Torsdag',
        '6' => 'Fredag',
        '7' => 'Lørdag',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Søn',
        '2' => 'Man',
        '3' => 'Tirs',
        '4' => 'Ons',
        '5' => 'Tors',
        '6' => 'Fre',
        '7' => 'Lør',
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
        'personal' => 'Personlig',
        'group' => 'Gruppe',
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
        'personal' => 'Personlig',
        'group' => 'Gruppe',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personlig',
        'group' => 'Gruppe',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personlig',
        'group' => 'Gruppe',
        'system' => 'System',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Sendt',
        'archived' => 'Arkiveret',
        'draft' => 'Udkast',
        'inbound' => 'Indgående',
        'campaign' => 'Kampagner',
    ),
    'dom_email_status' => array(
        'archived' => 'Arkiveret',
        'closed' => 'Lukket',
        'draft' => 'Udkast',
        'read' => 'Læst',
        'replied' => 'Besvaret',
        'sent' => 'Sendt',
        'send_error' => 'Sendt med fejl',
        'unread' => 'Ej læst',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arkiveret',
    ),

    'dom_email_server_type' => array(
        '' => '--Ingen--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Ingen--',
        'createcase' => 'Opret sag',
        'bounce' => 'Afvisningshåndtering',
    ),
    'dom_email_distribution' => array(
        '' => '--Ingen--',
        'direct' => 'Direkte tildelt',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Mindst-travl',
    ),
    'dom_email_errors' => array(
        1 => 'Only select one user when Direct Assigning items.',
        2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Ja',
        'bool_false' => 'Nej',
    ),
    'dom_int_bool' => array(
        1 => 'Ja',
        0 => 'Nej',
    ),
    'dom_switch_bool' => array(
        'on' => 'Ja',
        'off' => 'Nej',
        '' => 'Nej',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM E-mail klient',
        'mailto' => 'Ekstern Mail klient',
    ),

    'dom_editor_type' => array(
        'none' => 'Direkte HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mosaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Default Email Format',
        'html' => 'HTML-e-mail',
        'plain' => 'E-mail i almindeligt tekstformat',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Seneste operationstid, ikke udført',
        'ready' => 'Klar',
        'in progress' => 'I gang',
        'failed' => 'Mislykket',
        'completed' => 'Afsluttet',
        'no curl' => 'Ikke kørt: Der findes ingen cURL',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutter',
        'hour' => 'Timer',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Markedsføring',
        'Knowledege Base' => 'Vidensbase',
        'Sales' => 'Salg',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arkiveret',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Markedsføringsmateriale',
        'Product Brochures' => 'Produktbrochurer',
        'FAQ' => 'Ofte stillede spørgsmål',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktiv',
        'Draft' => 'Udkast',
        'FAQ' => 'Ofte stillede spørgsmål',
        'Expired' => 'Udløbet',
        'Under Review' => 'Til gennemsyn',
        'Pending' => 'Afventer',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Brevfletning',
        'eula' => 'Slutbrugerlicensaftale',
        'nda' => 'Hemmeligholdelsesaftale',
        'license' => 'Licensaftale',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Accepteret',
        'decline' => 'Afvist',
        'tentative' => 'Foreløbig',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accepteret',
        'decline' => 'Afvist',
        'tentative' => 'Foreløbig',
        'none' => 'Ingen',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Ingen',
        'Daily' => 'Dagligt',
        'Weekly' => 'Ugentlig',
        'Monthly' => 'Månedlig',
        'Yearly' => 'Årligt',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dag(e)',
        'Weekly' => 'uge(r)',
        'Monthly' => 'måned(er)',
        'Yearly' => 'år',
    ),

    'duration_dom' => array(
        '' => 'Ingen',
        '900' => '15 minutter',
        '1800' => '30 minutter',
        '2700' => '45 minutter',
        '3600' => '1 time',
        '5400' => '1,5 timer',
        '7200' => '2 timer',
        '10800' => '3 timer',
        '21600' => '6 timer',
        '86400' => '1 dag',
        '172800' => '2 dage',
        '259200' => '3 dage',
        '604800' => '1 uge',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Standard',
        'seed' => 'Spire',
        'exempt_domain' => 'Suppression Liste - efter Domain',
        'exempt_address' => 'Suppression Liste - efter Email Adresse',
        'exempt' => 'Suppression Liste - efter Id',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktiv',
        'inactive' => 'Inaktiv',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Meddelelse afsendt',
        'send error' => 'Meddelelse mislykkes',
        'invalid email' => 'Ugyldig email',
        'link' => 'Klik Link',
        'viewed' => 'Set meddelelse',
        'removed' => 'Fravalgt',
        'lead' => 'Emner oprettet',
        'contact' => 'Opret kontakt',
        'blocked' => 'Undertrykt af adresse eller domain',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontakter',
        'Users' => 'Brugere',
        'Prospects' => 'Målgrupper',
        'Leads' => 'Emner',
        'Accounts' => 'Kunder',
    ),
    'merge_operators_dom' => array(
        'like' => 'Indeholder',
        'exact' => 'Præcis',
        'start' => 'Starter med',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Ja',
        'false' => 'Nej',
        'required' => 'Obligatorisk',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Slukket',
        1 => 'Tændt',
        2 => 'Filter',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Høj',
        'medium' => 'Medium',
        'low' => 'Lav',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Ikke startet',
        'inprogress' => 'I gang',
        'completed' => 'Afsluttet',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Udvid',
        'collapselegend' => 'Sammentræk',
        'clickfordrilldown' => 'Klik for detaljer',
        'detailview' => 'Detalje oversigt...',
        'piechart' => 'Lagkage',
        'groupchart' => 'Gruppe',
        'stackedchart' => 'Stabel',
        'barchart' => 'Søjlediagram',
        'horizontalbarchart' => 'Liggende søjlediagram',
        'linechart' => 'Linje',
        'noData' => 'Data findes ikke',
        'print' => 'Udskriv',
        'pieWedgeName' => 'sektioner',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Enkelt anførselstegn (&#39;)',
        '"' => 'Dobbelt anførselstegn (&#34;)',
        '' => 'Ingen',
        'other' => 'Andre:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Andre:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nyt vindue',
        '_self' => 'samme vindue',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Auto-refresh ikke',
        '30' => 'Hvert 30. sekund',
        '60' => 'Hvert minut',
        '180' => 'Hvert 3. minut',
        '300' => 'Hvert 5. minut',
        '600' => 'Hvert 10. minut',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Aldrig',
        '30' => 'Hvert 30. sekund',
        '60' => 'Hvert minut',
        '180' => 'Hvert 3. minut',
        '300' => 'Hvert 5. minut',
        '600' => 'Hvert 10. minut',
    ),
    'date_range_search_dom' => array(
        '=' => 'Lig med',
        'not_equal' => 'Ikke lig med',
        'greater_than' => 'Større end',
        'less_than' => 'Mindre end',
        'last_7_days' => 'Sidste 7 dage',
        'next_7_days' => 'Næste 7 dage',
        'last_30_days' => 'Sidste 30 dage',
        'next_30_days' => 'Næste 30 dage',
        'last_month' => 'Sidste måned',
        'this_month' => 'Denne måned',
        'next_month' => 'Næste måned',
        'last_year' => 'Sidste år',
        'this_year' => 'Dette pr',
        'next_year' => 'Næste år',
        'between' => 'Er mellem',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Lig med',
        'not_equal' => 'Er ikke lig med',
        'greater_than' => 'Større end',
        'greater_than_equals' => 'Større end eller lig med',
        'less_than' => 'Mindre end',
        'less_than_equals' => 'Mindre ned eller lig med',
        'between' => 'Er mellem',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopi',
        'move' => 'Flyt',
        'donothing' => 'Gør intet',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Resultater',
    'ERR_SEARCH_INVALID_QUERY' => 'Der opstod en fejl da søgning blev udført. Din forespørgsels syntaks er muligvis ikke korrekt.',
    'ERR_SEARCH_NO_RESULTS' => 'Der er ingen resultater der matcher dine søgekriterier. Prøv at søge bredere.',
    'LBL_SEARCH_PERFORMED_IN' => 'Søgning udført på',
    'LBL_EMAIL_CODE' => 'Emailkode:',
    'LBL_SEND' => 'Afsend',
    'LBL_LOGOUT' => 'Log ud',
    'LBL_TOUR_NEXT' => 'Næste',
    'LBL_TOUR_SKIP' => 'Spring over',
    'LBL_TOUR_BACK' => 'Tilbage',
    'LBL_TOUR_TAKE_TOUR' => 'Tag rundvisningen',
    'LBL_MOREDETAIL' => 'Flere detaljer' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Rediger Inline' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Se' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filter' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Tilføj' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Tilføj E-mail-adresse' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Vis/Skjul' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Slet' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Ryd' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Slet' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Fjern E-mail-adresse' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Fravælg',
    'LBL_ID_FF_INVALID' => 'Gør ugyldig',
    'LBL_ADD' => 'Tilføj' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Firma logo' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Forbindelser Popups',
    'LBL_CLOSEINLINE' => 'Luk',
    'LBL_VIEWINLINE' => 'Se',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Udskriv',
    'LBL_HELP' => 'Hjælp',
    'LBL_ID_FF_SELECT' => 'Vælg',
    'DEFAULT' => 'Grundlæggende',
    'LBL_SORT' => 'Sorter',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Aktiverer SMTP over SSL eller TLS?',
    'LBL_NO_ACTION' => 'Der er ingen handling med det pågældende navn: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Der er ingen handlinger tilgængelig.',
    'LBL_NO_DATA' => 'Ingen data',

    'LBL_ROUTING_FLAGGED' => 'flag er sat',
    'LBL_ROUTING_TO' => 'til',
    'LBL_ROUTING_TO_ADDRESS' => 'til adresse',
    'LBL_ROUTING_WITH_TEMPLATE' => 'med skabelon',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'This record currently contains values in the Office Phone and Address fields. To overwrite these values with the following Office Phone and Address of the Account that you selected, click "OK". To keep the current values, click "Cancel".',
    'LBL_DROP_HERE' => '[Slip her]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Sæt Gmail standarder',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Navn',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Udgående Mail Server',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP Adgangskode',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP-port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP-server',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP Brugernavn',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Standard',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Advarsel: Mangler brugernavn og adgangskode til den udgående mail-konto.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Konfigurer e-mail-konti for at se indgående e-mails fra dine e-mail-konti.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Give SMTP mail serveroplysninger til brug for udgående e-mail i Mail-konti.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Udført',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Ryd',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Til:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Til/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Email adresse',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Navn',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Ingen adresse fundet',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Gem & tilføj til adressebog',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Vælg adressebogselementer',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adressebog',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Advarsel! Den udgående konto, du forsøger at slette er knyttet til en eksisterende indgående konto. Er du sikker på du vil fortsætte?',
    'LBL_EMAIL_ADDRESSES' => 'Emails',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Email adresse',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Kan ikke bekræfte email adresse',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Import til SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Ansvar',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Vedhæft fil til email',
    'LBL_EMAIL_ATTACHMENT' => 'Vedhæft fil til email',
    'LBL_EMAIL_ATTACHMENTS' => 'Vedhæft filer',
    'LBL_EMAIL_ATTACHMENTS2' => 'Fra SuiteCRM dokumenter',
    'LBL_EMAIL_ATTACHMENTS3' => 'Skabelon vedhæft',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Filnavn',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumenter',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Afbryd',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Karaktersæt',
    'LBL_EMAIL_CHECK' => 'Check mail',
    'LBL_EMAIL_CHECKING_NEW' => 'Check for nye emails',
    'LBL_EMAIL_CHECKING_DESC' => 'Første check for nye kunder kan tage lidt tid.',
    'LBL_EMAIL_CLOSE' => 'Luk',
    'LBL_EMAIL_COFFEE_BREAK' => 'Store mailbokse tager lang tid.',

    'LBL_EMAIL_COMPOSE' => 'Emails',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Denne email har ingen modtagere.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Der er ingen tekst i emailen. Ønsker du at sende?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Denne email har intet emne. Ønsker du at sende?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(intet emne)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Indtast venligst gyldige e-mailadresser i Til, CC og BCC felterne',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Slet denne email?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Er du sikker på du vil slette denne signatur?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-mail afsendt',

    'LBL_EMAIL_CREATE_NEW' => '--Oprettes ved gem--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Flere',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tom',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Dato sendes fra afsender',
    'LBL_EMAIL_DATE_TODAY' => 'I dag',
    'LBL_EMAIL_DELETE' => 'Slet',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Slet valgte meddelelser?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email slettet.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Sletter meddelelse',
    'LBL_EMAIL_DETAILS' => 'Detaljer',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Kun den primære adresse vil blive anvendt ifm kontakter.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Tømmer affald',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Sletter udgående server',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Renser cache filer',
    'LBL_EMAIL_EMPTY_MSG' => 'Ingen emails at vise.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Mappenavnet skal være unikt og ikke tomt. Prøv venligst igen.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Kan ikke slette en mappe. Mappen eller dens undermapper har e-mails eller en brevkasse, der er knyttet til den.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Kan ikke bestemme hvilken folder.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Check dine indstillinger.',
    'LBL_EMAIL_ERROR_DESC' => 'Der blev fundet fejl: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Du har ikke adgang til dette område. Kontakt din administartor for at få adgang.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM mappenavne skal være unikke.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Du skal indtaste søgningskriterier.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Der opstod en fejl',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Meddelelse fjernet fra Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Enten er beskeden slettet fra serveren eller blevet flyttet til en anden mappe',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Forbindelsen til e-mail-serveren mislykkedes. Kontakt venligst din Administrator',
    'LBL_EMAIL_ERROR_MOVE' => 'Flytte email mellem servere eller konti er desværre ikke muligt.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Flyt fejl',
    'LBL_EMAIL_ERROR_NAME' => 'Et navn er nødvendigt.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Fra-adresse er påkrævet. Angiv venligst en gyldig e-mail-adresse.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Angiv en fil.',
    'LBL_EMAIL_ERROR_SERVER' => 'En mail server adresse er nødvendig.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'E-Mail-kontoen er muligvis ikke blevet gemt.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Mail serveren har ikke svaret',
    'LBL_EMAIL_ERROR_USER' => 'Et login navn er nødvendig.',
    'LBL_EMAIL_ERROR_PORT' => 'En mail server port er nødvendig.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'En server protokol er nødvendig.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Monitored Folder is required.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Papirkurven er påkrævet.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Disse oplysninger er ikke tilgængelige',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Der er ikke angivet nogen udgående mailserver.',
    'LBL_EMAIL_ERROR_SENDING' => 'Fejl ved afsendelse af email. Kontakt venligst din administrator for hjælp.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Foldere',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Tilføj',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Tilføj en ny folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Omdøb folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Gem',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Tilføj denne folder til',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Denne folder kan ikke ændres',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Er du sikker på, at du ønsker at slette denne folder?',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Ny folder',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Du skal vælge en folder.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'SuiteCRM folder vedligeholdelse',

    'LBL_EMAIL_FORWARD' => 'Videresend',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Downloadede [[count]] af [[total]] e-mails',
    'LBL_EMAIL_FROM' => 'Fra',
    'LBL_EMAIL_GROUP' => 'gruppe',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Gruppe',
    'LBL_EMAIL_HOME_FOLDER' => 'Hjem',
    'LBL_EMAIL_IE_DELETE' => 'Slet konto',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Sletter signatur',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Er du sikker på, at du ønsker at slette denne konto?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Sletning lykkes.',
    'LBL_EMAIL_IE_SAVE' => 'Gemmer konto information',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importer email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Import til SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importer',
    'LBL_EMAIL_INVALID' => 'Ugyldig',
    'LBL_EMAIL_LOADING' => 'Indlæser...',
    'LBL_EMAIL_MARK' => 'Marker',
    'LBL_EMAIL_MARK_FLAGGED' => 'som markeret',
    'LBL_EMAIL_MARK_READ' => 'som læst',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'som umarkeret',
    'LBL_EMAIL_MARK_UNREAD' => 'som ej læst',
    'LBL_EMAIL_ASSIGN_TO' => 'Tildelt til',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Opret folder',
    'LBL_EMAIL_MENU_COMPOSE' => 'Sammensæt til',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Slet folder',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Tøm affald',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synkronisere',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Rens cache filer',
    'LBL_EMAIL_MENU_REMOVE' => 'Slet',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Omdøb folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Omdøb folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Du skal vælge før du kan udføre denne handling.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Create a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tømmer alle affaldsfoldere for dine konti',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marker disse emails som læst',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Fjern markering på disse emails',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Rename a Folder (remote or in SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'meddelelser',

    'LBL_EMAIL_ML_NAME' => 'Listenavn',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Vælg liste adresser',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Mulige liste adresser',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Klik</b> for at vælge flere<br />(Mac brugere brug <b>CMD-Klik</b>)',

    'LBL_EMAIL_NO' => 'Nej',
    'LBL_EMAIL_NOT_SENT' => 'Systemet kan ikke behandle din anmodning. Kontakt systemadministratoren.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Et øjeblik...',
    'LBL_EMAIL_OPEN_ALL' => 'Åben flere meddelelser',
    'LBL_EMAIL_OPTIONS' => 'Optioner',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Quick Compose',
    'LBL_EMAIL_OPT_OUT' => 'Fravalgt',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Fravalgt og ugyldigt',
    'LBL_EMAIL_PERFORMING_TASK' => 'Udfører opgave',
    'LBL_EMAIL_PRIMARY' => 'Primær',
    'LBL_EMAIL_PRINT' => 'Udskriv',

    'LBL_EMAIL_QC_BUGS' => 'Fejlrapporter',
    'LBL_EMAIL_QC_CASES' => 'Sager',
    'LBL_EMAIL_QC_LEADS' => 'Emner',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
    'LBL_EMAIL_QC_TASKS' => 'Opgaver',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Mulighed',
    'LBL_EMAIL_QUICK_CREATE' => 'Kvik opret',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Opbygger foldere',
    'LBL_EMAIL_RELATE_TO' => 'Relater',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Vis relationer',
    'LBL_EMAIL_RECORD' => 'Email Record',
    'LBL_EMAIL_REMOVE' => 'Slet',
    'LBL_EMAIL_REPLY' => 'Besvar',
    'LBL_EMAIL_REPLY_ALL' => 'Besvar alle',
    'LBL_EMAIL_REPLY_TO' => 'Besvar-til',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Modtagere meddelelse',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Retrieving Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Please select only one email record',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Tilbage til forrige modul?',
    'LBL_EMAIL_REVERT' => 'Fortryd',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE' => 'Regel vedligeholdelse',

    'LBL_EMAIL_SAVE' => 'Gem',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Gem & svar',
    'LBL_EMAIL_SAVE_DRAFT' => 'Gem udkast',
    'LBL_EMAIL_DRAFT_SAVED' => 'Udkastet er blevet gemt',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Dato fra',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Dato til',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Ingen resultater fundet på din søgning.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Søge resultater',

    'LBL_EMAIL_SELECT' => 'Vælg',

    'LBL_EMAIL_SEND' => 'Afsend',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sender Email',

    'LBL_EMAIL_SETTINGS' => 'Indstillinger',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Konti',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Ryd Form',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Check efter nye emails',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Fra adresse',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-mail-adresse til test-notifikationer:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Fra navn',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Svar til adresse',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synkroniser alle konti',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Der blev sendt en e-mail til den valgte e-mail-adresse ved hjælp af de angivne indstillinger for udgående mails. Check venligst om emailen blev modtaget for at kontrollere at indstillingerne er korrekte.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Se hele SMTP log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Synkronisering kan tage flere minutter.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Klik på Skift-tasten eller Ctrl-tasten for at vælge flere mapper.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Generel',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Opret gruppe folder',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Rediger gruppe mappe',

    'LBL_EMAIL_SETTINGS_NAME' => 'Navn',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Disse indstillinger kræver muligvis en opdatering af siden.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Modtager',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Indstillingerne er gemt.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Send email som tekst',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Antal emails pr side',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuel indstillinger',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Præferencer',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Mulige bruger foldere',
    'LBL_EMAIL_ERROR_PREPEND' => 'Der opstod en email fejl:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Den udgående mailserver der er valgt til den mail-konto du bruger, er ugyldig. Kontroller opsætningen eller vælg en anden mailserver til denne mail-konto.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Der er ikke konfigureret en udgående mailserver til at sende e-mails. Du bedes konfigurere en udgående mailserver eller vælge en udgående mailserver til den mail-konto du bruger, i indstillinger >> Mail-konto.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Standardsignatur',
    'LBL_EMAIL_SIGNATURES' => 'Signatur',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Andre',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Foldere udenfor SuiteCRM ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM mapper]',
    'LBL_EMAIL_SUBJECT' => 'Emne',
    'LBL_EMAIL_SUCCESS' => 'Lykkes',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM mappe',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Email template body is empty',
    'LBL_EMAIL_TEMPLATES' => 'Skabeloner',
    'LBL_EMAIL_TO' => 'Til',
    'LBL_EMAIL_VIEW' => 'Se',
    'LBL_EMAIL_VIEW_HEADERS' => 'Vis hoved',
    'LBL_EMAIL_VIEW_RAW' => 'Vis den rå Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Denne feature er ikke supportet når du anvender POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Standard linktekst.',
    'LBL_EMAIL_YES' => 'Ja',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Send test e-mail',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test e-mail sendt',
    'LBL_EMAIL_MESSAGE_NO' => 'Besked Nr.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import lykkedes',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importen mislykkedes, fordi beskeden enten allerede er importeret eller er slettet fra serveren',

    'LBL_LINK_NONE' => 'Ingen',
    'LBL_LINK_ALL' => 'Alle',
    'LBL_LINK_RECORDS' => 'Rækker',
    'LBL_LINK_SELECT' => 'Vælg',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Godkend',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Vil du lukke denne #module #?',
    'LBL_INVALID_FILE_EXTENSION' => 'Ugyldig filendelse',

    'ERR_AJAX_LOAD' => 'Der opstod en fejl:',
    'ERR_AJAX_LOAD_FAILURE' => 'Der opstod en fejl under behandling af din anmodning, prøv venligst igen på et senere tidspunkt.',
    'ERR_AJAX_LOAD_FOOTER' => 'Hvis denne fejl fortsætter, skal du bede din administrator deaktivere Ajax i dette modul',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Decimal seperator skal være forskellig fra tusind seperator.',
    'ERR_DELETE_RECORD' => 'Du skal angive en række for at slette kontakten.',
    'ERR_EXPORT_DISABLED' => 'Export er ikke slået til.',
    'ERR_EXPORT_TYPE' => 'Fejl ved export ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'er ikke en gyldig email adresse.',
    'ERR_INVALID_FILE_REFERENCE' => 'Ugyldig fil reference',
    'ERR_NO_HEADER_ID' => 'Denne feature er ikketilgængelig i dette tema.',
    'ERR_NOT_ADMIN' => 'Uautoriseret adgang til administration.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Mangler nødvendige felter:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Ugyldig påkrævet felt:',
    'ERR_INVALID_VALUE' => 'Ugyldig værdi:',
    'ERR_NO_SUCH_FILE' => 'Filen findes ikke i systemet',
    'ERR_NO_SINGLE_QUOTE' => 'Du kan ikke angive single quotation for ',
    'ERR_NOTHING_SELECTED' => 'Foretag et valg før du kan fortsætte.',
    'ERR_SELF_REPORTING' => 'En bruger kan ikke rapporter til sig selv.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Ingen match fundet for felt: ',
    'ERR_SQS_NO_MATCH' => 'Ingen match fundet',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Fejl: Portalnavnet er allerede tilknyttet en anden kontaktperson.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Feltets værdi er ikke kompatibel med præcisionsværdien',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_NO_DB' => 'Kunne ikke oprette forbindelse til databasen. Der henvises til suitecrm.log for detaljer.',
    'ERR_DB_FAIL' => 'Database fejl. Der henvises til suitecrm.log for detaljer.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} filer kan kun bruges med en SuiteCRM {1} database.',

    'LBL_ACCOUNT' => 'Kunder',
    'LBL_ACCOUNTS' => 'Kunder',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vis summering',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vis summering',
    'LBL_ADD_BUTTON' => 'Tilføj',
    'LBL_ADD_DOCUMENT' => 'Tilføj dokument',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Tilføj til målgruppe listen',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Add Contacts To Target List',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klik for at lukke',
    'LBL_ADDITIONAL_DETAILS' => 'Yderligere detaljer',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arkiver',
    'LBL_ASSIGNED_TO_USER' => 'Tildelt til bruger',
    'LBL_ASSIGNED_TO' => 'Tildelt til:',
    'LBL_BACK' => 'Tilbage',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadresse',
    'LBL_QUICK_CREATE' => 'Opret ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Fejlrapport',
    'LBL_BY' => 'af',
    'LBL_CALLS' => 'Opkald',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send opsamlede kampagne Emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Send',
    'LBL_CASE' => 'Sager',
    'LBL_CASES' => 'Sager',
    'LBL_CHANGE_PASSWORD' => 'Skift adgangskode',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Check alle',
    'LBL_CITY' => 'By',
    'LBL_CLEAR_BUTTON_LABEL' => 'Ryd',
    'LBL_CLEAR_BUTTON_TITLE' => 'Ryd',
    'LBL_CLEARALL' => 'Ryd alt',
    'LBL_CLOSE_BUTTON_TITLE' => 'Luk',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Luk og opret ny',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Luk og opret ny',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Åbne elementer:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Sammensæt Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Sammensæt Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Ja',
    'LBL_SEARCH_DROPDOWN_NO' => 'Nej',
    'LBL_CONTACT_LIST' => 'Kontakt liste',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_CONTACTS' => 'Kontakter',
    'LBL_CONTRACT' => 'Kontrakt',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATE_BUTTON_LABEL' => 'Opret',
    'LBL_CREATED_BY_USER' => 'Oprettet af bruger',
    'LBL_CREATED_USER' => 'Oprettet af bruger',
    'LBL_CREATED' => 'Oprettet af',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DOCUMENTS' => 'Dokumenter',
    'LBL_DATE_ENTERED' => 'Oprettet dato:',
    'LBL_DATE_MODIFIED' => 'Ændret dato:',
    'LBL_EDIT_BUTTON' => 'Rediger',
    'LBL_DUPLICATE_BUTTON' => 'Kopi',
    'LBL_DELETE_BUTTON' => 'Slet',
    'LBL_DELETE' => 'Slet',
    'LBL_DELETED' => 'Slettet',
    'LBL_DIRECT_REPORTS' => 'Rapporter',
    'LBL_DONE_BUTTON_LABEL' => 'Udført',
    'LBL_DONE_BUTTON_TITLE' => 'Udført',
    'LBL_FAVORITES' => 'Favoritter',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Vælg venligst en vCard-fil',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard\'et har ikke alle de påkrævede felter for dette modul. Se i suitecrm.log for detaljer.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Den uploadede fil overstiger størrelsesgrænsen på 30000 byte der blev angivet i HTML-formularen.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Der opstod en fejl under upload af vCard-filen. Se venligst suitecrm.log for detaljer.',
    'LBL_IMPORT_VCARD' => 'Importér vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importer vCard',
    'LBL_VIEW_BUTTON' => 'Se',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email som PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email som PDF',
    'LBL_EMAILS' => 'Emails',
    'LBL_EMPLOYEES' => 'Medarbejdere',
    'LBL_ENTER_DATE' => 'Indtast dato',
    'LBL_EXPORT' => 'Exporter',
    'LBL_FAVORITES_FILTER' => 'Mine favoritter:',
    'LBL_GO_BUTTON_LABEL' => 'Gå',
    'LBL_HIDE' => 'Skjul',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importer',
    'LBL_IMPORT_STARTED' => 'Import startet: ',
    'LBL_LAST_VIEWED' => 'Sidst set',
    'LBL_LEADS' => 'Emner',
    'LBL_LESS' => 'mindre',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_CAMPAIGNS' => 'Kampagner',
    'LBL_CAMPAIGNLOG' => 'Kampagne Log',
    'LBL_CAMPAIGN_CONTACT' => 'Kampagner',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Ingen',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Fundet i udgivelse',
    'LBL_FIXED_IN_RELEASE' => 'Rettet i udgivelse',
    'LBL_LIST_ACCOUNT_NAME' => 'Kundenavn',
    'LBL_LIST_ASSIGNED_USER' => 'Tildelt til',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktnavn',
    'LBL_LIST_CONTACT_ROLE' => 'Kontakt rolle',
    'LBL_LIST_DATE_ENTERED' => 'Oprettelsesdato',
    'LBL_LIST_EMAIL' => 'Emails',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_OF' => 'af',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Relateret til',
    'LBL_LIST_USER_NAME' => 'Brugernavn',
    'LBL_LISTVIEW_NO_SELECTED' => 'Du skal vælge mindst en række.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Du skal vælge mindst to rækker.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Valgte rækker',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Valgte: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'John',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Doe',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Afbryd',
    'LBL_VERIFY' => 'Verificer',
    'LBL_RESEND' => 'Gensend',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Brevfletning',
    'LBL_MASS_UPDATE' => 'Masse opdatering',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'There are no fields available for the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Primary Email',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt in Primary Email',
    'LBL_MEETINGS' => 'Møder',
    'LBL_MEETING_GO_BACK' => 'Go back to the meeting',
    'LBL_MEMBERS' => 'Medlemmer',
    'LBL_MEMBER_OF' => 'Medlem af',
    'LBL_MODIFIED_BY_USER' => 'Ændret af bruger',
    'LBL_MODIFIED_USER' => 'Ændret af bruger',
    'LBL_MODIFIED' => 'Ændret af',
    'LBL_MODIFIED_NAME' => 'Ændret af navn',
    'LBL_MORE' => 'mere',
    'LBL_MY_ACCOUNT' => 'Min konto',
    'LBL_NAME' => 'Navn',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Opret',
    'LBL_NEW_BUTTON_TITLE' => 'Opret',
    'LBL_NEXT_BUTTON_LABEL' => 'Næste',
    'LBL_NONE' => '--Ingen--',
    'LBL_NOTES' => 'Noter',
    'LBL_OPPORTUNITIES' => 'Muligheder',
    'LBL_OPPORTUNITY_NAME' => 'Navn for mulighed',
    'LBL_OPPORTUNITY' => 'Mulighed',
    'LBL_OR' => 'eller',
    'LBL_PANEL_OVERVIEW' => 'Kunde Information',
    'LBL_PANEL_ASSIGNMENT' => 'ANDET',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Moder Type',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primær adresse By:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primær adresse Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primær adresse Postnr:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primær adresse Stat:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primær adresse Gadenavn 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primær adresse Gadenavn 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primær adresse Gade:',
    'LBL_PRIMARY_ADDRESS' => 'Primær adresse:',

    'LBL_PROSPECTS' => 'Prospekter',
    'LBL_PRODUCTS' => 'Produkter',
    'LBL_PROJECT_TASKS' => 'Projektopgaver',
    'LBL_PROJECTS' => 'Projekter',
    'LBL_QUOTES' => 'Tilbud',

    'LBL_RELATED' => 'Relateret',
    'LBL_RELATED_RECORDS' => 'Relaterede rækker',
    'LBL_REMOVE' => 'Slet',
    'LBL_REPORTS_TO' => 'Overordnet',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indikerer nødvendige felter',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Udført',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Fuld Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Fuld Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Gem & opret ny',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Gem & opret ny',
    'LBL_SAVE_OBJECT' => 'Gem {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Søg',
    'LBL_SEARCH_BUTTON_TITLE' => 'Søg',
    'LBL_FILTER' => 'Filter',
    'LBL_SEARCH' => 'Søg',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'mere',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Ugyldigt filformat, kun billedfiler kan uploades.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Vælg',
    'LBL_SELECT_BUTTON_TITLE' => 'Vælg',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Gennemse dokumenter',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Gennemse dokumenter',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Vælg kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Vælg kontakt',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Vælg fra rapporter',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Vælg rapporter',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Vælg bruger',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Vælg bruger',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Ryd valgte',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Ryd valgte',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Ryd valgte',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Ryd valgte',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Vælg fil',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Vælg fil',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Ryd fil',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Ryd fil',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Vælg bruger',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Vælg bruger',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Ryd bruger',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Ryd bruger',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Vælg kunde',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Vælg kunde',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Ryd konto',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Ryd konto',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Vælg Kampagne',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Vælg Kampagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Ryd kampagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Ryd kampagne',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Vælg kontakt',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Vælg kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Ryd kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Ryd kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Vælg Hold',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Vælg Hold',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Ryd Hold',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Ryd Hold',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressourcer anvendt til at danne denne side er (forespørgsler og filer)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekunder.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server svartid:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Serverhukommelse brug: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Leveringsadresse',
    'LBL_SHOW' => 'Vis',
    'LBL_STATE' => 'Stat:',
    'LBL_STATUS_UPDATED' => 'Din status på denne begivenhed er opdateret!',
    'LBL_STATUS' => 'Status',
    'LBL_STREET' => 'Gade',
    'LBL_SUBJECT' => 'Emne',

    'LBL_INBOUNDEMAIL_ID' => 'Indgående email ID',

    'LBL_SCENARIO_SALES' => 'Salg',
    'LBL_SCENARIO_MARKETING' => 'Markedsføring',
    'LBL_SCENARIO_FINANCE' => 'Finans',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Projecthåndtering',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'Synkronisering',
    'LBL_TABGROUP_ALL' => 'Alle',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktiviteter',
    'LBL_TABGROUP_COLLABORATION' => 'Samarbejde',
    'LBL_TABGROUP_MARKETING' => 'Markedsføring',
    'LBL_TABGROUP_OTHER' => 'Andre',
    'LBL_TABGROUP_SALES' => 'Salg',
    'LBL_TABGROUP_SUPPORT' => 'Support',
    'LBL_TASKS' => 'Opgaver',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkiver Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkiver Email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Fortryd',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Fortryd',
    'LBL_UNDELETE_BUTTON' => 'Fortryd',
    'LBL_UNDELETE' => 'Fortryd',
    'LBL_UNSYNC' => 'Fortryd sync',
    'LBL_UPDATE' => 'Opdater',
    'LBL_USER_LIST' => 'Bruger liste',
    'LBL_USERS' => 'Brugere',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME' => 'Kontrollerer for eksisterende portalnavn...',
    'LBL_VIEW_IMAGE' => 'vis',

    'LNK_ABOUT' => 'Om',
    'LNK_ADVANCED_FILTER' => 'Avanceret filter',
    'LNK_BASIC_FILTER' => 'Hurtigfilter',
    'LBL_ADVANCED_SEARCH' => 'Avanceret filter',
    'LBL_QUICK_FILTER' => 'Hurtigfilter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Vis alle',
    'LNK_CLOSE' => 'Luk',
    'LBL_MODIFY_CURRENT_FILTER' => 'Rediger det aktuelle filter',
    'LNK_SAVED_VIEWS' => 'Gemte søgninger',
    'LNK_DELETE' => 'Slet',
    'LNK_EDIT' => 'Rediger',
    'LNK_GET_LATEST' => 'Hent seneste',
    'LNK_GET_LATEST_TOOLTIP' => 'Erstat med seneste version',
    'LNK_HELP' => 'Hjælp',
    'LNK_CREATE' => 'Opret',
    'LNK_LIST_END' => 'Slut',
    'LNK_LIST_NEXT' => 'Næste',
    'LNK_LIST_PREVIOUS' => 'Forrige',
    'LNK_LIST_RETURN' => 'Tilbage til liste',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED' => 'Underskriv',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Erstat med underskrevet dokument',
    'LNK_PRINT' => 'Udskriv',
    'LNK_BACKTOTOP' => 'Tilbage til toppen',
    'LNK_REMOVE' => 'Slet',
    'LNK_RESUME' => 'Fortsæt',
    'LNK_VIEW_CHANGE_LOG' => 'Se ændringslog',

    'NTC_CLICK_BACK' => 'Klik på browserens tilbage knap og løs problemet.',
    'NTC_DATE_FORMAT' => '(dd-mm-yyyy)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Er du sikker på, at du ønsker at slette de valgte rækker?',
    'NTC_TEMPLATE_IS_USED' => 'Skabelonen bruges i, i hvert fald én e-mail marketings post. Er du sikker på du vil slette den?',
    'NTC_TEMPLATES_IS_USED' => 'The following templates are used in email marketing records. Are you sure you want to delete them?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på, at du vil slette denne post?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Er du sikker på at du vil slette ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Er du sikker på, du vil opdatere ',
    'NTC_DELETE_SELECTED_RECORDS' => ' selected record(s)?',
    'NTC_LOGIN_MESSAGE' => 'Indtast brugernavn og adgangskode.',
    'NTC_NO_ITEMS_DISPLAY' => 'ingen',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikkerpå, at du ønsker at fjerne denne relation?',
    'NTC_REQUIRED' => 'Indikerer nødvendige felter',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Velkommen',
    'NTC_YEAR_FORMAT' => '(åååå)',
    'WARN_UNSAVED_CHANGES' => 'You are about to leave this record without saving any changes you may have made to the record. Are you sure you want to navigate away from this record?',
    'ERROR_NO_RECORD' => 'Fejl ved hentning af rækker.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Advarsel:</b> Den browserversion du bruger er ikke længere understøttet eller også bruger du en ikke understøttet browser.<p></p>Vi anbefaler følgende browserversioner:<p></p><ul><li>Internet Explorer 10 (kompatibilitetsvisning er ikke understøttet)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Warning:</b> Your browser is in IE compatibility view which is not supported.',
    'ERROR_TYPE_NOT_VALID' => 'Fejl. Denne type er ikke gyldig.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'Find dupletter',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Vedligehold abonnement',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Vedligehold abonnement for ',
    // Ajax status strings
    'LBL_LOADING' => 'Indlæser...',
    'LBL_SEARCHING' => 'Søger...',
    'LBL_SAVING_LAYOUT' => 'Gemmer Layout ...',
    'LBL_SAVED_LAYOUT' => 'Layout er gemt.',
    'LBL_SAVED' => 'Gemt',
    'LBL_SAVING' => 'Gemmer',
    'LBL_DISPLAY_COLUMNS' => 'Vis kolonner',
    'LBL_HIDE_COLUMNS' => 'Skjul kolonner',
    'LBL_SEARCH_CRITERIA' => 'Søgekriterier',
    'LBL_SAVED_VIEWS' => 'Gemte visninger',
    'LBL_PROCESSING_REQUEST' => 'Behandler..',
    'LBL_REQUEST_PROCESSED' => 'Udført',
    'LBL_AJAX_FAILURE' => 'Ajax fejl',
    'LBL_MERGE_DUPLICATES' => 'Flet dupletter',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mine filtre',
    'LBL_SEARCH_POPULATE_ONLY' => 'Udfør en søgning ved at anvende en søgeform',
    'LBL_DETAILVIEW' => 'Detaljeoversigt',
    'LBL_LISTVIEW' => 'Liste oversigt',
    'LBL_EDITVIEW' => 'Rediger oversigt',
    'LBL_BILLING_STREET' => 'Vej:',
    'LBL_SHIPPING_STREET' => 'Vej:',
    'LBL_SEARCHFORM' => 'Søgeform',
    'LBL_SAVED_SEARCH_ERROR' => 'Angiv et navn for denne oversigt.',
    'LBL_DISPLAY_LOG' => 'Vis Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sessionen udløb',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Din session har timeout om 2 minutter. Gem dit arbejde.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Din session er timed out.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Møder',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Opkald',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Tidspunkt: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Sted: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Beskrivelse: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Relateret til: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Placeringen er ikke angivet.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Startdatoen er ikke angivet.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Ingen resultater fundet.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Ingen resultater fundet... Prøv at ændre dine søgekriterier og forsøg igen.',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Ingen resultater fundet for <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Opret <item1> som en ny <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'eller ændre dine søgekriterier',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Du har i øjeblikket ingen poster gemt. <item2> eller <item3> en nu.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Tilføj til mine favoritter',
    'LBL_CREATE_CONTACT' => 'Opret kontakt',
    'LBL_CREATE_CASE' => 'Opret sag',
    'LBL_CREATE_NOTE' => 'Opret note',
    'LBL_CREATE_OPPORTUNITY' => 'Opret mulighed',
    'LBL_SCHEDULE_CALL' => 'Planlæg opkald',
    'LBL_SCHEDULE_MEETING' => 'Planlæg møde',
    'LBL_CREATE_TASK' => 'Opret opgave',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generering af Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Gem Web-formular',
    'LBL_AVAILABLE_FIELDS' => 'Mulige felter',
    'LBL_FIRST_FORM_COLUMN' => 'Første form-kolonne',
    'LBL_SECOND_FORM_COLUMN' => 'Anden form-kolonne',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Mangler påkrævet felt: Tildelt',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Mangler påkrævet felt: Relatered kampagne',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Webformular til at oprette ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Indsendelse af denne formular vil oprette ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Tilføj alle felter',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Nulstill alle felter',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Slet alle felter',
    'LBL_NEXT_BTN' => 'Næste',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Kun billed typer kan vedhæftes',
    'LBL_TRAINING' => 'Supportforum',
    'ERR_MSSQL_DB_CONTEXT' => 'Ændre database context til',
    'ERR_MSSQL_WARNING' => 'Advarsel:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Fejl: Filen [[file]] mangler. Kan ikke oprette, da ingen tilsvarende HTML fil blev fundet.',
    'ERR_CANNOT_FIND_MODULE' => 'Fejl: Modulet [module] findes ikke.',
    'LBL_ALT_ADDRESS' => 'Anden adresse:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Fejl: Der er et ulige antal argumenter for \'key\' og \'copy\' elementerne i displayParams arrayet.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generel',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Kun mine elementer',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vis rækker',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Du har nået det maksimale antal SuiteCRM Dashlets din administrator har sat. Fjern venligst en SuiteCRM Dashlet for at tilføje flere.',
    'LBL_ADDING_DASHLET' => 'Tilføjer SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet tilføjet',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Er du sikker på du vil fjerne dette SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Fjerner SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet fjernet',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Henter side...',

    'LBL_RELOAD_PAGE' => '<a href="javascript: window.location.reload()"> Genindlæs venligst vinduet</a> for at bruge dette SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Tilføj Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Luk',
    'LBL_OPTIONS' => 'Optioner',
    'LBL_1_COLUMN' => '1 kolonne',
    'LBL_2_COLUMN' => '2 kolonne',
    'LBL_3_COLUMN' => '3 kolonne',
    'LBL_PAGE_NAME' => 'Sidenavn',

    'LBL_SEARCH_RESULTS' => 'Søge resultater',
    'LBL_SEARCH_MODULES' => 'Moduler',
    'LBL_SEARCH_TOOLS' => 'Værktøjer',
    'LBL_SEARCH_HELP_TITLE' => 'Søgetips',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Intet billede',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopier adressen fra venstre:',
    'LBL_SAVE_AND_CONTINUE' => 'Gem og fortsæt',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad. For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Fejl: Forespørgselsgrænsen på $limit er nået for $module modulet.',
    'ERROR_NOTIFY_OVERRIDE' => 'Fejl: ResourceObserver->notify() skal \'overrides\'.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Error: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor-Id',
    'LBL_USER_ID' => 'Bruger-Id',
    'LBL_MODULE_NAME' => 'Modulnavn',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'Handling',
    'LBL_SESSION_ID' => 'Session-Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Dato for sidste handling',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'er ikke før',
    'MSG_IS_MORE_THAN' => 'er mere end',
    'MSG_SHOULD_BE' => 'bør være',
    'MSG_OR_GREATER' => 'eller større',

    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Opret fejl',

    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Vælg Dato',

    'LBL_VALIDATE_RANGE' => 'er ikke inden for det gyldige interval',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Vælg venligst både en start- og en slutdato',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Alle',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Fejl: Kan ikke hente data til {0} tilslutning. Servicen er måske ikke tilgængelig på nuværende tidspunkt eller opsætningen kan være forkert. Tilslutningens fejlbesked: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Du kan få den optimale oplevelse med IIS/FastCGI sapi ved at angive fastcgi.logging til 0 i filen php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Navn',
    'LBL_COLLECTION_PRIMARY' => 'Primær',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Tomt påkrævet felt',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_DESCRIPTION' => 'Beskrivelse',

    'LBL_YESTERDAY' => 'i går',
    'LBL_TODAY' => 'i dag',
    'LBL_TOMORROW' => 'i morgen',
    'LBL_NEXT_WEEK' => 'næste uge',
    'LBL_NEXT_MONDAY' => 'næste mandag',
    'LBL_NEXT_FRIDAY' => 'næste fredag',
    'LBL_TWO_WEEKS' => 'to uger',
    'LBL_NEXT_MONTH' => 'næste måned',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'første dag i næste måned',
    'LBL_THREE_MONTHS' => 'tre måneder',
    'LBL_SIXMONTHS' => 'seks måneder',
    'LBL_NEXT_YEAR' => 'næste år',

    //Datetimecombo fields
    'LBL_HOURS' => 'Timer',
    'LBL_MINUTES' => 'Minutter',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Dato',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Opdater automatisk',

    'LBL_DURATION_DAY' => 'dag',
    'LBL_DURATION_HOUR' => 'time',
    'LBL_DURATION_MINUTE' => 'minut',
    'LBL_DURATION_DAYS' => 'dage',
    'LBL_DURATION_HOURS' => 'Varighed timer',
    'LBL_DURATION_MINUTES' => 'Varighed minutter',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Vælg måned',
    'LBL_ENTER_YEAR' => 'Angiv år',
    'LBL_ENTER_VALID_YEAR' => 'Angiv et gyldigt årstal',

    //File write error label
    'ERR_FILE_WRITE' => 'Fejl: Kunne ikke skrive filen {0}.  Kontroller system og webserver tilladelser.',
    'ERR_FILE_NOT_FOUND' => 'Fejl: Kunne ikke indlæse filen {0}.  Kontroller system og webserver tilladelser.',

    'LBL_AND' => 'E',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fil på ekstern kilde',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sikkerhed',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Dette er en prøve importfil, som indeholder et eksempel på det forventede indhold af en fil, der er klar til import." "Filen er en kommasepareret .csv-fil, og bruger dobbelt-citationstegn som feltafgrænser."

"Kolonneoverskriften er den øverste række i filen og indeholder feltmærkater, som de ville optræde i programmet."
"Disse mærkater bruges til sammenkædningen af data i filen, med felter i programmet."

"Note: databasenavne kan også anvendes i kolonneoverskriften . Dette er nyttigt når du bruger phpMyAdmin eller et andet databaseværktøj til at eksportere en liste data der skal importeres." 
"Kolonnernes rækkefølge er ikke afgørende, da importprocessen matcher data i de relevante felter baseret på kolonneoverskriften."


"For at bruge denne fil som en skabelon, skal du gøre følgende:"
"1. fjern test rækkerne med data"
"2. Fjern den hjælpetekst, som du læser lige nu"
"3. Indtast dine egne data i de relevante rækker og kolonner"
"4. Gem filen på en kendt placering på dit system"
"5. Klik på Import i menuen Handlinger i programmet og vælg filen der skal uploades"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Ingen aktuelle meddelelser',
    'LBL_ALT_SORT_DESC' => 'Sorteret faldende',
    'LBL_ALT_SORT_ASC' => 'Sorteret stigende',
    'LBL_ALT_SORT' => 'Sorter',
    'LBL_ALT_SHOW_OPTIONS' => 'Vis indstillinger',
    'LBL_ALT_HIDE_OPTIONS' => 'Skjul indstillinger',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Move selected entry to the list on the left',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Move selected entry to the list on the right',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Move selected entry up in the displayed list order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Move selected entry down in the displayed list order',
    'LBL_ALT_INFO' => 'Information',
    'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below. Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'Email',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'ugyldig e-mailadresse',
    'LBL_EMAIL_PRIM_TITLE' => 'Gør til primær e-mailadresse',
    'LBL_SELECT_ALL_TITLE' => 'Vælg alle',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Marker denne række',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'FEJL: Der opstod en fejl under upload. Fejlkode: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'FEJL: Der opstod en fejl under upload. Fejlkode: {0} - {1}. upload_maxsize er {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'FEJL: Der opstod en fejl under din upload, du bedes kontakte en administrator for at få hjælp.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Størrelsen af upload ({0} bytes) overskred det tilladte maksimale antal: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'Der opstod en fejl. Opdater din side, og prøv igen.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Rediger',
    'LBL_EDIT_BUTTON_TITLE' => 'Rediger',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Kopi',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Kopi',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Slet',
    'LBL_DELETE_BUTTON_TITLE' => 'Slet',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Handling',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Gem',
    'LBL_SAVE_BUTTON_TITLE' => 'Gem',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Afbryd',
    'LBL_CANCEL_BUTTON_TITLE' => 'Afbryd',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream bliver blokeret af Suhosin, tilføj venligst &quot;upload&quot; til suhosin.executor.include.whitelist (Se suitecrm.log for flere oplysninger)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Bad response from the server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Tilbud',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Salgspris',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuelt',
        '5' => 'Hvert 5. minut',
        '15' => 'Hvert 15. minut',
        '30' => 'Hvert 30. minut',
        '60' => 'Hver time',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Slet påmindelse',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Vælg kolonner',
    'LBL_COLUMN_CHOOSER' => 'Kolonnevælger',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Gem ændringer',
    'LBL_DISPLAYED' => 'Vist',
    'LBL_HIDDEN' => 'Skjult',
    'ERR_EMPTY_COLUMNS_LIST' => 'Mindst ét element er påkrævet',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Kategori',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'Typografi',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Daggry',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Dag',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Skumring',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Nat',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Middag',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Kasser klade',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Denne handling vil slette denne e-mail, vil du fortsætte?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Anvende en E-mail-skabelon',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Denne handling vil overskrive email Brødtekst og Emne felterne, vil du fortsætte?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmed Opt In',
    'LBL_OPT_IN_TITLE' => 'Tilvælg',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Confirmed Opt In Date',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Confirmed Opt In Sent Date',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Confirmed Opt In Fail Date',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Opt In Email Template is not configured. Please set up in email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Primær Grupper",

    // footer
    'LBL_SUITE_TOP' => 'Tilbage til toppen',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Drevet af SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Dette program er gratis software; Du må videredistribuere det og/eller ændre det under de vilkår der gælder i GNU Affero General Public License version 3 som det er udgivet af Free Software Foundation, inklusiv de ekstra tilladelser der er præsenteret i kildekodens sidehoved.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Nulstil adgangskode',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Bibliotek';
$app_list_strings['moduleList']['EmailAddresses'] = 'Email adresse';
$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Høj',
    'Medium' => 'Medium',
    'Low' => 'Lav',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Samtykke',
    'contract' => 'Kontrakt',
    'legal_obligation' => 'Juridisk forpligtelse',
    'protection_of_interest' => 'Beskyttelse af interesser',
    'public_interest' => 'Offentlighedens interesse',
    'legitimate_interest' => 'Legitim interesse',
    'withdrawn' => 'Tilbagekaldt',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Websted',
    'phone' => 'Telefon',
    'given_to_user' => 'Given to User',
    'email' => 'Emails',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Vidensbase';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIEN',
    'ALGERIA' => 'ALGERIET',
    'AMERICAN SAMOA' => 'AMERIKANSK SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTIS',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIEN',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIEN',
    'AUSTRIA' => 'ØSTRIG',
    'AZERBAIJAN' => 'ASERBAJDSJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'HVIDERUSLAND',
    'BELGIUM' => 'BELGIEN',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIEN',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVETØ',
    'BRAZIL' => 'BRASILIEN',
    'BRITISH ANTARCTICA TERRITORY' => 'DET BRITISKE TERRITORIUM I ANTARKTIS',
    'BRITISH INDIAN OCEAN TERRITORY' => 'DET BRITISKE TERRITORIUM I DET INDISKE OCEAN',
    'BRITISH VIRGIN ISLANDS' => 'DE BRITISKE JOMFRUØER',
    'BRITISH WEST INDIES' => 'DE BRITISKE VESTINDISKE ØER',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIEN',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODJA',
    'CAMEROON' => 'CAMEROUN',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'KANALZONEN',
    'CANARY ISLAND' => 'DE KANARISKE ØER',
    'CAPE VERDI ISLANDS' => 'KAP VERDE',
    'CAYMAN ISLANDS' => 'CAYMANØERNE',
    'CHAD' => 'TCHAD',
    'CHANNEL ISLAND UK' => 'DE BRITISKE KANALØER',
    'CHILE' => 'CHILE',
    'CHINA' => 'KINA',
    'CHRISTMAS ISLAND' => 'JULEØEN',
    'COCOS (KEELING) ISLAND' => 'COCOSØERNE "KEELINGØERNE"',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'COMORERNE',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOKØERNE',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'KROATIEN',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPERN',
    'CZECH REPUBLIC' => 'TJEKKIET',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DEN DOMINIKANSKE REPUBLIK',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPTEN',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'ÆKVATORIALGUINEA',
    'ESTONIA' => 'ESTLAND',
    'ETHIOPIA' => 'ETIOPIEN',
    'FAEROE ISLANDS' => 'FÆRØERNE',
    'FALKLAND ISLANDS' => 'FALKLANDSØERNE',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANKRIG',
    'FRENCH GUIANA' => 'FRANSK GUYANA',
    'FRENCH POLYNESIA' => 'FRANSK POLYNESIEN',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIEN',
    'GERMANY' => 'TYSKLAND',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRÆKENLAND',
    'GREENLAND' => 'GRØNLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONGKONG',
    'HUNGARY' => 'UNGARN',
    'ICELAND' => 'ISLAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIEN',
    'INDONESIA' => 'INDONESIEN',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLAND',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALIEN',
    'IVORY COAST' => 'ELFENBENSKYSTEN',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAPAN',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KASAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'SYDKOREA',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KIRGISISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETLAND',
    'LEBANON' => 'LIBANON',
    'LEEWARD ISLANDS' => 'LEEWARDØERNE',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYEN',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITAUEN',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MAKEDONIEN',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'MALDIVERNE',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURETANIEN',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIEN',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIET',
    'MOROCCO' => 'MAROKKO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NEDERLANDENE',
    'NETHERLANDS ANTILLES' => 'DE NEDERLANDSKE ANTILLER',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'DE NEDERLANDSKE ANTILLER, NEUTRAL ZONE',
    'NEW CALADONIA' => 'NY KALEDONIEN',
    'NEW HEBRIDES' => 'NY HEBRIDERNE',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK-ØEN',
    'NORWAY' => 'NORGE',
    'OMAN' => 'OMAN',
    'OTHER' => 'ANDET',
    'PACIFIC ISLAND' => 'STILLEHAVSØERNE',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NY GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPPINERNE',
    'POLAND' => 'POLEN',
    'PORTUGAL' => 'PROTUGAL',
    'PORTUGUESE TIMOR' => 'ØSTTIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIKKEN BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'DEN SYDAFRIKANSKE REPUBLIK',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'RUMÆNIEN',
    'RUSSIA' => 'RUSLAND',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYUØERNE',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI-ARABIEN',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIEN',
    'SEYCHELLES' => 'SEYCHELLERNE',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIET',
    'SLOVENIA' => 'SLOVENIEN',
    'SOMALILIAND' => 'SOMALIA',
    'SOUTH AFRICA' => 'SYDAFRIKA',
    'SOUTH YEMEN' => 'SYDYEMEN',
    'SPAIN' => 'SPANIEN',
    'SPANISH SAHARA' => 'SPANSK SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT KITTS OG NEVIS',
    'ST. LUCIA' => 'SAINT LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SYDVESTAFRIKA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SVERIGE',
    'SWITZERLAND' => 'SCHWEIZ',
    'SYRIA' => 'SYRIEN',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TADSJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNESIEN',
    'TURKEY' => 'TYRKIET',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'DE FORENEDE ARABISKE EMIRATER',
    'UNITED KINGDOM' => 'STORBRITANNIEN',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'DE AMERIKANSKE STILLEHAVSØER',
    'US VIRGIN ISLANDS' => 'DE AMERIKANSKE JOMFRUØER',
    'USA' => 'USA',
    'UZBEKISTAN' => 'USBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATIKANSTATEN',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'DE VESTINDISKE ØER',
    'WESTERN SAHARA' => 'VESTSAHARA',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 "Taiwan og Hongkong"',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 "MS kyrillisk"',
    'CP1252' => 'CP1252 "MS vesteuropæisk og amerikansk"',
    'EUC-CN' => 'EUC-CN "forenklet kinesisk GB2312"',
    'EUC-JP' => 'EUC-JP "Unix japansk"',
    'EUC-KR' => 'EUC-KR "koreansk"',
    'EUC-TW' => 'EUC-TW "taiwanesisk"',
    'ISO-2022-JP' => 'ISO-2022-JP "japansk"',
    'ISO-2022-KR' => 'ISO-2022-KR "koreansk"',
    'ISO-8859-1' => 'ISO-8859-1 "vesteuropæisk og amerikansk"',
    'ISO-8859-2' => 'ISO-8859-2 "central- og østeuropæisk"',
    'ISO-8859-3' => 'ISO-8859-3 "latinsk 3"',
    'ISO-8859-4' => 'ISO-8859-4 "latinsk 4"',
    'ISO-8859-5' => 'ISO-8859-5 "kyrillisk"',
    'ISO-8859-6' => 'ISO-8859-6 "arabisk"',
    'ISO-8859-7' => 'ISO-8859-7 "græsk"',
    'ISO-8859-8' => 'ISO-8859-8 "hebraisk"',
    'ISO-8859-9' => 'ISO-8859-9 "latinsk 5"',
    'ISO-8859-10' => 'ISO-8859-10 "latinsk 6"',
    'ISO-8859-13' => 'ISO-8859-13 "latinsk 7"',
    'ISO-8859-14' => 'ISO-8859-14 "latinsk 8"',
    'ISO-8859-15' => 'ISO-8859-15 "latinsk 9"',
    'KOI8-R' => 'KOI8-R "kyrillisk russisk"',
    'KOI8-U' => 'KOI8-U "kyrillisk ukrainsk"',
    'SJIS' => 'SJIS "MS japansk"',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Algier',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Afrika/Gaborone',
    'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Kap_Verde',
    'Africa/Bangui' => 'Afrika/Bangui',
    'Africa/Ndjamena' => 'Afrika/Ndjamena',
    'Indian/Comoro' => 'Indisk/Comorerne',
    'Africa/Kinshasa' => 'Afrika/Kinshasa',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Brazzaville' => 'Afrika/Brazzaville',
    'Africa/Abidjan' => 'Afrika/Abidjan',
    'Africa/Djibouti' => 'Afrika/Djibouti',
    'Africa/Cairo' => 'Afrika/Cairo',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Asmera' => 'Afrika/Asmera',
    'Africa/Addis_Ababa' => 'Afrika/Addis_Ababa',
    'Africa/Libreville' => 'Afrika/Libreville',
    'Africa/Banjul' => 'Afrika/Banjul',
    'Africa/Accra' => 'Afrika/Accra',
    'Africa/Conakry' => 'Afrika/Conakry',
    'Africa/Bissau' => 'Afrika/Bissau',
    'Africa/Nairobi' => 'Afrika/Nairobi',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monrovia',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Indian/Antananarivo' => 'Indisk/Antananarivo',
    'Africa/Blantyre' => 'Afrika/Blantyre',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Nouakchott' => 'Afrika/Nouakchott',
    'Indian/Mauritius' => 'Indisk/Mauritius',
    'Indian/Mayotte' => 'Indisk/Mayotte',
    'Africa/Casablanca' => 'Afrika/Casablanca',
    'Africa/El_Aaiun' => 'Afrika/El_Aaiun',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Windhoek' => 'Afrika/Windhoek',
    'Africa/Niamey' => 'Afrika/Niamey',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Indian/Reunion' => 'Indisk/Reunion',
    'Africa/Kigali' => 'Afrika/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/Saint_Helena',
    'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Indian/Mahe' => 'Indisk/Mahe',
    'Africa/Freetown' => 'Afrika/Freetown',
    'Africa/Mogadishu' => 'Afrika/Mogadishu',
    'Africa/Johannesburg' => 'Afrika/Johannesburg',
    'Africa/Khartoum' => 'Afrika/Khartoum',
    'Africa/Mbabane' => 'Afrika/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salaam',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Tunis' => 'Afrika/Tunis',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Harare',
    'Antarctica/Casey' => 'Antarktis/Casey',
    'Antarctica/Davis' => 'Antarktis/Davis',
    'Antarctica/Mawson' => 'Antarktis/Mawson',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarktis/DumontDUrville',
    'Antarctica/Syowa' => 'Antarktis/Syowa',
    'Antarctica/Vostok' => 'Antarktis/Vostok',
    'Antarctica/Rothera' => 'Antarktis/Rothera',
    'Antarctica/Palmer' => 'Antarktis/Palmer',
    'Antarctica/McMurdo' => 'Antarktis/McMurdo',
    'Asia/Kabul' => 'Asien/Kabul',
    'Asia/Yerevan' => 'Asien/Yeravan',
    'Asia/Baku' => 'Asien/Baku',
    'Asia/Bahrain' => 'Asien/Bahrain',
    'Asia/Dhaka' => 'Asien/Dhaka',
    'Asia/Thimphu' => 'Asien/Thimphu',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asien/Brunei',
    'Asia/Rangoon' => 'Asien/Rangoon',
    'Asia/Phnom_Penh' => 'Asien/Phnom_Penh',
    'Asia/Beijing' => 'Asien/Beijing',
    'Asia/Harbin' => 'Asien/Harbin',
    'Asia/Shanghai' => 'Asien/Shanghai',
    'Asia/Chongqing' => 'Asien/Chongquing',
    'Asia/Urumqi' => 'Asien/Urumqi',
    'Asia/Kashgar' => 'Asien/Kashgar',
    'Asia/Hong_Kong' => 'Asien/Hongkong',
    'Asia/Taipei' => 'Asien/Taipei',
    'Asia/Macau' => 'Asien/Macau',
    'Asia/Nicosia' => 'Asien/Nicosia',
    'Asia/Tbilisi' => 'Asien/Tbilisi',
    'Asia/Dili' => 'Asien/Dili',
    'Asia/Calcutta' => 'Asien/Calcutta',
    'Asia/Jakarta' => 'Asien/Jakarta',
    'Asia/Pontianak' => 'Asien/Pontianak',
    'Asia/Makassar' => 'Asien/Makassar',
    'Asia/Jayapura' => 'Asien/Jayapura',
    'Asia/Tehran' => 'Asien/Tehran',
    'Asia/Baghdad' => 'Asien/Baghdad',
    'Asia/Jerusalem' => 'Asien/Jerusalem',
    'Asia/Tokyo' => 'Asien/Tokyo',
    'Asia/Amman' => 'Asien/Amman',
    'Asia/Almaty' => 'Asien/Almaty',
    'Asia/Qyzylorda' => 'Asien/Qyzylorda',
    'Asia/Aqtobe' => 'Asien/Aqtobe',
    'Asia/Aqtau' => 'Asien/Aqtau',
    'Asia/Oral' => 'Asien/Oral',
    'Asia/Bishkek' => 'Asien/Bishkek',
    'Asia/Seoul' => 'Asien/Seoul',
    'Asia/Pyongyang' => 'Asien/Pyongyang',
    'Asia/Kuwait' => 'Asien/Kuwait',
    'Asia/Vientiane' => 'Asien/Vientiane',
    'Asia/Beirut' => 'Asien/Beirut',
    'Asia/Kuala_Lumpur' => 'Asien/Kuala_Lumpur',
    'Asia/Kuching' => 'Asien/Kuching',
    'Indian/Maldives' => 'Indian/Maldiverne',
    'Asia/Hovd' => 'Asien/Hovd',
    'Asia/Ulaanbaatar' => 'Asien/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asien/Choibalsan',
    'Asia/Katmandu' => 'Asien/Katmandu',
    'Asia/Muscat' => 'Asien/Muscat',
    'Asia/Karachi' => 'Asien/Karachi',
    'Asia/Gaza' => 'Asien/Gaza',
    'Asia/Manila' => 'Asien/Manila',
    'Asia/Qatar' => 'Asien/Qatar',
    'Asia/Riyadh' => 'Asien/Riyadh',
    'Asia/Singapore' => 'Asien/Singapore',
    'Asia/Colombo' => 'Asien/Colombo',
    'Asia/Damascus' => 'Asien/Damaskus',
    'Asia/Dushanbe' => 'Asien/Dushanbe',
    'Asia/Bangkok' => 'Asien/Bangkok',
    'Asia/Ashgabat' => 'Asien/Ashgabat',
    'Asia/Dubai' => 'Asien/Dubai',
    'Asia/Samarkand' => 'Asien/Samarkand',
    'Asia/Tashkent' => 'Asien/Tashkent',
    'Asia/Saigon' => 'Asien/Saigon',
    'Asia/Aden' => 'Asien/Aden',
    'Australia/Darwin' => 'Australien/Darwin',
    'Australia/Perth' => 'Australien/Perth',
    'Australia/Brisbane' => 'Australien/Brisbane',
    'Australia/Lindeman' => 'Australien/Lindeman',
    'Australia/Adelaide' => 'Australien/Adelaide',
    'Australia/Hobart' => 'Australien/Hobart',
    'Australia/Currie' => 'Australien/Currie',
    'Australia/Melbourne' => 'Australien/Melbourne',
    'Australia/Sydney' => 'Australien/Sydney',
    'Australia/Broken_Hill' => 'Australien/Broken_Hill',
    'Indian/Christmas' => 'Indian/Juleøen',
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
    'Pacific/Pohnpei' => 'Stillehavet/Pohnpei',
    'Pacific/Kosrae' => 'Stillehavet/Kosrae',
    'Pacific/Nauru' => 'Stillehavet/Nauru',
    'Pacific/Noumea' => 'Stillehavet/Noumea',
    'Pacific/Auckland' => 'Stillehavet/Auckland',
    'Pacific/Chatham' => 'Stillehavet/Chatham',
    'Pacific/Niue' => 'Stillehavet/Niue',
    'Pacific/Norfolk' => 'Stillehavet/Norfolk',
    'Pacific/Palau' => 'Stillehavet/Palau',
    'Pacific/Port_Moresby' => 'Stillehavet/Port Moresby',
    'Pacific/Pitcairn' => 'Stillehavet/Pitcairn',
    'Pacific/Pago_Pago' => 'Stillehavet/Pago Pago',
    'Pacific/Apia' => 'Stillehavet/Apia',
    'Pacific/Guadalcanal' => 'Stillehavet/Guadalcanal',
    'Pacific/Fakaofo' => 'Stillehavet/Fakaofo',
    'Pacific/Tongatapu' => 'Stillehavet/Tongatapu',
    'Pacific/Funafuti' => 'Stillehavet/Funafutis',
    'Pacific/Johnston' => 'Stillehavet/Johnston',
    'Pacific/Midway' => 'Stillehavet/Midway',
    'Pacific/Wake' => 'Stillehavet/Wake',
    'Pacific/Efate' => 'Stillehavet/Efate',
    'Pacific/Wallis' => 'Stillehavet/Wallis',
    'Europe/London' => 'Europa/London',
    'Europe/Dublin' => 'Europa/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europa/Tirana',
    'Europe/Andorra' => 'Europa/Andorra',
    'Europe/Vienna' => 'Europa/Wien',
    'Europe/Minsk' => 'Europa/Minsk',
    'Europe/Brussels' => 'Europa/Bruxelles',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa/Prag',
    'Europe/Copenhagen' => 'Europa/København',
    'Atlantic/Faeroe' => 'Atlantic/Færøerne',
    'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
    'America/Scoresbysund' => 'Amerika/Scoresbysund',
    'America/Godthab' => 'Amerika/Nuuk',
    'America/Thule' => 'Amerika/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Paris',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibraltar',
    'Europe/Athens' => 'Europa/Athen',
    'Europe/Budapest' => 'Europa/Budapest',
    'Atlantic/Reykjavik' => 'Atlantisk/Reykjavik',
    'Europe/Rome' => 'Europa/Rom',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europa/Vilnius',
    'Europe/Luxembourg' => 'Europa/Luxembourg',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europa/Chisinau',
    'Europe/Monaco' => 'Europa/Monaco',
    'Europe/Amsterdam' => 'Europa/Amsterdam',
    'Europe/Oslo' => 'Europa/Oslo',
    'Europe/Warsaw' => 'Europa/Warszawa',
    'Europe/Lisbon' => 'Europa/Lissabon',
    'Atlantic/Azores' => 'Atlantic/Azorerne',
    'Atlantic/Madeira' => 'Atlantisk/Madeira',
    'Europe/Bucharest' => 'Europa/Bukarest',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Moskva',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Asien/Yekaterinburg',
    'Asia/Omsk' => 'Asien/Omsk',
    'Asia/Novosibirsk' => 'Asien/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asien/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asien/Irkutsk',
    'Asia/Yakutsk' => 'Asien/Yakutsk',
    'Asia/Vladivostok' => 'Asien/Vladivostok',
    'Asia/Sakhalin' => 'Asien/Sakhalin',
    'Asia/Magadan' => 'Asien/Magadan',
    'Asia/Kamchatka' => 'Asien/Kamchatka',
    'Asia/Anadyr' => 'Asien/Anadyr',
    'Europe/Belgrade' => 'Europa/Beograd',
    'Europe/Madrid' => 'Europa/Madrid',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Atlantic/Canary' => 'Atlantisk/De Kanariske Øer',
    'Europe/Stockholm' => 'Europa/Stockholm',
    'Europe/Zurich' => 'Europa/Zurich',
    'Europe/Istanbul' => 'Europa/Istanbul',
    'Europe/Kiev' => 'Europa/Kiev',
    'Europe/Uzhgorod' => 'Europa/Uzhgorod',
    'Europe/Zaporozhye' => 'Europa/Zaporozhye',
    'Europe/Simferopol' => 'Europa/Simferopol',
    'America/New_York' => 'Amerika/New_York',
    'America/Chicago' => 'Amerika/Chicago',
    'America/North_Dakota/Center' => 'Amerika/North Dakota/Centrum',
    'America/Denver' => 'Amerika/Denver',
    'America/Los_Angeles' => 'Amerika/Los_Angeles',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Yakutat' => 'Amerika/Yakutat',
    'America/Anchorage' => 'Amerika/Anchorage',
    'America/Nome' => 'Amerika/Nome',
    'America/Adak' => 'Amerika/Adak',
    'Pacific/Honolulu' => 'Stillehavet/Honolulu',
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
    'America/Halifax' => 'Amerika/Halifax',
    'America/Glace_Bay' => 'Amerika/Glace_Bay',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Thunder_Bay' => 'Amerika/Thunder_Bay',
    'America/Nipigon' => 'Amerika/Nipigon',
    'America/Rainy_River' => 'Amerika/Rainy_River',
    'America/Winnipeg' => 'Amerika/Winnipeg',
    'America/Regina' => 'Amerika/Regina',
    'America/Swift_Current' => 'Amerika/Swift_Current',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Vancouver' => 'Amerika/Vancouver',
    'America/Dawson_Creek' => 'Amerika/Dawson_Creek',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Iqaluit' => 'Amerika/Iqaluit',
    'America/Coral_Harbour' => 'Amerika/Coral_Harbour',
    'America/Rankin_Inlet' => 'Amerika/Rankin_Inlet',
    'America/Cambridge_Bay' => 'Amerika/Cambridge_Bay',
    'America/Yellowknife' => 'Amerika/Yellowknife',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Whitehorse' => 'Amerika/Whitehorse',
    'America/Dawson' => 'Amerika/Dawson',
    'America/Cancun' => 'Amerika/Cancun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Monterrey',
    'America/Mexico_City' => 'Amerika/Mexico_City',
    'America/Chihuahua' => 'Amerika/Chihuahua',
    'America/Hermosillo' => 'Amerika/Hermosillo',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Tijuana' => 'Amerika/Tijuana',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Nassau' => 'Amerika/Nassau',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belize' => 'Amerika/Belize',
    'Atlantic/Bermuda' => 'Atlantisk/Bermuda',
    'America/Cayman' => 'Amerika/Cayman',
    'America/Costa_Rica' => 'Amerika/Costa_Rica',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominica',
    'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
    'America/El_Salvador' => 'Amerika/El_Salvador',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Guadeloupe',
    'America/Guatemala' => 'Amerika/Guatemala',
    'America/Port-au-Prince' => 'Amerika/Port-au-Prince',
    'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
    'America/Jamaica' => 'Amerika/Jamaica',
    'America/Martinique' => 'Amerika/Martinique',
    'America/Montserrat' => 'Amerika/Montserrat',
    'America/Managua' => 'Amerika/Managua',
    'America/Panama' => 'Amerika/Panama',
    'America/Puerto_Rico' => 'Amerika/Puerto_Rico',
    'America/St_Kitts' => 'Amerika/Saint_Kitts',
    'America/St_Lucia' => 'Amerika/Saint_Lucia',
    'America/Miquelon' => 'Amerika/Miquelon',
    'America/St_Vincent' => 'Amerika/Saint_Vincent',
    'America/Grand_Turk' => 'Amerika/Grand_Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/Saint_Thomas',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argentina/Buenos_Aires',
    'America/Argentina/Cordoba' => 'Amerika/Argentina/Cordoba',
    'America/Argentina/Tucuman' => 'Amerika/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'Amerika/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'Amerika/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'Amerika/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'Amerika/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'Amerika/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argentina/Rio_Gallegos',
    'America/Argentina/Ushuaia' => 'Amerika/Argentina/Ushuaia',
    'America/Aruba' => 'Amerika/Aruba',
    'America/La_Paz' => 'Amerika/La_Paz',
    'America/Noronha' => 'Amerika/Noronha',
    'America/Belem' => 'Amerika/Belem',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Recife' => 'Amerika/Recife',
    'America/Araguaina' => 'Amerika/Araguaina',
    'America/Maceio' => 'Amerika/Maceio',
    'America/Bahia' => 'Amerika/Bahia',
    'America/Sao_Paulo' => 'Amerika/Sao_Paulo',
    'America/Campo_Grande' => 'Amerika/Campo_Grande',
    'America/Cuiaba' => 'Amerika/Cuiaba',
    'America/Porto_Velho' => 'Amerika/Porto_Velho',
    'America/Boa_Vista' => 'Amerika/Boa_Vista',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Eirunepe' => 'Amerika/Eirunepe',
    'America/Rio_Branco' => 'Amerika/Rio_Branco',
    'America/Santiago' => 'Amerika/Santiago',
    'Pacific/Easter' => 'Stillehavet/Påskeøen',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Curacao',
    'America/Guayaquil' => 'Amerika/Guayaquil',
    'Pacific/Galapagos' => 'Stillehavet/Galapagos',
    'Atlantic/Stanley' => 'Atlantisk/Stanley',
    'America/Cayenne' => 'Amerika/Cayenne',
    'America/Guyana' => 'Amerika/Guyana',
    'America/Asuncion' => 'Amerika/Asuncion',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlantisk/Sydgeorgien',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Port_of_Spain' => 'Amerika/Port_of_Spain',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Caracas' => 'Amerika/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Kontakter',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drev',
);
$app_list_strings['token_status'] = array(
    1 => 'Forespørgsel',
    2 => 'Adgang',
    3 => 'Ugyldig',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampagner',
    'email' => 'Emails',
    'event' => 'Event',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampagner',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampagner',
    'email' => 'Emails',
    'event' => 'Event',
    'system' => 'System',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Vidensbase';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'Udkast';
$app_list_strings['aok_status_list']['Expired'] = 'Udløbet';
$app_list_strings['aok_status_list']['In_Review'] = 'Til gennemsyn';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privat';
$app_list_strings['aok_status_list']['published_public'] = 'Offentlig';

$app_list_strings['moduleList']['FP_events'] = 'Events';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Lokationer';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Inviteret';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Ikke inviteret';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Deltog';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Deltog ikke';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accepteret';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Afvist';
$app_list_strings['fp_event_status_dom']['No Response'] = 'No Response';

$app_strings['LBL_STATUS_EVENT'] = 'Invitationsstatus';
$app_strings['LBL_ACCEPT_STATUS'] = 'Accepter status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Denne side';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Alle rækker';
$app_strings['LBL_LISTVIEW_NONE'] = 'Ingen';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Case Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Svar venligst ovenover denne linje ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Åben';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Åben',
        'Closed' => 'Lukket',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Ny',
        'Open_Assigned' => 'Tildelt',
        'Closed_Closed' => 'Lukket',
        'Open_Pending Input' => 'Afventer input',
        'Closed_Rejected' => 'Afvist',
        'Closed_Duplicate' => 'Kopi',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'En bruger',
        'Account' => 'Konto bruger',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Systemstandard',
    'singleUser' => 'En bruger',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Mindst-travl',
    'random' => 'Tilfældig',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rappoter';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Rapport grafer';
$app_list_strings['moduleList']['AOR_Fields'] = 'Rapport Felter';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Planlagte rapporter';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Lig med';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Ikke lig med';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Større end';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mindre end';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Større end eller lig med';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mindre end eller lig med';
$app_list_strings['aor_operator_list']['Contains'] = 'Indeholder';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Starter med';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Slutter på';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Å-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Å';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Å';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Å/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Å';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Å';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Å.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Å';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Å';
$app_list_strings['aor_format_options']['Ymd'] = 'Åmd';
$app_list_strings['aor_format_options']['Y-m'] = 'Å-m';
$app_list_strings['aor_format_options']['Y'] = 'Å';
$app_list_strings['aor_condition_operator_list']['And'] = 'E';
$app_list_strings['aor_condition_operator_list']['OR'] = 'eller';
$app_list_strings['aor_condition_type_list']['Value'] = 'Værdi';
$app_list_strings['aor_condition_type_list']['Field'] = 'Felt';
$app_list_strings['aor_condition_type_list']['Date'] = 'Dato';
$app_list_strings['aor_condition_type_list']['Multi'] = 'En af';
$app_list_strings['aor_condition_type_list']['Period'] = 'Periode';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Aktuel bruger';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutter';
$app_list_strings['aor_date_type_list']['hour'] = 'Timer';
$app_list_strings['aor_date_type_list']['day'] = 'Dage';
$app_list_strings['aor_date_type_list']['week'] = 'Uger';
$app_list_strings['aor_date_type_list']['month'] = 'Måneder';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Åbningstider';
$app_list_strings['aor_date_options']['now'] = 'Nu';
$app_list_strings['aor_date_options']['field'] = 'Dette felt';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Stigende';
$app_list_strings['aor_sort_operator']['DESC'] = 'Faldende';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Antal';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Sum';
$app_list_strings['aor_function_list']['AVG'] = 'Gennemsnit';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Antal';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Gennemsnit';
$app_list_strings['aor_chart_types']['bar'] = 'Søjlediagram';
$app_list_strings['aor_chart_types']['line'] = 'Liniediagram';
$app_list_strings['aor_chart_types']['pie'] = 'Cirkeldiagram';
$app_list_strings['aor_chart_types']['radar'] = 'Radardiagram';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stablet søjlediagram';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grupperet søjlediagram';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Månedlig';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Ugentlig';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Dagligt';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktiv';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inaktiv';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Tildelt til';
$app_list_strings['aor_email_type_list']['Users'] = 'Brugere';
$app_list_strings['aor_assign_options']['all'] = 'ALLE brugere';
$app_list_strings['aor_assign_options']['role'] = 'ALLE brugere i rolle';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'I dag';
$app_list_strings['date_time_period_list']['yesterday'] = 'I går';
$app_list_strings['date_time_period_list']['this_week'] = 'Denne uge';
$app_list_strings['date_time_period_list']['last_week'] = 'Sidste uge';
$app_list_strings['date_time_period_list']['last_month'] = 'Sidste måned';
$app_list_strings['date_time_period_list']['this_month'] = 'Denne måned';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Dette kvartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Sidste kvartal';
$app_list_strings['date_time_period_list']['this_year'] = 'Dette år';
$app_list_strings['date_time_period_list']['last_year'] = 'Sidste år';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'på';
$app_strings['LBL_CRON_AT'] = 'kl.';
$app_strings['LBL_CRON_RAW'] = 'Advanceret';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Time';
$app_strings['LBL_CRON_DAY'] = 'Dag';
$app_strings['LBL_CRON_MONTH'] = 'Måned';
$app_strings['LBL_CRON_DOW'] = 'Ugedag';
$app_strings['LBL_CRON_DAILY'] = 'Dagligt';
$app_strings['LBL_CRON_WEEKLY'] = 'Ugentlig';
$app_strings['LBL_CRON_MONTHLY'] = 'Månedlig';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Skabeloner';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produkter - Kategorier';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkter';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Fakturalinjer';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Fakturalinje grupper';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Rådgiver';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurrent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Forhandler';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Andre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Udkast';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Forhandling';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Leveret';
$app_list_strings['quote_stage_dom']['On Hold'] = 'På hold';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Bekræftet';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Lukket og accepteret';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Lukket og tabt';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Lukket og død';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Godkendt';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Ikke Godkendt';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'pct.';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Rådgiver';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurrent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Forhandler';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Andre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Betalt';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Ikke Betalt';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Annuleret';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Ikke Faktureret';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Faktureret';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'ÅÅÅÅ';
$app_list_strings['product_category_dom']['Laptops'] = 'Bærbare';
$app_list_strings['product_category_dom']['Desktops'] = 'Stationære';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'God';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Kunder';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakter';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Emner';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Ikke startet';
$app_list_strings['contract_status_list']['In Progress'] = 'I gang';
$app_list_strings['contract_status_list']['Signed'] = 'Underskrevet';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Print som PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Vælg en Skabelon';
$app_strings['LBL_NO_TEMPLATE'] = 'FEJL\nIngen skabeloner blev fundet. \nGå venligst til modulet PDF-skabeloner og opret en';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'WorkFlow Betingelser';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Actions';
$app_list_strings['aow_status_list']['Active'] = 'Aktiv';
$app_list_strings['aow_status_list']['Inactive'] = 'Inaktiv';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Lig med';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Ikke lig med';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Større end';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mindre end';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Større end eller lig med';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mindre end eller lig med';
$app_list_strings['aow_operator_list']['Contains'] = 'Indeholder';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Starter med';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Slutter på';
$app_list_strings['aow_operator_list']['is_null'] = 'Er null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Afsluttet';
$app_list_strings['aow_process_status_list']['Running'] = 'Kører';
$app_list_strings['aow_process_status_list']['Pending'] = 'Afventer';
$app_list_strings['aow_process_status_list']['Failed'] = 'Mislykket';
$app_list_strings['aow_condition_operator_list']['And'] = 'E';
$app_list_strings['aow_condition_operator_list']['OR'] = 'eller';
$app_list_strings['aow_condition_type_list']['Value'] = 'Værdi';
$app_list_strings['aow_condition_type_list']['Field'] = 'Felt';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Dato';
$app_list_strings['aow_condition_type_list']['Multi'] = 'En af';
$app_list_strings['aow_action_type_list']['Value'] = 'Værdi';
$app_list_strings['aow_action_type_list']['Field'] = 'Felt';
$app_list_strings['aow_action_type_list']['Date'] = 'Dato';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Tilfældig';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Værdi';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Felt';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutter';
$app_list_strings['aow_date_type_list']['hour'] = 'Timer';
$app_list_strings['aow_date_type_list']['day'] = 'Dage';
$app_list_strings['aow_date_type_list']['week'] = 'Uger';
$app_list_strings['aow_date_type_list']['month'] = 'Måneder';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Åbningstider';
$app_list_strings['aow_date_options']['now'] = 'Nu';
$app_list_strings['aow_date_options']['today'] = 'I dag';
$app_list_strings['aow_date_options']['field'] = 'Dette felt';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALLE brugere';
$app_list_strings['aow_assign_options']['role'] = 'ALLE brugere i rolle';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Emails';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Tildelt til';
$app_list_strings['aow_email_type_list']['Users'] = 'Brugere';
$app_list_strings['aow_email_to_list']['to'] = 'Til';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'All Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'New Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modified Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Altid';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projekter - Skabeloner';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Slut til start';
$app_list_strings['relationship_type_list']['SS'] = 'Start til start';
$app_list_strings['duration_unit_dom']['Days'] = 'Dage';
$app_list_strings['duration_unit_dom']['Hours'] = 'Timer';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Vis Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Vis detaljer';
$app_strings['LBL_CREATE_PROJECT'] = 'Opret projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Kort';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Længdegrad';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Breddegrad';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kort';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Kort - Markørerer';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Kort - Områder';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partnere';

$app_list_strings['map_unit_type_list']['mi'] = 'Mil';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometer';

$app_list_strings['map_module_type_list']['Accounts'] = 'Kunder';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakter';
$app_list_strings['map_module_type_list']['Cases'] = 'Sager';
$app_list_strings['map_module_type_list']['Leads'] = 'Emner';
$app_list_strings['map_module_type_list']['Meetings'] = 'Møder';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Muligheder';
$app_list_strings['map_module_type_list']['Project'] = 'Projekter';
$app_list_strings['map_module_type_list']['Prospects'] = 'Målgrupper';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Kunder';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakt';
$app_list_strings['map_relate_type_list']['Cases'] = 'Sager';
$app_list_strings['map_relate_type_list']['Leads'] = 'Emner';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Møder';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Mulighed';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekter';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Målgrupper';

$app_list_strings['marker_image_list']['accident'] = 'Uheld';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
$app_list_strings['marker_image_list']['agriculture'] = 'Landbrug';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Flyvemaskine lille';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Fly turisme';
$app_list_strings['marker_image_list']['airport'] = 'Lufthavn';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteater';
$app_list_strings['marker_image_list']['apartment'] = 'Lejlighed';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvarium';
$app_list_strings['marker_image_list']['arch'] = 'Bue';
$app_list_strings['marker_image_list']['atm'] = 'Pengeautomat';
$app_list_strings['marker_image_list']['audio'] = 'Lyd';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pund';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Strand';
$app_list_strings['marker_image_list']['beautiful'] = 'Smukt';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Cykelparkering';
$app_list_strings['marker_image_list']['big_city'] = 'Storby';
$app_list_strings['marker_image_list']['bridge'] = 'Bro';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderne bro';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Svævebane';
$app_list_strings['marker_image_list']['car'] = 'Bil';
$app_list_strings['marker_image_list']['car_rental'] = 'Billeje';
$app_list_strings['marker_image_list']['carrepair'] = 'Automekaniker';
$app_list_strings['marker_image_list']['castle'] = 'Slot';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedral';
$app_list_strings['marker_image_list']['chapel'] = 'Kapel';
$app_list_strings['marker_image_list']['church'] = 'Kirke';
$app_list_strings['marker_image_list']['city_square'] = 'Byens torv';
$app_list_strings['marker_image_list']['cluster'] = 'Klynge';
$app_list_strings['marker_image_list']['cluster_2'] = 'Klynge 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Klynge 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Klynge 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Klynge 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kaffe';
$app_list_strings['marker_image_list']['community_centre'] = 'Medborgerhus';
$app_list_strings['marker_image_list']['company'] = 'Firma';
$app_list_strings['marker_image_list']['conference'] = 'Konference';
$app_list_strings['marker_image_list']['construction'] = 'Konstruktion';
$app_list_strings['marker_image_list']['convenience'] = 'Nærbutik';
$app_list_strings['marker_image_list']['court'] = 'Retten';
$app_list_strings['marker_image_list']['cruise'] = 'Krydstogt';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Valutaveksling';
$app_list_strings['marker_image_list']['customs'] = 'Told';
$app_list_strings['marker_image_list']['cycling'] = 'Cykling';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Tandlæge';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Stormagasin';
$app_list_strings['marker_image_list']['disability'] = 'Handicap';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Handicapparkering';
$app_list_strings['marker_image_list']['doctor'] = 'Læge';
$app_list_strings['marker_image_list']['dog_leash'] = 'Hundesnor';
$app_list_strings['marker_image_list']['down'] = 'Ned';
$app_list_strings['marker_image_list']['down_left'] = 'Ned til venstre';
$app_list_strings['marker_image_list']['down_right'] = 'Down Right';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Medicin';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Ekspert';
$app_list_strings['marker_image_list']['factory'] = 'Fabrik';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Faldende sten';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Skov';
$app_list_strings['marker_image_list']['fountain'] = 'Springvand';
$app_list_strings['marker_image_list']['friday'] = 'Fredag';
$app_list_strings['marker_image_list']['garden'] = 'Have';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzintank';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Gaver';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Købmand';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hårsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Motorvej';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historisk kvarter';
$app_list_strings['marker_image_list']['home'] = 'Hjem';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 stjerne';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 stjerner';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 stjerner';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 stjerner';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 stjerner';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Retsbygning';
$app_list_strings['marker_image_list']['lake'] = 'Sø';
$app_list_strings['marker_image_list']['laundromat'] = 'Vaskeri';
$app_list_strings['marker_image_list']['left'] = 'Venstre';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Bibliotek';
$app_list_strings['marker_image_list']['lighthouse'] = 'Fyrtårn';
$app_list_strings['marker_image_list']['liquor'] = 'Spiritus';
$app_list_strings['marker_image_list']['lock'] = 'Lås';
$app_list_strings['marker_image_list']['main_road'] = 'Hovedvej';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobiltelefonmast';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderne tårn';
$app_list_strings['marker_image_list']['monastery'] = 'Kloster';
$app_list_strings['marker_image_list']['monday'] = 'Mandag';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Moske';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorcykel';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Live musik';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oliepumpe Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Palads';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramisk';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Pendlerparkering';
$app_list_strings['marker_image_list']['parking'] = 'Parkering';
$app_list_strings['marker_image_list']['photo'] = 'Billede';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Ikke besøgte steder';
$app_list_strings['marker_image_list']['places_visited'] = 'Besøgte steder';
$app_list_strings['marker_image_list']['playground'] = 'Legeplads';
$app_list_strings['marker_image_list']['police'] = 'Politiet';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Post';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Elmast';
$app_list_strings['marker_image_list']['power_plant'] = 'Kraftværk';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Offentlig kunst';
$app_list_strings['marker_image_list']['rain'] = 'Regn';
$app_list_strings['marker_image_list']['real_estate'] = 'Ejendom';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant afrikansk';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant grill';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant kinesisk';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant fisk';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant fisk og pommes fritter';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant græsk';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant indisk';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant italiensk';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant japansk';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant koreansk';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant middelhavet';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant mexicansk';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant romantisk';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant thailandsk';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant tyrkisk';
$app_list_strings['marker_image_list']['right'] = 'Højre';
$app_list_strings['marker_image_list']['right_then_down'] = 'Right Then Down';
$app_list_strings['marker_image_list']['right_then_up'] = 'Right Then Up';
$app_list_strings['marker_image_list']['saturday'] = 'Lørdag';
$app_list_strings['marker_image_list']['school'] = 'Skole';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Indkøbscenter';
$app_list_strings['marker_image_list']['shore'] = 'Kyst';
$app_list_strings['marker_image_list']['sight'] = 'Seværdighed';
$app_list_strings['marker_image_list']['small_city'] = 'Lille by';
$app_list_strings['marker_image_list']['snow'] = 'Sne';
$app_list_strings['marker_image_list']['spaceport'] = 'Rumstation';
$app_list_strings['marker_image_list']['speed_100'] = 'Hastighed 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Hastighed 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Hastighed 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Hastighed 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Hastighed 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Hastighed 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Hastighed 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Hastighed 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Hastighed 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Hastighed 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Hastighed 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Hastighed 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Fartbump';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Damptog';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplys';
$app_list_strings['marker_image_list']['subway'] = 'Undergrundsbane';
$app_list_strings['marker_image_list']['sun'] = 'Søn';
$app_list_strings['marker_image_list']['sunday'] = 'Søndag';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarked';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagoge';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxa';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Tehus';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindu Tempel';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Teater';
$app_list_strings['marker_image_list']['theme_park'] = 'Forlystelsespark';
$app_list_strings['marker_image_list']['thursday'] = 'Torsdag';
$app_list_strings['marker_image_list']['toilets'] = 'Toiletter';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tårn';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Tog';
$app_list_strings['marker_image_list']['tram'] = 'Sporvogn';
$app_list_strings['marker_image_list']['truck'] = 'Lastbil';
$app_list_strings['marker_image_list']['tuesday'] = 'Tirsdag';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Drej til venstre';
$app_list_strings['marker_image_list']['turn_right'] = 'Drej til højre';
$app_list_strings['marker_image_list']['university'] = 'Universitet';
$app_list_strings['marker_image_list']['up'] = 'Op';
$app_list_strings['marker_image_list']['up_left'] = 'Up Left';
$app_list_strings['marker_image_list']['up_right'] = 'Up Right';
$app_list_strings['marker_image_list']['up_then_left'] = 'Up Then Left';
$app_list_strings['marker_image_list']['up_then_right'] = 'Up Then Right';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Vand';
$app_list_strings['marker_image_list']['waterfall'] = 'Vandfald';
$app_list_strings['marker_image_list']['watermill'] = 'Vandmølle';
$app_list_strings['marker_image_list']['waterpark'] = 'Badeland';
$app_list_strings['marker_image_list']['watertower'] = 'Vandtårn';
$app_list_strings['marker_image_list']['wednesday'] = 'Onsdag';
$app_list_strings['marker_image_list']['wifi'] = 'Wi-Fi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Wind Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Vindmølle';
$app_list_strings['marker_image_list']['winery'] = 'Vingård';
$app_list_strings['marker_image_list']['work_office'] = 'Work Office';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Verdensarvssted';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Out of Office';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Til møde';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Ændre aftale';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Please enter the reschedule information';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Dato';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Årsag:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Vælg venligst en gyldig dato';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Angiv venligst en årsag';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Ændre aftale';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Call attempt history';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Opkaldsforsøg';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Security Group';
$app_strings['LBL_ROLE'] = 'Rolle';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Tilføj fane';
$app_strings['LBL_EDIT_TAB'] = 'Rediger faner';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Antal kolonner:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Er du sikker på at du vil slette';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Opgaver',
    'Meetings' => 'Møder',
    'Calls' => 'Opkald',
    'Notes' => 'Noter',
    'Emails' => 'Emails'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Du har klikket væk fra feltet du redigerede uden at gemme. Klik ok, hvis du ikke har noget i mod at miste dine ændringer, eller annuller, hvis du gerne vil fortsætte med at redigere";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Der opstod en fejl under indlæsning af feltet. Din session kan have været udløbet. Log venligst ind igen for at rette op på det";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Salg',
    'getAccountsSpotsData' => 'Kunder',
    'getLeadsSpotsData' => 'Emner',
    'getServiceSpotsData' => 'Service',
    'getMarketingSpotsData' => 'Markedsføring',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktiviteter',
    'getQuotesSpotsData' => 'Tilbud'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Åbningstider';
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
$app_list_strings['day_list']['Monday'] = 'Mandag';
$app_list_strings['day_list']['Tuesday'] = 'Tirsdag';
$app_list_strings['day_list']['Wednesday'] = 'Onsdag';
$app_list_strings['day_list']['Thursday'] = 'Torsdag';
$app_list_strings['day_list']['Friday'] = 'Fredag';
$app_list_strings['day_list']['Saturday'] = 'Lørdag';
$app_list_strings['day_list']['Sunday'] = 'Søndag';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Brev';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Stående';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Liggende';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'Udkast';
$app_list_strings['survey_status_list']['Public'] = 'Offentlig';
$app_list_strings['survey_status_list']['Closed'] = 'Lukket';
$app_list_strings['surveys_question_type']['Text'] = 'Tekst';
$app_list_strings['surveys_question_type']['Textbox'] = 'Tekstboks';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Afkrydsningsfelt';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Dato';
$app_list_strings['surveys_question_type']['Scale'] = 'Skala';
$app_list_strings['surveys_question_type']['Rating'] = 'Bedømmelse';
$app_list_strings['surveys_matrix_options'][0] = 'Tilfreds';
$app_list_strings['surveys_matrix_options'][1] = 'Hverken tilfreds eller utilfreds';
$app_list_strings['surveys_matrix_options'][2] = 'Utilfreds';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Pending Confirm opt in, Confirm opt in not sent';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Pending Confirm opt in, Confirm opt in sent';
$app_strings['LBL_OPT_IN'] = 'Opted in';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Fravalgt';
$app_strings['LBL_OPT_IN_INVALID'] = 'Ugyldig';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Slukket',
    'opt-in' => 'Tilvælg',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Tilvælg',
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
    'authorization_code' => 'Autorisationskode'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutter',
    'hour' => 'timer',
    'day' => 'dage',
    'week' => 'uger',
    'month' => 'måneder',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Søg (ny)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personlig',
    'shared' => 'Delt',
    'group' => 'Gruppe',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Adgang valideret',
    'failed' => 'Mislykket',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'I gang',
    'success' => 'Lykkes',
    'warning' => 'Advarsel:',
    'error' => 'Fejl:',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API Fejl';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API Fejl opstod.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api Version: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Please ensure you fill in the fields required';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API expects body of the request to be JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Request';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Response';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'JSON API kan ikke finde ressource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API expects the "Accept" header to be application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API expects the "Content-Type" header to be application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Desktop notifications are now enabled for this web browser.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Desktop notifikationer er slået fra i denne web browser. Gå ind i browser indstillinger for at slå dem til igen.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Denne browser understøtter ikke skrivebordsnotifikationer.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Der opstod en fejl: ';
$app_strings['LBL_CLICK_HERE'] = 'Klik her';
$app_strings['LBL_TO_CONTINUE'] = ' for at fortsætte.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Ukendt fejl';
$app_strings['LBL_SEARCH_TITLE']                   = 'Søg';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Søg';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Søg';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Søgemaskine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Forrige';
$app_strings['LBL_SEARCH_NEXT'] = 'Næste';
$app_strings['LBL_SEARCH_PAGE'] = 'Side ';
$app_strings['LBL_SEARCH_OF'] = ' af ';
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

$app_strings['LBL_KEY'] = 'Nøgle';
$app_strings['LBL_VALUE'] = 'Værdi';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Signatur';

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
