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
    'LBL_MODULE_NAME' => 'พนักงาน',
    'LBL_MODULE_TITLE' => 'พนักงาน: หน้าแรก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาพนักงาน',
    'LBL_LIST_FORM_TITLE' => 'พนักงาน',
    'LBL_NEW_FORM_TITLE' => 'พนักงานใหม่',
    'LBL_LOGIN' => 'เข้าสู่ระบบ',
    'LBL_RESET_PREFERENCES' => 'รีเซ็ตเป็นการตั้งค่าเริ่มต้น',
    'LBL_TIME_FORMAT' => 'รูปแบบเวลา:',
    'LBL_DATE_FORMAT' => 'รูปแบบวัน:',
    'LBL_TIMEZONE' => 'เวลาปัจจุบัน:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_EMPLOYEE_NAME' => 'ชื่อพนักงาน',
    'LBL_LIST_DEPARTMENT' => 'Department',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reports To',
    'LBL_LIST_EMAIL' => 'อีเมล',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_ERROR' => 'ข้อผิดพลาด:',
    'LBL_PASSWORD' => 'Password:',
    'LBL_USER_NAME' => 'ชื่อผู้ใช้งาน',
    'LBL_USER_TYPE' => 'ประเภทผู้ใช้',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_THEME' => 'Theme:',
    'LBL_LANGUAGE' => 'ภาษา:',
    'LBL_ADMIN' => 'ผู้ดูแลระบบ:',
    'LBL_EMPLOYEE_INFORMATION' => 'ข้อมูลพนักงาน',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_REPORTS_TO' => 'รายงานไปยังไอดี:',
    'LBL_REPORTS_TO_NAME' => 'รายงานถึง',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_NOTES' => 'หมายเหตุ:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ADDRESS' => 'ที่อยู่:',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'อีเมล:',
    'LBL_EMAIL_LINK_TYPE' => 'อีเมลไคลเอ็นต์',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> ส่งอีเมลโดยใช้โปรแกรมรับส่งเมลในแอ็พพลิเคชัน SuiteCRM.<br><b>External Mail Client:</b> ส่งอีเมลโดยใช้โปรแกรมรับส่งเมลนอกโปรแกรม SuiteCRM เช่น Microsoft Outlook',
    'LBL_HOME_PHONE' => 'โทรศัพท์ที่บ้าน:',
    'LBL_WORK_PHONE' => 'โทรศัพท์ที่ทำงาน:',
    'LBL_EMPLOYEE_STATUS' => 'สถานะของพนักงาน:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_SAVED_SEARCH' => 'Layout Options',
    'LBL_MESSENGER_ID' => 'ชื่อ IM:',
    'LBL_MESSENGER_TYPE' => 'ประเภท IM:',
    'ERR_LAST_ADMIN_1' => 'ชื่อพนักงาน"',
    'ERR_LAST_ADMIN_2' => '"เป็นพนักงานคนสุดท้ายที่มีสิทธิ์การเข้าถึงระดับผู้ดูแลระบบอย่างน้อยหนึ่งคนต้องเป็นผู้ดูแลระบบ',
    'LNK_NEW_EMPLOYEE' => 'สร้างพนักงาน',
    'LNK_EMPLOYEE_LIST' => 'ดูพนักงาน',
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'สถานะ',

    'LBL_SUITE_LOGIN' => 'เป็นผู้ใช้',
    'LBL_RECEIVE_NOTIFICATIONS' => 'แจ้งเตือนเมื่อได้รับมอบหมาย',
    'LBL_IS_ADMIN' => 'เป็นผู้ดูแล',
    'LBL_GROUP' => 'กลุ่มผู้ใช้',
    'LBL_PHOTO' => 'Photo',
    'LBL_DELETE_USER_CONFIRM' => 'พนักงานคนนี้เป็นผู้ใช้ การลบบันทึกพนักงานจะเป็นการลบบันทึกผู้ใช้และผู้ใช้จะไม่สามารถเข้าถึงแอ็พพลิเคชันได้อีก คุณต้องการดำเนินการลบบันทึกนี้หรือไม่?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'คุณแน่ใจหรือไม่ว่าต้องการลบพนักงานคนนี้?',
    'LBL_ONLY_ACTIVE' => 'พนักงานที่ใช้งานอยู่',
    'LBL_SELECT' => 'Select' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ไอดีการตรวจสอบสิทธิ์',
    'LBL_EXT_AUTHENTICATE' => 'การรับรองความถูกต้องภายนอก',
    'LBL_GROUP_USER' => 'กลุ่มผู้ใช้',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_MODIFIED_BY' => 'แก้ไขโดย',
    'LBL_MODIFIED_BY_ID' => 'Modified By Id',
    'LBL_CREATED_BY_NAME' => 'สร้างโดย', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'ผู้ใช้พอร์ทัล API',
    'LBL_PSW_MODIFIED' => 'เปลี่ยนรหัสผ่านล่าสุด',
    'LBL_SHOW_ON_EMPLOYEES' => 'แสดงบันทึกพนักงาน',
    'LBL_USER_HASH' => 'Password',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'รหัสผ่านที่สร้างโดยระบบ',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'เมือง',
    'LBL_ADDRESS_COUNTRY' => 'ประเทศ',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์',
    'LBL_ADDRESS_STATE' => 'จังหวัด',
    'LBL_ADDRESS_STREET' => 'ถนน',

    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DELETED' => 'ลบ',

    'LBL_BUTTON_SELECT' => 'Select',
    'LBL_BUTTON_CLEAR' => 'Clear',

    'LBL_CONTACTS_SYNC' => 'ซิงค์ผู้ติดต่อ',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'ผู้ใช้โครงการจากชื่อโครงการ',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'รายชื่อโครงการจากชื่อผู้ติดต่อ',
    'LBL_ROLES' => 'บทบาท',
    'LBL_SECURITYGROUPS' => 'Security Groups',
    'LBL_PROSPECT_LIST' => 'Prospect List',

    'LBL_FACTOR_AUTH_INTERFACE' => 'อินเทอร์เฟซการตรวจสอบสิทธิ์แบบสองปัจจัย:',
    'LBL_EDITOR_TYPE' => 'ผู้แก้ไข',
);
