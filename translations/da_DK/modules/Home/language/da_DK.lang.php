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
    'LBL_MODULE_NAME' => 'Home',
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Min pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => 'Compose Email',
    'LBL_NO_ACCESS' => 'Du har ikke adgang til dette område. Kontakt webstedsadministratoren for at få adgang',
    'LBL_NO_RESULTS_IN_MODULE' => '- Ingen resultater -',
    'LBL_NO_RESULTS' => '<h2>Der blev ikke fundet nogen resultater. Søg igen.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Søgetip:</h3><ul><li>Sørg for, at du har valgt de korrekte kategorier ovenfor.</li><li>Udvid søgekriterierne.</li><li>Hvis du stadig ikke får nogen resultater, kan du prøve de avancerede søgeindstillinger.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Nyheds feed',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'I morgen',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_LAST_7_DAYS' => 'Last 7 Days',
    'LBL_NEXT_7_DAYS' => 'Next 7 Days',
    'LBL_LAST_MONTH' => 'Last Month',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_LAST_YEAR' => 'Last Year',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_LAST_30_DAYS' => 'Last 30 Days',
    'LBL_NEXT_30_DAYS' => 'Next 30 Days',
    'LBL_THIS_MONTH' => 'This Month',
    'LBL_THIS_YEAR' => 'This Year',

    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'Charts',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Søgeresultat',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Modul oversigt',
        'Portal' => 'Portal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Diverse'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet tilføjet',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Er du sikker på du vil fjerne dette SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet fjernet',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Grundlæggende diagrammer',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Byg',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Forkert hjemmeside placering er angivet',
    'LBL_DASHLET_OPT_URL' => 'Webstedsplacering',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet-højde "i pixel"',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM nyheder',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Discover SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Hurtigfilter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Avanceret filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Hjem Ikon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Alle dine vigtige moduler er her.',
    'LBL_TOUR_MORE' => 'Flere moduler',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Resten af din moduler er her.',
    'LBL_TOUR_SEARCH' => 'Fuld tekstsøgning',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Søgefunktionen er blevet en hel del bedre.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifikation',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Adgang til profil, indstillinger og logout.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
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

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Anvend',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_CREATE_NEW_RECORD' => 'Opret aktivitet',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Gentagelse',

    'LBL_REPEAT_TYPE' => 'Gentag',
    'LBL_REPEAT_INTERVAL' => 'Hver',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
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
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
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
