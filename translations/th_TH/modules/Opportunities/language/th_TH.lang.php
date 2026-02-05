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
    'LBL_MODULE_NAME' => 'โอกาสการขาย',
    'LBL_MODULE_TITLE' => 'โอกาส: หน้าแรก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาโอกาส',
    'LBL_LIST_FORM_TITLE' => 'รายการโอกาส',
    'LBL_OPPORTUNITY_NAME' => 'ชื่อโอกาส:',
    'LBL_OPPORTUNITY' => 'โอกาสการขาย:',
    'LBL_NAME' => 'ชื่อของโอกาส',
    'LBL_INVITEE' => 'ผู้ติดต่อ',
    'LBL_CURRENCIES' => 'สกุลเงิน',
    'LBL_LIST_OPPORTUNITY_NAME' => 'ชื่อ',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_AMOUNT' => 'จำนวนเงิน',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'จำนวน',
    'LBL_LIST_DATE_CLOSED' => 'ปิด',
    'LBL_LIST_SALES_STAGE' => 'ขั้นตอนการขาย:',
    'LBL_ACCOUNT_ID' => 'รหัสบัญชี',
    'LBL_CURRENCY_NAME' => 'ชื่อสกุลเงิน',
    'LBL_CURRENCY_SYMBOL' => 'สัญลักษณ์สกุลเงิน',

    'UPDATE' => 'โอกาส - การปรับปรุงสกุลเงิน',
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_AMOUNT' => 'จำนวนเงิน:',
    'LBL_AMOUNT_USDOLLAR' => 'จำนวน:',
    'LBL_CURRENCY' => 'สกุลเงิน:',
    'LBL_DATE_CLOSED' => 'วันปิดที่คาดไว้:',
    'LBL_TYPE' => 'ประเภท:',
    'LBL_CAMPAIGN' => 'แคมเปญ:',
    'LBL_NEXT_STEP' => 'ขั้นตอนต่อไป:',
    'LBL_LEAD_SOURCE' => 'แหล่งของผู้แนะนำ:',
    'LBL_SALES_STAGE' => 'ขั้นตอนการขาย:',
    'LBL_PROBABILITY' => 'ความน่าจะเป็น (%):',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_DUPLICATE' => 'โอกาสซ้ำกันได้',
    'MSG_DUPLICATE' => 'บันทึกโอกาสที่คุณกำลังสร้างอาจซ้ำกับบันทึกโอกาสที่มีอยู่แล้ว บันทึก โอกาส ที่มีชื่อคล้ายคลึงกันอยู่ด้านล่าง.<br>คลิกบันทึกเพื่อสร้างโอกาสใหม่นี้ต่อหรือคลิกยกเลิกเพื่อกลับไปยังโมดูลโดยไม่สร้างโอกาส',
    'LBL_NEW_FORM_TITLE' => 'สร้างเป้าหมายการขาย',
    'LNK_NEW_OPPORTUNITY' => 'สร้างเป้าหมายการขาย',
    'LNK_OPPORTUNITY_LIST' => 'ดูโอกาส',
    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขบันทึกเพื่อลบโอกาส',
    'LBL_TOP_OPPORTUNITIES' => 'โอกาสที่ดีที่สุดของฉัน',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'คุณแน่ใจหรือไม่ว่าต้องการลบโอกาสนี้ออกจากโครงการ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'โอกาสการขาย',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',

    'LBL_LEADS_SUBPANEL_TITLE' => 'ช่องทางการขาย',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'เอกสาร',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'โครงการ',
    'LBL_ASSIGNED_TO_NAME' => 'กำหนดให้:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'โอกาสที่ปิดของฉัน',
    'LBL_TOTAL_OPPORTUNITIES' => 'โอกาสทั้งหมด',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'ปิดโอกาสที่ขาย',
    'LBL_ASSIGNED_TO_ID' => 'ผู้รับผิดชอบ:',
    'LBL_MODIFIED_NAME' => 'แก้ไข โดยผู้ใช้',
    'LBL_CREATED_USER' => 'สร้างผู้ใช้',
    'LBL_MODIFIED_USER' => 'แก้ไขผู้ใช้',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'แคมเปญ',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'โครงการ',
    'LNK_IMPORT_OPPORTUNITIES' => 'นำเข้าโอกาส',
    'LBL_EDITLAYOUT' => 'แก้ไขรูปแบบ' /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'สัญญา',
    'LBL_AOS_QUOTES' => 'ใบเสนอราคา',
);
