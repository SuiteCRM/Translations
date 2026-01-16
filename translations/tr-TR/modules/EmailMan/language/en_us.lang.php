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
    'LBL_SEND_DATE_TIME' => 'Gönderim tarihi',
    'LBL_IN_QUEUE' => 'İşleniyor',
    'LBL_IN_QUEUE_DATE' => 'Sıraya alınış tarihi',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Bir seferde gönderilecek e-posta sayısı olarak yalnızca tam sayı değerleri yazılabilir',

    'LBL_ATTACHMENT_AUDIT' => ' gönderildi. Bilgisayarınızda yer kaplamaması için yerel kopyası oluşturulmadı.',
    'LBL_CONFIGURE_SETTINGS' => 'E-posta ayarlarını yapılandır',
    'LBL_CUSTOM_LOCATION' => 'Kullanıcı tanımlı',
    'LBL_DEFAULT_LOCATION' => 'Varsayılan',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Silinen e-postalar ile birlikte ilişkili notlar ve ek dosyaları da silinsin',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'E-posta uyarı bildirimleri',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Abone olma ayarları',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Otomatik abone olma e-postası gönder',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Abone olma onayı e-posta kalıbı',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Eski e-posta yazma davranışı kullanılsın',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Giden e-posta yapılandırması',
    'LBL_EMAILS_PER_RUN' => 'Bir seferde gönderilecek e-posta sayısı:',
    'LBL_ID' => 'Kod',
    'LBL_LIST_CAMPAIGN' => 'Kampanya',
    'LBL_LIST_FORM_TITLE' => 'Kuyruk',
    'LBL_LIST_FROM_NAME' => 'Kimden adı',
    'LBL_LIST_IN_QUEUE' => 'İşleniyor',
    'LBL_LIST_MESSAGE_NAME' => 'Pazarlama iletisi',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Alıcı e-postası',
    'LBL_LIST_RECIPIENT_NAME' => 'Alıcı adı',
    'LBL_LIST_SEND_ATTEMPTS' => 'Gönderim denemeleri',
    'LBL_LIST_SEND_DATE_TIME' => 'Gönderilme zamanı',
    'LBL_LIST_USER_NAME' => 'Kullanıcı adı',
    'LBL_LOCATION_ONLY' => 'Konum',
    'LBL_LOCATION_TRACK' => 'Kampanya izleme dosyalarının konumu (campaign_tracker.php gibi)',
    'LBL_CAMP_MESSAGE_COPY' => 'Kampanya iletilerinin kopyaları tutulsun:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Bütün kampanyalar sırasında gönderilen <bold>HER</bold> e-postanın kopyasını saklamak ister misiniz? <bold>Varsayılan olarak Hayır seçeneği önerilir</bold>. Hayır seçildiğinde, yalnızca e-posta kalıbı ve her bir iletinin yeniden oluşturulmasını sağlayacak değişkenler tutulur.',
    'LBL_MAIL_SENDTYPE' => 'E-posta gönderim uygulaması:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP kimlik doğrulaması kullanılsın:',
    'LBL_MAIL_SMTPPASS' => 'Parola:',
    'LBL_MAIL_SMTPPORT' => 'SMTP bağlantı noktası:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP posta sunucusu:',
    'LBL_MAIL_SMTPUSER' => 'Kullanıcı adı:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta hizmeti sağlayıcınızı seçin',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail parolası',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail kullanıcı adı',
    'LBL_GMAIL_SMTPPASS' => 'Gmail parolası',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-posta adresi',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange parolası',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange kullanıcı adı',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange sunucu bağlantı noktası',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange sunucusu',
    'LBL_EMAIL_LINK_TYPE' => 'E-posta istemcisi',
    'LBL_MARKETING_ID' => 'Pazarlama kodu',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'E-posta ayarları',
    'LBL_MODULE_TITLE' => 'Giden e-posta kuyruğu yönetimi',
    'LBL_NOTIFICATION_ON_DESC' => 'Bu seçenek etkinleştirildiğinde, kullanıcılara bir kayıt atandığında e-posta gönderilir.',
    'LBL_NOTIFY_FROMADDRESS' => '"Kimden" adresi:',
    'LBL_NOTIFY_FROMNAME' => '"Kimden" adı:',
    'LBL_NOTIFY_ON' => 'Atama bildirimleri',
    'LBL_NOTIFY_TITLE' => 'E-posta ayarları',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Giden e-posta seçenekleri',
    'LBL_RELATED_ID' => 'İlişkili öge kodu',
    'LBL_RELATED_TYPE' => 'İlişkili öge türü',
    'LBL_SEARCH_FORM_TITLE' => 'Kuyruk arama',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php dosyasındaki site_url değeri',
    'TXT_REMOVE_ME_ALT' => 'Bu e-posta listesinden ayrılmak için şu adrese gidin',
    'TXT_REMOVE_ME_CLICK' => 'buraya tıklayın',
    'TXT_REMOVE_ME' => 'Bu e-posta listesinden ayrılmak için ',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Bildirim atanmış kullanıcının e-posta adresinden gönderilsin',

    'LBL_SECURITY_TITLE' => 'E-posta güvenlik ayarları',
    'LBL_SECURITY_DESC' => 'Gelen e-posta olarak izin verilmeyecek ya da e-posta modülünde görüntülenmeyecek olanları işaretleyin.',
    'LBL_SECURITY_APPLET' => 'Applet kod imi',
    'LBL_SECURITY_BASE' => 'Base kod imi',
    'LBL_SECURITY_EMBED' => 'Embed kod imi',
    'LBL_SECURITY_FORM' => 'Form kod imi',
    'LBL_SECURITY_FRAME' => 'Frame kod imi',
    'LBL_SECURITY_FRAMESET' => 'Frameset kod imi',
    'LBL_SECURITY_IFRAME' => 'iFrame kod imi',
    'LBL_SECURITY_IMPORT' => 'Import kod imi',
    'LBL_SECURITY_LAYER' => 'Layer kod imi',
    'LBL_SECURITY_LINK' => 'Link kod imi',
    'LBL_SECURITY_OBJECT' => 'Object kod imi',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Outlook için varsayılan en düşük güvenlik ayarlarını seçin doğru görüntünün yanındaki hatalar).',
    'LBL_SECURITY_STYLE' => 'Style kod imi',
    'LBL_SECURITY_TOGGLE_ALL' => 'İşaretleri tersine çevir',
    'LBL_SECURITY_XMP' => 'Xmp kod imi',
    'LBL_YES' => 'Evet',
    'LBL_NO' => 'Hayır',
    'LBL_PREPEND_TEST' => '[Deneme]: ',
    'LBL_SEND_ATTEMPTS' => 'Gönderim denemeleri',
    'LBL_OUTGOING_SECTION_HELP' => 'İş akış uyarılarını da içeren e-posta bildirimlerini gönderebilmek için varsayılan giden e-posta sunucusunu yapılandırın.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Kullanıcılar bu hesabın kimliği olarak gönderebilir:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Bu seçenek etkinleştirildiğinde, tüm kullanıcılar sistem bildirim ve uyarılarını göndermek için kullanılan giden e-posta hesabını kullanarak e-posta gönderebilir.<br>Devre dışı bırakıldığında, kullanıcıların giden e-posta sunucusunu kullanabilmesi için kendi hesap bilgilerini yazması gerekir.',
    'LBL_FROM_ADDRESS_HELP' => 'Bu seçenek etkinleştirildiğinde, e-postanın "Kimden" alanında atanmış kullanıcının adı ve e-posta adresi görüntülenir. Bu özellik sunucu hesabından başka hesaplardan gönderime izin vermeyen SMTP sunucularında çalışmayabilir.',
    'LBL_HELP' => 'Yardım' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Giden e-posta hesaplarını görüntüle',
    'LBL_ALLOW_SEND_AS_USER' => 'Kullanıcılar kendileri olarak gönderebilir:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Bu seçenek etkinleştirildiğinde, <b>tüm</b> kullanıcılar e-postanın &quot;Kimden&quot; alanında kendi birincil e-posta adreslerini kullanarak, giden sunucu üzerinden e-posta gönderebilir.<br>Bu özellik sunucu hesabından başka hesaplardan gönderime izin vermeyen SMTP sunucularında çalışmayabilir.',
);
