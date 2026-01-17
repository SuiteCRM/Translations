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
$mod_strings['LBL_MODULE_TITLE'] = 'Mapy: Domů';
$mod_strings['LBL_MODULE_ID'] = 'Mapy';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Soupis map';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Vlastní značka';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Vlastní oblast';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Můj soupis map';

$mod_strings['LBL_FLEX_RELATE'] = 'Související s (střed):';
$mod_strings['LBL_MODULE_TYPE'] = 'Typ modulu k zobrazení:';
$mod_strings['LBL_DISTANCE'] = 'Vzdálenost (poloměr):';
$mod_strings['LBL_UNIT_TYPE'] = 'Typ jednotky:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Zobrazení mapy';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Skupiny:';
$mod_strings['LBL_MAP_GROUP'] = 'Skupina';
$mod_strings['LBL_MAP_TYPE'] = 'Typ';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Přiřazeno k:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Získat pokyny';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Zobrazení Google map';

$mod_strings['LNK_NEW_MAP'] = 'Přidat novou mapu';
$mod_strings['LNK_NEW_RECORD'] = 'Přidat novou mapu';
$mod_strings['LNK_MAP_LIST'] = 'Seznam map';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Test geokódingu';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Rychlá mapa s poloměrem';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Žádný';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresa:';
$mod_strings['LBL_MAP_PROCESS'] = 'Zpracuj to!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Stav posledního geokódu';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Modul počet geokódovaných';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modul';

$mod_strings['LBL_N/A'] = 'Nedostupný';
$mod_strings['LBL_ZERO_RESULTS'] = 'Žádné výsledky';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Neplatný požadavek';
$mod_strings['LBL_APPROXIMATE'] = 'Přibližně';
$mod_strings['LBL_EMPTY'] = 'Prázdný';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Celkem';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Obnovit výchozí';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Tabulka níže ukazuje počet geokódováných objektů modulu, seskupených podle geokódováných odpovědí. Všimněte si, že výchozí mezní počet dotazů na Google Maps je 2500 žádostí za den. Tento modul bude ukládat do mezipaměti adresy geokodovacích informací během zpracování ke snížení celkového počtu potřebných požadavků.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Pro zpracování požadavků geokódování je doporučeno nastavit noční Cron-Úlohy. Pro tento účel byl vytvořen vlastní vstupní bod a lze k němu přistupovat bez autentizace. Adresa URL zobrazená dole je určena pro použití s úlohou administrativního plánovače. Více informací naleznete v dokumentaci.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Exportovat URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Použijte odkazy níže k exportu úplných adres nezbytných informací geokódování. Potom používejte online nebo offline nástroj dávkového geokódování na geokódování adres. Až dokončíte geokódování, importujte adresy do mezipaměti adresového modulu pro použití s vašimi mapami. Všimněte si, že modul mezipaměti adres je volitelný. Všechny geokódovací informace jsou uloženy v reprezentativním modulu.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Mezipaměť adres';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Přidat do Seznamu Cílů';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Zpracovávání...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Nastavení konfigurace';
$mod_strings['LBL_CONFIG_SAVED'] = 'Nastavení úspěšně uloženo!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Účetní adresa';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Zasílací adresa';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Primární adresa';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Další adresa';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flexibilní vztah';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresa (jednoduchá, uživatelé)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Vlastní (Vlastní logika řadiče)';
$mod_strings['LBL_ENABLED'] = 'Povoleno';
$mod_strings['LBL_DISABLED'] = 'Vypnuto';
$mod_strings['LBL_DEFAULT'] = 'Výchozí:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Výchozí:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Platné Geocode moduly:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Platné Geocode tabulky:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Nastavení typů adres: Definuje typy adres modulu použitých při geokódování adres. Přijatelné hodnoty: 'Fakturační', 'Doručovací', 'Primární', 'alt', 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Typ adresy pro ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Typ adresy pro Firmy:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Typ adresy pro Kontakty:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Typ adresy pro Iniciativy:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Typ adresy pro Příležitosti:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(ze souvisejícího účtu)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Typ adresy pro Případy:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Typ adresy pro Projekty:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(ze související Firmy/Příležitosti)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Typ adresy pro Schůzky:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Typ adresy pro Možné zákazníky/cíle:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Související objekt skrz pole Flex Relate';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Nastavení polí skupin značek: Toto definuje \"pole\" pro použití jako parametr skupiny při zobrazování značek na mapě. Příklady: assigned_user_name, průmysl, stav, sales_stage, priorita";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Skupinové pole pro ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Skupinové pole pro Firmy:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Skupinové pole pro Kontakty:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Skupinové pole pro Iniciativy:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Skupinové pole pro Příležitosti:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Skupinové pole pro Případy:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Skupinové pole pro Projekty:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Skupinové pole pro Schůzky:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Skupinové pole pro Možné zákazníky/cíle:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Nastavení Geokódování/Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'API URL geokódování:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL Google Maps API V3 nebo Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Tajná fráze pro Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Tajná fráze použitá pro porovnání s Proxy MD5.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limit geokódování:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' nastaví limit dotazů při výběru záznamů ke geokódování.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google limit geokódování:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' nastaví limit požadavků při geokódování pomocí API Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limit exportu adres:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' nastaví limit dotazů při výběru záznamů pro export.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Povolit typy umístění \"přibližné\":";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - umožňuje typu umístění 'přibližné', aby byl považován za výsledek geokódování 'OK'.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Nastavení mezipaměti adres:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Povolit mezipaměť adres (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' umožňuje modulu mezipaměti adres získat data z tabulky mezipaměti.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Povolte ukládání mezipaměti adres (Uložit):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' umožňuje modulu mezipaměti adres uložení dat do mezipaměti tabulky.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Nastavení logických háčků:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Povolit všechny logické háčky: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' umožňuje logické háčky pro automatické aktualizace na základě souvisejících objekty. Je doporučeno zakázat při aktualizaci vašeho SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Nastavení značky/mapování:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limit značek map:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' nastaví limit dotazu při výběru záznamů k zobrazení na mapě.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Výchozí zeměpisná šířka středu mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_longitude' nastaví výchozí zeměpisnou šířku středu mapy.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Výchozí zeměpisná délka středu mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' nastaví výchozí zeměpisná délka středu mapy.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Výchozí typ jednotky mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' nastaví výchozí typ jednotky měření pro výpočet vzdálenosti. Hodnoty: 'mi' (míle) nebo 'km' (kilometry).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Výchozí vzdálenost mapy:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' nastaví výchozí vzdálenost pro mapy založené na vzdálenosti.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Úprava duplicitních mapových značek:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' nastaví náhradní posun pro přidání zeměpisné délky a šířky v případě duplicitní pozice značky.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Velikost mřížky klastru mapových značek:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' se používá k nastavení velikosti mřížky pro výpočet mapového klastru.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Maximální zoom klastru mapových značek:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' slouží k nastavení maximální úrovně zoomu, při které nebude klastr použit.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Důležitá poznámka: Všechny uložené nastavení mohou být nalezeny v 'config' tabulce pod kategorií 'jjwg'.
Připomínáme, že soubor controller.php by neměl být používán k nastavení.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Oblasti';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Značky';
$mod_strings['LBL_PARENT_ID'] = 'Rodičovské ID ';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP partneři';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Získat klíč';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Klíč Google Api';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Prosím, nastavte klíč Google Api v panelu administrace Google Maps.';
