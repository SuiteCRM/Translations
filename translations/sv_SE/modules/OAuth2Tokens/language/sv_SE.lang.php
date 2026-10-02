<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_MODULE_NAME' => 'OAuth2-tokens',
    'LBL_MODULE_TITLE' => 'OAuth2-tokens',
    'LBL_MODULE_ID'=> 'OAuth2-tokens',
    'LBL_TOKEN_ID'=> 'Token-ID',
    'LBL_CLIENT'=> 'Klient',
    'LBL_TOKEN_IS_REVOKED'=> 'Återkallad',
    'LBL_ACCESS_TOKEN_TYPE'=> 'Tokentyp',
    'LBL_ACCESS_TOKEN_EXPIRES'=> 'Åtkomsttoken upphör',
    'LBL_REFRESH_TOKEN_EXPIRES'=> 'Uppdateringstoken upphör',
    'LBL_GRANT_TYPE'=> 'Behörighetstyp',
    'LBL_SCOPES'=> 'Behörighetsomfång',
    'LBL_REVOKE_TOKEN'=> 'Återkalla token',
    'LBL_REVOKE_TOKENS'=> 'Återkalla token',
    'LBL_CLIENT_NAME'=> 'Klientnamn',
    'LBL_USER' => 'Kopplad användare',
    'LBL_IS_ACTIVE' => 'Endast aktiva token',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Lista OAuth2-token',
    'LNK_OAUTH2_CLIENT_LIST' => 'Lista OAuth2-klienter',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'Lista OAuth2-auktoriseringskoder',
    
    'LNK_NEW_OAUTH2_CLIENT' => 'Skapa OAuth2-klient',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Ny lösenordsklient',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Ny klient med klientautentiseringsuppgifter',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Ny implicit klient',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Ny auktoriseringsklient',

    'LBL_ACCESS_TOKEN' => 'Åtkomsttoken',
    'LBL_REFRESH_TOKEN' => 'Uppdatera token',
    'LBL_DELETE_CONFIRMATION' => 'Är du säker på att du vill ta bort den här posten? Klienten får inte längre någon auktoriseringskod.',
    'LBL_REVOKE_AND_DELETE_BUTTON_LABEL' => 'Återkalla och ta bort',
);
