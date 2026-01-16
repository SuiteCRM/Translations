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

$mod_strings['LBL_MAP'] = 'Harita';
$mod_strings['LBL_MODULE_NAME'] = 'Haritalar';
$mod_strings['LBL_MODULE_TITLE'] = 'Haritalar: Giriş';
$mod_strings['LBL_MODULE_ID'] = 'Haritalar';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'Harita listesi';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'Özel işaretleyici';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'Özel bölge';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'Haritalarım listesi';

$mod_strings['LBL_FLEX_RELATE'] = 'İlişkili öge (merkez):';
$mod_strings['LBL_MODULE_TYPE'] = 'Görüntülenecek modül türü:';
$mod_strings['LBL_DISTANCE'] = 'Uzaklık (yarıçap):';
$mod_strings['LBL_UNIT_TYPE'] = 'Birim türü:';

$mod_strings['LBL_MAP_DISPLAY'] = 'Harita görünümü';
$mod_strings['LBL_MAP_LEGEND'] = 'İşaretler:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'Gruplar:';
$mod_strings['LBL_MAP_GROUP'] = 'Grup';
$mod_strings['LBL_MAP_TYPE'] = 'Tür';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'Atanmış kişi:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'Yol tarifi alın';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'Google Haritalar görünümü';

$mod_strings['LNK_NEW_MAP'] = 'Yeni harita ekle';
$mod_strings['LNK_NEW_RECORD'] = 'Yeni harita ekle';
$mod_strings['LNK_MAP_LIST'] = 'Haritaları listele';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'Coğrafi kodlama sınaması';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'Hızlı yarıçap haritası';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'Yok';
$mod_strings['LBL_MAP_ADDRESS'] = 'Adres';
$mod_strings['LBL_MAP_PROCESS'] = 'İşle!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'Son coğrafi kod durumu';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'Modül coğrafi kodlama sayısı';
$mod_strings['LBL_CRON_URL'] = 'Zamanlanmış görev adresi:';
$mod_strings['LBL_MODULE_HEADING'] = 'Modül';

$mod_strings['LBL_N/A'] = 'Kullanılamaz';
$mod_strings['LBL_ZERO_RESULTS'] = 'Sonuç bulunamadı';
$mod_strings['LBL_OK'] = 'Tamam';
$mod_strings['LBL_INVALID_REQUEST'] = 'İstek geçersiz';
$mod_strings['LBL_APPROXIMATE'] = 'Yaklaşık';
$mod_strings['LBL_EMPTY'] = 'Boş';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'Toplam';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'Sıfırla';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'Aşağıdaki tabloda coğrafi kodlama yanıtına göre gruplanmış olarak coğrafi kodlaması yapılmış modül nesnelerinin sayısı görüntülenir. Standart Google Haritalar için günlük kullanım sınırının günde 2.500 istek olduğunu unutmayın. Bu modül istek sayısını azaltmak için işlenen coğrafi kodlama bilgilerini ön belleğe alır.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'Coğrafi kodlama isteklerini işlemek için, her gece çalışacak bir zamanlanmış görev ayarlanması önerilir. Bu amaçla kimlik doğrulaması olmadan erişilebilecek özel bir giriş noktası oluşturulur. Aşağıda görüntülenen adres zamanlanmış bir yönetici görevi ile kullanılır. Ayrıntılı bilgi almak için belgelere bakabilirsiniz.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'Adresleri dışa aktar';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'Coğrafi kodlamaya gerek duyan tüm adresleri dışa aktarmak için aşağıdaki bağlantıları kullanın. Ardından çevrim içi ya da çevrim dışı bir toplu coğrafi kodlama aracı kullanarak adreslerin coğrafi kodlamasını yapın. Coğrafi kodlama işlemini tamamladıktan sonra adresleri haritalarınızla kullanabilmek için adres ön belleği modülünde içe aktarın. Adres ön belleği modülünün isteğe bağlı olarak kurulduğunu unutmayın. Tüm coğrafi kodlama bilgileri görüntüleyecek modülde tutulur.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'Adres ön belleği';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'Hedef listesine ekle';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'İşleniyor...';


