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

$mod_strings['LBL_MAP'] = 'نقشہ';
$mod_strings['LBL_MODULE_NAME'] = 'نقشہ جات';
$mod_strings['LBL_MODULE_TITLE'] = 'نقشہ جات: ہوم';
$mod_strings['LBL_MODULE_ID'] = 'نقشہ جات';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'نقشے کی فہرست';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'اپنی مرضی کے مارکر';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'اپنی مرضی کا علاقہ';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'میرے نقشوں کی فہرست سازی';

$mod_strings['LBL_FLEX_RELATE'] = 'سے متعلق (مرکز):';
$mod_strings['LBL_MODULE_TYPE'] = 'ڈسپلے کے لیے ماڈیول قسم:';
$mod_strings['LBL_DISTANCE'] = 'فاصلہ (ریڈیوس):';
$mod_strings['LBL_UNIT_TYPE'] = 'یونٹ کی قسم:';

$mod_strings['LBL_MAP_DISPLAY'] = 'نقشے کا ڈسپلے';
$mod_strings['LBL_MAP_LEGEND'] = 'علامات:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'گروپ:';
$mod_strings['LBL_MAP_GROUP'] = 'گروپ';
$mod_strings['LBL_MAP_TYPE'] = 'قسم';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'مقرر کردہ سے:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'ہدایات حاصل کریں';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'گوگل میپس دیکھیں';

$mod_strings['LNK_NEW_MAP'] = 'نیا نقشہ شامل کریں';
$mod_strings['LNK_NEW_RECORD'] = 'نیا نقشہ شامل کریں';
$mod_strings['LNK_MAP_LIST'] = 'نقشے کی فہرست';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'جیو کوڈنگ کی جانچ پڑ';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'فوری ریڈیوس نقشہ';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'کوئی نہیں';
$mod_strings['LBL_MAP_ADDRESS'] = 'پتہ';
$mod_strings['LBL_MAP_PROCESS'] = 'یہ عمل کرو!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'آخری جیوکوڈ حیثیت';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'ماڈیول جیو کوڈ شمار';
$mod_strings['LBL_CRON_URL'] = 'کرون یو آر ایل:';
$mod_strings['LBL_MODULE_HEADING'] = 'ماڈیول';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Zero Results';
$mod_strings['LBL_OK'] = 'درست ہے ٹھیک ہے';
$mod_strings['LBL_INVALID_REQUEST'] = 'Invalid Request';
$mod_strings['LBL_APPROXIMATE'] = 'Approximate';
$mod_strings['LBL_EMPTY'] = 'خالی';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'حاصل جمع';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'دوبارہ سیٹ کریں';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'دکھایا گیا ٹیبل بیلوڈنگ ردعمل کے ذریعہ جیوڈڈڈ ماڈیول اشیاء کی تعداد دکھاتا ہے. ذہن معیاری گوگل نقشہ جات کے استعمال کی حد فی دن 2500 درخواستوں ہے کہ ذہن میں رکھیں. اس ماڈیول کی ضروریات کی مجموعی تعداد کو کم کرنے کے لئے پروسیسنگ کے دوران پتے جیو کوڈنگ کی معلومات کو کیش کرے گی.';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'جیو کوڈنگ کی درخواستوں کو عمل کرنے کے لئے یہ رات کو کلون ملازمت سیٹ کرنے کے لئے سفارش کی جاتی ہے. اس مقصد کے لئے اپنی مرضی کے اندراج نقطہ بنائے گئے ہیں اور تصدیق کے بغیر رسائی حاصل کی جاسکتی ہے. مندرجہ ذیل دکھایا گیا ہے جس کا مطلب ایڈمنسٹریشنل شیڈول شدہ ٹاسک کے ساتھ استعمال ہوتا ہے. مزید معلومات کے لئے دستاویزات ملاحظہ کریں.';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'یو آر ایلز برآمد کریں';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'جیو کیوڈنگ معلومات کی ضرورت میں مکمل پتے برآمد کرنے کے لئے مندرجہ ذیل لنکس کا استعمال کریں. پھر پتے کو جیوکوڈ کرنے کے لئے ایک آن لائن یا آف لائن بیچ جیو کوڈنگ کا آلہ استعمال کریں. جب آپ جیو کوڈنگ ختم ہو گئے ہیں تو، ایڈریس کیش ماڈیول میں اپنے نقشوں کے ساتھ استعمال ہونے کے لئے ایڈریس کو درآمد کریں. نوٹ، ایڈریس کیش ماڈیول اختیاری ہے. جغرافیائی معلومات تمام نمائندہ ماڈیول میں محفوظ کیا جاتا ہے.';
$mod_strings['LBL_ADDRESS_CACHE'] = 'کیش کا پتا';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'ھدف کی فہرست میں شامل کریں';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'عمل کر رہا ہے...';


