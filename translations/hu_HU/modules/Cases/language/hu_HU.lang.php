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
    'ERR_DELETE_RECORD' => 'A bejegyzés törléséhez meg kell adnia a rekordsorszámot.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Tudásbázis-javaslatok',
    'LBL_TOOL_TIP_TITLE' => 'Megnevezés:',
    'LBL_TOOL_TIP_BODY' => 'Tartalom: ',
    'LBL_TOOL_TIP_INFO' => 'További Info: ',
    'LBL_TOOL_TIP_USE' => 'Használja: ',
    'LBL_SUGGESTION_BOX' => 'Javaslatok',
    'LBL_NO_SUGGESTIONS' => 'Nincs javaslat',
    'LBL_RESOLUTION_BUTTON' => 'Megoldás',
    'LBL_SUGGESTION_BOX_STATUS' => 'Állapot',
    'LBL_SUGGESTION_BOX_TITLE' => 'Megnevezés',
    'LBL_SUGGESTION_BOX_REL' => 'Relevancia',

    'LBL_ACCOUNT_ID' => 'Számla ID',
    'LBL_ACCOUNT_NAME' => 'Ügyfélnév:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hibajegyek',
    'LBL_CASE_NUMBER' => 'Üzenetszál száma:',
    'LBL_CASE' => 'Üzenet:',
    'LBL_CONTACT_NAME' => 'Kapcsolattartó neve:',
    'LBL_CONTACT_ROLE' => 'Szerepkör:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Esetek',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_INVITEE' => 'Kapcsolattartók',
    'LBL_MEMBER_OF' => 'Ügyfél',
    'LBL_MODULE_NAME' => 'Esetek',
    'LBL_MODULE_TITLE' => 'Üzenetek: Kezdőlap',
    'LBL_NEW_FORM_TITLE' => 'Új Üzenet',
    'LBL_NUMBER' => 'Szám:',
    'LBL_PRIORITY' => 'Prioritás:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_RESOLUTION' => 'Megoldás:',
    'LBL_SEARCH_FORM_TITLE' => 'Üzenetszál keresés',
    'LBL_STATUS' => 'Állapot:',
    'LBL_SUBJECT' => 'Tárgy:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_ASSIGNED' => 'Felelős',
    'LBL_LIST_CLOSE' => 'Bezárás',
    'LBL_LIST_FORM_TITLE' => 'Üzenetszál lista',
    'LBL_LIST_LAST_MODIFIED' => 'Utolsó módosítás',
    'LBL_LIST_MY_CASES' => 'Nyitottt üzenetszálak',
    'LBL_LIST_NUMBER' => 'Szám',
    'LBL_LIST_PRIORITY' => 'Prioritás',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_SUBJECT' => 'Tárgy',

    'LNK_CASE_LIST' => 'Események nézet',
    'LNK_NEW_CASE' => 'Eset létrehozása',
    'LBL_LIST_DATE_CREATED' => 'Létrehozás dátuma',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',
    'LBL_TYPE' => 'Típus',
    'LBL_WORK_LOG' => 'Munkanapló',
    'LNK_IMPORT_CASES' => 'Események importálása',

    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projektek',
    'LBL_CASE_INFORMATION' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Szövegfrissítés', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Belső megjegyzés',
    'LBL_AOP_CASE_UPDATES' => 'Teljes üzenetszál',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Esemény frissítés',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Összes bezárása',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Összes kinyitása',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Mellékletek:',

    'LBL_AOP_CASE_EVENTS' => 'Üzenet szálak',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Esemény mellékletek:',
    'LBL_ADD_CASE_FILE' => 'File becsatolása',
    'LBL_REMOVE_CASE_FILE' => 'File eltávolítása',
    'LBL_SELECT_CASE_DOCUMENT' => 'Dokumentum kiválasztása',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Dokumentum törlés',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Belső CRM dokumentum',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Külső file',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Kapcsolattartó hozta létre',
    'LBL_CONTACT_CREATED_BY' => 'Létrehozta:',
    'LBL_CASE_UPDATE_FORM' => 'Melléklet frissítés', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unknown Contact',
);
