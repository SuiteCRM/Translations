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
    'LBL_MODULE_NAME' => 'Clientes OAuth2',
    'LBL_MODULE_TITLE' => 'Clientes OAuth2',
    'LBL_MODULE_ID' => 'Clientes OAuth2',
    'LBL_IS_CONFIDENTIAL' => 'É confidencial',
    'LBL_SECRET' => 'Segredo',
    'LBL_SECRET_HASHED' => 'Alterar chave secreta',
    'LBL_LEAVE_BLANK' => 'Deixar em branco a não ser para mudar',
    'LBL_REMEMBER_SECRET' => 'Por favor, tome nota da chave secreta pois não ficará disponível para consulta depois de a guardar.',
    'LBL_REDIRECT_URL' => 'URL de redirecionamento',
    'LBL_ALLOWED_GRANT_TYPE' => 'Tipo de permissão concedida',
    'LBL_DURATION_AMOUNT' => 'Duração (quantidade)',
    'LBL_DURATION_UNIT' => 'Unidade de duração',
    'LBL_DURATION_VALUE' => 'Valor da duração',
    'LBL_USER' => 'Utilizador associado',

    'LBL_OAUTHTOKENS_SUBPANEL_TITLE' => 'Certificados OAuth2 ativos',
    'LBL_TOKEN_ID' => 'Certificado',
    'LBL_DATE_ENTERED' => 'Data de criação',
    'LBL_ACCESS_TOKEN_EXPIRES' => 'Data de validade do certificado de acesso',
    'LBL_REFRESH_TOKEN_EXPIRES' => 'Data de validade do certificado de renovação',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Listar certificados OAuth2',
    'LNK_OAUTH2_CLIENT_LIST' => 'Listar clientes OAuth2',

    'LNK_NEW_OAUTH2_CLIENT' => 'Criar cliente OAuth2',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Nova senha de cliente',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Novo cliente de credenciais de cliente',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Novo cliente implícito',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Nova autorização de cliente',

];
