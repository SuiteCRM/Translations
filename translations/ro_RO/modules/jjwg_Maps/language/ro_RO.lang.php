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

$mod_strings['LBL_MAP'] = 'Hartă';
$mod_strings['LBL_MODULE_NAME'] = 'Hărți';
$mod_strings['LBL_MODULE_TITLE'] = 'Hărți: Acasă';
$mod_strings['LBL_MODULE_ID'] = 'Hărți';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Listare hărți';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Marker personalizat';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Zonă personalizată';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Lista mea de hărți';

$mod_strings['LBL_FLEX_RELATE'] = 'Legat de (centru):';
$mod_strings['LBL_MODULE_TYPE'] = 'Tip modul de afișat:';
$mod_strings['LBL_DISTANCE'] = 'Distanță (Radius):';
$mod_strings['LBL_UNIT_TYPE'] = 'Tipul unității:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Afișare hartă';
$mod_strings['LBL_MAP_LEGEND'] = 'Legendă:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Grupuri:';
$mod_strings['LBL_MAP_GROUP'] = 'Grup';
$mod_strings['LBL_MAP_TYPE'] = 'Tip';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Atribuit lui:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Obțineți Indicații de orientare';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Vizualizare hărți Google';

$mod_strings['LNK_NEW_MAP'] = 'Adaugă hartă nouă';
$mod_strings['LNK_NEW_RECORD'] = 'Adaugă hartă nouă';
$mod_strings['LNK_MAP_LIST'] = 'Listă de hărți';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Test Geocode-are';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Hartă cu rază rapidă';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Niciun';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adresă';
$mod_strings['LBL_MAP_PROCESS'] = 'Procesează-l!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Ultimul status Geocode';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Module numărare Geocode';
$mod_strings['LBL_CRON_URL'] = 'URL cron:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modul';

