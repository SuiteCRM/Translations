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
    'LBL_ACCEPT_THIS' => 'Patvirtinti?',
    'LBL_ADD_BUTTON' => 'Įdėti',
    'LBL_ADD_INVITEE' => 'Pridėti dalyvius',
    'LBL_CONTACT_NAME' => 'Kontaktas:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_CREATED_BY' => 'Sukūrė:',
    'LBL_DATE_END' => 'Pabaigos laikas',
    'LBL_DATE_TIME' => 'Pradžios data ir laikas:',
    'LBL_DATE' => 'Pradžios laikas:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Susitikimai',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_DIRECTION' => 'Kryptis:',
    'LBL_DURATION_HOURS' => 'Trukmė valandomis:',
    'LBL_DURATION_MINUTES' => 'Trukmė minutėmis:',
    'LBL_DURATION' => 'Trukmė:',
    'LBL_EMAIL' => 'el.paštas',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Užrašai',
    'LBL_HOURS_ABBREV' => 'v',
    'LBL_HOURS_MINS' => '(val/min)',
    'LBL_INVITEE' => 'Dalyviai',
    'LBL_LAST_NAME' => 'Pavardė',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas vartotojas',
    'LBL_LIST_CLOSE' => 'Užbaigti',
    'LBL_LIST_CONTACT' => 'Adresatas',
    'LBL_LIST_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_LIST_DATE' => 'Pražios data',
    'LBL_LIST_DIRECTION' => 'Kryptis',
    'LBL_LIST_DUE_DATE' => 'Terminas',
    'LBL_LIST_FORM_TITLE' => 'Susitikimų sąrašas',
    'LBL_LIST_MY_MEETINGS' => 'Mano susitikimai',
    'LBL_LIST_RELATED_TO' => 'Susijęs su',
    'LBL_LIST_STATUS' => 'Būsena',
    'LBL_LIST_SUBJECT' => 'Tema:',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencialus kontaktas',
    'LBL_LOCATION' => 'Vieta:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Redagavo:',
    'LBL_MODULE_NAME' => 'Susitikimai',
    'LBL_MODULE_TITLE' => 'Susitikimai: Pradžia',
    'LBL_NAME' => 'Vardas',
    'LBL_NEW_FORM_TITLE' => 'Sukurti susitikimą',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Susitikimo naujinimo seka',
    'LBL_PHONE' => 'Darbovietės telefonas:',
    'LBL_REMINDER_TIME' => 'Priminimo laikas',
    'LBL_EMAIL_REMINDER_SENT' => 'El. paštu priminimas siųstas',
    'LBL_REMINDER' => 'Priminimas:',
    'LBL_REMINDER_POPUP' => 'Iššokantis langas',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Siųsti El. paštu visiems pakviestiesiems',
    'LBL_EMAIL_REMINDER' => 'El. Pašto Priminimas',
    'LBL_EMAIL_REMINDER_TIME' => 'El. paštu Priminimo Laikas',
    'LBL_REMOVE' => 'Išmesti',
    'LBL_SCHEDULING_FORM_TITLE' => 'Suplanuojama',
    'LBL_SEARCH_BUTTON' => 'Paieška',
    'LBL_SEARCH_FORM_TITLE' => 'Ieškoti susitikimo',
    'LBL_SEND_BUTTON_LABEL' => 'Siųsti pakvietimus',
    'LBL_SEND_BUTTON_TITLE' => 'Siųsti pakvietimus',
    'LBL_STATUS' => 'Būsena:',
    'LBL_TYPE' => 'Tipas:',
    'LBL_PASSWORD' => 'Slaptažodis',
    'LBL_URL' => 'Pradėti/Prisijungti prie susitikimo',
    'LBL_HOST_URL' => 'Svetainės URL',
    'LBL_DISPLAYED_URL' => 'Rodomame URL',
    'LBL_CREATOR' => 'Susitikimo sukūrėjas',
    'LBL_EXTERNALID' => 'Išorinis App ID',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LBL_TIME' => 'Pradžios laikas:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Vartotojas',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Pagrindio tipas',
    'LBL_PARENT_ID' => 'Šakninio ID',
    'LNK_MEETING_LIST' => 'Susitikimai',
    'LNK_NEW_APPOINTMENT' => 'Sukurti susitikimą',
    'LNK_NEW_MEETING' => 'Suplanuoti susitikimą',
    'LNK_IMPORT_MEETINGS' => 'Importuoti susitikimus',

    'LBL_CREATED_USER' => 'Sukūrė',
    'LBL_MODIFIED_USER' => 'Redagavo Vartotojas',
    'NOTICE_DURATION_TIME' => 'Trukmės periodas turi būti daugiau už 0',
    'LBL_MEETING_INFORMATION' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Prisijungti prie susitikimo',
    'LBL_ACCEPT_STATUS' => 'Patvirtinti',
    'LBL_ACCEPT_LINK' => 'Priimti Nuorodą',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Jūs negalite prisijungti prie šio susitikimo, nes nesate dalyvis.',
    'LBL_EXTNOT_RECORD_LINK' => 'Žiūrėti susitikimą',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Jūs negalite pradėti šio susitikimo, nes nesate administratorius arba susitikimo savininkas.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Sukurti pakvietimą',
    'LBL_CREATE_CONTACT' => 'Kaip Kontaktas',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Kaip Potencialūs kontaktai',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Sukurti & Pridėti',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Atšaukti',
    'LBL_EMPTY_SEARCH_RESULT' => 'Deja, nebuvo rasta. Sukurkite pakvietima žemiau.',
    'LBL_NO_ACCESS' => 'Jūs neturite prieigos sukurti $modulį',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Pakartokite Tipą',
    'LBL_REPEAT_INTERVAL' => 'Pakartokite Intervalą',
    'LBL_REPEAT_DOW' => 'Pakartokite Eilutę',
    'LBL_REPEAT_UNTIL' => 'Kartoti iki',
    'LBL_REPEAT_COUNT' => 'Kartojimų skaičius',
    'LBL_REPEAT_PARENT_ID' => 'Pakartokite Šakninio ID',
    'LBL_RECURRING_SOURCE' => 'Pasikartojančių Šaltinis',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Susijęs su',

    // for reminders
    'LBL_REMINDERS' => 'Priminimai',
    'LBL_REMINDERS_ACTIONS' => 'Veiksmai:',
    'LBL_REMINDERS_POPUP' => 'Iššokantis langas',
    'LBL_REMINDERS_EMAIL' => 'Siųsti žinutę el. paštu visiems pakviestiesiems',
    'LBL_REMINDERS_WHEN' => 'Kada:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Pašalinti priminimą',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Įtraukti visus pakviestuosius',
    'LBL_REMINDERS_ADD_REMINDER' => 'Pridėti priminimą',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
