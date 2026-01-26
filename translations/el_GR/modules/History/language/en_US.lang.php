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
    'LBL_MODULE_NAME' => 'Ιστορικό',
    'LBL_MODULE_TITLE' => 'Ιστορικο: Αρχικη',
    'LBL_SEARCH_FORM_TITLE' => 'Αναζήτηση ιστορικού',
    'LBL_LIST_FORM_TITLE' => 'Ιστορικό',
    'LBL_LIST_SUBJECT' => 'Θέμα',
    'LBL_LIST_CONTACT' => 'Επαφή',
    'LBL_LIST_RELATED_TO' => 'Σχετίζεται με',
    'LBL_LIST_DATE' => 'Ημερομηνία',
    'LBL_LIST_CLOSE' => 'Κλείσιμο',
    'LBL_SUBJECT' => 'Θέμα:',
    'LBL_STATUS' => 'Κατάσταση:',
    'LBL_LOCATION' => 'Τοποθεσία:',
    'LBL_DATE_TIME' => 'Ημ/νία & ώρα έναρξης:',
    'LBL_DATE' => 'Ημ/νία έναρξης:',
    'LBL_TIME' => 'Ώρα έναρξης:',
    'LBL_DURATION' => 'Διάρκεια:',
    'LBL_HOURS_MINS' => '(ώρες/λεπτά)',
    'LBL_CONTACT_NAME' => 'Όνομα επαφής: ',
    'LBL_DESCRIPTION' => 'Περιγραφή:',
    'LNK_NEW_CALL' => 'Προγραμματισμός κλήσης',
    'LNK_NEW_MEETING' => 'Προγραμματισμός Συνάντησης',
    'LNK_NEW_TASK' => 'Δημιουργία Εργασίας',
    'LNK_NEW_NOTE' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LNK_NEW_EMAIL' => 'Αρχειοθέτηση email',
    'LNK_CALL_LIST' => 'Τηλεφωνικές Κλήσεις',
    'LNK_MEETING_LIST' => 'Συναντήσεις',
    'LNK_TASK_LIST' => 'Εργασίες',
    'LNK_NOTE_LIST' => 'Σημειώσεις',
    'ERR_DELETE_RECORD' => 'Απαιτείται αριθμός εγγραφής για τη διαγραφή του λογαριασμού',
    'LBL_INVITEE' => 'Συμμετέχοντες',
    'LBL_LIST_DIRECTION' => 'Κατεύθυνση',
    'LBL_DIRECTION' => 'Κατεύθυνση',
    'LNK_NEW_APPOINTMENT' => 'Νεο RDV',
    'LNK_VIEW_CALENDAR' => 'Σήμερα',
    'LBL_OPEN_ACTIVITIES' => 'Άνοιχτές δραστηριότητες',
    'LBL_HISTORY' => 'Ιστορικό',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Δημιουργία Εργασίας',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Δημιουργία Εργασίας',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Προγραμματισμός Συνάντησης',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Προγραμματισμός Συνάντησης',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Προγραμματισμός κλήσης',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Δημιουργία Σημείωσης ή Συνημμένου',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Αρχειοθέτηση email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Αρχειοθέτηση email',
    'LBL_LIST_STATUS' => 'Κατάσταση',
    'LBL_LIST_DUE_DATE' => 'Ημ/νία λήξης',
    'LBL_LIST_LAST_MODIFIED' => 'Τελευταία τροποποίηση',
    'LNK_IMPORT_NOTES' => 'Εισαγωγή σημειώσεων',
    'LBL_ACCEPT_THIS' => 'Αποδοχή;',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ιστορικό',

    'LBL_CATEGORY' => 'Κατηγορία',
    'LBL_LIST_CATEGORY' => 'Κατηγορία',
);
