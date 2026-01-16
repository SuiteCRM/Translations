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
    'LBL_TOOL_TIP_BOX_TITLE' => 'Wissensdatenbank-Vorschläge',
    'LBL_TOOL_TIP_TITLE' => 'Titel:',
    'LBL_TOOL_TIP_BODY' => 'Text: ',
    'LBL_TOOL_TIP_INFO' => 'Zusatzinfo: ',
    'LBL_TOOL_TIP_USE' => 'Verwenden Sie als: ',
    'LBL_SUGGESTION_BOX' => 'Vorschläge',
    'LBL_NO_SUGGESTIONS' => 'Keine Vorschäge',
    'LBL_RESOLUTION_BUTTON' => 'Lösung',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titel',
    'LBL_SUGGESTION_BOX_REL' => 'Relevanz',

    'LBL_ACCOUNT_ID' => 'Firma ID',
    'LBL_ACCOUNT_NAME' => 'Firmenname:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Firmen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Fehler',
    'LBL_CASE_NUMBER' => 'Fallnummer:',
    'LBL_CASE' => 'Fall:',
    'LBL_CONTACT_NAME' => 'Ansprechpartner:',
    'LBL_CONTACT_ROLE' => 'Rolle:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontakte',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Fälle',
    'LBL_DESCRIPTION' => 'Beschreibung:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Verlauf',
    'LBL_INVITEE' => 'Kontakte',
    'LBL_MEMBER_OF' => 'Firmen',
    'LBL_MODULE_NAME' => 'Fälle',
    'LBL_MODULE_TITLE' => 'Fälle: Startseite',
    'LBL_NEW_FORM_TITLE' => 'Neue Anfrage',
    'LBL_NUMBER' => 'Nummer:',
    'LBL_PRIORITY' => 'Priorität:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projekte',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Dokumente',
    'LBL_RESOLUTION' => 'Lösung:',
    'LBL_SEARCH_FORM_TITLE' => 'Fälle suchen',
    'LBL_STATUS' => 'Status',
    'LBL_SUBJECT' => 'Betreff:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Zugewiesener Benutzer',
    'LBL_LIST_ACCOUNT_NAME' => 'Kunde',
    'LBL_LIST_ASSIGNED' => 'Zugewiesen an',
    'LBL_LIST_CLOSE' => 'Schliessen',
    'LBL_LIST_FORM_TITLE' => 'Fälle Liste',
    'LBL_LIST_LAST_MODIFIED' => 'Zuletzt bearbeitet am',
    'LBL_LIST_MY_CASES' => 'Meine offenen Fälle',
    'LBL_LIST_NUMBER' => 'Nr.',
    'LBL_LIST_PRIORITY' => 'Priorität',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Betreff',

    'LNK_CASE_LIST' => 'Fälle anzeigen',
    'LNK_NEW_CASE' => 'Fall erstellen',
    'LBL_LIST_DATE_CREATED' => 'Datum erstellt',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_TYPE' => 'Typ',
    'LBL_WORK_LOG' => 'Arbeitsprotokoll',
    'LNK_IMPORT_CASES' => 'Fälle importieren',

    'LBL_CREATED_USER' => 'Erstellter Benutzer',
    'LBL_MODIFIED_USER' => 'Geänderter Benutzer',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projekte',
    'LBL_CASE_INFORMATION' => 'Firmeninformation', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Aktualisieren von Text', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internes Update',
    'LBL_AOP_CASE_UPDATES' => 'Fall Updates',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Konversationen zu Fall Aktualisierungen',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Alle zuklappen',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Alle ausklappen',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Anlagen:',

    'LBL_AOP_CASE_EVENTS' => 'Fall Ereignisse',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Fall-Anhänge',
    'LBL_ADD_CASE_FILE' => 'Datei hinzufügen',
    'LBL_REMOVE_CASE_FILE' => 'Entferne Datei',
    'LBL_SELECT_CASE_DOCUMENT' => 'Dokument auswählen',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Dokument leeren',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Internes CRM-Dokument',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Externe Datei',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Erstellt von Kontakt',
    'LBL_CONTACT_CREATED_BY' => 'Erstellt von',
    'LBL_CASE_UPDATE_FORM' => 'Anhang-Formular aktualisieren', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Unbekannter Kontakt',
);
