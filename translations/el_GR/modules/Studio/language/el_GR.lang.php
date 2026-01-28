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
    'LBL_EDIT_LAYOUT' => 'Επεξεργασία Διάταξης',
    'LBL_EDIT_FIELDS' => 'Επεξεργασία Προσαρμοσμένων Πεδίων',
    'LBL_SELECT_FILE' => 'Επιλογή Αρχείου',
    'LBL_MODULE_TITLE' => 'Στούντιο',
    'LBL_TOOLBOX' => 'Εργαλεία',
    'LBL_SUITE_FIELDS_STAGE' => 'Πεδία SuiteCRM (πατήστε στα είδη για να προστεθούν στην περιοχή οργάνωσης)',
    'LBL_VIEW_SUITE_FIELDS' => 'Προβολή Πεδίων SuiteCRM',
    'LBL_FAILED_TO_SAVE' => 'Αποτυχία Αποθήκευσης',
    'LBL_CONFIRM_UNSAVE' => 'Οποιεσδήποτε αλλαγές δεν θα αποθηκευτούν. Είστε σίγουροι ότι θέλετε να συνεχίσετε;',
    'LBL_PUBLISHING' => 'Δημοσίευση...',
    'LBL_PUBLISHED' => 'Δημοσιεύτηκε',
    'LBL_FAILED_PUBLISHED' => 'Αποτυχία Δημοσίευσης',
    'LBL_DROP_HERE' => '[Πτώση Εδώ]',

//CUSTOM FIELDS
    'LBL_NAME' => 'Όνομα',
    'LBL_LABEL' => 'Ετικέτα',
    'LBL_MASS_UPDATE' => 'Μαζική Ενημέρωση',
    'LBL_DEFAULT_VALUE' => 'Προκαθορισμένη Αξία',
    'LBL_REQUIRED' => 'Υποχρεωτικό',
    'LBL_DATA_TYPE' => 'Τύπος',


    'LBL_HISTORY' => 'Ιστορικό',

//WIZARDS

//STUDIO WIZARD
    'LBL_SW_WELCOME' => '<h2>Καλώς Ήλθατε στο Στούντιο!</h2><br> Τι θα θέλατε να κάνετε σήμερα;<br><b> Παρακαλώ επιλέξτε μία από τις παρακάτω επιλογές.</b>',
    'LBL_SW_EDIT_MODULE' => 'Επεξεργασία μιας Ενότητας',
    'LBL_SW_EDIT_DROPDOWNS' => 'Επεξεργασία Αναδυόμενων',
    'LBL_SW_EDIT_TABS' => 'Διαμόρφωση Καρτελών',
    'LBL_SW_RENAME_TABS' => 'Μετονομασία Καρτελών',
    'LBL_SW_EDIT_GROUPTABS' => 'Διαμόρφωση Γκρουπ Καρτελών',
    'LBL_SW_EDIT_PORTAL' => 'Επεξεργασία Portal',
    'LBL_SW_REPAIR_CUSTOMFIELDS' => 'Επιδιόρθωση Προσαρμοσμένων Πεδίων',
    'LBL_SW_MIGRATE_CUSTOMFIELDS' => 'Μετεγκατάσταση Πρόσθετων Πεδίων',

// JS LABELS
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC_SHORT' => 'Ανοικοδόμηση εκδόσεων javascript των αρχείων γλώσσας',
    'LBL_REBUILD_JAVASCRIPT_LANG_DESC' => 'Κατάργηση των εκδόσεων javascript των αρχείων γλώσσας, θα ανοικοδομήσουν όταν χρειάζεται.',


//Manager Backups History
    'LBL_MB_DELETE' => 'Διαγραφή',

//EDIT DROP DOWNS
    'LBL_ED_CREATE_DROPDOWN' => 'Δημιουργία ενός Αναπτυσσόμενου',
    'LBL_DROPDOWN_NAME' => 'Αναπτυσσόμενο Όνομα:',
    'LBL_DROPDOWN_LANGUAGE' => 'Αναπτυσσόμενη Γλώσσα:',
    'LBL_TABGROUP_LANGUAGE' => 'Γλώσσα:',

//END WIZARDS

//DROP DOWN EDITOR
    'LBL_DD_DISPALYVALUE' => 'Εμφάνιση Αξίας',
    'LBL_DD_DATABASEVALUE' => 'Αξία Βάσης Δεδομένων',
    'LBL_DD_ALL' => 'Όλες',

