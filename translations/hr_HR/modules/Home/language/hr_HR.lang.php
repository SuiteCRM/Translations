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
    'LBL_MODULE_NAME' => 'Početno',
    'LBL_NEW_FORM_TITLE' => 'Novi kontakt',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Adresa e-pošte:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'My Pipeline',
    'LBL_PIPELINE_FORM_TITLE' => 'Prodajni kanali prema fazama prodaje',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Prodajni kanali prema fazama prodaje',
    'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
    'LNK_NEW_ACCOUNT' => 'Kreiraj tvrtku',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj priliku',
    'LNK_NEW_LEAD' => 'Kreiraj potencijalnog klijenta',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_NOTE' => 'Kreiraj bilješku ili privitak',
    'LNK_NEW_CALL' => 'Zabilježi poziv',
    'LNK_NEW_EMAIL' => 'Arhiviraj e-poštu',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_NEW_BUG' => 'Prijavi bug',
    'LNK_NEW_SEND_EMAIL' => 'Sastavi e-poštu',
    'LBL_NO_ACCESS' => 'Nemate pristup ovom području. Kontaktirajte vašeg administratora stranice za dobivanje pristupa.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nema rezultata --',
    'LBL_NO_RESULTS' => '<h2>Nisu pronađeni rezultati. Molim pokušajte ponovo.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Preporuke pretraživanja:</h3><ul><li>Provjerite jeste li odabrali prave kategorije iznad.</li><li>Proširite kriterij pretraživanja.</li><li>Ako i dalje ne možete pronaći rezultate isprobajte opciju naprednog pretraživanja.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Dodaj SuiteCRM dashlete',
    'LBL_WEBSITE_TITLE' => 'Web stranica',
    'LBL_RSS_TITLE' => 'News feed',
    'LBL_CLOSE_DASHLETS' => 'Zatvori',
    'LBL_OPTIONS' => 'Opcije',
    // dashlet search fields
    'LBL_TODAY' => 'Danas',
    'LBL_YESTERDAY' => 'Jučer',
    'LBL_TOMORROW' => 'Sutra',
    'LBL_NEXT_WEEK' => 'Sljedeći tjedan',
    'LBL_LAST_7_DAYS' => 'Zadnjih 7 dana',
    'LBL_NEXT_7_DAYS' => 'Sljedećih 7 dana',
    'LBL_LAST_MONTH' => 'Prošli mjesec',
    'LBL_NEXT_MONTH' => 'Sljedeći mjesec',
    'LBL_LAST_YEAR' => 'Prošle godine',
    'LBL_NEXT_YEAR' => 'Sljedeće godine',
    'LBL_LAST_30_DAYS' => 'Zadnjih 30 dana',
    'LBL_NEXT_30_DAYS' => 'Sljedećih 30 dana',
    'LBL_THIS_MONTH' => 'Ovaj mejsec',
    'LBL_THIS_YEAR' => 'Ove godine',

    'LBL_MODULES' => 'Moduli',
    'LBL_CHARTS' => 'Grafikoni',
    'LBL_TOOLS' => 'Alati',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Pretraga rezultata',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Pregled modula',
        'Portal' => 'Portal',
        'Charts' => 'Grafikoni',
        'Tools' => 'Alati',
        'Miscellaneous' => 'Razno'
    ),
    'LBL_ADDING_DASHLET' => 'Dodavanje SuiteCRM Dashleta...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet je dodan',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Jeste li sigurni da želite ukloniti ovaj SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Uklanjanje SuiteCRM Dashleta...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Općenito',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filteri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Samo moje stavke',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Naslov',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Prikaži redove',

    'LBL_DASHLET_DELETE' => 'Delete SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'Refresh SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'Edit SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Zatvori',

    'LBL_SEARCH' => 'Pretraživanje',
    'LBL_CLEAR' => 'Očisti',

    'LBL_BASIC_CHARTS' => 'Osnovni grafikoni',

    'LBL_DASHLET_SEARCH' => 'Find SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'Verzija',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - providers of CE framework',

    'LBL_DASHLET_TITLE' => 'Moje stranice',
    'LBL_DASHLET_OPT_TITLE' => 'Naslov',
    'LBL_DASHLET_INCORRECT_URL' => 'Određena je netočna lokacija web stranice',
    'LBL_DASHLET_OPT_URL' => 'Lokacija web stranice',
    'LBL_DASHLET_OPT_HEIGHT' => 'Visina dashleta (u pikselima)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM News',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Otkrijte SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Brzi Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Napredni filtar' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Početna ikona',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Brzo se jednim klikom vratite na početnu stranicu Vaše kontrolne ploče.',
    'LBL_TOUR_MODULES' => 'Moduli',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Svi važni moduli su ovdje.',
    'LBL_TOUR_MORE' => 'Više modula',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Preostali moduli su ovdje.',
    'LBL_TOUR_SEARCH' => 'Pretraživanje punog teksta',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Pretraživanje je upravo postalo puno bolje.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifikacije',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Pristup profilu, postavkama i odjavi.',
    'LBL_TOUR_QUICKCREATE' => 'Brzo kreiranje',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Brzo kreirajte zapise bez gubljenja mjesta.',
    'LBL_TOUR_FOOTER' => 'Podnožje koje se može sažeti',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Jednostavno proširite i sažmite podnožje.',
    'LBL_TOUR_CUSTOM' => 'Prilagođene aplikacije',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Prilagođene integracije idu ovdje.',
    'LBL_TOUR_BRAND' => 'Vaš brend',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Vaš logo ide ovdje. Pređite mišem preko više informacija.',
    'LBL_TOUR_WELCOME' => 'Dobrodošli u SuiteCRM',
    'LBL_TOUR_WATCH' => 'Pratite što je novo u SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nova pojednostavljena navigacijska traka</li><li class="icon-ok">Novo podnožje koje se može sažeti</li><li class="icon-ok">Poboljšano pretraživanje</li><li class="icon-ok">Ažurirani izbornik radnji</li></ul><p>i mnogo više!</p>',
    'LBL_TOUR_VISIT' => 'Za više informacija molim posjetite našu aplikaciju',
    'LBL_TOUR_DONE' => 'Završili ste!',
    'LBL_TOUR_REFERENCE_1' => 'Uvijek se možete refereirati s našim',
    'LBL_TOUR_REFERENCE_2' => 'kroz poveznicu "Podrška" u profilnoj kartici.',
    'LNK_TOUR_DOCUMENTATION' => 'dokumentacija',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Zaprimite novi URL Vašeg dijeljenog kalendara.',
    'LBL_CONTRIBUTORS' => 'Ovom projektu su doprinijeli',
    'LBL_ABOUT_SUITE' => 'O SuiteCRM-u',
    'LBL_PARTNERS' => 'Partneri',
    'LBL_EDIT_ALL_RECURRENCES' => 'Uredi sva vraćanja',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Izbriši sva vraćanja',
    'LBL_CONFIRM_REMOVE' => 'Jeste li sigurni želite li ukloniti zapis?',
    
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

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM je objavljen pod open source licencom - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Sav SuiteCRM kod upravljan i razvijen od projekta biti će objavljen kao open source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM podrška je dostupna kao besplatna i platna opcija.',

    'LBL_SUITE_PARTNERS' => 'Mi imamo lojalne SuiteCRM partnere koji su strasni oko open source-a. Za vidjeti našu cijelu listu partnera, molim posjetite našu web stranicu.',

    'LBL_SAVE_BUTTON' => 'Spremi',
    'LBL_DELETE_BUTTON' => 'Izbriši',
    'LBL_APPLY_BUTTON' => 'Primijeni',
    'LBL_SEND_INVITES' => 'Spremi i pošalji pozivnice',
    'LBL_CANCEL_BUTTON' => 'Odustani',
    'LBL_CLOSE_BUTTON' => 'Zatvori',

    'LBL_CREATE_NEW_RECORD' => 'Kreiraj aktivnost',
    'LBL_CREATE_CALL' => 'Zabilježi poziv',
    'LBL_CREATE_MEETING' => 'Zakaži sastanak',

    'LBL_GENERAL_TAB' => 'Detalji',
    'LBL_PARTICIPANTS_TAB' => 'Gosti',
    'LBL_REPEAT_TAB' => 'Vraćanje',

    'LBL_REPEAT_TYPE' => 'Ponovi',
    'LBL_REPEAT_INTERVAL' => 'Svaki',
    'LBL_REPEAT_END' => 'Kraj',
    'LBL_REPEAT_END_AFTER' => 'Poslije',
    'LBL_REPEAT_OCCURRENCES' => 'vraćanja',
    'LBL_REPEAT_END_BY' => 'Od',
    'LBL_REPEAT_DOW' => 'Na',
    'LBL_REPEAT_UNTIL' => 'Ponavljaj dok',
    'LBL_REPEAT_COUNT' => 'Broj vraćanja',
    'LBL_REPEAT_LIMIT_ERROR' => 'Vaš zahtjev je krenuo kreirati više od $limit sastanaka.',

    //Events
    'LNK_EVENT' => 'Događaj',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Naslov:',
    'LBL_HOUR_ABBREV' => 'sat',
    'LBL_HOURS_ABBREV' => 'sati',
    'LBL_MINSS_ABBREV' => 'minuta',
    'LBL_LOCATION' => 'Lokacija:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Opis:',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Prilikom pretraživanja došlo je do pogreške. Vaša sintaksa upita možda nije valjana.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Nema rezultata koji odgovaraju kriterijima pretraživanja. Pokušajte proširiti svoje pretraživanje.',

    'LNK_TASK_VIEW' => 'View Task',
);
