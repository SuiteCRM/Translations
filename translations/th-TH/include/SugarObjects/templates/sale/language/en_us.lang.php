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
    'LBL_MODULE_NAME' => 'การขาย',
    'LBL_MODULE_TITLE' => 'ขาย: หน้าหลัก',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาการขาย',
    'LBL_LIST_FORM_TITLE' => 'รายการขาย',
    'LBL_NAME' => 'ชื่อ',
    'LBL_LIST_SALE_NAME' => 'ชื่อ',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_AMOUNT' => 'จำนวน',
    'LBL_LIST_DATE_CLOSED' => 'ปิด',
    'LBL_LIST_SALE_STAGE' => 'ขั้นตอนการขาย:',
    'LBL_ACCOUNT_ID' => 'รหัสบัญชี',
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_NAME',
    //END DON'T CONVERT
    'LBL_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า:',
    'LBL_AMOUNT' => 'จำนวน:',
    'LBL_AMOUNT_USDOLLAR' => 'จำนวนเงิน USD:',
    'LBL_CURRENCY' => 'สกุลเงิน:',
    'LBL_DATE_CLOSED' => 'วันปิดที่คาดไว้:',
    'LBL_TYPE' => 'ประเภท:',
    'LBL_CAMPAIGN' => 'แคมเปญ:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ช่องทางการขาย',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'โครงการ',
    'LBL_NEXT_STEP' => 'ขั้นตอนต่อไป:',
    'LBL_LEAD_SOURCE' => 'แหล่งของผู้แนะนำ:',
    'LBL_SALES_STAGE' => 'ขั้นตอนการขาย:',
    'LBL_PROBABILITY' => 'ความน่าจะเป็น (%):',
    'LBL_DESCRIPTION' => 'รายละเอียด:',
    'LBL_DUPLICATE' => 'การขายซ้ำที่เป็นไปได้',
    'MSG_DUPLICATE' => 'บันทึกการขายที่คุณกำลังสร้างอาจซ้ำกับบันทึกการขายที่มีอยู่แล้ว บันทึกการขายพร้อมชื่อที่คล้ายกันแสดงอยู่ด้านล่าง <br> คลิกบันทึกเพื่อดำเนินการสร้างการขายใหม่หรือคลิกยกเลิกเพื่อกลับไปยังโมดูลโดยไม่ต้องสร้างการขาย',
    'LBL_NEW_FORM_TITLE' => 'สร้างขาย',
    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขเรกคอร์ดเพื่อลบการขาย',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'การขาย',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'ผู้ติดต่อ',
    'LBL_ASSIGNED_TO_NAME' => 'ผู้ใช้งาน',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_ASSIGNED_TO_ID' => 'มอบหมายให้กับID',
    'LBL_MODIFIED_NAME' => 'แก้ไข โดยผู้ใช้',
    'LBL_SALE_INFORMATION' => 'ข้อมูลการขาย',
    'LBL_CURRENCY_NAME' => 'ชื่อสกุลเงิน',
    'LBL_CURRENCY_SYMBOL' => 'สัญลักษณ์สกุลเงิน',
    'LBL_EDIT_BUTTON' => 'แก้ไข',
    'LBL_REMOVE' => 'ลบออก',

);
