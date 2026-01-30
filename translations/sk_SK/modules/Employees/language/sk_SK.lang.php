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
    'LBL_MODULE_NAME' => 'Spolupracovníci',
    'LBL_MODULE_TITLE' => 'Pracovníci: Domov',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať zamestnancov',
    'LBL_LIST_FORM_TITLE' => 'Spolupracovníci',
    'LBL_NEW_FORM_TITLE' => 'Nový pracovník',
    'LBL_LOGIN' => 'Prihlásenie',
    'LBL_RESET_PREFERENCES' => 'Reset k prednastaveným preferenciám',
    'LBL_TIME_FORMAT' => 'Formát času:',
    'LBL_DATE_FORMAT' => 'Formát dátumu:',
    'LBL_TIMEZONE' => 'Aktuálny čas:',
    'LBL_CURRENCY' => 'Mena:',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_LIST_LAST_NAME' => 'Priezvisko',
    'LBL_LIST_EMPLOYEE_NAME' => 'Meno pracovníka',
    'LBL_LIST_DEPARTMENT' => 'Oddelenie',
    'LBL_LIST_REPORTS_TO_NAME' => 'Záznamy k',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_USER_NAME' => 'Užívateľské meno',
    'LBL_ERROR' => 'Chyba:',
    'LBL_PASSWORD' => 'Heslo:',
    'LBL_USER_NAME' => 'Meno užívateľa:',
    'LBL_USER_TYPE' => 'Typ užívateľa',
    'LBL_FIRST_NAME' => 'Meno:',
    'LBL_LAST_NAME' => 'Priezvisko:',
    'LBL_THEME' => 'Téma:',
    'LBL_LANGUAGE' => 'Jazyk:',
    'LBL_ADMIN' => 'Administrátor',
    'LBL_EMPLOYEE_INFORMATION' => 'Informácie o pracovníkovi',
    'LBL_OFFICE_PHONE' => 'Telefón (práca):',
    'LBL_REPORTS_TO' => 'Reporty od Id:',
    'LBL_REPORTS_TO_NAME' => 'Reporty pre:',
    'LBL_OTHER_PHONE' => 'Další telefón:',
    'LBL_NOTES' => 'Poznámky:',
    'LBL_DEPARTMENT' => 'Oddelenie:',
    'LBL_TITLE' => 'Názov:',
    'LBL_ANY_ADDRESS' => 'Akákoľvek adresa:',
    'LBL_ANY_PHONE' => 'Telefón:',
    'LBL_ANY_EMAIL' => 'Akýkoľvek email:',
    'LBL_ADDRESS' => 'Adresa:',
    'LBL_CITY' => 'Mesto:',
    'LBL_STATE' => 'Oblasť alebo kraj:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_COUNTRY' => 'Krajina:',
    'LBL_NAME' => 'Meno:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'E-mailová adresa:',
    'LBL_EMAIL_LINK_TYPE' => 'Poštový klient',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b>Odosielať emaily pomocou e-mailového klienta v aplikácii SuiteCRM.<br><b>External Mail Client:</b> Odoslať e-mail použitím e-mailového klienta mimo aplikácie SuiteCRM, ako napríklad Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Domáci telefón:',
    'LBL_WORK_PHONE' => 'Pracovný telefón:',
    'LBL_EMPLOYEE_STATUS' => 'Status pracovníka:',
    'LBL_PRIMARY_ADDRESS' => 'Hlavná adresa:',
    'LBL_SAVED_SEARCH' => 'Možnosti rozvrhnutia:',
    'LBL_MESSENGER_ID' => 'Názov IM:',
    'LBL_MESSENGER_TYPE' => 'IM typ:',
    'ERR_LAST_ADMIN_1' => 'Meno pracovníka "',
    'ERR_LAST_ADMIN_2' => '" je posledným pracovníkom s administrátorským prístupom. Najmenej jeden pracovník musí byť administrátorom/správcom.',
    'LNK_NEW_EMPLOYEE' => 'Vytvoriť pracovníka',
    'LNK_EMPLOYEE_LIST' => 'Zobrazenie Pracovníkov',
    'ERR_DELETE_RECORD' => 'K odstráneniu účtu, musíte zadať číslo záznamu.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status pracovníka',

    'LBL_SUITE_LOGIN' => 'Je užívateľom SuiteCRM',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Informácia o postúpení',
    'LBL_IS_ADMIN' => 'Je Administrátor/Správca',
    'LBL_GROUP' => 'Uživateľská skupina',
    'LBL_PHOTO' => 'Fotka',
    'LBL_DELETE_USER_CONFIRM' => 'Tento pracovník je tiež užívateľom. Vymažúc záznam pracovníka vymažete aj záznam užívateľa a užívateľ stratí prístup k aplikácii. Prajete si pokračovať vo vymazávaní záznamu?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Ste si istý, že chcete vymazať tohto pracovníka?',
    'LBL_ONLY_ACTIVE' => 'Aktívni pracovníci',
    'LBL_SELECT' => 'Výber' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Overovacie Id',
    'LBL_EXT_AUTHENTICATE' => 'Externé overenie',
    'LBL_GROUP_USER' => 'Uživateľská skupina',
    'LBL_LIST_ACCEPT_STATUS' => 'Prijať status',
    'LBL_MODIFIED_BY' => 'Upravil',
    'LBL_MODIFIED_BY_ID' => 'Upravené cez ID',
    'LBL_CREATED_BY_NAME' => 'Vytvoril', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Používateľ API Portálu.',
    'LBL_PSW_MODIFIED' => 'Posledná zmena hesla',
    'LBL_SHOW_ON_EMPLOYEES' => 'Zobrazenie záznamu pracovníka',
    'LBL_USER_HASH' => 'Heslo',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Heslo generované systémom',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Stav',
    'LBL_ADDRESS_CITY' => 'Adresa mesto',
    'LBL_ADDRESS_COUNTRY' => 'Adresa krajina',
    'LBL_ADDRESS_INFORMATION' => 'Informácie o adrese',
    'LBL_ADDRESS_POSTALCODE' => 'Adresa PSČ',
    'LBL_ADDRESS_STATE' => 'Adresa kraj',
    'LBL_ADDRESS_STREET' => 'Adresa ulica',

    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_DATE_ENTERED' => 'Dátum vloženia',
    'LBL_DELETED' => 'Vymazané',

    'LBL_BUTTON_SELECT' => 'Výber',
    'LBL_BUTTON_CLEAR' => 'Zmazať',

    'LBL_CONTACTS_SYNC' => 'Synchronizácia kontaktov',
    'LBL_OAUTH_TOKENS' => 'OAuth Žetóny',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Uživatelé projektu z názvu projektu
Používatelia projektu s projektovým názvom',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Kontakty projektu z názvu kontaktu',
    'LBL_ROLES' => 'Pozície',
    'LBL_SECURITYGROUPS' => 'CRM Skupiny',
    'LBL_PROSPECT_LIST' => 'Výhľad, zoznam',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Rozhranie dvojfaktorového overenia:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
