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
    'LBL_BASIC_SEARCH' => 'Hızlı süzgeç',
    'LBL_ADVANCED_SEARCH' => 'Gelişmiş süzgeç',
    'LBL_BASIC_TYPE' => 'Temel tür',
    'LBL_ADVANCED_TYPE' => 'Gelişmiş tür',
    'LBL_SYSOPTS_2' => 'Kurmak üzere olduğunuz SuiteCRM için hangi veri tabanı türünü kullanmak istiyorsunuz?',
    'LBL_SYSOPTS_DB' => 'Veri tabanı türünü belirtin',
    'LBL_SYSOPTS_DB_TITLE' => 'Veri tabanı türü',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Lütfen ilerlemeden önce aşağıdaki sorunları giderin:',
    'ERR_DB_VERSION_FAILURE' => 'Veri tabanı sürümü belirlenemedi.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'SuiteCRM yöneticisi için kullanıcı adını yazın. ',
    'ERR_ADMIN_PASS_BLANK' => 'SuiteCRM yönetici kullanıcısının parolasını yazın. ',

    'ERR_CHECKSYS' => 'Uyumluluk denetimi sırasında hatalar bulundu. SuiteCRM kurulumunuzun düzgün çalışabilmesi için, lütfen aşağıda listede belirtilen adımları izleyin, Yeniden denetle üzerine tıklayabilir ya da kurulumu yeniden başlatabilirsiniz.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference değeri On (php.ini dosyasından Off yapılmalıdır)',
    'ERR_CHECKSYS_CURL' => 'Bulunamadı: SuiteCRM zamanlanmış görevleri sınırlı özellikler ile çalışacak.',
    'ERR_CHECKSYS_IMAP' => 'Bulunamadı: Gelen e-posta ve kampanyaların (e-posta) kullanılabilmesi için IMAP kitaplıkları gereklidir.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Bunu şuna ayarla ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'Php.ini dosyanızda M ya da daha büyük bir değer)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Uyarı: Yazılabilir değil',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'PHP sürümünüz SuiteCRM tarafından desteklenmiyor. SuiteCRM uygulaması ile uyumlu bir PHP sürümü kurmalısınız. Lütfen yayın notlarındaki uyumluluk matrisinden desteklenen PHP sürümlerine bakın. Kullandığınız PHP sürümü ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'IIS sürümünüz SuiteCRM tarafından desteklenmiyor. SuiteCRM uygulaması ile uyumlu bir sürümü kurmalısınız. Lütfen yayın notlarındaki uyumluluk matrisinden desteklenen ISS sürümlerine bakın. Kullandığınız IIS sürümü ',
    'ERR_CHECKSYS_FASTCGI' => 'PHP için bir FastCGI işleyici eşlemesi kullanılmadığı algılandı. SuiteCRM uygulaması ile uyumlu bir sürümü kurmanız/yapılandırmanız gereklidir. Lütfen yayın notlarındaki uyumluluk matrisinden desteklenen sürümlere bakın. Ayrıntılı bilgi almak için <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> adresine bakabilirsiniz ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS/FastCGI sapı kullanırken en iyi deneyim için php.ini dosyasında fastcgi.logging değerini 0 olarak ayarlayın.',
    'LBL_DB_UNAVAILABLE' => 'Veri tabanı kullanılamıyor',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Veri tabanı desteği bulunamadı. Desteklenen veri tabanı türleri için gerekli sürücülerden en azından birine sahip olup olmadığınızı denetleyin: MySQL ya da MS SQLServer. php.ini dosyasından eklenti satırının başındaki yorum karakterlerini kaldırarak satırı etkinleştirmeniz ya da PHP sürümünümüze bağlı olarak PHP kopyasını doğru binary dosyasını yeniden derlemeniz gerekebilir. Veri tabanı desteğinin etkinleştirilmesi hakkında ayrıntılı bilgi almak için PHP belgelerine bakabilirsiniz.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'SuiteCRM uygulaması tarafından gerek duyulan XML işleme kitaplıkları bulunamadı. PHP sürümünüze bağlı olarak, php.ini dosyasında eklentileri satırlarının başındaki yorum karakterlerini kaldırarak satırları etkinleştirmeniz ya da PHP sürümünüze bağlı olarak PHP kopyasını doğru binary dosyası ile yeniden derlemeniz gerekebilir. Ayrıntılı bilgi almak için kullandığınız PHP sürümünün belgelerine bakabilirsiniz.',
    'ERR_CHECKSYS_MBSTRING' => 'SuiteCRM uygulaması tarafından gerek duyulan Multibyte Strings PHP eklentisi (mbstring) ile ilgili işlevler bulunamadı.<br/><br />mbstring modülü genellikle PHP üzerinde varsayılan olarak etkin değildir ve PHP programı derlenirken --enable-mbstring seçeneği kullanılarak etkinleştirilmelidir. Mbstring desteğinin etkinleştirilmesi ile ilgili ayrıntılı bilgi almak için kullandığınız PHP sürümünün belgelerine bakabilirsiniz.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Yapılandırma dosyası var ancak yazılabilir değil. Lütfen dosyayı yazılabilir kılmak için gerekli işlemleri yapın. İşletim sisteminize bağlı olarak chmod 766 komutunu yürüterek dosyanın izinlerini değiştirmeniz ya da dosyanın üzerine sağ tıklayıp özelliklerine eriştikten sonra, salt okunur seçeneğini kaldırmanız gerekebilir.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Yapılandırma değişikliği dosyası var ancak yazılabilir değil. Lütfen dosyayı yazılabilir kılmak için gerekli işlemleri yapın. İşletim sisteminize bağlı olarak chmod 766 komutunu yürüterek dosyanın izinlerini değiştirmeniz ya da dosyanın üzerine sağ tıklayıp özelliklerine eriştikten sonra, salt okunur seçeneğini kaldırmanız gerekebilir.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Custom klasörü var ancak yazılabilir değil. Lütfen dosyayı yazılabilir kılmak için gerekli işlemleri yapın. İşletim sisteminize bağlı olarak chmod 766 komutunu yürüterek dosyanın izinlerini değiştirmeniz ya da dosyanın üzerine sağ tıklayıp özelliklerine eriştikten sonra, salt okunur seçeneğini kaldırmanız gerekebilir.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Aşağıda listelenen dosya ya da klasörler yazılabilir değil ya da eklenemedi. İşletim sisteminize bağlı olarak chmod 755 komutunu yürüterek dosyaların ya da üst klasörün izinlerini değiştirmeniz ya da üst klasörün üzerine sağ tıklayıp özelliklerine eriştikten sonra, salt okunur seçeneğini kaldırarak tüm alt klasörlere uygulamanız gerekebilir.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "SuiteCRM uygulaması tarafından gerek duyulan JSON İşleme Kitaplıkları bulunamadı. PHP sürümünüze bağlı olarak, php.ini dosyasında eklentileri satırlarının başındaki yorum karakterlerini kaldırarak satırları etkinleştirmeniz ya da PHP sürümünüze bağlı olarak PHP kopyasını doğru binary dosyası ile yeniden derlemeniz gerekebilir. Ayrıntılı bilgi almak için kullandığınız PHP sürümünün belgelerine bakabilirsiniz.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Yapılandırma değişikliği',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Mode açık (php.ini dosyasından devre dışı bırakmak isteyebilirsiniz)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib desteği bulunamadı: zlib sıkıştırma kullanıldığında SuiteCRM başarımı önemli ölçüde artar.',
    'ERR_CHECKSYS_ZIP' => 'ZIP arşivi desteği bulunamadı: ZIP arşivi dosyalarının SuiteCRM tarafından işlenebilmesi için ZIP arşivi desteği gereklidir.',
    'ERR_CHECKSYS_PCRE' => 'PCRE kitaplığı bulunamadı: Perl biçemindeki kurallı ifade eşleştirmelerinin SuiteCRM tarafından işlenebilmesi için PCRE kitaplığı gereklidir.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE kitaplığı sürümü: Perl biçemindeki kurallı ifade eşleştirmelerinin SuiteCRM tarafından işlenebilmesi için PCRE kitaplığı 7.0 ya da üzerindeki bir sürüm gereklidir.',
    'ERR_DB_ADMIN' => 'Belirtilen veri tabanı yöneticisi kullanıcı adı ya da parolası geçersiz olduğundan veri tabanı bağlantısı kurulamadı. Lütfen geçerli bir kullanıcı adı ve parola yazın. (Hata: ',
    'ERR_DB_ADMIN_MSSQL' => 'Belirtilen veri tabanı yöneticisi kullanıcı adı ya da parola geçersiz olduğundan veri tabanı ile bağlantı kurulamadı. Lütfen geçerli bir kullanıcı adı ve parola yazın.',
    'ERR_DB_EXISTS_NOT' => 'Belirtilen veri tabanı bulunamadı.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Yapılandırma verileri bulunan bir veri tabanı zaten var. Seçilmiş veri tabanı üzerine kurulum yapmak için kurulumu yeniden çalıştırın ve "Var olan SuiteCRM tabloları silinip yeniden oluşturulsun" seçeneğini etkinleştirin. Güncellemek için yönetim panosundaki güncelleme yardımcısını kullanın. Güncelleme ile ilgili ayrıntılı bilgi almak için <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">bu bölüme bakabilirsiniz</a>.',
    'ERR_DB_EXISTS' => 'Belirtilen veri tabanı adı zaten var. Aynı adlı yeni bir veri tabanı eklenemez.',
    'ERR_DB_EXISTS_PROCEED' => 'Belirtilen veri tabanı adı zaten var. Şunlardan birini yapmayı seçebilirsiniz: <br>1. Önceki üzerine tıklayarak yeni bir veri tabanı adı yazabilirsiniz<br>2. Sonraki üzerine tıklayarak var olan veri tabanındaki tabloları silebilirsiniz. <strong>Var olan verileriniz silinir.</strong>',
    'ERR_DB_HOSTNAME' => 'Sunucu adı boş olamaz.',
    'ERR_DB_INVALID' => 'Seçilmiş veri tabanı türü geçersiz.',
    'ERR_DB_LOGIN_FAILURE' => 'Belirtilen veri tabanı sunucusu, kullanıcı adı ya da parola geçersiz olduğundan veri tabanı ile bağlantı kurulamadı. Lütfen geçerli bir veri tabanı sunucusu, kullanıcı adı ve parola yazın',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Belirtilen veri tabanı sunucusu, kullanıcı adı ya da parola geçersiz olduğundan veri tabanı ile bağlantı kurulamadı. Lütfen geçerli bir veri tabanı sunucusu, kullanıcı adı ve parola yazın',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Belirtilen veri tabanı sunucusu, kullanıcı adı ya da parola geçersiz olduğundan veri tabanı ile bağlantı kurulamadı. Lütfen geçerli bir veri tabanı sunucusu, kullanıcı adı ve parola yazın',
    'ERR_DB_MYSQL_VERSION' => 'MySQL sürümünüz (%s) SuiteCRM tarafından desteklenmiyor. SuiteCRM uygulamasıyla uyumlu bir sürüm kurmalısınız. Lütfen yayın notlarındaki uyumluluk matrisinden desteklenen MySQL sürümlerine bakın.',
    'ERR_DB_NAME' => 'Veri tabanı adı boş olamaz.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Veri tabanı adında '', '\\', '/' ya da '.' karakterleri bulunamaz",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Veri tabanı adı rakam, '#' ya da '@' karakterleriyle başlayamaz ve boşluk, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!' ya da '-' karakterlerini içeremez",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Veri tabanı adında yalnızca alfa-sayısal karakterler ve '#', '_' ya da '$' karakterleri kullanılabilir",
    'ERR_DB_PASSWORD' => 'SuiteCRM veri tabanı yöneticisi için yazılan parola ile onayı aynı değil. Lütfen parola ve onayı alanlarına aynı parolayı yeniden yazın.',
    'ERR_DB_PRIV_USER' => 'Veri tabanı yöneticisinin kullanıcı adını yazın. Bu kullanıcı veri tabanı bağlantısını kurmak için gereklidir.',
    'ERR_DB_USER_EXISTS' => 'SuiteCRM veri tabanı kullanıcısı zaten var. Aynı adlı başka bir kullanıcı oluşturulamaz. Lütfen başka bir ad yazın.',
    'ERR_DB_USER' => 'SuiteCRM veri tabanı yöneticisi için bir kullanıcı adı yazın.',
    'ERR_DBCONF_VALIDATION' => 'Lütfen ilerlemeden önce aşağıdaki sorunları giderin:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'SuiteCRM veri tabanı yöneticisi için yazılan parola ile onayı aynı değil. Lütfen parola ve onayı alanlarına aynı parolayı yeniden yazın.',
    'ERR_ERROR_GENERAL' => 'Aşağıdaki sorunlar bulundu:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Dosya silinemedi: ',
    'ERR_LANG_MISSING_FILE' => 'Dosya bulunamadı: ',
    'ERR_LANG_NO_LANG_FILE' => 'Include/language klasöründe herhangi bir dil paketi dosyası bulunamadı: ',
    'ERR_LANG_UPLOAD_1' => 'Yükleme sırasında bir sorun çıktı. Lütfen yeniden deneyin.',
    'ERR_LANG_UPLOAD_2' => 'Dil Paketleri ZIP arşivi dosyası biçiminde olmalıdır.',
    'ERR_LANG_UPLOAD_3' => 'PHP geçici dosyayı güncelleme klasörüne taşıyamadı.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Belirtilen günlük klasörü geçersiz.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Belirtilen günlük klasörü yazılabilir değil.',
    'ERR_NO_DIRECT_SCRIPT' => 'Betik doğrudan işlenemedi.',
    'ERR_NO_SINGLE_QUOTE' => 'Tek tırnak işareti şunun için kullanılamaz ',
    'ERR_PASSWORD_MISMATCH' => 'SuiteCRM yöneticisi için yazılan parola ile onayı aynı değil. Lütfen parola ve onayı alanlarına aynı parolayı yeniden yazın.',
    'ERR_PERFORM_CONFIG_PHP_1' => '<span class=stop>config.php</span> dosyasına yazılamadı.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Kurulumu sürdürmek için config.php dosyasını el ile oluşturup aşağıdaki yapılandırma bilgilerini içine kopyalayabilirsiniz. Sonraki adıma geçebilmek için <strong> kesinlikle</strong> config.php dosyasını oluşturmalısınız.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Config.php dosyasını oluşturmayı anımsadınız mı?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Uyarı: config.php dosyası yazılamadı. Dosyanın var olduğundan emin olun.',
    'ERR_PERFORM_HTACCESS_1' => ' ',
    'ERR_PERFORM_HTACCESS_2' => ' dosyasına yazılamıyor.',
    'ERR_PERFORM_HTACCESS_3' => 'Günlük dosyasına tarayıcı ile erişilmesini engellemek istiyorsanız, günlük klasörünüzde aşağıdaki satırı içeren bir .htaccess dosyası oluşturun:',
    'ERR_PERFORM_NO_TCPIP' => '<b>İnternet bağlantısı algılanamadı.</b>Bağlantı kurulduğunda, Bir SuiteCRM hesabı açmak için <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> adresine gidin. Kuruluşunuzun SuiteCRM uygulamasını nasıl kullandığı hakkında bilgi edinirsek, gereksinimlerinize uygun özellikler geliştirmeyi sürdürebiliriz.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Belirtilen oturum klasörü geçersiz.',
    'ERR_SESSION_DIRECTORY' => 'Belirtilen oturum klasörü yazılabilir değil.',
    'ERR_SESSION_PATH' => 'Özel bir oturum klasörü kullanmak istiyorsanız belirtmelisiniz.',
    'ERR_SI_NO_CONFIG' => 'Belge kök klasöründe bulunan config_si.php dosyasını katmamışsınız ya da config.php dosyasında $sugar_config_si seçeneğini belirtmemişsiniz',
    'ERR_SITE_GUID' => 'Özel bir uygulama kodu kullanmak istiyorsanız belirtmelisiniz.',
    'ERROR_SPRITE_SUPPORT' => "GD kitaplığının yeri saptanamadı. Bu nedenle CSS Sprite işlevi kullanılamayacak.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Uyarı: PHP yapılandırması en az 6MB boyutunda olan dosyaların yüklenmesine izin verecek şekilde değiştirilmelidir.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Yüklenebilecek dosya büyüklüğü',
    'ERR_URL_BLANK' => 'SuiteCRM kopyasının temel adresini yazın.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Şunun kurulum kaydı bulunamıyor',
    'ERROR_MANIFEST_TYPE' => 'Manifest dosyasında paket türü belirtilmeli.',
    'ERROR_PACKAGE_TYPE' => 'Manifest dosyasında anlaşılamayan bir paket türü belirtilmiş',
    'ERROR_VERSION_INCOMPATIBLE' => 'Yüklenen dosya bu SuiteCRM sürümü ile uyumlu değil: ',

    'LBL_BACK' => 'Önceki',
    'LBL_CANCEL' => 'İptal',
    'LBL_ACCEPT' => 'Kabul ediyorum',
    'LBL_CHECKSYS_CACHE' => 'Yazılabilir ön bellek alt klasörleri',
    'LBL_DROP_DB_CONFIRM' => 'Belirtilen adı taşıyan bir veri tabanı zaten var.<br>Şunlardan birini yapabilirsiniz:<br>1. İptal üzerine tıklayın ve yeni bir veri tabanı adı seçin ya da<br>2. Onayla üzerine tıklayarak ilerleyin. Bu durumda var olan veri tabanındaki tüm tablolar silinir. <strong>Tablolar silindiğinde önceden var olan veriler de silinir.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Bileşen',
    'LBL_CHECKSYS_CONFIG' => 'Yazılabilir SuiteCRM yapılandırma dosyası (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL modülü',
    'LBL_CHECKSYS_CUSTOM' => 'Yazılabilir özel klasör',
    'LBL_CHECKSYS_DATA' => 'Yazılabilir veri alt klasörleri',
    'LBL_CHECKSYS_IMAP' => 'IMAP modülü',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings modülü',
    'LBL_CHECKSYS_MEM_OK' => 'Tamam (sınırlama yok)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'Tamam (sınırsız)',
    'LBL_CHECKSYS_MEM' => 'PHP bellek sınırı',
    'LBL_CHECKSYS_MODULE' => 'Yazılabilir modül alt klasör ve dosyaları',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Kullanılamıyor',
    'LBL_CHECKSYS_OK' => 'Tamam',
    'LBL_CHECKSYS_PHP_INI' => 'PHP yapılandırma dosyasının (php.ini) konumu:',
    'LBL_CHECKSYS_PHP_OK' => 'Tamam (sürüm ',
    'LBL_CHECKSYS_PHPVER' => 'PHP sürümü',
    'LBL_CHECKSYS_IISVER' => 'IIS sürümü',
    'LBL_CHECKSYS_JSON' => 'JSON işleme',
    'LBL_CHECKSYS_RECHECK' => 'Yeniden denetle',
    'LBL_CHECKSYS_STATUS' => 'Durum',
    'LBL_CHECKSYS_TITLE' => 'Sistem denetimi onayı',
    'LBL_CHECKSYS_XML' => 'XML işleme',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB sıkıştırma modülü',
    'LBL_CHECKSYS_ZIP' => 'Zip işleme modülü',
    'LBL_CHECKSYS_PCRE' => 'PCRE kitaplığı',
    'LBL_CHECKSYS_FIX_FILES' => 'İlerlemeden önce aşağıdaki dosya ya da klasörleri düzeltin:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'İlerlemeden önce aşağıdaki modül klasörlerini ve bunların altındaki dosyaları düzeltin:',
    'LBL_CHECKSYS_UPLOAD' => 'Yazılabilir yükleme klasörü',
    'LBL_CLOSE' => 'Kapat',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'eklenecek',
    'LBL_CONFIRM_DB_TYPE' => 'Veri tabanı türü',
    'LBL_CONFIRM_NOT' => 'olmayacak',
    'LBL_CONFIRM_TITLE' => 'Ayarları onayla',
    'LBL_CONFIRM_WILL' => 'olacak',
    'LBL_DBCONF_DB_DROP' => 'Tablolar silinsin',
    'LBL_DBCONF_DB_NAME' => 'Veri tabanı adı',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM veri tabanı kullanıcı parolası',
    'LBL_DBCONF_DB_PASSWORD2' => 'SuiteCRM veri tabanı kullanıcı parolası onayı',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM veri tabanı kullanıcı adı',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM veri tabanı kullanıcı adı',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Veri tabanı yöneticisinin kullanıcı adı',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Veri tabanı yöneticisinin parolası',
    'LBL_DBCONF_COLLATION' => 'Karşılaştırma',
    'LBL_DBCONF_CHARSET' => 'Karakter kümesi',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Gelişmiş veri tabanı yapılandırması',
    'LBL_DBCONF_DEMO_DATA' => 'Veri tabanına örnek veriler yüklensin mi?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Örnek verileri seçin',
    'LBL_DBCONF_HOST_NAME' => 'Sunucu adı',
    'LBL_DBCONF_HOST_INSTANCE' => 'Sunucu kopyası',
    'LBL_DBCONFIG_SECURITY' => 'Güvenlik amacıyla, SuiteCRM veri tabanına bağlanma yetkisi olan bir veri tabanı kullanıcısı belirtebilirsiniz. Bu kullanıcı, bu kurulum için belirlenen veri tabanı üzerinde veri yazma, güncelleme ve okuma işlemleri yapabilmelidir. Bu kullanıcı yukarıda belirtilen veri tabanı yöneticisi olabileceği gibi yeni ya da var olan başka bir kullanıcı da olabilir.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Var olan bir kullanıcı belirtin',
    'LBL_DBCONFIG_CREATE_DD' => 'Eklenecek kullanıcıyı belirtin',
    'LBL_DBCONFIG_SAME_DD' => 'Yönetici kullanıcısı ile aynı',
    'LBL_DBCONF_TITLE' => 'Veri tabanı yapılandırması',
    'LBL_DBCONF_TITLE_NAME' => 'Veri tabanı adını yazın',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Veri tabanı kullanıcı bilgilerini yazın',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Parola',
    'LBL_DISABLED_DESCRIPTION_2' => 'Bu değişiklik yapıldıktan sonra, kurulum işlemini başlatmak için aşağıdan "Başlat" üzerine tıklayabilirsiniz. <i>Kurulum tamamlandıktan sonra \'installer_locked\' değerini \'true\' olarak değiştirmeniz istenecek.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Kurucu zaten bir kez çalıştırılmış olduğundan, güvenlik önlemi olarak, ikinci kez çalıştırılması devre dışı bırakılmış. Kurucuyu yeniden çalıştırmak istediğinizden kesinlikle eminseniz, config.php dosyasını açarak \'installer_locked\' değişkenini bularak (ya da ekleyerek) \'false\' olarak ayarlayın Satır şu şekilde görünmelidir:',
    'LBL_DISABLED_HELP_1' => 'Kurulum yardımı için, lütfen SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'destek forumları',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM kurulumu devre dışı bırakılmış',
    'LBL_HELP' => 'Yardım',
    'LBL_INSTALL' => 'Kur',
    'LBL_INSTALL_TYPE_TITLE' => 'Kurulum seçenekleri',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Kurulum türünü seçin',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Normal kurulum</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Özel kurulum</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Kurulum sırasında en az bilgiyi gerektirir. Yeni kullanıcılar için önerilir.',
    'LBL_INSTALL_TYPE_MSG3' => 'Kurulum sırasında çeşitli ek ayarların yapılabilmesini sağlar. Bu ayarların çoğu kurulumdan sonra yönetim bölümünden de yapılabilir. Deneyimli kullanıcılar için önerilir.',
    'LBL_LANG_1' => 'SuiteCRM üzerinde, varsayılan dil (ABD-İngilizce) dışında bir dil kullanmak için, istediğiniz bir dil paketini şu anda kurabilirsiniz. Dil paketlerini daha sonra SuiteCRM uygulamasının içinden de kurabilirsiniz. Bu adımı atlamak istiyorsanız, Sonraki üzerine tıklayın.',
    'LBL_LANG_BUTTON_COMMIT' => 'Kur',
    'LBL_LANG_BUTTON_REMOVE' => 'Sil',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Kaldır',
    'LBL_LANG_BUTTON_UPLOAD' => 'Yükle',
    'LBL_LANG_NO_PACKS' => 'yok',
    'LBL_LANG_PACK_INSTALLED' => 'Aşağıdaki dil paketleri kuruldu: ',
    'LBL_LANG_PACK_READY' => 'Aşağıdaki dil paketleri kurulmaya hazır: ',
    'LBL_LANG_SUCCESS' => 'Dil paketi kuruldu.',
    'LBL_LANG_TITLE' => 'Dil paketi',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'SuiteCRM kuruluyor. Bu işlem birkaç dakika sürebilir.',
    'LBL_LANG_UPLOAD' => 'Dil paketi yükle',
    'LBL_LICENSE_ACCEPTANCE' => 'Lisans onayı',
    'LBL_LICENSE_CHECKING' => 'Sistem uyumluluğu denetleniyor.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Ortam denetleniyor',
    'LBL_LICENSE_CHKDB_HEADER' => 'Veri tabanı kimlik doğrulama bilgileri denetleniyor.',
    'LBL_LICENSE_CHECK_PASSED' => 'Sistem uyumluluk denetiminden geçti.',
    'LBL_CREATE_CACHE' => 'Kuruluma hazırlanılıyor...',
    'LBL_LICENSE_REDIRECT' => 'Şu süre sonunda yönlendirilecek:',
    'LBL_LICENSE_I_ACCEPT' => 'Kabul ediyorum',
    'LBL_LICENSE_PRINTABLE' => ' Yazdırılabilir görünüm ',
    'LBL_PRINT_SUMM' => 'Özeti yazdır',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM lisansı',

    'LBL_LOCALE_NAME_FIRST' => 'Ali',
    'LBL_LOCALE_NAME_LAST' => 'Kaya',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'İşlem',
    'LBL_ML_DESCRIPTION' => 'Açıklama',
    'LBL_ML_INSTALLED' => 'Kurulum tarihi',
    'LBL_ML_NAME' => 'Ad',
    'LBL_ML_PUBLISHED' => 'Yayınlanma tarihi',
    'LBL_ML_TYPE' => 'Tür',
    'LBL_ML_UNINSTALLABLE' => 'Kaldırılamaz',
    'LBL_ML_VERSION' => 'Sürüm',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (PHP için Microsoft SQL Server sürücüsü)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli eklentisi)',
    'LBL_NEXT' => 'Sonraki',
    'LBL_NO' => 'Hayır',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Site yönetici parolası ayarlanıyor',
    'LBL_PERFORM_CONFIG_PHP' => 'SuiteCRM yapılandırma dosyası oluşturuluyor',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Veri tabanı oluşturuluyor</b> ',
    'LBL_PERFORM_CREATE_DB_2' => '<b>üzerinde</b>',
    'LBL_PERFORM_CREATE_DB_USER' => 'Veri tabanı kullanıcı adı ve parolası ekleniyor...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Varsayılan SuiteCRM verileri ekleniyor',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Varsayılan zamanlanmış görevler oluşturuluyor',
    'LBL_PERFORM_DEFAULT_USERS' => 'Varsayılan kullanıcılar ekleniyor',
    'LBL_PERFORM_DEMO_DATA' => 'Veri tabanı tabloları örnek verilerle dolduruluyor (bu işlem biraz zaman alabilir)',
    'LBL_PERFORM_DONE' => 'tamamlandı<br>',
    'LBL_PERFORM_FINISH' => 'Bitir',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' kurulumu tamamlandı!',
    'LBL_PERFORM_OUTRO_3' => 'Toplam süre: ',
    'LBL_PERFORM_OUTRO_4' => ' saniye.',
    'LBL_PERFORM_OUTRO_5' => 'Yaklaşık bellek kullanımı: ',
    'LBL_PERFORM_OUTRO_6' => ' bayt.',
    'LBL_PERFORM_SUCCESS' => 'Başarılı!',
    'LBL_PERFORM_TABLES' => 'SuiteCRM uygulama tabloları, denetim tabloları ve ilişki üst verileri oluşturuluyor',
    'LBL_PERFORM_TITLE' => 'Kurulumu yap',
    'LBL_PRINT' => 'Yazdır',
    'LBL_REG_CONF_1' => 'SuiteCRM ürün duyuruları, eğitim haberleri, özel teklifler ve özel etkinlik davetiyeleri almak için lütfen aşağıdaki kısa formu doldurun. Toplanan bilgiler satılmaz, kiralanmaz ya da üçüncü taraflar ile paylaşılmaz.',
    'LBL_REG_CONF_3' => 'Hesap açtığınız için teşekkür ederiz. SuiteCRM oturumu açmak için Bitti üzerine tıklayın. İlk kez oturum açarken "admin" kullanıcı adını ve 2. adımda yazdığınız parolayı kullanın.',
    'LBL_REG_TITLE' => 'Hesap açın',

    'LBL_REQUIRED' => '* Doldurulması zorunlu alan',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM yönetici kullanıcı adı',
    'LBL_SITECFG_ADMIN_PASS_2' => 'SuiteCRM yönetici parolası onayı',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM yönetici parolası',
    'LBL_SITECFG_APP_ID' => 'Uygulama kodu',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Bu seçenek etkinleştirildiğinde, otomatik olarak üretilen kod değerinin yerine yazdığınız uygulama kodu kullanılır. Bu kod, açtığınız oturumların başka SuiteCRM kopyalarında kullanılamamasını sağlar. SuiteCRM kopyalarından oluşan bir kümeniz varsa, kümedeki tüm kopyaların aynı uygulama kodunu kullanması gerekir.',
    'LBL_SITECFG_CUSTOM_ID' => 'Kendi uygulama kodunuzu yazın',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Bu seçenek etkinleştirildiğinde, SuiteCRM günlüklerinin kaydedileceği varsayılan klasör yerine kullanılacak bir klasör belirtmeniz gerekir. Günlük dosyası nerede olursa olsun, dosyaya bir tarayıcı üzerinden erişim .htaccess yönlendirme yöntemiyle engellenir.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Özel günlük klasörü kullanılsın',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Bu seçenek etkinleştirildiğinde, SuiteCRM oturum bilgilerinin kaydedileceği güvenli bir klasör belirtmeniz gerekir. Böylece paylaşılan sunuculara saldırılarak oturum bilgilerinin ele geçirilmesi engellenir.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'SuiteCRM için özel oturum klasörü kullanılsın',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Lütfen ilerlemeden önce aşağıdaki sorunları giderin:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Günlük klasörü',
    'LBL_SITECFG_SESSION_PATH' => 'Oturum klasörü yolu<br>(yazılabilir olmalı)',
    'LBL_SITECFG_SITE_SECURITY' => 'Güvenlik ayarlarını seçin',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Bu seçenek etkinleştirildiğinde, uygulamanın yeni sürümleri belirli aralıklarla denetlenir.',
    'LBL_SITECFG_SUITE_UP' => 'Güncellemeler otomatik olarak denetlensin',
    'LBL_SITECFG_TITLE' => 'Site yapılandırması',
    'LBL_SITECFG_TITLE2' => 'Yönetici kullanıcısını bBelirleme',
    'LBL_SITECFG_SECURITY_TITLE' => 'Site güvenliği',
    'LBL_SITECFG_URL' => 'SuiteCRM kopyasının adresi',
    'LBL_SITECFG_ANONSTATS' => 'Anonim kullanım istatistikleri gönderilsin',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Bu seçenek etkinleştirildiğinde, SuiteCRM uygulamasının kullanım bilgileri <b>anonim</b> olarak SuiteCRM kuruluşuna gönderilir. Bu bilgiler, uygulamanın nasıl kullanıldığının daha iyi anlaşılarak ürünün geliştirilmesini sağlar.',
    'LBL_SITECFG_URL_MSG' => 'Kurulumdan sonra SuiteCRM kopyasına erişmek için kullanılacak adresi yazın. Bu adres SuiteCRM uygulama sayfalarının için de temel adres olarak kullanılır. Adreste site sunucusunun adı, bilgisayar adı ya da IP adresi bulunmalıdır.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Sisteminizin adını yazın. Bu ad SuiteCRM sitesine gelen kullanıcılara tarayıcının başlık çubuğunda görüntülenir.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Kurulumdan sonra, SuiteCRM yönetici kullanıcısı (varsayılan kullanıcı adı = admin) ile oturum açmanız gerekir. Bu yönetici kullanıcısı için kullanılacak parolayı yazın. Bu parola ilk kez oturum açıldıktan sonra değiştirilebilir. Varsayılan ad yerine farklı bir yönetici kullanıcı adı da yazabilirsiniz.',
    'LBL_SITECFG_COLLATION_MSG' => 'Sisteminizin karşılaştırma (sıralama) değerini seçin. Bu ayar veri tabanı tablolarını kullandığınız dile uygun olarak oluşturur. Dilinize özel bir ayar yapılmasının gerekmediği durumlarda varsayılan değeri kullanın.',
    'LBL_SPRITE_SUPPORT' => 'Sprite desteği',
    'LBL_SYSTEM_CREDS' => 'Sistem kimlik doğrulama bilgileri',
    'LBL_SYSTEM_ENV' => 'Sistem ortamı',
    'LBL_SHOW_PASS' => 'Parolalar görüntülensin',
    'LBL_HIDE_PASS' => 'Parolalar gizlensin',
    'LBL_HIDDEN' => '<i>(gizli)</i>',
    'LBL_STEP1' => 'Adım 1 / 2 - Kurulum öncesi gereksinimler',
    'LBL_STEP2' => 'Adım 2 / 2 - Yapılandırma',
    'LBL_STEP' => 'Adım',
    'LBL_TITLE_WELCOME' => 'SuiteCRM uygulamasına hoş geldiniz ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Kuruluma hazır mısınız? ',
    'REQUIRED_SYS_COMP' => 'Gerekli sistem bileşenleri',
    'REQUIRED_SYS_COMP_MSG' =>
        'Başlamadan önce lütfen aşağıdaki sistem bileşenlerinin desteklenen sürümlerinin kurulmuş olduğundan emin olun:<br>
