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
    'ERR_NO_OPPS' => 'โปรดสร้างโอกาสเพื่อดูกราฟโอกาส',
    'LBL_ALL_OPPORTUNITIES' => 'จำนวนของโอกาสทั้งหมดคือ',
    'LBL_CHART_TYPE' => 'ประเภทแผนภูมิ:',
    'LBL_CREATED_ON' => 'ทำงานล่าสุดเมื่อ ',
    'LBL_CLOSE_DATE_START' => 'คาดว่าจะปิดวันที่ - จาก:',
    'LBL_CLOSE_DATE_END' => 'คาดว่าจะปิดวันที่ - ถึง:',
    'LBL_DATE_END' => 'วันที่สิ้นสุด:',
    'LBL_DATE_RANGE_TO' => '-',
    'LBL_DATE_RANGE' => 'ช่วงวันที่คือ',
    'LBL_DATE_START' => 'วันที่เริ่มต้น:',
    'LBL_EDIT' => 'แก้ไข',
    'LBL_LEAD_SOURCE_BY_OUTCOME_DESC' => 'แสดงจำนวนโอกาสที่สะสมโดยแหล่งที่มาของผลการค้นหาที่เลือกโดยผลลัพธ์สำหรับผู้ใช้ที่เลือก ผลลัพธ์จะขึ้นอยู่กับว่าระยะเวลาการขายถูกปิดรางวัลปิดหายหรือมูลค่าอื่นใดหรือไม่',
    'LBL_LEAD_SOURCE_BY_OUTCOME' => 'โอกาสทั้งหมดตามแหล่งที่มาของโอกาสในการขาย',
    'LBL_LEAD_SOURCE_FORM_DESC' => 'แสดงจำนวนโอกาสที่สะสมโดยแหล่งที่มาของการเลือกที่เลือกสำหรับผู้ใช้ที่เลือก',
    'LBL_LEAD_SOURCE_FORM_TITLE' => 'โอกาสทั้งหมดตามแหล่งที่มาของโอกาสในการขาย',
    'LBL_LEAD_SOURCE_OTHER' => 'อื่นๆ',
    'LBL_LEAD_SOURCES' => 'แหล่งของผู้แนะนำ:',
    'LBL_MODULE_NAME' => 'แดชบอร์ด',
    'LBL_MODULE_TITLE' => 'แดชบอร์ด: หน้าแรก',
    'LBL_MONTH_BY_OUTCOME_DESC' => 'แสดงจำนวนโอกาสที่สะสมตามเดือนโดยผลลัพธ์สำหรับผู้ใช้ที่เลือกซึ่งวันที่ปิดคาดว่าจะอยู่ในช่วงวันที่ที่ระบุ ผลลัพธ์จะขึ้นอยู่กับว่าระยะเวลาการขายถูกปิดรางวัลปิดหายหรือมูลค่าอื่นใดหรือไม่',
    'LBL_OPP_SIZE' => 'ขนาดโอกาสใน',
    'LBL_OPP_THOUSANDS' => 'K',
    'LBL_OPPS_IN_LEAD_SOURCE' => 'โอกาสที่แหล่งนำคือ',
    'LBL_OPPS_IN_STAGE' => ' ที่ระยะเวลาการขายคือ',
    'LBL_OPPS_OUTCOME' => ' ผลที่ได้คือ',
    'LBL_OPPS_WORTH' => 'โอกาสที่คุ้มค่า',
    'LBL_PIPELINE_FORM_TITLE_DESC' => 'แสดงยอดสะสมตามระยะเวลาการขายที่เลือกสำหรับโอกาสที่วันที่ปิดคาดว่าจะอยู่ในช่วงวันที่ที่ระบุ',
    'LBL_REFRESH' => 'รีเฟรช',
    'LBL_ROLLOVER_DETAILS' => 'วางลูกกลิ้งเพื่อดูรายละเอียด',
    'LBL_ROLLOVER_WEDGE_DETAILS' => 'วางเมาส์ไว้เพื่อดูรายละเอียด',
    'LBL_SALES_STAGE_FORM_DESC' => 'แสดงจำนวนโอกาสที่สะสมโดยระยะเวลาการขายที่เลือกไว้สำหรับผู้ใช้ที่เลือกซึ่งวันที่ปิดคาดว่าจะอยู่ในช่วงวันที่ที่ระบุ',
    'LBL_SALES_STAGE_FORM_TITLE' => 'เส้นทางการขายตามระยะเวลาการขาย',
    'LBL_SALES_STAGES' => 'ระยะการขาย:',
    'LBL_TOTAL_PIPELINE' => 'จำนวนท่อทั้งหมดคือ ',
    'LBL_USERS' => 'Users:',
    'LBL_YEAR_BY_OUTCOME' => 'ท่อตามเดือนโดยผลลัพธ์',
    'LBL_YEAR' => 'ปี:',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'LNK_NEW_CALL' => 'ข้อมูลการโทร',
    'LNK_NEW_CASE' => 'สร้างเคส',
    'LNK_NEW_CONTACT' => 'สร้างบัญชีผู้ติดต่อ',
    'LNK_NEW_LEAD' => 'สร้างลูกค้าเป้าหมาย',
    'LNK_NEW_MEETING' => 'จัดตารางการประชุม',
    'LNK_NEW_NOTE' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LNK_NEW_OPPORTUNITY' => 'สร้างเป้าหมายการขาย',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'NTC_NO_LEGENDS' => 'ไม่มี',

    'LBL_TITLE' => 'ชื่อเรื่อง: ',
    'LBL_MY_MODULES_USED_SIZE' => 'จำนวนการเข้าถึง',

    'LBL_CHART_PIPELINE_BY_SALES_STAGE' => 'Pipeline by Sales Stage',
    'LBL_CHART_LEAD_SOURCE_BY_OUTCOME' => 'แหล่งที่มาตามผล',
    'LBL_CHART_OUTCOME_BY_MONTH' => 'ผลลัพธ์ตามเดือน',
    'LBL_CHART_PIPELINE_BY_LEAD_SOURCE' => 'ท่อโดย Lead Source',
    'LBL_CHART_MY_PIPELINE_BY_SALES_STAGE' => 'เส้นทางการขายของฉันตามระยะเวลาการขาย',
    'LBL_CHART_MY_MODULES_USED_30_DAYS' => 'ใช้โมดูลของฉัน (30 วันล่าสุด)',
);
