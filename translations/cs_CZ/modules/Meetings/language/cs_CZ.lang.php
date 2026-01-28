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
    'LBL_ACCEPT_THIS' => 'Přijmout?',
    'LBL_ADD_BUTTON' => 'Přidat',
    'LBL_ADD_INVITEE' => 'Přidat pozvané',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_CREATED_BY' => 'Vytvořil',
    'LBL_DATE_END' => 'Ukončeno',
    'LBL_DATE_TIME' => 'Datum a čas začátku:',
    'LBL_DATE' => 'Datum začátku:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Schůzky',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_DIRECTION' => 'Spojení:',
    'LBL_DURATION_HOURS' => 'Doba trvání',
    'LBL_DURATION_MINUTES' => 'Doba trvání',
    'LBL_DURATION' => 'Doba trvání:',
    'LBL_EMAIL' => 'E-mail',
    'LBL_FIRST_NAME' => 'Jméno',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hodiny/minuty)',
    'LBL_INVITEE' => 'Pozvaní',
    'LBL_LAST_NAME' => 'Příjmení',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Přiřazený uživatel',
    'LBL_LIST_CLOSE' => 'Zavřít',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_DATE_MODIFIED' => 'Datum změny',
    'LBL_LIST_DATE' => 'Datum začátku',
    'LBL_LIST_DIRECTION' => 'Adresa',
    'LBL_LIST_DUE_DATE' => 'Do data',
    'LBL_LIST_FORM_TITLE' => 'Seznam schůzek',
    'LBL_LIST_MY_MEETINGS' => 'Moje schůzky',
    'LBL_LIST_RELATED_TO' => 'Související s',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_SUBJECT' => 'Předmět',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciativy',
    'LBL_LOCATION' => 'Umístění:',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Změnil',
    'LBL_MODULE_NAME' => 'Schůzky',
    'LBL_MODULE_TITLE' => 'Schůzky: Domů',
    'LBL_NAME' => 'Název',
    'LBL_NEW_FORM_TITLE' => 'Naplánovat událost',
    'LBL_OUTLOOK_ID' => 'ID Outlooku',
    'LBL_SEQUENCE' => 'Posloupnost aktualizace schůzky',
    'LBL_PHONE' => 'Telefon práce:',
    'LBL_REMINDER_TIME' => 'Čas připomínky',
    'LBL_EMAIL_REMINDER_SENT' => 'Poslat připomenutí emialem',
    'LBL_REMINDER' => 'Upomínka:',
    'LBL_REMINDER_POPUP' => 'Vyskakovací',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Poslat email všem pozvaným',
    'LBL_EMAIL_REMINDER' => 'Poslat připomenutí emailem',
    'LBL_EMAIL_REMINDER_TIME' => 'Poslat čas připomenutí emailem',
    'LBL_REMOVE' => 'Odebrat',
    'LBL_SCHEDULING_FORM_TITLE' => 'Plánování',
    'LBL_SEARCH_BUTTON' => 'Hledat',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání schůzky',
    'LBL_SEND_BUTTON_LABEL' => 'Odeslat pozvání',
    'LBL_SEND_BUTTON_TITLE' => 'Odeslat pozvání',
    'LBL_STATUS' => 'Stav:',
    'LBL_TYPE' => 'Typ schůzky',
    'LBL_PASSWORD' => 'Heslo schůzky',
    'LBL_URL' => 'Spustit/Připojit se ke schůzce',
    'LBL_HOST_URL' => 'URL hostitele',
    'LBL_DISPLAYED_URL' => 'Zobraz URL',
    'LBL_CREATOR' => 'Tvůrce schůzek',
    'LBL_EXTERNALID' => 'Externí App ID',
    'LBL_SUBJECT' => 'Předmět:',
    'LBL_TIME' => 'Čas začátku:',
    'LBL_USERS_SUBPANEL_TITLE' => 'Uživatelé',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Rodičovský typ',
    'LBL_PARENT_ID' => 'Rodičovské ID ',
    'LNK_MEETING_LIST' => 'Zobrazit schůzky',
    'LNK_NEW_APPOINTMENT' => 'Naplánovat událost',
    'LNK_NEW_MEETING' => 'Naplánovat schůzku',
    'LNK_IMPORT_MEETINGS' => 'Importovat schůzky',

    'LBL_CREATED_USER' => 'Vytvořený uživatel',
    'LBL_MODIFIED_USER' => 'Upravený uživatel',
    'NOTICE_DURATION_TIME' => 'Doba trvání musí být větší než 0',
    'LBL_MEETING_INFORMATION' => 'Informace o klientovi', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Připojit se ke schůzce',
    'LBL_ACCEPT_STATUS' => 'Přijmout stav',
    'LBL_ACCEPT_LINK' => 'Přijmout odkaz',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Nemůžete se připojit k této schůzce, protože nejste pozván.',
    'LBL_EXTNOT_RECORD_LINK' => 'Zobrazit schůzku',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Nemůžete spustit tuto schůzku, protože nejste její správce ani vlastník.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Vytvořit pozvání',
    'LBL_CREATE_CONTACT' => 'Jako kontakt',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'Jako Iniciativa',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Vytvořit & přidat',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušit',
    'LBL_EMPTY_SEARCH_RESULT' => 'Nebyly nalezeny žádné výsledky. Prosím vytvořte pozvání níže.',
    'LBL_NO_ACCESS' => 'Nemáte oprávnění k vytvoření $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Typ opakování',
    'LBL_REPEAT_INTERVAL' => 'Interval opakování',
    'LBL_REPEAT_DOW' => 'Opakovat Dow',
    'LBL_REPEAT_UNTIL' => 'Opakovat dokud',
    'LBL_REPEAT_COUNT' => 'Počet opakování',
    'LBL_REPEAT_PARENT_ID' => 'Opakování ID nadřazené položky',
    'LBL_RECURRING_SOURCE' => 'Opakovaný zdroj',

    'LBL_SYNCED_RECURRING_MSG' => 'Tato schůzka pochází z jiného systému a byla synchronizována do SuiteCRM. K provedení změn přejděte do záznamu schůzky v tom systému. Změny pak mohou být synchronizovány.',
    'LBL_RELATED_TO' => 'Souvisí s:',

    // for reminders
    'LBL_REMINDERS' => 'Zobrazovat připomínání?',
    'LBL_REMINDERS_ACTIONS' => 'Akce:',
    'LBL_REMINDERS_POPUP' => 'Vyskakovací',
    'LBL_REMINDERS_EMAIL' => 'Email pozvaným',
    'LBL_REMINDERS_WHEN' => 'Kdy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Odebrat připomenutí',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Přidat všechny pozvané',
    'LBL_REMINDERS_ADD_REMINDER' => 'Přidat upozornění',

    // for google sync
    'LBL_GSYNC_ID' => 'ID události Google',
    'LBL_GSYNC_LASTSYNC' => 'Poslední časové razítko Google Sync',
);
