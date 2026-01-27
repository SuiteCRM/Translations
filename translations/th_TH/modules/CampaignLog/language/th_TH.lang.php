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
    'LBL_LIST_ID' => 'รายการไอดีลูกค้า',
    'LBL_ID' => 'ไอดี',
    'LBL_TARGET_TRACKER_KEY' => 'คีย์การติดตามเป้าหมาย',
    'LBL_TARGET_ID' => 'ID ของเป้าหมาย',
    'LBL_TARGET_TYPE' => 'ชนิดของเป้าหมาย',
    'LBL_ACTIVITY_TYPE' => 'ชนิดกิจกรรม',
    'LBL_ACTIVITY_DATE' => 'วันกิจกรรม',
    'LBL_RELATED_ID' => 'รหัสที่เกี่ยวข้อง',
    'LBL_RELATED_TYPE' => 'ชนิดที่เกี่ยวข้อง',
    'LBL_DELETED' => 'ลบ',
    'LBL_MODULE_NAME' => 'บันทึกแคมเปญ',
    'LBL_LIST_RECIPIENT_EMAIL' => 'อีเมล์ผู้รับ',
    'LBL_LIST_RECIPIENT_NAME' => 'ชื่อผู้รับ',
    'LBL_ARCHIVED' => 'จัดเก็บ',
    'LBL_HITS' => 'ฮิต',

    'LBL_CAMPAIGN_NAME' => 'ชื่อ:',
    'LBL_CAMPAIGN' => 'แคมเปญ:',
    'LBL_NAME' => 'ชื่อ: ',
    'LBL_INVITEE' => 'ผู้ติดต่อ',
    'LBL_LIST_CAMPAIGN_NAME' => 'แคมเปญ',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LBL_LIST_TYPE' => 'ประเภท',
    'LBL_LIST_END_DATE' => 'วันที่สิ้นสุด',
    'LBL_DATE_ENTERED' => 'วันที่ที่ป้อน',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย: ',
    'LBL_CREATED' => 'สร้างโดย: ',
    'LBL_TEAM' => 'ทีม: ',
    'LBL_ASSIGNED_TO' => 'กำหนดให้: ',
    'LBL_CAMPAIGN_START_DATE' => 'วันที่เริ่มต้น: ',
    'LBL_CAMPAIGN_END_DATE' => 'วันสิ้นสุด: ',
    'LBL_CAMPAIGN_STATUS' => 'สถานะ',
    'LBL_CAMPAIGN_BUDGET' => 'งบประมาณ: ',
    'LBL_CAMPAIGN_EXPECTED_COST' => 'ต้นทุนที่คาดไว้: ',
    'LBL_CAMPAIGN_ACTUAL_COST' => 'ต้นทุนจริง: ',
    'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'รายได้ที่คาดหวัง: ',
    'LBL_CAMPAIGN_TYPE' => 'ประเภท: ',
    'LBL_CAMPAIGN_OBJECTIVE' => 'วัตถุประสงค์: ',
    'LBL_CAMPAIGN_CONTENT' => 'รายละเอียด: ',
    'LBL_CREATED_LEAD' => 'สร้างลูกค้าเป้าหมาย',
    'LBL_CREATED_CONTACT' => 'สร้างบัญชีผู้ติดต่อ',
    'LBL_CREATED_OPPORTUNITY' => 'สร้างเป้าหมายการขาย',
    'LBL_TARGETED_USER' => 'ผู้ใช้เป้าหมาย',
    'LBL_SENT_EMAIL' => 'ส่งอีเมล',
    'LBL_LIST_FORM_TITLE' => 'แคมเปญที่กำหนดเป้าหมาย',
    'LBL_LIST_ACTIVITY_DATE' => 'วันกิจกรรม',
    'LBL_RELATED' => 'ที่เกี่ยวข้อง',
    'LBL_MORE_INFO' => 'ข้อมูลเพิ่มเติม',

    'LBL_CAMPAIGNS' => 'แคมเปญ',
    'LBL_LIST_MARKETING_NAME' => 'Id การตลาด',

    'LBL_MARKETING_ID' => 'Id การตลาด',
    'LBL_RELATED_NAME' => 'ชื่อที่เกี่ยวข้อง',
);
