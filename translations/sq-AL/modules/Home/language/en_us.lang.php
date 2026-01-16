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
    'LBL_MODULE_NAME' => 'Ballina',
    'LBL_NEW_FORM_TITLE' => 'Kontakt i ri',
    'LBL_FIRST_NAME' => 'Emri',
    'LBL_LAST_NAME' => 'Mbiemri',
    'LBL_LIST_LAST_NAME' => 'Mbiemri',
    'LBL_PHONE' => 'Telefoni',
    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Tubacioni im',
    'LBL_PIPELINE_FORM_TITLE' => 'Tubacionet sipas fazës së shitjeve',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Tubacionet sipas fazës së shitjeve',
    'LNK_NEW_CONTACT' => 'Krijo kontakt',
    'LNK_NEW_ACCOUNT' => 'krijo llogari',
    'LNK_NEW_OPPORTUNITY' => 'Krijo mundësi',
    'LNK_NEW_LEAD' => 'krijo udhëheqje',
    'LNK_NEW_CASE' => 'Krijo rast',
    'LNK_NEW_NOTE' => 'Krijo shënim ose bashkëngjitje',
    'LNK_NEW_CALL' => 'Thirje identifikuese',
    'LNK_NEW_EMAIL' => 'Emaili i arkivuar',
    'LNK_NEW_MEETING' => 'Cakto mbledhje',
    'LNK_NEW_TASK' => 'Krijo detyrë',
    'LNK_NEW_BUG' => 'Raporto Bug',
    'LNK_NEW_SEND_EMAIL' => 'Ndërto email',
    'LBL_NO_ACCESS' => 'Nuk keni qasje për këtë sipërfaqe. Kontakoni administratorin e faqes për të siguruar qasje',
    'LBL_NO_RESULTS_IN_MODULE' => 'Nuk ka rezultate',
    'LBL_NO_RESULTS' => 'Nuk u gjet asnjë rezultat. Ju lutemi provoni përsësri',
    'LBL_NO_RESULTS_TIPS' => 'Sigurohuni që keni kategoritë e duhura të selektuara më sipër.<br />Zgjeroni kriteret e kërkimit tuaj.<br />Nëse ju ende nuk mund të gjeni ndonjë rezultat provoni opsionin e kërkimit të avancuar.',

    'LBL_ADD_DASHLETS' => 'Shto nënvizime të SuiteCRM',
    'LBL_WEBSITE_TITLE' => 'ueb faqja',
    'LBL_RSS_TITLE' => 'Furnizimet e reja',
    'LBL_CLOSE_DASHLETS' => 'Mbyll:',
    'LBL_OPTIONS' => 'Opcionet',
    // dashlet search fields
    'LBL_TODAY' => 'Sot',
    'LBL_YESTERDAY' => 'Dje',
    'LBL_TOMORROW' => 'Nesër',
    'LBL_NEXT_WEEK' => 'Java e ardhëshme',
    'LBL_LAST_7_DAYS' => '7 ditët e fundit',
    'LBL_NEXT_7_DAYS' => '7 ditët e ardhëshme',
    'LBL_LAST_MONTH' => 'Muajin e kaluar',
    'LBL_NEXT_MONTH' => 'Muajin e ardhshëm',
    'LBL_LAST_YEAR' => 'Vitin e kaluar',
    'LBL_NEXT_YEAR' => 'Vitin e ardhshëm',
    'LBL_LAST_30_DAYS' => '30 ditët e fundit',
    'LBL_NEXT_30_DAYS' => '30 ditët e ardhëshme',
    'LBL_THIS_MONTH' => 'Këtë muaj',
    'LBL_THIS_YEAR' => 'Këtë vit',

    'LBL_MODULES' => 'Modulet',
    'LBL_CHARTS' => 'Paneli',
    'LBL_TOOLS' => 'Mjetet',
    'LBL_WEB' => 'Uebi',
    'LBL_SEARCH_RESULTS' => 'Rezultatet e kërkimit',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Pamjet e modulës',
        'Portal' => 'Portali',
        'Charts' => 'Paneli',
        'Tools' => 'Mjetet',
        'Miscellaneous' => 'Të ndryshme'
    ),
    'LBL_ADDING_DASHLET' => 'Shtimi i nënvizimit të SuiteCRM...',
    'LBL_ADDED_DASHLET' => 'Nënvizimi i SuiteCRM është shtuar',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'A jeni të sigurt që dëshironi të largoni nënvizimin e SuiteCRM?',
    'LBL_REMOVING_DASHLET' => 'Largimi i Nënvizimit të SuiteCRM...',
    'LBL_REMOVED_DASHLET' => 'Nënvizimi i Suarg është larguar',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'E përgjithëshme',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'fFlterë',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Vetëm artikujtë e mi.',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titulli',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Shfaq reshtat',

    'LBL_DASHLET_DELETE' => 'Fshi nënvizimet e SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Rifresko nënvizimet e SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Ndrysho nënvizimet e SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'SuiteCRM- i im',
    'LBL_CLOSE_SITEMAP' => 'Mbyll:',

    'LBL_SEARCH' => 'Kërkim',
    'LBL_CLEAR' => 'Fshi',

    'LBL_BASIC_CHARTS' => 'Grafik bazik',

    'LBL_DASHLET_SEARCH' => 'Gjej nënvizimet e SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Versioni',
    'LBL_BUILD' => 'ndërto',

    'LBL_SOURCE_SUGAR' => 'SuiteCRM - Në botë më i njohur për shitje të fuqisë së informacioneve automatike aplikacioni është i krijuar nga SuiteCRMCRM Inc.',

    'LBL_DASHLET_TITLE' => 'Faqet e mia',
    'LBL_DASHLET_OPT_TITLE' => 'Titulli',
    'LBL_DASHLET_INCORRECT_URL' => 'Incorrect website location is specified',
    'LBL_DASHLET_OPT_URL' => 'Lokacioni i faqës së internetit',
    'LBL_DASHLET_OPT_HEIGHT' => 'Lartësia Dashlet (në pixels)',
    'LBL_DASHLET_SUITE_NEWS' => 'Lajme SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Zbulimi SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Home Icon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Quickly get back to your Home Page dashboard in one click.',
    'LBL_TOUR_MODULES' => 'Modulet',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'All your important modules are here.',
    'LBL_TOUR_MORE' => 'More Modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'The rest of your modules are here.',
    'LBL_TOUR_SEARCH' => 'Kërkim i tekstit të plotë',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Search just got a whole lot better.',
    'LBL_TOUR_NOTIFICATIONS' => 'Shënimet',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profili',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Access profile, settings and logout.',
    'LBL_TOUR_QUICKCREATE' => 'Krijim i shpejtë',
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
    'LBL_EDIT_ALL_RECURRENCES' => 'ndrysho të gjitha përsëritjet',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Largo të gjitha përsëritjet',
    'LBL_CONFIRM_REMOVE' => 'A jeni të sigurt që dëshironi të largoni këtë regjistrim?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM for the world',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite by Jason Eggers',
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

    'LBL_SAVE_BUTTON' => 'Ruaj',
    'LBL_DELETE_BUTTON' => 'Fshi',
    'LBL_APPLY_BUTTON' => 'Apliko',
    'LBL_SEND_INVITES' => 'Dërgo ftesat',
    'LBL_CANCEL_BUTTON' => 'Anulo',
    'LBL_CLOSE_BUTTON' => 'Mbyll:',

    'LBL_CREATE_NEW_RECORD' => 'Krijo aktivitet',
    'LBL_CREATE_CALL' => 'Thirje identifikuese',
    'LBL_CREATE_MEETING' => 'Cakto mbledhje',

    'LBL_GENERAL_TAB' => 'Detajet',
    'LBL_PARTICIPANTS_TAB' => 'Të ftuarit',
    'LBL_REPEAT_TAB' => 'Përsërit',

    'LBL_REPEAT_TYPE' => 'Përsërit',
    'LBL_REPEAT_INTERVAL' => 'Intervali',
    'LBL_REPEAT_END' => 'Përfundim',
    'LBL_REPEAT_END_AFTER' => 'pas',
    'LBL_REPEAT_OCCURRENCES' => 'ndodhitë',
    'LBL_REPEAT_END_BY' => 'Nga',
    'LBL_REPEAT_DOW' => 'në',
    'LBL_REPEAT_UNTIL' => 'përsërit deri',
    'LBL_REPEAT_COUNT' => 'Numri i ndodhive',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Titulli: ',
    'LBL_HOUR_ABBREV' => 'orë',
    'LBL_HOURS_ABBREV' => 'orët',
    'LBL_MINSS_ABBREV' => 'minutat',
    'LBL_LOCATION' => 'Lokacioni',
    'LBL_STATUS' => 'statusi',
    'LBL_DESCRIPTION' => 'Përshkrimi:',
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
