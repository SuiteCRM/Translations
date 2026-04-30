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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the lead.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Περιγραφή',
    'LBL_ACCOUNT_ID' => 'Ταυτότητα Λογαριασμού',
    'LBL_ACCOUNT_NAME' => 'Όνομα Λογαριασμού:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_ADDRESS_INFORMATION' => 'Πληροφορίες Διεύθυνσης',
    'LBL_ALT_ADDRESS_CITY' => 'Άλλη πόλη',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Άλλη χώρα',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Άλλος ΤΚ.',
    'LBL_ALT_ADDRESS_STATE' => 'Άλλη περιοχή',
    'LBL_ALT_ADDRESS_STREET_2' => 'Οδός 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Οδός 3',
    'LBL_ALT_ADDRESS_STREET' => 'Άλλη οδός',
    'LBL_ALTERNATE_ADDRESS' => 'Άλλη Διεύθυνση:',
    'LBL_ALT_ADDRESS' => 'Άλλη Διεύθυνση:',
    'LBL_ANY_ADDRESS' => 'Οποιαδήποτε Διεύθυνση:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Ανατέθηκε σε',
    'LBL_ASSIGNED_TO_ID' => 'Assigned User:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'Α/Α επαφής',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Όνομα ερίσματος πώλησης:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Έρισμα Πώλησης-Ευκαιρία Πώλησης:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACT' => 'Έρισμα πώλησης:',
    'LBL_CONVERTED_ACCOUNT' => 'Λογαριασμός που μετατράπηκε:',
    'LBL_CONVERTED_CONTACT' => 'Επαφή που μετατράπηκε:',
    'LBL_CONVERTED_OPP' => 'Ευκαιρία πώλησης που μετατράπηκε:',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Μετατροπή ερίσματος πώλησης',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Warning: The status of the Lead you are about to convert is "Converted". Contact and/or Account records may already have been created from the Lead. If you wish to continue with converting the Lead, click Save. To go back to the Lead without converting it, click Cancel.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Possible Contact: ',
    'LBL_COUNTRY' => 'Χώρα',
    'LBL_CREATED_NEW' => 'Created a new',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Σχετικά ερίσματα πώλησης',
    'LBL_EMAIL_ADDRESS' => 'Διεύθυνση Email:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Φαξ:',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Αυτόματη δημιουργία ενός νέου ερίσματος πώλησης εισάγωντας μια vCard από το δίσκο.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Άμεσες Αναφορές',
    'LBL_LAST_NAME' => 'Επώνυμο:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Περιγραφή πηγής ερίσματος πώλησης:',
    'LBL_LEAD_SOURCE' => 'Lead Source:',
    'LBL_LIST_ACCEPT_STATUS' => 'Αποδοχή Κατάστασης',
    'LBL_LIST_ACCOUNT_NAME' => 'Όνομα Λογαριασμού',
    'LBL_LIST_CONTACT_NAME' => 'Όνομα ερίσματος πώλησης',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος ερισματων πωλησης',
    'LBL_LIST_LAST_NAME' => 'Επώνυμο',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Περιγραφή πηγής ερίσματος πώλησης',
    'LBL_LIST_LEAD_SOURCE' => 'Πηγή ερίσματος πώλησης',
    'LBL_LIST_MY_LEADS' => 'Τα ερισματα πωλησης μου',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_PHONE' => 'Τηλέφωνο Γραφείου:',
    'LBL_LIST_REFERED_BY' => 'Αναφέρθηκε από',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_TITLE' => 'Job Title',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Δυνητικοί Πελάτες',
    'LBL_MODULE_TITLE' => 'Ερισματα πωλησης: Αρχικη',
    'LBL_NAME' => 'Όνομα Εκστρατείας:',
    'LBL_NEW_FORM_TITLE' => 'Νεο ερισμα πωλησης',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Πλήθος ευκαιριών πώλησης:',
    'LBL_OPPORTUNITY_ID' => 'Α/Α ευκαιρίας πώλησης',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Εφαρμογή πύλης',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'Τ.Κ:',
    'LBL_STREET' => 'Οδός',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Πόλη',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Χώρα',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'ΤΚ',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Περιοχή',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Οδός 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Οδός 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Οδός',
    'LBL_PRIMARY_ADDRESS' => 'Κύρια Διεύθυνση:',
    'LBL_REFERED_BY' => 'Αναφέρθηκε από:',
    'LBL_REPORTS_TO_ID' => 'Αναφέρεται σε (Α/Α)',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Χαιρετισμός',
    'LBL_MODIFIED' => 'Τροποποιήθηκε Από',
    'LBL_CREATED' => 'Δημιουργήθηκε Από',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση ερίσματος πώλησης',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Επιλογή μαρκαρισμένων ερισμάτων πώλησης',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Περιγραφή κατάστασης:',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_TITLE' => 'Job Title:',
    'LNK_IMPORT_VCARD' => 'Δημιουργία από vCard',
    'LNK_LEAD_LIST' => 'Ερίσματα πώλησης',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία Λογαριασμού',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Δημιουργία Επαφής',
    'LNK_NEW_LEAD' => 'Δημιουργία Δυνητικού Πελάτη',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_NEW_CASE' => 'Δημιουργία Υπόθεσης',
    'LNK_NEW_CALL' => 'Νέα Κλήση',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
    'LNK_SELECT_ACCOUNTS' => ' <b>OR</b> Select Account',
    'LNK_SELECT_CONTACTS' => ' <b>OR</b> Select Contact',
    'NTC_DELETE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτή την εγγραφή;',
    'NTC_SNOOZE_CONFIRMATION' => 'Are you sure you want to snooze?',
    'NTC_REMOVE_CONFIRMATION' => 'Είστε βέβαιοι ότι θέλετε να διαγράψετε αυτό το έρισμα πώλησης από την αίτηση υποστήριξης;',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Εκστρατείες',
    'LBL_CAMPAIGN' => 'Εκστρατεία:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Ανατεθειμένος Χειριστής',
    'LBL_PROSPECT_LIST' => 'Λίστα Υποψήφιων',
    'LBL_CAMPAIGN_LEAD' => 'Εκστρατείες',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
    'LBL_MODIFIED_USER' => 'Τροποποιημένος Χειριστής',
    'LBL_CAMPAIGNS' => 'Εκστρατείες',
    'LBL_CONVERT_MODULE_NAME' => 'Ενότητα',
    'LBL_CONVERT_REQUIRED' => 'Υποχρεωτικό',
    'LBL_CONVERT_SELECT' => 'Allow Selection',
    'LBL_CONVERT_COPY' => 'Copy Data',
    'LBL_CONVERT_EDIT' => 'Επεξεργασία',
    'LBL_CONVERT_DELETE' => 'Διαγραφή',
    'LBL_CONVERT_ADD_MODULE' => 'Add Module',
    'LBL_CREATE' => 'Δημιουργία Στόχου',
    'LBL_SELECT' => ' <b>OR</b> Select',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Import Leads',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'The module to create a new record in.',
    'LBL_REQUIRED_TIP' => 'Required modules must be created or selected before the lead can be converted.',
    'LBL_COPY_TIP' => 'If checked, fields from the lead will be copied to fields with the same name in the newly created records.',
    'LBL_SELECTION_TIP' => 'Modules with a relate field in Contacts can be selected rather than created during the convert lead process.',
    'LBL_EDIT_TIP' => 'Modify the convert layout for this module.',
    'LBL_DELETE_TIP' => 'Remove this module from the convert layout.',

    'LBL_ACTIVITIES_MOVE' => 'Μετακίνηση Δραστηριοτήτων σε',
    'LBL_ACTIVITIES_COPY' => 'Αντιγραφή Δραστηριοτήτων σε',
    'LBL_ACTIVITIES_MOVE_HELP' => "Select the record to which to move the Lead's activities. Tasks, Calls, Meetings, Notes and Emails will be moved to the selected record(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Select the record(s) for which to create copies of the Lead's activities. New Tasks, Calls, Meetings and Notes will be created for each of the selected record(s). Emails will be related to the selected record(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Ημερομηνία Εισαγωγής' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Επεξεργασία' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
