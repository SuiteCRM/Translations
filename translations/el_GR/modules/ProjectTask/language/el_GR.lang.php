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
    'LBL_MODULE_NAME' => 'Εργασίες Έργων',
    'LBL_MODULE_TITLE' => 'Εργασιες: Αρχικη',

    'LBL_ID' => 'Α/Α:',
    'LBL_PROJECT_TASK_ID' => 'Project Task Id:',
    'LBL_PROJECT_ID' => 'Id Έργου:',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης:',
    'LBL_DATE_MODIFIED' => 'Ημ/νία τροποποίησης:',
    'LBL_ASSIGNED_USER_ID' => 'Υπεύθυνος:',
    'LBL_MODIFIED_USER_ID' => 'Τροποποιήθηκε από:',
    'LBL_CREATED_BY' => 'Δημιουργήθηκε από:',
    'LBL_NAME' => 'Όνομα:',
    'LBL_STATUS' => 'Κατάσταση:',
    'LBL_DATE_DUE' => 'Ημ/νία λήξης:',
    'LBL_TIME_DUE' => 'Ώρα λήξης:',
    'LBL_PREDECESSORS' => 'Predecessor',
    'LBL_DATE_START' => 'Ημ/νία έναρξης:',
    'LBL_DATE_FINISH' => 'Finish Date:',
    'LBL_TIME_START' => 'Ώρα έναρξης:',
    'LBL_TIME_FINISH' => 'Finish Time:',
    'LBL_DURATION' => 'Διάρκεια:',
    'LBL_DURATION_UNIT' => 'Duration Unit:',
    'LBL_ACTUAL_DURATION' => 'Actual Duration:',
    'LBL_PARENT_ID' => 'Έργα',
    'LBL_PARENT_TASK_ID' => 'Parent Task Id:',
    'LBL_PERCENT_COMPLETE' => 'Πρόοδος (%):',
    'LBL_PRIORITY' => 'Προτεραιότητα:',
    'LBL_DESCRIPTION' => 'Σημειώσεις:',
    'LBL_ORDER_NUMBER' => 'Ιεραρχία:',
    'LBL_TASK_NUMBER' => 'Α/Α εργασίας:',
    'LBL_TASK_ID' => 'Task ID:',
    'LBL_MILESTONE_FLAG' => 'Milestone:',
    'LBL_ESTIMATED_EFFORT' => 'Εκτιμώμενη διάρκεια (ώρες):',
    'LBL_ACTUAL_EFFORT' => 'Πραγματική διάρκεια (ώρες):',
    'LBL_UTILIZATION' => 'Χρήση (%):',
    'LBL_DELETED' => 'Διαγράφηκε:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Import Project Tasks',

    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_LIST_PARENT_NAME' => 'Έργο',
    'LBL_SEARCH_FORM_TITLE' => 'Project Task Search',
    'LBL_LIST_PERCENT_COMPLETE' => 'Πρόοδος (%)',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Ανατέθηκε Σε',
    'LBL_LIST_DATE_DUE' => 'Ημ/νία λήξης',
    'LBL_LIST_PRIORITY' => 'Προτεραιότητα',
    'LBL_LIST_CLOSE' => 'Κλείσιμο',
    'LBL_PROJECT_NAME' => 'Όνομα Project',
    'LBL_LIST_FORM_TITLE' => 'Project Task List',

    'LNK_NEW_PROJECT' => 'Δημιουργία Project',
    'LNK_PROJECT_LIST' => 'Κατάλογος Project',
    'LNK_NEW_PROJECT_TASK' => 'Δημιουργία εργασίας',
    'LNK_PROJECT_TASK_LIST' => 'Εργασίες Έργων',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Οι ανοιχτές εργασίες μου',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Εργασίες Έργων',
    'LBL_NEW_FORM_TITLE' => 'Νεα εργασία',

    'LBL_HISTORY_TITLE' => 'Ιστορικό',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ιστορικό',

    'LBL_ASSIGNED_USER_NAME' => 'Ανατέθηκε Σε',
    'LBL_PARENT_NAME' => 'Όνομα Project',
    'LBL_EDITLAYOUT' => 'Επεξεργασία Διάταξης' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Χρονοδιάγραμμα',

    'LBL_SUBTASK' => 'Sub-Task',
    'LBL_LAG' => 'Καθυστέρηση',
    'LBL_DAYS' => 'Ημέρες',
    'LBL_HOURS' => 'Ώρες',
    'LBL_RELATIONSHIP_TYPE' => 'Τύπος σχέσης',

    'LBL_ASCENDING' => 'Αύξουσα',
    'LBL_DESCENDING' => 'Φθίνουσα',
);
