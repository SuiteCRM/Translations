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
    'LBL_ASSIGNED_TO_NAME' => 'Szerződés felelős',
    'LBL_CONTRACT_ACCOUNT' => 'Ügyfél',
    'LBL_OPPORTUNITY' => 'Lehetőség',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Létrehozás dátuma',
    'LBL_DATE_MODIFIED' => 'Módosítás dátuma',
    'LBL_MODIFIED' => 'Módosító',
    'LBL_MODIFIED_NAME' => 'Módosító név',
    'LBL_CREATED' => 'Létrehozta',
    'LBL_DESCRIPTION' => 'Leírás',
    'LBL_DELETED' => 'Törölve',
    'LBL_NAME' => 'Szerződés címe',
    'LBL_CREATED_USER' => 'Felhasználó által létrehozva',
    'LBL_MODIFIED_USER' => 'Felhasználó által módosítva',
    'LBL_LIST_NAME' => 'Név',
    'LBL_LIST_FORM_TITLE' => 'Szerződések listáját',
    'LBL_MODULE_NAME' => 'Szerződések',
    'LBL_MODULE_TITLE' => 'Szerződések: Főoldal',
    'LBL_HOMEPAGE_TITLE' => 'Szerződéseim',
    'LNK_NEW_RECORD' => 'Szerződés létrehozása',
    'LNK_LIST' => 'Szerződések nézet',
    'LBL_SEARCH_FORM_TITLE' => 'Szerződések keresése',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Előzmény Megtekintése',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Tevékenységek',
    'LBL_NEW_FORM_TITLE' => 'Új szerződés',
    'LBL_CONTRACT_NAME' => 'Szerződés neve',
    'LBL_REFERENCE_CODE ' => 'Referencia-kód',
    'LBL_START_DATE' => 'Kezdés dátum:',
    'LBL_END_DATE' => 'Végdátum',
    'LBL_TOTAL_CONTRACT_VALUE' => 'A szerződés értéke',
    'LBL_STATUS' => 'Állapot',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Vevő ekkor írta alá',
    'LBL_COMPANY_SIGNED_DATE' => 'Mi ekkor írtuk alá',
    'LBL_RENEWAL_REMINDER' => ' Szerződés megújítási emlékeztető',
    'LBL_RENEWAL_REMINDER_DATE' => 'Megújítási emlékeztető dátuma',
    'LBL_CONTRACT_TYPE' => 'Szerződés típusok',
    'LBL_CONTACT' => 'Kapcsolattartó',
    'LBL_ADD_GROUP' => 'Csoport hozzáadása',
    'LBL_DELETE_GROUP' => 'Csoport törlése',
    'LBL_GROUP_NAME' => 'Csoport neve',
    'LBL_GROUP_TOTAL' => 'Csoport összesen',
    'LBL_PRODUCT_QUANITY' => 'Mennyiség',
    'LBL_PRODUCT_NAME' => 'Termék',
    'LBL_PART_NUMBER' => 'Termékszám',
    'LBL_PRODUCT_NOTE' => 'Jegyzet',
    'LBL_PRODUCT_DESCRIPTION' => 'Leírás',
    'LBL_LIST_PRICE' => 'Lista',
    'LBL_DISCOUNT_AMT' => 'Kedvezmény',
    'LBL_UNIT_PRICE' => 'Eladási ár',
    'LBL_TOTAL_PRICE' => 'Összesen',
    'LBL_VAT' => 'ÁFA',
    'LBL_VAT_AMT' => 'ÁFAösszeg',
    'LBL_SERVICE_NAME' => 'Szervíz',
    'LBL_SERVICE_LIST_PRICE' => 'Lista',
    'LBL_SERVICE_PRICE' => 'Eladási ár',
    'LBL_SERVICE_DISCOUNT' => 'Kedvezmény',
    'LBL_LINE_ITEMS' => 'Tételek',
    'LBL_SUBTOTAL_AMOUNT' => 'Részösszeg',
    'LBL_DISCOUNT_AMOUNT' => 'Kedvezmény',
    'LBL_TAX_AMOUNT' => 'ÁFA',
    'LBL_SHIPPING_AMOUNT' => 'Szállítás',
    'LBL_TOTAL_AMT' => 'Összesen',
    'LBL_GRAND_TOTAL' => 'Mindösszesen',
    'LBL_SHIPPING_TAX' => 'Szállítási ÁFA',
    'LBL_SHIPPING_TAX_AMT' => 'Szállítási ÁFA',
    'LBL_ADD_PRODUCT_LINE' => 'Új termék számlasor',
    'LBL_ADD_SERVICE_LINE' => 'Új szolgáltatás számlasor',
    'LBL_PRINT_AS_PDF' => 'Nyomtatás PDF-ként',
    'LBL_EMAIL_PDF' => 'Email PDF melléklettel',
    'LBL_PDF_NAME' => 'Szerződés',
    'LBL_EMAIL_NAME' => 'Szerződés részére',
    'LBL_NO_TEMPLATE' => 'Hiba\nNem található sablon. Kérem, a PDF-sablonok modulban hozzon létre egyet!',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Szerződés értéke (alapértelmezett pénznem)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Részösszeg (alapértelmezett pénznem)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Kedvezmény (alapértelmezett pénznem)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'ÁFA (alapértelmezett pénznem)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Szállítás (alapértelmezett pénznem)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Összesen (alapértelmezett pénznem)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Szállítási ÁFA (alapértelmezett pénznem)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Mindösszesen (alapértelmezett pénznem)',

    'LBL_CALL_ID' => 'Hívás azonosító',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Tétel csoportok',
    'LBL_AOS_PRODUCT_QUOTES' => 'Termék idézetek',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Idézetek: szerződések',
);
