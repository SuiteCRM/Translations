<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
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
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kullanıcı kimliği',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_SECURITYGROUPS' => 'Güvenlik grupları',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Güvenlik grupları',
    'LBL_ID' => 'Kimlik',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_MODIFIED' => 'Değiştiren',
    'LBL_MODIFIED_NAME' => 'Değiştiren adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',
    'LBL_NAME' => 'Ad',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_REMOVE' => 'Sil',
    'LBL_LIST_FORM_TITLE' => 'Özet listesi',
    'LBL_MODULE_NAME' => 'Özet',
    'LBL_MODULE_TITLE' => 'Özet',
    'LBL_HOMEPAGE_TITLE' => 'Özetim',
    'LNK_NEW_RECORD' => 'Özet ekle',
    'LNK_LIST' => 'Özeti görüntüle',
    'LBL_SEARCH_FORM_TITLE' => 'Özet ara',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_NEW_FORM_TITLE' => 'Özet ekle',
    'LBL_CONFIG' => 'Yapılandır',
    'LBL_TYPE' => 'İncelenecek bölge',
    'LNK_SPOT_LIST' => 'Noktaları görüntüle',
    'LNK_SPOT_CREATE' => 'Nokta ekle',

    //Analytics
    'LBL_AN_CONFIGURATION' => 'Yapılandırma',

    'LBL_AN_UNSUPPORTED_DB' => 'Ne yazık ki, Suite Spots şu anda yalnızca MySQL ve MS SQL için yapılandırılabilir',

    //Analytics labels for accounts pivot
    'LBL_AN_ACCOUNTS_ACCOUNT_NAME' => 'Ad',
    'LBL_AN_ACCOUNTS_ACCOUNT_TYPE' => 'Hesap türü',
    'LBL_AN_ACCOUNTS_ACCOUNT_INDUSTRY' => 'Endüstri',
    'LBL_AN_ACCOUNTS_ACCOUNT_BILLING_COUNTRY' => 'Fatura ülkesi',

    //Analytics labels for leads pivot
    'LBL_AN_LEADS_ASSIGNED_USER' => 'Atanmış kullanıcı',
    'LBL_AN_LEADS_STATUS' => 'Durum',
    'LBL_AN_LEADS_LEAD_SOURCE' => 'Potansiyel kaynağı',
    'LBL_AN_LEADS_CAMPAIGN_NAME' => 'Kampanya adı',
    'LBL_AN_LEADS_YEAR' => 'Yıl',
    'LBL_AN_LEADS_QUARTER' => 'Çeyrek',
    'LBL_AN_LEADS_MONTH' => 'Ay',
    'LBL_AN_LEADS_WEEK' => 'Hafta',
    'LBL_AN_LEADS_DAY' => 'Gün',

    //Analytics labels for sales pivot
    'LBL_AN_SALES_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_AN_SALES_OPPORTUNITY_NAME' => 'Fırsat adı',
    'LBL_AN_SALES_ASSIGNED_USER' => 'Atanmış kullanıcı',
    'LBL_AN_SALES_OPPORTUNITY_TYPE' => 'FırsatTürü',
    'LBL_AN_SALES_LEAD_SOURCE' => 'Potansiyel kaynağı',
    'LBL_AN_SALES_AMOUNT' => 'Tutar',
    'LBL_AN_SALES_STAGE' => 'Satış aşaması',
    'LBL_AN_SALES_PROBABILITY' => 'Olasılık',
    'LBL_AN_SALES_DATE' => 'Satış tarihi',
    'LBL_AN_SALES_QUARTER' => 'Satış çeyreği',
    'LBL_AN_SALES_MONTH' => 'Satış ayı',
    'LBL_AN_SALES_WEEK' => 'Satış haftası',
    'LBL_AN_SALES_DAY' => 'Satış günü',
    'LBL_AN_SALES_YEAR' => 'Satış yılı',
    'LBL_AN_SALES_CAMPAIGN' => 'Kampanya',

    //Analytics labels for service pivot
    'LBL_AN_SERVICE_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_AN_SERVICE_STATE' => 'İl',
    'LBL_AN_SERVICE_STATUS' => 'Durum',
    'LBL_AN_SERVICE_PRIORITY' => 'Öncelik',
    'LBL_AN_SERVICE_CREATED_DAY' => 'Eklendiği gün',
    'LBL_AN_SERVICE_CREATED_WEEK' => 'Eklendiği hafta',
    'LBL_AN_SERVICE_CREATED_MONTH' => 'Eklendiği ay',
    'LBL_AN_SERVICE_CREATED_QUARTER' => 'Eklendiği çeyrek',
    'LBL_AN_SERVICE_CREATED_YEAR' => 'Eklendiği yıl',
    'LBL_AN_SERVICE_CONTACT_NAME' => 'İlgili kişi adı',
    'LBL_AN_SERVICE_ASSIGNED_TO' => 'Atanmış kullanıcı',

    //Analytics labels for the activities pivot
    'LBL_AN_ACTIVITIES_TYPE' => 'Tür',
    'LBL_AN_ACTIVITIES_NAME' => 'Ad',
    'LBL_AN_ACTIVITIES_STATUS' => 'Durum',
    'LBL_AN_ACTIVITIES_ASSIGNED_TO' => 'Atanmış kullanıcı',

    //Analytics labels for the marketing pivot
    'LBL_AN_MARKETING_STATUS' => 'Durum',
    'LBL_AN_MARKETING_TYPE' => 'Tür',
    'LBL_AN_MARKETING_BUDGET' => 'Bütçe',
    'LBL_AN_MARKETING_EXPECTED_COST' => 'Öngörülen maliyet',
    'LBL_AN_MARKETING_EXPECTED_REVENUE' => 'Öngörülen gelir',
    'LBL_AN_MARKETING_OPPORTUNITY_NAME' => 'Fırsat adı',
    'LBL_AN_MARKETING_OPPORTUNITY_AMOUNT' => 'Fırsat tutarı',
    'LBL_AN_MARKETING_OPPORTUNITY_SALES_STAGE' => 'Fırsatın satış aşaması',
    'LBL_AN_MARKETING_OPPORTUNITY_ASSIGNED_TO' => 'Fırsatın atandığı kişi',
    'LBL_AN_MARKETING_ACCOUNT_NAME' => 'Hesap adı',

    //Analytics labels for the marketing activities pivot
    'LBL_AN_MARKETINGACTIVITY_CAMPAIGN_NAME' => 'Kampanya adı',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_DATE' => 'İşlem tarihi',
    'LBL_AN_MARKETINGACTIVITY_ACTIVITY_TYPE' => 'İşlem türü',
    'LBL_AN_MARKETINGACTIVITY_RELATED_TYPE' => 'İlişkili öge türü',
    'LBL_AN_MARKETINGACTIVITY_RELATED_ID' => 'İlişkili öge kimliği',

    //Analytics labels for the quotes pivot
    'LBL_AN_QUOTES_OPPORTUNITY_NAME' => 'Fırsat adı',
    'LBL_AN_QUOTES_OPPORTUNITY_TYPE' => 'Fırsat türü',
    'LBL_AN_QUOTES_OPPORTUNITY_LEAD_SOURCE' => 'Fırsat potansiyeli kaynağı',
    'LBL_AN_QUOTES_OPPORTUNITY_SALES_STAGE' => 'Fırsatın satış aşaması',
    'LBL_AN_QUOTES_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_AN_QUOTES_CONTACT_NAME' => 'İlgili kişi adı',
    'LBL_AN_QUOTES_ITEM_NAME' => 'Öge adı',
    'LBL_AN_QUOTES_ITEM_TYPE' => 'Öge türü',
    'LBL_AN_QUOTES_ITEM_CATEGORY' => 'Öge kategorisi',
    'LBL_AN_QUOTES_ITEM_QTY' => 'Öge miktarı',
    'LBL_AN_QUOTES_ITEM_LIST_PRICE' => 'Ürün liste fiyatı',
    'LBL_AN_QUOTES_ITEM_SALE_PRICE' => 'Ürün satış fiyatı',
    'LBL_AN_QUOTES_ITEM_COST_PRICE' => 'Ürün maliyeti',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_PRICE' => 'Ürün indirimli fiyatı',
    'LBL_AN_QUOTES_ITEM_DISCOUNT_AMOUNT' => 'İndirim tutarı',
    'LBL_AN_QUOTES_ITEM_TOTAL' => 'Ürün toplamı',
    'LBL_AN_QUOTES_GRAND_TOTAL' => 'Genel toplam',
    'LBL_AN_QUOTES_ASSIGNED_TO' => 'Atanmış kullanıcı',
    'LBL_AN_QUOTES_DATE_CREATED' => 'Eklenme tarihi',
    'LBL_AN_QUOTES_DAY_CREATED' => 'Eklendiği gün',
    'LBL_AN_QUOTES_WEEK_CREATED' => 'Eklendiği hafta',
    'LBL_AN_QUOTES_MONTH_CREATED' => 'Eklendiği ay',
    'LBL_AN_QUOTES_QUARTER_CREATED' => 'Eklendiği çeyrek',
    'LBL_AN_QUOTES_YEAR_CREATED' => 'Eklendiği yıl',

    //Error message when there are multiple values for the label
    'LBL_AN_DUPLICATE_LABEL_FOR_SUBAREA' => 'Özet alt alan etiketi doğrulanırken sorun çıktı',
);
