<?php
/**
 * SuiteCRM is a customer relationship management program developed by SuiteCRM Ltd.
 * Copyright (C) 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUITECRM, SUITECRM DISCLAIMS THE
 * WARRANTY OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License
 * version 3, these Appropriate Legal Notices must retain the display of the
 * "Supercharged by SuiteCRM" logo. If the display of the logos is not reasonably
 * feasible for technical reasons, the Appropriate Legal Notices must display
 * the words "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = [
    // System fields
    'LBL_ASSIGNED_TO_ID' => 'Atanmış kullanıcı kimliği',
    'LBL_ASSIGNED_TO_NAME' => 'Atanmış kişi',
    'LBL_DATE_ENTERED' => 'Eklenme tarihi',
    'LBL_DATE_MODIFIED' => 'Değiştirilme tarihi',
    'LBL_MODIFIED' => 'Değiştiren',
    'LBL_MODIFIED_NAME' => 'Değiştiren adı',
    'LBL_CREATED' => 'Ekleyen',
    'LBL_CREATED_USER' => 'Ekleyen kullanıcı',
    'LBL_MODIFIED_USER' => 'Değiştiren kullanıcı',
    'LBL_DESCRIPTION' => 'Açıklama',
    'LBL_DELETED' => 'Silindi',

    // Security groups
    'LBL_SECURITYGROUPS' => 'Güvenlik grupları',
    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Güvenlik grupları',

    // List view labels
    'LBL_LIST_NAME' => 'Ad',
    'LBL_LIST_DELETE' => 'Sil',
    'LBL_EDIT_BUTTON' => 'Düzenle',
    'LBL_REMOVE' => 'Sil',
    'LBL_ASCENDING' => 'Artan',
    'LBL_DESCENDING' => 'Azalan',

    // Email opt-in labels
    'LBL_OPT_IN' => 'Abone ol',
    'LBL_OPT_IN_PENDING_EMAIL_NOT_SENT' => 'Abone olma onayı bekleyen, Abone olma onayı gönderilmemiş',
    'LBL_OPT_IN_PENDING_EMAIL_SENT' => 'Abone olma onayı bekleyen, Abone olma onayı gönderilmiş',
    'LBL_OPT_IN_CONFIRMED' => 'Abone olmuş',

    // Subpanel titles
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Geçmişi görüntüle',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'İşlemler',
    'LBL_CALENDARACCOUNT_SUBPANEL_TITLE' => 'Takvim hesapları',
    'LBL_MEETINGS_SUBPANEL_TITLE' => 'Eşitlenmiş toplantılar',

    // Import links
    'LNK_IMPORT_CALENDARACCOUNT' => 'Takvim hesaplarını içe aktar',

    // Additional menu links
    'LNK_LIST_CREATE_NEW_GROUP' => 'Yeni grup ekle',
    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Kişisel takvim hesabı ekle',
    'LNK_LIST_INBOUND_EMAILS' => 'Gelen e-postalar',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Giden e-postalar',
    'LNK_LIST_EXTERNAL_OAUTH_PROVIDERS' => 'Dış OAuth hizmeti sağlayıcıları',
    'LNK_LIST_EXTERNAL_OAUTH_CONNECTIONS' => 'Dış OAuth bağlantıları',

    // Basic module labels
    'LBL_MODULE_NAME' => 'Takvim hesapları',
    'LBL_MODULE_TITLE' => 'Takvim hesapları',
    'LBL_LIST_FORM_TITLE' => 'Takvim hesapları listesi',
    'LBL_SEARCH_FORM_TITLE' => 'Takvim hesabı ara',
    'LBL_NEW_FORM_TITLE' => 'Yeni takvim hesabı',
    'LBL_HOMEPAGE_TITLE' => 'Takvim hesaplarım',

    // Navigation links
    'LNK_NEW_RECORD' => 'Takvim hesabı ekle',
    'LNK_LIST' => 'Takvim hesaplarını görüntüle',

    // Standard fields
    'LBL_NAME' => 'Ad',
    'LBL_ID' => 'Kimlik',
    'LBL_TYPE' => 'Tür',
    'LBL_SOURCE' => 'Takvim kaynağı',

    // OAuth2 Fields
    'LBL_OAUTH_CONNECTION' => 'OAuth bağlantısı',
    'LBL_CONNECT_OAUTH' => 'OAuth ile bağlan',

    // Basic Auth Fields
    'LBL_USERNAME' => 'Kullanıcı adı',
    'LBL_PASSWORD' => 'Parola',
    'LBL_SERVER_URL' => 'Sunucu adresi',
    'LBL_TEST_CONNECTION' => 'Bağlantıyı sına',

    // API Key Fields
    'LBL_API_KEY' => 'API anahtarı',
    'LBL_API_ENDPOINT' => 'API uç noktası',
    'LBL_VALIDATE_API' => 'API uygulamasını doğrula',

    // Calendar User Fields
    'LBL_CALENDAR_USER_ID' => 'Takvim kullanıcısı kimliği',
    'LBL_CALENDAR_USER_NAME' => 'Takvim kullanıcısı',
    'LBL_CALENDAR_USER' => 'Takvim kullanıcısı',

    // Auth Actions
    'LBL_AUTH_ACTIONS' => 'Kimlik doğrulama işlemleri',

    // Panel Labels
    'LBL_SYNC_STATUS' => 'Eşitleme durumu',

    // Connection Status Fields
    'LBL_LAST_CONNECTION_STATUS' => 'Sınama başarılı',
    'LBL_LAST_CONNECTION_TEST' => 'Son bağlantı sınaması',
    'LBL_LAST_SYNC_ATTEMPT_DATE' => 'Son eşitleme denemesi',
    'LBL_LAST_SYNC_ATTEMPT_STATUS' => 'Eşitleme durumu',
    'LBL_LAST_SYNC_ATTEMPT_MESSAGE' => 'Eşitleme iletisi',
    'LBL_LAST_SYNC_DATE' => 'Son eşitleme tarihi',
    'LBL_EXTERNAL_CALENDAR_ID' => 'Dış takvim kimliği',
    'LBL_DUPLICATE_EXTERNAL_CALENDAR' => 'Bu dış takvim hesaba zaten bağlanmış',

    // Sync Actions
    'LBL_SYNC_NOW' => 'Eşitle',
    'LBL_SYNC_NOW_TITLE' => 'Bu takvim hesabını şimdi eşitle',
    'LBL_SYNC_NOW_CONFIRM' => 'Bu takvim hesabını şimdi eşitlemek istediğinize emin misiniz?',
    'LBL_NO_ACCOUNT_ID' => 'Herhangi bir takvim hesabı kimliği belirtilmemiş',
    'LBL_SYNCING' => 'Eşitleniyor...',
    'LBL_NETWORK_ERROR' => 'Takvim hesabı eşitlenirken bir ağ sorunu çıktı. Lütfen yeniden deneyin.',
    'LBL_UNKNOWN' => 'Bilinmiyor',
    'LBL_NOW' => 'şimdi',
    'LBL_SYNC_SUCCESS' => 'Takvim eşitlemesi tamamlandı',
    'LBL_SYNC_FAILED' => 'Eşitlenemedi',
    'LBL_SYNC_FAILED_DEFAULT' => 'Takvim eşitlenemedi. Ayrıntılı bilgi almak için günlük kayıtlarına bakın.',
    'LBL_SYNC_RESPONSE_ERROR' => 'Eşitleme yanıtı işlenirken bir sorun çıktı. Ayrıntılı bilgi almak için günlük kayıtlarına bakın.',
    'LBL_SYNC_IN_PROGRESS' => 'Eşitleniyor. Lütfen bekleyin...',
    'LBL_SYNC_IN_PROGRESS_MESSAGE' => 'Takvim etkinlikleri eşitleniyor. Bu işlem biraz zaman alabilir...',
    'LBL_PLEASE_WAIT' => 'Lütfen bekleyin',
    // Permission and validation messages
    'LBL_NO_ACCESS' => 'Bu işlemi yapma izniniz yok.',
    'LBL_ALREADY_HAS_PERSONAL_ACCOUNT' => 'Bu kullanıcının zaten bir kişisel takvim hesabı var.',
    'LBL_ADMIN_ONLY_GROUP_ACCOUNT' => 'Grup takvimi hesaplarını yalnızca yöneticiler ekleyebilir.',

    // Authentication validation messages
    'LBL_OAUTH_CONNECTION_REQUIRED' => 'Lütfen önce bir OAuth bağlantısı seçin.',
    'LBL_BASIC_AUTH_FIELDS_REQUIRED' => 'Lütfen basit kimlik doğrulama alanlarını doldurun (kullanıcı adı, parola, sunucu adresi).',
    'LBL_API_KEY_REQUIRED' => 'Lütfen bir API anahtarı yazın.',
    'LBL_USING_SAVED_API_KEY' => 'Daha önce kaydedilmiş API anahtarı kullanılıyor.',
    'LBL_UNKNOWN_AUTH_METHOD' => 'Kimlik doğrulama yöntemi bilinmiyor',
    'LBL_SELECT_CALENDAR_SOURCE_FIRST' => 'Lütfen önce bir takvim kaynağı seçin.',

    // Connection test messages
    'LBL_CALENDAR' => 'Takvim',
    'LBL_SUCCESSFUL' => 'Tamamlandı',
    'LBL_FAILED' => 'Tamamlanamadı',
    'LBL_CONNECTION_TEST' => 'Bağlantı sınaması',
    'LBL_YES' => 'Evet',
    'LBL_NO' => 'Hayır',
    'LBL_FOUND_CALENDARS' => '{count} takvim bulundu.',
    'LBL_CONNECTION_TEST_RESPONSE_ERROR' => 'Bağlantı sınaması yanıtı işlenirken bir sorun çıktı. Ayrıntılı bilgi almak için günlük kayıtlarına bakın.',
    'LBL_CONNECTION_TEST_HTTP_ERROR' => 'Bağlantı sınaması şu HTTP durumu ile başarısız oldu',
    'LBL_CONNECTION_NETWORK_ERROR' => 'Takvim bağlantısı sınanırken bir ağ sorunu çıktı. Lütfen yeniden deneyin.',
    'LBL_CONNECTION_TEST_SUCCESS_MESSAGE' => 'Bağlantı sınaması tamamlandı.<br>Kimlik doğrulama bilgileriniz geçerli ve takvime erişilebiliyor.',
    'LBL_DUPLICATE_CALENDAR_ERROR' => 'Bu takvim hesaba zaten bağlanmış',

    // Authentication method error messages
    'LBL_AUTH_METHOD_ERROR' => 'Kimlik doğrulama yöntemi belirlenirken sorun çıktı',
    'LBL_AUTH_METHOD_PARSE_ERROR' => 'Kimlik doğrulama yöntemi yanıtı işlenirken sorun çıktı',
    'LBL_AUTH_METHOD_GET_ERROR' => 'Kaynağın kimlik doğrulama yöntemi alınırken sorun çıktı',

    // Dialog labels
    'LBL_NOTIFICATION' => 'Bildirim',
    'LBL_CONFIRM' => 'Onayla',
    'LBL_ARE_YOU_SURE' => 'Emin misiniz?',

    // Sync status enum translations
    'LBL_SYNC_STATUS_IN_PROGRESS' => 'İşleniyor',
    'LBL_SYNC_STATUS_SUCCESS' => 'Başarılı',
    'LBL_SYNC_STATUS_WARNING' => 'Uyarı',
    'LBL_SYNC_STATUS_ERROR' => 'Hata',

    // Sync message enum translations
    'LBL_SYNC_MSG_SYNC_COMPLETE' => 'Tüm toplantılar eşitlenmiş.',
    'LBL_SYNC_MSG_UP_TO_DATE' => 'Eşitlenecek yeni bir toplantı yok.',
    'LBL_SYNC_MSG_MEETINGS_FAILED' => 'Bazı toplantılar eşitlenemedi. Günlük kayıtlarına bakın.',
    'LBL_SYNC_MSG_SYNC_PARTIAL' => 'Bazı toplantılar eşitlendi. Diğerleri sınırlar nedeniyle bekliyor.',
    'LBL_SYNC_MSG_SYNC_ERROR' => 'Eşitleme sorunu. Günlük kayıtlarına bakın.',
    'LBL_SYNC_MSG_TOKEN_EXPIRED' => 'Kimlik doğrulama kodunun süresi geçmiş.',
    'LBL_SYNC_MSG_CONNECTION_ERROR' => 'Bağlantı sorunu.',
    'LBL_SYNC_MSG_CALENDAR_NOT_FOUND' => 'Takvim bulunamadı.',

    // Relationship labels
    'LBL_MEETINGS' => 'Toplantılar',
];