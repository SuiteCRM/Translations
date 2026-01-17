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
    'LBL_MODULE_NAME' => 'Kļūdas',
    'LBL_MODULE_TITLE' => 'Kļūdu sekotājs: Sākums',
    'LBL_MODULE_ID' => 'Kļūdas',
    'LBL_SEARCH_FORM_TITLE' => 'Kļūdu meklēšana',
    'LBL_LIST_FORM_TITLE' => 'Kļūdu saraksts',
    'LBL_NEW_FORM_TITLE' => 'Jauna kļūda',
    'LBL_SUBJECT' => 'Temats:',
    'LBL_NUMBER' => 'Numurs:',
    'LBL_STATUS' => 'Statuss:',
    'LBL_PRIORITY' => 'Prioritāte:',
    'LBL_DESCRIPTION' => 'Apraksts:',
    'LBL_CONTACT_NAME' => 'Kontaktpersonas vārds:',
    'LBL_CONTACT_ROLE' => 'Loma:',
    'LBL_LIST_NUMBER' => 'Nr.',
    'LBL_LIST_SUBJECT' => 'Temats',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LIST_PRIORITY' => 'Prioritāte',
    'LBL_LIST_RESOLUTION' => 'Risinājums',
    'LBL_LIST_LAST_MODIFIED' => 'Pēdējas izmaiņas',
    'LBL_INVITEE' => 'Ielūgtie',
    'LBL_TYPE' => 'Veids:',
    'LBL_LIST_TYPE' => 'Tips:',
    'LBL_RESOLUTION' => 'Risinājums:',
    'LBL_RELEASE' => 'Laidiens:',
    'LNK_NEW_BUG' => 'Paziņot par kļūdu',
    'LNK_BUG_LIST' => 'Aplūkot kļūdas',
    'ERR_DELETE_RECORD' => 'Lai dzēstu kļūdu, jānorāda ieraksta numurs.',
    'LBL_LIST_MY_BUGS' => 'Man piešķirtās kļūdas',
    'LNK_IMPORT_BUGS' => 'Importēt kļūdas',
    'LBL_FOUND_IN_RELEASE' => 'Atrasts laidienā:',
    'LBL_FIXED_IN_RELEASE' => 'Izlabots laidienā:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Izlabots laidienā',
    'LBL_WORK_LOG' => 'Darba žurnāls:',
    'LBL_SOURCE' => 'Avots:',
    'LBL_PRODUCT_CATEGORY' => 'Kategorija:',

    'LBL_CREATED_BY' => 'Izveidoja:',
    'LBL_MODIFIED_BY' => 'Pēdējais modificēja:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-pasts',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktpersonas vārds',
    'LBL_LIST_ACCOUNT_NAME' => 'Konta nosaukums',
    'LBL_LIST_PHONE' => 'Phone',
    'NTC_DELETE_CONFIRMATION' => 'Vai tiešām vēlaties izņemt kontaktpersonu no šī kļūdas ieraksta?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kļūdu sekotājs',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Darbības',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vēsture',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Ielūgtie',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Klienti',
    'LBL_CASES_SUBPANEL_TITLE' => 'Pieteikumi',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',
    'LBL_ASSIGNED_TO_NAME' => 'Piešķirts lietotājam',

    'LBL_BUG_INFORMATION' => 'Apskats', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
