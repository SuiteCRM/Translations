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
    'LBL_MODULE_NAME' => 'OAuth2-auktoriseringskoder',
    'LBL_MODULE_TITLE' => 'OAuth2-auktoriseringskoder',
    'LBL_MODULE_ID'=> 'OAuth2-auktoriseringskoder',
    'LBL_CLIENT' => 'Klient',
    'LBL_SCOPES' => 'Behörighetsomfång',
    'LBL_AUTO_AUTHORIZE' => 'Godkänn automatiskt',
    'LBL_USER' => 'Godkännande användare',
    'LBL_OAUTH_AUTHORIZE_AND_SAVE' => 'Godkänn',
    'LBL_OAUTH_AUTHORIZE_ONCE' => 'Godkänn en gång',
    'LBL_OAUTH_ABORT' => 'Avböj',
    'LBL_OAUTH_CLIENT' => 'Klient:',
    'LBL_OAUTH_WHO_IS_REQUESTING' => 'Vem begär åtkomst (klient):',
    'LBL_AUTH_CODE_EXPIRES' => 'Auktoriseringskoden upphör',
    'LBL_OAUTH_REDIRECT' => 'Omdirigerings-URL',
    'LBL_CURRENT_USER' => 'Användare',
    'LBL_OAUTH_REQUESTED_PERMISSIONS' => 'Begärda behörigheter',
    'LBL_OAUTH_ACCESS_TO_USER_INFO' => 'Åtkomst till all information du kan se i CRM-systemet',
    'LBL_OAUTH_INFO_1' => 'Den här applikationen begär åtkomst till ditt SuiteCRM-konto.',
    'LBL_OAUTH_INFO_2' => 'Om du inte känner till eller litar på klienten ska du inte ge åtkomst.',
    'LBL_OAUTH_BACK_TO_HOME' => '<< Klicka här för att gå tillbaka till instrumentpanelen.',
    'LBL_INVALID_REQUEST' => 'Ogiltig begäran',
    'LBL_DELETE_BUTTON_LABEL' => 'Återkalla och ta bort',
    'LBL_DELETE_BUTTON_TITLE' => 'Återkalla och ta bort',
    'LBL_DELETE' => 'Återkalla och ta bort',
    'LBL_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort den här posten? Klienten får inte längre någon auktoriseringskod.',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Lista OAuth2-token',
    'LNK_OAUTH2_CLIENT_LIST' => 'Lista OAuth2-klienter',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'Lista OAuth2-auktoriseringskoder',

    'LNK_NEW_OAUTH2_CLIENT' => 'Skapa OAuth2-klient',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Ny lösenordsklient',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Ny klient med klientautentiseringsuppgifter',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Ny implicit klient',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Ny auktoriseringsklient',

    'LBL_OAUTH_AUTHORIZATION_REQUESTED' => 'Auktorisering begärd',
    'LBL_OAUTH_AUTHORIZE' => 'Godkänn',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS' => 'Moduldata',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS_DESC' => 'Ger full åtkomst till data i alla moduler du har åtkomst till',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS' => 'Personliga användaruppgifter',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS_DESC' => 'Ger åtkomst till personliga användaruppgifter, till exempel namn och e-postadress',
    'LBL_OAUTH_AUTHORIZING_WILL_REDIRECT' => 'Godkännande omdirigerar till:',
    'LBL_OAUTH_NOTE' => 'Obs:',
    'LBL_OAUTH_CLIENT_INFO_DESCRIPTION' => 'vill ha åtkomst till ditt konto',
    'LBL_OAUTH_CLIENT_INFO' => 'Klientinformation',
];
