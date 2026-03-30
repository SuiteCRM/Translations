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
    'LBL_MODULE_NAME' => 'Targets',
    'LBL_MODULE_ID' => 'Targets',
    'LBL_INVITEE' => 'Supervisão direta',
    'LBL_MODULE_TITLE' => 'Alvos: entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar alvos',
    'LBL_LIST_FORM_TITLE' => 'Target List',
    'LBL_NEW_FORM_TITLE' => 'Novo alvo',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_LAST_NAME' => 'Apelido',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_PHONE' => 'Telefone',
    'LBL_LIST_FIRST_NAME' => 'Nome próprio',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Assigned To:',
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_NAME' => 'Name:',
    'LBL_PROSPECT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Mais informações',
    'LBL_FIRST_NAME' => 'First Name:',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_ANY_PHONE' => 'Todos os telefones:',
    'LBL_PHONE' => 'Phone:',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_HOME_PHONE' => 'Home:',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Concelho — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código postal — Endereço principal:',
    'LBL_ALT_ADDRESS_STREET' => 'Rua — Endereço alternativo:',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade — Endereço alternativo:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País — Endereço alternativo:',
    'LBL_ALT_ADDRESS_STATE' => 'Concelho — Endereço alternativo:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código postal — Endereço alternativo:',
    'LBL_TITLE' => 'Cargo:',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_BIRTHDATE' => 'Data de nascimento:',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Endereço alternativo:',
    'LBL_ANY_EMAIL' => 'Todos os endereços de email:',
    'LBL_ASSISTANT' => 'Assistant:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Todos os endereços:',
    'LBL_CITY' => 'City:',
    'LBL_STATE' => 'State/Region:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_COUNTRY' => 'Country:',
    'LBL_ADDRESS_INFORMATION' => 'Dados de endereço',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Automatically create a new contact by importing a vCard from your file system.',
    'LBL_DUPLICATE' => 'Alvos provavelmente duplicados',
    'MSG_SHOW_DUPLICATES' => 'O registo alvo que está prestes a criar pode ser um duplicado de um registo de destino que já existe. Os registos alvo contendo nomes e/ou endereços de email semelhantes estão listados abaixo.<br> Clique em Criar alvo para continuar a criação deste novo alvo ou selecione um alvo existente listado abaixo.',
    'MSG_DUPLICATE' => 'O registo de alvo que está prestes a criar pode ser um duplicado de um registo de alvo que já existe. Os registos alvo contendo nomes e/ou endereços de email semelhantes estão listados abaixo.<br> Clique em Guardar para continuar a criação deste novo alvo ou selecione Cancelar para voltar ao módulo sem criar o alvo.',
    'LNK_IMPORT_VCARD' => 'Criar a partir de vCard',
    'LNK_NEW_ACCOUNT' => 'Create Account',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_NEW_CASE' => 'Criar ocorrência',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_EMAIL' => 'Archive Email',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_TASK' => 'Create Task',
    'LNK_NEW_APPOINTMENT' => 'Marcar compromisso',
    'LNK_IMPORT_PROSPECTS' => 'Importar alvos',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Tem a certeza de que deseja suspender?',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza de que pretende remover este contacto desta ocorrência?',
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar o contacto.',
    'LBL_SALUTATION' => 'Tratamento',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'View Targets',
    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Campaigns',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Target Lists',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar alvos marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Targets',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Targets',
    'LBL_PROSPECT_LIST' => 'Lista de clientes potenciais',
    'LBL_CONVERT_BUTTON_TITLE' => 'Converter alvo',
    'LBL_CONVERT_BUTTON_LABEL' => 'Convert Target',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LBL_CREATED_CONTACT' => "Criou um contacto",
    'LBL_CAMPAIGNS' => 'Campaigns',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Historial de campanhas',
    'LBL_TRACKER_KEY' => 'Tracker Key',
    'LBL_LEAD_ID' => 'Id da pista',
    'LBL_CONVERTED_LEAD' => 'Pista convertida',
    'LBL_ACCOUNT_NAME' => 'Nome da conta',
    'LBL_EDIT_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Utilizador modificado',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'History',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
