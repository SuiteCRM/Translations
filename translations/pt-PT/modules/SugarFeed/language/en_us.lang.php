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
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de criação',
    'LBL_DATE_MODIFIED' => 'Data de alteração',
    'LBL_MODIFIED' => 'Alterado por',
    'LBL_MODIFIED_NAME' => 'Alterado por (nome)',
    'LBL_CREATED' => 'Criado por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Nome',
    'LBL_SAVING' => 'A guardar...',
    'LBL_SAVED' => 'Guardado',
    'LBL_CREATED_USER' => 'Criado pelo utilizador',
    'LBL_MODIFIED_USER' => 'Alterado pelo utilizador',
    'LBL_LIST_FORM_TITLE' => 'Lista de sinais',
    'LBL_MODULE_NAME' => 'Mural — Fluxo de atividades',
    'LBL_MODULE_TITLE' => 'Mural — Fluxo de atividades',
    'LBL_DASHLET_DISABLED' => 'Alerta: O sistema de mural está desativado, nenhuma entrada de sinal será publicada até ser ativado',
    'LBL_RECORDS_DELETED' => 'Todas as anteriores entradas de sinais foram removidas. Se o sistema de mural CRM estiver ativado, serão geradas novas entradas automaticamente.',
    'LBL_CONFIRM_DELETE_RECORDS' => 'Tem a certeza de que pretende eliminar todas as entradas de sinais Web?',
    'LBL_FLUSH_RECORDS' => 'Eliminar entradas de sinais',
    'LBL_ENABLE_FEED' => 'Ativar miniaplicação de mural das minhas atividades',
    'LBL_ENABLE_MODULE_LIST' => 'Ativar sinais para',
    'LBL_HOMEPAGE_TITLE' => 'Meu mural de atividades',
    'LNK_NEW_RECORD' => 'Criar sinal',
    'LNK_LIST' => 'Sinal',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar sinal',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo sinal',
    'LBL_ALL' => 'Tudo',
    'LBL_USER_FEED' => 'Sinal do utilizador',
    'LBL_ENABLE_USER_FEED' => 'Ativar sinal do utilizador',
    'LBL_TO' => 'Enviar para',
    'LBL_IS' => 'é',
    'LBL_DONE' => 'Concluído',
    'LBL_TITLE' => 'Título',
    'LBL_ROWS' => 'Linhas',
    'LBL_CATEGORIES' => 'Módulos',
    'LBL_TIME_LAST_WEEK' => 'Última semana',
    'LBL_TIME_WEEKS' => 'semanas',
    'LBL_TIME_DAYS' => 'dias',
    'LBL_TIME_YESTERDAY' => 'Ontem',
    'LBL_TIME_HOURS' => 'Horas',
    'LBL_TIME_HOUR' => 'Horas',
    'LBL_TIME_MINUTES' => 'Minutos',
    'LBL_TIME_MINUTE' => 'Minuto',
    'LBL_TIME_SECONDS' => 'Segundos',
    'LBL_TIME_SECOND' => 'Segundo',
    'LBL_TIME_AND' => 'e',
    'LBL_TIME_AGO' => 'atrás',
// Activity stream
    'CREATED_CONTACT' => 'criou um <b>NOVO</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new contact"
    'CREATED_OPPORTUNITY' => 'criou um <b>NOVO</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new opportunity"
    'CREATED_CASE' => 'criou um <b>NOVO</b> {0}', // For fusional (inflected) languages: used in the sentence "Administrator created a new case"
    'CREATED_LEAD' => 'criou um <b>NOVO</b> {0}', // For fusional (inflected) languages: used in sentence "Administrator created a new lead"
    'FOR' => 'para', // Activity stream for cases
    'FOR_AMOUNT' => 'para a quantidade de', // Activity stream for cases
    'CLOSED_CASE' => '<b>ENCERROU</b> uma {0} ',
    'CONVERTED_LEAD' => '<b>CONVERTEU</b> uma {0}',
    'WON_OPPORTUNITY' => '<b>GANHOU</b> uma {0}',
    'WITH' => 'com',

    'LBL_LINK_TYPE_Link' => 'Ligação',
    'LBL_LINK_TYPE_Image' => 'Imagem',
    'LBL_LINK_TYPE_YouTube' => 'YouTube&#153;',

    'LBL_SELECT' => 'Selecionar',
    'LBL_POST' => 'Publicar',
    'LBL_AUTHENTICATE' => 'Ligar a',
    'LBL_AUTHENTICATION_PENDING' => 'Nem todas as contas externas que selecionou foram autenticadas. Clique em \'Cancelar\' para regressar à janela de opções e autenticar as contas externas, ou clique em \'Ok\' para continuar sem autenticação.',
    'LBL_ADVANCED_SEARCH' => 'Filtro avançado' /*for 508 compliance fix*/,
    'LBL_SHOW_MORE_OPTIONS' => 'Mostrar mais opções',
    'LBL_HIDE_OPTIONS' => 'Ocultar opções',
    'LBL_VIEW' => 'Ver',
    'LBL_POST_TITLE' => 'Publicar atualização da situação para ',
    'LBL_URL_LINK_TITLE' => 'URL de hiperligação a usar',
);
