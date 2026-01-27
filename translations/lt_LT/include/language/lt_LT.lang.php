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
    'language_pack_name' => 'Lietuvių (Lithuanian) - lt_LT',
    'moduleList' => array(
        'Home' => 'Pradžia',
        'ResourceCalendar' => 'Išteklių kalendorius',
        'Contacts' => 'Kontaktas',
        'Accounts' => 'Naudotojai',
        'Alerts' => 'Įspėjimai',
        'Opportunities' => 'Galimybės',
        'Cases' => 'Atvejai',
        'Notes' => 'Užrašai',
        'Calls' => 'Skambučiai',
        'TemplateSectionLine' => 'Šablono sekcijos eilutė',
        'Calls_Reschedule' => 'Skambučių perplanavimas',
        'Emails' => 'el.laiškai',
        'EAPM' => 'EAPM',
        'Meetings' => 'Susitikimai',
        'Tasks' => 'Užduotys',
        'Calendar' => 'Kalendorius',
        'Leads' => 'Potencialus kontaktas',
        'Currencies' => 'Valiutos',
        'Activities' => 'Įvykiai',
        'Bugs' => 'Klaidos',
        'Feeds' => 'RSS',
        'iFrames' => 'Mano puslapiai',
        'TimePeriods' => 'Laiko periodai',
        'ContractTypes' => 'Sutarčių tipai',
        'Schedulers' => 'Planuotojai',
        'Project' => 'Projektai',
        'ProjectTask' => 'Projekto užduotys',
        'Campaigns' => 'Kampanijos',
        'CampaignLog' => 'Kampanijos istorija',
        'Documents' => 'Dokumentai',
        'DocumentRevisions' => 'Dokumento versijos',
        'Connectors' => 'Jungties nustatymai',
        'Roles' => 'Funkcijos',
        'Notifications' => 'Pranešimai',
        'Sync' => 'Sinchronizacija',
        'Users' => 'Vartotojas',
        'Employees' => 'Darbuotojai',
        'Administration' => 'Administravimas',
        'ACLRoles' => 'Funkcijos',
        'InboundEmail' => 'Įeinantis paštas',
        'Releases' => 'Versijos',
        'Prospects' => 'Adresatai',
        'Queues' => 'Eilės',
        'EmailMarketing' => 'El. marketingas',
        'EmailTemplates' => 'Laiškų šablonai',
        'ProspectLists' => 'Adresatų sąrašas',
        'SavedSearch' => 'Išsaugotos paieškos',
        'UpgradeWizard' => 'Atnaujinimo vedlys',
        'Trackers' => 'Sekamos nuorodos',
        'TrackerSessions' => 'Audito sesijos',
        'TrackerQueries' => 'Audito užklausos',
        'FAQ' => 'DUK',
        'Newsletters' => 'Naujienlaiškis',
        'SugarFeed' => 'SuiteCRM santraukos',
        'SugarFavorites' => 'SuiteCRM Mėgstamiausi',

        'OAuthKeys' => 'OAuth naudotojų raktai',
        'OAuthTokens' => 'OAuth prieigos raktai',
        'OAuth2Clients' => 'OAuth klientas',
        'OAuth2Tokens' => 'OAuth prieigos raktai',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Pradžia',
        'Dashboard' => 'Prietaisų skydas',
        'Contacts' => 'Adresatas',
        'Accounts' => 'Klientas',
        'Opportunities' => 'Pardavimas',
        'Cases' => 'Atvejis',
        'Notes' => 'Aprašymas',
        'Calls' => 'Skambutis',
        'Emails' => 'el.paštas',
        'EmailTemplates' => 'El. pašto šablonas',
        'Meetings' => 'Susitikimas',
        'Tasks' => 'Užduotis',
        'Calendar' => 'Kalendorius',
        'Leads' => 'Galimybė',
        'Activities' => 'Priminimai',
        'Bugs' => 'Klaida',
        'KBDocuments' => 'Žinių bazė',
        'Feeds' => 'RSS',
        'iFrames' => 'Mano puslapiai',
        'TimePeriods' => 'Laiko periodai',
        'Project' => 'Projektas',
        'ProjectTask' => 'Projekto užduotys',
        'Prospects' => 'Tikslas',
        'Campaigns' => 'Kampanija',
        'Documents' => 'Dokumentas',
        'Sync' => 'Sinchronizacija',
        'Users' => 'Vartotojas',
        'SugarFavorites' => 'SuiteCRM Mėgstamiausi',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Yes',
        '2' => '--Tuščia--',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analitikas',
        'Competitor' => 'Konkurentas',
        'Customer' => 'Klientas',
        'Integrator' => 'Integruotojas',
        'Investor' => 'Investuotojas',
        'Partner' => 'Partneris',
        'Press' => 'Žiniasklaida',
        'Prospect' => 'Perspectyva',
        'Reseller' => 'Perpardavėjas',
        'Other' => 'Kiti',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Drabužiai',
        'Banking' => 'Bankai ir finansai',
        'Biotechnology' => 'Biotechnologijos',
        'Chemicals' => 'Chemija',
        'Communications' => 'Ryšiai',
        'Construction' => 'Statybos',
        'Consulting' => 'Konsultavimas',
        'Education' => 'Švietimas',
        'Electronics' => 'Elektronika',
        'Energy' => 'Energetika',
        'Engineering' => 'Inžinerija',
        'Entertainment' => 'Pramogos',
        'Environmental' => 'Aplinksauga',
        'Finance' => 'Finansai',
        'Government' => 'Vyriausybė',
        'Healthcare' => 'Gydymas',
        'Hospitality' => 'Apgyvendinimas',
        'Insurance' => 'Vyriausybė',
        'Machinery' => 'Technika',
        'Manufacturing' => 'Gamyba',
        'Media' => 'Žiniasklaida',
        'Not For Profit' => 'Ne pelno',
        'Recreation' => 'Poilsis',
        'Retail' => 'Mažmeninė prekyba',
        'Shipping' => 'Pristatymas',
        'Technology' => 'Technologijos',
        'Telecommunications' => 'Telekomunikacijos',
        'Transportation' => 'Transportavimas',
        'Utilities' => 'Komunalinės paslaugos',
        'Other' => 'Kiti',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Aktyvūs pardavimai',
        'Existing Customer' => 'Esamas klientas',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Darbuotojas',
        'Partner' => 'Partneris',
        'Public Relations' => 'Viešieji ryšiai',
        'Direct Mail' => 'Tiesioginis paštas',
        'Conference' => 'Konferencija',
        'Trade Show' => 'Paroda',
        'Web Site' => 'Tinklapis',
        'Word of mouth' => 'Rekomendacija',
        'Email' => 'el.paštas',
        'Campaign' => 'Kampanija',
        'Other' => 'Kiti',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Esamas verslas',
        'New Business' => 'Naujas verslas',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Pajamos',
        'Investment' => 'Investicijos',
        'Expected_Revenue' => 'Tikėtosios pajamos',
        'Budget' => 'Biudžetas',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Verslo sprendimo priėmėjas',
        'Business Evaluator' => 'Verslo įvertintojas',
        'Technical Decision Maker' => 'Techninis sprendimo priėmėjas',
        'Technical Evaluator' => 'Techninis įvertintojas',
        'Executive Sponsor' => 'Vadovaujantis rėmėjas',
        'Influencer' => 'Įtakotojas',
        'Other' => 'Kiti',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Alternatyvus kontaktas',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '15 dienų',
        'Net 30' => '30 dienų',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kvalifikacija',
        'Needs Analysis' => 'Poreikių analizė',
        'Value Proposition' => 'Pasiūlymo vertė',
        'Id. Decision Makers' => 'Identifikuoti sprendimų priėmėjai',
        'Perception Analysis' => 'Suvokimo analizė',
        'Proposal/Price Quote' => 'Pasiūlymo/Kainos paskaičiavimas',
        'Negotiation/Review' => 'Derybos/Apžvalga',
        'Closed Won' => 'Sudarytas sandoris',
        'Closed Lost' => 'Nesėkmingas sandoris',
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
        'Call' => 'Skambutis',
        'Meeting' => 'Susitikimas',
        'Task' => 'Užduotis',
        'Email' => 'el.paštas',
        'Note' => 'Aprašymas',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'P.',
        'Ms.' => 'Ms.',
        'Mrs.' => 'Ponia.',
        'Miss' => 'Praleisti',
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
        60 => '1 minutę prieš',
        300 => '5 minučių prieš',
        600 => '10 minučių prieš',
        900 => '15 minučių prieš',
        1800 => '30 minučių prieš',
        3600 => '1 valandos prieš',
        7200 => '2 valandas prieš',
        10800 => '3 valandas prieš',
        18000 => '5 valandas prieš',
        86400 => '1 diena prieš',
    ),

    'task_priority_default' => 'Vidutinis',
    'task_priority_dom' => array(
        'High' => 'Aukštas',
        'Medium' => 'Vidutinis',
        'Low' => 'Žemas',
    ),
    'task_status_default' => 'Nepradėta',
    'task_status_dom' => array(
        'Not Started' => 'Nepradėta',
        'In Progress' => 'Progrese',
        'Completed' => 'Baigta',
        'Pending Input' => 'Pristabdytas',
        'Deferred' => 'Atidėtas',
    ),
    'meeting_status_default' => 'Planuotas',
    'meeting_status_dom' => array(
        'Planned' => 'Planuotas',
        'Held' => 'Įvykęs',
        'Not Held' => 'Neįvykęs',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Kiti',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planuotas',
    'call_status_dom' => array(
        'Planned' => 'Planuotas',
        'Held' => 'Įvykęs',
        'Not Held' => 'Neįvykęs',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Ateinantis',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Naujas',
        'Assigned' => 'Priskirtas',
        'In Process' => 'Vykdomas',
        'Converted' => 'Konvertuotas',
        'Recycled' => 'Atnaujintas',
        'Dead' => 'Netinkamas',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Aukštas',
        'P2' => 'Vidutinis',
        'P3' => 'Žemas',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Paprastas vartotojas',
        'Administrator' => 'Administratorius',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktyvu',
        'Inactive' => 'Neaktyvu',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'El. pašto kodas',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktyvu',
        'Terminated' => 'Nutrauktas',
        'Leave of Absence' => 'Ne darbe',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Aukštas',
        'Medium' => 'Vidutinis',
        'Low' => 'Žemas',
    ),
    'project_task_priority_default' => 'Vidutinis',

    'project_task_status_options' => array(
        'Not Started' => 'Nepradėta',
        'In Progress' => 'Progrese',
        'Completed' => 'Baigta',
        'Pending Input' => 'Pristabdytas',
        'Deferred' => 'Atidėtas',
    ),
    'project_task_utilization_options' => array(
        '0' => 'tuščia',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Eskizas',
        'In Review' => 'Peržiūrimas',
        'Underway' => 'Vykdomi',
        'On_Hold' => 'Sulaikyta',
        'Completed' => 'Baigta',
    ),
    'project_status_default' => 'Eskizas',

    'project_duration_units_dom' => array(
        'Days' => 'Dienos',
        'Hours' => 'Valanda',
    ),

    'activity_status_type_dom' => array(
        '' => '--Tuščia--',
        'active' => 'Aktyvu',
        'inactive' => 'Neaktyvu',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Naudotojai',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Klientas',
        'Opportunities' => 'Pardavimas',
        'Cases' => 'Atvejis',
        'Leads' => 'Galimybė',
        'Contacts' => 'Adresatas', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Klaida',
        'Project' => 'Projektas',

        'Prospects' => 'Tikslas',
        'ProjectTask' => 'Projekto užduotys',

        'Tasks' => 'Užduotis',

        'AOS_Contracts' => 'Sutartis',
        'AOS_Invoices' => 'Sąskaita',
        'AOS_Quotes' => 'Kvota',
        'AOS_Products' => 'Prekė',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Klientas',
        'Contacts' => 'Adresatas',
        'Opportunities' => 'Pardavimas',
        'Campaigns' => 'Kampanija',
        'Tasks' => 'Užduotis',
        'Emails' => 'el.paštas',

        'Bugs' => 'Klaida',
        'Project' => 'Projektas',
        'ProjectTask' => 'Projekto užduotys',
        'Prospects' => 'Tikslas',
        'Cases' => 'Atvejis',
        'Leads' => 'Galimybė',

        'Meetings' => 'Susitikimas',
        'Calls' => 'Skambutis',

        'AOS_Contracts' => 'Sutartis',
        'AOS_Invoices' => 'Sąskaita',
        'AOS_Quotes' => 'Kvota',
        'AOS_Products' => 'Prekė',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Klientas',
        'Contacts' => 'Adresatas',
        'Tasks' => 'Užduotis',
        'Opportunities' => 'Pardavimas',

        'Bugs' => 'Klaida',
        'Cases' => 'Atvejis',
        'Leads' => 'Galimybė',

        'Project' => 'Projektas',
        'ProjectTask' => 'Projekto užduotys',

        'Prospects' => 'Tikslas',

        'AOS_Contracts' => 'Sutartis',
        'AOS_Invoices' => 'Sąskaita',
        'AOS_Quotes' => 'Kvota',
        'AOS_Products' => 'Prekė',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Pasiūlymai',
        'AOS_Invoices' => 'Sąskaitos',
        'AOS_Contracts' => 'Sutartys',
    ),
    'issue_priority_default_key' => 'Vidutinis',
    'issue_priority_dom' => array(
        'Urgent' => 'Skubus',
        'High' => 'Aukštas',
        'Medium' => 'Vidutinis',
        'Low' => 'Žemas',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Patvirtintas',
        'Duplicate' => 'Dubliuoti',
        'Closed' => 'Uždarytas',
        'Out of Date' => 'Pasibaigęs galiojimas',
        'Invalid' => 'Neteisingas',
    ),

    'issue_status_default_key' => 'Naujas',
    'issue_status_dom' => array(
        'New' => 'Naujas',
        'Assigned' => 'Priskirtas',
        'Closed' => 'Uždarytas',
        'Pending' => 'Laukiama',
        'Rejected' => 'Atmestas',
    ),

    'bug_priority_default_key' => 'Vidutinis',
    'bug_priority_dom' => array(
        'Urgent' => 'Skubus',
        'High' => 'Aukštas',
        'Medium' => 'Vidutinis',
        'Low' => 'Žemas',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Patvirtintas',
        'Duplicate' => 'Dubliuoti',
        'Fixed' => 'Nekintanti kaina',
        'Out of Date' => 'Pasibaigęs galiojimas',
        'Invalid' => 'Neteisingas',
        'Later' => 'Vėliau',
    ),
    'bug_status_default_key' => 'Naujas',
    'bug_status_dom' => array(
        'New' => 'Naujas',
        'Assigned' => 'Priskirtas',
        'Closed' => 'Uždarytas',
        'Pending' => 'Laukiama',
        'Rejected' => 'Atmestas',
    ),
    'bug_type_default_key' => 'Klaida',
    'bug_type_dom' => array(
        'Defect' => 'Defektas',
        'Feature' => 'Savybė',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administravimas',
        'Product' => 'Prekė',
        'User' => 'Vartotojas',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Vidinis',
        'Forum' => 'Forumas',
        'Web' => 'Tinklapis',
        'InboundEmail' => 'el.paštas',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Naudotojai',
        'Activities' => 'Įvykiai',
        'Bugs' => 'Klaidos',
        'Calendar' => 'Kalendorius',
        'Calls' => 'Skambučiai',
        'Campaigns' => 'Kampanijos',
        'Cases' => 'Atvejai',
        'Contacts' => 'Kontaktas',
        'Currencies' => 'Valiutos',
        'Dashboard' => 'Prietaisų skydas',
        'Documents' => 'Dokumentai',
        'Emails' => 'el.laiškai',
        'Feeds' => 'Informacijos santraukos',
        'Forecasts' => 'Prognozės',
        'Help' => 'Pagalba',
        'Home' => 'Pradžia',
        'Leads' => 'Potencialus kontaktas',
        'Meetings' => 'Susitikimai',
        'Notes' => 'Užrašai',
        'Opportunities' => 'Galimybės',
        'Outlook Plugin' => 'Outlook įskiepis',
        'Projects' => 'Projektai',
        'Quotes' => 'Pasiūlymai',
        'Releases' => 'Versijos',
        'RSS' => 'RSS',
        'Studio' => 'Studija',
        'Upgrade' => 'Atnaujinimai',
        'Users' => 'Vartotojas',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planuojamas',
        'Active' => 'Aktyvu',
        'Inactive' => 'Neaktyvu',
        'Complete' => 'Baigta',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Telepardavimai',
        'Mail' => 'Paštas',
        'Email' => 'el.paštas',
        'Print' => 'Spausdinti',
        'Web' => 'Tinklapis',
        'Radio' => 'Radijas',
        'Television' => 'Televizija',
        'NewsLetter' => 'Naujienlaiškis',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Savaitinis',
        'Monthly' => 'Mėnesinis',
        'Quarterly' => 'Ketvirtinis',
        'Annually' => 'Metinis',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Sausis',
        '2' => 'Vasaris',
        '3' => 'Kovas',
        '4' => 'Balandis',
        '5' => 'Gegužė',
        '6' => 'Birželis',
        '7' => 'Liepa',
        '8' => 'Rugpjūtis',
        '9' => 'Rugsėjis',
        '10' => 'Spalis',
        '11' => 'Lapkritis',
        '12' => 'Gruodis',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Sau',
        '2' => 'Vas',
        '3' => 'Kov',
        '4' => 'Bal',
        '5' => 'Gegužė',
        '6' => 'Bir',
        '7' => 'Lie',
        '8' => 'Rugp',
        '9' => 'Rugs',
        '10' => 'Spa',
        '11' => 'Lap',
        '12' => 'Gru',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Sekmadienis',
        '2' => 'Pirmadienis',
        '3' => 'Antradienis',
        '4' => 'Trečiadienis',
        '5' => 'Ketvirtadienis',
        '6' => 'Penktadienis',
        '7' => 'Šeštadienis',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Sek',
        '2' => 'Pir',
        '3' => 'Ant',
        '4' => 'Tre',
        '5' => 'Ket',
        '6' => 'Pen',
        '7' => 'Šeš',
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
        'personal' => 'Asmeninis',
        'group' => 'Grupės',
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
        'personal' => 'Asmeninis',
        'group' => 'Grupės',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Asmeninis',
        'group' => 'Grupės',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Asmeninis',
        'group' => 'Grupės',
        'system' => 'Sistema',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktyvu',
        'Inactive' => 'Neaktyvu',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Išsiųstas',
        'archived' => 'Archyvuotas',
        'draft' => 'Eskizas',
        'inbound' => 'Ateinantis',
        'campaign' => 'Kampanija',
    ),
    'dom_email_status' => array(
        'archived' => 'Archyvuotas',
        'closed' => 'Uždarytas',
        'draft' => 'Eskizas',
        'read' => 'Perskaitytas',
        'replied' => 'Atsakyta',
        'sent' => 'Išsiųstas',
        'send_error' => 'Klaida siunčiant',
        'unread' => 'Neskaityti',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archyvuotas',
    ),

    'dom_email_server_type' => array(
        '' => '--Tuščia--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Tuščia--',
        'createcase' => 'Sukurti aptarnavimą',
        'bounce' => 'Nepasiekusių laiškų valdymas',
    ),
    'dom_email_distribution' => array(
        '' => '--Tuščia--',
        'direct' => 'Tiesioginis priskyrimas',
        'roundRobin' => 'Rato (Round-Robin)',
        'leastBusy' => 'Paskutinis-užimtas',
    ),
    'dom_email_errors' => array(
        1 => 'Pasirinkite tik viena vartotoją parisirenkant Tiesiogiai priskiriamus elementus.',
        2 => 'Tiesioginio susiejimo metu Jūs galite susieti tik pažymėtus elementus.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Yes',
        'bool_false' => '--Tuščia--',
    ),
    'dom_int_bool' => array(
        1 => 'Yes',
        0 => '--Tuščia--',
    ),
    'dom_switch_bool' => array(
        'on' => 'Yes',
        'off' => '--Tuščia--',
        '' => '--Tuščia--',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM el.pašto klientas',
        'mailto' => 'Išorinis pašto klientas',
    ),

    'dom_editor_type' => array(
        'none' => 'Tiesioginis HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaika',
    ),

    'dom_email_editor_option' => array(
        '' => 'El. pašto formatas pagal nutylėjimą',
        'html' => 'HTML laiškas',
        'plain' => 'Paprastas tekstinis laiškas',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Paskutinį kartą nebuvo įvykdyta',
        'ready' => 'Pasiruošęs',
        'in progress' => 'Progrese',
        'failed' => 'Nepavyko',
        'completed' => 'Baigta',
        'no curl' => 'Nepaleista: Nėra cURL',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktyvu',
        'Inactive' => 'Neaktyvu',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutės',
        'hour' => 'Valanda',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketingas',
        'Knowledege Base' => 'Žinių bazė',
        'Sales' => 'Pardavimai',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archyvuotas',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Rinkodaros resursai',
        'Product Brochures' => 'Prekės bukletai',
        'FAQ' => 'DUK',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktyvu',
        'Draft' => 'Eskizas',
        'FAQ' => 'DUK',
        'Expired' => 'Pasibaigęs galiojimas',
        'Under Review' => 'Peržiūrimas',
        'Pending' => 'Laukiama',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'El. paštas apjungiamas',
        'eula' => 'EULA',
        'nda' => 'NDA ',
        'license' => 'Licencijos sutartis',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Pavirtinti',
        'decline' => 'Atmesti',
        'tentative' => 'Neapsisprendęs',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Patvirtintas',
        'decline' => 'Atmestas',
        'tentative' => 'Neapsisprendęs',
        'none' => 'Nėra',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Nėra',
        'Daily' => 'Kasdieninis',
        'Weekly' => 'Savaitinis',
        'Monthly' => 'Mėnesinis',
        'Yearly' => 'Kas metus',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'diena(os)',
        'Weekly' => 'savaite(ės)',
        'Monthly' => 'mėnuo(iai)',
        'Yearly' => 'metai(s)',
    ),

    'duration_dom' => array(
        '' => 'Nėra',
        '900' => '15 minučių',
        '1800' => '30 minučių',
        '2700' => '45 minučių',
        '3600' => '1 valandą',
        '5400' => '1,5 valandos',
        '7200' => '2 valandas',
        '10800' => '3 valandas',
        '21600' => '6 valandas',
        '86400' => '1 diena',
        '172800' => '2 dienas',
        '259200' => '3 dienas',
        '604800' => '1 savaitė',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Numatytasis',
        'seed' => 'Pirminis',
        'exempt_domain' => 'Atsisakiusių sąrašas - Pagal domeną',
        'exempt_address' => 'Atsisakiusių sąrašas - Pagal el. pašto adresą',
        'exempt' => 'Atsisakiusių sąrašas - Pagal Id',
        'test' => 'Testas',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktyvu',
        'inactive' => 'Neaktyvu',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Laiškas išsiųstas',
        'send error' => 'Nepasiekė adresato',
        'invalid email' => 'Neteisingas pašto adresas',
        'link' => 'Paspaudė nuorodą',
        'viewed' => 'Pažiūrėjo laišką',
        'removed' => 'Atsisakė',
        'lead' => 'Potencialūs kontaktai sukurti',
        'contact' => 'Kontaktas sukurtas',
        'blocked' => 'Įtrauktas į nesiunčiamų adresų ar domenų sąrašą',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontaktas',
        'Users' => 'Vartotojas',
        'Prospects' => 'Adresatai',
        'Leads' => 'Potencialus kontaktas',
        'Accounts' => 'Naudotojai',
    ),
    'merge_operators_dom' => array(
        'like' => 'Turi',
        'exact' => 'Tiksliai',
        'start' => 'Prasideda su',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Yes',
        'false' => '--Tuščia--',
        'required' => 'Reikiamas',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Išjungtas',
        1 => 'Įjungtas',
        2 => 'Filtras',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Aukštas',
        'medium' => 'Vidutinis',
        'low' => 'Žemas',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Nepradėta',
        'inprogress' => 'Progrese',
        'completed' => 'Baigta',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Išskleisti legendą',
        'collapselegend' => 'Suskleisti legendą',
        'clickfordrilldown' => 'Paspauskite galimas reikšmes',
        'detailview' => 'Detaliau...',
        'piechart' => 'Pyrago grafikas',
        'groupchart' => 'Grupės grafikas',
        'stackedchart' => 'Stack grafikas',
        'barchart' => 'Juostinis grafikas',
        'horizontalbarchart' => 'Horizontalus grafikas',
        'linechart' => 'Linijinis grafikas',
        'noData' => 'Nėra duomenų',
        'print' => 'Spausdinti',
        'pieWedgeName' => 'sekcijos',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktyvu',
        'Inactive' => 'Neaktyvu',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Viengubos kabutės (&#39;)',
        '"' => 'Dvigubos kabutės (&#34;)',
        '' => 'Nėra',
        'other' => 'Kiti:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Kiti:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Naujame lange',
        '_self' => 'Tame pačiame lange',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Niekada',
        '30' => 'kas 30 sekundžių',
        '60' => 'Kas 1 minutę',
        '180' => 'Kas 3 minutes',
        '300' => 'Kas 5 minutes',
        '600' => 'Kas 10 minučių',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Niekada',
        '30' => 'kas 30 sekundžių',
        '60' => 'Kas 1 minutę',
        '180' => 'Kas 3 minutes',
        '300' => 'Kas 5 minutes',
        '600' => 'Kas 10 minučių',
    ),
    'date_range_search_dom' => array(
        '=' => 'Lygus',
        'not_equal' => 'Nėra lygus',
        'greater_than' => 'Po',
        'less_than' => 'Prieš',
        'last_7_days' => 'Praėjusias 7 dienas',
        'next_7_days' => 'Kitas 7 dienas',
        'last_30_days' => 'Praėjusias 30 dienų',
        'next_30_days' => 'Kitas 30 dienų',
        'last_month' => 'Praėjusį mėnesį',
        'this_month' => 'Šį mėnesį',
        'next_month' => 'Kita mėnesį',
        'last_year' => 'Praėjusiais metais',
        'this_year' => 'Šiais metais',
        'next_year' => 'Kiti metai',
        'between' => 'Yra tarp',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Lygus',
        'not_equal' => 'Nėra lygus',
        'greater_than' => 'Daugiau nei',
        'greater_than_equals' => 'Daugiau nei arba Lygu',
        'less_than' => 'Mažiau nei',
        'less_than_equals' => 'Mažiau nei arba Lygu',
        'between' => 'Yra tarp',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopijuoti',
        'move' => 'Perkelti',
        'donothing' => 'Nieko Nedaryti',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Paieškos rezultatai',
    'ERR_SEARCH_INVALID_QUERY' => 'Atliekant paiešką įvyko klaida. Galimai yra neteisinga paieškos sintaksė.',
    'ERR_SEARCH_NO_RESULTS' => 'Nėra atitikimų paieškos kriterijų. Pabandikite išplėsti paieškos kriterijus.',
    'LBL_SEARCH_PERFORMED_IN' => 'Paieška atlikta per',
    'LBL_EMAIL_CODE' => 'El. pašto kodas:',
    'LBL_SEND' => 'Siųsti',
    'LBL_LOGOUT' => 'Atsijungti',
    'LBL_TOUR_NEXT' => 'Kita',
    'LBL_TOUR_SKIP' => 'Praleisti',
    'LBL_TOUR_BACK' => 'Atgal',
    'LBL_TOUR_TAKE_TOUR' => 'Pasirinkti Vedlį',
    'LBL_MOREDETAIL' => 'Išsamiau' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Redaguoti įdėtąjį' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Peržiūrėti' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtras' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Įdėti' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Pridėti el. pašto adresą' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Slėpti/Rodyti' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Ištrinti' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Išvalyti' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Išmesti' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Ištrinti el. pašto adresą' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Atsisakyti',
    'LBL_ID_FF_INVALID' => 'Padaryti negaliojančiu',
    'LBL_ADD' => 'Įdėti' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Įmonės logotipas' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Prisijungimai Iššokančių Langų',
    'LBL_CLOSEINLINE' => 'Užbaigti',
    'LBL_VIEWINLINE' => 'Peržiūrėti',
    'LBL_INFOINLINE' => 'Informacija',
    'LBL_PRINT' => 'Spausdinti',
    'LBL_HELP' => 'Pagalba',
    'LBL_ID_FF_SELECT' => 'Pasirinkite',
    'DEFAULT' => 'Bazinis',
    'LBL_SORT' => 'Rikiuoti',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Įjungti SMTP su SSL arba TLS?',
    'LBL_NO_ACTION' => 'Nėra veiksmo šiuo vardu: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Nėra galimų veiksmų.',
    'LBL_NO_DATA' => 'Nėra duomenų',

    'LBL_ROUTING_FLAGGED' => 'Vėliavėlė uždėta',
    'LBL_ROUTING_TO' => 'į',
    'LBL_ROUTING_TO_ADDRESS' => 'adresu',
    'LBL_ROUTING_WITH_TEMPLATE' => 'su šablonu',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Šiuo metu telefono ir adreso laukai yra užpildyti. Jei norite jas užrašyti ant viršaus su pasirinkto kliento reikšmėmis, paspauskite "Gerai". Jei nenorite daryti jokių pakeitimų, spauskite "Atšaukti".',
    'LBL_DROP_HERE' => '[Mesti čia]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Užpildyti Gmail numatytais',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Vardas',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Išeinančio pašto serverio nustatymai',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP Slaptažodis',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP portas:',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP serveris',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP vartotojo vardas',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Numatytasis',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Perspėjimas: Trūksta išeinančio pašto kliento vardo ir slaptažodžio.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Nustatyti pašto klientus, kad būtų galima peržiūrėti gautus laiškus.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Nurodyti SMTP pašto serverio nustatymus, kad būtų galima išsiųsti laiškus.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Atlikta',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Išvalyti',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Kam:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Kam/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'El. pašto adresas',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtras',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Vardas',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Adresas nerastas',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Išsaugoti ir pridėti prie adresų knygos',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Pasirinkti laiško gavėjus',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresų knyga',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Įspėjimas! Išeinantis pašto klientas yra susijęs su įeinančiu klientu. Ar Jūs vis tiek norite ištrinti išeinantį klientą?',
    'LBL_EMAIL_ADDRESSES' => 'el.paštas',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'El. pašto adresas',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Patvirtinote, kad sutinkate su privatumo politika naudojant el. pašto adresą: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Nepavyko patvirtinti el. pašto adreso',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importuoti į SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Priskyrimas',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Prisegti',
    'LBL_EMAIL_ATTACHMENT' => 'Prisegti',
    'LBL_EMAIL_ATTACHMENTS' => 'Prisegti failus',
    'LBL_EMAIL_ATTACHMENTS2' => 'Iš SuiteCRM dokumentų',
    'LBL_EMAIL_ATTACHMENTS3' => 'Šabloniniai prisegtukai',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Failo pavadinimas',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumentas',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Atšaukti',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Koduotės nustatymas',
    'LBL_EMAIL_CHECK' => 'Tikrinti paštą',
    'LBL_EMAIL_CHECKING_NEW' => 'Tikrinama ar yra naujų laiškų',
    'LBL_EMAIL_CHECKING_DESC' => 'Prašome palaukti.... <br><br>Jeigu tai yra pirmasis pašto tikrinimas, tai gali užtrukti.',
    'LBL_EMAIL_CLOSE' => 'Užbaigti',
    'LBL_EMAIL_COFFEE_BREAK' => 'Tikrinama yra naujų laiškų. <br><br>Dideli pašto klientai gali užtrukti daug laiko.',

    'LBL_EMAIL_COMPOSE' => 'el.paštas',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Prašome šiam laiškui įvesti gavėją(-us).',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Šio laiško turinys yra tuščias. Vis tiek siųsti?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Šis laiškas neturi temos. Vis tiek siųsti?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(nėra pavadinimo)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Prašome įvesti galiojantį pašto adresatą To, CC ir BCC laukams',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Atsisakyti šio laiško?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Ar Jūs tikrai norite ištrinti šį parašą?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Laiškas išsiųstas',

    'LBL_EMAIL_CREATE_NEW' => '--Sukurti saugojimo metu--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Daugialypis',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tuščias',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Išsiuntimo data',
    'LBL_EMAIL_DATE_TODAY' => 'Šiandien',
    'LBL_EMAIL_DELETE' => 'Ištrinti',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Ištrinti pasirinktas žinutes?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Laiškas ištrintas sėkmingai.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Žinutė trinama',
    'LBL_EMAIL_DETAILS' => 'Detalės',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Tik pirminiai adresai bus naudojami dirbant su kontaktais.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Išvalomos šiukšlės',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Trinamas išsiuntimo serveris',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Išvalomi kešo failai',
    'LBL_EMAIL_EMPTY_MSG' => 'Elektroninių laiškų nėra.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'El. pašto adresų nėra.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Katalogo pavadinimas turi būti unikalus ir negali būti tuščias. Prašome pabandyti dar kartą.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Katalogo trynimas nėra galimas. Katalogas arba jo sub-katalogas turi susietą pašto dėžutę.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Iš šio konteksto negalima nustatyti katalogo. Bandykite dar kartą.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Prašome patikrinti nustatymus.',
    'LBL_EMAIL_ERROR_DESC' => 'Aptiktos klaidos:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Jūs neturite teisės prieiti. Susisiekite su administratoriumi, kad gauti leidimą',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM katalogų pavadinimai turi būti unikalūs.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Prašome įvesti paieškos kriterijus.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Klaida',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Žinutė išmesta iš serverio',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Arba žinutė išmesta iš serverio arba perkelta į skirtingą katalogą',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Prisijungimas prie pašto serverio nepavyko. Prašome susisiekti su Jūsų administratoriumi',
    'LBL_EMAIL_ERROR_MOVE' => 'Laiškų perkėlimas tarp serverių ar pašto klientų šiuo metu negalimas.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Perkėlimo klaida',
    'LBL_EMAIL_ERROR_NAME' => 'Privalomas vardas.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Siuntėjo adresas yra privalomas.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Prašome nurodyti failą.',
    'LBL_EMAIL_ERROR_SERVER' => 'Pašto serverio adresas privalomas.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Pašto klientas gali būti kad neišsisaugojo.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Įvyko klaida komunikuojant su pašto serveriu.',
    'LBL_EMAIL_ERROR_USER' => 'Prisijungimo vardas reikalingas',
    'LBL_EMAIL_ERROR_PORT' => 'Pašto serverio portas yra privalomas.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Serverio protokolas reikalingas.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Stebimas katalogas reikalingas.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Šiukšlių katalogas reikalingas.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Ši informacija negalima',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nenustatytas išeinantis pašto serveris.',
    'LBL_EMAIL_ERROR_SENDING' => 'Siunčiant el. laišką įvyko klaida. Kreipkitės pagalbos į administratorių.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Katalogai',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Įdėti',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Pridėti naują katalogą',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Pervadinti katalogą',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Saugoti',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Pridėti šį katalogą į',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Šis katalogas negali būti pakeistas',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Ar tikrai norite ištrinti šį katalogą?\n Šis procesas negali būti atstatytas.\n Katalogo ištrynimas paveiks visus kitus katalogus esančius šiame kataloge.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Naujas katalogo pavadinimas',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Prašome pasirinkti katalogą prieš atliekant šį veiksmą.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Katalogų valdymas',

    'LBL_EMAIL_FORWARD' => 'Peradresuoti',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Nukrauta [[count]] iš [[total]] laiškų',
    'LBL_EMAIL_FROM' => 'Nuo',
    'LBL_EMAIL_GROUP' => 'grupės',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupės',
    'LBL_EMAIL_HOME_FOLDER' => 'Pradžia',
    'LBL_EMAIL_IE_DELETE' => 'Trinamas pašto klientas',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Trinamas parašas',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Ar tikrai norite ištrinti šį pašto klientą?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Sėkmingai ištrynė.',
    'LBL_EMAIL_IE_SAVE' => 'Saugojama pašto kliento informacija',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importuojamas laiškas',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importuoti į SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importavimo nustatymai',
    'LBL_EMAIL_INVALID' => 'Neteisingas',
    'LBL_EMAIL_LOADING' => 'Kraunasi...',
    'LBL_EMAIL_MARK' => 'Pažymėti',
    'LBL_EMAIL_MARK_FLAGGED' => 'Su vėliavėle',
    'LBL_EMAIL_MARK_READ' => 'Kaip skaitytą',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Be vėliavėlės',
    'LBL_EMAIL_MARK_UNREAD' => 'Kaip neskaitytą',
    'LBL_EMAIL_ASSIGN_TO' => 'Priskirti',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Sukurti katalogą',
    'LBL_EMAIL_MENU_COMPOSE' => 'Rašyti kam',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Trinti katalogą',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Ištuštinti šiukšles',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sinchronizuoti',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Išvalyti kešo failus',
    'LBL_EMAIL_MENU_REMOVE' => 'Išmesti',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Pervadinti katalogą',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Pervadinamas katalogas',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Prašome pasirinkti prieš atliekant operaciją.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Sukurti katalogą (nuotolinį ar SuiteCRM sistemoje)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Ištrinti katalogą (nutolusį ar SuiteCRM sistemoje)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Ištuština Jūsų pašto kliento visus šiukšlių katalogus',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Pažymėti šiuos laiškus kaip skaitytus',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Pažymėti šiuos laiškus be vėliavėles',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Pervadinti katalogą (nutolusį ar SuiteCRM sistemoje)',

    'LBL_EMAIL_MESSAGES' => 'žinutės',

    'LBL_EMAIL_ML_NAME' => 'Sąrašo pavadinimas',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Pasirinkti sąrašo adresai',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Galimi sąrašo adresai',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Spustelėkite</b> kad pažymėti keletą<br />(Mac vartotojai naudokite <b>CMD-Spustelėkite</b>)',

    'LBL_EMAIL_NO' => '--Tuščia--',
    'LBL_EMAIL_NOT_SENT' => 'Sistema nesugebėjo įvykdyti Jūsų užklausos. Prašome susisiekti su administratoriumi.',

    'LBL_EMAIL_OK' => 'GERAI',
    'LBL_EMAIL_ONE_MOMENT' => 'Prašome palaukti...',
    'LBL_EMAIL_OPEN_ALL' => 'Atidaryti kelias žinutes',
    'LBL_EMAIL_OPTIONS' => 'Pasirinkimai',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Greitas sukūrimas',
    'LBL_EMAIL_OPT_OUT' => 'Atsisakė',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Atsisakytas ir netinkamas',
    'LBL_EMAIL_PERFORMING_TASK' => 'Atliekama užduotis',
    'LBL_EMAIL_PRIMARY' => 'Pagrindinis',
    'LBL_EMAIL_PRINT' => 'Spausdinti',

    'LBL_EMAIL_QC_BUGS' => 'Klaida',
    'LBL_EMAIL_QC_CASES' => 'Atvejis',
    'LBL_EMAIL_QC_LEADS' => 'Galimybė',
    'LBL_EMAIL_QC_CONTACTS' => 'Adresatas',
    'LBL_EMAIL_QC_TASKS' => 'Užduotis',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Pardavimas',
    'LBL_EMAIL_QUICK_CREATE' => 'Greitas sukūrimas',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Pertvarkyti katalogus',
    'LBL_EMAIL_RELATE_TO' => 'Susijęs',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Rodyti ryšius',
    'LBL_EMAIL_RECORD' => 'El. pašto įrašas',
    'LBL_EMAIL_REMOVE' => 'Išmesti',
    'LBL_EMAIL_REPLY' => 'Atsakyta',
    'LBL_EMAIL_REPLY_ALL' => 'Atsakyti visiems',
    'LBL_EMAIL_REPLY_TO' => 'Atsakyti-kam',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Gaunama žinutė',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'El. pašto įrašas ieškomas',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Prašome pasirinkti tik vieną el. pašto įrašą',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Grįžti į ankstesnį modulį?',
    'LBL_EMAIL_REVERT' => 'Sugrįžti',
    'LBL_EMAIL_RELATE_EMAIL' => 'Susieti laišką',

    'LBL_EMAIL_RULES_TITLE' => 'Taisyklių valdymas',

    'LBL_EMAIL_SAVE' => 'Saugoti',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Saugoti ir atsakyti',
    'LBL_EMAIL_SAVE_DRAFT' => 'Saugoti juodraštį',
    'LBL_EMAIL_DRAFT_SAVED' => 'Juodraštis buvo išsaugotas',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Data nuo',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Data iki',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Pagal pasirinktą kriterijų rezultatų nėra.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Paieškos rezultatai',

    'LBL_EMAIL_SELECT' => 'Pasirinkite',

    'LBL_EMAIL_SEND' => 'Siųsti',
    'LBL_EMAIL_SENDING_EMAIL' => 'Siunčiamas el. paštas',

    'LBL_EMAIL_SETTINGS' => 'Nustatymai',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Pašto dėžutės',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Išvalyti formą',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Tikrinti el. paštą',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Siuntėjo adresas',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Pašto adresas skirtas testo pranešimui:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Siuntėjo vardas:',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Atsakyti į adresą',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sinchronizuoti visus pašto klientus',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Buvo išsiųsta žinutė Jūsų nurodytu el. pašto adresu naudojant nurodytus siunčiamo el. pašto nustatymus. Prašome patikrinti ar gavote žinutę norėdami įsitikinti ar naudojami nustatymai yra teisingi.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Peržiūrekite pilną SMTP žurnalą',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Atlikti pilna sinchronizacija ? \n dideliems pašto klientams, gali užimti kelias minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Paspauskite Shift klavišą arba  Ctrl klavišą, kad pasirinktumėte kelis katalogus',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Bendra',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Sukurti grupių katalogus',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Redaguoti grupės katalogą',

    'LBL_EMAIL_SETTINGS_NAME' => 'Vardas',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Šiems nustatymams gali reikėti atnaujinti puslapį, kad pradėtų veikti.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Gaunamas pašto klientas',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Nustatymai išsaugoti.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Siusti el. paštą kaip paprastą tekstą',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Laiškų skaičius puslapyje',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Vizualūs nustatymai',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Savybės',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Galimi vartotojo katalogai',
    'LBL_EMAIL_ERROR_PREPEND' => 'Elektroninio laiško siuntimo klaida:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Netinkamai nurodytas siunčiamo el. pašto serveris Jūsų naudojam el. pašto vartotojui. Patikrinkite nustatymus arba pasirinkite kitą serverį šiam vartotojui.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Nėra nustatytas išeinančio el. pašto serveris el. laiškų siuntimui. Prašome nustatyti siunčiamų el. laiškų serverio parametrus naudojamam el. pašto vartotojui naudojantis Nustatymai>>El. pašto vartotojas.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Numatytas parašas',
    'LBL_EMAIL_SIGNATURES' => 'Parašai',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! paštas',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Kiti',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Nuotolinis katalogas]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM katalogai]',
    'LBL_EMAIL_SUBJECT' => 'Tema:',
    'LBL_EMAIL_SUCCESS' => 'Sėkmingai',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM katalogas',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Pašto šablono turinys tuščias.',
    'LBL_EMAIL_TEMPLATES' => 'Šablonai',
    'LBL_EMAIL_TO' => 'Kam',
    'LBL_EMAIL_VIEW' => 'Peržiūrėti',
    'LBL_EMAIL_VIEW_HEADERS' => 'Rodyti antraštes',
    'LBL_EMAIL_VIEW_RAW' => 'Rodyti originalų formatą',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Ši savybė nepritaikyta, jeigu naudojatės POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Numatyta tekstinė nuoroda.',
    'LBL_EMAIL_YES' => 'Yes',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Siųsti testinį laišką',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testinis laiškas išsiųstas',
    'LBL_EMAIL_MESSAGE_NO' => 'Laiškas ne',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Importavimas pavyko',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importavimas nepavyko dėl galimo ankstesnio laiško importavimo arba jo ištrynimo iš serverio',

    'LBL_LINK_NONE' => 'Nėra',
    'LBL_LINK_ALL' => 'Visi susiję',
    'LBL_LINK_RECORDS' => 'Įrašai',
    'LBL_LINK_SELECT' => 'Pasirinkite',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Patvirtinti',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Ar tikrai norite uždaryti #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Neleistinas failo plėtinys',

    'ERR_AJAX_LOAD' => 'Įvyko klaida:',
    'ERR_AJAX_LOAD_FAILURE' => 'Įvyko klaida apdorojant jūsų prašymą, prašome pabandyti dar kartą vėliau.',
    'ERR_AJAX_LOAD_FOOTER' => 'Jei ši klaida kartojasi, prašome kreiptis į administratorių, kad išjungtų Ajax šiam moduliui',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Dešimtainis skirtukas negali  naudoti tokį patį simbolį kaip ir tūkstantinės skirtukas.\\n\\n Prašome pakeisti reikšmes.',
    'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas norint ištrinti kontaktą.',
    'ERR_EXPORT_DISABLED' => 'Eksportavimas išjungtas.',
    'ERR_EXPORT_TYPE' => 'Klaida eksportuojant',
    'ERR_INVALID_EMAIL_ADDRESS' => 'negalimas el. pašto adresas.',
    'ERR_INVALID_FILE_REFERENCE' => 'Neteisingas failo nurodymas',
    'ERR_NO_HEADER_ID' => 'Ši savybė negalima šiai temai.',
    'ERR_NOT_ADMIN' => 'Neautorizuotas priėjimas prie administracinės zonos.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Privalomi laukai:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Neteisingas privalomas laukas:',
    'ERR_INVALID_VALUE' => 'Neteisinga reikšmė:',
    'ERR_NO_SUCH_FILE' => 'Sistemoje failas nerastas',
    'ERR_NO_SINGLE_QUOTE' => 'Negalima naudoti viengubos kabutės',
    'ERR_NOTHING_SELECTED' => 'Prašome pasirinkti prieš tęsiant toliau.',
    'ERR_SELF_REPORTING' => 'Vartotojas negali būti pavaldus sau pačiam.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nėra atitikmens laukui:',
    'ERR_SQS_NO_MATCH' => 'Nėra atitikmens',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Prašome nurodyti raktą indeksą rodomuose parametrų atributuose dėl meta duomenų aprašymo',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Klaida: portalo pavadinimas priskirtas kitam kontaktui.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Lauko reikšmė neatitinka tikslumo vertės.',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Klaida saugant išorinį API',
    'ERR_NO_DB' => 'Neįmanoma prisijungti prie duomenų bazės. Prašome peržiūrėti SuiteCRM klaidų bylą, jeigu norite gauti daugiau informacijos.',
    'ERR_DB_FAIL' => 'Duomenų bazės klaida. Prašome peržiūrėti SuiteCRM klaidų bylą, jeigu norite gauti daugiau informacijos.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} bylos gali būti naudojamos tik su SuiteCRM {1} duomenų baze.',

    'LBL_ACCOUNT' => 'Klientas',
    'LBL_ACCOUNTS' => 'Naudotojai',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Rodyti santrauką',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Rodyti santrauką',
    'LBL_ADD_BUTTON' => 'Įdėti',
    'LBL_ADD_DOCUMENT' => 'Pridėti dokumentą',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Įtraukti į adresatų sąrašą',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Pridėti kontaktus į sąrašą',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Paspauskite, kad uždaryti',
    'LBL_ADDITIONAL_DETAILS' => 'Papildomos detalės',
    'LBL_ADMIN' => 'Administratorius',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archyvas',
    'LBL_ASSIGNED_TO_USER' => 'Priskirtas vartotojui',
    'LBL_ASSIGNED_TO' => 'Priskirtas:',
    'LBL_BACK' => 'Atgal',
    'LBL_BILLING_ADDRESS' => 'Sąskaita adresui',
    'LBL_QUICK_CREATE' => 'Sukurti ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Atviro Kodo KVS',
    'LBL_BUGS' => 'Klaidos',
    'LBL_BY' => '-',
    'LBL_CALLS' => 'Skambučiai',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Siųsti eilėje esančius kampanijos laiškus',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Prisijungti',
    'LBL_CASE' => 'Atvejis',
    'LBL_CASES' => 'Atvejai',
    'LBL_CHANGE_PASSWORD' => 'Slaptažodžio keitimas',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Visus pažymėti',
    'LBL_CITY' => 'Miestas:',
    'LBL_CLEAR_BUTTON_LABEL' => 'Išvalyti',
    'LBL_CLEAR_BUTTON_TITLE' => 'Išvalyti',
    'LBL_CLEARALL' => 'Išvalyti visus',
    'LBL_CLOSE_BUTTON_TITLE' => 'Užbaigti',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Užbaigti ir sukurti naują',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Užbaigti ir sukurti naują',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Kurti laišką',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Kurti laišką',
    'LBL_SEARCH_DROPDOWN_YES' => 'Yes',
    'LBL_SEARCH_DROPDOWN_NO' => '--Tuščia--',
    'LBL_CONTACT_LIST' => 'Kontaktų sąrašas',
    'LBL_CONTACT' => 'Adresatas',
    'LBL_CONTACTS' => 'Kontaktas',
    'LBL_CONTRACT' => 'Sutartis',
    'LBL_CONTRACTS' => 'Sutartys',
    'LBL_COUNTRY' => 'Šalis:',
    'LBL_CREATE_BUTTON_LABEL' => 'Sukurti',
    'LBL_CREATED_BY_USER' => 'Sukūrė vartotojas',
    'LBL_CREATED_USER' => 'Sukūrė vartotojas',
    'LBL_CREATED' => 'Sukūrė:',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Valiuta:',
    'LBL_DOCUMENTS' => 'Dokumentai',
    'LBL_DATE_ENTERED' => 'Sukūrimo data:',
    'LBL_DATE_MODIFIED' => 'Redagavimo data:',
    'LBL_EDIT_BUTTON' => 'Redaguoti',
    'LBL_DUPLICATE_BUTTON' => 'Dubliuoti',
    'LBL_DELETE_BUTTON' => 'Ištrinti',
    'LBL_DELETE' => 'Ištrinti',
    'LBL_DELETED' => 'Ištrintas',
    'LBL_DIRECT_REPORTS' => 'Pavaldiniai',
    'LBL_DONE_BUTTON_LABEL' => 'Atlikta',
    'LBL_DONE_BUTTON_TITLE' => 'Atlikta',
    'LBL_FAVORITES' => 'Mėgstamiausi',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Prašome pasirinkti vCard failą',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard neturi visus privalomus laukus šio modulio. Prašome kreiptis į sugarcrm.log daugiau informacijos.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Įkeltame faile viršija 30000 baitų ribą, kuris buvo nurodytas HTML formą.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Įvyko klaida įkeliant vCard failą. Prašome kreiptis į sugarcrm.log daugiau informacijos.',
    'LBL_IMPORT_VCARD' => 'Importuoti vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importuoti vizitinę kortelę',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importuoti vizitinę kortelę',
    'LBL_VIEW_BUTTON' => 'Peržiūrėti',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Siųsti kaip PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Siųsti kaip PDF',
    'LBL_EMAILS' => 'el.laiškai',
    'LBL_EMPLOYEES' => 'Darbuotojai',
    'LBL_ENTER_DATE' => 'Įvedimo data',
    'LBL_EXPORT' => 'Eksportas',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Eiti',
    'LBL_HIDE' => 'Slėpti',
    'LBL_ID' => 'Id',
    'LBL_IMPORT' => 'Importuoti',
    'LBL_IMPORT_STARTED' => 'Importavimas prasidėjo:',
    'LBL_LAST_VIEWED' => 'Paskutinį kartą žiūrėti',
    'LBL_LEADS' => 'Potencialus kontaktas',
    'LBL_LESS' => 'mažiau',
    'LBL_CAMPAIGN' => 'Kampanija:',
    'LBL_CAMPAIGNS' => 'Kampanijos',
    'LBL_CAMPAIGNLOG' => 'Kampanijos istorija',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanijos',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Nėra',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Rasta išleidimuose',
    'LBL_FIXED_IN_RELEASE' => 'Sutaisyta išleidimuose',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_ASSIGNED_USER' => 'Vartotojas',
    'LBL_LIST_CONTACT_NAME' => 'Kontakto vardas',
    'LBL_LIST_CONTACT_ROLE' => 'Kontakto Rolė',
    'LBL_LIST_DATE_ENTERED' => 'Sukurta',
    'LBL_LIST_EMAIL' => 'el.paštas',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_OF' => 'iš',
    'LBL_LIST_PHONE' => 'Telefonas',
    'LBL_LIST_RELATED_TO' => 'Susijęs su',
    'LBL_LIST_USER_NAME' => 'Vartotojas vardas',
    'LBL_LISTVIEW_NO_SELECTED' => 'Prašome pasirinkti mažiausiai 1 įrašą, kad galėtumėte tęsti.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Prašome pasirinkti mažiausiai 2 įrašus, kad galėtumėte tęsti.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Pasirinkti įrašai',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Pasirinkta:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Jonas',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Jonaitis',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Kodas beždžionė neįprasta',
    'LBL_CANCEL' => 'Atšaukti',
    'LBL_VERIFY' => 'Patikrinkite',
    'LBL_RESEND' => 'Siųsti iš naujo',
    'LBL_PROFILE' => 'Profilis',
    'LBL_MAILMERGE' => 'El. paštas apjungiamas',
    'LBL_MASS_UPDATE' => 'Masinis atnaujinimas',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nėra laukų Masinio Atnaujinimo operacijoje',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Nesiųsti į pagrindinį el. adresą',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Pasirinkite pirminį el. laišką',
    'LBL_MEETINGS' => 'Susitikimai',
    'LBL_MEETING_GO_BACK' => 'Grįžti į susitikimą',
    'LBL_MEMBERS' => 'Nariai',
    'LBL_MEMBER_OF' => 'Narys',
    'LBL_MODIFIED_BY_USER' => 'Redagavo vartotojas',
    'LBL_MODIFIED_USER' => 'Redagavo vartotojas',
    'LBL_MODIFIED' => 'Redagavo:',
    'LBL_MODIFIED_NAME' => 'Redaguotojo vardas',
    'LBL_MORE' => 'Daugiau',
    'LBL_MY_ACCOUNT' => 'Mano nustatymai',
    'LBL_NAME' => 'Vardas',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Sukurti',
    'LBL_NEW_BUTTON_TITLE' => 'Sukurti',
    'LBL_NEXT_BUTTON_LABEL' => 'Kita',
    'LBL_NONE' => '--Tuščia--',
    'LBL_NOTES' => 'Užrašai',
    'LBL_OPPORTUNITIES' => 'Galimybės',
    'LBL_OPPORTUNITY_NAME' => 'Pardavimo pavadinimas',
    'LBL_OPPORTUNITY' => 'Pardavimas',
    'LBL_OR' => 'ARBA',
    'LBL_PANEL_OVERVIEW' => 'Adresato informacija',
    'LBL_PANEL_ASSIGNMENT' => 'KITA',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Pagrindio tipas',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Pašto kodas:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Pagrindinio adreso miestas:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pirminis adresas šalis:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Pagrindinio adreso pašto kodas:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Pagrindinio adreso gyvenvietė:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Pirminis adresas gatvė 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Pirminis adresas gatvė 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Pagrindinio adreso gatvė:',
    'LBL_PRIMARY_ADDRESS' => 'Pagrindinio adresas:',

    'LBL_PROSPECTS' => 'Prospektas',
    'LBL_PRODUCTS' => 'Produktai',
    'LBL_PROJECT_TASKS' => 'Projekto užduotys',
    'LBL_PROJECTS' => 'Projektai',
    'LBL_QUOTES' => 'Pasiūlymai',

    'LBL_RELATED' => 'Susijęs',
    'LBL_RELATED_RECORDS' => 'Susiję įrašai',
    'LBL_REMOVE' => 'Išmesti',
    'LBL_REPORTS_TO' => 'Pavaldus kam',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indikuoja privalomus laukus',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Atlikta',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Pilna forma',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Pilna forma',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Išsaugoti ir sukurti naują',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Išsaugoti ir sukurti naują',
    'LBL_SAVE_OBJECT' => 'Įrašykite {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Paieška',
    'LBL_SEARCH_BUTTON_TITLE' => 'Paieška',
    'LBL_FILTER' => 'Filtras',
    'LBL_SEARCH' => 'Paieška',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'daugiau',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Netinkamas failo formatas, tik paveiksliuko tipo failus galima įkelti.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Pasirinkite',
    'LBL_SELECT_BUTTON_TITLE' => 'Pasirinkite',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Naršyti po dokumentus',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Naršyti po dokumentus',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Pasirinkti kontaktą',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Pasirinkti kontaktą',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Pasirinkti iš ataskaitų',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Pasirinkti ataskaitas',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Pasirinkti vartotoją',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Pasirinkti vartotoją',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Išvalyti pasirinkimus',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Išvalyti pasirinkimus',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Išvalyti pasirinkimus',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Išvalyti pasirinkimus',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Pasirinkti failą',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Pasirinkti failą',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Išvalyti failą',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Išvalyti failą',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Pasirinkti vartotoją',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Pasirinkti vartotoją',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Išvalyti Vartotoją',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Išvalyti Vartotoją',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Pasirinkite klientą',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Pasirinkite klientą',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Išvalyti paskyrą',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Išvalyti paskyrą',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Pasirinkti kampaniją',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Pasirinkti kampaniją',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Išvalyti kampaniją',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Išvalyti kampaniją',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Pasirinkti kontaktą',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Pasirinkti kontaktą',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Išvalyti kontaktą',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Išvalyti kontaktą',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Pasirinkti grupę',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Pasirinkti grupę',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Išvalyti grupę',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Išvalyti grupę',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resursai panaudoti sukuriant šį puslapį (užklausos, failai)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundės.',
    'LBL_SERVER_RESPONSE_TIME' => 'Serverio atsako laikas:',
    'LBL_SERVER_MEMORY_BYTES' => 'baitų',
    'LBL_SERVER_MEMORY_USAGE' => 'Serverio atminties naudojimas: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Naudojimas:-modulis: {0} - veiksmų: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Serverio atminties naudojimas: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Pristatymo adresas',
    'LBL_SHOW' => 'Rodyti',
    'LBL_STATE' => 'Rajonas',
    'LBL_STATUS_UPDATED' => 'Jūsų statusas šiam įvykiui buvo atnaujintas',
    'LBL_STATUS' => 'Būsena:',
    'LBL_STREET' => 'Gatvė',
    'LBL_SUBJECT' => 'Tema:',

    'LBL_INBOUNDEMAIL_ID' => 'Įeinančio laiško ID',

    'LBL_SCENARIO_SALES' => 'Pardavimai',
    'LBL_SCENARIO_MARKETING' => 'Marketingas',
    'LBL_SCENARIO_FINANCE' => 'Finansai',
    'LBL_SCENARIO_SERVICE' => 'Paslauga',
    'LBL_SCENARIO_PROJECT' => 'Projekto Vadovas',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Šis scenarijus palengvina pardavimo punktų valdymą',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Šis scenarijus padeda valdyti rinkodaros elementus',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Šis scenarijus palengvina finansinių klausimų valdymą',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Šis scenarijus palengvina paslaugų valdymą',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Šis scenarijus padeda valdyti projektų elementus',

    'LBL_SYNC' => 'Sinchronizacija',
    'LBL_TABGROUP_ALL' => 'Visi susiję',
    'LBL_TABGROUP_ACTIVITIES' => 'Įvykiai',
    'LBL_TABGROUP_COLLABORATION' => 'Bendradarbiavimas',
    'LBL_TABGROUP_MARKETING' => 'Marketingas',
    'LBL_TABGROUP_OTHER' => 'Kiti',
    'LBL_TABGROUP_SALES' => 'Pardavimai',
    'LBL_TABGROUP_SUPPORT' => 'Palaikymas',
    'LBL_TASKS' => 'Užduotys',
    'LBL_THOUSANDS_SYMBOL' => 'tūkst.',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archyvuoti el. paštą',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archyvuoti el. paštą',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Atstatyti',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Atstatyti',
    'LBL_UNDELETE_BUTTON' => 'Atstatyti',
    'LBL_UNDELETE' => 'Atstatyti',
    'LBL_UNSYNC' => 'Atstatyti sinchronizaciją',
    'LBL_UPDATE' => 'Atnaujinti',
    'LBL_USER_LIST' => 'Vartotojų sąrašas',
    'LBL_USERS' => 'Vartotojas',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Tikrinami egzistuojantys laiškų įrašai...',
    'LBL_VERIFY_PORTAL_NAME' => 'Tikrinami egzistuojantys portalo įrašai...',
    'LBL_VIEW_IMAGE' => 'žiūrėti',

    'LNK_ABOUT' => 'Apie',
    'LNK_ADVANCED_FILTER' => 'Sudėtingas filtras',
    'LNK_BASIC_FILTER' => 'Greitas filtras',
    'LBL_ADVANCED_SEARCH' => 'Sudėtingas filtras',
    'LBL_QUICK_FILTER' => 'Greitas filtras',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Rodyti visus',
    'LNK_CLOSE' => 'Užbaigti',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifikuoti esamą filtrą',
    'LNK_SAVED_VIEWS' => 'Išdėstymas nustatymai',
    'LNK_DELETE' => 'Ištrinti',
    'LNK_EDIT' => 'Redaguoti',
    'LNK_GET_LATEST' => 'Gauti naujausią',
    'LNK_GET_LATEST_TOOLTIP' => 'Pakeisti naujausia versija',
    'LNK_HELP' => 'Pagalba',
    'LNK_CREATE' => 'Sukurti',
    'LNK_LIST_END' => 'Pabaiga',
    'LNK_LIST_NEXT' => 'Kita',
    'LNK_LIST_PREVIOUS' => 'Ankstesnė',
    'LNK_LIST_RETURN' => 'Sugrįžti į sąrašą',
    'LNK_LIST_START' => 'Pradėti',
    'LNK_LOAD_SIGNED' => 'Pasirašyti',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Pakeisti pasirašytu dokumentu',
    'LNK_PRINT' => 'Spausdinti',
    'LNK_BACKTOTOP' => 'Atgal į viršų',
    'LNK_REMOVE' => 'Išmesti',
    'LNK_RESUME' => 'Tęsti',
    'LNK_VIEW_CHANGE_LOG' => 'Žiūrėti pakeitimų istoriją',

    'NTC_CLICK_BACK' => 'Prašome paspausti naršyklės mygtuką Atgal ir ištaisyti klaidą.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Ar tikrai norite ištrinti pasirinktą įrašus?',
    'NTC_TEMPLATE_IS_USED' => 'Šis šablonas yra naudojamas bent vienoje kampanijoje. Ar Jūs tikrai norite jį ištrinti?',
    'NTC_TEMPLATES_IS_USED' => 'Šie šablonai naudojami el. pašto marketinge. Jūs tikrai norite juos pašalinti?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Ar tikrai norite ištrinti šį įrašą ?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Ar tikrai norite ištrinti',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Ar tikrai norite atnaujinti',
    'NTC_DELETE_SELECTED_RECORDS' => 'pasirinktus įrašus?',
    'NTC_LOGIN_MESSAGE' => 'Prašome įvesti vartotojo vardą ir slaptažodį.',
    'NTC_NO_ITEMS_DISPLAY' => 'tuščia',
    'NTC_REMOVE_CONFIRMATION' => 'Ar tikrai norite išmesti šį ryšį?',
    'NTC_REQUIRED' => 'Indikuoja privalomus laukus',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Sveiki atvykę',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Ar tikrai norite išeiti iš šio įrašo, neišsaugoję pakeitimų?',
    'ERROR_NO_RECORD' => 'Klaida gaunant įrašą. Šis įrašas gali būti ištrintas arba neturite teisių jį matyti.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Įspėjimas:</b> Jūsų naršyklės versija nebepalaiko arba naudojate nepalaikomą naršyklę. <p></p> Rekomenduojama šių naršyklės versijų: <p></p> <ul><li>Internet Explorer 10 (suderinamumo rodinys nepalaiko) <li>Firefox 32.0 <li>Safari 5.1 <li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Įspėjimas:</b> Jūsų naršyklė yra IE suderinamumo rodiniu, kurie nepalaiko.',
    'ERROR_TYPE_NOT_VALID' => 'Klaida: Šis tipas yra neteisingas.',
    'ERROR_NO_BEAN' => 'Nepavyko gauti pupelių.',
    'LBL_DUP_MERGE' => 'Ieškoti dublikatų',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Valdyti prenumeratas',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Valdyti prenumeratą',
    // Ajax status strings
    'LBL_LOADING' => 'Kraunasi...',
    'LBL_SEARCHING' => 'Paieška...',
    'LBL_SAVING_LAYOUT' => 'Išsaugomas išdėstymas...',
    'LBL_SAVED_LAYOUT' => 'Išdėstymas išsaugotas.',
    'LBL_SAVED' => 'Išsaugotas',
    'LBL_SAVING' => 'Saugoma',
    'LBL_DISPLAY_COLUMNS' => 'Rodyti stulpelius',
    'LBL_HIDE_COLUMNS' => 'Slėpti stulpelius',
    'LBL_SEARCH_CRITERIA' => 'Paieškos kriterijai',
    'LBL_SAVED_VIEWS' => 'Išsaugotos peržiūros',
    'LBL_PROCESSING_REQUEST' => 'Vykdoma...',
    'LBL_REQUEST_PROCESSED' => 'Atlikta',
    'LBL_AJAX_FAILURE' => 'Ajax klaida',
    'LBL_MERGE_DUPLICATES' => 'Apjungti',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mano filtrai',
    'LBL_SEARCH_POPULATE_ONLY' => 'Atlikti paiešką naudojant paieškos formą',
    'LBL_DETAILVIEW' => 'Detali forma',
    'LBL_LISTVIEW' => 'Rodyti sąrašą',
    'LBL_EDITVIEW' => 'Redagavimo forma',
    'LBL_BILLING_STREET' => 'Gatvė:',
    'LBL_SHIPPING_STREET' => 'Gatvė:',
    'LBL_SEARCHFORM' => 'Paieškos forma',
    'LBL_SAVED_SEARCH_ERROR' => 'Prašome pateikti pavadinimą šiam peržiūrėjimui.',
    'LBL_DISPLAY_LOG' => 'Rodyti istoriją',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistema',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Baigėsi sesija',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Jūsų sesija bus nutraukta po 2 minučių. Prašome išsaugoti savo darbus.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Jūsų sesija nutrūko.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Susitikimas',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Skambutis',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Laikas:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Vieta:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Aprašymas:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Statusas:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Susiję Su: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Atvejis',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Renginys nėra nustatytas.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Vieta nėra nustatyta.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Pradžios data nėra apibrėžta.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Rezultatų nerasta.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Rezultatų nerasta... Pakeiskite paieškos kriterijus ir bandykite dar kartą',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Rezultatų nerasta <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Sukurti <item1> naujai <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'arba pakeisti paieškos kriterijus',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Šiuo metu neturite įrašų saugojimui. <item2> ar <item3> vieną dabar.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Pridėti į mano mėgstamiausius',
    'LBL_CREATE_CONTACT' => 'Sukurti kontaktą',
    'LBL_CREATE_CASE' => 'Sukurti aptarnavimą',
    'LBL_CREATE_NOTE' => 'Sukurti užrašą',
    'LBL_CREATE_OPPORTUNITY' => 'Sukurti pardavimą',
    'LBL_SCHEDULE_CALL' => 'Registruoti skambutį',
    'LBL_SCHEDULE_MEETING' => 'Suplanuoti susitikimą',
    'LBL_CREATE_TASK' => 'Sukurti užduotį',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generuoti formą',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Išsaugoti žiniatinklio formą',
    'LBL_AVAILABLE_FIELDS' => 'Galimi laukai',
    'LBL_FIRST_FORM_COLUMN' => 'Pirmas formos stulpelis',
    'LBL_SECOND_FORM_COLUMN' => 'Sekantis formos stulpelis',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Nėra užpildytas būtinas laukas: Priskirti (kam)',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Nėra užpildytas būtinas laukelis: Susijusi kampanija',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Sukurti internetinę formą ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Pateikiant šią formą bus sukurta ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Pridėti visus laukus',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Iš naujo nustatyti visus laukus',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Išmesti visus laukus',
    'LBL_NEXT_BTN' => 'Kita',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Tik paveiksliuko tipo prisegtukas gali būti įterptas',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Pakeistas duomenų bazės kontekstas į',
    'ERR_MSSQL_WARNING' => 'Perspėjimas:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Klaida: Failas [[file]] nerastas. Nepavyko sukurti, nes jokio susijusio HTML failo nebuvo rasta.',
    'ERR_CANNOT_FIND_MODULE' => 'Klaida: Modulis [module] neegzistuoja.',
    'LBL_ALT_ADDRESS' => 'Kitas adresas:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Klaida: Nelygus argumentų kiekis  key ir copy elementams rodomų parametrų eilutėje.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Bendra',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtrai',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tik mano įrašai',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Pareigybės',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Rodyti eilutes',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Pasiekėte didžiausią leistiną elementų kiekį. Prašome išimti elementą, jei norite pridėti naują.',
    'LBL_ADDING_DASHLET' => 'Pridedamas SuiteCRM elementas...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM elementas pridėtas',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Ar Jūs esate tikri kad norite pašalinti šį SuiteCRM elementą?',
    'LBL_REMOVING_DASHLET' => 'Šalinamas SuiteCRM elementas...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Puslapis kraunamas, prašome palaukti...',

    'LBL_RELOAD_PAGE' => 'Prašome <a href="javascript: window.location.reload()">perkrauti langą</a> norėdami naudoti šį SuiteCRM elementą.',
    'LBL_ADD_DASHLETS' => 'Pridėti panelius',
    'LBL_CLOSE_DASHLETS' => 'Užbaigti',
    'LBL_OPTIONS' => 'Pasirinkimai',
    'LBL_1_COLUMN' => '1 stulpeliai',
    'LBL_2_COLUMN' => '2 stulpeliai',
    'LBL_3_COLUMN' => '3 stulpeliai',
    'LBL_PAGE_NAME' => 'Puslapio pavadinimas',

    'LBL_SEARCH_RESULTS' => 'Paieškos rezultatai',
    'LBL_SEARCH_MODULES' => 'Moduliai:',
    'LBL_SEARCH_TOOLS' => 'Įrankiai',
    'LBL_SEARCH_HELP_TITLE' => 'Paieškos patarimai',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Jokio paveiksliuko',

    'LBL_MODULE' => 'Modulis',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopijuoti adresus iš kairės:',
    'LBL_SAVE_AND_CONTINUE' => 'Išsaugoti ir tęsti',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multipasirinkimo kontrolė</strong></p><ul><li>Paspauskite ant reikšmių pasirinkti atributus.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac vartotojai naudoja  CMD-paspaudimą.</li><li> Pasirinkti reikšmes tarp dviejų atributų,&nbsp;Pirmiausia paspauskite reikšmę&nbsp; ir tada shift-paspausti paskutinę reikšmę.</li></ul><p><strong>Detalios paieškos ir išdėstymo nustatymai</strong><br><br>naudojant <b>išsaugotos paieškos ir išdėstymo</b> pasirinkimą, galite išsaugoti rinkinį paieškos parametrų ir/arba pasirinktą sąrašą rodymo išdėstymą norint greitai gauti paieškos rezultatus ateityje. galite saugoti kiek norite paieškų ir išdėstymų. Visos išsaugotos paieškos rodomos pavadinimu išsaugotų paieškų sąaše, o paskutinė naudota paieška rodoma sąrašo viršuje.<br><br>Norint aptarnauti sąrašo rodymo išdėstymą , naudokite Slėpti stulpelius ir Rodyti stulpelius dėžes, kad pasirinktumėte kuriuos laukus rodyti paieškos rezultatuose. Pavyzdžiui galite paslėpti tokias detales kaip įrašo pavadinimas,atsakingas vartotojas, ir atsakinga komanda paieškos rezultatuose. Pridėti stulpelius sąrašo rodymui pasirinkite lauką iš slepiamų stulpelių sąrašo ir naudokite kairę rodyklę perkelti į rodomų stulpelių sąrašą. Išmesti stulpelį iš sąrašo pasirinkite iš rodomų stulpelių sąrašo ir naudokite dešinę rodyklę  perkelti į nerodomų stulpelių sąrašą.<br><br>Jeigu jūs išsaugosite išdėstymo nustatymus, jūs galėsite užkrauti, bet kuriuo metu rezultatų peržiūrai pasirinktame išdėstyme. <br><br>Išsaugoti ir  atnaujinti paiešką ir/arba išdėstymą:<ol><li>Įveskite pavadinimą paieškos rezultatams <b>Išsaugoti šią paiešką kaip</b> laukas ir paspauskite <b>Išsaugoti</b>.Pavadinimas rodomas išsaugotų paieškų sąraše <b>Išvalyti</b> mygtukas.</li><li>Pežiūrėti išsaugotą paiešką pasirinkite iš Išsaugotų paieškų sąrašo. Paieškos rezultatai vaizduojami sąrašo tipu.</li><li>Atnaujinti savybes išsaugotų paieškų pasirinkite išsaugotos paieškos formos sąrašą, įveskite naują paieškos kriterijų ir/arba išdėstymo pasirinkimus detalios paieškos plote ir paspauskite <b>Atnaujinti</b> kitas <b>Redaguoti esamą paiešką</b>.</li><li>Ištrinti išsaugotą paiešką, pasirinkite ją išsaugotų paieškų sąraše, paspauskite <b>Ištrinti</b> kitas <b>redaguoti esamą paiešką</b>, ir tada paspauskite <b>Gerai</b> patvirtinti ištrynimą.</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Klaida: Užklausos limitas iš $limit pasiekė $module modulį.',
    'ERROR_NOTIFY_OVERRIDE' => 'Klaida: ResourceObserver->notify() turi būti apeitas.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Klaida: Negalima sukurti stebėjimo nes  meta duomenų failas yra tuščias arba neegzistuoja.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Klaida: Nėra sukonfigūruota stebėjimo reikalaujamam pavadinimui',
    'ERR_UNDEFINED_METRIC' => 'Klaida: Negalima nustatyti reikšmės neaprašytai metrikai',
    'ERR_STORE_FILE_MISSING' => 'Klaida: Negalima rasti talpinimo įgyvendinimo failo',

    'LBL_MONITOR_ID' => 'Stebėjimo Id',
    'LBL_USER_ID' => 'Vartotojo Id',
    'LBL_MODULE_NAME' => 'Modulio pavadinimas',
    'LBL_ITEM_ID' => 'Įrašo Id',
    'LBL_ITEM_SUMMARY' => 'Įrašo santrauka',
    'LBL_ACTION' => 'Veiksmas',
    'LBL_SESSION_ID' => 'Sesijos Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack sukurta vartotojui id {0}',
    'LBL_VISIBLE' => 'Įrašas matomas',
    'LBL_DATE_LAST_ACTION' => 'Paskutinių veiksmų data',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'ne prieš tai',
    'MSG_IS_MORE_THAN' => 'yra mažiau nei',
    'MSG_SHOULD_BE' => 'turi būti',
    'MSG_OR_GREATER' => 'arba daugiau',

    'LBL_LIST' => 'Sąrašas',
    'LBL_CREATE_BUG' => 'Sukurti klaidą',

    'LBL_OBJECT_IMAGE' => 'objekto vaizdas',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Pasirinkti datą',

    'LBL_VALIDATE_RANGE' => 'nėra teisingame intervale',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Prašome pasirinkti tiek pradžios ir pabaigos datų diapazoną',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Pasirinkite pradžios ir pabaigos diapazono įrašus',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Visi susiję',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Klaida: Parametrų aibės sąrašas nesutampa su rezultatų aibės sąrašu.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Klaida: Trūksta susiejimo duomenų su šiuo moduliu.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Klaida: Nepavyko ištraukti duomenis iš jungties.',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Optimaliam  IIS/FastCGI sapi veikimui nustatykite fastcgi.logging į 0 php.ini faile.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Vardas',
    'LBL_COLLECTION_PRIMARY' => 'Pagrindinis',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Neužpildyti privalomi laukai',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_DESCRIPTION' => 'Aprašymas',

    'LBL_YESTERDAY' => 'vakar',
    'LBL_TODAY' => 'šiandien',
    'LBL_TOMORROW' => 'rytoj',
    'LBL_NEXT_WEEK' => 'kitą savaitę',
    'LBL_NEXT_MONDAY' => 'kitą pirmadienį',
    'LBL_NEXT_FRIDAY' => 'kitą penktadienį',
    'LBL_TWO_WEEKS' => 'dvi savaitės',
    'LBL_NEXT_MONTH' => 'kitą mėnesį',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'kito mėnesio pirmą dieną',
    'LBL_THREE_MONTHS' => 'trys mėnesiai',
    'LBL_SIXMONTHS' => 'šeši mėnesiai',
    'LBL_NEXT_YEAR' => 'kitais metais',

    //Datetimecombo fields
    'LBL_HOURS' => 'Valanda',
    'LBL_MINUTES' => 'Minutės',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Data',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatinio atsinaujinimo intervalas',

    'LBL_DURATION_DAY' => 's.diena',
    'LBL_DURATION_HOUR' => 'valanda',
    'LBL_DURATION_MINUTE' => 'minutė',
    'LBL_DURATION_DAYS' => 'dienos',
    'LBL_DURATION_HOURS' => 'Trukmė valandomis',
    'LBL_DURATION_MINUTES' => 'Trukmė minutėmis',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Pasirinkite mėnesį',
    'LBL_ENTER_YEAR' => 'Įveskite metus',
    'LBL_ENTER_VALID_YEAR' => 'Prašome įvesti teisingus metus',

    //File write error label
    'ERR_FILE_WRITE' => 'Klaida: negali įrašyti {0} failo. Prašome pasitikrinti sistemos ir serverio teises.',
    'ERR_FILE_NOT_FOUND' => 'Klaida: negali užkrauti {0} failo. Prašome pasitikrinti sistemos ir serverio teises.',

    'LBL_AND' => 'ir',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Byla išoriniame šaltinyje',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Saugumas',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Tai yra imties importo failas, kuri numato su lauktu turiniu yra paruoštas importo failo pavyzdys."
"Failas yra kableliais atskirtą .csv failą, naudodami dvigubų kabučių kaip lauko kvalifikatorius."

"Antraštės eilutėje yra aukščiausias eilutė failą ir yra lauko žymės, kaip galėtumėte pamatyti jų paraiškoje."
"Šios etiketės naudojamos žemėlapių sudarymo failo duomenis į laukus programoje."

"Pastabos: duomenų bazės pavadinimai taip pat gali būti naudojami antraštės eilutėje. Tai yra naudinga, kai jūs naudojate phpMyAdmin ar kitas duomenų bazės įrankis pateikti eksportuotų duomenų importuoti sąrašą."
"Stulpelių tvarką nėra svarbu, kai importo procesas atitinka atitinkamus laukus pagal antraštės eilutės duomenys."


"Naudoti šį failą kaip šabloną, atlikite šiuos veiksmus:" "1. pašalinti mėginio eilutės duomenų" "2. Pašalinti žinyno tekstą, kurį dabar skaitote""3. Įvesti savo duomenis į atitinkamas eilutes ir stulpelius""4. Failui įrašyti inomą jūsų sistemoje""5. Importo iš programos meniu Veiksmai spustelėkite ir pasirinkite įkelti failą"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Nėra esamų pranešimų',
    'LBL_ALT_SORT_DESC' => 'Surūšiuota mažėjimo tvarka',
    'LBL_ALT_SORT_ASC' => 'Surūšiuota didėjimo tvarka',
    'LBL_ALT_SORT' => 'Rikiuoti',
    'LBL_ALT_SHOW_OPTIONS' => 'Rodyti Parinktis',
    'LBL_ALT_HIDE_OPTIONS' => 'Slėpti Parinktis',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Perkelti pasirinktas įrašas sąrašo kairėje',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Perkelti pasirinktas įrašas sąrašo dešinėje',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Perkelti pasirinktas įrašų rezultatus sąrašo tvarka',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Perkelti pasirinktas įrašas žemyn rodomo sąrašo tvarka',
    'LBL_ALT_INFO' => 'Informacija',
    'MSG_DUPLICATE' => 'Jūs ruošiatės kurti {0} įrašas gali būti {0} įrašo, kuris jau yra dublikatas. turintys panašių pavadinimų {1} įrašų yra išvardytos žemiau. <br>Spustelėkite sukurti {1} toliau kurti šį naują {0}, arba pasirinkite esamą {0} toliau išvardytų.',
    'MSG_SHOW_DUPLICATES' => 'Jūs ruošiatės kurti {0} įrašas gali būti {0} įrašas, kuris jau yra dublikatas. turintys panašių pavadinimų {1} įrašų yra išvardytos žemiau.  Spustelėkite Įrašyti norėdami toliau kurti šį naują {0}, arba spustelėkite Atšaukti, jei norite grįžti į modulio kūrimas {0}.',
    'LBL_EMAIL_TITLE' => 'elektroninio pašto adresas',
    'LBL_EMAIL_OPT_TITLE' => 'pasirinko iš elektroninio pašto adresą',
    'LBL_EMAIL_INV_TITLE' => 'Netinkamas el. pašto adresas',
    'LBL_EMAIL_PRIM_TITLE' => 'Padaryti el. pašto adresą pirminiu',
    'LBL_SELECT_ALL_TITLE' => 'Pasirinkti visus',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Pažymėkite šią eilutę',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'KLAIDA: Įvyko klaida per įkelimą. Klaidos kodas: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'KLAIDA: Įvyko klaida per įkelimą. Klaidos kodas: {0} - {1}. Į max dydidis yra {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'KLAIDA: Įvyko klaida per jūsų įkelti, susisiekite su administratoriaus pagalbos.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Dydis įkelti ({0} Bait.) viršijo leidžiamą didžiausią: {1} baitų',
    'UPLOAD_REQUEST_ERROR' => 'Įvyko klaida. Prašome atnaujinti savo puslapį ir bandykite dar kartą.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Redaguoti',
    'LBL_EDIT_BUTTON_TITLE' => 'Redaguoti',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Dubliuoti',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Dubliuoti',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Ištrinti',
    'LBL_DELETE_BUTTON_TITLE' => 'Ištrinti',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Veiksmas',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Saugoti',
    'LBL_SAVE_BUTTON_TITLE' => 'Saugoti',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Atšaukti',
    'LBL_CANCEL_BUTTON_TITLE' => 'Atšaukti',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'jungtis masyvo {0} buvo nustatyta neteisingai arba yra tuščias ir negalėtų būti panaudotas.',
    'ERR_SUHOSIN' => 'Įkelti srautas yra užblokuotas Suhosin, prašome pridėti "įkelti" į suhosin.executor.include.whitelist (žr. sugarcrm.log už daugiau informacijos)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Blogas atsakymas iš serverio',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Kvota',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Pardavimo Kaina',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Rankiniu būdu',
        '5' => 'Kas 5 minutes',
        '15' => 'Kas 15 minučių\'',
        '30' => 'Kas 30 minučių',
        '60' => 'Kas valandą',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Priminimo pažyma yra tuščia arba neteisinga.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Nėra nustatytas priminimas pranešimu ar el. paštu.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Nėra dalyvių priminimui.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Priminime nėra pakviestųjų, ar norite pašalinti šį priminimą?',
    'LBL_DELETE_REMINDER' => 'Pašalinti priminimą',
    'LBL_OK' => 'Gerai',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Pasirinkite stulpelius',
    'LBL_COLUMN_CHOOSER' => 'Stulpelio pasirinkimas',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Išsaugoti pakeitimus',
    'LBL_DISPLAYED' => 'Parodyta',
    'LBL_HIDDEN' => 'Paslėptas',
    'ERR_EMPTY_COLUMNS_LIST' => 'Bent vienas elementas yra būtinas',

    'LBL_FILTER_HEADER_TITLE' => 'Filtras',

    'LBL_CATEGORY' => 'Kategorija:',
    'LBL_LIST_CATEGORY' => 'Kategorija:',
    'ERR_FACTOR_TPL_INVALID' => 'Neteisinga reikšmė dvejų faktorių autentifikatoriaus, susisiekite su Administratoriumi.',
    'LBL_SUBTHEMES' => 'Stilius',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dienojimas',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Diena',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Sutemos',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Naktis',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Vidurdienis',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Neatsižvelgti į pradinį',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Ši operacija ištrins šį el. laišką, norite tęsti?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Pabaikite kurti žinutę',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Uždarant langą bus prarasta visa suvesta informacija. Ar norite tęsti?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Pritaikyti el. pašto šabloną',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Ši operacija perrašys laiško temą ir tekstą, norite tęsti?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Pasirinkimas patvirtintas',
    'LBL_OPT_IN_TITLE' => 'Pasirinkimas',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Patvirtinimo pasirinkimo data',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Patvirtinimo pasirinkimo siuntimo data',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Patvirtinimo pasirinkimo siuntimo klaidos data',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Sutikimo patvirtinimo ženklas',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Nepasirinktas el. pašto patvirtinimo šablonas. Patikrinkite el. pašto nustatymus.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Asmeninių duomenų tvarkymo sutikimo konfiguracijoje būtina susieti el. paštą su kontrahentu/kontaktu/potencjaliu klientu/tiksliniu gavėju',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Nepaveldima grupė',
    'LBL_PRIMARY_GROUP' => "Pirminės Grupės",

    // footer
    'LBL_SUITE_TOP' => 'Atgal į viršų',
    'LBL_SUITE_SUPERCHARGED' => 'Patobulinta SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Sukurta su SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ši programa yra nemokama programinė įranga; ją galima platinti ir (arba) ją modifikuoti pagal GNU Affero General Public licensiją paskelbtą Free Software Foundation, įskaitant papildomą leidimą, išdėstytą ketvirtame priede.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Sugeneruoti slaptažodį',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Išsiųsti patvirtinimo el. laišką',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Patvirtinimo el. laiškas siunčiamas tik Paskyroms / Kontaktams / Galimiems klientams / Komercinių pasiūlymų gavėjams',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Patvirtinimo laiško siuntimas - išjungtas. Įjunkite šią funkciją el. pašto nustatymuose arba susisiekite su sistemos administratoriais.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Patvirtinimo laiško siuntimas neįmanomas, nes kontaktas nenurodė savo el. pašto',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Patvirtinimo laiškas neišsiųstas',
    'LBL_CONFIRM_EMAIL_SENT' => 'Patvirtinimo laiškas sėkmingai išsiųstas',
);

