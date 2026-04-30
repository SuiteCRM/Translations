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
    'LBL_ACCEPT_THIS' => 'Accept?',
    'LBL_ADD_BUTTON' => 'Dodaj',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_CREATED_BY' => 'Utworzone przez',
    'LBL_DATE_END' => 'End Date',
    'LBL_DATE_TIME' => 'Data i Czas Rozpoczęcia:',
    'LBL_DATE' => 'Data Rozpoczęcia:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Spotkania',
    'LBL_DESCRIPTION' => 'Opis: ',
    'LBL_DIRECTION' => 'Direction:',
    'LBL_DURATION_HOURS' => 'Czas trwania (godziny):',
    'LBL_DURATION_MINUTES' => 'Czas trwania (minuty):',
    'LBL_DURATION' => 'Czas Trwania:',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Imię',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notatki',
    'LBL_HOURS_ABBREV' => 'godz.',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Zaproszeni',
    'LBL_LAST_NAME' => 'Nazwisko',
    'LBL_ASSIGNED_TO_NAME' => 'Przydzielony do:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Przypisany użytkownik',
    'LBL_LIST_CLOSE' => 'Zamknij',
    'LBL_LIST_CONTACT' => 'Kontakty',
    'LBL_LIST_DATE_MODIFIED' => 'Data Modyfikacji:',
    'LBL_LIST_DATE' => 'Data rozpoczęcia',
    'LBL_LIST_DIRECTION' => 'Kierunek',
    'LBL_LIST_DUE_DATE' => 'Data Wykonania',
    'LBL_LIST_FORM_TITLE' => 'Lista Spotkań',
    'LBL_LIST_MY_MEETINGS' => 'Moje Spotkania',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Temat',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potencjalni klienci',
    'LBL_LOCATION' => 'Lokalizacja:',
    'LBL_MINSS_ABBREV' => 'min.',
    'LBL_MODIFIED_BY' => 'Zmodyfikowane przez',
    'LBL_MODULE_NAME' => 'Spotkania',
    'LBL_MODULE_TITLE' => 'Spotkania: Strona Główna',
    'LBL_NAME' => 'Nazwa',
    'LBL_NEW_FORM_TITLE' => 'Create Appointment',
    'LBL_OUTLOOK_ID' => 'Identyfikator programu Outlook',
    'LBL_SEQUENCE' => 'Sekwencja aktualizacji spotkania',
    'LBL_PHONE' => 'Telefon do biura:',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'E-mail z przypomnieniem wysłany',
    'LBL_REMINDER' => 'Przypomnienie:',
    'LBL_REMINDER_POPUP' => 'Wyskakujące okienko',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email all invitees',
    'LBL_EMAIL_REMINDER' => 'Email Reminder',
    'LBL_EMAIL_REMINDER_TIME' => 'Czas e-maila z przypomnieniem',
    'LBL_REMOVE' => 'Usuń',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Szukaj',
    'LBL_SEARCH_FORM_TITLE' => 'Wyszukiwanie Spotkań',
    'LBL_SEND_BUTTON_LABEL' => 'Zapisz i wyślij zaproszenia',
    'LBL_SEND_BUTTON_TITLE' => 'Zapisz i wyślij zaproszenia',
    'LBL_STATUS' => 'Status',
    'LBL_TYPE' => 'Typ spotkania',
    'LBL_PASSWORD' => 'Hasło spotkania',
    'LBL_URL' => 'Rozpocznij/Dołącz spotkanie/do spotkania',
    'LBL_HOST_URL' => 'Adres URL hosta',
    'LBL_DISPLAYED_URL' => 'Pokaż URL',
    'LBL_CREATOR' => 'Kreator spotkania',
    'LBL_EXTERNALID' => 'ID zewnętrznej aplikacji',
    'LBL_SUBJECT' => 'Temat:',
    'LBL_TIME' => 'Start Time:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Użytkownicy',
    'LBL_PARENT_TYPE' => 'Parent Type',
    'LBL_PARENT_ID' => 'ID rodzica',
    'LNK_MEETING_LIST' => 'Spotkania',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_MEETING' => 'Zaplanuj spotkanie',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'PRZEGLĄD', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Dołącz do spotkania',
    'LBL_ACCEPT_STATUS' => 'Przyjęty Status',
    'LBL_ACCEPT_LINK' => 'Accept Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nie możesz dołączyć do tego spotkania, ponieważ nie jesteś zaproszony.',
    'LBL_EXTNOT_RECORD_LINK' => 'Zobacz spotkanie',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nie możesz rozpocząć spotkania, ponieważ nie jesteś administratorem lub właścicielem tego spotkania.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Utwórz uczestników',
    'LBL_CREATE_CONTACT' => 'Jako kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'As Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Utwórz i dodaj',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Anuluj',
    'LBL_EMPTY_SEARCH_RESULT' => 'Przepraszam, nie znaleziono wyników. Proszę utworzyć uczestników poniżej.',
    'LBL_NO_ACCESS' => 'Nie masz dostępu do tworzenia $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Interwał powtarzania',
    'LBL_REPEAT_DOW' => 'Powtórz w',
    'LBL_REPEAT_UNTIL' => 'Powtarzaj aż do',
    'LBL_REPEAT_COUNT' => 'Liczba powtórzeń',
    'LBL_REPEAT_PARENT_ID' => 'Powtórz ID nadrzędnego rekordu',
    'LBL_RECURRING_SOURCE' => 'Cykliczne źródło',

    'LBL_SYNCED_RECURRING_MSG' => 'To spotkanie zostało utworzone w innym systemie i zostało zsynchronizowane z SuiteCRM. Aby dokonać zmian należy przejść do innego systemu i dokonać edycji Spotkania. Zmiany wprowadzone w innym systemie zostaną zsynchronizowane do tego rekordu.',
    'LBL_RELATED_TO' => 'Powiązane z: ',

    // for reminders
    'LBL_REMINDERS' => 'Wyświetlić Przypomnienie?',
    'LBL_REMINDERS_ACTIONS' => 'Akcje:',
    'LBL_REMINDERS_POPUP' => 'Wyskakujące okienko',
    'LBL_REMINDERS_EMAIL' => 'Wyślij zaproszenie',
    'LBL_REMINDERS_WHEN' => 'Kiedy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Usuń przypomnienie',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Dodaj wszystkich zaproszonych',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    // for google sync
    'LBL_GSYNC_ID' => 'Identyfikator zdarzeń Google',
    'LBL_GSYNC_LASTSYNC' => 'Sygnatura czasowa ostatniej synchronizacji z Google',
);
