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

    'ERR_BAD_LOGIN_PASSWORD' => 'Brugernavn eller adgangskode er forkert',
    'ERR_INI_ZLIB' => '"Zlib-komprimeringen kunne ikke slukkes midlertidigt. ""Testindstillinger"" kan fejle."',
    'ERR_NO_IMAP' => 'Ingen IMAP-biblioteker blev fundet. Løs dette problem, før du fortsætter med Indgående e-mail',
    'ERR_NO_OPTS_SAVED' => 'Ingen optimale blev gemt med din konto Indgående e-mail. Gennemgå indstillingerne.',
    'ERR_TEST_MAILBOX' => 'Kontrollér dine indstillinger, og prøv igen.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Tildel til bruger',
    'LBL_AUTOREPLY' => 'Skabelon til automatiske svar',
    'LBL_AUTOREPLY_HELP' => 'Vælg et automatisk svar for at give e-mail-afsendere besked om, at deres svar er modtaget.',
    'LBL_BASIC' => 'Oplysninger om e-mail-konto',
    'LBL_CASE_MACRO' => 'Sagsmakro',
    'LBL_CASE_MACRO_DESC' => 'Indstil den makro, der skal analyseres og bruges til at oprette link til importeret e-mail til en sag.',
    'LBL_CASE_MACRO_DESC2' => '"Angiv dette til en værdi, men bevar <b>""%1""</b>."',
    'LBL_CLOSE_POPUP' => 'Luk vindue',
    'LBL_CREATE_TEMPLATE' => 'Opret',
    'LBL_DELETE_SEEN' => 'Slet læste e-mails efter import',
    'LBL_EDIT_TEMPLATE' => 'Rediger',
    'LBL_EMAIL_OPTIONS' => 'Indstillinger for e-mail-håndtering',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Indstillinger for afvisningshåndtering',
    'LBL_FILTER_DOMAIN_DESC' => 'Undlad at sende automatiske svar til dette domæne.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => 'Ingen automatiske svar til dette domæne',
    'LBL_FIND_SSL_WARN' => '<br>Test af SSL kan tage lang tid. Vær tålmodig.<br>',
    'LBL_FROM_ADDR' => '"Fra" adresse',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Fra" navn',
    'LBL_GROUP_QUEUE' => 'Tildel til gruppe',
    'LBL_HOME' => 'Hjem',
    'LBL_LIST_MAILBOX_TYPE' => 'Brug af e-mail-konto',
    'LBL_LIST_NAME' => 'Navn:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type',
    'LBL_LIST_SERVER_URL' => 'E-mail-server:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Brugernavn',
    'LBL_USERNAME' => 'Brugernavn',
    'LBL_MAILBOX_DEFAULT' => 'innboks',
    'LBL_MAILBOX_SSL' => 'Anvend SSL',
    'LBL_MAILBOX_TYPE' => 'Mulige handlinger',
    'LBL_DISTRIBUTION_METHOD' => 'Distributionsmetode',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Skabelon til automatiske svar på ny sag',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Vælg et automatisk svar for at give e-mail-afsendere besked om, at en sag er oprettet. E-mailen indeholder sagsnummeret i emnelinjen, hvilket er i overensstemmelse med indstillingen Sagsmakro. Dette svar sendes først, når den første e-mail er modtaget fra modtageren.',
    'LBL_MAILBOX' => 'Overvågede mapper',
    'LBL_TRASH_FOLDER' => 'Mappen Papirkurv',
    'LBL_SENT_FOLDER' => 'Mappen Sendt',
    'LBL_SELECT' => 'Vælg',
    'LBL_MARK_READ_NO' => 'E-mail markeret som slettet efter import',
    'LBL_MARK_READ_YES' => 'E-mail tilbage på serveren efter import',
    'LBL_MARK_READ' => 'Lad meddelelser forblive på serveren',
    'LBL_MAX_AUTO_REPLIES' => 'Antal automatiske svar',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Angiv det maksimale antal automatiske svar, der skal sendes til en entydig e-mail-adresse i løbet af 24 timer.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personlig e-mail-konto',
    'LBL_CREATE_CASE' => 'Opret sag fra e-mail',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Postkasse til afvisningshåndtering',
    'LBL_MODULE_TITLE' => 'Indgående email',
    'LBL_NAME' => 'Navn',
    'LBL_NONE' => 'Ingen',
    'LBL_ONLY_SINCE_NO' => 'Nej. Kontrollér i forhold til alle e-mails på e-mail-serveren.',
    'LBL_ONLY_SINCE_YES' => 'Ja',
    'LBL_PASSWORD' => 'Adgangskode',
    'LBL_EMAIL_PASSWORD' => 'Adgangskode',
    'LBL_POP3_SUCCESS' => 'Din POP3-testforbindelse virkede.',
    'LBL_POPUP_TITLE' => 'Testindstillinger',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Vælg abonnerede mapper',
    'LBL_SELECT_TRASH_FOLDERS' => 'Vælg mappen Papirkurv',
    'LBL_SELECT_SENT_FOLDERS' => 'Vælg mappen Sendt',
    'LBL_DELETED_FOLDERS_LIST' => 'Følgende mapper %s findes enten ikke eller er blevet slettet fra serveren',
    'LBL_PORT' => 'Serverport for e-post',
    'LBL_REPLY_TO_NAME' => '"Besvar-til" navn',
    'LBL_REPLY_TO_ADDR' => '"Besvar-til" adresse',
    'LBL_SAME_AS_ABOVE' => 'Bruger fra navn/adresse',
    'LBL_SERVER_OPTIONS' => 'Avanceret konfiguration',
    'LBL_SERVER_TYPE' => 'Protokoll for e-postserver',
    'LBL_SERVER_PORT' => 'Serverport for e-post',
    'LBL_SERVER_URL' => 'Adresse til e-postserver',
    'LBL_SSL_DESC' => 'Hvis din e-postserver støtter sikre holdertilkoblinger, vil denne muliggjøringen av dette tvinge frem SSL-tilkoblinger ved import av e-post.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Det valgte team har adgang til e-mail-kontoen.',
    'LBL_SSL' => 'Anvend SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Systemstandard',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Testindstillinger',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Forbindelsen blev oprettet.',
    'LBL_TEST_WAIT_MESSAGE' => 'Et øjeblik...',
    'LBL_WARN_IMAP_TITLE' => 'Indgående e-mail deaktiveret',
    'LBL_WARN_IMAP' => 'Advarsler!',
    'LBL_WARN_NO_IMAP' => 'Indgående e-mail <b>kan ikke</b> fungere, uden at IMAP c-client-biblioteker er aktiveret/kompileret med PHP-modulet. Kontakt administratoren for at løse problemet.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_SCHEDULER' => 'Planlæggere',
    'LNK_SEED_QUEUES' => 'Startkøer fra team',
    'LBL_GROUPFOLDER_ID' => 'Gruppemappe-id',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Tillad brugere at sende e-mails ved at anvende "fra" navn og adresse som svar-adressen',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Når denne mulighed er valgt, vil Fra navnet og Fra email adressen tilknyttet denne gruppe mail konto vises som mulighed i Fra felter ved oprettelse af emails fra brugere som har adgang til gruppe mail kontoen.',
    'LBL_STATUS_ACTIVE' => 'Aktiv',
    'LBL_STATUS_INACTIVE' => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'Personlig',
    'LBL_IS_GROUP' => 'gruppe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importér e-mails automatisk',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Advarsel: Du er i færd med at redigere indstillingen for automatisk import, hvilket kan resultere i tab af data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Advarsel: Automatisk import skal aktiveres, når sager oprettes automatisk.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Kladder',
    'LBL_LIST_TITLE_MY_INBOX' => 'Indbakke',
    'LBL_LIST_TITLE_MY_SENT' => 'Sent Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arkiverede emails',
    'LNK_MY_DRAFTS' => 'Kladder',
    'LNK_MY_INBOX' => 'Emails',
    'LNK_VIEW_MY_INBOX' => 'Vis e-mails',
    'LNK_QUICK_REPLY' => 'Besvar',
    'LNK_SENT_EMAIL_LIST' => 'Sendte emails',
    'LBL_EDIT_LAYOUT' => 'Rediger layout' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Ændret af',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sikkerhedsgrupper',


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
    'LBL_DISTRIB_METHOD' => 'Distributionsmetode',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Type',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Standard',
    'LBL_SIGNATURE' => 'Signatur',

    'LBL_OWNER_NAME' => 'Ejer',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
