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
    'language_pack_name' => 'Sinhala (Sri Lanka) - si_LK',
    'moduleList' => array(
        'Home' => 'මුල',
        'ResourceCalendar' => 'සම්පත් දින දසුන',
        'Contacts' => 'සබඳතා',
        'Accounts' => 'ගිණුම්',
        'Alerts' => 'ඇලර්ට්ස්',
        'Opportunities' => 'අවස්ථා',
        'Cases' => ' නඩු',
        'Notes' => 'සටහන්',
        'Calls' => 'ඇමතුම්',
        'TemplateSectionLine' => 'Template Section Line',
        'Calls_Reschedule' => 'Calls Reschedule',
        'Emails' => 'වි-තැපැල්',
        'EAPM' => 'EAPM',
        'Meetings' => 'රැස්වීම්',
        'Tasks' => ' කාර්යයන්',
        'Calendar' => 'දින දසුන',
        'Leads' => 'ඇද්ද',
        'Currencies' => 'මුදල්',
        'Activities' => 'ක්‍රියාකාරකම්',
        'Bugs' => ' බග්ස්',
        'Feeds' => 'RSS',
        'iFrames' => 'මාගේ අඩවි',
        'TimePeriods' => 'කාල පරිච්ඡේදයන්',
        'ContractTypes' => 'කොන්ත්රාත් වර්ග',
        'Schedulers' => 'සැලසුම් කරණයන් සඳහා',
        'Project' => 'ව්යාපෘති',
        'ProjectTask' => 'ව්යාපෘති කර්තව්යයෝ',
        'Campaigns' => 'ප්රචාරණ ව්යාපාර',
        'CampaignLog' => 'ව්යාපාරය ලොග්',
        'Documents' => 'ලිපි ලේඛන',
        'DocumentRevisions' => 'ලේඛන සංෙශෝධන',
        'Connectors' => 'සම්බන්ධක',
        'Roles' => 'භූමිකා',
        'Notifications' => 'දැනුම්දීම්',
        'Sync' => 'සමමුහූර්ත',
        'Users' => 'පරිශිලකයින්',
        'Employees' => 'සේවකයින්',
        'Administration' => 'පරිපාලනය',
        'ACLRoles' => 'භූමිකා',
        'InboundEmail' => 'රට තුළට පැමිණෙන සංචාරකයින්ට විද්යුත්',
        'Releases' => 'නිකුතු',
        'Prospects' => 'ඉලක්ක',
        'Queues' => 'පෝලිම්',
        'EmailMarketing' => 'වි-තැපැල් අලෙවිකරණය',
        'EmailTemplates' => 'Email - Templates',
        'ProspectLists' => 'Targets - Lists',
        'SavedSearch' => 'සුරැකි සෙවුම්',
        'UpgradeWizard' => 'විශාරද නවීකරණය කිරීමට',
        'Trackers' => 'ලුහුබැඳීම්',
        'TrackerSessions' => 'Tracker Sessions',
        'TrackerQueries' => 'ලුහුබැඳීම් විමසුම්',
        'FAQ' => 'නිති පැණ',
        'Newsletters' => 'ප්රවෘත්ති පත්ර',
        'SugarFeed' => 'SuiteCRM කැවීම්',
        'SugarFavorites' => 'SuiteCRM ප්රියතම දැන්වීම්',

        'OAuthKeys' => 'OAuth පාරිභෝගික කී',
        'OAuthTokens' => 'OAuth Tokens',
        'OAuth2Clients' => 'OAuth Clients',
        'OAuth2Tokens' => 'OAuth Tokens',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'මුල',
        'Dashboard' => 'උපකරණ පුවරුව',
        'Contacts' => 'සබඳතාව',
        'Accounts' => 'ගිණුම',
        'Opportunities' => 'අවස්ථාව',
        'Cases' => 'නඩු',
        'Notes' => 'සටහන',
        'Calls' => 'ඇමතුම',
        'Emails' => 'විද්යුත් තැපෑල',
        'EmailTemplates' => 'විද්යුත් සැකිල්ල',
        'Meetings' => 'රැස්වීම',
        'Tasks' => 'කාර්ය',
        'Calendar' => 'දින දසුන',
        'Leads' => 'ඊයම්',
        'Activities' => 'ක්රියාකාරකම්',
        'Bugs' => 'බග්',
        'KBDocuments' => 'කි.බ. ලේඛන',
        'Feeds' => 'RSS',
        'iFrames' => 'මාගේ අඩවි',
        'TimePeriods' => 'කාල සීමාව',
        'Project' => 'ව්යාපෘති',
        'ProjectTask' => 'ව්යාපෘති කාර්ය සාධක',
        'Prospects' => 'ඉලක්කය',
        'Campaigns' => 'ව්යාපාරය',
        'Documents' => 'ලේඛන',
        'Sync' => 'සමමුහූර්ත',
        'Users' => 'පරිශීලක',
        'SugarFavorites' => 'SuiteCRM ප්රියතම දැන්වීම්',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'ඔව්',
        '2' => 'නැහැ',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'රස පරීක්ෂක',
        'Competitor' => 'තරගකරු',
        'Customer' => 'පාරිභෝගිකයා',
        'Integrator' => 'අනුකලකය',
        'Investor' => 'ආයෝජක',
        'Partner' => 'සහකරු',
        'Press' => 'මාධ්ය',
        'Prospect' => 'අනාගත',
        'Reseller' => 'දේශීය වෙළඳ සහකරුවන්',
        'Other' => 'වෙනත්',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'ඇඟලුම්',
        'Banking' => 'බැංකු',
        'Biotechnology' => 'ජෛව තාක්ෂණ',
        'Chemicals' => 'රසායනික ද්රව්ය',
        'Communications' => 'සන්නිවේදන',
        'Construction' => 'ඉදිකිරීම',
        'Consulting' => 'උපදේශන',
        'Education' => 'අධ්යාපන',
        'Electronics' => 'ඉලෙක්ට්රොනික උපකරණ',
        'Energy' => 'බලශක්ති',
        'Engineering' => 'ඉංජීනේරු',
        'Entertainment' => 'විනෝදාස්වාදය',
        'Environmental' => 'පරිසර',
        'Finance' => 'මුදල්',
        'Government' => 'ආණ්ඩුව',
        'Healthcare' => 'සෞඛ්ය සත්කාර',
        'Hospitality' => 'ආගන්තුක සත්කාරය',
        'Insurance' => 'රක්ෂණය',
        'Machinery' => 'යන්ත්රෝපකරණ',
        'Manufacturing' => 'නිෂ්පාදනය',
        'Media' => 'මාධ්ය',
        'Not For Profit' => 'ලාභය සඳහා',
        'Recreation' => 'විනෝදාත්මක කටයුතු',
        'Retail' => 'සිල්ලර',
        'Shipping' => 'නැව්ගත කිරීම',
        'Technology' => 'තාක්ෂණ',
        'Telecommunications' => 'විදුලි සංදේශ',
        'Transportation' => 'ප්රවාහන',
        'Utilities' => 'උපයෝගිතා',
        'Other' => 'වෙනත්',
    ),
    'lead_source_default_key' => 'Self Generated',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'සීතල ඇමතුම්',
        'Existing Customer' => 'දැනට පවතින පාරිභෝගික',
        'Self Generated' => 'Self Generated',
        'Employee' => 'සේවක',
        'Partner' => 'සහකරු',
        'Public Relations' => 'මානව සම්බන්ධතා',
        'Direct Mail' => 'සෘජු තැපෑල',
        'Conference' => 'සමුළුව',
        'Trade Show' => 'වෙළඳ ප්රදර්ශනය',
        'Web Site' => 'වෙබ් අඩවිය',
        'Word of mouth' => 'කට කතා',
        'Email' => 'විද්යුත් තැපෑල',
        'Campaign' => 'ව්යාපාරය',
        'Other' => 'වෙනත්',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'දැනට පවතින ව්යාපාරික',
        'New Business' => 'නව ව්යාපාරය',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'ආදායම',
        'Investment' => 'ආයෝජන',
        'Expected_Revenue' => 'අපේක්ෂිත ආදායම්',
        'Budget' => 'අයවැය',

    ),
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Primary Decision Maker',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Primary Decision Maker',
        'Business Decision Maker' => 'ව්යාපාරික තීරණ ගන්නා අමතන්න',
        'Business Evaluator' => 'ව්යාපාරික ඇගැයුම්කරුවෙකු',
        'Technical Decision Maker' => 'තාක්ෂණික තීරණ ගන්නා අමතන්න',
        'Technical Evaluator' => 'තාක්ෂණික ඇගැයුම්කරුවෙකු',
        'Executive Sponsor' => 'විධායක අනුග්රාහකයා',
        'Influencer' => 'Influencer',
        'Other' => 'වෙනත්',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Primary Contact',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Primary Contact',
        'Alternate Contact' => 'විකල්ප අමතන්න',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => 'Net 15',
        'Net 30' => 'Net 30',
    ),
    'sales_stage_default_key' => 'Prospecting',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospecting',
        'Qualification' => 'සුදුසුකම්',
        'Needs Analysis' => 'විශ්ලේෂණය අවශ්යතා',
        'Value Proposition' => 'අගය යෝජනාව',
        'Id. Decision Makers' => 'Identifying Decision Makers',
        'Perception Analysis' => 'අවබෝධය විශ්ලේෂණය',
        'Proposal/Price Quote' => 'යෝජනාව / මිල Quote',
        'Negotiation/Review' => 'කතිකා / සමාලෝචන',
        'Closed Won' => 'සංවෘත වොන්',
        'Closed Lost' => 'සංවෘත ලොස්ට්',
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
        'Call' => 'ඇමතුම',
        'Meeting' => 'රැස්වීම',
        'Task' => 'කාර්ය',
        'Email' => 'විද්යුත් තැපෑල',
        'Note' => 'සටහන',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'මයා.',
        'Ms.' => 'මෙවි.',
        'Mrs.' => 'මිය.',
        'Miss' => 'Miss',
        'Dr.' => 'ආචාර්ය.',
        'Prof.' => 'මහාචාර්ය.',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => 'විනාඩි 1 පෙර',
        300 => 'විනාඩි 5 පෙර',
        600 => 'විනාඩි 10 ක් පෙර',
        900 => 'විනාඩි 15 ක් පෙර',
        1800 => 'විනාඩි 30 ක් පෙර',
        3600 => 'පැය 1 පෙර',
        7200 => 'පැය 2 පෙර',
        10800 => 'පැය 3 පෙර',
        18000 => 'පැය 5 පෙර',
        86400 => 'දින 1 පෙර',
    ),

    'task_priority_default' => 'මධ්යම',
    'task_priority_dom' => array(
        'High' => 'අධි',
        'Medium' => 'මධ්යම',
        'Low' => 'අඩු',
    ),
    'task_status_default' => 'ආරම්භ වී නැත',
    'task_status_dom' => array(
        'Not Started' => 'ආරම්භ වී නැත',
        'In Progress' => 'ප්රගතියේ',
        'Completed' => 'සම්පූර්ණ කරන ලද',
        'Pending Input' => 'විභාග වෙමින් ආදාන',
        'Deferred' => 'විලම්බිත',
    ),
    'meeting_status_default' => 'Planned',
    'meeting_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'පැවති',
        'Not Held' => 'පැවැත්වූ නොවේ',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'වෙනත්',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planned',
    'call_status_dom' => array(
        'Planned' => 'Planned',
        'Held' => 'පැවති',
        'Not Held' => 'පැවැත්වූ නොවේ',
    ),
    'call_direction_default' => 'Outbound',
    'call_direction_dom' => array(
        'Inbound' => 'රට තුළට පැමිණෙන සංචාරකයින්ට',
        'Outbound' => 'Outbound',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'අලුත්',
        'Assigned' => 'පවරා',
        'In Process' => 'ක්රියාවලිය තුළ',
        'Converted' => 'පරිවර්තනය කරන',
        'Recycled' => 'ප්රතිචක්රීකරණය',
        'Dead' => 'මළ',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'අධි',
        'P2' => 'මධ්යම',
        'P3' => 'අඩු',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'සාමාන්ය පරිශීලක',
        'Administrator' => 'පරිපාලක',
    ),
    'user_status_dom' => array(
        'Active' => 'ක්රියාකාරී',
        'Inactive' => 'අක්රීය',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Email Code',
    ),
    'employee_status_dom' => array(
        'Active' => 'ක්රියාකාරී',
        'Terminated' => 'අවසන්',
        'Leave of Absence' => 'නොපැමිණීමේ අවසරය',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'යාහූ!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'අධි',
        'Medium' => 'මධ්යම',
        'Low' => 'අඩු',
    ),
    'project_task_priority_default' => 'මධ්යම',

    'project_task_status_options' => array(
        'Not Started' => 'ආරම්භ වී නැත',
        'In Progress' => 'ප්රගතියේ',
        'Completed' => 'සම්පූර්ණ කරන ලද',
        'Pending Input' => 'විභාග වෙමින් ආදාන',
        'Deferred' => 'විලම්බිත',
    ),
    'project_task_utilization_options' => array(
        '0' => 'කිසිවක් නැත',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'කෙටුම්පත්',
        'In Review' => 'සමාලෝචනය දී',
        'Underway' => 'ආරම්භ',
        'On_Hold' => 'රඳවා ගත්',
        'Completed' => 'සම්පූර්ණ කරන ලද',
    ),
    'project_status_default' => 'කෙටුම්පත්',

    'project_duration_units_dom' => array(
        'Days' => 'දවස්',
        'Hours' => 'පැය',
    ),

    'activity_status_type_dom' => array(
        '' => '--කිසිවක් නැත--',
        'active' => 'ක්රියාකාරී',
        'inactive' => 'අක්රීය',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'ගිණුම්',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'ගිණුම',
        'Opportunities' => 'අවස්ථාව',
        'Cases' => 'නඩු',
        'Leads' => 'ඊයම්',
        'Contacts' => 'සබඳතාව', // cn (11/22/2005) added to support Emails

        'Bugs' => 'බග්',
        'Project' => 'ව්යාපෘති',

        'Prospects' => 'ඉලක්කය',
        'ProjectTask' => 'ව්යාපෘති කාර්ය සාධක',

        'Tasks' => 'කාර්ය',

        'AOS_Contracts' => 'කොන්ත්රාත්',
        'AOS_Invoices' => 'ඉන්වොයිසිය',
        'AOS_Quotes' => 'උපුටා',
        'AOS_Products' => 'නිෂ්පාදනය',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'ගිණුම',
        'Contacts' => 'සබඳතාව',
        'Opportunities' => 'අවස්ථාව',
        'Campaigns' => 'ව්යාපාරය',
        'Tasks' => 'කාර්ය',
        'Emails' => 'විද්යුත් තැපෑල',

        'Bugs' => 'බග්',
        'Project' => 'ව්යාපෘති',
        'ProjectTask' => 'ව්යාපෘති කාර්ය සාධක',
        'Prospects' => 'ඉලක්කය',
        'Cases' => 'නඩු',
        'Leads' => 'ඊයම්',

        'Meetings' => 'රැස්වීම',
        'Calls' => 'ඇමතුම',

        'AOS_Contracts' => 'කොන්ත්රාත්',
        'AOS_Invoices' => 'ඉන්වොයිසිය',
        'AOS_Quotes' => 'උපුටා',
        'AOS_Products' => 'නිෂ්පාදනය',
    ),

    'parent_type_display' => array(
        'Accounts' => 'ගිණුම',
        'Contacts' => 'සබඳතාව',
        'Tasks' => 'කාර්ය',
        'Opportunities' => 'අවස්ථාව',

        'Bugs' => 'බග්',
        'Cases' => 'නඩු',
        'Leads' => 'ඊයම්',

        'Project' => 'ව්යාපෘති',
        'ProjectTask' => 'ව්යාපෘති කාර්ය සාධක',

        'Prospects' => 'ඉලක්කය',

        'AOS_Contracts' => 'කොන්ත්රාත්',
        'AOS_Invoices' => 'ඉන්වොයිසිය',
        'AOS_Quotes' => 'උපුටා',
        'AOS_Products' => 'නිෂ්පාදනය',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'මිල කැඳවීම්',
        'AOS_Invoices' => 'ඉන්වොයිසි',
        'AOS_Contracts' => 'කොන්ත්රාත්',
    ),
    'issue_priority_default_key' => 'මධ්යම',
    'issue_priority_dom' => array(
        'Urgent' => 'හදිසි',
        'High' => 'අධි',
        'Medium' => 'මධ්යම',
        'Low' => 'අඩු',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'පිළිගත්',
        'Duplicate' => 'අනුපිටපත්',
        'Closed' => 'වසා',
        'Out of Date' => 'යල්පැන ගිය',
        'Invalid' => 'වලංගු නොවේ',
    ),

    'issue_status_default_key' => 'අලුත්',
    'issue_status_dom' => array(
        'New' => 'අලුත්',
        'Assigned' => 'පවරා',
        'Closed' => 'වසා',
        'Pending' => 'විභාග වෙමින්',
        'Rejected' => 'ප්රතික්ෂේප',
    ),

    'bug_priority_default_key' => 'මධ්යම',
    'bug_priority_dom' => array(
        'Urgent' => 'හදිසි',
        'High' => 'අධි',
        'Medium' => 'මධ්යම',
        'Low' => 'අඩු',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'පිළිගත්',
        'Duplicate' => 'අනුපිටපත්',
        'Fixed' => 'ස්ථාවර',
        'Out of Date' => 'යල්පැන ගිය',
        'Invalid' => 'වලංගු නොවේ',
        'Later' => 'පසුව',
    ),
    'bug_status_default_key' => 'අලුත්',
    'bug_status_dom' => array(
        'New' => 'අලුත්',
        'Assigned' => 'පවරා',
        'Closed' => 'වසා',
        'Pending' => 'විභාග වෙමින්',
        'Rejected' => 'ප්රතික්ෂේප',
    ),
    'bug_type_default_key' => 'බග්',
    'bug_type_dom' => array(
        'Defect' => 'කැළැලක්',
        'Feature' => 'විශේෂාංගය',
    ),
    'case_type_dom' => array(
        'Administration' => 'පරිපාලනය',
        'Product' => 'නිෂ්පාදනය',
        'User' => 'පරිශීලක',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'අභ්යන්තර',
        'Forum' => 'මණ්ඩපය',
        'Web' => 'වියමන',
        'InboundEmail' => 'විද්යුත් තැපෑල',
    ),

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'ගිණුම්',
        'Activities' => 'ක්‍රියාකාරකම්',
        'Bugs' => ' බග්ස්',
        'Calendar' => 'දින දසුන',
        'Calls' => 'ඇමතුම්',
        'Campaigns' => 'ප්රචාරණ ව්යාපාර',
        'Cases' => ' නඩු',
        'Contacts' => 'සබඳතා',
        'Currencies' => 'මුදල්',
        'Dashboard' => 'උපකරණ පුවරුව',
        'Documents' => 'ලිපි ලේඛන',
        'Emails' => 'වි-තැපැල්',
        'Feeds' => 'සංග්රහ',
        'Forecasts' => 'අනාවැකි',
        'Help' => 'උදව්',
        'Home' => 'මුල',
        'Leads' => 'ඇද්ද',
        'Meetings' => 'රැස්වීම්',
        'Notes' => 'සටහන්',
        'Opportunities' => 'අවස්ථා',
        'Outlook Plugin' => 'ඉදිරි දැක්මක් සහිතව ප්ලගිනය',
        'Projects' => 'ව්යාපෘති',
        'Quotes' => 'මිල කැඳවීම්',
        'Releases' => 'නිකුතු',
        'RSS' => 'RSS',
        'Studio' => 'ශබ්දාගාර',
        'Upgrade' => 'උත්ශ්රේණි කිරීම',
        'Users' => 'පරිශිලකයින්',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        '' => '',
        'Planning' => 'සැලසුම්',
        'Active' => 'ක්රියාකාරී',
        'Inactive' => 'අක්රීය',
        'Complete' => 'සම්පූර්ණ',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'ටෙලි විකුණුම්',
        'Mail' => 'තැපෑල',
        'Email' => 'විද්යුත් තැපෑල',
        'Print' => 'මුද්රණය',
        'Web' => 'වියමන',
        'Radio' => 'ගුවන්විදුලිය',
        'Television' => 'රූපවාහිනිය',
        'NewsLetter' => 'පුවත්',
        'Survey' => 'Survey',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'සතිපතා',
        'Monthly' => 'මාසික',
        'Quarterly' => 'කාර්තුමය',
        'Annually' => 'වාර්ෂිකව',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'ස.තැ.මා.කෙ.',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'දුරුතු',
        '2' => 'නවම්',
        '3' => 'මැදින්',
        '4' => 'බක්',
        '5' => 'වෙසක්',
        '6' => 'පොසොන්',
        '7' => 'ඇසළ',
        '8' => 'නිකිණි',
        '9' => 'බිනර',
        '10' => 'වප්',
        '11' => 'ඉල්',
        '12' => 'උඳුවප්',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'දුරුතු',
        '2' => 'නවම්',
        '3' => 'මැදින්',
        '4' => 'බක්',
        '5' => 'වෙසක්',
        '6' => 'පොසොන්',
        '7' => 'ඇසළ',
        '8' => 'නිකිණි',
        '9' => 'බිනර',
        '10' => 'වප්',
        '11' => 'ඉල්',
        '12' => 'උඳු',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'ඉරිදා',
        '2' => 'සඳුදා',
        '3' => 'අගහරුවදා',
        '4' => 'බදාදා',
        '5' => 'බ්රහස්පතින්දා',
        '6' => 'සිකුරාදා',
        '7' => 'සෙනසුරාදා',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'සන්',
        '2' => 'සඳු',
        '3' => 'අග',
        '4' => 'බදාදා',
        '5' => 'බිඳ වැටීම',
        '6' => 'සිකු',
        '7' => 'සෙන',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'පෙ.ව.',
        'pm' => 'ප.ව.',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'පෙ.ව.',
        'PM' => 'ප.ව.',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'පුද්ගලික',
        'group' => 'සමූහය',
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
        'personal' => 'පුද්ගලික',
        'group' => 'සමූහය',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'පුද්ගලික',
        'group' => 'සමූහය',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'පුද්ගලික',
        'group' => 'සමූහය',
        'system' => ' පද්ධතිය',
        'system-override' => 'System Override',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'ක්රියාකාරී',
        'Inactive' => 'අක්රීය',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Multi Word Search',
      'single' => 'Single Word Search',
    ],

    'dom_email_types' => array(
        'out' => 'යැවිණි',
        'archived' => 'සංරක්ෂිත',
        'draft' => 'කෙටුම්පත්',
        'inbound' => 'රට තුළට පැමිණෙන සංචාරකයින්ට',
        'campaign' => 'ව්යාපාරය',
    ),
    'dom_email_status' => array(
        'archived' => 'සංරක්ෂිත',
        'closed' => 'වසා',
        'draft' => 'කෙටුම්පත් දී',
        'read' => 'Read',
        'replied' => ' ප්රතිචාර ලද්දේ',
        'sent' => 'යැවිණි',
        'send_error' => 'දෝෂ යවන්න',
        'unread' => 'නොකියවූ',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'සංරක්ෂිත',
    ),

    'dom_email_server_type' => array(
        '' => '--කිසිවක් නැත--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--කිසිවක් නැත--',
        'createcase' => ' නඩු සාදන්න',
        'bounce' => 'ගමනක් පරිහරණය',
    ),
    'dom_email_distribution' => array(
        '' => '--කිසිවක් නැත--',
        'direct' => 'සෘජු යෙදවීමට',
        'roundRobin' => 'වටය- රොබින්',
        'leastBusy' => 'අවම වශයෙන් - කාර්යබහුල',
    ),
    'dom_email_errors' => array(
        1 => 'Only select one user when Direct Assigning items.',
        2 => 'You must assign Only Checked Items when Direct Assigning items.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'ඔව්',
        'bool_false' => 'නැහැ',
    ),
    'dom_int_bool' => array(
        1 => 'ඔව්',
        0 => 'නැහැ',
    ),
    'dom_switch_bool' => array(
        'on' => 'ඔව්',
        'off' => 'නැහැ',
        '' => 'නැහැ',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'SuiteCRM වි-තැපැල් අනුග්‍රාහකය',
        'mailto' => 'බාහිර වි-තැපැල් අනුග්‍රාහකය',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
        'mozaik' => 'Mozaik',
    ),

    'dom_email_editor_option' => array(
        '' => 'පෙරනිමි විද්යුත් ආකෘතිය',
        'html' => 'HTML විද්යුත්',
        'plain' => 'සාමාන්ය පාඨ විද්යුත්',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'ධාවනය වන කාලය අතීත, ක්රියාවට නගා නැත',
        'ready' => 'සූදානම්',
        'in progress' => 'ප්රගතියේ',
        'failed' => 'අසමත් විය',
        'completed' => 'සම්පූර්ණ කරන ලද',
        'no curl' => 'ධාවනය නොවේ: නැත සමහර දත්ත සම්පිණ්ඩක ලබා ගත හැකි',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'ක්රියාකාරී',
        'Inactive' => 'අක්රීය',
    ),

    'scheduler_period_dom' => array(
        'min' => 'විනාඩි',
        'hour' => 'පැය',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'අලෙවි',
        'Knowledege Base' => 'දැනුම මූලික',
        'Sales' => 'විකුණුම්',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'සංරක්ෂිත',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'අලෙවි එක ගොඩේ',
        'Product Brochures' => 'නිෂ්පාදන සඟරා',
        'FAQ' => 'නිති පැණ',
    ),

    'document_status_dom' => array(
        'Active' => 'ක්රියාකාරී',
        'Draft' => 'කෙටුම්පත්',
        'FAQ' => 'නිති පැණ',
        'Expired' => 'කල් ඉකුත්ය',
        'Under Review' => 'සමාලෝචන යටතේ',
        'Pending' => 'විභාග වෙමින්',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'තැපැල් ඒකාබද්ධ',
        'eula' => 'EULA',
        'nda' => 'NDA',
        'license' => 'බලපත්ර ගිවිසුම',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'පිළිගන්න',
        'decline' => 'පහත වැටීම',
        'tentative' => 'තාවකාලික',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'පිළිගත්',
        'decline' => 'පහත වැටීම',
        'tentative' => 'තාවකාලික',
        'none' => 'කිසිවක් නැත',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'කිසිවක් නැත',
        'Daily' => 'දිනපතා',
        'Weekly' => 'සතිපතා',
        'Monthly' => 'මාසික',
        'Yearly' => 'වාර්ෂිකව',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'දවස(ව)',
        'Weekly' => 'සතියේ((ව)',
        'Monthly' => 'මස(ව)',
        'Yearly' => 'වර්ෂ(ව)',
    ),

    'duration_dom' => array(
        '' => 'කිසිවක් නැත',
        '900' => 'විනාඩි 15 ක්',
        '1800' => 'විනාඩි 30 ක්',
        '2700' => 'විනාඩි 45',
        '3600' => 'පැය 1 යි',
        '5400' => 'පැය 1.5',
        '7200' => 'පැය 2',
        '10800' => 'පැය 3',
        '21600' => 'පැය 6',
        '86400' => 'දින 1',
        '172800' => '2 දින තුළ',
        '259200' => '3 දින තුළ',
        '604800' => '1 සතියේ',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'පෙරනිමි',
        'seed' => 'බීජ',
        'exempt_domain' => 'සැපයීම මැඬපැවැත්වීමේ ලැයිස්තුව - වසම් වන විට',
        'exempt_address' => 'සැපයීම මැඬපැවැත්වීමේ ලැයිස්තුව - විද්යුත් තැපැල් ලිපිනය වන විට',
        'exempt' => 'සැපයීම මැඬපැවැත්වීමේ ලැයිස්තුව - Id වන විට',
        'test' => 'ටෙස්ට්',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'ක්රියාකාරී',
        'inactive' => 'අක්රීය',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'පණිවිඩය යැවූ / තැත',
        'send error' => 'වෙනත් පණිවිඩ පොළා පැන',
        'invalid email' => 'පොළා පැන පණිවුඩය වලංගු නොවන විද්යුත්',
        'link' => 'ක්ලික් කරන්න-ගන්නා මාර්ගය ලින්ක්',
        'viewed' => 'බලපු පණිවුඩය',
        'removed' => 'මූලොපායක්',
        'lead' => 'නිර්මාණය කරන ලද්දේ ඇද්ද',
        'contact' => 'සබඳතා සෑදිණි',
        'blocked' => 'ලිපිනය හෝ වසම විසින් යටපත්',
        'Survey' => 'Survey answered',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'සබඳතා',
        'Users' => 'පරිශිලකයින්',
        'Prospects' => 'ඉලක්ක',
        'Leads' => 'ඇද්ද',
        'Accounts' => 'ගිණුම්',
    ),
    'merge_operators_dom' => array(
        'like' => 'අඩංගු',
        'exact' => 'හරියටම',
        'start' => 'සමඟ ආරම්භ',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'ඔව්',
        'false' => 'නැහැ',
        'required' => 'අවශ්‍යයි',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'අබල කර ඇත',
        1 => 'සබල කර ඇත',
        2 => 'පෙරහන',
        3 => 'Default selected filter',
        4 => 'Only filter',
    ),

    'projects_priority_options' => array(
        'high' => 'අධි',
        'medium' => 'මධ්යම',
        'low' => 'අඩු',
    ),

    'projects_status_options' => array(
        'notstarted' => 'ආරම්භ වී නැත',
        'inprogress' => 'ප්රගතියේ',
        'completed' => 'සම්පූර්ණ කරන ලද',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'ලෙජන්ඩ් පුළුල්',
        'collapselegend' => 'ලෙජන්ඩ් බිඳ',
        'clickfordrilldown' => 'සරඹ සඳහා ඩවුන් ක්ලික් කරන්න',
        'detailview' => 'වැඩි විස්තර...',
        'piechart' => 'පයි සටහන',
        'groupchart' => 'සමූහ සටහන',
        'stackedchart' => 'එකමත සටහන',
        'barchart' => 'නීතිඥ සටහන',
        'horizontalbarchart' => 'තිරස් නීතිඥ සටහන',
        'linechart' => 'ලයින් සටහන',
        'noData' => 'ලබා ගත නොහැකි දත්ත',
        'print' => 'මුද්රණය',
        'pieWedgeName' => 'කොටස්',
    ),
    'release_status_dom' => array(
        'Active' => 'ක්රියාකාරී',
        'Inactive' => 'අක්රීය',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'තනි Quote (&#39;)',
        '"' => 'ද්විත්ව Quote (&#34;)',
        '' => 'කිසිවක් නැත',
        'other' => 'වෙනත්:',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'වෙනත්:',
    ),
    'link_target_dom' => array(
        '_blank' => 'නව කවුළුව',
        '_self' => 'එම කවුළු',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => 'ස්වයංක්රීය-නැවුම් කරන්න එපා',
        '30' => 'සෑම තත්පර 30 ක්',
        '60' => 'සෑම විනාඩි 1',
        '180' => 'හැම විනාඩි 3',
        '300' => 'සෑම විනාඩි 5',
        '600' => 'සෑම විනාඩි 10',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'කිසිදා',
        '30' => 'සෑම තත්පර 30 ක්',
        '60' => 'සෑම විනාඩි 1',
        '180' => 'හැම විනාඩි 3',
        '300' => 'සෑම විනාඩි 5',
        '600' => 'සෑම විනාඩි 10',
    ),
    'date_range_search_dom' => array(
        '=' => 'තැනෙන්නේ',
        'not_equal' => 'නැත මත',
        'greater_than' => 'පසු',
        'less_than' => 'කලින්',
        'last_7_days' => 'පසුගිය 7 දින',
        'next_7_days' => 'ඉදිරි දින 7',
        'last_30_days' => 'පසුගිය දින 30',
        'next_30_days' => 'ඉදිරි දින 30',
        'last_month' => 'පසුගිය මාසික',
        'this_month' => 'මේ මාසය',
        'next_month' => 'ඉදිරි මාසය',
        'last_year' => 'පසුගිය වසර',
        'this_year' => 'මෙම වර්ෂය',
        'next_year' => 'ලබන වසර',
        'between' => 'අතර වේ',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'තැනෙන්නේ',
        'not_equal' => 'සම කරන්නේ නැත',
        'greater_than' => 'වඩා උතුම්',
        'greater_than_equals' => 'නැත්නම් සමාන කිරීම වඩා උතුම්',
        'less_than' => 'අඩු',
        'less_than_equals' => 'අඩු හෝ සමාන',
        'between' => 'අතර වේ',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'පිටපත්',
        'move' => 'පියවර',
        'donothing' => 'කිසිවක් කරන්න',
    ),
);

