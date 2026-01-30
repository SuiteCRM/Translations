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
    'LBL_MODULE_NAME' => 'Ansatte',
    'LBL_MODULE_TITLE' => 'Ansatte: Forside',
    'LBL_SEARCH_FORM_TITLE' => 'Søk etter ansatt',
    'LBL_LIST_FORM_TITLE' => 'Ansatte',
    'LBL_NEW_FORM_TITLE' => 'Ny ansatt',
    'LBL_LOGIN' => 'Logg inn',
    'LBL_RESET_PREFERENCES' => 'Sett til standardverdier',
    'LBL_TIME_FORMAT' => 'Tidsformat:',
    'LBL_DATE_FORMAT' => 'Datoformat:',
    'LBL_TIMEZONE' => 'Nåtid:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_LIST_NAME' => 'Navn',
    'LBL_LIST_LAST_NAME' => 'Etternavn',
    'LBL_LIST_EMPLOYEE_NAME' => 'Ansattes navn',
    'LBL_LIST_DEPARTMENT' => 'Avdeling',
    'LBL_LIST_REPORTS_TO_NAME' => 'Rapporterer til',
    'LBL_LIST_EMAIL' => 'E-post',
    'LBL_LIST_USER_NAME' => 'Brukernavn',
    'LBL_ERROR' => 'Feil:',
    'LBL_PASSWORD' => 'Passord:',
    'LBL_USER_NAME' => 'Brukernavn:',
    'LBL_USER_TYPE' => 'Brukertype',
    'LBL_FIRST_NAME' => 'Fornavn:',
    'LBL_LAST_NAME' => 'Etternavn:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Språk:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Ansatt info',
    'LBL_OFFICE_PHONE' => 'Tlf jobb:',
    'LBL_REPORTS_TO' => 'Rapporterer til:',
    'LBL_REPORTS_TO_NAME' => 'Rapporterer til:',
    'LBL_OTHER_PHONE' => 'Annet telefonnr:',
    'LBL_NOTES' => 'Notater:',
    'LBL_DEPARTMENT' => 'Avdeling:',
    'LBL_TITLE' => 'Job Title:',
    'LBL_ANY_ADDRESS' => 'Vilkårlig adresse:',
    'LBL_ANY_PHONE' => 'Vilkårlig tlf:',
    'LBL_ANY_EMAIL' => 'Vilkårlig e-post:',
    'LBL_ADDRESS' => 'Adresse:',
    'LBL_CITY' => 'By:',
    'LBL_STATE' => 'Delstat eller område:',
    'LBL_POSTAL_CODE' => 'Postnr:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_NAME' => 'Navn:',
    'LBL_MOBILE_PHONE' => 'Mobil:',
    'LBL_FAX' => 'Faks:',
    'LBL_EMAIL' => 'E-post:',
    'LBL_EMAIL_LINK_TYPE' => 'E-postklient',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM e-postklient:</b> Send e-post med e-postklienten i SuiteCRM.<br><b>Ekstern e-postklient:</b>Send e-post med en klient utenfor SuiteCRM, som f.eks. Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Tlf hjem:',
    'LBL_WORK_PHONE' => 'Telefon arbeid:',
    'LBL_EMPLOYEE_STATUS' => 'Ansatt status:',
    'LBL_PRIMARY_ADDRESS' => 'Primæradresse:',
    'LBL_SAVED_SEARCH' => 'Layout alternativer',
    'LBL_MESSENGER_ID' => 'IM navn:',
    'LBL_MESSENGER_TYPE' => 'IM type:',
    'ERR_LAST_ADMIN_1' => 'Ansatt navn',
    'ERR_LAST_ADMIN_2' => '" er siste medarbeider med admin aksess. Minst en medarbeider må  være admin.',
    'LNK_NEW_EMPLOYEE' => 'Ny ansatt',
    'LNK_EMPLOYEE_LIST' => 'Ansatte',
    'ERR_DELETE_RECORD' => 'Oppgi referansenr for å slette denne kontoen.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Er bruker',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Tilordningsnotat:',
    'LBL_IS_ADMIN' => 'Er administrator',
    'LBL_GROUP' => 'Gruppebruker',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Denne ansatte er også en bruker. Å slette denne ansattoppføringen vil også slette brukeroppføringen, og brukeren vil ikke lenger kunne bruke systemet. Vil du slette denne oppføringen?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Er du sikker på at du vil slette denne ansatte?',
    'LBL_ONLY_ACTIVE' => 'Aktive ansatte',
    'LBL_SELECT' => 'Velg' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Autensierings ID',
    'LBL_EXT_AUTHENTICATE' => 'Ekstern autorisering',
    'LBL_GROUP_USER' => 'Gruppebruker',
    'LBL_LIST_ACCEPT_STATUS' => 'Aksepter status',
    'LBL_MODIFIED_BY' => 'Endret av',
    'LBL_MODIFIED_BY_ID' => 'Endret av ID',
    'LBL_CREATED_BY_NAME' => 'Opprettet av', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API bruker',
    'LBL_PSW_MODIFIED' => 'Passord sist endret',
    'LBL_SHOW_ON_EMPLOYEES' => 'Vis medarbeider register',
    'LBL_USER_HASH' => 'Passord',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgenerert passord ',
    'LBL_DESCRIPTION' => 'Beskrivelse',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adresse, sted:',
    'LBL_ADDRESS_COUNTRY' => 'Adresse, land:',
    'LBL_ADDRESS_INFORMATION' => 'Addresseinfo',
    'LBL_ADDRESS_POSTALCODE' => 'Adresse, postnummer:',
    'LBL_ADDRESS_STATE' => 'Adresse, fylke:',
    'LBL_ADDRESS_STREET' => 'Adresse, gateadresse:',

    'LBL_DATE_MODIFIED' => 'Dato endret',
    'LBL_DATE_ENTERED' => 'Dato opprettet',
    'LBL_DELETED' => 'Slettet',

    'LBL_BUTTON_SELECT' => 'Velg',
    'LBL_BUTTON_CLEAR' => 'Fjern innhold',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuthsymboler',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project Users from Project Title',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project Contacts from Contacts Title',
    'LBL_ROLES' => 'Roller',
    'LBL_SECURITYGROUPS' => 'Sikkerhetsgrupper',
    'LBL_PROSPECT_LIST' => 'Prospektliste',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Two Factor Authentication Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