$app_list_strings['moduleList']['Library'] = 'Biblioteka';
$app_list_strings['moduleList']['EmailAddresses'] = 'El. pašto adresas';
$app_list_strings['project_priority_default'] = 'Vidutinis';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Aukštas',
    'Medium' => 'Vidutinis',
    'Low' => 'Žemas',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Sutikimas',
    'contract' => 'Sutartis',
    'legal_obligation' => 'Teisinė pareiga',
    'protection_of_interest' => 'Interesų apsauga',
    'public_interest' => 'Visuomeninis interesas',
    'legitimate_interest' => 'Teisėtas interesas',
    'withdrawn' => 'Sutikimo atšaukimas',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Tinklapis',
    'phone' => 'Telefonas',
    'given_to_user' => 'Perduota vartotojui',
    'email' => 'el.paštas',
    'third_party' => 'Trečioji šalis',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Žinių bazė';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DABIS',
    'ADEN' => 'ADENAS',
    'AFGHANISTAN' => 'AFGANISTANAS',
    'ALBANIA' => 'ALBANIJA',
    'ALGERIA' => 'ALGERIJA',
    'AMERICAN SAMOA' => 'AMERIKOS SAMOA',
    'ANDORRA' => 'ANDORA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTIKA',
    'ANTIGUA' => 'ANTIGVA',
    'ARGENTINA' => 'Argentina',
    'ARMENIA' => 'ARMĖNIJA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIJA',
    'AUSTRIA' => 'AUSTRIJA',
    'AZERBAIJAN' => 'AZERBAIDŽANAS',
    'BAHAMAS' => 'BAHAMAI',
    'BAHRAIN' => 'BAHRAINAS',
    'BANGLADESH' => 'BANGLADEŠAS',
    'BARBADOS' => 'BARBADOSAS',
    'BELARUS' => 'BALTARUSIJA',
    'BELGIUM' => 'BELGIJA',
    'BELIZE' => 'Belizas',
    'BENIN' => 'BENINAS',
    'BERMUDA' => 'BERMUDAI',
    'BHUTAN' => 'BUTANAS',
    'BOLIVIA' => 'BOLIVIJA',
    'BOSNIA' => 'BOSNIJA',
    'BOTSWANA' => 'BOTSVANA',
    'BOUVET ISLAND' => 'BOUVET SALA',
    'BRAZIL' => 'BRAZILIJA',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITŲ ANTARKTIDOS TERITORIJA',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITŲ INDIJOS VANDENYNO TERITORIJA',
    'BRITISH VIRGIN ISLANDS' => 'BRITŲ VIRGIN SALOS',
    'BRITISH WEST INDIES' => 'BRITŲ VAKARŲ INDIJA',
    'BRUNEI' => 'BRUNĖJUS',
    'BULGARIA' => 'BULGARIJA',
    'BURKINA FASO' => 'BURKINA FASAS',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODŽA',
    'CAMEROON' => 'KAMERŪNAS',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'KANALO ZONA',
    'CANARY ISLAND' => 'KANARŲ SALOS',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI SALOS',
    'CAYMAN ISLANDS' => 'KAIMANŲ SALOS',
    'CHAD' => 'ČADAS',
    'CHANNEL ISLAND UK' => 'KANALO SALA UK',
    'CHILE' => 'ČILĖ',
    'CHINA' => 'KINIJA',
    'CHRISTMAS ISLAND' => 'KALĖDŲ SALA',
    'COCOS (KEELING) ISLAND' => 'KOKOS SALA',
    'COLOMBIA' => 'KOLUMBIJA',
    'COMORO ISLANDS' => 'KOMORO SALOS',
    'CONGO' => 'KONGAS',
    'CONGO KINSHASA' => 'KONGO KINSHASA',
    'COOK ISLANDS' => 'KUKO SALOS',
    'COSTA RICA' => 'KOSTA RIKA',
    'CROATIA' => 'KROATIJA',
    'CUBA' => 'KUBA',
    'CURACAO' => 'KURAKAS',
    'CYPRUS' => 'KIPRAS',
    'CZECH REPUBLIC' => 'ČEKIJOS RESPUBLIKA',
    'DAHOMEY' => 'DAHOMIS',
    'DENMARK' => 'DANIJA',
    'DJIBOUTI' => 'DJIBOUTIS',
    'DOMINICA' => 'DOMINIKA',
    'DOMINICAN REPUBLIC' => 'DOMINIKOS RESPUBLIKA',
    'DUBAI' => 'DUBAJUS',
    'ECUADOR' => 'EKVADORAS',
    'EGYPT' => 'EGIPTAS',
    'EL SALVADOR' => 'EL SALVADORAS',
    'EQUATORIAL GUINEA' => 'EKVATORINĖ GINĖJA',
    'ESTONIA' => 'ESTIJA',
    'ETHIOPIA' => 'ETIOPIJA',
    'FAEROE ISLANDS' => 'FARERŲ SALOS',
    'FALKLAND ISLANDS' => 'FALKLANDO SALOS',
    'FIJI' => 'FIDŽIS',
    'FINLAND' => 'SUOMIJA',
    'FRANCE' => 'PRANCŪZIJA',
    'FRENCH GUIANA' => 'PRANCŪZIJOS GVIANA',
    'FRENCH POLYNESIA' => 'PRANCŪZIJOS POLINEZIJA',
    'GABON' => 'GABONAS',
    'GAMBIA' => 'GAMBIJA',
    'GEORGIA' => 'DŽORDŽIJA',
    'GERMANY' => 'VOKIETIJA',
    'GHANA' => 'GANA',
    'GIBRALTAR' => 'GIBRALTARAS',
    'GREECE' => 'GRAIKIJA',
    'GREENLAND' => 'GRENLANDIJA',
    'GUADELOUPE' => 'GVADELUPĖ',
    'GUAM' => 'GUAMAS',
    'GUATEMALA' => 'GVATEMALA',
    'GUINEA' => 'GVINĖJA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITIS',
    'HONDURAS' => 'HONDŪRAS',
    'HONG KONG' => 'HONK KONGAS',
    'HUNGARY' => 'VENGRIJA',
    'ICELAND' => 'ISLANDIJA',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIJA',
    'INDONESIA' => 'INDONEZIJA',
    'IRAN' => 'IRANAS',
    'IRAQ' => 'IRAKAS',
    'IRELAND' => 'AIRIJA',
    'ISRAEL' => 'IZRAELIS',
    'ITALY' => 'ITALIJA',
    'IVORY COAST' => 'GELEŽINĖ PAKRANTĖ',
    'JAMAICA' => 'JAMAIKA',
    'JAPAN' => 'JAPONIJA',
    'JORDAN' => 'JORDANAS',
    'KAZAKHSTAN' => 'KAZACHSTANAS',
    'KENYA' => 'KENIJA',
    'KOREA' => 'KORĖJA',
    'KOREA, SOUTH' => 'KORĖJA, PIETŪS',
    'KUWAIT' => 'KUVEITAS',
    'KYRGYZSTAN' => 'KIRGIZIJA',
    'LAOS' => 'LAOSAS',
    'LATVIA' => 'LATVIJA',
    'LEBANON' => 'LIBANAS',
    'LEEWARD ISLANDS' => 'LEEWARDO SALOS',
    'LESOTHO' => 'LESOTAS',
    'LIBYA' => 'LIBIJA',
    'LIECHTENSTEIN' => 'LICHTENŠTEINAS',
    'LITHUANIA' => 'LIETUVA',
    'LUXEMBOURG' => 'LIUKSEMBURGAS',
    'MACAO' => 'MAKAO',
    'MACEDONIA' => 'MAKEDONIJA',
    'MADAGASCAR' => 'MADAGASKARAS',
    'MALAWI' => 'MALAVIS',
    'MALAYSIA' => 'MALAYZIJA',
    'MALDIVES' => 'MALDYVAI',
    'MALI' => 'MALIS',
    'MALTA' => 'Malta',
    'MARTINIQUE' => 'MARTINIKA',
    'MAURITANIA' => 'MAURITANIJA',
    'MAURITIUS' => 'MAURICIJUS',
    'MELANESIA' => 'MALANEZIJA',
    'MEXICO' => 'MEKSIKA',
    'MOLDOVIA' => 'MOLDOVA',
    'MONACO' => 'MONAKAS',
    'MONGOLIA' => 'MONGOLIJA',
    'MOROCCO' => 'MAROKAS',
    'MOZAMBIQUE' => 'MOZAMBIKAS',
    'MYANAMAR' => 'MYANAMARAS',
    'NAMIBIA' => 'NAMIBIJA',
    'NEPAL' => 'NEPALAS',
    'NETHERLANDS' => 'NYDERLANDAI',
    'NETHERLANDS ANTILLES' => 'NYDERALNDŲ ANTILAI',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NYDERLANDŲ ANTILŲ NEUTRALI ZONA',
    'NEW CALADONIA' => 'NAUJOJI KALADONIA',
    'NEW HEBRIDES' => 'NAUJIEJI HEBRIDAI',
    'NEW ZEALAND' => 'NAUJOJI ZELANDIJA',
    'NICARAGUA' => 'NIKARAGVA',
    'NIGER' => 'NIGERIS',
    'NIGERIA' => 'NIGERIJA',
    'NORFOLK ISLAND' => 'NORFOLKO SALA',
    'NORWAY' => 'NORVEGIJA',
    'OMAN' => 'OMANAS',
    'OTHER' => 'KITA',
    'PACIFIC ISLAND' => 'VANDENYNO SALA',
    'PAKISTAN' => 'PAKISTANAS',
    'PANAMA' => 'Panama',
    'PAPUA NEW GUINEA' => 'PAPUA NAUJOJI GVINĖJA',
    'PARAGUAY' => 'PARAGVAJUS',
    'PERU' => 'Peru',
    'PHILIPPINES' => 'FILIPINAI',
    'POLAND' => 'LENKIJA',
    'PORTUGAL' => 'PORTUGALIJA',
    'PORTUGUESE TIMOR' => 'Rytų Timoras',
    'PUERTO RICO' => 'PUERTO RIKAS',
    'QATAR' => 'QATARAS',
    'REPUBLIC OF BELARUS' => 'BALTARUSIJOS RESPUBLIKA',
    'REPUBLIC OF SOUTH AFRICA' => 'PIETŲ AFRIKOS RESPUBLIKA',
    'REUNION' => 'REUNIONAS',
    'ROMANIA' => 'ROMUNIJA',
    'RUSSIA' => 'RUSIJA',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'RYUKYU SALOS',
    'SABAH' => 'SABAHAS',
    'SAN MARINO' => 'SAN MARINAS',
    'SAUDI ARABIA' => 'SAUDO ARABIJA',
    'SENEGAL' => 'SENEGALAS',
    'SERBIA' => 'SERBIJA',
    'SEYCHELLES' => 'SEIŠELIS',
    'SIERRA LEONE' => 'SIERA LEONAS',
    'SINGAPORE' => 'SINGAPŪRAS',
    'SLOVAKIA' => 'SLOVAKIJA',
    'SLOVENIA' => 'SLOVĖNIJA',
    'SOMALILIAND' => 'SOMALIS',
    'SOUTH AFRICA' => 'PIETŲ AFRIKA',
    'SOUTH YEMEN' => 'PIETŲ JEMENAS',
    'SPAIN' => 'ISPANIJA',
    'SPANISH SAHARA' => 'ISPANIŠKA SAHARA',
    'SRI LANKA' => 'ŠRI LANKA',
    'ST. KITTS AND NEVIS' => 'ŠV. KITTAS IR NEVIS',
    'ST. LUCIA' => 'ŠV. LUČIJA',
    'SUDAN' => 'SUDANAS',
    'SURINAM' => 'SURINAMAS',
    'SW AFRICA' => 'PIETVAKARIŲ AFRIKA',
    'SWAZILAND' => 'SVAZILANDAS',
    'SWEDEN' => 'ŠVEDIJA',
    'SWITZERLAND' => 'ŠVEICARIJA',
    'SYRIA' => 'SIRIJA',
    'TAIWAN' => 'TAIVANAS',
    'TAJIKISTAN' => 'TADŽIKISTANAS',
    'TANZANIA' => 'TANZANIJA',
    'THAILAND' => 'TAILANDAS',
    'TONGA' => 'TONGAS',
    'TRINIDAD' => 'TRINIDADAS',
    'TUNISIA' => 'TUNISAS',
    'TURKEY' => 'TURKIJA',
    'UGANDA' => 'Uganda',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'JUNGTINIAI ARABŲ EMYRATAI',
    'UNITED KINGDOM' => 'JUNGTINĖ KARALYSTĖ',
    'URUGUAY' => 'URUGVAJUS',
    'US PACIFIC ISLAND' => 'JUNGTINIŲ VALSTIJŲ VANDENYNO SALA',
    'US VIRGIN ISLANDS' => 'JUNGTINIŲ VALSTIJŲ VIRGIN SALOS',
    'USA' => 'JAV',
    'UZBEKISTAN' => 'UZBEKISTANAS',
    'VANUATU' => 'Vanuatu',
    'VATICAN CITY' => 'VATIKANO MIESTAS',
    'VENEZUELA' => 'VENESUELA',
    'VIETNAM' => 'VIETNAMAS',
    'WAKE ISLAND' => 'GYVA SALA',
    'WEST INDIES' => 'VAKARŲ INDIJA',
    'WESTERN SAHARA' => 'VAKARŲ SAHARA',
    'YEMEN' => 'JEMENAS',
    'ZAIRE' => 'ZAIRAS',
    'ZAMBIA' => 'ZAMBIJA',
    'ZIMBABWE' => 'ZIMBABVĖ',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan ir Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Kirilica)',
    'CP1252' => 'CP1252 (MS Vakarų Europos ir JAV)',
    'EUC-CN' => 'EUC-CN (Supaprastinta kiniečių GB2312)',
    'EUC-JP' => 'EUC-JP (Unix japonų)',
    'EUC-KR' => 'EUC-KR (Korėjos)',
    'EUC-TW' => 'EUC-TW (Taivano)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japonų)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korėjos)',
    'ISO-8859-1' => 'ISO-8859-1 (Vakarų Europos ir JAV)',
    'ISO-8859-2' => 'ISO-8859-2 (Centrinės ir rytinės Europos)',
    'ISO-8859-3' => 'ISO-8859-3 (Lotynų 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Lotynų 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Kirilica)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabų)',
    'ISO-8859-7' => 'ISO-8859-7 (Graikų)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrajų)',
    'ISO-8859-9' => 'ISO-8859-9 (Lotynų 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Lotynų 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Lotynų 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Lotynų 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Lotynų 9)',
    'KOI8-R' => 'KOI8-R (Kirilica rusiška)',
    'KOI8-U' => 'KOI8-U (Kirilica ukrainiečių)',
    'SJIS' => 'SJIS (MS japonų)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Alžyras',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novas',
    'Africa/Gaborone' => 'Afrika/Gaboronas',
    'Africa/Ouagadougou' => 'Afrika/Ouagadougas',
    'Africa/Bujumbura' => 'Afrika/Bujumburas',
    'Africa/Douala' => 'Afrika/Doualas',
    'Atlantic/Cape_Verde' => 'Atlantas/Cape_Verde',
    'Africa/Bangui' => 'Afrika/Bangui',
    'Africa/Ndjamena' => 'Afrika/Ndjamenas',
    'Indian/Comoro' => 'Indų/Comoras',
    'Africa/Kinshasa' => 'Afrika/Kinshasas',
    'Africa/Lubumbashi' => 'Afrika/Lubumbashi',
    'Africa/Brazzaville' => 'Afrika/Brazzavillas',
    'Africa/Abidjan' => 'Afrika/Abidjanas',
    'Africa/Djibouti' => 'Afrika/Djiboutas',
    'Africa/Cairo' => 'Afrika/Kairas',
    'Africa/Malabo' => 'Afrika/Malabas',
    'Africa/Asmera' => 'Afrika/Asmeras',
    'Africa/Addis_Ababa' => 'Afrika/Addis_Ababas',
    'Africa/Libreville' => 'Afrika/Librevillas',
    'Africa/Banjul' => 'Afrika/Banjulas',
    'Africa/Accra' => 'Afrika/Accra',
    'Africa/Conakry' => 'Afrika/Conakras',
    'Africa/Bissau' => 'Afrika/Bissau',
    'Africa/Nairobi' => 'Afrika/Nairobis',
    'Africa/Maseru' => 'Afrika/Maseru',
    'Africa/Monrovia' => 'Afrika/Monrovia',
    'Africa/Tripoli' => 'Afrika/Tripolis',
    'Indian/Antananarivo' => 'Indų/Antananarivas',
    'Africa/Blantyre' => 'Afrika/Blantyras',
    'Africa/Bamako' => 'Afrika/Bamakas',
    'Africa/Nouakchott' => 'Afrika/Nouakchottas',
    'Indian/Mauritius' => 'Indų/Mauritius',
    'Indian/Mayotte' => 'Indų/Mayottas',
    'Africa/Casablanca' => 'Afrika/Kasablanka',
    'Africa/El_Aaiun' => 'Afrika/El_Aaiunas',
    'Africa/Maputo' => 'Afrika/Maputas',
    'Africa/Windhoek' => 'Afrika/Windhoekas',
    'Africa/Niamey' => 'Afrika/Niamey',
    'Africa/Lagos' => 'Afrika/Lagosas',
    'Indian/Reunion' => 'Indų/Reunionas',
    'Africa/Kigali' => 'Afrika/Kigalis',
    'Atlantic/St_Helena' => 'Atlantas/Šv_Helena',
    'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
    'Africa/Dakar' => 'Afrika/Dakaras',
    'Indian/Mahe' => 'Indų/Mahe',
    'Africa/Freetown' => 'Afrika/Freetownas',
    'Africa/Mogadishu' => 'Afrika/Mogadishas',
    'Africa/Johannesburg' => 'Afrika/Johannesburgas',
    'Africa/Khartoum' => 'Afrika/Khartoumas',
    'Africa/Mbabane' => 'Afrika/Mbabanas',
    'Africa/Dar_es_Salaam' => 'Afrika/Dar_es_Salaamas',
    'Africa/Lome' => 'Afrika/Lomė',
    'Africa/Tunis' => 'Afrika/Tunisas',
    'Africa/Kampala' => 'Afrika/Kampala',
    'Africa/Lusaka' => 'Afrika/Lusaka',
    'Africa/Harare' => 'Afrika/Hararas',
    'Antarctica/Casey' => 'Antarktika/Casey',
    'Antarctica/Davis' => 'Antarktika/Davis',
    'Antarctica/Mawson' => 'Antarktika/Mawsonas',
    'Indian/Kerguelen' => 'Indija/Kerguelenas',
    'Antarctica/DumontDUrville' => 'Antarktida/DumontDUrville',
    'Antarctica/Syowa' => 'Antarktika/Syowa',
    'Antarctica/Vostok' => 'Antarktika/Vostokas',
    'Antarctica/Rothera' => 'Antarktika/Rotheras',
    'Antarctica/Palmer' => 'Antarktika/Palmeras',
    'Antarctica/McMurdo' => 'Antarktika/McMurdas',
    'Asia/Kabul' => 'Asia/Kabulas',
    'Asia/Yerevan' => 'Azija/Yerevan',
    'Asia/Baku' => 'Azija/Bakas',
    'Asia/Bahrain' => 'Azija/Bahrainas',
    'Asia/Dhaka' => 'Azija/Dhakas',
    'Asia/Thimphu' => 'Azija/Thimphas',
    'Indian/Chagos' => 'Indija/Chagas',
    'Asia/Brunei' => 'Azija/Brunejus',
    'Asia/Rangoon' => 'Azija/Rangoonas',
    'Asia/Phnom_Penh' => 'Azija/Phnom_Penhas',
    'Asia/Beijing' => 'Azija/Pekinas',
    'Asia/Harbin' => 'Azija/Harbinas',
    'Asia/Shanghai' => 'Azija/Šangajus',
    'Asia/Chongqing' => 'Azija/Chongqingas',
    'Asia/Urumqi' => 'Azija/Urumqis',
    'Asia/Kashgar' => 'Azija/Kashgaras',
    'Asia/Hong_Kong' => 'Azija/Honk_Kongas',
    'Asia/Taipei' => 'Azija/Taipei',
    'Asia/Macau' => 'Azija/Macau',
    'Asia/Nicosia' => 'Azija/Nicosija',
    'Asia/Tbilisi' => 'Azija/Tbilisis',
    'Asia/Dili' => 'Azija/Dilis',
    'Asia/Calcutta' => 'Azija/Kalkuta',
    'Asia/Jakarta' => 'Azija/Džakarta',
    'Asia/Pontianak' => 'Azija/Pontianakas',
    'Asia/Makassar' => 'Azija/Makassaras',
    'Asia/Jayapura' => 'Azija/Jayapuras',
    'Asia/Tehran' => 'Azija/Tehranas',
    'Asia/Baghdad' => 'Azija/Bagdadas',
    'Asia/Jerusalem' => 'Azija/Jeruzalė',
    'Asia/Tokyo' => 'Azija/Tokijas',
    'Asia/Amman' => 'Azija/Amanas',
    'Asia/Almaty' => 'Azija/Almatas',
    'Asia/Qyzylorda' => 'Azija/Qyzylorda',
    'Asia/Aqtobe' => 'Azija/Aqtobe',
    'Asia/Aqtau' => 'Azija/Aqtau',
    'Asia/Oral' => 'Azija/Oral',
    'Asia/Bishkek' => 'Azija/Bishkekas',
    'Asia/Seoul' => 'Azija/Seoulas',
    'Asia/Pyongyang' => 'Azija/Pyongyangas',
    'Asia/Kuwait' => 'Azija/Kuveitas',
    'Asia/Vientiane' => 'Azija/Vientianas',
    'Asia/Beirut' => 'Azija/Beirutas',
    'Asia/Kuala_Lumpur' => 'Azija/Kuala_Lumpuras',
    'Asia/Kuching' => 'Azija/Kuchingas',
    'Indian/Maldives' => 'Indija/Maldivai',
    'Asia/Hovd' => 'Azija/Houdas',
    'Asia/Ulaanbaatar' => 'Azija/Ulaanbaataras',
    'Asia/Choibalsan' => 'Azija/Choibalsanas',
    'Asia/Katmandu' => 'Azija/Katmandu',
    'Asia/Muscat' => 'Azija/Muskatas',
    'Asia/Karachi' => 'Azija/Karachis',
    'Asia/Gaza' => 'Azija/Gaza',
    'Asia/Manila' => 'Azija/Manila',
    'Asia/Qatar' => 'Azija/Qataras',
    'Asia/Riyadh' => 'Azija/Riyadhas',
    'Asia/Singapore' => 'Azija/Singapūras',
    'Asia/Colombo' => 'Azija/Kolombas',
    'Asia/Damascus' => 'Azija/Damaskas',
    'Asia/Dushanbe' => 'Azija/Dushanbe',
    'Asia/Bangkok' => 'Azija/Bangokas',
    'Asia/Ashgabat' => 'Azija/Ashgabatas',
    'Asia/Dubai' => 'Azija/Dubajus',
    'Asia/Samarkand' => 'Azija/Samarkandas',
    'Asia/Tashkent' => 'Azija/Taškentas',
    'Asia/Saigon' => 'Azija/Saigonas',
    'Asia/Aden' => 'Azija/Adenas',
    'Australia/Darwin' => 'Australija/Darvinas',
    'Australia/Perth' => 'Australija/Perthas',
    'Australia/Brisbane' => 'Australija/Brisbane',
    'Australia/Lindeman' => 'Australija/Lindemanas',
    'Australia/Adelaide' => 'Australija/Adelaide',
    'Australia/Hobart' => 'Australija/Hobartas',
    'Australia/Currie' => 'Australija/Currie',
    'Australia/Melbourne' => 'Australija/Melburnas',
    'Australia/Sydney' => 'Australija/Sidnėjus',
    'Australia/Broken_Hill' => 'Australija/Broken_Hillas',
    'Indian/Christmas' => 'Indų/Christmas',
    'Pacific/Rarotonga' => 'Ramiojo vandenyno/Rarotongas',
    'Indian/Cocos' => 'Indų/Kokas',
    'Pacific/Fiji' => 'Ramiojo vandenyno/Fidži',
    'Pacific/Gambier' => 'Ramiojo vandenyno/Gambieras',
    'Pacific/Marquesas' => 'Ramiojo vandenyno/Marquesas',
    'Pacific/Tahiti' => 'Ramiojo vandenyno/Taitis',
    'Pacific/Guam' => 'Ramiojo vandenyno/Guamas',
    'Pacific/Tarawa' => 'Ramiojo vandenyno/Tarava',
    'Pacific/Enderbury' => 'Ramiojo vandenyno/Enderburas',
    'Pacific/Kiritimati' => 'Ramiojo vandenyno/Kiritimatis',
    'Pacific/Saipan' => 'Ramiojo vandenyno/Saipanas',
    'Pacific/Majuro' => 'Ramiojo vandenyno/Majuras',
    'Pacific/Kwajalein' => 'Ramiojo vandenyno/Kwajalein',
    'Pacific/Truk' => 'Ramiojo vandenyno/Trukas',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Ramiojo vandenyno/Kosrae',
    'Pacific/Nauru' => 'Ramiojo vandenyno/Nauru',
    'Pacific/Noumea' => 'Ramiojo vandenyno/Noumea',
    'Pacific/Auckland' => 'Ramiojo vandenyno/Aucklandas',
    'Pacific/Chatham' => 'Ramiojo vandenyno/Chathamas',
    'Pacific/Niue' => 'Ramiojo vandenyno/Niue',
    'Pacific/Norfolk' => 'Ramiojo vandenyno/Norfolkas',
    'Pacific/Palau' => 'Ramiojo vandenyno/Palau',
    'Pacific/Port_Moresby' => 'Ramiojo vandenyno/Port_Moresbis',
    'Pacific/Pitcairn' => 'Ramiojo vandenyno/Pitkernas',
    'Pacific/Pago_Pago' => 'Ramiojo vandenyno/Pagas',
    'Pacific/Apia' => 'Ramiojo vandenyno/Apia',
    'Pacific/Guadalcanal' => 'Ramiojo vandenyno/Guadalcanalas',
    'Pacific/Fakaofo' => 'Ramiojo vandenyno/Fakaofas',
    'Pacific/Tongatapu' => 'Ramiojo vandenyno/Tongatapas',
    'Pacific/Funafuti' => 'Ramiojo vandenyno/Funafutis',
    'Pacific/Johnston' => 'Ramiojo vandenyno/Džonstonas',
    'Pacific/Midway' => 'Ramiojo vandenyno/Pusiaukelė',
    'Pacific/Wake' => 'Ramiojo vandenyno/Judanti',
    'Pacific/Efate' => 'Ramiojo vandenyno/Efate',
    'Pacific/Wallis' => 'Ramiojo vandenyno/Valis',
    'Europe/London' => 'Europa/Londonas',
    'Europe/Dublin' => 'Europe/Dublinas',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europa/Tiranas',
    'Europe/Andorra' => 'Europa/Andora',
    'Europe/Vienna' => 'Europa/Viena',
    'Europe/Minsk' => 'Europa/Minskas',
    'Europe/Brussels' => 'Europa/Briuselis',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa/Praha',
    'Europe/Copenhagen' => 'Europa/Kopenhaga',
    'Atlantic/Faeroe' => 'Atlanto vandenyno/Faerai',
    'America/Danmarkshavn' => 'Europa/Danmarkshavnas',
    'America/Scoresbysund' => 'Europa/Scoresbysundas',
    'America/Godthab' => 'Amerika/Godthabas',
    'America/Thule' => 'Amerika/Thulas',
    'Europe/Tallinn' => 'Europe/Talinas',
    'Europe/Helsinki' => 'Europe/Helsinkis',
    'Europe/Paris' => 'Europa/Paryžius',
    'Europe/Berlin' => 'Europa/Berlynas',
    'Europe/Gibraltar' => 'Europa/Gibraltaras',
    'Europe/Athens' => 'Europa/Atėnai',
    'Europe/Budapest' => 'Europa/Budapeštas',
    'Atlantic/Reykjavik' => 'Atlantic/Rejkjavikas',
    'Europe/Rome' => 'Europa/Roma',
    'Europe/Riga' => 'Europa/Ryga',
    'Europe/Vaduz' => 'Europa/Vaduzas',
    'Europe/Vilnius' => 'Europa/Vilnius',
    'Europe/Luxembourg' => 'Europa/Liuksemburgas',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europa/Kišiniovas',
    'Europe/Monaco' => 'Europa/Monakas',
    'Europe/Amsterdam' => 'Europa/Amsterdamas',
    'Europe/Oslo' => 'Europa/Oslas',
    'Europe/Warsaw' => 'Europa/Varšuva',
    'Europe/Lisbon' => 'Europa/Lisabona',
    'Atlantic/Azores' => 'Atlanto vandenyno/Azora',
    'Atlantic/Madeira' => 'Atlantik/Madeira',
    'Europe/Bucharest' => 'Europa/Bukareštas',
    'Europe/Kaliningrad' => 'Europa/Kaliningradas',
    'Europe/Moscow' => 'Europa/Maskva',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Azija/Jekaterinburgas',
    'Asia/Omsk' => 'Azija/Omskas',
    'Asia/Novosibirsk' => 'Azija/Novasibirskas',
    'Asia/Krasnoyarsk' => 'Azija/Krasnojarskas',
    'Asia/Irkutsk' => 'Azija/Irkutskas',
    'Asia/Yakutsk' => 'Azija/Jakutskas',
    'Asia/Vladivostok' => 'Azija/Vladivostokas',
    'Asia/Sakhalin' => 'Azija/Sachhalinas',
    'Asia/Magadan' => 'Azija/Magadanas',
    'Asia/Kamchatka' => 'Azija/Kamčiatka',
    'Asia/Anadyr' => 'Azija/Anadyras',
    'Europe/Belgrade' => 'Europa/Belgradas',
    'Europe/Madrid' => 'Europa/Madridas',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Atlantic/Canary' => 'Atlanto vandenyno/Kanarai',
    'Europe/Stockholm' => 'Europa/Stokholmas',
    'Europe/Zurich' => 'Europa/Ciurichas',
    'Europe/Istanbul' => 'Europa/Istanbulas',
    'Europe/Kiev' => 'Europa/Kijevas',
    'Europe/Uzhgorod' => 'Europa/Uzhgorodas',
    'Europe/Zaporozhye' => 'Europa/Zaporozhye',
    'Europe/Simferopol' => 'Europa/Simferopolas',
    'America/New_York' => 'Amerika/Niujorkas',
    'America/Chicago' => 'Amerika/Čikaga',
    'America/North_Dakota/Center' => 'Amerika/Šiaurės_Dakota/Centras',
    'America/Denver' => 'Amerika/Denveris',
    'America/Los_Angeles' => 'Amerika/Los_Andželas',
    'America/Juneau' => 'Amerika/Juneau',
    'America/Yakutat' => 'Amerika/Yakutat',
    'America/Anchorage' => 'Amerika/Anchoradžas',
    'America/Nome' => 'Amerika/Nome',
    'America/Adak' => 'Amerika/Adakas',
    'Pacific/Honolulu' => 'Ramiojo vandenyno/Honolulu',
    'America/Phoenix' => 'Amerika/Feniksas',
    'America/Boise' => 'Amerika/Boisė',
    'America/Indiana/Indianapolis' => 'Amerika/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amerika/Indiana/Marengas',
    'America/Indiana/Knox' => 'Amerika/Indiana/Knokas',
    'America/Indiana/Vevay' => 'Amerika/Indiana/Vevajus',
    'America/Kentucky/Louisville' => 'Amerika/Kentucky/Louisvilas',
    'America/Kentucky/Monticello' => 'Amerika/Kentukis/Monticelas',
    'America/Detroit' => 'Amerika/Detroitas',
    'America/Menominee' => 'Amerika/Menominas',
    'America/St_Johns' => 'Amerika/Šv_Džonas',
    'America/Goose_Bay' => 'Amerika/žasų_įlanka',
    'America/Halifax' => 'Amerika/Halifaksas',
    'America/Glace_Bay' => 'Amerika/Glace_įlanka',
    'America/Montreal' => 'Amerika/Montrealas',
    'America/Toronto' => 'Amerika/Torontas',
    'America/Thunder_Bay' => 'Amerika/Griaustinio_įlanka',
    'America/Nipigon' => 'Amerika/Nipigonas',
    'America/Rainy_River' => 'Amerika/Lietinga_upė',
    'America/Winnipeg' => 'Amerika/Winipegas',
    'America/Regina' => 'Amerika/Regina',
    'America/Swift_Current' => 'Amerika/Greita_uždanga',
    'America/Edmonton' => 'Amerika/Edmontonas',
    'America/Vancouver' => 'Amerika/Vankuveris',
    'America/Dawson_Creek' => 'Amerika/Dawsono_įlanka',
    'America/Pangnirtung' => 'Amerika/Pangnirtungas',
    'America/Iqaluit' => 'Amerika/Iqaluit',
    'America/Coral_Harbour' => 'Amerika/Koralų_uostas',
    'America/Rankin_Inlet' => 'Amerika/Rankin_Inlet',
    'America/Cambridge_Bay' => 'Amerika/Kembridžo_įlanka',
    'America/Yellowknife' => 'Amerika/Yellowknife',
    'America/Inuvik' => 'Amerika/Inuvikas',
    'America/Whitehorse' => 'Amerika/Whitehorse',
    'America/Dawson' => 'Amerika/Dawson',
    'America/Cancun' => 'Amerika/Cancun',
    'America/Merida' => 'Amerika/Merida',
    'America/Monterrey' => 'Amerika/Monterrey',
    'America/Mexico_City' => 'Amerika/Meksikos_miestas',
    'America/Chihuahua' => 'Amerika/Chihuahua',
    'America/Hermosillo' => 'Amerika/Hermosillas',
    'America/Mazatlan' => 'Amerika/Mazatlanas',
    'America/Tijuana' => 'Amerika/Tijuana',
    'America/Anguilla' => 'Amerika/Anguilla',
    'America/Antigua' => 'Amerika/Antigua',
    'America/Nassau' => 'Amerika/Nassau',
    'America/Barbados' => 'Amerika/Barbadosas',
    'America/Belize' => 'Amerika/Belize',
    'Atlantic/Bermuda' => 'Amerika/Bermudai',
    'America/Cayman' => 'Amerika/Kaimanai',
    'America/Costa_Rica' => 'Amerika/Kosta_Rika',
    'America/Havana' => 'Amerika/Havana',
    'America/Dominica' => 'Amerika/Dominika',
    'America/Santo_Domingo' => 'Amerika/Santo_Domingo',
    'America/El_Salvador' => 'Amerika/El_Salvadoras',
    'America/Grenada' => 'Amerika/Grenada',
    'America/Guadeloupe' => 'Amerika/Gvadelupė',
    'America/Guatemala' => 'Amerika/Gvatemala',
    'America/Port-au-Prince' => 'Amerika/Port-au-Prince',
    'America/Tegucigalpa' => 'Amerika/Tegucigalpa',
    'America/Jamaica' => 'Amerika/Jamaika',
    'America/Martinique' => 'Amerika/Martinique',
    'America/Montserrat' => 'Amerika/Montseratas',
    'America/Managua' => 'Amerika/Managua',
    'America/Panama' => 'Amerika/Panama',
    'America/Puerto_Rico' => 'Amerika/Puerto_Riko',
    'America/St_Kitts' => 'Amerika/Šv_Kitass',
    'America/St_Lucia' => 'Amerika/Šv_Lucija',
    'America/Miquelon' => 'Amerika/Migelonas',
    'America/St_Vincent' => 'Amerika/Šv_Vincentas',
    'America/Grand_Turk' => 'Amerika/Grand_Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/Šv_Tomas',
    'America/Argentina/Buenos_Aires' => 'Amerika/Argentina/Buenos_Airės',
    'America/Argentina/Cordoba' => 'Amerika/Argentina/Kordoba',
    'America/Argentina/Tucuman' => 'Amerika/Argentina/Tukumanas',
    'America/Argentina/La_Rioja' => 'Amerika/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'Amerika/Argentina/San_Juanas',
    'America/Argentina/Jujuy' => 'Amerika/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'Amerika/Argentina/Katamarka',
    'America/Argentina/Mendoza' => 'Amerika/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amerika/Argentina/Rio_Gallegas',
    'America/Argentina/Ushuaia' => 'Amerika/Argentina/Ushuaia',
    'America/Aruba' => 'Amerika/Aruba',
    'America/La_Paz' => 'Amerika/La_Pazas',
    'America/Noronha' => 'Amerika/Noronha',
    'America/Belem' => 'Amerika/Belemas',
    'America/Fortaleza' => 'Amerika/Fortaleza',
    'America/Recife' => 'Amerika/Recifas',
    'America/Araguaina' => 'Amerika/Araguaina',
    'America/Maceio' => 'Amerika/Maceijas',
    'America/Bahia' => 'Amerika/Bahia',
    'America/Sao_Paulo' => 'Amerika/Sao_Paulas',
    'America/Campo_Grande' => 'Amerika/Campo_Grande',
    'America/Cuiaba' => 'Amerika/Cuiaba',
    'America/Porto_Velho' => 'Amerika/Porto_Velhas',
    'America/Boa_Vista' => 'Amerika/Boa_Vista',
    'America/Manaus' => 'Amerika/Manaus',
    'America/Eirunepe' => 'Amerika/Eirunepe',
    'America/Rio_Branco' => 'Amerika/Rio_Brankas',
    'America/Santiago' => 'Amerika/Santiagas',
    'Pacific/Easter' => 'Ramiojo vandenyno/Velykos',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Kurakao',
    'America/Guayaquil' => 'Amerika/Guayaquil',
    'Pacific/Galapagos' => 'Ramiojo vandenyno/Galapagos',
    'Atlantic/Stanley' => 'Atlanto vandenyno/Stenlis',
    'America/Cayenne' => 'Amerika/Kayenas',
    'America/Guyana' => 'Amerika/Gajana',
    'America/Asuncion' => 'Amerika/Asunsjonas',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlanto vandenyno/South_Georgia',
    'America/Paramaribo' => 'Amerika/Paramaribas',
    'America/Port_of_Spain' => 'Amerika/Ispanijos_portas',
    'America/Montevideo' => 'Amerika/Montevidas',
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
    'Google' => '"Google" kontaktuose',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Prašymą',
    2 => 'Priėjimas',
    3 => 'Neteisingas',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanija',
    'email' => 'el.paštas',
    'event' => 'Atvejis',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanija',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanija',
    'email' => 'el.paštas',
    'event' => 'Atvejis',
    'system' => 'Sistema',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Žinių bazė';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Kategorijos';
