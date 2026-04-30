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
    'LBL_MODULE_NAME' => 'Currencies',
    'LBL_LIST_FORM_TITLE' => 'Currencies',
    'LBL_CURRENCY' => 'Currency',
    'LBL_ADD' => 'Add',
    'LBL_MERGE' => 'Merge',
    'LBL_MERGE_TXT' => 'Si us plau, seleccioni les monedes que vol associar a la moneda seleccionada. Això eliminarà totes les monedes marcades i reasignarà qualsevol valor associat a la moneda seleccionada.',
    'LBL_US_DOLLAR' => 'Dolar de EEUU',
    'LBL_DELETE' => 'Delete',
    'LBL_LIST_SYMBOL' => 'Currency Symbol',
    'LBL_LIST_NAME' => 'Currency Name',
    'LBL_LIST_ISO4217' => 'Codi ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Introdueixi el codi ISO 4217 de tres lletres que defineix el nom i el símbol de la moneda.',
    'LBL_UPDATE' => 'Update',
    'LBL_LIST_RATE' => 'Rati de conversió',
    'LBL_LIST_RATE_HELP' => 'Un rati de conversió de 0.5 per a l\'Euro significa que 10 dòlars dels Estats Units equivalen a 5 Euros.',
    'LBL_LIST_STATUS' => 'Status',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
    'LNK_NEW_CASE' => 'New Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Nova trucada',
    'LNK_NEW_EMAIL' => 'Nou correu electrònic',
    'LNK_NEW_MEETING' => 'Nova reunió',
    'LNK_NEW_TASK' => 'Create Task',
    'NTC_DELETE_CONFIRMATION' => 'Està segur que vol eliminar aquest registre? Qualsevol registre que utilitzi aquesta moneda es convertirà a la moneda per defecte del sistema quan s\'accedeixi a ell. Pot ser millor establir l\'estat d\'inactiu.',
    'LBL_BELOW_MIN' => 'El rati de conversió ha de ser major que 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Active',
            'Inactive' => 'Inactive',
        ),
    'LBL_CREATED_BY' => 'Created By',
    'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
