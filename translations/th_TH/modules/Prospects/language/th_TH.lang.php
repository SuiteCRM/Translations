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
    'LBL_MODULE_NAME' => 'Targets',
    'LBL_MODULE_ID' => 'Targets',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_MODULE_TITLE' => 'เป้าหมาย: หน้าแรก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาเป้าหมาย',
    'LBL_LIST_FORM_TITLE' => 'รายชื่อเป้าหมาย',
    'LBL_NEW_FORM_TITLE' => 'เป้าหมายใหม่',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Assigned To:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'ใช้บัญชีที่มีอยู่แล้ว',
    'LBL_CREATED_ACCOUNT' => 'สร้างบัญชีใหม่',
    'LBL_CREATED_CALL' => 'สร้างการโทรใหม่',
    'LBL_CREATED_MEETING' => 'สร้างการประชุมใหม่',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_PROSPECT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_ALT_ADDRESS_STREET' => 'ถนนอื่น:',
    'LBL_ALT_ADDRESS_CITY' => 'ที่อยู่อื่น:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'ประเทศอื่น:',
    'LBL_ALT_ADDRESS_STATE' => 'จังหวัดอื่น:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์อื่น:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_EMAIL_ADDRESS' => 'อีเมล:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'ไม่โทร:',
    'LBL_EMAIL_OPT_OUT' => 'เลือกไม่รับอีเมล์',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_OPP_NAME' => 'ชื่อโอกาส:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'สร้างรายชื่อติดต่อใหม่โดยอัตโนมัติโดยนำเข้า vCard จากระบบไฟล์ของคุณ',
    'LBL_DUPLICATE' => 'เป้าหมายที่เป็นไปได้ที่เหมือนกัน',
    'MSG_SHOW_DUPLICATES' => 'บันทึกเป้าหมายที่คุณกำลังสร้างอาจซ้ำกับบันทึกเป้าหมายที่มีอยู่แล้ว บันทึกเป้าหมายที่มีชื่อ และ/หรือ ที่อยู่อีเมลที่คล้ายกันอยู่ด้านล่าง <br> คลิกสร้างเป้าหมายเพื่อสร้างเป้าหมายใหม่ต่อหรือเลือกเป้าหมายที่มีอยู่ด้านล่าง',
    'MSG_DUPLICATE' => 'บันทึกเป้าหมายที่คุณกำลังสร้างอาจซ้ำกับบันทึกเป้าหมายที่มีอยู่แล้ว บันทึกเป้าหมายที่มีชื่อ และ/หรือ ที่อยู่อีเมลที่คล้ายกันแสดงอยู่ด้านล่าง <br> คลิกบันทึกเพื่อสร้างเป้าหมายใหม่ต่อหรือคลิกยกเลิกเพื่อกลับไปยังโมดูลโดยไม่สร้างเป้าหมาย',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_IMPORT_PROSPECTS' => 'การนำเข้าเป้าหมาย',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'คุณแน่ใจหรือว่าต้องการปิดเสียงเตือนชั่วคราว',
    'NTC_REMOVE_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการนำรายชื่อติดต่อนี้ออกจากกรณี',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_CREATED_OPPORTUNITY' => 'สร้างโอกาสใหม่',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'สร้างเป้าหมาย',
    'LNK_PROSPECT_LIST' => 'ดูเป้าหมาย',
    'LNK_NEW_CAMPAIGN' => 'สร้างแคมเปญ',
    'LNK_CAMPAIGN_LIST' => 'Campaigns',
    'LNK_NEW_PROSPECT_LIST' => 'สร้างรายการเป้าหมาย',
    'LNK_PROSPECT_LIST_LIST' => 'Target Lists',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'เลือกเป้าหมายที่ได้รับการตรวจสอบ',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'เลือกเป้าหมายที่ได้รับการตรวจสอบ',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Targets',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_CONVERT_BUTTON_TITLE' => 'แปลงเป้าหมาย',
    'LBL_CONVERT_BUTTON_LABEL' => 'แปลงเป้าหมาย',
    'LNK_NEW_CONTACT' => 'ผู้ติดต่อใหม่',
    'LBL_CREATED_CONTACT' => "สร้างผู้ติดต่อใหม่",
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaign Log',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'ไอดีลูกค้าเป้าหมาย',
    'LBL_CONVERTED_LEAD' => 'แปลงลูกค้าเป้าหมาย',
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_EDIT_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_CREATED_USER' => 'สร้างผู้ใช้',
    'LBL_MODIFIED_USER' => 'แก้ไขผู้ใช้',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
