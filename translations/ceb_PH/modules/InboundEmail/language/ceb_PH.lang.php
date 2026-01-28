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

    'ERR_BAD_LOGIN_PASSWORD' => 'Sayop nga Pagsulod o Password',
    'ERR_INI_ZLIB' => 'Dili makapalong sa temporaryong Zlip kompresyon. Ang "Pagsulay sa mga Pagpahimutang" mahimong mapakyas.',
    'ERR_NO_IMAP' => 'Walay nakit-an nga IMAP nga mga laybrari. Palehug sa pagsulbad niini usa pa sa pagpadayon sa Inbound nga Email',
    'ERR_NO_OPTS_SAVED' => 'Walay labing maayo ang nulawas uban sa imong Inbound nga Email account. Palehug sa pagsusi ug usab sa mga pagpahimutang',
    'ERR_TEST_MAILBOX' => 'Palehug sa pagsusi sa imong mga pagpahimutang ug sulayi pag-usab.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Igahin sa Tiggamit',
    'LBL_AUTOREPLY' => 'Awto-Reply nga Template',
    'LBL_AUTOREPLY_HELP' => 'Pagpili ug awtomatikong tubag aron sa pagpahibaw sa mga nagpadala sa email nga ang ilang tubag nadawat na.',
    'LBL_BASIC' => 'Impormasyon sa Mail Account',
    'LBL_CASE_MACRO' => 'Makrong Kaso',
    'LBL_CASE_MACRO_DESC' => 'Itakda ang makro nga bahinon ug gamiton aron sa pag-link sa na-import nga email sa usa ka Kaso.',
    'LBL_CASE_MACRO_DESC2' => 'Itakda kini sa bisan unsang bili, apan tapigi ang <b>%1</b>.',
    'LBL_CLOSE_POPUP' => 'Sirahing Bintana',
    'LBL_CREATE_TEMPLATE' => 'Paghimo',
    'LBL_DELETE_SEEN' => 'Tangtanga ang Nabasahan nga mga Email Human sa Import',
    'LBL_EDIT_TEMPLATE' => 'Usba',
    'LBL_EMAIL_OPTIONS' => 'Mga Kapilian sa Pagdumala sa Email',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Mga Kapilian sa Pagdumala sa Pag-untol',
    'LBL_FILTER_DOMAIN_DESC' => 'Paghingalan ug usa ka domain kung diin walay mga awto-reply nga ipadala.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Pagpili aron sa awtomatikong pagbuhat sa mga rekord sa email sa SuiteCRM alang sa mga nagpadulong nga mga email.',
    'LBL_FILTER_DOMAIN' => 'Walay Awto-Reply niini nga Domain',
    'LBL_FIND_SSL_WARN' => '<br>Ang pagsulay sa SSL mahimong magdugay. Palehug sa pagpa-mapailubon.<br>',
    'LBL_FROM_ADDR' => '"Gikan sa" Address',
    'LBL_FROM_ADDR_DESC' => 'Ang email address nga gihatag dinhi mahimong dili mopakita sa "Gikan" sa address nga seksyon sa email nga napadala tungod sa mga pagdili nga gipahamtang sa tighatag sa serbisyo sa email. Niining kahimtanga, ang email address gihulagway sa mogawas nga serber sa sulat nga gamiton.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Gikan" Ngalan',
    'LBL_GROUP_QUEUE' => 'Igahin sa Grupo',
    'LBL_HOME' => 'Home',
    'LBL_LIST_MAILBOX_TYPE' => 'Paggamit sa Mail Account',
    'LBL_LIST_NAME' => 'Pangalan:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Isulat',
    'LBL_LIST_SERVER_URL' => 'Serber sa Mail',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Stado',
    'LBL_LOGIN' => 'Gigamit nga pangalan',
    'LBL_USERNAME' => 'Gigamit nga pangalan',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Gamiton ang SSL',
    'LBL_MAILBOX_TYPE' => 'Mga Posibleng Aksyon',
    'LBL_DISTRIBUTION_METHOD' => 'Pamaagi sa Pag-apod-apod',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Bag-o nga Template sa Kaso sa Awto-Reply',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Pagpili ug usa ka awtomatikong tubag aron sa pagpahibalo sa mga nagpadala sa email nga ang kaso nabuhat na. Ang email naglangkob ug numero sa kaso sa linya sa gihisgutan nga nagsunod sa Kaso sa Makro nga pagpahimutang. Kini nga tubag gipadala lamang kung ang unang email nadawat na gikan sa modawat.',
    'LBL_MAILBOX' => 'Ginabantayang mga Polder',
    'LBL_TRASH_FOLDER' => 'Polder sa Basura',
    'LBL_SENT_FOLDER' => 'Polder sa Napadala',
    'LBL_SELECT' => 'Pili',
    'LBL_MARK_READ_NO' => 'Ang email gimarkahan ug tangtang human sa import',
    'LBL_MARK_READ_YES' => 'Ang email nga nahabilin sa serber human sa import',
    'LBL_MARK_READ' => 'Pagbilin ug mga Menshae sa Serber',
    'LBL_MAX_AUTO_REPLIES' => 'Numero sa mga Awto-response',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Itakda ang kinadak-ang numero sa mga awto-response aron sa pagpadala sa usa ka talagsaong email address sa sulod sa 24 ka oras.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personal nga Mail Account',
    'LBL_CREATE_CASE' => 'Pagbuhat ug Kaso gikan sa Email',
    'LBL_CREATE_CASE_HELP' => 'Pagpili aron sa awtomatikong pagbuhat ug mga rekord sa kaso sa SuiteCRM gikan sa nagpadulong nga mga email.',
    'LBL_MODULE_NAME' => 'Mail Account sa Grupo',
    'LBL_BOUNCE_MODULE_NAME' => 'Pagdumala sa Buson sa Pag-untol',
    'LBL_MODULE_TITLE' => 'Regards imong Email',
    'LBL_NAME' => 'Pangalan',
    'LBL_NONE' => 'Wala',
    'LBL_ONLY_SINCE_NO' => 'Dili. Susiha batok sa tanang mga email nga anaa sa serber sa suwat.',
    'LBL_ONLY_SINCE_YES' => 'Oo.',
    'LBL_PASSWORD' => 'Password',
    'LBL_EMAIL_PASSWORD' => 'Password',
    'LBL_POP3_SUCCESS' => 'Ang imong POP3 nga pagsulay nagmalampuson.',
    'LBL_POPUP_TITLE' => 'Mga Kahimtang sa Pagsulay',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Pagpili ug Nagsubay nga Folder(s)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Pagpili ug Polder sa Basura',
    'LBL_SELECT_SENT_FOLDERS' => 'Pagpili ug Polder sa Napadala',
    'LBL_DELETED_FOLDERS_LIST' => 'Ang mosunod nga folder(s) %s mahimong wala nahimo o natangtang gikan sa serber',
    'LBL_PORT' => 'Port sa Server sa Mail',
    'LBL_REPLY_TO_NAME' => '"Tubag-kang" Ngalan',
    'LBL_REPLY_TO_ADDR' => '"Tubag-sa" Address',
    'LBL_SAME_AS_ABOVE' => 'Paggamit gikan sa Ngalan/Puloy-anan',
    'LBL_SERVER_OPTIONS' => 'Nag-una nga Set-up',
    'LBL_SERVER_TYPE' => 'Protokol sa Server sa Mail',
    'LBL_SERVER_PORT' => 'Port sa Server sa Mail',
    'LBL_SERVER_URL' => 'Address sa Server sa Mail',
    'LBL_SSL_DESC' => 'Kung ang imong mail server kay musuporta ug luwas nga mga koneksyon nga socket, ang pagpatuman niini kay magpwersa sa mga koneksyon sa SSL kung mag-import ug email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Ang pinili nga grupo adunay access ngadto sa mail account.',
    'LBL_SSL' => 'Gamiton ang SSL',
    'LBL_STATUS' => 'Stado',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Default sa Sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Suwayi',
    'LBL_TEST_SETTINGS' => 'Mga Kahimtang sa Pagsulay',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Ang koneksyon natapos nga nagmalampuson.',
    'LBL_TEST_WAIT_MESSAGE' => 'Palihog sa paghuwat...',
    'LBL_WARN_IMAP_TITLE' => 'Wala gipagana nga Inbound Email',
    'LBL_WARN_IMAP' => 'Mga Pahimangno:',
    'LBL_WARN_NO_IMAP' => 'Ang Inbound Email <b>dili</b> makalihok kung wala ang IMAP c-kilyente nga mga laybrari gipagana/gitigom uban sa modyul sa PHP. Palehug sa pagkontak sa imong administrador aron sa pagsulbad niini nga issue.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Mga Outbound Email Account',
    'LNK_LIST_SCHEDULER' => 'Skidyol ninyo',
    'LNK_SEED_QUEUES' => 'Mga linya sa Binhi Gikan sa mga Grupo',
    'LBL_GROUPFOLDER_ID' => 'Polder Id sa Grupo',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Nagtugot sa mga tiggamit aron sa pagpadala sa mga emial gamit ang "Gikan" Ngalan ug Puloy-anan isip tubag sa puloy-anan',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kung kini nga kapilian ang mapili, ang Gikan nga Ngalan ug Gikan nga Email Address nalangkit niini nga grupo sa mail account mopakita isip usa ka kapilian alang sa Gikan nga lugar kung magkompos ug mga email para sa mga user nga adunay access sa grupo sa mail account.',
    'LBL_STATUS_ACTIVE' => 'Aktib',
    'LBL_STATUS_INACTIVE' => 'Dili aktib',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Awtomatikong Import ug mga Email',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Pahimangno: Ikaw nag-usab sa imong awtomatik nga pagpahimutang sa import nga mahimong magresulta sa pagkawagtang ug data.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Pahimangno: Ang awto nga imort kinahanglang paganahon kung awtomatikong magbuhat ug mga kaso.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Mga Draft',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Napadala nga mga Email',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archive nga Email',
    'LNK_MY_DRAFTS' => 'Mga Draft',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Tan-awa ang Email',
    'LNK_QUICK_REPLY' => 'Tubag',
    'LNK_SENT_EMAIL_LIST' => 'Napadala nga mga Email',
    'LBL_EDIT_LAYOUT' => 'I-edit ang Plano' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Giusab Ni',
    'LBL_SERVICE' => 'Serbisyo',
    'LBL_STORED_OPTIONS' => 'Tinapigang mga Kapilian',
    'LBL_GROUP_ID' => 'ID sa Grupo',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Mga Grupo para sa seguridad',


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
    'LBL_DISTRIB_METHOD' => 'Pamaagi sa Pag-apod-apod',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Isulat',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Sinugdanan',
    'LBL_SIGNATURE' => 'Ang Pirma',

    'LBL_OWNER_NAME' => 'Tag-iya',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
