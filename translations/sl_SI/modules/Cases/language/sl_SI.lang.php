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
    'ERR_DELETE_RECORD' => 'Za izbris Partnerja morate določit številko zapisa.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Predlog iz baze znanja',
    'LBL_TOOL_TIP_TITLE' => 'Naslov:',
    'LBL_TOOL_TIP_BODY' => 'Body:',
    'LBL_TOOL_TIP_INFO' => 'Additional Info:',
    'LBL_TOOL_TIP_USE' => 'Use as:',
    'LBL_SUGGESTION_BOX' => 'Suggestions',
    'LBL_NO_SUGGESTIONS' => 'No Suggestions',
    'LBL_RESOLUTION_BUTTON' => 'Rešitev',
    'LBL_SUGGESTION_BOX_STATUS' => 'Stanje',
    'LBL_SUGGESTION_BOX_TITLE' => 'Naziv',
    'LBL_SUGGESTION_BOX_REL' => 'Relevance',

    'LBL_ACCOUNT_ID' => 'ID partnerja',
    'LBL_ACCOUNT_NAME' => 'Ime Partnerja:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Računi',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hrošči',
    'LBL_CASE_NUMBER' => 'Število Reklamacije:',
    'LBL_CASE' => 'Reklamacija:',
    'LBL_CONTACT_NAME' => 'Ime Kontakta:',
    'LBL_CONTACT_ROLE' => 'Vloga:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Reklamacije',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_MEMBER_OF' => 'Partnerji',
    'LBL_MODULE_NAME' => 'Reklamacije',
    'LBL_MODULE_TITLE' => 'Reklamacije: Domov',
    'LBL_NEW_FORM_TITLE' => 'Nova Reklamacija',
    'LBL_NUMBER' => 'Številka:',
    'LBL_PRIORITY' => 'Prioreta:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_RESOLUTION' => 'Rešitev:',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje Reklamacij',
    'LBL_STATUS' => 'Stanje:',
    'LBL_SUBJECT' => 'Zadeva:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljen uporabnik',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Partnerja',
    'LBL_LIST_ASSIGNED' => 'Dodeljeno',
    'LBL_LIST_CLOSE' => 'Zapri',
    'LBL_LIST_FORM_TITLE' => 'Seznam Reklamacij',
    'LBL_LIST_LAST_MODIFIED' => 'Nazadnje spremenjeno',
    'LBL_LIST_MY_CASES' => 'Moje odprte Reklamacije',
    'LBL_LIST_NUMBER' => 'Številka',
    'LBL_LIST_PRIORITY' => 'Prioriteta',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_LIST_SUBJECT' => 'Zadeva',

    'LNK_CASE_LIST' => 'Reklamacije',
    'LNK_NEW_CASE' => 'Ustvari primer',
    'LBL_LIST_DATE_CREATED' => 'Datum nastanka',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen ',
    'LBL_TYPE' => 'Tip',
    'LBL_WORK_LOG' => 'delovni dnevnik',
    'LNK_IMPORT_CASES' => 'Uvozi reklamacije',

    'LBL_CREATED_USER' => 'Ustvarjen kontakt',
    'LBL_MODIFIED_USER' => 'Spremenjen uporabnik',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekti',
    'LBL_CASE_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Updates - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expand All',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Priponke:',

    'LBL_AOP_CASE_EVENTS' => 'Case Events',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Dodaj datoteko',
    'LBL_REMOVE_CASE_FILE' => 'Remove file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Select document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Clear document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'External file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Created by contact',
    'LBL_CONTACT_CREATED_BY' => 'Ustvaril',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
