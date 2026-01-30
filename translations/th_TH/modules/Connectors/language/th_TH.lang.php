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


$mod_strings = array(

    'LBL_ADMINISTRATION_MAIN' => 'การตั้งค่าตัวเชื่อมต่อ',
    'LBL_AVAILABLE' => 'พร้อมใช้งาน',
    'LBL_BACK' => '< ก่อนหน้า',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'บางช่องที่จำเป็นต้องเว้นว่างไว้ ดำเนินการเพื่อบันทึกการเปลี่ยนแปลงหรือไม่?',
    'LBL_CONNECTOR_FIELDS' => 'ช่องตัวเชื่อมต่อ',
    'LBL_DATA' => 'ข้อมูล',
    'LBL_DEFAULT' => 'ค่าเริ่มต้น',
    'LBL_DISABLED' => 'ถูกปิดใช้งาน',
    'LBL_ENABLED' => 'ถูกเปิดใช้งานแล้ว',
    'LBL_EXTERNAL' => 'อนุญาตให้ผู้ใช้สร้างบันทึกบัญชีภายนอกไปยังตัวเชื่อมต่อนี้',
    'LBL_EXTERNAL_SET_PROPERTIES' => ' ในการใช้ตัวเชื่อมต่อนี้คุณควรตั้งค่าคุณสมบัติไว้ในหน้าการตั้งค่าคุณสมบัติการเชื่อมต่อ',
    'LBL_MERGE' => 'รวมรายการที่ซ้ำ',
    'LBL_MODIFY_DISPLAY_TITLE' => 'เปิดใช้งานตัวเชื่อมต่อ',
    'LBL_MODIFY_DISPLAY_DESC' => 'เลือกโมดูลที่จะเปิดใช้งานสำหรับแต่ละตัวเชื่อมต่อ',
    'LBL_MODULE_FIELDS' => 'ฟิลด์โมดูล',
    'LBL_MODIFY_MAPPING_TITLE' => 'แม็ปช่องตัวเชี่อม',
    'LBL_MODIFY_MAPPING_DESC' => 'แม็ปข้องตัวเชื่อกับฟิลด์โมดูลเพื่อกำหนดว่าข้อมูลตัวเชื่อมต่อสามารถดูและรวมเข้ากับบันทึกโมดูลได้',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'ตั้งค่าคุณสมบัติของตัวเชื่อมต่อ',
    'LBL_MODIFY_PROPERTIES_DESC' => 'กำหนดค่าคุณสมบัติสำหรับแต่ละตัวเชื่อมต่อรวมถึง URL และคีย์ API',
    'LBL_MODIFY_SEARCH_TITLE' => 'จัดการการค้นหาตัวเชื่อมต่อ',
    'LBL_MODIFY_SEARCH' => 'ค้นหา',
    'LBL_MODIFY_SEARCH_DESC' => 'เลือกตัวเชื่อมต่อที่จะใช้ค้นหาข้อมูลสำหรับแต่ละโมดูล',
    'LBL_MODULE_NAME' => 'การเชี่อมต่อ',
    'LBL_NO_PROPERTIES' => 'ไม่มีคุณสมบัติที่กำหนดค่าสำหรับตัวเชื่อมต่อนี้',
    'LBL_SAVE' => 'บันทึก',
    'LBL_SUMMARY' => 'สรุป',
    'LBL_STEP1' => 'ค้นหาและแสดงข้อมูล',
    'LBL_STEP2' => 'รวมบันทึกด้วย',
    'LBL_TEST_SOURCE' => 'ทดสอบการเชื่อมต่อ',
    'LBL_TEST_SOURCE_FAILED' => 'การทดสอบล้มเหลว',
    'LBL_TEST_SOURCE_SUCCESS' => 'ทดสอบสำเร็จ',
    'LBL_TITLE' => 'รวมข้อมูล',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'ข้อผิดพลาด: ไม่พบรายละเอียดเพิ่มเติมสำหรับบันทึก',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'ไม่ได้เปิดใช้งานโมดูลสำหรับตัวเชื่อมต่อนี้ เลือกโมดูลสำหรับตัวเชื่อมต่อนี้ในหน้า Enable Connectors',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'ข้อผิดพลาด: ไม่มีการเปิดใช้งานตัวเชื่อมต่อในช่องข้อมูลการค้นหา',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'ข้อผิดพลาด: ไม่มีโมดูลค้นหาสำหรับโมดูลและตัวเชื่อมต่อ กรุณาติดต่อผู้ดูแลระบบ',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'ข้อผิดพลาด: ไม่มีฟิลด์โมดูลที่ได้รับการแม็ปเพื่อแสดงในผลลัพธ์ กรุณาติดต่อผู้ดูแลระบบ',
    'LBL_INFO_INLINE' => 'ข้อมูล' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'ปิด' /*for 508 compliance fix*/,

);