$mod_strings['LBL_CONFIG_TITLE'] = 'ترتیب کی سیٹنگز';
$mod_strings['LBL_CONFIG_SAVED'] = 'ترتیبات کامیابی سے محفوظ ہوگئیں!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'بلنگ کا پتا';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'شپنگ کا معلوماتی پتہ';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'ابتدائی پتہ';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'متبادل ایڈریس';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'موڑنے سے متعلق';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'ایڈریس (سادہ، صارفین)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'اپنی مرضی (اپنی مرضی کا کنٹرولر منطق)';
$mod_strings['LBL_ENABLED'] = 'فعال کریں';
$mod_strings['LBL_DISABLED'] = 'غیر فعال';
$mod_strings['LBL_DEFAULT'] = 'پہلے سے طے شدہ:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'پہلے سے طے شدہ:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'درست جیو کوڈ ماڈیولز:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'درست جیو کوڈ ٹیبلز:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "ایڈریس کی قسم کی ترتیبات: یہ جغرافیائی پتے جب استعمال کیا جاتا ہے ماڈیولز ایڈریس کی اقسام کی وضاحت کرتا ہے. قابل قبول قیمت: 'بلنگ'؛ 'شپنگ'؛ 'پرائمری'؛ 'alt'؛ 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'ایڈریس قسم کے لیے ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'اکاؤنٹس کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'رابطے کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'لیڈز کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'مواقعوں کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(متعلقہ اکاؤنٹ)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'مقدمات کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'منصوبوں کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(متعلقہ اکاؤنٹ / مواقع)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'ملاقاتوں کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'امکانات / اہداف کے لئے ایڈریس کی قسم:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'فلیکس ریلیٹ فیلڈ کے ذریعے متعلقہ آبجیکٹ';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "مارکر گروپ فیلڈ کی ترتیبات: یہ نقشہ پر مارکروں کو ظاہر کرتے وقت 'فیلڈ' گروپ کے پیرامیٹر کے طور پر استعمال کیا جاتا ہے. مثال: تفویض_سائر_ نام، صنعت، حیثیت، فروخت کا عمل، ترجیح";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'گروپ فیلڈ کے لئے ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'اکاؤنٹس کے لئے گروپ فیلڈ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'رابطوں کے لئے گروپ فیلڈ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'لیڈز کے لئے گروپ فیلڈ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'مواقع کے لئے گروپ فیلڈ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'مقدمات کے لئے گروپ فیلڈ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'منصوبوں کے لئے گروپ فیلڈ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'اجلاسوں کے لئے گروپ فیلڈ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'امکانات / مقاصد کے لئے گروپ فیلڈ:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'جیو کوڈ / گوگل کی ترتیبات:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'جیو کوڈنگ API یو آر ایل:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'گوگل میپس جیوکوڈ API یا پراکسی کا یو آر ایل';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'پراکسی کے لئے خفیہ جملے:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'پراکسی MD5 مقابلے کے ساتھ خفیہ استعمال استعمال کیا جائے گا.';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'جیو کوڈنگ کی حد:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "geocode_limit 'جیوکوڈ میں ریکارڈ کا انتخاب کرتے وقت سوال کی حد کو مقرر کرتا ہے.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'گوگل جیو کوڈنگ کی حد:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "گوگل نقشہ جات API کا استعمال جیو کوڈنگ کے جب 'google_geocoding_limit کی درخواست کی حد کا تعین.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'برآمد ایڈریس کی حد:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "برآمد کرنے کے ریکارڈ کو منتخب کرتے وقت 'export_addresses_limit' سوال کی حد مقرر کرتا ہے.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "'اطمینان بخش' مقام کی اقسام کی اجازت دیں:";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "برآمد کرنے کے ریکارڈ کو منتخب کرتے وقت 'export_addresses_limit' سوال کی حد مقرر کرتا ہے.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'ایڈریس کیشے کی ترتیبات:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'پتہ کیش کو فعال کریں (حاصل کریں):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' کو ایڈریس کیش ماڈیول کیش کی میز سے ڈیٹا کو دوبارہ حاصل کرنے کی اجازت دیتا ہے.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'بچت ایڈریس کیشے (محفوظ کریں) کو فعال کریں:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' ایڈریس کیش ماڈیول کیش کی میز پر ڈیٹا کو بچانے کی اجازت دیتا ہے.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'منطق ہکس کی ترتیب:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'تمام منطق ہکس کو فعال کریں: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' متعلقہ اشیاء پر مبنی خود کار طریقے سے اپ ڈیٹ کرنے کے لئے منطق ہکس کی اجازت دیتا ہے. اپنے سویٹ آر آر ایم کو اپ گریڈ کرنے کے بعد یہ غیر فعال کرنے کی سفارش کی جاتی ہے.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'مارکر / نقشہ سازی کی ترتیبات:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "نقشہ مارکر کی حد:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "نقشے پر ظاہر کرنے کے ریکارڈ کو منتخب کرتے وقت 'map_markers_limit' سوال کی حد مقرر کرتا ہے.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "نقشہ طے شدہ سینٹر الادا:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' نقشے کے لئے ڈیفالٹ سینٹر طول و عرض کی حیثیت کا تعین کرتا ہے.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "نقشہ طے شدہ سینٹر طول البلد:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' نقشے کے لئے ڈیفالٹ سینٹر طول و عرض کی حیثیت کا تعین کرتا ہے.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "نقشہ طے شدہ یونٹ کی قسم:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' فاصلے کی حساب کے لئے پہلے سے طے شدہ یونٹ کی پیمائش کی قسم کا تعین کرتا ہے. اقدار: 'mi' (میل) یا 'کلومیٹر' (کلو میٹر).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "نقشہ طے شدہ فاصلہ:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' فاصلے پر مبنی نقشے کے لئے استعمال کردہ ڈیفالٹ فاصلے کا تعین کرتا ہے.";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "نقشہ ڈپلیکیٹ مارکر ایڈجسٹمنٹ:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' کو ڈراپ مارکر پوزیشن کی صورت میں طول و عرض اور طول و عرض میں ایک آفسیٹ ایڈجسٹمنٹ شامل کیا جاتا ہے.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "نقشہ مارکر کلسٹرر گرڈ سائز:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "نقشہ کلستر کے حساب سے گرڈ سائز قائم کرنے کیلئے 'map_clusterer_grid_size' استعمال کیا جاتا ہے.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "نقشہ مارکر کلسٹرر زیادہ سے زیادہ زوم:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' استعمال کیا جاتا ہے زیادہ سے زیادہ زوم کی سطح کو مقرر کرنے کے لئے جس میں کلسٹرنگ لاگو نہیں کیا جائے گا.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "اہم نوٹ: تمام 'محفوظ کردہ ترتیبات' 'jjwg' کے تحت 'config' ٹیبل میں پایا جا سکتا ہے. نوٹ، ایک حسب ضرورت کنٹرولر فائل فائل کو اب ترتیبات کو اوورائڈ کرنے کیلئے استعمال نہیں کرنا چاہئے.";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'علاقہ جات';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'مارکرز';
$mod_strings['LBL_PARENT_ID'] = 'والدین کی شناخت';
$mod_strings['LBL_JJWP_PARTNERS'] = 'ججوپ پارٹنرز';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'ایک کلید حاصل کریں';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'گوگل اے پی آئی کی چابی';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'گوگل میپس انتظامی پینل میں گوگل اے پی آئی کی کلید مقرر کریں.';
