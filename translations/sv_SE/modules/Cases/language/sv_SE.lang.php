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
    'ERR_DELETE_RECORD' => 'En post måste specificeras för att ta bort företaget.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'KnowledgeBase-förslag',
    'LBL_TOOL_TIP_TITLE' => 'Titel: ',
    'LBL_TOOL_TIP_BODY' => 'Meddelande: ',
    'LBL_TOOL_TIP_INFO' => 'Övrig Info: ',
    'LBL_TOOL_TIP_USE' => 'Använd som: ',
    'LBL_SUGGESTION_BOX' => 'Förslag',
    'LBL_NO_SUGGESTIONS' => 'Inga förslag',
    'LBL_RESOLUTION_BUTTON' => 'Lösning',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Rubrik',
    'LBL_SUGGESTION_BOX_REL' => 'Relevans',

    'LBL_ACCOUNT_ID' => 'Företags-ID',
    'LBL_ACCOUNT_NAME' => 'Företagsnamn:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Konton',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Problemspårare',
    'LBL_CASE_NUMBER' => 'Ärendenummer:',
    'LBL_CASE' => 'Ärende:',
    'LBL_CONTACT_NAME' => 'Kontaktnamn:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Ärenden',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_INVITEE' => 'Kontakter',
    'LBL_MEMBER_OF' => 'Företag',
    'LBL_MODULE_NAME' => 'Ärenden',
    'LBL_MODULE_TITLE' => 'Ärende: Hem',
    'LBL_NEW_FORM_TITLE' => 'Nytt ärende',
    'LBL_NUMBER' => 'Nummer:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
    'LBL_RESOLUTION' => 'Lösning:',
    'LBL_SEARCH_FORM_TITLE' => 'Sök ärende',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Ämne:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_LIST_ASSIGNED' => 'Tilldelat till',
    'LBL_LIST_CLOSE' => 'Stäng',
    'LBL_LIST_FORM_TITLE' => 'Ärendelista',
    'LBL_LIST_LAST_MODIFIED' => 'Senast ändrad',
    'LBL_LIST_MY_CASES' => 'Mina öppna ärenden',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Ämne',

    'LNK_CASE_LIST' => 'Ärende',
    'LNK_NEW_CASE' => 'Skapa fall',
    'LBL_LIST_DATE_CREATED' => 'Datum Skapad',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_TYPE' => 'Typ',
    'LBL_WORK_LOG' => 'Arbets Logg',
    'LNK_IMPORT_CASES' => 'Importera ärenden',

    'LBL_CREATED_USER' => 'Skapad användare',
    'LBL_MODIFIED_USER' => 'Ändrad användare',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekt',
    'LBL_CASE_INFORMATION' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Uppdateringar - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Intern uppdatering',
    'LBL_AOP_CASE_UPDATES' => 'Händelse uppdatering',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expandera alla',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Bilagor:',

    'LBL_AOP_CASE_EVENTS' => 'Händelse event',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Lägg till fil',
    'LBL_REMOVE_CASE_FILE' => 'Ta bort fil',
    'LBL_SELECT_CASE_DOCUMENT' => 'Välj dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Clear document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internt CRM-dokument',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Extern fil',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Skapad av kontakt',
    'LBL_CONTACT_CREATED_BY' => 'Skapad av: ',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Okänd kontakt',
);
