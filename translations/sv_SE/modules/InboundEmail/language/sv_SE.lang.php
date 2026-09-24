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

    'ERR_BAD_LOGIN_PASSWORD' => 'Inloggning eller lösenord är felaktigt',
    'ERR_INI_ZLIB' => 'Det gick inte att tillfälligt stänga av Zlib-komprimering. ”Testa inställningar” kan misslyckas.',
    'ERR_NO_IMAP' => 'Inga IMAP-bibliotek hittades. Åtgärda detta innan du fortsätter med inkommande e-post',
    'ERR_NO_OPTS_SAVED' => 'Inga optimala inställningar sparades för ditt konto för inkommande e-post. Kontrollera inställningarna',
    'ERR_TEST_MAILBOX' => 'Kontrollera inställningarna och försök igen.',
    'ERR_INVALID_PORT' => 'Ogiltig port',

    'LBL_ASSIGN_TO_USER' => 'Tilldela till användare',
    'LBL_AUTOREPLY' => 'Mall för autosvar',
    'LBL_AUTOREPLY_HELP' => 'Välj ett automatiskt svar för att meddela e-postavsändare att deras svar har tagits emot.',
    'LBL_BASIC' => 'Information om e-postkonto',
    'LBL_CASE_MACRO' => 'Ärendemakro',
    'LBL_CASE_MACRO_DESC' => 'Ange makrot som tolkas och används för att länka importerad e-post till ett ärende.',
    'LBL_CASE_MACRO_DESC2' => 'Ange valfritt värde, men behåll <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Stäng fönster',
    'LBL_CREATE_TEMPLATE' => 'Skapa',
    'LBL_DELETE_SEEN' => 'Ta bort lästa e-postmeddelanden efter import',
    'LBL_EDIT_TEMPLATE' => 'Redigera',
    'LBL_EMAIL_OPTIONS' => 'Alternativ för e-posthantering',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Alternativ för hantering av studsade e-postmeddelanden',
    'LBL_FILTER_DOMAIN_DESC' => 'Ange en domän som inte ska få några autosvar.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Välj detta för att automatiskt skapa e-postposter i SuiteCRM för alla inkommande e-postmeddelanden.',
    'LBL_FILTER_DOMAIN' => 'Inga autosvar till denna domän',
    'LBL_FIND_SSL_WARN' => '<br>Det kan ta lång tid att testa SSL. Ha tålamod.<br>',
    'LBL_FROM_ADDR' => 'Adress i fältet ”Från”',
    'LBL_FROM_ADDR_DESC' => 'Den e-postadress som anges här kanske inte visas i avsnittet &quot;Från&quot; i det skickade e-postmeddelandet på grund av begränsningar hos e-postleverantören. I så fall används den e-postadress som är angiven på den utgående e-postservern.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Namn i fältet ”Från”',
    'LBL_GROUP_QUEUE' => 'Tilldela till grupp',
    'LBL_HOME' => 'Startsida',
    'LBL_LIST_MAILBOX_TYPE' => 'Användning av e-postkonto',
    'LBL_LIST_NAME' => 'Namn:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Typ',
    'LBL_LIST_SERVER_URL' => 'E-postserver',
    'LBL_SERVER_ADDRESS' => 'Serveradress',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Användarnamn',
    'LBL_USERNAME' => 'Användarnamn',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Använd SSL',
    'LBL_MAILBOX_TYPE' => 'Möjliga åtgärder',
    'LBL_DISTRIBUTION_METHOD' => 'Fördelningsmetod',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Ny mall för automatiskt ärendesvar',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Välj ett automatiskt svar för att meddela e-postavsändare att ett ärende har skapats. E-postmeddelandet innehåller ärendenumret på ämnesraden enligt inställningen för ärendemakro. Svaret skickas endast när det första e-postmeddelandet tas emot från mottagaren.',
    'LBL_MAILBOX' => 'Övervakade mappar',
    'LBL_TRASH_FOLDER' => 'Papperskorgsmapp',
    'LBL_SENT_FOLDER' => 'Skickat-mapp',
    'LBL_SELECT' => 'Välj',
    'LBL_MARK_READ_NO' => 'E-postmeddelandet markeras som borttaget efter import',
    'LBL_MARK_READ_YES' => 'E-postmeddelandet lämnas kvar på servern efter import',
    'LBL_MARK_READ' => 'Lämna meddelanden på servern',
    'LBL_MAX_AUTO_REPLIES' => 'Antal autosvar',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Ange det högsta antal autosvar som ska skickas till en unik e-postadress under en period på 24 timmar.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personligt e-postkonto',
    'LBL_CREATE_CASE' => 'Skapa ärende från e-post',
    'LBL_CREATE_CASE_HELP' => 'Välj detta för att automatiskt skapa ärendeposter i SuiteCRM från inkommande e-postmeddelanden.',
    'LBL_MODULE_NAME' => 'Konton för inkommande e-post',
    'LBL_BOUNCE_MODULE_NAME' => 'Brevlåda för hantering av studsade e-postmeddelanden',
    'LBL_MODULE_TITLE' => 'Konton för inkommande e-post',
    'LBL_NAME' => 'Namn',
    'LBL_NONE' => 'Inga',
    'LBL_ONLY_SINCE_NO' => 'Nej. Kontrollera alla e-postmeddelanden på e-postservern.',
    'LBL_ONLY_SINCE_YES' => 'Ja.',
    'LBL_PASSWORD' => 'Lösenord',
    'LBL_EMAIL_PASSWORD' => 'Lösenord',
    'LBL_POP3_SUCCESS' => 'POP3-testanslutningen lyckades.',
    'LBL_POPUP_TITLE' => 'Testa inställningar',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Välj prenumererade mappar',
    'LBL_SELECT_TRASH_FOLDERS' => 'Välj papperskorgsmapp',
    'LBL_SELECT_SENT_FOLDERS' => 'Välj Skickat-mapp',
    'LBL_DELETED_FOLDERS_LIST' => 'Följande mappar %s finns antingen inte eller har tagits bort från servern',
    'LBL_PORT' => 'E-postserverport',
    'LBL_REPLY_TO_NAME' => 'Namn i fältet ”Svara till”',
    'LBL_REPLY_TO_ADDR' => 'Adress i fältet ”Svara till”',
    'LBL_SAME_AS_ABOVE' => 'Använd namnet/adressen i fältet Från',
    'LBL_SERVER_OPTIONS' => 'Avancerad konfiguration',
    'LBL_SERVER_TYPE' => 'E-postserverprotokoll',
    'LBL_SERVER_PORT' => 'E-postserverport',
    'LBL_SERVER_URL' => 'E-postserveradress',
    'LBL_SSL_DESC' => 'Om e-postservern har stöd för säkra socketanslutningar tvingar aktivering av detta fram SSL-anslutningar vid e-postimport.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Det valda teamet har åtkomst till e-postkontot.',
    'LBL_SSL' => 'Använd SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Filtertyp för e-postmeddelandets brödtext',
    'LBL_SYSTEM_DEFAULT' => 'Systemstandard',
    'LBL_TEST_BUTTON_TITLE' => 'Testa',
    'LBL_TEST_SETTINGS' => 'Testa inställningar',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Testa anslutningsinställningar',
    'LBL_TEST_SUCCESSFUL' => 'Anslutningen upprättades.',
    'LBL_TEST_WAIT_MESSAGE' => 'Ett ögonblick …',
    'LBL_WARN_IMAP_TITLE' => 'Inkommande e-post är inaktiverad',
    'LBL_WARN_IMAP' => 'Varningar:',
    'LBL_WARN_NO_IMAP' => 'Inkommande e-post <b>kan inte</b> fungera utan att IMAP c-client-biblioteken är aktiverade eller kompilerade med PHP-modulen. Kontakta administratören för att lösa problemet.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nytt personligt konto',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nytt gruppkonto',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'Nytt ärendekonto',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nytt konto för hantering av studsade e-postmeddelanden',
    'LNK_LIST_MAILBOXES' => 'Konton för inkommande e-post',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Konton för utgående e-post',
    'LNK_LIST_SCHEDULER' => 'Schemaläggare',
    'LNK_SEED_QUEUES' => 'Skapa köer från team',
    'LBL_GROUPFOLDER_ID' => 'ID för gruppmapp',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Tillåt användare att skicka e-post med namnet och adressen i fältet ”Från” som svarsadress',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'När detta alternativ är valt visas namnet och e-postadressen i fältet Från som är kopplade till gruppens e-postkonto som ett alternativ i fältet Från när användare som har åtkomst till gruppens e-postkonto skriver e-postmeddelanden.',
    'LBL_STATUS_ACTIVE' => 'Aktiv',
    'LBL_STATUS_INACTIVE' => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'Personligt',
    'LBL_IS_GROUP' => 'grupp',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importera e-postmeddelanden automatiskt',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Varning: Du ändrar inställningen för automatisk import, vilket kan leda till dataförlust.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Varning: Automatisk import måste vara aktiverad när ärenden skapas automatiskt.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Utkast',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inkorg',
    'LBL_LIST_TITLE_MY_SENT' => 'Skickade e-postmeddelanden',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arkiverade e-postmeddelanden',
    'LNK_MY_DRAFTS' => 'Utkast',
    'LNK_MY_INBOX' => 'E-post',
    'LNK_VIEW_MY_INBOX' => 'Visa e-post',
    'LNK_QUICK_REPLY' => 'Svara',
    'LNK_SENT_EMAIL_LIST' => 'Skickade e-postmeddelanden',
    'LBL_EDIT_LAYOUT' => 'Redigera layout' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'Typen för extern OAuth-anslutning måste vara SAMMA som typen för kontot för inkommande e-post',

    'LBL_MODIFIED_BY' => 'Ändrad av',
    'LBL_SERVICE' => 'Tjänst',
    'LBL_STORED_OPTIONS' => 'Sparade alternativ',
    'LBL_GROUP_ID' => 'Grupp-ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Konfiguration av utgående e-post',
    'LBL_CONNECTION_CONFIGURATION' => 'Serverkonfiguration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Konfiguration av autosvar',
    'LBL_CASE_CONFIGURATION' => 'Ärendekonfiguration',
    'LBL_GROUP_CONFIGURATION' => 'Gruppkonfiguration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Säkerhetsgrupper',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Konto för utgående e-post',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'ID för konto för utgående e-post',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Konto för utgående e-post',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'E-postmall för autosvar',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'ID för e-postmall för autosvar',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'E-postmall för autosvar',

    'LBL_CASE_EMAIL_TEMPLATE' => 'E-postmall för ärende',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'ID för e-postmall för ärende',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'E-postmall för ärende',

    'LBL_PROTOCOL' => 'Protokoll',
    'LBL_CONNECTION_STRING' => 'Anslutningssträng',
    'LBL_DISTRIB_METHOD' => 'Fördelningsmetod',
    'LBL_DISTRIB_OPTIONS' => 'Fördelningsalternativ',

    'LBL_DISTRIBUTION_USER' => 'Fördelningsanvändare',
    'LBL_DISTRIBUTION_USER_ID' => 'ID för fördelningsanvändare',
    'LBL_DISTRIBUTION_USER_NAME' => 'Fördelningsanvändare',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Extern OAuth-anslutning',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'ID för extern OAuth-anslutning',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Extern OAuth-anslutning',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Externa OAuth-anslutningar',

    'LBL_TYPE' => 'Typ',
    'LBL_AUTH_TYPE' => 'Autentiseringstyp',
    'LBL_IS_DEFAULT' => 'Standard',
    'LBL_SIGNATURE' => 'Signatur',

    'LBL_OWNER_NAME' => 'Ägare',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Ange som standard',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Flytta meddelanden till papperskorgen efter import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Datum/tid för senaste importkörning',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Senast importerade datum per brevlåda',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'E-postmeddelanden att importera per körning',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Start för importperiod',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Importera endast olästa e-postmeddelanden'
);
