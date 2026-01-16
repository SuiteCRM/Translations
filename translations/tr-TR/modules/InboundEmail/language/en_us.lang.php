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


    'LBL_RE' => 'YNT:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Kullanıcı adı ya da parola hatalı',
    'ERR_INI_ZLIB' => 'Zlib sıkıştırması geçici olarak kapatılamadı. "Ayarları sınama" işlemi yapılamayabilir.',
    'ERR_NO_IMAP' => 'IMAP kitaplığı bulunamadı. Gelen e-posta işlemlerine geçmeden önce bu sorunu çözmelisiniz',
    'ERR_NO_OPTS_SAVED' => 'Gelen e-posta hesabınız için herhangi bir uygun değer kaydedilmemiş. Lütfen ayarları gözden geçirin',
    'ERR_TEST_MAILBOX' => 'Lütfen ayarları denetleyin ve yeniden deneyin.',
    'ERR_INVALID_PORT' => 'Bağlantı noktası geçersiz',

    'LBL_ASSIGN_TO_USER' => 'Kullanıcıya ata',
    'LBL_AUTOREPLY' => 'Otomatik yanıt kalıbı',
    'LBL_AUTOREPLY_HELP' => 'E-posta gönderen kişilerin iletilerinin alındığını bildirmek için kullanılacak bir otomatik yanıt seçin.',
    'LBL_BASIC' => 'E-posta hesabı bilgileri',
    'LBL_CASE_MACRO' => 'Destek kaydı makrosu',
    'LBL_CASE_MACRO_DESC' => 'İçe aktarılan e-postanın bir destek kaydı ile ilişkilendirilmesi için işlenecek ve kullanılacak makroyu belirtin.',
    'LBL_CASE_MACRO_DESC2' => 'Herhangi bir değer belirtebilirsiniz. Ancak <b>"%1"</b> değerini koruyun.',
    'LBL_CLOSE_POPUP' => 'Pencereyi kapat',
    'LBL_CREATE_TEMPLATE' => 'Ekle',
    'LBL_DELETE_SEEN' => 'Okunmuş e-postalar içe aktarıldıktan sonra silinsin',
    'LBL_EDIT_TEMPLATE' => 'Düzenle',
    'LBL_EMAIL_OPTIONS' => 'E-posta işleme ayarları',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Geri dönen işleme ayarları',
    'LBL_FILTER_DOMAIN_DESC' => 'Otomatik yanıtların gönderilmeyeceği bir etki alanı belirtin.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Bu seçenek etkinleştirildiğinde, gelen tüm e-postalar için otomatik olarak SuiteCRM üzerinde e-posta kayıtları eklenir.',
    'LBL_FILTER_DOMAIN' => 'Bu etki alanına otomatik yanıt gönderilmesin',
    'LBL_FIND_SSL_WARN' => '<br>SSL sınaması uzun sürebilir. Lütfen sabırlı olun.<br>',
    'LBL_FROM_ADDR' => '"Kimden" adresi',
    'LBL_FROM_ADDR_DESC' => 'E-posta hizmeti sağlayıcının kısıtlamaları nedeniyle buraya yazılan e-posta adresi gönderilen e-postaların &quot;Kimden&quot; adresinde görüntülenmeyebilir. Böyle bir durumda, giden e-posta sunucusunda tanımlanmış e-posta adresi kullanılır.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Kimden" adı',
    'LBL_GROUP_QUEUE' => 'Gruba ata',
    'LBL_HOME' => 'Giriş',
    'LBL_LIST_MAILBOX_TYPE' => 'E-posta hesabı kullanımı',
    'LBL_LIST_NAME' => 'Ad:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tür',
    'LBL_LIST_SERVER_URL' => 'E-posta sunucusu',
    'LBL_SERVER_ADDRESS' => 'Sunucu adresi',
    'LBL_LIST_STATUS' => 'Durum',
    'LBL_LOGIN' => 'Kullanıcı adı',
    'LBL_USERNAME' => 'Kullanıcı adı',
    'LBL_MAILBOX_DEFAULT' => 'Gelen Kutusu',
    'LBL_MAILBOX_SSL' => 'SSL kullanılsın',
    'LBL_MAILBOX_TYPE' => 'Olası işlemler',
    'LBL_DISTRIBUTION_METHOD' => 'Dağıtım yöntemi',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Destek kaydı otomatik yanıt kalıbı ekle',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'E-posta gönderen kişilere, bir destek kaydının eklendiğini bildirecek otomatik yanıtı seçin. E-postanın konu bölümünde destek kaydının makro ayarları ile ilişkili destek kaydı numarası bulunur. Bu yanıt yalnızca ilk e-posta alıcıda geldiğinde gönderilir.',
    'LBL_MAILBOX' => 'İzlenen klasörler',
    'LBL_TRASH_FOLDER' => 'Silinmişler klasörü',
    'LBL_SENT_FOLDER' => 'Gönderilmişler klasörü',
    'LBL_SELECT' => 'Seçin',
    'LBL_MARK_READ_NO' => 'E-posta içeri aktarıldıktan sonra silinmiş olarak işaretlendi',
    'LBL_MARK_READ_YES' => 'E-posta içeri aktarıldıktan sonra sunucuda bırakıldı',
    'LBL_MARK_READ' => 'İletiler sunucuda kalsın',
    'LBL_MAX_AUTO_REPLIES' => 'Otomatik yanıt sayısı',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Tek bir e-posta adresine 24 saat içinde gönderilecek en fazla otomatik yanıt sayısını belirtin.',
    'LBL_PERSONAL_MODULE_NAME' => 'Kişisel e-posta hesabı',
    'LBL_CREATE_CASE' => 'E-posta ile destek kaydı eklenebilsin',
    'LBL_CREATE_CASE_HELP' => 'Bu seçenek etkinleştirildiğinde, gelen e-postalardan otomatik olarak SuiteCRM üzerine destek kaydı eklenebilir.',
    'LBL_MODULE_NAME' => 'Gelen e-posta hesapları',
    'LBL_BOUNCE_MODULE_NAME' => 'Geri dönüş işleme e-posta kutusu',
    'LBL_MODULE_TITLE' => 'Gelen e-posta hesapları',
    'LBL_NAME' => 'Ad',
    'LBL_NONE' => 'Yok',
    'LBL_ONLY_SINCE_NO' => 'Hayır. Sunucudaki tüm e-postalar denetlensin.',
    'LBL_ONLY_SINCE_YES' => 'Evet.',
    'LBL_PASSWORD' => 'Parola',
    'LBL_EMAIL_PASSWORD' => 'Parola',
    'LBL_POP3_SUCCESS' => 'POP3 bağlantısı çalışıyor.',
    'LBL_POPUP_TITLE' => 'Ayarları sına',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Abone olunacak klasörleri seçin',
    'LBL_SELECT_TRASH_FOLDERS' => 'Silinmişler klasörünü seçin',
    'LBL_SELECT_SENT_FOLDERS' => 'Gönderilmişler klasörünü seçin',
    'LBL_DELETED_FOLDERS_LIST' => 'Şu klasörler bulunamadı ya da sunucudan silinmiş: %s',
    'LBL_PORT' => 'E-posta sunucu bağlantı noktası',
    'LBL_REPLY_TO_NAME' => '"Yanıt" adı',
    'LBL_REPLY_TO_ADDR' => '"Yanıt" adresi',
    'LBL_SAME_AS_ABOVE' => 'Kimden adı/adresi kullanılarak',
    'LBL_SERVER_OPTIONS' => 'Gelişmiş kurulum',
    'LBL_SERVER_TYPE' => 'E-posta sunucu iletişim kuralı',
    'LBL_SERVER_PORT' => 'E-posta sunucu bağlantı noktası',
    'LBL_SERVER_URL' => 'E-posta sunucu adresi',
    'LBL_SSL_DESC' => 'E-posta sunucusu güvenli soket bağlantısını destekliyorsa, bu seçenek etkinleştirildiğinde, e-postaların içe aktarılması için bağlantıda SSL kullanılması gerekir.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Seçilmiş takımın e-posta hesabına erişimi var.',
    'LBL_SSL' => 'SSL kullanılsın',
    'LBL_STATUS' => 'Durum',
    'LBL_EMAIL_BODY_FILTERING' => 'E-posta içerik süzgeci türü',
    'LBL_SYSTEM_DEFAULT' => 'Sistem varsayılanı',
    'LBL_TEST_BUTTON_TITLE' => 'Deneme',
    'LBL_TEST_SETTINGS' => 'Ayarları sına',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Bağlantı ayarlarını sına',
    'LBL_TEST_SUCCESSFUL' => 'Bağlantı çalışıyor.',
    'LBL_TEST_WAIT_MESSAGE' => 'Bir dakika lütfen...',
    'LBL_WARN_IMAP_TITLE' => 'Gelen e-posta devre dışı',
    'LBL_WARN_IMAP' => 'Uyarılar:',
    'LBL_WARN_NO_IMAP' => 'IMAP c-client kitaplıkları PHP modülü ile etkinleştirilmemiş ya da derlenmemiş ise gelen e-posta düzgün <b>çalışamaz</b>. Lütfen bu sorunu çözmek için sistem yöneticiniz ile görüşün.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Yeni kişisel hesap',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Yeni grup hesabı',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'Yeni destek kaydı hesabı',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Yeni geri dönüş işleme hesabı',
    'LNK_LIST_MAILBOXES' => 'Gelen e-posta hesapları',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Giden e-posta hesapları',
    'LNK_LIST_SCHEDULER' => 'Zamanlanmış görevler',
    'LNK_SEED_QUEUES' => 'Kuyruklar takımlardan beslensin',
    'LBL_GROUPFOLDER_ID' => 'Grup klasörü kodu',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Kullanıcılar, yanıt adresi olarak "Kimden" adı ve adresini kullanabilsin',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Bu seçenek etkinleştirildiğinde, grup e-posta hesabına erişebilen kullanıcılar tarafından yeni bir e-posta iletisi oluşturulurken, bu grup e-posta hesabının kimden adı ve adresi, kime alanında bir seçenek olarak görüntülenir.',
    'LBL_STATUS_ACTIVE' => 'Etkin',
    'LBL_STATUS_INACTIVE' => 'Etkin değil',
    'LBL_IS_PERSONAL' => 'Kişisel',
    'LBL_IS_GROUP' => 'grup',
    'LBL_ENABLE_AUTO_IMPORT' => 'E-postalar otomatik olarak içe aktarılsın',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Uyarı: Otomatik içe aktarma ayarlarını değiştiriyorsunuz. Bu durum veri kaybına neden olabilir.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Uyarı: Destek kayıtları otomatik olarak oluşturulurken otomatik içe aktarma seçeneği etkinleştirilmiş olmalı.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Taslaklar',
    'LBL_LIST_TITLE_MY_INBOX' => 'Gelen kutusu',
    'LBL_LIST_TITLE_MY_SENT' => 'E-posta gönderildi',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arşivlenmiş e-postalar',
    'LNK_MY_DRAFTS' => 'Taslaklar',
    'LNK_MY_INBOX' => 'E-posta',
    'LNK_VIEW_MY_INBOX' => 'E-postayı görüntüle',
    'LNK_QUICK_REPLY' => 'Yanıtla',
    'LNK_SENT_EMAIL_LIST' => 'Gönderilmiş e-postalar',
    'LBL_EDIT_LAYOUT' => 'Görünümü düzenle' /*for 508 compliance fix*/,

    'LBL_MODIFIED_BY' => 'Değiştiren',
    'LBL_SERVICE' => 'Hizmet',
    'LBL_STORED_OPTIONS' => 'Kaydedilmiş ayarlar',
    'LBL_GROUP_ID' => 'Grup kodu',

    'LBL_OUTBOUND_CONFIGURATION' => 'Giden yapılandırması',
    'LBL_CONNECTION_CONFIGURATION' => 'Sunucu yapılandırması',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Otomatik yanıt yapılandırması',
    'LBL_CASE_CONFIGURATION' => 'Destek kaydı yapılandırması',
    'LBL_GROUP_CONFIGURATION' => 'Grup yapılandırması',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Güvenlik grupları',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Giden e-posta hesabı',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Giden e-posta hesabı kodu',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Giden e-posta hesabı',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Otomatik yanıt e-postası kalıbı',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Otomatik yanıt e-postası kalıbı kodu',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Otomatik yanıt e-postası kalıbı',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Destek kaydı e-postası kalıbı',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Destek kaydı e-postası kalıbı kodu',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Destek kaydı e-postası kalıbı',

    'LBL_PROTOCOL' => 'İletişim kuralı',
    'LBL_CONNECTION_STRING' => 'Bağlantı dizgesi',
    'LBL_DISTRIB_METHOD' => 'Dağıtım yöntemi',
    'LBL_DISTRIB_OPTIONS' => 'Dağıtım seçenekleri',

    'LBL_DISTRIBUTION_USER' => 'Dağıtım kullanıcısı',
    'LBL_DISTRIBUTION_USER_ID' => 'Dağıtım kullanıcısı kodu',
    'LBL_DISTRIBUTION_USER_NAME' => 'Dağıtım kullanıcısı',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Dış OAuth bağlantısı',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'Dış OAuth bağlantısı kodu',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Dış OAuth bağlantısı',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Dış OAuth bağlantıları',

    'LBL_TYPE' => 'Tür',
    'LBL_AUTH_TYPE' => 'Kimlik doğrulama türü',
    'LBL_IS_DEFAULT' => 'Varsayılan',
    'LBL_SIGNATURE' => 'İmza',

    'LBL_OWNER_NAME' => 'Sahibi',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Varsayılan olarak ayarla',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'İçe aktarıldıktan sonra iletiler çöpe atılsın mı?',
);
