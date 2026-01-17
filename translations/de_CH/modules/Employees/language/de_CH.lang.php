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
    'LBL_MODULE_NAME' => 'Mitarbeiter',
    'LBL_MODULE_TITLE' => 'Mitarbeiter: Startseite',
    'LBL_SEARCH_FORM_TITLE' => 'Mitarbeiter suchen',
    'LBL_LIST_FORM_TITLE' => 'Mitarbeiter',
    'LBL_NEW_FORM_TITLE' => 'Neuer Mitarbeiter',
    'LBL_LOGIN' => 'Anmelden',
    'LBL_RESET_PREFERENCES' => 'Zurücksetzen auf Standardeinstellungen',
    'LBL_TIME_FORMAT' => 'Zeitformat:',
    'LBL_DATE_FORMAT' => 'Datumsformat:',
    'LBL_TIMEZONE' => 'Aktuelle Zeit:',
    'LBL_CURRENCY' => 'Währung',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Nachname',
    'LBL_LIST_EMPLOYEE_NAME' => 'Mitarbeitername',
    'LBL_LIST_DEPARTMENT' => 'Abteilung',
    'LBL_LIST_REPORTS_TO_NAME' => 'Berichtet an',
    'LBL_LIST_EMAIL' => 'E-Mail',
    'LBL_LIST_USER_NAME' => 'Benutzername',
    'LBL_ERROR' => 'Fehler:',
    'LBL_PASSWORD' => 'Kennwort:',
    'LBL_USER_NAME' => 'Benutzername:',
    'LBL_USER_TYPE' => 'Benutzertyp',
    'LBL_FIRST_NAME' => 'Vorname:',
    'LBL_LAST_NAME' => 'Nachname:',
    'LBL_THEME' => 'Design:',
    'LBL_LANGUAGE' => 'Sprache:',
    'LBL_ADMIN' => 'Administrator:',
    'LBL_EMPLOYEE_INFORMATION' => 'Mitarbeiterinformation',
    'LBL_OFFICE_PHONE' => 'Bürotelefon:',
    'LBL_REPORTS_TO' => 'Berichtet an ID',
    'LBL_REPORTS_TO_NAME' => 'Berichtet an',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_NOTES' => 'Notizen:',
    'LBL_DEPARTMENT' => 'Abteilung:',
    'LBL_TITLE' => 'Stellenbezeichnung:',
    'LBL_ANY_ADDRESS' => 'Sonstige Adresse:',
    'LBL_ANY_PHONE' => 'Telefonzentrale:',
    'LBL_ANY_EMAIL' => 'Allgemeine E-Mail:',
    'LBL_ADDRESS' => 'Adresse',
    'LBL_CITY' => 'Stadt:',
    'LBL_STATE' => 'Bundesland:',
    'LBL_POSTAL_CODE' => 'PLZ:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_NAME' => 'Name:',
    'LBL_MOBILE_PHONE' => 'Telefon Mobil:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'E-Mail Adresse:',
    'LBL_EMAIL_LINK_TYPE' => 'E-Mail Klient',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM E-Mail-Client:</b> Senden Sie e-Mails mit dem e-Mail-Client in der SuiteCRM Anwendung. <br><b>Externe Mail-Client:</b> senden e-Mails mit einem e-Mail-Client außerhalb der SuiteCRM Anwendung, wie z. B. Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telefon Privat:',
    'LBL_WORK_PHONE' => 'Telefon Büro:',
    'LBL_EMPLOYEE_STATUS' => 'Mitarbeiterstatus:',
    'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
    'LBL_SAVED_SEARCH' => 'Layout Optionen',
    'LBL_MESSENGER_ID' => 'IM Namen:',
    'LBL_MESSENGER_TYPE' => 'IM Typ:',
    'ERR_LAST_ADMIN_1' => 'Der Name des Mitarbeiters"',
    'ERR_LAST_ADMIN_2' => '" ist der letzte Mitarbeiter mit Administrator Rechten. Es muss jedoch immer mindestens ein Administrator im System existieren."',
    'LNK_NEW_EMPLOYEE' => 'Mitarbeiter erstellen',
    'LNK_EMPLOYEE_LIST' => 'Mitarbeiter anzeigen',
    'ERR_DELETE_RECORD' => 'Es muß die Datensatznummer angegeben werden, um diesen Datensatz löschen zu können.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Mitarbeiterstatus',

    'LBL_SUITE_LOGIN' => 'Benutzer ist',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Meldung wenn zugewiesen',
    'LBL_IS_ADMIN' => 'Administrator ist',
    'LBL_GROUP' => 'Gruppenbenutzer',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Dieser Mitarbeiter ist auch ein Benutzer. Das Löschen des Mitarbeiter Datensatzes löscht auch den Benutzer und dieser kann die Anwendung anschließend nicht mehr benutzen. Wollen Sie den Datensatz wirklich löschen?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Sind Sie sicher, dass Sie diesen Mitarbeiter löschen wollen?',
    'LBL_ONLY_ACTIVE' => 'Aktive Mitarbeiter',
    'LBL_SELECT' => 'Auswählen' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Authentifizierungs ID',
    'LBL_EXT_AUTHENTICATE' => 'Externe Authentifizierung',
    'LBL_GROUP_USER' => 'Gruppenbenutzer',
    'LBL_LIST_ACCEPT_STATUS' => 'Status akzeptieren',
    'LBL_MODIFIED_BY' => 'Geändert von',
    'LBL_MODIFIED_BY_ID' => 'Geändert von Id',
    'LBL_CREATED_BY_NAME' => 'Erstellt von', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API Benutzer',
    'LBL_PSW_MODIFIED' => 'Letzte Passwortänderung',
    'LBL_SHOW_ON_EMPLOYEES' => 'Mitarbeiterdatensatz zeigen',
    'LBL_USER_HASH' => 'Kennwort',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Systemgeneriertes Passwort',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Status',
    'LBL_ADDRESS_CITY' => 'Adresse Ort',
    'LBL_ADDRESS_COUNTRY' => 'Adresse Land',
    'LBL_ADDRESS_INFORMATION' => 'Addresse',
    'LBL_ADDRESS_POSTALCODE' => 'Adresse PLZ',
    'LBL_ADDRESS_STATE' => 'Adresse Bundesland',
    'LBL_ADDRESS_STREET' => 'Adresse Straße',

    'LBL_DATE_MODIFIED' => 'Letzte Änderung',
    'LBL_DATE_ENTERED' => 'Erstellungsdatum',
    'LBL_DELETED' => 'Gelöscht',

    'LBL_BUTTON_SELECT' => 'Auswählen',
    'LBL_BUTTON_CLEAR' => 'Leeren',

    'LBL_CONTACTS_SYNC' => 'Kontakte syncronisieren',
    'LBL_OAUTH_TOKENS' => 'OAuth Tokens',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Projekt Benutzern aus Projekttitel',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Projekt Kontakte aus Kontaktetitel',
    'LBL_ROLES' => 'Rollen',
    'LBL_SECURITYGROUPS' => 'Berechtigungsgruppen',
    'LBL_PROSPECT_LIST' => 'Zielkontakteliste',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Zwei-Faktor-Authentifizierung Schnittstelle:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
