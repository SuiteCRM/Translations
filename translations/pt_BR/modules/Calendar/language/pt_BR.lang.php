<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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

    'LBL_SHAREDWEEK' => 'Semana Compartilhada',
    'LBL_SHAREDMONTH' => 'Mês Compartilhado',

    'LBL_MODULE_NAME' => 'Agenda',
    'LBL_MODULE_TITLE' => 'Agenda',
    'LNK_NEW_CALL' => 'Agendar Ligação',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Nova Tarefa',
    'LNK_CALL_LIST' => 'Ligações',
    'LNK_MEETING_LIST' => 'Reuniões',
    'LNK_TASK_LIST' => 'Tarefas',
    'LNK_TASK' => 'Tarefa',
    'LNK_TASK_VIEW' => 'Exibir Tarefa',
    'LNK_EVENT' => 'Event',
    'LNK_EVENT_VIEW' => 'Exibir Evento',
    'LNK_VIEW_CALENDAR' => 'Today',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Import Tasks',
    'LBL_MONTH' => 'Month',
    'LBL_AGENDADAY' => 'Day',
    'LBL_YEAR' => 'Ano',

    'LBL_AGENDAWEEK' => 'Semana',
    'LBL_PREVIOUS_MONTH' => 'Mês Anterior',
    'LBL_PREVIOUS_DAY' => 'Dia Anterior',
    'LBL_PREVIOUS_YEAR' => 'Ano Anterior',
    'LBL_PREVIOUS_WEEK' => 'Semana Anterior',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Próximo Dia',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Próxima Semana',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Agendado',
    'LBL_BUSY' => 'Ocupado',
    'LBL_CONFLICT' => 'Conflito',
    'LBL_USER_CALENDARS' => 'Calendários do Usuário',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Previous',
    'LBL_NEXT_SHARED' => 'Next',
    'LBL_SHARED_CAL_TITLE' => 'Calendário Partilhado',
    'LBL_USERS' => 'usuários',
    'LBL_REFRESH' => 'Atualizar',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Selecione Usuários para exibir o calendário',
    'LBL_FILTER_BY_TEAM' => 'Filtrar lista de Usuários por equipe:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_DATE' => 'Data e Hora de Início',
    'LBL_CREATE_MEETING' => 'Schedule Meeting',
    'LBL_CREATE_CALL' => 'Log Call',
    'LBL_HOURS_ABBREV' => 'Hrs',
    'LBL_MINS_ABBREV' => 'Mnts',


    'LBL_YES' => 'Sim',
    'LBL_NO' => 'Não',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Criar Atividade',
    'LBL_LOADING' => 'Loading...',
    'LBL_SAVING' => 'Garavando...',
    'LBL_SENDING_INVITES' => 'Salvando e Enviando Convites...',
    'LBL_CONFIRM_REMOVE' => 'Tem certeza que deseja remover este registro?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Ten certeza que deseja remover todos os registros recorrentes?',
    'LBL_EDIT_RECORD' => 'Editar Atividade',
    'LBL_ERROR_SAVING' => 'Erro ao Salvar',
    'LBL_ERROR_LOADING' => 'Erro ao Carregar',
    'LBL_GOTO_DATE' => 'Ir para a Data',
    'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
    'LBL_STYLE_BASIC' => 'BASIC', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Avançada', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Usuário não encontrado',
    'LBL_SUBJECT' => 'Subject',
    'LBL_DURATION' => 'Duração',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostrar horários nas visualizações de Dia e Semana',
    'LBL_SETTINGS_TIME_STARTS' => 'Data de Início',
    'LBL_SETTINGS_TIME_ENDS' => 'Data de término',
    'LBL_SETTINGS_CALLS_SHOW' => 'Visualizar Ligações:',
    'LBL_SETTINGS_TASKS_SHOW' => 'Mostrar tarefas:',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Mostrar as reuniões, chamadas e tarefas concluídas:',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Calendário Compartilhado Separado:',

    'LBL_SAVE_BUTTON' => 'Salvar',
    'LBL_DELETE_BUTTON' => 'Delete',
    'LBL_APPLY_BUTTON' => 'Aplicar',
    'LBL_SEND_INVITES' => 'Salvar e Enviar Convites',
    'LBL_CANCEL_BUTTON' => 'Cancel',
    'LBL_CLOSE_BUTTON' => 'Fechar',

    'LBL_GENERAL_TAB' => 'Detalhes',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Recorrência',

    'LBL_REPEAT_TYPE' => 'Repetir',
    'LBL_REPEAT_INTERVAL' => 'A cada',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'Depois de',
    'LBL_REPEAT_OCCURRENCES' => 'recorrências',
    'LBL_REPEAT_END_BY' => 'Por',
    'LBL_REPEAT_DOW' => 'Em',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Número de recorrências',
    'LBL_REPEAT_LIMIT_ERROR' => 'Sua requisição irá gerar mais que o Limite de reuniões',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editar Todas as Recorrências',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Excluir Todas as Recorrências',

    'LBL_DATE_END_ERROR' => 'Data final está antes de data incial',
    'ERR_YEAR_BETWEEN' => 'Desculpa, calendário não consegue lidar com o ano que você solicitou. <br>O ano deve estar entre 1970 e 2037.',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: não definida para esta visualização',
    'LBL_NO_ITEMS_MOBILE' => 'O seu calendário está vazio esta semana.',
    'LBL_GENERAL_SETTINGS' => 'Configurações Gerais',
    'LBL_COLOR_SETTINGS' => 'Definições de cores',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Borda',
    'LBL_TEXT' => 'Text',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sun",
            '1' => "Mon",
            '2' => "Tue",
            '3' => "Wed",
            '4' => "Thu",
            '5' => "Fri",
            '6' => "Sat",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sunday",
            '1' => "Monday",
            '2' => "Tuesday",
            '3' => "Wednesday",
            '4' => "Thursday",
            '5' => "Friday",
            '6' => "Saturday",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "May",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "January",
            '2' => "February",
            '3' => "March",
            '4' => "April",
            '5' => "May",
            '6' => "June",
            '7' => "July",
            '8' => "August",
            '9' => "September",
            '10' => "October",
            '11' => "November",
            '12' => "December",
        ),
);
