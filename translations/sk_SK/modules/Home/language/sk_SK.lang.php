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
    'LBL_MODULE_NAME' => 'Domov',
    'LBL_NEW_FORM_TITLE' => 'Nový kontakt',
    'LBL_FIRST_NAME' => 'Meno:',
    'LBL_LAST_NAME' => 'Priezvisko:',
    'LBL_LIST_LAST_NAME' => 'Priezvisko',
    'LBL_PHONE' => 'Telefón:',
    'LBL_EMAIL_ADDRESS' => 'E-mailová adresa:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Moja Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline podľa etapy predaja',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline podľa etapy predaja',
    'LNK_NEW_CONTACT' => 'Vytvoriť kontakt',
    'LNK_NEW_ACCOUNT' => 'Nový firma',
    'LNK_NEW_OPPORTUNITY' => 'Vytvoriť príležitosť',
    'LNK_NEW_LEAD' => 'Vytvoriť príležitosť',
    'LNK_NEW_CASE' => 'Vytvoriť prípad',
    'LNK_NEW_NOTE' => 'Vytvoriť poznámku alebo prílohu',
    'LNK_NEW_CALL' => 'Naplánovať hovor',
    'LNK_NEW_EMAIL' => 'Archivovať správu',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_NEW_TASK' => 'Vytvoriť úlohu',
    'LNK_NEW_BUG' => 'Nahlásiť Chybu:',
    'LNK_NEW_SEND_EMAIL' => 'Napísať E-mail',
    'LBL_NO_ACCESS' => 'Nemáte prístup na toto miesto. kontaktujte administrátora k získaniu prístupu',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Bez výsledku --',
    'LBL_NO_RESULTS' => '<h2>Neboli nájdené žiadne výsledky. Nech sa páči, hľadať znovu..</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Tipy na vyhľadávanie:</h3><ul><li>Uistite sa, že máte zvolenú správnu kategóriu. </ Li> <li> Rozšírte svoje vyhľadávacie kritériá. </ Li> <li> Ak stále nemôžete nájsť žiadne výsledky skúste Rozšírené možnosti vyhľadávania.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Pridať SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Web stránka',
    'LBL_RSS_TITLE' => 'Prepojenie na Noviny',
    'LBL_CLOSE_DASHLETS' => 'Uzavrieť',
    'LBL_OPTIONS' => 'Možnosti',
    // dashlet search fields
    'LBL_TODAY' => 'Dnes',
    'LBL_YESTERDAY' => 'Včera',
    'LBL_TOMORROW' => 'Zajtra',
    'LBL_NEXT_WEEK' => 'Ďalší týždeň',
    'LBL_LAST_7_DAYS' => 'Posledných 7 dní',
    'LBL_NEXT_7_DAYS' => 'Nasledujúcich 7 dní',
    'LBL_LAST_MONTH' => 'Minulý mesiac',
    'LBL_NEXT_MONTH' => 'Nasledujúci mesiac',
    'LBL_LAST_YEAR' => 'Minulý rok',
    'LBL_NEXT_YEAR' => 'Nasledujúci rok',
    'LBL_LAST_30_DAYS' => 'Posledných 30 dní',
    'LBL_NEXT_30_DAYS' => 'Najbližších 30 dní',
    'LBL_THIS_MONTH' => 'Aktuálny mesiac',
    'LBL_THIS_YEAR' => 'Tento rok',

    'LBL_MODULES' => 'Moduly',
    'LBL_CHARTS' => 'Grafy',
    'LBL_TOOLS' => 'Nástroje',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Výsledok vyhľadávania',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Náhľady modulu',
        'Portal' => 'Portál',
        'Charts' => 'Grafy',
        'Tools' => 'Nástroje',
        'Miscellaneous' => 'Rôzne'
    ),
    'LBL_ADDING_DASHLET' => 'Pridanie SuiteCRM Dashlet',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet pridaný',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Ste si istý, že chete odobrať tento SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Odoberanie SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet odobratý',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Hlavný',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtre',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Len moje položky',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titul',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Zobraziť riadky',

    'LBL_DASHLET_DELETE' => 'Vymazať SuiteCRM nástenku',
    'LBL_DASHLET_REFRESH' => 'Obnoviť SuiteCRM nástenku',
    'LBL_DASHLET_EDIT' => 'Upraviť SuiteCRM nástenku',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Moje CRM',
    'LBL_CLOSE_SITEMAP' => 'Uzavrieť',

    'LBL_SEARCH' => 'Vyhľadať',
    'LBL_CLEAR' => 'Zmazať',

    'LBL_BASIC_CHARTS' => 'Základné Grafy',

    'LBL_DASHLET_SEARCH' => 'Vyhľadať SuiteCRM nástenku',

