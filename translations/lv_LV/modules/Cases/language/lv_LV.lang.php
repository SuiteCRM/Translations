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
    'ERR_DELETE_RECORD' => 'Jums ir jānorāda ieraksta numuru, lai dzēstu uzņēmumu.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'KnowledgeBase Suggestions',
    'LBL_TOOL_TIP_TITLE' => 'Virsraksts:',
    'LBL_TOOL_TIP_BODY' => 'Body:',
    'LBL_TOOL_TIP_INFO' => 'Additional Info:',
    'LBL_TOOL_TIP_USE' => 'Use as:',
    'LBL_SUGGESTION_BOX' => 'Suggestions',
    'LBL_NO_SUGGESTIONS' => 'No Suggestions',
    'LBL_RESOLUTION_BUTTON' => 'Risinājums',
    'LBL_SUGGESTION_BOX_STATUS' => 'Statuss',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titulli',
    'LBL_SUGGESTION_BOX_REL' => 'Relevance',

    'LBL_ACCOUNT_ID' => 'Uzņēmuma ID',
    'LBL_ACCOUNT_NAME' => 'Uzņēmuma nosaukums:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klienti',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Kļūdas',
    'LBL_CASE_NUMBER' => 'Pieteikuma numurs:',
    'LBL_CASE' => 'Pieteikums:',
    'LBL_CONTACT_NAME' => 'Kontaktpersonas vārds:',
    'LBL_CONTACT_ROLE' => 'Loma:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pieteikumi',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',
    'LBL_INVITEE' => 'Ielūgtie',
    'LBL_MEMBER_OF' => 'Klients',
    'LBL_MODULE_NAME' => 'Pieteikumi',
    'LBL_MODULE_TITLE' => 'Pieteikumi',
    'LBL_NEW_FORM_TITLE' => 'Jauns pieteikums',
    'LBL_NUMBER' => 'Numurs:',
    'LBL_PRIORITY' => 'Prioritāte:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_RESOLUTION' => 'Risinājums:',
    'LBL_SEARCH_FORM_TITLE' => 'Pieteikumu meklēšana',
    'LBL_STATUS' => 'Statuss:',
    'LBL_SUBJECT' => 'Temats:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_LIST_ACCOUNT_NAME' => 'Konta nosaukums',
    'LBL_LIST_ASSIGNED' => 'Piešķirts lietotājam',
    'LBL_LIST_CLOSE' => 'Slēgt',
    'LBL_LIST_FORM_TITLE' => 'Pieteikumu saraksts',
    'LBL_LIST_LAST_MODIFIED' => 'Pēdējas izmaiņas',
    'LBL_LIST_MY_CASES' => 'Mani atvērtie pieteikumi',
    'LBL_LIST_NUMBER' => 'Nr.',
    'LBL_LIST_PRIORITY' => 'Prioritāte',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LIST_SUBJECT' => 'Temats',

    'LNK_CASE_LIST' => 'Pieteikumi',
    'LNK_NEW_CASE' => 'Izveidot pieteikumu',
    'LBL_LIST_DATE_CREATED' => 'Izveidošanas datums',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_TYPE' => 'Tips:',
    'LBL_WORK_LOG' => 'Izmaiņu žurnāls',
    'LNK_IMPORT_CASES' => 'Importēt pieteikumus',

    'LBL_CREATED_USER' => 'Izveidoja lietotājs',
    'LBL_MODIFIED_USER' => 'Modificēja lietotājs',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_CASE_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Updates - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Pieteikumu UPDATES (?)',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expand All',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Pielikumi:',

    'LBL_AOP_CASE_EVENTS' => 'Case Events',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Add file',
    'LBL_REMOVE_CASE_FILE' => 'Remove file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Select document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Clear document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'External file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Created by contact',
    'LBL_CONTACT_CREATED_BY' => 'Izveidoja',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
