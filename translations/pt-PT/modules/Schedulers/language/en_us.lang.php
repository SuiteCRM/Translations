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
// OOTB Scheduler Job Names:
    'LBL_OOTB_WORKFLOW' => 'Processar tarefas de fluxo',
    'LBL_OOTB_REPORTS' => 'Executar tarefas agendadas de criação de relatórios',
    'LBL_OOTB_IE' => 'Verificar caixas de entrada de email',
    'LBL_OOTB_BOUNCE' => 'Executar à noite o processamento de emails de campanhas devolvidos',
    'LBL_OOTB_CAMPAIGN' => 'Executar à noite o envio em lote de emails de campanhas',
    'LBL_OOTB_PRUNE' => 'Purgar base de dados no primeiro dia do mês',
    'LBL_OOTB_TRACKER' => 'Purgar tabelas de rastreios',
    'LBL_OOTB_SUITEFEEDS' => 'Purgar tabelas de sinais do SuiteCRM',
    'LBL_OOTB_SEND_EMAIL_REMINDERS' => 'Executar notificações de lembretes por email',
    'LBL_OOTB_CLEANUP_QUEUE' => 'Limpar trabalhos em espera',
    'LBL_OOTB_REMOVE_DOCUMENTS_FROM_FS' => 'Remoção de documentos do sistema de ficheiros',
    'LBL_OOTB_GOOGLE_CAL_SYNC' => 'Sincronização de calendário Google',
    'LBL_OOTB_ELASTIC_INDEX' => 'Executar Indexador Elasticsearch',

// List Labels
    'LBL_LIST_JOB_INTERVAL' => 'Frequência:',
    'LBL_LIST_LIST_ORDER' => 'Agendadores:',
    'LBL_LIST_NAME' => 'Agendador:',
    'LBL_LIST_RANGE' => 'Intervalo:',
    'LBL_LIST_STATUS' => 'Situação:',
    'LBL_LIST_TITLE' => 'Lista de tarefas agendadas:',
// human readable:
    'LBL_SUN' => 'Domingo',
    'LBL_MON' => 'Segunda-feira',
    'LBL_TUE' => 'Terça-feira',
    'LBL_WED' => 'Quarta-feira',
    'LBL_THU' => 'Quinta-feira',
    'LBL_FRI' => 'Sexta-feira',
    'LBL_SAT' => 'Sábado',
    'LBL_ALL' => 'Todos os dias',
    'LBL_EVERY' => 'Cada',
    'LBL_FROM' => 'De',
    'LBL_ON_THE' => 'Em',
    'LBL_RANGE' => 'para',
    'LBL_AND' => 'e',
    'LBL_MINUTES' => 'minutos',
    'LBL_HOUR' => ' horas',
    'LBL_HOUR_SING' => 'hora',
    'LBL_OFTEN' => 'Sempre que possível.',
    'LBL_MIN_MARK' => ' sinal de minutos',


// crontabs
    'LBL_MINS' => 'min',
    'LBL_HOURS' => 'hrs',
    'LBL_DAY_OF_MONTH' => 'data',
    'LBL_MONTHS' => 'mês',
    'LBL_DAY_OF_WEEK' => 'dia',
    'LBL_CRONTAB_EXAMPLES' => 'A lista acima usa notações crontab predefinidas.',
// Labels
    'LBL_ALWAYS' => 'Sempre',
    'LBL_CATCH_UP' => 'Executar se falhar',
    'LBL_CATCH_UP_WARNING' => 'Desmarque se esta Tarefa levar mais do que um momento para se executada.',
    'LBL_DATE_TIME_END' => 'Data e hora de fim',
    'LBL_DATE_TIME_START' => 'Data e hora de início',
    'LBL_INTERVAL' => 'Intervalo',
    'LBL_JOB' => 'Tarefa',
    'LBL_JOB_URL' => 'URL da tarefa',
    'LBL_LAST_RUN' => 'Última execução bem-sucedida',
    'LBL_MODULE_NAME' => 'Agendador SuiteCRM',
    'LBL_MODULE_TITLE' => 'Agendadores',
    'LBL_NAME' => 'Nome da Tarefa',
    'LBL_NEVER' => 'Nunca',
    'LBL_NEW_FORM_TITLE' => 'Novo agendamento',
    'LBL_PERENNIAL' => 'perpétua',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar agendador',
    'LBL_SCHEDULER' => 'Agendador:',
    'LBL_STATUS' => 'Situação',
    'LBL_TIME_FROM' => 'Ativo desde',
    'LBL_TIME_TO' => 'Ativo até',
    'LBL_WARN_CURL_TITLE' => 'Alerta cURL:',
    'LBL_WARN_CURL' => 'Alerta:',
    'LBL_WARN_NO_CURL' => 'Este sistema não tem bibliotecas cURL ativadas/compiladas no módulo PHP (--with-curl=/path/to/curl_library). Por favor, contacte o seu administrador de sistemas para resolver esta questão. Sem a funcionalidade cURL, o agendador não pode executar as suas tarefas.',
    'LBL_BASIC_OPTIONS' => 'Configuração básica',
    'LBL_ADV_OPTIONS' => 'Opções avançadas',
    'LBL_TOGGLE_ADV' => 'Mostrar opções avançadas',
    'LBL_TOGGLE_BASIC' => 'Mostrar opções básicas',
