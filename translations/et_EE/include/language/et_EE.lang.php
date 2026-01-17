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
    'language_pack_name' => 'Eesti (Estonian) - et_EE',
    'moduleList' => array(
        'Home' => 'Avaleht',
        'ResourceCalendar' => 'Ressursside kalender',
        'Contacts' => 'Kontaktid',
        'Accounts' => 'Ettevõtted',
        'Alerts' => 'Hoiatused',
        'Opportunities' => 'Müügivõimalused',
        'Cases' => 'Juhtumid',
        'Notes' => 'Märkused',
        'Calls' => 'Telefonikõned',
        'TemplateSectionLine' => 'Malli sektsiooni joon',
        'Calls_Reschedule' => 'Kõnede graafiku muutmine',
        'Emails' => 'E-kirjad',
        'EAPM' => 'Väliste API-de moodul',
        'Meetings' => 'Kohtumised',
        'Tasks' => 'Ülesanded',
        'Calendar' => 'Kalender',
        'Leads' => 'Müügivihjed',
        'Currencies' => 'Valuutad',
        'Activities' => 'Tegevused',
        'Bugs' => 'Bugid',
        'Feeds' => 'RSS',
        'iFrames' => 'Minu saidid',
        'TimePeriods' => 'Ajaperioodid',
        'ContractTypes' => 'Lepingu tüübid',
        'Schedulers' => 'Planeerijad:',
        'Project' => 'Projektid',
        'ProjectTask' => 'Projekti ülesanded',
        'Campaigns' => 'Kampaaniad',
        'CampaignLog' => 'Kampaania logi',
        'Documents' => 'Dokumendid',
        'DocumentRevisions' => 'Dokumendi revisjonid',
        'Connectors' => 'Connectorid',
        'Roles' => 'Rollid',
        'Notifications' => 'Teavitused',
        'Sync' => 'Sünkimine',
        'Users' => 'Kasutajad',
        'Employees' => 'Töötajad',
        'Administration' => 'Administreerimine',
        'ACLRoles' => 'Rollid',
        'InboundEmail' => 'Sissetulev e-kiri',
        'Releases' => 'Pressiteated',
        'Prospects' => 'Eesmärgid',
        'Queues' => 'Pakkumised',
        'EmailMarketing' => 'E-posti turundus',
        'EmailTemplates' => 'Email - Vormid',
        'ProspectLists' => 'Sihtkohad - Nimekirjad',
        'SavedSearch' => 'Salvestatud otsingud',
        'UpgradeWizard' => 'Vaheta viisard võimsamaks',
        'Trackers' => 'Trackerid',
        'TrackerSessions' => 'Trackeri sessioonid',
        'TrackerQueries' => 'Trackeri päringud',
        'FAQ' => 'KKK',
        'Newsletters' => 'Uudiskirjad',
        'SugarFeed' => 'SuiteCRM uudisvoog',
        'SugarFavorites' => 'SuiteCRM lemmikud',

        'OAuthKeys' => 'OAuthi kliendivõtmed',
        'OAuthTokens' => 'OAuthi kontrollkoodid',
        'OAuth2Clients' => 'OAuth kliendid',
        'OAuth2Tokens' => 'OAuthi kontrollkoodid',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Avaleht',
        'Dashboard' => 'Töölaud',
        'Contacts' => 'Eraisikud',
        'Accounts' => 'Ettevõtted',
        'Opportunities' => 'Müügivõimalused',
        'Cases' => 'Juhtumid',
        'Notes' => 'Märkused',
        'Calls' => 'Telefonikõned',
        'Emails' => 'E-kirjad',
        'EmailTemplates' => 'E-kirja mall',
        'Meetings' => 'Kohtumised',
        'Tasks' => 'Ülesanded',
        'Calendar' => 'Kalender',
        'Leads' => 'Müügivihjed',
        'Activities' => 'Tegevused',
        'Bugs' => 'Bugi Tracker',
        'KBDocuments' => 'Teadmusbaas',
        'Feeds' => 'RSS',
        'iFrames' => 'Minu saidid',
        'TimePeriods' => 'Ajaperioodid',
        'Project' => 'Projektid',
        'ProjectTask' => 'Projekti ülesanded',
        'Prospects' => 'Eesmärgid',
        'Campaigns' => 'Kampaaniad',
        'Documents' => 'Dokument',
        'Sync' => 'Sünkimine',
        'Users' => 'Kasutaja',
        'SugarFavorites' => 'SuiteCRM lemmikud',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Jah',
        '2' => 'Ei',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analüütik',
        'Competitor' => 'Konkurent',
        'Customer' => 'Klient',
        'Integrator' => 'Integraator',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Press' => 'Ajakirjandus',
        'Prospect' => 'Potentsiaane klient',
        'Reseller' => 'Edasimüüja',
        'Other' => 'Muu',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Rõivad',
        'Banking' => 'Pangandus',
        'Biotechnology' => 'Biotehnoloogia',
        'Chemicals' => 'Kemikaalid',
        'Communications' => 'Kommunikatsioonid',
        'Construction' => 'Konstruktsioonid',
        'Consulting' => 'Konsulteerimine',
        'Education' => 'Haridus',
        'Electronics' => 'Elektroonika',
        'Energy' => 'Energia',
        'Engineering' => 'Inseneeria',
        'Entertainment' => 'Meelelahutus',
        'Environmental' => 'Keskkond',
        'Finance' => 'Finants',
        'Government' => 'Valitsus',
        'Healthcare' => 'Tervishoid',
        'Hospitality' => 'Külalislahkus',
        'Insurance' => 'Kindlustus',
        'Machinery' => 'Masinatööstus',
        'Manufacturing' => 'Tootmine',
        'Media' => 'Meedia',
        'Not For Profit' => 'MTÜ',
        'Recreation' => 'Taasloomine',
        'Retail' => 'Jaemüük',
        'Shipping' => 'Tarnimine',
        'Technology' => 'Tehnoloogia',
        'Telecommunications' => 'Telekommunikatsioonid',
        'Transportation' => 'Trantsport',
        'Utilities' => 'Taaskasutus',
        'Other' => 'Muu',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Külm kõne',
        'Existing Customer' => 'Olemasolev klient',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Töötaja',
        'Partner' => 'Partner',
        'Public Relations' => 'PR',
        'Direct Mail' => 'Otsekiri',
        'Conference' => 'Konverents',
        'Trade Show' => 'Trade show',
        'Web Site' => 'Veebisait',
        'Word of mouth' => 'Suusõnaline teade',
        'Email' => 'E-kirjad',
        'Campaign' => 'Kampaaniad',
        'Other' => 'Muu',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Olemasolev äri',
        'New Business' => 'Uus äri',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Tulu',
        'Investment' => 'Investeering',
        'Expected_Revenue' => 'Oodatav tulu:',
        'Budget' => 'Eelarve:',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Äriotsuste tegija',
        'Business Evaluator' => 'Ärihindaja',
        'Technical Decision Maker' => 'Tehnilise otsuse tegija',
        'Technical Evaluator' => 'Tehniline hindaja',
        'Executive Sponsor' => 'Peasponsor',
        'Influencer' => 'Mõjutaja',
        'Other' => 'Muu',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Alternatiivne kontakt',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kvalifikatsioon',
        'Needs Analysis' => 'Vajab analüüsi',
        'Value Proposition' => 'Väärtuse kinnitus',
        'Id. Decision Makers' => 'Otsustajate identifitseerimine',
        'Perception Analysis' => 'Taju analüüs',
        'Proposal/Price Quote' => 'Pakkumine/Hinnapakkumine',
        'Negotiation/Review' => 'Läbirääkimised/Ülevaade',
        'Closed Won' => 'Suletud võidud',
        'Closed Lost' => 'Suletud kaotused',
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
        'Call' => 'Telefonikõned',
        'Meeting' => 'Kohtumised',
        'Task' => 'Ülesanded',
        'Email' => 'E-kirjad',
        'Note' => 'Märkused',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Hr.',
        'Ms.' => 'Preili.',
        'Mrs.' => 'Pr.',
        'Miss' => 'Preili',
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
        60 => '1 minut enne',
        300 => '5 minutit enne',
        600 => '10 minutit enne',
        900 => '10 minutit enne',
        1800 => '30 minutit enne',
        3600 => '1 tund enne',
        7200 => '2 tundi enne',
        10800 => '3 tundi enne',
        18000 => '5 tundi enne',
        86400 => '1 päev enne',
    ),

    'task_priority_default' => 'Keskmine',
    'task_priority_dom' => array(
        'High' => 'Kõrge',
        'Medium' => 'Keskmine',
        'Low' => 'Madal',
    ),
    'task_status_default' => 'Pole alustatud',
    'task_status_dom' => array(
        'Not Started' => 'Pole alustatud',
        'In Progress' => 'Töös',
        'Completed' => 'Lõpetatud',
        'Pending Input' => 'Ootab sisendit',
        'Deferred' => 'Edasilükatud',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Toimunud',
        'Not Held' => 'Mittetoimunud',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Muu',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Toimunud',
        'Not Held' => 'Mittetoimunud',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Sissetulev',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Uus',
        'Assigned' => 'Määratud',
        'In Process' => 'Töös',
        'Converted' => 'Konverteeritud',
        'Recycled' => 'Ümbertöödeldud',
        'Dead' => 'Surnud',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Kõrge',
        'P2' => 'Keskmine',
        'P3' => 'Madal',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Regulaarne kasutaja',
        'Administrator' => 'Administraator',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktiivne',
        'Inactive' => 'Mitteaktiivne',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'E-posti kood',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktiivne',
        'Terminated' => 'Lõpetatud',
        'Leave of Absence' => 'Puhkusel',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Kõrge',
        'Medium' => 'Keskmine',
        'Low' => 'Madal',
    ),
    'project_task_priority_default' => 'Keskmine',

    'project_task_status_options' => array(
        'Not Started' => 'Pole alustatud',
        'In Progress' => 'Töös',
        'Completed' => 'Lõpetatud',
        'Pending Input' => 'Ootab sisendit',
        'Deferred' => 'Edasilükatud',
    ),
    'project_task_utilization_options' => array(
        '0' => 'ühtegi',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Mustand',
        'In Review' => 'Ülevaatamisel',
        'Underway' => 'Käimas',
        'On_Hold' => 'Ootel',
        'Completed' => 'Lõpetatud',
    ),
    'project_status_default' => 'Mustand',

    'project_duration_units_dom' => array(
        'Days' => 'Päevi',
        'Hours' => 'Tunde',
    ),

    'activity_status_type_dom' => array(
        '' => '--Pole--',
        'active' => 'Aktiivne',
        'inactive' => 'Mitteaktiivne',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Ettevõtted',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Ettevõtted',
        'Opportunities' => 'Müügivõimalused',
        'Cases' => 'Juhtumid',
        'Leads' => 'Müügivihjed',
        'Contacts' => 'Eraisikud', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Bugi Tracker',
        'Project' => 'Projektid',

        'Prospects' => 'Eesmärgid',
        'ProjectTask' => 'Projekti ülesanded',

        'Tasks' => 'Ülesanded',

        'AOS_Contracts' => 'Leping',
        'AOS_Invoices' => 'Arve',
        'AOS_Quotes' => 'Pakkumine',
        'AOS_Products' => 'Artikkel',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Ettevõtted',
        'Contacts' => 'Eraisikud',
        'Opportunities' => 'Müügivõimalused',
        'Campaigns' => 'Kampaaniad',
        'Tasks' => 'Ülesanded',
        'Emails' => 'E-kirjad',

        'Bugs' => 'Bugi Tracker',
        'Project' => 'Projektid',
        'ProjectTask' => 'Projekti ülesanded',
        'Prospects' => 'Eesmärgid',
        'Cases' => 'Juhtumid',
        'Leads' => 'Müügivihjed',

        'Meetings' => 'Kohtumised',
        'Calls' => 'Telefonikõned',

        'AOS_Contracts' => 'Leping',
        'AOS_Invoices' => 'Arve',
        'AOS_Quotes' => 'Pakkumine',
        'AOS_Products' => 'Artikkel',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Ettevõtted',
        'Contacts' => 'Eraisikud',
        'Tasks' => 'Ülesanded',
        'Opportunities' => 'Müügivõimalused',

        'Bugs' => 'Bugi Tracker',
        'Cases' => 'Juhtumid',
        'Leads' => 'Müügivihjed',

        'Project' => 'Projektid',
        'ProjectTask' => 'Projekti ülesanded',

        'Prospects' => 'Eesmärgid',

        'AOS_Contracts' => 'Leping',
        'AOS_Invoices' => 'Arve',
        'AOS_Quotes' => 'Pakkumine',
        'AOS_Products' => 'Artikkel',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Pakkumised',
        'AOS_Invoices' => 'Arved',
        'AOS_Contracts' => 'Lepingud',
    ),
    'issue_priority_default_key' => 'Keskmine',
    'issue_priority_dom' => array(
        'Urgent' => 'Kiire',
        'High' => 'Kõrge',
        'Medium' => 'Keskmine',
        'Low' => 'Madal',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Aktsepteeritud',
        'Duplicate' => 'Koopia',
        'Closed' => 'Suletud',
        'Out of Date' => 'Aegunud',
        'Invalid' => 'Kehtetu',
    ),

    'issue_status_default_key' => 'Uus',
    'issue_status_dom' => array(
        'New' => 'Uus',
        'Assigned' => 'Määratud',
        'Closed' => 'Suletud',
        'Pending' => 'Ootel',
        'Rejected' => 'Tagasilükatud',
    ),

    'bug_priority_default_key' => 'Keskmine',
    'bug_priority_dom' => array(
        'Urgent' => 'Kiire',
        'High' => 'Kõrge',
        'Medium' => 'Keskmine',
        'Low' => 'Madal',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Aktsepteeritud',
        'Duplicate' => 'Koopia',
        'Fixed' => 'Fikseeritud hind',
        'Out of Date' => 'Aegunud',
        'Invalid' => 'Kehtetu',
        'Later' => 'Hiljem',
    ),
    'bug_status_default_key' => 'Uus',
    'bug_status_dom' => array(
        'New' => 'Uus',
        'Assigned' => 'Määratud',
        'Closed' => 'Suletud',
        'Pending' => 'Ootel',
        'Rejected' => 'Tagasilükatud',
    ),
    'bug_type_default_key' => 'Bugi Tracker',
    'bug_type_dom' => array(
        'Defect' => 'Viga',
        'Feature' => 'Funktsioon',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administreerimine',
        'Product' => 'Artikkel',
        'User' => 'Kasutaja',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Sisemine',
        'Forum' => 'Foorum',
        'Web' => 'Veeb',
        'InboundEmail' => 'E-kirjad',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Ettevõtted',
        'Activities' => 'Tegevused',
        'Bugs' => 'Bugid',
        'Calendar' => 'Kalender',
        'Calls' => 'Telefonikõned',
        'Campaigns' => 'Kampaaniad',
        'Cases' => 'Juhtumid',
        'Contacts' => 'Kontaktid',
        'Currencies' => 'Valuutad',
        'Dashboard' => 'Töölaud',
        'Documents' => 'Dokumendid',
        'Emails' => 'E-kirjad',
        'Feeds' => 'Uudisvood',
        'Forecasts' => 'Prognoosid',
        'Help' => 'Abi',
        'Home' => 'Avaleht',
        'Leads' => 'Müügivihjed',
        'Meetings' => 'Kohtumised',
        'Notes' => 'Märkused',
        'Opportunities' => 'Müügivõimalused',
        'Outlook Plugin' => 'Outlook plugin',
        'Projects' => 'Projektid',
        'Quotes' => 'Pakkumised',
        'Releases' => 'Pressiteated',
        'RSS' => 'RSS',
        'Studio' => 'Stuudio',
        'Upgrade' => 'Täienda',
        'Users' => 'Kasutajad',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planeerimine',
        'Active' => 'Aktiivne',
        'Inactive' => 'Mitteaktiivne',
        'Complete' => 'Lõpetatud',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Telemarketing',
        'Mail' => 'Kiri',
        'Email' => 'E-kirjad',
        'Print' => 'Prindi',
        'Web' => 'Veeb',
        'Radio' => 'Raadio',
        'Television' => 'Televisioon',
        'NewsLetter' => 'Uudiskiri',
        'Survey' => 'Küsitlus',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Iganädalane',
        'Monthly' => 'Igakuine',
        'Quarterly' => 'Kvartaalne',
        'Annually' => 'Iga-aastane',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Jaanuar',
        '2' => 'Veebruar',
        '3' => 'Märts',
        '4' => 'Aprill',
        '5' => 'Mai',
        '6' => 'Juuni',
        '7' => 'Juuli',
        '8' => 'August',
        '9' => 'September',
        '10' => 'Oktoober',
        '11' => 'Novembris',
        '12' => 'Detsember',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jaan',
        '2' => 'Veebr',
        '3' => 'Märts',
        '4' => 'Aprill',
        '5' => 'Mai',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Aug',
        '9' => 'Sept',
        '10' => 'Okt',
        '11' => 'Nov',
        '12' => 'Dets',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Pühapäev',
        '2' => 'Esmaspäev',
        '3' => 'Teisipäev',
        '4' => 'Kolmapäev',
        '5' => 'Neljapäev',
        '6' => 'Reede',
        '7' => 'Laupäev',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'P',
        '2' => 'E',
        '3' => 'T',
        '4' => 'K',
        '5' => 'N',
        '6' => 'R',
        '7' => 'L',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'el',
        'pm' => 'pl',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'EL',
        'PM' => 'PL',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Isiklik',
        'group' => 'Grupp',
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
        'personal' => 'Isiklik',
        'group' => 'Grupp',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Isiklik',
        'group' => 'Grupp',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Isiklik',
        'group' => 'Grupp',
        'system' => 'Süsteem',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Aktiivne',
        'Inactive' => 'Mitteaktiivne',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'Saadetud',
        'archived' => 'Arhiveeritud',
        'draft' => 'Mustand',
        'inbound' => 'Sissetulev',
        'campaign' => 'Kampaaniad',
    ),
    'dom_email_status' => array(
        'archived' => 'Arhiveeritud',
        'closed' => 'Suletud',
        'draft' => 'Mustand',
        'read' => 'Loe',
        'replied' => 'Vastatud',
        'sent' => 'Saadetud',
        'send_error' => 'Saada veateade',
        'unread' => 'Lugemata',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arhiveeritud',
    ),

    'dom_email_server_type' => array(
        '' => '--Pole--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Pole--',
        'createcase' => 'Loo juhtum',
        'bounce' => 'E-posti tagastuse käitlemine',
    ),
    'dom_email_distribution' => array(
        '' => '--Pole--',
        'direct' => 'Otsene määramne',
        'roundRobin' => 'Ringiratast',
        'leastBusy' => 'Vähim hõivatud',
    ),
    'dom_email_errors' => array(
        1 => 'Vali ainult üks kasutaja määramiseks.',
        2 => 'Kasutajale määramiseks saab saata ainult märgitud sõnumeid.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Jah',
        'bool_false' => 'Ei',
    ),
    'dom_int_bool' => array(
        1 => 'Jah',
        0 => 'Ei',
    ),
    'dom_switch_bool' => array(
        'on' => 'Jah',
        'off' => 'Ei',
        '' => 'Ei',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM E-maili rakendus',
        'mailto' => 'Väline e-posti klient',
    ),

    'dom_editor_type' => array(
        'none' => 'HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Vaikimisi emaili formaat',
        'html' => 'HTML e-kiri',
        'plain' => 'Lihtteksti kujul e-post',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Viimne käivitusaeg. Pole teostatud',
        'ready' => 'Valmis',
        'in progress' => 'Töös',
        'failed' => 'Ebaõnnestus',
        'completed' => 'Lõpetatud',
        'no curl' => 'Ei käivitu: cURL-i pole saadaval',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktiivne',
        'Inactive' => 'Mitteaktiivne',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minutit',
        'hour' => 'Tunde',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Turundus',
        'Knowledege Base' => 'Teadmusbaas',
        'Sales' => 'Müük',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arhiveeritud',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Turunduse tagatis',
        'Product Brochures' => 'Tootebrožüürid',
        'FAQ' => 'KKK',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktiivne',
        'Draft' => 'Mustand',
        'FAQ' => 'KKK',
        'Expired' => 'Aegunud',
        'Under Review' => 'Ülevaatamisel',
        'Pending' => 'Ootel',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Kirja mestimine',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Litsentsilepng',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Aktsepteeri',
        'decline' => 'Tagasilükatud',
        'tentative' => 'Esialgne',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Aktsepteeritud',
        'decline' => 'Lükkas kutse tagasi',
        'tentative' => 'Esialgne',
        'none' => 'Pole midagi',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Pole midagi',
        'Daily' => 'Iga päev',
        'Weekly' => 'Iganädalane',
        'Monthly' => 'Igakuine',
        'Yearly' => 'Igaaastane',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'päeviti',
        'Weekly' => 'nädalati',
        'Monthly' => 'kuu',
        'Yearly' => 'aasta',
    ),

    'duration_dom' => array(
        '' => 'Pole midagi',
        '900' => '15 minutit',
        '1800' => '30 minutit',
        '2700' => '45 minutit',
        '3600' => '1 tund',
        '5400' => '1,5 tundi',
        '7200' => '2 tundi',
        '10800' => '3 tundi',
        '21600' => '6 tundi',
        '86400' => '1 päev',
        '172800' => '2 päeva',
        '259200' => '3 päeva',
        '604800' => '1 nädal',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Vaikimisi',
        'seed' => 'Külva',
        'exempt_domain' => 'Domeenipõhiselt eemaldatud',
        'exempt_address' => 'E-maili aadressi põhiselt eemaldatud',
        'exempt' => 'Id põhiselt eemaldatud',
        'test' => 'Testi',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Aktiivne',
        'inactive' => 'Mitteaktiivne',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Sõnum saadetud/üritatud',
        'send error' => 'Tõrjutud sõnumid, teine',
        'invalid email' => 'Tõrjutud sõnumid, kehtetud e-post',
        'link' => 'Klikipõhine link',
        'viewed' => 'Vaadatud sõnum',
        'removed' => 'Väljavalitud',
        'lead' => 'Müügivihjeid loodud',
        'contact' => 'Eraisikuid loodud',
        'blocked' => 'E-maili aadressi või domeeni põhiselt eemaldatud',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontaktid',
        'Users' => 'Kasutajad',
        'Prospects' => 'Eesmärgid',
        'Leads' => 'Müügivihjed',
        'Accounts' => 'Ettevõtted',
    ),
    'merge_operators_dom' => array(
        'like' => 'Sisaldab',
        'exact' => 'Täpselt',
        'start' => 'Algab',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Jah',
        'false' => 'Ei',
        'required' => 'Kohustuslik',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Keelatud',
        1 => 'Lubatud',
        2 => 'Filter',
        3 => 'Vaikimisi valitud filter',
        4 => 'Ainult filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Kõrge',
        'medium' => 'Keskmine',
        'low' => 'Madal',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Pole alustatud',
        'inprogress' => 'Töös',
        'completed' => 'Lõpetatud',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Laienda legendi',
        'collapselegend' => 'Sule legend',
        'clickfordrilldown' => 'Kliki avamiseks',
        'detailview' => 'Rohkem infot...',
        'piechart' => 'Sektordiagramm',
        'groupchart' => 'Rühmita diagramm',
        'stackedchart' => 'Virnastatud diagramm',
        'barchart' => 'Lintdiagramm',
        'horizontalbarchart' => 'Horisontaalne lintdiagramm',
        'linechart' => 'Joondiagramm',
        'noData' => 'Andmeid pole',
        'print' => 'Prindi',
        'pieWedgeName' => 'sektsioonid',
    ),
    'release_status_dom' => array(
        'Active' => 'Aktiivne',
        'Inactive' => 'Mitteaktiivne',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Üksik pakkumine (&#39;)',
        '"' => 'Çift Tırnak (&#34;)',
        '' => 'Pole midagi',
        'other' => 'Muu:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => 'l',
        'other' => 'Muu:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Uus aken',
        '_self' => 'Sama aken',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Ära automaatselt uuenda',
        '30' => 'Iga 30 sekundi järel',
        '60' => 'Iga 1 minuti tagant',
        '180' => 'Iga 3 minuti tagant',
        '300' => 'Iga 5 minuti järel',
        '600' => 'Iga 10 minuti järel',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Mitte kunagi',
        '30' => 'Iga 30 sekundi järel',
        '60' => 'Iga 1 minuti tagant',
        '180' => 'Iga 3 minuti tagant',
        '300' => 'Iga 5 minuti järel',
        '600' => 'Iga 10 minuti järel',
    ),
    'date_range_search_dom' => array(
        '=' => 'Võrdub',
        'not_equal' => 'Ei võrdu',
        'greater_than' => 'Pärast',
        'less_than' => 'Enne',
        'last_7_days' => 'Viimased 7 päeva',
        'next_7_days' => 'Järgmised 7 päeva',
        'last_30_days' => 'Viimased 30 päeva',
        'next_30_days' => 'Järgmised 30 päeva',
        'last_month' => 'Viimane kuu',
        'this_month' => 'Sel kuul',
        'next_month' => 'Järgmine kuu',
        'last_year' => 'Viimane aasta',
        'this_year' => 'Sel aastal',
        'next_year' => 'Järgmine aasta',
        'between' => 'on vahemikus',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Võrdub',
        'not_equal' => 'Ei võrdu',
        'greater_than' => 'Suurem kui',
        'greater_than_equals' => 'Suurem või võrdne',
        'less_than' => 'Vähem kui',
        'less_than_equals' => 'Väiksem või Võrdne',
        'between' => 'on vahemikus',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopeeri',
        'move' => 'Liiguta',
        'donothing' => 'Ära tee midagi',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Otsingu tulemused',
    'ERR_SEARCH_INVALID_QUERY' => 'Otsingu tegemisel tekkis viga. Otsingu parameetrid võivad olla vigased.',
    'ERR_SEARCH_NO_RESULTS' => 'Sellele otsingukriteeriumile vasteid ei leidu. Proovige otsingusõnu üldistada.',
    'LBL_SEARCH_PERFORMED_IN' => 'Otsing teostati',
    'LBL_EMAIL_CODE' => 'E-posti kood:',
    'LBL_SEND' => 'Saada',
    'LBL_LOGOUT' => 'Logi välja',
    'LBL_TOUR_NEXT' => 'Edasi',
    'LBL_TOUR_SKIP' => 'Jäta vahele',
    'LBL_TOUR_BACK' => 'Tagasi',
    'LBL_TOUR_TAKE_TOUR' => 'Tee ringkäik',
    'LBL_MOREDETAIL' => 'Lisainfo' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Redigeeri teksti sees' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Vaade' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filter' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Lisa' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Lisa e-posti aadress' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Peida/Näita' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Kustuta' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Tühjenda' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Eemalda' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Eemalda e-posti aadress' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Loobu e-postist',
    'LBL_ID_FF_INVALID' => 'Märgi sobimatuks',
    'LBL_ADD' => 'Lisa' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Ettevõtte logo' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Ühenduste hüpikaknad',
    'LBL_CLOSEINLINE' => 'Sulge',
    'LBL_VIEWINLINE' => 'Vaade',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Prindi',
    'LBL_HELP' => 'Abi',
    'LBL_ID_FF_SELECT' => 'Vali',
    'DEFAULT' => 'Põhiline',
    'LBL_SORT' => 'Sorteeri',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Luba SMTP üle SSL või TLS-i?',
    'LBL_NO_ACTION' => 'Pole ühtegi toimingut nimega: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Ühtegi toimingut pole saadaval.',
    'LBL_NO_DATA' => 'Andmeid pole',

    'LBL_ROUTING_FLAGGED' => 'Lipp määratud',
    'LBL_ROUTING_TO' => 'saaja',
    'LBL_ROUTING_TO_ADDRESS' => 'aadressile',
    'LBL_ROUTING_WITH_TEMPLATE' => 'koos malliga',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Telefoni ja aadressi väljadel on sul hetkel väärtused olemas. Vaartuste telefon/aadress ülekirjutamiseks valitud kontol kliki "OK". Praeguste väärtuste säilitamiseks kliki Tühista.',
    'LBL_DROP_HERE' => '[Aseta siia]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Täida Gmail™ vaikeseaded',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nimi',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Väljamineva meiliserveri omadused',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP parool:',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP Port:',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP Server:',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP kasutajanimi:',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Vaikimisi',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Hoiatus: väljamineval e-kirjal puuduvad kasutajanimi ja salasõna.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Seadista e-posti kontod sissetulevate e-kirjade vaatamiseks.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Määra SMTP emaili server, mida kasutada väljamineva e-posti kontoks E-maili kontode all.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Tehtud',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Tühjenda',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Kellele:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Koopia:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Pimekoopia:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Kellele/Koopia/Pimekoopia',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-post:',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nimi',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Aadresse ei leitud',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Salvesta ja lisa aadressiraamatusse',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Vali e-posti saajad',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Aadressiraamat',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Hoiatus! Väljaminev konto, mida soovid kustutada on seotud olemasoleva sisetuleva kontoga. Kas oled kindel, et soovid jätkata?',
    'LBL_EMAIL_ADDRESSES' => 'E-kirjad',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-post:',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Kinnitate, et teie meiliaadressile on lubatud kirju saata: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Ei saa kinnitada e-posti aadressit',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Impordi SuiteCRM-i',
    'LBL_EMAIL_ASSIGNMENT' => 'Määramine',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Lisa manus',
    'LBL_EMAIL_ATTACHMENT' => 'Lisa manus',
    'LBL_EMAIL_ATTACHMENTS' => 'Lokaalsest süsteemist',
    'LBL_EMAIL_ATTACHMENTS2' => 'SuiteCRM dokumentidest',
    'LBL_EMAIL_ATTACHMENTS3' => 'Malli manused',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fail',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokument',
    'LBL_EMAIL_BCC' => 'Pimekoopia',
    'LBL_EMAIL_CANCEL' => 'Tühista',
    'LBL_EMAIL_CC' => 'Koopia',
    'LBL_EMAIL_CHARSET' => 'Sümbol määratud',
    'LBL_EMAIL_CHECK' => 'Vaata posti',
    'LBL_EMAIL_CHECKING_NEW' => 'Uute e-kirjade kontrollimine',
    'LBL_EMAIL_CHECKING_DESC' => 'Üks hetk palun...<br /><br /><br />Kui see on esmakordne e-posti konto kontroll, siis see võib võtta natuke aega.',
    'LBL_EMAIL_CLOSE' => 'Sulge',
    'LBL_EMAIL_COFFEE_BREAK' => 'Uute e-kirjade kontroll.<br /><br /><br />Suur e-posti konto võib võtta märkimisväärselt aega.',

    'LBL_EMAIL_COMPOSE' => 'E-kirjad',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Palun sisesta saaja(d) selle e-kirja jaoks.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Selle e-kirja keha on tühi. Saata siiski?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Sellel e-kirjal pole teemat. Saata siiski?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(pole teemat)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Palun sisesta kehtiv e-posti aadress Kellele, Koopia ja Pimekoopia väljadele',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Loobuda selle e-kirjast?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Kas oled kindel, et soovid selle allkirja kustutada?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-kiri on saadetud',

    'LBL_EMAIL_CREATE_NEW' => '--Loo salvestamisel--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Mitmekordne',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tühi',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Saatmiskuupäev saatja järgi',
    'LBL_EMAIL_DATE_TODAY' => 'Täna',
    'LBL_EMAIL_DELETE' => 'Kustuta',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Kustuta valitud sõnumid?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-kiri on edukalt kustutatud.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Sõnumi kustutamine',
    'LBL_EMAIL_DETAILS' => 'Lisainfo',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Eraisikutega töötamisel kasutatakse vaid esmast e-posti aadressi.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Tühjenda prügikast',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Kustuta välajminev server',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Cleaning cache fles',
    'LBL_EMAIL_EMPTY_MSG' => 'Pole ühtegi E-kirja, mida näidata.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Pole ühtegi E-kirja, mida näidata.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Kausta nimi peab olema ainulaadne ja ei ole tühi. Palun proovi uuesti.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Ei asa kausta kustutada. Kaust või selle alamkaustad omavad e-kirju või seotud postkasti.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ei saa kausta konteksti kindlaks teha. Proovi uuesti.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Palun kontrolli oma sätteid.',
    'LBL_EMAIL_ERROR_DESC' => 'Avastati viga:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Ligipääs puudub sellele alale. Kontakteeru saidi administraatoriga ligipääsu taotlemiseks.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM kataloogide nimed peavad olema unikaalsed.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Palun sisesta mõni otsingu kriteerium.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Viga',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Sõnum Serverist eemaldatud',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Sõnum on kas serverist eemaldatud või paigutatud esinevasse kausta.',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Meiliserveriga ühendus ebaõnnestus. Palun kontakteeru oma administraatoriga.',
    'LBL_EMAIL_ERROR_MOVE' => 'E-kirjade ümberpaigutamine serverite ja/või e-posti kontode vahel ei ole sel korral toetatud.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Tõrge liigutamisel',
    'LBL_EMAIL_ERROR_NAME' => 'Nimi on nõutud.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Aadressilt on nõutud. Palun sisesta kehtiv e-posti aadress.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Palun paku fail.',
    'LBL_EMAIL_ERROR_SERVER' => 'Meiliserver aadress on nõutud.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'E-posti konto ei pruugi olla salvestatud.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Viga kommunikeerumisel meiliserveriga.',
    'LBL_EMAIL_ERROR_USER' => 'Sisselogimisnimi on nõutav.',
    'LBL_EMAIL_ERROR_PORT' => 'Meiliserveri port on nõutav.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Serveri protokoll on nõutav.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Monitooritud kaust on nõutav.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Prügikasti kaust on nõutav.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'See info pole saadaval',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Väljaminevat meiliserverit pole täpsustatud.',
    'LBL_EMAIL_ERROR_SENDING' => 'Viga e-maili saatmisel. Abi saamiseks pöörduge oma administraatori poole.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Kaustad',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Lisa',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Lisa uus kaust',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Ümbernimeta kaust',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Salvesta',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Lisa see kaust',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Seda kausta ei saa muuta',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Kas oled kindel, et soovd seda kausta kustutada?Seda protsessi ei saa tagasi pöörata.\n Kausta kustutamised laienevad ka teistele sisalduvatele kaustadele.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Uus kausta nimi',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Palun vali kaust enne selle tegevuse teostamist.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Kausta haldus',

    'LBL_EMAIL_FORWARD' => 'Saada edasi',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Alla laetud [[count]] [[total]] e-kirju',
    'LBL_EMAIL_FROM' => 'Kellelt',
    'LBL_EMAIL_GROUP' => 'grupp',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grupp',
    'LBL_EMAIL_HOME_FOLDER' => 'Avaleht',
    'LBL_EMAIL_IE_DELETE' => 'E-posti konto kustutamine',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Allkirja kustutamine',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Kas oled kindel, et soovid selle e-posti konto kustutada?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Kustutamine oli edukas.',
    'LBL_EMAIL_IE_SAVE' => 'Meilikonto info salvestamine',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'E-posti importimine',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Impordi SuiteCRM-i',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Impordi sätted',
    'LBL_EMAIL_INVALID' => 'Kehtetu',
    'LBL_EMAIL_LOADING' => 'Laadimine...',
    'LBL_EMAIL_MARK' => 'Märgista',
    'LBL_EMAIL_MARK_FLAGGED' => 'Kui märgistatud',
    'LBL_EMAIL_MARK_READ' => 'Loetud',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Kui mittemärgistatud',
    'LBL_EMAIL_MARK_UNREAD' => 'Lugemata',
    'LBL_EMAIL_ASSIGN_TO' => 'Vastutaja',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Loo kaust',
    'LBL_EMAIL_MENU_COMPOSE' => 'Koosta',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Kustuta kaust',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Tühjenda prügikast',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Süngi',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Tühjenda cache failid',
    'LBL_EMAIL_MENU_REMOVE' => 'Eemalda',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Ümbernimeta kaust',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Kausta ümbernimetamine',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Palun tee valik enne seda operatsiooni',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Loo kaust (kaugtöölaual või SuiteCRM-is)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Kustuta kaust (serveris või SuiteCRM-is)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tühjenda kõik prügikastis sinu e-posti kontodes',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Märgista need e-kirjad loetuks',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Märgista need lipukesteta e-kirjad',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Nimeta kaust ringi (serveris või SuiteCRM-is)',

    'LBL_EMAIL_MESSAGES' => 'sõnumid',

    'LBL_EMAIL_ML_NAME' => 'Perekonnanimi',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Valitud loendi aadressid',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Saadaolevad loendi aadressid',

    'LBL_EMAIL_MULTISELECT' => 'Ctrl-Click mitmete valikuks<br />(Maci kasutajad kasutage CMD-Click)',

    'LBL_EMAIL_NO' => 'Ei',
    'LBL_EMAIL_NOT_SENT' => 'Süsteem ei saa sinu taotlust täita. Palun kontakteeru süsteemiadministraatoriga.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Üks hetk palun...',
    'LBL_EMAIL_OPEN_ALL' => 'Ava mitmed sõnumid',
    'LBL_EMAIL_OPTIONS' => 'Suvandid',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Kiirkoostamine',
    'LBL_EMAIL_OPT_OUT' => 'Väljavalitud',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Nõusolek puudub ja vigane',
    'LBL_EMAIL_PERFORMING_TASK' => 'Teostamise ülesanen',
    'LBL_EMAIL_PRIMARY' => 'Esmane',
    'LBL_EMAIL_PRINT' => 'Prindi',

    'LBL_EMAIL_QC_BUGS' => 'Bugi Tracker',
    'LBL_EMAIL_QC_CASES' => 'Juhtumid',
    'LBL_EMAIL_QC_LEADS' => 'Müügivihjed',
    'LBL_EMAIL_QC_CONTACTS' => 'Eraisikud',
    'LBL_EMAIL_QC_TASKS' => 'Ülesanded',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Müügivõimalused',
    'LBL_EMAIL_QUICK_CREATE' => 'Kiirloomine',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Kaustade taastamine',
    'LBL_EMAIL_RELATE_TO' => 'Seo',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Vaata seoseid',
    'LBL_EMAIL_RECORD' => 'E-kirja kirje',
    'LBL_EMAIL_REMOVE' => 'Eemalda',
    'LBL_EMAIL_REPLY' => 'Vasta',
    'LBL_EMAIL_REPLY_ALL' => 'Vasta kõigile',
    'LBL_EMAIL_REPLY_TO' => 'Vasta',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Sõnumi laadimine',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'E-posti kirje laadimine',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Palun vali vaid üks e-kirja kirja',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Tagasi eelmise mooduli juurde?`',
    'LBL_EMAIL_REVERT' => 'Tagasipöörduma',
    'LBL_EMAIL_RELATE_EMAIL' => 'Seo e-kiri',

    'LBL_EMAIL_RULES_TITLE' => 'Reeglite haldus',

    'LBL_EMAIL_SAVE' => 'Salvesta',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Salvesta ja vasta',
    'LBL_EMAIL_SAVE_DRAFT' => 'Salvesta mustand',
    'LBL_EMAIL_DRAFT_SAVED' => 'Mustand salvestatud',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Kuupäevast',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Kuupäevani',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Sinu otsingukriteeriumitele ei leitud vastavaid tulemusi.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Otsi tulemusi',

    'LBL_EMAIL_SELECT' => 'Vali',

    'LBL_EMAIL_SEND' => 'Saada',
    'LBL_EMAIL_SENDING_EMAIL' => 'E-kirja saatmine',

    'LBL_EMAIL_SETTINGS' => 'Sätted',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'E-posti kontod',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Tühjenda',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Kontrolli uusi e-kirju',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Aadressilt',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-posti aadress teavituste testi jaoks.',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nime alt:',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Vasta aadress',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Süngi kõik e-posti kontod',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'E-kiri saadeti konkreetsele e-posti aadressile kasutades pakutud väljamineva e-posti sätteid. Palun kontrolli, kas see e-kiri jõudis kohale, et veenduda sätete korrektsuses.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Vaata täielikku SMTP Logi',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Teostada täielik sünkimine? Suured e-posti kontod võtavad aega mõned minutid.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Kliki Shift või Ctrl klahvi, et valida mitut kausta.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Üldine',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Loo grupi kaustad',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Redigeeri grupi kaust',

    'LBL_EMAIL_SETTINGS_NAME' => 'E-posti konto nimi:',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Vali e-kirjade arv postkastis lehe kohta. See seadistus võib eeldada lehe värskendamist.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'E-posti konto laadimine',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Seadistused on salvestatud.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Saada ainult lihttekstina e-kirju',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'E-kirju lehe kohta',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuaali sätted',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Soodustused',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Saadavl kasutaja kaustad',
    'LBL_EMAIL_ERROR_PREPEND' => 'Ilmnes e-kirja tõrge:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Sinu kasutatava e-posti konto valitud väljamineva e-posti mailiserver on kehtetu. Kontrolli sätteid või vali teine meiliserver selle e-posti konto jaoks.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Väljamineva e-posti mailiserver pole konfigureeritud e-kirju saatma. Palun konfigureeri väljamineva e-posti mailiserver või vali server e-posti konto jaoks mida sa kasutad sätetes >> E-posti konto.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Vaikimisi signatuur',
    'LBL_EMAIL_SIGNATURES' => 'Allkirjad',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Muu',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[Serveri kaustad]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM kaustad]',
    'LBL_EMAIL_SUBJECT' => 'Teema',
    'LBL_EMAIL_SUCCESS' => 'Korras',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM kaust',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'E-posti malli keha on tühi',
    'LBL_EMAIL_TEMPLATES' => 'Mallid',
    'LBL_EMAIL_TO' => 'Kellele',
    'LBL_EMAIL_VIEW' => 'Vaade',
    'LBL_EMAIL_VIEW_HEADERS' => 'Kuva päised',
    'LBL_EMAIL_VIEW_RAW' => 'Kuva rea e-post',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'See funktsioon ei ole toetatud, kui kasutatakse koos POP#-ga.',
    'LBL_DEFAULT_LINK_TEXT' => 'Vaikimisi lingi tekst.',
    'LBL_EMAIL_YES' => 'Jah',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Saada testkiri',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Testkiri saadetud',
    'LBL_EMAIL_MESSAGE_NO' => 'Sõnumi nr',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import sooritatud',
    'LBL_EMAIL_IMPORT_FAIL' => 'Import ebaõnnestus, kuna kas sõnum on juba imporditud või kustutatud serverist.',

    'LBL_LINK_NONE' => 'Pole midagi',
    'LBL_LINK_ALL' => 'Kõik',
    'LBL_LINK_RECORDS' => 'Kirjed',
    'LBL_LINK_SELECT' => 'Vali',
    'LBL_LINK_ACTIONS' => 'TOIMINGUD',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Kinnita',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Kas soovid seda #module# sulgeda?',
    'LBL_INVALID_FILE_EXTENSION' => 'Kehtetu faili laiendus',

    'ERR_AJAX_LOAD' => 'Tekkis tõrge:',
    'ERR_AJAX_LOAD_FAILURE' => 'Töötlemisel ilmnes tõrge, proovige hiljem uuesti.',
    'ERR_AJAX_LOAD_FOOTER' => 'Kui see viga kordub, palun laske oma adminstraatoril keelata Ajax selles moodulis',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Kümnendieraldaja ei saa kasutada sama sümbolit nagu tuhandiku eraldaja.\\n\\n Palun muuda väärtuseid.',
    'ERR_DELETE_RECORD' => 'Kontakti kustutamiseks täpsusta kirje numbrit.',
    'ERR_EXPORT_DISABLED' => 'Eksportimised mittelubatud.',
    'ERR_EXPORT_TYPE' => 'Viga eksportimisel',
    'ERR_INVALID_EMAIL_ADDRESS' => 'mittekehtiv e-posti aadress.',
    'ERR_INVALID_FILE_REFERENCE' => 'Mittekehtiv faili viide',
    'ERR_NO_HEADER_ID' => 'Funktsioon on sel teemal mittesaadaval.',
    'ERR_NOT_ADMIN' => 'Administratsiooni jaoks autoriseerimata ligipääs.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Puuduv nõutud väli:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Kehtetu nõutud väli:',
    'ERR_INVALID_VALUE' => 'Kehtetu väärtus',
    'ERR_NO_SUCH_FILE' => 'Fail ei eksisteeri süsteemis',
    'ERR_NO_SINGLE_QUOTE' => 'Ei saa kasutada üksikut komamärki',
    'ERR_NOTHING_SELECTED' => 'Enne jätkamist tee palun valik',
    'ERR_SELF_REPORTING' => 'Kasutaja ei saa olla aruandev iseendale.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Välja jaoks pole vastet:',
    'ERR_SQS_NO_MATCH' => 'Vastet pole',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Määrake "võti" index displayParams atribuutides metaandmete definitsioonides',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Viga: Portaali nimi on määratletud juba teisele kontaktile.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Välja väärtus pole kooskõlas täpsustattud väärtusega',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Välise konto salvestamisel ilmnes tõrge.',
    'ERR_NO_DB' => 'Andmebaasiga ei saanud ühendust. Vt suitecrm.log üksikasju (0).',
    'ERR_DB_FAIL' => 'Andmebaasi tõrge. Vt suitecrm.log üksikasju.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} faile saab kasutada ainult SuiteCRM {1} andmebaasiga.',

    'LBL_ACCOUNT' => 'Ettevõtted',
    'LBL_ACCOUNTS' => 'Ettevõtted',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vaata kokkuvõtet',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vaata kokkuvõtet',
    'LBL_ADD_BUTTON' => 'Lisa',
    'LBL_ADD_DOCUMENT' => 'Lisa dokument',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Lisa Eesmärgiloendisse',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Lisa Eraisikud Sihtnimekirja',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Kliki sulgemiseks',
    'LBL_ADDITIONAL_DETAILS' => 'Lisainfo',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arhiiv',
    'LBL_ASSIGNED_TO_USER' => 'Määratud kasutaja',
    'LBL_ASSIGNED_TO' => 'Vastutaja:',
    'LBL_BACK' => 'Tagasi',
    'LBL_BILLING_ADDRESS' => 'Arve aadress',
    'LBL_QUICK_CREATE' => 'Loo ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - avatud lähtekoodiga CRM',
    'LBL_BUGS' => 'Bugid',
    'LBL_BY' => 'liites',
    'LBL_CALLS' => 'Telefonikõned',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Saada ootel kampaania e-kirjad',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Edasta',
    'LBL_CASE' => 'Juhtumid',
    'LBL_CASES' => 'Juhtumid',
    'LBL_CHANGE_PASSWORD' => 'Muuda parooli',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Kontrolli kõik',
    'LBL_CITY' => 'Linn:',
    'LBL_CLEAR_BUTTON_LABEL' => 'Tühjenda',
    'LBL_CLEAR_BUTTON_TITLE' => 'Tühjenda',
    'LBL_CLEARALL' => 'Tühjenda kõik',
    'LBL_CLOSE_BUTTON_TITLE' => 'Sulge',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Sulge ja loo uus',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Sulge ja loo uus',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Avatud kirjed:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Koosta e-kiri',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Koosta e-kiri',
    'LBL_SEARCH_DROPDOWN_YES' => 'Jah',
    'LBL_SEARCH_DROPDOWN_NO' => 'Ei',
    'LBL_CONTACT_LIST' => 'Kontaktiloend',
    'LBL_CONTACT' => 'Eraisikud',
    'LBL_CONTACTS' => 'Kontaktid',
    'LBL_CONTRACT' => 'Leping',
    'LBL_CONTRACTS' => 'Lepingud',
    'LBL_COUNTRY' => 'Riik;',
    'LBL_CREATE_BUTTON_LABEL' => 'Loo',
    'LBL_CREATED_BY_USER' => 'Looja',
    'LBL_CREATED_USER' => 'Looja',
    'LBL_CREATED' => 'Loodud',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Valuuta:',
    'LBL_DOCUMENTS' => 'Dokumendid',
    'LBL_DATE_ENTERED' => 'Loomiskuupäev',
    'LBL_DATE_MODIFIED' => 'Muutmiskuupäev',
    'LBL_EDIT_BUTTON' => 'Redigeeri',
    'LBL_DUPLICATE_BUTTON' => 'Koopia',
    'LBL_DELETE_BUTTON' => 'Kustuta',
    'LBL_DELETE' => 'Kustuta',
    'LBL_DELETED' => 'Kustutatud',
    'LBL_DIRECT_REPORTS' => 'Otsesed aruanded',
    'LBL_DONE_BUTTON_LABEL' => 'Tehtud',
    'LBL_DONE_BUTTON_TITLE' => 'Tehtud',
    'LBL_FAVORITES' => 'Lemmikud',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Palun vali vCard fail',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard-l ei ole kõiki nõutud välju selle mooduli jaoks. Vt suitecrm.log üksikasju.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Üleslaaditud fail on üle 30000 baidi.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Vcard-faili üleslaadimisel ilmnes tõrge. Vt suitecrm.log üksikasju.',
    'LBL_IMPORT_VCARD' => 'Impordi vCard',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Impordi vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Impordi vCard',
    'LBL_VIEW_BUTTON' => 'Vaade',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Saada PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Saada PDF',
    'LBL_EMAILS' => 'E-kirjad',
    'LBL_EMPLOYEES' => 'Töötajad',
    'LBL_ENTER_DATE' => 'Sisesta kuupäev',
    'LBL_EXPORT' => 'Ekspordi',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Mine',
    'LBL_HIDE' => 'Peida',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Impordi',
    'LBL_IMPORT_STARTED' => 'Import alustatud:',
    'LBL_LAST_VIEWED' => 'Viimati vaadatud',
    'LBL_LEADS' => 'Müügivihjed',
    'LBL_LESS' => 'vähem',
    'LBL_CAMPAIGN' => 'Kampaania:',
    'LBL_CAMPAIGNS' => 'Kampaaniad',
    'LBL_CAMPAIGNLOG' => 'Kampaania logi',
    'LBL_CAMPAIGN_CONTACT' => 'Kampaaniad',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Pole midagi',
    'LBL_THEME' => 'Teema:',
    'LBL_FOUND_IN_RELEASE' => 'Leitud tooteuuenduses',
    'LBL_FIXED_IN_RELEASE' => 'Fikseeritud tooteuuendus',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_LIST_ASSIGNED_USER' => 'Kasutaja',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktisiku nimi:',
    'LBL_LIST_CONTACT_ROLE' => 'Kontakti roll:',
    'LBL_LIST_DATE_ENTERED' => 'Loomiskuupäev',
    'LBL_LIST_EMAIL' => 'E-kirjad',
    'LBL_LIST_NAME' => 'Nimi',
    'LBL_LIST_OF' => 'kuni',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Seotud',
    'LBL_LIST_USER_NAME' => 'Kasutajanimi',
    'LBL_LISTVIEW_NO_SELECTED' => 'Palun vali jätkamiseks vähemalt 1 kirje.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Palun vali jätkamiseks vähemalt 2 kirjet.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Vali kirjed',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Valitud',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Ülemeelik koodiahv',
    'LBL_CANCEL' => 'Tühista',
    'LBL_VERIFY' => 'Kinnita',
    'LBL_RESEND' => 'Saada uuesti',
    'LBL_PROFILE' => 'Profiil',
    'LBL_MAILMERGE' => 'Kirja mestimine',
    'LBL_MASS_UPDATE' => 'Üldine ajakohastamine',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Massiuuendamise jaoks pole välju defineeritud',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Loobu tellimusest, esmane e-posti aadress',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Telli e-post, esmasele e-posti aadressile',
    'LBL_MEETINGS' => 'Kohtumised',
    'LBL_MEETING_GO_BACK' => 'Mine tagasi koosoleku peale',
    'LBL_MEMBERS' => 'Liikmed',
    'LBL_MEMBER_OF' => 'Liige',
    'LBL_MODIFIED_BY_USER' => 'Muutja',
    'LBL_MODIFIED_USER' => 'Muutja',
    'LBL_MODIFIED' => 'Muutja:',
    'LBL_MODIFIED_NAME' => 'Muutja nime järgi',
    'LBL_MORE' => 'rohkem',
    'LBL_MY_ACCOUNT' => 'Minu sätted',
    'LBL_NAME' => 'Nimi',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Loo',
    'LBL_NEW_BUTTON_TITLE' => 'Loo',
    'LBL_NEXT_BUTTON_LABEL' => 'Edasi',
    'LBL_NONE' => '--Pole--',
    'LBL_NOTES' => 'Märkused',
    'LBL_OPPORTUNITIES' => 'Müügivõimalused',
    'LBL_OPPORTUNITY_NAME' => 'Müügivõimaluse nimi',
    'LBL_OPPORTUNITY' => 'Müügivõimalused',
    'LBL_OR' => 'VÕI',
    'LBL_PANEL_OVERVIEW' => 'Ettevõtte ülevaade',
    'LBL_PANEL_ASSIGNMENT' => 'MUUD',
    'LBL_PANEL_ADVANCED' => 'ROHKEM INFOT',
    'LBL_PARENT_TYPE' => 'Peamise liik',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postiindeks:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Esmane aadress linn:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Esmane aadress maakond:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Esmane aadress postiindeks:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Esmane aadress maakond:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Esmane aadress Tänav 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Esmane aadress Tänav 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Esmane aadress tänav:',
    'LBL_PRIMARY_ADDRESS' => 'Esmane aadress:',

    'LBL_PROSPECTS' => 'Väljavaated',
    'LBL_PRODUCTS' => 'Artiklid',
    'LBL_PROJECT_TASKS' => 'Projekti ülesanded',
    'LBL_PROJECTS' => 'Projektid',
    'LBL_QUOTES' => 'Pakkumised',

    'LBL_RELATED' => 'Seotud',
    'LBL_RELATED_RECORDS' => 'Seotud kirjed',
    'LBL_REMOVE' => 'Eemalda',
    'LBL_REPORTS_TO' => 'Juhataja',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Tähistab nõutud välja',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Tehtud',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Täisvorm',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Täisvorm',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Salvesta ja loo uus',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Salvesta ja loo uus',
    'LBL_SAVE_OBJECT' => 'Salvesta {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Otsi',
    'LBL_SEARCH_BUTTON_TITLE' => 'Otsi',
    'LBL_FILTER' => 'Filter',
    'LBL_SEARCH' => 'Otsi',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'rohkem',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Kehtetu failiformaat, ainult pildifaili saab üleslaadida.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Vali',
    'LBL_SELECT_BUTTON_TITLE' => 'Vali',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Lehtise dokumente',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Lehtise dokumente',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Vali kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Vali kontakt',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Vali aruannetest',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Vali aruanded',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Vali kasutaja',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Vali kasutaja',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Eemalda valik',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Eemalda valik',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Eemalda valik',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Eemalda valik',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Vali fail',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Vali fail',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Eemalda fail',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Eemalda fail',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Vali kasutaja',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Vali kasutaja',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Tühjenda kasutaja',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Tühjenda kasutaja',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Vali ettevõte',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Vali ettevõte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Tühjenda konto',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Tühjenda konto',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Vali kampaania',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Vali kampaania',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Tühjenda Kampaania',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Tühjenda Kampaania',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Vali kontakt',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Vali kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Tühjenda Kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Tühjenda Kontakt',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Vali meeskond',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Vali meeskond',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Tühjenda Meeskond',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Tühjenda Meeskond',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressurssid on kasutatud lehe ülesehitamiseks (päringud, falid)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekundit.',
    'LBL_SERVER_RESPONSE_TIME' => 'Serveri reaktsiooniaeg:',
    'LBL_SERVER_MEMORY_BYTES' => 'baiti',
    'LBL_SERVER_MEMORY_USAGE' => 'Serveri mälu hõivatus: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Kasutamine:-moodul: {0} - tegevus: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server maksimaalne mälu kasutamine: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Tarne aadress',
    'LBL_SHOW' => 'Näita',
    'LBL_STATE' => 'Olek:',
    'LBL_STATUS_UPDATED' => 'Sinu olek selle sündmuse jaoks on uuendatud!',
    'LBL_STATUS' => 'Olek:',
    'LBL_STREET' => 'Tänav',
    'LBL_SUBJECT' => 'Teema',

    'LBL_INBOUNDEMAIL_ID' => 'Sissetuleva e-posti ID',

    'LBL_SCENARIO_SALES' => 'Müük',
    'LBL_SCENARIO_MARKETING' => 'Turundus',
    'LBL_SCENARIO_FINANCE' => 'Finants',
    'LBL_SCENARIO_SERVICE' => 'Teenus',
    'LBL_SCENARIO_PROJECT' => 'Projekti haldamine',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'See stsenaarium võimaldab müügikaupade juhtimist',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'See stsenaarium võimaldab turunduse juhtimist',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'See stsenaarium võimaldab finantside juhtimist',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'See stsenaarium võimaldab teenuste juhtimist',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'See stsenaarium võimaldab projektidega seotud juhtimist',

    'LBL_SYNC' => 'Sünkimine',
    'LBL_TABGROUP_ALL' => 'Kõik',
    'LBL_TABGROUP_ACTIVITIES' => 'Tegevused',
    'LBL_TABGROUP_COLLABORATION' => 'Koostöö',
    'LBL_TABGROUP_MARKETING' => 'Turundus',
    'LBL_TABGROUP_OTHER' => 'Muu',
    'LBL_TABGROUP_SALES' => 'Müük',
    'LBL_TABGROUP_SUPPORT' => 'Tugi',
    'LBL_TASKS' => 'Ülesanded',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhiveeri e-kiri',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhiveeri e-kiri',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Taasta',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Taasta',
    'LBL_UNDELETE_BUTTON' => 'Taasta',
    'LBL_UNDELETE' => 'Taasta',
    'LBL_UNSYNC' => 'Desüngi',
    'LBL_UPDATE' => 'Uuenda',
    'LBL_USER_LIST' => 'Kasutajaloend',
    'LBL_USERS' => 'Kasutajad',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Olemasoleva e-kirja sissekande kontroll...',
    'LBL_VERIFY_PORTAL_NAME' => 'Olemasoleva portaali nime kontroll...',
    'LBL_VIEW_IMAGE' => 'vaata',

    'LNK_ABOUT' => 'Meist',
    'LNK_ADVANCED_FILTER' => 'Lisavõimalustega filter',
    'LNK_BASIC_FILTER' => 'Kiirfilter',
    'LBL_ADVANCED_SEARCH' => 'Lisavõimalustega filter',
    'LBL_QUICK_FILTER' => 'Kiirfilter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Näita kõik',
    'LNK_CLOSE' => 'Sulge',
    'LBL_MODIFY_CURRENT_FILTER' => 'Muuda praegust filtrit',
    'LNK_SAVED_VIEWS' => 'Paigutuse valikud',
    'LNK_DELETE' => 'Kustuta',
    'LNK_EDIT' => 'Redigeeri',
    'LNK_GET_LATEST' => 'Hangi viimased',
    'LNK_GET_LATEST_TOOLTIP' => 'Asenda viimase versiooniga',
    'LNK_HELP' => 'Abi',
    'LNK_CREATE' => 'Loo',
    'LNK_LIST_END' => 'Lõpp',
    'LNK_LIST_NEXT' => 'Edasi',
    'LNK_LIST_PREVIOUS' => 'Eelmine',
    'LNK_LIST_RETURN' => 'Tagasi loendisse',
    'LNK_LIST_START' => 'Alusta',
    'LNK_LOAD_SIGNED' => 'Allkirjasta',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Asenda allakirjutatud dokumendiga',
    'LNK_PRINT' => 'Prindi',
    'LNK_BACKTOTOP' => 'Tagasi üles',
    'LNK_REMOVE' => 'Eemalda',
    'LNK_RESUME' => 'Resümee',
    'LNK_VIEW_CHANGE_LOG' => 'Vaata muudatuste logi',

    'NTC_CLICK_BACK' => 'Palun kliki lehitseja Tagasi klahvi ja korrasta viga.',
    'NTC_DATE_FORMAT' => '(aaaa-kk-pp)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Kas oled kindel, et soovid kustutada valitud kirje(d)?',
    'NTC_TEMPLATE_IS_USED' => 'Mall on kasutuses vähemalt ühes e-kirja turunduskirjes. Kas oled kindel, et soovid seda kustutada?',
    'NTC_TEMPLATES_IS_USED' => 'Järgmised e-posti mallid on kasutusel e-turunduse jaoks. Kas soovite kindlasti kustutada?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Kas oled kindel, et soovid seda kirjet kustutada?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Kas oled kindel, et soovid kustutada ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Kas oled kindel, et soovid uuendada',
    'NTC_DELETE_SELECTED_RECORDS' => 'valitud kirje(d)?',
    'NTC_LOGIN_MESSAGE' => 'Palun sisesta oma kasutajanimi ja parool.',
    'NTC_NO_ITEMS_DISPLAY' => 'ühtegi',
    'NTC_REMOVE_CONFIRMATION' => 'Kas oled kindel, et soovid selle seose eemaldada?',
    'NTC_REQUIRED' => 'Tähistab nõutud välja',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Teretulemast',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'Oled lahkumas sellest kirjest salvestamata tehtud muudatusi.Kas oled kindel, et soovid navigeerida minema sellest kirjest?',
    'ERROR_NO_RECORD' => 'Viga kirje leidmisel. See kirje võib olla kustutatud või sul pole selle vaatamiseks ligipääsu.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Hoiatus:</b> teie brauseri versiooni enam ei toetata või kasutate toetamata brauserit.<p></p>soovitatakse järgmisi brauseri versiooni:<p></p><ul><li>Internet Explorer 10 (Ühilduvusvaadet ei toetata)<li>Firefox 32,0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Hoiatus:</b> teie brauser on IE Ühilduvuskuva režiimis, mida ei toetata.',
    'ERROR_TYPE_NOT_VALID' => 'Viga: See tüüp pole kehtiv.',
    'ERROR_NO_BEAN' => 'Objekti laadimine ebaõnnestus.',
    'LBL_DUP_MERGE' => 'Leia koopiad',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Halda Tellimisi',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Halda Tellimisi',
    // Ajax status strings
    'LBL_LOADING' => 'Laadimine...',
    'LBL_SEARCHING' => 'Otsin...',
    'LBL_SAVING_LAYOUT' => 'Paigutuse salvestamine...',
    'LBL_SAVED_LAYOUT' => 'Paigutus on salvestatud.',
    'LBL_SAVED' => 'Salvestatud',
    'LBL_SAVING' => 'Salvestamine',
    'LBL_DISPLAY_COLUMNS' => 'Kuva veerud',
    'LBL_HIDE_COLUMNS' => 'Peida veerud',
    'LBL_SEARCH_CRITERIA' => 'Otsingu parameetrid',
    'LBL_SAVED_VIEWS' => 'Salvestatud vaated',
    'LBL_PROCESSING_REQUEST' => 'Töötlemine...',
    'LBL_REQUEST_PROCESSED' => 'Tehtud',
    'LBL_AJAX_FAILURE' => 'Ajaxi rike',
    'LBL_MERGE_DUPLICATES' => 'Mesti',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Minu filtrid',
    'LBL_SEARCH_POPULATE_ONLY' => 'Teosta otsing kasutades ülaltoodud otsinguvormi',
    'LBL_DETAILVIEW' => 'Detailvaade',
    'LBL_LISTVIEW' => 'Loendivaade',
    'LBL_EDITVIEW' => 'Redigeerimisvaade',
    'LBL_BILLING_STREET' => 'Tänav:',
    'LBL_SHIPPING_STREET' => 'Tänav:',
    'LBL_SEARCHFORM' => 'Otsinguvorm',
    'LBL_SAVED_SEARCH_ERROR' => 'Palun paku selle vaate jaoks nimi.',
    'LBL_DISPLAY_LOG' => 'Kuvamise logi',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Süsteem',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sessioon aegunud',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sinu sessioon aegub umbes 2 minuti pärast. Palun salvesta oma töö.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Sinu sessioon on aegunud.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Kohtumised',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Telefonikõned',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Aeg:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Asukoht:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Kirjeldus:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Olek:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Seotud kirjega: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Sündmus',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Sündmus on määramata.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Asukoht on määramata.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Alguse kuupäev on määramata.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Tulemusi pole.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Otsingu tulemusi ei leitud... Muuda parameetreid ja otsi uuesti?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Parameetrile <item1> vasteid ei leitud',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Loo <item1>-st uus <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'või muuda otsingu parameetreid',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Kirjeid ei ole. <item2> või <item3> nüüd.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Lisa Minu lemmikutesse',
    'LBL_CREATE_CONTACT' => 'Loo kontakt',
    'LBL_CREATE_CASE' => 'Loo juhtum',
    'LBL_CREATE_NOTE' => 'Loo märkus',
    'LBL_CREATE_OPPORTUNITY' => 'Uus müügivõimalus',
    'LBL_SCHEDULE_CALL' => 'Kõne logi',
    'LBL_SCHEDULE_MEETING' => 'Planeeri kohtumine',
    'LBL_CREATE_TASK' => 'Loo ülesanne',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Genereeri vorm',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Salvesta veebivorm',
    'LBL_AVAILABLE_FIELDS' => 'Saadaolevad väljad',
    'LBL_FIRST_FORM_COLUMN' => 'Esimene vormi veerg',
    'LBL_SECOND_FORM_COLUMN' => 'Teine vormi veerg',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Puudub väli: Kellele suunatud',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Puudub väli: Seotud kampaania',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Veebivormi loomine ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Selle vormi sisestamine loob ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Lisa Kõik väljad',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Nulli kõik väljad',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Eemalda Kõik väljad',
    'LBL_NEXT_BTN' => 'Edasi',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Ainult pilditüübi manust saab varjata',
    'LBL_TRAINING' => 'Toe foorumid',
    'ERR_MSSQL_DB_CONTEXT' => 'Andmebaasi kontekst muudetud',
    'ERR_MSSQL_WARNING' => 'Hoiatus:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Viga: väli [[field] on kadunud. Ei saa luua kuna vastavat HTML faili ei leidunud.',
    'ERR_CANNOT_FIND_MODULE' => 'Viga: Moodul [module] ei eksisteeri.',
    'LBL_ALT_ADDRESS' => 'Teine aadress:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Tõrge: displayParams massiivi elementide "võti" ja "kopeeri" argumendid ei ole võrdsed.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Üldine',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtrid',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Ainult Minu ühikud',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tiitel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Kuva ridu',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Teie administraatori poolt seadistatud SuiteCRM vidinate maksimaalne arv on saavutatud. Palun eemaldage mõni, et lisada uut.',
    'LBL_ADDING_DASHLET' => 'Lisan SuiteCRM vidina...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM vidin lisatud',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Oled Sa kindel, et soovid selle SuiteCMR vidina kustutada?',
    'LBL_REMOVING_DASHLET' => 'Eemaldan SuiteCRM vidina...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Lehe laadimine, palun oota...',

    'LBL_RELOAD_PAGE' => 'Palun värskenda <a href="javascript: window.location.reload()">brauseri akent</a>, et seda kasutada SuiteCRM vidinat kasutada.',
    'LBL_ADD_DASHLETS' => 'Lisa dashletid',
    'LBL_CLOSE_DASHLETS' => 'Sulge',
    'LBL_OPTIONS' => 'Suvandid',
    'LBL_1_COLUMN' => '1 veerg',
    'LBL_2_COLUMN' => '2 veerg',
    'LBL_3_COLUMN' => '3 veerg',
    'LBL_PAGE_NAME' => 'Lehe nimi',

    'LBL_SEARCH_RESULTS' => 'Otsi tulemusi',
    'LBL_SEARCH_MODULES' => 'Moodulid',
    'LBL_SEARCH_TOOLS' => 'Tööriistad',
    'LBL_SEARCH_HELP_TITLE' => 'Otsi nõuandeid',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Kujutist pole',

    'LBL_MODULE' => 'Moodul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopeeri aadress vasakult:',
    'LBL_SAVE_AND_CONTINUE' => 'Salvesta ja jätka',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Vali mitu juhtelementi</strong></p><ul><li>Kliki väärtustele, et valida atribuut</li><li>Ctrl-klikk&nbsp;et&nbsp;valida mitu. Maci kasutajad kasutavad CMD-klikk.</li><li>Et valida kõiki väärtuseid kahe attibuudi vahel,&nbsp; kliki esimest väärtust&nbsp;ja siis shift-kliki viimast väärtust.</li></ul><p><strong>Täiendatud Otsingu & Paigutuse Valikud</strong><br><br>Kasutades <b>Salvestatud Otsing & Paigutus</b> valik, saad salvestada komplekti otsingu parameetreid ja/või Nimekirjana Vaatamise paigutusi, et otsinguvasteid tulevikus kiiremini leida. Otsinguid ja paigutusi saad salvestada piirmatus koguses. Kõik salvestatud otsingud ilmuvad nime järgi Salvestatud Otsingute nimekirjas, kus viimane laetud salvestatud otsing on nimekirjas esimene.<br><br>Et Nimekirjana Vaatamise paigutust muuta, kasuta Tulpade Peitmise ja Tulpade Näitamise kaste et valida, milliseid välju otsingutulemustes näidata. Näiteks, saad näidata või peita otsingu tulemustes üksikasju, nagu näiteks sissekande nimi, määratud kasutaja ja määratud meeskond. Nimekirjana Vaatamise vaatessse tulba lisamiseks, vali see väli Tulpade Peitmise listist ja kasuta vasakut noolt, et liigutada seda Tulpade Näitamise nimekirja. Et tulpa Nimekirjana Vaatamisest eemaldada, vali see Tulpade Näitamise nimekirjast ja kasuta parempoolset noolt, et liigutada see Peida Tulbad nimekirja.<br><br>Kui salvestad paigutuse seaded, saad neid laadida igal ajal, et vaadata otsingutulemusi selles paigutuses.<br><br>Et salvestada ja/või uuendada otsingut ja/või paigutust:<ol><li>Sisesta otsingutulemuste nimi <b>Salvesta see otsing nimega</b> väljale ja kliki <b>Salvesta</b>.See nimi on nüüd nähtaval Salvestatud Otsingute nimekirjas, <b>Tühjenda</b> nupu lähedal.</li><li>Et salvestatud otsingut näha, vali see Salvestatud Otsingute nimekirjast. Tulemusi näidatakse Nimekirja Vaates.</li><li>Et salvestatud otsingus muudatusi teha, vali see nimekirjast ja lisa või vali Laiendatud Otsingu alt kriteeriumeid või paigutuse valikuid, seejärel vali <b>Uuenda</b>, mille leiad <b>Muuda Praegust Otsingut</b> juurest.</li><li>Et salvestatud otsingut kustutada, vali see Salvestatud Otsingute nimekirjast, vajuta <b>Kustuta</b>, misasub <b>Muuda Praegust Otsingut</b>kõrval, ja vajuta seejärel <b>OK</b>, et kustutamine kinnitada.</li></ol><p><strong>Vihjed</strong><br><br>Kasutades märki % tähistamaks suvalist märki, saad otsingut veelgi laiendada. Näiteks selle asemel, et otsida vaid tulemusi, mis vastavad sõnale "Õun" võid kirjutada hoopis "Õun%" nii leiad täpse sõnavaste asemel kõiki tulemusi, mis algavad sõnaga Õun, kuid lõppevad teisiti, näiteks "Õunamoos."</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Viga: Päringulimiit $limit on saavutatud $module mooduli jaoks.',
    'ERROR_NOTIFY_OVERRIDE' => 'Viga: ResourceObserver->notify() vajab ülelaadimist.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Viga: Ei saa luua monitori, kuna metaandmefail on tüh või faili ei eksisteeri.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Viga: taotletud nimega montori pole konfigureeritud',
    'ERR_UNDEFINED_METRIC' => 'Viga: Ei saa määrata väärtust määramata mõõtmele',
    'ERR_STORE_FILE_MISSING' => 'Viga: Ei leia Salvestuse implementatsiooni faili',

    'LBL_MONITOR_ID' => 'Jälgija Id',
    'LBL_USER_ID' => 'Kasutaja ID',
    'LBL_MODULE_NAME' => 'Mooduli nimi',
    'LBL_ITEM_ID' => 'Ühiku Id',
    'LBL_ITEM_SUMMARY' => 'Ühiku kokkuvõte',
    'LBL_ACTION' => 'Tegevus',
    'LBL_SESSION_ID' => 'Sessiooni Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'Navigeerimistee loodud kasutajale {0}',
    'LBL_VISIBLE' => 'Kirje on nähtav',
    'LBL_DATE_LAST_ACTION' => 'Viimase tegevuse kuupäev',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'ei ole enne',
    'MSG_IS_MORE_THAN' => 'on rohkem kui',
    'MSG_SHOULD_BE' => 'peaks olema',
    'MSG_OR_GREATER' => 'või suurem',

    'LBL_LIST' => 'Loend',
    'LBL_CREATE_BUG' => 'Loo bugi',

    'LBL_OBJECT_IMAGE' => 'objekti kujutis',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Vali kuupäev',

    'LBL_VALIDATE_RANGE' => 'ei ole lubatud piirides',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Palun vali nii alguse kui lõpu kuupäev',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Palun vali nii alguse kui lõpu väärtused',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Kõik',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Viga: Objekti massiivi parameetrite loend ei võrdu tulemuste Massiivi loendiga.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Viga: mooduli seoste definitsoon puudub.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Viga: ei saa laadida andmeid {0} Liidesele. Teenus ei tööta või on konfiguratsioon vale. Liidese veateade: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Optimaalseks kasutamiseks IIS/FastCGI sapi kasutamisel seadistage fastcgi.logging väärtuseks 0 php.ini failis.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nimi',
    'LBL_COLLECTION_PRIMARY' => 'Esmane',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Nõutud väli on täitmata',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja',
    'LBL_DESCRIPTION' => 'Kirjeldus',

    'LBL_YESTERDAY' => 'eile',
    'LBL_TODAY' => 'täna',
    'LBL_TOMORROW' => 'homme',
    'LBL_NEXT_WEEK' => 'järgmisel nädalal',
    'LBL_NEXT_MONDAY' => 'Järgmisel kuu',
    'LBL_NEXT_FRIDAY' => 'järgmisel reedel',
    'LBL_TWO_WEEKS' => 'kaks nädalat',
    'LBL_NEXT_MONTH' => 'järgmisel kuul',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'järgmise kuu esimene päev',
    'LBL_THREE_MONTHS' => 'kolm kuud',
    'LBL_SIXMONTHS' => 'kuus kuud',
    'LBL_NEXT_YEAR' => 'järgmisel aastal',

    //Datetimecombo fields
    'LBL_HOURS' => 'Tunde',
    'LBL_MINUTES' => 'Minutit',
    'LBL_MERIDIEM' => 'Meridiaan',
    'LBL_DATE' => 'Kuupäev',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automaatne värskendamine',

    'LBL_DURATION_DAY' => 'päev',
    'LBL_DURATION_HOUR' => 'tund',
    'LBL_DURATION_MINUTE' => 'minut',
    'LBL_DURATION_DAYS' => 'päevi',
    'LBL_DURATION_HOURS' => 'Kestuse tunnid',
    'LBL_DURATION_MINUTES' => 'Kestuse minutid',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Vali kuu',
    'LBL_ENTER_YEAR' => 'Sisesta aasta',
    'LBL_ENTER_VALID_YEAR' => 'Palun sisesta kehtiv aasta',

    //File write error label
    'ERR_FILE_WRITE' => 'Viga: Ei saa kirjutada faili {0}. Kontrollige süsteemi ja veebiserveri õiguseid.',
    'ERR_FILE_NOT_FOUND' => 'Viga: Ei saa laadida faili {0}. Kontrollige süsteemi ja veebiserveri õiguseid.',

    'LBL_AND' => 'ja',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fail on välisel andmekandjal',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Turvalisus',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"See on fail näidis-impordiks, mis näitab, milline sisu peaks imporditaval failil olema."
"See fail on komaga eraldatud .csv fail, milles andmeväljadd on jutumärkide vahel."

"Pealkirjarida on kõige ülemine rida ja näitab väljade pealkirju, samuti, nagu programmi väljade pealkirju."
"Neid pealkirju kasutatakse failis andmete kaardistamiseks programmi andmeväljadele."

"Märkused: Andmebaasi nimesid saab samuti pealkirjaridades kasutada. See on kasulik, kui kasutad phpMyAdmini või mõnda muud andmebaasi tööriisata, et saada eksporditud nimekirja andmetest, mida on tarvis importida."
"Tulpade järjekord ei ole tähtis, sest see protsess leiab automaatselt pealkirjade järgi õiged tulbad."


"Et kasutada seda faili mallina, tee nii:"
"1. Eemalda näidas-andmete read"
"2. Eemalda seesama abitekst, mida praegu loed"
"3. Sisesta oma andmed õigetesse ridadesse ja tulpadesse"
"4. Salvesta see fail oma süsteemi kindlale kohale"
"5. Vali importimise valik Tegevuste menüüst ja vali fail, mida soovid üles laadida"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Hetkel teavitused puuduvad',
    'LBL_ALT_SORT_DESC' => 'Sorteerimine kahanevalt',
    'LBL_ALT_SORT_ASC' => 'Sorteerimine kasvavalt',
    'LBL_ALT_SORT' => 'Sorteeri',
    'LBL_ALT_SHOW_OPTIONS' => 'Näita valikuid',
    'LBL_ALT_HIDE_OPTIONS' => 'Peida valikud',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Liiguta valitud kirje vasakul olevasse nimekirja',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Liiguta valitud kirje paremal olevasse nimekirja',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Liiguta valitud sisestus praegu näidatud nimekirjas ülespoole',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Liiguta valitud sisestus praegu näidatud nimekirjas allapoole',
    'LBL_ALT_INFO' => 'Informatsioon',
    'MSG_DUPLICATE' => 'Sisestus {0}, mida hakkate looma võib olla sisestuse {0} duplikaat, mis on juba olemas. {1} sisestust, mis on sarnase nimega on loetletud allpool.<br>Vali Loo {1} et jätkata uue {0} loomist, või valige juba olemasolev {0} nimekirjast allpool.',
    'MSG_SHOW_DUPLICATES' => 'Sisestus {0}, mida hakkate looma võib olla sisestuse {0} duplikaat, mis on juba olemas. {1} sisestust, mis on sarnase nimega on loetletud allpool. Valige Salvesta, et jätkata uue {0} loomist, või valige Katkesta et väljuda moodulisse ilma {0} loomata.',
    'LBL_EMAIL_TITLE' => 'E-kirja aadress',
    'LBL_EMAIL_OPT_TITLE' => 'tellimusest loobutud e-maili aadress',
    'LBL_EMAIL_INV_TITLE' => 'vigane e-posti aadress',
    'LBL_EMAIL_PRIM_TITLE' => 'Määra peamiseks e-posti aadressiks',
    'LBL_SELECT_ALL_TITLE' => 'Vali kõik',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Vali see rida',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'Viga: Üleslaadimise ajal tekkis viga. Veakood: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Viga: Üleslaadimise ajal tekkis viga. Veakood: {0} - {1}. Üleslaetava faili maksimaalne suurus on {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'Viga: Üleslaadimise käigus tekkis viga, pöörduge administraatori poole.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Üleslaetava faili suurus ({0} baiti) ületab lubatud maksimaalse suuruse: {1} baiti',
    'UPLOAD_REQUEST_ERROR' => 'Ilmnes tõrge. Palun laadige leht uuesti ja proovige uuesti.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Redigeeri',
    'LBL_EDIT_BUTTON_TITLE' => 'Redigeeri',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Koopia',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Koopia',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Kustuta',
    'LBL_DELETE_BUTTON_TITLE' => 'Kustuta',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Tegevus',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Salvesta',
    'LBL_SAVE_BUTTON_TITLE' => 'Salvesta',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Tühista',
    'LBL_CANCEL_BUTTON_TITLE' => 'Tühista',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Vigane vastus serverilt',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Pakkumine',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Müügihind',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuaalselt',
        '5' => 'Iga 5 minuti järel',
        '15' => 'Iga 15 minuti järel',
        '30' => 'Iga 30 minuti järel',
        '60' => 'Iga tund',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Meelespea on tühi või ebakorrektne.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Pole ühtki kutsutut, keda teavitada.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Kustuta meeldetuletus',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Vali veerud',
    'LBL_COLUMN_CHOOSER' => 'Veeru valija',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Salvesta muudatused',
    'LBL_DISPLAYED' => 'Nähtav',
    'LBL_HIDDEN' => 'Peidetud',
    'ERR_EMPTY_COLUMNS_LIST' => 'Nõutud on vähemalt üks element',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Kategooria',
    'LBL_LIST_CATEGORY' => 'Kategooria',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'Stiil',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Koit',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Päev',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Videvik',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Öö',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Lõuna',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Loobu visandist',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'See tegevus kustutab e-kirja, kas soovid jätkata?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Välju koostamise kuvast',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Koostamise kuvast väljudes kaotad sisestatud andmed, kas soovite jätkata?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Rakenda e-posti mall',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'See toiming tühistab e-posti sisu ja teema, kas soovite jätkata?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Kinnitatud tellimus',
    'LBL_OPT_IN_TITLE' => 'Liitu kampaaniaga',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Kinnitatud tellimuse kuupäev',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Kinnitatud tellimuse saatmise kuupäev',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Kinnitatud tellimuse ebaõnnestumise kuupäev',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Opt In Email Template is not configured. Please set up in email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Peamine grupp",

    // footer
    'LBL_SUITE_TOP' => 'Tagasi üles',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Kasutatud tarkvara SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Lähtesta parool',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Kinnita nõusoleku e-posti saatmine ainult Äriklientidele/Eraisikutele/Vihjetele/Prospektidele',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Teek';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-post:';
$app_list_strings['project_priority_default'] = 'Keskmine';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Kõrge',
    'Medium' => 'Keskmine',
    'Low' => 'Madal',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Nõusolek',
    'contract' => 'Leping',
    'legal_obligation' => 'Seaduslik kohustus',
    'protection_of_interest' => 'Huvide kaitse',
    'public_interest' => 'Avalik huvi',
    'legitimate_interest' => 'Legitiimne huvi',
    'withdrawn' => 'Tagasi võetud',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Veebisait',
    'phone' => 'Telefon',
    'given_to_user' => 'Antud kasutajale',
    'email' => 'E-kirjad',
    'third_party' => 'Kolmandale isikule',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Teadmusbaas';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'Aden',
    'AFGHANISTAN' => 'AFGANISTAN',
    'ALBANIA' => 'ALBAANIA',
    'ALGERIA' => 'ALZEERIA',
    'AMERICAN SAMOA' => 'AMEERIKA SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTIKA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTIINA',
    'ARMENIA' => 'ARMEENIA',
    'ARUBA' => 'ARUUBA',
    'AUSTRALIA' => 'AUSTRAALIA',
    'AUSTRIA' => 'AUSTIA',
    'AZERBAIJAN' => 'ASERBAIDŽAAN',
    'BAHAMAS' => 'BAHAMA',
    'BAHRAIN' => 'BAHREIN',
    'BANGLADESH' => 'Bangladesh',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'VALGVENE',
    'BELGIUM' => 'BELGIA',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'Bouvet saar',
    'BRAZIL' => 'BRASIILIA',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITI ANTARKTIKA ALA',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITI INDIA OOKEANI ALA',
    'BRITISH VIRGIN ISLANDS' => 'BRITI NEITSISAARED',
    'BRITISH WEST INDIES' => 'BRITI LÄÄNE-INDIA',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGAARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODŽA',
    'CAMEROON' => 'KAMERUN',
    'CANADA' => 'KANADA',
    'CANAL ZONE' => 'KANALI ALA',
    'CANARY ISLAND' => 'KANAARI SAARED',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI SAARED',
    'CAYMAN ISLANDS' => 'KAIMANI SAARED',
    'CHAD' => 'TŠAAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'TŠIILI',
    'CHINA' => 'HIINA',
    'CHRISTMAS ISLAND' => 'JÕULUSAAR',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELINGI) SAAR',
    'COLOMBIA' => 'KOLUMBIA',
    'COMORO ISLANDS' => 'KOMOORI SAARED',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'KONGO-KINSHASA',
    'COOK ISLANDS' => 'COOKI SAARED',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'HORVAATIA',
    'CUBA' => 'KUUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'KÜPROS',
    'CZECH REPUBLIC' => 'TŠEHHI VABARIIK',
    'DAHOMEY' => 'DAHOMEE',
    'DENMARK' => 'TAANI',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIKAANI',
    'DOMINICAN REPUBLIC' => 'DOMINIKAANI VABARIIK',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGIPTUS',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EKVATORIAAL-GUINEA',
    'ESTONIA' => 'EESTI',
    'ETHIOPIA' => 'ETIOOPIA',
    'FAEROE ISLANDS' => 'FÄÄRI SAARED',
    'FALKLAND ISLANDS' => 'FALKLANDI SAARED',
    'FIJI' => 'FIDŽI',
    'FINLAND' => 'SOOME',
    'FRANCE' => 'PRANTSUSMAA',
    'FRENCH GUIANA' => 'PRANTSUSE GUAJAANA',
    'FRENCH POLYNESIA' => 'PRANTSUSE POLÜNEESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GRUUSIA',
    'GERMANY' => 'SAKSAMAA',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTARI',
    'GREECE' => 'KREEKA',
    'GREENLAND' => 'GRÖÖNIMAA',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARY',
    'ICELAND' => 'ISLAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONEESIA',
    'IRAN' => 'IRAAN',
    'IRAQ' => 'IRAAK',
    'IRELAND' => 'IIRIMAA',
    'ISRAEL' => 'IISRAEL',
    'ITALY' => 'ITAALIA',
    'IVORY COAST' => 'ELEVANDILUURANNIK',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAAPAN',
    'JORDAN' => 'JORAANIA',
    'KAZAKHSTAN' => 'KASAHSTAN',
    'KENYA' => 'KEENIA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'LÕUNA-KOREA',
    'KUWAIT' => 'KUVEIT',
    'KYRGYZSTAN' => 'KÕRGÕSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LÄTI',
    'LEBANON' => 'LIIBANON',
    'LEEWARD ISLANDS' => 'TUULEALUSED SAARED',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIIBÜA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LEEDU',
    'LUXEMBOURG' => 'LUKSEMBURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MAKEDOONIA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAISIA',
    'MALDIVES' => 'MALDIIVID',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITAANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANEESIA',
    'MEXICO' => 'MEHHIKO',
    'MOLDOVIA' => 'MOLDAAVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOOLIA',
    'MOROCCO' => 'MAROKO',
    'MOZAMBIQUE' => 'MOSAMBIIK',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'HOLLAND',
    'NETHERLANDS ANTILLES' => 'HOLLANDI ANTILLID',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'MADALMAADE ANTILLID NEUTRAALNE TSOON',
    'NEW CALADONIA' => 'UUS CALADONIA',
    'NEW HEBRIDES' => 'VANUATU SAARED',
    'NEW ZEALAND' => 'UUS-MEREMAA',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGEERIA',
    'NORFOLK ISLAND' => 'NORFOLKI SAAR',
    'NORWAY' => 'NORRA',
    'OMAN' => 'OMAAN',
    'OTHER' => 'MUUD',
    'PACIFIC ISLAND' => 'VAIKSE OOKEANI SAAR',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAAPUA UUS-GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERUU',
    'PHILIPPINES' => 'FILIPIINID',
    'POLAND' => 'POOLA',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'IDA-TIMORI',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'KATAR',
    'REPUBLIC OF BELARUS' => 'VALGEVENE VABARIIK',
    'REPUBLIC OF SOUTH AFRICA' => 'LÕUNA-AAFRIKA VABARIIK',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'RUMEENIA',
    'RUSSIA' => 'VENEMAA',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARAABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEIŠELLID',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPUR',
    'SLOVAKIA' => 'SLOVAKKIA',
    'SLOVENIA' => 'SLOVEENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'LÕUNA-AAFRIKA',
    'SOUTH YEMEN' => 'LÕUNA-JEEMEN',
    'SPAIN' => 'HISPAANIA',
    'SPANISH SAHARA' => 'HISPAANIA SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS JA NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'LÕUNA AAFRIKA',
    'SWAZILAND' => 'SVAASIMAA',
    'SWEDEN' => 'ROOTSI',
    'SWITZERLAND' => 'ŠVEITS',
    'SYRIA' => 'SÜÜRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TADŽIKISTAN',
    'TANZANIA' => 'TANSAANIA',
    'THAILAND' => 'TAI',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNEESIA',
    'TURKEY' => 'TÜRGI',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'ARAABIA ÜHENDEMIRAADID',
    'UNITED KINGDOM' => 'ÜHENDKUNINGRIIK',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'USA VAIKSE OOKEANI SAAR',
    'US VIRGIN ISLANDS' => 'USA NEITSISAARED',
    'USA' => 'AMEERIKA ÜHENDRIIGID',
    'UZBEKISTAN' => 'USBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATIKANI LINNRIIK',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE SAAR',
    'WEST INDIES' => 'LÄÄNE-INDIA',
    'WESTERN SAHARA' => 'LÄÄNE-SAHARA',
    'YEMEN' => 'JEEMEN',
    'ZAIRE' => 'KONGO DV',
    'ZAMBIA' => 'SAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'SUUR-5 (Taiwani ja Hongkongiga)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS kirillitsa)',
    'CP1252' => 'CP1252 (MS Lääne Euroopa & U. S.)',
    'EUC-CN' => 'EUC-CN (lihtsustatud Hiina GB2312)',
    'EUC-JP' => 'EUC-JP (Jaapani Unix)',
    'EUC-KR' => 'EUC-KR (Korea)',
    'EUC-TW' => 'EUC-TW (Taivani)',
    'ISO-2022-JP' => 'ISO-2022-JP (Jaapani)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korea)',
    'ISO-8859-1' => 'ISO-8859-1 (Lääne-Euroopa ja USA)',
    'ISO-8859-2' => 'ISO-8859-2 (Kesk- ja Ida-Euroopa)',
    'ISO-8859-3' => 'ISO-8859-3 (Ladina 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Ladina 4)',
    'ISO-8859-5' => 'ISO-8859-5 (kirillitsa)',
    'ISO-8859-6' => 'ISO-8859-6 (araabia)',
    'ISO-8859-7' => 'ISO-8859-7 (kreeka)',
    'ISO-8859-8' => 'ISO-8859-8 (heebrea)',
    'ISO-8859-9' => 'ISO-8859-9 (ladina 5)',
    'ISO-8859-10' => 'ISO-8859-10 (ladina 6)',
    'ISO-8859-13' => 'ISO-8859-13 (ladina 7)',
    'ISO-8859-14' => 'ISO-8859-14 (ladina 8)',
    'ISO-8859-15' => 'ISO-8859-15 (ladina 9)',
    'KOI8-R' => 'KOI8-R (vene kirillitsa)',
    'KOI8-U' => 'KOI8-U (Ukraina kirillitsa)',
    'SJIS' => 'SJIS (MS Jaapani)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Aafrika/Alžeeria',
    'Africa/Luanda' => 'Aafrika/Luanda',
    'Africa/Porto-Novo' => 'Aafrika/Porto-Novo',
    'Africa/Gaborone' => 'Aafrika/Gaborone',
    'Africa/Ouagadougou' => 'Aafrika/Ouagadougou',
    'Africa/Bujumbura' => 'Aafrika/Bujumbura',
    'Africa/Douala' => 'Aafrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlandi/Cabo Verde',
    'Africa/Bangui' => 'Aafrika/Banguis',
    'Africa/Ndjamena' => 'Aafrika/Ndjamena',
    'Indian/Comoro' => 'India/Komoori',
    'Africa/Kinshasa' => 'Aafrika/Kinshasa',
    'Africa/Lubumbashi' => 'Aafrika/Lubumbashi',
    'Africa/Brazzaville' => 'Aafrika/Brazzaville',
    'Africa/Abidjan' => 'Aafrika/Abidjani',
    'Africa/Djibouti' => 'Aafrika/Djibouti',
    'Africa/Cairo' => 'Aafrika/Cairo',
    'Africa/Malabo' => 'Aafrika/Malabo',
    'Africa/Asmera' => 'Aafrika/Asmera',
    'Africa/Addis_Ababa' => 'Aafrika/Addis Abebas',
    'Africa/Libreville' => 'Aafrika/Libreville\'i',
    'Africa/Banjul' => 'Aafrika/Banjul',
    'Africa/Accra' => 'Aafrika/Accra',
    'Africa/Conakry' => 'Aafrika/Conakry',
    'Africa/Bissau' => 'Aafrika/Bissau',
    'Africa/Nairobi' => 'Aafrika/Nairobi',
    'Africa/Maseru' => 'Aafrika/Maseru',
    'Africa/Monrovia' => 'Aafrika/Monrovia',
    'Africa/Tripoli' => 'Aafrika/Tripoli',
    'Indian/Antananarivo' => 'India/Antananarivo',
    'Africa/Blantyre' => 'Aafrika/Blantyre',
    'Africa/Bamako' => 'Aafrika/Bamako',
    'Africa/Nouakchott' => 'Aafrika/Nouakchott',
    'Indian/Mauritius' => 'India/Mauriitius',
    'Indian/Mayotte' => 'India/Mayotte',
    'Africa/Casablanca' => 'Aafrika/Casablanca',
    'Africa/El_Aaiun' => 'Aafrika/El Aaiun',
    'Africa/Maputo' => 'Aafrika/Maputo',
    'Africa/Windhoek' => 'Aafrika/Windhoek',
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
    'Asia/Thimphu' => 'Aasia/Thimphu',
    'Indian/Chagos' => 'India/Chagos',
    'Asia/Brunei' => 'Aasia/Brunei',
    'Asia/Rangoon' => 'Aasia/Rangoon',
    'Asia/Phnom_Penh' => 'Aasia/Phnom Penh',
    'Asia/Beijing' => 'Aasia/Peking',
    'Asia/Harbin' => 'Aasia/Harbin',
    'Asia/Shanghai' => 'Aasia/Šanghai',
    'Asia/Chongqing' => 'Aasia/Chongqing',
    'Asia/Urumqi' => 'Aasia/Urumqi',
    'Asia/Kashgar' => 'Aasia/Kaxgari',
    'Asia/Hong_Kong' => 'Aasia/Hong Kong',
    'Asia/Taipei' => 'Aasia/Taipei',
    'Asia/Macau' => 'Aasia/Macau',
    'Asia/Nicosia' => 'Aasia/Nicosia',
    'Asia/Tbilisi' => 'Aasia/Tbilisi',
    'Asia/Dili' => 'Aasia/Dili',
    'Asia/Calcutta' => 'Aasia/Calcutta',
    'Asia/Jakarta' => 'Aasia/Jakarta',
    'Asia/Pontianak' => 'Aasia/Pontianak',
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
    'Europe/Brussels' => 'Euroopa/Brüssel',
    'Europe/Sofia' => 'Euroopa/Sofia',
    'Europe/Prague' => 'Euroopa/Praha',
    'Europe/Copenhagen' => 'Euroopa/Kopenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Euroopa/Tallinn',
    'Europe/Helsinki' => 'Euroopa/Helsinki',
    'Europe/Paris' => 'Euroopa/Pariis',
    'Europe/Berlin' => 'Euroopa/Berliin',
    'Europe/Gibraltar' => 'Euroopa/Gibraltar',
    'Europe/Athens' => 'Euroopa/Ateena',
    'Europe/Budapest' => 'Euroopa/Budapest',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'Euroopa/Rooma',
    'Europe/Riga' => 'Euroopa/Riia',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Euroopa/Vilnius',
    'Europe/Luxembourg' => 'Euroopa/Luksemburg',
    'Europe/Malta' => 'Euroopa/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Euroopa/Amsterdam',
    'Europe/Oslo' => 'Euroopa/Oslo',
    'Europe/Warsaw' => 'Euroopa/Varssavi',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Kaliningrad' => 'Euroopa/Kaliningrad',
    'Europe/Moscow' => 'Euroopa/Moskva',
    'Europe/Samara' => 'Euroopa/Samara',
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
    'America/Detroit' => 'Ameerika/Detroit',
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
    'GoToMeeting' => 'Mine kohtumise juurde',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google kontaktid',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Päring',
    2 => 'Ligipääs',
    3 => 'Kehtetu',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampaaniad',
    'email' => 'E-kirjad',
    'event' => 'Sündmus',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampaaniad',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampaaniad',
    'email' => 'E-kirjad',
    'event' => 'Sündmus',
    'system' => 'Süsteem',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Teadmusbaas';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Teadmusbaas - Kategooriad';
$app_list_strings['aok_status_list']['Draft'] = 'Mustand';
$app_list_strings['aok_status_list']['Expired'] = 'Aegunud';
$app_list_strings['aok_status_list']['In_Review'] = 'Ülevaatamisel';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privaatne';
$app_list_strings['aok_status_list']['published_public'] = 'Avalik';

$app_list_strings['moduleList']['FP_events'] = 'Üritused';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Asukohad';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Kutsutud';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Ei kutsutud';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Osales';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Ei osalenud';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Aktsepteeritud';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Lükkas kutse tagasi';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Ei vastanud';

$app_strings['LBL_STATUS_EVENT'] = 'Kutse olek';
$app_strings['LBL_ACCEPT_STATUS'] = 'Aktsepteeri olek';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Vali see leht';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Vali kõik';
$app_strings['LBL_LISTVIEW_NONE'] = 'Ära vali kõike';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Juhtumi sündmused';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Juhtumi uuendamised';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Palun kirjuta vastus sellest reast ülespoole ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Avatud';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Avatud',
        'Closed' => 'Suletud',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Uus',
        'Open_Assigned' => 'Määratud',
        'Closed_Closed' => 'Suletud',
        'Open_Pending Input' => 'Ootab sisendit',
        'Closed_Rejected' => 'Tagasilükatud',
        'Closed_Duplicate' => 'Koopia',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Üks kasutaja',
        'Account' => 'Konto kasutaja',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'System Default',
    'singleUser' => 'Üks kasutaja',
    'roundRobin' => 'Ringiratast',
    'leastBusy' => 'Vähim hõivatud',
    'random' => 'Juhuslik',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Aruanded';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Raporti tingimused';
$app_list_strings['moduleList']['AOR_Charts'] = 'Aruannete diagrammid';
$app_list_strings['moduleList']['AOR_Fields'] = 'Raporti väljad';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Planeeritud Aruanded';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Võrdub';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Ei võrdu';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Suurem kui';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Vähem kui';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Suurem või võrdne';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Väiksem või Võrdne';
$app_list_strings['aor_operator_list']['Contains'] = 'Sisaldab';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Algab';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Lõpeb märkidega';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'd.m.Y';
$app_list_strings['aor_format_options']['m-d-Y'] = 'k-p-A';
$app_list_strings['aor_format_options']['d-m-Y'] = 'p-k-A';
$app_list_strings['aor_format_options']['Y/m/d'] = 'A/k/p';
$app_list_strings['aor_format_options']['m/d/Y'] = 'k/p/A';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'A.k.p';
$app_list_strings['aor_format_options']['m.d.Y'] = 'k.p.A';
$app_list_strings['aor_format_options']['d.m.Y'] = 'p.k.A';
$app_list_strings['aor_format_options']['Ymd'] = 'dmY';
$app_list_strings['aor_format_options']['Y-m'] = 'm.Y';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'ja';
$app_list_strings['aor_condition_operator_list']['OR'] = 'VÕI';
$app_list_strings['aor_condition_type_list']['Value'] = 'Väärtus';
$app_list_strings['aor_condition_type_list']['Field'] = 'Väli';
$app_list_strings['aor_condition_type_list']['Date'] = 'Kuupäev';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Üks mitmest';
$app_list_strings['aor_condition_type_list']['Period'] = 'Periood';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Praegune kasutaja';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutit';
$app_list_strings['aor_date_type_list']['hour'] = 'Tunde';
$app_list_strings['aor_date_type_list']['day'] = 'Päevi';
$app_list_strings['aor_date_type_list']['week'] = 'Nädalaid';
$app_list_strings['aor_date_type_list']['month'] = 'Kuid';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Töötunnid';
$app_list_strings['aor_date_options']['now'] = 'Nüüd';
$app_list_strings['aor_date_options']['field'] = 'See väli';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Kasvavalt';
$app_list_strings['aor_sort_operator']['DESC'] = 'Kahanevalt';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Loenda';
$app_list_strings['aor_function_list']['MIN'] = 'Minimaalne';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimaalne';
$app_list_strings['aor_function_list']['SUM'] = 'Summa';
$app_list_strings['aor_function_list']['AVG'] = 'Keskmine';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Loenda';
$app_list_strings['aor_total_options']['SUM'] = 'Summa';
$app_list_strings['aor_total_options']['AVG'] = 'Keskmine';
$app_list_strings['aor_chart_types']['bar'] = 'Lintdiagramm';
$app_list_strings['aor_chart_types']['line'] = 'Joondiagramm';
$app_list_strings['aor_chart_types']['pie'] = 'Sektordiagramm';
$app_list_strings['aor_chart_types']['radar'] = 'Radardiagramm';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Virnastatud diagramm';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grupeeritud virnadiagramm';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Igakuine';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Iganädalane';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Iga päev';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktiivne';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Mitteaktiivne';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-kirjad';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Kasutaja';
$app_list_strings['aor_email_type_list']['Users'] = 'Kasutajad';
$app_list_strings['aor_assign_options']['all'] = 'KÕIK kasutajad';
$app_list_strings['aor_assign_options']['role'] = 'KÕIK kasutajad rollis';
$app_list_strings['aor_assign_options']['security_group'] = 'Kõik kasutajad turvagrupis';
$app_list_strings['date_time_period_list']['today'] = 'Täna';
$app_list_strings['date_time_period_list']['yesterday'] = 'Eile';
$app_list_strings['date_time_period_list']['this_week'] = 'Sel nädalal';
$app_list_strings['date_time_period_list']['last_week'] = 'Viimane nädal';
$app_list_strings['date_time_period_list']['last_month'] = 'Viimane kuu';
$app_list_strings['date_time_period_list']['this_month'] = 'Sel kuul';
$app_list_strings['date_time_period_list']['this_quarter'] = 'See kvartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Viimane kvartal';
$app_list_strings['date_time_period_list']['this_year'] = 'Sel aastal';
$app_list_strings['date_time_period_list']['last_year'] = 'Eelmisel aastal';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'kuu päeval';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'nädala päeval';
$app_strings['LBL_CRON_AT'] = 'kellaajal';
$app_strings['LBL_CRON_RAW'] = 'Laiendatud';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Tund';
$app_strings['LBL_CRON_DAY'] = 'Päev';
$app_strings['LBL_CRON_MONTH'] = 'Kuu';
$app_strings['LBL_CRON_DOW'] = 'Nädalapäev';
$app_strings['LBL_CRON_DAILY'] = 'Iga päev';
$app_strings['LBL_CRON_WEEKLY'] = 'Iganädalane';
$app_strings['LBL_CRON_MONTHLY'] = 'Igakuine';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Lepingud';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Arved';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Mallid';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Tooted - Kategooriad';
$app_list_strings['moduleList']['AOS_Products'] = 'Artiklid';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Read';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Ridade grupid';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Pakkumised';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analüütik';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integraator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Ajakirjandus';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Potentsiaane klient';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Edasimüüja';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Muu';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Mustand';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Läbirääkimine';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Kohaletoimetatud';
$app_list_strings['quote_stage_dom']['On Hold'] = 'Ootel';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Kinnitatud';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Suletud kinnitatud';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Suletud kaotused';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Suletud Hääbunud';
$app_list_strings['quote_term_dom']['Net 15'] = 'Neto 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Neto 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Kinnitatud';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Kinnitamata';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Summa';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analüütik';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Klient';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integraator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Ajakirjandus';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Potentsiaane klient';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Edasimüüja';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Muu';
$app_list_strings['invoice_status_dom']['Paid'] = 'Makstud';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Maksmata';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Tühistatud';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Arvet pole saadetud';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Arve saadetud';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Sülearvutid';
$app_list_strings['product_category_dom']['Desktops'] = 'Arvutid';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Hea';
$app_list_strings['product_type_dom']['Service'] = 'Teenus';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Pakkumised';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Arved';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Lepingud';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Pakkumised';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Arved';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Lepingud';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Ettevõtted';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontaktid';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Müügivihjed';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Pole alustatud';
$app_list_strings['contract_status_list']['In Progress'] = 'Töös';
$app_list_strings['contract_status_list']['Signed'] = 'Allkirjastatud';
$app_list_strings['contract_type_list']['Type'] = 'Tüüp:';
$app_strings['LBL_PRINT_AS_PDF'] = 'Prindi PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Palun vali kujundus';
$app_strings['LBL_NO_TEMPLATE'] = 'Viga\nMalle ei leitud.\nMine palun PDF mallide moodulisse ja loo uus';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Töövoog';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Töövoo tinigmused';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'Töövoo toimingud';
$app_list_strings['aow_status_list']['Active'] = 'Aktiivne';
$app_list_strings['aow_status_list']['Inactive'] = 'Mitteaktiivne';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Võrdub';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Ei võrdu';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Suurem kui';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Vähem kui';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Suurem või võrdne';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Väiksem või Võrdne';
$app_list_strings['aow_operator_list']['Contains'] = 'Sisaldab';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Algab';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Lõpeb märkidega';
$app_list_strings['aow_operator_list']['is_null'] = 'On tühi';
$app_list_strings['aow_process_status_list']['Complete'] = 'Lõpetatud';
$app_list_strings['aow_process_status_list']['Running'] = 'Tegutsen';
$app_list_strings['aow_process_status_list']['Pending'] = 'Ootel';
$app_list_strings['aow_process_status_list']['Failed'] = 'Ebaõnnestus';
$app_list_strings['aow_condition_operator_list']['And'] = 'ja';
$app_list_strings['aow_condition_operator_list']['OR'] = 'VÕI';
$app_list_strings['aow_condition_type_list']['Value'] = 'Väärtus';
$app_list_strings['aow_condition_type_list']['Field'] = 'Väli';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Kõik muudatused';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Kuupäev';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Üks mitmest';
$app_list_strings['aow_action_type_list']['Value'] = 'Väärtus';
$app_list_strings['aow_action_type_list']['Field'] = 'Väli';
$app_list_strings['aow_action_type_list']['Date'] = 'Kuupäev';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Vähim hõivatud';
$app_list_strings['aow_action_type_list']['Random'] = 'Juhuslik';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Väärtus';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Väli';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutit';
$app_list_strings['aow_date_type_list']['hour'] = 'Tunde';
$app_list_strings['aow_date_type_list']['day'] = 'Päevi';
$app_list_strings['aow_date_type_list']['week'] = 'Nädalaid';
$app_list_strings['aow_date_type_list']['month'] = 'Kuid';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Töötunnid';
$app_list_strings['aow_date_options']['now'] = 'Nüüd';
$app_list_strings['aow_date_options']['today'] = 'Täna';
$app_list_strings['aow_date_options']['field'] = 'See väli';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'KÕIK kasutajad';
$app_list_strings['aow_assign_options']['role'] = 'KÕIK kasutajad rollis';
$app_list_strings['aow_assign_options']['security_group'] = 'Kõik kasutajad turvagrupis';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-kirjad';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Salvesta email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Seotud väli';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Kasutaja';
$app_list_strings['aow_email_type_list']['Users'] = 'Kasutajad';
$app_list_strings['aow_email_to_list']['to'] = 'Kellele';
$app_list_strings['aow_email_to_list']['cc'] = 'Koopia';
$app_list_strings['aow_email_to_list']['bcc'] = 'Pimekoopia';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Kõik kirjed';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Uued kirjed';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Muudetud kirjed';
$app_list_strings['aow_run_when_list']['Always'] = 'Alati';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Ainult salvestamisel';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Ainult planeerijas';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projektid - Mallid';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Projekti ülesande mallid';
$app_list_strings['relationship_type_list']['FS'] = 'Lõpust alguseni';
$app_list_strings['relationship_type_list']['SS'] = 'Algusest lõpuni';
$app_list_strings['duration_unit_dom']['Days'] = 'Päevi';
$app_list_strings['duration_unit_dom']['Hours'] = 'Tunde';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Gantti vaade';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Kuva täpsemalt';
$app_strings['LBL_CREATE_PROJECT'] = 'Loo projekt';

//gmaps
$app_strings['LBL_MAP'] = 'Kaart';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Pikkuskraad';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Laiuskraad';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geokoodi olek';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Aadress';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kaardid';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Kaardid - Markerid';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Kaardid - Piirkonnad';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miilid';
$app_list_strings['map_unit_type_list']['km'] = 'Kilomeetrid';

$app_list_strings['map_module_type_list']['Accounts'] = 'Ettevõtted';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontaktid';
$app_list_strings['map_module_type_list']['Cases'] = 'Juhtumid';
$app_list_strings['map_module_type_list']['Leads'] = 'Müügivihjed';
$app_list_strings['map_module_type_list']['Meetings'] = 'Kohtumised';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Müügivõimalused';
$app_list_strings['map_module_type_list']['Project'] = 'Projektid';
$app_list_strings['map_module_type_list']['Prospects'] = 'Eesmärgid';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Ettevõtted';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Eraisikud';
$app_list_strings['map_relate_type_list']['Cases'] = 'Juhtumid';
$app_list_strings['map_relate_type_list']['Leads'] = 'Müügivihjed';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Kohtumised';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Müügivõimalused';
$app_list_strings['map_relate_type_list']['Project'] = 'Projektid';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Eesmärgid';

$app_list_strings['marker_image_list']['accident'] = 'Õnnetus';
$app_list_strings['marker_image_list']['administration'] = 'Administreerimine';
$app_list_strings['marker_image_list']['agriculture'] = 'Põllumajandus';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Väike lennuk';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Lennuturism';
$app_list_strings['marker_image_list']['airport'] = 'Lennujaam';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteater';
$app_list_strings['marker_image_list']['apartment'] = 'Korter';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvaarium';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Heli';
$app_list_strings['marker_image_list']['bank'] = 'Pank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Pank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Pank Nael';
$app_list_strings['marker_image_list']['bar'] = 'Riba';
$app_list_strings['marker_image_list']['beach'] = 'Rand';
$app_list_strings['marker_image_list']['beautiful'] = 'Kaunis';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Jalgratta parkimine';
$app_list_strings['marker_image_list']['big_city'] = 'Ruur linn';
$app_list_strings['marker_image_list']['bridge'] = 'Sild';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Kaasaegne sild';
$app_list_strings['marker_image_list']['bus'] = 'Buss';
$app_list_strings['marker_image_list']['cable_car'] = 'Rippraudtee';
$app_list_strings['marker_image_list']['car'] = 'Auto';
$app_list_strings['marker_image_list']['car_rental'] = 'Auto rentimine';
$app_list_strings['marker_image_list']['carrepair'] = 'Autoremont';
$app_list_strings['marker_image_list']['castle'] = 'Loss';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedraal';
$app_list_strings['marker_image_list']['chapel'] = 'Kabel';
$app_list_strings['marker_image_list']['church'] = 'Kirik';
$app_list_strings['marker_image_list']['city_square'] = 'Linnaplats';
$app_list_strings['marker_image_list']['cluster'] = 'Rühm';
$app_list_strings['marker_image_list']['cluster_2'] = 'Rühm 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kohvik';
$app_list_strings['marker_image_list']['community_centre'] = 'Community Centre';
$app_list_strings['marker_image_list']['company'] = 'Ettevõte';
$app_list_strings['marker_image_list']['conference'] = 'Konverents';
$app_list_strings['marker_image_list']['construction'] = 'Konstruktsioonid';
$app_list_strings['marker_image_list']['convenience'] = 'Convenience';
$app_list_strings['marker_image_list']['court'] = 'Court';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Currency Exchange';
$app_list_strings['marker_image_list']['customs'] = 'Customs';
$app_list_strings['marker_image_list']['cycling'] = 'Rattasõit';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Hambaarst';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Osakonna pood';
$app_list_strings['marker_image_list']['disability'] = 'Disability';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Erivajadustega parkimine';
$app_list_strings['marker_image_list']['doctor'] = 'Doktor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'All';
$app_list_strings['marker_image_list']['down_left'] = 'All vasakul';
$app_list_strings['marker_image_list']['down_right'] = 'All paremal';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Drugs';
$app_list_strings['marker_image_list']['elevator'] = 'Lift';
$app_list_strings['marker_image_list']['embassy'] = 'Saatkond';
$app_list_strings['marker_image_list']['expert'] = 'Ekpert';
$app_list_strings['marker_image_list']['factory'] = 'Tehas';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Kukkuvad kivid';
$app_list_strings['marker_image_list']['fast_food'] = 'Kiirtoit';
$app_list_strings['marker_image_list']['festival'] = 'Pidu';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Mets';
$app_list_strings['marker_image_list']['fountain'] = 'Purskkaev';
$app_list_strings['marker_image_list']['friday'] = 'Reede';
$app_list_strings['marker_image_list']['garden'] = 'Aed';
$app_list_strings['marker_image_list']['gas_station'] = 'Bensiinijaam';
$app_list_strings['marker_image_list']['geyser'] = 'Geiser';
$app_list_strings['marker_image_list']['gifts'] = 'Kingitused';
$app_list_strings['marker_image_list']['gourmet'] = 'Gurmee';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Juuksurisalong';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Kiirtee';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Ajalooline kvartal';
$app_list_strings['marker_image_list']['home'] = 'Avaleht';
$app_list_strings['marker_image_list']['hospital'] = 'Haigla';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotell';
$app_list_strings['marker_image_list']['hotel_1_star'] = '1 tärni hotell';
$app_list_strings['marker_image_list']['hotel_2_stars'] = '2 tärni hotell';
$app_list_strings['marker_image_list']['hotel_3_stars'] = '3 tärni hotell';
$app_list_strings['marker_image_list']['hotel_4_stars'] = '4 tärni hotell';
$app_list_strings['marker_image_list']['hotel_5_stars'] = '5 tärni hotell';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Õiglus';
$app_list_strings['marker_image_list']['lake'] = 'Järv';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Vasakul';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Teek';
$app_list_strings['marker_image_list']['lighthouse'] = 'Majakas';
$app_list_strings['marker_image_list']['liquor'] = 'Liköör';
$app_list_strings['marker_image_list']['lock'] = 'Lukk';
$app_list_strings['marker_image_list']['main_road'] = 'Peatee';
$app_list_strings['marker_image_list']['massage'] = 'Massaaž';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobiilimast';
$app_list_strings['marker_image_list']['modern_tower'] = 'Kaasaegne torn';
$app_list_strings['marker_image_list']['monastery'] = 'Klooster';
$app_list_strings['marker_image_list']['monday'] = 'Esmaspäev';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mošee';
$app_list_strings['marker_image_list']['motorcycle'] = 'Mootorratas';
$app_list_strings['marker_image_list']['museum'] = 'Muuseum';
$app_list_strings['marker_image_list']['music_live'] = 'Music Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palee';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoraam';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park And Ride';
$app_list_strings['marker_image_list']['parking'] = 'Parkimine';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Piknik';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Külastamata kohad';
$app_list_strings['marker_image_list']['places_visited'] = 'Külastatud kohad';
$app_list_strings['marker_image_list']['playground'] = 'Mänguväljak';
$app_list_strings['marker_image_list']['police'] = 'Politsei';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Postkontor';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Power Plant';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Avalik kunst';
$app_list_strings['marker_image_list']['rain'] = 'Vihm';
$app_list_strings['marker_image_list']['real_estate'] = 'Kinnisvara';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Kuurort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restoran';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Aafrika restoran';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Grilli restoran';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Rootsi laud';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Hiina restoran';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Mereandide restoran';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gurmee restoran';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Kreeka restoran';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'India restoran';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Itaalia restoran';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Jaapani restoran';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebabi restoran';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Korea restoran';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Vahemere restoran';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Meksiko restoran';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantiline restoran';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Tai restoran';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Türgi restoran';
$app_list_strings['marker_image_list']['right'] = 'Parem';
$app_list_strings['marker_image_list']['right_then_down'] = 'Paremale ja alla';
$app_list_strings['marker_image_list']['right_then_up'] = 'Paremale ja üles';
$app_list_strings['marker_image_list']['saturday'] = 'Laupäev';
$app_list_strings['marker_image_list']['school'] = 'Kool';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Ostukeskus';
$app_list_strings['marker_image_list']['shore'] = 'Rand';
$app_list_strings['marker_image_list']['sight'] = 'Vaade';
$app_list_strings['marker_image_list']['small_city'] = 'Väike linn';
$app_list_strings['marker_image_list']['snow'] = 'Lumi';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Kiirus 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Kiirus 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Kiirus 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Kiirus 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Kiirus 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Kiirus 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Kiirus 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Kiirus 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Kiirus 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Kiirus 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Kiirus 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Kiirus 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Speed Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Staadion';
$app_list_strings['marker_image_list']['statue'] = 'Kuju';
$app_list_strings['marker_image_list']['steam_train'] = 'Auruvedur';
$app_list_strings['marker_image_list']['stop'] = 'Stopp';
$app_list_strings['marker_image_list']['stoplight'] = 'Stopptuli';
$app_list_strings['marker_image_list']['subway'] = 'Metroo';
$app_list_strings['marker_image_list']['sun'] = 'P';
$app_list_strings['marker_image_list']['sunday'] = 'Pühapäev';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Sünagoog';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Takso';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Teemaja';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindu tempel';
$app_list_strings['marker_image_list']['terrace'] = 'Terrass';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Teater';
$app_list_strings['marker_image_list']['theme_park'] = 'Teemapark';
$app_list_strings['marker_image_list']['thursday'] = 'Neljapäev';
$app_list_strings['marker_image_list']['toilets'] = 'Tualetid';
$app_list_strings['marker_image_list']['toll_station'] = 'Tollipunkt';
$app_list_strings['marker_image_list']['tower'] = 'Torn';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Kiiruskaamera';
$app_list_strings['marker_image_list']['train'] = 'Rong';
$app_list_strings['marker_image_list']['tram'] = 'Tramm';
$app_list_strings['marker_image_list']['truck'] = 'Veoauto';
$app_list_strings['marker_image_list']['tuesday'] = 'Teisipäev';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Pööra vasakule';
$app_list_strings['marker_image_list']['turn_right'] = 'Pööra paremale';
$app_list_strings['marker_image_list']['university'] = 'Ülikool';
$app_list_strings['marker_image_list']['up'] = 'Üleval';
$app_list_strings['marker_image_list']['up_left'] = 'Üleval vasakul';
$app_list_strings['marker_image_list']['up_right'] = 'Üleval paremal';
$app_list_strings['marker_image_list']['up_then_left'] = 'Ülevaj ja seejärel vasakul';
$app_list_strings['marker_image_list']['up_then_right'] = 'Üles ja siis paremale';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Vesi';
$app_list_strings['marker_image_list']['waterfall'] = 'Kosk';
$app_list_strings['marker_image_list']['watermill'] = 'Vesiveski';
$app_list_strings['marker_image_list']['waterpark'] = 'Veepark';
$app_list_strings['marker_image_list']['watertower'] = 'Veetorn';
$app_list_strings['marker_image_list']['wednesday'] = 'Kolmapäev';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Tuuleveski';
$app_list_strings['marker_image_list']['windmill'] = 'Tuuleveski';
$app_list_strings['marker_image_list']['winery'] = 'Veinikelder';
$app_list_strings['marker_image_list']['work_office'] = 'Work Office';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'World Heritage Site';
$app_list_strings['marker_image_list']['zoo'] = 'Loomaaed';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Kontorist väljas';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'Koosolekul';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Planeeri ümber';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Palun sisesta ümber planeerimise info';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Kuupäev';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Põhjus:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Palun vali korrektne kuupäev';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Palun vali põhjus';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Planeeri ümber';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Kõne katsete ajalugu';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Kõnede katsed';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Turvagrupp';
$app_strings['LBL_ROLE'] = 'Roll';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Väljaminevad Emaili Kontod';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Sotsiaalse uudisvoo andmed';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tüüp:';

$app_strings['LBL_ADD_TAB'] = 'Lisa vahekaart';
$app_strings['LBL_EDIT_TAB'] = 'Redigeeri sakid';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Sisesta töölaua nimi:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Veergude arv:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Oled sa kindel, et soovid kustutada';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'töölauda?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Lisa töölaua leht';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Eemalda praegune töölaua leht';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Nimeta töölaua leht ümber';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'TOIMINGUD';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Ülesanded',
    'Meetings' => 'Kohtumised',
    'Calls' => 'Telefonikõned',
    'Notes' => 'Märkused',
    'Emails' => 'E-kirjad'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Müük',
    'getAccountsSpotsData' => 'Ettevõtted',
    'getLeadsSpotsData' => 'Müügivihjed',
    'getServiceSpotsData' => 'Teenus',
    'getMarketingSpotsData' => 'Turundus',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Tegevused',
    'getQuotesSpotsData' => 'Pakkumised'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Töötunnid';
$app_list_strings['business_hours_list']['0'] = '12 el';
$app_list_strings['business_hours_list']['1'] = '1 el';
$app_list_strings['business_hours_list']['2'] = '2 el';
$app_list_strings['business_hours_list']['3'] = '3 el';
$app_list_strings['business_hours_list']['4'] = '4 el';
$app_list_strings['business_hours_list']['5'] = '5 el';
$app_list_strings['business_hours_list']['6'] = '6 el';
$app_list_strings['business_hours_list']['7'] = '7 el';
$app_list_strings['business_hours_list']['8'] = '8 el';
$app_list_strings['business_hours_list']['9'] = '9 el';
$app_list_strings['business_hours_list']['10'] = '10 el';
$app_list_strings['business_hours_list']['11'] = '11 el';
$app_list_strings['business_hours_list']['12'] = '12pl';
$app_list_strings['business_hours_list']['13'] = '1pl';
$app_list_strings['business_hours_list']['14'] = '2pl';
$app_list_strings['business_hours_list']['15'] = '3pl';
$app_list_strings['business_hours_list']['16'] = '4pl';
$app_list_strings['business_hours_list']['17'] = '5pl';
$app_list_strings['business_hours_list']['18'] = '6pl';
$app_list_strings['business_hours_list']['19'] = '7pl';
$app_list_strings['business_hours_list']['20'] = '8pl';
$app_list_strings['business_hours_list']['21'] = '9pl';
$app_list_strings['business_hours_list']['22'] = '10pl';
$app_list_strings['business_hours_list']['23'] = '11pl';
$app_list_strings['day_list']['Monday'] = 'Esmaspäev';
$app_list_strings['day_list']['Tuesday'] = 'Teisipäev';
$app_list_strings['day_list']['Wednesday'] = 'Kolmapäev';
$app_list_strings['day_list']['Thursday'] = 'Neljapäev';
$app_list_strings['day_list']['Friday'] = 'Reede';
$app_list_strings['day_list']['Saturday'] = 'Laupäev';
$app_list_strings['day_list']['Sunday'] = 'Pühapäev';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Kiri';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Juriidiline';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Püstine';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Rõhtne';


$app_list_strings['moduleList']['SurveyResponses'] = 'Küsitluse vastused';
$app_list_strings['moduleList']['Surveys'] = 'Küsitlused';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Küsitluse küsimuste vastused';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Küsimused küsitluses';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Küsitluse küsimuste valikud';
$app_list_strings['survey_status_list']['Draft'] = 'Mustand';
$app_list_strings['survey_status_list']['Public'] = 'Avalik';
$app_list_strings['survey_status_list']['Closed'] = 'Suletud';
$app_list_strings['surveys_question_type']['Text'] = 'Tekst';
$app_list_strings['surveys_question_type']['Textbox'] = 'Tekstikast';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Märkekast';
$app_list_strings['surveys_question_type']['Radio'] = 'Raadio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Rippvalik';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Mitu valikut';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'KuupäevKellaaeg';
$app_list_strings['surveys_question_type']['Date'] = 'Kuupäev';
$app_list_strings['surveys_question_type']['Scale'] = 'Skaala';
$app_list_strings['surveys_question_type']['Rating'] = 'Hinnang';
$app_list_strings['surveys_matrix_options'][0] = 'Rahul';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Pole rahul';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Ootab nõusoleku kinnitust, Kinnituse nõusolek saatmata';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Ootab nõusoleku kinnitust, Kinnituse nõusolek saadetud';
$app_strings['LBL_OPT_IN'] = 'Nõusolek antud';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Väljavalitud';
$app_strings['LBL_OPT_IN_INVALID'] = 'Kehtetu';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Keelatud',
    'opt-in' => 'Liitu kampaaniaga',
    'confirmed-opt-in' => 'Kinnitatud tellimus'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Liitu kampaaniaga',
    'confirmed-opt-in' => 'Kinnitatud tellimus'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'The confirm opt in email has been added to the email queue for %s email address(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Unable to send email to %s email address(es), because they are not opted in. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s email address do not have a valid id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Two Factor Authentication failed';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Two Factor Authentication code sent.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Two Factor Authentication code failed to send.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Thank you for submitting your interest.';

$app_strings['ERR_IP_CHANGE'] = 'Your session was terminated due to a significant change in your IP address';
$app_strings['ERR_RETURN'] = 'Tagasi koju';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Grant',
    'client_credentials' => 'Client Credentials',
    'implicit' => 'Implicit',
    'authorization_code' => 'Autoriseerimiskood'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutit',
    'hour' => 'tundi',
    'day' => 'päevi',
    'week' => 'nädalat',
    'month' => 'kuud',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Otsi (uus)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Isiklik',
    'shared' => 'Jagatud',
    'group' => 'Grupp',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Ligipääs valideeritud',
    'failed' => 'Ebaõnnestus',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Töös',
    'success' => 'Korras',
    'warning' => 'Hoiatus',
    'error' => 'Hata:',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API tõrge';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Tekkis JSON API tõrge.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api Versioon: 8';
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
$app_strings['LBL_CLICK_HERE'] = 'Kliki siia';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Tundmatu viga';
$app_strings['LBL_SEARCH_TITLE']                   = 'Otsi';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Otsi';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Otsi';
$app_strings['LBL_SEARCH_QUERY']                   = 'Otsingu päring: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Mootor: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Tulemusi kokku: ';
$app_strings['LBL_SEARCH_PREV'] = 'Eelmine';
$app_strings['LBL_SEARCH_NEXT'] = 'Edasi';
$app_strings['LBL_SEARCH_PAGE'] = 'Lehekülg ';
$app_strings['LBL_SEARCH_OF'] = ' / ';
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

$app_strings['LBL_KEY'] = 'Väärtus';
$app_strings['LBL_VALUE'] = 'Väärtus';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Allkiri';

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
