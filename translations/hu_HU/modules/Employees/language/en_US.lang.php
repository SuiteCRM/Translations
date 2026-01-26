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
    'LBL_MODULE_NAME' => 'Alkalmazottak',
    'LBL_MODULE_TITLE' => 'Alkalmazottak: Főoldal',
    'LBL_SEARCH_FORM_TITLE' => 'Munkatársak keresés',
    'LBL_LIST_FORM_TITLE' => 'Alkalmazottak',
    'LBL_NEW_FORM_TITLE' => 'Új Munkatárs',
    'LBL_LOGIN' => 'Bejelentkezés',
    'LBL_RESET_PREFERENCES' => 'Alapértelmezett beállítások visszaállítása',
    'LBL_TIME_FORMAT' => 'Idő formátum:',
    'LBL_DATE_FORMAT' => 'Dátum formátum:',
    'LBL_TIMEZONE' => 'Aktuális idő:',
    'LBL_CURRENCY' => 'Pénznem',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_LAST_NAME' => 'Keresztnév',
    'LBL_LIST_EMPLOYEE_NAME' => 'Munkatárs neve',
    'LBL_LIST_DEPARTMENT' => 'Osztály',
    'LBL_LIST_REPORTS_TO_NAME' => 'Jelentést tesz',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'Felhasználói név',
    'LBL_ERROR' => 'Hiba:',
    'LBL_PASSWORD' => 'Jelszó:',
    'LBL_USER_NAME' => 'Felhasználó neve:',
    'LBL_USER_TYPE' => 'Felhasználó típusa',
    'LBL_FIRST_NAME' => 'Keresztnév:',
    'LBL_LAST_NAME' => 'Vezetéknév:',
    'LBL_THEME' => 'Téma:',
    'LBL_LANGUAGE' => 'Nyelv:',
    'LBL_ADMIN' => 'Adminisztrátor:',
    'LBL_EMPLOYEE_INFORMATION' => 'Munkatárs információk',
    'LBL_OFFICE_PHONE' => 'Irodai telefon:',
    'LBL_REPORTS_TO' => 'Jelentést tesz:',
    'LBL_REPORTS_TO_NAME' => 'Felettese',
    'LBL_OTHER_PHONE' => 'Egyéb telefon:',
    'LBL_NOTES' => 'Jegyzetek:',
    'LBL_DEPARTMENT' => 'Osztály:',
    'LBL_TITLE' => 'Beosztás:',
    'LBL_ANY_ADDRESS' => 'Cím:',
    'LBL_ANY_PHONE' => 'Egyéb telefon:',
    'LBL_ANY_EMAIL' => 'Email:',
    'LBL_ADDRESS' => 'Cím:',
    'LBL_CITY' => 'Város:',
    'LBL_STATE' => 'Állam vagy régió:',
    'LBL_POSTAL_CODE' => 'Irányítószám:',
    'LBL_COUNTRY' => 'Ország:',
    'LBL_NAME' => 'Név:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMAIL_LINK_TYPE' => 'Email kliens',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>CRM-Mail kliens használata:</b> A beállítás segítségével CRM alkalmazásból küldhető Email.<br><b>Külső Mail használata:</b>CRM alkalmazáson kívüli Email küldéskor (pl. Microsoft Outlookot használva).',
    'LBL_HOME_PHONE' => 'Otthoni telefon:',
    'LBL_WORK_PHONE' => 'Irodai telefon:',
    'LBL_EMPLOYEE_STATUS' => 'Munkatárs státusa:',
    'LBL_PRIMARY_ADDRESS' => 'Elsődleges cím:',
    'LBL_SAVED_SEARCH' => 'Elrendezési beállítások',
    'LBL_MESSENGER_ID' => 'IM Név:',
    'LBL_MESSENGER_TYPE' => 'IM Típus:',
    'ERR_LAST_ADMIN_1' => 'A Munkatárs neve"',
    'ERR_LAST_ADMIN_2' => '" az utolsó alkalmazott akinek adminisztrátori jogai vannak.  Legalább egy alkalmazott adminisztrátor kell, hogy legyen.',
    'LNK_NEW_EMPLOYEE' => 'Munkatársak létrehozása',
    'LNK_EMPLOYEE_LIST' => 'Alkalmazottak megtekintése',
    'ERR_DELETE_RECORD' => 'A bejegyzés törléséhez meg kell adnia a rekordsorszámot.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Felhasználó',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Figyelmeztetés hozzárendelésre',
    'LBL_IS_ADMIN' => 'Adminisztrátor?',
    'LBL_GROUP' => 'Csoport Felhasználó',
    'LBL_PHOTO' => 'Fénykép',
    'LBL_DELETE_USER_CONFIRM' => 'Ez a munkatárs egy felhasználó. A munkatársi rekord törlése a felhasználó rekordot is törli, és a felhasználó nem lesz képes elérni a kérelmet. Szeretné folytatni a rekord törlését?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Biztos benne, hogy törli ezt a munkatársat?',
    'LBL_ONLY_ACTIVE' => 'Aktív alkalmazott',
    'LBL_SELECT' => 'Kiválasztás' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Hitelesítő azonosító',
    'LBL_EXT_AUTHENTICATE' => 'Külső hitelesítés',
    'LBL_GROUP_USER' => 'Csoport Felhasználó',
    'LBL_LIST_ACCEPT_STATUS' => 'Status elfogadva',
    'LBL_MODIFIED_BY' => 'Módosító',
    'LBL_MODIFIED_BY_ID' => 'Módosító Id',
    'LBL_CREATED_BY_NAME' => 'Létrehozta', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API felhasználó',
    'LBL_PSW_MODIFIED' => 'Jelszó utolsó változása',
    'LBL_SHOW_ON_EMPLOYEES' => 'Alkalmazott megtekintése',
    'LBL_USER_HASH' => 'Jelszó',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Rendszer által generált jelszó',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Állapot',
    'LBL_ADDRESS_CITY' => 'Cím Város:',
    'LBL_ADDRESS_COUNTRY' => 'Cím Ország:',
    'LBL_ADDRESS_INFORMATION' => 'Cím információ',
    'LBL_ADDRESS_POSTALCODE' => 'Cím Irányítószám:',
    'LBL_ADDRESS_STATE' => 'Cím Állam:',
    'LBL_ADDRESS_STREET' => 'Cím Utca:',

    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_DATE_ENTERED' => 'Megadott dátum',
    'LBL_DELETED' => 'Törölve',

    'LBL_BUTTON_SELECT' => 'Kiválasztás',
    'LBL_BUTTON_CLEAR' => 'Alaphelyzet',

    'LBL_CONTACTS_SYNC' => 'Névjegy-szinkronizálás',
    'LBL_OAUTH_TOKENS' => 'OAuth tokenek',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Projekt Felhasználók a Projekt Címből',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projekt kapcsolatok a kapcsolat címekből',
    'LBL_ROLES' => 'Szerepkörök',
    'LBL_SECURITYGROUPS' => 'Biztonsági Csoportok',
    'LBL_PROSPECT_LIST' => 'Lehetőség lista',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Kétlépcsős Hitelesítés Felület:',
    'LBL_EDITOR_TYPE' => 'Szerkesztő',
);
