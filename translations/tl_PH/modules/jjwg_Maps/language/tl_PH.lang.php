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
$mod_strings['LBL_MODULE_NAME'] = 'Mga Mapa';
$mod_strings['LBL_MODULE_TITLE'] = 'Mga Mapa: Bahay';
$mod_strings['LBL_MODULE_ID'] = 'Mga Mapa';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Listahan ng mga mapa';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Pananda na pasadya';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Kustom na lugar';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Ang aking listahan ng mga mapa';

$mod_strings['LBL_FLEX_RELATE'] = 'May kaugnayan sa (Gitna):';
$mod_strings['LBL_MODULE_TYPE'] = 'Ang ipakita na tipo ng modyul:';
$mod_strings['LBL_DISTANCE'] = 'Distansya (Radyos):';
$mod_strings['LBL_UNIT_TYPE'] = 'Tipo ng yunit:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Ilahad ang mapa';
$mod_strings['LBL_MAP_LEGEND'] = 'Leyenda:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Mga grupo:';
$mod_strings['LBL_MAP_GROUP'] = 'Grupo';
$mod_strings['LBL_MAP_TYPE'] = 'Klase';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Ang Itinalaga kay:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Kumuha ng mga direksyon';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Maps na Tanawin';

$mod_strings['LNK_NEW_MAP'] = 'Magdagdag ng Bagong Mapa';
$mod_strings['LNK_NEW_RECORD'] = 'Magdagdag ng Bagong Mapa';
$mod_strings['LNK_MAP_LIST'] = 'Listahan ng mga Mapa';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Pagsusulit ng geocode';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Madaliang Radyus ng Mapa';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Wala';
$mod_strings['LBL_MAP_ADDRESS'] = 'Tirahan';
$mod_strings['LBL_MAP_PROCESS'] = 'I-proseso Ito!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Ang huling Istado ng Geocode';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Mga bilang na modyul ng Geocoded';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'Module';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Zero Results';
$mod_strings['LBL_OK'] = 'Sige';
$mod_strings['LBL_INVALID_REQUEST'] = 'Invalid Request';
$mod_strings['LBL_APPROXIMATE'] = 'Approximate';
$mod_strings['LBL_EMPTY'] = 'Walang laman';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Kabuuan';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'I-reset';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Ang talahanayan na makikita sa ibaba ay naglalahad ng bilang ng mga modyul geocoded na bagay, na nakapangkat ayon sa tugon ng geocoding. Isaisip na ang pamantayan sa paggamit ng Google Maps ay hanggang 2500 na hiling lang sa loob ng isang araw. Ang modyul na ito ay magkacache ng mga address na may lamang impormasyon ng geocoding habang ipinoproseso para mabawasan ang pangkalahatang bilang ng kailangang hiling.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Para maiproseso ang mga hiling na geocoding inirerekomenda ang pag-setup kada gabi ng Cron-Job. Ang layunin sa pasadya na punto ng pagpasok ay ginawa para makadaan ng walang pagpapatunay. Ang URL na makikita sa ibaba ay nangangahulugan na maari itong gamitin kasama ng Administrative Scheduled Task. Pakiusap tingnan ang dokumentasyon para sa karagdagang impormasyon.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'I-export ang mga URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Gamitin ang mga link sa ibaba para i-export ang buong address na kinakailangan ng geocoding na impormasyon. Pagkatapos ay gamitin ang online at offline na pangkat ng geocoding na kagamitan para sa mga address ng geocode. Pagkatapos mong mag-geocoding, i-import ang mga address sa loob ng address ng modyul cache na magagamit sa iyong mga mapa. Paalala lamang na ang Address Cache Module ay isang pagpipilian. Lahat ng impormasyon ng geocoding ay nakaimbak sa representante na modyul.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'I-address ang cache';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Idagdag sa listahan ng Target';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'Pino-proseso..';