<ul>
<li> Veri tabanı/Veri tabanı yönetim sistemi (Örnekler: MariaDB, MySQL ya da SQL Server)</li>
<li> Site sunucusu (Apache, IIS)</li>
</ul>
Kurulumunu gerçekleştirdiğiniz SuiteCRM sürümü ile uyumlu bileşenleri yayın notları içindeki uyumluluk matrisinde bulabilirsiniz.<br>',
    'REQUIRED_SYS_CHK' => 'Temel sistem denetimi',
    'REQUIRED_SYS_CHK_MSG' =>
        'Kurulum işlemi başlatıldığında, kurulumun sorunsuz yapılabilmesi için SuiteCRM dosyalarının bulunduğu site sunucusunda bir sistem denetimi yapılarak
sistemin doğru yapılandırıldığından ve tüm gerekli bileşenlerin kurulmuş olduğundan
emin olunur.<br><br>
Şu denetimler yapılır:<br>
<ul>
<li><b>PHP sürümü</b> &#8211; uygulamaya uygun olmalıdır</li>
<li><b>Oturum değişkenleri</b> &#8211; doğru çalışmalıdır</li>
<li><b>MB Strings</b> &#8211; kurulmuş ve php.ini içinde etkinleştirilmiş olmalıdır</li>
<li><b>Veri tabanı desteği</b> &#8211; MariaDB, MySQL ya da SQL Server desteği var olmalıdır</li>
<li><b>Config.php</b> &#8211; var olmalı ve yazma izinleri verilmiş olmalıdır</li>
<li>Aşağıdaki SuiteCRM klasörleri yazılabilir olmalıdır:<ul><li><b>/custom</li>
<li>/cache</li>
<li>/modules</li>
<li>/upload</b></li></ul></li></ul>
Denetim sırasında bir sorun çıkarsa kurulumu sürdüremezsiniz.
Sorunun ne olduğunu açıklayan bir hata iletisi görüntülenir.
Sorunu giderdikten sonra, sistem denetimini yeniden yaparak kurulumu sürdürebilirsiniz.<br>',


    'REQUIRED_INSTALLTYPE' => 'Normal ya da özel kurulum',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Sistem denetimi tamamlandığında normal ya da özel kurulum
