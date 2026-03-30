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
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Fronta',
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
    'LBL_NO_ACCESS' => 'Nemáte přístup k této oblasti.  Obraťte se na správce webu pro získání přístupu',
    'LBL_NO_RESULTS_IN_MODULE' => ' -- Žádné hodnoty --',
    'LBL_NO_RESULTS' => '<h2>Žádné hodnoty nenalezeny. Opakujte, prosím, hledání.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Tipy pro vyhledávání:</h3><ul><li>Přesvědčte se, že máte správně vybrané kategorie.</li><li>Rozšiřte svá vyhledávací kritéria.</li><li>Pokud stále nemůžete najít žádné výsledky, vyzkoušejte rozšířené vyhledávání.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Feed novinek',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Zítra',
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
    'LBL_SEARCH_RESULTS' => 'Výsledky vyhledávání',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Náhledy modulu',
        'Portal' => 'Portál',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Různé'
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

    'LBL_DASHLET_DELETE' => 'Smazat SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Obnovit SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Editovat SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Mé CRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Základní grafy',

    'LBL_DASHLET_SEARCH' => 'Najít SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Sestavení',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - poskytovatelé CE framework',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Je specifikováno nesprávné umístění stránky',
    'LBL_DASHLET_OPT_URL' => 'Umístění webové stránky',
    'LBL_DASHLET_OPT_HEIGHT' => 'Výška Dashletu (v pixelech)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM novinky',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Prozkoumat SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ikona Domů',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Rychlý návrat na svou domovskou stránku řídicího panelu jedním klepnutím.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Všechny vaše důležité moduly jsou zde.',
    'LBL_TOUR_MORE' => 'Další moduly',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Ostatní moduly jsou zde.',
    'LBL_TOUR_SEARCH' => 'Full-textové vyhledávání',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Vyhledávání je nyní mnohem lepší.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notifikace aplikace SuiteCRM bude zobrazeno zde.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Přístup k profilu, nastavení a odhlášení.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Rychlé vytvoření záznamů bez ztráty svého místa.',
    'LBL_TOUR_FOOTER' => 'Sbalitelné zápatí',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Jednoduše rozbalit a sbalit zápatí.',
    'LBL_TOUR_CUSTOM' => 'Vlastní aplikace',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Vlastní integrace půjdou sem.',
    'LBL_TOUR_BRAND' => 'Vaše značka',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Zde bude vaše logo. Přejeďte myší pro další informace.',
    'LBL_TOUR_WELCOME' => 'Vítejte na SuiteCRM',
    'LBL_TOUR_WATCH' => 'Podívejte se, co je nového v SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""> <li class="icon-ok">Nový zjednodušený navigační panel</li> <li class="icon-ok">Nové skládací zápatí</li> <li class="icon-ok">Lepší Hledání</li> <li class="icon-ok">Aktualizované menu akcí</li></ul><p>a mnohem více!</p>',
    'LBL_TOUR_VISIT' => 'Pro více informací prosím navštivte naši aplikaci',
    'LBL_TOUR_DONE' => 'Hotovo!',
    'LBL_TOUR_REFERENCE_1' => 'Vždy můžete odkazovat na naši',
    'LBL_TOUR_REFERENCE_2' => 'prostřednictvím odkazu "Podpora" na kartě Profil.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentace',
    'LBL_TOUR_CALENDAR_URL_1' => 'Sdílíte Váš SuiteCRM kalendář s aplikacemi 3. stran jako Microsoft Outlook nebo Exchange? Pokud ano, máte nové URL. Toto nové URL je mnohem bezpečnější a obsahuje soukromý klíč, který zabrání neoprávněnému zveřejnění vašeho kalendáře.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Získat novou adresu URL sdíleného kalendáře.',
    'LBL_CONTRIBUTORS' => 'Přispěvatelé',
    'LBL_ABOUT_SUITE' => 'O SuiteCRM',
    'LBL_PARTNERS' => 'Partneři',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Open source CRM pro svět',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite od Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps od Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Vypočtená pole Workflow jsou poskytována společností Diligent - technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'O SuiteCRM překladech',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Společný překlad komunity SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Překlad vytvořené pomocí Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM je publikován pod licencí open source - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Veškerý kód SuiteCRM spravovaný a vyvíjený v rámci projektu bude vydán jako open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM podpora je k dispozici v bezplatné i placené verzi',

    'LBL_SUITE_PARTNERS' => 'Máme věrné SuiteCRM partnery, kteří se zajímají o open source. Chcete-li zobrazit seznam našich partnerů, navštivte naše webové stránky.',

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
    'LBL_DURATION' => 'Trvání: ',
    'LBL_NAME' => 'Nadpis: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Požadovaný vyhledávač nelze najít. Zkuste vyhledat znovu.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Nepodařilo se připojit k serveru Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Došlo k vnitřní chybě hledání.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Došlo k neznámé chybě při vyhledávání.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Pokud potíže potrvají, obraťte se na správce. Další informace jsou dostupné v protokolech.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
