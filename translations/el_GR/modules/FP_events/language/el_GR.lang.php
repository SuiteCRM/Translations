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
    'LBL_ASSIGNED_TO_NAME' => 'Υπεύθυνος',
    'LBL_ID' => 'Α/Α',
    'LBL_DATE_ENTERED' => 'Ημ/νία καταχώρησης',
    'LBL_DATE_MODIFIED' => 'Ημερομηνία Τροποποίησης',
    'LBL_MODIFIED' => 'Τροποποιήθηκε από',
    'LBL_MODIFIED_NAME' => 'Τροποποίηση ανά Όνομα',
    'LBL_CREATED' => 'Δημιουργήθηκε από',
    'LBL_DESCRIPTION' => 'Περιγραφή',
    'LBL_DELETED' => 'Διαγράφηκε',
    'LBL_NAME' => 'Όνομα',
    'LBL_CREATED_USER' => 'Δημιουργήθηκε από',
    'LBL_MODIFIED_USER' => 'τροποποίηση από',
    'LBL_LIST_NAME' => 'Όνομα',
    'LBL_EDIT_BUTTON' => 'Επεξεργασία',
    'LBL_REMOVE' => 'Αφαίρεση',
    'LBL_LIST_FORM_TITLE' => 'Λίστα Γεγονότων',
    'LBL_MODULE_NAME' => 'Γεγονός',
    'LBL_MODULE_TITLE' => 'Γεγονός',
    'LBL_HOMEPAGE_TITLE' => 'Τα Γεγονότα Μου',
    'LNK_NEW_RECORD' => 'Δημιουργία Γεγονότος',
    'LNK_LIST' => 'Προβολή Γεγονότος',
    'LBL_SEARCH_FORM_TITLE' => 'Εύρεση Γεγονότος',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Προβολή Ιστορικού',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Δραστηριότητες',
    'LBL_NEW_FORM_TITLE' => 'Νέο Γεγονός',
    'LBL_LOCATION' => 'Τοποθεσία',
    'LBL_START_DATE' => 'ημερομηνία έναρξης',
    'LBL_END_DATE' => 'Λήξη Ημερομηνία/Ώρα',
    'LBL_BUDGET' => 'Προϋπολογισμό',
    'LBL_DATE' => 'Ημ/νία έναρξης',
    'LBL_DATE_END' => 'Ημερομηνία Λήξης',
    'LBL_DURATION' => 'Διάρκεια',
    'LBL_INVITE_TEMPLATES' => 'Email Invite Template',
    'LBL_INVITE_PDF' => 'Αποστολή Προσκλήσεων',
    'LBL_EDITVIEW_PANEL1' => 'Λεπτομέρειες Γεγονότος',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Αντιπρόσωποι',
    'LBL_ACCEPT_REDIRECT' => 'Accept Redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Decline Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Select Delegates',
    'LBL_SELECT_DELEGATES_TITLE' => 'Select Delegates:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Λίστα Στόχων',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Στόχοι',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Επαφές',
    'LBL_SELECT_DELEGATES_LEADS' => 'Δυνητικοί Πελάτες',
    'LBL_MANAGE_DELEGATES' => 'Manage Delegates',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Manage Delegates:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Manage Acceptances',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Manage Acceptances:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Αποδεκτό',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Απορριπτέα',
    'LBL_MANAGE_POPUP_ERROR' => 'No delegates have been selected.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Προσκεκλημένοι',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Απρόσκλητος',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Παρεβρέθησαν ',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Δεν παρεβρέθησαν',
    'LBL_SUCCESS_MSG' => 'Όλες οι προσκλήσεις στάλθηκαν επιτυχώς',
    'LBL_ERROR_MSG_1' => 'Όλες οι συνδεδεμένες επαφές έχουν ήδη προσκληθεί',
    'LBL_ERROR_MSG_2' => 'Sending the invite emails has failed! Please check your email settings.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Invalid Email Template',
    'LBL_EMAIL_INVITE' => 'Email Invite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Επαφές',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Τοποθεσίες',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Δυνητικοί Πελάτες',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Στόχοι',

    'LBL_HOURS_ABBREV' => 'ω',
    'LBL_MINSS_ABBREV' => 'λ',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Αντιπρόσωποι',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Όνομα',
    'LBL_ACCOUNT_NAME' => 'Εταιρεία',
    'LBL_SIGNATURE' => 'Υπογραφή',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Προσκεκλημένοι',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Κατάσταση',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'Αποδεκτή',
    'LBL_DECLINE_LINK' => 'Απορριπτέα',
    
);
