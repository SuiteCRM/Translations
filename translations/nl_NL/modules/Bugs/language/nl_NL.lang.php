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
    'LBL_MODULE_NAME' => 'Fouten',
    'LBL_MODULE_TITLE' => 'Bugtracker: Start',
    'LBL_MODULE_ID' => 'Fouten',
    'LBL_SEARCH_FORM_TITLE' => 'Bugs zoeken',
    'LBL_LIST_FORM_TITLE' => 'Bugs',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe bug',
    'LBL_SUBJECT' => 'Onderwerp:',
    'LBL_NUMBER' => 'Nummer:',
    'LBL_STATUS' => 'Status:',
    'LBL_PRIORITY' => 'Prioriteit:',
    'LBL_DESCRIPTION' => 'Omschrijving:',
    'LBL_CONTACT_NAME' => 'Naam contactpersoon:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_LIST_NUMBER' => 'Nr.',
    'LBL_LIST_SUBJECT' => 'Onderwerp',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_PRIORITY' => 'Prioriteit',
    'LBL_LIST_RESOLUTION' => 'Oplossing',
    'LBL_LIST_LAST_MODIFIED' => 'Laatste wijziging',
    'LBL_INVITEE' => 'Contactpersonen',
    'LBL_TYPE' => 'Type:',
    'LBL_LIST_TYPE' => 'Type',
    'LBL_RESOLUTION' => 'Oplossing:',
    'LBL_RELEASE' => 'Versie:',
    'LNK_NEW_BUG' => 'Bug aanmelden',
    'LNK_BUG_LIST' => 'Bugs',
    'ERR_DELETE_RECORD' => 'Er dient een recordnummer te worden gespecificeerd voor het verwijderen van een bug',
    'LBL_LIST_MY_BUGS' => 'Mijn openstaande bugs',
    'LNK_IMPORT_BUGS' => 'Importeer bugs',
    'LBL_FOUND_IN_RELEASE' => 'Gevonden in release',
    'LBL_FIXED_IN_RELEASE' => 'Opgelost in release',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Opgelost in release',
    'LBL_WORK_LOG' => 'Logbestand',
    'LBL_SOURCE' => 'Bron',
    'LBL_PRODUCT_CATEGORY' => 'Categorie:',

    'LBL_CREATED_BY' => 'Aangemaakt door:',
    'LBL_MODIFIED_BY' => 'Laatste wijziging door:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-mailadres',
    'LBL_LIST_CONTACT_NAME' => 'Naam contactpersoon',
    'LBL_LIST_ACCOUNT_NAME' => 'Relatie naam',
    'LBL_LIST_PHONE' => 'Telefoon',
    'NTC_DELETE_CONFIRMATION' => 'Weet u zeker dat u deze contactpersoon wilt verwijderen bij deze bug?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bugtracker',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geschiedenis',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactpersonen',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Relaties',
    'LBL_CASES_SUBPANEL_TITLE' => 'Verzoeken',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projecten',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documenten',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Toegewezen gebruiker',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',

    'LBL_BUG_INFORMATION' => 'Relatiegegevens', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
