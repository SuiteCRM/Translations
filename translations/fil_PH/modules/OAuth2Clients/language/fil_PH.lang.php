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
    'LBL_MODULE_NAME' => 'Mga kliyente ng OAuth2',
    'LBL_MODULE_TITLE' => 'Mga kliyente ng OAuth2',
    'LBL_MODULE_ID' => 'Mga kliyente ng OAuth2',
    'LBL_IS_CONFIDENTIAL' => 'Ay kumpedensyal',
    'LBL_SECRET' => 'Lihim',
    'LBL_SECRET_HASHED' => 'Baguhin ang lihim',
    'LBL_LEAVE_BLANK' => 'Iwan ng patlang maliban kung nagbabago',
    'LBL_REMEMBER_SECRET' => 'Mangyaring kumuha ng talaan sa isang lihim tulad ng hindi magagamit pagkatapos mong i-save.',
    'LBL_REDIRECT_URL' => 'I-Redirect ang URL',
    'LBL_ALLOWED_GRANT_TYPE' => 'Pinayagan ang uri na grant',
    'LBL_DURATION_AMOUNT' => 'Laki ng itinagal',
    'LBL_DURATION_UNIT' => 'Unit ng itinagal',
    'LBL_DURATION_VALUE' => 'Duration value',
    'LBL_USER' => 'Naiuugnay na user',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Aktibong OAuth na mga token',
    'LBL_TOKEN_ID' => 'Token',
    'LBL_DATE_ENTERED' => 'Petsa ng paglikha',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'I-access ang mga magtatapos ng token',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'I-refresh ang mga nagtatapos na token',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Listahan ng mga OAuth2 token',
    'LNK_OAUTH2_CLIENT_LIST' => 'Listahan ng mga kliyente ng OAuth2',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'List OAuth2 Authorization Codes',

    'LNK_NEW_OAUTH2_CLIENT' => 'Lumikha ng OAuth2 na kliyente',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Bagong password Client',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Bagong kliyente mga kredensiyal na kliyente',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Bagong ganap na kliyente',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Bagong kliyente ng pagpapahintulot',

];
