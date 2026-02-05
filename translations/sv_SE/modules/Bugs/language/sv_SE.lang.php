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
    'LBL_MODULE_NAME' => 'Problemspårare',
    'LBL_MODULE_TITLE' => 'Bugghantering: Hem',
    'LBL_MODULE_ID' => 'Problemspårare',
    'LBL_SEARCH_FORM_TITLE' => 'Sök buggar',
    'LBL_LIST_FORM_TITLE' => 'Bugglista',
    'LBL_NEW_FORM_TITLE' => 'Ny bugg',
    'LBL_SUBJECT' => 'Ämne:',
    'LBL_NUMBER' => 'Nummer:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Prioritet:',
    'LBL_DESCRIPTION' => 'Beskrivning:',
    'LBL_CONTACT_NAME' => 'Kontaktnamn:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_SUBJECT' => 'Ämne',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Prioritet',
    'LBL_LIST_RESOLUTION' => 'Lösning',
    'LBL_LIST_LAST_MODIFIED' => 'Senast ändrad',
    'LBL_INVITEE' => 'Kontakter',
    'LBL_TYPE' => 'Typ:',
    'LBL_LIST_TYPE' => 'Typ',
    'LBL_RESOLUTION' => 'Lösning:',
    'LBL_RELEASE' => 'Utgåva:',
    'LNK_NEW_BUG' => 'Rapportera bugg',
    'LNK_BUG_LIST' => 'Buggar',
    'ERR_DELETE_RECORD' => 'Ett nummer på posten måste specificeras för att ta bort buggen.',
    'LBL_LIST_MY_BUGS' => 'Mina tilldelade buggar',
    'LNK_IMPORT_BUGS' => 'Importera buggar',
    'LBL_FOUND_IN_RELEASE' => 'Hittades i utgåvan:',
    'LBL_FIXED_IN_RELEASE' => 'Löst i utgåvan:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Fixat i utgåvan',
    'LBL_WORK_LOG' => 'Arbetslogg:',
    'LBL_SOURCE' => 'Källa:',
    'LBL_PRODUCT_CATEGORY' => 'Kategori:',

    'LBL_CREATED_BY' => 'Skapad av:',
    'LBL_MODIFIED_BY' => 'Senaste ändrad av:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-postadress',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktnamn',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontonamn',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Är du säker att du vill ta bort denna kontakt från denna bugg?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bugghantering',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakter',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Konton',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ärenden',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekt',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokument',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Tilldelad användare',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',

    'LBL_BUG_INFORMATION' => 'Företagsinformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
