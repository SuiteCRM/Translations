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
    'LBL_ASSIGNED_TO_ID' => 'ID do usuário atribuído',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Created By',
    'LBL_DESCRIPTION' => 'Description',
    'LBL_DELETED' => 'Deleted',
    'LBL_NAME' => 'Título',
    'LBL_CREATED_USER' => 'Created by User',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'ERR_DELETE_RECORD' => 'É necessário um número de registro para excluir a conta.',
    'LBL_ACCOUNT_NAME' => 'Título',
    'LBL_ACCOUNT' => 'Company:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Informações do Endereço',
    'LBL_ANNUAL_REVENUE' => 'Faturamento Anual:',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Any Email:',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => 'Atribuído a',
    'LBL_BILLING_ADDRESS_CITY' => 'Billing City:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Billing Country:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faturamento - Cep:',
    'LBL_BILLING_ADDRESS_STATE' => 'Billing State:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Endereço de Faturamento:',
    'LBL_ACCOUNT_INFORMATION' => 'Visão geral',
    'LBL_CITY' => 'City:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contatos',
    'LBL_COUNTRY' => 'Country:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contas',
    'LBL_DUPLICATE' => 'Conta Possivelmente Duplicada',
    'LBL_EMAIL' => 'E-mail:',
    'LBL_EMPLOYEES' => 'Colaboradores:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Indústria:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_EMAIL_ADDRESS' => 'Endereço de e-mail',
    'LBL_LIST_PHONE' => 'Phone',
    'LBL_LIST_STATE' => 'State',
    'LBL_MEMBER_OF' => 'Member of:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Member Organizations',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Other Email:',
    'LBL_OTHER_PHONE' => 'Outro Telefone:',
    'LBL_OWNERSHIP' => 'Ownership:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID da Conta de Origem',
    'LBL_PHONE_ALT' => 'Alternate Phone:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Phone:',
    'LBL_POSTAL_CODE' => 'CEP:',
    'LBL_SAVE_ACCOUNT' => 'Salvar Conta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Cidade do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País de Endereço de Envio:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'CEP do Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'UF de Endereço de Entrega:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rua de Entrega 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rua de Entrega 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rua de Entrega 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rua do Endereço de Entrega',
    'LBL_SHIPPING_ADDRESS' => 'Endereço de Entrega:',
    'LBL_STATE' => 'Estado ou Região:',
    'LBL_TICKER_SYMBOL' => 'Ticker Symbol:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Contas',
    'LNK_NEW_ACCOUNT' => 'Criar Conta',
    'MSG_DUPLICATE' => 'Criar esta conta pode potencialmente criar uma conta duplicada. Você pode selecionar uma conta da lista abaixo ou clicar em Salvar para continuar a criar uma nova conta com os dados previamente inseridos.',
    'MSG_SHOW_DUPLICATES' => 'Criar esta conta pode potencialmente criar uma conta duplicada. Você pode clicar em Salvar para continuar a criar essa nova conta com os dados previamente inseridos ou você pode clicar em Cancelar.',
    'NTC_DELETE_CONFIRMATION' => 'Tem certeza que deseja excluir este registro?',
    'LBL_LIST_FORM_TITLE' => 'Lista de Pedidos',
    'LBL_MODULE_NAME' => 'Pedidos',
    'LBL_MODULE_TITLE' => 'Pedidos: Início',
    'LBL_HOMEPAGE_TITLE' => 'Meus Pedidos',
    'LNK_NEW_RECORD' => 'Criar Pedido',
    'LNK_LIST' => 'Exibir Pedidos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Pedidos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_NEW_FORM_TITLE' => 'Novo Pedido',
    'LBL_TERMS_C' => 'Termos',
    'LBL_APPROVAL_ISSUE' => 'Questões para Aprovação',
    'LBL_APPROVAL_STATUS' => 'Estado da aprovação',
    'LBL_BILLING_ACCOUNT' => 'Conta',
    'LBL_BILLING_CONTACT' => 'Contato',
    'LBL_EXPIRATION' => 'Válido Até',
    'LBL_INVOICE_NUMBER' => 'Número do Pedido',
    'LBL_OPPORTUNITY' => 'Opportunity Name',
    'LBL_TEMPLATE_DDOWN_C' => 'Modelos de Pedido',
    'LBL_STAGE' => 'Fase da Cotação',
    'LBL_TERM' => 'Condições de Pagamento',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Discount',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Frete',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Título',
    'LBL_EMAIL_ADDRESSES' => 'Endereços de e-mail',
    'LBL_LINE_ITEMS' => 'Itens de linha',
    'LBL_GRAND_TOTAL' => 'Grand Total',
    'LBL_QUOTE_NUMBER' => 'Número da Cotação',
    'LBL_QUOTE_DATE' => 'Data da Cotação',
    'LBL_INVOICE_DATE' => 'Data do Pedido',
    'LBL_DUE_DATE' => 'Data Limite',
    'LBL_STATUS' => 'Status',
    'LBL_INVOICE_STATUS' => 'Status do Pedido',
    'LBL_PRODUCT_QUANITY' => 'Quantity',
    'LBL_PRODUCT_NAME' => 'Produto',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Description',
    'LBL_LIST_PRICE' => 'List',
    'LBL_DISCOUNT_AMT' => 'Discount',
    'LBL_UNIT_PRICE' => 'Sale Price',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Tax', //VAT
    'LBL_VAT_AMT' => 'Tax Amount', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Add Product Line',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'List',
    'LBL_SERVICE_PRICE' => 'Sale Price',
    'LBL_SERVICE_DISCOUNT' => 'Discount',
    'LBL_ADD_SERVICE_LINE' => 'Add Service Line ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Remover',
    'LBL_PRINT_AS_PDF' => 'Print as PDF',
    'LBL_EMAIL_INVOICE' => 'Pedido por e-mail',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Pedido',
    'LBL_EMAIL_NAME' => 'Pedido para',
    'LBL_NO_TEMPLATE' => 'ERRO\nNenhum modelo encontrado. Por favor, crie um modelo de Pedido no módulo de Modelos PDF',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Imposto',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Add Group',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Group Name',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Shipping Tax',
    'LBL_SHIPPING_TAX_AMT' => 'Shipping Tax',
    'LBL_IMPORT_LINE_ITEMS' => 'Importar Linhas de Itens',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default Currency)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Discount (Default Currency)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default Currency)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Shipping (Default Currency)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (Default Currency)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Shipping Tax (Default Currency)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Grand Total (Default Currency)',
    'LBL_INVOICE_TO' => 'Pedido Para',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupos de itens de linha',
    'LBL_AOS_PRODUCT_QUOTES' => 'Cotações de produtos',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Cotações : Pedidos',
);
