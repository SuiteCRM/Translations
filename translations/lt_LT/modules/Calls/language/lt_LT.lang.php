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
    'LBL_MODULE_TITLE' => 'Skambučiai: Pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Skambučių paieška',
    'LBL_LIST_FORM_TITLE' => 'Skambučių sąrašas',
    'LBL_NEW_FORM_TITLE' => 'Sukurti susitikimą',
    'LBL_LIST_CLOSE' => 'Užbaigti',
    'LBL_LIST_SUBJECT' => 'Tema:',
    'LBL_LIST_CONTACT' => 'Adresatas',
    'LBL_LIST_RELATED_TO' => 'Susijęs su',
    'LBL_LIST_RELATED_TO_ID' => 'Susiję su ID',
    'LBL_LIST_DATE' => 'Pražios data',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LBL_REMINDER' => 'Priminimas:',
    'LBL_CONTACT_NAME' => 'Kontaktas:',
    'LBL_DESCRIPTION' => 'Description:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_DIRECTION' => 'Kryptis:',
    'LBL_DATE' => 'Pradžios data:',
    'LBL_DURATION' => 'Trukmė',
    'LBL_DURATION_HOURS' => 'Trukmė valandomis:',
    'LBL_DURATION_MINUTES' => 'Trukmė minutėmis:',
    'LBL_HOURS_MINUTES' => '(val/min)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Suplanuoti skambutį',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'Įrašo numeris turi būti nurodytas norint ištrinti klientą.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Susijęs su:',
    'LNK_NEW_APPOINTMENT' => 'Sukurti paskyrimą',
    'LBL_SCHEDULING_FORM_TITLE' => 'Suplanuojama',
    'LBL_ADD_INVITEE' => 'Pridėti dalyvius',
    'LBL_NAME' => 'Vardas',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'el.paštas',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'Iššokantis langas',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Siųsti El. paštu visiems pakviestiesiems',
    'LBL_EMAIL_REMINDER' => 'El. Pašto Priminimas',
    'LBL_EMAIL_REMINDER_TIME' => 'El. paštu Priminimo Laikas',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'Pabaigos laikas',
    'LBL_REMINDER_TIME' => 'Priminimo laikas',
    'LBL_EMAIL_REMINDER_SENT' => 'El. paštu priminimas siųstas',
    'LBL_SEARCH_BUTTON' => 'Paieška',
    'LBL_ADD_BUTTON' => 'Įdėti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Calls',
    'LNK_SELECT_ACCOUNT' => 'Pasirinkti klientą',
    'LNK_NEW_ACCOUNT' => 'Nauja paskyra',
    'LNK_NEW_OPPORTUNITY' => 'Naujas pardavimas',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Galimybės',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kliento kontaktai',
    'LBL_USERS_SUBPANEL_TITLE' => 'Vartotojas',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_LIST_MY_CALLS' => 'Mano skambučiai',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ASSIGNED_TO_ID' => 'Atsakingas',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Išmesti',
    'LBL_ACCEPT_STATUS' => 'Patvirtinti',
    'LBL_ACCEPT_LINK' => 'Priimti Nuorodą',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Sukurti pakvietimą',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'Kaip Potencialūs kontaktai',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'Pakartokite Tipą',
    'LBL_REPEAT_INTERVAL' => 'Pakartokite Intervalą',
    'LBL_REPEAT_DOW' => 'Pakartokite Eilutę',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Kartojimų skaičius',
    'LBL_REPEAT_PARENT_ID' => 'Pakartokite Šakninio ID',
    'LBL_RECURRING_SOURCE' => 'Pasikartojančių Šaltinis',

    'LBL_SYNCED_RECURRING_MSG' => 'Šis skambutis buvo įvykdytas kitoje sistemoje ir buvo sinchronizuotas. Norėdami atlikti pakeitimus, turėtumėte naudoti sistemą kuria naudojantis šis skambutis buvo įvykdytas. Atlikti pakeitimai kitoje sistemoje galėtų būti sinchronizuojami šiam įrašui.',

    // for reminders
    'LBL_REMINDERS' => 'Priminimai',
    'LBL_REMINDERS_ACTIONS' => 'Veiksmai:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Siųsti žinutę el. paštu visiems pakviestiesiems',
    'LBL_REMINDERS_WHEN' => 'Kada:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Pašalinti priminimą',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Įtraukti visus pakviestuosius',
    'LBL_REMINDERS_ADD_REMINDER' => 'Pridėti priminimą',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'Priežastis',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Skambučio Vykdymo Istorija',
    'LBL_CANCEL' => 'Cancel',
    'LBL_SAVE' => 'Išsaugoti',

    'LBL_CALLS_RESCHEDULE' => 'Skambučių perplanavimas',
    'LBL_LIST_STATUS'=>'Statusas:',
    'LBL_LIST_DATE_MODIFIED'=>'Redagavimo data',
    'LBL_LIST_DUE_DATE'=>'Atlikimo data',
    'LBL_RESCHEDULED_BY'=>'by',
);
