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
    'LBL_ASSIGNED_TO_NAME' => 'Kontrata ng Manager',
    'LBL_CONTRACT_ACCOUNT' => 'Ang account',
    'LBL_OPPORTUNITY' => 'Ang oportunidad',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ay lumikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ay binago',
    'LBL_MODIFIED' => 'Binago sa pamamagitan ng',
    'LBL_MODIFIED_NAME' => 'Sa pamamagitan ng pangalan ay binago',
    'LBL_CREATED' => 'Nilikha ni',
    'LBL_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_DELETED' => 'Ang Nabura',
    'LBL_NAME' => 'Pamagat ng Kontrata',
    'LBL_CREATED_USER' => 'Nililikha sa pamamagitan ng Gumagamit',
    'LBL_MODIFIED_USER' => 'Ang Binago sa pamamagitan ng gumagamit',
    'LBL_LIST_NAME' => 'Ang Pangalan',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga Kontrata',
    'LBL_MODULE_NAME' => 'Mga kontrata',
    'LBL_MODULE_TITLE' => 'Mga Kontrata: Tahanan',
    'LBL_HOMEPAGE_TITLE' => 'Ang aking mga Kontrata',
    'LNK_NEW_RECORD' => 'Lumikha ng Kontrata',
    'LNK_LIST' => 'Tingnan ang mga Kontrata',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng mga Kontrata',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tanawin ang kasaysayan',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Ang mga aktibidad',
    'LBL_NEW_FORM_TITLE' => 'Bagong Kontrata',
    'LBL_CONTRACT_NAME' => 'Pangalan ng Kontrata',
    'LBL_REFERENCE_CODE ' => 'Code ng Reperensiya ',
    'LBL_START_DATE' => 'Magsimula sa petsa',
    'LBL_END_DATE' => 'Petsa ng katapusan',
    'LBL_TOTAL_CONTRACT_VALUE' => 'Halaga ng Kontrata',
    'LBL_STATUS' => 'Kalagayan',
    'LBL_CUSTOMER_SIGNED_DATE' => 'Araw na pinirmahan ng Kustomer',
    'LBL_COMPANY_SIGNED_DATE' => 'Araw na Pinirmahan ng Kompanya',
    'LBL_RENEWAL_REMINDER' => ' Contract Renewal Reminder',
    'LBL_RENEWAL_REMINDER_DATE' => 'Araw ng pagpapaalala sa pag-renew',
    'LBL_CONTRACT_TYPE' => 'Klase ng Kontrata',
    'LBL_CONTACT' => 'Kontak',
    'LBL_ADD_GROUP' => 'Magdagdag ng Grupo',
    'LBL_DELETE_GROUP' => 'Magbura ng Grupo',
    'LBL_GROUP_NAME' => 'Pangalan ng Grupo',
    'LBL_GROUP_TOTAL' => 'Kabuuan ng Grupo',
    'LBL_PRODUCT_QUANITY' => 'Dami',
    'LBL_PRODUCT_NAME' => 'Ang produkto',
    'LBL_PART_NUMBER' => 'Numero ng Parte',
    'LBL_PRODUCT_NOTE' => 'Tandaan',
    'LBL_PRODUCT_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_LIST_PRICE' => 'Listahan',
    'LBL_DISCOUNT_AMT' => 'Diskawnt',
    'LBL_UNIT_PRICE' => 'Presyo ng Pagbenta',
    'LBL_TOTAL_PRICE' => 'Kabuuan',
    'LBL_VAT' => 'Tax',
    'LBL_VAT_AMT' => 'Halaga ng Tax',
    'LBL_SERVICE_NAME' => 'Ang Serbisyo',
    'LBL_SERVICE_LIST_PRICE' => 'Listahan',
    'LBL_SERVICE_PRICE' => 'Presyo ng Pagbenta',
    'LBL_SERVICE_DISCOUNT' => 'Diskawnt',
    'LBL_LINE_ITEMS' => 'Ang Aytem sa Linya',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Diskawnt',
    'LBL_TAX_AMOUNT' => 'Tax',
    'LBL_SHIPPING_AMOUNT' => 'Pagpapadala',
    'LBL_TOTAL_AMT' => 'Kabuuan',
    'LBL_GRAND_TOTAL' => 'Kabuuang Total',
    'LBL_SHIPPING_TAX' => 'Tax ng Pagpapadala',
    'LBL_SHIPPING_TAX_AMT' => 'Tax ng Pagpapadala',
    'LBL_ADD_PRODUCT_LINE' => 'Magdagdag ng Linya ng Produkto',
    'LBL_ADD_SERVICE_LINE' => 'Magdagdag ng Linya ng Serbisyo ',
    'LBL_PRINT_AS_PDF' => 'I-imprinta bilang PDF',
    'LBL_EMAIL_PDF' => 'I-email ang PDF',
    'LBL_PDF_NAME' => 'Kontrata',
    'LBL_EMAIL_NAME' => 'Kontrata para sa',
    'LBL_NO_TEMPLATE' => 'ERROR\nWalang nakita na mga template. Kung hindi ka nakalikha ng template sa Kontrata, pumunta sa mga template ng PDF modyul at lumikha ng isa',
    'LBL_TOTAL_CONTRACT_VALUE_USDOLLAR' => 'Halaga ng Kontrata (Default na Kurensiya)',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default na Kurensiya)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Diskawnt (Default na Kurensiya)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Tax (Default na Kurensiya)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pagpapadala (Default na Kurensiya)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Kabuuan (Default na Kurensiya)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Tax ng Pagpapadala (Default na Kurensiya)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Kabuuang Total (Default na Kurensiya)',

    'LBL_CALL_ID' => 'ID sa tawag',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Mga Pangkat ng Aytem sa Linya',
    'LBL_AOS_PRODUCT_QUOTES' => 'Mga Kota ng Produkto',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Mga Quote: Mga Kontrata',
);
