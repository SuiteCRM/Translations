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
 * along with this program.  If not, see http://www.gnu.org/licenses.
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
 * Module-specific labels for ManualMigrationTasks.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'Lista de Migrações',
    'LBL_MODULE_NAME' => 'Migrações',
    'LBL_MODULE_TITLE' => 'Migrações',
    'LBL_HOMEPAGE_TITLE' => 'Minhas Migrações',
    'LNK_NEW_RECORD' => 'Criar Migrações',
    'LNK_LIST' => 'Ver as Migrações',
    'LBL_SEARCH_FORM_TITLE' => 'Procurar Migrações',
    'LBL_NEW_FORM_TITLE' => 'Novas Migrações',

    // Module-specific trigger action
    'LBL_RUN_MIGRATION' => 'Executar Migração',
    'LBL_RUN_MIGRATION_CONFIRMATION' => 'Tem certeza que deseja executar esta migração?',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Tem certeza que deseja reiniciar a migração do zero? Todos os itens existentes serão removidos e a migração será reiniciada.',
    'LBL_RERUN_SUCCESS' => 'A migração foi recolocada na fila e reiniciará desde o início.',
    'LBL_DISMISS_CONFIRMATION' => 'Tem certeza de que deseja descartar esta tarefa de migração? Isto irá removê-la e todos os dados associados.',
    'LBL_DISMISS_SUCCESS' => 'Tarefa de migração descartada com sucesso.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Esta migração é executada em segundo plano através da fila de mensagens. Ela processa itens em lotes e não bloqueia a interface do usuário.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Esta migração é executada imediatamente quando acionada. Ela processa todos os itens em uma única solicitação e pode levar mais tempo para grandes conjuntos de dados.',


    // Messenger setup widget
    'LBL_MESSENGER_SETUP' => 'Configuração de Tarefa de Fundo',
    'LBL_MESSENGER_SETUP_DESC1' => 'As tarefas de migração são processadas em segundo plano.',
    'LBL_MESSENGER_SETUP_DESC2' => 'Para garantir que essas tarefas sejam concluídas com sucesso, certifique-se de que um Symfony Messenger está sendo executado.',
    'LBL_MESSENGER_SETUP_DESC3' => 'Sem um worker ativo, as tarefas permanecerão em um estado "Pendente".',
    'LBL_MESSENGER_SETUP_DOC_LINK' => 'Ver Guia de Configuração (Supervisor, sistema, Cron)',
];
