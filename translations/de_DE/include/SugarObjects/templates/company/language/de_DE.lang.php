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
    'ERR_DELETE_RECORD' => 'Um diesen Firmeneintrag zu löschen, muss eine Datensatznummer angegeben werden.',
    'LBL_ACCOUNT_NAME' => 'Firmenname:',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_ADDRESS_INFORMATION' => 'Adressinformation',
    'LBL_ANNUAL_REVENUE' => 'Jahresumsatz:',
    'LBL_ANY_ADDRESS' => 'Beliebige Adresse:',
    'LBL_ANY_EMAIL' => 'Jede E-Mail Adresse:',
    'LBL_EMAIL_NON_PRIMARY' => 'Nicht primäre E-mails',
    'LBL_ANY_PHONE' => 'Beliebige Telefonnummer:',
    'LBL_ASSIGNED_TO_NAME' => 'Benutzer:',
    'LBL_RATING' => 'Bewertung',
    'LBL_ASSIGNED_TO' => 'Zugewiesen:',
    'LBL_ASSIGNED_USER' => 'Zugewiesen an:',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesen an:',
    'LBL_BILLING_ADDRESS_CITY' => 'Rechnungsadresse Stadt:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Rechnungsadresse Land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Rechnungsadresse Postleitzahl:',
    'LBL_BILLING_ADDRESS_STATE' => 'Rechnungsadresse Bundesland:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rechnungsadresse Straße 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rechnungsadresse Straße 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rechnungsadresse Straße 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Rechnungsadresse Straße:',
    'LBL_BILLING_ADDRESS' => 'Rechnungsadresse::',
    'LBL_ACCOUNT_INFORMATION' => 'Firmeninformationen',
    'LBL_CITY' => 'Stadt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DATE_ENTERED' => 'Erstellt am:',
    'LBL_DATE_MODIFIED' => 'Geändert am:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Firmen',
    'LBL_DESCRIPTION_INFORMATION' => 'Beschreibungsinformation',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DUPLICATE' => 'Möglicher doppelter Firmeneintrag',
    'LBL_EMAIL' => 'E-Mail Adresse:',
    'LBL_EMPLOYEES' => 'Mitarbeiter:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Branche:',
    'LBL_LIST_ACCOUNT_NAME' => 'Firmenname',
    'LBL_LIST_CITY' => 'Stadt',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail Adresse',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Bundesland',
    'LBL_MEMBER_OF' => 'Mitglied von:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Mitglieder',
    'LBL_NAME' => 'Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail Adresse:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_OWNERSHIP' => 'Inhaber:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID Mutterfirma',
    'LBL_PHONE_ALT' => 'Zweite Telefonnummer:',
    'LBL_PHONE_FAX' => 'Telefon/Fax:',
    'LBL_PHONE_OFFICE' => 'Telefon Büro:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_EMAIL_ADDRESS' => 'E-Mail',
    'LBL_EMAIL_ADDRESSES' => 'E-Mail Adresse(n)',
    'LBL_POSTAL_CODE' => 'Postleitzahl:',
    'LBL_SAVE_ACCOUNT' => 'Firma speichern',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Versandadresse Stadt:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Versandadresse Land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Versandadresse PLZ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Versandadresse Bundesland:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Versandadresse Straße 2:',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Versandadresse Straße 3:',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Versandadresse Straße 4:',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Versandadresse Straße:',
    'LBL_SHIPPING_ADDRESS' => 'Versandadresse:',

    'LBL_STATE' => 'Zustand',
    'LBL_TICKER_SYMBOL' => 'Börsenkürzel:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Webseite:',

    'LNK_ACCOUNT_LIST' => 'Firmen',
    'LNK_NEW_ACCOUNT' => 'Firma erstellen',

    'MSG_DUPLICATE' => 'Diese Firma könnte bereits existieren (Duplikat!). Sie können entweder eine Firma aus der untenstehenden Liste auswählen oder auf Speichern klicken und die neue Firma mit den zuvor eingegebenen Daten erstellen.',
    'MSG_SHOW_DUPLICATES' => 'Diese Firma könnte bereits existieren (Duplikat!). Sie können entweder eine Firma aus der untenstehenden Liste auswählen oder auf Speichern klicken und die neue Firma mit den zuvor eingegebenen Daten erstellen.',

    'NTC_DELETE_CONFIRMATION' => 'Sind Sie sicher, dass Sie diesen Eintrag löschen wollen?',

    'LBL_EDIT_BUTTON' => 'Bearbeiten',
    'LBL_REMOVE' => 'Entfernen',

);
