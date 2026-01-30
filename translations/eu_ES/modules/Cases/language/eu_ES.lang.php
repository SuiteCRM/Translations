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
    'ERR_DELETE_RECORD' => 'Akatsa ezabatzean',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Jakintza-oinarriaren iradokizunak',
    'LBL_TOOL_TIP_TITLE' => 'Izenburua:',
    'LBL_TOOL_TIP_BODY' => 'Gorputza:',
    'LBL_TOOL_TIP_INFO' => 'Informazio gehigarria:',
    'LBL_TOOL_TIP_USE' => 'Nola erabili:',
    'LBL_SUGGESTION_BOX' => 'Iradokizunak',
    'LBL_NO_SUGGESTIONS' => 'Iradokizunik ez',
    'LBL_RESOLUTION_BUTTON' => 'Erabakia',
    'LBL_SUGGESTION_BOX_STATUS' => 'Egoera',
    'LBL_SUGGESTION_BOX_TITLE' => 'Izenburua',
    'LBL_SUGGESTION_BOX_REL' => 'Lehentasuna',

    'LBL_ACCOUNT_ID' => 'Kontuko ID-a',
    'LBL_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Kontuak',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ekintzak',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Gorabehera',
    'LBL_CASE_NUMBER' => 'Zenbakia',
    'LBL_CASE' => 'Kasuak',
    'LBL_CONTACT_NAME' => 'Kontaktua',
    'LBL_CONTACT_ROLE' => 'Rol',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktuak',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kasuak',
    'LBL_DESCRIPTION' => 'Deskribapena',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historia',
    'LBL_INVITEE' => 'Kontaktuak',
    'LBL_MEMBER_OF' => 'Kontuak',
    'LBL_MODULE_NAME' => 'Kasuak',
    'LBL_MODULE_TITLE' => 'Kasuak: hasiera',
    'LBL_NEW_FORM_TITLE' => 'Kasu berria',
    'LBL_NUMBER' => 'Zenbakia',
    'LBL_PRIORITY' => 'Lehentasuna',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Proiektuak',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumentuak',
    'LBL_RESOLUTION' => 'Erabakia',
    'LBL_SEARCH_FORM_TITLE' => 'Kasuen bilaketa',
    'LBL_STATUS' => 'Egoera',
    'LBL_SUBJECT' => 'Gaia',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Nori esleitua',
    'LBL_LIST_ACCOUNT_NAME' => 'Kontuaren izena',
    'LBL_LIST_ASSIGNED' => 'Esleitua izan da',
    'LBL_LIST_CLOSE' => 'Itxi',
    'LBL_LIST_FORM_TITLE' => 'Kasuen zerrenda',
    'LBL_LIST_LAST_MODIFIED' => 'Aldatua',
    'LBL_LIST_MY_CASES' => 'Nire kasu irekiak',
    'LBL_LIST_NUMBER' => 'Zenb.',
    'LBL_LIST_PRIORITY' => 'Lehentasuna',
    'LBL_LIST_STATUS' => 'Egoera',
    'LBL_LIST_SUBJECT' => 'Gaia',

    'LNK_CASE_LIST' => 'Kasuak',
    'LNK_NEW_CASE' => 'Kasua sortu',
    'LBL_LIST_DATE_CREATED' => 'Sortze-data',
    'LBL_ASSIGNED_TO_NAME' => 'Esleitutako erabiltzailearen izena',
    'LBL_TYPE' => 'Mota',
    'LBL_WORK_LOG' => 'Lan-erregistroa',
    'LNK_IMPORT_CASES' => 'Kasuak inportatu',

    'LBL_CREATED_USER' => 'Erabiltzaileak sortua',
    'LBL_MODIFIED_USER' => 'Erabiltzaileak aldatua',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Proiektuak',
    'LBL_CASE_INFORMATION' => 'Kontuari buruzko informazioa', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Eguneraketak - Testua', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Barne-eguneraketa',
    'LBL_AOP_CASE_UPDATES' => 'Kasuen eguneraketak',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Kasuren eguneratze-haria',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Guztia uzkurtu',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Hedatu dena',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Gehituak',

    'LBL_AOP_CASE_EVENTS' => 'Kasuen gertaerak',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Eranskinak:',
    'LBL_ADD_CASE_FILE' => 'Gehitu fitxategia',
    'LBL_REMOVE_CASE_FILE' => 'Kendu fitxategia',
    'LBL_SELECT_CASE_DOCUMENT' => 'Dokumentua hautatu',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Dokumentua garbitu',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'CRM barne-dokumentua',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Kanpoko fitxategia',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Nork sortua',
    'LBL_CONTACT_CREATED_BY' => 'Sortzailea',
    'LBL_CASE_UPDATE_FORM' => 'Eguneraketak - Erantsitako inprimakia', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Ezezaguna',
);