$app_strings = array(
    'LBL_SEARCH_REAULTS_TITLE' => 'ප්‍රතිඵල',
    'ERR_SEARCH_INVALID_QUERY' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'ERR_SEARCH_NO_RESULTS' => 'No results matching your search criteria. Try broadening your search.',
    'LBL_SEARCH_PERFORMED_IN' => 'Search performed in',
    'LBL_EMAIL_CODE' => 'වි-තැපැල් කේතය:',
    'LBL_SEND' => 'යවන්න',
    'LBL_LOGOUT' => 'නික්මෙන්න',
    'LBL_TOUR_NEXT' => 'ඊලඟ',
    'LBL_TOUR_SKIP' => 'මගහරින්න',
    'LBL_TOUR_BACK' => 'ආපසු',
    'LBL_TOUR_TAKE_TOUR' => 'මෙම සංචාරය ගන්න',
    'LBL_MOREDETAIL' => 'තව විස්තර' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'සංස්කරණය කරන්න පේළිගත' /*for 508 compliance fix*/,
    'LBL_VIEW_INLINE' => 'දැක්ම' /*for 508 compliance fix*/,
    'LBL_BASIC_SEARCH' => 'පෙරහන' /*for 508 compliance fix*/,
    'LBL_Blank' => ' ' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD' => 'එකතු කරන්න' /*for 508 compliance fix*/,
    'LBL_ID_FF_ADD_EMAIL' => 'වි-තැපැල් ලිපිනයක් එකතු කරන්න' /*for 508 compliance fix*/,
    'LBL_HIDE_SHOW' => 'සඟවන්න / පෙන්වන්න' /*for 508 compliance fix*/,
    'LBL_DELETE_INLINE' => 'මකා' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => ' පැහැදිලි' /*for 508 compliance fix*/,
    'LBL_ID_FF_VCARD' => 'පත' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE' => 'ඉවත් කරන්න' /*for 508 compliance fix*/,
    'LBL_ID_FF_REMOVE_EMAIL' => 'වි-තැපැල් ලිපිනය ඉවත්කරන්න' /*for 508 compliance fix*/,
    'LBL_ID_FF_OPT_OUT' => 'Opt Out',
    'LBL_ID_FF_INVALID' => 'Make Invalid',
    'LBL_ADD' => 'එකතු කරන්න' /*for 508 compliance fix*/,
    'LBL_COMPANY_LOGO' => 'සමාගම ලාංඡනය' /*for 508 compliance fix*/,
    'LBL_CONNECTORS_POPUPS' => 'කනෙක්ටර්ස් Popups',
    'LBL_CLOSEINLINE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_VIEWINLINE' => 'දැක්ම',
    'LBL_INFOINLINE' => 'තොරතුරු',
    'LBL_PRINT' => 'මුද්රණය',
    'LBL_HELP' => 'උදව්',
    'LBL_ID_FF_SELECT' => ' තෝරන්න',
    'DEFAULT' => 'මූලික',
    'LBL_SORT' => 'වර්ග',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SSL හෝ TLS කට SMTP සක්රීය කරන්න?',
    'LBL_NO_ACTION' => 'There is no action by that name: %s',
    'LBL_NO_SHORTCUT_MENU' => 'There are no actions available.',
    'LBL_NO_DATA' => 'දත්ත නැත',

    'LBL_ROUTING_FLAGGED' => 'ධජය',
    'LBL_ROUTING_TO' => 'දක්වා',
    'LBL_ROUTING_TO_ADDRESS' => 'ලිපිනයට',
    'LBL_ROUTING_WITH_TEMPLATE' => 'සැකිල්ල සමග',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'මෙම වාර්තාව දැනට කාර්යාලය දුරකථන සහ ලිපිනය ක්ෂේත්රවල වටිනාකම් අඩංගු වේ. ඔබ "හරි" ක්ලික් කරන්න තෝරාගත් බව ගිණුම පහත සඳහන් කාර්යාලය දුරකථන සහ ලිපිනය සමඟ මෙම අගයන් මඟින් නැවත ලියවෙනු ඇත. වත්මන් වටිනාකම් තබා ගැනීමට "අවලංගු කරන්න" ක්ලික් කරන්න.',
    'LBL_DROP_HERE' => '[මෙහි දමන්න]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Prefill ජීමේල් ™ Defaults',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'නම',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'පිටතට යන තැපැල් සේවාදායකය දේපළ',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'SMTP මුරපදය',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'SMTP වරාය',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'SMTP සේවාදායකය',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'SMTP පරිශීලක නාමය',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'පෙරනිමි',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'අවවාදයයි: පිටතට යන තැපැල් ගිණුම සඳහා අතුරුදන් භාව්ත නාමය හා මුර පදය.',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Please set an External OAuth Connection.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Warning: A password has not been set.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Warning: Missing credentials',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'ඔබගේ ඊ-තැපැල් ලිපිනය ගිණුම් වලින් ලැබෙන විද්යුත් තැපැල් බැලීම සඳහා තැපැල් ගිණුම් සකසන්න.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'තැපැල් ගිණුම් පිටතට යන විද්යුත් තැපැල් භාවිතා කිරීමට SMTP තැපැල් සේවාදායකය තොරතුරු ලබා දීම.',

    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'හරි',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => ' පැහැදිලි',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'දක්වා:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Bcc:',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'දක්වා/Cc/Bcc',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'විද්යුත් තැපැල් ලිපිනය',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'පෙරහන',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'නම',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'ලිපිනයන් හමු නොමැත',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'ලිපින පොත සුරකින්න සහ එකතු කරන්න',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'විද්යුත් ලබන්නන් තෝරන්න',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'ලිපින පොත',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'අවවාදයයි! ඔබ විසින් මකා උත්සාහ කරන පිටස්තර ව්යාප්තිය ගිණුමක් දැනට පවතින අභ්යන්තර යොමුගත ගිණුමට සංෙයෝජිත ෙකෙර්. ඔබ දිගටම කරගෙන කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_EMAIL_ADDRESSES' => 'විද්යුත් තැපෑල',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'විද්යුත් තැපැල් ලිපිනය',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'You have confirmed that your email address has been opted in: ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Unable to confirm email address',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'SuiteCRM කිරීමට ආනයන',
    'LBL_EMAIL_ASSIGNMENT' => ' පැවරුම',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'අමුණන්න',
    'LBL_EMAIL_ATTACHMENT' => 'අමුණන්න',
    'LBL_EMAIL_ATTACHMENTS' => 'ස්ථානීය පද්ධතියෙන්',
    'LBL_EMAIL_ATTACHMENTS2' => 'SuiteCRM ලේඛන සිට',
    'LBL_EMAIL_ATTACHMENTS3' => 'සැකිල්ල ඇමුණුම්',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'ගොනුව',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'ලේඛන',
    'LBL_EMAIL_BCC' => 'BCC',
    'LBL_EMAIL_CANCEL' => 'අවලංගු කරන්න',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'අක්ෂර මාලාව',
    'LBL_EMAIL_CHECK' => 'තැපෑල පරීක්‍ෂාකරන්න',
    'LBL_EMAIL_CHECKING_NEW' => 'නව වි-තැපැල් සඳහා පරීක්‍ෂාවෙමින්',
    'LBL_EMAIL_CHECKING_DESC' => 'One moment please... <br><br>If this is the first check for the mail account, it may take some time.',
    'LBL_EMAIL_CLOSE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_EMAIL_COFFEE_BREAK' => 'Checking for New Email. <br><br>Large mail accounts may take a considerable amount of time.',

    'LBL_EMAIL_COMPOSE' => 'විද්යුත් තැපෑල',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'මෙම ඊ-තැපැල් සඳහා ලබන්නා (ව) ඇතුලත් කරන්න.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'මෙම ඊ-තැපැල් සිරුර හිස්ය. කෙසේ හෝ යවන්න?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'මෙම ඊ-කිසිදු විෂය ඇත. කෙසේ හෝ යවන්න?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(කිසිදු යටත්ව)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'CC හා BCC ක්ෂේත්ර සඳහා වලංගු ඊ-මේල් ලිපිනය ඇතුලත් කරන්න',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'මෙම විද්යුත් තැපැල් විනාශ කරන්නද?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'ඔබ මෙම අත්සන ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද',

    'LBL_EMAIL_SENT_SUCCESS' => 'වි-තැපෑල යැවිණි',

    'LBL_EMAIL_CREATE_NEW' => 'Save-- දා --Create',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'බහු',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'හිස්',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'යවන්නා විසින් යැවූ දිනය',
    'LBL_EMAIL_DATE_TODAY' => 'අද',
    'LBL_EMAIL_DELETE' => 'මකා',
    'LBL_EMAIL_DELETE_CONFIRM' => 'තෝරාගත් පණිවුඩ මකන්නද?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'විද්යුත් සාර්ථකව මකා.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'පණිවුඩය මකා දැමීම',
    'LBL_EMAIL_DETAILS' => 'විස්තර',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'අප අමතන්න සමඟ වැඩ කරන විට පමණක් ප්රාථමික ලිපිනය භාවිතා කරනු ඇත.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'ඉවත ලූ ලිපි හිස්වීම',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'බාහිර යොමුගත සේවාදායකය මකා දැමීම',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'හැඹිලි ගොනු ඉවත් කිරීමේ',
    'LBL_EMAIL_EMPTY_MSG' => 'No emails to display.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'No email addresses to display.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'ෆෝල්ඩරය නම හිස් සුවිශේෂී හා නොවන විය යුතුය. කරුණාකර නැවත උත්සාහ කරන්න.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'ෆොල්ඩරයක් මකා දැමිය නොහැකි. ෆෝල්ඩර හෝ එහි දරුවන් එක්කෝ ඊමේල් හෝ එය කිරීමට සම්බන්ධ වූ තැපැල් පෙට්ටිය ඇත.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'සන්දර්භය සිට අදහස් ෆෝල්ඩරය තීරණය කළ හැක. නැවත උත්සහා කරන්න.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'ඔබගේ සැකසුම් පරීක්ෂා කරන්න.',
    'LBL_EMAIL_ERROR_DESC' => 'දෝෂ අනාවරණය කරන ලදී:',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'ඔබ මෙම ප්රදේශයේ ප්රවේශ නැහැ. ප්රවේශ ලබා ගැනීම සඳහා ඔබේ වෙබ් අඩවිය පරිපාලක අමතන්න.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'SuiteCRM ෆෝල්ඩරය නම් සුවිශේෂී විය යුතුය.',
    'LBL_EMAIL_ERROR_EMPTY' => 'සෙවුම් ක්රමවේදයක් ඇතුලත් කරන්න.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'දෝෂයක් හටගෙන ඇත',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'පණිවිඩය සේවාදායකයෙන් ඉවත් විණි',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'පණිවිඩය සේවාදායකයෙන් ඉවත් කර හෝ අන් බහාලුමකට ගෙන ගොස් ඇත',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'තැපැල් සේවාදායකය වෙත සම්බන්ධතාවය අසමත් විය. ඔබගේ පරිපාලක අමතන්න',
    'LBL_EMAIL_ERROR_MOVE' => 'සේවාදායක හා / හෝ තැපැල් ගිණුම් අතර විද්යුත් තැපැල් ගමන් මේ කාලය වන විට පහසුකම් සපයන්නේ නැත.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'දෝෂ ගෙන යන්න',
    'LBL_EMAIL_ERROR_NAME' => 'නමක් අවශ්‍ය යි.',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'ලිපිනය සිට අවශ්ය වේ. කරණාකර වලංගු ඊතැපැල් ලිපිනයක් ඇතුළු කරන්න.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'ගොනුව ලබා දෙන්න.',
    'LBL_EMAIL_ERROR_SERVER' => 'ඒ තැපැල් සේවාදායකය ලිපිනය අවශ්ය වේ.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'මෙම තැපැල් ගිණුම ඉතිරි වී ඇති විය හැක.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'මෙම තැපැල් සේවාදායකය සමග සන්නිවේදනය දෝෂයක් සිදුවී ඇත.',
    'LBL_EMAIL_ERROR_USER' => 'ඒ පිවිසුම් නාමය අවශ්ය වේ.',
    'LBL_EMAIL_ERROR_PORT' => 'ඒ තැපැල් සේවාදායකය වරාය අවශ්ය වේ.',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'සේවාදායක ප්රොටෝකෝලය අවශ්ය වේ.',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'අධීක්ෂණය ෆෝල්ඩරය අවශ්ය වේ.',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'කුණු කූඩයට ෆෝල්ඩරය අවශ්ය වේ.',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'මෙම තොරතුරු ලබා ගත හැකි නො වේ',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'දක්වා නොමැත පිටතට යන තැපැල් සේවාදායකය.',
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
    'LBL_EMAIL_FOLDERS_ADD' => 'එකතු කරන්න',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'නව බහාලුමක් එකතු කරන්න',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'ෆෝල්ඩරය නම-වෙනස් කිරීම',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'සුරකින්න',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'මෙම ෆෝල්ඩරය එකතු කරන්න',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'මෙම ෆෝල්ඩරය වෙනස් කළ නොහැකි',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'ඔබ මෙම ෆෝල්ඩරය ඉවත් කිරීමට කැමති? \ N මෙම ක්රියාවලිය ආපසු හැරවිය නොහැකි බව ඔබට විශ්වාසද. \ NFolder මකාදැමීම් සියලු කඳුරැල්ල ඇත ෆෝල්ඩර අඩංගු විය.',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'නව බහාලුමේ නම',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'මෙම ක්රියාව සිදු කිරීමට පෙර ෆොල්ඩරයක් තෝරන්න.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'බහාලුම කළමනාකරණය',

    'LBL_EMAIL_FORWARD' => ' ඉදිරි',
    'LBL_EMAIL_DELIMITER' => '::; ::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => '[[total]] ඊමේල් [[count]] බාගත',
    'LBL_EMAIL_FROM' => 'වෙතින්',
    'LBL_EMAIL_GROUP' => 'සමූහය',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'සමූහය',
    'LBL_EMAIL_HOME_FOLDER' => 'මුල',
    'LBL_EMAIL_IE_DELETE' => 'තැපැල් ගිණුම මකා දැමීම',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => '  අත්සන මකා දැමීම',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => '  ඔබ මෙම තැපැල් ගිණුම ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'මකාදැමීම සාර්ථක.',
    'LBL_EMAIL_IE_SAVE' => 'තැපැල් ගිණුම් තොරතුරු සුරකිමින්',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'වි-තැපැල් ආයාත වෙමින්',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Import into SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'සැකසුම් ආයාතකරන්න',
    'LBL_EMAIL_INVALID' => 'වලංගු නොවේ',
    'LBL_EMAIL_LOADING' => 'පූරණය වෙමින්...',
    'LBL_EMAIL_MARK' => 'ලකුණ',
    'LBL_EMAIL_MARK_FLAGGED' => 'සලකුණු කළ පරිදි',
    'LBL_EMAIL_MARK_READ' => 'කියවන්න ලෙස',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'සලකුණු කළ පරිදි',
    'LBL_EMAIL_MARK_UNREAD' => 'නොකියවූ ලෙස',
    'LBL_EMAIL_ASSIGN_TO' => 'කිරීම සඳහා යෙදවීමට',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'බහාලුම සාදන්න',
    'LBL_EMAIL_MENU_COMPOSE' => 'කිරීමට රචනා',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'ෆෝල්ඩරය මකා',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => '  හිස් කුණු කූඩයට',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'සමමුහූර්ත කරන්න',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => '  පැහැදිලි හැඹිලි ගොනු',
    'LBL_EMAIL_MENU_REMOVE' => 'ඉවත් කරන්න',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'ෆෝල්ඩරය නම-වෙනස් කිරීම',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'බහාලුම නැවත නම් වෙමින්',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => '  මෙම මෙහෙයුම උත්සාහ කිරීමට පෙර තෝරාගත් කරගන්න.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'බහාලුමක් සාදන්න (දුරස්ථ හෝ SuiteCRM හි)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => '(දුරස්ථ හෝ SuiteCRM තුළ) ෆෝල්ඩරය මකා',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'ඔබගේ තැපැල් ගිණුම් සඳහා හිස් ලූ ලිපි ෆෝල්ඩර සියලු',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'මාර්ක් මෙම ඊ-තැපැල්) කියවීමට',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'මාර්ක් මෙම ඊ-තැපැල් (ව) සලකුණු',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => '(දුරස්ථ හෝ SuiteCRM තුළ) ෆෝල්ඩරය නම-වෙනස් කිරීම',

    'LBL_EMAIL_MESSAGES' => 'පණිවිඩ',

    'LBL_EMAIL_ML_NAME' => 'ලැයිස්තුව නම',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'තෝරාගත් ලැයිස්තුව ලිපිනයන්',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'දැනට පවතින ලයිස්තුව ලිපිනයන්',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Click</b> to select multiples<br />(Mac users use <b>CMD-Click</b>)',

    'LBL_EMAIL_NO' => 'නැහැ',
    'LBL_EMAIL_NOT_SENT' => 'පද්ධතිය ඔබගේ ඉල්ලීම කටයුතු කිරීමට නොහැකි වේ. මෙම පද්ධති පරිපාලක අමතන්න.',

    'LBL_EMAIL_OK' => 'හරි',
    'LBL_EMAIL_ONE_MOMENT' => 'එක් මොහොතක අනේ ...',
    'LBL_EMAIL_OPEN_ALL' => 'බහු පණිවිඩ විවෘත',
    'LBL_EMAIL_OPTIONS' => 'විකල්ප',
    'LBL_EMAIL_QUICK_COMPOSE' => 'ඉක්මන් සම්පාදන',
    'LBL_EMAIL_OPT_OUT' => 'මූලොපායක්',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'මූලොපායක් හා වලංගු නොවන',
    'LBL_EMAIL_PERFORMING_TASK' => '  රංග කාර්ය සාධක',
    'LBL_EMAIL_PRIMARY' => 'ප්රාථමික',
    'LBL_EMAIL_PRINT' => 'මුද්රණය',

    'LBL_EMAIL_QC_BUGS' => 'බග්',
    'LBL_EMAIL_QC_CASES' => 'නඩු',
    'LBL_EMAIL_QC_LEADS' => 'ඊයම්',
    'LBL_EMAIL_QC_CONTACTS' => 'සබඳතාව',
    'LBL_EMAIL_QC_TASKS' => 'කාර්ය',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'අවස්ථාව',
    'LBL_EMAIL_QUICK_CREATE' => ' ඉක්මන් සාදන්න',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'නැවත ගොඩනැගීමේ ෆෝල්ඩර',
    'LBL_EMAIL_RELATE_TO' => 'විස්තර කරන්න',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'දැක්ම සබඳතා',
    'LBL_EMAIL_RECORD' => 'විද්යුත් වාර්තා',
    'LBL_EMAIL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_EMAIL_REPLY' => 'පිලිතුරු',
    'LBL_EMAIL_REPLY_ALL' => 'සියලුම පිලිතුරු දෙන්න දුරකතන අංකය පෙන්වන්න',
    'LBL_EMAIL_REPLY_TO' => 'ඊ-මේල් මගින් පිලිතුරු දෙන්න-කිරීමට',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'පණිවුඩය ලබාගනිමින්',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'විද්යුත් වාර්තා ලබාගනිමින්',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'එකම එක විද්යුත් තැපැල් වාර්තා තෝරන්න',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'පසුගිය මොඩියුලය වෙත ආපසු?',
    'LBL_EMAIL_REVERT' => 'ප්රතිවර්තනය',
    'LBL_EMAIL_RELATE_EMAIL' => 'විද්යුත් විස්තර',

    'LBL_EMAIL_RULES_TITLE' => 'පාලනය කළමනාකරණ',

    'LBL_EMAIL_SAVE' => 'සුරකින්න',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'සුරකින්න සහ නැවත ප්රතිචාර දැක්වීම',
    'LBL_EMAIL_SAVE_DRAFT' => 'කෙටුම්පත් සුරකින්න',
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
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'දින සිට',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'තුරු දිනය',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'ප්රතිඵල කිසිවක් ඔබගේ සෙවුම් නිර්ණායක නොගැලපේ.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'ප්රතිඵල සොයන්න',

    'LBL_EMAIL_SELECT' => ' තෝරන්න',

    'LBL_EMAIL_SEND' => 'යවන්න',
    'LBL_EMAIL_SENDING_EMAIL' => 'විද්යුත් යැවීම',

    'LBL_EMAIL_SETTINGS' => 'සැකසුම්',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'තැපැල් ගිණුම්',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'පැහැදිලි ආකෘතිය',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'නව තැපැල් සඳහා පරීක්ෂා කරන්න',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'ලිපිනය සිට',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'ටෙස්ට් නිවේදනය සඳහා විද්යුත් ලිපිනය:',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'නම සිට',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'ලිපිනය වෙත ඊ-මේල් මගින් පිලිතුරු දෙන්න',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'සියලුම තැපැල් ගිණුම් සමමුහුර්ත කරන්න',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'ඊ-මේල් සපයා පිටතට යන තැපැල සැකසුම් භාවිතා කරමින් නිශ්චිත ඊ-මේල් ලිපිනය වෙත යොමු කරන ලදී. ඊ-තැපැල් නිවැරදි සැකසුම් තහවුරු කිරීමට ලැබී ඇති දැයි පරීක්ෂා කර බලන්න.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'See full SMTP Log',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'සම්පූර්ණ සමමුහුර්ත සිදු? \ NLarge තැපැල් ගිණුම් මිනිත්තු කිහිපයක් ගත විය හැකිය.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'බහු ෆෝල්ඩර තෝරා ගැනීමට ශිෆ්ට් යතුර හෝ Ctrl යතුර ක්ලික් කරන්න.',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'ජනරාල්',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'සමූහ ෆෝල්ඩර සාදන්න',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'සංස්කරණය කරන්න සමූහ ෆෝල්ඩරය',

    'LBL_EMAIL_SETTINGS_NAME' => 'තැපැල් ගිණුමේ නම',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'එන ලිපි පිටුවක ඊමේල් සංඛ්යාව තෝරන්න. මෙම සැකසුම ක්රියාත්මක කිරීමට සඳහා පිටුවක් නැවුම් කරන්න අවශ්ය විය හැකිය.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'තැපැල් ගිණුම ලබාගනිමින්',
    'LBL_EMAIL_SETTINGS_SAVED' => 'The settings have been saved.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'පමණක් සාමාන්ය පාඨ විද්යුත් තැපැල් පණිවුඩ යවන්න',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'පිටුව අනුව විද්යුත් තැපැල් පණිවුඩ',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'දෘෂ්ය සැකසුම්',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'මනාප',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'ලබා ගත හැකි පරිශීලක ෆෝල්ඩර',
    'LBL_EMAIL_ERROR_PREPEND' => 'An email error occurred:',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'ඔබ භාවිතා කරන තැපැල් ගිණුම සඳහා තෝරා දෙස් තැපැල් සේවාදායකය සාවද්ය වේ. සැකසුම් යළි පිරික්සා හෝ තැපැල් ගිණුම සඳහා විවිධ තැපැල් සේවාදායකය තෝරන්න.',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'ක පිටතට යන තැපැල් සේවාදායකය ඊ-තැපැල් යැවීමට මාන නැත. ක පිටතට යන තැපැල් සේවාදායකය මානකරණය හෝ ඔබ සැකසුම් භාවිතා කරන තැපැල් ගිණුම සඳහා පිටතට යන තැපැල් සේවාදායකය තෝරන්න',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Default Signature',
    'LBL_EMAIL_SIGNATURES' => 'අත්සන්',
    'LBL_SMTPTYPE_GMAIL' => 'ජීමේල්',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo තැපෑල',
    'LBL_SMTPTYPE_EXCHANGE' => 'මයික්රොසොෆ්ට් විනිමය',
    'LBL_SMTPTYPE_OTHER' => 'වෙනත්',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => ' [දුරස්ථ ෆෝල්ඩර]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[SuiteCRM ෆෝල්ඩර]',
    'LBL_EMAIL_SUBJECT' => ' විෂය',
    'LBL_EMAIL_SUCCESS' => 'සාර්ථකත්වය',
    'LBL_EMAIL_SUITE_FOLDER' => 'SuiteCRM ෆෝල්ඩරය',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'විද්යුත් සැකිල්ල ශරීරය හිස්',
    'LBL_EMAIL_TEMPLATES' => 'සැකිලි',
    'LBL_EMAIL_TO' => 'දක්වා',
    'LBL_EMAIL_VIEW' => 'දැක්ම',
    'LBL_EMAIL_VIEW_HEADERS' => 'විදහා Headers',
    'LBL_EMAIL_VIEW_RAW' => 'අමු විද්යුත් ප්රදර්ශනය',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => ' POP3 මත භාවිත කරන විට මෙම ලක්ෂණය සහය නොදක්වයි.',
    'LBL_DEFAULT_LINK_TEXT' => 'පෙරනිමි සබැඳියක් පෙළ.',
    'LBL_EMAIL_YES' => 'ඔව්',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'ටෙස්ට් විද්යුත් යවන්න',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => ' ටෙස්ට් විද්යුත් යවා',
    'LBL_EMAIL_MESSAGE_NO' => 'පණිවුඩය අංක',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'ආනයන සම්මත',
    'LBL_EMAIL_IMPORT_FAIL' => 'එම පණිවිඩය දැනටමත් සේවාදායකය වෙතින් ආනයනය කරන ලද හෝ මකා එක්කෝ නිසා ආනයන අසාර්ථක විය',

    'LBL_LINK_NONE' => 'කිසිවක් නැත',
    'LBL_LINK_ALL' => 'සියලු',
    'LBL_LINK_RECORDS' => 'වාර්තා',
    'LBL_LINK_SELECT' => ' තෝරන්න',
    'LBL_LINK_ACTIONS' => 'ක්‍රියාමාර්ග',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'තහවුරු කරන්න',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'ඔබ මේ # මොඩියුලය # වසා දැමීමට ඔබට අවශ්යද?',
    'LBL_INVALID_FILE_EXTENSION' => ' වලංගු නොවන ගොනු දිගුව',

    'ERR_AJAX_LOAD' => 'දෝෂයක් හටගෙන ඇත:',
    'ERR_AJAX_LOAD_FAILURE' => 'පසු අවස්ථාවක නැවත උත්සාහ කරන්න ඔබගේ ඉල්ලීම සැකසීම දෝෂයක් ඇති විය.',
    'ERR_AJAX_LOAD_FOOTER' => 'මෙම දෝෂය දිගින් දිගටම පවතින්නේ නම් ඔබගේ පරිපාලක මෙම මොඩියුලය සඳහා Ajax අක්රීය කර කරුණාකර',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'මෙම දශම වෙන්කර දහස් වෙන්කර ලෙස එම චරිතය භාවිත කල නොහැක. \\ N \\ n අගයන් වෙනස් කරන්න.',
    'ERR_DELETE_RECORD' => 'වාර්තාගත ස්පර්ශ මැකීමට නියම කළ යුතු ය.',
    'ERR_EXPORT_DISABLED' => 'ආබාධිත අපනයනය කරයි.',
    'ERR_EXPORT_TYPE' => 'දෝෂ අපනයනය',
    'ERR_INVALID_EMAIL_ADDRESS' => 'නෑ, වලංගු විද්යුත්-තැපැල් ලිපිනයක්.',
    'ERR_INVALID_FILE_REFERENCE' => 'වලංගු නොවන ගොනු විමර්ශන',
    'ERR_NO_HEADER_ID' => 'මෙම ලක්ෂණය මේ තේමාව තුළ නොමැත.',
    'ERR_NOT_ADMIN' => '"පරිපාලනයට අනවසර ප්රවේශය."',
    'ERR_MISSING_REQUIRED_FIELDS' => 'අත්යවශ්ය ක්ෂේත්ර අතුරුදන්:',
    'ERR_INVALID_REQUIRED_FIELDS' => 'වලංගු නොවන අත්යවශ්ය ක්ෂේත්ර:',
    'ERR_INVALID_VALUE' => 'වලංගු නොවන අගය:',
    'ERR_NO_SUCH_FILE' => 'ගොනු පද්ධතිය මත නොපවතියි',
    'ERR_NO_SINGLE_QUOTE' => 'සඳහා තනි උද්ධෘත ලකුණ භාවිත කල නොහැක',
    'ERR_NOTHING_SELECTED' => 'ඉදිරියට යාමට පෙර තෝරාගත් කරගන්න.',
    'ERR_SELF_REPORTING' => 'පරිශීලක ඔහු හෝ ඇය වෙත වාර්තා කළ නොහැක.',
    'ERR_SQS_NO_MATCH_FIELD' => 'ක්ෂේත්රයේ කිසිදු තරගය:',
    'ERR_SQS_NO_MATCH' => 'මෙයට තරගයේ',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'මෙටා-දත්ත, අර්ථ දැක්වීම සඳහා ආරෝපණය displayParams ප්රධාන \ දර්ශකය \ නියම කරන්න',
    'ERR_EXISTING_PORTAL_USERNAME' => 'දෝෂයකි: ද්වාරය නම දැනටමත් තවත් සබඳතා අනුයුක්ත කර ඇත.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'ක්ෂේත්ර අගය නිරවද්යතාවයකින් අගය සමග අනුකූල නොවේ',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'බාහිර ගිණුම වෙත ඉතිරි කර ගැනීමට උත්සාහ කරන විට දෝෂයක් ඇතිවිය.',
    'ERR_NO_DB' => 'දත්ත සමුදායට සම්බන්ධ විය නොහැක. විස්තර සඳහා suitecrm.log වෙත යොමු වන්න.',
    'ERR_DB_FAIL' => 'දත්ත සමුදාය අසාර්ථක. විස්තර සඳහා suitecrm.log වෙත යොමු වන්න.',
    'ERR_DB_VERSION' => 'SuiteCRM {0} ගොනු පමණක් SuiteCRM {1} දත්ත සමුදාය සමඟ භාවිතා කල හැක.',

    'LBL_ACCOUNT' => 'ගිණුම',
    'LBL_ACCOUNTS' => 'ගිණුම්',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'දැක්ම සාරාංශය',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'දැක්ම සාරාංශය',
    'LBL_ADD_BUTTON' => 'එකතු කරන්න',
    'LBL_ADD_DOCUMENT' => 'ලේඛන එකතු කරන්න',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => ' L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'ඉලක්ක ලැයිස්තුවට එක් කරන්න',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Add Contacts To Target List',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => ' වසන්න ක්ලික් කරන්න',
    'LBL_ADDITIONAL_DETAILS' => 'අතිරේක විස්තර',
    'LBL_ADMIN' => ' පරිපාලක',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'සංරක්ෂිත ලේඛණ සේප්පුව',
    'LBL_ASSIGNED_TO_USER' => 'පරිශීලක පවරා',
    'LBL_ASSIGNED_TO' => ' පවරා:',
    'LBL_BACK' => 'ආපසු',
    'LBL_BILLING_ADDRESS' => 'බිල්පත් ලිපිනය',
    'LBL_QUICK_CREATE' => 'සාදන්න ',
    'LBL_BROWSER_TITLE' => ' SuiteCRM - Open Source CRM',
    'LBL_BUGS' => ' බග්ස්',
    'LBL_BY' => ' විසින්',
    'LBL_CALLS' => 'ඇමතුම්',
    'LBL_CAMPAIGNS_SEND_QUEUED' => ' පෙළි ගැසු ව්යාපාරය විද්යුත් තැපැල් පණිවුඩ යවන්න',
    'LBL_SUBMIT_BUTTON_LABEL' => ' ඉදිරිපත්',
    'LBL_CASE' => 'නඩු',
    'LBL_CASES' => ' නඩු',
    'LBL_CHANGE_PASSWORD' => ' මුරපදය වෙනස් කරන්න',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHECKALL' => ' සියලුම පරීක්ෂා කරන්න',
    'LBL_CITY' => 'නගරය',
    'LBL_CLEAR_BUTTON_LABEL' => ' පැහැදිලි',
    'LBL_CLEAR_BUTTON_TITLE' => ' පැහැදිලි',
    'LBL_CLEARALL' => ' සියල්ල හිස්කරන්න',
    'LBL_CLOSE_BUTTON_TITLE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => ' සමීප හා නව නිර්මාණය',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => ' සමීප හා නව නිර්මාණය',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Open Items:',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => ' L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => ' විද්යුත් රචනා',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => ' විද්යුත් රචනා',
    'LBL_SEARCH_DROPDOWN_YES' => 'ඔව්',
    'LBL_SEARCH_DROPDOWN_NO' => 'නැහැ',
    'LBL_CONTACT_LIST' => ' ඇමතුම් ලැයිස්තුව',
    'LBL_CONTACT' => 'සබඳතාව',
    'LBL_CONTACTS' => 'සබඳතා',
    'LBL_CONTRACT' => 'කොන්ත්රාත්',
    'LBL_CONTRACTS' => 'කොන්ත්රාත්',
    'LBL_COUNTRY' => 'රට:',
    'LBL_CREATE_BUTTON_LABEL' => 'සාදන්න',
    'LBL_CREATED_BY_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_CREATED_USER' => ' පරිශීලක විසින් නිර්මාණය',
    'LBL_CREATED' => 'සෑදුවේ',
    'LBL_CURRENT_USER_FILTER' => 'My Items:',
    'LBL_CURRENCY' => 'මුදල්:',
    'LBL_DOCUMENTS' => 'ලිපි ලේඛන',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය:',
    'LBL_DATE_MODIFIED' => 'දිනය නවීකරණය කරන ලද:',
    'LBL_EDIT_BUTTON' => 'සංස්කරණය',
    'LBL_DUPLICATE_BUTTON' => 'අනුපිටපත්',
    'LBL_DELETE_BUTTON' => 'මකා',
    'LBL_DELETE' => 'මකා',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_DIRECT_REPORTS' => 'සෘජු වාර්තා',
    'LBL_DONE_BUTTON_LABEL' => 'හරි',
    'LBL_DONE_BUTTON_TITLE' => 'හරි',
    'LBL_FAVORITES' => ' ප්රියතම දැන්වීම්',
    'LBL_VCARD' => 'පත',
    'LBL_EMPTY_VCARD' => 'එය vCard ගොනුව තෝරන්න',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard මෙම මොඩියුලය සඳහා අවශ්ය සියලු ක්ෂේත්රයන් නැත. විස්තර සඳහා suitecrm.log වෙත යොමු වන්න.',
    'LBL_VCARD_ERROR_FILESIZE' => 'උඩුගත ගොනුව HTML ආකෘති පත්රය, හි නිශ්චිතව දක්වා කරන ලද 30000 බයිට් ප්රමාණය සීමාව ඉක්මවා යයි.',
    'LBL_VCARD_ERROR_DEFAULT' => 'මෙම ගොනුව උඩුගත කිරීම පත දෝෂයක් ඇති විය. විස්තර සඳහා suitecrm.log වෙත යොමු වන්න.',
    'LBL_IMPORT_VCARD' => 'ආනයන පත:',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => ' ආනයන පත',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => ' ආනයන පත',
    'LBL_VIEW_BUTTON' => 'දැක්ම',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'පී.ඩී.එෆ් ලෙස විද්යුත්',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'පී.ඩී.එෆ් ලෙස විද්යුත්',
    'LBL_EMAILS' => 'වි-තැපැල්',
    'LBL_EMPLOYEES' => 'සේවකයින්',
    'LBL_ENTER_DATE' => ' දිනය ඇතුලත් කරන්න',
    'LBL_EXPORT' => ' අපනයන',
    'LBL_FAVORITES_FILTER' => 'My Favorites:',
    'LBL_GO_BUTTON_LABEL' => ' යන්න',
    'LBL_HIDE' => 'සඟවන්න',
    'LBL_ID' => 'හැඳු.',
    'LBL_IMPORT' => ' ආනයන',
    'LBL_IMPORT_STARTED' => ' ආනයන ආරම්භ:',
    'LBL_LAST_VIEWED' => ' නරඹන ලද්දේ නවතම',
    'LBL_LEADS' => 'ඇද්ද',
    'LBL_LESS' => ' අඩු',
    'LBL_CAMPAIGN' => 'ව්යාපාරය:',
    'LBL_CAMPAIGNS' => 'ප්රචාරණ ව්යාපාර',
    'LBL_CAMPAIGNLOG' => 'ව්යාපාරය ලොග්',
    'LBL_CAMPAIGN_CONTACT' => 'ප්රචාරණ ව්යාපාර',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'කිසිවක් නැත',
    'LBL_THEME' => 'තේමාව:',
    'LBL_FOUND_IN_RELEASE' => 'නිකුතු සොයා ගනී',
    'LBL_FIXED_IN_RELEASE' => 'නිකුතු දී ස්ථාවර',
    'LBL_LIST_ACCOUNT_NAME' => 'ගිණුමේ නම',
    'LBL_LIST_ASSIGNED_USER' => 'පරිශීලක',
    'LBL_LIST_CONTACT_NAME' => 'සබඳතාවේ නම',
    'LBL_LIST_CONTACT_ROLE' => ' ඇමතුම් කාර්යභාරය',
    'LBL_LIST_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_LIST_EMAIL' => 'විද්යුත් තැපෑල',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_OF' => 'පිලිබඳ',
    'LBL_LIST_PHONE' => 'දුරකතන',
    'LBL_LIST_RELATED_TO' => ' සම්බන්දව',
    'LBL_LIST_USER_NAME' => ' පරිශීලක නාමය',
    'LBL_LISTVIEW_NO_SELECTED' => ' ඉදිරියට කිරීම සඳහා අවම වශයෙන් 1 වාර්තා තෝරන්න.',
    'LBL_LISTVIEW_TWO_REQUIRED' => ' ඉදිරියට කිරීම සඳහා අවම වශයෙන් 2 වාර්තා තෝරන්න.',
    'LBL_LISTVIEW_OPTION_SELECTED' => ' Selected Records',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => ' Selected:',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'ඩේවිඩ්',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'ලිවිංස්ටන්',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'ආචාර්ය.',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'කේතය වඳුරු Extraordinaire',
    'LBL_CANCEL' => 'අවලංගු කරන්න',
    'LBL_VERIFY' => 'Verify',
    'LBL_RESEND' => 'නැවතයවන්න',
    'LBL_PROFILE' => 'පැතිකඩ',
    'LBL_MAILMERGE' => 'තැපැල් ඒකාබද්ධ',
    'LBL_MASS_UPDATE' => 'ජනමාධ්ය යාවත්කාලීන',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'ජනමාධ්ය යාවත්කාලීන මෙහෙයුම් සඳහා ලබා ගත හැකි කිසිදු ක්ෂේත්රයක් ඇත',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'ප්රාථමික විද්යුත් ඉවත්',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt in Primary Email',
    'LBL_MEETINGS' => 'රැස්වීම්',
    'LBL_MEETING_GO_BACK' => 'රැස්වීමට ආපසු යන්න',
    'LBL_MEMBERS' => 'සාමාජිකයින්',
    'LBL_MEMBER_OF' => 'මන්ත්රී',
    'LBL_MODIFIED_BY_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'LBL_MODIFIED_USER' => ' පරිශීලක විසින් නවීකරණය කරන ලද',
    'LBL_MODIFIED' => 'ෙවනස්කර',
    'LBL_MODIFIED_NAME' => ' නම වන විට නවීකරණය කරන ලද',
    'LBL_MORE' => 'තව',
    'LBL_MY_ACCOUNT' => 'මගේ සැකසුම්',
    'LBL_NAME' => 'නම',
    'LBL_NEW_BUTTON_KEY' => 'එන්',
    'LBL_NEW_BUTTON_LABEL' => 'සාදන්න',
    'LBL_NEW_BUTTON_TITLE' => 'සාදන්න',
    'LBL_NEXT_BUTTON_LABEL' => 'ඊලඟ',
    'LBL_NONE' => '--කිසිවක් නැත--',
    'LBL_NOTES' => 'සටහන්',
    'LBL_OPPORTUNITIES' => 'අවස්ථා',
    'LBL_OPPORTUNITY_NAME' => 'අවස්ථාව නම',
    'LBL_OPPORTUNITY' => 'අවස්ථාව',
    'LBL_OR' => 'නැතහොත්',
    'LBL_PANEL_OVERVIEW' => 'දළ විශ්ලේෂණය',
    'LBL_PANEL_ASSIGNMENT' => 'අනික්',
    'LBL_PANEL_ADVANCED' => 'MORE INFORMATION',
    'LBL_PARENT_TYPE' => 'මව් වර්ගය',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'තැපැල් කේතය:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'ප්රාථමික ලිපිනය නගරය:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'ප්රාථමික ලිපිනය රට:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ප්රාථමික ලිපිනය තැපැල් සංකේතය:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'ප්රාථමික ලිපිනය රාජ්ය:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'ප්රාථමික ලිපිනය වීදිය 2:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'ප්රාථමික ලිපිනය වීදිය 3:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'ප්රාථමික ලිපිනය වීදිය:',
    'LBL_PRIMARY_ADDRESS' => 'ප්රාථමික ෙමරට ලිපිනය:',

    'LBL_PROSPECTS' => 'අපේක්ෂා පිලිබඳ',
    'LBL_PRODUCTS' => 'නිෂ්පාදන',
    'LBL_PROJECT_TASKS' => 'ව්යාපෘති කර්තව්යයෝ',
    'LBL_PROJECTS' => 'ව්යාපෘති',
    'LBL_QUOTES' => 'මිල කැඳවීම්',

    'LBL_RELATED' => 'ආශ්රිත',
    'LBL_RELATED_RECORDS' => ' සබැඳි වාර්තා',
    'LBL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_REPORTS_TO' => ' වාර්තා කිරීම සඳහා',
    'LBL_REQUIRED_SYMBOL' => ' *',
    'LBL_REQUIRED_TITLE' => ' අත්යවශ්ය ක්ෂේත්ර හඳුන්වනු ලබන්ෙන් ආණ්ඩුෙව් කටයුතු ය',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'හරි',
    'LBL_FULL_FORM_BUTTON_KEY' => ' L',
    'LBL_FULL_FORM_BUTTON_LABEL' => ' පූර්ණ ආකෘතිය',
    'LBL_FULL_FORM_BUTTON_TITLE' => ' පූර්ණ ආකෘතිය',
    'LBL_SAVE_NEW_BUTTON_LABEL' => ' නව සුරකින්න සහ සාදන්න',
    'LBL_SAVE_NEW_BUTTON_TITLE' => ' නව සුරකින්න සහ සාදන්න',
    'LBL_SAVE_OBJECT' => ' සුරකින්න {0}',
    'LBL_SEARCH_BUTTON_KEY' => ' ප්රශ්නය',
    'LBL_SEARCH_BUTTON_LABEL' => 'ගවේෂණය',
    'LBL_SEARCH_BUTTON_TITLE' => 'ගවේෂණය',
    'LBL_FILTER' => 'පෙරහන',
    'LBL_SEARCH' => 'ගවේෂණය',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => ' තව',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => ' වලංගු නොවන ගොනු ආකෘතිය පමණක් පිළිබිඹු ගොනුව උඩුගත කළ හැකිය.',
    'LBL_SELECT_BUTTON_KEY' => ' ටී',
    'LBL_SELECT_BUTTON_LABEL' => ' තෝරන්න',
    'LBL_SELECT_BUTTON_TITLE' => ' තෝරන්න',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => ' ලිපි ලේඛන පිරික්සන්න',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => ' ලිපි ලේඛන පිරික්සන්න',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => ' ටී',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => ' ඇමතුම් තෝරන්න',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => ' ඇමතුම් තෝරන්න',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => ' වාර්තා තෝරන්න',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => ' වාර්තා තෝරන්න',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U',
    'LBL_SELECT_USER_BUTTON_LABEL' => ' තේරීම් පරිශීලක',
    'LBL_SELECT_USER_BUTTON_TITLE' => ' තේරීම් පරිශීලක',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Clear Selection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Clear Selection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => ' ගොනුව තෝරන්න',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => ' ගොනුව තෝරන්න',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Clear File',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Clear File',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => ' තේරීම් පරිශීලක',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => ' තේරීම් පරිශීලක',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => ' පැහැදිලි පරිශීලක',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => ' පැහැදිලි පරිශීලක',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => ' ගිණුම තෝරන්න',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => ' ගිණුම තෝරන්න',
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
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => ' ඇමතුම් තෝරන්න',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => ' ඇමතුම් තෝරන්න',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Clear Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Clear Contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Select Team',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Select Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Clear Team',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Clear Team',
    'LBL_SERVER_RESPONSE_RESOURCES' => ' මෙම පිටුව ඉදිකිරීමෙහිලා යොදා සම්පත් (ගොනු විමසුම්)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => ' තත්පර.',
    'LBL_SERVER_RESPONSE_TIME' => ' සර්වර් ප්රතිචාර දැක්වීමේ කාලය:',
    'LBL_SERVER_MEMORY_BYTES' => ' බයිට්',
    'LBL_SERVER_MEMORY_USAGE' => ' සර්වර් මතක භාවිතය: {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => ' භාවිතය: - මොඩියුලය: {0} - ක්රියාව: {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => ' සර්වර් සමනළ මතක භාවිතය: {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'බෙදාහැරීමේ ලිපිනය',
    'LBL_SHOW' => 'පෙන්වන්න',
    'LBL_STATE' => 'රජයේ:',
    'LBL_STATUS_UPDATED' => 'මේ සඳහා ඔබේ තත්වය යාවත්කාලීන කර ඇත!',
    'LBL_STATUS' => 'තත්වය:',
    'LBL_STREET' => 'වීදිය',
    'LBL_SUBJECT' => ' විෂය',

    'LBL_INBOUNDEMAIL_ID' => ' රට තුළට පැමිණෙන සංචාරකයින්ට විද්යුත් හැඳුනුම්පතක්',

    'LBL_SCENARIO_SALES' => 'විකුණුම්',
    'LBL_SCENARIO_MARKETING' => 'අලෙවි',
    'LBL_SCENARIO_FINANCE' => 'මුදල්',
    'LBL_SCENARIO_SERVICE' => 'සේවය',
    'LBL_SCENARIO_PROJECT' => 'Project Management',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'This scenario facilitates the management of sales items',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'This scenario facilitates the management of marketing items',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'This scenario facilitates the management of finance related items',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'This scenario facilitates the management of service related items',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'This scenario facilitates the management of project related items',

    'LBL_SYNC' => 'සමමුහූර්ත',
    'LBL_TABGROUP_ALL' => 'සියලු',
    'LBL_TABGROUP_ACTIVITIES' => 'ක්‍රියාකාරකම්',
    'LBL_TABGROUP_COLLABORATION' => ' එක්ව',
    'LBL_TABGROUP_MARKETING' => 'අලෙවි',
    'LBL_TABGROUP_OTHER' => 'වෙනත්',
    'LBL_TABGROUP_SALES' => 'විකුණුම්',
    'LBL_TABGROUP_SUPPORT' => ' සහාය',
    'LBL_TASKS' => ' කාර්යයන්',
    'LBL_THOUSANDS_SYMBOL' => ' කේ',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Undelete',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Undelete',
    'LBL_UNDELETE_BUTTON' => 'Undelete',
    'LBL_UNDELETE' => 'Undelete',
    'LBL_UNSYNC' => ' Unsync',
    'LBL_UPDATE' => ' යාවත්කාලීන',
    'LBL_USER_LIST' => ' පරිශීලක ලැයිස්තුව',
    'LBL_USERS' => 'පරිශිලකයින්',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'පවත්නා විද්යුත් තැපැල් ප්රවේශය සඳහා පරීක්ෂා කරමින් ...',
    'LBL_VERIFY_PORTAL_NAME' => 'පවත්නා බිහිදොර නම පරීක්ෂා කරමින් ...',
    'LBL_VIEW_IMAGE' => ' දැක්ම',

    'LNK_ABOUT' => ' ගැන',
    'LNK_ADVANCED_FILTER' => 'Advanced Filter',
    'LNK_BASIC_FILTER' => 'Quick Filter',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_QUICK_FILTER' => 'Quick Filter',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => ' සියල්ල පෙන්වන්න',
    'LNK_CLOSE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modify current filter',
    'LNK_SAVED_VIEWS' => ' පිරිසැලසුම විකල්ප',
    'LNK_DELETE' => 'මකා',
    'LNK_EDIT' => 'සංස්කරණය',
    'LNK_GET_LATEST' => 'නවතම ලබා ගන්න',
    'LNK_GET_LATEST_TOOLTIP' => 'නවතම අනුවාදය සමඟ ආදේශ කරන්න',
    'LNK_HELP' => 'උදව්',
    'LNK_CREATE' => 'සාදන්න',
    'LNK_LIST_END' => ' අවසානය',
    'LNK_LIST_NEXT' => 'ඊලඟ',
    'LNK_LIST_PREVIOUS' => ' කලින්',
    'LNK_LIST_RETURN' => ' ලැයිස්තුව වෙත ආපසු',
    'LNK_LIST_START' => 'අරඹන්න',
    'LNK_LOAD_SIGNED' => 'සයින්',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'අත්සන් ලේඛනය සමඟ ආදේශ කරන්න',
    'LNK_PRINT' => 'මුද්රණය',
    'LNK_BACKTOTOP' => ' ආපසු මුලට',
    'LNK_REMOVE' => 'ඉවත් කරන්න',
    'LNK_RESUME' => ' අරඹන්න',
    'LNK_VIEW_CHANGE_LOG' => ' දැක්ම වෙනස් ලොග්',

    'NTC_CLICK_BACK' => 'බොත්තම බ්රව්සරය නැවත ක්ලික් කරන්න සහ එම වරද නිවැරදි කරන්න.',
    'NTC_DATE_FORMAT' => '(දැ ෙ-මි.මී.-dd)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'ඔබ තෝරාගත් වාර්තාව (ව) මැකීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'NTC_TEMPLATE_IS_USED' => 'මෙම සැකිල්ලට අවම වශයෙන් එක් විද්යුත් තැපැල් අලෙවිකරණ වාර්තා භාවිතා වේ. ඔබ එය ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාස ද?',
    'NTC_TEMPLATES_IS_USED' => 'The following templates are used in email marketing records. Are you sure you want to delete them?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'ඔබ මෙම වාර්තාව මැකීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'NTC_DELETE_CONFIRMATION_NUM' => 'ඔබ මැකීමට අවශ්ය බව ඔබට විශ්වාසද',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'ඔබ යාවත්කාලීන කිරීමට අවශ්ය බව ඔබට විශ්වාසද',
    'NTC_DELETE_SELECTED_RECORDS' => 'තෝරාගත් වාර්තාව (ව)?',
    'NTC_LOGIN_MESSAGE' => 'ඔබගේ පරිශීලක නාමය හා මුර පදය ඇතුලත් කරන්න.',
    'NTC_NO_ITEMS_DISPLAY' => 'කිසිවක් නැත',
    'NTC_REMOVE_CONFIRMATION' => 'ඔබ මෙම සම්බන්ධතාවය ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද? පමණක් ඇති සම්බන්ධය ඉවත් කරනු ලැබේ. මෙම වාර්තා මකා දමන කළ නොහැකි වනු ඇත.',
    'NTC_REQUIRED' => ' අත්යවශ්ය ක්ෂේත්ර හඳුන්වනු ලබන්ෙන් ආණ්ඩුෙව් කටයුතු ය',
    'NTC_TIME_FORMAT' => '-24:00:00',
    'NTC_WELCOME' => 'ඔබ සාදරයෙන් පිළිගනිමු',
    'NTC_YEAR_FORMAT' => '(දැ ෙ)',
    'WARN_UNSAVED_CHANGES' => '"ඔබ වාර්තාව ඉදිරිපත් විය හැක යම් වෙනස් කිරීමකින් තොරව මෙම වාර්තාව යන්න ගැන ය. ඔබ මෙම වාර්තාව ඉවතට ගමන් කිරීමට අවශ්ය බව ඔබට විශ්වාස ද?"',
    'ERROR_NO_RECORD' => 'වාර්තා දැන ගැනීම දෝෂ. මෙම වාර්තාව මකා දැමීමට ඉඩ ඇත හෝ ඔබ අවශ්යවේ කිරීමට බලය කළ නොහැකි විය හැක.',
    'WARN_BROWSER_VERSION_WARNING' => ' "<b',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => ' "<b',
    'ERROR_TYPE_NOT_VALID' => 'දෝෂයකි. මෙම වර්ගය වලංගු නොවේ.',
    'ERROR_NO_BEAN' => ' බෝංචි ලබා ගැනීමට නොහැකි විය.',
    'LBL_DUP_MERGE' => 'අනු පිටපත් සොයන්න',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'මෙම නිකුතුව කළමනාකරණය',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'සඳහා මෙම නිකුතුව කළමනාකරණය',
    // Ajax status strings
    'LBL_LOADING' => 'පූරණය වෙමින්...',
    'LBL_SEARCHING' => 'සොයමින්...',
    'LBL_SAVING_LAYOUT' => ' පිරිසැලසුම සුරකිමින් ...',
    'LBL_SAVED_LAYOUT' => ' පිරිසැලසුම සුරක්ෂිත කර ඇත.',
    'LBL_SAVED' => ' දිවි ගළවාගත්',
    'LBL_SAVING' => ' සුරකිමින්',
    'LBL_DISPLAY_COLUMNS' => ' විදහා තීර',
    'LBL_HIDE_COLUMNS' => ' තීර සඟවන්න',
    'LBL_SEARCH_CRITERIA' => 'Search Criteria',
    'LBL_SAVED_VIEWS' => 'Saved Views',
    'LBL_PROCESSING_REQUEST' => 'සැකසුම් ..',
    'LBL_REQUEST_PROCESSED' => 'හරි',
    'LBL_AJAX_FAILURE' => ' Ajax අසාර්ථක',
    'LBL_MERGE_DUPLICATES' => 'ඒකාබද්ධ කරන්න',
    'LBL_SAVED_FILTER_SHORTCUT' => 'මාගේ පෙරහන්',
    'LBL_SEARCH_POPULATE_ONLY' => ' ඉහත සෙවුම් පෝරමය භාවිතා සෝදිසි සිදු',
    'LBL_DETAILVIEW' => 'විස්තර බලන්න',
    'LBL_LISTVIEW' => 'ලැයිස්තුව බලන්න',
    'LBL_EDITVIEW' => 'සංස්කරණය කරන්න බලන්න',
    'LBL_BILLING_STREET' => 'වීදිය:',
    'LBL_SHIPPING_STREET' => 'වීදිය:',
    'LBL_SEARCHFORM' => 'සොයන්න ආකෘතිය',
    'LBL_SAVED_SEARCH_ERROR' => ' මෙම මතය සඳහා නමක් ලබා දෙන්න.',
    'LBL_DISPLAY_LOG' => ' විදහා ලොග්',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => ' පද්ධතිය',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => ' සැසිය සබඳතාව කල් ඉකුත් විය',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => ' ඔබගේ සැසිය 2 විනාඩි සබඳතාව කල් ඉකුත් විය කිරීමට නියමිතය. ඔබගේ නිර්මාණ කරන්න.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'ඔබගේ සැසිය කල් ඉකුත් වී ඇත.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'රැස්වීම',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'ඇමතුම',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => ' කාල:',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => ' පිහිටීම:',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => ' විස්තරය:',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'තත්වය:',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => ' සම්බන්දව:',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'අවස්ථාවට',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'අවස්ථාවට පිහිටුවා නැත.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'ස්ථානය සකස් කර නැත.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'ආරම්භක දිනය සඳහන් කර නොමැත.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'වූ ප්රතිඵල ලැබුනි නැත.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'No results found... Perhaps change your search criteria and try again?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'ප්රතිඵල සඳහා සොයාගැනීමට නොමැත <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'නිර්මාණය <item1> නව වැනි <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'or change your search criteria',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'You currently have no records saved. <item2> or <item3> one now.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'මගේ ප්රියතම දැන්වීම් එකතු කරන්න',
    'LBL_CREATE_CONTACT' => 'ඇමතුම් සාදන්න',
    'LBL_CREATE_CASE' => ' නඩු සාදන්න',
    'LBL_CREATE_NOTE' => 'සටහන නිර්මාණය',
    'LBL_CREATE_OPPORTUNITY' => 'ආවස්ථික නිර්මාණය',
    'LBL_SCHEDULE_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LBL_SCHEDULE_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LBL_CREATE_TASK' => ' කාර්ය සාධක නිර්මාණය',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'ආකෘතිය උත්පාදනය',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Save Web Form',
    'LBL_AVAILABLE_FIELDS' => 'භාවිතයට ගත හැකි ෆීල්ඩ්ස්',
    'LBL_FIRST_FORM_COLUMN' => 'First Form Column',
    'LBL_SECOND_FORM_COLUMN' => 'Second Form Column',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Missing required field: Assigned to',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Missing required field: Related campaign',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Web form to create ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Submitting this form will create ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'සියලුම ෆීල්ඩ්ස් එකතු කරන්න',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Reset all Fields',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'සියලුම ෆීල්ඩ්ස් ඉවත් කරන්න',
    'LBL_NEXT_BTN' => 'ඊලඟ',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'පහත සඳහන් සහාය, පිළිඹිබු ගණය ඇමුණුම් පමණක් කාවැද්දූ කළ හැක: JPG එකේ PNG.',
    'LBL_TRAINING' => 'Support Forum',
    'ERR_MSSQL_DB_CONTEXT' => 'වෙනස් දත්ත සමුදාය සන්දර්භය',
    'ERR_MSSQL_WARNING' => 'අවවාදයයි:',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'දෝෂය: ගොනුව [[file]] අතුරුදහන්. කිසිදු අදාළ HTML ගොනුව හමු නො වූ බැවින් නිර්මාණය කිරීමට නොහැකි විය.',
    'ERR_CANNOT_FIND_MODULE' => 'දෝෂය: මොඩියුලය [මොඩියුලය] නොපවතියි.',
    'LBL_ALT_ADDRESS' => 'වෙනත් ෙමරට ලිපිනය:',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'දෝෂය: තර්ක ක අසමාන සංඛ්යාව displayParams සැරසී අංග \ සඳහා \ ප්රධාන \ සහ \ පිටපතක් සඳහා පවතී.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'ජනරාල්',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'පෙරහන්',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'පමණක් මගේ අයිතම',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'සිරැසිය',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'විදහා පේළි',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'ඔබ ඔබේ පරිපාලක විසින් SuiteCRM Dashlets උපරිම සංඛ්යාව ළඟා වී තිබෙනවා. වැඩි එකතු කිරීමට SuiteCRM Dashlet ඉවත් කරන්න.',
    'LBL_ADDING_DASHLET' => ' SuiteCRM Dashlet එක් කරමින් ...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet එකතු',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'ඔබ මෙම SuiteCRM Dashlet ඉවත් කිරීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_REMOVING_DASHLET' => ' SuiteCRM Dashlet ඉවත් ...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet ඉවත්',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'පූරණය පිටුව කරුණාකර රැඳී සිටින්න ...',

    'LBL_RELOAD_PAGE' => 'කරුණාකර <a href="javascript: window.location.reload()">කවුළුව පූරණය</a> මෙම SuiteCRM Dashlet භාවිතා කිරීමට.',
    'LBL_ADD_DASHLETS' => 'Dashlets එකතු කරන්න',
    'LBL_CLOSE_DASHLETS' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_OPTIONS' => 'විකල්ප',
    'LBL_1_COLUMN' => '1 වැනි තීරුව',
    'LBL_2_COLUMN' => '2 වැනි තීරුව',
    'LBL_3_COLUMN' => '3 වැනි තීරුව',
    'LBL_PAGE_NAME' => 'පිටුව නම',

    'LBL_SEARCH_RESULTS' => 'ප්රතිඵල සොයන්න',
    'LBL_SEARCH_MODULES' => 'මොඩියුල',
    'LBL_SEARCH_TOOLS' => 'මෙවලම්',
    'LBL_SEARCH_HELP_TITLE' => 'සොයන්න ඉඟි',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'මෙයට රූප',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'වමේ සිට පිටපත් ලිපිනය:',
    'LBL_SAVE_AND_CONTINUE' => 'සුරැකීමට සහ දිගටම',

    'LBL_SEARCH_HELP_TEXT' => '<p> <br /> <strong> Multiselect විශ්ලේෂණයක් තෝරා ගැනීමට වටිනාකම් මත ක්ලික් කරන්න </ strong> </ p> <ul> <li> පාලනය </ li> <li> ඔබන්න පසුව Ctrl-ක්ලික් කරන්න එතුමාගේ දැඩි. & nbsp; තෝරා බහු. මැක් පරිශීලකයන් CMD-ක්ලික් කරන්න භාවිතා </ li> <li> දෙකක් ගුණාංග, එතුමාගේ දැඩි අතර සෑම වටිනාකම් තෝරා. පළමු වටිනාකම් සහ එතුමාගේ දැඩි ක්ලික් කරන්න ඉන් පසු මාරු-ක්ලික් කරන්න පසුගිය අගය </ li> </ ul> <p> <strong> ගැඹුරින් සොයන්න සහ පිරිසැලසුම විකල්ප </ strong> <br> <b> සුරකින සොයන්න සහ භාවිතා කිරීම. පිරිසැලසුම </ b> විකල්පය, ඔබ ඉක්මනින් අනාගතයේදී අපේක්ෂිත සෙවුම් ප්රතිඵල ලබා ගැනීම සඳහා, සොයන්න පරාමිතීන් සහ / හෝ චාරිත්රයක් ලැයිස්තුව බලන්න සැකැස්ම මාලාවක් ඉතිරි කර ගත හැක. ඔබ අභිරුචි සෙවිලි සහ පිරිසැලසුම් මෙඩි ඉතිරි කර ගත හැක. පසුගිය ලැයිස්තුවේ ඉහලින්ම පෙනී ගැලවීම සොයන්න පටවා සමග. <br> <br> තෝරා ගැනීමට සඟවන්න තීර සහ විදහා තීර පෙට්ටි භාවිතා කරන්න, ලැයිස්තුෙව් දැක්ම සැකැස්ම රිසි කිරීම සඳහා සියළු සුරකින සෝදිසි කිරීම්, දිවි ගළවාගත් දී ලැයිස්තුව සෙවුම නම පෙනී සෙවීම් ප්රතිඵල තුළ ප්රදර්ශනය කිරීම සඳහා ක්ෂේත්ර. උදාහරණයක් ලෙස, ඔබ බැලීමට හෝ සැඟවීමට එවැනි වාර්තා නාමය ලෙස විස්තර, හා පවරා පරිශීලක, සහ සෙවීම් ප්රතිඵල තුළ කණ්ඩායම පවරා හැක., දැක්ම ලැයිස්තුගත කිරීමට තීරුවක් එක් වූ සඟවන්න තීර ලැයිස්තුවෙන් ක්ෂේත්රයේ තෝරා විදහා තීර ලැයිස්තුවට එය චලනය කිරීමට වම් ඊතලය භාවිතා කිරීම සඳහා. ලැයිස්තුව බලන්න සිට තීරුව ඉවත් කිරීම සඳහා, දර්ශණ තීර ලැයිස්තුව එය තෝරාගත සහ සඟවන්න තීර ලැයිස්තුවට එය චලනය කිරීමට ඇති අයිතිය ඊතල භාවිතා කරන්න. <br> <br> ඔබ සැකැස්ම සැකසුම් සුරකින්න නම්, ඔබ ඕනෑම ඒවා පූර්ණය කිරීමට හැකි වනු ඇත. මෙම චාරිත්රය සැකැස්ම තුළ සෙවුම් ප්රතිඵල බැලීම සඳහා <br> <br> සෝදිසි සහ / හෝ සැකැස්ම සුරැකීමට සහ යාවත්කාලීන කිරීම සඳහා කාලය: <සා.පෙළ> <li> <b> ලෙස මෙම සෝදිසි සුරකින්න දී සෙවුම් ප්රතිඵල සඳහා නමක් ඇතුළත් කරන්න </ b> ක්ෂේත්රය සහ.ඒ නම දැන් දිවි ගළවාගත් දී ප්රදර්ශනය <b> සුරකින්න </ b> ක්ලික් කරන්න <b> පැහැදිලි </ b> බොත්තම යාබදව ලැයිස්තුව සෙවුම කරන්න. </ li> <li> ගැලවීම සොයන්න බැලීම මෙම දිවි ගළවාගත් සෙවුම් ලැයිස්තුවෙන් එය තෝරන්න. සෙවුම් ප්රතිඵල ලැයිස්තුව බලන්න දී ප්රදර්ශනය කර ඇත. </ Li> <li>, එය ගැලවීම සොයන්න ගුණ යාවත්කාලීන ලැයිස්තුව සිට ගැලවීම සොයන්න තෝරා, උසස් සොයන්න ප්රදේශයේ නව සෙවුම් නිර්ණායක සහ / හෝ සැකැස්ම විකල්ප ඇතුල් කිරීමට, සහ දිවි ගළවාගත් එය තෝරා, <b> යාවත්කාලීන </ b> <b> වත්මන් සොයන්න </ b> වෙනස් කරන්න. </ li> <li> ගැලවීම සොයන්න මකා ගැනීම සඳහා ලබන ක්ලික් කරන්න <b> Delete ක්ලික් කරන්න, ලැයිස්තුව සෙවුම < / b> <b> ආ> හරි </ b> මකා දැමීමට තහවුරු කිරීමට <වත්මන් සොයන්න </ b> වෙනස් කරන්න, පසුව ක්ලික් කරන්න. </ li> </ සා.පෙළ> <p> <strong> ඉඟි </ strong ලබන > <br> ඔබ ඔබේ සෙවුම තව පුළුල් කරන්න පුළුවන් b වෙනුවට ක්රියාකරු ලෙස% භාවිතා කිරීමෙන්. උදාහරණයක් ලෙස හුදෙක් "ඇපල්" සමාන ප්රතිඵල සොයමින් ඔබ වචනය ඇපල් සමඟ ආරම්භ නමුත් වෙනත් අකුරු අඩංගු විය හැකි බව සියලු ප්රතිඵල ගැලපෙන කරන "ඇපල්%" ඔබගේ සෙවුම වෙනස් විය. </ P>',

    //resource management
    'ERR_QUERY_LIMIT' => 'දෝෂය: $ මොඩියුලයට මොඩියුලය සඳහා ළඟා $ සීමාව විමසුම් සීමාව.',
    'ERROR_NOTIFY_OVERRIDE' => 'දෝෂය: සම්පත් Observer-> දැනුම් () ඉක්මවනු කළ යුතුය.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'දෝෂය: පාරදත්ත ගොනුව නොපවතියි හිස් හෝ ගොනුව නිසා මොනිටරය නිර්මාණය කිරීමට නොහැකි විය.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'දෝෂය: ඉල්ලා නාමය වින්යාසගත තිරය පවතී',
    'ERR_UNDEFINED_METRIC' => 'දෝෂය: නිර්වචනය නොකළ මෙට්රික් වටිනාකමක් ඇති කිරීමට නොහැකි විය',
    'ERR_STORE_FILE_MISSING' => 'දෝෂය: ප්රදර්ශනාගාරය ක්රියාත්මක ගොනුව සොයා ගත නොහැකි විය',

    'LBL_MONITOR_ID' => 'මොනිටරය Id',
    'LBL_USER_ID' => 'පරිශීලක ID',
    'LBL_MODULE_NAME' => 'මොඩියුලය නම',
    'LBL_ITEM_ID' => 'අයිතමය අංකය',
    'LBL_ITEM_SUMMARY' => 'අයිතමය සාරාංශය',
    'LBL_ACTION' => 'කටයුතු',
    'LBL_SESSION_ID' => 'සැසිය Id',
    'LBL_BREADCRUMBSTACK_CREATED' => 'පියසටහන් අටළු පරිශීලක Id {0} සඳහා නිර්මාණය',
    'LBL_VISIBLE' => 'වාර්තා දෘශ්යමාන',
    'LBL_DATE_LAST_ACTION' => 'පසුගිය ක්රියාකාරී දිනය',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'පෙර නො වේ',
    'MSG_IS_MORE_THAN' => 'වඩා වැඩි යමක්',
    'MSG_SHOULD_BE' => 'විය යුතුයි',
    'MSG_OR_GREATER' => 'ෙහෝ ඊට වඩා වැඩි',

    'LBL_LIST' => 'ලැයිස්තුව',
    'LBL_CREATE_BUG' => ' බග් සාදන්න',

    'LBL_OBJECT_IMAGE' => 'වස්තුවක් රූපය',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'දිනය තෝරන්න',

    'LBL_VALIDATE_RANGE' => 'වලංගු පරාසය තුළ නොවේ',
    'LBL_CHOOSE_START_AND_END_DATES' => 'එය ආරම්භ වන හා අවසාන දිනය පරාසය දෙකම තෝරා ගන්න',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'ආරම්භක හා පරාසය සටහන් ඇතුළත් කිරීම් අවසන් දෙකම තෝරා ගන්න',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'සියලු',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'දෝෂය: බෝංචි පරාමිතිය අරාව ගණන් ප්රතිඵල පිළිබඳ Array ගණන් නොගැලපේ.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'දෝෂය: මොඩියුලය සඳහා අතුරුදහන් සිතියම්ගත ප්රවේශය.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'දෝෂය: {0} සබැදුම සඳහා දත්ත ලබා ගැනීමට නොහැකි විය. මෙම සේවාව දැනට ඇද හැලුණු විය හැකිය හෝ වින්යාස සැකසුම් වලංගු විය හැක. සබැදුම දෝෂ පණිවුඩය: ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'IIS / FastCGI භාවිත කරමින භාවිතා ප්රශස්ත අත්දැකීම් සඳහා, ඔබේ php.ini ගොනුව තුල 0 fastcgi.logging කළේය.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'නම',
    'LBL_COLLECTION_PRIMARY' => 'ප්රාථමික',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Empty required field',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'පවරා',
    'LBL_DESCRIPTION' => 'විස්තරය',

    'LBL_YESTERDAY' => 'ඊයේ',
    'LBL_TODAY' => 'අද දින',
    'LBL_TOMORROW' => 'හෙට',
    'LBL_NEXT_WEEK' => 'ලබන සතිය',
    'LBL_NEXT_MONDAY' => 'ලබන සඳුදා',
    'LBL_NEXT_FRIDAY' => 'ලබන සිකුරාදා',
    'LBL_TWO_WEEKS' => 'සති දෙකක්',
    'LBL_NEXT_MONTH' => 'ලබන මාසයේ',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'ලබන මස පළමු වන දින',
    'LBL_THREE_MONTHS' => 'මාස තුනක්',
    'LBL_SIXMONTHS' => 'මාස හයක්',
    'LBL_NEXT_YEAR' => 'ලබන වසර',

    //Datetimecombo fields
    'LBL_HOURS' => 'පැය',
    'LBL_MINUTES' => 'විනාඩි',
    'LBL_MERIDIEM' => 'Meridiem',
    'LBL_DATE' => 'දිනය',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'වාහන-ප්රතිපූරණය කරන්න',

    'LBL_DURATION_DAY' => 'දවස',
    'LBL_DURATION_HOUR' => 'පැය',
    'LBL_DURATION_MINUTE' => 'විනාඩි',
    'LBL_DURATION_DAYS' => 'දවස්',
    'LBL_DURATION_HOURS' => 'Duration Hours',
    'LBL_DURATION_MINUTES' => 'Duration Minutes',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'මාසික තෝරන්න',
    'LBL_ENTER_YEAR' => 'අවුරුදු ඇතුලත් කරන්න',
    'LBL_ENTER_VALID_YEAR' => 'වලංගු වසරේ ඇතුලත් කරන්න',

    //File write error label
    'ERR_FILE_WRITE' => 'දෝෂය: ගොනුව {0} ලිවීමට නොහැකි විය. පද්ධතිය හා වෙබ් සේවාදායකය අවසර පරික්ෂා කර බලන්න.',
    'ERR_FILE_NOT_FOUND' => 'දෝෂය: ගොනුව {0} පූරණය කල නොහැක. පද්ධතිය හා වෙබ් සේවාදායකය අවසර පරික්ෂා කර බලන්න.',

    'LBL_AND' => 'සහ',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'File on External Source',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'ආරක්ෂාව',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '
"මෙම ආනයනය සඳහා සූදානම් බව ගොනුවේ අපේක්ෂා අන්තර්ගතයන් උදාහරණයක් සපයන සාම්පලයක් ආනයන ගොනුවකි."
"ගොනුව ක්ෂේත්රයේ සුදුසුකම් ලෙස ද්විත්ව මිල කැඳවීම් යොදාගෙන, කොමා සකස් කරතිබෙන .csv ගොනුවකි."

"මෙම ශීර්ෂ පේළිය ගොනුව තුල ඉහල බොහෝ පේළියේ වන අතර, ඔබ අයදුම්පත ඔවුන් දැකීමට කැමති ලෙස ක්ෂේත්රයේ ලේබල් අඩංගු වේ."
"මෙම ලේබල අයදුම් ක්ෂේත්ර සඳහා ගොනුව තුල දත්ත සිතියම් ගත කිරීම සඳහා භාවිතා වේ."

"සටහන්: දත්ත සමුදාය නම් ද ශීර්ෂ පේළිය භාවිත කළ හැකි ඔබ ආනයනය කිරීමට දත්ත ක අපනයනය ලැයිස්තුව ලබා phpMyAdmin හෝ තවත් දත්ත සමුදාය මෙවලමක් භාවිත කිරීම නිසා මෙය ප්රයෝජනවත් වේ.."
"ආනයන ක්රියාවලිය ශීර්ෂ පේළිය මත පදනම් සුදුසු ක්ෂේත්රයන් දත්ත තරග ලෙස තීරුව සඳහා තීරණාත්මක නොවේ."


"පහත සඳහන් කරන්න, අච්චුවක් ලෙස මෙම ගොනුව භාවිතා කිරීම සඳහා:"
"1. දත්ත සාම්පල පේළි ඉවත් කරන්න"
"2. දැන් ඔබ කියවන බව උදව් පාඨය ඉවත් කරන්න"
"සුදුසු පේළිවලින් සහ තීරුවලින් බවට 3. ආදාන ඔබේ ම දත්ත"
"ඔබේ පද්ධතිය මත ප්රසිද්ධ ස්ථානයක ගොනුව සුරකින්න 4."
"5. ඉල්ලුම් දී ක්රියා මෙනුවෙහි සිට ආනයන විකල්පය මත ක්ලික් කරන්න හා උඩුගත කිරීමට ගොනුව තෝරා"
   ',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'වත්මන් නිවේදන නැත',
    'LBL_ALT_SORT_DESC' => 'හරිම ජාතකය',
    'LBL_ALT_SORT_ASC' => 'වර්ග කර ඇත යද්දි',
    'LBL_ALT_SORT' => 'වර්ග',
    'LBL_ALT_SHOW_OPTIONS' => 'පෙන්වන්න විකල්ප',
    'LBL_ALT_HIDE_OPTIONS' => 'විකල්ප සඟවන්න',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'වම් පැත්තේ ලැයිස්තුවට තෝරාගත් ප්රවේශය ගෙන යන්න',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'දකුණු පස ඇති ලැයිස්තුවට තෝරාගත් ප්රවේශය ගෙන යන්න',
    'LBL_ALT_MOVE_COLUMN_UP' => 'පෙන්වන ලැයිස්තුව සඳහා තෝරාගත් ප්රවේශය දක්වා ඉවත්',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'පෙන්වන ලැයිස්තුව සඳහා තෝරාගත් ප්රවේශය පහළට ගෙන',
    'LBL_ALT_INFO' => 'විස්තර',
    'MSG_DUPLICATE' => 'මෙම {0} ඔබ නිර්මාණය කිරීමට නියමිත වාර්තා දැනටමත් පවතී බව {0} වාර්තා අනුපිටපතක් විය හැකිය. {1} සමාන නම් සහිත වාර්තා පහත ලැයිස්තු ගත කර ඇත. {1} මෙම නව {0} බිහි, හෝ පවතින {0} පහත ලැයිස්තු ගත කර තෝරා ගැනීමට Create ක්ලික් කරන්න <br>.',
    'MSG_SHOW_DUPLICATES' => 'මෙම {0} ඔබ නිර්මාණය කිරීමට නියමිත වාර්තා දැනටමත් පවතී බව {0} වාර්තා අනුපිටපතක් විය හැකිය. සමාන නම් සහිත {1} වාර්තා පහත ලැයිස්තු ගත කර ඇත. මෙම නව {0} බිහි හෝ {0} නිර්මාණය නොකර මොඩියුලය නැවත අවලංගු කරන්න ක්ලික් කරන්න Save ක්ලික් කරන්න.',
    'LBL_EMAIL_TITLE' => 'විද්යුත් තැපැල් ලිපිනය',
    'LBL_EMAIL_OPT_TITLE' => 'ඊ-තැපැල් ලිපිනයක් මූලොපායක්',
    'LBL_EMAIL_INV_TITLE' => 'ඊ-මේල් ලිපිනය වලංගු',
    'LBL_EMAIL_PRIM_TITLE' => 'Make Primary Email Address',
    'LBL_SELECT_ALL_TITLE' => 'සියල්ල තෝරන්න',
    'LBL_SELECT_THIS_ROW_TITLE' => 'මෙම පේළිය තෝරන්න',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'දෝෂය: දෝෂයක් උඩුගත තුළ ඇති විය. දෝෂ කේතය: {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'දෝෂය: දෝෂයක් උඩුගත තුළ ඇති විය. දෝෂ කේතය: {0} - {1}. මෙම upload_maxsize {2} වේ',
    'UPLOAD_ERROR_HOME_TEXT' => 'දෝෂය: දෝෂයක් ඔබගේ උඩුගත තුළ තිබුණේ උදව් සඳහා පරිපාලක අමතන්න.',
    'UPLOAD_MAXIMUM_EXCEEDED' => '{1} බයිට්: උඩුගත ප්රමාණය ({0} බයිට්) අනුමත උපරිම ඉක්මවා',
    'UPLOAD_REQUEST_ERROR' => 'දෝෂයක් හටගෙන ඇත. ඔබගේ පිටුව refresh කර නැවත උත්සාහ කරන්න.',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'මම',
    'LBL_EDIT_BUTTON_LABEL' => 'සංස්කරණය',
    'LBL_EDIT_BUTTON_TITLE' => 'සංස්කරණය',
    'LBL_DUPLICATE_BUTTON_KEY' => 'ඔබ',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'අනුපිටපත්',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'අනුපිටපත්',
    'LBL_DELETE_BUTTON_KEY' => 'ඈ',
    'LBL_DELETE_BUTTON_LABEL' => 'මකා',
    'LBL_DELETE_BUTTON_TITLE' => 'මකා',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'BULK ACTION',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'කටයුතු',
    'LBL_SAVE_BUTTON_KEY' => 'වූ',
    'LBL_SAVE_BUTTON_LABEL' => 'සුරකින්න',
    'LBL_SAVE_BUTTON_TITLE' => 'සුරකින්න',
    'LBL_CANCEL_BUTTON_KEY' => 'මම',
    'LBL_CANCEL_BUTTON_LABEL' => 'අවලංගු කරන්න',
    'LBL_CANCEL_BUTTON_TITLE' => 'අවලංගු කරන්න',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ERR_CONNECTOR_NOT_ARRAY' => '{0} දී සම්බන්ධකය අරා වැරදි අර්ථ හෝ හිස් හා භාවිතා කළ නොහැකි වී ',
    'ERR_SUHOSIN' => 'උඩුගත ධාරාව Suhosin විසින් වාරණය කොට ඇති අතර, එක් & quot කරුණාකර, & quot උඩුගත සහ, suhosin.executor.include.whitelist (වැඩිදුර තොරතුරු සඳහා suitecrm.log බලන්න) වෙත',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'සේවාදායකය වෙතින් නරක ප්රතිචාරය',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'උපුටා',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'විකුණුම් මිල',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'අතින්',
        '5' => 'සෑම විනාඩි 5',
        '15' => 'සෑම විනාඩි 15 ක්',
        '30' => 'සෑම විනාඩි 30 ක්',
        '60' => 'සෑම පැය',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'ඒ මතක් හිස් හෝ වැරදි වේ.',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'මතක් උත්පතන හෝ ඊ-එක්කෝ සඳහා පිහිටුවා නැත.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'මතක් නෑ ආරාධිත අමුත්තන් ද සහභාගී වූහ.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Reminder doesn\'t include any invitees, do you want to remove the reminder?',
    'LBL_DELETE_REMINDER' => 'Delete Reminder',
    'LBL_OK' => 'Ok',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choose columns',
    'LBL_COLUMN_CHOOSER' => 'Column Chooser',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Save changes',
    'LBL_DISPLAYED' => 'Displayed',
    'LBL_HIDDEN' => 'සඟවා',
    'ERR_EMPTY_COLUMNS_LIST' => 'At least, one element required',

    'LBL_FILTER_HEADER_TITLE' => 'පෙරහන',

    'LBL_CATEGORY' => 'වර්ගය',
    'LBL_LIST_CATEGORY' => 'වර්ගය',
    'ERR_FACTOR_TPL_INVALID' => 'Factor Authentication message is invalid, please contact to your administrator.',
    'LBL_SUBTHEMES' => 'ස්ටයිල්',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Dawn',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'දවස',
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
    'LBL_OPT_IN_TITLE' => 'Opt In',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Confirmed Opt In Date',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Confirmed Opt In Sent Date',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Confirmed Opt In Fail Date',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirm Opt In Token',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Opt In Email Template is not configured. Please set up in email settings.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'Opt In requires the email to be related to Account/Contact/Lead/Target',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Non-Inheritable Group',
    'LBL_PRIMARY_GROUP' => "ප්රාථමික සමූහ",

    // footer
    'LBL_SUITE_TOP' => ' ආපසු මුලට',
    'LBL_SUITE_SUPERCHARGED' => 'SuiteCRM මරණයන්',
    'LBL_SUITE_POWERED_BY' => 'SugarCRM වන විට Powered',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'This program is free software; you can redistribute it and/or modify it under the terms of the GNU Affero General Public License version 3 as published by the Free Software Foundation, including the additional permission set forth in the source code header.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'මුරපදය යළි පිහිටුවන්න',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Send Confirm Opt In Email',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirm Opt In Email sending only for Accounts/Contacts/Leads/Prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'Confirm Opt In Email sending is disabled, enable Confirm Opt In option in Email Settings or contact your Administrator.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Confirm Opt In Email sending is not possible because the Contact has not Primary Email Address',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Confirm Opt In Email sending failed',
    'LBL_CONFIRM_EMAIL_SENT' => 'Confirm Opt In Email sent successfully',
);

$app_list_strings['moduleList']['Library'] = 'පුස්තකාලය';
$app_list_strings['moduleList']['EmailAddresses'] = 'විද්යුත් තැපැල් ලිපිනය';
$app_list_strings['project_priority_default'] = 'මධ්යම';
$app_list_strings['project_priority_options'] = array(
    'High' => 'අධි',
    'Medium' => 'මධ්යම',
    'Low' => 'අඩු',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consent',
    'contract' => 'කොන්ත්රාත්',
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
    'website' => 'වෙබ් අඩවිය',
    'phone' => 'දුරකතන',
    'given_to_user' => 'Given to User',
    'email' => 'විද්යුත් තැපෑල',
    'third_party' => 'Third Party',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'දැනුම මූලික';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'අබුඩාබි',
    'ADEN' => 'ඒඩන්',
    'AFGHANISTAN' => 'ඇෆ්ගනිස්ථානය',
    'ALBANIA' => 'ඇල්බේනියාව',
    'ALGERIA' => 'ඇල්ජීරියාව',
    'AMERICAN SAMOA' => 'ඇෙමරිකන් සැමෝවා',
    'ANDORRA' => 'ඇන්ඩෝරාව',
    'ANGOLA' => 'ඇන්ගෝලාව',
    'ANTARCTICA' => 'ඇන්ටාක්ටිකාව',
    'ANTIGUA' => 'ඇන්ටිගුවා',
    'ARGENTINA' => 'ආර්ජන්ටිනාව',
    'ARMENIA' => 'ආර්මේනියාව',
    'ARUBA' => 'ඇරුබා',
    'AUSTRALIA' => 'ඕස්ට්රේලියාව',
    'AUSTRIA' => 'ඔස්ට්රියාව',
    'AZERBAIJAN' => 'අසර්බයිජාන්',
    'BAHAMAS' => 'බහමාස්',
    'BAHRAIN' => 'බහරේන්',
    'BANGLADESH' => 'බංග්ලාදේශය',
    'BARBADOS' => 'බාබඩෝස්',
    'BELARUS' => 'බෙලරුස්',
    'BELGIUM' => 'බෙල්ජියම',
    'BELIZE' => 'බෙලිස්',
    'BENIN' => 'බෙනින්',
    'BERMUDA' => 'බර්මියුඩා',
    'BHUTAN' => 'භූතානය',
    'BOLIVIA' => 'බොලිවියාව',
    'BOSNIA' => 'බොස්නියාව',
    'BOTSWANA' => 'බොට්ස්වානා',
    'BOUVET ISLAND' => 'බුවෙට් දිවයින්',
    'BRAZIL' => 'බ්රසීලයේ',
    'BRITISH ANTARCTICA TERRITORY' => 'බ්රිතාන්ය ඇන්ටාක්ටිකාව ප්රතශයය',
    'BRITISH INDIAN OCEAN TERRITORY' => 'බ්රිතාන්ය ඉන්දීය සාගර ප්රතශයය',
    'BRITISH VIRGIN ISLANDS' => 'බ්රිතාන්ය වර්ජින් දූපත්',
    'BRITISH WEST INDIES' => 'බ්රිතාන්ය බටහිර ඉන්දීය කොදෙව්',
    'BRUNEI' => 'බෲනායි',
    'BULGARIA' => 'බල්ගේරියාව',
    'BURKINA FASO' => 'බර්කිනා ෆාසෝ',
    'BURUNDI' => 'බුරුන්ඩි',
    'CAMBODIA' => 'කාම්බෝජය',
    'CAMEROON' => 'කැමරූන්',
    'CANADA' => 'කැනඩාව',
    'CANAL ZONE' => 'ඇල කලාපය',
    'CANARY ISLAND' => 'කැනරි ISLAND',
    'CAPE VERDI ISLANDS' => 'කේප් වර්ඩි දූපත්',
    'CAYMAN ISLANDS' => 'කේමන් දූපත්',
    'CHAD' => 'චැඩ්',
    'CHANNEL ISLAND UK' => 'චැනල් ISLAND එක්සත් රාජධානියේ',
    'CHILE' => 'චිලී',
    'CHINA' => 'චීනය',
    'CHRISTMAS ISLAND' => 'ක්රිස්මස් දූපත',
    'COCOS (KEELING) ISLAND' => 'කොකෝස් (කීලිං) ISLAND',
    'COLOMBIA' => 'කොලොම්බියාව',
    'COMORO ISLANDS' => 'COMORO දූපත්',
    'CONGO' => 'කොංගෝ',
    'CONGO KINSHASA' => 'කොංගෝ කින්ෂාසා',
    'COOK ISLANDS' => 'කුක් දූපත්',
    'COSTA RICA' => 'කොස්ට රිකා',
    'CROATIA' => 'ක්රොඒෂියාව',
    'CUBA' => 'කියුබාව',
    'CURACAO' => 'කුරාකාෙවෝ',
    'CYPRUS' => 'සයිප්රසය',
    'CZECH REPUBLIC' => 'චෙක් ජනරජය',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'ඩෙන්මාර්කය',
    'DJIBOUTI' => 'ජිබුටි',
    'DOMINICA' => 'ඩොමිනිකා',
    'DOMINICAN REPUBLIC' => 'ඩොමිනිකානු ජනරජය',
    'DUBAI' => 'ඩුබායි',
    'ECUADOR' => 'ඉක්වදෝරය',
    'EGYPT' => 'ඊජිප්තුව',
    'EL SALVADOR' => 'එල් සැල්වදෝරය',
    'EQUATORIAL GUINEA' => 'සමක ගිනි',
    'ESTONIA' => 'එස්තෝනියා',
    'ETHIOPIA' => 'ඉතියෝපියාව',
    'FAEROE ISLANDS' => 'FAEROE දූපත්',
    'FALKLAND ISLANDS' => 'ෆෝක්ලන්ත දූපත්',
    'FIJI' => 'ෆීජි',
    'FINLAND' => 'ෆින්ලන්තය',
    'FRANCE' => 'ප්රංශය',
    'FRENCH GUIANA' => 'ප්රංශ ගිනියා',
    'FRENCH POLYNESIA' => 'ප්රංශ පොලිනීසියාව',
    'GABON' => 'ගැබොන්',
    'GAMBIA' => 'ගැම්බියාව',
    'GEORGIA' => 'ජෝර්ජියා',
    'GERMANY' => 'ජර්මනිය',
    'GHANA' => 'ඝානා',
    'GIBRALTAR' => 'ජිබ්රෝල්ටා',
    'GREECE' => 'ග්රීසිය',
    'GREENLAND' => 'ග්රීන්ලන්තය',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'ගුවාමි',
    'GUATEMALA' => 'ග්වාතමාලාව',
    'GUINEA' => 'ගිනියාව',
    'GUYANA' => 'ගයනා',
    'HAITI' => 'හයිටි',
    'HONDURAS' => 'හොන්ඩුරාස්',
    'HONG KONG' => 'හොංකොං',
    'HUNGARY' => 'හංගේරියාව',
    'ICELAND' => 'අයිස්ලන්තය',
    'IFNI' => 'IFNI',
    'INDIA' => 'ඉන්දියාව',
    'INDONESIA' => 'ඉන්දුනීසියාව',
    'IRAN' => 'ඉරානය',
    'IRAQ' => 'ඉරාකය',
    'IRELAND' => 'අයර්ලන්ඩ්',
    'ISRAEL' => 'ඊශ්රායෙල්',
    'ITALY' => 'ඉතාලිය',
    'IVORY COAST' => 'අයිවරි කෝස්ට්',
    'JAMAICA' => 'ජැමෙයිකාව',
    'JAPAN' => 'ජපානය',
    'JORDAN' => 'ෙජෝර්දාන්',
    'KAZAKHSTAN' => 'කසක්ස්තානය',
    'KENYA' => 'කෙන්යාව',
    'KOREA' => 'කොරියාව',
    'KOREA, SOUTH' => 'කොරියාව, දකුණු',
    'KUWAIT' => 'කුවේට්',
    'KYRGYZSTAN' => 'කිර්ගිස්ථානය',
    'LAOS' => 'ලාඕස්',
    'LATVIA' => 'ලැට්වියාව',
    'LEBANON' => 'ලෙබනනය',
    'LEEWARD ISLANDS' => 'සුළං මුවාවේ දූපත්',
    'LESOTHO' => 'ලෙසොතෝව',
    'LIBYA' => 'ලිබියාව',
    'LIECHTENSTEIN' => 'පින්සිපල්ටි',
    'LITHUANIA' => 'ලිතුවේනියාව',
    'LUXEMBOURG' => 'ලක්සම්බර්ග්',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'මැසිඩෝනියාව',
    'MADAGASCAR' => 'මැඩගස්කරය',
    'MALAWI' => 'මලාවි',
    'MALAYSIA' => 'MALAYSIA',
    'MALDIVES' => 'මාලදිවයින',
    'MALI' => 'මාලි',
    'MALTA' => 'මෝල්ටා',
    'MARTINIQUE' => 'මාර්ටිනීක්',
    'MAURITANIA' => 'මොරිටානියා',
    'MAURITIUS' => 'මුරුසිය',
    'MELANESIA' => 'MELANESIA',
    'MEXICO' => 'මෙක්සිකෝ',
    'MOLDOVIA' => 'MOLDOVIA',
    'MONACO' => 'මොනාකෝ',
    'MONGOLIA' => 'මොන්ගෝලියාව',
    'MOROCCO' => 'මොරොක්කෝව',
    'MOZAMBIQUE' => 'මොසැම්බික්',
    'MYANAMAR' => 'MYANAMAR',
    'NAMIBIA' => 'නැමීබියාව',
    'NEPAL' => 'නේපාලය',
    'NETHERLANDS' => 'ෙනදර්ලන්තය',
    'NETHERLANDS ANTILLES' => 'නෙදර්ලන්ත ඇන්ටිලස්',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'නෙදර්ලන්ත ඇන්ටිලස් උදාසීන කලාපය',
    'NEW CALADONIA' => 'නව CALADONIA',
    'NEW HEBRIDES' => 'නව HEBRIDES',
    'NEW ZEALAND' => 'නිව්සීලන්තය',
    'NICARAGUA' => 'නිකරගුවාව',
    'NIGER' => 'නයිජර්',
    'NIGERIA' => 'නයිජීරියාව',
    'NORFOLK ISLAND' => 'නොර්ෆ්ලොක් දිවයින',
    'NORWAY' => 'නෝර්වේ',
    'OMAN' => 'ඕමාන්',
    'OTHER' => 'අනික්',
    'PACIFIC ISLAND' => 'පැසිෆික් දූපත්',
    'PAKISTAN' => 'පකිස්තාන්',
    'PANAMA' => 'පැනමාව',
    'PAPUA NEW GUINEA' => 'පැපුවා නිව්ගිනියා',
    'PARAGUAY' => 'පැරගුවේ',
    'PERU' => 'පේරු',
    'PHILIPPINES' => 'පිලිපීනය',
    'POLAND' => 'POLAND',
    'PORTUGAL' => 'පෘතුගාලය',
    'PORTUGUESE TIMOR' => 'EAST TIMOR',
    'PUERTO RICO' => 'පෝටෝ රිකෝ',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'බෙලරුස් ජනරජෙය්',
    'REPUBLIC OF SOUTH AFRICA' => 'දකුණු අප්රිකානු ජනරජෙය්',
    'REUNION' => 'රියූනියන්',
    'ROMANIA' => 'රොමේනියාව',
    'RUSSIA' => 'රුසියාව',
    'RWANDA' => 'රුවන්ඩා',
    'RYUKYU ISLANDS' => 'RYUKYU දූපත්',
    'SABAH' => 'සබා',
    'SAN MARINO' => 'සැන් මරිනෝ',
    'SAUDI ARABIA' => 'සවුදි අරාබිය',
    'SENEGAL' => 'සෙනෙගල්',
    'SERBIA' => 'සර්බියාවේ',
    'SEYCHELLES' => 'සීෂෙල්ස්',
    'SIERRA LEONE' => 'සියෙරා ලියොන්',
    'SINGAPORE' => 'සිංගප්පූරුව',
    'SLOVAKIA' => 'ස්ලෝවැකියාව',
    'SLOVENIA' => 'ස්ලෝවීනියාව',
    'SOMALILIAND' => 'SOMALILIAND',
    'SOUTH AFRICA' => 'දකුණු අප්රිකාව',
    'SOUTH YEMEN' => 'දකුණු යේමනය',
    'SPAIN' => 'ස්පාඤ්ඤය',
    'SPANISH SAHARA' => 'ස්පාඤ්ඤ සහරා',
    'SRI LANKA' => 'ශ්රී ලංකාව',
    'ST. KITTS AND NEVIS' => 'එස්.ටී.. කිට්ස් සහ නේවිස්',
    'ST. LUCIA' => 'එස්.ටී.. ලුසියා',
    'SUDAN' => 'සුඩානය',
    'SURINAM' => 'SURINAM',
    'SW AFRICA' => 'එස් ඩබ්ලිව් අප්රිකාව',
    'SWAZILAND' => 'ස්වාසිලන්තය',
    'SWEDEN' => 'ස්වීඩනයේ',
    'SWITZERLAND' => 'ස්විට්සර්ලන්තය',
    'SYRIA' => 'සිරියාව',
    'TAIWAN' => 'තායිවානයේ',
    'TAJIKISTAN' => 'ටජිකිස්ථානය',
    'TANZANIA' => 'ටැන්සානියාවේ',
    'THAILAND' => 'තායිලන්තය',
    'TONGA' => 'ටොන්ගා',
    'TRINIDAD' => 'ට්රිනිඩෑඩ්',
    'TUNISIA' => 'ටියුනීසියාවේ',
    'TURKEY' => 'කළුකුමා',
    'UGANDA' => 'උගන්ඩා',
    'UKRAINE' => 'යුක්රේනයේ',
    'UNITED ARAB EMIRATES' => 'එක්සත් අරාබි එමීර් රාජ්යයේ',
    'UNITED KINGDOM' => 'එක්සත් රාජධානිය',
    'URUGUAY' => 'උරුගුවේ',
    'US PACIFIC ISLAND' => 'එක්සත් ජනපදයේ පැසිෆික් දූපත්',
    'US VIRGIN ISLANDS' => 'එක්සත් ජනපදය වර්ජින් දූපත්',
    'USA' => 'ඇඑජ',
    'UZBEKISTAN' => 'උස්බෙකිස්තානය',
    'VANUATU' => 'වනුආටු',
    'VATICAN CITY' => 'වතිකානු',
    'VENEZUELA' => 'වෙනිසියුලාව',
    'VIETNAM' => 'වියට්නාමයේ',
    'WAKE ISLAND' => 'අවදි ISLAND',
    'WEST INDIES' => 'බටහිර ඉන්දීය කොදෙව්',
    'WESTERN SAHARA' => 'බටහිර සහරාව',
    'YEMEN' => 'යේමනයේ',
    'ZAIRE' => 'සයර්',
    'ZAMBIA' => 'සැම්බියානු',
    'ZIMBABWE' => 'සිම්බාබ්වේ',
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

    'Africa/Algiers' => 'අප්රිකාවේ / ඇල්ජියර්ස්',
    'Africa/Luanda' => ' අප්රිකාවේ / Luanda',
    'Africa/Porto-Novo' => ' අප්රිකාවේ / පෝර්ටෝ-novo ආකාරයේ',
    'Africa/Gaborone' => ' අප්රිකාවේ / Gaborone',
    'Africa/Ouagadougou' => ' අප්රිකාවේ / ඔව්ගදොව්ගොව්',
    'Africa/Bujumbura' => ' අප්රිකාවේ / Bujumbura',
    'Africa/Douala' => ' අප්රිකාවේ / Douala',
    'Atlantic/Cape_Verde' => ' අත්ලාන්තික් / Cape_Verde',
    'Africa/Bangui' => ' අප්රිකාවේ / බන්ගූයිවල',
    'Africa/Ndjamena' => ' අප්රිකාවේ / Ndjamena',
    'Indian/Comoro' => ' ඉන්දීය / Comoro',
    'Africa/Kinshasa' => ' අප්රිකාවේ / කින්ෂාසා',
    'Africa/Lubumbashi' => ' අප්රිකාවේ / Lubumbashi',
    'Africa/Brazzaville' => ' අප්රිකාවේ / Brazzaville',
    'Africa/Abidjan' => ' අප්රිකාවේ / Abidjan',
    'Africa/Djibouti' => ' අප්රිකාවේ / ජිබුටි',
    'Africa/Cairo' => ' අප්රිකාවේ / කයිරෝ',
    'Africa/Malabo' => ' අප්රිකාවේ / Malabo',
    'Africa/Asmera' => ' අප්රිකාවේ / Asmera',
    'Africa/Addis_Ababa' => ' අප්රිකාවේ / Addis_Ababa',
    'Africa/Libreville' => ' අප්රිකාවේ / ලිබුවීල්',
    'Africa/Banjul' => ' අප්රිකාවේ / Banjul',
    'Africa/Accra' => ' අප්රිකාවේ / Accra',
    'Africa/Conakry' => 'අප්රිකාවේ / කොනක්රි',
    'Africa/Bissau' => ' අප්රිකාවේ / බිසව්',
    'Africa/Nairobi' => ' අප්රිකාවේ / නයිරෝබි',
    'Africa/Maseru' => ' අප්රිකාවේ / Maseru',
    'Africa/Monrovia' => ' අප්රිකාවේ / මොන්රෝවියා',
    'Africa/Tripoli' => ' අප්රිකාවේ / ටි්රපොලි',
    'Indian/Antananarivo' => ' ඉන්දීය / Antananarivo',
    'Africa/Blantyre' => ' අප්රිකාවේ / Blantyre',
    'Africa/Bamako' => ' අප්රිකාවේ / බමාකෝ',
    'Africa/Nouakchott' => 'අප්රිකාවේ / Nouakchott',
    'Indian/Mauritius' => ' ඉන්දීය / මුරුසිය',
    'Indian/Mayotte' => ' ඉන්දීය / Mayotte',
    'Africa/Casablanca' => ' අප්රිකාවේ / කැසම්ලංකා',
    'Africa/El_Aaiun' => 'අප්රිකාවේ / Laayoune',
    'Africa/Maputo' => 'අප්රිකාවේ / මෑතදී එක්සත්',
    'Africa/Windhoek' => ' අප්රිකාවේ / වින්ඩ්හොක්හිදී',
    'Africa/Niamey' => 'අප්රිකාවේ / නියාමි',
    'Africa/Lagos' => ' අප්රිකාවේ / ලාගෝස්',
    'Indian/Reunion' => ' ඉන්දීය / රියුනියන්',
    'Africa/Kigali' => ' අප්රිකාවේ / කිගාලි නගරයෙහි',
    'Atlantic/St_Helena' => 'අත්ලාන්තික් / ශාන්ත හෙලේනා',
    'Africa/Sao_Tome' => 'අප්රිකාවේ / සාවෝ ටෝම්',
    'Africa/Dakar' => 'අප්රිකාවේ / ඩාකා',
    'Indian/Mahe' => ' ඉන්දීය / මහේ',
    'Africa/Freetown' => ' අප්රිකාවේ / ෆ්රීටවුන්',
    'Africa/Mogadishu' => ' අප්රිකාවේ / මොගඩිෂුවල',
    'Africa/Johannesburg' => ' අප්රිකාවේ / ජොහැන්නස්බර්ග්',
    'Africa/Khartoum' => ' අප්රිකාවේ / කාටුම්හි',
    'Africa/Mbabane' => 'අප්රිකාවේ / Mbabane',
    'Africa/Dar_es_Salaam' => ' අප්රිකාවේ / Dar_es_Salaam',
    'Africa/Lome' => ' අප්රිකාවේ / ලෝම පසක්',
    'Africa/Tunis' => ' අප්රිකාවේ / ටියුනිස්',
    'Africa/Kampala' => ' අප්රිකාවේ / කම්පාලා නුවර',
    'Africa/Lusaka' => ' අප්රිකාවේ / ලුසානා',
    'Africa/Harare' => ' අප්රිකාවේ / හරාරේ',
    'Antarctica/Casey' => ' ඇන්ටාක්ටිකාව / කේසි',
    'Antarctica/Davis' => ' ඇන්ටාක්ටිකාව / ඩේවිස්',
    'Antarctica/Mawson' => ' ඇන්ටාක්ටිකාව / Mawson',
    'Indian/Kerguelen' => 'ඉන්දීය / Kerguelen',
    'Antarctica/DumontDUrville' => 'ඇන්ටාක්ටික් / Dumont DUrville',
    'Antarctica/Syowa' => 'ඇන්ටාක්ටිකාව / සයෝවා',
    'Antarctica/Vostok' => ' ඇන්ටාක්ටිකාව / වොස්ටොක්',
    'Antarctica/Rothera' => ' ඇන්ටාක්ටිකාව / රොතේරා',
    'Antarctica/Palmer' => 'ඇන්ටාක්ටිකාව / පාමර්',
    'Antarctica/McMurdo' => ' ඇන්ටාක්ටිකාව / McMurdo',
    'Asia/Kabul' => ' ආසියාවේ / කාබුල්',
    'Asia/Yerevan' => ' ආසියාවේ / Yerevan',
    'Asia/Baku' => ' ආසියාවේ / Baku',
    'Asia/Bahrain' => 'ආසියාවේ / බහරේන්',
    'Asia/Dhaka' => ' ආසියාවේ / ඩකා',
    'Asia/Thimphu' => ' ආසියාවේ / තිම්පු',
    'Indian/Chagos' => ' ඉන්දීය / චාගොස්',
    'Asia/Brunei' => ' ආසියාවේ / බෲනායි',
    'Asia/Rangoon' => ' ආසියාවේ / රැන්ගුන්',
    'Asia/Phnom_Penh' => ' ආසියාවේ / Phnom_Penh',
    'Asia/Beijing' => ' ආසියාවේ / බීජිං',
    'Asia/Harbin' => ' ආසියාවේ / Harbin',
    'Asia/Shanghai' => 'ආසියාවේ / ෂැංහයි',
    'Asia/Chongqing' => ' ආසියාවේ / චොන්',
    'Asia/Urumqi' => ' ආසියාවේ / Urumqi',
    'Asia/Kashgar' => ' ආසියාවේ / Kashgar',
    'Asia/Hong_Kong' => ' ආසියාවේ / Hong_Kong',
    'Asia/Taipei' => ' ආසියාවේ / තායිපේ',
    'Asia/Macau' => ' ආසියාවේ / මැකාවු',
    'Asia/Nicosia' => ' ආසියාවේ / නිකෝසියා',
    'Asia/Tbilisi' => ' ආසියාවේ / Tbilisi',
    'Asia/Dili' => ' ආසියාවේ / ඩිලි',
    'Asia/Calcutta' => ' ආසියාවේ / කල්කටා',
    'Asia/Jakarta' => ' ආසියාවේ / ජකර්තා',
    'Asia/Pontianak' => ' ආසියාවේ / Pontianak',
    'Asia/Makassar' => ' ආසියාවේ / Makassar',
    'Asia/Jayapura' => 'ආසියාවේ / Jayapura',
    'Asia/Tehran' => ' ආසියාවේ / ටෙහෙරාන්',
    'Asia/Baghdad' => ' ආසියාවේ / බැග්ඩෑඩ්',
    'Asia/Jerusalem' => ' ආසියාවේ / යෙරුසලමේ',
    'Asia/Tokyo' => ' ආසියාවේ / ටෝකියෝ',
    'Asia/Amman' => ' ආසියාවේ / අම්මාන්',
    'Asia/Almaty' => ' ආසියාවේ / Almaty',
    'Asia/Qyzylorda' => 'ආසියාවේ / Kyzylorda',
    'Asia/Aqtobe' => 'ආසියාවේ / Aqtobe',
    'Asia/Aqtau' => ' ආසියාවේ / Aqtau',
    'Asia/Oral' => ' ආසියාවේ / මුඛ',
    'Asia/Bishkek' => 'ආසියාවේ / Bishkek',
    'Asia/Seoul' => ' ආසියාවේ / සෝල්',
    'Asia/Pyongyang' => ' ආසියාවේ / ප්යොංයැං',
    'Asia/Kuwait' => ' ආසියාවේ / කුවේට්',
    'Asia/Vientiane' => ' ආසියාවේ / වියන්ටියෙන්හි',
    'Asia/Beirut' => ' ආසියාවේ / බීරුට්',
    'Asia/Kuala_Lumpur' => ' ආසියාවේ / Kuala_Lumpur',
    'Asia/Kuching' => ' ආසියාවේ / කුචින්',
    'Indian/Maldives' => 'ඉන්දියාව / මාලදිවයින',
    'Asia/Hovd' => 'ආසියාවේ / Hovd',
    'Asia/Ulaanbaatar' => 'ආසියාවේ / Ulaanbaatar',
    'Asia/Choibalsan' => 'ආසියානු / Choibalsan',
    'Asia/Katmandu' => 'ආසියාවේ / කත්මණ්ඩු',
    'Asia/Muscat' => 'ආසියාවේ / මස්කට්',
    'Asia/Karachi' => ' ආසියාවේ / කරච්චි',
    'Asia/Gaza' => ' ආසියාවේ / ගාසා',
    'Asia/Manila' => ' ආසියාවේ / මැනිලා',
    'Asia/Qatar' => ' ආසියාවේ / කටාර්',
    'Asia/Riyadh' => ' ආසියාවේ / රියාද්',
    'Asia/Singapore' => ' ආසියාවේ / සිංගප්පූරුව',
    'Asia/Colombo' => ' ආසියාවේ / කොළඹ',
    'Asia/Damascus' => ' ආසියාවේ / දමස්කයේ',
    'Asia/Dushanbe' => 'ආසියාවේ / දුශාන්බේ',
    'Asia/Bangkok' => ' ආසියාවේ / බැංකොක්',
    'Asia/Ashgabat' => ' ආසියාවේ / Ashgabat',
    'Asia/Dubai' => ' ආසියාවේ / ඩුබායි',
    'Asia/Samarkand' => ' ආසියාවේ / Samarkand',
    'Asia/Tashkent' => ' ආසියාවේ / ටශ්කෙන්ට්',
    'Asia/Saigon' => ' ආසියාවේ / සයිගොන් නගරයයි',
    'Asia/Aden' => ' ආසියාවේ / ඒඩන්',
    'Australia/Darwin' => ' ඕස්ට්රේලියාව / ඩාවින්',
    'Australia/Perth' => ' ඕස්ට්රේලියාව / පර්ත්',
    'Australia/Brisbane' => ' ඕස්ට්රේලියාව / බි්රස්බේන්',
    'Australia/Lindeman' => ' ඕස්ට්රේලියාව / Lindeman',
    'Australia/Adelaide' => ' ඕස්ට්රේලියාව / ඇඩිලේඩ්',
    'Australia/Hobart' => ' ඕස්ට්රේලියාව / හෝබාර්ට්',
    'Australia/Currie' => ' ආසියාවේ / දුශාන්බේ',
    'Australia/Melbourne' => ' ආසියාවේ / බැංකොක්',
    'Australia/Sydney' => ' ආසියාවේ / Ashgabat',
    'Australia/Broken_Hill' => ' ආසියාවේ / ඩුබායි',
    'Indian/Christmas' => ' ආසියාවේ / Samarkand',
    'Pacific/Rarotonga' => ' ආසියාවේ / ටශ්කෙන්ට්',
    'Indian/Cocos' => ' ආසියාවේ / සයිගොන් නගරයයි',
    'Pacific/Fiji' => ' ආසියාවේ / ඒඩන්',
    'Pacific/Gambier' => ' ඕස්ට්රේලියාව / ඩාවින්',
    'Pacific/Marquesas' => ' ඕස්ට්රේලියාව / පර්ත්',
    'Pacific/Tahiti' => ' ඕස්ට්රේලියාව / බි්රස්බේන්',
    'Pacific/Guam' => ' ඕස්ට්රේලියාව / Lindeman',
    'Pacific/Tarawa' => ' ඕස්ට්රේලියාව / ඇඩිලේඩ්',
    'Pacific/Enderbury' => ' ඕස්ට්රේලියාව / හෝබාර්ට්',
    'Pacific/Kiritimati' => 'පැසිෆික් / Kiritimati',
    'Pacific/Saipan' => ' පැසිෆික් / සයිපාන්',
    'Pacific/Majuro' => ' පැසිෆික් / Majuro',
    'Pacific/Kwajalein' => ' පැසිෆික් / Kwajalein',
    'Pacific/Truk' => ' පැසිෆික් / Truk',
    'Pacific/Pohnpei' => 'Pacific/Pohnpei',
    'Pacific/Kosrae' => 'පැසිෆික් / Kosrae',
    'Pacific/Nauru' => ' පැසිෆික් / නාවුරු',
    'Pacific/Noumea' => 'පැසිෆික් / Noumea',
    'Pacific/Auckland' => 'පැසිෆික් / ඕක්ලන්ඩ්',
    'Pacific/Chatham' => ' පැසිෆික් / චැතම්',
    'Pacific/Niue' => ' පැසිෆික් / නියු',
    'Pacific/Norfolk' => 'පැසිෆික් / නෝර්ෆෝක්',
    'Pacific/Palau' => 'පැසිෆික් / පලාවු',
    'Pacific/Port_Moresby' => 'පැසිෆික් / වරාය මෝර්ස්බි',
    'Pacific/Pitcairn' => 'පැසිෆික් / පිට්කෙයාන්',
    'Pacific/Pago_Pago' => 'පැසිෆික් / පාගො පාගු',
    'Pacific/Apia' => 'පැසිෆික් / Apia',
    'Pacific/Guadalcanal' => ' පැසිෆික් / ගොවාඩැල්කැනල්',
    'Pacific/Fakaofo' => ' පැසිෆික් / Fakaofo',
    'Pacific/Tongatapu' => ' පැසිෆික් / Tongatapu',
    'Pacific/Funafuti' => ' පැසිෆික් / Funafuti',
    'Pacific/Johnston' => 'පැසිෆික් / ජොන්ස්ටන්',
    'Pacific/Midway' => 'පැසිෆික් / අයහපත් ආලෝක තත්ත්වය',
    'Pacific/Wake' => 'පැසිෆික් / අවදි',
    'Pacific/Efate' => 'පැසිෆික් / Efate',
    'Pacific/Wallis' => 'පැසිෆික් / වොලිස්',
    'Europe/London' => 'යුරෝපයේ / ලන්ඩන්',
    'Europe/Dublin' => 'යුරෝපයේ / ඩබ්ලින්',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'යුරෝපයේ / Tirane',
    'Europe/Andorra' => 'යුරෝපයේ / ඇන්ඩෝරාව',
    'Europe/Vienna' => 'යුරෝපයේ / වියානා',
    'Europe/Minsk' => 'යුරෝපයේ / මින්ස්ක්',
    'Europe/Brussels' => 'යුරෝපයේ / බ්රසල්ස්',
    'Europe/Sofia' => 'යුරෝපයේ / සොෆියා',
    'Europe/Prague' => 'යුරෝපයේ / ප්රාග්',
    'Europe/Copenhagen' => 'යුරෝපයේ / කෝපන්හේගන්',
    'Atlantic/Faeroe' => 'අත්ලාන්තික් / Faeroe',
    'America/Danmarkshavn' => 'ඇමරිකාව / Danmarkshavn',
    'America/Scoresbysund' => 'ඇමරිකාව / Scoresbysund',
    'America/Godthab' => 'ඇමරිකාව / Godthab',
    'America/Thule' => 'ඇමරිකාව / Thule',
    'Europe/Tallinn' => 'යුරෝපයේ / Tallinn',
    'Europe/Helsinki' => 'යුරෝපයේ / හෙල්සින්කි',
    'Europe/Paris' => 'යුරෝපයේ / පැරිස්',
    'Europe/Berlin' => 'යුරෝපයේ / බර්ලින්',
    'Europe/Gibraltar' => 'යුරෝපයේ / ලවණතාව',
    'Europe/Athens' => 'යුරෝපයේ / ඇතන්ස්',
    'Europe/Budapest' => 'යුරෝපයේ / බුඩාපෙස්ට්',
    'Atlantic/Reykjavik' => 'අත්ලාන්තික් / Reykjavik',
    'Europe/Rome' => 'යුරෝපයේ / රෝමයේ',
    'Europe/Riga' => 'යුරෝපයේ / රිගා',
    'Europe/Vaduz' => 'යුරෝපයේ / Vaduz',
    'Europe/Vilnius' => 'යුරෝපයේ / විල්නියස්',
    'Europe/Luxembourg' => 'යුරෝපයේ / ලක්සම්බර්ග්',
    'Europe/Malta' => 'යුරෝපයේ / මෝල්ටා',
    'Europe/Chisinau' => 'යුරෝපයේ / Chisinau',
    'Europe/Monaco' => 'යුරෝපයේ / මොනාකෝ',
    'Europe/Amsterdam' => 'යුරෝපයේ / ඇම්ස්ටර්ඩෑම්',
    'Europe/Oslo' => 'යුරෝපයේ / ඔස්ලෝ',
    'Europe/Warsaw' => 'යුරෝපයේ / වෝර්සෝ',
    'Europe/Lisbon' => 'යුරෝපයේ / ලිස්බන්',
    'Atlantic/Azores' => 'අත්ලාන්තික් / Azores',
    'Atlantic/Madeira' => 'අත්ලාන්තික් / Madeira',
    'Europe/Bucharest' => 'යුරෝපයේ / බුකාරෙස්ට්හි',
    'Europe/Kaliningrad' => 'යුරෝපයේ / Kaliningrad',
    'Europe/Moscow' => 'යුරෝපයේ / මොස්කව්',
    'Europe/Samara' => 'යුරෝපයේ / සමාරා',
    'Asia/Yekaterinburg' => 'ආසියාවේ / Yekaterinburg',
    'Asia/Omsk' => 'ආසියාවේ / ඔම්ස්ක්',
    'Asia/Novosibirsk' => 'ආසියාවේ / Novosibirsk',
    'Asia/Krasnoyarsk' => 'ආසියාවේ / Krasnoyarsk',
    'Asia/Irkutsk' => 'ආසියාවේ / ඉර්කුට්ස්ක්',
    'Asia/Yakutsk' => 'ආසියාවේ / Yakutsk',
    'Asia/Vladivostok' => 'ආසියාවේ / ව්ලැඩිවොස්ටොක්හි',
    'Asia/Sakhalin' => 'ආසියාවේ / Sakhalin',
    'Asia/Magadan' => 'ආසියාවේ / Magadan',
    'Asia/Kamchatka' => 'ආසියාවේ / Kamchatka',
    'Asia/Anadyr' => 'ආසියාවේ / Anadyr',
    'Europe/Belgrade' => 'යුරෝපයේ / බෙල්ග්රේඩ්',
    'Europe/Madrid' => 'යුරෝපයේ / මැඩ්රිඩ්',
    'Africa/Ceuta' => 'අප්රිකාවේ / Ceuta',
    'Atlantic/Canary' => 'අත්ලාන්තික් / කැනරි',
    'Europe/Stockholm' => 'යුරෝපයේ / ස්ටොක්හෝම්',
    'Europe/Zurich' => 'යුරෝපයේ / සූරිච්',
    'Europe/Istanbul' => 'යුරෝපයේ / ඉස්තාන්බුල්',
    'Europe/Kiev' => 'යුරෝපයේ / කීව්',
    'Europe/Uzhgorod' => 'යුරෝපයේ / Uzhgorod',
    'Europe/Zaporozhye' => 'යුරෝපයේ / Zaporozhye',
    'Europe/Simferopol' => 'යුරෝපයේ / Simferopol',
    'America/New_York' => 'ඇමරිකාව / New_York',
    'America/Chicago' => 'ඇමරිකාව / චිකාගෝ',
    'America/North_Dakota/Center' => 'ඇමරිකාව / North_Dakota / මධ්යස්ථානය',
    'America/Denver' => 'ඇමරිකාව / ඩෙන්වර්',
    'America/Los_Angeles' => 'ඇමරිකාව / Los_Angeles',
    'America/Juneau' => 'ඇමරිකාව / Juneau',
    'America/Yakutat' => 'ඇමරිකාව / Yakutat',
    'America/Anchorage' => 'ඇමරිකාව / නැංගුරම්',
    'America/Nome' => 'ඇමරිකාව / Nome',
    'America/Adak' => 'ඇමරිකාව / Adak',
    'Pacific/Honolulu' => 'පැසිෆික් / වගාවේ',
    'America/Phoenix' => 'ඇමරිකාව / ෆීනික්ස්',
    'America/Boise' => 'ඇමරිකාව / Boise',
    'America/Indiana/Indianapolis' => 'ඇමරිකාව / ඉන්ඩියානා / ඉන්ඩියානාපොලිස්',
    'America/Indiana/Marengo' => 'ඇමරිකාව / ඉන්ඩියානා / Marengo',
    'America/Indiana/Knox' => ' ඇමරිකාව / ඉන්ඩියානා / නොක්ස්',
    'America/Indiana/Vevay' => 'ඇමරිකාව / ඉන්ඩියානා / Vevay',
    'America/Kentucky/Louisville' => 'ඇමරිකාව / කෙන්ටකි / දුටුවේය',
    'America/Kentucky/Monticello' => ' ඇමරිකාව / කෙන්ටකි / වර්ජිනියානුවන්',
    'America/Detroit' => 'ඇමරිකාව / ඩිට්රොයිට්',
    'America/Menominee' => 'ඇමරිකාව / Menominee',
    'America/St_Johns' => 'ඇමරිකාව / St_Johns',
    'America/Goose_Bay' => 'ඇමරිකාව / Goose_Bay',
    'America/Halifax' => 'ඇමරිකාව / හැලිෆැක්ස්',
    'America/Glace_Bay' => 'ඇමරිකාව / Glace_Bay',
    'America/Montreal' => 'ඇමරිකාව / මොන්ට්රියල්',
    'America/Toronto' => 'ඇමරිකාව / ටොරොන්ටෝ',
    'America/Thunder_Bay' => 'ඇමරිකාව / Thunder_Bay',
    'America/Nipigon' => 'ඇමරිකාව / Nipigon',
    'America/Rainy_River' => 'ඇමරිකාව / Rainy_River',
    'America/Winnipeg' => 'ඇමරිකාව / විනිපෙග්',
    'America/Regina' => 'ඇමරිකාව / රෙජිනා',
    'America/Swift_Current' => 'ඇමරිකාව / Swift_Current',
    'America/Edmonton' => ' ඇමරිකාව / එඩ්මන්ටන්',
    'America/Vancouver' => 'ඇමරිකාව / වැන්කුවර්',
    'America/Dawson_Creek' => 'ඇමරිකාව / Dawson_Creek',
    'America/Pangnirtung' => 'ඇමරිකාව / Pangnirtung',
    'America/Iqaluit' => 'ඇමරිකාව / Iqaluit',
    'America/Coral_Harbour' => 'ඇමරිකාව / Coral_Harbour',
    'America/Rankin_Inlet' => 'ඇමරිකාව / Rankin_Inlet',
    'America/Cambridge_Bay' => 'ඇමරිකාව / Cambridge_Bay',
    'America/Yellowknife' => 'ඇමරිකාව / යෙලෝනයිෆ්',
    'America/Inuvik' => 'ඇමරිකාව / Inuvik',
    'America/Whitehorse' => 'ඇමරිකාව / හිතුවෙ',
    'America/Dawson' => 'ඇමරිකාව / ඩෝසන්',
    'America/Cancun' => 'ඇමරිකාව / කෝපන් හේගන්',
    'America/Merida' => 'ඇමරිකාව / මෙරිඩා',
    'America/Monterrey' => 'ඇමරිකාව / Monterrey',
    'America/Mexico_City' => 'ඇමරිකාව / Mexico_City',
    'America/Chihuahua' => 'ඇමරිකාව / චිහුවාහුවා',
    'America/Hermosillo' => 'ඇමරිකාව / Hermosillo',
    'America/Mazatlan' => 'ඇමරිකාව / Mazatlan',
    'America/Tijuana' => 'ඇමරිකාව / Tijuana',
    'America/Anguilla' => 'ඇමරිකාව / ඇන්ගුලියාව',
    'America/Antigua' => 'ඇමරිකාව / ඇන්ටිගුවා',
    'America/Nassau' => 'ඇමරිකාව / නාසු',
    'America/Barbados' => 'ඇමරිකාව / බාබඩෝස්',
    'America/Belize' => 'ඇමරිකාව / බෙලිස්',
    'Atlantic/Bermuda' => 'අත්ලාන්තික් / බර්මියුඩා',
    'America/Cayman' => 'ඇමරිකාව / කේමන්',
    'America/Costa_Rica' => 'ඇමරිකාව / Costa_Rica',
    'America/Havana' => 'ඇමරිකාව / හවානා',
    'America/Dominica' => 'ඇමරිකාව / ඩොමිනිකා',
    'America/Santo_Domingo' => 'ඇමරිකාව / Santo_Domingo',
    'America/El_Salvador' => 'ඇමරිකාව / El_Salvador',
    'America/Grenada' => 'ඇමරිකාව / ග්රෙනේඩා',
    'America/Guadeloupe' => 'ඇමරිකාව / Guadeloupe',
    'America/Guatemala' => 'ඇමරිකාව / ගෝතමාලාවේ',
    'America/Port-au-Prince' => 'ඇමරිකාව / වරාය-au-Prince',
    'America/Tegucigalpa' => 'ඇමරිකාව / Tegucigalpa',
    'America/Jamaica' => 'ඇමරිකාව / ජැමෙයිකාවේ',
    'America/Martinique' => 'ඇමරිකාව / මාර්ටිනීක්',
    'America/Montserrat' => 'ඇමරිකාව / මොන්ට්සෙරාට්',
    'America/Managua' => 'ඇමරිකාව / Managua',
    'America/Panama' => 'ඇමරිකාව / පානම',
    'America/Puerto_Rico' => 'ඇමරිකාව / Puerto_Rico',
    'America/St_Kitts' => 'ඇමරිකාව / St_Kitts',
    'America/St_Lucia' => 'ඇමරිකාව / St_Lucia',
    'America/Miquelon' => 'ඇමරිකාව / Miquelon',
    'America/St_Vincent' => 'ඇමරිකාව / St_Vincent',
    'America/Grand_Turk' => 'ඇමරිකාව / Grand_Turk',
    'America/Tortola' => 'ඇමරිකාව / ෙටෝර්ෙටෝලා',
    'America/St_Thomas' => 'ඇමරිකාව / St_Thomas',
    'America/Argentina/Buenos_Aires' => 'ඇමරිකාව / ආර්ජන්ටිනාව / Buenos_Aires',
    'America/Argentina/Cordoba' => 'ඇමරිකාව / ආර්ජන්ටිනාව / Cordoba',
    'America/Argentina/Tucuman' => 'ඇමරිකාව / ආර්ජන්ටිනාව / Tucuman',
    'America/Argentina/La_Rioja' => 'ඇමරිකාව / ආර්ජන්ටිනාව / La_Rioja',
    'America/Argentina/San_Juan' => 'ඇමරිකාව / ආර්ජන්ටිනාව / San_Juan',
    'America/Argentina/Jujuy' => 'ඇමරිකාව / ආර්ජන්ටිනාව / ජුජුයි',
    'America/Argentina/Catamarca' => 'ඇමරිකාව / ආර්ජන්ටිනාව / Catamarca',
    'America/Argentina/Mendoza' => 'ඇමරිකාව / ආර්ජන්ටිනාව / මෙන්ඩෝසා',
    'America/Argentina/Rio_Gallegos' => 'ඇමරිකාව / ආර්ජන්ටිනාව / Rio_Gallegos',
    'America/Argentina/Ushuaia' => ' ඇමරිකාව / ආර්ජන්ටිනාව / Ushuaia',
    'America/Aruba' => 'ඇමරිකාව / ඇරුබා',
    'America/La_Paz' => 'ඇමරිකාව / La_Paz',
    'America/Noronha' => 'ඇමරිකාව / Noronha',
    'America/Belem' => 'ඇමරිකාව / Belem',
    'America/Fortaleza' => 'ඇමරිකාව / Fortaleza',
    'America/Recife' => 'ඇමරිකාව / Recife',
    'America/Araguaina' => 'ඇමරිකාව / Araguaina',
    'America/Maceio' => 'ඇමරිකාව / Maceio',
    'America/Bahia' => 'ඇමරිකාව / Bahia',
    'America/Sao_Paulo' => 'ඇමරිකාව / Sao_Paulo',
    'America/Campo_Grande' => 'ඇමරිකාව / Campo_Grande',
    'America/Cuiaba' => 'ඇමරිකාව / Cuiaba',
    'America/Porto_Velho' => 'ඇමරිකාව / Porto_Velho',
    'America/Boa_Vista' => 'ඇමරිකාව / Boa_Vista',
    'America/Manaus' => 'ඇමරිකාව / Manaus',
    'America/Eirunepe' => 'ඇමරිකාව / Eirunepe',
    'America/Rio_Branco' => 'ඇමරිකාව / Rio_Branco',
    'America/Santiago' => 'ඇමරිකාව / සන්තියාගෝ',
    'Pacific/Easter' => 'පැසිෆික් / පාස්කු',
    'America/Bogota' => 'ඇමරිකාව / බොගෝටා',
    'America/Curacao' => 'ඇමරිකාව / කුරෙකෝවා',
    'America/Guayaquil' => 'ඇමරිකාව / Guayaquil',
    'Pacific/Galapagos' => 'පැසිෆික් / Galapagos',
    'Atlantic/Stanley' => 'අත්ලාන්තික් / ස්ටැන්ලි',
    'America/Cayenne' => 'ඇමරිකාව / Cayenne',
    'America/Guyana' => 'ඇමරිකාව / ගයනා',
    'America/Asuncion' => 'ඇමරිකාව / පැරගුවාව',
    'America/Lima' => 'ඇමරිකාව / ලීමා',
    'Atlantic/South_Georgia' => 'අත්ලාන්තික් / South_Georgia',
    'America/Paramaribo' => 'ඇමරිකාව / Paramaribo',
    'America/Port_of_Spain' => 'ඇමරිකාව / Port_of_Spain',
    'America/Montevideo' => 'ඇමරිකාව / මොන්ටෙවිඩියෝ',
    'America/Caracas' => 'ඇමරිකාව / කැරකස්',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google',
    'Box' => 'Box.net',
    'Facebook' => 'ෆේස්බුක්',
    'Twitter' => 'ට්විටර්',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Google සම්බන්ධතා',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'ඉල්ලීම්',
    2 => 'ප්රවේශ',
    3 => 'වලංගු නොවේ',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'ව්යාපාරය',
    'email' => 'විද්යුත් තැපෑල',
    'event' => 'අවස්ථාවට',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'ව්යාපාරය',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'ව්යාපාරය',
    'email' => 'විද්යුත් තැපෑල',
    'event' => 'අවස්ථාවට',
    'system' => ' පද්ධතිය',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'දැනුම මූලික';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Categories';
$app_list_strings['aok_status_list']['Draft'] = 'කෙටුම්පත්';
$app_list_strings['aok_status_list']['Expired'] = 'කල් ඉකුත්ය';
$app_list_strings['aok_status_list']['In_Review'] = 'සමාලෝචනය දී';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'පුද්ගලික';
$app_list_strings['aok_status_list']['published_public'] = 'පොදු';

$app_list_strings['moduleList']['FP_events'] = 'සිද්ධීන්';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'ස්ථාන';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'ආරාධනා';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'ආරාධිත නොවේ';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'සහභාගි';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'සහභාගී නොවේ';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'පිළිගත්';
$app_list_strings['fp_event_status_dom']['Declined'] = 'පහත වැටීම';
$app_list_strings['fp_event_status_dom']['No Response'] = 'ප්රතිචාරයක් නැත';

$app_strings['LBL_STATUS_EVENT'] = 'ඇරයුමෙහි තත්වය';
$app_strings['LBL_ACCEPT_STATUS'] = 'තත්ත්වය පිළිගන්න';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = ' මෙම පිටුව තෝරන්න';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = ' සියලුම තෝරන්න';
$app_strings['LBL_LISTVIEW_NONE'] = ' සියලුම නොගැනීම';

//aod
$app_list_strings['moduleList']['AOD_IndexEvent'] = 'Index Event';
$app_list_strings['moduleList']['AOD_Index'] = 'දර්ශකය';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'නඩු සිදුවීම්';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'නඩු යාවත්කාලීන';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '========== මෙම මාර්ගයට ඉහළින් ඊ-මේල් මගින් පිලිතුරු දෙන්න කරුණාකර ==========';


//aop
$app_list_strings['case_state_default_key'] = 'විවෘත';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'විවෘත',
        'Closed' => 'වසා',
    );
$app_list_strings['case_status_default_key'] = 'Open_New';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'අලුත්',
        'Open_Assigned' => 'පවරා',
        'Closed_Closed' => 'වසා',
        'Open_Pending Input' => 'විභාග වෙමින් ආදාන',
        'Closed_Rejected' => 'ප්රතික්ෂේප',
        'Closed_Duplicate' => 'අනුපිටපත්',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'තනි පරිශීලක',
        'Account' => 'ගිණුම පරිශීලක',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'පද්ධතිය පෙරනිමි',
    'singleUser' => 'තනි පරිශීලක',
    'roundRobin' => 'වටය- රොබින්',
    'leastBusy' => 'අවම වශයෙන් - කාර්යබහුල',
    'random' => 'අහඹු',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = ' වාර්තා';
$app_list_strings['moduleList']['AOR_Conditions'] = 'වාර්තාව කොන්දේසි';
$app_list_strings['moduleList']['AOR_Charts'] = 'වාර්තාව ප්රස්ථාර සටහන්';
$app_list_strings['moduleList']['AOR_Fields'] = 'වාර්තාව ෆීල්ඩ්ස්';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'නියමිත වාර්තා';
$app_list_strings['aor_operator_list']['Equal_To'] = 'සමානයි';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'සමාන නොවන';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'වඩා උතුම්';
$app_list_strings['aor_operator_list']['Less_Than'] = 'අඩු';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'වඩා විශාල හෝ සමාන';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'වඩා අඩු හෝ සමාන';
$app_list_strings['aor_operator_list']['Contains'] = 'අඩංගු';
$app_list_strings['aor_operator_list']['Starts_With'] = 'සමඟ ආරම්භ';
$app_list_strings['aor_operator_list']['Ends_With'] = 'සමග අවසන් වේ';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'වයි - m- ඈ';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-d-Y';
$app_list_strings['aor_format_options']['d-m-Y'] = 'd-m-Y';
$app_list_strings['aor_format_options']['Y/m/d'] = 'Y/m/d';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/d/Y';
$app_list_strings['aor_format_options']['d/m/Y'] = 'ඈ / m / Y';
$app_list_strings['aor_format_options']['Y.m.d'] = 'Y.m.d';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.d.Y';
$app_list_strings['aor_format_options']['d.m.Y'] = 'd.m.Y';
$app_list_strings['aor_format_options']['Ymd'] = 'Ymd';
$app_list_strings['aor_format_options']['Y-m'] = 'වයි - මීටර්';
$app_list_strings['aor_format_options']['Y'] = 'Y';
$app_list_strings['aor_condition_operator_list']['And'] = 'සහ';
$app_list_strings['aor_condition_operator_list']['OR'] = 'නැතහොත්';
$app_list_strings['aor_condition_type_list']['Value'] = 'වටිනාකම';
$app_list_strings['aor_condition_type_list']['Field'] = 'ක්ෂේත්ර';
$app_list_strings['aor_condition_type_list']['Date'] = 'දිනය';
$app_list_strings['aor_condition_type_list']['Multi'] = 'එක්';
$app_list_strings['aor_condition_type_list']['Period'] = 'කාල සීමාව';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'වත්මන් පරිශීලක';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'විනාඩි';
$app_list_strings['aor_date_type_list']['hour'] = 'පැය';
$app_list_strings['aor_date_type_list']['day'] = 'දවස්';
$app_list_strings['aor_date_type_list']['week'] = 'සති';
$app_list_strings['aor_date_type_list']['month'] = 'මාස';
$app_list_strings['aor_date_type_list']['business_hours'] = 'වේලාව';
$app_list_strings['aor_date_options']['now'] = 'දැන්';
$app_list_strings['aor_date_options']['field'] = 'මෙම ක්ෂේත්ර';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'යද්දි';
$app_list_strings['aor_sort_operator']['DESC'] = 'බැස';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'ගණන්';
$app_list_strings['aor_function_list']['MIN'] = 'අවම';
$app_list_strings['aor_function_list']['MAX'] = 'උපරිම';
$app_list_strings['aor_function_list']['SUM'] = 'මුදල';
$app_list_strings['aor_function_list']['AVG'] = 'සාමාන්ය';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'ගණන්';
$app_list_strings['aor_total_options']['SUM'] = 'මුදල';
$app_list_strings['aor_total_options']['AVG'] = 'සාමාන්ය';
$app_list_strings['aor_chart_types']['bar'] = 'නීතිඥ සටහන';
$app_list_strings['aor_chart_types']['line'] = 'ලයින් සටහන';
$app_list_strings['aor_chart_types']['pie'] = 'පයි සටහන';
$app_list_strings['aor_chart_types']['radar'] = 'රේඩාර් සටහන';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Stacked bar';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Grouped bar';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'මාසික';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'සතිපතා';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'දිනපතා';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'ක්රියාකාරී';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'අක්රීය';
$app_list_strings['aor_email_type_list']['Email Address'] = 'විද්යුත් තැපෑල';
$app_list_strings['aor_email_type_list']['Specify User'] = 'පරිශීලක';
$app_list_strings['aor_email_type_list']['Users'] = 'පරිශිලකයින්';
$app_list_strings['aor_assign_options']['all'] = 'සියළුම පරිශීලකයන්';
$app_list_strings['aor_assign_options']['role'] = 'කාර්යභාරය සියළු පරිශීලකයන්';
$app_list_strings['aor_assign_options']['security_group'] = 'ආරක්ෂක සමූහ සියළු පරිශීලකයන්';
$app_list_strings['date_time_period_list']['today'] = 'අද';
$app_list_strings['date_time_period_list']['yesterday'] = 'ඊයේ';
$app_list_strings['date_time_period_list']['this_week'] = 'මෙම සතිය';
$app_list_strings['date_time_period_list']['last_week'] = 'පසුගිය සතිය';
$app_list_strings['date_time_period_list']['last_month'] = 'පසුගිය මාසික';
$app_list_strings['date_time_period_list']['this_month'] = 'මේ මාසය';
$app_list_strings['date_time_period_list']['this_quarter'] = 'මෙම කාර්තුව';
$app_list_strings['date_time_period_list']['last_quarter'] = 'පසුගිය කාර්තුව';
$app_list_strings['date_time_period_list']['this_year'] = 'මෙම වර්ෂය';
$app_list_strings['date_time_period_list']['last_year'] = 'පසුගිය වසර';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'මත';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'මත';
$app_strings['LBL_CRON_AT'] = 'පිහිටි';
$app_strings['LBL_CRON_RAW'] = ' උසස්';
$app_strings['LBL_CRON_MIN'] = 'අවම';
$app_strings['LBL_CRON_HOUR'] = 'පැය';
$app_strings['LBL_CRON_DAY'] = 'දවස';
$app_strings['LBL_CRON_MONTH'] = 'මාසික';
$app_strings['LBL_CRON_DOW'] = 'ඩව්';
$app_strings['LBL_CRON_DAILY'] = 'දිනපතා';
$app_strings['LBL_CRON_WEEKLY'] = 'සතිපතා';
$app_strings['LBL_CRON_MONTHLY'] = 'මාසික';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'කොන්ත්රාත්';
$app_list_strings['moduleList']['AOS_Invoices'] = 'ඉන්වොයිසි';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - Templates';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Products - Categories';
$app_list_strings['moduleList']['AOS_Products'] = 'නිෂ්පාදන';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'රේඛා අයිතම';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'ලයින් අයිතමය කණ්ඩායම්';
$app_list_strings['moduleList']['AOS_Quotes'] = 'මිල කැඳවීම්';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'රස පරීක්ෂක';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'තරගකරු';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'පාරිභෝගිකයා';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'අනුකලකය';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'ආයෝජක';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'සහකරු';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'මාධ්ය';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'අනාගත';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'දේශීය වෙළඳ සහකරුවන්';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'වෙනත්';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'කෙටුම්පත්';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'සාකච්ඡාමය';
$app_list_strings['quote_stage_dom']['Delivered'] = 'පාවා';
$app_list_strings['quote_stage_dom']['On Hold'] = 'රඳවා ගත්';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'තහවුරු';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'සංවෘත පිළිගත්';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'සංවෘත ලොස්ට්';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'මළ වසා';
$app_list_strings['quote_term_dom']['Net 15'] = 'ඔන්ලයින් 15';
$app_list_strings['quote_term_dom']['Net 30'] = 'ඔන්ලයින් 30';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'අනුමතයි';
$app_list_strings['approval_status_dom']['Not Approved'] = 'අනුමත නැත';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7.5%';
$app_list_strings['vat_list']['17.5'] = '17.5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pct';
$app_list_strings['discount_list']['Amount'] = 'Amt';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'රස පරීක්ෂක';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'තරගකරු';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'පාරිභෝගිකයා';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'අනුකලකය';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'ආයෝජක';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'සහකරු';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'මාධ්ය';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'අනාගත';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'දේශීය වෙළඳ සහකරුවන්';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'වෙනත්';
$app_list_strings['invoice_status_dom']['Paid'] = 'ගෙවුම්';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'නොගෙවූ';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'අහෝසි';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'ඉන්වොයිස් නොවේ';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'ඉන්වොයිස්';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'ලැප්ටොප්';
$app_list_strings['product_category_dom']['Desktops'] = 'ඩෙස්ක්ටොප්';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'යහපත';
$app_list_strings['product_type_dom']['Service'] = 'සේවය';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'මිල කැඳවීම්';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'ඉන්වොයිසි';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'කොන්ත්රාත්';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'මිල කැඳවීම්';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'ඉන්වොයිසි';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'කොන්ත්රාත්';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'ගිණුම්';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'සබඳතා';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'ඇද්ද';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'ආරම්භ වී නැත';
$app_list_strings['contract_status_list']['In Progress'] = 'ප්රගතියේ';
$app_list_strings['contract_status_list']['Signed'] = 'අත්සන්';
$app_list_strings['contract_type_list']['Type'] = 'වර්ගය';
$app_strings['LBL_PRINT_AS_PDF'] = ' පී.ඩී.එෆ් ලෙස මුද්රණය';
$app_strings['LBL_SELECT_TEMPLATE'] = 'යනු සැකිල්ල කරුණාකර තෝරන්න';
$app_strings['LBL_NO_TEMPLATE'] = 'සොයාගත කිසිදු සැකිල්ල \ දෝෂය \ බලන්න PDF සැකිලි මොඩියුලය යන්න හා එක් නිර්මාණය කරන්න.';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'කාර්ය ප්රවාහ';
$app_list_strings['moduleList']['AOW_Conditions'] = 'කාර්ය ප්රවාහ කොන්දේසි';
$app_list_strings['moduleList']['AOW_Processed'] = 'ක්රියාවලිය විගණන';
$app_list_strings['moduleList']['AOW_Actions'] = 'කාර්ය ප්රවාහ ක්රියාමාර්ග';
$app_list_strings['aow_status_list']['Active'] = 'ක්රියාකාරී';
$app_list_strings['aow_status_list']['Inactive'] = 'අක්රීය';
$app_list_strings['aow_operator_list']['Equal_To'] = 'සමානයි';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'සමාන නොවන';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'වඩා උතුම්';
$app_list_strings['aow_operator_list']['Less_Than'] = 'අඩු';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'වඩා විශාල හෝ සමාන';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'වඩා අඩු හෝ සමාන';
$app_list_strings['aow_operator_list']['Contains'] = 'අඩංගු';
$app_list_strings['aow_operator_list']['Starts_With'] = 'සමඟ ආරම්භ';
$app_list_strings['aow_operator_list']['Ends_With'] = 'සමග අවසන් වේ';
$app_list_strings['aow_operator_list']['is_null'] = 'ශුන්ය වේ';
$app_list_strings['aow_process_status_list']['Complete'] = 'සම්පූර්ණ';
$app_list_strings['aow_process_status_list']['Running'] = 'ධාවන';
$app_list_strings['aow_process_status_list']['Pending'] = 'විභාග වෙමින්';
$app_list_strings['aow_process_status_list']['Failed'] = 'අසමත් විය';
$app_list_strings['aow_condition_operator_list']['And'] = 'සහ';
$app_list_strings['aow_condition_operator_list']['OR'] = 'නැතහොත්';
$app_list_strings['aow_condition_type_list']['Value'] = 'වටිනාකම';
$app_list_strings['aow_condition_type_list']['Field'] = 'ක්ෂේත්ර';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Any Change';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'SecurityGroup දී';
$app_list_strings['aow_condition_type_list']['Date'] = 'දිනය';
$app_list_strings['aow_condition_type_list']['Multi'] = 'එක්';
$app_list_strings['aow_action_type_list']['Value'] = 'වටිනාකම';
$app_list_strings['aow_action_type_list']['Field'] = 'ක්ෂේත්ර';
$app_list_strings['aow_action_type_list']['Date'] = 'දිනය';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'රවුන්ඩ් රොබින්';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'අවම වශයෙන් කාර්යබහුල';
$app_list_strings['aow_action_type_list']['Random'] = 'අහඹු';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'වටිනාකම';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'ක්ෂේත්ර';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'විනාඩි';
$app_list_strings['aow_date_type_list']['hour'] = 'පැය';
$app_list_strings['aow_date_type_list']['day'] = 'දවස්';
$app_list_strings['aow_date_type_list']['week'] = 'සති';
$app_list_strings['aow_date_type_list']['month'] = 'මාස';
$app_list_strings['aow_date_type_list']['year'] = 'Years';
$app_list_strings['aow_date_type_list']['business_hours'] = 'වේලාව';
$app_list_strings['aow_date_options']['now'] = 'දැන්';
$app_list_strings['aow_date_options']['today'] = 'අද';
$app_list_strings['aow_date_options']['field'] = 'මෙම ක්ෂේත්ර';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'සියළුම පරිශීලකයන්';
$app_list_strings['aow_assign_options']['role'] = 'කාර්යභාරය සියළු පරිශීලකයන්';
$app_list_strings['aow_assign_options']['security_group'] = 'ආරක්ෂක සමූහ සියළු පරිශීලකයන්';
$app_list_strings['aow_email_type_list']['Email Address'] = 'විද්යුත් තැපෑල';
$app_list_strings['aow_email_type_list']['Record Email'] = 'වාර්තා විද්යුත්';
$app_list_strings['aow_email_type_list']['Related Field'] = 'සබැඳි ක්ෂේත්ර';
$app_list_strings['aow_email_type_list']['Specify User'] = 'පරිශීලක';
$app_list_strings['aow_email_type_list']['Users'] = 'පරිශිලකයින්';
$app_list_strings['aow_email_to_list']['to'] = 'දක්වා';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Bcc';
$app_list_strings['aow_run_on_list']['All_Records'] = 'සියලුම වාර්තා';
$app_list_strings['aow_run_on_list']['New_Records'] = 'නව වාර්තා';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'නවීකරණය කරන ලද වාර්තා';
$app_list_strings['aow_run_when_list']['Always'] = 'නිතරම';
$app_list_strings['aow_run_when_list']['On_Save'] = 'පමණක් සුරකින්න දා';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'පමණක් මෙම නියමාකාරකය දී';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projects - Templates';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'ව්යාපෘති කාර්ය සාධක ආකෘති';
$app_list_strings['relationship_type_list']['FS'] = 'ආරම්භ කිරීමට අවසානයි';
$app_list_strings['relationship_type_list']['SS'] = 'ආරම්භක ආරම්භ';
$app_list_strings['duration_unit_dom']['Days'] = 'දවස්';
$app_list_strings['duration_unit_dom']['Hours'] = 'පැය';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'දැක්ම Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'View Detail';
$app_strings['LBL_CREATE_PROJECT'] = 'ව්යාපෘති සාදන්න';

//gmaps
$app_strings['LBL_MAP'] = 'සිතියම';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'දේශාංශ';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'අක්ෂාංශ';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Geocode තත්ත්වය';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Address';

$app_list_strings['moduleList']['jjwg_Maps'] = 'සිතියම්';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Maps - Markers';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Maps - Areas';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Maps - Address Cache';

$app_list_strings['moduleList']['jjwp_Partners'] = 'JJWP Partners';

$app_list_strings['map_unit_type_list']['mi'] = 'සැතපුම්';
$app_list_strings['map_unit_type_list']['km'] = 'කිලෝමීටර්';

$app_list_strings['map_module_type_list']['Accounts'] = 'ගිණුම්';
$app_list_strings['map_module_type_list']['Contacts'] = 'සබඳතා';
$app_list_strings['map_module_type_list']['Cases'] = ' නඩු';
$app_list_strings['map_module_type_list']['Leads'] = 'ඇද්ද';
$app_list_strings['map_module_type_list']['Meetings'] = 'රැස්වීම්';
$app_list_strings['map_module_type_list']['Opportunities'] = 'අවස්ථා';
$app_list_strings['map_module_type_list']['Project'] = 'ව්යාපෘති';
$app_list_strings['map_module_type_list']['Prospects'] = 'ඉලක්ක';

$app_list_strings['map_relate_type_list']['Accounts'] = 'ගිණුම';
$app_list_strings['map_relate_type_list']['Contacts'] = 'සබඳතාව';
$app_list_strings['map_relate_type_list']['Cases'] = 'නඩු';
$app_list_strings['map_relate_type_list']['Leads'] = 'ඊයම්';
$app_list_strings['map_relate_type_list']['Meetings'] = 'රැස්වීම';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'අවස්ථාව';
$app_list_strings['map_relate_type_list']['Project'] = 'ව්යාපෘති';
$app_list_strings['map_relate_type_list']['Prospects'] = 'ඉලක්කය';

$app_list_strings['marker_image_list']['accident'] = 'හදිසි අනතුරු';
$app_list_strings['marker_image_list']['administration'] = 'පරිපාලනය';
$app_list_strings['marker_image_list']['agriculture'] = 'කෘෂිකර්ම';
$app_list_strings['marker_image_list']['aircraft_small'] = 'කුඩා ගුවන්යාත්‍රාව';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'ගුවන් යානයක් සංචාරක ව්යාපාරය';
$app_list_strings['marker_image_list']['airport'] = 'ගුවන් තොටුපල';
$app_list_strings['marker_image_list']['amphitheater'] = 'රංග';
$app_list_strings['marker_image_list']['apartment'] = 'මහල් නිවාස';
$app_list_strings['marker_image_list']['aquarium'] = 'මින් මැදුර';
$app_list_strings['marker_image_list']['arch'] = 'Arch';
$app_list_strings['marker_image_list']['atm'] = 'Atm';
$app_list_strings['marker_image_list']['audio'] = 'ශ්රව්ය උපකරණ';
$app_list_strings['marker_image_list']['bank'] = 'බැංකු';
$app_list_strings['marker_image_list']['bank_euro'] = 'බැංකු යුරෝ';
$app_list_strings['marker_image_list']['bank_pound'] = 'බැංකු පවුම්';
$app_list_strings['marker_image_list']['bar'] = 'නීතිඥ';
$app_list_strings['marker_image_list']['beach'] = 'බීච්';
$app_list_strings['marker_image_list']['beautiful'] = 'ලස්සන';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'පාපැදි වාහනය නවත්වන ස්ථානය';
$app_list_strings['marker_image_list']['big_city'] = 'ලොකු නගරය';
$app_list_strings['marker_image_list']['bridge'] = 'පාලම';
$app_list_strings['marker_image_list']['bridge_modern'] = 'පාලම නූතන';
$app_list_strings['marker_image_list']['bus'] = 'බස්';
$app_list_strings['marker_image_list']['cable_car'] = 'කේබල් කාර්';
$app_list_strings['marker_image_list']['car'] = 'මෝටර් රථ';
$app_list_strings['marker_image_list']['car_rental'] = 'මෝටර් රථ කුලියට ගැනීම';
$app_list_strings['marker_image_list']['carrepair'] = 'මෝටර් රථ අලුත්වැඩියා';
$app_list_strings['marker_image_list']['castle'] = 'කාසල්';
$app_list_strings['marker_image_list']['cathedral'] = 'ආසන දෙව්මැදුර';
$app_list_strings['marker_image_list']['chapel'] = 'චැපල්';
$app_list_strings['marker_image_list']['church'] = 'පල්ලිය';
$app_list_strings['marker_image_list']['city_square'] = 'නගරය චතුරස්රය';
$app_list_strings['marker_image_list']['cluster'] = 'පොකුරු';
$app_list_strings['marker_image_list']['cluster_2'] = 'පොකුරු 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'පොකුරු 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'පොකුරු 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'පොකුරු 5';
$app_list_strings['marker_image_list']['coffee'] = 'කෝපි';
$app_list_strings['marker_image_list']['community_centre'] = 'ප්රජා මධ්යස්ථානය';
$app_list_strings['marker_image_list']['company'] = 'සමාගම';
$app_list_strings['marker_image_list']['conference'] = 'සමුළුව';
$app_list_strings['marker_image_list']['construction'] = 'ඉදිකිරීම';
$app_list_strings['marker_image_list']['convenience'] = 'පහසුව';
$app_list_strings['marker_image_list']['court'] = 'අධිකරණය';
$app_list_strings['marker_image_list']['cruise'] = 'කෲස්';
$app_list_strings['marker_image_list']['currency_exchange'] = 'මුදල් හුවමාරුව';
$app_list_strings['marker_image_list']['customs'] = 'රේගුව';
$app_list_strings['marker_image_list']['cycling'] = 'පාපැදි';
$app_list_strings['marker_image_list']['dam'] = 'වේල්ල';
$app_list_strings['marker_image_list']['dentist'] = 'දන්ත වෛද්යවරයා';
$app_list_strings['marker_image_list']['deptartment_store'] = 'දෙපාර්තමේන්තුව ප්රදර්ශනාගාරය';
$app_list_strings['marker_image_list']['disability'] = 'ආබාධිත';
$app_list_strings['marker_image_list']['disabled_parking'] = 'ආබාධිත වාහනය නවත්වන ස්ථානය';
$app_list_strings['marker_image_list']['doctor'] = 'ඩොක්ටර්';
$app_list_strings['marker_image_list']['dog_leash'] = 'බල්ලා රැහැනක්';
$app_list_strings['marker_image_list']['down'] = 'පහළට';
$app_list_strings['marker_image_list']['down_left'] = 'වාමාංශික පහළට';
$app_list_strings['marker_image_list']['down_right'] = 'අයිතිය පහළට';
$app_list_strings['marker_image_list']['down_then_left'] = 'පහළට එවිට වමේ';
$app_list_strings['marker_image_list']['down_then_right'] = 'පහළට එවිට අයිතිය';
$app_list_strings['marker_image_list']['drugs'] = 'ඖෂධ';
$app_list_strings['marker_image_list']['elevator'] = 'විදුලි සෝපානය';
$app_list_strings['marker_image_list']['embassy'] = 'තානාපති කාර්යාලය';
$app_list_strings['marker_image_list']['expert'] = 'විශේෂඥ';
$app_list_strings['marker_image_list']['factory'] = 'කර්මාන්ත ශාලාව';
$app_list_strings['marker_image_list']['falling_rocks'] = 'පහත වැටෙන පාෂාණ';
$app_list_strings['marker_image_list']['fast_food'] = 'ක්ෂණික ආහාර';
$app_list_strings['marker_image_list']['festival'] = 'උළෙල';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'වන';
$app_list_strings['marker_image_list']['fountain'] = 'ෆවුන්ටන් කැෆේ';
$app_list_strings['marker_image_list']['friday'] = 'සිකුරාදා';
$app_list_strings['marker_image_list']['garden'] = 'වත්ත';
$app_list_strings['marker_image_list']['gas_station'] = 'ගෑස් ස්ථානය';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'තෑගි';
$app_list_strings['marker_image_list']['gourmet'] = 'රසැති ආහාර';
$app_list_strings['marker_image_list']['grocery'] = 'සිල්ලර';
$app_list_strings['marker_image_list']['hairsalon'] = 'කෙස් සැලෝන්';
$app_list_strings['marker_image_list']['helicopter'] = 'හෙලිකොප්ටර්';
$app_list_strings['marker_image_list']['highway'] = 'අධිවේගී මාර්ගය';
$app_list_strings['marker_image_list']['historical_quarter'] = 'ඓතිහාසික කාර්තුව';
$app_list_strings['marker_image_list']['home'] = 'මුල';
$app_list_strings['marker_image_list']['hospital'] = 'රෝහල';
$app_list_strings['marker_image_list']['hostel'] = 'නේවාසිකාගාරය';
$app_list_strings['marker_image_list']['hotel'] = 'හෝටල්';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'හෝටලයේ 1 ස්ටාර්';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'හෝටලයේ 2 තරු';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'හෝටලයේ 3 තරු';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'හෝටලයේ 4 තරු';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'හෝටලයේ 5 තරු ලකුණු';
$app_list_strings['marker_image_list']['info'] = 'තොරතුරු';
$app_list_strings['marker_image_list']['justice'] = 'අධිකරණ';
$app_list_strings['marker_image_list']['lake'] = 'ලේක්';
$app_list_strings['marker_image_list']['laundromat'] = 'Laundromat';
$app_list_strings['marker_image_list']['left'] = 'වමේ';
$app_list_strings['marker_image_list']['left_then_down'] = 'ඩවුන් එවිට වමේ';
$app_list_strings['marker_image_list']['left_then_up'] = 'දක්වා එවිට වමේ';
$app_list_strings['marker_image_list']['library'] = 'පුස්තකාලය';
$app_list_strings['marker_image_list']['lighthouse'] = 'ලයිට්හවුස්';
$app_list_strings['marker_image_list']['liquor'] = 'මත්පැන්';
$app_list_strings['marker_image_list']['lock'] = 'ලොක්';
$app_list_strings['marker_image_list']['main_road'] = 'ප්රධාන පාර';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'ජංගම දුරකථන කුළුණ';
$app_list_strings['marker_image_list']['modern_tower'] = 'නූතන ටවර්';
$app_list_strings['marker_image_list']['monastery'] = 'අසපුව';
$app_list_strings['marker_image_list']['monday'] = 'සඳුදා';
$app_list_strings['marker_image_list']['monument'] = 'ස්මාරකය';
$app_list_strings['marker_image_list']['mosque'] = 'මුස්ලිම් පල්ලිය';
$app_list_strings['marker_image_list']['motorcycle'] = 'මෝටර් සයිකල්';
$app_list_strings['marker_image_list']['museum'] = 'කෞතුකාගාරය';
$app_list_strings['marker_image_list']['music_live'] = 'සංගීත සජීවි';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'තෙල් පොම්ප ජැක්';
$app_list_strings['marker_image_list']['pagoda'] = 'පාගොඩ';
$app_list_strings['marker_image_list']['palace'] = 'මාලිගය';
$app_list_strings['marker_image_list']['panoramic'] = 'පරිදර්ශක';
$app_list_strings['marker_image_list']['park'] = 'පාර්ක්';
$app_list_strings['marker_image_list']['park_and_ride'] = 'පාර්ක් ගෙවි';
$app_list_strings['marker_image_list']['parking'] = 'වාහනය නවත්වන ස්ථානය';
$app_list_strings['marker_image_list']['photo'] = 'ඡායාරූපය';
$app_list_strings['marker_image_list']['picnic'] = 'Picnic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'ස්ථාන Unvisited';
$app_list_strings['marker_image_list']['places_visited'] = 'ස්ථාන ආසියානු';
$app_list_strings['marker_image_list']['playground'] = 'ක්රීඩාංගනයේදී';
$app_list_strings['marker_image_list']['police'] = 'පොලිසිය';
$app_list_strings['marker_image_list']['port'] = 'වරාය';
$app_list_strings['marker_image_list']['postal'] = 'තැපැල්';
$app_list_strings['marker_image_list']['power_line_pole'] = 'විදුලි දිගු ධ්රැවය';
$app_list_strings['marker_image_list']['power_plant'] = 'විදුලි බලාගාරය';
$app_list_strings['marker_image_list']['power_substation'] = 'විදුලිබල ද්රව්ය';
$app_list_strings['marker_image_list']['public_art'] = 'රාජ්ය කලාව';
$app_list_strings['marker_image_list']['rain'] = 'වැසි';
$app_list_strings['marker_image_list']['real_estate'] = 'දේපළ වෙළදාම්';
$app_list_strings['marker_image_list']['regroup'] = 'යලි රැලි';
$app_list_strings['marker_image_list']['resort'] = 'රිසෝට්';
$app_list_strings['marker_image_list']['restaurant'] = 'අවන්හල';
$app_list_strings['marker_image_list']['restaurant_african'] = 'අවන්හල අප්රිකානු';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'අවන්හල බාබකියු';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'අවන්හල බුෆේ';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'අවන්හල චීන';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'අවන්හල මාළු';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'අවන්හල මාළු චිප්ස්හි';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'අවන්හල රසැති ආහාර';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'අවන්හල ග්රීක';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'අවන්හල ඉන්දීය';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'අවන්හල ඉතාලි';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'අවන්හල ජපන්';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'අවන්හල Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'අවන්හල කොරියානු';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'අවන්හල මධ්යධරණී';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'අවන්හල මෙක්සිකානු';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'ප්රේමාන්විත ආපන';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'අවන්හල තායි';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'අවන්හල තුර්කි';
$app_list_strings['marker_image_list']['right'] = 'රයිට්';
$app_list_strings['marker_image_list']['right_then_down'] = 'රයිට් එවිට පහළට';
$app_list_strings['marker_image_list']['right_then_up'] = 'රයිට් එවිට දක්වා';
$app_list_strings['marker_image_list']['saturday'] = 'සෙනසුරාදා';
$app_list_strings['marker_image_list']['school'] = 'පාසලේ';
$app_list_strings['marker_image_list']['shopping_mall'] = 'සාප්පු සංකීර්ණය';
$app_list_strings['marker_image_list']['shore'] = 'වෙරළ';
$app_list_strings['marker_image_list']['sight'] = 'අක්ෂි';
$app_list_strings['marker_image_list']['small_city'] = 'කුඩා නගරයේ';
$app_list_strings['marker_image_list']['snow'] = 'හිම';
$app_list_strings['marker_image_list']['spaceport'] = 'Spaceport';
$app_list_strings['marker_image_list']['speed_100'] = 'ස්පීඩ් 100';
$app_list_strings['marker_image_list']['speed_110'] = 'ස්පීඩ් 110';
$app_list_strings['marker_image_list']['speed_120'] = 'ස්පීඩ් 120';
$app_list_strings['marker_image_list']['speed_130'] = 'ස්පීඩ් 130';
$app_list_strings['marker_image_list']['speed_20'] = 'ස්පීඩ් 20';
$app_list_strings['marker_image_list']['speed_30'] = 'ස්පීඩ් 30';
$app_list_strings['marker_image_list']['speed_40'] = 'ස්පීඩ් 40';
$app_list_strings['marker_image_list']['speed_50'] = 'ස්පීඩ් 50';
$app_list_strings['marker_image_list']['speed_60'] = 'ස්පීඩ් 60';
$app_list_strings['marker_image_list']['speed_70'] = 'ස්පීඩ් 70';
$app_list_strings['marker_image_list']['speed_80'] = 'ස්පීඩ් 80';
$app_list_strings['marker_image_list']['speed_90'] = 'ස්පීඩ් 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'ස්පීඩ් අං';
$app_list_strings['marker_image_list']['stadium'] = 'ක්රීඩාංගණයේ';
$app_list_strings['marker_image_list']['statue'] = 'ප්රතිමාව';
$app_list_strings['marker_image_list']['steam_train'] = 'වාෂ්ප දුම්රිය';
$app_list_strings['marker_image_list']['stop'] = 'නවත්වන්න';
$app_list_strings['marker_image_list']['stoplight'] = 'Stoplight';
$app_list_strings['marker_image_list']['subway'] = 'උමං මග';
$app_list_strings['marker_image_list']['sun'] = 'සන්';
$app_list_strings['marker_image_list']['sunday'] = 'ඉරිදා';
$app_list_strings['marker_image_list']['supermarket'] = 'සුපිරිවෙළෙඳසැල';
$app_list_strings['marker_image_list']['synagogue'] = 'සිනගෝගය';
$app_list_strings['marker_image_list']['tapas'] = 'ටපාස්';
$app_list_strings['marker_image_list']['taxi'] = 'ටැක්සි';
$app_list_strings['marker_image_list']['taxiway'] = 'පිවිසුම් මාර්ගය';
$app_list_strings['marker_image_list']['teahouse'] = 'Teahouse';
$app_list_strings['marker_image_list']['telephone'] = 'දුරකථන';
$app_list_strings['marker_image_list']['temple_hindu'] = 'අරලියගහ හින්දු ';
$app_list_strings['marker_image_list']['terrace'] = 'ටෙරස්';
$app_list_strings['marker_image_list']['text'] = 'පෙළ';
$app_list_strings['marker_image_list']['theater'] = 'රඟහල';
$app_list_strings['marker_image_list']['theme_park'] = 'තේමාව පාර්ක්';
$app_list_strings['marker_image_list']['thursday'] = 'බ්රහස්පතින්දා';
$app_list_strings['marker_image_list']['toilets'] = 'වැසිකිලි';
$app_list_strings['marker_image_list']['toll_station'] = 'ටෝල් ස්ථානය';
$app_list_strings['marker_image_list']['tower'] = 'කුළුණ';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'රථ වාහන බලාත්මක කැමරා';
$app_list_strings['marker_image_list']['train'] = 'දුම්රිය';
$app_list_strings['marker_image_list']['tram'] = 'ට්රෑම් රථ';
$app_list_strings['marker_image_list']['truck'] = 'ට්රක් රථ';
$app_list_strings['marker_image_list']['tuesday'] = 'අගහරුවදා';
$app_list_strings['marker_image_list']['tunnel'] = 'උමං';
$app_list_strings['marker_image_list']['turn_left'] = 'වමට හැරෙන්න';
$app_list_strings['marker_image_list']['turn_right'] = 'දකුණට හැරෙන්න';
$app_list_strings['marker_image_list']['university'] = 'විශ්ව විද්යාලය';
$app_list_strings['marker_image_list']['up'] = 'දක්වා';
$app_list_strings['marker_image_list']['up_left'] = 'වම දක්වා';
$app_list_strings['marker_image_list']['up_right'] = 'රයිට් දක්වා';
$app_list_strings['marker_image_list']['up_then_left'] = 'එවිට දක්වා වමේ';
$app_list_strings['marker_image_list']['up_then_right'] = 'එවිට අයිතිය දක්වා';
$app_list_strings['marker_image_list']['vespa'] = 'වෙස්පා';
$app_list_strings['marker_image_list']['video'] = 'වීඩියෝ';
$app_list_strings['marker_image_list']['villa'] = 'විලා';
$app_list_strings['marker_image_list']['water'] = 'ජල';
$app_list_strings['marker_image_list']['waterfall'] = 'දිය ඇල්ල';
$app_list_strings['marker_image_list']['watermill'] = 'ජලය මිල්';
$app_list_strings['marker_image_list']['waterpark'] = 'ජල උද්යානය';
$app_list_strings['marker_image_list']['watertower'] = 'ජල කුළුණ';
$app_list_strings['marker_image_list']['wednesday'] = 'බදාදා';
$app_list_strings['marker_image_list']['wifi'] = 'Wifi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'සුළං තලබමරය';
$app_list_strings['marker_image_list']['windmill'] = 'සුළං පෙත්ත';
$app_list_strings['marker_image_list']['winery'] = 'විනරි';
$app_list_strings['marker_image_list']['work_office'] = 'වැඩ කාර්යාලය';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'ලෝක උරුම ප්රදේශය';
$app_list_strings['marker_image_list']['zoo'] = 'සත්වෝද්යානය';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = '	කාර්යාලය අතරින්	';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = ' රැස්වීමක	';

$app_strings['LBL_RESCHEDULE_LABEL'] = ' සැලසුම් යළි සකස්	';
$app_strings['LBL_RESCHEDULE_TITLE'] = ' සැලසුම් යළි සකස් තොරතුරු ඇතුලත් කරන්න	';
$app_strings['LBL_RESCHEDULE_DATE'] = ' දිනය:	';
$app_strings['LBL_RESCHEDULE_REASON'] = ' හේතුව:	';
$app_strings['LBL_RESCHEDULE_ERROR1'] = ' වලංගු දිනය තෝරන්න	';
$app_strings['LBL_RESCHEDULE_ERROR2'] = ' හේතුවක් තෝරන්න	';

$app_strings['LBL_RESCHEDULE_PANEL'] = ' සැලසුම් යළි සකස්	';
$app_strings['LBL_RESCHEDULE_HISTORY'] = ' ඇමතුම් උත්සාහයක් ඉතිහාසය	';
$app_strings['LBL_RESCHEDULE_COUNT'] = ' උත්සාහ අමතන්න	';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Security Suite Management';
$app_strings['LBL_SECURITYGROUP'] = 'ආරක්ෂක සමූහ';
$app_strings['LBL_ROLE'] = 'කාර්යභාරය';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Outbound Email Accounts';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'External OAuth Connection';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'External OAuth Provider';

//social
$app_strings['FACEBOOK_USER_C'] = 'ෆේස්බුක්';
$app_strings['TWITTER_USER_C'] = 'ට්විටර්';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'සමාජ කැවීම් විස්තර';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'පෙරහන';

$app_strings['LBL_COLLECTION_TYPE'] = 'වර්ගය';

$app_strings['LBL_ADD_TAB'] = 'ටැබ් එකතු කරන්න';
$app_strings['LBL_EDIT_TAB'] = 'සංස්කරණය කරන්න ටැබ්';
$app_strings['LBL_SUITE_DASHBOARD'] = 'SUITECRM DASHBOARD';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'උපකරණ පුවරුව නම ඇතුලත් කරන්න:';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'තීර ගණන:';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'ඔබ මැකීමට අවශ්ය බව ඔබට විශ්වාසද';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'උපකරණ පුවරුව?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'වූ උපකරණ පුවරුව පිටුව එකතු කරන්න';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'වත්මන් උපකරණ පුවරුව පිටුව ඉවත් කරන්න';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'උපකරණ පුවරුව පිටුවක නම-වෙනස් කිරීම';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ක්‍රියාමාර්ග';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => ' කාර්යයන්',
    'Meetings' => 'රැස්වීම්',
    'Calls' => 'ඇමතුම්',
    'Notes' => 'සටහන්',
    'Emails' => 'වි-තැපැල්'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Template Part Editor';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "You have clicked away from the field you were editing without saving it. Click ok if you're happy to lose your change, or cancel if you would like to continue editing";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "There was an error loading the field. Your session may have timed out. Please log in again to fix this";

//SuiteSpots
$app_list_strings['spots_areas'] = array(
    'getSalesSpotsData' => 'විකුණුම්',
    'getAccountsSpotsData' => 'ගිණුම්',
    'getLeadsSpotsData' => 'ඇද්ද',
    'getServiceSpotsData' => 'සේවය',
    'getMarketingSpotsData' => 'අලෙවි',
    'getMarketingActivitySpotsData' => 'Marketing Activity',
    'getActivitiesSpotsData' => 'ක්‍රියාකාරකම්',
    'getQuotesSpotsData' => 'මිල කැඳවීම්'
);

$app_list_strings['moduleList']['Spots'] = 'Spots';

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'වේලාව';
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
$app_list_strings['day_list']['Monday'] = 'සඳුදා';
$app_list_strings['day_list']['Tuesday'] = 'අගහරුවදා';
$app_list_strings['day_list']['Wednesday'] = 'බදාදා';
$app_list_strings['day_list']['Thursday'] = 'බ්රහස්පතින්දා';
$app_list_strings['day_list']['Friday'] = 'සිකුරාදා';
$app_list_strings['day_list']['Saturday'] = 'සෙනසුරාදා';
$app_list_strings['day_list']['Sunday'] = 'ඉරිදා';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Letter';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Legal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = ' පිළිරූ';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'භූතල තලීය';


$app_list_strings['moduleList']['SurveyResponses'] = 'Survey Responses';
$app_list_strings['moduleList']['Surveys'] = 'Surveys';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Survey Question Responses';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Survey Questions';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Survey Question Options';
$app_list_strings['survey_status_list']['Draft'] = 'කෙටුම්පත්';
$app_list_strings['survey_status_list']['Public'] = 'පොදු';
$app_list_strings['survey_status_list']['Closed'] = 'වසා';
$app_list_strings['surveys_question_type']['Text'] = 'පෙළ';
$app_list_strings['surveys_question_type']['Textbox'] = 'Textbox';
$app_list_strings['surveys_question_type']['Checkbox'] = 'සලකුණු කොටුව';
$app_list_strings['surveys_question_type']['Radio'] = 'ගුවන්විදුලිය';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Dropdown';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Multiselect';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrix';
$app_list_strings['surveys_question_type']['DateTime'] = 'DateTime';
$app_list_strings['surveys_question_type']['Date'] = 'දිනය';
$app_list_strings['surveys_question_type']['Scale'] = 'Scale';
$app_list_strings['surveys_question_type']['Rating'] = 'ණය ශ්රේණිය';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfied';
$app_list_strings['surveys_matrix_options'][1] = 'Neither Satisfied nor Dissatisfied';
$app_list_strings['surveys_matrix_options'][2] = 'Dissatisfied';

$app_list_strings['moduleList']['CalendarAccount'] = 'Calendar Accounts';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Pending Confirm opt in, Confirm opt in not sent';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Confirm opt in email sending failed';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Pending Confirm opt in, Confirm opt in sent';
$app_strings['LBL_OPT_IN'] = 'Opted in';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmed Opted in';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'මූලොපායක්';
$app_strings['LBL_OPT_IN_INVALID'] = 'වලංගු නොවේ';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'අබල කර ඇත',
    'opt-in' => 'Opt In',
    'confirmed-opt-in' => 'Confirmed Opt In'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Not Opt In',
    'opt-in' => 'Opt In',
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
    'minute' => 'මිනිත්තු',
    'hour' => 'පැය',
    'day' => 'දවස්',
    'week' => 'weeks',
    'month' => 'months',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Search (new)',
    'UnifiedSearch' => 'Global Unified Search (legacy)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'පුද්ගලික',
    'shared' => 'හවුල්',
    'group' => 'සමූහය',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'සම්බන්ධ',
    'failed' => 'අසමත් විය',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'ප්රගතියේ',
    'success' => 'සාර්ථකත්වය',
    'warning' => 'අවවාදයයි',
    'error' => ' දෝෂ',
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
$app_strings['LBL_CLICK_HERE'] = 'මෙහි ක්ලික් කරන්න';
$app_strings['LBL_TO_CONTINUE'] = ' to continue.';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERROR: {error}; key was: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK: test settings changed to "{key}"';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Invalid request, use "{var}" value.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Unknown error occurred, key "{key}" not saved.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Test settings does not exists.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Key not found.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Key saving error.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Unknown error';
$app_strings['LBL_SEARCH_TITLE']                   = 'ගවේෂණය';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Input Search Criteria';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'ගවේෂණය';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'ගවේෂණය';
$app_strings['LBL_SEARCH_QUERY']                   = 'Search query: ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Engine: ';
$app_strings['LBL_SEARCH_TOTAL'] = 'Total result(s): ';
$app_strings['LBL_SEARCH_PREV'] = ' කලින්';
$app_strings['LBL_SEARCH_NEXT'] = 'ඊලඟ';
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

$app_strings['LBL_KEY'] = 'යතුර';
$app_strings['LBL_VALUE'] = 'වටිනාකම';
$app_strings['LBL_OPTIONAL'] = 'Optional';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optional. Set to use a specific connection string';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Outbound Account';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Inbound Account';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'System Account';
$app_strings['LBL_FROM_SYSTEM'] = 'Send From System';
$app_strings['LBL_SIGNATURE'] = '	අත්සන';

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
