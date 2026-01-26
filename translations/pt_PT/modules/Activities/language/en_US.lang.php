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
    'LBL_MODULE_NAME' => 'Atividades',
    'LBL_MODULE_TITLE' => 'Atividades: Entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar atividades',
    'LBL_LIST_FORM_TITLE' => 'Lista de atividades',
    'LBL_LIST_SUBJECT' => 'Assunto',
    'LBL_OVERVIEW' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_TASKS' => 'Tarefas', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETINGS' => 'Reuniões', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CALLS' => 'Telefonemas', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_EMAILS' => 'Emails', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_NOTES' => 'Notas', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_PRINT' => 'Imprimir', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MEETING_TYPE' => 'Reunião',
    'LBL_CALL_TYPE' => 'Telefonema',
    'LBL_EMAIL_TYPE' => 'Email',
    'LBL_NOTE_TYPE' => 'Nota',
    'LBL_DATA_TYPE_START' => 'Início:',
    'LBL_DATA_TYPE_SENT' => 'Enviado:',
    'LBL_DATA_TYPE_MODIFIED' => 'Alterado:',
    'LBL_LIST_CONTACT' => 'Contacto',
    'LBL_LIST_RELATED_TO' => 'Relacionado com',
    'LBL_LIST_DATE' => 'Data',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_SUBJECT' => 'Assunto:',
    'LBL_STATUS' => 'Situação:',
    'LBL_LOCATION' => 'Local:',
    'LBL_DATE_TIME' => 'Data e hora de início:',
    'LBL_DATE' => 'Data de início:',
    'LBL_TIME' => 'Hora de início:',
    'LBL_DURATION' => 'Duração:',
    'LBL_HOURS_MINS' => '(horas/minutos)',
    'LBL_CONTACT_NAME' => 'Nome do contacto: ',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LNK_NEW_CALL' => 'Registar telefonema',
    'LNK_NEW_MEETING' => 'Agendar reunião',
    'LNK_NEW_TASK' => 'Criar tarefa',
    'LNK_NEW_NOTE' => 'Criar nota ou anexo',
    'LNK_NEW_EMAIL' => 'Create Archived Email',
    'LNK_CALL_LIST' => 'Ver telefonemas',
    'LNK_MEETING_LIST' => 'Ver reuniões',
    'LNK_TASK_LIST' => 'Ver tarefas',
    'LNK_NOTE_LIST' => 'Ver notas',
    'LBL_DELETE_ACTIVITY' => 'Tem a certeza de que pretende eliminar esta atividade?',
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar a conta.',
    'LBL_INVITEE' => 'Convidados',
    'LBL_LIST_DIRECTION' => 'Direção',
    'LBL_DIRECTION' => 'Direção',
    'LNK_NEW_APPOINTMENT' => 'Novo compromisso',
    'LNK_VIEW_CALENDAR' => 'Ver calendário',
    'LBL_OPEN_ACTIVITIES' => 'Atividades em aberto',
    'LBL_HISTORY' => 'Histórico',
    'LBL_NEW_TASK_BUTTON_TITLE' => 'Criar tarefa',
    'LBL_NEW_TASK_BUTTON_LABEL' => 'Criar tarefa',
    'LBL_SCHEDULE_MEETING_BUTTON_TITLE' => 'Agendar reunião',
    'LBL_SCHEDULE_MEETING_BUTTON_LABEL' => 'Agendar reunião',
    'LBL_SCHEDULE_CALL_BUTTON_LABEL' => 'Registar telefonema',
    'LBL_NEW_NOTE_BUTTON_TITLE' => 'Criar nota ou anexo',
    'LBL_NEW_NOTE_BUTTON_LABEL' => 'Criar nota ou anexo',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Arquivar email',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Arquivar email',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_LIST_DUE_DATE' => 'Data-limite',
    'LBL_LIST_LAST_MODIFIED' => 'Última alteração',
    'LNK_IMPORT_CALLS' => 'Importar telefonemas',
    'LNK_IMPORT_MEETINGS' => 'Importar reuniões',
    'LNK_IMPORT_TASKS' => 'Importar tarefas',
    'LNK_IMPORT_NOTES' => 'Importar notas',
    'LBL_ACCEPT_THIS' => 'Aceitar?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Atividades em aberto',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizador atribuído',

    'LBL_ACCEPT' => 'Aceitar' /*for 508 compliance fix*/,
);
