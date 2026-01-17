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
    'LBL_CREATED_USER' => 'Criado pelo utilizador',
    'LBL_MODIFIED_USER' => 'Alterado pelo utilizador',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Editar',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_FORM_TITLE' => 'Lista de eventos',
    'LBL_MODULE_NAME' => 'Evento',
    'LBL_MODULE_TITLE' => 'Evento',
    'LBL_HOMEPAGE_TITLE' => 'Meu evento',
    'LNK_NEW_RECORD' => 'Criar evento',
    'LNK_LIST' => 'Ver eventos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar evento',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo evento',
    'LBL_LOCATION' => 'Localização',
    'LBL_START_DATE' => 'data de início',
    'LBL_END_DATE' => 'Data/Hora de fim',
    'LBL_BUDGET' => 'Orçamento',
    'LBL_DATE' => 'Data de início',
    'LBL_DATE_END' => 'Data de fim',
    'LBL_DURATION' => 'Duração',
    'LBL_INVITE_TEMPLATES' => 'Modelo de email do convite',
    'LBL_INVITE_PDF' => 'Enviar convites',
    'LBL_EDITVIEW_PANEL1' => 'Detalhes do evento',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Delegados',
    'LBL_ACCEPT_REDIRECT' => 'Aceitação — URL de redirecionamento',
    'LBL_DECLINE_REDIRECT' => 'Recusa — URL de redirecionamento',
    'LBL_SELECT_DELEGATES' => 'Selecionar delegados',
    'LBL_SELECT_DELEGATES_TITLE' => 'Selecionar delegados:-',
    'LBL_SELECT_DELEGATES_TARGET_LIST' => 'Lista de alvos',
    'LBL_SELECT_DELEGATES_TARGETS' => 'Alvos',
    'LBL_SELECT_DELEGATES_CONTACTS' => 'Contactos',
    'LBL_SELECT_DELEGATES_LEADS' => 'Pistas',
    'LBL_MANAGE_DELEGATES' => 'Gerir delegações',
    'LBL_MANAGE_DELEGATES_TITLE' => 'Gerir delegados:-',
    'LBL_MANAGE_ACCEPTANCES' => 'Gerir convites aceites',
    'LBL_MANAGE_ACCEPTANCES_TITLE' => 'Gerir convites aceites: ',
    'LBL_MANAGE_ACCEPTANCES_ACCEPTED' => 'Aceite',
    'LBL_MANAGE_ACCEPTANCES_DECLINED' => 'Declinou',
    'LBL_MANAGE_POPUP_ERROR' => 'Nenhum delegado selecionado.',
    'LBL_MANAGE_DELEGATES_INVITED' => 'Convidado',
    'LBL_MANAGE_DELEGATES_NOT_INVITED' => 'Não convidado',
    'LBL_MANAGE_DELEGATES_ATTENDED' => 'Participou',
    'LBL_MANAGE_DELEGATES_NOT_ATTENDED' => 'Não participou',
    'LBL_SUCCESS_MSG' => 'Todos os convites foram enviados com êxito.',
    'LBL_ERROR_MSG_1' => 'Todos os contactos relacionados já foram convidados.',
    'LBL_ERROR_MSG_2' => 'Falha no envio de convites por email! Por favor, verifique suas configurações de email.',
    'LBL_ERROR_MSG_3' => 'Mais de 10 emails falharam o seu envio. Por favor, verifique se todos os contactos que está a convidar têm um endereço de email válido. (Veja o ficheiro de registos de erros do SuiteCRM.)',
    'LBL_ERROR_MSG_4' => ' emails falharam o seu envio. Por favor, verifique se todos os contactos que está a convidar têm um endereço de email válido. (Veja o ficheiro de registo de erros do SuiteCRM.)', // LBL_ERROR_MSG_4 Begins with a number (controller.php line 581) for example 10 emails have failed to send.
    'LBL_ERROR_MSG_5' => 'Modelo de email inválido',
    'LBL_EMAIL_INVITE' => 'Email de convite',

    'LBL_FP_EVENTS_CONTACTS_FROM_CONTACTS_TITLE' => 'Contactos',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENT_LOCATIONS_TITLE' => 'Locais',
    'LBL_FP_EVENTS_LEADS_1_FROM_LEADS_TITLE' => 'Pistas',
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_PROSPECTS_TITLE' => 'Alvos',

    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_FP_EVENTS_FP_EVENT_DELEGATES_1_FROM_FP_EVENT_DELEGATES_TITLE' => 'Delegados',

    // Attendance report
    'LBL_CONTACT_NAME' => 'Nome',
    'LBL_ACCOUNT_NAME' => 'Empresa',
    'LBL_SIGNATURE' => 'Assinatura',
    // contacts/leads/targets subpanels
    'LBL_LIST_INVITE_STATUS_EVENT' => 'Convidado',
    'LBL_LIST_ACCEPT_STATUS_EVENT' => 'Situação',

    'LBL_ACTIVITY_STATUS' => 'Situação da atividade',
    'LBL_FP_EVENT_LOCATIONS_FP_EVENTS_1_FROM_FP_EVENTS_TITLE' => 'Locais de eventos a partir do título de eventos',
    // Email links
    'LBL_ACCEPT_LINK' => 'Aceitar',
    'LBL_DECLINE_LINK' => 'Recusar',
    
);
