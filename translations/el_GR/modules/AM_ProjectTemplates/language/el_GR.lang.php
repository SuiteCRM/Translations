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
    'LBL_ASSIGNED_TO_NAME' => 'Διαχειριστής Έργου ',
    'LBL_ID' => 'Α/Α',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από',
    'LBL_MODIFIED_NAME' => 'Τροποποίηση ανά Όνομα',
    'LBL_CREATED' => 'Δημιουργήθηκε από',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_NAME' => 'Όνομα προτύπου',
    'LBL_CREATED_USER' => 'Δημιουργήθηκε από',
    'LBL_MODIFIED_USER' => 'τροποποίηση από',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_EDIT_BUTTON' => 'Επεξεργασία',
    'LBL_REMOVE' => 'Αφαίρεση',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Προτύπων Έργου',
    'LBL_MODULE_NAME' => 'Πρότυπα Εργασίας ',
    'LBL_MODULE_TITLE' => 'Πρότυπα Εργασίας ',
    'LBL_HOMEPAGE_TITLE' => 'Τα Πρότυπα Έργου Μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Προτύπων Έργου',
    'LNK_LIST' => 'Εμφάνιση Προτύπων Έργου',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Εισαγωγή Προτύπων Έργου',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Προτύπων Έργου',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Ιστορικού',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_NEW_FORM_TITLE' => 'Νέα Πρότυπα Έργου',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_PRIORITY' => 'Προτεραιότητα',
    'LBL_PROJECT_NAME' => 'Όνομα Project',
    'LBL_START_DATE' => 'Ημ/νία έναρξης',
    'LBL_CREATE_PROJECT_TITLE' => 'Δημιουργία νέου έργου από αυτό το πρότυπο;',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Πρότυπα Καθηκόντων',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Χειριστές',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Επαφές',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Επιλογή Πόρων',
    'LBL_NEW_PROJECT_CREATED' => 'Δημιουργήθηκε νέο Έργο',
    'LBL_NEW_PROJECT' => 'Δημιουργία Project',
    'LBL_CANCEL_PROJECT' => 'Ακύρωση',

    'LBL_SUBTASK' => 'Εργασία',
    'LBL_MILESTONE_FLAG' => 'Ορόσημο',
    'LBL_RELATIONSHIP_TYPE' => 'Τύπος συσχετισμού',
    'LBL_LAG' => 'Καθυστέρηση',
    'LBL_DAYS' => 'Ημέρες',
    'LBL_HOURS' => 'Ώρες',
    'LBL_MONTHS' => 'Μήνες',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Εργασίες Έργων',
    'LBL_VIEW_GANTT_TITLE' => 'Προβολή Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Διάρκεια',
    'LBL_TASK_TITLE' => 'Επεξεργασία Εργασίας',
    'LBL_DURATION_TITLE' => 'Επεξεργασία Διάρκειας',
    'LBL_DESCRIPTION' => 'Σημειώσεις',
    'LBL_ASSIGNED_USER_ID' => 'Υπεύθυνος:',

    'LBL_LIST_ASSIGNED_USER' => 'Διαχειριστής Έργου ',
    'LBL_UNASSIGNED' => 'Χωρίς Ανάθεση',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Πόροι',
    'LBL_DELETE_TASK' => 'Διαγραφή Εργασίας',
    'LBL_VIEW_DETAIL' => 'Προβολή Λεπτομερειών',
    'LBL_ADD_NEW_TASK' => 'Προσθήκη νέας Εργασίας',
    'LBL_ASSIGNED_USER_NAME' => 'Διαχειριστής Έργου:',

    'LBL_TASK_ID' => 'Α/Α',
    'LBL_TASK_NAME' => 'Όνομα εργασίας',
    'LBL_DURATION' => 'Διάρκεια',
    'LBL_ACTUAL_DURATION' => 'Πραγματική Διάρκεια',
    'LBL_START' => 'Έναρξη',
    'LBL_FINISH' => 'Τέλος',
    'LBL_PREDECESSORS' => 'Προαπαιτούμενα',
    'LBL_PERCENT_COMPLETE' => 'Πρόοδος (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Τροποποίηση ιδιοτήτων καθήκοντος.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Λάβετε υπόψιν Εργάσιμες ημέρες',
    'LBL_COPY_ALL_TASKS' => 'Αντιγραφή Όλων των Καθηκόντων Με Πόρους',
    'LBL_COPY_SEL_TASKS' => 'Αντιγραφή Επιλεγμένων Καθηκόντων Με Πόρους',
    'LBL_TOOLTIP_TITLE' => 'Υπόδειξη',
    'LBL_TOOLTIP_TEXT' => 'Αντιγράφει Όλα τα καθήκοντα με αναθετημένους χρήστες',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Τηλέφωνο γραφείου:',
    'LBL_ADD_BUTTON' => 'Προσθήκη',
    'LBL_ADD_INVITEE' => 'Προσθήκη Πόρου',
    'LBL_FIRST_NAME' => 'Όνομα',
    'LBL_LAST_NAME' => 'Επώνυμο',
    'LBL_SEARCH_BUTTON' => 'Αναζήτηση',
    'LBL_EMPTY_SEARCH_RESULT' => 'Συγγνώμη, δεν βρέθηκαν αποτελέσματα. Παρακαλώ δημιουργήστε έναν προσκεκλημένο παρακάτω.',
    'LBL_CREATE_INVITEE' => 'Δημιουργία ενός Πόρου',
    'LBL_CREATE_CONTACT' => 'Ως Επαφή',
    'LBL_CREATE_AND_ADD' => 'Δημιουργία και Προσθήκη',
    'LBL_CANCEL_CREATE_INVITEE' => 'Ακύρωση',
    'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση για να δημιουργήσετε $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Λίστα Πόρων',
    'LBL_NONE' => 'Καμία',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Πρότυπα Έργου: Έργο από Τίτλο Έργου',


);
