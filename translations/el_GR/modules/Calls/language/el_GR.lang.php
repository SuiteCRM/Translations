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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Τηλεφωνικές Κλήσεις',
    'LBL_MODULE_TITLE' => 'Κλησεις: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση κλήσεων',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος κλησεων',
    'LBL_NEW_FORM_TITLE' => 'Προγραμματισμός κλήσης',
    'LBL_LIST_CLOSE' => 'Κλείσιμο',
    'LBL_LIST_SUBJECT' => 'Θέμα',
    'LBL_LIST_CONTACT' => 'Επαφή',
    'LBL_LIST_RELATED_TO' => 'Σχετίζεται με',
    'LBL_LIST_RELATED_TO_ID' => 'Σχετικό με το ID',
    'LBL_LIST_DATE' => 'Ημ/νία έναρξης',
    'LBL_LIST_DIRECTION' => 'Κατεύθυνση',
    'LBL_SUBJECT' => 'Θέμα:',
    'LBL_REMINDER' => 'Υπενθύμιση:',
    'LBL_CONTACT_NAME' => 'Επαφή:',
    'LBL_DESCRIPTION' => 'Περιγραφή:',
    'LBL_STATUS' => 'Κατάσταση:',
    'LBL_DIRECTION' => 'Κατέυθυνση:',
    'LBL_DATE' => 'Ημ/νία έναρξης:',
    'LBL_DURATION' => 'Διάρκεια:',
    'LBL_DURATION_HOURS' => 'Διάρκεια σε ώρες:',
    'LBL_DURATION_MINUTES' => 'Διάρκεια σς λεπτά:',
    'LBL_HOURS_MINUTES' => '(ώρες/λεπτά)',
    'LBL_DATE_TIME' => 'Ημ/νία & ώρα έναρξης:',
    'LBL_TIME' => 'Ώρα έναρξης:',
    'LBL_HOURS_ABBREV' => 'ω',
    'LBL_MINSS_ABBREV' => 'λ',
    'LNK_NEW_CALL' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_CALL_LIST' => 'Κλήσεις',
    'LNK_IMPORT_CALLS' => 'Εισαγωγή Κλήσεων',
    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για τη διαγραφή του λογαριασμού',
    'LBL_INVITEE' => 'Συμμετέχοντες',
    'LBL_RELATED_TO' => 'Σχετικά με:',
    'LNK_NEW_APPOINTMENT' => 'Προγραμματισμός κλήσης',
    'LBL_SCHEDULING_FORM_TITLE' => 'Χρονοδιαγραμα',
    'LBL_ADD_INVITEE' => 'Προσθηκη συμμετεχοντων',
    'LBL_NAME' => 'Όνομα',
    'LBL_FIRST_NAME' => 'Όνομα',
    'LBL_LAST_NAME' => 'Επώνυμο',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Τηλέφωνο',
    'LBL_REMINDER_POPUP' => 'Αναδυόμενα Παράθυρα',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Αποστολή Email σε όλους του συμμετέχοντες',
    'LBL_EMAIL_REMINDER' => 'Email Υπενθύμισης',
    'LBL_EMAIL_REMINDER_TIME' => 'Ώρα Email Υπενθύμισης',
    'LBL_SEND_BUTTON_TITLE' => 'Αποστολή προσκλήσεων',
    'LBL_SEND_BUTTON_LABEL' => 'Αποστολή προσκλήσεων',
    'LBL_DATE_END' => 'Ημερομηνία Λήξης',
    'LBL_REMINDER_TIME' => 'Ώρα υπενθύμισης',
    'LBL_EMAIL_REMINDER_SENT' => 'Το Email Υπενθύμισης στάλθηκε',
    'LBL_SEARCH_BUTTON' => 'Αναζήτηση',
    'LBL_ADD_BUTTON' => 'Προσθήκη',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Τηλεφωνικές Κλήσεις',
    'LNK_SELECT_ACCOUNT' => 'Επιλέξτε λογαριασμό',
    'LNK_NEW_ACCOUNT' => 'Νεος Λογαριασμός',
    'LNK_NEW_OPPORTUNITY' => 'Νεα ευκαιρία πώλησης',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
    'LBL_USERS_SUBPANEL_TITLE' => 'Χειριστές',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Μέλος Του',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Σημειώσεις',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_LIST_MY_CALLS' => 'Οι κλησεις μου',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_ASSIGNED_TO_ID' => 'Υπεύθυνος',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'Επισκόπηση', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Αφαίρεση',
    'LBL_ACCEPT_STATUS' => 'Αποδοχή κατάστασης',
    'LBL_ACCEPT_LINK' => 'Αποδοχή συνδέσμου',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Δημιουργία προσκεκλημένου',
    'LBL_CREATE_CONTACT' => 'Ως Επαφή',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Δημιουργία και Προσθήκη',
    'LBL_CANCEL_CREATE_INVITEE' => 'Ακύρωση',
    'LBL_EMPTY_SEARCH_RESULT' => 'Συγγνώμη, δεν βρέθηκαν αποτελέσματα. Παρακαλώ δημιουργήστε έναν προσκεκλημένο παρακάτω.',
    'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση για να δημιουργήσετε $module',

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Επαναλάψη μέχρι',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Υπενθυμίσεις:',
    'LBL_REMINDERS_ACTIONS' => 'Ενέργειες:',
    'LBL_REMINDERS_POPUP' => 'Αναδυόμενα Παράθυρα',
    'LBL_REMINDERS_EMAIL' => 'Προσκεκλημένοι Email',
    'LBL_REMINDERS_WHEN' => 'Πότε:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Κατάργηση ειδοποίησης',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Προσθέστε όλους τους προσκεκλημένους',
    'LBL_REMINDERS_ADD_REMINDER' => 'Προσθήκη υπενθύμισης',

    'LBL_RESCHEDULE' => 'Επαναπρογραμματισμός',
    'LBL_RESCHEDULE_COUNT' => 'Προσπάθειες Κλήσης',
    'LBL_RESCHEDULE_DATE' => 'Ημερομηνία',
    'LBL_RESCHEDULE_REASON' => 'Αιτία',
    'LBL_RESCHEDULE_ERROR1' => 'Παρακαλώ εισάγετε έγκυρη ημ/νία',
    'LBL_RESCHEDULE_ERROR2' => 'Παρακαλώ επιλέξτε ένα λόγο',
    'LBL_RESCHEDULE_PANEL' => 'Επαναπρογραμματισμός',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'Ακύρωση',
    'LBL_SAVE' => 'Αποθήκευση',

    'LBL_CALLS_RESCHEDULE' => 'Επαναπρογραμματισμός Κλήσεων',
    'LBL_LIST_STATUS'=>'Κατάσταση',
    'LBL_LIST_DATE_MODIFIED'=>'Ημερομηνία Τροποποίησης',
    'LBL_LIST_DUE_DATE'=>'Ημ/νία λήξης',
    'LBL_RESCHEDULED_BY'=>'από',
);
