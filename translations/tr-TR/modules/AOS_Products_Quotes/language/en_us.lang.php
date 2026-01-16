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
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kullanıcı kodu',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_ID' => 'Kod',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_MODIFIED' => 'Değiştiren',
    'LBL_MODIFIED_NAME' => 'Değiştiren adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Not',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Ad',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_LIST_FORM_TITLE' => 'Ürün teklifleri listesi',
    'LBL_MODULE_NAME' => 'Satır ögeleri',
    'LBL_MODULE_TITLE' => 'Ürün teklifleri: Giriş',
    'LBL_HOMEPAGE_TITLE' => 'Ürün tekliflerim',
    'LNK_NEW_RECORD' => 'Ürün teklifi ekle',
    'LNK_LIST' => 'Ürün teklifleri',
    'LBL_SEARCH_FORM_TITLE' => 'Ürün teklifi arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Yeni ürün teklifi',
    'LBL_PRODUCT_NAME' => 'Ad',
    'LBL_PRODUCT_QTY' => 'Adet',
    'LBL_PRODUCT_COST_PRICE' => 'Maliyet fiyatı',
    'LBL_PRODUCT_LIST_PRICE' => 'Liste fiyatı',
    'LBL_PRODUCT_UNIT_PRICE' => 'Birim fiyatı',
    'LBL_PRODUCT_DISCOUNT' => 'İndirim',
    'LBL_PRODUCT_DISCOUNT_AMOUNT' => 'İndirim tutarı',
    'LBL_PART_NUMBER' => 'Parça numarası',
    'LBL_PRODUCT_DESCRIPTION' => 'Açıklama',
    'LBL_DISCOUNT' => 'İndirim türü',
    'LBL_VAT_AMT' => 'Vergi tutarı',
    'LBL_VAT' => 'Vergi',
    'LBL_PRODUCT_TOTAL_PRICE' => 'Toplam fiyat',
    'LBL_PRODUCT_NOTE' => 'Not',
    'Quote' => '',
    'LBL_FLEX_RELATE' => 'İlişkili öge',
    'LBL_PRODUCT' => 'Ürün',

    'LBL_SERVICE_MODULE_NAME' => 'Hizmetler',
    'LBL_LIST_NUM' => 'Sayı',
    'LBL_PARENT_ID' => 'Üst öge kodu',
    'LBL_GROUP_NAME' => 'Grup',
    'LBL_PRODUCT_COST_PRICE_USDOLLAR' => 'Maliyet fiyatı (varsayılan para birimi)',
    'LBL_PRODUCT_LIST_PRICE_USDOLLAR' => 'Liste fiyatı (varsayılan para birimi)',
    'LBL_PRODUCT_UNIT_PRICE_USDOLLAR' => 'Birim fiyatı (varsayılan para birimi)',
    'LBL_PRODUCT_TOTAL_PRICE_USDOLLAR' => 'Toplam fiyat (varsayılan para birimi)',
    'LBL_PRODUCT_DISCOUNT_USDOLLAR' => 'İndirim (varsayılan para birimi)',
    'LBL_PRODUCT_DISCOUNT_AMOUNT_USDOLLAR' => 'İndirim tutarı (varsayılan para birimi)',
    'LBL_VAT_AMT_USDOLLAR' => 'Vergi tutarı (varsayılan para birimi)',
    'LBL_PRODUCTS_SERVICES' => 'Ürün / Hizmet',
    'LBL_PRODUCT_ID' => 'Ürün kodu',

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
    'LBL_AOS_INVOICES' => 'Faturalar',
    'LBL_AOS_PRODUCTS' => 'Ürünler',
    'LBL_AOS_QUOTES' => 'Teklifler',
);
