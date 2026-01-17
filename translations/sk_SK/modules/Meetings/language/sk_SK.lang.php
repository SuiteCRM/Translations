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
    'LBL_ACCEPT_THIS' => 'Prijať?',
    'LBL_ADD_BUTTON' => 'Pridať',
    'LBL_ADD_INVITEE' => 'Pridať pozvánky',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_CREATED_BY' => 'Vytvorené podľa',
    'LBL_DATE_END' => 'Dátum ukončenia',
    'LBL_DATE_TIME' => 'Dátum a čas zahájenia:',
    'LBL_DATE' => 'Dátum začiatku:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Schôdzky',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DIRECTION' => 'Zoradenie:',
    'LBL_DURATION_HOURS' => 'Trvanie v hodinách:',
    'LBL_DURATION_MINUTES' => 'Trvanie v minútach:',
    'LBL_DURATION' => 'Trvanie:',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Krstné meno',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hodín/munút)',
    'LBL_INVITEE' => 'Pozvaní',
    'LBL_LAST_NAME' => 'Priezvisko',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',
    'LBL_LIST_CLOSE' => 'Uzavrieť',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_LIST_DATE' => 'Dátum začiatku:',
    'LBL_LIST_DIRECTION' => 'Zoradenie:',
    'LBL_LIST_DUE_DATE' => 'do dátumu',
    'LBL_LIST_FORM_TITLE' => 'Zoznam schôdzok',
    'LBL_LIST_MY_MEETINGS' => 'Moje schôdzky',
    'LBL_LIST_RELATED_TO' => 'Súvisiaci k',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_SUBJECT' => 'Predmet',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciatívy',
    'LBL_LOCATION' => 'Poloha:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Zmenené podľa',
    'LBL_MODULE_NAME' => 'Schôdzky',
    'LBL_MODULE_TITLE' => 'Schôdzky: Hlavná stránka',
    'LBL_NAME' => 'Meno',
    'LBL_NEW_FORM_TITLE' => 'Vytvoriť plánovanú činnosť',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_SEQUENCE' => 'stretnutie sekvenčnej aktualizácie',
    'LBL_PHONE' => 'Telefón:',
    'LBL_REMINDER_TIME' => 'Čas upozornenia',
    'LBL_EMAIL_REMINDER_SENT' => 'odoslaný pripomienkový emali',
    'LBL_REMINDER' => 'Upozorniť:',
    'LBL_REMINDER_POPUP' => 'vztahovaný',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email všetkým pozvaným',
    'LBL_EMAIL_REMINDER' => 'pripomienkový email',
    'LBL_EMAIL_REMINDER_TIME' => 'čas pripomienkového emailu',
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_SCHEDULING_FORM_TITLE' => 'Plánovanie',
    'LBL_SEARCH_BUTTON' => 'Vyhľadať',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať schôdzky',
    'LBL_SEND_BUTTON_LABEL' => 'Poslať pozvánky',
    'LBL_SEND_BUTTON_TITLE' => 'Poslať pozvánky',
    'LBL_STATUS' => 'Stav:',
    'LBL_TYPE' => 'Typ schôdzky',
    'LBL_PASSWORD' => 'Heslo schôdzky',
    'LBL_URL' => 'Začiatok/Spojenie schôdzky',
    'LBL_HOST_URL' => 'Host URL',
    'LBL_DISPLAYED_URL' => 'Displaj URL',
    'LBL_CREATOR' => 'Tvorca schôdzky',
    'LBL_EXTERNALID' => 'ID externej aplikácie',
    'LBL_SUBJECT' => 'Predmet:',
    'LBL_TIME' => 'Čas začiatku:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Užívatelia',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Typ rodiča',
    'LBL_PARENT_ID' => 'ID rodiča:',
    'LNK_MEETING_LIST' => 'Zobrazenie schôdzok',
    'LNK_NEW_APPOINTMENT' => 'Vytvoriť plánovanú činnosť',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_IMPORT_MEETINGS' => 'Import schôdzok',

    'LBL_CREATED_USER' => 'Vytvorený užívateľ',
    'LBL_MODIFIED_USER' => 'Upravený užívateľ',
    'NOTICE_DURATION_TIME' => 'Čas trvania musí byť väčší ako 0',
    'LBL_MEETING_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Spojenie schôdzky',
    'LBL_ACCEPT_STATUS' => 'Prijať status',
    'LBL_ACCEPT_LINK' => 'Prijať link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nejde sa pripojiť k tomuto stretnutiu, pretože nie ste pozvaný',
    'LBL_EXTNOT_RECORD_LINK' => 'Ukáž schôdzku',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nemôžete začať túto schôdzku, pretože nie ste správca alebo vlastník rokovaní.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Vytvoriť pozvaný',
    'LBL_CREATE_CONTACT' => 'ako kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'ako príležitosť',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'vytvoriť & pridať',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušiť',
    'LBL_EMPTY_SEARCH_RESULT' => 'Je nám ľúto, neboli nájdené žiadne výsledky. Prosím, vytvorte si pozvaný nižšie.',
    'LBL_NO_ACCESS' => 'Nemáte prístup k vytváraniu $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Typ opakovania',
    'LBL_REPEAT_INTERVAL' => 'interval opakovania',
    'LBL_REPEAT_DOW' => 'opakovanie',
    'LBL_REPEAT_UNTIL' => 'opakujte kým',
    'LBL_REPEAT_COUNT' => 'počet opakovania',
    'LBL_REPEAT_PARENT_ID' => 'opakovať materské ID',
    'LBL_RECURRING_SOURCE' => 'opakovaný zdroj',

    'LBL_SYNCED_RECURRING_MSG' => 'Táto výzva vznikla v inom systéme a bol synchronizovaný zo SuiteCRM. Ak chcete vykonať zmeny, choďte k pôvodnému hovoru v rámci iného systému. Zmeny v inom systéme môžu byť synchronizované tymto záznamom.',
    'LBL_RELATED_TO' => 'Vzťahuje sa na:',

    // for reminders
    'LBL_REMINDERS' => 'Pripomenutia',
    'LBL_REMINDERS_ACTIONS' => 'Akcie:',
    'LBL_REMINDERS_POPUP' => 'vztahovaný',
    'LBL_REMINDERS_EMAIL' => 'Email pozvaných',
    'LBL_REMINDERS_WHEN' => 'Kedy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Odstrániť pripomienku',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Pridať všetkých pozvaných',
    'LBL_REMINDERS_ADD_REMINDER' => 'Pridať pripomienku',

    // for google sync
    'LBL_GSYNC_ID' => 'ID udalosti Google',
    'LBL_GSYNC_LASTSYNC' => 'Posledný časový otlačok synchronizácie Google',
);
