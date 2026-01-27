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
    'LBL_ASSIGNED_TO_ID' => 'Magtalaga ng Id para sa gumagamit',
    'LBL_ASSIGNED_TO_NAME' => 'Itinatalaga sa',
    'LBL_ID' => 'Ang ID',
    'LBL_DATE_ENTERED' => 'Ang petsa ng pagkakalikha',
    'LBL_DATE_MODIFIED' => 'Ang petsa ng pagkabago',
    'LBL_MODIFIED' => 'Binago ni',
    'LBL_MODIFIED_NAME' => 'Ito ay ibinago sa pamamagitan ng pangalan',
    'LBL_CREATED' => 'Ito ay nalikha sa pamamagitan ng',
    'LBL_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_DELETED' => 'Ang pagkabura',
    'LBL_NAME' => 'Paksa',
    'LBL_CREATED_USER' => 'Inilikha ng tagagamit',
    'LBL_MODIFIED_USER' => 'Binago sa pamamagitan ng tagagamit',
    'ERR_DELETE_RECORD' => 'Isang bilang sa rekord ay dapat tukuyin para mabura ang account.',
    'LBL_ACCOUNT_NAME' => 'Paksa',
    'LBL_ACCOUNT' => 'Kompanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Mga ginagawa',
    'LBL_ADDRESS_INFORMATION' => 'Magdagdag ng impormasyon',
    'LBL_ANNUAL_REVENUE' => 'Taong Kita:',
    'LBL_ANY_ADDRESS' => 'Anumang lugar:',
    'LBL_ANY_EMAIL' => 'Anumang email:',
    'LBL_ANY_PHONE' => 'Anumang telepono:',
    'LBL_RATING' => 'Marka',
    'LBL_ASSIGNED_USER' => 'Gumagamit',
    'LBL_BILLING_ADDRESS_CITY' => 'Lungsod ng Pagsingil:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Bansa ng Pagsingil:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Pagsingil sa Postal Code:',
    'LBL_BILLING_ADDRESS_STATE' => 'Estado ng Pagsingil:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Billing Street 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Billing Street 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Billing Street 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Billing Street:',
    'LBL_BILLING_ADDRESS' => 'Address ng Pagsingil:',
    'LBL_ACCOUNT_INFORMATION' => 'Buod',
    'LBL_CITY' => 'Lungsod:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Mga kontak',
    'LBL_COUNTRY' => 'Bansa:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Mga account',
    'LBL_DUPLICATE' => 'Posibleng mga Duplicate Account',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'Mga Empleyado:',
    'LBL_FAX' => 'Fax:',
    'LBL_INDUSTRY' => 'Industriya:',
    'LBL_LIST_ACCOUNT_NAME' => 'Pangalan ng Akwant',
    'LBL_LIST_CITY' => 'Syudad',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-mail address',
    'LBL_LIST_PHONE' => 'Telepono',
    'LBL_LIST_STATE' => 'Estado',
    'LBL_MEMBER_OF' => 'Myembro sa:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Myembro ng mga organisasyon',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Iba pang mga Email:',
    'LBL_OTHER_PHONE' => 'Ibang telepono:',
    'LBL_OWNERSHIP' => 'Pagmamay-ari:',
    'LBL_PARENT_ACCOUNT_ID' => 'ID ng Magulang na Account',
    'LBL_PHONE_ALT' => 'Kahaliling Telepono:',
    'LBL_PHONE_FAX' => 'Phone Fax:',
    'LBL_PHONE_OFFICE' => 'Telepono ng opisina:',
    'LBL_PHONE' => 'Telepono:',
    'LBL_POSTAL_CODE' => 'Postal Code:',
    'LBL_SAVE_ACCOUNT' => 'I-save ang Account',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Lungsod na papadalhan:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Bansa ng papadalhan:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Pagpapadala ng Postal Code:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Estado ng Pagpapadala:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Shipping Street 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Shipping Street 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Shipping Street 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Shipping Street:',
    'LBL_SHIPPING_ADDRESS' => 'Shipping Address:',
    'LBL_STATE' => 'Estado o rehiyon:',
    'LBL_TICKER_SYMBOL' => 'Simbolo ng Ticker:',
    'LBL_TYPE' => 'Uri:',
    'LBL_WEBSITE' => 'Website:',
    'LNK_ACCOUNT_LIST' => 'Mga account',
    'LNK_NEW_ACCOUNT' => 'Gumawa ng Account',
    'MSG_DUPLICATE' => 'Ang paglikha ng account na ito ay maaaring potensyal na lumikha ng isang duplicate na account. Maaari kang pumili ng isang account mula sa listahan sa ibaba o maaari kang mag-click sa I-save upang magpatuloy sa paglikha ng isang bagong account sa naunang naipasok na data.',
    'MSG_SHOW_DUPLICATES' => 'Ang paglikha ng account na ito ay maaaring potensyal na lumikha ng isang duplicate na account. Maaari kang mag-click sa I-save upang ipagpatuloy ang paglikha ng bagong account na ito sa dati nang ipinasok na data o maaari mong i-click ang Kanselahin.',
    'NTC_DELETE_CONFIRMATION' => 'Sigurado ka bang na gusto mong burahin ang ulat na ito?',
    'LBL_LIST_FORM_TITLE' => 'Listahan ng mga Invoice',
    'LBL_MODULE_NAME' => 'Ang mga invoice',
    'LBL_MODULE_TITLE' => 'Mga Invoice: Home',
    'LBL_HOMEPAGE_TITLE' => 'Aking mga invoice',
    'LNK_NEW_RECORD' => 'Lumikha ng Invoice',
    'LNK_LIST' => 'Tingnan ang mga Invoice',
    'LBL_SEARCH_FORM_TITLE' => 'Maghanap ng Mga Invoice',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tingnan ang kasaysayan',
    'LBL_NEW_FORM_TITLE' => 'Bagong invoice',
    'LBL_TERMS_C' => 'Mga alituntunin',
    'LBL_APPROVAL_ISSUE' => 'Mga isyu ng pagsang-ayon',
    'LBL_APPROVAL_STATUS' => 'Istado ng pagsang-ayon',
    'LBL_BILLING_ACCOUNT' => 'Ang akawnt',
    'LBL_BILLING_CONTACT' => 'Ang kontak',
    'LBL_EXPIRATION' => 'Valid hanggang',
    'LBL_INVOICE_NUMBER' => 'Numero ng invoice',
    'LBL_OPPORTUNITY' => 'Pangalan ng Oportunidad',
    'LBL_TEMPLATE_DDOWN_C' => 'Mga template ng invoice',
    'LBL_STAGE' => 'Yugto ng qoute',
    'LBL_TERM' => 'Mga alituntunin ng Pagbabayad',
    'LBL_SUBTOTAL_AMOUNT' => 'Subtotal',
    'LBL_DISCOUNT_AMOUNT' => 'Diskwento',
    'LBL_TAX_AMOUNT' => 'Buwis',
    'LBL_SHIPPING_AMOUNT' => 'Pagpapadala',
    'LBL_TOTAL_AMT' => 'Kabuuan',
    'VALUE' => 'Paksa',
    'LBL_EMAIL_ADDRESSES' => 'Ang mga email address',
    'LBL_LINE_ITEMS' => 'Ang linya ng mga item',
    'LBL_GRAND_TOTAL' => 'Kabuuang total',
    'LBL_QUOTE_NUMBER' => 'Numero ng qoute',
    'LBL_QUOTE_DATE' => 'Petsa ng qoute',
    'LBL_INVOICE_DATE' => 'Petsa ng Invoice',
    'LBL_DUE_DATE' => 'Angkop na petsa',
    'LBL_STATUS' => 'Katayuan',
    'LBL_INVOICE_STATUS' => 'Mga istado ng Invoice',
    'LBL_PRODUCT_QUANITY' => 'Dami',
    'LBL_PRODUCT_NAME' => 'Produkto',
    'LBL_PART_NUMBER' => 'Numero ng part',
    'LBL_PRODUCT_NOTE' => 'Tandaan',
    'LBL_PRODUCT_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_LIST_PRICE' => 'Listahan',
    'LBL_DISCOUNT_AMT' => 'Diskwento',
    'LBL_UNIT_PRICE' => 'Ang presyo ng pagbebenta',
    'LBL_TOTAL_PRICE' => 'Kabuuan',
    'LBL_VAT' => 'Buwis', //VAT
    'LBL_VAT_AMT' => 'Halaga ng buwis', //VAT
    'LBL_ADD_PRODUCT_LINE' => 'Magdagdag ng linya ng produkto',
    'LBL_SERVICE_NAME' => 'Serbisyo',
    'LBL_SERVICE_LIST_PRICE' => 'Listahan',
    'LBL_SERVICE_PRICE' => 'Ang presyo ng pagbebenta',
    'LBL_SERVICE_DISCOUNT' => 'Diskwento',
    'LBL_ADD_SERVICE_LINE' => 'Magdagdag ng linya ng serbisyo ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Tanggalin',
    'LBL_PRINT_AS_PDF' => 'Ang print bilang PDS',
    'LBL_EMAIL_INVOICE' => 'Invoice ng Email',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Invoice',
    'LBL_EMAIL_NAME' => 'Invoice para sa',
    'LBL_NO_TEMPLATE' => 'ERROR \ nNo mga template na natagpuan. Kung hindi ka gumawa ng isang template ng Invoice, pumunta sa module ng template ng PDF at lumikha ng isa',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + buwis',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF ng Email',
    'LBL_ADD_GROUP' => 'Magdagdag ng grupo',
    'LBL_DELETE_GROUP' => 'Burahin ang grupo',
    'LBL_GROUP_NAME' => 'Pangalan ng grupo',
    'LBL_GROUP_TOTAL' => 'Kabuuan ng grupo',
    'LBL_SHIPPING_TAX' => 'Pagpapadala ng buwis',
    'LBL_SHIPPING_TAX_AMT' => 'Pagpapadala ng buwis',
    'LBL_IMPORT_LINE_ITEMS' => 'Mga item ng Import Line',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Subtotal (Default na pera)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Diskuwento (Default na pera)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Buwis (Default na pera)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Pagpapadala (Default na pera)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Kabuuan (Default na pera)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Buwis ng Pagpapadala (Default na pera)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Malaking Kabuuan (Default na pera)',
    'LBL_INVOICE_TO' => 'Invoice para',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Ang mga grupo ng linya ng item',
    'LBL_AOS_PRODUCT_QUOTES' => 'Mga qoute ng produkto',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Mga Quote: mga invoice',
);
