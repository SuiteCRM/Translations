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
    'LBL_MODULE_NAME' => 'Versões',
    'LBL_MODULE_TITLE' => 'Lançamentos: Entrada',
    'LBL_SEARCH_FORM_TITLE' => 'Pesquisar lançamentos',
    'LBL_LIST_FORM_TITLE' => 'Lista de lançamentos',
    'LBL_NEW_FORM_TITLE' => 'Novo lançamento',
    'LBL_RELEASE' => 'Versão:',
    'LBL_LIST_NAME' => 'Lançamento',
    'LBL_NAME' => 'Versão do lançamento:',
    'LBL_LIST_LIST_ORDER' => 'Ordem',
    'LBL_LIST_ORDER' => 'Ordem:',
    'LBL_LIST_STATUS' => 'Situação',
    'LBL_STATUS' => 'Situação:',
    'LNK_NEW_RELEASE' => 'Lista de lançamentos',
    'NTC_DELETE_CONFIRMATION' => 'Tem a certeza de que pretende eliminar este registo?',
    'NTC_SNOOZE_CONFIRMATION' => 'Tem a certeza de que deseja suspender?',
    'ERR_DELETE_RECORD' => 'Tem de especificar um número de registo para poder eliminar o lançamento.',
    'NTC_STATUS' => 'Define a situação como inativa para remover este lançamento do menu da lista de lançamentos',
    'NTC_LIST_ORDER' => 'Definir a ordem que este lançamento aparecerá nas listas suspensas de lançamentos',
    'release_status_dom' =>
        array(
            'Active' => 'Ativo',
            'Inactive' => 'Inativo',
        ),
    'LBL_EDITLAYOUT' => 'Editar esquema' /*for 508 compliance fix*/,
);
