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
    'language_pack_name' => 'Italian (Italy) - it_IT',
    'moduleList' => array(
        'Home' => 'Pagina iniziale',
        'ResourceCalendar' => 'Calendario delle risorse',
        'Contacts' => 'Contatti',
        'Accounts' => 'Aziende',
        'Alerts' => 'Avvisi',
        'Opportunities' => 'Opportunità',
        'Cases' => 'Reclami',
        'Notes' => 'Note',
        'Calls' => 'Chiamate',
        'TemplateSectionLine' => 'Linea di separazione sezione',
        'Calls_Reschedule' => 'Ripianifica Chiamate',
        'Emails' => 'Email',
        'EAPM' => 'EAPM',
        'Meetings' => 'Appuntamenti',
        'Tasks' => 'Compiti',
        'Calendar' => 'Calendario',
        'Leads' => 'Lead',
        'Currencies' => 'Valute',
        'Activities' => 'Attività',
        'Bugs' => 'Errori',
        'Feeds' => 'RSS',
        'iFrames' => 'I miei siti',
        'TimePeriods' => 'Archi Temporali',
        'ContractTypes' => 'Tipi di contratto',
        'Schedulers' => 'Pianificazioni',
        'Project' => 'Progetti',
        'ProjectTask' => 'Compiti di Progetto',
        'Campaigns' => 'Campagne',
        'CampaignLog' => 'Log Campagna',
        'Documents' => 'Documenti',
        'DocumentRevisions' => 'Revisioni Documento',
        'Connectors' => 'Connettori',
        'Roles' => 'Ruoli',
        'Notifications' => 'Notifiche',
        'Sync' => 'Sincr',
        'Users' => 'Utenti',
        'Employees' => 'Dipendenti',
        'Administration' => 'Amministrazione',
        'ACLRoles' => 'Ruoli',
        'InboundEmail' => 'Posta in Entrata',
        'Releases' => 'Release',
        'Prospects' => 'Obiettivi',
        'Queues' => 'Code',
        'EmailMarketing' => 'Email Marketing',
        'EmailTemplates' => 'Email - Modelli',
        'ProspectLists' => 'Obiettivi - Liste',
        'SavedSearch' => 'Ricerche salvate',
        'UpgradeWizard' => 'Guida Aggiornamenti',
        'Trackers' => 'Tracker',
        'TrackerSessions' => 'Sessioni Tracker',
        'TrackerQueries' => 'Query di tracciamento',
        'FAQ' => 'Domande frequenti',
        'Newsletters' => 'Newsletter',
        'SugarFeed' => 'Feed di SuiteCRM',
        'SugarFavorites' => 'Preferiti di SuiteCRM',

        'OAuthKeys' => 'Chiavi Consumer OAuth',
        'OAuthTokens' => 'Token OAuth',
        'OAuth2Clients' => 'OAuth Clienti',
        'OAuth2Tokens' => 'Token OAuth',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Pagina iniziale',
        'Dashboard' => 'Pannello di Controllo',
        'Contacts' => 'Contatto',
        'Accounts' => 'Azienda',
        'Opportunities' => 'Opportunità',
        'Cases' => 'Reclamo',
        'Notes' => 'Nota',
        'Calls' => 'Chiamata',
        'Emails' => 'Email',
        'EmailTemplates' => 'Modello Email',
        'Meetings' => 'Appuntamento',
        'Tasks' => 'Compito',
        'Calendar' => 'Calendario',
        'Leads' => 'Leads',
        'Activities' => 'Attività',
        'Bugs' => 'Errore',
        'KBDocuments' => 'Knowledge Base',
        'Feeds' => 'RSS',
        'iFrames' => 'I miei siti',
        'TimePeriods' => 'Periodi',
        'Project' => 'Progetto',
        'ProjectTask' => 'Compito di Progetto',
        'Prospects' => 'Obiettivo',
        'Campaigns' => 'Campagna',
        'Documents' => 'Documento',
        'Sync' => 'Sincr',
        'Users' => 'Utente',
        'SugarFavorites' => 'Preferiti di SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Sì',
        '2' => 'No',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analista',
        'Competitor' => 'Concorrente',
        'Customer' => 'Cliente',
        'Integrator' => 'Integratore',
        'Investor' => 'Investitore',
        'Partner' => 'Partner',
        'Press' => 'Stampa',
        'Prospect' => 'Cliente potenziale',
        'Reseller' => 'Rivneditore',
        'Other' => 'Altro',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Tessile',
        'Banking' => 'Banca',
        'Biotechnology' => 'Biotecnologie',
        'Chemicals' => 'Industria Chimica',
        'Communications' => 'Comunicazioni',
        'Construction' => 'Costruzioni',
        'Consulting' => 'Consulenza',
        'Education' => 'Istruzione',
        'Electronics' => 'Informatica - Elettronica',
        'Energy' => 'Energia',
        'Engineering' => 'Ingegneria',
        'Entertainment' => 'Cultura-Stampa',
        'Environmental' => 'Ambiente',
        'Finance' => 'Finanza',
        'Government' => 'Pubblica Amministratione',
        'Healthcare' => 'Sanità',
        'Hospitality' => 'Alberghiero',
        'Insurance' => 'Assicurazione',
        'Machinery' => 'Industria Compon',
        'Manufacturing' => 'Industria Manifatturiera',
        'Media' => 'Media',
        'Not For Profit' => 'No Profit',
        'Recreation' => 'Ricreazione',
        'Retail' => 'Commercio Retail',
        'Shipping' => 'Spedizione',
        'Technology' => 'Tecnologico',
        'Telecommunications' => 'Telecomunicazioni',
        'Transportation' => 'Viaggi e turismo',
        'Utilities' => 'Servizi e utility',
        'Other' => 'Altro',
    ),
    'lead_source_default_key' => 'Autogenerato',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Chiamata a Freddo',
        'Existing Customer' => 'Cliente Esistente',
        'Self Generated' => 'Autogenerato',
        'Employee' => 'Dipendente',
        'Partner' => 'Partner',
        'Public Relations' => 'Pubbliche Relazioni',
        'Direct Mail' => 'Direct Mailing',
        'Conference' => 'Conferenza',
        'Trade Show' => 'Fiera',
        'Web Site' => 'Sito web',
        'Word of mouth' => 'Passaparola',
        'Email' => 'Email',
        'Campaign' => 'Campagna',
        'Other' => 'Altro',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Business esistente',
        'New Business' => 'Nuovo Business',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Profitto',
        'Investment' => 'Investimento',
        'Expected_Revenue' => 'Entrate Previste',
        'Budget' => 'Budget',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Decisore primario',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Decisore primario',
        'Business Decision Maker' => 'Decision Maker - business',
        'Business Evaluator' => 'Valutatore - Business',
        'Technical Decision Maker' => 'Decision Maker - Tecnico',
        'Technical Evaluator' => 'Valutatore - Tecnico',
        'Executive Sponsor' => 'Sponsor',
        'Influencer' => 'Esercita Influenza',
        'Other' => 'Altro',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Contatto primario',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contatto primario',
        'Alternate Contact' => 'Contato Alternativo',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '15 gg',
        'Net 30' => '30 gg',
    ),
    'sales_stage_default_key' => 'Prospezione',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospezione',
        'Qualification' => 'Qualificazione',
        'Needs Analysis' => 'Analisi Bisogni',
        'Value Proposition' => 'Propos. Valore',
        'Id. Decision Makers' => 'Identificazione dei decisori',
        'Perception Analysis' => 'Analisi Percezione',
        'Proposal/Price Quote' => 'Proposta Economica',
        'Negotiation/Review' => 'Negoziazione/Review',
        'Closed Won' => 'Chiuso Vinto',
        'Closed Lost' => 'Chiuso - Perso',
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
        'Call' => 'Chiamata',
        'Meeting' => 'Appuntamento',
        'Task' => 'Compito',
        'Email' => 'Email',
        'Note' => 'Nota',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Sig.',
        'Ms.' => 'Sig.na',
        'Mrs.' => 'Sig.ra',
        'Miss' => 'Sig. na',
        'Dr.' => 'Dott.',
        'Prof.' => 'Prof.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minuto prima',
        300 => '5 minuti prima',
        600 => '10 minuti prima',
        900 => '15 minuti prima',
        1800 => '30 minuti prima',
        3600 => '1 ora prima',
        7200 => '2 ore prima',
        10800 => '3 ore prima',
        18000 => '5 ore prima',
        86400 => '1 giorno prima',
    ),

    'task_priority_default' => 'Media',
    'task_priority_dom' => array(
        'High' => 'Alta',
        'Medium' => 'Media',
        'Low' => 'Bassa',
    ),
    'task_status_default' => 'Non Iniziato',
    'task_status_dom' => array(
        'Not Started' => 'Non Iniziato',
        'In Progress' => 'In corso',
        'Completed' => 'Completato',
        'Pending Input' => 'In attesa di input',
        'Deferred' => 'Rimandato',
    ),
    'meeting_status_default' => 'Pianificato',
    'meeting_status_dom' => array(
        'Planned' => 'Pianificato',
        'Held' => 'Effettuata',
        'Not Held' => 'Non Effettuata',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Altro',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Pianificato',
    'call_status_dom' => array(
        'Planned' => 'Pianificato',
        'Held' => 'Effettuata',
        'Not Held' => 'Non Effettuata',
    ),
    'call_direction_default' => 'In uscita',
    'call_direction_dom' => array(
        'Inbound' => 'In entrata',
        'Outbound' => 'In uscita',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'In Process' => 'In lavorazione',
        'Converted' => 'Convertito',
        'Recycled' => 'Riciclato',
        'Dead' => 'Perso',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'Alta',
        'P2' => 'Media',
        'P3' => 'Bassa',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Utente Regolare',
        'Administrator' => 'Amministratore',
    ),
    'user_status_dom' => array(
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Codice Email',
    ),
    'employee_status_dom' => array(
        'Active' => 'Attivo',
        'Terminated' => 'Licenziato',
        'Leave of Absence' => 'In Ferie/Malattia/Licenza',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'Alta',
        'Medium' => 'Media',
        'Low' => 'Bassa',
    ),
    'project_task_priority_default' => 'Media',

    'project_task_status_options' => array(
        'Not Started' => 'Non Iniziato',
        'In Progress' => 'In corso',
        'Completed' => 'Completato',
        'Pending Input' => 'In attesa di input',
        'Deferred' => 'Rimandato',
    ),
    'project_task_utilization_options' => array(
        '0' => 'nessuno',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Bozza',
        'In Review' => 'In Revisione',
        'Underway' => 'In corso',
        'On_Hold' => 'In Attesa',
        'Completed' => 'Completato',
    ),
    'project_status_default' => 'Bozza',

    'project_duration_units_dom' => array(
        'Days' => 'Giorni',
        'Hours' => 'Ore',
    ),

    'activity_status_type_dom' => array(
        '' => '--Nessuno--',
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Aziende',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Azienda',
        'Opportunities' => 'Opportunità',
        'Cases' => 'Reclamo',
        'Leads' => 'Leads',
        'Contacts' => 'Contatto', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Errore',
        'Project' => 'Progetto',

        'Prospects' => 'Obiettivo',
        'ProjectTask' => 'Compito di Progetto',

        'Tasks' => 'Compito',

        'AOS_Contracts' => 'Contratto',
        'AOS_Invoices' => 'Fattura',
        'AOS_Quotes' => 'Preventivo',
        'AOS_Products' => 'Prodotto',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Azienda',
        'Contacts' => 'Contatto',
        'Opportunities' => 'Opportunità',
        'Campaigns' => 'Campagna',
        'Tasks' => 'Compito',
        'Emails' => 'Email',

        'Bugs' => 'Errore',
        'Project' => 'Progetto',
        'ProjectTask' => 'Compito di Progetto',
        'Prospects' => 'Obiettivo',
        'Cases' => 'Reclamo',
        'Leads' => 'Leads',

        'Meetings' => 'Appuntamento',
        'Calls' => 'Chiamata',

        'AOS_Contracts' => 'Contratto',
        'AOS_Invoices' => 'Fattura',
        'AOS_Quotes' => 'Preventivo',
        'AOS_Products' => 'Prodotto',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Azienda',
        'Contacts' => 'Contatto',
        'Tasks' => 'Compito',
        'Opportunities' => 'Opportunità',

        'Bugs' => 'Errore',
        'Cases' => 'Reclamo',
        'Leads' => 'Leads',

        'Project' => 'Progetto',
        'ProjectTask' => 'Compito di Progetto',

        'Prospects' => 'Obiettivo',

        'AOS_Contracts' => 'Contratto',
        'AOS_Invoices' => 'Fattura',
        'AOS_Quotes' => 'Preventivo',
        'AOS_Products' => 'Prodotto',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Preventivi',
        'AOS_Invoices' => 'Fatture',
        'AOS_Contracts' => 'Contratti',
    ),
    'issue_priority_default_key' => 'Media',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgente',
        'High' => 'Alta',
        'Medium' => 'Media',
        'Low' => 'Bassa',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accettato',
        'Duplicate' => 'Duplica',
        'Closed' => 'Chiuso',
        'Out of Date' => 'Scaduto',
        'Invalid' => 'Non valido',
    ),

    'issue_status_default_key' => 'Nuovo',
    'issue_status_dom' => array(
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'Closed' => 'Chiuso',
        'Pending' => 'In Attesa',
        'Rejected' => 'Rifiutato',
    ),

    'bug_priority_default_key' => 'Media',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgente',
        'High' => 'Alta',
        'Medium' => 'Media',
        'Low' => 'Bassa',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accettato',
        'Duplicate' => 'Duplica',
        'Fixed' => 'Corretto',
        'Out of Date' => 'Scaduto',
        'Invalid' => 'Non valido',
        'Later' => 'Posticipato',
    ),
    'bug_status_default_key' => 'Nuovo',
    'bug_status_dom' => array(
        'New' => 'Nuovo',
        'Assigned' => 'Assegnato',
        'Closed' => 'Chiuso',
        'Pending' => 'In Attesa',
        'Rejected' => 'Rifiutato',
    ),
    'bug_type_default_key' => 'Errore',
    'bug_type_dom' => array(
        'Defect' => 'Difetto',
        'Feature' => 'Funzionalità',
    ),
    'case_type_dom' => array(
        'Administration' => 'Amministrazione',
        'Product' => 'Prodotto',
        'User' => 'Utente',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interno',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Email',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Aziende',
        'Activities' => 'Attività',
        'Bugs' => 'Errori',
        'Calendar' => 'Calendario',
        'Calls' => 'Chiamate',
        'Campaigns' => 'Campagne',
        'Cases' => 'Reclami',
        'Contacts' => 'Contatti',
        'Currencies' => 'Valute',
        'Dashboard' => 'Pannello di Controllo',
        'Documents' => 'Documenti',
        'Emails' => 'Email',
        'Feeds' => 'RSS',
        'Forecasts' => 'Previsioni',
        'Help' => 'Aiuto',
        'Home' => 'Pagina iniziale',
        'Leads' => 'Lead',
        'Meetings' => 'Appuntamenti',
        'Notes' => 'Note',
        'Opportunities' => 'Opportunità',
        'Outlook Plugin' => 'Plugin Outlook',
        'Projects' => 'Progetti',
        'Quotes' => 'Preventivi',
        'Releases' => 'Release',
        'RSS' => 'RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Aggiornamento',
        'Users' => 'Utenti',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'Pianificazione',
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
        'Complete' => 'Completo',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Televendite',
        'Mail' => 'Posta',
        'Email' => 'Email',
        'Print' => 'Stampa',
        'Web' => 'Web',
        'Radio' => 'Radio',
        'Television' => 'Televisione',
        'NewsLetter' => 'Newsletter',
        'Survey' => 'Sondaggio',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Settimanale',
        'Monthly' => 'Mensile',
        'Quarterly' => 'Trimestrale',
        'Annually' => 'Annuale',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Gennaio',
        '2' => 'Febbraio',
        '3' => 'Marzo',
        '4' => 'Aprile',
        '5' => 'Maggio',
        '6' => 'Giugno',
        '7' => 'Luglio',
        '8' => 'Agosto',
        '9' => 'Settembre',
        '10' => 'Ottobre',
        '11' => 'Novembre',
        '12' => 'Dicembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Gen',
        '2' => 'Feb',
        '3' => 'Mar',
        '4' => 'Apr',
        '5' => 'Maggio',
        '6' => 'Giu',
        '7' => 'Lug',
        '8' => 'Ago',
        '9' => 'Set',
        '10' => 'Ott',
        '11' => 'Nov',
        '12' => 'Dic',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Domenica',
        '2' => 'Lunedì',
        '3' => 'Martedì',
        '4' => 'Mercoledì',
        '5' => 'Giovedì',
        '6' => 'Venerdì',
        '7' => 'Sabato',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dom',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mer',
        '5' => 'Gio',
        '6' => 'Ven',
        '7' => 'Sab',
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
        'personal' => 'Personale',
        'group' => 'Gruppo',
        'bounce' => 'Rimbalzo',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'Autenticazione Base',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'Autenticazione Base',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'Personale',
        'group' => 'Gruppo',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personale',
        'group' => 'Gruppo',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personale',
        'group' => 'Gruppo',
        'system' => 'Sistema',
        'system-override' => 'Sovrascrivi Sistema',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Ricerca Multi Parola',
      'single' => 'Ricerca Singola Parola',
    ],

    'dom_email_types' => array(
        'out' => 'Inviato',
        'archived' => 'Archiviato',
        'draft' => 'Bozza',
        'inbound' => 'In entrata',
        'campaign' => 'Campagna',
    ),
    'dom_email_status' => array(
        'archived' => 'Archiviato',
        'closed' => 'Chiuso',
        'draft' => 'Bozza',
        'read' => 'Letto',
        'replied' => 'Risposto',
        'sent' => 'Inviato',
        'send_error' => 'Errore di Invio',
        'unread' => 'Non Letto',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archiviato',
    ),

    'dom_email_server_type' => array(
        '' => '--Nessuno--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--Nessuno--',
        'createcase' => 'Nuovo Reclamo',
        'bounce' => 'Gestione Bounce',
    ),
    'dom_email_distribution' => array(
        '' => '--Nessuno--',
        'direct' => 'Assegnazione Diretta',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Meno Occupato',
    ),
    'dom_email_errors' => array(
        1 => 'Selezionare un solo utente quando si devono assegnare oggetti direttamente.',
        2 => 'Devi assegnare solo gli oggetti selezionati durante Assegnazione Diretta.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Sì',
        'bool_false' => 'No',
    ),
    'dom_int_bool' => array(
        1 => 'Sì',
        0 => 'No',
    ),
    'dom_switch_bool' => array(
        'on' => 'Sì',
        'off' => 'No',
        '' => 'No',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Cliente di Posta di SuiteCRM',
        'mailto' => 'Mail Client Esterno',
    ),

    'dom_editor_type' => array(
        'none' => 'Sorgente HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'Formato E-mail di Default',
        'html' => 'E-mail HTML',
        'plain' => 'Email di Testo',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Run Time Passato, Non Eseguito',
        'ready' => 'Pronto',
        'in progress' => 'In corso',
        'failed' => 'Fallito',
        'completed' => 'Completato',
        'no curl' => 'Non Eseguito: cURL non disponibile',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minuti',
        'hour' => 'Ore',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Documentazione di base',
        'Sales' => 'Vendite',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archiviato',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Materiale di Marketing',
        'Product Brochures' => 'Brochure Prodotto',
        'FAQ' => 'Domande frequenti',
    ),

    'document_status_dom' => array(
        'Active' => 'Attivo',
        'Draft' => 'Bozza',
        'FAQ' => 'Domande frequenti',
        'Expired' => 'Scaduto',
        'Under Review' => 'In Revisione',
        'Pending' => 'In Attesa',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Stampa Unione',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'Contratto di Licenza',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Accetta',
        'decline' => 'Rifiutato',
        'tentative' => 'Accettato con riserva',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accettato',
        'decline' => 'Rifiutato',
        'tentative' => 'Accettato con riserva',
        'none' => 'Nessuno',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Nessuno',
        'Daily' => 'Giornaliero',
        'Weekly' => 'Settimanale',
        'Monthly' => 'Mensile',
        'Yearly' => 'Annuale',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'giorno(i)',
        'Weekly' => 'settimana(e)',
        'Monthly' => 'mese(i)',
        'Yearly' => 'anno(i)',
    ),

    'duration_dom' => array(
        '' => 'Nessuno',
        '900' => '15 minuti',
        '1800' => '30 minuti',
        '2700' => '45 minuti',
        '3600' => '1 ora',
        '5400' => '1.5 ora',
        '7200' => '2 ore',
        '10800' => '3 ore',
        '21600' => '6 ore',
        '86400' => '1 giorno',
        '172800' => '2 giorni',
        '259200' => '3 giorni',
        '604800' => '1 settimana',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Predefinita',
        'seed' => 'Seed',
        'exempt_domain' => 'Lista Soppressi - Per Dominio',
        'exempt_address' => 'Lista Soppressi - Per Indirizzo Email',
        'exempt' => 'Lista Soppressi - Per Id',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Attivo',
        'inactive' => 'Inattivo',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Messaggio Inviato/Tentato',
        'send error' => 'Messaggi non consegnati, Altro',
        'invalid email' => 'Messaggi non consegnati, Indirizzo non valido',
        'link' => 'Click sui Link',
        'viewed' => 'Messaggio Letto',
        'removed' => 'Disiscritto',
        'lead' => 'Leads Creati',
        'contact' => 'Contatti Creati',
        'blocked' => 'Bloccata dal dominio',
        'Survey' => 'Sondaggio risposto',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contatti',
        'Users' => 'Utenti',
        'Prospects' => 'Obiettivi',
        'Leads' => 'Lead',
        'Accounts' => 'Aziende',
    ),
    'merge_operators_dom' => array(
        'like' => 'Contiene',
        'exact' => 'Esatto',
        'start' => 'Inizia con',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Sì',
        'false' => 'No',
        'required' => 'Richiesto',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Disattivato',
        1 => 'Attivato',
        2 => 'Filtro',
        3 => 'Filtro predefinito selezionato',
        4 => 'Filtra solo',
    ),

    'projects_priority_options' => array(
        'high' => 'Alta',
        'medium' => 'Media',
        'low' => 'Bassa',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Non Iniziato',
        'inprogress' => 'In corso',
        'completed' => 'Completato',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Espandi Legenda',
        'collapselegend' => 'Comprimi Legenda',
        'clickfordrilldown' => 'Click per Drilldown',
        'detailview' => 'Più dettagli...',
        'piechart' => 'Diagramma a torta',
        'groupchart' => 'Diagramma a gruppo',
        'stackedchart' => 'Grafico a Barre Impilate',
        'barchart' => 'Grafico a Barre',
        'horizontalbarchart' => 'Grafico a Barre Orizzontali',
        'linechart' => 'Grafico a Linee',
        'noData' => 'Nessun dato disponibile',
        'print' => 'Stampa',
        'pieWedgeName' => 'sezione',
    ),
    'release_status_dom' => array(
        'Active' => 'Attivo',
        'Inactive' => 'Inattivo',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Virgoletta Singola (&#39;)',
        '"' => 'Doppie Virgolette (&#34;)',
        '' => 'Nessuno',
        'other' => 'Altro:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Altro:',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nuova Finestra (_blank)',
        '_self' => 'Stessa Finestra (_self)',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Manualmente',
        '30' => 'Ogni 30 secondi',
        '60' => 'Ogni minuto',
        '180' => 'Ogni 3 minuti',
        '300' => 'Ogni 5 minuti',
        '600' => 'Ogni 10 minuti',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Mai',
        '30' => 'Ogni 30 secondi',
        '60' => 'Ogni minuto',
        '180' => 'Ogni 3 minuti',
        '300' => 'Ogni 5 minuti',
        '600' => 'Ogni 10 minuti',
    ),
    'date_range_search_dom' => array(
        '=' => 'Uguali',
        'not_equal' => 'Non è uguale a',
        'greater_than' => 'Dopo',
        'less_than' => 'Prima',
        'last_7_days' => 'Ultimi 7 Giorni',
        'next_7_days' => 'Prossimi 7 Giorni',
        'last_30_days' => 'Ultimi 30 giorni',
        'next_30_days' => 'Prossimi 30 Giorni',
        'last_month' => 'Ultimo mese',
        'this_month' => 'Questo Mese',
        'next_month' => 'Mese Successivo',
        'last_year' => 'Anno scorso',
        'this_year' => 'Anno Corrente',
        'next_year' => 'L´anno prossimo',
        'between' => 'E´ tra',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Uguali',
        'not_equal' => 'Non è uguale a',
        'greater_than' => 'Maggiore di',
        'greater_than_equals' => 'Maggire di o Uguale a',
        'less_than' => 'Meno di',
        'less_than_equals' => 'Minore di o Uguale a',
        'between' => 'E´ tra',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copia',
        'move' => 'Sposta',
        'donothing' => 'Nessuna Operazione',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Risultati',
    'ERR_SEARCH_INVALID_QUERY' => 'Si è verificato un errore durante la ricerca. La sintassi della query potrebbe non essere valida.',
    'ERR_SEARCH_NO_RESULTS' => 'Nessun risultato corrispondente ai tuoi criteri di ricerca. Prova ad ampliare la tua ricerca.',
    'LBL_SEARCH_PERFORMED_IN' => 'Ricerca eseguita in',
    'LBL_EMAIL_CODE' => 'Codice Email:',
    'LBL_SEND' => 'Invia',
    'LBL_LOGOUT' => 'Esci',
    'LBL_TOUR_NEXT' => 'Avanti',
    'LBL_TOUR_SKIP' => 'Salta',
    'LBL_TOUR_BACK' => 'Indietro',
    'LBL_TOUR_TAKE_TOUR' => 'Vai alla presentazione',
    'LBL_MOREDETAIL' => 'Più dettagli' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifica' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'Visualizza' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'Filtro' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'Aggiungi' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Aggiungi indirizzo email' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Nascondi/Mostra' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'Elimina' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'Svuota' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'Cancella' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Rimuovi indirizzo email' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Cancellazione',
    'LBL_ID_FF_INVALID' => 'Reso non valido',
    'LBL_ADD' => 'Aggiungi' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Logo Azienda' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Connettori Popups',
    'LBL_CLOSEINLINE' => 'Chiudi',
    'LBL_VIEWINLINE' => 'Visualizza',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Stampa',
    'LBL_HELP' => 'Aiuto',
    'LBL_ID_FF_SELECT' => 'Selezionare',
    'DEFAULT' => 'Base',
    'LBL_SORT' => 'Ordina per',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Attiva SMTP con SSL o TLS?',
    'LBL_NO_ACTION' => 'Non c\'è nessuna azione con il nome: %s',
    'LBL_NO_SHORTCUT_MENU' => 'Nessuna azione disponibile.',
    'LBL_NO_DATA' => 'Nessun Dato',

    'LBL_ROUTING_FLAGGED' => 'set di flag',
    'LBL_ROUTING_TO' => 'a',
    'LBL_ROUTING_TO_ADDRESS' => 'a indirizzo',
    'LBL_ROUTING_WITH_TEMPLATE' => 'con modello',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Attualmente, nel form, hai dei valori nei campi del telefono e indirizzo. Per sovrascrivere questi valori con il telefono/indirizzo dell´azienda che hai selezionata, clicca "OK". Per mantenere i valori attuali, clicca "Annulla".',
    'LBL_DROP_HERE' => '[Trascina Qui]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Imposta valori di default di Gmail',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nome',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Server della posta in uscita',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Password SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Porta SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Server SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Nome Utente SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Predefinita',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Attenzione: mancano nome utente e password dell´account di posta in uscita.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Impostare una connessione OAuth esterna.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Attenzione: Non è stata impostata alcuna password.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Attenzione: Credenziali mancanti',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Imposta gli account di posta per visualizzare le emails in entrata nei tuoi account di posta.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Fornisci informazioni sul server di posta SMTP da utilizzare per le email in uscita negli accounts di posta.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Fatto',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Svuota',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'A:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Ccn:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Ccn',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Indirizzo Email',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filtro',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nome',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Nessun indirizzo trovato',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Salva & Aggiungi alla rubrica',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Seleziona voci di rubrica',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Rubrica',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Attenzione! L´account di posta in uscita che stai cercando di eliminare è associato ad un account di posta in entrata già esistente. Sei sicuro di voler continuare?',
    'LBL_EMAIL_ADDRESSES' => 'Email',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Indirizzo Email',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Hai confermato che è stato attivato il tuo indirizzo email: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Impossibile confermare l\'indirizzo email',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importa in SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Assegnazione',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Allega',
    'LBL_EMAIL_ATTACHMENT' => 'Allega',
    'LBL_EMAIL_ATTACHMENTS' => 'Da Sistema Locale',
    'LBL_EMAIL_ATTACHMENTS2' => 'Dai Documenti SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Modelli di Allegati',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'File',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Documento',
    'LBL_EMAIL_BCC' => 'CCN',
    'LBL_EMAIL_CANCEL' => 'Annulla',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Set di Caratteri',
    'LBL_EMAIL_CHECK' => 'Controllo Email',
    'LBL_EMAIL_CHECKING_NEW' => 'Controllo nuova posta',
    'LBL_EMAIL_CHECKING_DESC' => 'Controllo nuova posta. <br><br>Se è il primo controllo per questo mail account, può impiegare un pò di tempo.',
    'LBL_EMAIL_CLOSE' => 'Chiudi',
    'LBL_EMAIL_COFFEE_BREAK' => 'Controllo nuova posta. <br><br> Un account di posta considerevole potrebbe richiedere molto tempo.',

    'LBL_EMAIL_COMPOSE' => 'Email',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Inserisci destinatari per questa email.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'La mail è vuota. Inviare lo stesso?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Questa email non ha un oggetto. Inviare ugualmente?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(nessun oggetto)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Inserisci un indirizzo valido per i campi To, CC and BCC',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Abbandonare questa email?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Sei sicuro di voler eliminare questa firma?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Mail Inviata',

    'LBL_EMAIL_CREATE_NEW' => '--Crea al Salvataggio--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiplo',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vuoto',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Data Spedizione dal Mittente',
    'LBL_EMAIL_DATE_TODAY' => 'Oggi',
    'LBL_EMAIL_DELETE' => 'Elimina',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Elimina i messaggi selezionati?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email cancellate con successo.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Sto eliminando i messaggi',
    'LBL_EMAIL_DETAILS' => 'Dettagli',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Con i contatti vengono usati solamente gli indirizzi primari.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Sto svuotando il cestino',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Eliminazione server in uscita',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Eliminazione file di cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Nessuna email da visualizzare.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Nessun indirizzo email da visualizzare.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Il nome della cartella deve essere univoco e non vuoto. Si prega di riprovare.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Impossibile cancellare la cartella. O la cartella o un suo figlio hanno una casella di posta elettronica associata ad essa.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Impossibile determinare la cartella predisposta dal contesto. Provare ancora.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Si prega di controllare le impostazioni.',
    'LBL_EMAIL_ERROR_DESC' => 'Errori individuati: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Non hai accesso a questa area. Contattare l´amministratore del sistema per ottenere i permessi.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'I nomi delle cartelle di SuiteCRM devono essere univoci.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Si prega di inserire alcuni criteri di ricerca.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Si è verificato un errore',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Messaggio rimosso dal Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'O messagio rimosso dal Server o spostato in una differente cartella',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Connessione col mail server fallita. Si prega di contattare l´amministratore',
    'LBL_EMAIL_ERROR_MOVE' => 'Spostamentro email tra server e/o account di posta elettronica non è supportato in questo momento.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Errore Spostamento',
    'LBL_EMAIL_ERROR_NAME' => 'Un nome è richiesto.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Da Indirizzo è richiesto.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Si prega di fornire un file.',
    'LBL_EMAIL_ERROR_SERVER' => 'Un indirizzo mail server è richiesto.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Account di posta elettronica potrebbe non essere stato salvato.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Si è verificato un errore durante la comunicazione con il server di posta.',
    'LBL_EMAIL_ERROR_USER' => 'Un nome login è richiesto.',
    'LBL_EMAIL_ERROR_PORT' => 'Una porta al server di posta è richiesto.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Un protocollo server è richiesto.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'E´ richiesta una cartella controllabile.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'E´ richiesto il cestino.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Questa informazione non è disponibile',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Nessun server di posta in uscita specificato.',
    'LBL_EMAIL_ERROR_SENDING' => 'Errore in invio mail. Per favore contattare l\'amministratore del sistema per assistenza.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Cartelle',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'Aggiungi',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Aggiungi Cartella',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Rinomina Cartella',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Salva',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Aggiungi Cartella in',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Questa cartella non è modificabile',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Sei sicuro di eliminare la cartella?\nNon è possibile annullare.\nTutte le sottocartelle saranno eliminate.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nuova Cartella',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Seleziona cartella prima di fare questa azione.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gestione delle cartelle di SuiteCRM',

    'LBL_EMAIL_FORWARD' => 'Inoltra',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Scaricate [[count]] di [[total]] email',
    'LBL_EMAIL_FROM' => 'Da',
    'LBL_EMAIL_GROUP' => 'gruppo',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Gruppo',
    'LBL_EMAIL_HOME_FOLDER' => 'Pagina iniziale',
    'LBL_EMAIL_IE_DELETE' => 'Sto cancellando l´account email',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Eliminazione firma',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Sei sicuro di eliminare l´account email?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Eliminazione avvenuta con sucesso.',
    'LBL_EMAIL_IE_SAVE' => 'Salvataggio informazioni Account di posta elettronica',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importazione Email',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importa in SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Importa Impostazioni',
    'LBL_EMAIL_INVALID' => 'Non valido',
    'LBL_EMAIL_LOADING' => 'Caricamento...',
    'LBL_EMAIL_MARK' => 'Segna',
    'LBL_EMAIL_MARK_FLAGGED' => 'Come selezionata',
    'LBL_EMAIL_MARK_READ' => 'Come letta',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Come non selezionata',
    'LBL_EMAIL_MARK_UNREAD' => 'Come non letta',
    'LBL_EMAIL_ASSIGN_TO' => 'Assegna A',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Crea Cartella',
    'LBL_EMAIL_MENU_COMPOSE' => 'Componi a',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Elimina Cartella',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Svuota Cestino',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Sincronizza',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Elimina i file di cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Cancella',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Rinomina Cartella',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Sto rinominando la Cartella',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Si prega di effettuare una selezione prima di provare l´operazione.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Crea una Cartella (remota o in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Elimina una Cartella (remota o in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Svuota tutti i cestini per il tuo account email',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Segna queste email come lette',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Segna queste email come non selezionate',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Rinomina una Cartella (remota o in SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'messaggi',

    'LBL_EMAIL_ML_NAME' => 'Elenco Nomi',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Elenco Indirizzi selezionati',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Elenco Indirizzi disponibili',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> per effettuare una selezione multipla <br />(Per utenti Mac <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'No',
    'LBL_EMAIL_NOT_SENT' => 'Il sistema non è in grado di processare la tua richiesta. Si prega di contattare l´amministratore del sistema.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'Un momento preso...',
    'LBL_EMAIL_OPEN_ALL' => 'Apri messaggi multipli',
    'LBL_EMAIL_OPTIONS' => 'Opzioni',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Scrivi veloce',
    'LBL_EMAIL_OPT_OUT' => 'Disiscritto',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Opted out e non valido',
    'LBL_EMAIL_PERFORMING_TASK' => 'In esecuzione',
    'LBL_EMAIL_PRIMARY' => 'Primario',
    'LBL_EMAIL_PRINT' => 'Stampa',

    'LBL_EMAIL_QC_BUGS' => 'Errore',
    'LBL_EMAIL_QC_CASES' => 'Reclamo',
    'LBL_EMAIL_QC_LEADS' => 'Leads',
    'LBL_EMAIL_QC_CONTACTS' => 'Contatto',
    'LBL_EMAIL_QC_TASKS' => 'Compito',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Opportunità',
    'LBL_EMAIL_QUICK_CREATE' => 'Creazione Rapida',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Ricostruzione Cartelle',
    'LBL_EMAIL_RELATE_TO' => 'Relate',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Visualizza Relazioni',
    'LBL_EMAIL_RECORD' => 'Record di posta elettronica',
    'LBL_EMAIL_REMOVE' => 'Cancella',
    'LBL_EMAIL_REPLY' => 'Rispondi',
    'LBL_EMAIL_REPLY_ALL' => 'Rispondi a tutti',
    'LBL_EMAIL_REPLY_TO' => 'Rispondi a',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Recupero Messaggio',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Recupero Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Si prega di selezionare un unico email record',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Ritorna al modulo precedente?',
    'LBL_EMAIL_REVERT' => 'Ripristina',
    'LBL_EMAIL_RELATE_EMAIL' => 'Collegare Email',

    'LBL_EMAIL_RULES_TITLE' => 'Gestione regole',

    'LBL_EMAIL_SAVE' => 'Salva',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Salva &amp; Rispondi',
    'LBL_EMAIL_SAVE_DRAFT' => 'Salva Bozza',
    'LBL_EMAIL_DRAFT_SAVED' => 'La Bozza è stata salvata',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Dalla data',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Alla data',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Nessun risultato soddisfa i criteri.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Risultato Ricerca',

    'LBL_EMAIL_SELECT' => 'Selezionare',

    'LBL_EMAIL_SEND' => 'Invia',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sto inviando la mail',

    'LBL_EMAIL_SETTINGS' => 'Impostazioni',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Account Email',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Cancella Contenuto della Scheda',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Controlla nuove E-mail',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'Indirizzo mittente',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Indirizzo Email per notifiche di Test:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nome mittente',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Rispondi all´indirizzo',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Sincronizza tutte gli Account Email',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'E´ stata inviata una email all´indirizzo specificato utilizzando le impostazioni fornite di posta in uscita. Controlla di aver ricevuto la mail e verifica se le impostazioni sono corrette.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Vedere il Log completo di SMTP',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Eseguire l´intera sincronizzazione ?\nLarge di account di posta elettronica potrebbe richiedere pochi minuti.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Cliccare il tasto Shift o il tasto Ctrl per selezionare più cartelle.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Generale',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Creare Cartella di Gruppo',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Modifica Cartella di Gruppo',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nome',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Queste modifiche, affinchè vengano attivate richiedono un aggiornamento della pagina.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Recupero Account di posta elettronica',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Le impostazione sono state salvate.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Invia Email come Puro Testo',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Numero di email per pagina',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visualizza Impostazioni',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferenze',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Cartelle disponibili per utente',
    'LBL_EMAIL_ERROR_PREPEND' => 'Si è verificato un errore nell\'email:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Il server di posta in uscita selezionato per l´account di posta che stai utilizzando non è valido. Controlla le impostazioni o seleziona un altro server di posta per l´account di posta.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Non è stato configurato un server di posta in uscita per l´account di posta che stai utilizzando. Seleziona o aggiungi un server di posta in uscita per l´account di posta.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Firma predefinita',
    'LBL_EMAIL_SIGNATURES' => 'Firme',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Altro',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Cartelle Remote ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ Cartelle SuiteCRM ]',
    'LBL_EMAIL_SUBJECT' => 'Oggetto',
    'LBL_EMAIL_SUCCESS' => 'Successo',
    'LBL_EMAIL_SUITE_FOLDER' => 'Cartella SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Il corpo del modello Email è vuoto',
    'LBL_EMAIL_TEMPLATES' => 'Modelli',
    'LBL_EMAIL_TO' => 'A',
    'LBL_EMAIL_VIEW' => 'Visualizza',
    'LBL_EMAIL_VIEW_HEADERS' => 'Mostra intestazioni',
    'LBL_EMAIL_VIEW_RAW' => 'Visualizza sorgente Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Funzionalità non supportata da POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Test di default del link.',
    'LBL_EMAIL_YES' => 'Sì',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Invia Email di Test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Email di Test inviata',
    'LBL_EMAIL_MESSAGE_NO' => 'Messaggio n.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Importazione Eseguita',
    'LBL_EMAIL_IMPORT_FAIL' => 'Importazione Fallita perchè il messaggio è già stato importato o eliminato dal server',

    'LBL_LINK_NONE' => 'Nessuno',
    'LBL_LINK_ALL' => 'Tutto',
    'LBL_LINK_RECORDS' => 'Record',
    'LBL_LINK_SELECT' => 'Selezionare',
    'LBL_LINK_ACTIONS' => 'AZIONI',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Conferma',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Vuoi chiudere questo record?',
    'LBL_INVALID_FILE_EXTENSION' => 'Estensione File non valida',

    'ERR_AJAX_LOAD' => 'Si è verificato un errore:',
    'ERR_AJAX_LOAD_FAILURE' => 'C´è stato un errore durante l´elaborazione della richiesta, si prega di riprovare in un secondo momento.',
    'ERR_AJAX_LOAD_FOOTER' => 'Se l\'errore persiste, chiedi al tuo amministratore di disabilitare l\'Ajax per questo modulo',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Il separatore decimale non usa lo stesso carattere come i separatori millesimali.\\n\\n  Prego cambia il valore.',
    'ERR_DELETE_RECORD' => 'Per eliminare il contatto deve essere specificato il numero del record.',
    'ERR_EXPORT_DISABLED' => 'Esportazione non abilitata.',
    'ERR_EXPORT_TYPE' => 'Errore di esportazione',
    'ERR_INVALID_EMAIL_ADDRESS' => 'indirizzo email non valido.',
    'ERR_INVALID_FILE_REFERENCE' => 'Riferimento al file non valido',
    'ERR_NO_HEADER_ID' => 'Funzione non disponibile in questo tema.',
    'ERR_NOT_ADMIN' => 'Accesso non consentito alla parte di amministrazione.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Mancano i campi richiesti:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Campo obbligatorio non valido:',
    'ERR_INVALID_VALUE' => 'Valore non valido:',
    'ERR_NO_SUCH_FILE' => 'Il file non esiste nel sistema',
    'ERR_NO_SINGLE_QUOTE' => 'Non puoi usare le virgolette semplici per ',
    'ERR_NOTHING_SELECTED' => 'Si prega di scegliere prima di proseguire.',
    'ERR_SELF_REPORTING' => 'Utente non può dipendere da sè stesso.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Nessun riscontro per il campo:',
    'ERR_SQS_NO_MATCH' => 'Nessun riscontro',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Si prega di specificare la \'chiave\' indice nell\'attributo displayParams per la definizione di Meta-dati',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Errore: Il nome del Portale è già stato assegnato ad un altro contatto.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Il valore del campo non è compatibile con il valore preciso',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Si è verificato un errore nel salvataggio dell´account esterno.',
    'ERR_NO_DB' => 'Non è stato possibile connettersi al database. Per dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'ERR_DB_FAIL' => 'Errore nel Database. Per dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'ERR_DB_VERSION' => 'I file SuiteCRM {0} possono essere utilizzati solo con un database SuiteCRM {1}.',

    'LBL_ACCOUNT' => 'Azienda',
    'LBL_ACCOUNTS' => 'Aziende',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Attività',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Vedi sommario',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'Vedi sommario',
    'LBL_ADD_BUTTON' => 'Aggiungi',
    'LBL_ADD_DOCUMENT' => 'Aggiungi documento',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Aggiungi alla Lista Obiettivi',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Aggiungi Contatti alla Lista Obiettivi',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Premi per chiudere',
    'LBL_ADDITIONAL_DETAILS' => 'Ulteriori Dettagli',
    'LBL_ADMIN' => 'Amministrazione',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archivio',
    'LBL_ASSIGNED_TO_USER' => 'Assegnata all´utente',
    'LBL_ASSIGNED_TO' => 'Assegnato a:',
    'LBL_BACK' => 'Indietro',
    'LBL_BILLING_ADDRESS' => 'Indirizzo di Fatturazione',
    'LBL_QUICK_CREATE' => 'Crea ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM Open Source',
    'LBL_BUGS' => 'Errori',
    'LBL_BY' => 'da',
    'LBL_CALLS' => 'Chiamate',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Invia le email della Campagna che sono in coda',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Invio',
    'LBL_CASE' => 'Reclamo',
    'LBL_CASES' => 'Reclami',
    'LBL_CHANGE_PASSWORD' => 'Cambia Password',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'Seleziona tutti',
    'LBL_CITY' => 'Città',
    'LBL_CLEAR_BUTTON_LABEL' => 'Svuota',
    'LBL_CLEAR_BUTTON_TITLE' => 'Svuota',
    'LBL_CLEARALL' => 'Azzera tutto',
    'LBL_CLOSE_BUTTON_TITLE' => 'Chiudi',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Chiudi e crea nuovo',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Chiudi e crea nuovo',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Record in lavorazione:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Scrivi Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Scrivi Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'Sì',
    'LBL_SEARCH_DROPDOWN_NO' => 'No',
    'LBL_CONTACT_LIST' => 'Elenco Contatti',
    'LBL_CONTACT' => 'Contatto',
    'LBL_CONTACTS' => 'Contatti',
    'LBL_CONTRACT' => 'Contratto',
    'LBL_CONTRACTS' => 'Contratti',
    'LBL_COUNTRY' => 'Nazione:',
    'LBL_CREATE_BUTTON_LABEL' => 'Crea',
    'LBL_CREATED_BY_USER' => 'Creato dall\'utente',
    'LBL_CREATED_USER' => 'Creato dall\'utente',
    'LBL_CREATED' => 'Creato da',
    'LBL_CURRENT_USER_FILTER' => 'Solo i miei elementi:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_DOCUMENTS' => 'Documenti',
    'LBL_DATE_ENTERED' => 'Data di Creazione:',
    'LBL_DATE_MODIFIED' => 'Data Modifica:',
    'LBL_EDIT_BUTTON' => 'Modifica',
    'LBL_DUPLICATE_BUTTON' => 'Duplica',
    'LBL_DELETE_BUTTON' => 'Elimina',
    'LBL_DELETE' => 'Elimina',
    'LBL_DELETED' => 'Eliminato',
    'LBL_DIRECT_REPORTS' => 'Report Diretti',
    'LBL_DONE_BUTTON_LABEL' => 'Fatto',
    'LBL_DONE_BUTTON_TITLE' => 'Fatto',
    'LBL_FAVORITES' => 'Preferiti',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Si prega di selezionare un file vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'Il formato vCard non fornisce tutti i campi richiesti da questo modulo. Per dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'LBL_VCARD_ERROR_FILESIZE' => 'La dimensione del file inviato supera il limite di dimensioni di 30mila caratteri specificato nel modulo HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Si è verificato un errore inviando il file vCard. Per dettagli si prega di fare riferimento al registro errori di SuiteCRM.',
    'LBL_IMPORT_VCARD' => 'Importa vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importa vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Importa vCard',
    'LBL_VIEW_BUTTON' => 'Visualizza',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Invia Email come PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Invia Email come PDF',
    'LBL_EMAILS' => 'Email',
    'LBL_EMPLOYEES' => 'Dipendenti',
    'LBL_ENTER_DATE' => 'Inserisci Data',
    'LBL_EXPORT' => 'Esporta',
    'LBL_FAVORITES_FILTER' => 'I miei Preferiti:',
    'LBL_GO_BUTTON_LABEL' => 'Vai',
    'LBL_HIDE' => 'Nascosto',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importa',
    'LBL_IMPORT_STARTED' => 'Importa Iniziato: ',
    'LBL_LAST_VIEWED' => 'Ultima vista',
    'LBL_LEADS' => 'Lead',
    'LBL_LESS' => 'meno',
    'LBL_CAMPAIGN' => 'Campagna:',
    'LBL_CAMPAIGNS' => 'Campagne',
    'LBL_CAMPAIGNLOG' => 'Log Campagna',
    'LBL_CAMPAIGN_CONTACT' => 'Campagne',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Nessuno',
    'LBL_THEME' => 'Tema:',
    'LBL_FOUND_IN_RELEASE' => 'Trovato nella Release',
    'LBL_FIXED_IN_RELEASE' => 'Fisso nella Release',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome Azienda',
    'LBL_LIST_ASSIGNED_USER' => 'Utente',
    'LBL_LIST_CONTACT_NAME' => 'Contatto',
    'LBL_LIST_CONTACT_ROLE' => 'Ruolo del Contatto',
    'LBL_LIST_DATE_ENTERED' => 'Data di Creazione',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_OF' => 'di',
    'LBL_LIST_PHONE' => 'Telefono',
    'LBL_LIST_RELATED_TO' => 'Collegato a',
    'LBL_LIST_USER_NAME' => 'Utente per Autenticazione',
    'LBL_LISTVIEW_NO_SELECTED' => 'Si prega di selezionare almeno 1 record per continuare.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Si prega di selezionare almeno 2 record per continuare.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Record selezionati',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selezionato: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Dott.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Straordinario',
    'LBL_CANCEL' => 'Annulla',
    'LBL_VERIFY' => 'Verifica',
    'LBL_RESEND' => 'Reinvia',
    'LBL_PROFILE' => 'Profilo',
    'LBL_MAILMERGE' => 'Stampa Unione',
    'LBL_MASS_UPDATE' => 'Aggiornamento di Massa',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Non ci sono campi disponibili per l´operazione di Aggiornamento di Massa',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Escludi Indirizzo Primario',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Email Principale Opt in',
    'LBL_MEETINGS' => 'Appuntamenti',
    'LBL_MEETING_GO_BACK' => 'Torna indietro all\' appuntamento',
    'LBL_MEMBERS' => 'Membri',
    'LBL_MEMBER_OF' => 'Membro di',
    'LBL_MODIFIED_BY_USER' => 'Modificato dall\'utente',
    'LBL_MODIFIED_USER' => 'Modificato dall\'utente',
    'LBL_MODIFIED' => 'Modificato da',
    'LBL_MODIFIED_NAME' => 'Modificato da Nome',
    'LBL_MORE' => 'Più',
    'LBL_MY_ACCOUNT' => 'Il mio profilo',
    'LBL_NAME' => 'Nome',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Crea',
    'LBL_NEW_BUTTON_TITLE' => 'Crea',
    'LBL_NEXT_BUTTON_LABEL' => 'Avanti',
    'LBL_NONE' => '--Nessuno--',
    'LBL_NOTES' => 'Note',
    'LBL_OPPORTUNITIES' => 'Opportunità',
    'LBL_OPPORTUNITY_NAME' => 'Nome Opportunità',
    'LBL_OPPORTUNITY' => 'Opportunità',
    'LBL_OR' => 'o',
    'LBL_PANEL_OVERVIEW' => 'Informazioni',
    'LBL_PANEL_ASSIGNMENT' => 'ALTRO',
    'LBL_PANEL_ADVANCED' => 'ALTRE INFORMAZIONI',
    'LBL_PARENT_TYPE' => 'Tipo Relazione',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'CAP:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Indirizzo Primario, Città:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Indirizzo Principale, Nazione:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Indirizzo Primario, CAP:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Indirizzo Primario, Provincia:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Indirizzo Primario, Via [2]:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Indirizzo Primario, Via [3]:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Indirizzo Primario, Via:',
    'LBL_PRIMARY_ADDRESS' => 'Indirizzo principale:',

    'LBL_PROSPECTS' => 'Prospect',
    'LBL_PRODUCTS' => 'Prodotti',
    'LBL_PROJECT_TASKS' => 'Compiti di Progetto',
    'LBL_PROJECTS' => 'Progetti',
    'LBL_QUOTES' => 'Preventivi',

    'LBL_RELATED' => 'Correlato',
    'LBL_RELATED_RECORDS' => 'Records relativi',
    'LBL_REMOVE' => 'Cancella',
    'LBL_REPORTS_TO' => 'Dipende Da',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indica un campo obbligatorio',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Fatto',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Modulo Completo',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Modulo Completo',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Salva e crea nuovo',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Salva e crea nuovo',
    'LBL_SAVE_OBJECT' => 'Salva {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'C',
    'LBL_SEARCH_BUTTON_LABEL' => 'Ricerca',
    'LBL_SEARCH_BUTTON_TITLE' => 'Ricerca',
    'LBL_FILTER' => 'Filtro',
    'LBL_SEARCH' => 'Ricerca',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'altro',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Formato file non valido, si possono caricare solo file di immagini.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Selezionare',
    'LBL_SELECT_BUTTON_TITLE' => 'Selezionare',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Sfoglia Documenti',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Sfoglia Documenti',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Seleziona Contatto',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Seleziona Contatto',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Seleziona da un Report',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Seleziona Report',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Seleziona utente',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Seleziona utente',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Annulla selezione',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Annulla selezione',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Annulla selezione',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Annulla selezione',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Seleziona File',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Seleziona File',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Cancella file',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Cancella file',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Seleziona utente',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Seleziona utente',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Elimina Utente',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Elimina Utente',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Seleziona Azienda',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Seleziona Azienda',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Cancella Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Cancella Account',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Seleziona Campagna',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Seleziona Campagna',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Cancella Campagna',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Cancella Campagna',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Seleziona Contatto',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Seleziona Contatto',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Cancella Contatto',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Cancella Contatto',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Seleziona la squadra',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Seleziona la squadra',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Cancella la squadra',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Cancella la squadra',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Risorse utilizzate per costruire questa pagina (query, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondi.',
    'LBL_SERVER_RESPONSE_TIME' => 'Tempo di risposta del server:',
    'LBL_SERVER_MEMORY_BYTES' => 'byte',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilizzo Memoria Server: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilizzo: - Module: {0} - Azione: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Utilizzo Memoria Server Peak: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Indirizzo Spedizione',
    'LBL_SHOW' => 'Mostra',
    'LBL_STATE' => 'Stato:',
    'LBL_STATUS_UPDATED' => 'Il tuo stato per questo evento è stato aggiornato!',
    'LBL_STATUS' => 'Stato:',
    'LBL_STREET' => 'Indirizzo',
    'LBL_SUBJECT' => 'Oggetto',

    'LBL_INBOUNDEMAIL_ID' => 'ID Email in arrivo',

    'LBL_SCENARIO_SALES' => 'Vendite',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finanza',
    'LBL_SCENARIO_SERVICE' => 'Servizio',
    'LBL_SCENARIO_PROJECT' => 'Gestione Progetto',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Questo scenario supporta la gestione di articoli di vendita',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Questo scenario supporta la gestione di elementi di marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Questo scenario supporta la gestione degli elementi correlati alle finanze',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Questo scenario supporta la gestione di elementi riferiti a servizi',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Questo scenario supporta la gestione di elementi relativi a progetti',

    'LBL_SYNC' => 'Sincr',
    'LBL_TABGROUP_ALL' => 'Tutto',
    'LBL_TABGROUP_ACTIVITIES' => 'Attività',
    'LBL_TABGROUP_COLLABORATION' => 'Collaborazione',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Altro',
    'LBL_TABGROUP_SALES' => 'Vendite',
    'LBL_TABGROUP_SUPPORT' => 'Assistenza',
    'LBL_TASKS' => 'Compiti',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivia Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivia Email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Recupera',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Recupera',
    'LBL_UNDELETE_BUTTON' => 'Recupera',
    'LBL_UNDELETE' => 'Recupera',
    'LBL_UNSYNC' => 'Desinc.',
    'LBL_UPDATE' => 'Aggiorna',
    'LBL_USER_LIST' => 'Elenco Utenti',
    'LBL_USERS' => 'Utenti',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Controllo delle email esistenti in entrata...',
    'LBL_VERIFY_PORTAL_NAME' => 'Controllo dei portali esistenti...',
    'LBL_VIEW_IMAGE' => 'Visualizza',

    'LNK_ABOUT' => 'Informazioni',
    'LNK_ADVANCED_FILTER' => 'Filtro avanzato',
    'LNK_BASIC_FILTER' => 'Filtro Rapido',
    'LBL_ADVANCED_SEARCH' => 'Filtro avanzato',
    'LBL_QUICK_FILTER' => 'Filtro Rapido',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Mostra tutti',
    'LNK_CLOSE' => 'Chiudi',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifica il filtro corrente',
    'LNK_SAVED_VIEWS' => 'Opzioni Aspetto',
    'LNK_DELETE' => 'Elimina',
    'LNK_EDIT' => 'Modifica',
    'LNK_GET_LATEST' => 'Ottieni ultimo',
    'LNK_GET_LATEST_TOOLTIP' => 'Sostituisci con ultima versione',
    'LNK_HELP' => 'Aiuto',
    'LNK_CREATE' => 'Crea',
    'LNK_LIST_END' => 'Fine',
    'LNK_LIST_NEXT' => 'Avanti',
    'LNK_LIST_PREVIOUS' => 'Precedente',
    'LNK_LIST_RETURN' => 'Ritorna all´intero elenco',
    'LNK_LIST_START' => 'Inizio',
    'LNK_LOAD_SIGNED' => 'Firma',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Sostituisci con un documento firmato',
    'LNK_PRINT' => 'Stampa',
    'LNK_BACKTOTOP' => 'Torna all´inizio',
    'LNK_REMOVE' => 'Cancella',
    'LNK_RESUME' => 'Riassumi',
    'LNK_VIEW_CHANGE_LOG' => 'Vedi log cambiamenti',

    'NTC_CLICK_BACK' => 'Utilizza il pulsante indietro del browser e correggi il problema, grazie.',
    'NTC_DATE_FORMAT' => '(aaaa-mm-gg)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Sei sicuro di voler eliminare i dati selezionati?',
    'NTC_TEMPLATE_IS_USED' => 'Il template è usato in almeno un´email marketing. Sei sicuro di volerlo cancellare?',
    'NTC_TEMPLATES_IS_USED' => 'I seguenti templates sono usati in email marketing. Sei sicuro di volerli cancellare?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Sei sicuro di voler eliminare questo record ?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Sei sicuro di voler eliminare',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Sei sicuro di voler aggiornare',
    'NTC_DELETE_SELECTED_RECORDS' => ' record(s) selezionati?',
    'NTC_LOGIN_MESSAGE' => 'Inserire i dati per l´identificazione, grazie.',
    'NTC_NO_ITEMS_DISPLAY' => 'nessuno',
    'NTC_REMOVE_CONFIRMATION' => 'Sei sicuro di voler rimouvere questo relazione? Solo la relazione sarà rimossa. Il registro non sarà eliminato.',
    'NTC_REQUIRED' => 'Indica un campo obbligatorio',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Benvenuto',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'WARN_UNSAVED_CHANGES' => 'Stai per uscire da questo record senza salvare le modifiche che potresti aver fatto al record. Sei sicuro di voler uscire da questo record?',
    'ERROR_NO_RECORD' => 'Errore ricerca record.  Questo record potrebbe essere stato cancellato o non sei autorizzato a vederlo.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Attenzione:</b> Il vostro browser è di una versione non supportata, oppure state usando un browser non supportato.<p></p>Si raccomandano le seguenti versioni per i vari browser:<p></p><ul><li>Internet Explorer 10 (la modalità Compatibilità non è supportata)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Attenzione:</b> Il vostro Internet Explorer è in modalità Compatibilità, che non è supportata.',
    'ERROR_TYPE_NOT_VALID' => 'Errore. Questo tipo non è valido.',
    'ERROR_NO_BEAN' => 'Impossibile ottenere bean.',
    'LBL_DUP_MERGE' => 'Trova Duplicati',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Gestione Sottoscrizioni',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestisci sottoscrizioni per',
    // Ajax status strings
    'LBL_LOADING' => 'Caricamento...',
    'LBL_SEARCHING' => 'Sto Cercando...',
    'LBL_SAVING_LAYOUT' => 'Salvataggio Layout ...',
    'LBL_SAVED_LAYOUT' => 'Layout è stato salvato.',
    'LBL_SAVED' => 'Salvato',
    'LBL_SAVING' => 'Salvataggio',
    'LBL_DISPLAY_COLUMNS' => 'Visualizza colonne',
    'LBL_HIDE_COLUMNS' => 'Nascondi colonne',
    'LBL_SEARCH_CRITERIA' => 'Criteri di Ricerca',
    'LBL_SAVED_VIEWS' => 'Visualizzazioni Salvate',
    'LBL_PROCESSING_REQUEST' => 'In corso...',
    'LBL_REQUEST_PROCESSED' => 'Fatto',
    'LBL_AJAX_FAILURE' => 'Errore Ajax',
    'LBL_MERGE_DUPLICATES' => 'Unisci',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Miei Filtri',
    'LBL_SEARCH_POPULATE_ONLY' => 'Effettuare una ricerca usando lo spazio qui sopra',
    'LBL_DETAILVIEW' => 'Maschera Dettaglio',
    'LBL_LISTVIEW' => 'Maschera Elenco',
    'LBL_EDITVIEW' => 'Maschera Modifica',
    'LBL_BILLING_STREET' => 'Via:',
    'LBL_SHIPPING_STREET' => 'Via:',
    'LBL_SEARCHFORM' => 'Filtro di Ricerca',
    'LBL_SAVED_SEARCH_ERROR' => 'Si prega di fornire un nome per questo modulo.',
    'LBL_DISPLAY_LOG' => 'Visualizza Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'Sistema',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Sessione Scaduta',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'La tua sessione sta per finire pergo salvare il lavoro.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'la tua sessione è scaduta.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Appuntamento',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Chiamata',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Ora:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Luogo:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Descrizione:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Stato:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Collegato a:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evento',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Evento non impostato.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Luogo non impostato.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Data inizio non impostata.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Nessun risultato trovato.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Nessun risultato trovato... Modificare i criteri di ricerca e riprovare?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Nessun risultato trovato per <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Crea <item1> come nuovo <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'o modifica i criteri di ricerca',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Al momento non hai nessun record salvato. <item2> o <item3> ora.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Aggiungi ai Preferiti',
    'LBL_CREATE_CONTACT' => 'Crea Contatto',
    'LBL_CREATE_CASE' => 'Nuovo Reclamo',
    'LBL_CREATE_NOTE' => 'Nuova Nota',
    'LBL_CREATE_OPPORTUNITY' => 'Nuova Opportunità',
    'LBL_SCHEDULE_CALL' => 'Schedula chiamata',
    'LBL_SCHEDULE_MEETING' => 'Schedula appuntamento',
    'LBL_CREATE_TASK' => 'Nuovo Compito',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Genera Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Salva Modulo Web',
    'LBL_AVAILABLE_FIELDS' => 'Campi disponibili',
    'LBL_FIRST_FORM_COLUMN' => 'Prima Colonna del Modulo',
    'LBL_SECOND_FORM_COLUMN' => 'Seconda Colonna del Modulo',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Campo obbligatorio mancante: Assegnato a',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Campo obbligatorio mancante: Campagna collegata',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Modulo Web da creare ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Inviando questo modulo verrà creato ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Aggiungi tutti i campi',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Azzera tutti i campi',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Rimuovi tutti i campi',
    'LBL_NEXT_BTN' => 'Avanti',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'E\' possibile allegare solo i seguenti tipi di immagini: JPG, PNG.',
    'LBL_TRAINING' => 'Forum di supporto',
    'ERR_MSSQL_DB_CONTEXT' => 'Cambia il contesto del database a',
    'ERR_MSSQL_WARNING' => 'Avviso:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Errore: il file [[file]] è mancante. Impossibile creare poichè il file HTML non è stato trovato.',
    'ERR_CANNOT_FIND_MODULE' => 'Errore: Modulo [module] non esiste.',
    'LBL_ALT_ADDRESS' => 'Altro Indirizzo:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Errore: C´è un numero diverso di argomenti per ´chiave´ e ´copia´ elementi nella lista dei paramentri visualizzati.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generale',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Solo i miei elementi',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titolo',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vedi righe',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Avete raggiunto il numero massimo delle Dashlets di SuiteCRM impostato dal vostro amministratore. Si prega di rimuovere un Dashlet prima di aggiungerne di nuovi.',
    'LBL_ADDING_DASHLET' => 'Aggiunta della Dashlet di SuiteCRM in corso...',
    'LBL_ADDED_DASHLET' => 'Dashlet di SuiteCRM Aggiunta',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Sei sicuro di voler eliminare la Dashlet di SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Eliminazione Dashlet di SuiteCRM in corso...',
    'LBL_REMOVED_DASHLET' => 'Dashlet di SuiteCRM eliminata',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Caricamento Pagina, attendere...',

    'LBL_RELOAD_PAGE' => 'Si prega di <a href="javascript: window.location.reload()">ricaricare la finestra</a> per usare questa Dashlet.',
    'LBL_ADD_DASHLETS' => 'Aggiungi Dashlet di SuiteCRM',
    'LBL_CLOSE_DASHLETS' => 'Chiudi',
    'LBL_OPTIONS' => 'Opzioni',
    'LBL_1_COLUMN' => '1 Colonna',
    'LBL_2_COLUMN' => '2 Colonne',
    'LBL_3_COLUMN' => '3 Colonne',
    'LBL_PAGE_NAME' => 'Titolo Pagina',

    'LBL_SEARCH_RESULTS' => 'Risultato Ricerca',
    'LBL_SEARCH_MODULES' => 'Moduli',
    'LBL_SEARCH_TOOLS' => 'Servizi',
    'LBL_SEARCH_HELP_TITLE' => 'Lavorando con Multiselects e Ricerche salvate',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Nessuna immagine',

    'LBL_MODULE' => 'Modulo',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copia indirizzo da sinistra:',
    'LBL_SAVE_AND_CONTINUE' => 'Salva e continua',

    'LBL_SEARCH_HELP_TEXT' => 'multiselect controlli di <p><br /><strong></strong></p><ul><li>fare clic su valori per selezionare un attributo.</li><li>Ctrl-clic&nbsp;al&nbsp;selezionare multiple. Gli utenti Mac utilizzano CMD-click.</li><li>per selezionare tutti i valori tra due attributi,&nbsp; fare clic su primo valore&nbsp;e poi Maiusc-clic ultimo valore.</li></ul><p><strong>avanzata ricerca & opzioni di Layout</strong><br><br>utilizzando il <b>Saved Cerca & opzione</b> di Layout, è possibile salvare un insieme di parametri di ricerca e/o un layout di visualizzazione elenco personalizzato al fine di ottenere rapidamente la in futuro i risultati di ricerca desiderati. È possibile salvare un numero illimitato di ricerche personalizzate e layout. Tutti salvati ricerche vengono visualizzati per nome nell\'elenco ricerche salvate, con l\'ultimo caricato ricerca salvata che appaiono nella parte superiore dell\'elenco.<br><br>per personalizzare il layout di visualizzazione elenco, utilizzare le caselle di nascondere e visualizzare colonne per selezionare i campi da visualizzare nei risultati della ricerca. Ad esempio, è possibile visualizzare o nascondere i dettagli quali il nome del record e utente assegnato, e team assegnati nella ricerca risultati. Per aggiungere una colonna alla visualizzazione elenco, selezionare il campo dall\'elenco Nascondi colonne e utilizzare la freccia a sinistra per spostarlo nell\'elenco di colonne visualizzate. Per rimuovere una colonna dalla visualizzazione elenco, selezionarlo dall\'elenco colonne visualizzate e usare la freccia destra per spostarlo nell\'elenco Nascondi colonne.<br><br>se si salvano le impostazioni di layout, sarà in grado di caricare in qualsiasi momento per visualizzare i risultati della ricerca nel layout personalizzato.<br>,<br>, per salvare e aggiornare una ricerca e/o layout:<ol><li>immettere un nome per i risultati della ricerca nella <b>Salva questa ricerca come</b> campo e fare clic su <b>Risparmia</b>. Il nome verrà visualizzato nell\'elenco accanto al pulsante Clear</b> <b>ricerche salvate.</li><li>per visualizzare una ricerca salvata, selezionarlo dall\'elenco di ricerche salvate. Risultati della ricerca vengono visualizzati nella vista elenco.</li><li>per aggiornare le proprietà di una ricerca salvata, selezionare la ricerca salvata dall\'elenco, immettere i nuovi criteri di ricerca e/o layout opzioni nella zona di ricerca avanzata, scegliere <b>update</b> accanto a <b>modificare ricerca corrente</b>.</li><li>per eliminare una ricerca salvata, selezionarlo nell\'elenco ricerche salvate, fare clic su Elimina di <b></b> accanto a <b>modifica corrente ricerca</b>e quindi fare clic su <b>OK</b> per confermare l\'eliminazione. Suggerimenti</li></ol><p><strong></strong><br><br>utilizzando la % come un operatore jolly si può rendere la vostra ricerca più ampia. Ad esempio, invece di solo cercando risultati uguali "mele" è possibile modificare la tua ricerca per "Mele %", che sarebbe partita tutti i risultati che iniziano con la parola mele ma potrebbero contenere anche altri personaggi.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Errore: Raggiunto il limite di Query di $limit record per modulo $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Esclusione Notifica Errore.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Errore: non è possibile creare un monitor in quanto il file dei metadati è vuoto o non esiste.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Errore: non c´è nessun monitor configurato per il nome richiesto',
    'ERR_UNDEFINED_METRIC' => 'Errore: impossibile impostare il valore per il parametro indefinito',
    'ERR_STORE_FILE_MISSING' => 'Errore: impossibile trovare il file con le configurazioni salvate',

    'LBL_MONITOR_ID' => 'Id Monitor',
    'LBL_USER_ID' => 'Id Utente',
    'LBL_MODULE_NAME' => 'Nome modulo',
    'LBL_ITEM_ID' => 'Id Elemento',
    'LBL_ITEM_SUMMARY' => 'Sommario Elementi',
    'LBL_ACTION' => 'Azione',
    'LBL_SESSION_ID' => 'Id Sessione',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack è stato creato per ID utente {0}',
    'LBL_VISIBLE' => 'Record Visibili',
    'LBL_DATE_LAST_ACTION' => 'Data Ultima Azione',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'non è prima',
    'MSG_IS_MORE_THAN' => 'è più di',
    'MSG_SHOULD_BE' => 'dovrebbe essere',
    'MSG_OR_GREATER' => 'o maggiore',

    'LBL_LIST' => 'Elenco',
    'LBL_CREATE_BUG' => 'Nuovo Bug',

    'LBL_OBJECT_IMAGE' => 'immagine oggetto',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Seleziona Data',

    'LBL_VALIDATE_RANGE' => 'non è all´interno di un valido intervallo',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Si prega di selezionare un intervallo di inizio e uno di fine',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Si prega di selezionare un valore di inizio e uno di fine per l\'intervallo',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tutto',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Il numero di elementi dell\'array passati non corrispondono al numero di elementi dell\'array del risultato.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Errore: Manca la voce di mapping per il modulo.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Errore: impossibile recuperare i dati per {0} Connector. Il servizio potrebbe essere attualmente inaccessibile o le impostazioni di configurazione potrebbero non essere valide. Messaggio di errore del connettore: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Per una prestazione ottimale dell´utilizzo di IIS/FastCGI sapi, imposta fastcgi.logging a 0 nel file php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nome',
    'LBL_COLLECTION_PRIMARY' => 'Primario',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Campo obbligatorio vuoto',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assegnato a',
    'LBL_DESCRIPTION' => 'Descrizione',

    'LBL_YESTERDAY' => 'Ieri',
    'LBL_TODAY' => 'oggi',
    'LBL_TOMORROW' => 'domani',
    'LBL_NEXT_WEEK' => 'la prossima settimana',
    'LBL_NEXT_MONDAY' => 'Lunedì prossimo',
    'LBL_NEXT_FRIDAY' => 'Venerdì prossimo',
    'LBL_TWO_WEEKS' => 'Due settimane',
    'LBL_NEXT_MONTH' => 'il prossimo mese',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'Il primo giorno del mese prossimo',
    'LBL_THREE_MONTHS' => 'Tre mesi',
    'LBL_SIXMONTHS' => 'Sei mesi',
    'LBL_NEXT_YEAR' => 'Anno prossimo',

    //Datetimecombo fields
    'LBL_HOURS' => 'Ore',
    'LBL_MINUTES' => 'Minuti',
    'LBL_MERIDIEM' => 'Meridiano',
    'LBL_DATE' => 'Data',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Aggiornamento automatico',

    'LBL_DURATION_DAY' => 'giorno',
    'LBL_DURATION_HOUR' => 'ora',
    'LBL_DURATION_MINUTE' => 'minuto',
    'LBL_DURATION_DAYS' => 'giorni',
    'LBL_DURATION_HOURS' => 'Ore Durata',
    'LBL_DURATION_MINUTES' => 'Minuti Durata',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Scegli il Mese',
    'LBL_ENTER_YEAR' => 'Inserisci Anno',
    'LBL_ENTER_VALID_YEAR' => 'Si prega di inserire un anno valido',

    //File write error label
    'ERR_FILE_WRITE' => 'Errore: impossibile scrivere il file {0}. Si prega di controllare i permessi di sistema e del web server.',
    'ERR_FILE_NOT_FOUND' => 'Errore: impossibile caricare il file {0}. Si prega di controllare i permessi di sistema e del web server.',

    'LBL_AND' => 'E',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File su fonte esterna',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sicurezza',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"Questo è un file di importazione di esempio che fornisce un esempio dei contenuti previsti di un file pronto per l\'importazione."
"Il file è un file .csv delimitato da virgole, che usa virgolette come qualificatore di campo."

"La riga di intestazione è la riga più in alto nel file e contiene le etichette dei campi come le vedresti nell\'applicazione."
"Queste etichette sono utilizzate per mappare i dati nel file nei campi dell\'applicazione."

"Note: i nomi dei database possono essere utilizzati anche nella riga di intestazione, utile quando si utilizza phpMyAdmin o un altro strumento di database per fornire un elenco esportato di dati da importare."
"L\'ordine delle colonne non è critico in quanto il processo di importazione corrisponde ai dati nei campi appropriati in base alla riga di intestazione."


"Per utilizzare questo file come modello, fai quanto segue:"
"1. Rimuovi le righe di esempio dei dati"
"2. Rimuovi il testo di aiuto che stai leggendo in questo momento"
"3. Inserisci i tuoi dati nelle righe e colonne appropriate"
"4. Salva il file in una posizione nota sul tuo sistema"
"5. Fai clic sull\'opzione Importa dal menu Azioni nell\'applicazione e scegli il file da caricare"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Nessuna Notifica Recente',
    'LBL_ALT_SORT_DESC' => 'Ordine decrescente',
    'LBL_ALT_SORT_ASC' => 'Ordine Crescente',
    'LBL_ALT_SORT' => 'Ordina per',
    'LBL_ALT_SHOW_OPTIONS' => 'Mostra Opzioni',
    'LBL_ALT_HIDE_OPTIONS' => 'Nascondi Opzioni',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Sposta le voci selezionate nell´elenco di sinistra',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Sposta le voci selezionate nell´elenco di destra',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Sposta le voci selezionate nell´ordine di visualizzazione verso l´alto',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Sposta le voci selezionate nell´ordine di visualizzazione verso il basso',
    'LBL_ALT_INFO' => 'Informazioni',
    'MSG_DUPLICATE' => 'Il {0} record che stai per creare potrebbe essere un duplicato di un {0} record che già esiste. {1} record che contengono nomi simili sono elencati di seguito..<br>Clicca Crea {1} per continuare con la creazione di questo nuovo record {0}, oppure seleziona un record esistente {0} tra quelli elencati qui sotto.',
    'MSG_SHOW_DUPLICATES' => 'Il {0} record che stai per creare potrebbe essere un duplicato di un {0} record che già esiste. {1} record che contengono nomi simili sono elencati di seguito. Clicca Salva per continuare con la creazione di questo nuovo record {0},oppure clicca Annulla per ritornare al modulo senza averlo creato {0}.',
    'LBL_EMAIL_TITLE' => 'Indirizzo Email',
    'LBL_EMAIL_OPT_TITLE' => 'Indirizzi email opted out',
    'LBL_EMAIL_INV_TITLE' => 'Indirizzo email non valido',
    'LBL_EMAIL_PRIM_TITLE' => 'Imposta indirizzo come predefenito',
    'LBL_SELECT_ALL_TITLE' => 'Seleziona tutto',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Seleziona questa riga',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERRORE: si è verificato un errore durante il caricamento. Codice Errore: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERRORE: si è verificato un errore durante il caricamento. Codice Errore: {0} - {1}. La dimensione massima di upload è {2}',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERRORE: si è verificato un errore durante il caricamento, si prega di contattare l´amministratore del sistema per un aiuto.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Dimensione Upload ({0} bytes) ha superato la massima consentita: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'Si è verificato un errore. Si prega di ricaricare la pagina e riprovare.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'Modifica',
    'LBL_EDIT_BUTTON_TITLE' => 'Modifica',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Duplica',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Duplica',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'Elimina',
    'LBL_DELETE_BUTTON_TITLE' => 'Elimina',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Azione',
    'LBL_SAVE_BUTTON_KEY' => 'S',
    'LBL_SAVE_BUTTON_LABEL' => 'Salva',
    'LBL_SAVE_BUTTON_TITLE' => 'Salva',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annulla',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annulla',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'il connettore array in {0} è stato definito non correttamente o è vuoto e non può essere usato.',
    'ERR_SUHOSIN' => 'Il flusso di upload viene bloccato da Suhosin, si prega di aggiungere &quot;upload&quot; a suhosin.executor.include.whitelist (per maggiori informazioni vedi suitecrm.log)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Risposta imprevista da parte del server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Preventivo',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prezzo di Vendita',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manualmente',
        '5' => 'Ogni 5 minuti',
        '15' => 'Ogni 15 minuti',
        '30' => 'Ogni 30 minuti',
        '60' => 'Ogni ora',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Un promemoria è vuoto o non corretto.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Non è stato impostato almeno un promemoria via Popup o Email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Non sono stati specificati gli invitati per il promemoria.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Promemoria non comprende tutti gli invitati, si desidera rimuovere il promemoria?',
    'LBL_DELETE_REMINDER' => 'Eliminare il promemoria',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Scegli le colonne',
    'LBL_COLUMN_CHOOSER' => 'Selezione colonne',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Salva i cambiamenti',
    'LBL_DISPLAYED' => 'Visualizzati',
    'LBL_HIDDEN' => 'Nascosto',
    'ERR_EMPTY_COLUMNS_LIST' => 'È richiesto almeno un elemento',

    'LBL_FILTER_HEADER_TITLE' => 'Filtro',

    'LBL_CATEGORY' => 'Categoria',
    'LBL_LIST_CATEGORY' => 'Categoria',
    'ERR_FACTOR_TPL_INVALID' => 'Il Messaggio di fattore di autenticazione non è valido, si prega di contattare l\'amministratore.',
    'LBL_SUBTHEMES' => 'Stile',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Mattino presto',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Giorno',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Crepuscolo',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Notte',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Mezzogiorno',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Scarta la bozza',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Questa operazione cancellerà la mail, vuoi continuare?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Esci dalla finestra di composizione',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'Abbandonando la finestra di composizione, tutte le informazioni inserite andranno perse, vuoi continuare?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Applicare un modello Email',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Questa operazione sovrascriverà il corpo dell\'email, vuoi continuare?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Opt-In Confermato',
    'LBL_OPT_IN_TITLE' => 'Iscrizione',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Data Opt In Confermata',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Data Opt In Confermata',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Data fallimento conferma Email Opt In',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Conferma Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Il Modello Email di Opt In non è stato configurato. Per Favore configurarlo nelle Impostazioni Email.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'La verifica Opt In richiede che l\'Email sia in relazione con Aziende/Contatti/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Gruppo Non Ereditabile',
    'LBL_PRIMARY_GROUP' => "Gruppo Primario",

    // footer
    'LBL_SUITE_TOP' => 'Torna all´inizio',
    'LBL_SUITE_SUPERCHARGED' => 'Potenziato da SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Basato su SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Questo programma è software libero; potete ridistribuirlo e/o modificarlo secondo i termini della GNU Affero General Public License versione 3 così come pubblicata dalla Free Software Foundation, inclusa l\'autorizzazione aggiuntiva riportata nell\'intestazione del codice sorgente.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Azzera Password',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Invia conferma Email Opt In',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Email di conferma delle scelte (solo per conti/contatti/prospettive/opportunità)',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'L\'invio di una Email di conferma Opt In è disabilitato, abilitare le opzioni di Opt In nelle impostazioni Email o contattare un Amministratore.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'L\'invio di una Email di conferma Opt In non è possibile perchè il Contatto non ha un indirizzo Email primario impostato',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'L\'invio della Email di conferma Opt In è fallito',
    'LBL_CONFIRM_EMAIL_SENT' => 'Email di conferma Opt In inviata',
);

$app_list_strings['moduleList']['Library'] = 'Biblioteca';
$app_list_strings['moduleList']['EmailAddresses'] = 'Indirizzo Email';
$app_list_strings['project_priority_default'] = 'Media';
$app_list_strings['project_priority_options'] = array(
    'High' => 'Alta',
    'Medium' => 'Media',
    'Low' => 'Bassa',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consenso',
    'contract' => 'Contratto',
    'legal_obligation' => 'Obbligo legale',
    'protection_of_interest' => 'Protezione dell\' interesse',
    'public_interest' => 'Interesse pubblico',
    'legitimate_interest' => 'Interesse legittimo',
    'withdrawn' => 'Ritirato',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Sito web',
    'phone' => 'Telefono',
    'given_to_user' => 'Dato dall\' utente',
    'email' => 'Email',
    'third_party' => 'Terza Parte',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Documentazione di base';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'SAMOA AMERICANE',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARTIDE',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIGIAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHREIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BIELORUSSIA',
    'BELGIUM' => 'BELGIO',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET',
    'BRAZIL' => 'BRASILE',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITORIO BRITANNICO DELL\'ANTARTIDE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'TERRITORIO BRITANNICO DELL\'OCEANO INDIANO',
    'BRITISH VIRGIN ISLANDS' => 'ISOLE VERGINI BRITANNICHE',
    'BRITISH WEST INDIES' => 'INDIE OCCIDENTALI BRITANNICHE',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBOGIA',
    'CAMEROON' => 'CAMERUN',
    'CANADA' => 'Canada',
    'CANAL ZONE' => 'ZONA DEL CANALE',
    'CANARY ISLAND' => 'ISOLE CANARIE',
    'CAPE VERDI ISLANDS' => 'CAPO VERDE',
    'CAYMAN ISLANDS' => 'ISOLE CAYMAN',
    'CHAD' => 'CIAD',
    'CHANNEL ISLAND UK' => 'ISOLE DELLA MANICA',
    'CHILE' => 'Cile',
    'CHINA' => 'CINA',
    'CHRISTMAS ISLAND' => 'ISOLA DEL NATALE',
    'COCOS (KEELING) ISLAND' => 'ISOLE COCOS (KEELING)',
    'COLOMBIA' => 'Colombia',
    'COMORO ISLANDS' => 'ISOLE COMORE',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'ISOLE COOK',
    'COSTA RICA' => 'Costa Rica',
    'CROATIA' => 'Croazia',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CIPRO',
    'CZECH REPUBLIC' => 'Repubblica Ceca',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'Danimarca',
    'DJIBOUTI' => 'GIBUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'Repubblica Dominicana',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'Ecuador',
    'EGYPT' => 'Egitto',
    'EL SALVADOR' => 'El Salvador',
    'EQUATORIAL GUINEA' => 'GUINEA EQUATORIALE',
    'ESTONIA' => 'Estonia',
    'ETHIOPIA' => 'ETIOPIA',
    'FAEROE ISLANDS' => 'ISOLE FAEROE',
    'FALKLAND ISLANDS' => 'ISOLE FALKLAND',
    'FIJI' => 'FIJI',
    'FINLAND' => 'Finlandia',
    'FRANCE' => 'FRANCIA',
    'FRENCH GUIANA' => 'GUIANA FRANCESE',
    'FRENCH POLYNESIA' => 'POLINESIA FRANCESE',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANIA',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBILTERRA',
    'GREECE' => 'GRECIA',
    'GREENLAND' => 'GROENLANDIA',
    'GUADELOUPE' => 'GUADALUPA',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'UNGHERIA',
    'ICELAND' => 'ISLANDA',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'IRLANDA',
    'ISRAEL' => 'ISRAELE',
    'ITALY' => 'ITALIA',
    'IVORY COAST' => 'COSTA D\'AVORIO',
    'JAMAICA' => 'GIAMAICA',
    'JAPAN' => 'GIAPPONE',
    'JORDAN' => 'GIORDANIA',
    'KAZAKHSTAN' => 'KAZAKISTAN',
    'KENYA' => 'KENIA',
    'KOREA' => 'COREA',
    'KOREA, SOUTH' => 'COREA DEL SUD',
    'KUWAIT' => 'HUWAIT',
    'KYRGYZSTAN' => 'KIRGHIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETTONIA',
    'LEBANON' => 'LIBANO',
    'LEEWARD ISLANDS' => 'ISOLE SOPRAVENTO SETTENTRIONALI',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBIA',
    'LIECHTENSTEIN' => 'Liechtenstein',
    'LITHUANIA' => 'Lituania',
    'LUXEMBOURG' => 'Lussemburgo',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'Malaysia',
    'MALDIVES' => 'MALDIVE',
    'MALI' => 'MALI',
    'MALTA' => 'Malta',
    'MARTINIQUE' => 'MARTINICA',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'Messico',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'Mongolia',
    'MOROCCO' => 'Marocco',
    'MOZAMBIQUE' => 'MOZAMBICO',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'Nepal',
    'NETHERLANDS' => 'Paesi Bassi',
    'NETHERLANDS ANTILLES' => 'ANTILLE OLANDESI',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'PAESI BASSI ANTILLE ZONA NEUTRALE',
    'NEW CALADONIA' => 'NUOVO CALADONIA',
    'NEW HEBRIDES' => 'NUOVE EBRIDI',
    'NEW ZEALAND' => 'Nuova Zelanda',
    'NICARAGUA' => 'Nicaragua',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'ISOLA NORFOLK',
    'NORWAY' => 'Norvegia',
    'OMAN' => 'Oman',
    'OTHER' => 'ALTRO',
    'PACIFIC ISLAND' => 'ISOLE DEL PACIFICO',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'Panama',
    'PAPUA NEW GUINEA' => 'PAPUA NUOVA GUINEA',
    'PARAGUAY' => 'Paraguay',
    'PERU' => 'Perù',
    'PHILIPPINES' => 'FILIPPINE',
    'POLAND' => 'Polonia',
    'PORTUGAL' => 'Portogallo',
    'PORTUGUESE TIMOR' => 'TIMOR EST',
    'PUERTO RICO' => 'Portorico',
    'QATAR' => 'Qatar',
    'REPUBLIC OF BELARUS' => 'REPUBBLICA DI BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBBLICA DEL SUD AFRICA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'Romania',
    'RUSSIA' => 'Russia',
    'RWANDA' => 'RUANDA',
    'RYUKYU ISLANDS' => 'ISOLE RYUKYU',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'Arabia Saudita',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'Serbia',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'Singapore',
    'SLOVAKIA' => 'Slovacchia',
    'SLOVENIA' => 'Slovenia',
    'SOMALILIAND' => 'SOMALIA',
    'SOUTH AFRICA' => 'Sud Africa',
    'SOUTH YEMEN' => 'YEMEN DEL SUD',
    'SPAIN' => 'Spagna',
    'SPANISH SAHARA' => 'SAHARA SPAGNOLO',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAN KITTS E NEVIS',
    'ST. LUCIA' => 'SANTA LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'Svezia',
    'SWITZERLAND' => 'Svizzera',
    'SYRIA' => 'Siria',
    'TAIWAN' => 'Taiwan',
    'TAJIKISTAN' => 'TAGIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'Thailandia',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'Tunisia',
    'TURKEY' => 'Turchia',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'Ucraina',
    'UNITED ARAB EMIRATES' => 'EMIRATI ARABI UNITI',
    'UNITED KINGDOM' => 'Regno Unito',
    'URUGUAY' => 'Uruguay',
    'US PACIFIC ISLAND' => 'ISOLA DEL PACIFICO DEGLI STATI UNITI',
    'US VIRGIN ISLANDS' => 'ISOLE VERGINI AMERICANE',
    'USA' => 'STATI UNITI D\'AMERICA',
    'UZBEKISTAN' => 'Uzbekistan',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'CITTÀ DEL VATICANO',
    'VENEZUELA' => 'Venezuela',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'ISOLA DI WAKE',
    'WEST INDIES' => 'INDIE OCCIDENTALI',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTALE',
    'YEMEN' => 'Yemen',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'Zimbabwe',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan e Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (cirillico MS)',
    'CP1252' => 'CP1252 (MS Western European &amp;amp;amp;amp;amp; US)',
    'EUC-CN' => 'EUC-CN (GB2312 cinese semplificato)',
    'EUC-JP' => 'EUC-JP (Unix giapponese)',
    'EUC-KR' => 'EUC-KR (coreano)',
    'EUC-TW' => 'EUC-TW (Taiwan)',
    'ISO-2022-JP' => 'ISO-2022-JP (giapponese)',
    'ISO-2022-KR' => 'ISO-2022-KR (coreano)',
    'ISO-8859-1' => 'ISO-8859-1 (Europa occidentale e Stati Uniti)',
    'ISO-8859-2' => 'ISO-8859-2 (Europa centrale e orientale)',
    'ISO-8859-3' => 'ISO-8859-3 (Latino 3)',
    'ISO-8859-4' => 'ISO-8859-3 (Latino 4)',
    'ISO-8859-5' => 'ISO-8859-5 (cirillico)',
    'ISO-8859-6' => 'ISO-8859-6 (arabo)',
    'ISO-8859-7' => 'ISO-8859-7 (Greco)',
    'ISO-8859-8' => 'ISO-8859-8 (ebraico)',
    'ISO-8859-9' => 'ISO-8859-9 (Latino 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latino 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latino 9)',
    'KOI8-R' => 'KOI8-R (cirillico russo)',
    'KOI8-U' => 'KOI8-U (cirillico ucraino)',
    'SJIS' => 'SJIS (MS giapponese)',
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
    'Atlantic/Cape_Verde' => 'Atlantic/Capo Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Oceano Indiano/ Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Gibuti',
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
    'Indian/Antananarivo' => 'Oceano Indiano/Antananarivo',
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
    'Indian/Mahe' => 'Indiano/Mahé',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'Africa/Tunisi',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indiano/Kerguelen',
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
    'Indian/Chagos' => 'Indiano/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Pechino',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macao',
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
    'Asia/Oral' => 'Asia/oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldive',
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
    'Asia/Damascus' => 'Asia/Damasco',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarcanda',
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
    'Indian/Christmas' => 'Indiano/natale',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marchesi',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacifico/Enderbury',
    'Pacific/Kiritimati' => 'Pacifico/Kiritimati',
    'Pacific/Saipan' => 'Pacifico/Saipan',
    'Pacific/Majuro' => 'Pacifico/Majuro',
    'Pacific/Kwajalein' => 'Pacifico/Kwajalein',
    'Pacific/Truk' => 'Pacifico/Truk',
    'Pacific/Pohnpei' => 'Pacifico/Pohnpei',
    'Pacific/Kosrae' => 'Pacifico/Kosrae',
    'Pacific/Nauru' => 'Pacifico/Nauru',
    'Pacific/Noumea' => 'Pacifico/Noumea',
    'Pacific/Auckland' => 'Pacifico/Auckland',
    'Pacific/Chatham' => 'Pacifico/Chatham',
    'Pacific/Niue' => 'Pacifico/Niue',
    'Pacific/Norfolk' => 'Pacifico/Norfolk',
    'Pacific/Palau' => 'Pacifico/Palau',
    'Pacific/Port_Moresby' => 'Pacifico/Port Moresby',
    'Pacific/Pitcairn' => 'Pacifico/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacifico/Pago Pago',
    'Pacific/Apia' => 'Pacifico/Apia',
    'Pacific/Guadalcanal' => 'Pacifico/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacifico/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifico/Tongatapu',
    'Pacific/Funafuti' => 'Pacifico/Funafuti',
    'Pacific/Johnston' => 'Pacifico/Johnston',
    'Pacific/Midway' => 'Pacifico/Midway',
    'Pacific/Wake' => 'Pacifico/Wake',
    'Pacific/Efate' => 'Pacifico/Efate',
    'Pacific/Wallis' => 'Pacifico/Wallis',
    'Europe/London' => 'Europa/Londra',
    'Europe/Dublin' => 'Europa/Dublino',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europa/Tirane',
    'Europe/Andorra' => 'Europa/Andorra',
    'Europe/Vienna' => 'Europa/Vienna',
    'Europe/Minsk' => 'Europa/Minsk',
    'Europe/Brussels' => 'Europa/Bruxelles',
    'Europe/Sofia' => 'Europa/Sofia',
    'Europe/Prague' => 'Europa/Praga',
    'Europe/Copenhagen' => 'Europa/Copenhagen',
    'Atlantic/Faeroe' => 'Oceano Atlantico/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europa/Tallinn',
    'Europe/Helsinki' => 'Europa/Helsinki',
    'Europe/Paris' => 'Europa/Parigi',
    'Europe/Berlin' => 'Europa/Berlin',
    'Europe/Gibraltar' => 'Europa/Gibilterra',
    'Europe/Athens' => 'Europa/Atene',
    'Europe/Budapest' => 'Europa/Budapest',
    'Atlantic/Reykjavik' => 'Oceano Atlantico/Reykjavik',
    'Europe/Rome' => 'Europa/Roma',
    'Europe/Riga' => 'Europa/Riga',
    'Europe/Vaduz' => 'Europa/Vaduz',
    'Europe/Vilnius' => 'Europa/Vilnius',
    'Europe/Luxembourg' => 'Europa/Lussemburgo',
    'Europe/Malta' => 'Europa/Malta',
    'Europe/Chisinau' => 'Europa/Chisinau',
    'Europe/Monaco' => 'Europa/Monaco',
    'Europe/Amsterdam' => 'Europa/Amsterdam',
    'Europe/Oslo' => 'Europa/Oslo',
    'Europe/Warsaw' => 'Europa/Varsavia',
    'Europe/Lisbon' => 'Europa/Lisbona',
    'Atlantic/Azores' => 'Oceano Atlantico/Azzorre',
    'Atlantic/Madeira' => 'Oceano Atlantico/Madeira',
    'Europe/Bucharest' => 'Europa/Bucarest',
    'Europe/Kaliningrad' => 'Europa/Kaliningrad',
    'Europe/Moscow' => 'Europa/Mosca',
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
    'Europe/Belgrade' => 'Europa/Belgrado',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantico/Canarie',
    'Europe/Stockholm' => 'Europa/Stockholm',
    'Europe/Zurich' => 'Europa/Zurigo',
    'Europe/Istanbul' => 'Europa/Istanbul',
    'Europe/Kiev' => 'Europa/Kiev',
    'Europe/Uzhgorod' => 'Europa/Uzhgorod',
    'Europe/Zaporozhye' => 'Europa/Zaporozhye',
    'Europe/Simferopol' => 'Europa/Simferopol',
    'America/New_York' => 'America / New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/Dakota del nord/centro',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America / Los Angeles',
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
    'America/Mexico_City' => 'America/Messico City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantico/Bermuda',
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
    'America/Jamaica' => 'America/Giamaica',
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
    'Pacific/Easter' => 'Pacific/Pasqua',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
    'Atlantic/South_Georgia' => 'Atlantico/South Georgia',
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
    'Google' => 'Google Docs',
    'Box' => 'Box.Net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contatti Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Richiesta',
    2 => 'Accesso',
    3 => 'Non valido',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagna',
    'email' => 'Email',
    'event' => 'Evento',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagna',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagna',
    'email' => 'Email',
    'event' => 'Evento',
    'system' => 'Sistema',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Documentazione di base';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categorie';
$app_list_strings['aok_status_list']['Draft'] = 'Bozza';
$app_list_strings['aok_status_list']['Expired'] = 'Scaduto';
$app_list_strings['aok_status_list']['In_Review'] = 'In Revisione';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privato';
$app_list_strings['aok_status_list']['published_public'] = 'Pubblico';

$app_list_strings['moduleList']['FP_events'] = 'Eventi';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Posizioni';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invitato';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Non Invitato';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Partecipato';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Non Partecipato';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accettato';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Rifiutato';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Nessuna Risposta';

$app_strings['LBL_STATUS_EVENT'] = 'Stato Invito';
$app_strings['LBL_ACCEPT_STATUS'] = 'Accetta Stato';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Seleziona la pagina';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Seleziona Tutto';
$app_strings['LBL_LISTVIEW_NONE'] = 'Deseleziona Tutto';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Indice Evento';
$app_list_strings['moduleList']['AOD_Index'] = 'Indice';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Eventi Reclami';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Aggiornamenti Reclami';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Rispondere sopra questa linea ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Apri';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Apri',
        'Closed' => 'Chiuso',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'Nuovo',
        'Open_Assigned' => 'Assegnato',
        'Closed_Closed' => 'Chiuso',
        'Open_Pending Input' => 'In attesa di input',
        'Closed_Rejected' => 'Rifiutato',
        'Closed_Duplicate' => 'Duplica',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Utente Singolo',
        'Account' => 'Azienda',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Predefinito di sistema',
    'singleUser' => 'Utente Singolo',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Meno Occupato',
    'random' => 'Casuale',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Report';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Condizioni';
$app_list_strings['moduleList']['AOR_Charts'] = 'Report Tabelle';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Campi';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Reports Schedulati';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Uguale A';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Diverso Da';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Maggiore di';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Meno di';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Maggiore O Uguale Di';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Minore O Uguale Di';
$app_list_strings['aor_operator_list']['Contains'] = 'Contiene';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Inizia con';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Termina Con';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'mm-gg-aa';
$app_list_strings['aor_format_options']['d-m-Y'] = 'gg-mm-aaaa';
$app_list_strings['aor_format_options']['Y/m/d'] = 'aaaa/mm/gg';
$app_list_strings['aor_format_options']['m/d/Y'] = 'mm/gg/aaaa';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'aaaa.mm.gg';
$app_list_strings['aor_format_options']['m.d.Y'] = 'mm.gg.aaaa';
$app_list_strings['aor_format_options']['d.m.Y'] = 'gg.mm.aaaa';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'E';
$app_list_strings['aor_condition_operator_list']['OR'] = 'o';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valore';
$app_list_strings['aor_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aor_condition_type_list']['Date'] = 'Data';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Uno Di';
$app_list_strings['aor_condition_type_list']['Period'] = 'Arco Temporale';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utente Attuale';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minuti';
$app_list_strings['aor_date_type_list']['hour'] = 'Ore';
$app_list_strings['aor_date_type_list']['day'] = 'Giorni';
$app_list_strings['aor_date_type_list']['week'] = 'Settimane';
$app_list_strings['aor_date_type_list']['month'] = 'Mesi';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Ore Lavorative';
$app_list_strings['aor_date_options']['now'] = 'Ora';
$app_list_strings['aor_date_options']['field'] = 'Questo Campo';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Crescente';
$app_list_strings['aor_sort_operator']['DESC'] = 'Decrescente';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Conta';
$app_list_strings['aor_function_list']['MIN'] = 'Minimo';
$app_list_strings['aor_function_list']['MAX'] = 'Massimo';
$app_list_strings['aor_function_list']['SUM'] = 'Somma';
$app_list_strings['aor_function_list']['AVG'] = 'Media';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Conta';
$app_list_strings['aor_total_options']['SUM'] = 'Somma';
$app_list_strings['aor_total_options']['AVG'] = 'Media';
$app_list_strings['aor_chart_types']['bar'] = 'Grafico a Barre';
$app_list_strings['aor_chart_types']['line'] = 'Grafico a Linee';
$app_list_strings['aor_chart_types']['pie'] = 'Grafico a Torta';
$app_list_strings['aor_chart_types']['radar'] = 'Grafico Radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Grafico a Barre Impilate';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grafico a Barre Raggruppate';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensile';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Settimanale';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Giornaliero';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Attivo';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Inattivo';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utente';
$app_list_strings['aor_email_type_list']['Users'] = 'Utenti';
$app_list_strings['aor_assign_options']['all'] = 'Tutti Gli Utenti';
$app_list_strings['aor_assign_options']['role'] = 'Tutti Gli Utenti del Ruolo';
$app_list_strings['aor_assign_options']['security_group'] = 'Tutti Gli Utenti nel Gruppo di Sicurezza';
$app_list_strings['date_time_period_list']['today'] = 'Oggi';
$app_list_strings['date_time_period_list']['yesterday'] = 'Ieri';
$app_list_strings['date_time_period_list']['this_week'] = 'Settimana Corrente';
$app_list_strings['date_time_period_list']['last_week'] = 'Settimana Precedente';
$app_list_strings['date_time_period_list']['last_month'] = 'Ultimo mese';
$app_list_strings['date_time_period_list']['this_month'] = 'Questo Mese';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Trimestre Corrente';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Trimestre Precedente';
$app_list_strings['date_time_period_list']['this_year'] = 'Anno Corrente';
$app_list_strings['date_time_period_list']['last_year'] = 'Anno Precedente';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'il';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'il';
$app_strings['LBL_CRON_AT'] = 'alle';
$app_strings['LBL_CRON_RAW'] = 'Avanzate';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Ore';
$app_strings['LBL_CRON_DAY'] = 'Giorno';
$app_strings['LBL_CRON_MONTH'] = 'Mese';
$app_strings['LBL_CRON_DOW'] = 'Giorno della Settimana';
$app_strings['LBL_CRON_DAILY'] = 'Giornaliero';
$app_strings['LBL_CRON_WEEKLY'] = 'Settimanale';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensile';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contratti';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Fatture';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Modelli';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Prodotti - Categorie';
$app_list_strings['moduleList']['AOS_Products'] = 'Prodotti';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Listini';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Gruppi di Prodotti';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Preventivi';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Concorrente';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integratore';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investitore';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Stampa';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Cliente potenziale';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Rivneditore';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Altro';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Bozza';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'In trattitiva';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Consegnato';
$app_list_strings['quote_stage_dom']['On Hold'] = 'In Attesa';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confermato';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Chiuso - Accettato';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Chiuso - Perso';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Chiuso - Estinto';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Approvato';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Non Approvato';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Percentuale';
$app_list_strings['discount_list']['Amount'] = 'Importo';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analista';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Concorrente';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Cliente';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integratore';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investitore';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Stampa';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Cliente potenziale';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Rivneditore';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Altro';
$app_list_strings['invoice_status_dom']['Paid'] = 'Pagato';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Non pagato';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Cancellato';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Non Fatturato';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Fatturato';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Portatili';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktop';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Prodotto';
$app_list_strings['product_type_dom']['Service'] = 'Servizio';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Preventivi';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Fatture';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contratti';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Preventivi';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Fatture';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contratti';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Aziende';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contatti';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Lead';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Non Iniziato';
$app_list_strings['contract_status_list']['In Progress'] = 'In corso';
$app_list_strings['contract_status_list']['Signed'] = 'Approvato';
$app_list_strings['contract_type_list']['Type'] = 'Tipo';
$app_strings['LBL_PRINT_AS_PDF'] = 'Converti in PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Seleziona un modello';
$app_strings['LBL_NO_TEMPLATE'] = 'ERRORE\nNessun modello trovato.\nCrea un nuovo modello attraverso il modulo Modelli PDF';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flusso di lavoro';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Condizioni WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Processi di Revisione';
$app_list_strings['moduleList']['AOW_Actions'] = 'Azioni WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Attivo';
$app_list_strings['aow_status_list']['Inactive'] = 'Inattivo';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Uguale A';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Diverso Da';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Maggiore di';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Meno di';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Maggiore O Uguale Di';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Minore O Uguale Di';
$app_list_strings['aow_operator_list']['Contains'] = 'Contiene';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Inizia con';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Termina Con';
$app_list_strings['aow_operator_list']['is_null'] = 'E´ nullo';
$app_list_strings['aow_process_status_list']['Complete'] = 'Completo';
$app_list_strings['aow_process_status_list']['Running'] = 'In Esecuzione';
$app_list_strings['aow_process_status_list']['Pending'] = 'In Attesa';
$app_list_strings['aow_process_status_list']['Failed'] = 'Fallito';
$app_list_strings['aow_condition_operator_list']['And'] = 'E';
$app_list_strings['aow_condition_operator_list']['OR'] = 'o';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valore';
$app_list_strings['aow_condition_type_list']['Field'] = 'Campo';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Ogni Modifica';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Data';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Uno Di';
$app_list_strings['aow_action_type_list']['Value'] = 'Valore';
$app_list_strings['aow_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_action_type_list']['Date'] = 'Data';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Meno Occupato';
$app_list_strings['aow_action_type_list']['Random'] = 'Casuale';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valore';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Campo';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minuti';
$app_list_strings['aow_date_type_list']['hour'] = 'Ore';
$app_list_strings['aow_date_type_list']['day'] = 'Giorni';
$app_list_strings['aow_date_type_list']['week'] = 'Settimane';
$app_list_strings['aow_date_type_list']['month'] = 'Mesi';
$app_list_strings['aow_date_type_list']['year'] = 'Anni';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Ore Lavorative';
$app_list_strings['aow_date_options']['now'] = 'Ora';
$app_list_strings['aow_date_options']['today'] = 'Oggi';
$app_list_strings['aow_date_options']['field'] = 'Questo Campo';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'Tutti Gli Utenti';
$app_list_strings['aow_assign_options']['role'] = 'Tutti Gli Utenti del Ruolo';
$app_list_strings['aow_assign_options']['security_group'] = 'Tutti Gli Utenti nel Gruppo di Sicurezza';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Email';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Email collegata';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Campo Collegato';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utente';
$app_list_strings['aow_email_type_list']['Users'] = 'Utenti';
$app_list_strings['aow_email_to_list']['to'] = 'A';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Ccn';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tutti i Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nuovo Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Records Modificati';
$app_list_strings['aow_run_when_list']['Always'] = 'Sempre';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Solo Al Salvataggio';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Solo nello Schedulatore';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Progetti - modelli';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Templates Attività di Progetto';
$app_list_strings['relationship_type_list']['FS'] = 'Finire per partire';
$app_list_strings['relationship_type_list']['SS'] = 'Avvia per partire';
$app_list_strings['duration_unit_dom']['Days'] = 'Giorni';
$app_list_strings['duration_unit_dom']['Hours'] = 'Ore';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Visualizza Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Mostra Dettagli';
$app_strings['LBL_CREATE_PROJECT'] = 'Nuovo Progetto';

//gmaps
$app_strings['LBL_MAP'] = 'Mappa';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitudine';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitudine';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Stato';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Indirizzo';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Mappe';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Mappe - markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Mappe - aree';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Mappe - indirizzo Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miglia';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometri';

$app_list_strings['map_module_type_list']['Accounts'] = 'Aziende';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contatti';
$app_list_strings['map_module_type_list']['Cases'] = 'Reclami';
$app_list_strings['map_module_type_list']['Leads'] = 'Lead';
$app_list_strings['map_module_type_list']['Meetings'] = 'Appuntamenti';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Opportunità';
$app_list_strings['map_module_type_list']['Project'] = 'Progetti';
$app_list_strings['map_module_type_list']['Prospects'] = 'Obiettivi';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Azienda';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contatto';
$app_list_strings['map_relate_type_list']['Cases'] = 'Reclamo';
$app_list_strings['map_relate_type_list']['Leads'] = 'Leads';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Appuntamento';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Opportunità';
$app_list_strings['map_relate_type_list']['Project'] = 'Progetto';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Obiettivo';

$app_list_strings['marker_image_list']['accident'] = 'Incidente';
$app_list_strings['marker_image_list']['administration'] = 'Amministrazione';
$app_list_strings['marker_image_list']['agriculture'] = 'Agricoltura';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Piccolo Aeroveicolo';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Turismo Aereo';
$app_list_strings['marker_image_list']['airport'] = 'Aeroporto';
$app_list_strings['marker_image_list']['amphitheater'] = 'Anfiteatro';
$app_list_strings['marker_image_list']['apartment'] = 'Appartamento';
$app_list_strings['marker_image_list']['aquarium'] = 'Acquario';
$app_list_strings['marker_image_list']['arch'] = 'Arco';
$app_list_strings['marker_image_list']['atm'] = 'Atm.';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banca';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banca Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banca Sterlina';
$app_list_strings['marker_image_list']['bar'] = 'Barra';
$app_list_strings['marker_image_list']['beach'] = 'Spiaggia';
$app_list_strings['marker_image_list']['beautiful'] = 'Bello';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Parcheggio Bici';
$app_list_strings['marker_image_list']['big_city'] = 'Grande Città';
$app_list_strings['marker_image_list']['bridge'] = 'Ponte';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Ponte Moderno';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Funivia';
$app_list_strings['marker_image_list']['car'] = 'Auto';
$app_list_strings['marker_image_list']['car_rental'] = 'Autonoleggio';
$app_list_strings['marker_image_list']['carrepair'] = 'Autofficina';
$app_list_strings['marker_image_list']['castle'] = 'Castello';
$app_list_strings['marker_image_list']['cathedral'] = 'Cattedrale';
$app_list_strings['marker_image_list']['chapel'] = 'Cappella';
$app_list_strings['marker_image_list']['church'] = 'Chiesa';
$app_list_strings['marker_image_list']['city_square'] = 'Piazza Cittadina';
$app_list_strings['marker_image_list']['cluster'] = 'Gruppo';
$app_list_strings['marker_image_list']['cluster_2'] = 'Gruppo 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Gruppo 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Gruppo 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Gruppo 5';
$app_list_strings['marker_image_list']['coffee'] = 'Caffè';
$app_list_strings['marker_image_list']['community_centre'] = 'Centro Comunitario';
$app_list_strings['marker_image_list']['company'] = 'Azienda';
$app_list_strings['marker_image_list']['conference'] = 'Conferenza';
$app_list_strings['marker_image_list']['construction'] = 'Costruzioni';
$app_list_strings['marker_image_list']['convenience'] = 'Servizi';
$app_list_strings['marker_image_list']['court'] = 'Tribunale';
$app_list_strings['marker_image_list']['cruise'] = 'Crociera';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Cambiavalute';
$app_list_strings['marker_image_list']['customs'] = 'Dogana';
$app_list_strings['marker_image_list']['cycling'] = 'Ciclismo';
$app_list_strings['marker_image_list']['dam'] = 'Diga';
$app_list_strings['marker_image_list']['dentist'] = 'Dentista';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Grandi Magazzini';
$app_list_strings['marker_image_list']['disability'] = 'Disabilità';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parcheggio disabili';
$app_list_strings['marker_image_list']['doctor'] = 'Medico';
$app_list_strings['marker_image_list']['dog_leash'] = 'Cani al guinzaglio';
$app_list_strings['marker_image_list']['down'] = 'Avanti';
$app_list_strings['marker_image_list']['down_left'] = 'Avanti a Sinistra';
$app_list_strings['marker_image_list']['down_right'] = 'Avanti a Destra';
$app_list_strings['marker_image_list']['down_then_left'] = 'Avanti, poi a Sinistra';
$app_list_strings['marker_image_list']['down_then_right'] = 'Avanti, poi a Destra';
$app_list_strings['marker_image_list']['drugs'] = 'Drogheria';
$app_list_strings['marker_image_list']['elevator'] = 'Ascensore';
$app_list_strings['marker_image_list']['embassy'] = 'Ambasciata';
$app_list_strings['marker_image_list']['expert'] = 'Esperto';
$app_list_strings['marker_image_list']['factory'] = 'Fabbrica';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Caduta Massi';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fiordo';
$app_list_strings['marker_image_list']['forest'] = 'Foresta';
$app_list_strings['marker_image_list']['fountain'] = 'Fontana';
$app_list_strings['marker_image_list']['friday'] = 'Venerdì';
$app_list_strings['marker_image_list']['garden'] = 'Giardino';
$app_list_strings['marker_image_list']['gas_station'] = 'Stazione di Rifornimento';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Oggetti da Regalo';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Frutta e Verdura';
$app_list_strings['marker_image_list']['hairsalon'] = 'Parrucchiere';
$app_list_strings['marker_image_list']['helicopter'] = 'Elicottero';
$app_list_strings['marker_image_list']['highway'] = 'Autostrada';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Quartiere Storico';
$app_list_strings['marker_image_list']['home'] = 'Pagina iniziale';
$app_list_strings['marker_image_list']['hospital'] = 'Ospedale';
$app_list_strings['marker_image_list']['hostel'] = 'Ostello';
$app_list_strings['marker_image_list']['hotel'] = 'Albergo';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Albergo 1 stella';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Albergo 2 stelle';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Albergo 3 stelle';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Albergo 4 stelle';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Albergo 5 stelle';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Palazzo di Giustizia';
$app_list_strings['marker_image_list']['lake'] = 'Lago';
$app_list_strings['marker_image_list']['laundromat'] = 'Lavanderia Automatica';
$app_list_strings['marker_image_list']['left'] = 'Sinistra';
$app_list_strings['marker_image_list']['left_then_down'] = 'Sinistra, poi Avanti';
$app_list_strings['marker_image_list']['left_then_up'] = 'Sinistra, poi Su';
$app_list_strings['marker_image_list']['library'] = 'Biblioteca';
$app_list_strings['marker_image_list']['lighthouse'] = 'Faro';
$app_list_strings['marker_image_list']['liquor'] = 'Vini e Liquori';
$app_list_strings['marker_image_list']['lock'] = 'Chiusa';
$app_list_strings['marker_image_list']['main_road'] = 'Strada Principale';
$app_list_strings['marker_image_list']['massage'] = 'Massaggi';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Torre Fonia Mobile';
$app_list_strings['marker_image_list']['modern_tower'] = 'Torre moderna';
$app_list_strings['marker_image_list']['monastery'] = 'Monastero';
$app_list_strings['marker_image_list']['monday'] = 'Lunedì';
$app_list_strings['marker_image_list']['monument'] = 'Monumento';
$app_list_strings['marker_image_list']['mosque'] = 'Moschea';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motoveicolo';
$app_list_strings['marker_image_list']['museum'] = 'Museo';
$app_list_strings['marker_image_list']['music_live'] = 'Musica dal vivo';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Pompa petrolifera a cavalletto';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palazzo';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramica';
$app_list_strings['marker_image_list']['park'] = 'Parco';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parcheggio Scambiatore';
$app_list_strings['marker_image_list']['parking'] = 'Parcheggio';
$app_list_strings['marker_image_list']['photo'] = 'Foto';
$app_list_strings['marker_image_list']['picnic'] = 'Pic-nic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Luoghi non visitati';
$app_list_strings['marker_image_list']['places_visited'] = 'Luoghi visitati';
$app_list_strings['marker_image_list']['playground'] = 'Parco Giochi';
$app_list_strings['marker_image_list']['police'] = 'Polizia';
$app_list_strings['marker_image_list']['port'] = 'Porto';
$app_list_strings['marker_image_list']['postal'] = 'Postale';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Traliccio elettrico';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrale Elettrica';
$app_list_strings['marker_image_list']['power_substation'] = 'Cabina di Trasformazione';
$app_list_strings['marker_image_list']['public_art'] = 'Arte Pubblica';
$app_list_strings['marker_image_list']['rain'] = 'Pioggia';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobiliare';
$app_list_strings['marker_image_list']['regroup'] = 'Raggruppa';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Ristorante';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Ristorante Africano';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Ristorante Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Ristorante Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Ristorante Cinese';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Ristorante di Pesce';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Ristorante Fish&Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Ristorante per Buongustai';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Ristorante Greco';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Ristorante Indiano';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Ristorante Italiano';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Ristorante Giapponese';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Ristorante Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Ristorante Coreano';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Ristorante Mediterraneo';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Ristorante Messicano';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Ristorante Romantico';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Ristorante Thailandese';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Ristorante Turco';
$app_list_strings['marker_image_list']['right'] = 'Destra';
$app_list_strings['marker_image_list']['right_then_down'] = 'Destra, poi Avanti';
$app_list_strings['marker_image_list']['right_then_up'] = 'Destra, poi Su';
$app_list_strings['marker_image_list']['saturday'] = 'Sabato';
$app_list_strings['marker_image_list']['school'] = 'Scuola';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centro Commerciale';
$app_list_strings['marker_image_list']['shore'] = 'Riva';
$app_list_strings['marker_image_list']['sight'] = 'Vista';
$app_list_strings['marker_image_list']['small_city'] = 'Piccola Città';
$app_list_strings['marker_image_list']['snow'] = 'Neve';
$app_list_strings['marker_image_list']['spaceport'] = 'Spazioporto';
$app_list_strings['marker_image_list']['speed_100'] = 'Velocità 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Velocità 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Velocità 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Velocità 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Velocità 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Velocità 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Velocità 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Velocità 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Velocità 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Velocità 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Velocità 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Velocità 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Dosso Artificiale';
$app_list_strings['marker_image_list']['stadium'] = 'Stadio';
$app_list_strings['marker_image_list']['statue'] = 'Statua';
$app_list_strings['marker_image_list']['steam_train'] = 'Treno a Vapore';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Semaforo';
$app_list_strings['marker_image_list']['subway'] = 'Metropolitana';
$app_list_strings['marker_image_list']['sun'] = 'Dom';
$app_list_strings['marker_image_list']['sunday'] = 'Domenica';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermercato';
$app_list_strings['marker_image_list']['synagogue'] = 'Sinagoga';
$app_list_strings['marker_image_list']['tapas'] = 'Aperitivi';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Corsia Taxi';
$app_list_strings['marker_image_list']['teahouse'] = 'Casa da Tè';
$app_list_strings['marker_image_list']['telephone'] = 'Telefono';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Tempio Indù';
$app_list_strings['marker_image_list']['terrace'] = 'Terrazza';
$app_list_strings['marker_image_list']['text'] = 'Testo';
$app_list_strings['marker_image_list']['theater'] = 'Teatro';
$app_list_strings['marker_image_list']['theme_park'] = 'Parco a Tema';
$app_list_strings['marker_image_list']['thursday'] = 'Giovedì';
$app_list_strings['marker_image_list']['toilets'] = 'Servizi Igienici';
$app_list_strings['marker_image_list']['toll_station'] = 'Pedaggio';
$app_list_strings['marker_image_list']['tower'] = 'Torre';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Telecamera Autovelox';
$app_list_strings['marker_image_list']['train'] = 'Treno';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Martedì';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Girare a Sinistra';
$app_list_strings['marker_image_list']['turn_right'] = 'Girare a Destra';
$app_list_strings['marker_image_list']['university'] = 'Università';
$app_list_strings['marker_image_list']['up'] = 'Su';
$app_list_strings['marker_image_list']['up_left'] = 'Su a Sinistra';
$app_list_strings['marker_image_list']['up_right'] = 'Su a Destra';
$app_list_strings['marker_image_list']['up_then_left'] = 'Su, poi a Sinistra';
$app_list_strings['marker_image_list']['up_then_right'] = 'Su, poi a Destra';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Acqua';
$app_list_strings['marker_image_list']['waterfall'] = 'Cascata';
$app_list_strings['marker_image_list']['watermill'] = 'Mulino ad Acqua';
$app_list_strings['marker_image_list']['waterpark'] = 'Acquapark';
$app_list_strings['marker_image_list']['watertower'] = 'Serbatoio idrico a Torre';
$app_list_strings['marker_image_list']['wednesday'] = 'Mercoledì';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Pala Eolica';
$app_list_strings['marker_image_list']['windmill'] = 'Mulino a Vento';
$app_list_strings['marker_image_list']['winery'] = 'Enoteca';
$app_list_strings['marker_image_list']['work_office'] = 'Ufficio';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Luogo patrimonio mondiale';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Fuori Ufficio';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In Riunione';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Rischedula';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Inserire le informazioni per la rischedulazione. Grazie';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Data:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motivo:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Seleziona una data valida';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Seleziona un motivo';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Rischedula';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Storico Tentativi di Chiamata';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentativi di Chiamata';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestione Gruppi di Sicurezza';
$app_strings['LBL_SECURITYGROUP'] = 'Gruppi di Sicurezza';
$app_strings['LBL_ROLE'] = 'Ruolo';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Accounts Email in uscita';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'Connessione OAuth Esterna';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'Provider OAuth Esterno';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Dettagli Social Feed';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filtro';

$app_strings['LBL_COLLECTION_TYPE'] = 'Tipo';

$app_strings['LBL_ADD_TAB'] = 'Aggiungi Tab';
$app_strings['LBL_EDIT_TAB'] = 'Modifica Schede';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Dashboard di SuiteCRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Nome del Pannello di Controllo:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Numero di Colonne:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Conferma cancellazione di ';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'cruscotto?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Aggiungi una pagina del Pannello di Controllo';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Cancella la pagina del Pannello di Controllo corrente';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rinomina la Pagina del Pannello di Controllo';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'AZIONI';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Compiti',
    'Meetings' => 'Appuntamenti',
    'Calls' => 'Chiamate',
    'Notes' => 'Note',
    'Emails' => 'Email'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editor dei modelli';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Avete cliccato fuori dal campo che si stava modificando senza salvarlo. Fare clic su ok se vuoi perdere le modifiche o su Annulla se si desidera continuare a modificare";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "C'era un errore durante il caricamento del campo. La sessione potrebbe essere in timeout. Effettua il login nuovamente per risolvere il problema";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'Vendite',
    'getAccountsSpotsData' => 'Aziende',
    'getLeadsSpotsData' => 'Lead',
    'getServiceSpotsData' => 'Servizio',
    'getMarketingSpotsData' => 'Marketing',
    'getMarketingActivitySpotsData' => 'Attività di marketing',
    'getActivitiesSpotsData' => 'Attività',
    'getQuotesSpotsData' => 'Preventivi'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Ore Lavorative';
$app_list_strings['business_hours_list']['0'] = '12 am';
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
$app_list_strings['day_list']['Monday'] = 'Lunedì';
$app_list_strings['day_list']['Tuesday'] = 'Martedì';
$app_list_strings['day_list']['Wednesday'] = 'Mercoledì';
$app_list_strings['day_list']['Thursday'] = 'Giovedì';
$app_list_strings['day_list']['Friday'] = 'Venerdì';
$app_list_strings['day_list']['Saturday'] = 'Sabato';
$app_list_strings['day_list']['Sunday'] = 'Domenica';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Ritratto';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Panorama';


$app_list_strings['moduleList']['SurveyResponses'] = 'Risposte al sondaggio';
$app_list_strings['moduleList']['Surveys'] = 'Sondaggi';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Risposte alla domanda del sondaggio';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Domande del sondaggio';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Opzioni nella domanda del sondaggio';
$app_list_strings['survey_status_list']['Draft'] = 'Bozza';
$app_list_strings['survey_status_list']['Public'] = 'Pubblico';
$app_list_strings['survey_status_list']['Closed'] = 'Chiuso';
$app_list_strings['surveys_question_type']['Text'] = 'Testo';
$app_list_strings['surveys_question_type']['Textbox'] = 'Casella di Testo';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Casella di controllo';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Casella a discesa';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Selezione multipla';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrice';
$app_list_strings['surveys_question_type']['DateTime'] = 'Data-Ora';
$app_list_strings['surveys_question_type']['Date'] = 'Data';
$app_list_strings['surveys_question_type']['Scale'] = 'Scala';
$app_list_strings['surveys_question_type']['Rating'] = 'Valutazione';
$app_list_strings['surveys_matrix_options'][0] = 'Soddisfatto';
$app_list_strings['surveys_matrix_options'][1] = 'Né soddisfatto né insoddisfatto';
$app_list_strings['surveys_matrix_options'][2] = 'Insoddisfatto';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'In attesa di Conferma dell\'iscrizione, Conferma iscrizione non inviata';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'L\'invio della Email di conferma Opt In è fallito';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'In attesa di Conferma dell\'iscrizione, Conferma iscrizione inviata';
$app_strings['LBL_OPT_IN'] = 'Iscritto';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Opt In Confermato';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Disiscritto';
$app_strings['LBL_OPT_IN_INVALID'] = 'Non valido';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Disattivato',
    'opt-in' => 'Iscrizione',
    'confirmed-opt-in' => 'Opt-In Confermato'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Iscrizione rifiutata',
    'opt-in' => 'Iscrizione',
    'confirmed-opt-in' => 'Opt-In Confermato'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'La mail di conferma delle scelte è stata aggiunta alla coda per %s degli indirizzi. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Impossibile inviare e-mail a %s perchè non risulta iscritto. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'L\'indirizzo %s non ha un identificativo valido. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Autenticazione in due passaggi fallita';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Codice di autenticazione in due passaggi inviato.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'L\'invio del codice di autenticazione in due fattori è fallito.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Grazie per l\'interesse.';

$app_strings['ERR_IP_CHANGE'] = 'La tua sessione è stata terminata a causa di un cambiamento significativo nell\'indirizzo IP';
$app_strings['ERR_RETURN'] = 'Torna alla Pagina Principale';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Attribuita',
    'client_credentials' => 'Credenziali del cliente',
    'implicit' => 'Implicito',
    'authorization_code' => 'Codice di Autorizzazione'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minuti',
    'hour' => 'ore',
    'day' => 'giorni',
    'week' => 'settimane',
    'month' => 'mesi',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Ricerca (Nuovo)',
    'UnifiedSearch' => 'Ricerca globale unificata (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personale',
    'shared' => 'Condiviso',
    'group' => 'Gruppo',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Connesso',
    'failed' => 'Fallito',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'In corso',
    'success' => 'Successo',
    'warning' => 'Avviso',
    'error' => 'Errore',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Errore JSON API';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Si è verificato un errore JSON API.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Versione API: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Assicurati di compilare i campi richiesti';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API prevede che il corpo della richiesta sia JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Impossibile convalidare la richiesta Json Api Payload';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Impossibile convalidare la Risposta di Json Api Payload';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API non trova la risorsa';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API prevede che l\'intestazione "Accetta" sia application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API prevede che l\'intestazione "Content-Type" sia application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Notifiche sul desktop sono ora abilitate per questo browser web.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Notifiche sul desktop sono disattivate per questo browser web. Utilizzare le preferenze del browser per attivarli nuovamente.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Questo browser non supporta le notifiche sul desktop.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'C\'è stato un errore: ';
$app_strings['LBL_CLICK_HERE'] = 'Clicca qui';
$app_strings['LBL_TO_CONTINUE'] = ' per continuare.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERRORE: {error}; chiave era: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: testare le impostazioni modificate da "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Richiesta non valida, usa il valore "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Errore sconosciuto, chiave "{key}" non salvata.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Le impostazioni di test non esistono.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Chiave non trovata.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Errore salvataggio chiave.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Errore sconosciuto';
$app_strings['LBL_SEARCH_TITLE']                   = 'Ricerca';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Inserisci Criteri di Ricerca';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Ricerca';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Ricerca';
$app_strings['LBL_SEARCH_QUERY']                   = 'Query di ricerca: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Motore: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Risultato(i) totale(i): ';
$app_strings['LBL_SEARCH_PREV'] = 'Precedente';
$app_strings['LBL_SEARCH_NEXT'] = 'Avanti';
$app_strings['LBL_SEARCH_PAGE'] = 'Pagina ';
$app_strings['LBL_SEARCH_OF'] = ' di ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Usa la Ricerca Avanzata';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Usa la Ricerca di Base';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Motore Legacy MPDF';
$app_strings['LBL_TCPDF_ENGINE'] = 'Motore TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Nome del file non valido:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'Questo può esser solo di caratteri alfanumerici, più \'.\', \'-\' e \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Nome del file d\'importazione non valido';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = 'Password impostata. Inserisci un valore per impostare una nuova password.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = 'Valore impostato. Inserisci un nuovo valore per sovrascrivere quello corrente.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = 'Non è in grado di connettersi utilizzando l\'accesso OAuth con il server di posta in entrata. Per la connessione: ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = 'La tua sessione IMAP OAuth è scaduta, accedi di nuovo alla connessione: ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = 'Chiave';
$app_strings['LBL_VALUE'] = 'Valore';
$app_strings['LBL_OPTIONAL'] = 'Opzionale';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Opzionale. Impostare per usare una stringa di connessione specifica';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Account In Uscita';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Account In Entrata';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'Account di sistema';
$app_strings['LBL_FROM_SYSTEM'] = 'Invia Dal Sistema';
$app_strings['LBL_SIGNATURE'] = 'Firma';

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
