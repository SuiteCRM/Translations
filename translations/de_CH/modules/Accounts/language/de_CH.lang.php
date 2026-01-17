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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumente',
    // Dashlet Categories
    'LBL_CHARTS' => 'Diagramme',
    'LBL_DEFAULT' => 'Ansichten',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Es muß die Datensatznummer angegeben werden, um diesen Datensatz löschen zu können.',
    'LBL_ACCOUNT_INFORMATION' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Firmenname:',
    'LBL_ACCOUNT' => 'Firma:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_ADDRESS_INFORMATION' => 'Addresse',
    'LBL_ANNUAL_REVENUE' => 'Jahresumsatz:',
    'LBL_ANY_ADDRESS' => 'Sonstige Adresse:',
    'LBL_ANY_EMAIL' => 'Allgemeine E-Mail:',
    'LBL_ANY_PHONE' => 'Telefonzentrale:',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesener Benutzer:',
    'LBL_BILLING_ADDRESS_CITY' => 'Rechnung Ort:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Rechnung Land:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Rechnung PLZ:',
    'LBL_BILLING_ADDRESS_STATE' => 'Rechnung Kanton:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Rechnung Strasse 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Rechnung Strasse 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Rechnung Strasse 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Rechnung Strasse:',
    'LBL_BILLING_ADDRESS' => 'Rechnungsadresse:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fehler',
    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_CASES_SUBPANEL_TITLE' => 'Fälle',
    'LBL_CITY' => 'Stadt:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_COUNTRY' => 'Land:',
    'LBL_DATE_ENTERED' => 'Erstellt:',
    'LBL_DATE_MODIFIED' => 'Letzte Änderung:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Firmen',
    'LBL_DESCRIPTION_INFORMATION' => 'Beschreibung',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DUPLICATE' => 'Mögliches Firma Duplikat',
    'LBL_EMAIL' => 'E-Mail Adresse:',
    'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
    'LBL_EMAIL_ADDRESSES' => 'E-Mail Adressen',
    'LBL_EMPLOYEES' => 'Angestellte:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_HOMEPAGE_TITLE' => 'Meine Accounts',
    'LBL_INDUSTRY' => 'Branche:',
    'LBL_INVALID_EMAIL' => 'Ungültige E-Mail:',
    'LBL_INVITEE' => 'Kontakte',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
    'LBL_LIST_ACCOUNT_NAME' => 'Name',
    'LBL_LIST_CITY' => 'Stadt',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktname',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail Adresse',
    'LBL_LIST_FORM_TITLE' => 'Firmen Liste',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Kanton',
    'LBL_MEMBER_OF' => 'Mitglied von:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Mitglied von',
    'LBL_MODULE_NAME' => 'Firmen',
    'LBL_MODULE_TITLE' => 'Firmen: Home',
    'LBL_MODULE_ID' => 'Firmen',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Neue Firma',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_OWNERSHIP' => 'Eigentümer:',
    'LBL_PARENT_ACCOUNT_ID' => 'Eltern Account ID',
    'LBL_PHONE_ALT' => 'Weiteres Telefon:',
    'LBL_PHONE_FAX' => 'Faxnummer Büro:',
    'LBL_PHONE_OFFICE' => 'Bürotelefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'PLZ:',
    'LBL_PRODUCTS_TITLE' => 'Produkte',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Kopie an Kontakte',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Kopie...',
    'LBL_RATING' => 'Bewertung:',
    'LBL_SAVE_ACCOUNT' => 'Firma speichern',
    'LBL_SEARCH_FORM_TITLE' => 'Firmen Suche',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Lieferung Stadt:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Lieferung Land:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Lieferung PLZ:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Lieferung Kanton:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Lieferung Strasse 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Lieferung Strasse 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Lieferung Strasse 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Lieferung Strasse:',
    'LBL_SHIPPING_ADDRESS' => 'Lieferadresse:',
    'LBL_SIC_CODE' => 'SIC-Code:',
    'LBL_STATE' => 'Bundesland:',
    'LBL_TICKER_SYMBOL' => 'Börsenkürzel:',
    'LBL_TYPE' => 'Typ:',
    'LBL_WEBSITE' => 'Homepage:',
    'LBL_CAMPAIGNS' => 'Kampagnen',
    'LNK_ACCOUNT_LIST' => 'Firmen',
    'LNK_NEW_ACCOUNT' => 'Neue Firma',
    'LNK_IMPORT_ACCOUNTS' => 'Firmen Importieren',
    'MSG_DUPLICATE' => 'Diese Firma könnte bereits existieren (Duplikat!). Sie können entweder eine Firma aus der untenstehenden Liste auswählen oder auf Speichern klicken und die neue Firma mit den zuvor eingegebenen Daten erstellen.',
    'MSG_SHOW_DUPLICATES' => 'Diese Firma könnte bereits existieren (Duplikat!). Sie können entweder auf Speichern klicken und die neue Firma mit den zuvor eingegebenen Daten erstellen oder auf Abbrechen klicken.',
    'LBL_ASSIGNED_USER_NAME' => 'Zugewiesen an:',
    'LBL_PROSPECT_LIST' => 'Zielkontakteliste',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmen',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
    //For export labels
    'LBL_PARENT_ID' => 'Eltern ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Gekaufte Produkte und Dienstleistungen',

    'LBL_AOS_CONTRACTS' => 'Verträge',
    'LBL_AOS_INVOICES' => 'Rechnungen',
    'LBL_AOS_QUOTES' => 'Angebote',
    'LBL_LIST_WEBSITE' => 'Webseite',
);
