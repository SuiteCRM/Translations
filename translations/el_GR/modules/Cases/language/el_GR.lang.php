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
    'LBL_TOOL_TIP_BOX_TITLE' => 'Προτάσεις από τη γνωσιακή βάση',
    'LBL_TOOL_TIP_TITLE' => 'Τίτλος:',
    'LBL_TOOL_TIP_BODY' => 'Body:',
    'LBL_TOOL_TIP_INFO' => 'Πρόσθετες Πληροφορίες: ',
    'LBL_TOOL_TIP_USE' => 'Χρήση ως: ',
    'LBL_SUGGESTION_BOX' => 'Υποδείξεις',
    'LBL_NO_SUGGESTIONS' => 'Δεν υπάρχουν προτάσεις',
    'LBL_RESOLUTION_BUTTON' => 'Resolution',
    'LBL_SUGGESTION_BOX_STATUS' => 'Κατάσταση',
    'LBL_SUGGESTION_BOX_TITLE' => 'Τίτλος:',
    'LBL_SUGGESTION_BOX_REL' => 'Συνάφεια',

    'LBL_ACCOUNT_ID' => 'Ταυτότητα Λογαριασμού',
    'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογιαριασμοί',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Σφάλμα Σημείου Εντοπισμού',
    'LBL_CASE_NUMBER' => 'Αριθμός Υπόθεσης:',
    'LBL_CASE' => 'Υπόθεση:',
    'LBL_CONTACT_NAME' => 'Όνομα Επαφής:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Υποθέσεις',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_INVITEE' => 'Contacts',
    'LBL_MEMBER_OF' => 'Λογαριασμό',
    'LBL_MODULE_NAME' => 'Υποθέσεις',
    'LBL_MODULE_TITLE' => 'Υποθέσεις: Αρχή',
    'LBL_NEW_FORM_TITLE' => 'Νέα Υπόθεση',
    'LBL_NUMBER' => 'Number:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_RESOLUTION' => 'Resolution:',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Υπόθεσης',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατεθειμένος Χειριστής',
    'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
    'LBL_LIST_ASSIGNED' => 'Ανατέθηκε Σε',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Υποθέσεων',
    'LBL_LIST_LAST_MODIFIED' => 'Τελευταία Τροποποίηση',
    'LBL_LIST_MY_CASES' => 'Ανοικτές μου Υποθέσεις',
    'LBL_LIST_NUMBER' => 'Αριθμός',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_SUBJECT' => 'Subject',

    'LNK_CASE_LIST' => 'Προβολή Υποθέσεων',
    'LNK_NEW_CASE' => 'Δημιουργία Υπόθεσης',
    'LBL_LIST_DATE_CREATED' => 'Ημερομηνία Δημιουργίας',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
    'LBL_TYPE' => 'Type',
    'LBL_WORK_LOG' => 'Καταγραφή Εργασίας',
    'LNK_IMPORT_CASES' => 'Εισαγωγή Υποθέσεων',

    'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
    'LBL_MODIFIED_USER' => 'Τροποποιημένος Χειριστής',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_CASE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Ενημέρωση Κειμένου', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Ενημερώσεις Υποθέσεων',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Συρρίκνωση Όλων',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Επέκταση Όλων',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Συνημμένα:',

    'LBL_AOP_CASE_EVENTS' => 'Case Events',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Επισυνάψεις',
    'LBL_ADD_CASE_FILE' => 'Προσθήκη Αρχείου',
    'LBL_REMOVE_CASE_FILE' => 'Μετακίνηση Αρχείου',
    'LBL_SELECT_CASE_DOCUMENT' => 'Επιλογή εγγράφου',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Καθαρισμός εγγράφου',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Εσωτερικό CRM έγγραφο',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Εξωτερικό αρχείο ',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Δημιουργήθηκε από επαφή',
    'LBL_CONTACT_CREATED_BY' => 'Created by',
    'LBL_CASE_UPDATE_FORM' => 'Ανανέωση Φόρμας Επισυνάψεων', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
