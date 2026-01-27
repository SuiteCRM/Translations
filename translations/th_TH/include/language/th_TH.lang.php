<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => ' ไทย (Thai) - th_TH',
    'moduleList' => array(
        'Home' => 'หน้าหลัก',
        'ResourceCalendar' => 'ตารางงาน',
        'Contacts' => 'ผู้ติดต่อ',
        'Accounts' => 'ข้อมูลลูกค้า',
        'Alerts' => 'แจ้งเตือน',
        'Opportunities' => 'โอกาสการขาย',
        'Cases' => 'การติดตาม',
        'Notes' => 'บันทึกย่อ',
        'Calls' => 'บันทึกการโทร',
        'TemplateSectionLine' => 'บรรทัดส่วนแม่แบบ',
        'Calls_Reschedule' => 'กำหนดการโทรออก',
        'Emails' => 'อีเมล',
        'EAPM' => 'EAPM',
        'Meetings' => 'ประชุม',
        'Tasks' => 'งาน',
        'Calendar' => 'ปฏิทิน',
        'Leads' => 'ช่องทางการขาย',
        'Currencies' => 'สกุลเงิน',
        'Activities' => 'กิจกรรม',
        'Bugs' => 'ข้อผิดพลาด',
        'Feeds' => 'ดึงข่าวสาร',
        'iFrames' => 'พอร์ทัลส่วนตัว',
        'TimePeriods' => 'ระยะเวลา',
        'ContractTypes' => 'ประเภทสัญญา',
        'Schedulers' => 'ตารางเวลา',
        'Project' => 'โครงการ',
        'ProjectTask' => 'แผนงานโครงการ',
        'Campaigns' => 'แคมเปญ',
        'CampaignLog' => 'บันทึกแคมเปญ',
        'Documents' => 'เอกสาร',
        'DocumentRevisions' => 'ปรับปรุงเอกสาร',
        'Connectors' => 'การเชี่อมต่อ',
        'Roles' => 'บทบาท',
        'Notifications' => 'การแจ้งเตือน',
        'Sync' => 'แลกเปลี่ยน',
        'Users' => 'ผู้ใช้งาน',
        'Employees' => 'พนักงาน',
        'Administration' => 'ผู้ดูแลระบบ',
        'ACLRoles' => 'บทบาท',
        'InboundEmail' => 'อีเมล์',
        'Releases' => 'การเผยแพร่',
        'Prospects' => 'เป้าหมาย',
        'Queues' => 'คิว',
        'EmailMarketing' => 'จดหมายเกี่ยวกับการตลาด',
        'EmailTemplates' => 'เทมเพลตอีเมล',
        'ProspectLists' => 'กลุ่มเป้าหมาย',
        'SavedSearch' => 'บันทึกการค้นหา',
        'UpgradeWizard' => 'อัพเกรดระบบ',
        'Trackers' => 'ติตตาม',
        'TrackerSessions' => 'เซสชันการติดตาม',
        'TrackerQueries' => 'ติดตามสอบถาม',
        'FAQ' => 'คำถามที่พบบ่อย',
        'Newsletters' => 'จดหมายข่าว',
        'SugarFeed' => 'ฟีด SuiteCRM',
        'SugarFavorites' => 'รายการโปรดของ SuiteCRM',

        'OAuthKeys' => 'OAuth Consumer Keys',
        'OAuthTokens' => 'OAuth Tokens',
        'OAuth2Clients' => 'ไคลเอนต์ใช้ OAuth',
        'OAuth2Tokens' => 'OAuth Tokens',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'หน้าหลัก',
        'Dashboard' => 'แดชบอร์ด',
        'Contacts' => 'ข้อมูลผู้ที่ติดต่อ',
        'Accounts' => 'ข้อมูลลูกค้า',
        'Opportunities' => 'โอกาสการขาย',
        'Cases' => 'การติดตาม',
        'Notes' => 'บันทึกย่อ',
        'Calls' => 'การติดต่อ',
        'Emails' => 'อีเมล',
        'EmailTemplates' => 'แม่แบบอีเมล',
        'Meetings' => 'ประชุม',
        'Tasks' => 'ภารกิจ',
        'Calendar' => 'ปฏิทิน',
        'Leads' => 'ช่องทางการขาย',
        'Activities' => 'กิจกรรม',
        'Bugs' => 'ข้อผิดพลาด',
        'KBDocuments' => 'ฐานความรู้',
        'Feeds' => 'ดึงข่าวสาร',
        'iFrames' => 'พอร์ทัลส่วนตัว',
        'TimePeriods' => 'ช่วงเวลา',
        'Project' => 'แผนงาน',
        'ProjectTask' => 'ติดตามแผนงาน',
        'Prospects' => 'เป้าหมาย',
        'Campaigns' => 'แคมเปญ',
        'Documents' => 'เอกสาร',
        'Sync' => 'แลกเปลี่ยน',
        'Users' => 'ผู้รับผิดชอบ',
        'SugarFavorites' => 'รายการโปรดของ SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'ถูกต้อง',
        '2' => 'ไม่ใช่',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'วิเคราะห์',
        'Competitor' => 'คู่แข่ง',
        'Customer' => 'ลูกค้า',
        'Integrator' => 'ผู้รวบรวม',
        'Investor' => 'ผู้ลงทุน',
        'Partner' => 'หุ้นส่วน',
        'Press' => 'หนังสือพิมพ์',
        'Prospect' => 'คาดการณ์',
        'Reseller' => 'ตัวแทนจำหน่าย',
        'Other' => 'อื่นๆ',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'เครื่องแต่งกาย',
        'Banking' => 'การธนาคาร',
        'Biotechnology' => 'เทคโนโลยีชีวภาพ',
        'Chemicals' => 'สารเคมี',
        'Communications' => 'การสื่อสาร',
        'Construction' => 'การก่อสร้าง',
        'Consulting' => 'ปรืกษา',
        'Education' => 'การศึกษา',
        'Electronics' => 'อิเล็กทรอนิกส์',
        'Energy' => 'พลังงาน',
        'Engineering' => 'วิศวกรรม',
        'Entertainment' => 'ความบันเทิง',
        'Environmental' => 'สิ่งแวดล้อม',
        'Finance' => 'การเงิน',
        'Government' => 'ผู้ดูแลระบบ',
        'Healthcare' => 'การดูแลสุขภาพ',
        'Hospitality' => 'การดูแลต้อนรับ',
        'Insurance' => 'ประกัน',
        'Machinery' => 'เครื่องจักรกล',
        'Manufacturing' => 'การผลิต',
        'Media' => 'สื่อ',
        'Not For Profit' => 'ไม่ใช่เพี่อกำไร',
        'Recreation' => 'สันทนาการ',
        'Retail' => 'การขายปลีก',
        'Shipping' => 'การจัดส่ง',
        'Technology' => 'เทคโนโลยี',
        'Telecommunications' => 'โทรคมนาคม',
        'Transportation' => 'การขนส่ง',
        'Utilities' => 'คุณประโยชน์',
        'Other' => 'อื่นๆ',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'การโทรขาย',
        'Existing Customer' => 'ลูกค้าเดิม',
        'Self Generated' => 'Self Generated',
        'Employee' => 'พนักงาน',
        'Partner' => 'หุ้นส่วน',
        'Public Relations' => 'ประชาสัมพันธ์',
        'Direct Mail' => 'การตลาดผ่านไปรษณีย์',
        'Conference' => 'การประชุม',
        'Trade Show' => 'งานแสดงสินค้า',
        'Web Site' => 'เว็บไซต์',
        'Word of mouth' => 'การบอกต่อ',
        'Email' => 'อีเมล',
        'Campaign' => 'แคมเปญ',
        'Other' => 'อื่นๆ',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'ธุรกิจที่มีอยู่',
        'New Business' => 'ธุรกิจใหม่',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'รายได้',
        'Investment' => 'การลงทุน',
        'Expected_Revenue' => 'ประมาณการรายได้',
        'Budget' => 'งบประมาณ',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'ตัดสินใจทางธุรกิจ',
        'Business Evaluator' => 'ประเมินธุรกิจ',
        'Technical Decision Maker' => 'ตัดสินใจทางเทคนิค',
        'Technical Evaluator' => 'ตัวประเมินทางเทคนิค',
        'Executive Sponsor' => 'ผู้บริหารสนับสนุน',
        'Influencer' => 'ผู้ชักชวน',
        'Other' => 'อื่นๆ',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'ผู้ที่ติดต่อรอง',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'สุทธิ 15',
        'Net 30' => 'สุทธิ 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'คุณสมบัติ',
        'Needs Analysis' => 'วิเคราะห์ความต้องการ',
        'Value Proposition' => 'มูลค่า',
        'Id. Decision Makers' => 'การระบุผู้ตัดสินใจ',
        'Perception Analysis' => 'วิเคราะห์การรับรู้',
        'Proposal/Price Quote' => 'ใบเสนอราคา',
        'Negotiation/Review' => 'การเจรจาต่อรอง',
        'Closed Won' => 'ปิดการขายได้งาน',
        'Closed Lost' => 'ปิดการขายไม่ได้งาน',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'การติดต่อ',
        'Meeting' => 'ประชุม',
        'Task' => 'ภารกิจ',
        'Email' => 'อีเมล',
        'Note' => 'บันทึกย่อ',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'นาย.',
        'Ms.' => 'นางสาว.',
        'Mrs.' => 'นาง.',
        'Miss' => 'นางสาว',
        'Dr.' => 'ดร.',
        'Prof.' => 'ศจ.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1นาทีก่อน',
        300 => '5 นาทีก่อน',
        600 => '10นาทีก่อน',
        900 => '15นาทีก่อน',
        1800 => '30นาทีก่อน',
        3600 => '1 ชั่วโมงก่อน',
        7200 => '2 ชั่วโมงก่อน',
        10800 => '3 ชั่วโมงก่อน',
        18000 => '5 ชั่วโมงก่อน',
        86400 => '1 วันก่อน',
    ),

    'task_priority_default' => 'กลาง',
    'task_priority_dom' => array(
        'High' => 'สูง',
        'Medium' => 'กลาง',
        'Low' => 'ต่ำ',
    ),
    'task_status_default' => 'ยังไม่ได้เริ่ม',
    'task_status_dom' => array(
        'Not Started' => 'ยังไม่ได้เริ่ม',
        'In Progress' => 'ดำเนินการ',
        'Completed' => 'เสร็จเรียบร้อย',
        'Pending Input' => 'ยังค้างอยู่',
        'Deferred' => 'ยืดเวลา',
    ),
    'meeting_status_default' => 'วางแผน',
    'meeting_status_dom' => array(
        'Planned' => 'วางแผน',
        'Held' => 'ระงับ',
        'Not Held' => 'ไม่ระงับ',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'อื่นๆ',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'วางแผน',
    'call_status_dom' => array(
        'Planned' => 'วางแผน',
        'Held' => 'ระงับ',
        'Not Held' => 'ไม่ระงับ',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'รับเข้า',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'มาใหม่',
        'Assigned' => 'รับโอน',
        'In Process' => 'อยู่ในระหว่างดำเนินการ',
        'Converted' => 'เปลี่ยนแปลง',
        'Recycled' => 'รีไซเคิล',
        'Dead' => 'ตาย',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'สูง',
        'P2' => 'กลาง',
        'P3' => 'ต่ำ',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'ผู้ใช้ทั่วไป',
        'Administrator' => 'ผู้ดูแลระบบ',
    ),
    'user_status_dom' => array(
        'Active' => 'เปิดใช้งาน',
        'Inactive' => 'ปิดใช้งาน',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'รหัสอีเมล์',
    ),
    'employee_status_dom' => array(
        'Active' => 'เปิดใช้งาน',
        'Terminated' => 'หมดสัญญา',
        'Leave of Absence' => 'ลาออก',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'สูง',
        'Medium' => 'กลาง',
        'Low' => 'ต่ำ',
    ),
    'project_task_priority_default' => 'กลาง',

    'project_task_status_options' => array(
        'Not Started' => 'ยังไม่ได้เริ่ม',
        'In Progress' => 'ดำเนินการ',
        'Completed' => 'เสร็จเรียบร้อย',
        'Pending Input' => 'ยังค้างอยู่',
        'Deferred' => 'ยืดเวลา',
    ),
    'project_task_utilization_options' => array(
        '0' => 'ไม่มี',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'ร่าง',
        'In Review' => 'ดำเนินการตรวจทาน',
        'Underway' => 'ระหว่าง',
        'On_Hold' => 'หยุดไว้ชั่วคราว',
        'Completed' => 'เสร็จเรียบร้อย',
    ),
    'project_status_default' => 'ร่าง',

    'project_duration_units_dom' => array(
        'Days' => 'วัน',
        'Hours' => 'ชั่วโมง',
    ),

    'activity_status_type_dom' => array(
        '' => '-ไม่มี-',
        'active' => 'เปิดใช้งาน',
        'inactive' => 'ปิดใช้งาน',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'ข้อมูลลูกค้า',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'ข้อมูลลูกค้า',
        'Opportunities' => 'โอกาสการขาย',
        'Cases' => 'การติดตาม',
        'Leads' => 'ช่องทางการขาย',
        'Contacts' => 'ข้อมูลผู้ที่ติดต่อ', // cn (11/22/2005) added to support Emails

        'Bugs' => 'ข้อผิดพลาด',
        'Project' => 'แผนงาน',

        'Prospects' => 'เป้าหมาย',
        'ProjectTask' => 'ติดตามแผนงาน',

        'Tasks' => 'ภารกิจ',

        'AOS_Contracts' => 'สัญญา',
        'AOS_Invoices' => 'ใบแจ้งหนี้',
        'AOS_Quotes' => 'ใบเสนอราคา',
        'AOS_Products' => 'สินค้า',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'ข้อมูลลูกค้า',
        'Contacts' => 'ข้อมูลผู้ที่ติดต่อ',
        'Opportunities' => 'โอกาสการขาย',
        'Campaigns' => 'แคมเปญ',
        'Tasks' => 'ภารกิจ',
        'Emails' => 'อีเมล',

        'Bugs' => 'ข้อผิดพลาด',
        'Project' => 'แผนงาน',
        'ProjectTask' => 'ติดตามแผนงาน',
        'Prospects' => 'เป้าหมาย',
        'Cases' => 'การติดตาม',
        'Leads' => 'ช่องทางการขาย',

        'Meetings' => 'ประชุม',
        'Calls' => 'การติดต่อ',

        'AOS_Contracts' => 'สัญญา',
        'AOS_Invoices' => 'ใบแจ้งหนี้',
        'AOS_Quotes' => 'ใบเสนอราคา',
        'AOS_Products' => 'สินค้า',
    ),

    'parent_type_display' => array(
        'Accounts' => 'ข้อมูลลูกค้า',
        'Contacts' => 'ข้อมูลผู้ที่ติดต่อ',
        'Tasks' => 'ภารกิจ',
        'Opportunities' => 'โอกาสการขาย',

        'Bugs' => 'ข้อผิดพลาด',
        'Cases' => 'การติดตาม',
        'Leads' => 'ช่องทางการขาย',

        'Project' => 'แผนงาน',
        'ProjectTask' => 'ติดตามแผนงาน',

        'Prospects' => 'เป้าหมาย',

        'AOS_Contracts' => 'สัญญา',
        'AOS_Invoices' => 'ใบแจ้งหนี้',
        'AOS_Quotes' => 'ใบเสนอราคา',
        'AOS_Products' => 'สินค้า',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'ใบเสนอราคา',
        'AOS_Invoices' => 'ใบแจ้งหนี้',
        'AOS_Contracts' => 'สัญญา',
    ),
    'issue_priority_default_key' => 'กลาง',
    'issue_priority_dom' => array(
        'Urgent' => 'ด่วนมาก',
        'High' => 'สูง',
        'Medium' => 'กลาง',
        'Low' => 'ต่ำ',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'ยอมรับ',
        'Duplicate' => 'ทำซ้ำ',
        'Closed' => 'ปิด',
        'Out of Date' => 'หมดอายุ',
        'Invalid' => 'ไม่ถูกต้อง',
    ),

    'issue_status_default_key' => 'มาใหม่',
    'issue_status_dom' => array(
        'New' => 'มาใหม่',
        'Assigned' => 'รับโอน',
        'Closed' => 'ปิด',
        'Pending' => 'รอดำเนินการ',
        'Rejected' => 'คัดออก',
    ),

    'bug_priority_default_key' => 'กลาง',
    'bug_priority_dom' => array(
        'Urgent' => 'ด่วนมาก',
        'High' => 'สูง',
        'Medium' => 'กลาง',
        'Low' => 'ต่ำ',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'ยอมรับ',
        'Duplicate' => 'ทำซ้ำ',
        'Fixed' => 'แก้ไข',
        'Out of Date' => 'หมดอายุ',
        'Invalid' => 'ไม่ถูกต้อง',
        'Later' => 'ภายหลัง',
    ),
    'bug_status_default_key' => 'มาใหม่',
    'bug_status_dom' => array(
        'New' => 'มาใหม่',
        'Assigned' => 'รับโอน',
        'Closed' => 'ปิด',
        'Pending' => 'รอดำเนินการ',
        'Rejected' => 'คัดออก',
    ),
    'bug_type_default_key' => 'ข้อผิดพลาด',
    'bug_type_dom' => array(
        'Defect' => 'ข้อบกพร่อง',
        'Feature' => 'จุดเด่น',
    ),
    'case_type_dom' => array(
        'Administration' => 'ผู้ดูแลระบบ',
        'Product' => 'สินค้า',
        'User' => 'ผู้รับผิดชอบ',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'ภายใน',
        'Forum' => 'กระดานข่าว',
        'Web' => 'เว็บไซต์',
        'InboundEmail' => 'อีเมล',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'ข้อมูลลูกค้า',
        'Activities' => 'กิจกรรม',
        'Bugs' => 'ข้อผิดพลาด',
        'Calendar' => 'ปฏิทิน',
        'Calls' => 'บันทึกการโทร',
        'Campaigns' => 'แคมเปญ',
        'Cases' => 'การติดตาม',
        'Contacts' => 'ผู้ติดต่อ',
        'Currencies' => 'สกุลเงิน',
        'Dashboard' => 'แดชบอร์ด',
        'Documents' => 'เอกสาร',
        'Emails' => 'อีเมล',
        'Feeds' => 'ข้อมูล',
        'Forecasts' => 'การคาดการณ์',
        'Help' => 'ช่วยเหลือ',
        'Home' => 'หน้าหลัก',
        'Leads' => 'ช่องทางการขาย',
        'Meetings' => 'ประชุม',
        'Notes' => 'บันทึกย่อ',
        'Opportunities' => 'โอกาสการขาย',
        'Outlook Plugin' => 'ปลั๊กอินของ outlook',
        'Projects' => 'โครงการ',
        'Quotes' => 'ใบเสนอราคา',
        'Releases' => 'การเผยแพร่',
        'RSS' => 'ดึงข่าวสาร',
        'Studio' => 'สตูดิโอ',
        'Upgrade' => 'อัพเกรด',
        'Users' => 'ผู้ใช้งาน',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'วางงาน',
        'Active' => 'เปิดใช้งาน',
        'Inactive' => 'ปิดใช้งาน',
        'Complete' => 'เสร็จเรียบร้อย',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'โทรศัพท์โดยตรง',
        'Mail' => 'จดหมาย',
        'Email' => 'อีเมล',
        'Print' => 'พิมพ์',
        'Web' => 'เว็บไซต์',
        'Radio' => 'วิทยุ',
        'Television' => 'โทรทัศน์',
        'NewsLetter' => 'จดหมายข่าว',
        'Survey' => 'สำรวจ',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'รายสัปดาห์',
        'Monthly' => 'รายเดือน',
        'Quarterly' => 'รายไตรมาส',
        'Annually' => 'รายปี',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'มกราคม',
        '2' => 'กุมภาพันธ์',
        '3' => 'มีนาคม',
        '4' => 'เมษายน',
        '5' => 'พฤษภาคม',
        '6' => 'มิถุนายน',
        '7' => 'กรกฎาคม',
        '8' => 'สิงหาคม',
        '9' => 'กันยายน',
        '10' => 'ตุลาคม',
        '11' => 'พฤศจิกายน',
        '12' => 'ธันวาคม',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'ม. ค.',
        '2' => 'ก. พ.',
        '3' => 'มี. ค.',
        '4' => 'เม. ย.',
        '5' => 'พฤษภาคม',
        '6' => 'มิ. ย.',
        '7' => 'ก. ค.',
        '8' => 'ส. ค.',
        '9' => 'ก. ย.',
        '10' => 'ต. ค.',
        '11' => 'พ. ย.',
        '12' => 'ธ. ค.',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'วันอาทิตย์',
        '2' => 'วันจันทร์',
        '3' => 'วันอังคาร',
        '4' => 'วันพุธ',
        '5' => 'วันพฤหัสบดี',
        '6' => 'วันศุกร์',
        '7' => 'วันเสาร์',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'อา',
        '2' => 'จ',
        '3' => 'อ',
        '4' => 'พ',
        '5' => 'พฤ',
        '6' => 'ศ',
        '7' => 'ส',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'น. เช้า',
        'pm' => 'น. บ่าย',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'น. เช้า',
        'PM' => 'น. บ่าย',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'ส่วนตัว',
        'group' => 'กลุ่ม',
        'bounce' => 'ตีกลับ',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'เข้ารหัสพื้นฐาน',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'เข้ารหัสพื้นฐาน',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'ส่วนตัว',
        'group' => 'กลุ่ม',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'ส่วนตัว',
        'group' => 'กลุ่ม',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'ส่วนตัว',
        'group' => 'กลุ่ม',
        'system' => 'ระบบ',
        'system-override' => 'การแทนที่ระบบ',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'เปิดใช้งาน',
        'Inactive' => 'ปิดใช้งาน',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'ค้นหาคำหลายคำ',
      'single' => 'ค้นหาคำเดียว',
    ],

    'dom_email_types' => array(
        'out' => 'ส่ง',
        'archived' => 'จัดเก็บ',
        'draft' => 'ร่าง',
        'inbound' => 'รับเข้า',
        'campaign' => 'แคมเปญ',
    ),
    'dom_email_status' => array(
        'archived' => 'จัดเก็บ',
        'closed' => 'ปิด',
        'draft' => 'ร่าง',
        'read' => 'อ่าน',
        'replied' => 'ตอบกลับ',
        'sent' => 'ส่ง',
        'send_error' => 'ส่งข้อผิดพลาด',
        'unread' => 'ยังไม่ได้อ่าน',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'จัดเก็บ',
    ),

    'dom_email_server_type' => array(
        '' => '-ไม่มี-',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '-ไม่มี-',
        'createcase' => 'สร้างเคส',
        'bounce' => 'จัดการการตีกลับ',
    ),
    'dom_email_distribution' => array(
        '' => '-ไม่มี-',
        'direct' => 'กำหนดโดยตรง',
        'roundRobin' => 'สลับกันแบบ Round-Robin',
        'leastBusy' => 'แบบเลือกที่ว่างงานที่สุด',
    ),
    'dom_email_errors' => array(
        1 => 'เลือกผู้ใช้เฉพาะ เมื่อตรงกำหนดรายการ',
        2 => 'กรุณามอบหมายเฉพาะรายการที่เลือกเมื่อทำการมอบหมายแบบเฉพาะ',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'ถูกต้อง',
        'bool_false' => 'ไม่ใช่',
    ),
    'dom_int_bool' => array(
        1 => 'ถูกต้อง',
        0 => 'ไม่ใช่',
    ),
    'dom_switch_bool' => array(
        'on' => 'ถูกต้อง',
        'off' => 'ไม่ใช่',
        '' => 'ไม่ใช่',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'ใช้โปรแกรมอีเมล์ SuiteCRM',
        'mailto' => 'ใช้โปรแกรมอีเมล์ภายนอก',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'รูปแบบอีเมลที่เป็นค่าเริ่มต้น',
        'html' => 'อีเมล์แบบ HTML',
        'plain' => 'อีเมล์ข้อความล้วน',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'เลยกำหนดเวลา งานไม่ได้ถูกดำเนินการ',
        'ready' => 'พร้อม',
        'in progress' => 'ดำเนินการ',
        'failed' => 'การทำงานล้มเหลว',
        'completed' => 'เสร็จเรียบร้อย',
        'no curl' => 'ไม่ถูกดำเนินการ: cURL ไม่ได้ถูกติดตั้ง',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'เปิดใช้งาน',
        'Inactive' => 'ปิดใช้งาน',
    ),

    'scheduler_period_dom' => array(
        'min' => 'นาที',
        'hour' => 'ชั่วโมง',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'การตลาด',
        'Knowledege Base' => 'ฐานความรู้',
        'Sales' => 'การขาย',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'จัดเก็บ',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'การตลาด',
        'Product Brochures' => 'โบรชัวร์ของผลิตภัณฑ์',
        'FAQ' => 'คำถามที่พบบ่อย',
    ),

    'document_status_dom' => array(
        'Active' => 'เปิดใช้งาน',
        'Draft' => 'ร่าง',
        'FAQ' => 'คำถามที่พบบ่อย',
        'Expired' => 'หมดอายุ',
        'Under Review' => 'ดำเนินการตรวจทาน',
        'Pending' => 'รอดำเนินการ',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'จดหมายเวียน',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'ข้อตกลงใบอนุญาตการใช้งาน',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'ตกลง',
        'decline' => 'ปฏิเสธ',
        'tentative' => 'ยังไม่แน่นอน',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'ยอมรับ',
        'decline' => 'ปฏิเสธ',
        'tentative' => 'ยังไม่แน่นอน',
        'none' => 'ไม่มี',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'ไม่มี',
        'Daily' => 'รายวัน',
        'Weekly' => 'รายสัปดาห์',
        'Monthly' => 'รายเดือน',
        'Yearly' => 'รายปี',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'วัน',
        'Weekly' => 'สัปดาห์',
        'Monthly' => 'เดือน',
        'Yearly' => 'ปี',
    ),

    'duration_dom' => array(
        '' => 'ไม่มี',
        '900' => '15 นาที',
        '1800' => '30 นาที',
        '2700' => '45 นาที',
        '3600' => '1 ชั่วโมง',
        '5400' => '1.5 ชั่วโมง',
        '7200' => '2 ชั่วโมง',
        '10800' => '3 ชั่วโมง',
        '21600' => '6 ชั่วโมง',
        '86400' => '1 วัน',
        '172800' => '2 วัน',
        '259200' => '3 วัน',
        '604800' => '1 สัปดาห์',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'ค่าเริ่มต้น',
        'seed' => 'Seed',
        'exempt_domain' => 'รายการปราบปราม - โดยโดเมน',
        'exempt_address' => 'รายการปราบปราม - โดยอีเมล์',
        'exempt' => 'รายการปราบปราม - ตามรหัส',
        'test' => 'ทดสอบ',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'เปิดใช้งาน',
        'inactive' => 'ปิดใช้งาน',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'ข้อความที่ส่ง/จำนวนครั้งที่ส่ง',
        'send error' => 'ข้อความที่ถูกตีกลับ,อื่นๆ',
        'invalid email' => 'ข้อความที่ถูกตีกลับ,อีเมลไม่ถูกต้อง',
        'link' => 'คลิกผ่านลิงค์',
        'viewed' => 'ดูข้อความ',
        'removed' => 'คัดออก',
        'lead' => 'สร้างลูกค้าเป้าหมาย',
        'contact' => 'ผู้ติดต่อที่สร้างขึ้น',
        'blocked' => 'ถูกระงับ โดยแอดเดรสหรือโดเมน',
        'Survey' => 'ตอบแบบสำรวจแล้ว',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'ผู้ติดต่อ',
        'Users' => 'ผู้ใช้งาน',
        'Prospects' => 'เป้าหมาย',
        'Leads' => 'ช่องทางการขาย',
        'Accounts' => 'ข้อมูลลูกค้า',
    ),
    'merge_operators_dom' => array(
        'like' => 'ประกอบด้วย',
        'exact' => 'แน่นอน',
        'start' => 'เริ่มต้นด้วย',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'ถูกต้อง',
        'false' => 'ไม่ใช่',
        'required' => 'จำเป็น',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'ถูกปิดใช้งาน',
        1 => 'ถูกเปิดใช้งานแล้ว',
        2 => 'คัดกรอง',
        3 => 'ตัวกรองที่เลือกไว้เป็นค่าเริ่มต้น',
        4 => 'การกรองเท่านั้น',
    ),

    'projects_priority_options' => array(
        'high' => 'สูง',
        'medium' => 'กลาง',
        'low' => 'ต่ำ',
    ),

    'projects_status_options' => array(
        'notstarted' => 'ยังไม่ได้เริ่ม',
        'inprogress' => 'ดำเนินการ',
        'completed' => 'เสร็จเรียบร้อย',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'ขยายคำบรรยาย',
        'collapselegend' => 'ย่อคำบรรยาย',
        'clickfordrilldown' => 'คลิกเพื่อดู Drilldown',
        'detailview' => 'รายละเอียดเพิ่มเติม...',
        'piechart' => 'กราฟวงกลอม',
        'groupchart' => 'กลุ่มแผนภูมิ',
        'stackedchart' => 'แผนภูมิแบบเรียงซ้อน',
        'barchart' => 'กราฟรูปแท่ง',
        'horizontalbarchart' => 'แผนภูมิแท่งแนวนอน',
        'linechart' => 'กราฟเส้น',
        'noData' => 'ข้อมูลไม่พร้อมใช้งาน',
        'print' => 'พิมพ์',
        'pieWedgeName' => 'ส่วน',
    ),
    'release_status_dom' => array(
        'Active' => 'เปิดใช้งาน',
        'Inactive' => 'ปิดใช้งาน',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'อัญประกาศเดี่ยว (&#39;)',
        '"' => 'อัญประกาศคู่(&#34;)',
        '' => 'ไม่มี',
        'other' => 'อื่นๆ:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'อื่นๆ:',
    ),
    'link_target_dom' => array(
        '_blank' => 'หน้าต่างใหม่',
        '_self' => 'ในหน้าเดียวกัน',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'ไม่รีเฟรชอัตโนมัติ',
        '30' => 'ทุก ๆ 30 วินาที',
        '60' => 'ทุก ๆ 1 นาที',
        '180' => 'ทุก ๆ 3 นาที',
        '300' => 'ทุก ๆ 5 นาที',
        '600' => 'ทุก ๆ 10 นาที',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'ไม่เป็นอันขาด',
        '30' => 'ทุก ๆ 30 วินาที',
        '60' => 'ทุก ๆ 1 นาที',
        '180' => 'ทุก ๆ 3 นาที',
        '300' => 'ทุก ๆ 5 นาที',
        '600' => 'ทุก ๆ 10 นาที',
    ),
    'date_range_search_dom' => array(
        '=' => 'เท่ากับ',
        'not_equal' => 'ไม่เปิด',
        'greater_than' => 'หลังจาก',
        'less_than' => 'ก่อนหน้า',
        'last_7_days' => '7 วันที่แล้ว',
        'next_7_days' => '7 วันถัดไป',
        'last_30_days' => '30 วันที่แล้ว',
        'next_30_days' => '30 วันข้างหน้า',
        'last_month' => 'เดือนที่แล้ว',
        'this_month' => 'เดือนนี้',
        'next_month' => 'เดือนถัดไป',
        'last_year' => 'ปีที่แล้ว',
        'this_year' => 'ปีนี้',
        'next_year' => 'ปีถัดไป',
        'between' => 'ระหว่าง',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'เท่ากับ',
        'not_equal' => 'ไม่เท่ากับ',
        'greater_than' => 'มากกว่า',
        'greater_than_equals' => 'มากกว่าหรือเท่ากับ',
        'less_than' => 'น้อยกว่า',
        'less_than_equals' => 'น้อยกว่าหรือเท่ากับ',
        'between' => 'ระหว่าง',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'คัด​ลอก',
        'move' => 'ย้าย',
        'donothing' => 'ไม่ทำอะไร',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'ผลลัพธ์',
    'ERR_SEARCH_INVALID_QUERY' => 'เกิดข้อผิดพลาดขณะทำการค้นหา ไวยากรณ์การค้นหาของคุณอาจไม่ถูกต้อง',
    'ERR_SEARCH_NO_RESULTS' => 'ไม่มีผลลัพธ์ที่ตรงกับเกณฑ์การค้นหาของคุณ ลองขยายขอบเขตการค้นหาของคุณ',
    'LBL_SEARCH_PERFORMED_IN' => 'ดำเนินการค้นหาใน',
    'LBL_EMAIL_CODE' => 'รหัสอีเมล์',
    'LBL_SEND' => 'ส่ง',
    'LBL_LOGOUT' => 'ออกจากระบบ',
    'LBL_TOUR_NEXT' => 'ถัดไป',
    'LBL_TOUR_SKIP' => 'ข้าม',
    'LBL_TOUR_BACK' => 'ย้อนกลับ',
    'LBL_TOUR_TAKE_TOUR' => 'ใช้ทัวร์',
    'LBL_MOREDETAIL' => 'รายละเอียดเพิ่มเติม' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'แก้ไขทันที' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'ดู' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'คัดกรอง' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'เพิ่ม' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'เพิ่มอีเมล' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'ซ่อน/แสดง' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'ลบ' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'ล้างออก' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'ลบออก' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'ลบอีเมล' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Opt Out',
    'LBL_ID_FF_INVALID' => 'ทำไม่ถูกต้อง',
    'LBL_ADD' => 'เพิ่ม' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'โลโก้บริษัท' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'ป๊อปอัปในตัวเชื่อมต่อ',
    'LBL_CLOSEINLINE' => 'ปิด',
    'LBL_VIEWINLINE' => 'ดู',
    'LBL_INFOINLINE' => 'ข้อมูล',
    'LBL_PRINT' => 'พิมพ์',
    'LBL_HELP' => 'ช่วยเหลือ',
    'LBL_ID_FF_SELECT' => 'เลือก',
    'DEFAULT' => 'พื้นฐาน',
    'LBL_SORT' => 'เรียงลำดับ',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'เปิดใช้งาน SMTP ผ่าน SSL หรือ TLS',
    'LBL_NO_ACTION' => 'ไม่มีการดำเนินการ โดยชื่อ: %s',
    'LBL_NO_SHORTCUT_MENU' => 'ไม่มีการดำเนินการ',
    'LBL_NO_DATA' => 'ไม่มีข้อมูล',

    'LBL_ROUTING_FLAGGED' => 'ตั้งค่าสถานะ',
    'LBL_ROUTING_TO' => '-',
    'LBL_ROUTING_TO_ADDRESS' => 'ไปยังที่อยู่',
    'LBL_ROUTING_WITH_TEMPLATE' => 'ด้วยแม่แบบ',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'เรกคอร์ดปัจจุบันประกอบด้วยค่าในฟิลด์ที่อยู่และโทรศัพท์ การเขียนทับค่าเหล่านี้ ด้วยโทรศัพท์และที่อยู่ของบัญชีที่คุณเลือกต่อไปนี้ คลิก "ตกลง" เพื่อให้ค่าปัจจุบัน คลิก "ยกเลิก"',
    'LBL_DROP_HERE' => '[วางที่นี่]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'ใส่ Gmail&#153; ค่าเริ่มต้น',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'ชื่อ',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'การตั้งค่าอีเมล์เซิร์ฟเวอร์สำหรับส่งออก',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'รหัสผ่าน SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'พอร์ต SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'เซิร์ฟเวอร์ SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'ชื่อผู้ใช้ SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'ค่าเริ่มต้น',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'คำเตือน: ไม่พบชื่อผู้ใช้และรหัสผ่านสำหรับอีเมล์ขาออก',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'โปรดตั้งค่าการเชื่อมต่อ OAuth ภายนอก',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'คำเตือน: ยังไม่ได้ตั้งรหัสผ่าน',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'คำเตือน: ไม่มีข้อมูลรับรอง',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'ตั้งค่าบัญชีเพี่อรับเมล์ขาเข้า',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'ตั้งค่า SMTP เพี่อเมล์ขาออก',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'เรียบร้อย',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'ล้างออก',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'ถึง:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'สำเนาถึง:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'สำเนาลับถึง:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'ถึง/สำเนา/สำเนาลับ',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'อีเมล',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'คัดกรอง',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'ชื่อ',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'ไม่พบข้อมูลอีเมล์',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'บันทึก และเพิ่ม',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'เลือกผู้รับอีเมล',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'สมุดรายชื่อ',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'คำเตือน! คุณกำลังพยายามลบบัญชีขาออกที่ถูกเชื่อมโยงกับบัญชีขาเข้าที่มีอยู่ คุณแน่ใจหรือไม่?',
    'LBL_EMAIL_ADDRESSES' => 'อีเมล',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'อีเมล',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'คุณได้รับการยืนยันว่า อีเมลของคุณได้ถูกเลือกใน: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'ไม่สามารถยืนยันอีเมลได้',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'นำเข้า SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'การมอบหมาย',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'แนบ',
    'LBL_EMAIL_ATTACHMENT' => 'แนบ',
    'LBL_EMAIL_ATTACHMENTS' => 'จากตัวเครื่อง',
    'LBL_EMAIL_ATTACHMENTS2' => 'จากเอกสารของ SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'แบบแนบไฟล์',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'ไฟล์',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'เอกสาร',
    'LBL_EMAIL_BCC' => 'สำเนาลับ',
    'LBL_EMAIL_CANCEL' => 'ยกเลิก',
    'LBL_EMAIL_CC' => 'สำเนา',
    'LBL_EMAIL_CHARSET' => 'จำนวนตัวอักษร',
    'LBL_EMAIL_CHECK' => 'ตรวจสอบอีเมล์',
    'LBL_EMAIL_CHECKING_NEW' => 'ตรวจสอบอีเมล์ใหม่',
    'LBL_EMAIL_CHECKING_DESC' => 'กรุณารอซักครู่...<br><br> ระบบอาจใช้เวลาตรวจสอบ หากเป็นกรณีตรวจสอบเมล์ครั้งแรก',
    'LBL_EMAIL_CLOSE' => 'ปิด',
    'LBL_EMAIL_COFFEE_BREAK' => 'กำลังตรวจสอบอีเมล์ใหม่ <br><br> อีเมล์ที่มีขนาดใหญ่อาจใช้เวลานานในการตรวจสอบ',

    'LBL_EMAIL_COMPOSE' => 'อีเมล',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'โปรดระบุผู้รับสำหรับอีเมลนี้',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'เนื้อความของอีเมล์นี้ว่างเปล่า  ท่านต้องการส่งออกเมล์นี้หรือไม่',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'ชื่อเรี่องอีเมล์ว่างเปล่า ท่านต้องการส่งออกเมล์นี้หรือไม่',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(ไม่มีชื่อเรื่อง)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'กรุณาป้อนอีเมล์ที่ถูกต้องในช่อง To, CC และ BCC',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'จะทิ่งเมล์นี้หรือไม่',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'คุณต้องการลบลายเซ็นนี้หรือไม่',

    'LBL_EMAIL_SENT_SUCCESS' => 'ส่งอีเมลแล้ว',

    'LBL_EMAIL_CREATE_NEW' => '-- สร้างตอนบันทึก-',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'คูณ',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'ว่างเปล่า',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'ผู้ส่ง ส่งในวันที่',
    'LBL_EMAIL_DATE_TODAY' => 'วันนี้',
    'LBL_EMAIL_DELETE' => 'ลบ',
    'LBL_EMAIL_DELETE_CONFIRM' => 'ลบข้อความที่เลือก',
    'LBL_EMAIL_DELETE_SUCCESS' => 'ลบอีเเรียบร้อยแล้ว',
    'LBL_EMAIL_DELETING_MESSAGE' => 'กำหลังลบข้อความ',
    'LBL_EMAIL_DETAILS' => 'ราย​ละเอียด',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'ที่อยู่หลักจะถูกใช้เมื่อทำงานกับผู้ติดต่อ',

    'LBL_EMAIL_EMPTYING_TRASH' => 'ล้างถังขยะ',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'ลบเซิร์ฟขาออก',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'ล้างแคช',
    'LBL_EMAIL_EMPTY_MSG' => 'ไม่มีอีเมล์เพื่อแสดง',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'ไม่มีที่อยู่อีเมลเพื่อแสดง',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'โฟลเดอร์ต้องไม่ซ้ำ และไม่ว่างเปล่า กรุณาลองใหม่อิกครั้ง',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'ไม่สามารถลบโฟลเดอร์นี้ได้ อาจมีเมล์หรือกล่องเมล์ใช้งานโฟล์เดอร์นี้อยู่',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'ไม่สามารถตรวจสอบโฟลเดอร์ที่กำหนดไว้จากบริบท  ลองอีกครั้ง',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'กรุณาตรวจสอบการตั้งค่าของคุณ',
    'LBL_EMAIL_ERROR_DESC' => 'พบข้อผิดพลาด: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'คุณไม่ได้รับอนุญาตให้เข้าถึงส่วนนี้ กรุณาติตต่อผู้ดูแลระบบเพี่อจอสิทธิ์ในการเข้าถึง',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'ชื่อโฟลเดอร์ของ SuiteCRM จ้องไม่ซ้ำกัน',
    'LBL_EMAIL_ERROR_EMPTY' => 'โปรดป้อนเงื่อนไขการค้นหา',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'มีข้อผิดพลาดเกิดขึ้น',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'ข้อความถูกลบออกจากระบบแล้ว',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'ข้อความถูกลบไปแล้วหรือ อาจถูกย้ายไปโฟล์เดอร์อื่น',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'ไม่สามารถติตต่อระบบเมล์ได้ กรุณาแจ้งผู้ดูแลระบบ',
    'LBL_EMAIL_ERROR_MOVE' => 'ไม่สนับสนุนการย้ายอีเมล์ระหว่างเซิร์ฟเวอร์และบัญชีผู้ใช้จดหมายในเวลานี้',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'มีข้อผิดพลาดในการย้าย',
    'LBL_EMAIL_ERROR_NAME' => 'ต้องมีชื่อ',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'ต้องมีอีเมล์ผู้ส่ง กรุณากรอกอีเมล์ที่ใช้งานจริง',
    'LBL_EMAIL_ERROR_NO_FILE' => 'กรุณาให้ไฟล์',
    'LBL_EMAIL_ERROR_SERVER' => 'จำเป็นต้องมีที่อยู่อีเมล์เซิร์ฟเวอร์',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'บัญชีอาจไม่ถูกบันทึก',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'เกิดข้อผิดพลาดขณะเชี่อมต่อกับเมล์เซิร์ฟเวอร์',
    'LBL_EMAIL_ERROR_USER' => 'จำเป็นต้องมีชื่อเข้าสู่ระบบ',
    'LBL_EMAIL_ERROR_PORT' => 'จำเป็นต้องมีพอร์ตอีเมล์เซิร์ฟเวอร์',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'จำเป็นต้องมีโปรโตคอลสำหรับเซิร์ฟเวอร์',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'จำเป็นต้องมีโฟล์เดอร์สำหรับตรวจสอบ',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'จำเป็นต้องมีโฟล์เดอร์ถังขยะ',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'ไม่มีข้อมูลนี้',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'ไม่มีเซิร์ฟเวอร์เจาะจงสำหรับอีเมล์ขาออก',
    'LBL_EMAIL_ERROR_SENDING' => 'เกิดข้อผิดพลาดขณะส่งอีเมล กรุณาติดต่อผู้ดูแลระบบสำหรับความช่วยเหลือ',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'โฟลเดอร์',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'เพิ่ม',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'เพิ่มโฟลเดอร์ใหม่',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'เปลี่ยนชื่อโฟลเดอร์',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'บันทึก',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'เพิ่มโฟลเดอร์นี้ไปยัง',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'โฟลเดอร์นี้ไม่สามารถเปลี่ยนแปลงได้',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'คุณต้องการลบโฟลเดอร์นี้? \n กระบวนการนี้ไม่สามารถย้อนกลับได้\nโฟลเดอร์ทั้งหมดที่มีอยู่ภายในจะถูกลบทั้งหมด',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'ชื่อไฟล์ใหม่',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'กรุณาเลือกโฟลเดอร์ก่อนดำเนินการ',
    'LBL_EMAIL_FOLDERS_TITLE' => 'การจัดการโฟลเดอร์',

    'LBL_EMAIL_FORWARD' => 'ถัดไป',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'ดาวน์โหลดจำนวน [[count]] ของอีเมล์ทั้งหมด [[total]]',
    'LBL_EMAIL_FROM' => 'จาก',
    'LBL_EMAIL_GROUP' => 'กลุ่ม',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'กลุ่ม',
    'LBL_EMAIL_HOME_FOLDER' => 'หน้าหลัก',
    'LBL_EMAIL_IE_DELETE' => 'ลบบัญชีอีเมล์',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'ลบลายเซ็น',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'คุณแน่ใจที่จะลบบัญชีอีเมล์นี้?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'ทำการลบเรียบร้อย',
    'LBL_EMAIL_IE_SAVE' => 'กำลังบันทึกข้อมูลบัญชีอีเมล์',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'กำลังนำอีเมล์เข้าระบบ',
    'LBL_EMAIL_IMPORT_EMAIL' => 'นำเข้าไปยัง SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'นำเข้า',
    'LBL_EMAIL_INVALID' => 'ไม่ถูกต้อง',
    'LBL_EMAIL_LOADING' => 'โหลดข้อมูล...',
    'LBL_EMAIL_MARK' => 'ทำเครื่องหมาย',
    'LBL_EMAIL_MARK_FLAGGED' => 'ปักธงไว้',
    'LBL_EMAIL_MARK_READ' => 'อ่านแล้ว',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'ไม่ได้ปักธงไว้',
    'LBL_EMAIL_MARK_UNREAD' => 'ยังไม่ได้อ่าน',
    'LBL_EMAIL_ASSIGN_TO' => 'หมอบหมายให้',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'สร้างโฟลเดอร์',
    'LBL_EMAIL_MENU_COMPOSE' => 'เขียนถึง',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'ลบโฟลเดอร์',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'ล้างถังขยะ',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'ซิงค์',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'ลบไฟล์แคช',
    'LBL_EMAIL_MENU_REMOVE' => 'ลบออก',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'เปลี่ยนชื่อโฟลเดอร์',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'เปลี่ยนชื่อโฟลเดอร์',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'กรุณาเลือกตัวเลือกก่อนดำเนินการ',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'สร้างโฟลเดอร์ (โฟล์เดอร์นอก หรือ ใน SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'ลบโฟลเดอร์ (โฟล์เดอร์นอก หรือ ใน SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'ล้างโฟลเดอร์ถังขยะทั้งหมดสำหรับบัญชีจดหมายของคุณ',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'ตั้งว่าอ่านเมล์เหล่านี้แล้ว',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'ยกเลิกการตั้งเป็นเมล์สำคัญ',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'เปลี่ยนชื่อโฟลเดอร์ (โฟล์เดอร์นอก หรือ ใน SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'ข้อความ',

    'LBL_EMAIL_ML_NAME' => 'ชื่อรายการ',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'รายการที่อยู่ที่เลือกไว้',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'รายการที่อยู่ที่มี',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> เพื่อเลือกหลายอัน < br />(ผู้ใช้ Mac กด <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'ไม่ใช่',
    'LBL_EMAIL_NOT_SENT' => 'ระบบไม่สามารถประมวลได้ กรุณาติดต่อผู้ดูแลระบบ',

    'LBL_EMAIL_OK' => 'ตกลง',
    'LBL_EMAIL_ONE_MOMENT' => 'สักครู่...',
    'LBL_EMAIL_OPEN_ALL' => 'เปิดหลายข้อความ',
    'LBL_EMAIL_OPTIONS' => 'ตัวเลือก',
    'LBL_EMAIL_QUICK_COMPOSE' => 'เรียบเรียบด่วน',
    'LBL_EMAIL_OPT_OUT' => 'คัดออก',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'เลือกออกและไม่ถูกต้อง',
    'LBL_EMAIL_PERFORMING_TASK' => 'การทำงาน',
    'LBL_EMAIL_PRIMARY' => 'หลัก',
    'LBL_EMAIL_PRINT' => 'พิมพ์',

    'LBL_EMAIL_QC_BUGS' => 'ข้อผิดพลาด',
    'LBL_EMAIL_QC_CASES' => 'การติดตาม',
    'LBL_EMAIL_QC_LEADS' => 'ช่องทางการขาย',
    'LBL_EMAIL_QC_CONTACTS' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_EMAIL_QC_TASKS' => 'ภารกิจ',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'โอกาสการขาย',
    'LBL_EMAIL_QUICK_CREATE' => 'สร้างด่วน',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'สร้างโฟลเดอร์',
    'LBL_EMAIL_RELATE_TO' => 'ที่เกี่ยวข้อง',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'ดูความสัมพันธ์',
    'LBL_EMAIL_RECORD' => 'บันทึกอีเมล',
    'LBL_EMAIL_REMOVE' => 'ลบออก',
    'LBL_EMAIL_REPLY' => 'ตอบกลับ',
    'LBL_EMAIL_REPLY_ALL' => 'ตอบกลับทั้งหมด',
    'LBL_EMAIL_REPLY_TO' => 'ตอบกลับไปยัง',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'กำลังรับข้อมความมาแสดง',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'กำลังรับบันทึกอีเมล์มาแสดง',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'โปรดเลือกบันทึกอีเมล์เดียวเท่านั้น',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'กลับไปยังโมดูลก่อนหน้า',
    'LBL_EMAIL_REVERT' => 'ย้อนกลับ',
    'LBL_EMAIL_RELATE_EMAIL' => 'อีเมล์ที่เกี่ยวข้อง',

    'LBL_EMAIL_RULES_TITLE' => 'การจัดการกฏ',

    'LBL_EMAIL_SAVE' => 'บันทึก',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'บันทึกและตอบ',
    'LBL_EMAIL_SAVE_DRAFT' => 'บันทึกแบบร่าง',
    'LBL_EMAIL_DRAFT_SAVED' => 'บันทึกแบบร่างแล้ว',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage(
        'Search',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'วันที่เริ่มต้น',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'วันที่สิ้นสุด',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'ไม่มีผลลัพธ์ที่ตรงกับเกณฑ์การค้นหา',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'ผลการค้นหา',

    'LBL_EMAIL_SELECT' => 'เลือก',

    'LBL_EMAIL_SEND' => 'ส่ง',
    'LBL_EMAIL_SENDING_EMAIL' => 'ส่งอีเมล',

    'LBL_EMAIL_SETTINGS' => 'ตั้งค่า',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'บัญชี',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'ลบแบบฟอร์ม',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'ตรวจสอบอีเมล์ใหม่',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'จากที่อยู่',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'อีเมล์สำหรับการแจ้งเตือนการทดสอบ:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'ชื่อผู้ส่ง',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'ตอบกลับไปยังที่อยู่',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'ซิงโครไนส์บัญชีทั้งหมด',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'อีเมล์ถูกส่งไปยังอีเมล์ที่ระบุไว้ในการตั้งค่าจดหมายขาออก กรุณาตรวจสอบว่าได้รับอีเมล์ เพื่อยืนยันการตั้งค่าได้ถูกต้อง',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'ดูบันทึกล็อก SMTP แบบทั้งหมด',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'ทำการซิงโครไนส์เต็มรูปแบบหรือไม่ \n บัญชีอีเมลที่มีขนาดใหญ่อาจใช้เวลาสักครู่',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'คลิกปุ่ม Shift หรือ Ctrl เพื่อเลือกหลาย ๆ โฟลเดอร์',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'ทั่วไป',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'สร้างกลุ่มโฟลเดอร์ใหม่',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'แก้ใขกลุ่มโฟลเดอร์',

    'LBL_EMAIL_SETTINGS_NAME' => 'ชื่อ',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'เลือกจำนวนของอีเมล์ต่อหนึ่งหน้าในกล่องขาเข้า การตั้งค่านี้อาจต้องรีเฟรชหน้าเพื่อเห็นผล',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'กำลังดึงข้อมูลบัญชีจดหมาย',
    'LBL_EMAIL_SETTINGS_SAVED' => 'บันทึกการตั้งค่าแล้ว',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'ส่งอีเมล์ข้อความล้วนเท่านั้น',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'อีเมล์ต่อหน้า',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'การตั้งค่าภาพ',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'การตั้งค่า',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'โฟลเดอร์สำหรับผู้ใช้งาน',
    'LBL_EMAIL_ERROR_PREPEND' => 'เกิดข้อผิดพลาดทางอีเมล:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'เซิร์ฟเวอร์จดหมายขาออกที่เลือกสำหรับบัญชีอีเมลที่คุณใช้ไม่ถูกต้อง ตรวจสอบการตั้งค่า หรือเลือกเซิร์ฟเวอร์จดหมายที่แตกต่างกันสำหรับบัญชีอีเมล',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'ไม่มีการกำหนดค่าเซิร์ฟเวอร์อีเมลขาออกเพื่อส่งอีเมล์ กรุณากำหนดค่าเซิร์ฟเวอร์อีเมลขาออก หรือเลือกเซิร์ฟเวอร์อีเมลขาออกสำหรับบัญชีอีเมลที่คุณใช้ใน การตั้งค่า >> บัญชี',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'ลายเซ็นเริ่มต้น',
    'LBL_EMAIL_SIGNATURES' => 'ลายเซ็น',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'อื่นๆ',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[โฟลเดอร์ด้านนอก]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[โฟลเดอร์ SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'หัวเรื่อง',
    'LBL_EMAIL_SUCCESS' => 'สำเร็จ',
    'LBL_EMAIL_SUITE_FOLDER' => 'โฟลเดอร์ SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'เนื้อหาในแบบอีเมล์ว่างเปล่า',
    'LBL_EMAIL_TEMPLATES' => 'แม่แบบ',
    'LBL_EMAIL_TO' => 'ผู้รับ',
    'LBL_EMAIL_VIEW' => 'ดู',
    'LBL_EMAIL_VIEW_HEADERS' => 'แสดงส่วนหัว',
    'LBL_EMAIL_VIEW_RAW' => 'แสดงอีเมล',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'คุณลักษณะนี้ไม่สนับสนุนเมื่อใช้กับ POP3',
    'LBL_DEFAULT_LINK_TEXT' => 'ค่าเริ่มต้น link text.',
    'LBL_EMAIL_YES' => 'ถูกต้อง',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'ส่งอีเมล์ทดสอบ',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'ส่งอีเมลการทดสอบแล้ว',
    'LBL_EMAIL_MESSAGE_NO' => 'หมายเลขข้อความ',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'นำเข้าผ่าน',
    'LBL_EMAIL_IMPORT_FAIL' => 'นำเข้าล้มเหลวเนื่องจากข้อความนำเข้าแล้ว หรือลบออกจากเซิร์ฟเวอร์แล้ว',

    'LBL_LINK_NONE' => 'ไม่มี',
    'LBL_LINK_ALL' => 'ทั้งหมด',
    'LBL_LINK_RECORDS' => 'บันทึก',
    'LBL_LINK_SELECT' => 'เลือก',
    'LBL_LINK_ACTIONS' => 'การดำเนินการ',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'ยืน​ยัน',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'คุณต้องการปิดหรือไม่ #module',
    'LBL_INVALID_FILE_EXTENSION' => 'นามสกุลของแฟ้มไม่ถูกต้อง',

    'ERR_AJAX_LOAD' => 'มีข้อผิดพลาดเกิดขึ้น',
    'ERR_AJAX_LOAD_FAILURE' => 'ข้อผิดพลาดในการประมวลผลคำขอของคุณ โปรดลองอีกครั้งในภายหลัง',
    'ERR_AJAX_LOAD_FOOTER' => 'ถ้าข้อผิดพลาดนี้ยังคงอยู่ กรุณาให้ผู้ดูแลระบบของคุณปิดการใช้งาน Ajax สำหรับโมดูนี้',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'ตัวแยกเลขทศนิยมไม่สามารถใช้อักขระเดียวกันกับตัวแยกเลขหลักพัน กรุณาเปลี่ยนค่า',
    'ERR_DELETE_RECORD' => 'ต้องระบุหมายเลขเรกคอร์ดเพื่อลบผู้ติดต่อ',
    'ERR_EXPORT_DISABLED' => 'ปิดตัวส่งออก',
    'ERR_EXPORT_TYPE' => 'มีข้อผิดพลาดในการนำออกข้อมูล ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'อีเมล์ไม่ถูกต้อง',
    'ERR_INVALID_FILE_REFERENCE' => 'อ้างอิงแฟ้มไม่ถูกต้อง',
    'ERR_NO_HEADER_ID' => 'คุณลักษณะนี้จะพร้อมใช้งานในรูปแบบนี้',
    'ERR_NOT_ADMIN' => 'ไม่ได้รับอนุญาต',
    'ERR_MISSING_REQUIRED_FIELDS' => 'ฟิลด์ที่จำเป็นยังไม่ได้กรอก',
    'ERR_INVALID_REQUIRED_FIELDS' => 'ฟิลด์ต้องการไม่ถูกต้อง:',
    'ERR_INVALID_VALUE' => 'ค่าไม่ถูกต้อง:',
    'ERR_NO_SUCH_FILE' => 'ไม่มีไฟล์นี้บนระบบ',
    'ERR_NO_SINGLE_QUOTE' => 'ไม่สามารถใช้เครื่องหมายอัญประกาศเดี่ยวสำหรับ ',
    'ERR_NOTHING_SELECTED' => 'กรุณาเลือกก่อนดำเนินการต่อ',
    'ERR_SELF_REPORTING' => 'ผู้ใช้ไม่สามารถรายงานต่อเขาหรือตัวเอง',
    'ERR_SQS_NO_MATCH_FIELD' => 'ไม่ตรงกับฟิลด์: ',
    'ERR_SQS_NO_MATCH' => 'ไม่ตรงกัน',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'โปรดระบุ \'Key\' Index ในแอตทริบิวต์ displayParams สำหรับกำหนด Meta-Data',
    'ERR_EXISTING_PORTAL_USERNAME' => 'ข้อผิดพลาด: ชื่อเว็บไซต์ได้กำหนดให้กับผู้ติดต่ออื่น',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value ไม่สามารถใช้ได้กับ precision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'เกิดข้อผิดพลาดเมื่อคุณพยายามบันทึกไปยังบัญชีภายนอก',
    'ERR_NO_DB' => 'ไม่สามารถเชื่อมต่อไปยังฐานข้อมูล โปรดดูที่ suitecrm.log สำหรับรายละเอียด',
    'ERR_DB_FAIL' => 'ความล้มเหลวในฐานข้อมูล โปรดดูที่ suitecrm.log สำหรับรายละเอียด',
    'ERR_DB_VERSION' => 'SuiteCRM {0} ไฟล์สามารถใช้ได้เฉพาะกับ SuiteCRM {1} ฐานข้อมูล.',

    'LBL_ACCOUNT' => 'ข้อมูลลูกค้า',
    'LBL_ACCOUNTS' => 'ข้อมูลลูกค้า',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'กิจกรรม',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'ดูสรุป',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'ดูสรุป',
    'LBL_ADD_BUTTON' => 'เพิ่ม',
    'LBL_ADD_DOCUMENT' => 'เพิ่มเอกสาร',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'เพิ่มรายการเป้าหมาย',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'เพิ่มผู้ติดต่อเป้าหมายรายการ',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'คลิกที่นี่เพื่อปิด',
    'LBL_ADDITIONAL_DETAILS' => 'ข้อมูลเพิ่มเติม',
    'LBL_ADMIN' => 'ผู้ดูแล',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'เอกสารเก่า',
    'LBL_ASSIGNED_TO_USER' => 'มอบหมายให้',
    'LBL_ASSIGNED_TO' => 'กำหนดให้:',
    'LBL_BACK' => 'ย้อนกลับ',
    'LBL_BILLING_ADDRESS' => 'ที่อยู่เรียกเก็บเงิน',
    'LBL_QUICK_CREATE' => 'สร้าง',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - เปิดแหล่ง CRM',
    'LBL_BUGS' => 'ข้อผิดพลาด',
    'LBL_BY' => 'โดย',
    'LBL_CALLS' => 'บันทึกการโทร',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'ส่งอีเมลส่งเสริมการขายที่จัดคิวไว้',
    'LBL_SUBMIT_BUTTON_LABEL' => 'ยืนยัน',
    'LBL_CASE' => 'การติดตาม',
    'LBL_CASES' => 'การติดตาม',
    'LBL_CHANGE_PASSWORD' => 'เปลี่ยนรหัสผ่าน',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'เลือกทั้งหมด',
    'LBL_CITY' => 'อำเภอ/เขต',
    'LBL_CLEAR_BUTTON_LABEL' => 'ล้างออก',
    'LBL_CLEAR_BUTTON_TITLE' => 'ล้างออก',
    'LBL_CLEARALL' => 'ล้างทั้งหมด',
    'LBL_CLOSE_BUTTON_TITLE' => 'ปิด',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'ปิด และสร้างใหม่',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'ปิด และสร้างใหม่',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'เขียนอีเมล',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'เขียนอีเมล',
    'LBL_SEARCH_DROPDOWN_YES' => 'ถูกต้อง',
    'LBL_SEARCH_DROPDOWN_NO' => 'ไม่ใช่',
    'LBL_CONTACT_LIST' => 'รายชื่อผู้ติดต่อ',
    'LBL_CONTACT' => 'ข้อมูลผู้ที่ติดต่อ',
    'LBL_CONTACTS' => 'ผู้ติดต่อ',
    'LBL_CONTRACT' => 'สัญญา',
    'LBL_CONTRACTS' => 'สัญญา',
    'LBL_COUNTRY' => 'ประเทศ:',
    'LBL_CREATE_BUTTON_LABEL' => 'สร้าง',
    'LBL_CREATED_BY_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_CREATED_USER' => 'สร้างโดยผู้ใช้งาน',
    'LBL_CREATED' => 'สร้างโดย',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'สกุลเงิน:',
    'LBL_DOCUMENTS' => 'เอกสาร',
    'LBL_DATE_ENTERED' => 'วันที่ที่สร้าง',
    'LBL_DATE_MODIFIED' => 'วันที่แก้ไขครั้งสุดท้าย:',
    'LBL_EDIT_BUTTON' => 'แก้ไข',
    'LBL_DUPLICATE_BUTTON' => 'ทำซ้ำ',
    'LBL_DELETE_BUTTON' => 'ลบ',
    'LBL_DELETE' => 'ลบ',
    'LBL_DELETED' => 'ลบ',
    'LBL_DIRECT_REPORTS' => 'รายงานโดยตรง',
    'LBL_DONE_BUTTON_LABEL' => 'เรียบร้อย',
    'LBL_DONE_BUTTON_TITLE' => 'เรียบร้อย',
    'LBL_FAVORITES' => 'รายการโปรด',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'กรุณาเลือกไฟล์ vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'ทำการระบุข้อมูลไม่ครบสำหรับการใช้งาน vCard กรุณาตรวจสอบรายละเอียดเพิ่มเติมในไฟล์ suitecrm.log',
    'LBL_VCARD_ERROR_FILESIZE' => 'ไฟล์ที่อัปโหลดขนาดเกิน 30000 ไบต์ ที่ระบุไว้ในแบบฟอร์ม HTML',
    'LBL_VCARD_ERROR_DEFAULT' => 'เกิดข้อผิดพลาดขณะอัปโหลดไฟล์ vCard โปรดดูที่ suitecrm.log สำหรับรายละเอียด',
    'LBL_IMPORT_VCARD' => 'VCard นำเข้า:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'VCard นำเข้า:',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'VCard นำเข้า:',
    'LBL_VIEW_BUTTON' => 'ดู',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'อีเมล์เป็น PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'อีเมล์เป็น PDF',
    'LBL_EMAILS' => 'อีเมล',
    'LBL_EMPLOYEES' => 'พนักงาน',
    'LBL_ENTER_DATE' => 'กรอกวันที่',
    'LBL_EXPORT' => 'ส่งออก',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'เริ่มต้น',
    'LBL_HIDE' => 'ซ่อน',
    'LBL_ID' => 'ไอดี',
    'LBL_IMPORT' => 'นำเข้า',
    'LBL_IMPORT_STARTED' => 'นำเข้าเริ่มต้น: ',
    'LBL_LAST_VIEWED' => 'ดูล่าสูด',
    'LBL_LEADS' => 'ช่องทางการขาย',
    'LBL_LESS' => 'ย่อลง',
    'LBL_CAMPAIGN' => 'แคมเปญ:',
    'LBL_CAMPAIGNS' => 'แคมเปญ',
    'LBL_CAMPAIGNLOG' => 'บันทึกแคมเปญ',
    'LBL_CAMPAIGN_CONTACT' => 'แคมเปญ',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'ไม่มี',
    'LBL_THEME' => 'ธีม:',
    'LBL_FOUND_IN_RELEASE' => 'พบในรุ่น',
    'LBL_FIXED_IN_RELEASE' => 'แก้ไขในรุ่น',
    'LBL_LIST_ACCOUNT_NAME' => 'ชื่อบัญชีลูกค้า',
    'LBL_LIST_ASSIGNED_USER' => 'ผู้รับผิดชอบ',
    'LBL_LIST_CONTACT_NAME' => 'ชื่อผู้ที่ติดต่อ',
    'LBL_LIST_CONTACT_ROLE' => 'ชื่อผู้ที่ติดต่อ',
    'LBL_LIST_DATE_ENTERED' => 'วันที่สร้าง',
    'LBL_LIST_EMAIL' => 'อีเมล',
    'LBL_LIST_NAME' => 'ชื่อ',
    'LBL_LIST_OF' => 'ของ',
    'LBL_LIST_PHONE' => 'โทรศัพท์',
    'LBL_LIST_RELATED_TO' => 'เกี่ยวข้องเป็น',
    'LBL_LIST_USER_NAME' => 'ชื่อผู้ใช้งาน',
    'LBL_LISTVIEW_NO_SELECTED' => 'กรุณาเลือกบันทึกอย่างน้อย 1 บันทึกในการดำเนินการ',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'กรุณาเลือกบันทึกอย่างน้อย 2 บันทึกในการดำเนินการ',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'เรกคอร์ดที่เลือก',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'รายการที่เลือก: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'ดาวิด',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'ลิฟวิงสโตน',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'ดร.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'ยกเลิก',
    'LBL_VERIFY' => 'ตรวจสอบ',
    'LBL_RESEND' => 'ส่งอีกครั้ง',
    'LBL_PROFILE' => 'ข้อมูลส่วนตัว',
    'LBL_MAILMERGE' => 'จดหมายเวียน',
    'LBL_MASS_UPDATE' => 'การอัพเดตโดยรวม',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'ไม่มีช่องว่างสำหรับ the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'ปฏิเสธอีเมลหลัก',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'เลือกอีเมลหลัก',
    'LBL_MEETINGS' => 'ประชุม',
    'LBL_MEETING_GO_BACK' => 'กลับไปยังการประชุม',
    'LBL_MEMBERS' => 'สมาชิก',
    'LBL_MEMBER_OF' => 'สมาชิกของ',
    'LBL_MODIFIED_BY_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_MODIFIED_USER' => 'แก้ไขโดยผู้ใช้',
    'LBL_MODIFIED' => 'แก้ไขโดย',
    'LBL_MODIFIED_NAME' => 'แก้ไขโดยชื่อ',
    'LBL_MORE' => 'เพิ่มเติม',
    'LBL_MY_ACCOUNT' => 'ตังค่าส่วนตัว',
    'LBL_NAME' => 'ชื่อ',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'สร้าง',
    'LBL_NEW_BUTTON_TITLE' => 'สร้าง',
    'LBL_NEXT_BUTTON_LABEL' => 'ถัดไป',
    'LBL_NONE' => '-ไม่มี-',
    'LBL_NOTES' => 'บันทึกย่อ',
    'LBL_OPPORTUNITIES' => 'โอกาสการขาย',
    'LBL_OPPORTUNITY_NAME' => 'ชื่อของโอกาส',
    'LBL_OPPORTUNITY' => 'โอกาสการขาย',
    'LBL_OR' => 'หรือ',
    'LBL_PANEL_OVERVIEW' => 'ภาพรวม',
    'LBL_PANEL_ASSIGNMENT' => 'อื่น ๆ',
    'LBL_PANEL_ADVANCED' => 'ข้อมูลมากกว่านี้',
    'LBL_PARENT_TYPE' => 'ชนิดหลัก',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'รหัสไปรษณีย์:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'เมืองที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ประเทศที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'รหัสไปรษณีย์ที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'รัฐที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ถนนที่อยู่หลัก 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ถนนที่อยู่หลัก 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ถนนที่อยู่หลัก:',
    'LBL_PRIMARY_ADDRESS' => 'ที่อยู่ในบัตรประจำตัว:',

    'LBL_PROSPECTS' => 'คาดการณ์',
    'LBL_PRODUCTS' => 'สินค้า',
    'LBL_PROJECT_TASKS' => 'แผนงานโครงการ',
    'LBL_PROJECTS' => 'โครงการ',
    'LBL_QUOTES' => 'ใบเสนอราคา',

    'LBL_RELATED' => 'ที่เกี่ยวข้อง',
    'LBL_RELATED_RECORDS' => 'เรกคอร์ดที่เกี่ยวข้อง',
    'LBL_REMOVE' => 'ลบออก',
    'LBL_REPORTS_TO' => 'รายงานไปยัง',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'บ่งชี้ฟิลด์ที่จำเป็น',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'เรียบร้อย',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'แบบฟอร์มแบบเต็ม',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'แบบฟอร์มแบบเต็ม',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'บันทึก และสร้างใหม่',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'บันทึก และสร้างใหม่',
    'LBL_SAVE_OBJECT' => 'บันทึก {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'C',
    'LBL_SEARCH_BUTTON_LABEL' => 'ค้นหา',
    'LBL_SEARCH_BUTTON_TITLE' => 'ค้นหา',
    'LBL_FILTER' => 'คัดกรอง',
    'LBL_SEARCH' => 'ค้นหา',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'เพิ่มเติม',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'รูปแบบไฟล์ไม่ถูกต้อง สามารถอัปโหลดไฟล์รูปภาพได้เท่านั้น',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'เลือก',
    'LBL_SELECT_BUTTON_TITLE' => 'เลือก',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'เรียกดูเอกสาร',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'เรียกดูเอกสาร',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'เลือกรายการ',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'เลือกรายการ',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'เลือกแบบรายงาน',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'เลือกรายงาน',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'เลือกสมาชิก',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'เลือกสมาชิก',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'ล้างส่วนที่เลือก',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'ล้างส่วนที่เลือก',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'ล้างส่วนที่เลือก',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'ล้างส่วนที่เลือก',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'เลือกไฟล์',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'เลือกไฟล์',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'ล้างไฟล์',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'ล้างไฟล์',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'เลือกสมาชิก',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'เลือกสมาชิก',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'ไฟล์ผู้ใช้งาน',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'ไฟล์ผู้ใช้งาน',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'เลือกบัญชีลูกค้า',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'เลือกบัญชีลูกค้า',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'ยกเลิกบัญชีลูกค้า',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'ยกเลิกบัญชีลูกค้า',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'เลือกแคมเปญ',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'เลือกแคมเปญ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'ล้างแคมเปญ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'ล้างแคมเปญ',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'เลือกรายการ',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'เลือกรายการ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'ล้างผู้ติดต่อ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'ล้างผู้ติดต่อ',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'เลือกทีม',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'เลือกทีม',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'ล้างทีม',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'ล้างทีม',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'ทรัพยากรที่ใช้ในการสร้างหน้านี้ (สอบถาม แฟ้ม)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'วินาที',
    'LBL_SERVER_RESPONSE_TIME' => 'เวลาตอบสนองของเซิร์ฟเวอร์:',
    'LBL_SERVER_MEMORY_BYTES' => 'ไบต์',
    'LBL_SERVER_MEMORY_USAGE' => 'หน่วยความจำของเซิร์ฟเวอร์ที่ใช้: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'การใช้งาน: -โมดูล: {0} - การดำเนินการ: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'ใช้หน่วยความจำสูงสุดของเซิร์ฟเวอร์: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'ที่อยู่จัดส่ง',
    'LBL_SHOW' => 'แสดง',
    'LBL_STATE' => 'รัฐ',
    'LBL_STATUS_UPDATED' => 'สถานะของกิจกรรมนี้ได้ปรับปรุงแล้ว',
    'LBL_STATUS' => 'สถานะ',
    'LBL_STREET' => 'ถนน',
    'LBL_SUBJECT' => 'หัวเรื่อง',

    'LBL_INBOUNDEMAIL_ID' => 'รหัสอีเมล์ขาเข้า',

    'LBL_SCENARIO_SALES' => 'การขาย',
    'LBL_SCENARIO_MARKETING' => 'การตลาด',
    'LBL_SCENARIO_FINANCE' => 'การเงิน',
    'LBL_SCENARIO_SERVICE' => 'บริการ',
    'LBL_SCENARIO_PROJECT' => 'การบริหารโครงการ',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'สถานการณ์สมมตินี้อำนวยความสะดวกในการจัดการสินค้าการขาย',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'สถานการณ์สมมตินี้อำนวยความสะดวกในการขายการตลาด',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'สถานการณ์สมมตินี้อำนวยความสะดวกในการจัดการการเงินการขาย',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'สถานการณ์สมมตินี้อำนวยความสะดวกในการจัดการบริการการขาย',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'สถานการณ์สมมตินี้อำนวยความสะดวกในการจัดการโครงการของรายการ',

    'LBL_SYNC' => 'แลกเปลี่ยน',
    'LBL_TABGROUP_ALL' => 'ทั้งหมด',
    'LBL_TABGROUP_ACTIVITIES' => 'กิจกรรม',
    'LBL_TABGROUP_COLLABORATION' => 'การโต้ตอบสื่อสาร',
    'LBL_TABGROUP_MARKETING' => 'การตลาด',
    'LBL_TABGROUP_OTHER' => 'อื่นๆ',
    'LBL_TABGROUP_SALES' => 'การขาย',
    'LBL_TABGROUP_SUPPORT' => 'การสนับสนุนช่วยเหลือลูกค้า',
    'LBL_TASKS' => 'งาน',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'เก็บอีเมลถาวร',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'เก็บอีเมลถาวร',
    'LBL_UNDELETE_BUTTON_LABEL' => 'ยกเลิกลบ',
    'LBL_UNDELETE_BUTTON_TITLE' => 'ยกเลิกลบ',
    'LBL_UNDELETE_BUTTON' => 'ยกเลิกลบ',
    'LBL_UNDELETE' => 'ยกเลิกลบ',
    'LBL_UNSYNC' => 'ไม่ซิงค์',
    'LBL_UPDATE' => 'ปรับปรุง',
    'LBL_USER_LIST' => 'รายชื่อผู้ใช้',
    'LBL_USERS' => 'ผู้ใช้งาน',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'การตรวจสอบสำหรับรายการที่มีอยู่ในอีเมล',
    'LBL_VERIFY_PORTAL_NAME' => 'ตรวจสอบชื่อพอร์ทัลที่อยู่...',
    'LBL_VIEW_IMAGE' => 'แสดง',

    'LNK_ABOUT' => 'เกี่ยวกับ',
    'LNK_ADVANCED_FILTER' => 'ตัวกรองขั้นสูง',
    'LNK_BASIC_FILTER' => 'ตัวกรองด่วน',
    'LBL_ADVANCED_SEARCH' => 'ตัวกรองขั้นสูง',
    'LBL_QUICK_FILTER' => 'ตัวกรองด่วน',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'แสดงทั้งหมด',
    'LNK_CLOSE' => 'ปิด',
    'LBL_MODIFY_CURRENT_FILTER' => 'ปรับเปลี่ยนตัวกรองปัจจุบัน',
    'LNK_SAVED_VIEWS' => 'บันทึกรูปแบบการค้นหา',
    'LNK_DELETE' => 'ลบ',
    'LNK_EDIT' => 'แก้ไข',
    'LNK_GET_LATEST' => 'รับล่าสุด',
    'LNK_GET_LATEST_TOOLTIP' => 'แทนที่ ด้วยรุ่นล่าสุด',
    'LNK_HELP' => 'ช่วยเหลือ',
    'LNK_CREATE' => 'สร้าง',
    'LNK_LIST_END' => 'สุดท้าย',
    'LNK_LIST_NEXT' => 'ถัดไป',
    'LNK_LIST_PREVIOUS' => 'ย้อนกลับ',
    'LNK_LIST_RETURN' => 'กลับไปรายการ',
    'LNK_LIST_START' => 'เริ่มต้น',
    'LNK_LOAD_SIGNED' => 'ลงชื่อเข้าใช้',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'เซ็นเอกสารแทน',
    'LNK_PRINT' => 'พิมพ์',
    'LNK_BACKTOTOP' => 'กลับไปข้างบน',
    'LNK_REMOVE' => 'ลบออก',
    'LNK_RESUME' => 'ทำใหม่',
    'LNK_VIEW_CHANGE_LOG' => 'ดูความเปลี่ยนแปลง',

    'NTC_CLICK_BACK' => 'กรุณาคลิกที่ปุ่มย้อนกลับของเบราว์เซอร์ และแก้ไขข้อผิดพลาด',
    'NTC_DATE_FORMAT' => '(ปปปป-ดด-วว)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'คุณแน่ใจว่าต้องการลบบันทึกที่เลือกหรือไม่?',
    'NTC_TEMPLATE_IS_USED' => 'รูปแบบนี้ใช้งานอยู่อย่างน้อยหนึ่งบันทึกการตลาดอีเมล์ คุณแน่ใจว่าต้องการลบหรือไม่',
    'NTC_TEMPLATES_IS_USED' => 'แม่แบบต่อไปนี้จะใช้ในอีเมล์การตลาดระเบียน คุณแน่ใจคุณต้องการลบออกหรือไม่' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'คุณแน่ใจไหมที่ต้องการจะลบบันทึกนี้?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'คุณแน่ใจไหมที่ต้องการจะลบ ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'คุณแน่ใจไหมที่ต้องการจะปรับปรุง ',
    'NTC_DELETE_SELECTED_RECORDS' => ' เรกคอร์ดที่เลือก',
    'NTC_LOGIN_MESSAGE' => 'กรุณาป้อนชื่อผู้ใช้และรหัสผ่านของคุณ',
    'NTC_NO_ITEMS_DISPLAY' => 'ไม่มี',
    'NTC_REMOVE_CONFIRMATION' => 'คุณต้องการลบความสัมพันธ์นี้แน่ใจหรือไม่ ความสัมพันธ์จะถูกลบออก แต่บันทึกจะไม่ถูกลบ',
    'NTC_REQUIRED' => 'บ่งชี้ฟิลด์ที่จำเป็น',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'เริ่มต้น',
    'NTC_YEAR_FORMAT' => '(ปปปป)',
    'WARN_UNSAVED_CHANGES' => 'คุณกำลังจะออกจากเรกคอร์ดนี้ที่ไม่บันทึกการเปลี่ยนแปลงใด ๆ ที่คุณอาจทำการบันทึก คุณต้องการออกจากเรกคอร์ดนี้แน่ใจหรือไม่',
    'ERROR_NO_RECORD' => 'ข้อผิดพลาดขณะเรียกดูบันทึก  บันทึกนี้อาจถูกลบ หรือคุณอาจไม่ได้รับอนุญาตให้ดู',
    'WARN_BROWSER_VERSION_WARNING' => '<b>คำเตือน: </b> ไม่สนับสนุนรุ่นของเบราว์เซอร์ของคุณ หรือคุณใช้เบราว์เซอร์ที่ไม่สนับสนุน <p></p> แนะนำรุ่นของเบราว์เซอร์ต่อไปนี้: <p></p> <ul> <li> Internet Explorer 10 (ไม่สนับสนุนมุมมองความเข้ากันได้) <li> 32.0 <li> Safari 5.1 <li> Chrome 37 Firefox </ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>คำเตือน: </b> เบราว์เซอร์ของคุณอยู่ในมุมมองความเข้ากันได้ IE ซึ่งไม่สนับสนุน',
    'ERROR_TYPE_NOT_VALID' => 'ข้อผิดพลาด ชนิดนี้ไม่ถูกต้อง',
    'ERROR_NO_BEAN' => 'ไม่สามารถรับ bean',
    'LBL_DUP_MERGE' => 'ค้นหารายการซ้ำ',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'จัดการการสมัคร',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'จัดการการสมัครสำหรับ',
    // Ajax status strings
    'LBL_LOADING' => 'โหลดข้อมูล...',
    'LBL_SEARCHING' => 'กำลังค้นหา...',
    'LBL_SAVING_LAYOUT' => 'บันทึกเค้าโครง...',
    'LBL_SAVED_LAYOUT' => 'เค้าโครงได้รับการบันทึกแล้ว',
    'LBL_SAVED' => 'บันทึก',
    'LBL_SAVING' => 'กำลังบันทึก',
    'LBL_DISPLAY_COLUMNS' => 'แสดงคอลัมน์',
    'LBL_HIDE_COLUMNS' => 'ซ่อนคอลัมน์',
    'LBL_SEARCH_CRITERIA' => 'เงื่อนไข การค้นหา',
    'LBL_SAVED_VIEWS' => 'บันทึกมุมมอง',
    'LBL_PROCESSING_REQUEST' => 'กำลังดำเนินการ',
    'LBL_REQUEST_PROCESSED' => 'เรียบร้อย',
    'LBL_AJAX_FAILURE' => 'ความล้มเหลวของ Ajax',
    'LBL_MERGE_DUPLICATES' => 'รวมรายการที่ซ้ำ',
    'LBL_SAVED_FILTER_SHORTCUT' => 'ตัวกรองของฉัน',
    'LBL_SEARCH_POPULATE_ONLY' => 'ทำการค้นหาโดยใช้แบบฟอร์มค้นหาด้านบน',
    'LBL_DETAILVIEW' => 'ดูรายละเอียด',
    'LBL_LISTVIEW' => 'มุมมองรายการ',
    'LBL_EDITVIEW' => 'แก้ไขมุมมอง',
    'LBL_BILLING_STREET' => 'ถนน:',
    'LBL_SHIPPING_STREET' => 'ถนน:',
    'LBL_SEARCHFORM' => 'แบบฟอร์มการค้นหา',
    'LBL_SAVED_SEARCH_ERROR' => 'โปรดตั้งชื่อให้มุมมองนี้',
    'LBL_DISPLAY_LOG' => 'แสดงบันทึก',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'ระบบ',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'เซสชันหมดเวลา',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'เซสชันของคุณจะหมดเวลาใน2 นาที กรุณาบันทึกงานของคุณ',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'เซสชั่นของคุณหมดเวลาแล้ว',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'ประชุม',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'การติดต่อ',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'เวลา:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'สถานที่:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'รายละเอียด: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'สถานะ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'เกี่ยวข้องกับ: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'เหตุการณ์',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'เหตุการณ์ไม่ได้ถูกกำหนด',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'สถานที่ไม่ได้ถูกกำหนด',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'วันเริ่มต้นไม่ได้กำหนด',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'ไม่พบสิ่งที่ต้องการ',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'ไม่พบผลการค้นหา... ลองเปลี่ยนตัวเลือกการค้นหาและลองอีกครั้ง',
    'MSG_LIST_VIEW_NO_RESULTS' => 'ไม่พบผลลัพธ์สำหรับ <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'สร้าง <item1>เป็น <item2>แบบใหม่',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'หรือเปลี่ยนเงื่อนไขการค้นหา',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'ขณะนี้คุณไม่มีเรกคอร์ดที่บันทึกไว้ <item2> หรือ <item3>',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'เพิ่มในรายการโปรดของฉัน',
    'LBL_CREATE_CONTACT' => 'สร้างบัญชีผู้ติดต่อ',
    'LBL_CREATE_CASE' => 'สร้างเคส',
    'LBL_CREATE_NOTE' => 'สร้างบันทึก',
    'LBL_CREATE_OPPORTUNITY' => 'สร้างเป้าหมายการขาย',
    'LBL_SCHEDULE_CALL' => 'ข้อมูลการโทร',
    'LBL_SCHEDULE_MEETING' => 'จัดตารางการประชุม',
    'LBL_CREATE_TASK' => 'สร้างงาน',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'สร้างแบบฟอร์ม',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'บันทึกแบบฟอร์มเว็บ',
    'LBL_AVAILABLE_FIELDS' => 'ฟิลด์ที่พร้อมใช้',
    'LBL_FIRST_FORM_COLUMN' => 'คอลัมน์แรกของแบบฟอร์ม',
    'LBL_SECOND_FORM_COLUMN' => 'คอลัมน์ที่สองของแบบฟอร์ม',
    'LBL_ASSIGNED_TO_REQUIRED' => 'ขาดฟิลด์ที่จำเป็น: กำหนดให้',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'ขาดฟิลด์ที่จำเป็น: ส่งเสริมการขายที่เกี่ยวข้อง',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'เว็บฟอร์มเพื่อสร้าง ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'ส่งแบบฟอร์มนี้จะสร้าง ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'เพิ่มฟิลด์ข้อมูลทั้งหมด',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'ตั้งค่าฟิลด์ทั้งหมด',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'ลบฟิลด์ทั้งหมด',
    'LBL_NEXT_BTN' => 'ถัดไป',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'สามารถแนบไฟล์รูปภาพประเภทที่สนับสนุนต่อไปนี้เท่านั้น: JPG, PNG.',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'เปลี่ยนฐานข้อมูล context to แล้ว',
    'ERR_MSSQL_WARNING' => 'คำเตือน',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'ข้อผิดพลาด: [[file]] ของแฟ้มหายไป  ไม่สามารถสร้างเนื่องจากพบแฟ้ม HTML ที่ไม่สอดคล้องกัน',
    'ERR_CANNOT_FIND_MODULE' => 'ข้อผิดพลาด: โมดูล [module] ไม่มีอยู่',
    'LBL_ALT_ADDRESS' => 'ที่อยู่ที่ติดต่อสะดวก:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'ข้อผิดพลาด: มีจำนวนไม่เท่ากันของอาร์กิวเมนต์สำหรับองค์ประกอบ \'สำคัญ\' และ \'สำเนา\' ในอาร์เรย์ displayParams',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'ทั่วไป',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'คัดกรอง',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'เพียงรายการของฉัน',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'ตำแหน่ง',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'แสดงแถว',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'คุณได้มาถึงจำนวนสูงสุดของ SuiteCRM Dashlets ที่มีการตั้งค่าโดยผู้ดูแลระบบของคุณ กรุณาลบ SuiteCRM Dashlet เพื่อเพิ่ม',
    'LBL_ADDING_DASHLET' => 'เพิ่ม SuiteCRM Dashlet ...',
    'LBL_ADDED_DASHLET' => 'เพิ่ม SuiteCRM Dashlet แล้ว',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'คุณต้องการลบ SuiteCRM Dashlet หรือไม่',
    'LBL_REMOVING_DASHLET' => 'กำลังลบ SuiteCRM Dashlet ...',
    'LBL_REMOVED_DASHLET' => 'ลบ SuiteCRM Dashlet แล้ว',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'กำลังโหลดหน้า รอสักครู่.....',

    'LBL_RELOAD_PAGE' => 'กรุณา<a href="javascript: window.location.reload()">โหลดหน้าต่าง</a>ที่จะใช้ SuiteCRM Dashlet',
    'LBL_ADD_DASHLETS' => 'เพิ่ม Dashlets',
    'LBL_CLOSE_DASHLETS' => 'ปิด',
    'LBL_OPTIONS' => 'ตัวเลือก',
    'LBL_1_COLUMN' => '1 คอลัมน์',
    'LBL_2_COLUMN' => '2 คอลัมน์',
    'LBL_3_COLUMN' => '3 คอลัมน์',
    'LBL_PAGE_NAME' => 'ชื่อหน้า',

    'LBL_SEARCH_RESULTS' => 'ผลการค้นหา',
    'LBL_SEARCH_MODULES' => 'โมดูล',
    'LBL_SEARCH_TOOLS' => 'เครื่องมือ',
    'LBL_SEARCH_HELP_TITLE' => 'เคล็ดลับการค้นหา',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'ไม่มีรูป',

    'LBL_MODULE' => 'โมดูล',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'คัดลอกที่อยู่จากซ้าย:',
    'LBL_SAVE_AND_CONTINUE' => 'บันทึก และดำเนินการต่อไป',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>คลิกที่ค่าเพื่อเลือกแอตทริบิวต์.</li><li>Ctrl-คลิก&nbsp;to&nbsp;เลือกหลายรายการ ผู้ใช้ Mac ใช้ CMD-click.</li><li>เมื่อต้องการเลือกค่าทั้งหมดระหว่างสองแอตทริบิวต์,&nbsp; คลิกค่าแรก&nbsp;แล้วคลิก shift-click ค่าสุดท้าย.</li></ul><p><strong>ตัวเลือกการค้นหาขั้นสูงและเค้าโครง</strong><br><br>ใช้ <b>การค้นหาและเค้าโครงที่บันทึกไว้</b> คุณสามารถบันทึกชุดของพารามิเตอร์การค้นหา และ/หรือ รูปแบบมุมมองรายการที่กำหนดเองเพื่อให้ได้ผลการค้นหาที่ต้องการในอนาคตได้อย่างรวดเร็ว คุณสามารถบันทึกการค้นหาและเค้าโครงที่กำหนดเองได้ไม่ จำกัด การค้นหาที่บันทึกไว้ทั้งหมดจะปรากฏตามชื่อในรายการค้นหาที่บันทึกไว้โดยมีการค้นหาที่บันทึกล่าสุดที่โหลดไว้จะปรากฏที่ด้านบนสุดของรายการ.<br><br>หากต้องการกำหนดเค้าโครงมุมมองรายการให้ใช้ช่องซ่อนคอลัมน์และคอลัมน์ที่แสดงเพื่อเลือกฟิลด์ที่จะแสดงในผลการค้นหา ตัวอย่างเช่นคุณสามารถดูหรือซ่อนรายละเอียดเช่นชื่อที่บันทึกและผู้ใช้ที่ได้รับมอบหมายและทีมที่ได้รับมอบหมายในผลการค้นหา หากต้องการเพิ่มคอลัมน์ลงในมุมมองรายการให้เลือกฟิลด์จากรายการซ่อนคอลัมน์และใช้ลูกศรซ้ายเพื่อย้ายไปยังรายการคอลัมน์ที่แสดง หากต้องการลบคอลัมน์ออกจากมุมมองรายการให้เลือกคอลัมน์จากคอลัมน์แสดงคอลัมน์และใช้ลูกศรขวาเพื่อย้ายไปยังรายการซ่อนคอลัมน์.<br><br>หากคุณบันทึกการตั้งค่าโครงร่างคุณจะสามารถโหลดได้ตลอดเวลาเพื่อดูผลการค้นหาในรูปแบบที่กำหนดเอง.<br><br>หากต้องการบันทึกและอัพเดตการค้นหา และ/หรือ การจัดวาง:<ol><li>ป้อนชื่อสำหรับผลการค้นหาใน <b>บันทึกการค้นหานี้เป็น</b> และคลิก <b>บันทึก</b>.ชื่อนี้จะปรากฏในรายการการค้นหาที่บันทึกไว้ที่อยู่ติดกับ <b>Clear</b> ปุ่ม.</li><li>หากต้องการดูการค้นหาที่บันทึกไว้ให้เลือกจากรายการ Saved Searches ผลการค้นหาจะปรากฏในมุมมองรายการ.</li><li>ในการอัพเดทคุณสมบัติของการค้นหาที่บันทึกไว้เลือกการค้นหาที่บันทึกไว้จากรายการป้อนเกณฑ์การค้นหาใหม่ และ/หรือ ตัวเลือกการจัดวางในพื้นที่การค้นหาขั้นสูงแล้วคลิก <b>Update</b> ถัดไป <b>แก้ไขการค้นหาปัจจุบัน</b>.</li><li>หากต้องการลบการค้นหาที่บันทึกไว้ให้เลือกในรายการ Saved Searches คลิก <b>ลบ</b> ถัดไป <b>แก้ไขการค้นหาปัจจุบัน</b>, แล้วคลิกตกลง <b>ตกลง</b> เพื่อยืนยันการลบ.</li></ol><p><strong>เคล็ดลับ</strong><br><br>โดยใช้ % ในฐานะตัวแทนจำหน่ายแบบ wildcard คุณสามารถทำให้การค้นหาของคุณกว้างขึ้น ตัวอย่างเช่นแทนที่จะค้นหาผลลัพธ์ที่เท่ากับ "Apples" คุณสามารถเปลี่ยนการค้นหาของคุณไปที่ "Apples%" ซึ่งจะตรงกับผลลัพธ์ทั้งหมดที่ขึ้นต้นด้วยคำว่า Apples แต่อาจมีอักขระอื่น ๆ เช่นกัน.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'ข้อผิดพลาด: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'ข้อผิดพลาด: ResourceObserver->notify() ต้องการที่จะถูกแทนที่',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: ไม่สามารถตรวจสอบได้ เนื่องจาก metadata file ว่างหรือไม่มีไฟล์',
    'ERR_MONITOR_NOT_CONFIGURED' => 'ข้อผิดพลาด: ไม่สามารถตรวจสอบการตั้งต่าสำหรับชื่อที่ต้องการ',
    'ERR_UNDEFINED_METRIC' => 'ข้อผิดพลาด: ไม่สามารถตั้งค่าสำหรับการวัดไม่ได้กำหนด',
    'ERR_STORE_FILE_MISSING' => 'ข้อผิดพลาด: ไม่พบแฟ้มใช้งานร้านค้า',

    'LBL_MONITOR_ID' => 'รหัสตรวจสอบ',
    'LBL_USER_ID' => 'ไอดี ผู้ใช้',
    'LBL_MODULE_NAME' => 'ชื่อโมดูล',
    'LBL_ITEM_ID' => 'รหัสสินค้า',
    'LBL_ITEM_SUMMARY' => 'รายการสรุป',
    'LBL_ACTION' => 'คำสั่ง',
    'LBL_SESSION_ID' => 'เซสชั่นไอดี',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack สร้างขึ้นสำหรับผู้ใช้ id {0}',
    'LBL_VISIBLE' => 'บันทึกที่สามารถมองเห็นได้',
    'LBL_DATE_LAST_ACTION' => 'วันที่ของการกระทำล่าสุด',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'ไม่ก่อน',
    'MSG_IS_MORE_THAN' => 'เป็นมากกว่า',
    'MSG_SHOULD_BE' => 'ควรจะ',
    'MSG_OR_GREATER' => 'หรือมากกว่า',

    'LBL_LIST' => 'รายการ',
    'LBL_CREATE_BUG' => 'สร้างข้อผิดพลาด',

    'LBL_OBJECT_IMAGE' => 'วัตถุภาพ',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'เลือกวันที่',

    'LBL_VALIDATE_RANGE' => 'ไม่อยู่ในช่วงที่ถูกต้อง',
    'LBL_CHOOSE_START_AND_END_DATES' => 'โปรดเลือก ทั้งช่วงวันเริ่มต้น และสิ้นสุด',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'โปรดเลือก ทั้งช่วงวันเริ่มต้น และสิ้นสุด',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'ทั้งหมด',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'ข้อผิดพลาด: การนับ Array ของพารามิเตอร์ bean ไม่ตรงกับจำนวน Array ของผลลัพธ์',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'ข้อผิดพลาด: รายการแมปที่หายไปสำหรับโมดูล',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'ข้อผิดพลาด: ไม่สามารถเรียกข้อมูลสำหรับ {0} เชื่อมต่อ  การบริการในขณะนี้อาจไม่สามารถเข้าถึง หรือการกำหนดค่าอาจไม่ถูกต้อง  เชื่อมต่อข้อผิดพลาด: ({1})',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'สำหรับประสบการณ์ที่ดีที่สุดในการใช้ IIS / FastCGI sapi ให้ตั้งค่า fastcgi.logging เป็น 0 ในไฟล์ php.ini ของคุณ',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'ชื่อ',
    'LBL_COLLECTION_PRIMARY' => 'หลัก',
    'ERROR_MISSING_COLLECTION_SELECTION' => '* ต้องกรอก',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'ผู้รับผิดชอบ',
    'LBL_DESCRIPTION' => 'รายละเอียด',

    'LBL_YESTERDAY' => 'เมื่อวาน',
    'LBL_TODAY' => 'วันนี้',
    'LBL_TOMORROW' => 'พรุ่งนี้',
    'LBL_NEXT_WEEK' => 'อาทิตย์หน้า',
    'LBL_NEXT_MONDAY' => 'วันจันทร์ถัดไป',
    'LBL_NEXT_FRIDAY' => 'วันศุกร์ถัดไป',
    'LBL_TWO_WEEKS' => 'สองสัปดาห์',
    'LBL_NEXT_MONTH' => 'เดือนถัดไป',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'วันแรกของเดือนถัดไป',
    'LBL_THREE_MONTHS' => 'สามเดือน',
    'LBL_SIXMONTHS' => 'หกเดือน',
    'LBL_NEXT_YEAR' => 'ปีถัดไป',

    //Datetimecombo fields
    'LBL_HOURS' => 'ชั่วโมง',
    'LBL_MINUTES' => 'นาที',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'วันที่',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'รีเฟรชอัตโนมัติ',

    'LBL_DURATION_DAY' => 'วัน',
    'LBL_DURATION_HOUR' => 'ชั่วโมง',
    'LBL_DURATION_MINUTE' => 'นาที',
    'LBL_DURATION_DAYS' => 'วัน',
    'LBL_DURATION_HOURS' => 'ระยะเวลา ชั่วโมง',
    'LBL_DURATION_MINUTES' => 'ระยะเวลา นาที',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'เลือกเดือน',
    'LBL_ENTER_YEAR' => 'ปี',
    'LBL_ENTER_VALID_YEAR' => 'กรุณาระบุปีที่ถูกต้อง',

    //File write error label
    'ERR_FILE_WRITE' => 'ข้อผิดพลาด: ไม่สามารถเขียนไฟล์ {0} กรุณาตรวจสอบสิทธิ์ของระบบและเว็บเซิร์ฟเวอร์',
    'ERR_FILE_NOT_FOUND' => 'ข้อผิดพลาด: ไม่สามารถโหลดไฟล์ {0} กรุณาตรวจสอบสิทธิ์ของระบบและเว็บเซิร์ฟเวอร์',

    'LBL_AND' => 'และ',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'ไฟล์จากภายนอก',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'ความปลอดภัย',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"นี่คือตัวอย่างไฟล์นำเข้าซึ่งเป็นตัวอย่างของเนื้อหาที่คาดไว้ของไฟล์ที่พร้อมสำหรับการนำเข้า"
"ไฟล์.csv ที่คั่นด้วยเครื่องหมายจุลภาคโดยใช้เครื่องหมายคำพูดสองครั้งเป็น the field qualifier"

"header row เป็นแถวบนสุดในไฟล์และมีป้ายชื่อฟิลด์ตามที่คุณเห็นในแอ็พพลิเคชัน"
"ป้ายชื่อเหล่านี้ใช้สำหรับการแมปข้อมูลในไฟล์ไปยังเขตข้อมูลในแอ็พพลิเคชัน"

"หมายเหตุ: ชื่อฐานข้อมูลอาจถูกใช้ใน the header row ซึ่งเป็นประโยชน์เมื่อคุณใช้ phpMyAdmin หรือเครื่องมือฐานข้อมูลอื่นเพื่อจัดเตรียมรายการข้อมูลที่จะนำเข้าออก"
"คำสั่งของคอลัมน์ไม่สำคัญเนื่องจากกระบวนการนำเข้าตรงกับข้อมูลไปยังฟิลด์ที่เหมาะสมซึ่งขึ้นอยู่กับ header row"

"ในการใช้ไฟล์นี้เป็นเทมเพลตให้ทำดังนี้"
"1. ลบแถวตัวอย่างของข้อมูล"
"2. ลบข้อความช่วยเหลือที่คุณกำลังอ่านตอนนี้"
"3 ใส่ข้อมูลของคุณเองลงในแถวและคอลัมน์ที่เหมาะสม"
"4. บันทึกแฟ้มไปยังตำแหน่งที่รู้จักในระบบของคุณ"
"5. คลิกที่ตัวเลือก Import จากเมนู Actions ในแอพพลิเคชันและเลือกไฟล์ที่จะอัพโหลด"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'ไม่มีการแจ้งเตือนปัจจุบัน',
    'LBL_ALT_SORT_DESC' => 'เรียงจากมากไปน้อย',
    'LBL_ALT_SORT_ASC' => 'เรียงจากน้อยไปมาก',
    'LBL_ALT_SORT' => 'เรียงลำดับ',
    'LBL_ALT_SHOW_OPTIONS' => 'แสดงตัวเลือก',
    'LBL_ALT_HIDE_OPTIONS' => 'ซ่อนตัวเลือก',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'ย้ายรายการที่เลือกไปยังรายการทางด้านซ้าย',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'ย้ายรายการที่เลือกไปยังรายการทางด้านขวา',
    'LBL_ALT_MOVE_COLUMN_UP' => 'ย้ายรายการที่เลือกขึ้นในลำดับการแสดงรายการ',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'ย้ายรายการที่เลือกลงในลำดับการแสดงรายการ',
    'LBL_ALT_INFO' => 'ข้อมูลรายละเอียด',
    'MSG_DUPLICATE' => '{0} บันทึกที่คุณกำลังสร้างอาจเป็นสำเนาของ {0} บันทึกที่มีอยู่แล้ว {1} บันทึกที่มีชื่อคล้ายคลึงกันอยู่ด้านล่าง <br> คลิก สร้าง {1} เพื่อสร้างใหม่ {0} หรือเลือก {0} ที่มีอยู่ด้านล่างนี้',
    'MSG_SHOW_DUPLICATES' => '{0} บันทึกที่คุณกำลังสร้างอาจซ้ำกับ {0} บันทึกที่มีอยู่แล้ว {1} บันทึกที่มีชื่อคล้ายคลึงกันอยู่ด้านล่าง คลิกบันทึกเพื่อสร้างใหม่ {0} หรือคลิกยกเลิกเพื่อกลับไปยังโมดูลโดยไม่ต้องสร้าง {0}',
    'LBL_EMAIL_TITLE' => 'อีเมล',
    'LBL_EMAIL_OPT_TITLE' => 'เลือกที่อยู่อีเมล',
    'LBL_EMAIL_INV_TITLE' => 'อีเมลไม่ถูกต้อง',
    'LBL_EMAIL_PRIM_TITLE' => 'ตั้งให้เป็นที่อยู่อีเมลหลัก',
    'LBL_SELECT_ALL_TITLE' => 'เลือกทั้งหมด',
    'LBL_SELECT_THIS_ROW_TITLE' => 'เลือกแถวนี้',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ข้อผิดพลาด: มีข้อผิดพลาดในระหว่างการอัปโหลด รหัสข้อผิดพลาด: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ข้อผิดพลาด: มีข้อผิดพลาดในระหว่างการอัปโหลด รหัสข้อผิดพลาด: {0} - {1} Upload_maxsize เป็น {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ข้อผิดพลาด: มีข้อผิดพลาดในระหว่างการอัปโหลด โปรดติดต่อผู้ดูแลระบบสำหรับความช่วยเหลือ',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'ขนาดการอัปโหลด ({0} ไบต์) เกินได้สูงสุดขนาด: {1} ไบต์',
    'UPLOAD_REQUEST_ERROR' => 'เกิดข้อผิดพลาด กรุณารีเฟรชหน้าของคุณ และลองอีกครั้ง',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'แก้ไข',
    'LBL_EDIT_BUTTON_TITLE' => 'แก้ไข',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'ทำซ้ำ',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'ทำซ้ำ',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'ลบ',
    'LBL_DELETE_BUTTON_TITLE' => 'ลบ',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'คำสั่ง',
    'LBL_SAVE_BUTTON_KEY' => 'D',
    'LBL_SAVE_BUTTON_LABEL' => 'บันทึก',
    'LBL_SAVE_BUTTON_TITLE' => 'บันทึก',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'ยกเลิก',
    'LBL_CANCEL_BUTTON_TITLE' => 'ยกเลิก',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'อาร์เรย์ของตัวเชื่อมต่อใน {0} ถูกกำหนดไว้ไม่ถูกต้องหรือว่างเปล่าและไม่สามารถใช้งานได้',
    'ERR_SUHOSIN' => 'สตรีมการอัพโหลดถูกบล็อกโดย Suhosin โปรดเพิ่ม &quot;upload&quot; to suhosin.executor.include.whitelist (ดู suitecrm.log สำหรับข้อมูลเพิ่มเติม)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'การตอบสนองไม่ถูกต้องจากเซิร์ฟเวอร์',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'ใบเสนอราคา',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'ราคาขาย',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'ปรับเอง',
        '5' => 'ทุก ๆ 5 นาที',
        '15' => 'ทุก 15 นาที',
        '30' => 'ทุก 30 นาที',
        '60' => 'ทุกชั่วโมง',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'ตัวเตือนไม่ถูกต้อง หรือว่างเปล่า',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'ไม่มีการตั้งค่าเตือนสำหรับป๊อปอัพหรืออีเมล์',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'ไม่มีผู้ได้รับเชิญสำหรับการแจ้งเตือน',
    'LBL_DELETE_REMINDER_CONFIRM' => 'การแจ้งเตือนไม่รวมผู้ได้รับเชิญคุณต้องการนำการเตือนความจำออกหรือไม่?',
    'LBL_DELETE_REMINDER' => 'ลบการแจ้งเตือน',
    'LBL_OK' => 'ตกลง',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'เลือกคอลัมน์',
    'LBL_COLUMN_CHOOSER' => 'ตัวเลือกแบบคอลัมน์',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'บันทึกการเปลี่ยนแปลง',
    'LBL_DISPLAYED' => 'แสดง',
    'LBL_HIDDEN' => 'ซ่อน',
    'ERR_EMPTY_COLUMNS_LIST' => 'ต้องมีองค์ประกอบอย่างน้อย 1อย่าง',

    'LBL_FILTER_HEADER_TITLE' => 'คัดกรอง',

    'LBL_CATEGORY' => 'หมวดหมู่',
    'LBL_LIST_CATEGORY' => 'หมวดหมู่',
    'ERR_FACTOR_TPL_INVALID' => 'ปัจจัยข้อความรับรองความถูกต้องไม่ถูกต้อง กรุณาติดต่อผู้ดูแลระบบของคุณ',
    'LBL_SUBTHEMES' => 'ลักษณะ',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'รุ่งอรุณ',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'วัน',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'พลบค่ำ',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'กลางคืน',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'กลางวัน',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'ไม่สนใจร่างจดหมาย',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'การดำเนินการนี้จะลบอีเมลนี้คุณต้องการดำเนินการต่อหรือไม่?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'ออกจากกล่องโต้ตอบการเขียน',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'เมื่อออกจากกล่องโต้ตอบการเขียน ข้อมูลที่ป้อนทั้งหมดจะหายไป คุณต้องการดำเนินการต่อหรือไม่',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'ใช้เทมเพลตอีเมล',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'การดำเนินการนี้จะแทนที่ข้อมูลอีเมล Body and Subject คุณต้องการดำเนินการต่อหรือไม่?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'ยืนยันเข้าร่วม',
    'LBL_OPT_IN_TITLE' => 'เข้าร่วมใน',
    'LBL_CONFIRM_OPT_IN_DATE' => 'ยืนยันเข้าร่วมในวัน',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'ยืนยันเข้าร่วมในวันส่ง',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'ยืนยันเข้าร่วมในวัน',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'ยืนยันเข้าร่วมในวัน',
    'ERR_OPT_IN_TPL_NOT_SET' => 'ไม่มีการกำหนดค่าแม่แบบ opt ในอีเมล โปรดตั้งค่าในการตั้งค่าอีเมล',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt ในต้องใช้อีเมลที่เกี่ยวข้องกับบัญชี/ติดต่อ/ตะกั่ว/เป้าหมาย',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'กลุ่มที่สืบทอดไม่ได้',
    'LBL_PRIMARY_GROUP' => "กลุ่มหลัก",

    // footer
    'LBL_SUITE_TOP' => 'กลับไปข้างบน',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'โปรแกรมนี้เป็นฟรีซอฟต์แวร์ คุณสามารถแจกจ่าย และ/หรือ แก้ไขได้ภายใต้เงื่อนไขของสัญญาอนุญาตแบบสาธารณะทั่วไปของ GNU ฉบับที่ 3 ที่เผยแพร่โดย Free Software Foundation รวมถึงการอนุญาตเพิ่มเติมที่กำหนดไว้ในส่วนหัวของซอร์สโค้ด',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'รีเซ็ตรหัสผ่าน',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'ยืนยันส่งเลือกอีเมล',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'ยืนยันเข้าร่วมในการส่งอีเมล์สำหรับบัญชี/ติดต่อ/เป้าหมาย/แนวโน้มเท่านั้น',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'ยืนยันเข้าร่วมในการส่งอีเมล์ถูกปิดใช้งาน ยืนยันเลือกตัวเลือกในการตั้งค่าอีเมเปิดใช้งาน หรือติดต่อผู้ดูแลระบบของคุณ',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'ยืนยันการเข้าร่วมในอีเมลที่ส่งไม่สามารถเนื่องจากผู้ติดต่อมีอยู่อีเมล์หลักไม่',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'ยืนยันเข้าร่วมในการส่งอีเมล์ล้มเหลว',
    'LBL_CONFIRM_EMAIL_SENT' => 'ยืนยันอีเมลที่เลือกในส่งเรียบร้อย',
);

$app_list_strings['moduleList']['Library'] = 'ไลบลารี่';
$app_list_strings['moduleList']['EmailAddresses'] = 'อีเมล';
$app_list_strings['project_priority_default'] = 'กลาง';
$app_list_strings['project_priority_options'] = array(
    'High' => 'สูง',
    'Medium' => 'กลาง',
    'Low' => 'ต่ำ',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'ความยินยอม',
    'contract' => 'สัญญา',
    'legal_obligation' => 'ภาระผูกพันตามกฎหมาย',
    'protection_of_interest' => 'การคุ้มครองผลประโยชน์',
    'public_interest' => 'ภารกิจของรัฐ',
    'legitimate_interest' => 'ประโยชน์อันชอบธรรม',
    'withdrawn' => 'การเพิกถอน',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'เว็บไซต์',
    'phone' => 'โทรศัพท์',
    'given_to_user' => 'มอบให้กับผู้ใช้',
    'email' => 'อีเมล',
    'third_party' => 'บุคคลที่สาม',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'ฐานความรู้';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'อาบูดาบี',
    'ADEN' => 'เอเดน',
    'AFGHANISTAN' => 'อัฟกานิสถาน',
    'ALBANIA' => 'อัลบาเนีย',
    'ALGERIA' => 'อัลจีเรีย',
    'AMERICAN SAMOA' => 'อเมริกันซามัว',
    'ANDORRA' => 'ราชรัฐอันดอร์รา',
    'ANGOLA' => 'แองโกลา',
    'ANTARCTICA' => 'ทวีปแอนตาร์กติกา',
    'ANTIGUA' => 'แอนติกา',
    'ARGENTINA' => 'อาร์เจนติน่า',
    'ARMENIA' => 'อาร์เมเนีย',
    'ARUBA' => 'อารูบา',
    'AUSTRALIA' => 'ออสเตรเลีย',
    'AUSTRIA' => 'ออสเตรีย',
    'AZERBAIJAN' => 'อาเซอร์ไบจัน',
    'BAHAMAS' => 'บาฮามาส',
    'BAHRAIN' => 'บาห์เรน',
    'BANGLADESH' => 'บังกลาเทศ',
    'BARBADOS' => 'บาร์เบโดส',
    'BELARUS' => 'เบลารุส',
    'BELGIUM' => 'เบลเยียม',
    'BELIZE' => 'เบลีซ',
    'BENIN' => 'ประเทศเบนิน',
    'BERMUDA' => 'เบอร์มิวดา',
    'BHUTAN' => 'ภูฏาน',
    'BOLIVIA' => 'โบลิเวีย',
    'BOSNIA' => 'บอสเนีย',
    'BOTSWANA' => 'บอตสวานา',
    'BOUVET ISLAND' => 'เกาะบูเวต์',
    'BRAZIL' => 'บราซิล',
    'BRITISH ANTARCTICA TERRITORY' => 'ดินแดนแอนตาร์กติกาของบริติช',
    'BRITISH INDIAN OCEAN TERRITORY' => 'ดินแดนมหาสมุทรอินเดียของบริติช',
    'BRITISH VIRGIN ISLANDS' => 'หมู่เกาะบริติชเวอร์จิน',
    'BRITISH WEST INDIES' => 'บริติชอินเดียตะวันตก',
    'BRUNEI' => 'บรูไน',
    'BULGARIA' => 'บัลแกเรีย',
    'BURKINA FASO' => 'ประเทศบูร์กินาฟาโซ',
    'BURUNDI' => 'บุรุนดี',
    'CAMBODIA' => 'กัมพูชา',
    'CAMEROON' => 'แคเมอรูน',
    'CANADA' => 'แคนาดา',
    'CANAL ZONE' => 'เขตคลอง',
    'CANARY ISLAND' => 'เกาะคานารี',
    'CAPE VERDI ISLANDS' => 'หมู่เกาะเคปและวัฒนธรรม',
    'CAYMAN ISLANDS' => 'หมู่เกาะเคย์แมน',
    'CHAD' => 'ชาด',
    'CHANNEL ISLAND UK' => 'แชนเนลไอส์แลนด์สหราชอาณาจักร',
    'CHILE' => 'ชิลี',
    'CHINA' => 'จีน',
    'CHRISTMAS ISLAND' => 'เกาะคริสต์มาส',
    'COCOS (KEELING) ISLAND' => 'เกาะโคโคส (คีลิง)',
    'COLOMBIA' => 'โคลัมเบีย',
    'COMORO ISLANDS' => 'ซาฮาราตะวันตก',
    'CONGO' => 'คองโก',
    'CONGO KINSHASA' => 'คองโกกินชาซา',
    'COOK ISLANDS' => 'หมู่เกาะคุก',
    'COSTA RICA' => 'คอสตาริก้า',
    'CROATIA' => 'โครเอเชีย',
    'CUBA' => 'คิวบา',
    'CURACAO' => 'คูราเคา',
    'CYPRUS' => 'ไซปรัส',
    'CZECH REPUBLIC' => 'สาธารณรัฐเชก',
    'DAHOMEY' => 'ดาโฮมีย์',
    'DENMARK' => 'เดนมาร์ก',
    'DJIBOUTI' => 'จิบูตี',
    'DOMINICA' => 'โดมินิกา',
    'DOMINICAN REPUBLIC' => 'สาธารณรัฐโดมินิกัน',
    'DUBAI' => 'ดูไบ',
    'ECUADOR' => 'เอกวาดอร์',
    'EGYPT' => 'อียิปต์',
    'EL SALVADOR' => 'เอลซัลวาดอร์',
    'EQUATORIAL GUINEA' => 'อิเควทอเรียลกินี',
    'ESTONIA' => 'เอสโทเนีย',
    'ETHIOPIA' => 'เอธิโอเปีย',
    'FAEROE ISLANDS' => 'หมู่เกาะแฟโร',
    'FALKLAND ISLANDS' => 'หมู่เกาะฟอล์กแลนด์',
    'FIJI' => 'ฟิจิ',
    'FINLAND' => 'ฟินแลนด์',
    'FRANCE' => 'ฝรั่งเศส',
    'FRENCH GUIANA' => 'เฟรนช์เกียนา',
    'FRENCH POLYNESIA' => 'เฟรนช์พอลินีเชีย',
    'GABON' => 'กาบอง',
    'GAMBIA' => 'แกมเบีย',
    'GEORGIA' => 'จอร์เจีย',
    'GERMANY' => 'เยอรมนี',
    'GHANA' => 'กานา',
    'GIBRALTAR' => 'ยิบรอลตาร์',
    'GREECE' => 'กรีซ',
    'GREENLAND' => 'กรีนแลนด์',
    'GUADELOUPE' => 'กวาเดอลูป',
    'GUAM' => 'กวม',
    'GUATEMALA' => 'กัวเตมาลา',
    'GUINEA' => 'กินี',
    'GUYANA' => 'กายอานา',
    'HAITI' => 'เฮติ',
    'HONDURAS' => 'ฮอนดูรัส',
    'HONG KONG' => 'ฮ่องกง',
    'HUNGARY' => 'ฮังการี',
    'ICELAND' => 'ไอซ์แลนด์',
    'IFNI' => 'อิฟนิ',
    'INDIA' => 'อินเดีย',
    'INDONESIA' => 'อินโดนีเซีย',
    'IRAN' => 'อิหร่าน',
    'IRAQ' => 'อิรัก',
    'IRELAND' => 'ไอร์แลนด์',
    'ISRAEL' => 'อิสราเอล',
    'ITALY' => 'อิตาลี',
    'IVORY COAST' => 'ไอวอรี่โคสต์',
    'JAMAICA' => 'จาไมก้า',
    'JAPAN' => 'ญี่ปุ่น',
    'JORDAN' => 'จอร์แดน',
    'KAZAKHSTAN' => 'คาซัคสถาน',
    'KENYA' => 'เคนย่า',
    'KOREA' => 'เกาหลี',
    'KOREA, SOUTH' => 'เกาหลี ใต้',
    'KUWAIT' => 'คูเวต',
    'KYRGYZSTAN' => 'คีร์กีสถาน',
    'LAOS' => 'ลาว',
    'LATVIA' => 'ลัตเวีย',
    'LEBANON' => 'เลบานอน',
    'LEEWARD ISLANDS' => 'หมู่เกาะบริติชลีเวิร์ด',
    'LESOTHO' => 'เลโซโท',
    'LIBYA' => 'ลิเบีย',
    'LIECHTENSTEIN' => 'ลิกเตนสไตน์',
    'LITHUANIA' => 'ลิธัวเนีย',
    'LUXEMBOURG' => 'ลักเซมเบิร์ก',
    'MACAO' => 'มาเก๊า',
    'MACEDONIA' => 'มาซิโดเนีย',
    'MADAGASCAR' => 'มาดากัสการ์',
    'MALAWI' => 'มาลาวี',
    'MALAYSIA' => 'มาเลเซีย',
    'MALDIVES' => 'มัลดีฟส์',
    'MALI' => 'มาลี',
    'MALTA' => 'มอลตา',
    'MARTINIQUE' => 'มาร์ตินีก',
    'MAURITANIA' => 'สาธารณรัฐอิสลามมอริเตเนีย',
    'MAURITIUS' => 'มอริเชียส',
    'MELANESIA' => 'เมลานีเซีย',
    'MEXICO' => 'เม็กซิโก',
    'MOLDOVIA' => 'มอลโดวา',
    'MONACO' => 'โมนาโก',
    'MONGOLIA' => 'มองโกเลีย',
    'MOROCCO' => 'โมร็อคโค',
    'MOZAMBIQUE' => 'โมซัมบิก',
    'MYANAMAR' => 'เมียนมา',
    'NAMIBIA' => 'นามิเบีย',
    'NEPAL' => 'เนปาล',
    'NETHERLANDS' => 'เนเธอร์แลนด์',
    'NETHERLANDS ANTILLES' => 'เนเธอร์แลนด์แอนทิลลีส',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'เขตเป็นกลางของเนเธอร์แลนด์แอนทิลลิส',
    'NEW CALADONIA' => 'นิวแคลิโดเนีย',
    'NEW HEBRIDES' => 'นิวเฮบริดีส์',
    'NEW ZEALAND' => 'นิวซีแลนด์',
    'NICARAGUA' => 'นิการากัว',
    'NIGER' => 'ไนเจอร์',
    'NIGERIA' => 'ไนจีเรีย',
    'NORFOLK ISLAND' => 'เกาะนอร์ฟอล์ก',
    'NORWAY' => 'นอร์เวย์',
    'OMAN' => 'โอมาน',
    'OTHER' => 'อื่น ๆ',
    'PACIFIC ISLAND' => 'หมู่เกาะแปซิฟิก',
    'PAKISTAN' => 'ปากีสถาน',
    'PANAMA' => 'ปานามา',
    'PAPUA NEW GUINEA' => 'ปาปัวนิวกินี',
    'PARAGUAY' => 'ปารากวัย',
    'PERU' => 'เปรู',
    'PHILIPPINES' => 'ฟิลิปปินส์',
    'POLAND' => 'โปแลนด์',
    'PORTUGAL' => 'โปรตุเกส',
    'PORTUGUESE TIMOR' => 'ติมอร์ตะวันออก',
    'PUERTO RICO' => 'เปอร์โตริโก',
    'QATAR' => 'กาตาร์',
    'REPUBLIC OF BELARUS' => 'สาธารณรัฐเบลารุส',
    'REPUBLIC OF SOUTH AFRICA' => 'สาธารณรัฐแอฟริกาใต้',
    'REUNION' => 'เรอูนียง',
    'ROMANIA' => 'โรมาเนีย',
    'RUSSIA' => 'รัสเซีย',
    'RWANDA' => 'รวันดา',
    'RYUKYU ISLANDS' => 'หมู่เกาะรีวกีว',
    'SABAH' => 'ซาบาห์',
    'SAN MARINO' => 'ซานมาริโน',
    'SAUDI ARABIA' => 'ซาอุดิอาระเบีย',
    'SENEGAL' => 'เซเนกัล',
    'SERBIA' => 'เซอร์เบีย',
    'SEYCHELLES' => 'เซเชลส์',
    'SIERRA LEONE' => 'เซียร์ราลีโอน',
    'SINGAPORE' => 'สิงคโปร์',
    'SLOVAKIA' => 'สโลวาเกีย',
    'SLOVENIA' => 'สโลวีเนีย',
    'SOMALILIAND' => 'โซมาลีแลนด์',
    'SOUTH AFRICA' => 'แอฟริกาใต้',
    'SOUTH YEMEN' => 'เยเมนใต้',
    'SPAIN' => 'สเปน',
    'SPANISH SAHARA' => 'ซาฮาราสเปน',
    'SRI LANKA' => 'ศรีลังกา',
    'ST. KITTS AND NEVIS' => 'เซนต์คิตส์และเนวิส',
    'ST. LUCIA' => 'เซนต์ลูเซีย',
    'SUDAN' => 'ซูดาน',
    'SURINAM' => 'ซูรินาเม',
    'SW AFRICA' => 'แอฟริกาตะวันตกเฉียงใต้',
    'SWAZILAND' => 'ราชอาณาจักรสวาซิแลนด์',
    'SWEDEN' => 'สวีเดน',
    'SWITZERLAND' => 'สวิตเซอร์แลนด์',
    'SYRIA' => 'ซีเรีย',
    'TAIWAN' => 'ไต้หวัน',
    'TAJIKISTAN' => 'ทาจิกิสถาน',
    'TANZANIA' => 'แทนซาเนีย',
    'THAILAND' => 'ไทย',
    'TONGA' => 'ราชอาณาจักรตองกา',
    'TRINIDAD' => 'ประเทศตรินิแดด',
    'TUNISIA' => 'ตูนิเซีย',
    'TURKEY' => 'ตุรกี',
    'UGANDA' => 'ยูกันดา',
    'UKRAINE' => 'ยูเครน',
    'UNITED ARAB EMIRATES' => 'สหรัฐอาหรับเอมิเรตส์',
    'UNITED KINGDOM' => 'สหราชอาณาจักร',
    'URUGUAY' => 'อุรุกวัย',
    'US PACIFIC ISLAND' => 'หมู่เกาะแปซิฟิกของสหรัฐอเมริกา',
    'US VIRGIN ISLANDS' => 'หมู่เกาะเวอร์จิน',
    'USA' => 'สหรัฐอเมริกา',
    'UZBEKISTAN' => 'อุซเบกิสถาน',
    'VANUATU' => 'วานูอาตู',
    'VATICAN CITY' => 'นครรัฐวาติกัน',
    'VENEZUELA' => 'เวเนซุเอลา',
    'VIETNAM' => 'เวียดนาม',
    'WAKE ISLAND' => 'เกาะเวก',
    'WEST INDIES' => 'อินเดียตะวันตก',
    'WESTERN SAHARA' => 'ซาฮาราตะวันตก',
    'YEMEN' => 'เยเมน',
    'ZAIRE' => 'สาธารณรัฐประชาธิปไตยคองโก',
    'ZAMBIA' => 'แซมเบีย',
    'ZIMBABWE' => 'ซิมบาบเว',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (ไต้หวันและฮ่องกง)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS ซิริลลิก)',
    'CP1252' => 'CP1252 (MS ตะวันตกยุโรปและสหรัฐอเมริกา)',
    'EUC-CN' => 'EUC-CN (GB2312 จีนประยุกต์)',
    'EUC-JP' => 'EUC JP (ญี่ปุ่น Unix)',
    'EUC-KR' => 'EUC KR (เกาหลี)',
    'EUC-TW' => 'EUC-TW (ไต้หวัน)',
    'ISO-2022-JP' => 'ISO-2022-JP (ญี่ปุ่น)',
    'ISO-2022-KR' => 'ISO-2022-KR (เกาหลี)',
    'ISO-8859-1' => 'Iso-8859-1 (ยุโรปตะวันตกและสหรัฐอเมริกา)',
    'ISO-8859-2' => 'ISO-8859-2 (ยุโรปกลาง และตะวันออก)',
    'ISO-8859-3' => 'ISO-8859-3 (ละติน 3)',
    'ISO-8859-4' => 'ISO-8859-4 (ละติน 4)',
    'ISO-8859-5' => 'ISO-8859-5 (ซิริลลิก)',
    'ISO-8859-6' => 'ISO-8859-6 (อาหรับ)',
    'ISO-8859-7' => 'ISO-8859-7 (กรีก)',
    'ISO-8859-8' => 'ISO-8859-8 (ภาษาฮิบรู)',
    'ISO-8859-9' => 'ISO-8859-9 (ละติน 5)',
    'ISO-8859-10' => 'ISO-8859-10 (ละติน 6)',
    'ISO-8859-13' => 'ISO-8859-13 (ละติน 7)',
    'ISO-8859-14' => 'ISO-8859-14 (ละติน 8)',
    'ISO-8859-15' => 'ISO-8859-15 (ละติน 9)',
    'KOI8-R' => 'KOI8-R (ซิริลลิกรัสเซีย)',
    'KOI8-U' => 'KOI8 U (ซิริลลิก ยูเครน)',
    'SJIS' => 'SJIS (MS ญี่ปุ่น)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'แอฟริกา/แอลเจียร์',
    'Africa/Luanda' => 'แอฟริกา/ลูอันดา',
    'Africa/Porto-Novo' => 'แอฟริกา/ปอร์โต-โนโว',
    'Africa/Gaborone' => 'แอฟริกา/กาโบโรเน',
    'Africa/Ouagadougou' => 'แอฟริกา/วากาดูกู',
    'Africa/Bujumbura' => 'แอฟริกา/บุรุนดี',
    'Africa/Douala' => 'แอฟริกา/ดูอาลา',
    'Atlantic/Cape_Verde' => 'แอตแลนติก/เคปเวิร์ด',
    'Africa/Bangui' => 'แอฟริกา/บังกี',
    'Africa/Ndjamena' => 'แอฟริกา/อึนจาเมนา',
    'Indian/Comoro' => 'อินเดีย/โคโมโร',
    'Africa/Kinshasa' => 'แอฟริกา/กินชาซา',
    'Africa/Lubumbashi' => 'แอฟริกา/ลูบูมบาชี',
    'Africa/Brazzaville' => 'แอฟริกา/บราซาวีล',
    'Africa/Abidjan' => 'แอฟริกา/อาบิดจัน',
    'Africa/Djibouti' => 'แอฟริกา/จิบูตี',
    'Africa/Cairo' => 'แอฟริกา/ไคโร',
    'Africa/Malabo' => 'แอฟริกา/มาลาโบ',
    'Africa/Asmera' => 'แอฟริกา/แอสมารา',
    'Africa/Addis_Ababa' => 'แอฟริกา/แอดดิสอาบาบา',
    'Africa/Libreville' => 'แอฟริกา/ลีเบรอวิล',
    'Africa/Banjul' => 'แอฟริกา/บันจูล',
    'Africa/Accra' => 'แอฟริกา/อักกรา',
    'Africa/Conakry' => 'แอฟริกา/โกนากรี',
    'Africa/Bissau' => 'แอฟริกา/บิสเซา',
    'Africa/Nairobi' => 'แอฟริกา/ไนโรบี',
    'Africa/Maseru' => 'แอฟริกา/มาเซรู',
    'Africa/Monrovia' => 'แอฟริกา/มันโรเวีย',
    'Africa/Tripoli' => 'แอฟริกา/ตริโปลี',
    'Indian/Antananarivo' => 'อินเดีย / ตานานาริโว',
    'Africa/Blantyre' => 'แอฟริกา/บลันไทร์',
    'Africa/Bamako' => 'แอฟริกา/บามาโก',
    'Africa/Nouakchott' => 'แอฟริกา/นูแอกชอต',
    'Indian/Mauritius' => 'อินเดีย/มอริเชียส',
    'Indian/Mayotte' => 'อินเดีย/มายอต',
    'Africa/Casablanca' => 'แอฟริกา/คาซาบลังกา',
    'Africa/El_Aaiun' => 'แอฟริกา/เอลอายูน',
    'Africa/Maputo' => 'แอฟริกา/มาปูโต',
    'Africa/Windhoek' => 'แอฟริกา/วินด์ฮุก',
    'Africa/Niamey' => 'แอฟริกา/นีอาเม',
    'Africa/Lagos' => 'แอฟริกา/ลากอส',
    'Indian/Reunion' => 'อินเดีย/เรอูนียง',
    'Africa/Kigali' => 'แอฟริกา / คิกาลี',
    'Atlantic/St_Helena' => 'แอตแลนติก/เซนต์เฮเลน่า',
    'Africa/Sao_Tome' => 'แอฟริกา/เซาโตเม',
    'Africa/Dakar' => 'แอฟริกา/ดาการ์',
    'Indian/Mahe' => 'อินเดีย/มาฮี',
    'Africa/Freetown' => 'แอฟริกา/ฟรีทาวน์',
    'Africa/Mogadishu' => 'แอฟริกา/โมกาดิชู',
    'Africa/Johannesburg' => 'แอฟริกา/โจฮันเนสเบิร์ก',
    'Africa/Khartoum' => 'แอฟริกา/คาร์ทูม',
    'Africa/Mbabane' => 'แอฟริกา/อัมบาบาเน',
    'Africa/Dar_es_Salaam' => 'ไทย/ดาร์เอสซาลาม',
    'Africa/Lome' => 'แอฟริกา/โลเม',
    'Africa/Tunis' => 'แอฟริกา/ตูนิส',
    'Africa/Kampala' => 'แอฟริกา / กัมปาลา',
    'Africa/Lusaka' => 'แอฟริกา/ลูซากา',
    'Africa/Harare' => 'แอฟริกา / ฮาราเร',
    'Antarctica/Casey' => 'ทวีปแอนตาร์กติกา/เคซี่ย์',
    'Antarctica/Davis' => 'แอนตาร์กติกา / เดวิส',
    'Antarctica/Mawson' => 'แอนตาร์กติกา / มอว์สัน',
    'Indian/Kerguelen' => 'อินเดีย/แกร์เกแลน',
    'Antarctica/DumontDUrville' => 'แอนตาร์กติกา/DumontDUrville',
    'Antarctica/Syowa' => 'แอนตาร์กติกา / โชวะ',
    'Antarctica/Vostok' => 'แอนตาร์กติกา / วอสต็อก',
    'Antarctica/Rothera' => 'แอนตาร์กติกา / รอเทอรา',
    'Antarctica/Palmer' => 'แอนตาร์กติกา / พาลเมอร์',
    'Antarctica/McMurdo' => 'แอนตาร์กติกา / แมกมัวร์ดู',
    'Asia/Kabul' => 'เอเชีย/คาบูล',
    'Asia/Yerevan' => 'เอเชีย/เยเรวาน',
    'Asia/Baku' => 'เอเชีย / บากู',
    'Asia/Bahrain' => 'เอเชีย/บาห์เรน',
    'Asia/Dhaka' => 'เอเชีย/ธากา',
    'Asia/Thimphu' => 'เอเชีย/ทิมพู',
    'Indian/Chagos' => 'อินเดีย/ชากอส',
    'Asia/Brunei' => 'เอเชีย/บรูไน',
    'Asia/Rangoon' => 'เอเชีย/ร่างกุ้ง',
    'Asia/Phnom_Penh' => 'เอเชีย/พนมเปญ',
    'Asia/Beijing' => 'เอเชีย/ปักกิ่ง',
    'Asia/Harbin' => 'เอเชีย/ฮาร์บิน',
    'Asia/Shanghai' => 'เอเชีย/เซี่ยงไฮ้',
    'Asia/Chongqing' => 'เอเชีย/ฉงชิ่ง',
    'Asia/Urumqi' => 'เอเชีย/อุรุมชี',
    'Asia/Kashgar' => 'เอเชีย/คัช',
    'Asia/Hong_Kong' => 'เอเชีย/ฮ่องกง',
    'Asia/Taipei' => 'เอเชีย/ไทเป',
    'Asia/Macau' => 'เอเชีย/มาเก๊า',
    'Asia/Nicosia' => 'เอเชีย/นิโคเซีย',
    'Asia/Tbilisi' => 'เอเชีย/ทบิลิซี',
    'Asia/Dili' => 'เอเชีย/ดิลี',
    'Asia/Calcutta' => 'เอเชีย/กาลกัตต้า',
    'Asia/Jakarta' => 'เอเชีย/จาการ์ตา',
    'Asia/Pontianak' => 'เอเชีย/ปอนติอานัค',
    'Asia/Makassar' => 'เอเชีย/มาคาสซ่า',
    'Asia/Jayapura' => 'เอเชีย/จายาปุระ',
    'Asia/Tehran' => 'เอเชีย/เตหะราน',
    'Asia/Baghdad' => 'เอเชีย/แบกแดด',
    'Asia/Jerusalem' => 'เอเชีย/เยรูซาเล็ม',
    'Asia/Tokyo' => 'เอเชีย/โตเกียว',
    'Asia/Amman' => 'เอเชีย/อัมมาน',
    'Asia/Almaty' => 'เอเชีย/อัลมาตี',
    'Asia/Qyzylorda' => 'เอเชีย/คืยซิลออร์ดา',
    'Asia/Aqtobe' => 'เอเชีย/อัคเตอเบ',
    'Asia/Aqtau' => 'เอเชีย/อัคตาอู',
    'Asia/Oral' => 'เอเชีย/โอรัล',
    'Asia/Bishkek' => 'เอเชีย/บิชเค็ก',
    'Asia/Seoul' => 'เอเชีย/โซล',
    'Asia/Pyongyang' => 'เอเชีย/เปียงยาง',
    'Asia/Kuwait' => 'เอเชีย/คูเวต',
    'Asia/Vientiane' => 'เอเชีย/เวียงจันทน์',
    'Asia/Beirut' => 'เอเชีย/เบรุต',
    'Asia/Kuala_Lumpur' => 'เอเชีย/กัวลาลัมเปอร์',
    'Asia/Kuching' => 'เอเชีย/กูชิง',
    'Indian/Maldives' => 'อินเดีย/มัลดีฟส์',
    'Asia/Hovd' => 'เอเชีย/ฮอฟด์',
    'Asia/Ulaanbaatar' => 'เอเชีย/อูลานบาตอร์',
    'Asia/Choibalsan' => 'เอเชีย/ชอยบัลซาน',
    'Asia/Katmandu' => 'เอเชีย/กาฐมาณฑุ',
    'Asia/Muscat' => 'เอเชีย/มัสกัต',
    'Asia/Karachi' => 'เอเชีย/การาจี',
    'Asia/Gaza' => 'เอเชีย/ฉนวนกาซา',
    'Asia/Manila' => 'เอเชีย/มะนิลา',
    'Asia/Qatar' => 'เอเชีย / กาตาร์',
    'Asia/Riyadh' => 'เอเชีย/ริยาดห์',
    'Asia/Singapore' => 'เอเชีย/สิงคโปร์',
    'Asia/Colombo' => 'เอเชีย/โคลอมโบ',
    'Asia/Damascus' => 'เอเชีย/ดามัสกัส',
    'Asia/Dushanbe' => 'เอเชีย/ดูชานเบ',
    'Asia/Bangkok' => 'เอเชีย/กรุงเทพฯ',
    'Asia/Ashgabat' => 'เอเชีย/อาชกาบัต',
    'Asia/Dubai' => 'เอเชีย/ดูไบ',
    'Asia/Samarkand' => 'เอเชีย/ซามาร์คานด์',
    'Asia/Tashkent' => 'เอเชีย/ทาชเคนต์',
    'Asia/Saigon' => 'เอเชีย/ไซ่ง่อน',
    'Asia/Aden' => 'เอเชีย/เอเดน',
    'Australia/Darwin' => 'ออสเตรเลีย/ดาร์วิน',
    'Australia/Perth' => 'ออสเตรเลีย/เพิร์ธ',
    'Australia/Brisbane' => 'ออสเตรเลีย / บริสเบน',
    'Australia/Lindeman' => 'ออสเตรเลีย/เกาะลินดาแมน',
    'Australia/Adelaide' => 'ออสเตรเลีย / แอดิเลด',
    'Australia/Hobart' => 'ออสเตรเลีย/โฮบาร์ต',
    'Australia/Currie' => 'ออสเตรเลีย / กะหรี่',
    'Australia/Melbourne' => 'ออสเตรเลีย/เมลเบิร์น',
    'Australia/Sydney' => 'ออสเตรเลีย/ซิดนีย์',
    'Australia/Broken_Hill' => 'ออสเตรเลีย/โบรคเคนฮิลล์',
    'Indian/Christmas' => 'อินเดีย/คริสต์มาส',
    'Pacific/Rarotonga' => 'แปซิฟิก/ราโรตองกา',
    'Indian/Cocos' => 'อินเดีย / โคโคส',
    'Pacific/Fiji' => 'แปซิฟิก/ฟิจิ',
    'Pacific/Gambier' => 'แปซิฟิก/แกมเบียร์',
    'Pacific/Marquesas' => 'แปซิฟิก/มาร์เคซัส',
    'Pacific/Tahiti' => 'แปซิฟิก / ตาฮิติ',
    'Pacific/Guam' => 'แปซิฟิก/กวม',
    'Pacific/Tarawa' => 'แปซิฟิก / ตาระวา',
    'Pacific/Enderbury' => 'แปซิฟิก/เอนเดอร์',
    'Pacific/Kiritimati' => 'แปซิฟิก/คิริสมาส',
    'Pacific/Saipan' => 'แปซิฟิก/ไซปัน',
    'Pacific/Majuro' => 'แปซิฟิก/มาจูโร',
    'Pacific/Kwajalein' => 'แปซิฟิก/ควาจาเลน',
    'Pacific/Truk' => 'แปซิฟิก/ทรุค',
    'Pacific/Pohnpei' => 'แปซิฟิก / พนเพย',
    'Pacific/Kosrae' => 'แปซิฟิก/คอสไร',
    'Pacific/Nauru' => 'แปซิฟิก / นาอูรู',
    'Pacific/Noumea' => 'แปซิฟิก / นูเมอา',
    'Pacific/Auckland' => 'แปซิฟิก / โอ๊คแลนด์',
    'Pacific/Chatham' => 'แปซิฟิก/ชาแธม',
    'Pacific/Niue' => 'แปซิฟิก / นีอูเอ',
    'Pacific/Norfolk' => 'แปซิฟิก / นอร์โฟล์ค',
    'Pacific/Palau' => 'แปซิฟิก / ปาเลา',
    'Pacific/Port_Moresby' => 'แปซิฟิก/พอร์ตมอเรสบี้',
    'Pacific/Pitcairn' => 'แปซิฟิก / พิตแคร์น',
    'Pacific/Pago_Pago' => 'แปซิฟิก / ปาโกปาโก',
    'Pacific/Apia' => 'แปซิฟิก/เอเปีย',
    'Pacific/Guadalcanal' => 'แปซิฟิก/กัวดัลคะแนล',
    'Pacific/Fakaofo' => 'แปซิฟิก / ฟาเคาโฟ',
    'Pacific/Tongatapu' => 'แปซิฟิก/ตองกาตาปู',
    'Pacific/Funafuti' => 'แปซิฟิก / ฟูนะฟูตี',
    'Pacific/Johnston' => 'แปซิฟิก/จอห์นสตัน',
    'Pacific/Midway' => 'แปซิฟิก/มิดเวย์',
    'Pacific/Wake' => 'แปซิฟิก/เวก',
    'Pacific/Efate' => 'แปซิฟิก/เอฟาเต',
    'Pacific/Wallis' => 'แปซิฟิก/วาลลิ',
    'Europe/London' => 'ยุโรป/ลอนดอน',
    'Europe/Dublin' => 'ยุโรป/ดับลิน',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'ยุโรป/ติรานา',
    'Europe/Andorra' => 'ยุโรป/อันดอร์รา',
    'Europe/Vienna' => 'ยุโรป/เวียนนา',
    'Europe/Minsk' => 'ยุโรป/มินสก์',
    'Europe/Brussels' => 'ยุโรป/บรัสเซลส์',
    'Europe/Sofia' => 'ยุโรป/โซเฟีย',
    'Europe/Prague' => 'ยุโรป/ปราก',
    'Europe/Copenhagen' => 'ยุโรป/โคเปนเฮเกน',
    'Atlantic/Faeroe' => 'แอตแลนติก/แฟโร',
    'America/Danmarkshavn' => 'อเมริกา/Danmarkshavn',
    'America/Scoresbysund' => 'อเมริกา/Scoresbysund',
    'America/Godthab' => 'อเมริกา/Godthab',
    'America/Thule' => 'อเมริกา/Thule',
    'Europe/Tallinn' => 'ยุโรป/ทาลลินน์',
    'Europe/Helsinki' => 'ยุโรป/เฮลซิงกิ',
    'Europe/Paris' => 'ยุโรป/ปารีส',
    'Europe/Berlin' => 'ยุโรป/เบอร์ลิน',
    'Europe/Gibraltar' => 'ยุโรป/ยิบรอลตาร์',
    'Europe/Athens' => 'ยุโรป/เอเธนส์',
    'Europe/Budapest' => 'ยุโรป/บูดาเปสต์',
    'Atlantic/Reykjavik' => 'แอตแลนติก/เรคยาวิก',
    'Europe/Rome' => 'ยุโรป/โรม',
    'Europe/Riga' => 'ยุโรป/ริกา',
    'Europe/Vaduz' => 'ยุโรป/วาดุซ',
    'Europe/Vilnius' => 'ยุโรป/วิลนีอุส',
    'Europe/Luxembourg' => 'ยุโรป/ลักเซมเบิร์ก',
    'Europe/Malta' => 'ยุโรป/มอลตา',
    'Europe/Chisinau' => 'ยุโรป/ชิสิโน่',
    'Europe/Monaco' => 'ยุโรป/โมนาโก',
    'Europe/Amsterdam' => 'ยุโรป/อัมสเตอร์ดัม',
    'Europe/Oslo' => 'ยุโรป/ออสโล',
    'Europe/Warsaw' => 'ยุโรป/วอร์ซอ',
    'Europe/Lisbon' => 'ยุโรป/ลิสบอน',
    'Atlantic/Azores' => 'แอตแลนติก/อะโซร์ส',
    'Atlantic/Madeira' => 'แอตแลนติก / มาเดรา',
    'Europe/Bucharest' => 'ยุโรป/บูคาเรสต์',
    'Europe/Kaliningrad' => 'ยุโรป/คาลินินกราด',
    'Europe/Moscow' => 'ยุโรป/มอสโก',
    'Europe/Samara' => 'ยุโรป/ซามารา',
    'Asia/Yekaterinburg' => 'เอเชีย/เยคาเทอรินเบิร์ก',
    'Asia/Omsk' => 'เอเชีย/Omsk',
    'Asia/Novosibirsk' => 'เอเชีย/โนโวซีบีสค์',
    'Asia/Krasnoyarsk' => 'เอเชีย/ครัสโนยาสค์',
    'Asia/Irkutsk' => 'เอเชีย/อีร์คุตส',
    'Asia/Yakutsk' => 'เอเชีย/ยาคุตสค์',
    'Asia/Vladivostok' => 'เอเชีย/วลาดีวอสตอค',
    'Asia/Sakhalin' => 'เอเชีย/ซาคาลิน',
    'Asia/Magadan' => 'เอเชีย/มากาดาน',
    'Asia/Kamchatka' => 'เอเชีย/คัมชัตคา',
    'Asia/Anadyr' => 'เอเชีย/อนาไดร์',
    'Europe/Belgrade' => 'ยุโรป/เบลเกรด',
    'Europe/Madrid' => 'ยุโรป/มาดริด',
    'Africa/Ceuta' => 'แอฟริกา/เซวตา',
    'Atlantic/Canary' => 'แอตแลนติก/คานารี',
    'Europe/Stockholm' => 'ยุโรป/สตอกโฮล์ม',
    'Europe/Zurich' => 'ยุโรป/ซูริค',
    'Europe/Istanbul' => 'ยุโรป/อิสตันบูล',
    'Europe/Kiev' => 'ยุโรป/เคียฟ',
    'Europe/Uzhgorod' => 'ยุโรป/อูจโกรอด',
    'Europe/Zaporozhye' => 'ยุโรป/ซาปอริซเซีย',
    'Europe/Simferopol' => 'ยุโรป/ซิมเฟอโรโพล',
    'America/New_York' => 'อเมริกา / นิวยอร์ก',
    'America/Chicago' => 'อเมริกา/ชิคาโก',
    'America/North_Dakota/Center' => 'อเมริกา/นอร์ทดาโกตา/ศูนย์กลาง',
    'America/Denver' => 'อเมริกา/เดนเวอร์',
    'America/Los_Angeles' => 'อเมริกา / ลอสแอนเจลิส',
    'America/Juneau' => 'อเมริกา/จูโน',
    'America/Yakutat' => 'อเมริกา/ยาคูทัต',
    'America/Anchorage' => 'อเมริกา/แองเคอเรจ',
    'America/Nome' => 'อเมริกา/โนม',
    'America/Adak' => 'อเมริกา / ดัก',
    'Pacific/Honolulu' => 'แปซิฟิก/โฮโนลูลู',
    'America/Phoenix' => 'อเมริกา/ฟินิกซ์',
    'America/Boise' => 'อเมริกา/บอยส์',
    'America/Indiana/Indianapolis' => 'อเมริกา/อินเดียนา/อินเดียนา โพลิส',
    'America/Indiana/Marengo' => 'อเมริกา/อินเดียน่า/มาเรนโก',
    'America/Indiana/Knox' => 'อเมริกา/อินเดียน่า/น็อกซ์',
    'America/Indiana/Vevay' => 'อเมริกา/อินเดียน่า/Vevay',
    'America/Kentucky/Louisville' => 'อเมริกา/เคนทักกี/หลุยส์วิลล์',
    'America/Kentucky/Monticello' => 'อเมริกา/เคนทักกี/มอนติเซลโล',
    'America/Detroit' => 'อเมริกา/ดีทรอยต์',
    'America/Menominee' => 'อเมริกา/Menominee',
    'America/St_Johns' => 'อเมริกา/เซนต์จอห์น',
    'America/Goose_Bay' => 'อเมริกา/กูซ เบย์',
    'America/Halifax' => 'อเมริกา/แฮลิแฟกซ์',
    'America/Glace_Bay' => 'อเมริกา/แกลซ เบย์',
    'America/Montreal' => 'อเมริกา/มอนทรีออล',
    'America/Toronto' => 'อเมริกา/โตรอนโต',
    'America/Thunder_Bay' => 'อเมริกา/ธันเดอร์เบย์',
    'America/Nipigon' => 'อเมริกา/Nipigon',
    'America/Rainy_River' => 'อเมริกา/เรนนี่ริเวอร์',
    'America/Winnipeg' => 'อเมริกา/วินนิเพก',
    'America/Regina' => 'อเมริกา/เรจิน่า',
    'America/Swift_Current' => 'อเมริกา/สวิฟท์ เคอร์เรนท์',
    'America/Edmonton' => 'อเมริกา/เอ็ดมันตัน',
    'America/Vancouver' => 'อเมริกา/แวนคูเวอร์',
    'America/Dawson_Creek' => 'อเมริกา/ดอว์สันครีก',
    'America/Pangnirtung' => 'อเมริกา/แพงเนียร์ทุง',
    'America/Iqaluit' => 'อเมริกา/อีกาลูอิต',
    'America/Coral_Harbour' => 'อเมริกา/คอรัลฮาร์เบอร์',
    'America/Rankin_Inlet' => 'อเมริกา/แรงกินอินเลท',
    'America/Cambridge_Bay' => 'อเมริกา/แคมบริดจ์เบย์',
    'America/Yellowknife' => 'อเมริกา/เยลโลไนฟ์',
    'America/Inuvik' => 'อเมริกา/อินูวิก',
    'America/Whitehorse' => 'อเมริกา/ไวท์ฮอร์ส',
    'America/Dawson' => 'อเมริกา/ดอว์สัน',
    'America/Cancun' => 'อเมริกา/กังกุน',
    'America/Merida' => 'อเมริกา/เมอร์ริด้า',
    'America/Monterrey' => 'อเมริกา/มอนเทอร์เรย์',
    'America/Mexico_City' => 'อเมริกา/เม็กซิโกซิตี้',
    'America/Chihuahua' => 'อเมริกา/ชิวาวา',
    'America/Hermosillo' => 'อเมริกา/เอร์โมซีโย',
    'America/Mazatlan' => 'อเมริกา/มาซัตลาน',
    'America/Tijuana' => 'อเมริกา/ตีฮัวนา',
    'America/Anguilla' => 'อเมริกา/แองกวิลลา',
    'America/Antigua' => 'อเมริกา/แอนติกา',
    'America/Nassau' => 'อเมริกา/แนสซอ',
    'America/Barbados' => 'อเมริกา/บาร์เบโดส',
    'America/Belize' => 'อเมริกา/เบลีซ',
    'Atlantic/Bermuda' => 'แอตแลนติก/เบอร์มิวดา',
    'America/Cayman' => 'อเมริกา/เคย์แมน',
    'America/Costa_Rica' => 'อเมริกา/คอสตาริกา',
    'America/Havana' => 'อเมริกา/ฮาวานา',
    'America/Dominica' => 'อเมริกา/โดมินิกา',
    'America/Santo_Domingo' => 'อเมริกา/ซานโตโดมิงโก',
    'America/El_Salvador' => 'อเมริกา/เอลซัลวาดอร์',
    'America/Grenada' => 'อเมริกา/เกรเนดา',
    'America/Guadeloupe' => 'อเมริกา/กวาเดอลูป',
    'America/Guatemala' => 'อเมริกา/กัวเตมาลา',
    'America/Port-au-Prince' => 'อเมริกา/ปอร์โตแปรงซ์',
    'America/Tegucigalpa' => 'อเมริกา/เตกูซิกัลปา',
    'America/Jamaica' => 'อเมริกา/จาเมกา',
    'America/Martinique' => 'อเมริกา/มาร์ตินีก',
    'America/Montserrat' => 'อเมริกา/มอนต์เซอร์รัต',
    'America/Managua' => 'อเมริกา/มานากัว',
    'America/Panama' => 'อเมริกา/ปานามา',
    'America/Puerto_Rico' => 'อเมริกา/ปวยร์โตรีโก',
    'America/St_Kitts' => 'อเมริกา/เซนต์คิตส์',
    'America/St_Lucia' => 'อเมริกา/เซนต์ลูเชีย',
    'America/Miquelon' => 'อเมริกา/มีเกอลง',
    'America/St_Vincent' => 'อเมริกา/เซนต์วินเซนต์',
    'America/Grand_Turk' => 'อเมริกา/แกรนด์เติร์ก',
    'America/Tortola' => 'อเมริกา/ทอร์ทอลา',
    'America/St_Thomas' => 'อเมริกา/เซนต์โทมัส',
    'America/Argentina/Buenos_Aires' => 'อเมริกา/อาร์เจนตินา/บัวโนสไอเรส',
    'America/Argentina/Cordoba' => 'อเมริกา/อาร์เจนตินา/คอร์โดบา',
    'America/Argentina/Tucuman' => 'อเมริกา/อาร์เจนตินา/ตูกูมัน',
    'America/Argentina/La_Rioja' => 'อเมริกา/อาร์เจนตินา/ลารีโอคา',
    'America/Argentina/San_Juan' => 'อเมริกา/อาร์เจนตินา/ซานฮวน',
    'America/Argentina/Jujuy' => 'อเมริกา/อาร์เจนตินา/ซานหลุยส์',
    'America/Argentina/Catamarca' => 'อเมริกา/อาร์เจนตินา/กาตามาร์กา',
    'America/Argentina/Mendoza' => 'อเมริกา/อาร์เจนตินา/เมนโดซา',
    'America/Argentina/Rio_Gallegos' => 'อเมริกา/อาร์เจนตินา/ริโอ กาเญโกส',
    'America/Argentina/Ushuaia' => 'อเมริกา/อาร์เจนตินา/อูชัวอา',
    'America/Aruba' => 'อเมริกา/อารูบา',
    'America/La_Paz' => 'อเมริกา/ลาปาซ',
    'America/Noronha' => 'อเมริกา/อโนรอนฮา',
    'America/Belem' => 'อเมริกา/เบเลม',
    'America/Fortaleza' => 'อเมริกา/โฟร์ตาเลซา',
    'America/Recife' => 'อเมริกา/เรซีเฟ',
    'America/Araguaina' => 'อเมริกา/อรากัวอินา',
    'America/Maceio' => 'อเมริกา/มาเซโอ',
    'America/Bahia' => 'อเมริกา/บาเอีย',
    'America/Sao_Paulo' => 'อเมริกา/เซาเปาลู',
    'America/Campo_Grande' => 'อเมริกา/กังปูกรังจี',
    'America/Cuiaba' => 'อเมริกา/กูยาบา',
    'America/Porto_Velho' => 'อเมริกา/โปร์ตูเวลยู',
    'America/Boa_Vista' => 'อเมริกา/โบวิสต้า',
    'America/Manaus' => 'อเมริกา/มาเนาส์',
    'America/Eirunepe' => 'อเมริกา/Eirunepe',
    'America/Rio_Branco' => 'อเมริกา/Rio Branco',
    'America/Santiago' => 'อเมริกา/ซานเตียโก',
    'Pacific/Easter' => 'แปซิฟิก/อีสเตอร์',
    'America/Bogota' => 'อเมริกา/โบโกตา',
    'America/Curacao' => 'อเมริกา/กือราเซา',
    'America/Guayaquil' => 'อเมริกา/กวายากิล',
    'Pacific/Galapagos' => 'แปซิฟิก/กาลาปาโกส',
    'Atlantic/Stanley' => 'แอตแลนติก/สแตนลีย์',
    'America/Cayenne' => 'อเมริกา/กาแยน',
    'America/Guyana' => 'อเมริกา/กายอานา',
    'America/Asuncion' => 'อเมริกา/อะซุนซีออง',
    'America/Lima' => 'อเมริกา/ลิมา',
    'Atlantic/South_Georgia' => 'แอตแลนติก/เซาท์จอร์เจีย',
    'America/Paramaribo' => 'อเมริกา/ปารามาริโบ',
    'America/Port_of_Spain' => 'อเมริกา/ท่าเรือเสปน',
    'America/Montevideo' => 'อเมริกา/มอนเตวิเดโอ',
    'America/Caracas' => 'อเมริกา/การากัส',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'เฟซบุ๊ก',
    'Twitter' => 'ทวิตเตอร์',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'ร้องขอ',
    2 => 'การเข้าถึง',
    3 => 'ไม่ถูกต้อง',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'แคมเปญ',
    'email' => 'อีเมล',
    'event' => 'เหตุการณ์',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'แคมเปญ',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'แคมเปญ',
    'email' => 'อีเมล',
    'event' => 'เหตุการณ์',
    'system' => 'ระบบ',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'ฐานความรู้';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - หมวดหมู่';
$app_list_strings['aok_status_list']['Draft'] = 'ร่าง';
$app_list_strings['aok_status_list']['Expired'] = 'หมดอายุ';
$app_list_strings['aok_status_list']['In_Review'] = 'ดำเนินการตรวจทาน';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'ส่วนตัว';
$app_list_strings['aok_status_list']['published_public'] = 'สาธารณะ';

$app_list_strings['moduleList']['FP_events'] = 'เหตุการณ์';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'สถานที่';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'ได้รับเชิญแล้ว';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'ไม่ได้รับเชิญ';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'เข้าร่วมแล้ว';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'ไม่ได้เข้าร่วม';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'ยอมรับ';
$app_list_strings['fp_event_status_dom']['Declined'] = 'ปฏิเสธ';
$app_list_strings['fp_event_status_dom']['No Response'] = 'ยังไม่ได้รับการตอบกลับ';

$app_strings['LBL_STATUS_EVENT'] = 'สถานะคำเชิญ';
$app_strings['LBL_ACCEPT_STATUS'] = 'สถานะ';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'เฉพาะหน้านี้';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'เลือกทั้งหมด';
$app_strings['LBL_LISTVIEW_NONE'] = 'ไม่เลือกทั้งหมด';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'ดัชนีเหตุการณ์';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'กรณีเหตุการณ์';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'ปรับปรุงกรณี';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== กรุณาตอบกลับเหนือเส้นนี้ ===';


//aop
$app_list_strings['case_state_default_key'] = 'เปิด';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'เปิด',
        'Closed' => 'ปิด',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'มาใหม่',
        'Open_Assigned' => 'รับโอน',
        'Closed_Closed' => 'ปิด',
        'Open_Pending Input' => 'ยังค้างอยู่',
        'Closed_Rejected' => 'คัดออก',
        'Closed_Duplicate' => 'ทำซ้ำ',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'ใช้งานคนเดียว',
        'Account' => 'บัญชีผู้ใช้',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'ค่าเริ่มต้นของระบบ',
    'singleUser' => 'ใช้งานคนเดียว',
    'roundRobin' => 'สลับกันแบบ Round-Robin',
    'leastBusy' => 'แบบเลือกที่ว่างงานที่สุด',
    'random' => 'แบบสุ่ม',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'รายงาน';
$app_list_strings['moduleList']['AOR_Conditions'] = 'รายงานเงื่อนไข';
$app_list_strings['moduleList']['AOR_Charts'] = 'รายงานแผนภูมิ';
$app_list_strings['moduleList']['AOR_Fields'] = 'รายงานฟิลด์';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'กำหนดเวลาการรายงาน';
$app_list_strings['aor_operator_list']['Equal_To'] = 'เท่ากับ';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'ไม่เท่ากับ';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'มากกว่า';
$app_list_strings['aor_operator_list']['Less_Than'] = 'น้อยกว่า';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'มากกว่าเท่ากับ';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'น้อยกว่าเท่ากับ';
$app_list_strings['aor_operator_list']['Contains'] = 'ประกอบด้วย';
$app_list_strings['aor_operator_list']['Starts_With'] = 'เริ่มต้นด้วย';
$app_list_strings['aor_operator_list']['Ends_With'] = 'ลงท้ายด้วย';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'ป-ด-ว';
$app_list_strings['aor_format_options']['m-d-Y'] = 'ด-ว-ป';
$app_list_strings['aor_format_options']['d-m-Y'] = 'ว-ด-ป';
$app_list_strings['aor_format_options']['Y/m/d'] = 'ป/ด/ว';
$app_list_strings['aor_format_options']['m/d/Y'] = 'ด/ว/ป';
$app_list_strings['aor_format_options']['d/m/Y'] = 'ด/ว/ป';
$app_list_strings['aor_format_options']['Y.m.d'] = 'ป.ด.ว';
$app_list_strings['aor_format_options']['m.d.Y'] = 'ด.ว.ป';
$app_list_strings['aor_format_options']['d.m.Y'] = 'ว.ด.ป';
$app_list_strings['aor_format_options']['Ymd'] = 'ปดว';
$app_list_strings['aor_format_options']['Y-m'] = 'ป-ด';
$app_list_strings['aor_format_options']['Y'] = 'ป';
$app_list_strings['aor_condition_operator_list']['And'] = 'และ';
$app_list_strings['aor_condition_operator_list']['OR'] = 'หรือ';
$app_list_strings['aor_condition_type_list']['Value'] = 'ค่า';
$app_list_strings['aor_condition_type_list']['Field'] = 'ฟิลด์';
$app_list_strings['aor_condition_type_list']['Date'] = 'วันที่';
$app_list_strings['aor_condition_type_list']['Multi'] = 'หนึ่งใน';
$app_list_strings['aor_condition_type_list']['Period'] = 'รอบระยะเวลา';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'ผู้ใช้ปัจจุบัน';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'นาที';
$app_list_strings['aor_date_type_list']['hour'] = 'ชั่วโมง';
$app_list_strings['aor_date_type_list']['day'] = 'วัน';
$app_list_strings['aor_date_type_list']['week'] = 'สัปดาห์';
$app_list_strings['aor_date_type_list']['month'] = 'เดือน';
$app_list_strings['aor_date_type_list']['business_hours'] = 'เวลาทำการ';
$app_list_strings['aor_date_options']['now'] = 'ปัจจุบัน';
$app_list_strings['aor_date_options']['field'] = 'ฟิลด์นี้';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'เรียงจากน้อยไปมาก';
$app_list_strings['aor_sort_operator']['DESC'] = 'เรียงจากมากไปน้อย';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'จำนวน';
$app_list_strings['aor_function_list']['MIN'] = 'ค่าน้อยที่สุด';
$app_list_strings['aor_function_list']['MAX'] = 'ค่ามากที่สุด';
$app_list_strings['aor_function_list']['SUM'] = 'ผลรวม';
$app_list_strings['aor_function_list']['AVG'] = 'ค่าเฉลี่ย';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'จำนวน';
$app_list_strings['aor_total_options']['SUM'] = 'ผลรวม';
$app_list_strings['aor_total_options']['AVG'] = 'ค่าเฉลี่ย';
$app_list_strings['aor_chart_types']['bar'] = 'กราฟรูปแท่ง';
$app_list_strings['aor_chart_types']['line'] = 'กราฟเส้น';
$app_list_strings['aor_chart_types']['pie'] = 'กราฟรูปพาย';
$app_list_strings['aor_chart_types']['radar'] = 'กราฟรูปเรดาร์';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'แผนภูมิแบบเรียงซ้อน';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'จัดกลุ่มบาร์';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'รายเดือน';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'รายสัปดาห์';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'รายวัน';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'เปิดใช้งาน';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'ปิดใช้งาน';
$app_list_strings['aor_email_type_list']['Email Address'] = 'อีเมล';
$app_list_strings['aor_email_type_list']['Specify User'] = 'ผู้รับผิดชอบ';
$app_list_strings['aor_email_type_list']['Users'] = 'ผู้ใช้งาน';
$app_list_strings['aor_assign_options']['all'] = 'ผู้ใช้งานทั้งหมด';
$app_list_strings['aor_assign_options']['role'] = 'ผู้ใช้งานแยกตาม Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ผู้ใช้งานแยกตาม Security Group';
$app_list_strings['date_time_period_list']['today'] = 'วันนี้';
$app_list_strings['date_time_period_list']['yesterday'] = 'เมื่อวาน';
$app_list_strings['date_time_period_list']['this_week'] = 'สัปดาห์นี้';
$app_list_strings['date_time_period_list']['last_week'] = 'สัปดาห์ที่แล้ว';
$app_list_strings['date_time_period_list']['last_month'] = 'เดือนที่แล้ว';
$app_list_strings['date_time_period_list']['this_month'] = 'เดือนนี้';
$app_list_strings['date_time_period_list']['this_quarter'] = 'ไตรมาสนี้';
$app_list_strings['date_time_period_list']['last_quarter'] = 'ไตรมาสที่แล้ว';
$app_list_strings['date_time_period_list']['this_year'] = 'ปีนี้';
$app_list_strings['date_time_period_list']['last_year'] = 'ปีที่แล้ว';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'บน';
$app_strings['LBL_CRON_AT'] = 'อยู่ที่';
$app_strings['LBL_CRON_RAW'] = 'ขั้นสูง';
$app_strings['LBL_CRON_MIN'] = 'ตํ่าสุด';
$app_strings['LBL_CRON_HOUR'] = 'ชั่วโมง';
$app_strings['LBL_CRON_DAY'] = 'วัน';
$app_strings['LBL_CRON_MONTH'] = 'เดือน';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'รายวัน';
$app_strings['LBL_CRON_WEEKLY'] = 'รายสัปดาห์';
$app_strings['LBL_CRON_MONTHLY'] = 'รายเดือน';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'สัญญา';
$app_list_strings['moduleList']['AOS_Invoices'] = 'ใบแจ้งหนี้';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'ร่างต้นแบบไฟล์ PDF';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'ผลิตภัณฑ์ - หมวดหมู่';
$app_list_strings['moduleList']['AOS_Products'] = 'สินค้า';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'สินค้าในรายการ';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'กลุ่มรายการ';
$app_list_strings['moduleList']['AOS_Quotes'] = 'ใบเสนอราคา';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'วิเคราะห์';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'คู่แข่ง';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'ลูกค้า';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'ผู้รวบรวม';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'ผู้ลงทุน';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'หุ้นส่วน';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'หนังสือพิมพ์';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'คาดการณ์';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'ตัวแทนจำหน่าย';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'อื่นๆ';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'ร่าง';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'เจรจาต่อรอง';
$app_list_strings['quote_stage_dom']['Delivered'] = 'จัดส่ง';
$app_list_strings['quote_stage_dom']['On Hold'] = 'หยุดไว้ชั่วคราว';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'ยืนยัน';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'ปิดการรับ';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'ปิดการขายไม่ได้งาน';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'ปิด - ขาดการติดต่อ';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'อนุมัติ';
$app_list_strings['approval_status_dom']['Not Approved'] = 'ไม่อนุมัติ';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'วิเคราะห์';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'คู่แข่ง';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'ลูกค้า';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'ผู้รวบรวม';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'ผู้ลงทุน';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'หุ้นส่วน';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'หนังสือพิมพ์';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'คาดการณ์';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'ตัวแทนจำหน่าย';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'อื่นๆ';
$app_list_strings['invoice_status_dom']['Paid'] = 'จ่ายไป';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'ไม่ได้จ่าย';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'ยกเลิก';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'ไม่ได้ออกใบ';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'ใบแจ้งหนี้';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'ปปปป';
$app_list_strings['product_category_dom']['Laptops'] = 'แล็ปท็อป';
$app_list_strings['product_category_dom']['Desktops'] = 'เดสก์ท็อป';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'สินค้า';
$app_list_strings['product_type_dom']['Service'] = 'บริการ';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'ใบเสนอราคา';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'ใบแจ้งหนี้';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'สัญญา';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'ใบเสนอราคา';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'ใบแจ้งหนี้';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'สัญญา';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'ข้อมูลลูกค้า';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'ผู้ติดต่อ';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'ช่องทางการขาย';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'ยังไม่ได้เริ่ม';
$app_list_strings['contract_status_list']['In Progress'] = 'ดำเนินการ';
$app_list_strings['contract_status_list']['Signed'] = 'เซ็นแล้ว';
$app_list_strings['contract_type_list']['Type'] = 'ประเภท';
$app_strings['LBL_PRINT_AS_PDF'] = 'พิมพ์เป็น PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'โปรดเลือกแม่แบบ';
$app_strings['LBL_NO_TEMPLATE'] = 'ผิดพลาด! โปรดเลือกแม่แบบ PDF หรือสร้างใหม่';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'ขั้นตอนการทำงาน';
$app_list_strings['moduleList']['AOW_Conditions'] = 'เงื่อนไขของขั้นตอนการทำงาน';
$app_list_strings['moduleList']['AOW_Processed'] = 'การตรวจสอบกระบวนการ';
$app_list_strings['moduleList']['AOW_Actions'] = 'การดำเนินการลำดับงาน';
$app_list_strings['aow_status_list']['Active'] = 'เปิดใช้งาน';
$app_list_strings['aow_status_list']['Inactive'] = 'ปิดใช้งาน';
$app_list_strings['aow_operator_list']['Equal_To'] = 'เท่ากับ';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'ไม่เท่ากับ';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'มากกว่า';
$app_list_strings['aow_operator_list']['Less_Than'] = 'น้อยกว่า';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'มากกว่าเท่ากับ';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'น้อยกว่าเท่ากับ';
$app_list_strings['aow_operator_list']['Contains'] = 'ประกอบด้วย';
$app_list_strings['aow_operator_list']['Starts_With'] = 'เริ่มต้นด้วย';
$app_list_strings['aow_operator_list']['Ends_With'] = 'ลงท้ายด้วย';
$app_list_strings['aow_operator_list']['is_null'] = 'ว่างเปล่า';
$app_list_strings['aow_process_status_list']['Complete'] = 'เสร็จเรียบร้อย';
$app_list_strings['aow_process_status_list']['Running'] = 'กำลังทำงาน';
$app_list_strings['aow_process_status_list']['Pending'] = 'รอดำเนินการ';
$app_list_strings['aow_process_status_list']['Failed'] = 'การทำงานล้มเหลว';
$app_list_strings['aow_condition_operator_list']['And'] = 'และ';
$app_list_strings['aow_condition_operator_list']['OR'] = 'หรือ';
$app_list_strings['aow_condition_type_list']['Value'] = 'ค่า';
$app_list_strings['aow_condition_type_list']['Field'] = 'ฟิลด์';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'การปรับเปลี่ยนใดๆ';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'ในกลุ่มความปลอดภัย';
$app_list_strings['aow_condition_type_list']['Date'] = 'วันที่';
$app_list_strings['aow_condition_type_list']['Multi'] = 'หนึ่งใน';
$app_list_strings['aow_action_type_list']['Value'] = 'ค่า';
$app_list_strings['aow_action_type_list']['Field'] = 'ฟิลด์';
$app_list_strings['aow_action_type_list']['Date'] = 'วันที่';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'สลับกันแบบ Round-Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'แบบเลือกที่ว่างงานที่สุด';
$app_list_strings['aow_action_type_list']['Random'] = 'แบบสุ่ม';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'ค่า';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'ฟิลด์';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'นาที';
$app_list_strings['aow_date_type_list']['hour'] = 'ชั่วโมง';
$app_list_strings['aow_date_type_list']['day'] = 'วัน';
$app_list_strings['aow_date_type_list']['week'] = 'สัปดาห์';
$app_list_strings['aow_date_type_list']['month'] = 'เดือน';
$app_list_strings['aow_date_type_list']['year'] = 'ปี';
$app_list_strings['aow_date_type_list']['business_hours'] = 'เวลาทำการ';
$app_list_strings['aow_date_options']['now'] = 'ปัจจุบัน';
$app_list_strings['aow_date_options']['today'] = 'วันนี้';
$app_list_strings['aow_date_options']['field'] = 'ฟิลด์นี้';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ผู้ใช้งานทั้งหมด';
$app_list_strings['aow_assign_options']['role'] = 'ผู้ใช้งานแยกตาม Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ผู้ใช้งานแยกตาม Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'อีเมล';
$app_list_strings['aow_email_type_list']['Record Email'] = 'บันทึก อีเมล';
$app_list_strings['aow_email_type_list']['Related Field'] = 'ฟิลด์ที่เกี่ยวข้อง';
$app_list_strings['aow_email_type_list']['Specify User'] = 'ผู้รับผิดชอบ';
$app_list_strings['aow_email_type_list']['Users'] = 'ผู้ใช้งาน';
$app_list_strings['aow_email_to_list']['to'] = 'ผู้รับ';
$app_list_strings['aow_email_to_list']['cc'] = 'สำเนาถึง';
$app_list_strings['aow_email_to_list']['bcc'] = 'สำเนาลับถึง';
$app_list_strings['aow_run_on_list']['All_Records'] = 'รายการทั้งหมด';
$app_list_strings['aow_run_on_list']['New_Records'] = 'รายการใหม่';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'รายการที่ถูกแก้ไข';
$app_list_strings['aow_run_when_list']['Always'] = 'เสมอ';
$app_list_strings['aow_run_when_list']['On_Save'] = 'เฉพาะตอนบันทึก';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'เฉพาะในตัวกำหนดการ';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'โครงการแม่แบบ';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'แม่แบบงานโครงการ';
$app_list_strings['relationship_type_list']['FS'] = 'สิ้นสุดเพื่อเริ่มทำงาน';
$app_list_strings['relationship_type_list']['SS'] = 'เริ่มเพื่อเริ่มทำงาน';
$app_list_strings['duration_unit_dom']['Days'] = 'วัน';
$app_list_strings['duration_unit_dom']['Hours'] = 'ชั่วโมง';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'แสดง Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'ดูรายละเอียด';
$app_strings['LBL_CREATE_PROJECT'] = 'สร้าง Project ใหม่';

//gmaps
$app_strings['LBL_MAP'] = 'แผนที่';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'ลองจิจูด';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'ละติจูด';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'สถานะตำแหน่ง';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'ที่อยู่';

$app_list_strings['moduleList']['jjwg_Maps'] = 'แผนที่';
$app_list_strings['moduleList']['jjwg_Markers'] = 'แผนที่ - เครื่องหมาย';
$app_list_strings['moduleList']['jjwg_Areas'] = 'แผนที่ - พื้นที่';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'แผนที่ - ที่อยู่';

$app_list_strings['moduleList']['jjwp_Partners'] = 'พาร์ทเนอร์ JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'ไมล์';
$app_list_strings['map_unit_type_list']['km'] = 'กิโลเมตร';

$app_list_strings['map_module_type_list']['Accounts'] = 'ข้อมูลลูกค้า';
$app_list_strings['map_module_type_list']['Contacts'] = 'ผู้ติดต่อ';
$app_list_strings['map_module_type_list']['Cases'] = 'การติดตาม';
$app_list_strings['map_module_type_list']['Leads'] = 'ช่องทางการขาย';
$app_list_strings['map_module_type_list']['Meetings'] = 'ประชุม';
$app_list_strings['map_module_type_list']['Opportunities'] = 'โอกาสการขาย';
$app_list_strings['map_module_type_list']['Project'] = 'โครงการ';
$app_list_strings['map_module_type_list']['Prospects'] = 'เป้าหมาย';

$app_list_strings['map_relate_type_list']['Accounts'] = 'ข้อมูลลูกค้า';
$app_list_strings['map_relate_type_list']['Contacts'] = 'ข้อมูลผู้ที่ติดต่อ';
$app_list_strings['map_relate_type_list']['Cases'] = 'การติดตาม';
$app_list_strings['map_relate_type_list']['Leads'] = 'ช่องทางการขาย';
$app_list_strings['map_relate_type_list']['Meetings'] = 'ประชุม';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'โอกาสการขาย';
$app_list_strings['map_relate_type_list']['Project'] = 'แผนงาน';
$app_list_strings['map_relate_type_list']['Prospects'] = 'เป้าหมาย';

$app_list_strings['marker_image_list']['accident'] = 'อุบัติเหตุ';
$app_list_strings['marker_image_list']['administration'] = 'ผู้ดูแลระบบ';
$app_list_strings['marker_image_list']['agriculture'] = 'การเกษตร';
$app_list_strings['marker_image_list']['aircraft_small'] = 'เครื่องบินขนาดเล็ก';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'เครื่องบินท่องเที่ยว';
$app_list_strings['marker_image_list']['airport'] = 'สนามบิน';
$app_list_strings['marker_image_list']['amphitheater'] = 'อัฒจันทร์';
$app_list_strings['marker_image_list']['apartment'] = 'อพาร์ทเมนท์';
$app_list_strings['marker_image_list']['aquarium'] = 'พิพิธภัณฑ์สัตว์น้ำ';
$app_list_strings['marker_image_list']['arch'] = 'ซุ้มประตู';
$app_list_strings['marker_image_list']['atm'] = 'เอทีเอ็ม';
$app_list_strings['marker_image_list']['audio'] = 'เสียง';
$app_list_strings['marker_image_list']['bank'] = 'ธนาคาร';
$app_list_strings['marker_image_list']['bank_euro'] = 'ธนาคารยูโร';
$app_list_strings['marker_image_list']['bank_pound'] = 'ธนาคารปอนด์';
$app_list_strings['marker_image_list']['bar'] = 'บาร์';
$app_list_strings['marker_image_list']['beach'] = 'ชายหาด';
$app_list_strings['marker_image_list']['beautiful'] = 'สวยงาม';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'ที่จอดรถจักรยาน';
$app_list_strings['marker_image_list']['big_city'] = 'เมืองใหญ่';
$app_list_strings['marker_image_list']['bridge'] = 'สะพาน';
$app_list_strings['marker_image_list']['bridge_modern'] = 'สะพานที่ทันสมัย';
$app_list_strings['marker_image_list']['bus'] = 'บัส';
$app_list_strings['marker_image_list']['cable_car'] = 'รถราง';
$app_list_strings['marker_image_list']['car'] = 'รถ';
$app_list_strings['marker_image_list']['car_rental'] = 'บริการรถเช่า';
$app_list_strings['marker_image_list']['carrepair'] = 'ซ่อมรถ';
$app_list_strings['marker_image_list']['castle'] = 'ปราสาท';
$app_list_strings['marker_image_list']['cathedral'] = 'มหาวิหาร';
$app_list_strings['marker_image_list']['chapel'] = 'โบสถ์';
$app_list_strings['marker_image_list']['church'] = 'คริสตจักร';
$app_list_strings['marker_image_list']['city_square'] = 'ซิตี้สแควร์';
$app_list_strings['marker_image_list']['cluster'] = 'คลัสเตอร์';
$app_list_strings['marker_image_list']['cluster_2'] = 'คลัสเตอร์ 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'คลัสเตอร์ 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'คลัสเตอร์ 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'คลัสเตอร์ 5';
$app_list_strings['marker_image_list']['coffee'] = 'กาแฟ';
$app_list_strings['marker_image_list']['community_centre'] = 'ศูนย์ชุมชน';
$app_list_strings['marker_image_list']['company'] = 'บริษัท';
$app_list_strings['marker_image_list']['conference'] = 'การประชุม';
$app_list_strings['marker_image_list']['construction'] = 'การก่อสร้าง';
$app_list_strings['marker_image_list']['convenience'] = 'ความสะดวกสบาย';
$app_list_strings['marker_image_list']['court'] = 'คอร์ท';
$app_list_strings['marker_image_list']['cruise'] = 'ล่องเรือ';
$app_list_strings['marker_image_list']['currency_exchange'] = 'แลกเปลี่ยนเงินตรา';
$app_list_strings['marker_image_list']['customs'] = 'ศุลกากร';
$app_list_strings['marker_image_list']['cycling'] = 'ขี่จักรยาน';
$app_list_strings['marker_image_list']['dam'] = 'เขื่อน';
$app_list_strings['marker_image_list']['dentist'] = 'ทันตแพทย์';
$app_list_strings['marker_image_list']['deptartment_store'] = 'ห้างสรรพสินค้า';
$app_list_strings['marker_image_list']['disability'] = 'ความพิการ';
$app_list_strings['marker_image_list']['disabled_parking'] = 'ที่จอดรถคนพิการ';
$app_list_strings['marker_image_list']['doctor'] = 'แพทย์';
$app_list_strings['marker_image_list']['dog_leash'] = 'สายจูงสุนัข';
$app_list_strings['marker_image_list']['down'] = 'ลง';
$app_list_strings['marker_image_list']['down_left'] = 'ลงซ้าย';
$app_list_strings['marker_image_list']['down_right'] = 'ลงขวา';
$app_list_strings['marker_image_list']['down_then_left'] = 'ลงแล้วซ้าย';
$app_list_strings['marker_image_list']['down_then_right'] = 'ลง แล้วด้านขวา';
$app_list_strings['marker_image_list']['drugs'] = 'ยาเสพติด';
$app_list_strings['marker_image_list']['elevator'] = 'ลิฟท์';
$app_list_strings['marker_image_list']['embassy'] = 'สถานเอกอัครราชทูต';
$app_list_strings['marker_image_list']['expert'] = 'ผู้เชี่ยวชาญ';
$app_list_strings['marker_image_list']['factory'] = 'โรงงาน';
$app_list_strings['marker_image_list']['falling_rocks'] = 'หินตก';
$app_list_strings['marker_image_list']['fast_food'] = 'อาหารจานด่วน';
$app_list_strings['marker_image_list']['festival'] = 'เทศกาล';
$app_list_strings['marker_image_list']['fjord'] = 'ฟยอร์ด';
$app_list_strings['marker_image_list']['forest'] = 'ป่า';
$app_list_strings['marker_image_list']['fountain'] = 'น้ำพุ';
$app_list_strings['marker_image_list']['friday'] = 'วันศุกร์';
$app_list_strings['marker_image_list']['garden'] = 'สวน';
$app_list_strings['marker_image_list']['gas_station'] = 'ปั้มน้ำมัน';
$app_list_strings['marker_image_list']['geyser'] = 'น้ำพุร้อน';
$app_list_strings['marker_image_list']['gifts'] = 'ของขวัญ';
$app_list_strings['marker_image_list']['gourmet'] = 'นักกินและดื่ม';
$app_list_strings['marker_image_list']['grocery'] = 'ร้านขายของชำ';
$app_list_strings['marker_image_list']['hairsalon'] = 'ร้านทำผม';
$app_list_strings['marker_image_list']['helicopter'] = 'เฮลิคอปเตอร์';
$app_list_strings['marker_image_list']['highway'] = 'ทางหลวง';
$app_list_strings['marker_image_list']['historical_quarter'] = 'ย่านประวัติศาสตร์';
$app_list_strings['marker_image_list']['home'] = 'หน้าหลัก';
$app_list_strings['marker_image_list']['hospital'] = 'โรงพยาบาล';
$app_list_strings['marker_image_list']['hostel'] = 'โฮสเทล';
$app_list_strings['marker_image_list']['hotel'] = 'โรงแรม';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'โรงแรม 1 ดาว';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'โรงแรม 2 ดาว';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'โรงแรม 3 ดาว';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'โรงแรม 4 ดาว';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'โรงแรม 5 ดาว';
$app_list_strings['marker_image_list']['info'] = 'ข้อมูล';
$app_list_strings['marker_image_list']['justice'] = 'ความยุติธรรม';
$app_list_strings['marker_image_list']['lake'] = 'ทะเลสาบ';
$app_list_strings['marker_image_list']['laundromat'] = 'เครื่องซักผ้าอัตโนมัติ';
$app_list_strings['marker_image_list']['left'] = 'ซ้าย';
$app_list_strings['marker_image_list']['left_then_down'] = 'ซ้ายแล้วลง';
$app_list_strings['marker_image_list']['left_then_up'] = 'ซ้ายแล้วขึ้นบน';
$app_list_strings['marker_image_list']['library'] = 'ไลบลารี่';
$app_list_strings['marker_image_list']['lighthouse'] = 'ประภาคาร';
$app_list_strings['marker_image_list']['liquor'] = 'เหล้า';
$app_list_strings['marker_image_list']['lock'] = 'ล็อค';
$app_list_strings['marker_image_list']['main_road'] = 'ถนนหลัก';
$app_list_strings['marker_image_list']['massage'] = 'นวด';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'หอคอยโทรศัพท์มือถือ';
$app_list_strings['marker_image_list']['modern_tower'] = 'หอคอยทันสมัย';
$app_list_strings['marker_image_list']['monastery'] = 'พระอาราม';
$app_list_strings['marker_image_list']['monday'] = 'วันจันทร์';
$app_list_strings['marker_image_list']['monument'] = 'อนุสาวรีย์';
$app_list_strings['marker_image_list']['mosque'] = 'มัสยิด';
$app_list_strings['marker_image_list']['motorcycle'] = 'รถจักรยานยนต์';
$app_list_strings['marker_image_list']['museum'] = 'พิพิธภัณฑ์';
$app_list_strings['marker_image_list']['music_live'] = 'เพลงสด';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'เจดีย์';
$app_list_strings['marker_image_list']['palace'] = 'พระราชวัง';
$app_list_strings['marker_image_list']['panoramic'] = 'พาโนรามา';
$app_list_strings['marker_image_list']['park'] = 'สวน';
$app_list_strings['marker_image_list']['park_and_ride'] = 'ปาร์คแอนด์ไรด์';
$app_list_strings['marker_image_list']['parking'] = 'ที่จอดรถ';
$app_list_strings['marker_image_list']['photo'] = 'รูปภาพ';
$app_list_strings['marker_image_list']['picnic'] = 'ปิกนิก';
$app_list_strings['marker_image_list']['places_unvisited'] = 'เยี่ยมชมสถานที่ต่างๆ';
$app_list_strings['marker_image_list']['places_visited'] = 'สถานที่ที่เยี่ยมชม';
$app_list_strings['marker_image_list']['playground'] = 'สนามเด็กเล่น';
$app_list_strings['marker_image_list']['police'] = 'ตำรวจ';
$app_list_strings['marker_image_list']['port'] = 'พอร์ต';
$app_list_strings['marker_image_list']['postal'] = 'ไปรษณีย์';
$app_list_strings['marker_image_list']['power_line_pole'] = 'ขั้วสายไฟ';
$app_list_strings['marker_image_list']['power_plant'] = 'โรงไฟฟ้า';
$app_list_strings['marker_image_list']['power_substation'] = 'สถานีไฟฟ้าย่อย';
$app_list_strings['marker_image_list']['public_art'] = 'ศิลปะสาธารณะ';
$app_list_strings['marker_image_list']['rain'] = 'ฝน';
$app_list_strings['marker_image_list']['real_estate'] = 'อสังหาริมทรัพย์';
$app_list_strings['marker_image_list']['regroup'] = 'จัดกลุ่มใหม่';
$app_list_strings['marker_image_list']['resort'] = 'รีสอร์ท';
$app_list_strings['marker_image_list']['restaurant'] = 'ร้านอาหาร';
$app_list_strings['marker_image_list']['restaurant_african'] = 'ร้านอาหารแอฟริกา';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'ร้านอาหารบาร์บีคิว';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'ห้องอาหารบุฟเฟต์';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'ร้านอาหารจีน';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'ร้านอาหารปลา';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'ร้านอาหารฟิชชิพ';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'ร้านอาหารรสเลิศ';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'ร้านอาหารกรีก';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'ร้านอาหารอินเดีย';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'ร้านอาหารอิตาลี';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'ร้านอาหารญี่ปุ่น';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'ร้านอาหาร เคบับ';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'ร้านอาหารเกาหลี';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'ร้านอาหารเมดิเตอร์เรเนียน';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'ร้านอาหารเม็กซิกัน';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'ร้านอาหารโรแมนติก';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'ร้านอาหารไทย';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'ร้านอาหารตุรกี';
$app_list_strings['marker_image_list']['right'] = 'ขวา';
$app_list_strings['marker_image_list']['right_then_down'] = 'ขวาแล้วลง';
$app_list_strings['marker_image_list']['right_then_up'] = 'ขวาแล้วขึ้น';
$app_list_strings['marker_image_list']['saturday'] = 'วันเสาร์';
$app_list_strings['marker_image_list']['school'] = 'โรงเรียน';
$app_list_strings['marker_image_list']['shopping_mall'] = 'ห้างสรรพสินค้า';
$app_list_strings['marker_image_list']['shore'] = 'ชายฝั่ง';
$app_list_strings['marker_image_list']['sight'] = 'สายตา';
$app_list_strings['marker_image_list']['small_city'] = 'เมืองขนาดเล็ก';
$app_list_strings['marker_image_list']['snow'] = 'หิมะ';
$app_list_strings['marker_image_list']['spaceport'] = 'นำร่อง';
$app_list_strings['marker_image_list']['speed_100'] = 'ความเร็ว 100';
$app_list_strings['marker_image_list']['speed_110'] = 'ความเร็ว 110';
$app_list_strings['marker_image_list']['speed_120'] = 'ความเร็ว 120';
$app_list_strings['marker_image_list']['speed_130'] = 'ความเร็ว 130';
$app_list_strings['marker_image_list']['speed_20'] = 'ความเร็ว 20';
$app_list_strings['marker_image_list']['speed_30'] = 'ความเร็ว 30';
$app_list_strings['marker_image_list']['speed_40'] = 'ความเร็ว 40';
$app_list_strings['marker_image_list']['speed_50'] = 'ความเร็ว 50';
$app_list_strings['marker_image_list']['speed_60'] = 'ความเร็ว 60';
$app_list_strings['marker_image_list']['speed_70'] = 'ความเร็ว 70';
$app_list_strings['marker_image_list']['speed_80'] = 'ความเร็ว 80';
$app_list_strings['marker_image_list']['speed_90'] = 'ความเร็ว 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Speed Hump';
$app_list_strings['marker_image_list']['stadium'] = 'สนามกีฬา';
$app_list_strings['marker_image_list']['statue'] = 'รูปปั้น';
$app_list_strings['marker_image_list']['steam_train'] = 'รถไฟไอน้ำ';
$app_list_strings['marker_image_list']['stop'] = 'หยุด';
$app_list_strings['marker_image_list']['stoplight'] = 'ไฟสัญญาณจราจร';
$app_list_strings['marker_image_list']['subway'] = 'รถไฟใต้ดิน';
$app_list_strings['marker_image_list']['sun'] = 'อา';
$app_list_strings['marker_image_list']['sunday'] = 'วันอาทิตย์';
$app_list_strings['marker_image_list']['supermarket'] = 'ซูเปอร์มาร์เก็ต';
$app_list_strings['marker_image_list']['synagogue'] = 'โบสถ์';
$app_list_strings['marker_image_list']['tapas'] = 'ทาปาส';
$app_list_strings['marker_image_list']['taxi'] = 'แท็กซี่';
$app_list_strings['marker_image_list']['taxiway'] = 'ทางเดินรถแท็กซี่';
$app_list_strings['marker_image_list']['teahouse'] = 'โรงน้ำชา';
$app_list_strings['marker_image_list']['telephone'] = 'โทรศัพท์';
$app_list_strings['marker_image_list']['temple_hindu'] = 'วัดฮินดู';
$app_list_strings['marker_image_list']['terrace'] = 'ระเบียง';
$app_list_strings['marker_image_list']['text'] = 'ข้อความ';
$app_list_strings['marker_image_list']['theater'] = 'โรงละคร';
$app_list_strings['marker_image_list']['theme_park'] = 'สวนสนุก';
$app_list_strings['marker_image_list']['thursday'] = 'วันพฤหัสบดี';
$app_list_strings['marker_image_list']['toilets'] = 'ห้องน้ำ';
$app_list_strings['marker_image_list']['toll_station'] = 'สถานีโทร';
$app_list_strings['marker_image_list']['tower'] = 'หอคอย';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'กล้องบังคับการจราจร';
$app_list_strings['marker_image_list']['train'] = 'รถไฟ';
$app_list_strings['marker_image_list']['tram'] = 'รถราง';
$app_list_strings['marker_image_list']['truck'] = 'รถบรรทุก';
$app_list_strings['marker_image_list']['tuesday'] = 'วันอังคาร';
$app_list_strings['marker_image_list']['tunnel'] = 'อุโมงค์';
$app_list_strings['marker_image_list']['turn_left'] = 'เลี้ยวซ้าย';
$app_list_strings['marker_image_list']['turn_right'] = 'เลี้ยวขวา';
$app_list_strings['marker_image_list']['university'] = 'มหาวิทยาลัย';
$app_list_strings['marker_image_list']['up'] = 'ขึ้น';
$app_list_strings['marker_image_list']['up_left'] = 'ขึ้นทางซ้าย';
$app_list_strings['marker_image_list']['up_right'] = 'ขั้นทางขวา';
$app_list_strings['marker_image_list']['up_then_left'] = 'ขึ้นซ้ายแล้ว';
$app_list_strings['marker_image_list']['up_then_right'] = 'ขึ้น แล้วขวา';
$app_list_strings['marker_image_list']['vespa'] = 'เวสป้า';
$app_list_strings['marker_image_list']['video'] = 'วิดีโอ';
$app_list_strings['marker_image_list']['villa'] = 'วิลล่า';
$app_list_strings['marker_image_list']['water'] = 'น้ำ';
$app_list_strings['marker_image_list']['waterfall'] = 'น้ำตก';
$app_list_strings['marker_image_list']['watermill'] = 'โรงสีน้ำ';
$app_list_strings['marker_image_list']['waterpark'] = 'สวนน้ำ';
$app_list_strings['marker_image_list']['watertower'] = 'อ่างเก็บน้ำ';
$app_list_strings['marker_image_list']['wednesday'] = 'วันพุธ';
$app_list_strings['marker_image_list']['wifi'] = 'Wi-Fi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'กังหันลม';
$app_list_strings['marker_image_list']['windmill'] = 'กังหันลม';
$app_list_strings['marker_image_list']['winery'] = 'โรงกลั่นไวน์';
$app_list_strings['marker_image_list']['work_office'] = 'สำนักงานการทำงาน';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'มรดกโลก';
$app_list_strings['marker_image_list']['zoo'] = 'สวนสัตว์';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'อยู่นอกสำนักงาน';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'กำลังอยู่ในระหว่างการประชุม';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'กำหนดการณ์ใหม่';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'ใส่รายละเอียดกำหนดการณ์';
$app_strings['LBL_RESCHEDULE_DATE'] = 'วันที่';
$app_strings['LBL_RESCHEDULE_REASON'] = 'เหตุผล:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'เลือกวันที่ให้ถูกต้อง';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'เลือกเหตุผล';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'กำหนดการณ์ใหม่';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'ประวัติการโทร';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'จำนวนครั้งที่โทร';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'การจัดการกลุ่มของ Security Suite';
$app_strings['LBL_SECURITYGROUP'] = 'กลุ่มรักษาความปลอดภัย';
$app_strings['LBL_ROLE'] = 'บทบาท';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'บัญชีอีเมล์ขาออก';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'การเชื่อมต่อ OAuth ภายนอก';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'ผู้ให้บริการ OAuth ภายนอก';

//social
$app_strings['FACEBOOK_USER_C'] = 'เฟซบุ๊ก';
$app_strings['TWITTER_USER_C'] = 'ทวิตเตอร์';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'รายละเอียดฟีดเครือข่ายสังคม';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'คัดกรอง';

$app_strings['LBL_COLLECTION_TYPE'] = 'ประเภท';

$app_strings['LBL_ADD_TAB'] = 'เพิ่มแท็บ';
$app_strings['LBL_EDIT_TAB'] = 'แก้ไขแท็บ';
$app_strings['LBL_SUITE_DASHBOARD'] = 'แดชบอร์ด SUITECRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'ป้อนชื่อของแดชบอร์ด:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'จำนวนของคอลัมน์:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'คุณแน่ใจไหมที่ต้องการจะลบ';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'แดชบอร์ด';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'เพิ่มหน้าแดชบอร์ด';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'ลบหน้าแดชบอร์ดปัจจุบัน';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'เปลี่ยนชื่อหน้าแดชบอร์ด';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'การดำเนินการ';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'งาน',
    'Meetings' => 'ประชุม',
    'Calls' => 'บันทึกการโทร',
    'Notes' => 'บันทึกย่อ',
    'Emails' => 'อีเมล'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'แก้ไขส่วนหนึ่งของแม่แบบ';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "คุณได้คลิออกจากฟิลด์ที่คุณได้แก้ไขโดยไม่บันทึก คลิกตกลงถ้าคุณมีความสุขที่สูญเสียการเปลี่ยนแปลง หรือยกเลิกหากคุณต้องการดำเนินการแก้ไข";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "ข้อผิดพลาดในการโหลดฟิลด์ เซสชันของคุณอาจหมดเวลาแล้ว โปรดเข้าสู่ระบบอีกครั้งเพื่อแก้ไขปัญหานี้";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'การขาย',
    'getAccountsSpotsData' => 'ข้อมูลลูกค้า',
    'getLeadsSpotsData' => 'ช่องทางการขาย',
    'getServiceSpotsData' => 'บริการ',
    'getMarketingSpotsData' => 'การตลาด',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'กิจกรรม',
    'getQuotesSpotsData' => 'ใบเสนอราคา'
);

$app_list_strings['moduleList']['Spots'] = 'จุด';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'เวลาทำการ';
$app_list_strings['business_hours_list']['0'] = '00:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '12: 00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19: 00';
$app_list_strings['business_hours_list']['20'] = '20: 00';
$app_list_strings['business_hours_list']['21'] = '21: 00';
$app_list_strings['business_hours_list']['22'] = '22: 00';
$app_list_strings['business_hours_list']['23'] = '23: 00';
$app_list_strings['day_list']['Monday'] = 'วันจันทร์';
$app_list_strings['day_list']['Tuesday'] = 'วันอังคาร';
$app_list_strings['day_list']['Wednesday'] = 'วันพุธ';
$app_list_strings['day_list']['Thursday'] = 'วันพฤหัสบดี';
$app_list_strings['day_list']['Friday'] = 'วันศุกร์';
$app_list_strings['day_list']['Saturday'] = 'วันเสาร์';
$app_list_strings['day_list']['Sunday'] = 'วันอาทิตย์';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'จดหมาย';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'ถูกกฎหมาย';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'แนวตั้ง';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'ภูมิทัศน์';


$app_list_strings['moduleList']['SurveyResponses'] = 'การตอบแบบสำรวจ';
$app_list_strings['moduleList']['Surveys'] = 'สำรวจ';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'การตอบคำถามแบบสำรวจ';
$app_list_strings['moduleList']['SurveyQuestions'] = 'คำถามการสำรวจ';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'ตัวเลือกคำถามแบบสำรวจ';
$app_list_strings['survey_status_list']['Draft'] = 'ร่าง';
$app_list_strings['survey_status_list']['Public'] = 'สาธารณะ';
$app_list_strings['survey_status_list']['Closed'] = 'ปิด';
$app_list_strings['surveys_question_type']['Text'] = 'ข้อความ';
$app_list_strings['surveys_question_type']['Textbox'] = 'กล่องข้อความ';
$app_list_strings['surveys_question_type']['Checkbox'] = 'ทำเครื่องหมาย';
$app_list_strings['surveys_question_type']['Radio'] = 'วิทยุ';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdowns';
$app_list_strings['surveys_question_type']['Multiselect'] = 'เลือกหลายรายการ';
$app_list_strings['surveys_question_type']['Matrix'] = 'เมทริกซ์';
$app_list_strings['surveys_question_type']['DateTime'] = 'วันที่และเวลา';
$app_list_strings['surveys_question_type']['Date'] = 'วันที่';
$app_list_strings['surveys_question_type']['Scale'] = 'มาตราส่วน';
$app_list_strings['surveys_question_type']['Rating'] = 'เรตติ้ง';
$app_list_strings['surveys_matrix_options'][0] = 'พึงพอใจ';
$app_list_strings['surveys_matrix_options'][1] = 'ทั้งไม่พอใจ';
$app_list_strings['surveys_matrix_options'][2] = 'ไม่พอใจ';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'รอยืนยันการเข้าร่วมใน ยืนยันเลือกไม่ส่ง';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'ยืนยันการเลือกใช้การส่งอีเมลล้มเหลว';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'รอยืนยันการเข้าร่วมใน ยืนยันเลือกไม่ส่ง';
$app_strings['LBL_OPT_IN'] = 'เลือกเข้าร่วม';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'ยืนยันเข้าร่วมแล้ว';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'คัดออก';
$app_strings['LBL_OPT_IN_INVALID'] = 'ไม่ถูกต้อง';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'ถูกปิดใช้งาน',
    'opt-in' => 'เข้าร่วมใน',
    'confirmed-opt-in' => 'ยืนยันเข้าร่วม'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'ไม่มี Opt in',
    'opt-in' => 'เข้าร่วมใน',
    'confirmed-opt-in' => 'ยืนยันเข้าร่วม'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'The confirm opt in email has been added to the email queue for %s email address(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'ไม่สามารถส่งอีเมลไปยังที่อยู่อีเมล %s เนื่องจากไม่ได้เลือกรับ ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'ที่อยู่อีเมล %s ไม่มีรหัสที่ถูกต้อง ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'การตรวจสอบสิทธิ์สองปัจจัยล้มเหลว';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'ส่งรหัสการตรวจสอบสิทธิ์สองปัจจัยแล้ว';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'ไม่สามารถส่งรหัสการตรวจสอบสิทธิ์สองปัจจัย';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'ขอขอบคุณที่ส่งความสนใจของคุณ';

$app_strings['ERR_IP_CHANGE'] = 'เซสชันของคุณถูกยกเลิกเนื่องจากมีการเปลี่ยนแปลงที่อยู่ IP ของคุณอย่างมีนัยสำคัญ';
$app_strings['ERR_RETURN'] = 'กลับไปที่หน้าหลัก';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'การให้รหัสผ่าน',
    'client_credentials' => 'ข้อมูลรับรองลูกค้า',
    'implicit' => 'โดยปริยาย',
    'authorization_code' => 'รหัสอนุญาต'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => ' นาที ',
    'hour' => ' ชั่วโมง',
    'day' => 'วัน',
    'week' => 'สัปดาห์',
    'month' => 'เดือน',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'ค้นหา (ใหม่)',
    'UnifiedSearch' => 'ร่วมค้นหา (แบบดั้งเดิม)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'ส่วนตัว',
    'shared' => 'ใช้ร่วมกัน',
    'group' => 'กลุ่ม',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'เชื่อมต่อแล้ว',
    'failed' => 'การทำงานล้มเหลว',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'ดำเนินการ',
    'success' => 'สำเร็จ',
    'warning' => 'คำเตือน',
    'error' => 'ข้อผิดพลาด',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API ผิดพลาด';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'เกิดข้อผิดพลาด JSON API';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api เวอร์ชั่น 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'โปรดแน่ใจว่าคุณกรอกข้อมูลในฟิลด์ที่จำเป็น';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API คาดว่าเนื้อหาของคำขอจะเป็น JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'ตรวจสอบคำขอ Payload ของ Json Api ไม่ได้';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'ไม่สามารถตรวจสอบการตอบสนองของข้อมูล Json Api';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API ไม่พบทรัพยากร';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API จะแสดง "ยอมรับ" ส่วนหัวจะเป็น application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API จะแสดง "ชนิดของเนื้อหา" ส่วนหัวจะเป็น application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'ตอนนี้เปิดใช้งานการแจ้งเตือนบนเดสก์ท็อปสำหรับเว็บเบราว์เซอร์นี้';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'การแจ้งเตือนบนเดสก์ท็อปถูกปิดใช้งานสำหรับเว็บเบราว์เซอร์นี้ ใช้การตั้งค่าเบราว์เซอร์ของคุณเพื่อเปิดใช้งานอีกครั้ง';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'เบราว์เซอร์นี้ไม่สนับสนุนการแจ้งเตือนบนเดสก์ท็อป';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'มีข้อผิดพลาด: ';
$app_strings['LBL_CLICK_HERE'] = 'คลิ๊กที่นี่';
$app_strings['LBL_TO_CONTINUE'] = ' เพื่อจะดำเนินการต่อ';

$app_strings['IMAP_HANDLER_ERROR'] = 'ข้อผิดพลาด: {error}; คีย์คือ: "{key}"';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'ตกลง: การตั้งค่าการทดสอบเปลี่ยนเป็น "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'คำขอไม่ถูกต้อง ใช้ค่า "{var}"';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'เกิดข้อผิดพลาดที่ไม่รู้จัก ไม่ได้บันทึกคีย์ "{key}"';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'ไม่มีการตั้งค่าการทดสอบ';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'ไม่พบฟีด';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'ข้อผิดพลาดในการบันทึกคีย์';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'ข้อผิดพลาดที่ไม่รู้จัก';
$app_strings['LBL_SEARCH_TITLE']                   = 'ค้นหา';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'ป้อนเกณฑ์การค้นหา';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'ค้นหา';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'ค้นหา';
$app_strings['LBL_SEARCH_QUERY']                   = 'การค้นหา: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'ผลลัพธ์ทั้งหมด ';
$app_strings['LBL_SEARCH_PREV'] = 'ย้อนกลับ';
$app_strings['LBL_SEARCH_NEXT'] = 'ถัดไป';
$app_strings['LBL_SEARCH_PAGE'] = 'หน้า ';
$app_strings['LBL_SEARCH_OF'] = ' จาก ';
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Use Advanced Search';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Use Basic Search';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Legacy MPDF Engine';
$app_strings['LBL_TCPDF_ENGINE'] = 'TCPDF Engine';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Invalid file name:';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'This can only be alphanumeric characters, plus \'.\' , \'-\' and \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Invalid import file name';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = 'Password set. Enter value to set new password.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = 'Value set. Enter new value to override current one.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login with Inbound Email server. For connection: ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = 'Your IMAP OAuth session has expired, please login again in the connection: ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = 'คีย์';
$app_strings['LBL_VALUE'] = 'ค่า';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'บัญชีขาออก';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'บัญชีขาเข้า';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'บัญชีระบบ';
$app_strings['LBL_FROM_SYSTEM'] = 'ส่งจากระบบ';
$app_strings['LBL_SIGNATURE'] = 'ลายเซ็น';

$app_list_strings['email_import_timeframe_start_dom'] = [
    '-1 year' => '1 Year',
    '-6 months' => '6 Months',
    '-3 months' => '3 Months',
    '-30 days' => '30 Days',
    '-15 days' => '15 Days',
    '-5 days' => '5 Days',
    '-1 days' => '1 Day',
    '0 days' => '0 Days',
];
