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

$mod_strings['LBL_MAP'] = 'แผนที่';
$mod_strings['LBL_MODULE_NAME'] = 'แผนที่';
$mod_strings['LBL_MODULE_TITLE'] = 'แผนที่: หน้าแรก';
$mod_strings['LBL_MODULE_ID'] = 'แผนที่';
$mod_strings['LBL_LIST_FORM_TITLE'] = 'แผนที่';
$mod_strings['LBL_MAP_CUSTOM_MARKER'] = 'เครื่องหมายที่กำหนดเอง';
$mod_strings['LBL_MAP_CUSTOM_AREA'] = 'พื้นที่ที่กำหนดเอง';
$mod_strings['LBL_HOMEPAGE_TITLE'] = 'การลงรายชื่อแผนที่ของฉัน';

$mod_strings['LBL_FLEX_RELATE'] = 'เกี่ยวกับ (ศูนย์):';
$mod_strings['LBL_MODULE_TYPE'] = 'ประเภทโมดูลที่จะแสดง:';
$mod_strings['LBL_DISTANCE'] = 'ระยะทาง (รัศมี):';
$mod_strings['LBL_UNIT_TYPE'] = 'ประเภทหน่วย:';

$mod_strings['LBL_MAP_DISPLAY'] = 'แสดงแผนที่';
$mod_strings['LBL_MAP_LEGEND'] = 'ตำนาน:';
$mod_strings['LBL_MAP_USER_GROUPS'] = 'กลุ่ม:';
$mod_strings['LBL_MAP_GROUP'] = 'กลุ่ม';
$mod_strings['LBL_MAP_TYPE'] = 'ประเภท';
$mod_strings['LBL_MAP_ASSIGNED_TO'] = 'กำหนดให้:';
$mod_strings['LBL_MAP_GET_DIRECTIONS'] = 'ขอเส้นทาง';
$mod_strings['LBL_MAP_GOOGLE_MAPS_VIEW'] = 'ดูแผนที่ Google';

$mod_strings['LNK_NEW_MAP'] = 'เพิ่มแผนที่ใหม่';
$mod_strings['LNK_NEW_RECORD'] = 'เพิ่มแผนที่ใหม่';
$mod_strings['LNK_MAP_LIST'] = 'รายการแผนที่';

$mod_strings['LBL_MAP_ADDRESS_TEST'] = 'ทดสอบระบุพิกัดทางภูมิศาสตร์';
$mod_strings['LBL_MAP_QUICK_RADIUS'] = 'แผนที่รัศมีด่วน';
$mod_strings['LBL_MAP_NULL_GROUP_NAME'] = 'ไม่มี';
$mod_strings['LBL_MAP_ADDRESS'] = 'ที่อยู่';
$mod_strings['LBL_MAP_PROCESS'] = 'ประมวลผล!';

$mod_strings['LBL_MAP_LAST_STATUS'] = 'สถานะพิกัดทางภูมิศาสตร์ครั้งล่าสุด';
$mod_strings['LBL_GEOCODED_COUNTS'] = 'โมดูลการนับระบุพิกัดทางภูมิศาสตร์';
$mod_strings['LBL_CRON_URL'] = 'Cron URL:';
$mod_strings['LBL_MODULE_HEADING'] = 'โมดูล';

$mod_strings['LBL_N/A'] = 'N/A';
$mod_strings['LBL_ZERO_RESULTS'] = 'Zero Results';
$mod_strings['LBL_OK'] = 'ตกลง';
$mod_strings['LBL_INVALID_REQUEST'] = 'Invalid Request';
$mod_strings['LBL_APPROXIMATE'] = 'Approximate';
$mod_strings['LBL_EMPTY'] = 'ว่างเปล่า';

