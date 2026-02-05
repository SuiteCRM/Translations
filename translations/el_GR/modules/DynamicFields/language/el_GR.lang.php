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
    'LNK_NEW_CALL' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LNK_NEW_EMAIL' => 'Αρχειοθέτηση email',
    'LNK_CALL_LIST' => 'Τηλεφωνικές Κλήσεις',
    'LNK_MEETING_LIST' => 'Συναντήσεις',
    'LNK_TASK_LIST' => 'Εργασίες',
    'LNK_NOTE_LIST' => 'Σημειώσεις',
    'LBL_ADD_FIELD' => 'Προσθήκη Πεδίου:',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Ενότητας',
    'COLUMN_TITLE_NAME' => 'Όνομα Πεδίου',
    'COLUMN_TITLE_DISPLAY_LABEL' => 'Εμφάνιση Ετικέτας',
    'COLUMN_TITLE_LABEL_VALUE' => 'Αξία Ετικέτας',
    'COLUMN_TITLE_LABEL' => 'Ετικέτα Συστήματος',
    'COLUMN_TITLE_DATA_TYPE' => 'Τύπος Δεδομένων',
    'COLUMN_TITLE_MAX_SIZE' => 'Μέγιστο Μέγεθος',
    'COLUMN_TITLE_HELP_TEXT' => 'Βοήθεια Κειμένου',
    'COLUMN_TITLE_COMMENT_TEXT' => 'Σχόλιο Κειμένου',
    'COLUMN_TITLE_REQUIRED_OPTION' => 'Υποχρεωτικό Πεδίο',
    'COLUMN_TITLE_DEFAULT_VALUE' => 'Προκαθορισμένη Αξία',
    'COLUMN_TITLE_FRAME_HEIGHT' => 'Ύψος Πλαισίου',
    'COLUMN_TITLE_HTML_CONTENT' => 'HTML',
    'COLUMN_TITLE_URL' => 'Προεπιλογή URL',
    'COLUMN_TITLE_AUDIT' => 'Λογιστικός Έλεγχος',
    'COLUMN_TITLE_MIN_VALUE' => 'Ελάχιστη Αξία',
    'COLUMN_TITLE_MAX_VALUE' => 'Μέγιστη Αξία',
    'COLUMN_TITLE_LABEL_ROWS' => 'Σειρές',
    'COLUMN_TITLE_LABEL_COLS' => 'Στήλες',
    'COLUMN_TITLE_DISPLAYED_ITEM_COUNT' => '# εμφανιζόμενα είδη',
    'COLUMN_TITLE_AUTOINC_NEXT' => 'Αυτόματη Αύξηση Επόμενης Τιμής',
    'COLUMN_DISABLE_NUMBER_FORMAT' => 'Απενεργοποιημένη Μορφή',
    'COLUMN_TITLE_ENABLE_RANGE_SEARCH' => 'Ενεργοποίηση Εύρος Αναζήτησης',
    'LBL_DROP_DOWN_LIST' => 'Αναπτυσσόμενη Λίστα',
    'LBL_RADIO_FIELDS' => 'Πεδία Δέκτη',
    'LBL_MULTI_SELECT_LIST' => 'Λίστα Πολλαπλής Επιλογής',
    'COLUMN_TITLE_PRECISION' => 'Ακρίβεια',
    'LBL_MODULE' => 'Ενότητα',
    'COLUMN_TITLE_MASS_UPDATE' => 'Μαζική Ενημέρωση',
    'COLUMN_TITLE_IMPORTABLE' => 'Εισαγώγιμη',
    'COLUMN_TITLE_DUPLICATE_MERGE' => 'Διπλότυπη Συγχώνευση',
    'LBL_LABEL' => 'Ετικέτα',
    'LBL_DATA_TYPE' => 'Τύπος Δεδομένων',
    'LBL_DEFAULT_VALUE' => 'Προκαθορισμένη Αξία',
    'ERR_RESERVED_FIELD_NAME' => "Διατηρημένη λέξη κλειδί",
    'ERR_SELECT_FIELD_TYPE' => 'Παρακαλώ επιλέξτε Τύπο Πεδίου',
    'ERR_FIELD_NAME_ALREADY_EXISTS' => 'Το Όνομα του Πεδίου υπάρχει ήδη',
    'LBL_BTN_ADD' => 'Προσθήκη',
    'LBL_BTN_EDIT' => 'Επεξεργασία',
    'LBL_GENERATE_URL' => 'Δημιουργία διεύθυνσης URL',
    'LBL_CALCULATED' => 'Υπολογισμένη Αξία',
    'LBL_LINK_TARGET' => 'Άνοιγμα Συνδέσμου στο',
    'LBL_IMAGE_WIDTH' => 'Πλάτος',
    'LBL_IMAGE_HEIGHT' => 'Ύψος',
    'LBL_IMAGE_BORDER' => 'Περιθώριο',
    'LBL_HELP' => 'Βοήθεια' /*for 508 compliance fix*/,
    'COLUMN_TITLE_INLINE_EDIT_TEXT' => 'Inline Edit',
    'COLUMN_TITLE_PARENT_ENUM' => 'Μητρικό Αναπτυσόμμενο μενού',
    'LBL_INSERT_FIELD' => 'Insert Field',
);
