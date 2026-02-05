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
    'LBL_MODULE_NAME' => 'Bugid',
    'LBL_MODULE_TITLE' => 'Bugi Tracker: Avaleht',
    'LBL_MODULE_ID' => 'Bugid',
    'LBL_SEARCH_FORM_TITLE' => 'Bugi otsing',
    'LBL_LIST_FORM_TITLE' => 'Bugide loend',
    'LBL_NEW_FORM_TITLE' => 'Uus bugi',
    'LBL_SUBJECT' => 'Teema:',
    'LBL_NUMBER' => 'Number:',
    'LBL_STATUS' => 'Olek:',
    'LBL_PRIORITY' => 'Tähtsus:',
    'LBL_DESCRIPTION' => 'Kirjeldus',
    'LBL_CONTACT_NAME' => 'Kontaktisiku nimi:',
    'LBL_CONTACT_ROLE' => 'Roll:',
    'LBL_LIST_NUMBER' => 'Num:',
    'LBL_LIST_SUBJECT' => 'Teema',
    'LBL_LIST_STATUS' => 'Olek',
    'LBL_LIST_PRIORITY' => 'Tähtsus',
    'LBL_LIST_RESOLUTION' => 'Resolutsioon',
    'LBL_LIST_LAST_MODIFIED' => 'Viimati muudetud:',
    'LBL_INVITEE' => 'Kontaktid',
    'LBL_TYPE' => 'Tüüp:',
    'LBL_LIST_TYPE' => 'Tüüp:',
    'LBL_RESOLUTION' => 'Resolutsioon',
    'LBL_RELEASE' => 'Tooteuuendus:',
    'LNK_NEW_BUG' => 'Teata bugist',
    'LNK_BUG_LIST' => 'Vaata bugisid',
    'ERR_DELETE_RECORD' => 'Bugi kustutamiseks täpsusta kirje numbrit.',
    'LBL_LIST_MY_BUGS' => 'Minu määratud bugid',
    'LNK_IMPORT_BUGS' => 'Impordi bugid',
    'LBL_FOUND_IN_RELEASE' => 'Leitud tooteuuenduses:',
    'LBL_FIXED_IN_RELEASE' => 'Fikseeritud tooteuuenduses:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Fikseeritud tooteuuenduses:',
    'LBL_WORK_LOG' => 'Töö logi',
    'LBL_SOURCE' => 'Allikas:',
    'LBL_PRODUCT_CATEGORY' => 'Kategooria:',

    'LBL_CREATED_BY' => 'Looja:',
    'LBL_MODIFIED_BY' => 'Viimati muudetud:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-post:',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktisiku nimi:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ettevõtte nimi:',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Kas oled kindel, et soovid selle bugi sellest kontaktist eemaldada?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Bugi Tracker',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tegevused',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ajalugu',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontaktid',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Ettevõtted',
    'LBL_CASES_SUBPANEL_TITLE' => 'Juhtumid',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projektid',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumendid',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Määratud kasutaja',
    'LBL_ASSIGNED_TO_NAME' => 'Vastutaja',

    'LBL_BUG_INFORMATION' => 'Ettevõtte ülevaade', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