$mod_strings['LBL_N/A'] = 'Neaplicabil';
$mod_strings['LBL_ZERO_RESULTS'] = 'Fără rezultate';
$mod_strings['LBL_OK'] = 'Ok';
$mod_strings['LBL_INVALID_REQUEST'] = 'Cerere invalidă';
$mod_strings['LBL_APPROXIMATE'] = 'Aproximare';
$mod_strings['LBL_EMPTY'] = 'Gol';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Total';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Resetează';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Tabelul de mai jos arată numărul de obiecte Geocode, grupate după răspuns. Rețineți că limita standard de utilizare Google Maps este de 2500 de cereri pe zi. Acest modul va salva informațiile de geocodificare a adreselor în timpul procesării pentru a reduce numărul total de cereri necesare.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Pentru a procesa cererile de geocodare este recomandat să configurați un Cron-Job. A fost creat un punct de intrare personalizat în acest scop și poate fi accesat fără autentificare. URL-ul indicat mai jos este destinat utilizării cu o sarcină administrativă programată. Vă rugăm să consultați documentația pentru mai multe informații.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Exportă URL-uri';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Utilizați link-urile de mai jos pentru a exporta adrese complete care au nevoie de informații de geocodare. Apoi folosește o unealtă de geocodare online sau offline pentru a geocoda adresele. Când ați terminat de geocodat, importați adresele în modulul Cache de adrese pentru a fi utilizat cu hărțile dvs. Notă: modulul Cache de adrese este opțional. Toate informațiile de geocodare sunt stocate în modulul reprezentativ.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Adresă cache';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Adaugă la lista țintă';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Procesare...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Setări de configurare';
$mod_strings['LBL_CONFIG_SAVED'] = 'Setări salvate cu succes!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Adresa de facturare';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Adresa transport';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Adresă Principală';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Adresă alternativă';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Asociază Flexibilă';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adresă (Simplu, Utilizatori)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Personalizat (Custom Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Accesibil';
$mod_strings['LBL_DISABLED'] = 'Dezactivat';
$mod_strings['LBL_DEFAULT'] = 'Implicit:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Implicit:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Module de Geocode valide:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Tabele de Geocode valide:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Setări tip adresă: Aceasta definește tipurile de adrese utilizate la geocodarea adreselor. Valori acceptabile: 'facturare'; 'livrare'; 'primar'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Tip de adresă pentru ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Tip de adresă pentru conturi:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Tip de adresă pentru contacte:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Tip de adresă pentru conversie:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Tip de adresă pentru oportunități:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(din conturile conexe)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Tip de adresă pentru cazuri:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Tip de adresă pentru proiecte:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(de Cont/Oportunitate conexe)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Tip de adresă pentru întâlniri:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Tip de adresă pentru potențiali clienți/ținte:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Obiect legat prin relație flexibilă';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Setări câmp Grup Marcaj: Aceasta definește 'câmpul' care va fi folosit ca parametru de grup la afișarea marcajelor pe o harta. Exemple: atribuire_urilizator_nume, industrie, status, stadiu, vânzări_etapă, prioritate";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Grupează câmp pentru ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Grupează câmp pentru conturi:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Grupează câmp pentru contacte:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Grupează câmp pentru conversii:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Grupează câmp pentru oportunități:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Grupează câmp pentru cazuri:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Grupează câmp pentru proiecte:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Grupează câmp pentru întâlniri:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Grupează câmp pentru prospecți/tinte:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Setări Geocoding/Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'URL API Geocod:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL-ul de Google Maps API V3 sau Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Frază secretă pentru Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Fraza secretă care va fi utilizată împreună cu comparația Proxy MD5.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Geocodare limită:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' stabilește limita de interogare la selectarea înregistrărilor pe Geocod.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Limită Google Geocoding:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' stabilește limita de cerere la Geocod folosind API-ul Google Maps.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Limită de export adrese:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_adrese_limit' stabilește limita de interogare la selectarea înregistrărilor pentru export.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Permiteți tipurile de localizare 'APROXIMATIV\":";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - permite tipurilor de locație ale 'APPROXIMATIV' să fie considerate rezultate Geocodare 'OK'.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Setări adresă cache:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Activează adrese cache (Obține):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' permite modulului de cache să preia datele din tabelul cache-ului.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Activează salvare cache pe adresă (Salvare):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' permite modulului de adrese cache să salveze datele în tabelul de cache.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Setări cârlige logice:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Activează toate cârligele logice: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' permite cârligele logice pentru actualizarea automată pe baza obiectelor înrudite. Este recomandat să dezactivați când vă actualizați SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Setările marcajelor/hărților:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limita de marcaje harta:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' setează limita de interogare la selectarea înregistrărilor de afișat pe o hartă.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Latitudine implicită pentru centrul hărții:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' setează poziția implicită centrată a latitudinii pentru hărți.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Longitudine implicită pentru centrul hărții:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' setează poziția implicită a longitudinii pe centrul hărți.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Hartă tip unitate de măsură implicită:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' stabilește tipul implicit de unitate de măsură pentru calculul distanței. Valori: 'mi' (mile) sau 'km' (kilometri).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Distanță implicită pe hartă:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' stabilește distanța implicită utilizată pentru distanțele pe hărți.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Ajustarea marcajelor duplicatei pe hartă:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' stabilește o ajustare de compensare care trebuie adăugată la longitudine și latitudine în cazul poziției duplicat a marcajului.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Dimensiunea grilei pentru gruparea marcajelor pe hartă:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' este folosit pentru a seta dimensiunea grilei pentru calcularea grupajelor pe hartă.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Grupează marcajele pe hartă la nivel maxim de mărire:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' este folosit pentru a stabili nivelul maxim de mărire la care gruparea care nu va fi aplicată.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Notă importantă: Toate setările salvate pot fi găsite în tabelul 'config' din categoria 'jwg'. Nota: fișierul controller.php personalizat nu mai trebuie fi folosit pentru a suprascrie setările.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Zone';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Marcajele';
$mod_strings['LBL_PARENT_ID'] = 'ID Părinte';
$mod_strings['LBL_JJWP_PARTNERS'] = 'Parteneri JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Obține cheia de acces';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Cheie Api Google';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Vă rugăm să setați Google Api Key în panoul administrativ Google Maps.';
