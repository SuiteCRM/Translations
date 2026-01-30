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
    'LBL_ALL_MODULES' => 'Tudo',//rost fix
    'LBL_ASSIGNED_TO_ID' => 'ID do utilizador atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de criação',
    'LBL_DATE_MODIFIED' => 'Data de alteração',
    'LBL_MODIFIED' => 'Alterado por',
    'LBL_MODIFIED_NAME' => 'Alterado por (nome)',
    'LBL_CREATED' => 'Criado por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NONINHERITABLE' => 'Não herdável',
    'LBL_LIST_NONINHERITABLE' => 'Não herdável',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Criado pelo utilizador',
    'LBL_MODIFIED_USER' => 'Alterado pelo utilizador',
    'LBL_LIST_FORM_TITLE' => 'Grupos de segurança',
    'LBL_MODULE_NAME' => 'SecuritySuite — Gestão',
    'LBL_MODULE_TITLE' => 'SecuritySuite — Gestão',
    'LNK_NEW_RECORD' => 'Novo grupo de segurança',
    'LNK_LIST' => 'Vista de lista',
    'LBL_SEARCH_FORM_TITLE' => 'Gestão de grupos de segurança — Pesquisa',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de segurança — Gestão',
    'LBL_USERS' => 'Utilizadores',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilizadores',
    'LBL_ROLES_SUBPANEL_TITLE' => 'Funções',
    'LBL_ROLES' => 'Funções',

    'LBL_CONFIGURE_SETTINGS' => 'Configurar',
    'LBL_ADDITIVE' => 'Permissões adicionais',
    'LBL_ADDITIVE_DESC' => "O utilizador obtem os direitos mais elevados de todas as funções atribuídas a ele ou ao(s) seu(s) grupo(s) de segurança",
    'LBL_STRICT_RIGHTS' => 'Direitos estritos',
    'LBL_STRICT_RIGHTS_DESC' => "Se um utilizador for membro de vários grupos apenas serão utilizados os direitos do grupo atribuídos ao registo atual.",
    'LBL_USER_ROLE_PRECEDENCE' => 'Precedência de funções de utilizador',
    'LBL_USER_ROLE_PRECEDENCE_DESC' => 'Se uma função estiver associada diretamente ao utilizador essa função terá precedência sobre quaisquer funções de grupo.',
    'LBL_INHERIT_TITLE' => 'Regras de herança de grupos',
    'LBL_INHERIT_CREATOR' => 'Herdar do utilizador criador',
    'LBL_INHERIT_CREATOR_DESC' => 'O registo herdará todos os grupos atribuídos ao utilizador que o criou.',
    'LBL_INHERIT_PARENT' => 'Herdar de registo hospedeiro',
    'LBL_INHERIT_PARENT_DESC' => 'Por exemplo: se uma ocorrência for criada para um contacto, a ocorrência herdará também os grupos associados ao contacto.',
    'LBL_USER_POPUP' => 'Ecrã de seleção do grupo para novos utilizadores',
    'LBL_USER_POPUP_DESC' => 'Ao criar um novo utilizador, será exibido uma janela de seleção dos Grupos de Segurança para atribuir o utilizador a grupos.',
    'LBL_INHERIT_ASSIGNED' => 'Herdar do utilizador a que foi atribuído',
    'LBL_INHERIT_ASSIGNED_DESC' => 'O registo herdará todos os Grupos de Segurança do utilizador atribuído ao registo. Outros grupos associados ao registo NÃO serão removidos.',
    'LBL_POPUP_SELECT' => 'Usar seletor de grupo de criadores',
    'LBL_POPUP_SELECT_DESC' => 'Quando um registo for criado por um utilizador que pertence a mais que um grupo, mostrar um painel de seleção de grupo no ecrã de criação. Caso contrário herdar desse grupo.',
    'LBL_FILTER_USER_LIST' => 'Filtrar lista de utilizadores',
    'LBL_FILTER_USER_LIST_DESC' => "Os utilizadores não administradores apenas podem fazer atribuições a utilizadores nos mesmos grupos",

    'LBL_DEFAULT_GROUP_TITLE' => 'Grupo predefinido para novos registos',
    'LBL_ADD_BUTTON_LABEL' => 'Adicionar',
    'LBL_REMOVE_BUTTON_LABEL' => 'Remover',
    'LBL_GROUP' => 'Grupo:',
    'LBL_MODULE' => 'Módulo:',

    'LBL_MASS_ASSIGN' => 'Grupos de segurança: atribuição em lote',
    'LBL_ASSIGN' => 'Atribuir',
    'LBL_REMOVE' => 'Remover',
    'LBL_ASSIGN_CONFIRM' => 'Tem a certeza de que pretende adicionar este grupo a(o) ',
    'LBL_REMOVE_CONFIRM' => 'Tem a certeza de que pretende remover este grupo da(o) ',
    'LBL_CONFIRM_END' => ' o(s) registo(s) selecionado(s)?',

    'LBL_SECURITYGROUP_USER_FORM_TITLE' => 'Grupo de Segurança/Utilizador',
    'LBL_USER_NAME' => 'Nome do utilizador',
    'LBL_SECURITYGROUP_NAME' => 'Nome do grupo de segurança',
    'LBL_HOMEPAGE_TITLE' => 'Mensagens do grupo',
    'LBL_TITLE' => 'Título',
    'LBL_ROWS' => 'Linhas',
    'LBL_POST' => 'Publicar',
    'LBL_SELECT_GROUP_ERROR' => 'Por favor, selecione um grupo e tente novamente.',

    'LBL_GROUP_SELECT' => 'Selecionar os grupos que devem ter acesso a este registo',
    'LBL_ERROR_DUPLICATE' => 'Devido a ter sido identificado um possível duplicado terá de adicionar manualmente os grupos de segurança ao registo recém-criado.',
    'LBL_ERROR_EXPORT_WHERE_CHANGED' => 'Falha na atualização porque o filtro de pesquisa foi modificado. Por favor, tente novamente.',

    'LBL_INBOUND_EMAIL' => 'Conta de entrada de correio',
    'LBL_INBOUND_EMAIL_DESC' => 'Só permitir o acesso a uma conta de correio se o utilizador pertencer a um grupo que esteja atribuído à conta de correio.',
    'LBL_PRIMARY_GROUP' => 'Grupo principal',
    'LBL_CHECKMARK' => 'Marca de verificação',

);