$mod_strings['LBL_MODULE_TOTAL_HEADING'] = 'ผลรวม';
$mod_strings['LBL_MODULE_RESET_HEADING'] = 'ตั้งค่าใหม่';
$mod_strings['LBL_GEOCODED_COUNTS_DESCRIPTION'] = 'ตารางแสดงสถานะที่ระบุแสดงจำนวนอ๊อปเจ็คในแบบจำลองที่กำหนดด้วยพิกัดทางภูมิศาสตร์โดยจัดกลุ่มตามการตอบรหัสพิกัดทางภูมิศาสตร์ โปรดจำไว้ว่าขีด จำกัด การใช้งานมาตรฐานของ Google Maps คือ 2500 คำขอต่อวัน โมดูลนี้จะแคชข้อมูลพิกัดทางภูมิศาสตร์ที่อยู่ระหว่างการประมวลผลเพื่อลดจำนวนคำขอทั้งหมดที่ต้องการ';

$mod_strings['LBL_CRON_INSTRUCTIONS'] = 'ในการประมวลผลคำขอระบุพิกัดทางภูมิศาสตร์ ขอแนะนำให้ตั้ง Cron-Job ทุกคืน จุดเข้าที่กำหนดเองได้รับการสร้างขึ้นเพื่อจุดประสงค์นี้และสามารถเข้าถึงได้โดยไม่ต้องมีการตรวจสอบสิทธิ์ URL ที่แสดงด้านล่างนี้มีไว้เพื่อใช้กับงานที่กำหนดเวลาที่ผู้ดูแลระบบกำหนดไว้ โปรดดูเอกสารประกอบสำหรับข้อมูลเพิ่มเติม';
$mod_strings['LBL_EXPORT_ADDRESS_URL'] = 'ส่งออก URL';
$mod_strings['LBL_EXPORT_INSTRUCTIONS'] = 'ใช้ลิงก์ด้านล่างเพื่อส่งออกที่อยู่แบบเต็มที่ต้องการข้อมูลพิกัดทางภูมิศาสตร์ จากนั้นใช้เครื่องมือสร้างพิกัดทางภูมิศาสตร์แบบแบทช์ออนไลน์หรือออฟไลน์เพื่อระบุที่อยู่ เมื่อเสร็จสิ้นการระบุพิกัดทางภูมิศาสตร์ให้นำเข้าที่อยู่ลงในโมดูลแคชที่อยู่ที่จะใช้กับแผนที่ของคุณ หมายเหตุโมดูลแคชที่อยู่เป็นตัวเลือก ข้อมูลพิกัดทางภูมิศาสตร์ทั้งหมดจะถูกเก็บไว้ในโมดูลตัวแทน';
$mod_strings['LBL_ADDRESS_CACHE'] = 'ที่อยู่แคช';
$mod_strings['LBL_ADD_TO_TARGET_LIST'] = 'เพิ่มลงในรายการเป้าหมาย';
$mod_strings['LBL_ADD_TO_TARGET_LIST_PROCESSING'] = 'กำลังดำเนินการ';


$mod_strings['LBL_CONFIG_TITLE'] = 'การตั้งค่าการกำหนดค่า';
$mod_strings['LBL_CONFIG_SAVED'] = 'บันทึกการตั้งค่าเรียบร้อยแล้ว!';
$mod_strings['LBL_BILLING_ADDRESS'] = 'ที่อยู่เรียกเก็บเงิน';
$mod_strings['LBL_SHIPPING_ADDRESS'] = 'ที่อยู่จัดส่ง';
$mod_strings['LBL_PRIMARY_ADDRESS'] = 'ที่อยู่หลัก';
$mod_strings['LBL_ALTERNATIVE_ADDRESS'] = 'ที่อยู่อื่น';
$mod_strings['LBL_ADDRESS_FLEX_RELATE'] = 'Flex Relate';
$mod_strings['LBL_ADDRESS_ADDRESS'] = 'ที่อยู่ (ง่าย, ผู้ใช้)';
$mod_strings['LBL_ADDRESS_CUSTOM'] = 'กำหนดเอง (ลอจิกควบคุมที่กำหนดเอง)';
$mod_strings['LBL_ENABLED'] = 'ถูกเปิดใช้งานแล้ว';
$mod_strings['LBL_DISABLED'] = 'ถูกปิดใช้งาน';
$mod_strings['LBL_DEFAULT'] = 'ค่าเริ่มต้น:';
$mod_strings['LBL_CONFIG_DEFAULT'] = 'ค่าเริ่มต้น:';

