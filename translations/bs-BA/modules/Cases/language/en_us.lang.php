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
    'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da obrišete račun.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'KnowledgeBase Suggestions',
    'LBL_TOOL_TIP_TITLE' => 'Naslov:',
    'LBL_TOOL_TIP_BODY' => 'Tijelo:',
    'LBL_TOOL_TIP_INFO' => 'Dodatne informacije:',
    'LBL_TOOL_TIP_USE' => 'Koristi kao:',
    'LBL_SUGGESTION_BOX' => 'Prijedlozi',
    'LBL_NO_SUGGESTIONS' => 'Nema prijedloga',
    'LBL_RESOLUTION_BUTTON' => 'Rezolucija',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Naslov',
    'LBL_SUGGESTION_BOX_REL' => 'Relevantnost',

    'LBL_ACCOUNT_ID' => 'ID klijenta',
    'LBL_ACCOUNT_NAME' => 'Naziv klijenta:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klijenti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugovi',
    'LBL_CASE_NUMBER' => 'Broj slučaja:',
    'LBL_CASE' => 'Slučaj:',
    'LBL_CONTACT_NAME' => 'Ime kontakta:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historija',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_MEMBER_OF' => 'Klijent',
    'LBL_MODULE_NAME' => 'Slučajevi',
    'LBL_MODULE_TITLE' => 'Slučajevi: Početno',
    'LBL_NEW_FORM_TITLE' => 'Novi slučaj',
    'LBL_NUMBER' => 'Broj:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_RESOLUTION' => 'Rješenje:',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraživanje slučajeva',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Naziv:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodijeljeni korisnik',
    'LBL_LIST_ACCOUNT_NAME' => 'Naziv računa',
    'LBL_LIST_ASSIGNED' => 'Dodijeljeno',
    'LBL_LIST_CLOSE' => 'Zatvori',
    'LBL_LIST_FORM_TITLE' => 'Lista slučajeva',
    'LBL_LIST_LAST_MODIFIED' => 'Zadnja izmjena',
    'LBL_LIST_MY_CASES' => 'Moji otvoreni slučajevi',
    'LBL_LIST_NUMBER' => 'Broj',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Naziv',

    'LNK_CASE_LIST' => 'Pregledaj slučajeve',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LBL_LIST_DATE_CREATED' => 'Datum kreiranja',
    'LBL_ASSIGNED_TO_NAME' => 'Dodijeljeno korisniku',
    'LBL_TYPE' => 'Tip',
    'LBL_WORK_LOG' => 'Dnevnik rada',
    'LNK_IMPORT_CASES' => 'Uvoz slučajeva',

    'LBL_CREATED_USER' => 'Kreirani korisnik',
    'LBL_MODIFIED_USER' => 'Modificirani korisnik',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_CASE_INFORMATION' => 'Pregled', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Ažuriraj tekst', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Interno ažuriranje',
    'LBL_AOP_CASE_UPDATES' => 'Ažuriranja slučajeva',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Skupi sve',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Proširi sve',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Prilozi:',

    'LBL_AOP_CASE_EVENTS' => 'Događaji u slučaju',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Privitci slučajeva:',
    'LBL_ADD_CASE_FILE' => 'Dodaj datoteku',
    'LBL_REMOVE_CASE_FILE' => 'Ukloni datoteku',
    'LBL_SELECT_CASE_DOCUMENT' => 'Odaberi dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Očisti dokument',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Interni CRM dokument',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Vanjska datoteka',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Kreirano od kontakta',
    'LBL_CONTACT_CREATED_BY' => 'Kreirao',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
