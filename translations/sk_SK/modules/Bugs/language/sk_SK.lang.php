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
    'LBL_MODULE_NAME' => 'Chyby',
    'LBL_MODULE_TITLE' => 'Kontrolór Chýb: Domov',
    'LBL_MODULE_ID' => 'Chyby',
    'LBL_SEARCH_FORM_TITLE' => 'Hľadať Chyby',
    'LBL_LIST_FORM_TITLE' => 'Zoznam Chýb',
    'LBL_NEW_FORM_TITLE' => 'Vytvoriť záznam Chyba',
    'LBL_SUBJECT' => 'Predmet:',
    'LBL_NUMBER' => 'Číslo:',
    'LBL_STATUS' => 'Stav:',
    'LBL_PRIORITY' => 'Priorita:',
    'LBL_DESCRIPTION' => 'Popis:',
    'LBL_CONTACT_NAME' => 'Meno Kontaktu:',
    'LBL_CONTACT_ROLE' => 'Pozícia:',
    'LBL_LIST_NUMBER' => 'Číslo',
    'LBL_LIST_SUBJECT' => 'Predmet',
    'LBL_LIST_STATUS' => 'Stav',
    'LBL_LIST_PRIORITY' => 'Priorita',
    'LBL_LIST_RESOLUTION' => 'Rozhodnutie',
    'LBL_LIST_LAST_MODIFIED' => 'Posledná zmena',
    'LBL_INVITEE' => 'Kontakty',
    'LBL_TYPE' => 'Typ:',
    'LBL_LIST_TYPE' => 'Typ',
    'LBL_RESOLUTION' => 'Rozhodutie:',
    'LBL_RELEASE' => 'Vydanie:',
    'LNK_NEW_BUG' => 'Nahlásiť Chybu:',
    'LNK_BUG_LIST' => 'Zoznam Chýb',
    'ERR_DELETE_RECORD' => 'Musíte špecifikovať číslo záznamu v poradí na vymazanie chyby. ',
    'LBL_LIST_MY_BUGS' => 'Moje priradené Chyby',
    'LNK_IMPORT_BUGS' => 'Importovať Chyby',
    'LBL_FOUND_IN_RELEASE' => 'Nájdené vo Vydaní:',
    'LBL_FIXED_IN_RELEASE' => 'Opravené vo Vydaní:',
    'LBL_LIST_FIXED_IN_RELEASE' => 'Opravené vo Vydaní',
    'LBL_WORK_LOG' => 'Pracovný záznam',
    'LBL_SOURCE' => 'Zdroj:',
    'LBL_PRODUCT_CATEGORY' => 'Kategória:',

    'LBL_CREATED_BY' => 'Vytvoril:',
    'LBL_MODIFIED_BY' => 'Naposledy upravované:',

    'LBL_LIST_EMAIL_ADDRESS' => 'E-mailová adresa',
    'LBL_LIST_CONTACT_NAME' => 'Meno kontaktu:',
    'LBL_LIST_ACCOUNT_NAME' => 'Názov Firma',
    'LBL_LIST_PHONE' => 'Telefón',
    'NTC_DELETE_CONFIRMATION' => 'Ste si istý, že chcete vymazať tento kontakt z modulu Chyba?',

    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontrolór Chýb',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'História',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakty',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmy',
    'LBL_CASES_SUBPANEL_TITLE' => 'Prípady',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekty',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumenty',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Priradený používateľ',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',

    'LBL_BUG_INFORMATION' => 'Prehľad', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

);
