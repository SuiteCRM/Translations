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
    'LBL_ADD_DOCUMENT' => 'ලියවිල්ලක් එකතු කරන්න',
    'LBL_ADD_FILE' => 'ගොනුව එක් කරන්න',
    'LBL_ATTACHMENTS' => 'ඇමුණුම්',
    'LBL_BODY' => 'ඛඳ: ',
    'LBL_CLOSE' => 'වසන්න:',
    'LBL_DESCRIPTION' => 'විස්තරය:',
    'LBL_EDIT_ALT_TEXT' => 'සංස්කරණය කරන්න තැනිතලාව පෙළ',
    'LBL_EMAIL_ATTACHMENT' => 'විද්යුත් බැඳීම්',
    'LBL_HIDE_ALT_TEXT' => 'තැනිතලාව පෙළ සඟවන්න',
    'LBL_HTML_BODY' => 'HTML සිරුර',
    'LBL_INSERT_VARIABLE' => 'විචල්ය ඇතුල් කරන්න:',
    'LBL_INSERT_URL_REF' => 'URL එක විමර්ශන ඇතුල් කරන්න',
    'LBL_INSERT_TRACKER_URL' => 'ට්රැකර් URL එක ඇතුල් කරන්න:',
    'LBL_INSERT' => 'ඇතුළු කරන්න',
    'LBL_LIST_DATE_MODIFIED' => 'අවසන් වරට සංස්කරණය',
    'LBL_LIST_DESCRIPTION' => 'විස්තරය',
    'LBL_LIST_FORM_TITLE' => 'විද්යුත් ආකෘති ලැයිස්තුව',
    'LBL_LIST_NAME' => 'නම',
    'LBL_MODULE_NAME' => 'විද්යුත් ආකෘති',
    'LBL_MODULE_TITLE' => 'විද්යුත් ආකෘති: මුල් පිටුව',
    'LBL_NAME' => 'නම:',
    'LBL_NEW_FORM_TITLE' => 'විද්යුත් සැකිල්ල නිර්මාණය',
    'LBL_PUBLISH' => 'ප්රකාශයට පත් කරනු ලබයි:',
    'LBL_RELATED_TO' => 'සම්බන්දව:',
    'LBL_SEARCH_FORM_TITLE' => 'විද්යුත් ආකෘති සොයන්න',
    'LBL_SHOW_ALT_TEXT' => 'තැනිතලාව පෙළ පෙන්වන්න',
    'LBL_SUBJECT' => 'විෂය:',
    'LBL_SUITE_DOCUMENT' => 'ලේඛන',
    'LBL_UPLOAD_FILE' => 'Upload File',
    'LBL_TEXT_BODY' => 'පෙළ සිරුර',
    'LBL_USERS' => 'පරිශිලකයින්',

    'LNK_EMAIL_TEMPLATE_LIST' => '  දැක්ම විද්යුත් ආකෘති',
    'LNK_IMPORT_NOTES' => 'ආනයන සටහන්',
    'LNK_NEW_EMAIL_TEMPLATE' => 'විද්යුත් සැකිල්ල නිර්මාණය',
    'LNK_NEW_EMAIL' => ' සංරක්ෂිත ලේඛණ සේප්පුව විද්යුත්',
    'LNK_NEW_SEND_EMAIL' => ' විද්යුත් රචනා',
    'LNK_SENT_EMAIL_LIST' => 'විද්යුත් තැපැල් පණිවුඩ යැවූ',
    'LNK_VIEW_CALENDAR' => 'අද',
    // for Inbox
    'LBL_NEW' => 'අලුත්',
    'LNK_MY_DRAFTS' => ' මගේ කටු සටහන්',
    'LNK_MY_INBOX' => 'මගේ විද්යුත්',
    'LBL_TEXT_ONLY' => 'පමණක් පෙළ',
    'LBL_SEND_AS_TEXT' => 'පමණක් පෙළ යවන්න',
    'LBL_ACCOUNT' => 'ගිණුම',
    'LBL_FROM_NAME' => 'නම සිට',
    'LBL_PLAIN_TEXT' => 'සාමාන්ය පාඨ',
    'LBL_CREATED_BY' => 'සෑදුවේ',
    'LBL_PUBLISHED' => 'Published',
    'LNK_VIEW_MY_INBOX' => ' මගේ විද්යුත් බලන්න',
    'LBL_ASSIGNED_TO_ID' => 'කිරීම සඳහා පවරා',
    'LBL_EDIT_LAYOUT' => 'සංස්කරණය කරන්න පිරිසැලසුම' /*for 508 compliance fix*/,
    'LBL_SELECT' => ' තෝරන්න' /*for 508 compliance fix*/,
    'LBL_ID_FF_CLEAR' => ' පැහැදිලි' /*for 508 compliance fix*/,
    'LBL_TYPE' => 'වර්ගය',
    'LBL_WIDTH' => 'Width Default',
    'LNK_IMPORT_CAMPAIGNS' => 'Import Campaign',
);
