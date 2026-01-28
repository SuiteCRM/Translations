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
    'ERR_DELETE_RECORD' => 'Um número de registo deve ser especificado para eliminar o contacto.',
    'LBL_ACCOUNT_ID' => 'ID da conta:',
    'LBL_ACCOUNT_NAME' => 'Nome da conta:',
    'LBL_CAMPAIGN' => 'Campanha:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Dados de endereço',
    'LBL_ALT_ADDRESS_CITY' => 'Cidade — Endereço alternativo:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'País — Endereço alternativo:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Código postal — Endereço alternativo:',
    'LBL_ALT_ADDRESS_STATE' => 'Concelho — Endereço alternativo:',
    'LBL_ALT_ADDRESS_STREET_2' => 'Rua 2 — Endereço alternativo:',
    'LBL_ALT_ADDRESS_STREET_3' => 'Rua 3 — Endereço alternativo:',
    'LBL_ALT_ADDRESS_STREET' => 'Rua — Endereço alternativo:',
    'LBL_ALTERNATE_ADDRESS' => 'Endereço alternativo:',
    'LBL_ALT_ADDRESS' => 'Endereço alternativo:',
    'LBL_ANY_ADDRESS' => 'Todos os endereços:',
    'LBL_ANY_EMAIL' => 'Todos os endereços de email:',
    'LBL_ANY_PHONE' => 'Todos os telefones:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_ASSIGNED_TO_ID' => 'Utilizador atribuído',
    'LBL_ASSISTANT_PHONE' => 'Telefone do assessor:',
    'LBL_ASSISTANT' => 'Assessor:',
    'LBL_BIRTHDATE' => 'Data de nascimento:',
    'LBL_CITY' => 'Cidade:',
    'LBL_CAMPAIGN_ID' => 'ID Campanha',
    'LBL_CONTACT_INFORMATION' => 'Visão geral', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nome do contacto:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contacto-Oportunidade:',
    'LBL_CONTACT_ROLE' => 'Função:',
    'LBL_CONTACT' => 'Contacto:',
    'LBL_COUNTRY' => 'País:',
    'LBL_CREATED_ACCOUNT' => 'Criada uma conta',
    'LBL_CREATED_CALL' => 'Registou um telefonema',
    'LBL_CREATED_CONTACT' => 'Criou um contacto',
    'LBL_CREATED_MEETING' => 'Criou uma nova reunião',
    'LBL_CREATED_OPPORTUNITY' => 'Foi criada uma oportunidade',
    'LBL_DATE_MODIFIED' => 'Data de alteração:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contactos',
    'LBL_DEPARTMENT' => 'Departamento:',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Supervisão direta',
    'LBL_DO_NOT_CALL' => 'Não telefonar:',
    'LBL_DUPLICATE' => 'Contactos provavelmente duplicados',
    'LBL_EMAIL_ADDRESS' => 'Email:',
    'LBL_EMAIL_OPT_OUT' => 'Exclusão de email:',
    'LBL_EXISTING_ACCOUNT' => 'Utiliza uma conta existente',
    'LBL_EXISTING_CONTACT' => 'Utiliza um contacto existente',
    'LBL_EXISTING_OPPORTUNITY' => 'Utiliza uma oportunidade existente',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Nome próprio:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_HOME_PHONE' => 'Telefone de casa:',
    'LBL_ID' => 'ID:',
    'LBL_IMPORT_VCARD' => 'Importar vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Criar automaticamente um novo contacto importando um vCard do seu sistema de ficheiros.',
    'LBL_INVALID_EMAIL' => 'Email Inválido:',
    'LBL_INVITEE' => 'Supervisão direta',
    'LBL_LAST_NAME' => 'Apelido:',
    'LBL_LEAD_SOURCE' => 'Origem da pista:',
    'LBL_LIST_ACCEPT_STATUS' => 'Situação da aceitação',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da conta',
    'LBL_LIST_CONTACT_NAME' => 'Nome do contacto',
    'LBL_LIST_CONTACT_ROLE' => 'Função',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email',
    'LBL_LIST_FIRST_NAME' => 'Nome próprio',
    'LBL_LIST_FORM_TITLE' => 'Lista de contactos',
    'LBL_LIST_LAST_NAME' => 'Apelido',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_PHONE' => 'Telefone de trabalho',
    'LBL_LIST_TITLE' => 'Cargo',
    'LBL_MOBILE_PHONE' => 'Telemóvel:',
    'LBL_MODIFIED' => 'Alterado por:',
    'LBL_MODULE_NAME' => 'Contactos',
    'LBL_MODULE_TITLE' => 'Contactos: entrada',
    'LBL_NAME' => 'Nome:',
    'LBL_NEW_FORM_TITLE' => 'Novo contacto',
    'LBL_NOTE_SUBJECT' => 'Assunto da Nota',
    'LBL_OFFICE_PHONE' => 'Telefone de trabalho:',
    'LBL_OPP_NAME' => 'Nome da oportunidade:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'ID da função da oportunidade:',
    'LBL_OPPORTUNITY_ROLE' => 'Função da oportunidade',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email alternativo:',
    'LBL_OTHER_PHONE' => 'Telefone alternativo 2:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_PORTAL_APP' => 'Aplicação do portal:',
    'LBL_PORTAL_INFORMATION' => 'Dados do portal',
    'LBL_PORTAL_NAME' => 'Nome do portal:',
    'LBL_STREET' => 'Rua',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Cidade — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'País — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Código postal — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Concelho — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rua 2 — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rua 3 — Endereço principal:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rua — Endereço principal:',
    'LBL_PRIMARY_ADDRESS' => 'Endereço principal:',
    'LBL_PRODUCTS_TITLE' => 'Produtos',
    'LBL_REPORTS_TO_ID' => 'Supervisionado pelo ID:',
    'LBL_REPORTS_TO' => 'Supervisionado por:',
    'LBL_RESOURCE_NAME' => 'Nome de recurso',
    'LBL_SALUTATION' => 'Tratamento:',
    'LBL_SAVE_CONTACT' => 'Guardar contacto',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar contactos',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Selecionar contactos marcados',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Selecionar contactos marcados',
    'LBL_STATE' => 'Concelho:',
    'LBL_SYNC_CONTACT' => 'Sincronizar contacto:',
    'LBL_PROSPECT_LIST' => 'Lista de clientes potenciais',
    'LBL_TITLE' => 'Cargo:',
    'LNK_CONTACT_LIST' => 'Ver contactos',
    'LNK_IMPORT_VCARD' => 'Criar a partir de vCard',
    'LNK_NEW_ACCOUNT' => 'Criar conta',
    'LNK_NEW_APPOINTMENT' => 'Marcar compromisso',
    'LNK_NEW_CALL' => 'Registar telefonema',
    'LNK_NEW_CASE' => 'Criar ocorrência',
    'LNK_NEW_CONTACT' => 'Criar contacto',
    'LNK_NEW_EMAIL' => 'Arquivar email',
    'LNK_NEW_MEETING' => 'Agendar reunião',
    'LNK_NEW_NOTE' => 'Criar nota',
    'LNK_NEW_OPPORTUNITY' => 'Criar oportunidade',
    'LNK_NEW_TASK' => 'Criar tarefa',
    'LNK_SELECT_ACCOUNT' => "Selecionar conta",
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registo?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Para criar uma oportunidade é necessário uma conta.\n Por favor, crie uma nova ou selecione uma conta existente.',
    'NTC_REMOVE_CONFIRMATION' => 'Tem a certeza de que pretende remover este contacto desta ocorrência?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Pistas',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copiar para o endereço principal',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copiar para o endereço alternativo',

    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalias',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PROJECTS_RESOURCES' => 'Recursos de projetos',
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campanhas',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_STATE' => 'Concelho',
    'LBL_HOMEPAGE_TITLE' => 'Meus contactos',
    'LBL_OPPORTUNITIES' => 'Oportunidades',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LNK_IMPORT_CONTACTS' => 'Importar contactos',

    // SNIP
    'LBL_USER_SYNC' => 'Sincronização de utilizadores',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Eventos',

    'LBL_AOP_CASE_UPDATES' => 'Atualizações da ocorrência',
    'LBL_CREATE_PORTAL_USER' => 'Criar portal do utilizador',
    'LBL_ENABLE_PORTAL_USER' => 'Ativar portal do utilizador',
    'LBL_DISABLE_PORTAL_USER' => 'Desativar portal do utilizador',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Falha ao criar o portal do utilizador',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Falha ao ativar o portal do utilizador',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Falha ao desativar portal do utilizador',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Foi criado o portal do utilizador',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Foi ativado o portal do utilizador',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portal do utilizador desativado',
    'LBL_NO_JOOMLA_URL' => 'URL do portal não foi especificada',
    'LBL_PORTAL_USER_TYPE' => 'Tipo de utilizador do portal',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Conta desativada',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID de conta Joomla',

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_INVOICES' => 'Faturas',
    'LBL_AOS_QUOTES' => 'Propostas',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contactos de projeto a partir do título dos projetos',

    'LBL_LIST_INVITE_STATUS' => 'Situação do convite',
);
