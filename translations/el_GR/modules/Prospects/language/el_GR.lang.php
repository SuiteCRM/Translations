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
    'LBL_MODULE_NAME' => 'Targets',
    'LBL_MODULE_ID' => 'Targets',
    'LBL_INVITEE' => 'Άμεσες Αναφορές',
    'LBL_MODULE_TITLE' => 'Στόχοι: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Στόχου',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Στόχων',
    'LBL_NEW_FORM_TITLE' => 'Νεος Στόχος',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_LAST_NAME' => 'Επώνυμο',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Τηλέφωνο:',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
    'LBL_ASSIGNED_TO_ID' => 'Assigned To:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_NAME' => 'Όνομα Εκστρατείας:',
    'LBL_PROSPECT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_LAST_NAME' => 'Επώνυμο:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_FAX_PHONE' => 'Φαξ:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Κύρια Διεύθυνση, Οδός:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Κύρια Διεύθυνση, Πόλη:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Κύρια Διεύθυνση, Χώρα:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Κύρια Διεύθυνση, Περιοχή:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Κύρια Διεύθυνση, Τ.Κ:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternate Address Street:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternate Address City:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternate Address Country:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternate Address State:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternate Address Postal Code:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_EMAIL_ADDRESS' => 'Διεύθυνση Email:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Κύρια Διεύθυνση:',
    'LBL_ALTERNATE_ADDRESS' => 'Άλλη Διεύθυνση:',
    'LBL_ANY_ADDRESS' => 'Οποιαδήποτε Διεύθυνση:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Τ.Κ:',
    'LBL_COUNTRY' => 'Χώρα',
    'LBL_ADDRESS_INFORMATION' => 'Πληροφορίες Διεύθυνσης',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Πιθανότητα διπλότυπων στόχων',
    'MSG_SHOW_DUPLICATES' => 'Η δημιουργία αυτής του στόχου πιθανόν να προκαλέσει την ύπαρξη διπλότυπων επαφών. Παρακάτω βρίσκονται εγγραφές στόχων το οποία περιέχουν παρόμοια ονόματα και/η email.<br/>Πατήστε Δημιουργία Στόχου για να συνεχίσετε με την δημιουργία αυτού του νέου στόχου, ή επιλέξτε έναν υπάρχων στόχο από κάτω.',
    'MSG_DUPLICATE' => 'Η δημιουργία αυτής του στόχου πιθανόν να προκαλέσει την ύπαρξη διπλότυπων επαφών. Παρακάτω βρίσκονται εγγραφές στόχων το οποία περιέχουν παρόμοια ονόματα και/η email.<br/>Πατήστε Δημιουργία Στόχου για να συνεχίσετε με την δημιουργία αυτού του νέου στόχου, ή επιλέξτε έναν υπάρχων στόχο από κάτω.',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία Λογαριασμού',
    'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
    'LNK_NEW_CASE' => 'Δημιουργία Υπόθεσης',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Επισύναψης',
    'LNK_NEW_CALL' => 'Νέα Κλήση',
    'LNK_NEW_EMAIL' => 'Αρχειοθέτηση Email',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_IMPORT_PROSPECTS' => 'Εισαγωγή Στόχων',
    'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την εγγραφή;',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Are you sure you want to remove this contact from the case?',
    'ERR_DELETE_RECORD' => 'Πρέπει να προσδιόρισετε έναν αριθμό εγγραφής, προκειμένου να διαγράψετε την επαφή.',
    'LBL_SALUTATION' => 'Χαιρετισμός',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'Δημιουργία Στόχων',
    'LNK_PROSPECT_LIST' => 'Προβολή Στόχων',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Εκστρατείες',
    'LNK_NEW_PROSPECT_LIST' => 'Δημιουργία Λίστας Στόχων',
    'LNK_PROSPECT_LIST_LIST' => 'Λίστες Στόχων',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Επιλογή Μαρκαρισμένων Στόχων',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Targets',
    'LBL_PROSPECT_LIST' => 'Λίστα Υποψήφιων',
    'LBL_CONVERT_BUTTON_TITLE' => 'Μετατροπή Στόχου',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => 'Νέα Επαφή',
    'LBL_CREATED_CONTACT' => "Created a new contact",
    'LBL_CAMPAIGNS' => 'Εκστρατείες',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Σύνδεση Εκστρατείας',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Α/Α Ερείσματος Πώλησης',
    'LBL_CONVERTED_LEAD' => 'Ερείσμα Πώλησης που Μετατράπηκε',
    'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
    'LBL_EDIT_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
    'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
    'LBL_MODIFIED_USER' => 'Τροποποιημένος Χειριστής',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
