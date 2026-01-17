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
    'LBL_MODULE_NAME' => 'Mga OAuth2 kliyente',
    'LBL_MODULE_TITLE' => 'Mga OAuth2 kliyente',
    'LBL_MODULE_ID' => 'Mga OAuth2 kliyente',
    'LBL_IS_CONFIDENTIAL' => 'Kay kompedinsyal',
    'LBL_SECRET' => 'Sekreto',
    'LBL_SECRET_HASHED' => 'Ilis ug sekreto',
    'LBL_LEAVE_BLANK' => 'Ipabling blanko hangtod mailisin',
    'LBL_REMEMBER_SECRET' => 'Palihug kuha ug usa ka note sa sekreto kay dili na siya available pagkahuman nimo i-save.',
    'LBL_REDIRECT_URL' => 'I-redirect ang URL',
    'LBL_ALLOWED_GRANT_TYPE' => 'Gisugtan nga klase sa paghatag',
    'LBL_DURATION_AMOUNT' => 'Kantidad sa Gidugayon',
    'LBL_DURATION_UNIT' => 'Unit sa gidugayon',
    'LBL_DURATION_VALUE' => 'Duration value',
    'LBL_USER' => 'Nalangkit nga tiggamitan',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Aktibong mga OAuth2 Token',
    'LBL_TOKEN_ID' => 'Token',
    'LBL_DATE_ENTERED' => 'Petsa sa pagbuhat',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Ma-expire ang access token',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Ma-expire ang refresh token',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Listahan sa mga OAuth2 nga token',
    'LNK_OAUTH2_CLIENT_LIST' => 'Listahan sa mga OAuth2 nga kliyente',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'List OAuth2 Authorization Codes',

    'LNK_NEW_OAUTH2_CLIENT' => 'Himo ug Oauth2 nga kliyente',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Bag-ong password nga Kliyente',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Mga Kredensyal nga kliyente sa bag-ong kliyente',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Bag-ong implicit nga kliyente',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Bag-ong kliyente sa awtorisasyon',

];
