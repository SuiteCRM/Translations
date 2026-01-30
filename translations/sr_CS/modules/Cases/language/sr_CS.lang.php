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
    'ERR_DELETE_RECORD' => 'Morate navesti broj zapisa da bi obrisali kompaniju.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Sugestije iz Baze znanja',
    'LBL_TOOL_TIP_TITLE' => 'Naslov: ',
    'LBL_TOOL_TIP_BODY' => 'Tekst: ',
    'LBL_TOOL_TIP_INFO' => 'Dodatne informacije: ',
    'LBL_TOOL_TIP_USE' => 'Koristi kao: ',
    'LBL_SUGGESTION_BOX' => 'Predlozi',
    'LBL_NO_SUGGESTIONS' => 'Nema predloga',
    'LBL_RESOLUTION_BUTTON' => 'Rezolucija',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Naslov',
    'LBL_SUGGESTION_BOX_REL' => 'Relevantnost',

    'LBL_ACCOUNT_ID' => 'ID naloga',
    'LBL_ACCOUNT_NAME' => 'Naziv kompanije:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kompanije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Praćenje defekata',
    'LBL_CASE_NUMBER' => 'Broj slučaja:',
    'LBL_CASE' => 'Slučaj:',
    'LBL_CONTACT_NAME' => 'Ime kontakta:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_MEMBER_OF' => 'Kompanija',
    'LBL_MODULE_NAME' => 'Slučajevi',
    'LBL_MODULE_TITLE' => 'Slučajevi: Početna strana',
    'LBL_NEW_FORM_TITLE' => 'Novi slučaj',
    'LBL_NUMBER' => 'Broj:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_RESOLUTION' => 'Rezolucija:',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga slučajeva',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Naslov:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_LIST_ASSIGNED' => 'Dodeljeno',
    'LBL_LIST_CLOSE' => 'Zatvori',
    'LBL_LIST_FORM_TITLE' => 'Lista slučajeva',
    'LBL_LIST_LAST_MODIFIED' => 'Poslednja izmena',
    'LBL_LIST_MY_CASES' => 'Moji aktuelni slučajevi',
    'LBL_LIST_NUMBER' => 'Br.',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Naslov',

    'LNK_CASE_LIST' => 'Pregled slučajeva',
    'LNK_NEW_CASE' => 'Kreiraj slučaj',
    'LBL_LIST_DATE_CREATED' => 'Datum kreiranja',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_TYPE' => 'Tip',
    'LBL_WORK_LOG' => 'Log posla',
    'LNK_IMPORT_CASES' => 'Uvezi slučajeve',

    'LBL_CREATED_USER' => 'Kreirao korisnik',
    'LBL_MODIFIED_USER' => 'Izmenio korisnik',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_CASE_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Ažuriraj tekst', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Interna beleška',
    'LBL_AOP_CASE_UPDATES' => 'Ažuriranja slučaja',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Ažuriranja slučajeva niz',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Skupi sve',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Proširi sve',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Dodaci:',

    'LBL_AOP_CASE_EVENTS' => 'Događaji za slučaj',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Prilozi za slučaj:',
    'LBL_ADD_CASE_FILE' => 'Dodaj fajl',
    'LBL_REMOVE_CASE_FILE' => 'Ukloni fajl',
    'LBL_SELECT_CASE_DOCUMENT' => 'Izaberi dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Očisti dokument',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Interni CRM dokument',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Eksterni fajl',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Kreirao kontakt',
    'LBL_CONTACT_CREATED_BY' => 'Autor',
    'LBL_CASE_UPDATE_FORM' => 'Ažuriraj formular za priloge', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
