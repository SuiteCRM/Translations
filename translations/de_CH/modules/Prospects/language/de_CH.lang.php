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
    'LBL_MODULE_NAME' => 'Zielkontakte',
    'LBL_MODULE_ID' => 'Zielkontakte',
    'LBL_INVITEE' => 'Direkte Berichte',
    'LBL_MODULE_TITLE' => 'Zielkontakte: Home',
    'LBL_SEARCH_FORM_TITLE' => 'Zielkontakte Suche',
    'LBL_LIST_FORM_TITLE' => 'Zielkontaktliste',
    'LBL_NEW_FORM_TITLE' => 'Neuer Zielkontakt',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Nachname',
    'LBL_LIST_TITLE' => 'Stellenbezeichnung',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Vorname',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesen an:',
    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_EXISTING_ACCOUNT' => 'Bestehende Firma ausgewählt',
    'LBL_CREATED_ACCOUNT' => 'Neue Firma erstellt',
    'LBL_CREATED_CALL' => 'Neuer Anruf erstellt',
    'LBL_CREATED_MEETING' => 'Neues Meeting angelegt',
    'LBL_NAME' => 'Name:',
    'LBL_PROSPECT_INFORMATION' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Weitere Informationen',
    'LBL_FIRST_NAME' => 'Vorname:',
    'LBL_OFFICE_PHONE' => 'Bürotelefon:',
    'LBL_ANY_PHONE' => 'Telefonzentrale:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Nachname:',
    'LBL_MOBILE_PHONE' => 'Telefon Mobil:',
    'LBL_HOME_PHONE' => 'Privat:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Straße:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Stadt:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse PLZ:',
    'LBL_ALT_ADDRESS_STREET' => '2. Adresse Strasse:',
    'LBL_ALT_ADDRESS_CITY' => '2. Adresse Stadt:',
    'LBL_ALT_ADDRESS_COUNTRY' => '2. Adresse Land:',
    'LBL_ALT_ADDRESS_STATE' => '2. Adresse Bundesland:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '2. Adresse PLZ:',
    'LBL_TITLE' => 'Stellenbezeichnung:',
    'LBL_DEPARTMENT' => 'Abteilung:',
    'LBL_BIRTHDATE' => 'Geburtstag:',
    'LBL_EMAIL_ADDRESS' => 'E-Mail Adresse:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail:',
    'LBL_ANY_EMAIL' => 'Allgemeine E-Mail:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_ASSISTANT_PHONE' => 'Telefonnr. Assistent:',
    'LBL_DO_NOT_CALL' => 'Nicht anrufen:',
    'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
    'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
    'LBL_ALTERNATE_ADDRESS' => 'Weitere Adresse:',
    'LBL_ANY_ADDRESS' => 'Sonstige Adresse:',
    'LBL_CITY' => 'Stadt:',
    'LBL_STATE' => 'Bundesland:',
    'LBL_POSTAL_CODE' => 'PLZ:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_ADDRESS_INFORMATION' => 'Addresse',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_OPP_NAME' => 'Name der Verkaufschance:',
    'LBL_IMPORT_VCARD' => 'VCard importieren',
    'LBL_IMPORT_VCARDTEXT' => 'Durch Import einer vCard aus Ihrem System automatisch einen neuen Kontakt anlegen.',
    'LBL_DUPLICATE' => 'Möglicher doppelter Zielkontakt',
    'MSG_SHOW_DUPLICATES' => 'Dieser Kontakt könnte bereits existieren (Duplikat!). Sie können entweder auf Speichern klicken und den neuen Kontakt  mit den zuvor eingegebenen Daten erstellen oder auf Abbrechen klicken.',
    'MSG_DUPLICATE' => 'Dieser Kontakt könnte bereits existieren (Duplikat!). Sie können entweder einen Kontakt aus der untenstehenden Liste auswählen oder auf Speichern klicken und den neuen Kontakt  mit den zuvor eingegebenen Daten erstellen.',
    'LNK_IMPORT_VCARD' => 'vCard importieren',
    'LNK_NEW_ACCOUNT' => 'Neue Firma',
    'LNK_NEW_OPPORTUNITY' => 'Verkaufschance erstellen',
    'LNK_NEW_CASE' => 'Fall erstellen',
    'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage:',
    'LNK_NEW_CALL' => 'Anruf Log',
    'LNK_NEW_EMAIL' => 'E-Mail archivieren',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_NEW_APPOINTMENT' => 'Termin erstellen',
    'LNK_IMPORT_PROSPECTS' => 'Zielkontakt importieren',
    'NTC_DELETE_CONFIRMATION' => 'Möchten Sie diesen Eintrag wirklich löschen?',
    'NTC_REMOVE_CONFIRMATION' => 'Sind Sich sicher, dass Sie diesen Kontakt von diesem Fall entfernen möchten?',
    'ERR_DELETE_RECORD' => 'Es muss eine Datensatznummer angegeben werden, um diesen Kontakt zu löschen.',
    'LBL_SALUTATION' => 'Anrede',
    'LBL_CREATED_OPPORTUNITY' => 'Neue Verkaufschance erstellt',
    'LNK_SELECT_ACCOUNT' => "Firma auswählen",
    'LNK_NEW_PROSPECT' => 'Zielkontakt erstellen',
    'LNK_PROSPECT_LIST' => 'Zielkontakte anzeigen',
    'LNK_NEW_CAMPAIGN' => 'Neue Kampagne',
    'LNK_CAMPAIGN_LIST' => 'Kampagnen',
    'LNK_NEW_PROSPECT_LIST' => 'Zielkontaktliste erstellen',
    'LNK_PROSPECT_LIST_LIST' => 'Kontaktlisten',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Markierte Zielkontakte auswählen',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Markierte Zielkontakte auswählen',
    'LBL_INVALID_EMAIL' => 'Ungültige E-Mail:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Zielkontakte',
    'LBL_PROSPECT_LIST' => 'Zielkontakteliste',
    'LBL_CONVERT_BUTTON_TITLE' => 'Zielkontakt konvertieren',
    'LBL_CONVERT_BUTTON_LABEL' => 'Zielkontakt konvertieren',
    'LNK_NEW_CONTACT' => 'Neuer Kontakt',
    'LBL_CREATED_CONTACT' => "Neuer Kontakt angelegt",
    'LBL_CAMPAIGNS' => 'Kampagnen',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagnenprotokoll',
    'LBL_TRACKER_KEY' => 'Tracker-Schlüssel',
    'LBL_LEAD_ID' => 'Interessent-ID',
    'LBL_CONVERTED_LEAD' => 'Konvertierter Interessent',
    'LBL_ACCOUNT_NAME' => 'Kunde',
    'LBL_EDIT_ACCOUNT_NAME' => 'Firmenname:',
    'LBL_CREATED_USER' => 'Erstellter Benutzer',
    'LBL_MODIFIED_USER' => 'Geänderter Benutzer',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Veranstaltungen',
);
