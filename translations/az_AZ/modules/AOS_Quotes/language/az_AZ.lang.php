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
    'LBL_ASSIGNED_TO_ID' => 'Təyin Edilmiş İstifadəçi kimliyi',
    'LBL_ASSIGNED_TO_NAME' => 'Təyin Edilsin',
    'LBL_ID' => 'Kimlik',
    'LBL_DATE_ENTERED' => 'Yaradılma Tarixi',
    'LBL_DATE_MODIFIED' => 'Dəyişdirilmə Tarixi',
    'LBL_MODIFIED' => 'Redaktə etdi',
    'LBL_MODIFIED_NAME' => 'Ad tərəfindən dəyişdirildi',
    'LBL_CREATED' => 'Müəllif',
    'LBL_DESCRIPTION' => 'Açıqlama',
    'LBL_DELETED' => 'Silinib',
    'LBL_NAME' => 'Başlıq',
    'LBL_CREATED_USER' => 'İstifadəçi tərəfindən yaradılıb',
    'LBL_MODIFIED_USER' => 'İstifadəçi tərəfindən dəyişdirildi',
    'ERR_DELETE_RECORD' => 'Hesabı silmək üçün qeydiyyat nömrəsi göstərilməlidir.',
    'LBL_ACCOUNT_NAME' => 'Başlıq',
    'LBL_ACCOUNT' => 'Şirkət:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Fəaliyyətlər',
    'LBL_ADDRESS_INFORMATION' => 'Ünvan məlumatları',
    'LBL_ANNUAL_REVENUE' => 'İllik Gəlir:',
    'LBL_ANY_ADDRESS' => 'Digər Ünvanlar:',
    'LBL_ANY_EMAIL' => 'Başqa email:',
    'LBL_ANY_PHONE' => 'Digər telefon:',
    'LBL_RATING' => 'Dərəcə',
    'LBL_ASSIGNED_USER' => 'İstifadəçi',
    'LBL_BILLING_ADDRESS_CITY' => 'Göndərilən şəhər:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Göndərilən Ölkə:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Göndərilən Poçt kodu:',
    'LBL_BILLING_ADDRESS_STATE' => 'Göndərilən Ştat:',
    'LBL_BILLING_ADDRESS_STREET_2' => 'Göndərilən Küçə 2',
    'LBL_BILLING_ADDRESS_STREET_3' => 'Göndərilən Küçə 3',
    'LBL_BILLING_ADDRESS_STREET_4' => 'Göndərilən Küçə 4',
    'LBL_BILLING_ADDRESS_STREET' => 'Göndərilən Küçə:',
    'LBL_BILLING_ADDRESS' => 'Göndərilən ünvan:',
    'LBL_ACCOUNT_INFORMATION' => '	İcmal',
    'LBL_CITY' => 'Şəhər:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Əlaqələr',
    'LBL_COUNTRY' => 'Ölkə:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hesablar',
    'LBL_DUPLICATE' => 'İstifadəçi hesabının mümkün surəti',
    'LBL_EMAIL' => 'Email:',
    'LBL_EMPLOYEES' => 'İşçilər:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Sənaye:',
    'LBL_LIST_ACCOUNT_NAME' => 'İstifadəçinin adı',
    'LBL_LIST_CITY' => 'Şəhər',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-poçt Ünvanları',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'Ştat',
    'LBL_MEMBER_OF' => 'Üzvü:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Təşkilatlara üzv',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Başqa e-poçt:',
    'LBL_OTHER_PHONE' => 'Başqa telefon:',
    'LBL_OWNERSHIP' => 'Mülkiyyət:',
    'LBL_PARENT_ACCOUNT_ID' => 'Ana Hesab ID-si',
    'LBL_PHONE_ALT' => 'Alternativ Telefon:',
    'LBL_PHONE_FAX' => 'Telefon Faks:',
    'LBL_PHONE_OFFICE' => 'Phone Office:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Poçt Kodu:',
    'LBL_SAVE_ACCOUNT' => 'Hesabı saxla',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Göndərilən şəhər:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Göndərilən Ölkə:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Göndərilən Poçt kodu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Göndərilən Ştat:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => 'Göndərilən Küçə 2',
    'LBL_SHIPPING_ADDRESS_STREET_3' => 'Göndərilən Küçə 3',
    'LBL_SHIPPING_ADDRESS_STREET_4' => 'Çatdırılma Küçəsi 4',
    'LBL_SHIPPING_ADDRESS_STREET' => 'Çatdırılma Küçəsi:',
    'LBL_SHIPPING_ADDRESS' => 'Çatdırılma Ünvanı:',
    'LBL_STATE' => 'Ştat/Bölgə:',
    'LBL_TICKER_SYMBOL' => 'Birja payı işarəsi:',
    'LBL_TYPE' => 'Növ:',
    'LBL_WEBSITE' => 'Veb sayt:',
    'LNK_ACCOUNT_LIST' => 'Hesablar',
    'LNK_NEW_ACCOUNT' => 'Hesab Yarat',
    'MSG_DUPLICATE' => 'Creating this account may potentially create a duplicate account. You may either select an account from the list below or you may click on Save to continue creating a new account with the previously entered data.',
    'MSG_SHOW_DUPLICATES' => 'Creating this account may potentially create a duplicate account. You may either click on Save to continue creating this new account with the previously entered data or you may click Cancel.',
    'NTC_DELETE_CONFIRMATION' => 'Bu qeydləri silmək istədiyinizə əminsiniz?',
    'LBL_LIST_FORM_TITLE' => 'Quotes List',
    'LBL_MODULE_NAME' => 'Qiymətlər',
    'LBL_MODULE_TITLE' => 'Quotes: Home',
    'LBL_HOMEPAGE_TITLE' => 'My Quotes',
    'LNK_NEW_RECORD' => 'Create Quote',
    'LNK_LIST' => 'View Quotes',
    'LBL_SEARCH_FORM_TITLE' => 'Search Quotes',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Tarixçəyə bax',
    'LBL_NEW_FORM_TITLE' => 'New Quote',
    'LBL_TERMS_C' => 'Terms',
    'LBL_APPROVAL_ISSUE' => 'Approval Issues',
    'LBL_APPROVAL_STATUS' => 'Approval Status',
    'LBL_BILLING_ACCOUNT' => 'Hesab',
    'LBL_BILLING_CONTACT' => 'Əlaqə',
    'LBL_EXPIRATION' => 'Valid Until',
    'LBL_QUOTE_NUMBER' => 'Quote Number',
    'LBL_OPPORTUNITY' => 'Fürsət',
    'LBL_TEMPLATE_DDOWN_C' => 'Quote Template',
    'LBL_STAGE' => 'Quote Stage',
    'LBL_TERM' => 'Payment Terms',
    'LBL_SUBTOTAL_AMOUNT' => 'Ara cəmi',
    'LBL_DISCOUNT_AMOUNT' => 'Endirim',
    'LBL_TAX_AMOUNT' => 'Vergi',
    'LBL_SHIPPING_AMOUNT' => 'Daşıma',
    'LBL_TOTAL_AMT' => 'Yekun',
    'VALUE' => 'Başlıq',
    'LBL_EMAIL_ADDRESSES' => 'E-poçt Ünvanları',
    'LBL_LINE_ITEMS' => 'Sətir elementləri',
    'LBL_GRAND_TOTAL' => 'Ümumi cəmi',
    'LBL_INVOICE_STATUS' => 'Invoice Status',
    'LBL_PRODUCT_QUANITY' => 'Miqdar',
    'LBL_PRODUCT_NAME' => 'Məhsul',
    'LBL_PART_NUMBER' => 'Part Number',
    'LBL_PRODUCT_NOTE' => 'Qeyd',
    'LBL_PRODUCT_DESCRIPTION' => 'Açıqlama',
    'LBL_LIST_PRICE' => 'Siyahı',
    'LBL_DISCOUNT_AMT' => 'Endirim',
    'LBL_UNIT_PRICE' => 'Satış Qiyməti',
    'LBL_TOTAL_PRICE' => 'Yekun',
    'LBL_VAT' => 'Vergi', // VAT
    'LBL_VAT_AMT' => 'Vergi məbləği', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Məhsul xətti əlavə edin',
    'LBL_SERVICE_NAME' => 'Xidmət',
    'LBL_SERVICE_LIST_PRICE' => 'Siyahı',
    'LBL_SERVICE_PRICE' => 'Satış Qiyməti',
    'LBL_SERVICE_DISCOUNT' => 'Endirim',
    'LBL_ADD_SERVICE_LINE' => 'Xidmət xətti əlavə edin ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Sil',
    'LBL_CONVERT_TO_INVOICE' => 'Convert to Invoice',
    'LBL_PRINT_AS_PDF' => 'PDF olaraq çap edin',
    'LBL_EMAIL_QUOTE' => 'Email Quotation',
    'LBL_CREATE_CONTRACT' => 'Create Contract',
    'LBL_LIST_NUM' => 'Num',
    'LBL_PDF_NAME' => 'Alıntı',
    'LBL_EMAIL_NAME' => 'Quote for',
    'LBL_QUOTE_DATE' => 'Quotation Date',
    'LBL_NO_TEMPLATE' => 'ERROR\nNo templates found. If you have not created a Quote template, go to the PDF templates module and create one',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Subtotal + Tax',//pre shipping
    'LBL_EMAIL_PDF' => 'E-poçt PDF',
    'LBL_ADD_GROUP' => 'Qrup Artır',
    'LBL_DELETE_GROUP' => 'Delete Group',
    'LBL_GROUP_NAME' => 'Qrup Adı',
    'LBL_GROUP_TOTAL' => 'Group Total',
    'LBL_SHIPPING_TAX' => 'Göndərmə Vergisi',
    'LBL_SHIPPING_TAX_AMT' => 'Göndərmə Vergisi',
    'LBL_IMPORT_LINE_ITEMS' => 'Import Line Items',
    'LBL_CREATE_OPPORTUNITY' => 'Fürsət Yarat',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Ara cəmi (Defolt Valyuta)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'Endirim (Defolt Valyuta)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vergi (Defolt Valyuta)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Daşınma(Defolt Valyuta)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Cəmi (Defolt Valyuta)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Daşınma Vergisi (Defolt Valyuta)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Ümumi Cəmi (Defolt Valyuta)',
    'LBL_QUOTE_TO' => 'Quote To',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Subtotal + Tax (Default Currency)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Quotes: Contracts',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Quotes: Invoices',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Line Item Groups',
    'LBL_AOS_PRODUCT_QUOTES' => 'Product Quotes',
    'LBL_AOS_QUOTES_PROJECT' => 'Quotes: Project',
);
