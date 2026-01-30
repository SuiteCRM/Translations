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
    'LBL_ASSIGNED_TO_ID' => 'מזהה המשתמש המוקצה',
    'LBL_ASSIGNED_TO_NAME' => 'מוקצה למשתמש',
    'LBL_ID' => 'מזהה',
    'LBL_DATE_ENTERED' => 'נוצר בתאריך',
    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_MODIFIED' => 'שונה ע"י',
    'LBL_MODIFIED_NAME' => 'שונה על ידי (שם)',
    'LBL_CREATED' => 'נוצר ע"י',
    'LBL_DESCRIPTION' => 'תיאור',
    'LBL_DELETED' => 'נמחק',
    'LBL_NAME' => 'שם',
    'LBL_CREATED_USER' => 'נוצר על ידי המשתמש',
    'LBL_MODIFIED_USER' => 'שונה על ידי המשתמש',
    'LBL_LIST_NAME' => 'שם',
    'LBL_EDIT_BUTTON' => 'עריכה',
    'LBL_REMOVE' => 'הסרה',
    'LBL_LIST_FORM_TITLE' => 'רשימת אירועים',
    'LBL_MODULE_NAME' => 'ארוע',
    'LBL_MODULE_TITLE' => 'ארוע',
    'LBL_HOMEPAGE_TITLE' => 'האירוע שלי',
    'LNK_NEW_RECORD' => 'צור התראה',
    'LNK_LIST' => 'הצגת האירועים',
    'LBL_SEARCH_FORM_TITLE' => 'חפש אירוע',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'צפה בהסטוריה',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'פעילויות',
    'LBL_NEW_FORM_TITLE' => 'New Event',
    'LBL_LOCATION' => 'מיקום',
    'LBL_START_DATE' => 'תאריך התחלה',
    'LBL_END_DATE' => 'תאריך / שעת סיום:',
    'LBL_BUDGET' => 'תקציב',
    'LBL_DATE' => 'תאריך התחלה',
    'LBL_DATE_END' => 'תאריך סיום',
    'LBL_DURATION' => 'משך',
    'LBL_INVITE_TEMPLATES' => 'Email Invite Template',
    'LBL_INVITE_PDF' => 'שלח הזמנות',
    'LBL_EDITVIEW_PANEL1' => 'Event Details',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegates',
    'LBL_ACCEPT_REDIRECT' => 'Accept Redirect URL',
    'LBL_DECLINE_REDIRECT' => 'Decline Redirect URL',
    'LBL_SELECT_DELEGATES' => 'Select Delegates',
    'LBL_SELECT_DELEGATES_TITLE' => 'Select Delegates:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'רשימת מטרה',
    'LBL_SELECT_DELEGATES_TARGETS' => 'מטרות',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'אנשי קשר',
    'LBL_SELECT_DELEGATES_LEADS' => 'לידים',
    'LBL_MANAGE_DELEGATES' => 'Manage Delegates',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Manage Delegates:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Manage Acceptances',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Manage Acceptances:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'התקבלה',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'נדחה',
    'LBL_MANAGE_POPUP_ERROR' => 'No delegates have been selected.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'מוזמן',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'לא מוזמן',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'השתתפו',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'לא נכחו',
    'LBL_SUCCESS_MSG' => 'All invites have been sent successfully.',
    'LBL_ERROR_MSG_1' => 'All Linked contacts have already been Invited.',
    'LBL_ERROR_MSG_2' => 'Sending the invite emails has failed! Please check your email settings.',
    'LBL_ERROR_MSG_3' => 'More than 10 emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' emails have failed to send. Please check that all the contacts you are inviting have a valid email address. (See suitecrm.log)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'תבנית דוא"ל לא חוקית',
    'LBL_EMAIL_INVITE' => 'Email Invite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'אנשי קשר',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'מיקומים',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'לידים',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'מטרות',

    'LBL_HOURS_ABBREV' => 'ה',
    'LBL_MINSS_ABBREV' => 'מ',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegates',

    // Attendance report
    'LBL_CONTACT_NAME' => 'שם',
    'LBL_ACCOUNT_NAME' => 'החברה',
    'LBL_SIGNATURE' => 'חתימה',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'מוזמן',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'סטטוס',

    'LBL_ACTIVITY_STATUS' => 'Activity Status',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Event Locations from Events Title',
    // Email links
    'LBL_ACCEPT_LINK' => 'לקבל?',
    'LBL_DECLINE_LINK' => 'דחה',
    
);
