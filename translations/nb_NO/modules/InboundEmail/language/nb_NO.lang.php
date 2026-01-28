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

    'ERR_BAD_LOGIN_PASSWORD' => 'Ugyldig brukernavn eller passord.',
    'ERR_INI_ZLIB' => 'Kan ikke slå av Zlib-komprimering midlertidig. "Test-innstillinger" kan feile.',
    'ERR_NO_IMAP' => 'Fant ingen IMAP-biblioteker. Løs dette problemet før du fortsetter med Innkommet e-post.',
    'ERR_NO_OPTS_SAVED' => 'Ingen optimums ble lagret med din Innkommet e-post-konto. Kontrollér innstillingene.',
    'ERR_TEST_MAILBOX' => 'Kontrollér innstillingene og prøv igjen.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Tildel bruker',
    'LBL_AUTOREPLY' => 'Mal for automatisk svar',
    'LBL_AUTOREPLY_HELP' => 'Velg et automatisk svar for å varsle e-post avsendere at deres svar er mottatt.',
    'LBL_BASIC' => 'Grunnoppsett',
    'LBL_CASE_MACRO' => 'Saksmakro',
    'LBL_CASE_MACRO_DESC' => 'Sett makroen slik at den analyserer syntaktisk og kan brukes til å lenke importere e-postmeldinger til en Sak.',
    'LBL_CASE_MACRO_DESC2' => 'Sett denne til en hvilken som helst verdi, men behold <b>"%1"</b>. ',
    'LBL_CLOSE_POPUP' => 'Lukk vindu',
    'LBL_CREATE_TEMPLATE' => 'Ny',
    'LBL_DELETE_SEEN' => 'Slett leste e-postmeldinger etter import',
    'LBL_EDIT_TEMPLATE' => 'Rediger',
    'LBL_EMAIL_OPTIONS' => 'Innstillinger for e-post-håndtering',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounce håndtering alternativer',
    'LBL_FILTER_DOMAIN_DESC' => 'Ikke send auto-svar til dette domenet.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Velg for å automatisk opprette e-postoppføringer i SuiteCRM for alle innkommende e-poster.',
    'LBL_FILTER_DOMAIN' => 'Intet auto-svar til domene',
    'LBL_FIND_SSL_WARN' => '<br>Test av SSL kan ta lang tid. Vennligst vær tålmodig.<br>',
    'LBL_FROM_ADDR' => '"Fra"-adresse',
    'LBL_FROM_ADDR_DESC' => 'Det kan hende denne at e-postadressen ikke vises i "Fra"-feltet i den sendte e-posten på grunn av restriksjoner fra e-posttjeneren sin side. I disse tilfellene vil e-postadressen definert i innstillingene for utgående e-post bli brukt.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Fra"-navn',
    'LBL_GROUP_QUEUE' => 'Tildel til gruppe',
    'LBL_HOME' => 'Forside',
    'LBL_LIST_MAILBOX_TYPE' => 'Bruk av e-postkonto',
    'LBL_LIST_NAME' => 'Navn:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type',
    'LBL_LIST_SERVER_URL' => 'E-postserver:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Brukernavn',
    'LBL_USERNAME' => 'Brukernavn',
    'LBL_MAILBOX_DEFAULT' => 'innboks',
    'LBL_MAILBOX_SSL' => 'Anvend SSL',
    'LBL_MAILBOX_TYPE' => 'Mulige handlinger',
    'LBL_DISTRIBUTION_METHOD' => 'Distribusjonsmetode',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Opprett svar-mal til saker',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Velg et automatisk svar for å varsle e-post avsendere at en sak har blitt opprettet. E-posten inneholder saksnummer i emnelinjen i henhold til Case Macro innstillingen. Dette svaret sendes bare når den første e-posten er mottatt.',
    'LBL_MAILBOX' => 'Overvåket mappe',
    'LBL_TRASH_FOLDER' => 'Søppelkasse',
    'LBL_SENT_FOLDER' => 'Sendte mapper',
    'LBL_SELECT' => 'Velg',
    'LBL_MARK_READ_NO' => 'E-postmeldinger som ble markert etter import',
    'LBL_MARK_READ_YES' => 'E-postmeldinger som ble igjen på serveren etter import',
    'LBL_MARK_READ' => 'Forlat meldinger på serveren',
    'LBL_MAX_AUTO_REPLIES' => 'Antall auto-svar',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Bestem høyeste antall auto-svar som kan sendes til en enkelt e-postadresse i løpet av et døgn.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personlig e-postkonto',
    'LBL_CREATE_CASE' => 'Opprett sak fra e-post',
    'LBL_CREATE_CASE_HELP' => 'Velg for å automatisk opprette Saksoppføringer i SuiteCRM fra innkommende e-poster.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Postkasse for handtering av Bounce',
    'LBL_MODULE_TITLE' => 'Innkommende e-post',
    'LBL_NAME' => 'Navn',
    'LBL_NONE' => 'Ingen',
    'LBL_ONLY_SINCE_NO' => 'Nei. Kan ikke sjekke henimot alle e-postmeldinger på serveren.',
    'LBL_ONLY_SINCE_YES' => 'Ja.',
    'LBL_PASSWORD' => 'Passord',
    'LBL_EMAIL_PASSWORD' => 'Passord',
    'LBL_POP3_SUCCESS' => 'Testtilkoblingen til POP3 var vellykket.',
    'LBL_POPUP_TITLE' => 'Testinnstillinger',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Velg Subscribed mappe(r)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Velg søppelkassen',
    'LBL_SELECT_SENT_FOLDERS' => 'Velg sendt mappe',
    'LBL_DELETED_FOLDERS_LIST' => 'Den følgende mappen(e) eksisterer ikke, eller har blitt slettet fra serveren.',
    'LBL_PORT' => 'Serverport for e-post',
    'LBL_REPLY_TO_NAME' => '"Svar til" navn',
    'LBL_REPLY_TO_ADDR' => '"Svar til" adresse',
    'LBL_SAME_AS_ABOVE' => 'Bruker fra navn/adresse',
    'LBL_SERVER_OPTIONS' => 'Avanserte innstillinger',
    'LBL_SERVER_TYPE' => 'Protokoll for e-postserver',
    'LBL_SERVER_PORT' => 'Serverport for e-post',
    'LBL_SERVER_URL' => 'Adresse til e-postserver',
    'LBL_SSL_DESC' => 'Hvis din e-postserver støtter sikre holdertilkoblinger, vil denne muliggjøringen av dette tvinge frem SSL-tilkoblinger ved import av e-post.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Den valgte gruppa har tilgang til e-postkontoen. Hvis en gruppemappe er valgt, vil gruppen knytta til gruppemappen overstyre den valgte gruppa.',
    'LBL_SSL' => 'Anvend SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Forhåndsinnstillinger for system',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Testinnstillinger',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Tilkoblingen ble opprettet med godt resultat.',
    'LBL_TEST_WAIT_MESSAGE' => 'Et øyeblikk...',
    'LBL_WARN_IMAP_TITLE' => 'Innkommende e-post er koblet ut',
    'LBL_WARN_IMAP' => 'Advarsler:',
    'LBL_WARN_NO_IMAP' => 'Inkommende e-post <b>kan ikke</b> fungere uten at IMAP c-klient-biblioteketet er satt i stand og kompilert med PHP-modulen. Vennligst kontakt din administrator for å løse dette problemet.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Utgående e-postkontoer',
    'LNK_LIST_SCHEDULER' => 'Planleggere',
    'LNK_SEED_QUEUES' => 'Ta køer fra gruppene',
    'LBL_GROUPFOLDER_ID' => 'Gruppemappe-ID',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Tillat brukere å sende e-postmeldinger med "Fra" navn og adresse som svaradresse.',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Velges dette alternativet vil Fra Navn og Fra E-postadressen tilknyttet denne gruppens mail konto vises som et alternativ i Fra-feltet når brukere som har tilgang til denne e-postkontoen skriver e-postmeldinger.',
    'LBL_STATUS_ACTIVE' => 'Aktiv',
    'LBL_STATUS_INACTIVE' => 'Inaktiv',
    'LBL_IS_PERSONAL' => 'Personlig',
    'LBL_IS_GROUP' => 'gruppe',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importer e-post automatisk',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Advarsel: Du endrer automatisk import innstilling som kan resultere i tap av data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Advarsel: Auto import må være aktivert ved automatisk oppretting av saker.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sendt e-post',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arkivert e-post',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'E-post',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Svar',
    'LNK_SENT_EMAIL_LIST' => 'Sendt e-post',
    'LBL_EDIT_LAYOUT' => 'Rediger oppsett' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Endret av',
    'LBL_SERVICE' => 'Tjeneste',
    'LBL_STORED_OPTIONS' => 'Lagrede alternativer',
    'LBL_GROUP_ID' => 'Gruppe-ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sikkerhetsgrupper',


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
    'LBL_DISTRIB_METHOD' => 'Distribusjonsmetode',
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

    'LBL_OWNER_NAME' => 'Eier',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
