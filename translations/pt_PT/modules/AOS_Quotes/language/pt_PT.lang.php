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
    'LBL_NAME' => 'Título',
    'LBL_CREATED_USER' => 'Criado pelo utilizador',
    'LBL_MODIFIED_USER' => 'Alterado pelo utilizador',
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar a conta.',
    'LBL_ACCOUNT_NAME' => 'Título',
    'LBL_ACCOUNT' => 'Empresa:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_ADDRESS_INFORMATION' => 'Dados de endereço',
    'LBL_ANNUAL_REVENUE' => 'Rendimento anual:',
    'LBL_ANY_ADDRESS' => 'Todos os endereços:',
    'LBL_ANY_EMAIL' => 'Todos os endereços de email:',
    'LBL_ANY_PHONE' => 'Todos os telefones:',
    'LBL_RATING' => 'Classificação',
    'LBL_ASSIGNED_USER' => 'Utilizador',
    'LBL_BILLING_ADDRESS_CITY' => 'Faturação — Cidade:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Faturação — País:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Faturação — Código postal:',
    'LBL_BILLING_ADDRESS_STATE' => 'Faturação — Concelho:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Faturação — Rua 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Faturação — Rua 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Faturação — Rua 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Faturação — Rua:',
    'LBL_BILLING_ADDRESS' => 'Endereço de faturação:',
    'LBL_ACCOUNT_INFORMATION' => 'Visão geral',
    'LBL_CITY' => 'Cidade:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_COUNTRY' => 'País:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contas',
    'LBL_DUPLICATE' => 'Conta provavelmente duplicada',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Colaboradores:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Área de atividade:',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da conta',
    'LBL_LIST_CITY' => 'Cidade',
    'LBL_LIST_EMAIL_ADDRESS' => 'Endereço de email',
    'LBL_LIST_PHONE' => 'Telefone',
    'LBL_LIST_STATE' => 'Concelho',
    'LBL_MEMBER_OF' => 'Membro de:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Organizações filiais',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Email alternativo:',
    'LBL_OTHER_PHONE' => 'Telefone alternativo 2:',
    'LBL_OWNERSHIP' => 'Propriedade:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID da conta hospedeira',
    'LBL_PHONE_ALT' => 'Telefone alternativo:',
    'LBL_PHONE_FAX' => 'Fax:',
    'LBL_PHONE_OFFICE' => 'Telefone de trabalho:',
    'LBL_PHONE' => 'Telefone:',
    'LBL_POSTAL_CODE' => 'Código postal:',
    'LBL_SAVE_ACCOUNT' => 'Guardar conta',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Cidade — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'País — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Código postal — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Concelho — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Rua — Endereço de envio 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Rua — Endereço de envio 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Rua — Endereço de envio 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Rua — Endereço de envio:',
    'LBL_SHIPPING_ADDRESS' => 'Endereço de envio:',
    'LBL_STATE' => 'Concelho:',
    'LBL_TICKER_SYMBOL' => 'Símbolo de Bolsa',
    'LBL_TYPE' => 'Tipo:',
    'LBL_WEBSITE' => 'Sítio Internet:',
    'LNK_ACCOUNT_LIST' => 'Contas',
    'LNK_NEW_ACCOUNT' => 'Criar conta',
    'MSG_DUPLICATE' => 'Ao criar esta conta poderá estar a criar uma conta duplicada. Pode selecionar uma conta a partir da lista abaixo ou clicar em guardar para continuar a criar uma nova conta com os dados inseridos anteriormente.',
    'MSG_SHOW_DUPLICATES' => 'Ao criar esta conta poderá estar a criar uma conta duplicada. Pode carregar em cancelar, selecionar uma conta a partir da lista abaixo ou clicar em guardar para continuar a criar uma nova conta com os dados inseridos anteriormente.',
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registo?',
    'LBL_LIST_FORM_TITLE' => 'Lista de propostas',
    'LBL_MODULE_NAME' => 'Propostas',
    'LBL_MODULE_TITLE' => 'Propostas: entrada',
    'LBL_HOMEPAGE_TITLE' => 'Minhas propostas',
    'LNK_NEW_RECORD' => 'Nova proposta',
    'LNK_LIST' => 'Ver propostas',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar propostas',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver histórico',
    'LBL_NEW_FORM_TITLE' => 'Nova proposta',
    'LBL_TERMS_C' => 'Termos',
    'LBL_APPROVAL_ISSUE' => 'Problemas na aprovação',
    'LBL_APPROVAL_STATUS' => 'Situação de aprovação',
    'LBL_BILLING_ACCOUNT' => 'Conta',
    'LBL_BILLING_CONTACT' => 'Contacto',
    'LBL_EXPIRATION' => 'Válido até',
    'LBL_QUOTE_NUMBER' => 'Número da proposta',
    'LBL_OPPORTUNITY' => 'Oportunidade',
    'LBL_TEMPLATE_DDOWN_C' => 'Modelo de proposta',
    'LBL_STAGE' => 'Fase da proposta',
    'LBL_TERM' => 'Condições de pagamento',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Desconto',
    'LBL_TAX_AMOUNT' => 'IVA',
    'LBL_SHIPPING_AMOUNT' => 'Expedição de mercadorias',
    'LBL_TOTAL_AMT' => 'Total',
    'VALUE' => 'Título',
    'LBL_EMAIL_ADDRESSES' => 'Endereços de email',
    'LBL_LINE_ITEMS' => 'Itens de linha',
    'LBL_GRAND_TOTAL' => 'Total final',
    'LBL_INVOICE_STATUS' => 'Situação da fatura',
    'LBL_PRODUCT_QUANITY' => 'Quantidade',
    'LBL_PRODUCT_NAME' => 'Produto',
    'LBL_PART_NUMBER' => 'Número da peça',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrição',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Desconto',
    'LBL_UNIT_PRICE' => 'Preço de venda',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'IVA', // VAT
    'LBL_VAT_AMT' => 'Total de IVA', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Adicionar produto',
    'LBL_SERVICE_NAME' => 'Serviços',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Preço de venda',
    'LBL_SERVICE_DISCOUNT' => 'Desconto',
    'LBL_ADD_SERVICE_LINE' => 'Adicionar serviço ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Remover',
    'LBL_CONVERT_TO_INVOICE' => 'Converter em fatura',
    'LBL_PRINT_AS_PDF' => 'Imprimir como PDF',
    'LBL_EMAIL_QUOTE' => 'Proposta por email',
    'LBL_CREATE_CONTRACT' => 'Criar contrato',
    'LBL_LIST_NUM' => 'Núm.',
    'LBL_PDF_NAME' => 'Proposta',
    'LBL_EMAIL_NAME' => 'Proposta para',
    'LBL_QUOTE_DATE' => 'Data da proposta',
    'LBL_NO_TEMPLATE' => 'ERRO:\nNenhum modelo encontrado. Se ainda não tiver criado um modelo para propostas de estimativas de custos, crie um no módulo de modelos PDF',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Taxa',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF por email',
    'LBL_ADD_GROUP' => 'Adicionar grupo',
    'LBL_DELETE_GROUP' => 'Eliminar grupo',
    'LBL_GROUP_NAME' => 'Nome do grupo',
    'LBL_GROUP_TOTAL' => 'Total do grupo',
    'LBL_SHIPPING_TAX' => 'Taxa de envio',
    'LBL_SHIPPING_TAX_AMT' => 'Taxa de envio',
    'LBL_IMPORT_LINE_ITEMS' => 'Importar itens de linha',
    'LBL_CREATE_OPPORTUNITY' => 'Criar oportunidade',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (moeda predefinida)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Desconto (moeda predefinida)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxa (moeda predefinida)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Portes de envio (moeda predefinida)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (moeda predefinida)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxa de envio (moeda predefinida)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total final (moeda predefinida)',
    'LBL_QUOTE_TO' => 'Proposta para',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + taxa (moeda predefinida)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Propostas: Contratos',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Propostas: Faturas',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupos de itens de linha',
    'LBL_AOS_PRODUCT_QUOTES' => 'Proposta de produtos',
    'LBL_AOS_QUOTES_PROJECT' => 'Propostas: Projeto',
);