türlerinden birini seçebilirsiniz.<br><br>
<b>Normal</b> ve <b>Özel</b> kurulum türleri için şunları bilmeniz gerekir:<br>
<ul>
<li>SuiteCRM verisini tutacak <b>Veri tabanı türü</b> <ul><li>Uyumlu veri tabanı
türleri: MariaDB, MySQL ya da SQL Server.<br><br></li></ul></li>
<li> Veri tabanının bulunduğu <b>Site sunucusunun</b> ya da bilgisayarın (sunucu) adı
<ul><li>Veri tabanı, SuiteCRM dosyalarının bulunduğu site sunucusu ile aynı sunucu üzerinde bulunuyorsa <i>localhost</i> olabilir.<br><br></li></ul></li>
<li>SuiteCRM verilerinin kaydedileceği <b>veri tabanının adı</b></li>
<ul>
<li> Var olan bir veri tabanını kullanmak isteyebilirsiniz.
Var olan bir veri tabanının adını yazarsanız var olan veri tabanındaki tablolar 
kurulum sırasında SuiteCRM veri tabanının şeması belirtildiğinde silinir.</li>
<li> Veri tabanı yoksa belirttiğiniz yeni veri tabanı adı kurulum sırasında
oluşturulan kopya için kullanılır.<br><br></li>
</ul>
<li><b>Veri tabanı yöneticisi kullanıcı adı ve parolası</b> <ul><li>Veri tabanı yönetici kullanıcısı tablo ve kullanıcılar ekleyebilmeli ve veri tabanına yazabilmelidir.</li><li>Veri tabanınız 
yerel bilgisayarınızda kurulu değil ise ve veri tabanı yöneticisi değilseniz
buraya yazılacak bilgileri öğrenmek için sistem yöneticiniz ile görüşebilirsiniz.<br><br></ul></li></li>
<li> <b>SuiteCRM veri tabanı kullanıcı adı ve parolası</b>
</li>
<ul>
<li> Kullanıcı veri tabanı yöneticisi ya da var olan başka bir veri tabanı 
kullanıcısı olabilir.</li>
<li> Bu amaçla yeni bir veri tabanı kullanıcısı oluşturmak isterseniz, 
kurulum sırasında yeni bir kullanıcı adı ve parola belirtebilirsiniz.
Böylece kurulum sırasında bu kullanıcı oluşturulur.</li>
</ul></ul><p>

