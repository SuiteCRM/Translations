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
    'LBL_MODULE_NAME' => 'Hibajegyek',
    'LBL_MODULE_TITLE' => 'Hibakövető: Főoldal',
    'LBL_MODULE_ID' => 'Hibajegyek',
    'LBL_SEARCH_FORM_TITLE' => 'Hibajegy keresés',
    'LBL_LIST_FORM_TITLE' => 'Hibajegy lista',
    'LBL_NEW_FORM_TITLE' => 'Új Hibajegy',
    'LBL_SUBJECT' => 'Tárgy:',
    'LBL_NUMBER' => 'Szám:',
    'LBL_STATUS' => 'Állapot:',
    'LBL_PRIORITY' => 'Prioritás:',
    'LBL_DESCRIPTION' => 'Leírás:',
    'LBL_CONTACT_NAME' => 'Kapcsolattartó neve:',
    'LBL_CONTACT_ROLE' => 'Szerepkör:',
    'LBL_LIST_NUMBER' => 'Szám',
    'LBL_LIST_SUBJECT' => 'Tárgy',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LIST_PRIORITY' => 'Prioritás',
    'LBL_LIST_RESOLUTION' => 'Megoldás',
    'LBL_LIST_LAST_MODIFIED' => 'Utolsó módosítás',
    'LBL_INVITEE' => 'Kapcsolattartók',
    'LBL_TYPE' => 'Típus:',
    'LBL_LIST_TYPE' => 'Típus',
    'LBL_RESOLUTION' => 'Megoldás:',
    'LBL_RELEASE' => 'Kiadás:',
    'LNK_NEW_BUG' => 'Hibajegy jelentés',
    'LNK_BUG_LIST' => 'Hibajegy Nézet',
    'ERR_DELETE_RECORD' => 'A Hibajegy törléséhez meg kell adni a rekord számot.',
    'LBL_LIST_MY_BUGS' => 'Hozzárendelt Hibajegyeim',
    'LNK_IMPORT_BUGS' => 'Hibajegyek importálása',
    'LBL_FOUND_IN_RELEASE' => 'Találatok ebben a kiadásban:',
    'LBL_FIXED_IN_RELEASE' => 'Javítások ebben a kiadásban:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Javítások ebben a kiadásban',
    'LBL_WORK_LOG' => 'Munka napló:',
    'LBL_SOURCE' => 'Forrás:',
    'LBL_PRODUCT_CATEGORY' => 'Kategória:',

    'LBL_CREATED_BY' => 'Készítette:',
    'LBL_MODIFIED_BY' => 'Utoljára módosította:',

    'LBL_LIST_EMAIL_ADDRESS' => 'Email cím',
    'LBL_LIST_CONTACT_NAME' => 'Kapcsolattartó neve',
    'LBL_LIST_ACCOUNT_NAME' => 'Ügyfélnév',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy eltávolítja ezt a Kapcsolattartót a Hibajegyből?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hibakövető',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmények',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kapcsolattartók',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ügyfelek',
    'LBL_CASES_SUBPANEL_TITLE' => 'Esetek',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektek',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentumok',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Felelős felhasználó',
    'LBL_ASSIGNED_TO_NAME' => 'Felelős',

    'LBL_BUG_INFORMATION' => 'Áttekintés', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
