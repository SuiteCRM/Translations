<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2 Autorisatie Codes',
    'LBL_MODULE_TITLE' => 'OAuth2 Authorization Codes',
    'LBL_MODULE_ID'=> 'OAuth2 Authorization Codes',
    'LBL_CLIENT' => 'Client',
    'LBL_SCOPES' => 'Reikwijdte',
    'LBL_AUTO_AUTHORIZE' => 'Automatisch goedkeuren',
    'LBL_USER' => 'Gebruiker autoriseren',
    'LBL_OAUTH_AUTHORIZE_AND_SAVE' => 'Autoriseren',
    'LBL_OAUTH_AUTHORIZE_ONCE' => 'Eenmaal machtigen',
    'LBL_OAUTH_ABORT' => 'Decline',
    'LBL_OAUTH_CLIENT' => 'Client:',
    'LBL_OAUTH_WHO_IS_REQUESTING' => 'Wie vraagt om (Client):',
    'LBL_AUTH_CODE_EXPIRES' => 'Authenticatie code verloopt',
    'LBL_OAUTH_REDIRECT' => 'Omleidings URL',
    'LBL_CURRENT_USER' => 'User',
    'LBL_OAUTH_REQUESTED_PERMISSIONS' => 'Aangevraagde permissies',
    'LBL_OAUTH_ACCESS_TO_USER_INFO' => 'Toegang tot alle informatie die u kunt zien op de CRM',
    'LBL_OAUTH_INFO_1' => 'Deze applicatie vraagt om toegang tot uw SuiteCRM account.',
    'LBL_OAUTH_INFO_2' => 'In het geval u de klant niet kent of vertrouwt, moet u geen toegang verlenen.',
    'LBL_OAUTH_BACK_TO_HOME' => '<< Klik hier om terug te gaan naar het dashboard.',
    'LBL_INVALID_REQUEST' => 'Ongeldige aanvraag',
    'LBL_DELETE_BUTTON_LABEL' => 'Intrekken en verwijderen',
    'LBL_DELETE_BUTTON_TITLE' => 'Revoke and Delete',
    'LBL_DELETE' => 'Revoke and Delete',
    'LBL_DELETE_CONFIRMATION' => 'Weet u zeker dat u dit record wilt verwijderen? De klant krijgt geen autorisatie code meer.',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Maak een lijst van OAuth2-tokens',
    'LNK_OAUTH2_CLIENT_LIST' => 'Lijst van OAuth2 Clients',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'Lijst OAuth2 autorisatie codes',

    'LNK_NEW_OAUTH2_CLIENT' => 'Maak een OAuth2 Client',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Nieuwe wachtwoord voor client',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Nieuwe cliënt gegevens',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Nieuwe impliciete Cliënt',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Nieuwe autorisatie cliënt',

    'LBL_OAUTH_AUTHORIZATION_REQUESTED' => 'Toestemming aangevraagd',
    'LBL_OAUTH_AUTHORIZE' => 'Authorize',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS' => 'Module gegevens',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS_DESC' => 'Geeft volledige toegang tot de gegevens van alle modules waartoe u toegang heeft',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS' => 'Persoonlijke gebruikers gegevens',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS_DESC' => 'Geeft toegang tot persoonlijke gebruikers gegevens zoals naam en e-mailadres',
    'LBL_OAUTH_AUTHORIZING_WILL_REDIRECT' => 'Autorisatie wordt doorgestuurd naar:',
    'LBL_OAUTH_NOTE' => 'Note:',
    'LBL_OAUTH_CLIENT_INFO_DESCRIPTION' => 'wil toegang tot je account',
    'LBL_OAUTH_CLIENT_INFO' => 'Client informatie',
];
