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
    'language_pack_name' => 'Serbian (Latin) - sr_CS',
    'moduleList' => array(
        'Home' => 'Početna strana',
        'ResourceCalendar' => 'Kalendar resursa',
        'Contacts' => 'Kontakti',
        'Accounts' => 'Kompanije',
        'Alerts' => 'Upozorenja',
        'Opportunities' => 'Prodajne prilike',
        'Cases' => 'Slučajevi',
        'Notes' => 'Beleške',
        'Calls' => 'Pozivi',
        'TemplateSectionLine' => 'Linija sekcije šablona',
        'Calls_Reschedule' => 'Novi plan poziva',
        'Emails' => 'Email poruke',
        'EAPM' => 'EAPM',
        'Meetings' => 'Sastanci',
        'Tasks' => 'Zadaci',
        'Calendar' => 'Kalendar',
        'Leads' => 'Potencijalni klijenti',
        'Currencies' => 'Valute',
        'Activities' => 'Aktivnosti',
        'Bugs' => 'Praćenje defekata',
        'Feeds' => 'RSS',
        'iFrames' => 'Moji sajtovi',
        'TimePeriods' => 'Vremenski periodi',
        'ContractTypes' => 'Tipovi Ugovora',
        'Schedulers' => 'Planeri',
        'Project' => 'Projekti',
        'ProjectTask' => 'Projektni Zadaci',
        'Campaigns' => 'Kampanje',
        'CampaignLog' => 'Log kampanje',
        'Documents' => 'Dokumenti',
        'DocumentRevisions' => 'Revizije dokumenta',
        'Connectors' => 'Konektori',
        'Roles' => 'Uloge',
        'Notifications' => 'Obaveštenja',
        'Sync' => 'Sinhronizacija',
        'Users' => 'Korisnici',
        'Employees' => 'Zaposleni',
        'Administration' => 'Administracija',
        'ACLRoles' => 'Uloge',
        'InboundEmail' => 'Dolazni email',
        'Releases' => 'Izdanja',
        'Prospects' => 'Ciljevi',
        'Queues' => 'Redovi',
        'EmailMarketing' => 'Email Marketing',
        'EmailTemplates' => 'Email šabloni',
        'ProspectLists' => 'Ciljevi - Liste',
        'SavedSearch' => 'Sačuvane pretrage',
        'UpgradeWizard' => 'Čarobnjak nadgradnje',
        'Trackers' => 'Sistemi za praćenje',
        'TrackerSessions' => 'Sesije sistema za praćenje',
        'TrackerQueries' => 'Upiti za sisteme praćenja',
        'FAQ' => 'Česta pitanja',
        'Newsletters' => 'Bilteni',
        'SugarFeed' => 'SuiteCRM Feed',
        'SugarFavorites' => 'Omiljeni',

        'OAuthKeys' => 'OAuth consumer ključevi',
        'OAuthTokens' => 'OAuth tokeni',
        'OAuth2Clients' => 'Oauth klijenti',
        'OAuth2Tokens' => 'OAuth tokeni',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Početna strana',
        'Dashboard' => 'Kontrolna tabla',
        'Contacts' => 'Kontakt',
        'Accounts' => 'Kompanija',
        'Opportunities' => 'Prodajna prilika',
        'Cases' => 'Slučaj',
        'Notes' => 'Beleška',
        'Calls' => 'Poziv',
        'Emails' => 'Email',
        'EmailTemplates' => 'Email šablon',
        'Meetings' => 'Sastanak',
        'Tasks' => 'Zadatak',
        'Calendar' => 'Kalendar',
        'Leads' => 'Potencijalni klijent',
        'Activities' => 'Aktivnost',
        'Bugs' => 'Praćenje defekata',
        'KBDocuments' => 'Baza Znanja',
        'Feeds' => 'RSS',
        'iFrames' => 'Moji sajtovi',
        'TimePeriods' => 'Vremenski period',
        'Project' => 'Projekti',
        'ProjectTask' => 'Projektni Zadatak',
        'Prospects' => 'Cilj',
        'Campaigns' => 'Kampanja',
        'Documents' => 'Dokumenti',
        'Sync' => 'Sinhronizacija',
        'Users' => 'Korisnik',
        'SugarFavorites' => 'Omiljeni',

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
        'Customer' => 'Korisnik',
        'Integrator' => 'Integrator',
        'Investor' => 'Investitor',
        'Partner' => 'Partner',
        'Press' => 'Novinar',
        'Prospect' => 'Verovatni Kupac',
        'Reseller' => 'Preprodavac',
        'Other' => 'Ostalo',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Oprema',
        'Banking' => 'Bankarstvo',
        'Biotechnology' => 'Biotehnologija',
        'Chemicals' => 'Hemijska industrija',
        'Communications' => 'Komunikacije',
        'Construction' => 'Građevinarstvo',
        'Consulting' => 'Konsalting',
        'Education' => 'Obrazovanje',
        'Electronics' => 'Elektronika',
        'Energy' => 'Energetika',
        'Engineering' => 'Inženjering',
        'Entertainment' => 'Zabava',
        'Environmental' => 'Ekologija',
        'Finance' => 'Finansije',
        'Government' => 'Državna uprava',
        'Healthcare' => 'Zdravstvo',
        'Hospitality' => 'Ugostiteljstvo',
        'Insurance' => 'Osiguranje',
        'Machinery' => 'Mašinstvo',
        'Manufacturing' => 'Proizvodnja',
        'Media' => 'Mediji',
        'Not For Profit' => 'Neprofitna delatnost',
        'Recreation' => 'Rekreacija',
        'Retail' => 'Maloprodaja',
        'Shipping' => 'Dostava',
        'Technology' => 'Tehnologija',
        'Telecommunications' => 'Telekomunikacije',
        'Transportation' => 'Transport',
        'Utilities' => 'Komunalne usluge',
        'Other' => 'Ostalo',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Prvi poziv',
        'Existing Customer' => 'Postojeći klijent',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Zaposleni',
        'Partner' => 'Partner',
        'Public Relations' => 'Odnosi sa javnošću',
        'Direct Mail' => 'Direktna pošta',
        'Conference' => 'Konferencija',
        'Trade Show' => 'Sajam',
        'Web Site' => 'Web Sajt',
        'Word of mouth' => 'Usmena preporuka',
        'Email' => 'Email',
        'Campaign' => 'Kampanja',
        'Other' => 'Ostalo',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Postojeći biznis',
        'New Business' => 'Novi biznis',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Dobit',
        'Investment' => 'Ulaganje',
        'Expected_Revenue' => 'Očekivana dobit',
        'Budget' => 'Budžet',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Donosilac poslovnih odluka',
        'Business Evaluator' => 'Poslovni procenitelj',
        'Technical Decision Maker' => 'Donosilac tehničkih odluka',
        'Technical Evaluator' => 'Tehnički procenitelj',
        'Executive Sponsor' => 'Rukovodilac sponzorstva',
        'Influencer' => 'Od uticaja',
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
        'Net 15' => '15 dana',
        'Net 30' => '30 dana',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kvalifikacija',
        'Needs Analysis' => 'Analize potreba',
        'Value Proposition' => 'Preporučena cena',
        'Id. Decision Makers' => 'Identifikacija donosilaca odluke',
        'Perception Analysis' => 'Analiza sagledavanja',
        'Proposal/Price Quote' => 'Predlog/Cene ponuda',
        'Negotiation/Review' => 'Pregovori/Pregledi',
        'Closed Won' => 'Završeni osvojeni',
        'Closed Lost' => 'Završeni izgubljeni',
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
        'Call' => 'Poziv',
        'Meeting' => 'Sastanak',
        'Task' => 'Zadatak',
        'Email' => 'Email',
        'Note' => 'Beleška',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Gosp.',
        'Ms.' => 'Gđa.',
        'Mrs.' => 'Gđica.',
        'Miss' => 'Promašaj',
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
        60 => 'Minut pre',
        300 => '5 minuta pre',
        600 => '10 minuta pre',
        900 => '15 minuta pre',
        1800 => '30 minuta pre',
        3600 => 'Sat vremena pre',
        7200 => '2 sata pre',
        10800 => '3 sata pre',
        18000 => '5 sati pre',
        86400 => '1 dan pre',
    ),

    'task_priority_default' => 'Srednji',
    'task_priority_dom' => array(
        'High' => 'Visok',
        'Medium' => 'Srednji',
        'Low' => 'Nizak',
    ),
    'task_status_default' => 'Not Started',
    'task_status_dom' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'U toku',
        'Completed' => 'Završen',
        'Pending Input' => 'Unos na čekanju',
        'Deferred' => 'Odložen',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Održan',
        'Not Held' => 'Nije održan',
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
        'Held' => 'Održan',
        'Not Held' => 'Nije održan',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Dolazni',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Novo',
        'Assigned' => 'Dodeljeno',
        'In Process' => 'U procesu',
        'Converted' => 'Konvertovan',
        'Recycled' => 'Obnovljen',
        'Dead' => 'Zastareo',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Visok',
        'P2' => 'Srednji',
        'P3' => 'Nizak',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Redovni Korisnik',
        'Administrator' => 'Administrator:',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'E-mail kod',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktivan',
        'Terminated' => 'Prekinut',
        'Leave of Absence' => 'Odsustvo',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Visok',
        'Medium' => 'Srednji',
        'Low' => 'Nizak',
    ),
    'project_task_priority_default' => 'Srednji',

    'project_task_status_options' => array(
        'Not Started' => 'Not Started',
        'In Progress' => 'U toku',
        'Completed' => 'Završen',
        'Pending Input' => 'Unos na čekanju',
        'Deferred' => 'Odložen',
    ),
    'project_task_utilization_options' => array(
        '0' => 'nijedan',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Nacrt',
        'In Review' => 'Na pregledu',
        'Underway' => 'U toku',
        'On_Hold' => 'Na Čekanju',
        'Completed' => 'Završen',
    ),
    'project_status_default' => 'Nacrt',

    'project_duration_units_dom' => array(
        'Days' => 'Dana',
        'Hours' => 'Sati',
    ),

    'activity_status_type_dom' => array(
        '' => '--Prazno--',
        'active' => 'Aktivan',
        'inactive' => 'Neaktivan',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Kompanije',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Kompanija',
        'Opportunities' => 'Prodajna prilika',
        'Cases' => 'Slučaj',
        'Leads' => 'Potencijalni klijent',
        'Contacts' => 'Kontakt', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Praćenje defekata',
        'Project' => 'Projekti',

        'Prospects' => 'Cilj',
        'ProjectTask' => 'Projektni Zadatak',

        'Tasks' => 'Zadatak',

        'AOS_Contracts' => 'Ugovor',
        'AOS_Invoices' => 'Račun',
        'AOS_Quotes' => 'Ponuda',
        'AOS_Products' => 'Proizvod',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Kompanija',
        'Contacts' => 'Kontakt',
        'Opportunities' => 'Prodajna prilika',
        'Campaigns' => 'Kampanja',
        'Tasks' => 'Zadatak',
        'Emails' => 'Email',

        'Bugs' => 'Praćenje defekata',
        'Project' => 'Projekti',
        'ProjectTask' => 'Projektni Zadatak',
        'Prospects' => 'Cilj',
        'Cases' => 'Slučaj',
        'Leads' => 'Potencijalni klijent',

        'Meetings' => 'Sastanak',
        'Calls' => 'Poziv',

        'AOS_Contracts' => 'Ugovor',
        'AOS_Invoices' => 'Račun',
        'AOS_Quotes' => 'Ponuda',
        'AOS_Products' => 'Proizvod',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Kompanija',
        'Contacts' => 'Kontakt',
        'Tasks' => 'Zadatak',
        'Opportunities' => 'Prodajna prilika',

        'Bugs' => 'Praćenje defekata',
        'Cases' => 'Slučaj',
        'Leads' => 'Potencijalni klijent',

        'Project' => 'Projekti',
        'ProjectTask' => 'Projektni Zadatak',

        'Prospects' => 'Cilj',

        'AOS_Contracts' => 'Ugovor',
        'AOS_Invoices' => 'Račun',
        'AOS_Quotes' => 'Ponuda',
        'AOS_Products' => 'Proizvod',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Ponude',
        'AOS_Invoices' => 'Računi',
        'AOS_Contracts' => 'Ugovori',
    ),
    'issue_priority_default_key' => 'Srednji',
    'issue_priority_dom' => array(
        'Urgent' => 'Hitno',
        'High' => 'Visok',
        'Medium' => 'Srednji',
        'Low' => 'Nizak',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Prihvaćen',
        'Duplicate' => 'Duplikat',
        'Closed' => 'Zatvoren',
        'Out of Date' => 'Van roka važnosti',
        'Invalid' => 'Nevažeći',
    ),

    'issue_status_default_key' => 'Novo',
    'issue_status_dom' => array(
        'New' => 'Novo',
        'Assigned' => 'Dodeljeno',
        'Closed' => 'Zatvoren',
        'Pending' => 'Očekuje se',
        'Rejected' => 'Odbijen',
    ),

    'bug_priority_default_key' => 'Srednji',
    'bug_priority_dom' => array(
        'Urgent' => 'Hitno',
        'High' => 'Visok',
        'Medium' => 'Srednji',
        'Low' => 'Nizak',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Prihvaćen',
        'Duplicate' => 'Duplikat',
        'Fixed' => 'Popravljeno',
        'Out of Date' => 'Van roka važnosti',
        'Invalid' => 'Nevažeći',
        'Later' => 'Kasnije',
    ),
    'bug_status_default_key' => 'Novo',
    'bug_status_dom' => array(
        'New' => 'Novo',
        'Assigned' => 'Dodeljeno',
        'Closed' => 'Zatvoren',
        'Pending' => 'Očekuje se',
        'Rejected' => 'Odbijen',
    ),
    'bug_type_default_key' => 'Praćenje defekata',
    'bug_type_dom' => array(
        'Defect' => 'Defekt',
        'Feature' => 'Funkcija',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administracija',
        'Product' => 'Proizvod',
        'User' => 'Korisnik',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interni',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Email',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Kompanije',
        'Activities' => 'Aktivnosti',
        'Bugs' => 'Praćenje defekata',
        'Calendar' => 'Kalendar',
        'Calls' => 'Pozivi',
        'Campaigns' => 'Kampanje',
        'Cases' => 'Slučajevi',
        'Contacts' => 'Kontakti',
        'Currencies' => 'Valute',
        'Dashboard' => 'Kontrolna tabla',
        'Documents' => 'Dokumenti',
        'Emails' => 'Email poruke',
        'Feeds' => 'Feed-ovi',
        'Forecasts' => 'Prognoze',
        'Help' => 'Pomoć',
        'Home' => 'Početna strana',
        'Leads' => 'Potencijalni klijenti',
        'Meetings' => 'Sastanci',
        'Notes' => 'Beleške',
        'Opportunities' => 'Prodajne prilike',
        'Outlook Plugin' => 'Dodatak za Outlook',
        'Projects' => 'Projekti',
        'Quotes' => 'Ponude',
        'Releases' => 'Izdanja',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Nadgradi',
        'Users' => 'Korisnici',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'U planu',
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
        'Complete' => 'Završena',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Teleprodaja',
        'Mail' => 'Mail',
        'Email' => 'Email',
        'Print' => 'Štampa',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Televizija',
        'NewsLetter' => 'Bilten',
        'Survey' => 'Anketa',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Nedeljno',
        'Monthly' => 'Mesečno',
        'Quarterly' => 'Kvartalno',
        'Annually' => 'Godišnje',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Januar',
        '2' => 'Februar',
        '3' => 'Mart',
        '4' => 'April',
        '5' => 'Maj',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Avgust',
        '9' => 'Septembar',
        '10' => 'Oktobar',
        '11' => 'Novembar',
        '12' => 'Decembar',
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
        '8' => 'Avg',
        '9' => 'Sep',
        '10' => 'Okt',
        '11' => 'Nov',
        '12' => 'Dec',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Nedelja',
        '2' => 'Ponedeljak',
        '3' => 'Utorak',
        '4' => 'Sreda',
        '5' => 'Četvrtak',
        '6' => 'Petak',
        '7' => 'Subota',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Ned',
        '2' => 'Pon',
        '3' => 'Uto',
        '4' => 'Sre',
        '5' => 'Čet',
        '6' => 'Pet',
        '7' => 'Sub',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'prepodne',
        'pm' => 'popodne',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'Pre podne',
        'PM' => 'Po podne',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Lični',
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
        'personal' => 'Lični',
        'group' => 'Grupa',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Lični',
        'group' => 'Grupa',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Lični',
        'group' => 'Grupa',
        'system' => 'Sistem',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Poslato',
        'archived' => 'Arhivirano',
        'draft' => 'Nacrt',
        'inbound' => 'Dolazni',
        'campaign' => 'Kampanja',
    ),
    'dom_email_status' => array(
        'archived' => 'Arhivirano',
        'closed' => 'Zatvoren',
        'draft' => 'U nacrtu',
        'read' => 'Pročitano',
        'replied' => 'Odgovoreno',
        'sent' => 'Poslato',
        'send_error' => 'Greška pri slanju',
        'unread' => 'Nepročitano',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arhivirano',
    ),

    'dom_email_server_type' => array(
        '' => '--Prazno--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Prazno--',
        'createcase' => 'Kreiraj slučaj',
        'bounce' => 'Obrada vraćenih',
    ),
    'dom_email_distribution' => array(
        '' => '--Prazno--',
        'direct' => 'Direktno dodeljeno',
        'roundRobin' => 'U krug',
        'leastBusy' => 'Najmanje zauzet',
    ),
    'dom_email_errors' => array(
        1 => 'Izaberite samo jednog korisnika pri direktnoj dodeli.',
        2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Da',
        'bool_false' => 'Ne',
    ),
    'dom_int_bool' => array(
        1 => 'Da',
        0 => 'Ne',
    ),
    'dom_switch_bool' => array(
        'on' => 'Da',
        'off' => 'Ne',
        '' => 'Ne',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRMEmail Klijent',
        'mailto' => 'External Email Klijent',
    ),

    'dom_editor_type' => array(
        'none' => 'Direktni HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Podrazumevani Email Format',
        'html' => 'HTML Email',
        'plain' => 'Tekstualni Email',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Odrađeno u prošlosti, neizvršeno',
        'ready' => 'Spremno',
        'in progress' => 'U toku',
        'failed' => 'Neuspešno',
        'completed' => 'Završen',
        'no curl' => 'Ne radi: cURL nije dostupan',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minuta',
        'hour' => 'Sati',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Baza Znanja',
        'Sales' => 'Prodaja',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arhivirano',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Indirektni marketing',
        'Product Brochures' => 'Brošure proizvoda',
        'FAQ' => 'Česta pitanja',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktivan',
        'Draft' => 'Nacrt',
        'FAQ' => 'Česta pitanja',
        'Expired' => 'Istekao',
        'Under Review' => 'U pregledu',
        'Pending' => 'Očekuje se',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Spajanje Email-ova',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Sporazum o licenci',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Prihvati',
        'decline' => 'Odbij',
        'tentative' => 'Neodlučen',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Prihvaćen',
        'decline' => 'Odbijen',
        'tentative' => 'Neodlučen',
        'none' => 'Nijedno',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Nijedno',
        'Daily' => 'Dnevno',
        'Weekly' => 'Nedeljno',
        'Monthly' => 'Mesečno',
        'Yearly' => 'Godišnje',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'Dnevno',
        'Weekly' => 'Nedeljno',
        'Monthly' => 'Mesečno',
        'Yearly' => 'Godišnje',
    ),

    'duration_dom' => array(
        '' => 'Nijedno',
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
        '604800' => '1 nedelja',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Podrazumevano',
        'seed' => 'Seed',
        'exempt_domain' => 'Suppression List - By Domain',
        'exempt_address' => 'Suppression List - By Email Address',
        'exempt' => 'Suppression List - By Id',
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
        'inactive' => 'Neaktivan',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Poruka poslata/Pokušano',
        'send error' => 'Vraćene poruke, ostalo',
        'invalid email' => 'Vraćene poruke, nevažeći Email',
        'link' => 'Klik kroz link',
        'viewed' => 'Pregledana poruka',
        'removed' => 'Odjavite',
        'lead' => 'Kreirani potencijalni klijenti',
        'contact' => 'Kreirani kontakti',
        'blocked' => 'Suppressed by address or domain',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontakti',
        'Users' => 'Korisnici',
        'Prospects' => 'Ciljevi',
        'Leads' => 'Potencijalni klijenti',
        'Accounts' => 'Kompanije',
    ),
    'merge_operators_dom' => array(
        'like' => 'Sadrži',
        'exact' => 'Tačno',
        'start' => 'Počinje na',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Da',
        'false' => 'Ne',
        'required' => 'Zahtevano',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Isključeno',
        1 => 'Enabled',
        2 => 'Filter',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Visok',
        'medium' => 'Srednji',
        'low' => 'Nizak',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Not Started',
        'inprogress' => 'U toku',
        'completed' => 'Završen',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Proširi Legendu',
        'collapselegend' => 'Suzi Legendu',
        'clickfordrilldown' => 'Klikni da bi istražio',
        'detailview' => 'Detaljnije ...',
        'piechart' => 'Kružni dijagram',
        'groupchart' => 'Grupni dijagram',
        'stackedchart' => 'Naslagani dijagram',
        'barchart' => 'Dijagram stubaca',
        'horizontalbarchart' => 'Horizontalni dijagram stubaca',
        'linechart' => 'Linijski dijagram',
        'noData' => 'Podaci nisu dostupni',
        'print' => 'Štampa',
        'pieWedgeName' => 'sekcije',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktivan',
        'Inactive' => 'Neaktivan',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Jednostruki navodnik ($#39;)',
        '"' => 'Dvostruki navodnik (&#34;)',
        '' => 'Nijedno',
        'other' => 'Drugi:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Drugi:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Novi prozor',
        '_self' => 'Isti prozor',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Ne osvežavaj automatski',
        '30' => 'Svakih 30 sekundi',
        '60' => 'Svaki minut',
        '180' => 'Svaka 3 minuta',
        '300' => 'Svakih 5 minuta',
        '600' => 'Svakih 10 minuta',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Nikad',
        '30' => 'Svakih 30 sekundi',
        '60' => 'Svaki minut',
        '180' => 'Svaka 3 minuta',
        '300' => 'Svakih 5 minuta',
        '600' => 'Svakih 10 minuta',
    ),
    'date_range_search_dom' => array(
        '=' => 'Jednako',
        'not_equal' => 'Nejednako',
        'greater_than' => 'Nakon',
        'less_than' => 'Pre',
        'last_7_days' => 'Poslednjih 7 dana',
        'next_7_days' => 'Narednih 7 dana',
        'last_30_days' => 'Poslednjih 30 dana',
        'next_30_days' => 'Narednih 30 dana',
        'last_month' => 'Prošli mesec',
        'this_month' => 'Ovaj mesec',
        'next_month' => 'Sledeći mesec',
        'last_year' => 'Prošla godina',
        'this_year' => 'Ove godine',
        'next_year' => 'Sledeća godina',
        'between' => 'Između',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Jednako',
        'not_equal' => 'Nejednako',
        'greater_than' => 'Veće od',
        'greater_than_equals' => 'Veće ili jednako',
        'less_than' => 'Manje od',
        'less_than_equals' => 'Manje ili jednako',
        'between' => 'Između',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopiraj',
        'move' => 'Pomeri',
        'donothing' => 'Ne uradi ništa',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Rezultati',
    'ERR_SEARCH_INVALID_QUERY' => 'Greška prilikom pretrage. Proverite sintaksu vašeg upita.',
    'ERR_SEARCH_NO_RESULTS' => 'Nema rezultata za zadati kriterijum pretrage. Proširite kriterijum.',
    'LBL_SEARCH_PERFORMED_IN' => 'Pretraga izvršena u',
    'LBL_EMAIL_CODE' => 'E-mail kod:',
    'LBL_SEND' => 'Pošalji',
    'LBL_LOGOUT' => 'Odjavi se',
    'LBL_TOUR_NEXT' => 'Sledeći',
    'LBL_TOUR_SKIP' => 'Preskoči',
    'LBL_TOUR_BACK' => 'Nazad',
    'LBL_TOUR_TAKE_TOUR' => 'Pođi na obilazak',
    'LBL_MOREDETAIL' => 'Više detalja' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Izmeni' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Pregledaj' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filter' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Dodaj e-mail adresu' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Prikaži/Sakrij' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Obriši' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Obriši' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'Digitalna vizitkarta' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Ukloni' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Ukloni e-mail adresu' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Nesaglasan/a',
    'LBL_ID_FF_INVALID' => 'Napravite nevažeći',
    'LBL_ADD' => 'Dodaj' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo kompanije' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Popupi konektora',
    'LBL_CLOSEINLINE' => 'Zatvori',
    'LBL_VIEWINLINE' => 'Pregledaj',
    'LBL_INFOINLINE' => 'Informacije',
    'LBL_PRINT' => 'Štampa',
    'LBL_HELP' => 'Pomoć',
    'LBL_ID_FF_SELECT' => 'Izaberi',
    'DEFAULT' => 'Osnovno',
    'LBL_SORT' => 'Sortiraj',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Omogući SMTP preko SSL ili TLS',
    'LBL_NO_ACTION' => 'Ne postoji radnja sa tim imenom: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Nema dostupnih akcija.',
    'LBL_NO_DATA' => 'Nema podataka',

    'LBL_ROUTING_FLAGGED' => 'podešavanje zastavice',
    'LBL_ROUTING_TO' => 'za',
    'LBL_ROUTING_TO_ADDRESS' => 'na adresu',
    'LBL_ROUTING_WITH_TEMPLATE' => 'sa šablonom',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Ovaj zapis trenutno sadrži vrednosti u poljima Poslovni telefon i Adresa. Da bi prepisali sve vrednosti sa sledećim Poslovnim telefonom i Adresom Kompanije koju ste izabrali, kliknite "OK". Da bi sačuvali trenutne vrednosti , kliknite na "Otkaži" .',
    'LBL_DROP_HERE' => '[Spusti ovde]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Podrazumevana podešavanja za Gmail™',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Ime',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Svojstva odlaznog Mail servera',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP lozinka',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP korisničko ime',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Podrazumevano',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Upozorenje: Nedostaju korisničko ime i lozinka za nalog odlazni mail nalog.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Podešavanje Mail naloga kako bi ste videli dolazne email poruke sa vaših email naloga.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Obezbedite informacije o SMTP mail serveru koji se koristi za odlaznu email poštu u mail nalozima.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Obavljeno',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Obriši',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Za:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Za/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-adresa',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Ime',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nema pronađenih adresa',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Snimi i dodaj u Adresar',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Izaberite Email primaoce',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresar',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Upozorenje! Odlazni mail nalog koji pokušavate da obrišete je povezan sa potojećim dolaznim mail nalogom. Da li ste sigurni da želite da nastavite?',
    'LBL_EMAIL_ADDRESSES' => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-adresa',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Potvrdili ste saglasnost za korišćenje vaše e-mail adrese: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Nije moguće potvrditi elektronsku poštu',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Uvezi u SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Zadatak',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Dodaj',
    'LBL_EMAIL_ATTACHMENT' => 'Dodaj',
    'LBL_EMAIL_ATTACHMENTS' => 'Sa lokalnog sistema',
    'LBL_EMAIL_ATTACHMENTS2' => 'Iz SuiteCRMdokumenata',
    'LBL_EMAIL_ATTACHMENTS3' => 'Šablon priloga',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fajl',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumenti',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Otkaži',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Skup karaktera',
    'LBL_EMAIL_CHECK' => 'Proveri Email',
    'LBL_EMAIL_CHECKING_NEW' => 'Provera novih Email poruka',
    'LBL_EMAIL_CHECKING_DESC' => 'Sačekajte trenutak... <br><br>Ako je ovo prva provera za ovaj mail nalog, može potrajati.',
    'LBL_EMAIL_CLOSE' => 'Zatvori',
    'LBL_EMAIL_COFFEE_BREAK' => 'Provera novih Email poruka<br><br>Veliki mail nalozi mogu da potraju mnogo vremena.',

    'LBL_EMAIL_COMPOSE' => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Molim, unesite primaoce za ovaj email.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Ovaj email je prazan. Ipak poslati?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'ovaj email nema naslov. Ipak poslati?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(nema naslova)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Molim unesite validne email adrese za Za, CC i BCC polja',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Odbaci ovu poruku?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Da li ste sigurni da želite da obrišete ovaj potpis?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-mail poslat',

    'LBL_EMAIL_CREATE_NEW' => '--Kreirano pri snimanju--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Višestruki',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Prazno',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Datum slanja od strane pošiljaoca',
    'LBL_EMAIL_DATE_TODAY' => 'Danas',
    'LBL_EMAIL_DELETE' => 'Obriši',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Obrisati izabrane poruke?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email uspešno obrisan.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Brisanje poruke',
    'LBL_EMAIL_DETAILS' => 'Detalji',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Samo primarne adrese će biti korišćene pri radu sa Kontaktima.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Isprazni smeće',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Brisanje odlaznog servera',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Brisanje keš fajlova',
    'LBL_EMAIL_EMPTY_MSG' => 'Nema e-mail poruka za prikaz.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nema e-mail adresa za prikaz.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Naziv foldera treba da bude jedinstveno i da nije prazno. Pokušajte ponovo.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Ne mogu da obrišem folder. Ili folder ili njegovi podfolderi imaju email poruke ili su povezani sa poštanskim sandučetom.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ne mogu da izdvojim željeni folder iz konteksta. Probajte ponovo.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Molim, proverite Vaša podešavanja.',
    'LBL_EMAIL_ERROR_DESC' => 'Greške su pronađene:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nemate pristup ovom delu. Kontaktirajte administratora vašeg sajta kako bi dobili mogućnost pristupa.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Imena SuiteCRMfoldera moraju biti jedinstvena.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Unesite neki kriterijum za pretragu.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Došlo je do greške',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Poruka je obrisana sa servera.',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Poruka je obrisana sa servera ili prebačena u drugi folder.',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Veza sa mail serverom nije uspostavljena. Molim, kontaktirajte vašeg Administratora',
    'LBL_EMAIL_ERROR_MOVE' => 'Prebacivanje email pošte između servera i/ili email naloga trenutno nije podržano.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Greška pri prebacivanju',
    'LBL_EMAIL_ERROR_NAME' => 'Ime je obavezno.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adresa pošiljaoca je obavezna. Molim unesite validnu email adresu.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Molim, dostavite fajl.',
    'LBL_EMAIL_ERROR_SERVER' => 'Adresa mail servera je obavezna.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Mail nalog možda nije sačuvan.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Došlo je do greške tokom komunikacije sa email serverom.',
    'LBL_EMAIL_ERROR_USER' => 'Korisničko ime je obavezno.',
    'LBL_EMAIL_ERROR_PORT' => 'Port mail servera je obavezan.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protokol servera je obavezan.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Nadgledani folder je obavezan.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Folder za otpatke je obavezan.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ova informacija nije dostupna',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nije naveden server za odlaznu poštu',
    'LBL_EMAIL_ERROR_SENDING' => 'Greška u slanju e-mail poruke. Kontaktirajte sistem administratora za asistenciju.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Direktorijum',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Dodaj',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Dodaj novi folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Preimenuj folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Sačuvaj',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'dodaj ovaj folder u',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ovaj folder ne može biti promenjen',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovaj folder?\nOvaj proces ne može biti vraćen na prethodno stanje.\nBrisanje foldera će obrisati sve njegove podfoldere.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Naziv novog foldera',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Molim, izaberite folder pre izvršenja ove akcije.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Upravljanje folderima',

    'LBL_EMAIL_FORWARD' => 'Prosledi',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Preuzeto [[count]] od [[total]] email poruka',
    'LBL_EMAIL_FROM' => 'Od',
    'LBL_EMAIL_GROUP' => 'grupa',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupa',
    'LBL_EMAIL_HOME_FOLDER' => 'Početna strana',
    'LBL_EMAIL_IE_DELETE' => 'Brisanje mail naloga',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Brisanje potpisa',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Da li ste sigurni da želite da obrišete ovaj mail nalog?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Uspešno je obrisano.',
    'LBL_EMAIL_IE_SAVE' => 'Čuvanje informacije mail naloga',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Uvoz Email-a',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Uvoz u SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Podešavanje uvoza',
    'LBL_EMAIL_INVALID' => 'Nevažeći',
    'LBL_EMAIL_LOADING' => 'Učitava se...',
    'LBL_EMAIL_MARK' => 'Označi',
    'LBL_EMAIL_MARK_FLAGGED' => 'Kao Sa zastavicom',
    'LBL_EMAIL_MARK_READ' => 'Kao Pročitano',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Kao Pročitano',
    'LBL_EMAIL_MARK_UNREAD' => 'Kao Nepročitano',
    'LBL_EMAIL_ASSIGN_TO' => 'Dodeli',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'kreiraj folder',
    'LBL_EMAIL_MENU_COMPOSE' => 'Sastavi za',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Obriši folder',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Isprazni smeće',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinhronizuj',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Obriši keš fajlove',
    'LBL_EMAIL_MENU_REMOVE' => 'Ukloni',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Preimenuj folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Preimenujem folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Molim, napravite izbor pre nego što pokušate ovu operaciju.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Kreiraj folder (na udaljenoj lokaciji ili u SuiteCRM-u)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Obriši folder (na udaljenoj lokaciji ili u SuiteCRM-u)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Isprazni sve foldere sa smećem za tvoje mail naloge',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Označi ovu email poruku(e)kao pročitane',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Označi ovu email poruku(e) bez zastavice',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Preimenuj folder (na udaljenoj lokaciji ili u SuiteCRM-u)',

    'LBL_EMAIL_MESSAGES' => 'poruke',

    'LBL_EMAIL_ML_NAME' => 'Naziv liste',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Izabrana lista adresa',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Dostupna lista adresa',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Klik</b> za višestruko selektovanje<br />(Mac korisnici koriste <b>CMD-Klik</b>)',

    'LBL_EMAIL_NO' => 'Ne',
    'LBL_EMAIL_NOT_SENT' => 'Sistem ne može da obradi vaš zahtev. Molimo kontaktirajte administratora sistema.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Samo trenutak, molim...',
    'LBL_EMAIL_OPEN_ALL' => 'Otvori višestruke poruke',
    'LBL_EMAIL_OPTIONS' => 'Opcije',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Brzo Sastavljenje',
    'LBL_EMAIL_OPT_OUT' => 'Odjavite',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Odjavi i nevažeći',
    'LBL_EMAIL_PERFORMING_TASK' => 'Izvršavanje zadatka',
    'LBL_EMAIL_PRIMARY' => 'Primarno',
    'LBL_EMAIL_PRINT' => 'Štampa',

    'LBL_EMAIL_QC_BUGS' => 'Praćenje defekata',
    'LBL_EMAIL_QC_CASES' => 'Slučaj',
    'LBL_EMAIL_QC_LEADS' => 'Potencijalni klijent',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
    'LBL_EMAIL_QC_TASKS' => 'Zadatak',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Prodajna prilika',
    'LBL_EMAIL_QUICK_CREATE' => 'Brzo kreiranje',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Obnavljanje foldera',
    'LBL_EMAIL_RELATE_TO' => 'Povezivanje',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Pregled veza',
    'LBL_EMAIL_RECORD' => 'Email zapis',
    'LBL_EMAIL_REMOVE' => 'Ukloni',
    'LBL_EMAIL_REPLY' => 'Odgovori',
    'LBL_EMAIL_REPLY_ALL' => 'Odgovori svima',
    'LBL_EMAIL_REPLY_TO' => 'Reply-to',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Preuzimanje poruke',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Preuzimanje Email zapisa',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Molim odaberite samo jedan email zapis',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Povratak na prethodni modul?',
    'LBL_EMAIL_REVERT' => 'Vrati',
    'LBL_EMAIL_RELATE_EMAIL' => 'Email se odnosi',

    'LBL_EMAIL_RULES_TITLE' => 'Upravljanje pravilima',

    'LBL_EMAIL_SAVE' => 'Sačuvaj',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Sačuvaj & Odgovori',
    'LBL_EMAIL_SAVE_DRAFT' => 'Sačuvaj nacrt',
    'LBL_EMAIL_DRAFT_SAVED' => 'Skica je sačuvana',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Datum od',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Datum do',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nema rezultata na osnovu Vašeg kriterijuma za pretragu',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Rezultati pretrage',

    'LBL_EMAIL_SELECT' => 'Izaberi',

    'LBL_EMAIL_SEND' => 'Pošalji',
    'LBL_EMAIL_SENDING_EMAIL' => 'Slanje Email-a',

    'LBL_EMAIL_SETTINGS' => 'Podešavanja',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mail Nalozi',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Obriši formu',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Proveri za novi Email',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Adresa pošiljaoca',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email adresa za Test obaveštenje:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Ime pošiljaoca',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Odgovori na adresu',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinhronizuj sve Mail naloge',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Email je poslat na navedenu email adresu koristeći navedena podešavanja za odlaznu elektronsku poštu. Molim vas proverite da li je email primljen kako bi potvrdili da su podešavanja tačna.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Pogledaj ceo SMTP log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Pokrenuti potpunu sinhronizaciju?\nZa velike mail naloge sinhronizacija će možda trajati nekoliko minuta.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Kliknte na "Shift" ili "Ctrl" da bi izabrali više foldera.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Opšte',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Kreiraj gupni folder',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Izmeni grupni folder',

    'LBL_EMAIL_SETTINGS_NAME' => 'Naziv Mail naloga',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Odaberi broj email poruka po strani u Dolaznim porukama. Ovo podešavanje može da zahteva osvežavanje strane da bi imalo efekta.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Preuzimanje mail naloga',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Podešavanja su sačuvana.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Pošalji email poruke samo kao običan tekst',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Broj email poruka po strani',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Vizuelna podešavanja',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Podešavanja',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dostupni korisnički folderi',
    'LBL_EMAIL_ERROR_PREPEND' => 'Greška u obradi el. pošte:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Izabrani server za odlaznu elektronsku poštu za nalog koji koristite je nevažeći. Proverite podešavanja ili izaberite drugi server za elektronsku poštu za nalog koji koristite.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Server za odlaznu elektronsku poštu nije konfigurisan da bi slao email poruke. Molim vas odaberite ili dodajte server za odlaznu elektronsku poštu za nalog koji koristite u Podešavanja >> Mail nalog.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Podrazumevani potpis',
    'LBL_EMAIL_SIGNATURES' => 'Potpisi',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ostalo',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Udaljeni Folderi ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRMFolderi ]',
    'LBL_EMAIL_SUBJECT' => 'Naslov',
    'LBL_EMAIL_SUCCESS' => 'Uspešno',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM direktorijum',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Glavni deo email šablona je prazan',
    'LBL_EMAIL_TEMPLATES' => 'Šabloni',
    'LBL_EMAIL_TO' => 'Za',
    'LBL_EMAIL_VIEW' => 'Pregledaj',
    'LBL_EMAIL_VIEW_HEADERS' => 'Prikaži Zaglavlja',
    'LBL_EMAIL_VIEW_RAW' => 'Prikaži izvorni Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ova funkcija nije podržana kada se koristi POP3 protokol.',
    'LBL_DEFAULT_LINK_TEXT' => 'Podrazumevani link tekst.',
    'LBL_EMAIL_YES' => 'Da',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Pošalji test Email',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test Email je poslat',
    'LBL_EMAIL_MESSAGE_NO' => 'Nema poruka',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Uvoz je prošao',
    'LBL_EMAIL_IMPORT_FAIL' => 'Uvoz nije uspeo zato što je poruka već uvezena ili izbrisana sa servera',

    'LBL_LINK_NONE' => 'Nijedno',
    'LBL_LINK_ALL' => 'Svi',
    'LBL_LINK_RECORDS' => 'Zapisi',
    'LBL_LINK_SELECT' => 'Izaberi',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Potvrdi',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Da li želite da zatvorite ovaj #modul#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Ekstenzija fajla nije validna',

    'ERR_AJAX_LOAD' => 'Došlo je do greške:',
    'ERR_AJAX_LOAD_FAILURE' => 'Došlo je do greške u procesiranju Vašeg zahteva, molimo pokušajte kasnije.',
    'ERR_AJAX_LOAD_FOOTER' => 'Ukoliko se greška ponavlja, zamolite Vašeg administratora da onemogući Ajax za ovaj modul.',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Decimalni separator ne može da koristi isti karakter kao i separator hiljad.\\n\\n  Molim vas promenite vrednosti.',
    'ERR_DELETE_RECORD' => 'Morate navesti odgovarajući broj zapisa da bi obrisali kontakt.',
    'ERR_EXPORT_DISABLED' => 'Izvoz je onemogućen.',
    'ERR_EXPORT_TYPE' => 'Greška pri izvozu',
    'ERR_INVALID_EMAIL_ADDRESS' => 'nije važeća email adresa.',
    'ERR_INVALID_FILE_REFERENCE' => 'Nevažeća referenca fajla.',
    'ERR_NO_HEADER_ID' => 'Ovaj opcija je nedostupna u ovoj temi.',
    'ERR_NOT_ADMIN' => 'Neovlašćen pristup administraciji.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Nedostaje obavezno polje:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Obavezno polje nije validno:',
    'ERR_INVALID_VALUE' => 'Nevažeća vrednost:',
    'ERR_NO_SUCH_FILE' => 'Fajl ne postoji u sistemu',
    'ERR_NO_SINGLE_QUOTE' => 'Ne možete koristiti jedan znak navodnika za označavanje',
    'ERR_NOTHING_SELECTED' => 'Molim, izaberite pre nego što nastavite dalje.',
    'ERR_SELF_REPORTING' => 'Korisnik ne može da podnese izveštaj sam sebi.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nema podudaranja za polje:',
    'ERR_SQS_NO_MATCH' => 'Nema podudaranja',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Molim navedite &#39;key&#39; index u displayParams atributu za definisanje meta-podatka',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Greška: Ime portala je već dodeljeno drugom kontaktu.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Vrednost polja nije kompatibilna sa tačnom vrednošću',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Došlo je do greške pri pokušaju da sačuvate na spoljni nalog.',
    'ERR_NO_DB' => 'Neije moguće povezati se sa bazom podataka. Molimo Vas da pogledate suitecrm.log za detalje.',
    'ERR_DB_FAIL' => 'Greška sa bazom podataka. Molimo Vas da pogledate suitecrm.log za detalje.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} fajlovi mogu biti korišćeni samo sa SuiteCRM {1} bazom podataka.',

    'LBL_ACCOUNT' => 'Kompanija',
    'LBL_ACCOUNTS' => 'Kompanije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Pogledaj sadržaj',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Pogledaj sadržaj',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_DOCUMENT' => 'Dodaj dokument',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Dodaj u listu ciljeva',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Dodaj Kontakt na listu Ciljeva.',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikni da zatvoriš',
    'LBL_ADDITIONAL_DETAILS' => 'Dodatni detalji',
    'LBL_ADMIN' => 'Administracija',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arhiva',
    'LBL_ASSIGNED_TO_USER' => 'Dodeljeno korisniku',
    'LBL_ASSIGNED_TO' => 'Dodeljeno:',
    'LBL_BACK' => 'Nazad',
    'LBL_BILLING_ADDRESS' => 'Adresa naplate',
    'LBL_QUICK_CREATE' => 'Kreiraj ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Komercijalni CRM Otvorenog Koda',
    'LBL_BUGS' => 'Praćenje defekata',
    'LBL_BY' => 'od',
    'LBL_CALLS' => 'Pozivi',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Pošalji Email poruke Kapmanje za slanje',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Prosledi',
    'LBL_CASE' => 'Slučaj',
    'LBL_CASES' => 'Slučajevi',
    'LBL_CHANGE_PASSWORD' => 'Promena lozinke',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Proveri sve',
    'LBL_CITY' => 'Grad',
    'LBL_CLEAR_BUTTON_LABEL' => 'Obriši',
    'LBL_CLEAR_BUTTON_TITLE' => 'Obriši',
    'LBL_CLEARALL' => 'Obriši sve',
    'LBL_CLOSE_BUTTON_TITLE' => 'Zatvori',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zatvori i kreiraj novi',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Zatvori i kreiraj novi',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Sastavi Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Sastavi Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Da',
    'LBL_SEARCH_DROPDOWN_NO' => 'Ne',
    'LBL_CONTACT_LIST' => 'Lista kontakata',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_CONTACTS' => 'Kontakti',
    'LBL_CONTRACT' => 'Ugovor',
    'LBL_CONTRACTS' => 'Ugovori',
    'LBL_COUNTRY' => 'Država:',
    'LBL_CREATE_BUTTON_LABEL' => 'Kreiraj',
    'LBL_CREATED_BY_USER' => 'Autor je korisnik',
    'LBL_CREATED_USER' => 'Autor je korisnik',
    'LBL_CREATED' => 'Autor',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DOCUMENTS' => 'Dokumenti',
    'LBL_DATE_ENTERED' => 'Datum kreiranja:',
    'LBL_DATE_MODIFIED' => 'Datum izmene:',
    'LBL_EDIT_BUTTON' => 'Izmeni',
    'LBL_DUPLICATE_BUTTON' => 'Duplikat',
    'LBL_DELETE_BUTTON' => 'Obriši',
    'LBL_DELETE' => 'Obriši',
    'LBL_DELETED' => 'Obrisan',
    'LBL_DIRECT_REPORTS' => 'Direktni izveštaj',
    'LBL_DONE_BUTTON_LABEL' => 'Obavljeno',
    'LBL_DONE_BUTTON_TITLE' => 'Obavljeno',
    'LBL_FAVORITES' => 'Omiljeni',
    'LBL_VCARD' => 'Digitalna vizitkarta',
    'LBL_EMPTY_VCARD' => 'Molim odaberite fajl digitalne vizitkarte',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ne sadrži sva potrebna polja za ovaj modul. Za više detalja pogledajte suitecrm.log.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Učitana datoteka prelazi 30000 bajtova, koliko je ograničenje određeno u HTML formularu.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Desila se greška pri učitavanju vCard datoteke. Molimo vas da pogledate suitecrm.log za više detalja.',
    'LBL_IMPORT_VCARD' => 'Uvezi digitalnu vizitkartu',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Uvezi digitalnu vizitkartu',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Uvezi digitalnu vizitkartu',
    'LBL_VIEW_BUTTON' => 'Pregledaj',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email kao PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email kao PDF',
    'LBL_EMAILS' => 'Email poruke',
    'LBL_EMPLOYEES' => 'Zaposleni',
    'LBL_ENTER_DATE' => 'Unesi datum',
    'LBL_EXPORT' => 'Izvoz',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Idi',
    'LBL_HIDE' => 'Sakrij',
    'LBL_ID' => 'ID broj',
    'LBL_IMPORT' => 'Uvezi',
    'LBL_IMPORT_STARTED' => 'Uvoz započet:',
    'LBL_LAST_VIEWED' => 'Poslednje pregledano',
    'LBL_LEADS' => 'Potencijalni klijenti',
    'LBL_LESS' => 'manje',
    'LBL_CAMPAIGN' => 'Kampanja:',
    'LBL_CAMPAIGNS' => 'Kampanje',
    'LBL_CAMPAIGNLOG' => 'Log kampanje',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanje',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Nijedno',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Nađen u izdanju',
    'LBL_FIXED_IN_RELEASE' => 'Popravljen u izdanju',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_LIST_ASSIGNED_USER' => 'Korisnik',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_CONTACT_ROLE' => 'Uloga kontakta',
    'LBL_LIST_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_LIST_OF' => 'od',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Povezano sa',
    'LBL_LIST_USER_NAME' => 'Korisničko ime',
    'LBL_LISTVIEW_NO_SELECTED' => 'Molim, izaberite bar jedan zapis da bi nastavili.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Molim, izaberite bar dva zapisa da bi nastavili.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Izabrani zapisi',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Izabrani:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Petar',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Petrović',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'junior programer',
    'LBL_CANCEL' => 'Otkaži',
    'LBL_VERIFY' => 'Verifikuj',
    'LBL_RESEND' => 'Pošalji ponovo',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Spajanje Email-ova',
    'LBL_MASS_UPDATE' => 'Masovno ažuriranje',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nije dostupno ni jedno polje za operaciju masovnog ažuriranja',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Odjavi primarni Email',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Primarni e-mail',
    'LBL_MEETINGS' => 'Sastanci',
    'LBL_MEETING_GO_BACK' => 'Nazad na sastanak',
    'LBL_MEMBERS' => 'Članovi',
    'LBL_MEMBER_OF' => 'Član',
    'LBL_MODIFIED_BY_USER' => 'Promenio korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'LBL_MODIFIED' => 'Promenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_MORE' => 'više',
    'LBL_MY_ACCOUNT' => 'Moja podešavanja',
    'LBL_NAME' => 'Ime',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Kreiraj',
    'LBL_NEW_BUTTON_TITLE' => 'Kreiraj',
    'LBL_NEXT_BUTTON_LABEL' => 'Sledeći',
    'LBL_NONE' => '--Prazno--',
    'LBL_NOTES' => 'Beleške',
    'LBL_OPPORTUNITIES' => 'Prodajne prilike',
    'LBL_OPPORTUNITY_NAME' => 'Ime prodajne prilike:',
    'LBL_OPPORTUNITY' => 'Prodajna prilika',
    'LBL_OR' => 'ILI',
    'LBL_PANEL_OVERVIEW' => 'Pregled kompanije',
    'LBL_PANEL_ASSIGNMENT' => 'Ostalo',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Matični tip',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Poštanski broj:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Grad primarne adrese:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Država primarne adrese:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Poštanski broj primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pokrajina primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Ulica br.2 primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Ulica br.3 primarne adrese:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Ulica primarne adrese:',
    'LBL_PRIMARY_ADDRESS' => 'Primarna adresa:',

    'LBL_PROSPECTS' => 'Prespektive',
    'LBL_PRODUCTS' => 'Proizvodi',
    'LBL_PROJECT_TASKS' => 'Projektni Zadaci',
    'LBL_PROJECTS' => 'Projekti',
    'LBL_QUOTES' => 'Ponude',

    'LBL_RELATED' => 'Povezan',
    'LBL_RELATED_RECORDS' => 'Povezani zapisi',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_REPORTS_TO' => 'Nadređeni',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Označava obavezno polje',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Obavljeno',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Pun formular',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Pun formular',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Sačuvaj i kreiraj novi',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Sačuvaj i kreiraj novi',
    'LBL_SAVE_OBJECT' => 'Sačuvaj {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Pretraga',
    'LBL_SEARCH_BUTTON_TITLE' => 'Pretraga',
    'LBL_FILTER' => 'Filter',
    'LBL_SEARCH' => 'Pretraga',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'više',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Nevažeći format fajla, samo fajl slike se može poslati.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Izaberi',
    'LBL_SELECT_BUTTON_TITLE' => 'Izaberi',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Pregledaj dokumente',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Pregledaj dokumente',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Izaberi kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Izaberi kontakt',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Izaberi iz izveštaja',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Izaberi izveštaje',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Izaberi korisnika',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Izaberi korisnika',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Obriši obeleženo',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Obriši obeleženo',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Obriši obeleženo',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Obriši obeleženo',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Izaberite fajl',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Izaberite fajl',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Obriši fajl',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Obriši fajl',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Izaberi korisnika',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Izaberi korisnika',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Očisti korisnika',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Očisti korisnika',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Izaberi kompaniju',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Izaberi kompaniju',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Obriši nalog',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Obriši nalog',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Odaberi kampanju',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Odaberi kampanju',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Obriši kampanju',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Obriši kampanju',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Izaberi kontakt',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Izaberi kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Obriši kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Obriši kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Izaberi tim',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Izaberi tim',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Obriši tim',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Obriši tim',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resursi korišćeni za izradu ove strane (upiti, fajlovi)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundi.',
    'LBL_SERVER_RESPONSE_TIME' => 'Odziv servera:',
    'LBL_SERVER_MEMORY_BYTES' => 'Bajtova',
    'LBL_SERVER_MEMORY_USAGE' => 'Iskorišćenje memorije servera: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Korišćenje: - modul: {0} - akcija: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Najveće iskorišćenje memorije servera: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresa dostave',
    'LBL_SHOW' => 'Prikaži',
    'LBL_STATE' => 'Država:',
    'LBL_STATUS_UPDATED' => 'Vaš status za ovaj događaj je ažuriran!',
    'LBL_STATUS' => 'Status',
    'LBL_STREET' => 'Ulica',
    'LBL_SUBJECT' => 'Naslov',

    'LBL_INBOUNDEMAIL_ID' => 'ID dolaznog Email-a',

    'LBL_SCENARIO_SALES' => 'Prodaja',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finansije',
    'LBL_SCENARIO_SERVICE' => 'Usluga',
    'LBL_SCENARIO_PROJECT' => 'Mendžment projekta',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje prodajom',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje marketingom',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje finansijama',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje uslugama',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ovaj scenario pomaže upravljanje projektima',

    'LBL_SYNC' => 'Sinhronizacija',
    'LBL_TABGROUP_ALL' => 'Svi',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktivnosti',
    'LBL_TABGROUP_COLLABORATION' => 'Saradnja',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Ostalo',
    'LBL_TABGROUP_SALES' => 'Prodaja',
    'LBL_TABGROUP_SUPPORT' => 'Podrška',
    'LBL_TASKS' => 'Zadaci',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhiviraj Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhiviraj Email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Poništi brisanje',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Poništi brisanje',
    'LBL_UNDELETE_BUTTON' => 'Poništi brisanje',
    'LBL_UNDELETE' => 'Poništi brisanje',
    'LBL_UNSYNC' => 'Poništi sinhronizovanje',
    'LBL_UPDATE' => 'Ažuriraj',
    'LBL_USER_LIST' => 'Lista korisnika',
    'LBL_USERS' => 'Korisnici',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Proveravanje za postojeći Email unos...',
    'LBL_VERIFY_PORTAL_NAME' => 'Proveravanje za postojeći naziv portala...',
    'LBL_VIEW_IMAGE' => 'pregled',

    'LNK_ABOUT' => 'O nama',
    'LNK_ADVANCED_FILTER' => 'Napredni filter',
    'LNK_BASIC_FILTER' => 'Brzi filter',
    'LBL_ADVANCED_SEARCH' => 'Napredni filter',
    'LBL_QUICK_FILTER' => 'Brzi filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Prikaži sve',
    'LNK_CLOSE' => 'Zatvori',
    'LBL_MODIFY_CURRENT_FILTER' => 'Izmeni trenutni filter',
    'LNK_SAVED_VIEWS' => 'Opcije za Izgled',
    'LNK_DELETE' => 'Obriši',
    'LNK_EDIT' => 'Izmeni',
    'LNK_GET_LATEST' => 'Nabavi najnoviji',
    'LNK_GET_LATEST_TOOLTIP' => 'Zameni sa najnovijom verzijom',
    'LNK_HELP' => 'Pomoć',
    'LNK_CREATE' => 'Kreiraj',
    'LNK_LIST_END' => 'Kraj',
    'LNK_LIST_NEXT' => 'Sledeći',
    'LNK_LIST_PREVIOUS' => 'Prethodni',
    'LNK_LIST_RETURN' => 'Povratak na listu',
    'LNK_LIST_START' => 'Početak',
    'LNK_LOAD_SIGNED' => 'Potpis',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Zameni potpisanim dokumentom',
    'LNK_PRINT' => 'Štampa',
    'LNK_BACKTOTOP' => 'Nazad na vrh',
    'LNK_REMOVE' => 'Ukloni',
    'LNK_RESUME' => 'Nastavi',
    'LNK_VIEW_CHANGE_LOG' => 'Pogledaj dnevnik promena',

    'NTC_CLICK_BACK' => 'Molim, kliknite na svom internet pretraživaču dugme za nazad da bi ispravili grešku.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Da li ste sigurni da želite da obrišete izabrane zapise?',
    'NTC_TEMPLATE_IS_USED' => 'Šablon je korišćen u makar jednom email marketing zapisu. Da li ste sigurni da hoćete da ga obrišete?',
    'NTC_TEMPLATES_IS_USED' => 'Prikazani šabloni se koriste za e-mail marketing. Da li ste sigurni da želite da ih obrišete?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da obrišete ovaj zapis?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Da li ste sigurni da želite da obrišete',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Da li ste sigurni da želite da ažurirate',
    'NTC_DELETE_SELECTED_RECORDS' => 'izabrani zapis(i)?',
    'NTC_LOGIN_MESSAGE' => 'Molim, unesite svoje korisničko ime i lozinku.',
    'NTC_NO_ITEMS_DISPLAY' => 'nijedan',
    'NTC_REMOVE_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovu vezu? Samo veza će biti uklonjena. Zapis neće biti obrisan.',
    'NTC_REQUIRED' => 'Označava obavezno polje',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Dobrodošli',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Napuštate ovaj zapis bez da ste sačuvali izvršene izmene koje ste napravili. Da li ste sigurni da želite da napustite ovaj zapis?',
    'ERROR_NO_RECORD' => 'Greška pri preuzimanju zapisa. Ovaj zapis je obrisan ili Vi nemate dozvolu da ga pogledate.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Upozorenje</b>: Verzija Vašeg web pregledača više nije podržana ili koristite pregledač koji nije podržan.',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Upozorenje:</b> Vaš pregledač je u IE modu kompatibilnosti što nije podržano.',
    'ERROR_TYPE_NOT_VALID' => 'Greška. Ovaj tip nije validan.',
    'ERROR_NO_BEAN' => 'Neuspelo dohvatanje zrna.',
    'LBL_DUP_MERGE' => 'Nađi duplikate',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Upravljanje pretplatama',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Upravljanje pretplatama za',
    // Ajax status strings
    'LBL_LOADING' => 'Učitava se...',
    'LBL_SEARCHING' => 'Pretraga u toku...',
    'LBL_SAVING_LAYOUT' => 'Čuvanje izgleda ...',
    'LBL_SAVED_LAYOUT' => 'Izgled je sačuvan.',
    'LBL_SAVED' => 'Sačuvano',
    'LBL_SAVING' => 'Čuvanje',
    'LBL_DISPLAY_COLUMNS' => 'Prikaži kolone',
    'LBL_HIDE_COLUMNS' => 'Sakrij kolone',
    'LBL_SEARCH_CRITERIA' => 'Kriterijum pretrage',
    'LBL_SAVED_VIEWS' => 'Sačuvani pregledi',
    'LBL_PROCESSING_REQUEST' => 'Obrada..',
    'LBL_REQUEST_PROCESSED' => 'Obavljeno',
    'LBL_AJAX_FAILURE' => 'Ajax greška',
    'LBL_MERGE_DUPLICATES' => 'Spoji',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Moji filteri',
    'LBL_SEARCH_POPULATE_ONLY' => 'Obavite pretragu koristeći formu pretraživanja iznad',
    'LBL_DETAILVIEW' => 'Detaljni pregled',
    'LBL_LISTVIEW' => 'Pregled u vidu liste',
    'LBL_EDITVIEW' => 'Pregled za izmenu',
    'LBL_BILLING_STREET' => 'Ulica:',
    'LBL_SHIPPING_STREET' => 'Ulica:',
    'LBL_SEARCHFORM' => 'Forma pretrage',
    'LBL_SAVED_SEARCH_ERROR' => 'Molim, unesite naziv za ovaj prikaz.',
    'LBL_DISPLAY_LOG' => 'Dnevnik pregleda',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistem',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sesija je istekla',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Vaša sesija će isteći za 2 minuta. Molim, sačuvajte svoj rad.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Vaša sesija je istekla.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Sastanak',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Poziv',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Vreme:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Lokacija:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Opis: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Povezano sa:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Događaj',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Događaj nije određen.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Lokacija nije određena.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Datum početka nije određen.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nije pronađen ni jedan rezultat.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Nema rezultata... Možda je pšotrebno da promenite kriterijume i pokušate ponovo?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Nije pronađen rezultat za <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Kreiraj <item1> kao novi <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'ili promenite vaš kriterijum pretraživanja',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Trenutno nemate ni jedan sačuvan zapis. <item2> ili <item3> sada.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Dodaj u Moje omiljene',
    'LBL_CREATE_CONTACT' => 'Kreiraj kontakt',
    'LBL_CREATE_CASE' => 'Kreiraj slučaj',
    'LBL_CREATE_NOTE' => 'Kreiraj belešku',
    'LBL_CREATE_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
    'LBL_SCHEDULE_CALL' => 'Evidentiraj poziv',
    'LBL_SCHEDULE_MEETING' => 'Zakaži sastanak',
    'LBL_CREATE_TASK' => 'Kreiraj zadatak',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generiši Formular',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Sačuvaj Formular za dodavanje potencijalnih klijenata preko web-a',
    'LBL_AVAILABLE_FIELDS' => 'Polja koja su na raspolaganju',
    'LBL_FIRST_FORM_COLUMN' => 'Prva kolona formulara',
    'LBL_SECOND_FORM_COLUMN' => 'Druga kolona formulara',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Nedostaje obavezno polje: Dodeljeno',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Nedostaje obavezno polje: Povezana kampanja',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web formular za kreiranje ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Slanje ovog formulara će napraviti ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Dodaj sva polja',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Ukloni sva polja',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Ukloni sva polja',
    'LBL_NEXT_BTN' => 'Sledeći',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Moguće je dodavanje isključivo slika',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Sadržaj baze je promenjen u',
    'ERR_MSSQL_WARNING' => 'Upozorenje:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Greška: Fajl [[file]] nedostaje. Kreiranje je nemoguće jer odgovarajući HTML fajl nedostaje.',
    'ERR_CANNOT_FIND_MODULE' => 'Greška: Modul [module] na postoji.',
    'LBL_ALT_ADDRESS' => 'Druga adresa:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Greška: Postoji nejednak broj argumenta za  &#39;key&#39; i &#39;copy&#39; elemente u displayParams nizu.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Opšte',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filteri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Samo moje stavke',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Naslov',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Prikaži redove',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Broj Vaših SuiteCRMdašleta dostigao je maksimum koji je podesio administrator. Molim, uklonite SuiteCRMdašlet kako bi dodali novi.',
    'LBL_ADDING_DASHLET' => 'Dodajem SuiteCRMdašlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRMdašlet je dodat',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Da li ste sigurni da želite da uklonite SuiteCRMdašlet?',
    'LBL_REMOVING_DASHLET' => 'Uklanjam SuiteCRMdašlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRMdašlet je uklonjen',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Stranica se učitava, molim sačekajte...',

    'LBL_RELOAD_PAGE' => 'Molim <a href=\"javascript: window.location.reload()\">otvorite ponovo prozor</a> da bi koristili ovaj SuiteCRMdašlet.',
    'LBL_ADD_DASHLETS' => 'Dodaj SuiteCRMdašlete',
    'LBL_CLOSE_DASHLETS' => 'Zatvori',
    'LBL_OPTIONS' => 'Opcije',
    'LBL_1_COLUMN' => '1 Kolona',
    'LBL_2_COLUMN' => '2 Kolone',
    'LBL_3_COLUMN' => '3 Kolone',
    'LBL_PAGE_NAME' => 'Naziv stranice',

    'LBL_SEARCH_RESULTS' => 'Rezultati pretrage',
    'LBL_SEARCH_MODULES' => 'Moduli',
    'LBL_SEARCH_TOOLS' => 'Alati',
    'LBL_SEARCH_HELP_TITLE' => 'Saveti za pretragu',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Nema slike',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopiraj adresu s leva:',
    'LBL_SAVE_AND_CONTINUE' => 'Sačuvaj i nastavi',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Kontrole višestrukog odabira</strong></p><ul><li>Kliknite na vrednosti da označite atribut.</li><li>Ctrl-Klik&nbsp;da&nbsp;označite više atributa. Mac korisnici koriste CMD-klik.</li><li>Da označite sve vrednosti između 2 atributa,&nbsp;kliknite prvu vrednost&nbsp;a zatim shift-kliknite poslednju vrednost.</li></ul><p><strong>Opcije naprednog pretraživanja & prikaza</strong><br><br>Korišćenjem opcije <b>Sačuvana pretraga & prikaz</b>, možete sačuvati skup parametara pretrage i/ili prilagođenog prikaza liste rezultata kako biste ubuduće mogli brzo dobiti tražene rezultate pretrage. Broj različitih parametara pretrage i prikaza koje možete snimiti nije ograničen. Sve sačuvane pretrage prikazane su svojim nazivom u listi "Sačuvane pretrage", pri čemu se na vrhu nalazi poslednja učitana sačuvana pretraga.<br><br>Za prilagođavanje prikaza liste rezultata možete koristiti opcije "Sakrij kolone" i "Prikaži kolone" da označite koje polje će biti prikazano u rezultatima pretrage. Na primer, možete sakriti ili prikazati podatke kao što su naziv zapisa, dodeljeni korisnik ili dodeljeni tim. Da dodate kolonu u listu, označite polje iz liste "Sakrij kolone" i koristeći strelicu levo prebacite ga u listu "Prikaži kolone". Da izbacite kolonu iz liste, označite polje iz liste "Prikaži kolone" i koristeći strelicu desno prebacite ga u listu "Sakrij kolone".<br><br>Ukoliko sačuvate parametre prikaza, moći ćete da ih kasnije u bilo kom trenutku učitate da biste prikazali rezultate pretrage u željenom obliku.<br><br>Da sačuvate ili promenite parametre pretrage i/ili prikaza:<ol><li>Unesite naziv za trenutnu postavku parametara pretgrage i/ili prikaza u polje <b>Sačuvajte ovu pretragu kao</b> i kliknite <b>Sačuvaj</b>. Naziv će biti dodat u listu "Sačuvane pretrage" odmah do dugmeta <b>Izbriši</b>.</li><li>Da pokrenete sačuvanu pretragu, izaberite je iz liste "Sačuvane pretrage". Rezultati pretrage biće prikazani u formi liste.</li><li>Da izmenite parametre sačuvane pretrage, označite je u listi, izmenite parametre pretrage ili prikaza u sekciji "Napredna pretraga", i kliknite <b>Sačuvaj izmene</b> pored <b>Izmeni parametre trenutne pretrage</b>.</li><li>Da obrišete sačuvanu pretragu, označite je u listi, kliknite <b>Obriši</b> pored <b>Izmeni parametre trenutne pretrage</b>, a zatim klikinte <b>OK</b> da potvrdite brisanje.</li></ol><p><strong>Saveti</strong><br><br>Koristeći % kao džoker operator imate mogućnost da učinite širu pretragu. Na primer, umesto da samo traže rezultate koji jednake "jabuke" možete promeniti pretragu u "jabuke%" koja će prikazati sve rezultate koji počinju sa reči jabuke ali isto tako mogu da sadrže i druge karaktere.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Greška: Granica upita $limit je dostignuta za $module modul.',
    'ERROR_NOTIFY_OVERRIDE' => 'Greška: ResourceObserver->notify() treba da bude zamenjena.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Greška: Kreiranje monitora nije moguće jer je metadata fajl prazan ili ne postoji.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Greška: Na postoji monitor koji je konfigurisan za traženi naziv',
    'ERR_UNDEFINED_METRIC' => 'Greška: Nije moguće postaviti vrednost za nedefinisanu meru',
    'ERR_STORE_FILE_MISSING' => 'Greška: Nije moguće pronaći Store implementacioni fajl',

    'LBL_MONITOR_ID' => 'ID broj monitora',
    'LBL_USER_ID' => 'ID broj korisnika',
    'LBL_MODULE_NAME' => 'Naziv modula',
    'LBL_ITEM_ID' => 'ID broj stavke',
    'LBL_ITEM_SUMMARY' => 'Sadržaj stavke',
    'LBL_ACTION' => 'Akcija',
    'LBL_SESSION_ID' => 'ID broj sesije',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack kreiran za ID korisnika {0}',
    'LBL_VISIBLE' => 'Vidljiv zapis',
    'LBL_DATE_LAST_ACTION' => 'Datum poslednje akcije',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nije pre',
    'MSG_IS_MORE_THAN' => 'je više od',
    'MSG_SHOULD_BE' => 'treba da bude',
    'MSG_OR_GREATER' => 'ili veće',

    'LBL_LIST' => 'Lista',
    'LBL_CREATE_BUG' => 'Kreiraj defekt',

    'LBL_OBJECT_IMAGE' => 'slika objekta',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Izaberite datum',

    'LBL_VALIDATE_RANGE' => 'nije u važećem dometu',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Molimo vas da odabrete datum početka i kraja',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Molimo vas da odabrete datume početka i kraja',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Svi',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Greška: Broj niza bean parametra se ne podudara sa brojem niza rezultata.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Greška: Nedostaje unos mapirnja unos za module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Greška: Ne mogu da se preuzmu podaci za {0} Konektor. Postoji mogućnost da je servis trenutno nedostupan ili su konfiguraciona podešavanja možda nevažeća. Poruke greške konektora: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Za optimalno iskustvo korišćenja IIS/FastCGI sapi, podesite fastcgi.logging na 0 u php.ini fajlu.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Ime',
    'LBL_COLLECTION_PRIMARY' => 'Primarno',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Obavezno polje je prazno',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_DESCRIPTION' => 'Opis',

    'LBL_YESTERDAY' => 'juče',
    'LBL_TODAY' => 'danas',
    'LBL_TOMORROW' => 'sutra',
    'LBL_NEXT_WEEK' => 'sledeće nedelje',
    'LBL_NEXT_MONDAY' => 'sledeći ponedeljak',
    'LBL_NEXT_FRIDAY' => 'sledeći petak',
    'LBL_TWO_WEEKS' => 'dve nedelje',
    'LBL_NEXT_MONTH' => 'sledećeg meseca',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'prvi dan meseca',
    'LBL_THREE_MONTHS' => 'tri meseca',
    'LBL_SIXMONTHS' => 'šest meseci',
    'LBL_NEXT_YEAR' => 'sledeća godina',

    //Datetimecombo fields
    'LBL_HOURS' => 'Sati',
    'LBL_MINUTES' => 'Minuta',
    'LBL_MERIDIEM' => 'Podne',
    'LBL_DATE' => 'Datum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatski osveži',

    'LBL_DURATION_DAY' => 'dan',
    'LBL_DURATION_HOUR' => 'sat',
    'LBL_DURATION_MINUTE' => 'minut',
    'LBL_DURATION_DAYS' => 'dana',
    'LBL_DURATION_HOURS' => 'Trajanje sati',
    'LBL_DURATION_MINUTES' => 'Trajanje minuta',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Odaberite mesec',
    'LBL_ENTER_YEAR' => 'Unesite godinu',
    'LBL_ENTER_VALID_YEAR' => 'Molim, unesite validnu godinu',

    //File write error label
    'ERR_FILE_WRITE' => 'Greška: Nije moguće upisati u fajl {0}. Molimo proverite dozvole sistema i web servera.',
    'ERR_FILE_NOT_FOUND' => 'Greška: Nije moguće učitati fajl {0}. Molimo proverite dozvole sistema i web servera.',

    'LBL_AND' => 'i',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fajl iz eksternog izvora',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Bezbednost',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ovo je primer datoteke za uvoz koji predstavlja sadržaj datoteke spremne za uvoz." "Datoteka je .csv (vrednosti odvojene zarezom), koja koristi duple znake navoda kao kvalifikator polja." "Red sa zaglavljem je prvi red u datoteci i sadrži labele polja onakve kakve ih vidite u Vašoj aplikaciji." "Ove labele koriste se za mapiranje podataka u datoteci na polja u aplikaciji." "Napomene: Imena baza podataka mogu biti korišćena u redu sa zaglavljem. Ovo je korisno kad koristite phpMyAdmin ili neki drugi alat za rad sa bazama podataka da izvezete listu podataka za uvoz." "Redosled kolona nije bitan dok god proces uvoza može da mapira podatke na odgovarajuće redove na osnovu reda sa zaglavljem." "Da biste koristili ovu datoteku kao šablon, uradite sledeće:" "1. Uklonite primere podataka" "2. Uklonite pomoćni tekst koji upravo čitate" "3. Unesite sopstvene podatke u odgovarajuće redove i kolone" "4. Sačuvajte datoteku na poznatu lokaciju na Vašem sistemu" "5. Kliknite na opciju uvoza iz menija sa akcijama i odaberite datoteku za postavljanje"',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Nema obaveštenja',
    'LBL_ALT_SORT_DESC' => 'Sortiraj opadajuće',
    'LBL_ALT_SORT_ASC' => 'Sortiraj rastuće',
    'LBL_ALT_SORT' => 'Sortiraj',
    'LBL_ALT_SHOW_OPTIONS' => 'Pokaži opcije',
    'LBL_ALT_HIDE_OPTIONS' => 'Sakrij Opcije',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Pomeri odabrani unos u listsu sa leve strane',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Pomeri odabrani unos u listsu sa desne strane',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Pomeri odabrani unos gore u redosledu prikazane liste',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Pomeri odabrani unos dole u redosledu prikazane liste',
    'LBL_ALT_INFO' => 'Informacija',
    'MSG_DUPLICATE' => 'Zapis {0} koji pokušavate da kreirate može biti duplikat {0} zapisa koji već postoji. {1} zapisi koji imaju slična imena izlistani su ispod.<br /><br><br />Kliknite na "Napravi {1}" da biste nastavili kreiranje ovog novog {0}, ili odaberite postojeći {0} iz liste ispod.',
    'MSG_SHOW_DUPLICATES' => 'Zapis {0} koji pokušavate da kreirate može biti duplikat {0} zapisa koji već postoji. {1} zapisi koji imaju slična imena izlistani su ispod.<br /><br><br />Kliknite na "Sačuvaj {1}" da biste nastavili kreiranje ovog novog {0}, ili kliknite na "Poništi" da biste se vratili na modul bez kreiranja {0}',
    'LBL_EMAIL_TITLE' => 'Email',
    'LBL_EMAIL_OPT_TITLE' => 'isključena email adresa',
    'LBL_EMAIL_INV_TITLE' => 'nevalidna email adresa',
    'LBL_EMAIL_PRIM_TITLE' => 'Napravite primarnu e-adresu',
    'LBL_SELECT_ALL_TITLE' => 'Odaberi sve',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Odaberi ovaj red',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'Greška: Došlo je do greške za vreme postavljanja datoteke. Šifra greške: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Greška: Došlo je do greške za vreme postavljanja datoteke. Šifra greške: {0} - {1}. Maksimalna veličina datoteke za postavljanje je {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'Greška: Došlo je do greške za vreme postavljanja, molimo kontaktirajte administratora za pomoć.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Veličina datoteke za postavljanje ({0} bytes) prekoračila je dozvoljeni maksimum od {1} bajtova',
    'UPLOAD_REQUEST_ERROR' => 'Desila se greška. Molim osvežite vašu stranicu i probajte ponovo.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Izmeni',
    'LBL_EDIT_BUTTON_TITLE' => 'Izmeni',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikat',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Obriši',
    'LBL_DELETE_BUTTON_TITLE' => 'Obriši',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Akcija',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Sačuvaj',
    'LBL_SAVE_BUTTON_TITLE' => 'Sačuvaj',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Otkaži',
    'LBL_CANCEL_BUTTON_TITLE' => 'Otkaži',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'Niz konektora u {0} je loše definisan ili je prazan i nemoguće je koristiti ga.',
    'ERR_SUHOSIN' => 'Tok za postavljanje datoteka je blokirao Suhosin, molimo dodajte "upload" u suhosin.executor.include.whitelist (pogledajte suitecrm.log za više informacija)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Pogrešan odgovor od servera',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Ponuda',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prodajna cena',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Ručno',
        '5' => 'Svakih 5 minuta',
        '15' => 'Svakih 15 minuta',
        '30' => 'Svakih 30 minuta',
        '60' => 'Svaki sat',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Podsetnik je prazan ili netačan.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Podsetnik nije određen ni kao popup prozor ni kao email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Nema pozvanih za podsetnik.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Podsetnik ne uključuje ni jedno pozvano lice, da li želite da uklonite podsetnik?',
    'LBL_DELETE_REMINDER' => 'Izbriši podsetnik',
    'LBL_OK' => 'U redu',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Izaberite kolone',
    'LBL_COLUMN_CHOOSER' => 'Izbor kolone',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Sačuvaj izmene',
    'LBL_DISPLAYED' => 'Prikazano',
    'LBL_HIDDEN' => 'Sakriven',
    'ERR_EMPTY_COLUMNS_LIST' => 'Najmanje jedan element je zahtevan',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Kategorija',
    'LBL_LIST_CATEGORY' => 'Kategorija',
    'ERR_FACTOR_TPL_INVALID' => 'Autentikaciona poruka nije validna, kontaktirajte vašeg administratora.',
    'LBL_SUBTHEMES' => 'Stil',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Sumrak',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Dan',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Svitanje',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Noć',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Podne',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Zanemari draft',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Ova operacija će obrisati ovaj e-mail, da li želite da nastavite?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Zatvori dijalog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Napuštanjem dijaloga za sastavljanje sve unete informacije biće izgubljene, da li želite da nastavite?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Primeni e-mail šablon',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Ova operacija će pregaziti telo i naslov e-maila, da li želite da nastavite?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Potvrđena saglasnost',
    'LBL_OPT_IN_TITLE' => 'Saglasan/a',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Datum potvrđene saglasnosti',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Datum slanja potvrde saglasnosti',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Datum neizvršene potvrde saglasnosti',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Token potvrđene saglasnosti',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Šablon poruke za potvrdu saglasnosti nije konfigurisan. Molim podesite u e-mail podešavanjima.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Primarna grupa",

    // footer
    'LBL_SUITE_TOP' => 'Nazad na vrh',
    'LBL_SUITE_SUPERCHARGED' => 'Unapredio SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Zasnovano na SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ovaj program je besplatan softver; možete ga redistributirati i/ili modifikovati po pravilima GNU Affero Opšte javne licence verzije 3 koju je objavila Fondacija za besplatan softver (GNU Affero General Public License 3, Free Software Foundation), uključujući dodatna ovlaštenja data u zaglavlju otvorenog osnovnog koda.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Resetovanje Lozinke',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Opcija za potvrdu saglasnosti nije dostupna jer kontakt nema primarnu e-mail adresu',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Slanje zahteva za potvrdu saglasnosti neuspešno',
    'LBL_CONFIRM_EMAIL_SENT' => 'Slanje zahteva za potvrdu saglasnosti uspešno',
);

$app_list_strings['moduleList']['Library'] = 'Biblioteka';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-adresa';
$app_list_strings['project_priority_default'] = 'Srednji';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Visok',
    'Medium' => 'Srednji',
    'Low' => 'Nizak',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Saglasnost',
    'contract' => 'Ugovor',
    'legal_obligation' => 'Zakonska obaveza',
    'protection_of_interest' => 'Zaštita interesa',
    'public_interest' => 'Javni interes',
    'legitimate_interest' => 'Legitimate interest',
    'withdrawn' => 'Povučen',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Web stranica',
    'phone' => 'Telefon',
    'given_to_user' => 'Dodeljen korisniku',
    'email' => 'Email',
    'third_party' => 'Treća strana',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Baza Znanja';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'Abu Dabi',
    'ADEN' => 'Aden',
    'AFGHANISTAN' => 'Avganistan',
    'ALBANIA' => 'Albanija',
    'ALGERIA' => 'Alžir',
    'AMERICAN SAMOA' => 'Američka Samoa',
    'ANDORRA' => 'Andora',
    'ANGOLA' => 'Angola',
    'ANTARCTICA' => 'Antartik',
    'ANTIGUA' => 'Antigva',
    'ARGENTINA' => 'Argentina',
    'ARMENIA' => 'Jermenija',
    'ARUBA' => 'Aruba',
    'AUSTRALIA' => 'Australija',
    'AUSTRIA' => 'Austrija',
    'AZERBAIJAN' => 'Azerbejdžan',
    'BAHAMAS' => 'Bahami',
    'BAHRAIN' => 'Bahrein',
    'BANGLADESH' => 'Bangladeš',
    'BARBADOS' => 'Barbados',
    'BELARUS' => 'Belorusija',
    'BELGIUM' => 'Belgija',
    'BELIZE' => 'Belize',
    'BENIN' => 'Benin',
    'BERMUDA' => 'Bermudi',
    'BHUTAN' => 'Butan',
    'BOLIVIA' => 'Bolivija',
    'BOSNIA' => 'Bosna',
    'BOTSWANA' => 'Bocvana',
    'BOUVET ISLAND' => 'Ostrvo Buvet',
    'BRAZIL' => 'Brazil',
    'BRITISH ANTARCTICA TERRITORY' => 'Britanska teritorija na Antarktiku',
    'BRITISH INDIAN OCEAN TERRITORY' => 'Britanska teritorija na Indijskom okeanu',
    'BRITISH VIRGIN ISLANDS' => 'Britanska Devičanska ostrva',
    'BRITISH WEST INDIES' => 'Britanska teritorija zapadnog Indijskog okeana',
    'BRUNEI' => 'Brunej',
    'BULGARIA' => 'Bugarska',
    'BURKINA FASO' => 'Burkina Faso',
    'BURUNDI' => 'Burundi',
    'CAMBODIA' => 'Kambodža',
    'CAMEROON' => 'Kamerun',
    'CANADA' => 'Kanada',
    'CANAL ZONE' => 'Kanalska zona',
    'CANARY ISLAND' => 'Kanarska ostrva',
    'CAPE VERDI ISLANDS' => 'Ostrva Rt Verdi',
    'CAYMAN ISLANDS' => 'Kajmanska ostrva',
    'CHAD' => 'Čad',
    'CHANNEL ISLAND UK' => 'Britansko kanal ostrvo',
    'CHILE' => 'Čile',
    'CHINA' => 'Kina',
    'CHRISTMAS ISLAND' => 'Božićno ostrvo',
    'COCOS (KEELING) ISLAND' => 'Kokosova ostrva',
    'COLOMBIA' => 'Kolumbija',
    'COMORO ISLANDS' => 'Komorska ostrva',
    'CONGO' => 'Kongo',
    'CONGO KINSHASA' => 'Kongo Kinšasa',
    'COOK ISLANDS' => 'Kukovo ostrvo',
    'COSTA RICA' => 'Kostarika',
    'CROATIA' => 'Hrvatska',
    'CUBA' => 'Kuba',
    'CURACAO' => 'Kurakao',
    'CYPRUS' => 'Kipar',
    'CZECH REPUBLIC' => 'Češka Republika',
    'DAHOMEY' => 'Dahomeji',
    'DENMARK' => 'Danska',
    'DJIBOUTI' => 'Džibuti',
    'DOMINICA' => 'Dominika',
    'DOMINICAN REPUBLIC' => 'Dominikanska Republika',
    'DUBAI' => 'Dubai',
    'ECUADOR' => 'Ekvador',
    'EGYPT' => 'Egipat',
    'EL SALVADOR' => 'El Salvador',
    'EQUATORIAL GUINEA' => 'Ekvatorijalna Gvineja',
    'ESTONIA' => 'Estonija',
    'ETHIOPIA' => 'Etiopija',
    'FAEROE ISLANDS' => 'Farska ostrva',
    'FALKLAND ISLANDS' => 'Foklandska ostrva',
    'FIJI' => 'Fidži',
    'FINLAND' => 'Finska',
    'FRANCE' => 'Francuska',
    'FRENCH GUIANA' => 'Francuska Gvajana',
    'FRENCH POLYNESIA' => 'Francuska Polinezija',
    'GABON' => 'Gabon',
    'GAMBIA' => 'Gambija',
    'GEORGIA' => 'Džordžija',
    'GERMANY' => 'Nemačka',
    'GHANA' => 'Gana',
    'GIBRALTAR' => 'Gibraltar',
    'GREECE' => 'Grčka',
    'GREENLAND' => 'Grinland',
    'GUADELOUPE' => 'Gvadalupe',
    'GUAM' => 'Guam',
    'GUATEMALA' => 'Gvatemala',
    'GUINEA' => 'Gvineja',
    'GUYANA' => 'Gvajana',
    'HAITI' => 'Haiti',
    'HONDURAS' => 'Honduras',
    'HONG KONG' => 'Hong Kong',
    'HUNGARY' => 'Mađarska',
    'ICELAND' => 'Island',
    'IFNI' => 'Ifni',
    'INDIA' => 'Indija',
    'INDONESIA' => 'Indonezija',
    'IRAN' => 'Iran',
    'IRAQ' => 'Irak',
    'IRELAND' => 'Irska',
    'ISRAEL' => 'Izrael',
    'ITALY' => 'Italija',
    'IVORY COAST' => 'Obala Slonovače',
    'JAMAICA' => 'Jamajka',
    'JAPAN' => 'Japan',
    'JORDAN' => 'Jordan',
    'KAZAKHSTAN' => 'Kazahstan',
    'KENYA' => 'Kenija',
    'KOREA' => 'Koreja',
    'KOREA, SOUTH' => 'Južna Koreja',
    'KUWAIT' => 'Kuvajt',
    'KYRGYZSTAN' => 'Kirgistan',
    'LAOS' => 'Laos',
    'LATVIA' => 'Letonija',
    'LEBANON' => 'Liban',
    'LEEWARD ISLANDS' => 'Livardska ostrva',
    'LESOTHO' => 'Lesoto',
    'LIBYA' => 'Libija',
    'LIECHTENSTEIN' => 'Lihtenštajn',
    'LITHUANIA' => 'Litvanija',
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
    'MOLDOVIA' => 'Moldavija',
    'MONACO' => 'Monako',
    'MONGOLIA' => 'Mongolija',
    'MOROCCO' => 'Maroko',
    'MOZAMBIQUE' => 'Mozambik',
    'MYANAMAR' => 'Mijanamar',
    'NAMIBIA' => 'Nambija',
    'NEPAL' => 'Nepal',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'Holandski Antili',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'Holandski Antili - Neutralna zona',
    'NEW CALADONIA' => 'Nova Kaladonija',
    'NEW HEBRIDES' => 'Novi Hebridi',
    'NEW ZEALAND' => 'Novi Zeland',
    'NICARAGUA' => 'Nikaragva',
    'NIGER' => 'Niger',
    'NIGERIA' => 'Nigerija',
    'NORFOLK ISLAND' => 'Ostrvo Norfolk',
    'NORWAY' => 'Norveška',
    'OMAN' => 'Oman',
    'OTHER' => 'Ostalo',
    'PACIFIC ISLAND' => 'Pacifičko ostrvo',
    'PAKISTAN' => 'Pakistan',
    'PANAMA' => 'Panama',
    'PAPUA NEW GUINEA' => 'Papua Nova Gvineja',
    'PARAGUAY' => 'Paragvaj',
    'PERU' => 'Peru',
    'PHILIPPINES' => 'Filipini',
    'POLAND' => 'Poljska',
    'PORTUGAL' => 'Portugalija',
    'PORTUGUESE TIMOR' => 'Portugalski Timor',
    'PUERTO RICO' => 'Porto Riko',
    'QATAR' => 'Katar',
    'REPUBLIC OF BELARUS' => 'Beloruska Republika',
    'REPUBLIC OF SOUTH AFRICA' => 'Južnoafrička Republika',
    'REUNION' => 'Reunion',
    'ROMANIA' => 'Rumunija',
    'RUSSIA' => 'Rusija',
    'RWANDA' => 'Ruanda',
    'RYUKYU ISLANDS' => 'Ostrva Riukiu',
    'SABAH' => 'Sabah',
    'SAN MARINO' => 'San Marino',
    'SAUDI ARABIA' => 'Saudijska Arabija',
    'SENEGAL' => 'Senegal',
    'SERBIA' => 'Srbija',
    'SEYCHELLES' => 'Sejšeli',
    'SIERRA LEONE' => 'Siera Leone',
    'SINGAPORE' => 'Singapur',
    'SLOVAKIA' => 'Slovačka',
    'SLOVENIA' => 'Slovenija',
    'SOMALILIAND' => 'Somalilend',
    'SOUTH AFRICA' => 'Južna Afrika',
    'SOUTH YEMEN' => 'Južni Jemen',
    'SPAIN' => 'Španija',
    'SPANISH SAHARA' => 'Španska Sahara',
    'SRI LANKA' => 'Šri Lanka',
    'ST. KITTS AND NEVIS' => 'Sveti Kits i Nevis',
    'ST. LUCIA' => 'Sveta Lucija',
    'SUDAN' => 'Sudan',
    'SURINAM' => 'Surinam',
    'SW AFRICA' => 'Južnozapadna Afrika',
    'SWAZILAND' => 'Svazilend',
    'SWEDEN' => 'Švedska',
    'SWITZERLAND' => 'Švajcarska',
    'SYRIA' => 'Sirija',
    'TAIWAN' => 'Tajvan',
    'TAJIKISTAN' => 'Tadžikistan',
    'TANZANIA' => 'Tanzania',
    'THAILAND' => 'Tajland',
    'TONGA' => 'Tonga',
    'TRINIDAD' => 'Trinidad',
    'TUNISIA' => 'Tunis',
    'TURKEY' => 'Turska',
    'UGANDA' => 'Uganda',
    'UKRAINE' => 'Ukraina',
    'UNITED ARAB EMIRATES' => 'Ujedinjeni Arapski Emirati',
    'UNITED KINGDOM' => 'Velika Britanija',
    'URUGUAY' => 'Urugvaj',
    'US PACIFIC ISLAND' => 'Američko Pacifičko ostrvo',
    'US VIRGIN ISLANDS' => 'Američka Devičanska ostrva',
    'USA' => 'Sjedinjene Američke Države',
    'UZBEKISTAN' => 'Uzbekistan',
    'VANUATU' => 'Vanuatu',
    'VATICAN CITY' => 'Vatikan',
    'VENEZUELA' => 'Venecuela',
    'VIETNAM' => 'Vijetnam',
    'WAKE ISLAND' => 'Ostrvo Vejk',
    'WEST INDIES' => 'Zapadni Indijski okean',
    'WESTERN SAHARA' => 'Zapadna Sahara',
    'YEMEN' => 'Jemen',
    'ZAIRE' => 'Zair',
    'ZAMBIA' => 'Zambija',
    'ZIMBABWE' => 'Zimbabve',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Tajvan i Hongkong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS ćirilica)',
    'CP1252' => 'CP1252 (MS Zapadna Evropa & US)',
    'EUC-CN' => 'EUC-CN (Pojednostavljen kineski GB2312)',
    'EUC-JP' => 'EUC-JP (Unix japanski)',
    'EUC-KR' => 'EUC-KR (Koreanski)',
    'EUC-TW' => 'EUC-TW (Tajvanski)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreanski)',
    'ISO-8859-1' => 'ISO-8859-1 (Zapadna Evropa i US)',
    'ISO-8859-2' => 'ISO-8859-2 (Centralna i istočna Evropa)',
    'ISO-8859-3' => 'ISO-8859-3 (Latinica 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latinica 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Ćirilica)',
    'ISO-8859-6' => 'ISO-8859-6 (Arapski)',
    'ISO-8859-7' => 'ISO-8859-7 (Grčki)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrejski)',
    'ISO-8859-9' => 'ISO-8859-9 (Latinica 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latinica 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latinica 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latinica 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latinica 9)',
    'KOI8-R' => 'KOI8-R (Ruska ćirilica)',
    'KOI8-U' => 'KOI8-U (Ukrajinska ćirilica)',
    'SJIS' => '&#39;SJIS (MS Japanski)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Alžir',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Afrika/Gaborone',
    'Africa/Ouagadougou' => 'Afrika/Uagadugu',
    'Africa/Bujumbura' => 'Afrika/Budžumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlantik/Kejp_Verde',
    'Africa/Bangui' => 'Afrika/Banguj',
    'Africa/Ndjamena' => 'Afrika/Ndžamena',
    'Indian/Comoro' => 'Indijski_okean/Komori',
    'Africa/Kinshasa' => 'Afrika/Kinšasa',
    'Africa/Lubumbashi' => 'Afrika/Lubumbaši',
    'Africa/Brazzaville' => 'Afrika/Brazavil',
    'Africa/Abidjan' => 'Afrika/Abidžan',
    'Africa/Djibouti' => 'Afrika/Džibuti',
    'Africa/Cairo' => 'Afrika/Kairo',
    'Africa/Malabo' => 'Afrika/Malabo',
    'Africa/Asmera' => 'Afrika/Asmara',
    'Africa/Addis_Ababa' => 'Afrika/Adis_Abeba',
    'Africa/Libreville' => 'Afrika/Librevil',
    'Africa/Banjul' => 'Afrika/Bandžul',
    'Africa/Accra' => 'Afrika/Akra',
    'Africa/Conakry' => 'Afrika/Konarki',
    'Africa/Bissau' => 'Afrika/Bisao',
    'Africa/Nairobi' => 'Afrika/Najrobi',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monrovija',
    'Africa/Tripoli' => 'Afrika/Tripoli',
    'Indian/Antananarivo' => 'Indijski_okean/Antananarivo',
    'Africa/Blantyre' => 'Afrika/Blantire',
    'Africa/Bamako' => 'Afrika/Bamako',
    'Africa/Nouakchott' => 'Afrika/Nuakšot',
    'Indian/Mauritius' => 'Indijski_okean/Mauricijus',
    'Indian/Mayotte' => 'Indijski_okean/Majot',
    'Africa/Casablanca' => 'Afrika/Kazablanka',
    'Africa/El_Aaiun' => 'Afrika/El_Ajun',
    'Africa/Maputo' => 'Afrika/Maputo',
    'Africa/Windhoek' => 'Afrika/Vindhuk',
    'Africa/Niamey' => 'Afrika/Nijamej',
    'Africa/Lagos' => 'Afrika/Lagos',
    'Indian/Reunion' => 'Indijski_okean/Reinion',
    'Africa/Kigali' => 'Afrika/Kigali',
    'Atlantic/St_Helena' => 'Atlantik/Sv._Helena',
    'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
    'Africa/Dakar' => 'Afrika/Dakar',
    'Indian/Mahe' => 'Indijski_okean/Mahe',
    'Africa/Freetown' => 'Afrika/Fritaun',
    'Africa/Mogadishu' => 'Afrika/Mogadiš',
    'Africa/Johannesburg' => 'Afrika/Johanesburg',
    'Africa/Khartoum' => 'Afrika/Kartum',
    'Africa/Mbabane' => 'Afrika/Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salam',
    'Africa/Lome' => 'Afrika/Lome',
    'Africa/Tunis' => 'Afrika/Tunis',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Harare',
    'Antarctica/Casey' => 'Antarktik/Kejsi',
    'Antarctica/Davis' => 'Antarktik/Dejvis',
    'Antarctica/Mawson' => 'Antarktik/Moson',
    'Indian/Kerguelen' => 'Indijski_okean/Kergulen',
    'Antarctica/DumontDUrville' => 'Antarktik/DumontDUrville',
    'Antarctica/Syowa' => 'Antarktik/Sjova',
    'Antarctica/Vostok' => 'Antarktik/Vostok',
    'Antarctica/Rothera' => 'Antarktik/Rotera',
    'Antarctica/Palmer' => 'Antarktik/Palmer',
    'Antarctica/McMurdo' => 'Antarktik/MekMurdo',
    'Asia/Kabul' => 'Azija/Kabul',
    'Asia/Yerevan' => 'Azija/Jerevan',
    'Asia/Baku' => 'Azija/Baku',
    'Asia/Bahrain' => 'Azija/Bahrein',
    'Asia/Dhaka' => 'Azija/Daka',
    'Asia/Thimphu' => 'Azija/Timpu',
    'Indian/Chagos' => 'Indijski_okean/Čagos',
    'Asia/Brunei' => 'Azija/Brunej',
    'Asia/Rangoon' => 'Azija/Rangun',
    'Asia/Phnom_Penh' => 'Azija/Pnom_Pen',
    'Asia/Beijing' => 'Azija/Peking',
    'Asia/Harbin' => 'Azija/Harbin',
    'Asia/Shanghai' => 'Azija/Šangaj',
    'Asia/Chongqing' => 'Azija/Čonking',
    'Asia/Urumqi' => 'Azija/Urumqi',
    'Asia/Kashgar' => 'Azija/Kašgar',
    'Asia/Hong_Kong' => 'Azija/Hong_Kong',
    'Asia/Taipei' => 'Azija/Tajpej',
    'Asia/Macau' => 'Azija/Makao',
    'Asia/Nicosia' => 'Azija/Nikozija',
    'Asia/Tbilisi' => 'Azija/Tbilisi',
    'Asia/Dili' => 'Azija/Dili',
    'Asia/Calcutta' => 'Azija/Kalkuta',
    'Asia/Jakarta' => 'Azija/Džakarta',
    'Asia/Pontianak' => 'Azija/Pontianak',
    'Asia/Makassar' => 'Azija/Makasar',
    'Asia/Jayapura' => 'Azija/Džajapura',
    'Asia/Tehran' => 'Azija/Teheran',
    'Asia/Baghdad' => 'Azija/Bagdad',
    'Asia/Jerusalem' => 'Azija/Jerusalim',
    'Asia/Tokyo' => 'Azija/Tokijo',
    'Asia/Amman' => 'Azija/Aman',
    'Asia/Almaty' => 'Azija/Almati',
    'Asia/Qyzylorda' => 'Azija/Kizilorda',
    'Asia/Aqtobe' => 'Azija/Aktobe',
    'Asia/Aqtau' => 'Azija/Aktau',
    'Asia/Oral' => 'Azija/Oral',
    'Asia/Bishkek' => 'Azija/Biškek',
    'Asia/Seoul' => 'Azija/Seul',
    'Asia/Pyongyang' => 'Azija/Pjongjang',
    'Asia/Kuwait' => 'Azija/Kuvajt',
    'Asia/Vientiane' => 'Azija/Viijentijan',
    'Asia/Beirut' => 'Azija/Bejrut',
    'Asia/Kuala_Lumpur' => 'Azija/Kuala_Lumpur',
    'Asia/Kuching' => 'Azija/Kuačing',
    'Indian/Maldives' => 'Indijski_okean/Maldivi',
    'Asia/Hovd' => 'Azija/Hovd',
    'Asia/Ulaanbaatar' => 'Azija/Ulan_Bator',
    'Asia/Choibalsan' => 'Azija/Čojbalsan',
    'Asia/Katmandu' => 'Azija/Katmandu',
    'Asia/Muscat' => 'Azija/Muskat',
    'Asia/Karachi' => 'Azija/Karači',
    'Asia/Gaza' => 'Azija/Gaza',
    'Asia/Manila' => 'Azija/Manila',
    'Asia/Qatar' => 'Azija/Katar',
    'Asia/Riyadh' => 'Azija/Rijad',
    'Asia/Singapore' => 'Azija/Singapur',
    'Asia/Colombo' => 'Azija/Kolombo',
    'Asia/Damascus' => 'Azija/Damask',
    'Asia/Dushanbe' => 'Azija/Dušanbe',
    'Asia/Bangkok' => 'Azija/Bangkok',
    'Asia/Ashgabat' => 'Azija/Ašgabat',
    'Asia/Dubai' => 'Azija/Dubaji',
    'Asia/Samarkand' => 'Azija/Samarkand',
    'Asia/Tashkent' => 'Azija/Taškent',
    'Asia/Saigon' => 'Azija/Sajgon',
    'Asia/Aden' => 'Azija/Aden',
    'Australia/Darwin' => 'Australija/Darvin',
    'Australia/Perth' => 'Australija/Pert',
    'Australia/Brisbane' => 'Australija/Brizbejn',
    'Australia/Lindeman' => 'Australija/Lindeman',
    'Australia/Adelaide' => 'Australija/Adelejd',
    'Australia/Hobart' => 'Australija/Hobart',
    'Australia/Currie' => 'Australija/Kjuri',
    'Australia/Melbourne' => 'Australija/Melburn',
    'Australia/Sydney' => 'Australija/Sidnej',
    'Australia/Broken_Hill' => 'Australija/Broken_Hil',
    'Indian/Christmas' => 'Indijski_okean/Božićna_ostrva',
    'Pacific/Rarotonga' => 'Pacifik/Rarotonga',
    'Indian/Cocos' => 'Indijski_okean/Kokos',
    'Pacific/Fiji' => 'Pacifik/Fidži',
    'Pacific/Gambier' => 'Pacifik/Gambir',
    'Pacific/Marquesas' => 'Pacifik/Markezas',
    'Pacific/Tahiti' => 'Pacifik/Tahiti',
    'Pacific/Guam' => 'Pacifik/Guam',
    'Pacific/Tarawa' => 'Pacifik/Tarava',
    'Pacific/Enderbury' => 'Pacifik/Enderburi',
    'Pacific/Kiritimati' => 'Pacifik/Kiritimati',
    'Pacific/Saipan' => 'Pacifik/Saipan',
    'Pacific/Majuro' => 'Pacifik/Majuro',
    'Pacific/Kwajalein' => 'Pacifik/Kvadžalin',
    'Pacific/Truk' => 'Pacifik/Truk',
    'Pacific/Pohnpei' => 'Pacifik/Pohnpei',
    'Pacific/Kosrae' => 'Pacifik/Kosre',
    'Pacific/Nauru' => 'Pacifik/Nauru',
    'Pacific/Noumea' => 'Pacifik/Numea',
    'Pacific/Auckland' => 'Pacifik/Oklend',
    'Pacific/Chatham' => 'Pacifik/Čatam',
    'Pacific/Niue' => 'Pacifik/Niue',
    'Pacific/Norfolk' => 'Pacifik/Norfolk',
    'Pacific/Palau' => 'Pacifik/Palau',
    'Pacific/Port_Moresby' => 'Pacifik/Port_Morezbi',
    'Pacific/Pitcairn' => 'Pacifik/Pitkairn',
    'Pacific/Pago_Pago' => 'Pacifik/Pago_Pago',
    'Pacific/Apia' => 'Pacifik/Apia',
    'Pacific/Guadalcanal' => 'Pacifik/Gvadalkanal',
    'Pacific/Fakaofo' => 'Pacifik/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifik/Tongatapu',
    'Pacific/Funafuti' => 'Pacifik/Funafuti',
    'Pacific/Johnston' => 'Pacifik/Džonston',
    'Pacific/Midway' => 'Pacifik/Midvej',
    'Pacific/Wake' => 'Pacifik/Vejk',
    'Pacific/Efate' => 'Pacifik/Efate',
    'Pacific/Wallis' => 'Pacifik/Valis',
    'Europe/London' => 'Evropa/London',
    'Europe/Dublin' => 'Evropa/Dablin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Evropa/Tirana',
    'Europe/Andorra' => 'Evropa/Andora',
    'Europe/Vienna' => 'Evropa/Beč',
    'Europe/Minsk' => 'Evropa/Minsk',
    'Europe/Brussels' => 'Evropa/Brisel',
    'Europe/Sofia' => 'Evropa/Sofija',
    'Europe/Prague' => 'Evropa/Prag',
    'Europe/Copenhagen' => 'Evropa/Kopenhagen',
    'Atlantic/Faeroe' => 'Atlantik/Farska_ostrva',
    'America/Danmarkshavn' => 'Amerika/Danmarkšavn',
    'America/Scoresbysund' => 'Amerika/Skorzbisund',
    'America/Godthab' => 'Amerika/Godthab',
    'America/Thule' => 'Amerika/Tule',
    'Europe/Tallinn' => 'Evropa/Talin',
    'Europe/Helsinki' => 'Evropa/Helsinki',
    'Europe/Paris' => 'Evropa/Pariz',
    'Europe/Berlin' => 'Evropa/Berlin',
    'Europe/Gibraltar' => 'Evropa/Gibraltar',
    'Europe/Athens' => 'Evropa/Atina',
    'Europe/Budapest' => 'Evropa/Budimpešta',
    'Atlantic/Reykjavik' => 'Atlantik/Rejkjavik',
    'Europe/Rome' => 'Evropa/Rim',
    'Europe/Riga' => 'Evropa/Riga',
    'Europe/Vaduz' => 'Evropa/Vaduz',
    'Europe/Vilnius' => 'vropa/Vilnijus',
    'Europe/Luxembourg' => 'Evropa/Luksemburg',
    'Europe/Malta' => 'Evropa/Malta',
    'Europe/Chisinau' => 'Evropa/Kišinjev',
    'Europe/Monaco' => 'Evropa/Monako',
    'Europe/Amsterdam' => 'Evropa/Amstredam',
    'Europe/Oslo' => 'Evropa/Oslo',
    'Europe/Warsaw' => 'Evropa/Varšava',
    'Europe/Lisbon' => 'Evropa/Lisabon',
    'Atlantic/Azores' => 'Atlantik/Azori',
    'Atlantic/Madeira' => 'Atlantik/Madera',
    'Europe/Bucharest' => 'Evropa/Bukurešt',
    'Europe/Kaliningrad' => 'Evropa/Kaljiningrad',
    'Europe/Moscow' => 'Evropa/Moskva',
    'Europe/Samara' => 'Evropa/Samara',
    'Asia/Yekaterinburg' => 'Azija/Jekaterinburg',
    'Asia/Omsk' => 'Azija/Omsk',
    'Asia/Novosibirsk' => 'Azija/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Azija/Krasnojarsk',
    'Asia/Irkutsk' => 'Azija/Irkutsk',
    'Asia/Yakutsk' => 'Azija/Jakutsk',
    'Asia/Vladivostok' => '&#39;Azija/Vladivostok',
    'Asia/Sakhalin' => 'Azija/Sahalin',
    'Asia/Magadan' => 'Azija/Magadan',
    'Asia/Kamchatka' => 'Azija/Kamčatka',
    'Asia/Anadyr' => 'Azija/Anadir',
    'Europe/Belgrade' => 'Evropa/Beograd',
    'Europe/Madrid' => 'Evropa/Madrid',
    'Africa/Ceuta' => 'Afrika/Seuta',
    'Atlantic/Canary' => 'Atlantik/Kanarska_ostrva',
    'Europe/Stockholm' => 'Evropa/Stokholm',
    'Europe/Zurich' => '&#39;Evropa/Cirih',
    'Europe/Istanbul' => 'Evropa/Istanbul',
    'Europe/Kiev' => 'Evropa/Kijev',
    'Europe/Uzhgorod' => 'Evropa/Užnogord',
    'Europe/Zaporozhye' => 'Evropa/Zaporožje',
    'Europe/Simferopol' => 'Evropa/Simferopolj',
    'America/New_York' => 'Amerika/Njujork',
    'America/Chicago' => 'Amerika/Čikago',
    'America/North_Dakota/Center' => 'Amerika/Severna_Dakota/Centar',
    'America/Denver' => 'Amerika/Denver',
    'America/Los_Angeles' => 'Amerika/Los_Anđeles',
    'America/Juneau' => 'Amerika/Žuno',
    'America/Yakutat' => 'Amerika/Jakutat',
    'America/Anchorage' => 'Amerika/Enkoridž',
    'America/Nome' => 'Amerika/Nom',
    'America/Adak' => 'Amerika/Adak',
    'Pacific/Honolulu' => 'Pacifik/Honolulu',
    'America/Phoenix' => 'Amerika/Feniks',
    'America/Boise' => 'Amerika/Boize',
    'America/Indiana/Indianapolis' => 'Amerika/Indijana/Indijanopolis',
    'America/Indiana/Marengo' => 'Amerika/Indijana/Marengo',
    'America/Indiana/Knox' => 'Amerika/Indijana/Noks',
    'America/Indiana/Vevay' => 'Amerika/Indijana/Vevaj',
    'America/Kentucky/Louisville' => 'Amerika/Kentaki/Luivil',
    'America/Kentucky/Monticello' => 'Amerika/Kentaki/Montičelo',
    'America/Detroit' => 'Amerika/Detroit',
    'America/Menominee' => 'Amerika/Menomini',
    'America/St_Johns' => 'Amerika/Sent_Džons',
    'America/Goose_Bay' => 'Amerika/Gus_Bej',
    'America/Halifax' => 'Amerika/Halifaks',
    'America/Glace_Bay' => 'Amerika/Glejs_Bej',
    'America/Montreal' => 'Amerika/Montreal',
    'America/Toronto' => 'Amerika/Toronto',
    'America/Thunder_Bay' => 'Amerika/Tander_Bej',
    'America/Nipigon' => 'Amerika/Nipigon',
    'America/Rainy_River' => 'Amerika/Rejni_River',
    'America/Winnipeg' => 'Amerika/Vinipeg',
    'America/Regina' => 'Amerika/Regina',
    'America/Swift_Current' => 'Amerika/Svift_Karent',
    'America/Edmonton' => 'Amerika/Edmonton',
    'America/Vancouver' => 'Amerika/Vankuver',
    'America/Dawson_Creek' => 'Amerika/Doson_Krik',
    'America/Pangnirtung' => 'Amerika/Pangnirtung',
    'America/Iqaluit' => 'Amerika/Ikalujt',
    'America/Coral_Harbour' => 'Amerika/Koral_Harbor',
    'America/Rankin_Inlet' => 'Amerika/Rankin_Inlet',
    'America/Cambridge_Bay' => 'Amerika/Kembridž_Bej',
    'America/Yellowknife' => 'Amerika/Jelounajf',
    'America/Inuvik' => 'Amerika/Inuvik',
    'America/Whitehorse' => 'Amerika/Vajthors',
    'America/Dawson' => 'Amerika/Doson',
    'America/Cancun' => 'Amerika/Kankun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Moterej',
    'America/Mexico_City' => 'Amerika/Meksiko_Siti',
    'America/Chihuahua' => 'Amerika/Čivava',
    'America/Hermosillo' => 'Amerika/Ermosiljo',
    'America/Mazatlan' => 'Amerika/Mazatlan',
    'America/Tijuana' => 'Amerika/Tihuana',
    'America/Anguilla' => 'Amerika/Angvila',
    'America/Antigua' => 'Amerika/Antigva',
    'America/Nassau' => 'Amerika/Nasau',
    'America/Barbados' => 'Amerika/Barbados',
    'America/Belize' => 'Amerika/Belize',
    'Atlantic/Bermuda' => 'Atlantik/Bermudi',
    'America/Cayman' => 'Amerika/Kajman',
    'America/Costa_Rica' => 'Amerika/Kostarika',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominika',
    'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
    'America/El_Salvador' => 'Amerika/El_Salvador',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Gvadelupe',
    'America/Guatemala' => 'Amerika/Gvatemala',
    'America/Port-au-Prince' => 'Amerika/Port-o-Prins',
    'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
    'America/Jamaica' => 'Amerika/Jamajka',
    'America/Martinique' => 'Amerika/Martinik',
    'America/Montserrat' => 'Amerika/Montserat',
    'America/Managua' => 'Amerika/Managva',
    'America/Panama' => 'Amerika/Panama',
    'America/Puerto_Rico' => 'Amerika/Portoriko',
    'America/St_Kitts' => 'Amerika/Sv_Kits',
    'America/St_Lucia' => 'Amerika/Sv_Lucija',
    'America/Miquelon' => 'Amerika/Mikelon',
    'America/St_Vincent' => 'Amerika/Sv_Vinsent',
    'America/Grand_Turk' => 'Amerika/Grand_Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/Sv_Tomas',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argentina/Buenos_Ajres',
    'America/Argentina/Cordoba' => 'Amerika/Argentina/Kordoba',
    'America/Argentina/Tucuman' => 'Amerika/Argentina/Tukuman',
    'America/Argentina/La_Rioja' => 'Amerika/Argentina/La_Rioha',
    'America/Argentina/San_Juan' => 'Amerika/Argentina/San_Huan',
    'America/Argentina/Jujuy' => 'Amerika/Argentina/Huhui',
    'America/Argentina/Catamarca' => 'Amerika/Argentina/Katamarka',
    'America/Argentina/Mendoza' => 'Amerika/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argentina/Rio_Galjegos',
    'America/Argentina/Ushuaia' => 'Amerika/Argentina/Ušuaja',
    'America/Aruba' => 'Amerika/Aruba',
    'America/La_Paz' => 'Amerika/La_Paz',
    'America/Noronha' => 'Amerika/Noronja',
    'America/Belem' => 'Amerika/Belem',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Recife' => 'Amerika/Resifi',
    'America/Araguaina' => 'Amerika/Aragvijana',
    'America/Maceio' => 'Amerika/Masejo',
    'America/Bahia' => 'Amerika/Baija',
    'America/Sao_Paulo' => 'Amerika/Sao_Paulo',
    'America/Campo_Grande' => 'Amerika/Kampo_Grande',
    'America/Cuiaba' => 'Amerika/Kujuba',
    'America/Porto_Velho' => 'Amerika/Porto_Velo',
    'America/Boa_Vista' => 'Amerika/Boa_Vista',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Eirunepe' => 'Amerika/Ejrunepe',
    'America/Rio_Branco' => 'Amerika/Rio_Branko',
    'America/Santiago' => 'Amerika/Santiago',
    'Pacific/Easter' => 'Pacifik/Uskršnje_ostrvo',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Kurakao',
    'America/Guayaquil' => 'Amerika/Gvajakvil',
    'Pacific/Galapagos' => 'Pacifik/Galapagos',
    'Atlantic/Stanley' => 'Atlantik/Stenli',
    'America/Cayenne' => 'Amerika/Kajen',
    'America/Guyana' => 'Amerika/Gijana',
    'America/Asuncion' => 'Amerika/Asunsion',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlantik/Južna_Džodžija',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Port_of_Spain' => 'Amerika/Port_ov_Spejn',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Caracas' => 'Amerika/Karakas',
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
    'Google' => 'Google Docs',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Docs',
);
$app_list_strings['token_status'] = array(
    1 => 'Zahtev',
    2 => 'Pristup',
    3 => 'Nevažeći',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Email',
    'event' => 'Događaj',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanja',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanja',
    'email' => 'Email',
    'event' => 'Događaj',
    'system' => 'Sistem',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Baza Znanja';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Kategorije Baze znanja';
$app_list_strings['aok_status_list']['Draft'] = 'Nacrt';
$app_list_strings['aok_status_list']['Expired'] = 'Istekao';
$app_list_strings['aok_status_list']['In_Review'] = 'Na pregledu';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privatni';
$app_list_strings['aok_status_list']['published_public'] = 'Javno';

$app_list_strings['moduleList']['FP_events'] = 'Događaji';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Lokacije';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Pozvan';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nije pozvan';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Prisustvovao';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nije prisustvovao';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Prihvaćen';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Odbijen';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Bez odgovora';

$app_strings['LBL_STATUS_EVENT'] = 'Status poziva';
$app_strings['LBL_ACCEPT_STATUS'] = 'Prihvati status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Ova strana';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Svi zapisi';
$app_strings['LBL_LISTVIEW_NONE'] = 'Nijedna';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Događaji za slučaj';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Ažuriranja slučaja';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Molimo da odgovorite iznad ove linije ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'Zatvoren',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Novo',
        'Open_Assigned' => 'Dodeljeno',
        'Closed_Closed' => 'Zatvoren',
        'Open_Pending Input' => 'Unos na čekanju',
        'Closed_Rejected' => 'Odbijen',
        'Closed_Duplicate' => 'Duplikat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Jedan korisnik',
        'Account' => 'Korisnik računa',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Podrazumevani predložak',
    'singleUser' => 'Jedan korisnik',
    'roundRobin' => 'U krug',
    'leastBusy' => 'Najmanje zauzet',
    'random' => 'Nasumično',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Izveštaji';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Uslovi za izveštaj';
$app_list_strings['moduleList']['AOR_Charts'] = 'Dijagrami izveštaja';
$app_list_strings['moduleList']['AOR_Fields'] = 'Polja izveštaja';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Zakazani izveštaji';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Jednako';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Nije jednako';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Veće od';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Manje od';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Veće od ili jednako';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Manje od ili jednako';
$app_list_strings['aor_operator_list']['Contains'] = 'Sadrži';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Počinje na';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Završava se sa';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'G-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Y';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/G';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'Gmd';
$app_list_strings['aor_format_options']['Y-m'] = 'G-m';
$app_list_strings['aor_format_options']['Y'] = 'G';
$app_list_strings['aor_condition_operator_list']['And'] = 'i';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ILI';
$app_list_strings['aor_condition_type_list']['Value'] = 'Vrednost';
$app_list_strings['aor_condition_type_list']['Field'] = 'Polje';
$app_list_strings['aor_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Jedno od';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Trenutni korisnik';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuta';
$app_list_strings['aor_date_type_list']['hour'] = 'Sati';
$app_list_strings['aor_date_type_list']['day'] = 'Dana';
$app_list_strings['aor_date_type_list']['week'] = 'Nedelje';
$app_list_strings['aor_date_type_list']['month'] = 'Meseci';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Radno vreme';
$app_list_strings['aor_date_options']['now'] = 'Sada';
$app_list_strings['aor_date_options']['field'] = 'Ovo polje';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Rastući';
$app_list_strings['aor_sort_operator']['DESC'] = 'Opadajući';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Broj';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Zbir';
$app_list_strings['aor_function_list']['AVG'] = 'Prosek';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Broj';
$app_list_strings['aor_total_options']['SUM'] = 'Zbir';
$app_list_strings['aor_total_options']['AVG'] = 'Prosek';
$app_list_strings['aor_chart_types']['bar'] = 'Trakasti grafikon';
$app_list_strings['aor_chart_types']['line'] = 'Linijski dijagram';
$app_list_strings['aor_chart_types']['pie'] = 'Pita grafikon';
$app_list_strings['aor_chart_types']['radar'] = 'Radar grafikon';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Naslagane trake';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grupisane trake';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mesečno';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Nedeljno';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Dnevno';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktivan';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Neaktivan';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Korisnik';
$app_list_strings['aor_email_type_list']['Users'] = 'Korisnici';
$app_list_strings['aor_assign_options']['all'] = 'SVI KORISNICI';
$app_list_strings['aor_assign_options']['role'] = 'SVI korisnici u ulozi';
$app_list_strings['aor_assign_options']['security_group'] = 'SVI korisnici u sigurnosnoj grupi';
$app_list_strings['date_time_period_list']['today'] = 'Danas';
$app_list_strings['date_time_period_list']['yesterday'] = 'Juče';
$app_list_strings['date_time_period_list']['this_week'] = 'Ove nedelje';
$app_list_strings['date_time_period_list']['last_week'] = 'Poslednja nedelja';
$app_list_strings['date_time_period_list']['last_month'] = 'Prošli mesec';
$app_list_strings['date_time_period_list']['this_month'] = 'Ovaj mesec';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ovaj kvartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Poslednji kvartal';
$app_list_strings['date_time_period_list']['this_year'] = 'Ove godine';
$app_list_strings['date_time_period_list']['last_year'] = 'Prošle godine';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'na';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'na';
$app_strings['LBL_CRON_AT'] = 'u';
$app_strings['LBL_CRON_RAW'] = 'Napredni';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Sati';
$app_strings['LBL_CRON_DAY'] = 'Dan';
$app_strings['LBL_CRON_MONTH'] = 'Mesec';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Dnevno';
$app_strings['LBL_CRON_WEEKLY'] = 'Nedeljno';
$app_strings['LBL_CRON_MONTHLY'] = 'Mesečno';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Ugovori';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Računi';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF šabloni';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Proizvodi - Kategorije';
$app_list_strings['moduleList']['AOS_Products'] = 'Proizvodi';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Stavke';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Grupe stavki po linijama';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Ponude';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analitičar';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Korisnik';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Novinar';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Verovatni Kupac';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Preprodavac';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Ostalo';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Nacrt';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'U pregovoru';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Isporučeno';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Na Čekanju';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Potvrđeno';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Zatvoreno prihvaćeno';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Završeni izgubljeni';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Zatvoreno napušteno';
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
$app_list_strings['discount_list']['Percentage'] = 'Proc';
$app_list_strings['discount_list']['Amount'] = 'Izn';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analitičar';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Korisnik';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Novinar';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Verovatni Kupac';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Preprodavac';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Ostalo';
$app_list_strings['invoice_status_dom']['Paid'] = 'Plaćeno';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Nije plaćeno';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Otkazano';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Nije fakturisano';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Fakturisano';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptopovi';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktop';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Dobro';
$app_list_strings['product_type_dom']['Service'] = 'Usluga';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Ponude';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Računi';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Ugovori';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Ponude';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Računi';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Ugovori';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Kompanije';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakti';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Potencijalni klijenti';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Not Started';
$app_list_strings['contract_status_list']['In Progress'] = 'U toku';
$app_list_strings['contract_status_list']['Signed'] = 'Potpisano';
$app_list_strings['contract_type_list']['Type'] = 'Tip';
$app_strings['LBL_PRINT_AS_PDF'] = 'Štampaj kao PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Izaberite šablon';
$app_strings['LBL_NO_TEMPLATE'] = 'GREŠKA\nNisu pronađeni šabloni.\nMolimo da napravite iste u PDF šabloni modulu';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Automatske radnje';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Uslovi procesa rada';
$app_list_strings['moduleList']['AOW_Processed'] = 'Nadgledanje procesa';
$app_list_strings['moduleList']['AOW_Actions'] = 'Akcije procesa rada';
$app_list_strings['aow_status_list']['Active'] = 'Aktivan';
$app_list_strings['aow_status_list']['Inactive'] = 'Neaktivan';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Jednako';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Nije jednako';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Veće od';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Manje od';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Veće od ili jednako';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Manje od ili jednako';
$app_list_strings['aow_operator_list']['Contains'] = 'Sadrži';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Počinje na';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Završava se sa';
$app_list_strings['aow_operator_list']['is_null'] = 'je prazno';
$app_list_strings['aow_process_status_list']['Complete'] = 'Završena';
$app_list_strings['aow_process_status_list']['Running'] = 'Uključena';
$app_list_strings['aow_process_status_list']['Pending'] = 'Očekuje se';
$app_list_strings['aow_process_status_list']['Failed'] = 'Neuspešno';
$app_list_strings['aow_condition_operator_list']['And'] = 'i';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ILI';
$app_list_strings['aow_condition_type_list']['Value'] = 'Vrednost';
$app_list_strings['aow_condition_type_list']['Field'] = 'Polje';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Svaka promena';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'U sigurnosnoj grupi';
$app_list_strings['aow_condition_type_list']['Date'] = 'Datum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Jedno od';
$app_list_strings['aow_action_type_list']['Value'] = 'Vrednost';
$app_list_strings['aow_action_type_list']['Field'] = 'Polje';
$app_list_strings['aow_action_type_list']['Date'] = 'Datum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'U krug';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Najmanje zauzet';
$app_list_strings['aow_action_type_list']['Random'] = 'Nasumično';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Vrednost';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Polje';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuta';
$app_list_strings['aow_date_type_list']['hour'] = 'Sati';
$app_list_strings['aow_date_type_list']['day'] = 'Dana';
$app_list_strings['aow_date_type_list']['week'] = 'Nedelje';
$app_list_strings['aow_date_type_list']['month'] = 'Meseci';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Radno vreme';
$app_list_strings['aow_date_options']['now'] = 'Sada';
$app_list_strings['aow_date_options']['today'] = 'Danas';
$app_list_strings['aow_date_options']['field'] = 'Ovo polje';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'SVI KORISNICI';
$app_list_strings['aow_assign_options']['role'] = 'SVI korisnici u ulozi';
$app_list_strings['aow_assign_options']['security_group'] = 'SVI korisnici u sigurnosnoj grupi';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Zabeleži email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Povezano polje';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Korisnik';
$app_list_strings['aow_email_type_list']['Users'] = 'Korisnici';
$app_list_strings['aow_email_to_list']['to'] = 'Za';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Svi zapisi';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Novi zapisi';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Izmenjeni zapisi';
$app_list_strings['aow_run_when_list']['Always'] = 'Uvek';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Samo pri čuvanju';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Samo po planeru';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projekti - Šabloni';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Šabloni za zadatke u projektima';
$app_list_strings['relationship_type_list']['FS'] = 'Od kraja do početka';
$app_list_strings['relationship_type_list']['SS'] = 'Od početka do kraja';
$app_list_strings['duration_unit_dom']['Days'] = 'Dana';
$app_list_strings['duration_unit_dom']['Hours'] = 'Sati';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Prikaži Gantt tabelu';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Pregled detalja';
$app_strings['LBL_CREATE_PROJECT'] = 'Kreiraj projekat';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Geo. dužina';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Geo. širina';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geokod status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresa';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mape';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Mape - Markeri';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Mape - Područja';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Mape - Sačuvane adrese';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Milje';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometri';

$app_list_strings['map_module_type_list']['Accounts'] = 'Kompanije';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakti';
$app_list_strings['map_module_type_list']['Cases'] = 'Slučajevi';
$app_list_strings['map_module_type_list']['Leads'] = 'Potencijalni klijenti';
$app_list_strings['map_module_type_list']['Meetings'] = 'Sastanci';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Prodajne prilike';
$app_list_strings['map_module_type_list']['Project'] = 'Projekti';
$app_list_strings['map_module_type_list']['Prospects'] = 'Ciljevi';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Kompanija';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakt';
$app_list_strings['map_relate_type_list']['Cases'] = 'Slučaj';
$app_list_strings['map_relate_type_list']['Leads'] = 'Potencijalni klijent';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Sastanak';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Prodajna prilika';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekti';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cilj';

$app_list_strings['marker_image_list']['accident'] = 'Nezgoda';
$app_list_strings['marker_image_list']['administration'] = 'Administracija';
$app_list_strings['marker_image_list']['agriculture'] = 'Poljoprivreda';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Mali avion';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avioturizam';
$app_list_strings['marker_image_list']['airport'] = 'Aerodrom';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteatar';
$app_list_strings['marker_image_list']['apartment'] = 'Stan';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvarijum';
$app_list_strings['marker_image_list']['arch'] = 'Luk';
$app_list_strings['marker_image_list']['atm'] = 'Bankomat';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banka';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banka evro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banka funta';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plaža';
$app_list_strings['marker_image_list']['beautiful'] = 'Lepo';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parkiralište za bicikle';
$app_list_strings['marker_image_list']['big_city'] = 'Velegrad';
$app_list_strings['marker_image_list']['bridge'] = 'Most';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderni most';
$app_list_strings['marker_image_list']['bus'] = 'Autobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Žičara';
$app_list_strings['marker_image_list']['car'] = 'Automobil';
$app_list_strings['marker_image_list']['car_rental'] = 'Iznajmljivanje automobila';
$app_list_strings['marker_image_list']['carrepair'] = 'Popravka automobila';
$app_list_strings['marker_image_list']['castle'] = 'Dvorac';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedrala';
$app_list_strings['marker_image_list']['chapel'] = 'Kapela';
$app_list_strings['marker_image_list']['church'] = 'Crkva';
$app_list_strings['marker_image_list']['city_square'] = 'Gradski trg';
$app_list_strings['marker_image_list']['cluster'] = 'Skup';
$app_list_strings['marker_image_list']['cluster_2'] = 'Skup 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Skup 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Skup 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Skup 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kafa';
$app_list_strings['marker_image_list']['community_centre'] = 'Centar zajednice';
$app_list_strings['marker_image_list']['company'] = 'Kompanija';
$app_list_strings['marker_image_list']['conference'] = 'Konferencija';
$app_list_strings['marker_image_list']['construction'] = 'Građevinarstvo';
$app_list_strings['marker_image_list']['convenience'] = 'Pogodnost';
$app_list_strings['marker_image_list']['court'] = 'Sud';
$app_list_strings['marker_image_list']['cruise'] = 'Krstarenje';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Menjačnica';
$app_list_strings['marker_image_list']['customs'] = 'Carina';
$app_list_strings['marker_image_list']['cycling'] = 'Bicikliranje';
$app_list_strings['marker_image_list']['dam'] = 'Brana';
$app_list_strings['marker_image_list']['dentist'] = 'Zubar';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Prodavnica';
$app_list_strings['marker_image_list']['disability'] = 'Invalidnost';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Prakiralište za invalide';
$app_list_strings['marker_image_list']['doctor'] = 'Doktor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Povodac za pse';
$app_list_strings['marker_image_list']['down'] = 'Dole';
$app_list_strings['marker_image_list']['down_left'] = 'Dole levo';
$app_list_strings['marker_image_list']['down_right'] = 'Dole desno';
$app_list_strings['marker_image_list']['down_then_left'] = 'Dole pa levo';
$app_list_strings['marker_image_list']['down_then_right'] = 'Dole pa desno';
$app_list_strings['marker_image_list']['drugs'] = 'Lekovi';
$app_list_strings['marker_image_list']['elevator'] = 'Lift';
$app_list_strings['marker_image_list']['embassy'] = 'Ambasada';
$app_list_strings['marker_image_list']['expert'] = 'Stučnjak';
$app_list_strings['marker_image_list']['factory'] = 'Fabrika';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Padajuće kamenje';
$app_list_strings['marker_image_list']['fast_food'] = 'Brza hrana';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Šuma';
$app_list_strings['marker_image_list']['fountain'] = 'Fontana';
$app_list_strings['marker_image_list']['friday'] = 'Petak';
$app_list_strings['marker_image_list']['garden'] = 'Vrt';
$app_list_strings['marker_image_list']['gas_station'] = 'Benzinska stanica';
$app_list_strings['marker_image_list']['geyser'] = 'Gejzir';
$app_list_strings['marker_image_list']['gifts'] = 'Pokloni';
$app_list_strings['marker_image_list']['gourmet'] = 'Gurman';
$app_list_strings['marker_image_list']['grocery'] = 'Namirnice';
$app_list_strings['marker_image_list']['hairsalon'] = 'Frizerski salon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Autoput';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Istorijska četvrt';
$app_list_strings['marker_image_list']['home'] = 'Početna strana';
$app_list_strings['marker_image_list']['hospital'] = 'Bolnica';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 zvezdica';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 zvezdice';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hote 3 zvezdice';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 zvezdice';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hote 5 zvezdica';
$app_list_strings['marker_image_list']['info'] = 'Informacije';
$app_list_strings['marker_image_list']['justice'] = 'Pravo';
$app_list_strings['marker_image_list']['lake'] = 'Jezero';
$app_list_strings['marker_image_list']['laundromat'] = 'Praonica odeće';
$app_list_strings['marker_image_list']['left'] = 'Levo';
$app_list_strings['marker_image_list']['left_then_down'] = 'Levo pa dole';
$app_list_strings['marker_image_list']['left_then_up'] = 'Levo pa gore';
$app_list_strings['marker_image_list']['library'] = 'Biblioteka';
$app_list_strings['marker_image_list']['lighthouse'] = 'Svetionik';
$app_list_strings['marker_image_list']['liquor'] = 'Žestoka pića';
$app_list_strings['marker_image_list']['lock'] = 'Brava';
$app_list_strings['marker_image_list']['main_road'] = 'Glavni put';
$app_list_strings['marker_image_list']['massage'] = 'Masaža';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Toranj za mobitele';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderni toranj';
$app_list_strings['marker_image_list']['monastery'] = 'Manastir';
$app_list_strings['marker_image_list']['monday'] = 'Ponedeljak';
$app_list_strings['marker_image_list']['monument'] = 'Spomenik';
$app_list_strings['marker_image_list']['mosque'] = 'Džamija';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocikl';
$app_list_strings['marker_image_list']['museum'] = 'Muzej';
$app_list_strings['marker_image_list']['music_live'] = 'Živa muzika';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Crpilište nafte';
$app_list_strings['marker_image_list']['pagoda'] = 'Nadstrešnica';
$app_list_strings['marker_image_list']['palace'] = 'Palata';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramski';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parkiraj i vozi';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Fotografija';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Nije posećeno';
$app_list_strings['marker_image_list']['places_visited'] = 'Posećeno';
$app_list_strings['marker_image_list']['playground'] = 'Igralište';
$app_list_strings['marker_image_list']['police'] = 'Policija';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Pošta';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Dalekovod';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektrana';
$app_list_strings['marker_image_list']['power_substation'] = 'Trafostanica';
$app_list_strings['marker_image_list']['public_art'] = 'Javna umetnost';
$app_list_strings['marker_image_list']['rain'] = 'Kiša';
$app_list_strings['marker_image_list']['real_estate'] = 'Nekretnina';
$app_list_strings['marker_image_list']['regroup'] = 'Regrupisanje';
$app_list_strings['marker_image_list']['resort'] = 'Rizort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restoran';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Afrički restoran';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Roštilj restoran';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Bife';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Kineski restoran';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Riblji restoran';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Riblji čips restoran';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gurmanski restoran';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Grčki restoran';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indijski restoran';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Italijanski restoran';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japanski restoran';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab restoran';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Korejski restoran';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Mediteranski restoran';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Meksički restoran';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantični restoran';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Tajlandski restoran';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Turski restoran';
$app_list_strings['marker_image_list']['right'] = 'Desno';
$app_list_strings['marker_image_list']['right_then_down'] = 'Desno pa dole';
$app_list_strings['marker_image_list']['right_then_up'] = 'Desno pa gore';
$app_list_strings['marker_image_list']['saturday'] = 'Subota';
$app_list_strings['marker_image_list']['school'] = 'Škola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Trgovački centar';
$app_list_strings['marker_image_list']['shore'] = 'Obala';
$app_list_strings['marker_image_list']['sight'] = 'Vidik';
$app_list_strings['marker_image_list']['small_city'] = 'Mali grad';
$app_list_strings['marker_image_list']['snow'] = 'Sneg';
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
$app_list_strings['marker_image_list']['speed_hump'] = 'Ležeći policajac';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Kip';
$app_list_strings['marker_image_list']['steam_train'] = 'Parni voz';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stop svetlo';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Ned';
$app_list_strings['marker_image_list']['sunday'] = 'Nedelja';
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
$app_list_strings['marker_image_list']['theater'] = 'Pozorište';
$app_list_strings['marker_image_list']['theme_park'] = 'Lunapark';
$app_list_strings['marker_image_list']['thursday'] = 'Četvrtak';
$app_list_strings['marker_image_list']['toilets'] = 'WC';
$app_list_strings['marker_image_list']['toll_station'] = 'Naplatna stanica';
$app_list_strings['marker_image_list']['tower'] = 'Toranj';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Saobraćajna kamera';
$app_list_strings['marker_image_list']['train'] = 'Voz';
$app_list_strings['marker_image_list']['tram'] = 'Tramvaj';
$app_list_strings['marker_image_list']['truck'] = 'Kamion';
$app_list_strings['marker_image_list']['tuesday'] = 'Utorak';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunel';
$app_list_strings['marker_image_list']['turn_left'] = 'Skrenite levo';
$app_list_strings['marker_image_list']['turn_right'] = 'Skrenite desno';
$app_list_strings['marker_image_list']['university'] = 'Univerzitet';
$app_list_strings['marker_image_list']['up'] = 'Gore';
$app_list_strings['marker_image_list']['up_left'] = 'Gore levo';
$app_list_strings['marker_image_list']['up_right'] = 'Gore desno';
$app_list_strings['marker_image_list']['up_then_left'] = 'Gore pa levo';
$app_list_strings['marker_image_list']['up_then_right'] = 'Gore pa desno';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Vila';
$app_list_strings['marker_image_list']['water'] = 'Voda';
$app_list_strings['marker_image_list']['waterfall'] = 'Vodopad';
$app_list_strings['marker_image_list']['watermill'] = 'Mlin';
$app_list_strings['marker_image_list']['waterpark'] = 'Vodeni park';
$app_list_strings['marker_image_list']['watertower'] = 'Vodeni toranj';
$app_list_strings['marker_image_list']['wednesday'] = 'Sreda';
$app_list_strings['marker_image_list']['wifi'] = 'Bežični internet';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Turbina za veetar';
$app_list_strings['marker_image_list']['windmill'] = 'Vetrenjača';
$app_list_strings['marker_image_list']['winery'] = 'Vinarija';
$app_list_strings['marker_image_list']['work_office'] = 'Kancelarija';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Svetska kulturna baština';
$app_list_strings['marker_image_list']['zoo'] = 'Zoološki vrt';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Izvan kancelarije';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Na sastanku';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Ponovo zakaži';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Molim unesite podatke o ponovnom zakazivanju';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Datum';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Razlog:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Molim odaberite važeći datum';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Molim odaberite razlog';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Ponovo zakaži';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Istorija pokušaja pozivanja';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Pokušaji poziva';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Sigurnosna grupa';
$app_strings['LBL_ROLE'] = 'Uloga';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Odlazni email nalozi';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Detalji društvenih kanala';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tip';

$app_strings['LBL_ADD_TAB'] = 'Dodaj tab';
$app_strings['LBL_EDIT_TAB'] = 'Izmeni kartice';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Ime Table:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Broj kolona:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Da li želite da obrišete';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'tablu?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Dodaj stranu Table';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Izbrišite trenutnu stranu Table';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Preimenuj stranu Tablee';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Zadaci',
    'Meetings' => 'Sastanci',
    'Calls' => 'Pozivi',
    'Notes' => 'Beleške',
    'Emails' => 'Email poruke'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editor šablona delova';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Izašli ste sa polja koje ste menjali bez čuvanja izmena. Pritisnite OK ako želite da izbrište promene ili otkaži ako želite da nastavite izmene polja";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Desila se greška pri učitavanju polja. Vaša sesija je istekla. Molimo vas da se ponovo prijavite";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Prodaja',
    'getAccountsSpotsData' => 'Kompanije',
    'getLeadsSpotsData' => 'Potencijalni klijenti',
    'getServiceSpotsData' => 'Usluga',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktivnosti',
    'getQuotesSpotsData' => 'Ponude'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Radno vreme';
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
$app_list_strings['day_list']['Monday'] = 'Ponedeljak';
$app_list_strings['day_list']['Tuesday'] = 'Utorak';
$app_list_strings['day_list']['Wednesday'] = 'Sreda';
$app_list_strings['day_list']['Thursday'] = 'Četvrtak';
$app_list_strings['day_list']['Friday'] = 'Petak';
$app_list_strings['day_list']['Saturday'] = 'Subota';
$app_list_strings['day_list']['Sunday'] = 'Nedelja';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Pismo';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Pravni format';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Uspravno';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Vodoravno';


$app_list_strings['moduleList']['SurveyResponses'] = 'Anketni odgovori';
$app_list_strings['moduleList']['Surveys'] = 'Ankete';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Anketna pitanja i odgovori';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Anketna pitanja';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Opcije anketnih pitanja';
$app_list_strings['survey_status_list']['Draft'] = 'Nacrt';
$app_list_strings['survey_status_list']['Public'] = 'Javno';
$app_list_strings['survey_status_list']['Closed'] = 'Zatvoren';
$app_list_strings['surveys_question_type']['Text'] = 'Tekst';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Datum';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Bodovanje';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Potvrda saglasnosti u toku, e-mail nije poslat';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Potvrda saglasnosti u toku, e-mail poslat';
$app_strings['LBL_OPT_IN'] = 'Saglasan/a';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Odjavite';
$app_strings['LBL_OPT_IN_INVALID'] = 'Nevažeći';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Isključeno',
    'opt-in' => 'Saglasan/a',
    'confirmed-opt-in' => 'Potvrđena saglasnost'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Saglasan/a',
    'confirmed-opt-in' => 'Potvrđena saglasnost'
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
    'minute' => 'minuta',
    'hour' => ' sati',
    'day' => 'dana',
    'week' => 'nedelje',
    'month' => 'meseci',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Lični',
    'shared' => 'Zajednički',
    'group' => 'Grupa',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Konektovan',
    'failed' => 'Neuspešno',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'U toku',
    'success' => 'Uspešno',
    'warning' => 'Upozorenje',
    'error' => 'Greška:',
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
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Proverite unos u sva obavezna polja';
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
$app_strings['LBL_CLICK_HERE'] = 'Klikni ovde';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Pretraga';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Pretraga';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Pretraga';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Prethodni';
$app_strings['LBL_SEARCH_NEXT'] = 'Sledeći';
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

$app_strings['LBL_KEY'] = 'Taster';
$app_strings['LBL_VALUE'] = 'Vrednost';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Potpis';

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
