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
    'ERR_DELETE_RECORD' => 'Pro smazání účtu musíte určit číslo záznamu.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Návrhy databáze znalostí',
    'LBL_TOOL_TIP_TITLE' => 'Nadpis:',
    'LBL_TOOL_TIP_BODY' => 'Tělo:',
    'LBL_TOOL_TIP_INFO' => 'Další informace:',
    'LBL_TOOL_TIP_USE' => 'Použít jako:',
    'LBL_SUGGESTION_BOX' => 'Návrhy',
    'LBL_NO_SUGGESTIONS' => 'Žádné návrhy',
    'LBL_RESOLUTION_BUTTON' => 'Rozlišení',
    'LBL_SUGGESTION_BOX_STATUS' => 'Stav',
    'LBL_SUGGESTION_BOX_TITLE' => 'Nadpis',
    'LBL_SUGGESTION_BOX_REL' => 'Význam',

    'LBL_ACCOUNT_ID' => 'ID Firmy',
    'LBL_ACCOUNT_NAME' => 'Název Firmy:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmy',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
    'LBL_CASE_NUMBER' => 'Případ číslo:',
    'LBL_CASE' => 'Případ:',
    'LBL_CONTACT_NAME' => 'Jméno kontaktu:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Případy',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_MEMBER_OF' => 'Firma',
    'LBL_MODULE_NAME' => 'Případy',
    'LBL_MODULE_TITLE' => 'Případy: Domů',
    'LBL_NEW_FORM_TITLE' => 'Nový případ',
    'LBL_NUMBER' => 'Číslo:',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_RESOLUTION' => 'Výsledek:',
    'LBL_SEARCH_FORM_TITLE' => 'Hledat případ',
    'LBL_STATUS' => 'Stav:',
    'LBL_SUBJECT' => 'Předmět:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Přiřazený uživatel',
    'LBL_LIST_ACCOUNT_NAME' => 'Název Firmy',
    'LBL_LIST_ASSIGNED' => 'Přiřazeno k',
    'LBL_LIST_CLOSE' => 'Zavřít',
    'LBL_LIST_FORM_TITLE' => 'Seznam případů',
    'LBL_LIST_LAST_MODIFIED' => 'Poslední změna',
    'LBL_LIST_MY_CASES' => 'Otevřené případy',
    'LBL_LIST_NUMBER' => 'Číslo',
    'LBL_LIST_PRIORITY' => 'Priorita',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_SUBJECT' => 'Předmět',

    'LNK_CASE_LIST' => 'Případy',
    'LNK_NEW_CASE' => 'Vytvořit případ',
    'LBL_LIST_DATE_CREATED' => 'Datum vytvoření',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_TYPE' => 'Typ',
    'LBL_WORK_LOG' => 'Pracovní Log',
    'LNK_IMPORT_CASES' => 'Importovat případy',

    'LBL_CREATED_USER' => 'Vytvořený uživatel',
    'LBL_MODIFIED_USER' => 'Upravený uživatel',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_CASE_INFORMATION' => 'Informace o klientovi', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Aktualizovat text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Interní aktualizace',
    'LBL_AOP_CASE_UPDATES' => 'Aktualizace případu',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Závitová aktualizace případu',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Zavřít vše',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Otevřít vše',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Přílohy:',

    'LBL_AOP_CASE_EVENTS' => 'Události případu',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Přílohy případu:',
    'LBL_ADD_CASE_FILE' => 'Přidat soubor',
    'LBL_REMOVE_CASE_FILE' => 'Odebrat soubor',
    'LBL_SELECT_CASE_DOCUMENT' => 'Vybrat dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Vyprázdnit dokument',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Vnitřní CRM dokument',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Externí soubor',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Vytvořeno kontaktem',
    'LBL_CONTACT_CREATED_BY' => 'Vytvořil',
    'LBL_CASE_UPDATE_FORM' => 'Upravit formulář přílohy', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Neznámý kontakt',
);