$mod_strings['LBL_CONFIG_TITLE'] = 'Yapılandırma ayarları';
$mod_strings['LBL_CONFIG_SAVED'] = 'Ayarlar kaydedildi!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'Fatura adresi';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'Gönderi adresi';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'Birincil adres';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'Diğer adres';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Esnek ilişki';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'Adres (basit, kullanıcılar)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'Özel (özel denetim mantığı)';
$mod_strings['LBL_ENABLED'] = 'Etkin';
$mod_strings['LBL_DISABLED'] = 'Devre dışı';
$mod_strings['LBL_DEFAULT'] = 'Varsayılan:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'Varsayılan:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'Geçerli coğrafi kodlama modülleri:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'Geçerli coğrafi kodlama tabloları:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "Adres türü ayarları: Bu ayarlar, adreslerin coğrafi kodlanması sırasında kullanılacak modüllerin adres türlerini belirler. Şu değerler kullanılabilir: 'billing'; 'shipping'; 'primary'; 'alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'Şunun için adres türü ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'Hesapların adres türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'Kişilerin adres türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'Potansiyellerin adres türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'Fırsatların adres türü:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(ilişkili hesabın)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'Destek kayıtlarının adres türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'Projelerin adres türü:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(ilişkili hesabın/fırsatın)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'Toplantıların adres türü:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'Adayların/hedeflerin adres türü:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'Esnek ilişki alanı ile ilişkili nesne';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "İşaretleyici grubu alan ayarları: Bu seçenek, işaretleyicilerin haritada görüntülenmesi için grup parametresi olarak kullanılacak 'alanı' tanımlar. Örnekler: assigned_user_name, industry, status, sales_stage, priority";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'Şunun grup alanı ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'Hesapların grup alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'Kişilerin grup alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'Potansiyellerin grup alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'Fırsatların grup alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'Destek kayıtlarının grup alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'Projelerin grup alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'Toplantıların grup alanı:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'Adayların/hedeflerin grup alanı:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'Coğrafi kodlama/Google ayarları:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'Coğrafi kodlama API adresi:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'Google Haritalar API V3 ya da vekil sunucunun adresi';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'Vekil sunucu parolası:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'Vekil sunucunun MD5 karşılaştırmasında kullanılacak parola.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'Coğrafi kodlama sınırı:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit' seçeneği, coğrafi olarak kodlanacak kayıtların seçildiği sorgunun kayıt sayısını belirler.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'Google coğrafi kodlama sınırı:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' seçeneği, Google Haritalar API uygulaması üzerinden yapılabilecek coğrafi kodlama isteği sayısı sınırını belirler.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'Adres dışa aktarma sınırı:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit' seçeneği, dışa aktarılacak kayıtların seçildiği sorgunun kayıt sayısını belirler.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "'YAKLAŞIK' konum türleri kullanılabilsin:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approxiamte_location_type' seçeneği - coğrafi kodlama sonuçlarında 'YAKLAŞIK' konum türlerinin 'OK' olarak kabul edilmesini sağlar.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'Adres ön belleği ayarları:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'Adres ön belleği kullanılsın (alma):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' seçeneği, adres ön bellek modülünün ön bellek tablosundan veri almasını sağlar.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'Adres ön belleğine kayıt yapılabilsin (kaydet):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' seçeneği, adres ön bellek modülünün ön bellek tablosuna veri kaydetmesini sağlar.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'Mantıksal bağlantı ayarı:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'Tüm mantıksal bağlantılar etkinleştirilsin: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' seçeneği, ilişkili nesnelere dayalı otomatik güncellenen mantık bağlantıları yapılmasını sağlar. SuiteCRM kopyanızı güncellerken bu seçeneği devre dışı bırakmanız önerilir.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'İşaretleyici/eşleştirme ayarları:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "Harita işaretleyicileri sayısı:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' seçeneği, bir haritada görüntülenecek işaretleyicileri seçen sorgunun kayıt sayısını belirler.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "Varsayılan harita merkezi enlemi:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' seçeneği, haritalar için varsayılan merkez enlem konumunu belirler.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "Varsayılan harita merkezi boylamı:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' seçeneği, haritalar için varsayılan merkez boylam konumunu belirler.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "Varsayılan harita birim türü:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' seçeneği, uzaklık hesaplamaları için varsayılan olarak kullanılacak ölçü birimi türünü belirler. Değerler: 'mi' (mil) ya da 'km' (kilometre).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "Varsayılan harita uzaklığı:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' seçeneği, uzaklığa dayalı haritalar için varsayılan olarak kullanılacak uzaklığı belirler.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "Harita çift işaretleyici ayarı:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker' seçeneği, işaretçi konumunun çift olmasını engellemek için boylam ve enleme eklenecek bir kayma değeri belirler.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "Harita işaretleri kümeleyici ızgara boyutu:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' seçeneği, harita kümeleyicilerini hesaplamak için kullanılacak ızgara boyutunu belirler.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "Harita işaretleri kümeleyici en fazla yakınlaştırma:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' seçeneği, hangi kümelemenin uygulanmayacağını ayarlayan en fazla yakınlaştırma düzeyini belirler.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "Önemli Not: Kaydedilen tüm ayarlar 'config' tablosunda 'jjwg' kategorisi altında bulunabilir. Ayarları değiştirmek için artık özel bir controller.php dosyası kullanılmaması gerektiğini unutmayın.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'Bölgeler';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'İşaretleyiciler';
$mod_strings['LBL_PARENT_ID'] = 'Üst öge kodu';
$mod_strings['LBL_JJWP_PARTNERS'] = 'JJWP iş ortakları';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'Bir anahtar edinin';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google API anahtarı';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'Lütfen Google Haritalar yönetim panosundaki Google API Anahtarını ayarlayın.';
