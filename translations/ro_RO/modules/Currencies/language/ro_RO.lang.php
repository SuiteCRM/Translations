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
    'LBL_MERGE_TXT' => 'Vă rugăm să selectați monedele pe care doriți să le asociați monedei selectate. Aceasta va șterge toate valutele cu un marcaj și va realoca orice valoare asociată cu ele în moneda selectată.',
    'LBL_US_DOLLAR' => 'Dolar U.S',
    'LBL_DELETE' => 'Delete',
    'LBL_LIST_SYMBOL' => 'Currency Symbol',
    'LBL_LIST_NAME' => 'Currency Name',
    'LBL_LIST_ISO4217' => 'Cod ISO 4217',
    'LBL_LIST_ISO4217_HELP' => 'Introdu un cod ISO 4217 format din trei litere care definește numele monedei și simbolul monedei.',
    'LBL_UPDATE' => 'Update',
    'LBL_LIST_RATE' => 'Rată Conversie',
    'LBL_LIST_RATE_HELP' => 'O Rată de Conversie 0.5 pentru Euro înseamnă că 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Status',
    'LNK_NEW_CONTACT' => 'New Contact',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
    'LNK_NEW_CASE' => 'New Case',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Apel Nou',
    'LNK_NEW_EMAIL' => 'Email Nou',
    'LNK_NEW_MEETING' => 'Întâlnire nouă',
    'LNK_NEW_TASK' => 'Create Task',
    'NTC_DELETE_CONFIRMATION' => 'Sunteți sigur ca vreți să ștergeți această înregistrare? Orice înregistrări care utilizează această monedă vor fi convertite în moneda implicită a sistemului atunci când sunt accesate. Ar putea fi mai bine să setați status-ul pe inactiv.',
    'LBL_BELOW_MIN' => 'Rată conversie trebuie să fie mai mare de 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Active',
            'Inactive' => 'Inactive',
        ),
    'LBL_CREATED_BY' => 'Created By',
    'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
