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
    'ERR_DELETE_RECORD' => 'Kişiyi silmek için kayıt numarasını belirtin.',
    'LBL_ACCOUNT_ID' => 'Hesap kodu:',
    'LBL_ACCOUNT_NAME' => 'Hesap adı:',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres bilgileri',
    'LBL_ALT_ADDRESS_CITY' => 'Diğer adres ilçe:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Diğer adres ülke:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Diğer adres posta kodu:',
    'LBL_ALT_ADDRESS_STATE' => 'Diğer adres il:',
    'LBL_ALT_ADDRESS_STREET_2' => '2. diğer adres satırı:',
    'LBL_ALT_ADDRESS_STREET_3' => '3. diğer adres satırı:',
    'LBL_ALT_ADDRESS_STREET' => '1. diğer adres satırı:',
    'LBL_ALTERNATE_ADDRESS' => 'Diğer adres:',
    'LBL_ALT_ADDRESS' => 'Diğer adres:',
    'LBL_ANY_ADDRESS' => 'Herhangi bir adres:',
    'LBL_ANY_EMAIL' => 'Herhangi bir e-posta:',
    'LBL_ANY_PHONE' => 'Herhangi bir telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi:',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kullanıcı',
    'LBL_ASSISTANT_PHONE' => 'Sekreter telefonu:',
    'LBL_ASSISTANT' => 'Sekreter:',
    'LBL_BIRTHDATE' => 'Doğum tarihi:',
    'LBL_CITY' => 'İlçe:',
    'LBL_CAMPAIGN_ID' => 'Kampanya kodu',
    'LBL_CONTACT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'İlgili kişi adı:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'İlgili - Fırsat:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'İlgili kişi:',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_CREATED_ACCOUNT' => 'Yeni bir hesap oluşturuldu',
    'LBL_CREATED_CALL' => 'Yeni bir telefon araması eklendi',
    'LBL_CREATED_CONTACT' => 'Yeni bir kişi eklendi',
    'LBL_CREATED_MEETING' => 'Yeni bir toplantı eklendi',
    'LBL_CREATED_OPPORTUNITY' => 'Yeni bir fırsat eklendi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Kişiler',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Doğrudan bilgilendirmeler',
    'LBL_DO_NOT_CALL' => 'Telefon ile aranmayacak:',
    'LBL_DUPLICATE' => 'Olası çift ilgili kişi',
    'LBL_EMAIL_ADDRESS' => 'E-posta adresi:',
    'LBL_EMAIL_OPT_OUT' => 'E-posta aboneliğinden ayrılma:',
    'LBL_EXISTING_ACCOUNT' => 'Var olan bir hesap kullanıldı',
    'LBL_EXISTING_CONTACT' => 'Var olan bir kişi kullanıldı',
    'LBL_EXISTING_OPPORTUNITY' => 'Var olan bir fırsat kullanıldı',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_HOME_PHONE' => 'Giriş:',
    'LBL_ID' => 'Kod:',
    'LBL_IMPORT_VCARD' => 'İçe vCard aktar',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Aygıtınızdaki bir vCard dosyasını içe aktararak yeni bir kişi kaydını otomatik olarak ekleyebilirsiniz.',
    'LBL_INVALID_EMAIL' => 'E-posta geçersiz:',
    'LBL_INVITEE' => 'Doğrudan bilgilendirmeler',
    'LBL_LAST_NAME' => 'Soyadı:',
    'LBL_LEAD_SOURCE' => 'Potansiyel kaynağı:',
    'LBL_LIST_ACCEPT_STATUS' => 'Kabul edilme durumu',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_LIST_CONTACT_NAME' => 'İlgili kişi adı',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta',
    'LBL_LIST_FIRST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'İlgili kişi listesi',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_PHONE' => 'İş telefonu',
    'LBL_LIST_TITLE' => 'İş unvanı',
    'LBL_MOBILE_PHONE' => 'Cep telefonu:',
    'LBL_MODIFIED' => 'Değiştiren:',
    'LBL_MODULE_NAME' => 'Kişiler',
    'LBL_MODULE_TITLE' => 'Kişiler: Giriş',
    'LBL_NAME' => 'Ad:',
    'LBL_NEW_FORM_TITLE' => 'Yeni ilgili kişi',
    'LBL_NOTE_SUBJECT' => 'Not konusu',
    'LBL_OFFICE_PHONE' => 'İş telefonu:',
    'LBL_OPP_NAME' => 'Fırsat adı:',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Fırsat rol kodu:',
    'LBL_OPPORTUNITY_ROLE' => 'Fırsat rolü',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer e-posta:',
    'LBL_OTHER_PHONE' => 'Diğer telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal uygulaması:',
    'LBL_PORTAL_INFORMATION' => 'Portal bilgileri',
    'LBL_PORTAL_NAME' => 'Portal adı:',
    'LBL_STREET' => 'Sokak',
    'LBL_POSTAL_CODE' => 'Posta kodu:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Birincil adres ilçe:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Birincil adres ülke:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Birincil adres posta kodu:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Birincil adres il:',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '2. birincil adres satırı:',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '3. birincil adres satırı:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Birincil adres satırı:',
    'LBL_PRIMARY_ADDRESS' => 'Birincil adres:',
    'LBL_PRODUCTS_TITLE' => 'Ürünler',
    'LBL_REPORTS_TO_ID' => 'Rapor verilecek kişi kodu:',
    'LBL_REPORTS_TO' => 'Rapor verilecek kişi:',
    'LBL_RESOURCE_NAME' => 'Kaynak adı',
    'LBL_SALUTATION' => 'Hitap:',
    'LBL_SAVE_CONTACT' => 'Kişiyi kaydet',
    'LBL_SEARCH_FORM_TITLE' => 'Kişi arama',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretlenmiş kişileri seç',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretlenmiş kişileri seç',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_SYNC_CONTACT' => 'Outlook&reg; ile eşitle:',
    'LBL_PROSPECT_LIST' => 'Aday listesi',
    'LBL_TITLE' => 'İş unvanı:',
    'LNK_CONTACT_LIST' => 'Kişileri görüntüle',
    'LNK_IMPORT_VCARD' => 'vCard ile kişi ekle',
    'LNK_NEW_ACCOUNT' => 'Hesap ekle',
    'LNK_NEW_APPOINTMENT' => 'Görüşme ekle',
    'LNK_NEW_CALL' => 'Telefon aramasını günlüğe kaydet',
    'LNK_NEW_CASE' => 'Destek kaydı ekle',
    'LNK_NEW_CONTACT' => 'Kişi ekle',
    'LNK_NEW_EMAIL' => 'E-postayı arşivle',
    'LNK_NEW_MEETING' => 'Toplantı zamanla',
    'LNK_NEW_NOTE' => 'Not ekle',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat ekle',
    'LNK_NEW_TASK' => 'Görev ekle',
    'LNK_SELECT_ACCOUNT' => "Hesabı seç",
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'NTC_SNOOZE_CONFIRMATION' => 'Ertelemek istediğinize emin misiniz?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Bir fırsat oluşturmak için bir hesap gereklidir.\nLütfen yeni bir hesap ekleyin ya da var olan bir hesabı seçin.',
    'NTC_REMOVE_CONFIRMATION' => 'Bu kişiyi destek kaydından çıkarmak istediğinize emin misiniz?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Fırsatlar',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Belgeler',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Birincil adrese kopyala',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Diğer adrese kopyala',

    'LBL_CASES_SUBPANEL_TITLE' => 'Destek kayıtları',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Hatalar',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projeler',
    'LBL_PROJECTS_RESOURCES' => 'Proje kaynakları',
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanyalar',
    'LBL_LIST_CITY' => 'İlçe',
    'LBL_LIST_STATE' => 'İl',
    'LBL_HOMEPAGE_TITLE' => 'Kişilerim',
    'LBL_OPPORTUNITIES' => 'Fırsatlar',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Kişiler',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projeler',
    'LNK_IMPORT_CONTACTS' => 'Kişileri içe aktar',

    // SNIP
    'LBL_USER_SYNC' => 'Kullanıcı eşitleme',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Etkinlikler',

    'LBL_AOP_CASE_UPDATES' => 'Destek kaydı güncellemeleri',
    'LBL_CREATE_PORTAL_USER' => 'Portal kullanıcısı ekle',
    'LBL_ENABLE_PORTAL_USER' => 'Portal kullanıcısını etkinleştir',
    'LBL_DISABLE_PORTAL_USER' => 'Portal kullanıcısını devre dışı bırak',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Portal kullanıcısı eklenemedi',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Portal kullanıcısı etkinleştirilemedi',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Portal kullanıcısı devre dışı bırakılamadı',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portal kullanıcısı eklendi',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portal kullanıcısı etkinleştirildi',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portal kullanıcısı devre dışı bırakıldı',
    'LBL_NO_JOOMLA_URL' => 'Portal adresi belirtilmemiş',
    'LBL_PORTAL_USER_TYPE' => 'Portal kullanıcısı türü',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Hesap devre dışı',
    'LBL_JOOMLA_ACCOUNT_ID' => 'Joomla! hesap kodu',

    'LBL_AOS_CONTRACTS' => 'Sözleşmeler',
    'LBL_AOS_INVOICES' => 'Faturalar',
    'LBL_AOS_QUOTES' => 'Teklifler',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Proje başlığından proje ile ilgili kişiler',
    'LBL_LAST_MEETING' => 'Bir toplantıda son etkileşime geçtiğiniz zaman:',
    'LBL_LAST_CALL' => 'Bir görüşmede son etkileşime geçtiğiniz zaman:',
    'LBL_LAST_EMAIL' => 'Bir e-postada son etkileşime geçtiğiniz zaman:',
    'LBL_NO_INTERACTION' => 'Bu kişi ile henüz etkileşime geçmemişsiniz.',

    'LBL_LIST_INVITE_STATUS' => 'Çağrı durumu',
);
