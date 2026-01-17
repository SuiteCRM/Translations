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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Hjem',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_LAST_NAME' => 'Efternavn:',
    'LBL_LIST_LAST_NAME' => 'Efternavn',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Min pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline efter salgsfase',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline efter salgsfase',
    'LNK_NEW_CONTACT' => 'Opret kontakt',
    'LNK_NEW_ACCOUNT' => 'Ny kunde',
    'LNK_NEW_OPPORTUNITY' => 'Opret mulighed',
    'LNK_NEW_LEAD' => 'Opret emne',
    'LNK_NEW_CASE' => 'Opret sag',
    'LNK_NEW_NOTE' => 'Opret note eller vedhæft',
    'LNK_NEW_CALL' => 'Planlæg opkald',
    'LNK_NEW_EMAIL' => 'Arkiver Email',
    'LNK_NEW_MEETING' => 'Planlæg møde',
    'LNK_NEW_TASK' => 'Opret opgave',
    'LNK_NEW_BUG' => 'Opret fejl',
    'LNK_NEW_SEND_EMAIL' => 'Sammensæt Email',
    'LBL_NO_ACCESS' => 'Du har ikke adgang til dette område. Kontakt webstedsadministratoren for at få adgang',
    'LBL_NO_RESULTS_IN_MODULE' => '- Ingen resultater -',
    'LBL_NO_RESULTS' => '<h2>Der blev ikke fundet nogen resultater. Søg igen.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Søgetip:</h3><ul><li>Sørg for, at du har valgt de korrekte kategorier ovenfor.</li><li>Udvid søgekriterierne.</li><li>Hvis du stadig ikke får nogen resultater, kan du prøve de avancerede søgeindstillinger.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Tilføj SuiteCRM-dashlets',
    'LBL_WEBSITE_TITLE' => 'Websted',
    'LBL_RSS_TITLE' => 'Nyheds feed',
    'LBL_CLOSE_DASHLETS' => 'Luk',
    'LBL_OPTIONS' => 'Optioner',
    // dashlet search fields
    'LBL_TODAY' => 'I dag',
    'LBL_YESTERDAY' => 'I går',
    'LBL_TOMORROW' => 'I morgen',
    'LBL_NEXT_WEEK' => 'Næste uge',
    'LBL_LAST_7_DAYS' => 'Sidste 7 dage',
    'LBL_NEXT_7_DAYS' => 'Næste 7 dage',
    'LBL_LAST_MONTH' => 'Sidste måned',
    'LBL_NEXT_MONTH' => 'Næste måned',
    'LBL_LAST_YEAR' => 'Sidste år',
    'LBL_NEXT_YEAR' => 'Næste år',
    'LBL_LAST_30_DAYS' => 'Sidste 30 dage',
    'LBL_NEXT_30_DAYS' => 'Næste 30 dage',
    'LBL_THIS_MONTH' => 'Denne måned',
    'LBL_THIS_YEAR' => 'Dette pr',

    'LBL_MODULES' => 'Moduler',
    'LBL_CHARTS' => 'Grafer',
    'LBL_TOOLS' => 'Værktøjer',
    'LBL_WEB' => 'Internettet',
    'LBL_SEARCH_RESULTS' => 'Søgeresultat',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Modul oversigt',
        'Portal' => 'Portal',
        'Charts' => 'Grafer',
        'Tools' => 'Værktøjer',
        'Miscellaneous' => 'Diverse'
    ),
    'LBL_ADDING_DASHLET' => 'Tilføjer SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet tilføjet',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Er du sikker på du vil fjerne dette SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Fjerner SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet fjernet',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generel',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Kun mine elementer',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Vis rækker',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Luk',

    'LBL_SEARCH' => 'Søg',
    'LBL_CLEAR' => 'Ryd',

    'LBL_BASIC_CHARTS' => 'Grundlæggende diagrammer',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Byg',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'Portal',
    'LBL_DASHLET_OPT_TITLE' => 'Titel',
    'LBL_DASHLET_INCORRECT_URL' => 'Forkert hjemmeside placering er angivet',
    'LBL_DASHLET_OPT_URL' => 'Webstedsplacering',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet-højde "i pixel"',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM nyheder',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Discover SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Hurtigfilter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Avanceret filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Hjem Ikon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Moduler',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Alle dine vigtige moduler er her.',
    'LBL_TOUR_MORE' => 'Flere moduler',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Resten af din moduler er her.',
    'LBL_TOUR_SEARCH' => 'Fuld tekstsøgning',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Søgefunktionen er blevet en hel del bedre.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifikation',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Adgang til profil, indstillinger og logout.',
    'LBL_TOUR_QUICKCREATE' => 'Kvik opret',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Opret hurtigt poster uden at miste overblilket.',
    'LBL_TOUR_FOOTER' => 'Sammenklappelig sidefod',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Nemt at udvide og skjule sidefoden.',
    'LBL_TOUR_CUSTOM' => 'Brugerdefinerede apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Brugerdefinerede integrationer ville være her.',
    'LBL_TOUR_BRAND' => 'Dit brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Dit logo skal sidde her. Du kan føre musen over for mere info.',
    'LBL_TOUR_WELCOME' => 'Velkommen til SuiteCRM',
    'LBL_TOUR_WATCH' => 'Se nye tiltag i SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For mere information besøg venligst vores program',
    'LBL_TOUR_DONE' => 'Du er færdig!',
    'LBL_TOUR_REFERENCE_1' => 'Du kan altid referere til vores',
    'LBL_TOUR_REFERENCE_2' => 'via linket "Support Forum" under fanen profil.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Deler du din SuiteCRM kalender med tredjeparts programmer, såsom Microsoft Outlook eller Exchange? I så fald får du en ny URL-adresse. Denne nye, mere sikre URL-adresse indeholder en personlig nøgle, som vil forhindre uautoriseret offentliggørelse af kalenderen.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Hent din nye delte kalenders URL.',
    'LBL_CONTRIBUTORS' => 'Bidragydere',
    'LBL_ABOUT_SUITE' => 'Om SuiteCRM',
    'LBL_PARTNERS' => 'Partnere',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Er du sikker på, at du vil slette denne post?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM til verden',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite af Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps af Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Om SuiteCRM oversættelser',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Oversættelse foretaget ved hjælp af Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM er udgivet med en open source licens - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'Alt SuiteCRM kode, der er administreret og udviklet af projektet vil blive frigivet som open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support er tilgængelig som både gratis og betalt tjeneste',

    'LBL_SUITE_PARTNERS' => 'Vi har loyale SuiteCRM partnere, der er passionerede omkring open source. Besøg vores hjemmeside for at se vores fulde partnerliste.',

    'LBL_SAVE_BUTTON' => 'Gem',
    'LBL_DELETE_BUTTON' => 'Slet',
    'LBL_APPLY_BUTTON' => 'Anvend',
    'LBL_SEND_INVITES' => 'Send Invitationer',
    'LBL_CANCEL_BUTTON' => 'Afbryd',
    'LBL_CLOSE_BUTTON' => 'Luk',

    'LBL_CREATE_NEW_RECORD' => 'Opret aktivitet',
    'LBL_CREATE_CALL' => 'Planlæg opkald',
    'LBL_CREATE_MEETING' => 'Planlæg møde',

    'LBL_GENERAL_TAB' => 'Detaljer',
    'LBL_PARTICIPANTS_TAB' => 'Deltagere',
    'LBL_REPEAT_TAB' => 'Gentagelse',

    'LBL_REPEAT_TYPE' => 'Gentag',
    'LBL_REPEAT_INTERVAL' => 'Hver',
    'LBL_REPEAT_END' => 'Slut',
    'LBL_REPEAT_END_AFTER' => 'Større end',
    'LBL_REPEAT_OCCURRENCES' => 'gentagelser',
    'LBL_REPEAT_END_BY' => 'Af',
    'LBL_REPEAT_DOW' => 'Til',
    'LBL_REPEAT_UNTIL' => 'Gentag indtil',
    'LBL_REPEAT_COUNT' => 'Antal gentagelser',
    'LBL_REPEAT_LIMIT_ERROR' => 'Din anmodning vil skabe mere end $limit møder.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'Vis Event',
    'LBL_DATE' => 'Dato: ',
    'LBL_DURATION' => 'Varighed: ',
    'LBL_NAME' => 'Titel:',
    'LBL_HOUR_ABBREV' => 'time',
    'LBL_HOURS_ABBREV' => 'timer',
    'LBL_MINSS_ABBREV' => 'minutter',
    'LBL_LOCATION' => 'Lokation:',
    'LBL_STATUS' => 'Status',
    'LBL_DESCRIPTION' => 'Beskrivelse: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Der opstod en fejl da søgning blev udført. Din forespørgsels syntaks er muligvis ikke korrekt.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Kan ikke finde den ønskede søgemaskine. Prøv at udføre søgningen igen.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Kunne ikke operette forbinde til Elasticsearch serveren.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Der er ingen resultater der matcher dine søgekriterier. Prøv at søge bredere.',

    'LNK_TASK_VIEW' => 'Vis opgave',
);
