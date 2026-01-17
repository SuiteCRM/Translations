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

    'ERR_BAD_LOGIN_PASSWORD' => 'Hindi tama ang login o password',
    'ERR_INI_ZLIB' => 'Pansamantalang hindi maaring i-turn off ang zlib compression. "i-test ang mga setting" maaring mabigo.',
    'ERR_NO_IMAP' => 'Walang mga Library ng IMAP ang nakita. Paki-resolve ito bago magpatuloy sa Inbound Email',
    'ERR_NO_OPTS_SAVED' => 'Walang mga optimum ang nai-save sa iyong Inbound Email account. Paki-review ang mga setting',
    'ERR_TEST_MAILBOX' => 'Paki-check sa iyong mga setting at subukang muli.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Italaga sa Gumagamit',
    'LBL_AUTOREPLY' => 'Template ng Auto-Reply',
    'LBL_AUTOREPLY_HELP' => 'Pumili ng isang awtomatikong tugon upang i-notify ang mga sender ng email na ang kanilang mga tugon ay natanggap.',
    'LBL_BASIC' => 'Impormasyon ng Account ng mail',
    'LBL_CASE_MACRO' => 'Case na Macro',
    'LBL_CASE_MACRO_DESC' => 'I-set ang macro kung saan mapa-parse at magagamit upang i-link ang naka-import na email sa isang kaso.',
    'LBL_CASE_MACRO_DESC2' => 'I-set ito sa alinmang halaga, pero i-preserve ang <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'I-close ang window',
    'LBL_CREATE_TEMPLATE' => 'Lumikha',
    'LBL_DELETE_SEEN' => 'Burahin ang mga read email pagkatapos i-Import',
    'LBL_EDIT_TEMPLATE' => 'I-edit',
    'LBL_EMAIL_OPTIONS' => 'Mga opsyon ng Email handling',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Mga opsyon ng Bounce handling',
    'LBL_FILTER_DOMAIN_DESC' => 'Mag-specify ng isang domain kung saan walang mga auto-reply ang maipapadala.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Piliin upang awtomatikong lumikha ng mga email record sa SuiteCRM para sa lahat ng mga padating na mga email.',
    'LBL_FILTER_DOMAIN' => 'Walang auto-reply sa domain na ito',
    'LBL_FIND_SSL_WARN' => '<br> maaring tumagal ng mahabang panahon ang pagte-test ng SSL. Pakiusap maging masensyoso.<br>',
    'LBL_FROM_ADDR' => '"Mula" Lugar',
    'LBL_FROM_ADDR_DESC' => 'Ang email address na ibinigay dito ay maaring hindi lumabas sa "Mula" address na seksyon ng naipadalang email dahil sa mga restriksyon nai-impose ng mail service provider. sa ganitong mga kalagayan, ang email address na nai-define sa outgoing mail server ay gagamitin.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Mula" pangalan',
    'LBL_GROUP_QUEUE' => 'I-assign sa grupo',
    'LBL_HOME' => 'Home',
    'LBL_LIST_MAILBOX_TYPE' => 'Paggamit ng mail Account',
    'LBL_LIST_NAME' => 'Pangalan:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Uri',
    'LBL_LIST_SERVER_URL' => 'Server ng mail',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Katayuan',
    'LBL_LOGIN' => 'Ang Pangalan ng Gumagamit',
    'LBL_USERNAME' => 'Ang Pangalan ng Gumagamit',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Gumamit ng SSL',
    'LBL_MAILBOX_TYPE' => 'Mga Posibleng Pagkilos',
    'LBL_DISTRIBUTION_METHOD' => 'Pamamaraan ng pagbabahagi',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Bagong kaso ng tempalte ng Auto-Reply',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Pumili ng isang awtomatikong tugon upang i-notify ang mga sender ng email na ang isang kaso ay nalikha. Ang email ay nilalaman ang case number sa Subject line kung saan nag a-adhere sa setting ng Case Macro. Ang tugon na ito ay naipapadala lamang kapag ang unang email ay natanggap mula sa mga tatanggap.',
    'LBL_MAILBOX' => 'Nai-monitor na mga folder',
    'LBL_TRASH_FOLDER' => 'Folder ng basura',
    'LBL_SENT_FOLDER' => 'Folder ng naipala',
    'LBL_SELECT' => 'Piliin',
    'LBL_MARK_READ_NO' => 'Ang minarkahang email ay tinanggal pagkatapos na i-import',
    'LBL_MARK_READ_YES' => 'Ang email na naiwan sa server pagkatapos ng pag-import',
    'LBL_MARK_READ' => 'Mag-iwan ng mga mensahe sa server',
    'LBL_MAX_AUTO_REPLIES' => 'Bilang ng mga awtomatikong-tugon',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'I-set ang maximum na numero ng mga awtomatikong-tugon upang magpadala sa isang natatanging email address sa loob ng 24 oras.',
    'LBL_PERSONAL_MODULE_NAME' => 'Mail Account na Personal',
    'LBL_CREATE_CASE' => 'Lumikha ng kasi mula sa Email',
    'LBL_CREATE_CASE_HELP' => 'Piliin upang awtomatikong gumawa ng mga rekord ng kaso sa SuiteCRM mula sa paparating na mga email.',
    'LBL_MODULE_NAME' => 'Grupo ng Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Mailbox na nagha-handle ng Bounce',
    'LBL_MODULE_TITLE' => 'May Dumarating na Elektronek na sulat',
    'LBL_NAME' => 'Ang pangalan',
    'LBL_NONE' => 'Wala',
    'LBL_ONLY_SINCE_NO' => 'No. i-check sa lahat ng mga email sa mail server.',
    'LBL_ONLY_SINCE_YES' => 'Oo.',
    'LBL_PASSWORD' => 'Ang Password',
    'LBL_EMAIL_PASSWORD' => 'Ang Password',
    'LBL_POP3_SUCCESS' => 'Ang iyong POP3 na test connection ay matagumpay.',
    'LBL_POPUP_TITLE' => 'Pagpipilian sa mga pagsubok',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Piliin ang naka-subscribe na (mga) folder',
    'LBL_SELECT_TRASH_FOLDERS' => 'Piliin ang trash folder',
    'LBL_SELECT_SENT_FOLDERS' => 'Piliin ang sent folder',
    'LBL_DELETED_FOLDERS_LIST' => 'Ang mga sumusunod na (mga) folder%s ay hindi umiiral o naibura na mula sa server',
    'LBL_PORT' => 'Port ng Serbidor ng Mail',
    'LBL_REPLY_TO_NAME' => '"Tumugon-sa" Pangalan',
    'LBL_REPLY_TO_ADDR' => '"Tumugon-sa" Lugar',
    'LBL_SAME_AS_ABOVE' => 'Gamit mula sa pangalan/lugar',
    'LBL_SERVER_OPTIONS' => 'Advanced na Pag-setup',
    'LBL_SERVER_TYPE' => 'Protokol na Serbidor ng Mail',
    'LBL_SERVER_PORT' => 'Port ng Serbidor ng Mail',
    'LBL_SERVER_URL' => 'Address ng Serbidor ng Mail',
    'LBL_SSL_DESC' => 'Kung ang server ng iyong mail ay sumusuporta sa mga koneksyon sa ligtas na socket, pagpapagama nito ay mag pipilit ng mga koneksyon ng SSL kung mag-aangkat ng email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Ang napiling team ay may-access sa mail access.',
    'LBL_SSL' => 'Gumamit ng SSL',
    'LBL_STATUS' => 'Katayuan',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Default na Sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Pagsusulit',
    'LBL_TEST_SETTINGS' => 'Pagpipilian sa mga pagsubok',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Matagumpay na nakumpleto ang koneksyon.',
    'LBL_TEST_WAIT_MESSAGE' => 'Pakiusap isang saglit...',
    'LBL_WARN_IMAP_TITLE' => 'Nai-disable ang inbound Email',
    'LBL_WARN_IMAP' => 'Mga Babala:',
    'LBL_WARN_NO_IMAP' => 'Inbound Email <b>hindi pwede</b> function na hindi naka-enable ang mga Library ng IMAP c-client/nai-compile sa PHP module. pako-kontak sa iyong administrator upang i-resolve ang isyung ito.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Paglalabas ng mga email akwant',
    'LNK_LIST_SCHEDULER' => 'Mga Iskedyul',
    'LNK_SEED_QUEUES' => 'Mga seed Queue mula sa mga koponan',
    'LBL_GROUPFOLDER_ID' => 'Id ng folder ng grupo',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Payagan ang mga user na magpadala ng mga email gamit ang "Mula" pangalan at lugar bilang tugon sa lugar',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kapag ang opsyon na ito ay napili, ang From Name at From Email Address na naiuugnay sa group mail account na ito ay mag a-appear bilang isang opsyon para sa From na field kapag nagco-compose ng mga email para sa mga user na mayroong access sa group mail account.',
    'LBL_STATUS_ACTIVE' => 'Aktibo',
    'LBL_STATUS_INACTIVE' => 'Hindi aktibo',
    'LBL_IS_PERSONAL' => 'Personalidad',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Awtomatikong I-import ang mga email',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Babala: ikaw ay nagmo-modify sa iyong setting ng awtomatikong import kung saan maaring mag resulta sa pagkawala ng datos.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Babala: awtomatikong pag-import ay kailangang mai-enable kapag awtomatikong lumilikha ng mga kaso.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Mga draft',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Ang email ay ipinadala',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Mga email na Naka-archive',
    'LNK_MY_DRAFTS' => 'Mga draft',
    'LNK_MY_INBOX' => 'Ang email',
    'LNK_VIEW_MY_INBOX' => 'I-view ang Email',
    'LNK_QUICK_REPLY' => 'Sagot',
    'LNK_SENT_EMAIL_LIST' => 'Napadala na Mga Email',
    'LBL_EDIT_LAYOUT' => 'Baguhin ang layout' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Binago ni',
    'LBL_SERVICE' => 'Serbisyo',
    'LBL_STORED_OPTIONS' => 'Naka-store na mga opsyon',
    'LBL_GROUP_ID' => 'ID ng group',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupo ng mga seguridad',


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
    'LBL_DISTRIB_METHOD' => 'Pamamaraan ng pagbabahagi',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Uri',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Default',
    'LBL_SIGNATURE' => 'Lagda',

    'LBL_OWNER_NAME' => 'May-ari',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
