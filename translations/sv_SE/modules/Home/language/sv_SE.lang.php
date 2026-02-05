<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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
    'LBL_MODULE_NAME' => 'Hem',
    'LBL_NEW_FORM_TITLE' => 'Ny kontakt',
    'LBL_FIRST_NAME' => 'Förnamn:',
    'LBL_LAST_NAME' => 'Efternamn:',
    'LBL_LIST_LAST_NAME' => 'Efternamn',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-postadress:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Min pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline över försäljningsstadium',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline över försäljningsstadium',
    'LNK_NEW_CONTACT' => 'Skapa kontakt',
    'LNK_NEW_ACCOUNT' => 'Skapa konto',
    'LNK_NEW_OPPORTUNITY' => 'Skapa affär',
    'LNK_NEW_LEAD' => 'Skapa lead',
    'LNK_NEW_CASE' => 'Skapa fall',
    'LNK_NEW_NOTE' => 'Skapa anteckning eller bilaga',
    'LNK_NEW_CALL' => 'Schemalägg samtal',
    'LNK_NEW_EMAIL' => 'Arkivera E-post',
    'LNK_NEW_MEETING' => 'Schemalägg möte',
    'LNK_NEW_TASK' => 'Skapa uppgift',
    'LNK_NEW_BUG' => 'Rapportera bugg',
    'LNK_NEW_SEND_EMAIL' => 'Skriv E-post',
    'LBL_NO_ACCESS' => 'Du saknar behörighet att besöka detta område. Kontakta din administratör för att få behörighet.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Inga resultat --',
    'LBL_NO_RESULTS' => '<h2>Hittade inget resultat. Var god sök igen.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Sök tips:</h3><ul><li>Var god kontrollera att du har valt rätt kategorier ovan.</li><li>Utöka ditt sökkriteria.</li><li>Om du inte finner det du söker, prova den avancerade sökningen.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Lägg till dashlet',
    'LBL_WEBSITE_TITLE' => 'Hemsida',
    'LBL_RSS_TITLE' => 'Nyhetsflöde',
    'LBL_CLOSE_DASHLETS' => 'Stäng',
    'LBL_OPTIONS' => 'Val',
    // dashlet search fields
    'LBL_TODAY' => 'Idag',
    'LBL_YESTERDAY' => 'Igår',
    'LBL_TOMORROW' => 'Imorgon',
    'LBL_NEXT_WEEK' => 'Nästa vecka',
    'LBL_LAST_7_DAYS' => 'Sista 7 Dagarna',
    'LBL_NEXT_7_DAYS' => 'Kommande 7 Dagar',
    'LBL_LAST_MONTH' => 'Förre Månaden',
    'LBL_NEXT_MONTH' => 'Nästa månad',
    'LBL_LAST_YEAR' => 'Föregående År',
    'LBL_NEXT_YEAR' => 'Nästa år',
    'LBL_LAST_30_DAYS' => 'Sista 30 Dagarna',
    'LBL_NEXT_30_DAYS' => 'Kommande 30 Dagar',
    'LBL_THIS_MONTH' => 'Denna Månaden',
    'LBL_THIS_YEAR' => 'Detta År',

    'LBL_MODULES' => 'Modul',
    'LBL_CHARTS' => 'Diagram',
    'LBL_TOOLS' => 'Verktyg',
    'LBL_WEB' => 'Webb',
    'LBL_SEARCH_RESULTS' => 'Sökresultat',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Modul Vyer',
        'Portal' => 'Portal',
        'Charts' => 'Diagram',
        'Tools' => 'Verktyg',
        'Miscellaneous' => 'Diverse'
    ),
    'LBL_ADDING_DASHLET' => 'Lägg till dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet tillaggd',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Är du säker på att du vill ta bort den här Dashleten?',
    'LBL_REMOVING_DASHLET' => 'Ta bort dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet bort tagen',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Allmänt',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filter',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Endast mina objekt',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Rubrik',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Visa rader',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Stäng',

    'LBL_SEARCH' => 'Sök',
    'LBL_CLEAR' => 'Rensa',

    'LBL_BASIC_CHARTS' => 'Enkelt diagram',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'Portal',
    'LBL_DASHLET_OPT_TITLE' => 'Rubrik',
    'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
    'LBL_DASHLET_OPT_URL' => 'Hemsideplats',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet höjd (i pixlar)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM-nyheter',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Upptäck SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Snabbfilter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Avancerat filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Hemikon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Modul',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'Fler moduler',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Full Text Search',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Meddelanden',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Snabbskapa',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Anpassade appar',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Ditt varumärke',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Välkommen till SuiteCRM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'Du är klar!',
    'LBL_TOUR_REFERENCE_1' => 'Du kan alltid hänvisa till våra',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_CONTRIBUTORS' => 'Contributors',
    'LBL_ABOUT_SUITE' => 'Om SuiteCRM',
    'LBL_PARTNERS' => 'Samarbetspartners',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE and Reschedule modules by SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Redigera alla upprepningar',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Ta bort alla upprepningar',
    'LBL_CONFIRM_REMOVE' => 'Är du säker du vill ta bort posten?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite av Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Provided by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is published under an open source licence - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

    'LBL_SAVE_BUTTON' => 'Spara',
    'LBL_DELETE_BUTTON' => 'Radera',
    'LBL_APPLY_BUTTON' => 'Tillämpa',
    'LBL_SEND_INVITES' => 'Skicka inbjudan',
    'LBL_CANCEL_BUTTON' => 'Ångra',
    'LBL_CLOSE_BUTTON' => 'Stäng',

    'LBL_CREATE_NEW_RECORD' => 'Skapa aktivitet',
    'LBL_CREATE_CALL' => 'Schemalägg samtal',
    'LBL_CREATE_MEETING' => 'Schemalägg möte',

    'LBL_GENERAL_TAB' => 'Detaljer',
    'LBL_PARTICIPANTS_TAB' => 'Inbjudningar',
    'LBL_REPEAT_TAB' => 'Återkommande',

    'LBL_REPEAT_TYPE' => 'Upprepa',
    'LBL_REPEAT_INTERVAL' => 'Varje',
    'LBL_REPEAT_END' => 'Slut',
    'LBL_REPEAT_END_AFTER' => 'Efter',
    'LBL_REPEAT_OCCURRENCES' => 'upprepningar',
    'LBL_REPEAT_END_BY' => 'Av',
    'LBL_REPEAT_DOW' => 'Den',
    'LBL_REPEAT_UNTIL' => 'Upprepa tills',
    'LBL_REPEAT_COUNT' => 'Antal upprepningar',
    'LBL_REPEAT_LIMIT_ERROR' => 'Din förfrågan skulle skapa fler än $limit möten.',

    //Events
    'LNK_EVENT' => 'Aktivitet',
    'LNK_EVENT_VIEW' => 'Visa händelse',
    'LBL_DATE' => 'Datum: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Titel: ',
    'LBL_HOUR_ABBREV' => 'timme',
    'LBL_HOURS_ABBREV' => 'timmar',
    'LBL_MINSS_ABBREV' => 'minuter',
    'LBL_LOCATION' => 'Plats:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Beskrivning: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Ett fel uppstod när utförde sökningen. Din fråga, syntax kanske inte är giltig.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Inget resultat som matchade din sökning. Prova att bredda din sökning.',

    'LNK_TASK_VIEW' => 'Visa uppgift',
);
