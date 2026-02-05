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
    'LBL_ASSIGNED_TO_ID' => 'ID přiřazeného uživatele',
    'LBL_ASSIGNED_TO_NAME' => 'Přiřazeno k',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Datum vytvoření',
    'LBL_DATE_MODIFIED' => 'Datum změny',
    'LBL_MODIFIED' => 'Změnil',
    'LBL_MODIFIED_NAME' => 'Změněno dle Jména',
    'LBL_CREATED' => 'Vytvořeno',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazáno',
    'LBL_NAME' => 'Název',
    'LBL_CREATED_USER' => 'Vytvořeno dle Uživatele',
    'LBL_MODIFIED_USER' => 'Změněno dle Uživatele',
    'LBL_LIST_NAME' => 'Název',
    'LBL_EDIT_BUTTON' => 'Upravit',
    'LBL_REMOVE' => 'Odebrat',
    'LBL_LIST_FORM_TITLE' => 'Seznam účtů odchozích e-mailů',
    'LBL_MODULE_NAME' => 'Odchozí e-mailové účty',
    'LBL_MODULE_TITLE' => 'Odchozí e-mailové účty',
    'LBL_HOMEPAGE_TITLE' => 'Moje odchozí e-mailové účty',
    'LNK_NEW_RECORD' => 'Vytvořit účty odchozích e-mailů',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Odchozí e-mailové účty',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledat účty odchozích e-mailů',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historie',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nové účty odchozích e-mailů',
    'LBL_USERNAME' => 'Uživatelské jméno',
    'LBL_PASSWORD' => 'Heslo',
    'LBL_SMTP_SERVERNAME' => 'Název SMTP serveru',
    'LBL_SMTP_AUTH' => 'SMTP auth',
    'LBL_SMTP_PORT' => 'SMTP port',
    'LBL_SMTP_PROTOCOL' => 'Protokol SMTP',
    'LBL_EDITVIEW_PANEL1' => 'Nastavení účtu',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Změnit heslo',
    'LBL_SEND_TEST_EMAIL' => 'Odeslat zkušební E-mail',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrátor nemá nakonfigurován výchozí účet pro odchozí poštu.  Nelze odeslat zkušební e-mail.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Použít SMTP autentifikaci?',
    'LBL_MAIL_SMTPPASS' => 'Heslo',
    'LBL_MAIL_SMTPPORT' => 'Port',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Uživatelské jméno',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifikace serveru SMTP',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte si Vašeho poskytovatele e-mailu:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail heslo:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail heslo:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-mailová adresa:',
    'LBL_EXCHANGE_SMTPPASS' => 'Vyměnit heslo:',
    'LBL_EXCHANGE_SMTPUSER' => 'Vyměnit uživatelské jméno:',
    'LBL_EXCHANGE_SMTPPORT' => 'Port serveru Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Vyměnit server:',

    'LBL_TYPE' => 'Typ',
    'LBL_MAIL_SENDTYPE' => 'Typ odeslání pošty',
    'LBL_MAIL_SMTPSSL' => 'Pošta SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Jméno "Od"',
    'LBL_SMTP_FROM_ADDR' => 'Adresa "Od"',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Skupiny zabezpečení',

    'LBL_OWNER' => 'Majitel',
    'LBL_OWNER_NAME' => 'Majitel',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