$mod_strings['LBL_CONFIG_VALID_GEOCODE_MODULES'] = 'โมดูลพิกัดทางภูมิศาสตร์ที่ถูกต้อง:';
$mod_strings['LBL_CONFIG_VALID_GEOCODE_TABLES'] = 'ตารางพิกัดทางภูมิศาสตร์ที่ถูกต้อง:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_SETTINGS_TITLE'] = "การตั้งค่าประเภทที่อยู่: กำหนดประเภทที่อยู่ของโมดูลที่ใช้เมื่อตั้งที่อยู่ของพิกัดทางภูมิศาสตร์ ค่าที่ยอมรับได้: 'การเรียกเก็บเงิน'; 'การส่งสินค้า'; 'หลัก'; 'Alt'; 'flex_relate'";
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR'] = 'ประเภทที่อยู่สำหรับ ';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_ACCOUNTS'] = 'ประเภทที่อยู่สำหรับบัญชี:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CONTACTS'] = 'ประเภทที่อยู่สำหรับผู้ติดต่อ:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_LEADS'] = 'ประเภทที่อยู่สำหรับลูกค้าเป้าหมาย:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_OPPORTUNITIES'] = 'ประเภทที่อยู่สำหรับโอกาสในการขาย:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT'] = '(บัญชีที่เกี่ยวข้อง)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_CASES'] = 'ประเภทที่อยู่สำหรับกรณี:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROJECTS'] = 'ประเภทที่อยู่สำหรับโครงการ:';
$mod_strings['LBL_CONFIG_OF_RELATED_ACCOUNT_OPPORTUNITY'] = '(บัญชีที่เกี่ยวข้อง / โอกาส)';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_MEETINGS'] = 'ประเภทที่อยู่สำหรับการประชุม:';
$mod_strings['LBL_CONFIG_ADDRESS_TYPE_FOR_PROSPECTS'] = 'ประเภทที่อยู่สำหรับ ลูกค้า/เป้าหมาย:';
$mod_strings['LBL_CONFIG_RELATED_OBJECT_THRU_FLEX_RELATE'] = 'วัตถุที่เกี่ยวข้องผ่านทางฟิลด์สัมพันธ์ที่ยืดหยุ่น';

$mod_strings['LBL_CONFIG_MARKER_GROUP_FIELD_SETTINGS_TITLE'] = "การตั้งค่าฟิลด์กลุ่มเครื่องหมาย: กำหนดฟิลด์นี้เพื่อใช้เป็นพารามิเตอร์กลุ่มเมื่อแสดงเครื่องหมายบนแผนที่ ตัวอย่าง: assign_user_name อุตสาหกรรม สถานะ sales_stage ลำดับความสำคัญ";
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR'] = 'ฟิลด์กลุ่มสำหรับ ';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_ACCOUNTS'] = 'กลุ่มฟิลด์สำหรับบัญชี:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CONTACTS'] = 'กลุ่มฟิลด์สำหรับผู้ติดต่อ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_LEADS'] = 'กลุ่มฟิลด์สำหรับลูกค้าเป้าหมาย:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_OPPORTUNITIES'] = 'กลุ่มฟิลด์สำหรับโอกาสในการขาย:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_CASES'] = 'กลุ่มฟิลด์สำหรับกรณี:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROJECTS'] = 'กลุ่มฟิลด์สำหรับโครงการ:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_MEETINGS'] = 'กลุ่มฟิลด์สำหรับการประชุม:';
$mod_strings['LBL_CONFIG_GROUP_FIELD_FOR_PROSPECTS'] = 'กลุ่มฟิลด์สำหรับ ลูกค้า/เป้าหมาย:';

