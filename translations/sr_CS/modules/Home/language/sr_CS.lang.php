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
    'LBL_MODULE_NAME' => 'Home',
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Moj prodajni levak',
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
    'LBL_NO_ACCESS' => 'Nemate pristup ovom delu. Kontaktirajte administratora vašeg sajta kako biste dobili pristup.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nema rezultata --',
    'LBL_NO_RESULTS' => '<h2>Nema nađenih rezultata. Molim, pokušajte ponovo</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Saveti za pretragu:</h3><ul><li>Proverite da li ste gore izabrali tačne kategorije.</li><li>Proširite Vaše kriterijume za pretragu.</li><li>Ako i dalje nemate nijedan rezultat pretrage pokušajte sa opcijom za naprednu pretragu.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Izvor vesti',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Sutra',
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
    'LBL_SEARCH_RESULTS' => 'Rezultat pretrage',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Pregledi modula',
        'Portal' => 'Portal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Razno'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Opšte',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'Obriši SuiteCRMdašlet',
    'LBL_DASHLET_REFRESH' => 'Osveži SuiteCRMdašlet',
    'LBL_DASHLET_EDIT' => 'Izmeni SuiteCRMdašlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Moj CRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Osnovni dijagrami',

    'LBL_DASHLET_SEARCH' => 'Nađi SuiteCRMdašlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - obezbedili CE strukturu',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Uneta je pogrešna website lokacija',
    'LBL_DASHLET_OPT_URL' => 'Lokacija web sajta',
    'LBL_DASHLET_OPT_HEIGHT' => 'Visina dašleta (u pikselima)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM Vesti',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Otkrij SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Početna ikonica',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Brzo se vratite na početnu stranicu.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Svi vaši važni moduli ovde.',
    'LBL_TOUR_MORE' => 'Još modula',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Ostali moduli.',
    'LBL_TOUR_SEARCH' => 'Pretraživanje celog teksta',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Pretraga je poboljšana.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Obaveštenja iz aplikacije će se pojaviti ovde.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Pristupi profilu, podešavanjima i odjavi se.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Brzo napravite upise, bez promene stranice.',
    'LBL_TOUR_FOOTER' => 'Futer koji može da se zatvori',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Lako raširite i skupite futer.',
    'LBL_TOUR_CUSTOM' => 'Prilagođene aplikacije',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Prilagođene integracije idu ovde.',
    'LBL_TOUR_BRAND' => 'Vaš brend',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Vaš logo ide ovde. Prevucite mišom za više informacija.',
    'LBL_TOUR_WELCOME' => 'Dobrodošli u SuiteCRM',
    'LBL_TOUR_WATCH' => 'Pogledajte šta je novo u SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Novi pojednostavljeni navigacioni meni</li><li class="icon-ok">Novi futer koji se sklapa</li><li class="icon-ok">Poboljšana pretraga</li><li class="icon-ok">Unapređen akcioni meni</li></ul><p>i još mnogo!</p>',
    'LBL_TOUR_VISIT' => 'Za više informacije podsetite našu aplikaciju',
    'LBL_TOUR_DONE' => 'Završeno!',
    'LBL_TOUR_REFERENCE_1' => 'Možete se uvek pozvati na naš',
    'LBL_TOUR_REFERENCE_2' => 'pomoću "Foruma podrške", link do istog je u profilu.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentacija',
    'LBL_TOUR_CALENDAR_URL_1' => 'Da li delite kalendar sa drugim aplikacijama, kao što je Microsoft Outlook ili Exchange? Ako je tako, imate novu adresu vašeg kalendara. Ovo je nova sigurnija adresa i uključuje personalnu šifru kako neko ne ovlašten ne bi pristupao vašem kalendaru.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Prikaži novu URL adresu kalendara.',
    'LBL_CONTRIBUTORS' => 'Doprineli',
    'LBL_ABOUT_SUITE' => 'O SuiteCRM-u',
    'LBL_PARTNERS' => 'Partneri',
    'LBL_FEATURING' => 'AOS, AOW, AOR, AOP, AOE i modul za ponovno zakazivanje od SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Otvoreni CRM za celi svet',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SigurnosniPaket od Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps od Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM logo od Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Dopineo SuiteCRM 7.3 izdanju ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'O SuiteCRM prevodima',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Zajednički prevodi od strane SuiteCRM zajednice',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Prevedno upotrebom Crowdin platforme',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM je objavljen pod licencom otvorenog koda - AGPL3',
    'LBL_ABOUT_SUITE_4' => 'Sav SuiteCRM kod kojim upravljamo i razvijamo će biti objevljen pod licencom otvorenog koda - AGPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM podrška je dostupna besplatno i kao plaćena opcija',

    'LBL_SUITE_PARTNERS' => 'Mi imamo lojalne SuiteCRM partnere koji su strastveni kada je u pitanju otvorenost koda. Da vidite listu partnera, posetite našu internet prezentaciju.',

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
    'LBL_DURATION' => 'Trajanje: ',
    'LBL_NAME' => 'Naslov: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Greška prilikom pretrage. Proverite sintaksu vašeg upita.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Traženi sistem za pretragu nije pronađen. Pokušajte ponovnu pretragu.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Greška u konekciji sa Elasticsearch serverom.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Došlo je do interne greške u vezi sa pretragom.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Došlo je do nepoznate greške prilikom pretrage.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Kontaktirajte administratora u slučaju problema. Više infomacija dostupno je u logovima.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Nema rezultata za zadati kriterijum pretrage. Proširite kriterijum.',

    // Portal Labels
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',

    'LNK_TASK_VIEW' => 'View Task',
);
