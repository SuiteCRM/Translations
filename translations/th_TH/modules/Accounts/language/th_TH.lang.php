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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'เอกสาร',
    // Dashlet Categories
    'LBL_CHARTS' => 'แผนภูมิ',
    'LBL_DEFAULT' => 'มุมมอง',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'คุณต้องระบุหมายเลขเรกคอร์ดเพื่อลบบัญชี',
    'LBL_ACCOUNT_INFORMATION' => 'ภาพรวม', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_ACCOUNT' => 'บัญชีลูกค้า:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_ADDRESS_INFORMATION' => 'ข้อมูลที่อยู่',
    'LBL_ANNUAL_REVENUE' => 'รายได้ประจำปี:',
    'LBL_ANY_ADDRESS' => 'ที่อยู่:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ANY_PHONE' => 'โทรศัพท์:',
    'LBL_ASSIGNED_TO_NAME' => 'กำหนดให้:',
    'LBL_ASSIGNED_TO_ID' => 'ผู้รับผิดชอบ:',
    'LBL_BILLING_ADDRESS_CITY' => 'เรียกเก็บเงินที่เมือง:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'ประเทศเรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์เรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS_STATE' => 'รัฐเรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'ถนนเรียกเก็บเงิน 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'ถนนเรียกเก็บเงิน 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'ถนนเรียกเก็บเงิน 4',
    'LBL_BILLING_ADDRESS_STREET' => 'ถนนเรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS' => 'ที่อยู่วางบิล:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'ข้อผิดพลาด',
    'LBL_CAMPAIGN_ID' => 'แคมเปญไอดี:',
    'LBL_CASES_SUBPANEL_TITLE' => 'การติดตาม',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_COUNTRY' => 'ประเทศ:',
    'LBL_DATE_ENTERED' => 'วันที่ที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไขครั้งสุดท้าย:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ข้อมูลลูกค้า',
    'LBL_DESCRIPTION_INFORMATION' => 'รายละเอียดของข้อมูล',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_DUPLICATE' => 'บัญชีรายการซ้ำที่เป็นไปได้',
    'LBL_EMAIL' => 'อีเมล:',
    'LBL_EMAIL_OPT_OUT' => 'เลือกไม่รับอีเมล์',
    'LBL_EMAIL_ADDRESSES' => 'อีเมล์',
    'LBL_EMPLOYEES' => 'พนักงาน:',
    'LBL_FAX' => 'โทรสาร:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',
    'LBL_HOMEPAGE_TITLE' => 'บัญชีของฉัน',
    'LBL_INDUSTRY' => 'อุตสาหกรรม:',
    'LBL_INVALID_EMAIL' => 'อีเมล์ไม่ถูกต้อง:',
    'LBL_INVITEE' => 'ผู้ติดต่อ',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ช่องทางการขาย',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อ',
    'LBL_LIST_CITY' => 'อำเภอ/เขต',
    'LBL_LIST_CONTACT_NAME' => 'ชื่อผู้ที่ติดต่อ',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_FORM_TITLE' => 'รายการบัญชี',
    'LBL_LIST_PHONE' => 'โทรศัพท์',
    'LBL_LIST_STATE' => 'สถานะ',
    'LBL_MEMBER_OF' => 'สมาชิกของ:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'องค์กรสมาชิก',
    'LBL_MODULE_NAME' => 'ข้อมูลลูกค้า',
    'LBL_MODULE_TITLE' => 'ข้อมูลลูกค้า: หน้าหลัก',
    'LBL_MODULE_ID' => 'ข้อมูลลูกค้า',
    'LBL_NAME' => 'ชื่อ:',
    'LBL_NEW_FORM_TITLE' => 'บัญชีลูกค้าใหม่',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'โอกาสการขาย',
    'LBL_OTHER_EMAIL_ADDRESS' => 'อีเมล์อื่นๆ:',
    'LBL_OTHER_PHONE' => 'โทรศัพท์อื่นๆ:',
    'LBL_OWNERSHIP' => 'เจ้าของ:',
    'LBL_PARENT_ACCOUNT_ID' => 'รหัสบัญชีหลัก',
    'LBL_PHONE_ALT' => 'โทรศัพท์สำรอง:',
    'LBL_PHONE_FAX' => 'โทรสาร:',
    'LBL_PHONE_OFFICE' => 'โทรศัพท์ที่ทำงาน:',
    'LBL_PHONE' => 'โทรศัพท์:',
    'LBL_POSTAL_CODE' => 'รหัสไปรษณีย์:',
    'LBL_PRODUCTS_TITLE' => 'สินค้า',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'โครงการ',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'คัดลอกไปยังที่ติดต่อ',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'คัดลอก...',
    'LBL_RATING' => 'เรตติ้ง',
    'LBL_SAVE_ACCOUNT' => 'บันทึกบัญชี',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาบัญชี',
    'LBL_SHIPPING_ADDRESS_CITY' => 'เมืองจัดส่ง:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'ประเทศที่จัดส่ง:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์การจัดส่ง:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'รัฐจัดส่ง:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'ถนนขนส่ง 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'ถนนขนส่ง 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'ถนนขนส่ง 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'ถนนการจัดส่ง:',
    'LBL_SHIPPING_ADDRESS' => 'ที่อยู่จัดส่ง:',
    'LBL_SIC_CODE' => 'รหัส SIC:',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_TICKER_SYMBOL' => 'สัญลักษณ์:',
    'LBL_TYPE' => 'ประเภท:',
    'LBL_WEBSITE' => 'เว็บไซต์:',
    'LBL_CAMPAIGNS' => 'แคมเปญ',
    'LNK_ACCOUNT_LIST' => 'ดูบัญชี',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'LNK_IMPORT_ACCOUNTS' => 'นำเข้าข้อมูลลูกค้า',
    'MSG_DUPLICATE' => 'บันทึกลูกค้าองค์กรที่คุณกำลังสร้างอาจซ้ำของบันทึกลูกค้าองค์กรที่มีอยู่แล้ว บันทึกลูกค้าองค์กรที่ประกอบด้วยชื่อที่คล้ายกันมีดังต่อไปนี้ <br>คลิกสร้างบัญชีการสร้างบัญชีใหม่นี้ หรือเลือกบัญชีที่มีอยู่ด้านล่างนี้',
    'MSG_SHOW_DUPLICATES' => 'บันทึกลูกค้าองค์กรที่คุณกำลังสร้างอาจซ้ำของบันทึกลูกค้าองค์กรที่มีอยู่แล้ว บันทึกลูกค้าองค์กรที่ประกอบด้วยชื่อที่คล้ายกันมีดังต่อไปนี้ <br>คลิกบันทึกเพื่อสร้างบัญชีใหม่นี้ หรือคลิกยกเลิกเพื่อกลับไปยังโมดูลโดยไม่ต้องสร้างบัญชี',
    'LBL_ASSIGNED_USER_NAME' => 'กำหนดให้:',
    'LBL_PROSPECT_LIST' => 'รายชื่อลูกค้า',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ข้อมูลลูกค้า',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'โครงการ',
    //For export labels
    'LBL_PARENT_ID' => 'รหัสหลัก',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'ผลิตภัณฑ์และบริการที่ซื้อ',

    'LBL_AOS_CONTRACTS' => 'สัญญา',
    'LBL_AOS_INVOICES' => 'ใบแจ้งหนี้',
    'LBL_AOS_QUOTES' => 'ใบเสนอราคา',
    'LBL_LIST_WEBSITE' => 'เว็บไซต์',
);
