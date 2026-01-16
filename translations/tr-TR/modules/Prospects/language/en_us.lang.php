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
    'LBL_MODULE_NAME' => 'Hedefler',
    'LBL_MODULE_ID' => 'Hedefler',
    'LBL_INVITEE' => 'Doğrudan bilgilendirmeler',
    'LBL_MODULE_TITLE' => 'Hedefler: Giriş',
    'LBL_SEARCH_FORM_TITLE' => 'Hedef arama',
    'LBL_LIST_FORM_TITLE' => 'Hedef listesi',
    'LBL_NEW_FORM_TITLE' => 'Yeni hedef',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_TITLE' => 'İş unvanı',
    'LBL_LIST_EMAIL_ADDRESS' => 'E-posta',
    'LBL_LIST_PHONE' => 'Telefon',
    'LBL_LIST_FIRST_NAME' => 'Ad',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kişi:',
    'LBL_CAMPAIGN_ID' => 'Kampanya kodu',
    'LBL_EXISTING_ACCOUNT' => 'Var olan bir hesap kullanıldı',
    'LBL_CREATED_ACCOUNT' => 'Yeni bir hesap oluşturuldu',
    'LBL_CREATED_CALL' => 'Yeni bir telefon araması eklendi',
    'LBL_CREATED_MEETING' => 'Yeni bir toplantı eklendi',
    'LBL_NAME' => 'Ad:',
    'LBL_PROSPECT_INFORMATION' => 'Özet', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_MORE_INFORMATION' => 'Ayrıntılı bilgiler',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_OFFICE_PHONE' => 'İş telefonu:',
    'LBL_ANY_PHONE' => 'Herhangi bir telefon:',
    'LBL_PHONE' => 'Telefon:',
    'LBL_LAST_NAME' => 'Soyadı:',
    'LBL_MOBILE_PHONE' => 'Cep telefonu:',
    'LBL_HOME_PHONE' => 'Giriş:',
    'LBL_OTHER_PHONE' => 'Diğer telefon:',
    'LBL_FAX_PHONE' => 'Faks:',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Birincil adres satırı:',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Birincil adres ilçe:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Birincil adres ülke:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Birincil adres il:',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Birincil adres posta kodu:',
    'LBL_ALT_ADDRESS_STREET' => '1. diğer adres satırı:',
    'LBL_ALT_ADDRESS_CITY' => 'Diğer adres ilçe:',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Diğer adres ülke:',
    'LBL_ALT_ADDRESS_STATE' => 'Diğer adres il:',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Diğer adres posta kodu:',
    'LBL_TITLE' => 'İş unvanı:',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_BIRTHDATE' => 'Doğum tarihi:',
    'LBL_EMAIL_ADDRESS' => 'E-posta adresi:',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Diğer e-posta:',
    'LBL_ANY_EMAIL' => 'Herhangi bir e-posta:',
    'LBL_ASSISTANT' => 'Sekreter:',
    'LBL_ASSISTANT_PHONE' => 'Sekreter telefonu:',
    'LBL_DO_NOT_CALL' => 'Telefon ile aranmayacak:',
    'LBL_EMAIL_OPT_OUT' => 'E-posta aboneliğinden ayrılma:',
    'LBL_PRIMARY_ADDRESS' => 'Birincil adres:',
    'LBL_ALTERNATE_ADDRESS' => 'Diğer adres:',
    'LBL_ANY_ADDRESS' => 'Herhangi bir adres:',
    'LBL_CITY' => 'İlçe:',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_POSTAL_CODE' => 'Posta kodu:',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_ADDRESS_INFORMATION' => 'Adres bilgileri',
    'LBL_DESCRIPTION' => 'Açıklama:',
    'LBL_OPP_NAME' => 'Fırsat adı:',
    'LBL_IMPORT_VCARD' => 'İçe vCard aktar',
    'LBL_IMPORT_VCARDTEXT' => 'Aygıtınızdaki bir vCard dosyasını içe aktararak yeni bir kişi kaydını otomatik olarak ekleyebilirsiniz.',
    'LBL_DUPLICATE' => 'Olası çift hedef',
    'MSG_SHOW_DUPLICATES' => 'Eklemek üzere olduğunuz hedef kaydı, zaten var olan bir hedef kaydının benzeri olabilir. Benzer adı ya da e-posta adresini taşıyan hedefleri aşağıda görebilirsiniz.<br>Hedef ekle üzerine tıklayarak bu hedefi eklemeye geçebilir ya da aşağıdaki listeden var olan bir hedef seçebilirsiniz.',
    'MSG_DUPLICATE' => 'Eklemek üzere olduğunuz hedef kaydı, zaten var olan bir hedef kaydının benzeri olabilir. Benzer adı ya da e-posta adresini taşıyan hedefleri aşağıda görebilirsiniz.<br>Kaydet üzerine tıklayarak bu yeni hedefi eklemeye geçebilir ya da İptal üzerine tıklayarak hedefi eklemeden modüle geri dönebilirsiniz.',
    'LNK_IMPORT_VCARD' => 'vCard ile ekle',
    'LNK_NEW_ACCOUNT' => 'Hesap ekle',
    'LNK_NEW_OPPORTUNITY' => 'Fırsat ekle',
    'LNK_NEW_CASE' => 'Destek kaydı ekle',
    'LNK_NEW_NOTE' => 'Not ya da dosya ekle',
    'LNK_NEW_CALL' => 'Telefon aramasını günlüğe kaydet',
    'LNK_NEW_EMAIL' => 'E-postayı arşivle',
    'LNK_NEW_MEETING' => 'Toplantı zamanla',
    'LNK_NEW_TASK' => 'Görev ekle',
    'LNK_NEW_APPOINTMENT' => 'Görüşme ekle',
    'LNK_IMPORT_PROSPECTS' => 'Hedefleri içe aktar',
    'NTC_DELETE_CONFIRMATION' => 'Bu kaydı silmek istediğinize emin misiniz?',
    'NTC_SNOOZE_CONFIRMATION' => 'Ertelemek istediğinize emin misiniz?',
    'NTC_REMOVE_CONFIRMATION' => 'Bu kişiyi destek kaydından çıkarmak istediğinize emin misiniz?',
    'ERR_DELETE_RECORD' => 'Bir kişiyi silmek için bir kayıt numarası belirtilmelidir.',
    'LBL_SALUTATION' => 'Hitap',
    'LBL_CREATED_OPPORTUNITY' => 'Yeni bir fırsat eklendi',
    'LNK_SELECT_ACCOUNT' => "Hesabı seç",
    'LNK_NEW_PROSPECT' => 'Hedef ekle',
    'LNK_PROSPECT_LIST' => 'Hedefleri görüntüle',
    'LNK_NEW_CAMPAIGN' => 'Kampanya ekle',
    'LNK_CAMPAIGN_LIST' => 'Kampanyalar',
    'LNK_NEW_PROSPECT_LIST' => 'Hedef listesi ekle',
    'LNK_PROSPECT_LIST_LIST' => 'Hedef listeleri',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'İşaretlenmiş hedefleri seç',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'İşaretlenmiş hedefleri seç',
    'LBL_INVALID_EMAIL' => 'E-posta geçersiz:',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Hedefler',
    'LBL_PROSPECT_LIST' => 'Aday listesi',
    'LBL_CONVERT_BUTTON_TITLE' => 'Hedef dönüştür',
    'LBL_CONVERT_BUTTON_LABEL' => 'Hedef dönüştür',
    'LNK_NEW_CONTACT' => 'Yeni ilgili kişi',
    'LBL_CREATED_CONTACT' => "Yeni bir kişi eklendi",
    'LBL_CAMPAIGNS' => 'Kampanyalar',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Kampanya günlüğü',
    'LBL_TRACKER_KEY' => 'İzleyici anahtarı',
    'LBL_LEAD_ID' => 'Potansiyel kodu',
    'LBL_CONVERTED_LEAD' => 'Dönüştürülmüş potansiyel',
    'LBL_ACCOUNT_NAME' => 'Hesap adı',
    'LBL_EDIT_ACCOUNT_NAME' => 'Hesap adı:',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmiş',
    //For export labels
    'LBL_FP_EVENTS_PROSPECTS_1_FROM_FP_EVENTS_TITLE' => 'Etkinlikler',
);
