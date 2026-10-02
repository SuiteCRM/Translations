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
    'LBL_ASSIGNED_TO_ID' => 'Tilldelad användar-ID',
    'LBL_ASSIGNED_TO_NAME' => 'Tilldelad till',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Skapad den',
    'LBL_DATE_MODIFIED' => 'Ändrad den',
    'LBL_MODIFIED' => 'Ändrad av',
    'LBL_MODIFIED_NAME' => 'Namn på den som ändrade',
    'LBL_CREATED' => 'Skapad av',
    'LBL_DESCRIPTION' => 'Beskrivning',
    'LBL_DELETED' => 'Borttagen',
    'LBL_NAME' => 'Namn',
    'LBL_CREATED_USER' => 'Skapad av användaren',
    'LBL_MODIFIED_USER' => 'Ändrad av användaren',
    'LBL_LIST_NAME' => 'Namn',
    'LBL_EDIT_BUTTON' => 'Redigera',
    'LBL_REMOVE' => 'Ta bort',
    'LBL_LIST_FORM_TITLE' => 'Lista över konton för utgående e-post',
    'LBL_MODULE_NAME' => 'Konton för utgående e-post',
    'LBL_MODULE_TITLE' => 'Konton för utgående e-post',
    'LBL_HOMEPAGE_TITLE' => 'Mina konton för utgående e-post',
    'LNK_NEW_RECORD' => 'Skapa konton för utgående e-post',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nytt personligt konto',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nytt gruppkonto',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'Nytt systemkonto för utgående e-post med åsidosättning',

    'LNK_LIST' => 'Konton för utgående e-post',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Konton för inkommande e-post',
    'LBL_SEARCH_FORM_TITLE' => 'Sök efter konton för utgående e-post',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Visa historik',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktiviteter',
    'LBL_NEW_FORM_TITLE' => 'Nya konton för utgående e-post',
    'LBL_USERNAME' => 'Användarnamn',
    'LBL_PASSWORD' => 'Lösenord',
    'LBL_SMTP_SERVERNAME' => 'SMTP-servernamn',
    'LBL_SMTP_AUTH' => 'SMTP-autentisering',
    'LBL_SMTP_PORT' => 'SMTP-port',
    'LBL_SMTP_PROTOCOL' => 'SMTP-protokoll',
    'LBL_EDITVIEW_PANEL1' => 'Kontoinställningar',
    'LBL_OUTBOUND_CONFIGURATION' => 'Konfiguration av utgående e-post',
    'LBL_CONNECTION_CONFIGURATION' => 'Serverkonfiguration',
    'LBL_CHANGE_PASSWORD' => 'Ändra lösenord',
    'LBL_SEND_TEST_EMAIL' => 'Skicka testmeddelande',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administratören har ännu inte konfigurerat standardkontot för utgående e-post. Det går inte att skicka testmeddelandet.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Använd SMTP-autentisering?',
    'LBL_MAIL_SMTPPASS' => 'Lösenord',
    'LBL_MAIL_SMTPPORT' => 'Port',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Användarnamn',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-serverinställningar',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Välj e-postleverantör:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail-lösenord:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail-ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail-lösenord:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail-e-postadress:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange-lösenord:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange-användarnamn:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange-serverport:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange-server:',

    'LBL_TYPE' => 'Typ',
    'LBL_MAIL_SENDTYPE' => 'Typ av e-postsändning',
    'LBL_MAIL_SMTPSSL' => 'E-post: SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Namn i fältet ”Från”',
    'LBL_SMTP_FROM_ADDR' => 'Adress i fältet ”Från”',
    'LBL_REPLY_TO_NAME' => 'Namn i fältet ”Svara till”',
    'LBL_REPLY_TO_ADDR' => 'Adress i fältet ”Svara till”',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Säkerhetsgrupper',

    'LBL_OWNER' => 'Ägare',
    'LBL_OWNER_NAME' => 'Ägare',
    'LBL_IS_DEFAULT' => 'Standard',
    'LBL_IS_PERSONAL' => 'Personligt',
    'LBL_SET_AS_DEFAULT_BUTTON' => 'Ange som standard',

    'LBL_AUTH_TYPE' => 'Autentiseringstyp',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Extern OAuth-anslutning',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'ID för extern OAuth-anslutning',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Extern OAuth-anslutning',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Externa OAuth-anslutningar',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'Systemkontot för utgående e-post finns redan. Ta bort det innan du skapar ett nytt.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'När du konfigurerar systemkontot för utgående e-post med OAuth måste du välja en extern OAuth-anslutning av grupptyp',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'När du konfigurerar kontot för utgående e-post med OAuth måste du välja en extern OAuth-anslutning av samma typ som e-postkontot (grupp eller personlig)',
);