// Links
    'LNK_LIST_SCHEDULER' => 'Agendadores',
    'LNK_NEW_SCHEDULER' => 'Agendar tarefa',
// Messages
    'ERR_CRON_SYNTAX' => 'Sintaxe Cron inválida',
    'NTC_LIST_ORDER' => 'Configure a ordem pela qual este agendamento aparecerá nas listas de valores do agendador',
    'LBL_CRON_INSTRUCTIONS_WINDOWS' => 'Para configurar o agendador do Windows',
    'LBL_CRON_INSTRUCTIONS_LINUX' => 'Para configurar o Crontab',
    'LBL_CRON_LINUX_DESC1' => 'Para executar os agendadores de SuiteCRM, edite o crontab dos seus utilizadores de servidor com o seguinte comando:',
    'LBL_CRON_LINUX_DESC2' => '... e adicione a seguinte linha ao ficheiro de crontab:',
    'LBL_CRON_LINUX_DESC3' => 'Deve fazer isto apenas depois da instalação estar concluída.',
    'LBL_CRON_WINDOWS_DESC' => 'Para executar os agendadores de SuiteCRM, crie um ficheiro batch para ser executado usando as tarefas agendadas do Windows. O ficheiro de execução deve incluir os seguintes comandos:',
// Subpanels
    'LBL_JOBS_SUBPANEL_TITLE' => 'Historial de tarefas',
    'LBL_EXECUTE_TIME' => 'Tempo de execução',

//jobstrings
    'LBL_REFRESHJOBS' => 'Atualizar tarefas',
    'LBL_POLLMONITOREDINBOXES' => 'Verificar contas de correio de entrada',
    'LBL_PERFORMFULLFTSINDEX' => 'Sistema de indexação da pesquisa em texto integral',

    'LBL_RUNMASSEMAILCAMPAIGN' => 'Executar à noite o envio em lote de emails de campanhas',
    'LBL_POLLMONITOREDINBOXESFORBOUNCEDCAMPAIGNEMAILS' => 'Executar à noite o processamento de emails de campanhas devolvidos',
    'LBL_PRUNEDATABASE' => 'Purgar base de dados no primeiro dia do mês',
    'LBL_TRIMTRACKER' => 'Purgar tabelas de rastreios',
    'LBL_TRIMSUGARFEEDS' => 'Purgar tabelas de sinais do SuiteCRM',
    'LBL_SENDEMAILREMINDERS' => 'Executar o envio dos lembretes por email',
    'LBL_CLEANJOBQUEUE' => 'Limpar trabalhos em espera',
    'LBL_REMOVEDOCUMENTSFROMFS' => 'Remoção de documentos do sistema de ficheiros',

    'LBL_POLLMONITOREDINBOXESAOP' => 'AOP — Verificar caixas monitorizadas',
    'LBL_AORRUNSCHEDULEDREPORTS' => 'Executar relatórios agendados',
    'LBL_PROCESSAOW_WORKFLOW' => 'Processar tarefas de fluxo AOW',

    'LBL_RUNELASTICSEARCHINDEXERSCHEDULER' => 'Indexador Elasticsearch',

    'LBL_SCHEDULER_TIMES' => 'Horários de agendamento',
    'LBL_SYNCGOOGLECALENDAR' => 'Sincronizar calendários Google',
);

global $sugar_config;
