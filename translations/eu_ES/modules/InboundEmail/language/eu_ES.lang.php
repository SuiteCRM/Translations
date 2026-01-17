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

    'ERR_BAD_LOGIN_PASSWORD' => 'Erabiltzailea edo pasahitza ez zuzena',
    'ERR_INI_ZLIB' => 'Could not turn off Zlib compression temporarily. "Test Settings" may fail.',
    'ERR_NO_IMAP' => 'IMAP-en liburutegiak ez dira aurkitu. Mesedez, hau konpondu sarrera postontziaren konfigurazioarekin jarraitu aurretik',
    'ERR_NO_OPTS_SAVED' => 'Sarrera postontzian ez dira balio ezin hobeak gorde. Mesedez, konfigurazioa berrikusi',
    'ERR_TEST_MAILBOX' => 'Mesedez, egiaztatu zure konfigurazioa eta saiatu berriro',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Erabiltzaileari esleitu',
    'LBL_AUTOREPLY' => 'Erantzun automatikoaren txantiloiak',
    'LBL_AUTOREPLY_HELP' => 'Select an automated response to notify email senders that their response has been received.',
    'LBL_BASIC' => 'Oinarrizko konfigurazioa',
    'LBL_CASE_MACRO' => 'Case Macro',
    'LBL_CASE_MACRO_DESC' => 'Set the macro which will be parsed and used to link imported email to a Case.',
    'LBL_CASE_MACRO_DESC2' => 'Set this to any value, but preserve the <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Itxi leihoa',
    'LBL_CREATE_TEMPLATE' => 'Berria',
    'LBL_DELETE_SEEN' => 'Delete Read Emails After Import',
    'LBL_EDIT_TEMPLATE' => 'Editatu',
    'LBL_EMAIL_OPTIONS' => 'Postaren kudeaketa-aukerak',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Bounce Handling Options',
    'LBL_FILTER_DOMAIN_DESC' => 'Ez bidali erantzun automatikoak domeinu honetara',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Select to automatically create email records in SuiteCRM for all incoming emails.',
    'LBL_FILTER_DOMAIN' => 'Ez erantzun automatikoki domeinuari',
    'LBL_FIND_SSL_WARN' => 'SSL-aren baieztapenak denbora nahiko iraun dezake. Mesedez, egonarria izan',
    'LBL_FROM_ADDR' => 'Bidaltzailearen helbidea',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Izena',
    'LBL_GROUP_QUEUE' => 'Taldeari esleitu',
    'LBL_HOME' => 'Hasiera',
    'LBL_LIST_MAILBOX_TYPE' => 'Postontziaren erabilera',
    'LBL_LIST_NAME' => 'Izena',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Mota',
    'LBL_LIST_SERVER_URL' => 'Posta zerbitzaria',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Egoera',
    'LBL_LOGIN' => 'Erabiltzaile-izena',
    'LBL_USERNAME' => 'Erabiltzaile-izena',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'SSL erabili',
    'LBL_MAILBOX_TYPE' => 'Egin daitezkeen ekintzak',
    'LBL_DISTRIBUTION_METHOD' => 'Distribution Method',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'New Case Auto-Reply Template',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Select an automated response to notify email senders that a case has been created. The email contains the case number in the Subject line which adheres to the Case Macro setting. This response is only sent when the first email is received from the recipient.',
    'LBL_MAILBOX' => 'Monitorizatutako karpeta',
    'LBL_TRASH_FOLDER' => 'Trash Folder',
    'LBL_SENT_FOLDER' => 'Sent Folder',
    'LBL_SELECT' => 'Hautatu',
    'LBL_MARK_READ_NO' => 'Inportazioaren ondoren, ezabatuta moduan adierazitako posta elektronikoa',
    'LBL_MARK_READ_YES' => 'Inportazioaren ondoren, zerbitzarian utzitako posta elektronikoa',
    'LBL_MARK_READ' => 'Zerbitzarian mezuak utzi',
    'LBL_MAX_AUTO_REPLIES' => 'Number of Auto-responses',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Set the maximum number of auto-responses to send to a unique email address during a period of 24 hours.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personal Mail Account',
    'LBL_CREATE_CASE' => 'Create Case from Email',
    'LBL_CREATE_CASE_HELP' => 'Select to automatically create case records in SuiteCRM from incoming emails.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Bounce Handling Mailbox',
    'LBL_MODULE_TITLE' => 'Postontziak kudeatu',
    'LBL_NAME' => 'Izena',
    'LBL_NONE' => 'Bat ere ez',
    'LBL_ONLY_SINCE_NO' => 'Ez. Posta zerbitzarian posta guztien kontra frogatu',
    'LBL_ONLY_SINCE_YES' => 'Bai',
    'LBL_PASSWORD' => 'Pasahitza',
    'LBL_EMAIL_PASSWORD' => 'Pasahitza',
    'LBL_POP3_SUCCESS' => 'Zure POP3 konexio-frogak arrakasta izan du',
    'LBL_POPUP_TITLE' => 'Konfigurazioa frogatu',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Select Subscribed Folder(s)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Select Trash Folder',
    'LBL_SELECT_SENT_FOLDERS' => 'Select Sent Folder',
    'LBL_DELETED_FOLDERS_LIST' => 'The following folder(s) %s either does not exist or has been deleted from server',
    'LBL_PORT' => 'Posta zerbitzariaren ataka',
    'LBL_REPLY_TO_NAME' => '"Reply-to" Name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" Address',
    'LBL_SAME_AS_ABOVE' => 'Using From Name/Address',
    'LBL_SERVER_OPTIONS' => 'Konfigurazio aurreratua',
    'LBL_SERVER_TYPE' => 'Posta-zerbitzariaren protokoloa',
    'LBL_SERVER_PORT' => 'Posta zerbitzariaren ataka',
    'LBL_SERVER_URL' => 'Posta-zerbitzariaren helbidea',
    'LBL_SSL_DESC' => 'Zure posta zerbitzariak socket (SSL) konexio seguruak onartzen baditu, aukera hau indartzeak  SSL konexioak bultzatuko ditu posta inportatzean',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'The selected team has access to the mail account.',
    'LBL_SSL' => 'SSL erabili',
    'LBL_STATUS' => 'Egoera',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Sisteman lehenespenez',
    'LBL_TEST_BUTTON_TITLE' => 'Frogatu',
    'LBL_TEST_SETTINGS' => 'Konfigurazioa frogatu',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Arrakastaz burututako konexioa',
    'LBL_TEST_WAIT_MESSAGE' => 'Itxaron momentu bat, mesedez...',
    'LBL_WARN_IMAP_TITLE' => 'Sarrera-posta desgaitua',
    'LBL_WARN_IMAP' => 'Ohartarazpenak',
    'LBL_WARN_NO_IMAP' => 'Sarrera-postek ezin dute funtzionatu PHP moduluan gaitu/konpilatutako IMAP-en bezeroaren C liburutegirik gabe. Mesedez, arazo hau konpontzeko zure administrariarekin harremanetan jar zaitez',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_SCHEDULER' => 'Planifikatzaileak',
    'LNK_SEED_QUEUES' => 'Ekipo ilarak elikatu',
    'LBL_GROUPFOLDER_ID' => 'Group Folder Id',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Allow users to send emails using the "From" Name and Address as the reply to address',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'When this option is selected, the From Name and From Email Address associated with this group mail account will appear as an option for the From field when composing emails for users that have access to the group mail account.',
    'LBL_STATUS_ACTIVE' => 'Aktiboa',
    'LBL_STATUS_INACTIVE' => 'Ez aktiboa',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'group',
    'LBL_ENABLE_AUTO_IMPORT' => 'Import Emails Automatically',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Warning: You are modifying your automatic import setting which may result in loss of data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Warning: Auto import must be enabled when automatically creating cases.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Sent Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Artxibatutako posta elektronikoak',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Posta elektronikoak',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Erantzun',
    'LNK_SENT_EMAIL_LIST' => 'Bidalitako posta elektronikoak',
    'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Nork aldatua',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Segurtasun-taldeak',


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

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Mota',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Lehenetsia',
    'LBL_SIGNATURE' => 'Sinadura',

    'LBL_OWNER_NAME' => 'Jabea',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
