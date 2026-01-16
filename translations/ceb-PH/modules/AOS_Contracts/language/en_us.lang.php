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
    'LBL_ASSIGNED_TO_NAME' => 'Tagdumala sa Kontrata',
    'LBL_CONTRACT_ACCOUNT' => 'Account',
    'LBL_OPPORTUNITY' => 'Naay chance',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DESCRIPTION' => 'Deskripsyon',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NAME' => 'Taytol sa Kontrata',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'LBL_LIST_NAME' => 'Pangalan',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa mga Kontrata',
    'LBL_MODULE_NAME' => 'Mga kontrata',
    'LBL_MODULE_TITLE' => 'Mga kontrata: Home',
    'LBL_HOMEPAGE_TITLE' => 'Akong mga kontrata',
    'LNK_NEW_RECORD' => 'Magmugna ug Kontrata',
    'LNK_LIST' => 'Tan-aw sa mga kontrata',
    'LBL_SEARCH_FORM_TITLE' => 'Mangita og mga kontrata',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tan-awon ang Kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_NEW_FORM_TITLE' => 'Bag-ong kontrata',
    'LBL_CONTRACT_NAME' => 'Pangan sa kontrata',
    'LBL_REFERENCE_CODE ' => 'Kodigo sa reperensya ',
    'LBL_START_DATE' => 'Petsa nga Nagsugod',
    'LBL_END_DATE' => 'Katapusang Date',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Balor sa kontrata',
    'LBL_STATUS' => 'Stado',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Pinirmahang petsa sa kustomer',
    'LBL_COMPANY_SIGNED_DATE' => 'Pinirmahang petsa sa kompanya',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Pagbag-o sa petsa sa pag-pahinumdom',
    'LBL_CONTRACT_TYPE' => 'Klase sa kontrata',
    'LBL_CONTACT' => 'Kontak',
    'LBL_ADD_GROUP' => 'Magdugang ug Grupo',
    'LBL_DELETE_GROUP' => 'Tangtangon ang Grupo',
    'LBL_GROUP_NAME' => 'Ngalan sa Grupo',
    'LBL_GROUP_TOTAL' => 'Grupo sa Kinatibuk-an',
    'LBL_PRODUCT_QUANITY' => 'Kantidad',
    'LBL_PRODUCT_NAME' => 'Produkto',
    'LBL_PART_NUMBER' => 'Kabahin nga Numero',
    'LBL_PRODUCT_NOTE' => 'Libro',
    'LBL_PRODUCT_DESCRIPTION' => 'Deskripsyon',
    'LBL_LIST_PRICE' => 'Listahan',
    'LBL_DISCOUNT_AMT' => 'Diskwento',
    'LBL_UNIT_PRICE' => 'Presyo sa Pagbaligya',
    'LBL_TOTAL_PRICE' => 'Kinatibuk-an',
    'LBL_VAT' => 'Buhis',
    'LBL_VAT_AMT' => 'Kantidad sa Buhis',
    'LBL_SERVICE_NAME' => 'Serbisyo',
    'LBL_SERVICE_LIST_PRICE' => 'Listahan',
    'LBL_SERVICE_PRICE' => 'Presyo sa Pagbaligya',
    'LBL_SERVICE_DISCOUNT' => 'Diskwento',
    'LBL_LINE_ITEMS' => 'Linya sa mga Butang',
    'LBL_SUBTOTAL_AMOUNT' => 'Bahin sa Kinatibuk-an',
    'LBL_DISCOUNT_AMOUNT' => 'Diskwento',
    'LBL_TAX_AMOUNT' => 'Buhis',
    'LBL_SHIPPING_AMOUNT' => 'Nagpadala',
    'LBL_TOTAL_AMT' => 'Kinatibuk-an',
    'LBL_GRAND_TOTAL' => 'Pinakakinatibuk-an',
    'LBL_SHIPPING_TAX' => 'Buhis sa Pagpadala',
    'LBL_SHIPPING_TAX_AMT' => 'Buhis sa Pagpadala',
    'LBL_ADD_PRODUCT_LINE' => 'Magdugang ug Linya sa Produkto',
    'LBL_ADD_SERVICE_LINE' => 'Magdugang ug Linya sa Serbisyo ',
    'LBL_PRINT_AS_PDF' => 'Ipatik ingon nga PDF',
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_PDF_NAME' => 'Kontrata',
    'LBL_EMAIL_NAME' => 'Kontrata para',
    'LBL_NO_TEMPLATE' => 'SAYOP\nwalay mga template ang nakit-an. kung wala ka kahimo og usa ka template sa kontrata. adto sa modyul sa mga template sa PDF og paghimo og usa',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Balor sa kontrata (default nga kwarta)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Bahin sa kinatibuk-an (Gitakda nga Salapi)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Diskwento (Gitakda nga Salapi)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Buhis (Gitakda nga Salapi)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pagpadala (Gitakda nga Salapi)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Kinatibuk-an (Gitakda nga Salapi)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Buhis sa Pagpadala (Gitakda nga Salapi)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Pinakakinatibuk-an (Gitakda nga Salapi)',

    'LBL_CALL_ID' => 'ID sa Tawag',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Mga Grupo sa Linya sa Butang',
    'LBL_AOS_PRODUCT_QUOTES' => 'Kutlo sa mga Produkto',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Mga kutlo: Mga Kontrata',
);
