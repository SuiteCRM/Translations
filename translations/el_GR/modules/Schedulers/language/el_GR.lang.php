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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Διαδικασία Ροής Εργασίας',
    'LBL_OOTB_REPORTS' => 'Εκτέλεση Αναφοράς Συστήματος Προγραμματισμένης Εργασίας',
    'LBL_OOTB_IE' => 'Έλεγχος Εισερχομένων Ταχυδρομικών Θυρίδων',
    'LBL_OOTB_BOUNCE' => 'Εκτέλεση Διαδικασίας Νυχτερινών Μη Παραδομένων Emails Εκστρατείας',
    'LBL_OOTB_CAMPAIGN' => 'Εκτέλεση Νυχτερινών Μαζικών Emails Εκστρατείας',
    'LBL_OOTB_PRUNE' => 'Περιορισμός Βάσης Δεδομένων την 1η του Μήνα',
    'LBL_OOTB_TRACKER' => 'Περιορισμός Πινάκων Σημείου Εντοπισμού',
    'LBL_OOTB_SUITEFEEDS' => 'Prune SuiteCRMFeed Tables',
    'LBL_OOTB_LUCENE_INDEX' => 'Perform Lucene Index',
    'LBL_OOTB_OPTIMISE_INDEX' => 'Optimise AOD Index',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Εκτέλεση Υπενθύμισης Email',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Εκκαθάριση Εργασιών Ουράς Αναμονής',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Απομάκρυνση των εγγράφων από το σύστημα αρχείων',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Google Calendar Sync',
    'LBL_OOTB_ELASTIC_INDEX' => 'Perform Elasticsearch Index',
    'LBL_OOTB_CAL_ACC_SYNC' => 'Calendar Accounts Sync',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Διάστημα:',
    'LBL_LIST_LIST_ORDER' => 'Προγραμματισμένες εργασίες:',
    'LBL_LIST_NAME' => 'Προγραμματισμένη εργασία:',
    'LBL_LIST_RANGE' => 'Εύρος Λίστας:',
    'LBL_LIST_STATUS' => 'Κατάσταση:',
    'LBL_LIST_TITLE' => 'Λίστα Προγραμματισμών:',
// human readable:
    'LBL_SUN' => 'Κυριακή',
    'LBL_MON' => 'Δευτέρα',
    'LBL_TUE' => 'Τρίτη',
    'LBL_WED' => 'Τετάρτη',
    'LBL_THU' => 'Πέμπτη',
    'LBL_FRI' => 'Παρασκευή',
    'LBL_SAT' => 'Σάββατο',
    'LBL_ALL' => 'Κάθε Μέρα',
    'LBL_EVERY' => 'Every',
    'LBL_FROM' => 'Από',
    'LBL_ON_THE' => 'Στις',
    'LBL_RANGE' => 'σε',
    'LBL_AND' => 'και',
    'LBL_MINUTES' => 'λεπτά',
    'LBL_HOUR' => 'ώρες',
    'LBL_HOUR_SING' => 'ώρα',
    'LBL_OFTEN' => 'Όσο το δυνατόν συχνότερα.',
    'LBL_MIN_MARK' => 'σήμα λεπτού',


// crontabs
    'LBL_MINS' => 'λεπ.',
    'LBL_HOURS' => 'ώρ.',
    'LBL_DAY_OF_MONTH' => 'ημερομηνία',
    'LBL_MONTHS' => 'μήν.',
    'LBL_DAY_OF_WEEK' => 'ημέρα',
    'LBL_CRONTAB_EXAMPLES' => 'Το παραπάνω χρησιμοποιεί πρότυπο σημείωσης crontab.',
