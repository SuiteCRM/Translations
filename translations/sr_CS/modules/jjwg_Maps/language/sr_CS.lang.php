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

$mod_strings['LBL_MAP'] = 'Mapa';
$mod_strings['LBL_MODULE_NAME'] = 'Mape';
$mod_strings['LBL_MODULE_TITLE'] = 'Mape: Početna';
$mod_strings['LBL_MODULE_ID'] = 'Mape';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Lista mapa';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Prilagođen marker';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Prilagođena oblast';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Moja lista mapa';

$mod_strings['LBL_FLEX_RELATE'] = 'Vezano za (Centar):';
$mod_strings['LBL_MODULE_TYPE'] = 'Tip modula za prikaz:';
$mod_strings['LBL_DISTANCE'] = 'Razdaljina (Radijus):';
$mod_strings['LBL_UNIT_TYPE'] = 'Tip jedinice:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Prikaz mape';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Grupe:';
$mod_strings['LBL_MAP_GROUP'] = 'Grupa';
$mod_strings['LBL_MAP_TYPE'] = 'Tip';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Dodeljeno:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Uzmi uputstva';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Pogled na Google mape';

$mod_strings['LNK_NEW_MAP'] = 'Dodaj novu mapu';
$mod_strings['LNK_NEW_RECORD'] = 'Dodaj novu mapu';
$mod_strings['LNK_MAP_LIST'] = 'Izlistaj mape';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Geokod test';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Brza radijus mapa';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Nijedno';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresa';
$mod_strings['LBL_MAP_PROCESS'] = 'Obradi!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Poslednji Geokod status';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Modul brojeva geokodiranja';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modul';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Zero Results';
$mod_strings['LBL_OK'] = 'U redu';
$mod_strings['LBL_INVALID_REQUEST'] = 'Invalid Request';
$mod_strings['LBL_APPROXIMATE'] = 'Approximate';
$mod_strings['LBL_EMPTY'] = 'Prazno';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Ukupno';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Resetuj';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Donja tabela prikazuje broj geokodovanih modul objekata, grupisanih po geokod odgovoru. Imajte u vidu da upotreba standardnih Google mapa ima limit od 2500 zahteva dnevno. Ovaj modul će keširati informacije geokodovanja adresa u toku obrade da bi smanjio ukupan broj potrebnih zahteva.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Za procesiranje zahteva geokodiranja preporučuje se da se uspostavi jedan noćni Cron-Job. Jedna namenska pristupna tačka je kreirana za tu svrhu i može joj se pristupiti bez autentikacije. Dole prikazani URL je namenjen za korišćenje sa administratorski raspoređenim zadatkom. Molim pogledajte dokumentaciju za više informacija.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Izvezi URL-ove';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Koristite donje linkove za izvoz punih adresa potrebnih za geokod informacije. Onda koristite onlajn ili oflajn paketni geokodni alat da biste geokodovali adrese. Kada ste završili geokodiranje, importujte adrese u Adresni Keš modul koji ćete koristiti sa vašim mapama. Adresni keš modul je opcionalan. Sve geokodne informacije su pohranjene u reprezentativnom modulu.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Keš memorija adresa';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Dodaj u ciljnu listu';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Obrada..';


