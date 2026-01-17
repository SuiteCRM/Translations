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
    'LBL_MODULE_NAME' => 'Pradžia',
    'LBL_NEW_FORM_TITLE' => 'Naujas kontaktas',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Pavardė:',
    'LBL_LIST_LAST_NAME' => 'Pavardė',
    'LBL_PHONE' => 'Telefonas:',
    'LBL_EMAIL_ADDRESS' => 'El.paštas:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mano vykdomi pardavimai',
    'LBL_PIPELINE_FORM_TITLE' => 'Pardavimai pagal etapus',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pardavimai pagal etapus',
    'LNK_NEW_CONTACT' => 'Sukurti kontaktą',
    'LNK_NEW_ACCOUNT' => 'Sukurti paskyrą',
    'LNK_NEW_OPPORTUNITY' => 'Sukurti pardavimą',
    'LNK_NEW_LEAD' => 'Sukurti potencialų kontaktą',
    'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
    'LNK_NEW_NOTE' => 'Sukurti užrašą',
    'LNK_NEW_CALL' => 'Registruoti skambutį',
    'LNK_NEW_EMAIL' => 'Archyvuoti el. paštą',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_NEW_TASK' => 'Sukurti užduotį',
    'LNK_NEW_BUG' => 'Pranešti klaidą',
    'LNK_NEW_SEND_EMAIL' => 'Kurti laišką',
    'LBL_NO_ACCESS' => 'Jūs neturite teisės prieiti prie šios srities. Susiekite su administratoriumi, kad gautumėte priėjimą.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nėra rezultatų --',
    'LBL_NO_RESULTS' => '<h2>Paieškos rezultatų nerasta. Prašome bandyti dar kartą.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Paieškos patarimai:</h3><ul><li>Įsitikinkite, kad uždėjote varnelę ant modulio kuriame norite ieškoti duomenų.</li><li>Praplėskite savo paieškos kriterijus.</li><li>Jei Jums vis tiek nepavyksta rasti rezultatų, prašome naudoti paiešką pačiame modulyje.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Pridėti panelius',
    'LBL_WEBSITE_TITLE' => 'Tinklapis',
    'LBL_RSS_TITLE' => 'Naujienos',
    'LBL_CLOSE_DASHLETS' => 'Užbaigti',
    'LBL_OPTIONS' => 'Pasirinkimai',
    // dashlet search fields
    'LBL_TODAY' => 'Šiandien',
    'LBL_YESTERDAY' => 'Vakar',
    'LBL_TOMORROW' => 'Rytoj',
    'LBL_NEXT_WEEK' => 'Kitą savaitę',
    'LBL_LAST_7_DAYS' => 'Praėjusias 7 dienas',
    'LBL_NEXT_7_DAYS' => 'Kitas 7 dienas',
    'LBL_LAST_MONTH' => 'Praėjusį mėnesį',
    'LBL_NEXT_MONTH' => 'Kita mėnesį',
    'LBL_LAST_YEAR' => 'Praėjusiais metais',
    'LBL_NEXT_YEAR' => 'Kiti metai',
    'LBL_LAST_30_DAYS' => 'Praėjusias 30 dienų',
    'LBL_NEXT_30_DAYS' => 'Kitas 30 dienų',
    'LBL_THIS_MONTH' => 'Šį mėnesį',
    'LBL_THIS_YEAR' => 'Šiais metais',

    'LBL_MODULES' => 'Moduliai:',
    'LBL_CHARTS' => 'Diagramos',
    'LBL_TOOLS' => 'Įrankiai',
    'LBL_WEB' => 'Tinklapis',
    'LBL_SEARCH_RESULTS' => 'Paieškos rezultatas',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Moduliai',
        'Portal' => 'Portalas',
        'Charts' => 'Diagramos',
        'Tools' => 'Įrankiai',
        'Miscellaneous' => 'Įvairūs'
    ),
    'LBL_ADDING_DASHLET' => 'Pridedamas SuiteCRM elementas...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM elementas pridėtas',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Ar Jūs esate tikri kad norite pašalinti šį SuiteCRM elementą?',
    'LBL_REMOVING_DASHLET' => 'Šalinamas SuiteCRM elementas...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Bendra',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtrai',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tik mano įrašai',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Pareigybės',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Rodyti eilutes',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Užbaigti',

    'LBL_SEARCH' => 'Paieška',
    'LBL_CLEAR' => 'Išvalyti',

    'LBL_BASIC_CHARTS' => 'Baziniai grafikai',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Versija',
    'LBL_BUILD' => 'Sukūrimas',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'Mano puslapiai',
    'LBL_DASHLET_OPT_TITLE' => 'Pareigybės',
    'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
    'LBL_DASHLET_OPT_URL' => 'Tinklapio adresas',
    'LBL_DASHLET_OPT_HEIGHT' => 'Aukštis (pikseliais)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM News',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Patyrinėkite SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Greitas filtras' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Sudėtingas filtras' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Moduliai:',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Viso teksto paieška',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Pranešimai',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profilis',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Greitas sukūrimas',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Sveiki atvykę į SuiteCRM!',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'You\'re Done!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_CONTRIBUTORS' => 'Autoriai',
    'LBL_ABOUT_SUITE' => 'Apie SuiteCRM',
    'LBL_PARTNERS' => 'Partneriai',
    'LBL_EDIT_ALL_RECURRENCES' => 'Redaguoti visus Pasikartojimus',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Naikinti visus Pasikartojimus',
    'LBL_CONFIRM_REMOVE' => 'Ar tikrai norite šalinti įrašą?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite iš Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps iš Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM yra paskelbtas su atviro kodo licencija - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Visi SuiteCRM kodas valdytų ir sukūrė projektą bus išleistas kaip atviro kodo - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM parama yra tiek nemokama ir mokama už papildomas galimybes',

    'LBL_SUITE_PARTNERS' => 'Mes ištikimi SuiteCRM partneriai, kurie aistringai apie atviro kodo. Norėdami peržiūrėti mūsų aktyvių partnerių sąrašą, rasite mūsų svetainėje.',

    'LBL_SAVE_BUTTON' => 'Saugoti',
    'LBL_DELETE_BUTTON' => 'Ištrinti',
    'LBL_APPLY_BUTTON' => 'Taikyti',
    'LBL_SEND_INVITES' => 'Siųsti pakvietimus',
    'LBL_CANCEL_BUTTON' => 'Atšaukti',
    'LBL_CLOSE_BUTTON' => 'Užbaigti',

    'LBL_CREATE_NEW_RECORD' => 'Sukurti Veiklą',
    'LBL_CREATE_CALL' => 'Registruoti skambutį',
    'LBL_CREATE_MEETING' => 'Suplanuoti susitikimą',

    'LBL_GENERAL_TAB' => 'Detalės',
    'LBL_PARTICIPANTS_TAB' => 'Dalyviai',
    'LBL_REPEAT_TAB' => 'Pasikartojimas',

    'LBL_REPEAT_TYPE' => 'Pakartokite',
    'LBL_REPEAT_INTERVAL' => 'Kiekvienas',
    'LBL_REPEAT_END' => 'Pabaiga',
    'LBL_REPEAT_END_AFTER' => 'Po',
    'LBL_REPEAT_OCCURRENCES' => 'pasikartojimai',
    'LBL_REPEAT_END_BY' => 'Iš',
    'LBL_REPEAT_DOW' => 'Įjungti',
    'LBL_REPEAT_UNTIL' => 'Kartoti iki',
    'LBL_REPEAT_COUNT' => 'Pasikartojimo Numeris',
    'LBL_REPEAT_LIMIT_ERROR' => 'Jūsų prašymas bus viršytas nei $ susitikimų limitas.',

    //Events
    'LNK_EVENT' => 'Atvejis',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Pavadinimas:',
    'LBL_HOUR_ABBREV' => 'valanda',
    'LBL_HOURS_ABBREV' => 'valandos',
    'LBL_MINSS_ABBREV' => 'minutės',
    'LBL_LOCATION' => 'Vieta:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Atliekant paiešką įvyko klaida. Galimai yra neteisinga paieškos sintaksė.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Nėra atitikimų paieškos kriterijų. Pabandikite išplėsti paieškos kriterijus.',

    'LNK_TASK_VIEW' => 'View Task',
);
