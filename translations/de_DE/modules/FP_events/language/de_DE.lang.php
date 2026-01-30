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
    'LBL_ASSIGNED_TO_ID' => 'Zugewiesene Benutzer-ID',
    'LBL_ASSIGNED_TO_NAME' => 'Zugewiesen an',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Erstellt am',
    'LBL_DATE_MODIFIED' => 'Geändert am',
    'LBL_MODIFIED' => 'Geändert von',
    'LBL_MODIFIED_NAME' => 'Geändert von Name',
    'LBL_CREATED' => 'Erstellt von',
    'LBL_DESCRIPTION' => 'Beschreibung',
    'LBL_DELETED' => 'Gelöscht',
    'LBL_NAME' => 'Name',
    'LBL_CREATED_USER' => 'Erstellt von Benutzer',
    'LBL_MODIFIED_USER' => 'Geändert von',
    'LBL_LIST_NAME' => 'Name',
    'LBL_EDIT_BUTTON' => 'Bearbeiten',
    'LBL_REMOVE' => 'Entfernen',
    'LBL_LIST_FORM_TITLE' => 'Ereignisliste',
    'LBL_MODULE_NAME' => 'Ereignis',
    'LBL_MODULE_TITLE' => 'Ereignis',
    'LBL_HOMEPAGE_TITLE' => 'Mein Ereignis',
    'LNK_NEW_RECORD' => 'Neues Ereignis',
    'LNK_LIST' => 'Ereignisse aufrufen',
    'LBL_SEARCH_FORM_TITLE' => 'Ereignisse suchen',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie anzeigen',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivitäten',
    'LBL_NEW_FORM_TITLE' => 'Neues Ereignis',
    'LBL_LOCATION' => 'Ort',
    'LBL_START_DATE' => 'Startdatum',
    'LBL_END_DATE' => 'Enddatum/Zeit',
    'LBL_BUDGET' => 'Budget',
    'LBL_DATE' => 'Startdatum',
    'LBL_DATE_END' => 'Enddatum',
    'LBL_DURATION' => 'Dauer',
    'LBL_INVITE_TEMPLATES' => 'Vorlage E-Mail Einladung',
    'LBL_INVITE_PDF' => 'Einladungen senden',
    'LBL_EDITVIEW_PANEL1' => 'Ereignisdetails',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Teilnehmer',
    'LBL_ACCEPT_REDIRECT' => 'Umleitung der URL akzeptieren',
    'LBL_DECLINE_REDIRECT' => 'Umleitung der URL ablehnen',
    'LBL_SELECT_DELEGATES' => 'Teilnehmer auswählen',
    'LBL_SELECT_DELEGATES_TITLE' => 'Teilnehmer auswählen:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Zielkontaktliste',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Zielkontakte',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Kontakte',
    'LBL_SELECT_DELEGATES_LEADS' => 'Interessenten',
    'LBL_MANAGE_DELEGATES' => 'Teilnehmer verwalten',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Teilnehmer verwalten:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Zusagen verwalten',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Zusagen verwalten:-',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Akzeptiert',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Abegelehnt',
    'LBL_MANAGE_POPUP_ERROR' => 'Es wurden keine Teilnehmer ausgewählt',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Eingeladen',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Nicht eingeladen',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Teilgenommen',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Nicht teilgenommen',
    'LBL_SUCCESS_MSG' => 'Alle Einladungen wurden erfolgreich versandt.',
    'LBL_ERROR_MSG_1' => 'Alle im Zusammenhang stehenden Kontakte wurden bereits eingeladen.',
    'LBL_ERROR_MSG_2' => 'Das Versenden der Einladungs E-Mails ist fehlgeschlagen. Bitte überprüfen Sie Ihre E-Mail Einstellungen.',
    'LBL_ERROR_MSG_3' => 'Mehr als 10 E-Mails konnten nicht gesendet werden. Bitte überprüfen Sie, ob alle eingeladenen Kontakte eine gültige E-Mail-Adresse haben. (Siehe suitecrm.log)',
    'LBL_ERROR_MSG_4' => ' die E-Mails konnten nicht zugestellt werden. Bitte überprüfen Sie die E-Mail Adressen aller eingeladenen Kontakte auf deren Gültigkeit. (Siehe suitecrm.log Fehlerprotokoll)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Ungültige E-Mail Vorlage',
    'LBL_EMAIL_INVITE' => 'E-Mail Einladung',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Kontakte',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Orte',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Interessenten',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Zielkontakte',

    'LBL_HOURS_ABBREV' => 'Std.',
    'LBL_MINSS_ABBREV' => 'min',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Teilnehmer',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Name',
    'LBL_ACCOUNT_NAME' => 'Unternehmen',
    'LBL_SIGNATURE' => 'Signatur',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Eingeladen',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Status',

    'LBL_ACTIVITY_STATUS' => 'Aktivitätsstatus',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Veranstaltungsorte aus dem Veranstaltungstitel',
    // Email links
    'LBL_ACCEPT_LINK' => 'Bestätigen',
    'LBL_DECLINE_LINK' => 'Ablehnen',
    
);
