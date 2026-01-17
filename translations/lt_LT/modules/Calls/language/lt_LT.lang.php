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
    'LBL_MODULE_NAME' => 'Skambučiai',
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
    'LBL_LIST_DIRECTION' => 'Kryptis',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LBL_REMINDER' => 'Priminimas:',
    'LBL_CONTACT_NAME' => 'Kontaktas:',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_STATUS' => 'Būsena:',
    'LBL_DIRECTION' => 'Kryptis:',
    'LBL_DATE' => 'Pradžios laikas:',
    'LBL_DURATION' => 'Trukmė:',
    'LBL_DURATION_HOURS' => 'Trukmė valandomis:',
    'LBL_DURATION_MINUTES' => 'Trukmė minutėmis:',
    'LBL_HOURS_MINUTES' => '(val/min)',
    'LBL_DATE_TIME' => 'Pradžios data ir laikas:',
    'LBL_TIME' => 'Pradžios laikas:',
    'LBL_HOURS_ABBREV' => 'v',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Registruoti skambutį',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_CALL_LIST' => 'Skambučiai',
    'LNK_IMPORT_CALLS' => 'Importuoti skambučius',
    'ERR_DELETE_RECORD' => 'Įrašas turi būti nurodytas norint ištrinti klientą.',
    'LBL_INVITEE' => 'Dalyviai',
    'LBL_RELATED_TO' => 'Susijęs su:',
    'LNK_NEW_APPOINTMENT' => 'Sukurti susitikimą',
    'LBL_SCHEDULING_FORM_TITLE' => 'Suplanuojama',
    'LBL_ADD_INVITEE' => 'Pridėti dalyvius',
    'LBL_NAME' => 'Vardas',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Pavardė',
    'LBL_EMAIL' => 'el.paštas',
    'LBL_PHONE' => 'Telefonas',
    'LBL_REMINDER_POPUP' => 'Iššokantis langas',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Siųsti El. paštu visiems pakviestiesiems',
    'LBL_EMAIL_REMINDER' => 'El. Pašto Priminimas',
    'LBL_EMAIL_REMINDER_TIME' => 'El. paštu Priminimo Laikas',
    'LBL_SEND_BUTTON_TITLE' => 'Siųsti pakvietimus',
    'LBL_SEND_BUTTON_LABEL' => 'Siųsti pakvietimus',
    'LBL_DATE_END' => 'Pabaigos laikas',
    'LBL_REMINDER_TIME' => 'Priminimo laikas',
    'LBL_EMAIL_REMINDER_SENT' => 'El. paštu priminimas siųstas',
    'LBL_SEARCH_BUTTON' => 'Paieška',
    'LBL_ADD_BUTTON' => 'Įdėti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Skambučiai',
    'LNK_SELECT_ACCOUNT' => 'Pasirinkite klientą',
    'LNK_NEW_ACCOUNT' => 'Naujas klientas',
    'LNK_NEW_OPPORTUNITY' => 'Naujas pardavimas',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialus kontaktas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_USERS_SUBPANEL_TITLE' => 'Vartotojas',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Narys',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Užrašai',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_LIST_MY_CALLS' => 'Mano skambučiai',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_ASSIGNED_TO_ID' => 'Atsakingas vartotojas',
    'NOTICE_DURATION_TIME' => 'Trukmės periodas turi būti daugiau už 0',
    'LBL_CALL_INFORMATION' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Išmesti',
    'LBL_ACCEPT_STATUS' => 'Patvirtinti',
    'LBL_ACCEPT_LINK' => 'Priimti Nuorodą',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Sukurti pakvietimą',
    'LBL_CREATE_CONTACT' => 'Kaip Kontaktas',
    'LBL_CREATE_LEAD' => 'Kaip Potencialūs kontaktai',
    'LBL_CREATE_AND_ADD' => 'Sukurti & Pridėti',
    'LBL_CANCEL_CREATE_INVITEE' => 'Atšaukti',
    'LBL_EMPTY_SEARCH_RESULT' => 'Deja, nebuvo rasta. Sukurkite pakvietima žemiau.',
    'LBL_NO_ACCESS' => 'Jūs neturite prieigos sukurti $modulį',

    'LBL_REPEAT_TYPE' => 'Pakartokite Tipą',
    'LBL_REPEAT_INTERVAL' => 'Pakartokite Intervalą',
    'LBL_REPEAT_DOW' => 'Pakartokite Eilutę',
    'LBL_REPEAT_UNTIL' => 'Kartoti iki',
    'LBL_REPEAT_COUNT' => 'Kartojimų skaičius',
    'LBL_REPEAT_PARENT_ID' => 'Pakartokite Šakninio ID',
    'LBL_RECURRING_SOURCE' => 'Pasikartojančių Šaltinis',

    'LBL_SYNCED_RECURRING_MSG' => 'Šis skambutis buvo įvykdytas kitoje sistemoje ir buvo sinchronizuotas. Norėdami atlikti pakeitimus, turėtumėte naudoti sistemą kuria naudojantis šis skambutis buvo įvykdytas. Atlikti pakeitimai kitoje sistemoje galėtų būti sinchronizuojami šiam įrašui.',

    // for reminders
    'LBL_REMINDERS' => 'Priminimai',
    'LBL_REMINDERS_ACTIONS' => 'Veiksmai:',
    'LBL_REMINDERS_POPUP' => 'Iššokantis langas',
    'LBL_REMINDERS_EMAIL' => 'Siųsti žinutę el. paštu visiems pakviestiesiems',
    'LBL_REMINDERS_WHEN' => 'Kada:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Pašalinti priminimą',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Įtraukti visus pakviestuosius',
    'LBL_REMINDERS_ADD_REMINDER' => 'Pridėti priminimą',

    'LBL_RESCHEDULE' => 'Perplanuoti',
    'LBL_RESCHEDULE_COUNT' => 'Skambučio Vykdimai',
    'LBL_RESCHEDULE_DATE' => 'Data',
    'LBL_RESCHEDULE_REASON' => 'Priežastis',
    'LBL_RESCHEDULE_ERROR1' => 'Prašome pasirinkti teisingą datą',
    'LBL_RESCHEDULE_ERROR2' => 'Pasirinkite priežastį',
    'LBL_RESCHEDULE_PANEL' => 'Perplanuoti',
    'LBL_RESCHEDULE_HISTORY' => 'Skambučio Vykdymo Istorija',
    'LBL_CANCEL' => 'Atšaukti',
    'LBL_SAVE' => 'Saugoti',

    'LBL_CALLS_RESCHEDULE' => 'Skambučių perplanavimas',
    'LBL_LIST_STATUS'=>'Būsena',
    'LBL_LIST_DATE_MODIFIED'=>'Redagavimo data',
    'LBL_LIST_DUE_DATE'=>'Terminas',
    'LBL_RESCHEDULED_BY'=>'-',
);
