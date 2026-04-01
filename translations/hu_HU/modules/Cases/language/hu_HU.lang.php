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
    'ERR_DELETE_RECORD' => 'A fiók törléséhez meg kell adni a rekordszámot.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Tudásbázis-javaslatok',
    'LBL_TOOL_TIP_TITLE' => 'Megnevezés:',
    'LBL_TOOL_TIP_BODY' => 'Tartalom: ',
    'LBL_TOOL_TIP_INFO' => 'További Info: ',
    'LBL_TOOL_TIP_USE' => 'Használja: ',
    'LBL_SUGGESTION_BOX' => 'Javaslatok',
    'LBL_NO_SUGGESTIONS' => 'Nincs javaslat',
    'LBL_RESOLUTION_BUTTON' => 'Megoldás',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Megnevezés',
    'LBL_SUGGESTION_BOX_REL' => 'Relevancia',

    'LBL_ACCOUNT_ID' => 'Account ID',
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activities',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CASE_NUMBER' => 'Üzenetszál száma:',
    'LBL_CASE' => 'Üzenet:',
    'LBL_CONTACT_NAME' => 'Contact Name:',
    'LBL_CONTACT_ROLE' => 'Role:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Üzenet központ',
    'LBL_DESCRIPTION' => 'Üzenet szövege:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_INVITEE' => 'Kapcsolattartók',
    'LBL_MEMBER_OF' => 'Ügyfél',
    'LBL_MODULE_NAME' => 'Üzenet központ',
    'LBL_MODULE_TITLE' => 'Üzenetek: Kezdőlap',
    'LBL_NEW_FORM_TITLE' => 'Új Üzenet',
    'LBL_NUMBER' => 'Üzenetszál iktatószáma:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projects',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_RESOLUTION' => 'Resolution:',
    'LBL_SEARCH_FORM_TITLE' => 'Üzenetszál keresés',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_ASSIGNED' => 'Felelős',
    'LBL_LIST_CLOSE' => 'Bezárás',
    'LBL_LIST_FORM_TITLE' => 'Üzenetszál lista',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_LIST_MY_CASES' => 'Nyitottt üzenetszálak',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Subject',

    'LNK_CASE_LIST' => 'Események nézet',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LBL_LIST_DATE_CREATED' => 'Létrehova',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_TYPE' => 'Type',
    'LBL_WORK_LOG' => 'Munkanapló',
    'LNK_IMPORT_CASES' => 'Események importálása',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projects',
    'LBL_CASE_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Szövegfrissítés', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Belső megjegyzés',
    'LBL_AOP_CASE_UPDATES' => 'Teljes üzenetszál',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Esemény frissítés',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Összes bezárása',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Összes kinyitása',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Mellékletek:',

    'LBL_AOP_CASE_EVENTS' => 'Eset események',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Esemény mellékletek:',
    'LBL_ADD_CASE_FILE' => 'File becsatolása',
    'LBL_REMOVE_CASE_FILE' => 'File eltávolítása',
    'LBL_SELECT_CASE_DOCUMENT' => 'Dokumentum kiválasztása',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Dokumentum törlés',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Belső CRM dokumentum',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Külső file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Kapcsolattartó hozta létre',
    'LBL_CONTACT_CREATED_BY' => 'Created by',
    'LBL_CASE_UPDATE_FORM' => 'Melléklet frissítés', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
