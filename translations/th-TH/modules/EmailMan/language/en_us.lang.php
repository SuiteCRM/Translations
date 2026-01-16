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
    'LBL_SEND_DATE_TIME' => 'วันที่ส่ง',
    'LBL_IN_QUEUE' => 'อยู่ในระหว่างดำเนินการ',
    'LBL_IN_QUEUE_DATE' => 'วันที่เข้าคิว',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'ใช้เฉพาะค่าจำนวนเต็มเพื่อระบุจำนวนอีเมลที่ส่งต่อชุด',

    'LBL_ATTACHMENT_AUDIT' => ' ถูกส่งไปแล้ว ไม่ได้ทำซ้ำในเครื่องเพื่อประหยัดการใช้งานดิสก์',
    'LBL_CONFIGURE_SETTINGS' => 'กำหนดค่าการตั้งค่าอีเมล',
    'LBL_CUSTOM_LOCATION' => 'กำหนดโดยผู้ใช้',
    'LBL_DEFAULT_LOCATION' => 'ค่าเริ่มต้น',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'ลบบันทึกและเอกสารแนบที่เกี่ยวข้องกับอีเมลที่ถูกลบ',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'เปิดใช้งานพฤติกรรมการเขียนอีเมลแบบเดิม',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'กำหนดค่าจดหมายขาออก',
    'LBL_EMAILS_PER_RUN' => 'จำนวนอีเมลที่ส่งต่อชุด:',
    'LBL_ID' => 'รหัส',
    'LBL_LIST_CAMPAIGN' => 'แคมเปญ',
    'LBL_LIST_FORM_TITLE' => 'คิว',
    'LBL_LIST_FROM_NAME' => 'ชื่อผู้ส่ง',
    'LBL_LIST_IN_QUEUE' => 'อยู่ในระหว่างดำเนินการ',
    'LBL_LIST_MESSAGE_NAME' => 'ข้อความการตลาด',
    'LBL_LIST_RECIPIENT_EMAIL' => 'อีเมล์ผู้รับ',
    'LBL_LIST_RECIPIENT_NAME' => 'ชื่อผู้รับ',
    'LBL_LIST_SEND_ATTEMPTS' => 'พยายามส่ง',
    'LBL_LIST_SEND_DATE_TIME' => 'ส่งเมื่อ',
    'LBL_LIST_USER_NAME' => 'ชื่อผู้ใช้งาน',
    'LBL_LOCATION_ONLY' => 'สถานที่',
    'LBL_LOCATION_TRACK' => 'ตำแหน่งของไฟล์การติดตามแคมเปญ (เช่น campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'เก็บสำเนาข้อความแคมเปญ:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'คุณต้องการเก็บสำเนาที่สมบูรณ์ของ <bold>EACH</bold> อีเมลที่ส่งในทุกแคมเปญ?  <bold>เราแนะนำให้เริ่มต้นเป็นไม่</bold>. การเลือกไม่ จะเก็บเฉพาะเทมเพลตที่ส่งและตัวแปรที่จำเป็นในการสร้างข้อความใหม่',
    'LBL_MAIL_SENDTYPE' => 'ตัวแทนการโอนจดหมาย:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'ใช้การรับรอง SMTP',
    'LBL_MAIL_SMTPPASS' => 'รหัสผ่าน:',
    'LBL_MAIL_SMTPPORT' => 'พอร์ต SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'เซิร์ฟเวอร์อีเมล SMTP:',
    'LBL_MAIL_SMTPUSER' => 'ชื่อผู้ใช้:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'เลือกผู้ให้บริการอีเมลของคุณ',
    'LBL_YAHOOMAIL_SMTPPASS' => 'รหัสผ่านอีเมล Yahoo!',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ไอดีอีเมล Yahoo!',
    'LBL_GMAIL_SMTPPASS' => 'รหัสผ่าน Gmail',
    'LBL_GMAIL_SMTPUSER' => 'ที่อยู่อีเมล Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'รหัสผ่าน Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'ชื่อผู้ใช้ Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'เซิร์ฟเวอร์พอร์ต Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'เซิร์ฟเวอร์ Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'อีเมลไคลเอ็นต์',
    'LBL_MARKETING_ID' => 'Id การตลาด',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'ตั้งค่าอีเมล',
    'LBL_MODULE_TITLE' => 'การจัดการคิวอีเมลขาออก',
    'LBL_NOTIFICATION_ON_DESC' => 'เมื่อเปิดใช้งาน อีเมลจะถูกส่งไปยังผู้ใช้เมื่อมีการกำหนดบันทึกไว้',
    'LBL_NOTIFY_FROMADDRESS' => '"จาก"ที่อยู่:',
    'LBL_NOTIFY_FROMNAME' => '"จาก" ชื่อ:',
    'LBL_NOTIFY_ON' => 'แจ้งเตือนการมอบหมาย',
    'LBL_NOTIFY_TITLE' => 'ตัวเลือกอีเมล',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'ตัวเลือกอีเมล์ขาออก',
    'LBL_RELATED_ID' => 'รหัสที่เกี่ยวข้อง',
    'LBL_RELATED_TYPE' => 'ชนิดที่เกี่ยวข้อง',
    'LBL_SEARCH_FORM_TITLE' => 'ค้นหาคิว',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'ค่าของการตั้งค่า Config.php site_url',
    'TXT_REMOVE_ME_ALT' => 'หากต้องการลบตัวคุณออกจากรายชื่ออีเมลนี้ให้ไปที่',
    'TXT_REMOVE_ME_CLICK' => 'คลิกที่นี่',
    'TXT_REMOVE_ME' => 'เพื่อนำตัวคุณออกจากรายชื่ออีเมลนี้ ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'ตั้งค่าการรักษาความปลอดภัยอีเมล',
    'LBL_SECURITY_DESC' => 'ตรวจสอบสิ่งต่อไปนี้ที่ไม่ควรได้รับอนุญาตผ่าน InboundEmail หรือแสดงในโมดูลอีเมล',
    'LBL_SECURITY_APPLET' => 'แท็ก Applet',
    'LBL_SECURITY_BASE' => 'แท็กพื้นฐาน',
    'LBL_SECURITY_EMBED' => 'ฝังแท็ก',
    'LBL_SECURITY_FORM' => 'ฟอร์มแท็ก',
    'LBL_SECURITY_FRAME' => 'เฟรมแท็ก',
    'LBL_SECURITY_FRAMESET' => 'แท็ก Frameset',
    'LBL_SECURITY_IFRAME' => 'แท็ก iFrame',
    'LBL_SECURITY_IMPORT' => 'นำเข้าแท็ก',
    'LBL_SECURITY_LAYER' => 'แท็กเลเยอร์',
    'LBL_SECURITY_LINK' => 'แท็กลิงค์',
    'LBL_SECURITY_OBJECT' => 'แท็กอ็อบเจ็กต์',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'เลือกการตั้งค่าความปลอดภัยขั้นต่ำของ Outlook ที่ตั้งไว้ (errs ที่ด้านข้างของจอแสดงผลที่ถูกต้อง)',
    'LBL_SECURITY_STYLE' => 'แท็กสไตล์',
    'LBL_SECURITY_TOGGLE_ALL' => 'สลับตัวเลือกทั้งหมด',
    'LBL_SECURITY_XMP' => 'แท็ก Xmp',
    'LBL_YES' => 'ถูกต้อง',
    'LBL_NO' => 'ไม่ใช่',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'พยายามส่ง',
    'LBL_OUTGOING_SECTION_HELP' => 'กำหนดค่าเซิร์ฟเวอร์อีเมลขาออกเริ่มต้นสำหรับการส่งการแจ้งเตือนทางอีเมลรวมถึงการแจ้งเตือนเวิร์กโฟลว์',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'เมื่อเลือกตัวเลือกนี้ผู้ใช้ทุกคนจะสามารถส่งอีเมลโดยใช้ข้อความขาออกเดียวกันได้<br> อีเมลที่ใช้ในการส่งการแจ้งเตือนและการแจ้งเตือนของระบบ หากไม่ได้เลือกตัวเลือก,<br> ผู้ใช้ยังคงสามารถใช้เซิร์ฟเวอร์อีเมลขาออกหลังจากให้ข้อมูลบัญชีของตนเอง',
    'LBL_FROM_ADDRESS_HELP' => 'เมื่อเปิดใช้ชื่อและที่อยู่อีเมลของผู้ใช้\\\'s จะถูกรวมไว้ในช่องจากของอีเมล คุณลักษณะนี้อาจไม่ทำงานกับเซิร์ฟเวอร์ SMTP ที่ไม่อนุญาตให้ส่งจากบัญชีอีเมลอื่นนอกเหนือจากบัญชีเซิร์ฟเวอร์',
    'LBL_HELP' => 'ช่วยเหลือ' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'ดูบัญชีอีเมลขาออก',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
);