$app_list_strings['aok_status_list']['Draft'] = 'Eskizas';
$app_list_strings['aok_status_list']['Expired'] = 'Pasibaigęs galiojimas';
$app_list_strings['aok_status_list']['In_Review'] = 'Peržiūrimas';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Asmeninis';
$app_list_strings['aok_status_list']['published_public'] = 'Viešas';

$app_list_strings['moduleList']['FP_events'] = 'Įvykiai';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Vietos';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Pakviestas';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nepakviestas';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Dalyvavo';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nedalyvavo';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Patvirtintas';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Atmestas';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nėra atsakymo';

$app_strings['LBL_STATUS_EVENT'] = 'Pakvietimo būsena';
$app_strings['LBL_ACCEPT_STATUS'] = 'Patvirtinti';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Pasirinkti šį puslapį';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Visi įrašai';
$app_strings['LBL_LISTVIEW_NONE'] = 'Atžymėti visus';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeksas';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Atvejo įvykiai';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Atvejo atnaujinimai';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Prašome atsakymą rašyti aukščiau šios linijos ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'Uždarytas',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Naujas',
        'Open_Assigned' => 'Priskirtas',
        'Closed_Closed' => 'Uždarytas',
        'Open_Pending Input' => 'Pristabdytas',
        'Closed_Rejected' => 'Atmestas',
        'Closed_Duplicate' => 'Dubliuoti',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Vartotojas',
        'Account' => 'Naudotojo vartotojas',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Sistemos numatytas',
    'singleUser' => 'Vartotojas',
    'roundRobin' => 'Rato (Round-Robin)',
    'leastBusy' => 'Paskutinis-užimtas',
    'random' => 'Bet koks',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Ataskaitos';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Ataskaitos sąlygos';
