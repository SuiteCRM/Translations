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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Login ili lozinka neispravna',
    'ERR_INI_ZLIB' => 'Ne može se privremeno isključiti Zlib kompresiju.  "Test postavke" moža ne uspiju.',
    'ERR_NO_IMAP' => 'Nisu pronađeni IMAP libraries. Molim rješite ovo prije nastavka sa dolaznom e-poštom.',
    'ERR_NO_OPTS_SAVED' => 'No optimums were saved with your Inbound Email account. Please review the settings',
    'ERR_TEST_MAILBOX' => 'Molim provjerite vaše postavke i pokušajte ponovo.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Dodijeli korisniku',
    'LBL_AUTOREPLY' => 'Predložak automatskog odgovora',
    'LBL_AUTOREPLY_HELP' => 'Odaberite automatski odgovor kako bi obavijestili pošiljatelje e-pošte da je njihov odgovor zaprimljen.',
    'LBL_BASIC' => 'Mail Account Information',
    'LBL_CASE_MACRO' => 'Case Macro',
    'LBL_CASE_MACRO_DESC' => 'Set the macro which will be parsed and used to link imported email to a Case.',
    'LBL_CASE_MACRO_DESC2' => 'Postavite ovo na bilo koju vrijednost, ali sačuvajte <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Zatvori prozor',
    'LBL_CREATE_TEMPLATE' => 'Kreiraj',
    'LBL_DELETE_SEEN' => 'Izbriši pročitanu e-poštu nakon uvoza',
    'LBL_EDIT_TEMPLATE' => 'Uredi',
    'LBL_EMAIL_OPTIONS' => 'Opcije rukovanja e-poštom',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounce Handling Options',
    'LBL_FILTER_DOMAIN_DESC' => 'Specify a domain to which no auto-replies will be sent.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => 'No Auto-Reply to this Domain',
    'LBL_FIND_SSL_WARN' => '<br>Testiranje SSL može potrajati dugo.  Molim za strpljenje.<br>',
    'LBL_FROM_ADDR' => '"Od" adresa',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Od" ime',
    'LBL_GROUP_QUEUE' => 'Dodijeli grupi',
    'LBL_HOME' => 'Početno',
    'LBL_LIST_MAILBOX_TYPE' => 'Mail Account Usage',
    'LBL_LIST_NAME' => 'Naziv:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tip',
    'LBL_LIST_SERVER_URL' => 'Server e-pošte',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Korisničko ime',
    'LBL_USERNAME' => 'Korisničko ime',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Koristi SSL',
    'LBL_MAILBOX_TYPE' => 'Moguće radnje',
    'LBL_DISTRIBUTION_METHOD' => 'Metoda raspodjele',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'New Case Auto-Reply Template',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting. This response is only sent when the first email is received from the recipient.',
    'LBL_MAILBOX' => 'Praćene mape',
    'LBL_TRASH_FOLDER' => 'Mapa za smeće',
    'LBL_SENT_FOLDER' => 'Mapa slanja',
    'LBL_SELECT' => 'Odaberi',
    'LBL_MARK_READ_NO' => 'E-pošta označena za brisanje nakon uvoza',
    'LBL_MARK_READ_YES' => 'E-pošta ostavljena na serveru nakon uvoza',
    'LBL_MARK_READ' => 'Ostavi poruke na serveru',
    'LBL_MAX_AUTO_REPLIES' => 'Broj automatskih odgovora',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Postavlja maksimalni broj automatskih odgovora za slati jedinstvenu e-poštu tijekom perioda od 24 sata.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personal Mail Account',
    'LBL_CREATE_CASE' => 'Kreiraj slučaj iz e-pošte',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Bounce Handling Mailbox',
    'LBL_MODULE_TITLE' => 'Dolazna e-pošta',
    'LBL_NAME' => 'Ime',
    'LBL_NONE' => 'Nijedan',
    'LBL_ONLY_SINCE_NO' => 'No. Check against all emails on mail server.',
    'LBL_ONLY_SINCE_YES' => 'Da.',
    'LBL_PASSWORD' => 'Lozinka',
    'LBL_EMAIL_PASSWORD' => 'Lozinka',
    'LBL_POP3_SUCCESS' => 'Vaša POP3 testna veza je uspješna.',
    'LBL_POPUP_TITLE' => 'Testiraj postavke',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Odaberite predbilježenu mapu(e)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Odaberite mapu za smeće',
    'LBL_SELECT_SENT_FOLDERS' => 'Odaberite mapu slanja',
    'LBL_DELETED_FOLDERS_LIST' => 'The following folder(s) %s either does not exist or has been deleted from server',
    'LBL_PORT' => 'Port servera e-pošte',
    'LBL_REPLY_TO_NAME' => '"Odgovori prema" Ime',
    'LBL_REPLY_TO_ADDR' => '"Odgovori prema" Adresa',
    'LBL_SAME_AS_ABOVE' => 'Using From Name/Address',
    'LBL_SERVER_OPTIONS' => 'Napredno postavljanje',
    'LBL_SERVER_TYPE' => 'Protokol servera e-pošte',
    'LBL_SERVER_PORT' => 'Port servera e-pošte',
    'LBL_SERVER_URL' => 'Adresa servera e-pošte',
    'LBL_SSL_DESC' => 'If your mail server supports secure socket connections, enabling this will force SSL connections when importing email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'The selected team has access to the mail account.',
    'LBL_SSL' => 'Koristi SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'System Default',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Testiraj postavke',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Spajanje uspješno izvršeno.',
    'LBL_TEST_WAIT_MESSAGE' => 'Trenutak molim...',
    'LBL_WARN_IMAP_TITLE' => 'Dolazna e-pošta onemogućena',
    'LBL_WARN_IMAP' => 'Upozorenja:',
    'LBL_WARN_NO_IMAP' => 'Inbound Email <b>cannot</b> function without the IMAP c-client libraries enabled/compiled with the PHP module. Please contact your administrator to resolve this issue.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Izlazni računi e-pošte',
    'LNK_LIST_SCHEDULER' => 'Rasporedi',
    'LNK_SEED_QUEUES' => 'Seed Queues From Teams',
    'LBL_GROUPFOLDER_ID' => 'Id grupne mape',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Allow users to send emails using the "From" Name and Address as the reply to address',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'When this option is selected, the From Name and From Email Address associated with this group mail account will appear as an option for the From field when composing emails for users that have access to the group mail account.',
    'LBL_STATUS_ACTIVE' => 'Aktivan',
    'LBL_STATUS_INACTIVE' => 'neaktivan',
    'LBL_IS_PERSONAL' => 'Osobno',
    'LBL_IS_GROUP' => 'grupa',
    'LBL_ENABLE_AUTO_IMPORT' => 'Uvezite e-poštu automatski',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Upozorenje: Mijenjate postavke Vašeg automatskoh uvoza što može rezultirati gubitkom podataka.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Upozorenje: Automatski uvoz mora biti omogućen kada se automatski kreiraju slučajevi',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Poslana e-pošta',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arhivirane e-pošte',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'e-pošta',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Odgovori',
    'LNK_SENT_EMAIL_LIST' => 'Poslane e-pošte',
    'LBL_EDIT_LAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Izmijenio:',
    'LBL_SERVICE' => 'Usluga',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sigurnosne Grupe',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => 'Metoda raspodjele',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Tip',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Zadano',
    'LBL_SIGNATURE' => 'Potpis',

    'LBL_OWNER_NAME' => 'Vlasnik',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