$mod_strings['LBL_CONFIG_GEOCODING_SETTINGS_TITLE'] = 'ระบุพิกัดทางภูมิศาสตร์/การตั้งค่า Google:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_TITLE'] = 'ระบุพิกัดทางภูมิศาสตร์ API URL:';
$mod_strings['LBL_CONFIG_GEOCODING_API_URL_DESC'] = 'URL ของ Google Maps ระบุพิกัดทางภูมิศาสตร์ API หรือพร็อกซี';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_TITLE'] = 'วลีลับสำหรับพร็อกซี:';
$mod_strings['LBL_CONFIG_GEOCODING_API_SECRET_DESC'] = 'วลีลับที่จะใช้กับพร็อกซี่ MD5 เปรียบเทียบ';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_TITLE'] = 'ขีด จำกัด ทางภูมิศาสตร์:';
$mod_strings['LBL_CONFIG_GEOCODING_LIMIT_DESC'] = "'geocoding_limit 'ตั้งค่าขีด จำกัด ของข้อความค้นหาเมื่อเลือกบันทึกไปยัง รหัสพิกัด.";
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_TITLE'] = 'ขีด จำกัด ทางภูมิศาสตร์ของ Google:';
$mod_strings['LBL_CONFIG_GOOGLE_GEOCODING_LIMIT_DESC'] = "'google_geocoding_limit' ตั้งค่าขีด จำกัด คำขอเมื่อใช้การกำหนดตำแหน่งทางภูมิศาสตร์โดยใช้ Google แผนที่ API.";
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_TITLE'] = 'จำกัด การส่งออกที่อยู่:';
$mod_strings['LBL_CONFIG_EXPORT_ADDRESSES_LIMIT_DESC'] = "'export_addresses_limit 'ตั้งค่าขีด จำกัด ของข้อความค้นหาเมื่อเลือกบันทึกที่ต้องการส่งออก.";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_TITLE'] = "อนุญาตประเภทตำแหน่งที่ตั้ง 'APPROXIMATE':";
$mod_strings['LBL_CONFIG_ALLOW_APPROXIMATE_LOCATION_TYPE_DESC'] = "'allow_approximate_location_type' - อนุญาตให้ประเภทตำแหน่งของ \"APPROXIMATE\" ถือว่า 'OK' เป็นผลลัพธ์ทางภูมิศาสตร์.";

$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SETTINGS_TITLE'] = 'การตั้งค่าที่อยู่แคช:';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_TITLE'] = 'เปิดใช้งานที่อยู่แคช(รับ):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_GET_ENABLED_DESC'] = "'address_cache_get_enabled' ช่วยให้โมดูลที่อยู่แคชเพื่อดึงข้อมูลจากตารางแคช.";
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_TITLE'] = 'เปิดใช้งานการบันทึกที่อยู่แคช (บันทึก):';
$mod_strings['LBL_CONFIG_ADDRESS_CACHE_SAVE_ENABLED_DESC'] = "'address_cache_save_enabled' ช่วยให้โมดูลที่อยู่แคชสามารถบันทึกข้อมูลลงในตารางแคชได้.";

$mod_strings['LBL_CONFIG_LOGIC_HOOKS_SETTINGS_TITLE'] = 'การตั้งค่า Logic Hooks:';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_TITLE'] = 'เปิดใช้ Logic Hooks ทั้งหมด: ';
$mod_strings['LBL_CONFIG_LOGIC_HOOKS_ENABLED_DESC'] = "'logic_hooks_enabled' ช่วยให้ logic hooks สำหรับการอัพเดทอัตโนมัติขึ้นอยู่กับวัตถุที่เกี่ยวข้อง ขอแนะนำให้ปิดการใช้งานเมื่อทำการอัพเกรด SuiteCRM ของคุณ.";

