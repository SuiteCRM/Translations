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
    // DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_website' => 'LBL_LIST_WEBSITE',
    'db_billing_address_city' => 'LBL_LIST_CITY',
    // END DON'T CONVERT
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    // Dashlet Categories
    'LBL_CHARTS' => 'Gráficos',
    'LBL_DEFAULT' => 'Visualizações',
    // END Dashlet Categories

    'ERR_DELETE_RECORD' => 'Para excluir a conta, um número de registro deve ser informado.',
    'LBL_ACCOUNT_INFORMATION' => 'OVERVIEW', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_ACCOUNT_NAME' => 'Nome da Conta:',
    'LBL_ACCOUNT' => 'Conta:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_ANNUAL_REVENUE' => 'Faturamento Anual:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_ASSIGNED_TO_ID' => 'Usuário atribuído:',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faturamento - Cep:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Endereço de Faturamento:',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
    'LBL_CAMPAIGN_ID' => 'ID da Campanha',
    'LBL_CASES_SUBPANEL_TITLE' => 'Ocorrências',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DATE_ENTERED' => 'Data de Criação:',
    'LBL_DATE_MODIFIED' => 'Data de Modificação:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contas',
    'LBL_DESCRIPTION_INFORMATION' => 'Informações de Descrição',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DUPLICATE' => 'Conta Possivelmente Duplicada',
    'LBL_EMAIL' => 'Email Address:',
    'LBL_EMAIL_OPT_OUT' => 'Opção de não receber e-mail:',
    'LBL_EMAIL_ADDRESSES' => 'Email Addresses',
    'LBL_EMPLOYEES' => 'Colaboradores:',
    'LBL_FAX' => 'Fax:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',
    'LBL_HOMEPAGE_TITLE' => 'Minhas Contas',
    'LBL_INDUSTRY' => 'Indústria:',
    'LBL_INVALID_EMAIL' => 'E-mail Inválido:',
    'LBL_INVITEE' => 'Contatos',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Potenciais',
    'LBL_LIST_ACCOUNT_NAME' => 'Name',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_CONTACT_NAME' => 'Contact Name',
    'LBL_LIST_EMAIL_ADDRESS' => 'Endereço de e-mail',
    'LBL_LIST_FORM_TITLE' => 'Lista de Contas',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_MODULE_NAME' => 'Contas',
    'LBL_MODULE_TITLE' => 'Contas: Início',
    'LBL_MODULE_ID' => 'Contas',
    'LBL_NAME' => 'Name:',
    'LBL_NEW_FORM_TITLE' => 'Nova Conta',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID da Conta de Origem',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Office Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'CEP:',
    'LBL_PRODUCTS_TITLE' => 'Products',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_PUSH_CONTACTS_BUTTON_LABEL' => 'Copiar para Contatos',
    'LBL_PUSH_CONTACTS_BUTTON_TITLE' => 'Copiar...',
    'LBL_RATING' => 'Avaliação:',
    'LBL_SAVE_ACCOUNT' => 'Salvar Conta',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Conta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Cidade do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de Endereço de Envio:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CEP do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'UF de Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rua de Entrega 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rua de Entrega 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rua de Entrega 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rua do Endereço de Entrega',
    'LBL_SHIPPING_ADDRESS' => 'Endereço de Entrega:',
    'LBL_SIC_CODE' => 'Código SIC:',
    'LBL_STATE' => 'State/Region:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Website:',
    'LBL_CAMPAIGNS' => 'Campanhas',
    'LNK_ACCOUNT_LIST' => 'Exibir Contas',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',
    'LNK_IMPORT_ACCOUNTS' => 'Importar Contas',
    'MSG_DUPLICATE' => 'O registro que está prestes a criar pode ser uma duplicidade. Registros de conta contendo nomes semelhantes estão listados abaixo.<br>Clique em criar conta para continuar a criar essa nova conta, ou selecione uma conta existente listada abaixo.',
    'MSG_SHOW_DUPLICATES' => 'O registro que está prestes a criar pode ser uma duplicidade. Registros contendo nomes semelhantes estão listados abaixo.<br>Clique em Salvar para continuar a criar esse novo registro, ou em Cancelar para retornar ao módulo sem criar o registro.',
    'LBL_ASSIGNED_USER_NAME' => 'Atribuído a:',
    'LBL_PROSPECT_LIST' => 'Lista de Alvos',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Contas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    //For export labels
    'LBL_PARENT_ID' => 'Parent ID',
    // SNIP
    'LBL_PRODUCTS_SERVICES_PURCHASED_SUBPANEL_TITLE' => 'Produtos e Serviços Adquiridos',

    'LBL_AOS_CONTRACTS' => 'Contracts',
    'LBL_AOS_INVOICES' => 'Pedidos',
    'LBL_AOS_QUOTES' => 'Cotações',
    'LBL_LIST_WEBSITE' => 'website',
);
