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

    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar a pista.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Descrição da conta',
    'LBL_ACCOUNT_ID' => 'ID da conta',
    'LBL_ACCOUNT_NAME' => 'Nome da conta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Dados de endereço',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade — Endereço alternativo',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País — Endereço alternativo',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código postal — Endereço alternativo',
    'LBL_ALT_ADDRESS_STATE' => 'Concelho — Endereço alternativo',
    'LBL_ALT_ADDRESS_STREET_2' => 'Rua 2 — Endereço alternativo',
    'LBL_ALT_ADDRESS_STREET_3' => 'Rua 3 — Endereço alternativo',
    'LBL_ALT_ADDRESS_STREET' => 'Rua — Endereço alternativo',
    'LBL_ALTERNATE_ADDRESS' => 'Endereço alternativo:',
    'LBL_ALT_ADDRESS' => 'Endereço alternativo:',
    'LBL_ANY_ADDRESS' => 'Todos os endereços:',
    'LBL_ANY_EMAIL' => 'Todos os endereços de email:',
    'LBL_ANY_PHONE' => 'Todos os telefones:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ASSIGNED_TO_ID' => 'Utilizador atribuído:',
    'LBL_CITY' => 'Cidade:',
    'LBL_CONTACT_ID' => 'ID do contacto',
    'LBL_CONTACT_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nome da pista:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Pista-Oportunidade:',
    'LBL_CONTACT_ROLE' => 'Função:',
    'LBL_CONTACT' => 'Pista:',
    'LBL_CONVERTED_ACCOUNT' => 'Conta convertida:',
    'LBL_CONVERTED_CONTACT' => 'Contacto convertido:',
    'LBL_CONVERTED_OPP' => 'Oportunidade convertida:',
    'LBL_CONVERTED' => 'Convertido',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Converter pista',
    'LBL_CONVERTLEAD' => 'Converter pista',
    'LBL_CONVERTLEAD_WARNING' => 'Atenção: A situação da pista de interesse que está prestes a converter é "Convertido". Registos de contacto e/ou conta podem já ter sido criados a partir desta pista. Se quiser continuar com a conversão, clique em Guardar. Para voltar à pista, sem a converter, clique em Cancelar.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Possível contacto: ',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATED_NEW' => 'Criou uma nova',
    'LBL_CREATED_ACCOUNT' => 'Criada uma conta',
    'LBL_CREATED_CALL' => 'Registou um telefonema',
    'LBL_CREATED_CONTACT' => 'Criou um contacto',
    'LBL_CREATED_MEETING' => 'Criou uma nova reunião',
    'LBL_CREATED_OPPORTUNITY' => 'Foi criada uma oportunidade',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Pistas',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DO_NOT_CALL' => 'Não telefonar:',
    'LBL_DUPLICATE' => 'Pistas semelhantes',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Exclusão de email:',
    'LBL_EXISTING_ACCOUNT' => 'Utiliza uma conta existente',
    'LBL_EXISTING_CONTACT' => 'Utiliza um contacto existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Utiliza uma oportunidade existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nome próprio:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_HOME_PHONE' => 'Telefone de casa:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Criar automaticamente uma nova pista de interesse importando um vCard do seu sistema de ficheiros.',
    'LBL_INVALID_EMAIL' => 'Email Inválido:',
    'LBL_INVITEE' => 'Supervisão direta',
    'LBL_LAST_NAME' => 'Apelido:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Descrição da fonte da pista:',
    'LBL_LEAD_SOURCE' => 'Origem da pista:',
    'LBL_LIST_ACCEPT_STATUS' => 'Situação da aceitação',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da conta',
    'LBL_LIST_CONTACT_NAME' => 'Nome da pista',
    'LBL_LIST_CONTACT_ROLE' => 'Função',
    'LBL_LIST_DATE_ENTERED' => 'Data de criação',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Nome próprio',
    'LBL_LIST_FORM_TITLE' => 'Lista de pistas',
    'LBL_LIST_LAST_NAME' => 'Apelido',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Descrição da fonte da pista',
    'LBL_LIST_LEAD_SOURCE' => 'Origem da pista',
    'LBL_LIST_MY_LEADS' => 'Minhas pistas',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PHONE' => 'Telefone de trabalho',
    'LBL_LIST_REFERED_BY' => 'Indicado por',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'Telemóvel:',
    'LBL_MODULE_NAME' => 'Pistas',
    'LBL_MODULE_TITLE' => 'Pistas: entrada',
    'LBL_NAME' => 'Nome:',
    'LBL_NEW_FORM_TITLE' => 'Criar pista',
    'LBL_OFFICE_PHONE' => 'Telefone de trabalho:',
    'LBL_OPP_NAME' => 'Nome da oportunidade:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Valor da oportunidade:',
    'LBL_OPPORTUNITY_ID' => 'ID da oportunidade',
    'LBL_OPPORTUNITY_NAME' => 'Nome da oportunidade:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email alternativo:',
    'LBL_OTHER_PHONE' => 'Telefone alternativo 2:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_PORTAL_APP' => 'Aplicação do portal',
    'LBL_PORTAL_INFORMATION' => 'Dados do portal',
    'LBL_PORTAL_NAME' => 'Nome do portal:',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_STREET' => 'Rua',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade — Endereço principal',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País — Endereço principal',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código postal — Endereço principal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Concelho — Endereço principal',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Concelho — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rua 3 — Endereço principal',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua — Endereço principal',
    'LBL_PRIMARY_ADDRESS' => 'Endereço principal:',
    'LBL_REFERED_BY' => 'Indicado por:',
    'LBL_REPORTS_TO_ID' => 'Supervisionado pelo ID',
    'LBL_REPORTS_TO' => 'Supervisionado por:',
    'LBL_SALUTATION' => 'Tratamento',
    'LBL_MODIFIED' => 'Alterado por',
    'LBL_CREATED' => 'Criado por',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar pista',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar as pistas marcadas',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar as pistas marcadas',
    'LBL_STATE' => 'Concelho:',
    'LBL_STATUS_DESCRIPTION' => 'Descrição da situação:',
    'LBL_STATUS' => 'Situação:',
    'LBL_TITLE' => 'Cargo:',
    'LNK_IMPORT_VCARD' => 'Criar a partir de vCard',
    'LNK_LEAD_LIST' => 'Ver pistas',
    'LNK_NEW_ACCOUNT' => 'Criar conta',
    'LNK_NEW_APPOINTMENT' => 'Marcar compromisso',
    'LNK_NEW_CONTACT' => 'Criar contacto',
    'LNK_NEW_LEAD' => 'Criar pista',
    'LNK_NEW_NOTE' => 'Criar nota',
    'LNK_NEW_TASK' => 'Criar tarefa',
    'LNK_NEW_CASE' => 'Criar ocorrência',
    'LNK_NEW_CALL' => 'Registar telefonema',
    'LNK_NEW_MEETING' => 'Agendar reunião',
    'LNK_NEW_OPPORTUNITY' => 'Criar oportunidade',
    'LNK_SELECT_ACCOUNTS' => ' <b>OU</b> Selecione uma conta',
    'LNK_SELECT_CONTACTS' => ' <b>OU</b> selecione um contacto',
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registo?',
    'NTC_SNOOZE_CONFIRMATION' => 'Tem a certeza de que deseja suspender?',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza de que pretende remover esta pista desta ocorrência?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campanhas',
    'LBL_CAMPAIGN' => 'Campanha:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizador atribuído',
    'LBL_PROSPECT_LIST' => 'Lista de clientes potenciais',
    'LBL_CAMPAIGN_LEAD' => 'Campanhas',
    'LBL_BIRTHDATE' => 'Data de nascimento:',
    'LBL_ASSISTANT_PHONE' => 'Telefone do assessor',
    'LBL_ASSISTANT' => 'Assessor',
    'LBL_CREATED_USER' => 'Utilizador criado',
    'LBL_MODIFIED_USER' => 'Utilizador modificado',
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CONVERT_MODULE_NAME' => 'Módulo',
    'LBL_CONVERT_REQUIRED' => 'Obrigatório',
    'LBL_CONVERT_SELECT' => 'Permitir seleção',
    'LBL_CONVERT_COPY' => 'Copiar dados',
    'LBL_CONVERT_EDIT' => 'Editar',
    'LBL_CONVERT_DELETE' => 'Eliminar',
    'LBL_CONVERT_ADD_MODULE' => 'Adicionar módulo',
    'LBL_CREATE' => 'Criar',
    'LBL_SELECT' => ' <b>OU</b> selecione',
    'LBL_WEBSITE' => 'Sítio Internet',
    'LNK_IMPORT_LEADS' => 'Importar pistas',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'O módulo no qual será criado um novo registo',
    'LBL_REQUIRED_TIP' => 'Os módulos obrigatórios devem ser criados ou selecionados para que a pista seja convertida.',
    'LBL_COPY_TIP' => 'Quando selecionado, os campos da pista serão copiados para campos com o mesmo nome nos registos a criar.',
    'LBL_SELECTION_TIP' => 'Módulos com um campo relacionado nos contactos podem ser selecionados em vez de criados durante o processo de conversão de pista.',
    'LBL_EDIT_TIP' => 'Modificar conversor de esquema para este módulo.',
    'LBL_DELETE_TIP' => 'Remover este módulo do conversor de esquema.',

    'LBL_ACTIVITIES_MOVE' => 'Mover atividades para',
    'LBL_ACTIVITIES_COPY' => 'Copiar atividades para',
    'LBL_ACTIVITIES_MOVE_HELP' => "Selecione o registo para o qual pretende mover as atividades da pista. Tarefas, telefonemas, reuniões, notas e emails serão movidos para o registo selecionado.",
    'LBL_ACTIVITIES_COPY_HELP' => "Selecione o(s) registo(s) para o(s) qual(is) pretende copiar as atividades da pista. Novas tarefas, telefonemas, reuniões e notas serão criadas para cada registo selecionado. Os emails serão relacionados com os registos selecionados.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'ID Campanha',
    'LBL_EDITLAYOUT' => 'Editar esquema' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Introduza uma data' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'A carregar' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Editar' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Eventos',
);
