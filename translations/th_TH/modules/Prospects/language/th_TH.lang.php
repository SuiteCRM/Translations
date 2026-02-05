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
    'LBL_MODULE_NAME' => 'เป้าหมาย',
    'LBL_MODULE_ID' => 'เป้าหมาย',
    'LBL_INVITEE' => 'รายงานโดยตรง',
    'LBL_MODULE_TITLE' => 'เป้าหมาย: หน้าแรก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาเป้าหมาย',
    'LBL_LIST_FORM_TITLE' => 'รายชื่อเป้าหมาย',
    'LBL_NEW_FORM_TITLE' => 'เป้าหมายใหม่',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_LAST_NAME' => 'นามสกุล',
    'LBL_LIST_TITLE' => 'ตำแหน่ง',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_PHONE' => 'โทรศัพท์',
    'LBL_LIST_FIRST_NAME' => 'ชื่อ',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_ASSIGNED_TO_ID' => 'ผู้รับผิดชอบ',
    'LBL_CAMPAIGN_ID' => 'แคมเปญไอดี:',
    'LBL_EXISTING_ACCOUNT' => 'ใช้บัญชีที่มีอยู่แล้ว',
    'LBL_CREATED_ACCOUNT' => 'สร้างบัญชีใหม่',
    'LBL_CREATED_CALL' => 'สร้างการโทรใหม่',
    'LBL_CREATED_MEETING' => 'สร้างการประชุมใหม่',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_PROSPECT_INFORMATION' => 'ภาพรวม', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'ข้อมูลเพิ่มเติม',
    'LBL_FIRST_NAME' => 'ชื่อ:',
    'LBL_OFFICE_PHONE' => 'โทรศัพท์ที่ทำงาน:',
    'LBL_ANY_PHONE' => 'โทรศัพท์:',
    'LBL_PHONE' => 'โทรศัพท์:',
    'LBL_LAST_NAME' => 'นามสกุล:',
    'LBL_MOBILE_PHONE' => 'โทรศัพท์มือถือ:',
    'LBL_HOME_PHONE' => 'โทรศัพท์ที่บ้าน:',
    'LBL_OTHER_PHONE' => 'โทรศัพท์อื่นๆ:',
    'LBL_FAX_PHONE' => 'โทรสาร:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ถนนที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'เมืองที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ประเทศที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'รัฐที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์ที่อยู่หลัก:',
    'LBL_ALT_ADDRESS_STREET' => 'ถนนอื่น:',
    'LBL_ALT_ADDRESS_CITY' => 'ที่อยู่อื่น:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'ประเทศอื่น:',
    'LBL_ALT_ADDRESS_STATE' => 'จังหวัดอื่น:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์อื่น:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'ฝ่าย:',
    'LBL_BIRTHDATE' => 'วันเกิด:',
    'LBL_EMAIL_ADDRESS' => 'อีเมล:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'อีเมล์อื่นๆ:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ASSISTANT' => 'ผู้ช่วย:',
    'LBL_ASSISTANT_PHONE' => 'โทรศัพท์ผู้ช่วย:',
    'LBL_DO_NOT_CALL' => 'ไม่โทร:',
    'LBL_EMAIL_OPT_OUT' => 'เลือกไม่รับอีเมล์',
    'LBL_PRIMARY_ADDRESS' => 'ที่อยู่ในบัตรประจำตัว:',
    'LBL_ALTERNATE_ADDRESS' => 'ที่อยู่ที่ติดต่อสะดวก:',
    'LBL_ANY_ADDRESS' => 'ที่อยู่:',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_POSTAL_CODE' => 'รหัสไปรษณีย์:',
    'LBL_COUNTRY' => 'ประเทศ:',
    'LBL_ADDRESS_INFORMATION' => 'ข้อมูลที่อยู่',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_OPP_NAME' => 'ชื่อโอกาส:',
    'LBL_IMPORT_VCARD' => 'VCard นำเข้า:',
    'LBL_IMPORT_VCARDTEXT' => 'สร้างรายชื่อติดต่อใหม่โดยอัตโนมัติโดยนำเข้า vCard จากระบบไฟล์ของคุณ',
    'LBL_DUPLICATE' => 'เป้าหมายที่เป็นไปได้ที่เหมือนกัน',
    'MSG_SHOW_DUPLICATES' => 'บันทึกเป้าหมายที่คุณกำลังสร้างอาจซ้ำกับบันทึกเป้าหมายที่มีอยู่แล้ว บันทึกเป้าหมายที่มีชื่อ และ/หรือ ที่อยู่อีเมลที่คล้ายกันอยู่ด้านล่าง <br> คลิกสร้างเป้าหมายเพื่อสร้างเป้าหมายใหม่ต่อหรือเลือกเป้าหมายที่มีอยู่ด้านล่าง',
    'MSG_DUPLICATE' => 'บันทึกเป้าหมายที่คุณกำลังสร้างอาจซ้ำกับบันทึกเป้าหมายที่มีอยู่แล้ว บันทึกเป้าหมายที่มีชื่อ และ/หรือ ที่อยู่อีเมลที่คล้ายกันแสดงอยู่ด้านล่าง <br> คลิกบันทึกเพื่อสร้างเป้าหมายใหม่ต่อหรือคลิกยกเลิกเพื่อกลับไปยังโมดูลโดยไม่สร้างเป้าหมาย',
    'LNK_IMPORT_VCARD' => 'สร้างจาก vCard',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'LNK_NEW_OPPORTUNITY' => 'สร้างเป้าหมายการขาย',
    'LNK_NEW_CASE' => 'สร้างเคส',
    'LNK_NEW_NOTE' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LNK_NEW_CALL' => 'ข้อมูลการโทร',
    'LNK_NEW_EMAIL' => 'เก็บอีเมลถาวร',
    'LNK_NEW_MEETING' => 'จัดตารางการประชุม',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'LNK_NEW_APPOINTMENT' => 'สร้างการนัดหมาย',
    'LNK_IMPORT_PROSPECTS' => 'การนำเข้าเป้าหมาย',
    'NTC_DELETE_CONFIRMATION' => 'คุณแน่ใจไหมที่ต้องการจะลบบันทึกนี้?',
    'NTC_REMOVE_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการนำรายชื่อติดต่อนี้ออกจากกรณี',
    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขเรกคอร์ดเพื่อลบผู้ติดต่อ',
    'LBL_SALUTATION' => 'คำอวยพร',
    'LBL_CREATED_OPPORTUNITY' => 'สร้างโอกาสใหม่',
    'LNK_SELECT_ACCOUNT' => "เลือกบัญชีลูกค้า",
    'LNK_NEW_PROSPECT' => 'สร้างเป้าหมาย',
    'LNK_PROSPECT_LIST' => 'ดูเป้าหมาย',
    'LNK_NEW_CAMPAIGN' => 'สร้างแคมเปญ',
    'LNK_CAMPAIGN_LIST' => 'แคมเปญ',
    'LNK_NEW_PROSPECT_LIST' => 'สร้างรายการเป้าหมาย',
    'LNK_PROSPECT_LIST_LIST' => 'รายการเป้าหมาย',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'เลือกเป้าหมายที่ได้รับการตรวจสอบ',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'เลือกเป้าหมายที่ได้รับการตรวจสอบ',
    'LBL_INVALID_EMAIL' => 'อีเมล์ไม่ถูกต้อง:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'เป้าหมาย',
    'LBL_PROSPECT_LIST' => 'รายชื่อลูกค้า',
    'LBL_CONVERT_BUTTON_TITLE' => 'แปลงเป้าหมาย',
    'LBL_CONVERT_BUTTON_LABEL' => 'แปลงเป้าหมาย',
    'LNK_NEW_CONTACT' => 'ผู้ติดต่อใหม่',
    'LBL_CREATED_CONTACT' => "สร้างผู้ติดต่อใหม่",
    'LBL_CAMPAIGNS' => 'แคมเปญ',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'บันทึกแคมเปญ',
    'LBL_TRACKER_KEY' => 'คีย์การติดตาม',
    'LBL_LEAD_ID' => 'ไอดีลูกค้าเป้าหมาย',
    'LBL_CONVERTED_LEAD' => 'แปลงลูกค้าเป้าหมาย',
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_EDIT_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_CREATED_USER' => 'สร้างผู้ใช้',
    'LBL_MODIFIED_USER' => 'แก้ไขผู้ใช้',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'เหตุการณ์',
);