//BUTTONS
    'LBL_BTN_SAVE' => 'Αποθήκευση',
    'LBL_BTN_CANCEL' => 'Ακύρωση',
    'LBL_BTN_SAVEPUBLISH' => 'Αποθήκευση & Ανάπτυξη',
    'LBL_BTN_HISTORY' => 'Ιστορικό',
    'LBL_BTN_ADDROWS' => 'Προσθήκη Γραμμών',
    'LBL_BTN_UNDO' => 'Αναίρεση',
    'LBL_BTN_REDO' => 'Ξανά',
    'LBL_BTN_ADDCUSTOMFIELD' => 'Προσθήκη Προσαρμοσμένου Πεδίου',
    'LBL_BTN_TABINDEX' => 'Επεξεργασία Σειράς Καρτελών',

//TABS
    'LBL_MODULES' => 'Ενότητες',
    'LBL_MODULE_NAME' => 'Διαχείριση',
    'LBL_CONFIGURE_GROUP_TABS' => 'Διαμόρφωση Φίλτρων Μενού Ενότητας',
    'LBL_GROUP_TAB_WELCOME' => 'Τα παρακάτω φίλτρα θα εμφανίζονται στη λίστα Περισσότερα στο μενού ενότητας για τους χειριστές, για να χρησιμοποιήσουν στην προβολή γκρουπ ενοτήτων μέσα από το μενού. Drag and drop τις ενότητες και από τα φίλτρα. Σημείωση: Τα κενά φίλτρα δεν θα εμφανίζονται στις επιλογές.',
    'LBL_RENAME_TAB_WELCOME' => 'Πατήστε σε οποιαδήποτε καρτέλα Εμφάνισης Τιμών, στον πίνακα που ακολουθεί για να μετονομάσετε την καρτέλα.',
    'LBL_DELETE_MODULE' => 'Μετακίνηση&nbsp;ενότητας<br />από&nbsp;φίλτρο',
    'LBL_TAB_GROUP_LANGUAGE_HELP' => 'Επιλέξτε μια διαθέσιμη γλώσσα, να επεξεργαστείτε τις ετικέτες ομάδας και πατήστε το κουμπί Αποθήκευση & Ανάπτυξη για να εφαρμόσει τις ετικέτες στην επιλεγμένη γλώσσα.',
    'LBL_ADD_GROUP' => 'Προσθήκη Φίλτρου',
    'LBL_NEW_GROUP' => 'Νέα Ομάδα',
    'LBL_RENAME_TABS' => 'Μετονομασία Ενοτήτων',

//ERRORS
    'ERROR_INVALID_KEY_VALUE' => "Λάθος: Άκυρη Αξία Κλειδιού: [&#39;]",

//SUGAR PORTAL
    'LBL_SAVE' => 'Αποθήκευση' /*for 508 compliance fix*/,
    'LBL_UNDO' => 'Αναίρεση' /*for 508 compliance fix*/,
    'LBL_REDO' => 'Ξανά' /*for 508 compliance fix*/,
    'LBL_INLINE' => 'Ευθύγραμμο' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Διαγραφή' /*for 508 compliance fix*/,
    'LBL_ADD_FIELD' => 'Προσθήκη Πεδίου' /*for 508 compliance fix*/,
    'LBL_MAXIMIZE' => 'Μεγιστοποίηση' /*for 508 compliance fix*/,
    'LBL_MINIMIZE' => 'Ελαχιστοποίηση' /*for 508 compliance fix*/,
    'LBL_PUBLISH' => 'Δημοσίευση' /*for 508 compliance fix*/,
    'LBL_ADDROWS' => 'Προσθήκη Γραμμών' /*for 508 compliance fix*/,
    'LBL_ADDFIELD' => 'Προσθήκη Πεδίου' /*for 508 compliance fix*/,
    'LBL_EDIT' => 'Επεξεργασία' /*for 508 compliance fix*/,

    'LBL_LANGUAGE_TOOLTIP' => 'Επιλογή γλώσσας για επεξεργασία.',
    'LBL_SINGULAR' => 'Μοναδική Ετικέτα',
    'LBL_PLURAL' => 'Πολλαπλή Ετικέτα',
    'LBL_RENAME_MOD_SAVE_HELP' => 'Πατήστε το κουμπί <b>Αποθήκευση</b> για να εφαρμόσετε τις αλλαγές.'

);
