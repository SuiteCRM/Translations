<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_TITLE' => 'Hovory: Domů',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání hovorů',
    'LBL_LIST_FORM_TITLE' => 'Seznam hovorů',
    'LBL_NEW_FORM_TITLE' => 'Naplánovat událost',
    'LBL_LIST_CLOSE' => 'Zavřít',
    'LBL_LIST_SUBJECT' => 'Subject',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Related to',
    'LBL_LIST_RELATED_TO_ID' => 'Související s ID',
    'LBL_LIST_DATE' => 'Datum zahájení',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Předmět:',
    'LBL_REMINDER' => 'Připomínka:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_STATUS' => 'Stav:',
    'LBL_DIRECTION' => 'Spojení:',
    'LBL_DATE' => 'Datum zahájení:',
    'LBL_DURATION' => 'Duration:',
    'LBL_DURATION_HOURS' => 'Doba trvání',
    'LBL_DURATION_MINUTES' => 'Doba trvání',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Start Date & Time:',
    'LBL_TIME' => 'Start Time:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Zaznamenat hovor',
    'LNK_NEW_MEETING' => 'Naplánovat schůzku',
    'LNK_CALL_LIST' => 'Zobrazit hovory',
    'LNK_IMPORT_CALLS' => 'Import hovorů',
    'ERR_DELETE_RECORD' => 'Pro smazání Firmy musíte zadat číslo záznamu.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Vztahuje se k:',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'Plánování',
    'LBL_ADD_INVITEE' => 'Přidat pozvané',
    'LBL_NAME' => 'Název',
    'LBL_FIRST_NAME' => 'Jméno',
    'LBL_LAST_NAME' => 'Příjmení',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telefon',
    'LBL_REMINDER_POPUP' => 'Vyskakovací',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Poslat email všem pozvaným',
    'LBL_EMAIL_REMINDER' => 'Poslat připomenutí emailem',
    'LBL_EMAIL_REMINDER_TIME' => 'Poslat čas připomenutí emailem',
    'LBL_SEND_BUTTON_TITLE' => 'Save & Send Invites',
    'LBL_SEND_BUTTON_LABEL' => 'Save & Send Invites',
    'LBL_DATE_END' => 'Datum ukončení',
    'LBL_REMINDER_TIME' => 'Čas připomínky',
    'LBL_EMAIL_REMINDER_SENT' => 'Poslat připomenutí emialem',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'Přidat',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hovory',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'Nová příležitost',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Iniciativy',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_USERS_SUBPANEL_TITLE' => 'Uživatelé',
    'LBL_OUTLOOK_ID' => 'ID Outlooku',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Poznámky',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_LIST_MY_CALLS' => 'Moje hovory',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ASSIGNED_TO_ID' => 'Přiřazený uživatel',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'PŘEHLED', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Odstranit',
    'LBL_ACCEPT_STATUS' => 'Přijmout stav',
    'LBL_ACCEPT_LINK' => 'Přijmout odkaz',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Vytvořit pozvání',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'Jako Iniciativa',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Zrušit',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'Typ opakování',
    'LBL_REPEAT_INTERVAL' => 'Interval opakování',
    'LBL_REPEAT_DOW' => 'Opakovat Dow',
    'LBL_REPEAT_UNTIL' => 'Repeat Until',
    'LBL_REPEAT_COUNT' => 'Počet opakování',
    'LBL_REPEAT_PARENT_ID' => 'Opakování ID nadřazené položky',
    'LBL_RECURRING_SOURCE' => 'Opakovaný zdroj',

    'LBL_SYNCED_RECURRING_MSG' => 'Tento hovor pochází z jiného systému a byl synchronizován do SuiteCRM. K provedení změn přejděte do záznamu hovoru v tom systému. Změny pak mohou být synchronizovány.',

    // for reminders
    'LBL_REMINDERS' => 'Zobrazovat připomínání?',
    'LBL_REMINDERS_ACTIONS' => 'Akce:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email pozvaným',
    'LBL_REMINDERS_WHEN' => 'Kdy:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Odebrat připomenutí',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Přidat všechny pozvané',
    'LBL_REMINDERS_ADD_REMINDER' => 'Přidat upozornění',

    'LBL_RESCHEDULE' => 'Přeplánovat',
    'LBL_RESCHEDULE_COUNT' => 'Pokusy o Hovor',
    'LBL_RESCHEDULE_DATE' => 'Datum',
    'LBL_RESCHEDULE_REASON' => 'Důvod',
    'LBL_RESCHEDULE_ERROR1' => 'Prosím vyberte platné datum',
    'LBL_RESCHEDULE_ERROR2' => 'Prosím vyberte důvod',
    'LBL_RESCHEDULE_PANEL' => 'Přeplánovat',
    'LBL_RESCHEDULE_HISTORY' => 'Historie pokusů o hovor',
    'LBL_CANCEL' => 'Zrušit',
    'LBL_SAVE' => 'Uložit',

    'LBL_CALLS_RESCHEDULE' => 'Přeplánování hovorů',
    'LBL_LIST_STATUS'=>'Stav',
    'LBL_LIST_DATE_MODIFIED'=>'Datum změny',
    'LBL_LIST_DUE_DATE'=>'Do data',
    'LBL_RESCHEDULED_BY'=>'by',
);
