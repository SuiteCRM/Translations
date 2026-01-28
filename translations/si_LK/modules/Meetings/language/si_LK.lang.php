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
    'LBL_ACCEPT_THIS' => 'පිළිගන්නවාද?',
    'LBL_ADD_BUTTON' => 'එකතු කරන්න',
    'LBL_ADD_INVITEE' => 'ආරාධිතයන් එක්',
    'LBL_CONTACT_NAME' => 'සබඳතාව:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'සබඳතා',
    'LBL_CREATED_BY' => 'සෑදුවේ',
    'LBL_DATE_END' => 'අවසාන දිනය',
    'LBL_DATE_TIME' => 'දිනය සහ වේලාව ආරම්භ කරන්න:',
    'LBL_DATE' => 'ආරම්භක දිනය:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'රැස්වීම්',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_DIRECTION' => 'අධ්යක්ෂණය:',
    'LBL_DURATION_HOURS' => 'කාලය: පැය:',
    'LBL_DURATION_MINUTES' => 'කාලය විනාඩි:',
    'LBL_DURATION' => 'කාල සීමාව:',
    'LBL_EMAIL' => 'විද්යුත් තැපෑල',
    'LBL_FIRST_NAME' => 'මුල් නම',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'සටහන්',
    'LBL_HOURS_ABBREV' => 'ඌ',
    'LBL_HOURS_MINS' => '(පැය / විනාඩි)',
    'LBL_INVITEE' => 'ආරාධිත අමුත්තන්',
    'LBL_LAST_NAME' => 'අවසන් නම',
    'LBL_ASSIGNED_TO_NAME' => ' පවරා:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා පරිශීලක',
    'LBL_LIST_CLOSE' => 'වසන්න / * 508 අනුකූල විසඳුමක් සඳහා * /',
    'LBL_LIST_CONTACT' => 'සබඳතාව',
    'LBL_LIST_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_LIST_DATE' => 'ආරම්භක දිනය',
    'LBL_LIST_DIRECTION' => 'අධ්යක්ෂණය',
    'LBL_LIST_DUE_DATE' => 'ගෙවිය යුතු දිනය',
    'LBL_LIST_FORM_TITLE' => 'ලැයිස්තුව රැස්වීම',
    'LBL_LIST_MY_MEETINGS' => 'මගේ රැස්වීම්',
    'LBL_LIST_RELATED_TO' => ' සම්බන්දව',
    'LBL_LIST_STATUS' => 'තත්වය',
    'LBL_LIST_SUBJECT' => ' විෂය',
    'LBL_LEADS_SUBPANEL_TITLE' => 'ඇද්ද',
    'LBL_LOCATION' => 'පිහිටීම:',
    'LBL_MINSS_ABBREV' => 'එම්',
    'LBL_MODIFIED_BY' => 'ෙවනස්කර',
    'LBL_MODULE_NAME' => 'රැස්වීම්',
    'LBL_MODULE_TITLE' => 'රැස්වීම්: මුල් පිටුව',
    'LBL_NAME' => 'නම',
    'LBL_NEW_FORM_TITLE' => 'පත් නිර්මාණය',
    'LBL_OUTLOOK_ID' => 'ඉදිරි දැක්මක් සහිතව හැඳුනුම්',
    'LBL_SEQUENCE' => 'යාවත්කාලීන අනුක්රමය රැස්වීම',
    'LBL_PHONE' => 'දුරකථන කාර්යාලය:',
    'LBL_REMINDER_TIME' => 'මතක් වේලාව',
    'LBL_EMAIL_REMINDER_SENT' => 'විද්යුත් සිහිගැන්වීමක් යවා',
    'LBL_REMINDER' => 'සඳමාලි:',
    'LBL_REMINDER_POPUP' => 'මතුවන',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'සියලු ආරාධිත අමුත්තන් ඊ-මේල් කරන්න',
    'LBL_EMAIL_REMINDER' => 'විද්යුත් මතක්',
    'LBL_EMAIL_REMINDER_TIME' => 'විද්යුත් මතක් වේලාව',
    'LBL_REMOVE' => 'ඉවත් කරන්න',
    'LBL_SCHEDULING_FORM_TITLE' => 'අවස',
    'LBL_SEARCH_BUTTON' => 'ගවේෂණය',
    'LBL_SEARCH_FORM_TITLE' => 'සොයන්න රැස්වීම',
    'LBL_SEND_BUTTON_LABEL' => 'ආරාධනා සුරකින්න & යවන්න',
    'LBL_SEND_BUTTON_TITLE' => 'ආරාධනා සුරකින්න & යවන්න',
    'LBL_STATUS' => 'තත්වය:',
    'LBL_TYPE' => 'වර්ගය රැස්වීම',
    'LBL_PASSWORD' => 'මුරපදය රැස්වීම',
    'LBL_URL' => 'ආරම්භක / රැස්වීම සමග එකතු වන්න',
    'LBL_HOST_URL' => 'සත්කාරක රට URL එක',
    'LBL_DISPLAYED_URL' => 'විදහා URL එක',
    'LBL_CREATOR' => 'මැවුම්කරු රැස්වීම',
    'LBL_EXTERNALID' => 'විදේශ යෙදුම හැඳුනුම්',
    'LBL_SUBJECT' => 'විෂය:',
    'LBL_TIME' => 'ආරම්භක වේලාව:',
    'LBL_USERS_SUBPANEL_TITLE' => 'පරිශිලකයින්',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'මව් වර්ගය',
    'LBL_PARENT_ID' => 'මව් හැඳුනුම්',
    'LNK_MEETING_LIST' => 'දැක්ම රැස්වීම්',
    'LNK_NEW_APPOINTMENT' => 'පත් නිර්මාණය',
    'LNK_NEW_MEETING' => 'උපෙල්ඛනෙය් රැස්වීම',
    'LNK_IMPORT_MEETINGS' => 'ආනයන රැස්වීම්',

    'LBL_CREATED_USER' => 'නිර්මාණය කරන ලද්දේ පරිශීලක',
    'LBL_MODIFIED_USER' => 'නවීකරණය කරන ලද පරිශීලක',
    'NOTICE_DURATION_TIME' => 'කාලය කාලය 0 ට වඩා වැඩි විය යුතුය',
    'LBL_MEETING_INFORMATION' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'රැස්වීම සමග එකතු වන්න',
    'LBL_ACCEPT_STATUS' => 'තත්ත්වය පිළිගන්න',
    'LBL_ACCEPT_LINK' => 'ලින්ක් පිළිගන්න',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'ඔබ ආරාධිත අමුත්තා නොවන නිසා ඔබට මෙම රැස්වීම කිරීමට හැකියාව නැත.',
    'LBL_EXTNOT_RECORD_LINK' => 'දැක්ම රැස්වීම',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'ඔබ පරිපාලක හෝ රැස්වීම අයිතිකරු නොවේ නිසා ඔබට මෙම රැස්වීම ආරම්භ කළ නොහැක.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'ක ආරාධිත අමුත්තා සාදන්න',
    'LBL_CREATE_CONTACT' => 'ඇමතුම් ලෙස',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'ඊයම් ලෙස',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'නිර්මාණය සහ එකතු කරන්න',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'අවලංගු කරන්න',
    'LBL_EMPTY_SEARCH_RESULT' => 'සමාවන්න, ප්රතිඵල කිසිවක් සොයා ගන්නා ලදී. ට අඩු ආරාධිත අමුත්තා නිර්මාණය කරන්න.',
    'LBL_NO_ACCESS' => 'ඔබ විසින් $ මොඩියුලය නිර්මාණය කිරීමට කිසිදු ප්රවේශ',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'නැවත වර්ගය',
    'LBL_REPEAT_INTERVAL' => 'පරතරය නැවත නැවත',
    'LBL_REPEAT_DOW' => 'ඩව් නැවත නැවත',
    'LBL_REPEAT_UNTIL' => 'තුරු නැවත නැවත',
    'LBL_REPEAT_COUNT' => 'නැවත ගණනය',
    'LBL_REPEAT_PARENT_ID' => 'නැවත මාපිය හැඳුනුම්',
    'LBL_RECURRING_SOURCE' => 'පුනරාවර්තනය මූලාශ්රය',

    'LBL_SYNCED_RECURRING_MSG' => 'මෙම රැස්වීම තවත් පද්ධතිය ආරම්භ වී SuiteCRM වෙත සමමුහුර්ත විය. වෙනස් කම් කිරීම සඳහා, අනෙක් ක්රමය තුල මුල් රැස්වීමට යන්න. අනෙක් ක්රමය වෙනස් වීම් මෙම වාර්තාව වෙත සමමුහුර්ත ගත හැක.',
    'LBL_RELATED_TO' => 'සම්බන්දව:',

    // for reminders
    'LBL_REMINDERS' => 'සඳමාලි',
    'LBL_REMINDERS_ACTIONS' => 'විචාරය:',
    'LBL_REMINDERS_POPUP' => 'මතුවන',
    'LBL_REMINDERS_EMAIL' => 'විද්යුත් ආරාධනා',
    'LBL_REMINDERS_WHEN' => 'කවදා ද:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'මතක් ඉවත් කරන්න',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'සියලුම ආරාධිතයන් එක්',
    'LBL_REMINDERS_ADD_REMINDER' => 'මතක් කරන්න',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
