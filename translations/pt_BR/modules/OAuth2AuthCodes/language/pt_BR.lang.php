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
    'LBL_MODULE_NAME' => 'Códigos de Autorização OAuth2',
    'LBL_MODULE_TITLE' => 'Códigos de Autorização OAuth2',
    'LBL_MODULE_ID'=> 'Códigos de Autorização OAuth2',
    'LBL_CLIENT' => 'Cliente',
    'LBL_SCOPES' => 'Escopos',
    'LBL_AUTO_AUTHORIZE' => 'Aprovar automaticamente',
    'LBL_USER' => 'Autorizando o usuário',
    'LBL_OAUTH_AUTHORIZE_AND_SAVE' => 'Autorizar',
    'LBL_OAUTH_AUTHORIZE_ONCE' => 'Autorizar uma vez',
    'LBL_OAUTH_ABORT' => 'Recusar',
    'LBL_OAUTH_CLIENT' => 'Cliente:',
    'LBL_OAUTH_WHO_IS_REQUESTING' => 'Quem está solicitando (Cliente):',
    'LBL_AUTH_CODE_EXPIRES' => 'Código de Autenticação Expira',
    'LBL_OAUTH_REDIRECT' => 'URL de redirecionamento',
    'LBL_CURRENT_USER' => 'Usuário',
    'LBL_OAUTH_REQUESTED_PERMISSIONS' => 'Permissões Solicitadas',
    'LBL_OAUTH_ACCESS_TO_USER_INFO' => 'Acesso a todas as informações que você pode ver no CRM',
    'LBL_OAUTH_INFO_1' => 'Esta aplicação está solicitando acesso à sua conta SuiteCRM.',
    'LBL_OAUTH_INFO_2' => 'No caso de não se saber ou não confiar no cliente, não se deve conceder acesso.',
    'LBL_OAUTH_BACK_TO_HOME' => '<< Clique aqui para voltar ao painel.',
    'LBL_INVALID_REQUEST' => 'Requisição inválida',
    'LBL_DELETE_BUTTON_LABEL' => 'Revogar e Excluir',
    'LBL_DELETE_BUTTON_TITLE' => 'Revogar e Excluir',
    'LBL_DELETE' => 'Revogar e Excluir',
    'LBL_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro? O cliente não terá mais um código de autorização.',

    'LNK_OAUTH2_TOKEN_LIST'=> 'Listar chaves OAuth2',
    'LNK_OAUTH2_CLIENT_LIST' => 'Listar clientes OAuth2',
    'LNK_OAUTH2_AUTHCODE_LIST' => 'Listar os Códigos de Autorização OAuth2',

    'LNK_NEW_OAUTH2_CLIENT' => 'Criar cliente OAuth2',
    'LNK_NEW_OAUTH2_PASSWORD_CLIENT' => 'Nova senha de cliente',
    'LNK_NEW_OAUTH2_CREDENTIALS_CLIENT' => 'Novo cliente de credenciais de cliente',
    'LNK_NEW_OAUTH2_IMPLICIT_CLIENT' => 'Novo cliente implícito',
    'LNK_NEW_OAUTH2_AUTHORIZATION_CLIENT' => 'Nova autorização de cliente',

    'LBL_OAUTH_AUTHORIZATION_REQUESTED' => 'Autorização solicitada',
    'LBL_OAUTH_AUTHORIZE' => 'Autorizar',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS' => 'Dados do Módulo',
    'LBL_OAUTH2_GRANT_MODULE_ACCESS_DESC' => 'Concede acesso total aos dados de todos os módulos a que você tem acesso',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS' => 'Dados pessoais do usuário',
    'LBL_OAUTH2_GRANT_USER_DATA_ACCESS_DESC' => 'Concede acesso a dados pessoais de usuário como nome e endereço de email',
    'LBL_OAUTH_AUTHORIZING_WILL_REDIRECT' => 'Authorizing will redirect to:',
    'LBL_OAUTH_NOTE' => 'Anotação:',
    'LBL_OAUTH_CLIENT_INFO_DESCRIPTION' => 'wants to access your account',
    'LBL_OAUTH_CLIENT_INFO' => 'Client Information',
];
