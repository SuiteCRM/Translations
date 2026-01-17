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
    'LBL_ACCEPT_THIS' => 'Prihvati?',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Dodaj pozvane',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_CREATED_BY' => 'Autor',
    'LBL_DATE_END' => 'Krajnji datum',
    'LBL_DATE_TIME' => 'Datum i vreme početka:',
    'LBL_DATE' => 'Datum početka:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sastanci',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_DIRECTION' => 'Smer:',
    'LBL_DURATION_HOURS' => 'Trajanje u satima:',
    'LBL_DURATION_MINUTES' => 'Trajanje u minutima:',
    'LBL_DURATION' => 'Trajanje:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'Ime',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Beleške',
    'LBL_HOURS_ABBREV' => 's',
    'LBL_HOURS_MINS' => '(sati/minuta)',
    'LBL_INVITEE' => 'Pozvani',
    'LBL_LAST_NAME' => 'Prezime',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljeno:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik:',
    'LBL_LIST_CLOSE' => 'Zatvori',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Datum izmene',
    'LBL_LIST_DATE' => 'Datum početka',
    'LBL_LIST_DIRECTION' => 'Smer',
    'LBL_LIST_DUE_DATE' => 'Datum dospeća',
    'LBL_LIST_FORM_TITLE' => 'Lista sastanaka',
    'LBL_LIST_MY_MEETINGS' => 'Moji sastanci',
    'LBL_LIST_RELATED_TO' => 'Povezano sa',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Naslov',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencijalni klijenti',
    'LBL_LOCATION' => 'Lokacija:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Promenio',
    'LBL_MODULE_NAME' => 'Sastanci',
    'LBL_MODULE_TITLE' => 'Sastanci: Početna strana',
    'LBL_NAME' => 'Ime',
    'LBL_NEW_FORM_TITLE' => 'Zakaži sastanak',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'Redosled ažuriranja sastanka',
    'LBL_PHONE' => 'Kancelarijski telefon:',
    'LBL_REMINDER_TIME' => 'Vreme podsetnika',
    'LBL_EMAIL_REMINDER_SENT' => 'Email podsetnik poslat',
    'LBL_REMINDER' => 'Podsetnik:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Pošaljite email svim pozvanima.',
    'LBL_EMAIL_REMINDER' => 'Email podsetnik',
    'LBL_EMAIL_REMINDER_TIME' => 'Vreme email podsetnika',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_SCHEDULING_FORM_TITLE' => 'Zakazivanje',
    'LBL_SEARCH_BUTTON' => 'Pretraga',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga sastanaka',
    'LBL_SEND_BUTTON_LABEL' => 'Pošalji pozvanima',
    'LBL_SEND_BUTTON_TITLE' => 'Pošalji pozvanima',
    'LBL_STATUS' => 'Status',
    'LBL_TYPE' => 'Tip sastanka',
    'LBL_PASSWORD' => 'Lozinka sastanka',
    'LBL_URL' => 'Započni/priduži se sastanku',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Prikaz URL',
    'LBL_CREATOR' => 'Sastanak kreirao',
    'LBL_EXTERNALID' => 'ID spoljne aplikacije',
    'LBL_SUBJECT' => 'Naslov:',
    'LBL_TIME' => 'Vreme početka:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Korisnici',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Matični tip',
    'LBL_PARENT_ID' => 'ID nadređenog',
    'LNK_MEETING_LIST' => 'Pregledaj sastanke',
    'LNK_NEW_APPOINTMENT' => 'Zakaži sastanak',
    'LNK_NEW_MEETING' => 'Zakaži sastanak',
    'LNK_IMPORT_MEETINGS' => 'Uvezi sastanke',

    'LBL_CREATED_USER' => 'Kreirao korisnik',
    'LBL_MODIFIED_USER' => 'Izmenio korisnik',
    'NOTICE_DURATION_TIME' => 'Vreme trajanja mora biti veće od 0',
    'LBL_MEETING_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Pridruži se sastanku',
    'LBL_ACCEPT_STATUS' => 'Prihvati status',
    'LBL_ACCEPT_LINK' => 'Prihvati link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Niste u mogućnosti da se pridružite jer niste pozvani.',
    'LBL_EXTNOT_RECORD_LINK' => 'Pregledaj sastanak',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Ne možete započeti ovaj sastanak jer niste administrator ili vlasnik sastanka.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Kreiraj pozivnicu',
    'LBL_CREATE_CONTACT' => 'Kreiraj kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Kreiraj potencijalnog klijenta',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Napravi i dodaj',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Otkaži',
    'LBL_EMPTY_SEARCH_RESULT' => 'Žao nam je, nije pronađen ni jedan rezultat. Molimo kreirajte pozivnicu ispod:',
    'LBL_NO_ACCESS' => 'Nemate pristup ovom delu. Kontaktirajte administratora vašeg sajta kako biste dobili pristup.',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Ponavlja se',
    'LBL_REPEAT_INTERVAL' => 'Svaki',
    'LBL_REPEAT_DOW' => 'Na',
    'LBL_REPEAT_UNTIL' => 'Ponavlja se do',
    'LBL_REPEAT_COUNT' => 'Broj ponavljanja',
    'LBL_REPEAT_PARENT_ID' => 'Matični ID ponavljanja',
    'LBL_RECURRING_SOURCE' => 'Izvor ponavljanja',

    'LBL_SYNCED_RECURRING_MSG' => 'Ovaj sastanak vodi poreklo iz eksternog sistema i sinhronizovan je u Sugar. Kako biste ga menjali, neophodno je izvršiti izmene u originalnom sistemu, koje kasnije mogu biti sinhronizovane ovde.',
    'LBL_RELATED_TO' => 'Povezano sa',

    // for reminders
    'LBL_REMINDERS' => 'Podsetnici',
    'LBL_REMINDERS_ACTIONS' => 'Akcije:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Pozvani emailom',
    'LBL_REMINDERS_WHEN' => 'Kada:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Ukloni podsetnik',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Dodaj sve pozvane',
    'LBL_REMINDERS_ADD_REMINDER' => 'Dodaj podsetnik',

    // for google sync
    'LBL_GSYNC_ID' => 'Google Event ID',
    'LBL_GSYNC_LASTSYNC' => 'Last Google Sync Timestamp',
);
