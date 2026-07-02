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
    'LBL_SECURITYGROUPS' => 'Grupos de Segurança',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Grupos de Segurança',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Data de Criação',
    'LBL_DATE_MODIFIED' => 'Data de Modificação',
    'LBL_MODIFIED' => 'Modificado Por',
    'LBL_MODIFIED_NAME' => 'Modificado por (Nome)',
    'LBL_CREATED' => 'Criado Por',
    'LBL_DESCRIPTION' => 'Descrição',
    'LBL_DELETED' => 'Deletado',
    'LBL_NAME' => 'Nome',
    'LBL_CREATED_USER' => 'Criado por Usuário',
    'LBL_MODIFIED_USER' => 'Modificado pelo Usuário',
    'LBL_LIST_NAME' => 'Nome',
    'LBL_EDIT_BUTTON' => 'Edit',
    'LBL_REMOVE' => 'Remover',
    'LBL_LIST_FORM_TITLE' => 'Pivot List',
    'LBL_MODULE_NAME' => 'Pivot',
    'LBL_MODULE_TITLE' => 'Pivot',
    'LBL_HOMEPAGE_TITLE' => 'My Pivot',
    'LNK_NEW_RECORD' => 'Create Pivot',
    'LNK_LIST' => 'View Pivot',
    'LBL_SEARCH_FORM_TITLE' => 'Search Pivot',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Ver Histórico',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_NEW_FORM_TITLE' => 'New Pivot',
    'LBL_CONFIG' => 'Config',
    'LBL_TYPE' => 'Area for Analysis',
    'LNK_SPOT_LIST' => 'View Spots',
    'LNK_SPOT_CREATE' => 'Create Spot',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Configuration',

    'LBL_AN_UNSUPPORTED_DB' => 'Sorry, Suite Spots are currently configured for MySQL and MS SQL only',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Name',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Account Type',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Industry',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Billing Country',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Usuário atribuído',
    'LBL_AN_LEADS_STATUS' => 'Status',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Fonte do Potencial',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Campaign Name',
    'LBL_AN_LEADS_YEAR' => 'Ano',
    'LBL_AN_LEADS_QUARTER' => 'Trimestre',
    'LBL_AN_LEADS_MONTH' => 'Mês',
    'LBL_AN_LEADS_WEEK' => 'Semana',
    'LBL_AN_LEADS_DAY' => 'Dia',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Usuário atribuído',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'TipoDaOportunidade',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Fonte do Potencial',
    'LBL_AN_SALES_AMOUNT' => 'Valor',
    'LBL_AN_SALES_STAGE' => 'Fase da Venda',
    'LBL_AN_SALES_PROBABILITY' => 'Probabilidade',
    'LBL_AN_SALES_DATE' => 'Data de Venda',
    'LBL_AN_SALES_QUARTER' => 'Trimestre da Venda',
    'LBL_AN_SALES_MONTH' => 'Mês da Venda',
    'LBL_AN_SALES_WEEK' => 'Semana da Venda',
    'LBL_AN_SALES_DAY' => 'Dia da Venda',
    'LBL_AN_SALES_YEAR' => 'Ano da Venda',
    'LBL_AN_SALES_CAMPAIGN' => 'Campanha',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AN_SERVICE_STATE' => 'Estado',
    'LBL_AN_SERVICE_STATUS' => 'Status',
    'LBL_AN_SERVICE_PRIORITY' => 'Prioridade',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Criado no Dia',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Criado na Semana',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Criado no Mês',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Criado no Trimestre',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Criado no Ano',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'Nome do Contato',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Usuário atribuído',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tipo',
    'LBL_AN_ACTIVITIES_NAME' => 'Nome',
    'LBL_AN_ACTIVITIES_STATUS' => 'Status',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Usuário atribuído',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Status',
    'LBL_AN_MARKETING_TYPE' => 'Tipo',
    'LBL_AN_MARKETING_BUDGET' => 'Orçamento',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Custo Estimado',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Receita Estimada',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Valor da Oportunidade',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Estágio de Vendas Oportunidade',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Oportunidade Atribuída a',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Nome da Conta',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Nome da Campanha',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'Data de Atividade',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'Tipo Atividade',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'Tipo Relacionado',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'ID Relacionado',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Nome da Oportunidade',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Tipo da Oportunidade',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Origem do Lead da Oportunidade',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Fase de Vendas Oportunidade',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Nome da Conta',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'Nome do Contato',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Nome do Item',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Tipo de Item',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Categoria do Item',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Item Quantidade',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Preço de Lista do Item',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Preço de Venda do Item',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Preço de Custo do Item',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Desconto do Preço do Item',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'Valor do Desconto',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Total do Item',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Total Geral',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Usuário atribuído',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Data de Criação',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Criado no Dia',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Criado na Semana',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Criado no Mês',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Criado no Trimestre',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Criado no Ano',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Erro ao determinar o rótulo da subárea de pivot',
);
