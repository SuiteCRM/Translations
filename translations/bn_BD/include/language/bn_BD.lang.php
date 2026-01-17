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
    'language_pack_name' => 'বাংলা - Bengali (Bangladesh) - bn_BD',
    'moduleList' => array(
        'Home' => 'মূল পাতা',
        'ResourceCalendar' => 'সম্পদ ক্যালেন্ডার',
        'Contacts' => 'যোগাযোগ',
        'Accounts' => 'অ্যাকাউন্ট',
        'Alerts' => 'সতর্কতা',
        'Opportunities' => 'সুযোগ',
        'Cases' => 'মামলার',
        'Notes' => 'নোট',
        'Calls' => 'ডাক',
        'TemplateSectionLine' => 'টেমপ্লেট শাখা লাইন',
        'Calls_Reschedule' => 'আবার ডাকে',
        'Emails' => 'ই-মেইল',
        'EAPM' => 'EAPM',
        'Meetings' => 'সভা',
        'Tasks' => 'কার্য',
        'Calendar' => 'পাঁজি',
        'Leads' => 'নেতৃত্ব',
        'Currencies' => 'মুদ্রা',
        'Activities' => 'কার্যকলাপসমূহ',
        'Bugs' => 'ত্রুটি',
        'Feeds' => 'আরএসএস',
        'iFrames' => 'আমার সাইট',
        'TimePeriods' => 'সময়কাল',
        'ContractTypes' => 'চুক্তি ধরন',
        'Schedulers' => 'সময়সূচীসমূহ',
        'Project' => 'প্রকল্প',
        'ProjectTask' => 'প্রকল্পের কাজ',
        'Campaigns' => 'অভিযান',
        'CampaignLog' => 'প্রচারণার লগ',
        'Documents' => 'নথি',
        'DocumentRevisions' => 'নথি সংশোধন',
        'Connectors' => 'সংযোজকগুলির',
        'Roles' => 'ভূমিকা',
        'Notifications' => 'বিজ্ঞপ্তিগুলি',
        'Sync' => 'সুসংগত',
        'Users' => 'ব্যবহারকারীরা',
        'Employees' => 'কর্মচারী',
        'Administration' => 'প্রশাসন',
        'ACLRoles' => 'ভূমিকা',
        'InboundEmail' => 'অন্তর্বর্তী ইমেল',
        'Releases' => 'মুক্তি',
        'Prospects' => 'লক্ষ্য',
        'Queues' => 'লাইন',
        'EmailMarketing' => 'ইমেইল - মার্কেটিং',
        'EmailTemplates' => 'ইমেল - টেমপ্লেট',
        'ProspectLists' => 'লক্ষ্য - তালিকা',
        'SavedSearch' => 'সংরক্ষিত অনুসন্ধান',
        'UpgradeWizard' => 'আপগ্রেড উইজার্ড',
        'Trackers' => 'ট্র্যাকার',
        'TrackerSessions' => 'ট্র্যাকার সেশন',
        'TrackerQueries' => 'ট্র্যাকার প্রশ্ন জবাব',
        'FAQ' => 'প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী',
        'Newsletters' => 'সংবাদবাহী পত্র',
        'SugarFeed' => 'স্যুটআরএম ফিড',
        'SugarFavorites' => 'স্যুটআরএম প্রিয়',

        'OAuthKeys' => 'OAuth গ্রাহক কীগুলি',
        'OAuthTokens' => 'OAuth টোকেন',
        'OAuth2Clients' => 'OAuth ক্লায়েন্টদের',
        'OAuth2Tokens' => 'OAuth টোকেন',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'মূল পাতা',
        'Dashboard' => 'ড্যাশবোর্ড',
        'Contacts' => 'যোগাযোগ',
        'Accounts' => 'হিসাব',
        'Opportunities' => 'সুযোগ',
        'Cases' => 'মামলা',
        'Notes' => 'নোট',
        'Calls' => 'ডাক',
        'Emails' => 'ই-মেইল',
        'EmailTemplates' => 'ইমেল টেমপ্লেট',
        'Meetings' => 'সভা',
        'Tasks' => 'কার্য',
        'Calendar' => 'পাঁজি',
        'Leads' => 'নেতৃত্ব',
        'Activities' => 'কার্যকলাপ',
        'Bugs' => 'বাগ',
        'KBDocuments' => 'KBDocument',
        'Feeds' => 'আরএসএস',
        'iFrames' => 'আমার সাইট',
        'TimePeriods' => 'সময় কাল',
        'Project' => 'প্রকল্প',
        'ProjectTask' => 'প্রকল্প টাস্ক',
        'Prospects' => 'লক্ষ্য',
        'Campaigns' => 'অভিযান',
        'Documents' => 'দলিল',
        'Sync' => 'সুসংগত',
        'Users' => 'ব্যবহারকারী',
        'SugarFavorites' => 'স্যুটআরএম প্রিয়',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'হাঁ',
        '2' => 'না',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'বিশ্লেষক',
        'Competitor' => 'প্রতিদ্বন্দ্বী',
        'Customer' => 'গ্রাহক',
        'Integrator' => 'একত্রকারী',
        'Investor' => 'বিনিয়োগকারী',
        'Partner' => 'অংশীদার',
        'Press' => 'প্রেস',
        'Prospect' => 'প্রত্যাশা',
        'Reseller' => 'রিসেলার',
        'Other' => 'অন্যান্য',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'পরিচ্ছদ',
        'Banking' => 'ব্যাংকিং',
        'Biotechnology' => 'বায়োটেকনোলজি',
        'Chemicals' => 'রাসায়নিক পদার্থসমূহ',
        'Communications' => 'যোগাযোগ',
        'Construction' => 'নির্মাণ',
        'Consulting' => 'পরামর্শকারী',
        'Education' => 'শিক্ষা',
        'Electronics' => 'ইলেক্ট্রনিক্স',
        'Energy' => 'শক্তি',
        'Engineering' => 'প্রকৌশল',
        'Entertainment' => 'বিনোদন',
        'Environmental' => 'পরিবেশগত',
        'Finance' => 'মূলধন যোগান',
        'Government' => 'সরকার',
        'Healthcare' => 'স্বাস্থ্যসেবা',
        'Hospitality' => 'আতিথেয়তা',
        'Insurance' => 'বীমা',
        'Machinery' => 'যন্ত্রপাতি',
        'Manufacturing' => 'ম্যানুফ্যাকচারিং',
        'Media' => 'মিডিয়া',
        'Not For Profit' => 'লাভের জন্য নয়',
        'Recreation' => 'চিত্তবিনোদন',
        'Retail' => 'খুচরা',
        'Shipping' => 'পাঠানো',
        'Technology' => 'প্রযুক্তি',
        'Telecommunications' => 'টেলিযোগাযোগ',
        'Transportation' => 'পরিবহন',
        'Utilities' => 'উপযোগিতা',
        'Other' => 'অন্যান্য',
    ),
    'lead_source_default_key' => 'স্বয়ং উত্পন্ন',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'ঠান্ডা কল',
        'Existing Customer' => 'বিদ্যমান ক্রেতা',
        'Self Generated' => 'স্বয়ং উত্পন্ন',
        'Employee' => 'কর্মচারী',
        'Partner' => 'অংশীদার',
        'Public Relations' => 'জনসংযোগ',
        'Direct Mail' => 'সরাসরি চিঠি',
        'Conference' => 'সম্মেলন',
        'Trade Show' => 'বাণিজ্য প্রদর্শনী',
        'Web Site' => 'ওয়েব সাইট',
        'Word of mouth' => 'মুখের কথা',
        'Email' => 'ই-মেইল',
        'Campaign' => 'অভিযান',
        'Other' => 'অন্যান্য',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'বিদ্যমান ব্যবসা',
        'New Business' => 'নতুন ব্যবসা',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'রাজস্ব',
        'Investment' => 'বিনিয়োগ',
        'Expected_Revenue' => 'প্রত্যাশিত রাজস্ব',
        'Budget' => 'বাজেট',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'প্রাথমিক সিদ্ধান্ত মেকার',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'প্রাথমিক সিদ্ধান্ত মেকার',
        'Business Decision Maker' => 'ব্যবসা ডিসিশন মেকার',
        'Business Evaluator' => 'ব্যবসা মূল্যায়নকারী',
        'Technical Decision Maker' => 'প্রযুক্তিগত সিদ্ধান্ত মেকার',
        'Technical Evaluator' => 'কারিগরি মূল্যায়নকারী',
        'Executive Sponsor' => 'নির্বাহী পৃষ্ঠপোষক',
        'Influencer' => 'প্রভাবক',
        'Other' => 'অন্যান্য',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'প্রাথমিক যোগাযোগ',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'প্রাথমিক যোগাযোগ',
        'Alternate Contact' => 'বিকল্প যোগাযোগ',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'নেট 15',
        'Net 30' => 'নেট 30',
    ),
    'sales_stage_default_key' => 'প্রত্যাশা',
    'sales_stage_dom' => array(
        'Prospecting' => 'প্রত্যাশা',
        'Qualification' => 'যোগ্যতা',
        'Needs Analysis' => 'বিশ্লেষণ প্রয়োজন',
        'Value Proposition' => 'মূল্যবান প্রস্তাবনা',
        'Id. Decision Makers' => 'সিদ্ধান্ত লক্ষণ চিহ্নিতকারী',
        'Perception Analysis' => 'ধারণা বিশ্লেষণ',
        'Proposal/Price Quote' => 'প্রস্তাব / মূল্য উদ্ধৃতি',
        'Negotiation/Review' => 'আলোচনার মাধ্যমে স্থির / পর্যালোচনা',
        'Closed Won' => 'বন্ধ বিজয়ী',
        'Closed Lost' => 'বন্ধ লস্ট',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '৩০',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'ডাক',
        'Meeting' => 'সভা',
        'Task' => 'কার্য',
        'Email' => 'ই-মেইল',
        'Note' => 'নোট',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'জনাব.',
        'Ms.' => 'মিস। মিসেস.',
        'Mrs.' => 'শ্রীমতী.',
        'Miss' => 'হারানো',
        'Dr.' => 'ডাঃ.',
        'Prof.' => 'প্রফেসর.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 মিনিট আগে',
        300 => '5 মিনিট আগে',
        600 => '10 মিনিট আগে',
        900 => '১৫ মিনিট আগে',
        1800 => '৩০ মিনিট আগে',
        3600 => '১ ঘন্টা আগে',
        7200 => '২ ঘন্টা আগে',
        10800 => '৩ ঘন্টা আগে',
        18000 => '৫ ঘন্টা আগে',
        86400 => '১ দিন আগে',
    ),

    'task_priority_default' => 'মধ্যম',
    'task_priority_dom' => array(
        'High' => 'উচ্চ',
        'Medium' => 'মধ্যম',
        'Low' => 'কম',
    ),
    'task_status_default' => 'শুরু না',
    'task_status_dom' => array(
        'Not Started' => 'শুরু না',
        'In Progress' => 'চলমান',
        'Completed' => 'সম্পন্ন',
        'Pending Input' => 'মুলতুবি থাকা ইনপুট',
        'Deferred' => 'বিলম্বিত',
    ),
    'meeting_status_default' => 'পরিকল্পিত',
    'meeting_status_dom' => array(
        'Planned' => 'পরিকল্পিত',
        'Held' => 'দখলী',
        'Not Held' => 'অনুষ্ঠিত হয়নি',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'অন্যান্য',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'পরিকল্পিত',
    'call_status_dom' => array(
        'Planned' => 'পরিকল্পিত',
        'Held' => 'দখলী',
        'Not Held' => 'অনুষ্ঠিত হয়নি',
    ),
    'call_direction_default' => 'বিদেশগামী',
    'call_direction_dom' => array(
        'Inbound' => 'ইনবাউন্ড',
        'Outbound' => 'বিদেশগামী',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'নতুন',
        'Assigned' => 'বরাদ্দ',
        'In Process' => 'প্রক্রিয়াধীন',
        'Converted' => 'রূপান্তরিত',
        'Recycled' => 'পুনর্ব্যবহৃত',
        'Dead' => 'মৃত',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'উচ্চ',
        'P2' => 'মধ্যম',
        'P3' => 'কম',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'নিয়মিত ব্যবহারকারী',
        'Administrator' => 'প্রশাসক',
    ),
    'user_status_dom' => array(
        'Active' => 'সক্রিয়',
        'Inactive' => 'নিষ্ক্রিয়',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'ইমেল কোড',
    ),
    'employee_status_dom' => array(
        'Active' => 'সক্রিয়',
        'Terminated' => 'পর্যবসিত',
        'Leave of Absence' => 'অনুপস্থিতির ত্যাগ',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'এমএসএন',
        'Yahoo!' => 'ইয়াহু!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'উচ্চ',
        'Medium' => 'মধ্যম',
        'Low' => 'কম',
    ),
    'project_task_priority_default' => 'মধ্যম',

    'project_task_status_options' => array(
        'Not Started' => 'শুরু না',
        'In Progress' => 'চলমান',
        'Completed' => 'সম্পন্ন',
        'Pending Input' => 'মুলতুবি থাকা ইনপুট',
        'Deferred' => 'বিলম্বিত',
    ),
    'project_task_utilization_options' => array(
        '0' => 'না',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'খসড়া',
        'In Review' => 'পর্যালোচনা',
        'Underway' => 'চলছে',
        'On_Hold' => 'স্হগিত',
        'Completed' => 'সম্পন্ন',
    ),
    'project_status_default' => 'খসড়া',

    'project_duration_units_dom' => array(
        'Days' => 'দিন',
        'Hours' => 'ঘন্টার',
    ),

    'activity_status_type_dom' => array(
        '' => '--None--',
        'active' => 'সক্রিয়',
        'inactive' => 'নিষ্ক্রিয়',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'অ্যাকাউন্ট',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'হিসাব',
        'Opportunities' => 'সুযোগ',
        'Cases' => 'মামলা',
        'Leads' => 'নেতৃত্ব',
        'Contacts' => 'যোগাযোগ', // cn (11/22/2005) added to support Emails

        'Bugs' => 'বাগ',
        'Project' => 'প্রকল্প',

        'Prospects' => 'লক্ষ্য',
        'ProjectTask' => 'প্রকল্প টাস্ক',

        'Tasks' => 'কার্য',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'প্রোডাক্ট',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'হিসাব',
        'Contacts' => 'যোগাযোগ',
        'Opportunities' => 'সুযোগ',
        'Campaigns' => 'অভিযান',
        'Tasks' => 'কার্য',
        'Emails' => 'ই-মেইল',

        'Bugs' => 'বাগ',
        'Project' => 'প্রকল্প',
        'ProjectTask' => 'প্রকল্প টাস্ক',
        'Prospects' => 'লক্ষ্য',
        'Cases' => 'মামলা',
        'Leads' => 'নেতৃত্ব',

        'Meetings' => 'সভা',
        'Calls' => 'ডাক',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'প্রোডাক্ট',
    ),

    'parent_type_display' => array(
        'Accounts' => 'হিসাব',
        'Contacts' => 'যোগাযোগ',
        'Tasks' => 'কার্য',
        'Opportunities' => 'সুযোগ',

        'Bugs' => 'বাগ',
        'Cases' => 'মামলা',
        'Leads' => 'নেতৃত্ব',

        'Project' => 'প্রকল্প',
        'ProjectTask' => 'প্রকল্প টাস্ক',

        'Prospects' => 'লক্ষ্য',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'প্রোডাক্ট',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'দর',
        'AOS_Invoices' => 'চালান',
        'AOS_Contracts' => 'চুক্তি',
    ),
    'issue_priority_default_key' => 'মধ্যম',
    'issue_priority_dom' => array(
        'Urgent' => 'জরুরী',
        'High' => 'উচ্চ',
        'Medium' => 'মধ্যম',
        'Low' => 'কম',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'গৃহীত',
        'Duplicate' => 'নকল',
        'Closed' => 'বন্ধ',
        'Out of Date' => 'তারিখ আউট',
        'Invalid' => 'অকার্যকর',
    ),

    'issue_status_default_key' => 'নতুন',
    'issue_status_dom' => array(
        'New' => 'নতুন',
        'Assigned' => 'বরাদ্দ',
        'Closed' => 'বন্ধ',
        'Pending' => 'মুলতুবী',
        'Rejected' => 'প্রত্যাখ্যাত',
    ),

    'bug_priority_default_key' => 'মধ্যম',
    'bug_priority_dom' => array(
        'Urgent' => 'জরুরী',
        'High' => 'উচ্চ',
        'Medium' => 'মধ্যম',
        'Low' => 'কম',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'গৃহীত',
        'Duplicate' => 'নকল',
        'Fixed' => 'স্থায়ী',
        'Out of Date' => 'তারিখ আউট',
        'Invalid' => 'অকার্যকর',
        'Later' => 'পরবর্তীতে',
    ),
    'bug_status_default_key' => 'নতুন',
    'bug_status_dom' => array(
        'New' => 'নতুন',
        'Assigned' => 'বরাদ্দ',
        'Closed' => 'বন্ধ',
        'Pending' => 'মুলতুবী',
        'Rejected' => 'প্রত্যাখ্যাত',
    ),
    'bug_type_default_key' => 'বাগ',
    'bug_type_dom' => array(
        'Defect' => 'খুঁত',
        'Feature' => 'বৈশিষ্ট্য',
    ),
    'case_type_dom' => array(
        'Administration' => 'প্রশাসন',
        'Product' => 'প্রোডাক্ট',
        'User' => 'ব্যবহারকারী',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'অভ্যন্তরীণ',
        'Forum' => 'ফোরাম',
        'Web' => 'ওয়েব',
        'InboundEmail' => 'ই-মেইল',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'অ্যাকাউন্ট',
        'Activities' => 'কার্যকলাপসমূহ',
        'Bugs' => 'ত্রুটি',
        'Calendar' => 'পাঁজি',
        'Calls' => 'ডাক',
        'Campaigns' => 'অভিযান',
        'Cases' => 'মামলার',
        'Contacts' => 'যোগাযোগ',
        'Currencies' => 'মুদ্রা',
        'Dashboard' => 'ড্যাশবোর্ড',
        'Documents' => 'নথি',
        'Emails' => 'ই-মেইল',
        'Feeds' => 'ফিডসের',
        'Forecasts' => 'পূর্বাভাস',
        'Help' => 'সাহায্য করুন',
        'Home' => 'মূল পাতা',
        'Leads' => 'নেতৃত্ব',
        'Meetings' => 'সভা',
        'Notes' => 'নোট',
        'Opportunities' => 'সুযোগ',
        'Outlook Plugin' => 'আউটলুক প্লাগইন',
        'Projects' => 'প্রকল্প',
        'Quotes' => 'দর',
        'Releases' => 'মুক্তি',
        'RSS' => 'আরএসএস',
        'Studio' => 'চিত্রশালা',
        'Upgrade' => 'আপগ্রেড',
        'Users' => 'ব্যবহারকারীরা',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'পরিকল্পনা',
        'Active' => 'সক্রিয়',
        'Inactive' => 'নিষ্ক্রিয়',
        'Complete' => 'সম্পূর্ণ',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'টেলিসেলস',
        'Mail' => 'মেল',
        'Email' => 'ই-মেইল',
        'Print' => 'ছাপা',
        'Web' => 'ওয়েব',
        'Radio' => 'রেডিও',
        'Television' => 'টিভি',
        'NewsLetter' => 'নিউজলেটার',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'সাপ্তাহিক',
        'Monthly' => 'মাসিক',
        'Quarterly' => 'ত্রৈমাসিক',
        'Annually' => 'সালিয়ানা',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP এর',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'জানুয়ারী',
        '2' => 'ফেব্রুয়ারি',
        '3' => 'মার্চ',
        '4' => 'এপ্রিল',
        '5' => 'মে',
        '6' => 'জুন',
        '7' => 'জুলাই',
        '8' => 'অগাস্ট',
        '9' => 'সেপ্টেম্বর',
        '10' => 'অক্টোবর',
        '11' => 'নভেম্বর',
        '12' => 'ডিসেম্বর',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'জানুয়ারী',
        '2' => 'ফেব্রুয়ারী',
        '3' => 'মার্চ',
        '4' => 'এপ্রিল',
        '5' => 'মে',
        '6' => 'জুন',
        '7' => 'জুলাই',
        '8' => 'আগস্ট',
        '9' => 'সেপ্টেম্বর',
        '10' => 'অক্টোবর',
        '11' => 'নভেম্বর',
        '12' => 'ডিসেম্বর',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'রবিবার',
        '2' => 'সোমবার',
        '3' => 'মঙ্গলবার',
        '4' => 'বুধবার',
        '5' => 'বৃহস্পতিবার',
        '6' => 'শুক্রবার',
        '7' => 'শনিবার',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'সূর্য',
        '2' => 'সোমবার',
        '3' => 'মঙ্গলবার',
        '4' => 'বুধবার',
        '5' => 'বৃহস্পতিবার',
        '6' => 'শুক্রবার',
        '7' => 'শনিবার',
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
        'group' => 'গ্রুপ',
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
        'group' => 'গ্রুপ',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personal',
        'group' => 'গ্রুপ',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personal',
        'group' => 'গ্রুপ',
        'system' => 'System',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'সক্রিয়',
        'Inactive' => 'নিষ্ক্রিয়',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'প্রেরিত',
        'archived' => 'সংরক্ষণাগার',
        'draft' => 'খসড়া',
        'inbound' => 'ইনবাউন্ড',
        'campaign' => 'অভিযান',
    ),
    'dom_email_status' => array(
        'archived' => 'সংরক্ষণাগার',
        'closed' => 'বন্ধ',
        'draft' => 'খসড়া মধ্যে',
        'read' => 'পড়া',
        'replied' => 'জবাব দিয়েছে',
        'sent' => 'প্রেরিত',
        'send_error' => 'ত্রুটি পাঠান',
        'unread' => 'অপঠিত',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'সংরক্ষণাগার',
    ),

    'dom_email_server_type' => array(
        '' => '--None--',
        'imap' => 'IMAP এর',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--None--',
        'createcase' => 'কেস তৈরি করুন',
        'bounce' => 'বাউন্ড হ্যান্ডলিং',
    ),
    'dom_email_distribution' => array(
        '' => '--None--',
        'direct' => 'সরাসরি হস্তান্তর',
        'roundRobin' => 'রাউন্ড-রবিন',
        'leastBusy' => 'কম ব্যস্ত',
    ),
    'dom_email_errors' => array(
        1 => 'সরাসরি সন্নিবেশ আইটেম যখন একমাত্র নির্বাচন এক ব্যবহারকারী.',
        2 => 'ডাইরেক্ট অন্বেষণ আইটেম যখন আপনি শুধুমাত্র চেক্ড আইটেম প্রদান করা আবশ্যক.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'হাঁ',
        'bool_false' => 'না',
    ),
    'dom_int_bool' => array(
        1 => 'হাঁ',
        0 => 'না',
    ),
    'dom_switch_bool' => array(
        'on' => 'হাঁ',
        'off' => 'না',
        '' => 'না',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'স্যুটরিং এমএল ক্লায়েন্ট',
        'mailto' => 'বাহ্যিক ইমেল ক্লায়েন্ট',
    ),

    'dom_editor_type' => array(
        'none' => 'সরাসরি এইচটিএমএল',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'বিচিত্র',
    ),

    'dom_email_editor_option' => array(
        '' => 'ডিফল্ট ইমেল ফর্ম্যাট',
        'html' => 'HTML ইমেল',
        'plain' => 'সাধারণ পাঠ্য ইমেল',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'অতীত রান টাইম, চালানো নয়',
        'ready' => 'প্রস্তুত',
        'in progress' => 'চলমান',
        'failed' => 'ব্যর্থ',
        'completed' => 'সম্পন্ন',
        'no curl' => 'রান না: কোন cURL উপলব্ধ',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'সক্রিয়',
        'Inactive' => 'নিষ্ক্রিয়',
    ),

    'scheduler_period_dom' => array(
        'min' => 'মিনিট',
        'hour' => 'ঘন্টার',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'মার্কেটিং',
        'Knowledege Base' => 'জ্ঞানভিত্তিক',
        'Sales' => 'বিক্রয়',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'সংরক্ষণাগার',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'মার্কেটিং জালিয়াতি',
        'Product Brochures' => 'পণ্য ব্রোশিওর',
        'FAQ' => 'প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী',
    ),

    'document_status_dom' => array(
        'Active' => 'সক্রিয়',
        'Draft' => 'খসড়া',
        'FAQ' => 'প্রায়শই জিজ্ঞাসিত প্রশ্নাবলী',
        'Expired' => 'মেয়াদোত্তীর্ণ',
        'Under Review' => 'পর্যালোচনা অধীনে',
        'Pending' => 'মুলতুবী',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'মেইল মার্জ',
        'eula' => 'EULA',
        'nda' => 'এনডিএ',
        'license' => 'লাইসেন্স চুক্তি',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'গ্রহণ করা',
        'decline' => 'পতন',
        'tentative' => 'সম্ভাব্য',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'গৃহীত',
        'decline' => 'অস্বীকার',
        'tentative' => 'সম্ভাব্য',
        'none' => 'না',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '১৫',
        '30' => '৩০',
        '45' => '৪৫',
    ),
    'repeat_type_dom' => array(
        '' => 'না',
        'Daily' => 'দৈনন্দিন',
        'Weekly' => 'সাপ্তাহিক',
        'Monthly' => 'মাসিক',
        'Yearly' => 'বাত্সরিক',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'দিন (গুলি)',
        'Weekly' => 'সপ্তাহ (গুলি)',
        'Monthly' => 'মাস (গুলি)',
        'Yearly' => 'বছর (গুলি)',
    ),

    'duration_dom' => array(
        '' => 'না',
        '900' => '১৫ মিনিট',
        '1800' => '30 minutes',
        '2700' => '45 minutes',
        '3600' => '1 hour',
        '5400' => '1.5 hours',
        '7200' => '2 hours',
        '10800' => '3 hours',
        '21600' => '6 hours',
        '86400' => '1 day',
        '172800' => '2 days',
        '259200' => '3 days',
        '604800' => '1 week',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'ডিফল্ট',
        'seed' => 'Seed',
        'exempt_domain' => 'দমন তালিকা - ডোমেন দ্বারা',
        'exempt_address' => 'দমন তালিকা - ইমেল ঠিকানা দ্বারা',
        'exempt' => 'দমন তালিকা - আইডি দ্বারা',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'সক্রিয়',
        'inactive' => 'নিষ্ক্রিয়',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'বার্তা পাঠানো / চেষ্টা করা হয়েছে',
        'send error' => 'বার্তা পাঠানো, অন্যান্য',
        'invalid email' => 'বার্তা পাঠানো, অবৈধ ইমেল',
        'link' => 'ক্লিক-এর মাধ্যমে লিংক',
        'viewed' => 'দেখা বার্তা',
        'removed' => 'অংশ গ্রহণ না করা',
        'lead' => 'লাউড তৈরি হয়েছে',
        'contact' => 'Contacts Created',
        'blocked' => 'Suppressed by address or domain',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'যোগাযোগ',
        'Users' => 'ব্যবহারকারীরা',
        'Prospects' => 'লক্ষ্য',
        'Leads' => 'নেতৃত্ব',
        'Accounts' => 'অ্যাকাউন্ট',
    ),
    'merge_operators_dom' => array(
        'like' => 'রয়েছে',
        'exact' => 'ঠিক',
        'start' => 'সঙ্গে সঙ্গে শুরু হয়',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'হাঁ',
        'false' => 'না',
        'required' => 'প্রয়োজনীয়',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'অক্ষম',
        1 => 'সক্ষম করা',
        2 => 'ছাঁকনি',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'উচ্চ',
        'medium' => 'মধ্যম',
        'low' => 'কম',
    ),

    'projects_status_options' => array(
        'notstarted' => 'শুরু না',
        'inprogress' => 'চলমান',
        'completed' => 'সম্পন্ন',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'লেজেন্ড প্রসারিত করুন',
        'collapselegend' => 'লেজেন্ড সঙ্কুচিত করুন',
        'clickfordrilldown' => 'ড্রিলডাউন জন্য ক্লিক করুন',
        'detailview' => 'আরো বিস্তারিত...',
        'piechart' => 'পাই চিত্র',
        'groupchart' => 'গ্রুপ চার্ট',
        'stackedchart' => 'স্ট্যাকড চার্ট',
        'barchart' => 'বার চার্ট',
        'horizontalbarchart' => 'অনুভূমিক বার চার্ট',
        'linechart' => 'লাইন চার্ট',
        'noData' => 'ডেটা উপলব্ধ নেই',
        'print' => 'ছাপা',
        'pieWedgeName' => 'বিভাগে',
    ),
    'release_status_dom' => array(
        'Active' => 'সক্রিয়',
        'Inactive' => 'নিষ্ক্রিয়',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL এর',
        '2' => 'TLS এর',
    ),
    'import_enclosure_options' => array(
        '\'' => 'একক উদ্ধৃতি ((&#39;)',
        '"' => 'ডাবল উদ্ধৃতি (&#34;)',
        '' => 'না',
        'other' => 'অন্য:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\ টি',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'অন্য:',
    ),
    'link_target_dom' => array(
        '_blank' => 'নতুন জানালা',
        '_self' => 'একই উইন্ডো',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'স্বয়ংক্রিয়ভাবে রিফ্রেশ করবেন না',
        '30' => 'প্রতি 30 সেকেন্ড',
        '60' => 'প্রতি 1 মিনিট',
        '180' => 'প্রতি 3 মিনিট',
        '300' => 'প্রতি 5 মিনিট',
        '600' => 'প্রতি 10 মিনিট',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'না',
        '30' => 'প্রতি 30 সেকেন্ড',
        '60' => 'প্রতি 1 মিনিট',
        '180' => 'প্রতি 3 মিনিট',
        '300' => 'প্রতি 5 মিনিট',
        '600' => 'প্রতি 10 মিনিট',
    ),
    'date_range_search_dom' => array(
        '=' => 'সমান',
        'not_equal' => 'না',
        'greater_than' => 'পরে',
        'less_than' => 'আগে',
        'last_7_days' => 'শেষ 7 দিন',
        'next_7_days' => 'পরবর্তী 7 দিন',
        'last_30_days' => 'শেষ 30 দিন',
        'next_30_days' => 'পরবর্তী 30 দিন',
        'last_month' => 'গত মাসে',
        'this_month' => 'এই মাস',
        'next_month' => 'পরের মাসে',
        'last_year' => 'গত বছর',
        'this_year' => 'এই বছর',
        'next_year' => 'আগামী বছর',
        'between' => 'এর মধ্যে',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'সমান',
        'not_equal' => 'সমান না',
        'greater_than' => 'অপেক্ষা বৃহত্তর',
        'greater_than_equals' => 'এর চেয়ে বড় বা সমান',
        'less_than' => 'কম তুলনায়',
        'less_than_equals' => 'অপেক্ষাকৃত ছোট বা সমান',
        'between' => 'এর মধ্যে',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'কপি',
        'move' => 'পদক্ষেপ',
        'donothing' => 'কিছু করনা',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'Results',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'Email Code:',
    'LBL_SEND' => 'Send',
    'LBL_LOGOUT' => 'Logout',
    'LBL_TOUR_NEXT' => 'Next',
    'LBL_TOUR_SKIP' => 'Skip',
    'LBL_TOUR_BACK' => 'পিছনে',
    'LBL_TOUR_TAKE_TOUR' => 'Take the tour',
    'LBL_MOREDETAIL' => 'More Detail' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit Inline' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'দৃশ্য' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'ছাঁকনি' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'যোগ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'Add Email Address' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'Hide/Show' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'মুছে ফেলা' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => 'পরিষ্কার' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'vCard' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'অপসারণ' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'Remove Email Address' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Opt Out',
    'LBL_ID_FF_INVALID' => 'Make Invalid',
    'LBL_ADD' => 'যোগ' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'Company logo' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'Connectors Popups',
    'LBL_CLOSEINLINE' => 'ঘনিষ্ঠ',
    'LBL_VIEWINLINE' => 'দৃশ্য',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'ছাপা',
    'LBL_HELP' => 'সাহায্য করুন',
    'LBL_ID_FF_SELECT' => 'নির্বাচন করা',
    'DEFAULT' => 'BASIC',
    'LBL_SORT' => 'Sort',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Enable SMTP over SSL or TLS?',
    'LBL_NO_ACTION' => 'There is no action by that name: %s',
    'LBL_NO_SHORTCUT_MENU' => 'There are no actions available.',
    'LBL_NO_DATA' => 'কোন তথ্য নেই',

    'LBL_ROUTING_FLAGGED' => 'পতাকা সেট',
    'LBL_ROUTING_TO' => 'থেকে',
    'LBL_ROUTING_TO_ADDRESS' => 'সম্বোধন করা',
    'LBL_ROUTING_WITH_TEMPLATE' => 'টেমপ্লেট সঙ্গে',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'এই রেকর্ডে বর্তমানে অফিস ফোন এবং ঠিকানা ক্ষেত্রগুলিতে মান রয়েছে। এই মানগুলি নিম্নে অফিস ফোন ও আপনার নির্বাচিত অ্যাকাউন্টের ঠিকানা মুছে ফেলতে "ওকে" ক্লিক করুন। বর্তমান মান রাখতে, "বাতিল" ক্লিক করুন.',
    'LBL_DROP_HERE' => '[এখানে ড্রপ করুন]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'পূর্বনির্ধারিত Gmail ™ ডিফল্টগুলি',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'নাম',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'আউটগোয়িং মেইল সার্ভার বৈশিষ্ট্যাবলী',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP পাসওয়ার্ড',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP পোর্ট',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP সার্ভার',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP ব্যবহারকারীর নাম',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'ডিফল্ট',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'সতর্কতা: বহির্গামী মেইল অ্যাকাউন্টের জন্য ব্যবহারকারী নাম এবং পাসওয়ার্ড হারিয়েছে.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'আপনার ইমেইল অ্যাকাউন্ট থেকে ইনকামিং ইমেল দেখার জন্য মেল অ্যাকাউন্ট সেট আপ করুন.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'মেল অ্যাকাউন্টগুলিতে বহির্গামী ইমেলের জন্য SMTP মেল সার্ভারের তথ্য সরবরাহ করুন.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'সম্পন্ন',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'পরিষ্কার',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'প্রতি:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'কার্বন কপি:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'ব্লাইন্ড কার্বন কপি:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'To/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'ইমেল ঠিকানা',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'ছাঁকনি',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'নাম',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'কোন ঠিকানা খুঁজে পাওয়া যায় নি',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'সংরক্ষণ করুন এবং অ্যাড্রেস বুক জুড়ুন',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'ইমেল প্রাপক নির্বাচন করুন',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'ঠিকানা বই',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'সতর্কবাণী! আপনি যে বহির্গামী অ্যাকাউন্টটি মুছে ফেলার চেষ্টা করছেন সেটি একটি বিদ্যমান ইনবাউন্ড অ্যাকাউন্টের সাথে সম্পর্কিত। আপনি কি অবিরত রাখতে চান?',
    'LBL_EMAIL_ADDRESSES' => 'ই-মেইল',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'ইমেল ঠিকানা',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Unable to confirm email address',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'সুইটসিআরএম আমদানি করুন',
    'LBL_EMAIL_ASSIGNMENT' => 'নিয়োগ',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'জোড়া',
    'LBL_EMAIL_ATTACHMENT' => 'জোড়া',
    'LBL_EMAIL_ATTACHMENTS' => 'স্থানীয় সিস্টেম থেকে',
    'LBL_EMAIL_ATTACHMENTS2' => 'স্যুটআরএমএম ডকুমেন্টস থেকে',
    'LBL_EMAIL_ATTACHMENTS3' => 'টেমপ্লেট সংযুক্তি',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'ফাইল',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'দলিল',
    'LBL_EMAIL_BCC' => 'বিসিসি',
    'LBL_EMAIL_CANCEL' => 'বাতিল',
    'LBL_EMAIL_CC' => 'সিসি',
    'LBL_EMAIL_CHARSET' => 'অক্ষর সেট',
    'LBL_EMAIL_CHECK' => 'বার্তা দেখো',
    'LBL_EMAIL_CHECKING_NEW' => 'নতুন ইমেইল জন্য চেকিং',
    'LBL_EMAIL_CHECKING_DESC' => 'এক মুহুর্তে দয়া করে... <br> <br> যদি এটি মেল অ্যাকাউন্টের জন্য প্রথম চেক হয় তবে কিছু সময় লাগতে পারে.',
    'LBL_EMAIL_CLOSE' => 'ঘনিষ্ঠ',
    'LBL_EMAIL_COFFEE_BREAK' => 'নতুন ইমেইল জন্য চেকিং <br> <br> বড় মেইল অ্যাকাউন্টে যথেষ্ট পরিমাণ সময় লাগতে পারে.',

    'LBL_EMAIL_COMPOSE' => 'ই-মেইল',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'এই ইমেলের প্রাপক (গুলি) লিখুন দয়া করে.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'এই ইমেলের শাখা ফাঁকা। যেকোন ভাবেই পাঠাও?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'এই ইমেইল কোন বিষয় নেই। যেকোন ভাবেই পাঠাও?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(কোন বিষয় নয়)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'জন্য, সিসি এবং বিসিসি ক্ষেত্রের জন্য বৈধ ইমেইল ঠিকানা লিখুন',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'এই ইমেলটি বাতিল করবেন?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'আপনি কি এই স্বাক্ষরটি মুছে ফেলতে চান?',

    'LBL_EMAIL_SENT_SUCCESS' => 'ইমেইল পাঠানো',

    'LBL_EMAIL_CREATE_NEW' => '- সংরক্ষণ সংরক্ষণ করুন -',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'বহু',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'খালি',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'প্রেরক দ্বারা প্রেরিত তারিখ',
    'LBL_EMAIL_DATE_TODAY' => 'আজ',
    'LBL_EMAIL_DELETE' => 'মুছে ফেলা',
    'LBL_EMAIL_DELETE_CONFIRM' => 'নির্বাচিত বার্তাগুলি মুছবেন?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'ইমেলটি সফলভাবে মোছা হয়েছে.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'বার্তা মুছে ফেলা হচ্ছে',
    'LBL_EMAIL_DETAILS' => 'বিস্তারিত',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'পরিচিতির সাথে কাজ করার সময় শুধুমাত্র প্রাথমিক ঠিকানা ব্যবহার করা হবে.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'ট্র্যাশ খালি করা',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'আউটবাউন্ড সার্ভার মুছে ফেলা হচ্ছে',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'ক্লিয়ারিং ক্যাশে ফাইল',
    'LBL_EMAIL_EMPTY_MSG' => 'প্রদর্শন করতে কোন ইমেল নেই.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'প্রদর্শন করতে কোন ইমেল ঠিকানা নেই.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'ফোল্ডার নামটি অবশ্যই অনন্য এবং খালি নয়। অনুগ্রহপূর্বক আবার চেষ্টা করুন.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'একটি ফোল্ডার মুছে ফেলা যাবে না কোনও ফোল্ডার বা তার সন্তানদের ইমেল বা এটির সাথে যুক্ত একটি মেলবক্স রয়েছে.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'প্রসঙ্গ থেকে অনুমিত ফোল্ডার নির্ধারণ করা যাবে না আবার চেষ্টা কর.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'দয়া করে আপনার সেটিংস চেক করুন.',
    'LBL_EMAIL_ERROR_DESC' => 'ত্রুটি সনাক্ত করা হয়েছে: ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'আপনার কাছে এই এলাকার অ্যাক্সেস নেই। অ্যাক্সেস পাওয়ার জন্য আপনার সাইট প্রশাসকের সাথে যোগাযোগ করুন.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM ফোল্ডার নাম অবশ্যই অনন্য হতে হবে.',
    'LBL_EMAIL_ERROR_EMPTY' => 'অনুগ্রহপূর্বক অনুসন্ধানের জন্য মানদণ্ড প্রবেশ করান.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'একটি ত্রুটি উৎপন্ন হয়েছে',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'বার্তা সার্ভার থেকে সরানো',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'কোনও বার্তা সার্ভার থেকে সরানো হয়েছে বা একটি ভিন্ন ফোল্ডারে সরানো হয়েছে',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'মেইল সার্ভারে সংযোগ ব্যর্থ হয়েছে। আপনার প্রশাসকের সঙ্গে যোগাযোগ করুন',
    'LBL_EMAIL_ERROR_MOVE' => 'সার্ভার এবং / অথবা মেল অ্যাকাউন্টগুলির মধ্যে ইমেল স্থানান্তর এই সময়ে সমর্থিত নয়.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'সরানো ত্রুটি',
    'LBL_EMAIL_ERROR_NAME' => 'একটি নাম প্রয়োজন হয়.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'ঠিকানা থেকে প্রয়োজনীয় প্রয়োজন। একটি বৈধ ইমেইল ঠিকানা লিখুন.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'একটি ফাইল প্রদান করুন.',
    'LBL_EMAIL_ERROR_SERVER' => 'একটি মেইল সার্ভার ঠিকানা প্রয়োজন.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'মেইল অ্যাকাউন্ট সংরক্ষিত নাও হতে পারে.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'মেইল সার্ভারের সাথে যোগাযোগ করার সময় একটি ত্রুটি ঘটেছে.',
    'LBL_EMAIL_ERROR_USER' => 'একটি লগইন নাম প্রয়োজন.',
    'LBL_EMAIL_ERROR_PORT' => 'A mail server port is required.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'A server protocol is required.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Monitored Folder is required.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Trash Folder is required.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'This information is not available',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'No outgoing mail server specified.',
    'LBL_EMAIL_ERROR_SENDING' => 'Error Sending Email. Please contact your administrator for assistance.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
        ) . 'Folders',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage(
        'icon_email_folder',
        'align=absmiddle border=0',
        null,
        null,
        '.gif',
        ''
    ),
    'LBL_EMAIL_FOLDERS_ADD' => 'যোগ',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Add New Folder',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'ফোল্ডার পুনঃনামকরণ করুন',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Save',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Add this folder to',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'This folder cannot be changed',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Are you sure you would like to delete this folder?\nThis process cannot be reversed.\nFolder deletions will cascade to all contained folders.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'New Folder Name',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'এই কর্ম সম্পাদন করার আগে দয়া করে একটি ফোল্ডার নির্বাচন করুন.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'ফোল্ডার ব্যবস্থাপনা',

    'LBL_EMAIL_FORWARD' => 'অগ্রবর্তী',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[[count]] এর [[total]] ডাউনলোড করুন',
    'LBL_EMAIL_FROM' => 'থেকে',
    'LBL_EMAIL_GROUP' => 'গ্রুপ',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'গ্রুপ',
    'LBL_EMAIL_HOME_FOLDER' => 'মূল পাতা',
    'LBL_EMAIL_IE_DELETE' => 'মেল অ্যাকাউন্ট মুছে ফেলা হচ্ছে',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'স্বাক্ষর মুছে ফেলা হচ্ছে',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'আপনি কি এই মেল অ্যাকাউন্টটি মুছে ফেলতে চান?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'অপসারণ সফল.',
    'LBL_EMAIL_IE_SAVE' => 'মেইল অ্যাকাউন্ট তথ্য সংরক্ষণ',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'ইমেল আমদানি হচ্ছে',
    'LBL_EMAIL_IMPORT_EMAIL' => 'স্যুটারএমএমে আমদানি করুন',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'সেটিংস আমদানি করুন',
    'LBL_EMAIL_INVALID' => 'অকার্যকর',
    'LBL_EMAIL_LOADING' => 'লোড হচ্ছে...',
    'LBL_EMAIL_MARK' => 'ছাপ',
    'LBL_EMAIL_MARK_FLAGGED' => 'পতাকাঙ্কিত হিসাবে',
    'LBL_EMAIL_MARK_READ' => 'হিসাবে পড়ুন পড়ুন',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'হিসাবে আলগা করা',
    'LBL_EMAIL_MARK_UNREAD' => 'অপঠিত হিসাবে',
    'LBL_EMAIL_ASSIGN_TO' => 'ধার্য',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'ফোল্ডার তৈরি করুন',
    'LBL_EMAIL_MENU_COMPOSE' => 'কম্পোজ করা',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'ফোল্ডার মুছুন',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'ট্র্যাশ খালি',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'সময়ের সামঁজস্যবিধান করা',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'ক্যাশে ফাইল সাফ করুন',
    'LBL_EMAIL_MENU_REMOVE' => 'অপসারণ',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'ফোল্ডার পুনঃনামকরণ করুন',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'ফোল্ডার পুনঃনামকরণ',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'ফোল্ডার পুনঃনামকরণ.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'একটি ফোল্ডার তৈরি করুন (দূরবর্তী অথবা SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'একটি ফোল্ডার মুছে ফেলুন (দূরবর্তী অথবা SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'আপনার মেল অ্যাকাউন্টগুলির জন্য সমস্ত ট্র্যাশ ফোল্ডারগুলি খালি করে',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'এই ইমেলগুলি চিহ্নিত করুন)',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'এই ইমেলগুলি চিহ্নিত করুন) পতাকাঙ্কিত',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'একটি ফোল্ডার পুনঃনামকরণ করুন (রিমোট বা SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'বার্তা',

    'LBL_EMAIL_ML_NAME' => 'তালিকা নাম',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'নির্বাচিত তালিকা ঠিকানা',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'উপলভ্য তালিকা ঠিকানা',

    'LBL_EMAIL_MULTISELECT' => 'গুণাবলির নির্বাচন করতে <b> Ctrl- ক্লিক করুন </ b> <br /> (ম্যাক ব্যবহারকারীরা <b> সিএমডি-ক্লিক করুন </ b> ব্যবহার করে)',

    'LBL_EMAIL_NO' => 'না',
    'LBL_EMAIL_NOT_SENT' => 'সিস্টেম আপনার অনুরোধ প্রক্রিয়া করতে অক্ষম। সিস্টেম অ্যাডমিনস্ট্রেটরের সঙ্গে যোগাযোগ করুন.',

    'LBL_EMAIL_OK' => 'ঠিক আছে',
    'LBL_EMAIL_ONE_MOMENT' => 'এক মুহুর্ত, দয়া করে...',
    'LBL_EMAIL_OPEN_ALL' => 'একাধিক বার্তা খুলুন',
    'LBL_EMAIL_OPTIONS' => 'বিকল্প',
    'LBL_EMAIL_QUICK_COMPOSE' => 'দ্রুত কম্পোজ',
    'LBL_EMAIL_OPT_OUT' => 'অংশ গ্রহণ না করা',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Opted Out and Invalid',
    'LBL_EMAIL_PERFORMING_TASK' => 'Performing Task',
    'LBL_EMAIL_PRIMARY' => 'Primary',
    'LBL_EMAIL_PRINT' => 'ছাপা',

    'LBL_EMAIL_QC_BUGS' => 'বাগ',
    'LBL_EMAIL_QC_CASES' => 'মামলা',
    'LBL_EMAIL_QC_LEADS' => 'নেতৃত্ব',
    'LBL_EMAIL_QC_CONTACTS' => 'যোগাযোগ',
    'LBL_EMAIL_QC_TASKS' => 'কার্য',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'সুযোগ',
    'LBL_EMAIL_QUICK_CREATE' => 'দ্রুত তৈরি করুন',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Rebuilding Folders',
    'LBL_EMAIL_RELATE_TO' => 'Relate',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'View Relationships',
    'LBL_EMAIL_RECORD' => 'Email Record',
    'LBL_EMAIL_REMOVE' => 'অপসারণ',
    'LBL_EMAIL_REPLY' => 'Reply',
    'LBL_EMAIL_REPLY_ALL' => 'Reply All',
    'LBL_EMAIL_REPLY_TO' => 'Reply-to',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Retrieving Message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Retrieving Email Record',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Please select only one email record',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Return to Previous Module?',
    'LBL_EMAIL_REVERT' => 'Revert',
    'LBL_EMAIL_RELATE_EMAIL' => 'Relate Email',

    'LBL_EMAIL_RULES_TITLE' => 'Rule Management',

    'LBL_EMAIL_SAVE' => 'Save',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Save & Reply',
    'LBL_EMAIL_SAVE_DRAFT' => 'Save Draft',
    'LBL_EMAIL_DRAFT_SAVED' => 'Draft has been saved',

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
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Search Results',

    'LBL_EMAIL_SELECT' => 'নির্বাচন করা',

    'LBL_EMAIL_SEND' => 'Send',
    'LBL_EMAIL_SENDING_EMAIL' => 'Sending Email',

    'LBL_EMAIL_SETTINGS' => 'Settings',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Mail Accounts',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Clear Form',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Check for New Mail',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'ঠিকানা থেকে',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'পরীক্ষার বিজ্ঞপ্তি জন্য ইমেইল ঠিকানা:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'নাম থেকে',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'উত্তর দেওয়ার ঠিকানা',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'সমস্ত মেল অ্যাকাউন্টগুলি সিঙ্ক্রোনাইজ করুন',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'প্রদত্ত আউটগোয়িং মেল সেটিংস ব্যবহার করে একটি নির্দিষ্ট ইমেল ঠিকানাতে একটি ইমেল পাঠানো হয়েছে। সেটিংস সঠিক কিনা তা যাচাই করতে ইমেলটি প্রাপ্তির জন্য দয়া করে তা পরীক্ষা করুন.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'সম্পূর্ণ SMTP লগ দেখুন',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'একটি সম্পূর্ণ সমন্বয় সঞ্চালন? \ এবং বড় মেইল অ্যাকাউন্ট কয়েক মিনিট সময় লাগতে পারে.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'একাধিক ফোল্ডার নির্বাচন করতে Shift কী বা Ctrl কী ক্লিক করুন.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'সাধারণ',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'গ্রুপ ফোল্ডারগুলি তৈরি করুন',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'গ্রুপ ফোল্ডার সম্পাদনা করুন',

    'LBL_EMAIL_SETTINGS_NAME' => 'মেল অ্যাকাউন্টের নাম',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'ইনবক্সে প্রতি পৃষ্ঠায় ইমেল সংখ্যা নির্বাচন করুন। কার্যকর করার জন্য এই সেটিংয়ের জন্য একটি পৃষ্ঠা রিফ্রেশ করার প্রয়োজন হতে পারে.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'মেল অ্যাকাউন্ট উদ্ধার করা হচ্ছে',
    'LBL_EMAIL_SETTINGS_SAVED' => 'সেটিংস সংরক্ষিত হয়েছে.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'শুধুমাত্র পাঠ্য পাঠ্য ইমেল পাঠান',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'প্রতি পৃষ্ঠায় ইমেল',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'ভিসুয়াল সেটিংস',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'পছন্দসমূহ',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'উপলব্ধ ব্যবহারকারী ফোল্ডার',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'আপনি ব্যবহার করছেন মেইল অ্যাকাউন্টের জন্য নির্বাচিত বহির্গামী মেইল সার্ভারটি অবৈধ। সেটিংস পরীক্ষা করুন বা মেইল একাউন্টের জন্য একটি ভিন্ন মেইল সার্ভার নির্বাচন করুন.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'একটি বহির্গামী মেইল সার্ভার ইমেল পাঠাতে কনফিগার করা হয় না। দয়া করে একটি আউটগোয়িং মেইল সার্ভার কনফিগার করুন অথবা মেল অ্যাকাউন্টের জন্য একটি বহির্গামী মেইল সার্ভার নির্বাচন করুন যা আপনি Settings >> Mail Account ব্যবহার করছেন.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'ডিফল্ট স্বাক্ষর',
    'LBL_EMAIL_SIGNATURES' => 'স্বাক্ষর',
    'LBL_SMTPTYPE_GMAIL' => 'জিমেইল',
    'LBL_SMTPTYPE_YAHOO' => 'ইয়াহু মেল',
    'LBL_SMTPTYPE_EXCHANGE' => 'মাইক্রোসফ্ট এক্সচেঞ্জ',
    'LBL_SMTPTYPE_OTHER' => 'অন্যান্য',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[দূরবর্তী ফোল্ডার]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[স্যুটার এমআর ফোল্ডার]',
    'LBL_EMAIL_SUBJECT' => 'বিষয়',
    'LBL_EMAIL_SUCCESS' => 'সাফল্য',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM ফোল্ডার',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'ইমেল টেমপ্লেট শরীর খালি আছে',
    'LBL_EMAIL_TEMPLATES' => 'টেমপ্লেট',
    'LBL_EMAIL_TO' => 'থেকে',
    'LBL_EMAIL_VIEW' => 'দৃশ্য',
    'LBL_EMAIL_VIEW_HEADERS' => 'শিরোনামগুলি প্রদর্শন করুন',
    'LBL_EMAIL_VIEW_RAW' => 'কাঁচা ইমেইল প্রদর্শন করুন',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'POP3 এর সাথে ব্যবহার করা হলে এই বৈশিষ্ট্যটি অসমর্থিত.',
    'LBL_DEFAULT_LINK_TEXT' => 'ডিফল্ট লিঙ্ক পাঠ্য.',
    'LBL_EMAIL_YES' => 'হাঁ',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'ডিফল্ট লিঙ্ক পাঠ্য',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'টেস্ট ইমেল প্রেরিত',
    'LBL_EMAIL_MESSAGE_NO' => 'বার্তা নং.',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'আমদানি পাস',
    'LBL_EMAIL_IMPORT_FAIL' => 'ইম্পোর্ট ব্যর্থ হয়েছে কারণ বার্তাটি ইতিমধ্যেই আমদানি করা হয়েছে বা সার্ভার থেকে মুছে ফেলা হয়েছে',

    'LBL_LINK_NONE' => 'না',
    'LBL_LINK_ALL' => 'সব',
    'LBL_LINK_RECORDS' => 'রেকর্ডস',
    'LBL_LINK_SELECT' => 'নির্বাচন করা',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'নিশ্চিত করা',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'আপনি এই # মডিউল # বন্ধ করতে চান?',
    'LBL_INVALID_FILE_EXTENSION' => 'অবৈধ ফাইল এক্সটেনশন',

    'ERR_AJAX_LOAD' => 'একটি ত্রুটি উৎপন্ন হয়েছে:',
    'ERR_AJAX_LOAD_FAILURE' => 'আপনার অনুরোধ প্রক্রিয়া করার সময় একটি ত্রুটি ছিল, দয়া করে পরে আবার চেষ্টা করুন.',
    'ERR_AJAX_LOAD_FOOTER' => 'এই ত্রুটিটি চলতে থাকলে, আপনার প্রশাসক এই মডিউলটির জন্য অজাককে অক্ষম করে রাখুন',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'দশমিক বিভাজক হাজার হাজার বিভাজক হিসাবে একই অক্ষর ব্যবহার করতে পারবেন না। \\ N \\ n দয়া করে মানগুলি পরিবর্তন করুন.',
    'ERR_DELETE_RECORD' => 'যোগাযোগ মুছে ফেলতে একটি রেকর্ড নম্বর নির্দিষ্ট করা আবশ্যক.',
    'ERR_EXPORT_DISABLED' => 'রপ্তানি নিষ্ক্রিয়.',
    'ERR_EXPORT_TYPE' => 'এক্সপোর্ট করার সময় ত্রুটি ',
    'ERR_INVALID_EMAIL_ADDRESS' => 'একটি বৈধ ইমেল ঠিকানা নয়.',
    'ERR_INVALID_FILE_REFERENCE' => 'অবৈধ ফাইল রেফারেন্স',
    'ERR_NO_HEADER_ID' => 'এই থিমটি এই থিমটিতে অনুপলব্ধ.',
    'ERR_NOT_ADMIN' => 'প্রশাসনের অননুমোদিত অ্যাক্সেস.',
    'ERR_MISSING_REQUIRED_FIELDS' => 'প্রয়োজনীয় ক্ষেত্র অনুপস্থিত:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'প্রয়োজনীয় ক্ষেত্র অবৈধ:',
    'ERR_INVALID_VALUE' => 'অবৈধ মান:',
    'ERR_NO_SUCH_FILE' => 'ফাইল সিস্টেমে বিদ্যমান নেই',
    'ERR_NO_SINGLE_QUOTE' => 'জন্য একক উদ্ধৃতি চিহ্ন ব্যবহার করতে পারবেন না ',
    'ERR_NOTHING_SELECTED' => 'এগিয়ে যাওয়ার আগে একটি নির্বাচন করুন.',
    'ERR_SELF_REPORTING' => 'ব্যবহারকারী তার কাছে রিপোর্ট করতে পারেন না.',
    'ERR_SQS_NO_MATCH_FIELD' => 'ক্ষেত্রের জন্য কোন ম্যাচ: ',
    'ERR_SQS_NO_MATCH' => 'মিল নেই',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'মেটা-ডেটা সংজ্ঞাটির জন্য displayParams অ্যাট্রিবিউটটিতে \'কী\' সূচক নির্দিষ্ট করুন',
    'ERR_EXISTING_PORTAL_USERNAME' => 'ত্রুটি: পোর্টাল নামটি ইতিমধ্যে অন্য যোগাযোগের জন্য বরাদ্দ করা হয়েছে.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'ক্ষেত্র মান স্পষ্টতা মান সঙ্গে সামঞ্জস্যপূর্ণ নয়',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'বাহ্যিক অ্যাকাউন্টে সংরক্ষণ করার চেষ্টা করার সময় একটি ত্রুটি ঘটেছে.',
    'ERR_NO_DB' => 'ডাটাবেসের সাথে সংযোগ করা যায়নি বিস্তারিত (0) জন্য দয়া করে suitecrm.log পড়ুন.',
    'ERR_DB_FAIL' => 'ডাটাবেস ব্যর্থতা বিস্তারিত জানার জন্য দয়া করে suitecrm.log দেখুন.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} ফাইলগুলি শুধুমাত্র একটি SuiteCRM {1} ডেটাবেস দিয়ে ব্যবহৃত হতে পারে.',

    'LBL_ACCOUNT' => 'হিসাব',
    'LBL_ACCOUNTS' => 'অ্যাকাউন্ট',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'কার্যকলাপসমূহ',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'দেখুন সারসংক্ষেপ',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'দেখুন সারসংক্ষেপ',
    'LBL_ADD_BUTTON' => 'যোগ',
    'LBL_ADD_DOCUMENT' => 'দস্তাবেজ যুক্ত করুন',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'দস্তাবেজ যুক্ত করুন',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'লক্ষ্য তালিকাতে পরিচিতি যোগ করুন',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'বন্ধ করতে ক্লিক করুন',
    'LBL_ADDITIONAL_DETAILS' => 'অতিরিক্ত তথ্য',
    'LBL_ADMIN' => 'অ্যাডমিন',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'সংরক্ষাণাগার',
    'LBL_ASSIGNED_TO_USER' => 'ব্যবহারকারীর কাছে নিযুক্ত',
    'LBL_ASSIGNED_TO' => 'নির্ধারিত:',
    'LBL_BACK' => 'পিছনে',
    'LBL_BILLING_ADDRESS' => 'বিলিং ঠিকানা',
    'LBL_QUICK_CREATE' => 'Create ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - ওপেন সোর্স সিআরএম',
    'LBL_BUGS' => 'ত্রুটি',
    'LBL_BY' => 'by',
    'LBL_CALLS' => 'ডাক',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Send Queued Campaign Emails',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Submit',
    'LBL_CASE' => 'মামলা',
    'LBL_CASES' => 'মামলার',
    'LBL_CHANGE_PASSWORD' => 'Change password',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => 'সবগুলু যাচাই করুন',
    'LBL_CITY' => 'শহর',
    'LBL_CLEAR_BUTTON_LABEL' => 'পরিষ্কার',
    'LBL_CLEAR_BUTTON_TITLE' => 'পরিষ্কার',
    'LBL_CLEARALL' => 'Clear All',
    'LBL_CLOSE_BUTTON_TITLE' => 'ঘনিষ্ঠ',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Close and Create New',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Close and Create New',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Compose Email',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Compose Email',
    'LBL_SEARCH_DROPDOWN_YES' => 'হাঁ',
    'LBL_SEARCH_DROPDOWN_NO' => 'না',
    'LBL_CONTACT_LIST' => 'Contact List',
    'LBL_CONTACT' => 'যোগাযোগ',
    'LBL_CONTACTS' => 'যোগাযোগ',
    'LBL_CONTRACT' => 'Contract',
    'LBL_CONTRACTS' => 'চুক্তি',
    'LBL_COUNTRY' => 'দেশ:',
    'LBL_CREATE_BUTTON_LABEL' => 'CREATE',
    'LBL_CREATED_BY_USER' => 'ব্যবহারকারী দ্বারা তৈরি',
    'LBL_CREATED_USER' => 'ব্যবহারকারী দ্বারা তৈরি',
    'LBL_CREATED' => 'Created by',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_DOCUMENTS' => 'নথি',
    'LBL_DATE_ENTERED' => 'তারিখ তৈরী:',
    'LBL_DATE_MODIFIED' => 'পরিবর্তিত তারিখ:',
    'LBL_EDIT_BUTTON' => 'সম্পাদন করা',
    'LBL_DUPLICATE_BUTTON' => 'নকল',
    'LBL_DELETE_BUTTON' => 'মুছে ফেলা',
    'LBL_DELETE' => 'মুছে ফেলা',
    'LBL_DELETED' => 'মোছা',
    'LBL_DIRECT_REPORTS' => 'Direct Reports',
    'LBL_DONE_BUTTON_LABEL' => 'সম্পন্ন',
    'LBL_DONE_BUTTON_TITLE' => 'সম্পন্ন',
    'LBL_FAVORITES' => 'Favorites',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Please select a vCard file',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard does not have all the required fields for this module. Please refer to suitecrm.log for details.',
    'LBL_VCARD_ERROR_FILESIZE' => 'The uploaded file exceeds the 30000 bytes size limit which was specified in the HTML form.',
    'LBL_VCARD_ERROR_DEFAULT' => 'There was an error uploading the vCard file. Please refer to suitecrm.log for details.',
    'LBL_IMPORT_VCARD' => 'Import vCard:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Import vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import vCard',
    'LBL_VIEW_BUTTON' => 'দৃশ্য',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email as PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Email as PDF',
    'LBL_EMAILS' => 'ই-মেইল',
    'LBL_EMPLOYEES' => 'কর্মচারী',
    'LBL_ENTER_DATE' => 'Enter Date',
    'LBL_EXPORT' => 'Export',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => 'Go',
    'LBL_HIDE' => 'Hide',
    'LBL_ID' => 'আইডি',
    'LBL_IMPORT' => 'Import',
    'LBL_IMPORT_STARTED' => 'Import Started: ',
    'LBL_LAST_VIEWED' => 'Recently Viewed',
    'LBL_LEADS' => 'নেতৃত্ব',
    'LBL_LESS' => 'less',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_CAMPAIGNS' => 'অভিযান',
    'LBL_CAMPAIGNLOG' => 'প্রচারণার লগ',
    'LBL_CAMPAIGN_CONTACT' => 'অভিযান',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'না',
    'LBL_THEME' => 'Theme:',
    'LBL_FOUND_IN_RELEASE' => 'Found In Release',
    'LBL_FIXED_IN_RELEASE' => 'মুক্তি রিলিজ',
    'LBL_LIST_ACCOUNT_NAME' => 'হিসাবের নাম',
    'LBL_LIST_ASSIGNED_USER' => 'ব্যবহারকারী',
    'LBL_LIST_CONTACT_NAME' => 'যোগাযোগের নাম',
    'LBL_LIST_CONTACT_ROLE' => 'যোগাযোগ ভূমিকা',
    'LBL_LIST_DATE_ENTERED' => 'তারিখ তৈরী',
    'LBL_LIST_EMAIL' => 'ই-মেইল',
    'LBL_LIST_NAME' => 'নাম',
    'LBL_LIST_OF' => 'এর',
    'LBL_LIST_PHONE' => 'ফোন',
    'LBL_LIST_RELATED_TO' => 'সম্পর্কিত',
    'LBL_LIST_USER_NAME' => 'ব্যবহারকারীর নাম',
    'LBL_LISTVIEW_NO_SELECTED' => 'দয়া করে এগিয়ে যাওয়ার জন্য কমপক্ষে 1 টি রেকর্ড নির্বাচন করুন.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'এগিয়ে যাওয়ার জন্য কমপক্ষে ২ টি রেকর্ড নির্বাচন করুন.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'নির্বাচিত রেকর্ডস',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'নির্বাচিত: ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'ডেভিড',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'লিভিংস্টোন',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'ডাঃ.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'কোড বানর এক্সট্র্রাডিনেনার',
    'LBL_CANCEL' => 'বাতিল',
    'LBL_VERIFY' => 'Verify',
    'LBL_RESEND' => 'Resend',
    'LBL_PROFILE' => 'Profile',
    'LBL_MAILMERGE' => 'মেইল মার্জ',
    'LBL_MASS_UPDATE' => 'Mass Update',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'There are no fields available for the Mass Update operation',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt out Primary Email',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt in Primary Email',
    'LBL_MEETINGS' => 'সভা',
    'LBL_MEETING_GO_BACK' => 'Go back to the meeting',
    'LBL_MEMBERS' => 'Members',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_MODIFIED_BY_USER' => 'ব্যবহারকারী দ্বারা সংশোধিত',
    'LBL_MODIFIED_USER' => 'ব্যবহারকারী দ্বারা সংশোধিত',
    'LBL_MODIFIED' => 'Modified by',
    'LBL_MODIFIED_NAME' => 'নাম দ্বারা সংশোধিত',
    'LBL_MORE' => 'More',
    'LBL_MY_ACCOUNT' => 'My Settings',
    'LBL_NAME' => 'নাম',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Create',
    'LBL_NEW_BUTTON_TITLE' => 'Create',
    'LBL_NEXT_BUTTON_LABEL' => 'Next',
    'LBL_NONE' => '--None--',
    'LBL_NOTES' => 'নোট',
    'LBL_OPPORTUNITIES' => 'সুযোগ',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name',
    'LBL_OPPORTUNITY' => 'সুযোগ',
    'LBL_OR' => 'OR',
    'LBL_PANEL_OVERVIEW' => 'OVERVIEW',
    'LBL_PANEL_ASSIGNMENT' => 'অন্যান্য',
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
    'LBL_PROJECT_TASKS' => 'প্রকল্পের কাজ',
    'LBL_PROJECTS' => 'প্রকল্প',
    'LBL_QUOTES' => 'দর',

    'LBL_RELATED' => 'Related',
    'LBL_RELATED_RECORDS' => 'Related Records',
    'LBL_REMOVE' => 'অপসারণ',
    'LBL_REPORTS_TO' => 'Reports To',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indicates required field',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'সম্পন্ন',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Full Form',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Full Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Save & Create New',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Save & Create New',
    'LBL_SAVE_OBJECT' => 'Save {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Search',
    'LBL_SEARCH_BUTTON_TITLE' => 'Search',
    'LBL_FILTER' => 'ছাঁকনি',
    'LBL_SEARCH' => 'Search',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'more',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Invalid file format, only image file can be uploaded.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'নির্বাচন করা',
    'LBL_SELECT_BUTTON_TITLE' => 'নির্বাচন করা',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Browse Documents',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Select Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Select Contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'SELECT FROM Reports',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Select Reports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Select User',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Select User',
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
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Select User',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Select User',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Clear User',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Clear User',
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
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Select Contact',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Select Contact',
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
    'LBL_SHOW' => 'Show',
    'LBL_STATE' => 'State:',
    'LBL_STATUS_UPDATED' => 'Your Status for this event has been updated!',
    'LBL_STATUS' => 'স্থিতি:',
    'LBL_STREET' => 'Street',
    'LBL_SUBJECT' => 'বিষয়',

    'LBL_INBOUNDEMAIL_ID' => 'Inbound Email ID',

    'LBL_SCENARIO_SALES' => 'বিক্রয়',
    'LBL_SCENARIO_MARKETING' => 'মার্কেটিং',
    'LBL_SCENARIO_FINANCE' => 'মূলধন যোগান',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Project Management',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'সুসংগত',
    'LBL_TABGROUP_ALL' => 'সব',
    'LBL_TABGROUP_ACTIVITIES' => 'কার্যকলাপসমূহ',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_MARKETING' => 'মার্কেটিং',
    'LBL_TABGROUP_OTHER' => 'অন্যান্য',
    'LBL_TABGROUP_SALES' => 'বিক্রয়',
    'LBL_TABGROUP_SUPPORT' => 'Support',
    'LBL_TASKS' => 'কার্য',
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
    'LBL_USERS' => 'ব্যবহারকারীরা',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Checking for existing email entry...',
    'LBL_VERIFY_PORTAL_NAME' => 'Checking for existing portal name...',
    'LBL_VIEW_IMAGE' => 'view',

    'LNK_ABOUT' => 'About',
    'LNK_ADVANCED_FILTER' => 'Advanced Filter',
    'LNK_BASIC_FILTER' => 'Quick Filter',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_QUICK_FILTER' => 'Quick Filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Show All',
    'LNK_CLOSE' => 'ঘনিষ্ঠ',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modify current filter',
    'LNK_SAVED_VIEWS' => 'Layout Options',
    'LNK_DELETE' => 'মুছে ফেলা',
    'LNK_EDIT' => 'সম্পাদন করা',
    'LNK_GET_LATEST' => 'Get latest',
    'LNK_GET_LATEST_TOOLTIP' => 'Replace with latest version',
    'LNK_HELP' => 'সাহায্য করুন',
    'LNK_CREATE' => 'Create',
    'LNK_LIST_END' => 'End',
    'LNK_LIST_NEXT' => 'Next',
    'LNK_LIST_PREVIOUS' => 'Previous',
    'LNK_LIST_RETURN' => 'Return to List',
    'LNK_LIST_START' => 'Start',
    'LNK_LOAD_SIGNED' => 'Sign',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Replace with signed document',
    'LNK_PRINT' => 'ছাপা',
    'LNK_BACKTOTOP' => 'Back to top',
    'LNK_REMOVE' => 'অপসারণ',
    'LNK_RESUME' => 'Resume',
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
    'NTC_NO_ITEMS_DISPLAY' => 'না',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this relationship? Only the relationship will be removed. The record will not be deleted.',
    'NTC_REQUIRED' => 'Indicates required field',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Welcome',
    'NTC_YEAR_FORMAT' => '(yyyy)',
    'WARN_UNSAVED_CHANGES' => 'You are about to leave this record without saving any changes you may have made to the record. Are you sure you want to navigate away from this record?',
    'ERROR_NO_RECORD' => 'Error retrieving record. This record may be deleted or you may not be authorized to view it.',
    'WARN_BROWSER_VERSION_WARNING' => '<b>Warning:</b> Your browser version is no longer supported or you are using an unsupported browser.<p></p>The following browser versions are recommended:<p></p><ul><li>Internet Explorer 10 (compatibility view not supported)<li>Firefox 32.0<li>Safari 5.1<li>Chrome 37</ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Warning:</b> Your browser is in IE compatibility view which is not supported.',
    'ERROR_TYPE_NOT_VALID' => 'Error. This type is not valid.',
    'ERROR_NO_BEAN' => 'Failed to get bean.',
    'LBL_DUP_MERGE' => 'Find Duplicates',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Manage Subscriptions',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Manage Subscriptions for ',
    // Ajax status strings
    'LBL_LOADING' => 'লোড হচ্ছে...',
    'LBL_SEARCHING' => 'Searching...',
    'LBL_SAVING_LAYOUT' => 'Saving Layout...',
    'LBL_SAVED_LAYOUT' => 'Layout has been saved.',
    'LBL_SAVED' => 'Saved',
    'LBL_SAVING' => 'Saving',
    'LBL_DISPLAY_COLUMNS' => 'Display Columns',
    'LBL_HIDE_COLUMNS' => 'Hide Columns',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST' => 'Processing...',
    'LBL_REQUEST_PROCESSED' => 'সম্পন্ন',
    'LBL_AJAX_FAILURE' => 'Ajax failure',
    'LBL_MERGE_DUPLICATES' => 'Merge',
    'LBL_SAVED_FILTER_SHORTCUT' => 'My Filters',
    'LBL_SEARCH_POPULATE_ONLY' => 'Perform a search using the search form above',
    'LBL_DETAILVIEW' => 'Detail View',
    'LBL_LISTVIEW' => 'List View',
    'LBL_EDITVIEW' => 'Edit View',
    'LBL_BILLING_STREET' => 'Street:',
    'LBL_SHIPPING_STREET' => 'Street:',
    'LBL_SEARCHFORM' => 'Search Form',
    'LBL_SAVED_SEARCH_ERROR' => 'Please provide a name for this view.',
    'LBL_DISPLAY_LOG' => 'Display Log',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Timeout',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Your session is about to timeout in 2 minutes. Please save your work.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Your session has timed out.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'সভা',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'ডাক',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Time: ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Location: ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description: ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Status: ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Related To: ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Event',
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
    'LBL_ADD_TO_FAVORITES' => 'Add to My Favorites',
    'LBL_CREATE_CONTACT' => 'Create Contact',
    'LBL_CREATE_CASE' => 'কেস তৈরি করুন',
    'LBL_CREATE_NOTE' => 'Create Note',
    'LBL_CREATE_OPPORTUNITY' => 'Create Opportunity',
    'LBL_SCHEDULE_CALL' => 'Log Call',
    'LBL_SCHEDULE_MEETING' => 'Schedule Meeting',
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
    'LBL_NEXT_BTN' => 'Next',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Only the following supported image type attachments can be embedded: JPG, PNG.',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'Changed database context to',
    'ERR_MSSQL_WARNING' => 'Warning:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Error: File [[file]] is missing. Unable to create because no corresponding HTML file was found.',
    'ERR_CANNOT_FIND_MODULE' => 'Error: Module [module] does not exist.',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Error: There are an unequal number of arguments for the \'key\' and \'copy\' elements in the displayParams array.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'সাধারণ',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
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
    'LBL_CLOSE_DASHLETS' => 'ঘনিষ্ঠ',
    'LBL_OPTIONS' => 'বিকল্প',
    'LBL_1_COLUMN' => '1 Column',
    'LBL_2_COLUMN' => '2 Column',
    'LBL_3_COLUMN' => '3 Column',
    'LBL_PAGE_NAME' => 'Page Name',

    'LBL_SEARCH_RESULTS' => 'Search Results',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_TOOLS' => 'Tools',
    'LBL_SEARCH_HELP_TITLE' => 'Search Tips',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'No Image',

    'LBL_MODULE' => 'Module',

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
    'LBL_MODULE_NAME' => 'মডিউল নাম',
    'LBL_ITEM_ID' => 'Item Id',
    'LBL_ITEM_SUMMARY' => 'Item Summary',
    'LBL_ACTION' => 'কর্ম',
    'LBL_SESSION_ID' => 'Session Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack created for user id {0}',
    'LBL_VISIBLE' => 'Record Visible',
    'LBL_DATE_LAST_ACTION' => 'শেষ কর্মের তারিখ',

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
    'LBL_DROPDOWN_LIST_ALL' => 'সব',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Error: The Array count of the bean parameter does not match the Array count of the results.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Error: Missing mapping entry for module.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Error: Unable to retrieve data for {0} Connector. The service may currently be inaccessible or the configuration settings may be invalid. Connector error message: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'For optimal experience using IIS/FastCGI sapi, set fastcgi.logging to 0 in your php.ini file.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'নাম',
    'LBL_COLLECTION_PRIMARY' => 'Primary',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'নির্ধারিত',
    'LBL_DESCRIPTION' => 'বিবরণ',

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
    'LBL_HOURS' => 'ঘন্টার',
    'LBL_MINUTES' => 'মিনিট',
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
    'LBL_ALT_SORT' => 'Sort',
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
    'LBL_EDIT_BUTTON_LABEL' => 'সম্পাদন করা',
    'LBL_EDIT_BUTTON_TITLE' => 'সম্পাদন করা',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'নকল',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'নকল',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'মুছে ফেলা',
    'LBL_DELETE_BUTTON_TITLE' => 'মুছে ফেলা',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'কর্ম',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Save',
    'LBL_SAVE_BUTTON_TITLE' => 'Save',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'বাতিল',
    'LBL_CANCEL_BUTTON_TITLE' => 'বাতিল',
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
        '5' => 'প্রতি 5 মিনিট',
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

    'LBL_FILTER_HEADER_TITLE' => 'ছাঁকনি',

    'LBL_CATEGORY' => 'বিভাগ',
    'LBL_LIST_CATEGORY' => 'বিভাগ',
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
    'LBL_OPT_IN_TITLE' => 'বাছাই করা',
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
$app_list_strings['moduleList']['EmailAddresses'] = 'ইমেল ঠিকানা';
$app_list_strings['project_priority_default'] = 'মধ্যম';
$app_list_strings['project_priority_options'] = array(
    'High' => 'উচ্চ',
    'Medium' => 'মধ্যম',
    'Low' => 'কম',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consent',
    'contract' => 'Contract',
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
    'phone' => 'ফোন',
    'given_to_user' => 'Given to User',
    'email' => 'ই-মেইল',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'জ্ঞানভিত্তিক';

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
    'OTHER' => 'অন্যান্য',
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
    3 => 'অকার্যকর',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'অভিযান',
    'email' => 'ই-মেইল',
    'event' => 'Event',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'অভিযান',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'অভিযান',
    'email' => 'ই-মেইল',
    'event' => 'Event',
    'system' => 'System',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'জ্ঞানভিত্তিক';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'খসড়া';
$app_list_strings['aok_status_list']['Expired'] = 'মেয়াদোত্তীর্ণ';
$app_list_strings['aok_status_list']['In_Review'] = 'পর্যালোচনা';
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
$app_list_strings['fp_event_status_dom']['Accepted'] = 'গৃহীত';
$app_list_strings['fp_event_status_dom']['Declined'] = 'অস্বীকার';
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
        'Closed' => 'বন্ধ',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'নতুন',
        'Open_Assigned' => 'বরাদ্দ',
        'Closed_Closed' => 'বন্ধ',
        'Open_Pending Input' => 'মুলতুবি থাকা ইনপুট',
        'Closed_Rejected' => 'প্রত্যাখ্যাত',
        'Closed_Duplicate' => 'নকল',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Single user',
        'Account' => 'Account user',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'System Default',
    'singleUser' => 'Single User',
    'roundRobin' => 'রাউন্ড-রবিন',
    'leastBusy' => 'কম ব্যস্ত',
    'random' => 'Random',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'প্রতিবেদন';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Report Conditions';
$app_list_strings['moduleList']['AOR_Charts'] = 'Report Charts';
$app_list_strings['moduleList']['AOR_Fields'] = 'Report Fields';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Scheduled Reports';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'অপেক্ষা বৃহত্তর';
$app_list_strings['aor_operator_list']['Less_Than'] = 'কম তুলনায়';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aor_operator_list']['Contains'] = 'রয়েছে';
$app_list_strings['aor_operator_list']['Starts_With'] = 'সঙ্গে সঙ্গে শুরু হয়';
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
$app_list_strings['aor_condition_type_list']['Field'] = 'Field';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aor_condition_type_list']['Period'] = 'Period';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Current User';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'মিনিট';
$app_list_strings['aor_date_type_list']['hour'] = 'ঘন্টার';
$app_list_strings['aor_date_type_list']['day'] = 'দিন';
$app_list_strings['aor_date_type_list']['week'] = 'Weeks';
$app_list_strings['aor_date_type_list']['month'] = 'Months';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aor_date_options']['now'] = 'Now';
$app_list_strings['aor_date_options']['field'] = 'This Field';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'ঊর্ধ্বগামী';
$app_list_strings['aor_sort_operator']['DESC'] = 'নিম্নক্রম';
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
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'মাসিক';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'সাপ্তাহিক';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'দৈনন্দিন';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'সক্রিয়';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'নিষ্ক্রিয়';
$app_list_strings['aor_email_type_list']['Email Address'] = 'ই-মেইল';
$app_list_strings['aor_email_type_list']['Specify User'] = 'ব্যবহারকারী';
$app_list_strings['aor_email_type_list']['Users'] = 'ব্যবহারকারীরা';
$app_list_strings['aor_assign_options']['all'] = 'ALL Users';
$app_list_strings['aor_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aor_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['date_time_period_list']['today'] = 'আজ';
$app_list_strings['date_time_period_list']['yesterday'] = 'Yesterday';
$app_list_strings['date_time_period_list']['this_week'] = 'This Week';
$app_list_strings['date_time_period_list']['last_week'] = 'Last Week';
$app_list_strings['date_time_period_list']['last_month'] = 'গত মাসে';
$app_list_strings['date_time_period_list']['this_month'] = 'এই মাস';
$app_list_strings['date_time_period_list']['this_quarter'] = 'This Quarter';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Last Quarter';
$app_list_strings['date_time_period_list']['this_year'] = 'This year';
$app_list_strings['date_time_period_list']['last_year'] = 'Last year';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'on the';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'on';
$app_strings['LBL_CRON_AT'] = 'at';
$app_strings['LBL_CRON_RAW'] = 'Advanced';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Hour';
$app_strings['LBL_CRON_DAY'] = 'Day';
$app_strings['LBL_CRON_MONTH'] = 'Month';
$app_strings['LBL_CRON_DOW'] = 'DOW';
$app_strings['LBL_CRON_DAILY'] = 'দৈনন্দিন';
$app_strings['LBL_CRON_WEEKLY'] = 'সাপ্তাহিক';
$app_strings['LBL_CRON_MONTHLY'] = 'মাসিক';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'চুক্তি';
$app_list_strings['moduleList']['AOS_Invoices'] = 'চালান';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'Products';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Line Items';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Line Item Groups';
$app_list_strings['moduleList']['AOS_Quotes'] = 'দর';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'বিশ্লেষক';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'প্রতিদ্বন্দ্বী';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'গ্রাহক';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'একত্রকারী';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'বিনিয়োগকারী';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'অংশীদার';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'প্রেস';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'প্রত্যাশা';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'রিসেলার';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'অন্যান্য';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'খসড়া';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Negotiation';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Delivered';
$app_list_strings['quote_stage_dom']['On Hold'] = 'স্হগিত';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmed';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Closed Accepted';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'বন্ধ লস্ট';
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
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'বিশ্লেষক';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'প্রতিদ্বন্দ্বী';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'গ্রাহক';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'একত্রকারী';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'বিনিয়োগকারী';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'অংশীদার';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'প্রেস';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'প্রত্যাশা';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'রিসেলার';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'অন্যান্য';
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
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'দর';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'চালান';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'চুক্তি';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'দর';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'চালান';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'চুক্তি';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'অ্যাকাউন্ট';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'যোগাযোগ';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'নেতৃত্ব';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'শুরু না';
$app_list_strings['contract_status_list']['In Progress'] = 'চলমান';
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
$app_list_strings['aow_status_list']['Active'] = 'সক্রিয়';
$app_list_strings['aow_status_list']['Inactive'] = 'নিষ্ক্রিয়';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'অপেক্ষা বৃহত্তর';
$app_list_strings['aow_operator_list']['Less_Than'] = 'কম তুলনায়';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'রয়েছে';
$app_list_strings['aow_operator_list']['Starts_With'] = 'সঙ্গে সঙ্গে শুরু হয়';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Is Null';
$app_list_strings['aow_process_status_list']['Complete'] = 'সম্পূর্ণ';
$app_list_strings['aow_process_status_list']['Running'] = 'Running';
$app_list_strings['aow_process_status_list']['Pending'] = 'মুলতুবী';
$app_list_strings['aow_process_status_list']['Failed'] = 'ব্যর্থ';
$app_list_strings['aow_condition_operator_list']['And'] = 'And';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aow_condition_type_list']['Value'] = 'Value';
$app_list_strings['aow_condition_type_list']['Field'] = 'Field';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'In SecurityGroup';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'One of';
$app_list_strings['aow_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'Round Robin';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Least Busy';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Value';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Field';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'মিনিট';
$app_list_strings['aow_date_type_list']['hour'] = 'ঘন্টার';
$app_list_strings['aow_date_type_list']['day'] = 'দিন';
$app_list_strings['aow_date_type_list']['week'] = 'Weeks';
$app_list_strings['aow_date_type_list']['month'] = 'Months';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'আজ';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'ই-মেইল';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Record Email';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Related Field';
$app_list_strings['aow_email_type_list']['Specify User'] = 'ব্যবহারকারী';
$app_list_strings['aow_email_type_list']['Users'] = 'ব্যবহারকারীরা';
$app_list_strings['aow_email_to_list']['to'] = 'থেকে';
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
$app_list_strings['duration_unit_dom']['Days'] = 'দিন';
$app_list_strings['duration_unit_dom']['Hours'] = 'ঘন্টার';
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

$app_list_strings['map_module_type_list']['Accounts'] = 'অ্যাকাউন্ট';
$app_list_strings['map_module_type_list']['Contacts'] = 'যোগাযোগ';
$app_list_strings['map_module_type_list']['Cases'] = 'মামলার';
$app_list_strings['map_module_type_list']['Leads'] = 'নেতৃত্ব';
$app_list_strings['map_module_type_list']['Meetings'] = 'সভা';
$app_list_strings['map_module_type_list']['Opportunities'] = 'সুযোগ';
$app_list_strings['map_module_type_list']['Project'] = 'প্রকল্প';
$app_list_strings['map_module_type_list']['Prospects'] = 'লক্ষ্য';

$app_list_strings['map_relate_type_list']['Accounts'] = 'হিসাব';
$app_list_strings['map_relate_type_list']['Contacts'] = 'যোগাযোগ';
$app_list_strings['map_relate_type_list']['Cases'] = 'মামলা';
$app_list_strings['map_relate_type_list']['Leads'] = 'নেতৃত্ব';
$app_list_strings['map_relate_type_list']['Meetings'] = 'সভা';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'সুযোগ';
$app_list_strings['map_relate_type_list']['Project'] = 'প্রকল্প';
$app_list_strings['map_relate_type_list']['Prospects'] = 'লক্ষ্য';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'প্রশাসন';
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
$app_list_strings['marker_image_list']['conference'] = 'সম্মেলন';
$app_list_strings['marker_image_list']['construction'] = 'নির্মাণ';
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
$app_list_strings['marker_image_list']['friday'] = 'শুক্রবার';
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
$app_list_strings['marker_image_list']['home'] = 'মূল পাতা';
$app_list_strings['marker_image_list']['hospital'] = 'Hospital';
$app_list_strings['marker_image_list']['hostel'] = 'Hostel';
$app_list_strings['marker_image_list']['hotel'] = 'Hotel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hotel 1 Star';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hotel 2 Stars';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hotel 3 Stars';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hotel 4 Stars';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hotel 5 Stars';
$app_list_strings['marker_image_list']['info'] = 'Info';
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
$app_list_strings['marker_image_list']['monday'] = 'সোমবার';
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
$app_list_strings['marker_image_list']['saturday'] = 'শনিবার';
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
$app_list_strings['marker_image_list']['sun'] = 'সূর্য';
$app_list_strings['marker_image_list']['sunday'] = 'রবিবার';
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
$app_list_strings['marker_image_list']['thursday'] = 'বৃহস্পতিবার';
$app_list_strings['marker_image_list']['toilets'] = 'Toilets';
$app_list_strings['marker_image_list']['toll_station'] = 'Toll Station';
$app_list_strings['marker_image_list']['tower'] = 'Tower';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Traffic Enforcement Camera';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tram';
$app_list_strings['marker_image_list']['truck'] = 'Truck';
$app_list_strings['marker_image_list']['tuesday'] = 'মঙ্গলবার';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Turn Left';
$app_list_strings['marker_image_list']['turn_right'] = 'Turn Right';
$app_list_strings['marker_image_list']['university'] = 'University';
$app_list_strings['marker_image_list']['up'] = 'Up';
$app_list_strings['marker_image_list']['up_left'] = 'Up Left';
$app_list_strings['marker_image_list']['up_right'] = 'Up Right';
$app_list_strings['marker_image_list']['up_then_left'] = 'Up Then Left';
$app_list_strings['marker_image_list']['up_then_right'] = 'Up Then Right';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Video';
$app_list_strings['marker_image_list']['villa'] = 'Villa';
$app_list_strings['marker_image_list']['water'] = 'Water';
$app_list_strings['marker_image_list']['waterfall'] = 'Waterfall';
$app_list_strings['marker_image_list']['watermill'] = 'Watermill';
$app_list_strings['marker_image_list']['waterpark'] = 'Waterpark';
$app_list_strings['marker_image_list']['watertower'] = 'Watertower';
$app_list_strings['marker_image_list']['wednesday'] = 'বুধবার';
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

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'ছাঁকনি';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Add Tab';
$app_strings['LBL_EDIT_TAB'] = 'Edit Tabs';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Enter Dashboard Name:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Number of Columns:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Are you sure you want to delete the';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'dashboard?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Add a Dashboard Page';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Remove Current Dashboard Page';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Rename Dashboard Page';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'কার্য',
    'Meetings' => 'সভা',
    'Calls' => 'ডাক',
    'Notes' => 'নোট',
    'Emails' => 'ই-মেইল'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'বিক্রয়',
    'getAccountsSpotsData' => 'অ্যাকাউন্ট',
    'getLeadsSpotsData' => 'নেতৃত্ব',
    'getServiceSpotsData' => 'Service',
    'getMarketingSpotsData' => 'মার্কেটিং',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'কার্যকলাপসমূহ',
    'getQuotesSpotsData' => 'দর'
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
$app_list_strings['day_list']['Monday'] = 'সোমবার';
$app_list_strings['day_list']['Tuesday'] = 'মঙ্গলবার';
$app_list_strings['day_list']['Wednesday'] = 'বুধবার';
$app_list_strings['day_list']['Thursday'] = 'বৃহস্পতিবার';
$app_list_strings['day_list']['Friday'] = 'শুক্রবার';
$app_list_strings['day_list']['Saturday'] = 'শনিবার';
$app_list_strings['day_list']['Sunday'] = 'রবিবার';
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
$app_list_strings['survey_status_list']['Draft'] = 'খসড়া';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'বন্ধ';
$app_list_strings['surveys_question_type']['Text'] = 'Text';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Checkbox';
$app_list_strings['surveys_question_type']['Radio'] = 'রেডিও';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'Date';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'নির্ধারণ';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'মুলতুবি থাকা নিশ্চিত করুন, প্রেরিত নয় নির্বাচন করুন নিশ্চিত করুন';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'মুলতুবি থাকা নির্বাচনটি প্রত্যাহার করুন, পাঠানো নির্বাচনটি নিশ্চিত করুন';
$app_strings['LBL_OPT_IN'] = 'বেছে নিয়েছেন';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'অংশ গ্রহণ না করা';
$app_strings['LBL_OPT_IN_INVALID'] = 'অকার্যকর';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'অক্ষম',
    'opt-in' => 'বাছাই করা',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'বাছাই করা',
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
    'group' => 'গ্রুপ',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Connected',
    'failed' => 'ব্যর্থ',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'চলমান',
    'success' => 'সাফল্য',
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
$app_strings['LBL_CLICK_HERE'] = 'Click here';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'Search';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Search';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Search';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = 'Previous';
$app_strings['LBL_SEARCH_NEXT'] = 'Next';
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
