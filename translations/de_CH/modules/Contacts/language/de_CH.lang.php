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
    'ERR_DELETE_RECORD' => 'Geben Sie die Nummer des Eintrags an, um den Kontakt zu löschen!',
    'LBL_ACCOUNT_ID' => 'Firmen ID:',
    'LBL_ACCOUNT_NAME' => 'Firmenname:',
    'LBL_CAMPAIGN' => 'Kampagne:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_ADDRESS_INFORMATION' => 'Addresse',
    'LBL_ALT_ADDRESS_CITY' => '2. Adresse Stadt:',
    'LBL_ALT_ADDRESS_COUNTRY' => '2. Adresse Land:',
    'LBL_ALT_ADDRESS_POSTALCODE' => '2. Adresse PLZ:',
    'LBL_ALT_ADDRESS_STATE' => '2. Adresse Bundesland:',
    'LBL_ALT_ADDRESS_STREET_2' => '2. Adresse Strasse 2:',
    'LBL_ALT_ADDRESS_STREET_3' => '2. Adresse Strasse 3:',
    'LBL_ALT_ADDRESS_STREET' => '2. Adresse Strasse:',
    'LBL_ALTERNATE_ADDRESS' => 'Weitere Adresse:',
    'LBL_ALT_ADDRESS' => 'Weitere Adresse:',
    'LBL_ANY_ADDRESS' => 'Sonstige Adresse:',
    'LBL_ANY_EMAIL' => 'Allgemeine E-Mail:',
    'LBL_ANY_PHONE' => 'Telefonzentrale:',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an:',
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesener Benutzer',
    'LBL_ASSISTANT_PHONE' => 'Telefonnr. Assistent:',
    'LBL_ASSISTANT' => 'Assistent:',
    'LBL_BIRTHDATE' => 'Geburtstag:',
    'LBL_CITY' => 'Stadt:',
    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_CONTACT_INFORMATION' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Ansprechpartner:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Kontakt mit Verkaufschance:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACT' => 'Kontakt:',
    'LBL_COUNTRY' => 'Land:',
    'LBL_CREATED_ACCOUNT' => 'Neue Firma erstellt',
    'LBL_CREATED_CALL' => 'Neuer Anruf erstellt',
    'LBL_CREATED_CONTACT' => 'Neuer Kontakt angelegt',
    'LBL_CREATED_MEETING' => 'Neues Meeting angelegt',
    'LBL_CREATED_OPPORTUNITY' => 'Neue Verkaufschance erstellt',
    'LBL_DATE_MODIFIED' => 'Letzte Änderung:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_DEPARTMENT' => 'Abteilung:',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direkte Berichte',
    'LBL_DO_NOT_CALL' => 'Nicht anrufen:',
    'LBL_DUPLICATE' => 'Mögliche doppelte Kontakte',
    'LBL_EMAIL_ADDRESS' => 'E-Mail Adresse:',
    'LBL_EMAIL_OPT_OUT' => 'Keine E-Mails senden:',
    'LBL_EXISTING_ACCOUNT' => 'Bestehende Firma ausgewählt',
    'LBL_EXISTING_CONTACT' => 'Bestehender Kontakt ausgewählt',
    'LBL_EXISTING_OPPORTUNITY' => 'Bestehende Verkaufschance benutzt',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Vorname:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_HOME_PHONE' => 'Privat:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'VCard importieren',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Durch Import einer vCard aus Ihrem System automatisch einen neuen Kontakt anlegen.',
    'LBL_INVALID_EMAIL' => 'Ungültige E-Mail:',
    'LBL_INVITEE' => 'Direkte Berichte',
    'LBL_LAST_NAME' => 'Nachname:',
    'LBL_LEAD_SOURCE' => 'Adressquelle:',
    'LBL_LIST_ACCEPT_STATUS' => 'Status akzeptieren',
    'LBL_LIST_ACCOUNT_NAME' => 'Kunde',
    'LBL_LIST_CONTACT_NAME' => 'Kontaktname',
    'LBL_LIST_CONTACT_ROLE' => 'Rolle',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-Mail',
    'LBL_LIST_FIRST_NAME' => 'Vorname',
    'LBL_LIST_FORM_TITLE' => 'Kontaktliste',
    'LBL_LIST_LAST_NAME' => 'Nachname',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Telefon Arbeit',
    'LBL_LIST_TITLE' => 'Stellenbezeichnung',
    'LBL_MOBILE_PHONE' => 'Telefon Mobil:',
    'LBL_MODIFIED' => 'Geändert von:',
    'LBL_MODULE_NAME' => 'Kontakte',
    'LBL_MODULE_TITLE' => 'Kontakte: Startseite',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Neuer Kontakt',
    'LBL_NOTE_SUBJECT' => 'Betreff Notiz',
    'LBL_OFFICE_PHONE' => 'Bürotelefon:',
    'LBL_OPP_NAME' => 'Name der Verkaufschance:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Rollen ID der Verkaufschance:',
    'LBL_OPPORTUNITY_ROLE' => 'Rolle der Verkaufschance ',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Weitere E-Mail:',
    'LBL_OTHER_PHONE' => 'Weiteres Telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portalanwendung:',
    'LBL_PORTAL_INFORMATION' => 'Portalinformation',
    'LBL_PORTAL_NAME' => 'Portalname:',
    'LBL_STREET' => 'Strasse',
    'LBL_POSTAL_CODE' => 'PLZ:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Hauptadresse Stadt:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Hauptadresse Land:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Hauptadresse PLZ:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Hauptadresse Bundesland:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Hauptadresse Strasse 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Hauptadresse Strasse 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Hauptadresse Straße:',
    'LBL_PRIMARY_ADDRESS' => 'Hauptadresse:',
    'LBL_PRODUCTS_TITLE' => 'Produkte',
    'LBL_REPORTS_TO_ID' => 'Berichtet an ID:',
    'LBL_REPORTS_TO' => 'Berichtet an:',
    'LBL_RESOURCE_NAME' => 'Ressourcenname',
    'LBL_SALUTATION' => 'Anrede:',
    'LBL_SAVE_CONTACT' => 'Kontakt speichern',
    'LBL_SEARCH_FORM_TITLE' => 'Kontakte suchen',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Markierte Kontakte auswählen',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Markierte Kontakte auswählen',
    'LBL_STATE' => 'Bundesland:',
    'LBL_SYNC_CONTACT' => 'Sync mit Outlook®:"',
    'LBL_PROSPECT_LIST' => 'Zielkontakteliste',
    'LBL_TITLE' => 'Stellenbezeichnung:',
    'LNK_CONTACT_LIST' => 'Kontaktliste',
    'LNK_IMPORT_VCARD' => 'Kontakt aus vCard erstellen',
    'LNK_NEW_ACCOUNT' => 'Neue Firma',
    'LNK_NEW_APPOINTMENT' => 'Termin erstellen',
    'LNK_NEW_CALL' => 'Anruf Log',
    'LNK_NEW_CASE' => 'Fall erstellen',
    'LNK_NEW_CONTACT' => 'Kontakt erstellen',
    'LNK_NEW_EMAIL' => 'E-Mail archivieren',
    'LNK_NEW_MEETING' => 'Neues Meeting',
    'LNK_NEW_NOTE' => 'Hinweis erstellen',
    'LNK_NEW_OPPORTUNITY' => 'Verkaufschance erstellen',
    'LNK_NEW_TASK' => 'Aufgabe erstellen',
    'LNK_SELECT_ACCOUNT' => "Firma auswählen",
    'NTC_DELETE_CONFIRMATION' => 'Möchten Sie diesen Eintrag wirklich löschen?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Zum Erstellen einer Verkaufschance benötigen Sie eine Firma.\n Bitte erstellen Sie eine Firma oder wählen Sie eine bestehende aus.',
    'NTC_REMOVE_CONFIRMATION' => 'Sind Sich sicher, dass Sie diesen Kontakt von diesem Fall entfernen möchten?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Interessenten',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Verkaufschancen',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumente',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Als primäre Adresse kopieren',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Als andere Adresse kopieren',

    'LBL_CASES_SUBPANEL_TITLE' => 'Fälle',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fehler',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',
    'LBL_PROJECTS_RESOURCES' => 'Projektressourcen',
    'LBL_CAMPAIGNS' => 'Kampagnen',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampagnen',
    'LBL_LIST_CITY' => 'Stadt',
    'LBL_LIST_STATE' => 'Kanton',
    'LBL_HOMEPAGE_TITLE' => 'Meine Kontakte',
    'LBL_OPPORTUNITIES' => 'Verkaufschancen',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
    'LNK_IMPORT_CONTACTS' => 'Kontakte importieren',

    // SNIP
    'LBL_USER_SYNC' => 'Benutzersynchronisation',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Veranstaltungen',

    'LBL_AOP_CASE_UPDATES' => 'Fall Updates',
    'LBL_CREATE_PORTAL_USER' => 'Portal Benutzer erstellen',
    'LBL_ENABLE_PORTAL_USER' => 'Portal Benutzer aktivieren',
    'LBL_DISABLE_PORTAL_USER' => 'Portal Benutzer deaktivieren',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Konnte keinen Portal Benutzer erstellen',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Erstellen von Portal Benutzer fehlgeschlagen',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Deaktivieren von Portal Benutzer fehlgeschlagen',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portal Benutzer erstellt',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portal Benutzer aktiviert',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portal Benutzer deaktiviert',
    'LBL_NO_JOOMLA_URL' => 'Keine URL für Portal definiert',
    'LBL_PORTAL_USER_TYPE' => 'Portal User-Typ',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Konto ist deaktiviert',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla-Konto-ID',

    'LBL_AOS_CONTRACTS' => 'Verträge',
    'LBL_AOS_INVOICES' => 'Rechnungen',
    'LBL_AOS_QUOTES' => 'Angebote',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Projekt Kontakte aus Projekttitel',

    'LBL_LIST_INVITE_STATUS' => 'Einladungs Status',
);
