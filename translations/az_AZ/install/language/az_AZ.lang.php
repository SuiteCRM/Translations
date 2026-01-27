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
    'LBL_BASIC_SEARCH' => 'Sürətli Filtirləmə',
    'LBL_ADVANCED_SEARCH' => 'Qabaqcıl Filtirləmə',
    'LBL_BASIC_TYPE' => 'Əsas növ',
    'LBL_ADVANCED_TYPE' => 'Qabaqcıl növ',
    'LBL_SYSOPTS_2' => 'Quraşdırmaq üzrə olduğunuz SuiteCRM nümunəsi üçün hansı verilənlər bazası növü istifadə olunacaq?',
    'LBL_SYSOPTS_DB' => 'Verilənlər Bazasının növünü təyin edin',
    'LBL_SYSOPTS_DB_TITLE' => 'Verilənlər Bazasının Tipi',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Zəhmət olmasa davam etmədən əvvəl aşağıdakı səhvləri düzəldin:',
    'ERR_DB_VERSION_FAILURE' => 'Verilənlər bazasının versiyasını yoxlamaq mümkün deyil.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'SuiteCRM admin istifadəçisi üçün istifadəçi adını təmin edin. ',
    'ERR_ADMIN_PASS_BLANK' => 'SuiteCRM admin istifadəçisinin parolunu təqdim edin. ',

    'ERR_CHECKSYS' => 'Uyğunluq yoxlaması zamanı səhvlər aşkar edilmişdir. SuiteCRM Qurğusunun düzgün işləməsi üçün, zəhmət olmasa aşağıda göstərilən məsələləri həll etmək üçün lazımi addımları atın və ya təkrar yoxla düyməsini basın və ya yenidən qurmağa cəhd edin.',
    'ERR_CHECKSYS_CALL_TIME' => 'Zəng vaxtı keçidinə icazə verin Referans Aktivdir (bu, php.ini-də Deaktiv olaraq təyin edilməlidir)',
    'ERR_CHECKSYS_CURL' => 'Tapılmad: SuiteCRM Planlaşdırıcısı məhdud funksionallıqla işləyəcək.',
    'ERR_CHECKSYS_IMAP' => 'Tapılmadı: Gələn e-poçt və Kampaniyalar (E-poçt) IMAP kitabxanalarını tələb edir. Heç biri funksional olmayacaq.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Bunu təyin edin ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'php.ini faylınızda M və ya daha böyük kimi təyin edin)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Xəbərdarlıq: Yazıla bilməz',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'PHP versiyanız SuiteCRM tərəfindən dəstəklənmir. SuiteCRM proqramı ilə uyğun bir versiyanı yükləməlisiniz. Dəstəklənən PHP versiyaları üçün Buraxılış Qeydlərin-də Uyğunluq Matrisinə müraciət edin. Sizin versiyanız ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Sizin IIS versiyanız SuiteCRM tərəfindən dəstəklənmir. Siz SuiteCRM tətbiqi ilə uyğun olan versiyanı quraşdırmalısınız. Lütfən, dəstəklənən IIS versiyaları üçün Buraxılış Qeydlərindəki Uyğunluq Matrisinə müraciət edin. Sizin versiyanızdır ',
    'ERR_CHECKSYS_FASTCGI' => 'PHP üçün FastCGI işləyici xəritəsindən istifadə etmədiyinizi aşkar edirik. Siz SuiteCRM tətbiqi ilə uyğun olan versiyanı quraşdırmalı/konfiqurasiya etməlisiniz. Lütfən, dəstəklənən versiyalar üçün Buraxılış Qeydlərindəki Uyğunluq Matrisinə müraciət edin. Təfərrüatlar üçün <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a>-ə baxın ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'IIS / FastCGI sapı istifadə edərkən ən yaxşı təcrübə üçün php.ini faylında fastcgi.logging dəyərini 0 olaraq seçin.',
    'LBL_DB_UNAVAILABLE' => 'Verilənlər bazası əlçatan deyil',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Database Support tapılmadı. Zəhmət olmasa, aşağıdakı dəstəklənən Database Növlərindən biri üçün lazımi drayverlərə malik olduğunuzdan əmin olun: MySQL və ya MS SQLServer. Siz PHP versiyanızdan asılı olaraq php.ini faylında genişlənməni şərh etməli və ya düzgün ikili fayl ilə yenidən tərtib etməlisiniz. Verilənlər Bazası Dəstəyini necə aktivləşdirmək barədə ətraflı məlumat üçün PHP Təlimatınıza baxın.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'SuiteCRM tətbiqi üçün lazım olan XML Parser Kitabxanaları ilə əlaqəli funksiyalar tapılmadı. Siz PHP versiyanızdan asılı olaraq php.ini faylında genişlənməni şərh etməli və ya düzgün ikili fayl ilə yenidən tərtib etməlisiniz. Əlavə məlumat üçün PHP Təlimatınıza baxın.',
    'ERR_CHECKSYS_MBSTRING' => 'SuiteCRM tətbiqi üçün lazım olan Multibyte Strings PHP genişləndirilməsi (mbstring) ilə əlaqəli funksiyalar tapılmadı. <br/><br/>Ümumiyyətlə, mbstring modulu PHP-də defolt olaraq aktivləşdirilmir və PHP binar sistemi qurulduqda --enable-mbstring ilə aktivləşdirilməlidir. Lütfən, mbstring dəstəyini necə aktivləşdirmək barədə ətraflı məlumat üçün PHP Təlimatınıza baxın.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Config faylı mövcuddur, lakin yazıla bilən deyil. Zəhmət olmasa faylı yazıla bilən hala gətirmək üçün lazımi addımları atın. Əməliyyat sisteminizdən asılı olaraq bu, chmod 766\'nı istifadə edərək icazələrin dəyişdirilməsi üçün və ya xüsusiyyətləri əldə etmək üçün faylın adına sağdan vurun və yalnız oxu seçimini aradan qaldırın.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "SuiteCRM tətbiqi üçün lazım olan JSON Parser Kitabxanaları ilə əlaqəli funksiyalar tapılmadı. Siz PHP versiyanızdan asılı olaraq php.ini faylında genişlənməni şərh etməli və ya düzgün ikili fayl ilə yenidən tərtib etməlisiniz. Əlavə məlumat üçün PHP Təlimatınıza baxın.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Konfiqurasiyanın ləğvi',
    'ERR_CHECKSYS_SAFE_MODE' => 'Təhlükəsiz rejimi Aktivdir (php.ini-də deaktiv etmək istəyə bilərsiniz)',
    'ERR_CHECKSYS_ZLIB' => 'ZLib dəstəyi tapılmadı: SuiteCRM zlib sıxılma ilə böyük performans faydaları əldə edir.',
    'ERR_CHECKSYS_ZIP' => '. ZIP dəstəyi tapılmadı: SuiteCRM sıxılmış faylları emal etmək üçün ZIP dəstəyinə ehtiyac duyur.',
    'ERR_CHECKSYS_PCRE' => 'PCRE kitabxanası tapılmadı: SuiteCRM müntəzəm ifadə nümunəsi uyğunluğunun Perl üslubunu emal etmək üçün PCRE kitabxanasına ehtiyac duyur.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE kitabxana versiyası: SuiteCRM müntəzəm ifadə nümunəsi uyğunluğunun Perl üslubunu emal etmək üçün PCRE kitabxanası 7.0 və ya daha yuxarı tələb edir.',
    'ERR_DB_ADMIN' => 'Verilən verilənlər bazası administratorunun istifadəçi adı və/yaxud parolu etibarsızdır və verilənlər bazası ilə əlaqə qurmaq mümkün olmadı. Zəhmət olmasa etibarlı istifadəçi adı və parol daxil edin. (Xəta: ',
    'ERR_DB_ADMIN_MSSQL' => 'Verilən verilənlər bazası administratorunun istifadəçi adı və/yaxud şifrə etibarsızdır və verilənlər bazası ilə əlaqə qurmaq mümkün olmadı. Zəhmət olmasa etibarlı istifadəçi adı və şifrə daxil edin.',
    'ERR_DB_EXISTS_NOT' => 'Göstərilən verilənlər bazası mövcud deyil.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Verilənlər bazası konfiqurasiya məlumatları ilə artıq mövcuddur. Quraşdırmanı seçilmiş verilənlər bazası ilə işə salmaq üçün quraşdırmanı yenidən işə salın və seçin: "Mövcud SuiteCRM cədvəlləri atılsın və yenidən yaradılsın?". Təkmilləşdirmək üçün Admin Konsolunda Təkmilləşdirmə Wizardından istifadə edin. <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">burada</a> yerləşən təkmilləşdirmə sənədlərini oxuyun.',
    'ERR_DB_EXISTS' => 'Təqdim olunan Verilənlər Bazasının Adı artıq mövcuddur -- eyni adlı başqasını yarada bilməz.',
    'ERR_DB_EXISTS_PROCEED' => 'Verilən Verilənlər Bazasının Adı artıq mövcuddur. Siz<br>1. geri düyməsini basın və yeni verilənlər bazası adını seçin <br>2. növbəti klikləyin və davam edin, lakin bu verilənlər bazasındakı bütün mövcud cədvəllər silinəcək. <strong>Bu o deməkdir ki, cədvəllər və məlumatlarınız uçacaq.</strong>',
    'ERR_DB_HOSTNAME' => 'Şəbəkə adı boş ola bilməz.',
    'ERR_DB_INVALID' => 'Yanlış verilənlər bazası növü seçildi.',
    'ERR_DB_LOGIN_FAILURE' => 'Verilən verilənlər bazası hostu, istifadəçi adı və/yaxud şifrə etibarsızdır və verilənlər bazası ilə əlaqə qurmaq mümkün deyil. Lütfən, etibarlı host, istifadəçi adı və şifrə daxil edin',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Verilən verilənlər bazası hostu, istifadəçi adı və/yaxud şifrə etibarsızdır və verilənlər bazası ilə əlaqə qurmaq mümkün deyil. Lütfən, etibarlı host, istifadəçi adı və şifrə daxil edin',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Verilən verilənlər bazası hostu, istifadəçi adı və/yaxud şifrə etibarsızdır və verilənlər bazası ilə əlaqə qurmaq mümkün deyil. Lütfən, etibarlı host, istifadəçi adı və şifrə daxil edin',
    'ERR_DB_MYSQL_VERSION' => 'MySQL versiyanız (%s) SuiteCRM tərəfindən dəstəklənmir. Siz SuiteCRM tətbiqi ilə uyğun olan versiyanı quraşdırmalısınız. Dəstəklənən MySQL versiyaları üçün Buraxılış Qeydlərindəki Uyğunluq Matrisinə müraciət edin.',
    'ERR_DB_NAME' => 'Verilənlər bazasının adı boş ola bilməz.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Verilənlər bazasının adında '\\', '/' və ya '.' ola bilməz.",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Verilənlər bazasının adı rəqəm, '#' və ya '@' ilə başlaya bilməz və boşluq ola bilməz, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!' və ya '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Verilənlər bazasının adı yalnız hərf-rəqəm simvollarından və '#', '_' və ya '$' simvollarından ibarət ola bilər",
    'ERR_DB_PASSWORD' => 'SuiteCRM məlumat bazası administratoru üçün verilən şifrələr uyğun gəlmir. Zəhmət olmasa şifrələr sahələrində eyni şifrələri təkrar daxil edin.',
    'ERR_DB_PRIV_USER' => 'Verilənlər bazası administratorunun istifadəçi adını təmin edin. İstifadəçi verilənlər bazasına ilkin qoşulma üçün tələb olunur.',
    'ERR_DB_USER_EXISTS' => 'SuiteCRM verilənlər bazası istifadəçisi üçün istifadəçi adı artıq mövcuddur -- eyni adlı başqasını yarada bilməz. Zəhmət olmasa yeni istifadəçi adı daxil edin.',
    'ERR_DB_USER' => 'SuiteCRM verilənlər bazası administratoru üçün istifadəçi adı daxil edin.',
    'ERR_DBCONF_VALIDATION' => 'Zəhmət olmasa davam etmədən əvvəl aşağıdakı səhvləri düzəldin:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'SuiteCRM verilənlər bazası istifadəçisi üçün təqdim edilən şifrələr uyğun gəlmir. Zəhmət olmasa eyni şifrələri 
 şifrə sahələrinə yenidən daxil edin.',
    'ERR_ERROR_GENERAL' => 'Zəhmət olmasa davam etmədən əvvəl aşağıdaki səhvləri düzəldin:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Faylı silmək mümkün deyil: ',
    'ERR_LANG_MISSING_FILE' => 'Faylı tapmaq mümkün deyil: ',
    'ERR_LANG_NO_LANG_FILE' => 'İnclude/language daxilində heç bir dil paketi faylı tapılmadı: ',
    'ERR_LANG_UPLOAD_1' => 'Sizin yükləməniz ilə bağlı bir problem baş verdi. Zəhmət olmasa bir daha cəhd edin.',
    'ERR_LANG_UPLOAD_2' => 'Dil Paketlərinin ZIP arxivi olmalıdır.',
    'ERR_LANG_UPLOAD_3' => 'PHP müvəqqəti faylı təkmilləşdirmə qovluğuna köçürə bilmədi.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Göstərilən log kataloqu etibarsızdır.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Təqdim olunan log kataloqu yazıla bilən kataloq deyil.',
    'ERR_NO_DIRECT_SCRIPT' => 'Skripti birbaşa emal etmək mümkün deyil.',
    'ERR_NO_SINGLE_QUOTE' => 'Tək tiraj işarələnməsindən istifadə etmək olmur ',
    'ERR_PASSWORD_MISMATCH' => 'SuiteCRM administratoru üçün verilən şifrələr uyğun gəlmir. Zəhmət olmasa şifrələr sahələrində eyni şifrələri təkrar daxil edin.',
    'ERR_PERFORM_CONFIG_PHP_1' => '<span class=stop>config.php</span> faylına yazmaq mümkün deyil.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Config.php faylını əl ilə yarada və konfiqurasiya məlumatını config.php faylına yapışdıraraq bu quraşdırmaya davam edə bilərsiniz. Ancaq, bir sonraki addıma davam etmədən əvvəl <strong>mütləq</strong> config.php faylını yaradın.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Config.php faylını yaratmağı xatırladınız?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Xəbərdarlıq: Config.php faylına yazıla bilmədi. Xahiş edirik mövcud olduğundan əmin olun.',
    'ERR_PERFORM_HTACCESS_1' => 'yazmaq olmur.',
    'ERR_PERFORM_HTACCESS_2' => 'Fayla',
    'ERR_PERFORM_HTACCESS_3' => 'Günlük faylınızı brauzer vasitəsilə əldə etmək üçün təhlükəsiz etmək istəyirsinizsə, xətt ilə log kataloqunuzda .htaccess faylı yaradın:',
    'ERR_PERFORM_NO_TCPIP' => '<b>İnternet bağlantısını aşkar edə bilmədik.</b> Bağlantınız olduqda, <a href="https://www.suitecrm.com/">https://www.suitecrm.com saytına daxil olun. /</a> SuiteCRM ilə qeydiyyatdan keçin. Şirkətinizin SuiteCRM-dən necə istifadə etməyi planlaşdırdığı barədə bizə bir az məlumat verməklə, biz həmişə biznes ehtiyaclarınız üçün düzgün tətbiqi təqdim etdiyimizi təmin edə bilərik.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Təqdim olunan sessiya kataloqu etibarlı kataloq deyil.',
    'ERR_SESSION_DIRECTORY' => 'Təqdim olunan sessiya kataloqu yazıla bilən kataloq deyil.',
    'ERR_SESSION_PATH' => 'Özünüzü təyin etmək istəyirsinizsə, sessiya yolu tələb olunur.',
    'ERR_SI_NO_CONFIG' => 'Siz sənəd kökünə config_si.php daxil etməmisiniz və ya config.php-də $sugar_config_si təyin etməmisiniz',
    'ERR_SITE_GUID' => 'Fərdi proqram İD-dən istifadə etmək istəyirsinizsə, onu göstərməlisiniz.',
    'ERROR_SPRITE_SUPPORT' => "Hazırda biz GD kitabxanasının yerini tapa bilmirik, nəticədə siz CSS Sprite funksionallığından istifadə edə bilməyəcəksiniz.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Fayl ölçüsünü yükləyin',
    'ERR_URL_BLANK' => 'SuiteCRM nümunəsi üçün əsas URL təmin edin.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Quraşdırma qeydini tapa bilmədi',
    'ERROR_MANIFEST_TYPE' => 'Manifest faylı paket növünü göstərməlidir.',
    'ERROR_PACKAGE_TYPE' => 'Manifest faylında tanınmayan paket növü təyin edilib',
    'ERROR_VERSION_INCOMPATIBLE' => 'Yüklənmiş fayl SuiteCRM bu versiyası ilə uyğun deyil: ',

    'LBL_BACK' => 'Geriyə',
    'LBL_CANCEL' => 'İmtina',
    'LBL_ACCEPT' => 'Qəbul Edirəm',
    'LBL_CHECKSYS_CACHE' => 'Yazıla bilən Keş Alt Kataloqları',
    'LBL_DROP_DB_CONFIRM' => 'Verilən Verilənlər Bazasının Adı artıq mövcuddur.<br>Siz bunlardan birini edə bilərsiniz:<br>1. Ləğv et düyməsini sıxın və yeni verilənlər bazası adını seçin və ya <br>2. Qəbul et düyməsini sıxın və davam edin. Verilənlər bazasındakı bütün mövcud cədvəllər silinəcək. <strong>Bu o deməkdir ki, bütün cədvəllər və əvvəllər mövcud olan məlumatlar silinəcək.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponent',
    'LBL_CHECKSYS_CONFIG' => 'Yazıla bilən SuiteCRM Konfiqurasiya Faylı (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL modulu',
    'LBL_CHECKSYS_CUSTOM' => 'Yazıla bilən Xüsusi Kataloq',
    'LBL_CHECKSYS_DATA' => 'Yazıla bilən verilənlər alt kataloqları',
    'LBL_CHECKSYS_IMAP' => 'IMAP Modulu',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB strings modulu',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Limit yoxdur)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Limitsiz)',
    'LBL_CHECKSYS_MEM' => 'PHP Yaddaş Limiti',
    'LBL_CHECKSYS_MODULE' => 'Yazıla bilən Modullar Alt Kataloqlar və Fayllar',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Əlçatan deyil',
    'LBL_CHECKSYS_OK' => 'Oldu',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (versiya ',
    'LBL_CHECKSYS_PHPVER' => 'PHP Versiyası',
    'LBL_CHECKSYS_IISVER' => 'IIS versiyası',
    'LBL_CHECKSYS_JSON' => 'JSON təhlili',
    'LBL_CHECKSYS_RECHECK' => 'Yenidən yoxlayın',
    'LBL_CHECKSYS_STATUS' => 'Vəziyyət',
    'LBL_CHECKSYS_TITLE' => 'Sistem yoxlamasının qəbulu',
    'LBL_CHECKSYS_XML' => 'XML təhlili',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB sıxılma modulu',
    'LBL_CHECKSYS_ZIP' => 'ZIP İdarəetmə Modulu',
    'LBL_CHECKSYS_PCRE' => 'PCRE Kitabxanası',
    'LBL_CHECKSYS_FIX_FILES' => 'Davam etməzdən əvvəl aşağıdakı faylları və ya qovluqları düzəldin:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Davam etmədən əvvəl aşağıdakı faylları və ya kataloqları düzəldin:',
    'LBL_CHECKSYS_UPLOAD' => 'Yazıla bilən yükləmə kataloqu',
    'LBL_CLOSE' => 'Bağla',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'yaradılsın',
    'LBL_CONFIRM_DB_TYPE' => 'Verilənlər Bazasının Tipi',
    'LBL_CONFIRM_NOT' => 'olmayacaq',
    'LBL_CONFIRM_TITLE' => 'Parametrləri təsdiqləyin',
    'LBL_CONFIRM_WILL' => 'olacaq',
    'LBL_DBCONF_DB_DROP' => 'Cədvəllər silinsin',
    'LBL_DBCONF_DB_NAME' => 'Məlumat Bazası Adı',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM verilənlər bazası istifadəçi şifrəsi',
    'LBL_DBCONF_DB_PASSWORD2' => 'SuiteCRM Database İstifadəçi şifrəsini yenidən daxil edin',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM verilənlər bazası istifadəçisi',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM verilənlər bazası istifadəçisi',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Database Administrator İstifadəçi adı',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Verilənlər bazası admin şifrəsi',
    'LBL_DBCONF_COLLATION' => 'Qarşılaşdırma',
    'LBL_DBCONF_CHARSET' => 'Xarakter Sayı',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Təkmilləşmiş verilənlər bazası konfiqurasiyası',
    'LBL_DBCONF_DEMO_DATA' => 'Verilənlər Bazasını Demo Data ilə doldursun?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Demo Data seçin',
    'LBL_DBCONF_HOST_NAME' => 'Host Adı',
    'LBL_DBCONF_HOST_INSTANCE' => 'Host Nümunəsi',
    'LBL_DBCONFIG_SECURITY' => 'Təhlükəsizlik məqsədləri üçün siz SuiteCRM verilənlər bazasına qoşulmaq üçün eksklüziv verilənlər bazası istifadəçisini təyin edə bilərsiniz. Bu istifadəçi, bu misal üçün yaradılacaq SuiteCRM verilənlər bazasında məlumatları yaza, yeniləyə və əldə edə bilməlidir. Bu istifadəçi yuxarıda göstərilən verilənlər bazası administratoru ola bilər və ya siz yeni və ya mövcud verilənlər bazası istifadəçisi məlumatını təqdim edə bilərsiniz.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Mövcud istifadəçini təmin edin',
    'LBL_DBCONFIG_CREATE_DD' => 'Yaratmaq üçün istifadəçini müəyyənləşdirin',
    'LBL_DBCONFIG_SAME_DD' => 'Admin İstifadəçi ilə eynidir',
    'LBL_DBCONF_TITLE' => 'Verilənlər Bazasının Konfiqurasiyası',
    'LBL_DBCONF_TITLE_NAME' => 'Verilənlər Bazasının adını yazın',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Verilənlər Bazası İstifadəçi Məlumatlarını təmin edin',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Şifrə',
    'LBL_DISABLED_DESCRIPTION_2' => 'Bu dəyişiklik edildikdən sonra, quraşdırmağa başlamaq üçün aşağıdaki "Başlat" düyməsini basa bilərsiniz. <i>Quraşdırma başa çatdıqdan sonra, \'installer_locked\' üçün dəyəri \'doğru\' olaraq dəyişdirmək istəyə bilərsiniz.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Quraşdırıcı artıq bir dəfə işləmişdir. Bir təhlükəsizlik tədbiri olaraq, ikinci dəfə işə salınması deaktiv edilmişdir. Quraşdırıcını yenidən işə salmaq istədiyinizə tamamilə əminsinizsə, config.php faylını açın, \'installer_locked\' dəyişənini taparaq ( və ya əlavə edərək) \'false\' olaraq təyin edin. Xətt bu şəkildə olmalıdır:',
    'LBL_DISABLED_HELP_1' => 'Quraşdırma köməyi üçün, SuiteCRM-i ziyarət edin',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'dəstək forumları',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM Quraşdırılması Deaktiv Edilmişdir',
    'LBL_HELP' => 'Kömək',
    'LBL_INSTALL' => 'Quraşdır',
    'LBL_INSTALL_TYPE_TITLE' => 'Quraşdırma Seçimləri',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Quraşdırma növünü seçin',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Tipik Quraşdırma</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Fərdi Quraşdırma</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Quraşdırma üçün minimum məlumat tələb olunur. Yeni istifadəçilər üçün tövsiyə olunur.',
    'LBL_INSTALL_TYPE_MSG3' => 'Quraşdırma zamanı təyin etmək üçün əlavə seçimlər təmin edir. Bu seçimlərin əksəriyyəti idarəetmə ekranlarında quraşdırıldıqdan sonra da mövcuddur. Qabaqcıl istifadəçilər üçün tövsiyə olunur.',
    'LBL_LANG_1' => 'SuiteCRM-də standart dil\'dən (US-English) başqa dil istifadə etmək üçün dil paketini yükləyə və quraşdıra bilərsiniz. Siz həmçinin SuiteCRM proqramı daxilində dil paketlərini yükləyə və quraşdıra biləcəksiniz. Bu addımı atlamaq istəyirsinizsə, növbətiyə basın.',
    'LBL_LANG_BUTTON_COMMIT' => 'Quraşdır',
    'LBL_LANG_BUTTON_REMOVE' => 'Sil',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Sil',
    'LBL_LANG_BUTTON_UPLOAD' => 'Yüklə',
    'LBL_LANG_NO_PACKS' => 'heç nə',
    'LBL_LANG_PACK_INSTALLED' => 'Aşağıdakı dil paketləri quraşdırılmışdır: ',
    'LBL_LANG_PACK_READY' => 'Aşağıdakı dil paketləri quraşdırılmağa hazırdır: ',
    'LBL_LANG_SUCCESS' => 'Dil paketi müvəffəqiyyətlə yükləndi.',
    'LBL_LANG_TITLE' => 'Dil Paketi',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'İndi SuiteCRM qurulur. Bu bir neçə dəqiqə çəkə bilər.',
    'LBL_LANG_UPLOAD' => 'Yeni bir Dil Paketi yükləyin',
    'LBL_LICENSE_ACCEPTANCE' => 'Lisenziyanın Qəbul Edilməsi',
    'LBL_LICENSE_CHECKING' => 'Uyğunluq üçün sistem yoxlanılır.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Ətraf Mühit Yoxlanılır',
    'LBL_LICENSE_CHKDB_HEADER' => 'DB Şəxsiyyət Məlumatları Təsdiqlənir.',
    'LBL_LICENSE_CHECK_PASSED' => 'Sistem uyğunluq yoxlamasından keçdi.',
    'LBL_CREATE_CACHE' => 'Quraşdırmağa hazırlanır...',
    'LBL_LICENSE_REDIRECT' => 'Yenidən yönləndirilir ',
    'LBL_LICENSE_I_ACCEPT' => 'Qəbul Edirəm',
    'LBL_LICENSE_PRINTABLE' => ' Çap edilə bilən görünüş ',
    'LBL_PRINT_SUMM' => 'Məzmunu çap edin',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM Lisenziyası',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dok.',

    'LBL_ML_ACTION' => 'Fəaliyyət',
    'LBL_ML_DESCRIPTION' => 'Açıqlama',
    'LBL_ML_INSTALLED' => 'Quraşdırılma tarixi',
    'LBL_ML_NAME' => 'Ad',
    'LBL_ML_PUBLISHED' => 'Nəşr Tarixi',
    'LBL_ML_TYPE' => 'Növ',
    'LBL_ML_UNINSTALLABLE' => 'Silinəbilməz',
    'LBL_ML_VERSION' => 'Versiya',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (PHP üçün Microsoft SQL Server Driver)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli uzadılması)',
    'LBL_NEXT' => 'Növbəti',
    'LBL_NO' => 'Xeyr',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Sayt admin parolunun qurulması',
    'LBL_PERFORM_CONFIG_PHP' => 'SuiteCRM konfiqurasiya faylı yaradılır',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Verilənlər bazası yaradılması</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>on</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Verilənlər Bazasının istifadəçi adı və parolu yaradılır...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Defolt SuiteCRM məlumatlarının yaradılması',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Defolt planlaşdırıcı işlərinin yaradılması',
    'LBL_PERFORM_DEFAULT_USERS' => 'Defolt istifadəçilərin yaradılması',
    'LBL_PERFORM_DEMO_DATA' => 'Verilənlər bazası cədvəllərinin demo məlumatları ilə doldurulması (bu bir az vaxt apara bilər)',
    'LBL_PERFORM_DONE' => 'tamamlandı<br>',
    'LBL_PERFORM_FINISH' => 'Bitdi',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM-in qurulması ',
    'LBL_PERFORM_OUTRO_2' => ' indi tamamlandı!',
    'LBL_PERFORM_OUTRO_3' => 'Ümumi vaxt: ',
    'LBL_PERFORM_OUTRO_4' => ' saniyə.',
    'LBL_PERFORM_OUTRO_5' => 'İstifadə olunan təxmini yaddaş: ',
    'LBL_PERFORM_OUTRO_6' => ' bayt.',
    'LBL_PERFORM_SUCCESS' => 'Müvəffəqiyyət!',
    'LBL_PERFORM_TABLES' => 'SuiteCRM tətbiq cədvəllərinin, audit cədvəllərinin və əlaqələr metadatasının yaradılması',
    'LBL_PERFORM_TITLE' => 'Quraşdırmanı həyata keçirin',
    'LBL_PRINT' => 'Çap',
    'LBL_REG_CONF_1' => 'SuiteCRM-dən məhsul elanları, təlim xəbərləri, xüsusi təkliflər və xüsusi tədbir dəvətləri almaq üçün aşağıdakı qısa formanı doldurun. Biz burada toplanmış məlumatları üçüncü tərəflərə satmırıq, icarəyə vermirik, paylaşmırıq və ya başqa şəkildə yaymırıq.',
    'LBL_REG_CONF_3' => 'Qeydiyyat üçün təşəkkür edirik. SuiteCRM-ə daxil olmaq üçün Son düyməsini basın. İlk dəfə daxil olanda "admin" istifadəçi adını və 2-ci addımda daxil etdiyiniz şifrəni istifadə etməyiniz lazımdır.',
    'LBL_REG_TITLE' => 'Qeydiyyat',

    'LBL_REQUIRED' => '* Tələb olunan sahə',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Tətbiqi Admin Adı',
    'LBL_SITECFG_ADMIN_PASS_2' => 'SuiteCRM Admin İstifadəçi şifrəsini yenidən daxil edin',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM Admin İstifadəçi Şifrəsi',
    'LBL_SITECFG_APP_ID' => 'Tətbiq İD-i',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Seçilərsə, avtomatik yaradılan identifikatoru ləğv etmək üçün proqrama ID təqdim etməlisiniz. ID bir SuiteCRM instansiyasının seanslarının digər instansiyalar tərəfindən istifadə edilməməsini təmin edir. Əgər sizdə SuiteCRM quraşdırma çoxluğu varsa, onların hamısı eyni proqram ID-sini paylaşmalıdır.',
    'LBL_SITECFG_CUSTOM_ID' => 'Öz Tətbiq ID-nizi təqdim edin',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Seçilərsə, SuiteCRM jurnalı üçün defolt kataloqu ləğv etmək üçün jurnal kataloqu təyin etməlisiniz. Jurnal faylının harada yerləşməsindən asılı olmayaraq, ona veb brauzer vasitəsilə giriş .htaccess yönləndirməsi vasitəsilə məhdudlaşdırılacaq.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Fərdi Log Kataloqundan istifadə edin',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Əgər seçilibsə, SuiteCRM sessiya məlumatını saxlamağınız üçün təhlükəsiz bir qovluq təmin etməlisiniz. Bu, sessiya məlumatlarının paylaşılan serverlərdə həssas olmasını qarşısını almaq üçün edilə bilər.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'SuiteCRM üçün Fərdi Sessiya Kataloqundan istifadə edin',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Davam etməzdən əvvəl aşağıdakı xətaları düzəldin:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Log Kataloqu',
    'LBL_SITECFG_SESSION_PATH' => 'Sessiya qovluğuna gedən yol<br>(yazıla bilən olmalıdır)',
    'LBL_SITECFG_SITE_SECURITY' => 'Təhlükəsizlik Seçimləri seçin',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Əgər seçilibsə, sistem periodik olaraq tətbiqin yenilənmiş versiyasını yoxlayacaq.',
    'LBL_SITECFG_SUITE_UP' => 'Yeniləmələr avtomatik yoxlanılsın?',
    'LBL_SITECFG_TITLE' => 'Sayt Konfiqurasiyası',
    'LBL_SITECFG_TITLE2' => 'İdarə istifadəçisini müəyyənləşdirin',
    'LBL_SITECFG_SECURITY_TITLE' => 'Sayt Təhlükəsizliyi',
    'LBL_SITECFG_URL' => 'SuiteCRM Nümunəsinin URL-i',
    'LBL_SITECFG_ANONSTATS' => 'Anonim İstifadə Statistikası Göndərilsin?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Seçilərsə, sisteminiz hər dəfə yeni versiyaları yoxlayanda SuiteCRM quraşdırmanızla bağlı <b>anonim</b> statistik məlumatları SuiteCRM Inc.-ə göndərəcək. Bu məlumat bizə tətbiqin necə istifadə edildiyini daha yaxşı anlamağa kömək edəcək və məhsulun təkmilləşdirilməsinə rəhbərlik edəcək.',
    'LBL_SITECFG_URL_MSG' => 'Quraşdırıldıqdan sonra SuiteCRM nümunəsinə daxil olmaq üçün istifadə ediləcək URL-i daxil edin. URL həmçinin SuiteCRM tətbiq səhifələrində URL-lər üçün əsas kimi istifadə olunacaq. URL-də veb server və ya maşın adı və ya IP ünvanı olmalıdır.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Sisteminiz üçün bir ad daxil edin. Bu ad istifadəçilər SuiteCRM tətbiqini ziyarət etdikdə brauzerin başlıq çubuğunda göstəriləcək.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Quraşdırıldıqdan sonra SuiteCRM instansiyasına daxil olmaq üçün SuiteCRM admin istifadəçisindən (defolt istifadəçi adı = admin) istifadə etməlisiniz. Bu administrator istifadəçisi üçün şifrə daxil edin. Bu şifrə ilkin girişdən sonra dəyişdirilə bilər. Təqdim olunan standart dəyərdən başqa istifadə etmək üçün başqa admin istifadəçi adı da daxil edə bilərsiniz.',
    'LBL_SITECFG_COLLATION_MSG' => 'Sisteminiz üçün harmanlama (çeşidləmə) parametrlərini seçin. Bu parametrlər istifadə etdiyiniz xüsusi dildə cədvəllər yaradacaq. Diliniz xüsusi parametrlər tələb etmirsə, defolt dəyərdən istifadə edin.',
    'LBL_SPRITE_SUPPORT' => 'Sprite Dəstəyi',
    'LBL_SYSTEM_CREDS' => 'Sistem Etibarnamələri',
    'LBL_SYSTEM_ENV' => 'Sistem Mühiti',
    'LBL_SHOW_PASS' => 'Şifrələri göstərin',
    'LBL_HIDE_PASS' => 'Şifrələri gizlədin',
    'LBL_HIDDEN' => '<i>(gizli)</i>',
    'LBL_STEP1' => 'Addım 1/2 - Quraşdırmadan əvvəl tələblər',
    'LBL_STEP2' => 'Addım 2/2 - Konfiqurasiya',
    'LBL_STEP' => 'Addım',
    'LBL_TITLE_WELCOME' => 'SuiteCRM-ə xoş gəlmisiniz ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Quraşdırmağa hazırsınız?',
    'REQUIRED_SYS_COMP' => 'Tələb olunan Sistem Komponentləri',
    'REQUIRED_SYS_COMP_MSG' =>
        'Başlamazdan əvvəl, lütfən, aşağıdakı sistem komponentlərinin dəstəklənən versiyalarına malik olduğunuzdan əmin olun:<br>
                      <ul>
                      <li> Verilənlər Bazası/Verilənlər Bazası İdarəetmə Sistemi (Nümunələr: MariaDB, MySQL və ya SQL Server)</li>
                      <li> Veb Server (Apache, IIS)</li>
                      </ul>
                      üçün Buraxılış Qeydlərində Uyğunluq Matrisi ilə məsləhətləşin
                      quraşdırdığınız SuiteCRM versiyası üçün uyğun sistem komponentləri.<br>',
    'REQUIRED_SYS_CHK' => 'Initial System Check',
    'REQUIRED_SYS_CHK_MSG' =>
        'Quraşdırma prosesinə başladığınızda, SuiteCRM fayllarının yerləşdiyi veb serverdə sistem yoxlanışı aparılacaq.
                      sistemin düzgün konfiqurasiya edildiyinə və bütün lazımi komponentlərə malik olduğuna əmin olun
                      quraşdırmanı uğurla başa çatdırmaq üçün. <br><br>
                      Sistem aşağıdakıların hamısını yoxlayır:<br>
                      <ul>
                      <li><b>PHP versiyası</b> &#8211; tətbiqi ilə uyğun olmalıdır</li>
                      <li><b>Sessiya Dəyişənləri</b> &#8211; düzgün işləməlidir</li>
                      <li><b>MB Strings</b> &#8211; php.ini</li>-də quraşdırılmalı və aktivləşdirilməlidir
                      <li><b>Verilənlər Bazası Dəstəyi</b> &#8211; MariaDB, MySQL və ya SQL Server</li> üçün mövcud olmalıdır
                      <li><b>Config.php</b> &#8211; mövcud olmalıdır və onu yazıla bilən etmək üçün müvafiq icazələrə malik olmalıdır</li>
                      <li>Aşağıdakı SuiteCRM faylları yazıla bilən olmalıdır:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modullar</li>
                      <li>/yüklə</b></li></ul></li></ul>
                                  Yoxlama uğursuz olarsa, quraşdırma ilə davam edə bilməyəcəksiniz.
                                  Sisteminizin niyə yoxlamadan keçmədiyini izah edən bir səhv mesajı göstərilir.
                                  Lazımi dəyişiklikləri etdikdən sonra quraşdırmaya davam etmək üçün yenidən sistem yoxlamasından keçə bilərsiniz.<br>',


    'REQUIRED_INSTALLTYPE' => 'Typical or Custom install',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Sistem yoxlanışı həyata keçirildikdən sonra siz onlardan birini seçə bilərsiniz
                          Tipik və ya Fərdi quraşdırma.<br><br>
                          Həm <b>Tipik</b>, həm də <b>Fərdi</b> quraşdırmalar üçün aşağıdakıları bilməlisiniz:<br>
                          <ul>
                          <li> <b>Verilənlər bazası növü</b>, SuiteCRM məlumatlarını yerləşdirəcək <ul><li>Uyğun verilənlər bazası
                          növlər: MariaDB, MySQL və ya SQL Server.<br><br></li></ul></li>
                          <li> <b>Veb serverin adı</b> və ya verilənlər bazasının yerləşdiyi maşının (host).
                          <ul><li>Əgər verilənlər bazası yerli kompüterinizdədirsə və ya SuiteCRM fayllarınızla eyni veb server və ya maşındadırsa, bu, <i>localhost</i> ola bilər.<br><br></li>< /ul></li>
                          SuiteCRM məlumatlarını yerləşdirmək üçün istifadə etmək istədiyiniz <li><b>bazanın adı</b></li>
                          <ul>
                          <li> Artıq istifadə etmək istədiyiniz mövcud verilənlər bazanız ola bilər. Əgər
                           Mövcud verilənlər bazasının adını versəniz, verilənlər bazasındakı cədvəllər olacaq
                           SuiteCRM verilənlər bazası üçün sxem müəyyən edildikdə quraşdırma zamanı atılmalıdır.</li>
                           <li> Əgər artıq verilənlər bazanız yoxdursa, təqdim etdiyiniz ad üçün istifadə olunacaq
                           quraşdırma zamanı misal üçün yaradılan yeni verilənlər bazası.<br><br></li>
                           </ul>
                           <li><b>Verilənlər bazası administratorunun istifadəçi adı və şifrəsi</b> <ul><li>Verilənlər bazası administratoru cədvəllər və istifadəçilər yarada və verilənlər bazasına yaza bilməlidir.</li><li>Sizə lazım ola bilər
                           verilənlər bazası varsa, bu məlumat üçün verilənlər bazası administratorunuzla əlaqə saxlayın
                           yerli kompüterinizdə yerləşməyib və/yaxud verilənlər bazası administratoru deyilsinizsə.<br><br></ul>                                                                                                        </li></li>
                           <li> <b>SuiteCRM verilənlər bazası istifadəçi adı və parol</b>
                           </li>
                           <ul>
                           <li> İstifadəçi verilənlər bazası administratoru ola bilər və ya siz adını verə bilərsiniz
                           başqa bir mövcud verilənlər bazası istifadəçisi. </li>
                           <li> Bu məqsədlə yeni verilənlər bazası istifadəçisi yaratmaq istəyirsinizsə, bunu edəcəksiniz
                           quraşdırma prosesi zamanı yeni istifadəçi adı və parol təqdim edə bilmək,
                           və istifadəçi quraşdırma zamanı yaradılacaq. </li>
                           </ul></ul><p>

                           <b>Fərdi</b> quraşdırma üçün, həmçinin aşağıdakıları bilməlisiniz:<br>
                           <ul>
                           <li> <b>quraşdırıldıqdan sonra SuiteCRM nümunəsinə daxil olmaq üçün istifadə olunacaq URL</b>.
                           Bu URL-də veb server və ya maşın adı və ya IP ünvanı olmalıdır.<br><br></li>
                           <li> [İstəyə bağlı] <b>sessiya qovluğuna gedən yol</b>, əgər fərdi istifadə etmək istəyirsinizsə
                           sessiya məlumatlarının qarşısını almaq üçün SuiteCRM məlumatı üçün sessiya kataloqu
                           paylaşılan serverlərdə həssasdır.<br><br></li>
                           <li> [İstəyə bağlı] <b>Fərdi jurnal kataloquna yol</b>, əgər SuiteCRM jurnalı üçün defolt kataloqu ləğv etmək istəyirsinizsə.<br><br></li>
                           <li> [İstəyə bağlı] <b>Tətbiq ID-si</b>, əgər avtomatik yaradılan parametrləri ləğv etmək istəyirsinizsə
                           Bir SuiteCRM instansiyasının sessiyalarının digər instansiyalar tərəfindən istifadə edilməməsini təmin edən ID.<br><br></li>
                           <                      li><b>Xarakter Dəsti</b> yerli dilinizdə ən çox istifadə olunur.<br><br></li></ul>
                           Daha ətraflı məlumat üçün Quraşdırma Təlimatına müraciət edin.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Quraşdırmaya davam etməzdən əvvəl aşağıdakı vacib məlumatları oxuyun. Məlumat bu anda proqramı quraşdırmağa hazır olub-olmadığınızı müəyyən etməyə kömək edəcək.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Dilinizi seçin</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Quraşdırma köməkçisi',
    'LBL_WIZARD_TITLE' => 'SuiteCRM Quraşdırma Köməkçisi: ',
    'LBL_YES' => 'Bəli',

    'LBL_PATCHES_TITLE' => 'Ən son yamaları quraşdırın',
    'LBL_MODULE_TITLE' => 'Dil Paketlərini quraşdırın',
    'LBL_PATCH_1' => 'Bu addımı atlamaq istəyirsinizsə, Növbəti\'ni basın.',
    'LBL_PATCH_TITLE' => 'Sistem Yaması',
    'LBL_PATCH_READY' => 'The following patch(es) are ready to be installed:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM bu veb serverə qoşulduqda vacib məlumatları saxlamaq üçün PHP seanslarına əsaslanır. PHP quraşdırmanızda düzgün konfiqurasiya edilmiş Sessiya məlumatı yoxdur.
 <br><br>Ümumi yanlış konfiqurasiya ondan ibarətdir ki, <b>'session.save_path'</b> direktivi etibarlı kataloqa işarə etmir. <br>
 <br> Lütfən, aşağıda yerləşən php.ini faylında <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP konfiqurasiyanızı</a> düzəldin.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessiyalarının Konfiqurasiya Xətası',
    'LBL_SYSTEM_NAME' => 'Sistem Adı',
    'LBL_COLLATION' => 'Collation Settings',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Provide a System Name for the SuiteCRM instance.',
    'LBL_PATCH_UPLOAD' => 'Select a patch file from your local computer',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versiyası 5 və ya yuxarısı tələb olunur.',
    'LBL_MINIMUM_PHP_VERSION' => 'Tələb olunan minimum Php versiyası 5.1.0-dir. Tövsiyyə olunan Php versiyası 5.2.x.dir.',
    'LBL_YOUR_PHP_VERSION' => '(Sizin hazırki php versiyanız ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Tövsiyyə olunan php versiyası 5.2.x dir)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Geri Uyğunluq rejimi aktivdir. Davam etmək üçün zend.ze1_compatibility_mode-u sönülü vəziyyətinə qoyun',
    'LBL_STREAM' => 'PHP allows to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Yeni hesab məlumatı',
        'type' => 'sistem',
        'description' => 'Bu şablon, Sistem Administratorunun bir istifadəçiyə yeni bir şifrə göndərdiyi zaman istifadə olunur.',
        'body' => '<div><table border=\"0\" cellpacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\" ><tbody><tr><td colspan=\"2\"><p>Budur, hesabınızın istifadəçi adı və müvəqqəti şifrəsi:</p><p>İstifadəçi adı : $contact_user_user_name </p><p>Şifrə : $ contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Yuxarıdakı şifrədən istifadə edərək daxil olduqdan sonra sizdən şifrəni öz seçiminizdən birinə dəyişməyiniz tələb oluna bilər.</p > </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Hesabınızın istifadəçi adı və müvəqqəti şifrəsi:
