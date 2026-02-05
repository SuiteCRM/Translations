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
    'LBL_MODULE_NAME' => 'Hrošči',
    'LBL_MODULE_TITLE' => 'Sledilec hroščev: Domov',
    'LBL_MODULE_ID' => 'Hrošči',
    'LBL_SEARCH_FORM_TITLE' => 'Iskanje hroščev',
    'LBL_LIST_FORM_TITLE' => 'Seznam hroščev',
    'LBL_NEW_FORM_TITLE' => 'Nov hrošč',
    'LBL_SUBJECT' => 'Zadeva:',
    'LBL_NUMBER' => 'Številka:',
    'LBL_STATUS' => 'Stanje:',
    'LBL_PRIORITY' => 'Prioreta:',
    'LBL_DESCRIPTION' => 'Opis:',
    'LBL_CONTACT_NAME' => 'Ime Kontakta:',
    'LBL_CONTACT_ROLE' => 'Vloga:',
    'LBL_LIST_NUMBER' => 'Številka',
    'LBL_LIST_SUBJECT' => 'Zadeva',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_LIST_PRIORITY' => 'Prioriteta',
    'LBL_LIST_RESOLUTION' => 'Rešitev',
    'LBL_LIST_LAST_MODIFIED' => 'Nazadnje spremenjeno',
    'LBL_INVITEE' => 'Kontakti',
    'LBL_TYPE' => 'Tip:',
    'LBL_LIST_TYPE' => 'Tip',
    'LBL_RESOLUTION' => 'Rešitev:',
    'LBL_RELEASE' => 'Izdaja:',
    'LNK_NEW_BUG' => 'Poročaj o hrošču',
    'LNK_BUG_LIST' => 'Hrošči',
    'ERR_DELETE_RECORD' => 'Za izbris hrošča je potrebno definirati številko zapisa.',
    'LBL_LIST_MY_BUGS' => 'Moji dodeljeni hrošči',
    'LNK_IMPORT_BUGS' => 'Uvozi hrošče',
    'LBL_FOUND_IN_RELEASE' => 'Najdeni v izdaji:',
    'LBL_FIXED_IN_RELEASE' => 'Popravljeni v izdaji:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Popravljeni v izdaji',
    'LBL_WORK_LOG' => 'Delovni dnevnik (log):',
    'LBL_SOURCE' => 'Vir:',
    'LBL_PRODUCT_CATEGORY' => 'Kategorija:',

    'LBL_CREATED_BY' => 'Ustvaril:',
    'LBL_MODIFIED_BY' => 'Nazadnje spremenil:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-poštni naslov',
    'LBL_LIST_CONTACT_NAME' => 'Ime kontakta',
    'LBL_LIST_ACCOUNT_NAME' => 'Ime Partnerja',
    'LBL_LIST_PHONE' => 'Telefon',
    'NTC_DELETE_CONFIRMATION' => 'Ste prepričani, da želite odstraniti ta Kontakt iz tega hrošča?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Sledilec hroščev',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zgodovina',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakti',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Računi',
    'LBL_CASES_SUBPANEL_TITLE' => 'Reklamacije',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekti',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenti',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Dodeljen uporabnik',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen ',

    'LBL_BUG_INFORMATION' => 'Informacije o Partnerju', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
