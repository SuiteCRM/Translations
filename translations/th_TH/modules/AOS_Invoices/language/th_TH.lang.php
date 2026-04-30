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
    'LBL_ASSIGNED_TO_ID' => 'Id ผู้รับผิดชอบ',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ID' => 'ไอดี',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'Title',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไข โดยผู้ใช้',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_ACCOUNT_NAME' => 'Title',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_ADDRESS_INFORMATION' => 'Address Information',
    'LBL_ANNUAL_REVENUE' => 'Annual Revenue:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'อีเมลใด ๆ:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => 'ผู้รับผิดชอบ',
    'LBL_BILLING_ADDRESS_CITY' => 'ที่อยู่วางบิล อำเภอ/เขต:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'ที่อยู่วางบิล ประเทศ:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'ที่อยู่วางบิล รหัสไปรษณีย์:',
    'LBL_BILLING_ADDRESS_STATE' => 'ที่อยู่วางบิล จังหวัด:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'ที่อยู่วางบิล 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'ที่อยู่วางบิล 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'ที่อยู่วางบิล 4',
    'LBL_BILLING_ADDRESS_STREET' => 'ที่อยู่วางบิล:',
    'LBL_BILLING_ADDRESS' => 'ที่อยู่วางบิล:',
    'LBL_ACCOUNT_INFORMATION' => 'ภาพรวม',
    'LBL_CITY' => 'อำเภอ/เขต:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ข้อมูลลูกค้า',
    'LBL_DUPLICATE' => 'บัญชีลูกค้าที่อาจซ้ำได้',
    'LBL_EMAIL' => 'อีเมล:',
    'LBL_EMPLOYEES' => 'Employees:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industry:',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_CITY' => 'อำเภอ/เขต',
    'LBL_LIST_EMAIL_ADDRESS' => 'อีเมล',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'Parent Account ID',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'Save Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Shipping City:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Shipping Country:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Shipping State:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_STATE' => 'จังหวัด:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Type:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'ข้อมูลลูกค้า',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'MSG_DUPLICATE' => 'สร้างบัญชีผู้ใช้นี้อาจสร้างบัญชีซ้ำกัน คุณอาจเลือกบัญชีจากรายการด้านล่าง หรือคุณอาจคลิกบันทึกการสร้างบัญชีใหม่กับข้อมูลที่ป้อนไว้ก่อนหน้านี้',
    'MSG_SHOW_DUPLICATES' => 'สร้างบัญชีผู้ใช้นี้อาจสร้างบัญชีซ้ำกัน คุณสามารถคลิกบันทึกการสร้างบัญชีใหม่กับข้อมูลที่ป้อนไว้ก่อนหน้านี้หรือคุณอาจคลิกยกเลิก',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'LBL_LIST_FORM_TITLE' => 'รายการใบแจ้งหนี้',
    'LBL_MODULE_NAME' => 'Invoices',
    'LBL_MODULE_TITLE' => 'ใบแจ้งหนี้: หน้าหลัก',
    'LBL_HOMEPAGE_TITLE' => 'ใบแจ้งหนี้ของฉัน',
    'LNK_NEW_RECORD' => 'สร้างใบแจ้งหนี้',
    'LNK_LIST' => 'ดูใบแจ้งหนี้',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาใบแจ้งหนี้',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_NEW_FORM_TITLE' => 'ใบแจ้งหนี้ใหม่',
    'LBL_TERMS_C' => 'ข้อกำหนด',
    'LBL_APPROVAL_ISSUE' => 'ปัญหาการอนุมัติ',
    'LBL_APPROVAL_STATUS' => 'สถานะอนุมัติ',
    'LBL_BILLING_ACCOUNT' => 'ข้อมูลลูกค้า',
    'LBL_BILLING_CONTACT' => 'Contact',
    'LBL_EXPIRATION' => 'ใช้ได้จนถึง',
    'LBL_INVOICE_NUMBER' => 'หมายเลขใบแจ้งหนี้',
    'LBL_OPPORTUNITY' => 'Opportunity Name',
    'LBL_TEMPLATE_DDOWN_C' => 'แม่แบบใบแจ้งหนี้',
    'LBL_STAGE' => 'ระยะของใบเสนอราคา',
    'LBL_TERM' => 'เงื่อนไขการชำระเงิน',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Shipping',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Title',
    'LBL_EMAIL_ADDRESSES' => 'อีเมล์',
    'LBL_LINE_ITEMS' => 'Line Items',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'หมายเลขใบเสนอราคา',
    'LBL_QUOTE_DATE' => 'วันเสนอราคา',
    'LBL_INVOICE_DATE' => 'วันแจ้งหนี้',
    'LBL_DUE_DATE' => 'วันที่ที่สิ้นสุด',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'สถานะใบแจ้งหนี้',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Product',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Note',
    'LBL_PRODUCT_DESCRIPTION' => 'รายละเอียด',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Remove',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_INVOICE' => 'อีเมล์ใบแจ้งหนี้',
    'LBL_LIST_NUM' => 'เลขที่.',
    'LBL_PDF_NAME' => 'Invoice',
    'LBL_EMAIL_NAME' => 'ใบแจ้งหนี้สำหรับ',
    'LBL_NO_TEMPLATE' => 'ข้อผิดพลาด \n ไม่พบแม่แบบ หากคุณยังไม่ได้สร้างแม่แบบใบแจ้งหนี้ให้ไปที่โมดูลแม่แบบ PDF และสร้างแม่แบบ',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'ผลรวมย่อย + ภาษี',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'นำเข้าสินค้าในรายการ',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => 'ใบแจ้งหนี้ถึง',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'ใบเสนอราคาผลิตภัณฑ์',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'ใบเสนอราคา: ใบแจ้งหนี้',
);
