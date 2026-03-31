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
    'LBL_NEW_FORM_TITLE' => 'Kapcsolattartó felvitel',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Adatcsatornám',
    'LBL_PIPELINE_FORM_TITLE' => 'Folyamat az értékesítési szakaszban',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Folyamat az értékesítési szakaszban',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_LEAD' => 'Vezető létrehozása',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Email archiválása',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => 'Levélírás',
    'LBL_NO_ACCESS' => 'Ön nem férhet hozzá ehhez az oldalhoz. Lépjen kapcsolatba a webhely rendszergazdájával, a hozzáféréshez',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nincs találat --',
    'LBL_NO_RESULTS' => 'Nem volt találat. Kérjük, keressen újra!',
    'LBL_NO_RESULTS_TIPS' => 'Győződjön meg róla, hogy a megfelelő kategóriát választotta ki.<br />Bővítse a keresési feltételeket.<br />Ha még mindig nem talál semmilyen eredményt próbálja meg a speciális keresési lehetőséget.',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Hírforrás',
    'LBL_CLOSE_DASHLETS' => 'Bezárás',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Holnap',
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
    'LBL_CHARTS' => 'Diagramok',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Keresés eredménye',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Modul Nézetek',
        'Portal' => 'Portál',
        'Charts' => 'Diagramok',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Vegyes'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Általános',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Megnevezés',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'Vezérlőelem törlése',
    'LBL_DASHLET_REFRESH' => 'Vezérlőelem frissítése',
    'LBL_DASHLET_EDIT' => 'Vezérlőelem módosítása',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Bezárás',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Alap diagramok',

    'LBL_DASHLET_SEARCH' => 'Vezérlőelem keresése',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'változat',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - CE framework biztosítói',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Megnevezés',
    'LBL_DASHLET_INCORRECT_URL' => 'Helytelen weboldal címet adott meg',
    'LBL_DASHLET_OPT_URL' => 'Weboldal helye',
    'LBL_DASHLET_OPT_HEIGHT' => 'Dashlet magasság (képpontban)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM hírek',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Fedezze fel a SuiteCRM-et!',
    'LBL_BASIC_SEARCH' => 'Gyors szűrő' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Speciális szűrő' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Honlap ikon',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Gyorsan visszajuthat a Honlapi vezérlőpultra egy kattintással.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Az összes fontos modulja itt található.',
    'LBL_TOUR_MORE' => 'További modulok',
    'LBL_TOUR_MORE_DESCRIPTION' => 'A többi modulja itt található.',
    'LBL_TOUR_SEARCH' => 'Teljes szöveges keresés',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'A keresés sokkal jobbá vált.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM alkalmazás értesítések itt jelennek meg.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Profil, beállítások és kilépés elérése.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Gyorsan létrehozhat rekordokat anélkül, hogy elnavigálna.',
    'LBL_TOUR_FOOTER' => 'Lábléc összecsukása',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Könnyen kinyithatja és összecsukhatja a láblécet.',
    'LBL_TOUR_CUSTOM' => 'Saját alkalmazások',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Saját integrációk ide kerülnek.',
    'LBL_TOUR_BRAND' => 'Saját brandje',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'A saját logója ide kerül. Állítsa fölé az egeret több információért.',
    'LBL_TOUR_WELCOME' => 'Üdvözli Önt a SuiteCRM',
    'LBL_TOUR_WATCH' => 'Nézze meg mi az új a SuiteCRM-ben',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Új egyszerűsített navigációs sáv</li><li class="icon-ok">Új összecsukható lábléc</li><li class="icon-ok">Javított keresés</li><li class="icon-ok">Frissített műveletek menü</li></ul><p>és még sok más!</p>',
    'LBL_TOUR_VISIT' => 'Több részletért kérjük látogassa meg az applikációnkat',
    'LBL_TOUR_DONE' => 'Kész van!',
    'LBL_TOUR_REFERENCE_1' => 'Mindig hivatkozhat a saját',
    'LBL_TOUR_REFERENCE_2' => 'a "terméktámogatási forum" linken a profil fül alatt.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentáció',
    'LBL_TOUR_CALENDAR_URL_1' => 'Megosztja a SuiteCRM naptárát harmadik fél alkalmazásokkal, például a Microsoft Outlookkal vagy az Exchange-szel? Ha igen, akkor van egy új URL-je. Ez az új, biztonságosabb URL tartalmaz egy személyes kulcsot, amely megakadályozza a naptár jogosulatlan közzétételét.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Szerezze be az új megosztott naptár-URL-jét.',
    'LBL_CONTRIBUTORS' => 'Közreműködők',
    'LBL_ABOUT_SUITE' => 'SuiteCRM névjegy',
    'LBL_PARTNERS' => 'Partnerek',
    'LBL_EDIT_ALL_RECURRENCES' => 'Minden ismétlődés szerkesztése',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Minden ismétlődés törlése',
    'LBL_CONFIRM_REMOVE' => 'Biztos benne, hogy el kívánja távolítani ezt a rekordot?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Nyílt forráskódú CRM a világ számára',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite fejlesztője Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps fejlesztője Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Számított mezők a Workflowban, amit a diligent technology & business consulting GmbH hozzájárult a fejlesztéshez.',

    'LBL_LANGUAGE_ABOUT' => 'A SuiteCRM fordításokról',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'A SuiteCRM közösség által végzett közösségi, együttműködő fordítás',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'A fordítást a Crowdin segítségével végeztük',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM nyílt forráskódú GPL3 licensz szerint publikált.',
    'LBL_ABOUT_SUITE_4' => 'Minden SuiteCRM kód a nyílt forráskódú GNU GPL3 szerint fejlesztett és terjesztett.',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM támogatás ingyenes és fizetős konstrukciókban. ',

    'LBL_SUITE_PARTNERS' => 'Mi hűséges SuitCRM partnerek vagyunk, akik elkötelezettek a nyílt forráskód iránt. Ha meg szeretné nézni a teljes partnerlistát, akkor kattintson a honlapunkra!',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Törlés',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Bezárás',

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
    'LNK_EVENT' => 'Esemény',
    'LNK_EVENT_VIEW' => 'Esemény megtekintése',
    'LBL_DATE' => 'Dátum: ',
    'LBL_DURATION' => 'Időtartam: ',
    'LBL_NAME' => 'Megnevezés: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'óra',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Hiba történt keresés végrehajtása közben. A keresőszintaxisa lehet nem érvényes.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Nem találom a kért keresőmotort. Próbálja meg a keresést ismét.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Nem tudtam kapcsolatot létesíteni az Ellasticsearch szerverrel.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Belső keresési hiba történt.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Ismeretlen hiba a keresés végrehajtása közben.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Lépjen kapcsolatba az adminisztrátorral, ha a probléma továbbra is fennáll. Több részlet a logban található.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'Az egyik vagy több modul keresési indexe nem található. Győződjön meg róla, hogy a crontab konfigurálva és fut, nyissa meg az Elasticsearch konfigurációját, és kattintson a "Teljes indexelés ütemezése" gombra, valamint fontolja meg az "Elasticsearch Indexer" nevű Ütemező feladat létrehozását, ha még nem létezik.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Nincs eredmény a keresési feltételeknek megfelelően. Próbálja meg bővíteni a keresési feltételeket.',

    'LNK_TASK_VIEW' => 'Feladat megtekintése',
);
