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

    'LBL_ADMINISTRATION_MAIN' => 'Ρυθμίσεις Σύνδεσης',
    'LBL_AVAILABLE' => 'Διαθέσιμο',
    'LBL_BACK' => '< Πίσω',
    'LBL_CONFIRM_CONTINUE_SAVE' => 'Μερικά υποχρεωτικά πεδία έχουν μείνει κενά. Να προχωρήσει να αποθηκεύσει τις αλλαγές;',
    'LBL_CONNECTOR_FIELDS' => 'Πεδία Σύνδεσης',
    'LBL_DATA' => 'Δεδομένα ',
    'LBL_DEFAULT' => 'Προεπιλογή',
    'LBL_DISABLED' => 'Απενεργοποιημένο',
    'LBL_ENABLED' => 'Ενεργοποιημένο',
    'LBL_EXTERNAL' => 'Επιτρέπεται στους χειριστές να δημιουργήσουν εξωτερικό λογαριασμό αρχείων σε αυτή την σύνδεση.',
    'LBL_EXTERNAL_SET_PROPERTIES' => 'Προκειμένου να χρησιμοποιήσετε αυτή την σύνδεση, οι ιδιότητες θα πρέπει επίσης να Καθοριστούν στις Ιδιότητες Σύνδεσης στις ρυθμίσεις σελίδας.',
    'LBL_MERGE' => 'Συγχώνευση',
    'LBL_MODIFY_DISPLAY_TITLE' => 'Ενεργοποίηση Συνδέσεων',
    'LBL_MODIFY_DISPLAY_DESC' => 'Επιλέξτε ποιά ενότητα είναι ενεργοποιημένη για κάθε σύνδεση.',
    'LBL_MODULE_FIELDS' => 'Πεδία Ενότητας',
    'LBL_MODIFY_MAPPING_TITLE' => 'Χάρτης Πεδίων Σύνδεσης',
    'LBL_MODIFY_MAPPING_DESC' => 'Χάρτης πεδίων σύνδεσης σε ενότητα πεδίων προκειμένου να διαπιστωθούν ποια δεδομένα σύνδεσης μπορούν να προβληθούν και να συγχωνευθούν στις εγγραφές ενότητας',
    'LBL_MODIFY_PROPERTIES_TITLE' => 'Καθορισμός Ιδιοτήτων Σύνδεσης',
    'LBL_MODIFY_PROPERTIES_DESC' => 'Ρυθμίστε τις ιδιότητες για κάθε σύνδεση, συμπεριλαμβανομένων των URLs και των κλειδιών API.',
    'LBL_MODIFY_SEARCH_TITLE' => 'Αναζήτηση Διαχείριση Σύνδεσης',
    'LBL_MODIFY_SEARCH' => 'Αναζήτηση',
    'LBL_MODIFY_SEARCH_DESC' => 'Επιλέξτε τα πεδία σύνδεσης να χρησιμοποιήσετε να αναζητήσετε δεδομένα για κάθε ενότητα.',
    'LBL_MODULE_NAME' => 'Συνδέσεις',
    'LBL_NO_PROPERTIES' => 'Δεν υπάρχουν διαμορφώσιμες ιδιότητες για αυτή την σύνδεση.',
    'LBL_SAVE' => 'Αποθήκευση',
    'LBL_SUMMARY' => 'Περίληψη',
    'LBL_STEP1' => 'Αναζήτηση και Προβολή Δεδομένων',
    'LBL_STEP2' => 'Συγχώνευση Εγγραφών με',
    'LBL_TEST_SOURCE' => 'Δοκιμή Σύνδεσης',
    'LBL_TEST_SOURCE_FAILED' => 'Αποτυχημένη Δοκιμή',
    'LBL_TEST_SOURCE_SUCCESS' => 'Επιτυχημένη Δοκιμή',
    'LBL_TITLE' => 'Συγχώνευση Δεδομένων',

    'ERROR_NO_ADDITIONAL_DETAIL' => 'Λάθος: Δεν βρέθηκαν πρόσθετες λεπτομέρεις για την εγγραφή.',
    'ERROR_NO_SEARCHDEFS_DEFINED' => 'Καμία ενότητα δεν έχει ενεργοποιηθεί για αυτή την σύνδεση . Επιλέξτε μια ενότητα για αυτή την σύνδεση στη σελίδα Ενεργοποίηση Συνδέσεων.',
    'ERROR_NO_SEARCHDEFS_MAPPED' => 'Λάθος: Δεν υπάρχουν συνδέσεις που έχουν ενεργοποιηθεί στα πεδία αναζήτησης που ορίζονται.',
    'ERROR_NO_SEARCHDEFS_MAPPING' => 'Λάθος: Δεν υπάρχουν πεδία αναζήτησης που ορίζονται για την ενότητα και την σύνδεση. Παρακαλούμε επικοινωνήστε με το διαχειριστή του συστήματος.',
    'ERROR_NO_DISPLAYABLE_MAPPED_FIELDS' => 'Λάθος: Δεν υπάρχουν πεδία ενότητας που να έχουν χαρτογραφηθεί για εμφάνιση στα αποτελέσματα. Παρακαλούμε επικοινωνήστε με το διαχειριστή του συστήματος.',
    'LBL_INFO_INLINE' => 'Πληροφορίες' /*for 508 compliance fix*/,
    'LBL_CLOSE' => 'Κλείσιμο' /*for 508 compliance fix*/,

);
