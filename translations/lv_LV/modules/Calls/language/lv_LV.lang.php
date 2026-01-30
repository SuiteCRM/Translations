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
    'LBL_MODULE_NAME' => 'Zvani',
    'LBL_MODULE_TITLE' => 'Zvani: Sākums',
    'LBL_SEARCH_FORM_TITLE' => 'Zvanu meklēšana',
    'LBL_LIST_FORM_TITLE' => 'Zvanu saraksts',
    'LBL_NEW_FORM_TITLE' => 'Izveidot tikšanos:',
    'LBL_LIST_CLOSE' => 'Slēgt',
    'LBL_LIST_SUBJECT' => 'Temats',
    'LBL_LIST_CONTACT' => 'Kontaktpersonas',
    'LBL_LIST_RELATED_TO' => 'Attiecas uz',
    'LBL_LIST_RELATED_TO_ID' => 'Attiecas uz ID',
    'LBL_LIST_DATE' => 'Sākuma datums:',
    'LBL_LIST_DIRECTION' => 'Virziens',
    'LBL_SUBJECT' => 'Temats:',
    'LBL_REMINDER' => 'Atgādinājumi:',
    'LBL_CONTACT_NAME' => 'Kontakts:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_STATUS' => 'Statuss:',
    'LBL_DIRECTION' => 'Secība:',
    'LBL_DATE' => 'Sākuma datums:',
    'LBL_DURATION' => 'Ilgums:',
    'LBL_DURATION_HOURS' => 'Ilgums stundās:',
    'LBL_DURATION_MINUTES' => 'Ilgums minutēs:',
    'LBL_HOURS_MINUTES' => '(stundas/minūtes)',
    'LBL_DATE_TIME' => 'Sākuma datums un laiks:',
    'LBL_TIME' => 'Sākuma laiks:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Ieplānot zvanu [Alt+C]',
    'LNK_NEW_MEETING' => 'Ieplānot tikšanos [Alt+M]',
    'LNK_CALL_LIST' => 'Aplūkot zvanus',
    'LNK_IMPORT_CALLS' => 'Importēt zvanus',
    'ERR_DELETE_RECORD' => 'Jānorāda ieraksta numurs, lai dzēstu kontu.',
    'LBL_INVITEE' => 'Ielūgtais',
    'LBL_RELATED_TO' => 'Saistīts ar:',
    'LNK_NEW_APPOINTMENT' => 'Izveidot tikšanos:',
    'LBL_SCHEDULING_FORM_TITLE' => 'Plānošana',
    'LBL_ADD_INVITEE' => 'Pievienot dalībniekus',
    'LBL_NAME' => 'Vārds:',
    'LBL_FIRST_NAME' => 'Vārds',
    'LBL_LAST_NAME' => 'Uzvārds',
    'LBL_EMAIL' => 'E-pasts',
    'LBL_PHONE' => 'Phone',
    'LBL_REMINDER_POPUP' => 'Uznirstošais atgādinājums',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'E-pasts visiem dalībniekiem',
    'LBL_EMAIL_REMINDER' => 'E-pasta atgādinājums',
    'LBL_EMAIL_REMINDER_TIME' => 'E-pasta atgādinājuma laiks',
    'LBL_SEND_BUTTON_TITLE' => 'Sūtīt uzaicinājumus [Alt+I]',
    'LBL_SEND_BUTTON_LABEL' => 'Sūtīt uzaicinājumus [Alt+I]',
    'LBL_DATE_END' => 'Beigu datums',
    'LBL_REMINDER_TIME' => 'Atgādinājuma laiks',
    'LBL_EMAIL_REMINDER_SENT' => 'E-pasta atgādinājums nosūtīts',
    'LBL_SEARCH_BUTTON' => 'Meklēšana',
    'LBL_ADD_BUTTON' => 'Pievienot',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Zvani',
    'LNK_SELECT_ACCOUNT' => 'Izvēlēties uzņēmumu [Alt+A]',
    'LNK_NEW_ACCOUNT' => 'Jauns klients',
    'LNK_NEW_OPPORTUNITY' => 'Jauna iespēja',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Interesenti',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_USERS_SUBPANEL_TITLE' => 'Lietotājs',
    'LBL_OUTLOOK_ID' => 'Outlook ID',
    'LBL_MEMBER_OF' => 'Dalībnieks',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Piezīmes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_LIST_MY_CALLS' => 'Mani zvani',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_ASSIGNED_TO_ID' => 'Piešķirts lietotājam',
    'NOTICE_DURATION_TIME' => 'Ilgumam jābūt lielākam par 0',
    'LBL_CALL_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Izņemt',
    'LBL_ACCEPT_STATUS' => 'Apstiprināt statusu',
    'LBL_ACCEPT_LINK' => 'Akceptēt saiti',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Izveidot ielūgumu',
    'LBL_CREATE_CONTACT' => 'Kā kontaktu',
    'LBL_CREATE_LEAD' => 'Kā interesentu',
    'LBL_CREATE_AND_ADD' => 'Izveidot un Pievienot',
    'LBL_CANCEL_CREATE_INVITEE' => 'Atcelt',
    'LBL_EMPTY_SEARCH_RESULT' => 'Atvainojiet, rezultāti netika atrasti. Lūdzu zemāk izveidojiet ielūgumu.',
    'LBL_NO_ACCESS' => 'Jums nav tiesības veidot $moduli',

    'LBL_REPEAT_TYPE' => 'Atkārtošanās veids',
    'LBL_REPEAT_INTERVAL' => 'Intervāls',
    'LBL_REPEAT_DOW' => 'Atkārtot uz leju',
    'LBL_REPEAT_UNTIL' => 'Atkārtot, kamēr',
    'LBL_REPEAT_COUNT' => 'Atkārtošanās skaits',
    'LBL_REPEAT_PARENT_ID' => 'Atkārtošanās vecāka ID',
    'LBL_RECURRING_SOURCE' => 'Atkārtošanas avots',

    'LBL_SYNCED_RECURRING_MSG' => 'Šī tikšanās ir izveidota citā sistēmā un sinhronizēta ar SuiteCRM. Izmaiņu veikšanai izmantojiet tikšanās avota sistēmu. Izmaiņas avota sistēmā var sasinhronizēt ar šo ierakstu.',

    // for reminders
    'LBL_REMINDERS' => 'Atgādinājumi',
    'LBL_REMINDERS_ACTIONS' => 'Darbības:',
    'LBL_REMINDERS_POPUP' => 'Uznirstošais atgādinājums',
    'LBL_REMINDERS_EMAIL' => 'E-pasta uzaicinātās personas',
    'LBL_REMINDERS_WHEN' => 'Kad:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Noņemt atgādinājumu',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Pievienot visas uzaicinātās personas',
    'LBL_REMINDERS_ADD_REMINDER' => 'Pievienot atgādinājumu',

    'LBL_RESCHEDULE' => 'Pārplānot',
    'LBL_RESCHEDULE_COUNT' => 'Zvana mēģinājums',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'Iemesls',
    'LBL_RESCHEDULE_ERROR1' => 'Lūdzu, izvēlieties derīgu datumu',
    'LBL_RESCHEDULE_ERROR2' => 'Lūdzu, izvēlieties iemeslu',
    'LBL_RESCHEDULE_PANEL' => 'Pārplānot',
    'LBL_RESCHEDULE_HISTORY' => 'Zvana mēģinājumu vēsture',
    'LBL_CANCEL' => 'Atcelt',
    'LBL_SAVE' => 'Pabeigt',

    'LBL_CALLS_RESCHEDULE' => 'Calls Reschedule',
    'LBL_LIST_STATUS'=>'Statuss',
    'LBL_LIST_DATE_MODIFIED'=>'Modificēts',
    'LBL_LIST_DUE_DATE'=>'Izpildes datums',
    'LBL_RESCHEDULED_BY'=>'kas',
);
