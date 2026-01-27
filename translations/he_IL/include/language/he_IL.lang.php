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
    'language_pack_name' => 'עברית (Hebrew) - he_IL',
    'moduleList' => array(
        'Home' => 'בית',
        'ResourceCalendar' => 'יומן משאבים',
        'Contacts' => 'אנשי קשר',
        'Accounts' => 'חשבונות',
        'Alerts' => 'התראות',
        'Opportunities' => 'הזדמנויות',
        'Cases' => 'קריאות',
        'Notes' => 'רשימות',
        'Calls' => 'שיחות',
        'TemplateSectionLine' => 'תבנית מקטע קו',
        'Calls_Reschedule' => 'שינוי מועד שיחות',
        'Emails' => 'מיילים',
        'EAPM' => 'EAPM',
        'Meetings' => 'פגישות',
        'Tasks' => 'משימות',
        'Calendar' => 'לוח שנה',
        'Leads' => 'לידים',
        'Currencies' => 'מטבעות',
        'Activities' => 'פעילויות',
        'Bugs' => 'תקלות',
        'Feeds' => 'RSS',
        'iFrames' => 'פורטל',
        'TimePeriods' => 'פרקי זמן',
        'ContractTypes' => 'סוגי חוזים',
        'Schedulers' => 'מתזמנים',
        'Project' => 'פרויקטים',
        'ProjectTask' => 'משימות פרוייקטים',
        'Campaigns' => 'קמפיינים',
        'CampaignLog' => 'יומן קמפיינים',
        'Documents' => 'מסמכים',
        'DocumentRevisions' => 'בדיקת מסמך מחודשת',
        'Connectors' => 'חיבורים',
        'Roles' => 'תפקידים',
        'Notifications' => 'הודעות',
        'Sync' => 'סנכן',
        'Users' => 'משתמשים',
        'Employees' => 'עובדים',
        'Administration' => 'אדמיניסטרציה',
        'ACLRoles' => 'תפקידים',
        'InboundEmail' => 'מיילים נכנסים',
        'Releases' => 'הוצאה',
        'Prospects' => 'מטרות',
        'Queues' => 'תורים',
        'EmailMarketing' => 'מייל שיווקי',
        'EmailTemplates' => 'תבניות דואר אלקטרוני',
        'ProspectLists' => 'יעדים - רשימה',
        'SavedSearch' => 'חיפושים שמורים',
        'UpgradeWizard' => 'אשף שדרוג',
        'Trackers' => 'גששים',
        'TrackerSessions' => 'מפגשי גשש',
        'TrackerQueries' => 'שאילתות לגשש',
        'FAQ' => 'שו"ת',
        'Newsletters' => 'עלון חדשות',
        'SugarFeed' => 'SuiteCRM פיד',
        'SugarFavorites' => 'SuiteCRM מועדפים',

        'OAuthKeys' => 'מפתחות OAuth של הצרכן',
        'OAuthTokens' => 'אסימון OAuth',
        'OAuth2Clients' => 'לקוחות OAuth',
        'OAuth2Tokens' => 'אסימון OAuth',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'בית',
        'Dashboard' => 'מחווים',
        'Contacts' => 'אנשי קשר',
        'Accounts' => 'חשבון',
        'Opportunities' => 'הזדמנות',
        'Cases' => 'אירוע',
        'Notes' => 'תזכורת',
        'Calls' => 'שיחות טלפון',
        'Emails' => 'מיילים',
        'EmailTemplates' => 'טמפלייט המייל',
        'Meetings' => 'פגישות',
        'Tasks' => 'משימה',
        'Calendar' => 'לוח שנה',
        'Leads' => 'לידים',
        'Activities' => 'פעילויות',
        'Bugs' => 'תקלות',
        'KBDocuments' => 'מרכז המידע',
        'Feeds' => 'RSS',
        'iFrames' => 'פורטל',
        'TimePeriods' => 'משכי זמן',
        'Project' => 'פרוייקטים',
        'ProjectTask' => 'משימה לפרויקט',
        'Prospects' => 'מטרות',
        'Campaigns' => 'קמפיינים',
        'Documents' => 'מסמך',
        'Sync' => 'סנכן',
        'Users' => 'משתמש',
        'SugarFavorites' => 'SuiteCRM מועדפים',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'כן',
        '2' => 'לא',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'אנליסט',
        'Competitor' => 'המתחרה',
        'Customer' => 'הלקוח',
        'Integrator' => 'אינטגרטור',
        'Investor' => 'המשקיע',
        'Partner' => 'שותף',
        'Press' => 'העיתונות',
        'Prospect' => 'פרוספקט',
        'Reseller' => 'משווק',
        'Other' => 'אחר',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'לבוש',
        'Banking' => 'בנקאות',
        'Biotechnology' => 'ביוטק',
        'Chemicals' => 'כימיקלים',
        'Communications' => 'תקשורת',
        'Construction' => 'בנייה',
        'Consulting' => 'ייעוץ',
        'Education' => 'חינוך',
        'Electronics' => 'אלקטרוניקה',
        'Energy' => 'אנרגיה',
        'Engineering' => 'הנדסה',
        'Entertainment' => 'בידור',
        'Environmental' => 'סביבה',
        'Finance' => 'כספים',
        'Government' => 'אדמיניסטרציה',
        'Healthcare' => 'קופות חולים',
        'Hospitality' => 'בתי חולים',
        'Insurance' => 'ביטוח',
        'Machinery' => 'מכונאות',
        'Manufacturing' => 'ייצור',
        'Media' => 'מדיה',
        'Not For Profit' => 'עמותה',
        'Recreation' => 'בילויים',
        'Retail' => 'קמעונאות',
        'Shipping' => 'שילוח',
        'Technology' => 'טכנולוגיה',
        'Telecommunications' => 'טלקומיוניקציה',
        'Transportation' => 'תחבורה',
        'Utilities' => 'שירותים ציבוריים',
        'Other' => 'אחר',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'טלמרקטינג',
        'Existing Customer' => 'לקוח קיים',
        'Self Generated' => 'Self Generated',
        'Employee' => 'עובד',
        'Partner' => 'שותף',
        'Public Relations' => 'יחסי ציבור',
        'Direct Mail' => 'דיוור ישיר',
        'Conference' => 'כנס',
        'Trade Show' => 'תערוכה',
        'Web Site' => 'אתר אינטרנט',
        'Word of mouth' => 'שמועה',
        'Email' => 'מיילים',
        'Campaign' => 'קמפיינים',
        'Other' => 'אחר',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'עסקים קימים',
        'New Business' => 'עסקים חדשים',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'רווח',
        'Investment' => 'השקעה',
        'Expected_Revenue' => 'רווח צפוי',
        'Budget' => 'תקציב',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'מקבל החלטות עסקיות',
        'Business Evaluator' => 'מעריך עיסקי',
        'Technical Decision Maker' => 'מקבל החלטות טכניות',
        'Technical Evaluator' => 'מעריך טכנולוגי',
        'Executive Sponsor' => 'נותן חזות להנהלה',
        'Influencer' => 'משפיע',
        'Other' => 'אחר',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'איש קשר משני',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'שוטף פלוס 30',
        'Net 30' => 'שוטף פלוס 60',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'מגבלות',
        'Needs Analysis' => 'מצריך אנליזה',
        'Value Proposition' => 'ערך תחזית',
        'Id. Decision Makers' => 'זיהוי מקבלי החלטות',
        'Perception Analysis' => 'אנליזה לתפיסה',
        'Proposal/Price Quote' => 'הצעת מחיר',
        'Negotiation/Review' => 'משא ומתן',
        'Closed Won' => 'נסגר בהצלחה',
        'Closed Lost' => 'סגור אבוד',
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
        'Call' => 'שיחות טלפון',
        'Meeting' => 'פגישות',
        'Task' => 'משימה',
        'Email' => 'מיילים',
        'Note' => 'תזכורת',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'מר.',
        'Ms.' => 'עלמה.',
        'Mrs.' => 'גברת.',
        'Miss' => 'פספוס',
        'Dr.' => 'ד"ר.',
        'Prof.' => 'פרופ.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 דקה לפני',
        300 => '5 דקות לפני',
        600 => '10 דקות לפני',
        900 => '15 דקות לפני',
        1800 => '30 דקות לפני',
        3600 => '1 שעה לפני',
        7200 => 'שעתיים לפני',
        10800 => 'שלש שעות לפני המועד',
        18000 => 'חמש שעות לפני המועד',
        86400 => 'יום לפני המועד',
    ),

    'task_priority_default' => 'בינוני',
    'task_priority_dom' => array(
        'High' => 'גבוה',
        'Medium' => 'בינוני',
        'Low' => 'נמוך',
    ),
    'task_status_default' => 'לא התחיל',
    'task_status_dom' => array(
        'Not Started' => 'לא התחיל',
        'In Progress' => 'בתהליך',
        'Completed' => 'הושלם',
        'Pending Input' => 'קלט הממתינות',
        'Deferred' => 'נדחה',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'התקיים',
        'Not Held' => 'לא התקיים',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'אחר',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'התקיים',
        'Not Held' => 'לא התקיים',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'נכנסת',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'חדש',
        'Assigned' => 'באחריות',
        'In Process' => 'בתהליכי עיבוד',
        'Converted' => 'מומר',
        'Recycled' => 'מוחזר',
        'Dead' => 'מת',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'גבוה',
        'P2' => 'בינוני',
        'P3' => 'נמוך',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'משתמש רגיל',
        'Administrator' => 'מנהל מערכת',
    ),
    'user_status_dom' => array(
        'Active' => 'פעיל',
        'Inactive' => 'לא פעיל',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'קוד אימייל',
    ),
    'employee_status_dom' => array(
        'Active' => 'פעיל',
        'Terminated' => 'סיים',
        'Leave of Absence' => 'חופשה ללא תשלום',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'יאהו!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'גבוה',
        'Medium' => 'בינוני',
        'Low' => 'נמוך',
    ),
    'project_task_priority_default' => 'בינוני',

    'project_task_status_options' => array(
        'Not Started' => 'לא התחיל',
        'In Progress' => 'בתהליך',
        'Completed' => 'הושלם',
        'Pending Input' => 'קלט הממתינות',
        'Deferred' => 'נדחה',
    ),
    'project_task_utilization_options' => array(
        '0' => 'כלום',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'טיוטה',
        'In Review' => 'בסקירה',
        'Underway' => 'יצא לדרך',
        'On_Hold' => 'בהמתנה',
        'Completed' => 'הושלם',
    ),
    'project_status_default' => 'טיוטה',

    'project_duration_units_dom' => array(
        'Days' => 'ימים',
        'Hours' => 'שעות',
    ),

    'activity_status_type_dom' => array(
        '' => '--כלום--',
        'active' => 'פעיל',
        'inactive' => 'לא פעיל',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'חשבונות',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'חשבון',
        'Opportunities' => 'הזדמנות',
        'Cases' => 'אירוע',
        'Leads' => 'לידים',
        'Contacts' => 'אנשי קשר', // cn (11/22/2005) added to support Emails

        'Bugs' => 'תקלות',
        'Project' => 'פרוייקטים',

        'Prospects' => 'מטרות',
        'ProjectTask' => 'משימה לפרויקט',

        'Tasks' => 'משימה',

        'AOS_Contracts' => 'חוזה',
        'AOS_Invoices' => 'חשבונית',
        'AOS_Quotes' => 'הצעת מחיר',
        'AOS_Products' => 'מוצר',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'חשבון',
        'Contacts' => 'אנשי קשר',
        'Opportunities' => 'הזדמנות',
        'Campaigns' => 'קמפיינים',
        'Tasks' => 'משימה',
        'Emails' => 'מיילים',

        'Bugs' => 'תקלות',
        'Project' => 'פרוייקטים',
        'ProjectTask' => 'משימה לפרויקט',
        'Prospects' => 'מטרות',
        'Cases' => 'אירוע',
        'Leads' => 'לידים',

        'Meetings' => 'פגישות',
        'Calls' => 'שיחות טלפון',

        'AOS_Contracts' => 'חוזה',
        'AOS_Invoices' => 'חשבונית',
        'AOS_Quotes' => 'הצעת מחיר',
        'AOS_Products' => 'מוצר',
    ),

    'parent_type_display' => array(
        'Accounts' => 'חשבון',
        'Contacts' => 'אנשי קשר',
        'Tasks' => 'משימה',
        'Opportunities' => 'הזדמנות',

        'Bugs' => 'תקלות',
        'Cases' => 'אירוע',
        'Leads' => 'לידים',

        'Project' => 'פרוייקטים',
        'ProjectTask' => 'משימה לפרויקט',

        'Prospects' => 'מטרות',

        'AOS_Contracts' => 'חוזה',
        'AOS_Invoices' => 'חשבונית',
        'AOS_Quotes' => 'הצעת מחיר',
        'AOS_Products' => 'מוצר',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'הצעות מחיר',
        'AOS_Invoices' => 'חשבוניות',
        'AOS_Contracts' => 'חוזים',
    ),
    'issue_priority_default_key' => 'בינוני',
    'issue_priority_dom' => array(
        'Urgent' => 'בהול',
        'High' => 'גבוה',
        'Medium' => 'בינוני',
        'Low' => 'נמוך',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'התקבלה',
        'Duplicate' => 'שכפל',
        'Closed' => 'סגור',
        'Out of Date' => 'לא רלוונטי',
        'Invalid' => 'לא חוקי',
    ),

    'issue_status_default_key' => 'חדש',
    'issue_status_dom' => array(
        'New' => 'חדש',
        'Assigned' => 'באחריות',
        'Closed' => 'סגור',
        'Pending' => 'ממתינה',
        'Rejected' => 'דחה',
    ),

    'bug_priority_default_key' => 'בינוני',
    'bug_priority_dom' => array(
        'Urgent' => 'בהול',
        'High' => 'גבוה',
        'Medium' => 'בינוני',
        'Low' => 'נמוך',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'התקבלה',
        'Duplicate' => 'שכפל',
        'Fixed' => 'מחיר קבוע',
        'Out of Date' => 'לא רלוונטי',
        'Invalid' => 'לא חוקי',
        'Later' => 'מאוחר יותר',
    ),
    'bug_status_default_key' => 'חדש',
    'bug_status_dom' => array(
        'New' => 'חדש',
        'Assigned' => 'באחריות',
        'Closed' => 'סגור',
        'Pending' => 'ממתינה',
        'Rejected' => 'דחה',
    ),
    'bug_type_default_key' => 'תקלות',
    'bug_type_dom' => array(
        'Defect' => 'דפקט',
        'Feature' => 'תכונה',
    ),
    'case_type_dom' => array(
        'Administration' => 'אדמיניסטרציה',
        'Product' => 'מוצר',
        'User' => 'משתמש',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'פנימי',
        'Forum' => 'פורום',
        'Web' => 'ווב',
        'InboundEmail' => 'מיילים',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'חשבונות',
        'Activities' => 'פעילויות',
        'Bugs' => 'תקלות',
        'Calendar' => 'לוח שנה',
        'Calls' => 'שיחות',
        'Campaigns' => 'קמפיינים',
        'Cases' => 'קריאות',
        'Contacts' => 'אנשי קשר',
        'Currencies' => 'מטבעות',
        'Dashboard' => 'מחווים',
        'Documents' => 'מסמכים',
        'Emails' => 'מיילים',
        'Feeds' => 'פידים',
        'Forecasts' => 'תחזיות',
        'Help' => 'עזרה',
        'Home' => 'בית',
        'Leads' => 'לידים',
        'Meetings' => 'פגישות',
        'Notes' => 'רשימות',
        'Opportunities' => 'הזדמנויות',
        'Outlook Plugin' => 'פלגין לאוטלוק',
        'Projects' => 'פרויקטים',
        'Quotes' => 'הצעות מחיר',
        'Releases' => 'הוצאה',
        'RSS' => 'RSS',
        'Studio' => 'סטודיו',
        'Upgrade' => 'שידרוג',
        'Users' => 'משתמשים',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'בתיכנון',
        'Active' => 'פעיל',
        'Inactive' => 'לא פעיל',
        'Complete' => 'הושלם',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'מוקדנים',
        'Mail' => 'דואר',
        'Email' => 'מיילים',
        'Print' => 'הדפס',
        'Web' => 'ווב',
        'Radio' => 'רדיו',
        'Television' => 'טלויזיה',
        'NewsLetter' => 'עלון חדשות',
        'Survey' => 'סקר',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'שבועי',
        'Monthly' => 'חודשי',
        'Quarterly' => 'רבעוני',
        'Annually' => 'שנתי',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'ינואר',
        '2' => 'פברואר',
        '3' => 'מרץ',
        '4' => 'אפריל',
        '5' => 'מאי',
        '6' => 'יוני',
        '7' => 'יולי',
        '8' => 'אוגוסט',
        '9' => 'ספטמבר',
        '10' => 'אוקטובר',
        '11' => 'נובמבר',
        '12' => 'צדצמבר',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'ינו',
        '2' => 'פבר',
        '3' => 'מרס',
        '4' => 'אפר',
        '5' => 'מאי',
        '6' => 'יוני',
        '7' => 'יולי',
        '8' => 'אוג',
        '9' => 'ספט',
        '10' => 'אוק',
        '11' => 'נוב',
        '12' => 'דצמ',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'יום ראשון',
        '2' => 'יום שני',
        '3' => 'יום שלישי',
        '4' => 'יום רביעי',
        '5' => 'יום חמישי',
        '6' => 'יום שישי',
        '7' => 'יום שבת',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'א',
        '2' => 'ב',
        '3' => 'ג',
        '4' => 'ד',
        '5' => 'ה',
        '6' => 'ו',
        '7' => 'ש',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'לפני הצהרים',
        'pm' => 'אחרי הצהרים',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'לפני הצהרים',
        'PM' => 'אחרי הצהרים',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'אישי',
        'group' => 'קבוצה',
        'bounce' => 'Bounce',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'Basic Auth',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'Basic Auth',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'אישי',
        'group' => 'קבוצה',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'אישי',
        'group' => 'קבוצה',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'אישי',
        'group' => 'קבוצה',
        'system' => 'מערכת',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'פעיל',
        'Inactive' => 'לא פעיל',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'נשלח',
        'archived' => 'ארכיון',
        'draft' => 'טיוטה',
        'inbound' => 'נכנסת',
        'campaign' => 'קמפיינים',
    ),
    'dom_email_status' => array(
        'archived' => 'ארכיון',
        'closed' => 'סגור',
        'draft' => 'טיוטה',
        'read' => 'נקרא',
        'replied' => 'הושב',
        'sent' => 'נשלח',
        'send_error' => 'שלח תקלה',
        'unread' => 'לא נקרא',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'ארכיון',
    ),

    'dom_email_server_type' => array(
        '' => '--כלום--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--כלום--',
        'createcase' => 'ליצור מקרה',
        'bounce' => 'הקפץ טיפול',
    ),
    'dom_email_distribution' => array(
        '' => '--כלום--',
        'direct' => 'הוקצה ישירות',
        'roundRobin' => '. רובין עגול',
        'leastBusy' => 'העסוק',
    ),
    'dom_email_errors' => array(
        1 => 'בחר משתמש אחד בלבד כאשר מקצים פריטים בהקצאה ישירה.',
        2 => 'עליך להקצות פריטים רק מסומנים כאשר מקצים בהקצאה ישירה.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'כן',
        'bool_false' => 'לא',
    ),
    'dom_int_bool' => array(
        1 => 'כן',
        0 => 'לא',
    ),
    'dom_switch_bool' => array(
        'on' => 'כן',
        'off' => 'לא',
        '' => 'לא',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'לקוח דואל SuiteCRM',
        'mailto' => 'לקוח דואר חיצוני',
    ),

    'dom_editor_type' => array(
        'none' => 'צפה ב-HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'פורמט דוא"ל ברירת מחדל',
        'html' => 'HTML דוא"ל',
        'plain' => 'דוא"ל בטקטס פשוט',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'זמן ריצה עבר, לא הופעל',
        'ready' => 'מוכן',
        'in progress' => 'בתהליך',
        'failed' => 'נכשל',
        'completed' => 'הושלם',
        'no curl' => 'לא הופעל: CURL איננו זמין',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'פעיל',
        'Inactive' => 'לא פעיל',
    ),

    'scheduler_period_dom' => array(
        'min' => 'דקות',
        'hour' => 'שעות',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'שיווק',
        'Knowledege Base' => 'מרכז הידע',
        'Sales' => 'מכירות',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'ארכיון',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'שיווק מקבילי',
        'Product Brochures' => 'חוברות מוצרים',
        'FAQ' => 'שו"ת',
    ),

    'document_status_dom' => array(
        'Active' => 'פעיל',
        'Draft' => 'טיוטה',
        'FAQ' => 'שו"ת',
        'Expired' => 'פג תוקף',
        'Under Review' => 'בסקירה',
        'Pending' => 'ממתינה',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'מיזוג דואר',
        'eula' => 'הסכם משתמש קצה',
        'nda' => 'הסכם שמירת סודיות',
        'license' => 'הסכם רישוי',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'לקבל?',
        'decline' => 'דחה',
        'tentative' => 'טנטטיבי',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'התקבלה',
        'decline' => 'נדחה',
        'tentative' => 'טנטטיבי',
        'none' => 'ללא',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => 'כל 15 דקות',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'ללא',
        'Daily' => 'יומי',
        'Weekly' => 'שבועי',
        'Monthly' => 'חודשי',
        'Yearly' => 'שנתי',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'ימים',
        'Weekly' => 'שבועות',
        'Monthly' => 'חודשים',
        'Yearly' => 'שנים',
    ),

    'duration_dom' => array(
        '' => 'ללא',
        '900' => '15 דקות',
        '1800' => '30 דקות',
        '2700' => '45 דקות',
        '3600' => 'שעה',
        '5400' => '1.5 שעות',
        '7200' => 'שעתיים',
        '10800' => '3 שעות',
        '21600' => '6 שעות',
        '86400' => '1 יום',
        '172800' => '2 ימים',
        '259200' => '3 ימים',
        '604800' => '1 שבוע',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'ברירת מחדל',
        'seed' => 'זרע',
        'exempt_domain' => 'הדחק רשימה - לפי דומיין',
        'exempt_address' => 'הדחק רשימה - לפי דוא"ל',
        'exempt' => 'הדחק רשימה - לפי זהות',
        'test' => 'בדיקה',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'פעיל',
        'inactive' => 'לא פעיל',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'הודעות נשלחו/ נסיונות',
        'send error' => 'הודעות שקפצו, אחר',
        'invalid email' => 'הודעות שקפצו, מיילים לא פעילים',
        'link' => 'לינק מקשר',
        'viewed' => 'הודעות נצפות',
        'removed' => 'נבחר',
        'lead' => 'לידים שנוצרו',
        'contact' => 'ליצור איש קשר',
        'blocked' => 'נדחק לפי דוא"ל או שם מתחם',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'אנשי קשר',
        'Users' => 'משתמשים',
        'Prospects' => 'מטרות',
        'Leads' => 'לידים',
        'Accounts' => 'חשבונות',
    ),
    'merge_operators_dom' => array(
        'like' => 'מכילים',
        'exact' => 'בדיוק',
        'start' => 'מתחיל ב',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'כן',
        'false' => 'לא',
        'required' => 'נדרש',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'מופסק',
        1 => 'פעיל',
        2 => 'מסנן',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'גבוה',
        'medium' => 'בינוני',
        'low' => 'נמוך',
    ),

    'projects_status_options' => array(
        'notstarted' => 'לא התחיל',
        'inprogress' => 'בתהליך',
        'completed' => 'הושלם',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'הרחב מקרא',
        'collapselegend' => 'גלול מקרא',
        'clickfordrilldown' => 'הקלק כדי לעבור לספריות משנה',
        'detailview' => 'עוד פרטים...',
        'piechart' => 'טבלת עוגה',
        'groupchart' => 'קבץ טבלאות',
        'stackedchart' => 'ערם טבלאות',
        'barchart' => 'טבלת עמודות',
        'horizontalbarchart' => 'טבלת עמודות אופקיים',
        'linechart' => 'טבלת קווים',
        'noData' => 'הנתונים לא זמינים',
        'print' => 'הדפס',
        'pieWedgeName' => 'מחלקות',
    ),
    'release_status_dom' => array(
        'Active' => 'פעיל',
        'Inactive' => 'לא פעיל',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'ציטוט בודד (&#39;)',
        '"' => 'גרשיים כפולים (&#34;)',
        '' => 'ללא',
        'other' => 'אחר:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'אחר:',
    ),
    'link_target_dom' => array(
        '_blank' => 'חלון חדש',
        '_self' => 'באותו חלון',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'ביטול רענון אוטומטי',
        '30' => 'כל 30 שניות',
        '60' => 'כל שעה',
        '180' => 'כל 3 דקות',
        '300' => 'כל 5 דקות',
        '600' => 'כל 10 דקות',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'לעולם',
        '30' => 'כל 30 שניות',
        '60' => 'כל שעה',
        '180' => 'כל 3 דקות',
        '300' => 'כל 5 דקות',
        '600' => 'כל 10 דקות',
    ),
    'date_range_search_dom' => array(
        '=' => 'שווה ל',
        'not_equal' => 'לא שווה',
        'greater_than' => 'לאחר',
        'less_than' => 'לפני',
        'last_7_days' => 'בשבעת הימים האחרונים',
        'next_7_days' => 'בשבעת הימים הבאים',
        'last_30_days' => 'בשלושים הימים האחרונים',
        'next_30_days' => 'בשלושים הימים הבאים',
        'last_month' => 'בחודש שעבר',
        'this_month' => 'החודש',
        'next_month' => 'חודש הבא',
        'last_year' => 'בשנה האחרונה',
        'this_year' => 'השנה',
        'next_year' => 'שנה הבאה',
        'between' => 'בין',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'שווה ל',
        'not_equal' => 'אינו שווה ל',
        'greater_than' => 'גדול מ-',
        'greater_than_equals' => 'גדול מ או שווה ל',
        'less_than' => 'פחות מ',
        'less_than_equals' => 'פחות מ או שווה ל',
        'between' => 'בין',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'העתק',
        'move' => 'העבר',
        'donothing' => 'לעשות כלום',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'תוצאות',
    'ERR_SEARCH_INVALID_QUERY' => 'אירעה שגיאה בעת החיפוש, אנא בדוק את מילות החיפוש.',
    'ERR_SEARCH_NO_RESULTS' => 'לא נמצאו תוצאות העונות על מילות החיפוש, נסה להרחיב את החיפוש.',
    'LBL_SEARCH_PERFORMED_IN' => 'החיפוש מתבצע תוך',
    'LBL_EMAIL_CODE' => 'קוד אימייל:',
    'LBL_SEND' => 'שלח [Alt+S]',
    'LBL_LOGOUT' => 'צא מהמערכת',
    'LBL_TOUR_NEXT' => 'הבא',
    'LBL_TOUR_SKIP' => 'דלג',
    'LBL_TOUR_BACK' => 'אחורה',
    'LBL_TOUR_TAKE_TOUR' => 'לקחת את הסיור',
    'LBL_MOREDETAIL' => 'פרטים נוספים' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'עריכה פנימית' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'תצוגה' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'מסנן' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'הוסף' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'יש להוסיף דוא"ל' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'הצג/הסתר' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'מחק' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'נקה' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'הסרה' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'להסיר דוא"ל' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'ביטול הצטרפות',
    'LBL_ID_FF_INVALID' => 'הפוך ללא תקין',
    'LBL_ADD' => 'הוסף' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'לוגו החברה' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'חלון מחברים',
    'LBL_CLOSEINLINE' => 'סגור',
    'LBL_VIEWINLINE' => 'תצוגה',
    'LBL_INFOINLINE' => 'פרטי',
    'LBL_PRINT' => 'הדפס',
    'LBL_HELP' => 'עזרה',
    'LBL_ID_FF_SELECT' => 'בחר',
    'DEFAULT' => 'בסיסי',
    'LBL_SORT' => 'קצר',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'לאפשר SMTP מעל SSL או TLS?',
    'LBL_NO_ACTION' => 'אין פעילות לשם זה: %s',
    'LBL_NO_SHORTCUT_MENU' => 'אין פעולות זמינות.',
    'LBL_NO_DATA' => 'אין נתונים',

    'LBL_ROUTING_FLAGGED' => 'קבע דגל',
    'LBL_ROUTING_TO' => 'ל',
    'LBL_ROUTING_TO_ADDRESS' => 'הכתובת אל',
    'LBL_ROUTING_WITH_TEMPLATE' => 'עם תבנית',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'רשומה זו כוללת ערכים בשדות טלפון במשרד וכתובת. כדי להזין את הטלפון במשרד והכתובת שהיקשת ולמחוק את הקיים הקש "OK". כדי לשמור את הערכים הקיימים הקש "בטל".',
    'LBL_DROP_HERE' => '[השלך לכאן]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'ערכים שמולאו מראש Gmail&#153; כברירת מחדל',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'שם',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'מאפייני שרת דוטר יוצא',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP סיסמאת',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'שער הגדרות דואר',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP שרת',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP שם משתמש',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'ברירת מחדל',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'אזהרה: שם משתמש וסיסמא לדואר יוצא חסרים.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'הגדר חשבון אימייל כדי לצפות בהודעות מייל נכנסות מחשבונות המייל שלך.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'ספק נתוני שרת SMTP כדי להשתמש בעת שליחת מייל בחשבונות האימייל.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'בוצע',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'נקה',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'אל:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'לידיעת:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'עותק נסתר:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'אל/לידיעת/עותק נסתר',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'כתובת דואר אלקטרוני',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'מסנן',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'שם',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'לא נמצאו כתובות',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'שמור והוסף לספר הכתובות',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'בחר נמעני דוא"ל',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'ספר כתובות',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'אזהרב! חשבון הדוא"ל היוצא שאתה מנסה למחוק קשור לחשבונות דוא"ל נכנס אחרים.  אתה בטוח שברצונך להמשיך?',
    'LBL_EMAIL_ADDRESSES' => 'מיילים',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'כתובת דואר אלקטרוני',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'אישרת שכתובת האימייל שלך מצורפת ל: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'לא ניתן לאמת את כתובת האימייל',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'לייבא ל- SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'משימה',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'צרף',
    'LBL_EMAIL_ATTACHMENT' => 'צרף',
    'LBL_EMAIL_ATTACHMENTS' => 'המערכת המקומית',
    'LBL_EMAIL_ATTACHMENTS2' => 'ממסמכי SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'תבניות לצירוף קבצים',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'שם הסרט',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'מסמך',
    'LBL_EMAIL_BCC' => 'עותק נסתר',
    'LBL_EMAIL_CANCEL' => 'בטל',
    'LBL_EMAIL_CC' => 'לידיעת',
    'LBL_EMAIL_CHARSET' => 'קוד שפה',
    'LBL_EMAIL_CHECK' => 'בדוק מייל',
    'LBL_EMAIL_CHECKING_NEW' => 'בודק אם יש דוא"ל חדש',
    'LBL_EMAIL_CHECKING_DESC' => 'רק רגע בבקשה... <br><br>אם זו הפעם הראשונה שאתה נכנס לחשבון הדוא"ל זה עלול לקחת קצת זמן.',
    'LBL_EMAIL_CLOSE' => 'סגור',
    'LBL_EMAIL_COFFEE_BREAK' => 'בודק אם קיים דואר חדש. <br><br>חשבונות דוא"ל גדולים עלולים לקחת הרבה זמן המתן בסבלנות.',

    'LBL_EMAIL_COMPOSE' => 'מיילים',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'אנא הכנס נמען או נמענים למייל הזה.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'גוף ההודעה ריק, לשלוח בכל זאת?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'לדואר הזה אין נושא, לשלוח בכל זאת?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(אין נושא)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'אנא הזן כתובת דוא"ל חוקית לשדות אל, לידיעת והעתק נסתר',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'השלך דוא"ל זה?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'אתה בטוח שברצונך למחוק חתימה זו?',

    'LBL_EMAIL_SENT_SUCCESS' => 'הודעת הדוא"ל נשלחה',

    'LBL_EMAIL_CREATE_NEW' => '--צור תוך כדי שמירה--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'מרובים',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'ריק',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'תאריך שנשלח על ידי השולח',
    'LBL_EMAIL_DATE_TODAY' => 'היום',
    'LBL_EMAIL_DELETE' => 'מחק',
    'LBL_EMAIL_DELETE_CONFIRM' => 'למחוק הודעות שנבחרו?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'ההודעות נמחקו בהצלחה.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'מוחק הודעה',
    'LBL_EMAIL_DETAILS' => 'פרטים',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'בעבודה עם אנשי קשר יעשה שימוש רק בכתובת ראשית.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'רוקן סל מיחזור',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'מחק שרת דואר יוצא',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'מנקה קבצי מטמון',
    'LBL_EMAIL_EMPTY_MSG' => 'אין הודעות מייל להצגה.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'אין הודעות מייל להצגה.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'שם תיקייה חייב להיות ייחודי ולא ריק. אנא נסה שנית.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'לא ניתן למחוק ספריה זו. הספריה או ספריות המשנה מכילות דוא"ל או שקשורות בתיבת דואר כלשהי.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'לא מבין לאיזו ספריה אתה מתכוון.  נסה שנית.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'בדוק בבקשה את ההגדרות שלך.',
    'LBL_EMAIL_ERROR_DESC' => 'השגיאות הבאות אובחנו: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'אין לך גישה לאזור זה, פנה למנהל המערכת לעזרה.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'שמות התיקיות ב SuiteCRM חייבים להיות ייחודיים.',
    'LBL_EMAIL_ERROR_EMPTY' => 'אנא הכנס קרטריונים לחיפוש.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'אירעה שגיאה',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'הודעה הוסרה מהשרת',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'או זההודעה הוסרה מהשרת או שהיא בספריה אחרת',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'הקישור לשרת הדואר נכשל. פנה למנהל המערכת',
    'LBL_EMAIL_ERROR_MOVE' => 'העברת דא"ל בין שרתי הדואר או בין ספריות איננו נתמך בשלב זה.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'שגיאה בהעברה',
    'LBL_EMAIL_ERROR_NAME' => 'נדרש שם.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'נדרשת כתובת מאת.  אנא הכנס כתובת דוא"ל חוקית.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'אנא ספק קובץ.',
    'LBL_EMAIL_ERROR_SERVER' => 'כתובת שרת הדוא"ל נדרשת כאן.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'ככל הנראה חשבון הדוא"ל לא נשמר.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'אירעה שגיאה בתקקשורת עם שרת הדואר.',
    'LBL_EMAIL_ERROR_USER' => 'נדרש שם משתמש.',
    'LBL_EMAIL_ERROR_PORT' => 'פורט שרת הדואר נדרש כאן.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'פרוטוקול דוא"ל נדרש כאן.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'נדרשת הספריה אותה רוצים לנטר.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'נדרשת ספריית סל המיחזור.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'המידע הזה אינו זמין',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'לא צויין שם שרת דואר יוצא.',
    'LBL_EMAIL_ERROR_SENDING' => 'שגיאה בשליחת דוא"ל. אנא צרו קשר עם מנהל המערכת שלך לקבלת סיוע.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'ספריות',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'הוסף',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'הוסף ספריה חדשה',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'שנה שם ספריה',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'שמור',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'הוסף ספריה זו אל',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'לא ניתן לשנות ספריה זוd',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'אתה בטוח שברצונך למחוק ספריה זו?\nתהליך זה לא ניתן לאאחזר.\nהספריה כולל תת הספריות ימחקו לעד.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'שם לספריה חדשה',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'לפני ביצוע פעולה זו בחר ספריה.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'ניהול ספריות',

    'LBL_EMAIL_FORWARD' => 'העבר',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'הורדו [[count]] מתוך [[total]] דוא"ל',
    'LBL_EMAIL_FROM' => 'מייל השולח',
    'LBL_EMAIL_GROUP' => 'קבוצה',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'קבוצה',
    'LBL_EMAIL_HOME_FOLDER' => 'בית',
    'LBL_EMAIL_IE_DELETE' => 'מוחק חשבון דוא"ל',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'מוחק חתימה',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'אתה בטוח שברצונך למחוק חשבון דוא"ל זה?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'נמחק בהצלחה.',
    'LBL_EMAIL_IE_SAVE' => 'שומר מידע על חשבון דוא"ל',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'מיבא דוא"ל',
    'LBL_EMAIL_IMPORT_EMAIL' => 'ייבוא ל- CRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'יבא',
    'LBL_EMAIL_INVALID' => 'לא חוקי',
    'LBL_EMAIL_LOADING' => 'טוען...',
    'LBL_EMAIL_MARK' => 'סמן',
    'LBL_EMAIL_MARK_FLAGGED' => 'כמדוגלל',
    'LBL_EMAIL_MARK_READ' => 'כנקרא',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'כלא מדוגלל',
    'LBL_EMAIL_MARK_UNREAD' => 'כלא נקרא',
    'LBL_EMAIL_ASSIGN_TO' => 'הקצה עבור',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'צור ספריה',
    'LBL_EMAIL_MENU_COMPOSE' => 'חבר אל',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'מחק ספריה',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'רוקן סל מיחזור',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'סנכרן',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'נקה קבצים ממטמון',
    'LBL_EMAIL_MENU_REMOVE' => 'הסרה',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'שנה שם ספריה',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'משנה את שם הספריה',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'אנא בצע בחירה לפני ביצוע הפעולה הזו.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'יצירת תיקיה (מרחוק או ב SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'מחיקת תיקיה (מרחוק או ב SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'מחק את כל סלי המיחזור לחשבונות הדוא"ל שלך',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'סמן דבר/י דוא"ל אלה כנקראו',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'סמן דבר/י דוא"ל אלה כלא מדוגללים',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'שינוי שם תיקיה (מרחוק או ב SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'הודעות',

    'LBL_EMAIL_ML_NAME' => 'רשימת שמות',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'רשימת כתובות שנבחרה',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'רשימת כתובות שזמינות',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> לבחירה מרובה<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'לא',
    'LBL_EMAIL_NOT_SENT' => 'המערכת לא יכולה לבצע את מבוקשך, פנה בבקשה למנהל המערכת.',

    'LBL_EMAIL_OK' => 'אוקיי',
    'LBL_EMAIL_ONE_MOMENT' => 'אנא המתן בבקשה...',
    'LBL_EMAIL_OPEN_ALL' => 'פתח הודעות מרובות',
    'LBL_EMAIL_OPTIONS' => 'פרמטרים',
    'LBL_EMAIL_QUICK_COMPOSE' => 'השב בקצרה',
    'LBL_EMAIL_OPT_OUT' => 'נבחר',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'ביקש לא לקבל דוא"ל או אינו חוקי',
    'LBL_EMAIL_PERFORMING_TASK' => 'מבצע משימה',
    'LBL_EMAIL_PRIMARY' => 'ראשי',
    'LBL_EMAIL_PRINT' => 'הדפס',

    'LBL_EMAIL_QC_BUGS' => 'תקלות',
    'LBL_EMAIL_QC_CASES' => 'אירוע',
    'LBL_EMAIL_QC_LEADS' => 'לידים',
    'LBL_EMAIL_QC_CONTACTS' => 'אנשי קשר',
    'LBL_EMAIL_QC_TASKS' => 'משימה',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'הזדמנות',
    'LBL_EMAIL_QUICK_CREATE' => 'יצירה מהירה',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'בונה מחדש ספריות',
    'LBL_EMAIL_RELATE_TO' => 'קשור',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'צפה בקשרים',
    'LBL_EMAIL_RECORD' => 'רשומת דוא"ל',
    'LBL_EMAIL_REMOVE' => 'הסרה',
    'LBL_EMAIL_REPLY' => 'השב',
    'LBL_EMAIL_REPLY_ALL' => 'השב לכולם',
    'LBL_EMAIL_REPLY_TO' => 'השב-אל',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'מאחזר הודעה',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'מאחזר רשומת דוא"ל',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'בחר בבקשה רק רשומת דוא"ל אחת',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'לחזור למודול הקודם?',
    'LBL_EMAIL_REVERT' => 'פנה לאחור',
    'LBL_EMAIL_RELATE_EMAIL' => 'דוא"ל שקשור',

    'LBL_EMAIL_RULES_TITLE' => 'ניהול כללים',

    'LBL_EMAIL_SAVE' => 'שמור',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'שמור והשב',
    'LBL_EMAIL_SAVE_DRAFT' => 'שמור טיוטה  [Alt+R]',
    'LBL_EMAIL_DRAFT_SAVED' => 'טיוטה נשמרה',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'תאריך מאת',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'תאריך עד',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'אין כללים המתאימים לקרטריון החיפוש שלך.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'תוצאות החיפוש',

    'LBL_EMAIL_SELECT' => 'בחר',

    'LBL_EMAIL_SEND' => 'שלח [Alt+S]',
    'LBL_EMAIL_SENDING_EMAIL' => 'שולח דוא"ל',

    'LBL_EMAIL_SETTINGS' => 'הגדרות',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'חשבונות דואר',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'נקה טופס',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'בדוק אם יש דואר חדש',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'מאת כתובות',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'כתובת מייל להודעות בדיקה:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'שם השולח',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'השב לכתובות',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'סנכרן כל חשבונות הדוא"ל',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'הודעת דוא"ל נשלחה לכתובת שצויינה באמצעות הגדרות דואר יוצא שהוגדרו. בדוק בבקשה שהדוא"ל הגיע על מנת לוודא שההגדרות נכונות.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'צפה ביומן SMTP המלא',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'לבצע סינכרון מלא?\nחשבונות דוא"ל גדולים יקחו כמה דקות.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'לבחירת מספר ספריות בבת אחת לחץ על שיפט או קונטרול במקלדת שלך.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'כללי',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'צור ספריות לקבוצה',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'ערוך ספריות לקבוצה',

    'LBL_EMAIL_SETTINGS_NAME' => 'שם',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'בחר במספר ההודעות לעמוד בתיבת דואר נכנס. כדי להבחירה תקורן יש לרענן את הספריות.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'מאחזר חשבונות דואר',
    'LBL_EMAIL_SETTINGS_SAVED' => 'ההגדרות נשמרו.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'שלח הודעות בטקסט פשוט בלבד',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'הודעות בעמוד',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'הגדרות לצפייה',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'ביצועים',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'ספריות משתמשים זמינות',
    'LBL_EMAIL_ERROR_PREPEND' => 'אירעה שגיאת דואר אלקטרוני:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'שרת דואר יוצא שנבחר לחשבון זה איננו חוקי.  בדוק את ההגדרות או בחר שרת דואר יוצא עבור חשבון זה.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'לא קונפג שרת דואר יוצא שיאפשר שליחת דוא"ל. בחר שרת דואר יוצא או קנפג שרת דואר יוצא עבור חשבונות הדואר האלה >> שם חשבון דוא"ל.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'חתימת ברירת מחדל',
    'LBL_EMAIL_SIGNATURES' => 'חתימות',
    'LBL_SMTPTYPE_GMAIL' => 'ג\'ימייל',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'אחר',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ ספריות מרוחקות ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[תיקיות SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'נושא',
    'LBL_EMAIL_SUCCESS' => 'הצליח',
    'LBL_EMAIL_SUITE_FOLDER' => 'תיקיית SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'גוף תבנית הדוא"ל ריק',
    'LBL_EMAIL_TEMPLATES' => 'תבניות',
    'LBL_EMAIL_TO' => 'לנמען',
    'LBL_EMAIL_VIEW' => 'תצוגה',
    'LBL_EMAIL_VIEW_HEADERS' => 'הצג הדרים',
    'LBL_EMAIL_VIEW_RAW' => 'הצג דוא"ל גולמי',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'תכונה זו אינה זמינה בשימוש ב POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'מלל ברירת המחדל לקישור.',
    'LBL_EMAIL_YES' => 'כן',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'שלח הודעת בדיקה',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'הודעת בדיקה נשלחה',
    'LBL_EMAIL_MESSAGE_NO' => 'הודעה לא',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'ייבוא עבר',
    'LBL_EMAIL_IMPORT_FAIL' => 'יבוא ההודעה נכשל כי או שההודעה כבר יובאה או שהיא נמחקה מהשרת',

    'LBL_LINK_NONE' => 'ללא',
    'LBL_LINK_ALL' => 'הכל',
    'LBL_LINK_RECORDS' => 'רשומות',
    'LBL_LINK_SELECT' => 'בחר',
    'LBL_LINK_ACTIONS' => 'פעולות',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'אשר',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'ברצונך לסגור את #מודול#?',
    'LBL_INVALID_FILE_EXTENSION' => 'סיומת קובץ לא חוקית',

    'ERR_AJAX_LOAD' => 'אירעה שגיאה:',
    'ERR_AJAX_LOAD_FAILURE' => 'אירעה שגיאה בעת עיבוד בקשתך, אנא נסה שוב במועד מאוחר יותר.',
    'ERR_AJAX_LOAD_FOOTER' => 'אם השגיאה נמשכת, אנא פנה למנהל המערכת לביטול שליחת Ajax עבור מודול זה',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'מפריד העשרות לא יכול להכיל את אותו הסימן כמו מפריד המיאות.\\n\\n  שנה את הערך בבקשה.',
    'ERR_DELETE_RECORD' => 'מספר רשומה חייבת להיות מפורטת עמ"נ למחוק את איש הקשר',
    'ERR_EXPORT_DISABLED' => 'לא ניתן לייצא.',
    'ERR_EXPORT_TYPE' => 'שגיאה בייצוא ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'כתובת מייל לא חוקית.',
    'ERR_INVALID_FILE_REFERENCE' => 'מראה מקום הקובץ איננו חוקי',
    'ERR_NO_HEADER_ID' => 'תכונה זו אינה זמינה בערכת נושא זו.',
    'ERR_NOT_ADMIN' => 'גישה לא מורשית למערכת ניהול.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'חסר שדה נדרש:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'שדה נדרש איננו חוקי:',
    'ERR_INVALID_VALUE' => 'ערך חוקי:',
    'ERR_NO_SUCH_FILE' => 'הקובץ איננו קיים במערכת',
    'ERR_NO_SINGLE_QUOTE' => 'לא ניתן להשתמש בגרשיים עבור סימון ',
    'ERR_NOTHING_SELECTED' => 'אנא בצע בחירה לפני שתמשיך.',
    'ERR_SELF_REPORTING' => 'משתמש איננו יכול לדווח לעצמו.',
    'ERR_SQS_NO_MATCH_FIELD' => 'אין התאמה לשדה: ',
    'ERR_SQS_NO_MATCH' => 'אין התאמה',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'אנא ספר \'key\' אינדקס בתוך displayParams תכונה להגדרות מטה-דטה אלה',
    'ERR_EXISTING_PORTAL_USERNAME' => 'שגיאה: שם פורטל זה כבר הוקצה לאיש קשר אחר.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'הערך לשדה איננו תואם לערךהמדויק הנדרש',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'אירעה שגיאה בעת ניסיון שמירה של חשבון חיצוני.',
    'ERR_NO_DB' => 'לא היתה אפשרות להתחבר למסד הנתונים. נא לפנות ל suitecrm.log לקבלת פרטים.',
    'ERR_DB_FAIL' => 'שגיאה בבסיס הנתונים. ראה פרטים בקובץ suitecrm.log .',
    'ERR_DB_VERSION' => 'תוכנת הניהול {0} קבצים יכולים לשמש רק עם מסד נתונים של תוכנת הניהול {1}.',

    'LBL_ACCOUNT' => 'חשבון',
    'LBL_ACCOUNTS' => 'חשבונות',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'צפה בתקציר',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'צפה בתקציר',
    'LBL_ADD_BUTTON' => 'הוסף',
    'LBL_ADD_DOCUMENT' => 'הוסף מסמך',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'הוסף לרשימת מטרות',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'הוסף אנשי קשר לרשימת מטרה',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'הקש כדי לסגור',
    'LBL_ADDITIONAL_DETAILS' => 'פרטים נוספים',
    'LBL_ADMIN' => 'אדמיניסטרטור',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'ארכיב',
    'LBL_ASSIGNED_TO_USER' => 'הוקצה למשתמש',
    'LBL_ASSIGNED_TO' => 'הקצה ל:',
    'LBL_BACK' => 'אחורה',
    'LBL_BILLING_ADDRESS' => 'כתובת להתחשבנויות',
    'LBL_QUICK_CREATE' => 'הוסף ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM קוד פתוח',
    'LBL_BUGS' => 'תקלות',
    'LBL_BY' => 'על-ידי',
    'LBL_CALLS' => 'שיחות',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'שלח קמפיין דוא"ל שבתור',
    'LBL_SUBMIT_BUTTON_LABEL' => 'שלח [Alt+S]',
    'LBL_CASE' => 'אירוע',
    'LBL_CASES' => 'קריאות',
    'LBL_CHANGE_PASSWORD' => 'שנה סיסמא',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'בדוק הכל',
    'LBL_CITY' => 'עיר',
    'LBL_CLEAR_BUTTON_LABEL' => 'נקה',
    'LBL_CLEAR_BUTTON_TITLE' => 'נקה',
    'LBL_CLEARALL' => 'נקה בכל',
    'LBL_CLOSE_BUTTON_TITLE' => 'סגור',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'סגור וצור חדש',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'סגור וצור חדש',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'יצירת דואל',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'יצירת דואל',
    'LBL_SEARCH_DROPDOWN_YES' => 'כן',
    'LBL_SEARCH_DROPDOWN_NO' => 'לא',
    'LBL_CONTACT_LIST' => 'רשימת אנשי קשר',
    'LBL_CONTACT' => 'אנשי קשר',
    'LBL_CONTACTS' => 'אנשי קשר',
    'LBL_CONTRACT' => 'חוזה',
    'LBL_CONTRACTS' => 'חוזים',
    'LBL_COUNTRY' => 'ארץ:',
    'LBL_CREATE_BUTTON_LABEL' => 'צור',
    'LBL_CREATED_BY_USER' => 'נוצר על ידי המשתמש',
    'LBL_CREATED_USER' => 'נוצר על ידי המשתמש',
    'LBL_CREATED' => 'נוצר ע"י:',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'מטבע:',
    'LBL_DOCUMENTS' => 'מסמכים',
    'LBL_DATE_ENTERED' => 'תאריך יצירה:',
    'LBL_DATE_MODIFIED' => 'תאריך שינוי:',
    'LBL_EDIT_BUTTON' => 'עריכה',
    'LBL_DUPLICATE_BUTTON' => 'שכפל',
    'LBL_DELETE_BUTTON' => 'מחק',
    'LBL_DELETE' => 'מחק',
    'LBL_DELETED' => 'נמחק',
    'LBL_DIRECT_REPORTS' => 'דוחות ישירים',
    'LBL_DONE_BUTTON_LABEL' => 'בוצע',
    'LBL_DONE_BUTTON_TITLE' => 'בוצע',
    'LBL_FAVORITES' => 'מועדפים',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'בחר בבקשה vCard קובץ',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard אינה כוללת את כל השדות הדרושים עבור מודול זה. נא לעיין בקובץ suitecrm.log לקבלת פרטים.',
    'LBL_VCARD_ERROR_FILESIZE' => 'הקובץ שהועלה חורג ממגבלת הגודל של 30000 בתים אשר שצוין בטופס HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'אירעה שגיאה העלאת קובץ ה-vCard. נא לעיין בקובץ suitecrm.log לקבלת פרטים.',
    'LBL_IMPORT_VCARD' => 'ייבוא vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'יבא vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'יבא vCard',
    'LBL_VIEW_BUTTON' => 'תצוגה',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'דוא"ל כ PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'דוא"ל כ PDF',
    'LBL_EMAILS' => 'מיילים',
    'LBL_EMPLOYEES' => 'עובדים',
    'LBL_ENTER_DATE' => 'הכנס תאריך',
    'LBL_EXPORT' => 'יצא',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'כנס',
    'LBL_HIDE' => 'הסתר',
    'LBL_ID' => 'מזהה',
    'LBL_IMPORT' => 'יבא',
    'LBL_IMPORT_STARTED' => 'ייבוא החל: ',
    'LBL_LAST_VIEWED' => 'ניצפו לאחרונה',
    'LBL_LEADS' => 'לידים',
    'LBL_LESS' => 'פחות',
    'LBL_CAMPAIGN' => 'קמפיין:',
    'LBL_CAMPAIGNS' => 'קמפיינים',
    'LBL_CAMPAIGNLOG' => 'יומן קמפיינים',
    'LBL_CAMPAIGN_CONTACT' => 'קמפיינים',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'ללא',
    'LBL_THEME' => 'נושא:',
    'LBL_FOUND_IN_RELEASE' => 'נמצא בשיחרור',
    'LBL_FIXED_IN_RELEASE' => 'תוקן בשחרור',
    'LBL_LIST_ACCOUNT_NAME' => 'שם חשבון:',
    'LBL_LIST_ASSIGNED_USER' => 'משתמש',
    'LBL_LIST_CONTACT_NAME' => 'שם איש קשר',
    'LBL_LIST_CONTACT_ROLE' => 'צור תפקיד',
    'LBL_LIST_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_LIST_EMAIL' => 'מיילים',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_OF' => 'מתוך',
    'LBL_LIST_PHONE' => 'טלפון',
    'LBL_LIST_RELATED_TO' => 'קשור ל',
    'LBL_LIST_USER_NAME' => 'שם משתמש',
    'LBL_LISTVIEW_NO_SELECTED' => 'כדי להמשיך בחר לפחות רשומה אחת.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'כדי להמשיך בחר לפחות שתי רשומות.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'רשומות שנבחרו',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'נבחרו: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'ישראל',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'ישראלי',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'ד"ר.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'קוד קופיף יוצא מן הכלל',
    'LBL_CANCEL' => 'בטל',
    'LBL_VERIFY' => 'מבצע אימות',
    'LBL_RESEND' => 'שלח מחדש',
    'LBL_PROFILE' => 'פרופיל',
    'LBL_MAILMERGE' => 'מיזוג דואר',
    'LBL_MASS_UPDATE' => 'עדכונים גורפים',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'יש אין שדות זמינים עבור פעולת העדכון',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'כתובת דוא"ל שאליה לא מעוניין לקבל',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'צירוף כתובת דואר אלקטרוני ראשית',
    'LBL_MEETINGS' => 'פגישות',
    'LBL_MEETING_GO_BACK' => 'לחזור לפגישה',
    'LBL_MEMBERS' => 'משתתפים',
    'LBL_MEMBER_OF' => 'חבר ב',
    'LBL_MODIFIED_BY_USER' => 'שונה על ידי המשתמש',
    'LBL_MODIFIED_USER' => 'שונה על ידי המשתמש',
    'LBL_MODIFIED' => 'שונה ע"י:',
    'LBL_MODIFIED_NAME' => 'שונה על ידי (שם)',
    'LBL_MORE' => 'עוד',
    'LBL_MY_ACCOUNT' => 'ההגדרות שלי',
    'LBL_NAME' => 'שם',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'צור',
    'LBL_NEW_BUTTON_TITLE' => 'צור',
    'LBL_NEXT_BUTTON_LABEL' => 'הבא',
    'LBL_NONE' => '--כלום--',
    'LBL_NOTES' => 'רשימות',
    'LBL_OPPORTUNITIES' => 'הזדמנויות',
    'LBL_OPPORTUNITY_NAME' => 'שם הזדמנות:',
    'LBL_OPPORTUNITY' => 'הזדמנות',
    'LBL_OR' => 'או',
    'LBL_PANEL_OVERVIEW' => 'סקירת חשבון',
    'LBL_PANEL_ASSIGNMENT' => 'אחר',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'סוג הורה',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'מיקוד:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'כתובת עיר ראשי',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'כתובת ארץ ראשית',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'מיקוד כתובת ראשי',
    'LBL_PRIMARY_ADDRESS_STATE' => 'כתובת מדינה ראשית',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'כתובת רחוב ראשי 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'כתובת רחוב ראשי 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'כתובת רחוב ראשית:',
    'LBL_PRIMARY_ADDRESS' => 'כתובת ראשית:',

    'LBL_PROSPECTS' => 'לקוחות פוטנציאליים',
    'LBL_PRODUCTS' => 'מוצרים',
    'LBL_PROJECT_TASKS' => 'משימות פרוייקטים',
    'LBL_PROJECTS' => 'פרויקטים',
    'LBL_QUOTES' => 'הצעות מחיר',

    'LBL_RELATED' => 'מקושר',
    'LBL_RELATED_RECORDS' => 'רשומות קשורות',
    'LBL_REMOVE' => 'הסרה',
    'LBL_REPORTS_TO' => 'דווח ל',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'מצביע על שדה נדרש',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'בוצע',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'טופס מלא',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'טופס מלא',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'שמור וצור חדש',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'שמור וצור חדש',
    'LBL_SAVE_OBJECT' => 'שמור {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'C',
    'LBL_SEARCH_BUTTON_LABEL' => 'חיפוש',
    'LBL_SEARCH_BUTTON_TITLE' => 'חיפוש',
    'LBL_FILTER' => 'מסנן',
    'LBL_SEARCH' => 'חיפוש',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'עוד',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'קובץ לא חוקי, רק תמונות ניתנות להעלאה.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'בחר',
    'LBL_SELECT_BUTTON_TITLE' => 'בחר',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'דפדף במסמכים',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'דפדף במסמכים',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'בחר איש קשר',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'בחר איש קשר',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'בחר מדוחות',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'בחר דוחות',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'בחר משתמש',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'בחר משתמש',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'נקה בחירה',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'נקה בחירה',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'נקה בחירה',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'נקה בחירה',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'בחר קובץ',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'בחר קובץ',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'נקה קובץ',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'נקה קובץ',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'בחר משתמש',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'בחר משתמש',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'ניקוי משתמש',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'ניקוי משתמש',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'בחר חשבון',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'בחר חשבון',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'נקה חשבון',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'נקה חשבון',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'בחר קמפיין',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'בחר קמפיין',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'נקה קמפיין',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'נקה קמפיין',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'בחר איש קשר',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'בחר איש קשר',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'נקה איש קשר',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'נקה איש קשר',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'בחר צוות',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'בחר צוות',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'נקה צוות',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'נקה צוות',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'משאבים שנעשה בהם שימוש לבניית עמוד זה (שאילתות, קבצים)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'שניות.',
    'LBL_SERVER_RESPONSE_TIME' => 'זמן תגובת השרת:',
    'LBL_SERVER_MEMORY_BYTES' => 'בתים',
    'LBL_SERVER_MEMORY_USAGE' => 'השימוש בזיכרון השרת: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'שימוש:-מודול: {0} - פעולה: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'השימוש שיא בזיכרון השרת: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'כתובת למשלוח',
    'LBL_SHOW' => 'הראה',
    'LBL_STATE' => 'מצב:',
    'LBL_STATUS_UPDATED' => 'הסטאטוס שלך באירוע זה עודכן!',
    'LBL_STATUS' => 'סטטוס',
    'LBL_STREET' => 'רחוב',
    'LBL_SUBJECT' => 'נושא',

    'LBL_INBOUNDEMAIL_ID' => 'דוא"ל נכנס ID',

    'LBL_SCENARIO_SALES' => 'מכירות',
    'LBL_SCENARIO_MARKETING' => 'שיווק',
    'LBL_SCENARIO_FINANCE' => 'כספים',
    'LBL_SCENARIO_SERVICE' => 'שירות',
    'LBL_SCENARIO_PROJECT' => 'ניהול פרויקטים',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'תרחיש זה מאפשר ניהול של פריטי מכירות',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'תרחיש זה מאפשר ניהול של פריטים שיווקיים',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'תרחיש זה מאפשר ניהול של פריטים הקשורים לניהול חשבונות',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'תרחיש זה מאפשר ניהול של פריטים הקשורים לשירות',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'תרחיש זה מאפשר ניהול של פריטים הקשורים לפרוייקט',

    'LBL_SYNC' => 'סנכן',
    'LBL_TABGROUP_ALL' => 'הכל',
    'LBL_TABGROUP_ACTIVITIES' => 'פעילויות',
    'LBL_TABGROUP_COLLABORATION' => 'שיתופי פעולה',
    'LBL_TABGROUP_MARKETING' => 'שיווק',
    'LBL_TABGROUP_OTHER' => 'אחר',
    'LBL_TABGROUP_SALES' => 'מכירות',
    'LBL_TABGROUP_SUPPORT' => 'תמיכה',
    'LBL_TASKS' => 'משימות',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'דואל לארכיון',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'דואל לארכיון',
    'LBL_UNDELETE_BUTTON_LABEL' => 'עודכן',
    'LBL_UNDELETE_BUTTON_TITLE' => 'עודכן',
    'LBL_UNDELETE_BUTTON' => 'עודכן',
    'LBL_UNDELETE' => 'עודכן',
    'LBL_UNSYNC' => 'בטל סינכרון',
    'LBL_UPDATE' => 'עדכן',
    'LBL_USER_LIST' => 'רשימת משתמשים',
    'LBL_USERS' => 'משתמשים',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'בודק דבר קיומה של כניסת דוא"ל...',
    'LBL_VERIFY_PORTAL_NAME' => 'בודק שם פורטל קיים...',
    'LBL_VIEW_IMAGE' => 'צפה',

    'LNK_ABOUT' => 'אודות',
    'LNK_ADVANCED_FILTER' => 'חיפוש מתקדם',
    'LNK_BASIC_FILTER' => 'חיפוש מהיר',
    'LBL_ADVANCED_SEARCH' => 'חיפוש מתקדם',
    'LBL_QUICK_FILTER' => 'חיפוש מהיר',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'הצג הכל',
    'LNK_CLOSE' => 'סגור',
    'LBL_MODIFY_CURRENT_FILTER' => 'עדכון חיפוש נוכחי',
    'LNK_SAVED_VIEWS' => 'פרמטרים',
    'LNK_DELETE' => 'מחק',
    'LNK_EDIT' => 'עריכה',
    'LNK_GET_LATEST' => 'קבל את האחרונים',
    'LNK_GET_LATEST_TOOLTIP' => 'החלף עם הגירסה האחרונה',
    'LNK_HELP' => 'עזרה',
    'LNK_CREATE' => 'צור',
    'LNK_LIST_END' => 'סוף',
    'LNK_LIST_NEXT' => 'הבא',
    'LNK_LIST_PREVIOUS' => 'קודם',
    'LNK_LIST_RETURN' => 'חזור לרשימה',
    'LNK_LIST_START' => 'התחלה',
    'LNK_LOAD_SIGNED' => 'חתום',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'החלף במסמך חתום',
    'LNK_PRINT' => 'הדפס',
    'LNK_BACKTOTOP' => 'חזרה למהעלה',
    'LNK_REMOVE' => 'הסרה',
    'LNK_RESUME' => 'השלם',
    'LNK_VIEW_CHANGE_LOG' => 'צפה ביומן שינויים',

    'NTC_CLICK_BACK' => 'הקש על כפתור אחורה בדפדפן על מנת לתקן שגיאה זו.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'אתה בטוח שברצונך למחוק רשומה או רשומות ?',
    'NTC_TEMPLATE_IS_USED' => 'התבנית הז בשימוש של לפחות תבנית דוא"ל אחת או רשומת מערכת. אתה בטוח שברצונך למחוק אותה?',
    'NTC_TEMPLATES_IS_USED' => 'את התבניות הבאות משמשות לרשומות שיווק בדוא"ל. האם אתה בטוח שברצונך למחוק אותם?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'האם אתה בטוח כי ברצונך למחוק רשומה זו?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'אתה בטוח שברצונך למחוק את ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'אתה בטוח שברצונך לע ',
    'NTC_DELETE_SELECTED_RECORDS' => ' רשומה או רשומות שנבחרו?',
    'NTC_LOGIN_MESSAGE' => 'אנא הכנס את שם המשתמש והסיסמא שלך.',
    'NTC_NO_ITEMS_DISPLAY' => 'כלום',
    'NTC_REMOVE_CONFIRMATION' => 'אתה בטוח שברצונך לביר קשרים אלה? רק הקשרים עצמם יוסרו. הרשומות שנוצרו לא יוסרו.',
    'NTC_REQUIRED' => 'מצביע על שדה נדרש',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'התחלה',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'אתה מתכוון לעזוב את הרשומה הזו מבלי לשמור שינויים שערכת בה. אתה בטוח שברצונך לנווט הלאה מרשומה זו?',
    'ERROR_NO_RECORD' => 'שגיאה באיחזור הרשומה.  יתכן והרשומה נמחקה או שאינך מורשה לצפות בה.',
    'WARN_BROWSER_VERSION_WARNING' => '<b> אזהרה: </b> גרסת הדפדפן שלך אינה נתמכת עוד, או שאתה משתמש בדפדפן שאינו נתמך. <p> </p> גירסאות הדפדפן הבאות מומלצות: <p> </p> <ul> <li> דפדפן ווינדוס 10 (תצוגת תאימות לא נתמכת) <li> פיירפוקס 32.0 <li> ספארי 5.1 <li> כרום 37 </ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>אזהרה:</b> הדפדפן שלך נמצא בתצוגת תאימות של IE שאינה נתמכת.',
    'ERROR_TYPE_NOT_VALID' => 'שגיאה. סוג זה איננו חוקי.',
    'ERROR_NO_BEAN' => 'ההתחברות נכשלה.',
    'LBL_DUP_MERGE' => 'מצא משוכפלים',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'נהל מנויים',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'נהל מנויים עבור ',
    // Ajax status strings
    'LBL_LOADING' => 'טוען...',
    'LBL_SEARCHING' => 'מחפש...',
    'LBL_SAVING_LAYOUT' => 'שומר מערך ...',
    'LBL_SAVED_LAYOUT' => 'המערך נשמר בהצלחה.',
    'LBL_SAVED' => 'נשמר',
    'LBL_SAVING' => 'שומר',
    'LBL_DISPLAY_COLUMNS' => 'הצג עמודות',
    'LBL_HIDE_COLUMNS' => 'הסתר עמודות',
    'LBL_SEARCH_CRITERIA' => 'קריטריונים לחיפוש',
    'LBL_SAVED_VIEWS' => 'תצוגות שמורות',
    'LBL_PROCESSING_REQUEST' => 'מעבד..',
    'LBL_REQUEST_PROCESSED' => 'בוצע',
    'LBL_AJAX_FAILURE' => 'Ajax נכשל',
    'LBL_MERGE_DUPLICATES' => 'מזג',
    'LBL_SAVED_FILTER_SHORTCUT' => 'חיפושים שלי',
    'LBL_SEARCH_POPULATE_ONLY' => 'בצע חיפוש תוך כדי שימוש בטופס החיפוש הרשום מעלה',
    'LBL_DETAILVIEW' => 'צפה בפרטים',
    'LBL_LISTVIEW' => 'צפה כרשימה',
    'LBL_EDITVIEW' => 'ערוך צפייה',
    'LBL_BILLING_STREET' => 'רחוב:',
    'LBL_SHIPPING_STREET' => 'רחוב:',
    'LBL_SEARCHFORM' => 'טופס חיפוש',
    'LBL_SAVED_SEARCH_ERROR' => 'ספק שם לצפייה הזו.',
    'LBL_DISPLAY_LOG' => 'הצג לוג',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'מערכת',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'פסק זמן לפעילות הזו',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'הפעילות שלך תופסק עוד שתי דקות אנא שמור את העבודה שך.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'עבר זמן הפעילות שלך.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'פגישות',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'שיחות טלפון',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'זמן: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'מיקום: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'תיאור:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'סטטוס:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'קשור אל: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'ארוע',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'האירוע אינו מוגדר.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'המיקום אינו מוגדר.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'תאריך התחלה לא מוגדר.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'לא נמצאו תוצאות.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'לא נמצאו תוצאות... אולי לשנות את קריטריוני החיפוש שלך, ולנסות שוב?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'אין תוצאות שנמצאו עבור <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'ליצור <item1> כמו <item2> חדש',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'או לשנות את קריטריוני החיפוש שלך',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'כרגע אין לך רשומות שנשמרו. <item2>או <item3> אחד עכשיו.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'הוסף למועדפים שלי',
    'LBL_CREATE_CONTACT' => 'ליצור איש קשר',
    'LBL_CREATE_CASE' => 'ליצור מקרה',
    'LBL_CREATE_NOTE' => 'צור תזכורת או קישור',
    'LBL_CREATE_OPPORTUNITY' => 'ליצור עסקה',
    'LBL_SCHEDULE_CALL' => 'לקבוע שיחה',
    'LBL_SCHEDULE_MEETING' => 'לקבוע פגישה',
    'LBL_CREATE_TASK' => 'ליצור משימה',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'צור טופס',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'שמירת טופס אינטרנט',
    'LBL_AVAILABLE_FIELDS' => 'שדות אפשריים',
    'LBL_FIRST_FORM_COLUMN' => 'עמודה טופס ראשונה',
    'LBL_SECOND_FORM_COLUMN' => 'העמודה השניה של טופס',
    'LBL_ASSIGNED_TO_REQUIRED' => 'חסר שדה חובה: שהוקצו',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'חסר שדה חובה: קישורים לקמפיין',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'טופס אינטרנט כדי ליצור ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'שליחת טופס זה תיצור ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'הוסף את כל השדות',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'איפוס כל השדות',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'הסר את כל השדות',
    'LBL_NEXT_BTN' => 'הבא',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'ניתן להכיל רק קבצים מסוג תמונה',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'שנה הקשר במסד הנתונים ל',
    'ERR_MSSQL_WARNING' => 'אזהרה:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'שגיאה: הקובץ [[file]] חסר. לא ניתן ליצור משום שלא נמצא קובץ HTML מקביל.',
    'ERR_CANNOT_FIND_MODULE' => 'שגיאה: לא קיים מודול [module].',
    'LBL_ALT_ADDRESS' => 'כתובת אחרת:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'שגיאה: יש מספר לא שווה של ארגומנטים עבור האלמנטים \'מפתח\', \'העתק\' במערך displayParams.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'כללי',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'מסנן',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'רק הפריטים שלי',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'כותרת',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'הצג שורות',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'הגעת למספר המרבי של ערכות ה- SuiteCRM Dashlets שמנהל המערכת שלך הגדיר. הסר חלק מה- Dashlets כדי להוסיף עוד.',
    'LBL_ADDING_DASHLET' => 'הוספת SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet נוסף',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'האם אתה בטוח שברצונך להסיר את SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'הסרת SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'הסרת SuiteCRM Dashlet',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'טוען עמוד, אנא המתן...',

    'LBL_RELOAD_PAGE' => 'יש <a href="javascript: window.location.reload()">לטעון מחדש את החלון</a>על מנת להשתמש ביישומון.',
    'LBL_ADD_DASHLETS' => 'הוסף תאסופות',
    'LBL_CLOSE_DASHLETS' => 'סגור',
    'LBL_OPTIONS' => 'פרמטרים',
    'LBL_1_COLUMN' => '1 עמודה',
    'LBL_2_COLUMN' => '2 עמודות',
    'LBL_3_COLUMN' => '3 עמודות',
    'LBL_PAGE_NAME' => 'שם הדף',

    'LBL_SEARCH_RESULTS' => 'תוצאות החיפוש',
    'LBL_SEARCH_MODULES' => 'מודל',
    'LBL_SEARCH_TOOLS' => 'שירות',
    'LBL_SEARCH_HELP_TITLE' => 'טיפים לחיפוש - באנגלית',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'אין תמונות',

    'LBL_MODULE' => 'מודל',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'העתק כתובת משמאל:',
    'LBL_SAVE_AND_CONTINUE' => 'שמור והמשך',

    'LBL_SEARCH_HELP_TEXT' => '<p> <br /> <strong> פקדי בחירה מרובים </ strong> </p> <ul> <li> לחץ על הערכים כדי לבחור תכונה. </ li> <li> לחץ על Ctrl & nbsp; כדי & nbsp; בחר מספר. משתמשי Mac משתמשים בלחיצה על CMD. </li> <li> כדי לבחור את כל הערכים בין שתי תכונות, & nbsp; לחץ על ערך ראשון & nbsp; ואז לחץ על ערך אחרון. </li> </ul> <p> <strong> אפשרויות חיפוש ופריסה מתקדמות </ strong> <br> <br> באמצעות ה <b> חיפוש ושכבה שמורים </b> אפשרות, אתה יכול לשמור קבוצה של פרמטרי חיפוש ו / או פריסה מותאמת אישית של תצוגת רשימה כדי להשיג במהירות את תוצאות החיפוש הרצויות בעתיד. אתה יכול לשמור מספר בלתי מוגבל של חיפושים ופריסות בהתאמה אישית. כל החיפושים שנשמרו מופיעים לפי שם ברשימת החיפושים השמורים, כאשר החיפוש השמור האחרון שנטען מופיע בראש הרשימה. <br> <br> כדי להתאים אישית את פריסת תצוגת הרשימה, השתמש בתיבות הסתר עמודות ותצוגת עמודות כדי לבחור אילו שדות להצגה בתוצאות החיפוש. לדוגמה, באפשרותך להציג או להסתיר פרטים כגון שם הרשומה, ומשתמש שהוקצה וצוות שהוקצה בתוצאות החיפוש. כדי להוסיף עמודה לתצוגת רשימה, בחר את השדה מהרשימה הסתר עמודות והשתמש בחץ השמאלי כדי להזיז אותו לרשימה הצגת עמודות. להסרת עמודה מתצוגת רשימה, בחר אותה מרשימת עמודות התצוגה והשתמש בחץ ימינה כדי להזיז אותה לרשימת הסתר עמודות. <br> <br> אם תשמור את הגדרות הפריסה, תוכל לטעון אותן בכל מקום זמן להציג את תוצאות החיפוש במערך המותאם אישית. <br> <br> לשמירה ולעדכון של חיפוש ו / או פריסה: <ol> <li> הזן שם לתוצאות החיפוש ב <b> שמור חיפוש זה בתור </b> שדה ולחץ על <b> שמור </ b>. השם כעת מופיע ברשימת החיפושים השמורים הסמוכים ללחצן <b> נקה </ b>. </li> <li> להצגת חיפוש שמור בחר אותו מרשימת החיפושים השמורים. תוצאות החיפוש מוצגות בתצוגת הרשימה. </li> <li> כדי לעדכן את המאפיינים של חיפוש שנשמר, בחר את החיפוש שנשמר מהרשימה, הזן את קריטריוני החיפוש החדשים ו / או אפשרויות הפריסה באזור החיפוש המתקדם, ולחץ על <b> עדכן </ b> לצד <b> שנה את החיפוש הנוכחי </ b>. </li> <li> כדי למחוק חיפוש שמור, בחר אותו ברשימה החיפושים השמורים, לחץ על <b> מחק < / b> לצד <b> שנה את החיפוש הנוכחי </ b> ואז לחץ על <b> אישור </ b> כדי לאשר את המחיקה. </ li> </ol> <p> <strong> טיפים </ strong > <br> <br> על ידי שימוש ב-% כמפעיל תווים כלליים אתה יכול להפוך את החיפוש לרחב יותר. לדוגמה, במקום רק לחפש תוצאות השוות ל"תפוחים ", אתה יכול לשנות את החיפוש שלך ל"תפוחים%" שתואם את כל התוצאות שמתחילות במילה אפלס אך יכולות להכיל גם תווים אחרים. </ P>',

    //resource management
    'ERR_QUERY_LIMIT' => 'שגיאה: אירעה חריגת מגבלה של $limit במודול $module.',
    'ERROR_NOTIFY_OVERRIDE' => 'שגיאה: יש לבטל את ResourceObserver-> להודיע ​​().',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'שגיאה: לא יכול ליצר מוניטור כי קובץ מטה דטה ריק או לא קיים.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'שגיאה: לא קונפג מוניטור לשם הנדרש',
    'ERR_UNDEFINED_METRIC' => 'שגיאה: לא יכול ליצר ערך למידה שאיננה מוגדרת',
    'ERR_STORE_FILE_MISSING' => 'שגיאה: לא מצליח למצוא קובץ שאליו ניתן לישם את התוכנית',

    'LBL_MONITOR_ID' => 'מוניטור Id',
    'LBL_USER_ID' => 'משתמש Id',
    'LBL_MODULE_NAME' => 'שם מודול',
    'LBL_ITEM_ID' => 'צוות Id',
    'LBL_ITEM_SUMMARY' => 'תקציר פריט',
    'LBL_ACTION' => 'פעולה',
    'LBL_SESSION_ID' => 'פגישה Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack נוצר עבור מזהה המשתמש {0}',
    'LBL_VISIBLE' => 'רשומה ניראית',
    'LBL_DATE_LAST_ACTION' => 'תאריך הפעולה האחרונה',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'לא לפני',
    'MSG_IS_MORE_THAN' => 'יותר',
    'MSG_SHOULD_BE' => 'צריך להיות',
    'MSG_OR_GREATER' => 'או גדול מ',

    'LBL_LIST' => 'רשימה',
    'LBL_CREATE_BUG' => 'צור תקלה',

    'LBL_OBJECT_IMAGE' => 'אוביקט תמונה',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'בחר תאריך',

    'LBL_VALIDATE_RANGE' => 'איננו בטווח החוקי',
    'LBL_CHOOSE_START_AND_END_DATES' => 'אנא בחר תאריך תחילה וסיום',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'אנא בחר תאריך תחילה וסיום',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'הכל',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'שגיאה: ספירת המערך של פרמטר השעועית אינה תואמת לספירת המערך של התוצאות.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'שגיאה: חסרה רשומת מיפוי למודול.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'שגיאה: לא ניתן לאחזר נתונים עבור מחבר {0}. ייתכן שהשירות אינו נגיש או הגדרות התצורה עשויות להיות לא חוקיות. הודעת שגיאת מחבר: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'לקבלת חוויית אופטימלית באמצעות IIS/FastCGI sapi, יש להגדיר - fastcgi.logging 0 - בקובץ php. ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'שם',
    'LBL_COLLECTION_PRIMARY' => 'ראשי',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'שדה חובה נותר ריק',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_DESCRIPTION' => 'תיאור',

    'LBL_YESTERDAY' => 'אתמול',
    'LBL_TODAY' => 'היום',
    'LBL_TOMORROW' => 'מחר',
    'LBL_NEXT_WEEK' => 'שבוע הבא',
    'LBL_NEXT_MONDAY' => 'יום שני הבא',
    'LBL_NEXT_FRIDAY' => 'יום שישי הבא',
    'LBL_TWO_WEEKS' => 'שבועיים',
    'LBL_NEXT_MONTH' => 'חודש הבא',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'ביום הראשון של החודש הבא',
    'LBL_THREE_MONTHS' => 'שלושה חודשים',
    'LBL_SIXMONTHS' => 'שישה חודשים',
    'LBL_NEXT_YEAR' => 'בשנה הבאה',

    //Datetimecombo fields
    'LBL_HOURS' => 'שעות',
    'LBL_MINUTES' => 'דקות',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'תאריך',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'ריענון-אוטומטי',

    'LBL_DURATION_DAY' => 'יום',
    'LBL_DURATION_HOUR' => 'שעה',
    'LBL_DURATION_MINUTE' => 'דקה',
    'LBL_DURATION_DAYS' => 'ימים',
    'LBL_DURATION_HOURS' => 'משך בשעות',
    'LBL_DURATION_MINUTES' => 'משך בדקות',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'בחר חודש',
    'LBL_ENTER_YEAR' => 'הכנס שנה',
    'LBL_ENTER_VALID_YEAR' => 'אנא בחר שנה חוקית',

    //File write error label
    'ERR_FILE_WRITE' => 'שגיאה: לא מצליח לכתוב קובץ {0}.  בדוק הרשאות בשרת האינטרנט שלך.',
    'ERR_FILE_NOT_FOUND' => 'שגיאה: לא מצליח לטעון קובץ {0}.  בדוק הרשאות בשרת שלך.',

    'LBL_AND' => 'ו',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'קובץ במקור חיצוני',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'אבטחה',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"זהו קובץ ייבוא ​​לדוגמא המספק דוגמא לתוכן הצפוי של קובץ מוכן לייבוא."
"הקובץ הוא קובץ .csv המופרד בפסיק, ומשתמש בציטוטים כפולים כמוקדמת השדה."

"שורת הכותרת היא השורה העליונה בקובץ והיא מכילה את תוויות השדה כפי שהיית רואה אותן ביישום."
"תוויות אלה משמשות למיפוי הנתונים בקובץ לשדות ביישום."

"הערות: ניתן להשתמש בשמות בסיס הנתונים גם בשורת הכותרות. זה שימושי כשאתה משתמש phpMyAdmin או בכלי מסד נתונים אחר כדי לספק רשימה מיוצאת של נתונים לייבוא."
"סדר העמודה אינו קריטי מכיוון שתהליך הייבוא ​​מתאים את הנתונים לשדות המתאימים על סמך שורת הכותרות."


"כדי להשתמש בקובץ זה כתבנית, בצע את הפעולות הבאות:"
"1. הסר את שורות הנתונים לדוגמה"
"2. הסר את טקסט העזרה שאתה קורא כרגע"
"3. הזן נתונים משלך לשורות ועמודות מתאימות"
"4. שמור את הקובץ במיקום ידוע במערכת שלך"
"5. לחץ על אפשרות הייבוא ​​מתפריט הפעולות ביישום ובחר את הקובץ להעלאה"   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'אין הודעות נוכחיות',
    'LBL_ALT_SORT_DESC' => 'מיון בסדר יורד',
    'LBL_ALT_SORT_ASC' => 'מיון בסדר עולה',
    'LBL_ALT_SORT' => 'קצר',
    'LBL_ALT_SHOW_OPTIONS' => 'הצג אפשרויות',
    'LBL_ALT_HIDE_OPTIONS' => 'הסתר אפשרויות',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'להעביר את הערך שנבחר לרשימה בצד שמאל',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'להעביר את הערך שנבחר לרשימה מצד ימין',
    'LBL_ALT_MOVE_COLUMN_UP' => 'להזיז את הערך שנבחר למעלה לפי סדר הרשימה המוצגת',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'להעביר את הערך הנבחר למטה לפי סדר הרשימה המוצגת',
    'LBL_ALT_INFO' => 'מידע',
    'MSG_DUPLICATE' => 'הרשומה {0} שאתה עומד ליצור עשויה להיות כפילות של הרשומה {0} שכבר קיימת. {1} רשומות הכוללות שמות דומים מופיעות בהמשך. <br> לחץ על צור {1} כדי להמשיך ליצור {0} חדש זה, או בחר {0} קיים ברשימה הבאה.',
    'MSG_SHOW_DUPLICATES' => 'הרשומה {0} שאתה עומד ליצור עשויה להיות כפילות של הרשומה {0} שכבר קיימת. להלן רשומות {1} הרשומות המכילות שמות דומים. לחץ על שמור כדי להמשיך ליצור {0} חדש זה, או לחץ על ביטול כדי לחזור למודול מבלי ליצור את {0}.',
    'LBL_EMAIL_TITLE' => 'דואר אלקטרוני',
    'LBL_EMAIL_OPT_TITLE' => '. בחרתי את כתובת הדואר האלקטרוני',
    'LBL_EMAIL_INV_TITLE' => 'כתובת דוא"ל שגויה',
    'LBL_EMAIL_PRIM_TITLE' => 'הפוך לכתובת דואל ראשית',
    'LBL_SELECT_ALL_TITLE' => 'בחר הכל',
    'LBL_SELECT_THIS_ROW_TITLE' => 'בחר שורה זו',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'שגיאה: אירעה שגיאה במהלך ההעלאה. קוד שגיאה: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'שגיאה: אירעה שגיאה במהלך ההעלאה. קוד שגיאה: {0} - {1}. גודל העלאת גודל x {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'שגיאה: אירעה שגיאה במהלך ההעלאה שלך, אנא צור קשר עם מנהל המערכת לקבלת עזרה.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'גודל העלאה ({0} בתים) חרג מקסימום המותר: {1} בתים',
    'UPLOAD_REQUEST_ERROR' => 'אירעה שגיאה. אנא רענן את הדף שלך ונסה שוב.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'E',
    'LBL_EDIT_BUTTON_LABEL' => 'עריכה',
    'LBL_EDIT_BUTTON_TITLE' => 'עריכה',
    'LBL_DUPLICATE_BUTTON_KEY' => 'U',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'שכפל',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'שכפל',
    'LBL_DELETE_BUTTON_KEY' => 'D',
    'LBL_DELETE_BUTTON_LABEL' => 'מחק',
    'LBL_DELETE_BUTTON_TITLE' => 'מחק',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'פעולה',
    'LBL_SAVE_BUTTON_KEY' => 'A',
    'LBL_SAVE_BUTTON_LABEL' => 'שמור',
    'LBL_SAVE_BUTTON_TITLE' => 'שמור',
    'LBL_CANCEL_BUTTON_KEY' => 'X',
    'LBL_CANCEL_BUTTON_LABEL' => 'בטל',
    'LBL_CANCEL_BUTTON_TITLE' => 'בטל',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'מערך המחברים ב- {0} הוגדר באופן שגוי או שהוא ריק ולא ניתן היה להשתמש בו.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'תגובה לא טובה מהשרת',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'הצעת מחיר',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'מחיר מבצע',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'ידני',
        '5' => 'כל 5 דקות',
        '15' => 'כל 15 דקות',
        '30' => 'כל 30 דקות',
        '60' => 'כל שעה',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'תזכורת הוא ריק או שגוי.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'תזכורת אינו מוגדר עבור תפריט קופץ או דוא"ל.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'אין מוזמנים לתזכורת.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'התזכורת לא כוללת מוזמנים, האם ברצונך להסיר את התזכורת?',
    'LBL_DELETE_REMINDER' => 'מחיקת תזכורת',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'לבחור עמודות',
    'LBL_COLUMN_CHOOSER' => 'בוחר השדות',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'שמור שינויים',
    'LBL_DISPLAYED' => 'מוצגים',
    'LBL_HIDDEN' => 'Hidden',
    'ERR_EMPTY_COLUMNS_LIST' => '. לפחות רכיב אחד נדרש',

    'LBL_FILTER_HEADER_TITLE' => 'מסנן',

    'LBL_CATEGORY' => 'קטגוריה',
    'LBL_LIST_CATEGORY' => 'קטגוריה',
    'ERR_FACTOR_TPL_INVALID' => 'הודעת האימות הדו-שלבי אינה חוקית, אנא צור קשר עם מנהל המערכת שלך.',
    'LBL_SUBTHEMES' => 'סגנון',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'שחר',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'יום',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'חשיכה',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'לילה',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'צהריים',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'התעלם מהטיוטה',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'פעולה זו תמחק את האימייל הזה, האם ברצונך להמשיך?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'יציאה מעריכה',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'על ידי השארת תיבת הדו-שיח \'הרכב\' כל המידע שהוזן יאבד, האם ברצונך להמשיך?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'החל תבנית דוא"ל',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'פעולה זו תשכתב את שדות הדוא"ל והנושא, האם ברצונך להמשיך?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'מאושר',
    'LBL_OPT_IN_TITLE' => 'להצטרפות',
    'LBL_CONFIRM_OPT_IN_DATE' => 'תאריך אישור',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'אישור נשלח בתאריך',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'אישור נכשל בתאריך',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'אישור Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'תבנית דוא"ל של הצטרפות אינה מוגדרת. אנא הגדר בהגדרות הדוא"ל.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'ההצטרפות מחייבת את הדוא"ל להיות קשור לחשבון / איש קשר / הפניה / יעד',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'קבוצה ללא יורשים',
    'LBL_PRIMARY_GROUP' => "קבוצה ראשית",

    // footer
    'LBL_SUITE_TOP' => 'חזרה למהעלה',
    'LBL_SUITE_SUPERCHARGED' => 'משופר על ידי סויט סי.אר.אמ',
    'LBL_SUITE_POWERED_BY' => 'מבוסס על סוגר סי.אר.אמ',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'תוכנה זו הינה תוכנה חינמית. ניתן להפיץ אותה ו/או לשנות אותה בתנאים של GNU Affero General License License version 3 כפי שפורסם על ידי Free Software Foundation, כולל הרשאה הנוספת המוצגת בכותרת קוד המקור.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'איפוס סיסמא',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'שלח אישור קבלת דואר אלקטרוני',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'אישור שליחת דואר אלקטרוני לחשבונות\אנשי קשר\הפניות\סיכויים בלבד',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'אישור קבלת דואר אלקטרוני אינו פעיל. ניתן להפעיל דרך אפשרויות דואר אלקטרוני או פנה למנהל המערכת.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'אישור הצטרפות לשליחת דוא"ל אינה אפשרית מכיוון שלאיש הקשר אין כתובת דוא"ל ראשית',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'שליחת אישור קבלת דואר אלקטרוני נכשלה',
    'LBL_CONFIRM_EMAIL_SENT' => 'אישור הצטרפות לשליחת דוא"ל נשלחה בהצלחה',
);

$app_list_strings['moduleList']['Library'] = 'הספרייה';
$app_list_strings['moduleList']['EmailAddresses'] = 'כתובת דואר אלקטרוני';
$app_list_strings['project_priority_default'] = 'בינוני';
$app_list_strings['project_priority_options'] = array(
    'High' => 'גבוה',
    'Medium' => 'בינוני',
    'Low' => 'נמוך',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'הסכמה',
    'contract' => 'חוזה',
    'legal_obligation' => 'התחייבות חוקית',
    'protection_of_interest' => 'הגנה על אינטרס',
    'public_interest' => 'אינטרס ציבורי',
    'legitimate_interest' => 'אינטרס לגיטימי',
    'withdrawn' => 'חזרה מהסכמה',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'אתר אינטרנט',
    'phone' => 'טלפון',
    'given_to_user' => 'ניתן למשתמש',
    'email' => 'מיילים',
    'third_party' => 'צד שלישי',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'מרכז הידע';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'אבו דאבי',
    'ADEN' => 'עדן',
    'AFGHANISTAN' => 'אפגניסטן',
    'ALBANIA' => 'אלבניה',
    'ALGERIA' => 'אלג\'יריה',
    'AMERICAN SAMOA' => 'סמואה האמריקנית',
    'ANDORRA' => 'אנדורה',
    'ANGOLA' => 'אנגולה',
    'ANTARCTICA' => 'אנטארקטיקה',
    'ANTIGUA' => 'אנטיגואה',
    'ARGENTINA' => 'ארגנטינה',
    'ARMENIA' => 'ארמניה',
    'ARUBA' => 'ארובה',
    'AUSTRALIA' => 'אוסטרליה',
    'AUSTRIA' => 'אוסטריה',
    'AZERBAIJAN' => 'אזרבייג\'ן',
    'BAHAMAS' => 'איי בהאמה',
    'BAHRAIN' => 'בחריין',
    'BANGLADESH' => 'בנגלדש',
    'BARBADOS' => 'ברבדוס',
    'BELARUS' => 'בלרוס',
    'BELGIUM' => 'בלגיה',
    'BELIZE' => 'בליז',
    'BENIN' => 'בנין',
    'BERMUDA' => 'ברמודה',
    'BHUTAN' => 'בהוטן',
    'BOLIVIA' => 'בוליביה',
    'BOSNIA' => 'בוסניה',
    'BOTSWANA' => 'בוטסואנה',
    'BOUVET ISLAND' => 'בובה',
    'BRAZIL' => 'ברזיל',
    'BRITISH ANTARCTICA TERRITORY' => 'הטריטוריה הבריטית באנטארקטיקה',
    'BRITISH INDIAN OCEAN TERRITORY' => 'הטריטוריה הבריטית באוקיינוס ההודי',
    'BRITISH VIRGIN ISLANDS' => 'איי הבתולה הבריטיים',
    'BRITISH WEST INDIES' => 'איי הודו המערבית הבריטיים',
    'BRUNEI' => 'ברוניי דארוסלאם',
    'BULGARIA' => 'בולגריה',
    'BURKINA FASO' => 'בורקינה פאסו',
    'BURUNDI' => 'בורונדי',
    'CAMBODIA' => 'קמבודיה',
    'CAMEROON' => 'קמרון',
    'CANADA' => 'קנדה',
    'CANAL ZONE' => 'אזור תעלת פנמה',
    'CANARY ISLAND' => 'האיים הקנריים',
    'CAPE VERDI ISLANDS' => 'כף ורדה',
    'CAYMAN ISLANDS' => 'איי קיימן',
    'CHAD' => 'צ\'אד',
    'CHANNEL ISLAND UK' => 'איי התעלה',
    'CHILE' => 'צ\'ילה',
    'CHINA' => 'סין',
    'CHRISTMAS ISLAND' => 'איי חג המולד',
    'COCOS (KEELING) ISLAND' => 'איי קוקוס',
    'COLOMBIA' => 'קולומביה',
    'COMORO ISLANDS' => 'איי קומורו',
    'CONGO' => 'קונגו',
    'CONGO KINSHASA' => 'קונגו-קינשאסה',
    'COOK ISLANDS' => 'איי קוק',
    'COSTA RICA' => 'קוסטה ריקה',
    'CROATIA' => 'קרואטיה',
    'CUBA' => 'קובה',
    'CURACAO' => 'קוראסאו',
    'CYPRUS' => 'קפריסין',
    'CZECH REPUBLIC' => 'הרפובליקה הצ\'כית',
    'DAHOMEY' => 'דהומיי',
    'DENMARK' => 'דנמרק',
    'DJIBOUTI' => 'ג\'יבוטי',
    'DOMINICA' => 'דומיניקה',
    'DOMINICAN REPUBLIC' => 'הרפובליקה הדומיניקנית',
    'DUBAI' => 'דובאי',
    'ECUADOR' => 'אקוודור',
    'EGYPT' => 'מצרים',
    'EL SALVADOR' => 'אל סלבדור',
    'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
    'ESTONIA' => 'אסטוניה',
    'ETHIOPIA' => 'אתיופיה',
    'FAEROE ISLANDS' => 'FAEROE ISLANDS',
    'FALKLAND ISLANDS' => 'איי פוקלנד',
    'FIJI' => 'פיג\'י',
    'FINLAND' => 'פינלנד',
    'FRANCE' => 'צרפת',
    'FRENCH GUIANA' => 'גיאנה הצרפתית',
    'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
    'GABON' => 'גבון',
    'GAMBIA' => 'גמביה',
    'GEORGIA' => 'גרוזיה',
    'GERMANY' => 'גרמניה',
    'GHANA' => 'גאנה',
    'GIBRALTAR' => 'ג\'יברלטר',
    'GREECE' => 'יוון',
    'GREENLAND' => 'גרינלנד',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'גואם',
    'GUATEMALA' => 'גואטמלה',
    'GUINEA' => 'גינאה',
    'GUYANA' => 'גיאנה',
    'HAITI' => 'האיטי',
    'HONDURAS' => 'הונדורס',
    'HONG KONG' => 'הונג קונג',
    'HUNGARY' => 'הונגריה',
    'ICELAND' => 'איסלנד',
    'IFNI' => 'IFNI',
    'INDIA' => 'הודו',
    'INDONESIA' => 'אינדונזיה',
    'IRAN' => 'איראן',
    'IRAQ' => 'עיראק',
    'IRELAND' => 'אירלנד',
    'ISRAEL' => 'ישראל',
    'ITALY' => 'איטליה',
    'IVORY COAST' => 'חוף השנהב',
    'JAMAICA' => 'ג\'מייקה',
    'JAPAN' => 'יפן',
    'JORDAN' => 'ירדן',
    'KAZAKHSTAN' => 'קזחסטאן',
    'KENYA' => 'קניה',
    'KOREA' => 'קוראה',
    'KOREA, SOUTH' => 'קוריאה, דרום',
    'KUWAIT' => 'כוויית',
    'KYRGYZSTAN' => 'קיריג\'יסטאן',
    'LAOS' => 'לאוס',
    'LATVIA' => 'לטביה',
    'LEBANON' => 'לבנון',
    'LEEWARD ISLANDS' => 'איי לייווארד',
    'LESOTHO' => 'לסוטו',
    'LIBYA' => 'לוב',
    'LIECHTENSTEIN' => 'ליכטנשטיין',
    'LITHUANIA' => 'ליטא',
    'LUXEMBOURG' => 'לוקסמבורג',
    'MACAO' => 'מקאו',
    'MACEDONIA' => 'מקדוניה',
    'MADAGASCAR' => 'מדגסקר',
    'MALAWI' => 'מלאווי',
    'MALAYSIA' => 'מלזיה',
    'MALDIVES' => 'האיים המלדיביים',
    'MALI' => 'מאלי',
    'MALTA' => 'מלטה',
    'MARTINIQUE' => 'מרטיניק',
    'MAURITANIA' => 'מאוריטניה',
    'MAURITIUS' => 'מאוריציוס',
    'MELANESIA' => 'מלנזיה',
    'MEXICO' => 'מקסיקו',
    'MOLDOVIA' => 'מולדוביה',
    'MONACO' => 'מונקו',
    'MONGOLIA' => 'מונגוליה',
    'MOROCCO' => 'מרוקו',
    'MOZAMBIQUE' => 'מוזמביק',
    'MYANAMAR' => 'מינאמר',
    'NAMIBIA' => 'נמיביה',
    'NEPAL' => 'נפאל',
    'NETHERLANDS' => 'הולנד',
    'NETHERLANDS ANTILLES' => 'האנטיליים ההולנדים',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'האנטילים ההולנדיים הנייטרלי',
    'NEW CALADONIA' => 'קלדוניה החדשה',
    'NEW HEBRIDES' => 'ההברידים החדשים',
    'NEW ZEALAND' => 'ניו זילנד',
    'NICARAGUA' => 'ניקרגואה',
    'NIGER' => 'ניז\'ר',
    'NIGERIA' => 'ניגריה',
    'NORFOLK ISLAND' => 'האי נורפוק',
    'NORWAY' => 'נורווגיה',
    'OMAN' => 'עומאן',
    'OTHER' => 'אחר',
    'PACIFIC ISLAND' => 'פסיפיק איילנד',
    'PAKISTAN' => 'פקיסטן',
    'PANAMA' => 'פנמה',
    'PAPUA NEW GUINEA' => 'פפואה גינאה החדשה',
    'PARAGUAY' => 'פרגוואי',
    'PERU' => 'פרו',
    'PHILIPPINES' => 'הפיליפינים',
    'POLAND' => 'פולין',
    'PORTUGAL' => 'פורטוגל',
    'PORTUGUESE TIMOR' => 'מזרח טימור',
    'PUERTO RICO' => 'פורטו ריקו',
    'QATAR' => 'קטאר',
    'REPUBLIC OF BELARUS' => 'הרפובליקה של בלרוס',
    'REPUBLIC OF SOUTH AFRICA' => 'הרפובליקה של דרום אפריקה',
    'REUNION' => 'ראוניון',
    'ROMANIA' => 'רומניה',
    'RUSSIA' => 'רוסיה',
    'RWANDA' => 'רואנדה',
    'RYUKYU ISLANDS' => 'איי ריוקיו',
    'SABAH' => 'סבח',
    'SAN MARINO' => 'סן מרינו',
    'SAUDI ARABIA' => 'ערב הסעודית',
    'SENEGAL' => 'סנגל',
    'SERBIA' => 'סרביה ומונטנגרו',
    'SEYCHELLES' => 'איי סיישל',
    'SIERRA LEONE' => 'סיירה לאונה',
    'SINGAPORE' => 'סינגפור',
    'SLOVAKIA' => 'סלובקיה',
    'SLOVENIA' => 'סלובניה',
    'SOMALILIAND' => 'סומלילנד',
    'SOUTH AFRICA' => 'דרום אפריקה',
    'SOUTH YEMEN' => 'דרום תימן',
    'SPAIN' => 'ספרד',
    'SPANISH SAHARA' => 'סהרה הספרדית',
    'SRI LANKA' => 'סרי לנקה',
    'ST. KITTS AND NEVIS' => 'סנט קיטס ונוויס',
    'ST. LUCIA' => 'סנט לוסיה',
    'SUDAN' => 'סודאן',
    'SURINAM' => 'סורינאמי',
    'SW AFRICA' => 'אפריקה SW',
    'SWAZILAND' => 'סווזילנד',
    'SWEDEN' => 'שוודיה',
    'SWITZERLAND' => 'שוויץ',
    'SYRIA' => 'סוריה',
    'TAIWAN' => 'טיוואן',
    'TAJIKISTAN' => 'טג\'יקיסטן',
    'TANZANIA' => 'טנזניה',
    'THAILAND' => 'תאילנד',
    'TONGA' => 'טונגה',
    'TRINIDAD' => 'טרינידד',
    'TUNISIA' => 'טוניסיה',
    'TURKEY' => 'טורקיה',
    'UGANDA' => 'אוגנדה',
    'UKRAINE' => 'אוקראינה',
    'UNITED ARAB EMIRATES' => 'איחוד האמירויות הערביות',
    'UNITED KINGDOM' => 'בריטניה',
    'URUGUAY' => 'אורוגוואי',
    'US PACIFIC ISLAND' => 'ארה ב פסיפיק איילנד',
    'US VIRGIN ISLANDS' => 'איי הבתולה של ארצות הברית',
    'USA' => 'ארצות הברית',
    'UZBEKISTAN' => 'אוזבקיסטן',
    'VANUATU' => 'ונואטו',
    'VATICAN CITY' => 'עיר הוותיקן',
    'VENEZUELA' => 'ונצואלה',
    'VIETNAM' => 'וייטנאם',
    'WAKE ISLAND' => 'האי וייק',
    'WEST INDIES' => 'איי הודו המערבית',
    'WESTERN SAHARA' => 'סהרה המערבית',
    'YEMEN' => 'תימן',
    'ZAIRE' => 'זאיר',
    'ZAMBIA' => 'זמביה',
    'ZIMBABWE' => 'זימבבואה',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (טייוואן והונג קונג)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS קירילית)',
    'CP1252' => 'CP1252 (MS במערב אירופה & בארה ב)',
    'EUC-CN' => 'EUC-CN (GB2312 סינית פשוטה)',
    'EUC-JP' => 'EUC-JP (Unix יפנית)',
    'EUC-KR' => 'EUC-KR (קוריאנית)',
    'EUC-TW' => 'EUC-TW (טייוואן)',
    'ISO-2022-JP' => 'ISO-2022-JP (יפנית)',
    'ISO-2022-KR' => 'ISO-2022-KR (קוריאנית)',
    'ISO-8859-1' => 'ISO-8859-1 (מערב אירופה, ארה ב)',
    'ISO-8859-2' => 'ISO-8859-2 (מרכז ומזרח אירופאיות)',
    'ISO-8859-3' => 'ISO-8859-3 (3 לטינית)',
    'ISO-8859-4' => 'ISO-8859-4 (4 לטיני)',
    'ISO-8859-5' => 'ISO-8859-5 (קירילית)',
    'ISO-8859-6' => 'ISO-8859-6 (ערבית)',
    'ISO-8859-7' => 'ISO-8859-7 (יוונית)',
    'ISO-8859-8' => 'ISO-8859-8 (עברית)',
    'ISO-8859-9' => 'ISO-8859-9 (5 לטיני)',
    'ISO-8859-10' => 'ISO-8859-10 (6 לטיני)',
    'ISO-8859-13' => 'ISO-8859-13 (7 לטיני)',
    'ISO-8859-14' => 'ISO-8859-14 (8 לטיני)',
    'ISO-8859-15' => 'ISO-8859-15 (9 לטיני)',
    'KOI8-R' => 'KOI8-R (קירילי רוסית)',
    'KOI8-U' => 'KOI8-U (קירילי אוקראינית)',
    'SJIS' => 'SJIS (MS יפנית)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'אפריקה/אלג\'יר',
    'Africa/Luanda' => 'אפריקה/לואנדה',
    'Africa/Porto-Novo' => 'אפריקה/Porto-Novo',
    'Africa/Gaborone' => 'אפריקה/גאבורון',
    'Africa/Ouagadougou' => 'Africa/Ouagadougou',
    'Africa/Bujumbura' => 'Africa/Bujumbura',
    'Africa/Douala' => 'Africa/Douala',
    'Atlantic/Cape_Verde' => 'Atlantic/Cape Verde',
    'Africa/Bangui' => 'Africa/Bangui',
    'Africa/Ndjamena' => 'Africa/Ndjamena',
    'Indian/Comoro' => 'Indian/Comoro',
    'Africa/Kinshasa' => 'Africa/Kinshasa',
    'Africa/Lubumbashi' => 'Africa/Lubumbashi',
    'Africa/Brazzaville' => 'Africa/Brazzaville',
    'Africa/Abidjan' => 'Africa/Abidjan',
    'Africa/Djibouti' => 'Africa/Djibouti',
    'Africa/Cairo' => 'אפריקה/קהיר',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'אפריקה/אדיס אבבה',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Nairobi' => 'אפריקה/ניירובי',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Tripoli' => 'אפריקה/טריפולי',
    'Indian/Antananarivo' => 'Indian/Antananarivo',
    'Africa/Blantyre' => 'Africa/Blantyre',
    'Africa/Bamako' => 'Africa/Bamako',
    'Africa/Nouakchott' => 'Africa/Nouakchott',
    'Indian/Mauritius' => 'Indian/Mauritius',
    'Indian/Mayotte' => 'Indian/Mayotte',
    'Africa/Casablanca' => 'Africa/Casablanca',
    'Africa/El_Aaiun' => 'Africa/El Aaiun',
    'Africa/Maputo' => 'Africa/Maputo',
    'Africa/Windhoek' => 'Africa/Windhoek',
    'Africa/Niamey' => 'Africa/Niamey',
    'Africa/Lagos' => 'Africa/Lagos',
    'Indian/Reunion' => 'Indian/Reunion',
    'Africa/Kigali' => 'Africa/Kigali',
    'Atlantic/St_Helena' => 'Atlantic/St. Helena',
    'Africa/Sao_Tome' => 'Africa/Sao Tome',
    'Africa/Dakar' => 'אפריקה/דקר',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'אפריקה/יוהנסבורג',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'אפריקה/תוניס',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'הודית/קרגלן',
    'Antarctica/DumontDUrville' => 'אנטארקטיקה / דומון דורויל',
    'Antarctica/Syowa' => 'אנטארקטיקה / סיווה',
    'Antarctica/Vostok' => 'אנטארקטיקה/ווסטוק',
    'Antarctica/Rothera' => 'אנטארקטיקה / רוטרה',
    'Antarctica/Palmer' => 'אנטארקטיקה/פאלמר',
    'Antarctica/McMurdo' => 'אנטארקטיקה/מק-מרדו',
    'Asia/Kabul' => 'אסיה/קאבול',
    'Asia/Yerevan' => 'אסיה/ירוואן',
    'Asia/Baku' => 'אסיה/באקו',
    'Asia/Bahrain' => 'אסיה/בחריין',
    'Asia/Dhaka' => 'אסיה/דאקה',
    'Asia/Thimphu' => 'אסיה/טימפו',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'אסיה/בייג\'ינג',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'אסיה/שנגחאי',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'אסיה/הונג קונג',
    'Asia/Taipei' => 'אסיה/טאיפיי',
    'Asia/Macau' => 'אסיה/מקאו',
    'Asia/Nicosia' => 'אסיה/ניקוסיה',
    'Asia/Tbilisi' => 'אסיה/טביליסי',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'אסיה/ג\'קרטה',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'אסיה/טהראן',
    'Asia/Baghdad' => 'אסיה/בגדד',
    'Asia/Jerusalem' => 'אסיה/ירושלים',
    'Asia/Tokyo' => 'אסיה/טוקיו',
    'Asia/Amman' => 'אסיה/עמאן',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'אסיה/בישקק',
    'Asia/Seoul' => 'אסיה/סאול',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'אסיה/כווית',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'אסיה/ביירות',
    'Asia/Kuala_Lumpur' => 'אסיה/קואלה לומפור',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'הודית/האיים המלדיביים',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'אסיה/קראצ\'י',
    'Asia/Gaza' => 'אסיה/עזה',
    'Asia/Manila' => 'אסיה/מנילה',
    'Asia/Qatar' => 'אסיה/קטאר',
    'Asia/Riyadh' => 'אסיה/ריאד',
    'Asia/Singapore' => 'אסיה/סינגפור',
    'Asia/Colombo' => 'אסיה/קולומבו',
    'Asia/Damascus' => 'אסיה/דמשק',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'אסיה/בנגקוק',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'אסיה/דובאי',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'אוסטרליה/פרת',
    'Australia/Brisbane' => 'אוסטרליה/בריסביין',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'אוסטרליה/מלבורן',
    'Australia/Sydney' => 'אוסטרליה/סידני',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Indian/Christmas',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'פסיפיק/פיג\'י',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'פסיפיק/טהיטי',
    'Pacific/Guam' => 'פסיפיק/גואם',
    'Pacific/Tarawa' => 'Pacific/Tarawa',
    'Pacific/Enderbury' => 'Pacific/Enderbury',
    'Pacific/Kiritimati' => 'Pacific/Kiritimati',
    'Pacific/Saipan' => 'Pacific/Saipan',
    'Pacific/Majuro' => 'Pacific/Majuro',
    'Pacific/Kwajalein' => 'Pacific/Kwajalein',
    'Pacific/Truk' => 'Pacific/Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'Pacific/Kosrae',
    'Pacific/Nauru' => 'Pacific/Nauru',
    'Pacific/Noumea' => 'Pacific/Noumea',
    'Pacific/Auckland' => 'פסיפיק/אוקלנד',
    'Pacific/Chatham' => 'Pacific/Chatham',
    'Pacific/Niue' => 'Pacific/Niue',
    'Pacific/Norfolk' => 'Pacific/Norfolk',
    'Pacific/Palau' => 'Pacific/Palau',
    'Pacific/Port_Moresby' => 'Pacific/Port Moresby',
    'Pacific/Pitcairn' => 'Pacific/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacific/Pago Pago',
    'Pacific/Apia' => 'Pacific/Apia',
    'Pacific/Guadalcanal' => 'Pacific/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacific/Fakaofo',
    'Pacific/Tongatapu' => 'Pacific/Tongatapu',
    'Pacific/Funafuti' => 'Pacific/Funafuti',
    'Pacific/Johnston' => 'Pacific/Johnston',
    'Pacific/Midway' => 'Pacific/Midway',
    'Pacific/Wake' => 'Pacific/Wake',
    'Pacific/Efate' => 'Pacific/Efate',
    'Pacific/Wallis' => 'Pacific/Wallis',
    'Europe/London' => 'אירופה/לונדון',
    'Europe/Dublin' => 'אירופה/דבלין',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'אירופה/אנדורה',
    'Europe/Vienna' => 'אירופה/וינה',
    'Europe/Minsk' => 'אירופה/מינסק',
    'Europe/Brussels' => 'Europe/Brussels',
    'Europe/Sofia' => 'אירופה/סופיה',
    'Europe/Prague' => 'אירופה/פראג',
    'Europe/Copenhagen' => 'אירופה/קופנהגן',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'אירופה/הלסינקי',
    'Europe/Paris' => 'אירופה/פריז',
    'Europe/Berlin' => 'אירופה/ברלין',
    'Europe/Gibraltar' => 'אירופה/גיברלטר',
    'Europe/Athens' => 'אירופה/אתונה',
    'Europe/Budapest' => 'אירופה/בודפשט',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'אירופה/רומא',
    'Europe/Riga' => 'אירופה/ריגה',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'אירופה/וילנה',
    'Europe/Luxembourg' => 'אירופה/לוקסמבורג',
    'Europe/Malta' => 'אירופה/מלטה',
    'Europe/Chisinau' => 'אירופה/קישינב',
    'Europe/Monaco' => 'אירופה/מונקו',
    'Europe/Amsterdam' => 'אירופה/אמסטרדם',
    'Europe/Oslo' => 'אירופה/אוסלו',
    'Europe/Warsaw' => 'אירופה/ורשה',
    'Europe/Lisbon' => 'אירופה/ליסבון',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'אירופה/בוקרשט',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'אירופה/מוסקבה',
    'Europe/Samara' => 'אירופה/סמרה',
    'Asia/Yekaterinburg' => 'Asia/Yekaterinburg',
    'Asia/Omsk' => 'Asia/Omsk',
    'Asia/Novosibirsk' => 'Asia/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asia/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asia/Irkutsk',
    'Asia/Yakutsk' => 'Asia/Yakutsk',
    'Asia/Vladivostok' => 'Asia/Vladivostok',
    'Asia/Sakhalin' => 'Asia/Sakhalin',
    'Asia/Magadan' => 'Asia/Magadan',
    'Asia/Kamchatka' => 'Asia/Kamchatka',
    'Asia/Anadyr' => 'Asia/Anadyr',
    'Europe/Belgrade' => 'אירופה/בלגרד',
    'Europe/Madrid' => 'אירופה/מדריד',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'אטלנטיק/הקנריים',
    'Europe/Stockholm' => 'אירופה/שטוקהולם',
    'Europe/Zurich' => 'אירופה/ציריך',
    'Europe/Istanbul' => 'אירופה/איסטנבול',
    'Europe/Kiev' => 'אירופה/קייב',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'אמריקה / ניו יורק',
    'America/Chicago' => 'אמריקה/שיקגו',
    'America/North_Dakota/Center' => 'אמריקה/צפון דקוטה/מרכז',
    'America/Denver' => 'אמריקה/דנבר',
    'America/Los_Angeles' => 'אמריקה / לוס אנג\'לס',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'פסיפיק/הונולולו',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'אמריקה/אינדיאנה/אינדיאנפוליס',
    'America/Indiana/Marengo' => 'America/Indiana/Marengo',
    'America/Indiana/Knox' => 'America/Indiana/Knox',
    'America/Indiana/Vevay' => 'America/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'America/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'America/Kentucky/Monticello',
    'America/Detroit' => 'America/Detroit',
    'America/Menominee' => 'America/Menominee',
    'America/St_Johns' => 'America/St. Johns',
    'America/Goose_Bay' => 'America/Goose_Bay',
    'America/Halifax' => 'America/Halifax',
    'America/Glace_Bay' => 'America/Glace Bay',
    'America/Montreal' => 'America/Montreal',
    'America/Toronto' => 'America/Toronto',
    'America/Thunder_Bay' => 'America/Thunder Bay',
    'America/Nipigon' => 'America/Nipigon',
    'America/Rainy_River' => 'America/Rainy River',
    'America/Winnipeg' => 'America/Winnipeg',
    'America/Regina' => 'America/Regina',
    'America/Swift_Current' => 'America/Swift Current',
    'America/Edmonton' => 'America/Edmonton',
    'America/Vancouver' => 'America/Vancouver',
    'America/Dawson_Creek' => 'America/Dawson Creek',
    'America/Pangnirtung' => 'America/Pangnirtung',
    'America/Iqaluit' => 'America/Iqaluit',
    'America/Coral_Harbour' => 'America/Coral Harbour',
    'America/Rankin_Inlet' => 'America/Rankin Inlet',
    'America/Cambridge_Bay' => 'America/Cambridge Bay',
    'America/Yellowknife' => 'America/Yellowknife',
    'America/Inuvik' => 'America/Inuvik',
    'America/Whitehorse' => 'America/Whitehorse',
    'America/Dawson' => 'America/Dawson',
    'America/Cancun' => 'אמריקה/קנקון',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'אמריקה/מקסיקו סיטי',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'אטלנטיק/ברמודה',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'אמריקה/קוסטה ריקה',
    'America/Havana' => 'אמריקה/הוואנה',
    'America/Dominica' => 'אמריקה/דומיניקה',
    'America/Santo_Domingo' => 'America/Santo Domingo',
    'America/El_Salvador' => 'אמריקה/אל סלבדור',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'אמריקה/ג\'מייקה',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'אמריקה/פנמה',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'אמריקה/ארגנטינה/בואנוס איירס',
    'America/Argentina/Cordoba' => 'אמריקה/ארגנטינה/קורדובה',
    'America/Argentina/Tucuman' => 'America/Argentina/Tucuman',
    'America/Argentina/La_Rioja' => 'America/Argentina/La_Rioja',
    'America/Argentina/San_Juan' => 'America/Argentina/San_Juan',
    'America/Argentina/Jujuy' => 'America/Argentina/Jujuy',
    'America/Argentina/Catamarca' => 'America/Argentina/Catamarca',
    'America/Argentina/Mendoza' => 'America/Argentina/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'America/Argentina/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'America/Argentina/Ushuaia',
    'America/Aruba' => 'America/Aruba',
    'America/La_Paz' => 'America/La Paz',
    'America/Noronha' => 'America/Noronha',
    'America/Belem' => 'America/Belem',
    'America/Fortaleza' => 'America/Fortaleza',
    'America/Recife' => 'America/Recife',
    'America/Araguaina' => 'America/Araguaina',
    'America/Maceio' => 'America/Maceio',
    'America/Bahia' => 'America/Bahia',
    'America/Sao_Paulo' => 'אמריקה/סאו פאולו',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'אמריקה/סנטיאגו',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'אמריקה/לימה',
    'Atlantic/South_Georgia' => 'Atlantic/South Georgia',
    'America/Paramaribo' => 'America/Paramaribo',
    'America/Port_of_Spain' => 'America/Port-of-Spain',
    'America/Montevideo' => 'America/Montevideo',
    'America/Caracas' => 'America/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'פייסבוק',
    'Twitter' => 'טוויטר',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'בקשה',
    2 => 'גישה',
    3 => 'לא חוקי',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'קמפיינים',
    'email' => 'מיילים',
    'event' => 'ארוע',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'קמפיינים',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'קמפיינים',
    'email' => 'מיילים',
    'event' => 'ארוע',
    'system' => 'מערכת',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'מרכז הידע';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'טיוטה';
$app_list_strings['aok_status_list']['Expired'] = 'פג תוקף';
$app_list_strings['aok_status_list']['In_Review'] = 'בסקירה';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'פרטי';
$app_list_strings['aok_status_list']['published_public'] = 'ציבורי';

$app_list_strings['moduleList']['FP_events'] = 'אירועים';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'מיקומים';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'מוזמן';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'לא מוזמן';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'השתתפו';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'לא נכחו';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'התקבלה';
$app_list_strings['fp_event_status_dom']['Declined'] = 'נדחה';
$app_list_strings['fp_event_status_dom']['No Response'] = '. אין תגובה';

$app_strings['LBL_STATUS_EVENT'] = 'להזמין את המצב';
$app_strings['LBL_ACCEPT_STATUS'] = 'אשר סטטוס';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'בחר דף זה';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'בחר את כל';
$app_strings['LBL_LISTVIEW_NONE'] = 'בטל בחירה של הכל';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'אינדקס';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'עדכוני אירועים';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = 'אנא הגב מעל קו זה';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'סגור',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'חדש',
        'Open_Assigned' => 'באחריות',
        'Closed_Closed' => 'סגור',
        'Open_Pending Input' => 'קלט הממתינות',
        'Closed_Rejected' => 'דחה',
        'Closed_Duplicate' => 'שכפל',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'משתמש בודד',
        'Account' => 'חשבון משתמש',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'ברירת מחדל של המערכת',
    'singleUser' => 'משתמש בודד',
    'roundRobin' => '. רובין עגול',
    'leastBusy' => 'העסוק',
    'random' => 'אקראי',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'דוחות';
$app_list_strings['moduleList']['AOR_Conditions'] = 'דוח תנאי';
$app_list_strings['moduleList']['AOR_Charts'] = 'דו ח תרשימים';
$app_list_strings['moduleList']['AOR_Fields'] = 'שדות דוח';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'דוחות מתוזמנים';
$app_list_strings['aor_operator_list']['Equal_To'] = 'שווה ל';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'לא שווה';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'גדול מ-';
$app_list_strings['aor_operator_list']['Less_Than'] = 'פחות מ';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'גדול מאו שווה ל-';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'קטן או שווה ל-';
$app_list_strings['aor_operator_list']['Contains'] = 'מכילים';
$app_list_strings['aor_operator_list']['Starts_With'] = 'מתחיל ב';
$app_list_strings['aor_operator_list']['Ends_With'] = 'מסתיים עם';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'Y-m-d';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Y';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'd/m/Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'Y-m';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'ו';
$app_list_strings['aor_condition_operator_list']['OR'] = 'או';
$app_list_strings['aor_condition_type_list']['Value'] = 'ערך';
$app_list_strings['aor_condition_type_list']['Field'] = 'שדה';
$app_list_strings['aor_condition_type_list']['Date'] = 'תאריך';
$app_list_strings['aor_condition_type_list']['Multi'] = 'אחד';
$app_list_strings['aor_condition_type_list']['Period'] = 'תקופה';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'משתמש נוכחי';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'דקות';
$app_list_strings['aor_date_type_list']['hour'] = 'שעות';
$app_list_strings['aor_date_type_list']['day'] = 'ימים';
$app_list_strings['aor_date_type_list']['week'] = 'שבועות';
$app_list_strings['aor_date_type_list']['month'] = 'חודשים';
$app_list_strings['aor_date_type_list']['business_hours'] = 'שעות העבודה';
$app_list_strings['aor_date_options']['now'] = 'עכשיו';
$app_list_strings['aor_date_options']['field'] = 'שדה זה';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'בסדר עולה';
$app_list_strings['aor_sort_operator']['DESC'] = 'סדר יורד';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'ספירה';
$app_list_strings['aor_function_list']['MIN'] = 'מינימום';
$app_list_strings['aor_function_list']['MAX'] = 'לכל היותר';
$app_list_strings['aor_function_list']['SUM'] = 'סכום';
$app_list_strings['aor_function_list']['AVG'] = 'ממוצע';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'ספירה';
$app_list_strings['aor_total_options']['SUM'] = 'סכום';
$app_list_strings['aor_total_options']['AVG'] = 'ממוצע';
$app_list_strings['aor_chart_types']['bar'] = 'גרף עמודות';
$app_list_strings['aor_chart_types']['line'] = 'תרשים קו';
$app_list_strings['aor_chart_types']['pie'] = 'תרשים עוגה';
$app_list_strings['aor_chart_types']['radar'] = 'תרשים מכ ם';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'בר מקובץ';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'חודשי';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'שבועי';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'יומי';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'פעיל';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'לא פעיל';
$app_list_strings['aor_email_type_list']['Email Address'] = 'מיילים';
$app_list_strings['aor_email_type_list']['Specify User'] = 'משתמש';
$app_list_strings['aor_email_type_list']['Users'] = 'משתמשים';
$app_list_strings['aor_assign_options']['all'] = 'כל המשתמשים';
$app_list_strings['aor_assign_options']['role'] = 'כל המשתמשים בתפקיד';
$app_list_strings['aor_assign_options']['security_group'] = 'כל המשתמשים בקבוצת אבטחה';
$app_list_strings['date_time_period_list']['today'] = 'היום';
$app_list_strings['date_time_period_list']['yesterday'] = 'אתמול';
$app_list_strings['date_time_period_list']['this_week'] = 'השבוע הנוכחי';
$app_list_strings['date_time_period_list']['last_week'] = 'בשבוע שעבר';
$app_list_strings['date_time_period_list']['last_month'] = 'בחודש שעבר';
$app_list_strings['date_time_period_list']['this_month'] = 'החודש';
$app_list_strings['date_time_period_list']['this_quarter'] = 'ברבעון הנכחי';
$app_list_strings['date_time_period_list']['last_quarter'] = 'ברבעון האחרון';
$app_list_strings['date_time_period_list']['this_year'] = 'שנה זו';
$app_list_strings['date_time_period_list']['last_year'] = 'שנה שעברה';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = '-';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'על';
$app_strings['LBL_CRON_AT'] = 'ב';
$app_strings['LBL_CRON_RAW'] = 'מתקדם';
$app_strings['LBL_CRON_MIN'] = 'מינימום';
$app_strings['LBL_CRON_HOUR'] = 'שעה';
$app_strings['LBL_CRON_DAY'] = 'יום';
$app_strings['LBL_CRON_MONTH'] = 'חודש';
$app_strings['LBL_CRON_DOW'] = 'דאו';
$app_strings['LBL_CRON_DAILY'] = 'יומי';
$app_strings['LBL_CRON_WEEKLY'] = 'שבועי';
$app_strings['LBL_CRON_MONTHLY'] = 'חודשי';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'חוזים';
$app_list_strings['moduleList']['AOS_Invoices'] = 'חשבוניות';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - תבניות';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'מוצרים - קטגוריות';
$app_list_strings['moduleList']['AOS_Products'] = 'מוצרים';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'פריטי השורה';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'קבוצות פריט השורה';
$app_list_strings['moduleList']['AOS_Quotes'] = 'הצעות מחיר';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'אנליסט';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'המתחרה';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'הלקוח';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'אינטגרטור';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'המשקיע';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'שותף';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'העיתונות';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'פרוספקט';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'משווק';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'אחר';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'טיוטה';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'משא ומתן';
$app_list_strings['quote_stage_dom']['Delivered'] = 'משלוח';
$app_list_strings['quote_stage_dom']['On Hold'] = 'בהמתנה';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'אישר';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'סגור מקובל';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'סגור אבוד';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'סגור מת';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'אושרה';
$app_list_strings['approval_status_dom']['Not Approved'] = 'לא אושרה';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'אנליסט';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'המתחרה';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'הלקוח';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'אינטגרטור';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'המשקיע';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'שותף';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'העיתונות';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'פרוספקט';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'משווק';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'אחר';
$app_list_strings['invoice_status_dom']['Paid'] = 'שילמתי';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'שלא שולמו';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'בוטל';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'לא חויב';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'חויב';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'מחשבים ניידים';
$app_list_strings['product_category_dom']['Desktops'] = 'מחשבים שולחניים';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'טוב';
$app_list_strings['product_type_dom']['Service'] = 'שירות';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'הצעות מחיר';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'חשבוניות';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'חוזים';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'הצעות מחיר';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'חשבוניות';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'חוזים';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'חשבונות';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'אנשי קשר';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'לידים';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'לא התחיל';
$app_list_strings['contract_status_list']['In Progress'] = 'בתהליך';
$app_list_strings['contract_status_list']['Signed'] = 'חתום';
$app_list_strings['contract_type_list']['Type'] = 'סוג';
$app_strings['LBL_PRINT_AS_PDF'] = 'הדפס כ PDF [Alt+P]';
$app_strings['LBL_SELECT_TEMPLATE'] = 'בחר תבנית';
$app_strings['LBL_NO_TEMPLATE'] = 'תבניות ERROR\nNo מצאו. \nPlease ללכת המודול תבניות PDF וליצור אחד';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'זרימת עבודה';
$app_list_strings['moduleList']['AOW_Conditions'] = 'בתנאים של זרימת עבודה';
$app_list_strings['moduleList']['AOW_Processed'] = 'ביקורת תהליך';
$app_list_strings['moduleList']['AOW_Actions'] = 'פעולות זרימת עבודה';
$app_list_strings['aow_status_list']['Active'] = 'פעיל';
$app_list_strings['aow_status_list']['Inactive'] = 'לא פעיל';
$app_list_strings['aow_operator_list']['Equal_To'] = 'שווה ל';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'לא שווה';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'גדול מ-';
$app_list_strings['aow_operator_list']['Less_Than'] = 'פחות מ';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'גדול מאו שווה ל-';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'קטן או שווה ל-';
$app_list_strings['aow_operator_list']['Contains'] = 'מכילים';
$app_list_strings['aow_operator_list']['Starts_With'] = 'מתחיל ב';
$app_list_strings['aow_operator_list']['Ends_With'] = 'מסתיים עם';
$app_list_strings['aow_operator_list']['is_null'] = 'ריק';
$app_list_strings['aow_process_status_list']['Complete'] = 'הושלם';
$app_list_strings['aow_process_status_list']['Running'] = 'פועל';
$app_list_strings['aow_process_status_list']['Pending'] = 'ממתינה';
$app_list_strings['aow_process_status_list']['Failed'] = 'נכשל';
$app_list_strings['aow_condition_operator_list']['And'] = 'ו';
$app_list_strings['aow_condition_operator_list']['OR'] = 'או';
$app_list_strings['aow_condition_type_list']['Value'] = 'ערך';
$app_list_strings['aow_condition_type_list']['Field'] = 'שדה';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'כל שינוי';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'ב- SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'תאריך';
$app_list_strings['aow_condition_type_list']['Multi'] = 'אחד';
$app_list_strings['aow_action_type_list']['Value'] = 'ערך';
$app_list_strings['aow_action_type_list']['Field'] = 'שדה';
$app_list_strings['aow_action_type_list']['Date'] = 'תאריך';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'העסוק';
$app_list_strings['aow_action_type_list']['Random'] = 'אקראי';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'ערך';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'שדה';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'דקות';
$app_list_strings['aow_date_type_list']['hour'] = 'שעות';
$app_list_strings['aow_date_type_list']['day'] = 'ימים';
$app_list_strings['aow_date_type_list']['week'] = 'שבועות';
$app_list_strings['aow_date_type_list']['month'] = 'חודשים';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'שעות העבודה';
$app_list_strings['aow_date_options']['now'] = 'עכשיו';
$app_list_strings['aow_date_options']['today'] = 'היום';
$app_list_strings['aow_date_options']['field'] = 'שדה זה';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'כל המשתמשים';
$app_list_strings['aow_assign_options']['role'] = 'כל המשתמשים בתפקיד';
$app_list_strings['aow_assign_options']['security_group'] = 'כל המשתמשים בקבוצת אבטחה';
$app_list_strings['aow_email_type_list']['Email Address'] = 'מיילים';
$app_list_strings['aow_email_type_list']['Record Email'] = 'רשומת מייל';
$app_list_strings['aow_email_type_list']['Related Field'] = 'הקשורים בתחום';
$app_list_strings['aow_email_type_list']['Specify User'] = 'משתמש';
$app_list_strings['aow_email_type_list']['Users'] = 'משתמשים';
$app_list_strings['aow_email_to_list']['to'] = 'לנמען';
$app_list_strings['aow_email_to_list']['cc'] = 'עותק';
$app_list_strings['aow_email_to_list']['bcc'] = 'עותק מוסתר';
$app_list_strings['aow_run_on_list']['All_Records'] = 'כל הרשומות';
$app_list_strings['aow_run_on_list']['New_Records'] = 'רשומות חדשות';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'רשומות שהשתנו';
$app_list_strings['aow_run_when_list']['Always'] = 'תמיד';
$app_list_strings['aow_run_when_list']['On_Save'] = 'רק בעת שמירה';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'פרויקטים - תבניות';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'תבניות משימות לפרוייקט';
$app_list_strings['relationship_type_list']['FS'] = 'סיום כדי להתחיל';
$app_list_strings['relationship_type_list']['SS'] = 'התחל להתחיל';
$app_list_strings['duration_unit_dom']['Days'] = 'ימים';
$app_list_strings['duration_unit_dom']['Hours'] = 'שעות';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'תצוגת גנט';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'צור פרויקט';

//gmaps
$app_strings['LBL_MAP'] = 'מפה';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'קו אורך';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'קו רוחב';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode מצב';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'כתובת';

$app_list_strings['moduleList']['jjwg_Maps'] = 'מפות';
$app_list_strings['moduleList']['jjwg_Markers'] = 'מפות - סמנים';
$app_list_strings['moduleList']['jjwg_Areas'] = 'מפות - אזורים';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'מפות - כתובת מטמון';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'מייל';
$app_list_strings['map_unit_type_list']['km'] = 'ק מ';

$app_list_strings['map_module_type_list']['Accounts'] = 'חשבונות';
$app_list_strings['map_module_type_list']['Contacts'] = 'אנשי קשר';
$app_list_strings['map_module_type_list']['Cases'] = 'קריאות';
$app_list_strings['map_module_type_list']['Leads'] = 'לידים';
$app_list_strings['map_module_type_list']['Meetings'] = 'פגישות';
$app_list_strings['map_module_type_list']['Opportunities'] = 'הזדמנויות';
$app_list_strings['map_module_type_list']['Project'] = 'פרויקטים';
$app_list_strings['map_module_type_list']['Prospects'] = 'מטרות';

$app_list_strings['map_relate_type_list']['Accounts'] = 'חשבון';
$app_list_strings['map_relate_type_list']['Contacts'] = 'אנשי קשר';
$app_list_strings['map_relate_type_list']['Cases'] = 'אירוע';
$app_list_strings['map_relate_type_list']['Leads'] = 'לידים';
$app_list_strings['map_relate_type_list']['Meetings'] = 'פגישות';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'הזדמנות';
$app_list_strings['map_relate_type_list']['Project'] = 'פרוייקטים';
$app_list_strings['map_relate_type_list']['Prospects'] = 'מטרות';

$app_list_strings['marker_image_list']['accident'] = 'תאונה';
$app_list_strings['marker_image_list']['administration'] = 'אדמיניסטרציה';
$app_list_strings['marker_image_list']['agriculture'] = 'חקלאות';
$app_list_strings['marker_image_list']['aircraft_small'] = 'מטוס קטן';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'מטוס תיירות';
$app_list_strings['marker_image_list']['airport'] = 'נמל התעופה';
$app_list_strings['marker_image_list']['amphitheater'] = 'אמפיתיאטרון';
$app_list_strings['marker_image_list']['apartment'] = 'דירה';
$app_list_strings['marker_image_list']['aquarium'] = 'אקווריום';
$app_list_strings['marker_image_list']['arch'] = 'קשת';
$app_list_strings['marker_image_list']['atm'] = 'כספומט';
$app_list_strings['marker_image_list']['audio'] = 'אודיו';
$app_list_strings['marker_image_list']['bank'] = 'בנק';
$app_list_strings['marker_image_list']['bank_euro'] = 'בנק יורו';
$app_list_strings['marker_image_list']['bank_pound'] = 'הבנק לירה';
$app_list_strings['marker_image_list']['bar'] = 'בר';
$app_list_strings['marker_image_list']['beach'] = 'חוף';
$app_list_strings['marker_image_list']['beautiful'] = 'יפה';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'מקום חנייה לאופניים';
$app_list_strings['marker_image_list']['big_city'] = 'בעיר הגדולה';
$app_list_strings['marker_image_list']['bridge'] = 'גשר';
$app_list_strings['marker_image_list']['bridge_modern'] = 'גשר מודרני';
$app_list_strings['marker_image_list']['bus'] = 'אוטובוס';
$app_list_strings['marker_image_list']['cable_car'] = 'רכבל';
$app_list_strings['marker_image_list']['car'] = 'המכונית';
$app_list_strings['marker_image_list']['car_rental'] = 'השכרת רכב';
$app_list_strings['marker_image_list']['carrepair'] = 'Carrepair';
$app_list_strings['marker_image_list']['castle'] = 'הטירה';
$app_list_strings['marker_image_list']['cathedral'] = 'קתדרלת';
$app_list_strings['marker_image_list']['chapel'] = 'הקפלה';
$app_list_strings['marker_image_list']['church'] = 'הכנסייה';
$app_list_strings['marker_image_list']['city_square'] = 'כיכר העיר';
$app_list_strings['marker_image_list']['cluster'] = 'אשכול';
$app_list_strings['marker_image_list']['cluster_2'] = 'אשכול 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'אשכול 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'אשכול 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'אשכול 5';
$app_list_strings['marker_image_list']['coffee'] = 'קפה';
$app_list_strings['marker_image_list']['community_centre'] = 'מרכז קהילתי';
$app_list_strings['marker_image_list']['company'] = 'החברה';
$app_list_strings['marker_image_list']['conference'] = 'כנס';
$app_list_strings['marker_image_list']['construction'] = 'בנייה';
$app_list_strings['marker_image_list']['convenience'] = 'נוחות';
$app_list_strings['marker_image_list']['court'] = 'בית המשפט';
$app_list_strings['marker_image_list']['cruise'] = 'קרוז';
$app_list_strings['marker_image_list']['currency_exchange'] = 'המרת מטבע';
$app_list_strings['marker_image_list']['customs'] = 'מכס';
$app_list_strings['marker_image_list']['cycling'] = 'רכיבה על אופניים';
$app_list_strings['marker_image_list']['dam'] = 'סכר';
$app_list_strings['marker_image_list']['dentist'] = 'רופא שיניים';
$app_list_strings['marker_image_list']['deptartment_store'] = 'חנות Deptartment';
$app_list_strings['marker_image_list']['disability'] = 'נכות';
$app_list_strings['marker_image_list']['disabled_parking'] = 'חניה לנכים';
$app_list_strings['marker_image_list']['doctor'] = 'דוקטור';
$app_list_strings['marker_image_list']['dog_leash'] = 'רצועה לכלב';
$app_list_strings['marker_image_list']['down'] = 'למטה';
$app_list_strings['marker_image_list']['down_left'] = 'למטה משמאל';
$app_list_strings['marker_image_list']['down_right'] = 'למטה מימין';
$app_list_strings['marker_image_list']['down_then_left'] = 'למטה ואז שמאלה';
$app_list_strings['marker_image_list']['down_then_right'] = 'למטה ואז ימינה';
$app_list_strings['marker_image_list']['drugs'] = 'סמים';
$app_list_strings['marker_image_list']['elevator'] = 'מעלית';
$app_list_strings['marker_image_list']['embassy'] = 'שגרירות';
$app_list_strings['marker_image_list']['expert'] = 'מומחה';
$app_list_strings['marker_image_list']['factory'] = 'מפעל';
$app_list_strings['marker_image_list']['falling_rocks'] = 'סלעים נופלים';
$app_list_strings['marker_image_list']['fast_food'] = 'מזון מהיר';
$app_list_strings['marker_image_list']['festival'] = 'פסטיבל';
$app_list_strings['marker_image_list']['fjord'] = 'פיורד';
$app_list_strings['marker_image_list']['forest'] = 'יער';
$app_list_strings['marker_image_list']['fountain'] = 'מזרקה';
$app_list_strings['marker_image_list']['friday'] = 'יום שישי';
$app_list_strings['marker_image_list']['garden'] = 'גן';
$app_list_strings['marker_image_list']['gas_station'] = 'תחנת דלק';
$app_list_strings['marker_image_list']['geyser'] = 'גייזר';
$app_list_strings['marker_image_list']['gifts'] = 'מתנות';
$app_list_strings['marker_image_list']['gourmet'] = 'גורמה';
$app_list_strings['marker_image_list']['grocery'] = 'מכולת';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'מסוק';
$app_list_strings['marker_image_list']['highway'] = 'הכביש המהיר';
$app_list_strings['marker_image_list']['historical_quarter'] = 'הרובע ההיסטורי';
$app_list_strings['marker_image_list']['home'] = 'בית';
$app_list_strings['marker_image_list']['hospital'] = 'בית החולים';
$app_list_strings['marker_image_list']['hostel'] = 'הוסטל';
$app_list_strings['marker_image_list']['hotel'] = 'מלון';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'מלון 1 כוכב';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'מלון 2 כוכבים';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'מלון 3 כוכבים';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'מלון 4 כוכבים';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'מלון 5 כוכבים';
$app_list_strings['marker_image_list']['info'] = 'פרטי';
$app_list_strings['marker_image_list']['justice'] = 'צדק';
$app_list_strings['marker_image_list']['lake'] = 'אגם';
$app_list_strings['marker_image_list']['laundromat'] = 'מכבסת';
$app_list_strings['marker_image_list']['left'] = 'שמאל';
$app_list_strings['marker_image_list']['left_then_down'] = 'שמאלה למטה';
$app_list_strings['marker_image_list']['left_then_up'] = 'עזבו אז את';
$app_list_strings['marker_image_list']['library'] = 'הספרייה';
$app_list_strings['marker_image_list']['lighthouse'] = 'מגדלור';
$app_list_strings['marker_image_list']['liquor'] = 'משקה חריף';
$app_list_strings['marker_image_list']['lock'] = 'מנעול';
$app_list_strings['marker_image_list']['main_road'] = 'דרך ראשית';
$app_list_strings['marker_image_list']['massage'] = 'עיסוי';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'מגדל טלפון נייד';
$app_list_strings['marker_image_list']['modern_tower'] = 'מגדל מודרני';
$app_list_strings['marker_image_list']['monastery'] = 'מנזר';
$app_list_strings['marker_image_list']['monday'] = 'יום שני';
$app_list_strings['marker_image_list']['monument'] = 'אנדרטה';
$app_list_strings['marker_image_list']['mosque'] = 'מסגד';
$app_list_strings['marker_image_list']['motorcycle'] = 'אופנוע';
$app_list_strings['marker_image_list']['museum'] = 'מוזיאון';
$app_list_strings['marker_image_list']['music_live'] = 'מוזיקה חיה';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'ג\'ק משאבת שמן';
$app_list_strings['marker_image_list']['pagoda'] = 'פגודה';
$app_list_strings['marker_image_list']['palace'] = 'ארמון';
$app_list_strings['marker_image_list']['panoramic'] = 'פנורמי';
$app_list_strings['marker_image_list']['park'] = 'פארק';
$app_list_strings['marker_image_list']['park_and_ride'] = 'חנה וסע';
$app_list_strings['marker_image_list']['parking'] = 'חניה';
$app_list_strings['marker_image_list']['photo'] = 'תמונה';
$app_list_strings['marker_image_list']['picnic'] = 'פיקניק';
$app_list_strings['marker_image_list']['places_unvisited'] = 'אתר שלא ביקרת מקומות';
$app_list_strings['marker_image_list']['places_visited'] = 'מקומות בהם';
$app_list_strings['marker_image_list']['playground'] = 'מגרש משחקים לילדים';
$app_list_strings['marker_image_list']['police'] = 'המשטרה';
$app_list_strings['marker_image_list']['port'] = 'פורט';
$app_list_strings['marker_image_list']['postal'] = 'מיקוד';
$app_list_strings['marker_image_list']['power_line_pole'] = 'עמוד קו החשמל';
$app_list_strings['marker_image_list']['power_plant'] = 'תחנת הכוח';
$app_list_strings['marker_image_list']['power_substation'] = 'תחנת כוח';
$app_list_strings['marker_image_list']['public_art'] = 'אמנות ציבורית';
$app_list_strings['marker_image_list']['rain'] = 'גשם';
$app_list_strings['marker_image_list']['real_estate'] = 'נדל ן';
$app_list_strings['marker_image_list']['regroup'] = 'קבץ מחדש';
$app_list_strings['marker_image_list']['resort'] = 'אתר הנופש';
$app_list_strings['marker_image_list']['restaurant'] = 'מסעדה';
$app_list_strings['marker_image_list']['restaurant_african'] = 'מסעדת אפריקאי';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'מסעדת ברביקיו';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'מסעדת מזנון';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'מסעדה סינית';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'מסעדת דגים';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'מסעדת פיש צ\'יפס';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'מסעדת גורמה';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'מסעדה יוונית';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'מסעדה הודית';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'מסעדה איטלקית';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'מסעדה יפנית';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'מסעדת קבב';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'מסעדה קוריאנית';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'מסעדה ים תיכונית';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'מסעדה מקסיקנית';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'מסעדה רומנטית';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'מסעדה תאילנדית';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'מסעדה טורקית';
$app_list_strings['marker_image_list']['right'] = 'נכון';
$app_list_strings['marker_image_list']['right_then_down'] = '. אז בסדר.';
$app_list_strings['marker_image_list']['right_then_up'] = '. אז בסדר.';
$app_list_strings['marker_image_list']['saturday'] = 'יום שבת';
$app_list_strings['marker_image_list']['school'] = 'בית הספר';
$app_list_strings['marker_image_list']['shopping_mall'] = 'קניון';
$app_list_strings['marker_image_list']['shore'] = 'החוף';
$app_list_strings['marker_image_list']['sight'] = 'ראייה';
$app_list_strings['marker_image_list']['small_city'] = 'עיר קטנה';
$app_list_strings['marker_image_list']['snow'] = 'שלג';
$app_list_strings['marker_image_list']['spaceport'] = 'נמל חלל';
$app_list_strings['marker_image_list']['speed_100'] = 'מהירות 100';
$app_list_strings['marker_image_list']['speed_110'] = 'מהירות 110';
$app_list_strings['marker_image_list']['speed_120'] = 'מהירות 120';
$app_list_strings['marker_image_list']['speed_130'] = 'מהירות 130';
$app_list_strings['marker_image_list']['speed_20'] = 'מהירות 20';
$app_list_strings['marker_image_list']['speed_30'] = 'מהירות 30';
$app_list_strings['marker_image_list']['speed_40'] = 'מהירות 40';
$app_list_strings['marker_image_list']['speed_50'] = 'מהירות 50';
$app_list_strings['marker_image_list']['speed_60'] = 'מהירות 60';
$app_list_strings['marker_image_list']['speed_70'] = 'מהירות 70';
$app_list_strings['marker_image_list']['speed_80'] = 'מהירות 80';
$app_list_strings['marker_image_list']['speed_90'] = 'מהירות 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'מהירות החטוטרת';
$app_list_strings['marker_image_list']['stadium'] = 'אצטדיון';
$app_list_strings['marker_image_list']['statue'] = 'פסל';
$app_list_strings['marker_image_list']['steam_train'] = 'ברכבת קיטור';
$app_list_strings['marker_image_list']['stop'] = '. תפסיק';
$app_list_strings['marker_image_list']['stoplight'] = 'רמזור';
$app_list_strings['marker_image_list']['subway'] = 'הרכבת התחתית';
$app_list_strings['marker_image_list']['sun'] = 'א';
$app_list_strings['marker_image_list']['sunday'] = 'יום ראשון';
$app_list_strings['marker_image_list']['supermarket'] = 'סופרמרקט';
$app_list_strings['marker_image_list']['synagogue'] = 'בית הכנסת';
$app_list_strings['marker_image_list']['tapas'] = 'טאפאס';
$app_list_strings['marker_image_list']['taxi'] = 'מונית';
$app_list_strings['marker_image_list']['taxiway'] = 'מסלול הסעה';
$app_list_strings['marker_image_list']['teahouse'] = 'בית התה';
$app_list_strings['marker_image_list']['telephone'] = 'טלפון';
$app_list_strings['marker_image_list']['temple_hindu'] = 'מקדש הינדי';
$app_list_strings['marker_image_list']['terrace'] = 'מרפסת';
$app_list_strings['marker_image_list']['text'] = 'טקסט';
$app_list_strings['marker_image_list']['theater'] = 'תיאטרון';
$app_list_strings['marker_image_list']['theme_park'] = 'פארק השעשועים';
$app_list_strings['marker_image_list']['thursday'] = 'יום חמישי';
$app_list_strings['marker_image_list']['toilets'] = 'אסלות';
$app_list_strings['marker_image_list']['toll_station'] = 'מס תחנת';
$app_list_strings['marker_image_list']['tower'] = 'מגדל';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'מצלמת אכיפת התנועה';
$app_list_strings['marker_image_list']['train'] = 'הרכבת';
$app_list_strings['marker_image_list']['tram'] = 'חשמלית';
$app_list_strings['marker_image_list']['truck'] = 'משאית';
$app_list_strings['marker_image_list']['tuesday'] = 'יום שלישי';
$app_list_strings['marker_image_list']['tunnel'] = 'המנהרה';
$app_list_strings['marker_image_list']['turn_left'] = 'פנה שמאלה';
$app_list_strings['marker_image_list']['turn_right'] = 'פנה ימינה';
$app_list_strings['marker_image_list']['university'] = 'אוניברסיטת';
$app_list_strings['marker_image_list']['up'] = 'למעלה';
$app_list_strings['marker_image_list']['up_left'] = 'משמאל למעלה';
$app_list_strings['marker_image_list']['up_right'] = 'מיד';
$app_list_strings['marker_image_list']['up_then_left'] = 'למעלה ואז שמאלה';
$app_list_strings['marker_image_list']['up_then_right'] = '. ואז ימינה';
$app_list_strings['marker_image_list']['vespa'] = 'וספה';
$app_list_strings['marker_image_list']['video'] = 'וידאו';
$app_list_strings['marker_image_list']['villa'] = 'וילה';
$app_list_strings['marker_image_list']['water'] = 'מים';
$app_list_strings['marker_image_list']['waterfall'] = 'מפל מים';
$app_list_strings['marker_image_list']['watermill'] = 'טחנת מים';
$app_list_strings['marker_image_list']['waterpark'] = 'פארק מים';
$app_list_strings['marker_image_list']['watertower'] = 'מגדל המים';
$app_list_strings['marker_image_list']['wednesday'] = 'יום רביעי';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'טורבינת רוח';
$app_list_strings['marker_image_list']['windmill'] = 'טחנת רוח';
$app_list_strings['marker_image_list']['winery'] = 'יקב';
$app_list_strings['marker_image_list']['work_office'] = 'משרד העבודה';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'אתר מורשת עולמית';
$app_list_strings['marker_image_list']['zoo'] = 'גן החיות';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'מחוץ למשרד';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'בפגישה';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'תזמן מחדש';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'נא הזן את המידע קבע מועד חדש';
$app_strings['LBL_RESCHEDULE_DATE'] = 'תאריך:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'הסיבה:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'נא בחר תאריך חוקי';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'נא בחר סיבה';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'תזמן מחדש';
$app_strings['LBL_RESCHEDULE_HISTORY'] = ' היסטוריית ניסיונות השיחות';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'ניסיונות שיחה';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'קבוצת אבטחה';
$app_strings['LBL_ROLE'] = 'תפקיד';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'פייסבוק';
$app_strings['TWITTER_USER_C'] = 'טוויטר';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'פרטים הזנה חברתית';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'מסנן';

$app_strings['LBL_COLLECTION_TYPE'] = 'סוג';

$app_strings['LBL_ADD_TAB'] = 'הוספת טאב';
$app_strings['LBL_EDIT_TAB'] = 'ערוך תגיות';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'הזן שם לוח מחוונים:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'מספר עמודות:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'האם אתה בטוח שברצונך למחוק';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'לוח המחוונים?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'הוסף דף לוחות מחוונים';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'להסיר את דף לוח המחוונים הנוכחי';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'שינוי שם של דף לוח המחוונים';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'פעולות';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'משימות',
    'Meetings' => 'פגישות',
    'Calls' => 'שיחות',
    'Notes' => 'רשימות',
    'Emails' => 'מיילים'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "אירעה שגיאה בטעינת השדה. תםזמן החיבור. אנא היכנס שוב כדי לתקן את זה";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'מכירות',
    'getAccountsSpotsData' => 'חשבונות',
    'getLeadsSpotsData' => 'לידים',
    'getServiceSpotsData' => 'שירות',
    'getMarketingSpotsData' => 'שיווק',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'פעילויות',
    'getQuotesSpotsData' => 'הצעות מחיר'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'שעות העבודה';
$app_list_strings['business_hours_list']['0'] = '12am';
$app_list_strings['business_hours_list']['1'] = '1am';
$app_list_strings['business_hours_list']['2'] = '2am';
$app_list_strings['business_hours_list']['3'] = '3am';
$app_list_strings['business_hours_list']['4'] = '4am';
$app_list_strings['business_hours_list']['5'] = '5am';
$app_list_strings['business_hours_list']['6'] = '6am';
$app_list_strings['business_hours_list']['7'] = '7am';
$app_list_strings['business_hours_list']['8'] = '8am';
$app_list_strings['business_hours_list']['9'] = '9am';
$app_list_strings['business_hours_list']['10'] = '10am';
$app_list_strings['business_hours_list']['11'] = '11am';
$app_list_strings['business_hours_list']['12'] = '12pm';
$app_list_strings['business_hours_list']['13'] = '1pm';
$app_list_strings['business_hours_list']['14'] = '2pm';
$app_list_strings['business_hours_list']['15'] = '3pm';
$app_list_strings['business_hours_list']['16'] = '4pm';
$app_list_strings['business_hours_list']['17'] = '5pm';
$app_list_strings['business_hours_list']['18'] = '6pm';
$app_list_strings['business_hours_list']['19'] = '7pm';
$app_list_strings['business_hours_list']['20'] = '8pm';
$app_list_strings['business_hours_list']['21'] = '9pm';
$app_list_strings['business_hours_list']['22'] = '10pm';
$app_list_strings['business_hours_list']['23'] = '11pm';
$app_list_strings['day_list']['Monday'] = 'יום שני';
$app_list_strings['day_list']['Tuesday'] = 'יום שלישי';
$app_list_strings['day_list']['Wednesday'] = 'יום רביעי';
$app_list_strings['day_list']['Thursday'] = 'יום חמישי';
$app_list_strings['day_list']['Friday'] = 'יום שישי';
$app_list_strings['day_list']['Saturday'] = 'יום שבת';
$app_list_strings['day_list']['Sunday'] = 'יום ראשון';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'מכתב';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'משפטי';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portrait';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'רוחב';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'טיוטה';
$app_list_strings['survey_status_list']['Public'] = 'ציבורי';
$app_list_strings['survey_status_list']['Closed'] = 'סגור';
$app_list_strings['surveys_question_type']['Text'] = 'טקסט';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'רדיו';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'מטריצה';
$app_list_strings['surveys_question_type']['DateTime'] = 'זמן ותאריך';
$app_list_strings['surveys_question_type']['Date'] = 'תאריך';
$app_list_strings['surveys_question_type']['Scale'] = 'קנה מידה';
$app_list_strings['surveys_question_type']['Rating'] = 'דריגה';
$app_list_strings['surveys_matrix_options'][0] = 'מרוצה';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'לא מרוצה';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'ממתינים אישור להצטרפות, אישור להצטרפות לא נשלח';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'שליחת אישור קבלת דואר אלקטרוני נכשלה';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'ממתינים אישור להצטרפות, אישור להצטרפות שלח';
$app_strings['LBL_OPT_IN'] = 'להצטרפות';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'מאושר';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'נבחר';
$app_strings['LBL_OPT_IN_INVALID'] = 'לא חוקי';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'מופסק',
    'opt-in' => 'להצטרפות',
    'confirmed-opt-in' => 'מאושר'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'להצטרפות',
    'confirmed-opt-in' => 'מאושר'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'The confirm opt in email has been added to the email queue for %s email address(es). ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Unable to send email to %s email address(es), because they are not opted in. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = '%s email address do not have a valid id. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Two Factor Authentication failed';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Two Factor Authentication code sent.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Two Factor Authentication code failed to send.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Thank you for submitting your interest.';

$app_strings['ERR_IP_CHANGE'] = 'Your session was terminated due to a significant change in your IP address';
$app_strings['ERR_RETURN'] = 'Return to Home';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Password Grant',
    'client_credentials' => 'Client Credentials',
    'implicit' => 'Implicit',
    'authorization_code' => 'Authorization Code'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => ' דקות ',
    'hour' => ' שעות',
    'day' => 'ימים',
    'week' => 'שבועות',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'אישי',
    'shared' => 'משותף',
    'group' => 'קבוצה',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'הגישה אושרה',
    'failed' => 'נכשל',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'בתהליך',
    'success' => 'הצליח',
    'warning' => 'Warning',
    'error' => 'הערה:',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'JSON API Error';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'JSON API Error occurred.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Api Version: 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Please ensure you fill in the fields required';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'Json API expects body of the request to be JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Request';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Unable to validate the Json Api Payload Response';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'Json API cannot find resource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'Json API expects the "Accept" header to be application/vnd.api+json';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'Json API expects the "Content-Type" header to be application/vnd.api+json';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Desktop notifications are now enabled for this web browser.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Desktop notifications are disabled for this web browser. Use your browser preferences to enable them again.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'This browser does not support desktop notifications.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'There was an error: ';
$app_strings['LBL_CLICK_HERE'] = 'לחץ כאן';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'חיפוש';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'חיפוש';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'חיפוש';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'קודם';
$app_strings['LBL_SEARCH_NEXT'] = 'הבא';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' of ';
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

$app_strings['LBL_KEY'] = 'מפתח';
$app_strings['LBL_VALUE'] = 'ערך';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'חתימה';

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
