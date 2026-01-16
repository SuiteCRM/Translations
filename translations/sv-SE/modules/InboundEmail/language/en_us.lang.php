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


    'LBL_RE' => 'SV:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Användarnamn eller lösenord felaktigt',
    'ERR_INI_ZLIB' => 'Kan inte stänga av Zlib-kompression tillfälligt.  "Testinställningar" kan gå fel.',
    'ERR_NO_IMAP' => 'Inga IMAP-bibliotek funna.  Åtgärda detta innan vidare hantering av Inkommande E-post',
    'ERR_NO_OPTS_SAVED' => 'Inga optimala inställningar sparades med din postbox för Inkommande E-post.  Kontrollera inställningarna',
    'ERR_TEST_MAILBOX' => 'Kontrollera dina inställningar och försök igen.',
    'ERR_INVALID_PORT' => 'Ogiltig port',

    'LBL_ASSIGN_TO_USER' => 'Tilldela till användare',
    'LBL_AUTOREPLY' => 'Mall för autosvar',
    'LBL_AUTOREPLY_HELP' => 'Vält ett automatiserat leveranssvar att skickas till epost avsändare.',
    'LBL_BASIC' => 'Grundläggande inställning',
    'LBL_CASE_MACRO' => ' Macro',
    'LBL_CASE_MACRO_DESC' => 'Set the macro which will be parsed and used to link imported email to a Case.',
    'LBL_CASE_MACRO_DESC2' => 'Set this to any value, but preserve the <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Stäng fönster',
    'LBL_CREATE_TEMPLATE' => 'Skapa',
    'LBL_DELETE_SEEN' => 'Ta bort lästa Email efter import',
    'LBL_EDIT_TEMPLATE' => 'Redigera',
    'LBL_EMAIL_OPTIONS' => 'Val för E-posthantering',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Studs hanterings operationer',
    'LBL_FILTER_DOMAIN_DESC' => 'Skicka inte autosvar till denna domän.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => 'Inget autosvar till domän',
    'LBL_FIND_SSL_WARN' => '<br>Test av SSL kan ta lång tid.  Ha tålamod.<br>',
    'LBL_FROM_ADDR' => '"Från" adress',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Från" namn',
    'LBL_GROUP_QUEUE' => 'Tilldela till grupp',
    'LBL_HOME' => 'Hem',
    'LBL_LIST_MAILBOX_TYPE' => 'Postboxanvändning',
    'LBL_LIST_NAME' => 'Namn:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Typ',
    'LBL_LIST_SERVER_URL' => 'E-postserver:',
    'LBL_SERVER_ADDRESS' => 'Serveradress',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Användarnamn',
    'LBL_USERNAME' => 'Användarnamn',
    'LBL_MAILBOX_DEFAULT' => 'INKORGEN',
    'LBL_MAILBOX_SSL' => 'Använd SSL',
    'LBL_MAILBOX_TYPE' => 'Tänkbara åtgärder',
    'LBL_DISTRIBUTION_METHOD' => 'Distrubitions Metod',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Skapa Ärende Svarsmall',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Välj ett automatiserat svar till avsändaren att ett ärende har skapats. Epost meddelandet innehåller ärendenummer i rubrikfältet vilket är kopplat till makrohanteringen för ärenden. Detta svar skickas bara när det första epost meddelandet mottages.',
    'LBL_MAILBOX' => 'Övervakad mapp',
    'LBL_TRASH_FOLDER' => 'Skräp Mapp',
    'LBL_SENT_FOLDER' => 'Skickad Mapp',
    'LBL_SELECT' => 'Markera',
    'LBL_MARK_READ_NO' => 'E-post märkt som borttagen efter import',
    'LBL_MARK_READ_YES' => 'E-post kvarlämnad på servern efter import',
    'LBL_MARK_READ' => 'Lämna kvar meddelanden på servern',
    'LBL_MAX_AUTO_REPLIES' => 'Antal Auto-respons',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Sätt maximalt antal av auto-respons för att sända till en unik e-post adress under en 24 timmars period.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personligt Mail Konto',
    'LBL_CREATE_CASE' => 'Skapa ärende från epost',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'Inbound Email Accounts',
    'LBL_BOUNCE_MODULE_NAME' => 'Brevlåda för studsade epost meddelanden',
    'LBL_MODULE_TITLE' => 'Inbound Email Accounts',
    'LBL_NAME' => 'Namn',
    'LBL_NONE' => 'Ingen',
    'LBL_ONLY_SINCE_NO' => 'Nej. Sök efter all E-post på mailservern.',
    'LBL_ONLY_SINCE_YES' => 'Ja.',
    'LBL_PASSWORD' => 'Lösenord',
    'LBL_EMAIL_PASSWORD' => 'Lösenord',
    'LBL_POP3_SUCCESS' => 'Test av din POP3-förbindelse lyckades.',
    'LBL_POPUP_TITLE' => 'Test inställningar',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Markera Prenumerations Mappar',
    'LBL_SELECT_TRASH_FOLDERS' => 'Markera Skräp Mapp',
    'LBL_SELECT_SENT_FOLDERS' => 'Markera Sänd Mapp',
    'LBL_DELETED_FOLDERS_LIST' => 'Följande mappar %s existera inte alternativ raderats från servern',
    'LBL_PORT' => 'Mail Server Port',
    'LBL_REPLY_TO_NAME' => '"Svara-till" Namn',
    'LBL_REPLY_TO_ADDR' => '"Svara-till" Adress',
    'LBL_SAME_AS_ABOVE' => 'Använd Från Namn/Adress',
    'LBL_SERVER_OPTIONS' => 'Avancerade inställningar',
    'LBL_SERVER_TYPE' => 'Mail Server Protocol',
    'LBL_SERVER_PORT' => 'Mail Server Port',
    'LBL_SERVER_URL' => 'Mail Server Adress',
    'LBL_SSL_DESC' => 'Om din mailserver stöder säker socket anslutningar, aktivering av detta kommer tvinga SSL anslutning vid importering av e-post.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Det valda team/lag har tillgång till mailkonto. Om en gruppmapp markeras, kommer det det team/lag som är tilldelad Gruppmappen att skriva över den valda team/laget.',
    'LBL_SSL' => 'Använd SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Systemdefault',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Test inställningar',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Lyckat genomförande av förbindelse.',
    'LBL_TEST_WAIT_MESSAGE' => 'Ett ögonblick...',
    'LBL_WARN_IMAP_TITLE' => 'Inkommande E-post avstängt',
    'LBL_WARN_IMAP' => 'Varningar:',
    'LBL_WARN_NO_IMAP' => 'Inkommande E-post <b>kan inte</b> fungera utan IMAPs c-client libraries aktiverade/kompilerade tillsammans med PHP-modulen. Kontakta din administratör för att lösa detta.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Utgående e-postkonton',
    'LNK_LIST_SCHEDULER' => 'Schemaläggare',
    'LNK_SEED_QUEUES' => 'Generera köer från team',
    'LBL_GROUPFOLDER_ID' => 'Grupp Mapps ID',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Tillåt användare att skicka epost genom att använda "Från" namnet och adressen som svara till adress.',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'När denna option är vald kommer från namnet och "från epost adress" som är associerad med grupp epost kontot att vara valbar i "Från" fältet när man skapar nya epost meddelanden, (för de användare som har access till grupp epost kontot).',
    'LBL_STATUS_ACTIVE' => 'Aktiv',
    'LBL_STATUS_INACTIVE' => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'Personlig',
    'LBL_IS_GROUP' => 'grupp',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importera epost automatiskt',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Varning: Du har ändrat dina automatiska import inställningar vilket kan resultera i förlust av data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Varning: Automatisk import måste tillåtas om automatiska ärenden ska skapas.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Utkast',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inkorg',
    'LBL_LIST_TITLE_MY_SENT' => 'Skicka E-post',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arkiverad E-post',
    'LNK_MY_DRAFTS' => 'Utkast',
    'LNK_MY_INBOX' => 'E-post',
    'LNK_VIEW_MY_INBOX' => 'Visa e-post',
    'LNK_QUICK_REPLY' => 'Svara',
    'LNK_SENT_EMAIL_LIST' => 'Skickad E-post',
    'LBL_EDIT_LAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Ändrad av',
    'LBL_SERVICE' => 'Tjänst',
    'LBL_STORED_OPTIONS' => 'Lagrade alternativ',
    'LBL_GROUP_ID' => 'Grupp-ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Säkerhetsgrupper',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protokoll',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => 'Distrubitions Metod',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Typ',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Huvudsakligt',
    'LBL_SIGNATURE' => 'Signatur',

    'LBL_OWNER_NAME' => 'Ägare',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
);
