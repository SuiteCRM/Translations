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


    'LBL_RE' => 'Odgovori:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Uporabniško ime ali geslo nista pravilna',
    'ERR_INI_ZLIB' => 'Could not turn off Zlib compression temporarily.  &quot;Test Settings&quot; may fail.',
    'ERR_NO_IMAP' => 'IMAP knjižnice ni mogoče najti.  Prosim popravite to pred nadaljevanjem z dohodno pošto',
    'ERR_NO_OPTS_SAVED' => 'No optimums were saved with your Inbound Email account. Please review the settings',
    'ERR_TEST_MAILBOX' => 'Prosimo preverite nastavitve in poskusite ponovno.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Dodeli uporabniku',
    'LBL_AUTOREPLY' => 'Predloge za avtomatski odgovor',
    'LBL_AUTOREPLY_HELP' => 'Izberite samodejni odgovor, da obvestite pošiljatelje, da se prejeli pošto.',
    'LBL_BASIC' => 'Osnovne nastavitve',
    'LBL_CASE_MACRO' => 'Marko reklamacije',
    'LBL_CASE_MACRO_DESC' => 'Set the macro which will be parsed and used to link imported email to a Case.',
    'LBL_CASE_MACRO_DESC2' => 'Nastavite to na katerokoli možnost, vendar ohhranite &lt;b&gt;&quot;%1&quot;&lt;/b&gt;.',
    'LBL_CLOSE_POPUP' => 'Zapri okno',
    'LBL_CREATE_TEMPLATE' => 'Ustvari',
    'LBL_DELETE_SEEN' => 'Odstrani prebrano E-pošto po uvozu',
    'LBL_EDIT_TEMPLATE' => 'Uredi',
    'LBL_EMAIL_OPTIONS' => 'Možnosti upravljanja s pošto',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Upravljenje bounce nastavitev za pošto',
    'LBL_FILTER_DOMAIN_DESC' => 'Ne pošiljaj avtomatskih odgovorov na to domeno.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => 'Brez avtomatskih odgovorov za domeno',
    'LBL_FIND_SSL_WARN' => '&lt;br&gt;Testiranje SSL lahko traja nekaj časa.  Prosim boditepotrpežljivi.&lt;br&gt;',
    'LBL_FROM_ADDR' => '&quot;Od&quot; naslov',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '&quot;Od&quot; ime',
    'LBL_GROUP_QUEUE' => 'Dodeli skupini',
    'LBL_HOME' => 'Domov',
    'LBL_LIST_MAILBOX_TYPE' => 'Uporaba E-poštnega nabiralnika',
    'LBL_LIST_NAME' => 'Ime:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tip',
    'LBL_LIST_SERVER_URL' => 'E-poštni strežnik:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Stanje',
    'LBL_LOGIN' => 'Uporabniško ime',
    'LBL_USERNAME' => 'Uporabniško ime',
    'LBL_MAILBOX_DEFAULT' => 'PREJETO',
    'LBL_MAILBOX_SSL' => 'Uporabi SSL',
    'LBL_MAILBOX_TYPE' => 'Možna dejanja',
    'LBL_DISTRIBUTION_METHOD' => 'Metoda distribucije',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Ustvari predlogo za odgovor na Reklamacijo',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting. This response is only sent when the first email is received from the recipient.',
    'LBL_MAILBOX' => 'Opazovana mapa',
    'LBL_TRASH_FOLDER' => 'Trash (koš) mapa',
    'LBL_SENT_FOLDER' => 'Mapa poslano',
    'LBL_SELECT' => 'Izberite',
    'LBL_MARK_READ_NO' => 'E-pošta označena kot zbrisana po uvozu',
    'LBL_MARK_READ_YES' => 'E-pošta še vedno na strežniku po uvozu',
    'LBL_MARK_READ' => 'Psuti sporočila na strežniku',
    'LBL_MAX_AUTO_REPLIES' => 'Število avtomatskih odgovorov',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Določi maksimalno število avtomatskih odgovorov, ki jih lahko dobi določen e-poštni naslov v 24 urah.',
    'LBL_PERSONAL_MODULE_NAME' => 'Osebni mail račun',
    'LBL_CREATE_CASE' => 'Ustvari reklamacijo iz e-pošte',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'Inbound Email Accounts',
    'LBL_BOUNCE_MODULE_NAME' => 'Poštni predal za bounce pošto',
    'LBL_MODULE_TITLE' => 'Inbound Email Accounts',
    'LBL_NAME' => 'Ime',
    'LBL_NONE' => 'Brez',
    'LBL_ONLY_SINCE_NO' => 'Ne. Preveri vso pošto na strežniku.',
    'LBL_ONLY_SINCE_YES' => 'Da.',
    'LBL_PASSWORD' => 'Geslo',
    'LBL_EMAIL_PASSWORD' => 'Geslo',
    'LBL_POP3_SUCCESS' => 'Testiranje POP3 povezave je bilo uspešno.',
    'LBL_POPUP_TITLE' => 'Preveri nastavitve',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Izberi naročene mape',
    'LBL_SELECT_TRASH_FOLDERS' => 'Izberi Trash mapo',
    'LBL_SELECT_SENT_FOLDERS' => 'Izberi mapo Poslano',
    'LBL_DELETED_FOLDERS_LIST' => 'Naslednje mape %s ne obstajajo ali pa so bile izbrisane iz strežnika.',
    'LBL_PORT' => 'Vrata poštnega strežnika',
    'LBL_REPLY_TO_NAME' => '&quot;Odgovori na&quot; ime',
    'LBL_REPLY_TO_ADDR' => '&quot;Odgovori na&quot; naslov',
    'LBL_SAME_AS_ABOVE' => 'Uporabi enako kot pri Ime/E-poštni naslov',
    'LBL_SERVER_OPTIONS' => 'Napredne nastavitve',
    'LBL_SERVER_TYPE' => 'Protokol poštnega strežnika',
    'LBL_SERVER_PORT' => 'Vrata poštnega strežnika',
    'LBL_SERVER_URL' => 'Naslov poštnega strežnika',
    'LBL_SSL_DESC' => 'Če vaš poštni strežnik podpira varno povezavo, omogočanje le tega bo aktiviralo SSL povezave ob uvozu e-pošte.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'The selected team has access to the mail account.',
    'LBL_SSL' => 'Uporabi SSL',
    'LBL_STATUS' => 'Stanje',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Privzete sistemske nastavitve',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Preveri nastavitve',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Povezava uspešno zaključena.',
    'LBL_TEST_WAIT_MESSAGE' => 'Samo trenutek...',
    'LBL_WARN_IMAP_TITLE' => 'Vhodna e-pošta onemogočena',
    'LBL_WARN_IMAP' => 'Opozorila:',
    'LBL_WARN_NO_IMAP' => 'Inbound Email <b>cannot</b> function without the IMAP c-client libraries enabled/compiled with the PHP module. Please contact your administrator to resolve this issue.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_SCHEDULER' => 'Urniki',
    'LNK_SEED_QUEUES' => 'Seed Queues From Teams',
    'LBL_GROUPFOLDER_ID' => 'ID skupinske mape',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Allow users to send emails using the "From" Name and Address as the reply to address',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'When this option is selected, the From Name and From Email Address associated with this group mail account will appear as an option for the From field when composing emails for users that have access to the group mail account.',
    'LBL_STATUS_ACTIVE' => 'Aktiven',
    'LBL_STATUS_INACTIVE' => 'Neaktiven',
    'LBL_IS_PERSONAL' => 'Osebno',
    'LBL_IS_GROUP' => 'skupina',
    'LBL_ENABLE_AUTO_IMPORT' => 'Samodejno uvozi pošto',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Warning: You are modifying your automatic import setting which may result in loss of data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Warning: Auto import must be enabled when automatically creating cases.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sent Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arhivirana e-pošta',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'E-pošta',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Odgovori',
    'LNK_SENT_EMAIL_LIST' => 'Pošlji e-pošto',
    'LBL_EDIT_LAYOUT' => 'Uredi izgled' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Spremenil',
    'LBL_SERVICE' => 'Storitev',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Varnostne skupine',


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
    'LBL_DISTRIB_METHOD' => 'Metoda distribucije',
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
    'LBL_IS_DEFAULT' => 'Privzeto',
    'LBL_SIGNATURE' => 'Podpis',

    'LBL_OWNER_NAME' => 'Lastnik',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
);
