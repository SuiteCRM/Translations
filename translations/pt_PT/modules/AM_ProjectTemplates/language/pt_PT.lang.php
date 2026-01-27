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
    'LBL_ASSIGNED_TO_ID' => 'ID do utilizador atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Gestor de projeto',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de criação',
    'LBL_DATE_MODIFIED' => 'Data de alteração',
    'LBL_MODIFIED' => 'Alterado por',
    'LBL_MODIFIED_NAME' => 'Alterado por (nome)',
    'LBL_CREATED' => 'Criado por',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Nome de modelo',
    'LBL_CREATED_USER' => 'Criado pelo utilizador',
    'LBL_MODIFIED_USER' => 'Alterado pelo utilizador',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_FORM_TITLE' => 'Lista de modelos de projeto',
    'LBL_MODULE_NAME' => 'Modelos de projeto',
    'LBL_MODULE_TITLE' => 'Modelos de projeto',
    'LBL_HOMEPAGE_TITLE' => 'Meus modelos de projeto',
    'LNK_NEW_RECORD' => 'Criar modelos de projeto',
    'LNK_LIST' => 'Ver modelos de projeto',
    'LNK_IMPORT_AM_PROJECTTEMPLATES' => 'Importar modelos de projeto',
    'LBL_SEARCH_FORM_TITLE' => 'Procurar modelos de projeto',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo modelo de projeto',
    'LBL_STATUS' => 'Situação',
    'LBL_PRIORITY' => 'Prioridade',
    'LBL_PROJECT_NAME' => 'Nome do projeto',
    'LBL_START_DATE' => 'Data de início',
    'LBL_CREATE_PROJECT_TITLE' => 'Criar um projeto a partir deste modelo?',
    'LBL_AM_TASKTEMPLATES_AM_PROJECTTEMPLATES_FROM_AM_TASKTEMPLATES_TITLE' => 'Modelos de tarefas',
    'LBL_AM_PROJECTTEMPLATES_USERS_1_TITLE' => 'Utilizadores',
    'LBL_AM_PROJECTTEMPLATES_CONTACTS_1_TITLE' => 'Contactos',
    'LBL_AM_PROJECTTEMPLATES_RESOURCES_TITLE' => 'Selecionar recursos',
    'LBL_NEW_PROJECT_CREATED' => 'Novo projeto criado',
    'LBL_NEW_PROJECT' => 'Criar projeto',
    'LBL_CANCEL_PROJECT' => 'Cancelar',

    'LBL_SUBTASK' => 'Tarefa',
    'LBL_MILESTONE_FLAG' => 'Marco',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de relação',
    'LBL_LAG' => 'Desfasamento',
    'LBL_DAYS' => 'Dias',
    'LBL_HOURS' => 'Horas',
    'LBL_MONTHS' => 'Meses',

    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de projeto',
    'LBL_VIEW_GANTT_TITLE' => 'Ver modo Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duração',
    'LBL_TASK_TITLE' => 'Editar tarefa',
    'LBL_DURATION_TITLE' => 'Editar duração',
    'LBL_DESCRIPTION' => 'Notas',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',

    'LBL_LIST_ASSIGNED_USER' => 'Gestor de projeto',
    'LBL_UNASSIGNED' => 'Não atribuído',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Recursos humanos',
    'LBL_DELETE_TASK' => 'Eliminar tarefa',
    'LBL_VIEW_DETAIL' => 'Ver detalhes',
    'LBL_ADD_NEW_TASK' => 'Adicionar nova tarefa',
    'LBL_ASSIGNED_USER_NAME' => 'Gestor de projeto:',

    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Duração atual',
    'LBL_START' => 'Início',
    'LBL_FINISH' => 'Concluir',
    'LBL_PREDECESSORS' => 'Precedências',
    'LBL_PERCENT_COMPLETE' => 'Execução (%)',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edite propriedades de tarefa.',

    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Considerar dias úteis',
    'LBL_COPY_ALL_TASKS' => 'Copiar todas as tarefas com recursos',
    'LBL_COPY_SEL_TASKS' => 'Copiar tarefas selecionadas que tenham recursos',
    'LBL_TOOLTIP_TITLE' => 'Dica',
    'LBL_TOOLTIP_TEXT' => 'Copiar todas as tarefas com utilizadores atribuídos',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telefone de trabalho:',
    'LBL_ADD_BUTTON' => 'Adicionar',
    'LBL_ADD_INVITEE' => 'Adicionar recurso',
    'LBL_FIRST_NAME' => 'Nome próprio',
    'LBL_LAST_NAME' => 'Apelido',
    'LBL_SEARCH_BUTTON' => 'Pesquisar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Desculpe, não foram encontrados resultados. Por favor, crie um convidado abaixo.',
    'LBL_CREATE_INVITEE' => 'Criar recurso',
    'LBL_CREATE_CONTACT' => 'Como contacto',
    'LBL_CREATE_AND_ADD' => 'Criar e Adicionar',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_NO_ACCESS' => 'Não tem permissões para criar $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Lista de recursos humanos',
    'LBL_NONE' => 'Nenhum',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',

    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modelos de projeto: Projeto a partir do título de projeto',


);
