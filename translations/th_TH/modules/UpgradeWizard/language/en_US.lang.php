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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'ไม่สามารถกำหนดกลุ่มได้',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'ไม่สามารถกำหนดเจ้าของได้',
    'ERR_UW_CONFIG_WRITE' => 'เกิดข้อผิดพลาดในการอัปเดต config.php ด้วยข้อมูลเวอร์ชันใหม่',
    'ERR_UW_CONFIG' => 'โปรดกำหนดให้ไฟล์ config.php ของคุณสามารถเขียนได้และโหลดหน้านี้ใหม่',
    'ERR_UW_DIR_NOT_WRITABLE' => 'ไดเรกทอรีไม่สามารถเขียนได้',
    'ERR_UW_FILE_NOT_COPIED' => 'ไฟล์ไม่ได้คัดลอก',
    'ERR_UW_FILE_NOT_DELETED' => 'ปัญหาในการลบแพคเกจ ',
    'ERR_UW_FILE_NOT_READABLE' => 'ไม่สามารถอ่านไฟล์',
    'ERR_UW_FILE_NOT_WRITABLE' => 'ไม่สามารถย้ายหรือเขียนไฟล์ได้',
    'ERR_UW_FLAVOR_2' => 'อัพเกรด Flavor: ',
    'ERR_UW_FLAVOR' => 'ระบบ SuiteCRM Flavor: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => './upgradeWizard.log ไม่สามารถ สร้าง/เขียน ได้โปรดแก้ไขสิทธิ์ในไดเรกทอรี SuiteCRM ของคุณ',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload ตั้งเป็นค่าที่สูงกว่า 1 โปรดเปลี่ยนค่านี้ใน php.ini ของคุณและรีสตาร์ทเว็บเซิร์ฟเวอร์',
    'ERR_UW_NO_FILE_UPLOADED' => 'โปรดระบุไฟล์และลองอีกครั้ง!',
    'ERR_UW_NO_FILES' => 'เกิดข้อผิดพลาด ไม่พบไฟล์เพื่อตรวจสอบ',
    'ERR_UW_NO_MANIFEST' => 'ระบบไม่สามารถดำเนินการได้เนื่องจาก ไม่พบ manifest.php ในไฟล์ zip ',
    'ERR_UW_NO_VIEW' => 'กำหนดมุมมองไม่ถูกต้อง',
    'ERR_UW_NOT_VALID_UPLOAD' => 'ข้อมูลที่อัพโหลดไม่ถูกต้อง',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'ไม่สามารถสร้างไดเร็กทอรีชั่วคราว ตรวจสอบสิทธิ์ของไฟล์',
    'ERR_UW_ONLY_PATCHES' => 'คุณสามารถอัพโหลดได้เฉพาะ Patches ในหน้านี้',
    'ERR_UW_PREFLIGHT_ERRORS' => 'ข้อผิดพลาดที่พบในระหว่างการตรวจสอบ preflight',
    'ERR_UW_UPLOAD_ERR' => 'เกิดข้อผิดพลาดในการอัปโหลดไฟล์โปรดลองอีกครั้ง!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'เวอร์ชันระบบ SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'PHP เวอร์ชั่น: ',
    'ERR_UW_SUITECRM_VERSION' => 'เวอร์ชันระบบ SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'หน้านี้ใช้ไม่ได้ ',
    'LBL_BUTTON_BACK' => '< ก่อนหน้า',
    'LBL_BUTTON_CANCEL' => 'ยกเลิก',
    'LBL_BUTTON_DELETE' => 'ลบแพ็คเกจ',
    'LBL_BUTTON_DONE' => 'เรียบร้อย',
    'LBL_BUTTON_EXIT' => 'ออก',
    'LBL_BUTTON_NEXT' => 'ถัดไป >',
    'LBL_BUTTON_RECHECK' => 'ตรวจสอบอีกครั้ง',
    'LBL_BUTTON_RESTART' => 'เริ่มต้นใหม่',

    'LBL_UPLOAD_UPGRADE' => 'อัปโหลดแพ็คเกจอัพเกรด ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'การสำรองข้อมูลไฟล์',
    'LBL_UW_BACKUP_FILES_EXIST' => 'ไฟล์ที่ได้รับการสำรองข้อมูลจากการปรับรุ่นนี้สามารถพบได้ใน',
    'LBL_UW_BACKUP' => 'สำรองไฟล์',
    'LBL_UW_CANCEL_DESC' => 'ยกเลิกการอัพเกรดแล้ว มีการลบไฟล์ชั่วคราวที่ถูกคัดลอกและไฟล์อัพเกรดใดๆ ที่ถูกอัพโหลด',
    'LBL_UW_CHECK_ALL' => 'เลือกทั้งหมด',
    'LBL_UW_CHECKLIST' => 'ขั้นตอนการอัพเกรด',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'กระบวนการอัพเกรด: รวมไฟล์ด้วยตนเอง',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'โปรดใช้วิธีการอื่นที่คุ้นเคยกับคุณในการรวมไฟล์เหล่านี้ จนกว่าการติดตั้ง SuiteCRM จะเสร็จสมบูรณ์การติดตั้ง SuiteCRM ของคุณจะอยู่ในสถานะที่ไม่แน่นอนและการอัพเกรดไม่สมบูรณ์',
    'LBL_UW_COMPLETE' => 'เสร็จเรียบร้อย',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'ข้อกำหนดการตั้งค่าระบบทั้งหมดที่ต้องการ',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'การตั้งค่า PHP: เวลาในการโทรผ่านการอ้างอิง',
    'LBL_UW_COMPLIANCE_CURL' => 'cURL Module',
    'LBL_UW_COMPLIANCE_IMAP' => 'โมดูล IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'โมดูล MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'พารามิเตอร์ MBStrings mbstring.func_overload',
    'LBL_UW_COMPLIANCE_MEMORY' => 'การตั้งค่า PHP: ขีด จำกัด ของหน่วยความจำ',
    'LBL_UW_COMPLIANCE_STREAM' => 'การตั้งค่า PHP: สตรีม',
    'LBL_UW_COMPLIANCE_DB' => 'เวอร์ชันฐานข้อมูลต่ำสุด',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'ตำแหน่งที่ตั้งของ php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'เวอร์ชัน PHP ต่ำสุด',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'การตั้งค่า PHP: Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'ตรวจพบการตั้งค่า',
    'LBL_UW_COMPLIANCE_XML' => 'แยกวิเคราะห์ XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'สนับสนุน Zip',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'เวอร์ชัน PCRE',
    'LBL_UW_COPIED_FILES_TITLE' => 'คัดลอกไฟล์เรียบร้อยแล้ว',

    'LBL_UW_DB_CHOICE1' => 'ตัวช่วยสร้างการอัพเกรด Runs SQL',
    'LBL_UW_DB_CHOICE2' => 'แบบสอบถาม SQL ด้วยตนเอง',
    'LBL_UW_DB_ISSUES_PERMS' => 'สิทธิพิเศษของฐานข้อมูล',
    'LBL_UW_DB_METHOD' => 'วิธีการปรับปรุงฐานข้อมูล',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'เปลี่ยนแปลงตาราง [table] เพิ่มคอลัมน์ [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'เปลี่ยนแปลงตาราง [table] เปลี่ยนคอลัมน์ [column]',
    'LBL_UW_DB_NO_CREATE' => 'สร้างตาราง [table]',
    'LBL_UW_DB_NO_DELETE' => 'ลบจาก [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'เปลี่ยนแปลงตาราง [table] DROP คอลัมน์ [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'ปล่อยตาราง [table]',
    'LBL_UW_DB_NO_ERRORS' => 'สิทธิพิเศษทั้งหมดที่พร้อมใช้งาน',
    'LBL_UW_DB_NO_INSERT' => 'แทรกลงใน [table]',
    'LBL_UW_DB_NO_SELECT' => 'เลือก [x] จาก [table]',
    'LBL_UW_DB_NO_UPDATE' => 'อัพเดท [table]',
    'LBL_UW_DB_PERMS' => 'สิทธิพิเศษที่จำเป็น',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'มีการติดตั้งแพ็คเกจการอัพเกรดต่อไปนี้:',
    'LBL_UW_END_LOGOUT_PRE' => 'การอัพเกรดเสร็จสมบูรณ์',
    'LBL_UW_END_LOGOUT_PRE2' => 'คลิกเสร็จสิ้นเพื่อออกจากตัวช่วยสร้างการอัพเกรด',
    'LBL_UW_END_LOGOUT' => 'ถ้าคุณวางแผนที่จะใช้แพ็คเกจการอัพเกรดอื่นโดยใช้ตัวช่วยสร้างการอัพเกรดให้ออกจากระบบและล็อกอินก่อนที่จะดำเนินการดังกล่าว',

    'LBL_UW_FILE_DELETED' => ' ถูกลบออกแล้ว <br>',
    'LBL_UW_FILE_GROUP' => 'กลุ่ม',
    'LBL_UW_FILE_ISSUES_PERMS' => 'สิทธิ์ของไฟล์',
    'LBL_UW_FILE_NO_ERRORS' => '<b> ไฟล์ทั้งหมดสามารถเขียนได้ </b>',
    'LBL_UW_FILE_OWNER' => 'เจ้าของ',
    'LBL_UW_FILE_PERMS' => 'สิทธิ์การใช้งาน:',
    'LBL_UW_FILE_UPLOADED' => ' ได้รับการอัพโหลดแล้ว',
    'LBL_UW_FILE' => 'ชื่อไฟล์',
    'LBL_UW_FILES_QUEUED' => 'แพ็คเกจการปรับรุ่นต่อไปนี้พร้อมที่จะติดตั้ง:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>คลิกถัดไปเพื่ออัพโหลดแพ็คเกจอัพเดท. </b>',
    'LBL_UW_FROZEN' => 'อัพโหลดแพ็คเกจก่อนดำเนินการต่อ',
    'LBL_UW_HIDE_DETAILS' => 'ซ่อนรายละเอียด',
    'LBL_UW_IN_PROGRESS' => 'ดำเนินการ',
    'LBL_UW_INCLUDING' => 'รวมไปถึง',
    'LBL_UW_INCOMPLETE' => 'ไม่สมบูรณ์',
    'LBL_UW_MANUAL_MERGE' => 'รวมไฟล์',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'ไม่พบการอัพเกรดที่บันทึกไว้',
    'LBL_UW_NONE' => 'ไม่มี',
    'LBL_UW_OVERWRITE_DESC' => 'ไฟล์ที่มีการเปลี่ยนแปลงทั้งหมดจะถูกเขียนทับรวมถึงการปรับแต่งโค้ดและการเปลี่ยนแปลงเทมเพลตที่คุณทำไว้ คุณแน่ใจหรือไม่ว่าต้องการดำเนินการต่อ',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'สร้างรายการงานสำหรับการรวมด้วยตนเอง?',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'ส่งอีเมลเตือนความจำถึงตัวคุณเองเพื่อคู่มือการรวมด้วยตนเอง?',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'ไฟล์ที่แสดงด้านล่างได้รับการแก้ไขแล้ว ยกเลิกการเลือกรายการที่ต้องใช้การรวมด้วยตนเอง. <i>การเปลี่ยนแปลงโครงร่างที่ตรวจพบจะไม่ได้รับการตรวจสอบโดยอัตโนมัติ ทำเครื่องหมายที่ใดๆ ที่ควรจะเขียนทับ.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'ไม่ต้องมีการรวมรวมไฟล์ด้วยตนเอง',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'ไม่จำเป็น',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'ไฟล์ที่เก็บรักษาโดยอัตโนมัติ:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'การทดสอบ preflight ทั้งหมดได้ผ่าน',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'คลิกถัดไปเพื่อคัดลอกไฟล์ที่อัพเกรดลงในระบบ',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>หมายเหตุ: </b> ขั้นตอนการอัพเกรดที่เหลือทั้งหมดเป็นข้อบังคับและคลิกถัดไปจะทำให้คุณต้องดำเนินการให้เสร็จสิ้น หากคุณไม่ต้องการดำเนินการต่อให้คลิกปุ่มยกเลิก.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'สลับไฟล์ทั้งหมด',

    'LBL_UW_REBUILD_TITLE' => 'สร้างผลลัพธ์ใหม่',
    'LBL_UW_SCHEMA_CHANGE' => 'การเปลี่ยนแปลงแบบแผน',

    'LBL_UW_SHOW_COMPLIANCE' => 'แสดงการตั้งค่าที่ตรวจพบ',
    'LBL_UW_SHOW_DB_PERMS' => 'แสดงสิทธิ์ฐานข้อมูลที่ขาดหายไป',
    'LBL_UW_SHOW_DETAILS' => 'แสดงรายละเอียด',
    'LBL_UW_SHOW_DIFFS' => 'แสดงไฟล์ที่ต้องใช้การรวมด้วยตนเอง',
    'LBL_UW_SHOW_NW_FILES' => 'แสดงไฟล์ที่มีสิทธิ์ไม่ถูกต้อง',
    'LBL_UW_SHOW_SCHEMA' => 'แสดงสคริปต์การเปลี่ยนแปลงเปลี่ยน Schema',
    'LBL_UW_SHOW_SQL_ERRORS' => 'แสดงข้อความติดตามที่ไม่ถูกต้อง',
    'LBL_UW_SHOW' => 'แสดง',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'ไฟล์ที่ถูกข้าม',
    'LBL_UW_SQL_RUN' => 'ตรวจสอบเมื่อ SQL ได้รับการรันด้วยตนเอง',
    'LBL_UW_START_DESC' => 'ตัวช่วยการตั้งค่านี้จะช่วยคุณในการอัพเกรดตัวอย่าง SuiteCRM',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'คลิกถัดไปเพื่อดำเนินการตรวจสอบระบบของคุณเพื่อให้แน่ใจว่าระบบพร้อมสำหรับการอัพเกรด การตรวจสอบนี้รวมถึงสิทธิ์ของไฟล์สิทธิ์ของฐานข้อมูลและการตั้งค่าเซิร์ฟเวอร์',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'ตัวช่วยสร้างการอัพเกรดจะดำเนินต่อกระบวนการอัพเกรด โปรดอัพเกรดต่อ',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'ยินดีต้อนรับสู่ตัวช่วยการตั้งค่าการอัพเกรดใหม่',

    'LBL_UW_TITLE_CANCEL' => 'ยกเลิก',
    'LBL_UW_TITLE_COMMIT' => 'ยืนยันการอัพเกรด',
    'LBL_UW_TITLE_END' => 'การถ่ายทอดข้อมูล',
    'LBL_UW_TITLE_PREFLIGHT' => 'การตรวจสอบ preflight',
    'LBL_UW_TITLE_START' => 'เริ่มต้น',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'ตรวจสอบระบบ',
    'LBL_UW_TITLE_UPLOAD' => 'อัพโหลดแพ็คเกจ',
    'LBL_UW_TITLE' => 'อัพเกรดระบบ',
    'LBL_UW_UNINSTALL' => 'ถอนการติดตั้ง',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'ยอมรับใบอนุญาต',
    'LBL_UW_CONVERT_THE_LICENSE' => 'แปลงใบอนุญาต',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'เริ่มดำเนินการ',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'กำลังตรวจสอบระบบ',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'กำลังตรวจสอบสิทธิ์การใช้งาน',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'กำลังตรวจสอบ Preflight',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'กำลังดำเนินการคัดลอกไฟล์',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'กำลังดำเนินการอัพเกรด',
    'LBL_UW_COMMIT_DESC' => 'คลิกถัดไปเพื่อเรียกใช้สคริปต์การอัพเกรดเพิ่มเติม',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'กำลังอัพเกรดสคริปต์',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'สรุปความคืบหน้าการอัพเกรด',
    'LBL_UPGRADE_IN_PROGRESS' => 'กำลังดำเนินการ     ',
    'LBL_UPGRADE_TIME_ELAPSED' => 'เวลาที่ผ่านไป',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'อัพเกรดการยกเลิกและการล้างข้อมูลในระหว่างดำเนินการ',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'การอัพเกรดอาจใช้เวลาสักครู่',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'กำลังตรวจสอบอัพโหลด',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'อัพโหลดแพ็คเกจการอัพเกรด ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'ตัวช่วยอัพเกรด Drops old 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'คู่มือการอัพเกรด Drop Schema Post',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'วิธี Old Schema Drop',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'แสดง Old Schema ที่อาจลดลง',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'ข้ามข้อความติดตาม',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'ต้องใช้ Php เวอร์ชัน 5 หรือสูงกว่า',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'เวอร์ชันของ PHP ไม่ได้รับการสนับสนุนโดย SuiteCRM. คุณจะต้องติดตั้งเวอร์ชันที่เข้ากันได้กับแอ็พพลิเคชัน SuiteCRM โปรดดูที่ Matrix ความเข้ากันได้ใน Release Notes สำหรับเวอร์ชัน PHP ที่สนับสนุน รุ่นของคุณคือ ',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'เปิดโหมด Php Backward Compatibility แล้ว ตั้งค่า zend.ze1_compatibility_mode เป็น Off เพื่อดำเนินการต่อ',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'คำสั่ง',
    'LBL_ML_CANCEL' => 'ยกเลิก',
    'LBL_ML_COMMIT' => 'มอบหมาย',
    'LBL_ML_DESCRIPTION' => 'รายละเอียด',
    'LBL_ML_INSTALLED' => 'วันที่ติดตั้ง',
    'LBL_ML_NAME' => 'ชื่อ',
    'LBL_ML_PUBLISHED' => 'วันที่เผยแพร่',
    'LBL_ML_TYPE' => 'ประเภท',
    'LBL_ML_UNINSTALLABLE' => 'ไม่สามารถติดตั้งได้',
    'LBL_ML_VERSION' => 'เวอร์ชั่น',
    'LBL_ML_INSTALL' => 'ติดตั้ง',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'รุ่น php ปัจจุบันของคุณคือ: ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'รุ่น php ที่แนะนำคือ ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' หรือสูงกว่า',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'ตัวช่วยการอัพเกรด',
    'LBL_UPLOAD_SUCCESS' => 'อัพโหลดแพ็คเกจสำเร็จแล้ว คลิกถัดไปเพื่อดำเนินการเช็คขั้นสุดท้าย',
    'LBL_UW_TITLE_LAYOUTS' => 'ยืนยันการจัดหน้า',
    'LBL_LAYOUT_MODULE_TITLE' => 'เค้าโครง',
    'LBL_LAYOUT_MERGE_DESC' => 'มีฟิลด์ใหม่ที่พร้อมใช้งานซึ่งได้รับการเพิ่มในส่วนของการอัพเกรดนี้แล้วและสามารถเพิ่มลงในรูปแบบโมดูลที่มีอยู่โดยอัตโนมัติ หากต้องการเรียนรู้เพิ่มเติมเกี่ยวกับฟิลด์ใหม่โปรดดูที่หมายเหตุรุ่นสำหรับเวอร์ชันที่คุณกำลังอัพเกรด.<br><br>หากคุณไม่ต้องการเพิ่มฟิลด์ใหม่โปรดยกเลิกการเลือกโมดูลและรูปแบบที่กำหนดเองของคุณจะยังคงเดิม ช่องจะพร้อมใช้งานในสตูดิโอหลังจากการอัพเกรด. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'คลิกถัดไปเพื่อยืนยันการเปลี่ยนแปลงและเพื่อสิ้นสุดการอัพเกรด',
    'LBL_LAYOUT_MERGE_TITLE2' => 'คลิกถัดไปเพื่อเสร็จสิ้นการอัพเกรด',
    'LBL_UW_CONFIRM_LAYOUTS' => 'ยืนยันการจัดหน้า',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'ยืนยันผลลัพธ์ของเค้าโครง',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'เค้าโครงต่อไปนี้ถูกรวมเข้าด้วยกันเรียบร้อยแล้ว:',
    'LBL_SELECT_FILE' => 'เลือกไฟล์:',
    'ERROR_VERSION_INCOMPATIBLE' => 'ไฟล์ที่อัปโหลดไม่สามารถใช้งานร่วมกับ SuiteCRM เวอร์ชันนี้ได้: ',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'ไฟล์ที่อัพโหลดไม่สามารถใช้งานร่วมกับ PHP เวอร์ชันนี้ได้: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'ไฟล์ที่อัปโหลดไม่สามารถใช้งานร่วมกับ SuiteCRM เวอร์ชันนี้ได้: ',
    'LBL_LANGPACKS' => 'ชุดภาษา' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'ตัวโหลดโมดูล' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'อัพเดทแพทช์' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'ธีม' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'ขั้นตอนการทำงาน' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'อัพเกรด' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'กำลังดำเนินการ' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'เวอร์ชันที่ใช้งานร่วมกันไม่ได้ถูกตั้งค่าไว้ในไฟล์ Manifest',
    'LBL_UPGRD_CSTM_CHK' => 'กระบวนการอัพเกรดจะอัพเดทไฟล์บางไฟล์ แต่ไฟล์เหล่านี้จะมีอยู่ใน โฟลเดอร์/กำหนดเอง โปรดตรวจทานการเปลี่ยนแปลงก่อนดำเนินการต่อ:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'ไฟล์ที่อัพโหลดเกิน upload_max_filesize directive in php.ini. คำสั่งใน php.ini',
        2 => 'ไฟล์อัปโหลดเกิน MAX_FILE_SIZE คำสั่งที่ระบุไว้ใน HTML form.',
        3 => 'อัปโหลดไฟล์เพียงบางส่วนเท่านั้น',
        4 => 'ไม่มีการอัปโหลดไฟล์.',
        5 => 'ข้อผิดพลาดที่ไม่รู้จัก',
        6 => 'ไม่มีโฟลเดอร์ชั่วคราว',
        7 => 'ล้มเหลวในการเขียนไฟล์ลงดิสก์',
        8 => 'การอัพโหลดไฟล์ถูกหยุดโดยส่วนขยาย',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