$app_list_strings['moduleList']['AOR_Charts'] = 'Ataskaitų grafikai';
$app_list_strings['moduleList']['AOR_Fields'] = 'Ataskaitos laukeliai';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Suplanuotos ataskaitos';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Lygus (kam)';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Nelygus';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Daugiau nei';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mažiau nei';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Didesnis arba lygus';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mažesnis arba lygus';
$app_list_strings['aor_operator_list']['Contains'] = 'Turi';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Prasideda su';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Baigiasi su';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-M';
$app_list_strings['aor_format_options']['d-m-Y'] = 'm-d-M';
$app_list_strings['aor_format_options']['Y/m/d'] = 'M/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/M';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'M.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.M';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.M';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'ir';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ARBA';
$app_list_strings['aor_condition_type_list']['Value'] = 'Reikšmė';
$app_list_strings['aor_condition_type_list']['Field'] = 'Laukas';
$app_list_strings['aor_condition_type_list']['Date'] = 'Data';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Vienas iš';
$app_list_strings['aor_condition_type_list']['Period'] = 'periodas';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Dabartinis naudotojas';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutės';
$app_list_strings['aor_date_type_list']['hour'] = 'Valanda';
$app_list_strings['aor_date_type_list']['day'] = 'Dienos';
$app_list_strings['aor_date_type_list']['week'] = 'Savaitės';
$app_list_strings['aor_date_type_list']['month'] = 'Mėnesiai';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Darbo valandos';
$app_list_strings['aor_date_options']['now'] = 'Dabar';
$app_list_strings['aor_date_options']['field'] = 'Šis laukelis';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Didėjimo tvarka';
$app_list_strings['aor_sort_operator']['DESC'] = 'Mažėjimo tvarka';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Skaičius';
$app_list_strings['aor_function_list']['MIN'] = 'Minimalus';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimalus';
$app_list_strings['aor_function_list']['SUM'] = 'Suma';
$app_list_strings['aor_function_list']['AVG'] = 'Vidutinis';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Skaičius';
$app_list_strings['aor_total_options']['SUM'] = 'Suma';
$app_list_strings['aor_total_options']['AVG'] = 'Vidutinis';
$app_list_strings['aor_chart_types']['bar'] = 'Juostinė diagrama';
$app_list_strings['aor_chart_types']['line'] = 'Linijinė diagrama';
$app_list_strings['aor_chart_types']['pie'] = 'Skritulinė diagrama';
$app_list_strings['aor_chart_types']['radar'] = 'Radaro diagrama';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stulpelinė diagrama';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grupuota diagrama';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mėnesinis';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Savaitinis';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Kasdieninis';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktyvu';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Neaktyvu';
$app_list_strings['aor_email_type_list']['Email Address'] = 'el.paštas';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Vartotojas';
$app_list_strings['aor_email_type_list']['Users'] = 'Vartotojas';
$app_list_strings['aor_assign_options']['all'] = 'Visi vartotojai';
$app_list_strings['aor_assign_options']['role'] = 'Visi vartotojai pagal funkciją';
$app_list_strings['aor_assign_options']['security_group'] = 'Visi vartotojai saugumo grupėje';
$app_list_strings['date_time_period_list']['today'] = 'Šiandien';
$app_list_strings['date_time_period_list']['yesterday'] = 'Vakar';
$app_list_strings['date_time_period_list']['this_week'] = 'Šią savaitę';
$app_list_strings['date_time_period_list']['last_week'] = 'Parėjusią savaitę';
$app_list_strings['date_time_period_list']['last_month'] = 'Praėjusį mėnesį';
$app_list_strings['date_time_period_list']['this_month'] = 'Šį mėnesį';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Šį ketvirtį';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Praėjusį ketvirtį';
$app_list_strings['date_time_period_list']['this_year'] = 'Šiais metais';
$app_list_strings['date_time_period_list']['last_year'] = 'Paskutiniais metais';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'ant';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'ant';
$app_strings['LBL_CRON_AT'] = 'prie';
$app_strings['LBL_CRON_RAW'] = 'Išplėstinis';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Valanda';
$app_strings['LBL_CRON_DAY'] = 'Diena';
$app_strings['LBL_CRON_MONTH'] = 'Mėnesis';
$app_strings['LBL_CRON_DOW'] = 'Savaitės diena';
$app_strings['LBL_CRON_DAILY'] = 'Kasdieninis';
$app_strings['LBL_CRON_WEEKLY'] = 'Savaitinis';
$app_strings['LBL_CRON_MONTHLY'] = 'Mėnesinis';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Sutartys';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Sąskaitos';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF šablonai';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Prekių kategorijos';
$app_list_strings['moduleList']['AOS_Products'] = 'Produktai';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Pasiūlymai';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Prekių grupes';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Pasiūlymai';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analitikas';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurentas';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Klientas';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integruotojas';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investuotojas';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partneris';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Žiniasklaida';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Perspectyva';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Perpardavėjas';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Kiti';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Eskizas';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Derybos';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Pristatymas';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Sulaikyta';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Patvirtinta';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Sėkmingas';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Nesėkmingas sandoris';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Netinkamas';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Patvirtinta';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Nepatvirtina';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0 %';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'proc';
$app_list_strings['discount_list']['Amount'] = 'Iš viso';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analitikas';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurentas';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Klientas';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integruotojas';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investuotojas';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partneris';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Žiniasklaida';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Perspectyva';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Perpardavėjas';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Kiti';
$app_list_strings['invoice_status_dom']['Paid'] = 'Apmokėta';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Neapmokėta';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Atšaukta';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Neišrašyta sąskaita';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Išrašyta sąskaita';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Nešiojamieji kompiuteriai';
$app_list_strings['product_category_dom']['Desktops'] = 'Staliniai kompiuteriai';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Prekė';
$app_list_strings['product_type_dom']['Service'] = 'Paslauga';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Pasiūlymai';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Sąskaitos';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Sutartys';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Pasiūlymai';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Sąskaitos';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Sutartys';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Naudotojai';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontaktas';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Potencialus kontaktas';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Nepradėta';
$app_list_strings['contract_status_list']['In Progress'] = 'Progrese';
$app_list_strings['contract_status_list']['Signed'] = 'Pasirašyta';
$app_list_strings['contract_type_list']['Type'] = 'Tipas:';
$app_strings['LBL_PRINT_AS_PDF'] = 'Spausdinti kaip PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Prašome pasirinkti šabloną';
$app_strings['LBL_NO_TEMPLATE'] = 'Klaida\nNerastas šablonas\nPrašome nueiti į PDF šablonų modulį ir sukurti bent vieną';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Darbo eiga';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Darbo eigos sąlygos';
$app_list_strings['moduleList']['AOW_Processed'] = 'Proceso auditas';
$app_list_strings['moduleList']['AOW_Actions'] = 'Darbo eigos trigeriai: Pradžia';
$app_list_strings['aow_status_list']['Active'] = 'Aktyvu';
$app_list_strings['aow_status_list']['Inactive'] = 'Neaktyvu';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Lygus (kam)';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Nelygus';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Daugiau nei';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mažiau nei';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Didesnis arba lygus';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mažesnis arba lygus';
$app_list_strings['aow_operator_list']['Contains'] = 'Turi';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Prasideda su';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Baigiasi su';
$app_list_strings['aow_operator_list']['is_null'] = 'Yra Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Baigta';
$app_list_strings['aow_process_status_list']['Running'] = 'Veikia';
$app_list_strings['aow_process_status_list']['Pending'] = 'Laukiama';
$app_list_strings['aow_process_status_list']['Failed'] = 'Nepavyko';
$app_list_strings['aow_condition_operator_list']['And'] = 'ir';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ARBA';
$app_list_strings['aow_condition_type_list']['Value'] = 'Reikšmė';
$app_list_strings['aow_condition_type_list']['Field'] = 'Laukas';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Bet kokie pakeitimai';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Yra apsaugos grupėje';
$app_list_strings['aow_condition_type_list']['Date'] = 'Data';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Vienas iš';
$app_list_strings['aow_action_type_list']['Value'] = 'Reikšmė';
$app_list_strings['aow_action_type_list']['Field'] = 'Laukas';
$app_list_strings['aow_action_type_list']['Date'] = 'Data';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Mažiau užimtas';
$app_list_strings['aow_action_type_list']['Random'] = 'Bet koks';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Reikšmė';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Laukas';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutės';
$app_list_strings['aow_date_type_list']['hour'] = 'Valanda';
$app_list_strings['aow_date_type_list']['day'] = 'Dienos';
$app_list_strings['aow_date_type_list']['week'] = 'Savaitės';
$app_list_strings['aow_date_type_list']['month'] = 'Mėnesiai';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Darbo valandos';
$app_list_strings['aow_date_options']['now'] = 'Dabar';
$app_list_strings['aow_date_options']['today'] = 'Šiandien';
$app_list_strings['aow_date_options']['field'] = 'Šis laukelis';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Visi vartotojai';
$app_list_strings['aow_assign_options']['role'] = 'Visi vartotojai pagal funkciją';
$app_list_strings['aow_assign_options']['security_group'] = 'Visi vartotojai saugumo grupėje';
$app_list_strings['aow_email_type_list']['Email Address'] = 'el.paštas';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Įrašyti el.paštą';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Susijęs laukelis';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Vartotojas';
$app_list_strings['aow_email_type_list']['Users'] = 'Vartotojas';
$app_list_strings['aow_email_to_list']['to'] = 'Kam';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Visi įrašai';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nauji įrašai';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Pakeisti įrašai';
$app_list_strings['aow_run_when_list']['Always'] = 'Visada';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Tik išsaugojimo metu';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Tik suplanuotose užduotyse';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projektų šablonai';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Projekto užduočių šablonai';
$app_list_strings['relationship_type_list']['FS'] = 'Nuo pabaigos iki pradžios';
$app_list_strings['relationship_type_list']['SS'] = 'Pradžios pradžia';
$app_list_strings['duration_unit_dom']['Days'] = 'Dienos';
$app_list_strings['duration_unit_dom']['Hours'] = 'Valanda';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Peržiūrėti Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Peržiūrėti detaliau';
$app_strings['LBL_CREATE_PROJECT'] = 'Sukurti projektą';

