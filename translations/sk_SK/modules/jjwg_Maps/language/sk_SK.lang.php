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
$mod_strings['LBL_MODULE_NAME'] = 'Mapy';
$mod_strings['LBL_MODULE_TITLE'] = 'Mapy: Domov';
$mod_strings['LBL_MODULE_ID'] = 'Mapy';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Mapy';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Vlastná značka';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Vlastná oblasť';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Moje mapy';

$mod_strings['LBL_FLEX_RELATE'] = 'Vzhľadom na (Stred):';
$mod_strings['LBL_MODULE_TYPE'] = 'Typ modulu na zobrazenie:';
$mod_strings['LBL_DISTANCE'] = 'Vzdialenosť (polomer):';
$mod_strings['LBL_UNIT_TYPE'] = 'Typ jednotky:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Zobraziť mapu';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Skupiny:';
$mod_strings['LBL_MAP_GROUP'] = 'Skupina';
$mod_strings['LBL_MAP_TYPE'] = 'Typ';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Priradené ku:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Získať trasu';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Zobrazenie máp Google';

$mod_strings['LNK_NEW_MAP'] = 'Pridať novú mapu';
$mod_strings['LNK_NEW_RECORD'] = 'Pridať novú mapu';
$mod_strings['LNK_MAP_LIST'] = 'Zoznam máp';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Test geokódingu';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Rýchla mapa s polomerom';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Nič';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresa';
$mod_strings['LBL_MAP_PROCESS'] = 'Spracovať!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Posledný stav geokódu';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Modul výpočtu geokódov';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modul';

$mod_strings['LBL_N/A'] = 'nepoužiteľné';
$mod_strings['LBL_ZERO_RESULTS'] = 'Nulové výsledky';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Neplatná požiadavka';
$mod_strings['LBL_APPROXIMATE'] = 'Približné';
$mod_strings['LBL_EMPTY'] = 'Prázdny';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Spolu';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Vynulovať';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Nižšie uvedená tabuľka ukazuje počet geokódovaných objektov modulu, zoskupených podľa geokódovaných odpovedí. Všimnite si, že štandardný limit požiadaviek na Google Maps je 2500 za deň. Tento modul bude priebežne spracovávať geokódy o adresách v medzipamäti s cieľom znížiť celkový počet požiadaviek.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Na spracovanie geokódov sa odporúča nastaviť nočnú cronu. Užívateľský prístupový bod pre tento účel bol vytvorený a je prístupný bez overenia. URL zobrazený nižšie je určený pre použitie s naplánovanou úlohou správcu. V dokumentácii nájdete viac informácií.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Export URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Použite nižšie uvedené odkazy na export úplných adries potrebných pre geokódy. Potom použite online alebo offline nástroj geokódovania na geokódovanie adries. Keď ste skončili geokódovanie, importujte adresy do modulu medzipamäte adries pre použitie s vašimi mapami. Všimnite si, že modul medzipamäte adries je voliteľný. Všetky geokódové informácie sú uložené v reprezentatívnom module.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Medzipamäť adries';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Pridať zoznam cieľov';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Spracovanie ..';


