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
    'LBL_ASSIGNED_TO_ID' => 'Assigned User Id',
    'LBL_ASSIGNED_TO_NAME' => 'Διαχειριστής Έργου ',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Όνομα προτύπου',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Προτύπων Έργου',
    'LBL_MODULE_NAME' => 'Πρότυπα Εργασίας ',
    'LBL_MODULE_TITLE' => 'Project Templates',
    'LBL_HOMEPAGE_TITLE' => 'Τα Πρότυπα Έργου Μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Προτύπων Έργου',
    'LNK_LIST' => 'Εμφάνιση Προτύπων Έργου',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Εισαγωγή Προτύπων Έργου',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Προτύπων Έργου',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Ιστορικού',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'Νέα Πρότυπα Έργου',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Προτεραιότητα',
    'LBL_PROJECT_NAME' => 'Όνομα Project',
    'LBL_START_DATE' => 'Ημ/νία έναρξης',
    'LBL_CREATE_PROJECT_TITLE' => 'Δημιουργία νέου έργου από αυτό το πρότυπο;',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Πρότυπα Καθηκόντων',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Users',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contacts',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Επιλογή Πόρων',
    'LBL_NEW_PROJECT_CREATED' => 'Δημιουργήθηκε νέο Έργο',
    'LBL_NEW_PROJECT' => 'Create Project',
    'LBL_CANCEL_PROJECT' => 'Cancel',

    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Ορόσημο',
    'LBL_RELATIONSHIP_TYPE' => 'Τύπος συσχετισμού',
    'LBL_LAG' => 'Καθυστέρηση',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Project Tasks',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Διάρκεια',
    'LBL_TASK_TITLE' => 'Επεξεργασία Εργασίας',
    'LBL_DURATION_TITLE' => 'Επεξεργασία Διάρκειας',
    'LBL_DESCRIPTION' => 'Notes',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',

    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Χωρίς Ανάθεση',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Πόροι',
    'LBL_DELETE_TASK' => 'Διαγραφή Εργασίας',
    'LBL_VIEW_DETAIL' => 'Προβολή Λεπτομερειών',
    'LBL_ADD_NEW_TASK' => 'Προσθήκη νέας Εργασίας',
    'LBL_ASSIGNED_USER_NAME' => 'Διαχειριστής Έργου:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Όνομα εργασίας',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Πραγματική Διάρκεια',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
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
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Προσθήκη Πόρου',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Συγγνώμη, δεν βρέθηκαν αποτελέσματα. Παρακαλώ δημιουργήστε έναν προσκεκλημένο παρακάτω.',
    'LBL_CREATE_INVITEE' => 'Δημιουργία ενός Πόρου',
    'LBL_CREATE_CONTACT' => 'Ως Επαφή',
    'LBL_CREATE_AND_ADD' => 'Δημιουργία και Προσθήκη',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση για να δημιουργήσετε $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Λίστα Πόρων',
    'LBL_NONE' => 'None',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Πρότυπα Έργου: Έργο από Τίτλο Έργου',


);
