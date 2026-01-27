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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Erweitert',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 Währungscode',
    'DEFAULT_CURRENCY_NAME' => 'Währungsname',
    'DEFAULT_CURRENCY_SYMBOL' => 'Währungssymbol',
    'DEFAULT_DATE_FORMAT' => 'Standardformat Datum',
    'DEFAULT_DECIMAL_SEP' => 'Dezimaltrennzeichen',
    'DEFAULT_LANGUAGE' => 'Standardsprache',
    'DEFAULT_SYSTEM_SETTINGS' => 'Benutzeroberfläche',
    'DEFAULT_THEME' => 'Standarddesign',
    'DEFAULT_TIME_FORMAT' => 'Standardformat Zeit',

    'DISPLAY_RESPONSE_TIME' => 'Antwortzeiten des Servers anzeigen',

    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Benutzern erlauben, die Reiter (Tabs) zu verbergen',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Systemeinstellungen',
    'LBL_LOGVIEW' => 'Protokoll anzeigen',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Authentifizierung verwenden?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Passwort:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Benutzername:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Spezifizierung',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Wählen Sie Ihren E-Mail Anbieter:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Passwort:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Passwort:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-Mail Adresse:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Passwort:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Benutzername:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Benutzern erlauben, dieses Konto für ausgehende E-Mails zu verwenden:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Wenn diese Option gewählt wurde, können alle Benutzer E-Mails über dieses für Systembenachrichtigungen eingerichtete Konto senden. Wenn nicht ausgewählt, können Benutzer trotzdem E-Mails über ihre selbst konfigurierten Mail Server versenden.',
    'LBL_MAILMERGE' => 'Serienbrief',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimales Intervall für automatische Dashlet Aktualisierung',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Das ist der kleinste Wert, den Sie wählen können, um Dashlets automatisch zu aktualisieren. Wenn dieser auf "Nie" gesetzt wird, dann ist die automatische Aktualisierung ausgeschaltet."',
    'LBL_MODULE_FAVICON' => 'Modulsymbole als Favicon anzeigen',
    'LBL_MODULE_FAVICON_HELP' => 'Wenn Sie sich in einem Modul befinden, das ein Symbol hat, dann soll dieses Symbol anstelle des allgemeinen SuiteCRM Symbols (favicon) im Browser Reiter angezeigt werden',
    'LBL_MODULE_NAME' => 'Systemeinstellungen',
    'LBL_MODULE_ID' => 'Konfiguration',
    'LBL_MODULE_TITLE' => 'Benutzeroberfläche',
    'LBL_NOTIFY_FROMADDRESS' => '"Von" Adresse:',
    'LBL_NOTIFY_SUBJECT' => 'E-Mail Betreff:',

    'LBL_PROXY_AUTH' => 'Authentifizierung?',
    'LBL_PROXY_HOST' => 'Proxy-Host',
    'LBL_PROXY_ON_DESC' => 'Proxy Server Adresse und Authentifizierungseinstellungen konfigurieren',
    'LBL_PROXY_ON' => 'Proxy Server verwenden',
    'LBL_PROXY_PASSWORD' => 'Kennwort',
    'LBL_PROXY_PORT' => 'Anschluss',
    'LBL_PROXY_TITLE' => 'Proxy Einstellungen',
    'LBL_PROXY_USERNAME' => 'Benutzername',
    'LBL_RESTORE_BUTTON_LABEL' => 'Stellen Sie wieder her',
    'LBL_SYSTEM_SETTINGS' => 'Systemeinstellungen',
    'LBL_USE_REAL_NAMES' => 'Vollständige Namen anzeigen',
    'LBL_USE_REAL_NAMES_DESC' => 'Den vollen Namen in den "zugewiesen an" Feldern anzeigen und nicht den Benutzernamen."',
    'LBL_DISALBE_CONVERT_LEAD' => 'Aktion Interessent umwandeln" für bereits umgewandelte Interessenten deaktivieren"',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Wenn ein Interessent bereits umgewandelt wurde, dann entfernt diese Option die Schaltfläche Interessent umwandeln"."',
    'LBL_ENABLE_ACTION_MENU' => 'Aktionen innerhalb von Menüs darstellen',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Auswählen, um Detailansicht und Subpanel Aktionen in einem Auswahlmenü darzustellen. Wenn nicht ausgewählt, werden diese als separate Schaltflächen dargestellt.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Aktivieren Sie die Inline-Bearbeitung in Listenansicht',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Wählen Sie aktivieren Sie Inline-Bearbeitung für Felder in der Listenansicht. Wenn nicht, ist die Inline-Bearbeitung auf der Listenansicht deaktiviert.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Aktivieren Sie die Inline-Bearbeitung in der Detailansicht',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Wählen Sie dies aus, um die Inline-Bearbeitung für Felder auf der Detail-Ansicht zu ermöglichen. Wenn nicht, wird die Inline-Bearbeitung auf Detailansicht deaktiviert.',
    'LBL_HIDE_SUBPANELS' => 'Zugeklappte Subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listenansicht Anzahl Einträge pro Seite',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanels Anzahl Einträge pro Seite',
    'LOG_MEMORY_USAGE' => 'Speicherverbrauch aufzeichnen',
    'LOG_SLOW_QUERIES' => 'Langsame Abfragen aufzeichnen',
    'CURRENT_LOGO' => 'Aktuelles Logo:',
    'CURRENT_LOGO_HELP' => 'Dieses Logo wird in der Mitte des Anmeldebildschirms der SuiteCRM Anwendung angezeigt.',
    'NEW_LOGO' => 'Logo auswählen:',
    'NEW_LOGO_HELP' => 'Das Bildformat kann entweder .jpg oder .png sein. Die maximale Höhe ist 170px, die maximale Breite beträgt 450px. Ein größeres Bild wird auf eine dieser Dimensionen skaliert.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Das Bildformat kann entweder .jpg oder .png sein. Die maximale Höhe ist 170px, die maximale Breite beträgt 450px. Ein größeres Bild wird auf eine dieser Dimensionen skaliert.',
    'SLOW_QUERY_TIME_MSEC' => 'Grenzwert (in msec) damit eine Abfrage als langsam gilt',
    'STACK_TRACE_ERRORS' => 'Zeige stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maximale Dateigrösse beim Upload',
    'VERIFY_CLIENT_IP' => 'Benutzer IP Adresse validieren',
    'LOCK_HOMEPAGE' => 'Anpassung des Layouts der Startseite durch Benutzer verhindern',
    'LOCK_SUBPANELS' => 'Anpassung der Subpanel Layouts durch Benutzer verhindern',
    'MAX_DASHLETS' => 'Maximale Anzahl von SuiteCRM Dashlets auf Homepage',
    'SYSTEM_NAME' => 'Systemname:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'Das ist der Name, der in der Titelzeile (im Reiter) Ihres Browsers angezeigt wird.',
    'LBL_LDAP_TITLE' => 'LDAP Authentifizierung Support',
    'LBL_LDAP_ENABLE' => 'LDAP aktiveren',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Nummer:',
    'LBL_LDAP_ADMIN_USER' => 'Benutzername:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Dient zur Suche nach dem LDAP-Benutzer. Dies muss möglicherweise umfassend qualifiziert werden.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Kennwort:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentifizierung:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Eine Verbindung zum LDAP-Server aufbauen mit spezifischen Benutzeranmeldeinformationen. Verbindet anonym, wenn keine angegeben werden.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Benutzer automatisch erstellen:',
    'LBL_LDAP_USER_DN' => 'Benutzer-DN:',
    'LBL_LDAP_GROUP_DN' => 'Gruppen DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Beispiel: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Benutzerfilter für:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Gruppenmitgliedschaft:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Benutzer müssen Mitglied einer bestimmten Gruppe sein',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Benutzer Attribut:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Die eindeutige ID einer Person die benutzt wird, um die Gruppenmitgliedschaft festzustellen. Beispiel: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Das Attribut der Gruppe, das benutzt wird, um es mit dem Benutzerattribut zu vergleichen. Beispiel: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Gruppenattribut:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Zusätzlichen Filter Parameter hinzufügen, wenn authentifizerende Benutzer z.B. <em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribut:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribut:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Beispiele für die Anbindung von LDAP-Benutzern: [<b>AD:</b>&nbsp;UserPrincipalName] [<b>OpenLDAP:</b>&nbsp;dn] [<b>Mac OS&nbsp;&nbsp;X:</b>&nbsp;Uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Beispiele für die Suche nach LDAP-Benutzern:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Beispiel: ldap.example.com oder ldaps://ldap.example.com für SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Beispiel: <em>389 oder 636 für SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Gruppenname:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Beispiel <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Beispiel: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Falls ein authentifizierter Benutzer nicht existiert, wird einer in SuiteCRM erstellt.',
    'LBL_LDAP_ENC_KEY' => 'Kodierungsschlüssel:',
    'DEVELOPER_MODE' => 'Entwicklermodus',

    'SHOW_DOWNLOADS_TAB' => 'Herunterladen Reiter anzeigen',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Bei Auswahl wird die Registerkarte "Download" in den Benutzereinstellungen erscheinen und Benutzern den Zugang zu SuiteCRM-Plug-ins und anderen verfügbaren Dateien ermöglichen',
    'LBL_LDAP_ENC_KEY_DESC' => 'Für SOAP Authentifizierung bei Benutzung von LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Die php_mcrypt muss in der php.ini aktiviert sein.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Die OpenSSL-Erweiterung muss in der php.ini-Datei aktiviert werden.',
    'LBL_ALL' => 'Alle',
    'LBL_MARK_POINT' => 'Markierungspunkt',
    'LBL_NEXT_' => 'Weiter>>',
    'LBL_REFRESH_FROM_MARK' => 'Ab Markierung aktualisieren',
    'LBL_SEARCH' => 'Suche:',
    'LBL_REG_EXP' => 'REG Exp:',
    'LBL_IGNORE_SELF' => 'Ignoriere Eigene:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Markieren von wo aus die Protokollierung gestartet wird',
    'LBL_DISPLAYING_LOG' => 'Protokoll anzeigen',
    'LBL_YOUR_PROCESS_ID' => 'Ihre Prozess ID',
    'LBL_YOUR_IP_ADDRESS' => 'Ihre IP-Adresse ist.',
    'LBL_IT_WILL_BE_IGNORED' => ' Es wird ignoriert',
    'LBL_LOG_NOT_CHANGED' => 'Das Protokoll wurde nicht geändert',
    'LBL_ALERT_JPG_IMAGE' => 'Das Dateiformat für das Bild muss JPEG sein. Laden Sie eine neue Datei mit der Endung .jpg hoch.',
    'LBL_ALERT_TYPE_IMAGE' => 'Das Dateiformat für das Bild muss JPEG oder PNG sein. Laden Sie eine neue Datei mit der Endung .jpg oder .png hoch.',
    'LBL_ALERT_SIZE_RATIO' => 'Das Seitenverhältnis des Bildes sollte zwischen 1:1 und 10:1 sein. Das Bild wird skaliert.',
    'ERR_ALERT_FILE_UPLOAD' => 'Fehler während des Hochladens des Bildes.',
    'LBL_LOGGER' => 'Einstellungen für Fehlerprotokoll',
    'LBL_LOGGER_FILENAME' => 'Name der Protokolldatei',
    'LBL_LOGGER_FILE_EXTENSION' => 'Erweiterung',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximale Protokollgröße',
    'LBL_STACK_TRACE' => 'Stack-Trace aktivieren',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Standardformat Datum',
    'LBL_LOGGER_LOG_LEVEL' => 'Log Stufe',
    'LBL_LEAD_CONV_OPTION' => 'Option zum Umwandeln des Interessenten',
    'LEAD_CONV_OPT_HELP' => "<b>Kopieren</b> - Erstellt Kopien aller mit dem Interessenten verbundenen Aktivitäten und weist diese den neuen Datensätzen zu, welche während der Umwandlung ausgewählt wurden. Dabei wird für jeden der ausgewählten Einträge eine Kopie erstellt.<br><br><b>Verschieben</b> - Verschiebt alle mit dem Interessenten verbundenen Aktivitäten zu den neuen Datensätzen, welche während der Umwandlung ausgewählt wurden.<br><br><b>Nichts tun</b> - Die Aktivitäten werden nicht angetastet und verbleiben beim Interessenten.",
    'LBL_CONFIG_AJAX' => 'AJAX Benutzeroberfläche konfigurieren',
    'LBL_CONFIG_AJAX_DESC' => 'Aktivieren oder deaktivieren Sie die AJAX Benutzeroberfläche für bestimmte Module',
    'LBL_LOGGER_MAX_LOGS' => 'Maximale Protokollanzahl (vor Übertrag)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Nach dem Dateinamen anhängen',
    'LBL_VCAL_PERIOD' => 'vCal Aktualisierungszeitraum:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximale Zeilenanzahl:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Geben Sie an, wie viele Zeilen in Importdateien erlaubt sind.<br>Wenn die Zeilenanzahl in einer Importdatei diesen Wert überschreitet, wird der Benutzer gewarnt.<br>Wenn keine Anzahl eingetragen ist, dann gibt es keine Beschränkung.',
    'vCAL_HELP' => 'Mit dieser Einstellung bestimmen Sie die Anzahl der Monate vom heutigen Datum, für den die Frei/Belegt Information für Anrufe und Meetings veröffentlicht werden soll.<BR>Um die Veröffentlichung zu unterbinden, geben Sie0" ein. Minimum ist 1 Monat"',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Ihre Szenarien',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Es wurden keine Szenarien konfiguriert',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Wählen Sie, welche Szenarien für Ihre Installation geeignet sind.  Diese Optionen können nach der Installation geändert werden.',

    'LBL_WIZARD_TITLE' => 'Admin-Assistent',
    'LBL_WIZARD_WELCOME_TAB' => 'Willkommen',
    'LBL_WIZARD_WELCOME_TITLE' => 'Willkommen bei SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klicken Sie auf <b>nächste</b> um Marke, zu lokalisieren und zu SuiteCRM jetzt konfigurieren. Wenn Sie SuiteCRM später konfigurieren möchten, klicken Sie auf <b>überspringen</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Weiter >',
    'LBL_WIZARD_BACK_BUTTON' => '< Zurück',
    'LBL_WIZARD_SKIP_BUTTON' => 'Überspringen',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortfahren',
    'LBL_WIZARD_FINISH_TITLE' => 'Basis-Systemkonfiguration ist abgeschlossen',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Geben Sie den Namen und das Logo Ihrer Organisation ein, um SuiteCRM zu individualisieren',
    'LBL_WIZARD_LOCALE_DESC' => 'Basierend auf Ihrer geografischen Lage können Sie hier festlegen, wie Daten in SuiteCRM angezeigt werden sollen. Die hier festgelegten Einstellungen werden zum Standard, allerdings können sie von Benutzern individuell geändert werden.',
    'LBL_WIZARD_SMTP_DESC' => 'Geben Sie das E-Mail Konto an, das verwendet wird, um Zuweisungen und neue Passwörter zu versenden. Benutzer erhalten dann die betreffenden E-Mails von diesem Konto.',
    'LBL_LOADING' => 'Laden...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Löschen' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Willkommen' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'E-Mails des verknüpften Kontakts im Subpanel Verlauf der Module anzeigen',
);
