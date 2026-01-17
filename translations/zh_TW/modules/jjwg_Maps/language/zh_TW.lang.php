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

$mod_strings['LBL_MAP'] = '地圖';
$mod_strings['LBL_MODULE_NAME'] = '地圖';
$mod_strings['LBL_MODULE_TITLE'] = '地圖: 首頁';
$mod_strings['LBL_MODULE_ID'] = '地圖';
$mod_strings['LBL_LIST_FORM_TITLE'] = '地圖清單';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = '自訂標記';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = '自訂區域';
$mod_strings['LBL_HOMEPAGE_TITLE'] = '我的地圖清單';

$mod_strings['LBL_FLEX_RELATE'] = '關聯到 (中心):';
$mod_strings['LBL_MODULE_TYPE'] = '要顯示的模組類型:';
$mod_strings['LBL_DISTANCE'] = '距離 (半徑):';
$mod_strings['LBL_UNIT_TYPE'] = '單位類型:';

$mod_strings['LBL_MAP_DISPLAY'] = '地圖顯示';
$mod_strings['LBL_MAP_LEGEND'] = '圖例:';
$mod_strings['LBL_MAP_USER_GROUPS'] = '群組:';
$mod_strings['LBL_MAP_GROUP'] = '群組';
$mod_strings['LBL_MAP_TYPE'] = '類型';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = '負責人:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = '取得路線';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Maps 檢視';

$mod_strings['LNK_NEW_MAP'] = '添加新地圖';
$mod_strings['LNK_NEW_RECORD'] = '添加新地圖';
$mod_strings['LNK_MAP_LIST'] = '查看地圖';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = '地理編碼測試';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = '快速查看地圖';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = '無';
$mod_strings['LBL_MAP_ADDRESS'] = '地址';
$mod_strings['LBL_MAP_PROCESS'] = '執行！';

$mod_strings['LBL_MAP_LAST_STATUS'] = '上次的地理編碼狀態';
$mod_strings['LBL_GEOCODED_COUNTS'] = '模組地理編碼計數';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = '模組';

$mod_strings['LBL_N/A'] = '不適用';
$mod_strings['LBL_ZERO_RESULTS'] = '沒有符合結果';
$mod_strings['LBL_OK'] = '確定';
$mod_strings['LBL_INVALID_REQUEST'] = '不合法的請求';
$mod_strings['LBL_APPROXIMATE'] = '近似';
$mod_strings['LBL_EMPTY'] = '空';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = '總計';
$mod_strings['LBL_MODULE_RESET_HEADING'] = '重置';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = '以下表格顯示已地理編碼的模組物件數目，按地理編碼回應分群。請記住，標準Google Maps限制一天最多2500則要求(request)。這個模組會將地址的地理編碼資訊建立Cache，以減少所需要的要求總數。';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = '為了處理地理編碼要求，建議你設定一個夜間作業的 Cron-Job。為此目的，一個自訂的進入點會被創立並且可不經驗證進行存取。以下URL是為了管理用途的排程任務。請參閱文件以了解更多資訊。';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = '匯出 URLs';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = '可使用以下連結來匯出完整的地址供地理編碼使用。然後線上或離線批次地使用編碼工具來處理地理編碼。當你完成地理編碼後，將這些資訊導入到地址Cache模組以供你的地圖使用。請注意，地址Cache模組是可選的。所有的地理編碼資訊會儲存在相對應模組中。';
$mod_strings['LBL_ADDRESS_CACHE'] = '地址快取';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = '添加到目標清單';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = '處理中...';


