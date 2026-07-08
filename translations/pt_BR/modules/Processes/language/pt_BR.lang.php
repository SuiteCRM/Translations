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
 * Module-specific labels for Processes.
 * Shared async task labels are inherited from the asynctask template language file.
 */
$mod_strings = [

    // Module naming
    'LBL_LIST_FORM_TITLE' => 'Lista de processos',
    'LBL_MODULE_NAME' => 'Processos',
    'LBL_MODULE_TITLE' => 'Processos',
    'LBL_HOMEPAGE_TITLE' => 'Meus Processos',
    'LNK_NEW_RECORD' => 'Criar processo',
    'LNK_LIST' => 'Visualizar Processos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Processos',
    'LBL_NEW_FORM_TITLE' => 'Novo Processo',

    // Rerun/dismiss confirmation messages (reference this module by name)
    'LBL_RERUN_CONFIRMATION' => 'Tem certeza que deseja reiniciar a migração do zero? Todos os itens existentes serão removidos e a migração será reiniciada.',
    'LBL_RERUN_SUCCESS' => 'A migração foi recolocada na fila e reiniciará desde o início.',
    'LBL_DISMISS_CONFIRMATION' => 'Tem certeza de que deseja descartar este processo? Isso removerá o processo e todos os dados associados.',
    'LBL_DISMISS_SUCCESS' => 'Processo Dispensado com sucesso.',

    // Type footnotes
    'LBL_TYPE_BACKGROUND_HELP' => 'Este processo é executado em segundo plano através da fila de mensagens. Ele processa itens em lotes e não bloqueia a interface do usuário.',
    'LBL_TYPE_IMMEDIATE_HELP' => 'Este processo é executado imediatamente quando acionada. Ele processa todos os itens em uma única solicitação e pode levar mais tempo para grandes conjuntos de dados.',
];
