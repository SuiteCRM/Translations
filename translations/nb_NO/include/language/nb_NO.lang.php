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
    'language_pack_name' => 'Norsk Bokmål (Norwegian) - nb_NO',
    'moduleList' => array(
        'Home' => 'Forside',
        'ResourceCalendar' => 'Ressurskalender',
        'Contacts' => 'Kontakter',
        'Accounts' => 'Kunder',
        'Alerts' => 'Varsler',
        'Opportunities' => 'Salgsmuligheter',
        'Cases' => 'Kundestøtte',
        'Notes' => 'Notater:',
        'Calls' => 'Oppringninger',
        'TemplateSectionLine' => 'Delen mallinjen',
        'Calls_Reschedule' => 'Planlegg oppringinger på nytt',
        'Emails' => 'E-post',
        'EAPM' => 'EAPM',
        'Meetings' => 'Møter',
        'Tasks' => 'Oppgaver',
        'Calendar' => 'Kalender',
        'Leads' => 'Ledetråder',
        'Currencies' => 'Valuta',
        'Activities' => 'Aktiviteter',
        'Bugs' => 'Feil',
        'Feeds' => 'RSS',
        'iFrames' => 'Portal',
        'TimePeriods' => 'Tidsperioder',
        'ContractTypes' => 'Kontrakttyper',
        'Schedulers' => 'Planleggere',
        'Project' => 'Prosjekter',
        'ProjectTask' => 'Prosjektoppgaver',
        'Campaigns' => 'Kampanjer',
        'CampaignLog' => 'Kampanje logg',
        'Documents' => 'Dokumenter',
        'DocumentRevisions' => 'Dokumentversjoner',
        'Connectors' => 'Knyttinger',
        'Roles' => 'Roller',
        'Notifications' => 'Varsler',
        'Sync' => 'Synk',
        'Users' => 'Brukere:',
        'Employees' => 'Ansatte',
        'Administration' => 'Administrasjon',
        'ACLRoles' => 'Roller',
        'InboundEmail' => 'Innkommende e-post',
        'Releases' => 'Utgaver',
        'Prospects' => 'Mål',
        'Queues' => 'Køer',
        'EmailMarketing' => 'Markedsføring gjennom e-post',
        'EmailTemplates' => 'Epost - maler',
        'ProspectLists' => 'Mål - Liste',
        'SavedSearch' => 'Lagrede søk',
        'UpgradeWizard' => 'Oppgradering veiviser',
        'Trackers' => 'Trackere',
        'TrackerSessions' => 'Sporing sesjon',
        'TrackerQueries' => 'Tracker forespørsler',
        'FAQ' => 'Ofte stillede spørgsmål',
        'Newsletters' => 'Nyhetsbrev',
        'SugarFeed' => 'SutieCRM nyhetsstrøm',
        'SugarFavorites' => 'SuiteCRM Favoritter',

        'OAuthKeys' => 'OAuth konsumentnøkler',
        'OAuthTokens' => 'OAuthsymboler',
        'OAuth2Clients' => 'OAuth-klienter',
        'OAuth2Tokens' => 'OAuthsymboler',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Forside',
        'Dashboard' => 'Oversikt',
        'Contacts' => 'Kontakter',
        'Accounts' => 'Kunde',
        'Opportunities' => 'Salgsmuligheter',
        'Cases' => 'Kundestøtte',
        'Notes' => 'Notater og vedlegg',
        'Calls' => 'Oppringninger',
        'Emails' => 'E-post',
        'EmailTemplates' => 'Mal for e-post:',
        'Meetings' => 'Møter',
        'Tasks' => 'Oppgaver',
        'Calendar' => 'Kalender',
        'Leads' => 'Ledetråder',
        'Activities' => 'Aktiviteter',
        'Bugs' => 'Feil',
        'KBDocuments' => 'Kunnskapsbase',
        'Feeds' => 'RSS',
        'iFrames' => 'Portal',
        'TimePeriods' => 'Tidsperioder',
        'Project' => 'Prosjekter',
        'ProjectTask' => 'Prosjektoppgaver',
        'Prospects' => 'Mål',
        'Campaigns' => 'Kampanjer',
        'Documents' => 'Dokument',
        'Sync' => 'Synk',
        'Users' => 'Bruker',
        'SugarFavorites' => 'SuiteCRM Favoritter',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Ja',
        '2' => 'Nei',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analytiker',
        'Competitor' => 'Konkurrent',
        'Customer' => 'Kunde',
        'Integrator' => 'Integrator',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Press' => 'Presse',
        'Prospect' => 'Prospekt',
        'Reseller' => 'Distributør',
        'Other' => 'Andre',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Klær',
        'Banking' => 'Bank',
        'Biotechnology' => 'Bioteknologi',
        'Chemicals' => 'Kjemikalier',
        'Communications' => 'Kommunikasjonsutstyr',
        'Construction' => 'Konstruksjonsvirksomhet',
        'Consulting' => 'Konsulentvirksomhet',
        'Education' => 'Utdanning',
        'Electronics' => 'Elektronikk',
        'Energy' => 'Energi',
        'Engineering' => 'Ingeniørvirksomhet',
        'Entertainment' => 'Underholdning',
        'Environmental' => 'Miljø',
        'Finance' => 'Finans',
        'Government' => 'Offentlig forvaltning',
        'Healthcare' => 'Helsesektoren',
        'Hospitality' => 'Hotel/Restaurant',
        'Insurance' => 'Forsikring',
        'Machinery' => 'Maskinteknikk',
        'Manufacturing' => 'Produsent',
        'Media' => 'Presse',
        'Not For Profit' => 'Frivillig virksomhet',
        'Recreation' => 'Turisme/reiser',
        'Retail' => 'Salg til sluttkunde',
        'Shipping' => 'Frakt',
        'Technology' => 'Teknologi',
        'Telecommunications' => 'Telekommunikasjon',
        'Transportation' => 'Transport',
        'Utilities' => 'Verktøy',
        'Other' => 'Andre',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Førstegangsoppringning',
        'Existing Customer' => 'Eksisterende kunde',
        'Self Generated' => 'Self Generated',
        'Employee' => 'Ansatt',
        'Partner' => 'Partner',
        'Public Relations' => 'PR',
        'Direct Mail' => 'Reklame i posten',
        'Conference' => 'Konferanse',
        'Trade Show' => 'Messe',
        'Web Site' => 'Nettside',
        'Word of mouth' => 'Rykte',
        'Email' => 'E-post',
        'Campaign' => 'Kampanjer',
        'Other' => 'Andre',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Foreliggende virksomhet',
        'New Business' => 'Ny virksomhet',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Inntekter',
        'Investment' => 'Investering',
        'Expected_Revenue' => 'Forventede inntekter',
        'Budget' => 'Budsjett',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'Forretningsmessig beslutningstaker',
        'Business Evaluator' => 'Forretningsmessig ekspert',
        'Technical Decision Maker' => 'Teknisk beslutningstaker',
        'Technical Evaluator' => 'Teknisk ekspert',
        'Executive Sponsor' => 'Ledelse',
        'Influencer' => 'Person med innflytelse',
        'Other' => 'Andre',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'Alternativ kontaktperson',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Netto 15',
        'Net 30' => 'Netto 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'Kvalifikasjon',
        'Needs Analysis' => 'Behovsanalyse',
        'Value Proposition' => 'Verdivurdering',
        'Id. Decision Makers' => 'Identifisere beslutningstakere',
        'Perception Analysis' => 'Oppfatningsanalyse',
        'Proposal/Price Quote' => 'Forslag/Pristilbud',
        'Negotiation/Review' => 'Forhandling/anmeldelse',
        'Closed Won' => 'Lukket/avtale inngått',
        'Closed Lost' => 'Lukket og tapt',
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
        'Call' => 'Oppringninger',
        'Meeting' => 'Møter',
        'Task' => 'Oppgaver',
        'Email' => 'E-post',
        'Note' => 'Notater og vedlegg',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Hr.',
        'Ms.' => 'Fr.',
        'Mrs.' => 'Fru',
        'Miss' => 'Frk',
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
        60 => '1 minutt før',
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

    'task_priority_default' => 'Media',
    'task_priority_dom' => array(
        'High' => 'Høy',
        'Medium' => 'Media',
        'Low' => 'Lav',
    ),
    'task_status_default' => 'Ikke påbegynt',
    'task_status_dom' => array(
        'Not Started' => 'Ikke påbegynt',
        'In Progress' => 'Underveis',
        'Completed' => 'Fullført',
        'Pending Input' => 'Venter på opplysninger',
        'Deferred' => 'Utsatt',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'Avholdt',
        'Not Held' => 'Ikke Avholdt',
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
        'Held' => 'Avholdt',
        'Not Held' => 'Ikke Avholdt',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'Inn',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Ny',
        'Assigned' => 'Tilordnet',
        'In Process' => 'Underveis',
        'Converted' => 'Omgjort',
        'Recycled' => 'Gjenbrukt',
        'Dead' => 'Død',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Høy',
        'P2' => 'Media',
        'P3' => 'Lav',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Vanlig bruker',
        'Administrator' => 'Aministrator',
    ),
    'user_status_dom' => array(
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'E-post kode',
    ),
    'employee_status_dom' => array(
        'Active' => 'Aktiv',
        'Terminated' => 'Avsluttet',
        'Leave of Absence' => 'Permisjon',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Høy',
        'Medium' => 'Media',
        'Low' => 'Lav',
    ),
    'project_task_priority_default' => 'Media',

    'project_task_status_options' => array(
        'Not Started' => 'Ikke påbegynt',
        'In Progress' => 'Underveis',
        'Completed' => 'Fullført',
        'Pending Input' => 'Venter på opplysninger',
        'Deferred' => 'Utsatt',
    ),
    'project_task_utilization_options' => array(
        '0' => 'Nei',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Utkast',
        'In Review' => 'Til vurdering',
        'Underway' => 'Underveis',
        'On_Hold' => 'På Vent',
        'Completed' => 'Fullført',
    ),
    'project_status_default' => 'Utkast',

    'project_duration_units_dom' => array(
        'Days' => 'dager',
        'Hours' => 'timer',
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
        'Accounts' => 'Kunde',
        'Opportunities' => 'Salgsmuligheter',
        'Cases' => 'Kundestøtte',
        'Leads' => 'Ledetråder',
        'Contacts' => 'Kontakter', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Feil',
        'Project' => 'Prosjekter',

        'Prospects' => 'Mål',
        'ProjectTask' => 'Prosjektoppgaver',

        'Tasks' => 'Oppgaver',

        'AOS_Contracts' => 'Kontrakt',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Tilbud',
        'AOS_Products' => 'Produkt',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Kunde',
        'Contacts' => 'Kontakter',
        'Opportunities' => 'Salgsmuligheter',
        'Campaigns' => 'Kampanjer',
        'Tasks' => 'Oppgaver',
        'Emails' => 'E-post',

        'Bugs' => 'Feil',
        'Project' => 'Prosjekter',
        'ProjectTask' => 'Prosjektoppgaver',
        'Prospects' => 'Mål',
        'Cases' => 'Kundestøtte',
        'Leads' => 'Ledetråder',

        'Meetings' => 'Møter',
        'Calls' => 'Oppringninger',

        'AOS_Contracts' => 'Kontrakt',
        'AOS_Invoices' => 'Faktura',
        'AOS_Quotes' => 'Tilbud',
        'AOS_Products' => 'Produkt',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Kunde',
        'Contacts' => 'Kontakter',
        'Tasks' => 'Oppgaver',
        'Opportunities' => 'Salgsmuligheter',

        'Bugs' => 'Feil',
        'Cases' => 'Kundestøtte',
        'Leads' => 'Ledetråder',

        'Project' => 'Prosjekter',
        'ProjectTask' => 'Prosjektoppgaver',

        'Prospects' => 'Mål',

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
    'issue_priority_default_key' => 'Media',
    'issue_priority_dom' => array(
        'Urgent' => 'Haster',
        'High' => 'Høy',
        'Medium' => 'Media',
        'Low' => 'Lav',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Godkjent',
        'Duplicate' => 'Duplikat',
        'Closed' => 'Avsluttet',
        'Out of Date' => 'Foreldet',
        'Invalid' => 'Ugyldig',
    ),

    'issue_status_default_key' => 'Ny',
    'issue_status_dom' => array(
        'New' => 'Ny',
        'Assigned' => 'Tilordnet',
        'Closed' => 'Avsluttet',
        'Pending' => 'Avventes',
        'Rejected' => 'Avslått',
    ),

    'bug_priority_default_key' => 'Media',
    'bug_priority_dom' => array(
        'Urgent' => 'Haster',
        'High' => 'Høy',
        'Medium' => 'Media',
        'Low' => 'Lav',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Godkjent',
        'Duplicate' => 'Duplikat',
        'Fixed' => 'Fastsatt',
        'Out of Date' => 'Foreldet',
        'Invalid' => 'Ugyldig',
        'Later' => 'Utsatt',
    ),
    'bug_status_default_key' => 'Ny',
    'bug_status_dom' => array(
        'New' => 'Ny',
        'Assigned' => 'Tilordnet',
        'Closed' => 'Avsluttet',
        'Pending' => 'Avventes',
        'Rejected' => 'Avslått',
    ),
    'bug_type_default_key' => 'Feil',
    'bug_type_dom' => array(
        'Defect' => 'Defekt',
        'Feature' => 'Ønsket funksjon',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administrasjon',
        'Product' => 'Produkt',
        'User' => 'Bruker',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Intern',
        'Forum' => 'Forum',
        'Web' => 'Nett',
        'InboundEmail' => 'E-post',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Kunder',
        'Activities' => 'Aktiviteter',
        'Bugs' => 'Feil',
        'Calendar' => 'Kalender',
        'Calls' => 'Oppringninger',
        'Campaigns' => 'Kampanjer',
        'Cases' => 'Kundestøtte',
        'Contacts' => 'Kontakter',
        'Currencies' => 'Valuta',
        'Dashboard' => 'Oversikt',
        'Documents' => 'Dokumenter',
        'Emails' => 'E-post',
        'Feeds' => 'Nyhetsmating',
        'Forecasts' => 'Forventninger',
        'Help' => 'Hjelp',
        'Home' => 'Forside',
        'Leads' => 'Ledetråder',
        'Meetings' => 'Møter',
        'Notes' => 'Notater:',
        'Opportunities' => 'Salgsmuligheter',
        'Outlook Plugin' => 'Outlook plugin',
        'Projects' => 'Prosjekter',
        'Quotes' => 'Tilbud',
        'Releases' => 'Utgaver',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Oppgradering',
        'Users' => 'Brukere:',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Planlegging',
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
        'Complete' => 'Fullført',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Telefonsalg',
        'Mail' => 'Post',
        'Email' => 'E-post',
        'Print' => 'Annonsering i avis/magasin',
        'Web' => 'Nett',
        'Radio' => 'Radio',
        'Television' => 'TV',
        'NewsLetter' => 'Nyhetsbrev',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Ukentlig',
        'Monthly' => 'Månedlig',
        'Quarterly' => 'Kvartalsvis',
        'Annually' => 'Årlig',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Januar',
        '2' => 'Februar',
        '3' => 'Mars',
        '4' => 'April',
        '5' => 'Mai',
        '6' => 'Juni',
        '7' => 'Juli',
        '8' => 'August',
        '9' => 'September',
        '10' => 'Oktober',
        '11' => 'November',
        '12' => 'Desember',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Mai',
        '6' => 'Jun',
        '7' => 'Jul',
        '8' => 'Aug',
        '9' => 'Sep',
        '10' => 'Okt',
        '11' => 'Nov',
        '12' => 'Des',
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
        '3' => 'Tir',
        '4' => 'Ons',
        '5' => 'Tor',
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
        'system' => 'Systemadministrasjon',
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
        'archived' => 'Arkivert',
        'draft' => 'Utkast',
        'inbound' => 'Inn',
        'campaign' => 'Kampanjer',
    ),
    'dom_email_status' => array(
        'archived' => 'Arkivert',
        'closed' => 'Avsluttet',
        'draft' => 'Kladd',
        'read' => 'Lest',
        'replied' => 'Besvart',
        'sent' => 'Sendt',
        'send_error' => 'Feil ved sending',
        'unread' => 'Ulest',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Arkivert',
    ),

    'dom_email_server_type' => array(
        '' => '--Ingen--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Ingen--',
        'createcase' => 'Ny sak (kundestøtte)',
        'bounce' => 'Håndtering av returnerte meldinger',
    ),
    'dom_email_distribution' => array(
        '' => '--Ingen--',
        'direct' => 'Tildel',
        'roundRobin' => 'Rundgang',
        'leastBusy' => 'Minst opptatt',
    ),
    'dom_email_errors' => array(
        1 => 'Velg kun en bruker når enheter tilføyes direkte.',
        2 => 'Du må benytte, Kun merkede elementer når du Direkte tildeler elementer.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Ja',
        'bool_false' => 'Nei',
    ),
    'dom_int_bool' => array(
        1 => 'Ja',
        0 => 'Nei',
    ),
    'dom_switch_bool' => array(
        'on' => 'Ja',
        'off' => 'Nei',
        '' => 'Nei',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM Epostklient',
        'mailto' => 'Ekstern e-postklient',
    ),

    'dom_editor_type' => array(
        'none' => 'HTML-kode',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaic',
    ),

    'dom_email_editor_option' => array(
        '' => 'Standard Epost Format',
        'html' => 'E-post i HTML-format',
        'plain' => 'E-post i vanlig tekst',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Kjøretid over, men jobb ikke utført',
        'ready' => 'Klar',
        'in progress' => 'Underveis',
        'failed' => 'Feilet',
        'completed' => 'Fullført',
        'no curl' => 'Ikke kjørt: ingen cURL tilgjengelig',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Aktiv',
        'Inactive' => 'Inaktiv',
    ),

    'scheduler_period_dom' => array(
        'min' => 'minutter',
        'hour' => 'timer',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Markedsføring',
        'Knowledege Base' => 'Kunnskapsbase',
        'Sales' => 'Salg',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Arkivert',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Markedsføringshjelpemidler',
        'Product Brochures' => 'Produktark',
        'FAQ' => 'Ofte stillede spørgsmål',
    ),

    'document_status_dom' => array(
        'Active' => 'Aktiv',
        'Draft' => 'Utkast',
        'FAQ' => 'Ofte stillede spørgsmål',
        'Expired' => 'Utløpt',
        'Under Review' => 'Under vurdering',
        'Pending' => 'Avventes',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Fletting av e-post',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Lisensavtale',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Godta',
        'decline' => 'Avvis',
        'tentative' => 'Foreløpig',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Godkjent',
        'decline' => 'Avslått',
        'tentative' => 'Foreløpig',
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
        'Daily' => 'Daglig',
        'Weekly' => 'Ukentlig',
        'Monthly' => 'Månedlig',
        'Yearly' => 'Årlig',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'dag(er)',
        'Weekly' => 'uke(r)',
        'Monthly' => 'måned(er)',
        'Yearly' => 'år',
    ),

    'duration_dom' => array(
        '' => 'Ingen',
        '900' => '15 minutter før',
        '1800' => '30 minutter før',
        '2700' => '45 minutter',
        '3600' => '1 time',
        '5400' => '1,5 time',
        '7200' => '2 timer',
        '10800' => '3 timer',
        '21600' => '6 timer',
        '86400' => '1 dag',
        '172800' => '2 dager',
        '259200' => '3 dager',
        '604800' => '1 uke',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Standard',
        'seed' => 'Gradert',
        'exempt_domain' => 'Utvalgt liste - etter domene',
        'exempt_address' => 'Utvalgt liste - sortert etter e-postadresse',
        'exempt' => 'Utvalgt liste - etter Id',
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
        'targeted' => 'Melding sent/forsøkt sent',
        'send error' => 'Returnerte meldinger, andre årsaker',
        'invalid email' => 'Returnerte meldinger, ugyldig e-post',
        'link' => 'Henvisningslink',
        'viewed' => 'Lest melding',
        'removed' => 'Bortvalgt',
        'lead' => 'Ledetråder lagt til',
        'contact' => 'Kontakter lagt til',
        'blocked' => 'Overstyret av adresse eller domene',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Kontakter',
        'Users' => 'Brukere:',
        'Prospects' => 'Mål',
        'Leads' => 'Ledetråder',
        'Accounts' => 'Kunder',
    ),
    'merge_operators_dom' => array(
        'like' => 'Inneholder',
        'exact' => 'Nøyaktig',
        'start' => 'Begynner med',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Ja',
        'false' => 'Nei',
        'required' => 'Nødvendig',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Inaktiv',
        1 => 'Aktiv',
        2 => 'Filtrer',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'Høy',
        'medium' => 'Media',
        'low' => 'Lav',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Ikke påbegynt',
        'inprogress' => 'Underveis',
        'completed' => 'Fullført',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Vis forklaring',
        'collapselegend' => 'Lukk forklaring',
        'clickfordrilldown' => 'Klikk for Drilldown',
        'detailview' => 'Detaljert...',
        'piechart' => 'Sektordiagram',
        'groupchart' => 'Gruppediagram',
        'stackedchart' => 'Stabeldiagram',
        'barchart' => 'Stolpediagram',
        'horizontalbarchart' => 'Horisontalt stolpediagram',
        'linechart' => 'Linjediagram',
        'noData' => 'Data ikke tilgjengelig',
        'print' => 'Annonsering i avis/magasin',
        'pieWedgeName' => 'avdelinger',
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
        '\'' => 'Singel anførselstegn (&#39;)',
        '"' => 'Dobbel anførselstegn (&#34;)',
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
        '_blank' => 'Nytt vindu',
        '_self' => 'Samme vindu',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Ikke auto-refresh',
        '30' => 'Hvert 30. sekund',
        '60' => 'Hvert 1 minutt',
        '180' => 'Hvert 3 minutt',
        '300' => 'Hvert 5 minutt',
        '600' => 'Hvert 10 minutt',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Aldri',
        '30' => 'Hvert 30. sekund',
        '60' => 'Hvert 1 minutt',
        '180' => 'Hvert 3 minutt',
        '300' => 'Hvert 5 minutt',
        '600' => 'Hvert 10 minutt',
    ),
    'date_range_search_dom' => array(
        '=' => 'Er lik',
        'not_equal' => 'Ikke på',
        'greater_than' => 'Etter',
        'less_than' => 'Før',
        'last_7_days' => 'Siste 7 dager',
        'next_7_days' => 'Neste 7 dager',
        'last_30_days' => 'Siste 30 dager',
        'next_30_days' => 'Neste 30 dager',
        'last_month' => 'Siste måned',
        'this_month' => 'Denne måned',
        'next_month' => 'Neste måned',
        'last_year' => 'Siste år',
        'this_year' => 'Dette år',
        'next_year' => 'Neste år',
        'between' => 'Er imellom',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Er lik',
        'not_equal' => 'Er ikke lik',
        'greater_than' => 'Større enn',
        'greater_than_equals' => 'Større enn eller lik',
        'less_than' => 'Mindre enn',
        'less_than_equals' => 'Mindre enn eller lik',
        'between' => 'Er imellom',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Kopi',
        'move' => 'Flytt',
        'donothing' => 'Ikke gjør noe',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Resultater',
    'ERR_SEARCH_INVALID_QUERY' => 'En feil har oppstått under søket. Din søke syntaks kan være ugjyldig.',
    'ERR_SEARCH_NO_RESULTS' => 'Dine søkeord ga ingen treff. Forsøk å utvide ditt søk.',
    'LBL_SEARCH_PERFORMED_IN' => 'Søk utført på',
    'LBL_EMAIL_CODE' => 'E-post kode:',
    'LBL_SEND' => 'Sende',
    'LBL_LOGOUT' => 'Logg ut',
    'LBL_TOUR_NEXT' => 'Neste',
    'LBL_TOUR_SKIP' => 'Hopp',
    'LBL_TOUR_BACK' => 'Tilbake',
    'LBL_TOUR_TAKE_TOUR' => 'Få en guidet tur',
    'LBL_MOREDETAIL' => 'Flere detaljer' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Rediger innebygd' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Vis' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtrer' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Legg til' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Legg til e-postadresse' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Vis/Skjul' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Slett' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Fjern innhold' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Fjern' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Fjern e-postadresse' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Avmeldt',
    'LBL_ID_FF_INVALID' => 'Gjør ugyldig',
    'LBL_ADD' => 'Legg til' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Bedriftslogo' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Knyttingssprettoppvinduer',
    'LBL_CLOSEINLINE' => 'Avslutt',
    'LBL_VIEWINLINE' => 'Vis',
    'LBL_INFOINLINE' => 'Informasjon',
    'LBL_PRINT' => 'Annonsering i avis/magasin',
    'LBL_HELP' => 'Hjelp',
    'LBL_ID_FF_SELECT' => 'Velg',
    'DEFAULT' => 'Grunnleggende',
    'LBL_SORT' => 'Sorter',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Aktiver SMTP over SSL eller TLS?',
    'LBL_NO_ACTION' => 'Ingen slike handliger: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Det finnes ingen handlinger tilgjengelig.',
    'LBL_NO_DATA' => 'Ingen data',

    'LBL_ROUTING_FLAGGED' => 'Flaggruppe',
    'LBL_ROUTING_TO' => 'til',
    'LBL_ROUTING_TO_ADDRESS' => 'tiladresse',
    'LBL_ROUTING_WITH_TEMPLATE' => 'med mal',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Du har for øyeblikket verdier i telefonnummer- og adresse feltene i skjemaet ditt. For å overskrive disse verdiene med telefonnummer/adresse fra kontoen du har valgt, klikk \"OK\". For å beholde de nåvärende verdiene, klikk \"Cancel\".',
    'LBL_DROP_HERE' => '[Slipp her]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Startverdier for Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Navn',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Utgående e-postserver',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP-passord',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP-port',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP-server',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP-brukernavn',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Standard',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Advarsel: Mangler brukernavn og passord for utgående e-post konto.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Sett opp e-post kontoer for å vise innkommende e-postmeldinger fra dine e-postkontoer.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Angi SMTP e-postserver  for utgående e-post fra e-postkontoer.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Ferdig',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Fjern innhold',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'Til:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Kopi:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'Til/Kopi/Blindkopi',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'E-postadresse:',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtrer',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Navn',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Fant ingen adresser',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Lagre og legg til i adressebok',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Velg adresser',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Adresser',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Advarsel! Den utgående kontoen du prøver å slette er knyttet til en eksisterende innkommende konto. Er du sikker på at du vil fortsette?',
    'LBL_EMAIL_ADDRESSES' => 'E-post',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'E-postadresse:',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Du har bekreftet påmeldingen av din e-post: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Kan ikke bekrefte e-postadressen',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importer til SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Tildeling',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Filvedlegg til e-post',
    'LBL_EMAIL_ATTACHMENT' => 'Filvedlegg til e-post',
    'LBL_EMAIL_ATTACHMENTS' => 'Vedlegg filer',
    'LBL_EMAIL_ATTACHMENTS2' => 'Fra SuiteCRM-dokumenter',
    'LBL_EMAIL_ATTACHMENTS3' => 'Malvedlegg',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fil',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Dokument',
    'LBL_EMAIL_BCC' => 'Blindkopi',
    'LBL_EMAIL_CANCEL' => 'Avbryt',
    'LBL_EMAIL_CC' => 'Kopi',
    'LBL_EMAIL_CHARSET' => 'Tegnsett',
    'LBL_EMAIL_CHECK' => 'Sjekk e-post',
    'LBL_EMAIL_CHECKING_NEW' => 'Let etter ny e-post',
    'LBL_EMAIL_CHECKING_DESC' => 'Leter etter nye e-postmeldinger. <br><br>Hvis det er første gangen du utfører denne handlingen, kan det ta litt tid.',
    'LBL_EMAIL_CLOSE' => 'Avslutt',
    'LBL_EMAIL_COFFEE_BREAK' => 'Leter etter nye e-postmedlinger. <br><br>Store e-postkontoer kan ta lengre tid å laste opp.',

    'LBL_EMAIL_COMPOSE' => 'E-post',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Angi mottager(e) av denne meldingen.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Meldingen inneholder ikke brødtekst. Vil du sende likevel?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Meldingen mangler emne. Vil du sende likevel?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(intet emne)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Angi gyldig e-postadresse i Til, Kopi og Blindkopi',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Vil du fjerne denne meldingen?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Er du sikker på at du vil slette denne signaturen?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-post sendt',

    'LBL_EMAIL_CREATE_NEW' => '--Opprett ved lagring--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Flere',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Tom',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Dato aendt av avsender',
    'LBL_EMAIL_DATE_TODAY' => 'I dag',
    'LBL_EMAIL_DELETE' => 'Slett',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Vil du slette valgte meldinger?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-post ble slettet.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Sletter melding',
    'LBL_EMAIL_DETAILS' => 'Detaljer',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Bare den primære adressen brukes når du arbeider med kontakter.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Tømmer søppel',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Sletter utgående server',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Fjerner cache-filer.',
    'LBL_EMAIL_EMPTY_MSG' => 'Ingen e-post å vise.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Ingen e-postadresser å vise.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Mappenavn må være unikt og ikke tomt. Prøv på nytt.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Denne mappen kan ikke slettes. Enten har mappen eller en undermappe en e-postkonto knyttet til seg.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Den ønskede mappen kan ikke bli funnet utifra sammenhengen. Vennligst prøv igjen.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Vennligst sjekk dine innstillinger.',
    'LBL_EMAIL_ERROR_DESC' => 'Programmet oppdaget feil:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Trenger du aksess til dette området. Kontakt Administrator.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM-mappenavn må være unike.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Vennligst oppgi søkekriterier.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Det oppsto en feil',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Meldingen ble slettet fra serveren.',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Meldingen har enten blitt slettet fra serveren eller flyttet til en annen mappe.',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Tilkobling til e-postserveren mislyktes. Vennligst kontakt din administrator.',
    'LBL_EMAIL_ERROR_MOVE' => 'Det er for øyeblikket ikke mulig å flytte e-post mellom servere eller e-postkontoer.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'En feil oppsto ved flytting',
    'LBL_EMAIL_ERROR_NAME' => 'Vennligst oppgi et navn.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Vennligst oppgi en avsenderadresse.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Vennligst oppgi et filnavn.',
    'LBL_EMAIL_ERROR_SERVER' => 'Oppgi en e-posttjeneradresse.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'E-postkontoen ble troligvis ikke lagret.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'En feil oppsto ved tilkobling til e-postserveren.',
    'LBL_EMAIL_ERROR_USER' => 'Vennligst oppgi et brukernavn.',
    'LBL_EMAIL_ERROR_PORT' => 'Vennligst oppgi en serverport.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Vennligst oppgi en serverprotokoll.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Vennligst oppgi en overvåket mappe',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Vennligst oppgi en søppelmappe',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Denne informasjonen er ikke tilgjenngelig for øyeblikket.',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Ingen utgående e-postserver spesifisert.',
    'LBL_EMAIL_ERROR_SENDING' => 'Feil i sending av epost. Kontakt systemansvarlig for hjelp.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Mapper',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Legg til',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Legg til ny mappe',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Endre mappenavn',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Lagre',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Legg til denne mappen i',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Denne mappen kan ikke endres',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Er du sikker på at du vil slette denne mappen?\nDenne handlingen kan ikke angres.\nVed å slette en mappe påvirker du alle underliggende mapper.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Ny mappe',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Vennligst velg en mappe før du utfører denne handlingen.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'SuiteCRM-mappe administrasjon',

    'LBL_EMAIL_FORWARD' => 'Videresend',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Nedlasted [[count]] av [[total]] e-post',
    'LBL_EMAIL_FROM' => 'Fra',
    'LBL_EMAIL_GROUP' => 'gruppe',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Gruppe',
    'LBL_EMAIL_HOME_FOLDER' => 'Forside',
    'LBL_EMAIL_IE_DELETE' => 'Slett e-postkonto',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Sletter signatur',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Er du sikker på at du vil slette denne e-postkontoen?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Sletting utført.',
    'LBL_EMAIL_IE_SAVE' => 'Lagrer informasjon om e-postkonto',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importerer e-post',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importer til SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importer innstillinger',
    'LBL_EMAIL_INVALID' => 'Ugyldig',
    'LBL_EMAIL_LOADING' => 'laster...',
    'LBL_EMAIL_MARK' => 'Markér',
    'LBL_EMAIL_MARK_FLAGGED' => 'Som merket',
    'LBL_EMAIL_MARK_READ' => 'Som lest',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Som umerket',
    'LBL_EMAIL_MARK_UNREAD' => 'Som ulest',
    'LBL_EMAIL_ASSIGN_TO' => 'Tildel til',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Opprett mappe',
    'LBL_EMAIL_MENU_COMPOSE' => 'Sett sammen til',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Slett mappe',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Tøm søppel',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synkronisér',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Fjern cache- filer',
    'LBL_EMAIL_MENU_REMOVE' => 'Fjern',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Endre mappenavn',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Endrer mappenavn',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Foreta et valg før du utfører operasjonen.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Opprett mappe (eksternt eller i SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Slett mappe (eksternt eller i SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Tømmer papirkurvmappene for alle dine e-postkontoer',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Merk disse som lest',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Opphev merking av disse',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Gi mappe nytt navn (eksternt eller i SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'meldinger',

    'LBL_EMAIL_ML_NAME' => 'Listenavn',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Valgte listeadresser',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Tilgjengelige listeadresser',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> for å velge flere<br />(Mac-brukere bruker <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'Nei',
    'LBL_EMAIL_NOT_SENT' => 'Systemet kan ikke behandle forespørselen. Vennligst kontakt systemadministrator.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Et øyeblikk...',
    'LBL_EMAIL_OPEN_ALL' => 'Åpne flere meldinger',
    'LBL_EMAIL_OPTIONS' => 'Valg',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Hurtig komponer',
    'LBL_EMAIL_OPT_OUT' => 'Bortvalgt',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Opted Out og ugyldig',
    'LBL_EMAIL_PERFORMING_TASK' => 'Utfører oppgave',
    'LBL_EMAIL_PRIMARY' => 'Primær',
    'LBL_EMAIL_PRINT' => 'Annonsering i avis/magasin',

    'LBL_EMAIL_QC_BUGS' => 'Feil',
    'LBL_EMAIL_QC_CASES' => 'Kundestøtte',
    'LBL_EMAIL_QC_LEADS' => 'Ledetråder',
    'LBL_EMAIL_QC_CONTACTS' => 'Kontakter',
    'LBL_EMAIL_QC_TASKS' => 'Oppgaver',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Salgsmuligheter',
    'LBL_EMAIL_QUICK_CREATE' => 'Opprett enkelt',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Gjenoppbygger mapper',
    'LBL_EMAIL_RELATE_TO' => 'Knytt til',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Vis forhold',
    'LBL_EMAIL_RECORD' => 'E-post registrering',
    'LBL_EMAIL_REMOVE' => 'Fjern',
    'LBL_EMAIL_REPLY' => 'Svar',
    'LBL_EMAIL_REPLY_ALL' => 'Svar til alle',
    'LBL_EMAIL_REPLY_TO' => 'Svar til',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Henter melding',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Henter e-post oppføringen',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Vennligst velg en e-post oppføring',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Tilbake til forrige modul?',
    'LBL_EMAIL_REVERT' => 'Gå tilbake',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relater e-post',

    'LBL_EMAIL_RULES_TITLE' => 'Regelbehandling',

    'LBL_EMAIL_SAVE' => 'Lagre',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Lagre & besvar',
    'LBL_EMAIL_SAVE_DRAFT' => 'Lagre kladd',
    'LBL_EMAIL_DRAFT_SAVED' => 'Utkastet er lagret',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Fra-dato',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Til-dato',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Dine søkekriterier ga ingen funn.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Søkeresultat',

    'LBL_EMAIL_SELECT' => 'Velg',

    'LBL_EMAIL_SEND' => 'Sende',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sender e-post',

    'LBL_EMAIL_SETTINGS' => 'Innstillinger',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'E-postkonto',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Tøm skjema',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Let etter ny e-post',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Fra-adresse',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'E-postadresse for test melding:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Avsendernavn',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Svar til adresse',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synkronisér alle e-postkontoer',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'En e-post ble sendt til den oppgitte e-postadresse i henhold til angitte utgående e-post-innstillinger. Vennligst sjekk om e-posten ble mottatt for å kontrollere at innstillingene er riktige.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Se fullstendig SMTP-Logg',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Vil du utføre en fullstendig synkronisering?\nStore e-postkontoer kan ta lang tid å gjennomføre.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Klikk på Shift knappen eller Ctrl knappen for å velge flere mapper',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Generell',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Opprett gruppemapper',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Redigér gruppemappe',

    'LBL_EMAIL_SETTINGS_NAME' => 'Navn',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Du må kanskje oppdatere siden for å vise endringene.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Henter e-postkonto',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Innstillingene har blitt lagret.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Send som vanlig tekst',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Antall meldinger pr side',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visuelle innstillinger',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferanser',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Tilgjengelige brukermapper',
    'LBL_EMAIL_ERROR_PREPEND' => 'En e-post feil har inntruffet:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Den utgående e-postserver som er valgt for den e-postkontoen du bruker er ugyldig. Sjekk innstillingene eller velg en annen mail server for e-postkontoen.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Utgående e-postserver er ikke konfigurert til å sende e-post. Vennligst konfigurer en utgående e-postserver eller velg en utgående e-postserver for e-postkonto som du bruker i Innstillinger >> Mail konto.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Standardsignatur',
    'LBL_EMAIL_SIGNATURES' => 'Signaturer',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Andre',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Fjerntliggende mapper ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM-mapper ]',
    'LBL_EMAIL_SUBJECT' => 'Emne',
    'LBL_EMAIL_SUCCESS' => 'Vellykket',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM-mappe',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'E-postmal innholdet er tomt',
    'LBL_EMAIL_TEMPLATES' => 'Maler',
    'LBL_EMAIL_TO' => 'Til',
    'LBL_EMAIL_VIEW' => 'Vis',
    'LBL_EMAIL_VIEW_HEADERS' => 'Vis overskrifter',
    'LBL_EMAIL_VIEW_RAW' => 'Vis utkast på e-post',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Funksjonen støttes ikke ved bruk av POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Startverdi link tekst.',
    'LBL_EMAIL_YES' => 'Ja',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Send test e-post',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test e-post sendt',
    'LBL_EMAIL_MESSAGE_NO' => 'Melding nummer',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import passert',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importering mislykket på grunn av at meldingen enten er importert allerede, eller slettet fra server',

    'LBL_LINK_NONE' => 'Ingen',
    'LBL_LINK_ALL' => 'Alle',
    'LBL_LINK_RECORDS' => 'Poster',
    'LBL_LINK_SELECT' => 'Velg',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Bekreft:',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Ønsker du å lukke denne #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Ugyldig filtype',

    'ERR_AJAX_LOAD' => 'En feil har oppstått:',
    'ERR_AJAX_LOAD_FAILURE' => 'Det oppstod en feil ved behandling av forespørselen, vennligst prøv igjen senere.',
    'ERR_AJAX_LOAD_FOOTER' => '
Hvis denne feilen vedvarer, må din administrator deaktivere Ajax for denne modulen',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Desimalseparatoren kan ikke bruke de samme tegnene som tusendelsseparatoren.\\n\\n Vennligst velg andre verdier.',
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette kontakten.',
    'ERR_EXPORT_DISABLED' => 'Eksport deaktivert.',
    'ERR_EXPORT_TYPE' => 'Feil ved eksportering',
    'ERR_INVALID_EMAIL_ADDRESS' => 'ikke en gyldig e-postadresse.',
    'ERR_INVALID_FILE_REFERENCE' => 'Ugyldig filreferanse',
    'ERR_NO_HEADER_ID' => 'Dette valget er ikke tilgjengelig i dette temaet.',
    'ERR_NOT_ADMIN' => 'Ulovlig adgang til administrasjon.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Det mangler et påkrevd felt:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Ugyldig påkrevet felt.',
    'ERR_INVALID_VALUE' => 'Ugyldig verdi:',
    'ERR_NO_SUCH_FILE' => 'Filen finnes ikke på systemet',
    'ERR_NO_SINGLE_QUOTE' => 'Kan ikke bruke enkle anførselstegn for',
    'ERR_NOTHING_SELECTED' => 'Foreta et valg før du fortsetter.',
    'ERR_SELF_REPORTING' => 'En bruker kan ikke ha seg selv som overordnet.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Fant ingen match for feltet.: ',
    'ERR_SQS_NO_MATCH' => 'Ingen match',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Vennligst spesifiser "nøkkel" indeks i displayParams attributt for Meta-Data definisjonen.',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Feil: Portal Navnet er allerde tildelt en annen kontakt.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Verdiene i feltene er ikke kompatible med presisjonsverdi',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'En feil oppstod ved forsøk på å lagre til den eksterne kontoen.',
    'ERR_NO_DB' => 'Kunne ikke koble til databasen. Referer til SuiteCRM-loggfilen for detaljer.',
    'ERR_DB_FAIL' => 'Databasefeil. Vennligst referer til SuiteCRM-loggfilen for detaljer.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} filer kan bare bli brukt med en SuiteCRM {1} database.',

    'LBL_ACCOUNT' => 'Kunde',
    'LBL_ACCOUNTS' => 'Kunder',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vis oppsummering',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vis oppsummering',
    'LBL_ADD_BUTTON' => 'Legg til',
    'LBL_ADD_DOCUMENT' => 'Legg til dokument',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Legg til liste over mål',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Legg kontakter til mållisten',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Klikk for å stenge',
    'LBL_ADDITIONAL_DETAILS' => 'Tilleggsinformasjon',
    'LBL_ADMIN' => 'Admin',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Arkiv',
    'LBL_ASSIGNED_TO_USER' => 'Tildelt bruker',
    'LBL_ASSIGNED_TO' => 'Tildelt brukers navn:',
    'LBL_BACK' => 'Tilbake',
    'LBL_BILLING_ADDRESS' => 'Faktureringsadresse',
    'LBL_QUICK_CREATE' => 'Opprett ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM med åpen kildekode',
    'LBL_BUGS' => 'Feil',
    'LBL_BY' => 'av',
    'LBL_CALLS' => 'Oppringninger',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send kampanje e-post som står i kø',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Send inn',
    'LBL_CASE' => 'Kundestøtte',
    'LBL_CASES' => 'Kundestøtte',
    'LBL_CHANGE_PASSWORD' => 'Endre passord',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Kryss av alle',
    'LBL_CITY' => 'By:',
    'LBL_CLEAR_BUTTON_LABEL' => 'Fjern innhold',
    'LBL_CLEAR_BUTTON_TITLE' => 'Fjern innhold',
    'LBL_CLEARALL' => 'Fjern alt',
    'LBL_CLOSE_BUTTON_TITLE' => 'Avslutt',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Lukk og opprett ny',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Lukk og opprett ny',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Ny e-post',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Ny e-post',
    'LBL_SEARCH_DROPDOWN_YES' => 'Ja',
    'LBL_SEARCH_DROPDOWN_NO' => 'Nei',
    'LBL_CONTACT_LIST' => 'Kontaktliste',
    'LBL_CONTACT' => 'Kontakter',
    'LBL_CONTACTS' => 'Kontakter',
    'LBL_CONTRACT' => 'Kontrakt',
    'LBL_CONTRACTS' => 'Kontrakter',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATE_BUTTON_LABEL' => 'Ny',
    'LBL_CREATED_BY_USER' => 'Opprettet av bruker',
    'LBL_CREATED_USER' => 'Opprettet av bruker',
    'LBL_CREATED' => 'Opprettet av',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DOCUMENTS' => 'Dokumenter',
    'LBL_DATE_ENTERED' => 'Dato opprettet:',
    'LBL_DATE_MODIFIED' => 'Date endret:',
    'LBL_EDIT_BUTTON' => 'Rediger',
    'LBL_DUPLICATE_BUTTON' => 'Duplikat',
    'LBL_DELETE_BUTTON' => 'Slett',
    'LBL_DELETE' => 'Slett',
    'LBL_DELETED' => 'Slettet',
    'LBL_DIRECT_REPORTS' => 'Direkterapporter',
    'LBL_DONE_BUTTON_LABEL' => 'Ferdig',
    'LBL_DONE_BUTTON_TITLE' => 'Ferdig',
    'LBL_FAVORITES' => 'Favoritter',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Vennligst velg en vCard fil',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard har ikke de nødvendige feltene for denne modulen. Referer til suitecrm.log for detaljer.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Den oppladede filen overgår størrelsesbegrensningen på 30000 byte, som ble oppgitt i HTML-formularet.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Det oppsto en feil under opplastingen av vCard-filen. Referer til suitecrm.log for detaljer.',
    'LBL_IMPORT_VCARD' => 'Importer vCard',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importer vCard',
    'LBL_VIEW_BUTTON' => 'Vis',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'E-post som PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'E-post som PDF',
    'LBL_EMAILS' => 'E-post',
    'LBL_EMPLOYEES' => 'Ansatte',
    'LBL_ENTER_DATE' => 'Oppgi dato',
    'LBL_EXPORT' => 'Eksporter',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Gå',
    'LBL_HIDE' => 'Skjul',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importér',
    'LBL_IMPORT_STARTED' => 'Importering ble startet:',
    'LBL_LAST_VIEWED' => 'Sist vist',
    'LBL_LEADS' => 'Ledetråder',
    'LBL_LESS' => 'mindre',
    'LBL_CAMPAIGN' => 'Kampanje:',
    'LBL_CAMPAIGNS' => 'Kampanjer',
    'LBL_CAMPAIGNLOG' => 'Kampanje logg',
    'LBL_CAMPAIGN_CONTACT' => 'Kampanjer',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Ingen',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Funnet ved utsendelse',
    'LBL_FIXED_IN_RELEASE' => 'Ordnet ved utsendelse',
    'LBL_LIST_ACCOUNT_NAME' => 'Navn på kunden',
    'LBL_LIST_ASSIGNED_USER' => 'Bruker',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktens navn',
    'LBL_LIST_CONTACT_ROLE' => 'Kontaktens rolle',
    'LBL_LIST_DATE_ENTERED' => 'Dato opprettet',
    'LBL_LIST_EMAIL' => 'E-post',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_OF' => 'av',
    'LBL_LIST_PHONE' => 'Telefonnr:',
    'LBL_LIST_RELATED_TO' => 'Knyttet til',
    'LBL_LIST_USER_NAME' => 'Brukernavn',
    'LBL_LISTVIEW_NO_SELECTED' => 'Velg minst en oppføring for å fortsette.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Velg minst 2 poster før du fortsetter.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Utvalgte oppføringer',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Utvalgte: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Ukjent',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Person',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dr.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Kode ape ekstraordinær',
    'LBL_CANCEL' => 'Avbryt',
    'LBL_VERIFY' => 'Bekreft',
    'LBL_RESEND' => 'Send på nytt',
    'LBL_PROFILE' => 'Profil',
    'LBL_MAILMERGE' => 'Fletting av e-post',
    'LBL_MASS_UPDATE' => 'Masseoppdatering',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Det er ingen tilgjengelige felter for masseoppdateringsoperasjonen.',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Velg bort primær e-post',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Velg primær e-post',
    'LBL_MEETINGS' => 'Møter',
    'LBL_MEETING_GO_BACK' => 'Gå tilbake til møtet',
    'LBL_MEMBERS' => 'Medlemmer',
    'LBL_MEMBER_OF' => 'Medlem av',
    'LBL_MODIFIED_BY_USER' => 'Modifisert av bruker',
    'LBL_MODIFIED_USER' => 'Modifisert av bruker',
    'LBL_MODIFIED' => 'Endret av',
    'LBL_MODIFIED_NAME' => 'Endret av navn',
    'LBL_MORE' => 'Mer',
    'LBL_MY_ACCOUNT' => 'Min konto',
    'LBL_NAME' => 'Navn',
    'LBL_NEW_BUTTON_KEY' => 'O',
    'LBL_NEW_BUTTON_LABEL' => 'Ny',
    'LBL_NEW_BUTTON_TITLE' => 'Ny',
    'LBL_NEXT_BUTTON_LABEL' => 'Neste',
    'LBL_NONE' => '--Ingen--',
    'LBL_NOTES' => 'Notater:',
    'LBL_OPPORTUNITIES' => 'Salgsmuligheter',
    'LBL_OPPORTUNITY_NAME' => 'Salgsmulighetens betegnelse',
    'LBL_OPPORTUNITY' => 'Salgsmuligheter',
    'LBL_OR' => 'ELLER',
    'LBL_PANEL_OVERVIEW' => 'Info om kunden',
    'LBL_PANEL_ASSIGNMENT' => 'ANDRE',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Foreldertype',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primæradresse, sted:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primæradresse, land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primæradresse, postnr:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primæradresse, stat:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primæradresse, gatenavn 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primæradresse, gatenavn 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primæradresse, gatenavn:',
    'LBL_PRIMARY_ADDRESS' => 'Primæradresse:',

    'LBL_PROSPECTS' => 'Prospekter',
    'LBL_PRODUCTS' => 'Produkter',
    'LBL_PROJECT_TASKS' => 'Prosjektoppgaver',
    'LBL_PROJECTS' => 'Prosjekter',
    'LBL_QUOTES' => 'Tilbud',

    'LBL_RELATED' => 'Beslektet',
    'LBL_RELATED_RECORDS' => 'Relaterte oppføringer',
    'LBL_REMOVE' => 'Fjern',
    'LBL_REPORTS_TO' => 'Rapporterer til',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indikerer påkrevd felt',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Ferdig',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Fullstendig skjema',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Fullstendig skjema',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Lagre og opprett ny',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Lagre og opprett ny',
    'LBL_SAVE_OBJECT' => 'Lagre {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'C',
    'LBL_SEARCH_BUTTON_LABEL' => 'Søk',
    'LBL_SEARCH_BUTTON_TITLE' => 'Søk',
    'LBL_FILTER' => 'Filtrer',
    'LBL_SEARCH' => 'Søk',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'mer',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Ugyldig filformat, kun bilde-fil kan lastes opp.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Velg',
    'LBL_SELECT_BUTTON_TITLE' => 'Velg',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Bla i dokumenter',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Bla i dokumenter',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Velg kontakt',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Velg kontakt',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Velg fra rapporter',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Velg rapporter',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Velg bruker',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Velg bruker',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Fjern valg',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Fjern valg',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Fjern valg',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Fjern valg',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Velg fil',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Velg fil',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Fjern fil innhold',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Fjern fil innhold',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Velg bruker',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Velg bruker',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Tøm bruker',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Tøm bruker',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Velg Kunde',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Velg Kunde',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Fjern kontakt oppføringen',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Fjern kontakt oppføringen',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Velg kampanje',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Velg kampanje',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Nullstill kampanjen',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Nullstill kampanjen',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Velg kontakt',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Velg kontakt',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Fjern kontakt oppføringen',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Fjern kontakt oppføringen',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Velg gruppe',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Velg gruppe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Fjern gruppen',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Fjern gruppen',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressurser benyttet for å lage denne siden (spørringer, filer)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'sekunder.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server responstid:',
    'LBL_SERVER_MEMORY_BYTES' => 'byte',
    'LBL_SERVER_MEMORY_USAGE' => 'Tjenerminnebruk: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Bruk: - modul: {0} - handling: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Tjener toppminnebruk: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Leveringsadresse',
    'LBL_SHOW' => 'Vis',
    'LBL_STATE' => 'Status:',
    'LBL_STATUS_UPDATED' => 'Din status for denne hendelsen ble  oppdatert.',
    'LBL_STATUS' => 'Status',
    'LBL_STREET' => 'Gate',
    'LBL_SUBJECT' => 'Emne',

    'LBL_INBOUNDEMAIL_ID' => 'Innkommende e-post ID',

    'LBL_SCENARIO_SALES' => 'Salg',
    'LBL_SCENARIO_MARKETING' => 'Markedsføring',
    'LBL_SCENARIO_FINANCE' => 'Finans',
    'LBL_SCENARIO_SERVICE' => 'Tjeneste',
    'LBL_SCENARIO_PROJECT' => 'Prosjekt styring',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Dette scenariet forenkler håndteringen av salgsvarer',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Dette scenariet forenkler forvaltningen av markedselementer',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Dette scenariet forenkler forvaltningen av finans relaterte elementer',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Dette scenariet forenkler forvaltningen av service relaterte elementer',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Dette scenariet forenkler styring av prosjekt relaterte elementer',

    'LBL_SYNC' => 'Synk',
    'LBL_TABGROUP_ALL' => 'Alle',
    'LBL_TABGROUP_ACTIVITIES' => 'Aktiviteter',
    'LBL_TABGROUP_COLLABORATION' => 'Samarbeid',
    'LBL_TABGROUP_MARKETING' => 'Markedsføring',
    'LBL_TABGROUP_OTHER' => 'Andre',
    'LBL_TABGROUP_SALES' => 'Salg',
    'LBL_TABGROUP_SUPPORT' => 'Markedsførings- & supportside',
    'LBL_TASKS' => 'Oppgaver',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arkiver e-post',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arkiver e-post',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Angre sletting',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Angre sletting',
    'LBL_UNDELETE_BUTTON' => 'Angre sletting',
    'LBL_UNDELETE' => 'Angre sletting',
    'LBL_UNSYNC' => 'Usynkroniser',
    'LBL_UPDATE' => 'Oppdater',
    'LBL_USER_LIST' => 'Liste over brukere',
    'LBL_USERS' => 'Brukere:',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Sjekker eksisterende e-post tilgang',
    'LBL_VERIFY_PORTAL_NAME' => 'Sjekker eksisterende portalnavn...',
    'LBL_VIEW_IMAGE' => 'vis',

    'LNK_ABOUT' => 'Om',
    'LNK_ADVANCED_FILTER' => 'Avansert Filter',
    'LNK_BASIC_FILTER' => 'Hurtigfilter',
    'LBL_ADVANCED_SEARCH' => 'Avansert Filter',
    'LBL_QUICK_FILTER' => 'Hurtigfilter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Vis alle',
    'LNK_CLOSE' => 'Avslutt',
    'LBL_MODIFY_CURRENT_FILTER' => 'Endre gjeldende filter',
    'LNK_SAVED_VIEWS' => 'Layout alternativer',
    'LNK_DELETE' => 'Slett',
    'LNK_EDIT' => 'Rediger',
    'LNK_GET_LATEST' => 'Hent siste',
    'LNK_GET_LATEST_TOOLTIP' => 'Erstatt med siste versjon',
    'LNK_HELP' => 'Hjelp',
    'LNK_CREATE' => 'Ny',
    'LNK_LIST_END' => 'Slutt',
    'LNK_LIST_NEXT' => 'Neste',
    'LNK_LIST_PREVIOUS' => 'Forrige',
    'LNK_LIST_RETURN' => 'Tilbake til liste',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED' => 'Signer',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Erstatt med signert dokument',
    'LNK_PRINT' => 'Annonsering i avis/magasin',
    'LNK_BACKTOTOP' => 'Tilbake til toppen',
    'LNK_REMOVE' => 'Fjern',
    'LNK_RESUME' => 'Gjenoppta',
    'LNK_VIEW_CHANGE_LOG' => 'Vis endringslogg',

    'NTC_CLICK_BACK' => 'Klikk på nettleserens tilbakeknapp og reparer feilen.',
    'NTC_DATE_FORMAT' => '(åååå-mm-dd 24:00)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Er du sikker på at du vil slette de utvalgte oppføring(er)?',
    'NTC_TEMPLATE_IS_USED' => 'Malen brukes i minst en e-post markedsføringspost. Er du sikker på at du vil slette den?',
    'NTC_TEMPLATES_IS_USED' => 'Følgende maler brukes i e-markedsførings poster. Er du sikker på at du vil slette dem?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Er du sikker på at du vil slette denne oppføringen?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Vil du virkelig slette',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Vil du virkelig oppdatere',
    'NTC_DELETE_SELECTED_RECORDS' => 'valgte poster?',
    'NTC_LOGIN_MESSAGE' => 'Oppgi brukernavn og passor.',
    'NTC_NO_ITEMS_DISPLAY' => 'Nei',
    'NTC_REMOVE_CONFIRMATION' => 'Er du sikker på at du vil fjerne dette forholdet?',
    'NTC_REQUIRED' => 'Indikerer påkrevd felt',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Velkommen',
    'NTC_YEAR_FORMAT' => '(åååå)',
    'WARN_UNSAVED_CHANGES' => 'Du er i ferd med å forlate denne posten uten å lagre eventuelle endringer du har gjort. Er du sikker på at du vil forlate denne posten?',
    'ERROR_NO_RECORD' => 'En feil oppsto ved henting av fil. Denne oppføringen kan ha blitt slettet eller så har du ikke tilgang til å vise filen.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Advarsel:</b> Nettleserversjonen din er ikke lenger støttet, eller så bruker du en ikke-støttet nettleser.<p></p>De følgende nettleserene er anbefalt: <p></p><ul><li>Internet Explorer 10 (kompatibilitetsvisning ikke støttet)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul> ',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Advarsel:</b> Nettleseren din er i IE kompabilitetsvisning. Dette er ikke støttet.',
    'ERROR_TYPE_NOT_VALID' => 'Error. Denne typen er ikke gyldig.',
    'ERROR_NO_BEAN' => 'Fikk ikke tak i bean.',
    'LBL_DUP_MERGE' => 'Finn dubletter',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Behandle abonnement',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Behandle abonnementer for',
    // Ajax status strings
    'LBL_LOADING' => 'laster...',
    'LBL_SEARCHING' => 'Søker...',
    'LBL_SAVING_LAYOUT' => 'Lagrer oppsett...',
    'LBL_SAVED_LAYOUT' => 'Oppsettet er lagret.',
    'LBL_SAVED' => 'Lagret',
    'LBL_SAVING' => 'Lagrer',
    'LBL_DISPLAY_COLUMNS' => 'Vis kolonner',
    'LBL_HIDE_COLUMNS' => 'Skjul kolonner',
    'LBL_SEARCH_CRITERIA' => 'Søkekriterier',
    'LBL_SAVED_VIEWS' => 'Lagrede visninger',
    'LBL_PROCESSING_REQUEST' => 'Arbeider...',
    'LBL_REQUEST_PROCESSED' => 'Ferdig',
    'LBL_AJAX_FAILURE' => 'Ajax feil',
    'LBL_MERGE_DUPLICATES' => 'Slå sammen dubletter',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mine filtre',
    'LBL_SEARCH_POPULATE_ONLY' => 'Utfør søk med søkeskjemaet ovenfor.',
    'LBL_DETAILVIEW' => 'Detaljert',
    'LBL_LISTVIEW' => 'Liste',
    'LBL_EDITVIEW' => 'Redigering',
    'LBL_BILLING_STREET' => 'Gate:',
    'LBL_SHIPPING_STREET' => 'Gate:',
    'LBL_SEARCHFORM' => 'Søkeskjema',
    'LBL_SAVED_SEARCH_ERROR' => 'Angi et navn for dette oppsettet.',
    'LBL_DISPLAY_LOG' => 'Lis logg',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Systemadministrasjon',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Tidsavbrudd',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Sesjonen tidsavbrytes om 2 minutter. Lagre endringene.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Økten din er tidsavbrutt',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Møter',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Oppringninger',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Klokkeslett:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Sted:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Beskrivelse:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Tilknyttet:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Arrangement',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Hendelsen er ikke satt.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Sted er ikke angitt.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Startdato er ikke angitt.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Fant ingen resultater.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Fant ingen resultater... Endre søkekriteriene og prøv igjen?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Fant ingen resultater for <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Opprett <item1> som et nytt <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'eller endre søkekriteriene',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Du har ingen lagrede oppføringer. <item2> eller <item3> en nå.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Legg til mine favoritter',
    'LBL_CREATE_CONTACT' => 'Opprett kontakt',
    'LBL_CREATE_CASE' => 'Ny sak (kundestøtte)',
    'LBL_CREATE_NOTE' => 'Nytt notat eller vedlegg',
    'LBL_CREATE_OPPORTUNITY' => 'Ny salgsmulighet',
    'LBL_SCHEDULE_CALL' => 'Ny oppringning',
    'LBL_SCHEDULE_MEETING' => 'Nytt møte',
    'LBL_CREATE_TASK' => 'Ny oppgave',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Lag skjema',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Lagre Web-skjema',
    'LBL_AVAILABLE_FIELDS' => 'Tilgjengelige felt',
    'LBL_FIRST_FORM_COLUMN' => 'Første skjema-kolonne',
    'LBL_SECOND_FORM_COLUMN' => 'Andre skjema-kolonne',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Mangler obligatorisk felt: tildelt til',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Mangler obligatorisk felt: relatert kampanje',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Webskjemaet for å opprette ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Å sende dette skjemaet oppretter ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Bruk alle feltene',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Tilbakestill alle felt',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Fjern alle feltene',
    'LBL_NEXT_BTN' => 'Neste',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Bare bildevedlegg kan legges inn.',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Endret databasekontekst til',
    'ERR_MSSQL_WARNING' => 'Advarsel:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Feil: Filen [[file]] mangler. Kan ikke opprette, fordi ingen tilsvarende HTML-fil ble funnet.',
    'ERR_CANNOT_FIND_MODULE' => 'Error: Modulen eksisterer ikke',
    'LBL_ALT_ADDRESS' => 'Annen adresse:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Feil: Antallet argumenter for \'key\' og \'copy\' elementene i displayParams-arrayet stemmer ikke overens.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generell',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtre',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Bare mine egne',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tittel:',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vis rader',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Du har oppnådd det maksimale antall Dashlets som din administrator tillater. Vennligst fjern en Dashlet for å legge til flere.',
    'LBL_ADDING_DASHLET' => 'Legger til SuiteCRM-dashlet',
    'LBL_ADDED_DASHLET' => 'SuiteCR-dashlet lagt til',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Er du sikker på at du vil fjerne denne SuiteCRM-dashleten?',
    'LBL_REMOVING_DASHLET' => 'Fjerner SuiteCRM-dashlet',
    'LBL_REMOVED_DASHLET' => 'Dashlet fjernet',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Laster side, vent litt...',

    'LBL_RELOAD_PAGE' => '<a href="javascript: window.location.reload()">Oppfrisk dette vinduet</a> for å bruke denne SuiteCRM-dashleten.',
    'LBL_ADD_DASHLETS' => 'Legg til dashlets',
    'LBL_CLOSE_DASHLETS' => 'Avslutt',
    'LBL_OPTIONS' => 'Valg',
    'LBL_1_COLUMN' => '1 kolonne',
    'LBL_2_COLUMN' => '2 kolonner',
    'LBL_3_COLUMN' => '3 kolonner',
    'LBL_PAGE_NAME' => 'Sidenavn',

    'LBL_SEARCH_RESULTS' => 'Søkeresultat',
    'LBL_SEARCH_MODULES' => 'Moduler',
    'LBL_SEARCH_TOOLS' => 'Verktøy',
    'LBL_SEARCH_HELP_TITLE' => 'Jobber med flervalg og lagrede søk',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Intet bilde',

    'LBL_MODULE' => 'Modul',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Kopiér adresse fra venstre:',
    'LBL_SAVE_AND_CONTINUE' => 'Lagre og fortsett',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Flervalg kontroller</strong></p><ul><li>Klikk på en verdi for og velge en enhet.</li><li>Ctrl+klikk&nbsp;for å&nbsp;velge flere. For MAC brukere trykk CMD+klikk.</li><li>For å velge alle verdier mellom to enheter &nbsp; klikk på første verdi&nbsp;og så trykk Shift+klikk på siste verdi.</li></ul><p><strong>Avanserte valg for søk og sideoppsett</strong><br><br>
Ved å benytte <b>Lagre søk</b> med tilpassede innstillinger: Du kan lagre et utvalg søke parametere og/eller en egentilpasset <i><i>Liste visning</i></i> for å raskt benytte ønskede søke resultat i fremtiden. Du kan lagre ett ubegrenset antall søke resultater og visninger. Alle lagrede søk vil vises etter navn i <i>Lagrede søk</i> listen. Det siste søket som er lastet inn, vil komme stå øverst på listen.<br><br>For å tilpasse <i><i>Liste visning</i></i>, benytt <i>Skjulte kolonner</i> og <i>Viste kolonner</i> boksene for å endre visningen i søke resultatene. For eksempel, kan du velge å vise eller gjemme Oppføringens navn, og Tilknyttet bruker, og Tilknyttet gruppe i søke resultatene. For å legge en kollonne til i <i><i>Liste visning</i></i>, velg feltet i <i>Skjulte kolonner</i> listen og trykk venstre pil for å flytte feltet til <i>Viste kolonner</i> listen. For å fjerne en kollonne fra <i>Liste visning</i>, velg feltet i Viste kollonner listen og trykk høyre pil for og flytte feltet til Skjulte kollonner listen. <br><br> Hvis du lagrer <i>Liste visning</i> instillingene, kan du når som helst benytte disse for å se søke resultatene i den tilpassede <i>Liste visning</i>. <br><br>For og lagre og/eller oppdatere ett søk eller visning:<ol><li>Tildel et navn for søke resultatet i <b>Lagre dette søket som</b> feltet og klikk <b>Lagre</b>. Navnet vises nå i <i>Lagrede søk</i> listen ovenfor <b>Nullstill</b> knappen.</li><li>For å se ett lagret søk, velg søkenavnet i <i>Lagrede søk</i> listen. Søke reslutatene vises i <i>Liste visning</i>.</li><li>For å oppdatere søke egenskapene for ett lagret søk, velg det lagrede søket fra listen, angi de nye søke kriteriene og/eller visnings alternativene i <i>Avansert søk</i> feltet, og klikk <b>Oppdater</b> ved siden av <b>Endre dette søket</b>.</li><li>For å slettet ett lagret søk, velg søket i <i>Lagrede søk</i> listen, trykk <b>Slett</b> ved siden av <b>Endre dette søket</b>, klikk så <b>OK</b> for og bekrefte slettingen.</li></ol><p><strong>Tips</strong><br><br>Ved å benytte % i tilknyttningen til ditt søk, kan du utvide søkeresultatet. For eksempel, i stedet for og bare søke etter ordet "Epler" kan du endre søket ditt til "Epler%" som da vil vise treff på alle resultater som starter med ordet Epler, og også inneholder andre tegn og bokstaver.</p>
 
$app_strings[\'LBL_SEARCH_HELP_TEXT\']',

    //resource management
    'ERR_QUERY_LIMIT' => 'Feil: Spørringsgrense på $limit ble nådd for $module modulen.',
    'ERROR_NOTIFY_OVERRIDE' => 'Feil: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Feil: Kan ikke opprette monitor fordi metadata- filen enten er tom, eller eksistere ikke.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Feil: Det er ingen monitor konfigurert for ønsket navn',
    'ERR_UNDEFINED_METRIC' => 'Feil: Kan ikke sette verdi for udefinert måledata.',
    'ERR_STORE_FILE_MISSING' => 'Feil: Kan ikke finne gjennomføringsfilen for lagring.',

    'LBL_MONITOR_ID' => 'Overvåknings-ID',
    'LBL_USER_ID' => 'Bruker Id',
    'LBL_MODULE_NAME' => 'Modulnavn',
    'LBL_ITEM_ID' => 'Objekt ID',
    'LBL_ITEM_SUMMARY' => 'Objekt oppsummering',
    'LBL_ACTION' => 'Handling',
    'LBL_SESSION_ID' => 'Session ID',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack opprettet for bruker ID {0}',
    'LBL_VISIBLE' => 'Synlige oppøringer',
    'LBL_DATE_LAST_ACTION' => 'Dato for siste handling',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'Er ikke tidligere',
    'MSG_IS_MORE_THAN' => 'er mer enn',
    'MSG_SHOULD_BE' => 'skal være',
    'MSG_OR_GREATER' => 'eller større',

    'LBL_LIST' => 'Liste',
    'LBL_CREATE_BUG' => 'Ny bug',

    'LBL_OBJECT_IMAGE' => 'Objektbilde',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Velg dato',

    'LBL_VALIDATE_RANGE' => 'Er ikke innenfor gyldig område',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Velg både en start- og en slutt-dato',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Velg både start- og stopp-punkter i intervalloppføringer',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Alle',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Feil: Array antall av "bean" parametre stemmer ikke overens med Array sum av resultatene.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Feil: Manglende stedsangivelse for modulen.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Feil: Kan ikke hente data for {0} tilknytting. Tjenesten kan nå være utilgjengelige eller konfigureringsinnstillingene kan være ugyldige. Feilmelding for tilknytting: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'For optimal erfaring bruk IIS / FastCGI SAPI, sett fastcgi.logging til 0 i php.ini filen.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Navn',
    'LBL_COLLECTION_PRIMARY' => 'Primær',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Obligatorisk felt er tomt',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Tildelt til',
    'LBL_DESCRIPTION' => 'Beskrivelse',

    'LBL_YESTERDAY' => 'I går',
    'LBL_TODAY' => 'i dag',
    'LBL_TOMORROW' => 'i morgen',
    'LBL_NEXT_WEEK' => 'neste uke',
    'LBL_NEXT_MONDAY' => 'neste mandag',
    'LBL_NEXT_FRIDAY' => 'neste fredag',
    'LBL_TWO_WEEKS' => 'to uker',
    'LBL_NEXT_MONTH' => 'neste måned',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'første dag i neste måned',
    'LBL_THREE_MONTHS' => 'tre måneder',
    'LBL_SIXMONTHS' => 'seks måneder',
    'LBL_NEXT_YEAR' => 'Neste år',

    //Datetimecombo fields
    'LBL_HOURS' => 'timer',
    'LBL_MINUTES' => 'minutter',
    'LBL_MERIDIEM' => 'Middag',
    'LBL_DATE' => 'Dato',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Automatisk oppdatering',

    'LBL_DURATION_DAY' => 'dag',
    'LBL_DURATION_HOUR' => 'time',
    'LBL_DURATION_MINUTE' => 'minutt',
    'LBL_DURATION_DAYS' => 'dager',
    'LBL_DURATION_HOURS' => 'Varighet timer',
    'LBL_DURATION_MINUTES' => 'Varighet minutter',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Velg måned',
    'LBL_ENTER_YEAR' => 'Skriv År',
    'LBL_ENTER_VALID_YEAR' => 'Skriv inn et gyldig år',

    //File write error label
    'ERR_FILE_WRITE' => 'Feil: Kunne ikke skrive filen {0}. Vennligst sjekk system-og web server tillatelser.',
    'ERR_FILE_NOT_FOUND' => 'Feil: Kunne ikke laste opp filen {0}. Vennligst sjekk system-og web server tillatelser.',

    'LBL_AND' => 'Og',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fil på ekstern kilde',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sikkerhet',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Dette er en prøveimporteringsfil som viser et eksempel på det forventede innholdet i en fil som er klar for å bli importert.
"Filen er en kommaseparert .csv-fil, som bruker doble apostrofer som feltkvalifisator".

"Hoderaden er ten øverste raden i filen, og inneholder feltetiketter slik du vil se dem i programmet."
"Disse etikettene er brukt for å tilordne data i til felter i programmet."

"Notér: Databasenavn kan også bli brukt i hoderaden. Dette er praktisk når du bruker phpMyAdmin eller andre databaseverktøy for å eksportere lister av data du vil importere."
"Kolonnerekkefølgen er ikke så nøye, så lenge importprosessen sender data til de riktige feltene, basert på hoderaden."


"For å bruke denne filen som en mal, gjør følgende:"
"1. Fjern prøvedata"
"2. Fjern hjelpeteksten du leser nå"
"3. Fyll inn din egen data i de riktige radene og kolonnene"
"4. Lagre filen på et kjent område på systemet ditt"
"5. Klikk på importer-valget i handlingsmenyen i programmet, velg filen du lagret og last den opp"',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Ingen varsler',
    'LBL_ALT_SORT_DESC' => 'Sorter synkende',
    'LBL_ALT_SORT_ASC' => 'Sorter stigende',
    'LBL_ALT_SORT' => 'Sorter',
    'LBL_ALT_SHOW_OPTIONS' => 'Vis innstillinger',
    'LBL_ALT_HIDE_OPTIONS' => 'Gjem Innstilinger',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Flytt de merkede elementene til listen til venstre',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Flytt de merkede elementene til listen til høyre',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Flytt de merkede elementene oppover i listen',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Flytt de merkede elementene nedover i listen',
    'LBL_ALT_INFO' => 'Informasjon',
    'MSG_DUPLICATE' => '{0} oppføringen du er i gang med å opprette kan være en duplikat av en {0} oppføring som allerede eksisterer. {1} oppføringer som inneholder lignende navn er listet under.<br>Klikk Opprett {1} for å fortsette med opprettingen av denne {0}, eller velg en eksisterende {0} under.',
    'MSG_SHOW_DUPLICATES' => '{0} oppføringen du er i gang med å opprette kan være en duplikat av en {0} oppføring som allerede eksisterer. {1} oppføringer som inneholder lignende navn er listet under. Klikk Lagre for å fortsette med opprettingen av denne {0}, eller klikk Avbryt for å returnere til modulen uten å opprette {0}.',
    'LBL_EMAIL_TITLE' => 'e-postadresse',
    'LBL_EMAIL_OPT_TITLE' => 'bortvalgt e-postadresse',
    'LBL_EMAIL_INV_TITLE' => 'ugyldig e-postadresse',
    'LBL_EMAIL_PRIM_TITLE' => 'Gjøre e-postadresse primær',
    'LBL_SELECT_ALL_TITLE' => 'Velg alt',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Velg denne raden',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'Feil: Det oppsto en feil under opplasting. Feilkode: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'Feil: Det oppsto en feil under opplasting. Feilkode: {0} - {1}. Maksimale størrelse på opplastinger er {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'Feil: Det oppsto en feil under opplasting. Ta kontakt med en administrator for å få hjelp.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Opplastningsstørrelse ({0} byte) oversteg det tillatte maksimum: {1} byte',
    'UPLOAD_REQUEST_ERROR' => 'En feil har oppstått. Oppfrisk siden og prøv på nytt.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Rediger',
    'LBL_EDIT_BUTTON_TITLE' => 'Rediger',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplikat',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplikat',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Slett',
    'LBL_DELETE_BUTTON_TITLE' => 'Slett',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Handling',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Lagre',
    'LBL_SAVE_BUTTON_TITLE' => 'Lagre',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Avbryt',
    'LBL_CANCEL_BUTTON_TITLE' => 'Avbryt',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'koblingsarray i {0} har blitt definert feilaktig, eller så er det tomt og kunne ikke brukes.',
    'ERR_SUHOSIN' => 'Opplastningsstrøm er blookert av Suhosin. Legg til &quot;upload&quot; i suhosin.executor.include.whitelist (se suitecrm.log for mer informasjon)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Feilaktig svar fra tjeneren',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Tilbud',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Salgspris',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuellt',
        '5' => 'Hvert 5 minutt',
        '15' => 'Hvert 15. minutt',
        '30' => 'Hvert 30. minutt',
        '60' => 'Hver time',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'En påminnelse er tom eller feilaktig',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Påminnelse er ikke angitt for enten et sprettoppvindu eller en e-post.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Ingen gjester angitt for påminnelsen.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Påminnelse inneholder ikke noen inviterte, vil du fjerne påminnelsen?',
    'LBL_DELETE_REMINDER' => 'Slett påminnelsen',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Velg kolonner',
    'LBL_COLUMN_CHOOSER' => 'Kolonnevelgeren',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Lagre endringer',
    'LBL_DISPLAYED' => 'Vises',
    'LBL_HIDDEN' => 'Skjult',
    'ERR_EMPTY_COLUMNS_LIST' => 'Minst ett element kreves',

    'LBL_FILTER_HEADER_TITLE' => 'Filtrer',

    'LBL_CATEGORY' => 'Kategori',
    'LBL_LIST_CATEGORY' => 'Kategori',
    'ERR_FACTOR_TPL_INVALID' => 'Faktor autentisering melding er ugjyldig, kontakt din system administrator.',
    'LBL_SUBTHEMES' => 'Stil',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Kveld',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Dag',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Skumring',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Natt',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Middag',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Se bort fra utkast',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Denne operasjonen vil slette denne e-posten, vil du fortsette?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Avslutt e-post redigering',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Ved å avslutte e-post redigering vil alle endringer slettes, ønsker du å fortsette?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Bruke en epost-mal',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Denne operasjonen vil overstyre email-emne og -innhold, vil du fortsette?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Bekreftet deltagelse',
    'LBL_OPT_IN_TITLE' => 'Påmeldt',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Bekreftet deltagelse dato',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Dato for sendt Bekreftet deltagelse',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Bekreftet deltagelse feilet dato',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Deltagelses bekreftelses kode',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Deltagelses e-post mal er ikke konfigurert. Vennligst konfigurer i e-postinnstillingene.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Påmelding krever at e-post adressen er tilknyttet en Kundekonto/kontakt/ledetråd/målgruppe',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Ikke-arvbar gruppe',
    'LBL_PRIMARY_GROUP' => "Primærgruppe",

    // footer
    'LBL_SUITE_TOP' => 'Tilbake til toppen',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged av SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered by SuiteCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Dette er fri programvarer. Du kan videredistribuere og/eller modifisere det under betingelsene i GNU Affero General Public License versjon 3 utgitt av Free Software Foundation, inkludert ekstra tillatelse i overskriften kilde koden.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Tilbakestill passord',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Bekreft påmelding e-post',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Bekreft påmeldings e-post kun for Kontoer/Kontakter/Ledetråder/Prospekter',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'E-post bekreftelse av påmelding er deaktivert, aktiver utsendelse av påmeldingsbekreftelse på e-post under E-post instillinger eller kontakt din Systemadministrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Sending av e-post med påmeldingsbekreftelse er ikke mulig da kontakten ikke har noen hoved e-postadresse',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Sending av e-post med påmeldingsbekreftelse feilet',
    'LBL_CONFIRM_EMAIL_SENT' => 'E-post med påmeldingsbekreftelse er sendt',
);

$app_list_strings['moduleList']['Library'] = 'Bibliotek';
$app_list_strings['moduleList']['EmailAddresses'] = 'E-postadresse:';
$app_list_strings['project_priority_default'] = 'Media';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Høy',
    'Medium' => 'Media',
    'Low' => 'Lav',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Samtykke',
    'contract' => 'Kontrakt',
    'legal_obligation' => 'Påkrevd etter loven',
    'protection_of_interest' => 'Interresse beskyttelse',
    'public_interest' => 'Almen interresse',
    'legitimate_interest' => 'Legitim interresse',
    'withdrawn' => 'Tilbakekallet',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Nettsted',
    'phone' => 'Telefonnr:',
    'given_to_user' => 'Pålagt av bruker',
    'email' => 'E-post',
    'third_party' => 'Tredje part',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Kunnskapsbase';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIE',
    'AMERICAN SAMOA' => 'AMERIKANSK SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARKTIS',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'ØSTERRIKE',
    'AZERBAIJAN' => 'ASERBAJDSJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'HVITERUSSLAND',
    'BELGIUM' => 'BELGIA',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVETØYA',
    'BRAZIL' => 'BRASIL',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITISK ANTARKTIS',
    'BRITISH INDIAN OCEAN TERRITORY' => 'DET BRITISKE TERRITORIUM I DET INDISKE HAV',
    'BRITISH VIRGIN ISLANDS' => 'BRITISKE JOMFRUØYER',
    'BRITISH WEST INDIES' => 'DE BRITISKE VESTINDISKE ØYER',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'KAMBODSJA',
    'CAMEROON' => 'KAMERUN',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'KANALSONEN',
    'CANARY ISLAND' => 'KANARIØYENE',
    'CAPE VERDI ISLANDS' => 'CAPE VERDE-ØYENE',
    'CAYMAN ISLANDS' => 'CAYMANØYENE',
    'CHAD' => 'TSJAD',
    'CHANNEL ISLAND UK' => 'KANALØYENE',
    'CHILE' => 'CHILE',
    'CHINA' => 'KINA',
    'CHRISTMAS ISLAND' => 'KIRITIMATI',
    'COCOS (KEELING) ISLAND' => 'KOKOSØYENE',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'KOMORENE',
    'CONGO' => 'KONGO',
    'CONGO KINSHASA' => 'DEN DEMOKRATISKE REPUBLIKKEN KONGO',
    'COOK ISLANDS' => 'COOKØYENE',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'KROATIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'KYPROS',
    'CZECH REPUBLIC' => 'TSJEKKIA',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINIKANSKE REPUBLIKK',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPT',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EKVATORIAL GUINEA',
    'ESTONIA' => 'ESTLAND',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'FÆRØYENE',
    'FALKLAND ISLANDS' => 'FALKLANDSØYENE',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANKRIKE',
    'FRENCH GUIANA' => 'FRANSK GUIANA',
    'FRENCH POLYNESIA' => 'FRANSK POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'TYSKLAND',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'HELLAS',
    'GREENLAND' => 'GRØNLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'UNGARN',
    'ICELAND' => 'ISLAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLAND',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'ELFENBENSKYSTEN',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAPAN',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KASAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA, SYD',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KIRGISISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LIBANON',
    'LEEWARD ISLANDS' => 'LEEWARDØYENE',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LICHTENSTEIN',
    'LITHUANIA' => 'LITAUEN',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MAKEDONIA',
    'MADAGASCAR' => 'MADAGASKAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'MALDIVENE',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MAROKKO',
    'MOZAMBIQUE' => 'MOSAMBIK',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NEDERLAND',
    'NETHERLANDS ANTILLES' => 'NEDERLANDSKE ANTILLER',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NEDERLANDSKE ANTILLER NØYTRAL SONE',
    'NEW CALADONIA' => 'NY-CALEDONIA',
    'NEW HEBRIDES' => 'VANUATU',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLKØYA',
    'NORWAY' => 'NORGE',
    'OMAN' => 'OMAN',
    'OTHER' => 'ANDRE',
    'PACIFIC ISLAND' => 'STILLEHAVSØYENE',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NY GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'FILIPPINENE',
    'POLAND' => 'POLEN',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'ØST-TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'HVITERUSSLAND',
    'REPUBLIC OF SOUTH AFRICA' => 'SØR-AFRIKA',
    'REUNION' => 'GJENFORENING',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSSLAND',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYUØYENE',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDIARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLENE',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'SØR-AFRIKA',
    'SOUTH YEMEN' => 'SØR-YEMEN',
    'SPAIN' => 'SPANIA',
    'SPANISH SAHARA' => 'SPANSK SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT KITTS OG NEVIS',
    'ST. LUCIA' => 'SAINT LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRIKA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SVERIGE',
    'SWITZERLAND' => 'SVEITS',
    'SYRIA' => 'SYRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TADSJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNIS',
    'TURKEY' => 'TYRKIA',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINA',
    'UNITED ARAB EMIRATES' => 'FORENTE ARABISKE EMIRATER',
    'UNITED KINGDOM' => 'STORBRITANNIA',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'USAS STILLEHAVSØYER',
    'US VIRGIN ISLANDS' => 'DE AMERIKANSKE JOMFRUØYENE',
    'USA' => 'USA',
    'UZBEKISTAN' => 'USBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATIKANET',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'VESTINDIA',
    'WESTERN SAHARA' => 'VEST-SAHARA',
    'YEMEN' => 'JEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan og Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Kyrillisk)',
    'CP1252' => 'CP1252 (MS Vesteuropeisk og amerikansk)',
    'EUC-CN' => 'EUC-CN (Forenklet kinesisk GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japansk)',
    'EUC-KR' => 'EUC-KR (Koreansk)',
    'EUC-TW' => 'EUC-TW (Taiwansk)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japansk)',
    'ISO-2022-KR' => 'ISO-2022-KR (Koreansk)',
    'ISO-8859-1' => 'ISO-8859-1 (vest Europa og US)',
    'ISO-8859-2' => 'ISO-8859-2 (Sentral og øst europa)',
    'ISO-8859-3' => 'ISO-8859-3 (Latinsk 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latinsk 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Kyrillisk)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabisk)',
    'ISO-8859-7' => 'ISO-8859-7 (Gresk)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebraisk)',
    'ISO-8859-9' => 'ISO-8859-9 (Latinsk 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latinsk 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latinsk 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latinsk 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latinsk 9)',
    'KOI8-R' => 'KOI8-R (Kyrillisk Russisk)',
    'KOI8-U' => 'KOI8-U (Kyrillisk ukrainsk)',
    'SJIS' => 'SJIS (MS japansk)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrika/Algiers',
    'Africa/Luanda' => 'Afrika/Luanda',
    'Africa/Porto-Novo' => 'Afrika/Porto-Novo',
    'Africa/Gaborone' => 'Afrika/Gaborone',
    'Africa/Ouagadougou' => 'Afrika/Ouagadougou',
    'Africa/Bujumbura' => 'Afrika/Bujumbura',
    'Africa/Douala' => 'Afrika/Douala',
    'Atlantic/Cape_Verde' => 'Atlantisk/Kapp Verde',
    'Africa/Bangui' => 'Afrika/Bangui',
    'Africa/Ndjamena' => 'Afrika/Ndjamena',
    'Indian/Comoro' => 'Indisk/Komorene',
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
    'Atlantic/St_Helena' => 'Atlantisk/St_Helena',
    'Africa/Sao_Tome' => 'Afrika/Sao_Tome',
    'Africa/Dakar' => 'Afrika/ Dakar',
    'Indian/Mahe' => 'Indisk/Mahe',
    'Africa/Freetown' => 'Afrika/ Freetown',
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
    'Indian/Kerguelen' => 'Indisk/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarktis/DumontDUrville',
    'Antarctica/Syowa' => 'Antarktis/Syowa',
    'Antarctica/Vostok' => 'Antarktis/Vostok',
    'Antarctica/Rothera' => 'Antarktis/Rothera',
    'Antarctica/Palmer' => 'Antarktis/Palmer',
    'Antarctica/McMurdo' => 'Antarktis/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Jerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimpu',
    'Indian/Chagos' => 'Indian/Chagosøyene',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Yangôn',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macao',
    'Asia/Nicosia' => 'Asia/Nikosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Kolkata',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jaya_Pura',
    'Asia/Tehran' => 'Asia/Teheran',
    'Asia/Baghdad' => 'Asia/Bagdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Kyzylorda',
    'Asia/Aqtobe' => 'Asia/Aktobe',
    'Asia/Aqtau' => 'Asia/Aktau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bisjkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldivene',
    'Asia/Hovd' => 'Asia/Khovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulan_Bator',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muskat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damaskus',
    'Asia/Dushanbe' => 'Asia/Dusjanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Asjkhabad',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tasjkent',
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
    'Indian/Christmas' => 'India/Christmasøya',
    'Pacific/Rarotonga' => 'Stillehavet/Rarotonga',
    'Indian/Cocos' => 'India/Kokosøyene',
    'Pacific/Fiji' => 'Stillehavet/Fiji',
    'Pacific/Gambier' => 'Stillehavet/Gambierøyene',
    'Pacific/Marquesas' => 'Stillehavet/Marquesasøyene',
    'Pacific/Tahiti' => 'Stillehavet/Tahiti',
    'Pacific/Guam' => 'Stillehavet/Guam',
    'Pacific/Tarawa' => 'Stillehavet/Tarawa',
    'Pacific/Enderbury' => 'Stillehavet/Enderbury',
    'Pacific/Kiritimati' => 'Stillehavet/Kiritimati',
    'Pacific/Saipan' => 'Stillehavet/Saipan',
    'Pacific/Majuro' => 'Stillehavet/Majuro',
    'Pacific/Kwajalein' => 'Stillehavet/Kwajalein',
    'Pacific/Truk' => 'Stillehavet/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Stillehavet/Kosrae',
    'Pacific/Nauru' => 'Stillehavet/Nauru',
    'Pacific/Noumea' => 'Stillehavet/Noumea',
    'Pacific/Auckland' => 'Stillehavet/Auckland',
    'Pacific/Chatham' => 'Stillehavet/Chatham',
    'Pacific/Niue' => 'Stillehavet/Niue',
    'Pacific/Norfolk' => 'Stillehavet/Norfolk',
    'Pacific/Palau' => 'Stillehavet/Palau',
    'Pacific/Port_Moresby' => 'Stillehavet/Port_Moresby',
    'Pacific/Pitcairn' => 'Stillehavet/Pitcairnøyene',
    'Pacific/Pago_Pago' => 'Stillehavet/Pago_Pago',
    'Pacific/Apia' => 'Stillehavet/Apia',
    'Pacific/Guadalcanal' => 'Stillehavet/Guadalcanal',
    'Pacific/Fakaofo' => 'Stillehavet/Fakaofo',
    'Pacific/Tongatapu' => 'Stillehavet/Tongatapu',
    'Pacific/Funafuti' => 'Stillehavet/Funafuti',
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
    'Europe/Tirane' => 'Europa/Tirane',
    'Europe/Andorra' => 'Europa/Andorra',
    'Europe/Vienna' => 'Europa/Vienna',
    'Europe/Minsk' => 'Europa/MInsk',
    'Europe/Brussels' => 'Europa/Brussel',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa/Praha',
    'Europe/Copenhagen' => 'Europa/ København',
    'Atlantic/Faeroe' => 'Atlantisk/Færnøyene',
    'America/Danmarkshavn' => 'Amerika/Danmarkshavn',
    'America/Scoresbysund' => 'Amerika/Scoresbysund',
    'America/Godthab' => 'Amerika/Godthab',
    'America/Thule' => 'Amerika/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Paris',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibraltar',
    'Europe/Athens' => 'Europa/Athen',
    'Europe/Budapest' => 'Europa/Budapest',
    'Atlantic/Reykjavik' => 'Atlantisk/Reykjavik',
    'Europe/Rome' => 'Europa/Roma',
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
    'Europe/Lisbon' => 'Europa/Lisboa',
    'Atlantic/Azores' => 'Atlantisk/Azorene',
    'Atlantic/Madeira' => 'Atlantisk/Madeira',
    'Europe/Bucharest' => 'Europa/Bukarest',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Moskva',
    'Europe/Samara' => 'Europa/Samara',
    'Asia/Yekaterinburg' => 'Asia/Jekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnojarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Jakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamtsjatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'Europa/Beograd',
    'Europe/Madrid' => 'Europa/Madrid',
    'Africa/Ceuta' => 'Afrika/Ceuta',
    'Atlantic/Canary' => 'Atlantisk/Kanariøyene',
    'Europe/Stockholm' => 'Europa/Stockholm',
    'Europe/Zurich' => 'Europa/Zurich',
    'Europe/Istanbul' => 'Europa/Istanbul',
    'Europe/Kiev' => 'Europa/Kiev',
    'Europe/Uzhgorod' => 'Europa/Uzjhorod',
    'Europe/Zaporozhye' => 'Europa/Zaporizjzja',
    'Europe/Simferopol' => 'Europa/Simferopol',
    'America/New_York' => 'Amerika/New_York',
    'America/Chicago' => 'Amerika/Chicago',
    'America/North_Dakota/Center' => 'Amerika/North_Dakota/Center',
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
    'America/Toronto' => 'Amerika/ Toronto',
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
    'America/Mexico_City' => 'Amerika/Mexico City',
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
    'America/El_Salvador' => 'Amerika/El Salvador',
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
    'America/St_Kitts' => 'Amerika/St_Kitts',
    'America/St_Lucia' => 'Amerika/St_Lucia',
    'America/Miquelon' => 'Amerika/Miquelon',
    'America/St_Vincent' => 'Amerika/St_Vincent',
    'America/Grand_Turk' => 'Amerika/Grand_Turk',
    'America/Tortola' => 'Amerika/Tortola',
    'America/St_Thomas' => 'Amerika/St_Thomas',
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
    'Pacific/Easter' => 'Stillehavet/Påskeøya',
    'America/Bogota' => 'Amerika/Bogota',
    'America/Curacao' => 'Amerika/Curacao',
    'America/Guayaquil' => 'Amerika/Guayaquil',
    'Pacific/Galapagos' => 'Stillehavet/Galapagosøyene',
    'Atlantic/Stanley' => 'Atlantisk/Stanley',
    'America/Cayenne' => 'Amerika/Cayenne',
    'America/Guyana' => 'Amerika/Guyana',
    'America/Asuncion' => 'Amerika/Asuncion',
    'America/Lima' => 'Amerika/Lima',
    'Atlantic/South_Georgia' => 'Atlantisk/South_Georgia',
    'America/Paramaribo' => 'Amerika/Paramaribo',
    'America/Port_of_Spain' => 'Amerika/Port_of_Spain',
    'America/Montevideo' => 'Amerika/Montevideo',
    'America/Caracas' => 'Amerika/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'Gå til møte',
    'IBMSmartCloud' => 'MARTINIQUE',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Kontakter',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Forespørsel',
    2 => 'Tilgang',
    3 => 'Ugyldig',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Kampanjer',
    'email' => 'E-post',
    'event' => 'Arrangement',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Kampanjer',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Kampanjer',
    'email' => 'E-post',
    'event' => 'Arrangement',
    'system' => 'Systemadministrasjon',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Kunnskapsbase';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - kategorier';
$app_list_strings['aok_status_list']['Draft'] = 'Utkast';
$app_list_strings['aok_status_list']['Expired'] = 'Utløpt';
$app_list_strings['aok_status_list']['In_Review'] = 'Til vurdering';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privat';
$app_list_strings['aok_status_list']['published_public'] = 'Offentlig';

$app_list_strings['moduleList']['FP_events'] = 'Hendelser';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Steder';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invitert';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Ikke invitert';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Deltatt';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Ikke deltatt';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Godkjent';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Avslått';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Ubesvart';

$app_strings['LBL_STATUS_EVENT'] = 'Status invitasjon';
$app_strings['LBL_ACCEPT_STATUS'] = 'Aksepter status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Nåværende side';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Hele lista';
$app_strings['LBL_LISTVIEW_NONE'] = 'Velg bort alle';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Indeks';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Sak Hendelse';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Sak Oppdateringer';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Vennligst svar over denne linjen ===';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'Avsluttet',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Ny',
        'Open_Assigned' => 'Tilordnet',
        'Closed_Closed' => 'Avsluttet',
        'Open_Pending Input' => 'Venter på opplysninger',
        'Closed_Rejected' => 'Avslått',
        'Closed_Duplicate' => 'Duplikat',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Enkel bruker',
        'Account' => 'Konto bruker',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Forhåndsinnstillinger for system',
    'singleUser' => 'Enkel bruker',
    'roundRobin' => 'Rundgang',
    'leastBusy' => 'Minst opptatt',
    'random' => 'Tilfeldig',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapporter';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Rapport betingelser';
$app_list_strings['moduleList']['AOR_Charts'] = 'Rapportdiagrammer';
$app_list_strings['moduleList']['AOR_Fields'] = 'Rapport felt';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Planlagte rapporter';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Lik';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'ikke lik';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Større enn';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Mindre enn';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Større eller lik';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Mindre enn eller lik';
$app_list_strings['aor_operator_list']['Contains'] = 'Inneholder';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Begynner med';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Slutter med';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Å';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Å';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Å/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Å';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Å.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Å';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Å';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'Og';
$app_list_strings['aor_condition_operator_list']['OR'] = 'ELLER';
$app_list_strings['aor_condition_type_list']['Value'] = 'verdi';
$app_list_strings['aor_condition_type_list']['Field'] = 'Felt';
$app_list_strings['aor_condition_type_list']['Date'] = 'Dato';
$app_list_strings['aor_condition_type_list']['Multi'] = 'En av';
$app_list_strings['aor_condition_type_list']['Period'] = 'Periode';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Denne brukeren';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'minutter';
$app_list_strings['aor_date_type_list']['hour'] = 'timer';
$app_list_strings['aor_date_type_list']['day'] = 'dager';
$app_list_strings['aor_date_type_list']['week'] = 'uker';
$app_list_strings['aor_date_type_list']['month'] = 'måneder';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Åpningstid';
$app_list_strings['aor_date_options']['now'] = 'Nå';
$app_list_strings['aor_date_options']['field'] = 'dette feltet';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Stigende';
$app_list_strings['aor_sort_operator']['DESC'] = 'Fallende';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Opptelling';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maksimum';
$app_list_strings['aor_function_list']['SUM'] = 'Sum';
$app_list_strings['aor_function_list']['AVG'] = 'Gjennomsnitt';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Opptelling';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Gjennomsnitt';
$app_list_strings['aor_chart_types']['bar'] = 'Søylediagram';
$app_list_strings['aor_chart_types']['line'] = 'Linjediagram';
$app_list_strings['aor_chart_types']['pie'] = 'Kakediagram';
$app_list_strings['aor_chart_types']['radar'] = 'Radardiagram';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stablet liggende stolpediagram';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grupperte bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Månedlig';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Ukentlig';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Daglig';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Aktiv';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inaktiv';
$app_list_strings['aor_email_type_list']['Email Address'] = 'E-post';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Bruker';
$app_list_strings['aor_email_type_list']['Users'] = 'Brukere:';
$app_list_strings['aor_assign_options']['all'] = 'Alle brukere';
$app_list_strings['aor_assign_options']['role'] = 'Alle brukere med rolle';
$app_list_strings['aor_assign_options']['security_group'] = 'Alle brukere i sikkerhetsgruppe';
$app_list_strings['date_time_period_list']['today'] = 'I dag';
$app_list_strings['date_time_period_list']['yesterday'] = 'I går';
$app_list_strings['date_time_period_list']['this_week'] = 'Denne uken';
$app_list_strings['date_time_period_list']['last_week'] = 'Siste uke';
$app_list_strings['date_time_period_list']['last_month'] = 'Siste måned';
$app_list_strings['date_time_period_list']['this_month'] = 'Denne måned';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Neste kvartal';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Siste kvartal';
$app_list_strings['date_time_period_list']['this_year'] = 'Dette året';
$app_list_strings['date_time_period_list']['last_year'] = 'Forrige år';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'på';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'på';
$app_strings['LBL_CRON_AT'] = 'ved';
$app_strings['LBL_CRON_RAW'] = 'Avansert';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Time';
$app_strings['LBL_CRON_DAY'] = 'Dag';
$app_strings['LBL_CRON_MONTH'] = 'Måned';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'Daglig';
$app_strings['LBL_CRON_WEEKLY'] = 'Ukentlig';
$app_strings['LBL_CRON_MONTHLY'] = 'Månedlig';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - maler';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produkt - kategorier';
$app_list_strings['moduleList']['AOS_Products'] = 'Produkter';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Linjeenheter';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Linjeenhetsgrupper';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analytiker';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Konkurrent';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Distributør';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Andre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Utkast';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'I Forhandling';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Levert';
$app_list_strings['quote_stage_dom']['On Hold'] = 'På Vent';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Bekreftet';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Avsluttet og Godtatt';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Lukket og tapt';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Avsluttet og Død';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Godkjent';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Ikke godkjent';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analytiker';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Konkurrent';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Kunde';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Presse';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospekt';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Distributør';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Andre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Betalt';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Ubetalt';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Avbestillt';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Ikke fakturert';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Fakturert';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Bærbare PC\'er';
$app_list_strings['product_category_dom']['Desktops'] = 'Stasjonære PC\'er';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'God';
$app_list_strings['product_type_dom']['Service'] = 'Tjeneste';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Tilbud';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Fakturaer';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Kontrakter';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Kunder';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Kontakter';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Ledetråder';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Ikke påbegynt';
$app_list_strings['contract_status_list']['In Progress'] = 'Underveis';
$app_list_strings['contract_status_list']['Signed'] = 'Signert';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Skriv ut som PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Vennligst velg mal';
$app_strings['LBL_NO_TEMPLATE'] = 'FEIL\nIngen maler funnet.\nVennligst gå til PDF mal modulen og skap en';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Arbeidsflyt';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Arbeidsflyt betingelser';
$app_list_strings['moduleList']['AOW_Processed'] = 'Prosessrevisjon';
$app_list_strings['moduleList']['AOW_Actions'] = 'Arbeidsflyt aktiviteter';
$app_list_strings['aow_status_list']['Active'] = 'Aktiv';
$app_list_strings['aow_status_list']['Inactive'] = 'Inaktiv';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Lik';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'ikke lik';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Større enn';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Mindre enn';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Større eller lik';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Mindre enn eller lik';
$app_list_strings['aow_operator_list']['Contains'] = 'Inneholder';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Begynner med';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Slutter med';
$app_list_strings['aow_operator_list']['is_null'] = 'er null';
$app_list_strings['aow_process_status_list']['Complete'] = 'Fullført';
$app_list_strings['aow_process_status_list']['Running'] = 'Pågående';
$app_list_strings['aow_process_status_list']['Pending'] = 'Avventes';
$app_list_strings['aow_process_status_list']['Failed'] = 'Feilet';
$app_list_strings['aow_condition_operator_list']['And'] = 'Og';
$app_list_strings['aow_condition_operator_list']['OR'] = 'ELLER';
$app_list_strings['aow_condition_type_list']['Value'] = 'verdi';
$app_list_strings['aow_condition_type_list']['Field'] = 'Felt';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Endringer';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'I sikkerhetsgruppe';
$app_list_strings['aow_condition_type_list']['Date'] = 'Dato';
$app_list_strings['aow_condition_type_list']['Multi'] = 'En av';
$app_list_strings['aow_action_type_list']['Value'] = 'verdi';
$app_list_strings['aow_action_type_list']['Field'] = 'Felt';
$app_list_strings['aow_action_type_list']['Date'] = 'Dato';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'På rundgang';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Minst aktiv';
$app_list_strings['aow_action_type_list']['Random'] = 'Tilfeldig';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'verdi';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Felt';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'minutter';
$app_list_strings['aow_date_type_list']['hour'] = 'timer';
$app_list_strings['aow_date_type_list']['day'] = 'dager';
$app_list_strings['aow_date_type_list']['week'] = 'uker';
$app_list_strings['aow_date_type_list']['month'] = 'måneder';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Åpningstid';
$app_list_strings['aow_date_options']['now'] = 'Nå';
$app_list_strings['aow_date_options']['today'] = 'I dag';
$app_list_strings['aow_date_options']['field'] = 'dette feltet';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Alle brukere';
$app_list_strings['aow_assign_options']['role'] = 'Alle brukere med rolle';
$app_list_strings['aow_assign_options']['security_group'] = 'Alle brukere i sikkerhetsgruppe';
$app_list_strings['aow_email_type_list']['Email Address'] = 'E-post';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Lagre e-post';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Relaterte felt';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Bruker';
$app_list_strings['aow_email_type_list']['Users'] = 'Brukere:';
$app_list_strings['aow_email_to_list']['to'] = 'Til';
$app_list_strings['aow_email_to_list']['cc'] = 'Kopi';
$app_list_strings['aow_email_to_list']['bcc'] = 'Blindkopi';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Alle oppføringer';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nye oppføringer';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Endrede oppføringer';
$app_list_strings['aow_run_when_list']['Always'] = 'Alltid';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Bare når du lagrer';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Bare i Planlegger';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Prosjekt - maler';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Prosjektoppgave maler';
$app_list_strings['relationship_type_list']['FS'] = 'Slutt til start';
$app_list_strings['relationship_type_list']['SS'] = 'Start til slutt';
$app_list_strings['duration_unit_dom']['Days'] = 'dager';
$app_list_strings['duration_unit_dom']['Hours'] = 'timer';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Se på Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Vis detalj';
$app_strings['LBL_CREATE_PROJECT'] = 'Nytt prosjekt';

//gmaps
$app_strings['LBL_MAP'] = 'Kart';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Lengdegrad';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Breddegrad';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geokode status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse:';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Kart';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Kart - markører';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Kart - områder';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Kart - hurtiglager for adresser';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP partnere';

$app_list_strings['map_unit_type_list']['mi'] = 'Mil';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometer';

$app_list_strings['map_module_type_list']['Accounts'] = 'Kunder';
$app_list_strings['map_module_type_list']['Contacts'] = 'Kontakter';
$app_list_strings['map_module_type_list']['Cases'] = 'Kundestøtte';
$app_list_strings['map_module_type_list']['Leads'] = 'Ledetråder';
$app_list_strings['map_module_type_list']['Meetings'] = 'Møter';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Salgsmuligheter';
$app_list_strings['map_module_type_list']['Project'] = 'Prosjekter';
$app_list_strings['map_module_type_list']['Prospects'] = 'Mål';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Kunde';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Kontakter';
$app_list_strings['map_relate_type_list']['Cases'] = 'Kundestøtte';
$app_list_strings['map_relate_type_list']['Leads'] = 'Ledetråder';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Møter';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Salgsmuligheter';
$app_list_strings['map_relate_type_list']['Project'] = 'Prosjekter';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Mål';

$app_list_strings['marker_image_list']['accident'] = 'Ulykke';
$app_list_strings['marker_image_list']['administration'] = 'Administrasjon';
$app_list_strings['marker_image_list']['agriculture'] = 'Jordbruk';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Litet fly';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Fly turisme';
$app_list_strings['marker_image_list']['airport'] = 'Flyplass';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amfiteater';
$app_list_strings['marker_image_list']['apartment'] = 'Leilighet';
$app_list_strings['marker_image_list']['aquarium'] = 'Akvarium';
$app_list_strings['marker_image_list']['arch'] = 'Ark';
$app_list_strings['marker_image_list']['atm'] = 'Minibank';
$app_list_strings['marker_image_list']['audio'] = 'Lyd';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pund';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Strand';
$app_list_strings['marker_image_list']['beautiful'] = 'Nydelig';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Sykkelparkering';
$app_list_strings['marker_image_list']['big_city'] = 'Storby';
$app_list_strings['marker_image_list']['bridge'] = 'Bro';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Moderne bro';
$app_list_strings['marker_image_list']['bus'] = 'Buss';
$app_list_strings['marker_image_list']['cable_car'] = 'Taubane';
$app_list_strings['marker_image_list']['car'] = 'Bil';
$app_list_strings['marker_image_list']['car_rental'] = 'Bilutleie';
$app_list_strings['marker_image_list']['carrepair'] = 'Bilverksted';
$app_list_strings['marker_image_list']['castle'] = 'Slott';
$app_list_strings['marker_image_list']['cathedral'] = 'Katedral';
$app_list_strings['marker_image_list']['chapel'] = 'Kapell';
$app_list_strings['marker_image_list']['church'] = 'Kirke';
$app_list_strings['marker_image_list']['city_square'] = 'Bytorg';
$app_list_strings['marker_image_list']['cluster'] = 'Klynge';
$app_list_strings['marker_image_list']['cluster_2'] = 'Klynge 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Klynge 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Klynge 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Klynge 5';
$app_list_strings['marker_image_list']['coffee'] = 'Kaffe';
$app_list_strings['marker_image_list']['community_centre'] = 'Kommunesenter';
$app_list_strings['marker_image_list']['company'] = 'Firma';
$app_list_strings['marker_image_list']['conference'] = 'Konferanse';
$app_list_strings['marker_image_list']['construction'] = 'Konstruksjonsvirksomhet';
$app_list_strings['marker_image_list']['convenience'] = 'Bekvemmelighet';
$app_list_strings['marker_image_list']['court'] = 'Domstol';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Valutaveksling';
$app_list_strings['marker_image_list']['customs'] = 'Toll';
$app_list_strings['marker_image_list']['cycling'] = 'Sykling';
$app_list_strings['marker_image_list']['dam'] = 'Damm';
$app_list_strings['marker_image_list']['dentist'] = 'Tannlege';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Varehus';
$app_list_strings['marker_image_list']['disability'] = 'Handikappet';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Handicap parkering ';
$app_list_strings['marker_image_list']['doctor'] = 'Lege';
$app_list_strings['marker_image_list']['dog_leash'] = 'Hundebånd';
$app_list_strings['marker_image_list']['down'] = 'Ned';
$app_list_strings['marker_image_list']['down_left'] = 'Ned venstre';
$app_list_strings['marker_image_list']['down_right'] = 'Ned høyre';
$app_list_strings['marker_image_list']['down_then_left'] = 'Ned deretter venstre';
$app_list_strings['marker_image_list']['down_then_right'] = 'Ned deretter høyre';
$app_list_strings['marker_image_list']['drugs'] = 'Legemidler';
$app_list_strings['marker_image_list']['elevator'] = 'Heis';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Ekspert';
$app_list_strings['marker_image_list']['factory'] = 'Produksjonsbedrift';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Fallende stener';
$app_list_strings['marker_image_list']['fast_food'] = 'Hurtigmat';
$app_list_strings['marker_image_list']['festival'] = 'Festivalen';
$app_list_strings['marker_image_list']['fjord'] = 'Fjorden';
$app_list_strings['marker_image_list']['forest'] = 'Skog';
$app_list_strings['marker_image_list']['fountain'] = 'Fontene';
$app_list_strings['marker_image_list']['friday'] = 'Fredag';
$app_list_strings['marker_image_list']['garden'] = 'Hage';
$app_list_strings['marker_image_list']['gas_station'] = 'Bensinstasjon';
$app_list_strings['marker_image_list']['geyser'] = 'Geisir';
$app_list_strings['marker_image_list']['gifts'] = 'Gaver';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Dagligvare';
$app_list_strings['marker_image_list']['hairsalon'] = 'Frisørsalong';
$app_list_strings['marker_image_list']['helicopter'] = 'Helikopter';
$app_list_strings['marker_image_list']['highway'] = 'Motorvei';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historisk bydel';
$app_list_strings['marker_image_list']['home'] = 'Forside';
$app_list_strings['marker_image_list']['hospital'] = 'Sykehus';
$app_list_strings['marker_image_list']['hostel'] = 'Hostell';
$app_list_strings['marker_image_list']['hotel'] = 'Hotell';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotell 1 stjerne';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotell 2 stjerner';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotell 3 stjerner';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotell 4 stjerner';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotell 5 stjerner';
$app_list_strings['marker_image_list']['info'] = 'Informasjon';
$app_list_strings['marker_image_list']['justice'] = 'Justis';
$app_list_strings['marker_image_list']['lake'] = 'Innsjø';
$app_list_strings['marker_image_list']['laundromat'] = 'Vaskeautomat';
$app_list_strings['marker_image_list']['left'] = 'Venstre';
$app_list_strings['marker_image_list']['left_then_down'] = 'Venstre deretter ned';
$app_list_strings['marker_image_list']['left_then_up'] = 'Venstre deretter opp';
$app_list_strings['marker_image_list']['library'] = 'Bibliotek';
$app_list_strings['marker_image_list']['lighthouse'] = 'Fyrtårn';
$app_list_strings['marker_image_list']['liquor'] = 'Sprit';
$app_list_strings['marker_image_list']['lock'] = 'Lås';
$app_list_strings['marker_image_list']['main_road'] = 'Hovedvei';
$app_list_strings['marker_image_list']['massage'] = 'Massasje';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobilmast';
$app_list_strings['marker_image_list']['modern_tower'] = 'Moderne tårn';
$app_list_strings['marker_image_list']['monastery'] = 'Kloster';
$app_list_strings['marker_image_list']['monday'] = 'Mandag';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Moske';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorsykkel';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Livemusikk';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oljepumpe jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palass';
$app_list_strings['marker_image_list']['panoramic'] = 'Panorama';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Bussterminal';
$app_list_strings['marker_image_list']['parking'] = 'Parkering';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Piknikk';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Ubesøkte steder';
$app_list_strings['marker_image_list']['places_visited'] = 'Besøkte steder';
$app_list_strings['marker_image_list']['playground'] = 'Lekeplass';
$app_list_strings['marker_image_list']['police'] = 'Politi';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Post';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Kraftledning påle';
$app_list_strings['marker_image_list']['power_plant'] = 'Kraftverk';
$app_list_strings['marker_image_list']['power_substation'] = 'Kraft';
$app_list_strings['marker_image_list']['public_art'] = 'Offentlig kunst';
$app_list_strings['marker_image_list']['rain'] = 'Regn';
$app_list_strings['marker_image_list']['real_estate'] = 'Eiendom';
$app_list_strings['marker_image_list']['regroup'] = 'Regrupper';
$app_list_strings['marker_image_list']['resort'] = 'Feriested';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Afrikansk restaurant';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Grill restaurant';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Buffet restaurant';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Kinesisk reaturant';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Fiskerestaurant';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Fish & Chips restaurant';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Gourmet restaurant';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Gresk restaurant';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Indisk restaurant';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Italiensk restaurant';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Japansk restaurant';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab restaurant';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Koreansk restaurant';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Middelhavs restaurant';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Meksikansk restaurant';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Romantisk restaurant';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Thai restaurant';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Tyrkisk restaurant';
$app_list_strings['marker_image_list']['right'] = 'Høyre';
$app_list_strings['marker_image_list']['right_then_down'] = 'Høyre deretter ned';
$app_list_strings['marker_image_list']['right_then_up'] = 'Høyre deretter opp';
$app_list_strings['marker_image_list']['saturday'] = 'Lørdag';
$app_list_strings['marker_image_list']['school'] = 'Skole';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Kjøpesenter';
$app_list_strings['marker_image_list']['shore'] = 'Bredd';
$app_list_strings['marker_image_list']['sight'] = 'Syn';
$app_list_strings['marker_image_list']['small_city'] = 'Liten by';
$app_list_strings['marker_image_list']['snow'] = 'Sne';
$app_list_strings['marker_image_list']['spaceport'] = 'Romhavn';
$app_list_strings['marker_image_list']['speed_100'] = 'Fartsgrense 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Fartsgrense 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Fartsgrense 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Fartsgrense 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Fartsgrense 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Fartsgrense 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Fartsgrense 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Fartsgrense 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Fartsgrense 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Fartsgrense 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Fartsgrense 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Fartsgrense 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Fartsdump';
$app_list_strings['marker_image_list']['stadium'] = 'Stadion';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Damptog';
$app_list_strings['marker_image_list']['stop'] = 'Stopp';
$app_list_strings['marker_image_list']['stoplight'] = 'Stopplys';
$app_list_strings['marker_image_list']['subway'] = 'Undergrunn';
$app_list_strings['marker_image_list']['sun'] = 'Søn';
$app_list_strings['marker_image_list']['sunday'] = 'Søndag';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarked';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagoge';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Drosje';
$app_list_strings['marker_image_list']['taxiway'] = 'Drosjevei';
$app_list_strings['marker_image_list']['teahouse'] = 'Tehus';
$app_list_strings['marker_image_list']['telephone'] = 'Telefon';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Hindutempel';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Tekst';
$app_list_strings['marker_image_list']['theater'] = 'Teater';
$app_list_strings['marker_image_list']['theme_park'] = 'Temapark';
$app_list_strings['marker_image_list']['thursday'] = 'Torsdag';
$app_list_strings['marker_image_list']['toilets'] = 'Toaletter';
$app_list_strings['marker_image_list']['toll_station'] = 'Bomstasjon';
$app_list_strings['marker_image_list']['tower'] = 'Tårn';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Veikamera';
$app_list_strings['marker_image_list']['train'] = 'Tog';
$app_list_strings['marker_image_list']['tram'] = 'Trikk';
$app_list_strings['marker_image_list']['truck'] = 'Lastebil';
$app_list_strings['marker_image_list']['tuesday'] = 'Tirsdag';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnell';
$app_list_strings['marker_image_list']['turn_left'] = 'Sving til venstre';
$app_list_strings['marker_image_list']['turn_right'] = 'Sving til høyre';
$app_list_strings['marker_image_list']['university'] = 'Universitet';
$app_list_strings['marker_image_list']['up'] = 'Opp';
$app_list_strings['marker_image_list']['up_left'] = 'Opp venstre';
$app_list_strings['marker_image_list']['up_right'] = 'Opp høyre';
$app_list_strings['marker_image_list']['up_then_left'] = 'Opp deretter venstre';
$app_list_strings['marker_image_list']['up_then_right'] = 'Opp deretter høyre';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Vann';
$app_list_strings['marker_image_list']['waterfall'] = 'Foss';
$app_list_strings['marker_image_list']['watermill'] = 'Vannmølle';
$app_list_strings['marker_image_list']['waterpark'] = 'Vannpark';
$app_list_strings['marker_image_list']['watertower'] = 'Vanntårn';
$app_list_strings['marker_image_list']['wednesday'] = 'Onsdag';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Vindturbin';
$app_list_strings['marker_image_list']['windmill'] = 'Vindmølle';
$app_list_strings['marker_image_list']['winery'] = 'Vingård';
$app_list_strings['marker_image_list']['work_office'] = 'Arbeidssted';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Verdensarv sted';
$app_list_strings['marker_image_list']['zoo'] = 'Dyrehage';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Ute av kontoret';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'I møte';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Endre';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Vennligst legg til ny informasjon';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Dato:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Begrunnelse:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Vennligst velg en gyldig dato';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Vennligst velg en begrunnelse';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Endre';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Telefon historikk';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Antall telefonhenvendelser';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Sikkerhets pakke håndtering';
$app_strings['LBL_SECURITYGROUP'] = 'Sikkerhetsgruppe';
$app_strings['LBL_ROLE'] = 'Rolle';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Utgående e-postkontoer';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Sosiale medier feed detaljer';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtrer';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Legg til tab';
$app_strings['LBL_EDIT_TAB'] = 'Endre faner';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Legg til skrivebordnavn:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Antall kolonner:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Er du sikker på at du vil slette';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'skrivebordet?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Legg til side på skrivebordet';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Fjern gjeldende skrivebordside';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Gi siden et nytt navn';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Oppgaver',
    'Meetings' => 'Møter',
    'Calls' => 'Oppringninger',
    'Notes' => 'Notater:',
    'Emails' => 'E-post'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Redigere Mal';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Du har klikket vekk fra feltet du redigerte uten å lagre. Klikk ok hvis du er greit å miste endringene, eller Avbryt hvis du vil fortsette å redigere";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "En feil oppstod under innlasting av feltet. Økten kan ha blitt tidsavbrutt. Vennligst logg inn igjen for å fikse dette";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Salg',
    'getAccountsSpotsData' => 'Kunder',
    'getLeadsSpotsData' => 'Ledetråder',
    'getServiceSpotsData' => 'Tjeneste',
    'getMarketingSpotsData' => 'Markedsføring',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'Aktiviteter',
    'getQuotesSpotsData' => 'Tilbud'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Åpningstid';
$app_list_strings['business_hours_list']['0'] = '24:00';
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
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Juridisk';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Stående';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Liggende';


$app_list_strings['moduleList']['SurveyResponses'] = 'Spørreskjema responser';
$app_list_strings['moduleList']['Surveys'] = 'Undersøkelse';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Undersøkelse Spørsmål Svar';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Undersøkelse Spørsmål';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Undersøkelse Spørsmål Alternativ';
$app_list_strings['survey_status_list']['Draft'] = 'Utkast';
$app_list_strings['survey_status_list']['Public'] = 'Offentlig';
$app_list_strings['survey_status_list']['Closed'] = 'Avsluttet';
$app_list_strings['surveys_question_type']['Text'] = 'Tekst';
$app_list_strings['surveys_question_type']['Textbox'] = 'Tekstboks';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Avkryssningsboks';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Nedtrekk';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Flervalg';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrise';
$app_list_strings['surveys_question_type']['DateTime'] = 'DatoTid';
$app_list_strings['surveys_question_type']['Date'] = 'Dato';
$app_list_strings['surveys_question_type']['Scale'] = 'Skala';
$app_list_strings['surveys_question_type']['Rating'] = 'Rangering';
$app_list_strings['surveys_matrix_options'][0] = 'Fornøyd';
$app_list_strings['surveys_matrix_options'][1] = 'Hverken fornøyd eller misfornøyd';
$app_list_strings['surveys_matrix_options'][2] = 'Misfornøyd';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Venter bekreftelse på deltagelse, deltagelses bekreftelse er ikke sendt';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Bekrefte deltagelse e-post utsending feilet';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Venter bekreftelse på deltagelse, deltagelses bekreftelse er sendt';
$app_strings['LBL_OPT_IN'] = 'Deltagelse ønsket';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Bekreftet valgt';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Bortvalgt';
$app_strings['LBL_OPT_IN_INVALID'] = 'Ugyldig';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Inaktiv',
    'opt-in' => 'Påmeldt',
    'confirmed-opt-in' => 'Bekreftet deltagelse'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Deltagelse uønsket',
    'opt-in' => 'Påmeldt',
    'confirmed-opt-in' => 'Bekreftet deltagelse'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'E-posten med bekreftet deltagelse er lagt til i e-post køen for %s e-post adresse(r). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Ikke mulig å sende e-post til %s e-post adresse(r), da de ikke har ønsket deltagelse. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s e-post adresse har ikke en gyldig id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'To-faktor autentisering feilet';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'To-faktor autentiseringskode er sendt.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Sending av to-faktor autentiseringskode feilet.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Takk for tilmelding av din interresse.';

$app_strings['ERR_IP_CHANGE'] = 'Din økt ble avsluttet på grunn av vesentlige endringer i din IP-adresse';
$app_strings['ERR_RETURN'] = 'Tilbake til Hjem';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Passord tildelt',
    'client_credentials' => 'Kunde opplysninger',
    'implicit' => 'Implisitt',
    'authorization_code' => 'Autorisasjons kode'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutter',
    'hour' => 'timer',
    'day' => 'dager',
    'week' => 'uker',
    'month' => 'måneder',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Søk (ny)',
    'UnifiedSearch' => 'Globalt samlet søk (fra tidligere versjoner)'
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
    'success' => 'Access validert',
    'failed' => 'Feilet',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'Underveis',
    'success' => 'Vellykket',
    'warning' => 'Advarsel',
    'error' => 'Feil:',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API feil';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API Feil oppstått.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api versjon: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Vennligst se til at alle påkrevde felter er utfyllt';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API forventer at strukturen av innholdet i forespørselen er JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Ikke mulig å validere Json Api last forespørselen';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Ikke mulig å validere Json Api last svaret';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API kan ikke finne kilden';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API forventer "Accept" innholdshodet å være application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API forventer at "Content-Type" innholdshodet er application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Skrivebords varsler er nå aktivert for denne nettleseren.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Skrivebords varsler er nå deaktivert for denne nettleseren. Bruk nettleserens innstillinger for og aktivere varsler igjen.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Denne nettleseren støtter ikke skrivebords varsler.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Det oppstod en feil: ';
$app_strings['LBL_CLICK_HERE'] = 'Klikk her';
$app_strings['LBL_TO_CONTINUE'] = ' for å gå videre.';

$app_strings['IMAP_HANDLER_ERROR'] = 'FEIL: {error}; nøkkel var: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test innstillinger er endret til "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Ugjyldig forespørsel, bruk verdien "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'En ukjent feil har oppstått, nøkkel "{key}" er ikke lagret.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Det finnes ingen test instillinger.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Nøkkelen ble ikke funnet.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Lagring av nøkkel feilet.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Ukjent feil';
$app_strings['LBL_SEARCH_TITLE']                   = 'Søk';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Skriv inn søke kriterier';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Søk';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Søk';
$app_strings['LBL_SEARCH_QUERY']                   = 'Søke streng: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Motor: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total resultat(er): ';
$app_strings['LBL_SEARCH_PREV'] = 'Forrige';
$app_strings['LBL_SEARCH_NEXT'] = 'Neste';
$app_strings['LBL_SEARCH_PAGE'] = 'Side ';
$app_strings['LBL_SEARCH_OF'] = ' av ';
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

$app_strings['LBL_KEY'] = 'Nøkkel';
$app_strings['LBL_VALUE'] = 'verdi';
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
