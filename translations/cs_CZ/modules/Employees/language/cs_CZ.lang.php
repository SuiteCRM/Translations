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
    'LBL_MODULE_NAME' => 'Zaměstnanci',
    'LBL_MODULE_TITLE' => 'Zaměstnanci: Domů',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat zaměstnance',
    'LBL_LIST_FORM_TITLE' => 'Zaměstnanci',
    'LBL_NEW_FORM_TITLE' => 'Nový zaměstnanec',
    'LBL_LOGIN' => 'Přihlásit',
    'LBL_RESET_PREFERENCES' => 'Obnovit původní nastavení',
    'LBL_TIME_FORMAT' => 'Formát času:',
    'LBL_DATE_FORMAT' => 'Formát datumu:',
    'LBL_TIMEZONE' => 'Časové pásmo:',
    'LBL_CURRENCY' => 'Měna:',
    'LBL_LIST_NAME' => 'Název',
    'LBL_LIST_LAST_NAME' => 'Příjmení',
    'LBL_LIST_EMPLOYEE_NAME' => 'Jméno zaměstnance',
    'LBL_LIST_DEPARTMENT' => 'Oddělení',
    'LBL_LIST_REPORTS_TO_NAME' => 'Reporty k',
    'LBL_LIST_EMAIL' => 'E-mail',
    'LBL_LIST_USER_NAME' => 'Uživatelské jméno',
    'LBL_ERROR' => 'Chyba:',
    'LBL_PASSWORD' => 'Heslo:',
    'LBL_USER_NAME' => 'Uživatelské jméno:',
    'LBL_USER_TYPE' => 'User Typ',
    'LBL_FIRST_NAME' => 'Křestní jméno:',
    'LBL_LAST_NAME' => 'Příjmení:',
    'LBL_THEME' => 'Motiv:',
    'LBL_LANGUAGE' => 'Jazyk:',
    'LBL_ADMIN' => 'Administrátor:',
    'LBL_EMPLOYEE_INFORMATION' => 'Informace o zaměstnanci',
    'LBL_OFFICE_PHONE' => 'Telefon práce:',
    'LBL_REPORTS_TO' => 'Reporty k ID:',
    'LBL_REPORTS_TO_NAME' => 'Reporty k',
    'LBL_OTHER_PHONE' => 'Jiný Telefon:',
    'LBL_NOTES' => 'Poznámky:',
    'LBL_DEPARTMENT' => 'Oddělení:',
    'LBL_TITLE' => 'Název úlohy:',
    'LBL_ANY_ADDRESS' => 'Jakákoliv adresa:',
    'LBL_ANY_PHONE' => 'Jakýkoli telefon:',
    'LBL_ANY_EMAIL' => 'Jakýkoliv Email:',
    'LBL_ADDRESS' => 'Adresa:',
    'LBL_CITY' => 'Město:',
    'LBL_STATE' => 'Oblast nebo kraj:',
    'LBL_POSTAL_CODE' => 'PSČ:',
    'LBL_COUNTRY' => 'Kraj:',
    'LBL_NAME' => 'Název:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Emailová adresa:',
    'LBL_EMAIL_LINK_TYPE' => 'Emailový klient',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM emailový klient:</b> Zasílá email za použití emailového klienta v aplikaci SuiteCRM.<br><b>Externí emailový klient:</b> Zasílá emaily za použití emailového klienta mimo aplikaci SuiteCRM jako je například Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telefon domů:',
    'LBL_WORK_PHONE' => 'Telefon do zaměstnání:',
    'LBL_EMPLOYEE_STATUS' => 'Stav zaměstnance:',
    'LBL_PRIMARY_ADDRESS' => 'Primární adresa:',
    'LBL_SAVED_SEARCH' => 'Možnosti rozvržení',
    'LBL_MESSENGER_ID' => 'IM ID:',
    'LBL_MESSENGER_TYPE' => 'Typ IM:',
    'ERR_LAST_ADMIN_1' => 'Zaměstnanec ',
    'ERR_LAST_ADMIN_2' => '&#034; je poslední zaměstnanec s profilem administrátora. Minimálně jeden zaměstnanec musí mít profil administrátora.',
    'LNK_NEW_EMPLOYEE' => 'Přidat zaměstnance',
    'LNK_EMPLOYEE_LIST' => 'Zaměstnanci',
    'ERR_DELETE_RECORD' => 'Pro smazání účtu musíte určit číslo záznamu.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Stav zaměstnance',

    'LBL_SUITE_LOGIN' => 'Je uživatel',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Upozornit na přiřazení',
    'LBL_IS_ADMIN' => 'Je administrátor',
    'LBL_GROUP' => 'Skupinový uživatel',
    'LBL_PHOTO' => 'Fotka',
    'LBL_DELETE_USER_CONFIRM' => 'Tento zaměstnanec je zároveň i uživatel. Smazáním tohoto zaměstnance dojde i k odstranění uživatele a uživatel se již nebude moci přihlásit do aplikace. Chcete pokračovat ve smazání tohoto záznamu?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Opravdu chcete smazat tohoto zaměstnance?',
    'LBL_ONLY_ACTIVE' => 'Aktivní zaměstnanci',
    'LBL_SELECT' => 'Vybrat' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID ověření',
    'LBL_EXT_AUTHENTICATE' => 'Externí ověření',
    'LBL_GROUP_USER' => 'Skupinový uživatel',
    'LBL_LIST_ACCEPT_STATUS' => 'Přijmout stav',
    'LBL_MODIFIED_BY' => 'Změnil',
    'LBL_MODIFIED_BY_ID' => 'Změnil ID',
    'LBL_CREATED_BY_NAME' => 'Vytvořeno', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portál API užívatel',
    'LBL_PSW_MODIFIED' => 'heslo naposledy změněno',
    'LBL_SHOW_ON_EMPLOYEES' => 'Zobrazit záznam zaměstnance',
    'LBL_USER_HASH' => 'Heslo',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systémem Generované heslo',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Stav',
    'LBL_ADDRESS_CITY' => 'Město:',
    'LBL_ADDRESS_COUNTRY' => 'Země:',
    'LBL_ADDRESS_INFORMATION' => 'Informace o adrese',
    'LBL_ADDRESS_POSTALCODE' => 'Adresa PSČ',
    'LBL_ADDRESS_STATE' => 'Stav adresy',
    'LBL_ADDRESS_STREET' => 'Ulice:',

    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_DATE_ENTERED' => 'Zahájeno',
    'LBL_DELETED' => 'Vymazáno',

    'LBL_BUTTON_SELECT' => 'Vybrat',
    'LBL_BUTTON_CLEAR' => 'Vyprázdnit',

    'LBL_CONTACTS_SYNC' => 'Synchronizace kontaktů',
    'LBL_OAUTH_TOKENS' => 'OAuth tokeny',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Uživatelé projektu z nadpisu projektu',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Kontakty projektu z nadpisu kontaktu',
    'LBL_ROLES' => 'Role',
    'LBL_SECURITYGROUPS' => 'Skupiny zabezpečení',
    'LBL_PROSPECT_LIST' => 'Seznam možných zákazníků',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Rozhraní dvoufázového ověření:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
