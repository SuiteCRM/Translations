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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Telefonemas',
    'LBL_MODULE_TITLE' => 'Telefonemas: entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar telefonemas',
    'LBL_LIST_FORM_TITLE' => 'Listar telefonemas',
    'LBL_NEW_FORM_TITLE' => 'Marcar compromisso',
    'LBL_LIST_CLOSE' => 'Fechar',
    'LBL_LIST_SUBJECT' => 'Assunto',
    'LBL_LIST_CONTACT' => 'Contacto',
    'LBL_LIST_RELATED_TO' => 'Relacionado com',
    'LBL_LIST_RELATED_TO_ID' => 'Referente ao ID ',
    'LBL_LIST_DATE' => 'Data de início',
    'LBL_LIST_DIRECTION' => 'Direção',
    'LBL_SUBJECT' => 'Assunto:',
    'LBL_REMINDER' => 'Lembrete:',
    'LBL_CONTACT_NAME' => 'Contacto:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_STATUS' => 'Situação:',
    'LBL_DIRECTION' => 'Direção:',
    'LBL_DATE' => 'Data de início:',
    'LBL_DURATION' => 'Duração:',
    'LBL_DURATION_HOURS' => 'Duração (horas):',
    'LBL_DURATION_MINUTES' => 'Duração (minutos):',
    'LBL_HOURS_MINUTES' => '(horas/minutos)',
    'LBL_DATE_TIME' => 'Data e hora de início:',
    'LBL_TIME' => 'Hora de início:',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Registar telefonema',
    'LNK_NEW_MEETING' => 'Agendar reunião',
    'LNK_CALL_LIST' => 'Ver telefonemas',
    'LNK_IMPORT_CALLS' => 'Importar telefonemas',
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar a conta.',
    'LBL_INVITEE' => 'Convidados',
    'LBL_RELATED_TO' => 'Referente a:',
    'LNK_NEW_APPOINTMENT' => 'Marcar compromisso',
    'LBL_SCHEDULING_FORM_TITLE' => 'Agendar',
    'LBL_ADD_INVITEE' => 'Adicionar convidados',
    'LBL_NAME' => 'Nome',
    'LBL_FIRST_NAME' => 'Nome próprio',
    'LBL_LAST_NAME' => 'Apelido',
    'LBL_EMAIL' => 'Email',
    'LBL_PHONE' => 'Telefone',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Email a todos os convidados',
    'LBL_EMAIL_REMINDER' => 'Lembrete por email',
    'LBL_EMAIL_REMINDER_TIME' => 'Data/hora para email de lembrete',
    'LBL_SEND_BUTTON_TITLE' => 'Guardar e enviar convites',
    'LBL_SEND_BUTTON_LABEL' => 'Guardar e enviar convites',
    'LBL_DATE_END' => 'Data de fim',
    'LBL_REMINDER_TIME' => 'Hora do lembrete',
    'LBL_EMAIL_REMINDER_SENT' => 'Lembrete por email enviado',
    'LBL_SEARCH_BUTTON' => 'Pesquisar',
    'LBL_ADD_BUTTON' => 'Adicionar',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Telefonemas',
    'LNK_SELECT_ACCOUNT' => 'Selecionar conta',
    'LNK_NEW_ACCOUNT' => 'Nova conta',
    'LNK_NEW_OPPORTUNITY' => 'Nova oportunidade',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Pistas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilizadores',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_MEMBER_OF' => 'Membro de',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notas',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_LIST_MY_CALLS' => 'Meus telefonemas',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Utilizador atribuído',
    'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
    'LBL_CALL_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Remover',
    'LBL_ACCEPT_STATUS' => 'Situação da aceitação',
    'LBL_ACCEPT_LINK' => 'Aceitar hiperligação',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Criar convidado',
    'LBL_CREATE_CONTACT' => 'Como contacto',
    'LBL_CREATE_LEAD' => 'Como pista',
    'LBL_CREATE_AND_ADD' => 'Criar e Adicionar',
    'LBL_CANCEL_CREATE_INVITEE' => 'Cancelar',
    'LBL_EMPTY_SEARCH_RESULT' => 'Desculpe, não foram encontrados resultados. Por favor, crie um convidado abaixo.',
    'LBL_NO_ACCESS' => 'Não tem permissões para criar $module',

    'LBL_REPEAT_TYPE' => 'Repetir tipo',
    'LBL_REPEAT_INTERVAL' => 'Repetir intervalo',
    'LBL_REPEAT_DOW' => 'Repetir dia da semana',
    'LBL_REPEAT_UNTIL' => 'Repetir até',
    'LBL_REPEAT_COUNT' => 'Repetir contagem',
    'LBL_REPEAT_PARENT_ID' => 'Repetir ID hospedeiro',
    'LBL_RECURRING_SOURCE' => 'Fonte recorrente',

    'LBL_SYNCED_RECURRING_MSG' => 'Telefonema originado noutro sistema e sincronizado com o CRM. Para efetuar alterações, aceda ao telefonema no sistema original. As alterações efetuadas no sistema original podem ser sincronizadas com este registo.',

    // for reminders
    'LBL_REMINDERS' => 'Lembretes',
    'LBL_REMINDERS_ACTIONS' => 'Ações:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email aos convidados',
    'LBL_REMINDERS_WHEN' => 'Quando:',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remover lembrete',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Adicionar todos os convidados',
    'LBL_REMINDERS_ADD_REMINDER' => 'Adicionar lembrete',

    'LBL_RESCHEDULE' => 'Reagendar',
    'LBL_RESCHEDULE_COUNT' => 'Tentativas de telefonemas',
    'LBL_RESCHEDULE_DATE' => 'Data',
    'LBL_RESCHEDULE_REASON' => 'Motivo',
    'LBL_RESCHEDULE_ERROR1' => 'Por favor, selecione uma data válida',
    'LBL_RESCHEDULE_ERROR2' => 'Por favor, selecione um motivo',
    'LBL_RESCHEDULE_PANEL' => 'Reagendar',
    'LBL_RESCHEDULE_HISTORY' => 'Histórico de tentativas de telefonemas',
    'LBL_CANCEL' => 'Cancelar',
    'LBL_SAVE' => 'Guardar',

    'LBL_CALLS_RESCHEDULE' => 'Reagendamento de telefonemas',
    'LBL_LIST_STATUS'=>'Situação',
    'LBL_LIST_DATE_MODIFIED'=>'Data de alteração',
    'LBL_LIST_DUE_DATE'=>'Data-limite',
    'LBL_RESCHEDULED_BY'=>'por',
);
