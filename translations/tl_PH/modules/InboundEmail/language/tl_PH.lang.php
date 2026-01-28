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

    'ERR_BAD_LOGIN_PASSWORD' => 'Login o Password ay Hindi wasto',
    'ERR_INI_ZLIB' => 'Hindi maaaring patayin ang Zlib na kompresyon ng pansamantala. "Test Settings" ay maaaring mabigo.',
    'ERR_NO_IMAP' => 'Walang natagpuan na IMAP na mga librarya. Pakiusap lutasin ito bago magpatuloy sa Inbound na Email',
    'ERR_NO_OPTS_SAVED' => 'Walang mga optimum na na i-save sa iyong Inbound Email na account. Pakiusap suriin ang mga setting',
    'ERR_TEST_MAILBOX' => 'Pakiusap suriin ang iyong mga setting at subukang muli.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Italaga sa Tagagamit',
    'LBL_AUTOREPLY' => 'Templet ng Auto-Reply',
    'LBL_AUTOREPLY_HELP' => 'Pumili ng awtomatikong tugon para umabiso sa mga nagpapadala ng email na ang kanilang tugon ay natanggap na.',
    'LBL_BASIC' => 'Impormasyon ng Account ng koreo',
    'LBL_CASE_MACRO' => 'Case Macro',
    'LBL_CASE_MACRO_DESC' => 'Itakda ang makro na isusuri at gagamitin para i-angkat ang link ng sulatroniko patungong case.',
    'LBL_CASE_MACRO_DESC2' => 'Itakda ito sa kahit na anong halaga, pero i-preserba ang <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Isara ang Window',
    'LBL_CREATE_TEMPLATE' => 'Nilikha',
    'LBL_DELETE_SEEN' => 'Burahin ang mga nabasang mga Email pagkatapos mag-angkat',
    'LBL_EDIT_TEMPLATE' => 'I-edit',
    'LBL_EMAIL_OPTIONS' => 'Mga pagpipilian na handling ng Email',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Mga pagpipilian na Bounce Handling',
    'LBL_FILTER_DOMAIN_DESC' => 'Tukuyin ang domain na sagayun ay walang maipadala na mga auto-reply.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Pumili para awtomatikong makagawa ng mga rekord sa email sa SuiteCRM para sa lahat na mga pumapasok na mga email.',
    'LBL_FILTER_DOMAIN' => 'Walang Auto-Reply sa Domain na ito',
    'LBL_FIND_SSL_WARN' => '<br>Maaaring matagalan kapag sinubukan ang SSL. Pakiusap habaan ang pasensya. <br>',
    'LBL_FROM_ADDR' => '"Mula" sa isang Address',
    'LBL_FROM_ADDR_DESC' => 'Ang address ng email na inilahad dito ay maaaring hindi lumitaw na nasa "From" seksyon ng address sa email na ipinadala ng dahil sa restriksyon na nakapataw galing sa tagapagtustos na tagapagpadala ng email. Sa mga pangyayari, ang address ng email ay nagangahulugang magagamit ang palabas na serber ng koreo.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Galing" sa Pangalan',
    'LBL_GROUP_QUEUE' => 'Magtalaga sa Pangkat',
    'LBL_HOME' => 'Ang Tahanan',
    'LBL_LIST_MAILBOX_TYPE' => 'Ang paggamit ng koreo na Account',
    'LBL_LIST_NAME' => 'Ang Pangalan:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Klase',
    'LBL_LIST_SERVER_URL' => 'Serber ng Sulat',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Kalagayan',
    'LBL_LOGIN' => 'Gamit na Pangalan',
    'LBL_USERNAME' => 'Gamit na Pangalan',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Gumamit ng USSL',
    'LBL_MAILBOX_TYPE' => 'Posibleng Mga Aksyon',
    'LBL_DISTRIBUTION_METHOD' => 'Paraan ng Pagbabahagi',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Bagong kaso na templet ng Auto-Reply',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Pumili ng awtomatikong tugon na inaabisohan ang mga tagapagpadala ng email na ang case ay nagawa na. Ang email ay naglalaman ng numero ng case sa may linya ng paksa kung saan umayon ang setting ng Case Macro. Ang tugon na ito ay maipapadala lamang kapag ang unang email ay natanggap na ng tagapagtanggap.',
    'LBL_MAILBOX' => 'Pinagmamatiyagang mga Folder',
    'LBL_TRASH_FOLDER' => 'Folder ng Basura',
    'LBL_SENT_FOLDER' => 'Folder ng Naipadala',
    'LBL_SELECT' => 'Piliin',
    'LBL_MARK_READ_NO' => 'Email ay namarkahang nabura pagkatapos ng pag-import',
    'LBL_MARK_READ_YES' => 'Email na naiwan sa server pagkatapos ng pag-import',
    'LBL_MARK_READ' => 'Iwanan ng mga mensahe ang Serber',
    'LBL_MAX_AUTO_REPLIES' => 'Numero ng mga Auto-response',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Magtakda ng mataas na numero ng mga auto-response para makapagpadala na kakaibang email address sa loob ng 24 na oras.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personal na Account ng Koreo',
    'LBL_CREATE_CASE' => 'Gumawa ng Case galing sa Koreo',
    'LBL_CREATE_CASE_HELP' => 'Pumili para sa awtomatikong paggawa ng mga rekord ng case sa SuiteCRM galing sa pumapasok na mga email.',
    'LBL_MODULE_NAME' => 'Pangkat ng Account ng Mensahe',
    'LBL_BOUNCE_MODULE_NAME' => 'Ang hulugan ng sulat ng Bounce Handling',
    'LBL_MODULE_TITLE' => 'Ang paparating na email',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_NONE' => 'Wala',
    'LBL_ONLY_SINCE_NO' => 'Wala. Suriin laban sa lahat ng mga email sa serber ng mensahe.',
    'LBL_ONLY_SINCE_YES' => 'Opo.',
    'LBL_PASSWORD' => 'Ang Password',
    'LBL_EMAIL_PASSWORD' => 'Ang Password',
    'LBL_POP3_SUCCESS' => 'Matagumpay ang iyong pagsubok na koneksyon ng POP3.',
    'LBL_POPUP_TITLE' => 'Mga Setting sa pagsusulit',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Pumili ng naka-sumisibskribi na (mga) Folder',
    'LBL_SELECT_TRASH_FOLDERS' => 'Pumili ng Folder na Basura',
    'LBL_SELECT_SENT_FOLDERS' => 'Pumili ng Naipadala na Folder',
    'LBL_DELETED_FOLDERS_LIST' => 'Ang mga sumusunod na (mga) folder %s ay alinman hindi umiiral o naibura galing sa serber',
    'LBL_PORT' => 'Mensahe ng Server Port',
    'LBL_REPLY_TO_NAME' => '"Tugon-sa" Pangalan',
    'LBL_REPLY_TO_ADDR' => '"Tugon-sa" Address',
    'LBL_SAME_AS_ABOVE' => 'Gamit galing sa Pangalan/Address',
    'LBL_SERVER_OPTIONS' => 'Adbanseng Pagsetup',
    'LBL_SERVER_TYPE' => 'Ang mensahe ng server protokol',
    'LBL_SERVER_PORT' => 'Mensahe ng Server Port',
    'LBL_SERVER_URL' => 'Ang server na tirahan ng mensahe',
    'LBL_SSL_DESC' => 'Kung ang iyong mensahe ay sinusuportahan ng server ligtas ang socket ng mga koneksyon, Ang puwersa ng SSL sa pagpapagana na kailangan ng mga koneksyon na impotanteng email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Ang mga napiling pangkat ay may akses sa account ng koreo.',
    'LBL_SSL' => 'Gumamit ng USSL',
    'LBL_STATUS' => 'Kalagayan',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Default ng Sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Ang pagsusulit',
    'LBL_TEST_SETTINGS' => 'Mga Setting sa pagsusulit',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Ang koneksyon ay matagumpay na nakompleto.',
    'LBL_TEST_WAIT_MESSAGE' => 'Isang sandali pakiusap...',
    'LBL_WARN_IMAP_TITLE' => 'Hindi pinagana na Inbound Email',
    'LBL_WARN_IMAP' => 'Ang mga babala:',
    'LBL_WARN_NO_IMAP' => 'Inbound Email <b>hindi maaari</b> gumagana kahit walang IMAP c-client na mga librarya pinapahintulotan/naipon kasama ang PHP na modyul. Pakiusap i-kontak ang iyong taga-pangasiwa para ma resolba ang isyung ito.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Ang papalabas ng mga email akawnt',
    'LNK_LIST_SCHEDULER' => 'Ang mga tagapag iskedyul',
    'LNK_SEED_QUEUES' => 'I-seed ang mga Queue galing sa mga pangkat',
    'LBL_GROUPFOLDER_ID' => 'Id Folder ng Pangkat',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Patnugutan ang mga gumagamit na magpadala ng mga email gamit ang "Galing" Pangalan at Address bilang isang tugon sa address',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Pagnapili ang pagpipilian, ang From Name at ang From Email Address ay nauugnay sa account na pangkat ng koreo ay makikita bilang isang pagpipilian para From na field sa paggawa ng email para sa mga gumagawa na may akses sa grupo ng mail account.',
    'LBL_STATUS_ACTIVE' => 'Gawing aktibo',
    'LBL_STATUS_INACTIVE' => 'Huwag gawing aktibo',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Awtomatikong pag-import ng mga Email',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Babala: Binago mo ang iyong awtomatikong pag-angkat ng setting na magreresulta ng pagkawala ng iyong datos.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Babala: Ang awto na pag-angkas ay kailangang paganahin kapag awtomatikong gumawa ng mga case.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Mga Draft',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Ipinadalang Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Itinagong mga Email',
    'LNK_MY_DRAFTS' => 'Mga Draft',
    'LNK_MY_INBOX' => 'Ang Email',
    'LNK_VIEW_MY_INBOX' => 'Tingnan ang Email',
    'LNK_QUICK_REPLY' => 'Replay',
    'LNK_SENT_EMAIL_LIST' => 'Napadalang Mga Email',
    'LBL_EDIT_LAYOUT' => 'I-edit ang layout' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Binago sa pamamagitan ng',
    'LBL_SERVICE' => 'Ang Serbisyo',
    'LBL_STORED_OPTIONS' => 'Mga nakaimbak na pagpipilian',
    'LBL_GROUP_ID' => 'ID ng mga pangkat',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Mga grupong seguridad',


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
    'LBL_DISTRIB_METHOD' => 'Paraan ng Pagbabahagi',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Klase',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Naka-default',
    'LBL_SIGNATURE' => 'Paglagda',

    'LBL_OWNER_NAME' => 'May-ari',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