$mod_strings['LBL_CONFIG_TITLE'] = 'Pagsasaayos ng Settings';
$mod_strings['LBL_CONFIG_SAVED'] = 'Matagumpay na nai-Save ang Settings!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Pagsingil sa Address';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Pagpapadala sa address';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Ang Primerong Address';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Alternatibong Address';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Baluktot na nauugnay';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Address (Simple, Mga gumagamit)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Kustom (Kustom na Controller Logic)';
$mod_strings['LBL_ENABLED'] = 'Paganahin';
$mod_strings['LBL_DISABLED'] = 'Huwag Paganahin';
$mod_strings['LBL_DEFAULT'] = 'Default:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Default:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Wastong mga Modyul ng Geocode:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Wastong Talahanayan ng Geocode:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Address Type Settings: Nangangahulugan ito na ang mga tipo ng modyul address na ginamit kapag ang geocoding nag-a-address. Halaga na katanggap-tanggap: 'billing'; 'shipping'; 'primary'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Tipo na address para ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Tipo ng mga address para sa mga account:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Tipo ng Address para sa mga Kontak:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Tipo ng mga Address para sa mga Lead:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Tipo ng mga Address para sa mga Pagkakataon:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(ng Kaugnayan na Account)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Tipo ng Address para sa mga Kaso:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Tipo ng Address para sa mga Proyekto:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(ng Kaugnayan sa Account/Pagkakataon)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Tipo ng Address para sa mga Pulong:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Tipo ng Address para sa mga Prospect/Target:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Bagay na may kaugnay sa pamamagitan ng Flex Relate Field';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "Marker Group Field Settings: Tumutukoy ito sa 'field' na maaring gamitin bilang isang parametro ng pangkat kapag maipakita ang mga marka na nasa mapa. Halimbawa: assigned_user_name, industriya, estado. sales_stage, prayoridad";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Field ng Pangkat para sa ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Field ng Pangkat para sa mga Account:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Field na Pangkat para sa mga Kontak:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Field na Pangkat para sa mga Lead:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Field na Pangkat para sa mga Pagkakataon:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Field na Pangkat para sa mga Kaso:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Field na Pangkat para sa mga Proyekto:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Field na Pangkat para sa mga Pulong:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Field na Pangkat para sa mga Prospect/Target:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Geocoding/Mga Setting ng Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Geocoding API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Ang URL ng Google Maps Geocoding API o Proxy';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Sikretong Parirala para sa Proxy:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Ang sikretong parirala na ginagamit kasama ang Proxy MD5 na paghahambing.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Limitasyon ng Geocoding:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' itakda ang limitasyon ng query kapag pumipili ng mga tala para i-geocode.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Limitasyon ng Google Geocoding:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' nagtatakda ng limitasyon sa hiling kapag nag-geocoding gamit ang Google Maps API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'I-eksport ang Limitasyon ng Address:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_address_limit' nagtatakda ng limitasyon ng query kapag pumipili ng mga tala na iluluwas.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "Payagan 'APPROXIMATE' mga Tipo ng Lokasyon:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - payagan ang mga tipo ng lokasyon 'APPROXIMATE' para maisaalang-alang ang 'OK' mga resulta ng geocoding.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Address Cache Settings:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Paganahin ang Cache ng Address (Kunin):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' nagpapahintulot sa modyul na address ng cache para makuhang muli ang datos na nagmumula sa talahanayan ng cache.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Paganahin ang Saving Address ng Cache (Save):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' pinapahintulotan ang modyul na address ng cache para mag-save ng datos patungong talahanayan ng cache.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Setting ng mga Kawit na Logic:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Paganahin ang lahat ng mga Kawit ng Logic: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' pinapahintulotan ang mga kawit na logic para sa awtomatikong pagbago base sa kaugnay na mga bagay. Inererekomenda ang pagbalda kapag inia-upgrade ang iyong SuiteCRM.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'Mga Setting ng Marker/Mapping:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Limitasyon ng mga Pananda ng Mapa:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' nagtatakda ng limitasyon ng query kapag namimili ng mga rekord upang maipakita sa mapa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Map Default Center Latitude:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' itinakda ang default center na latitud na posisyon para sa mga mapa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Map Default Center Longhitud:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_center_longitude' itinakda ang default center longhitud na posisyon para sa mga mapa.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Tipo na Yunit ng Map Default:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' itinakda ang default unit measurement na tipo para sa mga kalkulasyon ng distansya. Values: 'mi' (miles) or 'km' (kilometers).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Distansya ng Map Default:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance; itinakda na distansya ng default na gamit para sa distansya ng batay na mga mapa.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Map Duplicate Marker Adjustment:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' itinakda na offset adjustment na idadagdag sa longhitud and latitud kung sakali ito ay may kumopya na posisyon sa marker.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Map Markers Clusterer Grid Size:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' ay ginagamit sa pag-set ng grid size para makalkula ang mga clusterer ng mapa.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Map Markers Clusterer Max Zoom:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' ay ginagamit para makapagset ng pinakamataas na antas ng zoom na maaring hindi i-apply ang clustering.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Mahalagang Palatandaan: Lahat ng nakasave na settings ay maaring makita sa 'config' na talahanayan sa ibaba ng kategorya 'jjwg'. Palatandaan, ang kustom controller.php na file ay hindi na pwedeng gamitin para i-override ang settings.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Ang Mga lugar';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'Mga palatandaan';
$mod_strings['LBL_PARENT_ID'] = 'ID ng magulang';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP ang mga partner';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Kumuha ng key';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api Key';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Pakiusap i-set ang Google Api Key sa Google Maps Administrative Panel.';
