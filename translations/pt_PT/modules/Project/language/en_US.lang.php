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
    'LBL_MODULE_NAME' => 'Projeto',
    'LBL_MODULE_TITLE' => 'Projetos: entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Projetos',
    'LBL_LIST_FORM_TITLE' => 'Lista de projetos',
    'LBL_HISTORY_TITLE' => 'Histórico',
    'LBL_ID' => 'ID:',
    'LBL_DATE_ENTERED' => 'Data de criação:',
    'LBL_DATE_MODIFIED' => 'Data de alteração:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',
    'LBL_ASSIGNED_USER_NAME' => 'Gestor de projeto:',
    'LBL_MODIFIED_USER_ID' => 'Alterado por (ID de utilizador):',
    'LBL_CREATED_BY' => 'Criado por:',
    'LBL_NAME' => 'Nome:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DELETED' => 'Eliminado:',
    'LBL_DATE' => 'Data',
    'LBL_DATE_START' => 'Data de início:',
    'LBL_DATE_END' => 'Data de fim:',
    'LBL_PRIORITY' => 'Prioridade:',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Esforço estimado total (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Esforço Real Total (hrs)',
    'LBL_LIST_END_DATE' => 'Data de fim',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de projeto',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Nenhum',
    'LBL_ALL_PROJECTS' => 'Todos os projetos',
    'LBL_ALL_USERS' => 'Todos os utilizadores',
    'LBL_ALL_CONTACTS' => 'Todos os contactos',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novo projeto',
    'LNK_NEW_PROJECT' => 'Criar projeto',
    'LNK_PROJECT_LIST' => 'Ver lista de projetos',
    'LNK_NEW_PROJECT_TASK' => 'Criar tarefa de projeto',
    'LNK_PROJECT_TASK_LIST' => 'Ver tarefas de projeto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalias',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Nome da Tarefa',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Duração atual',
    'LBL_START' => 'Início',
    'LBL_FINISH' => 'Concluir',
    'LBL_PREDECESSORS' => 'Precedências',
    'LBL_PERCENT_COMPLETE' => 'Execução (%)',
    'LBL_MORE' => 'Mais...',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_NEXT_WEEK' => 'Seguinte',
    'LBL_PROJECT_INFORMATION' => 'Visão geral',
    'LBL_EDITLAYOUT' => 'Editar esquema' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de projeto',
    'LBL_VIEW_GANTT_TITLE' => 'Ver modo Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duração',
    'LBL_TASK_TITLE' => 'Editar tarefa',
    'LBL_DURATION_TITLE' => 'Editar duração',
    'LBL_LAG' => 'Desfasamento',
    'LBL_DAYS' => 'Dias',
    'LBL_HOURS' => 'Horas',
    'LBL_MONTHS' => 'Meses',
    'LBL_SUBTASK' => 'Tarefa',
    'LBL_MILESTONE_FLAG' => 'Marco',
    'LBL_ADD_NEW_TASK' => 'Adicionar nova tarefa',
    'LBL_DELETE_TASK' => 'Eliminar tarefa',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edite propriedades de tarefa.',
    'LBL_PARENT_TASK_ID' => 'ID da tarefa hospedeira',
    'LBL_RESOURCE_CHART' => 'Calendário de recursos',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de relação',
    'LBL_ASSIGNED_TO' => 'Gestor de projeto',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Modelo de projeto',
    'LBL_STATUS' => 'Situação:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Gestor de projeto',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projeto',
    'LBL_TOOLTIP_TASK_NAME' => 'Nome da Tarefa',
    'LBL_TOOLTIP_TITLE' => 'Tarefas deste dia',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duração',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Recurso é um utilizador',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Recurso é um contacto',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Mês anterior',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Próximo mês',
    'LBL_RESOURCE_CHART_WEEK' => 'Semana',
    'LBL_RESOURCE_CHART_DAY' => 'Dia',
    'LBL_RESOURCE_CHART_WARNING' => 'Sem recursos atribuídos a projetos.',
    'LBL_PROJECT_DELETE_MSG' => 'Tem a certeza de que deseja eliminar este projeto e as suas tarefas relacionadas?',
    'LBL_LIST_MY_PROJECT' => 'Meus projetos',
    'LBL_LIST_ASSIGNED_USER' => 'Gestor de projeto',
    'LBL_UNASSIGNED' => 'Não atribuído',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Recursos humanos',

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
    'LBL_REMOVE' => 'Remover',
    'LBL_VIEW_DETAIL' => 'Ver detalhes',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Considerar dias úteis',

    'LBL_IMPORT_PROJECTS' => 'Importar projetos',
    
    'LBL_PROJECTS_SEARCH' => 'Pesquisar projetos',
    'LBL_USERS_SEARCH' => 'Pesquisar utilizadores',
    'LBL_CONTACTS_SEARCH' => 'Selecionar contactos',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Pesquisar',

    'LBL_CHART_TYPE' => 'Tipo',
    'LBL_CHART_WEEKLY' => 'Semanal',
    'LBL_CHART_MONTHLY' => 'Mensal',
    'LBL_CHART_QUARTERLY' => 'Trimestral',

    'LBL_RESOURCE_CHART_MONTH' => 'Mês',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestre',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contactos de projeto a partir do título dos contactos',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modelos de projeto: Projeto a partir do título de projeto',
    'LBL_AOS_QUOTES_PROJECT' => 'Propostas: Projeto',

    'LBL_ASCENDING' => 'Ascendente',
    'LBL_DESCENDING' => 'Descendente',
);
