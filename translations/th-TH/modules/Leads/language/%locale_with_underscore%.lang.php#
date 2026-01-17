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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขบันทึกเพื่อลบลูกค้าเป้าหมาย',
    'LBL_ACCOUNT_DESCRIPTION' => 'รายละเอียดบัญชีลูกค้า',
    'LBL_ACCOUNT_ID' => 'รหัสบัญชี',
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_ADDRESS_INFORMATION' => 'ข้อมูลที่อยู่',
    'LBL_ALT_ADDRESS_CITY' => 'Alt เมือง',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alt ประเทศ',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alt รหัสไปรษณีย์',
    'LBL_ALT_ADDRESS_STATE' => 'Alt จังหวัด',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alt ที่อยู่ 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alt ที่อยู่ 3',
    'LBL_ALT_ADDRESS_STREET' => 'Alt ที่อยู่',
    'LBL_ALTERNATE_ADDRESS' => 'ที่อยู่ที่ติดต่อสะดวก:',
    'LBL_ALT_ADDRESS' => 'ที่อยู่ที่ติดต่อสะดวก:',
    'LBL_ANY_ADDRESS' => 'ที่อยู่:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ANY_PHONE' => 'โทรศัพท์:',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_ASSIGNED_TO_ID' => 'ผู้รับผิดชอบ:',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_CONTACT_ID' => 'ไอดีผู้ติดต่อ',
    'LBL_CONTACT_INFORMATION' => 'ภาพรวม', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'ชื่อผู้แนะนำ:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'ลูกค้าเป้าหมาย-โอกาสในการขาย',
    'LBL_CONTACT_ROLE' => 'หน้าที่:',
    'LBL_CONTACT' => 'แนะนำ:',
    'LBL_CONVERTED_ACCOUNT' => 'บัญชีที่แปลงแล้ว:',
    'LBL_CONVERTED_CONTACT' => 'ผูเติดต่อที่แปลงแล้ว:',
    'LBL_CONVERTED_OPP' => 'โอกาสที่เปลี่ยนแปลง:',
    'LBL_CONVERTED' => 'เปลี่ยนแปลง',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'แปลงลูกค้าเป้าหมาย',
    'LBL_CONVERTLEAD' => 'แปลงลูกค้าเป้าหมาย',
    'LBL_CONVERTLEAD_WARNING' => 'คำเตือน: สถานะลูกค้าเป้าหมายที่คุณกำลังจะแปลงคือ "แปลงแล้ว" บันทึกการติดต่อ และ/หรือ บัญชีอาจมีอยู่แล้วจากลูกค้าเป้าหมายถ้าคุณต้องการดำเนินการต่อในการแปลงลูกค้าเป้าหมายให้คลิกบันทึก หากต้องการกลับไปที่ลูกค้าเป้าหมายโดยไม่ต้องแปลงให้คลิกยกเลิก',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' ติดต่อได้: ',
    'LBL_COUNTRY' => 'ประเทศ:',
    'LBL_CREATED_NEW' => 'สร้างขึ้นใหม่',
    'LBL_CREATED_ACCOUNT' => 'สร้างบัญชีใหม่',
    'LBL_CREATED_CALL' => 'สร้างการโทรใหม่',
    'LBL_CREATED_CONTACT' => 'สร้างผู้ติดต่อใหม่',
    'LBL_CREATED_MEETING' => 'สร้างการประชุมใหม่',
    'LBL_CREATED_OPPORTUNITY' => 'สร้างโอกาสใหม่',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ช่องทางการขาย',
    'LBL_DEPARTMENT' => 'ฝ่าย:',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_DO_NOT_CALL' => 'ไม่โทร:',
    'LBL_DUPLICATE' => 'ลูกค้าเป้าหมายที่คล้ายกัน',
    'LBL_EMAIL_ADDRESS' => 'อีเมล:',
    'LBL_EMAIL_OPT_OUT' => 'เลือกไม่รับอีเมล์',
    'LBL_EXISTING_ACCOUNT' => 'ใช้บัญชีที่มีอยู่แล้ว',
    'LBL_EXISTING_CONTACT' => 'ใช้ที่อยู่ติดต่อที่มีอยู่',
    'LBL_EXISTING_OPPORTUNITY' => 'ใช้โอกาสที่มีอยู่',
    'LBL_FAX_PHONE' => 'โทรสาร:',
    'LBL_FIRST_NAME' => 'ชื่อ:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',
    'LBL_HOME_PHONE' => 'โทรศัพท์ที่บ้าน:',
    'LBL_IMPORT_VCARD' => 'VCard นำเข้า:',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'สร้างใหม่โดยนำเข้า vCard จากระบบไฟล์ของคุณโดยอัตโนมัติ',
    'LBL_INVALID_EMAIL' => 'อีเมล์ไม่ถูกต้อง:',
    'LBL_INVITEE' => 'รายงานโดยตรง',
    'LBL_LAST_NAME' => 'นามสกุล:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'รายละเอียด แหล่งของผู้แนะนำ:',
    'LBL_LEAD_SOURCE' => 'แหล่งของผู้แนะนำ:',
    'LBL_LIST_ACCEPT_STATUS' => 'สถานะ',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_CONTACT_NAME' => 'ชื่อผู้แนะนำ',
    'LBL_LIST_CONTACT_ROLE' => 'บทบาท',
    'LBL_LIST_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_FIRST_NAME' => 'ชื่อ',
    'LBL_LIST_FORM_TITLE' => 'ช่องทางการขาย',
    'LBL_LIST_LAST_NAME' => 'นามสกุล',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'รายละเอียดแหล่งของผู้แนะนำ',
    'LBL_LIST_LEAD_SOURCE' => 'แหล่งของผู้แนะนำ',
    'LBL_LIST_MY_LEADS' => 'ลูกค้าเป้าหมายของฉัน',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_PHONE' => 'โทรศัพท์ที่ทำงาน',
    'LBL_LIST_REFERED_BY' => 'อ้างอิงโดย',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LIST_TITLE' => 'ตำแหน่ง',
    'LBL_MOBILE_PHONE' => 'โทรศัพท์มือถือ:',
    'LBL_MODULE_NAME' => 'ช่องทางการขาย',
    'LBL_MODULE_TITLE' => 'ช่องทางการขาย',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_NEW_FORM_TITLE' => 'ลูกค้าเป้าหมายใหม่',
    'LBL_OFFICE_PHONE' => 'โทรศัพท์ที่ทำงาน:',
    'LBL_OPP_NAME' => 'ชื่อโอกาส:',
    'LBL_OPPORTUNITY_AMOUNT' => 'จำนวนเงิน:',
    'LBL_OPPORTUNITY_ID' => 'ไอดีโอกาส',
    'LBL_OPPORTUNITY_NAME' => 'ชื่อโอกาส:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'อีเมล์อื่นๆ:',
    'LBL_OTHER_PHONE' => 'โทรศัพท์อื่นๆ:',
    'LBL_PHONE' => 'โทรศัพท์:',
    'LBL_PORTAL_APP' => 'พอร์ทัลแอพพลิเคชั่น',
    'LBL_PORTAL_INFORMATION' => 'ข้อมูลพอร์ทัล',
    'LBL_PORTAL_NAME' => 'รหัสไปรษณีย์:',
    'LBL_POSTAL_CODE' => 'รหัสไปรษณีย์:',
    'LBL_STREET' => 'ถนน',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ที่อยู่หลักเมือง',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ประเทศที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์หลัก',
    'LBL_PRIMARY_ADDRESS_STATE' => 'จังหวัดที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ที่อยู่หลัก 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ที่อยู่หลัก 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ที่อยู่หลัก',
    'LBL_PRIMARY_ADDRESS' => 'ที่อยู่ในบัตรประจำตัว:',
    'LBL_REFERED_BY' => 'อ้างอิงโดย:',
    'LBL_REPORTS_TO_ID' => 'รายงานไปยังไอดี',
    'LBL_REPORTS_TO' => 'รายงานถึง:',
    'LBL_SALUTATION' => 'คำอวยพร',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาลูกค้าเป้าหมาย',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'เลือกลูกค้าเป้าหมายที่เลือก',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'เลือกลูกค้าเป้าหมายที่เลือก',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_STATUS_DESCRIPTION' => 'รายละเอียดสถานะ:',
    'LBL_STATUS' => 'สถานะ',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'สร้างลูกค้าเป้าหมายจาก vCard',
    'LNK_LEAD_LIST' => 'ช่องทางการขาย',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'LNK_NEW_APPOINTMENT' => 'สร้างการนัดหมาย',
    'LNK_NEW_CONTACT' => 'สร้างบัญชีผู้ติดต่อ',
    'LNK_NEW_LEAD' => 'สร้างลูกค้าเป้าหมาย',
    'LNK_NEW_NOTE' => 'สร้างบันทึก',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'LNK_NEW_CASE' => 'สร้างเคส',
    'LNK_NEW_CALL' => 'ข้อมูลการโทร',
    'LNK_NEW_MEETING' => 'จัดตารางการประชุม',
    'LNK_NEW_OPPORTUNITY' => 'สร้างเป้าหมายการขาย',
    'LNK_SELECT_ACCOUNTS' => ' <b>หรือ</b> เลือกบัญขี',
    'LNK_SELECT_CONTACTS' => ' <b>หรือ</b> เลือกผู้ติดต่อ',
    'NTC_DELETE_CONFIRMATION' => 'คุณแน่ใจไหมที่ต้องการจะลบบันทึกนี้?',
    'NTC_REMOVE_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการนำลูกค้าเป้าหมายนี้ออกจากกรณีนี้',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'แคมเปญ',
    'LBL_CAMPAIGN' => 'แคมเปญ:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_PROSPECT_LIST' => 'รายชื่อลูกค้า',
    'LBL_CAMPAIGN_LEAD' => 'แคมเปญ',
    'LBL_BIRTHDATE' => 'วันเกิด:',
    'LBL_ASSISTANT_PHONE' => 'โทรศัพท์ของผู้ช่วย',
    'LBL_ASSISTANT' => 'ผู้ช่วย',
    'LBL_CREATED_USER' => 'สร้างผู้ใช้',
    'LBL_MODIFIED_USER' => 'แก้ไขผู้ใช้',
    'LBL_CAMPAIGNS' => 'แคมเปญ',
    'LBL_CONVERT_MODULE_NAME' => 'โมดูล',
    'LBL_CONVERT_REQUIRED' => 'จำเป็น',
    'LBL_CONVERT_SELECT' => 'อนุญาตให้เลือก',
    'LBL_CONVERT_COPY' => 'คัดลอกข้อมูล',
    'LBL_CONVERT_EDIT' => 'แก้ไข',
    'LBL_CONVERT_DELETE' => 'ลบ',
    'LBL_CONVERT_ADD_MODULE' => 'เพิ่มโมดูล',
    'LBL_CREATE' => 'สร้าง',
    'LBL_SELECT' => ' <b>หรือ</b> เลือก',
    'LBL_WEBSITE' => 'เว็บไซต์',
    'LNK_IMPORT_LEADS' => 'นำเข้าลูกค้าเป้าหมาย',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'โมดูลเพื่อสร้างบันทึกใหม่ใน',
    'LBL_REQUIRED_TIP' => 'ต้องสร้างหรือเลือกโมดูลที่จำเป็นก่อนที่จะสามารถแปลงลูกค้าเป้าหมายได้',
    'LBL_COPY_TIP' => 'ถ้าเลือกไว้ ข้อมูลจากลูกค้าเป้าหมายจะถูกคัดลอกไปยังเขตข้อมูลที่มีชื่อเดียวกันในบันทึกที่สร้างขึ้นใหม่',
    'LBL_SELECTION_TIP' => 'สามารถเลือกโมดูลที่มีฟิลด์สัมพันธ์ในผู้ติดต่อได้มากกว่าที่จะสร้างขึ้นในระหว่างกระบวนการแปลงลูกค้าเป้าหมาย',
    'LBL_EDIT_TIP' => 'แก้ไขรูปแบบการแปลงสำหรับโมดูลนี้',
    'LBL_DELETE_TIP' => 'นำโมดูลนี้ออกจากรูปแบบการแปลง',

    'LBL_ACTIVITIES_MOVE' => 'ย้ายกิจกรรมไปที่',
    'LBL_ACTIVITIES_COPY' => 'คัดลอกกิจกรรมไปที่',
    'LBL_ACTIVITIES_MOVE_HELP' => "เลือกบันทึกที่จะย้ายกิจกรรมของลูกค้าเป้าหมาย งาน, การโทร, การประชุม, บันทึกย่อและอีเมลจะถูกย้ายไปยังบันทึก(s) ที่เลือก",
    'LBL_ACTIVITIES_COPY_HELP' => "เลือกบันทึก(s) ที่จะสร้างสำเนาของกิจกรรมของลูกค้าเป้าหมาย จะมีการสร้าง งาน, การโทร, การประชุม ใหม่ และบันทึกย่อสำหรับแต่ละบันทึก(s) ที่เลือก อีเมลจะเกี่ยวข้องกับบันทึก(s) ที่เลือก",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'แคมเปญไอดี:',
    'LBL_EDITLAYOUT' => 'แก้ไขรูปแบบ' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'กรอกวันที่' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'กำลังโหลด' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'แก้ไข' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'เหตุการณ์',
);
