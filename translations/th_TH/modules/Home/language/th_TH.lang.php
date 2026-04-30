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
    'LBL_MODULE_NAME' => 'Home',
    'LBL_NEW_FORM_TITLE' => 'ผู้ติดต่อใหม่',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'อีเมล:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'การดำเนินการของฉัน',
    'LBL_PIPELINE_FORM_TITLE' => 'เส้นทางการขายตามระยะเวลาการขาย',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'เส้นทางการขายตามระยะเวลาการขาย',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_ACCOUNT' => 'สร้างบัญชี ลูกค้า',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => 'Compose Email',
    'LBL_NO_ACCESS' => 'คุณไม่มีสิทธิ์เข้าถึงพื้นที่นี้ ติดต่อผู้ดูแลเว็บไซต์ของคุณเพื่อขอรับสิทธิ์การเข้าถึง',
    'LBL_NO_RESULTS_IN_MODULE' => '-- ไม่มีผลลัพธ์ --',
    'LBL_NO_RESULTS' => '<h2>ไม่พบผลลัพธ์ โปรดค้นหาอีกครั้ง.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>คำแนะนำในการค้นหา:</h3><ul><li>ตรวจสอบให้แน่ใจว่าคุณมีหมวดหมู่ที่เหมาะสมที่เลือกข้างต้น.</li><li>ขยายเกณฑ์การค้นหาของคุณ.</li><li>หากคุณยังไม่พบผลลัพธ์ใดๆ ให้ลองใช้ตัวเลือกการค้นหาขั้นสูง.</li></ul>',

    'LBL_ADD_DASHLETS' => 'เพิ่ม SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'ฟีดข่าว',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'วันพรุ่งนี้',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_LAST_7_DAYS' => 'Last 7 Days',
    'LBL_NEXT_7_DAYS' => 'Next 7 Days',
    'LBL_LAST_MONTH' => 'Last Month',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_LAST_YEAR' => 'Last Year',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_LAST_30_DAYS' => 'Last 30 Days',
    'LBL_NEXT_30_DAYS' => 'Next 30 Days',
    'LBL_THIS_MONTH' => 'This Month',
    'LBL_THIS_YEAR' => 'This Year',

    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'แผนภูมิ',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Search Results',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'มุมมองโมดูล',
        'Portal' => 'พอร์ทัล',
        'Charts' => 'แผนภูมิ',
        'Tools' => 'Tools',
        'Miscellaneous' => 'เบ็ดเตล็ด'
    ),
    'LBL_ADDING_DASHLET' => 'เพิ่ม SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'กำลังลบ SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'ลบ SuiteCRM Dashlet',
    'LBL_DASHLET_REFRESH' => 'รีเฟรช SuiteCRM Dashlet',
    'LBL_DASHLET_EDIT' => 'แก้ไข SuiteCRM Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'My CRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'ค้นหา',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'แผนภูมิพื้นฐาน',

    'LBL_DASHLET_SEARCH' => 'ค้นหา SuiteCRM Dashlet',

