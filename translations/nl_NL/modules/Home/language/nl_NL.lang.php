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
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mijn pijplijn',
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
    'LBL_NO_ACCESS' => 'U heeft geen toegang tot dit gebied. Neem contact op met uw sitebeheerder om toegang te verkrijgen',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Geen resultaten --',
    'LBL_NO_RESULTS' => '<h2>Er zijn geen resultaten gevonden.</h2>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Tips voor zoeken</h3><ul><li>Kies hierboven de juiste categorieën</li><li>Verbreed de zoek criteria</li><li>Probeer anders de geavanceerde zoekmethode van deze module</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Nieuws feed',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Morgen',
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
    'LBL_SEARCH_RESULTS' => 'Zoekresultaten',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Module overzicht',
        'Portal' => 'Portaal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Verschillende'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'Verwijder SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Ververs SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Bewerk SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Mijn CRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Basis grafieken',

    'LBL_DASHLET_SEARCH' => 'Zoek een SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - aanbieders van CE framework',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Onjuiste website locatie gespecificeerd',
    'LBL_DASHLET_OPT_URL' => 'Website locatie',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet Hoogte (in pixels)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM Nieuws',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Ontdek SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Start icoon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Snel terug naar de Start Dashboard pagina in 1 klik.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Alle belangrijke modulen hier.',
    'LBL_TOUR_MORE' => 'Meer modulen',
    'LBL_TOUR_MORE_DESCRIPTION' => 'De rest van de modulen hier.',
    'LBL_TOUR_SEARCH' => 'Doorzoek volledige tekst',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Zoeken wordt een heel stuk beter.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM applicatie berichten komen hier.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Toegang profiel, instellen en uitloggen.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Snel records aanmaken zonder je plek te verliezen.',
    'LBL_TOUR_FOOTER' => 'Inklapbare voettekst',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Makkelijk de footer uibreiden en uitklappen.',
    'LBL_TOUR_CUSTOM' => 'Op maat gemaakte applicaties',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Op maat gemaakte integraties komen hier.',
    'LBL_TOUR_BRAND' => 'Jouw Merk',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Jouw logo komt hier. Beweeg de muis erover voor meer informatie.',
    'LBL_TOUR_WELCOME' => 'Welkom bij SuiteCRM',
    'LBL_TOUR_WATCH' => 'Kijk wat is nieuw in SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nieuwe simpele menu bar</li><li class="icon-ok">Nieuw uitklapbare footer</li><li class="icon-ok">Verbeterd zoeken</li><li class="icon-ok">Bijgewerkte akties menu</li></ul><p>en veel meer!</p>',
    'LBL_TOUR_VISIT' => 'Voor meer informatie bezoek onze applicatie',
    'LBL_TOUR_DONE' => 'Je bent klaar!',
    'LBL_TOUR_REFERENCE_1' => 'Je kan altijd referen aan onze',
    'LBL_TOUR_REFERENCE_2' => 'door de "Help" link onder de profiel tab.',
    'LNK_TOUR_DOCUMENTATION' => 'documentatie',
    'LBL_TOUR_CALENDAR_URL_1' => 'Deel jij je SuiteCRM kalender met applicaties van een 3e partij, zoals Microsoft Outlook of Exchange? Zo ja, dan heb je een nieuwe URL. Deze nieuwe, veiligere URL voorkomt ongeoorloofde publicatie van je kalender door gebruik te maken van een persoonlijke sleutel.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Haal op je nieuw gedeelde agenda URL.',
    'LBL_CONTRIBUTORS' => 'Inzenders',
    'LBL_ABOUT_SUITE' => 'Over SuiteCRM',
    'LBL_PARTNERS' => 'Partners',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is geschreven en onderhouden door SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM voor de wereld',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite door Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps door Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Ontwerp bijgedragen door Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Bijdragen aan SuiteCRM door ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow berekende velden zijn bijgedragen door diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Over SuiteCRM vertalingen',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Collaborative vertaling door de SuiteCRM Gemeenschap',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Vertaling gemaakt met behulp van Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM is gepubliceerd onder de licentie opensource - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Alle SuiteCRM code beheerd en ontwikkeld door het project zal worden vrijgegeven als open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM ondersteuning is beschikbaar in zowel gratis en betaalde voor opties',

    'LBL_SUITE_PARTNERS' => 'We hebben de trouwe SuiteCRM partners die hartstochtelijk zijn over open source. Zie onze website voor het bekijken van onze volledige partnerlijst.',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Datum: ',
    'LBL_DURATION' => 'Duur: ',
    'LBL_NAME' => 'Titel: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'De gewenste zoekmachine is niet gevonden. Probeer de zoekactie opnieuw.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Verbinding maken met de Elasticsearch server is mislukt.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Een interne fout naar de zoekopdracht is opgetreden.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Een onbekende fout is opgetreden bij het uitvoeren van de zoekopdracht.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Neem contact op met een beheerder als het probleem zich blijft voordoen. Meer informatie beschikbaar in de logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'De zoekindex voor een of meer modules kon niet worden gevonden. Zorg ervoor dat crontab is geconfigureerd en actief, open de Elasticsearch configuratie en klik op "Plan volledige indexering" en overweeg een Taak "Elasticsearch Indexer" te maken als deze niet bestaat.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
