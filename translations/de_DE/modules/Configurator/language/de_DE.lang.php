<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'ADVANCED' => 'Advanced',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 Währungscode',
    'DEFAULT_CURRENCY_NAME' => 'Währungsname',
    'DEFAULT_CURRENCY_SYMBOL' => 'Währungssymbol',
    'DEFAULT_DATE_FORMAT' => 'Standardformat Datum',
    'DEFAULT_DECIMAL_SEP' => 'Dezimaltrennzeichen',
    'DEFAULT_LANGUAGE' => 'Standardsprache',
    'DEFAULT_SYSTEM_SETTINGS' => 'User Interface',
    'DEFAULT_THEME' => 'Default theme',
    'DEFAULT_TIME_FORMAT' => 'Standardformat Zeit',

    'DISPLAY_RESPONSE_TIME' => 'Antwortzeiten des Servers anzeigen',

    'IMAGES' => 'Logos',
    'LBL_ALLOW_USER_TABS' => 'Benutzern erlauben, die Reiter (Tabs) zu verbergen',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'System Settings',
    'LBL_LOGVIEW' => 'Protokoll anzeigen',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Use SMTP Authentication?',
    'LBL_MAIL_SMTPPASS' => 'SMTP Password:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP Username:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choose your Email provider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Allow users to use this account for outgoing email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'When this option is selected, all users will be able to send emails using the same outgoing mail account used to send system notifications and alerts. If the option is not selected, users can still use the outgoing mail server after providing their own account information.',
    'LBL_MAILMERGE' => 'Mail Merge',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimales Intervall für automatische Dashlet Aktualisierung',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Das ist der kleinste Wert, den Sie wählen können, um Dashlets automatisch zu aktualisieren. Wenn dieser auf "Nie" gesetzt wird, dann ist die automatische Aktualisierung ausgeschaltet."',
    'LBL_MODULE_FAVICON' => 'Modulsymbole als Favicon anzeigen',
    'LBL_MODULE_FAVICON_HELP' => 'Wenn Sie sich in einem Modul befinden, das ein Symbol hat, dann soll dieses Symbol anstelle des allgemeinen SuiteCRM Symbols (favicon) im Browser Reiter angezeigt werden',
    'LBL_MODULE_NAME' => 'System Settings',
    'LBL_MODULE_ID' => 'Konfiguration',
    'LBL_MODULE_TITLE' => 'User Interface',
    'LBL_NOTIFY_FROMADDRESS' => '"Von" Adresse:',
    'LBL_NOTIFY_SUBJECT' => 'Email subject:',

    'LBL_PROXY_AUTH' => 'Authentication?',
    'LBL_PROXY_HOST' => 'Proxy Host',
    'LBL_PROXY_ON_DESC' => 'Proxy Server Adresse und Authentifizierungseinstellungen konfigurieren',
    'LBL_PROXY_ON' => 'Proxy Server verwenden',
    'LBL_PROXY_PASSWORD' => 'Password',
    'LBL_PROXY_PORT' => 'Anschluss',
    'LBL_PROXY_TITLE' => 'Proxy Settings',
    'LBL_PROXY_USERNAME' => 'User Name',
    'LBL_RESTORE_BUTTON_LABEL' => 'Wiederherstellen',
    'LBL_SYSTEM_SETTINGS' => 'System Settings',
    'LBL_USE_REAL_NAMES' => 'Vollständige Namen anzeigen',
    'LBL_USE_REAL_NAMES_DESC' => 'Den vollen Namen in den "zugewiesen an" Feldern anzeigen und nicht den Benutzernamen."',
    'LBL_DISALBE_CONVERT_LEAD' => 'Aktion Interessent umwandeln" für bereits umgewandelte Interessenten deaktivieren"',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Wenn ein Interessent bereits umgewandelt wurde, dann entfernt diese Option die Schaltfläche Interessent umwandeln"."',
    'LBL_ENABLE_ACTION_MENU' => 'Aktionen innerhalb von Menüs darstellen',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Auswählen, um Detailansicht und Subpanel Aktionen in einem Auswahlmenü darzustellen. Wenn nicht ausgewählt, werden diese als separate Schaltflächen dargestellt.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Erlauben Sie die Inline-Bearbeitung in der Listenansicht',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Auswählen um die Inline-Bearbeitung für Felder in der Listenansicht zu ermöglichen. Ansonsten ist eine Bearbeitung in der Listenansicht nicht möglich.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Erlauben Sie die Inline-Bearbeitung in der Detailansicht',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Auswählen um die Inline-Bearbeitung für Felder in der Detailansicht zu ermöglichen. Andernfalls ist eine Bearbeitung in der Detailansicht nicht möglich.',
    'LBL_HIDE_SUBPANELS' => 'Zugeklappte Subpanels',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listenansicht Anzahl Einträge pro Seite',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Subpanels Anzahl Einträge pro Seite',
    'LOG_MEMORY_USAGE' => 'Speicherverbrauch aufzeichnen',
    'LOG_SLOW_QUERIES' => 'Langsame Abfragen aufzeichnen',
    'CURRENT_LOGO' => 'Current Logo:',
    'CURRENT_LOGO_HELP' => 'Dieses Logo wird in der Mitte des Anmeldebildschirms der SuiteCRM Anwendung angezeigt.',
    'NEW_LOGO' => 'Select Logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'NEW_LOGO_HELP_NO_SPACE' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'SLOW_QUERY_TIME_MSEC' => 'Grenzwert (in msec) damit eine Abfrage als langsam gilt',
    'STACK_TRACE_ERRORS' => 'Zeige stack trace of errors',
    'UPLOAD_MAX_SIZE' => 'Maximale Dateigröße beim Hochladen',
    'VERIFY_CLIENT_IP' => 'Benutzer IP Adresse validieren',
    'LOCK_HOMEPAGE' => 'Anpassung des Layouts der Startseite durch Benutzer verhindern',
    'LOCK_SUBPANELS' => 'Anpassung der Subpanel Layouts durch Benutzer verhindern',
    'MAX_DASHLETS' => 'Maximale Anzahl der Dashlets auf der SuiteCRM Startseite',
    'SYSTEM_NAME' => 'Systemname:',
    'SYSTEM_NAME_WIZARD' => 'Name:',
    'SYSTEM_NAME_HELP' => 'This is the name that displays in the title bar of your browser.',
    'LBL_LDAP_TITLE' => 'LDAP Authentifizierung Support',
    'LBL_LDAP_ENABLE' => 'LDAP aktiveren',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Server:',
    'LBL_LDAP_SERVER_PORT' => 'Port Number:',
    'LBL_LDAP_ADMIN_USER' => 'User Name:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Dient zur Suche nach dem LDAP-Benutzer. Dies muss möglicherweise umfassend qualifiziert werden.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Password:',
    'LBL_LDAP_AUTHENTICATION' => 'Authentication:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Eine Verbindung zum LDAP-Server aufbauen mit spezifischen Benutzeranmeldeinformationen. Verbindet anonym, wenn keine angegeben werden.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Auto Create Users:',
    'LBL_LDAP_USER_DN' => 'User DN:',
    'LBL_LDAP_GROUP_DN' => 'Group DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Example: <em>ou=groups,dc=example,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'User Filter:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Group Membership:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Users must be a member of a specific group',
    'LBL_LDAP_GROUP_USER_ATTR' => 'User Attribute:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'The unique identifier of the person that will be used to check if they are a member of the group Example: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'The attribute of the Group that will be used to filter against the User Attribute Example: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Group Attribute:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Zusätzliche Filterparameter die angewendet werden, um Benutzer zu authentifizieren - z.B..<em>is_sugar_user=1 or (is_sugar_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bind Attribute:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'Beispiele für die Anbindung von LDAP-Benutzern: [<b>AD:</b>&nbsp;UserPrincipalName] [<b>OpenLDAP:</b>&nbsp;dn] [<b>Mac OS&nbsp;&nbsp;X:</b>&nbsp;Uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'Beispiele für die Suche nach LDAP-Benutzern:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Beispiel:l dap.example.com oder ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Beispiel: <em>389 oder 636 für SSL</em>',
    'LBL_LDAP_GROUP_NAME' => 'Group Name:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Beispiel <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Beispiel: <em>ou=people,dc=example,dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'If an authenticated user does not exist, one will be created in SuiteCRM.',
    'LBL_LDAP_ENC_KEY' => 'Encryption Key:',
    'DEVELOPER_MODE' => 'Entwicklermodus',

    'SHOW_DOWNLOADS_TAB' => 'Herunterladen Reiter anzeigen',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Bei Auswahl wird die Registerkarte "Download" in den Benutzereinstellungen erscheinen und Benutzern den Zugang zu SuiteCRM-Plug-ins und anderen verfügbaren Dateien ermöglichen',
    'LBL_LDAP_ENC_KEY_DESC' => 'Für SOAP Authentifizierung bei Benutzung von LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'Die php_mcrypt muss in der php.ini aktiviert sein.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Die OpenSSL-Erweiterung muss in der php.ini-Datei aktiviert werden.',
    'LBL_ALL' => 'All',
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
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Default date format',
    'LBL_LOGGER_LOG_LEVEL' => 'Log Stufe',
    'LBL_LEAD_CONV_OPTION' => 'Option zum Umwandeln des Interessenten',
    'LEAD_CONV_OPT_HELP' => "<b>Kopieren</b> - Erstellt Kopien aller mit dem Interessenten verbundenen Aktivitäten und weist diese den neuen Datensätzen zu, welche während der Umwandlung ausgewählt wurden. Dabei wird für jeden der ausgewählten Einträge eine Kopie erstellt.<br><br><b>Verschieben</b> - Verschiebt alle mit dem Interessenten verbundenen Aktivitäten zu den neuen Datensätzen, welche während der Umwandlung ausgewählt wurden.<br><br><b>Nichts tun</b> - Die Aktivitäten werden nicht angetastet und verbleiben beim Interessenten.",
    'LBL_CONFIG_AJAX' => 'Configure AJAX User Interface',
    'LBL_CONFIG_AJAX_DESC' => 'Aktivieren oder deaktivieren Sie die AJAX Benutzeroberfläche für bestimmte Module',
    'LBL_LOGGER_MAX_LOGS' => 'Maximale Protokollanzahl (vor Übertrag)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Nach dem Dateinamen anhängen',
    'LBL_VCAL_PERIOD' => 'vCal Aktualisierungszeitraum:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - Maximale Zeilenanzahl:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Geben Sie an, wie viele Zeilen in Importdateien erlaubt sind.<br>Wenn die Zeilenanzahl in einer Importdatei diesen Wert überschreitet, wird der Benutzer gewarnt.<br>Wenn keine Anzahl eingetragen ist, dann gibt es keine Beschränkung.',
    'vCAL_HELP' => 'Mit dieser Einstellung bestimmen Sie die Anzahl der Monate ab dem heutigen Datum, für welche die Frei/Belegt-Information für Anrufe und Meetings veröffentlicht werden sollen.<BR>Um die Veröffentlichung zu unterbinden, geben Sie "0" ein. Minimum ist 1 Monat, Maximum sind 12 Monate.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Ihre Szenarien',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Keine Verfahren wurden konfiguriert',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Wählen Sie ein geeignetes Verfahren für Ihre Installation.  Diese Optionen können geändert werden nach der Installation.',

    'LBL_WIZARD_TITLE' => 'Admin-Assistent',
    'LBL_WIZARD_WELCOME_TAB' => 'Welcome',
    'LBL_WIZARD_WELCOME_TITLE' => 'Willkommen bei SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Klicken Sie auf <b>nächste</b> um Marke, zu lokalisieren und zu SuiteCRM jetzt konfigurieren. Wenn Sie SuiteCRM später konfigurieren möchten, klicken Sie auf <b>überspringen</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Weiter >',
    'LBL_WIZARD_BACK_BUTTON' => '< Zurück',
    'LBL_WIZARD_SKIP_BUTTON' => 'Skip',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Fortfahren',
    'LBL_WIZARD_FINISH_TITLE' => 'Basis-Systemkonfiguration ist abgeschlossen',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_LOADING' => 'Lade...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Löschen' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Welcome' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'E-Mails des verknüpften Kontakts im Subpanel Verlauf der Module anzeigen',
);
