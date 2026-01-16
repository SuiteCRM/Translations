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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Colaboradores',
    'LBL_MODULE_TITLE' => 'Colaboradores: entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar colaboradores',
    'LBL_LIST_FORM_TITLE' => 'Colaboradores',
    'LBL_NEW_FORM_TITLE' => 'Criar colaborador',
    'LBL_LOGIN' => 'Autenticar',
    'LBL_RESET_PREFERENCES' => 'Voltar às preferências predefinidas do sistema',
    'LBL_TIME_FORMAT' => 'Hora — Formato:',
    'LBL_DATE_FORMAT' => 'Data — Formato:',
    'LBL_TIMEZONE' => 'Hora local:',
    'LBL_CURRENCY' => 'Moeda:',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_LAST_NAME' => 'Apelido',
    'LBL_LIST_EMPLOYEE_NAME' => 'Nome do colaborador',
    'LBL_LIST_DEPARTMENT' => 'Departamento',
    'LBL_LIST_REPORTS_TO_NAME' => 'Supervisionado por',
    'LBL_LIST_EMAIL' => 'Email',
    'LBL_LIST_USER_NAME' => 'Nome do utilizador',
    'LBL_ERROR' => 'Erro:',
    'LBL_PASSWORD' => 'Senha:',
    'LBL_USER_NAME' => 'Nome de utilizador:',
    'LBL_USER_TYPE' => 'Tipo de utilizador',
    'LBL_FIRST_NAME' => 'Nome próprio:',
    'LBL_LAST_NAME' => 'Apelido:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Idioma:',
    'LBL_ADMIN' => 'Administrador:',
    'LBL_EMPLOYEE_INFORMATION' => 'Dados do colaborador',
    'LBL_OFFICE_PHONE' => 'Telefone de trabalho:',
    'LBL_REPORTS_TO' => 'Supervisionado pelo ID:',
    'LBL_REPORTS_TO_NAME' => 'Supervisionado por',
    'LBL_OTHER_PHONE' => 'Telefone alternativo 2:',
    'LBL_NOTES' => 'Observações:',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_TITLE' => 'Cargo:',
    'LBL_ANY_ADDRESS' => 'Todos os endereços:',
    'LBL_ANY_PHONE' => 'Todos os telefones:',
    'LBL_ANY_EMAIL' => 'Todos os endereços de email:',
    'LBL_ADDRESS' => 'Endereço:',
    'LBL_CITY' => 'Cidade:',
    'LBL_STATE' => 'Concelho:',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_COUNTRY' => 'País:',
    'LBL_NAME' => 'Nome:',
    'LBL_MOBILE_PHONE' => 'Telemóvel:',
    'LBL_FAX' => 'Fax:',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMAIL_LINK_TYPE' => 'Cliente de email',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Cliente de email SuiteCRM:</b> enviar emails usando o cliente de correio eletrónico da aplicação do SuiteCRM. <br><b>Cliente externo de email</b> enviar emails usando um cliente de email externo, como o Microsoft Outlook.',
    'LBL_HOME_PHONE' => 'Telefone de casa:',
    'LBL_WORK_PHONE' => 'Telefone de trabalho:',
    'LBL_EMPLOYEE_STATUS' => 'Situação do colaborador:',
    'LBL_PRIMARY_ADDRESS' => 'Endereço principal:',
    'LBL_SAVED_SEARCH' => 'Opções de esquema',
    'LBL_MESSENGER_ID' => 'Identificação no IM:',
    'LBL_MESSENGER_TYPE' => 'Tipo de IM:',
    'ERR_LAST_ADMIN_1' => 'O colaborador com o nome "',
    'ERR_LAST_ADMIN_2' => '" é o último colaborador com direitos de administrador. Pelo menos um utilizador terá de ser administrador.',
    'LNK_NEW_EMPLOYEE' => 'Criar colaborador',
    'LNK_EMPLOYEE_LIST' => 'Ver colaboradores',
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar a conta.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Situação do colaborador',

    'LBL_SUITE_LOGIN' => 'É utilizador',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Notificar na atribuição',
    'LBL_IS_ADMIN' => 'É administrador',
    'LBL_GROUP' => 'Utilizador do grupo',
    'LBL_PHOTO' => 'Foto',
    'LBL_DELETE_USER_CONFIRM' => 'Este colaborador é também um utilizador. Ao apagar o registo do colaborador irá igualmente apagar o registo do utilizador pelo que este deixará de ter acesso à aplicação. Deseja continuar com a eliminação deste registo?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Tem a certeza de que pretende eliminar este colaborador?',
    'LBL_ONLY_ACTIVE' => 'Colaboradores ativos',
    'LBL_SELECT' => 'Selecionar' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'ID de autenticação',
    'LBL_EXT_AUTHENTICATE' => 'Autenticação externa',
    'LBL_GROUP_USER' => 'Utilizador do grupo',
    'LBL_LIST_ACCEPT_STATUS' => 'Situação da aceitação',
    'LBL_MODIFIED_BY' => 'Alterado por',
    'LBL_MODIFIED_BY_ID' => 'Alterado por (ID)',
    'LBL_CREATED_BY_NAME' => 'Criado por', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Utilizador da API de portal',
    'LBL_PSW_MODIFIED' => 'Última alteração da senha',
    'LBL_SHOW_ON_EMPLOYEES' => 'Exibir registo de colaborador',
    'LBL_USER_HASH' => 'Senha',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Senha gerada pelo sistema',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_FAX_PHONE' => 'Fax',
    'LBL_STATUS' => 'Situação',
    'LBL_ADDRESS_CITY' => 'Cidade',
    'LBL_ADDRESS_COUNTRY' => 'País',
    'LBL_ADDRESS_INFORMATION' => 'Dados de endereço',
    'LBL_ADDRESS_POSTALCODE' => 'Código postal da morada',
    'LBL_ADDRESS_STATE' => 'Concelho',
    'LBL_ADDRESS_STREET' => 'Rua',

    'LBL_DATE_MODIFIED' => 'Data de alteração',
    'LBL_DATE_ENTERED' => 'Data de entrada',
    'LBL_DELETED' => 'Eliminado',

    'LBL_BUTTON_SELECT' => 'Selecionar',
    'LBL_BUTTON_CLEAR' => 'Limpar',

    'LBL_CONTACTS_SYNC' => 'Sincronizar contactos',
    'LBL_OAUTH_TOKENS' => 'Certificados OAuth',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Utilizadores de projeto a partir do título do projeto',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contactos de projeto a partir do título dos contactos',
    'LBL_ROLES' => 'Funções',
    'LBL_SECURITYGROUPS' => 'Grupos de segurança',
    'LBL_PROSPECT_LIST' => 'Lista de clientes potenciais',

    'LBL_FACTOR_AUTH_INTERFACE' => 'Interface da autenticação a dois fatores:',
    'LBL_EDITOR_TYPE' => 'Editor',
);
