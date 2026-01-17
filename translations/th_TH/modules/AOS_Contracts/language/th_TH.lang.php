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
    'LBL_ASSIGNED_TO_NAME' => 'ผู้จัดการสัญญา',
    'LBL_CONTRACT_ACCOUNT' => 'ข้อมูลลูกค้า',
    'LBL_OPPORTUNITY' => 'โอกาสการขาย',
    'LBL_ID' => 'ไอดี',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'หัวข้อสัญญา',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_FORM_TITLE' => 'รายการสัญญา',
    'LBL_MODULE_NAME' => 'สัญญา',
    'LBL_MODULE_TITLE' => 'สัญญา: หน้าหลัก',
    'LBL_HOMEPAGE_TITLE' => 'สัญญาของฉัน',
    'LNK_NEW_RECORD' => 'สร้างสัญญา',
    'LNK_LIST' => 'ดูสัญญา',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาสัญญา',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_NEW_FORM_TITLE' => 'สัญญาใหม่',
    'LBL_CONTRACT_NAME' => 'ชื่อสัญญา',
    'LBL_REFERENCE_CODE ' => 'รหัสอ้างอิง ',
    'LBL_START_DATE' => 'วันที่เริ่มต้น',
    'LBL_END_DATE' => 'วันที่สิ้นสุด',
    'LBL_TOTAL_CONTRACT_VALUE' => 'มูลค่าตามสัญญา',
    'LBL_STATUS' => 'สถานะ',
    'LBL_CUSTOMER_SIGNED_DATE' => 'วันที่ลูกค้าลงนาม',
    'LBL_COMPANY_SIGNED_DATE' => 'วันที่บริษัทลงนาม',
    'LBL_RENEWAL_REMINDER' => ' การแจ้งเตือนการต่ออายุสัญญา',
    'LBL_RENEWAL_REMINDER_DATE' => 'วันแจ้งเตือนการต่ออายุ',
    'LBL_CONTRACT_TYPE' => 'ประเภทสัญญา',
    'LBL_CONTACT' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_ADD_GROUP' => 'เพิ่มกลุ่ม',
    'LBL_DELETE_GROUP' => 'ลบกลุ่ม',
    'LBL_GROUP_NAME' => 'ชื่อกลุ่ม',
    'LBL_GROUP_TOTAL' => 'กลุ่มรวม',
    'LBL_PRODUCT_QUANITY' => 'จำนวน',
    'LBL_PRODUCT_NAME' => 'สินค้า',
    'LBL_PART_NUMBER' => 'หมายเลขชิ้นส่วน',
    'LBL_PRODUCT_NOTE' => 'บันทึกย่อ',
    'LBL_PRODUCT_DESCRIPTION' => 'รายละเอียด',
    'LBL_LIST_PRICE' => 'รายการ',
    'LBL_DISCOUNT_AMT' => 'ส่วนลด',
    'LBL_UNIT_PRICE' => 'ราคาขาย',
    'LBL_TOTAL_PRICE' => 'ผลรวม',
    'LBL_VAT' => 'ภาษี',
    'LBL_VAT_AMT' => 'ยอดรวมภาษี',
    'LBL_SERVICE_NAME' => 'บริการ',
    'LBL_SERVICE_LIST_PRICE' => 'รายการ',
    'LBL_SERVICE_PRICE' => 'ราคาขาย',
    'LBL_SERVICE_DISCOUNT' => 'ส่วนลด',
    'LBL_LINE_ITEMS' => 'สินค้าในรายการ',
    'LBL_SUBTOTAL_AMOUNT' => 'ผลรวมย่อย',
    'LBL_DISCOUNT_AMOUNT' => 'ส่วนลด',
    'LBL_TAX_AMOUNT' => 'ภาษี',
    'LBL_SHIPPING_AMOUNT' => 'การจัดส่ง',
    'LBL_TOTAL_AMT' => 'ผลรวม',
    'LBL_GRAND_TOTAL' => 'รวมทั้งสิ้น',
    'LBL_SHIPPING_TAX' => 'ภาษีการจัดส่ง',
    'LBL_SHIPPING_TAX_AMT' => 'ภาษีการจัดส่ง',
    'LBL_ADD_PRODUCT_LINE' => 'เพิ่มสายผลิตภัณฑ์',
    'LBL_ADD_SERVICE_LINE' => 'เพิ่มสายบริการ ',
    'LBL_PRINT_AS_PDF' => 'พิมพ์เป็น PDF',
    'LBL_EMAIL_PDF' => 'อีเมล์เป็น PDF',
    'LBL_PDF_NAME' => 'สัญญา',
    'LBL_EMAIL_NAME' => 'สัญญาสำหรับ',
    'LBL_NO_TEMPLATE' => 'ERROR \n ไม่พบแม่แบบ ถ้าคุณไม่ได้สร้างแม่แบบสัญญา ไปPDFโมดูลแม่แบบและสร้าง',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'มูลค่าตามสัญญา (สกุลเงินเริ่มต้น)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'ผลรวมย่อย (สกุลเงินเริ่มต้น)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'ส่วนลด (สกุลเงินเริ่มต้น)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'ภาษี (สกุลเงินเริ่มต้น)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'จัดส่ง (สกุลเงินเริ่มต้น)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'ทั้งหมด (สกุลเงินเริ่มต้น)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'ภาษีค่าจัดส่ง (สกุลเงินเริ่มต้น)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'ผลรวมทั้งหมด (สกุลเงินเริ่มต้น)',

    'LBL_CALL_ID' => 'ไอดี โทร',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'กลุ่มรายการ',
    'LBL_AOS_PRODUCT_QUOTES' => 'ใบเสนอราคาผลิตภัณฑ์',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'สัญญาใบเสนอราคา',
);
