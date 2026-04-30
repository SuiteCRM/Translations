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
    'LBL_MODULE_NAME' => 'Calls',
    'LBL_MODULE_TITLE' => 'Hívások: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Hívás keresése',
    'LBL_LIST_FORM_TITLE' => 'Híváslista',
    'LBL_NEW_FORM_TITLE' => 'Hívások ütemezése',
    'LBL_LIST_CLOSE' => 'Bezárás',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'Kapcsolattartó',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => 'Kapcsolódó azonosító',
    'LBL_LIST_DATE' => 'Start Date',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'Emlékeztető:',
    'LBL_CONTACT_NAME' => 'Kapcsolat:',
    'LBL_DESCRIPTION' => 'Üzenet szövege:',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Irány:',
    'LBL_DATE' => 'Start Date:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => 'Hossza órák:',
    'LBL_DURATION_MINUTES' => 'Hossza percek:',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Kapcsolódó:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ütemezés',
    'LBL_ADD_INVITEE' => 'Meghívottak hozzáadása',
    'LBL_NAME' => 'Név',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'Felugró',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail az összes meghívott részére',
    'LBL_EMAIL_REMINDER' => 'E-mail emlékeztető',
    'LBL_EMAIL_REMINDER_TIME' => 'E-mail emlékeztető időpontja',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => 'Emlékeztetés ideje',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail emlékeztető elküldve',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'Új lehetőség',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Users',
    'LBL_OUTLOOK_ID' => 'Outlook azonosító',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_LIST_MY_CALLS' => 'Hívásaim',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_ASSIGNED_TO_ID' => 'Felelős felhasználó',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Link elfogadása',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Meghívott létrehozása',
    'LBL_CREATE_CONTACT' => 'kapcsolattartóként',
    'LBL_CREATE_LEAD' => 'Érdeklődőként',
    'LBL_CREATE_AND_ADD' => 'létrhozás és hozzáadás',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sajnálom, nem találtam erőforrást. Kérem adjon meg legalább egy meghívottat alább.',
    'LBL_NO_ACCESS' => 'Nincs hozzáférése a $module létrehozásához',

    'LBL_REPEAT_TYPE' => 'Ismétlődés típusa',
    'LBL_REPEAT_INTERVAL' => 'Ismétlődési időköz',
    'LBL_REPEAT_DOW' => 'Ismétlődés Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Ismétlődések száma',
    'LBL_REPEAT_PARENT_ID' => 'Ismétlődés szülő ID',
    'LBL_RECURRING_SOURCE' => 'Ismétlődés forrása',

    'LBL_SYNCED_RECURRING_MSG' => 'Ez a hívás egy másik rendszerből érkezett és SuiteCRM-el szinkronizált. Módosításokhoz, lépjen be az eredeti híváshoz a másik rendszerben. A másik rendszerben végzett módosítások szinkronizálhatók ehhez a bejegyzéshez.',

    // for reminders
    'LBL_REMINDERS' => 'Emlékeztetők',
    'LBL_REMINDERS_ACTIONS' => 'Műveletek:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'E-mail a meghívottaknak',
    'LBL_REMINDERS_WHEN' => 'mikor:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Emlékeztető eltávolítása',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Összes meghívott hozzáadása',
    'LBL_REMINDERS_ADD_REMINDER' => 'Emlékeztető hozzáadása',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'Indíték:',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Hívási kísérletek története',
    'LBL_CANCEL' => 'Cancel',
    'LBL_SAVE' => 'Save',

    'LBL_CALLS_RESCHEDULE' => 'Hívások átütemezése',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Módosítás dátuma',
    'LBL_LIST_DUE_DATE'=>'Due Date',
    'LBL_RESCHEDULED_BY'=>'által',
);
