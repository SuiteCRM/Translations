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
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_ACCOUNT_ID' => 'Account ID:',
    'LBL_CASE_ID' => 'Α/Α αίτησης υποστήριξης:',
    'LBL_CLOSE' => 'Close:',
    'LBL_CONTACT_ID' => 'Α/Α επαφής:',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Σημειώσεις:',
    'LBL_DESCRIPTION' => 'Σημείωση',
    'LBL_EMAIL_ADDRESS' => 'Διεύθυνση Email:',
    'LBL_EMAIL_ATTACHMENT' => 'Email Attachment',
    'LBL_FILE_MIME_TYPE' => 'Mime Type',
    'LBL_FILE_URL' => 'File URL',
    'LBL_FILENAME' => 'Συνημμένο:',
    'LBL_LEAD_ID' => 'Α/Α ερίσματος:',
    'LBL_LIST_CONTACT_NAME' => 'Επαφή',
    'LBL_LIST_DATE_MODIFIED' => 'Τελευταία Τροποποίηση',
    'LBL_LIST_FILENAME' => 'Attachment',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος σημειωσεων',
    'LBL_LIST_RELATED_TO' => 'Related To',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_CONTACT' => 'Επαφή',
    'LBL_MODULE_NAME' => 'Σημειώσεις:',
    'LBL_MODULE_TITLE' => 'Σημειωσεις: Αρχικη',
    'LBL_NEW_FORM_TITLE' => 'Create Note or Add Attachment',
    'LBL_NOTE_STATUS' => 'Σημείωση',
    'LBL_NOTE_SUBJECT' => 'Subject:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Attachments',
    'LBL_NOTE' => 'Σημείωση:',
    'LBL_OPPORTUNITY_ID' => 'Α/Α ευκαιρίας:',
    'LBL_PARENT_ID' => 'Α/Α αρχικού:',
    'LBL_PARENT_TYPE' => 'Γονικός Τύπος',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_FLAG' => 'Εμφάνιση στην πύλη;',
    'LBL_EMBED_FLAG' => 'Embed in email?',
    'LBL_PRODUCT_ID' => 'Α/Α προϊόντος:',
    'LBL_QUOTE_ID' => 'Α/Α υπομνήματος:',
    'LBL_RELATED_TO' => 'Related To:',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση σημειώσεων',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_SUBJECT' => 'Subject:',
    'LNK_IMPORT_NOTES' => 'Import Notes',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Επισύναψης',
    'LNK_NOTE_LIST' => 'Προβολή Σημειώσεων',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατεθειμένος Χειριστής',
    'LBL_REMOVING_ATTACHMENT' => 'Removing attachment...',
    'ERR_REMOVING_ATTACHMENT' => 'Failed to remove attachment...',
    'LBL_CREATED_BY' => 'Δημιουργήθηκε Από',
    'LBL_MODIFIED_BY' => 'Τροποποιήθηκε Από',
    'LBL_SEND_ANYWAYS' => 'This email has no subject. Send/save anyway?',
    'LBL_NOTE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Οι σημειώσεις μου',
    'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Επώνυμο',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημ/νία Τροποποίησης',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_FILE_CONTENTS' => 'File Contents',

    'LBL_ASCENDING' => 'Αύξουσα',
    'LBL_DESCENDING' => 'Φθίνουσα',
);
