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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Προηγμένη',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 κωδικός νομίσματος',
    'DEFAULT_CURRENCY_NAME' => 'Όνομα νομίσματος',
    'DEFAULT_CURRENCY_SYMBOL' => 'Σύμβολο νομίσματος',
    'DEFAULT_DATE_FORMAT' => 'Προεπιλογή μορφής ημερομηνίας',
    'DEFAULT_DECIMAL_SEP' => 'Δεκαδικό σύμβολο',
    'DEFAULT_LANGUAGE' => 'Προεπιλογή Γλώσσας',
    'DEFAULT_SYSTEM_SETTINGS' => 'Διεπαφή Χειριστή',
    'DEFAULT_THEME' => 'Προεπιλογή θέματος',
    'DEFAULT_TIME_FORMAT' => 'Προεπιλογή μορφής ώρας',

    'DISPLAY_RESPONSE_TIME' => 'Εμφάνιση χρόνου απόκρισης του διακομιστή',

    'IMAGES' => 'Λογότυπα',
    'LBL_ALLOW_USER_TABS' => 'Επιτρέπει στους χειριστές να κρύψει τις καρτέλες',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Ρυθμίσεις Συστήματος',
    'LBL_LOGVIEW' => 'Προβολή Σύνδεσης',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Πιστοποίηση Χρήσης SMTP;',
    'LBL_MAIL_SMTPPASS' => 'Κωδικός Πρόσβασης SMTP:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'Όνομα Χειριστή SMTP:',
    'LBL_MAIL_SMTP_SETTINGS' => 'Προδιαγραφές SMTP Server',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Επιλέξτε τον Πάροχο του Email σας:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Κωδικός Πρόσβασης Ταχυδρομείου:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Κωδικός Πρόσβασης Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail-Διεύθυνση Email:',
    'LBL_EXCHANGE_SMTPPASS' => 'Κωδικός Πρόσβασης Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Όνομα Χειριστή Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Θύρα Exchange Server:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Συγχώνευση Ταχυδρομείου',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Αυτόματη Ανανέωση Πίνακα Στοιχείων',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Αυτή είναι η ελάχιστη τιμή που μπορεί κανείς να επιλέξει να έχει στον πίνακα στοιχείων αυτόματης ανανέωσης. Ρυθμίζοντας το πλήκτρο "Ποτέ", απενεργοποιείται  εντελώς η αυτόματη ανανέωση του πίνακα στοιχείων.',
    'LBL_MODULE_FAVICON' => 'Εμφάνιση εικονιδίου ενότητας ως favicon',
    'LBL_MODULE_FAVICON_HELP' => 'Αν είστε σε μια ενότητα με ένα εικονίδιο, χρησιμοποιήστε το εικονίδιο της ενότητας ως favicon, αντί του θέματος favicon, στην καρτέλα μηχανής αναζήτησης.',
    'LBL_MODULE_NAME' => 'Ρυθμίσεις Συστήματος',
    'LBL_MODULE_ID' => 'Διαμόρφωση',
    'LBL_MODULE_TITLE' => 'Διεπαφή Χειριστή',
    'LBL_NOTIFY_FROMADDRESS' => '"Από¨ Διεύθυνση:',
    'LBL_NOTIFY_SUBJECT' => 'Θέμα Email:',

    'LBL_PROXY_AUTH' => 'Πιστοποίηση;',
    'LBL_PROXY_HOST' => 'Διεύθυνση Μεσολάβησης',
    'LBL_PROXY_ON_DESC' => 'Διαμόρφωση διεύθυνσης του διακομιστή μεσολάβησης και ρυθμίσεις ελέγχου πιστοποίησης',
    'LBL_PROXY_ON' => 'Χρήση server μεσολάβησης;',
    'LBL_PROXY_PASSWORD' => 'Κωδικός Πρόσβασης',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Ρυθμίσεις Μεσολάβησης',
    'LBL_PROXY_USERNAME' => 'Όνομα Χειριστή',
    'LBL_RESTORE_BUTTON_LABEL' => 'Restore',
    'LBL_SYSTEM_SETTINGS' => 'Ρυθμίσεις Συστήματος',
    'LBL_USE_REAL_NAMES' => 'Εμφάνιση Ονοματεπωνύμων',
    'LBL_USE_REAL_NAMES_DESC' => 'Εμφανίζει τα ονοματεπώνυμα των χειριστών, αντί μόνο των Ονομάτων τους, στα πεδία ανάθεσης.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Απενεργοποίηση δυνατότητας μετατροπής δυνητικού πελάτη',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Αν ο δυνητικός πελάτης έχει ήδη μετατραπεί, η ενεργοποίηση αυτής της επιλογής θα αφαιρέσει την δυνατότητα μετατροπής δυνητικού πελάτη.',
    'LBL_ENABLE_ACTION_MENU' => 'Εμφάνιση μενού ενεργειών',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Επιλέξτε να σας εμφανίσει Προβολή Λεπτομερειών και τις ενέργειες υποπινάκων, μέσα στο αναδυόμενο μενού. Εάν δεν επιλεχθεί, οι ενέργειες θα εμφανιστούν ως χωριστά κουμπιά.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Enable inline editing on list view',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Select to enable Inline Editing for fields on the list view. If unselected Inline Editing will be disabled on list view.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Enable inline editing on detail view',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Select to enable Inline Editing for fields on the detail view. If unselected Inline Editing will be disabled on detail view.',
    'LBL_HIDE_SUBPANELS' => 'Collapsed subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Λίστα Προβολής στοιχείων ανά σελίδα',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Υποπίνακας στοιχείων ανά σελίδα',
    'LOG_MEMORY_USAGE' => 'Καταγραφή χρήσης μνήμης',
    'LOG_SLOW_QUERIES' => 'Καταγραφή αργών ερωτημάτων',
    'CURRENT_LOGO' => 'Τρέχον Λογότυπο:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',
    'NEW_LOGO' => 'Επιλογή Λογότυπου:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Χρονικό όριο αργών ερωτημάτων (msec)',
    'STACK_TRACE_ERRORS' => 'Εμφάνιση στοίβας λαθών',
    'UPLOAD_MAX_SIZE' => 'Μέγιστο μέγεθος αρχείου φόρτωσης',
    'VERIFY_CLIENT_IP' => 'Επικύρωση διεύθυνσης ταυτότητας χειριστή',
    'LOCK_HOMEPAGE' => 'Κλείδωμα διατάξεων της Αρχικής Σελίδας του χειριστή',
    'LOCK_SUBPANELS' => 'Αποτροπή χειριστή στην προσαρμογή διάταξης του υποπίνακα',
    'MAX_DASHLETS' => 'Μέγιστος αριθμός του Πίνακα Στοιχείων στην Αρχική Σελίδα SuiteCRM',
    'SYSTEM_NAME' => 'Όνομα Συστήματος:',
    'SYSTEM_NAME_WIZARD' => 'Όνομα Εκστρατείας:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'Υποστήριξη Πιστοποίησης LDAP',
    'LBL_LDAP_ENABLE' => 'Ενεργοποίηση LDAP',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'Όνομα Χειριστή:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Χρησιμοποιείται για την αναζήτηση του χρήστη LDAP. Αυτό μπορεί να χρειαστεί να είναι πλήρως προσαρμοσμένο.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Κωδικός Πρόσβασης:',
    'LBL_LDAP_AUTHENTICATION' => 'Πιστοποίηση',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Συνδεθείτε με το διακομιστή LDAP χρησιμοποιώντας συγκεκριμένα διαπιστευτήρια χρηστών. Θα δεσμεύσει ανώνυμα εάν δεν παρέχεται.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Αυτόματη Δημιουργία Χειριστών:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Ιδιότητα Χειριστή:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Οποιοδήποτε πρόσθετο φίλτρο params για να ισχύει κατά την επικύρωση των χειριστών π.χ. is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Παράδειγμα: ldap.example.com or ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Παράδειγμα:389 ή 636 για SSL',
    'LBL_LDAP_GROUP_NAME' => 'Όνομα Γκρουπ:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Example <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Παράδειγμα: ou=people,dc=example,dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Λειτουργία Προγραμματιστή',

    'SHOW_DOWNLOADS_TAB' => 'Εμφάνιση Λήψεων Καρτέλας',
    'SHOW_DOWNLOADS_TAB_HELP' => 'When selected, the Download tab will appear in the User settings and provide users with access to SuiteCRM plug-ins and other available files',
    'LBL_LDAP_ENC_KEY_DESC' => 'Για SOAP πιστοποίηση όταν χρησιμοποιείται LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'The php_mcrypt επέκταση πρέπει να ενεργοποιηθεί στο php.ini αρχείο σας.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'The openssl extension must be enabled in your php.ini file.',
    'LBL_ALL' => 'Όλες',
    'LBL_MARK_POINT' => 'Σημείο Σημείωσης',
    'LBL_NEXT_' => 'Επόμενο>>',
    'LBL_REFRESH_FROM_MARK' => 'Ανανέωση Από Σημείωση',
    'LBL_SEARCH' => 'Αναζήτηση:',
    'LBL_REG_EXP' => 'Επέκταση Κανονισμού:',
    'LBL_IGNORE_SELF' => 'Αγνοήστε Αυτό',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Σήμανση Από Πού να Αρχίσει Σύνδεση',
    'LBL_DISPLAYING_LOG' => 'Εμφάνιση Καταγραφής',
    'LBL_YOUR_PROCESS_ID' => 'Η Ταυτότητα Διεργασίας σας',
    'LBL_YOUR_IP_ADDRESS' => 'Η Ταυτότητα Διεύθυνσης σας είναι',
    'LBL_IT_WILL_BE_IGNORED' => 'Θα αγνοηθεί',
    'LBL_LOG_NOT_CHANGED' => 'Η σύνδεση δεν έχει αλλάξει',
    'LBL_ALERT_JPG_IMAGE' => 'Η μορφή του αρχείου της εικόνας πρέπει να είναι JPEG. Ανεβάστε ένα νέο αρχείο με την επέκταση αρχείου .jpg.',
    'LBL_ALERT_TYPE_IMAGE' => 'Η μορφή του αρχείου της εικόνας πρέπει να είναι JPEG ή PNG. Ανεβάστε ένα νέο αρχείο με την επέκταση αρχείου .jpg ή .png.',
    'LBL_ALERT_SIZE_RATIO' => 'Η αναλογία διάστασης της εικόνας θα πρέπει να είναι μεταξύ 1:1 και 10:1. Η εικόνα θα επαναταξινομηθεί.',
    'ERR_ALERT_FILE_UPLOAD' => 'Λάθος κατά την φόρτωση της εικόνας.',
    'LBL_LOGGER' => 'Ρυθμίσεις Συνδεδεμένων',
    'LBL_LOGGER_FILENAME' => 'Όνομα Αρχείου',
    'LBL_LOGGER_FILE_EXTENSION' => 'Επέκταση',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Μέγιστο μέγεθος αρχείου καταγραφής',
    'LBL_STACK_TRACE' => 'Enable stack trace',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Προεπιλογή μορφή ημερομηνίας',
    'LBL_LOGGER_LOG_LEVEL' => 'Επίπεδο Καταγραφής',
    'LBL_LEAD_CONV_OPTION' => 'Επιλογές Μετατροπής Δυνητικού Πελάτη',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Δημιουργεί και σχετίζει όλα τα αντίγραφα των δραστηριοτήτων των Δυνητικών Πελατών, σε νέες εγγραφές που έχουν επιλεγεί από τον χειριστή κατά τη διάρκεια της μετατροπής. Δημιουργούνται Αντίγραφα για κάθε μία από τις επιλεγμένες εγγραφές.<br><br><b>Κίνηση</b> - Κινήσεις  των δραστηριοτήτων των Δυνητικών Πελατών σε νέες εγγραφές που έχουν επιλεγεί από τον χειριστή κατά τη διάρκεια της μετατροπής.<br><br><b>Καμία ενέργεια</b> - Καμία ενέργεια των δραστηριοτήτων των Δυνητικών Πελατών κατά τη διάρκεια της μετατροπής. Παραμένουν οι δραστηριότητες που σχετίζονται μόνο με τον Δυνητικό Πελάτη.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Ενεργοποίηση ή απενεργοποίηση της χρήσης του AJAX UI για συγκεκριμένες ενότητες.',
    'LBL_LOGGER_MAX_LOGS' => 'Μέγιστος αριθμός συνδέσεων (πριν την κύληση)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Επισύναψη μετά από το όνομα αρχείου',
    'LBL_VCAL_PERIOD' => 'vCal Χρονική Περίοδος Ενημερώσεων:',
    'LBL_IMPORT_MAX_RECORDS' => 'Εισαγωγή - Μέγιστος αριθμός Σειρών:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Καθορίστε πόσες γραμμές επιτρέπονται μέσα στα αρχεία εισαγωγών. Εάν ο αριθμός των γραμμών σε ένα αρχείο εισαγωγής υπερβαίνει τον αριθμό αυτόν, ο χειριστής θα πρέπει να ειδοποιηθεί. Εάν δεν υπάρχει εγγεγραμμένος αριθμός, επιτρέπεται απεριόριστος αριθμός γραμμών.',
    'vCAL_HELP' => 'Χρησιμοποιήστε αυτή τη ρύθμιση για τον καθορισμό του αριθμού των μηνών πριν από την τρέχουσα ημερομηνία, οι Ελεύθερες/Πολυάσχολες πληροφορίες για τις κλήσεις και τις συνεδριάσεις δημοσιεύονται. Για να απενεργοποιήσετε την Ελεύθερη/Πολυάσχολη δημοσίευση, εισάγετε "0". Το ελάχιστο είναι 1 μήνας το μέγιστο είναι 12 μήνες.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Τα σενάριά σας',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Δεν έχει ρυθμιστεί σενάριο',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Επιλέξτε ποια σενάρια είναι κατάλληλα για την εγκατάσταση σας.  Αυτές οι επιλογές μπορούν να αλλάξουν μετά την εγκατάσταση.',

    'LBL_WIZARD_TITLE' => 'Οδηγός Admin',
    'LBL_WIZARD_WELCOME_TAB' => 'Καλώς Ήλθατε',
    'LBL_WIZARD_WELCOME_TITLE' => 'Καλώς Ήλθατε στο SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Πατήστε <b>Επόμενο</b> για μαρκάρισμα, εντοπισμό και διαμόρφωση του<br /><br /><br /> SuiteCRM τώρα. Εάν θέλετε να διαμορφώσετε το SuiteCRM αργότερα, πατήστε στην επιλογή <b>Μετάβαση</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Επόμενο >',
    'LBL_WIZARD_BACK_BUTTON' => '< Πίσω',
    'LBL_WIZARD_SKIP_BUTTON' => 'Μετάβαση',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Συνέχεια',
    'LBL_WIZARD_FINISH_TITLE' => 'Οι Βασικές ρυθμίσεις του συστήματος είναι ολοκληρωμένες',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Φορτώνει...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Διαγραφή' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Καλώς Ήλθατε' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Λογότυπο' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Εμφάνιση σχετικών επαφών, emails στο Ιστορικό του υποπίνακα για τις ενότητες',
);
