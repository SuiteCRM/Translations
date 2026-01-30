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
    'LBL_ASSIGNED_TO_ID' => 'Υπεύθυνος Χρήστης Α/Α ',
    'LBL_ASSIGNED_TO_NAME' => 'Χειριστής SuiteCRM:',
    'LBL_ID' => 'Α/Α',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από',
    'LBL_MODIFIED_NAME' => 'Τροποποίηση ανά Όνομα',
    'LBL_CREATED' => 'Δημιουργήθηκε από',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_NAME' => 'Όνομα Χειριστή Εφαρμογής',
    'LBL_CREATED_USER' => 'Δημιουργήθηκε Από Χειριστή',
    'LBL_MODIFIED_USER' => 'Τροποποιήθηκε από Χειριστή',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Εξωτερικού Λογαριασμού',
    'LBL_MODULE_NAME' => 'Εξωτερικός Λογαριασμός',
    'LBL_MODULE_TITLE' => 'Εξωτερικοί Λογαριασμοί',
    'LBL_HOMEPAGE_TITLE' => 'Εξωτερικοί Λογαριασμοί Μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Εξωτερικών Λογαριασμών',
    'LNK_LIST' => 'Προβολή Εξωτερικών Λογαριασμών',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Εξωτερικής Πηγής',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Ιστορικού',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_NEW_FORM_TITLE' => 'Νέος Εξωτερικός Λογαριασμός',
    'LBL_PASSWORD' => 'Κωδικός Πρόσβασης Εφαρμογής',
    'LBL_USER_NAME' => 'Όνομα Χειριστή Εφαρμογής',
    'LBL_URL' => 'Υπερσύνδεσμος',
    'LBL_APPLICATION' => 'Εφαρμογή',
    'LBL_API_DATA' => 'API Δεδομένα',
    'LBL_API_CONSKEY' => 'Κλειδί Καταναλωτή ',
    'LBL_API_CONSSECRET' => 'Μυστικό Καταναλωτή ',
    'LBL_API_OAUTHTOKEN' => 'Ανοιχτή Εξουσιοδότηση',
    'LBL_AUTH_UNSUPPORTED' => "Αυτή η μέθοδος εξουσιοδότησης δεν υποστηρίζεται από την εφαρμογή",
    'LBL_AUTH_ERROR' => 'Η προσπάθεια να συνδεθεί με αυτόν τον λογαριασμό, απέτυχε.',
    'LBL_VALIDATED' => 'Συνδεδεμένο',
    'LBL_ACTIVE' => 'Ενεργός',
    'LBL_OAUTH_NAME' => '%ς',
    'LBL_CONNECT_BUTTON_TITLE' => 'Σύνδεση',
    'LBL_NOTE' => 'Παρακαλώ Σημειώστε',
    'LBL_CONNECTED' => 'Συνδεδεμένο',

    'LBL_ERR_NO_AUTHINFO' => 'Δεν υπάρχει καμία πληροφορία επικύρωσης για αυτόν τον λογαριασμό.',
    'LBL_ERR_NO_TOKEN' => 'Δεν υπάρχουν έγκυρα σημεία σύνδεσης για αυτόν το λογαριασμό.',

    'LBL_ERR_FAILED_QUICKCHECK' => 'Δεν συνδέεστε αυτήν την περίοδο με τον {0} λογαριασμό σας. Πατήστε το κουμπί Εντάξει στη σύνδεση του λογαριασμού σας και επαν-ενεργοποιήστε την σύνδεση.',

    'LBL_CLICK_TO_EDIT' => 'Κάντε κλικ για επεξεργασία',

    // Various strings used throughout the external account modules
    'LBL_REAUTHENTICATE_LABEL' => 'Επανεπικύρωση',
    'LBL_APPLICATION_FOUND_NOTICE' => 'Ένας λογαριασμός για αυτήν την εφαρμογή υπάρχει ήδη. Έχουμε επαν-εγκαταστήσει τον υπάρχοντα λογαριασμό.',
    'LBL_OMIT_URL' => '(Παράληψη διεύθυνσης URL http:// ή https://)',
    'LBL_OAUTH_SAVE_NOTICE' => 'Πατήστε <b>Σύνδεση</b>, για να κατευθυνθεί σε μια σελίδα για να παρασχεθούν οι πληροφορίες λογαρισμού σας και για να εγκριθεί η πρόσβαση στον λογαριασμό από το SuiteCRM. Μετά την σύνδεση,  θα κατευθυνθείτε πίσω στο SuiteCRM.',
    'LBL_BASIC_SAVE_NOTICE' => 'Πατήστε <b>Σύνδεση</b>, για να συνδεθείτε με αυτόν τον λογαριασμό του SuiteCRM.',
    'LBL_ERR_POPUPS_DISABLED' => 'Please enable browser popup windows or add an exception for website "{0}" to the exceptions list in order to connect.',

    'LBL_API_OAUTHSECRET' => 'API OAuth Secret',
);
