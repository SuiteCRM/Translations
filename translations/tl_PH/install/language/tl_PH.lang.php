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
    'LBL_BASIC_SEARCH' => 'Mabilis na pag sala',
    'LBL_ADVANCED_SEARCH' => 'Naunang pag Sala',
    'LBL_BASIC_TYPE' => 'Mga Simpleng Klase',
    'LBL_ADVANCED_TYPE' => 'Naunang klase',
    'LBL_SYSOPTS_2' => 'Anong uri ng database na ginagamit para sa SuiteCRM na halimbawa ng tungkol sa pag talaga mo?',
    'LBL_SYSOPTS_DB' => 'Tiyakin ang uri ng Database',
    'LBL_SYSOPTS_DB_TITLE' => 'Klase ng Database',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Pakiusap na maayus ang mga sumusunod na pagkakamali bago Ituloy:',
    'ERR_DB_VERSION_FAILURE' => 'Walang kakayanang matukoy ang Bersyon ng Database.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Magbigay ng gamit na pangalan para sa SuiteCRM admin user. ',
    'ERR_ADMIN_PASS_BLANK' => 'Magbigay ng lihim na kumbinasyon para sa SuiteCRM admin user. ',

    'ERR_CHECKSYS' => 'Nakakita ng mga mali sa panahon ng kompatibiliti check. ayun sa sumusunod para sa i yong SuiteCRM sa pag install para gumana ng maayus, mangyari lamang na gawin ang mga tamang hakbang para matugunan ang mga isyu nkalista sa ibaba at alinman sa pindutan o pindutin ang recheck buton o subukang I install muli.',
    'ERR_CHECKSYS_CALL_TIME' => 'Pahintulutan tawag sa oras na dumaan sa sanggunian (ito ay dapat na ayusin mula sa php.ini)',
    'ERR_CHECKSYS_CURL' => 'Hindi mahanap: SuiteCRM Iskeduler ang mag papatakbo ng limitadong pag andar.',
    'ERR_CHECKSYS_IMAP' => 'Hindi mahanap: InboundEmail at mga Kampanyang (Email) hinihingi ng IMAP libraries. Ni hindi magamit.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (ito ay ayusin ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M o pinakamalaki sa iyong php.ini file)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Babala: Hindi Nakasulat',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ang bersyon ng iyong PHP ay hindi suportado sa SuiteCRM. Kinakailangan mong mag-install ng bersyon na tugma sa SuiteCRM na aplikasyon. Paki-tingnan ang Compatibility Matrix na nasa Release Notes para sa mga suportadong bersyon ng PHP. Ang bersyon ng PHP mo ay ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Ang iyong bersyon ng IIS ay hindi suportado ng SuitrCRM. Kailangan mo gawin mag-install din isalin ang magkakabagay kasama ang SuiteCRM paggamit. Pakiusap konsultahin ang Pagkakatugma ng Matrix sa mga pagpapalabas ng sulat para masuportahan IIS ng mga Bersyon. Iyong Bersyon ay ',
    'ERR_CHECKSYS_FASTCGI' => 'Nakita namin na hindi magagamit ang FastCGI sa pag hawak ng pagmamapa para sa PHP. Ang kylangan mo ay iintall/iconfigure ang bersyon na tutugma na kasama ng SuiteCRM applikasyon. Pakiusap ikunsulta ang pagkakatugma ng Matrix sa pag labas ng nakasulat para suportahan ang Bersyong.Pakiusap tingnan <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> para sa detalye ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Pinakamainam ang paggamit ng karanasan sa IIS/FastCGI sapi, i-set fastcgi. i-pag-log sa 0 sa iyong php.ini file.',
    'LBL_DB_UNAVAILABLE' => 'Hindi magamit ang database',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Ang suporta sa database ay hindi mahanap. Pakiusap siguraduhing meron ng mga pangangailangan na driver para isa sa mga sumusunod suportahan ng database ang mga uri: MySQL or MS SQLserber. Maaaring walang kumento ng ekstensyon para sa php.ini.file, o i-recompile kasama ng tamang binary file, depende parin sa iyong bersyon ng PHP. Pakiusap sumangguni sa iyong PHP Manwal para sa maraming impormasyon kung paano i-enable ng suporta ng Database.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Ang mga function na nauugnay na may XML Parser Libraries kinakailangan nga sa pamamagitan ng SuiteCRM  ang application ay hindi makita. Ang ekstensyon ay kailngan na maaaring nasa php.ini payl, o i-recompile ang tamang binary ng payl, depende pa din sa iyong bersyon ng PHP. Pakiusap sumangguni sa iyong PHP Manual para sa maraming inpormasyon.',
    'ERR_CHECKSYS_MBSTRING' => 'Tungkuling makipagugnayan sa Multibyte Strings PHP karugtong (mbstring) na kinakailangan sa pamamagitan ng SuiteCRM applikasyon ay hindi matagpuan <br/><br/>Kalimitan, mga mbstring module Hindi pinagana sa pamamagitan ng kawalan ng PHP at dapat na isinaaktibo at --paganahin- mbsstring kung saan PHP binary ay itinayo. Pakiusap isangguni sa iyong PHP manwal para sa mga inpormasyon kung paano paganahin mbstring pas tulong.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Ang mga config payl na umiiral ay hindi maisusulat. Mangyaring gawin ang mga kinakailangang hakbang upang maisulat ang payl. Depende sa iyong Operasyon ng systema, maaaring kailanganin mong baguhin ang mga pahintulot sa pamamagitan ng pagpapatakbo ng chmod 766, o sa kanan i-click ang pangalan ng payl upang ma-access ang mga katangian at basahin ang walang tsek na tanging pagpipilian.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Ang mga umiiral ng config payl ay hindi maisusulat. Mangyaring gawin ang mga kinakailangang hakbang upang maisulat ang payl. Depende sa iyong Operasyon ng systema, maaaring kailanganin mong baguhin ang mga pahintulot sa pamamagitan ng pagpapatakbo ng chmod 766, o sa kanan i-click ang filename upang ma-access ang mga katangian at basahin ang walang tsek na tanging pagpipilian.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Umiiral ang pasadyang derektory ngunit hindi maitatala. Maaaring kailangan mong baguhin ang mga pahintulot dito sa (chmod 766) o sa kanan i-click dito at walang tsek sa nabasang pagpipilian, depende sa iyong Operating System. Pakiusap gawin ang mga kinakailangang hakbang upang ang payl ay maisulat. ',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Ang mga payl o direktoryo na nakalista sa ibaba ay hindi maaaring isulat o nawawala at hindi maaaring malikha. Depende sa iyong Operasyon ng Sistema, ang pagwawasto na ito ay maaaring mangailangan mong baguhin ang mga pahintulot sa mga payl o direktoryo ng parent (chmod 755), o sa right click sa direktoryo ng magulang at alisin ang tsek ang opsyon na 'read only' at ilapat ito sa lahat ng mga subfolder.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Ligtas na paraan ng pag bukas (ang yong hiling na wag paganahin ang php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Ang ZLib ay hindi natagpuan ang suporta: Ang SuiteCRM ay nakakuha ng mga napakalaking benepisyo sa pagganap sa zlib kompresyon.',
    'ERR_CHECKSYS_ZIP' => 'Ang ZIP ay hindi natagpuan ang suporta: Ang SuiteCRM ay nangangailangan ng suporta ng ZIP upang maiproseso ang mga naka-compress na payl.',
    'ERR_CHECKSYS_PCRE' => 'Ang PCRE library ay hindi natagpuan: Ang SuiteCRM ay nangangailangan ng PCRE library upang maproseso ang estilo ng Perl sa regular na pagpapahayag ng pagtutugma ay na i-pattern. ',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE library bersyon: SuiteCRM kinakailangan PCRE libraby 7.0 o higit na sistema Perl na istilo na kinaugaliang pag papahayag ng mga detalye na tutugma.',
    'ERR_DB_ADMIN' => 'Ang ibinigay ng database tagapangasiwa ng gamit na pangalan at/o lihim na kumbinasyon ay hindi wasto, at isang pagkakaugnay sa database ay hindi maaaring maitatag. Pakiusap itala ang tunay na gamit na pangalan at lihim na kumbinasyon. (mali: ',
    'ERR_DB_ADMIN_MSSQL' => 'Ang ibinigay ng database tagapangasiwa ng gamit na pangalan at/o lihim na kumbinasyon ay hindi wasto, at isang pagkakaugnay sa database ay hindi maaaring maitatag. pakiusap itala ang tunay na gamit na pangalan at lihim na kumbinasyon.',
    'ERR_DB_EXISTS_NOT' => 'Ang database na itinutukoy ay hindi umiiral.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Ang database ay umiiral na kasama ang data sa config. Para makapagpatakbo ng isang pag-install sa napagpiliang database, mangyaring ipatakbong muli ang pag-install at piliin ang: "Ihulog at muling lumikha ng mga talahanayan sa SuiteCRM na umiiral?". Para makapag-upgrade, gamitin ang Wizard ng Upgrade sa Console ng Admin. Mangyaring basahin ang dokumentasyon sa pag-a-upgrade na matatagpuan <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">dito</a>.',
    'ERR_DB_EXISTS' => 'Ang Pangalan na ibinigay sa Database ay umiiral na - hindi maaaring gumawa ng isa pa na may parehong pangalan.',
    'ERR_DB_EXISTS_PROCEED' => 'Ang Pangalan ng Database na ibinigay ay umiiral na. Ikaw<br>1. pindutin sa likod ng button at pumili ng bagong pangalan ng database <br>2. i-click ang susunod at magpatuloy ngunit ang lahat ng mga umiiral na mga talahanayan sa database na ito ay bumaba<malakas> Nangangahulugan ito na ang iyong mga talahanayan at ang data ay sasabog sa malayo.
</malakas>',
    'ERR_DB_HOSTNAME' => 'Ang pangalan ng host ay hindi maaaring blangko.',
    'ERR_DB_INVALID' => 'Ang database ay hindi wasto ang uri na napili.',
    'ERR_DB_LOGIN_FAILURE' => 'Ang ibinigay na database host, username, at / o password ay hindi wasto, at hindi matatag ang isang koneksyon sa database. Pakiusap magpasok ng wastong host, username at password',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Ang ibinigay na database host, username, at / o password ay hindi wasto, at hindi matatag ang isang koneksyon sa database. Pakiusap magpasok ng wastong host, username at password',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Ang ibinigay na database host, username, at / o password ay hindi wasto, at hindi matatag ang isang koneksyon sa database. Pakiusap magpasok ng wastong host, username at password',
    'ERR_DB_MYSQL_VERSION' => 'Ang iyong bersyon ng MySQL "%s" ay hindi suportado ng SuiteCRM. Ang isang bersyon na katugma sa application ng SuiteCRM kailangan mong i-install. Pakiusap sumangguni sa Compatibility Matrix sa Paglabas ng mga talaan para sa suportadong mga bersyon ng MySQL.',
    'ERR_DB_NAME' => 'Ang pangalan ng database ay hindi blangko.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Ang pangalan ng database ay hindi maaaring maglaman a'\\','/', o '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Ang pangalan ng database ay hindi maaaring magsimula sa numero, '#', o '@' at hindi maaaring maglaman ng espasyo, '\"',\" '\",' * ',' / ',' \\ ','? ',': ' '<', '>', '&', '!', o '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Maaaring binubuo ang pangalan ng database ng mga alphanumeric na mga katangian at ang mga simbolo '#', '_' o '$'",
    'ERR_DB_PASSWORD' => 'Ang mga password na binigay para sa SuiteCRM database administrator ay hindi tugma. Pakiusap i-re-enter rin ang mga password sa mga password field. ',
    'ERR_DB_PRIV_USER' => 'Ang database administrator ay nagbigay ng user name. ANg user ay kinakailangan para sa inisyal na koneksyon para sa database. ',
    'ERR_DB_USER_EXISTS' => 'Ang pangalan ng user para sa SuiteCRM database ay mayroon na -- hindi pwedeng lumikha ng panibagong isa pa na parehas ng pangalan. Pakiusap isulat ang bagong pangalan ng user.  ',
    'ERR_DB_USER' => 'Lumikha ng user name para sa SuiteCRM database administrator. ',
    'ERR_DBCONF_VALIDATION' => 'Pakiusap na maayus ang mga sumusunod na pagkakamali bago Ituloy:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Ang mga password na binigay para sa SuiteCRM database administrator ay hindi tugma. Pakiusap i-re-enter rin ang mga password sa mga password field. ',
    'ERR_ERROR_GENERAL' => 'Ang mga sumusunod na kamalain ay naranasan:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Hindi binura ang file:',
    'ERR_LANG_MISSING_FILE' => 'Hindi mahanap ang file:',
    'ERR_LANG_NO_LANG_FILE' => 'Walang salita makita sa bunton ng hanay at isama/salitang nilalaman: ',
    'ERR_LANG_UPLOAD_1' => 'Nagkaroon ng problema ang iyong uplowd. Pakiusap subukan ulit. ',
    'ERR_LANG_UPLOAD_2' => 'Ang mga salitang pack dapat ZIP sa mga archive. ',
    'ERR_LANG_UPLOAD_3' => 'Ang PHP ay hindi maaaring ilipat ang temp payl sa pag-upgrade ng direktoryo.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Hindi isang balidong direktoriya ang naibigay na direktoriya sa log.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Hindi napagsusulatang direktoriya ang naibigay na direktoriya sa log.',
    'ERR_NO_DIRECT_SCRIPT' => 'Hindi nakapag-proseso ng direktahan sa iskrip.',
    'ERR_NO_SINGLE_QUOTE' => 'Hindi maaring gamitin ang isang bahaging binanggit markahan para sa ',
    'ERR_PASSWORD_MISMATCH' => 'Ang mga password na binigay para sa SuiteCRM database administrator ay hindi tugma. Pakiusap i-re-enter rin ang mga password sa mga password field. ',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Hindi maaaring makapagsulat sa payl na <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Ikaw ay maaaring makapagpatuloy sa instalasyong ito sa pamamagitan ng pamanwal na paglilikha sa payl na config.php at pagdidikit sa impormasyon ng kompigurasyon sa ibaba na patungo sa payl na config.php. Subalit, <strong>dapat</strong> mo munang likhain ang payl na config.php bago ka magpatuloy sa susunod na hakbang.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Naaalala mo ba Lumikha ng config.php sa payl? ',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Paalala. Hindi maisulat sa config.php payl. Pakiusap tiyakin ang mga umiiral. ',
    'ERR_PERFORM_HTACCESS_1' => 'Hindi maaaring makapagsulat sa ',
    'ERR_PERFORM_HTACCESS_2' => ' payl.',
    'ERR_PERFORM_HTACCESS_3' => 'Kung gusto mong iligtas ang iyong payl sa log mula sa pagkaka-akses sa pamamagitan ng browser, likhain ang payl na .htaccess sa direktoriya ng iyong log na may linyang:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Hindi kami makatuklas ng koneksyon sa Internet.</b> Kapag mayroon ka ng koneksyon, maaaring bisitahin ang <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> para makapagrehistro sa SuiteCRM. Sa pamamagitan ng pagbigay alam sa amin nang kaunti patungkol sa kung papaano pinaplano ng inyong kumpanya ang paggamit sa SuiteCRM, kami ay nakasisigurado na wastong aplikasyon ang palagi naming napapadala para sa kinakailangan ng inyong negosyo.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Hindi balidong direktoriya ang naibigay na direktoriya ng sesyon.',
    'ERR_SESSION_DIRECTORY' => 'Hindi nasusulatang direktoriya ang naibigay na direktoriya sa sesyon.',
    'ERR_SESSION_PATH' => 'Kung gusto mong itukoy ang iyong sarili kinakailangan ang path ng sesyon.',
    'ERR_SI_NO_CONFIG' => 'Hindi mo isinama ang config_si.php sa root na dokumento, o hindi mo natukoy ang $sugar_config_si sa config.php',
    'ERR_SITE_GUID' => 'Kung gusto mong tukuyin ang iyong sarili kinakailangan ang ID ng aplikasyon.',
    'ERROR_SPRITE_SUPPORT' => "Hindi namin mahanap sa kasalukuyan ang GD library, bilang isang resulta hindi mo magagawang gamitin ang CSS Sprite functionality.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Babala: Ang iyong pagsaayos ng PHP ay dapat mabago upang payagan ang mga file ng hindi bababa sa 6MB na i-upload.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'I-upload ang sukat ng file',
    'ERR_URL_BLANK' => 'Ibigay ang base URL para sa halimbawa ng SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Ang pag-install ay hindi mahanap sa talaan ng',
    'ERROR_MANIFEST_TYPE' => 'Ang mahayag na payl ay dapat tukuyin ang uri ng lagayan.',
    'ERROR_PACKAGE_TYPE' => 'Tinutukoy ng payl na mahayag ang isang hindi nakikilalang uri ng lagayan',
    'ERROR_VERSION_INCOMPATIBLE' => 'Ang nai-upload na payl ay hindi tugma nA kasama ang bersyon ng SuiteCRM: ',

    'LBL_BACK' => 'Bumalik',
    'LBL_CANCEL' => 'I-cancel',
    'LBL_ACCEPT' => 'Tinatanggap Ko',
    'LBL_CHECKSYS_CACHE' => 'Nasusulatang mga Sub na Direktoriya ng Cache',
    'LBL_DROP_DB_CONFIRM' => 'Ang Pangalan ng Database na naibigay ay mayroon na. <br> Maaari kang sa: <br> 1. Mag-click sa pindutang Kanselahin at pumili ng bagong pangalan ng database, o <br> 2. I-click ang pindutang Tanggapin at magpatuloy. Ang lahat ng mga umiiral na mga talahanayan sa database ay bumaba. <malakas> Nangangahulugan ito na ang lahat ng mga talahanayan at mga umiiral na data ay sasabog. </ malakas>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponet',
    'LBL_CHECKSYS_CONFIG' => 'Nasusulatang Payl (config.php) sa Kompigurasyon ng SuiteCRM',
    'LBL_CHECKSYS_CURL' => 'cURL Module',
    'LBL_CHECKSYS_CUSTOM' => 'Nasusulat na kaugalian sa Direktoryo',
    'LBL_CHECKSYS_DATA' => 'Nasusulatang mga Sub na Direktoriya sa Data',
    'LBL_CHECKSYS_IMAP' => 'IMAP Module',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Module',
    'LBL_CHECKSYS_MEM_OK' => 'SIGE (Walang Hangganan)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'SIGE (Hindi Limitado)',
    'LBL_CHECKSYS_MEM' => 'PHP Limitasyon ng memorya',
    'LBL_CHECKSYS_MODULE' => 'Nasusulatang mga Sub na Direktoriya at mga Payl ng mga Modyul',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Hindi Magagamit',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Ang pagsasaayos ng lokasyon ng Payl sa (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'SIGE (ver ',
    'LBL_CHECKSYS_PHPVER' => 'Bersyon ng PHP',
    'LBL_CHECKSYS_IISVER' => 'IIS Bersyon',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Muling pag-tsek',
    'LBL_CHECKSYS_STATUS' => 'Kalagayan',
    'LBL_CHECKSYS_TITLE' => 'Pagtanggap sa Pag-tsek ng Sistema',
    'LBL_CHECKSYS_XML' => 'Pag-parse ng XML',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Kompresyon Module',
    'LBL_CHECKSYS_ZIP' => 'ZIP Pag-asikaso Module',
    'LBL_CHECKSYS_PCRE' => 'PCRE Library',
    'LBL_CHECKSYS_FIX_FILES' => 'Pakiusap ayusin ang mga sumusunod na mga payl o mga direktoryo bago magpatuloy:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Pakiusap ayusin ang sumusunod na mga direktoryo ng module at ang mga payl sa ilalim na ito bago magpatuloy:',
    'LBL_CHECKSYS_UPLOAD' => 'Nasusulat na iupload directory',
    'LBL_CLOSE' => 'Sarado',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'mailikha',
    'LBL_CONFIRM_DB_TYPE' => 'Klase ng Database',
    'LBL_CONFIRM_NOT' => 'hindi',
    'LBL_CONFIRM_TITLE' => 'Kumpirmahin sa tagpuan',
    'LBL_CONFIRM_WILL' => 'ay',
    'LBL_DBCONF_DB_DROP' => 'Kaunting talaan',
    'LBL_DBCONF_DB_NAME' => 'Ang pangalan ng database',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM Database paggamit ng lihim na kumbinasyon',
    'LBL_DBCONF_DB_PASSWORD2' => 'Muling pumasok sa SuiteCRM Database paggamit bg lihim na kombinasyon',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Database ang gamit',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Database ang gamit',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Database Administrator Username',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Database Admin lihim na kumbinasyon',
    'LBL_DBCONF_COLLATION' => 'Ang Paghahambing',
    'LBL_DBCONF_CHARSET' => 'Nagpapakita ng buo',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Populyahin ang Database ng Datos sa Demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Piniling pagpapakita ng Datos',
    'LBL_DBCONF_HOST_NAME' => 'Pangalan ng Host',
    'LBL_DBCONF_HOST_INSTANCE' => 'Karamihang halimbawa',
    'LBL_DBCONFIG_SECURITY' => 'Para sa mga layunin ng seguridad, kaya mong tukuyin ang isang eksklusibong Database gamit ang pagkakaugnay sa SuiteCRM database. Ito ay gamit dapat sa may kakayahan na sumulat, i update at kunin ang datos sa SuiteCRM database iyon ay magiging likha para sa paliwanag. Ang gamit nito ay maaring maging Database administrator na tinutukoy sa itaas, o kaya\'y maaari kang mag bigay ng bagong o lumang database impormasyon na ginamit.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Magbigay ng umiiral na gumagamit',
    'LBL_DBCONFIG_CREATE_DD' => 'Tukuyin ang gumagamit para makagawa',
    'LBL_DBCONFIG_SAME_DD' => 'Katulad ng Admin User',
    'LBL_DBCONF_TITLE' => 'Kompigurasyon sa Database',
    'LBL_DBCONF_TITLE_NAME' => 'Magbigay ng pangalan ng Database',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Magbigay ng inpormasyong gumagamit ng Database',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Ang Password',
    'LBL_DISABLED_DESCRIPTION_2' => 'Pagkatapos naisagawa ang pagbabago, ikaw ay maaaring pumindot sa pindutang "Simula" sa ibaba para simulan ang iyong instalasyon. <i>Pagkatapos makumpleto ang instalasyon, gugustuhin mong baguhin ang halaga para sa \'installer_locked\' na maging \'totoo\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Ang installer ay isang beses nang naipatakbo. Bilang hakbang sa kaligtasan, ito ay hindi pinapagana mula sa pagtakbo ng ikalawang beses. Kung ikaw ay siguradong-sigurado na gusto mong patakbuhin muli ito, mangyaring pumunta sa iyong payl na config.php at hanapin (o dagdagan) ang isang varyabol na tinatawag na \'installer_locked\' at itakda ito sa \'mali\'. Ang linya ay dapat magmumukhang ganito:',
    'LBL_DISABLED_HELP_1' => 'Para sa tulong ng instalasyon, mangyaring bisitahin ang SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'mga forum para sa pagsuporta',
    'LBL_DISABLED_TITLE_2' => 'Instalasyon ng SuiteCRM ay Hindi Pinagana',
    'LBL_HELP' => 'Saklolo',
    'LBL_INSTALL' => 'I-install',
    'LBL_INSTALL_TYPE_TITLE' => 'Pagpipilian sa pag i-install',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Pumili ng uri ng pag i-install',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Tipikal na pag i-install </b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Gawi na pag i-intall</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Ang pag-install ay nangangailangan ng  pinakamababa na impormasyon. Inirerekomenda para sa mga bagong gumagamit.',
    'LBL_INSTALL_TYPE_MSG3' => 'Nagbibigay ng dagdag na pag pipilian para ihanda sa panahon nang pag i i-install. Karamihan sa mga pag pipilian ay magagamit din pagkatapos mag install sa admin mga screen. Inirekomenda para sa nauuna mga gumagamit.',
    'LBL_LANG_1' => 'Para gumamit ng lengguwahe sa SuiteCRM maliban sa kakulangan ng lengguwahe (US-English), maaring kang mag uplaod at mag install ng bunton ng lengguwahe sa oras na ito. Ikaw ay maaring mag upload at mag install ng bunton ng lengguwahe mula sa loob ng SuiteCRM paggamit ng mahusay. Kung gusto mong laktawan ang mga hakbang, pindutin ang susunod.',
    'LBL_LANG_BUTTON_COMMIT' => 'I-install',
    'LBL_LANG_BUTTON_REMOVE' => 'Alisin',
    'LBL_LANG_BUTTON_UNINSTALL' => 'I-uninstall',
    'LBL_LANG_BUTTON_UPLOAD' => 'I-upload',
    'LBL_LANG_NO_PACKS' => 'wala',
    'LBL_LANG_PACK_INSTALLED' => 'Ang mga sumusunod na pack ng wika ay na-install:',
    'LBL_LANG_PACK_READY' => 'Ang mga sumusunod na bunton ng lengguwahe ay handa nang i-install: ',
    'LBL_LANG_SUCCESS' => 'Ang bunton ng lengguwahe ay matagumpay na na-upload.',
    'LBL_LANG_TITLE' => 'Bunton ng lengguwahe',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Ngayon ang pag-install ng SuiteCRM . Maaaring tumagal ito ng ilang minuto.',
    'LBL_LANG_UPLOAD' => 'Mag-upload ng bunton ng lengguwahe',
    'LBL_LICENSE_ACCEPTANCE' => 'Pagkakatanggap ng Lisensya',
    'LBL_LICENSE_CHECKING' => 'Ang sistema ay sinusuri para sa pagiging tugma.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Pagsusuri sa kapaligiran',
    'LBL_LICENSE_CHKDB_HEADER' => 'Beripikahin DB mga kredensyal.',
    'LBL_LICENSE_CHECK_PASSED' => 'Lumipas ang sistema suriin para sa pagkakatugma.',
    'LBL_CREATE_CACHE' => 'Paghahanda sa pag-install...',
    'LBL_LICENSE_REDIRECT' => 'Re-derekta sa ',
    'LBL_LICENSE_I_ACCEPT' => 'Tinatanggap Ko',
    'LBL_LICENSE_PRINTABLE' => ' View na Napiprinta ',
    'LBL_PRINT_SUMM' => 'Limbag ng buod',
    'LBL_LICENSE_TITLE_2' => 'Lisensya sa SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Aksyon',
    'LBL_ML_DESCRIPTION' => 'Ang Paglalarawan',
    'LBL_ML_INSTALLED' => 'Petsa na na-install',
    'LBL_ML_NAME' => 'Ang Pangalan',
    'LBL_ML_PUBLISHED' => 'Petsa na inilathala',
    'LBL_ML_TYPE' => 'Klase',
    'LBL_ML_UNINSTALLABLE' => 'Hindi na pwedeng ma-uninstall',
    'LBL_ML_VERSION' => 'Ang Bersyon',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (libreng TDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (micrsoft SQL Server Driver para sa PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli karugtong)',
    'LBL_NEXT' => 'Ang susunod',
    'LBL_NO' => 'Hindi',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Pagtatakda sa password ng admin sa sayt',
    'LBL_PERFORM_CONFIG_PHP' => 'Paglilikha sa payl na kompigurasyon ng SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Paglikha ng database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>sa</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Paglilikha sa username at password ng Database...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Paglilikha sa naka-default na data ng SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Paglilikha sa naka-default na tagapag-iskedyul ng mga trabaho',
    'LBL_PERFORM_DEFAULT_USERS' => 'Paglilikha ng mga gumagamit na naka-default',
    'LBL_PERFORM_DEMO_DATA' => 'Pag-pulate sa database talaan may pagpapakita ng datos (Ito ay maaring tumagal ng kaunti)',
    'LBL_PERFORM_DONE' => 'tapos<br>',
    'LBL_PERFORM_FINISH' => 'Tapusin',
    'LBL_PERFORM_OUTRO_1' => 'Ang setup ng SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' ngaun ay kumpleto na!',
    'LBL_PERFORM_OUTRO_3' => 'Kabuuang oras: ',
    'LBL_PERFORM_OUTRO_4' => ' mga segundo.',
    'LBL_PERFORM_OUTRO_5' => 'Tinatayang nagamit na memorya: ',
    'LBL_PERFORM_OUTRO_6' => ' mga byte.',
    'LBL_PERFORM_SUCCESS' => 'Tagumpay!',
    'LBL_PERFORM_TABLES' => 'Paglikha ng aplikasyong talaan sa SuiteCRM, surrin ang talaan at kaugnay sa metadata',
    'LBL_PERFORM_TITLE' => 'Gawin ang Setup',
    'LBL_PRINT' => 'I-print',
    'LBL_REG_CONF_1' => 'Pakiusap kumpletuhin ang maikling paraan sa ibaba para matanggap ang mga anunsyong ng produkto, Pagsasanay ng balita, espesyal na alok at espesyal nakaganapan imbitasyon mula sa SuiteCRM. hindi kami nag bebenta, renta, ibahagi, o kung hindi man ipamahagi ang mga impormasyong na kolekta dito sa ikatlong partido.',
    'LBL_REG_CONF_3' => 'Salamat sa iyong pagrerehistro. Pindutin ang pindutang Tapusin para makapag-login sa SuiteCRM. Para sa iyong pinakaunang pagkakataon na makapag-login kinakailangan mong gamitin ang username na "admin" at ang password na iyong ipinasok sa ika-2 na hakbang.',
    'LBL_REG_TITLE' => 'Rehistrasyon',

    'LBL_REQUIRED' => '* Kinakailangang patlang',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM aplikasyong pangalan ng admin',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Muling ipasok sa SuiteCRM ang lihim na kumbinasyon gamit ng admin',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM lihim na kumbinasyong gamit ng admin',
    'LBL_SITECFG_APP_ID' => 'ID ng Aplikasyon',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Kung napili, dapat kang magbigay ng isang application ID upang i-override ang auto-generated ID. Tinitiyak ng ID na ang mga session ng isang halimbawa ng SuiteCRM ay hindi gamitin sa ibang mga pagkakataon. Kung mayroon ka lahat ng mga installation ng SuiteCRM, dapat na ibahagi ang lahat ng parehong ID ng application.',
    'LBL_SITECFG_CUSTOM_ID' => 'Magbigay ng Iyong Sariling ID sa Aplikasyon',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Kung pinili, kailangan mong tukuyin ang direktoryo ng log upang i-override ang default na direktoryo para sa log ng SuiteCRM. Hindi alintana kung saan matatagpuan ang log payl, ang pag-access dito sa pamamagitan ng isang web browser ay pinaghihigpitan sa pamamagitan ng isang .htaccess sa pag-redirect.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Gamitin ang isang Direktoriya sa Log na Kustom',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Kung pinili, dapat kang magbigay ng secure na polder para sa pagtatago ng impormasyon ng sessionCRM session. Mula sa pagiging mahina sa mga nakabahaging server magagawa ito upang mapigilan ang data ng session.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Gumamit ng isang Direktoriyang Kustom sa Sesyon para sa SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b> Pakiusap ayusin ang mga sumusunod na mga error bago ipagpatuloy: </b>',
    'LBL_SITECFG_LOG_DIR' => 'Direktoriya sa Log',
    'LBL_SITECFG_SESSION_PATH' => 'Daanan Papunta sa Direktorya ng Sesyon <br>(dapat nasusulatan)',
    'LBL_SITECFG_SITE_SECURITY' => 'Piliin ang siguridad na pagpipilian',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Kapag napili, ang sistema ay regular na suriin para sa na-update na bersyon ng aplikasyon.',
    'LBL_SITECFG_SUITE_UP' => 'Awtomatikong pagsuri para sa mga updates?',
    'LBL_SITECFG_TITLE' => 'Kompigurasyon sa Sayt',
    'LBL_SITECFG_TITLE2' => 'Kilalanin ang administrasyong gamit',
    'LBL_SITECFG_SECURITY_TITLE' => 'Lugar ng seguridad',
    'LBL_SITECFG_URL' => 'URL sa Instansya ng SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Magpadala ng istatistika gamit na hindi kilala?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Kung napili ng, SuiteCRM ipapadala <b> di kilala </b> istatistika tungkol sayong pag installsa SuiteCRM Inc. bawat oras ng iyong sistema suriin para sa bagong bersyon.',
    'LBL_SITECFG_URL_MSG' => 'Ipasok ang URL na gagamitin sa pag punta sa SuiteCRM halimbawa pag katapos ng pag install. Ang URL ay gagamitin din bilang isang batayan para sa URL nasa SuiteCRM mga pahina ng aplikasyon. Ang URL dapat isaman ang web serber o pangalan ngmakinarya o IP address.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Ipasok ang pangalan ng iyong sistema. Itong pangalan ay ipapakita sa pamagat ng browser bar kapag gumagamit bisitahin ang SuiteCRM aplikasyon.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Pagkatapos i install, gagamitin mo ang SuiteCRM admin user (pumalya pangalan ng user = admin) upang mag-log in sa SuiteCRM instansya. ipasok ang lihim na kumbinasyon para sa user ng administrador. Ang lihim na kumbinasyon ay maaaring baguhin pagkatapos ng paunang pag- login. maari mo ring ipasok ang isa pang admin pangalan ng user gamitin maliban sa kawalan ng halaga.',
    'LBL_SITECFG_COLLATION_MSG' => 'Pumiling mga setting ng paghahambing (pag-uuri) para sa iyong sistema. Ang mga setting na ito ay mag gagawa ng mga lamesa kasama ang natukoy na lenggwahe na iyong ginamit. Kung sakaling ang iyong lenggwahe ay hindi mangailangan ng ispesyal na mga setting mangyaring gamitin ang default na halaga.',
    'LBL_SPRITE_SUPPORT' => 'Suporta ng sprite',
    'LBL_SYSTEM_CREDS' => 'Sistema ng mga keredensyal',
    'LBL_SYSTEM_ENV' => 'Sistema ng kapaligiran',
    'LBL_SHOW_PASS' => 'Ipakita ang mga password',
    'LBL_HIDE_PASS' => 'Ang mga password ay itago',
    'LBL_HIDDEN' => '<i>(nakatago)</i>',
    'LBL_STEP1' => 'Hakbang 1 ng 2 - Mga kinakailangang pre-installation',
    'LBL_STEP2' => 'Hakbang 2 ng 2 - Pagsasaayos',
    'LBL_STEP' => 'Hakbang',
    'LBL_TITLE_WELCOME' => 'Maligyang Pagdating sa SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Handa kana bang mag-install?',
    'REQUIRED_SYS_COMP' => 'Ang kinakailangan ng sistema ng mga komponent',
    'REQUIRED_SYS_COMP_MSG' =>
        'Bago ka mag simula, mangyaring siguraduhin namayroon kang suportadong mga bersyon ng mga sumusunod na mga sangkap ng sistema:<br>
                      <ul>
                      <li> Database/Database Sistema ng pamamahala (Mga halimbawa: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Konsultahin ang compability matrix sa mga tala ng release para sa
                      tugmang mga sangkap ng sistema para sa bersyon ng SuiteCRM na iyong ini-install.<br>',
    'REQUIRED_SYS_CHK' => 'Paunang pagsusuri ng sistema',
    'REQUIRED_SYS_CHK_MSG' =>
        'Kapag inumpisahan mo ang proseso ng installation, isang sistema ng pagsusuri ay gaganapin sa server ng web kung saan ang SuiteCRM na mga payl ay matatagpuan nang sa gayon
                      siguraduhin na ang sistema ay naisaayos ng tama at mayroong mga kinakailangang mga sangkap
                      para tagumpay na ma-kumpleto ang installation. <br><br>
                      Ang sistema aysinusuri ang lahat ng mga sumusunod:<br>
                      <ul>
                      <li><b>bersyon ng PHP</b> &#8211; dapat ay tugma sa applikasyon</li>
                      <li><b>Session Variables</b> &#8211; dapat ay gumagana ng tama</li>
                      <li><b>MB Strings</b> &#8211; dapay ay naka-install at napagana sa php.ini</li>
                      <li><b>Suporta ng Database</b> &#8211; dapat ay umiiral para sa MariaDB, MySQL or SQL Server</li>
                      <li><b>Config.php</b> &#8211; dapat ay umiiral at dapat ay mayroong angkop na pahintulot para maging writable</li>
                      <li>Ang sumusunod na SuiteCRM na mga payl ay dapat na writable:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/mga module</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Kung ang pagsusuri ay nabigo, hindi ka maaaring magpatuloy sa installation.
                                  Pagkatapos gumawa ng kinakailangang mga pagbabago, pwede kang sumasailalim sa pagsusuri ng sistema ulit para magpatuloy ang installation.<br>',


    'REQUIRED_INSTALLTYPE' => 'Tipikal o sadyang pag-install',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Pagkatapos na ang pagsusuri ng sistema ay naganap, maaari kang mamili alinman
                      ang tipikal o sadyang pag-install.<br><br>
                      Para sa pareho <b>Tipikal</b> and <b>Sadya</b> mga installation, kailangan mong malaman ang sumusunod:<br>
                      <ul>
                      <li> <b>Uri ng database</b> na babahayin ang SuiteCRM data <ul><li>Tugmang database
                      types: MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Pangalan ng  web server</b> or makina (host) kung saan ang database ay matatagpuan
                      <ul><li>Ito ay maaaring <i>lokal na host</i> Kung ang database ay nasa iyong lokal na computer o nasa parehong web server o makina bilang iyong mga payl ng SuiteCRM.<br><br></li></ul></li>
                      <li><b>Pangalan ng database</b>na gusto mong gamitin para bahayin ang SuiteCRM data</li>
                        <ul>
                          <li> Maaaring mayroon ka nang umiiral na database na gusto mong gamitin. Kung
                          iyong ipo-provide ang pangalan ng umiiral na database, ang pangalang iyong na-provide ay gagamitin para sa
                          maging bumaba habang nag i-install kapag ang schema para sa SuiteCRM database ay tinukoy.</li>
                          <li> Kung wala ka pang database, ang pangalang iyong na-provide ay gagamitin para sa
                          ang bagong database na nalikha para sa halimbawa habang nag i-install.<br><br></li>
                        </ul>
                      <li><b>Database administrator pangalan ng u ser at password</b> <ul><li>Ang database administrator ay dapat na maka-likha ng mga lamesa atmga gumagamit at isulat sa database</li><li>Maaari kang
                      makipag-ugnay sa iyong database administrator para sa impormasyon na ito kung ang database ay
                      hindi matatagpuan sa iyong lokal na computer at/o kung ikaw ay hindi administrator ng database.<br><br></ul></li></li>
                      <li> <b>SuiteCRM database pangalan ng user at password</b>
                      </li>
                        <ul>
                          <li> Ang gumagamit ay maaaring ang database administrator, o maaari kang mag provide ng pangalan ng
                          ibang umiiral na gumagamit ng database. </li>
                          <li> Kung gusto mong lumikha ng bagong gumagamit ng database para sa layunin na ito, ikaw ay
                          makapag-provide ng bagong pangalan ng gumagamit o password habang sa panahon ng proseso ng pag i-install,              
                         at ang gumagamit at magagawa sa panahon ng pag i-install.. </li>
                        </ul></ul><p>

                      Para sa <b>Sadya</b> setup, kailangan mo ring malaman ang sumusunod:<br>
                      <ul>
                      <li> <b>URL na gagamitin para ma-access ang SuiteCRM na halimbawa</b> pagkatapos na to ay ma-install.
                      Ang URL na ito ay dapat na maglaman ng web server o pangalan ng makina o address ng IP.<br><br></li>
                                  <li> [Optional] <b>Daan para sa direktoryo ng session</b> Kung hihilingin mong gumamit ng sadya
                                  direktoryo ng session para sa impormasyon ng SuiteCRM nang sa gayon ay mapigilan ang session data mula sa
                                  maging mahina sa mga ibinahaging mga server.<br><br></li>
                                  <li> [Optional] <b>Daan sa direktoryo ng sadyang log</b> kung hihilingin mong i-override default na direktoryo para sa SuiteCRM log.<br><br></li>
                                  <li> [Optional] <b>Aplikasyon ng ID</b> kung hihilingin mong i-override ang auto-generated
                                  ID na naninigurado na ang mga session ng isang halimbawa ng SuiteCRM ay hindi ginamit sa ibang mga halimbawa.<br><br></li>
                                  <li><b>Pagtatakda ng character</b> karaniwang ginagamit sa iyong lokal.<br><br></li></ul>
                                  Para sa mas detakyadong impormasyon, mangyaring konsultahin ang gabay sa pag i-install.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Pakiusap bago magpatuloy sa pag-install basahin ang sumusunod na importanting impormasyon. Matutulungan ka ng impormasyon na tukuyin kung ikaw ay handa na i-install ang application sa oras na ito.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Pumili ng iyong salita</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Wizard sa Setup',
    'LBL_WIZARD_TITLE' => 'SuiteCRM Setup Wizard: ',
    'LBL_YES' => 'Oo',

    'LBL_PATCHES_TITLE' => 'Mag install ng pinakabagong mga patch',
    'LBL_MODULE_TITLE' => 'Mag install ng mga lenggwahe ng pakete',
    'LBL_PATCH_1' => 'Kung gusto mong laktawan ang hakbang na ito, i-click ang Susunod.',
    'LBL_PATCH_TITLE' => 'Sistema ng Patch',
    'LBL_PATCH_READY' => 'Ang sumusunod na patch(mga patch) ay maaari na i-install:',
    'LBL_SESSION_ERR_DESCRIPTION' => "Ang SuiteCRM ay umaaasa sa mga session ng PHP para makapag imbak ng importanteng impormasyon habang naka konekta sa web server na ito.
											<br><br>Ang isang karaniwang hindi pagsasaayos ay ang <b>'session.save_path'</b> ang direktiba ay hindi pinupunto ang wastong direktoryo. <br>
											<br> Mangyaring i-tama ang iyong <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> sa php.ini payl n.a matatagpuan sa ibaba.",
    'LBL_SESSION_ERR_TITLE' => 'Ang mga session ng PHP ay error sa pagsasaayos',
    'LBL_SYSTEM_NAME' => 'Pangalan ng sistema',
    'LBL_COLLATION' => 'Ang pagkukumpara sa mga pagtatakda',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Magbigay ng isang Pangalan ng Sistema para sa halimbawa ng SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Pumili ng tagpi na payl mula sa iyong lokal na computer',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php bersyon 5 o higit pa ang kinakailangan.',
    'LBL_MINIMUM_PHP_VERSION' => 'Ang pinakamaliit na kinakailangan sa bersyon ng Php ay 5.1.0. Ang inirekumenda sa bersyon ng Php ay 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Ang kasalukuyan ng iyong bersyon sa php ay ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Ang bersyon ng php ay 5.2.x na inirerekumenda',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Ang Php Backward Compatability na paraan ay binuksan. I-set ang zend.ze1_compatibility_mode sa Off para magpatuloy',
    'LBL_STREAM' => 'Ang PHP ay nagbibigay-daan sa paggamit ng stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Inpormasyon sa bagong akawnt',
        'type' => 'sistema',
        'description' => 'Ang ginagamit ng template na ito kapag nagpadala ang System Administrator ng mga bagong password sa isang gumagamit.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ito ang iyong account username at pansamantalang password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Pagkatapos maglog in gamit ang password sa ibabaw, ikaw ay maaaring kinakailangang mag-reset ng password sa isa sa iyong mapili.
</p> </td>        </tr><tr><td colspan=\"2\"></td>       </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Ito ang iyong account username at pansamantalang password:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

Pagkatapos maglog in gamit ang password sa ibabaw, ikaw ay maaaring kinakailangang mag-reset ng password sa isa sa iyong mapili.',
        'name' => 'Ang ginawa ng sistema sa email ng password',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'I-reset ang password ng iyong akawnt',
        'type' => 'sistema',
        'description' => "Ang ginagamit na template para magpadala sa gumagamit ng link na ibalik sa dati mag-click upang i-reset ang mga gumagamit ng password ng akawnt.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Kamakailan lamang ikaw ay kinakailangan sa $contact_user_pwd_last_changed para makapagreset ng iyong account password. </p><p>I-click ang link sa ibaba para makapagreset ng iyong password:</p><p> $contact_user_link_guid </p> </td> </tr><tr><td colspan=\"2\"></td>      </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Kamakailan lamang ikaw ay kinakailangan sa $contact_user_pwd_last_changed para makapagreset ng iyong account password.

I-click ang link sa ibaba para makapagreset ng iyong password:

$contact_user_link_guid',
        'name' => 'Anga email nakalimutan ang password',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Ang kowd na dalawang sanhi ng pagpapatunay',
        'type' => 'sistema',
        'description' => "Itong template ay ginagamit upang magpadala sa isang gumagamit ng kowd para sa dalawang pagpapatunay ng sanhi.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ang kodigo na may dalawang sanhi ng pagpapatunay ay <b>$code</b>.</p> </td>      </tr><tr><td colspan=\"2\"></td>     </tr> </tbody></table> </div>',
        'txt_body' =>
            'Ang dalawang kowd na pagpapatunay sa factor ng $code.',
        'name' => 'Ang email na may dalawang pagpapatunay na sanhi',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Pangalan mula sa:',
    'LBL_FROM_ADDR' => '"Mula" sa Address:',

    'LBL_WIZARD_SMTP_DESC' => 'Magbigay ng account sa email na gagamitin sa pagpapadala ng mga email, kagaya ng mga notipikasyon sa asaynment at mga password ng gumagamit na baguhan. Ang mga gumagamit ay makakatanggap ng mga email mula sa SuiteCRM, bilang isang naipadala mula sa tukoy na account sa email.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pumili ng tagapagpapabigay ng iyong Email:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Palitan',
    'LBL_SMTPTYPE_OTHER' => 'Iba pa',
    'LBL_MAIL_SMTP_SETTINGS' => 'Espesipikasyon sa Serber ng SMTP',
    'LBL_MAIL_SMTPSERVER' => 'Ang Serber ng SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Ang port ng SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gamitin ang Awtentikasyon sa SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Paganahin sa SMTP higit sa SSL at TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Email Address sa Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'Password sa Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Pinapayagan ang mga gumagamit na makagamit sa account na ito para papalitang email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kung ang opsyon na ito ay napilian, ang lahat ng gumagamit ay maaaring makakapagpadala ng mga email gamit ang account sa mail na papalitan na ginamit para makapagpadala ng mga notipikasyon sa sistema at mga alerto. Kung ang opsyon na ito ay hindi pinilian, ang mga gumagamit ay maaaring pa ring makakapaggamit sa serber ng mail na papalitan matapos makapagbigay ng impormasyon sa kanilang sariling account.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Password sa Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID ng Yahoo! Mail:',

    'LBL_EXCHANGE_SMTPPASS' => 'Pagpapalit ng Password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Pagpapalit ng Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Pagpapalit sa Port ng Serber:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Pagpapalit ng Serber:',


    'LBL_MAIL_SMTPUSER' => 'Ang username ng SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Ang Password sa SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Pagpatatak',
    'LBL_WIZARD_SYSTEM_DESC' => 'Magbigay ng pangalan sa iyong organisasyon at logo nang sa ganun ikaw ay magpa-tatak sa iyong SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Ang Pangalan:',
    'SYSTEM_NAME_HELP' => 'Ito ang pangalan na naka-displey sa bar ng titulo sa iyong browser.',
    'NEW_LOGO' => 'Pumili ng Logo:',
    'NEW_LOGO_HELP' => 'Ang format sa payl ng imahe ay maaaring .png o .jog. Ang maksimong taas ay 170px, at ang maksimong lapad ay 450px. Anumang imahe na iiupload na mas malaki pa sa anumang direksyon ay i-iskala sa maks na mga dimensiyon na ito.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'I-upload',
    'CURRENT_LOGO' => 'Logo sa Pangkasalukuyan:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Pagpili ng sitwasyon',
    'LBL_WIZARD_SCENARIO_DESC' => 'Ito ay upang payagan pag aayus ng ipinapakita modules batay sa iyong mga kinakailangan. Bawat isa sa mga modules ay maaaring paganahin pagkatapos iinstall gamit ang mga pahina ng administrsyon.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Walang mga sitwasyon sa kasalukuyang nakatakda sa pagsasayos ng linya (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Ang Lokal na mga setting sa sistema',
    'LBL_WIZARD_LOCALE_DESC' => 'Tukuyin kung papaano ang gusto mong maipa-displey na data sa SuiteCRM, na basi sa iyong heograpikal na lokasyon. Ang mga setting na iyong ibinigay rito ay magiging mga setting na naka-default. Ang mga gumagamit ay maaaring makapag-set ng kani-kanilang mga sariling preferensiya.',
    'LBL_DATE_FORMAT' => 'Ayos ng petsa:',
    'LBL_TIME_FORMAT' => 'Ayos ng oras:',
    'LBL_TIMEZONE' => 'Oras sa Zone:',
    'LBL_LANGUAGE' => 'Salita:',
    'LBL_CURRENCY' => 'Ang Halaga:',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo ng salapi:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 kowd ng salapi:',
    'LBL_NUMBER_GROUPING_SEP' => 'panghiwalay sa 1000s:',
    'LBL_DECIMAL_SEP' => 'Simbolo ng Decimal:',
    'LBL_NAME_FORMAT' => 'Ayos ng pangalan:',
    'UPLOAD_LOGO' => 'Pakiusap maghintay, sa logo pag upload..',
    'ERR_UPLOAD_FILETYPE' => 'Ang klase ng payl ay hindi pwede, pakiusap i upload ang jpeg o png,.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Hindi kilalang payl na i-upload kamaliang naganap.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Ang ina-upload na file ay lumampas sa upload_max_filesize na direktoryo sa php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Ang ina-upload na file ay lumampas sa MAX_FILE_SIZE na nakatukoy sa direktoryo ng HTML form.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Ang ina-upload na file ay bahagya lamang na naka-upload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Waalng file na ina-upload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Nawawala ang pansamantalang folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Bigong masulatan ang file sa disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => '
Ang ekstensyon ng PHP ay tumigil sa pag-upload ng payl. Ang PHP ay hindi nagbibigay ng isang paraan upang alamin kung aling ekstensyon ang sanhi ng pag-upload ng payl upang ihinto.',

    'LBL_INSTALL_PROCESS' => 'I-install... ',

    'LBL_EMAIL_ADDRESS' => 'Ang Email Address:',
    'ERR_ADMIN_EMAIL' => 'Ang Email Address ay hindi tama ang Administrador.',
    'ERR_SITE_URL' => 'Ang site ng URL ay kinakailangan.',

    'STAT_CONFIGURATION' => 'Ang pag-configure sa mga koneksyon...',
    'STAT_CREATE_DB' => 'Lumikha ng database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Ang mga setting ay lumikha ng kakulangan...',
    'STAT_INSTALL_FINISH' => 'Tapos na i-install...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Anga proseso ng pag install ay tapos na, <a href=%s">pakiusap ilog in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Pakiusap tanggapin mo muna ang lisensya',

    'LBL_MORE_OPTIONS_TITLE' => 'Ang mga higit pang pagpipilian',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Mali ng database',
    'LBL_OLD_PHP' => 'Ang lumang bersyon ng PHP ay nakita!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'Alam ko ang mga peligro at nais na magpatuloy.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Ang Tagagamit',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Ang pangalan ng database',
    'LBL_DBCONFIG_MSG3' => 'Naglalaman ng pangalan sa database ang data para sa halimbawa ng SuiteCRM na tungkol sa i-install mo.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Pangalan ng Host',
    'LBL_DBCONFIG_MSG2' => 'Ang pangalan ng web server o makina (host) ang database kung saan matatagpuan (tulad ng www.mydomain.com). Kung i-install nang lokal, mas mahusay na gamitin ang \'localhost\' kaysa sa \'127.0.0.1\', para sa mga dahilan ng pagganap.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Ang pangalang ginamit at password ng administrator ng database na maaaring nilikha ng mga talahanayan ng database ng mga gumagamit at kung sino ang maaaring sumulat sa database ay kinakailangan upang i-set up ang database ng SuiteCRM.'
);
