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
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Min salgstrakt',
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
    'LBL_NO_ACCESS' => 'Du har ikke tilgang til dette området. Kontakt administrator for å få tilgang.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Ingen treff --',
    'LBL_NO_RESULTS' => '<h2>Fant ingenting. Prøv et nytt søk.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Søketips:</h3><ul><li>Sørg for at du har valgt de riktige kategoriene over.</li><li>Utvid søkekriteriene dine</li><li>Dersom du fortsatt ikke kan finne noen resultater, prøv avanser søk</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Nyhetsfeed',
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
    'LBL_SEARCH_RESULTS' => 'Søkeresultat',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Modulvisninger',
        'Portal' => 'Portal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'iverse'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Generell',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Tittel',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'Slett SuiteCRM-dashlet',
    'LBL_DASHLET_REFRESH' => 'Oppfrist SuiteCRM-dashlet',
    'LBL_DASHLET_EDIT' => 'Rediger SuiteCRM-dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Min CRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Diagrammer',

    'LBL_DASHLET_SEARCH' => 'Finn SuiteCRM-dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Bygge',

    'LBL_SOURCE_SUGAR' => 'SuiteCRM Inc - leverandør av CE-rammeverk',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Tittel',
    'LBL_DASHLET_INCORRECT_URL' => 'Ukorrekt nettsidelokasjon oppgitt.',
    'LBL_DASHLET_OPT_URL' => 'Hjemmeside adresse',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet høyde (i piksler)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM nyheter',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Finn ut  mer om SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Hjemikon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Gå tilbake til hjemsiden din med et klikk.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Her er alle de viktige modulene dine',
    'LBL_TOUR_MORE' => 'Flere moduler.',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Her er resten av modulene dine.',
    'LBL_TOUR_SEARCH' => 'Fulltekstsøk.',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Søking ble akkurat veldig mye bedre.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Her kommer SuiteCRM programvarslinger.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Se profil, innstillinger og logg ut.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Opprett nye oppføringer raskt, uten å miste hvor du er.',
    'LBL_TOUR_FOOTER' => 'Sammenleggbar bunntekst',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Utvid og legg sammen bunnteksten enkelt.',
    'LBL_TOUR_CUSTOM' => 'Tilpassede apper',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Her kommer spesialintegrasjoner.',
    'LBL_TOUR_BRAND' => 'Ditt merke',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Hit skal logoen din. Du kan holde musepekeren over for mer informasjon.',
    'LBL_TOUR_WELCOME' => 'Velkommen til SuiteCRM',
    'LBL_TOUR_WATCH' => 'Se hva som er nytt i SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Ny og forenklet navigasjonslinje</li><li class="icon-ok">Ny sammenleggbar bunntekst</li><li class="icon-ok">Bedre søk</li><li class="icon-ok">Oppdatert handlingsmeny</li></ul><p>og mye mye mer!</p>',
    'LBL_TOUR_VISIT' => 'For mer informasjon, besøk vårt program',
    'LBL_TOUR_DONE' => 'Ferdig!',
    'LBL_TOUR_REFERENCE_1' => 'Du kan alltid referere til vår',
    'LBL_TOUR_REFERENCE_2' => 'via Brukerstøttelenken i profilfanen.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentasjon',
    'LBL_TOUR_CALENDAR_URL_1' => 'Sender du din SuiteCRM-kalender til 3. partsprogrammer, som for eksempel Microsoft Outlook eller Exchange? Isåfall har du nå en ny URL. Denne nye URLen er sikrere enn den gamle, fordi den inkluderer en personlig nøkkel som forhindrer uautorisert tilgang til kalenderen din.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Hent den nye delte kalender-URLen din.',
    'LBL_CONTRIBUTORS' => 'Bidragsytere',
    'LBL_ABOUT_SUITE' => 'Om SuiteCRM',
    'LBL_PARTNERS' => 'Partnere',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM med åpen kildekode, for hele verden.',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite av Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Kart av Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Om SuiteCRM oversettelser',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Samarbeidende oversettelse av SuiteCRM samfunnet',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Oversettelse opprettet ved hjelp av Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM er utgitt under en åpen kildekode-lisens - GPL3',
    'LBL_ABOUT_SUITE_4' => 'All SuiteCRM-kode som blir forvaltet og utviklet av SuiteCRM-prosjektet vill bli utgitt som åpen kildekode under GPL3',
    'LBL_ABOUT_SUITE_5' => 'Brukerstøtte for SuiteCRM finnes i både gratis og i betalte former.',

    'LBL_SUITE_PARTNERS' => 'Vi har loyale SuiteCRM-partnere som er lidenskapelig opptatt av åpen kildekode. For å se vår fullstendige partnerliste, se nettsiden vår.',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Bruk',
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
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Tittel:',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'timer',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'En feil har oppstått under søket. Din søke syntaks kan være ugjyldig.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Dine søkeord ga ingen treff. Forsøk å utvide ditt søk.',

    'LNK_TASK_VIEW' => 'View Task',
);
