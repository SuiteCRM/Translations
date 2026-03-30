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
    'LBL_MODULE_NAME' => 'Home',
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Διαδρομή Μου',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_CASE' => 'Create Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => 'Compose Email',
    'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση σε αυτή την περιοχή. Επικοινωνήστε με το διαχειριστή τοποθεσίας σας για να αποκτήσετε πρόσβαση',
    'LBL_NO_RESULTS_IN_MODULE' => '--Κανένα Αποτέλεσμα--',
    'LBL_NO_RESULTS' => '<h2>Δεν βρέθηκαν αποτελέσματα. Παρακαλώ αναζητήστε πάλι.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => 'Συμβουλές Αναζήτησης<br />1. Βεβαιωθείτε ότι έχετε τις κατάλληλες κατηγορίες που επιλέξατε παραπάνω.<br />2. Διευρύνετε τα κριτήρια της αναζήτησης σας.<br />3. Εάν και πάλι δεν μπορείτε να βρείτε όλα τα αποτελέσματα δοκιμάστε την σύνθετη επιλογή αναζήτησης.',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Ροή Ειδήσεων',
    'LBL_CLOSE_DASHLETS' => 'Close',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Today',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Αύριο',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_LAST_7_DAYS' => 'Last 7 Days',
    'LBL_NEXT_7_DAYS' => 'Next 7 Days',
    'LBL_LAST_MONTH' => 'Last Month',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_LAST_YEAR' => 'Last Year',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_LAST_30_DAYS' => 'Last 30 Days',
    'LBL_NEXT_30_DAYS' => 'Next 30 Days',
    'LBL_THIS_MONTH' => 'This Month',
    'LBL_THIS_YEAR' => 'This Year',

    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'Charts',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Αποτέλεσμα Αναζήτησης',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Εμφάνιση Ενοτήτων',
        'Portal' => 'Portal',
        'Charts' => 'Charts',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Διάφορα'
    ),
    'LBL_ADDING_DASHLET' => 'Adding SuiteCRM Dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Removing SuiteCRM Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Title',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'Διαγραφή Πίνακα Στοιχείων SuiteCRM',
    'LBL_DASHLET_REFRESH' => 'Ανανέωση Πίνακα Στοιχείων SuiteCRM',
    'LBL_DASHLET_EDIT' => 'Επεξεργασία Πίνακα Στοιχείων SuiteCRM',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Αρχική Σελίδα SuiteCRM',
    'LBL_CLOSE_SITEMAP' => 'Close',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Βασικά Γραφήματα',

    'LBL_DASHLET_SEARCH' => 'Εύρεση Πίνακα Στοιχείων SuiteCRM',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'Δόμηση',

    'LBL_SOURCE_SUGAR' => 'SuiteCRM - Η πιο δημοφιλής εφαρμογή στον κόσμο των αυτοποιημένων πωλήσεων, δημιουργήθηκε από το  SuiteCRM Inc.',

    'LBL_DASHLET_TITLE' => 'My Sites',
    'LBL_DASHLET_OPT_TITLE' => 'Title',
    'LBL_DASHLET_INCORRECT_URL' => 'Καθορίστηκε εσφαλμένη θέση Ιστοσελίδας',
    'LBL_DASHLET_OPT_URL' => 'Τοποθεσία Ιστοσελίδας',
    'LBL_DASHLET_OPT_HEIGHT' => 'Ύψος Πίνακα Στοιχείων SuiteCRM (σε pixels)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM Ειδήσεις',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Ανακαλύψτε το SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Quick Filter' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Εικονίδιο Αρχικής',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Επιστρέψτε γρήγορα στην ταμπλό της Αρχικής Σελίδας με ένα κλικ.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Όλες οι σημαντικές ενότητες είναι εδώ.',
    'LBL_TOUR_MORE' => 'Περισσότερες Ενότητες',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Οι υπόλοιπες ενότητες είναι εδώ.',
    'LBL_TOUR_SEARCH' => 'Αναζήτησή Πλήρους Κειμένου',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Η αναζήτηση έγινε πολύ καλύτερη.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'SuiteCRM application notifications would go here.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Πρόσβαση στο προφίλ, ρυθμίσεις και αποσύνδεση.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
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
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
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

    'LBL_SAVE_BUTTON' => 'Save',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Save & Send Invites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Close',

    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Recurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'recurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Number of recurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date: ',
    'LBL_DURATION' => 'Duration: ',
    'LBL_NAME' => 'Τίτλος:',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'hours',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Location:',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description: ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'An error has occurred while performing the search. Your query syntax might not be valid.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Unable to find the requested SearchEngine. Try performing the search again.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Failed to connect to the Elasticsearch server.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'An error internal to the Search has occurred.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'An unknown error has occurred while performing the search.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Contact an administrator if the problem persists. More information available in the logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'The search index for one or more modules could not be found. Please make sure that crontab is configured and running, open the Elasticsearch configuration and click "Schedule full indexing" and consider creating a Scheduler job "Elasticsearch Indexer" when not existent.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'No results matching your search criteria. Try broadening your search.',

    'LNK_TASK_VIEW' => 'View Task',
);
