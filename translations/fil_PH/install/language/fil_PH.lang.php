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
    'LBL_BASIC_SEARCH' => 'Mabilis na filter',
    'LBL_ADVANCED_SEARCH' => 'Advanced na Filter',
    'LBL_BASIC_TYPE' => 'Ang Pangunahing uri',
    'LBL_ADVANCED_TYPE' => 'Ang Advanced na Uri',
    'LBL_SYSOPTS_2' => 'Anong uri ng database ang gagamitin para sa halimbawa ng SuiteCRM na gagawin mong i-install?',
    'LBL_SYSOPTS_DB' => 'Tukuyin ang uri ng Database',
    'LBL_SYSOPTS_DB_TITLE' => 'Uri ng database',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Mangyaring ayusin ang mga sumusunod na rmali bago magpatuloy:',
    'ERR_DB_VERSION_FAILURE' => 'Hindi ma-check ang bersyon ng database.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Ibigay ang pangalan ng gumagamit para sa administrador ng SuiteCRM admin. ',
    'ERR_ADMIN_PASS_BLANK' => 'Ibigay ang password para sa user ng admin ng SuiteCRM. ',

    'ERR_CHECKSYS' => 'Napag-alaman ang mga mali sa panahon ng compatibility check. Upang maayos ang pag-install ng iyong SuiteCRM, mangyaring gawin ang mga tamang hakbang upang matugunan ang mga isyung nakalista sa ibaba at alinman sa pindutin ang pindutan ng recheck, o subukang i-install muli.',
    'ERR_CHECKSYS_CALL_TIME' => 'Payagan ang Pagtuturo ng Oras ng Tawag sa Paglilipat (ito ay dapat itakda sa Off sa php.ini)',
    'ERR_CHECKSYS_CURL' => 'Hindi natagpuan: Patakbuhin ang SuiteCRM Scheduler na may limitadong pag-andar.',
    'ERR_CHECKSYS_IMAP' => 'Hindi natagpuan: InboundEmail at Mga Kampanya (Email) ay nangangailangan ng mga aklatan ng IMAP. Hindi rin magiging functional.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Ipinakita ito ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M o mas malaki ang iyong mga payl ng php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Babala: Hindi nasusulatan',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ang iyong bersyon ng PHP ay hindi suportado ng SuiteCRM. Kakailanganin mong i-install ang isang bersyon na katugma sa application ng SuiteCRM. Mangyaring kumunsulta sa Compatibility Matrix sa Release Notes para sa mga sinusuportahang Bersyon ng PHP. Ang iyong bersyon ay ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Ang iyong bersyon ng PHP ay hindi suportado ng SuiteCRM. Kakailanganin mong i-install ang isang bersyon na katugma sa applikasyon ng SuiteCRM. Mangyaring kumunsulta sa Compatibility Matrix sa Release Notes para sa mga sinusupor Bersyon ng PHP. Ang iyong bersyon ay ',
    'ERR_CHECKSYS_FASTCGI' => 'Natuklasan namin na hindi ka gumagamit ng pagmamapa ng FastCGI para sa PHP. Kakailanganin mong i-install / i-configure ang isang bersyon na tugma sa application ng SuiteCRM. Mangyaring sumangguni sa Compatibility Matrix sa Release Notes para sa mga sinusuportahang Bersyon. Mangyaring tingnan ang <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> para sa mga detalye ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Para sa pinakamainam na karanasan gamit ang IIS/FastCGI sapi, itakda ang fastcgi.logging sa 0 sa iyong php.ini payl.',
    'LBL_DB_UNAVAILABLE' => 'Hindi pa magagamit ang database',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Ang Database na Sumusuporta ay hindi natagpuan. Mangyaring siguraduhin na mayroon kang mga kinakailangang driver para sa isa sa mga sumusunod na suportadong Mga Uri ng Database: MySQL o MS SQLServer. Maaaring kailangan mong i-uncomment ang extension sa php.ini payl, o i-recompile gamit ang tamang binary payl, depende sa iyong bersyon ng PHP. Mangyaring sumangguni sa iyong PHP Manu-manong para sa higit pang impormasyon kung paano paganahin ang Database Support.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Ang mga pag-andar na nauugnay sa mga XML Parser Libraries na kinakailangan ng application ng SuiteCRM ay hindi natagpuan. Maaaring kailangan mong i-uncomment ang extension sa php.ini paly, o i-recompile gamit ang tamang binary payl, depende sa iyong bersyon ng PHP. Mangyaring sumangguni sa iyong PHP Manual para sa karagdagang impormasyon.',
    'ERR_CHECKSYS_MBSTRING' => 'Ang mga pag-andar na nauugnay sa Multibyte Strings PHP ekstensyon (mbstring) na kinakailangan ng applikasyon ng SuiteCRM ay hindi natagpuan. <br/><br/> Sa pangkalahatan, ang module ng mbstring ay hindi pinagana sa pamamagitan ng default sa PHP at dapat na maisaaktibo sa --enable-mbstring kapag binubuo ang PHP binary. Mangyaring sumangguni sa iyong PHP Manu-manong para sa higit pang impormasyon kung paano paganahin ang mbstring support.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Ang umiiral na config payl ngunit hindi maisasulat. Mangyaring gawin ang mga kinakailangang hakbang upang maisulat ang payl. Depende sa iyong Operating system, maaaring kailanganin mong baguhin ang mga pahintulot sa pamamagitan ng pagpapatakbo ng chmod 766, o sa right click sa pangalan ng payl upang ma-access ang mga katangian at alisan ng tsek ang isang nabasa na pagpipilian.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Ang config override payl ay umiiral ngunit hindi maisulat. Mangyaring gawin ang mga kinakailangang hakbang upang maisulat ang payl. Depende sa iyong Operating system, maaaring kailanganin mong baguhin ang mga pahintulot sa pamamagitan ng pagpapatakbo ng chmod 766, o sa right click sa pangalan ng payl upang ma-access ang mga katangian at alisan ng tsek ang pagpipilian basahin lamang.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Ang Custom Directory ay mga umiiral ngunit hindi maitatala. Maaaring kailangan mong baguhin ang mga pahintulot dito (chmod 766) o i-right click dito at alisan ng check ang nabasa lamang na opsiyon, depende sa iyong Operating System. Mangyaring gawin ang mga kinakailangang hakbang upang maisulat ang payl.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Ang mga payl o direktoryo na nakalista sa ibaba ay hindi maaaring isulat o nawawala at hindi maaaring malikha. Depende sa iyong Operasyon ng sistema, ang pagwawasto na ito ay maaaring mangailangan mong baguhin ang mga pahintulot sa mga payl o direktoryo ng magulang (chmod 755), o sa right click sa direktoryo ng magulang at alisin ang tsek ang pagpipilian na 'basahin lamang' at ilapat ito sa lahat ng mga subfolder.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Ang Safe Mode ay Sa (maaari mong hilingin na huwag paganahin sa php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Hindi nakita ang ZLib su: Ang SuiteCRM ay nakakuha ng napakalaking benepisyo sa pagganap sa zlib compression.',
    'ERR_CHECKSYS_ZIP' => 'Hindi natagpuan ang ZIP support: SuiteCRM ay kailangan ng suporta ng ZIP para magawan ng paraan nakakompres na payl.',
    'ERR_CHECKSYS_PCRE' => 'Aklatan ng PCRE na hindi matatagpuan: SuiteCRM ay nangangailangan ng PCRE aklatan para magawan ng paraan Perl estilo ng huwarang pagtutugma ng regular na expression.',
    'ERR_CHECKSYS_PCRE_VER' => 'Mga bersyon sa silid aklatan ng PCRE: SuiteCRM ay nangangailangan ng PCRE library 7.0 o mahigit para ipagpatuloy ang proseso sa Perl estilo ng regular pagpapahayag sa pagtutugma sa padron.',
    'ERR_DB_ADMIN' => 'Ang ibinigay na database administrator username at. o password ay hindi wasto, at ang koneksyon sa database ay maaring hindi matatag. Pakiusap mag enter ng balidong username at password.(Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'Ang ibinigay na database administrator username at/ o password ay hindi wasto, at ang koneksyon sa database ay maaaring hindi matatag. Pakiusap mag-enter ng balidong username at password.',
    'ERR_DB_EXISTS_NOT' => 'Ang tinutukoy na database ay hindi umiiral.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Ang database ay umiiral na may config data. Sa pagpapatakbo ng pag-install sa napiling database, pakiusap patakbuhing muli ang napiling pag-install: "Maghulog at muling mag likha ng umiiral SuiteCRM mesa?" Sa pag-upgrade, gamitin ang Upgrade Wizard sa Admin Console. Pakiusap basahin ang dokumentasyon ng matatagpuan sapag-upgrade <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">here</a>.',
    'ERR_DB_EXISTS' => 'Ang ibinigay na Database pangalan ay umiiral -- hindi pwedi makagawa ng isang parehong pangalan.',
    'ERR_DB_EXISTS_PROCEED' => 'Ang ibinigay na pangalan ng Database ay umiiral. Maari mong <br>1. Pindutin ang buton at piliin ang bagong database na pangalan <br>2. Mag-click sa susunod at ipagpatuloy ngunit ibinaba ang lahat ng umiiral sa talahanayan sa database na ito. <strong>Ito ay nangangahulugan na ang iyong lamesa at datos ay mawawala papalayo.</strong>',
    'ERR_DB_HOSTNAME' => 'Ang host name ay hindi maaaring i-blangko.',
    'ERR_DB_INVALID' => 'Hindi wasto ang database ang napili.',
    'ERR_DB_LOGIN_FAILURE' => 'Ang ibinigay na database host, username, at/o password ay hindi wasto, at ang koneksyon sa database ay maaring hindi matatag. Pakiusap mag-enter ng balidong host, username at password',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Ang ibinigay na database host, username, at/o password ay hindi wasto, at ang koneksyon sa database ay maaring hindi matatag. Pakiusap mag-enter ng balidong host, username at password',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Ang ibinigay na database host, username, at/o password ay hindi wasto, at ang koneksyon sa database ay maaring hindi matatag. Pakiusap mag-enter ng balidong host, username at password',
    'ERR_DB_MYSQL_VERSION' => 'Ang iyong bersyong (%s) ng MySQL ay hindi suportado sa SuiteCRM. Kakailangan mong mag install ng bersyon na magkatugma sa application ng SuiteCRM. Pakiusap kumunsulta sa Compatibility Matrix sa Release Notes para sa pagsuporta sa bersyon ng MySQL.',
    'ERR_DB_NAME' => 'Ang hostname sa database ay hindi maaring i-bangko.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Ang pangalan ng database ay hindi naglalaman ng '\\','/, o '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Ang pangalan ng database ay hindi maaring magpatuloy sa numero, '#', o '@' at hindi pweding naglalamang ng blangko, \"\",\"\",'*','/','/','?',':','<','>','&',!', o '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Ang Pangalan ng database ay maari lamang na binubuo ng mga alphanumeric na mga karakter at mga simbolo '#','_' o '$'",
    'ERR_DB_PASSWORD' => 'Ang password na ibinigay ay hindi magkatugma sa SuiteCRM database administrator. Paki-usap ipasok muli ang parehong password sa mga patlang ng password.',
    'ERR_DB_PRIV_USER' => 'Magbigay ng isang database adminstrator username. Ang gumagamit ay kailangan para sa paunang pagkokonek sa database.',
    'ERR_DB_USER_EXISTS' => 'Ang username para sa SuiteCRM database ang gumagamit ng mga umiiral -- hindi pweding lumikha ng isang pang bagong parehong pangalan. Pakiusap i-enter ang bagong username.',
    'ERR_DB_USER' => 'Magpasok ng username para sa SuiteCRM database administrator.',
    'ERR_DBCONF_VALIDATION' => 'Mangyaring ayusin ang mga sumusunod na rmali bago magpatuloy:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Ang password na ibinigay ay hindi magkatugma sa database ng SuiteCRM. Paki-usap i-enter ang kaparehong password sa mga patlang ng password.',
    'ERR_ERROR_GENERAL' => 'Ang mga sumusunod na pagkakamali ay nagkatagpo:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Hindi pwedig magtanggal ng payl: ',
    'ERR_LANG_MISSING_FILE' => 'Hindi mahanap na payl: ',
    'ERR_LANG_NO_LANG_FILE' => 'Walang wika pack payl na matatagpuan sa isama/wika loob: ',
    'ERR_LANG_UPLOAD_1' => 'Nagkaroon ng problema sa iyong pag upload. Pakiusap ulitin muli.',
    'ERR_LANG_UPLOAD_2' => 'Ang Pakete ng wika ay dapat ma ZIP archives.',
    'ERR_LANG_UPLOAD_3' => 'Hindi maaring maigalaw ang PHP ang temp payl upang mag-upgrade ng direktoryo.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Ang Direktoryo ng log na ibinigay ay hindi isang balidong direktoryo.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Ang Direktoryo ng log na ibinigay ay hindi balidong direktoryo.',
    'ERR_NO_DIRECT_SCRIPT' => 'Hindi tuwirang maiproseso ng script.',
    'ERR_NO_SINGLE_QUOTE' => 'Hindi maaring gamitin ang iisang sipi ng marka para sa ',
    'ERR_PASSWORD_MISMATCH' => 'Ang password na ibinigay ay hindi magkatugma sa database ng SuiteCRM. Paki-usap i-enter ang kaparehong password sa mga patlang ng password.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Hindi maisulat ang mga payl <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Ikaw ay maaaring mag papatuloy sa pag-install ng manu-manong paglikha ng payl ng config.php at idikit ang mga impormasyon ng kumpigurasyon sa ibaba sa config.php. Gayunpaman, ikaw ay<strong> maaring</strong>lumikha ng config.php payl bago ka magpatuloy sa susunod na hakbang.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Natatandaan mo na lumikha ng payl ng config.ph?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Babala: Maaaring hindi isulat sa config.php payl. Siguraduhin na ito ay umiiral.',
    'ERR_PERFORM_HTACCESS_1' => 'Hindi pweding sumulat sa mga ',
    'ERR_PERFORM_HTACCESS_2' => ' payl.',
    'ERR_PERFORM_HTACCESS_3' => 'Kung nais mong maging ligtas ang iyong log payl mula sa pagiging pagkaka-access gamit ang browser, lumikha ng mga payl ng .htaccess sa iyong direktoryo ng log kasama ang mga linya:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Hindi natin matagpuan ang koneksyon ng internet.</b> Kapag mayroon kanang koneksyon, Maaring bumisita sa <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> upang magparehistro sa SuiteCRM. Sa pamamagitan ng pagpapaalam ng kaunti tungkol sa kung paano balak gamitin ng SuiteCRM ng iyong kumpanya, maari naming matiyak na kami ay laging naghahatid ng tama na aplikasyon sa pangangailanan ng iyong negosyo.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Direktoryo ng log na ibinigay ay hindi isang balidong direktoryo.',
    'ERR_SESSION_DIRECTORY' => 'Ang Sesyon ng direktoryo na ibinigay ay hindi balidong direktoryo.',
    'ERR_SESSION_PATH' => 'Landas ng sesyon ay kinakailangan kung nais mong tukuyin ang iyong sarili.',
    'ERR_SI_NO_CONFIG' => 'Hindi kasama ang config_si.ph sa ugat ng dokumento, o hindi mo tukuyin $sugar_config_si sa config.php',
    'ERR_SITE_GUID' => 'Ang Aplikasyon sa ID ay kinakailangan kung nais mong tukuyin ang iyong sarili.',
    'ERROR_SPRITE_SUPPORT' => "Kasalukuyan hindi natin mahanap-hanap ang GD library, bilang resulta hindi mo maaring gamitin ang CSS Sprite functionality.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Babala: ang iyong mga kumpigurasyon ng PHP ay dapat magbabago upang payagan ang mga file ng hindi bababa sa 6MB na maaring i-upload.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Mag-upload ng File Size',
    'ERR_URL_BLANK' => 'Magbigay ng mga baseng URL para sa SuiteCRM instansiya.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Hindi mahanap ang pag-install ng talaan ng',
    'ERROR_MANIFEST_TYPE' => 'Mahayag ang file dapat tukuyin ang mga uri ng pakete.',
    'ERROR_PACKAGE_TYPE' => 'Mahayag na file na tumotukoy ng hindi kilalang pakete',
    'ERROR_VERSION_INCOMPATIBLE' => 'Ang na-upload na file ay hindi magkatugma sa bersyon ng SuiteCRM: ',

    'LBL_BACK' => 'Bumalik',
    'LBL_CANCEL' => 'Kanselahin',
    'LBL_ACCEPT' => 'Tanggapin',
    'LBL_CHECKSYS_CACHE' => 'Nasusulatang cache sub-derictoryo',
    'LBL_DROP_DB_CONFIRM' => 'Ang ibinigay na pangalan ng database ay umiiral.<br>pweding alinman:<br>1. Pinduting ang cancel buton at piliin ang bagong pangalan ng database, o <br>2. Pindutin ang Accept buton at ipag-patuloy. Lahat ng umiiral na talaan sa database ay maaring bumaba. <strong>Ibig sabihin lahat ng talaan at pre-umiiral na datos ay mawawala.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponent',
    'LBL_CHECKSYS_CONFIG' => 'Nasusulatang SuiteCRM configuration file (config.php)',
    'LBL_CHECKSYS_CURL' => 'kulot na modulo',
    'LBL_CHECKSYS_CUSTOM' => 'Masusulatan na pasadya sa direktoryo',
    'LBL_CHECKSYS_DATA' => 'Nasusulatang datos sub-deriktoryo',
    'LBL_CHECKSYS_IMAP' => 'Modulo ng IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'Mabilis na Cgi',
    'LBL_CHECKSYS_MBSTRING' => 'Modulo ng string ng MB',
    'LBL_CHECKSYS_MEM_OK' => 'OK ang (walang limitasyon)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK(walang limitasyon)',
    'LBL_CHECKSYS_MEM' => 'Limitasyon ng memory ng PHP',
    'LBL_CHECKSYS_MODULE' => 'Nasusulatang modulo sub-direktoryo at file',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Hindi magagamit',
    'LBL_CHECKSYS_OK' => 'Ok',
    'LBL_CHECKSYS_PHP_INI' => 'Ang Lokasyon ng iyong PHP kompigurasyon ng payl (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK(tingnan ',
    'LBL_CHECKSYS_PHPVER' => 'Bersyon ng PHP',
    'LBL_CHECKSYS_IISVER' => 'Bersyon ng IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Muling suriin',
    'LBL_CHECKSYS_STATUS' => 'Katayuan',
    'LBL_CHECKSYS_TITLE' => 'Sistema ng pagsuri sa pagtanggap',
    'LBL_CHECKSYS_XML' => 'Pag-parse ng XML',
    'LBL_CHECKSYS_ZLIB' => 'Pagpiga sa modulo ng ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Paghawak ng modyul ng ZIP',
    'LBL_CHECKSYS_PCRE' => 'Aklatan ng PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Pakiusap ayusin ang mga sumusunod na mga files o direktoryo bago magpatuloy:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Pakiusap ayun ang mga sumusunod na direktoryo ng modyul at ang mga files sa ilalim ng mga ito bago magpatuloy:',
    'LBL_CHECKSYS_UPLOAD' => 'Nasusulatan na Upload direktoryo',
    'LBL_CLOSE' => 'Ang pagsasara',
    'LBL_THREE' => 'Tatlo',
    'LBL_CONFIRM_BE_CREATED' => 'maging malikhain',
    'LBL_CONFIRM_DB_TYPE' => 'Uri ng database',
    'LBL_CONFIRM_NOT' => 'hindi',
    'LBL_CONFIRM_TITLE' => 'Magkumpirma ng mga setting',
    'LBL_CONFIRM_WILL' => 'kalooban',
    'LBL_DBCONF_DB_DROP' => 'Ang mga talahanayan ng drop',
    'LBL_DBCONF_DB_NAME' => 'Pangalan ng database',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM database ay gumagamit ng password',
    'LBL_DBCONF_DB_PASSWORD2' => 'Muling ipasok ang suiteCRM database na gumagamit ng password',
    'LBL_DBCONF_DB_USER' => 'Gumagamit ng suiteCRM database',
    'LBL_DBCONF_SUITE_DB_USER' => 'Gumagamit ng suiteCRM database',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Ang Database administrator gamit ang pangalan',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Ang Password ng database sa admin',
    'LBL_DBCONF_COLLATION' => 'Paghahambing',
    'LBL_DBCONF_CHARSET' => 'I-set ang karakter',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Dagdagan ang database sa may demo data?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Piliin ang demo data',
    'LBL_DBCONF_HOST_NAME' => 'Pangalan ng host',
    'LBL_DBCONF_HOST_INSTANCE' => 'Halimbawa ng host',
    'LBL_DBCONFIG_SECURITY' => 'Para sa layunin ng seguridad, maari mong tukuyin ang eksklusibong database upang kumonekta sa SuiteCRM database. Ito ay dapat makapagsulat, update at kunin ang data sa SuiteCRM database nanilikha para sa pagkakataong ito. Ang gumagamit nito ay maaaring maging database administrator sa natukoy sa itaas, o maaari kang magbigay ng bago o umiiral na database ng impormasyon ng gumagamit.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Magbigay ng mga umiiral na mga gumagamit',
    'LBL_DBCONFIG_CREATE_DD' => 'Tukuyin ang mga gumagamit sa paglikha',
    'LBL_DBCONFIG_SAME_DD' => 'Katulad ng mga gumagamit ng admin',
    'LBL_DBCONF_TITLE' => 'Ang Pagsasaayos ng database',
    'LBL_DBCONF_TITLE_NAME' => 'Magbigay ng mga pangalan ng database',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Magbigay ng mga pangalan ng mga gumagamit ng impormasyon sa database',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Ang Password',
    'LBL_DISABLED_DESCRIPTION_2' => 'Pagkatapos nitong mapalitan, pwede mong i-click and "Simula" button sa ibaba para magsimula sa iyung pag install. <i>Pagkatapos makumpleto ang pag-install, Gusto mo bang palitan ang halaga ng \'installer_locked\' sa \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Ang mga installer ay isang beses gumana. Bilang isang pamantayan ng kaligtasan, ito ay naging hindi gumana mula sa pangalawang pagkakataon. Kung ito ay ganap na sigurado gusto mo bang ipatakbo itong muli ang mga ito, pakiusap pumunta sa inyong mga payl ng config.php at mahanap (o magdagdag) isang variable ay tinatawag na \'installer_locked\' at itakda ito sa \'Hindi totoo\'. Ang linya dapat kagaya nito:',
    'LBL_DISABLED_HELP_1' => 'Para sa tulong ng pag-install, Pakiusap bisitahin ang SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'suporta sa mga forum',
    'LBL_DISABLED_TITLE_2' => 'Hindi pinagana ang pag install ng SuiteCRM',
    'LBL_HELP' => 'Tulong',
    'LBL_INSTALL' => 'Install',
    'LBL_INSTALL_TYPE_TITLE' => 'Ang Mga pagpilian sa pag install',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Pumili ng tipo ng pag-install',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Tipikal na pag install</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b> Pasadya ng pag-install</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Nangangailangan ng mga minimum na impormasyon para sa mga pag-install. Inirekomenda para sa mga bagong gumagamit.',
    'LBL_INSTALL_TYPE_MSG3' => 'Nagbigay ng mga karagdagang opsyon upang itakda sa panahon ang pag-install. Karamihan ng mga opsyon na ito ay makukuha rin pagkatapos ng pag-install sa mga screen ng mga admin. Inirekomenda para sa mga advanced na mga gumagamit.',
    'LBL_LANG_1' => 'Gamitin ang isang wika sa SuiteCRM maliban sa naka default na wika (US-English), maaari mong i-upload at i-install ng pakete ng wika sa panahong ito. Ikaw ay maaaring mag-upload at mag-install ng paketing mga wika mula sa loob ng ng aplikasyon sa SuiteCRM na rin. Kung gusto mong laktawan ang hakbang na ito, i-klik ang kasunod.',
    'LBL_LANG_BUTTON_COMMIT' => 'Install',
    'LBL_LANG_BUTTON_REMOVE' => 'Tanggalin',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Iuninstall',
    'LBL_LANG_BUTTON_UPLOAD' => 'I-upload',
    'LBL_LANG_NO_PACKS' => 'wala',
    'LBL_LANG_PACK_INSTALLED' => 'Ang mga sumusunod na pakete ng wika ay naka install na: ',
    'LBL_LANG_PACK_READY' => 'Ang mga sumusunod na pakete ng wika ay naka install na: ',
    'LBL_LANG_SUCCESS' => 'Ang pakete ng wika ay nagtagumpay sa pag-upload.',
    'LBL_LANG_TITLE' => 'Pakete ng wika',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Mag-install ng SuiteCRM ngayun. Ito ay maaring tumagal ng ilang mga minuto.',
    'LBL_LANG_UPLOAD' => 'I-upload ang isang pakete ng wika',
    'LBL_LICENSE_ACCEPTANCE' => 'Pagtanggap ng lisensya',
    'LBL_LICENSE_CHECKING' => 'Pagsuri ng sistema para sa mga pagkakatugma.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Pagsusuri sa kapaligiran',
    'LBL_LICENSE_CHKDB_HEADER' => 'Pagpatunay ng mga kredensyal sa DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'Lumipas na sistema ang tseke para sa mga pagkakatugma.',
    'LBL_CREATE_CACHE' => 'Paghahanda para sa pag install...',
    'LBL_LICENSE_REDIRECT' => 'Pagpasok ',
    'LBL_LICENSE_I_ACCEPT' => 'Tanggapin',
    'LBL_LICENSE_PRINTABLE' => ' Mga napi-print na tanawin ',
    'LBL_PRINT_SUMM' => 'I-print ang buod',
    'LBL_LICENSE_TITLE_2' => 'Lisensa ng SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingston',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Aksyon',
    'LBL_ML_DESCRIPTION' => 'Ang deskripsyon',
    'LBL_ML_INSTALLED' => 'Petsa ng pag-install',
    'LBL_ML_NAME' => 'Ang pangalan',
    'LBL_ML_PUBLISHED' => 'Petsa na inilathala',
    'LBL_ML_TYPE' => 'Uri',
    'LBL_ML_UNINSTALLABLE' => 'Uninstallable',
    'LBL_ML_VERSION' => 'Bersyon',
    'LBL_MSSQL' => 'Ang SQL server',
    'LBL_MSSQL2' => 'Ang SQL server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'Ang SQL Server (microsoft SQL server Driver para sa PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli ekstensyon)',
    'LBL_NEXT' => 'Susunod',
    'LBL_NO' => 'Hindi',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Ang Setting ng site admin password',
    'LBL_PERFORM_CONFIG_PHP' => 'Ang Paglikha ng SuiteCRM kompigurasyon na dokumento',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Paglikha ng mga database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>sa</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Ang Lumikha ng database username at password...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Ang Lumikha ng default sa SuiteCRM data',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Ang Paglikha ng default Scheduler sa mga trabaho',
    'LBL_PERFORM_DEFAULT_USERS' => 'Ang Paglikha ng default na mga gumagamit',
    'LBL_PERFORM_DEMO_DATA' => 'Ang Populating ng mga talahanayan ng database na may demo data (ito ay maaring tumatagal ng ialng sandali)',
    'LBL_PERFORM_DONE' => 'tapos<br>',
    'LBL_PERFORM_FINISH' => 'Natapos',
    'LBL_PERFORM_OUTRO_1' => 'Ang pag-setup ng SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' kumpleto na ngayun!',
    'LBL_PERFORM_OUTRO_3' => 'Kabuuang oras: ',
    'LBL_PERFORM_OUTRO_4' => ' ang mga segundo.',
    'LBL_PERFORM_OUTRO_5' => 'Humigit-kumulang ng memorya na ginagamit: ',
    'LBL_PERFORM_OUTRO_6' => ' ang mga bytes.',
    'LBL_PERFORM_SUCCESS' => 'Ang Tagupay!',
    'LBL_PERFORM_TABLES' => 'Ang Paglikha ng SuiteCRM ang mga talahanayan ng aplikasyon, ang talahanayan ng auidit at metadatos ng mga relasyon',
    'LBL_PERFORM_TITLE' => 'Magsasagawa ng pag-setup',
    'LBL_PRINT' => 'I-print',
    'LBL_REG_CONF_1' => 'Pakiusap kompletuhin ang maikling form sa ibaba upang makatanggap ng mga anunsyo ng produkto, pagsasanay sa balita, espesyal na alok at mga imbitasyon sa espesyal na kaganapan mula sa SuiteCRM. Hindi kami nagbebenta, renta, ibabahagi o kung hindi mn ipamahagi ang impormasyon na nakalap dito sa mga third parties.',
    'LBL_REG_CONF_3' => 'Salamat sa pagrerehistro. i-click and Finish button upang mag login sa SuiteCRM. Ikaw ay kinakailangan na mag login para sa unang pagkakataon gamit ang username "admin" at ang password na ipinasok mo sa pangalawang hakbang.',
    'LBL_REG_TITLE' => 'Pagpaparehistro',

    'LBL_REQUIRED' => '* Kinakailangang patlang',

    'LBL_SITECFG_ADMIN_Name' => 'Ang Pangalang ng SuiteCRM para sa aplikasyon Admin',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Muling ipasok ang password ng gumagamit ng SuiteCRM admin',
    'LBL_SITECFG_ADMIN_PASS' => 'Ang SuiteCRM admin gumagamit password',
    'LBL_SITECFG_APP_ID' => 'Ang Mga aplikasyon',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Kung pinili, ikaw ay dapat magbigay ng isang aplikasyon ng ID para ma i-override ang ID na nabuo sa auto. Tiniyak ng ID na ang sesyon ng isang SuiteCRM ay nag halimbawa ng hindi ginagamit sa ibang pagkakataon. Kung ikaw ay may isang kumpol ng SuiteCRM installation, lahat sila dapat mag bahagi ng kaparehong aplikasyon ng ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Magbigay ng iyong sariling aplikasyon ng ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Kung ikaw ay napili, kailangan mong tumokoy ng isang diretoryo para mai-override ang naka default na direktoyo para sa SuiteCRM log. Gayun-paman kung saan ang log payl namakikita, i-access ito sa pamamagitan ng web browser para ito ay magiging pinahihigpitan sa pamamagitan ng .htaccess redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Ang Gumamit ng isang pasadyang log diktatoryo',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Kung napili, dapat kang mag bigay ng isang ligtas na polder para sa pag-iimbak ng mga impormasyon sa SuiteCRM. Ito ay maaaring matapos sa pagpigil ng data para sa pagiging mahina sa pinagsasaluhang mga server.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Gumamit ng kostum sa sesyon direktory para sa SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Pakiusap ayusin ang mga sumusunod na mga mali bago magpatuloy;</b>',
    'LBL_SITECFG_LOG_DIR' => 'Ang direktory ay log',
    'LBL_SITECFG_SESSION_PATH' => 'Ang landadon ng directory<br>(dapat na writable)',
    'LBL_SITECFG_SITE_SECURITY' => 'Piliin ang mga opsyon sa seguridad',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Pumili kung, pana-panahoning susuriin ng sistema ang mga na-upadate na bersyon ng aplikasyon.',
    'LBL_SITECFG_SUITE_UP' => 'Ang Awtomatikong suriin ang mga update?',
    'LBL_SITECFG_TITLE' => 'Ang database ng pagsasaayos',
    'LBL_SITECFG_TITLE2' => 'Tukuyin ang mga Administrasyon na gumagamit',
    'LBL_SITECFG_SECURITY_TITLE' => 'Ang Seguridad ng Site',
    'LBL_SITECFG_URL' => 'Ang SuiteCRM ay Halimbawa sa URL',
    'LBL_SITECFG_ANONSTATS' => 'Magpadala ng mga Anonymous na istatistika ng paggamit?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Kung pinili, magpapadala ang SuiteCRM ng mga <b>anonymous</b>na istatistika tungkol sa iyong pag-install sa SuiteCRM Inc. sa bawat oras na sinusuri ng iyong sistema para sa mga bagong bersyon. Ang impormasyong ito ay makakatulong sa amin para mas maunawaan namin kung paano ang aplikasyon ay ginagamit at mga pagpapabuti ng mga gabay sa aming produkto.',
    'LBL_SITECFG_URL_MSG' => 'Ang SuiteCRM Ipasok ang halimbawang URL na gagamitin para ma-access pagkatapos ng pag-install. Ang URL ay gagamitin base sa mga URL ng SuiteCRM aplikasyon ng pahina. Ang URL ay dapat kasama sa web server o pangalan ng makina o IP address.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Ipasok ang pangalan ng iyong sistema. Ang pangalan na ito ay ididispley na pamagat ng browser ng users kapag binisita ito gamit ang SuiteCRM application.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Pagkatapos ng pag-install, kailangan mong gamitin ang SuiteCRM admin user (username ng default = admin) para makapaglog-in sa SuiteCRM instansiya. Ipasok ang password para sa administrator user. Ang password ay pweding bagohin pagkatapos ng inisyal na login. Maaari ka ring magpasok ng isa pang admin username upang magamit bukod sa default na halaga na inilaan.',
    'LBL_SITECFG_COLLATION_MSG' => 'Pumili ng mga setting sa collation(pag-aayos) para sa iyong sistema. Ang mga setting na ito ay lilikha ng mga talahanayan na may partikular na wika na iyong ginagamit. Kung ang iyong wika ay hindi nangangailangan ng espesyal na setting mangyaring gamitin ang default na halaga.',
    'LBL_SPRITE_SUPPORT' => 'Suporta ng Sprite',
    'LBL_SYSTEM_CREDS' => 'Ang mga kredensyal sa sistema',
    'LBL_SYSTEM_ENV' => 'Sistema ng kapaligiran',
    'LBL_SHOW_PASS' => 'Ipakita ang mga password',
    'LBL_HIDE_PASS' => 'Itago ang mga password',
    'LBL_HIDDEN' => '<i>(hidden)</i>',
    'LBL_STEP1' => 'Hakbang 1 ng 2 - Mga kinakailangan sa pag-pre-installation',
    'LBL_STEP2' => 'Hakbang 2 ng 2 - Pagsasaayos',
    'LBL_STEP' => 'Ang Hakbang',
    'LBL_TITLE_WELCOME' => 'Ang Maligayang Pagdating sa SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Handa ka bang mag-install?',
    'REQUIRED_SYS_COMP' => 'Mga kinakailangang bahagi ng sistema',
    'REQUIRED_SYS_COMP_MSG' =>
        'Bago ka magsimula, mangyaring siguraduhin na mayroon kang suportadong bersyon ng mga sumusunod na bahagi ng sistema:<br>
                      <ul>
                      <li>Database/Database Management System (Examples: MariaDB, MySQL or SQL Server)</li>
                      <li>Web Server (Apache, IIS)</li>
                      </ul>Kumonsulta sa Compatibility Matrix sa mga tala ng paglabas para sa
                      tugmang sistema para sa mga bersyon ng SuiteCRM na iyong iniinstala.<br>',
    'REQUIRED_SYS_CHK' => 'Paunang Tseke ng Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
        'Kapag sinimulan mo ang proseso ng pag-iinstall, isang tseke ng sistema ang isasagawa sa web server kung saan matatagpuan ang mga file ng SuiteCRM
                      siguraduhin na ang sistema ay maayos na isinaayos at meron ng lahat na kinakailangang sangkap
                      upang matagumpay na makumpleto ang pag-iinstall. <br><br>
                      Susuriin ng system ang lahat ng sumusunod:<br>
                      <ul>
                      <li><b>Bersyon ng PHP</b>&#8211;ay dapat tugma sa aplikasyon</li>
                      <li><b>Mga Session ng Variable</b>&#8211;ay dapat gumagana ng mabuti</li>
                      <li><b>MB Strings</b>&#8211;dapat naka-install at pinagana sa php.ini</li>
                      <li><b>Suporta ng Database</b>&#8211;dapat mayroong para sa MariaDB, MySQL o SQL Server</li>
                      <li><b>Config.php</b>&#8211;dapat mayroon at dapat magkarron ng naaangkop na mga pahintulot upang maisulat ito</li>
                      <li>Ang sumusunod ay dapat maisulat sa mga file ng SuiteCRM:<ul><li><b>/costum</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Kung bigo itog na tsek, hindi mo magagawang magpatuloy sa pag-iinstal.
                                  Isang mensaheng error ang ipapakita, nagpapaliwanag kung bakit ang iyong sistema ay hindi pumasa sa pagtsek.
                                  Pagkatapos gawin ang anumang mga kinakailangang pagbabago, maaari kang sumailalim muli sa sistem tsek upang ipagpatuloy ang pag-iinstall.<br>',


    'REQUIRED_INSTALLTYPE' => 'Karaniwang o Pasadyang na pag-install',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Matapos maisagawa ang tseke ng sistem, maaari kang pumili ng alinmang
                      Karaniwang o Pasadyang na pag-iinstall.<br><br>
                      Para sa parehong <b>Karaniwan</b>at<b>pasadyang</b>pag-iinstal, kailangan mong malaman ang sumusunod:<br>
                      <ul>
                      <li><b>Uri ng database</b>na paglalagyan ng data ng SuiteCRM<ul><li>Tugmang database
                      mga uri: MariaDB, MySQL o SQL Server.<br><br></li></ul></li>
                      <li><b>Pangalan ng web server</b> o makina (host) kung saan matatagpuan ang database
                      <ul><li>Ito ay maaaring <i>localhost</i>kung ang database ay nasa iyong lokal na computer o nasa parehong web server o makina bilang iyong SuiteCRM file.<br><br></li></ul></li>
                      <li><b>Pangalan ng database</b> na gusto mong paglalagyan ng SuiteCRM data</li>
                        <ul>
                          <li>Maaaring mayroon ka nang isang umiiral na database na nais mong gamitin. Kung
                          binigay mo ang pangalan ng isang umiiral na database, ang mga talahanayan sa database ay
                          bumaba sa panahon ng pag-iinstall kapag ang schema para sa database ng SuiteCRM ay tinukoy.</li>
                          <li>Kung wala ka pang database, ang pangalan na iyong ibibigay ay gagamitin para sa
                          ang bagong database na nilikha para sa halimbawa sa panahon ng pag-install.<br><br></li>
                        </ul>
                      <li><b>Database administratir user name at password</b> <ul><li>Ang tagapangasiwa ng database ay dapat gumawa ng mga talahanayan at mga gumagamit at sumulat sa database.</li><li>Maaaring kailanganin mo
                      makipag-ugnay sa iyong database administrator para sa impormasyong ito kung ang database ay
                      hindi matatagpuan sa iyong lokal na computer at / o kung hindi ikaw ang tagapangasiwa ng database.<br><br></ul></li></li>
                      <li> <b>SuiteCRM database username at password</b>
                      </li>
                        <ul>
                          <li>Ang user ay maaaring tagapangasiwa ng database, o maaari mong ibigay ang pangalan ng
                          ibang umiiral na database user.</li>
                          <li>Kung gusto mong gumawa ng bagong database user para sa layuning ito, kailangan mong
                          magagawang magbigay ng isang bagong username at password sa panahon ng proseso ng pag-install,
                          at ang user ay malilikha sa panahon ng pag-iinstal.</li>
                        </ul></ul><p>

                      Para sa <b>Pasadyang</b>setup, kailangan mong malam ang sumusunod:<br>
                      <ul>
                      <li><b>URL na gagamitin upang ma-access ang halimbawa ng SuiteCRM</b> pagkatapos na ma-install ito.
                      Dapat isama ng URL na ito ang web server o pangalan ng makina o IP address.<br><br></li>
                                  <li>[Optional]<b>Landas sa direktoryo ng sesyon</b>kung nais mong gumamit ng pasadyang
                                  sesyon direktoryo para sa impormasyon ng SuiteCRM upang maiwasan ang data ng session mula sa
                                  pagiging mahina sa mga nakabahaging server.<br><br></li>
                                  <li>[Optional]<b>Landas sa isang pasadyang direktoryo ng log</b>
