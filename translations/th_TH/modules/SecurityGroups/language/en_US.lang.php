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
    'LBL_ALL_MODULES' => 'ทั้งหมด',//rost fix
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
    'LBL_NONINHERITABLE' => 'ไม่สืบทอด',
    'LBL_LIST_NONINHERITABLE' => 'ไม่สืบทอด',
    'LBL_NAME' => 'ชื่อ',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_FORM_TITLE' => 'กลุ่มความปลอดภัย',
    'LBL_MODULE_NAME' => 'การจัดการกลุ่มของ Security Suite',
    'LBL_MODULE_TITLE' => 'การจัดการกลุ่มของ Security Suite',
    'LNK_NEW_RECORD' => 'สร้างกลุ่มความปลอดภัย',
    'LNK_LIST' => 'มุมมองรายการ',
    'LBL_SEARCH_FORM_TITLE' => 'การจัดการกลุ่มการรักษาความปลอดภัยในการค้นหา',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'การจัดการกลุ่มของ Security Suite',
    'LBL_USERS' => 'ผู้ใช้งาน',
    'LBL_USERS_SUBPANEL_TITLE' => 'ผู้ใช้งาน',
    'LBL_ROLES_SUBPANEL_TITLE' => 'บทบาท',
    'LBL_ROLES' => 'บทบาท',

    'LBL_CONFIGURE_SETTINGS' => 'กำหนดค่า',
    'LBL_ADDITIVE' => 'สิทธิเพิ่มเติม',
    'LBL_ADDITIVE_DESC' => "ผู้ใช้ได้สิทธิมากที่สุดของบทบาททั้งหมดที่กำหนดให้กับผู้ใช้หรือกลุ่มของผู้ใช้(s)",
    'LBL_STRICT_RIGHTS' => 'สิทธิที่เข้มงวด',
    'LBL_STRICT_RIGHTS_DESC' => "หากผู้ใช้เป็นสมาชิกของหลายกลุ่มจะมีการใช้เฉพาะสิทธิ์ที่เกี่ยวข้องจากกลุ่มที่กำหนดให้กับบันทึกปัจจุบันเท่านั้น",
    'LBL_USER_ROLE_PRECEDENCE' => 'ลำดับความสำคัญของบทบาทผู้ใช้',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'ถ้าบทบาทใดๆ ถูกกำหนดให้กับผู้ใช้โดยตรงบทบาทนี้ควรมีบทบาทเหนือกว่าบทบาทของกลุ่มใด ๆ',
    'LBL_INHERIT_TITLE' => 'กฎการสืบทอดกลุ่ม',
    'LBL_INHERIT_CREATOR' => 'สืบทอดมาจากการสร้างโดยผู้ใช้',
    'LBL_INHERIT_CREATOR_DESC' => 'บันทึกจะสืบทอดกลุ่มทั้งหมดที่กำหนดให้กับผู้ใช้ที่สร้างขึ้น',
    'LBL_INHERIT_PARENT' => 'สืบทอดจากประวัติหลัก',
    'LBL_INHERIT_PARENT_DESC' => 'เช่น. หากกรณีถูกสร้างขึ้นสำหรับผู้ติดต่อกรณีจะสืบทอดกลุ่มที่เกี่ยวข้องกับผู้ติดต่อ',
    'LBL_USER_POPUP' => 'ป๊อปอัพกลุ่มผู้ใช้ใหม่',
    'LBL_USER_POPUP_DESC' => 'เมื่อสร้างผู้ใช้รายใหม่จะแสดงป๊อปอัพ การรักษาความปลอดภัยกลุ่ม เพื่อกำหนดผู้ใช้ให้กับกลุ่ม(s).',
    'LBL_INHERIT_ASSIGNED' => 'สืบทอดจากกำหนดให้กับผู้ใช้',
    'LBL_INHERIT_ASSIGNED_DESC' => 'บันทึกจะสืบทอดกลุ่มทั้งหมดของผู้ใช้ที่กำหนดให้กับบันทึก กลุ่มอื่นๆ ที่กำหนดให้บันทึกจะไม่ถูกนำออก',
    'LBL_POPUP_SELECT' => 'เลือกใช้ กลุ่มผู้สร้าง',
    'LBL_POPUP_SELECT_DESC' => 'เมื่อสร้างบันทึกโดยผู้ใช้ในกลุ่มมากกว่าหนึ่งกลุ่มจะแสดงแผงการเลือกกลุ่มในหน้าจอสร้าง มิฉะนั้นจะรับช่วงหนึ่งกลุ่ม',
    'LBL_FILTER_USER_LIST' => 'กรองรายชื่อผู้ใช้',
    'LBL_FILTER_USER_LIST_DESC' => "ผู้ใช้ที่ไม่ใช่ผู้ดูแลระบบสามารถกำหนดให้กับผู้ใช้ในกลุ่มเดียวกันเท่านั้น(s)",

    'LBL_DEFAULT_GROUP_TITLE' => 'กลุ่มเริ่มต้นสำหรับบันทึกใหม่',
    'LBL_ADD_BUTTON_LABEL' => 'เพิ่ม',
    'LBL_REMOVE_BUTTON_LABEL' => 'ลบออก',
    'LBL_GROUP' => 'กลุ่ม:',
    'LBL_MODULE' => 'โมดูล:',

    'LBL_MASS_ASSIGN' => 'กลุ่มรักษาความปลอดภัย: กำหนดเป็นกลุ่ม',
    'LBL_ASSIGN' => 'กำหนด',
    'LBL_REMOVE' => 'ลบออก',
    'LBL_ASSIGN_CONFIRM' => 'คุณแน่ใจหรือไม่ว่าต้องการเพิ่มกลุ่มนี้ใน ',
    'LBL_REMOVE_CONFIRM' => 'คุณแน่ใจหรือไม่ว่าต้องการลบกลุ่มนี้ออกจากโฟลเดอร์ ',
    'LBL_CONFIRM_END' => ' เรกคอร์ดที่เลือก',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'การรักษาความปลอดภัยกลุ่ม / ผู้ใช้',
    'LBL_USER_NAME' => 'ชื่อผู้ใช้งาน',
    'LBL_SECURITYGROUP_NAME' => 'ชื่อการรักษาความปลอดภัยกลุ่ม',
    'LBL_HOMEPAGE_TITLE' => 'กลุ่มข้อความ',
    'LBL_TITLE' => 'ตำแหน่ง',
    'LBL_ROWS' => 'แถว',
    'LBL_POST' => 'โพสต์',
    'LBL_SELECT_GROUP_ERROR' => 'โปรดเลือกกลุ่มและลองอีกครั้ง',

    'LBL_GROUP_SELECT' => 'เลือกกลุ่มที่ควรเข้าถึงบันทึกนี้',
    'LBL_ERROR_DUPLICATE' => 'เนื่องจากมีการตรวจพบซ้ำกันที่เป็นไปได้ที่เกิดขึ้นโดย SuiteCRM คุณจะต้องเพิ่มกลุ่มรักษาความปลอดภัยในบันทึกที่สร้างขึ้นใหม่ด้วยตนเอง',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Update failed because the search filter was modified. Please try again.',

    'LBL_INBOUND_EMAIL' => 'บัญชีอีเมลขาเข้า',
    'LBL_INBOUND_EMAIL_DESC' => 'อนุญาตเฉพาะการเข้าถึงบัญชีอีเมลหากผู้ใช้อยู่ในกลุ่มที่กำหนดให้กับบัญชีอีเมล',
    'LBL_PRIMARY_GROUP' => 'กลุ่มหลัก',
    'LBL_CHECKMARK' => 'เครื่องหมายถูก',

);