//ABOUT page
    'LBL_VERSION' => 'Verzia',
    'LBL_BUILD' => 'Vytvoriť',

    'LBL_SOURCE_SUGAR' => 'SuiteCRM Inc - poskytovateľ CE frameworku',

    'LBL_DASHLET_TITLE' => 'Moje stránky',
    'LBL_DASHLET_OPT_TITLE' => 'Titul',
    'LBL_DASHLET_INCORRECT_URL' => 'Nesprávne zadaná adresa webstránky',
    'LBL_DASHLET_OPT_URL' => 'Adresa webovej stránky',
    'LBL_DASHLET_OPT_HEIGHT' => 'Výška nástenky (v pixeloch)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM novinky',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Preskúmajte SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Rychlý filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Rozšírený filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Ikona domova',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Rýchly návrat na domácu plochu jedným kliknutím.',
    'LBL_TOUR_MODULES' => 'Moduly',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Všetky dôležité moduly sú tu.',
    'LBL_TOUR_MORE' => 'Ďalšie moduly',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Ostatné moduly sú tu.',
    'LBL_TOUR_SEARCH' => 'Fulltextové vyhľadávanie',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Vyhľadávanie je teraz omnoho lepšie.',
    'LBL_TOUR_NOTIFICATIONS' => 'Upozornenie',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Upozornenia od SuiteCRM sa zobrazia tu.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Prístup k profilu, nastavenia a odhlásenie.',
    'LBL_TOUR_QUICKCREATE' => 'Rýchle vytvorenie',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Rýchle vytvorenie iného záznamu bez nutnosti opusťiť stránku.',
    'LBL_TOUR_FOOTER' => 'Skladacia päta',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Jednoduché rozbalenie a zbalenie päty.',
    'LBL_TOUR_CUSTOM' => 'Vlastné aplikácie',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Vlastné inštalácie a zmeny pôjdu sem.',
    'LBL_TOUR_BRAND' => 'Vaša značka',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Tu bude Vaše logo. Presuňte kurzor nad pre viac informácii.',
    'LBL_TOUR_WELCOME' => 'Vitajte v SuiteCRM',
    'LBL_TOUR_WATCH' => 'Pozrite si čo je nové v SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""> <li class="icon-ok">Nový zdednodušené navigačné menu</li> <li class="icon-ok">Nová rozbaľovacia päta</li> <li class="icon-ok">Lepšie vyhľadávanie</li> <li class="icon-ok">Vynovené menu pre rýchle úkony</li></ul><p>a omnoho viac!</p>',
    'LBL_TOUR_VISIT' => 'Pre viac informácií prosím navštívte naše stránky',
    'LBL_TOUR_DONE' => 'Ste hotoví!',
    'LBL_TOUR_REFERENCE_1' => 'Vždy sa môžete odkázať na',
    'LBL_TOUR_REFERENCE_2' => 'prostrednictvom odkazu "Podpora" na karte Profilu.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentácia',
    'LBL_TOUR_CALENDAR_URL_1' => 'Zdieľate svoj kalendár SuiteCRM s treťou stranou inej aplikácie, napríklad Microsoft Outlook alebo Exchange? Ak áno, tu nájdete novú adresu URL. Táto nová a bezpečnejšia URL adresa obsahuje Váš osobný kľúč, ktorý zabráni neoprávnenému publikovaniu Vášho kalendára.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Získať novú URL adresu zdielaného kalendára.',
    'LBL_CONTRIBUTORS' => 'Prispievatelia',
    'LBL_ABOUT_SUITE' => 'O SuiteCRM',
    'LBL_PARTNERS' => 'Partneri',
    'LBL_EDIT_ALL_RECURRENCES' => 'Editovat všetky opakovania',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Odstrániť všetky opakovania',
    'LBL_CONFIRM_REMOVE' => 'Ste si istý, že chcete tento záznam odstrániť?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Otvorený sofvér CRM pre svet',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite od Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps od Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Vypočítané polia pracovných postupov sú poskytované spoločnosťou Diligent - technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'O SuiteCRM prekladoch',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Spoločný komunitný preklad SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Preklad vytvorený pomocou Crewdin aplikácie',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM publikované pod licenciou Open Source - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Všetok kód SuiteCRM je spravovaný a vyvíjaný v rámi projektu a bude publikovaný ako Open Source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM podpora je k dispozícii v bezplatnej i platenej verzii',

    'LBL_SUITE_PARTNERS' => 'Máme verných SuiteCRM parnerov, ktorí sa zaujímajú o otvorený sofvér. Ak si chcete zobraziť zoznam našich partnerov, prosím navštívte naše stánky.',

    'LBL_SAVE_BUTTON' => 'Uložiť',
    'LBL_DELETE_BUTTON' => 'Vymazať',
    'LBL_APPLY_BUTTON' => 'Použiť',
    'LBL_SEND_INVITES' => 'Poslať pozvánky',
    'LBL_CANCEL_BUTTON' => 'Zrušiť',
    'LBL_CLOSE_BUTTON' => 'Uzavrieť',

    'LBL_CREATE_NEW_RECORD' => 'Vytvoriť aktivitu',
    'LBL_CREATE_CALL' => 'Naplánovať hovor',
    'LBL_CREATE_MEETING' => 'Harmonogram rokovaní',

    'LBL_GENERAL_TAB' => 'Detaily',
    'LBL_PARTICIPANTS_TAB' => 'Pozvaní',
    'LBL_REPEAT_TAB' => 'opakovanie',

    'LBL_REPEAT_TYPE' => 'opakovanie',
    'LBL_REPEAT_INTERVAL' => 'každý',
    'LBL_REPEAT_END' => 'Ukončenie',
    'LBL_REPEAT_END_AFTER' => 'Po',
    'LBL_REPEAT_OCCURRENCES' => 'opakovanie',
    'LBL_REPEAT_END_BY' => 'podľa',
    'LBL_REPEAT_DOW' => 'Na',
    'LBL_REPEAT_UNTIL' => 'opakujte kým',
    'LBL_REPEAT_COUNT' => 'Čísla opakovaní',
    'LBL_REPEAT_LIMIT_ERROR' => 'Váš požiadavaok vytvorí viac ako je $limit schôdzok.',

    //Events
    'LNK_EVENT' => 'Udalosť',
    'LNK_EVENT_VIEW' => 'Zobrazenie udalosti',
    'LBL_DATE' => 'Dátum: ',
    'LBL_DURATION' => 'Trvanie: ',
    'LBL_NAME' => 'Názov: ',
    'LBL_HOUR_ABBREV' => 'hodina',
    'LBL_HOURS_ABBREV' => 'hodiny',
    'LBL_MINSS_ABBREV' => 'Minúty',
    'LBL_LOCATION' => 'Poloha:',
    'LBL_STATUS' => 'Stav:',
    'LBL_DESCRIPTION' => 'Popis:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Vyskytla sa chyba počas vyhľadávania. Zloženie slov nemusí byť správne.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Požadovaný stroj vyhľadávania nebol nájdený. Znovu skúste vytvoriť vyhľadávanie.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Nepodarilo sa pripojiť k serveru pružného vyhľadávania.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Vyskytla sa vnútorná chyba vyhľadávania.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Počas vytvárania vyhľadávania sa vyskytla neznáma chyba.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Ak problém pretrváva, obráťte sa na správcu. Viac informácií v denníkoch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Zadaným kritériám vyhľadávania nezodpovedajú žiadne výsledky. Skúste rozšíriť vyhľadávanie.',

    'LNK_TASK_VIEW' => 'Zobraziť úlohu',
);