kung nais mong i-override ang default na direktoryo para sa log ng SuiteCRM.<br><br></li>
                                  <li>[Optional]<b>Application ID</b>kung nais mong i-override ang auto-generated
                                  Ang ID na nagsisigurado na ang mga sesyon ng isang halimbawa ng SuiteCRM ay hindi ginagamit ng iba pang mga pagkakataon.<br><br></li>
                                  <li><b>Itakda ang Character</b>pinaka-karaniwang ginagamit sa iyong locale.<br><br></li></ul>
                                  Para sa mas detalyadong impormasyon, mangyaring sumangguni sa Gabay sa Pag-install.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Mangyaring basahin ang sumusunod na mahahalagang impormasyon bago magpatuloy sa pag-iinstall. Ang impormasyon na ito ay makakatulong sa iyo na matukoy kung o hindi ka handa sa pag-install ng aplikasyon sa ngayon.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Piliin ang iyong wika</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Setup Wizard',
    'LBL_WIZARD_TITLE' => 'SuiteCRM Setup Wizard: ',
    'LBL_YES' => 'Oo',

    'LBL_PATCHES_TITLE' => 'I-install ang mga Pinakabagong Patch',
    'LBL_MODULE_TITLE' => 'I-install ang mga Pakete ng Wika',
    'LBL_PATCH_1' => 'Kung gusto mong laktawan ang hakbang na ito, i-click ang Susunod.',
    'LBL_PATCH_TITLE' => 'Sistema ng Patch',
    'LBL_PATCH_READY' => 'Ang sumusunod na patch(es) ay handa ng ma-install:',
    'LBL_SESSION_ERR_DESCRIPTION' => "Ang SuiteCRM ay umaasa sa mga sesyon ng PHP upang mag-imbak ng mahalagang impormasyon habang nakakonekta sa web server na ito. Ang iyong pag-install ng PHP ay hindi tugma sa impormasyon ng Sesyon.
 <br><br>Ang isang karaniwang maling pag-configure ay ang<b>Ang 'session.save_path'</b> na direktiba ay hindi tumuturo sa wastong direktoryo.<br>
 <br>Mangyaring iwasto ang iyong <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>Pagsasaayos ng PHP</a> sa php.ini file na matatagpuan dito sa ibaba.",
    'LBL_SESSION_ERR_TITLE' => 'Error sa Pagsasaayos ng Sesyon ng PHP',
    'LBL_SYSTEM_NAME' => 'Pangalan ng Sistema',
    'LBL_COLLATION' => 'Mga Setting ng Collation',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Magbigay ng isang Pangalan ng System para sa halimbawa ng SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Pumili ng patch file mula sa iyong lokal na computer',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Kinakailangan ang Php na bersyon 5 o mas mataas.',
    'LBL_MINIMUM_PHP_VERSION' => 'Ang Minimun na Php bersyon na kailangan ay 5.1.0. Inirerekomenda ng Php bersyon ay 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Ang iyong kasalukuyang bersyon ng php ay ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Ang inirerekumendang bersyon ng php ay 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Naka-on ang mode ng Php Backward Compatibility. Itakda ang zend.ze1_compatibility_mode sa Off para magpatuloy pa',
    'LBL_STREAM' => 'Pinapayagan ng PHP na gamitin ang stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Bagong impormasyon ng account',
        'type' => 'ang sistema',
        'description' => 'Ang template na ito ay ginagamit kapag nagpapadala ang sistema ng administrator na bagong password at sa gumagamit.',
        'body' => '<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\">ito ang username sa iyong akawnt at temporari ang password<p><p>username :$contact_user_user_name</p><p>Password : $contact_user_user_hash</p><br><p>$config_site_url<br>Pagkatapos mong mag login gamit sa taas ng password. kaya kailanganin mong i-reset ang password sa isa sa iyong sariling pagpipilian.</p>  </td>      </tr><tr><td colspan=\"2\"><td    </tr></tbody></table></div>',
        'txt_body' =>
            '
