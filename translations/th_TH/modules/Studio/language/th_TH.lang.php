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
    'LBL_EDIT_LAYOUT' => 'แก้ไขรูปแบบ',
    'LBL_EDIT_FIELDS' => 'แก้ไขฟิลด์ที่กำหนดเอง',
    'LBL_SELECT_FILE' => 'เลือกไฟล์',
    'LBL_MODULE_TITLE' => 'สตูดิโอ',
    'LBL_TOOLBOX' => 'กล่องเครื่องมือ',
    'LBL_SUITE_FIELDS_STAGE' => 'ฟิลด์ SuiteCRM (คลิกที่รายการเพื่อเพิ่มพื้นที่จัดเตรียม)',
    'LBL_VIEW_SUITE_FIELDS' => 'ดูฟิลด์ SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'การบันทึกล้มเหลว',
    'LBL_CONFIRM_UNSAVE' => 'การเปลี่ยนแปลงใดๆ จะไม่ได้บันทึกไว้ คุณแน่ใจหรือไม่ว่าต้องการดำเนินการต่อ',
    'LBL_PUBLISHING' => 'กำลังเผยแพร่ ...',
    'LBL_PUBLISHED' => 'เผยแพร่',
    'LBL_FAILED_PUBLISHED' => 'การเผยแพร่ล้มเหลว',
    'LBL_DROP_HERE' => '[วางที่นี่]',

//CUSTOM FIELDS
    'LBL_NAME' => 'ชื่อ',
    'LBL_LABEL' => 'ป้ายชื่อ',
    'LBL_MASS_UPDATE' => 'การอัพเดตโดยรวม',
    'LBL_DEFAULT_VALUE' => 'ค่าเริ่มต้น',
    'LBL_REQUIRED' => 'จำเป็น',
    'LBL_DATA_TYPE' => 'ประเภท',


    'LBL_HISTORY' => 'ประวัติ',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>ยินดีต้อนรับสู่ สตูดิโอ!</h2><br> คุณอยากทำอะไรวันนี้?<br><b> โปรดเลือกจากตัวเลือกด้านล่าง.</b>',
    'LBL_SW_EDIT_MODULE' => 'แก้ไขโมดูล',
    'LBL_SW_EDIT_DROPDOWNS' => 'แก้ไข Drop Downs',
    'LBL_SW_EDIT_TABS' => 'กำหนดค่าแท็บ',
    'LBL_SW_RENAME_TABS' => 'เปลี่ยนชื่อแท็บ',
    'LBL_SW_EDIT_GROUPTABS' => 'กำหนดค่าแท็บกลุ่ม',
    'LBL_SW_EDIT_PORTAL' => 'แก้ไขพอร์ทัล',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'ซ่อมแซมฟิลด์ที่กำหนดเอง',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'ย้ายข้อมูลฟิลด์ที่กำหนดเอง',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'สร้างไฟล์ภาษาของ javascript ใหม่',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'การลบไฟล์ภาษาจาวาสคริปต์จะถูกสร้างขึ้นใหม่เมื่อจำเป็น',


//Manager Backups History
    'LBL_MB_DELETE' => 'ลบ',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'สร้าง Drop Down',
    'LBL_DROPDOWN_NAME' => 'ชื่อ Dropdown:',
    'LBL_DROPDOWN_LANGUAGE' => 'ภาษา Dropdown:',
    'LBL_TABGROUP_LANGUAGE' => 'ภาษา:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'แสดงค่า',
    'LBL_DD_DATABASEVALUE' => 'ค่าฐานข้อมูล',
    'LBL_DD_ALL' => 'ทั้งหมด',

//BUTTONS
    'LBL_BTN_SAVE' => 'บันทึก',
    'LBL_BTN_CANCEL' => 'ยกเลิก',
    'LBL_BTN_SAVEPUBLISH' => 'บันทึกและปรับใช้',
    'LBL_BTN_HISTORY' => 'ประวัติ',
    'LBL_BTN_ADDROWS' => 'เพิ่มแถว',
    'LBL_BTN_UNDO' => 'Undo',
    'LBL_BTN_REDO' => 'Redo',
    'LBL_BTN_ADDCUSTOMFIELD' => 'เพิ่มฟิลด์ที่กำหนดเอง',
    'LBL_BTN_TABINDEX' => 'แก้ไขลำดับแท็บ',

//TABS
    'LBL_MODULES' => 'โมดูล',
    'LBL_MODULE_NAME' => 'ผู้ดูแลระบบ',
    'LBL_CONFIGURE_GROUP_TABS' => 'กำหนดค่าตัวกรองเมนูโมดูล',
    'LBL_GROUP_TAB_WELCOME' => 'ตัวกรองด้านล่างจะปรากฏในรายการเพิ่มเติมในเมนูโมดูลสำหรับผู้ใช้ที่จะใช้เพื่อดูกลุ่มของโมดูลภายในเมนู ลากและวางโมดูลจากและไปยังตัวกรอง หมายเหตุ: ฟิลเตอร์ว่างเปล่าจะไม่ปรากฏในเมนู',
    'LBL_RENAME_TAB_WELCOME' => 'คลิกที่ค่าที่แสดงของแท็บในตารางด้านล่างเพื่อเปลี่ยนชื่อแท็บ',
    'LBL_DELETE_MODULE' => 'ลบ&nbsp;โมดูล<br />จาก&nbsp;ตัวกรอง',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'เลือกภาษาที่ใช้ได้ แก้ไขป้ายกำกับกลุ่มแล้วคลิกบันทึกและใช้เพื่อใช้ป้ายกำกับในภาษาที่เลือก',
    'LBL_ADD_GROUP' => 'เพิ่มตัวกรอง',
    'LBL_NEW_GROUP' => 'กลุ่มใหม่',
    'LBL_RENAME_TABS' => 'เปลี่ยนชื่อโมดูล',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "ข้อผิดพลาด: ค่าคีย์ไม่ถูกต้อง: [']",

//SUGAR PORTAL
    'LBL_SAVE' => 'บันทึก' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Undo' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Redo' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Inline' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'ลบ' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'เพิ่มเขตข้อมูล' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'มากสุด' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'น้อยสุด' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'เผยแพร่' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'เพิ่มแถว' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'เพิ่มเขตข้อมูล' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'แก้ไข' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'เลือกภาษาที่ต้องการแก้ไข',
    'LBL_SINGULAR' => 'ป้ายเอกพจน์',
    'LBL_PLURAL' => 'ป้ายพหูพจน์',
    'LBL_RENAME_MOD_SAVE_HELP' => 'คลิก <b>บันทึก</b> เพื่อใช้การเปลี่ยนแปลง'

);