//gmaps
$app_strings['LBL_MAP'] = 'Žemėlapis';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Ilguma';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Platuma';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode būsena';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresas';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Žemėlapiai';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Žemėlapiai - Žymekliai';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Žemėlapiai - Sritys';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Žemėlapiai - Adresų talpykla';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP partneriai';

$app_list_strings['map_unit_type_list']['mi'] = 'Mylios';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometrai';

$app_list_strings['map_module_type_list']['Accounts'] = 'Naudotojai';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontaktas';
$app_list_strings['map_module_type_list']['Cases'] = 'Atvejai';
$app_list_strings['map_module_type_list']['Leads'] = 'Potencialus kontaktas';
$app_list_strings['map_module_type_list']['Meetings'] = 'Susitikimai';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Galimybės';
$app_list_strings['map_module_type_list']['Project'] = 'Projektai';
$app_list_strings['map_module_type_list']['Prospects'] = 'Adresatai';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Klientas';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Adresatas';
$app_list_strings['map_relate_type_list']['Cases'] = 'Atvejis';
$app_list_strings['map_relate_type_list']['Leads'] = 'Galimybė';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Susitikimas';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Pardavimas';
$app_list_strings['map_relate_type_list']['Project'] = 'Projektas';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Tikslas';

$app_list_strings['marker_image_list']['accident'] = 'Atsitikimas';
$app_list_strings['marker_image_list']['administration'] = 'Administravimas';
$app_list_strings['marker_image_list']['agriculture'] = 'Žemės ūkio';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Orlaivis mažas';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Oro turizmas';
$app_list_strings['marker_image_list']['airport'] = 'Oro uostas';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteatras';
$app_list_strings['marker_image_list']['apartment'] = 'Apartamentai';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvariumas';
$app_list_strings['marker_image_list']['arch'] = 'Arka';
$app_list_strings['marker_image_list']['atm'] = 'ATM';
$app_list_strings['marker_image_list']['audio'] = 'Garsas';
$app_list_strings['marker_image_list']['bank'] = 'Bankas';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bankas Euras';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bankas Svaras';
$app_list_strings['marker_image_list']['bar'] = 'Baras';
$app_list_strings['marker_image_list']['beach'] = 'Paplūdimys';
$app_list_strings['marker_image_list']['beautiful'] = 'Gražus';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Dviračių stovėjimo aikštelė';
$app_list_strings['marker_image_list']['big_city'] = 'Didelis miestas';
$app_list_strings['marker_image_list']['bridge'] = 'Tiltas';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Tiltas, modernus';
$app_list_strings['marker_image_list']['bus'] = 'Autobusas';
$app_list_strings['marker_image_list']['cable_car'] = 'Automobilis su laidu';
$app_list_strings['marker_image_list']['car'] = 'Automobilis';
$app_list_strings['marker_image_list']['car_rental'] = 'Automobilių nuoma';
$app_list_strings['marker_image_list']['carrepair'] = 'Automobilių remontas';
$app_list_strings['marker_image_list']['castle'] = 'Pilis';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedra';
$app_list_strings['marker_image_list']['chapel'] = 'Koplyčia';
$app_list_strings['marker_image_list']['church'] = 'Bažnyčia';
$app_list_strings['marker_image_list']['city_square'] = 'Miesto aikštė';
$app_list_strings['marker_image_list']['cluster'] = 'Klasteris';
$app_list_strings['marker_image_list']['cluster_2'] = 'Klasteris 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Klasteris 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Klasteris 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Klasteris 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kava';
$app_list_strings['marker_image_list']['community_centre'] = 'Bendruomenės centras';
$app_list_strings['marker_image_list']['company'] = 'Įmonė';
$app_list_strings['marker_image_list']['conference'] = 'Konferencija';
$app_list_strings['marker_image_list']['construction'] = 'Statybos';
$app_list_strings['marker_image_list']['convenience'] = 'Patogumas';
$app_list_strings['marker_image_list']['court'] = 'Teismas';
$app_list_strings['marker_image_list']['cruise'] = 'Kruizas';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Valiutos keitimas';
$app_list_strings['marker_image_list']['customs'] = 'Muitinė';
$app_list_strings['marker_image_list']['cycling'] = 'Dviračių sportas';
$app_list_strings['marker_image_list']['dam'] = 'Užtvanka';
$app_list_strings['marker_image_list']['dentist'] = 'Odontologas';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Departamento parduotuvė';
$app_list_strings['marker_image_list']['disability'] = 'Negalia';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Neįgaliųjų stovėjimo aikštelė';
$app_list_strings['marker_image_list']['doctor'] = 'Gydytojas';
$app_list_strings['marker_image_list']['dog_leash'] = 'Šuns pavadėlis';
$app_list_strings['marker_image_list']['down'] = 'Žemyn';
$app_list_strings['marker_image_list']['down_left'] = 'Žemyn į kairę';
$app_list_strings['marker_image_list']['down_right'] = 'Žemyn į dešine';
$app_list_strings['marker_image_list']['down_then_left'] = 'Žemyn ir į kairę';
$app_list_strings['marker_image_list']['down_then_right'] = 'Žemyn ir į dešinę';
$app_list_strings['marker_image_list']['drugs'] = 'Vaistai';
$app_list_strings['marker_image_list']['elevator'] = 'Liftas';
$app_list_strings['marker_image_list']['embassy'] = 'Ambasada';
$app_list_strings['marker_image_list']['expert'] = 'Ekspertas';
$app_list_strings['marker_image_list']['factory'] = 'Gamykla';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Krintančios uolos';
$app_list_strings['marker_image_list']['fast_food'] = 'Greitas maistas';
$app_list_strings['marker_image_list']['festival'] = 'Festivalis';
$app_list_strings['marker_image_list']['fjord'] = 'Fiordas';
$app_list_strings['marker_image_list']['forest'] = 'Miškas';
$app_list_strings['marker_image_list']['fountain'] = 'Fontanas';
$app_list_strings['marker_image_list']['friday'] = 'Penktadienis';
$app_list_strings['marker_image_list']['garden'] = 'Sodas';
$app_list_strings['marker_image_list']['gas_station'] = 'Degalinė';
$app_list_strings['marker_image_list']['geyser'] = 'Geizeris';
$app_list_strings['marker_image_list']['gifts'] = 'Dovanos';
$app_list_strings['marker_image_list']['gourmet'] = 'Gurmanams';
$app_list_strings['marker_image_list']['grocery'] = 'Bakalėjos prekių parduotuvė';
$app_list_strings['marker_image_list']['hairsalon'] = 'Kirpykla';
$app_list_strings['marker_image_list']['helicopter'] = 'Sraigtasparnis';
$app_list_strings['marker_image_list']['highway'] = 'Automagistralė';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Istorinis ketvirtis';
$app_list_strings['marker_image_list']['home'] = 'Pradžia';
$app_list_strings['marker_image_list']['hospital'] = 'Ligoninė';
$app_list_strings['marker_image_list']['hostel'] = 'Motelis';
$app_list_strings['marker_image_list']['hotel'] = 'Viešbutis';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Viešbutis 1 žvaigždutės';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Viešbutis 2 žvaigždučių';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Viešbutis 3 žvaigždučių';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Viešbutis 4 žvaigždučių';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Viešbutis 5 žvaigždučių';
$app_list_strings['marker_image_list']['info'] = 'Informacija';
$app_list_strings['marker_image_list']['justice'] = 'Teisingumas';
$app_list_strings['marker_image_list']['lake'] = 'Ežeras';
$app_list_strings['marker_image_list']['laundromat'] = 'Skalbykla';
$app_list_strings['marker_image_list']['left'] = 'Kairė';
$app_list_strings['marker_image_list']['left_then_down'] = 'Į kairę tada į apačią';
$app_list_strings['marker_image_list']['left_then_up'] = 'Į kairę tada į viršų';
$app_list_strings['marker_image_list']['library'] = 'Biblioteka';
$app_list_strings['marker_image_list']['lighthouse'] = 'Švyturys';
$app_list_strings['marker_image_list']['liquor'] = 'Likeris';
$app_list_strings['marker_image_list']['lock'] = 'Užraktas';
$app_list_strings['marker_image_list']['main_road'] = 'Pagrindinis kelias';
$app_list_strings['marker_image_list']['massage'] = 'Masažas';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobiliojo ryšio bokštas';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modernus bokštas';
$app_list_strings['marker_image_list']['monastery'] = 'Vienuolynas';
$app_list_strings['marker_image_list']['monday'] = 'Pirmadienis';
$app_list_strings['marker_image_list']['monument'] = 'Paminklas';
$app_list_strings['marker_image_list']['mosque'] = 'Mečetė';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motociklas';
$app_list_strings['marker_image_list']['museum'] = 'Muziejus';
$app_list_strings['marker_image_list']['music_live'] = 'Gyva muzika';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Alyvos siurblio rankena';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Rūmai';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoraminis';
$app_list_strings['marker_image_list']['park'] = 'Parkas';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Palik automobilį ir važiuok';
$app_list_strings['marker_image_list']['parking'] = 'Stovėjimo aikštelė';
$app_list_strings['marker_image_list']['photo'] = 'Nuotrauka';
$app_list_strings['marker_image_list']['picnic'] = 'Piknikas';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Neaplankytos vietos';
$app_list_strings['marker_image_list']['places_visited'] = 'Aplankytos vietos';
$app_list_strings['marker_image_list']['playground'] = 'Žaidimų aikštelė';
$app_list_strings['marker_image_list']['police'] = 'Policija';
$app_list_strings['marker_image_list']['port'] = 'Portas';
$app_list_strings['marker_image_list']['postal'] = 'Pašto';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Elektros linijos stulpas';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektrinė';
$app_list_strings['marker_image_list']['power_substation'] = 'Transformatorinė';
$app_list_strings['marker_image_list']['public_art'] = 'Gatvės menas';
$app_list_strings['marker_image_list']['rain'] = 'Lietus';
$app_list_strings['marker_image_list']['real_estate'] = 'Nekilnojamasis turtas';
$app_list_strings['marker_image_list']['regroup'] = 'Pergrupuoti';
$app_list_strings['marker_image_list']['resort'] = 'Poilsiavietė';
$app_list_strings['marker_image_list']['restaurant'] = 'Restoranas';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Afrikiečių restoranas';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Berbekiu restoranas';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Bufetas';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Kiniečių restoranas';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Žuvies restoranas';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Žuvies traškučių restoranas';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gurmanų restoranas';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Graikų restoranas';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indų restoranas';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Italų restoranas';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japonų restoranas';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kababas';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Korejičių restoranas';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Viduržemio jūros restoranas';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Meksikiečių restoranas';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantiškas restoranas';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Tajų restoranas';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Turkiškas restoranas';
$app_list_strings['marker_image_list']['right'] = 'Dešinė';
$app_list_strings['marker_image_list']['right_then_down'] = 'Į dešine tada žemyn';
$app_list_strings['marker_image_list']['right_then_up'] = 'Į dešine tada į viršų';
$app_list_strings['marker_image_list']['saturday'] = 'Šeštadienis';
$app_list_strings['marker_image_list']['school'] = 'Mokykla';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Prekybos centras';
$app_list_strings['marker_image_list']['shore'] = 'Krantas';
$app_list_strings['marker_image_list']['sight'] = 'Regėjimo laukas';
$app_list_strings['marker_image_list']['small_city'] = 'Mažas miestas';
$app_list_strings['marker_image_list']['snow'] = 'Sniegas';
$app_list_strings['marker_image_list']['spaceport'] = 'Kosmodromas';
$app_list_strings['marker_image_list']['speed_100'] = 'Greitis 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Greitis 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Greitis 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Greitis 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Greitis 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Greitis 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Greitis 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Greitis 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Greitis 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Greitis 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Greitis 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Greitis 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Greičio kalnelis';
$app_list_strings['marker_image_list']['stadium'] = 'Stadijonas';
$app_list_strings['marker_image_list']['statue'] = 'Statula';
$app_list_strings['marker_image_list']['steam_train'] = 'Garvežys';
$app_list_strings['marker_image_list']['stop'] = 'Sustoti';
$app_list_strings['marker_image_list']['stoplight'] = 'Stabdymo žibintas';
$app_list_strings['marker_image_list']['subway'] = 'Metro';
$app_list_strings['marker_image_list']['sun'] = 'Sek';
$app_list_strings['marker_image_list']['sunday'] = 'Sekmadienis';
$app_list_strings['marker_image_list']['supermarket'] = 'Prekybos centras';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Užkandžiai "tapas"';
$app_list_strings['marker_image_list']['taxi'] = 'Taksi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taksi juosta';
$app_list_strings['marker_image_list']['teahouse'] = 'Arbatinė';
$app_list_strings['marker_image_list']['telephone'] = 'Telefonas';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindu šventykla';
$app_list_strings['marker_image_list']['terrace'] = 'Terasa';
$app_list_strings['marker_image_list']['text'] = 'Tekstas';
$app_list_strings['marker_image_list']['theater'] = 'Teatras';
$app_list_strings['marker_image_list']['theme_park'] = 'Teminis parkas';
$app_list_strings['marker_image_list']['thursday'] = 'Ketvirtadienis';
$app_list_strings['marker_image_list']['toilets'] = 'Tualetai';
$app_list_strings['marker_image_list']['toll_station'] = 'Rinkliavos stotis';
$app_list_strings['marker_image_list']['tower'] = 'Bokštas';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Eismo stebėjimo kamera';
$app_list_strings['marker_image_list']['train'] = 'Traukinys';
$app_list_strings['marker_image_list']['tram'] = 'Tramvajus';
$app_list_strings['marker_image_list']['truck'] = 'Sunkvežimis';
$app_list_strings['marker_image_list']['tuesday'] = 'Antradienis';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunelis';
$app_list_strings['marker_image_list']['turn_left'] = 'Sukti kairėn';
$app_list_strings['marker_image_list']['turn_right'] = 'Sukti dešinėn';
$app_list_strings['marker_image_list']['university'] = 'Universitetas';
$app_list_strings['marker_image_list']['up'] = 'Į viršų';
$app_list_strings['marker_image_list']['up_left'] = 'Į viršų kairėje';
$app_list_strings['marker_image_list']['up_right'] = 'Į viršų dešinėje';
$app_list_strings['marker_image_list']['up_then_left'] = 'Į viršų tada į kairę';
$app_list_strings['marker_image_list']['up_then_right'] = 'Į viršų tada į dešinę';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Vila';
$app_list_strings['marker_image_list']['water'] = 'Vanduo';
$app_list_strings['marker_image_list']['waterfall'] = 'Krioklys';
$app_list_strings['marker_image_list']['watermill'] = 'Vandens malūnas';
$app_list_strings['marker_image_list']['waterpark'] = 'Vandens parkas';
$app_list_strings['marker_image_list']['watertower'] = 'Vandens bokštas';
$app_list_strings['marker_image_list']['wednesday'] = 'Trečiadienis';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Vėjo jėgainė';
$app_list_strings['marker_image_list']['windmill'] = 'Vėjo malūnas';
$app_list_strings['marker_image_list']['winery'] = 'Vyninė';
$app_list_strings['marker_image_list']['work_office'] = 'Darbo stalas';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Pasaulinė paveldo vieta';
$app_list_strings['marker_image_list']['zoo'] = 'Zoologijos sodas';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Išvykęs Iš Biuro';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Susitikime';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Perplanuoti';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Prašome įvesti perplanavimo informacija';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Data:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Priežastis:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Prašome pasirinkti teisingą datą';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Pasirinkite priežastį';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Perplanuoti';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Skambučio istorija';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Skambučio Vykdimai';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Saugumo nustatymų valdymas';
$app_strings['LBL_SECURITYGROUP'] = 'Saugumo grupė';
$app_strings['LBL_ROLE'] = 'Rolė';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Išeinančio pašto paskyros';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Socialinės Feed Detalės';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtras';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tipas:';