<b>Özel</b> Kurulum için şunların da bilinmesi gerekir:<br>
<ul>
<li> Kurulum sonrasında <b>SuiteCRM kopyasına erişmek için kullanılacak adres</b>.
Bu adres site sunucusunun adı, bilgisayar adı ya da IP adresini içermelidir.<br><br></li>
<li> [İsteğe bağlı] <b>Oturum klasörünün yolu</b> Güvenlik nedeniyle
paylaşılan sunucularda oturum bilgilerinin ele geçirilmesini engellemek için 
özel bir oturum klasörü kullanmak istiyorsanız.<br><br></li>
<li> [İsteğe bağlı] <b>Günlük klasörünün yolu</b> varsayılan SuiteCRM günlük klasörünü değiştirmek istiyorsanız.<br><br></li>
<li> [İsteğe bağlı] Otomatik olarak üretilen kod değerinin yerine kullanılacak <b>Uygulama kodu</b>.
Bu kod, açtığınız oturumların başka SuiteCRM kopyalarında kullanılamamasını sağlar.<br><br></li>
<li> <b>Karakter kümesi</b> diliniz için kullanılan karakter kümesi.<br><br></li></ul>
Ayrıntılı bilgi almak için kurulum rehberine bakabilirsiniz.                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Lütfen kuruluma başlamadan önce aşağıdaki önemli bilgileri okuyun. Bu bilgiler uygulamayı kurmaya hazır olup olmadığınızı belirlemenize yardımcı olur.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Dilinizi seçin</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Kurulum yardımcısı',
    'LBL_WIZARD_TITLE' => 'SuiteCRM kurulum yardımcısı: ',
    'LBL_YES' => 'Evet',

    'LBL_PATCHES_TITLE' => 'Son yamaları kur',
    'LBL_MODULE_TITLE' => 'Dil paketlerini kur',
    'LBL_PATCH_1' => 'Bu adımı atlamak için Sonraki üzerine tıklayın.',
    'LBL_PATCH_TITLE' => 'Sistem yaması',
    'LBL_PATCH_READY' => 'Şu yama(lar) kurulmaya hazır:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM, bu site sunucusuna bağlandığında önemli bilgileri depolamak için PHP oturum mekanizmasını kullanır. PHP kurulumunuz için oturum bilgileri doğru şekilde yapılandırılmamış.<br><br>Sık karşılaşılan bir yanlış yapılandırma, <b>'session.save_path'</b> ayarının geçersiz bir klasörü göstermesidir.<br><br>Lütfen aşağıda görüntülenen php.ini dosyasında <a target=_new href=\"http://us2.php.net/manual/en/ref.session.php\">PHP yapılandırmasını</a> düzeltin.",
    'LBL_SESSION_ERR_TITLE' => 'PHP oturum yapılandırması hatalı',
    'LBL_SYSTEM_NAME' => 'Sistem adı',
    'LBL_COLLATION' => 'Karşılaştırma ayarları',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Bu SuiteCRM kopyasının sistem adını yazın.',
    'LBL_PATCH_UPLOAD' => 'Yerel bilgisayarınızdan bir yama dosyası seçin',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP 5 ya da üzerindeki bir sürüm gerekli.',
    'LBL_MINIMUM_PHP_VERSION' => 'Gerekli en düşük PHP sürümü 5.1.0. Önerilen PHP sürümü 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Geçerli php sürümünüz ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Önerilen php sürümü 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP geriye dönük uyumluluk kipi etkinleştirilmiş. İlerlemek için zend.ze1_compatibility_mod seçeneğini Off olarak ayarlayın',
    'LBL_STREAM' => 'PHP stream kullanımına izin veriyor',

    'advanced_password_new_account_email' => array(
        'subject' => 'Yeni hesap bilgileri',
        'type' => 'sistem',
        'description' => 'Bu kalıp, sistem yöneticisi tarafından bir kullanıcıya yeni bir parola gönderilmesi için kullanılır.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Kullanıcı adınızı ve geçici parolanızı aşağıda görebilirsiniz: </p><p>Kullanıcı adı : $contact_user_user_name </p><p>Parola : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Yukarıdaki parolayı kullanarak oturum açtıktan yaptığınız seçime göre parolayı değiştirmeniz gerekebilir.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Aşağıda kullanıcı adınızı ve geçici parolanızı görebilirsiniz:
Kullanıcı adı : $contact_user_user_name
Parola           : $contact_user_user_hash

$config_site_url

Yukarıdaki parolayı kullanarak oturum açtıktan yaptığınız seçime göre parolayı değiştirmeniz gerekebilir.',
        'name' => 'Sistem tarafından oluşturulan parola e-postası',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Hesap parolanızı sıfırlayın',
        'type' => 'sistem',
        'description' => "Bu kalıp bir kullanıcıya hesap parolasını sıfırlama bağlantısını göndermek için kullanılır.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>$contact_user_pwd_last_changed zamanında hesap parolanızın sıfırlanması için istekte bulunuldu. </p><p>Parolanızı sıfırlamak için aşağıdaki bağlantıya tıklayın:</p><p> $contact_user_link_guid </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
$contact_user_pwd_last_changed zamanında hesap parolanızın sıfırlanması için istekte bulunuldu. 

Parolanızı sıfırlamak için aşağıdaki bağlantıya tıklayın:

$contact_user_link_guid',
        'name' => 'Parolamı unuttum e-postası',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'İki aşamalı kimlik doğrulama kodu',
        'type' => 'sistem',
        'description' => "Bu kalıp bir kullanıcıya iki aşamalı kimlik doğrulama kodunu göndermek için kullanılır.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>İki aşamalı kimlik doğrulama kodu <b>$code</b>.</p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            'İki aşamalı kimlik doğrulama kodu $code.',
        'name' => 'İki aşamalı kimlik doğrulama e-postası',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Kimden" adı:',
    'LBL_FROM_ADDR' => '"Kimden" adresi:',

    'LBL_WIZARD_SMTP_DESC' => 'Atama bildirimleri ve yeni kullanıcı parolaları gibi bilgilerin gönderilmesi için kullanılacak e-posta hesabını yazın. Kullanıcılar SuiteCRM tarafından gönderilen e-postaların bu e-posta hesabından gönderildiğini görür.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-posta hizmeti sağlayıcınızı seçin:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Diğer',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP sunucu özellikleri',
    'LBL_MAIL_SMTPSERVER' => 'SMTP sunucusu:',
    'LBL_MAIL_SMTPPORT' => 'SMTP bağlantı noktası:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP kimlik doğrulaması kullanılsın',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP SSL ya da TLS üzerinden kullanılsın',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-posta adresi:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail parolası:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Kullanıcılar giden e-postalar için bu hesabı kullanabilsin:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Bu seçenek etkinleştirildiğinde, tüm kullanıcılar sistem bildirim ve uyarılarını göndermek için kullanılan giden e-posta hesabını kullanarak e-posta gönderebilir. Devre dışı bırakıldığında, kullanıcıların giden e-posta sunucusunu kullanabilmesi için kendi hesap bilgilerini yazması gerekir.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail parolası:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail kullanıcı adı:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange parolası:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange kullanıcı adı:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange sunucu bağlantı noktası:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange sunucusu:',


    'LBL_MAIL_SMTPUSER' => 'SMTP kullanıcı adı:',
    'LBL_MAIL_SMTPPASS' => 'SMTP parolası:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Marka',
    'LBL_WIZARD_SYSTEM_DESC' => 'SuiteCRM uygulamasının marka ayarlarını yapmak için kuruluşunuzun adını ve logosunu belirtin.',
    'SYSTEM_NAME_WIZARD' => 'Ad:',
    'SYSTEM_NAME_HELP' => 'Tarayıcının başlık çubuğunda görüntülenecek ad.',
    'NEW_LOGO' => 'Logo görseli seçin:',
    'NEW_LOGO_HELP' => 'Görsel dosyası .png ya da .jpg biçiminde olabilir. Yükseklik en fazla 170 piksel, genişlik en fazla 450 piksel olmalıdır. Herhangi bir boyutu daha büyük olan görseller bu ölçülere göre yeniden boyutlandırılır.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Yükle',
    'CURRENT_LOGO' => 'Geçerli logo:',
    'CURRENT_LOGO_HELP' => 'Bu logo SuiteCRM uygulaması oturum açma ekranının ortasında görüntülenir.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Senaryo seçimi',
    'LBL_WIZARD_SCENARIO_DESC' => 'Bu ayar görüntülenecek modüllerin kullanım amacınıza uygun şekilde düzenlenmesini sağlar. Modüller kurulumdan sonra yönetim bölümünden etkinleştirilebilir.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Yapılandırma dosyasında (config.php) belirtilmiş bir senaryo yok',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Sistem yerelleştirme ayarları',
    'LBL_WIZARD_LOCALE_DESC' => 'SutieCRM verilerinin coğrafi konuma göre görüntülenme biçimini belirtin. Buradan yapılan ayarlar varsayılan ayarlar olur. Kullanıcılar daha sonra ayarlarını kendi istedikleri şekilde değiştirebilir.',
    'LBL_DATE_FORMAT' => 'Tarih biçimi:',
    'LBL_TIME_FORMAT' => 'Saat biçimi:',
    'LBL_TIMEZONE' => 'Saat dilimi:',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_CURRENCY' => 'Para birimi:',
    'LBL_CURRENCY_SYMBOL' => 'Para birimi simgesi:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 para birimi kodu:',
    'LBL_NUMBER_GROUPING_SEP' => 'Binlik hane ayracı:',
    'LBL_DECIMAL_SEP' => 'Ondalık simgesi:',
    'LBL_NAME_FORMAT' => 'Ad biçimi:',
    'UPLOAD_LOGO' => 'Lütfen logo yüklenirken bekleyin...',
    'ERR_UPLOAD_FILETYPE' => 'Bu dosya türüne izin verilmiyor. Lütfen bir jpeg ya da png görseli yükleyin.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Bilinmeyen bir dosya yükleme sorunu çıktı.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Yüklenen dosyanın boyutu php.ini yapılandırma dosyasında belirtilen upload_max_filesize değerinden büyük.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Yüklenen dosyanın boyutu HTML formunda belirtilen MAX_FILE_SIZE değerinden büyük.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Dosyanın yalnızca bir bölümü yüklenebildi.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Herhangi bir dosya yüklenmedi.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Bir geçici klasör bulunamadı.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Dosya diske yazılamadı.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Bir PHP eklentisi dosya yüklemeyi durdurdu. PHP, hangi eklentinin dosya yüklemesini durduğu ile ilgili bir bilgi vermedi.',

    'LBL_INSTALL_PROCESS' => 'Kur...',

    'LBL_EMAIL_ADDRESS' => 'E-posta adresi:',
    'ERR_ADMIN_EMAIL' => 'Yönetici e-posta adresi doğru değil.',
    'ERR_SITE_URL' => 'Site adresinin doldurulması zorunludur.',

    'STAT_CONFIGURATION' => 'İlişkiler ayarlanıyor...',
    'STAT_CREATE_DB' => 'Veri tabanı ekleniyor...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Varsayılan ayarlar ekleniyor...',
    'STAT_INSTALL_FINISH' => 'Kurulum tamamlanıyor...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Kurulum tamamlandı, <a href="%s"> Lütfen oturum açın...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Lütfen önce lisansı kabul edin',

    'LBL_MORE_OPTIONS_TITLE' => 'Diğer ayarlar',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Veri tabanı sorunu',
    'LBL_OLD_PHP' => 'Eski PHP sürümü algılandı!',
    'LBL_OLD_PHP_MSG' => 'SuiteCRM için önerilen PHP sürümü %s.<br />Kullanılabilecek en düşük PHP sürümü %s<br />Kullandığınız PHP sürümü %s ve kullanım süresi bitmiş:<a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Lütfen PHP sürümünüzü yükseltmeyi değerlendirin. ',
    'LBL_OLD_PHP_OK' => 'Risklerin farkındayım ve kuruluma başlamak istiyorum.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Kullanıcı',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Veri tabanı adı',
    'LBL_DBCONFIG_MSG3' => 'Kurmak üzere olduğunuz SuiteCRM kopyasının verilerinin kaydedileceği veri tabanının adı.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Sunucu adı',
    'LBL_DBCONFIG_MSG2' => 'Veri tabanının bulunduğu site sunucusunun adı ya da bilgisayarın (sunucu) adı (www.sitem.com gibi). Yerel bir kurulum yapıyorsanız, başarım açısından \'127.0.0.1\' yerine \'localhost\' kullanmanız daha iyi olur.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'SuiteCRM veri tabanını kurmak için, veri tabanına tablo ve kullanıcı ekleyebilecek ve veri yazabilecek bir yönetici kullanıcı adı ve parolası gereklidir.'
);
