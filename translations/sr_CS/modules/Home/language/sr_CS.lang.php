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
    'LBL_MODULE_NAME' => 'Početna strana',
    'LBL_NEW_FORM_TITLE' => 'Novi kontakt',
    'LBL_FIRST_NAME' => 'Ime:',
    'LBL_LAST_NAME' => 'Prezime:',
    'LBL_LIST_LAST_NAME' => 'Prezime',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'Adresa elektronske pošte:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Moj prodajni levak',
    'LBL_PIPELINE_FORM_TITLE' => 'Prodajni levak po fazama prodaje',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Prodajni levak po fazama prodaje',
    'LNK_NEW_CONTACT' => 'Kreiraj kontakt',
    'LNK_NEW_ACCOUNT' => 'Kreiraj kompaniju',
    'LNK_NEW_OPPORTUNITY' => 'Kreiraj prodajnu priliku',
    'LNK_NEW_LEAD' => 'Kreiraj potencijalnog klijenta',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LNK_NEW_NOTE' => 'Kreiraj belešku ili prilog',
    'LNK_NEW_CALL' => 'Evidentiraj poziv',
    'LNK_NEW_EMAIL' => 'Arhiviraj Email',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_NEW_TASK' => 'Kreiraj zadatak',
    'LNK_NEW_BUG' => 'Prijavi defekt',
    'LNK_NEW_SEND_EMAIL' => 'Sastavi Email',
    'LBL_NO_ACCESS' => 'Nemate pristup ovom delu. Kontaktirajte administratora vašeg sajta kako biste dobili pristup.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Nema rezultata --',
    'LBL_NO_RESULTS' => '<h2>Nema nađenih rezultata. Molim, pokušajte ponovo</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Saveti za pretragu:</h3><ul><li>Proverite da li ste gore izabrali tačne kategorije.</li><li>Proširite Vaše kriterijume za pretragu.</li><li>Ako i dalje nemate nijedan rezultat pretrage pokušajte sa opcijom za naprednu pretragu.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Dodaj SuiteCRM dašlete',
    'LBL_WEBSITE_TITLE' => 'Web stranica',
    'LBL_RSS_TITLE' => 'Izvor vesti',
    'LBL_CLOSE_DASHLETS' => 'Zatvori',
    'LBL_OPTIONS' => 'Opcije',
    // dashlet search fields
    'LBL_TODAY' => 'Danas',
    'LBL_YESTERDAY' => 'Juče',
    'LBL_TOMORROW' => 'Sutra',
    'LBL_NEXT_WEEK' => 'Sledeća nedelja',
    'LBL_LAST_7_DAYS' => 'Poslednjih 7 dana',
    'LBL_NEXT_7_DAYS' => 'Narednih 7 dana',
    'LBL_LAST_MONTH' => 'Prošli mesec',
    'LBL_NEXT_MONTH' => 'Sledeći mesec',
    'LBL_LAST_YEAR' => 'Prošla godina',
    'LBL_NEXT_YEAR' => 'Sledeća godina',
    'LBL_LAST_30_DAYS' => 'Poslednjih 30 dana',
    'LBL_NEXT_30_DAYS' => 'Narednih 30 dana',
    'LBL_THIS_MONTH' => 'Ovaj mesec',
    'LBL_THIS_YEAR' => 'Ove godine',

    'LBL_MODULES' => 'Moduli',
    'LBL_CHARTS' => 'Dijagrami',
    'LBL_TOOLS' => 'Alati',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Rezultat pretrage',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Pregledi modula',
        'Portal' => 'Portal',
        'Charts' => 'Dijagrami',
        'Tools' => 'Alati',
        'Miscellaneous' => 'Razno'
    ),
    'LBL_ADDING_DASHLET' => 'Dodajem SuiteCRMdašlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRMdašlet je dodat',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Da li ste sigurni da želite da uklonite SuiteCRMdašlet?',
    'LBL_REMOVING_DASHLET' => 'Uklanjam SuiteCRMdašlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRMdašlet je uklonjen',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Opšte',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filteri',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Samo moje stavke',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Naslov',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Prikaži redove',

    'LBL_DASHLET_DELETE' => 'Obriši SuiteCRMdašlet',
    'LBL_DASHLET_REFRESH' => 'Osveži SuiteCRMdašlet',
    'LBL_DASHLET_EDIT' => 'Izmeni SuiteCRMdašlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Moj CRM',
    'LBL_CLOSE_SITEMAP' => 'Zatvori',

    'LBL_SEARCH' => 'Pretraga',
    'LBL_CLEAR' => 'Obriši',

    'LBL_BASIC_CHARTS' => 'Osnovni dijagrami',

    'LBL_DASHLET_SEARCH' => 'Nađi SuiteCRMdašlet',

