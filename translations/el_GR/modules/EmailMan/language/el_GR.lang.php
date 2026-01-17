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
    'LBL_SEND_DATE_TIME' => 'Ημερομηνιία Αποστολής',
    'LBL_IN_QUEUE' => 'Σε Εξέλιξη',
    'LBL_IN_QUEUE_DATE' => 'Σε αναμονή Ημερομηνία',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Χρησιμοποιείστε μόνο ακέραιες αξίες για να προσδιορίσετε τον αριθμό των emails που στέλνονται ανά παρτίδα',

    'LBL_ATTACHMENT_AUDIT' => 'στάλθηκε. Δεν αναπαρήχθη τοπικά για να συντηρήσει τη χρήση δίσκων.',
    'LBL_CONFIGURE_SETTINGS' => 'Διαμόρφωση Ρυθμίσεων Email',
    'LBL_CUSTOM_LOCATION' => 'Ορίζεται από τον χειριστή',
    'LBL_DEFAULT_LOCATION' => 'Προεπιλογή',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Διαγραφή σχετικών σημειώσεων και συνημμένων με διαγραμμένα Emails',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email warning notifications',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt In Settings',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatically Send Opt In Email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Confirm Opt In Email Template',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Διαμόρφωση Εξερχόμενου Ταχυδρομείου',
    'LBL_EMAILS_PER_RUN' => 'Οι Αριθμοί των emails στέλνονται ανά στίβα:',
    'LBL_ID' => 'Ταυτότητα',
    'LBL_LIST_CAMPAIGN' => 'Εκστρατεία',
    'LBL_LIST_FORM_TITLE' => 'Σειρά Προτεραιότητας',
    'LBL_LIST_FROM_NAME' => 'Από Όνομα',
    'LBL_LIST_IN_QUEUE' => 'Σε Εξέλιξη',
    'LBL_LIST_MESSAGE_NAME' => 'Μήνυμα Μάρκετινγκ',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Παραλήπτης email',
    'LBL_LIST_RECIPIENT_NAME' => 'Όνομα παραλήπτη',
    'LBL_LIST_SEND_ATTEMPTS' => 'Προσπάθειες Αποστολής',
    'LBL_LIST_SEND_DATE_TIME' => 'Ημερομηνία Αποστολής',
    'LBL_LIST_USER_NAME' => 'Όνομα Χειριστή',
    'LBL_LOCATION_ONLY' => 'Τοποθεσία',
    'LBL_LOCATION_TRACK' => 'Τοποθεσία των αρχείων παρακολούθησης εκστρατείας (όπως campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Κρατήστε τα αντίγραφα των μηνυμάτων εκστρατείας:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Θα επιθυμούσατε να αποθηκεύσετε τα πλήρη αντίγραφα για ΚΑΘΕ μήνυμα email που στέλνετε κατά τη διάρκεια όλων των εκστρατειών; Σας συνιστούμε καμία προεπιλογή. Επιλέγοντας "καμία" θα αποθηκεύσει μόνο το πρότυπο που αποστέλλεται και τις μεταβλητές που απαιτούνται για να αναδημιουργήσει το μεμονωμένο μήνυμα.',
    'LBL_MAIL_SENDTYPE' => 'Μεσάζων Μεταφοράς Αλληλογραφίας :',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Χρήση SMTP Πιστοποίησης:',
    'LBL_MAIL_SMTPPASS' => 'Κωδικός Πρόσβασης:',
    'LBL_MAIL_SMTPPORT' => 'Θύρα SMTP:',
    'LBL_MAIL_SMTPSERVER' => 'Διακομιστής SMTP Ταχυδρομείου:',
    'LBL_MAIL_SMTPUSER' => 'Όνομα Χειριστή:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Επιλέξτε τον πάροχο του Email σας',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Κωδικός Πρόσβασης Ταχυδρομείου',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Ταυτότητα Ταχυδρομείου',
    'LBL_GMAIL_SMTPPASS' => 'Κωδικός Πρόσβασης Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail  Διεύθυνση Email:',
    'LBL_EXCHANGE_SMTPPASS' => 'Κωδικός Πρόσβασης Exchange',
    'LBL_EXCHANGE_SMTPUSER' => 'Όνομα Χειριστή Exchange',
    'LBL_EXCHANGE_SMTPPORT' => 'Θύρα Διακομιστή Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Διακομιστής Exchange',
    'LBL_EMAIL_LINK_TYPE' => 'Email Client',
    'LBL_MARKETING_ID' => 'Μάρκετινγκ Id',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Ρυθμίσεις Email',
    'LBL_MODULE_TITLE' => 'Διαχείριση Μαζικής Αποστολής',
    'LBL_NOTIFICATION_ON_DESC' => 'Όταν είναι ενεργοποιημένο, τα μηνύματα αποστέλλονται στους χειριστές, όταν τα αρχεία τους έχουν ανατεθεί.',
    'LBL_NOTIFY_FROMADDRESS' => '"Από" Διεύθυνση:',
    'LBL_NOTIFY_FROMNAME' => '"Από" Όνομα:',
    'LBL_NOTIFY_ON' => 'Ανατεθειμένες Ειδοποιήσεις',
    'LBL_NOTIFY_TITLE' => 'Επιλογές Email',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Επιλογές Εξερχομένων Email',
    'LBL_RELATED_ID' => 'Συσχετισμός',
    'LBL_RELATED_TYPE' => 'Τύπος συσχετισμού',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Σειράς',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Αξία από Config.php ρύθμιση site_url',
    'TXT_REMOVE_ME_ALT' => 'Για να αφαιρέσετε τον ευατό σας από αυτή την λίτσα email πηγαίνετε στο',
    'TXT_REMOVE_ME_CLICK' => 'πατήστε εδώ',
    'TXT_REMOVE_ME' => 'Για να αφαιρέσετε τον ευατό σας από αυτή την λίτσα email',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Send notification from the email address of the assigning user',

    'LBL_SECURITY_TITLE' => 'Ρυθμίσεις Ασφαλείας Email',
    'LBL_SECURITY_DESC' => 'Ελέγξτε τα παρακάτω που ΔΕΝ πρέπει να επιτρέπονται μέσω εισερχομένων email ή να εμφανίζονται στην ενότητα email.',
    'LBL_SECURITY_APPLET' => 'Ετικέτα Applet',
    'LBL_SECURITY_BASE' => 'Ετικέτα Βάσης',
    'LBL_SECURITY_EMBED' => 'Ενσωματωμένη ετικέτα',
    'LBL_SECURITY_FORM' => 'Ετικέτα Φόρμας',
    'LBL_SECURITY_FRAME' => 'Ετικέτα Πλαισίου',
    'LBL_SECURITY_FRAMESET' => 'Ετικέτα Frameset',
    'LBL_SECURITY_IFRAME' => 'Ετικέτα iFrame',
    'LBL_SECURITY_IMPORT' => 'εισαγωγή ετικέτας',
    'LBL_SECURITY_LAYER' => 'Ετικέτα Στρώματος',
    'LBL_SECURITY_LINK' => 'Ετικέτα Συνδέσεων',
    'LBL_SECURITY_OBJECT' => 'Ετικέτα Αντικειμένου',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Επιλέξτε στο Outlook προεπιλογή ελάχιστων ρυθμίσεων ασφαλείας (σφάλλει στην πλευρά της σωστής εμφάνισης).',
    'LBL_SECURITY_STYLE' => 'Ετικέτα Ύφους',
    'LBL_SECURITY_TOGGLE_ALL' => 'Εναλλαγή Όλων των Επιλογών',
    'LBL_SECURITY_XMP' => 'Ετικέτα Xmp',
    'LBL_YES' => 'Ναί',
    'LBL_NO' => 'Όχι',
    'LBL_PREPEND_TEST' => '[Δοκιμή]:',
    'LBL_SEND_ATTEMPTS' => 'Προσπάθειες Αποστολής',
    'LBL_OUTGOING_SECTION_HELP' => 'Διαμόρφωση του προεπιλεγμένου διακομιστή εξερχόμενου ταχυδρομείου για την αποστολή email ειδοποιήσεων, συμπεριλαμβανομένων των ειδοποιήσεων ροής εργασίας.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Users may send as this account's identity:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Όταν αυτή η επιλογή επιλέγεται, όλοι οι χειριστές θα είναι σε θέση να στείλουν τα ηλεκτρονικά ταχυδρομεία χρησιμοποιώντας τον ίδιο εξερχόμενο πάροχο ταχυδρομείου που χρησιμοποιείται για να στείλει τις ανακοινώσεις και τις ειδοποιήσεις των συστημάτων. Εάν η επιλογή δεν επιλέγεται, οι χειριστές μπορούν ακόμα να χρησιμοποιήσουν τον εξερχόμενο κεντρικό υπολογιστή ταχυδρομείου,  από να παράσχουν τις πληροφορίες του λογαριασμού τους.',
    'LBL_FROM_ADDRESS_HELP' => 'Όταν ενεργοποιηθεί, το ανατειθειμένο όνομα χειριστή / και η διεύθυνση email θα πρέπει να περιλαμβάνονται στη Φόρμα πεδίου του email. Αυτή η δυνατότητα μπορεί να μην λειτουργήσει με διακομιστές SMTP που δεν επιτρέπουν την αποστολή από διαφορετικό λογαριασμό email από τον λογαριασμό του διακομιστή.',
    'LBL_HELP' => 'Βοήθεια' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'View Outbound Email Accounts',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Users may send as themselves:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'When enabled, <b>all</b> users can send email using the outgoing mail server, using their own primary email address as the &quot;From:&quot; address.<br>This feature might not work with SMTP servers that do not allow sending from a different email account than the server account.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
