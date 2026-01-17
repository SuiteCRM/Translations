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
    'LBL_ASSIGNED_TO_NAME' => 'Manager de contract',
    'LBL_CONTRACT_ACCOUNT' => 'Cont',
    'LBL_OPPORTUNITY' => 'Oportunitate',
    'LBL_ID' => 'ID-ul',
    'LBL_DATE_ENTERED' => 'Data creării',
    'LBL_DATE_MODIFIED' => 'Data modificării',
    'LBL_MODIFIED' => 'Modificat de',
    'LBL_MODIFIED_NAME' => 'Nume modificant',
    'LBL_CREATED' => 'Creat De',
    'LBL_DESCRIPTION' => 'Descriere',
    'LBL_DELETED' => 'Şters',
    'LBL_NAME' => 'Titlu contractului',
    'LBL_CREATED_USER' => 'Creat de Utilizator',
    'LBL_MODIFIED_USER' => 'Modificat de utilizator',
    'LBL_LIST_NAME' => 'Nume',
    'LBL_LIST_FORM_TITLE' => 'Lista contractelor',
    'LBL_MODULE_NAME' => 'Contracte',
    'LBL_MODULE_TITLE' => 'Contracte: Acasă',
    'LBL_HOMEPAGE_TITLE' => 'Contractele mele',
    'LNK_NEW_RECORD' => 'Creați Contract',
    'LNK_LIST' => 'Vezi contracte',
    'LBL_SEARCH_FORM_TITLE' => 'Cauta contracte',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Vizualizare Istoric',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activităţi',
    'LBL_NEW_FORM_TITLE' => 'Contract nou',
    'LBL_CONTRACT_NAME' => 'Nume contractului',
    'LBL_REFERENCE_CODE ' => 'Cod de referință ',
    'LBL_START_DATE' => 'Dată Început',
    'LBL_END_DATE' => 'Dată Sfârșit',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Valoare contractului',
    'LBL_STATUS' => 'Status',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Data semnări clientului',
    'LBL_COMPANY_SIGNED_DATE' => 'Data semnări companiei',
    'LBL_RENEWAL_REMINDER' => ' Reamintire reînnoire Contract',
    'LBL_RENEWAL_REMINDER_DATE' => 'Data de reînnoire',
    'LBL_CONTRACT_TYPE' => 'Tip Contract',
    'LBL_CONTACT' => 'Contact',
    'LBL_ADD_GROUP' => 'Adăugați Grup',
    'LBL_DELETE_GROUP' => 'Șterge Grupul',
    'LBL_GROUP_NAME' => 'Denumire grup',
    'LBL_GROUP_TOTAL' => 'Total Grup',
    'LBL_PRODUCT_QUANITY' => 'Cantitate',
    'LBL_PRODUCT_NAME' => 'Produs',
    'LBL_PART_NUMBER' => 'Număr Articol',
    'LBL_PRODUCT_NOTE' => 'Notă',
    'LBL_PRODUCT_DESCRIPTION' => 'Descriere',
    'LBL_LIST_PRICE' => 'Listează',
    'LBL_DISCOUNT_AMT' => 'Reducere',
    'LBL_UNIT_PRICE' => 'Preț de vânzare',
    'LBL_TOTAL_PRICE' => 'Total',
    'LBL_VAT' => 'Taxa',
    'LBL_VAT_AMT' => 'Valoare impozit',
    'LBL_SERVICE_NAME' => 'Service',
    'LBL_SERVICE_LIST_PRICE' => 'Listează',
    'LBL_SERVICE_PRICE' => 'Preț de vânzare',
    'LBL_SERVICE_DISCOUNT' => 'Reducere',
    'LBL_LINE_ITEMS' => 'Rând de elemente',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Reducere',
    'LBL_TAX_AMOUNT' => 'Taxa',
    'LBL_SHIPPING_AMOUNT' => 'Curierat',
    'LBL_TOTAL_AMT' => 'Total',
    'LBL_GRAND_TOTAL' => 'Total General',
    'LBL_SHIPPING_TAX' => 'Taxa de livrare',
    'LBL_SHIPPING_TAX_AMT' => 'Taxa de livrare',
    'LBL_ADD_PRODUCT_LINE' => 'Adaugă linie produs',
    'LBL_ADD_SERVICE_LINE' => 'Adaugă linie de servicii ',
    'LBL_PRINT_AS_PDF' => 'Tipărește în PDF',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Contract',
    'LBL_EMAIL_NAME' => 'Contract pentru',
    'LBL_NO_TEMPLATE' => 'EROARE\nNiciun șablon găsit. Dacă nu ați creat un șablon de contract, mergeți la modulul de șabloane PDF și creați unul',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Valoarea contractului (în valuta implicită)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (în valuta implicită)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Reducere (Valuta implicita)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Taxă (în valuta implicită)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Livrare (în valuta implicită)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Total (în valuta implicită)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Taxă de livrare (în valuta implicită)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Total general (în valuta implicită)',

    'LBL_CALL_ID' => 'ID de apel',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Grupuri de elemente în linie',
    'LBL_AOS_PRODUCT_QUOTES' => 'Oferte de Produs',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Oferte: Contracte',
);
