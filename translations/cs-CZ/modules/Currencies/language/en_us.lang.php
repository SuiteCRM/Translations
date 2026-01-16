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
    'LBL_MODULE_NAME' => 'Měny',
    'LBL_LIST_FORM_TITLE' => 'Měny',
    'LBL_CURRENCY' => 'Měna',
    'LBL_ADD' => 'Přidat',
    'LBL_MERGE' => 'Sloučit kopie',
    'LBL_MERGE_TXT' => 'Vyberte měny, kterou chcete namapovat na vybranou měnu. To odstraní všechny zatržené měny a přiřadí libovolnou hodnotu spojenou s nimi do vybrané měny.',
    'LBL_US_DOLLAR' => 'Americký dolar',
    'LBL_DELETE' => 'Smazat',
    'LBL_LIST_SYMBOL' => 'Symbol měny',
    'LBL_LIST_NAME' => 'Název měny',
    'LBL_LIST_ISO4217' => 'ISO 4217 kód',
    'LBL_LIST_ISO4217_HELP' => 'Zadejte třípísmenný ISO 4217 kód, který definuje název měny a symbol měny.',
    'LBL_UPDATE' => 'Aktualizovat',
    'LBL_LIST_RATE' => 'Konverzní faktor',
    'LBL_LIST_RATE_HELP' => 'Konverzní faktor 0,5 eura znamená, že 10 USD = 5 Euro.',
    'LBL_LIST_STATUS' => 'Stav',
    'LNK_NEW_CONTACT' => 'Přidat kontakt',
    'LNK_NEW_ACCOUNT' => 'Přidat klienta',
    'LNK_NEW_OPPORTUNITY' => 'Nová příležitost',
    'LNK_NEW_CASE' => 'Nový případ',
    'LNK_NEW_NOTE' => 'Přidat poznámku nebo přílohu',
    'LNK_NEW_CALL' => 'Nový hovor',
    'LNK_NEW_EMAIL' => 'Nový Email',
    'LNK_NEW_MEETING' => 'Nová schůzka',
    'LNK_NEW_TASK' => 'Vytvořit úkol',
    'NTC_DELETE_CONFIRMATION' => 'Opravdu chcete smazat tento záznam? Každý záznam používající tuto měnu bude převeden na výchozí měnu systému jakmile jej otevřete. Je lepší nastavit stav na neaktivní.',
    'LBL_BELOW_MIN' => 'Konverzní faktor musí být větší než 0',
    'currency_status_dom' =>
        array(
            'Active' => 'Aktivní',
            'Inactive' => 'Neaktivní',
        ),
    'LBL_CREATED_BY' => 'Vytvořeno',
    'LBL_EDIT_LAYOUT' => 'Úprava rozvržení' /*for 508 compliance fix*/,
);
