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
    'LBL_MERGE_TXT' => 'Válassza ki azokat a pénznemeket, amiket szeretne  átváltani a kiválasztott pénznembe. Ez a pipával rendelkező pénznemek közül törölni fogja és az újra kijelölteket értékét társítja a kiválasztott pénznemmel.',
    'LBL_US_DOLLAR' => 'Amerikai dollár',
    'LBL_DELETE' => 'Törlés',
    'LBL_LIST_SYMBOL' => 'Currency Symbol',
    'LBL_LIST_NAME' => 'Currency Name',
    'LBL_LIST_ISO4217' => 'ISO 4217-kód',
    'LBL_LIST_ISO4217_HELP' => 'Adja meg a hárombetűs ISO 4217-kód, amely meghatározza a pénznem nevét és valuta szimbólumát.',
    'LBL_UPDATE' => 'Update',
    'LBL_LIST_RATE' => 'Átváltási ráta',
    'LBL_LIST_RATE_HELP' => 'Az átváltási ráta 0,5 Euro azt jelenti, hogy 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Status',
    'LNK_NEW_CONTACT' => 'Kapcsolattartó felvitel',
    'LNK_NEW_ACCOUNT' => 'New Account',
    'LNK_NEW_OPPORTUNITY' => 'New Opportunity',
    'LNK_NEW_CASE' => 'Új Üzenet',
    'LNK_NEW_NOTE' => 'Create Note or Attachment',
    'LNK_NEW_CALL' => 'Új hívás',
    'LNK_NEW_EMAIL' => 'Új Email',
    'LNK_NEW_MEETING' => 'Új Találkozó',
    'LNK_NEW_TASK' => 'Create Task',
    'NTC_DELETE_CONFIRMATION' => 'Biztos benne, hogy törölni kívánja a rekordot? Bármilyen tételt, ami használja ezt a pénznemet, át fogja váltani a rendszer alapértelmezett pénznemmé, amikor használják őket. Javasoljuk, hogy állapotát tegye inaktívba.',
    'LBL_BELOW_MIN' => 'Váltószámnak 0 kell lennie',
    'currency_status_dom' =>
        array(
            'Active' => 'Active',
            'Inactive' => 'Inactive',
        ),
    'LBL_CREATED_BY' => 'Készítette',
    'LBL_EDIT_LAYOUT' => 'Edit Layout' /*for 508 compliance fix*/,
);
