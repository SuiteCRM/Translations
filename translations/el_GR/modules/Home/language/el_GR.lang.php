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
    'LBL_MODULE_NAME' => 'Αρχική Σελίδα',
    'LBL_NEW_FORM_TITLE' => 'Νέα επαφή',
    'LBL_FIRST_NAME' => 'Όνομα:',
    'LBL_LAST_NAME' => 'Επώνυμο:',
    'LBL_LIST_LAST_NAME' => 'Επώνυμο',
    'LBL_PHONE' => 'Τηλέφωνο:',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Διαδρομή Μου',
    'LBL_PIPELINE_FORM_TITLE' => 'Οι προσφορες μου',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Οι προσφορες μου',
    'LNK_NEW_CONTACT' => 'Δημιουργία Επαφής',
    'LNK_NEW_ACCOUNT' => 'Δημιουργία λογαριασμού',
    'LNK_NEW_OPPORTUNITY' => 'Δημιουργία Ευκαιρίας',
    'LNK_NEW_LEAD' => 'Δημιουργία Υποψήφιου Πελάτη',
    'LNK_NEW_CASE' => 'Δημιουργία Υπόθεσης',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LNK_NEW_CALL' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_EMAIL' => 'Αρχειοθέτηση email',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_NEW_BUG' => 'Αναφορά σφάλματος',
    'LNK_NEW_SEND_EMAIL' => 'Σύνταξη Email',
    'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση σε αυτή την περιοχή. Επικοινωνήστε με το διαχειριστή τοποθεσίας σας για να αποκτήσετε πρόσβαση',
    'LBL_NO_RESULTS_IN_MODULE' => '--Κανένα Αποτέλεσμα--',
    'LBL_NO_RESULTS' => '<h2>Δεν βρέθηκαν αποτελέσματα. Παρακαλώ αναζητήστε πάλι.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => 'Συμβουλές Αναζήτησης<br />1. Βεβαιωθείτε ότι έχετε τις κατάλληλες κατηγορίες που επιλέξατε παραπάνω.<br />2. Διευρύνετε τα κριτήρια της αναζήτησης σας.<br />3. Εάν και πάλι δεν μπορείτε να βρείτε όλα τα αποτελέσματα δοκιμάστε την σύνθετη επιλογή αναζήτησης.',

    'LBL_ADD_DASHLETS' => 'Προσθήκη Dashlets',
    'LBL_WEBSITE_TITLE' => 'Ιστοσελίδα',
    'LBL_RSS_TITLE' => 'Ροή Ειδήσεων',
    'LBL_CLOSE_DASHLETS' => 'Κλείσιμο',
    'LBL_OPTIONS' => 'Επιλογές',
    // dashlet search fields
    'LBL_TODAY' => 'Σήμερα',
    'LBL_YESTERDAY' => 'Χθες',
    'LBL_TOMORROW' => 'Αύριο',
    'LBL_NEXT_WEEK' => 'Επόμενη εβδομάδα',
    'LBL_LAST_7_DAYS' => 'Τελευταίες 7 ημέρες',
    'LBL_NEXT_7_DAYS' => 'Επόμενες 7 Ημέρες',
    'LBL_LAST_MONTH' => 'Τελευταίο Μήνα',
    'LBL_NEXT_MONTH' => 'Επόμενο Μήνα',
    'LBL_LAST_YEAR' => 'Τελευταίο Έτος',
    'LBL_NEXT_YEAR' => 'Επόμενο Ετος',
    'LBL_LAST_30_DAYS' => 'Τελευταίες 30 Ημέρες',
    'LBL_NEXT_30_DAYS' => 'Επόμενες 30 Ημέρες',
    'LBL_THIS_MONTH' => 'Αυτόν τον Μήνα',
    'LBL_THIS_YEAR' => 'Αυτό το Έτος',

    'LBL_MODULES' => 'Ενότητες',
    'LBL_CHARTS' => 'Γραφήματα',
    'LBL_TOOLS' => 'Εργαλεία',
    'LBL_WEB' => 'Ιστοχώρος',
    'LBL_SEARCH_RESULTS' => 'Αποτέλεσμα Αναζήτησης',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Εμφάνιση Ενοτήτων',
        'Portal' => 'Portal',
        'Charts' => 'Γραφήματα',
        'Tools' => 'Εργαλεία',
        'Miscellaneous' => 'Διάφορα'
    ),
    'LBL_ADDING_DASHLET' => 'Προσθήκη Πίνακα Στοιχείων SuiteCRM ...',
    'LBL_ADDED_DASHLET' => 'Προστέθηκε Πίνακας Στοιχείων SuiteCRM',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Είστε βέβαιοι ότι θέλτε να αφαιρέσετε τον Πίνακα Στοιχείων SuiteCRM;',
    'LBL_REMOVING_DASHLET' => 'Αφαίρεση Πίνακα Στοιχείων SuiteCRM ...',
    'LBL_REMOVED_DASHLET' => 'Αφαιρέθηκε Πίνακας Στοιχείων SuiteCRM',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'Γενικά',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Φίλτρα',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Μόνο τα Στοιχεία Μου',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Τίτλος',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Εμφάνιση Γραμμών',

    'LBL_DASHLET_DELETE' => 'Διαγραφή Πίνακα Στοιχείων SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Ανανέωση Πίνακα Στοιχείων SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Επεξεργασία Πίνακα Στοιχείων SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Αρχική Σελίδα SuiteCRM',
    'LBL_CLOSE_SITEMAP' => 'Κλείσιμο',

    'LBL_SEARCH' => 'Αναζήτηση',
    'LBL_CLEAR' => 'Εκκαθάριση',

    'LBL_BASIC_CHARTS' => 'Βασικά Γραφήματα',

    'LBL_DASHLET_SEARCH' => 'Εύρεση Πίνακα Στοιχείων SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Έκδοση',
    'LBL_BUILD' => 'Δόμηση',

    'LBL_SOURCE_SUGAR' => 'SuiteCRM - Η πιο δημοφιλής εφαρμογή στον κόσμο των αυτοποιημένων πωλήσεων, δημιουργήθηκε από το  SuiteCRM Inc.',

    'LBL_DASHLET_TITLE' => 'Ιστοσελίδες Μου',
    'LBL_DASHLET_OPT_TITLE' => 'Τίτλος',
    'LBL_DASHLET_INCORRECT_URL' => 'Καθορίστηκε εσφαλμένη θέση Ιστοσελίδας',
    'LBL_DASHLET_OPT_URL' => 'Τοποθεσία Ιστοσελίδας',
    'LBL_DASHLET_OPT_HEIGHT' => 'Ύψος Πίνακα Στοιχείων SuiteCRM (σε pixels)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM Ειδήσεις',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Ανακαλύψτε το SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Γρήγορη Αναζήτηση' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Σύνθετη Αναζήτηση' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Εικονίδιο Αρχικής',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Επιστρέψτε γρήγορα στην ταμπλό της Αρχικής Σελίδας με ένα κλικ.',
    'LBL_TOUR_MODULES' => 'Ενότητες',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Όλες οι σημαντικές ενότητες είναι εδώ.',
    'LBL_TOUR_MORE' => 'Περισσότερες Ενότητες',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Οι υπόλοιπες ενότητες είναι εδώ.',
    'LBL_TOUR_SEARCH' => 'Αναζήτησή Πλήρους Κειμένου',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Η αναζήτηση έγινε πολύ καλύτερη.',
    'LBL_TOUR_NOTIFICATIONS' => 'Ανακοινώσεις',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Προφίλ',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Πρόσβαση στο προφίλ, ρυθμίσεις και αποσύνδεση.',
    'LBL_TOUR_QUICKCREATE' => 'Γρήγορη Δημιουργία',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Γρήγορη δημιουργία εγγραφών χωρίς να αλλαγή τοποθεσίας.',
    'LBL_TOUR_FOOTER' => 'Υπόμνημα Που Μπορεί Να Συμπτυχθεί.',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Εύκολη σύμπτυξη και ανάπτυξη του υπομνήματος.',
    'LBL_TOUR_CUSTOM' => 'Προσαρμοσμένες Εφαρμογές',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Προσαρμοσμένες ολοκληρώσεις πρέπει να πάνε εδώ.',
    'LBL_TOUR_BRAND' => 'Το Εμπορικής Επωνυμίας Σας',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Η εικόνα του εμπορικού σας σήματος πηγαίνει εδώ. Μπορείτε να κάνετε mouse over για περισσότερες πληροφορίες.',
    'LBL_TOUR_WELCOME' => 'Καλωσορίσατε στο SuiteCRM',
    'LBL_TOUR_WATCH' => 'Παρακολουθήστε τις Ειδήσεις του SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Νέα απλοποιημένη μπάρα πλοήγησης</li><li class="icon-ok">Νέο υποσέλιδο με δυνατότητα σύμπτυξης</li><li class="icon-ok">Βελτιωμένη Αναζήτηση</li><li class="icon-ok">Ενημερωμένο μενού ενεργειών</li></ul><p>και πολύ περισσότερα!</p>',
    'LBL_TOUR_VISIT' => 'Για περισσότερες πληροφορίες παρακαλώ επισκεφτείτε την εφαρμογή μας',
    'LBL_TOUR_DONE' => 'Τελειώσατε!',
    'LBL_TOUR_REFERENCE_1' => 'Μπορείτε πάντα να αναφερθείτε στο',
    'LBL_TOUR_REFERENCE_2' => 'μέσω του συνδέσμου "Υποστήριξη" στην καρτέλα του προφίλ.',
    'LNK_TOUR_DOCUMENTATION' => 'Τεκμηρίωση',
    'LBL_TOUR_CALENDAR_URL_1' => 'Do you share your SuiteCRM calendar with 3rd party applications, such as Microsoft Outlook or Exchange? If so, you have a new URL. This new, more secure URL includes a personal key which will prevent unauthorized publishing of your calendar.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Ατακτήστε το νέο URL του ημερολογίου σας.',
    'LBL_CONTRIBUTORS' => 'Συνεισφέροντες',
    'LBL_ABOUT_SUITE' => 'Σχετικά με το SuiteCRM',
    'LBL_PARTNERS' => 'Συνεργάτες',
    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',
    'LBL_CONFIRM_REMOVE' => 'Είστε βέβαιοι ότι θέλετε να καταργήσετε την εγγραφή;',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - Ανοιχτού κώδικα CRM για τον κόσμο',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite από τον Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps από τον Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow Calculated Fields contributed by diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Περί Μεταφράσεων του SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Συνεργατική μετάφραση από την Κοινότητα του SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Η μετάφραση δημιουργήθηκε με την βοήθεια του Crowdin',

    'LBL_ABOUT_SUITE_2' => 'Το SuiteCRM είναι διαθέσιμο υπό την ανοιχτού κώδικα άδεια χρήσης - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Όλος ο κώδικας που διαχειρίζεται και αναπτύσεται για το SuiteCRM θα εδημοσιεύεται ως ανοιχτός κώδικας - GPL3',
    'LBL_ABOUT_SUITE_5' => 'Η υποστήριξη είναι διαθέσιμη και στις 2 εκδόσεις. Είτε στην δωρεάν είτε στην προς πληρωμή.',

    'LBL_SUITE_PARTNERS' => 'Διαθέτουμε πιστούς συνεργάτες για το SuiteCRM που είναι παθιασμένοι με τον ανοιχτό κώδικα. Για να δείτε τη πλήρη λίστα συνεργατών, δείτε την ιστοσελίδα μας.',

    'LBL_SAVE_BUTTON' => 'Αποθήκευση',
    'LBL_DELETE_BUTTON' => 'Διαγραφή',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Αποστολή προσκλήσεων',
    'LBL_CANCEL_BUTTON' => 'Ακύρωση',
    'LBL_CLOSE_BUTTON' => 'Κλείσιμο',

    'LBL_CREATE_NEW_RECORD' => 'Δημιουργία Δραστηριότητας',
    'LBL_CREATE_CALL' => 'Προγραμματισμός κλήσης',
    'LBL_CREATE_MEETING' => 'Προγραμματισμός Συνάντησης',

    'LBL_GENERAL_TAB' => 'Λεπτομέρειες',
    'LBL_PARTICIPANTS_TAB' => 'Συμμετέχοντες',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Επανάληψη',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'Τέλος',
    'LBL_REPEAT_END_AFTER' => 'Μετά',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'Στις',
    'LBL_REPEAT_UNTIL' => 'Επαναλάψη μέχρι',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Γεγονός',
    'LNK_EVENT_VIEW' => 'Προβολή Συμβάντος',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Τίτλος:',
    'LBL_HOUR_ABBREV' => 'ώρα',
    'LBL_HOURS_ABBREV' => 'ώρες',
    'LBL_MINSS_ABBREV' => 'λεπτά',
    'LBL_LOCATION' => 'Τοποθεσία:',
    'LBL_STATUS' => 'Κατάσταση:',
    'LBL_DESCRIPTION' => 'Περιγραφή: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Ένα σφάλμα παρουσιάστηκε κατά την αναζήτηση. Η σύνταξη της αναζήτησης μπορεί να μην είναι έγκυρη.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Δεν υπάρχουν αποτελέσματα με αυτά τα κριτήρια. Διερύνετε την αναζήτησή σας.',

    'LNK_TASK_VIEW' => 'Προβολή Εργασιας',
);
