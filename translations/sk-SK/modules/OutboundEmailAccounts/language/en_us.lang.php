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
    'LBL_ASSIGNED_TO_ID' => 'Priradené ID používateľa',
    'LBL_ASSIGNED_TO_NAME' => 'Priradené ku',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Dátum vytvorenia',
    'LBL_DATE_MODIFIED' => 'Dátum úpravy',
    'LBL_MODIFIED' => 'Upravil',
    'LBL_MODIFIED_NAME' => 'Upravil',
    'LBL_CREATED' => 'Vytvoril',
    'LBL_DESCRIPTION' => 'Popis',
    'LBL_DELETED' => 'Vymazané',
    'LBL_NAME' => 'Meno',
    'LBL_CREATED_USER' => 'Vytvoril',
    'LBL_MODIFIED_USER' => 'Upravil',
    'LBL_LIST_NAME' => 'Meno',
    'LBL_EDIT_BUTTON' => 'Upraviť',
    'LBL_REMOVE' => 'Odstrániť',
    'LBL_LIST_FORM_TITLE' => 'Zoznam účtov odchazajúcich e-mailov',
    'LBL_MODULE_NAME' => 'Odchadzajúce e-mailové účty',
    'LBL_MODULE_TITLE' => 'Odchadzajúce e-mailové účty',
    'LBL_HOMEPAGE_TITLE' => 'Moje odchadzajúce e-mailové účty',
    'LNK_NEW_RECORD' => 'Vytvoriť účty odchadzajúich e-mailov',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Odchadzajúce e-mailové účty',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadať účty odchadzajúcich e-mailov',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Zobraziť Históriu',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivity',
    'LBL_NEW_FORM_TITLE' => 'Nové účty odchazdajúcich e-mailov',
    'LBL_USERNAME' => 'Užívateľské meno',
    'LBL_PASSWORD' => 'Heslo',
    'LBL_SMTP_SERVERNAME' => 'Názov SMTP serveru',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'SMTP Port:',
    'LBL_SMTP_PROTOCOL' => 'SMTP Protokol',
    'LBL_EDITVIEW_PANEL1' => 'Account settings',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Zmena generovaného hesla',
    'LBL_SEND_TEST_EMAIL' => 'Odoslať skúšobný e-mail',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Správca doteraz nakonfiguroval predvolený Odchádzajúci účet. Nemožno odoslať skúšobný e-mail.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Použiť overenie SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Heslo',
    'LBL_MAIL_SMTPPORT' => 'Port',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Užívateľské meno',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP špecifikácia servera',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte si poskytovateľa e-mailu',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! heslo mailu',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Heslo:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-mailová adresa:',
    'LBL_EXCHANGE_SMTPPASS' => 'Zmena hesla',
    'LBL_EXCHANGE_SMTPUSER' => 'Zmena používateľkského mena',
    'LBL_EXCHANGE_SMTPPORT' => 'Zmena portu servera',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zmena servera',

    'LBL_TYPE' => 'Typ',
    'LBL_MAIL_SENDTYPE' => 'Typ odosielanej pošty',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Méno odosielateľa',
    'LBL_SMTP_FROM_ADDR' => 'E-mail odosielateľa',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'CRM Skupiny',

    'LBL_OWNER' => 'Vlastník',
    'LBL_OWNER_NAME' => 'Vlastník',

    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections'
);
