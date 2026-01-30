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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Gelişmiş',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217 para birimi kodu',
    'DEFAULT_CURRENCY_NAME' => 'Para birimi adı',
    'DEFAULT_CURRENCY_SYMBOL' => 'Para birimi simgesi',
    'DEFAULT_DATE_FORMAT' => 'Varsayılan tarih biçimi',
    'DEFAULT_DECIMAL_SEP' => 'Ondalık simgesi',
    'DEFAULT_LANGUAGE' => 'Varsayılan dil',
    'DEFAULT_SYSTEM_SETTINGS' => 'Kullanıcı arayüzü',
    'DEFAULT_THEME' => 'Varsayılan tema',
    'DEFAULT_TIME_FORMAT' => 'Varsayılan saat biçimi',

    'DISPLAY_RESPONSE_TIME' => 'Sunucu yanıt verme zamanları görüntülensin',

    'IMAGES' => 'Logolar',
    'LBL_ALLOW_USER_TABS' => 'Kullanıcılar sekmeleri gizleyebilsin',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Sistem ayarları',
    'LBL_LOGVIEW' => 'Günlüğü görüntüle',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP kimlik doğrulaması kullanılsın',
    'LBL_MAIL_SMTPPASS' => 'SMTP parolası:',
    'LBL_MAIL_SMTPPORT' => 'SMTP bağlantı noktası:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP sunucusu:',
    'LBL_MAIL_SMTPUSER' => 'SMTP kullanıcı adı:',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP sunucu özellikleri',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta hizmeti sağlayıcınızı seçin:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail parolası:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail kullanıcı adı:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail parolası:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-posta adresi:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange parolası:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange kullanıcı adı:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange sunucu bağlantı noktası:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange sunucusu:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Kullanıcılar giden e-postalar için bu hesabı kullanabilsin:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Bu seçenek etkinleştirildiğinde, tüm kullanıcılar sistem bildirim ve uyarılarını göndermek için kullanılan giden e-posta hesabını kullanarak e-posta gönderebilir. Devre dışı bırakıldığında, kullanıcıların giden e-posta sunucusunu kullanabilmesi için kendi hesap bilgilerini yazması gerekir.',
    'LBL_MAILMERGE' => 'Mektup birleştirme',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'En kısa pano bileşeni otomatik yenileme aralığı',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Kullanıcıların pano bileşenlerinin otomatik yenileme aralığı için seçebileceği en küçük değer. \'Asla\' olarak seçilirse pano bileşenlerinin otomatik yenilenmesi devre dışı bırakılır.',
    'LBL_MODULE_FAVICON' => 'Modül simgesi favicon olarak görüntülensin',
    'LBL_MODULE_FAVICON_HELP' => 'Simgesi bulunan bir modülü kullanırken, tarayıcı sekmesinde tema favicon görseli yerine modül faviconu görüntülenir.',
    'LBL_MODULE_NAME' => 'Sistem ayarları',
    'LBL_MODULE_ID' => 'Yapılandırıcı',
    'LBL_MODULE_TITLE' => 'Kullanıcı arayüzü',
    'LBL_NOTIFY_FROMADDRESS' => '"Kimden" adresi:',
    'LBL_NOTIFY_SUBJECT' => 'E-posta konusu:',

    'LBL_PROXY_AUTH' => 'Kimlik doğrulansın mı?',
    'LBL_PROXY_HOST' => 'Vekil sunucu',
    'LBL_PROXY_ON_DESC' => 'Vekil sunucu adresini ve kimlik doğrulama ayarlarını yapılandırın',
    'LBL_PROXY_ON' => 'Vekil sunucu kullanılsın',
    'LBL_PROXY_PASSWORD' => 'Parola',
    'LBL_PROXY_PORT' => 'Bağlantı noktası',
    'LBL_PROXY_TITLE' => 'Vekil sunucu ayarları',
    'LBL_PROXY_USERNAME' => 'Kullanıcı adı',
    'LBL_RESTORE_BUTTON_LABEL' => 'Geri yükle',
    'LBL_SYSTEM_SETTINGS' => 'Sistem ayarları',
    'LBL_USE_REAL_NAMES' => 'Ad ve soyad görüntülensin',
    'LBL_USE_REAL_NAMES_DESC' => 'Bu seçenek etkinleştirildiğinde, atama alanlarında kullanıcı adı yerine kullanıcıların ad ve soyadlarından oluşan tam adları görüntülenir.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Dönüştürülmüş potansiyeller için potansiyel dönüştürme işlemi yapılmasın',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Bu seçenek etkinleştirildiğinde, daha önce dönüştürülmüş potansiyeller için potansiyel dönüştürme işlemi yapılmaz.',
    'LBL_ENABLE_ACTION_MENU' => 'İşlemler menüler içinde görüntülensin',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Bu seçenek etkinleştirildiğinde, ayrıntı görünümü ve alt pano işlemleri bir açılan liste menüsünde görüntülenir. Devre dışı bırakıldığında işlemler ayrı düğmeler şeklinde görüntülenir.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Liste görünümünde satır içi düzenleme yapılabilsin',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Bu seçenek etkinleştirildiğinde, liste görünümündeki alanlarda satır içi düzenleme yapılabilir. Devre dışı bırakıldığında liste görünümünde satır içi düzenleme yapılamaz.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Ayrıntı görünümünde satır içi düzenleme yapılabilsin',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Bu seçenek etkinleştirildiğinde, ayrıntı görünümündeki alanlarda satır içi düzenleme yapılabilir. Devre dışı bırakıldığında ayrıntı görünümünde satır içi düzenleme yapılamaz.',
    'LBL_HIDE_SUBPANELS' => 'Alt panolar daraltılsın',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Bir sayfadaki liste görünümü ögesi sayısı',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Bir sayfadaki alt pano ögesi sayısı',
    'LOG_MEMORY_USAGE' => 'Bellek kullanımı günlüğe kaydedilsin',
    'LOG_SLOW_QUERIES' => 'Yavaş sorgular günlüğe kaydedilsin',
    'CURRENT_LOGO' => 'Geçerli logo:',
    'CURRENT_LOGO_HELP' => 'Bu logo SuiteCRM uygulaması oturum açma ekranının ortasında görüntülenir.',
    'NEW_LOGO' => 'Logo görseli seçin:',
    'NEW_LOGO_HELP' => 'Görsel dosyası .png ya da .jpg biçiminde olabilir. Yükseklik en fazla 170 piksel, genişlik en fazla 450 piksel olmalıdır. Herhangi bir boyutu daha büyük olan görseller bu ölçülere göre yeniden boyutlandırılır.',
    'NEW_LOGO_HELP_NO_SPACE' => 'Görsel dosyası .png ya da .jpg biçiminde olabilir. Yükseklik en fazla 170 piksel, genişlik en fazla 450 piksel olmalıdır. Herhangi bir boyutu daha büyük olan görseller bu ölçülere göre yeniden boyutlandırılır.',
    'SLOW_QUERY_TIME_MSEC' => 'Yavaş sorgu zamanı eşiği (milisaniye)',
    'STACK_TRACE_ERRORS' => 'Hataların kümelendiği yerler görüntülensin',
    'UPLOAD_MAX_SIZE' => 'En büyük yükleme boyutu',
    'VERIFY_CLIENT_IP' => 'Kullanıcı IP adresi doğrulansın',
    'LOCK_HOMEPAGE' => 'Kullanıcılar ana sayfa görünümünü değiştiremesin',
    'LOCK_SUBPANELS' => 'Kullanıcılar alt pano görünümünü değiştiremesin',
    'MAX_DASHLETS' => 'Ana sayfadaki en fazla SuiteCRM pano bileşeni sayısı',
    'SYSTEM_NAME' => 'Sistem adı:',
    'SYSTEM_NAME_WIZARD' => 'Ad:',
    'SYSTEM_NAME_HELP' => 'Tarayıcının başlık çubuğunda görüntülenecek ad.',
    'LBL_LDAP_TITLE' => 'LDAP kimlik doğrulama desteği',
    'LBL_LDAP_ENABLE' => 'LDAP kullanılsın',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Sunucu:',
    'LBL_LDAP_SERVER_PORT' => 'Bağlantı noktası:',
    'LBL_LDAP_ADMIN_USER' => 'Kullanıcı adı:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'LDAP kullanıcısı aramak için kullanılır. Tam olarak yazılması gerekebilir.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Parola:',
    'LBL_LDAP_AUTHENTICATION' => 'Kimlik doğrulaması:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'LDAP sunucusuna belirtilen kullanıcı bilgileri kullanılarak bağlanılır. Kullanıcı bilgileri yazılmaz ise bağlantı anonim olarak yapılır.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Kullanıcılar otomatik eklensin:',
    'LBL_LDAP_USER_DN' => 'Kullanıcı etki alanı adı:',
    'LBL_LDAP_GROUP_DN' => 'Grup etki alanı adı:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Örnek: <em>ou=gruplar,dc=örnek,dc=com</em>',
    'LBL_LDAP_USER_FILTER' => 'Kullanıcı süzgeci:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Grup üyeliği:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'Kullanıcıların belirli bir gruba üye olması gereklidir',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Kullanıcı özniteliği:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'Bir kişinin grup üyesi olup olmadığını belirlemek için kullanılacak tekil belirteç. Örnek: <em>uid</em>',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'Kullanıcı özniteliğine göre süzme için kullanılacak grup özniteliği. Örnek: <em>memberUid</em>',
    'LBL_LDAP_GROUP_ATTR' => 'Grup özniteliği:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Kullanıcı kimliği doğrulanırken uygulanacak diğer ek süzgeç parametreleri. Örnek: <em>is_suitecrm_user=1 ya da (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Oturum açma özniteliği:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Bağlama özniteliği:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'LDAP kullanıcısı bağlama örnekleri:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'LDAP kullanıcısı arama örnekleri:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Örnek: ldap.example.com ya da ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Örnek:<em>389 ya da SSL kullanımı için 636</em>',
    'LBL_LDAP_GROUP_NAME' => 'Grup adı:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Örnek <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Örnek: <em>ou=people, dc=sitem, dc=com</em>',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Kimliği doğrulanan bir kullanıcının SuiteCRM üzerinde kaydı yoksa otomatik olarak eklenir.',
    'LBL_LDAP_ENC_KEY' => 'Şifreleme anahtarı:',
    'DEVELOPER_MODE' => 'Geliştirici kipi',

    'SHOW_DOWNLOADS_TAB' => 'İndirmeler sekmesi görüntülensin',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Bu seçenek etkinleştirildiğinde, kullanıcı ayarları bölümünde kullanıcıların SuiteCRM uygulama ekleri ve kullanılabilecek diğer dosyalara erişebileceği indirmeler sekmesi görüntülenir',
    'LBL_LDAP_ENC_KEY_DESC' => 'LDAP kullanılırken SOAP kimlik doğrulaması için.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'php.ini dosyasında php_mcrypt eklentisi etkinleştirilmiş olmalıdır.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'php.ini dosyasında OpenSSL eklentisi etkinleştirilmiş olmalıdır.',
    'LBL_ALL' => 'Tümü',
    'LBL_MARK_POINT' => 'Noktayı işaretle',
    'LBL_NEXT_' => 'Sonraki>>',
    'LBL_REFRESH_FROM_MARK' => 'İşaretten yenile',
    'LBL_SEARCH' => 'Arama:',
    'LBL_REG_EXP' => 'Kurallı ifade:',
    'LBL_IGNORE_SELF' => 'Kendini yok say:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Günlük kayıtlarının nereden başlayacağı işaretleniyor',
    'LBL_DISPLAYING_LOG' => 'Günlük görüntüleniyor',
    'LBL_YOUR_PROCESS_ID' => 'İşlem kodu',
    'LBL_YOUR_IP_ADDRESS' => 'IP adresiniz',
    'LBL_IT_WILL_BE_IGNORED' => 'yok sayılacak',
    'LBL_LOG_NOT_CHANGED' => 'Günlük değişmedi',
    'LBL_ALERT_JPG_IMAGE' => 'Görselin dosya biçimi JPEG olmalı. Uzantısı .jpg olan başka bir dosya yükleyin.',
    'LBL_ALERT_TYPE_IMAGE' => 'Görselin dosya biçimi JPEG ya da PNG olmalı. Uzantısı .jpg ya da .png olan başka bir dosya yükleyin.',
    'LBL_ALERT_SIZE_RATIO' => 'Görselin en boy oranı 1:1 ile 10:1. arasında olmalıdır. Görsel yeniden boyutlandırılacak.',
    'ERR_ALERT_FILE_UPLOAD' => 'Görsel yüklenirken sorun çıktı.',
    'LBL_LOGGER' => 'Günlük kaydetme ayarları',
    'LBL_LOGGER_FILENAME' => 'Günlük dosyasının adı',
    'LBL_LOGGER_FILE_EXTENSION' => 'Uzantı',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Günlük dosyası sınırı',
    'LBL_STACK_TRACE' => 'Yığın izi kullanılsın',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Varsayılan tarih biçimi',
    'LBL_LOGGER_LOG_LEVEL' => 'Günlükleme düzeyi',
    'LBL_LEAD_CONV_OPTION' => 'Potansiyel dönüştürme seçenekleri',
    'LEAD_CONV_OPT_HELP' => "<b>Kopyala</b> - Dönüştürme sırasında kullanıcı tarafından seçilmiş tüm potansiyel işlemleri için yeni kayıtlar oluşturulur ve ilişkilendirilir. Seçilmiş her kayıdın bir kopyası oluşturulur.<br><br> <b>Taşı</b> - Dönüştürme sırasında kullanıcı tarafından seçilmiş tüm potansiyel işlemleri yeni bir kayda taşınır.<br><br><b>Bir şey yapma</b> - Dönüştürme sırasında potansiyel işlemleri ile ilgili herhangi bir işlem yapılmaz. İşlemler yalnızca potansiyel ile ilişkili kalır.",
    'LBL_CONFIG_AJAX' => 'AJAX kullanıcı arayüzünü yapılandır',
    'LBL_CONFIG_AJAX_DESC' => 'Belirli modüller için AJAX kullanıcı arayüzü kullanımını etkinleştirin ya da devre dışı bırakın.',
    'LBL_LOGGER_MAX_LOGS' => 'En fazla günlük kaydı sayısı (dosya değiştirilmeden önce)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Dosya adına yapılacak ek',
    'LBL_VCAL_PERIOD' => 'vCal güncelleme zamanı dönemi:',
    'LBL_IMPORT_MAX_RECORDS' => 'İçe aktarma - En fazla satır sayısı:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'İçe aktarılacak dosyalarda bulunabilecek en fazla satır sayısı.<br>İçe aktarılan dosyadaki satır sayısı bu değeri aşarsa, kullanıcı uyarılır.<br>Herhangi bir değer yazılmazsa, sınırsız sayıda satıra izin verilir.',
    'vCAL_HELP' => 'Bu ayarı telefon aramaları ve toplantılar için Uygun/Meşgul durumunun kaç ay önceden yayınlanacağını belirlemek için kullanın.<BR>Uygun/Meşgul durumunun yayınlanmaması için "0" yazın. En az 1 ay; En çok 12 ay.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Senaryolarınız',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Henüz bir senaryo yapılandırılmamış',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Kurulumunuz için uygun senaryoları seçin. Bu seçenekler kurulumdan sonra değiştirilebilir.',

    'LBL_WIZARD_TITLE' => 'Yönetici yardımcısı',
    'LBL_WIZARD_WELCOME_TAB' => 'Hoş geldiniz',
    'LBL_WIZARD_WELCOME_TITLE' => 'SuiteCRM uygulamasına hoş geldiniz!',
    'LBL_WIZARD_WELCOME' => 'SuiteCRM uygulamasının marka ve yerelleştirme ayarlarını şimdi yapılandırmak için <b>Sonraki</b> üzerine tıklayın. SuiteCRM uygulamasını daha sonra yapılandırmak istiyorsanız <b>Atla</b> üzerine tıklayın.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Sonraki >',
    'LBL_WIZARD_BACK_BUTTON' => '< Önceki',
    'LBL_WIZARD_SKIP_BUTTON' => 'Atla',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'İlerle',
    'LBL_WIZARD_FINISH_TITLE' => 'Basit sistem yapılandırması tamamlandı',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Marka',
    'LBL_WIZARD_SYSTEM_DESC' => 'SuiteCRM uygulamasının marka ayarlarını yapmak için kuruluşunuzun adını ve logosunu belirtin.',
    'LBL_WIZARD_LOCALE_DESC' => 'SutieCRM verilerinin coğrafi konuma göre görüntülenme biçimini belirtin. Buradan yapılan ayarlar varsayılan ayarlar olur. Kullanıcılar daha sonra ayarlarını kendi istedikleri şekilde değiştirebilir.',
    'LBL_WIZARD_SMTP_DESC' => 'Atama bildirimleri ve yeni kullanıcı parolaları gibi bilgilerin gönderilmesi için kullanılacak e-posta hesabını yazın. Kullanıcılar SuiteCRM tarafından gönderilen e-postaların bu e-posta hesabından gönderildiğini görür.',
    'LBL_LOADING' => 'Yükleniyor...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Sil' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Hoş geldiniz' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logo' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Modüllerin geçmiş alt panosunda ilişkili kişilerin e-postaları görüntülensin',
);
