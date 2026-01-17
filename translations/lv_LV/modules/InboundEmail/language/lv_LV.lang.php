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

    'ERR_BAD_LOGIN_PASSWORD' => 'Pieteikšanās vārds vai parole nav pareiza',
    'ERR_INI_ZLIB' => 'Pagaidām nevar izslēgt "Zlib" kompresiju.  "Iestatījumu pārbaude" var neizdoties.',
    'ERR_NO_IMAP' => 'Nav atrastas IMAP bibliotēkas.  Atrisiniet šo problēmu pirms ienākošo e-pastu procedūras turpināšanas',
    'ERR_NO_OPTS_SAVED' => 'Ienākošo e-pastu konti nav saglabāti ar optimāliem iestatījumiem.  Pārbaudiet iestatījumus',
    'ERR_TEST_MAILBOX' => 'Pārbaudiet iestatījumus un mēģiniet vēlreiz.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Piešķirt lietotājam',
    'LBL_AUTOREPLY' => 'automātiskās atbildes veidne',
    'LBL_AUTOREPLY_HELP' => 'Izvēlies automātisko atbildi, lai informētu e-pasta sūtītājus, ka viņu atbilde ir saņemta.',
    'LBL_BASIC' => 'Pasta konta informācija',
    'LBL_CASE_MACRO' => 'Case Macro',
    'LBL_CASE_MACRO_DESC' => 'Iestatiet makro, kas tiks analizēts un lietots, lai importēto e-pastu saistītu ar lietu.',
    'LBL_CASE_MACRO_DESC2' => 'Iestatiet to uz jebkādu vērtībai, izņemot <b>&#39;%1&#39;</b>.',
    'LBL_CLOSE_POPUP' => 'Aizvērt logu',
    'LBL_CREATE_TEMPLATE' => 'Jauns',
    'LBL_DELETE_SEEN' => 'Pēc importēšanas dzēst izlasītos e-pastus',
    'LBL_EDIT_TEMPLATE' => 'Rediģēt',
    'LBL_EMAIL_OPTIONS' => 'E-pasta apstrādes iespējas',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Noraidīto e-pastu iespējas',
    'LBL_FILTER_DOMAIN_DESC' => 'Norādi domēnu uz kuru nesūtīt automātiskās atbildes.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Izvēlies, lai automātiski izveidotu e-pasta ierakstus SuiteCRM sistēmā, priekš visiem ienākošajiem e-pastiem.',
    'LBL_FILTER_DOMAIN' => 'Nav automātiskās atbildes šim domēnam',
    'LBL_FIND_SSL_WARN' => '</br>SSL pārbaude var norisināties ilgu laiku.  Esiet pacietīgi!</br>',
    'LBL_FROM_ADDR' => '"No" adrese',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"No" vārds',
    'LBL_GROUP_QUEUE' => 'Piešķirt grupai',
    'LBL_HOME' => 'Sākums',
    'LBL_LIST_MAILBOX_TYPE' => 'Pasta konta lietojums',
    'LBL_LIST_NAME' => 'Vārds:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tips:',
    'LBL_LIST_SERVER_URL' => 'Pasta serveris:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Statuss',
    'LBL_LOGIN' => 'Lietotāja vārds',
    'LBL_USERNAME' => 'Lietotāja vārds',
    'LBL_MAILBOX_DEFAULT' => 'IESŪTNE',
    'LBL_MAILBOX_SSL' => 'Lietojiet SSL',
    'LBL_MAILBOX_TYPE' => 'Iespējamās darbības',
    'LBL_DISTRIBUTION_METHOD' => 'Izplatīšanas metode',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Jauna pieteikuma automātiskās atbildes veidne',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Izvēlies automātisko atbildi, lai paziņotu e-pasta sūtītājam, ka pieteikums ir izveidots. E-pasts satur pieteikuma numuru Tēmas sadaļā, kurš atbilst Pieteikumu Makro iestatījumiem. Šis atbildes ziņojums tiek nosūtīts tikai, kad pirmais e-pasts tiek saņemts.',
    'LBL_MAILBOX' => 'Kontrolētas mapes',
    'LBL_TRASH_FOLDER' => 'Atkritnes mape',
    'LBL_SENT_FOLDER' => 'Nosūtīto ziņu mape',
    'LBL_SELECT' => 'Izvēlieties',
    'LBL_MARK_READ_NO' => 'Pēc importa e-pasts serverī atzīmēts kā dzēsts',
    'LBL_MARK_READ_YES' => 'Pēc importa e-pasts atstāts serverī',
    'LBL_MARK_READ' => 'Atstāt ziņojumus uz servera',
    'LBL_MAX_AUTO_REPLIES' => 'Automātisko atbilžu skaits',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Ievadiet automātisko atbilžu maksimālo skaitu, kuru var 24 stundu laikā nosūtīt uz noteiktu e-pasta adresi.',
    'LBL_PERSONAL_MODULE_NAME' => 'Personīgais pasta konts',
    'LBL_CREATE_CASE' => 'Veidot pieteikumu no e-pasta',
    'LBL_CREATE_CASE_HELP' => 'Izvēlies, lai automātiski izveidotu pieteikumu SuiteCRM, no ienākošajiem e-pastiem.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Noraidīto e-pastu pastkaste',
    'LBL_MODULE_TITLE' => 'Ienākošais e-pasts',
    'LBL_NAME' => 'Vārds:',
    'LBL_NONE' => 'Nav',
    'LBL_ONLY_SINCE_NO' => 'Nē. Pārbaudīt visus servera e-pastus.',
    'LBL_ONLY_SINCE_YES' => 'Jā.',
    'LBL_PASSWORD' => 'Parole',
    'LBL_EMAIL_PASSWORD' => 'Parole',
    'LBL_POP3_SUCCESS' => 'Jūsu POP3 pārbaudes pieslēgums bija veiksmīgs.',
    'LBL_POPUP_TITLE' => 'Iestatījumu pārbaude',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Izvēlēties abonēto katalogu',
    'LBL_SELECT_TRASH_FOLDERS' => 'Izvēlies atkritnes mapi',
    'LBL_SELECT_SENT_FOLDERS' => 'Izvēlies nosūtīto ziņu mapi',
    'LBL_DELETED_FOLDERS_LIST' => 'Sekojošais katalogi %s neeksistē vai ir dzēsti no servera',
    'LBL_PORT' => 'Pasta servera ports',
    'LBL_REPLY_TO_NAME' => '"Atbildēt - kam" vārds',
    'LBL_REPLY_TO_ADDR' => '"Atbildēt - kam" adrese',
    'LBL_SAME_AS_ABOVE' => 'Lietojot no vārda/adreses',
    'LBL_SERVER_OPTIONS' => 'Paplašinātā uzstādīšana',
    'LBL_SERVER_TYPE' => 'Pasta servera protokols',
    'LBL_SERVER_PORT' => 'Pasta servera ports',
    'LBL_SERVER_URL' => 'Pasta servera adrese',
    'LBL_SSL_DESC' => 'Ja Jūsu pasta serveris atbalsta drošos soketa pieslēgumus, tad, aktivējot to, tiks iespaidoti SSL savienojumi.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Izvēlētajai darba grupai ir pieeja pasta kontam.',
    'LBL_SSL' => 'Lietojiet SSL',
    'LBL_STATUS' => 'Statuss',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Sistēmas noklusējums',
    'LBL_TEST_BUTTON_TITLE' => 'Tests',
    'LBL_TEST_SETTINGS' => 'Iestatījumu pārbaude',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Pieslēgums ir veiksmīgi pabeigts.',
    'LBL_TEST_WAIT_MESSAGE' => 'Uzgaidiet, lūdzu...',
    'LBL_WARN_IMAP_TITLE' => 'Deaktivēts ienākošais e-pasts',
    'LBL_WARN_IMAP' => 'Brīdinājumi:',
    'LBL_WARN_NO_IMAP' => 'Ienākošais e-pasts <b>nevar</b> darboties, ja IMAP c-klienta bibliotēkas nav aktivētas/saskaņotas ar PHP moduli.  Sazinieties ar savu administratoru, lai atrisinātu šo problēmu.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Outbound Email Accounts',
    'LNK_LIST_SCHEDULER' => 'Plānotāji',
    'LNK_SEED_QUEUES' => 'Atdaliet rindas no darba grupām',
    'LBL_GROUPFOLDER_ID' => 'Grupas mapes id',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Atļaut lietotājiem izmanto kā atbildes adresi sūtītāja vārdu un adresi',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Ja opcija tiks atzīmēta, tad lietotājiem, kuriem ir pieeja grupas e-pasta konta, veidojot jaunus e-pastu, kā sūtītāja vārds un adrese var tikt izmantots grupas parametros norādītais sūtītāja vārds un adrese.',
    'LBL_STATUS_ACTIVE' => 'Aktīvs',
    'LBL_STATUS_INACTIVE' => 'Neaktīvs',
    'LBL_IS_PERSONAL' => 'Personīgs',
    'LBL_IS_GROUP' => 'grupa',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importēt e-pastus automātiski',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Brīdinājums: Tu modificē automātiskās importēšanas iestatījumus, kas var novest pie datu pazaudēšanas.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Brīdinājums: Jābūt atļautam automātiskajam importam, kad tiek automātiski izveidoti pieteikumi.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Nosūtītie E-pasti',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arhivētie e-pasti',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'E-pasts',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Atbildēt',
    'LNK_SENT_EMAIL_LIST' => 'Nosūtītie e-pasti',
    'LBL_EDIT_LAYOUT' => 'Rediģēt izkārtojumu' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Rediģēja',
    'LBL_SERVICE' => 'Pakalpojums',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Drošības grupas',


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
    'LBL_DISTRIB_METHOD' => 'Izplatīšanas metode',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Tips:',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Noklusētā',
    'LBL_SIGNATURE' => 'Paraksts',

    'LBL_OWNER_NAME' => 'Īpašnieks',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
