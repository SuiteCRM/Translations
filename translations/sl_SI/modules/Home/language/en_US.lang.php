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
    'LBL_MODULE_NAME' => 'Domov',
    'LBL_NEW_FORM_TITLE' => 'Nov kontakt',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_LAST_NAME' => 'Priimek:',
    'LBL_LIST_LAST_NAME' => 'Priimek',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-pošta:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Moj lijak',
    'LBL_PIPELINE_FORM_TITLE' => 'Prodajni lijak po prodajni fazi',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Prodajni lijak po prodajni fazi',
    'LNK_NEW_CONTACT' => 'Ustvari kontakt',
    'LNK_NEW_ACCOUNT' => 'Ustvari Partnerja',
    'LNK_NEW_OPPORTUNITY' => 'Ustvari priložnost',
    'LNK_NEW_LEAD' => 'Ustvari Potencial',
    'LNK_NEW_CASE' => 'Ustvari primer',
    'LNK_NEW_NOTE' => 'Ustvari opombo ali priponko',
    'LNK_NEW_CALL' => 'Načrtuj klic',
    'LNK_NEW_EMAIL' => 'Arhiviraj e-pošto',
    'LNK_NEW_MEETING' => 'Načrtuj sestanek',
    'LNK_NEW_TASK' => 'Ustvari nalogo',
    'LNK_NEW_BUG' => 'Poročaj o hrošču',
    'LNK_NEW_SEND_EMAIL' => 'Sestavi e-spročilo',
    'LBL_NO_ACCESS' => 'Nimate dostopa do tega predela. Kontaktirajte administratorja.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Ni rezultatov --',
    'LBL_NO_RESULTS' => '&lt;h2&gt;Ne najdenih rezultatov, prosim ponovite iskanje.&lt;/h2&gt;&lt;br&gt;',
    'LBL_NO_RESULTS_TIPS' => '&lt;h3&gt;Nasveti za iskanje:&lt;/h3&gt;&lt;ul&gt;&lt;li&gt;Prepričajte se, če ste zgoraj izbrali prave kategorije.&lt;/li&gt;&lt;li&gt;Razširite kriterije za iskanje.&lt;/li&gt;&lt;li&gt;Če še vedno ne najdete rezultatov probajte z naprednjim iskanjem.&lt;/li&gt;&lt;/ul&gt;',

    'LBL_ADD_DASHLETS' => 'Dodaj prikazovalnik',
    'LBL_WEBSITE_TITLE' => 'Spletna stran',
    'LBL_RSS_TITLE' => 'Vir novic',
    'LBL_CLOSE_DASHLETS' => 'Zapri',
    'LBL_OPTIONS' => 'Možnosti',
    // dashlet search fields
    'LBL_TODAY' => 'Danes',
    'LBL_YESTERDAY' => 'Včeraj',
    'LBL_TOMORROW' => 'Jutri',
    'LBL_NEXT_WEEK' => 'Naslednji teden',
    'LBL_LAST_7_DAYS' => 'Zadnjih 7 dni',
    'LBL_NEXT_7_DAYS' => 'Naslednjih 7 dni',
    'LBL_LAST_MONTH' => 'Prejšnji mesec',
    'LBL_NEXT_MONTH' => 'Naslednji mesec',
    'LBL_LAST_YEAR' => 'Prejšnje leto',
    'LBL_NEXT_YEAR' => 'Naslednje leto',
    'LBL_LAST_30_DAYS' => 'Zadnjih 30 dni',
    'LBL_NEXT_30_DAYS' => 'Naslednjih 30 dni',
    'LBL_THIS_MONTH' => 'Tekoči mesec',
    'LBL_THIS_YEAR' => 'Tekoče leto',

    'LBL_MODULES' => 'Moduli',
    'LBL_CHARTS' => 'Grafi',
    'LBL_TOOLS' => 'Orodja',
    'LBL_WEB' => 'Splet',
    'LBL_SEARCH_RESULTS' => 'Rezultati iskanja',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Pogled modula',
        'Portal' => 'Portal',
        'Charts' => 'Grafi',
        'Tools' => 'Orodja',
        'Miscellaneous' => 'Razno'
    ),
    'LBL_ADDING_DASHLET' => 'Dodajam SuiteCRM namizje...',
    'LBL_ADDED_DASHLET' => 'Namizje SuiteCRM dodano',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Si prepričan, da želiš izbrisati to namizje?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Splošno',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Samo moji predmeti',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Naziv',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Prikaži vrstice',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Zapri',

    'LBL_SEARCH' => 'Iskanje',
    'LBL_CLEAR' => 'Počisti',

    'LBL_BASIC_CHARTS' => 'Osnovni grafi',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Različica',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'Moje strani',
    'LBL_DASHLET_OPT_TITLE' => 'Naziv',
    'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
    'LBL_DASHLET_OPT_URL' => 'Lokacija spletne strani',
    'LBL_DASHLET_OPT_HEIGHT' => 'Višina prikazovalnika (v pikslih)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM News',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Discover SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Hitri Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Napredni Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Moduli',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Full Text Search',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Obvestila',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Na hitro naredi',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Quickly create records without losing your place.',
    'LBL_TOUR_FOOTER' => 'Collapsible Footer',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Easily expand and collapse the footer.',
    'LBL_TOUR_CUSTOM' => 'Custom Apps',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Custom integrations would go here.',
    'LBL_TOUR_BRAND' => 'Your Brand',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Your logo goes here. You can mouse over for more info.',
    'LBL_TOUR_WELCOME' => 'Welcome to SuiteCRM',
    'LBL_TOUR_WATCH' => 'Watch What\'s New in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">New simplifed navigation bar</li><li class="icon-ok">New collapsible footer</li><li class="icon-ok">Improved Search</li><li class="icon-ok">Updated actions menu</li></ul><p>and much more!</p>',
    'LBL_TOUR_VISIT' => 'For more information please visit our application',
    'LBL_TOUR_DONE' => 'You\'re Done!',
    'LBL_TOUR_REFERENCE_1' => 'You can always reference our',
    'LBL_TOUR_REFERENCE_2' => 'through the "Support Forum" link under the profile tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Retrieve your new shared calendar URL.',
    'LBL_CONTRIBUTORS' => 'Contributors',
    'LBL_ABOUT_SUITE' => 'About SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE and Reschedule modules by SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Uredi vse ponovitve',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Izbriši vse ponovitve',
    'LBL_CONFIRM_REMOVE' => 'Ste prepričani, da želite odstraniti izbran vnos?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM LOGO Provided by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM 7.3 release by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM je objavljen pod odprtokodno licenco - GPL3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

    'LBL_SAVE_BUTTON' => 'Shrani',
    'LBL_DELETE_BUTTON' => 'Izbriši',
    'LBL_APPLY_BUTTON' => 'Sprejmi',
    'LBL_SEND_INVITES' => 'Pošlji povabila',
    'LBL_CANCEL_BUTTON' => 'Prekliči',
    'LBL_CLOSE_BUTTON' => 'Zapri',

    'LBL_CREATE_NEW_RECORD' => 'Ustvari aktivnost',
    'LBL_CREATE_CALL' => 'Načrtuj klic',
    'LBL_CREATE_MEETING' => 'Načrtuj sestanek',

    'LBL_GENERAL_TAB' => 'Podrobnosti',
    'LBL_PARTICIPANTS_TAB' => 'Povabljeni',
    'LBL_REPEAT_TAB' => 'Ponavljanje',

    'LBL_REPEAT_TYPE' => 'Ponovi',
    'LBL_REPEAT_INTERVAL' => 'Vsak',
    'LBL_REPEAT_END' => 'Konec',
    'LBL_REPEAT_END_AFTER' => 'po',
    'LBL_REPEAT_OCCURRENCES' => 'ponovitve',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Ponavljaj do',
    'LBL_REPEAT_COUNT' => 'Število ponovitev',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Dogodek',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Naslov:',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'ure',
    'LBL_MINSS_ABBREV' => 'minute ',
    'LBL_LOCATION' => 'Lokacija:',
    'LBL_STATUS' => 'Stanje:',
    'LBL_DESCRIPTION' => 'Opis: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Pri iskanju je prišlo do napake. Morda iskalni niz ni pravilen.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Iskanje po vpisanem nizu ni vrnilo rezultata.',

    'LNK_TASK_VIEW' => 'View Task',
);