$mod_strings['LBL_CONFIG_TITLE'] = 'Konfiguračné nastavenia';
$mod_strings['LBL_CONFIG_SAVED'] = 'Nastavenia úspešne uložené!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Fakturačná adresa';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Adresa dodania';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Primárna adresa';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Ďalšia adresa';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Uvedenie Flexu';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresa (jednoduchá, užívatelia)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Vlastné (Vlastná logika radiča)';
$mod_strings['LBL_ENABLED'] = 'povolené';
$mod_strings['LBL_DISABLED'] = 'Blokovaný';
$mod_strings['LBL_DEFAULT'] = 'Predvolené:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Predvolené:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Platné moduly geokódu:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Platné tabuľky geokódu:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Nastavenia typu adresy: Definuje typy adries modulu, používaných pri geokódovaní. Prijateľné hodnoty sú: \"fakturačná\"; \"doručovacia\"; \"Hlavná\"; \"alternatívna\"; \"flexibilné_vzťahy\"";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Typ adresy pre ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Typ adresy pre účty:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Typ adresy pre kontakty:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Typ adresy pre typy:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Typ adresy pre príležitosti:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(zo súvisiaceho účtu)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Typ adresy pre prípady:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Typ adresy pre projekty:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(zo súvisiaceho účtu/príležitosti)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Typ adresy pre stretnutia:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Typ adresy pre potencionálnych/cieľových zákazníkov:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Súvisiaci objekt cez pole Flex Relate';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Nastavenie poľa označenia skupín: Toto definuje pole ako parameter skupiny pri zobrazovaní značiek na mape. Príklady: assigned_user_name, priemysel, stav, sales_stage, priorita";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Pole skupiny pre ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Skupinové pole pre účty:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Skupinové pole pre kontakty:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Skupinové pole pre potencionálnych klientov:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Skupinové pole pre príležitosti:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Skupinové pole pre prípady:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Skupinové pole pre projekty:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Skupinové pole pre stretnutia:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Skupinové pole pre výhliadky/ciele:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Nastavenie Geocoding/Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Geocoding API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL Google Maps Geocoding API alebo Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Heslo pre Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Heslo je použití pre porovnanie s proxy MD5.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limit geokódovania:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' nastavuje obmedzenie počtu požiadaviek ak je záznam označený ako geokód.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Limit Google geokódovania:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' nastavuje obmedzenie počtu požiadaviek, ak geokódovanie používa Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limit exportu adries:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' nastavuje obmedzenie počtu pri výbere záznamov pre export.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Povoliť typy umiestnenia \"približne\":";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "\"allow_approximate_location_type\" - umožňuje pre výsledky geokódovania považovať typ umiestnenia \"približne\" za \"OK\".";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Nastavenie medzipamäte adries:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Povoliť medzipamäť adries (Prijatie):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "\"address_cache_get_enabled\" umožňuje modulu medzipamäti adries načítanie údajov z tabuľky vyrovnávacej pamäte.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Povoliť ukladanie medzipamäti adries (Uložiť):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "\"address_cache_save_enabled\" umožňuje modulu medzipamäti adries uložiť údaje do tabuľky vyrovnávacej pamäte.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Nastavenie logických háčikov:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Povoliť všetky logické háčiky: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "\"logic_hooks_enabled\" umožňuje logické háčiky pre automatickú aktualizáciu na základe súvisiacich objektov. Odporúča sa vypnúť pri aktualizácii vášho SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Nastavenie značiek/mapovania:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limit značiek máp:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "\"map_markers_limit\" nastaví limit pri výbere záznamov, ktoré sa zobrazia na mape.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Predvolená zemepisná šírka stredu mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "\"map_default_center_latitude\" nastaví pre mapy predvolenú zemepisnú šírku stredu.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Predvolená zemepisná dĺžka stredu mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "\"map_default_center_latitude\" nastaví pre mapy predvolenú zemepisnú dĺžku stredu.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Predvolený typ jednotky mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "\"map_default_unit_type\" nastaví predvolenú jednotku merania pre výpočet vzdialenosti. Hodnoty: \"mi\" (míle) alebo \"km\" (kilometre).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Predvolená vzdialenosť mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "\"map_default_distance\" nastaví predvolenú vzdialenosť pre mapy, založené na vzdialenosti.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Nastavenie duplicitných mapových značiek:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "\"map_duplicate_marker_adjustment\" nastaví posunutie zemepisnej dĺžky a šírky v prípade duplicitnej pozície značky.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Veľkosť mriežky zhluku značiek mapy:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "\"map_clusterer_grid_size\" sa používa na nastavenie veľkosti mriežky pre výpočet zhlukov značiek mapy.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Maximálne zväčšenie zhluku značiek mapy:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "\"map_clusterer_max_zoom\" sa používa na nastavenie maximálneho priblíženia v ktorom sa nepoužije zhlukovanie.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Dôležitá poznámka: Všetky uložené nastavenia nájdete v tabuľke \"config\" v kategórii \"jjwg\". Všimnite si, že vlastný súbor controller.php by sa už nemal používať pre nastavenie.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Oblasti';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Značky';
$mod_strings['LBL_PARENT_ID'] = 'ID rodiča:';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP partneri';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Získať kľúč';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Kľúč Google Api';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Prosím, nastavte kľúč Google Api v paneli správcu Google Maps.';
