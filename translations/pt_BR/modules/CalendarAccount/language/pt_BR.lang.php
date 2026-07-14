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

$mod_strings = [
    // System fields
    'LBL_ASSIGNED_TO_ID' => 'ID do usuário atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Criado Por',
    'LBL_CREATED_USER' => 'Criado pelo Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Deletado',

    // Security groups
    'LBL_SECURITYGROUPS' => 'Grupos de Segurança',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de Segurança',

    // List view labels
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_DELETE' => 'Deletar',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_ASCENDING' => 'Ascendente',
    'LBL_DESCENDING' => 'Descendente',

    // Email opt-in labels
    'LBL_OPT_IN' => 'Optar por aderir',
    'LBL_OPT_IN_PENDING_EMAIL_NOT_SENT' => 'Confirmação de adesão pendente, confirmação de adesão não enviada',
    'LBL_OPT_IN_PENDING_EMAIL_SENT' => 'Confirmação de adesão pendente, confirmação de adesão enviada',
    'LBL_OPT_IN_CONFIRMED' => 'Optou por aderir',

    // Subpanel titles
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_CALENDARACCOUNT_SUBPANEL_TITLE' => 'Contas de Calendário',
    'LBL_MEETINGS_SUBPANEL_TITLE' => 'Reuniões Sincronizadas',

    // Import links
    'LNK_IMPORT_CALENDARACCOUNT' => 'Importar Contas de Calendário',

    // Additional menu links
    'LNK_LIST_CREATE_NEW_GROUP' => 'Criar Grupo',
    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Criar Conta de Calendário Pessoal',
    'LNK_LIST_INBOUND_EMAILS' => 'Emails de Entrada',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Emails de Saída',
    'LNK_LIST_EXTERNAL_OAUTH_PROVIDERS' => 'Provedores OAuth Externos',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTIONS' => 'Conexões OAuth Externas',

    // Basic module labels
    'LBL_MODULE_NAME' => 'Contas de Calendário',
    'LBL_MODULE_TITLE' => 'Contas de Calendário',
    'LBL_LIST_FORM_TITLE' => 'Lista de Contas de Calendário',
    'LBL_SEARCH_FORM_TITLE' => 'Buscar Contas de Calendário',
    'LBL_NEW_FORM_TITLE' => 'Nova Conta de Calendário',
    'LBL_HOMEPAGE_TITLE' => 'Minhas Contas de Calendário',

    // Navigation links
    'LNK_NEW_RECORD' => 'Criar Conta de Calendário',
    'LNK_LIST' => 'Ver Conta de Calendário',

    // Standard fields
    'LBL_NAME' => 'Nome',
    'LBL_ID' => 'ID',
    'LBL_TYPE' => 'Tipo',
    'LBL_SOURCE' => 'Fonte da Agenda',

    // OAuth2 Fields
    'LBL_OAUTH_CONNECTION' => 'Conexão OAuth',
    'LBL_CONNECT_OAUTH' => 'Conectar OAuth',

    // Basic Auth Fields
    'LBL_USERNAME' => 'Nome de Usuário',
    'LBL_PASSWORD' => 'Senha',
    'LBL_SERVER_URL' => 'Endereço do Servidor',
    'LBL_TEST_CONNECTION' => 'Testar conexão',

    // API Key Fields
    'LBL_API_KEY' => 'Chave de API',
    'LBL_API_ENDPOINT' => 'Endpoint da API',
    'LBL_VALIDATE_API' => 'Validar API',

    // Calendar User Fields
    'LBL_CALENDAR_USER_ID' => 'ID do Usuário do Calendário',
    'LBL_CALENDAR_USER_NAME' => 'Usuário do Calendário',
    'LBL_CALENDAR_USER' => 'Usuário do Calendário',

    // Auth Actions
    'LBL_AUTH_ACTIONS' => 'Ações de Autenticação',

    // Panel Labels
    'LBL_SYNC_STATUS' => 'Status da Sincronização',

    // Connection Status Fields
    'LBL_LAST_CONNECTION_STATUS' => 'Teste Bem sucedido',
    'LBL_LAST_CONNECTION_TEST' => 'Último Teste de Conexão',
    'LBL_LAST_SYNC_ATTEMPT_DATE' => 'Última Tentativa de Sincronização',
    'LBL_LAST_SYNC_ATTEMPT_STATUS' => 'Status da Sincronização',
    'LBL_LAST_SYNC_ATTEMPT_MESSAGE' => 'Sincronizar Mensagem',
    'LBL_LAST_SYNC_DATE' => 'Data da Última Sincronização',
    'LBL_EXTERNAL_CALENDAR_ID' => 'ID do Calendário Externo',
    'LBL_DUPLICATE_EXTERNAL_CALENDAR' => 'Este Calendário Externo já está conectado a conta',

    // Sync Actions
    'LBL_SYNC_NOW' => 'Sincronizar Agora',
    'LBL_SYNC_NOW_TITLE' => 'Sincronizar esta conta de calendário agora',
    'LBL_SYNC_NOW_CONFIRM' => 'Tem certeza de que deseja sincronizar esta conta de calendário agora?',
    'LBL_NO_ACCOUNT_ID' => 'Nenhum ID de conta do calendário foi fornecido',
    'LBL_SYNCING' => 'Sincronizando...',
    'LBL_NETWORK_ERROR' => 'Ocorreu um erro de rede ao sincronizar a conta de calendário. Tente novamente.',
    'LBL_UNKNOWN' => 'Desconhecido',
    'LBL_NOW' => 'agora',
    'LBL_SYNC_SUCCESS' => 'Sincronização com calendário concluída com sucesso',
    'LBL_SYNC_FAILED' => 'Falha na sincronização',
    'LBL_SYNC_FAILED_DEFAULT' => 'A sincronização do calendário falhou. Por favor, verifique os logs para detalhes.',
    'LBL_SYNC_RESPONSE_ERROR' => 'Ocorreu um erro ao processar a resposta de sincronização. Verifique os logs para obter detalhes.',
    'LBL_SYNC_IN_PROGRESS' => 'Sincronização já em andamento. Aguarde...',
    'LBL_SYNC_IN_PROGRESS_MESSAGE' => 'Sincronizando eventos do calendário. Isto pode demorar um pouco...',
    'LBL_PLEASE_WAIT' => 'Por favor, aguarde',
    // Permission and validation messages
    'LBL_NO_ACCESS' => 'Você não tem permissão para realizar esta ação.',
    'LBL_ALREADY_HAS_PERSONAL_ACCOUNT' => 'Este usuário já possui uma conta de calendário pessoal.',
    'LBL_ADMIN_ONLY_GROUP_ACCOUNT' => 'Apenas administradores podem criar contas de calendário compartilhado.',

    // Authentication validation messages
    'LBL_OAUTH_CONNECTION_REQUIRED' => 'Por favor, primeiro selecione uma conexão OAuth.',
    'LBL_BASIC_AUTH_FIELDS_REQUIRED' => 'Por favor, preencha todos os campos básicos de autenticação (nome de usuário, senha, URL do servidor).',
    'LBL_API_KEY_REQUIRED' => 'Por favor, insira uma chave de API.',
    'LBL_USING_SAVED_API_KEY' => 'Usando a chave de API previamente salva.',
    'LBL_UNKNOWN_AUTH_METHOD' => 'Método de autenticação desconhecido',
    'LBL_SELECT_CALENDAR_SOURCE_FIRST' => 'Você deve selecionar uma fonte do calendário primeiro.',

    // Connection test messages
    'LBL_CALENDAR' => 'Agenda',
    'LBL_SUCCESSFUL' => 'Sucesso',
    'LBL_FAILED' => 'Falha',
    'LBL_CONNECTION_TEST' => 'Teste de Conexão',
    'LBL_YES' => 'Sim',
    'LBL_NO' => 'Não',
    'LBL_FOUND_CALENDARS' => 'Encontrados {count} calendários.',
    'LBL_CONNECTION_TEST_RESPONSE_ERROR' => 'Ocorreu um erro ao processar a resposta do teste de conexão. Verifique os logs para obter detalhes.',
    'LBL_CONNECTION_TEST_HTTP_ERROR' => 'Falha no teste de conexão com status HTTP',
    'LBL_CONNECTION_NETWORK_ERROR' => 'Ocorreu um erro de rede ao testar a conexão com o calendário. Tente novamente.',
    'LBL_CONNECTION_TEST_SUCCESS_MESSAGE' => 'O teste de conexão foi concluído com sucesso. <br>Suas credenciais são válidas e o calendário está acessível.',
    'LBL_DUPLICATE_CALENDAR_ERROR' => 'Este calendário já está conectado a conta',

    // Authentication method error messages
    'LBL_AUTH_METHOD_ERROR' => 'Erro determinando método de autenticação',
    'LBL_AUTH_METHOD_PARSE_ERROR' => 'Erro ao analisar a resposta do método de autenticação',
    'LBL_AUTH_METHOD_GET_ERROR' => 'Erro ao identificar o método de autenticação da origem',

    // Dialog labels
    'LBL_NOTIFICATION' => 'Notificação',
    'LBL_CONFIRM' => 'Confirmar',
    'LBL_ARE_YOU_SURE' => 'Você tem certeza?',

    // Sync status enum translations
    'LBL_SYNC_STATUS_IN_PROGRESS' => 'Em Andamento',
    'LBL_SYNC_STATUS_SUCCESS' => 'Sucesso',
    'LBL_SYNC_STATUS_WARNING' => 'Alerta',
    'LBL_SYNC_STATUS_ERROR' => 'Erro',

    // Sync message enum translations
    'LBL_SYNC_MSG_SYNC_COMPLETE' => 'Todas as reuniões sincronizadas.',
    'LBL_SYNC_MSG_UP_TO_DATE' => 'Não há novas reuniões para sincronizar.',
    'LBL_SYNC_MSG_MEETINGS_FAILED' => 'Algumas reuniões falharam na sincronização. Verificar os logs.',
    'LBL_SYNC_MSG_SYNC_PARTIAL' => 'Algumas reuniões foram sincronizadas. Outras estão pendentes devido a limites.',
    'LBL_SYNC_MSG_SYNC_ERROR' => 'Erro de sincronização. Verificar logs.',
    'LBL_SYNC_MSG_TOKEN_EXPIRED' => 'Token de autenticação expirado.',
    'LBL_SYNC_MSG_CONNECTION_ERROR' => 'Erro de conexão.',
    'LBL_SYNC_MSG_CALENDAR_NOT_FOUND' => 'Calendário não encontrado.',

    // Relationship labels
    'LBL_MEETINGS' => 'Reuniões',
];