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
    'LBL_REPLY_ADDR' => 'השב לכתובת',
    'LBL_REPLY_NAME' => 'השב ל-שם',

    'LBL_MODULE_NAME' => 'מייל שיווקי',
    'LBL_MODULE_TITLE' => 'מייל שיווקי:בית',
    'LBL_LIST_FORM_TITLE' => 'קמפיין מיילים שיווקי',
    'LBL_NAME' => 'שם:',
    'LBL_LIST_NAME' => 'שם',
    'LBL_LIST_FROM_ADDR' => 'מייל השולח',
    'LBL_LIST_DATE_START' => 'תאריך התחלה',
    'LBL_LIST_TEMPLATE_NAME' => 'טמפלייט המייל',
    'LBL_LIST_STATUS' => 'סטטוס',
    'LBL_STATUS' => 'סטטוס',
    'LBL_STATUS_TEXT' => 'סטטוס',
    'LBL_TEMPLATE_NAME' => 'שם התבנית',
    'LBL_DATE_ENTERED' => 'תאריך כניסה',
    'LBL_DATE_MODIFIED' => 'שונה בתאריך',
    'LBL_MODIFIED' => 'שונה ע"י:',
    'LBL_CREATED' => 'נוצר ע"י:',
    'LBL_MESSAGE_FOR' => 'שלח הודעה זו אל:',

    'LBL_FROM_NAME' => 'שם השולח:',
    'LBL_FROM_ADDR' => 'מייל השולח:',
    'LBL_DATE_START' => 'תאריך התחלה',
    'LBL_TIME_START' => 'שעת התחלה ',
    'LBL_START_DATE_TIME' => 'תאריך ושעת התחלה:',
    'LBL_TEMPLATE' => 'טמפלייט של המייל:',

    'LBL_MODIFIED_BY' => 'שונה ע"י:',
    'LBL_CREATED_BY' => 'נוצר ע"י:',

    'LNK_NEW_CAMPAIGN' => 'קמפיין נוצר',
    'LNK_CAMPAIGN_LIST' => 'קמפיינים',
    'LNK_NEW_PROSPECT_LIST' => 'צור רשימת מטרות',
    'LNK_PROSPECT_LIST_LIST' => 'רשימת מטרות',
    'LNK_NEW_PROSPECT' => 'צור מטרה',
    'LNK_PROSPECT_LIST' => 'מטרות',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'מייל שיווקי',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'צור',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'עריכה',
    'LBL_FROM_MAILBOX' => 'מתיבת מייל',
    'LBL_FROM_MAILBOX_NAME' => 'השתמש בתיבת מייל:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account:',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'רשימת מטרות',
    'LBL_ALL_PROSPECT_LISTS' => 'כל רשימות המוגדרות בקמפיין',
    'LBL_RELATED_PROSPECT_LISTS' => 'כל הרשימות המוגדרות להודעה זו',
    'LBL_PROSPECT_LIST_NAME' => 'רשימת שמות מוגדרת',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Targeted Lists',
    'LBL_MODULE_SEND_TEST' => 'Campaign: Send Test',
    'LBL_MODULE_SEND_EMAILS' => 'Campaign: Send Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Please select the campaign messages that you would like to test:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Please select the campaign messages that you would like to schedule for distribution on the specified start date and time:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'שלח [Alt+S]',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'שלח [Alt+S]',
    'LBL_ERROR_ON_MARKETING' => 'Missing required field(s)',

    'LBL_CAMPAIGN_ID' => 'זהות קמפיין',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Outbound Email Account ID',
    'LBL_EMAIL_TEMPLATE' => 'טמפלייט המייל',
    'LBL_PROSPECT_LISTS' => 'Prospect Lists',

);
