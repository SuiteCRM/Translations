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
    'LBL_ACCEPT_THIS' => 'Elfogadja?',
    'LBL_ADD_BUTTON' => 'Hozzáadás',
    'LBL_ADD_INVITEE' => 'Meghívottak hozzáadása',
    'LBL_CONTACT_NAME' => 'Kapcsolat:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_CREATED_BY' => 'Létrehozta:',
    'LBL_DATE_END' => 'Végdátum',
    'LBL_DATE_TIME' => 'Kezdés időpont:',
    'LBL_DATE' => 'Kezdés dátum:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Találkozók',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_DIRECTION' => 'Irány:',
    'LBL_DURATION_HOURS' => 'Hossza órák:',
    'LBL_DURATION_MINUTES' => 'Hossza percek:',
    'LBL_DURATION' => 'Időtartam:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'Vezetéknév',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Jegyzetek',
    'LBL_HOURS_ABBREV' => 'ó',
    'LBL_HOURS_MINS' => '(órák/percek)',
    'LBL_INVITEE' => 'Meghívottak',
    'LBL_LAST_NAME' => 'Keresztnév',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_LIST_CLOSE' => 'Bezárás',
    'LBL_LIST_CONTACT' => 'Kapcsolattartó',
    'LBL_LIST_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_LIST_DATE' => 'Kezdés dátum:',
    'LBL_LIST_DIRECTION' => 'Iránya',
    'LBL_LIST_DUE_DATE' => 'Határidő dátum',
    'LBL_LIST_FORM_TITLE' => 'Találkozók listája',
    'LBL_LIST_MY_MEETINGS' => 'Találkozóim',
    'LBL_LIST_RELATED_TO' => 'Társítva',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_SUBJECT' => 'Tárgy',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Érdeklődők',
    'LBL_LOCATION' => 'Helyszín:',
    'LBL_MINSS_ABBREV' => 'p',
    'LBL_MODIFIED_BY' => 'Módosította:',
    'LBL_MODULE_NAME' => 'Találkozók',
    'LBL_MODULE_TITLE' => 'Találkozók: Főoldal',
    'LBL_NAME' => 'Név',
    'LBL_NEW_FORM_TITLE' => 'Hívások ütemezése',
    'LBL_OUTLOOK_ID' => 'Outlook azonosító',
    'LBL_SEQUENCE' => 'Meeting update sequence',
    'LBL_PHONE' => 'Irodai Telefon:',
    'LBL_REMINDER_TIME' => 'Emlékeztetés ideje',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail emlékeztető elküldve',
    'LBL_REMINDER' => 'Emlékeztető:',
    'LBL_REMINDER_POPUP' => 'Felugró',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-mail az összes meghívott részére',
    'LBL_EMAIL_REMINDER' => 'E-mail emlékeztető',
    'LBL_EMAIL_REMINDER_TIME' => 'E-mail emlékeztető időpontja',
    'LBL_REMOVE' => 'Eltávolítás',
    'LBL_SCHEDULING_FORM_TITLE' => 'Ütemezés',
    'LBL_SEARCH_BUTTON' => 'Keresés',
    'LBL_SEARCH_FORM_TITLE' => 'Találkozó keresése',
    'LBL_SEND_BUTTON_LABEL' => 'Meghívók küldése',
    'LBL_SEND_BUTTON_TITLE' => 'Meghívók küldése',
    'LBL_STATUS' => 'Állapot:',
    'LBL_TYPE' => 'Megbeszélés típusa',
    'LBL_PASSWORD' => 'Megbeszélés jelszava',
    'LBL_URL' => 'Megbeszélés Kezdete',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Display URL',
    'LBL_CREATOR' => 'Megbeszélés Létrehozása',
    'LBL_EXTERNALID' => 'Külső App azonosító',
    'LBL_SUBJECT' => 'Tárgy:',
    'LBL_TIME' => 'Kezdés idő:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Felhasználók',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Szülő típus',
    'LBL_PARENT_ID' => 'Szülő ID',
    'LNK_MEETING_LIST' => 'Találkozók',
    'LNK_NEW_APPOINTMENT' => 'Hívások ütemezése',
    'LNK_NEW_MEETING' => 'Találkozó ütemezése',
    'LNK_IMPORT_MEETINGS' => 'Találkozók importálása',

    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'NOTICE_DURATION_TIME' => 'Az időtartamnak nagyobbnak kell lennie 0-nál',
    'LBL_MEETING_INFORMATION' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Megbeszéléshez csatlakozás',
    'LBL_ACCEPT_STATUS' => 'Status elfogadva',
    'LBL_ACCEPT_LINK' => 'Link elfogadása',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nem tud bekapcsolódni a megbeszélésre, mert nem Meghívott.',
    'LBL_EXTNOT_RECORD_LINK' => 'Megbeszélés Nézet',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nem tudja elindítani a megbeszélést mert nem Adminisztrátor vagy nem tulajdonosa a megbeszélésnek.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Meghívott létrehozása',
    'LBL_CREATE_CONTACT' => 'kapcsolattartóként',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Érdeklődőként',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'létrhozás és hozzáadás',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Mégsem',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sajnálom, nem találtam erőforrást. Kérem adjon meg legalább egy meghívottat alább.',
    'LBL_NO_ACCESS' => 'Nincs hozzáférése a $module létrehozásához',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Ismétlődés típusa',
    'LBL_REPEAT_INTERVAL' => 'Ismétlődési időköz',
    'LBL_REPEAT_DOW' => 'Ismétlődés Dow',
    'LBL_REPEAT_UNTIL' => 'Ismételjük meg, amíg',
    'LBL_REPEAT_COUNT' => 'Ismétlődések száma',
    'LBL_REPEAT_PARENT_ID' => 'Ismétlődés szülő ID',
    'LBL_RECURRING_SOURCE' => 'Ismétlődés forrása',

    'LBL_SYNCED_RECURRING_MSG' => 'This meeting originated in another system and was synced to SuiteCRM. To make changes, go to the original meeting within the other system. Changes made in the other system can be synced to this record.',
    'LBL_RELATED_TO' => 'Összefüggésben:',

    // for reminders
    'LBL_REMINDERS' => 'Emlékeztetők',
    'LBL_REMINDERS_ACTIONS' => 'Műveletek:',
    'LBL_REMINDERS_POPUP' => 'Felugró',
    'LBL_REMINDERS_EMAIL' => 'E-mail a meghívottaknak',
    'LBL_REMINDERS_WHEN' => 'mikor:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Emlékeztető eltávolítása',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Összes meghívott hozzáadása',
    'LBL_REMINDERS_ADD_REMINDER' => 'Emlékeztető hozzáadása',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
