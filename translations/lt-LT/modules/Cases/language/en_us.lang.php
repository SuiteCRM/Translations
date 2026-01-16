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
    'ERR_DELETE_RECORD' => 'Jūs turite nurodyti įrašo numerį, kad galėtumėte ištrinti klientą.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Žinių bazės pasiūlymai',
    'LBL_TOOL_TIP_TITLE' => 'Pavadinimas:',
    'LBL_TOOL_TIP_BODY' => 'Tekstas: ',
    'LBL_TOOL_TIP_INFO' => 'Additional Info:',
    'LBL_TOOL_TIP_USE' => 'Use as:',
    'LBL_SUGGESTION_BOX' => 'Suggestions',
    'LBL_NO_SUGGESTIONS' => 'No Suggestions',
    'LBL_RESOLUTION_BUTTON' => 'Sprendimas',
    'LBL_SUGGESTION_BOX_STATUS' => 'Būsena',
    'LBL_SUGGESTION_BOX_TITLE' => 'Pareigybės',
    'LBL_SUGGESTION_BOX_REL' => 'Relevance',

    'LBL_ACCOUNT_ID' => 'Kliento ID',
    'LBL_ACCOUNT_NAME' => 'Kliento pavadinimas:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Naudotojai',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Įvykiai',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Klaidos',
    'LBL_CASE_NUMBER' => 'Aptarnavimo numeris:',
    'LBL_CASE' => 'Aptarnavimas:',
    'LBL_CONTACT_NAME' => 'Kontakto vardas:',
    'LBL_CONTACT_ROLE' => 'Rolė',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktas',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Atvejai',
    'LBL_DESCRIPTION' => 'Aprašymas:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_INVITEE' => 'Kontaktas',
    'LBL_MEMBER_OF' => 'Klientas',
    'LBL_MODULE_NAME' => 'Atvejai',
    'LBL_MODULE_TITLE' => 'Aptarnavimai: Pradžia',
    'LBL_NEW_FORM_TITLE' => 'Naujas aptarnavimas',
    'LBL_NUMBER' => 'Numeris:',
    'LBL_PRIORITY' => 'Svarba:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektai',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentai',
    'LBL_RESOLUTION' => 'Sprendimas:',
    'LBL_SEARCH_FORM_TITLE' => 'Aptarnavimų paieška',
    'LBL_STATUS' => 'Būsena:',
    'LBL_SUBJECT' => 'Užrašo tema:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atsakingas vartotojas',
    'LBL_LIST_ACCOUNT_NAME' => 'Kliento pavadinimas',
    'LBL_LIST_ASSIGNED' => 'Priskirtas',
    'LBL_LIST_CLOSE' => 'Užbaigti',
    'LBL_LIST_FORM_TITLE' => 'Aptarnavimai',
    'LBL_LIST_LAST_MODIFIED' => 'Redagavimo data',
    'LBL_LIST_MY_CASES' => 'Mano atidaryti aptarnavimai',
    'LBL_LIST_NUMBER' => 'Nr.',
    'LBL_LIST_PRIORITY' => 'Svarba',
    'LBL_LIST_STATUS' => 'Būsena',
    'LBL_LIST_SUBJECT' => 'Tema:',

    'LNK_CASE_LIST' => 'Aptarnavimai',
    'LNK_NEW_CASE' => 'Sukurti aptarnavimą',
    'LBL_LIST_DATE_CREATED' => 'Sukurta',
    'LBL_ASSIGNED_TO_NAME' => 'Priskirtas',
    'LBL_TYPE' => 'Tipas:',
    'LBL_WORK_LOG' => 'Darbo istorija',
    'LNK_IMPORT_CASES' => 'Importuoti aptarnavimą',

    'LBL_CREATED_USER' => 'Sukūrė',
    'LBL_MODIFIED_USER' => 'Redagavo Vartotojas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektai',
    'LBL_CASE_INFORMATION' => 'Adresato informacija', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Atnaujinti Tekstą', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Vidaus Atnaujinimas',
    'LBL_AOP_CASE_UPDATES' => 'Atvejo atnaujinimai',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Atvejų Naujinimų Gija',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Sutraukti Viską',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Viską Išskleisti',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Prisegtukai:',

    'LBL_AOP_CASE_EVENTS' => 'Atvejo įvykiai',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Bylų failai:',
    'LBL_ADD_CASE_FILE' => 'Pridėti failą',
    'LBL_REMOVE_CASE_FILE' => 'Pašalinti failą',
    'LBL_SELECT_CASE_DOCUMENT' => 'Pasirinkti dokumentą',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Išvalyti dokumentą',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Vidaus CRM dokumentas',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Išorinis failas',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Sukurta Kontakto',
    'LBL_CONTACT_CREATED_BY' => 'Sukūrė:',
    'LBL_CASE_UPDATE_FORM' => 'Atnaujintas priedas nuo', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