//ABOUT page
    'LBL_VERSION' => 'Verzija',
    'LBL_BUILD' => 'Build',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - obezbedili CE strukturu',

    'LBL_DASHLET_TITLE' => 'Moji sajtovi',
    'LBL_DASHLET_OPT_TITLE' => 'Naslov',
    'LBL_DASHLET_INCORRECT_URL' => 'Uneta je pogrešna website lokacija',
    'LBL_DASHLET_OPT_URL' => 'Lokacija web sajta',
    'LBL_DASHLET_OPT_HEIGHT' => 'Visina dašleta (u pikselima)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM Vesti',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Otkrij SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Brzi filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Napredni filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Početna ikonica',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Brzo se vratite na početnu stranicu.',
    'LBL_TOUR_MODULES' => 'Moduli',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Svi vaši važni moduli ovde.',
    'LBL_TOUR_MORE' => 'Još modula',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Ostali moduli.',
    'LBL_TOUR_SEARCH' => 'Pretraživanje celog teksta',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Pretraga je poboljšana.',
    'LBL_TOUR_NOTIFICATIONS' => 'Obaveštenja',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Obaveštenja iz aplikacije će se pojaviti ovde.',
    'LBL_TOUR_PROFILE' => 'Profil',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Pristupi profilu, podešavanjima i odjavi se.',
    'LBL_TOUR_QUICKCREATE' => 'Brzo kreiranje',
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
    'LBL_EDIT_ALL_RECURRENCES' => 'Uredi sva ponavljanja',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Obriši sva ponavljanja',
    'LBL_CONFIRM_REMOVE' => 'Da li ste sigurni da želite uklonite ovaj zapis?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Otvoreni CRM za celi svet',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SigurnosniPaket od Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps od Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'O SuiteCRM prevodima',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Zajednički prevodi od strane SuiteCRM zajednice',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Prevedno upotrebom Crowdin platforme',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM je objavljen pod licencom otvorenog koda - AGPL3',
    'LBL_ABOUT_SUITE_4' => 'Sav SuiteCRM kod kojim upravljamo i razvijamo će biti objevljen pod licencom otvorenog koda - AGPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM podrška je dostupna besplatno i kao plaćena opcija',

    'LBL_SUITE_PARTNERS' => 'Mi imamo lojalne SuiteCRM partnere koji su strastveni kada je u pitanju otvorenost koda. Da vidite listu partnera, posetite našu internet prezentaciju.',

    'LBL_SAVE_BUTTON' => 'Sačuvaj',
    'LBL_DELETE_BUTTON' => 'Obriši',
    'LBL_APPLY_BUTTON' => 'Primeni',
    'LBL_SEND_INVITES' => 'Pošalji pozvanima',
    'LBL_CANCEL_BUTTON' => 'Otkaži',
    'LBL_CLOSE_BUTTON' => 'Zatvori',

    'LBL_CREATE_NEW_RECORD' => 'Kreiraj aktivnost',
    'LBL_CREATE_CALL' => 'Evidentiraj poziv',
    'LBL_CREATE_MEETING' => 'Zakaži sastanak',

    'LBL_GENERAL_TAB' => 'Detalji',
    'LBL_PARTICIPANTS_TAB' => 'Pozvani',
    'LBL_REPEAT_TAB' => 'Ponavljanje',

    'LBL_REPEAT_TYPE' => 'Ponavlja se',
    'LBL_REPEAT_INTERVAL' => 'Svaki',
    'LBL_REPEAT_END' => 'Kraj',
    'LBL_REPEAT_END_AFTER' => 'Nakon',
    'LBL_REPEAT_OCCURRENCES' => 'ponavljanja',
    'LBL_REPEAT_END_BY' => 'Od',
    'LBL_REPEAT_DOW' => 'Na',
    'LBL_REPEAT_UNTIL' => 'Ponavlja se do',
    'LBL_REPEAT_COUNT' => 'Broj ponavljanja',
    'LBL_REPEAT_LIMIT_ERROR' => 'Vaš zahtjev je pokušao napraviti više od $limit sastanaka.',

    //Events
    'LNK_EVENT' => 'Događaj',
    'LNK_EVENT_VIEW' => 'Pregledaj događaj',
    'LBL_DATE' => 'Datum: ',
    'LBL_DURATION' => 'Trajanje: ',
    'LBL_NAME' => 'Naslov: ',
    'LBL_HOUR_ABBREV' => 'sat',
    'LBL_HOURS_ABBREV' => ' sati',
    'LBL_MINSS_ABBREV' => 'minuta',
    'LBL_LOCATION' => 'Lokacija:',
    'LBL_STATUS' => 'Status',
    'LBL_DESCRIPTION' => 'Opis: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Greška prilikom pretrage. Proverite sintaksu vašeg upita.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Traženi sistem za pretragu nije pronađen. Pokušajte ponovnu pretragu.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Greška u konekciji sa Elasticsearch serverom.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Došlo je do interne greške u vezi sa pretragom.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Došlo je do nepoznate greške prilikom pretrage.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Kontaktirajte administratora u slučaju problema. Više infomacija dostupno je u logovima.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Nema rezultata za zadati kriterijum pretrage. Proširite kriterijum.',

    'LNK_TASK_VIEW' => 'Pregledaj zadatak',
);