$app_strings['LBL_ADD_TAB'] = 'Pridėti Kortelę';
$app_strings['LBL_EDIT_TAB'] = 'Redaguoti korteles';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Įveskite Prietaisų skydelio Pavadinimą:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Stulpelių Skaičius:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Ar tikrai norite ištrinti';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'prietaisų skydo?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Pridėti Skydelio Lapą';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Pašalinti Esamą Skydelio Lapą';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Pervadinti Skydelio Lapą';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Užduotys',
    'Meetings' => 'Susitikimai',
    'Calls' => 'Skambučiai',
    'Notes' => 'Užrašai',
    'Emails' => 'el.laiškai'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Šablono dalies redaktorius';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Jūs spragtelėjote už redaguojamo lauko ribų, neįrašydami savo pakeitimų. Spustelėkite Ok, jei norite prarasti savo pakeitimus arba Atšaukti, jei norite tęsti redagavimą";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Įvyko klaida pakrovimo srityje. Gali būti, kad baigėsi Jūsų sesija. Norėdami išspręsti šią problemą prašome prisijungti iš naujo";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Pardavimai',
    'getAccountsSpotsData' => 'Naudotojai',
    'getLeadsSpotsData' => 'Potencialus kontaktas',
    'getServiceSpotsData' => 'Paslauga',
    'getMarketingSpotsData' => 'Marketingas',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Įvykiai',
    'getQuotesSpotsData' => 'Pasiūlymai'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Darbo valandos';
