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

$mod_strings['LBL_MAP'] = 'Kaart';
$mod_strings['LBL_MODULE_NAME'] = 'Kaarten';
$mod_strings['LBL_MODULE_TITLE'] = 'Kaarten: Start';
$mod_strings['LBL_MODULE_ID'] = 'Kaarten';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Kaarten Lijst';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Custom Markeerpunt';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Custom Gebied';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Mijn Kaartvermelding';

$mod_strings['LBL_FLEX_RELATE'] = 'Gerelateerd aan (Centrum):';
$mod_strings['LBL_MODULE_TYPE'] = 'Module type tonen:';
$mod_strings['LBL_DISTANCE'] = 'Afstand (Radius):';
$mod_strings['LBL_UNIT_TYPE'] = 'Eenheid type:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Kaart tonen';
$mod_strings['LBL_MAP_LEGEND'] = 'Legenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Groepen:';
$mod_strings['LBL_MAP_GROUP'] = 'Groep';
$mod_strings['LBL_MAP_TYPE'] = 'Type';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Toegewezen aan:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Krijg routebeschrijving';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Maps overzicht';

$mod_strings['LNK_NEW_MAP'] = 'Toevoegen nieuwe kaart';
$mod_strings['LNK_NEW_RECORD'] = 'Toevoegen nieuwe kaart';
$mod_strings['LNK_MAP_LIST'] = 'Kaarten lijst';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Geocoding Test';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Quick Radius Kaart';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Geen';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adres';
$mod_strings['LBL_MAP_PROCESS'] = 'Verwerken!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Laatste geocode status';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Module Geocoded tellingen';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Module';

