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
    'LBL_ASSIGNED_TO_NAME' => 'Gestor do contrato',
    'LBL_CONTRACT_ACCOUNT' => 'Conta',
    'LBL_OPPORTUNITY' => 'Oportunidade',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de criação',
    'LBL_DATE_MODIFIED' => 'Data de alteração',
    'LBL_MODIFIED' => 'Alterado por',
    'LBL_MODIFIED_NAME' => 'Alterado por (nome)',
    'LBL_CREATED' => 'Criado por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Eliminado',
    'LBL_NAME' => 'Título do contrato',
    'LBL_CREATED_USER' => 'Criado pelo utilizador',
    'LBL_MODIFIED_USER' => 'Alterado pelo utilizador',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_LIST_FORM_TITLE' => 'Lista de contratos',
    'LBL_MODULE_NAME' => 'Contratos',
    'LBL_MODULE_TITLE' => 'Contratos: entrada',
    'LBL_HOMEPAGE_TITLE' => 'Meus contratos',
    'LNK_NEW_RECORD' => 'Criar contrato',
    'LNK_LIST' => 'Ver contratos',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar contratos',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'Novo contrato',
    'LBL_CONTRACT_NAME' => 'Nome do contrato',
    'LBL_REFERENCE_CODE ' => 'Código de referência',
    'LBL_START_DATE' => 'Data de início',
    'LBL_END_DATE' => 'Data de fim',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valor do contrato',
    'LBL_STATUS' => 'Situação',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Assinatura do cliente — Data',
    'LBL_COMPANY_SIGNED_DATE' => 'Assinatura da empresa — Data',
    'LBL_RENEWAL_REMINDER' => ' Lembrete de renovação de contrato',
    'LBL_RENEWAL_REMINDER_DATE' => 'Renovação do lembrete — Data',
    'LBL_CONTRACT_TYPE' => 'Tipo de contrato',
    'LBL_CONTACT' => 'Contacto',
    'LBL_ADD_GROUP' => 'Adicionar grupo',
    'LBL_DELETE_GROUP' => 'Eliminar grupo',
    'LBL_GROUP_NAME' => 'Nome do grupo',
    'LBL_GROUP_TOTAL' => 'Total do grupo',
    'LBL_PRODUCT_QUANITY' => 'Quantidade',
    'LBL_PRODUCT_NAME' => 'Produto',
    'LBL_PART_NUMBER' => 'Número da peça',
    'LBL_PRODUCT_NOTE' => 'Nota',
    'LBL_PRODUCT_DESCRIPTION' => 'Descrição',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Desconto',
    'LBL_UNIT_PRICE' => 'Preço de venda',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'IVA',
    'LBL_VAT_AMT' => 'Total de IVA',
    'LBL_SERVICE_NAME' => 'Serviços',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Preço de venda',
    'LBL_SERVICE_DISCOUNT' => 'Desconto',
    'LBL_LINE_ITEMS' => 'Itens de linha',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Desconto',
    'LBL_TAX_AMOUNT' => 'IVA',
    'LBL_SHIPPING_AMOUNT' => 'Expedição de mercadorias',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Total final',
    'LBL_SHIPPING_TAX' => 'Taxa de envio',
    'LBL_SHIPPING_TAX_AMT' => 'Taxa de envio',
    'LBL_ADD_PRODUCT_LINE' => 'Adicionar produto',
    'LBL_ADD_SERVICE_LINE' => 'Adicionar serviço ',
    'LBL_PRINT_AS_PDF' => 'Imprimir como PDF',
    'LBL_EMAIL_PDF' => 'PDF por email',
    'LBL_PDF_NAME' => 'Contrato',
    'LBL_EMAIL_NAME' => 'Contrato para',
    'LBL_NO_TEMPLATE' => 'ERRO:\nNenhum modelo encontrado. Se ainda não tiver criado um modelo de contrato, crie um no módulo de modelos PDF',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Valor do contrato (moeda predefinida)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (moeda predefinida)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Desconto (moeda predefinida)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxa (moeda predefinida)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Portes de envio (moeda predefinida)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (moeda predefinida)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxa de envio (moeda predefinida)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total final (moeda predefinida)',

    'LBL_CALL_ID' => 'ID do telefonema',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupos de itens de linha',
    'LBL_AOS_PRODUCT_QUOTES' => 'Proposta de produtos',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Propostas: Contratos',
);