İstifadəçi adı: $contact_user_user_name
Şifrə: $contact_user_user_hash

$config_site_url

Yuxarıdakı şifrəni istifadə edərək daxil olduqdan sonra, sizdən şifrənizi öz seçiminizdən birinə sıfırlamanız tələb oluna bilər.',
        'name' => 'Sistem tərəfindən yaradılan şifrə e-poçtu',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Hesab şifrənizi sıfırlayın',
        'type' => 'sistem',
        'description' => "Bu şablon, istifadəçi hesabının şifrəsini sıfırlama linkini istifadəçiyə göndərmək üçün istifadə olunur.",
        'body' => '<div><table border=\"0\" cellpacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\" ><tbody><tr><td colspan=\"2\"><p>Siz bu yaxınlarda $contact_user_pwd_last_changed saytında hesabınızın şifrəsini sıfırlaya bilmək üçün sorğu göndərdiniz. </p><p>Şifrənizi sıfırlamaq üçün aşağıdakı linkə klikləyin:</p><p> $contact_user_link_guid </p> </td> </tr><tr><td colspan=\"2\" >> td> </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Bu yaxınlarda $contact_user_pwd_last_changed hesab şifrənizi yenidən qura bilmək üçün tələb etdiniz.

Şifrənizi yenidən qurmaq üçün aşağıdakı linkə vurun:

