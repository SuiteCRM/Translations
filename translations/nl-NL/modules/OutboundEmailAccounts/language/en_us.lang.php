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
    'LBL_ASSIGNED_TO_ID' => 'Toegewezen gebruiker-Id',
    'LBL_ASSIGNED_TO_NAME' => 'Toegewezen aan',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Aanmaakdatum',
    'LBL_DATE_MODIFIED' => 'Datum gewijzigd',
    'LBL_MODIFIED' => 'Gewijzigd door',
    'LBL_MODIFIED_NAME' => 'Gewijzigd door naam',
    'LBL_CREATED' => 'Aangemaakt door',
    'LBL_DESCRIPTION' => 'Omschrijving',
    'LBL_DELETED' => 'Verwijderd',
    'LBL_NAME' => 'Naam',
    'LBL_CREATED_USER' => 'Aangemaakt door gebruiker',
    'LBL_MODIFIED_USER' => 'Gewijzigd door gebruiker',
    'LBL_LIST_NAME' => 'Naam',
    'LBL_EDIT_BUTTON' => 'Bewerken',
    'LBL_REMOVE' => 'Verwijderen',
    'LBL_LIST_FORM_TITLE' => 'Lijst van uitgaande e-mailaccounts',
    'LBL_MODULE_NAME' => 'Uitgaande e-mailaccounts',
    'LBL_MODULE_TITLE' => 'Uitgaande e-mailaccounts',
    'LBL_HOMEPAGE_TITLE' => 'Mijn uitgaande e-mailaccounts',
    'LNK_NEW_RECORD' => 'Uitgaande e-mailaccounts aanmaken',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nieuw persoonlijk account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nieuwe Groep-account',
    'LNK_LIST_CREATE_SYSTEM_OVERRIDE_GROUP' => 'Nieuw systeem overschrijven uitgaande e-mailaccount',

    'LNK_LIST' => 'Uitgaande e-mailaccounts',
    'LNK_LIST_INBOUND_EMAIL_ACCOUNTS' => 'Inkomende Email Accounts',
    'LBL_SEARCH_FORM_TITLE' => 'Zoek uitgaande e-mailaccounts',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Bekijk geschiedenis',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activiteiten',
    'LBL_NEW_FORM_TITLE' => 'Nieuwe uitgaande e-mailaccounts',
    'LBL_USERNAME' => 'Gebruikersnaam',
    'LBL_PASSWORD' => 'Wachtwoord',
    'LBL_SMTP_SERVERNAME' => 'SMTP-servernaam',
    'LBL_SMTP_AUTH' => 'SMTP-Auth',
    'LBL_SMTP_PORT' => 'SMTP port',
    'LBL_SMTP_PROTOCOL' => 'SMTP-Protocol',
    'LBL_EDITVIEW_PANEL1' => 'Account instellingen',
    'LBL_OUTBOUND_CONFIGURATION' => 'Uitgaande configuratie',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuratie',
    'LBL_CHANGE_PASSWORD' => 'Verander wachtwoord',
    'LBL_SEND_TEST_EMAIL' => 'Stuur test e-mail',

    // for outbound email dialog
    'LBL_MISSING_DEFAULT_OUTBOUND_SMTP_SETTINGS' => 'De beheerder is nog niet geconfigureerd voor het standaard uitgaande account. Niet in staat om de test e-mail te sturen.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gebruik SMTP authenticatie?',
    'LBL_MAIL_SMTPPASS' => 'Wachtwoord',
    'LBL_MAIL_SMTPPORT' => 'Poort',
    'LBL_MAIL_SMTPSERVER' => 'Server',
    'LBL_MAIL_SMTPUSER' => 'Gebruikersnaam',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP-server specificatie',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Kies uw e-mailprovider:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo Mail Wachtwoord:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo Mail ID:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail-wachtwoord:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail-adres:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Wachtwoord:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Gebruikersnaam:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Poort:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',

    'LBL_TYPE' => 'Type',
    'LBL_MAIL_SENDTYPE' => 'E-mail verzendwijze',
    'LBL_MAIL_SMTPSSL' => 'E-mail SMTP/SSL',
    'LBL_SMTP_FROM_NAME' => 'Van naam',
    'LBL_SMTP_FROM_ADDR' => 'Van adres',
    'LBL_REPLY_TO_NAME' => '"Reply-to" naam',
    'LBL_REPLY_TO_ADDR' => '"Reply-to" adres',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Security Groepen',

    'LBL_OWNER' => 'Eigenaar',
    'LBL_OWNER_NAME' => 'Eigenaar',

    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Externe OAuth verbindingen'
);
