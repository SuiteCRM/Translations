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
    'LBL_REPLY_ADDR' => 'Endereço para Responder a: ',
    'LBL_REPLY_NAME' => 'Nome para Responder a: ',

    'LBL_MODULE_NAME' => 'E-mail Marketing',
    'LBL_MODULE_TITLE' => 'Marketing por E-mail: Início',
    'LBL_LIST_FORM_TITLE' => 'Campanhas de E-mail Marketing',
    'LBL_NAME' => 'Nome',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FROM_ADDR' => 'E-mail do Remetente',
    'LBL_LIST_DATE_START' => 'Data de Início',
    'LBL_LIST_TEMPLATE_NAME' => 'Modelo de Email',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Status de Fila',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Nome do Modelo',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado por:',
    'LBL_CREATED' => 'Criado por:',
    'LBL_MESSAGE_FOR' => 'Enviar Esta Mensagem Para:',

    'LBL_FROM_NAME' => 'Nome De:',
    'LBL_FROM_ADDR' => 'Endereço De:',
    'LBL_DATE_START' => 'Data de Início',
    'LBL_SEND_DATE' => 'Data de Envio',
    'LBL_SCHEDULED_START_DATE' => 'Data de execução agendada',
    'LBL_CHECK_DUPLICATE' => 'Manuseamento duplicado',
    'LBL_TIME_START' => 'Hora de Início',
    'LBL_START_DATE_TIME' => 'Data & Hora de Início:',
    'LBL_TEMPLATE' => 'Modelo de E-mail:',
    'LBL_TEMPLATE_SELECTED' => 'Modelo',

    'LBL_MODIFIED_BY' => 'Modificado por: ',
    'LBL_CREATED_BY' => 'Criado por: ',

    'LNK_NEW_CAMPAIGN' => 'Criar Campanha',
    'LNK_CAMPAIGN_LIST' => 'Campanhas',
    'LBL_RELATED_CAMPAIGN' => 'Campanha Relacionada',
    'LNK_NEW_PROSPECT_LIST' => 'Criar Nova Lista de Alvos',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de Alvos',
    'LNK_NEW_PROSPECT' => 'Criar Alvo',
    'LNK_PROSPECT_LIST' => 'Alvos',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-mail Marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Criar',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Editar',
    'LBL_FROM_MAILBOX' => 'Caixa de Correio De',
    'LBL_FROM_MAILBOX_NAME' => 'Usar Caixa de Correio:',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Conta para envio de e-mails:',
    'LBL_FROM' => 'De',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Listas de Alvos',
    'LBL_ALL_PROSPECT_LISTS' => 'Selecione para escolher todas listas de alvos na campanha.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Todas listas de alvos relacionadas a esta mensagem.',
    'LBL_PROSPECT_LIST_NAME' => 'Nome da Lista de Alvos',
    'LBL_TARGET_LISTS' => 'Lista(s) de Alvos',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listas de Alvos',
    'LBL_MODULE_SEND_TEST' => 'Campanha: Enviar Teste',
    'LBL_MODULE_SEND_EMAILS' => 'Campanha: Enviar Emails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Por favor, selecione as mensagens de campanha que gostaria de enviar como teste:',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Por favor, selecione as mensagens de campanha para as quais gostaria de agendar o envio em determinada data e hora:',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Enviar',
    'LBL_SEND_BUTTON_LABEL' => 'Enviar',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Agendar',
    'LBL_ERROR_ON_MARKETING' => 'Campo(s) obrigatórios não preenchidos',

    'LBL_CAMPAIGN_ID' => 'ID da Campanha',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'ID de conta de e-mail de saída',
    'LBL_EMAIL_TEMPLATE' => 'Modelo de E-mail',
    'LBL_PROSPECT_LISTS' => 'Listas de Alvos',
    'LBL_OVERVIEW' => 'Básico',
    'LBL_EMAIL_CONFIG' => 'Configurações de Email',
    'LBL_CONFIGS' => 'CONFIGURAÇÕESS',
    'LBL_EMAIL' => 'EMAIL',
    'LBL_BODY' => 'Corpo',
    'LBL_MARKETING_TYPE' => 'Tipo de Marketing',
    'LBL_SURVEY' => 'Pesquisa',
    'LBL_SCHEDULE' => 'Agendar',
    'LBL_RESUME' => 'Continuar',
    'LBL_PAUSE_REASON' => 'Motivo da Pausa',
    'LBL_DELETE_TEST_ENTRIES' => 'Excluir Entradas de Teste',
    'LBL_UNSCHEDULE' => 'Desprogramar',
    'LBL_ABORT' => 'Interromper',
    'LBL_USERS' => 'Usuários',
    'LBL_SEND_TEST_EMAIL' => 'Enviar Email de Teste',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Por favor, selecione registros com Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Fila de mensagens',
    'LBL_SCHEDULED_START_DATE_HELP' => 'O envio será processado em lotes. Isto pode demorar minutos/horas.',
    'LBL_TARGET_LISTS_HELP' => 'Destinatários de marketing. Destinatários das listas de supressão da campanha serão bloqueados.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'O processo de marketing só começará quando agendado.',
    'LBL_TYPE_MARKETING_HELP' => 'Os destinatários estão sujeitos à validação de opt-out.',
    'LBL_TYPE_LEGACY_HELP' => 'Este é um Registro de Email de Marketing Legado e existe para fins históricos de dados.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Os destinatários NÃO estão sujeitos à validação de opt-out.',

    'LBL_SCHEDULER_WIDGET' => 'Diagnósticos de Email de Marketing',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Enfileirar Emails de Campanha',
    'LBL_OOTB_BOUNCE' => 'Executar processo noturno de processamento de Emails de campanha devolvidos',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Enviar Emails de Campanha',
    'LBL_SCHEDULERS' => 'Agendadores',
    'LBL_INBOUND_EMAIL' => 'Email de Entrada',

    'LBL_TRACKERS_ENABLED' => 'Rastreadores Habilitados',
    'LBL_TRACKER_LINKS_ENABLED' => 'Links de Rastreadores Ativados',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'Quando ativado, links substituirão os links do rastreador que monitoram os cliques.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'Quando desativado, links NÃO serão substituídos pelos links do rastreador que monitoram cliques.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Rastreadores desativados globalmente. Visualizações de Emails e cliques não serão rastreados.',
    'LBL_HAS_TEST_DATA' => 'Tem dados de teste',
);
