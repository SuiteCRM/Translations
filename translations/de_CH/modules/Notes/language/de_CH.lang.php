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
    'ERR_DELETE_RECORD' => 'Es muß die Datensatznummer angegeben werden, um diesen Datensatz löschen zu können.',
    'LBL_ACCOUNT_ID' => 'Firmen ID:',
    'LBL_CASE_ID' => 'Fall ID:',
    'LBL_CLOSE' => 'Schliessen:',
    'LBL_CONTACT_ID' => 'Kontakt ID:',
    'LBL_CONTACT_NAME' => 'Kontakt:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Notizen',
    'LBL_DESCRIPTION' => 'Notizen',
    'LBL_EMAIL_ADDRESS' => 'E-Mail Adresse:',
    'LBL_EMAIL_ATTACHMENT' => 'E-Mail Anhang',
    'LBL_FILE_MIME_TYPE' => 'Mime-Typ',
    'LBL_FILE_URL' => 'Datei URL',
    'LBL_FILENAME' => 'Anlage:',
    'LBL_LEAD_ID' => 'Anfrage ID:',
    'LBL_LIST_CONTACT_NAME' => 'Kontakte',
    'LBL_LIST_DATE_MODIFIED' => 'Zuletzt bearbeitet am',
    'LBL_LIST_FILENAME' => 'Anlage',
    'LBL_LIST_FORM_TITLE' => 'Notizenliste',
    'LBL_LIST_RELATED_TO' => 'Gehört zu',
    'LBL_LIST_SUBJECT' => 'Betreff',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_CONTACT' => 'Kontakte',
    'LBL_MODULE_NAME' => 'Notizen',
    'LBL_MODULE_TITLE' => 'Notizen: Startseite',
    'LBL_NEW_FORM_TITLE' => 'Neue Notiz oder Anlage:',
    'LBL_NOTE_STATUS' => 'Notizen',
    'LBL_NOTE_SUBJECT' => 'Betreff:',
    'LBL_NOTES_SUBPANEL_TITLE' => 'Anhänge',
    'LBL_NOTE' => 'Hinweis:',
    'LBL_OPPORTUNITY_ID' => 'Verkaufschance ID:',
    'LBL_PARENT_ID' => 'Eltern ID:',
    'LBL_PARENT_TYPE' => 'Eltern-Typ',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_FLAG' => 'Im Portal anzeigen?',
    'LBL_EMBED_FLAG' => 'In E-Mail einfügen?',
    'LBL_PRODUCT_ID' => 'Produkt ID:',
    'LBL_QUOTE_ID' => 'Angebot ID:',
    'LBL_RELATED_TO' => 'Gehört zu:',
    'LBL_SEARCH_FORM_TITLE' => 'Notizen suchen',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Betreff:',
    'LNK_IMPORT_NOTES' => 'Notizen importieren',
    'LNK_NEW_NOTE' => 'Neue Notiz oder Anlage:',
    'LNK_NOTE_LIST' => 'Notizen',
    'LBL_MEMBER_OF' => 'Mitglied von:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesener Benutzer',
    'LBL_REMOVING_ATTACHMENT' => 'Anhang wird entfernt...',
    'ERR_REMOVING_ATTACHMENT' => 'Anhang konnte nicht entfernt werden...',
    'LBL_CREATED_BY' => 'Erstellt von',
    'LBL_MODIFIED_BY' => 'Geändert von',
    'LBL_SEND_ANYWAYS' => 'Diese E-Mail hat keinen Betreff. Trotzdem senden/speichern?',
    'LBL_NOTE_INFORMATION' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MY_NOTES_DASHLETNAME' => 'Meine Notizen',
    'LBL_EDITLAYOUT' => 'Layout bearbeiten' /*for 508 compliance fix*/,
    //For export labels
    'LBL_FIRST_NAME' => 'Vorname',
    'LBL_LAST_NAME' => 'Nachname',
    'LBL_DATE_ENTERED' => 'Datum erstellt',
    'LBL_DATE_MODIFIED' => 'Letzte Änderung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_FILE_CONTENTS' => 'Dateiinhalt',

    'LBL_ASCENDING' => 'Aufsteigend',
    'LBL_DESCENDING' => 'Absteigend',
);
