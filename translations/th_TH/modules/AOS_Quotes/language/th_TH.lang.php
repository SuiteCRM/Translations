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
    'LBL_NAME' => 'ตำแหน่ง',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขบันทึกเพื่อลบบัญชี',
    'LBL_ACCOUNT_NAME' => 'ตำแหน่ง',
    'LBL_ACCOUNT' => 'บริษัท:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_ADDRESS_INFORMATION' => 'ข้อมูลที่อยู่',
    'LBL_ANNUAL_REVENUE' => 'รายได้ประจำปี:',
    'LBL_ANY_ADDRESS' => 'ที่อยู่:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ANY_PHONE' => 'โทรศัพท์:',
    'LBL_RATING' => 'เรตติ้ง',
    'LBL_ASSIGNED_USER' => 'ผู้รับผิดชอบ',
    'LBL_BILLING_ADDRESS_CITY' => 'เรียกเก็บเงินที่เมือง:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'ประเทศเรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์เรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS_STATE' => 'รัฐเรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'ถนนเรียกเก็บเงิน 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'ถนนเรียกเก็บเงิน 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'ถนนเรียกเก็บเงิน 4',
    'LBL_BILLING_ADDRESS_STREET' => 'ถนนเรียกเก็บเงิน:',
    'LBL_BILLING_ADDRESS' => 'ที่อยู่วางบิล:',
    'LBL_ACCOUNT_INFORMATION' => 'ภาพรวม',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_COUNTRY' => 'ประเทศ:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ข้อมูลลูกค้า',
    'LBL_DUPLICATE' => 'บัญชีรายการซ้ำที่เป็นไปได้',
    'LBL_EMAIL' => 'อีเมล:',
    'LBL_EMPLOYEES' => 'พนักงาน:',
    'LBL_FAX' => 'โทรสาร:',
    'LBL_INDUSTRY' => 'อุตสาหกรรม:',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_CITY' => 'อำเภอ/เขต',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_PHONE' => 'โทรศัพท์',
    'LBL_LIST_STATE' => 'สถานะ',
    'LBL_MEMBER_OF' => 'สมาชิกของ:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'องค์กรสมาชิก',
    'LBL_OTHER_EMAIL_ADDRESS' => 'อีเมล์อื่นๆ:',
    'LBL_OTHER_PHONE' => 'โทรศัพท์อื่นๆ:',
    'LBL_OWNERSHIP' => 'เจ้าของ:',
    'LBL_PARENT_ACCOUNT_ID' => 'รหัสบัญชีหลัก',
    'LBL_PHONE_ALT' => 'โทรศัพท์สำรอง:',
    'LBL_PHONE_FAX' => 'โทรสาร:',
    'LBL_PHONE_OFFICE' => 'โทรศัพท์ที่ทำงาน:',
    'LBL_PHONE' => 'โทรศัพท์:',
    'LBL_POSTAL_CODE' => 'รหัสไปรษณีย์:',
    'LBL_SAVE_ACCOUNT' => 'บันทึกบัญชี',
    'LBL_SHIPPING_ADDRESS_CITY' => 'เมืองจัดส่ง:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'ประเทศที่จัดส่ง:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์การจัดส่ง:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'รัฐจัดส่ง:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'ถนนขนส่ง 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'ถนนขนส่ง 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'ถนนขนส่ง 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'ถนนการจัดส่ง:',
    'LBL_SHIPPING_ADDRESS' => 'ที่อยู่จัดส่ง:',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_TICKER_SYMBOL' => 'สัญลักษณ์:',
    'LBL_TYPE' => 'ประเภท:',
    'LBL_WEBSITE' => 'เว็บไซต์:',
    'LNK_ACCOUNT_LIST' => 'ข้อมูลลูกค้า',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'MSG_DUPLICATE' => 'สร้างบัญชีผู้ใช้นี้อาจสร้างบัญชีซ้ำกัน คุณอาจเลือกบัญชีจากรายการด้านล่าง หรือคุณอาจคลิกบันทึกการสร้างบัญชีใหม่กับข้อมูลที่ป้อนไว้ก่อนหน้านี้',
    'MSG_SHOW_DUPLICATES' => 'สร้างบัญชีผู้ใช้นี้อาจสร้างบัญชีซ้ำกัน คุณสามารถคลิกบันทึกการสร้างบัญชีใหม่กับข้อมูลที่ป้อนไว้ก่อนหน้านี้หรือคุณอาจคลิกยกเลิก',
    'NTC_DELETE_CONFIRMATION' => 'คุณแน่ใจไหมที่ต้องการจะลบบันทึกนี้?',
    'LBL_LIST_FORM_TITLE' => 'รายการใบเสนอราคา',
    'LBL_MODULE_NAME' => 'ใบเสนอราคา',
    'LBL_MODULE_TITLE' => 'ใบเสนอราคา: หน้าหลัก',
    'LBL_HOMEPAGE_TITLE' => 'ใบเสนอราคาของฉัน',
    'LNK_NEW_RECORD' => 'สร้างใบเสนอราคา',
    'LNK_LIST' => 'ดูใบเสนอราคา',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาใบเสนอราคา',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_NEW_FORM_TITLE' => 'ใบเสนอราคาใหม่',
    'LBL_TERMS_C' => 'ข้อกำหนด',
    'LBL_APPROVAL_ISSUE' => 'ปัญหาการอนุมัติ',
    'LBL_APPROVAL_STATUS' => 'สถานะอนุมัติ',
    'LBL_BILLING_ACCOUNT' => 'ข้อมูลลูกค้า',
    'LBL_BILLING_CONTACT' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_EXPIRATION' => 'ใช้ได้จนถึง',
    'LBL_QUOTE_NUMBER' => 'หมายเลขใบเสนอราคา',
    'LBL_OPPORTUNITY' => 'โอกาสการขาย',
    'LBL_TEMPLATE_DDOWN_C' => 'แม่แบบใบเสนอราคา',
    'LBL_STAGE' => 'ระยะของใบเสนอราคา',
    'LBL_TERM' => 'เงื่อนไขการชำระเงิน',
    'LBL_SUBTOTAL_AMOUNT' => 'ผลรวมย่อย',
    'LBL_DISCOUNT_AMOUNT' => 'ส่วนลด',
    'LBL_TAX_AMOUNT' => 'ภาษี',
    'LBL_SHIPPING_AMOUNT' => 'การจัดส่ง',
    'LBL_TOTAL_AMT' => 'ผลรวม',
    'VALUE' => 'ตำแหน่ง',
    'LBL_EMAIL_ADDRESSES' => 'อีเมล์',
    'LBL_LINE_ITEMS' => 'สินค้าในรายการ',
    'LBL_GRAND_TOTAL' => 'รวมทั้งสิ้น',
    'LBL_INVOICE_STATUS' => 'สถานะใบแจ้งหนี้',
    'LBL_PRODUCT_QUANITY' => 'จำนวน',
    'LBL_PRODUCT_NAME' => 'สินค้า',
    'LBL_PART_NUMBER' => 'หมายเลขชิ้นส่วน',
    'LBL_PRODUCT_NOTE' => 'บันทึกย่อ',
    'LBL_PRODUCT_DESCRIPTION' => 'รายละเอียด',
    'LBL_LIST_PRICE' => 'รายการ',
    'LBL_DISCOUNT_AMT' => 'ส่วนลด',
    'LBL_UNIT_PRICE' => 'ราคาขาย',
    'LBL_TOTAL_PRICE' => 'ผลรวม',
    'LBL_VAT' => 'ภาษี', // VAT
    'LBL_VAT_AMT' => 'ยอดรวมภาษี', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'เพิ่มสายผลิตภัณฑ์',
    'LBL_SERVICE_NAME' => 'บริการ',
    'LBL_SERVICE_LIST_PRICE' => 'รายการ',
    'LBL_SERVICE_PRICE' => 'ราคาขาย',
    'LBL_SERVICE_DISCOUNT' => 'ส่วนลด',
    'LBL_ADD_SERVICE_LINE' => 'เพิ่มสายบริการ ',
    'LBL_REMOVE_PRODUCT_LINE' => 'ลบออก',
    'LBL_CONVERT_TO_INVOICE' => 'เปลี่ยนเป็นใบแจ้งหนี้',
    'LBL_PRINT_AS_PDF' => 'พิมพ์เป็น PDF',
    'LBL_EMAIL_QUOTE' => 'อีเมลในเสนอราคา',
    'LBL_CREATE_CONTRACT' => 'สร้างสัญญา',
    'LBL_LIST_NUM' => 'เลขที่.',
    'LBL_PDF_NAME' => 'ใบเสนอราคา',
    'LBL_EMAIL_NAME' => 'เสนอราคาสำหรับ',
    'LBL_QUOTE_DATE' => 'วันที่เสนอราคา',
    'LBL_NO_TEMPLATE' => 'ข้อผิดพลาด \n ไม่พบแม่แบบ หากคุณยังไม่ได้สร้างแม่แบบใบแจ้งหนี้ให้ไปที่โมดูลแม่แบบ PDF และสร้างแม่แบบ',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'ผลรวมย่อย + ภาษี',//pre shipping
    'LBL_EMAIL_PDF' => 'อีเมล์เป็น PDF',
    'LBL_ADD_GROUP' => 'เพิ่มกลุ่ม',
    'LBL_DELETE_GROUP' => 'ลบกลุ่ม',
    'LBL_GROUP_NAME' => 'ชื่อกลุ่ม',
    'LBL_GROUP_TOTAL' => 'กลุ่มรวม',
    'LBL_SHIPPING_TAX' => 'ภาษีการจัดส่ง',
    'LBL_SHIPPING_TAX_AMT' => 'ภาษีการจัดส่ง',
    'LBL_IMPORT_LINE_ITEMS' => 'นำเข้าสินค้าในรายการ',
    'LBL_CREATE_OPPORTUNITY' => 'สร้างเป้าหมายการขาย',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'ผลรวมย่อย (สกุลเงินเริ่มต้น)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'ส่วนลด (สกุลเงินเริ่มต้น)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'ภาษี (สกุลเงินเริ่มต้น)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'จัดส่ง (สกุลเงินเริ่มต้น)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'ทั้งหมด (สกุลเงินเริ่มต้น)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'ภาษีค่าจัดส่ง (สกุลเงินเริ่มต้น)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'ผลรวมทั้งหมด (สกุลเงินเริ่มต้น)',
    'LBL_QUOTE_TO' => 'เสนอให้',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'ผลรวมย่อย + ภาษี (สกุลเงินเริ่มต้น)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'สัญญาใบเสนอราคา',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'ใบเสนอราคา: ใบแจ้งหนี้',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'กลุ่มรายการ',
    'LBL_AOS_PRODUCT_QUOTES' => 'ใบเสนอราคาผลิตภัณฑ์',
    'LBL_AOS_QUOTES_PROJECT' => 'ในเสนอราคา:แม่แบบ',
);
