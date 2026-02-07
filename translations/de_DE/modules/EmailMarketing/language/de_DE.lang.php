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
    'LBL_REPLY_ADDR' => '"Antwort-an" Adresse:',
    'LBL_REPLY_NAME' => '"Antwort-an" Name:',

    'LBL_MODULE_NAME' => 'E-Mail Marketing',
    'LBL_MODULE_TITLE' => 'E-Mail Marketing: Home',
    'LBL_LIST_FORM_TITLE' => 'E-Mail Marketing Kampagnen',
    'LBL_NAME' => 'Name',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_FROM_ADDR' => 'Von E-Mail',
    'LBL_LIST_DATE_START' => 'Startdatum',
    'LBL_LIST_TEMPLATE_NAME' => 'E-Mail Vorlage',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status',
    'LBL_TEMPLATE_NAME' => 'Vorlagenname',
    'LBL_DATE_ENTERED' => 'Erstellungsdatum',
    'LBL_DATE_MODIFIED' => 'Änderungsdatum',
    'LBL_MODIFIED' => 'Geändert von:',
    'LBL_CREATED' => 'Erstellt von:',
    'LBL_MESSAGE_FOR' => 'Diese Nachricht senden an:',

    'LBL_FROM_NAME' => 'Von Name:',
    'LBL_FROM_ADDR' => 'Von E-Mail Adresse:',
    'LBL_DATE_START' => 'Startdatum',
    'LBL_SEND_DATE' => 'Sendungsdatum',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Startzeit',
    'LBL_START_DATE_TIME' => 'Startdatum und -zeit:',
    'LBL_TEMPLATE' => 'E-Mail Vorlage:',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Geändert von:',
    'LBL_CREATED_BY' => 'Erstellt von:',

    'LNK_NEW_CAMPAIGN' => 'Neue Kampagne',
    'LNK_CAMPAIGN_LIST' => 'Kampagnen',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Zielkontaktliste erstellen',
    'LNK_PROSPECT_LIST_LIST' => 'Zielkontaktlisten',
    'LNK_NEW_PROSPECT' => 'Zielkontakt erstellen',
    'LNK_PROSPECT_LIST' => 'Zielkontakte',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-Mail Marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Neu',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Bearbeiten',
    'LBL_FROM_MAILBOX' => 'Von Mailbox',
    'LBL_FROM_MAILBOX_NAME' => 'Mailbox benutzen:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'E-Mail-Konten zum Senden:',
    'LBL_FROM' => 'Von',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Zielkontaktlisten',
    'LBL_ALL_PROSPECT_LISTS' => 'Alle Kontaktlisten in der Kampagne.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Alle Kontaktlisten für diese Mitteilung.',
    'LBL_PROSPECT_LIST_NAME' => 'Name Zielkontaktliste',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Zielgerichtete Listen',
    'LBL_MODULE_SEND_TEST' => 'Kampagne: Test senden',
    'LBL_MODULE_SEND_EMAILS' => 'Kampagne: Sende E-Mails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Bitte wählen Sie die Kampagnen Nachricht die Sie testen möchten:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Bitte wählen Sie die Kampagnen Nachricht aus, die für die Versendung am angegebenem Datum und Uhrzeit planen möchten:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Senden',
    'LBL_SEND_BUTTON_LABEL' => 'Senden',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Planen',
    'LBL_ERROR_ON_MARKETING' => 'Erforderliche Felder fehlen',

    'LBL_CAMPAIGN_ID' => 'Kampagne ID',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'E-Mail Konto für ausgehenden Kontakt',
    'LBL_EMAIL_TEMPLATE' => 'E-Mail Vorlage',
    'LBL_PROSPECT_LISTS' => 'Interessentenliste',
    'LBL_OVERVIEW' => 'Einfach',
    'LBL_EMAIL_CONFIG' => 'E-Mail Einstellungen',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'E-Mail',
    'LBL_BODY' => 'Text',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Umfrage',
    'LBL_SCHEDULE' => 'Planen',
    'LBL_DELETE_TEST_ENTRIES' => 'Testeinträge löschen',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Benutzer',
    'LBL_SEND_TEST_EMAIL' => 'Test E-Mail senden',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Nachrichten Warteschlange',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Unzustellbare Kampagnen E-Mails verarbeiten (Nacht)',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Geplante Aufgaben',
    'LBL_INBOUND_EMAIL' => 'Eingehende E-Mail',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
