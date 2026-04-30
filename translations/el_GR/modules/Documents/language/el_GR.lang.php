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
    //module
    'LBL_MODULE_NAME' => 'Documents',
    'LBL_MODULE_TITLE' => 'Έγγραφα: Αρχή',
    'LNK_NEW_DOCUMENT' => 'Create Document',
    'LNK_DOCUMENT_LIST' => 'Έγγραφα',
    'LBL_DOC_REV_HEADER' => 'Αναθεωρήσεις Εγγράφων',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Εγγράφου',
    //vardef labels
    'LBL_NAME' => 'Document Name',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_CATEGORY' => 'Category',
    'LBL_SUBCATEGORY' => 'Υπο-Κατηγορία',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημ/νία Τροποποίησης',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από Ταυτότητα',
    'LBL_MODIFIED_USER' => 'Τροποποιήθηκε από',
    'LBL_CREATED' => 'Created by',
    'LBL_REVISIONS' => 'Revisions',
    'LBL_RELATED_DOCUMENT_ID' => 'Ταυτότητα Σχετικού Εγγράφου',
    'LBL_RELATED_DOCUMENT_REVISION_ID' => 'Ταυτότητα Αναθεώρησης Σχετικού Εγγράφου',
    'LBL_IS_TEMPLATE' => 'Ειναι Πρότυπο',
    'LBL_TEMPLATE_TYPE' => 'Τύπος Εγγράφου',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε:',
    'LBL_REVISION_NAME' => 'Αριθμός Αναθεώρησης',
    'LBL_MIME' => 'Mime Type',
    'LBL_REVISION' => 'Αναθεώρηση',
    'LBL_DOCUMENT' => 'Σχετικό Έγγραφο',
    'LBL_LATEST_REVISION' => 'Τελευταία Αναθεώρηση',
    'LBL_CHANGE_LOG' => 'Αλλαγή Σύνδεσης:',
    'LBL_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης',
    'LBL_EXPIRATION_DATE' => 'Ημερομηνία Λήξης',
    'LBL_FILE_EXTENSION' => 'Επέκταση Αρχείου',
    'LBL_LAST_REV_MIME_TYPE' => 'Τύπος MIME τελευταίας αναθεώρησης',
    'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Ακαθόριστο',
    'LBL_HOMEPAGE_TITLE' => 'Έγγραφα Μου',
    //quick search
    'LBL_NEW_FORM_TITLE' => 'New Document',
    //document edit and detail view
    'LBL_DOC_NAME' => 'Document Name:',
    'LBL_FILENAME' => 'Όνομα Αρχείου:',
    'LBL_LIST_FILENAME' => 'Αρχείο:',
    'LBL_DOC_VERSION' => 'Αναθεώρηση:',
    'LBL_FILE_UPLOAD' => 'Αρχείο:',

    'LBL_CATEGORY_VALUE' => 'Category:',
    'LBL_LIST_CATEGORY' => 'Category',
    'LBL_SUBCATEGORY_VALUE' => 'Υπό-Κατηγορία:',
    'LBL_DOC_STATUS' => 'Κατάσταση',
    'LBL_LAST_REV_CREATOR' => 'Αναθεώρηση Δημιουργήθηκε Από:',
    'LBL_LASTEST_REVISION_NAME' => 'Όνομα τελευταίας αναθεώρησης:',
    'LBL_SELECTED_REVISION_NAME' => 'Επιλεγμένο όνομα αναθεώρησης:',
    'LBL_CONTRACT_STATUS' => 'Κατάσταση Σύμβασης:',
    'LBL_CONTRACT_NAME' => 'Όνομα Επαφής:',
    'LBL_DET_RELATED_DOCUMENT' => 'Σχετικό Έγγραφο:',
    'LBL_DET_RELATED_DOCUMENT_VERSION' => "Αναθεώρηση Σχετικών Εγγράφων:",
    'LBL_DET_IS_TEMPLATE' => 'Πρότυπο; :',
    'LBL_DET_TEMPLATE_TYPE' => 'Τύπος Εγγράφου:',
    'LBL_DOC_DESCRIPTION' => 'Description:',
    'LBL_DOC_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης:',
    'LBL_DOC_EXP_DATE' => 'Ημερομηνία Λήξης:',

    //document list view.
    'LBL_LIST_FORM_TITLE' => 'Λίστα Εγγράφων',
    'LBL_LIST_DOCUMENT' => 'Έγγραφο',
    'LBL_LIST_SUBCATEGORY' => 'Υπό-Κατηγορία',
    'LBL_LIST_REVISION' => 'Αναθεώρηση',
    'LBL_LIST_LAST_REV_CREATOR' => 'Δημοσιεύθηκε Από',
    'LBL_LIST_LAST_REV_DATE' => 'Ημερομηνία Αναθεώρησης',
    'LBL_LIST_VIEW_DOCUMENT' => 'View',
    'LBL_LIST_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης',
    'LBL_LIST_EXP_DATE' => 'Ημερομηνία Λήξης',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LINKED_ID' => 'Συνδεμένη ταυτότητα',
    'LBL_SELECTED_REVISION_ID' => 'Επιλεγμένη ταυτότητα αναθεώρησης',
    'LBL_LATEST_REVISION_ID' => 'Ταυτότητα τελευταίας αναθεώρησης',
    'LBL_SELECTED_REVISION_FILENAME' => 'Επιλεγμένο όνομα αρχείου αναθεώρησης',
    'LBL_FILE_URL' => 'Αρχείο url',

    //document search form.
    'LBL_SF_CATEGORY' => 'Category:',
    'LBL_SF_SUBCATEGORY' => 'Υπό-Κατηγορία:',

    'DEF_CREATE_LOG' => 'Δημιουργία Εγγράφου',

    //error messages
    'ERR_DOC_NAME' => 'Document Name',
    'ERR_DOC_ACTIVE_DATE' => 'Ημερομηνία Ενεργοποίησης',
    'ERR_FILENAME' => 'Όνομα Αρχείου',
    'ERR_DOC_VERSION' => 'Έκδοση Εγγράφου',
    'ERR_DELETE_CONFIRM' => 'Θέλετε να διαγράψετε αυτή την αναθεώρηση του εγγράφου;',
    'ERR_DELETE_LATEST_VERSION' => 'Δεν επιτρέπεται η διαγραφή της τελευταίας αναθεώρησης ενός εγγράφου.',
    'LNK_NEW_MAIL_MERGE' => 'Συγχώνευση Ταχυδρομείου',
    'ERR_MISSING_FILE' => 'Στο έγγραφο αυτό λείπει ένα αρχείο, πιθανότατα οφείλεται σε λάθος κατά τη διάρκεια της αποστολής. Παρακαλώ δοκιμάστε ξανά τη λήψη του αρχείου ή επικοινωνήστε με τον διαχειριστή σας.',

    //sub-panel vardefs.
    'LBL_LIST_DOCUMENT_NAME' => 'Όνομα',
    'LBL_LIST_IS_TEMPLATE' => 'Πρότυπο;',
    'LBL_LIST_TEMPLATE_TYPE' => 'Τύπος Εγγράφου',
    'LBL_LAST_REV_CREATE_DATE' => 'Ημερομηνία Δημιουργίας Τελευταίας Αναθεώρησης',
    'LBL_CONTRACTS' => 'Συμβάσεις',
    'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
    'LBL_DOCUMENT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_DOC_ID' => 'Document Source ID',
    'LBL_DOC_TYPE' => 'Source',
    'LBL_DOC_TYPE_POPUP' => 'Επιλέξτε μια πηγή στην οποία το έγγραφο αυτό θα αναρτηθεί και από την οποία θα είναι διαθέσιμο.',
    'LBL_DOC_URL' => 'Document Source URL',
    'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Όνομα Αρχείου',
    'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Τα πρώτα 20 πιο πρόσφατα τροποποιημένα αρχεία εμφανίζονται κατά φθίνουσα σειρά στη λίστα που ακολουθεί. Χρησιμοποιήστε την Αναζήτηση για να βρείτε άλλα αρχεία.',
    'LBL_LIST_EXT_DOCUMENT_NAME' => 'Όνομα Αρχείου',
    'ERR_INVALID_EXTERNAL_API_ACCESS' => 'Ο χειριστής επιχείρησε να εξασφαλίσει πρόσβαση σε άκυρη εξωτερική API ({0})',
    'ERR_INVALID_EXTERNAL_API_LOGIN' => 'Ο έλεγχος σύνδεσης απέτυχε για το εξωτερικό API ({0})',

    // Links around the world
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογιαριασμοί',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ευκαιρίες',
    'LBL_CASES_SUBPANEL_TITLE' => 'Υποθέσεις',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Σφάλμα Σημείου Εντοπισμού',

    'LBL_AOS_CONTRACTS' => 'Συμβάσεις',
);
