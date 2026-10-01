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

$mod_strings['LBL_MAP'] = 'Karta';
$mod_strings['LBL_MODULE_NAME'] = 'Kartor';
$mod_strings['LBL_MODULE_TITLE'] = 'Kartor: hem';
$mod_strings['LBL_MODULE_ID'] = 'Kartor';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Kartlista';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Anpassad markör';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Anpassade område';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Min kartlista';

$mod_strings['LBL_FLEX_RELATE'] = 'Relaterade till (Center):';
$mod_strings['LBL_MODULE_TYPE'] = 'Modultyp att visa:';
$mod_strings['LBL_DISTANCE'] = 'Avstånd (radie):';
$mod_strings['LBL_UNIT_TYPE'] = 'Enhetstyp:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Kartvisning';
$mod_strings['LBL_MAP_LEGEND'] = 'Förklaring:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Grupper:';
$mod_strings['LBL_MAP_GROUP'] = 'Grupp';
$mod_strings['LBL_MAP_TYPE'] = 'Typ';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Tilldelad till:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Vägbeskrivning';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Maps-vy';

$mod_strings['LNK_NEW_MAP'] = 'Lägg till ny karta';
$mod_strings['LNK_NEW_RECORD'] = 'Lägg till ny karta';
$mod_strings['LNK_MAP_LIST'] = 'Lista kartor';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Geokodningstest';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Snabb radiekarta';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Ingen';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adress';
$mod_strings['LBL_MAP_PROCESS'] = 'Bearbeta det!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Status för senaste geokodning';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Antal geokodade poster per modul';
$mod_strings['LBL_CRON_URL'] = 'Cron-URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modul';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Inga resultat';
$mod_strings['LBL_OK'] = 'OK';
$mod_strings['LBL_INVALID_REQUEST'] = 'Ogiltig förfrågan';
$mod_strings['LBL_APPROXIMATE'] = 'Ungefärligt';
$mod_strings['LBL_EMPTY'] = 'Tom';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Summa';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Återställ';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Tabellen nedan visar antalet geokodade modulobjekt, grupperade efter geokodningssvar. Observera att standardgränsen för användning av Google Maps är 2 500 förfrågningar per dag. Den här modulen cachelagrar adressers geokodningsinformation under bearbetningen för att minska det totala antalet begärda förfrågningar.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'För att bearbeta geokodningsbegärandena rekommenderas att ett nattligt cronjobb konfigureras. En anpassad ingångspunkt har skapats för detta och kan nås utan autentisering. URL:en nedan är avsedd att användas med en administrativ schemalagd uppgift. Mer information finns i dokumentationen.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Exportera URL:er';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Använd länkarna nedan för att exportera fullständiga adresser som behöver geokodningsinformation. Använd sedan ett batchverktyg för geokodning, online eller offline, för att geokoda adresserna. När geokodningen är klar importerar du adresserna till modulen Adresscache för användning med kartorna. Observera att modulen Adresscache är valfri. All geokodningsinformation lagras i den representativa modulen.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Adresscache';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Lägg till i mållistan';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Bearbetar...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Konfigurationsinställningar';
$mod_strings['LBL_CONFIG_SAVED'] = 'Inställningarna har sparats!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Fakturaadress';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Leveransadress';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Primär adress';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Alternativ adress';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flexibel relation';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adress (enkel, användare)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Anpassad (anpassad styrenhetslogik)';
$mod_strings['LBL_ENABLED'] = 'Aktiverad';
$mod_strings['LBL_DISABLED'] = 'Inaktiverad';
$mod_strings['LBL_DEFAULT'] = 'Standard:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Standard:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Giltiga geokodningsmoduler:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Giltiga geokodningstabeller:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Inställningar för adresstyp: Detta definierar modulernas adresstyper som används vid geokodning av adresser. Godtagbara värden: 'billing', 'shipping', 'primary', 'alt', 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Adresstyp för ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Adresstyp för konton:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Adresstyp för kontakter:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Adresstyp för leads:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Adresstyp för möjligheter:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(för relaterat konto)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Adresstyp för ärenden:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Adresstyp för projekt:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(för relaterat konto/affärsmöjlighet)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Adresstyp för möten:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Adresstyp för prospekt/mål:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Relaterat objekt via Flex Relate-fält';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Inställningar för markörgruppsfält: Detta definierar det ”fält” som används som gruppparameter när markörer visas på en karta. Exempel: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Gruppfält för ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Gruppfält för konton:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Gruppfält för kontakter:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Gruppfält för leads:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Gruppfält för affärsmöjligheter:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Gruppfält för ärenden:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Gruppfält för projekt:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Gruppfält för möten:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Gruppfält för prospekt/mål:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Inställningar för geokodning/Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Geokodning API-URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL till Google Maps API V3 eller proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Hemlig fras för proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Den hemliga fras som ska användas med proxyns MD5-jämförelse.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Geokodningsgräns:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' anger frågegränsen vid val av poster för geokodning.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Gräns för Google-geokodning:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' anger begärandegränsen vid geokodning med Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Gräns för adressexport:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' anger frågegränsen vid val av poster för export.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Tillåt 'UNGEFÄRLIGA' platstyper:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - gör att platstyper av typen 'UNGEFÄRLIGA' kan betraktas som godkända geokodningsresultat.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Inställningar för adresscache:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Aktivera adresscache (Hämta):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "”address_cache_get_enabled” gör det möjligt för adresscachemodulen att hämta data från cachetabellen.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Aktivera lagring av adresscache (Spara):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "”address_cache_save_enabled” gör det möjligt för adresscachemodulen att spara data i cachetabellen.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Inställning för logikkrokar:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Aktivera alla logikkrokar: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "\"logic_hooks_enabled\" aktiverar logikkrokar för automatisk uppdatering baserat på relaterade objekt. Det rekommenderas att inaktivera detta vid uppgradering av SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Inställningar för markörer/kartläggning:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Gräns ​​för markörer på kartan:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "\"map_markers_limit\" anger gränsen för antalet poster som hämtas för visning på en karta.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Kartans standardcentrum - latitud:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "\"map_default_center_latitude\" anger standardpositionen för kartors mittpunkt i latitud.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Kartans standardcentrum - longitud:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "\"map_default_center_longitude\" anger standardpositionen för kartors mittpunkt i longitud.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Standardenhetstyp för karta:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' anger standardenhetstypen för avståndsberäkningar. Värden: 'mi' (miles) eller 'km' (kilometer).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Standardavstånd på karta:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "\"map_default_distance\" anger standardavståndet som används för avståndsbaserade kartor.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Justering av dubblettmarkörer på kartan:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' anger en förskjutning som läggs till longitud och latitud vid dubbla markörpositioner.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Rutnätsstorlek för klustring av kartmarkörer:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "\"map_clusterer_grid_size\" används för att ange rutnätsstorleken för beräkning av kartkluster.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Maximal zoomnivå för klustring av kartmarkörer:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "\"map_clusterer_max_zoom\" används för att ange den maximala zoomnivån där klustring inte tillämpas.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Viktigt: Alla sparade inställningar finns i tabellen ”config” under kategorin ”jjwg”. Observera att en anpassad fil vid namn controller.php inte längre bör användas för att åsidosätta inställningar.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Områden';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Markörer';
$mod_strings['LBL_PARENT_ID'] = 'Överordnat ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP partners';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Skaffa en nyckel';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google API-nyckel';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Vänligen ange Google-API-nyckeln i administrationspanelen för Google Maps.';
