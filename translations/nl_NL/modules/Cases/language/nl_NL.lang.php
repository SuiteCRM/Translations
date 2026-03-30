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
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Kennisbank suggesties:',
    'LBL_TOOL_TIP_TITLE' => 'Titel:',
    'LBL_TOOL_TIP_BODY' => 'Inhoud:',
    'LBL_TOOL_TIP_INFO' => 'Aanvullende informatie:',
    'LBL_TOOL_TIP_USE' => 'Gebruiken als:',
    'LBL_SUGGESTION_BOX' => 'Suggesties',
    'LBL_NO_SUGGESTIONS' => 'Geen suggesties',
    'LBL_RESOLUTION_BUTTON' => 'Resolution',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Title',
    'LBL_SUGGESTION_BOX_REL' => 'Relevantie',

    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CASE_NUMBER' => 'Verzoek nummer:',
    'LBL_CASE' => 'Verzoek:',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_DESCRIPTION' => 'Omschrijving: ',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_INVITEE' => 'Contactpersonen',
    'LBL_MEMBER_OF' => 'Account',
    'LBL_MODULE_NAME' => 'Verzoeken',
    'LBL_MODULE_TITLE' => 'Verzoeken: Start',
    'LBL_NEW_FORM_TITLE' => 'Nieuw verzoek',
    'LBL_NUMBER' => 'Number:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_RESOLUTION' => 'Resolution:',
    'LBL_SEARCH_FORM_TITLE' => 'Verzoeken vinden',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_ASSIGNED' => 'Toegewezen aan',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_FORM_TITLE' => 'Verzoeklijst',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_LIST_MY_CASES' => 'Mijn openstaande verzoeken',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subject',

    'LNK_CASE_LIST' => 'Bekijk verzoeken',
    'LNK_NEW_CASE' => 'Create Case',
    'LBL_LIST_DATE_CREATED' => 'Date Created',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_TYPE' => 'Type',
    'LBL_WORK_LOG' => 'Werk logboek',
    'LNK_IMPORT_CASES' => 'Import verzoeken',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_CASE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Bijwerken tekst', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Dossier bewerking klaargezet',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Alles inklappen',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Alles uitklappen',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Bijlagen:',

    'LBL_AOP_CASE_EVENTS' => 'Verzoeken gebeurtenissen',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Dossier bijlage',
    'LBL_ADD_CASE_FILE' => 'Toevoegen bijlage',
    'LBL_REMOVE_CASE_FILE' => 'Verwijderen bijlage',
    'LBL_SELECT_CASE_DOCUMENT' => 'Selecteer document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Wissen document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Intern CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Externe bijlage',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Gemaakt door contactpersoon',
    'LBL_CONTACT_CREATED_BY' => 'Aangemaakt door',
    'LBL_CASE_UPDATE_FORM' => 'Bijlage bijwerken', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Onbekende contactpersoon',
);
