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
    'LBL_MODULE_NAME' => 'Gjyrmues i gabimeve',
    'LBL_MODULE_TITLE' => 'Gjyrmues i Bugs: Ballina',
    'LBL_MODULE_ID' => 'Gjyrmues i gabimeve',
    'LBL_SEARCH_FORM_TITLE' => 'Kërkimi i Bugs',
    'LBL_LIST_FORM_TITLE' => 'Lista e Bugs',
    'LBL_NEW_FORM_TITLE' => 'Bug i ri',
    'LBL_SUBJECT' => 'Subjekti',
    'LBL_NUMBER' => 'numri',
    'LBL_STATUS' => 'statusi',
    'LBL_PRIORITY' => 'priorieti',
    'LBL_DESCRIPTION' => 'Përshkrim',
    'LBL_CONTACT_NAME' => 'Emri i kontaktit',
    'LBL_CONTACT_ROLE' => 'Rolo:',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_SUBJECT' => 'Subjekti',
    'LBL_LIST_STATUS' => 'Statusi',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_RESOLUTION' => 'zgjidhja',
    'LBL_LIST_LAST_MODIFIED' => 'Ndryshimi i fundit',
    'LBL_INVITEE' => 'Kontaktet',
    'LBL_TYPE' => 'Lloji',
    'LBL_LIST_TYPE' => 'Lloji',
    'LBL_RESOLUTION' => 'Zgjidhja',
    'LBL_RELEASE' => 'Publikimi',
    'LNK_NEW_BUG' => 'Raporto Bug',
    'LNK_BUG_LIST' => 'Shiko Bugs',
    'ERR_DELETE_RECORD' => 'Duhet përcaktuar numrin e regjistrimit për të fshirë gabimin',
    'LBL_LIST_MY_BUGS' => 'Bugst e mia të caktuara',
    'LNK_IMPORT_BUGS' => 'Importo Bugs',
    'LBL_FOUND_IN_RELEASE' => 'Gjetur në publikim',
    'LBL_FIXED_IN_RELEASE' => 'Ndrequr në publikim',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Ndrequr në publikim',
    'LBL_WORK_LOG' => 'identifikimi i punës',
    'LBL_SOURCE' => 'Burimi',
    'LBL_PRODUCT_CATEGORY' => 'Kategoria',

    'LBL_CREATED_BY' => 'Krijuar nga',
    'LBL_MODIFIED_BY' => 'modifikim i fundit nga',

    'LBL_LIST_EMAIL_ADDRESS' => 'Email adresa',
    'LBL_LIST_CONTACT_NAME' => 'Emri i kontaktit',
    'LBL_LIST_ACCOUNT_NAME' => 'Emri i llogarisë:',
    'LBL_LIST_PHONE' => 'Telefoni',
    'NTC_DELETE_CONFIRMATION' => 'A jeni të sigurtë që dëshironi që të fshini këtë kontakt nga ky bug?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Gjyrmues i bug',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitetet',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktet',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Accounts',
    'LBL_CASES_SUBPANEL_TITLE' => 'rastet',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektet',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentacionet',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Përdorues i caktuar',
    'LBL_ASSIGNED_TO_NAME' => 'Përdorues',

    'LBL_BUG_INFORMATION' => 'Pasqyra', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
