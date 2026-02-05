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
    'LBL_MODULE_NAME' => 'Aktivity',
    'LBL_MODULE_TITLE' => 'Aktivity: Domů',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat aktivity',
    'LBL_LIST_FORM_TITLE' => 'Seznam aktivit',
    'LBL_LIST_SUBJECT' => 'Předmět',
    'LBL_OVERVIEW' => 'Informace o klientovi', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'ÚKOLY', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'SCHŮZKY', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'HOVORY', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'EMAILY', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'POZNÁMKY', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'TISK', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Schůzky',
    'LBL_CALL_TYPE' => 'Hovor',
    'LBL_EMAIL_TYPE' => 'E-mail',
    'LBL_NOTE_TYPE' => 'Poznámka',
    'LBL_DATA_TYPE_START' => 'Začátek:',
    'LBL_DATA_TYPE_SENT' => 'Odesláno:',
    'LBL_DATA_TYPE_MODIFIED' => 'Změněno:',
    'LBL_LIST_CONTACT' => 'Kontakt',
    'LBL_LIST_RELATED_TO' => 'Související s',
    'LBL_LIST_DATE' => 'Datum',
    'LBL_LIST_CLOSE' => 'Zavřít',
    'LBL_SUBJECT' => 'Předmět:',
    'LBL_STATUS' => 'Stav:',
    'LBL_LOCATION' => 'Umístění:',
    'LBL_DATE_TIME' => 'Datum a čas začátku:',
    'LBL_DATE' => 'Datum začátku:',
    'LBL_TIME' => 'Čas začátku:',
    'LBL_DURATION' => 'Doba trvání:',
    'LBL_HOURS_MINS' => '(hodiny/minuty)',
    'LBL_CONTACT_NAME' => 'Kontaktní jméno: ',
    'LBL_DESCRIPTION' => 'Popis:',
    'LNK_NEW_CALL' => 'Zaznamenat hovor',
    'LNK_NEW_MEETING' => 'Naplánovat schůzku',
    'LNK_NEW_TASK' => 'Vytvořit úkol',
    'LNK_NEW_NOTE' => 'Přidat poznámku nebo přílohu',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Zobrazit hovory',
    'LNK_MEETING_LIST' => 'Zobrazit schůzky',
    'LNK_TASK_LIST' => 'Zobrazit úkoly',
    'LNK_NOTE_LIST' => 'Poznámky',
    'LBL_DELETE_ACTIVITY' => 'Opravdu chcete smazat tuto aktivitu?',
    'ERR_DELETE_RECORD' => 'Pro smazání účtu musíte určit číslo záznamu.',
    'LBL_INVITEE' => 'Pozvaní',
    'LBL_LIST_DIRECTION' => 'Adresa',
    'LBL_DIRECTION' => 'Adresa',
    'LNK_NEW_APPOINTMENT' => 'Nová schůzka',
    'LNK_VIEW_CALENDAR' => 'Dnes',
    'LBL_OPEN_ACTIVITIES' => 'Otevřít aktivity',
    'LBL_HISTORY' => 'Historie',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Vytvořit úkol',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Vytvořit úkol',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Naplánovat schůzku',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Naplánovat schůzku',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Zaznamenat hovor',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Přidat poznámku nebo přílohu',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Přidat poznámku nebo přílohu',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archivovat zprávu',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archivovat zprávu',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_DUE_DATE' => 'Do data',
    'LBL_LIST_LAST_MODIFIED' => 'Poslední změna',
    'LNK_IMPORT_CALLS' => 'Importovat hovory',
    'LNK_IMPORT_MEETINGS' => 'Importovat schůzky',
    'LNK_IMPORT_TASKS' => 'Import úkolů',
    'LNK_IMPORT_NOTES' => 'Importovat poznámky',
    'LBL_ACCEPT_THIS' => 'Přijmout?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Otevřít aktivity',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Přiřazený uživatel',

    'LBL_ACCEPT' => 'Přijmout' /*for 508 compliance fix*/,
);
