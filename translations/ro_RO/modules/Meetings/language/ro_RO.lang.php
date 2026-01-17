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
    'LBL_ACCEPT_THIS' => 'Acceptă?',
    'LBL_ADD_BUTTON' => 'Adăugați',
    'LBL_ADD_INVITEE' => 'Adăugați Invitați',
    'LBL_CONTACT_NAME' => 'Contact:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacte',
    'LBL_CREATED_BY' => 'Creat de',
    'LBL_DATE_END' => 'Dată Sfârșit',
    'LBL_DATE_TIME' => 'Dată & Oră Începere:',
    'LBL_DATE' => 'Dată Începere:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Întâlniri',
    'LBL_DESCRIPTION' => 'Descriere:',
    'LBL_DIRECTION' => 'Direcție:',
    'LBL_DURATION_HOURS' => 'Durată în ore:',
    'LBL_DURATION_MINUTES' => 'Durată în minute:',
    'LBL_DURATION' => 'Durata:',
    'LBL_EMAIL' => 'Email',
    'LBL_FIRST_NAME' => 'Prenume',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Note',
    'LBL_HOURS_ABBREV' => 'o',
    'LBL_HOURS_MINS' => '(ore/minute)',
    'LBL_INVITEE' => 'Invitați',
    'LBL_LAST_NAME' => 'Nume de Familie',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuit utilizatorului',
    'LBL_LIST_CLOSE' => 'Închide',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Data modificării',
    'LBL_LIST_DATE' => 'Dată Început',
    'LBL_LIST_DIRECTION' => 'Direcție',
    'LBL_LIST_DUE_DATE' => 'Dată Limită',
    'LBL_LIST_FORM_TITLE' => 'Lista de întâlniri',
    'LBL_LIST_MY_MEETINGS' => 'Întâlnirile mele',
    'LBL_LIST_RELATED_TO' => 'Legat de',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subiect',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Piste',
    'LBL_LOCATION' => 'Locație:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modificat de',
    'LBL_MODULE_NAME' => 'Întâlniri',
    'LBL_MODULE_TITLE' => 'Întâlniri: Start',
    'LBL_NAME' => 'Nume',
    'LBL_NEW_FORM_TITLE' => 'Creează întâlnire',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_SEQUENCE' => 'Secvența de actualizare a întâlnirilor',
    'LBL_PHONE' => 'Telefon birou:',
    'LBL_REMINDER_TIME' => 'Ora de notificare',
    'LBL_EMAIL_REMINDER_SENT' => 'Trimitere notificare email',
    'LBL_REMINDER' => 'Reamintiri:',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email tuturor invitaților',
    'LBL_EMAIL_REMINDER' => 'Notificare email',
    'LBL_EMAIL_REMINDER_TIME' => 'Dată notificare email',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planificare',
    'LBL_SEARCH_BUTTON' => 'Caută',
    'LBL_SEARCH_FORM_TITLE' => 'Cautare intalinre',
    'LBL_SEND_BUTTON_LABEL' => 'Salvați & Trimiteți Invitații',
    'LBL_SEND_BUTTON_TITLE' => 'Salvați & Trimiteți Invitații',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Tip Întâlnire',
    'LBL_PASSWORD' => 'Parolă Întâlnire',
    'LBL_URL' => 'Începe/Alătură-te la întâlnire',
    'LBL_HOST_URL' => 'URL Gazdă',
    'LBL_DISPLAYED_URL' => 'Afișare URL',
    'LBL_CREATOR' => 'Creator Conferinta',
    'LBL_EXTERNALID' => 'ID App Extern',
    'LBL_SUBJECT' => 'Subiect:',
    'LBL_TIME' => 'Ora Începere:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilizatori',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Tip părinte',
    'LBL_PARENT_ID' => 'ID Părinte',
    'LNK_MEETING_LIST' => 'Vizualizați Întâlniri',
    'LNK_NEW_APPOINTMENT' => 'Creează întâlnire',
    'LNK_NEW_MEETING' => 'Programare Întâlnire',
    'LNK_IMPORT_MEETINGS' => 'Importa ședințe',

    'LBL_CREATED_USER' => 'Utilizator creat',
    'LBL_MODIFIED_USER' => 'Modificata de Utilizator',
    'NOTICE_DURATION_TIME' => 'Durată timp trebuie sa fie mai mare ca 0',
    'LBL_MEETING_INFORMATION' => 'Vedere Ansamblu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Alătură-te întâlnirii',
    'LBL_ACCEPT_STATUS' => 'Status Acceptare',
    'LBL_ACCEPT_LINK' => 'Acceptați link-ul',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nu poți să participi la această ședință pentru că nu ai o invitație.',
    'LBL_EXTNOT_RECORD_LINK' => 'Vezi întâlnire',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nu puteți începe această ședință deoarece nu sunteți administrator sau proprietarul ședinței.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Creați un invitat',
    'LBL_CREATE_CONTACT' => 'Ca și Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Ca pistă',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Creați & Adăugați',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Anulați',
    'LBL_EMPTY_SEARCH_RESULT' => 'Ne pare rău, nu am găsit niciun rezultat. Vă rugăm să creați un invitat mai jos.',
    'LBL_NO_ACCESS' => 'Nu aveți acces pentru a crea $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Tip repetare',
    'LBL_REPEAT_INTERVAL' => 'Interval de repetare',
    'LBL_REPEAT_DOW' => 'Repetă funcție de ziua săptămânii',
    'LBL_REPEAT_UNTIL' => 'Repetare Până la',
    'LBL_REPEAT_COUNT' => 'Numărul de repetări',
    'LBL_REPEAT_PARENT_ID' => 'Repetă ID-ul părinte',
    'LBL_RECURRING_SOURCE' => 'Sursă recurentă',

    'LBL_SYNCED_RECURRING_MSG' => 'Această întâlnire a fost inițiată într-un alt sistem și a fost sincronizată cu SuiteCRM. Pentru a face schimbări, mergeți la ședința originală din cadrul acelui sistem. Modificările făcute în celălalt sistem pot fi sincronizate cu această înregistrare.',
    'LBL_RELATED_TO' => 'Legat de:',

    // for reminders
    'LBL_REMINDERS' => 'Memento',
    'LBL_REMINDERS_ACTIONS' => 'Acțiuni:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invitaților',
    'LBL_REMINDERS_WHEN' => 'Când:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Șterge memento',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Adăugați Toți Invitații',
    'LBL_REMINDERS_ADD_REMINDER' => 'Adăugați memento',

    // for google sync
    'LBL_GSYNC_ID' => 'ID eveniment Google',
    'LBL_GSYNC_LASTSYNC' => 'Ultima dată de sincronizare Google',
);
