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
    'LBL_ACCEPT_THIS' => 'Αποδοχή;',
    'LBL_ADD_BUTTON' => 'Προσθήκη',
    'LBL_ADD_INVITEE' => 'Προσθηκη συμμετεχοντων',
    'LBL_CONTACT_NAME' => 'Επαφή:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Επαφές',
    'LBL_CREATED_BY' => 'Δημιουργήθηκε από',
    'LBL_DATE_END' => 'Ημερομηνία Λήξης',
    'LBL_DATE_TIME' => 'Ημ/νία & ώρα έναρξης:',
    'LBL_DATE' => 'Ημ/νία έναρξης:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Συναντήσεις',
    'LBL_DESCRIPTION' => 'Περιγραφή:',
    'LBL_DIRECTION' => 'Κατέυθυνση:',
    'LBL_DURATION_HOURS' => 'Διάρκεια σε ώρες:',
    'LBL_DURATION_MINUTES' => 'Διάρκεια σς λεπτά:',
    'LBL_DURATION' => 'Διάρκεια:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'Όνομα',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Σημειώσεις',
    'LBL_HOURS_ABBREV' => 'ω',
    'LBL_HOURS_MINS' => '(ώρες/λεπτά)',
    'LBL_INVITEE' => 'Συμμετέχοντες',
    'LBL_LAST_NAME' => 'Επώνυμο',
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_LIST_CLOSE' => 'Κλείσιμο',
    'LBL_LIST_CONTACT' => 'Επαφή',
    'LBL_LIST_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_LIST_DATE' => 'Ημ/νία έναρξης',
    'LBL_LIST_DIRECTION' => 'Κατεύθυνση',
    'LBL_LIST_DUE_DATE' => 'Ημ/νία λήξης',
    'LBL_LIST_FORM_TITLE' => 'Καταλογος συναντησεων',
    'LBL_LIST_MY_MEETINGS' => 'Οι συναντησεις μου',
    'LBL_LIST_RELATED_TO' => 'Σχετίζεται με',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_SUBJECT' => 'Θέμα',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Δυνητικοί Πελάτες',
    'LBL_LOCATION' => 'Τοποθεσία:',
    'LBL_MINSS_ABBREV' => 'λ',
    'LBL_MODIFIED_BY' => 'Τροποποιήθηκε από',
    'LBL_MODULE_NAME' => 'Συναντήσεις',
    'LBL_MODULE_TITLE' => 'Συναντησεις: Αρχικη',
    'LBL_NAME' => 'Όνομα',
    'LBL_NEW_FORM_TITLE' => 'Προγραμματισμός κλήσης',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Τηλέφωνο γραφείου:',
    'LBL_REMINDER_TIME' => 'Ώρα υπενθύμισης',
    'LBL_EMAIL_REMINDER_SENT' => 'Το Email Υπενθύμισης στάλθηκε',
    'LBL_REMINDER' => 'Υπενθύμηση:',
    'LBL_REMINDER_POPUP' => 'Αναδυόμενα Παράθυρα',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Αποστολή Email σε όλους του συμμετέχοντες',
    'LBL_EMAIL_REMINDER' => 'Email Υπενθύμισης',
    'LBL_EMAIL_REMINDER_TIME' => 'Ώρα Email Υπενθύμισης',
    'LBL_REMOVE' => 'Αφαίρεση',
    'LBL_SCHEDULING_FORM_TITLE' => 'Χρονοδιαγραμα',
    'LBL_SEARCH_BUTTON' => 'Αναζήτηση',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση συναντήσεων',
    'LBL_SEND_BUTTON_LABEL' => 'Αποστολή προσκλήσεων',
    'LBL_SEND_BUTTON_TITLE' => 'Αποστολή προσκλήσεων',
    'LBL_STATUS' => 'Κατάσταση:',
    'LBL_TYPE' => 'Τύπος Συνάντησης',
    'LBL_PASSWORD' => 'Κωδικός Πρόσβασης Συνάντησης',
    'LBL_URL' => 'Δημιουργία/Σύνδεση σε Συνάντηση',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Προβολή URL',
    'LBL_CREATOR' => 'Δημιουργός Συνάντησης',
    'LBL_EXTERNALID' => 'External App ID',
    'LBL_SUBJECT' => 'Θέμα:',
    'LBL_TIME' => 'Ώρα έναρξης:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Χειριστές',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Γονικός Τύπος',
    'LBL_PARENT_ID' => 'Γονικός Κωδικός',
    'LNK_MEETING_LIST' => 'Συναντήσεις',
    'LNK_NEW_APPOINTMENT' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_IMPORT_MEETINGS' => 'Εισαγωγή Συναντήσεων',

    'LBL_CREATED_USER' => 'Δημιουργημένος Χειριστής',
    'LBL_MODIFIED_USER' => 'Τροποποιημένος Χειριστής',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'Επισκόπηση', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Join Meeting',
    'LBL_ACCEPT_STATUS' => 'Αποδοχή κατάστασης',
    'LBL_ACCEPT_LINK' => 'Αποδοχή συνδέσμου',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'You are not able to join this meeting because you are not an Invitee.',
    'LBL_EXTNOT_RECORD_LINK' => 'Προβολή συνάντησης',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'You cannot start this meeting because you are not an Administrator or the owner of the meeting.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Δημιουργία προσκεκλημένου',
    'LBL_CREATE_CONTACT' => 'Ως Επαφή',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'As Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Δημιουργία και Προσθήκη',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Ακύρωση',
    'LBL_EMPTY_SEARCH_RESULT' => 'Συγγνώμη, δεν βρέθηκαν αποτελέσματα. Παρακαλώ δημιουργήστε έναν προσκεκλημένο παρακάτω.',
    'LBL_NO_ACCESS' => 'Δεν έχετε πρόσβαση για να δημιουργήσετε $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Επαναλάψη μέχρι',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Σχετικό με: ',

    // for reminders
    'LBL_REMINDERS' => 'Υπενθυμίσεις:',
    'LBL_REMINDERS_ACTIONS' => 'Ενέργειες:',
    'LBL_REMINDERS_POPUP' => 'Αναδυόμενα Παράθυρα',
    'LBL_REMINDERS_EMAIL' => 'Προσκεκλημένοι Email',
    'LBL_REMINDERS_WHEN' => 'Πότε:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Κατάργηση ειδοποίησης',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Προσθέστε όλους τους προσκεκλημένους',
    'LBL_REMINDERS_ADD_REMINDER' => 'Προσθήκη υπενθύμισης',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
