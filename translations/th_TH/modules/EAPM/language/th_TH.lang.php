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
    'LBL_ASSIGNED_TO_NAME' => 'ผู้ใช้ SuiteCRM',
    'LBL_ID' => 'ไอดี',
    'LBL_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไข',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_DESCRIPTION' => 'รายละเอียด',
    'LBL_DELETED' => 'ลบ',
    'LBL_NAME' => 'ชื่อผู้ใช้แอพ',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_FORM_TITLE' => 'รายชื่อบัญชีภายนอก',
    'LBL_MODULE_NAME' => 'บัญชีภายนอก',
    'LBL_MODULE_TITLE' => 'บัญชีภายนอก',
    'LBL_HOMEPAGE_TITLE' => 'บัญชีภายนอกของฉัน',
    'LNK_NEW_RECORD' => 'สร้างบัญชีภายนอก',
    'LNK_LIST' => 'ดูภายนอกบัญชี',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาแหล่งข้อมูลภายนอก',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ดูประวัติ',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_NEW_FORM_TITLE' => 'บัญชีภายนอกใหม่',
    'LBL_PASSWORD' => 'รหัสผ่านแอพ',
    'LBL_USER_NAME' => 'ชื่อผู้ใช้แอพ',
    'LBL_URL' => 'URL',
    'LBL_APPLICATION' => 'แอพลิเคชัน',
    'LBL_API_DATA' => 'ข้อมูล API',
    'LBL_API_CONSKEY' => 'คีย์ผู้บริโภค',
    'LBL_API_CONSSECRET' => 'ความลับของผู้บริโภค',
    'LBL_API_OAUTHTOKEN' => 'OAuth Token',
    'LBL_AUTH_UNSUPPORTED' => "วิธีการตรวจสอบนี้ไม่ได้รับการสนับสนุนโดยแอปพลิเคชัน",
    'LBL_AUTH_ERROR' => 'ความพยายามในการเชื่อมต่อกับบัญชีนี้ล้มเหลว',
    'LBL_VALIDATED' => 'เชื่อมต่อแล้ว',
    'LBL_ACTIVE' => 'เปิดใช้งาน',
    'LBL_OAUTH_NAME' => '%s',
    'LBL_CONNECT_BUTTON_TITLE' => 'เชื่อมต่อ',
    'LBL_NOTE' => 'โปรดทราบ',
    'LBL_CONNECTED' => 'เชื่อมต่อแล้ว',

    'LBL_ERR_NO_AUTHINFO' => 'ไม่มีข้อมูลการตรวจสอบสิทธิ์สำหรับบัญชีนี้',
    'LBL_ERR_NO_TOKEN' => 'ไม่มีโทเค็นการเข้าสู่ระบบที่ถูกต้องสำหรับบัญชีนี้',

    'LBL_ERR_FAILED_QUICKCHECK' => 'คุณยังไม่ได้เชื่อมต่อกับบัญชีของคุณ {0} คลิกตกลงเพื่อเข้าสู่บัญชีของคุณและเปิดใช้งานการเชื่อมต่อใหม่',

    'LBL_CLICK_TO_EDIT' => 'คลิกเพื่อแก้ไข',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Reauthenticate',
    'LBL_APPLICATION_FOUND_NOTICE' => 'บัญชีสำหรับแอปพลิเคชันนี้มีอยู่แล้ว เราได้กู้คืนบัญชีเดิมแล้ว',
    'LBL_OMIT_URL' => '(ยกเว้น http: // หรือ https: //)',
    'LBL_OAUTH_SAVE_NOTICE' => 'คลิก <b>เชื่อมต่อ</b> เพื่อนำไปยังหน้าเว็บเพื่อให้ข้อมูลบัญชีของคุณและอนุญาตให้เข้าถึงบัญชีโดย SuiteCRM หลังจากเชื่อมต่อคุณจะถูกนำทางกลับไปที่ SuiteCRM',
    'LBL_BASIC_SAVE_NOTICE' => 'คลิก <b>เชื่อมต่อ</b> เพื่อเชื่อมต่อบัญชีนี้กับ SuiteCRM',
    'LBL_ERR_POPUPS_DISABLED' => 'โปรดเปิดใช้หน้าต่างป๊อปอัปของเบราว์เซอร์หรือเพิ่มข้อยกเว้นสำหรับเว็บไซต์ "{0}" ในรายการข้อยกเว้นเพื่อเชื่อมต่อ',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
