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
    'LBL_ASSIGNED_TO_ID' => 'Mag assign ug user Id',
    'LBL_ASSIGNED_TO_NAME' => 'Gigahin kang',
    'LBL_ID' => 'ID',
    'LBL_DATE_ENTERED' => 'Petsa nga gihimo',
    'LBL_DATE_MODIFIED' => 'Petsa nga gi-usab',
    'LBL_MODIFIED' => 'Giusab Ni',
    'LBL_MODIFIED_NAME' => 'Giusab pinaagi sa Pangan',
    'LBL_CREATED' => 'Gihimo ni',
    'LBL_DESCRIPTION' => 'Deskripsyon',
    'LBL_DELETED' => 'Gitangtang',
    'LBL_NAME' => 'Titulo',
    'LBL_CREATED_USER' => 'Gihimo ni User',
    'LBL_MODIFIED_USER' => 'Giusab ni User',
    'ERR_DELETE_RECORD' => 'Ang numero nga rekord kay gikinahanglan nga hinganlan sa pagtangtang sa account.',
    'LBL_ACCOUNT_NAME' => 'Titulo',
    'LBL_ACCOUNT' => 'Kompanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Kalihukan',
    'LBL_ADDRESS_INFORMATION' => 'Impormasyon sa nahimutangan',
    'LBL_ANNUAL_REVENUE' => 'Tinuig nga Kita:',
    'LBL_ANY_ADDRESS' => 'Bisan-unsa nga Address:',
    'LBL_ANY_EMAIL' => 'Bisan-unsa nga Email:',
    'LBL_ANY_PHONE' => 'Bisan-unsa nga Telepono:',
    'LBL_RATING' => 'Rating',
    'LBL_ASSIGNED_USER' => 'Tig gamit',
    'LBL_BILLING_ADDRESS_CITY' => 'Syudad sa Pagbill:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Nasud sa Pagbill:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Postal Code sa Pagbill:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado sa Pagbill:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Dalan sa Pagbill 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Dalan sa Pagbill 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Dalan sa Pagbill 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Dalan sa Pagbill:',
    'LBL_BILLING_ADDRESS' => 'Address sa Pagbill:',
    'LBL_ACCOUNT_INFORMATION' => 'Kinatibuk-ang panan-aw',
    'LBL_CITY' => 'Siyudad:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kontak',
    'LBL_COUNTRY' => 'Nasud:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga Account',
    'LBL_DUPLICATE' => 'Posible nga Kopya nga Account',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Mga Empleyado:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industriya:',
    'LBL_LIST_ACCOUNT_NAME' => 'Ngalan sa Account',
    'LBL_LIST_CITY' => 'Siyudad',
    'LBL_LIST_EMAIL_ADDRESS' => 'Email Address',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Miyembro sa:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Miyembro sa mga Organisasyon',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Uban pang Email:',
    'LBL_OTHER_PHONE' => 'Uban pang Telepono:',
    'LBL_OWNERSHIP' => 'Pagpanag-iya:',
    'LBL_PARENT_ACCOUNT_ID' => 'Gigikanan nga Account ID',
    'LBL_PHONE_ALT' => 'Alternatibo nga Telepono:',
    'LBL_PHONE_FAX' => 'Fax sa Telepono:',
    'LBL_PHONE_OFFICE' => 'Telepono sa Opisina:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'I-save ang Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Siyudad nga Padal-an:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Padal-an nga Nasud:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Postal Code sa Padal-an:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estado nga Padal-an:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Dalan sa Padal-an 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Dalan sa Padal-an 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Dalan sa Padal-an 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Dalan sa Padal-an:',
    'LBL_SHIPPING_ADDRESS' => 'Address nga Padal-an:',
    'LBL_STATE' => 'Estado o Rehiyon:',
    'LBL_TICKER_SYMBOL' => 'Simbolo sa Ticker:',
    'LBL_TYPE' => 'Matang:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Mga Account',
    'LNK_NEW_ACCOUNT' => 'Maghimo ug Account',
    'MSG_DUPLICATE' => 'Ang pagmugna niini nga account kay kalagmitan makamugna ug kopya nga account. Mamahimo ka nga magpili ug account gikan sa listahan sa ubos o mamahimo nimo i-klik ang Save sa pagpadayon sa pagmugna ug bag-o nga account uban sa mga kasayoran nga nabutang kaniadto.',
    'MSG_SHOW_DUPLICATES' => 'Ang pagmugna niini nga account kay kalagmitan makamugna ug kopya nga account. Mamahimo nimo i-klik ang Save para sa pagpadayon sa pagmugna niining bag-o nga account uban sa mga kasayoran nga nabutang kaniadto o mamahimo sa nimo i-klik ang Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka ba sa pagtangtang niining rekord?',
    'LBL_LIST_FORM_TITLE' => 'Listahan sa mga Resibo',
    'LBL_MODULE_NAME' => 'Mga Resibo',
    'LBL_MODULE_TITLE' => 'Mga Resibo: Balay',
    'LBL_HOMEPAGE_TITLE' => 'Akong mga Resibo',
    'LNK_NEW_RECORD' => 'Magmugna ug Resibo',
    'LNK_LIST' => 'Susihon ang mga Resibo',
    'LBL_SEARCH_FORM_TITLE' => 'Pangitaon ang mga Resibo',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tan-awon ang Kasaysayan',
    'LBL_NEW_FORM_TITLE' => 'Bag-o nga Resibo',
    'LBL_TERMS_C' => 'Mga Termino',
    'LBL_APPROVAL_ISSUE' => 'Pag-uyon sa mga Isyu',
    'LBL_APPROVAL_STATUS' => 'Estado sa Pag-uyon',
    'LBL_BILLING_ACCOUNT' => 'Account',
    'LBL_BILLING_CONTACT' => 'Kontak',
    'LBL_EXPIRATION' => 'Balido Hangtod sa',
    'LBL_INVOICE_NUMBER' => 'Numero sa Resibo',
    'LBL_OPPORTUNITY' => 'Oportunidad nga pangalan',
    'LBL_TEMPLATE_DDOWN_C' => 'Mga Template sa Resibo',
    'LBL_STAGE' => 'Yugto sa Kutlo',
    'LBL_TERM' => 'Mga Termino sa Pagbayad',
    'LBL_SUBTOTAL_AMOUNT' => 'Bahin sa Kinatibuk-an',
    'LBL_DISCOUNT_AMOUNT' => 'Diskwento',
    'LBL_TAX_AMOUNT' => 'Buhis',
    'LBL_SHIPPING_AMOUNT' => 'Nagpadala',
    'LBL_TOTAL_AMT' => 'Kinatibuk-an',
    'VALUE' => 'Titulo',
    'LBL_EMAIL_ADDRESSES' => 'Mga Email Address',
    'LBL_LINE_ITEMS' => 'Linya sa mga Butang',
    'LBL_GRAND_TOTAL' => 'Pinakakinatibuk-an',
    'LBL_QUOTE_NUMBER' => 'Numero sa Kutlo',
    'LBL_QUOTE_DATE' => 'Petsa sa Pagkutlo',
    'LBL_INVOICE_DATE' => 'Petsa sa Resibo',
    'LBL_DUE_DATE' => 'Petsa nga Kinutuban',
    'LBL_STATUS' => 'Stado',
    'LBL_INVOICE_STATUS' => 'Estado sa Resibo',
    'LBL_PRODUCT_QUANITY' => 'Kantidad',
    'LBL_PRODUCT_NAME' => 'Produkto',
    'LBL_PART_NUMBER' => 'Kabahin nga Numero',
    'LBL_PRODUCT_NOTE' => 'Libro',
    'LBL_PRODUCT_DESCRIPTION' => 'Deskripsyon',
    'LBL_LIST_PRICE' => 'Listahan',
    'LBL_DISCOUNT_AMT' => 'Diskwento',
    'LBL_UNIT_PRICE' => 'Presyo sa Pagbaligya',
    'LBL_TOTAL_PRICE' => 'Kinatibuk-an',
    'LBL_VAT' => 'Buhis', //VAT
    'LBL_VAT_AMT' => 'Kantidad sa Buhis', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Magdugang ug Linya sa Produkto',
    'LBL_SERVICE_NAME' => 'Serbisyo',
    'LBL_SERVICE_LIST_PRICE' => 'Listahan',
    'LBL_SERVICE_PRICE' => 'Presyo sa Pagbaligya',
    'LBL_SERVICE_DISCOUNT' => 'Diskwento',
    'LBL_ADD_SERVICE_LINE' => 'Magdugang ug Linya sa Serbisyo ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Tangtangon',
    'LBL_PRINT_AS_PDF' => 'Ipatik ingon nga PDF',
    'LBL_EMAIL_INVOICE' => 'Resibo sa Email',
    'LBL_LIST_NUM' => 'Numero',
    'LBL_PDF_NAME' => 'Resibo',
    'LBL_EMAIL_NAME' => 'Resibo para',
    'LBL_NO_TEMPLATE' => 'SAP\nWalay templates nga nakita. Kung wala pa ka makamugna ug usa ka template sa Resibo, adto sa modyul sa mga template nga PDF ug pagmugna ug usa',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Bahin sa kinatibuk-an + buhis',//pre shipping
    'LBL_EMAIL_PDF' => 'Email PDF',
    'LBL_ADD_GROUP' => 'Magdugang ug Grupo',
    'LBL_DELETE_GROUP' => 'Tangtangon ang Grupo',
    'LBL_GROUP_NAME' => 'Ngalan sa Grupo',
    'LBL_GROUP_TOTAL' => 'Grupo sa Kinatibuk-an',
    'LBL_SHIPPING_TAX' => 'Buhis sa Pagpadala',
    'LBL_SHIPPING_TAX_AMT' => 'Buhis sa Pagpadala',
    'LBL_IMPORT_LINE_ITEMS' => 'Ipasulod ang Linya sa mga Butang',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Bahin sa kinatibuk-an (Gitakda nga Salapi)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Diskwento (Gitakda nga Salapi)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Buhis (Gitakda nga Salapi)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pagpadala (Gitakda nga Salapi)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Kinatibuk-an (Gitakda nga Salapi)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Buhis sa Pagpadala (Gitakda nga Salapi)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Pinakakinatibuk-an (Gitakda nga Salapi)',
    'LBL_INVOICE_TO' => 'Resibo para',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Mga Grupo sa Linya sa Butang',
    'LBL_AOS_PRODUCT_QUOTES' => 'Kutlo sa mga Produkto',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Mga Kutlo: Mga Resibo',
);
