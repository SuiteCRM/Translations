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
    'ERR_DELETE_RECORD' => 'คุณต้องระบุหมายเลขเรกคอร์ดเพื่อลบบัญชี',
    'LBL_ACCOUNT_ID' => 'รหัสบัญชี:',
    'LBL_CASE_ID' => 'เคสไอดี:',
    'LBL_CLOSE' => 'ปิด:',
    'LBL_CONTACT_ID' => 'ไอดีผู้ติดต่อ:',
    'LBL_CONTACT_NAME' => 'ผู้ติดต่อ:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'บันทึกย่อ',
    'LBL_DESCRIPTION' => 'บันทึกย่อ',
    'LBL_EMAIL_ADDRESS' => 'อีเมล:',
    'LBL_EMAIL_ATTACHMENT' => 'เอกสารแนบอีเมล',
    'LBL_FILE_MIME_TYPE' => 'ชนิด mime',
    'LBL_FILE_URL' => 'URL ของแฟ้ม',
    'LBL_FILENAME' => 'สิ่งที่แนบมา:',
    'LBL_LEAD_ID' => 'ไอดีลูกค้าเป้าหมาย:',
    'LBL_LIST_CONTACT_NAME' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_LIST_DATE_MODIFIED' => 'แก้ไขล่าสุด ',
    'LBL_LIST_FILENAME' => 'สิ่งที่แนบมา',
    'LBL_LIST_FORM_TITLE' => 'รายการบันทึกย่อ',
    'LBL_LIST_RELATED_TO' => 'เกี่ยวข้องกับ',
    'LBL_LIST_SUBJECT' => 'หัวเรื่อง',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LIST_CONTACT' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_MODULE_NAME' => 'บันทึกย่อ',
    'LBL_MODULE_TITLE' => 'บันทึกย่อ',
    'LBL_NEW_FORM_TITLE' => 'สร้างบันทึก หรือเพิ่มเอกสารแนบ',
    'LBL_NOTE_STATUS' => 'บันทึกย่อ',
    'LBL_NOTE_SUBJECT' => 'หัวเรื่อง:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'สิ่งที่แนบมา',
    'LBL_NOTE' => 'หมายเหตุ:',
    'LBL_OPPORTUNITY_ID' => 'Opportunity ID:',
    'LBL_PARENT_ID' => 'Parent ID:',
    'LBL_PARENT_TYPE' => 'ชนิดหลัก',
    'LBL_PHONE' => 'โทรศัพท์:',
    'LBL_PORTAL_FLAG' => 'แสดงในพอร์ทัล?',
    'LBL_EMBED_FLAG' => 'ฝังในอีเมลหรือไม่?',
    'LBL_PRODUCT_ID' => 'ไอดีสินค้า:',
    'LBL_QUOTE_ID' => 'ไอดีใบเสนอราคา:',
    'LBL_RELATED_TO' => 'เกี่ยวข้องกับ:',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาหมายเหตุ',
    'LBL_STATUS' => 'สถานะ',
    'LBL_SUBJECT' => 'หัวเรื่อง:',
    'LNK_IMPORT_NOTES' => 'นำเข้าบันทึกย่อ',
    'LNK_NEW_NOTE' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LNK_NOTE_LIST' => 'บันทึกย่อ',
    'LBL_MEMBER_OF' => 'สมาชิกของ:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_REMOVING_ATTACHMENT' => 'กำลังลบไฟล์แนบ...',
    'ERR_REMOVING_ATTACHMENT' => 'ไม่สามารถลบไฟล์แนบ...',
    'LBL_CREATED_BY' => 'สร้างโดย',
    'LBL_MODIFIED_BY' => 'แก้ไขโดย',
    'LBL_SEND_ANYWAYS' => 'อีเมลฉบับนี้ไม่มีหัวข้อ ส่ง/บันทึก หรือไม่?',
    'LBL_NOTE_INFORMATION' => 'ภาพรวม', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'บันทึกของฉัน',
    'LBL_EDITLAYOUT' => 'แก้ไขรูปแบบ' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'ชื่อ',
    'LBL_LAST_NAME' => 'นามสกุล',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_DELETED' => 'ลบ',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'เรียงจากน้อยไปมาก',
    'LBL_DESCENDING' => 'เรียงจากมากไปน้อย',
);
