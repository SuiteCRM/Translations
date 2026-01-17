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
    'language_pack_name' => 'ქართული (Georgian) - ka_GE',
    'moduleList' => array(
        'Home' => 'მთავარი',
        'ResourceCalendar' => 'რესურსების კალენდარი',
        'Contacts' => 'კონტაქტები',
        'Accounts' => 'ანგარიშები',
        'Alerts' => 'გაფრთხილება',
        'Opportunities' => 'შესაძლებლობები',
        'Cases' => 'შემთხვევები',
        'Notes' => 'შენიშვნები',
        'Calls' => 'ზარები',
        'TemplateSectionLine' => 'შაბლონების განყოფილება',
        'Calls_Reschedule' => 'ზარების გადატანა',
        'Emails' => 'მეილები',
        'EAPM' => 'API გარე მოდული',
        'Meetings' => 'შეხვედრები',
        'Tasks' => 'დავალებები',
        'Calendar' => 'კალენდარი',
        'Leads' => 'მოსამზადებელი პროცესი',
        'Currencies' => 'ვალუტა',
        'Activities' => 'აქტივობები',
        'Bugs' => 'შეცდომები',
        'Feeds' => 'მარტივი სინდიკაცია',
        'iFrames' => 'ჩემი საიტები',
        'TimePeriods' => 'დროის მონაკვეთი',
        'ContractTypes' => 'კონტრაქტის ტიპები',
        'Schedulers' => 'ორგანიზატორი',
        'Project' => 'პროექტები',
        'ProjectTask' => 'პროექტის ამოცანები',
        'Campaigns' => 'კამპანიები',
        'CampaignLog' => 'კამპანიის ჟურნალი',
        'Documents' => 'დოკუმენტები',
        'DocumentRevisions' => 'დუკუმენტის ვერსიები',
        'Connectors' => 'მაკავშირებლები',
        'Roles' => 'როლები',
        'Notifications' => 'შეტყობინებები',
        'Sync' => 'სინქრონიზაცია',
        'Users' => 'მომხმარებლები',
        'Employees' => 'თანამშრომლები',
        'Administration' => 'ადმინისტრაცია',
        'ACLRoles' => 'როლები',
        'InboundEmail' => 'შემომავალი მეილები',
        'Releases' => 'რელიზები',
        'Prospects' => 'სამიზნე',
        'Queues' => 'რიგები',
        'EmailMarketing' => 'იმეილ მარკეტინგი',
        'EmailTemplates' => 'ელ–ფოსტის შაბლონები',
        'ProspectLists' => 'სამიზნე ჯგუფი',
        'SavedSearch' => 'შენახული ძიებები',
        'UpgradeWizard' => 'განახლების ოსტატი',
        'Trackers' => 'ტრეკერები',
        'TrackerSessions' => 'ტრეკერ სესიები',
        'TrackerQueries' => 'ტრეკერ მოთხოვნები',
        'FAQ' => 'ხშირად დასმული კითხვები',
        'Newsletters' => 'სტატიები',
        'SugarFeed' => 'SuiteCRM არხი',
        'SugarFavorites' => 'SuiteCRM ფავორიტები',

        'OAuthKeys' => 'OAuth მომხმარებლის გასაღები',
        'OAuthTokens' => 'OAuth ჟეტონები',
        'OAuth2Clients' => 'OAuth კლიენტები',
        'OAuth2Tokens' => 'OAuth ჟეტონები',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'მთავარი',
        'Dashboard' => 'მართვის პანელი',
        'Contacts' => 'კონტაქტი',
        'Accounts' => 'ანგარიში',
        'Opportunities' => 'შესაძლებლობა',
        'Cases' => 'შემთხვევა',
        'Notes' => 'შენიშვნა',
        'Calls' => 'ზარი',
        'Emails' => 'ელ-ფოსტა',
        'EmailTemplates' => 'ელ–ფოსტის შაბლონები',
        'Meetings' => 'შეხვედრა',
        'Tasks' => 'დავალება',
        'Calendar' => 'კალენდარი',
        'Leads' => 'მოსამზადებელი პროცესი',
        'Activities' => 'აქტივობა',
        'Bugs' => 'შეცდომა',
        'KBDocuments' => 'KBDocument',
        'Feeds' => 'მარტივი სინდიკაცია',
        'iFrames' => 'ჩემი საიტები',
        'TimePeriods' => 'დროის მონაკვეთი',
        'Project' => 'პროექტი',
        'ProjectTask' => 'პროექტის ამოცანა',
        'Prospects' => 'სამიზნე',
        'Campaigns' => 'კამპანია',
        'Documents' => 'დოკუმენტი',
        'Sync' => 'სინქრონიზაცია',
        'Users' => 'მომხმარებელი',
        'SugarFavorites' => 'SuiteCRM ფავორიტები',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'დიახ',
        '2' => 'არა',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'ანალიტიკოსი',
        'Competitor' => 'კონკურენტი',
        'Customer' => 'კლიენტი',
        'Integrator' => 'ინტეგრატორი',
        'Investor' => 'ინვესტორი',
        'Partner' => 'პარტნიორი',
        'Press' => 'პრესა',
        'Prospect' => 'პოტენციური მომხმარებელი',
        'Reseller' => 'გადამყიდველი',
        'Other' => 'სხვა',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'ტანსაცმელი',
        'Banking' => 'საბანკო',
        'Biotechnology' => 'ბიოტექნოლოგია',
        'Chemicals' => 'ქიმიური ნივთიერებები',
        'Communications' => 'კომუნიკაცია',
        'Construction' => 'კონსტრუქცია',
        'Consulting' => 'კონსულტაცია',
        'Education' => 'განათლება',
        'Electronics' => 'ელექტრონიკა',
        'Energy' => 'ენერგია',
        'Engineering' => 'საინჟინრო',
        'Entertainment' => 'გართობა',
        'Environmental' => 'გარემო',
        'Finance' => 'ფინანსები',
        'Government' => 'მთავრბა',
        'Healthcare' => 'ჯანდაცვა',
        'Hospitality' => 'მასპინძლობა',
        'Insurance' => 'დაზღვევა',
        'Machinery' => 'დანადგარები',
        'Manufacturing' => 'წარმოება',
        'Media' => 'მედია',
        'Not For Profit' => 'არა კომერციული',
        'Recreation' => 'რეკრეაცია',
        'Retail' => 'საცალო ვაჭრობა',
        'Shipping' => 'ტრანსპორტირება გემით',
        'Technology' => 'ტექნოლოგია',
        'Telecommunications' => 'ტელეკომუნიკაცია',
        'Transportation' => 'ტრაპორტირება',
        'Utilities' => 'საშუალებები',
        'Other' => 'სხვა',
    ),
    'lead_source_default_key' => 'თვითგენერირებული',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'ცივი ზარი',
        'Existing Customer' => 'მიმდინარე კლიენტი',
        'Self Generated' => 'თვითგენერირებული',
        'Employee' => 'თანამშრომელი',
        'Partner' => 'პარტნიორი',
        'Public Relations' => 'საზოგადოებასთან ურთიერთობა',
        'Direct Mail' => 'ძირითადი მეილი',
        'Conference' => 'კონფერენცია',
        'Trade Show' => 'გამოფენა',
        'Web Site' => 'ვებ გვერდი',
        'Word of mouth' => 'წარმოთქმის სიტყვა',
        'Email' => 'ელ-ფოსტა',
        'Campaign' => 'კამპანია',
        'Other' => 'სხვა',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'არსებული ბიზნესები',
        'New Business' => 'ახალი ბიზნესი',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'შემოსავალი',
        'Investment' => 'ინვესტიცია',
        'Expected_Revenue' => 'მოსალოდნელი შემოსავალი',
        'Budget' => 'ბიუჯეტი',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'გადაწყვეტილების მიმღები',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'გადაწყვეტილების მიმღები',
        'Business Decision Maker' => 'ბიზნეს გადაწყვეტილების მიმღები',
        'Business Evaluator' => 'ბიზნეს შემფასებელი',
        'Technical Decision Maker' => 'ტექნიკური გადაწყვეტილების მიმღები',
        'Technical Evaluator' => 'ტექნიკური შემფასებელი',
        'Executive Sponsor' => 'აღმასრულებელი სპონსორი',
        'Influencer' => 'განმსაზღვრელი ფაქტორი',
        'Other' => 'სხვა',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'პირველადი კონტაქტი',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'პირველადი კონტაქტი',
        'Alternate Contact' => 'ალტერნატიული კონტაქტი',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'დაზვერვა',
    'sales_stage_dom' => array(
        'Prospecting' => 'დაზვერვა',
        'Qualification' => 'კვალიფიკაცია',
        'Needs Analysis' => 'საჭიროებების ანალიზი',
        'Value Proposition' => 'ღირებული წინადადება',
        'Id. Decision Makers' => 'გადაწყვეტილების მიმღები პირის გამოვლენა',
        'Perception Analysis' => 'აღქმის ანალიზები',
        'Proposal/Price Quote' => 'შეთავაზება/საფასო ქვოტა',
        'Negotiation/Review' => 'მოლაპარაკებები / მიმოხილვა',
        'Closed Won' => 'კომპანიის მიერ დამტკიცებული',
        'Closed Lost' => 'კომპანიისგან უარყოფილი',
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
        'Call' => 'ზარი',
        'Meeting' => 'შეხვედრა',
        'Task' => 'დავალება',
        'Email' => 'ელ-ფოსტა',
        'Note' => 'შენიშვნა',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'ბატონი.',
        'Ms.' => 'ქალბატონი.',
        'Mrs.' => 'ქ-ნი.',
        'Miss' => 'ქალიშვილი',
        'Dr.' => 'დოქტორი.',
        'Prof.' => 'პროფესორი',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 წუთის წინ',
        300 => '5 წუთის წინ',
        600 => '10 წუთის წინ',
        900 => '15 წუთის წინ',
        1800 => '30 წუთის წინ',
        3600 => '1 საათის წინ',
        7200 => '2 საათის წინ',
        10800 => '3 საათის წინ',
        18000 => '5 საათის წინ',
        86400 => '1 დღის წინ',
    ),

    'task_priority_default' => 'საშუალო',
    'task_priority_dom' => array(
        'High' => 'მაღალი',
        'Medium' => 'საშუალო',
        'Low' => 'დაბალი',
    ),
    'task_status_default' => 'არ დაწყებული',
    'task_status_dom' => array(
        'Not Started' => 'არ დაწყებული',
        'In Progress' => 'პროგრესირებს',
        'Completed' => 'დასრულებულია',
        'Pending Input' => 'შეყვანის მოლოდინი',
        'Deferred' => 'გადადებული',
    ),
    'meeting_status_default' => 'დაგეგმილი',
    'meeting_status_dom' => array(
        'Planned' => 'დაგეგმილი',
        'Held' => 'შენარჩუნებული',
        'Not Held' => 'არ შენარჩუნებული',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'სხვა',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'დაგეგმილი',
    'call_status_dom' => array(
        'Planned' => 'დაგეგმილი',
        'Held' => 'შენარჩუნებული',
        'Not Held' => 'არ შენარჩუნებული',
    ),
    'call_direction_default' => 'გასაგზავნი წერილი',
    'call_direction_dom' => array(
        'Inbound' => 'შემომავალი',
        'Outbound' => 'გასაგზავნი წერილი',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'ახალი',
        'Assigned' => 'მინიჭებულია',
        'In Process' => 'პროცესშია',
        'Converted' => 'კონვერტირებული',
        'Recycled' => 'გადამუშავებული',
        'Dead' => 'მკვდარი',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'მაღალი',
        'P2' => 'საშუალო',
        'P3' => 'დაბალი',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'რიგითი მომხმარებელი',
        'Administrator' => 'ადმინისტრატორი',
    ),
    'user_status_dom' => array(
        'Active' => 'აქტიური',
        'Inactive' => 'არააქტიური',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'ელ. ფოსტის კოდი',
    ),
    'employee_status_dom' => array(
        'Active' => 'აქტიური',
        'Terminated' => 'დასრულებული',
        'Leave of Absence' => 'უხელფასო პერიოდი',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'მაღალი',
        'Medium' => 'საშუალო',
        'Low' => 'დაბალი',
    ),
    'project_task_priority_default' => 'საშუალო',

    'project_task_status_options' => array(
        'Not Started' => 'არ დაწყებული',
        'In Progress' => 'პროგრესირებს',
        'Completed' => 'დასრულებულია',
        'Pending Input' => 'შეყვანის მოლოდინი',
        'Deferred' => 'გადადებული',
    ),
    'project_task_utilization_options' => array(
        '0' => 'არცერთი',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'დრაფტი',
        'In Review' => 'განხილვაში მყოფი',
        'Underway' => 'მოქმედი',
        'On_Hold' => 'მოლოდინში',
        'Completed' => 'დასრულებულია',
    ),
    'project_status_default' => 'დრაფტი',

    'project_duration_units_dom' => array(
        'Days' => 'დღე',
        'Hours' => 'საათი',
    ),

    'activity_status_type_dom' => array(
        '' => '--არ არსებობს--',
        'active' => 'აქტიური',
        'inactive' => 'არააქტიური',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'ანგარიშები',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'ანგარიში',
        'Opportunities' => 'შესაძლებლობა',
        'Cases' => 'შემთხვევა',
        'Leads' => 'მოსამზადებელი პროცესი',
        'Contacts' => 'კონტაქტი', // cn (11/22/2005) added to support Emails

        'Bugs' => 'შეცდომა',
        'Project' => 'პროექტი',

        'Prospects' => 'სამიზნე',
        'ProjectTask' => 'პროექტის ამოცანა',

        'Tasks' => 'დავალება',

        'AOS_Contracts' => 'კონტრაქტი',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'პროდუქტი',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'ანგარიში',
        'Contacts' => 'კონტაქტი',
        'Opportunities' => 'შესაძლებლობა',
        'Campaigns' => 'კამპანია',
        'Tasks' => 'დავალება',
        'Emails' => 'ელ-ფოსტა',

        'Bugs' => 'შეცდომა',
        'Project' => 'პროექტი',
        'ProjectTask' => 'პროექტის ამოცანა',
        'Prospects' => 'სამიზნე',
        'Cases' => 'შემთხვევა',
        'Leads' => 'მოსამზადებელი პროცესი',

        'Meetings' => 'შეხვედრა',
        'Calls' => 'ზარი',

        'AOS_Contracts' => 'კონტრაქტი',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'პროდუქტი',
    ),

    'parent_type_display' => array(
        'Accounts' => 'ანგარიში',
        'Contacts' => 'კონტაქტი',
        'Tasks' => 'დავალება',
        'Opportunities' => 'შესაძლებლობა',

        'Bugs' => 'შეცდომა',
        'Cases' => 'შემთხვევა',
        'Leads' => 'მოსამზადებელი პროცესი',

        'Project' => 'პროექტი',
        'ProjectTask' => 'პროექტის ამოცანა',

        'Prospects' => 'სამიზნე',

        'AOS_Contracts' => 'კონტრაქტი',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'პროდუქტი',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'ქვოტა',
        'AOS_Invoices' => 'ინვოისები',
        'AOS_Contracts' => 'კონტრაქტები',
    ),
    'issue_priority_default_key' => 'საშუალო',
    'issue_priority_dom' => array(
        'Urgent' => 'სასწრაფო',
        'High' => 'მაღალი',
        'Medium' => 'საშუალო',
        'Low' => 'დაბალი',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'დათანხმებულია',
        'Duplicate' => 'დუბლირება',
        'Closed' => 'დახურულია',
        'Out of Date' => 'ვადა გასულია',
        'Invalid' => 'არასწორი',
    ),

    'issue_status_default_key' => 'ახალი',
    'issue_status_dom' => array(
        'New' => 'ახალი',
        'Assigned' => 'მინიჭებულია',
        'Closed' => 'დახურულია',
        'Pending' => 'ველოდებით',
        'Rejected' => 'უარყოფილია',
    ),

    'bug_priority_default_key' => 'საშუალო',
    'bug_priority_dom' => array(
        'Urgent' => 'სასწრაფო',
        'High' => 'მაღალი',
        'Medium' => 'საშუალო',
        'Low' => 'დაბალი',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'დათანხმებულია',
        'Duplicate' => 'დუბლირება',
        'Fixed' => 'ფიქსირებული',
        'Out of Date' => 'ვადა გასულია',
        'Invalid' => 'არასწორი',
        'Later' => 'მოგვიანებით',
    ),
    'bug_status_default_key' => 'ახალი',
    'bug_status_dom' => array(
        'New' => 'ახალი',
        'Assigned' => 'მინიჭებულია',
        'Closed' => 'დახურულია',
        'Pending' => 'ველოდებით',
        'Rejected' => 'უარყოფილია',
    ),
    'bug_type_default_key' => 'შეცდომა',
    'bug_type_dom' => array(
        'Defect' => 'წუნი',
        'Feature' => 'ფუნქცია',
    ),
    'case_type_dom' => array(
        'Administration' => 'ადმინისტრაცია',
        'Product' => 'პროდუქტი',
        'User' => 'მომხმარებელი',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'შიდა',
        'Forum' => 'ფორუმი',
        'Web' => 'ვები',
        'InboundEmail' => 'ელ-ფოსტა',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'ანგარიშები',
        'Activities' => 'აქტივობები',
        'Bugs' => 'შეცდომები',
        'Calendar' => 'კალენდარი',
        'Calls' => 'ზარები',
        'Campaigns' => 'კამპანიები',
        'Cases' => 'შემთხვევები',
        'Contacts' => 'კონტაქტები',
        'Currencies' => 'ვალუტა',
        'Dashboard' => 'მართვის პანელი',
        'Documents' => 'დოკუმენტები',
        'Emails' => 'მეილები',
        'Feeds' => 'არხები',
        'Forecasts' => 'პროგნოზი',
        'Help' => 'დახმარება',
        'Home' => 'მთავარი',
        'Leads' => 'მოსამზადებელი პროცესი',
        'Meetings' => 'შეხვედრები',
        'Notes' => 'შენიშვნები',
        'Opportunities' => 'შესაძლებლობები',
        'Outlook Plugin' => 'Outlook მოდული',
        'Projects' => 'პროექტები',
        'Quotes' => 'ქვოტა',
        'Releases' => 'რელიზები',
        'RSS' => 'მარტივი სინდიკაცია',
        'Studio' => 'სტუდიო',
        'Upgrade' => 'განახლება',
        'Users' => 'მომხმარებლები',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'დაგეგმვა',
        'Active' => 'აქტიური',
        'Inactive' => 'არააქტიური',
        'Complete' => 'დასრულება',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'სატელეფონო გაყიდვები',
        'Mail' => 'მეილი',
        'Email' => 'ელ-ფოსტა',
        'Print' => 'ბეჭდვა',
        'Web' => 'ვები',
        'Radio' => 'რადიო',
        'Television' => 'ტელევიზია',
        'NewsLetter' => 'სტატიები',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'კვირეულად',
        'Monthly' => 'ყოველთვიურად',
        'Quarterly' => 'კვარტალურად',
        'Annually' => 'ყოველწლიურად',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'იანვარი',
        '2' => 'თებერვალი',
        '3' => 'მარტი',
        '4' => 'აპრილი',
        '5' => 'მაისი',
        '6' => 'ივნისი',
        '7' => 'ივლისი',
        '8' => 'აგვისტო',
        '9' => 'სექტემბერი',
        '10' => 'ოქტომბერი',
        '11' => 'ნოემბერი',
        '12' => 'დეკემბერი',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'იან',
        '2' => 'თებ',
        '3' => 'მარ',
        '4' => 'აპრ',
        '5' => 'მაისი',
        '6' => 'ივნ',
        '7' => 'ივლ',
        '8' => 'აგვ',
        '9' => 'სექ',
        '10' => 'ოქტ',
        '11' => 'ნოე',
        '12' => 'დეკემბერი',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'კვირა',
        '2' => 'ორშაბათი',
        '3' => 'სამშაბათი',
        '4' => 'ოთხშაბათი',
        '5' => 'ხუთშაბათი',
        '6' => 'პარასკევი',
        '7' => 'შაბათი',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'კვ',
        '2' => 'ორშ',
        '3' => 'სამშ',
        '4' => 'ოთხ',
        '5' => 'ხუთ',
        '6' => 'პარ',
        '7' => 'შაბ',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Personal',
        'group' => 'ჯგუფი',
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
        'personal' => 'Personal',
        'group' => 'ჯგუფი',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personal',
        'group' => 'ჯგუფი',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personal',
        'group' => 'ჯგუფი',
        'system' => 'სისტემა',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'აქტიური',
        'Inactive' => 'არააქტიური',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'გაგზავნილია',
        'archived' => 'დაარქივებულია',
        'draft' => 'დრაფტი',
        'inbound' => 'შემომავალი',
        'campaign' => 'კამპანია',
    ),
    'dom_email_status' => array(
        'archived' => 'დაარქივებულია',
        'closed' => 'დახურულია',
        'draft' => 'In Draft',
        'read' => 'წაკითხვა',
        'replied' => 'Replied',
        'sent' => 'გაგზავნილია',
        'send_error' => 'Send Error',
        'unread' => 'წაუკითხავი',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'დაარქივებულია',
    ),

    'dom_email_server_type' => array(
        '' => '--არ არსებობს--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--არ არსებობს--',
        'createcase' => 'Create Case',
        'bounce' => 'Bounce Handling',
    ),
    'dom_email_distribution' => array(
        '' => '--არ არსებობს--',
        'direct' => 'Direct Assign',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Least-Busy',
    ),
    'dom_email_errors' => array(
        1 => 'Only select one user when Direct Assigning items.',
        2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'დიახ',
        'bool_false' => 'არა',
    ),
    'dom_int_bool' => array(
        1 => 'დიახ',
        0 => 'არა',
    ),
    'dom_switch_bool' => array(
        'on' => 'დიახ',
        'off' => 'არა',
        '' => 'არა',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM Email Client',
        'mailto' => 'External Email Client',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'ძირითადი იმეილ ფორმატი',
        'html' => 'HTML Email',
        'plain' => 'ელ–ფოსტის ტექსტი',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'დედლაინი, არ შესრულებულა',
        'ready' => 'მზადაა',
        'in progress' => 'პროგრესირებს',
        'failed' => 'წარუმატებელია',
        'completed' => 'დასრულებულია',
        'no curl' => 'არ წარმოებს: Curl არ არის ხელმისაწვდომი',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'აქტიური',
        'Inactive' => 'არააქტიური',
    ),

    'scheduler_period_dom' => array(
        'min' => 'წუთები',
        'hour' => 'საათი',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'მარკეტინგი',
        'Knowledege Base' => 'საბაზისო ცოდნა',
        'Sales' => 'გაყიდვები',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'დაარქივებულია',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'მარკეტინგული მასალა',
        'Product Brochures' => 'პროდუქტის პროშურები',
        'FAQ' => 'ხშირად დასმული კითხვები',
    ),

    'document_status_dom' => array(
        'Active' => 'აქტიური',
        'Draft' => 'დრაფტი',
        'FAQ' => 'ხშირად დასმული კითხვები',
        'Expired' => 'ვადაგასული',
        'Under Review' => 'განხილვის ქვეშ',
        'Pending' => 'ველოდებით',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'ფოსტის შერწყმა',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'სალიცენზიო შეთანხმება',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'დათანხმება',
        'decline' => 'უარყოფა',
        'tentative' => 'სავარაუდო',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'დათანხმებულია',
        'decline' => 'უარყოფილია',
        'tentative' => 'სავარაუდო',
        'none' => 'არცერთი',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'არცერთი',
        'Daily' => 'დღიურად',
        'Weekly' => 'კვირეულად',
        'Monthly' => 'ყოველთვიურად',
        'Yearly' => 'წლიურად',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'დღე(ები)',
        'Weekly' => 'კვირა(ები)',
        'Monthly' => 'თვე(ები)',
        'Yearly' => 'წელი(ები)',
    ),

    'duration_dom' => array(
        '' => 'არცერთი',
        '900' => '15 წუთი',
        '1800' => '30 წუთი',
        '2700' => '45 წუთი',
        '3600' => '1 საათი',
        '5400' => '1.5 საათი',
        '7200' => '2 საათი',
        '10800' => '3 საათი',
        '21600' => '6 საათი',
        '86400' => '1 დღე',
        '172800' => '2 დღე',
        '259200' => '3 დღე',
        '604800' => '1 კვირა',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'სტანდარტი',
        'seed' => 'Seed',
        'exempt_domain' => 'აღკვეთილი სია დომეინის მიხედვით',
        'exempt_address' => 'აღკვეთილი სია მეილის მიხედვით',
        'exempt' => 'აღკვეთილი სია ID–ს მიხედვით',
        'test' => 'ტესტი',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'აქტიური',
        'inactive' => 'არააქტიური',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Message Sent/Attempted',
        'send error' => 'Bounced Messages,Other',
        'invalid email' => 'Bounced Messages,Invalid Email',
        'link' => 'Click-thru Link',
        'viewed' => 'ნანახი შეტყობინება',
        'removed' => 'Opted Out',
        'lead' => 'Leads Created',
        'contact' => 'კონტრაქტი შექმნილია',
        'blocked' => 'Suppressed by address or domain',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'კონტაქტები',
        'Users' => 'მომხმარებლები',
        'Prospects' => 'სამიზნე',
        'Leads' => 'მოსამზადებელი პროცესი',
        'Accounts' => 'ანგარიშები',
    ),
    'merge_operators_dom' => array(
        'like' => 'შეიცავს',
        'exact' => 'ზუსტად',
        'start' => 'იწყება',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'დიახ',
        'false' => 'არა',
        'required' => 'სავალდებულოა',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'გამორთულია',
        1 => 'ჩართული',
        2 => 'ფილტრი',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'მაღალი',
        'medium' => 'საშუალო',
        'low' => 'დაბალი',
    ),

    'projects_status_options' => array(
        'notstarted' => 'არ დაწყებული',
        'inprogress' => 'პროგრესირებს',
        'completed' => 'დასრულებულია',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Expand Legend',
        'collapselegend' => 'Collapse Legend',
        'clickfordrilldown' => 'Click for Drilldown',
        'detailview' => 'დამატებითი ინფორმაცია...',
        'piechart' => 'Pie Chart',
        'groupchart' => 'Group Chart',
        'stackedchart' => 'Stacked Chart',
        'barchart' => 'Bar Chart',
        'horizontalbarchart' => 'Horizontal Bar Chart',
        'linechart' => 'Line Chart',
        'noData' => 'Data not available',
        'print' => 'ბეჭდვა',
        'pieWedgeName' => 'სექციები',
    ),
    'release_status_dom' => array(
        'Active' => 'აქტიური',
        'Inactive' => 'არააქტიური',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Single Quote (\')',
        '"' => 'Double Quote (")',
        '' => 'არცერთი',
        'other' => 'სხვა:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'სხვა:',
    ),
    'link_target_dom' => array(
        '_blank' => 'ახალი ფანჯარა',
        '_self' => 'იგივე ფანჯარა',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'Do not auto-refresh',
        '30' => 'ყოველ 30 წამში',
        '60' => 'ყოველ 1 წუთში',
        '180' => 'ყოველ 3 წუთში',
        '300' => 'ყოველ 5 წუთში',
        '600' => 'ყოველ 10 წუთში',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'არასდროს',
        '30' => 'ყოველ 30 წამში',
        '60' => 'ყოველ 1 წუთში',
        '180' => 'ყოველ 3 წუთში',
        '300' => 'ყოველ 5 წუთში',
        '600' => 'ყოველ 10 წუთში',
    ),
    'date_range_search_dom' => array(
        '=' => 'უდრის',
        'not_equal' => 'ჩაურთველი',
        'greater_than' => 'შემდეგ',
        'less_than' => '%s-მდე',
        'last_7_days' => 'ბოლო 7 დღე',
        'next_7_days' => 'შემდეგი 7 დღე',
        'last_30_days' => 'ბოლო 30 დღე',
        'next_30_days' => 'შემდეგი 30 დღე',
        'last_month' => 'წინა თვე',
        'this_month' => 'ეს თვე',
        'next_month' => 'შემდეგი თვე',
        'last_year' => 'წინა წელი',
        'this_year' => 'ეს წელი',
        'next_year' => 'შემდეგი წელი',
        'between' => 'შორის',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'უდრის',
        'not_equal' => 'არ უდრის',
        'greater_than' => 'მეტი ვიდრე',
        'greater_than_equals' => 'მეტია ან ტოლია',
        'less_than' => 'ნაკლებია',
        'less_than_equals' => 'ნაკლებია ან ტოლია',
        'between' => 'შორის',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'კოპირება',
        'move' => 'გადაადგილება',
        'donothing' => 'არაფრის კეთება',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Results',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'ელ. ფოსტის კოდი:',
    'LBL_SEND' => 'გაგზავნა',
    'LBL_LOGOUT' => 'გამოსვლა',
    'LBL_TOUR_NEXT' => 'შემდეგი',
    'LBL_TOUR_SKIP' => 'გამოტოვება',
    'LBL_TOUR_BACK' => 'უკან',
    'LBL_TOUR_TAKE_TOUR' => 'აიღე ტური',
    'LBL_MOREDETAIL' => 'მეტი დეტალი' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'ხაზზე გასწორება' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'ჩვენება' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'ფილტრი' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'დამატება' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'ელ–ფოსტის დამატება' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'დამალვა/ჩვენება' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'წაშლა' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'გასუფთავება' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'წაშლა' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'ელ–ფოსტის წაშლა' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'არიდება',
    'LBL_ID_FF_INVALID' => 'უმოწმედოთ ქცევა',
    'LBL_ADD' => 'დამატება' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'კომპანიის ლოგო' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'პოპაპების შემაერთებლები',
    'LBL_CLOSEINLINE' => 'დახურვა',
    'LBL_VIEWINLINE' => 'ჩვენება',
    'LBL_INFOINLINE' => 'ინფო',
    'LBL_PRINT' => 'ბეჭდვა',
    'LBL_HELP' => 'დახმარება',
    'LBL_ID_FF_SELECT' => 'არჩევა',
    'DEFAULT' => 'საბაზო',
    'LBL_SORT' => 'დახარისხება',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'ავამოქმედო SMTP SSL-ის ან TLS-ის საშუალებით?',
    'LBL_NO_ACTION' => 'ამ სახელის მიერ მოქმედება არ არსებობს: %s',
    'LBL_NO_SHORTCUT_MENU' => 'მოქმედებები არ არის ხელმისაწვდომი.',
    'LBL_NO_DATA' => 'არ არის მონაცემები',

    'LBL_ROUTING_FLAGGED' => 'დროშით მონიშნვა',
    'LBL_ROUTING_TO' => 'იმისთვის, რომ',
    'LBL_ROUTING_TO_ADDRESS' => 'მისამართზე',
    'LBL_ROUTING_WITH_TEMPLATE' => 'შაბლონით',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'ამჟამად ეს ჩანაწერის Office Phone-ისა და Address-ის ველები შევსებულია. ამ მნიშვნელობების გადასაწერად თქვენ მიერ მონიშნული ანგარიშის Office Phone-ისა და Address-ის ველებში, დააწკაპეთ "OK". მიმდინარე მნიშვნელობის შესანარჩუნებლად, დააწკაპეთ "Cancel".',
    'LBL_DROP_HERE' => '[დააგდეთ აქ]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'წინა შევსების Gmail&#153; დათქმული',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'სახელი',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'გამავალი ელ. ფოსტის სერვერის კუთვნილება',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP პაროლი',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP პორტი',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP სერვერი',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP მომხმარებლის სახელი',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'სტანდარტი',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'ყურადღება: მომხმარებლის სახელისა და პაროლის გამოტოვება გამავალი ელ. ფოსტის ანგარიშისთვის.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'ელ. ფოსტის ანგარიშების დაყენება შემავალი ელ. წერილების სანახავად თქვენი ელ. ფოსტის ანგარიშებიდან.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'SMTP ელ. ფოსტის სერვერის ინფორმაციით უზრუნველყოფა გამავალი ელ. წერილებისთვის ელ. ფოსტის ანგარიშში.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'დასრულდა',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'გასუფთავება',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'სად:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'ასლი:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'ფარული ასლი:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'სად/ასლი/ფარული ასლი',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'ელ. ფოსტის მისამართი',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'ფილტრი',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'სახელი',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'მისამართები არ მოიძებნა',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'შეინახეთ და დაამატეთ მისამართების წიგნში',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'აირჩიეთ ელ. ფოსტის მიმღებები',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'მისამართების წიგნი',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'ყურადღება! ანგარიში რომლის წაშლასაც ცდილობთ ვლინდება შიდა ანგარიშად. დარწმუნებული ხართ რომ გსურთ გააგრძელოთ?',
    'LBL_EMAIL_ADDRESSES' => 'ელ-ფოსტა',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'ელ. ფოსტის მისამართი',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'თქვენ დაგიდასტურებიათ, რომ თქვენი ელ. ფოსტის მისამართი დარეგისტრირებულა: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'ვერ ვადასტურებ ელ. ფოსტის მისამართს',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'SuiteCRM-ში იმპორტი',
    'LBL_EMAIL_ASSIGNMENT' => 'მინიჭება',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'დართვა',
    'LBL_EMAIL_ATTACHMENT' => 'დართვა',
    'LBL_EMAIL_ATTACHMENTS' => 'From Local System',
    'LBL_EMAIL_ATTACHMENTS2' => 'From SuiteCRM Documents',
    'LBL_EMAIL_ATTACHMENTS3' => 'Template Attachments',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'File',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'დოკუმენტი',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'Cancel',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Character Set',
    'LBL_EMAIL_CHECK' => 'Check Mail',
    'LBL_EMAIL_CHECKING_NEW' => 'Checking for New Email',
    'LBL_EMAIL_CHECKING_DESC' => 'One moment please... <br><br>If this is the first check for the mail account, it may take some time.',
    'LBL_EMAIL_CLOSE' => 'დახურვა',
    'LBL_EMAIL_COFFEE_BREAK' => 'Checking for New Email. <br><br>Large mail accounts may take a considerable amount of time.',

    'LBL_EMAIL_COMPOSE' => 'ელ-ფოსტა',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Please enter recipient(s) for this email.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'The body of this email is empty. Send anyway?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'This email has no subject. Send anyway?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(no subject)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Please enter valid email address for To, CC and BCC fields',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Discard this email?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Are you sure you want to delete this signature?',

    'LBL_EMAIL_SENT_SUCCESS' => 'Email sent',

    'LBL_EMAIL_CREATE_NEW' => '--Create On Save--',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiple',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'ცარიელია',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Date Sent by Sender',
    'LBL_EMAIL_DATE_TODAY' => 'Today',
    'LBL_EMAIL_DELETE' => 'წაშლა',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Delete selected messages?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'Email deleted successfully.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Deleting Message',
    'LBL_EMAIL_DETAILS' => 'Details',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Only the Primary address will be used when working with Contacts.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Emptying Trash',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Deleting outbound server',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Clearing cache files',
    'LBL_EMAIL_EMPTY_MSG' => 'No emails to display.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Folder name must be unique and not empty. Please try again.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Cannot delete a folder. Either the folder or its children has emails or a mail box associated to it.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Cannot determine the intended folder from context. Try again.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Please check your settings.',
    'LBL_EMAIL_ERROR_DESC' => 'Errors were detected: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'You do not have access to this area. Contact your site administrator to obtain access.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM Folder names must be unique.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Please enter some search criteria.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'An error has occurred',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Message Removed from Server',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Either the message was removed from Server or moved to a different folder',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Connection to the mail server failed. Please contact your Administrator',
    'LBL_EMAIL_ERROR_MOVE' => 'Moving email between servers and/or mail accounts is not supported at this time.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Move Error',
    'LBL_EMAIL_ERROR_NAME' => 'A name is required.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'From Address is required. Please enter a valid email address.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'გთხოვთ უზრუნველყოთ ფაილი.',
    'LBL_EMAIL_ERROR_SERVER' => 'მოითხოვება ელ. ფოსტის სერვერის მისამართი.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'ელ. ფოსტის ანგარიში შესაძლოა არ შენახულა.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'ელ. ფოსტის სერვერთან კომუნიკაციის დროს დაფიქსირებულა შეცდომა.',
    'LBL_EMAIL_ERROR_USER' => 'მოთხოვნილია მომხმარებლის სახელი.',
    'LBL_EMAIL_ERROR_PORT' => 'მოითხოვება სერვერის პორტის მისამართი.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'მოითხოვება სერვერის პროტოკოლი.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'მოითხოვება კონტროლირებადი ფოლდერი.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'მოითხოვება სანაგვის ფოლდერი.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'ეს ინფორმაცია არ არის ხელმისაწვდომი',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'გამავალი ელ. ფოსტის სერვერი არ განისაზღვრა.',
    'LBL_EMAIL_ERROR_SENDING' => 'შეცდომა გაგზავნის ელ. წერილში. გთხოვთ მიმართოთ თქვენს ადმინისტრატორს დახმარებისთვის.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'საქაღალდეები',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'დამატება',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'ახალი საქაღალდის დამატება',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'საქაღალდის გადარქმევა',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'შენახვა',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'დაამატეთ ეს ფოლდერი',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'საქაღალდის შეცვლა შეუძლებელია',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'დარწმუნებული ხართ, რომ ამ ფოლდერის წაშლა გსურთ?\nეს პროცესი შეუქცევადია.\nფოლდერის წაშლა გამოწვევს კასკადს ყველა შიგთავსი ფოლდერთათვის.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'ახალი საქაღალდის სახელი',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'ამ მოქმედების შესრულებამდე, გთხოვთ, შეარჩიოთ ფოლდერი.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'ფოლდერის მართვა',

    'LBL_EMAIL_FORWARD' => 'წინ',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[[total]] წერილიდან ჩამოიტვირთა [[count]]',
    'LBL_EMAIL_FROM' => 'ვისგან',
    'LBL_EMAIL_GROUP' => 'ჯგუფი',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'ჯგუფი',
    'LBL_EMAIL_HOME_FOLDER' => 'მთავარი',
    'LBL_EMAIL_IE_DELETE' => 'მიმდინარეობს ელ. ფოსტის ანგარიშის წაშლა',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'მიმდინარეობს ხელმოწერის წაშლა',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'დარწმუნებული ხართ, რომ გინდათ ამ ელ. ფოსტის ანგარიშის წაშლა?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'წარმატებით წაიშალა.',
    'LBL_EMAIL_IE_SAVE' => 'მიმდინარეობს ელ. ფოსტის ინფორმაციის შენახვა',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'ელ. ფოსტის იმპორტირება',
    'LBL_EMAIL_IMPORT_EMAIL' => 'SuiteCRM-ში იმპორტი',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'იმპორტის პარამეტრები',
    'LBL_EMAIL_INVALID' => 'არასწორი',
    'LBL_EMAIL_LOADING' => 'იტვირთება...',
    'LBL_EMAIL_MARK' => 'მონიშვნა',
    'LBL_EMAIL_MARK_FLAGGED' => 'როგორც დროშით მონიშნული',
    'LBL_EMAIL_MARK_READ' => 'როგორც წაკითხული',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'როგორც დროშით მოუნიშნავი',
    'LBL_EMAIL_MARK_UNREAD' => 'როგორც წაუკითხავი',
    'LBL_EMAIL_ASSIGN_TO' => 'დანიშნვა',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'საქაღალდის შექმნა',
    'LBL_EMAIL_MENU_COMPOSE' => 'შედგენა',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'საქაღალდის წაშლა',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'ურნის გასუფთავება',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'სინქრონიზაცია',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'ქეშის ფაილების წაშლა',
    'LBL_EMAIL_MENU_REMOVE' => 'წაშლა',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'საქაღალდის გადარქმევა',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'მიმდინარეობს ფოლდერის გადარქმევა',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Please make a selection before trying this operation.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Create a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Delete a Folder (remote or in SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Empties all Trash folders for your mail accounts',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Mark these email(s) read',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Mark these email(s) unflagged',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Rename a Folder (remote or in SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'messages',

    'LBL_EMAIL_ML_NAME' => 'List Name',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Selected List Addresses',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Available List Addresses',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> to select multiples<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'არა',
    'LBL_EMAIL_NOT_SENT' => 'System is unable to process your request. Please contact the system administrator.',

    'LBL_EMAIL_OK' => 'OK',
    'LBL_EMAIL_ONE_MOMENT' => 'One moment please...',
    'LBL_EMAIL_OPEN_ALL' => 'Open Multiple Messages',
    'LBL_EMAIL_OPTIONS' => 'ოფციები',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Quick Compose',
    'LBL_EMAIL_OPT_OUT' => 'Opted Out',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Opted Out and Invalid',
    'LBL_EMAIL_PERFORMING_TASK' => 'Performing Task',
    'LBL_EMAIL_PRIMARY' => 'Primary',
    'LBL_EMAIL_PRINT' => 'ბეჭდვა',

    'LBL_EMAIL_QC_BUGS' => 'შეცდომა',
    'LBL_EMAIL_QC_CASES' => 'შემთხვევა',
    'LBL_EMAIL_QC_LEADS' => 'მოსამზადებელი პროცესი',
    'LBL_EMAIL_QC_CONTACTS' => 'კონტაქტი',
    'LBL_EMAIL_QC_TASKS' => 'დავალება',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'შესაძლებლობა',
    'LBL_EMAIL_QUICK_CREATE' => 'სწრაფი შექმნა',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Rebuilding Folders',
    'LBL_EMAIL_RELATE_TO' => 'Relate',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'View Relationships',
    'LBL_EMAIL_RECORD' => 'Email Record',
    'LBL_EMAIL_REMOVE' => 'წაშლა',
    'LBL_EMAIL_REPLY' => 'პასუხი',
    'LBL_EMAIL_REPLY_ALL' => 'უპასუხე ყველას',
    'LBL_EMAIL_REPLY_TO' => 'Reply-to',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Retrieving Message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Retrieving Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Please select only one email record',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Return to Previous Module?',
    'LBL_EMAIL_REVERT' => 'Revert',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE' => 'Rule Management',

    'LBL_EMAIL_SAVE' => 'შენახვა',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'შენახვა და პასუხი',
    'LBL_EMAIL_SAVE_DRAFT' => 'დრაფტის შენახვა',
    'LBL_EMAIL_DRAFT_SAVED' => 'დრაფტი შენახულია',

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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Date From',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Date Until',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'No results match your search criteria.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'ძებნის შედეგები',

    'LBL_EMAIL_SELECT' => 'არჩევა',

    'LBL_EMAIL_SEND' => 'გაგზავნა',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sending Email',

    'LBL_EMAIL_SETTINGS' => 'პარამეტრები',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mail Accounts',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Clear Form',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Check for New Mail',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'From Address',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Email Address For Test Notification:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'From Name',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Reply to Address',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchronize All Mail Accounts',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'An email was sent to the specified email address using the provided outgoing mail settings. Please check to see if the email was received to verify the settings are correct.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'See full SMTP Log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Perform a full synchronization?\nLarge mail accounts may take a few minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Click the Shift key or the Ctrl key to select multiple folders.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'ძირითადი',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Create Group Folders',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Edit Group Folder',

    'LBL_EMAIL_SETTINGS_NAME' => 'Mail Account Name',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Select the number of emails per page in the Inbox. This setting might require a page refresh in order to take effect.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Retrieving Mail Account',
    'LBL_EMAIL_SETTINGS_SAVED' => 'The settings have been saved.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Send Plain Text Emails Only',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Emails per Page',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Visual Settings',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Preferences',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Available User Folders',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'The outbound mail server selected for the mail account you are using is invalid. Check the settings or select a different mail server for the mail account.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'An outgoing mail server is not configured to send emails. Please configure an outgoing mail server or select an outgoing mail server for the mail account that you are using in Settings >> Mail Account.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Default Signature',
    'LBL_EMAIL_SIGNATURES' => 'Signatures',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'სხვა',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Remote Folders ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[ SuiteCRM Folders ]',
    'LBL_EMAIL_SUBJECT' => 'თემა',
    'LBL_EMAIL_SUCCESS' => 'წარმატება',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM Folder',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Email template body is empty',
    'LBL_EMAIL_TEMPLATES' => 'Templates',
    'LBL_EMAIL_TO' => 'To',
    'LBL_EMAIL_VIEW' => 'ჩვენება',
    'LBL_EMAIL_VIEW_HEADERS' => 'Display Headers',
    'LBL_EMAIL_VIEW_RAW' => 'Display Raw Email',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'This feature is unsupported when used with POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Default link text.',
    'LBL_EMAIL_YES' => 'დიახ',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Send Test Email',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'Test Email Sent',
    'LBL_EMAIL_MESSAGE_NO' => 'Message No',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import Passed',
    'LBL_EMAIL_IMPORT_FAIL' => 'Import Failed because either the message is already imported or deleted from server',

    'LBL_LINK_NONE' => 'არცერთი',
    'LBL_LINK_ALL' => 'ყველა',
    'LBL_LINK_RECORDS' => 'ჩანაწერები',
    'LBL_LINK_SELECT' => 'არჩევა',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirm',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Do you want to close this #module#?',
    'LBL_INVALID_FILE_EXTENSION' => 'Invalid File Extension',

    'ERR_AJAX_LOAD' => 'An error has occurred:',
    'ERR_AJAX_LOAD_FAILURE' => 'There was an error processing your request, please try again at a later time.',
    'ERR_AJAX_LOAD_FOOTER' => 'If this error persists, please have your administrator disable Ajax for this module',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'The decimal separator cannot use the same character as the thousands separator.\\n\\n  Please change the values.',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the contact.',
    'ERR_EXPORT_DISABLED' => 'Exports Disabled.',
    'ERR_EXPORT_TYPE' => 'Error exporting ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'not a valid email address.',
    'ERR_INVALID_FILE_REFERENCE' => 'Invalid File Reference',
    'ERR_NO_HEADER_ID' => 'This feature is unavailable in this theme.',
    'ERR_NOT_ADMIN' => 'Unauthorized access to administration.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Missing required field:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Invalid required field:',
    'ERR_INVALID_VALUE' => 'Invalid Value:',
    'ERR_NO_SUCH_FILE' => 'File does not exist on system',
    'ERR_NO_SINGLE_QUOTE' => 'Cannot use the single quotation mark for ',
    'ERR_NOTHING_SELECTED' => 'Please make a selection before proceeding.',
    'ERR_SELF_REPORTING' => 'User cannot report to him or herself.',
    'ERR_SQS_NO_MATCH_FIELD' => 'No match for field: ',
    'ERR_SQS_NO_MATCH' => 'არ არის დამთხვევა',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Please specify \'key\' index in displayParams attribute for the Meta-Data definition',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Error: The Portal Name is already assigned to another contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'Field value is not compatible with precision value',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'An error occurred when trying to save to the external account.',
    'ERR_NO_DB' => 'Could not connect to the database. Please refer to suitecrm.log for details (0).',
    'ERR_DB_FAIL' => 'Database failure. Please refer to suitecrm.log for details.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} Files May Only Be Used With A SuiteCRM {1} Database.',

    'LBL_ACCOUNT' => 'ანგარიში',
    'LBL_ACCOUNTS' => 'ანგარიშები',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'აქტივობები',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'View Summary',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'View Summary',
    'LBL_ADD_BUTTON' => 'დამატება',
    'LBL_ADD_DOCUMENT' => 'დოკუმენტის დამატება',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Add To Target List',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Add Contacts To Target List',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'ჩასახურად დააწექით',
    'LBL_ADDITIONAL_DETAILS' => 'Additional Details',
    'LBL_ADMIN' => 'ადმინი',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'დაარქივება',
    'LBL_ASSIGNED_TO_USER' => 'Assigned to User',
    'LBL_ASSIGNED_TO' => 'Assigned to:',
    'LBL_BACK' => 'უკან',
    'LBL_BILLING_ADDRESS' => 'Billing Address',
    'LBL_QUICK_CREATE' => 'Create ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - Open Source CRM',
    'LBL_BUGS' => 'შეცდომები',
    'LBL_BY' => 'by',
    'LBL_CALLS' => 'ზარები',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Queued Campaign Emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'გაგზავნა',
    'LBL_CASE' => 'შემთხვევა',
    'LBL_CASES' => 'შემთხვევები',
    'LBL_CHANGE_PASSWORD' => 'პაროლის შეცვლა',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'ყველას შემოწმება',
    'LBL_CITY' => 'ქალაქი',
    'LBL_CLEAR_BUTTON_LABEL' => 'გასუფთავება',
    'LBL_CLEAR_BUTTON_TITLE' => 'გასუფთავება',
    'LBL_CLEARALL' => 'ყველაფრის გასუფთავება',
    'LBL_CLOSE_BUTTON_TITLE' => 'დახურვა',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'დახურე და შექმენი ახალი',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'დახურე და შექმენი ახალი',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Compose Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Compose Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'დიახ',
    'LBL_SEARCH_DROPDOWN_NO' => 'არა',
    'LBL_CONTACT_LIST' => 'Contact List',
    'LBL_CONTACT' => 'კონტაქტი',
    'LBL_CONTACTS' => 'კონტაქტები',
    'LBL_CONTRACT' => 'კონტრაქტი',
    'LBL_CONTRACTS' => 'კონტრაქტები',
    'LBL_COUNTRY' => 'ქვეყანა:',
    'LBL_CREATE_BUTTON_LABEL' => 'შექმნა',
    'LBL_CREATED_BY_USER' => 'შექმნილია მომხმარებლის მიერ',
    'LBL_CREATED_USER' => 'შექმნილია მომხმარებლის მიერ',
    'LBL_CREATED' => 'ავტორი',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'ვალუტა:',
    'LBL_DOCUMENTS' => 'დოკუმენტები',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date Modified:',
    'LBL_EDIT_BUTTON' => 'რედაქტირება',
    'LBL_DUPLICATE_BUTTON' => 'დუბლირება',
    'LBL_DELETE_BUTTON' => 'წაშლა',
    'LBL_DELETE' => 'წაშლა',
    'LBL_DELETED' => 'წაშლილია',
    'LBL_DIRECT_REPORTS' => 'Direct Reports',
    'LBL_DONE_BUTTON_LABEL' => 'დასრულდა',
    'LBL_DONE_BUTTON_TITLE' => 'დასრულდა',
    'LBL_FAVORITES' => 'ფავორიტები',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Please select a vCard file',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Import vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Import vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import vCard',
    'LBL_VIEW_BUTTON' => 'ჩვენება',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email as PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email as PDF',
    'LBL_EMAILS' => 'მეილები',
    'LBL_EMPLOYEES' => 'თანამშრომლები',
    'LBL_ENTER_DATE' => 'Enter Date',
    'LBL_EXPORT' => 'ექსპორტი',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'გადასვლა',
    'LBL_HIDE' => 'დამალვა',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Import',
    'LBL_IMPORT_STARTED' => 'Import Started: ',
    'LBL_LAST_VIEWED' => 'Recently Viewed',
    'LBL_LEADS' => 'მოსამზადებელი პროცესი',
    'LBL_LESS' => 'less',
    'LBL_CAMPAIGN' => 'კამპანია:',
    'LBL_CAMPAIGNS' => 'კამპანიები',
    'LBL_CAMPAIGNLOG' => 'კამპანიის ჟურნალი',
    'LBL_CAMPAIGN_CONTACT' => 'კამპანიები',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'არცერთი',
    'LBL_THEME' => 'Theme:',
    'LBL_FOUND_IN_RELEASE' => 'Found In Release',
    'LBL_FIXED_IN_RELEASE' => 'Fixed In Release',
    'LBL_LIST_ACCOUNT_NAME' => 'ანგარიშის სახელი',
    'LBL_LIST_ASSIGNED_USER' => 'მომხმარებელი',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_CONTACT_ROLE' => 'Contact Role',
    'LBL_LIST_DATE_ENTERED' => 'Date Created',
    'LBL_LIST_EMAIL' => 'ელ-ფოსტა',
    'LBL_LIST_NAME' => 'სახელი',
    'LBL_LIST_OF' => 'of',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_USER_NAME' => 'User Name',
    'LBL_LISTVIEW_NO_SELECTED' => 'Please select at least 1 record to proceed.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Please select at least 2 records to proceed.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Selected Records',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Selected: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'David',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'დოქტორი.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_CANCEL' => 'Cancel',
    'LBL_VERIFY' => 'Verify',
    'LBL_RESEND' => 'Resend',
    'LBL_PROFILE' => 'Profile',
    'LBL_MAILMERGE' => 'ფოსტის შერწყმა',
    'LBL_MASS_UPDATE' => 'Mass Update',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'There are no fields available for the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Primary Email',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt in Primary Email',
    'LBL_MEETINGS' => 'შეხვედრები',
    'LBL_MEETING_GO_BACK' => 'Go back to the meeting',
    'LBL_MEMBERS' => 'Members',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_MODIFIED_BY_USER' => 'Modified by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_MODIFIED' => 'Modified by',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_MORE' => 'More',
    'LBL_MY_ACCOUNT' => 'ჩემი პარამეტრები',
    'LBL_NAME' => 'სახელი',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'შექმნა',
    'LBL_NEW_BUTTON_TITLE' => 'შექმნა',
    'LBL_NEXT_BUTTON_LABEL' => 'შემდეგი',
    'LBL_NONE' => '--არ არსებობს--',
    'LBL_NOTES' => 'შენიშვნები',
    'LBL_OPPORTUNITIES' => 'შესაძლებლობები',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_OPPORTUNITY' => 'შესაძლებლობა',
    'LBL_OR' => 'OR',
    'LBL_PANEL_OVERVIEW' => 'OVERVIEW',
    'LBL_PANEL_ASSIGNMENT' => 'სხვა',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Primary Address Street 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Primary Address Street 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Products',
    'LBL_PROJECT_TASKS' => 'პროექტის ამოცანები',
    'LBL_PROJECTS' => 'პროექტები',
    'LBL_QUOTES' => 'ქვოტა',

    'LBL_RELATED' => 'Related',
    'LBL_RELATED_RECORDS' => 'Related Records',
    'LBL_REMOVE' => 'წაშლა',
    'LBL_REPORTS_TO' => 'Reports To',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indicates required field',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'დასრულდა',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Full Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Full Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'შეინახე და შქმენი ახალი',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'შეინახე და შქმენი ახალი',
    'LBL_SAVE_OBJECT' => 'Save {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'ძიება',
    'LBL_SEARCH_BUTTON_TITLE' => 'ძიება',
    'LBL_FILTER' => 'ფილტრი',
    'LBL_SEARCH' => 'ძიება',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'მეტი',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Invalid file format, only image file can be uploaded.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'არჩევა',
    'LBL_SELECT_BUTTON_TITLE' => 'არჩევა',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Browse Documents',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'აირჩიეთ კონტაქტი',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'აირჩიეთ კონტაქტი',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'SELECT FROM Reports',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Select Reports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'აირჩიეთ მომხმარებელი',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'აირჩიეთ მომხმარებელი',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Select File',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Select File',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'აირჩიეთ მომხმარებელი',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'აირჩიეთ მომხმარებელი',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'მომხმარებლის წაშლა',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'მომხმარებლის წაშლა',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Select Account',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Select Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Clear Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Clear Account',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Select Campaign',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Select Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Clear Campaign',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Clear Campaign',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'აირჩიეთ კონტაქტი',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'აირჩიეთ კონტაქტი',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Resources used to construct this page (queries, files)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'seconds.',
    'LBL_SERVER_RESPONSE_TIME' => 'Server response time:',
    'LBL_SERVER_MEMORY_BYTES' => 'bytes',
    'LBL_SERVER_MEMORY_USAGE' => 'Server Memory Usage: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Usage: - module: {0} - action: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Server Peak Memory Usage: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address',
    'LBL_SHOW' => 'ჩვენება',
    'LBL_STATE' => 'შტატი:',
    'LBL_STATUS_UPDATED' => 'Your Status for this event has been updated!',
    'LBL_STATUS' => 'სტატუსი:',
    'LBL_STREET' => 'ქუჩა',
    'LBL_SUBJECT' => 'თემა',

    'LBL_INBOUNDEMAIL_ID' => 'Inbound Email ID',

    'LBL_SCENARIO_SALES' => 'გაყიდვები',
    'LBL_SCENARIO_MARKETING' => 'მარკეტინგი',
    'LBL_SCENARIO_FINANCE' => 'ფინანსები',
    'LBL_SCENARIO_SERVICE' => 'სერვისი',
    'LBL_SCENARIO_PROJECT' => 'პროექტ მენეჯერი',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'სინქრონიზაცია',
    'LBL_TABGROUP_ALL' => 'ყველა',
    'LBL_TABGROUP_ACTIVITIES' => 'აქტივობები',
    'LBL_TABGROUP_COLLABORATION' => 'თანამშრომლობა',
    'LBL_TABGROUP_MARKETING' => 'მარკეტინგი',
    'LBL_TABGROUP_OTHER' => 'სხვა',
    'LBL_TABGROUP_SALES' => 'გაყიდვები',
    'LBL_TABGROUP_SUPPORT' => 'მხარდაჭერა',
    'LBL_TASKS' => 'დავალებები',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archive Email',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archive Email',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Undelete',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Undelete',
    'LBL_UNDELETE_BUTTON' => 'Undelete',
    'LBL_UNDELETE' => 'Undelete',
    'LBL_UNSYNC' => 'Unsync',
    'LBL_UPDATE' => 'Update',
    'LBL_USER_LIST' => 'User List',
    'LBL_USERS' => 'მომხმარებლები',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME' => 'Checking for existing portal name...',
    'LBL_VIEW_IMAGE' => 'view',

    'LNK_ABOUT' => 'About',
    'LNK_ADVANCED_FILTER' => 'Advanced Filter',
    'LNK_BASIC_FILTER' => 'სწარფი ფილტრი',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_QUICK_FILTER' => 'სწარფი ფილტრი',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'მთლიანად ჩვენება',
    'LNK_CLOSE' => 'დახურვა',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modify current filter',
    'LNK_SAVED_VIEWS' => 'Layout Options',
    'LNK_DELETE' => 'წაშლა',
    'LNK_EDIT' => 'რედაქტირება',
    'LNK_GET_LATEST' => 'Get latest',
    'LNK_GET_LATEST_TOOLTIP' => 'Replace with latest version',
    'LNK_HELP' => 'დახმარება',
    'LNK_CREATE' => 'შექმნა',
    'LNK_LIST_END' => 'დასასრული',
    'LNK_LIST_NEXT' => 'შემდეგი',
    'LNK_LIST_PREVIOUS' => 'წინა',
    'LNK_LIST_RETURN' => 'Return to List',
    'LNK_LIST_START' => 'დაწყება',
    'LNK_LOAD_SIGNED' => 'Sign',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Replace with signed document',
    'LNK_PRINT' => 'ბეჭდვა',
    'LNK_BACKTOTOP' => 'Back to top',
    'LNK_REMOVE' => 'წაშლა',
    'LNK_RESUME' => 'გაგრძელება',
    'LNK_VIEW_CHANGE_LOG' => 'View Change Log',

    'NTC_CLICK_BACK' => 'Please click the browser back button and fix the error.',
    'NTC_DATE_FORMAT' => '(yyyy-mm-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Are you sure you want to delete selected record(s)?',
    'NTC_TEMPLATE_IS_USED' => 'The template is used in at least one email marketing record. Are you sure you want to delete it?',
    'NTC_TEMPLATES_IS_USED' => 'The following templates are used in email marketing records. Are you sure you want to delete them?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Are you sure you want to delete the ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Are you sure you want to update the ',
    'NTC_DELETE_SELECTED_RECORDS' => ' selected record(s)?',
    'NTC_LOGIN_MESSAGE' => 'Please enter your user name and password.',
    'NTC_NO_ITEMS_DISPLAY' => 'არცერთი',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this relationship? Only the relationship will be removed. The record will not be deleted.',
    'NTC_REQUIRED' => 'Indicates required field',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'მოგესალმებით',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'You are about to leave this record without saving any changes you may have made to the record. Are you sure you want to navigate away from this record?',
    'ERROR_NO_RECORD' => 'Error retrieving record. This record may be deleted or you may not be authorized to view it.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Warning:</b> Your browser is in IE compatibility view which is not supported.',
    'ERROR_TYPE_NOT_VALID' => 'Error. This type is not valid.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'იპოვე დუბლიკატები',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Manage Subscriptions',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Manage Subscriptions for ',
    // Ajax status strings
    'LBL_LOADING' => 'იტვირთება...',
    'LBL_SEARCHING' => 'მიმდინარეობს ძებნა...',
    'LBL_SAVING_LAYOUT' => 'Saving Layout...',
    'LBL_SAVED_LAYOUT' => 'Layout has been saved.',
    'LBL_SAVED' => 'Saved',
    'LBL_SAVING' => 'Saving',
    'LBL_DISPLAY_COLUMNS' => 'Display Columns',
    'LBL_HIDE_COLUMNS' => 'Hide Columns',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST' => 'Processing...',
    'LBL_REQUEST_PROCESSED' => 'დასრულდა',
    'LBL_AJAX_FAILURE' => 'Ajax failure',
    'LBL_MERGE_DUPLICATES' => 'Merge',
    'LBL_SAVED_FILTER_SHORTCUT' => 'ჩემი ფილტრები',
    'LBL_SEARCH_POPULATE_ONLY' => 'Perform a search using the search form above',
    'LBL_DETAILVIEW' => 'Detail View',
    'LBL_LISTVIEW' => 'List View',
    'LBL_EDITVIEW' => 'Edit View',
    'LBL_BILLING_STREET' => 'Street:',
    'LBL_SHIPPING_STREET' => 'Street:',
    'LBL_SEARCHFORM' => 'Search Form',
    'LBL_SAVED_SEARCH_ERROR' => 'Please provide a name for this view.',
    'LBL_DISPLAY_LOG' => 'Display Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'სისტემა',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Your session is about to timeout in 2 minutes. Please save your work.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Your session has timed out.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'შეხვედრა',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'ზარი',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'დრო: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'ადგილსამყოფელი: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'სტატუსი:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Related To: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'ივენთი',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'Event isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'Location isn\'t set.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'Start date isn\'t defined.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'No results found.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'No results found for <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Create <item1> as a new <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'You currently have no records saved. <item2> or <item3> one now.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'ჩემს ფავორიტებში დამატება',
    'LBL_CREATE_CONTACT' => 'კონტაქტის შექმნა',
    'LBL_CREATE_CASE' => 'Create Case',
    'LBL_CREATE_NOTE' => 'Create Note',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SCHEDULE_CALL' => 'Log Call',
    'LBL_SCHEDULE_MEETING' => 'შეხვედრების განრიგი',
    'LBL_CREATE_TASK' => 'Create Task',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Generate Form',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Save Web Form',
    'LBL_AVAILABLE_FIELDS' => 'Available Fields',
    'LBL_FIRST_FORM_COLUMN' => 'First Form Column',
    'LBL_SECOND_FORM_COLUMN' => 'Second Form Column',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Missing required field: Assigned to',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Missing required field: Related campaign',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Submitting this form will create ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Add All Fields',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset all Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Remove All Fields',
    'LBL_NEXT_BTN' => 'შემდეგი',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Only the following supported image type attachments can be embedded: JPG, PNG.',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Changed database context to',
    'ERR_MSSQL_WARNING' => 'გაფრთხილება:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] is missing. Unable to create because no corresponding HTML file was found.',
    'ERR_CANNOT_FIND_MODULE' => 'Error: Module [module] does not exist.',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'ძირითადი',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'ფილტრები',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'სათაური',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'You have reached the maximum number of SuiteCRM Dashlets your administrator has set. Please remove a SuiteCRM Dashlet to add more.',
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Loading page, please wait...',

    'LBL_RELOAD_PAGE' => 'Please <a href="javascript: window.location.reload()">reload the window</a> to use this SuiteCRM Dashlet.',
    'LBL_ADD_DASHLETS' => 'Add Dashlets',
    'LBL_CLOSE_DASHLETS' => 'დახურვა',
    'LBL_OPTIONS' => 'ოფციები',
    'LBL_1_COLUMN' => '1 Column',
    'LBL_2_COLUMN' => '2 Column',
    'LBL_3_COLUMN' => '3 Column',
    'LBL_PAGE_NAME' => 'Page Name',

    'LBL_SEARCH_RESULTS' => 'ძებნის შედეგები',
    'LBL_SEARCH_MODULES' => 'მოდულები',
    'LBL_SEARCH_TOOLS' => 'ინსტრუმენტები',
    'LBL_SEARCH_HELP_TITLE' => 'Search Tips',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'გამოსახულება არ არის',

    'LBL_MODULE' => 'მოდული',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copy address from left:',
    'LBL_SAVE_AND_CONTINUE' => 'Save and Continue',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Multiselect controls</strong></p><ul><li>Click on the values to select an attribute.</li><li>Ctrl-click&nbsp;to&nbsp;select multiple. Mac users use CMD-click.</li><li>To select all values between two attributes,&nbsp; click first value&nbsp;and then shift-click last value.</li></ul><p><strong>Advanced Search & Layout Options</strong><br><br>Using the <b>Saved Search & Layout</b> option, you can save a set of search parameters and/or a custom List View layout in order to quickly obtain the desired search results in the future. You can save an unlimited number of custom searches and layouts. All saved searches appear by name in the Saved Searches list, with the last loaded saved search appearing at the top of the list.<br><br>To customize the List View layout, use the Hide Columns and Display Columns boxes to select which fields to display in the search results. For example, you can view or hide details such as the record name, and assigned user, and assigned team in the search results. To add a column to List View, select the field from the Hide Columns list and use the left arrow to move it to the Display Columns list. To remove a column from List View, select it from the Display Columns list and use the right arrow to move it to the Hide Columns list.<br><br>If you save layout settings, you will be able to load them at any time to view the search results in the custom layout.<br><br>To save and update a search and/or layout:<ol><li>Enter a name for the search results in the <b>Save this search as</b> field and click <b>Save</b>.The name now displays in the Saved Searches list adjacent to the <b>Clear</b> button.</li><li>To view a saved search, select it from the Saved Searches list. The search results are displayed in the List View.</li><li>To update the properties of a saved search, select the saved search from the list, enter the new search criteria and/or layout options in the Advanced Search area, and click <b>Update</b> next to <b>Modify Current Search</b>.</li><li>To delete a saved search, select it in the Saved Searches list, click <b>Delete</b> next to <b>Modify Current Search</b>, and then click <b>OK</b> to confirm the deletion.</li></ol><p><strong>Tips</strong><br><br>By using the % as a wildcard operator you can make your search more broad. For example instead of just searching for results that equal "Apples" you could change your search to "Apples%" which would match all results that start with the word Apples but could contain other characters as well.</p>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Error: Query limit of $limit reached for $module module.',
    'ERROR_NOTIFY_OVERRIDE' => 'Error: ResourceObserver->notify() needs to be overridden.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Error: Unable to create monitor because metadata file is empty or file does not exist.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Error: There is no monitor configured for requested name',
    'ERR_UNDEFINED_METRIC' => 'Error: Unable to set value for undefined metric',
    'ERR_STORE_FILE_MISSING' => 'Error: Unable to find Store implementation file',

    'LBL_MONITOR_ID' => 'Monitor Id',
    'LBL_USER_ID' => 'User Id',
    'LBL_MODULE_NAME' => 'Module Name',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'Date of Last Action',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'is not before',
    'MSG_IS_MORE_THAN' => 'is more than',
    'MSG_SHOULD_BE' => 'should be',
    'MSG_OR_GREATER' => 'or greater',

    'LBL_LIST' => 'List',
    'LBL_CREATE_BUG' => 'Create Bug',

    'LBL_OBJECT_IMAGE' => 'object image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Select Date',

    'LBL_VALIDATE_RANGE' => 'is not within the valid range',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Please choose both a starting and ending date range',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Please choose both starting and ending range entries',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'ყველა',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector. The service may currently be inaccessible or the configuration settings may be invalid. Connector error message: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'სახელი',
    'LBL_COLLECTION_PRIMARY' => 'Primary',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DESCRIPTION' => 'Description',

    'LBL_YESTERDAY' => 'yesterday',
    'LBL_TODAY' => 'today',
    'LBL_TOMORROW' => 'tomorrow',
    'LBL_NEXT_WEEK' => 'next week',
    'LBL_NEXT_MONDAY' => 'next monday',
    'LBL_NEXT_FRIDAY' => 'next friday',
    'LBL_TWO_WEEKS' => 'two weeks',
    'LBL_NEXT_MONTH' => 'next month',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'first day of next month',
    'LBL_THREE_MONTHS' => 'three months',
    'LBL_SIXMONTHS' => 'six months',
    'LBL_NEXT_YEAR' => 'next year',

    //Datetimecombo fields
    'LBL_HOURS' => 'საათი',
    'LBL_MINUTES' => 'წუთები',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Auto-Refresh',

    'LBL_DURATION_DAY' => 'day',
    'LBL_DURATION_HOUR' => 'hour',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'days',
    'LBL_DURATION_HOURS' => 'Duration Hours',
    'LBL_DURATION_MINUTES' => 'Duration Minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choose Month',
    'LBL_ENTER_YEAR' => 'Enter Year',
    'LBL_ENTER_VALID_YEAR' => 'Please enter a valid year',

    //File write error label
    'ERR_FILE_WRITE' => 'Error: Could not write file {0}. Please check system and web server permissions.',
    'ERR_FILE_NOT_FOUND' => 'Error: Could not load file {0}. Please check system and web server permissions.',

    'LBL_AND' => 'And',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Security',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"This is a sample import file which provides an example of the expected contents of a file that is ready for import."
"The file is a comma-delimited .csv file, using double-quotes as the field qualifier."

"The header row is the top-most row in the file and contains the field labels as you would see them in the application."
"These labels are used for mapping the data in the file to the fields in the application."

"Notes: The database names could also be used in the header row. This is useful when you are using phpMyAdmin or another database tool to provide an exported list of data to import."
"The column order is not critical as the import process matches the data to the appropriate fields based on the header row."


"To use this file as a template, do the following:"
"1. Remove the sample rows of data"
"2. Remove the help text that you are reading right now"
"3. Input your own data into the appropriate rows and columns"
"4. Save the file to a known location on your system"
"5. Click on the Import option from the Actions menu in the application and choose the file to upload"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'No Current Notifications',
    'LBL_ALT_SORT_DESC' => 'Sorted Descending',
    'LBL_ALT_SORT_ASC' => 'Sorted Ascending',
    'LBL_ALT_SORT' => 'დახარისხება',
    'LBL_ALT_SHOW_OPTIONS' => 'Show Options',
    'LBL_ALT_HIDE_OPTIONS' => 'Hide Options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Move selected entry to the list on the left',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Move selected entry to the list on the right',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Move selected entry up in the displayed list order',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Move selected entry down in the displayed list order',
    'LBL_ALT_INFO' => 'Information',
    'MSG_DUPLICATE' => 'The {0} record you are about to create might be a duplicate of an {0} record that already exists. {1} records containing similar names are listed below.<br>Click Create {1} to continue creating this new {0}, or select an existing {0} listed below.',
    'MSG_SHOW_DUPLICATES' => 'The {0} record you are about to create might be a duplicate of a {0} record that already exists. {1} records containing similar names are listed below. Click Save to continue creating this new {0}, or click Cancel to return to the module without creating the {0}.',
    'LBL_EMAIL_TITLE' => 'email address',
    'LBL_EMAIL_OPT_TITLE' => 'opted out email address',
    'LBL_EMAIL_INV_TITLE' => 'invalid email address',
    'LBL_EMAIL_PRIM_TITLE' => 'Make Primary Email Address',
    'LBL_SELECT_ALL_TITLE' => 'Select all',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Select this row',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERROR: There was an error during upload. Error code: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERROR: There was an error during upload. Error code: {0} - {1}. The upload_maxsize is {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERROR: There was an error during your upload, please contact an administrator for help.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'Size of Upload ({0} bytes) Exceeded Allowed Maximum: {1} bytes',
    'UPLOAD_REQUEST_ERROR' => 'An error has occurred. Please refresh your page and try again.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'რედაქტირება',
    'LBL_EDIT_BUTTON_TITLE' => 'რედაქტირება',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'დუბლირება',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'დუბლირება',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'წაშლა',
    'LBL_DELETE_BUTTON_TITLE' => 'წაშლა',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'ACTION',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'შენახვა',
    'LBL_SAVE_BUTTON_TITLE' => 'შენახვა',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Cancel',
    'LBL_CANCEL_BUTTON_TITLE' => 'Cancel',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => 'connector array in {0} been defined incorrectly or is empty and could not be used.',
    'ERR_SUHOSIN' => 'Upload stream is blocked by Suhosin, please add &quot;upload&quot; to suhosin.executor.include.whitelist (See suitecrm.log for more information)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Bad response from the server',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Quote',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Sale Price',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manually',
        '5' => 'ყოველ 5 წუთში',
        '15' => 'Every 15 minutes',
        '30' => 'Every 30 minutes',
        '60' => 'Every hour',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'A reminder is empty or incorrect.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Reminder is not set for either a popup or email.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'No invitees for reminder.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choose columns',
    'LBL_COLUMN_CHOOSER' => 'Column Chooser',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Save changes',
    'LBL_DISPLAYED' => 'Displayed',
    'LBL_HIDDEN' => 'Hidden',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'ფილტრი',

    'LBL_CATEGORY' => 'Category',
    'LBL_LIST_CATEGORY' => 'Category',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'Style',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dawn',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Day',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Dusk',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Night',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Noon',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Disregard draft',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'This operation will delete this email, do you want to continue?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Exit compose dialog',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'By leaving the compose dialog all entered information will be lost, do you wish to continue?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Apply an Email Template',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'This operation will override the email Body and Subject fields, do you want to continue?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmed Opt In',
    'LBL_OPT_IN_TITLE' => 'მონაწილეობა',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Confirmed Opt In Date',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Confirmed Opt In Sent Date',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Confirmed Opt In Fail Date',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Opt In Email Template is not configured. Please set up in email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "Primary Group",

    // footer
    'LBL_SUITE_TOP' => 'Back to top',
    'LBL_SUITE_SUPERCHARGED' => 'Supercharged by SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Powered By SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Reset Password',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'Library';
$app_list_strings['moduleList']['EmailAddresses'] = 'ელ. ფოსტის მისამართი';
$app_list_strings['project_priority_default'] = 'საშუალო';
$app_list_strings['project_priority_options'] = array(
    'High' => 'მაღალი',
    'Medium' => 'საშუალო',
    'Low' => 'დაბალი',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consent',
    'contract' => 'კონტრაქტი',
    'legal_obligation' => 'Legal obligation',
    'protection_of_interest' => 'Protection of interest',
    'public_interest' => 'Public interest',
    'legitimate_interest' => 'Legitimate interest',
    'withdrawn' => 'Withdrawn',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Website',
    'phone' => 'Phone',
    'given_to_user' => 'Given to User',
    'email' => 'ელ-ფოსტა',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'საბაზისო ცოდნა';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIA',
    'ALGERIA' => 'ALGERIA',
    'AMERICAN SAMOA' => 'AMERICAN SAMOA',
    'ANDORRA' => 'ANDORRA',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTICA',
    'ANTIGUA' => 'ANTIGUA',
    'ARGENTINA' => 'ARGENTINA',
    'ARMENIA' => 'ARMENIA',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIA',
    'AUSTRIA' => 'AUSTRIA',
    'AZERBAIJAN' => 'AZERBAIJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHRAIN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADOS',
    'BELARUS' => 'BELARUS',
    'BELGIUM' => 'BELGIUM',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BENIN',
    'BERMUDA' => 'BERMUDA',
    'BHUTAN' => 'BHUTAN',
    'BOLIVIA' => 'BOLIVIA',
    'BOSNIA' => 'BOSNIA',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET ISLAND',
    'BRAZIL' => 'BRAZIL',
    'BRITISH ANTARCTICA TERRITORY' => 'BRITISH ANTARCTICA TERRITORY',
    'BRITISH INDIAN OCEAN TERRITORY' => 'BRITISH INDIAN OCEAN TERRITORY',
    'BRITISH VIRGIN ISLANDS' => 'BRITISH VIRGIN ISLANDS',
    'BRITISH WEST INDIES' => 'BRITISH WEST INDIES',
    'BRUNEI' => 'BRUNEI',
    'BULGARIA' => 'BULGARIA',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODIA',
    'CAMEROON' => 'CAMEROON',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'CANAL ZONE',
    'CANARY ISLAND' => 'CANARY ISLAND',
    'CAPE VERDI ISLANDS' => 'CAPE VERDI ISLANDS',
    'CAYMAN ISLANDS' => 'CAYMAN ISLANDS',
    'CHAD' => 'CHAD',
    'CHANNEL ISLAND UK' => 'CHANNEL ISLAND UK',
    'CHILE' => 'CHILE',
    'CHINA' => 'CHINA',
    'CHRISTMAS ISLAND' => 'CHRISTMAS ISLAND',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING) ISLAND',
    'COLOMBIA' => 'COLOMBIA',
    'COMORO ISLANDS' => 'COMORO ISLANDS',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO KINSHASA',
    'COOK ISLANDS' => 'COOK ISLANDS',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIA',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CYPRUS',
    'CZECH REPUBLIC' => 'CZECH REPUBLIC',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DENMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINICA',
    'DOMINICAN REPUBLIC' => 'DOMINICAN REPUBLIC',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ECUADOR',
    'EGYPT' => 'EGYPT',
    'EL SALVADOR' => 'EL SALVADOR',
    'EQUATORIAL GUINEA' => 'EQUATORIAL GUINEA',
    'ESTONIA' => 'ESTONIA',
    'ETHIOPIA' => 'ETHIOPIA',
    'FAEROE ISLANDS' => 'FAEROE ISLANDS',
    'FALKLAND ISLANDS' => 'FALKLAND ISLANDS',
    'FIJI' => 'FIJI',
    'FINLAND' => 'FINLAND',
    'FRANCE' => 'FRANCE',
    'FRENCH GUIANA' => 'FRENCH GUIANA',
    'FRENCH POLYNESIA' => 'FRENCH POLYNESIA',
    'GABON' => 'GABON',
    'GAMBIA' => 'GAMBIA',
    'GEORGIA' => 'GEORGIA',
    'GERMANY' => 'GERMANY',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GREECE',
    'GREENLAND' => 'GREENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINEA',
    'GUYANA' => 'GUYANA',
    'HAITI' => 'HAITI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG KONG',
    'HUNGARY' => 'HUNGARY',
    'ICELAND' => 'ICELAND',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDIA',
    'INDONESIA' => 'INDONESIA',
    'IRAN' => 'IRAN',
    'IRAQ' => 'IRAQ',
    'IRELAND' => 'IRELAND',
    'ISRAEL' => 'ISRAEL',
    'ITALY' => 'ITALY',
    'IVORY COAST' => 'IVORY COAST',
    'JAMAICA' => 'JAMAICA',
    'JAPAN' => 'JAPAN',
    'JORDAN' => 'JORDAN',
    'KAZAKHSTAN' => 'KAZAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'KOREA',
    'KOREA, SOUTH' => 'KOREA, SOUTH',
    'KUWAIT' => 'KUWAIT',
    'KYRGYZSTAN' => 'KYRGYZSTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LATVIA',
    'LEBANON' => 'LEBANON',
    'LEEWARD ISLANDS' => 'LEEWARD ISLANDS',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYA',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITHUANIA',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACEDONIA',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTA',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIA',
    'MAURITIUS' => 'MAURITIUS',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'MEXICO',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIA',
    'MOROCCO' => 'MOROCCO',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'NAMIBIA',
    'NEPAL' => 'NEPAL',
    'NETHERLANDS' => 'NETHERLANDS',
    'NETHERLANDS ANTILLES' => 'NETHERLANDS ANTILLES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'NETHERLANDS ANTILLES NEUTRAL ZONE',
    'NEW CALADONIA' => 'NEW CALADONIA',
    'NEW HEBRIDES' => 'NEW HEBRIDES',
    'NEW ZEALAND' => 'NEW ZEALAND',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGERIA',
    'NORFOLK ISLAND' => 'NORFOLK ISLAND',
    'NORWAY' => 'NORWAY',
    'OMAN' => 'OMAN',
    'OTHER' => 'სხვა',
    'PACIFIC ISLAND' => 'PACIFIC ISLAND',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPUA NEW GUINEA',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PERU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLAND',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'PUERTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'REPUBLIC OF BELARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'REPUBLIC OF SOUTH AFRICA',
    'REUNION' => 'REUNION',
    'ROMANIA' => 'ROMANIA',
    'RUSSIA' => 'RUSSIA',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'RYUKYU ISLANDS',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAN MARINO',
    'SAUDI ARABIA' => 'SAUDI ARABIA',
    'SENEGAL' => 'SENEGAL',
    'SERBIA' => 'SERBIA',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPORE',
    'SLOVAKIA' => 'SLOVAKIA',
    'SLOVENIA' => 'SLOVENIA',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'SOUTH AFRICA',
    'SOUTH YEMEN' => 'SOUTH YEMEN',
    'SPAIN' => 'SPAIN',
    'SPANISH SAHARA' => 'SPANISH SAHARA',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'ST. KITTS AND NEVIS',
    'ST. LUCIA' => 'ST. LUCIA',
    'SUDAN' => 'SUDAN',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'SW AFRICA',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SWEDEN',
    'SWITZERLAND' => 'SWITZERLAND',
    'SYRIA' => 'SYRIA',
    'TAIWAN' => 'TAIWAN',
    'TAJIKISTAN' => 'TAJIKISTAN',
    'TANZANIA' => 'TANZANIA',
    'THAILAND' => 'THAILAND',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINIDAD',
    'TUNISIA' => 'TUNISIA',
    'TURKEY' => 'TURKEY',
    'UGANDA' => 'UGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'UNITED ARAB EMIRATES',
    'UNITED KINGDOM' => 'UNITED KINGDOM',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'US PACIFIC ISLAND',
    'US VIRGIN ISLANDS' => 'US VIRGIN ISLANDS',
    'USA' => 'USA',
    'UZBEKISTAN' => 'UZBEKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'VATICAN CITY',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIETNAM',
    'WAKE ISLAND' => 'WAKE ISLAND',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'WESTERN SAHARA',
    'YEMEN' => 'YEMEN',
    'ZAIRE' => 'ZAIRE',
    'ZAMBIA' => 'ZAMBIA',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taiwan and Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'CP1251 (MS Cyrillic)',
    'CP1252' => 'CP1252 (MS Western European & US)',
    'EUC-CN' => 'EUC-CN (Simplified Chinese GB2312)',
    'EUC-JP' => 'EUC-JP (Unix Japanese)',
    'EUC-KR' => 'EUC-KR (Korean)',
    'EUC-TW' => 'EUC-TW (Taiwanese)',
    'ISO-2022-JP' => 'ISO-2022-JP (Japanese)',
    'ISO-2022-KR' => 'ISO-2022-KR (Korean)',
    'ISO-8859-1' => 'ISO-8859-1 (Western European and US)',
    'ISO-8859-2' => 'ISO-8859-2 (Central and Eastern European)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillic)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabic)',
    'ISO-8859-7' => 'ISO-8859-7 (Greek)',
    'ISO-8859-8' => 'ISO-8859-8 (Hebrew)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (Latin 7)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Cyrillic Russian)',
    'KOI8-U' => 'KOI8-U (Cyrillic Ukranian)',
    'SJIS' => 'SJIS (MS Japanese)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Africa/Algiers',
    'Africa/Luanda' => 'Africa/Luanda',
    'Africa/Porto-Novo' => 'Africa/Porto-Novo',
    'Africa/Gaborone' => 'Africa/Gaborone',
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
    'Africa/Cairo' => 'Africa/Cairo',
    'Africa/Malabo' => 'Africa/Malabo',
    'Africa/Asmera' => 'Africa/Asmera',
    'Africa/Addis_Ababa' => 'Africa/Addis Ababa',
    'Africa/Libreville' => 'Africa/Libreville',
    'Africa/Banjul' => 'Africa/Banjul',
    'Africa/Accra' => 'Africa/Accra',
    'Africa/Conakry' => 'Africa/Conakry',
    'Africa/Bissau' => 'Africa/Bissau',
    'Africa/Nairobi' => 'Africa/Nairobi',
    'Africa/Maseru' => 'Africa/Maseru',
    'Africa/Monrovia' => 'Africa/Monrovia',
    'Africa/Tripoli' => 'Africa/Tripoli',
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
    'Africa/Dakar' => 'Africa/Dakar',
    'Indian/Mahe' => 'Indian/Mahe',
    'Africa/Freetown' => 'Africa/Freetown',
    'Africa/Mogadishu' => 'Africa/Mogadishu',
    'Africa/Johannesburg' => 'Africa/Johannesburg',
    'Africa/Khartoum' => 'Africa/Khartoum',
    'Africa/Mbabane' => 'Africa/Mbabane',
    'Africa/Dar_es_Salaam' => 'Africa/Dar es Salaam',
    'Africa/Lome' => 'Africa/Lome',
    'Africa/Tunis' => 'Africa/Tunis',
    'Africa/Kampala' => 'Africa/Kampala',
    'Africa/Lusaka' => 'Africa/Lusaka',
    'Africa/Harare' => 'Africa/Harare',
    'Antarctica/Casey' => 'Antarctica/Casey',
    'Antarctica/Davis' => 'Antarctica/Davis',
    'Antarctica/Mawson' => 'Antarctica/Mawson',
    'Indian/Kerguelen' => 'Indian/Kerguelen',
    'Antarctica/DumontDUrville' => 'Antarctica/DumontDUrville',
    'Antarctica/Syowa' => 'Antarctica/Syowa',
    'Antarctica/Vostok' => 'Antarctica/Vostok',
    'Antarctica/Rothera' => 'Antarctica/Rothera',
    'Antarctica/Palmer' => 'Antarctica/Palmer',
    'Antarctica/McMurdo' => 'Antarctica/McMurdo',
    'Asia/Kabul' => 'Asia/Kabul',
    'Asia/Yerevan' => 'Asia/Yerevan',
    'Asia/Baku' => 'Asia/Baku',
    'Asia/Bahrain' => 'Asia/Bahrain',
    'Asia/Dhaka' => 'Asia/Dhaka',
    'Asia/Thimphu' => 'Asia/Thimphu',
    'Indian/Chagos' => 'Indian/Chagos',
    'Asia/Brunei' => 'Asia/Brunei',
    'Asia/Rangoon' => 'Asia/Rangoon',
    'Asia/Phnom_Penh' => 'Asia/Phnom Penh',
    'Asia/Beijing' => 'Asia/Beijing',
    'Asia/Harbin' => 'Asia/Harbin',
    'Asia/Shanghai' => 'Asia/Shanghai',
    'Asia/Chongqing' => 'Asia/Chongqing',
    'Asia/Urumqi' => 'Asia/Urumqi',
    'Asia/Kashgar' => 'Asia/Kashgar',
    'Asia/Hong_Kong' => 'Asia/Hong Kong',
    'Asia/Taipei' => 'Asia/Taipei',
    'Asia/Macau' => 'Asia/Macau',
    'Asia/Nicosia' => 'Asia/Nicosia',
    'Asia/Tbilisi' => 'Asia/Tbilisi',
    'Asia/Dili' => 'Asia/Dili',
    'Asia/Calcutta' => 'Asia/Calcutta',
    'Asia/Jakarta' => 'Asia/Jakarta',
    'Asia/Pontianak' => 'Asia/Pontianak',
    'Asia/Makassar' => 'Asia/Makassar',
    'Asia/Jayapura' => 'Asia/Jayapura',
    'Asia/Tehran' => 'Asia/Tehran',
    'Asia/Baghdad' => 'Asia/Baghdad',
    'Asia/Jerusalem' => 'Asia/Jerusalem',
    'Asia/Tokyo' => 'Asia/Tokyo',
    'Asia/Amman' => 'Asia/Amman',
    'Asia/Almaty' => 'Asia/Almaty',
    'Asia/Qyzylorda' => 'Asia/Qyzylorda',
    'Asia/Aqtobe' => 'Asia/Aqtobe',
    'Asia/Aqtau' => 'Asia/Aqtau',
    'Asia/Oral' => 'Asia/Oral',
    'Asia/Bishkek' => 'Asia/Bishkek',
    'Asia/Seoul' => 'Asia/Seoul',
    'Asia/Pyongyang' => 'Asia/Pyongyang',
    'Asia/Kuwait' => 'Asia/Kuwait',
    'Asia/Vientiane' => 'Asia/Vientiane',
    'Asia/Beirut' => 'Asia/Beirut',
    'Asia/Kuala_Lumpur' => 'Asia/Kuala Lumpur',
    'Asia/Kuching' => 'Asia/Kuching',
    'Indian/Maldives' => 'Indian/Maldives',
    'Asia/Hovd' => 'Asia/Hovd',
    'Asia/Ulaanbaatar' => 'Asia/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asia/Choibalsan',
    'Asia/Katmandu' => 'Asia/Katmandu',
    'Asia/Muscat' => 'Asia/Muscat',
    'Asia/Karachi' => 'Asia/Karachi',
    'Asia/Gaza' => 'Asia/Gaza',
    'Asia/Manila' => 'Asia/Manila',
    'Asia/Qatar' => 'Asia/Qatar',
    'Asia/Riyadh' => 'Asia/Riyadh',
    'Asia/Singapore' => 'Asia/Singapore',
    'Asia/Colombo' => 'Asia/Colombo',
    'Asia/Damascus' => 'Asia/Damascus',
    'Asia/Dushanbe' => 'Asia/Dushanbe',
    'Asia/Bangkok' => 'Asia/Bangkok',
    'Asia/Ashgabat' => 'Asia/Ashgabat',
    'Asia/Dubai' => 'Asia/Dubai',
    'Asia/Samarkand' => 'Asia/Samarkand',
    'Asia/Tashkent' => 'Asia/Tashkent',
    'Asia/Saigon' => 'Asia/Saigon',
    'Asia/Aden' => 'Asia/Aden',
    'Australia/Darwin' => 'Australia/Darwin',
    'Australia/Perth' => 'Australia/Perth',
    'Australia/Brisbane' => 'Australia/Brisbane',
    'Australia/Lindeman' => 'Australia/Lindeman',
    'Australia/Adelaide' => 'Australia/Adelaide',
    'Australia/Hobart' => 'Australia/Hobart',
    'Australia/Currie' => 'Australia/Currie',
    'Australia/Melbourne' => 'Australia/Melbourne',
    'Australia/Sydney' => 'Australia/Sydney',
    'Australia/Broken_Hill' => 'Australia/Broken Hill',
    'Indian/Christmas' => 'Indian/Christmas',
    'Pacific/Rarotonga' => 'Pacific/Rarotonga',
    'Indian/Cocos' => 'Indian/Cocos',
    'Pacific/Fiji' => 'Pacific/Fiji',
    'Pacific/Gambier' => 'Pacific/Gambier',
    'Pacific/Marquesas' => 'Pacific/Marquesas',
    'Pacific/Tahiti' => 'Pacific/Tahiti',
    'Pacific/Guam' => 'Pacific/Guam',
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
    'Pacific/Auckland' => 'Pacific/Auckland',
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
    'Europe/London' => 'Europe/London',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirane',
    'Europe/Andorra' => 'Europe/Andorra',
    'Europe/Vienna' => 'Europe/Vienna',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Brussels',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhagen',
    'Atlantic/Faeroe' => 'Atlantic/Faeroe',
    'America/Danmarkshavn' => 'America/Danmarkshavn',
    'America/Scoresbysund' => 'America/Scoresbysund',
    'America/Godthab' => 'America/Godthab',
    'America/Thule' => 'America/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athens',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantic/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malta',
    'Europe/Chisinau' => 'Europe/Chisinau',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Warsaw',
    'Europe/Lisbon' => 'Europe/Lisbon',
    'Atlantic/Azores' => 'Atlantic/Azores',
    'Atlantic/Madeira' => 'Atlantic/Madeira',
    'Europe/Bucharest' => 'Europe/Bucharest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscow',
    'Europe/Samara' => 'Europe/Samara',
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
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Africa/Ceuta',
    'Atlantic/Canary' => 'Atlantic/Canary',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Uzhgorod',
    'Europe/Zaporozhye' => 'Europe/Zaporozhye',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'America/New York',
    'America/Chicago' => 'America/Chicago',
    'America/North_Dakota/Center' => 'America/North Dakota/Center',
    'America/Denver' => 'America/Denver',
    'America/Los_Angeles' => 'America/Los Angeles',
    'America/Juneau' => 'America/Juneau',
    'America/Yakutat' => 'America/Yakutat',
    'America/Anchorage' => 'America/Anchorage',
    'America/Nome' => 'America/Nome',
    'America/Adak' => 'America/Adak',
    'Pacific/Honolulu' => 'Pacific/Honolulu',
    'America/Phoenix' => 'America/Phoenix',
    'America/Boise' => 'America/Boise',
    'America/Indiana/Indianapolis' => 'America/Indiana/Indianapolis',
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
    'America/Cancun' => 'America/Cancun',
    'America/Merida' => 'America/Merida',
    'America/Monterrey' => 'America/Monterrey',
    'America/Mexico_City' => 'America/Mexico City',
    'America/Chihuahua' => 'America/Chihuahua',
    'America/Hermosillo' => 'America/Hermosillo',
    'America/Mazatlan' => 'America/Mazatlan',
    'America/Tijuana' => 'America/Tijuana',
    'America/Anguilla' => 'America/Anguilla',
    'America/Antigua' => 'America/Antigua',
    'America/Nassau' => 'America/Nassau',
    'America/Barbados' => 'America/Barbados',
    'America/Belize' => 'America/Belize',
    'Atlantic/Bermuda' => 'Atlantic/Bermuda',
    'America/Cayman' => 'America/Cayman',
    'America/Costa_Rica' => 'America/Costa Rica',
    'America/Havana' => 'America/Havana',
    'America/Dominica' => 'America/Dominica',
    'America/Santo_Domingo' => 'America/Santo Domingo',
    'America/El_Salvador' => 'America/El Salvador',
    'America/Grenada' => 'America/Grenada',
    'America/Guadeloupe' => 'America/Guadeloupe',
    'America/Guatemala' => 'America/Guatemala',
    'America/Port-au-Prince' => 'America/Port-au-Prince',
    'America/Tegucigalpa' => 'America/Tegucigalpa',
    'America/Jamaica' => 'America/Jamaica',
    'America/Martinique' => 'America/Martinique',
    'America/Montserrat' => 'America/Montserrat',
    'America/Managua' => 'America/Managua',
    'America/Panama' => 'America/Panama',
    'America/Puerto_Rico' => 'America/Puerto_Rico',
    'America/St_Kitts' => 'America/St_Kitts',
    'America/St_Lucia' => 'America/St_Lucia',
    'America/Miquelon' => 'America/Miquelon',
    'America/St_Vincent' => 'America/St. Vincent',
    'America/Grand_Turk' => 'America/Grand Turk',
    'America/Tortola' => 'America/Tortola',
    'America/St_Thomas' => 'America/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'America/Argentina/Buenos Aires',
    'America/Argentina/Cordoba' => 'America/Argentina/Cordoba',
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
    'America/Sao_Paulo' => 'America/Sao Paulo',
    'America/Campo_Grande' => 'America/Campo Grande',
    'America/Cuiaba' => 'America/Cuiaba',
    'America/Porto_Velho' => 'America/Porto_Velho',
    'America/Boa_Vista' => 'America/Boa Vista',
    'America/Manaus' => 'America/Manaus',
    'America/Eirunepe' => 'America/Eirunepe',
    'America/Rio_Branco' => 'America/Rio Branco',
    'America/Santiago' => 'America/Santiago',
    'Pacific/Easter' => 'Pacific/Easter',
    'America/Bogota' => 'America/Bogota',
    'America/Curacao' => 'America/Curacao',
    'America/Guayaquil' => 'America/Guayaquil',
    'Pacific/Galapagos' => 'Pacific/Galapagos',
    'Atlantic/Stanley' => 'Atlantic/Stanley',
    'America/Cayenne' => 'America/Cayenne',
    'America/Guyana' => 'America/Guyana',
    'America/Asuncion' => 'America/Asuncion',
    'America/Lima' => 'America/Lima',
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
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google Contacts',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Request',
    2 => 'Access',
    3 => 'არასწორი',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'კამპანია',
    'email' => 'ელ-ფოსტა',
    'event' => 'ივენთი',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'კამპანია',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'კამპანია',
    'email' => 'ელ-ფოსტა',
    'event' => 'ივენთი',
    'system' => 'სისტემა',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'საბაზისო ცოდნა';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'დრაფტი';
$app_list_strings['aok_status_list']['Expired'] = 'ვადაგასული';
$app_list_strings['aok_status_list']['In_Review'] = 'განხილვაში მყოფი';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Private';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = 'Events';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Locations';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invited';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Not Invited';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'Attended';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'Not Attended';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'დათანხმებულია';
$app_list_strings['fp_event_status_dom']['Declined'] = 'უარყოფილია';
$app_list_strings['fp_event_status_dom']['No Response'] = 'No Response';

$app_strings['LBL_STATUS_EVENT'] = 'Invite Status';
$app_strings['LBL_ACCEPT_STATUS'] = 'Accept Status';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Select This Page';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Select All';
$app_strings['LBL_LISTVIEW_NONE'] = 'Deselect All';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'Index';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Case Events';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Case Updates';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== Please reply above this line ==========';


//aop
$app_list_strings['case_state_default_key'] = 'Open';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Open',
        'Closed' => 'დახურულია',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'ახალი',
        'Open_Assigned' => 'მინიჭებულია',
        'Closed_Closed' => 'დახურულია',
        'Open_Pending Input' => 'შეყვანის მოლოდინი',
        'Closed_Rejected' => 'უარყოფილია',
        'Closed_Duplicate' => 'დუბლირება',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Single user',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'System Default',
    'singleUser' => 'Single User',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy',
    'random' => 'Random',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'შეტყობინებები';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Report Charts';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Fields';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'მეტი ვიდრე';
$app_list_strings['aor_operator_list']['Less_Than'] = 'ნაკლებია';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aor_operator_list']['Contains'] = 'შეიცავს';
$app_list_strings['aor_operator_list']['Starts_With'] = 'იწყება';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Ends With';
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
$app_list_strings['aor_condition_operator_list']['And'] = 'And';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aor_condition_type_list']['Value'] = 'Value';
$app_list_strings['aor_condition_type_list']['Field'] = 'ველი';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'წუთები';
$app_list_strings['aor_date_type_list']['hour'] = 'საათი';
$app_list_strings['aor_date_type_list']['day'] = 'დღე';
$app_list_strings['aor_date_type_list']['week'] = 'კვირა';
$app_list_strings['aor_date_type_list']['month'] = 'თვე';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aor_date_options']['now'] = 'Now';
$app_list_strings['aor_date_options']['field'] = 'This Field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascending';
$app_list_strings['aor_sort_operator']['DESC'] = 'Descending';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Count';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Sum';
$app_list_strings['aor_function_list']['AVG'] = 'Average';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Count';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Bar chart';
$app_list_strings['aor_chart_types']['line'] = 'Line chart';
$app_list_strings['aor_chart_types']['pie'] = 'Pie chart';
$app_list_strings['aor_chart_types']['radar'] = 'Radar chart';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'ყოველთვიურად';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'კვირეულად';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'დღიურად';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'აქტიური';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'არააქტიური';
$app_list_strings['aor_email_type_list']['Email Address'] = 'ელ-ფოსტა';
$app_list_strings['aor_email_type_list']['Specify User'] = 'მომხმარებელი';
$app_list_strings['aor_email_type_list']['Users'] = 'მომხმარებლები';
$app_list_strings['aor_assign_options']['all'] = 'ALL Users';
$app_list_strings['aor_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'Today';
$app_list_strings['date_time_period_list']['yesterday'] = 'Yesterday';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Last Week';
$app_list_strings['date_time_period_list']['last_month'] = 'წინა თვე';
$app_list_strings['date_time_period_list']['this_month'] = 'ეს თვე';
$app_list_strings['date_time_period_list']['this_quarter'] = 'This Quarter';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Last Quarter';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'on the';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'გაფართოებული პარამეტრები';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'Day';
$app_strings['LBL_CRON_MONTH'] = 'Month';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'დღიურად';
$app_strings['LBL_CRON_WEEKLY'] = 'კვირეულად';
$app_strings['LBL_CRON_MONTHLY'] = 'ყოველთვიურად';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'კონტრაქტები';
$app_list_strings['moduleList']['AOS_Invoices'] = 'ინვოისები';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Products';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Line Items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'ქვოტა';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'ანალიტიკოსი';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'კონკურენტი';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'კლიენტი';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'ინტეგრატორი';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'ინვესტორი';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'პარტნიორი';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'პრესა';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'პოტენციური მომხმარებელი';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'გადამყიდველი';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'სხვა';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'დრაფტი';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'მოლაპარაკება';
$app_list_strings['quote_stage_dom']['Delivered'] = 'მიღებულია';
$app_list_strings['quote_stage_dom']['On Hold'] = 'მოლოდინში';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'დადასტურებულია';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Closed Accepted';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'კომპანიისგან უარყოფილი';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Closed Dead';
$app_list_strings['quote_term_dom']['Net 15'] = 'Nett 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'Nett 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Approved';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Not Approved';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'ანალიტიკოსი';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'კონკურენტი';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'კლიენტი';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'ინტეგრატორი';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'ინვესტორი';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'პარტნიორი';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'პრესა';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'პოტენციური მომხმარებელი';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'გადამყიდველი';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'სხვა';
$app_list_strings['invoice_status_dom']['Paid'] = 'Paid';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Unpaid';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Cancelled';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Not Invoiced';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Invoiced';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Laptops';
$app_list_strings['product_category_dom']['Desktops'] = 'Desktops';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Good';
$app_list_strings['product_type_dom']['Service'] = 'სერვისი';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'ქვოტა';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'ინვოისები';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'კონტრაქტები';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'ქვოტა';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'ინვოისები';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'კონტრაქტები';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'ანგარიშები';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'კონტაქტები';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'მოსამზადებელი პროცესი';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'არ დაწყებული';
$app_list_strings['contract_status_list']['In Progress'] = 'პროგრესირებს';
$app_list_strings['contract_status_list']['Signed'] = 'Signed';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Print as PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Please Select a Template';
$app_strings['LBL_NO_TEMPLATE'] = 'ERROR\nNo templates found.\nPlease go to the PDF templates module and create one';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'WorkFlow';
$app_list_strings['moduleList']['AOW_Conditions'] = 'WorkFlow Conditions';
$app_list_strings['moduleList']['AOW_Processed'] = 'Process Audit';
$app_list_strings['moduleList']['AOW_Actions'] = 'WorkFlow Actions';
$app_list_strings['aow_status_list']['Active'] = 'აქტიური';
$app_list_strings['aow_status_list']['Inactive'] = 'არააქტიური';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'მეტი ვიდრე';
$app_list_strings['aow_operator_list']['Less_Than'] = 'ნაკლებია';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'შეიცავს';
$app_list_strings['aow_operator_list']['Starts_With'] = 'იწყება';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Is Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'დასრულება';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'ველოდებით';
$app_list_strings['aow_process_status_list']['Failed'] = 'წარუმატებელია';
$app_list_strings['aow_condition_operator_list']['And'] = 'And';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aow_condition_type_list']['Value'] = 'Value';
$app_list_strings['aow_condition_type_list']['Field'] = 'ველი';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_action_type_list']['Field'] = 'ველი';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'ველი';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'წუთები';
$app_list_strings['aow_date_type_list']['hour'] = 'საათი';
$app_list_strings['aow_date_type_list']['day'] = 'დღე';
$app_list_strings['aow_date_type_list']['week'] = 'კვირა';
$app_list_strings['aow_date_type_list']['month'] = 'თვე';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'Today';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'ელ-ფოსტა';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'მომხმარებელი';
$app_list_strings['aow_email_type_list']['Users'] = 'მომხმარებლები';
$app_list_strings['aow_email_to_list']['to'] = 'To';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'All Records';
$app_list_strings['aow_run_on_list']['New_Records'] = 'New Records';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Modified Records';
$app_list_strings['aow_run_when_list']['Always'] = 'Always';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Only On Save';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Only In The Scheduler';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Project Task Templates';
$app_list_strings['relationship_type_list']['FS'] = 'Finish to Start';
$app_list_strings['relationship_type_list']['SS'] = 'Start to Start';
$app_list_strings['duration_unit_dom']['Days'] = 'დღე';
$app_list_strings['duration_unit_dom']['Hours'] = 'საათი';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'View Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'Create Project';

//gmaps
$app_strings['LBL_MAP'] = 'Map';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode Status';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Address';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Maps';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'Miles';
$app_list_strings['map_unit_type_list']['km'] = 'Kilometers';

$app_list_strings['map_module_type_list']['Accounts'] = 'ანგარიშები';
$app_list_strings['map_module_type_list']['Contacts'] = 'კონტაქტები';
$app_list_strings['map_module_type_list']['Cases'] = 'შემთხვევები';
$app_list_strings['map_module_type_list']['Leads'] = 'მოსამზადებელი პროცესი';
$app_list_strings['map_module_type_list']['Meetings'] = 'შეხვედრები';
$app_list_strings['map_module_type_list']['Opportunities'] = 'შესაძლებლობები';
$app_list_strings['map_module_type_list']['Project'] = 'პროექტები';
$app_list_strings['map_module_type_list']['Prospects'] = 'სამიზნე';

$app_list_strings['map_relate_type_list']['Accounts'] = 'ანგარიში';
$app_list_strings['map_relate_type_list']['Contacts'] = 'კონტაქტი';
$app_list_strings['map_relate_type_list']['Cases'] = 'შემთხვევა';
$app_list_strings['map_relate_type_list']['Leads'] = 'მოსამზადებელი პროცესი';
$app_list_strings['map_relate_type_list']['Meetings'] = 'შეხვედრა';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'შესაძლებლობა';
$app_list_strings['map_relate_type_list']['Project'] = 'პროექტი';
$app_list_strings['map_relate_type_list']['Prospects'] = 'სამიზნე';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'ადმინისტრაცია';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Aircraft Small';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Airplane Tourism';
$app_list_strings['marker_image_list']['airport'] = 'Airport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphitheater';
$app_list_strings['marker_image_list']['apartment'] = 'Apartment';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Bank';
$app_list_strings['marker_image_list']['bank_euro'] = 'Bank Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Bank Pound';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Beach';
$app_list_strings['marker_image_list']['beautiful'] = 'Beautiful';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Bicycle Parking';
$app_list_strings['marker_image_list']['big_city'] = 'Big City';
$app_list_strings['marker_image_list']['bridge'] = 'Bridge';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Bridge Modern';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Cable Car';
$app_list_strings['marker_image_list']['car'] = 'Car';
$app_list_strings['marker_image_list']['car_rental'] = 'Car Rental';
$app_list_strings['marker_image_list']['carrepair'] = 'Carrepair';
$app_list_strings['marker_image_list']['castle'] = 'Castle';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathedral';
$app_list_strings['marker_image_list']['chapel'] = 'Chapel';
$app_list_strings['marker_image_list']['church'] = 'Church';
$app_list_strings['marker_image_list']['city_square'] = 'City Square';
$app_list_strings['marker_image_list']['cluster'] = 'Cluster';
$app_list_strings['marker_image_list']['cluster_2'] = 'Cluster 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Cluster 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Cluster 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Cluster 5';
$app_list_strings['marker_image_list']['coffee'] = 'Coffee';
$app_list_strings['marker_image_list']['community_centre'] = 'Community Centre';
$app_list_strings['marker_image_list']['company'] = 'Company';
$app_list_strings['marker_image_list']['conference'] = 'კონფერენცია';
$app_list_strings['marker_image_list']['construction'] = 'კონსტრუქცია';
$app_list_strings['marker_image_list']['convenience'] = 'Convenience';
$app_list_strings['marker_image_list']['court'] = 'Court';
$app_list_strings['marker_image_list']['cruise'] = 'Cruise';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Currency Exchange';
$app_list_strings['marker_image_list']['customs'] = 'Customs';
$app_list_strings['marker_image_list']['cycling'] = 'Cycling';
$app_list_strings['marker_image_list']['dam'] = 'Dam';
$app_list_strings['marker_image_list']['dentist'] = 'Dentist';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Deptartment Store';
$app_list_strings['marker_image_list']['disability'] = 'Disability';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Disabled Parking';
$app_list_strings['marker_image_list']['doctor'] = 'Doctor';
$app_list_strings['marker_image_list']['dog_leash'] = 'Dog Leash';
$app_list_strings['marker_image_list']['down'] = 'Down';
$app_list_strings['marker_image_list']['down_left'] = 'Down Left';
$app_list_strings['marker_image_list']['down_right'] = 'Down Right';
$app_list_strings['marker_image_list']['down_then_left'] = 'Down Then Left';
$app_list_strings['marker_image_list']['down_then_right'] = 'Down Then Right';
$app_list_strings['marker_image_list']['drugs'] = 'Drugs';
$app_list_strings['marker_image_list']['elevator'] = 'Elevator';
$app_list_strings['marker_image_list']['embassy'] = 'Embassy';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Factory';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Falling Rocks';
$app_list_strings['marker_image_list']['fast_food'] = 'Fast Food';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forest';
$app_list_strings['marker_image_list']['fountain'] = 'Fountain';
$app_list_strings['marker_image_list']['friday'] = 'პარასკევი';
$app_list_strings['marker_image_list']['garden'] = 'Garden';
$app_list_strings['marker_image_list']['gas_station'] = 'Gas Station';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Gifts';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Grocery';
$app_list_strings['marker_image_list']['hairsalon'] = 'Hairsalon';
$app_list_strings['marker_image_list']['helicopter'] = 'Helicopter';
$app_list_strings['marker_image_list']['highway'] = 'Highway';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Historical Quarter';
$app_list_strings['marker_image_list']['home'] = 'მთავარი';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'ინფო';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lake';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'Left';
$app_list_strings['marker_image_list']['left_then_down'] = 'Left Then Down';
$app_list_strings['marker_image_list']['left_then_up'] = 'Left Then Up';
$app_list_strings['marker_image_list']['library'] = 'Library';
$app_list_strings['marker_image_list']['lighthouse'] = 'Lighthouse';
$app_list_strings['marker_image_list']['liquor'] = 'Liquor';
$app_list_strings['marker_image_list']['lock'] = 'Lock';
$app_list_strings['marker_image_list']['main_road'] = 'Main Road';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Mobile Phone Tower';
$app_list_strings['marker_image_list']['modern_tower'] = 'Modern Tower';
$app_list_strings['marker_image_list']['monastery'] = 'Monastery';
$app_list_strings['marker_image_list']['monday'] = 'ორშაბათი';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosque';
$app_list_strings['marker_image_list']['motorcycle'] = 'Motorcycle';
$app_list_strings['marker_image_list']['museum'] = 'Museum';
$app_list_strings['marker_image_list']['music_live'] = 'Music Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Oil Pump Jack';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagoda';
$app_list_strings['marker_image_list']['palace'] = 'Palace';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramic';
$app_list_strings['marker_image_list']['park'] = 'Park';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Park And Ride';
$app_list_strings['marker_image_list']['parking'] = 'Parking';
$app_list_strings['marker_image_list']['photo'] = 'Photo';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Places Unvisited';
$app_list_strings['marker_image_list']['places_visited'] = 'Places Visited';
$app_list_strings['marker_image_list']['playground'] = 'Playground';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Postal';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Power Line Pole';
$app_list_strings['marker_image_list']['power_plant'] = 'Power Plant';
$app_list_strings['marker_image_list']['power_substation'] = 'Power Substation';
$app_list_strings['marker_image_list']['public_art'] = 'Public Art';
$app_list_strings['marker_image_list']['rain'] = 'Rain';
$app_list_strings['marker_image_list']['real_estate'] = 'Real Estate';
$app_list_strings['marker_image_list']['regroup'] = 'Regroup';
$app_list_strings['marker_image_list']['resort'] = 'Resort';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant African';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant Barbecue';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant Buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinese';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant Fish';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant Gourmet';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant Greek';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant Indian';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant Italian';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant Japanese';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Restaurant Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant Korean';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant Mediterranean';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant Mexican';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant Romantic';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant Thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant Turkish';
$app_list_strings['marker_image_list']['right'] = 'Right';
$app_list_strings['marker_image_list']['right_then_down'] = 'Right Then Down';
$app_list_strings['marker_image_list']['right_then_up'] = 'Right Then Up';
$app_list_strings['marker_image_list']['saturday'] = 'შაბათი';
$app_list_strings['marker_image_list']['school'] = 'School';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Shopping Mall';
$app_list_strings['marker_image_list']['shore'] = 'Shore';
$app_list_strings['marker_image_list']['sight'] = 'Sight';
$app_list_strings['marker_image_list']['small_city'] = 'Small City';
$app_list_strings['marker_image_list']['snow'] = 'Snow';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'Speed 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Speed 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Speed 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Speed 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Speed 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Speed 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Speed 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Speed 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Speed 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Speed 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Speed 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Speed 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Speed Hump';
$app_list_strings['marker_image_list']['stadium'] = 'Stadium';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Steam Train';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'Subway';
$app_list_strings['marker_image_list']['sun'] = 'კვ';
$app_list_strings['marker_image_list']['sunday'] = 'კვირა';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarket';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Taxiway';
$app_list_strings['marker_image_list']['teahouse'] = 'Teahouse';
$app_list_strings['marker_image_list']['telephone'] = 'Telephone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindu';
$app_list_strings['marker_image_list']['terrace'] = 'Terrace';
$app_list_strings['marker_image_list']['text'] = 'Text';
$app_list_strings['marker_image_list']['theater'] = 'Theater';
$app_list_strings['marker_image_list']['theme_park'] = 'Theme Park';
$app_list_strings['marker_image_list']['thursday'] = 'ხუთშაბათი';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'სამშაბათი';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Turn Left';
$app_list_strings['marker_image_list']['turn_right'] = 'Turn Right';
$app_list_strings['marker_image_list']['university'] = 'University';
$app_list_strings['marker_image_list']['up'] = 'მაღლა';
$app_list_strings['marker_image_list']['up_left'] = 'მაღლა და მარცხნივ';
$app_list_strings['marker_image_list']['up_right'] = 'მაღლა და მარჯვნივ';
$app_list_strings['marker_image_list']['up_then_left'] = 'Up Then Left';
$app_list_strings['marker_image_list']['up_then_right'] = 'Up Then Right';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'ვიდეო';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'წყალი';
$app_list_strings['marker_image_list']['waterfall'] = 'Waterfall';
$app_list_strings['marker_image_list']['watermill'] = 'Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'ოთხშაბათი';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Wind Turbine';
$app_list_strings['marker_image_list']['windmill'] = 'Windmill';
$app_list_strings['marker_image_list']['winery'] = 'Winery';
$app_list_strings['marker_image_list']['work_office'] = 'Work Office';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'World Heritage Site';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Out of Office';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'In a Meeting';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Please enter the reschedule information';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Date:';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Reason:';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Please select a valid date';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Please select a reason';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Call attempt history';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Call Attempts';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'Security Group';
$app_strings['LBL_ROLE'] = 'Role';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Social Feed Details';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'ფილტრი';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_EDIT_TAB'] = 'Edit Tabs';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Number of Columns:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Are you sure you want to delete the';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'მართვის პანელი?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'დავალებები',
    'Meetings' => 'შეხვედრები',
    'Calls' => 'ზარები',
    'Notes' => 'შენიშვნები',
    'Emails' => 'მეილები'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'გაყიდვები',
    'getAccountsSpotsData' => 'ანგარიშები',
    'getLeadsSpotsData' => 'მოსამზადებელი პროცესი',
    'getServiceSpotsData' => 'სერვისი',
    'getMarketingSpotsData' => 'მარკეტინგი',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'აქტივობები',
    'getQuotesSpotsData' => 'ქვოტა'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Business Hours';
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
$app_list_strings['day_list']['Monday'] = 'ორშაბათი';
$app_list_strings['day_list']['Tuesday'] = 'სამშაბათი';
$app_list_strings['day_list']['Wednesday'] = 'ოთხშაბათი';
$app_list_strings['day_list']['Thursday'] = 'ხუთშაბათი';
$app_list_strings['day_list']['Friday'] = 'პარასკევი';
$app_list_strings['day_list']['Saturday'] = 'შაბათი';
$app_list_strings['day_list']['Sunday'] = 'კვირა';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Portrait';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Landscape';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'დრაფტი';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'დახურულია';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'რადიო';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'მატრიცა';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Date';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'Rating';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Pending Confirm opt in, Confirm opt in not sent';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Pending Confirm opt in, Confirm opt in sent';
$app_strings['LBL_OPT_IN'] = 'Opted in';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Opted Out';
$app_strings['LBL_OPT_IN_INVALID'] = 'არასწორი';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'გამორთულია',
    'opt-in' => 'მონაწილეობა',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'მონაწილეობა',
    'confirmed-opt-in' => 'Confirmed Opt In'
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
    'minute' => 'minutes',
    'hour' => 'hours',
    'day' => 'days',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personal',
    'shared' => 'Shared',
    'group' => 'ჯგუფი',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Connected',
    'failed' => 'წარუმატებელია',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'პროგრესირებს',
    'success' => 'წარმატება',
    'warning' => 'Warning',
    'error' => 'Error',
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
$app_strings['LBL_CLICK_HERE'] = 'დააჭირე აქ';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'ძიება';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'ძიება';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'ძიება';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'წინა';
$app_strings['LBL_SEARCH_NEXT'] = 'შემდეგი';
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

$app_strings['LBL_KEY'] = 'Key';
$app_strings['LBL_VALUE'] = 'Value';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = 'Signature';

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
