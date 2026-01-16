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
    'LBL_MODULE_NAME' => 'Oportunidades',
    'LBL_MODULE_TITLE' => 'Oportunidades: entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar oportunidades',
    'LBL_LIST_FORM_TITLE' => 'Lista de oportunidades',
    'LBL_OPPORTUNITY_NAME' => 'Nome da oportunidade:',
    'LBL_OPPORTUNITY' => 'Oportunidade:',
    'LBL_NAME' => 'Nome da oportunidade',
    'LBL_INVITEE' => 'Contactos',
    'LBL_CURRENCIES' => 'Moedas',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nome',
    'LBL_LIST_ACCOUNT_NAME' => 'Nome da conta',
    'LBL_LIST_AMOUNT' => 'Valor da oportunidade',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Valor',
    'LBL_LIST_DATE_CLOSED' => 'Fechar',
    'LBL_LIST_SALES_STAGE' => 'Fase da venda',
    'LBL_ACCOUNT_ID' => 'ID da conta',
    'LBL_CURRENCY_NAME' => 'Nome da moeda',
    'LBL_CURRENCY_SYMBOL' => 'Símbolo da moeda',
    'LBL_DAYS_OPEN_FOR' => 'Esta oportunidade esteve aberta durante',

    'UPDATE' => 'Oportunidade — Atualizar moeda',
    'LBL_ACCOUNT_NAME' => 'Nome da conta:',
    'LBL_AMOUNT' => 'Valor da oportunidade:',
    'LBL_AMOUNT_USDOLLAR' => 'Valor:',
    'LBL_CURRENCY' => 'Moeda:',
    'LBL_DATE_CLOSED' => 'Data prevista de fecho:',
    'LBL_TYPE' => 'Tipo:',
    'LBL_CAMPAIGN' => 'Campanha:',
    'LBL_NEXT_STEP' => 'Próximo passo:',
    'LBL_LEAD_SOURCE' => 'Origem da pista:',
    'LBL_SALES_STAGE' => 'Fase da venda:',
    'LBL_PROBABILITY' => 'Probabilidade (%):',
    'LBL_DESCRIPTION' => 'Descrição:',
    'LBL_DUPLICATE' => 'Oportunidade provavelmente duplicada',
    'MSG_DUPLICATE' => 'O registo de oportunidade que está prestes a criar pode ser um duplicado de um registo de oportunidade já existente. Os registos de oportunidade contendo nomes semelhantes estão listados abaixo.<br>Clique em Guardar para continuar a criação desta oportunidade, ou clique em Cancelar para voltar ao módulo sem criar a oportunidade.',
    'LBL_NEW_FORM_TITLE' => 'Criar oportunidade',
    'LNK_NEW_OPPORTUNITY' => 'Criar oportunidade',
    'LNK_OPPORTUNITY_LIST' => 'Ver oportunidades',
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar a oportunidade.',
    'LBL_TOP_OPPORTUNITIES' => 'Meu top de oportunidades em aberto',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Tem a certeza de que pretende remover esta oportunidade deste projeto?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Oportunidades',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Atividades',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Histórico',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Pistas',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contactos',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documentos',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projetos',
    'LBL_ASSIGNED_TO_NAME' => 'Atribuído a:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilizador atribuído',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Minhas oportunidades fechadas',
    'LBL_TOTAL_OPPORTUNITIES' => 'Oportunidades Totais',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Oportunidades fechadas e ganhas',
    'LBL_ASSIGNED_TO_ID' => 'Utilizador atribuído:',
    'LBL_MODIFIED_NAME' => 'Alterado por (nome de utilizador)',
    'LBL_CREATED_USER' => 'Utilizador criado',
    'LBL_MODIFIED_USER' => 'Utilizador modificado',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campanhas',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projetos',
    'LNK_IMPORT_OPPORTUNITIES' => 'Importar oportunidades',
    'LBL_EDITLAYOUT' => 'Editar esquema'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contratos',
    'LBL_AOS_QUOTES' => 'Propostas',

    'LBL_SIZE_ANALYSIS' => 'Análise de tamanho',
    'LBL_POSITION' => 'Posição',
    'LBL_OUT_OF' => 'Em',
);