$mod_strings['LBL_CONFIG_TITLE'] = 'Konfiguraciona podešavanja';
$mod_strings['LBL_CONFIG_SAVED'] = 'Podešavanja uspešno sačuvana!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Adresa naplate';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Adresa dostave';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Primarna adresa';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Alternativna adresa';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex Relate';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresa (obična, korisnici)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Prilagođeno (prilagođena logika kontrolera)';
$mod_strings['LBL_ENABLED'] = 'Enabled';
$mod_strings['LBL_DISABLED'] = 'Isključeno';
$mod_strings['LBL_DEFAULT'] = 'Podrazumevano:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Podrazumevano:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Validni geokod moduli:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Validne geokod tabele:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Podešavanje tipa adrese: Ovim se definišu tipovi adresa za module koji se koriste za geokodovanje adresa. Dozvoljene vrednosti: 'fakturisanje'; 'isporuka'; 'primarna'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Tip adrese za ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Tip adrese za Kompanije:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Tip adrese za Kontakte:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Tip adrese za potencijalne klijente:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Tip adrese za Prodajne prilike:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(od pridružene Kompanije)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Tip adrese za Slučajeve:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Tip adrese za Projekte:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(od pridružene Kompanije/Prodajne prilike)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Tip adrese za Sastanke:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Tip adrese za Verovatne kupce/Ciljeve:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Vezan objekt preko Flex Relate polja';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Podešavanje grupe markera: Ovim se definiše 'polje' koje se koristi kao grupni parametar za prikazivanje markera na mapi. Primeri: dodeljeno_korisničko_ime, industrija, status, faza_prodaje, prioritet";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Grupno polje za ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Grupno polje za Kompanije:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Grupno polje za kontakte:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Grupno polje za Potencijalne klijente:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Grupno polje za Prodajne prilike:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Grupno polje za Slučajeve:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Grupno polje za Projekte:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Grupno polje za Sastanke:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Grupno polje za Verovatne kupce/Ciljeve:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Geokod/Google podešavanje:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL za Geokod API:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL API-ja ili Proxy-ja geokodinga za Google mape';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Tajna fraza za proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Tajna fraza koja će se koristiti sa Proxy MD5 komparacijom.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Geokod limit:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geokod_limit' setuje limit upita pri selektovanju zapisa za geokodiranje.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google Geokod limit:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geokod_limit' setuje limit zahteva kada se geokodira koristeći Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limit izvoza adresa:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'limit_izvoza_adresa' setuje limit upita pri selektovanju zapisa za geokodiranje.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Dozvoli 'PRIBLIŽNE' tipove lokacija:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'dozvoli_približne_tipove_lokacija' - dozvoljava 'PRIBLIŽNIM' tipovima lokacija da budu smatrani 'OK' geokod rezultatima.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Podešavanje adresnog keša:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Omogući adresni keš (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'omogući_adresni_keš_get' dozvoljava adresnom keš modulu da uzima podatke iz keš tabele.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Omogući čuvanje adresnog keša (Save):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'omogući_čuvanje_adresnog_keša_save' dozvoljava adresnom keš modulu da sačuva podatke u keš tabelu.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Podešavanje logičkih kuka:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Omogući sve logičke kuke: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logičke_kuke_omogućene' dozvoljava logičkim kukama automatsko ažuriranje bazirano na vezanim objektima. Preporučuje se da se onemogući kada se nadograđuje SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Podešavanja markera/mapiranja:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limit markera mape:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'limit_markera_mape' setuje limit upita za selektovanje zapisa za prikaz na mapi.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Podrazumevana geo. širina centra mape:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'podrazumevana_geo_širina_centra_mape' setuje podrazumevanu geografsku širinu centra mape.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Podrazumevana geo. dužina centra mape:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'podrazumevana_geo_dužina_centra_mape' setuje podrazumevanu geografsku dužinu centra mape.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Podrazumevana jedinica mape:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'podrazumevana_jedinica_mape' setuje podrazumevan tip jedinice mere za računanje razdaljina. Vrednosti: 'mi' (milje) ili 'km' (kilometri).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Podrazumevana razdaljina mape:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'podrazumevana_razdaljina_mape' setuje podrazumevanu razdaljinu korišćenu za mape bazirane na razdaljini.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Podešavanje dupliranih markera:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'podešavanje_dupliranih_markera' setuje korekciju koja treba da se doda na geografsku dužinu i širinu u slučaju dupliranih pozicija markera.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Veličina mreže klasterera markera mape:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'veličina_mreže_klasterera_mape' se koristi da se setuje veličina mreže za izračunavanje klasterera mape.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Klasterer markera mape max zum:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'klasterer_mape_max_zum' se koristi da bi se setovao maksimalni zum nivo na kojem neće biti primenjeno klasterovanje.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Važna napomena: Sva sačuvana podešavanja se mogu naći u 'config' tabeli pod kategorijom 'jjwg'. Imajte u vidu da posebna controller.php datoteka ne treba više da se koristi da bi se promenila podešavanja.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Oblasti';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Markeri';
$mod_strings['LBL_PARENT_ID'] = 'ID nadređenog';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP Partners';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Uzmi ključ';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api ključ';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Molim postavite Google Api ključ u administrativnom panelu Google mapa.';
