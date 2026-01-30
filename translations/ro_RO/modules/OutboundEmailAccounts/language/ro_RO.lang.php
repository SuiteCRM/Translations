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
    'LBL_ASSIGNED_TO_ID' => 'Id atribuit utilizatorului',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuit lui',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DELETED' => 'Şters',
    'LBL_NAME' => 'Nume',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_EDIT_BUTTON' => 'Editați',
    'LBL_REMOVE' => 'Înlăturați',
    'LBL_LIST_FORM_TITLE' => 'Conturi de e-mail de ieșire',
    'LBL_MODULE_NAME' => 'Conturi de e-mail de ieșire',
    'LBL_MODULE_TITLE' => 'Conturi de e-mail de ieșire',
    'LBL_HOMEPAGE_TITLE' => 'Conturile mele de e-mail de ieșire',
    'LNK_NEW_RECORD' => 'Creează conturi de e-mail de ieșire',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'Noul sistem suprascrie contul de email de ieșire',

    'LNK_LIST' => 'Conturi de e-mail de ieșire',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Intrare conturi de email',
    'LBL_SEARCH_FORM_TITLE' => 'Cautați conturi de e-mail de ieșire',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_NEW_FORM_TITLE' => 'Conturi noi de e-mailuri de ieșire',
    'LBL_USERNAME' => 'Nume utilizator',
    'LBL_PASSWORD' => 'Parolă',
    'LBL_SMTP_SERVERNAME' => 'Nume server SMTP',
    'LBL_SMTP_AUTH' => 'Autorizare SMTP',
    'LBL_SMTP_PORT' => 'Port SMTP',
    'LBL_SMTP_PROTOCOL' => 'Protocol SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Setări Cont',
    'LBL_OUTBOUND_CONFIGURATION' => 'Configurare ieșire',
    'LBL_CONNECTION_CONFIGURATION' => 'Configurare server',
    'LBL_CHANGE_PASSWORD' => 'Schimbați parola',
    'LBL_SEND_TEST_EMAIL' => 'Trimite un e-mail de testare',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administratorul nu a configurat încă acest contul implicit de ieșire. Imposibil de trimis e-mailul de testare.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizați autentificare SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Parolă',
    'LBL_MAIL_SMTPPORT' => 'Port',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Nume utilizator',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specificații SMTP Server',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Alegeți furnizorul de e-mail:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Parola Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Parolă Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Adresă Mail Gmail:',
    'LBL_EXCHANGE_SMTPPASS' => 'Parolă Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Numele Utilizator Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Portul serverului Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',

    'LBL_TYPE' => 'Tip',
    'LBL_MAIL_SENDTYPE' => 'Tip de trimitere a e-mailului',
    'LBL_MAIL_SMTPSSL' => 'Email SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '„De la„ nume',
    'LBL_SMTP_FROM_ADDR' => '„De la„ adresa',
    'LBL_REPLY_TO_NAME' => 'Nume expeditor',
    'LBL_REPLY_TO_ADDR' => 'Adresa de răspuns',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupuri Securitate',

    'LBL_OWNER' => 'Proprietar',
    'LBL_OWNER_NAME' => 'Proprietar',

    'LBL_AUTH_TYPE' => 'Tip autentificare',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Conexiune exterioară OAuth',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'Id conexiune OAuth externă',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Conexiune exterioară OAuth',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Conexiuni OAuth externe',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
