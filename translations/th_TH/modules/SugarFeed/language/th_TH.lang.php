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
    'LBL_ASSIGNED_TO_ID' => 'ชื่อไอดีผู้รับผิดชอบ',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_ID' => 'ไอดี',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'ชื่อ',
    'LBL_SAVING' => 'บันทึก...',
    'LBL_SAVED' => 'บันทึก',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_FORM_TITLE' => 'รายการฟีด',
    'LBL_MODULE_NAME' => 'กิจกรรมสตรีม',
    'LBL_MODULE_TITLE' => 'กิจกรรมสตรีม',
    'LBL_DASHLET_DISABLED' => 'คำเตือน: ระบบฟีดถูกปิดใช้งานจะไม่มีการป้อนรายการฟีดใหม่จนกว่าจะมีการเปิดใช้งาน',
    'LBL_RECORDS_DELETED' => 'รายการฟีดข้อมูลก่อนหน้าทั้งหมดถูกนำออกแล้วหากเปิดใช้งานระบบฟีดรายการใหม่จะถูกสร้างโดยอัตโนมัติ',
    'LBL_CONFIRM_DELETE_RECORDS' => 'คุณแน่ใจหรือไม่ว่าต้องการลบรายการฟีดข้อมูลทั้งหมด',
    'LBL_FLUSH_RECORDS' => 'ลบรายการฟีด',
    'LBL_ENABLE_FEED' => 'เปิดใช้งานกิจกรรมสตรีม Dashlet ของฉัน',
    'LBL_ENABLE_MODULE_LIST' => 'เปิดใช้ฟีดสำหรับ',
    'LBL_HOMEPAGE_TITLE' => 'กิจกรรมสตรีมของฉัน',
    'LNK_NEW_RECORD' => 'สร้างฟีด',
    'LNK_LIST' => 'ฟีด',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาฟีด',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_NEW_FORM_TITLE' => 'ฟีดใหม่',
    'LBL_ALL' => 'ทั้งหมด',
    'LBL_USER_FEED' => 'ฟีดผู้ใช้',
    'LBL_ENABLE_USER_FEED' => 'เปิดใช้งานฟีดข้อมูลผู้ใช้',
    'LBL_TO' => 'มองเห็นได้กับทีม',
    'LBL_IS' => 'คือ',
    'LBL_DONE' => 'เรียบร้อย',
    'LBL_TITLE' => 'ตำแหน่ง',
    'LBL_ROWS' => 'แถว',
    'LBL_CATEGORIES' => 'โมดูล',
    'LBL_TIME_LAST_WEEK' => 'สัปดาห์ที่แล้ว',
    'LBL_TIME_WEEKS' => 'สัปดาห์',
    'LBL_TIME_DAYS' => 'วัน',
    'LBL_TIME_YESTERDAY' => 'เมื่อวาน',
    'LBL_TIME_HOURS' => 'ชั่วโมง',
    'LBL_TIME_HOUR' => 'ชั่วโมง',
    'LBL_TIME_MINUTES' => 'นาที',
    'LBL_TIME_MINUTE' => 'นาที',
    'LBL_TIME_SECONDS' => 'วินาที',
    'LBL_TIME_SECOND' => 'วินาที',
    'LBL_TIME_AND' => ' และ ',
    'LBL_TIME_AGO' => 'ที่ผ่านมา',
// Activity stream
    'CREATED_CONTACT' => 'สร้าง <b>ใหม่</b> {0}',
    'CREATED_OPPORTUNITY' => 'สร้าง <b>ใหม่</b> {0}',
    'CREATED_CASE' => 'สร้าง <b>ใหม่</b> {0}',
    'CREATED_LEAD' => 'สร้าง <b>ใหม่</b> {0}',
    'FOR' => 'สำหรับ', // Activity stream for cases
    'FOR_AMOUNT' => 'for amount', // Activity stream for cases
    'CLOSED_CASE' => '<b>ปิด</b> a {0} ',
    'CONVERTED_LEAD' => '<b>แปลง</b> a {0}',
    'WON_OPPORTUNITY' => 'ได้<b>รับ</b> รางวัล {0}',
    'WITH' => 'กับ',

    'LBL_LINK_TYPE_Link' => 'การเชื่อมโยง',
    'LBL_LINK_TYPE_Image' => 'รูปภาพ',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'เลือก',
    'LBL_POST' => 'โพสต์',
    'LBL_AUTHENTICATE' => 'เชื่อมต่อกับ',
    'LBL_AUTHENTICATION_PENDING' => 'บัญชีภายนอกบางบัญชีที่คุณเลือกไม่ได้รับการตรวจสอบสิทธิ์ คลิก \'ยกเลิก\' เพื่อกลับไปที่หน้าต่างตัวเลือกเพื่อตรวจสอบสิทธิ์บัญชีภายนอกหรือคลิก \'ตกลง\' เพื่อดำเนินการต่อโดยไม่มีการตรวจสอบสิทธิ์',
    'LBL_ADVANCED_SEARCH' => 'ตัวกรองขั้นสูง' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'แสดงตัวเลือกเพิ่มเติม',
    'LBL_HIDE_OPTIONS' => 'ซ่อนตัวเลือก',
    'LBL_VIEW' => 'ดู',
    'LBL_POST_TITLE' => 'อัปเดตสถานะโพสต์สำหรับ ',
    'LBL_URL_LINK_TITLE' => 'URL ลิงก์ที่จะใช้',
);
