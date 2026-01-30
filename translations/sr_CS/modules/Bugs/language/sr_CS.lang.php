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
    'LBL_MODULE_NAME' => 'Praćenje defekata',
    'LBL_MODULE_TITLE' => 'Praćenje defekata: Početna strana',
    'LBL_MODULE_ID' => 'Praćenje defekata',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraga defekata',
    'LBL_LIST_FORM_TITLE' => 'Lista defekata',
    'LBL_NEW_FORM_TITLE' => 'Novi defekt',
    'LBL_SUBJECT' => 'Naslov:',
    'LBL_NUMBER' => 'Broj:',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_CONTACT_NAME' => 'Ime kontakta:',
    'LBL_CONTACT_ROLE' => 'Uloga:',
    'LBL_LIST_NUMBER' => 'Br.',
    'LBL_LIST_SUBJECT' => 'Naslov',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_RESOLUTION' => 'Rezolucija',
    'LBL_LIST_LAST_MODIFIED' => 'Poslednja izmena',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_TYPE' => 'Tip:',
    'LBL_LIST_TYPE' => 'Tip',
    'LBL_RESOLUTION' => 'Rezolucija:',
    'LBL_RELEASE' => 'Izdanje:',
    'LNK_NEW_BUG' => 'Prijavi defekt',
    'LNK_BUG_LIST' => 'Prikaži defekte',
    'ERR_DELETE_RECORD' => 'Morate da navedete broj zapisa da bi obrisali defekt.',
    'LBL_LIST_MY_BUGS' => 'Moji dodeljeni defekti',
    'LNK_IMPORT_BUGS' => 'Uvezi defekte',
    'LBL_FOUND_IN_RELEASE' => 'Nađen u izdanju:',
    'LBL_FIXED_IN_RELEASE' => 'Popravljen u izdanju:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Popravljen u izdanju',
    'LBL_WORK_LOG' => 'Dnevnik rada:',
    'LBL_SOURCE' => 'Izvor:',
    'LBL_PRODUCT_CATEGORY' => 'Kategorija:',

    'LBL_CREATED_BY' => 'Autor:',
    'LBL_MODIFIED_BY' => 'Poslednja izmena od strane:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-adresa',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Naloga',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Da li ste sigurni da želite da uklonite ovaj kontakt iz ovog defekta?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Praćenje defekata',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Istorija',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kompanije',
    'LBL_CASES_SUBPANEL_TITLE' => 'Slučajevi',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljeni korisnik:',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',

    'LBL_BUG_INFORMATION' => 'Pregled kompanije', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
