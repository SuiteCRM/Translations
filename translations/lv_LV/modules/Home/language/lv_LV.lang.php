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
    'LBL_MODULE_NAME' => 'Sākums',
    'LBL_NEW_FORM_TITLE' => 'Jauna kontaktpersona',
    'LBL_FIRST_NAME' => 'Vārds:',
    'LBL_LAST_NAME' => 'Uzvārds:',
    'LBL_LIST_LAST_NAME' => 'Uzvārds',
    'LBL_PHONE' => 'Tālrunis:',
    'LBL_EMAIL_ADDRESS' => 'E-pasts:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mana piltuve',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline, pēc pārdošanas fāzes',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline, pēc pārdošanas fāzes',
    'LNK_NEW_CONTACT' => 'Izveidot kontaktpersonu',
    'LNK_NEW_ACCOUNT' => 'Izveidot uzņēmumu',
    'LNK_NEW_OPPORTUNITY' => 'Jauna iespēja',
    'LNK_NEW_LEAD' => 'Izveidot interesentu',
    'LNK_NEW_CASE' => 'Izveidot pieteikumu',
    'LNK_NEW_NOTE' => 'Izveidot piezīmi vai pielikumu',
    'LNK_NEW_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LNK_NEW_EMAIL' => 'Arhivēt E-pastu [Alt+K]',
    'LNK_NEW_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LNK_NEW_TASK' => 'Izveidot uzdevumu [Alt+N]',
    'LNK_NEW_BUG' => 'Paziņot par kļūdu',
    'LNK_NEW_SEND_EMAIL' => 'Rakstīt e-pastu',
    'LBL_NO_ACCESS' => 'Jums nav piekļuves tiesību šim apgabalam. Sazinieties ar vietnes administratoru, lai iegūtu piekļuvi.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nav rezultātu --',
    'LBL_NO_RESULTS' => '<h2>Nekas netika atrasts. Meklējiet vēlreiz.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Meklēšanas padomi:</h3><ul><li>Pārliecinieties ka izvēlēta pareizas kategorijas meklēšanai.</li><li>Paplašiniet meklēšanas kritērijus.</li><li>Ja joprojām nav iespējams atrast rezultātus, pamēģiniet detalizētu meklēšanu.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Pievienot dašletus',
    'LBL_WEBSITE_TITLE' => 'Mājas lapa',
    'LBL_RSS_TITLE' => 'Ziņu barotne',
    'LBL_CLOSE_DASHLETS' => 'Slēgt',
    'LBL_OPTIONS' => 'Opcijas',
    // dashlet search fields
    'LBL_TODAY' => 'Šodien',
    'LBL_YESTERDAY' => 'Vakar',
    'LBL_TOMORROW' => 'Rīt',
    'LBL_NEXT_WEEK' => 'Nākamajā nedēļā',
    'LBL_LAST_7_DAYS' => 'Pēdējās 7 dienās',
    'LBL_NEXT_7_DAYS' => 'Nākamajās 7 dienās',
    'LBL_LAST_MONTH' => 'Pēdējā mēnesī',
    'LBL_NEXT_MONTH' => 'Nākamais mēnesis',
    'LBL_LAST_YEAR' => 'Pagājušajā gadā',
    'LBL_NEXT_YEAR' => 'Nākamais gads',
    'LBL_LAST_30_DAYS' => 'Pēdējās 30 dienās',
    'LBL_NEXT_30_DAYS' => 'Nākamajās 30 dienās',
    'LBL_THIS_MONTH' => 'Šajā mēnesī',
    'LBL_THIS_YEAR' => 'Šajā gadā',

    'LBL_MODULES' => 'Moduļi:',
    'LBL_CHARTS' => 'Diagrammas',
    'LBL_TOOLS' => 'Rīki',
    'LBL_WEB' => 'Tīmeklis',
    'LBL_SEARCH_RESULTS' => 'Meklēšanas rezultāts',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Moduļu skati',
        'Portal' => 'Portāls',
        'Charts' => 'Diagrammas',
        'Tools' => 'Rīki',
        'Miscellaneous' => 'Dažādi'
    ),
    'LBL_ADDING_DASHLET' => 'Dašlets tiek pievienots...',
    'LBL_ADDED_DASHLET' => 'Dašlets pievienots',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Vai tiešām vēlaties noņemt SuiteCRM dašletu?',
    'LBL_REMOVING_DASHLET' => 'Dašlets tiek noņemts...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dašlets noņemts',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Vispārīgi',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Tikai mani ieraksti',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulli',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Rādīt rindas',

    'LBL_DASHLET_DELETE' => 'Dzēst SuiteCRM dašletu',
    'LBL_DASHLET_REFRESH' => 'Atjaunināt SuiteCRM dašletu',
    'LBL_DASHLET_EDIT' => 'Rediģēt SuiteCRM Dašletu',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Mans SuiteCRM',
    'LBL_CLOSE_SITEMAP' => 'Slēgt',

    'LBL_SEARCH' => 'Meklēšana',
    'LBL_CLEAR' => 'Dzēst',

    'LBL_BASIC_CHARTS' => 'Pamata diagrammas',

    'LBL_DASHLET_SEARCH' => 'Meklēt SuiteCRM dašletu',