$app_list_strings['business_hours_list']['0'] = '12:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '3:00';
$app_list_strings['business_hours_list']['4'] = '4:00';
$app_list_strings['business_hours_list']['5'] = '5:00';
$app_list_strings['business_hours_list']['6'] = '6:00';
$app_list_strings['business_hours_list']['7'] = '7:00';
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
$app_list_strings['day_list']['Monday'] = 'Pirmadienis';
$app_list_strings['day_list']['Tuesday'] = 'Antradienis';
$app_list_strings['day_list']['Wednesday'] = 'Trečiadienis';
$app_list_strings['day_list']['Thursday'] = 'Ketvirtadienis';
$app_list_strings['day_list']['Friday'] = 'Penktadienis';
$app_list_strings['day_list']['Saturday'] = 'Šeštadienis';
$app_list_strings['day_list']['Sunday'] = 'Sekmadienis';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Vokas';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Teisėtas';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portretas';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Peizažas';


$app_list_strings['moduleList']['SurveyResponses'] = 'Apklausos rezultatai';
$app_list_strings['moduleList']['Surveys'] = 'Anketos';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Anketos klausimų atsakymai';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Anketos klausimai';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Anketos klausimų opcijos';
$app_list_strings['survey_status_list']['Draft'] = 'Eskizas';
$app_list_strings['survey_status_list']['Public'] = 'Viešas';
$app_list_strings['survey_status_list']['Closed'] = 'Uždarytas';
$app_list_strings['surveys_question_type']['Text'] = 'Tekstas';
$app_list_strings['surveys_question_type']['Textbox'] = 'Teksto laukas';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Žymimas langelis';
$app_list_strings['surveys_question_type']['Radio'] = 'Radijas';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Iššokantis langas';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Daugiaviariantinis pasirinkimas';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrica';
$app_list_strings['surveys_question_type']['DateTime'] = 'Data ir laikas';
$app_list_strings['surveys_question_type']['Date'] = 'Data';
$app_list_strings['surveys_question_type']['Scale'] = 'Skalė';
$app_list_strings['surveys_question_type']['Rating'] = 'Bankas:';
$app_list_strings['surveys_matrix_options'][0] = 'Patenkintas';
$app_list_strings['surveys_matrix_options'][1] = 'Nei patenkintas, nei nepatenkintas';
$app_list_strings['surveys_matrix_options'][2] = 'Nepatenkintas';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Laukiantis patvirtinimo, patvirtinimas neišsiųstas';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Patvirtinimo laiškas neišsiųstas';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Laukiantis patvirtinimo, patvirtinimas išsiųstas';
$app_strings['LBL_OPT_IN'] = 'Patvirtintas';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Patvirtintas leidimas';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Atsisakė';
$app_strings['LBL_OPT_IN_INVALID'] = 'Neteisingas';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Išjungtas',
    'opt-in' => 'Pasirinkimas',
    'confirmed-opt-in' => 'Pasirinkimas patvirtintas'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Nepatvirtintas leidimas',
    'opt-in' => 'Pasirinkimas',
    'confirmed-opt-in' => 'Pasirinkimas patvirtintas'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Patvirtinimo el. laiškas yra pridėtas į siuntimo eilę, adresatui(-tams) %s. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Neįmanoma išsiųsti laiško elektroninio pašto adresu (-sais) %s, nes nieko nėra pasirinkto. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s elektroninio pašto adresas neturi galiojančio ID. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Du veiksnių autentifikavimas';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Dviejų veiksnių autentifikavimo kodas išsiųstas.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Dviejų veiksnių autentifikavimo kodo išsiųsti nepavyko.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Dėkojame už jūsų susidomėjimą.';