$mod_strings['LBL_CONFIG_MARKER_MAPPING_SETTINGS_TITLE'] = 'การตั้งค่า เครื่องหมาย/ตั้งค่าแม็ป:';
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_TITLE'] = "ข้อจำกัดของเครื่องหมายแผนที่";
$mod_strings['LBL_CONFIG_MAP_MARKERS_LIMIT_DESC'] = "'map_markers_limit' ตั้งค่าขีด จำกัด ของข้อความค้นหาเมื่อเลือกบันทึกที่จะแสดงบนแผนที่.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_TITLE'] = "ศูนย์แผนที่เริ่มต้นละติจูด:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LATITUDE_DESC'] = "'map_default_center_latitude' กำหนดตำแหน่งละติจูดกลางที่เป็นค่าเริ่มต้นสำหรับแผนที่.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_TITLE'] = "ศูนย์แผนที่เริ่มต้นลองจิจูด:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_CENTER_LONGITUDE_DESC'] = "'map_default_center_longitude' กำหนดตำแหน่งลองจิจูดศูนย์กลางสำหรับแผนที่.";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_TITLE'] = "ประเภทหน่วยเริ่มต้น:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_UNIT_TYPE_DESC'] = "'map_default_unit_type' ตั้งค่าประเภทการวัดหน่วยเริ่มต้นสำหรับการคำนวณระยะทาง ค่า: ไมล์ (ไมล์) หรือ \"กม.\" (กิโลเมตร).";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_TITLE'] = "ระยะทางเริ่มต้นของแผนที่:";
$mod_strings['LBL_CONFIG_MAP_DEFAULT_DISTANCE_DESC'] = "'map_default_distance' กำหนดระยะห่างเริ่มต้นที่ใช้สำหรับแผนที่ตามระยะทาง";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_TITLE'] = "การปรับเครื่องหมายแผนที่ซ้ำ:";
$mod_strings['LBL_CONFIG_MAP_DUPLICATE_MARKER_ADJUSTMENT_DESC'] = "'map_duplicate_marker_adjustment' ตั้งค่าการชดเชยที่จะเพิ่มในลองจิจูดและละติจูดในกรณีที่ตำแหน่งเครื่องหมายซ้ำ.";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_TITLE'] = "เครื่องหมายแผนที่ขนาดคลัสเตอร์ Grid:";
$mod_strings['LBL_CONFIG_MAP_CLUSTER_GRID_SIZE_DESC'] = "'map_clusterer_grid_size' ใช้กำหนดขนาดของตารางเพื่อคำนวณคลัสเตอร์แบบแผนที่.";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_TITLE'] = "เครื่องหมายแผนที่คลัสเตอร์ซูมสูงสุด:";
$mod_strings['LBL_CONFIG_MAP_MARKERS_CLUSTERER_MAX_ZOOM_DESC'] = "'map_clusterer_max_zoom' ใช้เพื่อตั้งค่าระดับการซูมสูงสุดที่จะไม่ใช้การจัดกลุ่ม.";
$mod_strings['LBL_CONFIG_CUSTOM_CONTROLLER_DESC'] = "หมายเหตุสำคัญ: การตั้งค่าที่บันทึกไว้ทั้งหมดสามารถพบได้ในตาราง 'config' ภายใต้หมวด 'jjwg' หมายเหตุไฟล์ custom.php ที่กำหนดเองไม่ควรใช้เพื่อแทนที่การตั้งค่าอีกต่อไป";
$mod_strings['LBL_JJWG_MAPS_JJWG_AREAS_FROM_JJWG_AREAS_TITLE'] = 'พื้นที่';
$mod_strings['LBL_JJWG_MAPS_JJWG_MARKERS_FROM_JJWG_MARKERS_TITLE'] = 'เครื่องหมาย';
$mod_strings['LBL_PARENT_ID'] = 'รหัสหลัก';
$mod_strings['LBL_JJWP_PARTNERS'] = 'พาร์ทเนอร์ JJWP';
$mod_strings['LBL_GET_GOOGLE_API_KEY'] = 'ได้รับคีย์';
$mod_strings['LBL_GOOGLE_API_KEY'] = 'Google Api ดีย์';
$mod_strings['LBL_ERROR_NO_GOOGLE_API_KEY'] = 'โปรดตั้งค่าคีย์ Google Api ในแผงควบคุมของ Google Maps';
