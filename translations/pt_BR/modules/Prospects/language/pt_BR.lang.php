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
    'LBL_MODULE_NAME' => 'Alvos',
    'LBL_MODULE_ID' => 'Alvos',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_MODULE_TITLE' => 'Alvos: Tela Principal',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Alvos',
    'LBL_LIST_FORM_TITLE' => 'Lista de Alvos',
    'LBL_NEW_FORM_TITLE' => 'Novo Alvo',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_LAST_NAME' => 'Sobrenome',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Atribuído a:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_NAME' => 'Name:',
    'LBL_PROSPECT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'More Information',
    'LBL_FIRST_NAME' => 'Primeiro Nome:',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Residencial:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Primary Address Country:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Primary Address State:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_ALT_ADDRESS_STREET' => 'Alternate Address Street:',
    'LBL_ALT_ADDRESS_CITY' => 'Alternate Address City:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternate Address Country:',
    'LBL_ALT_ADDRESS_STATE' => 'Alternate Address State:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternate Address Postal Code:',
    'LBL_TITLE' => 'Cargo:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'CEP:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Alvos Possivelmente Duplicados',
    'MSG_SHOW_DUPLICATES' => 'Ao criar este contato pode estar a duplicar um registro. Poderá clicar em Criar Contato para continuar ou escolher Cancelar.',
    'MSG_DUPLICATE' => 'O registro de alvo que você está prestes a criar pode ser uma duplicata de um registro de alvo já existente. Registros de alvos contendo nomes ou endereços de e-mail semelhantes estão listados abaixo.<br>Clique em salvar para continuar a criar este novo alvo, ou clique em Cancelar para retornar ao módulo sem criar o alvo.',
    'LNK_IMPORT_VCARD' => 'Create From vCard',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_CASE' => 'Criar Nova Ocorrência',
    'LNK_NEW_NOTE' => 'Nova Nota ou Anexo',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Nova Tarefa',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_IMPORT_PROSPECTS' => 'Importar Alvos',
    'NTC_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro?',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza de que pretende remover este contato desta ocorrência?',
    'ERR_DELETE_RECORD' => 'É necessário um número de registro para excluir o contato.',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'Criar alvo',
    'LNK_PROSPECT_LIST' => 'Ver Alvos',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Campanhas',
    'LNK_NEW_PROSPECT_LIST' => 'Criar Nova Lista de Alvos',
    'LNK_PROSPECT_LIST_LIST' => 'Listas de Alvos',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar Alvos Marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar Alvos Marcados',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Alvos',
    'LBL_PROSPECT_LIST' => 'Lista de Alvos',
    'LBL_CONVERT_BUTTON_TITLE' => 'Converter Alvo',
    'LBL_CONVERT_BUTTON_LABEL' => 'Converter Alvo',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LBL_CREATED_CONTACT' => "Created a new contact",
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Log de Campanha',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Id do Potencial',
    'LBL_CONVERTED_LEAD' => 'Potencial Convertido',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_EDIT_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
