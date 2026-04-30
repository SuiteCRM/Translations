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

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Projeto',
    'LBL_MODULE_TITLE' => 'Projetos: Início',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Projeto',
    'LBL_LIST_FORM_TITLE' => 'Lista de Projetos',
    'LBL_HISTORY_TITLE' => 'Histórico',
    'LBL_ID' => 'Id:',
    'LBL_DATE_ENTERED' => 'Data de Criação:',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'ID Modificado por:',
    'LBL_CREATED_BY' => 'Criado por:',
    'LBL_NAME' => 'Name:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DELETED' => 'Excluído:',
    'LBL_DATE' => 'Data:',
    'LBL_DATE_START' => 'Data de início:',
    'LBL_DATE_END' => 'Data de término:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Estimativa de Esforço Total (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Esforço Real Total (hrs)',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'None',
    'LBL_ALL_PROJECTS' => 'Todos os projetos',
    'LBL_ALL_USERS' => 'Todos os Usuários',
    'LBL_ALL_CONTACTS' => 'Todos os Contatos',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Novo Projeto',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Lista de Projetos',
    'LNK_NEW_PROJECT_TASK' => 'Nova Tarefa de Projeto',
    'LNK_PROJECT_TASK_LIST' => 'Tarefas de Projeto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duração',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Mais...',
    'LBL_OPPORTUNITIES' => 'Oportunidades',
    'LBL_NEXT_WEEK' => 'Next',
    'LBL_PROJECT_INFORMATION' => 'Informação do Projeto',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tarefas de Projeto',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duração',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hora',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Tarefa',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Edit task properties.',
    'LBL_PARENT_TASK_ID' => 'Id da tarefa pai',
    'LBL_RESOURCE_CHART' => 'Calendário de Recursos',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Gerente de Projeto',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Modelo de Projeto',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Gerente de Projeto',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Projeto',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Tarefas de Hoje',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duração',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'Recurso é um Usuário ',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'Recurso é um Contato',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Next Month',
    'LBL_RESOURCE_CHART_WEEK' => 'Week',
    'LBL_RESOURCE_CHART_DAY' => 'Day',
    'LBL_RESOURCE_CHART_WARNING' => 'Não há recursos associados ao projeto.',
    'LBL_PROJECT_DELETE_MSG' => 'Você tem certeza que deseja excluir este projeto e suas tarefas associadas?',
    'LBL_LIST_MY_PROJECT' => 'Meus projetos',
    'LBL_LIST_ASSIGNED_USER' => 'Gerente de Projeto',
    'LBL_UNASSIGNED' => 'Unassigned',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Phone Office:',
    'LBL_ADD_BUTTON' => 'Add',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Sobrenome',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancel',
    'LBL_NO_ACCESS' => 'Você não tem acesso para criar $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Remover',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Importar Projetos',

    'LBL_PROJECTS_SEARCH' => 'Pesquisar projetos',
    'LBL_USERS_SEARCH' => 'Pesquisar usuários',
    'LBL_CONTACTS_SEARCH' => 'Selecionar contatos',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Monthly',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Month',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestre',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contatos do projeto a partir do título dos contatos',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modelos de projeto: Projeto a partir do título de projeto',
    'LBL_AOS_QUOTES_PROJECT' => 'Cotações: Projeto',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Ascendente',
    'LBL_DESCENDING' => 'Descendente',
);
