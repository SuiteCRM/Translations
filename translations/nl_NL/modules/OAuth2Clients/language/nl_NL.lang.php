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

$mod_strings = [
    'LBL_MODULE_NAME' => 'OAuth2-clients',
    'LBL_MODULE_TITLE' => 'OAuth2-clients',
    'LBL_MODULE_ID' => 'OAuth2-clients',
    'LBL_IS_CONFIDENTIAL' => 'Is vertrouwelijk',
    'LBL_SECRET' => 'Geheim',
    'LBL_SECRET_HASHED' => 'Verandering geheim',
    'LBL_LEAVE_BLANK' => 'Laat leeg, tenzij u wilt wijzigen',
    'LBL_REMEMBER_SECRET' => 'Neem notie van het geheim, omdat het niet beschikbaar zal zijn nadat u hebt opgeslagen.',
    'LBL_REDIRECT_URL' => 'Omleidings URL',
    'LBL_ALLOWED_GRANT_TYPE' => 'Toegestane Grant Type',
    'LBL_DURATION_AMOUNT' => 'Tijdsduur',
    'LBL_DURATION_UNIT' => 'Duureenheid',
    'LBL_DURATION_VALUE' => 'Duur waarde',
    'LBL_USER' => 'Bijbehorende gebruiker',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Actieve OAuth Tokens',
    'LBL_TOKEN_ID' => 'Token',
    'LBL_DATE_ENTERED' => 'Aanmaak datum',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Toegangstoken verloopt',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Vernieuwen tokens verloopt',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Maak een lijst van OAuth2-tokens',
    'LNK_OAUTH2_CLIENT_LIST' => 'Lijst van OAuth2 Clients',

    'LNK_NEW_OAUTH2_CLIENT' => 'Maak een OAuth2 Client',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Nieuwe wachtwoord voor client',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Nieuwe cliënt gegevens',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Nieuwe impliciete Cliënt',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Nieuwe autorisatie cliënt',

];
