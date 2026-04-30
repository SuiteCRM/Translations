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
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette denne kontoen.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Forslag til Kunnskapsbase',
    'LBL_TOOL_TIP_TITLE' => 'Tittel:',
    'LBL_TOOL_TIP_BODY' => 'Hoveddel:',
    'LBL_TOOL_TIP_INFO' => 'Tilleggsinformasjon:',
    'LBL_TOOL_TIP_USE' => 'Bruk som:',
    'LBL_SUGGESTION_BOX' => 'Forslag',
    'LBL_NO_SUGGESTIONS' => 'Ingen forslag',
    'LBL_RESOLUTION_BUTTON' => 'Løsning',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Tittel',
    'LBL_SUGGESTION_BOX_REL' => 'Relevans',

    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CASE_NUMBER' => 'Saksnummer:',
    'LBL_CASE' => 'Sak:',
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Cases',
    'LBL_DESCRIPTION' => 'Beskrivelse:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    'LBL_INVITEE' => 'Contacts',
    'LBL_MEMBER_OF' => 'Account',
    'LBL_MODULE_NAME' => 'Cases',
    'LBL_MODULE_TITLE' => 'Kundestøtte: Forside',
    'LBL_NEW_FORM_TITLE' => 'Ny sak',
    'LBL_NUMBER' => 'Number:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_RESOLUTION' => 'Resolution:',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter sak',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned User',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_ASSIGNED' => 'Tildelt',
    'LBL_LIST_CLOSE' => 'Close',
    'LBL_LIST_FORM_TITLE' => 'Saksliste',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_LIST_MY_CASES' => 'Mine åpne saker (kundestøtte)',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subject',

    'LNK_CASE_LIST' => 'Kundestøtte',
    'LNK_NEW_CASE' => 'Create Case',
    'LBL_LIST_DATE_CREATED' => 'Date Created',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_TYPE' => 'Type',
    'LBL_WORK_LOG' => 'Arbeidslogg',
    'LNK_IMPORT_CASES' => 'Importer Saker',

    'LBL_CREATED_USER' => 'Opprettet bruker',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_CASE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Oppdater Tekst', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Saks Oppdateringer',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Saksoppdateringer i trådform',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Legg sammen alle',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Utvid alle',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Vedlegg:',

    'LBL_AOP_CASE_EVENTS' => 'Saks Hendelser',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Saks Vedlegg:',
    'LBL_ADD_CASE_FILE' => 'Legg til fil',
    'LBL_REMOVE_CASE_FILE' => 'Fjern fi',
    'LBL_SELECT_CASE_DOCUMENT' => 'Velg dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Tøm dokument',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internt CRM-dokument',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Ekstern fil',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Opprettet av kontakt',
    'LBL_CONTACT_CREATED_BY' => 'Created by',
    'LBL_CASE_UPDATE_FORM' => 'Oppdater vedlegsskjema', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
