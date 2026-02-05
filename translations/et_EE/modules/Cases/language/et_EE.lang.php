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
    'ERR_DELETE_RECORD' => 'Ettevõtte kustutamiseks täpsusta kirje numbrit.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'KnowledgeBase Suggestions',
    'LBL_TOOL_TIP_TITLE' => 'Tiitel:',
    'LBL_TOOL_TIP_BODY' => 'Sisu: ',
    'LBL_TOOL_TIP_INFO' => 'Lisainfo: ',
    'LBL_TOOL_TIP_USE' => 'Kasuta kui: ',
    'LBL_SUGGESTION_BOX' => 'Soovitused',
    'LBL_NO_SUGGESTIONS' => 'Soovitusi pole',
    'LBL_RESOLUTION_BUTTON' => 'Resolutsioon',
    'LBL_SUGGESTION_BOX_STATUS' => 'Olek',
    'LBL_SUGGESTION_BOX_TITLE' => 'Tiitel',
    'LBL_SUGGESTION_BOX_REL' => 'Tähtsus',

    'LBL_ACCOUNT_ID' => 'Ettevõtte Id',
    'LBL_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ettevõtted',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugid',
    'LBL_CASE_NUMBER' => 'Juhtumi number:',
    'LBL_CASE' => 'Juhtum:',
    'LBL_CONTACT_NAME' => 'Kontaktisiku nimi:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Juhtumid',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ajalugu',
    'LBL_INVITEE' => 'Kontaktid',
    'LBL_MEMBER_OF' => 'Ettevõtted',
    'LBL_MODULE_NAME' => 'Juhtumid',
    'LBL_MODULE_TITLE' => 'Juhtumid: Avaleht',
    'LBL_NEW_FORM_TITLE' => 'Uus juhtum',
    'LBL_NUMBER' => 'Number:',
    'LBL_PRIORITY' => 'Tähtsus:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektid',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumendid',
    'LBL_RESOLUTION' => 'Resolutsioon',
    'LBL_SEARCH_FORM_TITLE' => 'Juhtumi otsing:',
    'LBL_STATUS' => 'Olek:',
    'LBL_SUBJECT' => 'Teema:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Määratud kasutaja',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_LIST_ASSIGNED' => 'Vastutaja',
    'LBL_LIST_CLOSE' => 'Sulge',
    'LBL_LIST_FORM_TITLE' => 'Juhtumite loend',
    'LBL_LIST_LAST_MODIFIED' => 'Viimati muudetud:',
    'LBL_LIST_MY_CASES' => 'Minu avatud juhtumid',
    'LBL_LIST_NUMBER' => 'Num:',
    'LBL_LIST_PRIORITY' => 'Tähtsus',
    'LBL_LIST_STATUS' => 'Olek',
    'LBL_LIST_SUBJECT' => 'Teema',

    'LNK_CASE_LIST' => 'Vaata juhtumeid',
    'LNK_NEW_CASE' => 'Loo juhtum',
    'LBL_LIST_DATE_CREATED' => 'Loomiskuupäev',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja',
    'LBL_TYPE' => 'Tüüp:',
    'LBL_WORK_LOG' => 'Töö logi',
    'LNK_IMPORT_CASES' => 'Impordi juhtumid',

    'LBL_CREATED_USER' => 'Loodud kasutaja',
    'LBL_MODIFIED_USER' => 'Muudetud kasutaja',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektid',
    'LBL_CASE_INFORMATION' => 'Ettevõtte ülevaade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Updates - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Juhtumi uuendamised',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Laienda kõik',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Manused:',

    'LBL_AOP_CASE_EVENTS' => 'Juhtumi sündmused',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Lisa fail',
    'LBL_REMOVE_CASE_FILE' => 'Eemalda fail',
    'LBL_SELECT_CASE_DOCUMENT' => 'Vali dokument',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Tühjenda Dokument',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Väline fail',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Created by contact',
    'LBL_CONTACT_CREATED_BY' => 'Loodud',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Tundmatu Kontakt',
);
