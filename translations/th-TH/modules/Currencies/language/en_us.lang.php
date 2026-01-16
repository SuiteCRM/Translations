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
    'LBL_MODULE_NAME' => 'สกุลเงิน',
    'LBL_LIST_FORM_TITLE' => 'สกุลเงิน',
    'LBL_CURRENCY' => 'สกุลเงิน',
    'LBL_ADD' => 'เพิ่ม',
    'LBL_MERGE' => 'รวมรายการที่ซ้ำ',
    'LBL_MERGE_TXT' => 'โปรดเลือกสกุลเงินที่คุณต้องการจับคู่กับสกุลเงินที่เลือก การดำเนินการนี้จะลบสกุลเงินทั้งหมดที่มีเครื่องหมายถูกและกำหนดมูลค่าที่เกี่ยวข้องกับสกุลเงินนั้นใหม่',
    'LBL_US_DOLLAR' => 'ดอลลาร์สหรัฐฯ',
    'LBL_DELETE' => 'ลบ',
    'LBL_LIST_SYMBOL' => 'สัญลักษณ์สกุลเงิน',
    'LBL_LIST_NAME' => 'ชื่อสกุลเงิน',
    'LBL_LIST_ISO4217' => 'รหัส ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'ป้อนรหัส ISO 4217 แบบสามตัวที่กำหนดชื่อสกุลเงินและสัญลักษณ์สกุลเงิน',
    'LBL_UPDATE' => 'ปรับปรุง',
    'LBL_LIST_RATE' => 'อัตราแลกแปลี่ยน',
    'LBL_LIST_RATE_HELP' => 'อัตราแลกแปลี่ยนของ 0.5 สำหรับยูโรหมายความว่า 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'สถานะ',
    'LNK_NEW_CONTACT' => 'ผู้ติดต่อใหม่',
    'LNK_NEW_ACCOUNT' => 'บัญชีลูกค้าใหม่',
    'LNK_NEW_OPPORTUNITY' => 'โอกาสใหม่',
    'LNK_NEW_CASE' => 'กรณีใหม่',
    'LNK_NEW_NOTE' => 'สร้างบันทึกย่อหรือเอกสารแนบ',
    'LNK_NEW_CALL' => 'โทรใหม่',
    'LNK_NEW_EMAIL' => 'อีเมลใหม่',
    'LNK_NEW_MEETING' => 'ประชุมใหม่',
    'LNK_NEW_TASK' => 'สร้างงาน',
    'NTC_DELETE_CONFIRMATION' => 'คุณแน่ใจหรือไม่ว่าต้องการลบบันทึกนี้ บันทึกใดๆที่ใช้สกุลเงินนี้จะถูกแปลงเป็นสกุลเงินเริ่มต้นของระบบเมื่อมีการเข้าถึง การตั้งค่าสถานะเป็นไม่ทำงานอาจดีกว่า',
    'LBL_BELOW_MIN' => 'อัตราแลกแปลี่ยนต้องอยู่สูงกว่า 0',
    'currency_status_dom' =>
        array(
            'Active' => 'เปิดใช้งาน',
            'Inactive' => 'ปิดใช้งาน',
        ),
    'LBL_CREATED_BY' => 'สร้างโดย',
    'LBL_EDIT_LAYOUT' => 'แก้ไขรูปแบบ' /*for 508 compliance fix*/,
);
