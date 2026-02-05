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
    'LNK_NEW_CALL' => 'ข้อมูลการโทร',
    'LNK_NEW_MEETING' => 'จัดตารางการประชุม',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'LNK_NEW_NOTE' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LNK_NEW_EMAIL' => 'เก็บอีเมลถาวร',
    'LNK_CALL_LIST' => 'บันทึกการโทร',
    'LNK_MEETING_LIST' => 'ประชุม',
    'LNK_TASK_LIST' => 'งาน',
    'LNK_NOTE_LIST' => 'บันทึกย่อ',
    'LBL_ADD_FIELD' => 'เพิ่มข้อมูล:',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหา',
    'COLUMN_TITLE_NAME' => 'ระบุชื่อ',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'แสดงป้ายกำกับ',
    'COLUMN_TITLE_LABEL_VALUE' => 'ป้ายกำกับ ค่า',
    'COLUMN_TITLE_LABEL' => 'ป้ายกำกับระบบ',
    'COLUMN_TITLE_DATA_TYPE' => 'ประเภทข้อมูล',
    'COLUMN_TITLE_MAX_SIZE' => 'ขนาดสูงสุด',
    'COLUMN_TITLE_HELP_TEXT' => 'ข้อความช่วยเหลือ',
    'COLUMN_TITLE_COMMENT_TEXT' => 'ข้อความ',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'ต้องกรอก',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'ค่าเริ่มต้น',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'ความสูงของ IFrame',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'URL เริ่มต้น',
    'COLUMN_TITLE_AUDIT' => 'ตรวจสอบบัญชี',
    'COLUMN_TITLE_MIN_VALUE' => 'น้อยสุด',
    'COLUMN_TITLE_MAX_VALUE' => 'มากสุด',
    'COLUMN_TITLE_LABEL_ROWS' => 'แถว',
    'COLUMN_TITLE_LABEL_COLS' => 'คอลัมน์',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# รายการที่แสดง',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'เพิ่มค่าอัตโนมัติ',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'ปิดใช้งานรูปแบบ',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'เปิดใช้การค้นหาช่วง',
    'LBL_DROP_DOWN_LIST' => 'รายการ',
    'LBL_RADIO_FIELDS' => 'อัตราส่วน',
    'LBL_MULTI_SELECT_LIST' => 'เลือกหลายรายการ',
    'COLUMN_TITLE_PRECISION' => 'ความแม่นยำ',
    'LBL_MODULE' => 'โมดูล',
    'COLUMN_TITLE_MASS_UPDATE' => 'การอัพเดตโดยรวม',
    'COLUMN_TITLE_IMPORTABLE' => 'สามารถนำเข้าได้',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'ผสานรวม',
    'LBL_LABEL' => 'ป้ายชื่อ',
    'LBL_DATA_TYPE' => 'ประเภทข้อมูล',
    'LBL_DEFAULT_VALUE' => 'ค่าเริ่มต้น',
    'ERR_RESERVED_FIELD_NAME' => "คำสงวนสิทธิ์",
    'ERR_SELECT_FIELD_TYPE' => 'กรุณาเลือกประเภทที่ระบุ',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'ชื่อที่ระบุมีอยู่แล้ว',
    'LBL_BTN_ADD' => 'เพิ่ม',
    'LBL_BTN_EDIT' => 'แก้ไข',
    'LBL_GENERATE_URL' => 'สร้าง URL',
    'LBL_CALCULATED' => 'ค่าที่คำนวณไว้',
    'LBL_LINK_TARGET' => 'เปิดลิงค์ใน',
    'LBL_IMAGE_WIDTH' => 'กว้าง',
    'LBL_IMAGE_HEIGHT' => 'สูง',
    'LBL_IMAGE_BORDER' => 'เส้นขอบ',
    'LBL_HELP' => 'ช่วยเหลือ' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'แก้ในบรรทัด',
    'COLUMN_TITLE_PARENT_ENUM' => 'Parent DropDown',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
