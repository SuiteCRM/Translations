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
    'LBL_STEP_1' => 'ขั้นตอนที่ 1: เลือกโมดูลและเทมเพลต',
    'LBL_MAILMERGE_MODULE' => 'เลือกโมดูล: ',
    'LBL_MAILMERGE_SELECTED_MODULE' => 'โมดูลที่เลือก: ',
    'LBL_MAILMERGE_TEMPLATES' => 'เลือกเทมเพลต: ',
    'LBL_STEP_4' => 'ตรวจทานและดำเนินการ',
    'LBL_SELECTED_MODULE' => 'โมดูลที่เลือก: ',
    'LBL_SELECTED_TEMPLATE' => 'เทมเพลตที่เลือก: ',
    'LBL_SELECTED_ITEMS' => 'รายการที่เลือก ',
    'LBL_STEP_5' => 'การรวมจดหมายเสร็จสมบูรณ์แล้ว',
    'LBL_MERGED_FILE' => 'ไฟล์ที่รวม: ',
    'LNK_NEW_MAILMERGE' => 'เริ่มการรวมจดหมาย',
    'LNK_UPLOAD_TEMPLATE' => 'อัพโหลดเทมเพลต',
    'LBL_DOC_NAME' => 'ชื่อเอกสาร:',
    'LBL_FILENAME' => 'ชื่อไฟล์:',
    'LBL_DOC_VERSION' => 'การปรับปรุง:',
    'LBL_DOC_DESCRIPTION' => 'รายละเอียด:',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_FINISH' => 'เริ่มการรวม',
    'LBL_NEXT' => 'ถัดไป >',
    'LBL_BACK' => '< ก่อนหน้า',
    'LBL_START' => 'คลิกที่นี่เพื่อดำเนินการต่อ',
    'LBL_CONTAINS_CONTACT_INFO' => 'เทมเพลตที่เลือกมีข้อมูลที่เกี่ยวข้อง ',
    'LBL_ADDIN_NOTICE' => 'ต้องติดตั้งส่วนขยายจดหมาย SuiteCRM ไว้ใน Microsoft Word',
    'LBL_REMOVE' => 'ลบรายการ(s)' /*for 508 compliance fix*/,
    'LBL_ADD' => 'เพิ่มรายการ(s)' /*for 508 compliance fix*/,
    'LBL_BROWSER_REQUIREMENT' => 'ต้องใช้ IE 6.0 หรือสูงกว่าสำหรับ Windows',
    'LBL_FORM_SELECT_TEMPLATE' => 'กรุณาเลือกเทมเพลต',
    'LBL_SELECT_ONE' => 'โปรดเลือกอย่างน้อยหนึ่งรายการ',
    'LBL_AVAILABLE' => 'พร้อมใช้งาน',
    'LBL_SELECTED' => 'เลือก',
    'LBL_RELATED_INFO_SELECTION' => 'ใช้ตัวเลือกด้านล่างเพื่อระบุข้อมูลที่เกี่ยวข้องที่คุณต้องการจะแสดงในเอกสารที่รวมของคุณ ข้ามขั้นตอนนี้หากเอกสารเทมเพลตของคุณไม่มีข้อมูลที่เกี่ยวข้อง',

);
