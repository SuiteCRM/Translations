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


    'LBL_RE' => 'VS:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Väärä käyttäjätunnus tai salasana',
    'ERR_INI_ZLIB' => 'Zlib pakkauksen väliaikainen sammuttaminen ei onnistunut.  "Testaa asetukset" voi epäonnistua.',
    'ERR_NO_IMAP' => 'Ei löydetty IMAP kirjastoja.  Ole hyvä ja ratkaise ongelma ennen jatkamista',
    'ERR_NO_OPTS_SAVED' => 'Saapuvien postien tilin optimaalisia asetuksia ei tallennettu.  Ole hyvä ja tarkasta asetukset',
    'ERR_TEST_MAILBOX' => 'Tarkasta asetukset ja yriä uudelleen.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Kohdenna käyttäjälle',
    'LBL_AUTOREPLY' => 'Automaattisen vastaukset mallipohja',
    'LBL_AUTOREPLY_HELP' => 'Valitse automaattiviesti, jolla ilmoitetaan viestien lähettäjille vastaanotetusta viestistä.',
    'LBL_BASIC' => 'Postitilin tiedot',
    'LBL_CASE_MACRO' => 'Palvelupyyntö makro',
    'LBL_CASE_MACRO_DESC' => 'Aseta makro, joka parseroi linkin viestin ja palvelupyynnön välille.',
    'LBL_CASE_MACRO_DESC2' => 'Aseta tämän arvo vapaasti, mutta säilytä <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Sulje ikkuna',
    'LBL_CREATE_TEMPLATE' => 'Luo',
    'LBL_DELETE_SEEN' => 'Poista luetut viestit tuonnin jälkeen',
    'LBL_EDIT_TEMPLATE' => 'Muokkaa',
    'LBL_EMAIL_OPTIONS' => 'Sähköpostien käsittelyn asetukset',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Palautuneiden viestien käsittelyn asetukset',
    'LBL_FILTER_DOMAIN_DESC' => 'Specify a domain to which no auto-replies will be sent.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => 'No Auto-Reply to this Domain',
    'LBL_FIND_SSL_WARN' => '<br>Testing SSL may take a long time. Please be patient.<br>',
    'LBL_FROM_ADDR' => '"Lähettäjä" osoite',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Lähettäjä" Nimi',
    'LBL_GROUP_QUEUE' => 'Kohdenna ryhmälle',
    'LBL_HOME' => 'Etusivu',
    'LBL_LIST_MAILBOX_TYPE' => 'Postitilin käyttö',
    'LBL_LIST_NAME' => 'Nimi:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tyyppi',
    'LBL_LIST_SERVER_URL' => 'Postipalvelin',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Tila',
    'LBL_LOGIN' => 'Käyttäjänimi',
    'LBL_USERNAME' => 'Käyttäjänimi',
    'LBL_MAILBOX_DEFAULT' => 'SAAPUNEET',
    'LBL_MAILBOX_SSL' => 'Käytä SSL-salausta',
    'LBL_MAILBOX_TYPE' => 'Mahdolliset toiminnot',
    'LBL_DISTRIBUTION_METHOD' => 'Distribution Method',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Uusi Palvelupyyntö Auto-Reply -malli',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting. This response is only sent when the first email is received from the recipient.',
    'LBL_MAILBOX' => 'Tarkkaillut kansiot',
    'LBL_TRASH_FOLDER' => 'Roskakori kansio',
    'LBL_SENT_FOLDER' => 'Lähetetyt kansio',
    'LBL_SELECT' => 'Valitse',
    'LBL_MARK_READ_NO' => 'Sähköposti merkitty poistetuksi tuonnin jälkeen',
    'LBL_MARK_READ_YES' => 'Sähköposti jätetty palvelimelle tuonnin jälkeen',
    'LBL_MARK_READ' => 'Leave Messages On Server',
    'LBL_MAX_AUTO_REPLIES' => 'Number of Auto-responses',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Set the maximum number of auto-responses to send to a unique email address during a period of 24 hours.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personal Mail Account',
    'LBL_CREATE_CASE' => 'Luo Palvelupyyntö sähköpostista',
    'LBL_CREATE_CASE_HELP' => 'Valitse luodaksesi automaattisesti palvelupyyntö SuiteCRM:n, saapuneista sähköposteista.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Bounce Handling Mailbox',
    'LBL_MODULE_TITLE' => 'Saapuneet sähköpostit',
    'LBL_NAME' => 'Nimi',
    'LBL_NONE' => 'Ei mitään',
    'LBL_ONLY_SINCE_NO' => 'Ei. Check against all emails on mail server.',
    'LBL_ONLY_SINCE_YES' => 'Kyllä.',
    'LBL_PASSWORD' => 'Salasana',
    'LBL_EMAIL_PASSWORD' => 'Salasana',
    'LBL_POP3_SUCCESS' => 'Your POP3 test connection was successful.',
    'LBL_POPUP_TITLE' => 'Testaa asetuksia',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Select Subscribed Folder(s)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Select Trash Folder',
    'LBL_SELECT_SENT_FOLDERS' => 'Select Sent Folder',
    'LBL_DELETED_FOLDERS_LIST' => 'The following folder(s) %s either does not exist or has been deleted from server',
    'LBL_PORT' => 'Postipalvelimen portti',
    'LBL_REPLY_TO_NAME' => '"Vastaa" Nimi',
    'LBL_REPLY_TO_ADDR' => '"Vastaa" Osoite',
    'LBL_SAME_AS_ABOVE' => 'Käyttäen lähettäjänimeä/osoitettaUsing From Name/Address',
    'LBL_SERVER_OPTIONS' => 'Tarkennetut asetukset',
    'LBL_SERVER_TYPE' => 'Palvelimen protokolla',
    'LBL_SERVER_PORT' => 'Postipalvelimen portti',
    'LBL_SERVER_URL' => 'Palvelimen osoite',
    'LBL_SSL_DESC' => 'Jos sähköpostitilisi tukee salattuja SSL-yhteyksiä, tämä valinta pakottaa SSL-yhdeyden käytön sähköposteja tuodessa.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'The selected team has access to the mail account.',
    'LBL_SSL' => 'Käytä SSL-salausta',
    'LBL_STATUS' => 'Tila',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Järjestelmän oletus',
    'LBL_TEST_BUTTON_TITLE' => 'Testi',
    'LBL_TEST_SETTINGS' => 'Testaa asetuksia',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Yhteys muodostettu onnistuneesti.',
    'LBL_TEST_WAIT_MESSAGE' => 'Hetkinen...',
    'LBL_WARN_IMAP_TITLE' => 'Inbound Email Disabled',
    'LBL_WARN_IMAP' => 'Varoitukset:',
    'LBL_WARN_NO_IMAP' => 'Inbound Email <b>cannot</b> function without the IMAP c-client libraries enabled/compiled with the PHP module. Please contact your administrator to resolve this issue.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Saapuvan Sähköpostin Tilit',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Lähtevien sähköpostien tilit',
    'LNK_LIST_SCHEDULER' => 'Ajastukset',
    'LNK_SEED_QUEUES' => 'Seed Queues From Teams',
    'LBL_GROUPFOLDER_ID' => 'Group Folder Id',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Allow users to send emails using the "From" Name and Address as the reply to address',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'When this option is selected, the From Name and From Email Address associated with this group mail account will appear as an option for the From field when composing emails for users that have access to the group mail account.',
    'LBL_STATUS_ACTIVE' => 'Aktiivinen',
    'LBL_STATUS_INACTIVE' => 'Ei aktiivinen',
    'LBL_IS_PERSONAL' => 'Henkilökohtainen',
    'LBL_IS_GROUP' => 'Ryhmä',
    'LBL_ENABLE_AUTO_IMPORT' => 'Import Emails Automatically',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Warning: You are modifying your automatic import setting which may result in loss of data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Varoitus: Automaattinen tuonti pitää olla aktivoitu, Palvelupyyntöjen luomiseksi automaattisesti.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sähköposti lähetetty',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arkistoidut viestit',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Sähköposti',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Vastaa',
    'LNK_SENT_EMAIL_LIST' => 'Lähetetyt viestit',
    'LBL_EDIT_LAYOUT' => 'Muuta layoutia' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Muokkaaja',
    'LBL_SERVICE' => 'Palvelu',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Turvaryhmät',


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
    'LBL_DISTRIB_METHOD' => 'Distribution Method',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Ulkoinen OAuth-yhteys',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Ulkoinen OAuth-yhteys',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Tyyppi',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Oletus',
    'LBL_SIGNATURE' => 'Allekirjoitus',

    'LBL_OWNER_NAME' => 'Omistaja',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
