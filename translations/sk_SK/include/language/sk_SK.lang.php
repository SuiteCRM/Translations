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
    'language_pack_name' => 'Slovenčina (Slovakia) - sk_SK',
    'moduleList' => array(
        'Home' => 'Domov',
        'ResourceCalendar' => 'Kalendár zdrojov',
        'Contacts' => 'Kontakty',
        'Accounts' => 'Firmy',
        'Alerts' => 'Upozornenia',
        'Opportunities' => 'Príležitosti',
        'Cases' => 'Prípady',
        'Notes' => 'Poznámky',
        'Calls' => 'Hovory',
        'TemplateSectionLine' => 'Šablona riadku sekcie',
        'Calls_Reschedule' => 'Preplánovanie hovorov',
        'Emails' => 'E-maily',
        'EAPM' => 'EAPM',
        'Meetings' => 'Schôdzky',
        'Tasks' => 'Úlohy',
        'Calendar' => 'Kalendár',
        'Leads' => 'Iniciatívy',
        'Currencies' => 'Meny',
        'Activities' => 'Aktivity',
        'Bugs' => 'Chyby',
        'Feeds' => 'RSS',
        'iFrames' => 'Moje stránky',
        'TimePeriods' => 'Časové obdobie',
        'ContractTypes' => 'Druhy zmlúv',
        'Schedulers' => 'Automatické plánovače',
        'Project' => 'Projekty',
        'ProjectTask' => 'Projektová úloha',
        'Campaigns' => 'Kampane',
        'CampaignLog' => 'Kampane, záznam',
        'Documents' => 'Dokumenty',
        'DocumentRevisions' => 'Revízie dokumentov',
        'Connectors' => 'Prípojky',
        'Roles' => 'Pozície',
        'Notifications' => 'Upozornenie',
        'Sync' => 'Synchronizácia',
        'Users' => 'Užívatelia',
        'Employees' => 'Spolupracovníci',
        'Administration' => 'Administrácia',
        'ACLRoles' => 'Pozície',
        'InboundEmail' => 'Prichadzajúci E-mail',
        'Releases' => 'Verzie',
        'Prospects' => 'Ciele',
        'Queues' => 'Fronty',
        'EmailMarketing' => 'E-mailový marketing',
        'EmailTemplates' => 'E-mailové šablóny',
        'ProspectLists' => 'Zoznamy cieľov',
        'SavedSearch' => 'Uložene hladanie',
        'UpgradeWizard' => 'Sprievodca aktualizáciou',
        'Trackers' => 'Sledovacia Url',
        'TrackerSessions' => 'Spojenia sledovacieho nástoja',
        'TrackerQueries' => 'Dotazy sledovacieho nástroja',
        'FAQ' => 'Otázky a odpovede',
        'Newsletters' => 'Novinky',
        'SugarFeed' => 'SuiteCRM Feed',
        'SugarFavorites' => 'Oblúbené',

        'OAuthKeys' => 'OAuth Spotrebiteľské klúče',
        'OAuthTokens' => 'OAuth Žetóny',
        'OAuth2Clients' => 'OAuth klienti',
        'OAuth2Tokens' => 'OAuth Žetóny',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Domov',
        'Dashboard' => 'Dashboard',
        'Contacts' => 'Kontakt',
        'Accounts' => 'Firma',
        'Opportunities' => 'Príležitosť',
        'Cases' => 'Prípady',
        'Notes' => 'Poznámky',
        'Calls' => 'Volanie',
        'Emails' => 'E-mail',
        'EmailTemplates' => 'Šablóna e-mailu',
        'Meetings' => 'Schôdzka',
        'Tasks' => 'Úlohy',
        'Calendar' => 'Kalendár',
        'Leads' => 'Iniciatíva',
        'Activities' => 'Aktivita',
        'Bugs' => 'Chyba',
        'KBDocuments' => 'Databáza vedomostí',
        'Feeds' => 'RSS',
        'iFrames' => 'Moje stránky',
        'TimePeriods' => 'Časové obdobie',
        'Project' => 'Projekt',
        'ProjectTask' => 'Projektová úloha',
        'Prospects' => 'Cieľ',
        'Campaigns' => 'Kampaň',
        'Documents' => 'Dokumenty',
        'Sync' => 'Synchronizácia',
        'Users' => 'Užívateľ',
        'SugarFavorites' => 'Oblúbené',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Áno',
        '2' => 'Nie',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analytik',
        'Competitor' => 'Konkurent',
        'Customer' => 'Zákazník',
        'Integrator' => 'Vyjednávač',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Press' => 'Tlač',
        'Prospect' => 'Leták',
        'Reseller' => 'Distributor',
        'Other' => 'Ostatné',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Odevný priemysel',
        'Banking' => 'Bankovníctvo',
        'Biotechnology' => 'Biotechnológie',
        'Chemicals' => 'Chemický priemysel',
        'Communications' => 'Komunikačný priemysel',
        'Construction' => 'Stavebnictvo',
        'Consulting' => 'Poradenstvo',
        'Education' => 'Vzdelávanie',
        'Electronics' => 'Elektronika',
        'Energy' => 'Energetický priemysel',
        'Engineering' => 'Strojárenstvo',
        'Entertainment' => 'Zábava',
        'Environmental' => 'Životné Prostredie',
        'Finance' => 'Financie',
        'Government' => 'Vláda',
        'Healthcare' => 'Zdravotníctvo',
        'Hospitality' => 'Pohostinstvo',
        'Insurance' => 'Poistenie',
        'Machinery' => 'Stroje',
        'Manufacturing' => 'Výroba',
        'Media' => 'Média',
        'Not For Profit' => 'Neziskové organizácie',
        'Recreation' => 'Rekreácia',
        'Retail' => 'Maloobchod',
        'Shipping' => 'Lodná doprava',
        'Technology' => 'Technológia',
        'Telecommunications' => 'Telekomunikácie',
        'Transportation' => 'Doprava',
        'Utilities' => 'Technické vybavenie',
        'Other' => 'Ostatné',
    ),
    'lead_source_default_key' => 'Vlastné generované',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Vstupný (studený) hovor',
        'Existing Customer' => 'Existujúci zákazník',
        'Self Generated' => 'Vlastné generované',
        'Employee' => 'Zamestnanec',
        'Partner' => 'Partner',
        'Public Relations' => 'Public Relations',
        'Direct Mail' => 'List (cez poštu)',
        'Conference' => 'Konferencia',
        'Trade Show' => 'Veľtrh',
        'Web Site' => 'Webstránka',
        'Word of mouth' => 'Ústna dohoda',
        'Email' => 'E-mail',
        'Campaign' => 'Kampaň',
        'Other' => 'Ostatné',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Existujúci biznis',
        'New Business' => 'Nový biznis',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Výnos',
        'Investment' => 'Investícia',
        'Expected_Revenue' => 'Očakávané výnosy',
        'Budget' => 'Rozpočet',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Osoba s hlavnými rozhodovacími právomocami',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Osoba s hlavnými rozhodovacími právomocami',
        'Business Decision Maker' => 'Osoba s biznis rozhodovacími právomocami',
        'Business Evaluator' => 'Biznis hodnotiteľ',
        'Technical Decision Maker' => 'Osoba s technickými rozhodovacími právomocami',
        'Technical Evaluator' => 'Technický hodnotiteľ',
        'Executive Sponsor' => 'Vedúci sponzor',
        'Influencer' => 'Ovplyvniteľ',
        'Other' => 'Ostatné',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primárny kontakt',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primárny kontakt',
        'Alternate Contact' => 'Alternatívny kontakt',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Vyhľadávanie',
    'sales_stage_dom' => array(
        'Prospecting' => 'Vyhľadávanie',
        'Qualification' => 'Kvalifikácia',
        'Needs Analysis' => 'analýza potieb',
        'Value Proposition' => 'hodnota propozície',
        'Id. Decision Makers' => 'Identifikácia osoby s rozhodovacou právomocou',
        'Perception Analysis' => 'analýza vnímania',
        'Proposal/Price Quote' => 'Návrh / Cenová ponuka',
        'Negotiation/Review' => 'Vyjednávanie / recenzie',
        'Closed Won' => 'Úspešne ukončené',
        'Closed Lost' => 'Neúspešne ukončenie',
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
        'Call' => 'Volanie',
        'Meeting' => 'Schôdzka',
        'Task' => 'Úlohy',
        'Email' => 'E-mail',
        'Note' => 'Poznámky',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Pán',
        'Ms.' => 'Slečna',
        'Mrs.' => 'Pani',
        'Miss' => 'Slečna',
        'Dr.' => 'Doktor',
        'Prof.' => 'Profesor',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => 'pred minutov',
        300 => 'pred 5 minutami',
        600 => 'pred 10 minutami',
        900 => 'pred 15 minutami',
        1800 => 'pred 30 minutami',
        3600 => 'pred hodinov',
        7200 => 'pred 2 hodinamy',
        10800 => 'pred 3 hodinamy',
        18000 => 'pred 5 hodinamy',
        86400 => '1 deň pred',
    ),

    'task_priority_default' => 'Stredná',
    'task_priority_dom' => array(
        'High' => 'Vysoká',
        'Medium' => 'Stredná',
        'Low' => 'Nízka',
    ),
    'task_status_default' => 'Nezačaté',
    'task_status_dom' => array(
        'Not Started' => 'Nezačaté',
        'In Progress' => 'Práve prebieha',
        'Completed' => 'Dokončený',
        'Pending Input' => 'Čakajúci na vstup',
        'Deferred' => 'Odložený',
    ),
    'meeting_status_default' => 'Plánované',
    'meeting_status_dom' => array(
        'Planned' => 'Plánované',
        'Held' => 'Pozdržaný',
        'Not Held' => 'Nepozdržaný',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Ostatné',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Plánované',
    'call_status_dom' => array(
        'Planned' => 'Plánované',
        'Held' => 'Pozdržaný',
        'Not Held' => 'Nepozdržaný',
    ),
    'call_direction_default' => 'Odchádzajúci',
    'call_direction_dom' => array(
        'Inbound' => 'Prichádzajúci',
        'Outbound' => 'Odchádzajúci',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nový',
        'Assigned' => 'Priradený',
        'In Process' => 'V priebehu',
        'Converted' => 'Konvertovaný',
        'Recycled' => 'Recyklovaný',
        'Dead' => 'Ukončený',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Vysoká',
        'P2' => 'Stredná',
        'P3' => 'Nízka',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Bežný Užívateľ',
        'Administrator' => 'Administrátor/Správca:',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Potvrzovací kód',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktívny',
        'Terminated' => 'Ukončený',
        'Leave of Absence' => 'Voľno',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Vysoká',
        'Medium' => 'Stredná',
        'Low' => 'Nízka',
    ),
    'project_task_priority_default' => 'Stredná',

    'project_task_status_options' => array(
        'Not Started' => 'Nezačaté',
        'In Progress' => 'Práve prebieha',
        'Completed' => 'Dokončený',
        'Pending Input' => 'Čakajúci na vstup',
        'Deferred' => 'Odložený',
    ),
    'project_task_utilization_options' => array(
        '0' => 'nič',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Koncept',
        'In Review' => 'V preskúmaní',
        'Underway' => 'Prebieha',
        'On_Hold' => 'Podržaný',
        'Completed' => 'Dokončený',
    ),
    'project_status_default' => 'Koncept',

    'project_duration_units_dom' => array(
        'Days' => 'Dni',
        'Hours' => 'Hodiny',
    ),

    'activity_status_type_dom' => array(
        '' => '- Žiadne -',
        'active' => 'Aktívny',
        'inactive' => 'Neaktívny',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Firmy',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Firma',
        'Opportunities' => 'Príležitosť',
        'Cases' => 'Prípady',
        'Leads' => 'Iniciatíva',
        'Contacts' => 'Kontakt', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Chyba',
        'Project' => 'Projekt',

        'Prospects' => 'Cieľ',
        'ProjectTask' => 'Projektová úloha',

        'Tasks' => 'Úlohy',

        'AOS_Contracts' => 'Zmluva',
        'AOS_Invoices' => 'Faktúra',
        'AOS_Quotes' => 'Cenová ponuka',
        'AOS_Products' => 'Produkt',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Firma',
        'Contacts' => 'Kontakt',
        'Opportunities' => 'Príležitosť',
        'Campaigns' => 'Kampaň',
        'Tasks' => 'Úlohy',
        'Emails' => 'E-mail',

        'Bugs' => 'Chyba',
        'Project' => 'Projekt',
        'ProjectTask' => 'Projektová úloha',
        'Prospects' => 'Cieľ',
        'Cases' => 'Prípady',
        'Leads' => 'Iniciatíva',

        'Meetings' => 'Schôdzka',
        'Calls' => 'Volanie',

        'AOS_Contracts' => 'Zmluva',
        'AOS_Invoices' => 'Faktúra',
        'AOS_Quotes' => 'Cenová ponuka',
        'AOS_Products' => 'Produkt',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Firma',
        'Contacts' => 'Kontakt',
        'Tasks' => 'Úlohy',
        'Opportunities' => 'Príležitosť',

        'Bugs' => 'Chyba',
        'Cases' => 'Prípady',
        'Leads' => 'Iniciatíva',

        'Project' => 'Projekt',
        'ProjectTask' => 'Projektová úloha',

        'Prospects' => 'Cieľ',

        'AOS_Contracts' => 'Zmluva',
        'AOS_Invoices' => 'Faktúra',
        'AOS_Quotes' => 'Cenová ponuka',
        'AOS_Products' => 'Produkt',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Ponuky',
        'AOS_Invoices' => 'Faktúry',
        'AOS_Contracts' => 'Zmluvy',
    ),
    'issue_priority_default_key' => 'Stredná',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgentné',
        'High' => 'Vysoká',
        'Medium' => 'Stredná',
        'Low' => 'Nízka',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Akceptovaný',
        'Duplicate' => 'Duplikovať',
        'Closed' => 'Ukončený',
        'Out of Date' => 'Zastaraný',
        'Invalid' => 'Neplatný',
    ),

    'issue_status_default_key' => 'Nový',
    'issue_status_dom' => array(
        'New' => 'Nový',
        'Assigned' => 'Priradený',
        'Closed' => 'Ukončený',
        'Pending' => 'Prebieha',
        'Rejected' => 'Zamietnutý',
    ),

    'bug_priority_default_key' => 'Stredná',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgentné',
        'High' => 'Vysoká',
        'Medium' => 'Stredná',
        'Low' => 'Nízka',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Akceptovaný',
        'Duplicate' => 'Duplikovať',
        'Fixed' => 'Fixný',
        'Out of Date' => 'Zastaraný',
        'Invalid' => 'Neplatný',
        'Later' => 'Neskôr',
    ),
    'bug_status_default_key' => 'Nový',
    'bug_status_dom' => array(
        'New' => 'Nový',
        'Assigned' => 'Priradený',
        'Closed' => 'Ukončený',
        'Pending' => 'Prebieha',
        'Rejected' => 'Zamietnutý',
    ),
    'bug_type_default_key' => 'Chyba',
    'bug_type_dom' => array(
        'Defect' => 'Vada',
        'Feature' => 'Vlastnosť',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administrácia',
        'Product' => 'Produkt',
        'User' => 'Užívateľ',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interný',
        'Forum' => 'Fórum',
        'Web' => 'Web',
        'InboundEmail' => 'E-mail',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Firmy',
        'Activities' => 'Aktivity',
        'Bugs' => 'Chyby',
        'Calendar' => 'Kalendár',
        'Calls' => 'Hovory',
        'Campaigns' => 'Kampane',
        'Cases' => 'Prípady',
        'Contacts' => 'Kontakty',
        'Currencies' => 'Meny',
        'Dashboard' => 'Dashboard',
        'Documents' => 'Dokumenty',
        'Emails' => 'E-maily',
        'Feeds' => 'Novinky',
        'Forecasts' => 'Prognózy',
        'Help' => 'Pomoc',
        'Home' => 'Domov',
        'Leads' => 'Iniciatívy',
        'Meetings' => 'Schôdzky',
        'Notes' => 'Poznámky',
        'Opportunities' => 'Príležitosti',
        'Outlook Plugin' => 'Outlook Plugin',
        'Projects' => 'Projekty',
        'Quotes' => 'Ponuky',
        'Releases' => 'Verzie',
        'RSS' => 'RSS',
        'Studio' => 'Štúdio',
        'Upgrade' => 'Upgrade',
        'Users' => 'Užívatelia',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Plánovanie',
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
        'Complete' => 'Kompletný',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Tele-obchody',
        'Mail' => 'Pošta',
        'Email' => 'E-mail',
        'Print' => 'Tlač',
        'Web' => 'Web',
        'Radio' => 'Rádio',
        'Television' => 'Televízia',
        'NewsLetter' => 'Noviny',
        'Survey' => 'Prieskum',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'týždenne',
        'Monthly' => 'mesačne',
        'Quarterly' => 'Štvrťročne',
        'Annually' => 'každoročne',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Január',
        '2' => 'Ferbuár',
        '3' => 'Marec',
        '4' => 'Apríl',
        '5' => 'Máj',
        '6' => 'Jún',
        '7' => 'Júl',
        '8' => 'August',
        '9' => 'September',
        '10' => 'Október',
        '11' => 'November',
        '12' => 'December',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Máj',
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
        '1' => 'Nedeľa',
        '2' => 'Pondelok',
        '3' => 'Utorok',
        '4' => 'Streda',
        '5' => 'Štvrtok',
        '6' => 'Piatok',
        '7' => 'Sobota',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Ne',
        '2' => 'Po',
        '3' => 'Ut',
        '4' => 'St',
        '5' => 'Št',
        '6' => 'Pia',
        '7' => 'So',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'ráno',
        'pm' => 'poobede',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'dopoludnia',
        'PM' => 'popoludní',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Osobný',
        'group' => 'Skupina',
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
        'personal' => 'Osobný',
        'group' => 'Skupina',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Osobný',
        'group' => 'Skupina',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Osobný',
        'group' => 'Skupina',
        'system' => 'Systém',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Odoslané',
        'archived' => 'Archivované',
        'draft' => 'Koncept',
        'inbound' => 'Prichádzajúci',
        'campaign' => 'Kampaň',
    ),
    'dom_email_status' => array(
        'archived' => 'Archivované',
        'closed' => 'Ukončený',
        'draft' => 'V návrhu',
        'read' => 'Prečítané',
        'replied' => 'Odpovedané',
        'sent' => 'Odoslané',
        'send_error' => 'Chyba odoslania',
        'unread' => 'Neprečítané',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archivované',
    ),

    'dom_email_server_type' => array(
        '' => '- Žiadne -',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '- Žiadne -',
        'createcase' => 'Vytvoriť prípad',
        'bounce' => 'Pružné zachádzanie',
    ),
    'dom_email_distribution' => array(
        '' => '- Žiadne -',
        'direct' => 'Priame pridelenie',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Najmenej-zaneprázdnený',
    ),
    'dom_email_errors' => array(
        1 => 'Pre priame priradenie položiek, vybrať iba jedného používateľa.',
        2 => 'Pre priame priradenie položiek musíte priradiť iba zaškrtnuté položky.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Áno',
        'bool_false' => 'Nie',
    ),
    'dom_int_bool' => array(
        1 => 'Áno',
        0 => 'Nie',
    ),
    'dom_switch_bool' => array(
        'on' => 'Áno',
        'off' => 'Nie',
        '' => 'Nie',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM poštový klient',
        'mailto' => 'Externý poštový klient',
    ),

    'dom_editor_type' => array(
        'none' => 'Priamy zápis HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Predvolený emailový formát',
        'html' => 'HTML Email',
        'plain' => 'Čistý emailový text',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Za dobou ukončenia, nevykonané',
        'ready' => 'Pripravené',
        'in progress' => 'Práve prebieha',
        'failed' => 'Neúspešný',
        'completed' => 'Dokončený',
        'no curl' => 'Nebežal: žiadne cURL nie je k dispozícii',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minúty',
        'hour' => 'Hodiny',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Báza znalostí',
        'Sales' => 'Predaje',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archivované',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketingová záruka',
        'Product Brochures' => 'Produktové brožúry',
        'FAQ' => 'Otázky a odpovede',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktívny',
        'Draft' => 'Koncept',
        'FAQ' => 'Otázky a odpovede',
        'Expired' => 'Uplynutý',
        'Under Review' => 'Kontrolovaný',
        'Pending' => 'Prebieha',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Zlúčenie emailov',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Licenčná zmluva',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Akceptovaný',
        'decline' => 'Zamietnutý',
        'tentative' => 'Predbežný',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Akceptovaný',
        'decline' => 'Zamietnutý',
        'tentative' => 'Predbežný',
        'none' => 'Nič',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Nič',
        'Daily' => 'Denne',
        'Weekly' => 'týždenne',
        'Monthly' => 'mesačne',
        'Yearly' => 'Ročne',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'deň(dni)',
        'Weekly' => 'tyždne',
        'Monthly' => 'mesiace',
        'Yearly' => 'rok(y)',
    ),

    'duration_dom' => array(
        '' => 'Nič',
        '900' => '15 minút',
        '1800' => '30 minút',
        '2700' => '45 minút',
        '3600' => '1 hodina',
        '5400' => '1,5 hodiny',
        '7200' => '2 hodiny',
        '10800' => '3 hodiny',
        '21600' => '6 hodín',
        '86400' => '1 deň',
        '172800' => '2 dni',
        '259200' => '3 dni',
        '604800' => '1 týždeň',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Prednastavený',
        'seed' => 'Pôvod',
        'exempt_domain' => 'Stlačený zoznam - podľa domény',
        'exempt_address' => 'Stlačený zoznam - podľa emailovej adresy',
        'exempt' => 'Stlačený list - podľa ID',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktívny',
        'inactive' => 'Neaktívny',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Odoslané správa/pokus',
        'send error' => 'Vrátené správy, Iné',
        'invalid email' => 'Vrátené správy, nesprávny email',
        'link' => 'Kliknúť na link',
        'viewed' => 'Prezreté správy',
        'removed' => 'Odhlásené',
        'lead' => 'Vytvorené smerovanie',
        'contact' => 'Kontakty vytvorené',
        'blocked' => 'Potlačené adresy alebo domény',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontakty',
        'Users' => 'Užívatelia',
        'Prospects' => 'Ciele',
        'Leads' => 'Iniciatívy',
        'Accounts' => 'Firmy',
    ),
    'merge_operators_dom' => array(
        'like' => 'Obsahuje',
        'exact' => 'presne',
        'start' => 'Začína sa',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Áno',
        'false' => 'Nie',
        'required' => 'Povinné',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Blokovaný',
        1 => 'povolené',
        2 => 'Filter',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Vysoká',
        'medium' => 'Stredná',
        'low' => 'Nízka',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Nezačaté',
        'inprogress' => 'Práve prebieha',
        'completed' => 'Dokončený',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Rozbaliť legendu',
        'collapselegend' => 'Kolaps legendy',
        'clickfordrilldown' => 'Kliknúť pre Rozpis',
        'detailview' => 'Viac detailov',
        'piechart' => 'Koláčový Graf',
        'groupchart' => 'Skupinový Graf',
        'stackedchart' => 'Súradnicový Graf',
        'barchart' => 'Stĺpcový Graf',
        'horizontalbarchart' => 'Horizontálny Stĺpcový Graf',
        'linechart' => 'Čiarový Graf',
        'noData' => 'Údaje nie sú k dispozícii',
        'print' => 'Tlač',
        'pieWedgeName' => 'sekcie',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktívny',
        'Inactive' => 'Neaktívny',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'jedna kvóta (&#39;)',
        '"' => 'dvojitá kvota (&#34;)',
        '' => 'Nič',
        'other' => 'Iné:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Iné:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nové okno',
        '_self' => 'Rovnaké okno',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Nepoužívajte auto-refresh',
        '30' => 'Každých 30 sekúnd',
        '60' => 'Každú minútu',
        '180' => 'Každé 3 minúty',
        '300' => 'Každých 5 minút',
        '600' => 'Každých 10 minút',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Nikdy',
        '30' => 'Každých 30 sekúnd',
        '60' => 'Každú minútu',
        '180' => 'Každé 3 minúty',
        '300' => 'Každých 5 minút',
        '600' => 'Každých 10 minút',
    ),
    'date_range_search_dom' => array(
        '=' => 'Rovná sa',
        'not_equal' => 'Nie na',
        'greater_than' => 'Po',
        'less_than' => 'Pred',
        'last_7_days' => 'Posledných 7 dní',
        'next_7_days' => 'Nasledujúcich 7 dní',
        'last_30_days' => 'Posledných 30 dní',
        'next_30_days' => 'Najbližších 30 dní',
        'last_month' => 'Minulý mesiac',
        'this_month' => 'Aktuálny mesiac',
        'next_month' => 'Nasledujúci mesiac',
        'last_year' => 'Minulý rok',
        'this_year' => 'Tento rok',
        'next_year' => 'Nasledujúci rok',
        'between' => 'Je medzi',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Rovná sa',
        'not_equal' => 'Nerovná sa',
        'greater_than' => 'Váčší ako',
        'greater_than_equals' => 'Väčšie alebo rovné',
        'less_than' => 'Je menej ako',
        'less_than_equals' => 'Menšie alebo rovné',
        'between' => 'Je medzi',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopírovať',
        'move' => 'Premiestniť',
        'donothing' => 'Nerobiť nič',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Výsledky',
    'ERR_SEARCH_INVALID_QUERY' => 'Vyskytla sa chyba počas vyhľadávania. Zloženie slov nemusí byť správne.',
    'ERR_SEARCH_NO_RESULTS' => 'Zadaným kritériám vyhľadávania nezodpovedajú žiadne výsledky. Skúste rozšíriť vyhľadávanie.',
    'LBL_SEARCH_PERFORMED_IN' => 'Hľadať v',
    'LBL_EMAIL_CODE' => 'Potvrzovací kód:',
    'LBL_SEND' => 'Odoslať',
    'LBL_LOGOUT' => 'Odhlásenie',
    'LBL_TOUR_NEXT' => 'Ďalší',
    'LBL_TOUR_SKIP' => 'Preskočiť',
    'LBL_TOUR_BACK' => 'Späť',
    'LBL_TOUR_TAKE_TOUR' => 'Vziať na prehliadku',
    'LBL_MOREDETAIL' => 'Viac detailov' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Upraviť' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Zobraziť' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filter' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Pridať' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Pridať e-mailovú adresu' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Skryť/Ukázať' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Vymazať' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Zmazať' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Odstrániť' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Odobrat e-mailovú adresu' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Odhlásiť sa',
    'LBL_ID_FF_INVALID' => 'Nastav ako chybný',
    'LBL_ADD' => 'Pridať' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo spoločnosti' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Vyskakovacie okienka Konektory',
    'LBL_CLOSEINLINE' => 'Uzavrieť',
    'LBL_VIEWINLINE' => 'Zobraziť',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Tlač',
    'LBL_HELP' => 'Pomoc',
    'LBL_ID_FF_SELECT' => 'Výber',
    'DEFAULT' => 'Základné',
    'LBL_SORT' => 'Triedenie',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Povoliť SMTP cez SSL alebo TLS?',
    'LBL_NO_ACTION' => 'Neexistuje žiadna akcia s názvom: %s',
    'LBL_NO_SHORTCUT_MENU' => 'K dispozícii nie sú žiadne akcie.',
    'LBL_NO_DATA' => 'Nenašli sa údaje',

    'LBL_ROUTING_FLAGGED' => 'Nastavený príznak',
    'LBL_ROUTING_TO' => 'do',
    'LBL_ROUTING_TO_ADDRESS' => 'k riešeniu',
    'LBL_ROUTING_WITH_TEMPLATE' => 'so šablónou',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Tento záznam v súčasnej dobe obsahuje hodnoty do poľa adresy. Ak chcete prepísať tieto hodnoty s nasledovnú adresu klienta, ktoré ste vybrali, kliknite na tlačidlo "OK". Ak chcete zachovať aktuálne hodnoty, kliknite na "Zrušiť".',
    'LBL_DROP_HERE' => '[Vlož sem]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Predvyplniť Gmail™ prednastavenia',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Meno',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Odchádzajúce Vlastnosti Mail Servera',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP heslo:',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Port:',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP Server',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP užívateľské meno',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Prednastavený',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Upozornenie: Chýba užívateľské meno a heslo pre odchádzajúce poštové konto.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Nastaviť e-mailové účty pre zobrazenie prichádzajúcich e-mailov z e-mailových účtov.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Uveďte e-mailové SMTP server informácie pre odchádzajúce e-maily v mailových účtoch.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Dokončené',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Zmazať',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'do',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'kópia',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-mailová adresa',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Meno',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nenájdené adresy',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Uložiť a pridať do adresára',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Vyberte príjemcu e-mailu',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresár',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Varovanie! Odchádzajúci účet sa snažíte odstrániť je spojený s existujúcim prichádzajúcim účtom. Ste si istí, že chcete pokračovať?',
    'LBL_EMAIL_ADDRESSES' => 'E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-mailová adresa',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Potvrdíte, že vaš e-mail bola vybraná v: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'E-mail nie je možné potvrdiť',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importovať do SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Úloha',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Pripojiť',
    'LBL_EMAIL_ATTACHMENT' => 'Pripojiť',
    'LBL_EMAIL_ATTACHMENTS' => 'Z lokálneho systému',
    'LBL_EMAIL_ATTACHMENTS2' => 'Z dokumentov SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Prílohy šablóny',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Súbor',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokumenty',
    'LBL_EMAIL_BCC' => 'BCC:',
    'LBL_EMAIL_CANCEL' => 'Zrušiť',
    'LBL_EMAIL_CC' => 'Kópia',
    'LBL_EMAIL_CHARSET' => 'Znaková sada',
    'LBL_EMAIL_CHECK' => 'Skontrolovať poštu',
    'LBL_EMAIL_CHECKING_NEW' => 'Kontrola nových e-mailom',
    'LBL_EMAIL_CHECKING_DESC' => 'Okamih prosím ...<br /><br />Pokiaľ sa jedná o prvú kontrolu poštového účtu, môže to nejakú dobu trvať.',
    'LBL_EMAIL_CLOSE' => 'Uzavrieť',
    'LBL_EMAIL_COFFEE_BREAK' => 'Okamih prosím ...<br /><br />Pokiaľ sa jedná o prvú kontrolu poštového účtu, môže to nejakú dobu trvať.',

    'LBL_EMAIL_COMPOSE' => 'E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Zadajte príjemcu (ov) pre tento e-mail.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Telo tohto e-mailu je prázdne. Želáte si ho odoslať?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Tento e-mail nemá predmet. Želáte si ho odoslať?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(žiadny predmet)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Prosím zadajte platnú e-mailovú adresu Komu, Kópiu a Skrytú kópiu',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Odstrániť tento e-mail?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Ste si istí, že chcete zmazať tento podpis?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Email bol odoslaný',

    'LBL_EMAIL_CREATE_NEW' => '- Vytvoriť na Uložiť -',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Násobok',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Prázdny',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Dátum odoslania odosielateľom',
    'LBL_EMAIL_DATE_TODAY' => 'Dnes',
    'LBL_EMAIL_DELETE' => 'Vymazať',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Zmazať vybrané správy?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-mail bol úspešne zmazaný.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Odstránenie správy',
    'LBL_EMAIL_DETAILS' => 'Detaily',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Iba Primárna adresa bude použitá pri práci s kontaktmi.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Vyprázdnenie koša',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Odstránenie odchádzajúce servera',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Vymazanie súborov z vyrovnávacej pamäte',
    'LBL_EMAIL_EMPTY_MSG' => 'Nie sú tu žiadne e-maily na zobrazenie.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Žiadne e-mailové adresy na zobrazenie.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Názov zložky je jedinečný a nie je prázdny. Prosím, skúste to znova.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Nemožno odstrániť zložku. Buď zložka alebo jej podzložka má e-maily alebo poštovú schránku priradenú k nemu.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Nemožno určiť zamýšľanú zložku z kontextu. Skúste to znova.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Skontrolujte prosím nastavenia.',
    'LBL_EMAIL_ERROR_DESC' => 'Boli zistené chyby:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nemáte prístup na toto miesto. Kontaktujte svojho administrátora k získaniu prístupu.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM zložka musí byť jedinečná.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Zadajte prosím nejaké kritériá vyhľadávania.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Nastala chyba',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Správa vymazaná zo servera',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Buď správa bude odstránená zo servera, alebo presunutá do iného priečinka',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Pripojenie k poštovému serveru zlyhalo. Prosím, obráťte sa na svojho správcu.',
    'LBL_EMAIL_ERROR_MOVE' => 'Presun emailu medzi servermi a / alebo poštových účtov nie je v súčasnej dobe podporované.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Presunúť Chybu',
    'LBL_EMAIL_ERROR_NAME' => 'Je nutné zadať názov.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Z adresy je povinné. Zadajte prosím platnú e-mailovú adresu.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Uveďte prosím súbor.',
    'LBL_EMAIL_ERROR_SERVER' => 'Mailová adresa servera je vyžadovaná.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'E-mailové konto nemusí byť uložené.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Došlo k chybe pri komunikácii s poštovým serverom.',
    'LBL_EMAIL_ERROR_USER' => 'Prihlasovacie meno je vyžadované.',
    'LBL_EMAIL_ERROR_PORT' => 'Poštový server má vyžadovaný port.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Server protokol je vyžadovaný.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Sledovaná zložka je nutná.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Kôš je požadovaný.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Táto informácia nie je k dispozícii',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Zadaný neodchádzajúci poštový server',
    'LBL_EMAIL_ERROR_SENDING' => 'Chyba odosielania E-mailu. Požiadajte správcu o pomoc.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Priečinky',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Pridať',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Nový priečinok',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Premenovať priečinok',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Uložiť',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Pridať túto zložku do',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Túto zložku nemožno meniť',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Ste si istí, že chcete zmazať túto zložku? \ Tento proces nemožno zvrátiť. \ Vypustený priečinok bude kaskádovaný do všetkých obsiahnutých zložiek.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Názov nového priečinku',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Prosím vyberte priečinok pred vykonaním tejto akcie.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Priečinok Manažment',

    'LBL_EMAIL_FORWARD' => 'Preposlať',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Automaticky [[count]] z [[total]] e-maily',
    'LBL_EMAIL_FROM' => 'Od',
    'LBL_EMAIL_GROUP' => 'skupina',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Skupina',
    'LBL_EMAIL_HOME_FOLDER' => 'Domov',
    'LBL_EMAIL_IE_DELETE' => 'Vymazať mailový účet',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Odstránenie podpisu',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Ste si istí, že chcete zmazať tento mail?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Zmazanie úspešné',
    'LBL_EMAIL_IE_SAVE' => 'Uloženie informácie o mailovom účte',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importovať email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Import do CRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importovať nastavenia',
    'LBL_EMAIL_INVALID' => 'Neplatný',
    'LBL_EMAIL_LOADING' => 'Načítavanie...',
    'LBL_EMAIL_MARK' => 'Označiť',
    'LBL_EMAIL_MARK_FLAGGED' => 'Ako označený',
    'LBL_EMAIL_MARK_READ' => 'Ako prečítané',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Ako neoznačený',
    'LBL_EMAIL_MARK_UNREAD' => 'Ako neprečítany',
    'LBL_EMAIL_ASSIGN_TO' => 'Priradiť k',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Vytvoriť priečinok',
    'LBL_EMAIL_MENU_COMPOSE' => 'Vytvoriť pre',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Vymazať priečinok',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Vyprázdniť koš',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchronizovať',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Vymazať súbory dočasnej pamäti',
    'LBL_EMAIL_MENU_REMOVE' => 'Odstrániť',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Premenovať priečinok',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Chýbajúci priečinok',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Prosím, urobte výberpred touto operáciou',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Vytvorenie priečinka (diaľkovo alebo v SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Odstránenie priečinka (diaľkové alebo SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Vyprázdnite všetky zložky z koša pre vaše mailové účty',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Označiť tieto e-maily ako prečítané',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Označiť tieto e-maily ako neoznačené',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Premenovanie priečinka (diaľkovo alebo v SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'správy',

    'LBL_EMAIL_ML_NAME' => 'Názov zoznamu',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Vybraný Zoznam Adries',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'K dispozícii Zoznam Adries',

    'LBL_EMAIL_MULTISELECT' => 'Ctrl-Kliknutím vyberte násobky<br />(Mac užívatelia používajú CMD-Click)',

    'LBL_EMAIL_NO' => 'Nie',
    'LBL_EMAIL_NOT_SENT' => 'System nemôže vykonať váš dopyt. Prosím, kontaktujte systémového administrátora.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Chvíľu...',
    'LBL_EMAIL_OPEN_ALL' => 'Otvorte viac správ',
    'LBL_EMAIL_OPTIONS' => 'Možnosti',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Rýchle vytvorenie',
    'LBL_EMAIL_OPT_OUT' => 'Odhlásené',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Prihlásené von a neplatný',
    'LBL_EMAIL_PERFORMING_TASK' => 'Zadaná úloha sa vykonáva',
    'LBL_EMAIL_PRIMARY' => 'Primárny',
    'LBL_EMAIL_PRINT' => 'Tlač',

    'LBL_EMAIL_QC_BUGS' => 'Chyba',
    'LBL_EMAIL_QC_CASES' => 'Prípady',
    'LBL_EMAIL_QC_LEADS' => 'Iniciatíva',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakt',
    'LBL_EMAIL_QC_TASKS' => 'Úlohy',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Príležitosť',
    'LBL_EMAIL_QUICK_CREATE' => 'Rýchle vytvorenie',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Obnova zložky',
    'LBL_EMAIL_RELATE_TO' => 'Vzťahujú',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Prezrieť vzťahy',
    'LBL_EMAIL_RECORD' => 'Záznam E-mail',
    'LBL_EMAIL_REMOVE' => 'Odstrániť',
    'LBL_EMAIL_REPLY' => 'Odpovedať',
    'LBL_EMAIL_REPLY_ALL' => 'Odpovedať všetkým',
    'LBL_EMAIL_REPLY_TO' => 'Odpovedať na',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Načítanie správy',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Výber e-mailového záznamu',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Prosím, vyberte iba jeden e-mailový záznam',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Návrat na predchádzajúci modul?',
    'LBL_EMAIL_REVERT' => 'Obrátiť',
    'LBL_EMAIL_RELATE_EMAIL' => 'Vzťahujúci sa na email',

    'LBL_EMAIL_RULES_TITLE' => 'Pravidlo riadenia',

    'LBL_EMAIL_SAVE' => 'Uložiť',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Uložiť & Odpovedať',
    'LBL_EMAIL_SAVE_DRAFT' => 'Uložiť návrh',
    'LBL_EMAIL_DRAFT_SAVED' => 'Návrh bol uložený',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Dátum od',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Dátum do',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Podmienkam vyhľadávania nezodpovedá žiadny záznam.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Výsledok vyhľadávania',

    'LBL_EMAIL_SELECT' => 'Výber',

    'LBL_EMAIL_SEND' => 'Odoslať',
    'LBL_EMAIL_SENDING_EMAIL' => 'Odoslať email',

    'LBL_EMAIL_SETTINGS' => 'Nastavenia',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Poštové účty',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Vyčistiť formulár',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Skontrolovať novú poštu',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Z adresy:',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-mailová adresa pre Oznámenie testu',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Od mena:',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Odpovedať na adresu',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchronizovať všetky mailové kontá',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'E-mail bol odoslaný na zadanú e-mailovú adresu, pomocou dodaných nastavení odchádzajúcej pošty. Skontrolujte prosím, či prijatý email overil správnosť nastavení.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Zobraz celý SMTP Log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Vykonať úplnú synchronizáciu? \ NLarge mailové kontá môže trvať niekoľko minút.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Kliknite na kláves Shift alebo Ctrl pre výber viac zložiek.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Hlavný',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Vytvorte skupinové zložky',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Upraviť skupinový priečinok',

    'LBL_EMAIL_SETTINGS_NAME' => 'Názov e-mailového účtu',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Vyberte počet e-mailov na stránke v priečinku Doručená pošta. Toto nastavenie môže vyžadovať aktualizáciu stránky, aby sa prejavili.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Načítanie e-mailového konta',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Nastavenia boli uložené.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Odoslať iba obyčajný textový e-mail',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Odoslať e-mailom iba obyčajný text',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Vizuálne nastavenia',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Predvoľby',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Používateľské zložky k dispozícii',
    'LBL_EMAIL_ERROR_PREPEND' => 'Chyba emailu:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Odchádzajúci poštový server vybraný pre poštové účet, ktorý používate, je neplatný. Skontrolujte nastavenia, alebo vyberte iný poštový server pre e-mailové konto.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Odchádzajúci poštový server nie je nakonfigurovaný na odosielanie mailov. Prosím nastavte si server odchádzajúcej pošty, alebo vyberte server odchádzajúcej pošty pre poštový účet, ktorý používate v nastavení účtu >> E-mailový účet.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Predvolený podpis',
    'LBL_EMAIL_SIGNATURES' => 'Podpisy',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ostatné',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[Vzdialené zložky]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM zložky]',
    'LBL_EMAIL_SUBJECT' => 'Predmet',
    'LBL_EMAIL_SUCCESS' => 'Úspech',
    'LBL_EMAIL_SUITE_FOLDER' => 'Priečinok SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Email šablóna tela je prázdna',
    'LBL_EMAIL_TEMPLATES' => 'Šablóny',
    'LBL_EMAIL_TO' => 'Komu',
    'LBL_EMAIL_VIEW' => 'Zobraziť',
    'LBL_EMAIL_VIEW_HEADERS' => 'Zobrazenie záhlavia',
    'LBL_EMAIL_VIEW_RAW' => 'Zobraziť Raw Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Táto funkcia je podporovaná pri použití protokolu POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Predvolený text odkazu.',
    'LBL_EMAIL_YES' => 'Áno',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Odoslať skúšobný e-mail',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Skúšobný Email odoslaný',
    'LBL_EMAIL_MESSAGE_NO' => 'Správa č.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import prešiel',
    'LBL_EMAIL_IMPORT_FAIL' => 'Import sa nepodaril, pretože buď je správa už importovaná alebo zo serveru odstránená',

    'LBL_LINK_NONE' => 'Nič',
    'LBL_LINK_ALL' => 'Všetko',
    'LBL_LINK_RECORDS' => 'evidencia',
    'LBL_LINK_SELECT' => 'Výber',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Potvrďte',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Chcete zatvoriť tento #modul#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Neplatná prípona súboru',

    'ERR_AJAX_LOAD' => 'Došlo k chybe:',
    'ERR_AJAX_LOAD_FAILURE' => 'Došlo k chybe pri spracovaní vašej požiadavky, prosím skúste to znova neskôr.',
    'ERR_AJAX_LOAD_FOOTER' => 'Ak táto chyba pretrváva, Váš administrátor by mal zakázať Ajax pre tento modul.',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Oddeľovač desatinných miest nemôže používať rovnaký znak ako oddeľovač tisícov. \\ N \\ n Prosím, zmeňte hodnoty.',
    'ERR_DELETE_RECORD' => 'K odstráneniu kontaktu musíte zadať číslo záznamu.',
    'ERR_EXPORT_DISABLED' => 'Exporty zablokované.',
    'ERR_EXPORT_TYPE' => 'Chyba pri exportovaní',
    'ERR_INVALID_EMAIL_ADDRESS' => 'Neplatná emailová adresa.',
    'ERR_INVALID_FILE_REFERENCE' => 'Neplatná Spisová značka',
    'ERR_NO_HEADER_ID' => 'Táto funkcia je k dispozícii v tejto téme.',
    'ERR_NOT_ADMIN' => 'Neoprávnený prístup k správe.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Chýba požadované pole',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Neplatné požadované pole:',
    'ERR_INVALID_VALUE' => 'Neplatná hodnota:',
    'ERR_NO_SUCH_FILE' => 'Súbor neexistuje v systéme',
    'ERR_NO_SINGLE_QUOTE' => 'Nedá sa použiť apostrof pre',
    'ERR_NOTHING_SELECTED' => 'Prosím, urobte výber pred pokračovaním.',
    'ERR_SELF_REPORTING' => 'Užívateľ nemôže hlásiť sám seba.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Žiadna zhoda s poľom:',
    'ERR_SQS_NO_MATCH' => 'Žiadna zhoda',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Prosím, zadajte "kľúčový" index v displayParams atribúte pre Meta-Data definíciu',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Chyba: Názov portál je už priradený k inému kontaktu.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Hodnota poľa nie je kompatibilná s presnou hodnotou',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Došlo k chybe pri pokuse o uloženie na externý účet.',
    'ERR_NO_DB' => 'Nedá sa pripojiť k databáze. Prosím pozrite si suitecrm.log podrobnosti.',
    'ERR_DB_FAIL' => 'Databáza zlyhala. Prosím pozrite si suitecrm.log podrobnosti.',
    'ERR_DB_VERSION' => 'SuiteCRM CRM {0} súbory môžu byť použité iba so SuiteCRM CRM {1} databázou.',

    'LBL_ACCOUNT' => 'Firma',
    'LBL_ACCOUNTS' => 'Firmy',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Zobraz zhrnutie',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Zobraz zhrnutie',
    'LBL_ADD_BUTTON' => 'Pridať',
    'LBL_ADD_DOCUMENT' => 'Pridať dokument',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Pridať k zoznamu cieľov',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Pridanie kontaktov do zoznamu cieľov',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kliknutím zavriete',
    'LBL_ADDITIONAL_DETAILS' => 'Rozširujúce detaily',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archív',
    'LBL_ASSIGNED_TO_USER' => 'Pridelené k užívateľovi',
    'LBL_ASSIGNED_TO' => 'Priradené ku:',
    'LBL_BACK' => 'Späť',
    'LBL_BILLING_ADDRESS' => 'Fakturačná adresa',
    'LBL_QUICK_CREATE' => 'Vytvoriť ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM- Komerčný Open Source CRM',
    'LBL_BUGS' => 'Chyby',
    'LBL_BY' => 'podľa',
    'LBL_CALLS' => 'Hovory',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Poslať kampaňové emaily v poradí',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Poslať',
    'LBL_CASE' => 'Prípady',
    'LBL_CASES' => 'Prípady',
    'LBL_CHANGE_PASSWORD' => 'Zmena generovaného hesla',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Skontrolovať všetko',
    'LBL_CITY' => 'Mesto',
    'LBL_CLEAR_BUTTON_LABEL' => 'Zmazať',
    'LBL_CLEAR_BUTTON_TITLE' => 'Zmazať',
    'LBL_CLEARALL' => 'Zmazať všetko',
    'LBL_CLOSE_BUTTON_TITLE' => 'Uzavrieť',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Zavrieť a vytvoriť nový',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Zavrieť a vytvoriť nový',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Otvorené úlohy',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Napísať E-mail',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Napísať E-mail',
    'LBL_SEARCH_DROPDOWN_YES' => 'Áno',
    'LBL_SEARCH_DROPDOWN_NO' => 'Nie',
    'LBL_CONTACT_LIST' => 'Zoznam kontaktov',
    'LBL_CONTACT' => 'Kontakt',
    'LBL_CONTACTS' => 'Kontakty',
    'LBL_CONTRACT' => 'Zmluva',
    'LBL_CONTRACTS' => 'Zmluvy',
    'LBL_COUNTRY' => 'Krajina:',
    'LBL_CREATE_BUTTON_LABEL' => 'Vytvoriť',
    'LBL_CREATED_BY_USER' => 'Vytvoril',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_CREATED' => 'Vytvorené podľa',
    'LBL_CURRENT_USER_FILTER' => 'Iba moje položky:',
    'LBL_CURRENCY' => 'Mena:',
    'LBL_DOCUMENTS' => 'Dokumenty',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia:',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy:',
    'LBL_EDIT_BUTTON' => 'Upraviť',
    'LBL_DUPLICATE_BUTTON' => 'Duplikovať',
    'LBL_DELETE_BUTTON' => 'Vymazať',
    'LBL_DELETE' => 'Vymazať',
    'LBL_DELETED' => 'Vymazané',
    'LBL_DIRECT_REPORTS' => 'Priame reporty',
    'LBL_DONE_BUTTON_LABEL' => 'Dokončené',
    'LBL_DONE_BUTTON_TITLE' => 'Dokončené',
    'LBL_FAVORITES' => 'Obľúbené',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Prosím, zvoľte súbor vizitky, vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard nemá všetky požadované polia pre tento modul. Pozri suitecrm.log podrobnosti.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Nahraný súbor presahuje limit veľkosti 30000 bajtov, ktorá bola zadaná vo formuláre HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Nepodarilo sa odovzdať súbor vCard. Pozrite súbor suitecrm.log pre podrobnosti.',
    'LBL_IMPORT_VCARD' => 'Import vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Import vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import vCard',
    'LBL_VIEW_BUTTON' => 'Zobraziť',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email ako PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email ako PDF',
    'LBL_EMAILS' => 'E-maily',
    'LBL_EMPLOYEES' => 'Spolupracovníci',
    'LBL_ENTER_DATE' => 'Vložiť dátum',
    'LBL_EXPORT' => 'Exportovať',
    'LBL_FAVORITES_FILTER' => 'Moje obľúbené:',
    'LBL_GO_BUTTON_LABEL' => 'Prejsť',
    'LBL_HIDE' => 'Skryť',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importovať',
    'LBL_IMPORT_STARTED' => 'Začiatok importu',
    'LBL_LAST_VIEWED' => 'Prezerali ste si',
    'LBL_LEADS' => 'Iniciatívy',
    'LBL_LESS' => 'menej',
    'LBL_CAMPAIGN' => 'Kampaň:',
    'LBL_CAMPAIGNS' => 'Kampane',
    'LBL_CAMPAIGNLOG' => 'Kampane, záznam',
    'LBL_CAMPAIGN_CONTACT' => 'Kampane',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Nič',
    'LBL_THEME' => 'Téma:',
    'LBL_FOUND_IN_RELEASE' => 'Nájdené vo verzii:',
    'LBL_FIXED_IN_RELEASE' => 'Nájdené vo verzii:',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_ASSIGNED_USER' => 'Užívateľ',
    'LBL_LIST_CONTACT_NAME' => 'Meno kontaktu:',
    'LBL_LIST_CONTACT_ROLE' => 'Pozícia kontaktu',
    'LBL_LIST_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_OF' => 'z',
    'LBL_LIST_PHONE' => 'Telefón',
    'LBL_LIST_RELATED_TO' => 'Súvisiaci k',
    'LBL_LIST_USER_NAME' => 'Užívateľské meno',
    'LBL_LISTVIEW_NO_SELECTED' => 'Aby ste mohli pokračovať prosím vyberte aspoň 1 záznam.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Aby ste mohli pokračovať prosím vyberte aspoň 2 záznamy.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Vybrané záznamy',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Vybrané:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Doktor',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Zrušiť',
    'LBL_VERIFY' => 'Overiť',
    'LBL_RESEND' => 'Poslať znova',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Zlúčenie emailov',
    'LBL_MASS_UPDATE' => 'Hromadná aktualizácia',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nie sú žiadne polia k dispozícii pre hromadnú aktualizáciu',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Odhlásiť sa z primárneho e-mailu',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Primárny e-mail prihlásenia sa',
    'LBL_MEETINGS' => 'Schôdzky',
    'LBL_MEETING_GO_BACK' => 'Vráťte sa na schôdzu',
    'LBL_MEMBERS' => 'Členovia',
    'LBL_MEMBER_OF' => 'Člen v',
    'LBL_MODIFIED_BY_USER' => 'Upravil',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_MODIFIED' => 'Zmenené podľa',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_MORE' => 'Viac',
    'LBL_MY_ACCOUNT' => 'Moje nastavenia',
    'LBL_NAME' => 'Meno',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Vytvoriť',
    'LBL_NEW_BUTTON_TITLE' => 'Vytvoriť',
    'LBL_NEXT_BUTTON_LABEL' => 'Ďalší',
    'LBL_NONE' => '- Žiadne -',
    'LBL_NOTES' => 'Poznámky',
    'LBL_OPPORTUNITIES' => 'Príležitosti',
    'LBL_OPPORTUNITY_NAME' => 'Názov obchodnej príležitosti:',
    'LBL_OPPORTUNITY' => 'Príležitosť',
    'LBL_OR' => 'ALEBO',
    'LBL_PANEL_OVERVIEW' => 'Prehľad',
    'LBL_PANEL_ASSIGNMENT' => 'INÉ',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Typ rodiča',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primárna adresa, Mesto:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primárna adresa: Krajina:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primárna adresa, PSČ:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primárna adresa, Kraj:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primárna adresa, Ulica 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primárna adresa, Ulica 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primárna adresa, Ulica:',
    'LBL_PRIMARY_ADDRESS' => 'Hlavná adresa:',

    'LBL_PROSPECTS' => 'Letáky',
    'LBL_PRODUCTS' => 'Produkty',
    'LBL_PROJECT_TASKS' => 'Projektová úloha',
    'LBL_PROJECTS' => 'Projekty',
    'LBL_QUOTES' => 'Ponuky',

    'LBL_RELATED' => 'Súvisiaci',
    'LBL_RELATED_RECORDS' => 'Súvisiace záznamy',
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_REPORTS_TO' => 'Záznamy k',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Označuje povinné pole',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Dokončené',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Plný formulár',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Plný formulár',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Uložiť & Vytvoriť nový',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Uložiť & Vytvoriť nový',
    'LBL_SAVE_OBJECT' => 'Uložiť {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Vyhľadať',
    'LBL_SEARCH_BUTTON_TITLE' => 'Vyhľadať',
    'LBL_FILTER' => 'Filter',
    'LBL_SEARCH' => 'Vyhľadať',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'viac',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Neplatná formát súboru, nahrať iba image súbor .',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Výber',
    'LBL_SELECT_BUTTON_TITLE' => 'Výber',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Prechádzať dokumenty',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Prechádzať dokumenty',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Vybrať kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Vybrať kontakt',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Vybrať si zo správ',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Vybrať si zo správ',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Výber užívateľa...',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Výber užívateľa...',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Zrušiť výber',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Zrušiť výber',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Zrušiť výber',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Zrušiť výber',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Vybrať súbor',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Vybrať súbor',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Vyčistiť súbor',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Vyčistiť súbor',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Výber užívateľa...',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Výber užívateľa...',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Čistý užívateľ',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Čistý užívateľ',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Výber účtu',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Výber účtu',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Vyčistiť klienta',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Vyčistiť klienta',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Vybrať kampaň',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Vybrať kampaň',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Vyčistiť kampaň',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Vyčistiť kampaň',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Vybrať kontakt',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Vybrať kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Vyčistiť kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Vyčistiť kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Vybrať tím',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Vybrať tím',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Vyčistiť tím',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Vyčistiť tím',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Zdroje použité pri výstavbe tejto stránky (dotazy, súbory)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundy.',
    'LBL_SERVER_RESPONSE_TIME' => 'Doba odozvy servera:',
    'LBL_SERVER_MEMORY_BYTES' => 'byty',
    'LBL_SERVER_MEMORY_USAGE' => 'Použitá pamäť servera : {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Použitie: - Modul: {0} - akcia: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Použitá pamäť Server Peak : {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresa dodania',
    'LBL_SHOW' => 'Zobraziť',
    'LBL_STATE' => 'Stav:',
    'LBL_STATUS_UPDATED' => 'Vaš Stav na túto akciu bol aktualizovaný!',
    'LBL_STATUS' => 'Stav:',
    'LBL_STREET' => 'Ulica',
    'LBL_SUBJECT' => 'Predmet',

    'LBL_INBOUNDEMAIL_ID' => 'Prichádzajúce Email ID',

    'LBL_SCENARIO_SALES' => 'Predaje',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Financie',
    'LBL_SCENARIO_SERVICE' => 'Služba',
    'LBL_SCENARIO_PROJECT' => 'Projektový manažment',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Tento scenár uľahčuje správu položky predaja',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Tento scenár uľahčuje správu marketingových prvkov',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Tento scenár uľahčuje správu položiek súvisiacich s financiami',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Tento scenár uľahčuje správu služby a súvisiacich položiek',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Tento scenár uľahčuje riadenie projektu a súvisiacich položiek',

    'LBL_SYNC' => 'Synchronizácia',
    'LBL_TABGROUP_ALL' => 'Všetko',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktivity',
    'LBL_TABGROUP_COLLABORATION' => 'Spolupráca',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Ostatné',
    'LBL_TABGROUP_SALES' => 'Predaje',
    'LBL_TABGROUP_SUPPORT' => 'Podpora',
    'LBL_TASKS' => 'Úlohy',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivovať správu',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivovať správu',
    'LBL_UNDELETE_BUTTON_LABEL' => 'obnoviť',
    'LBL_UNDELETE_BUTTON_TITLE' => 'obnoviť',
    'LBL_UNDELETE_BUTTON' => 'obnoviť',
    'LBL_UNDELETE' => 'obnoviť',
    'LBL_UNSYNC' => 'odsynchronizovať',
    'LBL_UPDATE' => 'Aktualizovať',
    'LBL_USER_LIST' => 'Zoznam užívateľov',
    'LBL_USERS' => 'Užívatelia',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Kontrola existujúceho e​​-mailového vstupu ...',
    'LBL_VERIFY_PORTAL_NAME' => 'Kontrola existujúceho portálu mena ...',
    'LBL_VIEW_IMAGE' => 'zobrazenie',

    'LNK_ABOUT' => 'O aplikácii',
    'LNK_ADVANCED_FILTER' => 'Rozšírený filter',
    'LNK_BASIC_FILTER' => 'Rychlý filter',
    'LBL_ADVANCED_SEARCH' => 'Rozšírený filter',
    'LBL_QUICK_FILTER' => 'Rychlý filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Zobraziť všetko',
    'LNK_CLOSE' => 'Uzavrieť',
    'LBL_MODIFY_CURRENT_FILTER' => 'Upraviť aktuálne filter',
    'LNK_SAVED_VIEWS' => 'Možnosti rozvrhnutia:',
    'LNK_DELETE' => 'Vymazať',
    'LNK_EDIT' => 'Upraviť',
    'LNK_GET_LATEST' => 'získať posledný',
    'LNK_GET_LATEST_TOOLTIP' => 'Nahradiť najnovšou verziou',
    'LNK_HELP' => 'Pomoc',
    'LNK_CREATE' => 'Vytvoriť',
    'LNK_LIST_END' => 'Ukončenie',
    'LNK_LIST_NEXT' => 'Ďalší',
    'LNK_LIST_PREVIOUS' => 'Predošlý',
    'LNK_LIST_RETURN' => 'Späť na zoznam',
    'LNK_LIST_START' => 'Štart',
    'LNK_LOAD_SIGNED' => 'podpísať',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Nahraďte podpísaným dokumentom',
    'LNK_PRINT' => 'Tlač',
    'LNK_BACKTOTOP' => 'Späť na začiatok',
    'LNK_REMOVE' => 'Odstrániť',
    'LNK_RESUME' => 'Pokračovať',
    'LNK_VIEW_CHANGE_LOG' => 'História zmien',

    'NTC_CLICK_BACK' => 'Prosím, kliknite na tlačidlo Späť prehliadača a opravte chybu.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Ste si istí, že chcete zmazať vybraný záznam (y)?',
    'NTC_TEMPLATE_IS_USED' => 'Šablóna sa používa aspoň v jednom email marketing zázname. Ste si istí, že ju chcete zmazať?',
    'NTC_TEMPLATES_IS_USED' => 'Nasledujúce šablóny sú použité v záznamoch e-mailových kampaní. Určite ich chcete vymazať?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Skutočne chcete zmazať tento záznam?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Ste si istí, že chcete zmazať',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Ste si istí, že chcete aktualizovať',
    'NTC_DELETE_SELECTED_RECORDS' => 'vybraný záznam (y)?',
    'NTC_LOGIN_MESSAGE' => 'prosím zadajte vaše používateľské meno a heslo',
    'NTC_NO_ITEMS_DISPLAY' => 'nič',
    'NTC_REMOVE_CONFIRMATION' => 'Ste si istí, že chcete odstrániť tento vzťah? Iba vzťah bude odstránený. Záznamy nebudú vymazané.',
    'NTC_REQUIRED' => 'Označuje povinné pole',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Vitajte',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Chystáte sa opustiť tento záznam bez uloženia zmien, ktoré ste vykonali na zázname. Ste si istí, že chcete opustiť tento záznam?',
    'ERROR_NO_RECORD' => 'Chyba pri načítaní záznamov. Tento záznam môže byť odstránený alebo nemusí byť povolené jeho zobrazenie.',
    'WARN_BROWSER_VERSION_WARNING' => 'Upozornenie: Verzia Vášho prehliadača už nie je podporovaná alebo používate nepodporovaný prehliadač.',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => 'Upozornenie: Kompatibilita Vášho IE prehliadača pre zobrazenie nie je podporovaná.',
    'ERROR_TYPE_NOT_VALID' => 'Chyba. Tento typ nie je platný.',
    'ERROR_NO_BEAN' => 'Nepodarilo sa získať peniaze',
    'LBL_DUP_MERGE' => 'najsť duplikáty',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Správa Odberateľov',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Správa predplatná pre',
    // Ajax status strings
    'LBL_LOADING' => 'Načítavanie...',
    'LBL_SEARCHING' => 'Vyhľadávanie...',
    'LBL_SAVING_LAYOUT' => 'Uložené rozvrhnutie ..',
    'LBL_SAVED_LAYOUT' => 'Dispozícia bola uložená.',
    'LBL_SAVED' => 'Uložené',
    'LBL_SAVING' => 'Ukladanie',
    'LBL_DISPLAY_COLUMNS' => 'Zobraziť stĺpce',
    'LBL_HIDE_COLUMNS' => 'Skryť stĺpce',
    'LBL_SEARCH_CRITERIA' => 'Kritériá vyhľadávania',
    'LBL_SAVED_VIEWS' => 'Uložené zobrazenia',
    'LBL_PROCESSING_REQUEST' => 'Spracovanie ..',
    'LBL_REQUEST_PROCESSED' => 'Dokončené',
    'LBL_AJAX_FAILURE' => 'ajax zlyhanie',
    'LBL_MERGE_DUPLICATES' => 'Zlúčiť',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Moje filtre',
    'LBL_SEARCH_POPULATE_ONLY' => 'Vyhľadávajte pomocou formulára vyššie',
    'LBL_DETAILVIEW' => 'Zobrazenie detailu',
    'LBL_LISTVIEW' => 'Zobraziť zoznam',
    'LBL_EDITVIEW' => 'Upraviť náhľad',
    'LBL_BILLING_STREET' => 'Ulica',
    'LBL_SHIPPING_STREET' => 'Ulica',
    'LBL_SEARCHFORM' => 'Vyhľadávací formulár',
    'LBL_SAVED_SEARCH_ERROR' => 'Zadajte názov pre toto zobrazenie.',
    'LBL_DISPLAY_LOG' => 'zobrazenie Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Systém',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'prestávka zasadnutia',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Vaša relácia je o vypršaní časového limitu 2 minút. Uložte svoju prácu.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Vaša relácia vypršala.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Schôdzka',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Volanie',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'čas',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'lokalita',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Popis:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Stav:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Týkajúce sa:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Udalosť',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Udalosť nie je nastavená.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Umiestnenie nie je nastavené.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Dátum začatia nie je definovaný.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Žiadny záznam.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Nenašli sa žiadné výsledky... Prosím zmeňte vyhľadávacie kritéria a skúsite to znova.',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Pre: <item1>, výsledky neboli nájdené',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Vytvoriť <item1>, ako nový <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'alebo zmente Vaše vyhľadávacie kritériá',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Momentálne nemáte uložené žiadne záznamy. <item2> alebo <item3>.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Pridať do mojich obľúbených',
    'LBL_CREATE_CONTACT' => 'Vytvoriť kontakt',
    'LBL_CREATE_CASE' => 'Vytvoriť prípad',
    'LBL_CREATE_NOTE' => 'Vytvoriť poznámku',
    'LBL_CREATE_OPPORTUNITY' => 'Vytvoriť príležitosť',
    'LBL_SCHEDULE_CALL' => 'Naplánovať hovor',
    'LBL_SCHEDULE_MEETING' => 'Harmonogram rokovaní',
    'LBL_CREATE_TASK' => 'Vytvoriť úlohu',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'generovať z',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Uložiť Web viesť formulár',
    'LBL_AVAILABLE_FIELDS' => 'Dostupné polia',
    'LBL_FIRST_FORM_COLUMN' => 'Prvý stĺpec formulára',
    'LBL_SECOND_FORM_COLUMN' => 'Druhý stĺpec formulára',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Chýba požadované pole: Priradené k',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Chýba požadované pole: Súvisiace kampane',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Vytvoriť webový formulár ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Odoslaním tohto formulára sa vytvorí ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Pridať všetky polia',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Obnoviť všetky polia',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'odstániť všetky polia',
    'LBL_NEXT_BTN' => 'Ďalší',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Iba typ obrazu nástavec môže byť vložený',
    'LBL_TRAINING' => 'Diskusné fórum (Support)',
    'ERR_MSSQL_DB_CONTEXT' => 'zmeniť kontext databázy do',
    'ERR_MSSQL_WARNING' => 'Výstraha',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Chyba: súbor [[file]] chýba. Nemožno vytvoriť, pretože neexistuje zodpovedajúci HTML súbor nebol nájdený.',
    'ERR_CANNOT_FIND_MODULE' => 'Chyba: Modul [module] neexistuje.',
    'LBL_ALT_ADDRESS' => 'Iná adresa:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Chyba: Existuje nerovný počet argumentov pre "kľúč" a "kópia" prvkov v poli displayParams.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Hlavný',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtre',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Len moje položky',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titul',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Zobraziť riadky',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Dosiahli ste maximálny počet SuiteCRM Dashletov, nastavený administrátorom. Ráčte nejaký SuiteCRM Dashlet zrušiť, aby ste mohli pridať nový.',
    'LBL_ADDING_DASHLET' => 'Pridanie SuiteCRM Dashlet',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet pridaný',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Ste si istý, že chete odobrať tento SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Odoberanie SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet odobratý',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Čakajte prosím, načítavavanie stránky...',

    'LBL_RELOAD_PAGE' => 'Ráčte <a href="javascript: window.location.reload()">okno načítať znovu</a> k použitiu tohto SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Pridať SuiteCRM Dashlets',
    'LBL_CLOSE_DASHLETS' => 'Uzavrieť',
    'LBL_OPTIONS' => 'Možnosti',
    'LBL_1_COLUMN' => 'stĺpec 1',
    'LBL_2_COLUMN' => 'stĺpec 2',
    'LBL_3_COLUMN' => 'stĺpec 3',
    'LBL_PAGE_NAME' => 'názov strany',

    'LBL_SEARCH_RESULTS' => 'Výsledok vyhľadávania',
    'LBL_SEARCH_MODULES' => 'Moduly',
    'LBL_SEARCH_TOOLS' => 'Nástroje',
    'LBL_SEARCH_HELP_TITLE' => 'Tipy pre vyhľadávanie',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Žiadny obrázok',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Skopírujte adresu zľava:',
    'LBL_SAVE_AND_CONTINUE' => 'Uložiť a pokračovať',

    'LBL_SEARCH_HELP_TEXT' => 'MultiSelect kontroly<br /><br />    Kliknite na hodnoty a vyberte atribúty.<br />    Ctrl a kliknutím vyberte viac. Mac užívatelia používajú CMD-click.<br />    Ak chcete vybrať všetky hodnoty medzi dvoma atribútamy, kliknite na tlačidlo prvú hodnotu a potom presunúť na poslednú hodnotu.<br /><br />Advanced Search & Layout Options<br /><br />Pomocou Uloženého hľadania a možnosti rozloženia, môžete uložiť súbor vyhľadávacích parametrov a / alebo vlastné zobrazenie zoznamu rozloženie tak, aby sa rýchlo získali požadované výsledky vyhľadávania v budúcnosti. Môžete uložiť neobmedzený počet vlastných vyhľadávaní a rozložení. Všetky uložené vyhľadávania sa objavia podľa názvu v Uložených hľadaní zoznamu, s posledným vloženým uloženým vyhľadávaním sa objaví v hornej časti zoznamu.<br /><br />Ak chcete prispôsobiť zobrazenie zoznamu rozvrhnutia, použite skryť stĺpce a zobraziť stĺpce políčka, ktoré polia sa zobrazia vo výsledkoch vyhľadávania. Napríklad, môžete zobraziť alebo skryť podrobnosti, ako je názov záznamu, a účelový užívateľ, a účelový tím vo výsledkoch vyhľadávania. Ak chcete pridať stĺpec do zoznamu zobrazenia, vyberte pole zo zoznamu Skryť stĺpce a použite ľavú šípku presunúť do zoznamu zobraziť stĺpce. Ak chcete odstrániť stĺpec z zobrazenia zoznamu, vyberte ju zo zoznamu zobrazenia stĺpce a použite šípku vpravo presuňte ho do zoznamu skryť stĺpce.<br /><br />Ak uložíte nastavenie rozloženia, budete môcť načítať kedykoľvek zobrazené výsledky hľadania vo vlastnom rozložení.<br /><br />Ak chcete uložiť a aktualizovať vyhľadávanie a / alebo rozvrhnutia:<br /><br />    Zadajte názov pre výsledky vyhľadávania v poli Uložiť hľadanie ako pole a kliknite na tlačidlo Save. Meno sa teraz zobrazí v zozname uložených hľadaní v blízkosti tlačidlo Clear.<br />    Ak chcete zobraziť uložené hľadania, vyberte ho zo zoznamu uložených hľadaní. Výsledky vyhľadávania sa zobrazia v zobrazení zoznamu.<br />    Ak chcete aktualizovať vlastnosti uloženého vyhľadávania, vyberte uložené hľadania zo zoznamu, zadajte nové kritériá vyhľadávania a / alebo rozvrhnutia možnosti v rozšírenom vyhľadávaní oblasti, a kliknite na tlačidlo Aktualizovať vedľa Zmeniť Aktuálne Hľadať.<br />    Ak chcete odstrániť uložené hľadania, vyberte ju v zozname uložených hľadanie, kliknite na tlačidlo Odstrániť vedľa zmeniť aktuálne Hľadať a potom kliknite na tlačidlo OK potvrďte odstránenie.<br /><br />Tipy<br /><br />Pomocou% ako zástupný operátor si môžete vytvoriť svoj vyhľadávací širšie. Napríklad miesto len hľadá výsledky, že rovnaké "Apples" môžete zmeniť hľadanie o "Apple%", ktorý by zodpovedal všetkým výsledkom ktoré začínajú slovom Apple, ale môže obsahovať iné znaky rovnako.',

    //resource management
    'ERR_QUERY_LIMIT' => 'Chyba: Query limit $limit dosiahol za $module modul.',
    'ERROR_NOTIFY_OVERRIDE' => 'Chyba: ResourceObserver->notify() musí byť prepísaný.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Chyba: Nemožno vytvoriť monitor, pretože metadáta súbor je prázdny, alebo súbor neexistuje.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Chyba: Nie je monitor nakonfigurovaný pre požadovanie názovu',
    'ERR_UNDEFINED_METRIC' => 'Chyba: Nie je možné nastaviť hodnotu nedefinovanej metrickej',
    'ERR_STORE_FILE_MISSING' => 'Chyba: Nemožno nájsť Store vykonávanie súboru',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'ID užívateľa',
    'LBL_MODULE_NAME' => 'Názov modulu',
    'LBL_ITEM_ID' => 'položka Id',
    'LBL_ITEM_SUMMARY' => 'sumár položiek',
    'LBL_ACTION' => 'Akcia',
    'LBL_SESSION_ID' => 'Id zasadnutia',
    'LBL_BREADCRUMBSTACK_CREATED' => 'Breadcrumb Stack vytvorený pre ID užívateľa {0}',
    'LBL_VISIBLE' => 'Viditeľný formát údajov:',
    'LBL_DATE_LAST_ACTION' => 'Dátum poslednej akcie',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nie je pred',
    'MSG_IS_MORE_THAN' => 'je viac než',
    'MSG_SHOULD_BE' => 'by mala byť',
    'MSG_OR_GREATER' => 'alebo vyšší',

    'LBL_LIST' => 'Zoznam',
    'LBL_CREATE_BUG' => 'Vytvoriť chybu',

    'LBL_OBJECT_IMAGE' => 'objekt obrázok',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'zadať dátum',

    'LBL_VALIDATE_RANGE' => 'nie je v platnom rozsahu',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Vyberte si prosím oboje, ako počiatočný tak aj koncový dátum rozsahu',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Vyberte počiatočný a koncový rozsah položiek',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Všetko',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Chyba: Počet zoskupenia parametra peniazí nezodpovedá počet zoskupenia výsledkov.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Chyba: Chýbajúce mapovanie vstupu pre modul.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Chyba: Nemožno načítať dáta pre {0} konektor. Služba môže v súčasnej dobe byť nedostupná alebo nastavenia konfigurácie môžu byť neplatné. Konektor chybové hlásenie: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pre optimálne skúsenosti s používaním IIS / FastCGI SAPI, nastaviť fastcgi.logging na 0 v súbore php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Meno',
    'LBL_COLLECTION_PRIMARY' => 'Primárny',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Povinné pole je prázdné',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_DESCRIPTION' => 'Popis',

    'LBL_YESTERDAY' => 'Včera',
    'LBL_TODAY' => 'dnes',
    'LBL_TOMORROW' => 'zajtra',
    'LBL_NEXT_WEEK' => 'nasledovný týždeň',
    'LBL_NEXT_MONDAY' => 'ďaľsí pondelok',
    'LBL_NEXT_FRIDAY' => 'ďaľší piatok',
    'LBL_TWO_WEEKS' => 'dva týždne',
    'LBL_NEXT_MONTH' => 'nesledujúci mesiac',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'prvý den ďaľsieho mesiaca',
    'LBL_THREE_MONTHS' => 'tri mesiace',
    'LBL_SIXMONTHS' => 'šesť mesiacov',
    'LBL_NEXT_YEAR' => 'Ďalší rok',

    //Datetimecombo fields
    'LBL_HOURS' => 'Hodiny',
    'LBL_MINUTES' => 'Minúty',
    'LBL_MERIDIEM' => 'Meridia',
    'LBL_DATE' => 'Dátum',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'auto-obnova',

    'LBL_DURATION_DAY' => 'deň',
    'LBL_DURATION_HOUR' => 'hodina',
    'LBL_DURATION_MINUTE' => 'minuta',
    'LBL_DURATION_DAYS' => 'dni',
    'LBL_DURATION_HOURS' => 'Čas trvania (hodiny)',
    'LBL_DURATION_MINUTES' => 'Čas trvania (minúty)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'zvoľte mesiac',
    'LBL_ENTER_YEAR' => 'zadať rok',
    'LBL_ENTER_VALID_YEAR' => 'Zadajte prosím platný rok',

    //File write error label
    'ERR_FILE_WRITE' => 'Chyba: Nemožno zapísať súbor {0}. Skontrolujte prosím, či systém a oprávnenie webového servera.',
    'ERR_FILE_NOT_FOUND' => 'Chyba: Nemožno načítať súbor {0}. Skontrolujte prosím, či systém a oprávnenie webového servera.',

    'LBL_AND' => 'a',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Súbor z externého zdroja',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Bezpečnosť',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => 'Toto je ukážkový súbor importu, ktorý poskytuje príklad očakávaného obsahu súboru, ktorý je pripravený pre import. "" Súbor je oddelený čiarkami. CSV súbor, pomocou dvojitých úvodzoviek ako pole kvalifikátor. "" Riadok záhlavia . je na najvyššom riadoku v súbore a obsahuje popisky polí, ako by ste vidieť v aplikácii "". Tieto štítky sa používajú pre mapovanie dát do súboru do polí v aplikácii "" Poznámky: mená databázy môžu byť tiež použité v záhlaví. Táto funkcia je užitočná, ak používate phpMyAdmin alebo iný databázový nástroj poskytujúci exportovaný zoznam údajov, ktoré chcete importovať. "" Poradie stĺpcov nie je kritický, proces importu zodpovedá dátam do príslušných polí na základe riadku hlavičky. "" Ak chcete použiť tento súbor ako šablónu, urobte nasledovné: "" 1. Odstráňte vzorové riadky dát "," 2. Odstráňte text nápovedy, ktoré čítate práve teraz "" 3. Vstupné svoje dáta do príslušných riadkov a stĺpcov "" 4. Uložte súbor do známeho umiestnenia na vašom systéme "" 5. Kliknite na voľbu Import z ponuky Akcie v aplikácii a vyberte súbor, ktorý chcete nahrať "',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Žiadne aktuálne hlásenia',
    'LBL_ALT_SORT_DESC' => 'Zoradené zostupne',
    'LBL_ALT_SORT_ASC' => 'Zoradené vzostupne',
    'LBL_ALT_SORT' => 'Triedenie',
    'LBL_ALT_SHOW_OPTIONS' => 'Zobraziť možnosti',
    'LBL_ALT_HIDE_OPTIONS' => 'Skryť možnosti',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Presun vybranej položky do zoznamu na ľavej strane',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Presun vybranej položky do zoznamu na pravej strane',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Presun vybraných položiek v zobrazenom zozname poradí',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Presun vybranej položky v zobrazenom zozname poradí',
    'LBL_ALT_INFO' => 'Informácia',
    'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below. Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'e-mailová adresa',
    'LBL_EMAIL_OPT_TITLE' => 'odhlásená e-mailová adresa',
    'LBL_EMAIL_INV_TITLE' => 'neplatná emailová adresa',
    'LBL_EMAIL_PRIM_TITLE' => 'Vytvoriť primárnu e-mailovú adresu',
    'LBL_SELECT_ALL_TITLE' => 'zadať všetko',
    'LBL_SELECT_THIS_ROW_TITLE' => 'zadať tento riadok',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'CHYBA: Došlo k chybe počas nahrávania. Kód chyby: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'CHYBA: Došlo k chybe počas nahrávania. Kód chyby: {0} - {1}. Upload_maxsize je {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'CHYBA: Došlo k chybe počas svojho nahrávania, prosím kontaktujte správcu.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Veľkosť súboru ({0} bytov) prekročila maximálnu hodnotu: {1} bajtov',
    'UPLOAD_REQUEST_ERROR' => 'Došlo k chybe. Prosím aktualizujte svoju stránku a skúste to znova.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Upraviť',
    'LBL_EDIT_BUTTON_TITLE' => 'Upraviť',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikovať',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikovať',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Vymazať',
    'LBL_DELETE_BUTTON_TITLE' => 'Vymazať',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Akcia',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Uložiť',
    'LBL_SAVE_BUTTON_TITLE' => 'Uložiť',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Zrušiť',
    'LBL_CANCEL_BUTTON_TITLE' => 'Zrušiť',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'Konektor poľa v {0} bol definovaný chybne, alebo je prázdna, a nemohli byť použité.',
    'ERR_SUHOSIN' => 'Nahraný prúd je blokovaný Suhosin, pridajte prosím "Upload" ku suhosin.executor.include.whitelist (pozri suitecrm.log pre viac informácií)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Zlá odpoveď zo servera',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Cenová ponuka',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Predajná cena',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => '-1',
        '5' => 'Každých 5 minút',
        '15' => 'Každých 15 minut',
        '30' => 'Každých 30 minut',
        '60' => 'Každú hodinu',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Pripomenka je prázdna alebo nesprávna.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Pripomienka nie je nastavená ako emaii alebo vyskakovacie okno.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Žiadny z účastníkov pre pripomenku.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Pripomienka nezahrňuje žiadné pozvané osoby, chcete odobrať pripomienku?',
    'LBL_DELETE_REMINDER' => 'Vymazať pripomienku',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Vybratť stĺpce',
    'LBL_COLUMN_CHOOSER' => 'Výber stĺpcov',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Uložiť zmeny',
    'LBL_DISPLAYED' => 'Zobrazených',
    'LBL_HIDDEN' => 'Skrytý',
    'ERR_EMPTY_COLUMNS_LIST' => 'Je vyžadovaný aspoň jeden prvok',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Kategória',
    'LBL_LIST_CATEGORY' => 'Kategória',
    'ERR_FACTOR_TPL_INVALID' => 'Faktor overenia je neplatný, prosím kontaktujte správcu.',
    'LBL_SUBTHEMES' => 'štýl',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Svitanie',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Deň',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Súmrak',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Noc',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Poludnie',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Zrušiť koncept',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Táto operácia vymaže tento e-mail, chcete pokračovať?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Ukončiť dialógové okno',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Ak opustíte dialógové okno, všetky zadané informácie sa stratia, chcete pokračovať?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Použiť E-mailovú Šablónu',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Táto operácia prepíše predmet a textovú časť e-mailu, chcete pokračovať?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Odhlásenie potvdené',
    'LBL_OPT_IN_TITLE' => 'Prihlásiť sa',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Dátum prihlásenia potvrdený',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Potvdený dátum odoslania prihlásenia',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Potvdený dátum zlyhania prihlásenia',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Odhlásenie potvrdené dňa',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Šablóna e-mailu prihlásenia nie je nastavená. Prosím nastavte ju v nastaveniach e-mailu.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Prihlásenie je vyžadované e-mailom pre priradenie ku Klientovi/Kontaktu/Iniciative/Cieľu',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Nededičná skupina',
    'LBL_PRIMARY_GROUP' => "Primárna skupina",

    // footer
    'LBL_SUITE_TOP' => 'Späť na začiatok',
    'LBL_SUITE_SUPERCHARGED' => 'Prevádzkovaný cez systém SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'S podporou SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Tento program je slobodný softvér; môžete ho šíriť a/alebo upravovať podľa podmienok GNU Affero General Public License verzie 3 znení publikovanom podľa Free Software Foundation, vrátane dodatočných povolení stanovených v hlavičke zdrojového kódu.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Reset hesla',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Odoslať potvrdenie prihlásenia e-mailom',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Potvrďte odoslanie potvrdzovacích e-mailov prihlásenia len pre klientov/kontakty/Iniciativy/Ciele (len osoby)',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Odosielanie potvdzovacích e-mailov prihlásenia je vypnuté, zapnite túto možnosť v Nastaveniach e-mailu alebo sa obráťte na správcu.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Odosielanie potvrdzovacích emailov prihlásenia nie je možné, pretože kontakt nemá primárnu e-mailovú adresu',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Odoslanie potvrdzovacieho e-mailu prihlásenia zlyhalo',
    'LBL_CONFIRM_EMAIL_SENT' => 'Potvrdzovací e-mail prihlásenia bol úspešne odoslaný',
);

$app_list_strings['moduleList']['Library'] = 'Knižnica';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-mailová adresa';
$app_list_strings['project_priority_default'] = 'Stredná';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Vysoká',
    'Medium' => 'Stredná',
    'Low' => 'Nízka',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Súhlas',
    'contract' => 'Zmluva',
    'legal_obligation' => 'Zákonné povinnosti',
    'protection_of_interest' => 'Ochrana záujmov',
    'public_interest' => 'Verejný záujem',
    'legitimate_interest' => 'Oprávnený záujem',
    'withdrawn' => 'Zrušené',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Web stránka',
    'phone' => 'Telefón',
    'given_to_user' => 'Dané používateľovi',
    'email' => 'E-mail',
    'third_party' => 'Tretia strana',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Báza znalostí';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBÁNSKO',
    'ALGERIA' => 'ALŽÍRSKO',
    'AMERICAN SAMOA' => 'AMERICKÁ SAMOA',
    'ANDORRA' => 'ANDORA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTÍDA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMÉNSKO',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'RAKÚSKO',
    'AZERBAIJAN' => 'AZERBAJDŽAN',
    'BAHAMAS' => 'BAHAMY',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADÉŠ',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BIELORUSKO',
    'BELGIUM' => 'BELGICKO',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDY',
    'BHUTAN' => 'BUTÁN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVETOVÉ OSTROVY',
    'BRAZIL' => 'BRAZÍLIA',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITSKÉ TERITÓRIUM NA ANTARKTÍDE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITSKÉ TERITÓRIUM V INDICKOM OCEÁNE',
    'BRITISH VIRGIN ISLANDS' => 'BRITSKÉ PANENSKÉ OSTROVY',
    'BRITISH WEST INDIES' => 'BRITSKÁ VÝCHODNÁ INDIA',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULHARSKO',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODŽA',
    'CAMEROON' => 'KAMERUN',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'KANÁRSKE OSTROVY',
    'CAPE VERDI ISLANDS' => 'KAPVERDSKÉ OSTROVY',
    'CAYMAN ISLANDS' => 'KAJMANSKÉ OSTROVY',
    'CHAD' => 'ČAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'ČILE',
    'CHINA' => 'ČÍNA',
    'CHRISTMAS ISLAND' => 'VIANOČNÉ OSTROVY',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'KOLUMBIA',
    'COMORO ISLANDS' => 'KOMORSKÉ OSTROVY',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOKOVE OSTROVY',
    'COSTA RICA' => 'KOSTARIKA',
    'CROATIA' => 'CHORVÁTSKO',
    'CUBA' => 'KUBA',
    'CURACAO' => 'KURAKAO',
    'CYPRUS' => 'CYPRUS',
    'CZECH REPUBLIC' => 'ČESKÁ REPUBLIKA',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DÁNSKO',
    'DJIBOUTI' => 'DŽIBUTI',
    'DOMINICA' => 'DOMINIKA',
    'DOMINICAN REPUBLIC' => 'DOMINIKÁNSKA REPUBLIKA',
    'DUBAI' => 'DUBAJ',
    'ECUADOR' => 'EKVÁDOR',
    'EGYPT' => 'EGYPT',
    'EL SALVADOR' => 'SALVADOR',
    'EQUATORIAL GUINEA' => 'ROVNÍKOVá GUINEA',
    'ESTONIA' => 'ESTÓNSKO',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'FAERSKÉ OSTROVY',
    'FALKLAND ISLANDS' => 'FALKLANDSKÉ OSTROVY',
    'FIJI' => 'FUDŽI',
    'FINLAND' => 'FíNSKO',
    'FRANCE' => 'FRANCÚZSKO',
    'FRENCH GUIANA' => 'FRANCÚZSKÁ GUYANA',
    'FRENCH POLYNESIA' => 'FRANCÚZSKÁ POLYNÉZIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GRUZÍNSKO',
    'GERMANY' => 'NEMECKO',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'DŽIBRALTAR',
    'GREECE' => 'GRÉCKO',
    'GREENLAND' => 'GRÓNSKO',
    'GUADELOUPE' => 'GUADALUPY',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'MAĎARSKO',
    'ICELAND' => 'ISLAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONÉZIA',
    'IRAN' => 'IRÁN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'ÍRSKO',
    'ISRAEL' => 'IZRAEL',
    'ITALY' => 'TALIANSKO',
    'IVORY COAST' => 'POBREŽIE SLONOVINY',
    'JAMAICA' => 'JAMAJKA',
    'JAPAN' => 'JAPONSKO',
    'JORDAN' => 'JORDÁNSKO',
    'KAZAKHSTAN' => 'KAZACHSTAN',
    'KENYA' => 'KEŇA',
    'KOREA' => 'KÓREA',
    'KOREA, SOUTH' => 'JUŽNÁ KÓREA',
    'KUWAIT' => 'KUWAJT',
    'KYRGYZSTAN' => 'KYRGYSKO',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LOTYŠSKO',
    'LEBANON' => 'LIBANON',
    'LEEWARD ISLANDS' => 'LEEWARDSKÉ OSTROVY',
    'LESOTHO' => 'LESOTO',
    'LIBYA' => 'LÍBIA',
    'LIECHTENSTEIN' => 'LICHTENŠTAJNSKO',
    'LITHUANIA' => 'LITVA',
    'LUXEMBOURG' => 'LUXEMGURSKO',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDÓNSKO',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAJZIA',
    'MALDIVES' => 'MALEDIVY',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIK',
    'MAURITANIA' => 'MAURETÁNIA',
    'MAURITIUS' => 'MAURÍCIUS',
    'MELANESIA' => 'MELANÉZIA',
    'MEXICO' => 'MEXIKO',
    'MOLDOVIA' => 'MOLDAVSKO',
    'MONACO' => 'MONAKO',
    'MONGOLIA' => 'MONGOLSKO',
    'MOROCCO' => 'MAROKO',
    'MOZAMBIQUE' => 'MOZAMBIK',
    'MYANAMAR' => 'MJANMARSKO',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'Holandsko',
    'NETHERLANDS ANTILLES' => 'HOLANDSKÉ ANTILY',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'HOLANDSKÉ ANTILY NEUTRÁLNA ZÓNA',
    'NEW CALADONIA' => 'NOVÁ KALEDÓNIA',
    'NEW HEBRIDES' => 'NOVÉ HEBRIDY',
    'NEW ZEALAND' => 'NOVÝ ZÉLAND',
    'NICARAGUA' => 'NIKARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGÉRIA',
    'NORFOLK ISLAND' => 'NORFOLSKÉ OSTROVY',
    'NORWAY' => 'NÓRSKO',
    'OMAN' => 'OMAN',
    'OTHER' => 'INÉ',
    'PACIFIC ISLAND' => 'PACIFICKÉ OSTROVY',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NOVÁ GUINEA',
    'PARAGUAY' => 'PARAGUAJ',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPÍNY',
    'POLAND' => 'POĽSKO',
    'PORTUGAL' => 'PORTUGALSKO',
    'PORTUGUESE TIMOR' => 'PORTUGALSKÝ TIMOR',
    'PUERTO RICO' => 'PORTO RIKO',
    'QATAR' => 'KATAR',
    'REPUBLIC OF BELARUS' => 'BIELORUSKÁ REPUBLIKA',
    'REPUBLIC OF SOUTH AFRICA' => 'JUŽNÁ AFRIKA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'RUMUNSKO',
    'RUSSIA' => 'RUSKO',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYSKÉ OSTROVY',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARÍNO',
    'SAUDI ARABIA' => 'SAUDSKÁ ARÁBIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SRBSKO',
    'SEYCHELLES' => 'SEJŠELY',
    'SIERRA LEONE' => 'SIERA LEONE',
    'SINGAPORE' => 'SINGAPÚR',
    'SLOVAKIA' => 'SLOVENSKO',
    'SLOVENIA' => 'SLOVINSKO',
    'SOMALILIAND' => 'SOMÁLSKO',
    'SOUTH AFRICA' => 'JUŽNÁ AFRIKA',
    'SOUTH YEMEN' => 'JUŽNÝ JEMEN',
    'SPAIN' => 'ŠPANIELSKO',
    'SPANISH SAHARA' => 'ŠPANIELSKÁ SAHARA',
    'SRI LANKA' => 'SRÍ LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KRIŠTOF A NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDÁN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRIKA',
    'SWAZILAND' => 'SVAZIJSKO',
    'SWEDEN' => 'ŠVÉDSKO',
    'SWITZERLAND' => 'ŠVAJČIARSKO',
    'SYRIA' => 'SÝRIA',
    'TAIWAN' => 'TAJWAN',
    'TAJIKISTAN' => 'TADŽIKISTAN',
    'TANZANIA' => 'TANZÁNIA',
    'THAILAND' => 'THAJSKO',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISKO',
    'TURKEY' => 'TURECKO',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'SPOJENÉ ARABSKÉ EMIRÁTY',
    'UNITED KINGDOM' => 'SPOJENÉ KRÁĽOVSTVO',
    'URUGUAY' => 'URUGUAJ',
    'US PACIFIC ISLAND' => 'US PACIFICKÉ OSTVORY',
    'US VIRGIN ISLANDS' => 'US PANENSKÉ OSTROVY',
    'USA' => 'USA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATIKÁN',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'ZÁPADNÁ INDIA',
    'WESTERN SAHARA' => 'ZÁPADNÁ SAHARA',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZÁIR',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Tajwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS cyrilika)',
    'CP1252' => 'CP1252 (MS Západoeurópska & US)',
    'EUC-CN' => 'EUC-CN (zjednodušená čínština GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japončina)',
    'EUC-KR' => 'EUC-KR (Kórejčina)',
    'EUC-TW' => 'EUC-TW (Tajvančina)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japončina)',
    'ISO-2022-KR' => 'ISO-2022-KR (Kórejčina)',
    'ISO-8859-1' => 'ISO-8859-1 (Východný európsky a US)',
    'ISO-8859-2' => 'ISO-8859-2 (Centrálna a západná európsky)',
    'ISO-8859-3' => 'ISO-8859-3 (Latinčina 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latinčina 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrilika)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabičina)',
    'ISO-8859-7' => 'ISO-8859-7 (Gréčtina)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrejčina)',
    'ISO-8859-9' => 'ISO-8859-9 (Latinčina 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latinčina 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latinčina 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latinčina 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latinčina 9)',
    'KOI8-R' => 'KOI8-R (Ruská cyrilika)',
    'KOI8-U' => 'KOI8-U (Ukrajinská cyrilika)',
    'SJIS' => 'SJIS (MS Japončina)',
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
    'Pacific/Pohnpei' => 'Pacifik/Pohnpei',
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
    'Google' => 'Google kontakty',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Dokumenty',
);
$app_list_strings['token_status'] = array(
    1 => 'Žiadosť',
    2 => 'Prístup',
    3 => 'Neplatný',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampaň',
    'email' => 'E-mail',
    'event' => 'Udalosť',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampaň',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampaň',
    'email' => 'E-mail',
    'event' => 'Udalosť',
    'system' => 'Systém',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Báza znalostí';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Kategórie databázy znalostí';
$app_list_strings['aok_status_list']['Draft'] = 'Koncept';
$app_list_strings['aok_status_list']['Expired'] = 'Uplynutý';
$app_list_strings['aok_status_list']['In_Review'] = 'V preskúmaní';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Súkromné';
$app_list_strings['aok_status_list']['published_public'] = 'publikovať';

$app_list_strings['moduleList']['FP_events'] = 'Udalosti';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Lokality';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Pozvaný';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Nepozvaný';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Zúčastni sa';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nezúčastni sa';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Akceptovaný';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Zamietnutý';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Bez odpovede';

$app_strings['LBL_STATUS_EVENT'] = 'Status Pozvania';
$app_strings['LBL_ACCEPT_STATUS'] = 'Prijať status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Vyberte aktuálnu stranu';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Celý výber';
$app_strings['LBL_LISTVIEW_NONE'] = 'Zrušte celý výber';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Udalosť';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Události prípadu';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Zoznam Aktualizácii';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '====== Odpovedajte nad týmto riadkom prosím ======';


//aop
$app_list_strings['case_state_default_key'] = 'Otvorené';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Otvorené',
        'Closed' => 'Ukončený',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nový',
        'Open_Assigned' => 'Priradený',
        'Closed_Closed' => 'Ukončený',
        'Open_Pending Input' => 'Čakajúci na vstup',
        'Closed_Rejected' => 'Zamietnutý',
        'Closed_Duplicate' => 'Duplikovať',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Užívateľ',
        'Account' => 'Účet užívateľa',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Prednastavené systémom',
    'singleUser' => 'Užívateľ',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Najmenej-zaneprázdnený',
    'random' => 'Náhodne',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Reporty';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Podmienky Reportu';
$app_list_strings['moduleList']['AOR_Charts'] = 'Správa Grafov';
$app_list_strings['moduleList']['AOR_Fields'] = 'Polia Reportu';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Naplánovanie Reportu';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Rovnať sa';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Nerovnať sa ';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Váčší ako';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Je menej ako';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Väčší ako alebo Rovnajúci sa';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Menší ako alebo Rovnajúci sa';
$app_list_strings['aor_operator_list']['Contains'] = 'Obsahuje';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Začína sa';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Končí na';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'd.m.Y';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-R';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-R';
$app_list_strings['aor_format_options']['Y/m/d'] = 'R/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/R';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'R.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.R';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.R';
$app_list_strings['aor_format_options']['Ymd'] = 'dmY';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'a';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ALEBO';
$app_list_strings['aor_condition_type_list']['Value'] = 'Hodnota';
$app_list_strings['aor_condition_type_list']['Field'] = 'Pole';
$app_list_strings['aor_condition_type_list']['Date'] = 'Dátum';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Jeden z';
$app_list_strings['aor_condition_type_list']['Period'] = 'Obdobie';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Aktuálny používateľ';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minúty';
$app_list_strings['aor_date_type_list']['hour'] = 'Hodiny';
$app_list_strings['aor_date_type_list']['day'] = 'Dni';
$app_list_strings['aor_date_type_list']['week'] = 'Týždne';
$app_list_strings['aor_date_type_list']['month'] = 'Mesiace';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Pracovné hodiny';
$app_list_strings['aor_date_options']['now'] = 'Teraz';
$app_list_strings['aor_date_options']['field'] = 'Toto Pole';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Vzostupne (A-Z)';
$app_list_strings['aor_sort_operator']['DESC'] = 'Zostupne (Z-A)';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Počet';
$app_list_strings['aor_function_list']['MIN'] = 'Min.';
$app_list_strings['aor_function_list']['MAX'] = 'Max.';
$app_list_strings['aor_function_list']['SUM'] = 'Sčítať';
$app_list_strings['aor_function_list']['AVG'] = 'Priemer';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Počet';
$app_list_strings['aor_total_options']['SUM'] = 'Sčítať';
$app_list_strings['aor_total_options']['AVG'] = 'Priemer';
$app_list_strings['aor_chart_types']['bar'] = 'Stĺpcový Graf';
$app_list_strings['aor_chart_types']['line'] = 'Čiarový Graf';
$app_list_strings['aor_chart_types']['pie'] = 'Koláčový Graf';
$app_list_strings['aor_chart_types']['radar'] = 'Hviezdicový Graf';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Skladaný pruh';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Zoskupený pruh';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'mesačne';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'týždenne';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Denne';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktívny';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Neaktívny';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Užívateľ';
$app_list_strings['aor_email_type_list']['Users'] = 'Užívatelia';
$app_list_strings['aor_assign_options']['all'] = 'Všetci Užívatelia';
$app_list_strings['aor_assign_options']['role'] = 'Všetci užívatelia v pozícii';
$app_list_strings['aor_assign_options']['security_group'] = 'Všetci Užívatelia v Skupinách';
$app_list_strings['date_time_period_list']['today'] = 'Dnes';
$app_list_strings['date_time_period_list']['yesterday'] = 'Včera';
$app_list_strings['date_time_period_list']['this_week'] = 'Tento týždeň';
$app_list_strings['date_time_period_list']['last_week'] = 'Posledný týždeň';
$app_list_strings['date_time_period_list']['last_month'] = 'Minulý mesiac';
$app_list_strings['date_time_period_list']['this_month'] = 'Aktuálny mesiac';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Tento štvrťrok';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Posledný štvrťrok';
$app_list_strings['date_time_period_list']['this_year'] = 'Tento rok';
$app_list_strings['date_time_period_list']['last_year'] = 'Minulý rok';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'na';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'na';
$app_strings['LBL_CRON_AT'] = 'v';
$app_strings['LBL_CRON_RAW'] = 'Pokročilé';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hod';
$app_strings['LBL_CRON_DAY'] = 'Deň';
$app_strings['LBL_CRON_MONTH'] = 'Mesiac';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Denne';
$app_strings['LBL_CRON_WEEKLY'] = 'týždenne';
$app_strings['LBL_CRON_MONTHLY'] = 'mesačne';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Zmluvy';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Faktúry';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF Šablóny';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Kategórie Produktov';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkty';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Riadkové položky';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Skupiny riadkových položiek';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Ponuky';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analytik';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Zákazník';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Vyjednávač';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Tlač';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Leták';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Distributor';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Ostatné';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Koncept';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Vyjednávanie';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Doručené';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Podržaný';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Potvredný';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Akceptované ukončenie';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Neúspešne ukončenie';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Nebude realizovaný';
$app_list_strings['quote_term_dom']['Net 15'] = 'Netto 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Netto 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Schválené';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Neschválené';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Množ.';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analytik';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Zákazník';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Vyjednávač';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Tlač';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Leták';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Distributor';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Ostatné';
$app_list_strings['invoice_status_dom']['Paid'] = 'Platený';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Neplatený';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Zrušený';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Nefakturovaný';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Fakturovaný';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Notebooky';
$app_list_strings['product_category_dom']['Desktops'] = 'Stolové počítače';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Spokojný';
$app_list_strings['product_type_dom']['Service'] = 'Služba';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Ponuky';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Faktúry';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Zmluvy';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Ponuky';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Faktúry';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Zmluvy';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Firmy';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakty';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Iniciatívy';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Nezačaté';
$app_list_strings['contract_status_list']['In Progress'] = 'Práve prebieha';
$app_list_strings['contract_status_list']['Signed'] = 'Podpísaný';
$app_list_strings['contract_type_list']['Type'] = 'Typ';
$app_strings['LBL_PRINT_AS_PDF'] = 'Vytlačiť vo formáte PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Prosím vyberte si Šablónu';
$app_strings['LBL_NO_TEMPLATE'] = 'CHYBA\nNebola nájdená žiadna šablóna.\nProsím choďte do PDF Šablóny modulu a vytvorte šablónu.';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Tok procesov';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Podmienky Toku procesov';
$app_list_strings['moduleList']['AOW_Processed'] = 'História procesov';
$app_list_strings['moduleList']['AOW_Actions'] = 'Akcie Toku procesov';
$app_list_strings['aow_status_list']['Active'] = 'Aktívny';
$app_list_strings['aow_status_list']['Inactive'] = 'Neaktívny';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Rovnať sa';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Nerovnať sa ';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Váčší ako';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Je menej ako';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Väčší ako alebo Rovnajúci sa';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Menší ako alebo Rovnajúci sa';
$app_list_strings['aow_operator_list']['Contains'] = 'Obsahuje';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Začína sa';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Končí na';
$app_list_strings['aow_operator_list']['is_null'] = 'Je nula';
$app_list_strings['aow_process_status_list']['Complete'] = 'Kompletný';
$app_list_strings['aow_process_status_list']['Running'] = 'Prebiehajúci';
$app_list_strings['aow_process_status_list']['Pending'] = 'Prebieha';
$app_list_strings['aow_process_status_list']['Failed'] = 'Neúspešný';
$app_list_strings['aow_condition_operator_list']['And'] = 'a';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ALEBO';
$app_list_strings['aow_condition_type_list']['Value'] = 'Hodnota';
$app_list_strings['aow_condition_type_list']['Field'] = 'Pole';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Akákoľvek Zmena';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'V Skupine';
$app_list_strings['aow_condition_type_list']['Date'] = 'Dátum';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Jeden z';
$app_list_strings['aow_action_type_list']['Value'] = 'Hodnota';
$app_list_strings['aow_action_type_list']['Field'] = 'Pole';
$app_list_strings['aow_action_type_list']['Date'] = 'Dátum';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round-Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least-Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Náhodne';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Hodnota';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Pole';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minúty';
$app_list_strings['aow_date_type_list']['hour'] = 'Hodiny';
$app_list_strings['aow_date_type_list']['day'] = 'Dni';
$app_list_strings['aow_date_type_list']['week'] = 'Týždne';
$app_list_strings['aow_date_type_list']['month'] = 'Mesiace';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Pracovné hodiny';
$app_list_strings['aow_date_options']['now'] = 'Teraz';
$app_list_strings['aow_date_options']['today'] = 'Dnes';
$app_list_strings['aow_date_options']['field'] = 'Toto Pole';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Všetci Užívatelia';
$app_list_strings['aow_assign_options']['role'] = 'Všetci užívatelia v pozícii';
$app_list_strings['aow_assign_options']['security_group'] = 'Všetci Užívatelia v Skupinách';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Nahrať Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Priradené pole';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Užívateľ';
$app_list_strings['aow_email_type_list']['Users'] = 'Užívatelia';
$app_list_strings['aow_email_to_list']['to'] = 'Komu';
$app_list_strings['aow_email_to_list']['cc'] = 'Kópia';
$app_list_strings['aow_email_to_list']['bcc'] = 'Skrytá Kópia';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Všetky záznamy';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nový záznam';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Upravený záznam';
$app_list_strings['aow_run_when_list']['Always'] = 'Vždy';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Len na uloženie';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Iba v plánovači';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projekty - šablóny';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Šablóna Úlohy Projektu';
$app_list_strings['relationship_type_list']['FS'] = 'Dokončiť a Začať /FS/';
$app_list_strings['relationship_type_list']['SS'] = 'Začať a Začať paralelne /SS/';
$app_list_strings['duration_unit_dom']['Days'] = 'Dni';
$app_list_strings['duration_unit_dom']['Hours'] = 'Hodiny';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Zobraziť diagram';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Zobraziť detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Nový Projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Mapa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Zemepisná dĺžka';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Zemepisná šírka';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status Súradníc';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresa';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mapy';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Mapy - značky';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Mapy - oblasti';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Mapy - cache adries';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP partneri';

$app_list_strings['map_unit_type_list']['mi'] = 'Míľ';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometrov';

$app_list_strings['map_module_type_list']['Accounts'] = 'Firmy';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakty';
$app_list_strings['map_module_type_list']['Cases'] = 'Prípady';
$app_list_strings['map_module_type_list']['Leads'] = 'Iniciatívy';
$app_list_strings['map_module_type_list']['Meetings'] = 'Schôdzky';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Príležitosti';
$app_list_strings['map_module_type_list']['Project'] = 'Projekty';
$app_list_strings['map_module_type_list']['Prospects'] = 'Ciele';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Firma';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakt';
$app_list_strings['map_relate_type_list']['Cases'] = 'Prípady';
$app_list_strings['map_relate_type_list']['Leads'] = 'Iniciatíva';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Schôdzka';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Príležitosť';
$app_list_strings['map_relate_type_list']['Project'] = 'Projekt';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cieľ';

$app_list_strings['marker_image_list']['accident'] = 'Nehoda';
$app_list_strings['marker_image_list']['administration'] = 'Administrácia';
$app_list_strings['marker_image_list']['agriculture'] = 'Poľnohospodárstvo';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Malé lietadlo';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Letecký cestovný ruch';
$app_list_strings['marker_image_list']['airport'] = 'Letisko';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteáter';
$app_list_strings['marker_image_list']['apartment'] = 'Apartmán';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvárium';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Zvuk';
$app_list_strings['marker_image_list']['bank'] = 'Banka';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banka Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banka Libra';
$app_list_strings['marker_image_list']['bar'] = 'Stĺpec';
$app_list_strings['marker_image_list']['beach'] = 'Pláž';
$app_list_strings['marker_image_list']['beautiful'] = 'Nádherný';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parkovište pre bicykle';
$app_list_strings['marker_image_list']['big_city'] = 'Veľké mesto';
$app_list_strings['marker_image_list']['bridge'] = 'Most';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderný most';
$app_list_strings['marker_image_list']['bus'] = 'Autobus';
$app_list_strings['marker_image_list']['cable_car'] = 'Lanovka';
$app_list_strings['marker_image_list']['car'] = 'Auto';
$app_list_strings['marker_image_list']['car_rental'] = 'Požičovňa áut';
$app_list_strings['marker_image_list']['carrepair'] = 'Autoservis';
$app_list_strings['marker_image_list']['castle'] = 'Zámok';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedrála';
$app_list_strings['marker_image_list']['chapel'] = 'Kaplnka';
$app_list_strings['marker_image_list']['church'] = 'Kostol';
$app_list_strings['marker_image_list']['city_square'] = 'Námestie';
$app_list_strings['marker_image_list']['cluster'] = 'Zhluk (roj)';
$app_list_strings['marker_image_list']['cluster_2'] = 'Zhluk (roj) 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Káva';
$app_list_strings['marker_image_list']['community_centre'] = 'Komunitné centrum';
$app_list_strings['marker_image_list']['company'] = 'Spoločnosť';
$app_list_strings['marker_image_list']['conference'] = 'Konferencia';
$app_list_strings['marker_image_list']['construction'] = 'Stavebnictvo';
$app_list_strings['marker_image_list']['convenience'] = 'Pohodlie';
$app_list_strings['marker_image_list']['court'] = 'Kurt';
$app_list_strings['marker_image_list']['cruise'] = 'Zájazdy';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Zmenáreň';
$app_list_strings['marker_image_list']['customs'] = 'Colné';
$app_list_strings['marker_image_list']['cycling'] = 'Bicyklovanie';
$app_list_strings['marker_image_list']['dam'] = 'Priehrada';
$app_list_strings['marker_image_list']['dentist'] = 'Zubár';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Obchod s oddeleniami';
$app_list_strings['marker_image_list']['disability'] = 'Zdravotné postihnutie';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parkovanie pre telesne postihnutých';
$app_list_strings['marker_image_list']['doctor'] = 'Lekár';
$app_list_strings['marker_image_list']['dog_leash'] = 'Pes na vodítku';
$app_list_strings['marker_image_list']['down'] = 'Dole';
$app_list_strings['marker_image_list']['down_left'] = 'Vľavo dole';
$app_list_strings['marker_image_list']['down_right'] = 'Vpravo dole';
$app_list_strings['marker_image_list']['down_then_left'] = 'Dole potom vľavo';
$app_list_strings['marker_image_list']['down_then_right'] = 'Dole potom vpravo';
$app_list_strings['marker_image_list']['drugs'] = 'Lieky';
$app_list_strings['marker_image_list']['elevator'] = 'Výťah';
$app_list_strings['marker_image_list']['embassy'] = 'Veľvyslanectvo';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Továreň';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Padajúce kamene';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Les';
$app_list_strings['marker_image_list']['fountain'] = 'Fontána';
$app_list_strings['marker_image_list']['friday'] = 'Piatok';
$app_list_strings['marker_image_list']['garden'] = 'Záhrada';
$app_list_strings['marker_image_list']['gas_station'] = 'Čerpacia stanica';
$app_list_strings['marker_image_list']['geyser'] = 'Gejzír';
$app_list_strings['marker_image_list']['gifts'] = 'Darčeky';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Potraviny';
$app_list_strings['marker_image_list']['hairsalon'] = 'Kaderníctvo';
$app_list_strings['marker_image_list']['helicopter'] = 'Vrtuľník';
$app_list_strings['marker_image_list']['highway'] = 'Diaľnica';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historická štvrť';
$app_list_strings['marker_image_list']['home'] = 'Domov';
$app_list_strings['marker_image_list']['hospital'] = 'Nemocnica';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = '1-hviezdičkový hotel';
$app_list_strings['marker_image_list']['hotel_2_stars'] = '2-hviezdičkový hotel';
$app_list_strings['marker_image_list']['hotel_3_stars'] = '3-hviezdičkový hotel';
$app_list_strings['marker_image_list']['hotel_4_stars'] = '4-hviezdičkový hotel';
$app_list_strings['marker_image_list']['hotel_5_stars'] = '5-hviezdičkový hotel';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Spravodlivosť';
$app_list_strings['marker_image_list']['lake'] = 'Jazero';
$app_list_strings['marker_image_list']['laundromat'] = 'Práčovňa';
$app_list_strings['marker_image_list']['left'] = 'Vľavo';
$app_list_strings['marker_image_list']['left_then_down'] = 'Vľavo potom dole';
$app_list_strings['marker_image_list']['left_then_up'] = 'Vľavo potom hore';
$app_list_strings['marker_image_list']['library'] = 'Knižnica';
$app_list_strings['marker_image_list']['lighthouse'] = 'Maják';
$app_list_strings['marker_image_list']['liquor'] = 'Likér';
$app_list_strings['marker_image_list']['lock'] = 'Zámok';
$app_list_strings['marker_image_list']['main_road'] = 'Hlavná cesta';
$app_list_strings['marker_image_list']['massage'] = 'Masáže';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Vysielač mobilného signálu';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderná veža';
$app_list_strings['marker_image_list']['monastery'] = 'Kláštor';
$app_list_strings['marker_image_list']['monday'] = 'Pondelok';
$app_list_strings['marker_image_list']['monument'] = 'Pamiatka';
$app_list_strings['marker_image_list']['mosque'] = 'Mešita';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocykel';
$app_list_strings['marker_image_list']['museum'] = 'Múzeum';
$app_list_strings['marker_image_list']['music_live'] = 'Hudba naživo';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Zdvihák na olejové čerpadlo';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palác';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramatické';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park a jazda';
$app_list_strings['marker_image_list']['parking'] = 'Parkovanie';
$app_list_strings['marker_image_list']['photo'] = 'Fotka';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Nenavštívené miesta';
$app_list_strings['marker_image_list']['places_visited'] = 'Navštívené miesta';
$app_list_strings['marker_image_list']['playground'] = 'Ihrisko';
$app_list_strings['marker_image_list']['police'] = 'Polícia';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Pošta';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Polarita elektrického zapojenia';
$app_list_strings['marker_image_list']['power_plant'] = 'Elektráreň';
$app_list_strings['marker_image_list']['power_substation'] = 'Napájanie rozvodne';
$app_list_strings['marker_image_list']['public_art'] = 'Verejné umenie';
$app_list_strings['marker_image_list']['rain'] = 'Dážď';
$app_list_strings['marker_image_list']['real_estate'] = 'Nehnuteľnosti';
$app_list_strings['marker_image_list']['regroup'] = 'Preskupiť';
$app_list_strings['marker_image_list']['resort'] = 'Zoradiť';
$app_list_strings['marker_image_list']['restaurant'] = 'Reštaurácia';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Africká reštaurácia';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Reštaurácia - gril';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Bufet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Čínska reštaurácia';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Reštaurácia - ryby';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Reštaurácia - ryby a hranolky';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gurmánska reštaurácia';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Gurmánska reštaurácia';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indická reštaurácia';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Talianská reštaurácia';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japonská reštaurácia';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Kórejská reštaurácia';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Stredomorská reštaurácia';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Mexická reštaurácia';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantická reštaurácia';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Thaiská reštaurácia';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Turecká reštaurácia';
$app_list_strings['marker_image_list']['right'] = 'Vpravo';
$app_list_strings['marker_image_list']['right_then_down'] = 'Vpravo a potom dole';
$app_list_strings['marker_image_list']['right_then_up'] = 'Vpravo a potom nahor';
$app_list_strings['marker_image_list']['saturday'] = 'Sobota';
$app_list_strings['marker_image_list']['school'] = 'Škola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Obchodné centrum';
$app_list_strings['marker_image_list']['shore'] = 'Pobrežie';
$app_list_strings['marker_image_list']['sight'] = 'Rozhľadňa';
$app_list_strings['marker_image_list']['small_city'] = 'Malé mesto';
$app_list_strings['marker_image_list']['snow'] = 'Sneh';
$app_list_strings['marker_image_list']['spaceport'] = 'Kozmodróm';
$app_list_strings['marker_image_list']['speed_100'] = 'Rýchlosť 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Rýchlosť 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Rýchlosť 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Rýchlosť 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Rýchlosti 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Rýchlosť 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Rýchlosť 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Rýchlosť 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Rýchlosť 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Rýchlosť 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Rýchlosť 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Rýchlosť 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Spomaľovač';
$app_list_strings['marker_image_list']['stadium'] = 'Štadión';
$app_list_strings['marker_image_list']['statue'] = 'Socha';
$app_list_strings['marker_image_list']['steam_train'] = 'Parný vlak';
$app_list_strings['marker_image_list']['stop'] = 'Zastaviť';
$app_list_strings['marker_image_list']['stoplight'] = 'Semafor';
$app_list_strings['marker_image_list']['subway'] = 'Subway';
$app_list_strings['marker_image_list']['sun'] = 'Ne';
$app_list_strings['marker_image_list']['sunday'] = 'Nedeľa';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagóga';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Pojazdové';
$app_list_strings['marker_image_list']['teahouse'] = 'Čajovňa';
$app_list_strings['marker_image_list']['telephone'] = 'Telefón';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hinduistický chrám';
$app_list_strings['marker_image_list']['terrace'] = 'Terasa';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Divadlo';
$app_list_strings['marker_image_list']['theme_park'] = 'Balíčky tém';
$app_list_strings['marker_image_list']['thursday'] = 'Štvrtok';
$app_list_strings['marker_image_list']['toilets'] = 'Toalety';
$app_list_strings['marker_image_list']['toll_station'] = 'Mýtnici';
$app_list_strings['marker_image_list']['tower'] = 'Veža';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Radar s fotopascou';
$app_list_strings['marker_image_list']['train'] = 'Vlak';
$app_list_strings['marker_image_list']['tram'] = 'Električka';
$app_list_strings['marker_image_list']['truck'] = 'Nákladné auto';
$app_list_strings['marker_image_list']['tuesday'] = 'Utorok';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunel';
$app_list_strings['marker_image_list']['turn_left'] = 'Zabočiť vľavo';
$app_list_strings['marker_image_list']['turn_right'] = 'Zabočiť vpravo';
$app_list_strings['marker_image_list']['university'] = 'Univerzita';
$app_list_strings['marker_image_list']['up'] = 'Hore';
$app_list_strings['marker_image_list']['up_left'] = 'Vľavo hore';
$app_list_strings['marker_image_list']['up_right'] = 'Vpravo hore';
$app_list_strings['marker_image_list']['up_then_left'] = 'Až potom vľavo';
$app_list_strings['marker_image_list']['up_then_right'] = 'Hore a doprava';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Vila';
$app_list_strings['marker_image_list']['water'] = 'Voda';
$app_list_strings['marker_image_list']['waterfall'] = 'Vodopád';
$app_list_strings['marker_image_list']['watermill'] = 'Vodný mlyn';
$app_list_strings['marker_image_list']['waterpark'] = 'Vodný park';
$app_list_strings['marker_image_list']['watertower'] = 'Vodná veža';
$app_list_strings['marker_image_list']['wednesday'] = 'Streda';
$app_list_strings['marker_image_list']['wifi'] = 'Wi-Fi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Veterné turbíny';
$app_list_strings['marker_image_list']['windmill'] = 'Veterný mlyn';
$app_list_strings['marker_image_list']['winery'] = 'Vinárstvo';
$app_list_strings['marker_image_list']['work_office'] = 'Pracovná kancelária';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Pamiatka svetového dedičstva';
$app_list_strings['marker_image_list']['zoo'] = 'ZOO';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Mimo kancelárie';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Na schôdzke';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Zmena harmonogramu';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Prosím vložte zmenenú informáciu';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Dátum';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Dôvod';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Prosím vyberte platný dátum';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Prosím vyberte dôvod';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Zmena harmonogramu';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'História pokusov o volanie';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Pokus o volanie';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Správa zabezpečenia';
$app_strings['LBL_SECURITYGROUP'] = 'Skupina';
$app_strings['LBL_ROLE'] = 'Rola';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Odchadzajúce e-mailové účty';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Správy zo soc. sieti';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Typ';

$app_strings['LBL_ADD_TAB'] = 'Pridať Kartu';
$app_strings['LBL_EDIT_TAB'] = 'Upraviť záložky';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Názov Hlavného panelu';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Počet stĺpcov';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Ste si istý, že to chcete vymazať';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'hlavný panel?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Pridať Hlavný panel';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Odstrániť Hlavný panel';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Odstrániť Stránku Hlavného panela';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Úlohy',
    'Meetings' => 'Schôdzky',
    'Calls' => 'Hovory',
    'Notes' => 'Poznámky',
    'Emails' => 'E-maily'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editor časti šablóny';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Klikli ste preč z poľa úprav bez uloženia. Kliknite na tlačidlo OK, ak chcete odstrániť vašu zmenu alebo zrušiť ak chcete pokračovať v úpravách";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Chyba načítania poľa. Relácie možno uplynula. Prosím prihláste sa znova";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Predaje',
    'getAccountsSpotsData' => 'Firmy',
    'getLeadsSpotsData' => 'Iniciatívy',
    'getServiceSpotsData' => 'Služba',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Marketingové aktivity',
    'getActivitiesSpotsData' => 'Aktivity',
    'getQuotesSpotsData' => 'Ponuky'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Pracovné hodiny';
$app_list_strings['business_hours_list']['0'] = '00:00';
$app_list_strings['business_hours_list']['1'] = '1: 00';
$app_list_strings['business_hours_list']['2'] = '2: 00';
$app_list_strings['business_hours_list']['3'] = '3: 00';
$app_list_strings['business_hours_list']['4'] = '4: 00';
$app_list_strings['business_hours_list']['5'] = '5: 00';
$app_list_strings['business_hours_list']['6'] = '6: 00';
$app_list_strings['business_hours_list']['7'] = '7: 00';
$app_list_strings['business_hours_list']['8'] = '8: 00';
$app_list_strings['business_hours_list']['9'] = '9: 00';
$app_list_strings['business_hours_list']['10'] = '10: 00';
$app_list_strings['business_hours_list']['11'] = '11: 00';
$app_list_strings['business_hours_list']['12'] = '12:00';
$app_list_strings['business_hours_list']['13'] = '13: 00';
$app_list_strings['business_hours_list']['14'] = '14: 00';
$app_list_strings['business_hours_list']['15'] = '15: 00';
$app_list_strings['business_hours_list']['16'] = '16: 00';
$app_list_strings['business_hours_list']['17'] = '17: 00';
$app_list_strings['business_hours_list']['18'] = '18: 00';
$app_list_strings['business_hours_list']['19'] = '19: 00';
$app_list_strings['business_hours_list']['20'] = '20: 00';
$app_list_strings['business_hours_list']['21'] = '21: 00';
$app_list_strings['business_hours_list']['22'] = '22: 00';
$app_list_strings['business_hours_list']['23'] = '23: 00';
$app_list_strings['day_list']['Monday'] = 'Pondelok';
$app_list_strings['day_list']['Tuesday'] = 'Utorok';
$app_list_strings['day_list']['Wednesday'] = 'Streda';
$app_list_strings['day_list']['Thursday'] = 'Štvrtok';
$app_list_strings['day_list']['Friday'] = 'Piatok';
$app_list_strings['day_list']['Saturday'] = 'Sobota';
$app_list_strings['day_list']['Sunday'] = 'Nedeľa';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'List';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Právne informácie';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Na výšku';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Na šírku';


$app_list_strings['moduleList']['SurveyResponses'] = 'Odpovede na prieskum';
$app_list_strings['moduleList']['Surveys'] = 'Priezkumy';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Odpovede na otázky prieskumu';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Otázky prieskumu';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Možnosti otázok prieskumu';
$app_list_strings['survey_status_list']['Draft'] = 'Koncept';
$app_list_strings['survey_status_list']['Public'] = 'publikovať';
$app_list_strings['survey_status_list']['Closed'] = 'Ukončený';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textové pole';
$app_list_strings['surveys_question_type']['Checkbox'] = 'zaškrkávacie pole';
$app_list_strings['surveys_question_type']['Radio'] = 'Rádio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Rozbaľovací zoznam';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Viacnásobný výber';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matica';
$app_list_strings['surveys_question_type']['DateTime'] = 'Dátum a čas';
$app_list_strings['surveys_question_type']['Date'] = 'Dátum';
$app_list_strings['surveys_question_type']['Scale'] = 'Mierka';
$app_list_strings['surveys_question_type']['Rating'] = 'Hodnotenie';
$app_list_strings['surveys_matrix_options'][0] = 'Spokojný';
$app_list_strings['surveys_matrix_options'][1] = 'Ani spokojný ani nespokojný';
$app_list_strings['surveys_matrix_options'][2] = 'Nespokojní';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Čakajúce potvrdenie prihlásenia, potvrdenie prihlásenia neodoslané';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Odoslanie potvrdzovacieho e-mailu prihlásenia zlyhalo';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Čakajúce potvrdenie prihlásenia, potvrdenie prihlásenia poslané';
$app_strings['LBL_OPT_IN'] = 'Prihlásenie';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Odhlásenie potvdené';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Odhlásené';
$app_strings['LBL_OPT_IN_INVALID'] = 'Neplatný';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Blokovaný',
    'opt-in' => 'Prihlásiť sa',
    'confirmed-opt-in' => 'Odhlásenie potvdené'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Nie je prihásenie',
    'opt-in' => 'Prihlásiť sa',
    'confirmed-opt-in' => 'Odhlásenie potvdené'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Potvdzovací e-mail prihlásenia bol pridaný do e-mailovej fronty pre %s emailových adries. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Nie je možné odoslať e-mail na %s e-mailových adries, pretože nie sú prihlásený. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s e-mailová adresa nemá platné id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Dvojúrovňové overovanie zlyhalo';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Kód pre dvojúrovňové overenie bol odoslaný.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Zlyhalo odoslanie kódu dvojfaktorového overenia.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Ďakujeme vám za potvdenie vášho záujmu.';

$app_strings['ERR_IP_CHANGE'] = 'Vaša relácia bola kvôli významnej zmene v IP adrese ukončená';
$app_strings['ERR_RETURN'] = 'Späť na hlavnú ponuku';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Zadanie hesla',
    'client_credentials' => 'Poverenia klienta',
    'implicit' => 'Implicitné',
    'authorization_code' => 'Autorizačný kód'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'Minúty',
    'hour' => 'hodiny',
    'day' => 'dni',
    'week' => 'týždne',
    'month' => 'mesiace',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Hľadať (nové)',
    'UnifiedSearch' => 'Celkové zjednotené vyhľadávanie (staršie)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Osobný',
    'shared' => 'Zdieľaný',
    'group' => 'Skupina',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Pripojený',
    'failed' => 'Neúspešný',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Práve prebieha',
    'success' => 'Úspech',
    'warning' => 'Upozornenie',
    'error' => 'Chyba:',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API chyba';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Vznikla chyba rozhrania API JSON.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'API verzia: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Prosím, skontrolujte vyplnenie povinných polí';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API očakáva, že telo požiadavky bude JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Nie je možné overiť požiadavku Json Api Payload';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Nie je možné overiť odpoveď Json Api Payload';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API nemôže nájsť zdroj';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API očakáva, že hlavička "Accept" bude application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API očakáva, že hlavička "Content-Type" bude application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Pre tento prehliadač sú oznámenia na pracovnej ploche povolené.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Pre tento webový prehliadač sú oznámenia na pracovnej ploche vypnuté. Opäť povoľte oznámenia v nastaveniach prehliadača.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Prehliadač nepodporuje oznámenia na pracovnej ploche.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Vyskytla sa chyba: ';
$app_strings['LBL_CLICK_HERE'] = 'kliknite sem';
$app_strings['LBL_TO_CONTINUE'] = ' pre pokračovanie.';

$app_strings['IMAP_HANDLER_ERROR'] = 'Chyba: {error}; Kľúč bol: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: nastavenie testovania bolo zmenené na "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Neplatná požiadavka, použite hodnotu "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Vyskytla sa neznáma chyba, kľúč "{key}", nie je uložený.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Nastavenie testovania neexistuje.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Kľúč nebol nájdený.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Chyba pri zápise kľúča.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Neznáma chyba';
$app_strings['LBL_SEARCH_TITLE']                   = 'Vyhľadať';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Vyhľadávacie kritériá';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Vyhľadať';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Vyhľadať';
$app_strings['LBL_SEARCH_QUERY']                   = 'Vyhľadávací dopyt: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Prostriedok: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Všetky výsledky: ';
$app_strings['LBL_SEARCH_PREV'] = 'Predošlý';
$app_strings['LBL_SEARCH_NEXT'] = 'Ďalší';
$app_strings['LBL_SEARCH_PAGE'] = 'Strana ';
$app_strings['LBL_SEARCH_OF'] = ' z ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Použite rozšírené vyhľadávanie';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Použite základné vyhľadávanie';

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

$app_strings['LBL_KEY'] = 'Kľúč';
$app_strings['LBL_VALUE'] = 'Hodnota';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Podpis';

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