// Labels
    'LBL_ALWAYS' => 'Πάντα',
    'LBL_CATCH_UP' => 'Εκτέλεση Αν Λείπει',
    'LBL_CATCH_UP_WARNING' => 'Απο-ελέγξετε, αν αυτή η εργασία μπορεί να διαρκέσει περισσότερο από ένα λεπτό για να τρέξει.',
    'LBL_DATE_TIME_END' => 'Ημερομηνία και Ώρα Λήξης',
    'LBL_DATE_TIME_START' => 'Ημερομηνία και Ώρα Έναρξης',
    'LBL_INTERVAL' => 'Διάστημα',
    'LBL_JOB' => 'Εργασία',
    'LBL_JOB_URL' => 'URL Εργασίας',
    'LBL_LAST_RUN' => 'Τελευταία Επιτυχής Εκτέλεση',
    'LBL_MODULE_NAME' => 'Προγραμματισμένες εργασίες SuiteCRM',
    'LBL_MODULE_TITLE' => 'Προγραμματισμένες Εργασίες',
    'LBL_NAME' => 'Όνομα Εργασίας',
    'LBL_NEVER' => 'Ποτέ',
    'LBL_NEW_FORM_TITLE' => 'Νέος Προγραμματισμός',
    'LBL_PERENNIAL' => 'πολυετές',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Προγραμματιστή',
    'LBL_SCHEDULER' => 'Προγραμματισμένη εργασία:',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_TIME_FROM' => 'Ενεργή Από',
    'LBL_TIME_TO' => 'Ενεργή Σε',
    'LBL_WARN_CURL_TITLE' => 'cURL Προειδοποίηση:',
    'LBL_WARN_CURL' => 'Προειδοποίηση:',
    'LBL_WARN_NO_CURL' => 'Αυτό το σύστημα δεν έχει το cURL βιβλιοθηκών ενεργοποιημένο/συνταγμένο στην ενότητα PHP (--with-curl=/path/to/curl_library). Παρακαλώ επικοινωνήστε με τον διαχειριστή σας, για να επιλύσετε αυτό το ζήτημα. Χωρίς την λειτουργικότητα cURL, οι Προγραμματισμένες εργασίες δεν μπορούν να περάσουν να εκτελεστούν.',
    'LBL_BASIC_OPTIONS' => 'Βασική Εγκατάσταση',
    'LBL_ADV_OPTIONS' => 'Προηγμένες Επιλογές',
    'LBL_TOGGLE_ADV' => 'Εμφάνιση Σύνθετων Επιλογών',
    'LBL_TOGGLE_BASIC' => 'Εμφάνιση Βασικών Επιλογών',
// Links
    'LNK_LIST_SCHEDULER' => 'Προγραμματισμένες Εργασίες',
    'LNK_NEW_SCHEDULER' => 'Δημιουργία Προγραμματισμένων εργασιών',
// Messages
    'ERR_CRON_SYNTAX' => 'Μη έγκυρο Cron σύνταξης',
    'NTC_LIST_ORDER' => 'Προσδιορίστε  την σειρά εμφάνισης του προγραμματισμού που θα εμφανιστεί στην αναδυόμενη λίστα Προγραμματισμένες Εργασίες.',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Εγκατάσταση Προγραμματισμένων Εργασιών των Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Για Εγκατάσταση Crontab',
    'LBL_CRON_LINUX_DESC1' => 'In order to run SuiteCRM Schedulers, edit your web server user\'s crontab file with this command:',
    'LBL_CRON_LINUX_DESC2' => '... and add the following line to the crontab file:',
    'LBL_CRON_LINUX_DESC3' => 'You should do this only after the installation is concluded.',
    'LBL_CRON_WINDOWS_DESC' => 'Σημείωση: Προκειμένου να εκτελέσετε τις Προγραμματισμένες Εργασίες του SuiteCRM, δημιουργήστε μία στίβα αρχείου να εκτελεί, χρησιμοποιώντας στα Windows Προγραμματισμένες Εργασίες. Η στίβα φακέλου πρέπει να περιλαμβάνει τις ακόλουθες εντολές:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Job Log',
    'LBL_EXECUTE_TIME' => 'Χρόνος Εκτέλεσης',

//jobstrings
    'LBL_REFRESHJOBS' => 'Refresh Jobs',
    'LBL_POLLMONITOREDINBOXES' => 'Check Inbound Mail Accounts',
    'LBL_PERFORMFULLFTSINDEX' => 'Full-text Search Index System',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Εκτέλεση Νυχτερινών Μαζικών Emails Εκστρατείας',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Εκτέλεση Διαδικασίας Νυχτερινών Μη Παραδομένων Emails Εκστρατείας',
    'LBL_PRUNEDATABASE' => 'Περιορισμός Βάσης Δεδομένων την 1η του Μήνα',
    'LBL_TRIMTRACKER' => 'Περιορισμός Πινάκων Σημείου Εντοπισμού',
    'LBL_TRIMSUGARFEEDS' => 'Prune SuiteCRMFeed Tables',
    'LBL_SENDEMAILREMINDERS' => 'Run Email Reminders Sending',
    'LBL_CLEANJOBQUEUE' => 'Cleanup Job Queue',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Απομάκρυνση των εγγράφων από το σύστημα αρχείων',

    'LBL_AODOPTIMISEINDEX' => 'Optimise Advanced OpenDiscovery Index',
    'LBL_AODINDEXUNINDEXED' => 'Index unindexed documents',
    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP Poll Monitored Inboxes',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Run scheduled reports',
    'LBL_PROCESSAOW_WORKFLOW' => 'Process AOW Workflow',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Elasticsearch indexer',
    'LBL_CALENDARSYNCJOB' => 'Sync Calendar Accounts',

    'LBL_SCHEDULER_TIMES' => 'Scheduler Times',
    'LBL_SYNCGOOGLECALENDAR' => 'Sync Google Calendars',
);

global $sugar_config;
