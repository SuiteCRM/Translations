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
    'LBL_MODULE_NAME' => 'ක්‍රියාකාරකම්',
    'LBL_MODULE_TITLE' => 'ක්රියාකාරකම්: මුල් පිටුව',
    'LBL_SEARCH_FORM_TITLE' => 'ක්රියාකාරකම් සොයන්න',
    'LBL_LIST_FORM_TITLE' => 'ක්රියාකාරකම් ලැයිස්තුව',
    'LBL_LIST_SUBJECT' => ' විෂය',
    'LBL_OVERVIEW' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'TASKS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'MEETINGS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'CALLS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILS', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'NOTES', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'PRINT', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'රැස්වීම',
    'LBL_CALL_TYPE' => 'ඇමතුම',
    'LBL_EMAIL_TYPE' => 'විද්යුත් තැපෑල',
    'LBL_NOTE_TYPE' => 'සටහන',
    'LBL_DATA_TYPE_START' => 'ආරම්භ කරන්න:',
    'LBL_DATA_TYPE_SENT' => 'එවා:',
    'LBL_DATA_TYPE_MODIFIED' => 'නවීකරණය කරන ලද:',
    'LBL_LIST_CONTACT' => 'සබඳතාව',
    'LBL_LIST_RELATED_TO' => ' සම්බන්දව',
    'LBL_LIST_DATE' => 'දිනය',
    'LBL_LIST_CLOSE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_SUBJECT' => 'විෂය:',
    'LBL_STATUS' => 'තත්වය:',
    'LBL_LOCATION' => 'පිහිටීම:',
    'LBL_DATE_TIME' => 'දිනය සහ වේලාව ආරම්භ කරන්න:',
    'LBL_DATE' => 'ආරම්භක දිනය:',
    'LBL_TIME' => 'ආරම්භක වේලාව:',
    'LBL_DURATION' => 'කාල සීමාව:',
    'LBL_HOURS_MINS' => '(පැය / විනාඩි)',
    'LBL_CONTACT_NAME' => 'සබඳතාවේ නම: ',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_NEW_TASK' => ' කාර්ය සාධක නිර්මාණය',
    'LNK_NEW_NOTE' => 'සටහන, නිමැවා හෝ ඇමුණුම් එකතු කරන්න',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'දැක්ම ඇමතුම්',
    'LNK_MEETING_LIST' => 'දැක්ම රැස්වීම්',
    'LNK_TASK_LIST' => 'දැක්ම කර්තව්යයෝ',
    'LNK_NOTE_LIST' => 'දැක්ම සටහන්',
    'LBL_DELETE_ACTIVITY' => 'ඔබ මෙම ක්රියාකාරකම මැකීමට අවශ්ය බව ඔබට විශ්වාසද?',
    'ERR_DELETE_RECORD' => 'ඔබ ගිණුම මකාදැමීමට වාර්තාගත අංකය සඳහන් කළ යුතුය.',
    'LBL_INVITEE' => 'ආරාධිත අමුත්තන්',
    'LBL_LIST_DIRECTION' => 'අධ්යක්ෂණය',
    'LBL_DIRECTION' => 'අධ්යක්ෂණය',
    'LNK_NEW_APPOINTMENT' => 'නව පත් කිරීම',
    'LNK_VIEW_CALENDAR' => 'දැක්ම',
    'LBL_OPEN_ACTIVITIES' => 'විවෘත ක්රියාකාරකම්',
    'LBL_HISTORY' => 'ඉතිහාසය',
    'LBL_NEW_TASK_BUTTON_TITLE' => ' කාර්ය සාධක නිර්මාණය',
    'LBL_NEW_TASK_BUTTON_LABEL' => ' කාර්ය සාධක නිර්මාණය',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => ' ලඝු-සටහන ඇමතුම්',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LBL_LIST_STATUS' => 'තත්වය',
    'LBL_LIST_DUE_DATE' => 'ගෙවිය යුතු දිනය',
    'LBL_LIST_LAST_MODIFIED' => 'අවසන් වරට සංස්කරණය',
    'LNK_IMPORT_CALLS' => 'ආනයන ඇමතුම්',
    'LNK_IMPORT_MEETINGS' => 'ආනයන රැස්වීම්',
    'LNK_IMPORT_TASKS' => 'ආනයන කර්තව්යයෝ',
    'LNK_IMPORT_NOTES' => 'ආනයන සටහන්',
    'LBL_ACCEPT_THIS' => 'පිළිගන්නවාද?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'විවෘත ක්රියාකාරකම්',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා පරිශීලක',

    'LBL_ACCEPT' => 'පිළිගන්න' /*for 508 compliance fix*/,
);
