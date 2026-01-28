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

$mod_strings['LBL_MAP'] = 'Kart';
$mod_strings['LBL_MODULE_NAME'] = 'Kart';
$mod_strings['LBL_MODULE_TITLE'] = 'Kart: Hjem';
$mod_strings['LBL_MODULE_ID'] = 'Kart';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Kart';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Tilpasset markør';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Tilpasset område';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Min kart liste';

$mod_strings['LBL_FLEX_RELATE'] = 'Relatert til (midt):';
$mod_strings['LBL_MODULE_TYPE'] = 'Modultype som skal vises:';
$mod_strings['LBL_DISTANCE'] = 'Distanse (radius):';
$mod_strings['LBL_UNIT_TYPE'] = 'Enhetstype:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Kartvisning';
$mod_strings['LBL_MAP_LEGEND'] = 'Forklaring:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Grupper:';
$mod_strings['LBL_MAP_GROUP'] = 'Gruppe';
$mod_strings['LBL_MAP_TYPE'] = 'Type';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Tildelt brukers navn:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Få veibeskrivelser';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Maps View';

$mod_strings['LNK_NEW_MAP'] = 'Legg til nytt kart';
$mod_strings['LNK_NEW_RECORD'] = 'Legg til nytt kart';
$mod_strings['LNK_MAP_LIST'] = 'List kart';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Geokodingstest';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Hurtig radiuskart';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Ingen';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresse:';
$mod_strings['LBL_MAP_PROCESS'] = 'Prosesser!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Forige geokodestatus';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Modulens geokodeantal';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modul';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Zero Results';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Invalid Request';
$mod_strings['LBL_APPROXIMATE'] = 'Approximate';
$mod_strings['LBL_EMPTY'] = 'Tom';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Totalt';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Tilbakestill';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Tabellen under viser antall modulobjekter som er geokodet, gruppert etter geokoding svar. Husk at standard Google Maps bruk begrenses til 2500 forespørsler per dag. Denne modulen vil hurtiglagre adresser under behandling for å redusere det totale antallet forespørsler om nødvendig.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Behandle geokoding forespørsler anbefales det å sette til en nattlig Cron-jobb. Et egendefinert inngangspunkt er opprettet for dette formålet, og kan nås uten godkjenning. URL-adressen nedenfor er ment å brukes med en administrativ planlagt oppgave. Se dokumentasjonen for mer informasjon.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Eksporter URLer';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Bruk koblingene nedenfor til å eksportere fulle adresser som har behov for geokoding. Deretter bruk et online eller offline geocodingverktøye for å geokode adressene. Når du er ferdig med geokoding, importer adressene til hurtiglagret slik at det kan brukes i kart. Legg merke til at modulen hurtiglagring er valgfri. Alle geokoding lagres i modulen.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Hurtiglager for adresser';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Legg til i målliste';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Arbeider...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Konfigurasjonsinnstillinger';
$mod_strings['LBL_CONFIG_SAVED'] = 'Innstillingene ble lagret!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Faktureringsadresse';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Leveringsadresse';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Primæradresse:';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Alternativ adresse';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex forbindelse';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresse (Enkel, Brukere)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Tilpasset (Tilpasset kontroll-logikk)';
$mod_strings['LBL_ENABLED'] = 'Aktiv';
$mod_strings['LBL_DISABLED'] = 'Inaktiv';
$mod_strings['LBL_DEFAULT'] = 'Standard:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Standard:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Gyldig geokodemoduler:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Gyldige geokodetabeller:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Adresstypeinnstillinger: Dette definerer hvilken adressetype som blir brukt i modulen når adresser skal geokodes. Akseptable verdier: 'faktura';'post';'hoved';'alt';'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Adressetype for';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Adressetype for Kontoer:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Adressetype for Kontakter:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Adressetype for Kundeemner:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Adressetype for Muligheter:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(for relatert konto)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Adressetype for Saker:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Adressetype for Prosjekter:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(for relatert Konto/Mulighet)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Adressetype for Møter:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Adressetype for Prospekter/Mål:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Relatert Objekt gjennom Fleksibelt Relasjonsfelt';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Gruppefeltinnstillinger for Markør: Dette definerer 'feltet' som skal brukes som gruppeparameter når markører vises på et kart. For eksempel: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Gruppefelt for ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Gruppefelt for Kontoer:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Gruppefelt for Kontakter:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Gruppefelt for Kundeemner:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Gruppefelt for Muligheter:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Gruppefelt for Saker:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Gruppefelt for Prosjekter:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Gruppefelt for Møter:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Gruppefelt for Prospekter/Mål:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Innstillinger for Geokoding/Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Geokoding API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Google Kart API V3 URL eller mellomtjener';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Hemmelig frase for mellomtjener:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Den hemmelige frasen som skal brukes med mellomtjener MD5-sammenligning.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Begrensning for geokoding:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' setter spørringsbegrensning når du velger oppføringer som skal geokodes.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Begrensning for Google geokoding:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' setter spørringsbegrensningen når du geokoder med Google Kart APIet.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Begrensning for adresser:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' setter spørringsbegrensning når du velger oppføringer som skal eksporteres.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Tillat 'TILNERMET' lokasjonstyper:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - lar lokasjonstyper som er 'TILNÆRMET' bli ansett som 'OK' geokoderesultater.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Hurtiglagerinnstillinger for adresser';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Slå på hurtiglager for adresser (hent):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' lar hurtilagermodulen for adresser hente data fra hurtiglagertabellen.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Slå på lagring av hurtiglager for adresser (lagre):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_get_enabled' lar hurtilagermodulen for adresser lagre data til hurtiglagertabellen.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Innstillinger for Logic Hooks:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Slå på Logic Hooks:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' tillater automatisk oppdatering basert på relaterte objekter. Det er anbefalt å slå dette av når du oppgraderer SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Innstillinger for markør/kart:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Begrensning for kartmarkør:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' setter spørringsbegrensning når du velger oppføringer som skal vises på et kart.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Standard breddegrad for midten av kartet:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' setter standardbreddegradsposisjon for kart.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Standard lengdegrad for midten av kartet:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_latitude' setter standardlengdegradsposisjon for kart.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Standardenhetstype for Kart:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' setter standardmåleenhet for distanser. Lovlige verdier: 'mi' (miles) eller 'km' (kilometer).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Standardavstand for Kart:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' setter standardavstanden for distansebaserte kart.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Innstilling for duplikatmarkør i Kart:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' setter en standardforskyving til lengde- og breddegrad i tilfelle flere markører har samme posisjon.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Kartmarkørklyngestørrelse:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' blir brukt for å sette rutestørrelsen for utregning av kartklynger.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Maksimal zoom for kartmarkørklynge:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' blir brukt for å sette det maksimale zoom-nivået hvor klynger ikke vil bli tatt i bruk.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Viktig melding: Alle lagrede innstillinger kan bli funnet i 'config'-tabellen under kategorier 'jjwg'. Legg merke til at en tilpasset controller.php bør ikke lenger brukes for å overkjøre innstillinger.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Områder';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Markører';
$mod_strings['LBL_PARENT_ID'] = 'Forelder ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP partnere';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Get A Key';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api Key';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Please set the Google Api Key in the Google Maps Administrative Panel.';
