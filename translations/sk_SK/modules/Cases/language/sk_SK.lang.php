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
    'ERR_DELETE_RECORD' => 'K odstráneniu účtu, musíte zadať číslo záznamu.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Návrhy z databázy vedomostí',
    'LBL_TOOL_TIP_TITLE' => 'Názov: ',
    'LBL_TOOL_TIP_BODY' => 'Obsah: ',
    'LBL_TOOL_TIP_INFO' => 'Ďalšie informácie: ',
    'LBL_TOOL_TIP_USE' => 'Použiť ako: ',
    'LBL_SUGGESTION_BOX' => 'Návrhy',
    'LBL_NO_SUGGESTIONS' => 'Žiadne návrhy',
    'LBL_RESOLUTION_BUTTON' => 'Rozhodnutie',
    'LBL_SUGGESTION_BOX_STATUS' => 'Stav',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titul',
    'LBL_SUGGESTION_BOX_REL' => 'Význam',

    'LBL_ACCOUNT_ID' => 'Firma ID',
    'LBL_ACCOUNT_NAME' => 'Názov Firma:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmy',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Chyby',
    'LBL_CASE_NUMBER' => 'Číslo prípadu:',
    'LBL_CASE' => 'Prípad:',
    'LBL_CONTACT_NAME' => 'Meno Kontaktu:',
    'LBL_CONTACT_ROLE' => 'Pozícia:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prípady',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_MEMBER_OF' => 'Firma',
    'LBL_MODULE_NAME' => 'Prípady',
    'LBL_MODULE_TITLE' => 'Prípad: Hlavná stránka',
    'LBL_NEW_FORM_TITLE' => 'Nový prípad',
    'LBL_NUMBER' => 'Číslo:',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_RESOLUTION' => 'Rozhodutie:',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať Prípad',
    'LBL_STATUS' => 'Stav:',
    'LBL_SUBJECT' => 'Predmet:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_ASSIGNED' => 'Priradený k',
    'LBL_LIST_CLOSE' => 'Uzavrieť',
    'LBL_LIST_FORM_TITLE' => 'Zoznam Prípadov',
    'LBL_LIST_LAST_MODIFIED' => 'Posledná zmena',
    'LBL_LIST_MY_CASES' => 'Moje otvorené Prípady',
    'LBL_LIST_NUMBER' => 'Číslo',
    'LBL_LIST_PRIORITY' => 'Priorita',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_SUBJECT' => 'Predmet',

    'LNK_CASE_LIST' => 'Zobraziť Prípady',
    'LNK_NEW_CASE' => 'Vytvoriť prípad',
    'LBL_LIST_DATE_CREATED' => 'Dátum vytvorenia',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_TYPE' => 'Typ',
    'LBL_WORK_LOG' => 'Pracovný záznam',
    'LNK_IMPORT_CASES' => 'Importovať Prípady',

    'LBL_CREATED_USER' => 'Vytvorený užívateľ',
    'LBL_MODIFIED_USER' => 'Upravený užívateľ',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekty',
    'LBL_CASE_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Aktualizovať - Správu', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Interná informácia',
    'LBL_AOP_CASE_UPDATES' => 'Zoznam Aktualizácii',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Konverzácia aktualizácií k prípadu',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Zbaliť všetko',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Rozbaliť všetko',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Prílohy:',

    'LBL_AOP_CASE_EVENTS' => 'Události prípadu',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Prílohy k prípadu:',
    'LBL_ADD_CASE_FILE' => 'Pridať súbor',
    'LBL_REMOVE_CASE_FILE' => 'Odstrániť súbor',
    'LBL_SELECT_CASE_DOCUMENT' => 'Vybrať dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Vyčisti dokument',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Interný CRM dokument',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Externý súbor',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Vytvorené kontaktom',
    'LBL_CONTACT_CREATED_BY' => 'Vytvorené podľa',
    'LBL_CASE_UPDATE_FORM' => 'Aktualizácie pre formulár prílohy', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
