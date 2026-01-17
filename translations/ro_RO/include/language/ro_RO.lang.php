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
    'language_pack_name' => 'Română (Romanian) - ro_RO',
    'moduleList' => array(
        'Home' => 'Acasă',
        'ResourceCalendar' => 'Calendar Resurse',
        'Contacts' => 'Contacte',
        'Accounts' => 'Conturi',
        'Alerts' => 'Alerte',
        'Opportunities' => 'Oportunităţi',
        'Cases' => 'Cazuri',
        'Notes' => 'Note',
        'Calls' => 'Apeluri',
        'TemplateSectionLine' => 'Linia de secţiune şablon',
        'Calls_Reschedule' => 'Reprogramare Apeluri',
        'Emails' => 'Email-uri',
        'EAPM' => 'EAPM',
        'Meetings' => 'Întâlniri',
        'Tasks' => 'Sarcini',
        'Calendar' => 'Calendar',
        'Leads' => 'Piste',
        'Currencies' => 'Valute',
        'Activities' => 'Activităţi',
        'Bugs' => 'Bug-uri',
        'Feeds' => 'RSS',
        'iFrames' => 'Sit-urile Mele',
        'TimePeriods' => 'Perioade Timp',
        'ContractTypes' => 'Tipuri Contract',
        'Schedulers' => 'Programatore',
        'Project' => 'Proiecte',
        'ProjectTask' => 'Sarcini Proiect',
        'Campaigns' => 'Campanii',
        'CampaignLog' => 'Jurnal campanii',
        'Documents' => 'Documente',
        'DocumentRevisions' => 'Revizii Document',
        'Connectors' => 'Conectori',
        'Roles' => 'Roluri',
        'Notifications' => 'Notificări',
        'Sync' => 'Sincronizare',
        'Users' => 'Utilizatori',
        'Employees' => 'Angajaţi',
        'Administration' => 'Administrare',
        'ACLRoles' => 'Roluri',
        'InboundEmail' => 'E-mail de intrare',
        'Releases' => 'Distribuții',
        'Prospects' => 'Ținte',
        'Queues' => 'Cozi de așteptare',
        'EmailMarketing' => 'Marketing prin Email',
        'EmailTemplates' => 'Email - Șabloane',
        'ProspectLists' => 'Obiective - Liste',
        'SavedSearch' => 'Căutări Salvate',
        'UpgradeWizard' => 'Asistent Actualizare',
        'Trackers' => 'Urmăritori',
        'TrackerSessions' => 'Sesiuni Urmărire',
        'TrackerQueries' => 'Interogări Urmărire',
        'FAQ' => 'Întrebări Frecvente',
        'Newsletters' => 'Abonamente',
        'SugarFeed' => 'Flux SuiteCRM',
        'SugarFavorites' => 'Favorite SuiteCRM',

        'OAuthKeys' => 'Chei Consumator OAuth',
        'OAuthTokens' => 'Jetoane OAuth',
        'OAuth2Clients' => 'Clienți OAuth',
        'OAuth2Tokens' => 'Jetoane OAuth',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Acasă',
        'Dashboard' => 'Panou de Bord',
        'Contacts' => 'Contact',
        'Accounts' => 'Cont',
        'Opportunities' => 'Oportunitate',
        'Cases' => 'Caz',
        'Notes' => 'Notă',
        'Calls' => 'Apel',
        'Emails' => 'Email',
        'EmailTemplates' => 'Șablon e-mail',
        'Meetings' => 'Întâlnire',
        'Tasks' => 'Sarcină',
        'Calendar' => 'Calendar',
        'Leads' => 'Pistă',
        'Activities' => 'Activitate',
        'Bugs' => 'Defecte',
        'KBDocuments' => 'Bază de cunoștințe',
        'Feeds' => 'RSS',
        'iFrames' => 'Sit-urile Mele',
        'TimePeriods' => 'Perioadă Timp',
        'Project' => 'Proiect',
        'ProjectTask' => 'Sarcină Proiect',
        'Prospects' => 'Ţintă',
        'Campaigns' => 'Campanie',
        'Documents' => 'Document',
        'Sync' => 'Sincronizare',
        'Users' => 'Utilizator',
        'SugarFavorites' => 'Favorite SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Da',
        '2' => 'Nu',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analist',
        'Competitor' => 'Competitor',
        'Customer' => 'Client',
        'Integrator' => 'Integrator',
        'Investor' => 'Investitor',
        'Partner' => 'Partener',
        'Press' => 'Presă',
        'Prospect' => 'Prospect',
        'Reseller' => 'Revânzător',
        'Other' => 'Altele',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Textile',
        'Banking' => 'Bancare',
        'Biotechnology' => 'Biotehnologie',
        'Chemicals' => 'Industria Chimică',
        'Communications' => 'Comunicaţii',
        'Construction' => 'Construcţii',
        'Consulting' => 'Consultanţă',
        'Education' => 'Educaţie',
        'Electronics' => 'Electronică',
        'Energy' => 'Energie',
        'Engineering' => 'Inginerie',
        'Entertainment' => 'Divertisment',
        'Environmental' => 'Mediu',
        'Finance' => 'Finanţe',
        'Government' => 'Guvern',
        'Healthcare' => 'Sănătate',
        'Hospitality' => 'Ospitalitate',
        'Insurance' => 'Asigurări',
        'Machinery' => 'Industrie Grea',
        'Manufacturing' => 'Producție',
        'Media' => 'Media',
        'Not For Profit' => 'Nonprofit',
        'Recreation' => 'Timp Liber',
        'Retail' => 'Vânzări',
        'Shipping' => 'Curierat',
        'Technology' => 'Tehnologie',
        'Telecommunications' => 'Telecomunicații',
        'Transportation' => 'Transporturi',
        'Utilities' => 'Utilităţi',
        'Other' => 'Altele',
    ),
    'lead_source_default_key' => 'Autogenerat',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Apel Telefonic Rece',
        'Existing Customer' => 'Client existent',
        'Self Generated' => 'Autogenerat',
        'Employee' => 'Angajat',
        'Partner' => 'Partener',
        'Public Relations' => 'Relaţii Publice',
        'Direct Mail' => 'Email Direct',
        'Conference' => 'Conferință',
        'Trade Show' => 'Salon de Prezentare',
        'Web Site' => 'Sit Web',
        'Word of mouth' => 'Recomandare',
        'Email' => 'Email',
        'Campaign' => 'Campanie',
        'Other' => 'Altele',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Afacere Existentă',
        'New Business' => 'Afacere Nouă',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Venituri',
        'Investment' => 'Investiție',
        'Expected_Revenue' => 'Venituri Estimate',
        'Budget' => 'Buget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Factor Decizional Principal',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Factor Decizional Principal',
        'Business Decision Maker' => 'Factor Decizional Afacere',
        'Business Evaluator' => 'Evaluator Afacere',
        'Technical Decision Maker' => 'Factor Decizional Tehnic',
        'Technical Evaluator' => 'Evaluator tehnic',
        'Executive Sponsor' => 'Sponsor executiv',
        'Influencer' => 'Factor influent',
        'Other' => 'Altele',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Contact principal',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contact principal',
        'Alternate Contact' => 'Contact alternativ',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Planificat',
    'sales_stage_dom' => array(
        'Prospecting' => 'Planificat',
        'Qualification' => 'Alegere',
        'Needs Analysis' => 'Necesită analiză',
        'Value Proposition' => 'Propunere ofertă',
        'Id. Decision Makers' => 'Identifică factorii de decizie',
        'Perception Analysis' => 'Evaluarea percepției',
        'Proposal/Price Quote' => 'Cotație',
        'Negotiation/Review' => 'Negociere',
        'Closed Won' => 'Câștigat și închis',
        'Closed Lost' => 'Pierdut și închis',
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
        'Call' => 'Apel',
        'Meeting' => 'Întâlnire',
        'Task' => 'Sarcină',
        'Email' => 'Email',
        'Note' => 'Notă',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Dl.',
        'Ms.' => 'Dna.',
        'Mrs.' => 'D-na.',
        'Miss' => 'D-șoara',
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
        60 => '1 minut înainte de',
        300 => '5 minute înainte de',
        600 => '10 minute înainte de',
        900 => '15 minute înainte de',
        1800 => '30 minute înainte de',
        3600 => 'o ora înainte de',
        7200 => '2 ore înainte de',
        10800 => '3 ore înainte de',
        18000 => '5 ore înainte de',
        86400 => '1 zi înainte',
    ),

    'task_priority_default' => 'Medie',
    'task_priority_dom' => array(
        'High' => 'Ridicată',
        'Medium' => 'Medie',
        'Low' => 'Scăzut',
    ),
    'task_status_default' => 'Neîncepută',
    'task_status_dom' => array(
        'Not Started' => 'Neîncepută',
        'In Progress' => 'În Curs',
        'Completed' => 'Finalizată',
        'Pending Input' => 'În Aşteptare Input',
        'Deferred' => 'Amânată',
    ),
    'meeting_status_default' => 'Planificat',
    'meeting_status_dom' => array(
        'Planned' => 'Planificat',
        'Held' => 'Confirmată',
        'Not Held' => 'Anulată',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Altele',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planificat',
    'call_status_dom' => array(
        'Planned' => 'Planificat',
        'Held' => 'Confirmată',
        'Not Held' => 'Anulată',
    ),
    'call_direction_default' => 'Ieșire',
    'call_direction_dom' => array(
        'Inbound' => 'Intrare',
        'Outbound' => 'Ieșire',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nou',
        'Assigned' => 'Atribuită',
        'In Process' => 'În Procesare',
        'Converted' => 'Convertită',
        'Recycled' => 'Reciclată',
        'Dead' => 'Defunctă',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Ridicată',
        'P2' => 'Medie',
        'P3' => 'Scăzut',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Utilizator normal',
        'Administrator' => 'Administrator',
    ),
    'user_status_dom' => array(
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Cod email',
    ),
    'employee_status_dom' => array(
        'Active' => 'Activ',
        'Terminated' => 'Inactiv',
        'Leave of Absence' => 'Absent',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Ridicată',
        'Medium' => 'Medie',
        'Low' => 'Scăzut',
    ),
    'project_task_priority_default' => 'Medie',

    'project_task_status_options' => array(
        'Not Started' => 'Neîncepută',
        'In Progress' => 'În Curs',
        'Completed' => 'Finalizată',
        'Pending Input' => 'În Aşteptare Input',
        'Deferred' => 'Amânată',
    ),
    'project_task_utilization_options' => array(
        '0' => 'nimic',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Schiță',
        'In Review' => 'În Revizuire',
        'Underway' => 'În Curs',
        'On_Hold' => 'În Aşteptare',
        'Completed' => 'Finalizată',
    ),
    'project_status_default' => 'Schiță',

    'project_duration_units_dom' => array(
        'Days' => 'Zile',
        'Hours' => 'Ore',
    ),

    'activity_status_type_dom' => array(
        '' => '-- Niciunul --',
        'active' => 'Activ',
        'inactive' => 'Inactiv',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Conturi',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Cont',
        'Opportunities' => 'Oportunitate',
        'Cases' => 'Caz',
        'Leads' => 'Pistă',
        'Contacts' => 'Contact', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Defecte',
        'Project' => 'Proiect',

        'Prospects' => 'Ţintă',
        'ProjectTask' => 'Sarcină Proiect',

        'Tasks' => 'Sarcină',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Factură',
        'AOS_Quotes' => 'Ofertă',
        'AOS_Products' => 'Produs',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Cont',
        'Contacts' => 'Contact',
        'Opportunities' => 'Oportunitate',
        'Campaigns' => 'Campanie',
        'Tasks' => 'Sarcină',
        'Emails' => 'Email',

        'Bugs' => 'Defecte',
        'Project' => 'Proiect',
        'ProjectTask' => 'Sarcină Proiect',
        'Prospects' => 'Ţintă',
        'Cases' => 'Caz',
        'Leads' => 'Pistă',

        'Meetings' => 'Întâlnire',
        'Calls' => 'Apel',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Factură',
        'AOS_Quotes' => 'Ofertă',
        'AOS_Products' => 'Produs',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Cont',
        'Contacts' => 'Contact',
        'Tasks' => 'Sarcină',
        'Opportunities' => 'Oportunitate',

        'Bugs' => 'Defecte',
        'Cases' => 'Caz',
        'Leads' => 'Pistă',

        'Project' => 'Proiect',
        'ProjectTask' => 'Sarcină Proiect',

        'Prospects' => 'Ţintă',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Factură',
        'AOS_Quotes' => 'Ofertă',
        'AOS_Products' => 'Produs',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Oferte',
        'AOS_Invoices' => 'Facturi',
        'AOS_Contracts' => 'Contracte',
    ),
    'issue_priority_default_key' => 'Medie',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Ridicată',
        'Medium' => 'Medie',
        'Low' => 'Scăzut',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Acceptat',
        'Duplicate' => 'Duplicat',
        'Closed' => 'Închis',
        'Out of Date' => 'Depăşit',
        'Invalid' => 'Invalid',
    ),

    'issue_status_default_key' => 'Nou',
    'issue_status_dom' => array(
        'New' => 'Nou',
        'Assigned' => 'Atribuită',
        'Closed' => 'Închis',
        'Pending' => 'În așteptare',
        'Rejected' => 'Respins',
    ),

    'bug_priority_default_key' => 'Medie',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'Ridicată',
        'Medium' => 'Medie',
        'Low' => 'Scăzut',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Acceptat',
        'Duplicate' => 'Duplicat',
        'Fixed' => 'Corectat',
        'Out of Date' => 'Depăşit',
        'Invalid' => 'Invalid',
        'Later' => 'Amânat',
    ),
    'bug_status_default_key' => 'Nou',
    'bug_status_dom' => array(
        'New' => 'Nou',
        'Assigned' => 'Atribuită',
        'Closed' => 'Închis',
        'Pending' => 'În așteptare',
        'Rejected' => 'Respins',
    ),
    'bug_type_default_key' => 'Defecte',
    'bug_type_dom' => array(
        'Defect' => 'Defect',
        'Feature' => 'Recomandare',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administrare',
        'Product' => 'Produs',
        'User' => 'Utilizator',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Intern',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Email',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Conturi',
        'Activities' => 'Activităţi',
        'Bugs' => 'Bug-uri',
        'Calendar' => 'Calendar',
        'Calls' => 'Apeluri',
        'Campaigns' => 'Campanii',
        'Cases' => 'Cazuri',
        'Contacts' => 'Contacte',
        'Currencies' => 'Valute',
        'Dashboard' => 'Panou de Bord',
        'Documents' => 'Documente',
        'Emails' => 'Email-uri',
        'Feeds' => 'Fluxuri',
        'Forecasts' => 'Prognoză',
        'Help' => 'Ajutor',
        'Home' => 'Acasă',
        'Leads' => 'Piste',
        'Meetings' => 'Întâlniri',
        'Notes' => 'Note',
        'Opportunities' => 'Oportunităţi',
        'Outlook Plugin' => 'Plugin Outlook',
        'Projects' => 'Proiecte',
        'Quotes' => 'Oferte',
        'Releases' => 'Distribuții',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Actualizare',
        'Users' => 'Utilizatori',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planificată',
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
        'Complete' => 'Completă',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Vânzări telefonice',
        'Mail' => 'Curier',
        'Email' => 'Email',
        'Print' => 'Tipăriți',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Televiziune',
        'NewsLetter' => 'Abonament',
        'Survey' => 'Sondaj',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Săptămânal',
        'Monthly' => 'Lunar',
        'Quarterly' => 'La fiecare 4 luni',
        'Annually' => 'Anual',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Ianuarie',
        '2' => 'Februarie',
        '3' => 'Martie',
        '4' => 'Aprilie',
        '5' => 'Mai',
        '6' => 'Iunie',
        '7' => 'Iulie',
        '8' => 'August',
        '9' => 'Septembrie',
        '10' => 'Octombrie',
        '11' => 'Noiembrie',
        '12' => 'Decembrie',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Ian',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Mai',
        '6' => 'Iun',
        '7' => 'Iul',
        '8' => 'Aug',
        '9' => 'Sep',
        '10' => 'Oct',
        '11' => 'Noi',
        '12' => 'Dec',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Duminică',
        '2' => 'Luni',
        '3' => 'Marți',
        '4' => 'Miercuri',
        '5' => 'Joi',
        '6' => 'Vineri',
        '7' => 'Sâmbătă',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dum',
        '2' => 'Luni',
        '3' => 'Mar',
        '4' => 'Mie',
        '5' => 'Joi',
        '6' => 'Vin',
        '7' => 'Sâm',
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
        'personal' => 'Personal',
        'group' => 'Grup',
        'bounce' => 'Săritură',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'Autorizare de bază',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'Autorizare de bază',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'Personal',
        'group' => 'Grup',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personal',
        'group' => 'Grup',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personal',
        'group' => 'Grup',
        'system' => 'Sistem',
        'system-override' => 'Suprascriere sistem',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Căutare avansată',
      'single' => 'Căutare după un cuvânt unic',
    ],

    'dom_email_types' => array(
        'out' => 'Trimis',
        'archived' => 'Arhivat',
        'draft' => 'Schiță',
        'inbound' => 'Intrare',
        'campaign' => 'Campanie',
    ),
    'dom_email_status' => array(
        'archived' => 'Arhivat',
        'closed' => 'Închis',
        'draft' => 'Schiță',
        'read' => 'Citit',
        'replied' => 'Răspuns',
        'sent' => 'Trimis',
        'send_error' => 'Eroare Trimitere',
        'unread' => 'Necitit',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arhivat',
    ),

    'dom_email_server_type' => array(
        '' => '-- Niciunul --',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-- Niciunul --',
        'createcase' => 'Creați Caz',
        'bounce' => 'Tratare email respins',
    ),
    'dom_email_distribution' => array(
        '' => '-- Niciunul --',
        'direct' => 'Atribuire directă',
        'roundRobin' => 'Pe rând',
        'leastBusy' => 'Cel Mai Puțin Ocupat',
    ),
    'dom_email_errors' => array(
        1 => 'Selectați doar un utilizator când atribuiți direct elementele.',
        2 => 'Trebuie să atribuiți doar articole verificate când se atribuie direct articole.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Da',
        'bool_false' => 'Nu',
    ),
    'dom_int_bool' => array(
        1 => 'Da',
        0 => 'Nu',
    ),
    'dom_switch_bool' => array(
        'on' => 'Da',
        'off' => 'Nu',
        '' => 'Nu',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Clientul de email SuiteCRM',
        'mailto' => 'Client de email extern',
    ),

    'dom_editor_type' => array(
        'none' => 'HTML direct',
        'tinymce' => 'Editor TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Format implicit adresa de email',
        'html' => 'Email HTML',
        'plain' => 'Email Text Simplu',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Nu se execută',
        'ready' => 'Pregătit',
        'in progress' => 'În Curs',
        'failed' => 'Eşuat',
        'completed' => 'Finalizată',
        'no curl' => 'Nu se execută: cURL indisponibil',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minute',
        'hour' => 'Ore',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Bază de cunoștințe',
        'Sales' => 'Vânzări',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arhivat',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Documente de marketing',
        'Product Brochures' => 'Broşuri de Produse',
        'FAQ' => 'Întrebări Frecvente',
    ),

    'document_status_dom' => array(
        'Active' => 'Activ',
        'Draft' => 'Schiță',
        'FAQ' => 'Întrebări Frecvente',
        'Expired' => 'Expirat',
        'Under Review' => 'În revizuire',
        'Pending' => 'În așteptare',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Preluare email',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Licențiat',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Acceptă',
        'decline' => 'Refuză',
        'tentative' => 'Incert',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Acceptat',
        'decline' => 'Refuzat',
        'tentative' => 'Incert',
        'none' => 'Niciun',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Niciun',
        'Daily' => 'Zilnic',
        'Weekly' => 'Săptămânal',
        'Monthly' => 'Lunar',
        'Yearly' => 'Anual',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'zi(le)',
        'Weekly' => 'săptămână(i)',
        'Monthly' => 'lună(i)',
        'Yearly' => 'an(i)',
    ),

    'duration_dom' => array(
        '' => 'Niciun',
        '900' => '15 minute',
        '1800' => '30 minute',
        '2700' => '45 minute',
        '3600' => '1 oră',
        '5400' => '1.5 ore',
        '7200' => '2 ore',
        '10800' => '3 ore',
        '21600' => '6 ore',
        '86400' => '1 zi',
        '172800' => '2 zile',
        '259200' => '3 zile',
        '604800' => '1 săptămână',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Implicit',
        'seed' => 'Începută',
        'exempt_domain' => 'Excludere - după domeniu',
        'exempt_address' => 'Excludere - după email',
        'exempt' => 'Lista de excludere - după Id',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Activ',
        'inactive' => 'Inactiv',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Email Trimis/Încercat',
        'send error' => 'Mesaje respinse, Altele',
        'invalid email' => 'Mesaje Respinse, Email Invalid',
        'link' => 'Legătură din mesaj accesat',
        'viewed' => 'Mesaj vizualizat',
        'removed' => 'S-a dezabonat',
        'lead' => 'Conversii create',
        'contact' => 'Contacte Create',
        'blocked' => 'Suprimat prin adresa sau domeniu',
        'Survey' => 'Chestionar răspuns',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contacte',
        'Users' => 'Utilizatori',
        'Prospects' => 'Ținte',
        'Leads' => 'Piste',
        'Accounts' => 'Conturi',
    ),
    'merge_operators_dom' => array(
        'like' => 'Conține',
        'exact' => 'Exact',
        'start' => 'Începe cu',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Da',
        'false' => 'Nu',
        'required' => 'Necesar',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Dezactivat',
        1 => 'Accesibil',
        2 => 'Filtru',
        3 => 'Filtrul selectat implicit',
        4 => 'Doar filtru',
    ),

    'projects_priority_options' => array(
        'high' => 'Ridicată',
        'medium' => 'Medie',
        'low' => 'Scăzut',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Neîncepută',
        'inprogress' => 'În Curs',
        'completed' => 'Finalizată',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Extinde legendă',
        'collapselegend' => 'Restrânge legendă',
        'clickfordrilldown' => 'Apăsați pentru Detaliere',
        'detailview' => 'Mai Multe Detalii...',
        'piechart' => 'Grafic Plăcintă',
        'groupchart' => 'Grup Grafic',
        'stackedchart' => 'Stacked Grafic',
        'barchart' => 'Linie Grafic',
        'horizontalbarchart' => 'Linie orizontala Grafic',
        'linechart' => 'Grafic Liniar',
        'noData' => 'Datele nu sunt disponibile',
        'print' => 'Tipăriți',
        'pieWedgeName' => 'secțiuni',
    ),
    'release_status_dom' => array(
        'Active' => 'Activ',
        'Inactive' => 'Inactiv',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Citat simplu (\')',
        '"' => 'Citat dublu (")',
        '' => 'Niciun',
        'other' => 'Altul:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Altul:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Fereastra noua',
        '_self' => 'Aceeași Fereastră',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Fără Auto-Împrospătare',
        '30' => 'Fiecare 30 secunde',
        '60' => 'Fiecare 1 minut',
        '180' => 'Fiecare 3 minute',
        '300' => 'Fiecare 5 minute',
        '600' => 'Fiecare 10 minute',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Niciodată',
        '30' => 'Fiecare 30 secunde',
        '60' => 'Fiecare 1 minut',
        '180' => 'Fiecare 3 minute',
        '300' => 'Fiecare 5 minute',
        '600' => 'Fiecare 10 minute',
    ),
    'date_range_search_dom' => array(
        '=' => 'Egal',
        'not_equal' => 'Nu rezulta',
        'greater_than' => 'Mai Mare Ca',
        'less_than' => 'Înainte de',
        'last_7_days' => 'Ultimele 7 Zile',
        'next_7_days' => 'Următoarele 7 Zile',
        'last_30_days' => 'Ultimele 30 de Zile',
        'next_30_days' => 'Următoarele 30 de Zile',
        'last_month' => 'Luna Trecută',
        'this_month' => 'Luna Curentă',
        'next_month' => 'Luna Următoare',
        'last_year' => 'Anul Trecut',
        'this_year' => 'Anul Curent',
        'next_year' => 'Anul Viitor',
        'between' => 'Este Între',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Egal',
        'not_equal' => 'Nu Este Egal cu',
        'greater_than' => 'Mai Mare Decât',
        'greater_than_equals' => 'Mai Mare sau Egal cu',
        'less_than' => 'Mai Puţin de',
        'less_than_equals' => 'Mai Puțin Decât sau Egal cu',
        'between' => 'Este Între',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copiați',
        'move' => 'Mutați',
        'donothing' => 'Nu fă nimic',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Rezultate',
    'ERR_SEARCH_INVALID_QUERY' => 'A intervenit o eroare când s-a realizat căutarea. Sintaxa solicitării ar putea fi invalidă.',
    'ERR_SEARCH_NO_RESULTS' => 'Niciun rezultat care să se potrivească criteriilor de căutare. Încearcă să extinzi căutarea.',
    'LBL_SEARCH_PERFORMED_IN' => 'Căutare realizată în',
    'LBL_EMAIL_CODE' => 'Codul primit pe E-mail:',
    'LBL_SEND' => 'Trimite',
    'LBL_LOGOUT' => 'Deconectare',
    'LBL_TOUR_NEXT' => 'Următor',
    'LBL_TOUR_SKIP' => 'Săriți',
    'LBL_TOUR_BACK' => 'Înapoi',
    'LBL_TOUR_TAKE_TOUR' => 'Fă turul',
    'LBL_MOREDETAIL' => 'Mai multe detalii' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editare în linie' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Vizualizează' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtru' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Adăugați' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Adăugați Adresă Email' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Ascundere/Afișare' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Ștergere' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Curăță' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Înlăturați' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Elimină adresa de E-mail' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Renunță',
    'LBL_ID_FF_INVALID' => 'Marchează ca invalid',
    'LBL_ADD' => 'Adăugați' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo companie' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Conectori pop-up',
    'LBL_CLOSEINLINE' => 'Închide',
    'LBL_VIEWINLINE' => 'Vizualizează',
    'LBL_INFOINLINE' => 'Informații',
    'LBL_PRINT' => 'Tipăriți',
    'LBL_HELP' => 'Ajutor',
    'LBL_ID_FF_SELECT' => 'Selectaţi',
    'DEFAULT' => 'Elementar',
    'LBL_SORT' => 'Sortați',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activați SMTP prin SSL sau TLS?',
    'LBL_NO_ACTION' => 'Nu există nici o acțiune cu acest nume: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Nu există acțiuni disponibile.',
    'LBL_NO_DATA' => 'Nu există date',

    'LBL_ROUTING_FLAGGED' => 'setați steag',
    'LBL_ROUTING_TO' => 'până la',
    'LBL_ROUTING_TO_ADDRESS' => 'catre adresa',
    'LBL_ROUTING_WITH_TEMPLATE' => 'cu sablon',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Momentan aveti valori in formularul dumneavoastra pentru campurile Telefon si Adresa. Pentru a suprascrie aceste valori cu telefon/adresa ale Contului pe care l-ati ales, apasati "OK". pentru a pastra valorile curente, apasati "Cancel".',
    'LBL_DROP_HERE' => '[Lasă să cadă aici]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Preîncărcat setările implicite ale Gmail&#153;',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nume',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Proprietăți server de expediere',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Parola SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Server SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Nume Utilizator SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Implicit',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Atentie: Lipșeste nume utilizator și parolă pentru contul de trimitere a corespondenței.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Vă rugăm să setați o conexiune OAuth externă.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Atenție: O parolă nu a fost setată.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Atenție: Acreditări lipsă',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Configurați conturile de e-mail pentru a vizualiza e-mailurile primite de la conturile de e-mail.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Furnizați informații SMTP server mail pentru a utiliza pentru e-mail expediate în conturile de mail.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Efectuat',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Curăță',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Către:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Către/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Adresă Email',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtru',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nume',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nicio Adresă Găsită',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Salvați & Adăugați la Listă de Adrese',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Selectați destinatarii de e-mail',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Carte adrese',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Atenție! Contul de ieșire pe care încercați să îl ștergeți este asociat unui cont de intrare existent. Sunteți sigur că doriți să continuați?',
    'LBL_EMAIL_ADDRESSES' => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adresă Email',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Ai confirmat că adresa de e-mail cu care v-ați înscris este: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Imposibil de confirmat adresa de e-mail',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importat în SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Atribuie',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Atașează',
    'LBL_EMAIL_ATTACHMENT' => 'Atașează',
    'LBL_EMAIL_ATTACHMENTS' => 'Din sistemul local',
    'LBL_EMAIL_ATTACHMENTS2' => 'Din documente SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Atașamente Șablon',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fișier',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Anulați',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Set de Caractere',
    'LBL_EMAIL_CHECK' => 'Verificați Email',
    'LBL_EMAIL_CHECKING_NEW' => 'Căutare pentru nou email',
    'LBL_EMAIL_CHECKING_DESC' => 'Un moment vă rog...<br><br>Dacă aceasta este prima verificare pentru contul de poștă electronică, aceasta poate dura ceva timp.',
    'LBL_EMAIL_CLOSE' => 'Închide',
    'LBL_EMAIL_COFFEE_BREAK' => 'Verificarea pentru e-mail noi.<br><br>Conturile mari mail poate lua o cantitate considerabilă de timp.',

    'LBL_EMAIL_COMPOSE' => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Vă rugăm să introduceţi destinatar(i) pentru acest e-mail.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Corpul acestu email este gol. Trimiteți oricum?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Acest email nu are subiect. Trimiteți oricum?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(fără subiect)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Vă rugăm să introduceți o adresă de email validă pentru câmpurile Către, CC şi BCC',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Aruncaţi acest email?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Sunteți sigur că doriți să ștergeți această semnătură?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Email trimis',

    'LBL_EMAIL_CREATE_NEW' => '- Creaţi La Salvare -',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiplu',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Gol',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Dată Trimitere după Expeditor',
    'LBL_EMAIL_DATE_TODAY' => 'Astazi',
    'LBL_EMAIL_DELETE' => 'Ștergere',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Stergeți mesajele selectate?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email șters cu succes.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Se Șterge Mesaj',
    'LBL_EMAIL_DETAILS' => 'Detalii',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Numai adresa primară va fi folosită când se lucrează cu Contacte.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Goliți Gunoi',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Se șterge server expediere',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Curățare fișiere cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Nici un e-mail de afișat.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nicio adresă de e-mail de afișat.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Numele dosarului trebuie să fie unic și nu gol. Vă rugăm să încercați din nou.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Nu se poate șterge un folder. Fie dosarul sau copiii săi au e-mailuri sau o casetă de e-mail asociată.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Nu se poate determina folderul dorit din context. Încercați din nou.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Vă rugăm să vă verificați setările.',
    'LBL_EMAIL_ERROR_DESC' => 'Au fost detectate erori: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Nu aveți acces în această zonă. Contactați administratorul site-ului dvs. pentru a obține acces.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Numele dosarelor trebuiesc să fie unice.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Vă rugăm să introduceți criterii de căutare.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'A apărut o eroare',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Mesaj Eliminat din Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Fie mesaj Eliminat de la Server sau mutat într-un alt folder',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Conectarea la serverul de mail a eșuat. Vă rugăm să contactați administratorul',
    'LBL_EMAIL_ERROR_MOVE' => 'Mutarea e-mail între servere și / sau conturile de mail nu este acceptat în acest moment.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Eroare Mutare',
    'LBL_EMAIL_ERROR_NAME' => 'Un nume este necesar.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'De la Adresă este necesar. Vă rugăm să introduceţi o adresă de email validă.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Vă rugăm să furnizați un fișier.',
    'LBL_EMAIL_ERROR_SERVER' => 'O adresă server de mail este necesară.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Contul de mail nu se poate au fost salvate.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'A apărut o eroare în timp ce comunica cu serverul de mail.',
    'LBL_EMAIL_ERROR_USER' => 'Un nume de login este necesar.',
    'LBL_EMAIL_ERROR_PORT' => 'Un server port mail este necesar.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Un protocol server este necesar.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Foldere Monitorizate este necesar.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Folder Gunoi este necesar.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Această informație nu este disponibilă',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nici un server de mail de ieșire specificat.',
    'LBL_EMAIL_ERROR_SENDING' => 'Eroare trimitere Email. Contactați administratorul pentru asistență.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Directoare',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Adăugați',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Adaugă folder nou',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Redenumește folder',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Salvați',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Adaugă acest folder către',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Acest folder nu poate fi schimbat',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Sunteţi sigur că doriţi să ştergeţi acest dosar \nAcest proces nu poate fi inversat? \n Ştergeri nFolder va cascadă la toate folderele conţinute.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nume Dosar Nou',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Vă rugăm să selectați un folder înainte de a efectua această acțiune.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Management directoare',

    'LBL_EMAIL_FORWARD' => 'Retrimite',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Descarcat [[count]] din [[total]] din email-uri',
    'LBL_EMAIL_FROM' => 'Expeditor',
    'LBL_EMAIL_GROUP' => 'grup',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Grup',
    'LBL_EMAIL_HOME_FOLDER' => 'Acasă',
    'LBL_EMAIL_IE_DELETE' => 'Ștergere cont Mail',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Ștergere semnătură',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Sunteți sigur că doriți să ștergeți acest cont de email?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Ştergerea a avut loc cu succes.',
    'LBL_EMAIL_IE_SAVE' => 'Se salvează informațiile contului',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importul e-mail',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importați în SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Setări Import',
    'LBL_EMAIL_INVALID' => 'Invalid',
    'LBL_EMAIL_LOADING' => 'Încărcare...',
    'LBL_EMAIL_MARK' => 'Marcați',
    'LBL_EMAIL_MARK_FLAGGED' => 'Ca Marcat',
    'LBL_EMAIL_MARK_READ' => 'Ca Citit',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Ca Nemarcat',
    'LBL_EMAIL_MARK_UNREAD' => 'Ca Necitite',
    'LBL_EMAIL_ASSIGN_TO' => 'Atribuite Lui',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Creați Director',
    'LBL_EMAIL_MENU_COMPOSE' => 'Compune către',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Ștergere folder',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Curata gunoi',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sincronizează',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Șterge fișierele cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Înlăturați',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Redenumește folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Redenumire folder',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Vă rugăm să faceți o selecție înainte de a încerca această operațiune.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Creați un Folder (la distanță sau în SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Șterge dosar (la distanță sau în SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Goleşte toate folderele coşul de gunoi pentru conturile de mail dvs',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marchează aceste e-mail (e) citește',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Demarchează aceste e-mail (e)',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Redenumește dosar (la distanță sau în SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'mesaje',

    'LBL_EMAIL_ML_NAME' => 'Lista Nume',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Lista Adrese selectate',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Lista Adresele disponibile',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-clic</b> pentru a selecta multipli<br />(Utilizatorii de Mac utilizarea <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Nu',
    'LBL_EMAIL_NOT_SENT' => 'Sistemul este în imposibilitatea de a procesa solicitarea dumneavoastră. Vă rugăm să contactați administratorul de sistem.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Un moment va rog...',
    'LBL_EMAIL_OPEN_ALL' => 'Deschisă mai multor mesaje',
    'LBL_EMAIL_OPTIONS' => 'Opțiuni',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Compuneți rapid',
    'LBL_EMAIL_OPT_OUT' => 'S-a dezabonat',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'A renunțat și este invalid',
    'LBL_EMAIL_PERFORMING_TASK' => 'Efectuarea activității',
    'LBL_EMAIL_PRIMARY' => 'Primar',
    'LBL_EMAIL_PRINT' => 'Tipăriți',

    'LBL_EMAIL_QC_BUGS' => 'Defecte',
    'LBL_EMAIL_QC_CASES' => 'Caz',
    'LBL_EMAIL_QC_LEADS' => 'Pistă',
    'LBL_EMAIL_QC_CONTACTS' => 'Contact',
    'LBL_EMAIL_QC_TASKS' => 'Sarcină',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Oportunitate',
    'LBL_EMAIL_QUICK_CREATE' => 'Creare rapidă',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Reconstruiește dosarele',
    'LBL_EMAIL_RELATE_TO' => 'Relaționat',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Vizualizează dependențe',
    'LBL_EMAIL_RECORD' => 'Înregistrare e-mail',
    'LBL_EMAIL_REMOVE' => 'Înlăturați',
    'LBL_EMAIL_REPLY' => 'Răspunde',
    'LBL_EMAIL_REPLY_ALL' => 'Răspunde tuturor',
    'LBL_EMAIL_REPLY_TO' => 'Răspuns la',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Preluarea Mesaj',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Preluarea înregistrare email',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Vă rugăm să selectați doar o înregistrare de e-mail',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'A reveni la modulul anterior?',
    'LBL_EMAIL_REVERT' => 'Întoarce',
    'LBL_EMAIL_RELATE_EMAIL' => 'Inrudeste Email',

    'LBL_EMAIL_RULES_TITLE' => 'Reguli de management',

    'LBL_EMAIL_SAVE' => 'Salvați',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Salvează & Răspunde',
    'LBL_EMAIL_SAVE_DRAFT' => 'Salvează schița',
    'LBL_EMAIL_DRAFT_SAVED' => 'Proiectul a fost salvat',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Dată de la care',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Dată până când',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nici un rezultat corespund criteriilor de căutare.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Rezultatele căutării',

    'LBL_EMAIL_SELECT' => 'Selectaţi',

    'LBL_EMAIL_SEND' => 'Trimite',
    'LBL_EMAIL_SENDING_EMAIL' => 'Trimite email',

    'LBL_EMAIL_SETTINGS' => 'Setări',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Conturi email',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Formular gol',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Verificați pentru corespondență nouă',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'De la adresa',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresa de e-mail cu notificarea despre testare:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'De la',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Răspunde la adresă',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sincronizează toate conturile de mail',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Un e-mail a fost trimis la adresa de e-mail specificată folosind setările furnizate pentru trimiterea mesajelor. Vă rugăm să verificați dacă e-mailul a fost primit pentru a verifica setările sunt corecte.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'A se vedea tot jurnalul SMTP',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Efectuaţi o sincronizare completă?\nConturile de mail Large poate dura câteva minute.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Faceți clic pe tasta Shift sau tasta Ctrl pentru a selecta mai multe foldere.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Generale',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Creare grup foldere',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Editare grup de foldere',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nume cont mail',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Această setare ar putea necesita o reîmprospătare a paginii, în scopul de a produce efecte.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Preluare cont mail',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Modificările au fost salvate cu succes.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Trimite email-uri în format text simplu',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Email-uri pe pagină',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Setări vizuale',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferințe',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Disponibil utilizator Dosare',
    'LBL_EMAIL_ERROR_PREPEND' => 'O eroare a e-mail-ului a apărut:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serverul de mail de ieșire selectat pentru contul de mail pe care îl utilizați este invalid. Verificați setările sau selectați un alt server de mail pentru contul de mail.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Un server de mail de ieşire nu este configurat pentru a trimite e-mailuri. Vă rugăm să configuraţi un server de mail de ieşire sau selectaţi un server de poştă electronică de ieşire pentru contul de poştă electronică pe care îl utilizaţi în Setări>> Mail.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Semnătura implicită',
    'LBL_EMAIL_SIGNATURES' => 'Semnături',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Mail Yahoo',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Altele',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[dosare la distanță]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[dosare SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'Subiect',
    'LBL_EMAIL_SUCCESS' => 'Succes',
    'LBL_EMAIL_SUITE_FOLDER' => 'Dosar SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Corpul șablonului de e-mail este gol',
    'LBL_EMAIL_TEMPLATES' => 'Șabloane',
    'LBL_EMAIL_TO' => 'La',
    'LBL_EMAIL_VIEW' => 'Vizualizează',
    'LBL_EMAIL_VIEW_HEADERS' => 'Arata antete',
    'LBL_EMAIL_VIEW_RAW' => 'Arata email brut',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Această caracteristică nu este acceptată atunci când sunt utilizate cu POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Text link implicit.',
    'LBL_EMAIL_YES' => 'Da',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Trimite un e-mail de testare',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test e-mail trimis',
    'LBL_EMAIL_MESSAGE_NO' => 'Mesajul nr',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import trecut',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importul a eșuat deoarece fie mesajul este deja importat sau șters de pe server',

    'LBL_LINK_NONE' => 'Niciun',
    'LBL_LINK_ALL' => 'Toate',
    'LBL_LINK_RECORDS' => 'Înregistrări',
    'LBL_LINK_SELECT' => 'Selectaţi',
    'LBL_LINK_ACTIONS' => 'ACȚIUNE',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirmă',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Doriți să închideți acest modul?',
    'LBL_INVALID_FILE_EXTENSION' => 'Extensie de fișier invalida',

    'ERR_AJAX_LOAD' => 'A apărut o eroare:',
    'ERR_AJAX_LOAD_FAILURE' => 'Eroare la procesarea cererii, vă rugăm să încercați mai târziu.',
    'ERR_AJAX_LOAD_FOOTER' => 'În cazul în care această eroare persistă, vă rugăm să contactați administratorul pentru dezactivarea Ajax la acest modul',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Separatorul zecimal nu se poate utiliza acelaşi caracter ca separator de mii.\\n\\n Vă rugăm să modificaţi valorile.',
    'ERR_DELETE_RECORD' => 'Un număr trebuie specificat pentru a șterge înregistrarea.',
    'ERR_EXPORT_DISABLED' => 'Exporturi dezactivate.',
    'ERR_EXPORT_TYPE' => 'Eroare la export ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'adresă de email invalidă.',
    'ERR_INVALID_FILE_REFERENCE' => 'Referință invalidă de fișier',
    'ERR_NO_HEADER_ID' => 'Această caracteristică nu este disponibilă în această temă.',
    'ERR_NOT_ADMIN' => 'Acces de administrare neautorizat.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Câmpurile necesare lipsesc:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Câmpuri necesare invalide:',
    'ERR_INVALID_VALUE' => 'Valoare invalidă:',
    'ERR_NO_SUCH_FILE' => 'Fișierul nu există în sistem',
    'ERR_NO_SINGLE_QUOTE' => 'Nu se pot folosi ghilimele simple pentru ',
    'ERR_NOTHING_SELECTED' => 'Faceți o alegere înainte de a continua.',
    'ERR_SELF_REPORTING' => 'Utilizatorul nu poate să își raporteze lui însuși.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nu s-au găsit înregistrări pentru câmpul: ',
    'ERR_SQS_NO_MATCH' => 'Nicio potrivire',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Vă rugăm să specificați indexul \'cheie\' în atributul displayParams pentru definiția Meta-Data',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Eroare: Numele Portalul este deja alocat pentru altă persoană de contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Valoarea câmpului nu este compatibilă cu o valoare precisă',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'A apărut o eroare atunci când se încearcă salvarea în contul extern.',
    'ERR_NO_DB' => 'Nu s-a putut conecta la baza de date. Vă rugăm să consultați suitecrm.log pentru detalii (0).',
    'ERR_DB_FAIL' => 'Eroare bază de date. Vă rugăm să consultați fișierul suitecrm.log pentru detalii.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} fișierele pot fi utilizate numai cu o bază de date {1} de SuiteCRM.',

    'LBL_ACCOUNT' => 'Cont',
    'LBL_ACCOUNTS' => 'Conturi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Sumar',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Sumar',
    'LBL_ADD_BUTTON' => 'Adăugați',
    'LBL_ADD_DOCUMENT' => 'Adăugați document',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Adăugați la listă țintă',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Adăugați contacte la listă țintă',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Dați click pentru a închide',
    'LBL_ADDITIONAL_DETAILS' => 'Detalii adiționale',
    'LBL_ADMIN' => 'Administrare',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arhivează',
    'LBL_ASSIGNED_TO_USER' => 'Atribuit utilizatorului',
    'LBL_ASSIGNED_TO' => 'Atribuit lui:',
    'LBL_BACK' => 'Înapoi',
    'LBL_BILLING_ADDRESS' => 'Adresa de facturare',
    'LBL_QUICK_CREATE' => 'Creează ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'Bug-uri',
    'LBL_BY' => 'de',
    'LBL_CALLS' => 'Apeluri',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Trimite emailurile pregătite pentru campanie',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Trimite',
    'LBL_CASE' => 'Caz',
    'LBL_CASES' => 'Cazuri',
    'LBL_CHANGE_PASSWORD' => 'Schimbați parola',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Bifează tot',
    'LBL_CITY' => 'Oraș',
    'LBL_CLEAR_BUTTON_LABEL' => 'Curăță',
    'LBL_CLEAR_BUTTON_TITLE' => 'Curăță',
    'LBL_CLEARALL' => 'Anulează tot',
    'LBL_CLOSE_BUTTON_TITLE' => 'Închide',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Închide și creează nou',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Închide și creează nou',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Deschideți Itemi:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Compuneți Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Compuneți Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Da',
    'LBL_SEARCH_DROPDOWN_NO' => 'Nu',
    'LBL_CONTACT_LIST' => 'Lista de contacte',
    'LBL_CONTACT' => 'Contact',
    'LBL_CONTACTS' => 'Contacte',
    'LBL_CONTRACT' => 'Contract',
    'LBL_CONTRACTS' => 'Contracte',
    'LBL_COUNTRY' => 'Țară:',
    'LBL_CREATE_BUTTON_LABEL' => 'Creați',
    'LBL_CREATED_BY_USER' => 'Creat de Utilizator',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_CREATED' => 'Creat de',
    'LBL_CURRENT_USER_FILTER' => 'Doar ce este al meu:',
    'LBL_CURRENCY' => 'Monedă:',
    'LBL_DOCUMENTS' => 'Documente',
    'LBL_DATE_ENTERED' => 'Creat:',
    'LBL_DATE_MODIFIED' => 'Dată Modificare:',
    'LBL_EDIT_BUTTON' => 'Editați',
    'LBL_DUPLICATE_BUTTON' => 'Duplicat',
    'LBL_DELETE_BUTTON' => 'Ștergere',
    'LBL_DELETE' => 'Ștergere',
    'LBL_DELETED' => 'Şters',
    'LBL_DIRECT_REPORTS' => 'Raport direct',
    'LBL_DONE_BUTTON_LABEL' => 'Efectuat',
    'LBL_DONE_BUTTON_TITLE' => 'Efectuat',
    'LBL_FAVORITES' => 'Favorite',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Va rugam selectați un fișier vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard nu are toate câmpurile necesare pentru acest modul. Vă rugăm să consultați suitecrm.log pentru detalii.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Fișierul încărcat depășește limita de 30000 de octeți care s-a specificat în formularul HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Eroare la încărcarea fișierului vCard. Consultați suitecrm.log pentru detalii.',
    'LBL_IMPORT_VCARD' => 'Importați vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importați vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importați vCard',
    'LBL_VIEW_BUTTON' => 'Vizualizează',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Trimite prin email ca PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Trimite prin email ca PDF',
    'LBL_EMAILS' => 'Email-uri',
    'LBL_EMPLOYEES' => 'Angajaţi',
    'LBL_ENTER_DATE' => 'Introduceți data',
    'LBL_EXPORT' => 'Exportă',
    'LBL_FAVORITES_FILTER' => 'Favoritele mele:',
    'LBL_GO_BUTTON_LABEL' => 'Start',
    'LBL_HIDE' => 'Ascunde',
    'LBL_ID' => 'ID-ul',
    'LBL_IMPORT' => 'Importați',
    'LBL_IMPORT_STARTED' => 'Import pornit: ',
    'LBL_LAST_VIEWED' => 'Accesate recent',
    'LBL_LEADS' => 'Piste',
    'LBL_LESS' => 'mai puțin',
    'LBL_CAMPAIGN' => 'Campanie:',
    'LBL_CAMPAIGNS' => 'Campanii',
    'LBL_CAMPAIGNLOG' => 'Jurnal campanii',
    'LBL_CAMPAIGN_CONTACT' => 'Campanii',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Niciun',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Gasite in lansare',
    'LBL_FIXED_IN_RELEASE' => 'Rezolvate in lansare',
    'LBL_LIST_ACCOUNT_NAME' => 'Nume Cont',
    'LBL_LIST_ASSIGNED_USER' => 'Utilizator',
    'LBL_LIST_CONTACT_NAME' => 'Denumire contact',
    'LBL_LIST_CONTACT_ROLE' => 'Rol contact',
    'LBL_LIST_DATE_ENTERED' => 'Data creării',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_LIST_OF' => 'din',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_RELATED_TO' => 'Legat de',
    'LBL_LIST_USER_NAME' => 'Utilizator',
    'LBL_LISTVIEW_NO_SELECTED' => 'Alegeţi cel puţin o înregistrare pentru a continua.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Alegeţi cel puţin două înregistrări pentru a continua.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Înregistrările selectate',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selectate: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Popescu',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Cod Monkey excepțional',
    'LBL_CANCEL' => 'Anulați',
    'LBL_VERIFY' => 'Verificați',
    'LBL_RESEND' => 'Retrimite',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Preluare email',
    'LBL_MASS_UPDATE' => 'Actualizare selecție',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Nu există câmpuri disponibile pentru operațiunea de modificare în masă',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Renunța la e-mail principal',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Abonare la e-mailul principal',
    'LBL_MEETINGS' => 'Întâlniri',
    'LBL_MEETING_GO_BACK' => 'Înapoi la ședință',
    'LBL_MEMBERS' => 'Membri',
    'LBL_MEMBER_OF' => 'Membru a',
    'LBL_MODIFIED_BY_USER' => 'Modificat de utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_MORE' => 'Mai mult',
    'LBL_MY_ACCOUNT' => 'Preferințe',
    'LBL_NAME' => 'Nume',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Creați',
    'LBL_NEW_BUTTON_TITLE' => 'Creați',
    'LBL_NEXT_BUTTON_LABEL' => 'Următor',
    'LBL_NONE' => '-- Niciunul --',
    'LBL_NOTES' => 'Note',
    'LBL_OPPORTUNITIES' => 'Oportunităţi',
    'LBL_OPPORTUNITY_NAME' => 'Nume oportunitate',
    'LBL_OPPORTUNITY' => 'Oportunitate',
    'LBL_OR' => 'SAU',
    'LBL_PANEL_OVERVIEW' => 'Vedere Ansamblu',
    'LBL_PANEL_ASSIGNMENT' => 'Altele',
    'LBL_PANEL_ADVANCED' => 'MAI MULTE INFORMAȚII',
    'LBL_PARENT_TYPE' => 'Tip părinte',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Cod poștal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresă Principală - Oraș:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresă principală - Țară:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresă Principală - Cod Poștal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresă principală - Județ:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresă Principală Stradă 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresă Principală Stradă 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresă principală - Strada:',
    'LBL_PRIMARY_ADDRESS' => 'Adresă Principală:',

    'LBL_PROSPECTS' => 'Prospectați',
    'LBL_PRODUCTS' => 'Produse',
    'LBL_PROJECT_TASKS' => 'Sarcini Proiect',
    'LBL_PROJECTS' => 'Proiecte',
    'LBL_QUOTES' => 'Oferte',

    'LBL_RELATED' => 'Legat de',
    'LBL_RELATED_RECORDS' => 'Înregistrări asociate',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_REPORTS_TO' => 'Raportează lui',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Câmpuri obligatorii',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Efectuat',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Formular complet',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Formular complet',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Salvați & Creați Nou',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Salvați & Creați Nou',
    'LBL_SAVE_OBJECT' => 'Salvați {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Caută',
    'LBL_SEARCH_BUTTON_TITLE' => 'Caută',
    'LBL_FILTER' => 'Filtru',
    'LBL_SEARCH' => 'Caută',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'mai mult',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Formatul de fișier nevalid, numai fișierul imagine poate fi încărcat.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Selectaţi',
    'LBL_SELECT_BUTTON_TITLE' => 'Selectaţi',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Cauta documente',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Cauta documente',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Selectează contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Selectează contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Selectează rapoarte',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Selectează rapoarte',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Selectează utilizator',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Selectează utilizator',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Anulează selecția',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Anulează selecția',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Anulează selecția',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Anulează selecția',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Selectaţi fişierul',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Selectaţi fişierul',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Curăță fișier',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Curăță fișier',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Selectează utilizator',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Selectează utilizator',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Curăță utilizatorul',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Curăță utilizatorul',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Selectați Cont',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Selectați Cont',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Curata cont',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Curata cont',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Alege campanie',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Alege campanie',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Anulează campanie',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Anulează campanie',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Selectează contact',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Selectează contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Anulează contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Anulează contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Alege echipa',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Alege echipa',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Anulează echipa',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Anulează echipa',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resurse utilizate pentru construirea acestei pagini (interogări, fișiere)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secunde.',
    'LBL_SERVER_RESPONSE_TIME' => 'Timp de răspuns:',
    'LBL_SERVER_MEMORY_BYTES' => 'octeți',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilizare memorie server: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilizare:-modulul: {0} - acțiune: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Cel mai înalt vârf de memorie utilizată de server: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresa transport',
    'LBL_SHOW' => 'Arată',
    'LBL_STATE' => 'Stare:',
    'LBL_STATUS_UPDATED' => 'Starea dumneavoastră pentru acest eveniment a fost actualizată!',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Stradă',
    'LBL_SUBJECT' => 'Subiect',

    'LBL_INBOUNDEMAIL_ID' => 'ID Inbound Email',

    'LBL_SCENARIO_SALES' => 'Vânzări',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finanţe',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Management de proiect',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Acest scenariu facilitează gestionarea vânzării de articole',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Acest scenariu facilitează managementul elementelor de marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Acest scenariu facilitează managementul elementelor din departamentul Financiar',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Acest scenariu facilitează managementul elementelor din departamentul Service',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Acest scenariu facilitează managementul elementelor din departamentul Proiecte',

    'LBL_SYNC' => 'Sincronizare',
    'LBL_TABGROUP_ALL' => 'Toate',
    'LBL_TABGROUP_ACTIVITIES' => 'Activităţi',
    'LBL_TABGROUP_COLLABORATION' => 'Colaborare',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Altele',
    'LBL_TABGROUP_SALES' => 'Vânzări',
    'LBL_TABGROUP_SUPPORT' => 'Suport',
    'LBL_TASKS' => 'Sarcini',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arhivează email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arhivează email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Recuperează',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Recuperează',
    'LBL_UNDELETE_BUTTON' => 'Recuperează',
    'LBL_UNDELETE' => 'Recuperează',
    'LBL_UNSYNC' => 'Desincronizează',
    'LBL_UPDATE' => 'Actualizează',
    'LBL_USER_LIST' => 'Lista utilizatori',
    'LBL_USERS' => 'Utilizatori',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Verificarea email-urilor deja existente...',
    'LBL_VERIFY_PORTAL_NAME' => 'Verificare nume portal existent...',
    'LBL_VIEW_IMAGE' => 'vizualizare',

    'LNK_ABOUT' => 'Despre',
    'LNK_ADVANCED_FILTER' => 'Filtru Avansat',
    'LNK_BASIC_FILTER' => 'Filtru Rapid',
    'LBL_ADVANCED_SEARCH' => 'Filtru Avansat',
    'LBL_QUICK_FILTER' => 'Filtru Rapid',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Arata toate',
    'LNK_CLOSE' => 'Închide',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifică filtru curent',
    'LNK_SAVED_VIEWS' => 'Căutări salvate',
    'LNK_DELETE' => 'Ștergere',
    'LNK_EDIT' => 'Editați',
    'LNK_GET_LATEST' => 'Cele mai recente',
    'LNK_GET_LATEST_TOOLTIP' => 'Înlocuiește cu ultima versiune',
    'LNK_HELP' => 'Ajutor',
    'LNK_CREATE' => 'Creați',
    'LNK_LIST_END' => 'Sfârșit',
    'LNK_LIST_NEXT' => 'Următor',
    'LNK_LIST_PREVIOUS' => 'Anterior',
    'LNK_LIST_RETURN' => 'Înapoi la listă',
    'LNK_LIST_START' => 'Început',
    'LNK_LOAD_SIGNED' => 'Semnează',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Înlocuiește cu documentul semnat',
    'LNK_PRINT' => 'Tipăriți',
    'LNK_BACKTOTOP' => 'Înapoi la început',
    'LNK_REMOVE' => 'Înlăturați',
    'LNK_RESUME' => 'Continuă',
    'LNK_VIEW_CHANGE_LOG' => 'Jurnal de modificări',

    'NTC_CLICK_BACK' => 'Întoarceți-vă și reparați eroarea.',
    'NTC_DATE_FORMAT' => '(aaaa-ll-zz)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Sunteți sigur(ă) că vreți să ștergeți înregistrările selectate?',
    'NTC_TEMPLATE_IS_USED' => 'Șablon este folosit în cel puțin o înregistrare de email marketing. Sunteți sigur că doriți să-l ștergeți?',
    'NTC_TEMPLATES_IS_USED' => 'Următoarele șabloane sunt folosite în înregistrările e-mail marketing. Sunteți sigur că doriți să le ștergeți?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur că doriți să ștergeți această înregistrare?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Sunteți sigur ca vreți sa ștergeți ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Sunteți siguri ca vreți sa actualizați ',
    'NTC_DELETE_SELECTED_RECORDS' => ' înregistrarea(rile) selectată?',
    'NTC_LOGIN_MESSAGE' => 'Autentificați-vă.',
    'NTC_NO_ITEMS_DISPLAY' => 'nimic',
    'NTC_REMOVE_CONFIRMATION' => 'Sunteți sigur că doriți să eliminați această relație? Numai relația va fi eliminată. Înregistrarea nu va fi ștearsă.',
    'NTC_REQUIRED' => 'Câmpuri obligatorii',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bine ai venit',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'WARN_UNSAVED_CHANGES' => 'Sunteți pe cale să părăsească acest raport fără a salva modificările pe care le-ați făcut la înregistrare. Sunteți sigur că doriți să navigați departe de acest raport?',
    'ERROR_NO_RECORD' => 'Eroare de acces la înregistrare. Aceasta este ștearsă sau nu sunteți autorizat să o accesați.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Avertisment:</b> Versiunea dumneavoastră de browser-ul nu mai este acceptat sau utilizați un browser neacceptat. <p></p> Sunt recomandate următoarele versiuni de browser-ul: <p></p> <ul><li>Internet Explorer 10 (Vizualizare mod compatibilitate neacceptată) <li>Firefox 32.0 <li>Safari 5.1 <li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Avertisment:</b> Browser-ul este în Vizualizare mod compatibilitate IE care nu este acceptat.',
    'ERROR_TYPE_NOT_VALID' => 'Eroare. Acest tip nu este valabil.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'Găsește duplicate',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Administrează abonamente',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestionați abonamentul pentru ',
    // Ajax status strings
    'LBL_LOADING' => 'Încărcare...',
    'LBL_SEARCHING' => 'Căutare...',
    'LBL_SAVING_LAYOUT' => 'Se salvează schema...',
    'LBL_SAVED_LAYOUT' => 'Aranjarea în pagină s-a salvat.',
    'LBL_SAVED' => 'Salvat',
    'LBL_SAVING' => 'Salvare',
    'LBL_DISPLAY_COLUMNS' => 'Afișează coloanele',
    'LBL_HIDE_COLUMNS' => 'Ascunde coloanele',
    'LBL_SEARCH_CRITERIA' => 'Criterii de căutare',
    'LBL_SAVED_VIEWS' => 'Vizualizări salvate',
    'LBL_PROCESSING_REQUEST' => 'Procesare...',
    'LBL_REQUEST_PROCESSED' => 'Efectuat',
    'LBL_AJAX_FAILURE' => 'Solicitare Ajax eșuată',
    'LBL_MERGE_DUPLICATES' => 'Suprascrie duplicate',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Filtrele mele',
    'LBL_SEARCH_POPULATE_ONLY' => 'Căutare pe baza formularului de mai sus',
    'LBL_DETAILVIEW' => 'Detalii',
    'LBL_LISTVIEW' => 'Lista',
    'LBL_EDITVIEW' => 'Editare',
    'LBL_BILLING_STREET' => 'Strada:',
    'LBL_SHIPPING_STREET' => 'Strada:',
    'LBL_SEARCHFORM' => 'Formulare de căutare',
    'LBL_SAVED_SEARCH_ERROR' => 'Dați un nume acestei vederi.',
    'LBL_DISPLAY_LOG' => 'Arata jurnal',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistem',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Expirare sesiune',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sesiunea ta este pe cale să expire în 2 minute. Vă rugăm să salvați munca ta.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Sesiunea dvs. a expirat.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Întâlnire',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Apel',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Timp: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Locație: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Descriere: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Asociat cu: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Eveniment',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Evenimentul nu este specificat.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Locația nu este specificată.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Data de început nu este definită.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nu a fost găsit nici un rezultat.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Niciun rezultat găsit... Poate schimba criteriul de căutare și încercați din nou?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Nu s-au găsit rezultate pentru <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Creează <item1>ca element <item2>nou',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'sau schimbă criteriul de căutare',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'În prezent nu aveţi înregistrări salvate. <item2> sau <item3> acum.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Adaugă la favoritele mele',
    'LBL_CREATE_CONTACT' => 'Creează Contact',
    'LBL_CREATE_CASE' => 'Creați Caz',
    'LBL_CREATE_NOTE' => 'Crează o notă',
    'LBL_CREATE_OPPORTUNITY' => 'Creează oportunitate',
    'LBL_SCHEDULE_CALL' => 'Nou apel',
    'LBL_SCHEDULE_MEETING' => 'Programare Întâlnire',
    'LBL_CREATE_TASK' => 'Creați Sarcină',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generați formular',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Salvați formularul Web',
    'LBL_AVAILABLE_FIELDS' => 'Câmpuri disponibile',
    'LBL_FIRST_FORM_COLUMN' => 'Prima coloană a formularului',
    'LBL_SECOND_FORM_COLUMN' => 'A doua coloana a formularului',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Lipsește câmpul obligatoriu: atribuit la',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Lipsește câmpul obligatoriu: Campanie comuna',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Pentru a crea formularul web ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Trimiterea acestui formular va crea ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Adaugați toate câmpurile',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Resetează toate câmpurile',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Eliminați toate câmpurile',
    'LBL_NEXT_BTN' => 'Următor',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Numai imagini de tip JPG sau PNG pot fi incorporate.',
    'LBL_TRAINING' => 'Forum de asistență',
    'ERR_MSSQL_DB_CONTEXT' => 'Schimbat context baza de date',
    'ERR_MSSQL_WARNING' => 'Avertizare:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Eroare: Fișierul [[file]] lipsește. Nu se poate crea deoarece nu a fost găsit niciun fișier HTML corespunzător.',
    'ERR_CANNOT_FIND_MODULE' => 'Eroare: Modulul [module] nu există.',
    'LBL_ALT_ADDRESS' => 'Altă Adresă:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Eroare: Numărul de argumente pentru elementele \'key\' și \'copy\' din matricea displayParams nu este egal.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generale',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtre',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Doar ce este al meu',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titlu',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afișează rândurile',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Ați atins numărul maxim de SuiteCRM Dashlets setat de administratorul dumneavoastră. Vă rugăm să scoateți un Dashlet pentru a adăuga mai mult.',
    'LBL_ADDING_DASHLET' => 'Adăugare Dashlet SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Dashlet-ul a fost adăugat',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Sunteți sigur că doriți să ștergeți acest Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Se înlătura un Dashlet...',
    'LBL_REMOVED_DASHLET' => 'Dashlet-ul a fost înlăturat',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Încărcare pagină, vă rugăm să aşteptaţi...',

    'LBL_RELOAD_PAGE' => 'Vă rugăm <a href="javascript: window.location.reload()">reîncărcați fereastra </a> pentru a folosi acest Dashlet SuiteCrm.',
    'LBL_ADD_DASHLETS' => 'Adăugați Dashlet-uri',
    'LBL_CLOSE_DASHLETS' => 'Închide',
    'LBL_OPTIONS' => 'Opțiuni',
    'LBL_1_COLUMN' => '1 coloana',
    'LBL_2_COLUMN' => '2 coloane',
    'LBL_3_COLUMN' => '3 coloane',
    'LBL_PAGE_NAME' => 'Nume Pagina',

    'LBL_SEARCH_RESULTS' => 'Rezultatele căutării',
    'LBL_SEARCH_MODULES' => 'Modul',
    'LBL_SEARCH_TOOLS' => 'Utilitare',
    'LBL_SEARCH_HELP_TITLE' => 'Sfaturi de căutare',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Fără imagine',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copiază adresa din partea stângă:',
    'LBL_SAVE_AND_CONTINUE' => 'Salvează și continuă',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Controale de selecție multiplă</strong></p><ul> <li>Faceți clic pe valori pentru a selecta un atribut.</li> <li>Ctrl-click&nbsp;pentru&nbsp;a selecta mai multe. Utilizatorii Mac utilizează CMD-click.</li> <li>Pentru a selecta toate valorile dintre două atribute,&nbsp; faceți clic pe prima valoare&nbsp;și apoi apăsați Shift-click pe ultima valoare.</li></ul><p><strong>Căutare avansată și opțiuni de aspect</strong><br><br>Folosind opțiunea <b>Căutare și aspect salvat</b>, puteți salva un set de parametri de căutare și/sau un aspect personalizat de vizualizare a listei pentru a obține rapid rezultatele căutate în viitor. Puteți salva un număr nelimitat de căutări și aspecte personalizate. Toate căutările salvate apar după nume în lista Căutări salvate, iar ultima căutare salvată încărcată apare în partea de sus a listei.<br><br>Pentru a personaliza aspectul vizualizării listei, utilizați casetele Ascunde coloane și Afișează coloane pentru a selecta ce câmpuri să fie afișate în rezultatele căutării. De exemplu, puteți vizualiza sau ascunde detalii precum numele înregistrării, utilizatorul atribuit și echipa atribuită în rezultatele căutării. Pentru a adăuga o coloană la Vizualizarea listei, selectați câmpul din lista Ascunde coloane și utilizați săgeata la stânga pentru a o muta în lista Afișează coloane. Pentru a elimina o coloană din Vizualizarea listei, selectați-o din lista Afișează coloane și utilizați săgeata la dreapta pentru a o muta în lista Ascunde coloane.<br><br>Dacă salvați setările de aspect, le puteți încărca oricând pentru a vizualiza rezultatele căutării în aspectul personalizat.<br><br>Pentru a salva și actualiza o căutare și/sau un aspect:<ol><li>Introduceți un nume pentru rezultatele căutării în câmpul <b>Salvează această căutare ca</b> și faceți clic pe <b>Salvează</b>. Numele apare acum în lista Căutări salvate lângă butonul <b>Șterge</b>.</li><li>Pentru a vizualiza o căutare salvată, selectați-o din lista Căutări salvate. Rezultatele căutării sunt afișate în Vizualizarea listei.</li><li>Pentru a actualiza proprietățile unei căutări salvate, selectați căutarea salvată din listă, introduceți noile criterii de căutare și/sau opțiunile de aspect în zona Căutare avansată și faceți clic pe <b>Actualizează</b> lângă <b>Modifică căutarea curentă</b>.</li><li>Pentru a șterge o căutare salvată, selectați-o din lista Căutări salvate, faceți clic pe <b>Șterge</b> lângă <b>Modifică căutarea curentă</b> și apoi faceți clic pe <b>OK</b> pentru a confirma ștergerea.</li></ol><p><strong>Sfaturi</strong><br><br>Folosind % ca operator wildcard, puteți extinde căutarea. De exemplu, în loc să căutați doar rezultate egale cu "Mere", puteți modifica căutarea în "Mere%", ceea ce ar corespunde tuturor rezultatelor care încep cu cuvântul Mere, dar pot conține și alte caractere.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Eroare: limita cozii de $limit a ajuns la limita de $module modul.',
    'ERROR_NOTIFY_OVERRIDE' => 'Eroare: ResourceObserver-> informează () trebuie să fie înlocuite.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Eroare: Nu s-a putut crea monitorizeze deoarece fișierul de metadate este gol sau fișier nu există.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Eroare: Nu există nici un monitor configurat pentru denumirii solicitate',
    'ERR_UNDEFINED_METRIC' => 'Eroare: Imposibil de stabilit o valoare pentru metric nedefinite',
    'ERR_STORE_FILE_MISSING' => 'Eroare: Nu s-a putut găsi fișierul de implementare a magazinului',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'Id Utilizator',
    'LBL_MODULE_NAME' => 'Nume Modul',
    'LBL_ITEM_ID' => 'Id-ul articolului',
    'LBL_ITEM_SUMMARY' => 'Sumar articolul',
    'LBL_ACTION' => 'Acţiune',
    'LBL_SESSION_ID' => 'Id Sesiune',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack creat pentru Id-ul utilizatorului {0}',
    'LBL_VISIBLE' => 'Înregistrare vizibilă',
    'LBL_DATE_LAST_ACTION' => 'Data ultimei acțiuni',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'nu este înainte',
    'MSG_IS_MORE_THAN' => 'este mai mult decât',
    'MSG_SHOULD_BE' => 'ar trebui să',
    'MSG_OR_GREATER' => 'sau mai mare',

    'LBL_LIST' => 'Listează',
    'LBL_CREATE_BUG' => 'A crea un bug',

    'LBL_OBJECT_IMAGE' => 'imagine obiect',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Selectează data',

    'LBL_VALIDATE_RANGE' => 'nu este in gama apropiata',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Alegeți atât un interval de început, cât și un interval de sfârșit',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Alegeți atât intrările de început, cât și cele de sfârșit',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Toate',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Eroare: Numărul Array a parametrului de fasole nu se potrivește cu numărul Array a rezultatelor.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Eroare: lipsă de intrare pentru modulul de cartografiere.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Eroare: Imposibil de preluat datele pentru {0} Conector. Serviciul poate fi momentan inaccesibil sau setările de configurare pot fi incorecte. Mesaj de eroare conector: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pentru o experiență optimă folosind IIS/FastCGI sapi, setați fastcgi.logging la 0 în fișierul dvs. php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nume',
    'LBL_COLLECTION_PRIMARY' => 'Primar',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Câmp obligatoriu este gol',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_DESCRIPTION' => 'Descriere',

    'LBL_YESTERDAY' => 'ieri',
    'LBL_TODAY' => 'astăzi',
    'LBL_TOMORROW' => 'mâine',
    'LBL_NEXT_WEEK' => 'săptămâna următoare',
    'LBL_NEXT_MONDAY' => 'lunea viitoare',
    'LBL_NEXT_FRIDAY' => 'vinerea viitoare',
    'LBL_TWO_WEEKS' => 'două săptămâni',
    'LBL_NEXT_MONTH' => 'luna următoare',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'prima zi a lunii viitoare',
    'LBL_THREE_MONTHS' => 'trei luni',
    'LBL_SIXMONTHS' => 'șase luni',
    'LBL_NEXT_YEAR' => 'anul următor',

    //Datetimecombo fields
    'LBL_HOURS' => 'Ore',
    'LBL_MINUTES' => 'Minute',
    'LBL_MERIDIEM' => 'Meridian',
    'LBL_DATE' => 'Dată',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Împrospătare-Automată',

    'LBL_DURATION_DAY' => 'zi',
    'LBL_DURATION_HOUR' => 'oră',
    'LBL_DURATION_MINUTE' => 'minut',
    'LBL_DURATION_DAYS' => 'zile',
    'LBL_DURATION_HOURS' => 'Durata in ore',
    'LBL_DURATION_MINUTES' => 'Durata în minute',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Alegeți luna',
    'LBL_ENTER_YEAR' => 'Introduceți anul',
    'LBL_ENTER_VALID_YEAR' => 'Vă rugăm introduceți un an valabil',

    //File write error label
    'ERR_FILE_WRITE' => 'Eroare: Nu s-a putut scrie fișierul {0}. Vă rugăm să verificați permisiunile de sistem și serverul de web.',
    'ERR_FILE_NOT_FOUND' => 'Eroare: Nu s-a putut încărca fișierul {0}. Vă rugăm să verificați permisiunile de sistem și serverul de web.',

    'LBL_AND' => 'Și',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fișier de pe sursă externă',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Securitate',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Acesta este un exemplu de fișier de import care oferă un exemplu de conținut preconizat al unui fișier care este gata de import".
"Fișierul este un fișier .csv delimitat prin virgulă, folosind ghilimele duble ca calificativ de domeniu."

"Rândul antetului este rândul cel mai de sus din fișier și conține etichetele de câmp așa cum le vedeți în aplicație."
"Aceste etichete sunt utilizate pentru maparea datelor din fișier în câmpurile din aplicație."

"Note: Numele de baze de date ar putea fi de asemenea folosite în rândul antetului. Acest lucru este util atunci când utilizați phpMyAdmin sau alt instrument de bază de date pentru a furniza o listă de date exportată pentru a fi importată."
"Ordinea coloanelor nu este critică, deoarece procesul de importare se potrivește cu datele corespunzătoare câmpurilor corespunzătoare pe rândul antet."


"Pentru a utiliza acest fișier ca șablon, procedați în felul următor:"
"1. Eliminați rândurile de date de probă"
"2. Eliminați textul de ajutor pe care îl citiți chiar acum"
"3. Introduceți propriile date în rândurile și coloanele corespunzătoare"
"4. Salvați fișierul într-o locație cunoscută în sistemul dvs."
"5. Faceți clic pe opțiunea Import din meniul Acțiuni din aplicație și alegeți fișierul pentru a încărca"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Nu exista notificări curente',
    'LBL_ALT_SORT_DESC' => 'Sortați descrescător',
    'LBL_ALT_SORT_ASC' => 'Sortați crescător',
    'LBL_ALT_SORT' => 'Sortați',
    'LBL_ALT_SHOW_OPTIONS' => 'Arată opțiuni',
    'LBL_ALT_HIDE_OPTIONS' => 'Ascundeți Opţiuni',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Muta intrarea selectată în lista din stânga',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Muta intrarea selectată la lista din dreapta',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Mută intrarea selectată mai sus in listă',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Mută intrarea selectată mai jos in listă',
    'LBL_ALT_INFO' => 'Informații',
    'MSG_DUPLICATE' => 'Înregistrarea {0} pe care urmează să o creezi poate fi un duplicat al unei înregistrări {0} deja existențe. {1} înregistrările cu nume similare sunt listate mai jos.<br>Apasă Crează {1} pentru a crea acest nou {0}, sau selectează unul existent {0} listat mai jos.',
    'MSG_SHOW_DUPLICATES' => 'Înregistrarea {0} pe care urmează să o creezi poate fi un duplicat al unei înregistrări {0} deja existențe. {1} înregistrările cu nume similare sunt listate mai jos. Apasă Salvează pentru a continua crearea acestui nou {0}, sau apasă Anulare pentru a reveni la modul fără a crea {0}.',
    'LBL_EMAIL_TITLE' => 'adresă email',
    'LBL_EMAIL_OPT_TITLE' => 'renunțat la adresa de email',
    'LBL_EMAIL_INV_TITLE' => 'adresa de email nevalidă',
    'LBL_EMAIL_PRIM_TITLE' => 'Setează ca adresă de e-mail principală',
    'LBL_SELECT_ALL_TITLE' => 'Selectează tot',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Selectează acest rând',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'EROARE: A fost o eroare în timpul încărcării. Cod de eroare: {0} -{1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'EROARE: A fost o eroare în timpul încărcării. Cod de eroare: {0} -{1} Mărimea maxima de upload este {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'EROARE: A fost o eroare în timpul încărcării, contactați administratorul.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Dimensiunea de încărcare ({0} octeți) a depășit permis maxim: {1} octeți',
    'UPLOAD_REQUEST_ERROR' => 'A apărut o eroare. Vă rugăm să reîmprospătați pagina și încercați din nou.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Editați',
    'LBL_EDIT_BUTTON_TITLE' => 'Editați',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplicat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplicat',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Ștergere',
    'LBL_DELETE_BUTTON_TITLE' => 'Ștergere',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Acţiune',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Salvați',
    'LBL_SAVE_BUTTON_TITLE' => 'Salvați',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Anulați',
    'LBL_CANCEL_BUTTON_TITLE' => 'Anulați',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'conectorul matrice în {0} a fost definit incorect sau este gol și nu a putut fi folosit.',
    'ERR_SUHOSIN' => 'Fluxul de încărcare este blocat de către Suhosin, va rugăm &quot;încărcați&quot; în suhosin.executor.include.whitelist (Vezi suitecrm.log pentru mai multe informații)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Răspuns greșit de la server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Ofertă',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Preț de vânzare',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manual',
        '5' => 'Fiecare 5 minute',
        '15' => 'La fiecare 15 minute',
        '30' => 'La fiecare 30 de minute',
        '60' => 'În fiecare oră',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Un memento este gol sau incorect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Mementoul nu este setat pentru pop-up sau email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Nu sunt invitații pentru memento.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Mementoul nu include nici o invitație, dorești să ștergi mementoul?',
    'LBL_DELETE_REMINDER' => 'Ştergeți Memento',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Selectați coloane',
    'LBL_COLUMN_CHOOSER' => 'Selector Coloane',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Salvați modificări',
    'LBL_DISPLAYED' => 'Afișate',
    'LBL_HIDDEN' => 'Ascuns',
    'ERR_EMPTY_COLUMNS_LIST' => 'Cel puțin un element necesar',

    'LBL_FILTER_HEADER_TITLE' => 'Filtru',

    'LBL_CATEGORY' => 'Categorie',
    'LBL_LIST_CATEGORY' => 'Categorie',
    'ERR_FACTOR_TPL_INVALID' => 'Mesajul de autentificare Factor este invalid, te rugăm să contactezi administratorul.',
    'LBL_SUBTHEMES' => 'Stil',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Răsărit',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Zi',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Amurg',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Noapte',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Amiază',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Nerespectarea proiectului',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Această operație va șterge acest e-mail, doriți să continuați?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Părăsiți formularul',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Prin părăsirea formularului toate informațiile introduse vor fi pierdute, doriți să continuați?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Aplică un șablon de e-mail',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Această operațiune va suprascrie corpul de e-mail și câmpurile Subiect, doriți să continuați?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmat de înscriere',
    'LBL_OPT_IN_TITLE' => 'Opt In',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Dată De Înscriere Confirmată',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Dată De Înscriere Confirmată Trimisă',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Dată de înscriere eșuată',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Token de confirmare înregistrare',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Șablonul de e-mail de înscriere nu este configurat. Vă rugăm să-l configurați în setările de e-mail.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In necesită ca e-mailul să fie legat de cont / contact / plumb / țintă',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Grup Non-Transmisibil',
    'LBL_PRIMARY_GROUP' => "Grupul primar",

    // footer
    'LBL_SUITE_TOP' => 'Înapoi la început',
    'LBL_SUITE_SUPERCHARGED' => 'Propulsat de SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Creat de SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'SuiteCRM a fost scris și asamblat de <a href="https://salesagility. com"> SalesAgility </a>. Programul este furnizat ca atare, fără garanție. Licențiată în conformitate cu AGPLv3.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Resetare parolă',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirmați opțiunea Opt In a e-mailului numai pentru Conturi / Persoane de contact / Persoane / Perspective',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirmarea opțiunii Opt In a e-mailului este dezactivată, activați opțiunea Confirmare Opt In în Setările de e-mail sau contactați administratorul.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Librărie';
$app_list_strings['moduleList']['EmailAddresses'] = 'Adresă Email';
$app_list_strings['project_priority_default'] = 'Medie';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Ridicată',
    'Medium' => 'Medie',
    'Low' => 'Scăzut',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consimțământ',
    'contract' => 'Contract',
    'legal_obligation' => 'Obligație legală',
    'protection_of_interest' => 'Protejarea interesului',
    'public_interest' => 'Interes public',
    'legitimate_interest' => 'Interes legitim',
    'withdrawn' => 'Retras',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Site Web',
    'phone' => 'Telefon',
    'given_to_user' => 'Acordat utilizatorului',
    'email' => 'Email',
    'third_party' => 'Terță Parte',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Bază de cunoștințe';

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
    'BOUVET ISLAND' => 'INSULA BOUVET',
    'BRAZIL' => 'BRAZILIA',
    'BRITISH ANTARCTICA TERRITORY' => 'TERITORIUL BRITANICA ANTARCTICA',
    'BRITISH INDIAN OCEAN TERRITORY' => 'TERITORIUL BRITANICA DIN OCEANUL INDIAN',
    'BRITISH VIRGIN ISLANDS' => 'INSULELE VRIGINE BRITANICE',
    'BRITISH WEST INDIES' => 'INDIILE DE VEST BRITANICE',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'INSULELE CANARE',
    'CAPE VERDI ISLANDS' => 'INSULELE CAPE VERDI',
    'CAYMAN ISLANDS' => 'INSULELE CAYMAN',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'INSULA CHANNEL DIN MAREA BRITANIE',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'INSULA CHRISTMAS',
    'COCOS (KEELING) ISLAND' => 'INSULA COCOS (KEELING)',
    'COLOMBIA' => 'Columbia',
    'COMORO ISLANDS' => 'INSULELE COMORO',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'INSULELE COOK',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CIPRU',
    'CZECH REPUBLIC' => 'Republica Cehă',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'Danemarca',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'Republica Dominicană',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'Ecuador',
    'EGYPT' => 'Egipt',
    'EL SALVADOR' => 'El Salvador',
    'EQUATORIAL GUINEA' => 'GUINEEA ECUATORIALĂ',
    'ESTONIA' => 'Estonia',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'INSULELE FEROE',
    'FALKLAND ISLANDS' => 'Insulele Falkland',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLANDA',
    'FRANCE' => 'FRANŢA',
    'FRENCH GUIANA' => 'Guiana Franceză',
    'FRENCH POLYNESIA' => 'Polinezia Franceză',
    'GABON' => 'Gabon',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANIA',
    'GHANA' => 'Ghana',
    'GIBRALTAR' => 'Gibraltar',
    'GREECE' => 'GRECIA',
    'GREENLAND' => 'Groenlanda',
    'GUADELOUPE' => 'Guadeloupe',
    'GUAM' => 'Guam',
    'GUATEMALA' => 'Guatemala',
    'GUINEA' => 'Guinea',
    'GUYANA' => 'Guiana',
    'HAITI' => 'Haiti',
    'HONDURAS' => 'Honduras',
    'HONG KONG' => 'Hong Kong',
    'HUNGARY' => 'Ungaria',
    'ICELAND' => 'Islanda',
    'IFNI' => 'IFNI',
    'INDIA' => 'India',
    'INDONESIA' => 'INDONEZIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'Irak',
    'IRELAND' => 'Irlanda',
    'ISRAEL' => 'Israel',
    'ITALY' => 'Italia',
    'IVORY COAST' => 'IVORY COAST',
    'JAMAICA' => 'Jamaica',
    'JAPAN' => 'Japonia',
    'JORDAN' => 'Iordania',
    'KAZAKHSTAN' => 'KAZAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'COREA',
    'KOREA, SOUTH' => 'COREA DE SUD',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KYRGYZSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETONIA',
    'LEBANON' => 'LIBAN',
    'LEEWARD ISLANDS' => 'INSULELE LEEWARD',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBIA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITUANIA',
    'LUXEMBOURG' => 'LUXEMBURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONĂ',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAEZIA',
    'MALDIVES' => 'MALDIVE',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MAURITIUS',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MOLDOVIA',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROC',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'OLANDA',
    'NETHERLANDS ANTILLES' => 'ANTILELE OLANDEZE',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ANTILELE OLANDEZE DIN ZONELE NEUTRE',
    'NEW CALADONIA' => 'NOUA CALADONIE',
    'NEW HEBRIDES' => 'EBRIDELE NOI',
    'NEW ZEALAND' => 'Noua Zeelandă',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'Insula Norfolk',
    'NORWAY' => 'NORVEGIA',
    'OMAN' => 'OMAN',
    'OTHER' => 'Altele',
    'PACIFIC ISLAND' => 'INSULA PACIFIC',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NOUA GUINEE',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPINE',
    'POLAND' => 'POLONIA',
    'PORTUGAL' => 'PORTUGALIA',
    'PORTUGUESE TIMOR' => 'TIMORUL DE EST',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLICA BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLICA AFRICA DE SUD',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMÂNIA',
    'RUSSIA' => 'RUSIA',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'INSULELE RYUKYU',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'ARABIA SAUDITA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVACIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILAND',
    'SOUTH AFRICA' => 'AFRICA DE SUD',
    'SOUTH YEMEN' => 'YEMENUL DE SUD',
    'SPAIN' => 'SPANIA',
    'SPANISH SAHARA' => 'SAHARA SPANIOLA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT KITTS ȘI NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'AFRICA DE SUDVEST',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SUEDIA',
    'SWITZERLAND' => 'ELVEȚIA',
    'SYRIA' => 'SIRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TAJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILANDA',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURCIA',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UCRAINA',
    'UNITED ARAB EMIRATES' => 'EMIRATELE ARABE UNITE',
    'UNITED KINGDOM' => 'REGATUL UNIT',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'INSULA PACIFICULUI - SUA',
    'US VIRGIN ISLANDS' => 'INSULELE VRIGINE - SUA',
    'USA' => 'SUA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VATICAN',
    'VATICAN CITY' => 'CETATEA VATICANULUI',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'INSULA WAKE',
    'WEST INDIES' => 'INDIILE DE VEST',
    'WESTERN SAHARA' => 'SAHARA DE VEST',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIR',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan și Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS chirilic)',
    'CP1252' => 'CP1252 (MS Western European & US)',
    'EUC-CN' => 'EUC-CN (chineză simplificată GB2312)',
    'EUC-JP' => 'EUC-JP (Unix japoneză)',
    'EUC-KR' => 'EUC-KR (coreeană)',
    'EUC-TW' => 'EUC-TW (TAIVANEZĂ)',
    'ISO-2022-JP' => 'ISO-2022-JP (JAPONEZĂ)',
    'ISO-2022-KR' => 'ISO-2022-KR (COREEANĂ)',
    'ISO-8859-1' => 'ISO-8859-1 (EUROPA DE VEST ȘI SUA)',
    'ISO-8859-2' => 'ISO-8859-2 (EUROPA CENTRALĂ ȘI DE EST)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-3 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (CHIRILICĂ)',
    'ISO-8859-6' => 'ISO-8859-6 (ARABĂ)',
    'ISO-8859-7' => 'ISO-8859-7 (GREACĂ)',
    'ISO-8859-8' => 'ISO-8859-8 (EBRAIC)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (rus chirilic)',
    'KOI8-U' => 'KOI8-U (Chirilic ucrainian)',
    'SJIS' => 'SJIS (MS japoneză)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Alger',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Oceanul Atlantic/Capul Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Oceanul Indian/Comore',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazilia',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Djibouti',
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'Africa/Addis Abeba',
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
    'Africa/El_Aaiun' => 'Africa/El-Aaiun',
    'Africa/Maputo' => 'Africa/Malabo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Ndjamena',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St. Helena',
    'Africa/Sao_Tome' => 'Africa/Sao Tomé',
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Malabo',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Roma',
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
    'Asia/Dili' => 'Asia/Dubai',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'Asia/Teheran',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Ierusalim',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seul',
    'Asia/Pyongyang' => 'Asia/Chongqing',
    'Asia/Kuwait' => 'Asia/Dubai',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'India/Maldive',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Dhaka',
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
    'Pacific/Port_Moresby' => 'Pacific/Portul Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago-Pago',
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
    'Europe/London' => 'Europa/Londra',
    'Europe/Dublin' => 'Europa/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europa/Tirana',
    'Europe/Andorra' => 'Europa/Andorra',
    'Europe/Vienna' => 'Europa/Viena',
    'Europe/Minsk' => 'Europa/Minsk',
    'Europe/Brussels' => 'Europa/Bruxelles',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa / Praga',
    'Europe/Copenhagen' => 'Europa/Copenhaga',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europa/Paris',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibraltarul',
    'Europe/Athens' => 'Europa/Atena',
    'Europe/Budapest' => 'Europa/Budapesta',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'Europa/Roma',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europa/Luxemburg',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Chisinau' => 'Europa/Chișinău',
    'Europe/Monaco' => 'Europa/Monaco',
    'Europe/Amsterdam' => 'Europa/Amsterdam',
    'Europe/Oslo' => 'Europa/Oslo',
    'Europe/Warsaw' => 'Europa/Varșovia',
    'Europe/Lisbon' => 'Europa/Lisabona',
    'Atlantic/Azores' => 'Atlantic/Azore',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europa/București',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Moscova',
    'Europe/Samara' => 'Europa/Samara',
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
    'Europe/Belgrade' => 'Europa/Belgrad',
    'Europe/Madrid' => 'Europa/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Europe/Stockholm' => 'Europa/Stockholm',
    'Europe/Zurich' => 'Europa/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europa/Kiev',
    'Europe/Uzhgorod' => 'Europa/Uzhgorod',
    'Europe/Zaporozhye' => 'Europa/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'America/New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/Dakota/Centru',
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
    'America/Glace_Bay' => 'America/Glace_Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder_Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy_River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson Creek',
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
    'Atlantic/Bermuda' => 'Atlantic/Bermude',
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
    'America/Martinique' => 'America/Martinica',
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
    'America/Argentina/La_Rioja' => 'America/Argentina/La-Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San-Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio-Gallegos',
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
    'America/Porto_Velho' => 'America/Porto-Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
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
    'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'Mergi la întâlnire',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Documente Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contacte Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Cerere',
    2 => 'Accesează',
    3 => 'Invalid',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campanie',
    'email' => 'Email',
    'event' => 'Eveniment',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campanie',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campanie',
    'email' => 'Email',
    'event' => 'Eveniment',
    'system' => 'Sistem',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Bază de cunoștințe';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'Categorii KB';
$app_list_strings['aok_status_list']['Draft'] = 'Schiță';
$app_list_strings['aok_status_list']['Expired'] = 'Expirat';
$app_list_strings['aok_status_list']['In_Review'] = 'În Revizuire';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privat';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = 'Evenimente';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Locații';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invitat';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Neinvitat';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Participat';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Nu A Participat';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Acceptat';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Refuzat';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nici un răspuns';

$app_strings['LBL_STATUS_EVENT'] = 'Statusul invitației';
$app_strings['LBL_ACCEPT_STATUS'] = 'Status Acceptare';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Pagina curentă';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Lista întreagă';
$app_strings['LBL_LISTVIEW_NONE'] = 'De selectează totul';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Eveniment Index';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Evenimente caz';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Actualizări Cazuri';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Vă rugăm să răspundeți deasupra acestei linii ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Deschis';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Deschis',
        'Closed' => 'Închis',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nou',
        'Open_Assigned' => 'Atribuită',
        'Closed_Closed' => 'Închis',
        'Open_Pending Input' => 'În Aşteptare Input',
        'Closed_Rejected' => 'Respins',
        'Closed_Duplicate' => 'Duplicat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Singur Utilizator',
        'Account' => 'Utilizator De Cont',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Sistem implicit',
    'singleUser' => 'Singur Utilizator',
    'roundRobin' => 'Pe rând',
    'leastBusy' => 'Cel Mai Puțin Ocupat',
    'random' => 'Aleator',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapoarte';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Condiții ale raportului';
$app_list_strings['moduleList']['AOR_Charts'] = 'Diagrame de raport';
$app_list_strings['moduleList']['AOR_Fields'] = 'Câmpuri raport';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Rapoarte Programate';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Egal cu';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Nu este egal cu';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Mai Mare Decât';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mai Puţin de';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Mai mare sau egal cu';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mai mic sau egal cu';
$app_list_strings['aor_operator_list']['Contains'] = 'Conține';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Începe cu';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Se termină cu';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'a-l-z';
$app_list_strings['aor_format_options']['m-d-Y'] = 'l-z-a';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'alz';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'Și';
$app_list_strings['aor_condition_operator_list']['OR'] = 'SAU';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valoare';
$app_list_strings['aor_condition_type_list']['Field'] = 'Câmp';
$app_list_strings['aor_condition_type_list']['Date'] = 'Dată';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Unul din';
$app_list_strings['aor_condition_type_list']['Period'] = 'Perioada';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utilizatorul curent';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minute';
$app_list_strings['aor_date_type_list']['hour'] = 'Ore';
$app_list_strings['aor_date_type_list']['day'] = 'Zile';
$app_list_strings['aor_date_type_list']['week'] = 'Săptămâni';
$app_list_strings['aor_date_type_list']['month'] = 'Luni';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Programul de lucru';
$app_list_strings['aor_date_options']['now'] = 'Acum';
$app_list_strings['aor_date_options']['field'] = 'Acest câmp';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascendent';
$app_list_strings['aor_sort_operator']['DESC'] = 'Descendent';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Număra';
$app_list_strings['aor_function_list']['MIN'] = 'Minim';
$app_list_strings['aor_function_list']['MAX'] = 'Maxim';
$app_list_strings['aor_function_list']['SUM'] = 'Suma';
$app_list_strings['aor_function_list']['AVG'] = 'Medie';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Număra';
$app_list_strings['aor_total_options']['SUM'] = 'Suma';
$app_list_strings['aor_total_options']['AVG'] = 'Medie';
$app_list_strings['aor_chart_types']['bar'] = 'Grafic cu bare';
$app_list_strings['aor_chart_types']['line'] = 'Grafic liniar';
$app_list_strings['aor_chart_types']['pie'] = 'Grafic tip Plăcintă';
$app_list_strings['aor_chart_types']['radar'] = 'Grafic radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stive';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Bare grupate';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Lunar';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Săptămânal';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Zilnic';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Activ';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inactiv';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utilizator';
$app_list_strings['aor_email_type_list']['Users'] = 'Utilizatori';
$app_list_strings['aor_assign_options']['all'] = 'TOŢI utilizatorii';
$app_list_strings['aor_assign_options']['role'] = 'Toți utilizatorii în rol';
$app_list_strings['aor_assign_options']['security_group'] = 'Toți utilizatorii din grupul de securitate';
$app_list_strings['date_time_period_list']['today'] = 'Astazi';
$app_list_strings['date_time_period_list']['yesterday'] = 'Ieri';
$app_list_strings['date_time_period_list']['this_week'] = 'Săptămâna curentă';
$app_list_strings['date_time_period_list']['last_week'] = 'Săptămâna trecută';
$app_list_strings['date_time_period_list']['last_month'] = 'Luna Trecută';
$app_list_strings['date_time_period_list']['this_month'] = 'Luna Curentă';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Acest trimestru';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Ultimul trimestru';
$app_list_strings['date_time_period_list']['this_year'] = 'Anul curent';
$app_list_strings['date_time_period_list']['last_year'] = 'Anul trecut';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'pe';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'pe';
$app_strings['LBL_CRON_AT'] = 'la';
$app_strings['LBL_CRON_RAW'] = 'Avansat';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Ora';
$app_strings['LBL_CRON_DAY'] = 'Zi';
$app_strings['LBL_CRON_MONTH'] = 'Lună';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Zilnic';
$app_strings['LBL_CRON_WEEKLY'] = 'Săptămânal';
$app_strings['LBL_CRON_MONTHLY'] = 'Lunar';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contracte';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Facturi';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'Șabloane PDF';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Categorii de produse';
$app_list_strings['moduleList']['AOS_Products'] = 'Produse';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Rând de elemente';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Grupuri de elemente în linie';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Oferte';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analist';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Competitor';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partener';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presă';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Revânzător';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Altele';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Schiță';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negociere';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Trimisă';
$app_list_strings['quote_stage_dom']['On Hold'] = 'În Aşteptare';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmată';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Acceptată';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Pierdut și închis';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Defunctă';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Aprobat';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Dezaprobat';
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
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Competitor';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Client';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investitor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partener';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presă';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Revânzător';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Altele';
$app_list_strings['invoice_status_dom']['Paid'] = 'Plătit';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Neplătit';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Anulat';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Nefacturat';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Facturat';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptop-uri';
$app_list_strings['product_category_dom']['Desktops'] = 'Calculatoare';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Bunuri';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Oferte';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Facturi';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contracte';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Oferte';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Facturi';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contracte';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Conturi';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contacte';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Piste';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Neîncepută';
$app_list_strings['contract_status_list']['In Progress'] = 'În Curs';
$app_list_strings['contract_status_list']['Signed'] = 'Semnat';
$app_list_strings['contract_type_list']['Type'] = 'Tip';
$app_strings['LBL_PRINT_AS_PDF'] = 'Tipărește în PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Selectează o ciorna';
$app_strings['LBL_NO_TEMPLATE'] = 'EROARE \nNu s-au găsit șabloane.\n Accesați modulul șabloane PDF și creați un șablon';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flux de lucru';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Condițiile Fluxului de lucru';
$app_list_strings['moduleList']['AOW_Processed'] = 'Audit Proces';
$app_list_strings['moduleList']['AOW_Actions'] = 'Acțiuni flux de lucru';
$app_list_strings['aow_status_list']['Active'] = 'Activ';
$app_list_strings['aow_status_list']['Inactive'] = 'Inactiv';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Egal cu';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Nu este egal cu';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Mai Mare Decât';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mai Puţin de';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Mai mare sau egal cu';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mai mic sau egal cu';
$app_list_strings['aow_operator_list']['Contains'] = 'Conține';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Începe cu';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Se termină cu';
$app_list_strings['aow_operator_list']['is_null'] = 'Este nul';
$app_list_strings['aow_process_status_list']['Complete'] = 'Completă';
$app_list_strings['aow_process_status_list']['Running'] = 'Proces in lucru';
$app_list_strings['aow_process_status_list']['Pending'] = 'În așteptare';
$app_list_strings['aow_process_status_list']['Failed'] = 'Eşuat';
$app_list_strings['aow_condition_operator_list']['And'] = 'Și';
$app_list_strings['aow_condition_operator_list']['OR'] = 'SAU';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valoare';
$app_list_strings['aow_condition_type_list']['Field'] = 'Câmp';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Orice modificare';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'În Grupul de securitate';
$app_list_strings['aow_condition_type_list']['Date'] = 'Dată';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Unul din';
$app_list_strings['aow_action_type_list']['Value'] = 'Valoare';
$app_list_strings['aow_action_type_list']['Field'] = 'Câmp';
$app_list_strings['aow_action_type_list']['Date'] = 'Dată';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Pe rând';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Cel mai puțin ocupat';
$app_list_strings['aow_action_type_list']['Random'] = 'Aleator';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valoare';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Câmp';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minute';
$app_list_strings['aow_date_type_list']['hour'] = 'Ore';
$app_list_strings['aow_date_type_list']['day'] = 'Zile';
$app_list_strings['aow_date_type_list']['week'] = 'Săptămâni';
$app_list_strings['aow_date_type_list']['month'] = 'Luni';
$app_list_strings['aow_date_type_list']['year'] = 'Ani';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Programul de lucru';
$app_list_strings['aow_date_options']['now'] = 'Acum';
$app_list_strings['aow_date_options']['today'] = 'Astazi';
$app_list_strings['aow_date_options']['field'] = 'Acest câmp';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'TOŢI utilizatorii';
$app_list_strings['aow_assign_options']['role'] = 'Toți utilizatorii în rol';
$app_list_strings['aow_assign_options']['security_group'] = 'Toți utilizatorii din grupul de securitate';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Înregistrare Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Legate de domeniul';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utilizator';
$app_list_strings['aow_email_type_list']['Users'] = 'Utilizatori';
$app_list_strings['aow_email_to_list']['to'] = 'La';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Toate înregistrările';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Înregistrări noi';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Înregistrări modificate';
$app_list_strings['aow_run_when_list']['Always'] = 'Întotdeauna';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Numai în timpul salvării';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Numai in Planificator';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Șabloane de proiecte';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Șabloane de proiecte de activități';
$app_list_strings['relationship_type_list']['FS'] = 'Finalizare la început';
$app_list_strings['relationship_type_list']['SS'] = 'Start pentru a începe';
$app_list_strings['duration_unit_dom']['Days'] = 'Zile';
$app_list_strings['duration_unit_dom']['Hours'] = 'Ore';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Arata Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Vezi detalii';
$app_strings['LBL_CREATE_PROJECT'] = 'Creează proiect';

//gmaps
$app_strings['LBL_MAP'] = 'Hartă';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitudine';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitudine';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Statusul Geocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresă';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Hărți';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Hărți - Marcaje';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Hărți - Zone';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Hărți - Adresa Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Parteneri JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Mile';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometri';

$app_list_strings['map_module_type_list']['Accounts'] = 'Conturi';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contacte';
$app_list_strings['map_module_type_list']['Cases'] = 'Cazuri';
$app_list_strings['map_module_type_list']['Leads'] = 'Piste';
$app_list_strings['map_module_type_list']['Meetings'] = 'Întâlniri';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Oportunităţi';
$app_list_strings['map_module_type_list']['Project'] = 'Proiecte';
$app_list_strings['map_module_type_list']['Prospects'] = 'Ținte';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Cont';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contact';
$app_list_strings['map_relate_type_list']['Cases'] = 'Caz';
$app_list_strings['map_relate_type_list']['Leads'] = 'Pistă';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Întâlnire';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Oportunitate';
$app_list_strings['map_relate_type_list']['Project'] = 'Proiect';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Ţintă';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administrare';
$app_list_strings['marker_image_list']['agriculture'] = 'Agricultură';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Aeronava mica';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avion turism';
$app_list_strings['marker_image_list']['airport'] = 'Aeroport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteatru';
$app_list_strings['marker_image_list']['apartment'] = 'Apartament';
$app_list_strings['marker_image_list']['aquarium'] = 'Acvariu';
$app_list_strings['marker_image_list']['arch'] = 'Arc';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Bancă';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banca Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banca Lira';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plajă';
$app_list_strings['marker_image_list']['beautiful'] = 'Frumos';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parcare biciclete';
$app_list_strings['marker_image_list']['big_city'] = 'Oraș mare';
$app_list_strings['marker_image_list']['bridge'] = 'Pod';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Pod Modern';
$app_list_strings['marker_image_list']['bus'] = 'Autobuz';
$app_list_strings['marker_image_list']['cable_car'] = 'Telecabina';
$app_list_strings['marker_image_list']['car'] = 'Mașină';
$app_list_strings['marker_image_list']['car_rental'] = 'Închirieri auto';
$app_list_strings['marker_image_list']['carrepair'] = 'Reparație auto';
$app_list_strings['marker_image_list']['castle'] = 'Castel';
$app_list_strings['marker_image_list']['cathedral'] = 'Catedrala';
$app_list_strings['marker_image_list']['chapel'] = 'Chapel';
$app_list_strings['marker_image_list']['church'] = 'Church';
$app_list_strings['marker_image_list']['city_square'] = 'Piața Centrală';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cluster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Cafea';
$app_list_strings['marker_image_list']['community_centre'] = 'Centru Comunitar';
$app_list_strings['marker_image_list']['company'] = 'Companie';
$app_list_strings['marker_image_list']['conference'] = 'Conferință';
$app_list_strings['marker_image_list']['construction'] = 'Construcţii';
$app_list_strings['marker_image_list']['convenience'] = 'Convenience';
$app_list_strings['marker_image_list']['court'] = 'Curte';
$app_list_strings['marker_image_list']['cruise'] = 'Croazieră';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Schimbul valutar';
$app_list_strings['marker_image_list']['customs'] = 'Client';
$app_list_strings['marker_image_list']['cycling'] = 'Ciclism';
$app_list_strings['marker_image_list']['dam'] = 'Baraj';
$app_list_strings['marker_image_list']['dentist'] = 'Dentist';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Departament Magazin';
$app_list_strings['marker_image_list']['disability'] = 'Incapacitate';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parcare persoane dizabilități';
$app_list_strings['marker_image_list']['doctor'] = 'Doctor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Lesă Câine';
$app_list_strings['marker_image_list']['down'] = 'Jos';
$app_list_strings['marker_image_list']['down_left'] = 'Jos stânga';
$app_list_strings['marker_image_list']['down_right'] = 'Jos dreapta';
$app_list_strings['marker_image_list']['down_then_left'] = 'Jos apoi stânga';
$app_list_strings['marker_image_list']['down_then_right'] = 'Jos apoi dreapta';
$app_list_strings['marker_image_list']['drugs'] = 'Medicamente';
$app_list_strings['marker_image_list']['elevator'] = 'Ascensor';
$app_list_strings['marker_image_list']['embassy'] = 'Ambasadă';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Fabrică';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Cad pietre';
$app_list_strings['marker_image_list']['fast_food'] = 'Mâncare Rapidă';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Pădure';
$app_list_strings['marker_image_list']['fountain'] = 'Fântână';
$app_list_strings['marker_image_list']['friday'] = 'Vineri';
$app_list_strings['marker_image_list']['garden'] = 'Grădină';
$app_list_strings['marker_image_list']['gas_station'] = 'Stație de GPL';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Cadouri';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmand';
$app_list_strings['marker_image_list']['grocery'] = 'Mărfuri';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Elicopter';
$app_list_strings['marker_image_list']['highway'] = 'Autostradă';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Istoric la trimestru';
$app_list_strings['marker_image_list']['home'] = 'Acasă';
$app_list_strings['marker_image_list']['hospital'] = 'Spital';
$app_list_strings['marker_image_list']['hostel'] = 'Gazdă';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Stea';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stele';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stele';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stele';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stele';
$app_list_strings['marker_image_list']['info'] = 'Informații';
$app_list_strings['marker_image_list']['justice'] = 'Justiție';
$app_list_strings['marker_image_list']['lake'] = 'Lac';
$app_list_strings['marker_image_list']['laundromat'] = 'Spălătorie automată';
$app_list_strings['marker_image_list']['left'] = 'Stânga';
$app_list_strings['marker_image_list']['left_then_down'] = 'Stânga apoi jos';
$app_list_strings['marker_image_list']['left_then_up'] = 'Stânga apoi sus';
$app_list_strings['marker_image_list']['library'] = 'Librărie';
$app_list_strings['marker_image_list']['lighthouse'] = 'Far';
$app_list_strings['marker_image_list']['liquor'] = 'Lichior';
$app_list_strings['marker_image_list']['lock'] = 'Încuietoare';
$app_list_strings['marker_image_list']['main_road'] = 'Drum Principal';
$app_list_strings['marker_image_list']['massage'] = 'Masaj';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Turnul pentru telefon mobil';
$app_list_strings['marker_image_list']['modern_tower'] = 'Turn Modern';
$app_list_strings['marker_image_list']['monastery'] = 'Mânăstirea';
$app_list_strings['marker_image_list']['monday'] = 'Luni';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Moschee';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motocicleta';
$app_list_strings['marker_image_list']['museum'] = 'Muzeu';
$app_list_strings['marker_image_list']['music_live'] = 'Muzica Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Pompa Ulei';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagodă';
$app_list_strings['marker_image_list']['palace'] = 'Palat';
$app_list_strings['marker_image_list']['panoramic'] = 'Vedere panoramică';
$app_list_strings['marker_image_list']['park'] = 'Parc';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parcul și călătoria';
$app_list_strings['marker_image_list']['parking'] = 'Parcare';
$app_list_strings['marker_image_list']['photo'] = 'Fotografie';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Locuri nevizitate';
$app_list_strings['marker_image_list']['places_visited'] = 'Locuri vizitate';
$app_list_strings['marker_image_list']['playground'] = 'Loc de joacă';
$app_list_strings['marker_image_list']['police'] = 'Poliție';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Poștal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Stâlp de înaltă tensiune';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrala electrică';
$app_list_strings['marker_image_list']['power_substation'] = 'Stație de transformare';
$app_list_strings['marker_image_list']['public_art'] = 'Artă publică';
$app_list_strings['marker_image_list']['rain'] = 'Ploaie';
$app_list_strings['marker_image_list']['real_estate'] = 'Imobiliare';
$app_list_strings['marker_image_list']['regroup'] = 'Regrupare';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant african';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant cu grătare';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant cu bufet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant chinezesc';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant pescăresc';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant pescăresc';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant Gourmand';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant grecesc';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant indian';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant italian';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant japonez';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant cu kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Coreean';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediteraneean';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant mexican';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant Romantic';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant tailandez';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Turcesc';
$app_list_strings['marker_image_list']['right'] = 'Dreapta';
$app_list_strings['marker_image_list']['right_then_down'] = 'Dreapta Apoi, în jos';
$app_list_strings['marker_image_list']['right_then_up'] = 'Dreapta Apoi sus';
$app_list_strings['marker_image_list']['saturday'] = 'Sâmbătă';
$app_list_strings['marker_image_list']['school'] = 'Școală';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Mall comercial';
$app_list_strings['marker_image_list']['shore'] = 'Shore';
$app_list_strings['marker_image_list']['sight'] = 'Vedere';
$app_list_strings['marker_image_list']['small_city'] = 'Oraș mic';
$app_list_strings['marker_image_list']['snow'] = 'Ninsoare';
$app_list_strings['marker_image_list']['spaceport'] = 'Spațiu';
$app_list_strings['marker_image_list']['speed_100'] = 'Viteza 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Viteză 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Viteză 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Viteza 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Viteza 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Viteza 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Viteză 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Viteză 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Viteza 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Viteza 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Viteza 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Viteză 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Cocoașă de viteză';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Stare';
$app_list_strings['marker_image_list']['steam_train'] = 'Trenul cu aburi';
$app_list_strings['marker_image_list']['stop'] = 'Oprire';
$app_list_strings['marker_image_list']['stoplight'] = 'Semafor';
$app_list_strings['marker_image_list']['subway'] = 'Metrou';
$app_list_strings['marker_image_list']['sun'] = 'Dum';
$app_list_strings['marker_image_list']['sunday'] = 'Duminică';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagogă';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Calea de rulare';
$app_list_strings['marker_image_list']['teahouse'] = 'Ceainărie';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Templul Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terasă';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Teatru';
$app_list_strings['marker_image_list']['theme_park'] = 'Parc Tematic';
$app_list_strings['marker_image_list']['thursday'] = 'Joi';
$app_list_strings['marker_image_list']['toilets'] = 'Toalete';
$app_list_strings['marker_image_list']['toll_station'] = 'Stație de taxare';
$app_list_strings['marker_image_list']['tower'] = 'Turn';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Cameră de supraveghere a traficului';
$app_list_strings['marker_image_list']['train'] = 'Tren';
$app_list_strings['marker_image_list']['tram'] = 'Tramvai';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Marți';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunel';
$app_list_strings['marker_image_list']['turn_left'] = 'Întoarce la stânga';
$app_list_strings['marker_image_list']['turn_right'] = 'Întoarce la dreapta';
$app_list_strings['marker_image_list']['university'] = 'Universitate';
$app_list_strings['marker_image_list']['up'] = 'Sus';
$app_list_strings['marker_image_list']['up_left'] = 'Sus stânga';
$app_list_strings['marker_image_list']['up_right'] = 'Sus dreapta';
$app_list_strings['marker_image_list']['up_then_left'] = 'Sus apoi stânga';
$app_list_strings['marker_image_list']['up_then_right'] = 'Sus apoi dreapta';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Clipuri video';
$app_list_strings['marker_image_list']['villa'] = 'Vilă';
$app_list_strings['marker_image_list']['water'] = 'Apă';
$app_list_strings['marker_image_list']['waterfall'] = 'Cascadă';
$app_list_strings['marker_image_list']['watermill'] = 'Moara de apă';
$app_list_strings['marker_image_list']['waterpark'] = 'Parc acvatic';
$app_list_strings['marker_image_list']['watertower'] = 'Rezervor de apă';
$app_list_strings['marker_image_list']['wednesday'] = 'Miercuri';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Turbină eoliană';
$app_list_strings['marker_image_list']['windmill'] = 'Moară de vânt';
$app_list_strings['marker_image_list']['winery'] = 'Podgorie';
$app_list_strings['marker_image_list']['work_office'] = 'Biroul de lucru';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Patrimoniul Mondial';
$app_list_strings['marker_image_list']['zoo'] = 'Grădină zoologică';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Plecat de la Birou';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'În ședință';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Reprogramare';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Introduceți informație pentru reprogramare';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Dată:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motiv:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Vă rugăm selectați o dată validă';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Selectați un motiv';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reprogramare';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Istorie de apeluri atentate';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Încercări Apel';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestionarea grupurilor de securitate';
$app_strings['LBL_SECURITYGROUP'] = 'Grup de securitate';
$app_strings['LBL_ROLE'] = 'Rol';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Conturi de e-mail de ieșire';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'Conexiune exterioară OAuth';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'Furnizor extern OAuth';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Detalii flux social';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtru';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tip';

$app_strings['LBL_ADD_TAB'] = 'Adaugă filă';
$app_strings['LBL_EDIT_TAB'] = 'Editare file';
$app_strings['LBL_SUITE_DASHBOARD'] = 'TABLOU DE BORD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Introdu numele panoului de control:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Număr de coloane:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Sunteți sigur că vreți să ștergeți';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'tablou de bord?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Adaugă o pagina panoului de control';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Înlătura pagina curenta a panoului de control';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Redenumește pagina panoului de control';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACȚIUNE';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Sarcini',
    'Meetings' => 'Întâlniri',
    'Calls' => 'Apeluri',
    'Notes' => 'Note',
    'Emails' => 'Email-uri'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editor de șabloane';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Ați părăsit câmpul pe care îl editam fără a salva modificările. Apăsați pe \"Ok\" dacă doriți să renunțați la modificări sau pe \"Anulare\" pentru a continua editarea";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "A apărut o eroare la încărcarea câmpului. Sesiunea poate fi expirat. Vă rugăm să vă conectați din nou pentru a remedia problema";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Vânzări',
    'getAccountsSpotsData' => 'Conturi',
    'getLeadsSpotsData' => 'Piste',
    'getServiceSpotsData' => 'Service',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Activitate marketing',
    'getActivitiesSpotsData' => 'Activităţi',
    'getQuotesSpotsData' => 'Oferte'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Programul de lucru';
$app_list_strings['business_hours_list']['0'] = '12 am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6a';
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
$app_list_strings['day_list']['Monday'] = 'Luni';
$app_list_strings['day_list']['Tuesday'] = 'Marți';
$app_list_strings['day_list']['Wednesday'] = 'Miercuri';
$app_list_strings['day_list']['Thursday'] = 'Joi';
$app_list_strings['day_list']['Friday'] = 'Vineri';
$app_list_strings['day_list']['Saturday'] = 'Sâmbătă';
$app_list_strings['day_list']['Sunday'] = 'Duminică';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Scrisoare';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portret';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Peisaj';


$app_list_strings['moduleList']['SurveyResponses'] = 'Răspunsuri la sondaj';
$app_list_strings['moduleList']['Surveys'] = 'Sondaje';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Răspunsuri la întrebările sondajului';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Întrebări la sondaj';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Opțiuni la întrebarea sondajului';
$app_list_strings['survey_status_list']['Draft'] = 'Schiță';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Închis';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Casetă text';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Căsuță';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Listă Derulantă';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Selecție multiplă';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DataOra';
$app_list_strings['surveys_question_type']['Date'] = 'Dată';
$app_list_strings['surveys_question_type']['Scale'] = 'Dimensiune';
$app_list_strings['surveys_question_type']['Rating'] = 'Notă';
$app_list_strings['surveys_matrix_options'][0] = 'Îndeplinite';
$app_list_strings['surveys_matrix_options'][1] = 'Nici mulțumit, nici nemulțumit';
$app_list_strings['surveys_matrix_options'][2] = 'Nesatisfăcut';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'În așteptare cerere confirmare, Confirmare opțiune nu a fost trimisă';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirmarea opțiunii în trimiterea e-mailului a eșuat';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'În așteptare cerere confirmare, Confirmare opțiune trimisă';
$app_strings['LBL_OPT_IN'] = 'Optat în';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmat de înscriere';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'S-a dezabonat';
$app_strings['LBL_OPT_IN_INVALID'] = 'Invalid';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Dezactivat',
    'opt-in' => 'Opt In',
    'confirmed-opt-in' => 'Confirmat de înscriere'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'A refuzat abonarea',
    'opt-in' => 'Opt In',
    'confirmed-opt-in' => 'Confirmat de înscriere'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'Confirmarea emailului de înscriere a fost adăugată în lista de așteptare pentru %s adresa (adrese) de email. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Imposibil de trimis emailuri la %s adresa (adrese), pentru că nu sunt înscrise. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s adresa de email nu are un id valid. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Autentificarea în Doi Pași a eșuat';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Cod de autentificare în doi factori trimis.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Codul autentificării în doi pași a eșuat.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Vă mulțumim pentru interesul dumneavoastră.';

$app_strings['ERR_IP_CHANGE'] = 'Sesiunea ta a fost încheiată din cauza unei modificări adresei tale IP';
$app_strings['ERR_RETURN'] = 'Reveniți Acasă';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Acordare parolă',
    'client_credentials' => 'Acreditări Client',
    'implicit' => 'Implicit',
    'authorization_code' => 'Cod de autorizare'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minute',
    'hour' => 'ore',
    'day' => 'zile',
    'week' => 'săptămâni',
    'month' => 'luni',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Căutare (nouă)',
    'UnifiedSearch' => 'Căutare Globală Unificată (moștenit)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personal',
    'shared' => 'Partajat',
    'group' => 'Grup',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Validare acces',
    'failed' => 'Eşuat',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'În Curs',
    'success' => 'Succes',
    'warning' => 'Avertisment',
    'error' => 'Eroare',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Eroare API JSON';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'A apărut o eroare în API-ul JSON.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Versiune Api: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Asigurați-vă că ați completat câmpurile necesare';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'JSON API așteaptă ca, corpul cererii să fie JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Imposibil de validat cererea de plată Json Api';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Imposibil de validat răspunsul Json Api Payload';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API nu poate găsi resurse';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API așteaptă ca antetul "Acceptat" să fie o aplicație/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API așteaptă ca antetul "Content-Type" să fie aplicație/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Notificările pe desktop sunt acum activate pentru acest browser web.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Notificările pe desktop sunt dezactivate pentru acest browser web. Folosiți preferințele browser-ului pentru a le activa din nou.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Acest browser nu acceptă notificările pe desktop.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'A apărut o eroare: ';
$app_strings['LBL_CLICK_HERE'] = 'Click aici';
$app_strings['LBL_TO_CONTINUE'] = ' pentru a continua.';

$app_strings['IMAP_HANDLER_ERROR'] = 'EROARE: {error}; cheia a fost: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: setările testului s-au schimbat la "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Cerere nevalidă, utilizați valoare "{var}”.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Eroare necunoscută, cheia "{key}" nu a fost salvată.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Setări test nu există.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Cheie negăsită.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Eroare salvare cheie.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Eroare necunoscută';
$app_strings['LBL_SEARCH_TITLE']                   = 'Caută';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Intrare Criteriu Căutare';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Caută';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Caută';
$app_strings['LBL_SEARCH_QUERY']                   = 'Interogare de căutare: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Motor: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total rezultat(e): ';
$app_strings['LBL_SEARCH_PREV'] = 'Anterior';
$app_strings['LBL_SEARCH_NEXT'] = 'Următor';
$app_strings['LBL_SEARCH_PAGE'] = 'Pagină ';
$app_strings['LBL_SEARCH_OF'] = ' din ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Folosiți căutare avansată';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Folosește căutarea de bază';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Motor MPDF moștenit';
$app_strings['LBL_TCPDF_ENGINE'] = 'Motor TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Nume fișier nevalid:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'Acesta poate fi doar caractere alfanumerice, plus \'\', \'-\' și \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Nume fișier de import nevalid';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = 'Parolă setată. Introduceți valoarea pentru a seta o nouă parolă.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = 'Valoarea setată. Introduceți o nouă valoare pentru a o suprascrie pe cea curentă.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = 'Nu se poate conecta folosind autentificarea OAuth cu serverul de E-mail. Pentru conexiune folosiți: ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = 'Sesiunea ta IMAP OAuth a expirat, te rugăm să te autentifici din nou în conexiune: ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = 'Cheie';
$app_strings['LBL_VALUE'] = 'Valoare';
$app_strings['LBL_OPTIONAL'] = 'Opțional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Opțional. Setați să utilizați un șir specific de conexiune';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Cont de ieșire';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Cont de intrare';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'Cont de sistem';
$app_strings['LBL_FROM_SYSTEM'] = 'Trimite din sistem';
$app_strings['LBL_SIGNATURE'] = 'Semnătura';

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