Ito ang iyong akawnt username at pansamantalang password:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

Pagkatapos mong mag-log in gamit ang password sa itaas, 
maaaring kailanganin mong i-reset ang password sa isa sa iyong sariling pagpipilian.',
        'name' => 'Ang systeam ay nabuo ang email password',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Ang iyong password ay i-reset',
        'type' => 'ang sistema',
        'description' => "Ginagamit ang template na ito upang magpadala ng isang gumagamit ng isang link upang mag-click upang i-reset ang password ng akawnt ng gumagamit.",
        'body' => '<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><td colspan=\"2\"><p>Ang hinihiling mo kamakailan. $contact_user_pwd_last_changed</p><p>i-click ang link ng nasa ibaba para i-reset ang iyong password:</p><p>$contact_user_link_guid</p> </td></tr><tr><td colspan=\"2\"></td>     </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Hinihiling mo kamakailan sa $contact_user_pwd_last_changed upang ang iyong password akawnt ay mai-reset.

I-click sa link sa ibaba upang i-reset ang iyong password:

$contact_user_link_guid',
        'name' => 'Ang email password ay nakalimutan',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Ang dalawang sanhi na nagpapatunay sa kowd',
        'type' => 'ang sistema',
        'description' => "Ang template na ito ay ginagamit upang magpadala ng isang gumagamit ng isang kowd.",
        'body' => '<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ang dalawang sanhi na nagpapatunay sa kowd sa<b>$code</b>.</p></td>      </tr><tr><td colspan=\"2\"><td colspan=\"2\"></td></tr> </tbody></table></div>',
        'txt_body' =>
            'Ang dalawang sanhi na nagpapatunay sa kowd sa $code.',
        'name' => 'Ang dalawang sanhi na nagpapatunay sa email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Pinagmulan" ng pangalan:',
    'LBL_FROM_ADDR' => '"Mula sa" Lugar:',

    'LBL_WIZARD_SMTP_DESC' => 'Ibigay ang email account na magagamit para sa pagpapadala ng mga email, katulad ng mga notipikasyon ng tungkulin at baong mga password ng user. Ang mga user ay makakatanggap ng mga email sa SuiteCRM, gaya ng ipinasa mula sa tiyak na email account.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pumili ng Tagapagtustos ng iyong Email:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Ang yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'At iba pa',
    'LBL_MAIL_SMTP_SETTINGS' => 'Ang Espisipikasyon ng Serber ng SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Ang Serber ng SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Ang Port ng SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gumamit ng SMTP bilang pagpapatunay?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Paganahin ng SMTP sa SSL O TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Ang Email Address ng Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'Ang Password para sa Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Pahintulotan ang mga gumagamit para gamitin ang account na ito para sa papalabas na email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kapag napili ang opsyon na ito, ang lahat ng mga gumagamit ay pwedeng makapagpadala ng mga email gamit ang parehong papalabas na mail account na ginagamit para makapagpadala ng mga notipikasyon at mga alerto. Kung ang opsyon naman ay hindi pinili, ang mga gumagamit ay pwede paring gumamit ng serber para sa papalabas na mail pagkatapos maglahad ng sariling impormasyon sa account.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Ang Password para sa Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Ang ID para sa Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Palitan ang Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Palitan ang Pangalan ng Gumagamit:',
    'LBL_EXCHANGE_SMTPPORT' => 'Palitan ang Serber ng Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Palitan ang Serber:',


    'LBL_MAIL_SMTPUSER' => 'Ang pangalan ng gumagamit ng SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Ang Password ng SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Pagtatatak',
    'LBL_WIZARD_SYSTEM_DESC' => 'Ibigay ang pangalan ng organisasyon at logo upang mag tatak ng iyong SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Pangalan:',
    'SYSTEM_NAME_HELP' => 'Ito ang pangalan na naka-display sa bar ng pamagat ng iyung browser.',
    'NEW_LOGO' => 'Pumili ng logo:',
    'NEW_LOGO_HELP' => 'Ang pormat ng file ng imahe ay maaaring .png o kaya .jpg. Ang pinakamataas na tangkad ay 170px, at ang pinakamataas na lapad ay 450px. Ang kahit anong imahe na mai-upload na mas malaki sa kahit anong direksyon ay pwedeng paliitin sa max na dimensyon.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'I-upload',
    'CURRENT_LOGO' => 'Ang kasalukuyang Logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Seleksyon na Sitwasyon',
    'LBL_WIZARD_SCENARIO_DESC' => 'Upang Ito ay payagan ang tailoring ng ipinapakita ng mga modyul batay sa iyong mga kinakailangan. Ang bawat isa sa mga modyul ay maaaring paganahin pagkatapos i-install gamit ang pahina ng administrasyon.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Ang mga sitwasyong ay wlaang kasalukuyang naka-set sa pagsasaayos ng paly (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Mga setting sa lunan ng sistema',
    'LBL_WIZARD_LOCALE_DESC' => 'Tiyakin kung paano mo gusto ipakita ang datos ng SuiteCRM, base sa heograpikal na lokasyon. Ang mga seting na iyung ibinigay dito ay magiging default na mga seting. Ang mga user ay maaring mag takda na kanilang sariling mga kagustuhan.',
    'LBL_DATE_FORMAT' => 'Format ng petsa:',
    'LBL_TIME_FORMAT' => 'Format ng oras:',
    'LBL_TIMEZONE' => 'Time Zone:',
    'LBL_LANGUAGE' => 'Linggwahe:',
    'LBL_CURRENCY' => 'Ang pera:',
    'LBL_CURRENCY_SYMBOL' => 'Ang simbolo ng pera:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 pera ng kowd:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s tagapaghiwalay:',
    'LBL_DECIMAL_SEP' => 'Simbolo ng decimal:',
    'LBL_NAME_FORMAT' => 'Ang pangalan ng pormat:',
    'UPLOAD_LOGO' => 'Pakiusap hintayin, nag-loloading ang logo...',
    'ERR_UPLOAD_FILETYPE' => 'Ang uri ng payl ay hindi pinahihintulutan, pakiusap i-upload ang a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ang payl ay di nakilala sa ganap ng pag-upload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Lumagpas ang na-upload na file sa upload_max_filesize na direktiba sa php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Lumagpas sa na-upload na file ang direktibong MAX_FILE_SIZE na tinukoy sa form na HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Ang na-upload na file ay bahagyang na-upload lamang.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Walang nai-upload na file.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Nawawala ang pansamantalang folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Nabigong sumulat ng file sa disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Ang PHP ay tumigil ang ekstensyon sa pag-upload ng payl. Ang PHP ay hindi nagbibigay ng isang paraan upang alamin kung aling eKstensyon ang sanhi ng pag-upload ng payl upang ihinto.',

    'LBL_INSTALL_PROCESS' => 'Mag-install...',

    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'ERR_ADMIN_EMAIL' => 'Ang Administrasyon ng email address ay may mali.',
    'ERR_SITE_URL' => 'Lugar kung saan nangangailangan ng URL.',

    'STAT_CONFIGURATION' => 'Ang Pagsasaayos ng ugnayan...',
    'STAT_CREATE_DB' => 'Lumikha ng database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Lumikha ng mga default setting...',
    'STAT_INSTALL_FINISH' => 'Nagtapos na ang pag-install...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Tapos na ang pagproseso ng pag-install, <a href="%s"pakiusap mag-login sa...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Pakiusap tanggapin muna ang lisensya',

    'LBL_MORE_OPTIONS_TITLE' => 'Mga karagdagang pagpilian',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'May mali sa database',
    'LBL_OLD_PHP' => 'Dating bersyon ng PHP ay natukoy!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'Ako ay may kamalayan ng mga panganib at nais magpapatuloy.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Gumagamit',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Pangalan ng database',
    'LBL_DBCONFIG_MSG3' => 'Pangalan ng database na naglalaman ng mga datos para sa SuiteCRM halimbawa ikaw ay patungkol sa pag install.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Pangalan ng host',
    'LBL_DBCONFIG_MSG2' => 'Pangalan ng server o makina (host) na kung saan ang matatagpuan ang database (tulad ng www.mydomain.com). Kung mag-install ng lokal, ito ay mas mahusay na gamitan ang \'localhost\' kaysa sa \'127.0.0.1\', para sa rason ng mga pagganap.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Ang username at password sa database administrator kung saan maka-likha ng mga talahanayan at mga gugamit at kung saan maka sulat sa database kung ito ay kinakailangan kung saan naka order para sa pag set up ang SuiteCRM database.'
);
