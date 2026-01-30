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
    'LBL_MODULE_NAME' => 'Deiak',
    'LBL_MODULE_TITLE' => 'Deiak: hasiera',
    'LBL_SEARCH_FORM_TITLE' => 'Deien bilaketa',
    'LBL_LIST_FORM_TITLE' => 'Deien zerrenda',
    'LBL_NEW_FORM_TITLE' => 'Deien programazioa',
    'LBL_LIST_CLOSE' => 'Itxi',
    'LBL_LIST_SUBJECT' => 'Gaia',
    'LBL_LIST_CONTACT' => 'Kontaktuak',
    'LBL_LIST_RELATED_TO' => 'Zeri buruzkoa',
    'LBL_LIST_RELATED_TO_ID' => 'Related to ID',
    'LBL_LIST_DATE' => 'Hasiera-data',
    'LBL_LIST_DIRECTION' => 'Helbidea',
    'LBL_SUBJECT' => 'Gaia',
    'LBL_REMINDER' => 'Oharra',
    'LBL_CONTACT_NAME' => 'Kontaktua',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_STATUS' => 'Egoera',
    'LBL_DIRECTION' => 'Helbidea',
    'LBL_DATE' => 'Hasiera-data',
    'LBL_DURATION' => 'Iraupena',
    'LBL_DURATION_HOURS' => 'Iraupen-orduak',
    'LBL_DURATION_MINUTES' => 'Iraupen-minutuak',
    'LBL_HOURS_MINUTES' => '(orduak/minutuak)',
    'LBL_DATE_TIME' => 'Hasiera-data eta ordua ',
    'LBL_TIME' => 'Hasiera-ordua',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Deia planifikatu',
    'LNK_NEW_MEETING' => 'Bilera planifikatu',
    'LNK_CALL_LIST' => 'Deiak',
    'LNK_IMPORT_CALLS' => 'Inportatu deiak',
    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_INVITEE' => 'Bertaratutakoak',
    'LBL_RELATED_TO' => 'Zeri buruzkoa',
    'LNK_NEW_APPOINTMENT' => 'Deien programazioa',
    'LBL_SCHEDULING_FORM_TITLE' => 'Plangintza',
    'LBL_ADD_INVITEE' => 'Gonbidatuak gehitu',
    'LBL_NAME' => 'Izena',
    'LBL_FIRST_NAME' => 'Izena',
    'LBL_LAST_NAME' => 'Abizena',
    'LBL_EMAIL' => 'Posta elektronikoak',
    'LBL_PHONE' => 'Telefonoa',
    'LBL_REMINDER_POPUP' => 'Leiho gainerakorra',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Email Reminder Time',
    'LBL_SEND_BUTTON_TITLE' => 'Gonbidapenak bidali ',
    'LBL_SEND_BUTTON_LABEL' => 'Gonbidapenak bidali ',
    'LBL_DATE_END' => 'Amaiera-data',
    'LBL_REMINDER_TIME' => 'Abisu-ordua',
    'LBL_EMAIL_REMINDER_SENT' => 'Email reminder sent',
    'LBL_SEARCH_BUTTON' => 'Bilaketa',
    'LBL_ADD_BUTTON' => 'Gehitu',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Deiak',
    'LNK_SELECT_ACCOUNT' => 'Kontua aukeratu',
    'LNK_NEW_ACCOUNT' => 'Kontu berria',
    'LNK_NEW_OPPORTUNITY' => 'Aukera berria',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Hautagaiak',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_USERS_SUBPANEL_TITLE' => 'Erabiltzaileak',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Nongo partaidea',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Oharrak',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Esleitutako erabiltzailearen izena',
    'LBL_LIST_MY_CALLS' => 'My Calls',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitutako erabiltzailearen izena',
    'LBL_ASSIGNED_TO_ID' => 'Nori esleitua',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Kendu',
    'LBL_ACCEPT_STATUS' => 'Egoera',
    'LBL_ACCEPT_LINK' => 'Accept Link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'As Lead',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Ezeztatu',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Repeat Count',
    'LBL_REPEAT_PARENT_ID' => 'Repeat Parent ID',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'This call originated in another system and was synced to SuiteCRM. To make changes, go to the original call within the other system. Changes made in the other system can be synced to this record.',

    // for reminders
    'LBL_REMINDERS' => 'Gogorarazleak',
    'LBL_REMINDERS_ACTIONS' => 'Ekintzak:',
    'LBL_REMINDERS_POPUP' => 'Leiho gainerakorra',
    'LBL_REMINDERS_EMAIL' => 'Mezu elektronikoa bidali parte-hartzaileei',
    'LBL_REMINDERS_WHEN' => 'Noiz:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Gogorarazlea ezabatu',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Gonbidatu guztiak gehitu',
    'LBL_REMINDERS_ADD_REMINDER' => 'Gogorarazlea gehitu',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Data',
    'LBL_RESCHEDULE_REASON' => 'Reason',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Call Attempt History',
    'LBL_CANCEL' => 'Ezeztatu',
    'LBL_SAVE' => 'Gorde',

    'LBL_CALLS_RESCHEDULE' => 'Calls Reschedule',
    'LBL_LIST_STATUS'=>'Egoera',
    'LBL_LIST_DATE_MODIFIED'=>'Aldaketa-data',
    'LBL_LIST_DUE_DATE'=>'Iraungitze-data',
    'LBL_RESCHEDULED_BY'=>'por',
);
