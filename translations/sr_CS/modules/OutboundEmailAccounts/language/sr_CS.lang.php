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
    'LBL_ASSIGNED_TO_ID' => 'ID broj dodeljenog korisnika',
    'LBL_ASSIGNED_TO_NAME' => 'Dodeljen',
    'LBL_ID' => 'ID broj',
    'LBL_DATE_ENTERED' => 'Datum kreiranja',
    'LBL_DATE_MODIFIED' => 'Datum izmene',
    'LBL_MODIFIED' => 'Izmenio',
    'LBL_MODIFIED_NAME' => 'Promenio',
    'LBL_CREATED' => 'Autor',
    'LBL_DESCRIPTION' => 'Opis',
    'LBL_DELETED' => 'Obrisan',
    'LBL_NAME' => 'Ime',
    'LBL_CREATED_USER' => 'Autor je korisnik',
    'LBL_MODIFIED_USER' => 'Promenio korisnik',
    'LBL_LIST_NAME' => 'Ime',
    'LBL_EDIT_BUTTON' => 'Izmeni',
    'LBL_REMOVE' => 'Ukloni',
    'LBL_LIST_FORM_TITLE' => 'Lista odlaznih email naloga',
    'LBL_MODULE_NAME' => 'Odlazni email nalozi',
    'LBL_MODULE_TITLE' => 'Odlazni email nalozi',
    'LBL_HOMEPAGE_TITLE' => 'Moji odlazni email nalozi',
    'LNK_NEW_RECORD' => 'Kreiraj odlazne email naloge',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Outbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Outbound Email Account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'New System Override Outbound Email Account',

    'LNK_LIST' => 'Odlazni email nalozi',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inbound Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Pretraži odlazne email naloge',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Pregled istorije',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Aktivnosti',
    'LBL_NEW_FORM_TITLE' => 'Novi odlazni email nalozi',
    'LBL_USERNAME' => 'Korisničko ime',
    'LBL_PASSWORD' => 'Lozinka',
    'LBL_SMTP_SERVERNAME' => 'Ime SMTP servera',
    'LBL_SMTP_AUTH' => 'SMTP Auth',
    'LBL_SMTP_PORT' => 'SMTP Port',
    'LBL_SMTP_PROTOCOL' => 'SMTP protokol',
    'LBL_EDITVIEW_PANEL1' => 'Podešavanje naloga',
    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_CHANGE_PASSWORD' => 'Promena lozinke',
    'LBL_SEND_TEST_EMAIL' => 'Pošalji test Email',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'Administrator nije konfigurisao podrazumevani nalog za odlazeću elektronsku poštu. Ne možete da pošaljete test elektronsku poruku.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Koristiti SMTP autentikaciju?',
    'LBL_MAIL_SMTPPASS' => 'Lozinka',
    'LBL_MAIL_SMTPPORT' => 'Port',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Korisničko ime',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifikacija SMTP servera:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Izaberite vašeg Email provajdera:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Lozinka za Yahoo! email:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID za Yahoo! email:',
    'LBL_GMAIL_SMTPPASS' => 'Lozinka za Gmail:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email adresa:',
    'LBL_EXCHANGE_SMTPPASS' => 'Lozinka za Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Korisničko ime za Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Port Exchange Servera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',

    'LBL_TYPE' => 'Tip',
    'LBL_MAIL_SENDTYPE' => 'Mail Send Type',
    'LBL_MAIL_SMTPSSL' => 'Mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => '"From" name',
    'LBL_SMTP_FROM_ADDR' => '"From" address',
    'LBL_REPLY_TO_NAME' => '"Reply-to" name',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" address',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sigurnosne grupe',

    'LBL_OWNER' => 'Vlasnik',
    'LBL_OWNER_NAME' => 'Vlasnik',

    'LBL_AUTH_TYPE' => 'Auth Type',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_EXISTS' => 'System Outbound Email Account already exists. Please remove it before creating a new one.',
    'LBL_ERROR_OUTBOUND_EMAIL_SYSTEM_IS_NOT_GROUP' => 'When configuring the System Outbound account using OAuth, you must select a Group-Type External Oauth Connection',
    'LBL_ERROR_OUTBOUND_EMAIL_CONNECTION_TYPE_MISMATCH' => 'When configuring the Outbound account using OAuth, you must select a External Oauth Connection the same type as the Outbound Email Account (Group or Personal)',
);
