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

    'LBL_SHAREDWEEK' => 'Shared Week',
    'LBL_SHAREDMONTH' => 'Shared Month',

    'LBL_MODULE_NAME' => 'Ημερολόγιο',
    'LBL_MODULE_TITLE' => 'Ημερολόγιο',
    'LNK_NEW_CALL' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_CALL_LIST' => 'Τηλεφωνικές Κλήσεις',
    'LNK_MEETING_LIST' => 'Συναντήσεις',
    'LNK_TASK_LIST' => 'Εργασίες',
    'LNK_TASK' => 'Εργασία',
    'LNK_TASK_VIEW' => 'Προβολή Εργασιας',
    'LNK_EVENT' => 'Γεγονός',
    'LNK_EVENT_VIEW' => 'Προβολή Συμβάντος',
    'LNK_VIEW_CALENDAR' => 'Σήμερα',
    'LNK_IMPORT_CALLS' => 'Εισαγωγή Κλήσεων',
    'LNK_IMPORT_MEETINGS' => 'Εισαγωγή Συναντήσεων',
    'LNK_IMPORT_TASKS' => 'Εισαγωγή Εργασιών',
    'LBL_MONTH' => 'Μήνας',
    'LBL_AGENDADAY' => 'Ημέρα',
    'LBL_YEAR' => 'Έτος',

    'LBL_AGENDAWEEK' => 'Εβδομάδα',
    'LBL_PREVIOUS_MONTH' => 'Προηγούμενος μήνας',
    'LBL_PREVIOUS_DAY' => 'Προηγούμενη ημέρα',
    'LBL_PREVIOUS_YEAR' => 'Προηγούμενο έτος',
    'LBL_PREVIOUS_WEEK' => 'Προηγούμενη εβδομάδα',
    'LBL_NEXT_MONTH' => 'Επόμενο Μήνα',
    'LBL_NEXT_DAY' => 'Επόμενη ημέρα',
    'LBL_NEXT_YEAR' => 'Επόμενο Ετος',
    'LBL_NEXT_WEEK' => 'Επόμενη εβδομάδα',
    'LBL_AM' => 'Π.Μ',
    'LBL_PM' => 'Μ.Μ',
    'LBL_SCHEDULED' => 'Προγραμματισμένο',
    'LBL_BUSY' => 'Απασχολημένο',
    'LBL_CONFLICT' => 'Διένεξη',
    'LBL_USER_CALENDARS' => 'Ημερολόγια χρήστη',
    'LBL_SHARED' => 'Κοινόχρηστα',
    'LBL_PREVIOUS_SHARED' => 'Προηγούμενη',
    'LBL_NEXT_SHARED' => 'Επόμενο',
    'LBL_SHARED_CAL_TITLE' => 'Κοινοχρηστο ημερολογιο',
    'LBL_USERS' => 'Χειριστές',
    'LBL_REFRESH' => 'Ανανέωση',
    'LBL_EDIT_USERLIST' => 'Λίστα Χειριστών',
    'LBL_SELECT_USERS' => 'Επιλέξτε χρήστες για την εμφάνιση του ημερολογίου',
    'LBL_FILTER_BY_TEAM' => 'Κατάλογος χρηστών ανά ομάδα:',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_DATE' => 'Ημερομηνία & Ώρα Εκκίνησης',
    'LBL_CREATE_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LBL_CREATE_CALL' => 'Προγραμματισμός κλήσης',
    'LBL_HOURS_ABBREV' => 'ω',
    'LBL_MINS_ABBREV' => 'λ',


    'LBL_YES' => 'Ναί',
    'LBL_NO' => 'Όχι',
    'LBL_SETTINGS' => 'Ρυθμίσεις',
    'LBL_CREATE_NEW_RECORD' => 'Δημιουργία Δραστηριότητας',
    'LBL_LOADING' => 'Λήψη...',
    'LBL_SAVING' => 'Αποθήκευση...',
    'LBL_SENDING_INVITES' => 'Saving & Sending Invites...',
    'LBL_CONFIRM_REMOVE' => 'Είστε βέβαιοι ότι θέλετε να καταργήσετε την εγγραφή;',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Are you sure you want to remove all recurring records?',
    'LBL_EDIT_RECORD' => 'Επεξεργασία Δραστηριότητας',
    'LBL_ERROR_SAVING' => 'Error while saving',
    'LBL_ERROR_LOADING' => 'Error while loading',
    'LBL_GOTO_DATE' => 'Go to Date',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_STYLE_BASIC' => 'Βασική', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Για προχωρημενους', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'No match for field: Assigned to',
    'LBL_SUBJECT' => 'Θέμα',
    'LBL_DURATION' => 'Διάρκεια',
    'LBL_STATUS' => 'Κατάσταση',
    'LBL_PRIORITY' => 'Προτεραιότητα',

    'LBL_SETTINGS_TITLE' => 'Ρυθμίσεις',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Display time slots in Day and Week views:',
    'LBL_SETTINGS_TIME_STARTS' => 'Start time:',
    'LBL_SETTINGS_TIME_ENDS' => 'End time:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Εμφάνιση Κλήσεων',
    'LBL_SETTINGS_TASKS_SHOW' => 'Show Tasks:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Show Completed Meetings, Calls and Tasks:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Shared Calendar Separate:',

    'LBL_SAVE_BUTTON' => 'Αποθήκευση',
    'LBL_DELETE_BUTTON' => 'Διαγραφή',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Αποστολή προσκλήσεων',
    'LBL_CANCEL_BUTTON' => 'Ακύρωση',
    'LBL_CLOSE_BUTTON' => 'Κλείσιμο',

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

    'LBL_EDIT_ALL_RECURRENCES' => 'Edit All Recurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Delete All Recurrences',

    'LBL_DATE_END_ERROR' => 'End date is before start date',
    'ERR_YEAR_BETWEEN' => 'Sorry, calendar cannot handle the year you requested<br>Year must be between 1970 and 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: not defined for this view',
    'LBL_NO_ITEMS_MOBILE' => 'Your calendar is clear for the week.',
    'LBL_GENERAL_SETTINGS' => 'General Settings',
    'LBL_COLOR_SETTINGS' => 'Colour Settings',
    'LBL_MODULE' => 'Ενότητα',
    'LBL_BODY' => 'Σώμα',
    'LBL_BORDER' => 'Περιθώριο',
    'LBL_TEXT' => 'Κείμενο',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Κυρ",
            '1' => "Δευτ",
            '2' => "Τρ",
            '3' => "Τετ",
            '4' => "Πέμ",
            '5' => "Παρ",
            '6' => "Σάβ",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Κυριακή",
            '1' => "Δευτέρα",
            '2' => "Τρίτη",
            '3' => "Τετάρτη",
            '4' => "Πέμπτη",
            '5' => "Παρασκευή",
            '6' => "Σάββατο",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Ιαν",
            '2' => "Φεβ",
            '3' => "Μαρ",
            '4' => "Απρ",
            '5' => "Μάιος",
            '6' => "Ιουν",
            '7' => "Ιούλ",
            '8' => "Αυγ",
            '9' => "Σεπ",
            '10' => "Οκτ",
            '11' => "Νοε",
            '12' => "Δεκ",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Ιανουάριος",
            '2' => "Φεβρουάριος",
            '3' => "Μάρτιος",
            '4' => "Απρίλιος",
            '5' => "Μάιος",
            '6' => "Ιούνιος",
            '7' => "Ιούλιος",
            '8' => "Αύγουστος",
            '9' => "Σεπτέμβριος",
            '10' => "Οκτώβριος",
            '11' => "Νοέμβριος",
            '12' => "Δεκέμβριος",
        ),
);