//ABOUT page
    'LBL_VERSION' => 'เวอร์ชั่น',
    'LBL_BUILD' => 'สร้าง',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - ผู้ให้บริการ CE framework',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'ระบุตำแหน่งเว็บไซต์ไม่ถูกต้อง',
    'LBL_DASHLET_OPT_URL' => 'ตำแหน่งที่ตั้งเว็บไซต์',
    'LBL_DASHLET_OPT_HEIGHT' => 'ความสูง Dashlet (เป็นพิกเซล)',
    'LBL_DASHLET_SUITE_NEWS' => 'ข่าว SuiteCRM',
    'LBL_DASHLET_DISCOVER_SUITE' => 'ค้นพบ SuiteCRM',
    'LBL_BASIC_SEARCH' => 'ตัวกรองด่วน' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'ตัวกรองขั้นสูง' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'ไอคอนหน้าแรก',
    'LBL_TOUR_HOME_DESCRIPTION' => 'รีบกลับไปที่แดชบอร์ดหน้าแรกได้ง่ายๆเพียงคลิกเดียว',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'โมดูลที่สำคัญทั้งหมดของคุณอยู่ที่นี่',
    'LBL_TOUR_MORE' => 'โมดูเพิ่มเติม',
    'LBL_TOUR_MORE_DESCRIPTION' => 'ส่วนที่เหลือของโมดูลอยู่ที่นี่',
    'LBL_TOUR_SEARCH' => 'ค้นหาข้อความแบบเต็ม',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'การค้นหามีทั้งดีกว่ามาก',
    'LBL_TOUR_NOTIFICATIONS' => 'การแจ้งเตือน',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'การแจ้งเตือนแอ็พพลิเคชัน SuiteCRM จะไปที่นี่',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'เข้าถึงโปรไฟล์การตั้งค่าและออกจากระบบ',
    'LBL_TOUR_QUICKCREATE' => 'สร้างด่วน',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'สร้างบันทึกได้อย่างรวดเร็วโดยไม่สูญเสียตำแหน่งของคุณ',
    'LBL_TOUR_FOOTER' => 'ยุบส่วนท้าย',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'ขยายและยุบส่วนท้ายได้อย่างง่ายดาย',
    'LBL_TOUR_CUSTOM' => 'แอพกำหนดเอง',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'การผสานรวมที่กำหนดเองจะไปที่นี่',
    'LBL_TOUR_BRAND' => 'แบรนด์ของคุณ',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'โลโก้ของคุณอยู่ที่นี่ คุณสามารถเลื่อนเมาส์ไปดูข้อมูลเพิ่มเติมได้',
    'LBL_TOUR_WELCOME' => 'ยินดีต้อนรับสู่ SuiteCRM',
    'LBL_TOUR_WATCH' => 'ดูว่ามีอะไรใหม่ใน SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">แถบการนำทางแบบง่ายใหม่</li><li class="icon-ok">ส่วนท้ายแบบยุบใหม่</li><li class="icon-ok">ปรับปรุงการค้นหา</li><li class="icon-ok">เมนูการกระทำที่อัปเดตแล้ว</li></ul><p>และอีกมากมาย!</p>',
    'LBL_TOUR_VISIT' => 'สำหรับข้อมูลเพิ่มเติมกรุณาเยี่ยมชมแอพพลิเคชั่นของเรา',
    'LBL_TOUR_DONE' => 'คุณทำเสร็จแล้ว!',
    'LBL_TOUR_REFERENCE_1' => 'คุณสามารถอ้างอิงข้อมูลของเราได้ตลอดเวลา',
    'LBL_TOUR_REFERENCE_2' => 'ผ่านทางลิงก์ "ฟอรัมสนับสนุน" ในแท็บ Profile',
    'LNK_TOUR_DOCUMENTATION' => 'เอกสารประกอบ',
    'LBL_TOUR_CALENDAR_URL_1' => 'คุณแชร์ปฏิทิน SuiteCRM กับแอพพลิเคชันของบุคคลที่ 3 เช่น Microsoft Outlook หรือ Exchange หรือไม่? ถ้าใช่คุณมี URL ใหม่ URL ใหม่ที่ปลอดภัยมากขึ้นนี้มีคีย์ส่วนตัวซึ่งจะป้องกันการเผยแพร่ปฏิทินของคุณโดยไม่ได้รับอนุญาต',
    'LBL_TOUR_CALENDAR_URL_2' => 'เรียกดู URL ปฏิทินใหม่ที่ใช้ร่วมกัน',
    'LBL_CONTRIBUTORS' => 'ผู้ร่วมพัฒนา',
    'LBL_ABOUT_SUITE' => 'เกี่ยวกับ SuiteCRM',
    'LBL_PARTNERS' => 'หุ้นส่วน',
    'LBL_FEATURING' => 'โมดูล AOS, AOW, AOR, AOP, AOE และ Reschedule โดย SalesAgility.',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',

    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM โอเพ่นซอร์สสำหรับโลก',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite โดย Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps โดย Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM โลโก้ออกแบบโดย Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'มีส่วนร่วมในการเผยแพร่ SuiteCRM 7.3 โดย ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'เกี่ยวกับการแปลของ SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'การแปลร่วมกันโดยชุมชน SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'สร้างการแปลโดยใช้ Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM เผยแพร่ภายใต้ลิขสิทธิ์โอเพนซอร์ส - GPL3',
    'LBL_ABOUT_SUITE_4' => 'โค้ดของ SuiteCRM บริหารจัดการและพัฒนาในโปรเจคจะรีลีสภายใต้ลิขสิทธิ์โอเพนซอร์ส - GPL3',
    'LBL_ABOUT_SUITE_5' => 'SuiteCRM มีให้บริการทั้งแบบฟรี และแบบจ่ายเงินตามตัวเลือก',

    'LBL_SUITE_PARTNERS' => 'เรามีพาร์ทเนอร์ SuiteCRM ที่จงรักภักดีต่อโอเพ่นซอร์ส หากต้องการดูรายชื่อพันธมิตรทั้งหมดของเราโปรดดูที่เว็บไซต์ของเรา',

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'ดูกิจกรรม',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'ชื่อเรื่อง: ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'ชั่วโมง',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'สถานที่:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'เกิดข้อผิดพลาดขณะทำการค้นหา ไวยากรณ์การค้นหาของคุณอาจไม่ถูกต้อง',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'ไม่พบดัชนีการค้นหาสำหรับโมดูลตั้งแต่หนึ่งโมดูลขึ้นไป โปรดตรวจสอบให้แน่ใจว่า crontab ได้รับการกำหนดค่าและทำงานอยู่ เปิดการกำหนดค่า Elasticsearch แล้วคลิก "กำหนดเวลาการสร้างดัชนีแบบเต็ม" และพิจารณาสร้างงาน Scheduler "Elasticsearch Indexer" เมื่อไม่มีอยู่',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'ไม่มีผลลัพธ์ที่ตรงกับเกณฑ์การค้นหาของคุณ ลองขยายขอบเขตการค้นหาของคุณ',

    // Portal Labels
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'ไม่สามารถสร้างผู้ใช้พอร์ทัล',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'ไม่สามารถเปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'ไม่สามารถปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'สร้างผู้ใช้พอร์ทัล',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'เปิดใช้งานผู้ใช้พอร์ทัล',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'ปิดใช้งานผู้ใช้พอร์ทัล',

    'LNK_TASK_VIEW' => 'View Task',
);