$contact_user_link_guid',
        'name' => 'Şifrəni unutdum e-poçtu',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'İki faktorlu autentifikasiya kodu',
        'type' => 'sistem',
        'description' => "Bu şablon, bir istifadəçiyə İki Faktorlu Təsdiqləmə üçün bir kod göndərmək üçün istifadə olunur.",
        'body' => '<div><table border=\"0\" cellpacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\" ><tbody><tr><td colspan=\"2\"><p> İki Faktorlu Doğrulama kodu<b>$code</b>-dur.</p> </td> </tr><tr> <td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            'İki Faktorlu Doğrulama kodu $code-dir.',
        'name' => 'İki faktorlu autentifikasiya e-poçtu',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Kimdən" Adı:',
    'LBL_FROM_ADDR' => '"Hardan" Ünvanı:',

    'LBL_WIZARD_SMTP_DESC' => 'Təyinat bildirişləri və yeni istifadəçi şifrələri kimi e-poçtu göndərmək üçün istifadə olunacaq e-poçt hesabını təmin edin. İstifadəçilər göstərilən e-poçt hesabından göndərilən e-poçtları SuiteCRM-dən alacaqlar.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'E-poçt provayderinizi seçin:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Digər',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Server Spesifikasiyası',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Serveri:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Portu:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP Doğrulama istifadə edilsin?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP üzərində SSL və ya TLS aktivləşdirmək istəyirsiniz?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-poçt ünvanı:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Şifrə:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'İstifadəçilərə gedən e-poçt üçün bu hesabdan istifadə etməyə icazə verin:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Bu seçim seçildikdə, bütün istifadəçilər sistem bildirişləri və xəbərdarlıqları göndərmək üçün istifadə edilən eyni gedən poçt hesabından istifadə edərək e-poçt göndərə biləcəklər. Seçim seçilməyibsə, istifadəçilər öz hesab məlumatlarını təqdim etdikdən sonra hələ də gedən poçt serverindən istifadə edə bilərlər.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Poçt Şifrəsi:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Poçt ID-si:',

    'LBL_EXCHANGE_SMTPPASS' => 'Mübadilə şifrəsi:',
    'LBL_EXCHANGE_SMTPUSER' => 'Mübadilə istifadəçi adı:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Portu:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',


    'LBL_MAIL_SMTPUSER' => 'SMTP İstifadəçi adı:',
    'LBL_MAIL_SMTPPASS' => 'SMTP Şifrəsi:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Brendləşmə',
    'LBL_WIZARD_SYSTEM_DESC' => 'SuiteCRM-ni brendləşdirmək üçün təşkilatınızın adını və loqosunu təqdim edin.',
    'SYSTEM_NAME_WIZARD' => 'Ad:',
    'SYSTEM_NAME_HELP' => 'Bu, brauzerinizin başlıq hissəsində görünən addır.',
    'NEW_LOGO' => 'Logo seçin:',
    'NEW_LOGO_HELP' => 'Şəkil faylının formatı .png və ya .jpg ola bilər. Maksimum hündürlük 170px, maksimum eni isə 450px-dir. İstənilən istiqamətdə daha böyük yüklənmiş istənilən şəkil bu maksimum ölçülərə qədər miqyaslanacaq.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Yüklə',
    'CURRENT_LOGO' => 'Cari Loqo:',
    'CURRENT_LOGO_HELP' => 'Bu loqo SuiteCRM tətbiqinin giriş ekranının mərkəzində göstərilir.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Ssenari seçimi',
    'LBL_WIZARD_SCENARIO_DESC' => 'Bu, tələblərinizə əsasən göstərilən modulların uyğunlaşdırılmasına imkan vermək üçündür. Modulların hər biri idarəetmə səhifəsindən istifadə edərək quraşdırıldıqdan sonra aktivləşdirilə bilər.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Konfiqurasiya faylında (config.php) hazırda təyin edilmiş heç bir ssenari yoxdur',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Sistem Yerli Parametrləri',
    'LBL_WIZARD_LOCALE_DESC' => 'Coğrafi yerinizə əsasən SuiteCRM-də məlumatların necə göstərilməsini istədiyinizi təyin edin. Burada təqdim etdiyiniz parametrlər standart parametrlər olacaq. İstifadəçilər öz seçimlərini təyin edə biləcəklər.',
    'LBL_DATE_FORMAT' => 'Tarix formatı:',
    'LBL_TIME_FORMAT' => 'Vaxt formatı:',
    'LBL_TIMEZONE' => 'Saat qurşağı:',
    'LBL_LANGUAGE' => 'Dil:',
    'LBL_CURRENCY' => 'Valyuta:',
    'LBL_CURRENCY_SYMBOL' => 'Valyuta simvolu:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 valyuta kodu:',
    'LBL_NUMBER_GROUPING_SEP' => '1000-lik ayırıcı:',
    'LBL_DECIMAL_SEP' => 'Onluq simvolu:',
    'LBL_NAME_FORMAT' => 'Ad formatı:',
    'UPLOAD_LOGO' => 'Lütfən gözləyin, loqo yüklənir...',
    'ERR_UPLOAD_FILETYPE' => 'Fayl növünə icazə verilmir, lütfən, jpeg və ya png yükləyin.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Naməlum fayl yükləmə xətası baş verdi.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Yüklənmiş faylın ölçüsü php.ini direktivində qeyd edilən upload_max_filesize dəyərindən böyükdür.

