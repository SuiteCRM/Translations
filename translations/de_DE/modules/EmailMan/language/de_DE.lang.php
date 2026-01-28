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
    'LBL_SEND_DATE_TIME' => 'Sendungsdatum',
    'LBL_IN_QUEUE' => 'In Arbeit',
    'LBL_IN_QUEUE_DATE' => 'Datum Warteschlange',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Nur Ganzzahlwerte zulässig für E-Mail Anzahl pro Stapel',

    'LBL_ATTACHMENT_AUDIT' => 'wurde gesendet. Um Speicher zu sparen, wurde keine lokale Kopie erstellt.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfigurieren der E-Mail-Einstellungen',
    'LBL_CUSTOM_LOCATION' => 'Benutzerdefiniert',
    'LBL_DEFAULT_LOCATION' => 'Standard',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Verknüpfte Notizen und Anhänge mit den E-Mails löschen',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'E-Mail-Warnbenachrichtigungen',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Opt-In-Einstellungen',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Opt-in E-Mail automatisch senden',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Bestätigen Sie die Opt-In E-Mail Vorlage',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Aktivieren Sie das Verhalten beim Verfassen älterer E-Mails',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Ausgehende E-Mail Einstellungen',
    'LBL_EMAILS_PER_RUN' => 'Anzahl gesendeter Mails pro Durchlauf:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Kampagne',
    'LBL_LIST_FORM_TITLE' => 'Warteschlange',
    'LBL_LIST_FROM_NAME' => 'Von Name',
    'LBL_LIST_IN_QUEUE' => 'In Arbeit',
    'LBL_LIST_MESSAGE_NAME' => 'Marketing Nachricht',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Empfänger E-Mail',
    'LBL_LIST_RECIPIENT_NAME' => 'Empfänger Name',
    'LBL_LIST_SEND_ATTEMPTS' => 'Sendungsversuche',
    'LBL_LIST_SEND_DATE_TIME' => 'Senden Ein',
    'LBL_LIST_USER_NAME' => 'Benutzername',
    'LBL_LOCATION_ONLY' => 'Ort',
    'LBL_LOCATION_TRACK' => 'Speicherort der Kampagnentracking-Dateien (z.B. campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Kopien der Kampagnen Nachrichten behalten:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Wollen Sie den kompletten Text <bold>JEDER</bold> gesendeten E-Mail für alle Kampagnen speichern? <bold>Wir empfehlen dies nicht zu tun (ist Standard)</bold>. Auf diese Art werden nur die Vorlage und die notwendigen Parameter gespeichert, um die individuelle Nachricht wiederherstellen zu können.',
    'LBL_MAIL_SENDTYPE' => 'E-Mail Transfer Agent:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Authentifizierung verwenden:',
    'LBL_MAIL_SMTPPASS' => 'Kennwort:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP-Server:',
    'LBL_MAIL_SMTPUSER' => 'Benutzername:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wählen Sie Ihren E-Mail Anbieter',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Passwort:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Passwort',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-Mail Adresse',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Passwort',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Benutzername',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
    'LBL_EMAIL_LINK_TYPE' => 'E-Mail Kunde',
    'LBL_MARKETING_ID' => 'Marketing ID',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'E-Mail Einstellungen',
    'LBL_MODULE_TITLE' => 'Verwaltung der Warteschlange ausgehender E-Mails',
    'LBL_NOTIFICATION_ON_DESC' => 'Bei Aktivierung werden E-Mails an Benutzer versandt, wenn diesen Daten zugewiesen sind.',
    'LBL_NOTIFY_FROMADDRESS' => '"Von" Adresse:',
    'LBL_NOTIFY_FROMNAME' => '"Von" Name:',
    'LBL_NOTIFY_ON' => 'Benachrichtigung über Zuweisung',
    'LBL_NOTIFY_TITLE' => 'E-Mail Optionen',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Ausgehende E-Mail Optionen',
    'LBL_RELATED_ID' => 'Verknüpfte ID',
    'LBL_RELATED_TYPE' => 'Verknüpfter Typ',
    'LBL_SEARCH_FORM_TITLE' => 'Warteschlange suchen',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Wert von site_url in config.php',
    'TXT_REMOVE_ME_ALT' => 'Um sich von der E-Mail Liste abzumelden, gehen Sie zu',
    'TXT_REMOVE_ME_CLICK' => 'hier klicken',
    'TXT_REMOVE_ME' => 'Um sich von der E-Mail Liste abzumelden',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Benachrichtigung von E-Mail-Adresse des zuweisenden Benutzers senden',

    'LBL_SECURITY_TITLE' => 'E-Mail Sicherheitseinstellungen',
    'LBL_SECURITY_DESC' => 'Wählen Sie, was bei eingehenden E-Mails NICHT erlaubt bzw. im E-Mail Modul angezeigt werden soll.',
    'LBL_SECURITY_APPLET' => 'Applet Tag',
    'LBL_SECURITY_BASE' => 'Base Tag',
    'LBL_SECURITY_EMBED' => 'Embed Tag',
    'LBL_SECURITY_FORM' => 'Form Tag',
    'LBL_SECURITY_FRAME' => 'Frame Tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset Tag',
    'LBL_SECURITY_IFRAME' => 'iFrame Tag',
    'LBL_SECURITY_IMPORT' => 'Import Tag',
    'LBL_SECURITY_LAYER' => 'Layer Tag',
    'LBL_SECURITY_LINK' => 'Link Tag',
    'LBL_SECURITY_OBJECT' => 'Objekt Tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Wählen Sie den Wert ‚minimale Sicherheitseinstellungen‘ in Outlook ',
    'LBL_SECURITY_STYLE' => 'Stil Tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Alle Optionen umschalten',
    'LBL_SECURITY_XMP' => 'Xmp Tag',
    'LBL_YES' => 'Ja',
    'LBL_NO' => 'Nein',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Sendungsversuche',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurieren Sie den Standard Mail Server (SMTP) zum Senden von E-Mail und/oder Workflow Benachrichtigungen.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Benutzer können unter der Identität dieses Kontos senden:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Wenn diese Option gewählt wurde, können alle Benutzer E-Mails über dieses <br> E-Mail-Konto senden, das für Systembenachrichtigungen eingerichtet wurde. Wenn diese Option nicht ausgewählt ist,<br> können Benutzer trotzdem E-Mails über ihre selbst konfigurierten Mail Server versenden, nachdem sie ihre Kontoinformationen bereitgestellt haben.',
    'LBL_FROM_ADDRESS_HELP' => 'Wenn aktiviert, wird der Name und die E-Mail Adresse des zuweisenden Benutzers im Von Feld der E-Mail angezeigt. Allerdings kann es sein, dass diese Einstellung keine Wirkung hat, wenn der SMTP Server keine Von Adressen zulässt, die von der Server Adresse abweichen.',
    'LBL_HELP' => 'Hilfe' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Ausgehende e-Mail-Konten ansehen',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Benutzer können unter der eigenen Identität senden:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Wenn diese Option aktiviert ist, können <b>alle</b> Benutzer E-Mail mit dem Postausgangsserver und der eigenen E-Mail-Adresse als &quot;Von:&quot; Adresse versenden.<br>Diese Funktion funktioniert möglicherweise nicht mit SMTP-Servern, bei denen es nicht erlaubt ist von einem anderen E-Mail-Konto als dem Server-Konto senden.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
