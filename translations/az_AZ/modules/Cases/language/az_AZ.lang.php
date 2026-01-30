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
    'ERR_DELETE_RECORD' => 'Hesabı silmək üçün qeyd nömrəsini göstərməlisiniz.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'KnowledgeBase Suggestions',
    'LBL_TOOL_TIP_TITLE' => 'Başlıq:',
    'LBL_TOOL_TIP_BODY' => 'Mətn:',
    'LBL_TOOL_TIP_INFO' => 'Additional Info:',
    'LBL_TOOL_TIP_USE' => 'Use as:',
    'LBL_SUGGESTION_BOX' => 'Suggestions',
    'LBL_NO_SUGGESTIONS' => 'No Suggestions',
    'LBL_RESOLUTION_BUTTON' => 'Qərar',
    'LBL_SUGGESTION_BOX_STATUS' => 'Vəziyyət',
    'LBL_SUGGESTION_BOX_TITLE' => 'Başlıq',
    'LBL_SUGGESTION_BOX_REL' => 'Relevance',

    'LBL_ACCOUNT_ID' => 'Hesab İD-si',
    'LBL_ACCOUNT_NAME' => 'Hesab Adı:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Hesablar',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Boşluqlar',
    'LBL_CASE_NUMBER' => 'Case Number:',
    'LBL_CASE' => 'Case:',
    'LBL_CONTACT_NAME' => 'Əlaqəli şəxs Adı:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mübahisələr',
    'LBL_DESCRIPTION' => 'Açıqlama:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçə',
    'LBL_INVITEE' => 'Əlaqələr',
    'LBL_MEMBER_OF' => 'Hesab',
    'LBL_MODULE_NAME' => 'Mübahisələr',
    'LBL_MODULE_TITLE' => 'Cases: Home',
    'LBL_NEW_FORM_TITLE' => 'New Case',
    'LBL_NUMBER' => 'Nömrə:',
    'LBL_PRIORITY' => 'Birincilik:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Layihələr',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Sənədlər',
    'LBL_RESOLUTION' => 'Qərar:',
    'LBL_SEARCH_FORM_TITLE' => 'Case Search',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Mövzu:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Təyin edilmiş İstifadəçi',
    'LBL_LIST_ACCOUNT_NAME' => 'İstifadəçinin adı',
    'LBL_LIST_ASSIGNED' => 'Təyin edilmişdir',
    'LBL_LIST_CLOSE' => 'Bağla',
    'LBL_LIST_FORM_TITLE' => 'Case List',
    'LBL_LIST_LAST_MODIFIED' => 'Son dəyişiklik',
    'LBL_LIST_MY_CASES' => 'My Open Cases',
    'LBL_LIST_NUMBER' => 'Nömrə.',
    'LBL_LIST_PRIORITY' => 'Öncəlik',
    'LBL_LIST_STATUS' => 'Vəziyyət',
    'LBL_LIST_SUBJECT' => 'Mövzu',

    'LNK_CASE_LIST' => 'View Cases',
    'LNK_NEW_CASE' => 'Mübahisə Yarat',
    'LBL_LIST_DATE_CREATED' => 'Yaradılma Tarixi',
    'LBL_ASSIGNED_TO_NAME' => 'Təyin Edilsin',
    'LBL_TYPE' => 'Növ',
    'LBL_WORK_LOG' => 'Work Log',
    'LNK_IMPORT_CASES' => 'Import Cases',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Layihələr',
    'LBL_CASE_INFORMATION' => '	İcmal', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Updates - Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Case Updates',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Case Updates Threaded',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Collapse All',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Expand All',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Qoşmalar:',

    'LBL_AOP_CASE_EVENTS' => 'Case Events',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Case Attachments:',
    'LBL_ADD_CASE_FILE' => 'Add file',
    'LBL_REMOVE_CASE_FILE' => 'Remove file',
    'LBL_SELECT_CASE_DOCUMENT' => 'Select document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Clear document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internal CRM document',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'External file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Created by contact',
    'LBL_CONTACT_CREATED_BY' => 'Müəllif',
    'LBL_CASE_UPDATE_FORM' => 'Updates - Attachment form', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