Yüklənmiş faylı php.ini-də yükləmə_max_filesize direktivini üstələyir.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Yüklənmiş fayl HTML formasında göstərilən MAX_FILE_SIZE direktivini keçir.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Yüklənmiş fayl qismən yüklənib.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Heç bir fayl yüklənmədi.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Müvəqqəti qovluq çatışmır.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Faylı diskə yazmaq alınmadı.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'PHP uzantısı faylın yüklənməsini dayandırdı. PHP hansı genişləndirmənin faylın yüklənməsinin dayandırılmasına səbəb olduğunu müəyyən etmək üçün bir yol təqdim etmir.',

    'LBL_INSTALL_PROCESS' => 'Quraşdır...',

    'LBL_EMAIL_ADDRESS' => 'E-poçt Ünvanı:',
    'ERR_ADMIN_EMAIL' => 'Administrator E-poçt ünvanı yanlışdır.',
    'ERR_SITE_URL' => 'Saytın URL-i tələb olunur.',

    'STAT_CONFIGURATION' => 'Konfiqurasiya əlaqələri...',
    'STAT_CREATE_DB' => 'Məlumat Bazası Yaradın...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Defolt parametrlər yaradın...',
    'STAT_INSTALL_FINISH' => 'Quraşdırma tamamlandı...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Quraşdırma prosesi tamamlandı, <a href="%s">daxil olun...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Əvvəlcə lisenziyanı qəbul edin',

    'LBL_MORE_OPTIONS_TITLE' => 'Daha çox seçim',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Verilənlər bazası xətası',
    'LBL_OLD_PHP' => 'Köhnə PHP Versiyası Aşkarlandı!',
    'LBL_OLD_PHP_MSG' => 'SuiteCRM quraşdırmaq üçün tövsiyə olunan PHP versiyası %s <br />Tələb olunan minimum PHP versiyası %s<br />Siz EOL olan PHP versiyası %s istifadə edirsiniz: <a href="http://php.net /eol.php">http://php.net/eol.php</a>.<br />Lütfən, PHP versiyanızı təkmilləşdirməyi düşünün. ',
    'LBL_OLD_PHP_OK' => 'Mən risklərin fərqindəyəm və davam etmək istəyirəm.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'İstifadəçi',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Məlumat Bazası Adı',
    'LBL_DBCONFIG_MSG3' => 'Quraşdırmaq üzrə olduğunuz SuiteCRM nümunəsi üçün verilənləri ehtiva edən verilənlər bazasının adı.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Host Adı',
    'LBL_DBCONFIG_MSG2' => 'Verilənlər bazasının yerləşdiyi veb serverin və ya maşının (host) adı (məsələn, www.mydomain.com). Lokal olaraq quraşdırırsınızsa, performans səbəbi ilə \'127.0.0.1\' əvəzinə \'localhost\' istifadə etmək daha yaxşıdır.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'SuiteCRM verilənlər bazasını qurmaq üçün verilənlər bazası cədvəlləri və istifadəçiləri yarada bilən və verilənlər bazasına yaza bilən verilənlər bazası administratorunun istifadəçi adı və parolu lazımdır.'
);
