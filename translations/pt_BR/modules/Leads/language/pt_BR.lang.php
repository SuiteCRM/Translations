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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Um número de registro deve ser informado para excluir o potencial.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Descrição da Conta',
    'LBL_ACCOUNT_ID' => 'ID da Conta',
    'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade Endereço Alternativo',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País Endereço Alternativo',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'CEP Endereço Alternativo',
    'LBL_ALT_ADDRESS_STATE' => 'UF Endereço Alternativo',
    'LBL_ALT_ADDRESS_STREET_2' => 'Endereço Alternativo - Rua 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Endereço Alternativo 3',
    'LBL_ALT_ADDRESS_STREET' => 'Endereço Alternativo',
    'LBL_ALTERNATE_ADDRESS' => 'Other Address:',
    'LBL_ALT_ADDRESS' => 'Other Address:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Usuário atribuído:',
    'LBL_CITY' => 'City:',
    'LBL_CONTACT_ID' => 'ID do contato',
    'LBL_CONTACT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nome do Potencial:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potencial-Oportunidade:',
    'LBL_CONTACT_ROLE' => 'Perfil:',
    'LBL_CONTACT' => 'Potencial:',
    'LBL_CONVERTED_ACCOUNT' => 'Conta Convertida',
    'LBL_CONVERTED_CONTACT' => 'Contato Convertido:',
    'LBL_CONVERTED_OPP' => 'Oportunidade Convertida',
    'LBL_CONVERTED' => 'Convertido',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Converter Potencial',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Atenção: O estado do potencial que você está prestes a converter é "Convertido". Registros de contato ou conta podem já ter sido criados a partir do potencial. Se deseja continuar com a conversão do potencial, clique em Gravar. Para voltar ao potencial sem converter, clique em Cancelar.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contato Possível: ',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Criou um novo registro em',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_DEPARTMENT' => 'Department:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DO_NOT_CALL' => 'Do Not Call:',
    'LBL_DUPLICATE' => 'Potenciais Semelhantes',
    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Email Opt Out:',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Primeiro Nome:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_HOME_PHONE' => 'Home Phone:',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Cria um novo Potencial automaticamente importando um vCard do seu sistema de arquivos.',
    'LBL_INVALID_EMAIL' => 'Invalid Email:',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Last Name:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrição da Fonte do Potencial:',
    'LBL_LEAD_SOURCE' => 'Origem do Potencial:',
    'LBL_LIST_ACCEPT_STATUS' => 'Aceitar Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_CONTACT_NAME' => 'Nome do Potencial',
    'LBL_LIST_CONTACT_ROLE' => 'Perfil',
    'LBL_LIST_DATE_ENTERED' => 'Data de Criação',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Lista de Potenciais',
    'LBL_LIST_LAST_NAME' => 'Sobrenome',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrição da Fonte do Potencial',
    'LBL_LIST_LEAD_SOURCE' => 'Fonte do Potencial',
    'LBL_LIST_MY_LEADS' => 'Meus Potenciais',
    'LBL_LIST_NAME' => 'Name',
    'LBL_LIST_PHONE' => 'Office Phone',
    'LBL_LIST_REFERED_BY' => 'Indicado Por',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'Mobile:',
    'LBL_MODULE_NAME' => 'Potenciais',
    'LBL_MODULE_TITLE' => 'Potenciais: Tela Principal',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Novo Potencial',
    'LBL_OFFICE_PHONE' => 'Office Phone:',
    'LBL_OPP_NAME' => 'Opportunity Name:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Valor da Oportunidade:',
    'LBL_OPPORTUNITY_ID' => 'ID da Oportunidade',
    'LBL_OPPORTUNITY_NAME' => 'Opportunity Name:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Aplicação do Portal',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Portal Name:',
    'LBL_POSTAL_CODE' => 'CEP:',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade Endereço Principal',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País Endereço Principal',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código Postal Endereço Principal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Estado Endereço Principal',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rua Endereço Principal 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rua Endereço Principal 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua Endereço Principal',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Indicado Por:',
    'LBL_REPORTS_TO_ID' => 'Reporta ao ID',
    'LBL_REPORTS_TO' => 'Reports To:',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_CREATED' => 'Created By',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Potencial',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar os Potenciais Marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Descrição do Status:',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Cargo:',
    'LNK_IMPORT_VCARD' => 'Criar Potencial a partir de vCard',
    'LNK_LEAD_LIST' => 'Ver Potenciais',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Create Contact',
    'LNK_NEW_LEAD' => 'Create Lead',
    'LNK_NEW_NOTE' => 'Nova Anotação',
    'LNK_NEW_TASK' => 'Nova Tarefa',
    'LNK_NEW_CASE' => 'Criar Nova Ocorrência',
    'LNK_NEW_CALL' => 'Log Call',
    'LNK_NEW_MEETING' => 'Schedule Meeting',
    'LNK_NEW_OPPORTUNITY' => 'Create Opportunity',
    'LNK_SELECT_ACCOUNTS' => '<b>OU</b> Selecione uma conta',
    'LNK_SELECT_CONTACTS' => ' <b>Ou</b> Selecione o contato',
    'NTC_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro?',
    'NTC_SNOOZE_CONFIRMATION' => 'Você tem certeza que deseja adiar?',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza que pretende remover este potencial desta ocorrência?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campanhas',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Usuário atribuído',
    'LBL_PROSPECT_LIST' => 'Lista de Alvos',
    'LBL_CAMPAIGN_LEAD' => 'Campanhas',
    'LBL_BIRTHDATE' => 'Birthdate:',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Usuário Criado',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Required',
    'LBL_CONVERT_SELECT' => 'Permitir a selecção',
    'LBL_CONVERT_COPY' => 'Copiar dados',
    'LBL_CONVERT_EDIT' => 'Edit',
    'LBL_CONVERT_DELETE' => 'Delete',
    'LBL_CONVERT_ADD_MODULE' => 'Adicionar Módulo',
    'LBL_CREATE' => 'Criar',
    'LBL_SELECT' => '<b>OU</b> Selecione',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importar Potenciais',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'O módulo no qual será criado um novo registro',
    'LBL_REQUIRED_TIP' => 'Todos os módulos obrigatórios devem ser criados ou selecionados para o potencial poder ser convertido.',
    'LBL_COPY_TIP' => 'Quando selecionado, campos do potencial serão copiados para campos com o mesmo nome nos registros a criar.',
    'LBL_SELECTION_TIP' => 'Módulos com um campo de Relacionamento em Contatos podem ser selecionados em vez de criados durante o processo de conversão.',
    'LBL_EDIT_TIP' => 'Modificar o layout de conversão para este módulo.',
    'LBL_DELETE_TIP' => 'Remover este módulo do layout de conversão.',

    'LBL_ACTIVITIES_MOVE' => 'MOver Atividades para',
    'LBL_ACTIVITIES_COPY' => 'Copiar Atividades para',
    'LBL_ACTIVITIES_MOVE_HELP' => "Selecionar o(s) registro(os) para o qual mover as atividades do Potencial. Tarefas, ligações, reuniões, anotações e e-mails serão movidos para o(s) registro(s) selecionado(s).",
    'LBL_ACTIVITIES_COPY_HELP' => "Selecionar o(s) registro(s) para o qual criar cópias das atividades do Potencial. Novas Tarefas, ligações, reuniões e anotações serão criadas para cada um dos registro selecionados. E-mails serão relacionados com o(s) registro(s) selecionado(s).",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Campaign ID',
    'LBL_EDITLAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Edit' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
