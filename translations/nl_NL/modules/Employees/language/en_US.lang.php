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
    'LBL_MODULE_NAME' => 'Personeel',
    'LBL_MODULE_TITLE' => 'Personeel: Start',
    'LBL_SEARCH_FORM_TITLE' => 'Personeel zoeken',
    'LBL_LIST_FORM_TITLE' => 'Personeel',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe medewerker',
    'LBL_LOGIN' => 'Inloggen',
    'LBL_RESET_PREFERENCES' => 'Standaard instellingen terugzetten',
    'LBL_TIME_FORMAT' => 'Tijdweergave:',
    'LBL_DATE_FORMAT' => 'Datumweergave:',
    'LBL_TIMEZONE' => 'Huidige tijd:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_LIST_LAST_NAME' => 'Achternaam',
    'LBL_LIST_EMPLOYEE_NAME' => 'Personeelsnaam',
    'LBL_LIST_DEPARTMENT' => 'Afdeling',
    'LBL_LIST_REPORTS_TO_NAME' => 'Rapporteert aan',
    'LBL_LIST_EMAIL' => 'E-mails',
    'LBL_LIST_USER_NAME' => 'Gebruikersnaam',
    'LBL_ERROR' => 'Fout:',
    'LBL_PASSWORD' => 'Wachtwoord:',
    'LBL_USER_NAME' => 'Gebruikersnaam:',
    'LBL_USER_TYPE' => 'Gebruikerstype',
    'LBL_FIRST_NAME' => 'Voornaam:',
    'LBL_LAST_NAME' => 'Achternaam:',
    'LBL_THEME' => 'Thema:',
    'LBL_LANGUAGE' => 'Taal:',
    'LBL_ADMIN' => 'Beheerder:',
    'LBL_EMPLOYEE_INFORMATION' => 'Personeelsinformatie',
    'LBL_OFFICE_PHONE' => 'Telefoon (werk):',
    'LBL_REPORTS_TO' => 'Rapporteert aan ID:',
    'LBL_REPORTS_TO_NAME' => 'Rapporteert aan',
    'LBL_OTHER_PHONE' => 'Bgg:',
    'LBL_NOTES' => 'Notities:',
    'LBL_DEPARTMENT' => 'Afdeling:',
    'LBL_TITLE' => 'Functieomschrijving:',
    'LBL_ANY_ADDRESS' => '(Deel van) adres:',
    'LBL_ANY_PHONE' => '(Deel van) telefoonnummer',
    'LBL_ANY_EMAIL' => 'Willekeurige E-mail:',
    'LBL_ADDRESS' => 'Adres:',
    'LBL_CITY' => 'Plaats:',
    'LBL_STATE' => 'Provincie of regio:',
    'LBL_POSTAL_CODE' => 'Postcode:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_NAME' => 'Naam:',
    'LBL_MOBILE_PHONE' => 'Mobiel:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMAIL_LINK_TYPE' => 'E-mail client',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM Mail Client:</b> Stuur e-mails met behulp van de e-mail client in de SuiteCRM toepassing. <br> <b>Externe e-mailclient:</b> Stuur een email met behulp van een e-mail client buiten de SuiteCRM toepassing, zoals Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Prive',
    'LBL_WORK_PHONE' => 'Werk:',
    'LBL_EMPLOYEE_STATUS' => 'Personeelsstatus:',
    'LBL_PRIMARY_ADDRESS' => 'Hoofdadres:',
    'LBL_SAVED_SEARCH' => 'Opgeslagen zoekopdracht & layout',
    'LBL_MESSENGER_ID' => 'IM naam:',
    'LBL_MESSENGER_TYPE' => 'IM type:',
    'ERR_LAST_ADMIN_1' => 'De medewerker naam',
    'ERR_LAST_ADMIN_2' => 'is de laatste gebruiker die Administrator rechten heeft. Minstens een gebruiker moet Administrator zijn.',
    'LNK_NEW_EMPLOYEE' => 'Nieuwe medewerker',
    'LNK_EMPLOYEE_LIST' => 'Personeel',
    'ERR_DELETE_RECORD' => 'Er moet een recordnummer zijn gespecificeerd om deze relatie te verwijderen.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Status',

    'LBL_SUITE_LOGIN' => 'Is gebruiker',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Waarschuw bij toegewezen items',
    'LBL_IS_ADMIN' => 'Is administrator',
    'LBL_GROUP' => 'Groepsgebruiker.',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Deze medewerker is ook een gebruiker. Met het verwijderen van de werknemer wordt tevens de gebruiker verwijderd, de gebruiker zal niet meer in staat zijn om SuiteCRM te gebruiken. Wilt u verder wilt gaan met het verwijderen van dit record?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Weet u zeker dat u wilt deze werknemer wilt verwijderen?',
    'LBL_ONLY_ACTIVE' => 'Actieve medewerkers',
    'LBL_SELECT' => 'Selecteer' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authenticatie ID',
    'LBL_EXT_AUTHENTICATE' => 'Externe authenticatie',
    'LBL_GROUP_USER' => 'Groepsgebruiker.',
    'LBL_LIST_ACCEPT_STATUS' => 'Accepteer status',
    'LBL_MODIFIED_BY' => 'Gewijzigd door',
    'LBL_MODIFIED_BY_ID' => 'Gewijzigd door ID',
    'LBL_CREATED_BY_NAME' => 'Aangemaakt door', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portaal API-gebruiker',
    'LBL_PSW_MODIFIED' => 'Wachtwoord laatst gewijzigd',
    'LBL_SHOW_ON_EMPLOYEES' => 'Toon medewerkersrecord',
    'LBL_USER_HASH' => 'Wachtwoord',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Wachtwoord door systeem aangemaakt',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adres woonplaats',
    'LBL_ADDRESS_COUNTRY' => 'Adres land',
    'LBL_ADDRESS_INFORMATION' => 'Adresgegevens',
    'LBL_ADDRESS_POSTALCODE' => 'Adres postcode',
    'LBL_ADDRESS_STATE' => 'Adres provincie',
    'LBL_ADDRESS_STREET' => 'Adres straat',

    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_DATE_ENTERED' => 'Datum ingevoerd',
    'LBL_DELETED' => 'Verwijderd',

    'LBL_BUTTON_SELECT' => 'Selecteer',
    'LBL_BUTTON_CLEAR' => 'Wissen',

    'LBL_CONTACTS_SYNC' => 'Contact Sync',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Project-gebruikers uit de titel van het Project',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Project contacten van contacten titel',
    'LBL_ROLES' => 'Rollen',
    'LBL_SECURITYGROUPS' => 'Security Groepen',
    'LBL_PROSPECT_LIST' => 'Prospect Lijst',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Twee-traps authenticatie Interface:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
