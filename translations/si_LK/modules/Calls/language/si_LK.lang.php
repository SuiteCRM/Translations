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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'ඇමතුම්',
    'LBL_MODULE_TITLE' => 'ඇමතුම්: මුල් පිටුව',
    'LBL_SEARCH_FORM_TITLE' => 'ඇමතුම් සොයන්න',
    'LBL_LIST_FORM_TITLE' => 'ඇමතුම් ලැයිස්තුව',
    'LBL_NEW_FORM_TITLE' => 'පත් නිර්මාණය',
    'LBL_LIST_CLOSE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_LIST_SUBJECT' => ' විෂය',
    'LBL_LIST_CONTACT' => 'සබඳතාව',
    'LBL_LIST_RELATED_TO' => ' සම්බන්දව',
    'LBL_LIST_RELATED_TO_ID' => 'හැඳුනුම් සම්බන්ධ',
    'LBL_LIST_DATE' => 'ආරම්භක දිනය',
    'LBL_LIST_DIRECTION' => 'අධ්යක්ෂණය',
    'LBL_SUBJECT' => 'විෂය:',
    'LBL_REMINDER' => 'මතක්:',
    'LBL_CONTACT_NAME' => 'සබඳතාව:',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_STATUS' => 'තත්වය:',
    'LBL_DIRECTION' => 'අධ්යක්ෂණය:',
    'LBL_DATE' => 'ආරම්භක දිනය:',
    'LBL_DURATION' => 'කාල සීමාව:',
    'LBL_DURATION_HOURS' => 'කාලය: පැය:',
    'LBL_DURATION_MINUTES' => 'කාලය විනාඩි:',
    'LBL_HOURS_MINUTES' => '(පැය / විනාඩි)',
    'LBL_DATE_TIME' => 'දිනය සහ වේලාව ආරම්භ කරන්න:',
    'LBL_TIME' => 'ආරම්භක වේලාව:',
    'LBL_HOURS_ABBREV' => 'ඌ',
    'LBL_MINSS_ABBREV' => 'එම්',
    'LNK_NEW_CALL' => ' ලඝු-සටහන ඇමතුම්',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_CALL_LIST' => 'දැක්ම ඇමතුම්',
    'LNK_IMPORT_CALLS' => 'ආනයන ඇමතුම්',
    'ERR_DELETE_RECORD' => 'වාර්තාගත ගිණුම මකා දැමීම නියම කළ යුතු ය.',
    'LBL_INVITEE' => 'ආරාධිත අමුත්තන්',
    'LBL_RELATED_TO' => 'සම්බන්දව:',
    'LNK_NEW_APPOINTMENT' => 'පත් නිර්මාණය',
    'LBL_SCHEDULING_FORM_TITLE' => 'අවස',
    'LBL_ADD_INVITEE' => 'ආරාධිතයන් එක්',
    'LBL_NAME' => 'නම',
    'LBL_FIRST_NAME' => 'මුල් නම',
    'LBL_LAST_NAME' => 'අවසන් නම',
    'LBL_EMAIL' => 'විද්යුත් තැපෑල',
    'LBL_PHONE' => 'දුරකතන',
    'LBL_REMINDER_POPUP' => 'මතුවන',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'සියලු ආරාධිත අමුත්තන් ඊ-මේල් කරන්න',
    'LBL_EMAIL_REMINDER' => 'විද්යුත් මතක්',
    'LBL_EMAIL_REMINDER_TIME' => 'විද්යුත් මතක් වේලාව',
    'LBL_SEND_BUTTON_TITLE' => 'ආරාධනා සුරකින්න & යවන්න',
    'LBL_SEND_BUTTON_LABEL' => 'ආරාධනා සුරකින්න & යවන්න',
    'LBL_DATE_END' => 'අවසාන දිනය',
    'LBL_REMINDER_TIME' => 'මතක් වේලාව',
    'LBL_EMAIL_REMINDER_SENT' => 'විද්යුත් සිහිගැන්වීමක් යවා',
    'LBL_SEARCH_BUTTON' => 'ගවේෂණය',
    'LBL_ADD_BUTTON' => 'එකතු කරන්න',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'ඇමතුම්',
    'LNK_SELECT_ACCOUNT' => ' ගිණුම තෝරන්න',
    'LNK_NEW_ACCOUNT' => 'නව ගිණුම',
    'LNK_NEW_OPPORTUNITY' => 'නව ඉඩ ප්රස්ථා',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_USERS_SUBPANEL_TITLE' => 'පරිශිලකයින්',
    'LBL_OUTLOOK_ID' => 'ඉදිරි දැක්මක් සහිතව හැඳුනුම්',
    'LBL_MEMBER_OF' => 'මන්ත්රී',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'සටහන්',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා',
    'LBL_LIST_MY_CALLS' => 'මගේ ඇමතුම්',
    'LBL_ASSIGNED_TO_NAME' => 'පවරා',
    'LBL_ASSIGNED_TO_ID' => 'පවරා පරිශීලක',
    'NOTICE_DURATION_TIME' => 'කාලය කාලය 0 ට වඩා වැඩි විය යුතුය',
    'LBL_CALL_INFORMATION' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_ACCEPT_STATUS' => 'තත්ත්වය පිළිගන්න',
    'LBL_ACCEPT_LINK' => 'ලින්ක් පිළිගන්න',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'ක ආරාධිත අමුත්තා සාදන්න',
    'LBL_CREATE_CONTACT' => 'ඇමතුම් ලෙස',
    'LBL_CREATE_LEAD' => 'ඊයම් ලෙස',
    'LBL_CREATE_AND_ADD' => 'නිර්මාණය සහ එකතු කරන්න',
    'LBL_CANCEL_CREATE_INVITEE' => 'අවලංගු කරන්න',
    'LBL_EMPTY_SEARCH_RESULT' => 'සමාවන්න, ප්රතිඵල කිසිවක් සොයා ගන්නා ලදී. ට අඩු ආරාධිත අමුත්තා නිර්මාණය කරන්න.',
    'LBL_NO_ACCESS' => 'ඔබ විසින් $ මොඩියුලය නිර්මාණය කිරීමට කිසිදු ප්රවේශ',

    'LBL_REPEAT_TYPE' => 'නැවත වර්ගය',
    'LBL_REPEAT_INTERVAL' => 'පරතරය නැවත නැවත',
    'LBL_REPEAT_DOW' => 'ඩව් නැවත නැවත',
    'LBL_REPEAT_UNTIL' => 'තුරු නැවත නැවත',
    'LBL_REPEAT_COUNT' => 'නැවත ගණනය',
    'LBL_REPEAT_PARENT_ID' => 'නැවත මාපිය හැඳුනුම්',
    'LBL_RECURRING_SOURCE' => 'පුනරාවර්තනය මූලාශ්රය',

    'LBL_SYNCED_RECURRING_MSG' => 'මෙම ඇමතුම තවත් පද්ධතිය ආරම්භ වී SuiteCRM වෙත සමමුහුර්ත විය. වෙනස් කම් කිරීම සඳහා, අනෙක් ක්රමය තුල මුල් ඇමතුමක් වෙත යන්න. අනෙක් ක්රමය වෙනස් වීම් මෙම වාර්තාව වෙත සමමුහුර්ත ගත හැක.',

    // for reminders
    'LBL_REMINDERS' => 'සඳමාලි',
    'LBL_REMINDERS_ACTIONS' => 'විචාරය:',
    'LBL_REMINDERS_POPUP' => 'මතුවන',
    'LBL_REMINDERS_EMAIL' => 'විද්යුත් ආරාධනා',
    'LBL_REMINDERS_WHEN' => 'කවදා ද:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'මතක් ඉවත් කරන්න',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'සියලුම ආරාධිතයන් එක්',
    'LBL_REMINDERS_ADD_REMINDER' => 'මතක් කරන්න',

    'LBL_RESCHEDULE' => ' සැලසුම් යළි සකස්	',
    'LBL_RESCHEDULE_COUNT' => ' උත්සාහ අමතන්න	',
    'LBL_RESCHEDULE_DATE' => 'දිනය',
    'LBL_RESCHEDULE_REASON' => 'හේතුව',
    'LBL_RESCHEDULE_ERROR1' => ' වලංගු දිනය තෝරන්න	',
    'LBL_RESCHEDULE_ERROR2' => ' හේතුවක් තෝරන්න	',
    'LBL_RESCHEDULE_PANEL' => ' සැලසුම් යළි සකස්	',
    'LBL_RESCHEDULE_HISTORY' => 'ඇමතුම් වෑයමක් ඉතිහාසය',
    'LBL_CANCEL' => 'අවලංගු කරන්න',
    'LBL_SAVE' => 'සුරකින්න',

    'LBL_CALLS_RESCHEDULE' => 'Calls Reschedule',
    'LBL_LIST_STATUS'=>'තත්වය',
    'LBL_LIST_DATE_MODIFIED'=>'නවීකරණය කරන ලද දිනය',
    'LBL_LIST_DUE_DATE'=>'ගෙවිය යුතු දිනය',
    'LBL_RESCHEDULED_BY'=>' විසින්',
);
