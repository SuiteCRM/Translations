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
    'LBL_MODULE_NAME' => 'Clientes de OAuth2',
    'LBL_MODULE_TITLE' => 'OAuth2 Clients',
    'LBL_MODULE_ID' => 'OAuth2 Clients',
    'LBL_IS_CONFIDENTIAL' => 'Es confidencial',
    'LBL_SECRET' => 'Clave',
    'LBL_SECRET_HASHED' => 'Cambiar clave',
    'LBL_LEAVE_BLANK' => 'Dejar en blanco excepto si lo desea cambiar',
    'LBL_REMEMBER_SECRET' => 'Por favor tome nota de la clave ya que no estará disponible después de guardar.',
    'LBL_REDIRECT_URL' => 'Redirect URL',
    'LBL_ALLOWED_GRANT_TYPE' => 'Tipos de concesión permitidos',
    'LBL_DURATION_AMOUNT' => 'Duración',
    'LBL_DURATION_UNIT' => 'Unidad de duración',
    'LBL_DURATION_VALUE' => 'Valor de duración',
    'LBL_USER' => 'Usuario asociado',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Tokens OAuth2 activos',
    'LBL_TOKEN_ID' => 'Token',
    'LBL_DATE_ENTERED' => 'Fecha de Creación',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Token de acceso expira',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Token de refresco expira',

    'LNK_OAUTH2_TOKEN_LIST'=> 'List OAuth2 Tokens',
    'LNK_OAUTH2_CLIENT_LIST' => 'List OAuth2 Clients',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'List OAuth2 Authorization Codes',

    'LNK_NEW_OAUTH2_CLIENT' => 'Create OAuth2 Client',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'New Password Client',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'New Client Credentials Client',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'New Implicit Client',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'New Authorization Client',

];
