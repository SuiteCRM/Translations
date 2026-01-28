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
    'LBL_SECURITYGROUPS' => 'กลุ่มความปลอดภัย',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'กลุ่มความปลอดภัย',
    'LBL_ID' => 'ไอดี',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'ชื่อ',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_EDIT_BUTTON' => 'แก้ไข',
    'LBL_REMOVE' => 'ลบออก',
    'LBL_LIST_FORM_TITLE' => 'รายการสาระสำคัญ',
    'LBL_MODULE_NAME' => 'สาระสำคัญ',
    'LBL_MODULE_TITLE' => 'สาระสำคัญ',
    'LBL_HOMEPAGE_TITLE' => 'สาระสำคัญของฉัน',
    'LNK_NEW_RECORD' => 'สร้างสาระสำคัญ',
    'LNK_LIST' => 'ดูสาระสำคัญ',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาสาระสำคัญ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_NEW_FORM_TITLE' => 'สาระสำคัญใหม่',
    'LBL_CONFIG' => 'กำหนดค่า',
    'LBL_TYPE' => 'พื้นที่สำหรับการวิเคราะห์',
    'LNK_SPOT_LIST' => 'ดูเป้า',
    'LNK_SPOT_CREATE' => 'สร้างเป้า',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'การกำหมดค่า',

    'LBL_AN_UNSUPPORTED_DB' => 'ขออภัยขณะนี้ Suite Spots มีการกำหนดค่าสำหรับ MySQL และ MS SQL เท่านั้น',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'ชื่อ',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'อุตสาหกรรม',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'ประเทศเรียกเก็บเงิน',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'ผู้รับผิดชอบ',
    'LBL_AN_LEADS_STATUS' => 'สถานะ',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'แหล่งของผู้แนะนำ',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'ชื่อแคมเปญ',
    'LBL_AN_LEADS_YEAR' => 'ปี',
    'LBL_AN_LEADS_QUARTER' => 'ไตรมาส',
    'LBL_AN_LEADS_MONTH' => 'เดือน',
    'LBL_AN_LEADS_WEEK' => 'สัปดาห์',
    'LBL_AN_LEADS_DAY' => 'วัน',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'ชื่อของโอกาส',
    'LBL_AN_SALES_ASSIGNED_USER' => 'ผู้รับผิดชอบ',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'ประเภทโอกาส',
    'LBL_AN_SALES_LEAD_SOURCE' => 'แหล่งของผู้แนะนำ',
    'LBL_AN_SALES_AMOUNT' => 'จำนวน',
    'LBL_AN_SALES_STAGE' => 'ขั้นตอนการขาย:',
    'LBL_AN_SALES_PROBABILITY' => 'ความน่าจะเป็น',
    'LBL_AN_SALES_DATE' => 'วันที่ขาย',
    'LBL_AN_SALES_QUARTER' => 'ไตรมาสที่ขาย',
    'LBL_AN_SALES_MONTH' => 'เดือนขาย',
    'LBL_AN_SALES_WEEK' => 'สัปดาห์ขาย',
    'LBL_AN_SALES_DAY' => 'วันขาย',
    'LBL_AN_SALES_YEAR' => 'ปีขาย',
    'LBL_AN_SALES_CAMPAIGN' => 'แคมเปญ',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_AN_SERVICE_STATE' => 'สถานะ',
    'LBL_AN_SERVICE_STATUS' => 'สถานะ',
    'LBL_AN_SERVICE_PRIORITY' => 'ลำดับความสำคัญ',
    'LBL_AN_SERVICE_CREATED_DAY' => 'วันที่สร้างขึ้น',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'สัปดาห์ที่สร้างขึ้น',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'เดือนที่สร้างขึ้น',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'ไตรมาสที่สร้างขึ้น',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'ปีที่สร้างขึ้น',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'ชื่อผู้ที่ติดต่อ',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'ผู้รับผิดชอบ',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'ประเภท',
    'LBL_AN_ACTIVITIES_NAME' => 'ชื่อ',
    'LBL_AN_ACTIVITIES_STATUS' => 'สถานะ',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'ผู้รับผิดชอบ',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'สถานะ',
    'LBL_AN_MARKETING_TYPE' => 'ประเภท',
    'LBL_AN_MARKETING_BUDGET' => 'งบประมาณ',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'ต้นทุนที่คาด',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'ประมาณการรายได้',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'ชื่อของโอกาส',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'จำนวนเงิน',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'โอกาสระยะการขาย',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'มีโอกาสได้รับมอบหมาย',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'ชื่อแคมเปญ',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'วันกิจกรรม',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'ชนิดกิจกรรม',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'ชนิดที่เกี่ยวข้อง',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ไอดีที่เกี่ยวข้อง',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'ชื่อของโอกาส',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'ประเภทโอกาส',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'โอกาสแหล่งที่มาลูกค้าเป้าหมาย',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'โอกาสระยะการขาย',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'ชื่อผู้ที่ติดต่อ',
    'LBL_AN_QUOTES_ITEM_NAME' => 'ชื่อสินค้า',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'ประเภทสินค้า',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'ประเภทสินค้า',
    'LBL_AN_QUOTES_ITEM_QTY' => 'ปริมาณสินค้า',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'ราคาสินค้า',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'ราคาขายสินค้า',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'ราคาต้นทุนสินค้า',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'สินค้าลดราคา',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'จำนวนส่วนลด',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'รวมสินค้า',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'รวมทั้งสิ้น',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'ผู้รับผิดชอบ',
    'LBL_AN_QUOTES_DATE_CREATED' => 'วันที่สร้าง',
    'LBL_AN_QUOTES_DAY_CREATED' => 'วันที่สร้าง',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'สัปดาห์ที่สร้าง',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'เดือนที่สร้าง',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'ไตรมาสที่สร้าง',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'ปีที่สร้าง',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'เกิดข้อผิดพลาดในการตรวจสอบป้ายกำกับสำหรับสาระสำคัญของพื้นที่ย่อย',
);
