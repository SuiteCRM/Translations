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
    'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam ar ID',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Izveidošanas datums',
    'LBL_DATE_MODIFIED' => 'Modificēts',
    'LBL_MODIFIED' => 'Rediģēja',
    'LBL_MODIFIED_NAME' => 'Modificēja vārds',
    'LBL_CREATED' => 'Autors',
    'LBL_DESCRIPTION' => 'Apraksts',
    'LBL_DELETED' => 'Izdzēsts',
    'LBL_NAME' => 'Vārds:',
    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_MODIFIED_USER' => 'Modificēja',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_EDIT_BUTTON' => 'Rediģēt',
    'LBL_REMOVE' => 'Izņemt',
    'LBL_LIST_FORM_TITLE' => 'Event List',
    'LBL_MODULE_NAME' => 'Event',
    'LBL_MODULE_TITLE' => 'Event',
    'LBL_HOMEPAGE_TITLE' => 'My Event',
    'LNK_NEW_RECORD' => 'Create Event',
    'LNK_LIST' => 'View Events',
    'LBL_SEARCH_FORM_TITLE' => 'Search Event',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Aplūkot vēsturi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_NEW_FORM_TITLE' => 'New Event',
    'LBL_LOCATION' => 'Novietojums',
    'LBL_START_DATE' => 'start date',
    'LBL_END_DATE' => 'Beigu datums/laiks',
    'LBL_BUDGET' => 'Budžets',
    'LBL_DATE' => 'Sākuma datums:',
    'LBL_DATE_END' => 'Beigu datums',
    'LBL_DURATION' => 'Ilgums',
    'LBL_INVITE_TEMPLATES' => 'Email Invite Template',
    'LBL_INVITE_PDF' => 'Send Invites',
    'LBL_EDITVIEW_PANEL1' => 'Event Details',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Deliģēts (?)',
    'LBL_ACCEPT_REDIRECT' => 'Accept Redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Decline Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Select Delegates',
    'LBL_SELECT_DELEGATES_TITLE' => 'Select Delegates:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Mērķu saraksts',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Mērķi',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Ielūgtie',
    'LBL_SELECT_DELEGATES_LEADS' => 'Interesenti',
    'LBL_MANAGE_DELEGATES' => 'Manage Delegates',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Manage Delegates:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Manage Acceptances',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Manage Acceptances:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Apstiprināts',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Noraidīts',
    'LBL_MANAGE_POPUP_ERROR' => 'No delegates have been selected.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Uzaicināts',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nav uzaicināts',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Piedalījās',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Nav piedalījies',
    'LBL_SUCCESS_MSG' => 'All invites have been sent successfully.',
    'LBL_ERROR_MSG_1' => 'All Linked contacts have already been Invited.',
    'LBL_ERROR_MSG_2' => 'Sending the invite emails has failed! Please check your email settings.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Invalid Email Template',
    'LBL_EMAIL_INVITE' => 'Email Invite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Ielūgtie',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Atrašanās vietas',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Interesenti',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Mērķi',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Deliģēts (?)',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Vārds:',
    'LBL_ACCOUNT_NAME' => 'Uzņēmums:',
    'LBL_SIGNATURE' => 'Paraksts',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Uzaicināts',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Statuss',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'Apstiprināt',
    'LBL_DECLINE_LINK' => 'Noraidīt',
    
);
