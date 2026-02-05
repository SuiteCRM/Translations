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
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Başlık',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'ERR_DELETE_RECORD' => 'Bu hesabı silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_ACCOUNT_NAME' => 'Başlık',
    'LBL_ACCOUNT' => 'Kuruluş:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres bilgileri',
    'LBL_ANNUAL_REVENUE' => 'Yıllık gelir:',
    'LBL_ANY_ADDRESS' => 'Herhangi bir adres:',
    'LBL_ANY_EMAIL' => 'Herhangi bir e-posta:',
    'LBL_ANY_PHONE' => 'Herhangi bir telefon:',
    'LBL_RATING' => 'Değerlendirme',
    'LBL_ASSIGNED_USER' => 'Kullanıcı',
    'LBL_BILLING_ADDRESS_CITY' => 'Fatura ilçe:',
    'LBL_BILLING_ADDRESS_COUNTRY' => 'Fatura ülke:',
    'LBL_BILLING_ADDRESS_POSTALCODE' => 'Fatura posta kodu:',
    'LBL_BILLING_ADDRESS_STATE' => 'Fatura il:',
    'LBL_BILLING_ADDRESS_STREET_2' => '2. fatura adresi satırı',
    'LBL_BILLING_ADDRESS_STREET_3' => '3. fatura adresi satırı',
    'LBL_BILLING_ADDRESS_STREET_4' => '4. fatura adresi satırı',
    'LBL_BILLING_ADDRESS_STREET' => '1. fatura adresi satırı:',
    'LBL_BILLING_ADDRESS' => 'Fatura adresi:',
    'LBL_ACCOUNT_INFORMATION' => 'Özet',
    'LBL_CITY' => 'İlçe:',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kişiler',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hesaplar',
    'LBL_DUPLICATE' => 'Olası çift hesap',
    'LBL_EMAIL' => 'E-posta:',
    'LBL_EMPLOYEES' => 'Çalışanlar:',
    'LBL_FAX' => 'Faks:',
    'LBL_INDUSTRY' => 'Endüstri:',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_LIST_CITY' => 'İlçe',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta adresi',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_STATE' => 'İl',
    'LBL_MEMBER_OF' => 'Şunun üyesi:',
    'LBL_MEMBER_ORG_SUBPANEL_TITLE' => 'Üye kuruluşlar',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer e-posta:',
    'LBL_OTHER_PHONE' => 'Diğer telefon:',
    'LBL_OWNERSHIP' => 'Sahibi:',
    'LBL_PARENT_ACCOUNT_ID' => 'Üst hesap kodu',
    'LBL_PHONE_ALT' => 'Diğer telefon:',
    'LBL_PHONE_FAX' => 'Ofis faksı:',
    'LBL_PHONE_OFFICE' => 'İş telefonu:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_POSTAL_CODE' => 'Posta kodu:',
    'LBL_SAVE_ACCOUNT' => 'Hesabı kaydet',
    'LBL_SHIPPING_ADDRESS_CITY' => 'Gönderi ilçesi:',
    'LBL_SHIPPING_ADDRESS_COUNTRY' => 'Gönderi ülkesi:',
    'LBL_SHIPPING_ADDRESS_POSTALCODE' => 'Gönderi posta kodu:',
    'LBL_SHIPPING_ADDRESS_STATE' => 'Gönderi ili:',
    'LBL_SHIPPING_ADDRESS_STREET_2' => '2. gönderi adresi satırı',
    'LBL_SHIPPING_ADDRESS_STREET_3' => '3. gönderi adresi satırı',
    'LBL_SHIPPING_ADDRESS_STREET_4' => '4. gönderi adresi satırı',
    'LBL_SHIPPING_ADDRESS_STREET' => '1. gönderi adresi satırı:',
    'LBL_SHIPPING_ADDRESS' => 'Gönderi adresi:',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_TICKER_SYMBOL' => 'Borsa hisse kodu:',
    'LBL_TYPE' => 'Tür:',
    'LBL_WEBSITE' => 'Site:',
    'LNK_ACCOUNT_LIST' => 'Hesaplar',
    'LNK_NEW_ACCOUNT' => 'Hesap ekle',
    'MSG_DUPLICATE' => 'Bu hesabın eklenmesi büyük olasılıkla çift hesap oluşmasına neden olacak. Bu nedenle aşağıdaki listeden bir hesap seçebilir ya da Kaydet üzerine tıklayarak yazdığınız bilgilerle yeni bir hesap ekleyebilirsiniz.',
    'MSG_SHOW_DUPLICATES' => 'Bu hesabın eklenmesi büyük olasılıkla çift hesap oluşmasına neden olacak. Bu nedenle aşağıdaki listeden bir hesap seçebilir ya da Kaydet üzerine tıklayarak yazdığınız bilgilerle yeni bir hesap ekleyebilirsiniz.',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'LBL_LIST_FORM_TITLE' => 'Teklif listesi',
    'LBL_MODULE_NAME' => 'Teklifler',
    'LBL_MODULE_TITLE' => 'Teklifler: Giriş',
    'LBL_HOMEPAGE_TITLE' => 'Tekliflerim',
    'LNK_NEW_RECORD' => 'Teklif ekle',
    'LNK_LIST' => 'Teklifleri görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Teklif arama',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi görüntüle',
    'LBL_NEW_FORM_TITLE' => 'Yeni teklif',
    'LBL_TERMS_C' => 'Koşullar',
    'LBL_APPROVAL_ISSUE' => 'Onay sorunları',
    'LBL_APPROVAL_STATUS' => 'Onay durumu',
    'LBL_BILLING_ACCOUNT' => 'Hesap',
    'LBL_BILLING_CONTACT' => 'İlgili kişi',
    'LBL_EXPIRATION' => 'Geçerlilik tarihi',
    'LBL_QUOTE_NUMBER' => 'Teklif numarası',
    'LBL_OPPORTUNITY' => 'Fırsat',
    'LBL_TEMPLATE_DDOWN_C' => 'Teklif kalıbı',
    'LBL_STAGE' => 'Teklif aşaması',
    'LBL_TERM' => 'Ödeme koşulları',
    'LBL_SUBTOTAL_AMOUNT' => 'Ara toplam',
    'LBL_DISCOUNT_AMOUNT' => 'İndirim',
    'LBL_TAX_AMOUNT' => 'Vergi',
    'LBL_SHIPPING_AMOUNT' => 'Taşıma',
    'LBL_TOTAL_AMT' => 'Toplam',
    'VALUE' => 'Başlık',
    'LBL_EMAIL_ADDRESSES' => 'E-posta adresleri',
    'LBL_LINE_ITEMS' => 'Satır ögeleri',
    'LBL_GRAND_TOTAL' => 'Genel toplam',
    'LBL_INVOICE_STATUS' => 'Fatura durumu',
    'LBL_PRODUCT_QUANITY' => 'Adet',
    'LBL_PRODUCT_NAME' => 'Ürün',
    'LBL_PART_NUMBER' => 'Parça numarası',
    'LBL_PRODUCT_NOTE' => 'Not',
    'LBL_PRODUCT_DESCRIPTION' => 'Açıklama',
    'LBL_LIST_PRICE' => 'Liste',
    'LBL_DISCOUNT_AMT' => 'İndirim',
    'LBL_UNIT_PRICE' => 'Satış fiyatı',
    'LBL_TOTAL_PRICE' => 'Toplam',
    'LBL_VAT' => 'Vergi', // VAT
    'LBL_VAT_AMT' => 'Vergi tutarı', // VAT
    'LBL_ADD_PRODUCT_LINE' => 'Ürün satırı ekle',
    'LBL_SERVICE_NAME' => 'Hizmet',
    'LBL_SERVICE_LIST_PRICE' => 'Liste',
    'LBL_SERVICE_PRICE' => 'Satış fiyatı',
    'LBL_SERVICE_DISCOUNT' => 'İndirim',
    'LBL_ADD_SERVICE_LINE' => 'Hizmet satırı ekle ',
    'LBL_REMOVE_PRODUCT_LINE' => 'Sil',
    'LBL_CONVERT_TO_INVOICE' => 'Faturaya dönüştür',
    'LBL_PRINT_AS_PDF' => 'PDF olarak yazdır',
    'LBL_EMAIL_QUOTE' => 'Teklifi e-posta ile gönder',
    'LBL_CREATE_CONTRACT' => 'Sözleşme ekle',
    'LBL_LIST_NUM' => 'No',
    'LBL_PDF_NAME' => 'Teklif',
    'LBL_EMAIL_NAME' => 'Şunun teklifi',
    'LBL_QUOTE_DATE' => 'Teklif tarihi',
    'LBL_NO_TEMPLATE' => 'HATA\nHerhangi bir kalıp bulunamadı. Henüz bir teklif kalıbınız yoksa, PDF kalıpları modülüne giderek bir kalıp ekleyin',
    'LBL_SUBTOTAL_TAX_AMOUNT' => 'Ara toplam + vergi',//pre shipping
    'LBL_EMAIL_PDF' => 'PDF olarak e-posta gönder',
    'LBL_ADD_GROUP' => 'Grup ekle',
    'LBL_DELETE_GROUP' => 'Grubu sil',
    'LBL_GROUP_NAME' => 'Grup adı',
    'LBL_GROUP_TOTAL' => 'Grup toplamı',
    'LBL_SHIPPING_TAX' => 'Gönderi vergisi',
    'LBL_SHIPPING_TAX_AMT' => 'Gönderi vergisi',
    'LBL_IMPORT_LINE_ITEMS' => 'Satır ögelerini içe aktar',
    'LBL_CREATE_OPPORTUNITY' => 'Fırsat ekle',
    'LBL_SUBTOTAL_AMOUNT_USDOLLAR' => 'Ara toplam (varsayılan para birimi)',
    'LBL_DISCOUNT_AMOUNT_USDOLLAR' => 'İndirim (varsayılan para birimi)',
    'LBL_TAX_AMOUNT_USDOLLAR' => 'Vergi (varsayılan para birimi)',
    'LBL_SHIPPING_AMOUNT_USDOLLAR' => 'Gönderim (varsayılan para birimi)',
    'LBL_TOTAL_AMT_USDOLLAR' => 'Toplam (varsayılan para birimi)',
    'LBL_SHIPPING_TAX_AMT_USDOLLAR' => 'Gönderi vergisi (varsayılan para birimi)',
    'LBL_GRAND_TOTAL_USDOLLAR' => 'Genel toplam (varsayılan para birimi)',
    'LBL_QUOTE_TO' => 'Teklifin alıcısı',

    'LBL_SUBTOTAL_TAX_AMOUNT_USDOLLAR' => 'Ara toplam + vergi (varsayılan para birimi)',
    'LBL_AOS_QUOTES_AOS_CONTRACTS' => 'Teklifler: Sözleşmeler',
    'LBL_AOS_QUOTES_AOS_INVOICES' => 'Teklifler: Faturalar',
    'LBL_AOS_LINE_ITEM_GROUPS' => 'Satır ögesi grupları',
    'LBL_AOS_PRODUCT_QUOTES' => 'Ürün teklifleri',
    'LBL_AOS_QUOTES_PROJECT' => 'Teklifler: Proje',
);
