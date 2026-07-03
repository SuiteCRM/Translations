<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2026 SuiteCRM Ltd.
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

/**
 * Shared language labels for all async task modules.
 * Module-specific labels (module name strings, action confirmation/success messages)
 * are defined in each module's own language file, where they override these defaults.
 *
 * This file is automatically merged into inheriting modules by LanguageManager
 * when VardefManager::createVardef() lists 'asynctask' in the templates array.
 */
$mod_strings = [

    // Standard record field labels
    'LBL_ASSIGNED_TO_ID' => 'ID do usuário atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Criado Por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Deletado',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Criado por Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_DELETE' => 'Deletar',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',

    // Async task field labels
    'LBL_DATA' => 'Dados',
    'LBL_TYPE' => 'Tipo',
    'LBL_ESTIMATED_RUN_TIME' => 'Estimativa de tempo de execução',
    'LBL_STATUS' => 'Status',
    'LBL_SERVICE_KEY' => 'Chave de Serviço',
    'LBL_LAST_RUN_DATETIME' => 'Última Execução',
    'LBL_ATTACHMENTS' => 'Anexos',
    'LBL_PHASE' => 'Fase',
    'LBL_OWNER' => 'Proprietário',

    // Progress field labels
    'LBL_PROGRESS' => 'Percurso',
    'LBL_PROGRESS_PERCENT' => 'Porcentagem',
    'LBL_PROGRESS_COMPLETED' => 'Concluída',
    'LBL_PROGRESS_FAILED' => 'Falhou',
    'LBL_PROGRESS_PERCENT_TPL' => '{{fields.progress.attributes.percent|default:-}}% ({{fields.progress.attributes.completed|default:-}} concluídos com sucesso, {{fields.progress.attributes.failed|default:-}} com falha / {{fields.progress.attributes.total|default:-}} no total)',
    'LBL_PROGRESS_NOT_STARTED' => 'Não iniciado',
    'LBL_PROGRESS_QUEUING_TPL' => 'Enfileirando: {{fields.progress.attributes.total|default:0}} itens na fila',

    // Action labels — button text (shared across modules)
    'LBL_RETRY' => 'Tentar novamente',
    'LBL_RERUN' => 'Reexecutar',
    'LBL_DISMISS' => 'Descartar',
    'LBL_DELETE' => 'Deletar',
    'LBL_DELETE_COMPLETED_CONFIRMATION' => 'Tem certeza que deseja excluir esta tarefa concluída?',
    'LBL_DELETE_COMPLETED_WITH_FAILURES_CONFIRMATION' => 'Esta tarefa concluída com falhas. Excluí-la irá remover todos os dados da tarefa, incluindo detalhes do item que falharam. Tem certeza que deseja continuar?',
    'LBL_DELETE_FAILED_CONFIRMATION' => 'Esta tarefa concluída com falhas. Excluí-la irá remover todos os dados da tarefa, incluindo detalhes do item que falharam. Tem certeza que deseja continuar?',

    // Retry action messages (shared — generic phrasing)
    'LBL_RETRY_CONFIRMATION' => 'Tem certeza que deseja tentar novamente? Isto irá reenfileirar todos os itens que falharam para processamento.',
    'LBL_RETRY_SUCCESS' => 'Itens de falha foram re-enfileirados para processamento.',

    // Retry-failed action messages (shared)
    'LBL_RETRY_FAILED' => 'Falha ao Repetir',
    'LBL_RETRY_FAILED_CONFIRMATION' => 'Tem certeza que deseja tentar novamente? Isto irá reenfileirar todos os itens que falharam para processamento.',
    'LBL_RETRY_FAILED_SUCCESS' => 'Itens de falha foram re-enfileirados para processamento.',

    // Capability flag field labels
    'LBL_ALLOW_FAILURE_RETRY_ACTION' => 'Permitir ação de Retentativa de Falha',
    'LBL_ALLOW_FAILURE_RERUN_ACTION' => 'Permitir ação de Retentativa de Falha',

    // Subpanel
    'LBL_FAILED_ITEMS' => 'Itens Falhados',
    'LBL_COMPLETED_ITEMS' => 'Itens concluídos',
];
