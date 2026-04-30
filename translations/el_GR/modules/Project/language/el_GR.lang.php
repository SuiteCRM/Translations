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
    'LBL_MODULE_NAME' => 'Έργο',
    'LBL_MODULE_TITLE' => 'Έργα: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση Έργου',
    'LBL_LIST_FORM_TITLE' => 'Κατάλογος Project',
    'LBL_HISTORY_TITLE' => 'History',
    'LBL_ID' => 'Α/Α:',
    'LBL_DATE_ENTERED' => 'Ημερομηνία Δημιουργίας:',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης:',
    'LBL_ASSIGNED_USER_ID' => 'Assigned To:',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Τροποποιήθηκε από:',
    'LBL_CREATED_BY' => 'Δημιουργήθηκε από:',
    'LBL_NAME' => 'Όνομα Εκστρατείας:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_DELETED' => 'Διαγράφηκε:',
    'LBL_DATE' => 'Date:',
    'LBL_DATE_START' => 'Start Date:',
    'LBL_DATE_END' => 'Ημερομηνία Λήξης:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Συνολική εκτιμώμενη διάρκεις (ώρες)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Συνολική πραγματική διάρκεια (ώρες)',
    'LBL_LIST_END_DATE' => 'Ημερομηνία Λήξης',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Εργασίες Έργων',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Ευκαιρίες',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Κανένας',
    'LBL_ALL_PROJECTS' => 'Όλα τα Έργα',
    'LBL_ALL_USERS' => 'Όλοι οι Χρήστες',
    'LBL_ALL_CONTACTS' => 'Όλες οι Επαφές',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Νέο Έργο',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Κατάλογος Project',
    'LNK_NEW_PROJECT_TASK' => 'Δημιουργία εργασίας',
    'LNK_PROJECT_TASK_LIST' => 'Εργασίες',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projects',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Λογιαριασμοί',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Ευκαιρίες',
    'LBL_CASES_SUBPANEL_TITLE' => 'Υποθέσεις',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Σφάλμα Σημείου Εντοπισμού',
    'LBL_TASK_ID' => 'Ταυτότητα',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Πραγματική Διάρκεια',
    'LBL_START' => 'Έναρξη',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Προαπαιτούμενα',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Περισσότερα',
    'LBL_OPPORTUNITIES' => 'Ευκαιρίες',
    'LBL_NEXT_WEEK' => 'Επόμενη',
    'LBL_PROJECT_INFORMATION' => 'Επισκόπηση Έργου',
    'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Εργασίες Έργων',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duration',
    'LBL_TASK_TITLE' => 'Επεξεργασία Εργασίας',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Καθυστέρηση',
    'LBL_DAYS' => 'Ημέρες',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Task',
    'LBL_MILESTONE_FLAG' => 'Ορόσημο',
    'LBL_ADD_NEW_TASK' => 'Προσθήκη νέας Εργασίας',
    'LBL_DELETE_TASK' => 'Διαγραφή Εργασίας',
    'LBL_EDIT_TASK_PROPERTIES' => 'Τροποποίηση ιδιοτήτων καθήκοντος.',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id',
    'LBL_RESOURCE_CHART' => 'Ημερολόγιο Πόρων',
    'LBL_RELATIONSHIP_TYPE' => 'Τύπος συσχετισμού',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Πρότυπο Έργου',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Project Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Έργο',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Tasks on this day',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duration',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Ο Πόρος είναι ένας Χρήστης',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Ο Πόρος είναι μια Επαφή ',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Επόμενο Μήνα',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Day',
    'LBL_RESOURCE_CHART_WARNING' => 'Δεν έχουν διατεθεί πόροι στο έργο.',
    'LBL_PROJECT_DELETE_MSG' => 'Are you sure you want to delete this Project and its related Tasks?',
    'LBL_LIST_MY_PROJECT' => 'Τα έργα μου:',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Προσθήκη Πόρου',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Επώνυμο',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Συγγνώμη, δεν βρέθηκαν αποτελέσματα. Παρακαλώ δημιουργήστε έναν προσκεκλημένο παρακάτω.',
    'LBL_CREATE_INVITEE' => 'Δημιουργία ενός Πόρου',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Ακύρωση',
    'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση για να δημιουργήσετε $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Λίστα Πόρων',
    'LBL_REMOVE' => 'Remove',
    'LBL_VIEW_DETAIL' => 'Προβολή Λεπτομερειών',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Λάβετε υπόψιν Εργάσιμες ημέρες',

    'LBL_IMPORT_PROJECTS' => 'Import Projects',

    'LBL_PROJECTS_SEARCH' => 'Αναζήτηση Έργων',
    'LBL_USERS_SEARCH' => 'Αναζήτηση Χρηστών',
    'LBL_CONTACTS_SEARCH' => 'Select  Contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Monthly',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => 'Quarter',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Πρότυπα Έργου: Έργο από Τίτλο Έργου',
    'LBL_AOS_QUOTES_PROJECT' => 'Προσφορές: Έργο',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Αύξουσα',
    'LBL_DESCENDING' => 'Φθίνουσα',
);
