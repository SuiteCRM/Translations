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


    'LBL_RE' => 'Պատասխանել․',

    'ERR_BAD_LOGIN_PASSWORD' => 'Սխալ Մուտքանուն կամ Գաղտնաբառ',
    'ERR_INI_ZLIB' => 'Չհաջողվեց ժամանակավորապես անջատել Zlib սեղմումը: "Թեստ Կառավարումը" կարող է ձախողվել։',
    'ERR_NO_IMAP' => 'IMAP գրադարանները չեն հայտնաբերվել։ Խնդրում ենք լուծել այս խնդիրը, մուտքային փոստի ախխատանքը շարունակելուց առաջ',
    'ERR_NO_OPTS_SAVED' => 'Օպտիմալ կարգավորումները չեն պահպանվել ձեր մուտքային նամակների համար։ Խնդրում ենք ստուգել կարգավորումները',
    'ERR_TEST_MAILBOX' => 'Խնդրում ենք ստուգել ձեր կարգավորումները և փորձել նորից։',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Նշանակել օգտվողին',
    'LBL_AUTOREPLY' => 'Ինքնապատասխանի ձևանմուշ',
    'LBL_AUTOREPLY_HELP' => 'Ավտոմատ կերպով տեղեկացնել էլ-նամակներ ուղարկողներին, որ իրենց հաղորդագրությունը ստացված է:',
    'LBL_BASIC' => 'Փոստի հաշվի ինֆորմացիա',
    'LBL_CASE_MACRO' => 'Գործի մակրո',
    'LBL_CASE_MACRO_DESC' => 'Սահմանել մակրո, որը պետք է լինի վերլուծված և օգտագործվի ներկրված նամակը Գործի հետ կապակցելու համար։',
    'LBL_CASE_MACRO_DESC2' => 'Կարող եք տեղադրել ցանկացած արժեք, բայց մի փոխեք այս <b>"%1"</b> արժեքը։',
    'LBL_CLOSE_POPUP' => 'Փակել պատուհանը',
    'LBL_CREATE_TEMPLATE' => 'Ստեղծել',
    'LBL_DELETE_SEEN' => 'Հեռացնել կարդացած նամակները ներմուծվելուց հետո',
    'LBL_EDIT_TEMPLATE' => 'Խմբագրել',
    'LBL_EMAIL_OPTIONS' => 'Էլ-փոստի մշակման ընտրանքները',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Վերադարձած նամակների մշակման ընտրանքներ',
    'LBL_FILTER_DOMAIN_DESC' => 'Նշել դոմենը, որի վրա չի ուղարկվի ոչ մի ավտո-պատասխան:',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Նշել, որպեսզի ավտոմատ կերպով ստեղծվեն գրառումները, SuiteCRM-ի բոլոր մուտքային էլ-նամակների համար։',
    'LBL_FILTER_DOMAIN' => 'Չուղարկել ինքնապատասխան այս դոմենին',
    'LBL_FIND_SSL_WARN' => '<br>SSL փորձարկումը կարող է երկար տևել։ Խնդրում ենք սպասել։<br>',
    'LBL_FROM_ADDR' => 'Ուղարկողի հասցեն',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Ուղարկողի անունից',
    'LBL_GROUP_QUEUE' => 'Նշանակել խմբին',
    'LBL_HOME' => 'Գլխավոր',
    'LBL_LIST_MAILBOX_TYPE' => 'Փոստային հաշվի օգտագործում',
    'LBL_LIST_NAME' => 'Անվանում․',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Տեսակ',
    'LBL_LIST_SERVER_URL' => 'Փոստի սերվեր',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Կարգավիճակ',
    'LBL_LOGIN' => 'Օգտվողի անուն',
    'LBL_USERNAME' => 'Օգտվողի անուն',
    'LBL_MAILBOX_DEFAULT' => 'Փոստարկղ',
    'LBL_MAILBOX_SSL' => 'Օգտագործել SSL',
    'LBL_MAILBOX_TYPE' => 'Հնարավոր գործողություններ',
    'LBL_DISTRIBUTION_METHOD' => 'Բաշխման մեթոդ',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Նոր գործի ինքնապատասխանի ձևանմուշ',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Ընտրեք ավտոպատասխան տեղեկացնելու էլ-նամակ ուղարկողներին, որ գործը ստեղծված է: էլ-նամակը պարունակում է գործի համարը Թեմայի տողում, որը համապատասխանում է Գործի Մակրո կարգավորումներին: Այս ավտոպատասխանը ուղարկվում է միայն այն դեպքում, երբ առաջին էլ-նամակը ընդունվել է ստացողի կողմից:',
    'LBL_MAILBOX' => 'Վերահսկվող պանակներ',
    'LBL_TRASH_FOLDER' => '"Աղբարկղ" պանակը',
    'LBL_SENT_FOLDER' => 'Ուղարկված նամակների պանակ',
    'LBL_SELECT' => 'Ընտրել',
    'LBL_MARK_READ_NO' => 'Էլ-նամակները նշվում են, որպես հեռացված, ներմուծելուց հետո',
    'LBL_MARK_READ_YES' => 'Էլ. փոստը ներմուծելուց հետո պահպանվում է սերվերում',
    'LBL_MARK_READ' => 'Թողնել հաղորդագրությունները սերվերին',
    'LBL_MAX_AUTO_REPLIES' => 'Ավտո-պատասխանների քանակը',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Սահմանել առավելագույն ավտո-պատասխանների թվաքանակ ուղարկելով եզակի էլ- փոստի հասցեին 24 ժամվա ընթացքում:',
    'LBL_PERSONAL_MODULE_NAME' => 'Անձնական էլ-փոստի հաշիվ',
    'LBL_CREATE_CASE' => 'Ստեղծել գործ էլ.փոստից',
    'LBL_CREATE_CASE_HELP' => 'Նշել, որպեսզի ավտոմատ կերպով մուտքային էլ-նամակներից ստեղծվեն գործի գրառումները։',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Վերադարձած նամակների փոստարկղ',
    'LBL_MODULE_TITLE' => 'Մտից էլ․նամակ',
    'LBL_NAME' => 'Անվանում',
    'LBL_NONE' => 'Ոչ ոք',
    'LBL_ONLY_SINCE_NO' => 'Ոչ: Ստուգեք փոստի սերվերի համապատասխան հաղորդագրությունները։',
    'LBL_ONLY_SINCE_YES' => 'Այո:',
    'LBL_PASSWORD' => 'Գաղտնաբառ',
    'LBL_EMAIL_PASSWORD' => 'Գաղտնաբառ',
    'LBL_POP3_SUCCESS' => 'Ձեր POP3 կապի փորձարկումը հաջողությամբ է կատարվել։',
    'LBL_POPUP_TITLE' => 'Կարգավորումների փորձարկում',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Ընտրել բաժանորդագրված պանակ(ներ)ը',
    'LBL_SELECT_TRASH_FOLDERS' => 'Ընտրեք "Աղբարկղ" պանակը',
    'LBL_SELECT_SENT_FOLDERS' => 'Ընտրել ուղարկված թղթապանակը',
    'LBL_DELETED_FOLDERS_LIST' => 'Հետևյալ պանակ(ներ)ը %s կամ գոյություն չունեն, կամ ջնջվել են սերվերից',
    'LBL_PORT' => 'Էլ-փոստի սերվերի պորտ',
    'LBL_REPLY_TO_NAME' => '"Պատասխանել" անունը',
    'LBL_REPLY_TO_ADDR' => '"Պատասխանել" հասցեն',
    'LBL_SAME_AS_ABOVE' => 'Օգտագործել անունը / հասցեն',
    'LBL_SERVER_OPTIONS' => 'Լրացուցիչ կարգաբերումներ',
    'LBL_SERVER_TYPE' => 'Փոստի սերվերի արձանագիր',
    'LBL_SERVER_PORT' => 'Էլ-փոստի սերվերի պորտ',
    'LBL_SERVER_URL' => 'Փոստի սերվերի հասցե',
    'LBL_SSL_DESC' => 'Եթե ձեր էլ-փոստի սերվերը ապահովում է կապի անվտանգությունը, երբ ներմուծվի էլ-նամակը, կապակցումը տվյալ օպցիայի կբերի SSL-կապի ստեղծմանը։',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Նշված թիմը ունի մուտքի իրավունք դեպի փոստի հաշիվ։',
    'LBL_SSL' => 'Օգտագործել SSL',
    'LBL_STATUS' => 'Կարգավիճակ',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Լռելյայն համակարգ',
    'LBL_TEST_BUTTON_TITLE' => 'Տեսթ',
    'LBL_TEST_SETTINGS' => 'Կարգավորումների փորձարկում',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Կապակցումը կատարվել է հաջողությամբ',
    'LBL_TEST_WAIT_MESSAGE' => 'Մեկ րոպե խնդրում եմ...',
    'LBL_WARN_IMAP_TITLE' => 'Մուտքային էլ-փոստը արգելափակված է',
    'LBL_WARN_IMAP' => 'Զգուշացում.',
    'LBL_WARN_NO_IMAP' => 'Մուտքային Էլ-փոստի <b>հնարավոր չէ</b> ֆունկցիան, չունի IMAP կլիենտի գրադարաններ, որոնք միացված/կազմված են PHP մոդուլի հետ: Խնդրում եմ միանալ ձեր ադմինիստրատորին այս խնդիրը լուծելու համար:',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Ելքային էլ-փոստի հաշիվներ',
    'LNK_LIST_SCHEDULER' => 'Պլանավորողներ',
    'LNK_SEED_QUEUES' => 'Ստեղծել խմբերի հերթերը',
    'LBL_GROUPFOLDER_ID' => 'Խմբակային պանակի ID',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Թույլատրել օգտագործողներին նամակներ ուղարկելիս, օգտագործել "Ումից" Անվանում և Հասցե դաշտը, որպես հետադարձ հասցե',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Երբ այս տարբերակը ընտրված է, Ում Անունից և Ում Էլ-փոստի հասցեից դաշտերը կապակցված են այս էլ-փոստի խմբակային հաշվի հետ, որը կհայտնվի որպես տարբերակ Ումից դաշտի համար, երբ կազմվում են էլ-նամակներ օգտվողների համար, որոնք ունեն մուտքի իրավունք դեպի էլ-փոստի խմբակային հաշիվ:',
    'LBL_STATUS_ACTIVE' => 'Ակտիվ է',
    'LBL_STATUS_INACTIVE' => 'Ակտիվ չէ',
    'LBL_IS_PERSONAL' => 'Անձնական',
    'LBL_IS_GROUP' => 'խումբ',
    'LBL_ENABLE_AUTO_IMPORT' => 'Ներմուծել էլ-փոստը ավտոմատ կերպով',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Զգուշացում. Դուք փոփոխում եք ձեր ավտոմատ ներմուծման կարգավորումը, որը կարող է հանգեցնել տվյալների կորստին։',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Զգուշացում․ Ավտոմատ կերպով գործերը ստեղծելու համար, ինքնաներմուծումը պետք է միացված լինի։',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Ուղարկած էլ-նամակ',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Արխիվացնել էլ-փոստերը',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Էլ-փոստ',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Պատասխանել',
    'LNK_SENT_EMAIL_LIST' => 'Ուղարկած էլ-նամակներ',
    'LBL_EDIT_LAYOUT' => 'Խմբագրել մակետը' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Փոփոխված է',
    'LBL_SERVICE' => 'Սպասարկում',
    'LBL_STORED_OPTIONS' => 'Stored Options',
    'LBL_GROUP_ID' => 'Group ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Օգտագործողների խմբեր',


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
    'LBL_DISTRIB_METHOD' => 'Բաշխման մեթոդ',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Տեսակ',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Նախնական',
    'LBL_SIGNATURE' => 'Ստորագրություն',

    'LBL_OWNER_NAME' => 'Սեփականատեր',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
