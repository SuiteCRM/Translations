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
    'LBL_MODULE_NAME' => 'ව්යාපෘති',
    'LBL_MODULE_TITLE' => 'ව්යාපෘති: මුල් පිටුව',
    'LBL_SEARCH_FORM_TITLE' => 'ව්යාපෘති සොයන්න',
    'LBL_LIST_FORM_TITLE' => 'ව්යාපෘති ලැයිස්තුව',
    'LBL_HISTORY_TITLE' => 'ඉතිහාසය',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය:',
    'LBL_DATE_MODIFIED' => 'දිනය නවීකරණය කරන ලද:',
    'LBL_ASSIGNED_USER_ID' => ' කිරීම සඳහා පවරා:',
    'LBL_ASSIGNED_USER_NAME' => 'ව්යාපෘති කළමනාකරු:',
    'LBL_MODIFIED_USER_ID' => 'නවීකරණය කරන ලද පරිශීලක Id:',
    'LBL_CREATED_BY' => 'සෑදුවේ:',
    'LBL_NAME' => 'නම:',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_DELETED' => 'මකා දමන:',
    'LBL_DATE' => ' දිනය:	',
    'LBL_DATE_START' => 'ආරම්භක දිනය:',
    'LBL_DATE_END' => 'අවසාන දිනය:',
    'LBL_PRIORITY' => 'ප්රමුඛතාව:',
    'LBL_LIST_NAME' => 'නම',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'මුළු ඇස්තමේන්තුගත වෑයමක් (පැය)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'මුළු තත වෑයමක් (පැය)',
    'LBL_LIST_END_DATE' => 'අවසාන දිනය',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'ව්යාපෘති කර්තව්යයෝ',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'කිසිවක් නැත',
    'LBL_ALL_PROJECTS' => 'All Projects',
    'LBL_ALL_USERS' => 'All Users',
    'LBL_ALL_CONTACTS' => 'All Contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'නව ව්යාපෘතිය',
    'LNK_NEW_PROJECT' => 'ව්යාපෘති සාදන්න',
    'LNK_PROJECT_LIST' => 'දැක්ම ව්යාපෘතිය ලැයිස්තුව',
    'LNK_NEW_PROJECT_TASK' => 'ව්යාපෘති කාර්ය සාධක නිර්මාණය',
    'LNK_PROJECT_TASK_LIST' => 'දැක්ම ව්යාපෘතිය කර්තව්යයෝ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ව්යාපෘති',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'ක්‍රියාකාරකම්',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'ඉතිහාසය',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'ගිණුම්',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'අවස්ථා',
    'LBL_CASES_SUBPANEL_TITLE' => ' නඩු',
    'LBL_BUGS_SUBPANEL_TITLE' => ' බග්ස්',
    'LBL_TASK_ID' => 'හැඳු.',
    'LBL_TASK_NAME' => 'කාර්ය සාධක නම',
    'LBL_DURATION' => 'කාල සීමාව',
    'LBL_ACTUAL_DURATION' => 'සැබෑ කාලය',
    'LBL_START' => 'අරඹන්න',
    'LBL_FINISH' => 'අවසානයි',
    'LBL_PREDECESSORS' => 'පූර්වගාමීන්',
    'LBL_PERCENT_COMPLETE' => '% සම්පූර්ණ',
    'LBL_MORE' => 'තව...',
    'LBL_OPPORTUNITIES' => 'අවස්ථා',
    'LBL_NEXT_WEEK' => 'ඊලඟ',
    'LBL_PROJECT_INFORMATION' => 'ව්යාපෘති දළ විශ්ලේෂණය',
    'LBL_EDITLAYOUT' => 'සංස්කරණය කරන්න පිරිසැලසුම' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'ව්යාපෘති කර්තව්යයෝ',
    'LBL_VIEW_GANTT_TITLE' => 'දැක්ම Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'කාල සීමාව',
    'LBL_TASK_TITLE' => 'සංස්කරණය කරන්න කාර්ය සාධක',
    'LBL_DURATION_TITLE' => 'සංස්කරණය කරන්න කාලය',
    'LBL_LAG' => 'පමාව',
    'LBL_DAYS' => 'දවස්',
    'LBL_HOURS' => 'පැය',
    'LBL_MONTHS' => 'මාස',
    'LBL_SUBTASK' => 'කාර්ය',
    'LBL_MILESTONE_FLAG' => 'සන්ධිස්ථානයක්',
    'LBL_ADD_NEW_TASK' => 'නව කාර්ය සාධක එකතු කරන්න',
    'LBL_DELETE_TASK' => 'කාර්ය සාධක Delete',
    'LBL_EDIT_TASK_PROPERTIES' => 'සංස්කරණය කරන්න කාර්යය ගුණ.',
    'LBL_PARENT_TASK_ID' => 'මව් කාර්ය සාධක අංකය',
    'LBL_RESOURCE_CHART' => 'සම්පත් දින දසුන',
    'LBL_RELATIONSHIP_TYPE' => 'සම්බන්ධතා වර්ගය',
    'LBL_ASSIGNED_TO' => 'ව්යාපෘති කළමනාකරු',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'ව්යාපෘති සැකිල්ල',
    'LBL_STATUS' => 'තත්වය:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'ව්යාපෘති කළමනාකරු',
    'LBL_TOOLTIP_PROJECT_NAME' => 'ව්යාපෘති',
    'LBL_TOOLTIP_TASK_NAME' => 'කාර්ය සාධක නම',
    'LBL_TOOLTIP_TITLE' => 'මෙම දිනයේ කාර්යයන්',
    'LBL_TOOLTIP_TASK_DURATION' => 'කාල සීමාව',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'සම්පත් ඇති පරිශීලක වේ',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'සම්පත් ඇති වන්නේ අමතන්න',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'පසුගිය මාසික',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'ඉදිරි මාසය',
    'LBL_RESOURCE_CHART_WEEK' => 'සතිය',
    'LBL_RESOURCE_CHART_DAY' => 'දවස',
    'LBL_RESOURCE_CHART_WARNING' => 'මෙයට සම්පත් ව්යාපෘතියක් සඳහා යොදවා ඇති.',
    'LBL_PROJECT_DELETE_MSG' => 'ඔබ මෙම ව්යාපෘතිය සහ එහි අදාළ කාර්යයන් මැකීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'LBL_LIST_MY_PROJECT' => 'මගේ ව්යාපෘති',
    'LBL_LIST_ASSIGNED_USER' => 'ව්යාපෘති කළමනාකරු',
    'LBL_UNASSIGNED' => 'චිත්රපට',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'සම්පත්',

    'LBL_EMAIL' => 'විද්යුත් තැපෑල',
    'LBL_PHONE' => 'දුරකථන කාර්යාලය:',
    'LBL_ADD_BUTTON' => 'එකතු කරන්න',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'මුල් නම',
    'LBL_LAST_NAME' => 'අවසන් නම',
    'LBL_SEARCH_BUTTON' => 'ගවේෂණය',
    'LBL_EMPTY_SEARCH_RESULT' => 'සමාවන්න, ප්රතිඵල කිසිවක් සොයා ගන්නා ලදී. ට අඩු ආරාධිත අමුත්තා නිර්මාණය කරන්න.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'ඇමතුම් ලෙස',
    'LBL_CREATE_AND_ADD' => 'නිර්මාණය සහ එකතු කරන්න',
    'LBL_CANCEL_CREATE_INVITEE' => 'අවලංගු කරන්න',
    'LBL_NO_ACCESS' => 'ඔබ විසින් $ මොඩියුලය නිර්මාණය කිරීමට කිසිදු ප්රවේශ',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_VIEW_DETAIL' => 'තොරතුරු පෙන්වන්න',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Search Projects',
    'LBL_USERS_SEARCH' => 'Search Users',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'ගවේෂණය',

    'LBL_CHART_TYPE' => 'වර්ගය',
    'LBL_CHART_WEEKLY' => 'සතිපතා',
    'LBL_CHART_MONTHLY' => 'මාසික',
    'LBL_CHART_QUARTERLY' => 'කාර්තුමය',

    'LBL_RESOURCE_CHART_MONTH' => 'මාසික',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Project Templates: Project from Project Title',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'යද්දි',
    'LBL_DESCENDING' => 'බැස',
);
