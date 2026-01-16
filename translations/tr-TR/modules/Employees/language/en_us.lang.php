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
    'LBL_MODULE_NAME' => 'Çalışanlar',
    'LBL_MODULE_TITLE' => 'Çalışanlar: Giriş',
    'LBL_SEARCH_FORM_TITLE' => 'Çalışan arama',
    'LBL_LIST_FORM_TITLE' => 'Çalışanlar',
    'LBL_NEW_FORM_TITLE' => 'Çalışan ekle',
    'LBL_LOGIN' => 'Oturum aç',
    'LBL_RESET_PREFERENCES' => 'Varsayılan ayarları geri yükle',
    'LBL_TIME_FORMAT' => 'Saat biçimi:',
    'LBL_DATE_FORMAT' => 'Tarih biçimi:',
    'LBL_TIMEZONE' => 'Geçerli saat:',
    'LBL_CURRENCY' => 'Para birimi:',
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_LAST_NAME' => 'Soyad',
    'LBL_LIST_EMPLOYEE_NAME' => 'Çalışan adı',
    'LBL_LIST_DEPARTMENT' => 'Bölüm',
    'LBL_LIST_REPORTS_TO_NAME' => 'Rapor verilecek kişi',
    'LBL_LIST_EMAIL' => 'E-posta',
    'LBL_LIST_USER_NAME' => 'Kullanıcı adı',
    'LBL_ERROR' => 'Hata:',
    'LBL_PASSWORD' => 'Parola:',
    'LBL_USER_NAME' => 'Kullanıcı adı:',
    'LBL_USER_TYPE' => 'Kullanıcı türü',
    'LBL_FIRST_NAME' => 'Ad:',
    'LBL_LAST_NAME' => 'Soyadı:',
    'LBL_THEME' => 'Tema:',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_ADMIN' => 'Yönetici:',
    'LBL_EMPLOYEE_INFORMATION' => 'Çalışan bilgileri',
    'LBL_OFFICE_PHONE' => 'İş telefonu:',
    'LBL_REPORTS_TO' => 'Rapor verilecek kişi kodu:',
    'LBL_REPORTS_TO_NAME' => 'Rapor verilecek kişi',
    'LBL_OTHER_PHONE' => 'Diğer telefon:',
    'LBL_NOTES' => 'Notlar:',
    'LBL_DEPARTMENT' => 'Bölüm:',
    'LBL_TITLE' => 'İş unvanı:',
    'LBL_ANY_ADDRESS' => 'Herhangi bir adres:',
    'LBL_ANY_PHONE' => 'Herhangi bir telefon:',
    'LBL_ANY_EMAIL' => 'Herhangi bir e-posta:',
    'LBL_ADDRESS' => 'Adres:',
    'LBL_CITY' => 'İlçe:',
    'LBL_STATE' => 'İl ya da Bölge:',
    'LBL_POSTAL_CODE' => 'Posta kodu:',
    'LBL_COUNTRY' => 'Ülke:',
    'LBL_NAME' => 'Ad:',
    'LBL_MOBILE_PHONE' => 'Cep telefonu:',
    'LBL_FAX' => 'Faks:',
    'LBL_EMAIL' => 'E-posta adresi:',
    'LBL_EMAIL_LINK_TYPE' => 'E-posta istemcisi',
    'LBL_EMAIL_LINK_TYPE_HELP' => '<b>SuiteCRM e-posta istemcisi:</b> E-postalar SuiteCRM uygulaması kullanılarak gönderilir.<br><b>Dış e-posta istemcisi:</b> E-postalar Microsoft Outlook gibi bir dış uygulama kullanılarak gönderilir.',
    'LBL_HOME_PHONE' => 'Ev telefonu:',
    'LBL_WORK_PHONE' => 'İş telefonu:',
    'LBL_EMPLOYEE_STATUS' => 'Çalışan durumu:',
    'LBL_PRIMARY_ADDRESS' => 'Birincil adres:',
    'LBL_SAVED_SEARCH' => 'Görünüm ayarları',
    'LBL_MESSENGER_ID' => 'Anlık ileti adı:',
    'LBL_MESSENGER_TYPE' => 'Anlık ileti türü:',
    'ERR_LAST_ADMIN_1' => 'Çalışan adı "',
    'ERR_LAST_ADMIN_2' => '" olan çalışan sistem yöneticisi yetkisine sahip son kullanıcıdır. En az bir çalışanın sistem yöneticisi olması gereklidir.',
    'LNK_NEW_EMPLOYEE' => 'Çalışan ekle',
    'LNK_EMPLOYEE_LIST' => 'Çalışanları görüntüle',
    'ERR_DELETE_RECORD' => 'Hesabı silmek için bir kayıt numarası belirtmelisiniz.',
    'LBL_LIST_EMPLOYEE_STATUS' => 'Çalışan durumu',

    'LBL_SUITE_LOGIN' => 'Kullanıcı',
    'LBL_RECEIVE_NOTIFICATIONS' => 'Atamalar bildirilsin',
    'LBL_IS_ADMIN' => 'Yönetici',
    'LBL_GROUP' => 'Grup kullanıcısı',
    'LBL_PHOTO' => 'Fotoğraf',
    'LBL_DELETE_USER_CONFIRM' => 'Bu çalışan aynı zamanda bir kullanıcıdır. Çalışan kaydı silinirse kullanıcı kaydı da silinir ve kullanıcı uygulamaya erişemez. Bu kaydı silmek istediğinize emin misiniz?',
    'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Bu çalışanı silmek istediğinize emin misiniz?',
    'LBL_ONLY_ACTIVE' => 'Etkin çalışanlar',
    'LBL_SELECT' => 'Seçin' /*for 508 compliance fix*/,
    'LBL_AUTHENTICATE_ID' => 'Kimlik doğrulama kodu',
    'LBL_EXT_AUTHENTICATE' => 'Dış kimlik doğrulaması',
    'LBL_GROUP_USER' => 'Grup kullanıcısı',
    'LBL_LIST_ACCEPT_STATUS' => 'Kabul edilme durumu',
    'LBL_MODIFIED_BY' => 'Değiştiren',
    'LBL_MODIFIED_BY_ID' => 'Değiştiren kodu',
    'LBL_CREATED_BY_NAME' => 'Ekleyen', //bug48978
    'LBL_PORTAL_ONLY_USER' => 'Portal API kullanıcısı',
    'LBL_PSW_MODIFIED' => 'Son parola değişimi',
    'LBL_SHOW_ON_EMPLOYEES' => 'Çalışan kaydı görüntülensin',
    'LBL_USER_HASH' => 'Parola',
    'LBL_SYSTEM_GENERATED_PASSWORD' => 'Sistem tarafından üretilmiş parola',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_FAX_PHONE' => 'Faks',
    'LBL_STATUS' => 'Durum',
    'LBL_ADDRESS_CITY' => 'Adres ilçe',
    'LBL_ADDRESS_COUNTRY' => 'Adres ülke',
    'LBL_ADDRESS_INFORMATION' => 'Adres bilgileri',
    'LBL_ADDRESS_POSTALCODE' => 'Adres posta kodu',
    'LBL_ADDRESS_STATE' => 'Adres il',
    'LBL_ADDRESS_STREET' => 'Adres sokak',

    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_DATE_ENTERED' => 'Yazılma tarihi',
    'LBL_DELETED' => 'Silindi',

    'LBL_BUTTON_SELECT' => 'Seçin',
    'LBL_BUTTON_CLEAR' => 'Temizle',

    'LBL_CONTACTS_SYNC' => 'Kişi eşitleme',
    'LBL_OAUTH_TOKENS' => 'OAuth kodları',
    'LBL_PROJECT_USERS_1_FROM_PROJECT_TITLE' => 'Proje başlığından proje kullanıcıları',
    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'İlgili kişiler başlığından proje ilgili kişileri',
    'LBL_ROLES' => 'Roller',
    'LBL_SECURITYGROUPS' => 'Güvenlik grupları',
    'LBL_PROSPECT_LIST' => 'Aday listesi',

    'LBL_FACTOR_AUTH_INTERFACE' => 'İki aşamalı kimlik doğrulama arayüzü:',
    'LBL_EDITOR_TYPE' => 'Düzenleyici',
);
