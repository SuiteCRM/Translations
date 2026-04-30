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
    'ERR_DELETE_RECORD' => 'ระบุหมายเลขบันทึกเพื่อลบรายชื่อ',
    'LBL_ACCOUNT_ID' => 'รหัสบัญชี:',
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ALT_ADDRESS_CITY' => 'ที่อยู่อื่น:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'ประเทศอื่น:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์อื่น:',
    'LBL_ALT_ADDRESS_STATE' => 'จังหวัดอื่น:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Alternate Address Street 2:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Alternate Address Street 3:',
    'LBL_ALT_ADDRESS_STREET' => 'ถนนอื่น:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to:',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User',
    'LBL_ASSISTANT_PHONE' => 'โทรศัพท์ผู้ช่วย:',
    'LBL_ASSISTANT' => 'ผู้ช่วย:',
    'LBL_BIRTHDATE' => 'วันเกิด:',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'โอกาสติดต่อ:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Contact:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_ACCOUNT' => 'สร้างบัญชีใหม่',
    'LBL_CREATED_CALL' => 'สร้างการโทรใหม่',
    'LBL_CREATED_CONTACT' => 'สร้างผู้ติดต่อใหม่',
    'LBL_CREATED_MEETING' => 'สร้างการประชุมใหม่',
    'LBL_CREATED_OPPORTUNITY' => 'สร้างโอกาสใหม่',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEPARTMENT' => 'ฝ่าย:',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'ไม่โทร:',
    'LBL_DUPLICATE' => 'ชื่อผู้ติดต่ออาจซ้ำได้',
    'LBL_EMAIL_ADDRESS' => 'อีเมล:',
    'LBL_EMAIL_OPT_OUT' => 'เลือกไม่รับอีเมล์',
    'LBL_EXISTING_ACCOUNT' => 'ใช้บัญชีที่มีอยู่แล้ว',
    'LBL_EXISTING_CONTACT' => 'ใช้ที่อยู่ติดต่อที่มีอยู่',
    'LBL_EXISTING_OPPORTUNITY' => 'ใช้โอกาสที่มีอยู่',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'ชื่อ:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'โทรศัพท์ที่บ้าน:',
    'LBL_ID' => 'ไอดี:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'สร้างรายชื่อติดต่อใหม่โดยอัตโนมัติโดยนำเข้า vCard จากระบบไฟล์ของคุณ',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'นามสกุล:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'บทบาท',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_TITLE' => 'ตำแหน่ง',
    'LBL_MOBILE_PHONE' => 'โทรศัพท์มือถือ:',
    'LBL_MODIFIED' => 'แก้ไชโดย:',
    'LBL_MODULE_NAME' => 'Contacts',
    'LBL_MODULE_TITLE' => 'ผู้ติดต่อ',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_NEW_FORM_TITLE' => 'ผู้ติดต่อใหม่',
    'LBL_NOTE_SUBJECT' => 'หมายเหตุเรื่อง',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'ชื่อโอกาส:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Opportunity Role ID:',
    'LBL_OPPORTUNITY_ROLE' => 'Opportunity Role',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'พอร์ทัลแอพพลิเคชั่น:',
    'LBL_PORTAL_INFORMATION' => 'ข้อมูลพอร์ทัล',
    'LBL_PORTAL_NAME' => 'รหัสไปรษณีย์:',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_REPORTS_TO_ID' => 'รายงานไปยังไอดี:',
    'LBL_REPORTS_TO' => 'รายงานถึง:',
    'LBL_RESOURCE_NAME' => 'ชื่อแหล่งที่มา',
    'LBL_SALUTATION' => 'คำทักทาย:',
    'LBL_SAVE_CONTACT' => 'บันทึกผู้ติดต่อ',
    'LBL_SEARCH_FORM_TITLE' => 'การค้นรายชื่อผู้ติดต่อ',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'เลือกผู้ติดต่อที่เลือกไว้',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'เลือกผู้ติดต่อที่เลือกไว้',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_SYNC_CONTACT' => 'ซิงค์กับ Outlook&reg;:',
    'LBL_PROSPECT_LIST' => 'Prospect List',
    'LBL_TITLE' => 'Job Title:',
    'LNK_CONTACT_LIST' => 'ผู้ติดต่อ',
    'LNK_IMPORT_VCARD' => 'สร้างที่อยู่ติดต่อจาก vCard',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'คุณแน่ใจหรือว่าต้องการปิดเสียงเตือนชั่วคราว',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'การสร้างโอกาสต้องใช้บัญชี \n โปรดสร้างบัญชีใหม่หรือเลือกบัญชีที่มีอยู่',
    'NTC_REMOVE_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการนำรายชื่อติดต่อนี้ออกจากกรณี',

    'LBL_LEADS_SUBPANEL_TITLE' => 'ช่องทางการขาย',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Opportunities',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'คัดลอกไปยังที่อยู่หลัก',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'คัดลอกไปยังที่อยู่อื่น',

    'LBL_CASES_SUBPANEL_TITLE' => 'Cases',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECTS_RESOURCES' => 'แหล่งที่มาโครงการ',
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campaigns',
    'LBL_LIST_CITY' => 'อำเภอ/เขต',
    'LBL_LIST_STATE' => 'State',
    'LBL_HOMEPAGE_TITLE' => 'ลูกค้าของฉัน',
    'LBL_OPPORTUNITIES' => 'Opportunities',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LNK_IMPORT_CONTACTS' => 'นำเข้าผู้ติดต่อ',

    // SNIP
    'LBL_USER_SYNC' => 'ซิงค์ผู้ใช้',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_CREATE_PORTAL_USER' => 'สร้างผู้ใช้พอร์ทัล',
    'LBL_ENABLE_PORTAL_USER' => 'เปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_DISABLE_PORTAL_USER' => 'ปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'ไม่สามารถสร้างผู้ใช้พอร์ทัล',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'ไม่สามารถเปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'ไม่สามารถปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'สร้างผู้ใช้พอร์ทัล',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'เปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'ปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_FAILED_TO_CONNECT_JOOMLA' => 'Failed to create portal user, not able to connect to Joomla',
    'LBL_ERROR_CONTACT_ID_OR_EMAIL_EMPTY' => 'Contact ID or Email is empty',
    'LBL_NO_JOOMLA_URL' => 'ไม่มีพอร์ทัล URL ที่ระบุ',
    'LBL_PORTAL_USER_TYPE' => 'ประเภทผู้ใช้พอร์ทัล',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'ปิดใช้งานบัญชี',
    'LBL_JOOMLA_ACCOUNT_ID' => 'บัญชีไอดี Joomla',
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Invoices',
    'LBL_AOS_QUOTES' => 'Quotes',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'รายชื่อโครงการจากชื่อโครงการ',
    'LBL_LAST_MEETING' => 'Your last interaction was a meeting on :',
    'LBL_LAST_CALL' => 'Your last interaction was a call on :',
    'LBL_LAST_EMAIL' => 'Your last interaction was an email on :',
    'LBL_NO_INTERACTION' => 'You have yet to interact with this contact.',

    'LBL_LIST_INVITE_STATUS' => 'สถานะคำเชิญ',
);
