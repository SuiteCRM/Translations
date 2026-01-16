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
    'LBL_MODULE_NAME' => 'Tarefas de projeto',
    'LBL_MODULE_TITLE' => 'Projetos — tarefas: entrada',

    'LBL_ID' => 'ID:',
    'LBL_PROJECT_TASK_ID' => 'ID da tarefa de projeto:',
    'LBL_PROJECT_ID' => 'Id do Projeto:',
    'LBL_DATE_ENTERED' => 'Data de criação:',
    'LBL_DATE_MODIFIED' => 'Data de alteração:',
    'LBL_ASSIGNED_USER_ID' => 'Atribuído a:',
    'LBL_MODIFIED_USER_ID' => 'Alterado por (ID de utilizador):',
    'LBL_CREATED_BY' => 'Criado por:',
    'LBL_NAME' => 'Nome:',
    'LBL_STATUS' => 'Situação:',
    'LBL_DATE_DUE' => 'Data-limite:',
    'LBL_TIME_DUE' => 'Hora limite:',
    'LBL_PREDECESSORS' => 'Precedência',
    'LBL_DATE_START' => 'Data de início:',
    'LBL_DATE_FINISH' => 'Data de conclusão:',
    'LBL_TIME_START' => 'Hora de início:',
    'LBL_TIME_FINISH' => 'Hora de conclusão:',
    'LBL_DURATION' => 'Duração:',
    'LBL_DURATION_UNIT' => 'Unidade de Duração:',
    'LBL_ACTUAL_DURATION' => 'Duração atual:',
    'LBL_PARENT_ID' => 'Projeto:',
    'LBL_PARENT_TASK_ID' => 'ID da tarefa hospedeira',
    'LBL_PERCENT_COMPLETE' => 'Exec. (%)',
    'LBL_PRIORITY' => 'Prioridade:',
    'LBL_DESCRIPTION' => 'Observações:',
    'LBL_ORDER_NUMBER' => 'Ordem:',
    'LBL_TASK_NUMBER' => 'Número da tarefa:',
    'LBL_TASK_ID' => 'ID da tarefa:',
    'LBL_MILESTONE_FLAG' => 'Marco:',
    'LBL_ESTIMATED_EFFORT' => 'Esforço estimado (hrs):',
    'LBL_ACTUAL_EFFORT' => 'Esforço real (hrs):',
    'LBL_UTILIZATION' => 'Utilização (%):',
    'LBL_DELETED' => 'Eliminado:',
    'LBL_IMPORT_PROJECT_TASKS' => 'Importar tarefas de projeto',

    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PARENT_NAME' => 'Projeto',
    'LBL_LIST_PERCENT_COMPLETE' => 'Execução (%)',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Atribuído a',
    'LBL_LIST_DATE_DUE' => 'Data-limite',
    'LBL_LIST_PRIORITY' => 'Prioridade',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_PROJECT_NAME' => 'Nome do projeto',

    'LNK_NEW_PROJECT' => 'Criar projeto',
    'LNK_PROJECT_LIST' => 'Lista de projetos',
    'LNK_NEW_PROJECT_TASK' => 'Criar tarefa de projeto',
    'LNK_PROJECT_TASK_LIST' => 'Tarefas de projeto',

    'LBL_LIST_MY_PROJECT_TASKS' => 'Minhas tarefas de projeto',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tarefas de projeto',
    'LBL_NEW_FORM_TITLE' => 'Nova tarefa de projeto',

    'LBL_HISTORY_TITLE' => 'Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',

    'LBL_ASSIGNED_USER_NAME' => 'Atribuído a',
    'LBL_PARENT_NAME' => 'Nome do projeto',
    'LBL_EDITLAYOUT' => 'Editar esquema' /*for 508 compliance fix*/,
    'LBL_PANEL_TIMELINE' => 'Linha temporal',

    'LBL_SUBTASK' => 'Subtarefa',
    'LBL_LAG' => 'Desfasamento',
    'LBL_DAYS' => 'Dias',
    'LBL_HOURS' => 'Horas',
    'LBL_RELATIONSHIP_TYPE' => 'Tipo de relacionamento',

    'LBL_ASCENDING' => 'Ascendente',
    'LBL_DESCENDING' => 'Descendente',
);
