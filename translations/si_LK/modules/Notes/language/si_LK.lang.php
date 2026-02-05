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
    'ERR_DELETE_RECORD' => 'ඔබ ගිණුම මකාදැමීමට වාර්තාගත අංකය සඳහන් කළ යුතුය.',
    'LBL_ACCOUNT_ID' => 'ගිණුම ID:',
    'LBL_CASE_ID' => 'නඩු ID:',
    'LBL_CLOSE' => 'වසන්න:',
    'LBL_CONTACT_ID' => 'ඇමතුම් ID:',
    'LBL_CONTACT_NAME' => 'සබඳතාව:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'සටහන්',
    'LBL_DESCRIPTION' => 'සටහන',
    'LBL_EMAIL_ADDRESS' => 'විද්යුත් තැපැල් ලිපිනය:',
    'LBL_EMAIL_ATTACHMENT' => 'විද්යුත් බැඳීම්',
    'LBL_FILE_MIME_TYPE' => 'MIME ශෛලිය',
    'LBL_FILE_URL' => 'ගොනුව URL එක',
    'LBL_FILENAME' => 'ඇමුණුමක්:',
    'LBL_LEAD_ID' => 'ඊයම් ID:',
    'LBL_LIST_CONTACT_NAME' => 'සබඳතාව',
    'LBL_LIST_DATE_MODIFIED' => 'අවසන් වරට සංස්කරණය',
    'LBL_LIST_FILENAME' => 'ඇමුණුමක්',
    'LBL_LIST_FORM_TITLE' => 'සටහන ලැයිස්තුව',
    'LBL_LIST_RELATED_TO' => 'සම්බන්දව',
    'LBL_LIST_SUBJECT' => ' විෂය',
    'LBL_LIST_STATUS' => 'තත්වය',
    'LBL_LIST_CONTACT' => 'සබඳතාව',
    'LBL_MODULE_NAME' => 'සටහන්',
    'LBL_MODULE_TITLE' => 'සටහන්: මුල් පිටුව',
    'LBL_NEW_FORM_TITLE' => 'සටහන, නිමැවා හෝ ඇමුණුම් එකතු කරන්න',
    'LBL_NOTE_STATUS' => 'සටහන',
    'LBL_NOTE_SUBJECT' => 'විෂය:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'ඇමුණුම්',
    'LBL_NOTE' => 'සටහන:',
    'LBL_OPPORTUNITY_ID' => 'අවස්ථාව ID:',
    'LBL_PARENT_ID' => 'මව් ID:',
    'LBL_PARENT_TYPE' => 'මව් වර්ගය',
    'LBL_PHONE' => 'දුරකතන:',
    'LBL_PORTAL_FLAG' => 'ද්වාරය සංදර්ශනය?',
    'LBL_EMBED_FLAG' => 'විද්යුත් තැපැල් කාවද්දන්න?',
    'LBL_PRODUCT_ID' => 'නිෂ්පාදන ID:',
    'LBL_QUOTE_ID' => 'උපුටා ID:',
    'LBL_RELATED_TO' => 'සම්බන්දව:',
    'LBL_SEARCH_FORM_TITLE' => 'සටහන සොයන්න',
    'LBL_STATUS' => 'තත්වය',
    'LBL_SUBJECT' => 'විෂය:',
    'LNK_IMPORT_NOTES' => 'ආනයන සටහන්',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම් සාදන්න',
    'LNK_NOTE_LIST' => 'දැක්ම සටහන්',
    'LBL_MEMBER_OF' => 'මන්ත්රී:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා පරිශීලක',
    'LBL_REMOVING_ATTACHMENT' => 'ඇමුණුම් ඉවත්කර...',
    'ERR_REMOVING_ATTACHMENT' => 'ඇමුණුමක් ඉවත් කිරීමට නොහැකි විය...',
    'LBL_CREATED_BY' => 'සෑදුවේ',
    'LBL_MODIFIED_BY' => ' වන විට නවීකරණය කරන ලද',
    'LBL_SEND_ANYWAYS' => 'ඔහුගේ ඊ-තැපැල් කිසිදු විෂය ඇත. යවන්න / කෙසේ හෝ බේරා?',
    'LBL_NOTE_INFORMATION' => 'දළ විශ්ලේෂණය', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'මගේ සටහන්',
    'LBL_EDITLAYOUT' => 'සංස්කරණය කරන්න පිරිසැලසුම' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'මුල් නම',
    'LBL_LAST_NAME' => 'අවසන් නම',
    'LBL_DATE_ENTERED' => 'සෑදූ දිනය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'යද්දි',
    'LBL_DESCENDING' => 'බැස',
);
