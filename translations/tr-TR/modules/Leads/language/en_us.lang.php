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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Potansiyeli silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Hesap açıklaması',
    'LBL_ACCOUNT_ID' => 'Hesap kodu',
    'LBL_ACCOUNT_NAME' => 'Hesap adı:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_ADDRESS_INFORMATION' => 'Adres bilgileri',
    'LBL_ALT_ADDRESS_CITY' => 'Alternatif adres ilçe',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Alternatif adres ülke',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Alternatif adres posta kodu',
    'LBL_ALT_ADDRESS_STATE' => 'Alternatif adres il',
    'LBL_ALT_ADDRESS_STREET_2' => '2. alternatif adres satırı',
    'LBL_ALT_ADDRESS_STREET_3' => '2. alternatif adres satırı',
    'LBL_ALT_ADDRESS_STREET' => '1. alternatif adres satırı',
    'LBL_ALTERNATE_ADDRESS' => 'Diğer adres:',
    'LBL_ALT_ADDRESS' => 'Diğer adres:',
    'LBL_ANY_ADDRESS' => 'Herhangi bir adres:',
    'LBL_ANY_EMAIL' => 'Herhangi bir e-posta:',
    'LBL_ANY_PHONE' => 'Herhangi bir telefon:',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kullanıcı:',
    'LBL_CITY' => 'İlçe:',
    'LBL_CONTACT_ID' => 'İlgili kişi kodu',
    'LBL_CONTACT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Potansiyel adı:',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Potansiyel fırsat:',
    'LBL_CONTACT_ROLE' => 'Rol:',
    'LBL_CONTACT' => 'Potansiyel:',
    'LBL_CONVERTED_ACCOUNT' => 'Dönüştürülen hesap:',
    'LBL_CONVERTED_CONTACT' => 'Dönüştürülen kişi:',
    'LBL_CONVERTED_OPP' => 'Dönüştürülen fırsat:',
    'LBL_CONVERTED' => 'Dönüştürüldü',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Potansiyeli dönüştür',
    'LBL_CONVERTLEAD' => 'Potansiyeli dönüştür',
    'LBL_CONVERTLEAD_WARNING' => 'Uyarı: Dönüştürmek istediğiniz Potansiyelin durumu "Değiştirilmiş". Bu potansiyelden zaten ilgili kişi ve/veya hesap kayıtları eklenmiş olabilir. Potansiyeli dönüştürmeye geçmek istiyorsanız Kaydet üzerine tıklayın. Dönüştürmeden potansiyel kaydına geri dönmek için İptal üzerine tıklayın.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Olası ilgili kişi: ',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_CREATED_NEW' => 'Yeni eklenen',
    'LBL_CREATED_ACCOUNT' => 'Yeni bir hesap oluşturuldu',
    'LBL_CREATED_CALL' => 'Yeni bir telefon araması eklendi',
    'LBL_CREATED_CONTACT' => 'Yeni bir kişi eklendi',
    'LBL_CREATED_MEETING' => 'Yeni bir toplantı eklendi',
    'LBL_CREATED_OPPORTUNITY' => 'Yeni bir fırsat eklendi',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Potansiyeller',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_DO_NOT_CALL' => 'Telefon ile aranmayacak:',
    'LBL_DUPLICATE' => 'Benzer potansiyeller',
    'LBL_EMAIL_ADDRESS' => 'E-posta adresi:',
    'LBL_EMAIL_OPT_OUT' => 'E-posta aboneliğinden ayrılma:',
    'LBL_EXISTING_ACCOUNT' => 'Var olan bir hesap kullanıldı',
    'LBL_EXISTING_CONTACT' => 'Var olan bir kişi kullanıldı',
    'LBL_EXISTING_OPPORTUNITY' => 'Var olan bir fırsat kullanıldı',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    'LBL_HOME_PHONE' => 'Ev telefonu:',
    'LBL_IMPORT_VCARD' => 'İçe vCard aktar',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Aygıtınızdaki bir vCard dosyasını içe aktararak yeni bir potansiyel kaydını otomatik olarak ekleyebilirsiniz.',
    'LBL_INVALID_EMAIL' => 'E-posta geçersiz:',
    'LBL_INVITEE' => 'Doğrudan bilgilendirmeler',
    'LBL_LAST_NAME' => 'Soyadı:',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Potansiyel kaynağı açıklaması:',
    'LBL_LEAD_SOURCE' => 'Potansiyel kaynağı:',
    'LBL_LIST_ACCEPT_STATUS' => 'Kabul edilme durumu',
    'LBL_LIST_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_LIST_CONTACT_NAME' => 'Potansiyel adı',
    'LBL_LIST_CONTACT_ROLE' => 'Rol',
    'LBL_LIST_DATE_ENTERED' => 'Eklenme tarihi',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta',
    'LBL_LIST_FIRST_NAME' => 'Ad',
    'LBL_LIST_FORM_TITLE' => 'Potansiyel listesi',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Potansiyel kaynağı açıklaması',
    'LBL_LIST_LEAD_SOURCE' => 'Potansiyel kaynağı',
    'LBL_LIST_MY_LEADS' => 'Potansiyellerim',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_PHONE' => 'İş telefonu',
    'LBL_LIST_REFERED_BY' => 'Öneren',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LIST_TITLE' => 'İş unvanı',
    'LBL_MOBILE_PHONE' => 'Cep telefonu:',
    'LBL_MODULE_NAME' => 'Potansiyeller',
    'LBL_MODULE_TITLE' => 'Potansiyeller: Giriş',
    'LBL_NAME' => 'Ad:',
    'LBL_NEW_FORM_TITLE' => 'Yeni potansiyel',
    'LBL_OFFICE_PHONE' => 'İş telefonu:',
    'LBL_OPP_NAME' => 'Fırsat adı:',
    'LBL_OPPORTUNITY_AMOUNT' => 'Fırsat tutarı:',
    'LBL_OPPORTUNITY_ID' => 'Fırsat kodu',
    'LBL_OPPORTUNITY_NAME' => 'Fırsat adı:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer e-posta:',
    'LBL_OTHER_PHONE' => 'Diğer telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_PORTAL_APP' => 'Portal uygulaması',
    'LBL_PORTAL_INFORMATION' => 'Portal bilgileri',
    'LBL_PORTAL_NAME' => 'Portal adı:',
    'LBL_POSTAL_CODE' => 'Posta kodu:',
    'LBL_STREET' => 'Sokak',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Birincil adres ilçe',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Birincil adres ülke',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Birincil adres posta kodu',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Birincil adres il',
    'LBL_PRIMARY_ADDRESS_STREET_2' => '2. birincil adres satırı',
    'LBL_PRIMARY_ADDRESS_STREET_3' => '3. birincil adres satırı',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Birincil adres satırı',
    'LBL_PRIMARY_ADDRESS' => 'Birincil adres:',
    'LBL_REFERED_BY' => 'Öneren:',
    'LBL_REPORTS_TO_ID' => 'Rapor verilecek kişi kodu',
    'LBL_REPORTS_TO' => 'Rapor verilecek kişi:',
    'LBL_SALUTATION' => 'Hitap',
    'LBL_MODIFIED' => 'Değiştiren',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_SEARCH_FORM_TITLE' => 'Potansiyel arama',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretlenmiş potansiyelleri seç',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretlenmiş potansiyelleri seç',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_STATUS_DESCRIPTION' => 'Durum açıklaması:',
    'LBL_STATUS' => 'Durum:',
    'LBL_TITLE' => 'İş unvanı:',
    'LNK_IMPORT_VCARD' => 'vCard ile potansiyel ekle',
    'LNK_LEAD_LIST' => 'Potansiyelleri görüntüle',
    'LNK_NEW_ACCOUNT' => 'Hesap ekle',
    'LNK_NEW_APPOINTMENT' => 'Görüşme ekle',
    'LNK_NEW_CONTACT' => 'Kişi ekle',
    'LNK_NEW_LEAD' => 'Potansiyel ekle',
    'LNK_NEW_NOTE' => 'Not ekle',
    'LNK_NEW_TASK' => 'Görev ekle',
    'LNK_NEW_CASE' => 'Destek kaydı ekle',
    'LNK_NEW_CALL' => 'Telefon aramasını günlüğe kaydet',
    'LNK_NEW_MEETING' => 'Toplantı zamanla',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat ekle',
    'LNK_SELECT_ACCOUNTS' => ' <b>YA DA</b> hesap seçin',
    'LNK_SELECT_CONTACTS' => ' <b>YA DA</b> kişi seçin',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'NTC_SNOOZE_CONFIRMATION' => 'Ertelemek istediğinize emin misiniz?',
    'NTC_REMOVE_CONFIRMATION' => 'Destek kaydından bu potansiyeli çıkarmak istediğinize emin misiniz?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanyalar',
    'LBL_CAMPAIGN' => 'Kampanya:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Atanmış kullanıcı',
    'LBL_PROSPECT_LIST' => 'Aday listesi',
    'LBL_CAMPAIGN_LEAD' => 'Kampanyalar',
    'LBL_BIRTHDATE' => 'Doğum tarihi:',
    'LBL_ASSISTANT_PHONE' => 'Sekreter telefonu',
    'LBL_ASSISTANT' => 'Sekreter',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CONVERT_MODULE_NAME' => 'Modül',
    'LBL_CONVERT_REQUIRED' => 'Zorunlu',
    'LBL_CONVERT_SELECT' => 'Seçim yapılabilsin',
    'LBL_CONVERT_COPY' => 'Verileri kopyala',
    'LBL_CONVERT_EDIT' => 'Düzenle',
    'LBL_CONVERT_DELETE' => 'Sil',
    'LBL_CONVERT_ADD_MODULE' => 'Modül ekle',
    'LBL_CREATE' => 'Ekle',
    'LBL_SELECT' => ' <b>YA DA</b> seçin',
    'LBL_WEBSITE' => 'Site',
    'LNK_IMPORT_LEADS' => 'İçe potansiyel aktar',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Yeni kaydın ekleneceği modül.',
    'LBL_REQUIRED_TIP' => 'Potansiyel dönüştürülmeden önce zorunlu modüllerin eklenmiş ya da seçilmiş olması gereklidir.',
    'LBL_COPY_TIP' => 'Bu seçenek etkinleştirildiğinde, potansiyeldeki alanlar yeni eklenen kayıtlardaki aynı adlı alanlara kopyalanır.',
    'LBL_SELECTION_TIP' => 'Potansiyel dönüştürülürken eklenmek yerine ilgili kişilerde ilişkili bir alanı bulunan modüller seçilebilir.',
    'LBL_EDIT_TIP' => 'Bu modül için dönüştürme düzenini değiştirir.',
    'LBL_DELETE_TIP' => 'Bu modülü dönüştürme düzeninden çıkarır.',

    'LBL_ACTIVITIES_MOVE' => 'İşlemleri şuraya taşı',
    'LBL_ACTIVITIES_COPY' => 'İşlemleri şuraya kopyala',
    'LBL_ACTIVITIES_MOVE_HELP' => "Potansiyelin işlemlerinin taşınacağı kayıtları seçin. Görevler, telefon aramaları, toplantılar, notlar ve e-postalar seçilen kayıt(lara) taşınır.",
    'LBL_ACTIVITIES_COPY_HELP' => "Potansiyel işlemlerinin kopyalanacağı kayıtları seçin. Yeni görevler, telefon aramaları, toplantılar ve notlar seçilen kayıtların her birine kopyalanır. E-postalar seçilmiş kayıt(lar) ile ilişkilendirilir.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Kampanya kodu',
    'LBL_EDITLAYOUT' => 'Görünümü düzenle' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Tarihi yazın' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Yükleniyor' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Düzenle' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Etkinlikler',
);
