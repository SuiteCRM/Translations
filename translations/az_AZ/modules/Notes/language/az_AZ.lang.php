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
    'ERR_DELETE_RECORD' => 'Hesabı silmək üçün qeyd nömrəsini göstərməlisiniz.',
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_CASE_ID' => 'Case ID:',
    'LBL_CLOSE' => 'Close:',
    'LBL_CONTACT_ID' => 'Əlaqə ID-si: ',
    'LBL_CONTACT_NAME' => 'Əlaqə:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Qeydlər',
    'LBL_DESCRIPTION' => 'Qeyd',
    'LBL_EMAIL_ADDRESS' => 'E-poçt Ünvanı:',
    'LBL_EMAIL_ATTACHMENT' => 'Email Attachment',
    'LBL_FILE_MIME_TYPE' => 'Mime növü',
    'LBL_FILE_URL' => 'File URL',
    'LBL_FILENAME' => 'Attachment:',
    'LBL_LEAD_ID' => 'Lead ID:',
    'LBL_LIST_CONTACT_NAME' => 'Əlaqə',
    'LBL_LIST_DATE_MODIFIED' => 'Son dəyişiklik',
    'LBL_LIST_FILENAME' => 'Attachment',
    'LBL_LIST_FORM_TITLE' => 'Note List',
    'LBL_LIST_RELATED_TO' => 'Related To',
    'LBL_LIST_SUBJECT' => 'Mövzu',
    'LBL_LIST_STATUS' => 'Vəziyyət',
    'LBL_LIST_CONTACT' => 'Əlaqə',
    'LBL_MODULE_NAME' => 'Qeydlər',
    'LBL_MODULE_TITLE' => 'Notes: Home',
    'LBL_NEW_FORM_TITLE' => 'Qeyd yaradın və ya Qoşma əlavə edin',
    'LBL_NOTE_STATUS' => 'Qeyd',
    'LBL_NOTE_SUBJECT' => 'Mövzu:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Attachments',
    'LBL_NOTE' => 'Note:',
    'LBL_OPPORTUNITY_ID' => 'Opportunity ID:',
    'LBL_PARENT_ID' => 'Ana element ID-si:',
    'LBL_PARENT_TYPE' => 'Valideyn Növü',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_FLAG' => 'Display in Portal?',
    'LBL_EMBED_FLAG' => 'Embed in email?',
    'LBL_PRODUCT_ID' => 'Product ID:',
    'LBL_QUOTE_ID' => 'Quote ID:',
    'LBL_RELATED_TO' => 'Əlaqədar:',
    'LBL_SEARCH_FORM_TITLE' => 'Note Search',
    'LBL_STATUS' => 'Vəziyyət',
    'LBL_SUBJECT' => 'Mövzu:',
    'LNK_IMPORT_NOTES' => 'Qeydləri idxal edin',
    'LNK_NEW_NOTE' => 'Qeyd və ya Qoşma yaradın',
    'LNK_NOTE_LIST' => 'Qeydlərə baxın',
    'LBL_MEMBER_OF' => 'Üzvü:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Təyin edilmiş İstifadəçi',
    'LBL_REMOVING_ATTACHMENT' => 'Removing attachment...',
    'ERR_REMOVING_ATTACHMENT' => 'Failed to remove attachment...',
    'LBL_CREATED_BY' => 'Müəllif',
    'LBL_MODIFIED_BY' => 'Redaktə etdi',
    'LBL_SEND_ANYWAYS' => 'Bu e-poçt\'un mövzusu yoxdur. Yenə də göndər/yadda saxla?',
    'LBL_NOTE_INFORMATION' => '	İcmal', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'My Notes',
    'LBL_EDITLAYOUT' => 'Tərtibatı redaktə et' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Ad',
    'LBL_LAST_NAME' => 'Soyad',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_DELETED' => 'Silinib',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Artan',
    'LBL_DESCENDING' => 'Azalan',
);
