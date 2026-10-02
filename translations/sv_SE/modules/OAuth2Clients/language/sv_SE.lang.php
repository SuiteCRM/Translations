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

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2-klienter',
    'LBL_MODULE_TITLE' => 'OAuth2-klienter',
    'LBL_MODULE_ID' => 'OAuth2-klienter',
    'LBL_IS_CONFIDENTIAL' => 'Är konfidentiell',
    'LBL_SECRET' => 'Hemlig',
    'LBL_SECRET_HASHED' => 'Ändra hemlighet',
    'LBL_LEAVE_BLANK' => 'Lämna tomt om du inte ändrar den',
    'LBL_REMEMBER_SECRET' => 'Anteckna hemligheten eftersom den inte kommer att vara tillgänglig efter att du har sparat.',
    'LBL_REDIRECT_URL' => 'Omdirigerings-URL',
    'LBL_ALLOWED_GRANT_TYPE' => 'Tillåten åtkomsträttighet',
    'LBL_DURATION_AMOUNT' => 'Varaktighet',
    'LBL_DURATION_UNIT' => 'Varaktighetsenhet',
    'LBL_DURATION_VALUE' => 'Varaktighetsvärde',
    'LBL_USER' => 'Kopplad användare',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Aktiva OAuth2-tokens',
    'LBL_TOKEN_ID' => 'Token',
    'LBL_DATE_ENTERED' => 'Datum skapad',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Åtkomsttoken upphör',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Uppdateringstoken upphör',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Lista OAuth2-tokens',
    'LNK_OAUTH2_CLIENT_LIST' => 'Lista OAuth2-klienter',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'Lista OAuth2-auktoriseringskoder',

    'LNK_NEW_OAUTH2_CLIENT' => 'Skapa OAuth2-klient',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Ny lösenordsklient',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Ny Client Credentials-klient',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Ny implicit klient',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Ny auktoriseringsklient',

];