$app_strings['ERR_IP_CHANGE'] = 'Seansas buvo nutrauktas dėl svarbių pokyčių Jūsų IP adrese';
$app_strings['ERR_RETURN'] = 'Grįžti į pradžią';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Slaptažodžio suteikimas',
    'client_credentials' => 'Kliento kredencialai',
    'implicit' => 'Netiesioginis',
    'authorization_code' => 'Autorizavimo kodas'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutės',
    'hour' => 'valandos',
    'day' => 'dienos',
    'week' => 'savaitės',
    'month' => 'mėnesiai',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Paieška (nauja)',
    'UnifiedSearch' => 'Bendra globali paieška (senoji)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Asmeninis',
    'shared' => 'Bendras',
    'group' => 'Grupės',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Prisijungimas patvirtintas',
    'failed' => 'Nepavyko',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Progrese',
    'success' => 'Sėkmingai',
    'warning' => 'Perspėjimas:',
    'error' => 'Klaida',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API klaida';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API įvyko klaida.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'API versija: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Įsitikinkite, kad jus užpildetė būtinus laukus';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'JSON API tikisi, kad užklausos sudėtis bus JSON formatu';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Nepavyko patikrinti Json Api duomenų';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Nepavyko patikrinti Json Api duomenų atsako';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'JSON API nepavyko rasti resurso';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'JSON API tikisi, kad antraštė „Priimti“ bus application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'JSON API tikisi, kad "Content-Type" bus application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Šiai interneto naršyklei įjungti darbalaukio pranešimai.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Šios naršyklės darbalaukio pranešimai - išjungti. Naudodamiesi naršyklės nustatymais galite juos vėl įjungti.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Interneto naršyklė nepalaiko darbalaukio pranešimų.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Įvyko klaida: ';
$app_strings['LBL_CLICK_HERE'] = 'Spauskite čia';
$app_strings['LBL_TO_CONTINUE'] = ' , kad tęstumėte.';

$app_strings['IMAP_HANDLER_ERROR'] = 'KLAIDA: {error}; raktas buvo: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'Testiniai nustatymai pakeisti į "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Neteisinga užklausą, naudokite reikšmę "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Įvyko nežinoma klaida, raktas "{key}" neišsaugotas.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Testavimo nustatymai neegzistuoja.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Raktas nerastas.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Rakto saugojimo klaida.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Nežinoma klaida';
$app_strings['LBL_SEARCH_TITLE']                   = 'Paieška';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Įveskite paieškos kriterijų';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Paieška';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Paieška';
$app_strings['LBL_SEARCH_QUERY']                   = 'Paieškos užklausa: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Variklis: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Viso rezultatų: ';
$app_strings['LBL_SEARCH_PREV'] = 'Ankstesnė';
$app_strings['LBL_SEARCH_NEXT'] = 'Kita';
$app_strings['LBL_SEARCH_PAGE'] = 'Puslapis ';
$app_strings['LBL_SEARCH_OF'] = ' iš ';
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

$app_strings['LBL_KEY'] = 'Raktas';
$app_strings['LBL_VALUE'] = 'Reikšmė';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Parašas';

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
