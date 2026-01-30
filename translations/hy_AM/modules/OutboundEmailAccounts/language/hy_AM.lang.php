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
    'LBL_ASSIGNED_TO_ID' => 'Պատասխանատու- ID',
    'LBL_ASSIGNED_TO_NAME' => 'Կատարող',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Ստեղծման ամսաթիվ',
    'LBL_DATE_MODIFIED' => 'Փոփոխման ամսաթիվ',
    'LBL_MODIFIED' => 'Փոփոխված է',
    'LBL_MODIFIED_NAME' => 'Փոփոխված է ըստ անվանման',
    'LBL_CREATED' => 'Ստեղծված է',
    'LBL_DESCRIPTION' => 'Նկարագրություն',
    'LBL_DELETED' => 'Ջնջված է',
    'LBL_NAME' => 'Անվանում',
    'LBL_CREATED_USER' => 'Փոփոխված է օգտագործողի կողմից ',
    'LBL_MODIFIED_USER' => 'Փոփոխված է օգտագործողի կողմից',
    'LBL_LIST_NAME' => 'Անվանում',
    'LBL_EDIT_BUTTON' => 'Խմբագրել',
    'LBL_REMOVE' => 'Հեռացնել',
    'LBL_LIST_FORM_TITLE' => 'Ելքային էլ-փոստի հաշիվների ցուցակը',
    'LBL_MODULE_NAME' => 'Ելքային էլ-փոստի հաշիվներ',
    'LBL_MODULE_TITLE' => 'Ելքային էլ-փոստի հաշիվներ',
    'LBL_HOMEPAGE_TITLE' => 'Իմ ելքային էլ-փոստի հաշիվները',
    'LNK_NEW_RECORD' => 'Ստեղծել ելքային էլ-փոստի հաշիվներ',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Ելքային էլ-փոստի հաշիվներ',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Որոնել ելքային էլ-փոստի հաշիվները',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Դիտել պատմությունը',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Գործունեություն',
    'LBL_NEW_FORM_TITLE' => 'Նոր ելքային էլ-փոստի հաշիվներ',
    'LBL_USERNAME' => 'Օգտվողի անունը',
    'LBL_PASSWORD' => 'Գաղտնաբառ',
    'LBL_SMTP_SERVERNAME' => 'SMTP սերվերի անունը',
    'LBL_SMTP_AUTH' => 'SMTP իսկությունը',
    'LBL_SMTP_PORT' => 'SMTP Պորտ',
    'LBL_SMTP_PROTOCOL' => 'SMTP հաղորդակարգ',
    'LBL_EDITVIEW_PANEL1' => 'Հաշվի կարգավորումներ',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Փոխել Գաղտնաբառը',
    'LBL_SEND_TEST_EMAIL' => 'Փորձնական էլեկտրոնային նամակի ուղարկում',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Ադմինիստրատորը դեռ չի կարգավորել ելքային փոստի սերվերը։ Անհնար է ուղարկել փորձնական էլեկտրոնային նամակը։',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Օգտագործե՞լ SMTP-իսկորոշումը։',
    'LBL_MAIL_SMTPPASS' => 'Գաղտնաբառ',
    'LBL_MAIL_SMTPPORT' => 'Նավահանգիստ',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Օգտվողի անունը',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Specification',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Ընտրեք Ձեր էլ-փոստի մատակարարին․',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! էլ-փոստ-գաղտնաբառ․',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! էլ-փոստ ID․',
    'LBL_GMAIL_SMTPPASS' => 'Gmail գաղտնաբառ․',
    'LBL_GMAIL_SMTPUSER' => 'Gmail էլ-փոստի հասցե․',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange սերվեր․',

    'LBL_TYPE' => 'Տեսակ',
    'LBL_MAIL_SENDTYPE' => 'Mail Send Type',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"From" name',
    'LBL_SMTP_FROM_ADDR' => '"From" address',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Օգտագործողների խմբեր',

    'LBL_OWNER' => 'Սեփականատեր',
    'LBL_OWNER_NAME' => 'Սեփականատեր',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
