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


    'LBL_RE' => 'RE:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Nome de utilizador ou senha incorretos',
    'ERR_INI_ZLIB' => 'Não foi possível desativar compressão Zlib temporariamente. "Definições de teste" podem falhar.',
    'ERR_NO_IMAP' => 'Nenhuma biblioteca IMAP encontrada. Por favor, resolva isto antes de continuar com correio de entrada',
    'ERR_NO_OPTS_SAVED' => 'Não foi guardado qualquer parâmetro otimizado para a sua conta de correio de entrada. Por favor, verifique as definições',
    'ERR_TEST_MAILBOX' => 'Por favor, verifique as suas definições e tente novamente.',
    'ERR_INVALID_PORT' => 'Porta inválida',

    'LBL_ASSIGN_TO_USER' => 'Atribuir ao utilizador',
    'LBL_AUTOREPLY' => 'Modelo de resposta automática',
    'LBL_AUTOREPLY_HELP' => 'Selecione uma resposta automática para notificar os remetentes de email que a sua resposta foi recebida.',
    'LBL_BASIC' => 'Dados da conta de email',
    'LBL_CASE_MACRO' => 'Macro de ocorrência',
    'LBL_CASE_MACRO_DESC' => 'Ajustar a macro que será analisada sintaticamente e utilizada para ligar emails importados a uma ocorrência.',
    'LBL_CASE_MACRO_DESC2' => 'Defina para um valor qualquer, mas mantenha o <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Fechar janela',
    'LBL_CREATE_TEMPLATE' => 'Criar',
    'LBL_DELETE_SEEN' => 'Eliminar emails lidos após importação',
    'LBL_EDIT_TEMPLATE' => 'Editar',
    'LBL_EMAIL_OPTIONS' => 'Opções de manuseamento de email',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opções de Tratamento de mensagens devolvidas',
    'LBL_FILTER_DOMAIN_DESC' => 'Não envie respostas automáticas para este domínio.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Selecione para criar automaticamente registos de email para todos os emails recebidos.',
    'LBL_FILTER_DOMAIN' => 'Não responder automaticamente a este domínio.',
    'LBL_FIND_SSL_WARN' => '<br> O teste ao SSL pode demorar. Por favor, seja paciente.<br>',
    'LBL_FROM_ADDR' => 'Endereço do remetente',
    'LBL_FROM_ADDR_DESC' => 'O endereço de email aqui indicado pode não aparecer na secção &quot;Remetente&quot; do email enviado devido a restrições impostas pelo fornecedor do serviço de correio. Nestes casos, será usado o endereço de email definido no servidor de correio de saída.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nome do remetente',
    'LBL_GROUP_QUEUE' => 'Atribuir ao grupo',
    'LBL_HOME' => 'Entrada',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilização da conta de correio',
    'LBL_LIST_NAME' => 'Nome:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tipo',
    'LBL_LIST_SERVER_URL' => 'Servidor de Correio:',
    'LBL_SERVER_ADDRESS' => 'Endereço do servidor',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_LOGIN' => 'Nome do utilizador',
    'LBL_USERNAME' => 'Nome do utilizador',
    'LBL_MAILBOX_DEFAULT' => 'Caixa de entrada',
    'LBL_MAILBOX_SSL' => 'Utilizar SSL',
    'LBL_MAILBOX_TYPE' => 'Ações possíveis',
    'LBL_DISTRIBUTION_METHOD' => 'Método de distribuição',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Criar modelo de resposta automática a ocorrência',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selecione uma resposta automática para notificar os remetentes do email de que foi criada uma ocorrência. O email contém o número do processo na linha de assunto, conforme a definição da macro das ocorrências. Esta resposta só é enviada quando o primeiro email for recebido pelo destinatário.',
    'LBL_MAILBOX' => 'Pasta monitorizada',
    'LBL_TRASH_FOLDER' => 'Pasta de lixeira',
    'LBL_SENT_FOLDER' => 'Pasta de enviados',
    'LBL_SELECT' => 'Selecionar',
    'LBL_MARK_READ_NO' => 'Email marcado para eliminação após importação',
    'LBL_MARK_READ_YES' => 'Email deixado no servidor após importação',
    'LBL_MARK_READ' => 'Deixar Mensagens no Servidor',
    'LBL_MAX_AUTO_REPLIES' => 'Número de respostas automáticas',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Definir o número máximo de respostas automáticas a enviar para um único endereço de email durante um período de 24 horas.',
    'LBL_PERSONAL_MODULE_NAME' => 'Conta de email pessoal',
    'LBL_CREATE_CASE' => 'Criar ocorrência a partir de email',
    'LBL_CREATE_CASE_HELP' => 'Selecione para criar automaticamente ocorrências no CRM a partir dos emails recebidos.',
    'LBL_MODULE_NAME' => 'Contas de entrada de correio',
    'LBL_BOUNCE_MODULE_NAME' => 'Caixa de Correio de tratamento de devoluções',
    'LBL_MODULE_TITLE' => 'Contas de entrada de correio',
    'LBL_NAME' => 'Nome',
    'LBL_NONE' => 'Nenhum',
    'LBL_ONLY_SINCE_NO' => 'Não. Verificar todos os emails no servidor de mail.',
    'LBL_ONLY_SINCE_YES' => 'Sim.',
    'LBL_PASSWORD' => 'Senha',
    'LBL_EMAIL_PASSWORD' => 'Senha',
    'LBL_POP3_SUCCESS' => 'A conexão POP3 teve sucesso.',
    'LBL_POPUP_TITLE' => 'Testar Definições',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Selecionar Pasta(s) Subscrita(s)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Selecionar pasta de lixeira',
    'LBL_SELECT_SENT_FOLDERS' => 'Selecionar pasta de enviados',
    'LBL_DELETED_FOLDERS_LIST' => 'A(s) seguinte(s) pasta(s) %s não existem ou foram eliminadas do servidor',
    'LBL_PORT' => 'Porta do Servidor de Correio',
    'LBL_REPLY_TO_NAME' => 'Nome de "Responder a"',
    'LBL_REPLY_TO_ADDR' => 'Endereço de "Responder a"',
    'LBL_SAME_AS_ABOVE' => 'Utilizando nome/endereço de remetente',
    'LBL_SERVER_OPTIONS' => 'Opções avançadas do servidor de email',
    'LBL_SERVER_TYPE' => 'Servidor de correio — Protocolo',
    'LBL_SERVER_PORT' => 'Porta do Servidor de Correio',
    'LBL_SERVER_URL' => 'Servidor de correio — Endereço',
    'LBL_SSL_DESC' => 'Se o seu servidor de correio suporta ligações de socket seguras, a ativação irá forçar ligações SSL ao importar o email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'A equipa selecionada tem acesso à conta de correio.',
    'LBL_SSL' => 'Utilizar SSL',
    'LBL_STATUS' => 'Situação',
    'LBL_EMAIL_BODY_FILTERING' => 'Tipo de filtro do corpo de email',
    'LBL_SYSTEM_DEFAULT' => 'Predefinição do sistema',
    'LBL_TEST_BUTTON_TITLE' => 'Teste',
    'LBL_TEST_SETTINGS' => 'Testar Definições',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Testar configurações de ligação',
    'LBL_TEST_SUCCESSFUL' => 'Ligação efetuada com êxito.',
    'LBL_TEST_WAIT_MESSAGE' => 'Um momento, por favor...',
    'LBL_WARN_IMAP_TITLE' => 'Entrada de correio desativada',
    'LBL_WARN_IMAP' => 'Alertas:',
    'LBL_WARN_NO_IMAP' => 'Entrada de correio <b>não pode</b> funcionar sem as bibliotecas IMAP c-client ativadas/compiladas com o módulo PHP.  Por favor, contacte o administrador para resolver este problema.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nova conta pessoal',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nova conta de grupo',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'Nova conta de ocorrência',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nova caixa de correio de tratamento de devolvidos',
    'LNK_LIST_MAILBOXES' => 'Contas de entrada de correio',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Contas de saída de correio',
    'LNK_LIST_SCHEDULER' => 'Agendadores',
    'LNK_SEED_QUEUES' => 'Filas automáticas das equipas',
    'LBL_GROUPFOLDER_ID' => 'Id de Pasta de Grupo',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir aos utilizadores enviar emails usando o nome e endereço do remetente como endereço para resposta',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Quando esta opção estiver selecionada, o nome e endereço de email de origem associados a esta conta de correio do grupo vão aparecer como uma opção para o campo do nome de remetente quando enviar mensagens para utilizadores que têm acesso à conta de correio do grupo.',
    'LBL_STATUS_ACTIVE' => 'Ativo',
    'LBL_STATUS_INACTIVE' => 'Inativo',
    'LBL_IS_PERSONAL' => 'Pessoal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar emails automaticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Atenção: está a modificar a configuração automática de importação, o que podem resultar em perda de dados.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Atenção: a importação automática tem de ser ativada para a criação automática de ocorrências.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Rascunhos',
    'LBL_LIST_TITLE_MY_INBOX' => 'Caixa de entrada',
    'LBL_LIST_TITLE_MY_SENT' => 'Email enviado',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Emails arquivados',
    'LNK_MY_DRAFTS' => 'Rascunhos',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'Ver correio',
    'LNK_QUICK_REPLY' => 'Responder',
    'LNK_SENT_EMAIL_LIST' => 'Emails enviados',
    'LBL_EDIT_LAYOUT' => 'Editar esquema' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Alterado por',
    'LBL_SERVICE' => 'Serviços',
    'LBL_STORED_OPTIONS' => 'Opções armeazenadas',
    'LBL_GROUP_ID' => 'ID de grupo',

    'LBL_OUTBOUND_CONFIGURATION' => 'Configuração da saída de correio',
    'LBL_CONNECTION_CONFIGURATION' => 'Configuração do servidor',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Configuração de resposta automática',
    'LBL_CASE_CONFIGURATION' => 'Configuração de ocorrências',
    'LBL_GROUP_CONFIGURATION' => 'Configuração do grupo',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de segurança',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Conta de saída de correio',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'ID da conta de saída de correio',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Conta de saída de correio',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Modelo de email de resposta automática',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'ID de modelo de email de resposta automática',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Modelo de email de resposta automática',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Modelo de email de ocorrência',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'ID de modelo de email de ocorrência',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Modelo de email de ocorrência',

    'LBL_PROTOCOL' => 'Protocolo',
    'LBL_CONNECTION_STRING' => 'String de ligação',
    'LBL_DISTRIB_METHOD' => 'Método de distribuição',
    'LBL_DISTRIB_OPTIONS' => 'Opções de distribuição',

    'LBL_DISTRIBUTION_USER' => 'Utilizador de distribuição',
    'LBL_DISTRIBUTION_USER_ID' => 'ID de utilizador de distribuição',
    'LBL_DISTRIBUTION_USER_NAME' => 'Utilizador de distribuição',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Ligação OAuth externa',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'ID de ligação OAuth externa',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Ligação OAuth externa',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Ligações OAuth externas',

    'LBL_TYPE' => 'Tipo',
    'LBL_AUTH_TYPE' => 'Tipo de autenticação',
    'LBL_IS_DEFAULT' => 'Predefinido',
    'LBL_SIGNATURE' => 'Assinatura',

    'LBL_OWNER_NAME' => 'Proprietário',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Definir como predefinição',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Mover mensagens para a lixeira após importar?',
);
