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
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Date Created',
    'LBL_DATE_MODIFIED' => 'Date Modified',
    'LBL_MODIFIED' => 'Modified By',
    'LBL_MODIFIED_NAME' => 'Modified By Name',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Name',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modified by User',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remove',
    'LBL_LIST_FORM_TITLE' => 'Event List',
    'LBL_MODULE_NAME' => 'Event',
    'LBL_MODULE_TITLE' => 'Event',
    'LBL_HOMEPAGE_TITLE' => 'My Event',
    'LNK_NEW_RECORD' => 'Create Event',
    'LNK_LIST' => 'View Events',
    'LBL_SEARCH_FORM_TITLE' => 'Search Event',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'View History',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_NEW_FORM_TITLE' => 'New Event',
    'LBL_LOCATION' => 'Location',
    'LBL_START_DATE' => 'start date',
    'LBL_END_DATE' => 'End Date/Time',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Start Date',
    'LBL_DATE_END' => 'End Date',
    'LBL_DURATION' => 'Duration',
    'LBL_INVITE_TEMPLATES' => 'Էլ-փոստի հրավերի ձևանմուշ',
    'LBL_INVITE_PDF' => 'Send Invites',
    'LBL_EDITVIEW_PANEL1' => 'Իրադարձության մանրամասներ',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegates',
    'LBL_ACCEPT_REDIRECT' => 'Ներկայացնել URL վերահղումը',
    'LBL_DECLINE_REDIRECT' => 'Մերժել URL վերահղումը',
    'LBL_SELECT_DELEGATES' => 'Ընտրել պատվիրակներին',
    'LBL_SELECT_DELEGATES_TITLE' => 'Ընտրել պատվիրակներին․-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Target List',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Targets',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contacts',
    'LBL_SELECT_DELEGATES_LEADS' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_MANAGE_DELEGATES' => 'Կառավարել պատվիրակներին',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Կառավարել պատվիրակներին․-',
    'LBL_MANAGE_ACCEPTANCES' => 'Կառավարել ընդունելությունները',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Կառավարել ընդունելությունները․-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Accepted',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Declined',
    'LBL_MANAGE_POPUP_ERROR' => 'Պատվիրակները ընտրված չեն։',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Invited',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Not Invited',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Attended',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Not Attended',
    'LBL_SUCCESS_MSG' => 'Բոլոր հրավերները հաջողությամբ ուղարկվել են։',
    'LBL_ERROR_MSG_1' => 'Բոլոր միացված կոնտակտները արդեն հրավիրվել են։',
    'LBL_ERROR_MSG_2' => 'Հրավեր-նամակների ուղարկումը ձախողվեց։ Խնդրում ենք ստուգել Ձեր էլ-փոստի կարգավորումները:',
    'LBL_ERROR_MSG_3' => 'Ավելի քան 10 նամակ-հրավեր չի հաջողվել ուղարկել: Խնդրում ենք համոզվել, որ բոլոր հրավիրված կոնտակտների էլ-փոստի հասցեները ճիշտ են նշված: (Նայիր sitecore.log ֆայլում)',
    'LBL_ERROR_MSG_4' => ' նամակները չի հաջողվել ուղարկել: Խնդրում ենք համոզվել,որ բոլոր հրավիրված կոնտակտների էլ-փոստի հասցեն ճիշտ է նշված: (Նայիր sitecore.log ֆայլում)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Սխալ էլ-փոստի ձևանմուշ',
    'LBL_EMAIL_INVITE' => 'Էլ-փոստի նամակ-հրավեր',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contacts',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locations',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Պոտենցիալ կլիենտներ (առաջնորդներ)',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Targets',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegates',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Name',
    'LBL_ACCOUNT_NAME' => 'Company',
    'LBL_SIGNATURE' => 'Signature',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Invited',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'Accept',
    'LBL_DECLINE_LINK' => 'Decline',
    
);
