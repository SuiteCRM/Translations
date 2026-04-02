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

$mod_strings = array(
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_ACCOUNT_ID' => 'ගිණුම ID:',
    'LBL_CASE_ID' => 'නඩු ID:',
    'LBL_CLOSE' => 'Close:',
    'LBL_CONTACT_ID' => 'ඇමතුම් ID:',
    'LBL_CONTACT_NAME' => 'අමතන්න:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notes',
    'LBL_DESCRIPTION' => 'Note',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_ATTACHMENT' => 'වි-තැපැල් ඇමුණුම',
    'LBL_FILE_MIME_TYPE' => 'Mime Type',
    'LBL_FILE_URL' => 'File URL',
    'LBL_FILENAME' => 'ඇමුණුමක්:',
    'LBL_LEAD_ID' => 'ඊයම් ID:',
    'LBL_LIST_CONTACT_NAME' => 'සබඳතාව',
    'LBL_LIST_DATE_MODIFIED' => 'Last Modified',
    'LBL_LIST_FILENAME' => 'ඇමුණුම',
    'LBL_LIST_FORM_TITLE' => 'සටහන ලැයිස්තුව',
    'LBL_LIST_RELATED_TO' => 'සම්බන්දව',
    'LBL_LIST_SUBJECT' => 'මාතෘකාව',
    'LBL_LIST_STATUS' => 'තත්ත්වය',
    'LBL_LIST_CONTACT' => 'සබඳතාව',
    'LBL_MODULE_NAME' => 'Notes',
    'LBL_MODULE_TITLE' => 'සටහන්: මුල් පිටුව',
    'LBL_NEW_FORM_TITLE' => 'Create Note or Add Attachment',
    'LBL_NOTE_STATUS' => 'Note',
    'LBL_NOTE_SUBJECT' => 'විෂය:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Attachments',
    'LBL_NOTE' => 'සටහන:',
    'LBL_OPPORTUNITY_ID' => 'අවස්ථාව ID:',
    'LBL_PARENT_ID' => 'මව් ID:',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_FLAG' => 'ද්වාරය සංදර්ශනය?',
    'LBL_EMBED_FLAG' => 'විද්යුත් තැපැල් කාවද්දන්න?',
    'LBL_PRODUCT_ID' => 'නිෂ්පාදන ID:',
    'LBL_QUOTE_ID' => 'උපුටා ID:',
    'LBL_RELATED_TO' => 'Related To:',
    'LBL_SEARCH_FORM_TITLE' => 'සටහන සොයන්න',
    'LBL_STATUS' => '  තත්ත්වය',
    'LBL_SUBJECT' => 'විෂය:',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LNK_NEW_NOTE' => 'සටහන හෝ ඇමුණුම සාදන්න',
    'LNK_NOTE_LIST' => 'View Notes',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'පවරා පරිශීලක',
    'LBL_REMOVING_ATTACHMENT' => 'ඇමුණුම් ඉවත්කර...',
    'ERR_REMOVING_ATTACHMENT' => 'ඇමුණුමක් ඉවත් කිරීමට නොහැකි විය...',
    'LBL_CREATED_BY' => 'නිර්මාණය කළේ',
    'LBL_MODIFIED_BY' => ' වන විට නවීකරණය කරන ලද',
    'LBL_SEND_ANYWAYS' => 'ඔහුගේ ඊ-තැපැල් කිසිදු විෂය ඇත. යවන්න / කෙසේ හෝ බේරා?',
    'LBL_NOTE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'මගේ සටහන්',
    'LBL_EDITLAYOUT' => 'පිරිසැලසුම සංස්කරණය' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_DATE_ENTERED' => 'දිනය නිර්මාණය',
    'LBL_DATE_MODIFIED' => 'නවීකරණය කරන ලද දිනය',
    'LBL_DELETED' => ' මකා දමන',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'ආරෝහණ',
    'LBL_DESCENDING' => 'අවරෝහණ',
);