//ABOUT page
    'LBL_VERSION' => 'Versija',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'Mani portāli',
    'LBL_DASHLET_OPT_TITLE' => 'Titulli',
    'LBL_DASHLET_INCORRECT_URL' => 'Norādīta nederīga mājas lapas atrašanās vieta',
    'LBL_DASHLET_OPT_URL' => 'Vietnes adrese',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dašleta augstums (pikseļos)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM Ziņas',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Iepazīsti SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Moduļi:',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Pilna teksta meklēšana',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Paziņojumi',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profils',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Ātrā izveide',
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
    'LBL_EDIT_ALL_RECURRENCES' => 'Rediģēt visus atkārtojumus',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Dzēst visus atkārtojumus',
    'LBL_CONFIRM_REMOVE' => 'Vai tiešām vēlaties noņemt ierakstu?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps by Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'About SuiteCRM Translations',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative translation by the SuiteCRM Community',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Translation created using Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is published under an open source licence - AGPLv3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM code managed and developed by the project will be released as open source - AGPLv3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM support is available in both free and paid-for options',

    'LBL_SUITE_PARTNERS' => 'We have loyal SuiteCRM partners who are passionate about open source. To view our full partner list, see our website.',

    'LBL_SAVE_BUTTON' => 'Pabeigt',
    'LBL_DELETE_BUTTON' => 'Dzēsts',
    'LBL_APPLY_BUTTON' => 'Apstiprināt',
    'LBL_SEND_INVITES' => 'Sūtīt uzaicinājumus [Alt+I]',
    'LBL_CANCEL_BUTTON' => 'Atcelt',
    'LBL_CLOSE_BUTTON' => 'Slēgt',

    'LBL_CREATE_NEW_RECORD' => 'Izveidot darbību',
    'LBL_CREATE_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LBL_CREATE_MEETING' => 'Ieplānot tikšanos [Alt+M]',

    'LBL_GENERAL_TAB' => 'Detaļas',
    'LBL_PARTICIPANTS_TAB' => 'Ielūgtais',
    'LBL_REPEAT_TAB' => 'Atkārtošanās',

    'LBL_REPEAT_TYPE' => 'Atkārtot',
    'LBL_REPEAT_INTERVAL' => 'Intervāls',
    'LBL_REPEAT_END' => 'Beigas',
    'LBL_REPEAT_END_AFTER' => 'Pēc',
    'LBL_REPEAT_OCCURRENCES' => 'atkārtoti notikumi',
    'LBL_REPEAT_END_BY' => 'Ar',
    'LBL_REPEAT_DOW' => 'Uz',
    'LBL_REPEAT_UNTIL' => 'Atkārtot, kamēr',
    'LBL_REPEAT_COUNT' => 'Atkārtošanos skaits',
    'LBL_REPEAT_LIMIT_ERROR' => 'Jūsu pieprasījums gatavojas izveidot vairāk kā $limit sanāksmes.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Virsraksts:',
    'LBL_HOUR_ABBREV' => 'stundas',
    'LBL_HOURS_ABBREV' => 'stundas',
    'LBL_MINSS_ABBREV' => 'minūtes',
    'LBL_LOCATION' => 'Vieta:',
    'LBL_STATUS' => 'Statuss:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
