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

    'LBL_SHAREDWEEK' => 'Semana partilhada',
    'LBL_SHAREDMONTH' => 'Mês partilhado',

    'LBL_MODULE_NAME' => 'Calendário',
    'LBL_MODULE_TITLE' => 'Calendário',
    'LNK_NEW_CALL' => 'Agendar telefonema',
    'LNK_NEW_MEETING' => 'Agendar reunião',
    'LNK_NEW_TASK' => 'Criar tarefa',
    'LNK_CALL_LIST' => 'Telefonemas',
    'LNK_MEETING_LIST' => 'Reuniões',
    'LNK_TASK_LIST' => 'Tarefas',
    'LNK_TASK' => 'Tarefa',
    'LNK_TASK_VIEW' => 'Ver tarefa',
    'LNK_EVENT' => 'Evento',
    'LNK_EVENT_VIEW' => 'Ver evento',
    'LNK_VIEW_CALENDAR' => 'Hoje',
    'LNK_IMPORT_CALLS' => 'Importar telefonemas',
    'LNK_IMPORT_MEETINGS' => 'Importar reuniões',
    'LNK_IMPORT_TASKS' => 'Importar tarefas',
    'LBL_MONTH' => 'Mês',
    'LBL_AGENDADAY' => 'Dia',
    'LBL_YEAR' => 'Ano',

    'LBL_AGENDAWEEK' => 'Semana',
    'LBL_PREVIOUS_MONTH' => 'Mês anterior',
    'LBL_PREVIOUS_DAY' => 'Dia anterior',
    'LBL_PREVIOUS_YEAR' => 'Ano anterior',
    'LBL_PREVIOUS_WEEK' => 'Semana anterior',
    'LBL_NEXT_MONTH' => 'Próximo mês',
    'LBL_NEXT_DAY' => 'Dia seguinte',
    'LBL_NEXT_YEAR' => 'Ano seguinte',
    'LBL_NEXT_WEEK' => 'Semana seguinte',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Criado',
    'LBL_BUSY' => 'Ocupado',
    'LBL_CONFLICT' => 'Conflito',
    'LBL_USER_CALENDARS' => 'Calendários de utilizador',
    'LBL_SHARED' => 'Partilhado',
    'LBL_PREVIOUS_SHARED' => 'Anterior',
    'LBL_NEXT_SHARED' => 'Seguinte',
    'LBL_SHARED_CAL_TITLE' => 'Calendário partilhado',
    'LBL_USERS' => 'Utilizadores',
    'LBL_REFRESH' => 'Atualizar',
    'LBL_EDIT_USERLIST' => 'Lista de utilizadores',
    'LBL_SELECT_USERS' => 'Selecione utilizadores para exibir o calendário',
    'LBL_FILTER_BY_TEAM' => 'Filtrar lista de utilizadores por equipa:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_DATE' => 'Data e hora de início',
    'LBL_CREATE_MEETING' => 'Agendar reunião',
    'LBL_CREATE_CALL' => 'Registar telefonema',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Sim',
    'LBL_NO' => 'Não',
    'LBL_SETTINGS' => 'Configurações',
    'LBL_CREATE_NEW_RECORD' => 'Criar atividade',
    'LBL_LOADING' => 'A carregar...',
    'LBL_SAVING' => 'A guardar...',
    'LBL_SENDING_INVITES' => 'A guardar e enviar convites...',
    'LBL_CONFIRM_REMOVE' => 'Tem certeza de que pretende remover o registo?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Tem certeza de que pretende eliminar todos os registos recorrentes?',
    'LBL_EDIT_RECORD' => 'Editar atividade',
    'LBL_ERROR_SAVING' => 'Erro ao guardar',
    'LBL_ERROR_LOADING' => 'Erro ao carregar',
    'LBL_GOTO_DATE' => 'Ir para a data',
    'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
    'LBL_STYLE_BASIC' => 'Básica', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Avançada', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Não existe correspondência para o campo: atribuído a',
    'LBL_SUBJECT' => 'Assunto',
    'LBL_DURATION' => 'Duração',
    'LBL_STATUS' => 'Situação',
    'LBL_PRIORITY' => 'Prioridade',

    'LBL_SETTINGS_TITLE' => 'Configurações',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostrar intervalos de tempo nas vistas diária e semanal:',
    'LBL_SETTINGS_TIME_STARTS' => 'Hora de início:',
    'LBL_SETTINGS_TIME_ENDS' => 'Hora de fim:',
    'LBL_SETTINGS_CALLS_SHOW' => 'Mostrar telefonemas:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Mostrar tarefas:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Mostrar reuniões, telefonemas e tarefas concluídas:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Calendário partilhado - separação:',

    'LBL_SAVE_BUTTON' => 'Guardar',
    'LBL_DELETE_BUTTON' => 'Eliminar',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Guardar e enviar convites',
    'LBL_CANCEL_BUTTON' => 'Cancelar',
    'LBL_CLOSE_BUTTON' => 'Fechar',

    'LBL_GENERAL_TAB' => 'Detalhes',
    'LBL_PARTICIPANTS_TAB' => 'Convidados',
    'LBL_REPEAT_TAB' => 'Recorrência',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'Cada',
    'LBL_REPEAT_END' => 'Final',
    'LBL_REPEAT_END_AFTER' => 'Depois',
    'LBL_REPEAT_OCCURRENCES' => 'recorrências',
    'LBL_REPEAT_END_BY' => 'Por',
    'LBL_REPEAT_DOW' => 'Em',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Número de recorrências',
    'LBL_REPEAT_LIMIT_ERROR' => 'O seu pedido iria criar mais de $limit reuniões.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editar todas as recorrências',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Eliminar todas as recorrências',

    'LBL_DATE_END_ERROR' => 'A data de término ocorre antes da data de início',
    'ERR_YEAR_BETWEEN' => 'Lamento, o calendário não consegue lidar com o ano que solicitou.<br>O ano deve estar entre 1970 e 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: não está definido para est vista',
    'LBL_NO_ITEMS_MOBILE' => 'O seu calendário está vazio para esta semana.',
    'LBL_GENERAL_SETTINGS' => 'Configurações gerais',
    'LBL_COLOR_SETTINGS' => 'Configuração de cores',
    'LBL_MODULE' => 'Módulo',
    'LBL_BODY' => 'Corpo',
    'LBL_BORDER' => 'Contornos',
    'LBL_TEXT' => 'Texto',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Dom.",
            '1' => "Seg.",
            '2' => "Ter.",
            '3' => "Qua.",
            '4' => "Qui.",
            '5' => "Sex.",
            '6' => "Sáb.",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Domingo",
            '1' => "Segunda-feira",
            '2' => "Terça-feira",
            '3' => "Quarta-feira",
            '4' => "Quinta-feira",
            '5' => "Sexta-feira",
            '6' => "Sábado",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan.",
            '2' => "Fev.",
            '3' => "Mar.",
            '4' => "Abr.",
            '5' => "Maio",
            '6' => "Jun.",
            '7' => "Jul.",
            '8' => "Ago.",
            '9' => "Set.",
            '10' => "Out.",
            '11' => "Nov.",
            '12' => "Dez.",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "Janeiro",
            '2' => "Fevereiro",
            '3' => "Março",
            '4' => "Abril",
            '5' => "Maio",
            '6' => "Junho",
            '7' => "Julho",
            '8' => "Agosto",
            '9' => "Setembro",
            '10' => "Outubro",
            '11' => "Novembro",
            '12' => "Dezembro",
        ),
);