$mod_strings['LBL_N/A'] = 'N/B';
$mod_strings['LBL_ZERO_RESULTS'] = 'Geen resultaten';
$mod_strings['LBL_OK'] = 'Oké';
$mod_strings['LBL_INVALID_REQUEST'] = 'Ongeldig verzoek';
$mod_strings['LBL_APPROXIMATE'] = 'Ongeveer';
$mod_strings['LBL_EMPTY'] = 'Leeg';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Totaal';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Opnieuw instellen';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'De tabel onderaan bevat het nummer van de module objecten Geocode, gegroepeerd op geocoding reactie. Houd er rekening mee dat de standaard Google Maps het gebruik beperkt is tot 2500 aanvragen per dag. Deze module zal de adressen geocoding informatie tijdens de bewerking verminderen dan er nodig is van de totale aantal aanvragen die nodig zijn voor de cache.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Voor het verwerken van de geocoding verzoeken is het aanbevolen om een nachtelijke Cron-Job in te stellen. Een aangepaste ingangspunt voor dit doel is aangemaakt en kan worden geopend zonder verificatie. De URL hieronder is bedoeld om te worden gebruikt met een geplande beheertaak. Raadpleeg de documentatie voor meer informatie.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Exporteer URLs';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Gebruik de links hieronder om adressen van de volledige behoefte van geocodeing informatie te exporteren. Wanneer u klaar bent met geocoding, importeren van de adressen in de adres Cache module voor gebruik met uw kaarten. Opmerking, het adres Cache module is optioneel. Alle geocoding informatie wordt opgeslagen in de representatieve module.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Adres Cache';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Voeg toe aan de verzendlijst';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Verwerken ...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Configuratie Instellingen';
$mod_strings['LBL_CONFIG_SAVED'] = 'Instellingen zijn opgeslagen!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Facturatie adres';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Verzendadres';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Primair adres';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Alternatief adres';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex betrekking hebben';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adres (Eenvoudig, Gebruikers)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Aangepast (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Ingeschakeld';
$mod_strings['LBL_DISABLED'] = 'Uitgeschakeld';
$mod_strings['LBL_DEFAULT'] = 'Standaard:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Standaard:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Geldige Geocode modules:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Geldige Geocode tabellen:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Adres type instelling: Dit definieert de modulen' adres types gebruikt wanneer geocoding adressen. Geaccepteerde waarden: 'factuur'; 'verzend'; 'eerste'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Adres type voor ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Adres type voor bedrijven:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Adres type voor contactpersonen:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Adres type voor Leads:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Adres type voor Kansen:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(van gerelateerd bedrijf)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Adres type voor Dossiers:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Adres type voor Projecten:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(van gerelateerd bedrijf/kans)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Adres type voor Afspraken:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Adres type voor Kansen/Doelen:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Gerelateerd object door Flex Relate veld';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Markeer groep veld instellingen: Dit definieert het 'veld' dat wordt gebruikt als parametergroep bij het weergeven van de markeringen op de kaart. Voorbeelden: toegewezen_gebruiker_naam, industrie, status, verkoop_fase, prioriteit";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Groepeer veld voor ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Groepeer veld voor Bedrijven:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Groepeer veld voor Contactpersonen:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Groepeer veld voor Leads:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Groep veld voor Kansen:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Groepeer veld voor verzoeken:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Groepeer veld voor Projecten:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Groepeer veld voor Afspraken:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Groepeer veld voor  Kansen/Doelen:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Geocoding/Google instellingen:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Geocoding API-URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'De URL van de Google Maps API V3 of Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Geheime zin voor Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Geheime zin in combinatie met de Proxy MD5 vergelijking.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Geocoding Limiet:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' bepaalt de query limiet wanneer records worden geselecteerd om te geocoderen.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google Geocoding limiet:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' bepaalt de verzoek limiet wanneer geocoding wordt gedaan met de Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Export adressen limiet:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' bepaalt de query limit wanneer records worden geselecteerd om te exporteren.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Toestaan 'ONGEVEER' Locatie typen:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - toestaan locatie typen 'ONGEVEER' in overweging 'OK' geocoding resultaten.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Adres Cache instellingen:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Aanzetten adres cache (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' toestaan dat de adres cache module data kan opvragen van de cache tabel.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Aanzetten opslaan adres cache (Opslaan):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' toestaan dat de adres cache module data kan opslaan in de cache tabel.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Logic Hooks instellingen:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Aanzetten alle Logic Hooks: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' maakt het mogelijk logic hooks automatisch te updaten gebaseerd op gerelateerde objecten. Het is aanbevolen dit uit te zetten wanneer je SuiteCRM upgrade.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Markeerpunt/Groupeer instelling:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Kaart markeerpunt limiet:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' bepaalt de query limiet wanneer records geselecteerd worden om weer te geven op de kaart.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Kaart standaard centrum breedtegraad:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' stelt de standaard breedtegraad positie voor de kaart in.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Kaart standaard centrum lengtegraad:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' stelt de standaard lengtegraad positie voor de kaart in.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Kaart standaard eenheid type:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' Zet de standaard eenheid voor afstand berekeningen. Waarden: 'mi' (mijl) of 'km' (kilometer).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Kaart standaard afstand:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' stelt de standaard afstand in, voor op afstand gebaseerde kaarten.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Kaart duplicaten markeerpunt bijstelling:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' stelt een bijstelling in die wordt toegevoegd aan de lengte- en breedtegraad in geval van dubbele markeerpunten.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Kaart markeerpunten cluster rastergrootte:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' wordt gebruikt om de rastergrootte van de kaart clusters te berekenen.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Kaart markeerpunten cluster maximale zoom:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' wordt gebruikt om het maximum zoom niveau te bepalen waarbij clustering niet zal worden toegepast.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Belangrijke opmerking: Alle opgeslagen instellingen kunnen gewijzigd worden in the 'config' tabel nnder categorie 'jjwg'. Opmerking, een aparte controller.php bestand hoeft niet langer gebruikt te worden om deze instellingen te wijzigen.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Gebieden';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Markeerpunten';
$mod_strings['LBL_PARENT_ID'] = 'Hoofd ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP Partners';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Verkrijg Google API sleutel';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api-sleutel';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Geef de Google Api Key in bij het Admingedeelte voor Google Maps.';
