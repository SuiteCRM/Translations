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
    'LBL_MODULE_NAME' => 'Darbuotojai',
    'LBL_MODULE_TITLE' => 'Darbuotojai: Pradžia',
    'LBL_SEARCH_FORM_TITLE' => 'Darbuotojo paieška',
    'LBL_LIST_FORM_TITLE' => 'Darbuotojai',
    'LBL_NEW_FORM_TITLE' => 'Naujas darbuotojas',
    'LBL_LOGIN' => 'Prisijungimas',
    'LBL_RESET_PREFERENCES' => 'Atstatyti į pradinę padėtį',
    'LBL_TIME_FORMAT' => 'Laiko formatas:',
    'LBL_DATE_FORMAT' => 'Datos formatas:',
    'LBL_TIMEZONE' => 'Dabartinis laikas:',
    'LBL_CURRENCY' => 'Valiuta:',
    'LBL_LIST_NAME' => 'Vardas',
    'LBL_LIST_LAST_NAME' => 'Pavardė',
    'LBL_LIST_EMPLOYEE_NAME' => 'Darbuotojo vardas',
    'LBL_LIST_DEPARTMENT' => 'Skyrius',
    'LBL_LIST_REPORTS_TO_NAME' => 'Pavaldus kam',
    'LBL_LIST_EMAIL' => 'el.paštas',
    'LBL_LIST_USER_NAME' => 'Vartotojas vardas',
    'LBL_ERROR' => 'Klaida:',
    'LBL_PASSWORD' => 'Identifikuojamas slaptažodis',
    'LBL_USER_NAME' => 'Vartotojo vardas:',
    'LBL_USER_TYPE' => 'Vartotojo tipas',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_LAST_NAME' => 'Pavardė:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Kalba:',
    'LBL_ADMIN' => 'Administratorius:',
    'LBL_EMPLOYEE_INFORMATION' => 'Darbuotojo informacija',
    'LBL_OFFICE_PHONE' => 'Telefonas:',
    'LBL_REPORTS_TO' => 'Pavaldus kam:',
    'LBL_REPORTS_TO_NAME' => 'Yra pavaldus kam',
    'LBL_OTHER_PHONE' => 'Kitas telefonas:',
    'LBL_NOTES' => 'Užrašai:',
    'LBL_DEPARTMENT' => 'Skyrius:',
    'LBL_TITLE' => 'Pareigos:',
    'LBL_ANY_ADDRESS' => 'Kitas adresas:',
    'LBL_ANY_PHONE' => 'Bet koks telefonas:',
    'LBL_ANY_EMAIL' => 'El.paštas:',
    'LBL_ADDRESS' => 'Adresas:',
    'LBL_CITY' => 'Miestas:',
    'LBL_STATE' => 'Apskritis ar Regionas:',
    'LBL_POSTAL_CODE' => 'Pašto kodas:',
    'LBL_COUNTRY' => 'Šalis:',
    'LBL_NAME' => 'Vardas:',
    'LBL_MOBILE_PHONE' => 'Mobilus telefonas:',
    'LBL_FAX' => 'Faksas:',
    'LBL_EMAIL' => 'El.paštas:',
    'LBL_EMAIL_LINK_TYPE' => 'Pašto klientas',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Send emails using the email client in the SuiteCRM application.<br><b>External Mail Client:</b> Send email using an email client outside of the SuiteCRM application, such as Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Namų telefonas:',
    'LBL_WORK_PHONE' => 'Darbo telefonas:',
    'LBL_EMPLOYEE_STATUS' => 'Darbuotojo statusas:',
    'LBL_PRIMARY_ADDRESS' => 'Pagrindinio adresas:',
    'LBL_SAVED_SEARCH' => 'Išdėstymas nustatymai',
    'LBL_MESSENGER_ID' => 'IM vardas:',
    'LBL_MESSENGER_TYPE' => 'IM tipas:',
    'ERR_LAST_ADMIN_1' => 'Darbuotojo vardas "',
    'ERR_LAST_ADMIN_2' => '" yra paskutinis darbuotojas su administratoriaus teisėmis. Mažiausia vienas darbuotojas turi būti administratorius.',
    'LNK_NEW_EMPLOYEE' => 'Sukurti darbuotoją',
    'LNK_EMPLOYEE_LIST' => 'Darbuotojai',
    'ERR_DELETE_RECORD' => 'Jūs turite nurodyti įrašo numerį, kad galėtumėte ištrinti klientą.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Darbuotojo statusas',

    'LBL_SUITE_LOGIN' => 'Yra vartotojas',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Pranešti apie užduočių paskyrimą',
    'LBL_IS_ADMIN' => 'Yra administratorius',
    'LBL_GROUP' => 'Grupės vartotojas',
    'LBL_PHOTO' => 'Nuotrauka',
    'LBL_DELETE_USER_CONFIRM' => 'Šis darbuotojas yra ir vartotojas. Ištrinant darbuotoją bus ištrinta ir vartotojo informacija. Ar norite tęsti?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Ar tikrai norite ištrinti darbuotoją?',
    'LBL_ONLY_ACTIVE' => 'Aktyvūs Darbuotojai',
    'LBL_SELECT' => 'Pasirinkite' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Identifikacijos Id',
    'LBL_EXT_AUTHENTICATE' => 'Išorinė identifikacija',
    'LBL_GROUP_USER' => 'Grupės vartotojas',
    'LBL_LIST_ACCEPT_STATUS' => 'Patvirtinti',
    'LBL_MODIFIED_BY' => 'Redagavo',
    'LBL_MODIFIED_BY_ID' => 'Redaguotojo Id',
    'LBL_CREATED_BY_NAME' => 'Sukūrė', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portalo API vartotojas',
    'LBL_PSW_MODIFIED' => 'slaptažodis paskutinį kartą keistas',
    'LBL_SHOW_ON_EMPLOYEES' => 'Rodyti Darbuotojo įrašą',
    'LBL_USER_HASH' => 'SMTP slaptažodis:',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistemos sugeneruotas slaptažodis',
    'LBL_DESCRIPTION' => 'Aprašymas',
    'LBL_FAX_PHONE' => 'Faksas',
    'LBL_STATUS' => 'Būsena',
    'LBL_ADDRESS_CITY' => 'Adreso miestas',
    'LBL_ADDRESS_COUNTRY' => 'Adreso šalis',
    'LBL_ADDRESS_INFORMATION' => 'Adresas:',
    'LBL_ADDRESS_POSTALCODE' => 'Adreso pašto kodas',
    'LBL_ADDRESS_STATE' => 'Adreso rajonas',
    'LBL_ADDRESS_STREET' => 'Adreso gatvė',

    'LBL_DATE_MODIFIED' => 'Redagavimo data',
    'LBL_DATE_ENTERED' => 'Įvedimo data',
    'LBL_DELETED' => 'Ištrintas',

    'LBL_BUTTON_SELECT' => 'Pasirinkite',
    'LBL_BUTTON_CLEAR' => 'Išvalyti',

    'LBL_CONTACTS_SYNC' => 'Kontaktų sinchronizavimas',
    'LBL_OAUTH_TOKENS' => 'OAuth prieigos raktai',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Funkcijos',
    'LBL_SECURITYGROUPS' => 'Apsaugotos grupės',
    'LBL_PROSPECT_LIST' => 'Kandidatų sąrašas',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Redaktorius',
);
