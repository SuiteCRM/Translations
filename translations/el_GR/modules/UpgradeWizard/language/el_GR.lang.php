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
    'ERR_UW_CANNOT_DETERMINE_GROUP' => 'Μη διευκρινίσιμη ομάδα',
    'ERR_UW_CANNOT_DETERMINE_USER' => 'Μη διευκρινίσιμος ιδιοκτήτης',
    'ERR_UW_CONFIG_WRITE' => 'Σφάλμα κατά την ενημέρωση διαμορφώστε.php με νέες πληροφορίες για την έκδοση.',
    'ERR_UW_CONFIG' => 'Παρακαλώ ορίστε δικαιώματα εγγραφής στο config.php και ξαναφορτώστε τη σελίδα αυτή.',
    'ERR_UW_DIR_NOT_WRITABLE' => 'Φάκελος μη εγγράψιμος',
    'ERR_UW_FILE_NOT_COPIED' => 'Το αρχείο δεν αντιγράφηκε',
    'ERR_UW_FILE_NOT_DELETED' => 'Σφάλμα κατά την απεγκατάσταση του πακέτου ',
    'ERR_UW_FILE_NOT_READABLE' => 'Δεν ήταν δυνατή η ανάγνωση του αρχείου.',
    'ERR_UW_FILE_NOT_WRITABLE' => 'Το αρχείο δεν είναι δυνατόν να διαγραφεί ή να τροποποιηθεί',
    'ERR_UW_FLAVOR_2' => 'Μέθοδος αναβάθμισης: ',
    'ERR_UW_FLAVOR' => 'Μέθοδος συστήματος SuiteCRM: ',
    'ERR_UW_LOG_FILE_UNWRITABLE' => 'Το αρχείο ./upgradeWizard.log δεν ήταν δυνατόννα δημιουργηθεί/τροποποιηθεί. Παρακαλώ διορθώστε τα δικαιώματα εγγραφής στους φακέλους της εγκατάστασης SuiteCRM.',
    'ERR_UW_MBSTRING_FUNC_OVERLOAD' => 'mbstring.func_overload set to a value higher than 1. Please change this in your php.ini and restart the web server.',
    'ERR_UW_NO_FILE_UPLOADED' => 'Παρακαλώ επιλέξτε αρχείο και ξαναπροσπαθήστε!<br>\n',
    'ERR_UW_NO_FILES' => 'Σφάλμα. Δεν βρέθηκαν αρχεία προς έλεγχο.',
    'ERR_UW_NO_MANIFEST' => 'Το αρχείο zip λείπει αρχείο manifest.php. Δεν μπορεί να προχωρήσει.',
    'ERR_UW_NO_VIEW' => 'Λανθασμένη προβολή.',
    'ERR_UW_NOT_VALID_UPLOAD' => 'Δεν είναι έγκυρη αποστολή.',
    'ERR_UW_NO_CREATE_TMP_DIR' => 'Could not create the temp directory. Check file permissions.',
    'ERR_UW_ONLY_PATCHES' => 'Μπορείτε να ανεβάσετε μόνο τροποποιήσεις σε αυτή τη σελίδα.',
    'ERR_UW_PREFLIGHT_ERRORS' => 'Σφάλαματα κατά τον προκαταρκτικό έλεγχο',
    'ERR_UW_UPLOAD_ERR' => 'Σφάλμα κατά το ανέβασμα του αρχείου. Παρακαλώ ξαναπροσπαθήστε!<br>' . PHP_EOL,
    'ERR_UW_VERSION' => 'Έκδοση SuiteCRM: ',
    'ERR_UW_PHP_VERSION' => 'PHP Version: ',
    'ERR_UW_SUITECRM_VERSION' => 'Έκδοση SuiteCRM: ',
    'ERR_UW_WRONG_TYPE' => 'Δεν επιτρέπετε η απευθείας εκτέλεση του οδηγού.',
    'LBL_BUTTON_BACK' => '< Πίσω',
    'LBL_BUTTON_CANCEL' => 'Ακύρωση',
    'LBL_BUTTON_DELETE' => 'Διαγραφή Πακέτου',
    'LBL_BUTTON_DONE' => 'Ολοκληρώθηκε',
    'LBL_BUTTON_EXIT' => 'Έξοδος',
    'LBL_BUTTON_NEXT' => 'Επόμενο >',
    'LBL_BUTTON_RECHECK' => 'Επανέλεγχος',
    'LBL_BUTTON_RESTART' => 'Επανεκκίνηση ',

    'LBL_UPLOAD_UPGRADE' => 'Ανέβασμα μιας αναβάθμισης: ',
    'LBL_UW_BACKUP_FILES_EXIST_TITLE' => 'Αντίγραφο ασφαλείας',
    'LBL_UW_BACKUP_FILES_EXIST' => 'Τα αντίγραφα ασφαλείας από αυτήν την αναβάθμιση μπορείτε να τα βρείτε στον φάκελο',
    'LBL_UW_BACKUP' => 'Αντίγραφο ασφαλείας',
    'LBL_UW_CANCEL_DESC' => 'Ο οδηγός αναβάθμισης ακυρώθηκες. Όλα τα σχετικά αρχεία έχουν διαγραφεί.<br><br>Πατήστε "Επόμενο" για να ξαναξεκινήσετετον οδηγό.',
    'LBL_UW_CHECK_ALL' => 'Επιλογή Όλων',
    'LBL_UW_CHECKLIST' => 'Βήματα αναβάθμισης',
    'LBL_UW_COMMIT_ADD_TASK_DESC_1' => 'Backups of Overwritten Files are in the following directory: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_DESC_2' => 'Manually merge the following files: ' . PHP_EOL,
    'LBL_UW_COMMIT_ADD_TASK_NAME' => 'Πρόοδος αναβάθμισης: Συγχώνευση αρχείων',
    'LBL_UW_COMMIT_ADD_TASK_OVERVIEW' => 'Παρακαλώ χρησιμοποιήστε όποια μέθοδο συγχώνευσης σας εξυπηρετεί καλύτερα.  Μέχρι η διαδικασία να ολοκληρωθεί,η εγκατάστασή σας του SuiteCRM ίσως να είναι αστθής, και η αναβάθμιση ελλειπής.',
    'LBL_UW_COMPLETE' => 'Ολοκληρωμένη',
    'LBL_UW_COMPLIANCE_ALL_OK' => 'Ο έλεγχος των προαπαιτούμενων ρυθμίσεων ήταν επιτυχής',
    'LBL_UW_COMPLIANCE_CALLTIME' => 'PHP Setting: Call Time Pass By Reference',
    'LBL_UW_COMPLIANCE_CURL' => 'Στοιχείο cURL',
    'LBL_UW_COMPLIANCE_IMAP' => 'Στοιχείο IMAP',
    'LBL_UW_COMPLIANCE_MBSTRING' => 'Στοιχείο MBStrings',
    'LBL_UW_COMPLIANCE_MBSTRING_FUNC_OVERLOAD' => 'MBStrings mbstring.func_overload Parameter',
    'LBL_UW_COMPLIANCE_MEMORY' => 'PHP Setting: Memory Limit',
    'LBL_UW_COMPLIANCE_STREAM' => 'PHP Setting: Stream',
    'LBL_UW_COMPLIANCE_DB' => 'Minimum Database Version',
    'LBL_UW_COMPLIANCE_PHP_INI' => 'Τοποθεσία του php.ini',
    'LBL_UW_COMPLIANCE_PHP_VERSION' => 'Ελάχιστη έκδοση PHP',
    'LBL_UW_COMPLIANCE_SAFEMODE' => 'PHP Setting: Safe Mode',
    'LBL_UW_COMPLIANCE_TITLE2' => 'Ρυθμίσεις που βρέθηκαν',
    'LBL_UW_COMPLIANCE_XML' => 'Ανάλυση XML',
    'LBL_UW_COMPLIANCE_ZIPARCHIVE' => 'Zip Support',
    'LBL_UW_COMPLIANCE_PCRE_VERSION' => 'PCRE Version',
    'LBL_UW_COPIED_FILES_TITLE' => 'Η αντιγραφή των αρχείων ήταν επιτυχής',

    'LBL_UW_DB_CHOICE1' => 'Ο οδηγός αναβάθμισης εκτελέι την SQL',
    'LBL_UW_DB_CHOICE2' => 'Χειροκίνητη εκτέλεση ερωτημάτων SQL',
    'LBL_UW_DB_ISSUES_PERMS' => 'Προνόμια βάσης',
    'LBL_UW_DB_METHOD' => 'Μέθοδος αναβάθμισης βάσης',
    'LBL_UW_DB_NO_ADD_COLUMN' => 'ALTER TABLE [table] ADD COLUMN [column]',
    'LBL_UW_DB_NO_CHANGE_COLUMN' => 'ALTER TABLE [table] CHANGE COLUMN [column]',
    'LBL_UW_DB_NO_CREATE' => 'CREATE TABLE [table]',
    'LBL_UW_DB_NO_DELETE' => 'DELETE FROM [table]',
    'LBL_UW_DB_NO_DROP_COLUMN' => 'ALTER TABLE [table] DROP COLUMN [column]',
    'LBL_UW_DB_NO_DROP_TABLE' => 'DROP TABLE [table]',
    'LBL_UW_DB_NO_ERRORS' => 'Διαθέσιμα όλα τα προνόμια',
    'LBL_UW_DB_NO_INSERT' => 'INSERT INTO [table]',
    'LBL_UW_DB_NO_SELECT' => 'SELECT [x] FROM [table]',
    'LBL_UW_DB_NO_UPDATE' => 'UPDATE [table]',
    'LBL_UW_DB_PERMS' => 'Απαραίτητα προνόμια',

    'LBL_UW_DESC_MODULES_INSTALLED' => 'Οι ακόλουθες αναβαθμίσεις έχουν εγκατασταθεί:',
    'LBL_UW_END_LOGOUT_PRE' => 'Η αναβάθμιση ολοκληρώθηκε',
    'LBL_UW_END_LOGOUT_PRE2' => 'Click Done to exit the Upgrade Wizard.',
    'LBL_UW_END_LOGOUT' => 'If you plan to apply another upgrade package using the Upgrade Wizard, log out and log back in prior to doing so.',

    'LBL_UW_FILE_DELETED' => ' έχει καταργηθεί.<br>',
    'LBL_UW_FILE_GROUP' => 'Γκρουπ',
    'LBL_UW_FILE_ISSUES_PERMS' => 'Δικαιώματα αρχείου',
    'LBL_UW_FILE_NO_ERRORS' => '<b>Όλα ατα αρχεία έχουν δικαιώματα τροποποίησης</b>',
    'LBL_UW_FILE_OWNER' => 'Ιδιοκτήτης',
    'LBL_UW_FILE_PERMS' => 'Δικαιώματα',
    'LBL_UW_FILE_UPLOADED' => ' έχει ανέβει',
    'LBL_UW_FILE' => 'Όνομα αρχείου',
    'LBL_UW_FILES_QUEUED' => 'Οι ακόλουθες αναβαθμίσεις είναι έτοιμες προς εγκατάσταση:',
    'LBL_UW_FILES_REMOVED' => 'The following files will be removed from the system:<br>' . PHP_EOL,
    'LBL_UW_NEXT_TO_UPLOAD' => '<b>Click Next to upload upgrade packages.</b>',
    'LBL_UW_FROZEN' => 'Πρέπει να ολοκληρώσετε όλα τα προηγούμενα βήματα πριν συνεχίσετε.',
    'LBL_UW_HIDE_DETAILS' => 'Απόκρυψη Λεπτομερειών',
    'LBL_UW_IN_PROGRESS' => 'Σε Εξέλιξη',
    'LBL_UW_INCLUDING' => 'Συμπεριλαμβανομένου',
    'LBL_UW_INCOMPLETE' => 'Ημιτελής',
    'LBL_UW_MANUAL_MERGE' => 'Συγχώνευση αρχείου',
    'LBL_UW_MODULE_READY' => 'Module is ready to be installed. Click "Commit" to proceed with installation.',
    'LBL_UW_NO_INSTALLED_UPGRADES' => 'δεν εντοπίστηκαν αναβαθμίσεις.',
    'LBL_UW_NONE' => 'Καμία',
    'LBL_UW_OVERWRITE_DESC' => 'Όλα τα τροποποιημένα αρχεία θα αντικατασταθούν, συμπεριλαμβανομένων και των τροποποιήσεων στον κώδικα και των προτύπων. Είστε βέβαιος ότι θέλετε να προχωρήσετε',

    'LBL_UW_PREFLIGHT_ADD_TASK' => 'Θέλετε να δημιουργηθεί μια υποχρέωση για την συγχώνευση των αρχείων;',
    'LBL_UW_PREFLIGHT_EMAIL_REMINDER' => 'Θέλετε να σας αποσταλεί email με υπενθύμιση για την συγχώνευση των αρχείων;',
    'LBL_UW_PREFLIGHT_FILES_DESC' => 'Τα ακόλουθα αρχεία έχουν τροποποιηθεί. Αποεπιλέξτε τα αντικείμενα που απαιτούν χειροκίνητη συγχώνευση. <i>Οποιεσδήποτε τροποποιημένες ροβολές αποεπιλέγονται αυτόματα - επιλέξτε όποιες θέλετε να αντικατασταθούν.',
    'LBL_UW_PREFLIGHT_NO_DIFFS' => 'Δεν απαιτείται χειροκίνητη συγχώνευση αρχείων.',
    'LBL_UW_PREFLIGHT_NOT_NEEDED' => 'Δεν απαιτείται.',
    'LBL_UW_PREFLIGHT_PRESERVE_FILES' => 'Αρχεία που διατηρούντι αυτόματα:',
    'LBL_UW_PREFLIGHT_TESTS_PASSED' => 'Όλοι οι προκαταρκτικοί έλεγχοι ήταν επιτυχείς. Πατήστε "Επόμενο" για να συνεχίσετε.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED2' => 'Click Next to copy the upgraded files to the system.',
    'LBL_UW_PREFLIGHT_TESTS_PASSED3' => '<b>Note: </b> The rest of the upgrade process is mandatory, and clicking Next will require you to complete the process. If you do not wish to proceed, click the Cancel button.',
    'LBL_UW_PREFLIGHT_TOGGLE_ALL' => 'Αντιστροφή επιλογής',

    'LBL_UW_REBUILD_TITLE' => 'Αποτελέσματα επαναδημιουργίας',
    'LBL_UW_SCHEMA_CHANGE' => 'Αλλαγές στη μορφή της βάσης',

    'LBL_UW_SHOW_COMPLIANCE' => 'Εμφάνιση των ρυθμίσεων που εντοπίστηκαν',
    'LBL_UW_SHOW_DB_PERMS' => 'Εμφάνιση ελλειπών δικαιωμάτων βάσης',
    'LBL_UW_SHOW_DETAILS' => 'Εμφάνιση Λεπτομερειών',
    'LBL_UW_SHOW_DIFFS' => 'Εμφάνιση αρχείων που απαιτούν χειροκίνητη συγχώνευση',
    'LBL_UW_SHOW_NW_FILES' => 'Εμφάνιση αρχείων με λανθασμένα δικαιώματα',
    'LBL_UW_SHOW_SCHEMA' => 'Εμφάνιση αρχείου ενεργειών με τις αλλαγές στην μορφή της βάσης',
    'LBL_UW_SHOW_SQL_ERRORS' => 'Εμφάνιση λανθασμενων ερωτημάτων',
    'LBL_UW_SHOW' => 'Εμφάνιση',

    'LBL_UW_SKIPPED_FILES_TITLE' => 'Αρχεία που αγνοήθηκαν',
    'LBL_UW_SQL_RUN' => 'Επιλέξτε όταν έχει ολοκληρωθεί η εκτέλεση των ερωτημάτων της SQL',
    'LBL_UW_START_DESC' => 'Καλωσήρθατε στον οδηγό αναβάθμισης του SuiteCRM. Ο δηγός έχει σχεδιαστεί για να βοηθάει τους διαχειριστές στην αναβάθμιση των εγκαταστάσεων SuiteCRM.  Παρακαλώ ακολουθήστε τις οδηγίες με προσοχή.',
    'LBL_UW_START_DESC2' => 'Note: We highly recommend that you create a copy of the SuiteCRM instance you use in production, and test the upgrade package before deploying the new version. If you have changed the "composer.json" file, then please, after the upgrade process has completed, run this command:<br/><br/><pre>composer install --no-dev</pre>', // Keep the <pre>composer install --no-dev</pre> words at the end of the sentence and do not translate it
    'LBL_UW_START_DESC3' => 'Click Next to perform a check on your system to make sure that the system is ready for the upgrade. The check includes file permissions, database privileges and server settings.',
    'LBL_UW_START_UPGRADED_UW_DESC' => 'Ο οδηγός αναβάθμισης θα συνεχίσει τώρα την διαδικασία αναβάθμισης. Παρακαλώ συνεχίστε.',
    'LBL_UW_START_UPGRADED_UW_TITLE' => 'Καλωσήρθατε στον οδηγό αναβάθμισης',

    'LBL_UW_TITLE_CANCEL' => 'Ακύρωση',
    'LBL_UW_TITLE_COMMIT' => 'Αναβάθμιση',
    'LBL_UW_TITLE_END' => 'Ενημέρωση',
    'LBL_UW_TITLE_PREFLIGHT' => 'Προκαταρκτικός έλεγχος',
    'LBL_UW_TITLE_START' => 'Καλώς Ήλθατε',
    'LBL_UW_TITLE_SYSTEM_CHECK' => 'Έλεγχοι συστήματος',
    'LBL_UW_TITLE_UPLOAD' => 'Ανέβασμα αναβάθμισης',
    'LBL_UW_TITLE' => 'Οδηγός Αναβάθμισης',
    'LBL_UW_UNINSTALL' => 'Απεγκατάσταση',
    //500 upgrade labels
    'LBL_UW_ACCEPT_THE_LICENSE' => 'Αποδοχή Άδειας',
    'LBL_UW_CONVERT_THE_LICENSE' => 'Μετατροπή Άδειας',

    'LBL_START_UPGRADE_IN_PROGRESS' => 'Εκκίνηση σε εξέλιξη',
    'LBL_SYSTEM_CHECKS_IN_PROGRESS' => 'Έλεγχος Συστήματος σε Εξέλιξη',
    'LBL_LICENSE_CHECK_IN_PROGRESS' => 'Έλεγχος Άδειας σε εξέλιξη',
    'LBL_PREFLIGHT_CHECK_IN_PROGRESS' => 'Preflight Check in Progress',
    'LBL_PREFLIGHT_FILE_COPYING_PROGRESS' => 'Αντιγραφή Αρχείων σε Εξέλιξη',
    'LBL_COMMIT_UPGRADE_IN_PROGRESS' => 'Commit Upgrade in Progress',
    'LBL_UW_COMMIT_DESC' => 'Click Next to run additional upgrade scripts.',
    'LBL_UPGRADE_SCRIPTS_IN_PROGRESS' => 'Upgrade Scripts in Progress',
    'LBL_UPGRADE_SUMMARY_IN_PROGRESS' => 'Upgrade Summary in Progress',
    'LBL_UPGRADE_IN_PROGRESS' => 'σε εξέλιξη',
    'LBL_UPGRADE_TIME_ELAPSED' => 'Time elapsed',
    'LBL_UPGRADE_CANCEL_IN_PROGRESS' => 'Upgrade Cancel and Cleanup in Progress',
    'LBL_UPGRADE_TAKES_TIME_HAVE_PATIENCE' => 'Η αναβάθμιση μπορεί να αργήσει λίγο',
    'LBL_UPLOADE_UPGRADE_IN_PROGRESS' => 'Upload Checks in Progress',
    'LBL_UPLOADING_UPGRADE_PACKAGE' => 'Uploading Upgrade Package ',
    'LBL_UW_DROP_SCHEMA_UPGRADE_WIZARD' => 'Upgrade Wizard Drops old 451 schema',
    'LBL_UW_DROP_SCHEMA_MANUAL' => 'Manual Drop Schema Post Upgrade',
    'LBL_UW_DROP_SCHEMA_METHOD' => 'Old Schema Drop Method',
    'LBL_UW_SHOW_OLD_SCHEMA_TO_DROP' => 'Show Old Schema that could be dropped',
    'LBL_UW_SKIPPED_QUERIES_ALREADY_EXIST' => 'Skipped Queries',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php έκδοση 5 ή η παραπάνω είναι υποχρεωτική.',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Η έκδοση PHP δεν υποστηρίζεται από το SuiteCRM.  Θα πέπει να εγκαταστήσετε μια έκδοσης που να είναι συμβατή με την εφαρμογή SuiteCRM application.  Παρακαλούμε συμβουλευτείτε το πίνακα Συμβατότητας που υπάρχει στις Σημείωσεις Εγκατάστασης για για να βρείτε τις Εκδόσεις PHP που υποστηρίζονται. Η Έκδοση σας είναι η',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Προς τα πίσω Συμβατότητα η λειτουργία είναι ενεργοποιημένη. Καθορίστε zend.ze1_compatibility_mode σε ανενεργή για να προχωρήσει περαιτέρω',
    //including some strings from moduleinstall that are used in Upgrade
    'LBL_ML_ACTION' => 'Δράση',
    'LBL_ML_CANCEL' => 'Ακύρωση',
    'LBL_ML_COMMIT' => 'Δέσμευση',
    'LBL_ML_DESCRIPTION' => 'Περιγραφή',
    'LBL_ML_INSTALLED' => 'Ημερομηνία Εγκατάστασης',
    'LBL_ML_NAME' => 'Όνομα',
    'LBL_ML_PUBLISHED' => 'Ημερομηνία Ενεργοποίησης',
    'LBL_ML_TYPE' => 'Τύπος',
    'LBL_ML_UNINSTALLABLE' => 'Απεγκατάσταση',
    'LBL_ML_VERSION' => 'Έκδοση',
    'LBL_ML_INSTALL' => 'Εγκατάσταση',
    //adding the string used in tracker. copying from homepage
    'LBL_CURRENT_PHP_VERSION' => 'Η τρέχουσα έκδοση php είναι : ',
    'LBL_RECOMMENDED_PHP_VERSION_1' => 'The recommended php version is ',
    'LBL_RECOMMENDED_PHP_VERSION_2' => ' or above.',  // End of a sentence as in Recommended PHP version is version X.Y or above

    'LBL_MODULE_NAME' => 'ΟδηγόςΑναβάθμισης',
    'LBL_UPLOAD_SUCCESS' => 'Το πακέτο αναβάθμισης μεταφορτώθηκε επιτυχώς. Πατήστε Επόμενο για έναν τελευταίο έλεγχο.',
    'LBL_UW_TITLE_LAYOUTS' => 'Επιβεβαίωση Σχεδίων',
    'LBL_LAYOUT_MODULE_TITLE' => 'Διατάξεις',
    'LBL_LAYOUT_MERGE_DESC' => 'There are new fields available which have been added as part of this upgrade and can be automatically appended to your existing module layouts. To learn more about the new fields, please refer to the Release Notes for the version to which you are upgrading.<br><br>If you do not wish to append the new fields, please uncheck the module, and your custom layouts will remain unchanged. The fields will be available in Studio after the upgrade. <br><br>',
    'LBL_LAYOUT_MERGE_TITLE' => 'Πιέστε Επόμενο για την επιβεβαίωση των αλλαγών και την ολοκλήρωση της αναβάθμισης.',
    'LBL_LAYOUT_MERGE_TITLE2' => 'Click Next to complete the upgrade.',
    'LBL_UW_CONFIRM_LAYOUTS' => 'Επιβεβαίωση Σχεδίων',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS' => 'Confirm Layout Results',
    'LBL_UW_CONFIRM_LAYOUT_RESULTS_DESC' => 'Οι παρακάτω σχεδιάσεις συγχωνεύθηκαν επιτυχώς.',
    'LBL_SELECT_FILE' => 'Επιλογή Αρχείου :',
    'ERROR_VERSION_INCOMPATIBLE' => 'Το αρχείο δεν είναι συμβατό με αυτήν την έκδοση του SuiteCRM:',
    'ERROR_PHP_VERSION_INCOMPATIBLE' => 'The uploaded file is not compatible with this version of PHP: ',
    'ERROR_SUITECRM_VERSION_INCOMPATIBLE' => 'Το αρχείο δεν είναι συμβατό με αυτήν την έκδοση του SuiteCRM:',
    'LBL_LANGPACKS' => 'Πακέτα Γλωσσών ' /*for 508 compliance fix*/,
    'LBL_MODULELOADER' => 'Ενότητα Φορτωτή' /*for 508 compliance fix*/,
    'LBL_PATCHUPGRADES' => 'Τροποποίηση Αναβάθμισης' /*for 508 compliance fix*/,
    'LBL_THEMES' => 'Θέματα' /*for 508 compliance fix*/,
    'LBL_WORKFLOW' => 'Ροή Εργασίας' /*for 508 compliance fix*/,
    'LBL_UPGRADE' => 'Αναβάθμιση' /*for 508 compliance fix*/,
    'LBL_PROCESSING' => 'Επεξεργασία' /*for 508 compliance fix*/,
    'ERROR_NO_VERSION_SET' => 'Compatible version is not set in manifest file',
    'LBL_UPGRD_CSTM_CHK' => 'Upgrade process will update some files but these files also exist in custom/ folder. Please review the changes before continuing:',
    'ERR_UW_PHP_FILE_ERRORS' => array(
        1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
        2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
        3 => 'Το αρχείο μεταφορτώθηκε μερικώς.',
        4 => 'Κανένα αρχείο δεν μεταφορτώθηκε.',
        5 => 'Άγνωστο Σφάλμα',
        6 => 'Απώλεια προσωρινού φακέλου',
        7 => 'Αποτυχία εγγραφής αρχείου στον δίσκο.',
        8 => 'File upload stopped by extension.',
    ),
    'LBL_PASSWORD_EXPIRATON_CHANGED' => 'Warning: password expiration is set to none!',
    'LBL_PASSWORD_EXPIRATON_REDIRECT' => 'Please update your settings here',
);