$mod_strings['LBL_CONFIG_TITLE'] = '配置設定';
$mod_strings['LBL_CONFIG_SAVED'] = '設定已成功儲存！';
$mod_strings['LBL_BILLING_ADDRESS'] = '帳單地址';
$mod_strings['LBL_SHIPPING_ADDRESS'] = '裝運地址';
$mod_strings['LBL_PRIMARY_ADDRESS'] = '關鍵聯繫地址';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = '替代地址';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = '彈性關聯';
$mod_strings['LBL_ADDRESS_ADDRESS'] = '地址 (簡單, 使用者)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = '自訂 (自訂控制器邏輯)';
$mod_strings['LBL_ENABLED'] = '開啟';
$mod_strings['LBL_DISABLED'] = '已停用';
$mod_strings['LBL_DEFAULT'] = '預設:';
$mod_strings['LBL_CONFIG_DEFAULT'] = '預設:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = '有效的地理編碼模組:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = '有效的地理編碼表:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "地址類型設定: 這用來定義模組的地址類型用來進行地理編碼。可接受的值: 'billing'; 'shipping'; 'primary'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = '地址類型 ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = '客戶地址類型:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = '連絡人地址類型:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = '潛在客戶地址類型:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = '商業機會地址類型:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(關聯的客戶)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = '案例地址類型:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = '專案地址類型:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(關聯的客戶/商機)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = '會議地址類型:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = '前景/目標地址類型:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = '來自彈性關聯欄位的物件';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "標記欄位群組設定: 這裡定義了 'field' 作為群組參數用來在地圖上顯示標記。例: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = '欄位群組 ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = '客戶欄位群組:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = '連絡人欄位群組:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = '潛在客戶欄位群組:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = '商機欄位群組:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = '案例欄位群組:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = '專案分組欄位:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = '會議欄位群組:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = '前景/目標欄位群組:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = '地理編碼/Google設定:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = '地理編碼 API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Google Maps API V3 或 Proxy 的 URL';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Proxy 的 Secret Phrase:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Secret Phrase 用在 Proxy 的MD5比對。';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = '地理編碼限制:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' 設定地理編碼紀錄的查詢限制。";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Googe 地理編碼限制:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' 設定 Google Maps API 的地理編碼請求限制。";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = '匯出地址限制:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' 設定匯出記錄時的查詢限制。";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "允許 'APPROXIMATE' (相似) 位置類型:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - 允許地理編碼結果中位置類型是 'APPROXIMATE' 的被視為 'OK' 。";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = '地址 Cache 設定:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = '啟用地址 Cache (Get):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' 允許地址Cache模組從Cache表格中檢索資料。";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = '啟用儲存地址 Cache (Save):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' 允許地址Cache模組將資料儲存到Cache表格中。";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Logic Hook 設定:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = '啟用全部 Logic Hook: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' 允許Logic Hook基於相關物件的自動更新。在升級您的 SuiteCRM 時建議禁用此選項。";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = '標記/地圖設定:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "地圖標記限制:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' 設定選擇記錄顯示在地圖上的查詢限制。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "地圖預設中心緯度:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' 設定地圖預設中心位置的緯度。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "地圖預設中心經度:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_latitude' 設定地圖預設中心位置的經度。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "地圖預設距離單位:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' 設定用來測量計算距離的預設單位。可用值: 'mi' (英里) 或者 'km' (公里)。";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "地圖預設距離:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' 設定基於距離的地圖中的預設距離。";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "地圖重複標記調整:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' 設定當有標記在重複的位置上時，經度和緯度的調整偏移量。";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "地圖標示叢集網格大小:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' 用來設定網格大小用以計算地圖叢集。";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "地圖標示叢集最大縮放:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' 用來設定，當縮放最大到哪個等級時，叢集將不會被使用。";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "重要提示: 所有儲存的設定皆可在類別 'jjwg' 的 'config' 表格中找到。注意，自訂的 controller.php 檔案不該再用於覆蓋設定。";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = '區域';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = '標記';
$mod_strings['LBL_PARENT_ID'] = '父記錄ID';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP 合作夥伴';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = '取得金鑰';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google API 金鑰';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = '請設定 Google Maps 管理面板中的 Google API 金鑰。';
