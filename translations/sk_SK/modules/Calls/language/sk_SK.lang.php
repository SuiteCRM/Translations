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
    'LBL_MODULE_NAME' => 'Hovory',
    'LBL_MODULE_TITLE' => 'Volania: Hlavná stránka',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadávanie volania',
    'LBL_LIST_FORM_TITLE' => 'Zoznam volaní',
    'LBL_NEW_FORM_TITLE' => 'Vytvoriť plánovanú činnosť',
    'LBL_LIST_CLOSE' => 'Uzavrieť',
    'LBL_LIST_SUBJECT' => 'Predmet',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Súvisiaci k',
    'LBL_LIST_RELATED_TO_ID' => 'Súvisiaci s ID',
    'LBL_LIST_DATE' => 'Dátum začiatku:',
    'LBL_LIST_DIRECTION' => 'Zoradenie:',
    'LBL_SUBJECT' => 'Predmet:',
    'LBL_REMINDER' => 'Upozornenie',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_STATUS' => 'Stav:',
    'LBL_DIRECTION' => 'Zoradenie:',
    'LBL_DATE' => 'Dátum začiatku:',
    'LBL_DURATION' => 'Trvanie:',
    'LBL_DURATION_HOURS' => 'Trvanie v hodinách:',
    'LBL_DURATION_MINUTES' => 'Trvanie v minútach:',
    'LBL_HOURS_MINUTES' => '(hodín/munút)',
    'LBL_DATE_TIME' => 'Dátum a čas zahájenia:',
    'LBL_TIME' => 'Čas začiatku:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Naplánovať hovor',
    'LNK_NEW_MEETING' => 'Harmonogram rokovaní',
    'LNK_CALL_LIST' => 'Zobrazenie volaní',
    'LNK_IMPORT_CALLS' => 'Import volaní',
    'ERR_DELETE_RECORD' => 'Pre zrušenie konta je potrebné zadať číslo záznamu.',
    'LBL_INVITEE' => 'Pozvaní',
    'LBL_RELATED_TO' => 'Vzťahuje sa na:',
    'LNK_NEW_APPOINTMENT' => 'Vytvoriť plánovanú činnosť',
    'LBL_SCHEDULING_FORM_TITLE' => 'Plánovanie',
    'LBL_ADD_INVITEE' => 'Pridať pozvánky',
    'LBL_NAME' => 'Meno',
    'LBL_FIRST_NAME' => 'Krstné meno',
    'LBL_LAST_NAME' => 'Priezvisko',
    'LBL_EMAIL' => 'E-mail',
    'LBL_PHONE' => 'Telefón',
    'LBL_REMINDER_POPUP' => 'vztahovaný',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email všetkým pozvaným',
    'LBL_EMAIL_REMINDER' => 'pripomienkový email',
    'LBL_EMAIL_REMINDER_TIME' => 'čas pripomienkového emailu',
    'LBL_SEND_BUTTON_TITLE' => 'Poslať pozvánky',
    'LBL_SEND_BUTTON_LABEL' => 'Poslať pozvánky',
    'LBL_DATE_END' => 'Dátum ukončenia',
    'LBL_REMINDER_TIME' => 'Čas upozornenia',
    'LBL_EMAIL_REMINDER_SENT' => 'odoslaný pripomienkový emali',
    'LBL_SEARCH_BUTTON' => 'Vyhľadať',
    'LBL_ADD_BUTTON' => 'Pridať',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hovory',
    'LNK_SELECT_ACCOUNT' => 'Výber účtu',
    'LNK_NEW_ACCOUNT' => 'Nový klient',
    'LNK_NEW_OPPORTUNITY' => 'Nová obchodná príležitosť',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciatívy',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_USERS_SUBPANEL_TITLE' => 'Užívatelia',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Člen v',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_LIST_MY_CALLS' => 'Moje volania',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ASSIGNED_TO_ID' => 'Priradený používateľ',
    'NOTICE_DURATION_TIME' => 'Čas trvania musí byť väčší ako 0',
    'LBL_CALL_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_ACCEPT_STATUS' => 'Prijať status',
    'LBL_ACCEPT_LINK' => 'Prijať link',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Vytvoriť pozvaný',
    'LBL_CREATE_CONTACT' => 'ako kontakt',
    'LBL_CREATE_LEAD' => 'ako príležitosť',
    'LBL_CREATE_AND_ADD' => 'vytvoriť & pridať',
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušiť',
    'LBL_EMPTY_SEARCH_RESULT' => 'Je nám ľúto, neboli nájdené žiadne výsledky. Prosím, vytvorte si pozvaný nižšie.',
    'LBL_NO_ACCESS' => 'Nemáte prístup k vytváraniu $module',

    'LBL_REPEAT_TYPE' => 'Typ opakovania',
    'LBL_REPEAT_INTERVAL' => 'interval opakovania',
    'LBL_REPEAT_DOW' => 'opakovanie',
    'LBL_REPEAT_UNTIL' => 'opakujte kým',
    'LBL_REPEAT_COUNT' => 'počet opakovania',
    'LBL_REPEAT_PARENT_ID' => 'opakovať materské ID',
    'LBL_RECURRING_SOURCE' => 'opakovaný zdroj',

    'LBL_SYNCED_RECURRING_MSG' => 'Táto výzva vznikla v inom systéme a bol synchronizovaný zo SuiteCRM. Ak chcete vykonať zmeny, choďte k pôvodnému hovoru v rámci iného systému. Zmeny v inom systéme môžu byť synchronizované tymto záznamom.',

    // for reminders
    'LBL_REMINDERS' => 'Pripomenutia',
    'LBL_REMINDERS_ACTIONS' => 'Akcie:',
    'LBL_REMINDERS_POPUP' => 'vztahovaný',
    'LBL_REMINDERS_EMAIL' => 'Email pozvaných',
    'LBL_REMINDERS_WHEN' => 'Kedy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Odstrániť pripomienku',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Pridať všetkých pozvaných',
    'LBL_REMINDERS_ADD_REMINDER' => 'Pridať pripomienku',

    'LBL_RESCHEDULE' => 'Zmena harmonogramu',
    'LBL_RESCHEDULE_COUNT' => 'Pokus o volanie',
    'LBL_RESCHEDULE_DATE' => 'Dátum',
    'LBL_RESCHEDULE_REASON' => 'Dôvod',
    'LBL_RESCHEDULE_ERROR1' => 'Prosím vyberte platný dátum',
    'LBL_RESCHEDULE_ERROR2' => 'Prosím vyberte dôvod',
    'LBL_RESCHEDULE_PANEL' => 'Zmena harmonogramu',
    'LBL_RESCHEDULE_HISTORY' => 'História pokusov o volanie',
    'LBL_CANCEL' => 'Zrušiť',
    'LBL_SAVE' => 'Uložiť',

    'LBL_CALLS_RESCHEDULE' => 'Preplánovanie hovorov',
    'LBL_LIST_STATUS'=>'Stav',
    'LBL_LIST_DATE_MODIFIED'=>'Dátum úpravy',
    'LBL_LIST_DUE_DATE'=>'do dátumu',
    'LBL_RESCHEDULED_BY'=>'podľa',
);
