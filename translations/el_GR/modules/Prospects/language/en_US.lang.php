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
    'LBL_MODULE_NAME' => 'Στόχοι',
    'LBL_MODULE_ID' => 'Στόχοι',
    'LBL_INVITEE' => 'Άμεσες Αναφορές',
    'LBL_MODULE_TITLE' => 'Στόχοι: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Στόχου',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Στόχων',
    'LBL_NEW_FORM_TITLE' => 'Νεος Στόχος',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_LAST_NAME' => 'Επώνυμο',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Τηλέφωνο',
    'LBL_LIST_FIRST_NAME' => 'Όνομα',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_ASSIGNED_TO_ID' => 'Υπεύθυνος:',
    'LBL_CAMPAIGN_ID' => 'A/A καμπάνιας',
    'LBL_EXISTING_ACCOUNT' => 'Χρησιμοποιήθηκε ένας υπάρχοντας λογαριασμός',
    'LBL_CREATED_ACCOUNT' => 'Δημιουργήθηκε νέος λογαριασμός',
    'LBL_CREATED_CALL' => 'Δημιουργήθηκε νέα κλήση',
    'LBL_CREATED_MEETING' => 'Δημιουργήθηκε νέα συνάντηση',
    'LBL_NAME' => 'Όνομα:',
    'LBL_PROSPECT_INFORMATION' => 'Επισκόπηση', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Περισσότερες πληροφορίες',
    'LBL_FIRST_NAME' => 'Όνομα:',
    'LBL_OFFICE_PHONE' => 'Τηλ. γραφείου:',
    'LBL_ANY_PHONE' => 'Άλλο τηλ.:',
    'LBL_PHONE' => 'Τηλέφωνο:',
    'LBL_LAST_NAME' => 'Επώνυμο:',
    'LBL_MOBILE_PHONE' => 'Κινητό τηλέφωνο:',
    'LBL_HOME_PHONE' => 'Αρχική:',
    'LBL_OTHER_PHONE' => 'Τηλ. 2:',
    'LBL_FAX_PHONE' => 'Φαξ:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Κύρια Διεύθυνση, Οδός:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Κύρια Διεύθυνση, Πόλη:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Χώρα:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Κύρια Διεύθυνση, Περιοχή:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Κύρια Διεύθυνση, Τ.Κ:',
    'LBL_ALT_ADDRESS_STREET' => 'Οδός Εναλλακτικής Διεύθυνσης:',
    'LBL_ALT_ADDRESS_CITY' => 'Πόλη Εναλλακτικής Διεύθυνσης:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Χώρα Εναλλακτικής Διεύθυνσης:',
    'LBL_ALT_ADDRESS_STATE' => 'Περιοχή Εναλλακτικής Διεύθυνσης:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'ΤΚ Εναλλακτικής Διεύθυνσης:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Τμήμα:',
    'LBL_BIRTHDATE' => 'Ημ/νία γέννησης:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Άλλο email:',
    'LBL_ANY_EMAIL' => 'Email 2:',
    'LBL_ASSISTANT' => 'Βοηθός:',
    'LBL_ASSISTANT_PHONE' => 'Τηλέφωνο Βοηθού:',
    'LBL_DO_NOT_CALL' => 'Μην Καλείτε:',
    'LBL_EMAIL_OPT_OUT' => 'Διαγραφή από τη λίστα E-mail:',
    'LBL_PRIMARY_ADDRESS' => 'Κύρια Διεύθυνση:',
    'LBL_ALTERNATE_ADDRESS' => 'Άλλη Διεύθυνση:',
    'LBL_ANY_ADDRESS' => 'Άλλη οδός:',
    'LBL_CITY' => 'Πόλη:',
    'LBL_STATE' => 'Περιοχή:',
    'LBL_POSTAL_CODE' => 'ΤΚ:',
    'LBL_COUNTRY' => 'Χώρα:',
    'LBL_ADDRESS_INFORMATION' => 'Διευθυνση',
    'LBL_DESCRIPTION' => 'Περιγραφή:',
    'LBL_OPP_NAME' => 'Όνομα Ευκαιρίας Πώλησης:',
    'LBL_IMPORT_VCARD' => 'Εισαγωγή vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Δημιουργήστε αυτόματα μια νέα επαφή εισάγωντας μια vCard.',
    'LBL_DUPLICATE' => 'Πιθανότητα διπλότυπων στόχων',
    'MSG_SHOW_DUPLICATES' => 'Η δημιουργία αυτής του στόχου πιθανόν να προκαλέσει την ύπαρξη διπλότυπων επαφών. Παρακάτω βρίσκονται εγγραφές στόχων το οποία περιέχουν παρόμοια ονόματα και/η email.<br/>Πατήστε Δημιουργία Στόχου για να συνεχίσετε με την δημιουργία αυτού του νέου στόχου, ή επιλέξτε έναν υπάρχων στόχο από κάτω.',
    'MSG_DUPLICATE' => 'Η δημιουργία αυτής του στόχου πιθανόν να προκαλέσει την ύπαρξη διπλότυπων επαφών. Παρακάτω βρίσκονται εγγραφές στόχων το οποία περιέχουν παρόμοια ονόματα και/η email.<br/>Πατήστε Δημιουργία Στόχου για να συνεχίσετε με την δημιουργία αυτού του νέου στόχου, ή επιλέξτε έναν υπάρχων στόχο από κάτω.',
    'LNK_IMPORT_VCARD' => 'Δημιουργία από vCard',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία λογαριασμού',
    'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
    'LNK_NEW_CASE' => 'Δημιουργία Υπόθεσης',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LNK_NEW_CALL' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_EMAIL' => 'Αρχειοθέτηση email',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_NEW_APPOINTMENT' => 'Προγραμματισμός κλήσης',
    'LNK_IMPORT_PROSPECTS' => 'Εισαγωγή Στόχων',
    'NTC_DELETE_CONFIRMATION' => 'Είστε βέαιοι ότι θέλετε να διαγράψετε αυτήν την εγγραφή;',
    'NTC_REMOVE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτήν την επαφή από την αυτήν την αίτηση υποστήριξης;',
    'ERR_DELETE_RECORD' => 'Πρέπει να προσδιόρισετε έναν αριθμό εγγραφής, προκειμένου να διαγράψετε την επαφή.',
    'LBL_SALUTATION' => 'Προσφώνηση',
    'LBL_CREATED_OPPORTUNITY' => 'Δημιουργήθηκε νέα ευκαιρια πώλησης',
    'LNK_SELECT_ACCOUNT' => "Επιλέξτε λογαριασμό",
    'LNK_NEW_PROSPECT' => 'Δημιουργία Στόχων',
    'LNK_PROSPECT_LIST' => 'Προβολή Στόχων',
    'LNK_NEW_CAMPAIGN' => 'Δημιουργία καμπάνιας',
    'LNK_CAMPAIGN_LIST' => 'Εκστρατείες',
    'LNK_NEW_PROSPECT_LIST' => 'Δημιουργία Λίστας Στόχων',
    'LNK_PROSPECT_LIST_LIST' => 'Λίστες Στόχων',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Επιλογή Μαρκαρισμένων Στόχων',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Επιλογή Μαρκαρισμένων Στόχων',
    'LBL_INVALID_EMAIL' => 'Άκυρο Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Στόχοι',
    'LBL_PROSPECT_LIST' => 'Λίστα Δυνητικών Πελάτης',
    'LBL_CONVERT_BUTTON_TITLE' => 'Μετατροπή Στόχου',
    'LBL_CONVERT_BUTTON_LABEL' => 'Μετατροπή Στόχου',
    'LNK_NEW_CONTACT' => 'Νέα επαφή',
    'LBL_CREATED_CONTACT' => "Δημιουργήθηκε νέα επαφή",
    'LBL_CAMPAIGNS' => 'Εκστρατείες',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Σύνδεση Εκστρατείας',
    'LBL_TRACKER_KEY' => 'Κλειδί Σημείου Εντοπισμού',
    'LBL_LEAD_ID' => 'Α/Α Ερείσματος Πώλησης',
    'LBL_CONVERTED_LEAD' => 'Ερείσμα Πώλησης που Μετατράπηκε',
    'LBL_ACCOUNT_NAME' => 'Όνομα λογαριασμού:',
    'LBL_EDIT_ACCOUNT_NAME' => 'Όνομα λογαριασμού:',
    'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
    'LBL_MODIFIED_USER' => 'Τροποποιημένος Χειριστής',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ιστορικό',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Γεγονότα',
);
