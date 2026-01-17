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
    'LBL_ASSIGNED_TO_ID' => 'Ang nagagamit sa Id ay nagtalaga',
    'LBL_ASSIGNED_TO_NAME' => 'Magtalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_NAME' => 'Ang Pangalan',
    'LBL_CREATED_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_MODIFIED_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_EDIT_BUTTON' => 'I-edit',
    'LBL_REMOVE' => 'Alisin',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga akawnt ng email na papalabas',
    'LBL_MODULE_NAME' => 'Ang papalabas ng mga email akawnt',
    'LBL_MODULE_TITLE' => 'Ang papalabas ng mga email akawnt',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mg akawnt ng email na papalabas',
    'LNK_NEW_RECORD' => 'Gumawa ng mga akawnt ng email na papalabas',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Ang papalabas ng mga email akawnt',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Hanapin ang mga akawnt ng email na papalabas',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tanawin ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_NEW_FORM_TITLE' => 'Bagong mga akawnt ng email na papalabas',
    'LBL_USERNAME' => 'Username',
    'LBL_PASSWORD' => 'Ang Password',
    'LBL_SMTP_SERVERNAME' => 'Pangalan ng Server ng SMTP',
    'LBL_SMTP_AUTH' => 'Auth ng SMTP',
    'LBL_SMTP_PORT' => 'Ang port ng SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocol ng SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Mga setting ng akawnt',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Magpalit ng password',
    'LBL_SEND_TEST_EMAIL' => 'Sinubukang padala ang Email',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Ang tagapahamala ay hindi pa nakakompigura sa default na palabas na akawnt. Hindi makapadala ng test na email.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gamitin ang Awtentikasyon sa SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Ang Password',
    'LBL_MAIL_SMTPPORT' => 'Ang Port',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Username',
    'LBL_MAIL_SMTP_SETTINGS' => 'Espesipikasyon sa Serber ng SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pumili ng tagapagpapabigay ng iyong Email:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Password sa Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID ng Yahoo! Mail:',
    'LBL_GMAIL_SMTPPASS' => 'Password sa Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Email Address sa Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Pagpapalit ng Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Pagpapalit ng Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Pagpapalit sa Port ng Serber:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Pagpapalit ng Serber:',

    'LBL_TYPE' => 'Klase',
    'LBL_MAIL_SENDTYPE' => 'Uri ng mail na ipadala',
    'LBL_MAIL_SMTPSSL' => 'SMTP/SSL na Mail',
    'LBL_SMTP_FROM_NAME' => '"Mula" pangalan',
    'LBL_SMTP_FROM_ADDR' => '"Mula" address',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Mga grupong seguridad',

    'LBL_OWNER' => 'May-ari',
    'LBL_OWNER_NAME' => 'May-ari',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
