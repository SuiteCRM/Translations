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
    'LBL_BASIC_SEARCH' => 'Paspas nga Filter',
    'LBL_ADVANCED_SEARCH' => 'Abante nga Filter',
    'LBL_BASIC_TYPE' => 'Sukaranan nga Matang',
    'LBL_ADVANCED_TYPE' => 'Pasiuna nga Matang',
    'LBL_SYSOPTS_2' => 'Unsa nga matang sa database ang magamit para sa instans sa SuiteCRM nga imong i-install?',
    'LBL_SYSOPTS_DB' => 'Nganli ang Matang sa Database',
    'LBL_SYSOPTS_DB_TITLE' => 'Klase sa Database',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Palihug sa pagtarong sa mga musunod nga mga kasaypanan sa dili pa magpadayon:',
    'ERR_DB_VERSION_FAILURE' => 'Dili mamahimong makatsek sa bersyon sa database.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Paghatag ug ngalan sa tiggamit para sa tiggamit sa admintrador sa SuiteCRM. ',
    'ERR_ADMIN_PASS_BLANK' => 'Paghatag ug password para sa tiggamit sa administrador sa SuiteCRM. ',

    'ERR_CHECKSYS' => 'Ang mga kasaypanan kay nakit-an sa panahon sa pagtsek sa iyang pagka-uyon. Aron ang imong pag-instalar sa SuiteCRM kay mogana sa husto nga pamaagi, palihug sunda ang mga husto nga mga lakang para maadres ang mga isyu nga nalista sa ubos nga bahin ug mamahimo usab nga pislita ang buton sa pagsusi, o usba ang pag-instalar.',
    'ERR_CHECKSYS_CALL_TIME' => 'Ang Pagtugot sa Oras sa Tawag sa Pass Reperens kay On (gikinahanglang itakda kini nga Off sa php.ini)',
    'ERR_CHECKSYS_CURL' => 'Wala makita: Ang SuiteCRM Scheduler kay modagan nga aduna\'y limitado nga katuyoan.',
    'ERR_CHECKSYS_IMAP' => 'Wala makit-e: Ang InboundEmail ug mga Kampanya (email) kay nagkinahanglan sa mga librarya sa IMAP. Wala niini ang mugana.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Itakda kini sa ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M o mas dako sa imong php.ini file)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Pasidaan: Dili mamahimong Suwatan',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Imong bersyon sa PHP kay dili supportado sa SuiteCRM. Ikaw kay naninghanlan og i-install ang bersyon na pareha sa SuiteCRM application. Palihug kog pacheck up sa Compatibility Matrix sa Pagawas na Pahibalo para supportado PHP Bersyon. Imong bersion kay ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Ang bersyon sa IIS kay wala gisuportahan sa SuiteCRM. Gikinahanglan nimong i-instalar ang bersyon nga mo-uyon sa aplikasyon sa SuiteCRM. Palihug ug konsulta sa Matrix sa Pagka-uyon sa mga Sulat sa Pagpagawas para sa mga gisuportahan nga mga Bersyon sa IIS. Ang imong bersyon kay ',
    'ERR_CHECKSYS_FASTCGI' => 'Nakita namo nga wala ka migamit ug tigdumala sa pagmapa sa FastCGI para sa PHP. Gikinahanglan nimo i-instalar/i-kompigyur ang bersyon nga mo-uyon sa aplikasyon sa SuiteCRM. Palihug ug konsulta sa Matrix sa Pagka-uyon sa mga Sulat sa Pagpagawas para sa mga gisuportahan nga mga Bersyon. Palihug sa pagtan-aw sa <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> para sa mga detalye ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Para sa labing maayo nga kasinatiaan gamit ang IIS/FastCGI sapi, i-set ang fastcgi.logging sa 0 sa imong php.ini nga file.',
    'LBL_DB_UNAVAILABLE' => 'Wala ang database',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Ang Suporta sa Database kay wala makita. Palihug sigurado-a nga anaa nimo ang mga gikinahanglang mga drayber para sa usa sa mga musunod nga gisuportahan nga mga Matang sa Database: MySQL o MS SQLServer. Basin manginahanglan ka sa pag-uncomment sa ekstensyon sa payl nga php.ini, o paghan-ay ug balik uban sa husto nga payl nga binary, nagdepende sa bersyon sa imong PHP. Palihug ug dangop sa imong PHP Manwal para sa dugang nga kasayoran sa kung unsaon pagpagana sa Suporta sa Database.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Ang mga gimbuhaton nga aduna\'y kalabutan sa mga Librarya sa XML Parser nga gikinahanglan sa aplikasyon nga SuiteCRM kay wala makit-e. Basin manginahanglan ka sa pag-uncomment sa ekstensyon sa payl nga php.ini, o paghan-ay ug balik uban sa husto nga payl nga binary, nagdepende sa bersyon sa imong PHP. Palihug ug dangop sa imong PHP Manwal para sa dugang nga kasayoran.',
    'ERR_CHECKSYS_MBSTRING' => 'Ang mga gimbuhaton nga aduna\'y kalabutan sa ekstensyon sa Multibyte Strings PHP (mbstring) nga gikinahanglan sa aplikasyon nga SuiteCRM kay wala makit-e. <br/><br/>Kasagaran, ang modyul nga mbstring kay wala gipagana pinaagi sa default sa PHP ug gikinahanglang paganahon uban ang --enable-mbstring kung ang natukod na ang PHP binary. Palihug ug dangop sa imong PHP Manwal para sa dugang nga kasayoran kung unsaon sa pagpagana ang suporta sa mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Ang payl nga kompig kay anaa na apan dili mamahimong suwatan. Palihug ug sunod sa mga gikinahanglang mga lakang para mamahimong na suwatan ang payl. Nagdepende sa imong Gipagana nga sistema, basin manginahanglan kini sa imong pag-usab sa mga pagtugot pinaagi sa pagpapadagan sa chmod 766, o sa pagklik gamit ang tuo nga bahin sa ngalansa payl para magamit ang mga kahimtang ug ma-uncheck ang mga opsyon nga mubasa lamang niini.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Ang payl nga kompig sa pagsapaw kay anaa na apan dili mamahimong suwatan. Palihug ug sunod sa mga gikinahanglang mga lakang para mamahimong na suwatan ang payl. Nagdepende sa imong Gipagana nga sistema, basin manginahanglan kini sa imong pag-usab sa mga pagtugot pinaagi sa pagpapadagan sa chmod 766, o sa pagklik gamit ang tuo nga bahin sa ngalansa payl para magamit ang mga kahimtang ug ma-uncheck ang mga opsyon nga mubasa lamang niini.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Ang Kustom nga Direktoryo kay anaa na apan dili mamahimong suwatan. Basin manginahanglan kini sa imong pag-usab sa mga pagtugot (chmod 766) o pagklik niini gamit ang tuo nga bahin ug pag-uncheck sa opsyon nga mubasa lamang niini, nagdepende sa imong Gipagana nga sistema. Palihug ug sunod sa mga gikinahanglang mga lakang para mamahimong na suwatan ang payl.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Ang mga payl o mga direktoryo nga nalista sa ubos nga bahin kay dili mamahimong suwatan o nawagtang ug dili mamahimong buhaton. Nagdepende sa imong Gipagana nga Sistema, ang pagtul-id niini kay bashin manginahanglan sa imong pag-usab sa mga pagtugot sa mga payl o ginikanan nga direktoryo (chmod 755), o ang pagklik sa ginikanan nga direktoryo sa tuo nga bahin ug ang pag-uncheck sa opsyon nga 'mubasa lamang' ug ang pagdapat niini sa tanan nga mga subfolder.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Nasapawan ang kompig',
    'ERR_CHECKSYS_SAFE_MODE' => 'Ang Luwas nga Metodo kay On (basin gusto nimo ni dili paganahon sa php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Ang suport sa ZLib kay wala makit-e: Ang SuiteCRM kay mu-ani ug dako kaayo nga mga benepisyo sa pasundayag uban ang kompresyon sa zlib.',
    'ERR_CHECKSYS_ZIP' => 'Ang suporta sa ZIP kay wala makit-e: Ang SuiteCRM kay nanginahanglan sa suporta sa ZIP aron sa pagproseso sa mga payl nga nakompres.',
    'ERR_CHECKSYS_PCRE' => 'Ang suporta sa librarya sa PCRE kay wala makit-e: Ang SuiteCRM kay nanginahanglan sa suporta sa librarya sa PCRE aron sa pagproseso sa istelo sa PERL sa kasagaran nga pagparang sa sumbahanan sa ekspresyon.',
    'ERR_CHECKSYS_PCRE_VER' => 'Ang bersyon sa librarya sa PCRE: Ang SuiteCRM kay nanginahanglan sa 7.0 o labaw pa nga librarya sa PCRE para sa pagproseso sa istelo sa PERL sa kasagaran nga pagparang sa sumbahanan sa ekspresyon.',
    'ERR_DB_ADMIN' => 'Ang gihatag nga ngalan sa administrador sa database ug/o ang password kay dili balido, ug ang koneksyon ngadto sa database kay dili ma-establisar: Palihug ug pasulod sa balido nga ngalan ug password. (Kasaypanan: ',
    'ERR_DB_ADMIN_MSSQL' => 'Ang gihatag nga ngalan sa administrador sa database ug/o ang password kay dili balido, ug ang koneksyon ngadto sa database kay dili ma-establisar. Palihug ug pasulod sa balido nga ngalan ug password.',
    'ERR_DB_EXISTS_NOT' => 'Ang ginganlan nga database kay wala.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database larga na naa siyaog config data. Og gusto eh ipa dagan i-install nga nag gusto nga database, palihug ko og balik og padagan og pilia. "Nahulog og balik og himo na naa ang SuiteCRM na lamesa?" Nag bag o, gamita ang ge Bag o nimo nga |Wizard na ang Admin Kunsulta. Palihug kog basa nga bag o na dokumento located <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">diria</a>.',
    'ERR_DB_EXISTS' => 'Ang gihatag nga Ngalan sa Database kay nagamit na -- dili makahimo ug usa pa nga aduna\'y susama nga ngalan.',
    'ERR_DB_EXISTS_PROCEED' => 'Ang gihatag nga Ngalan sa Database kay nagamit na. Mamahimo nimo <br>1. pisliton ang buton sa pagbalik ug pili ug bag-o nga ngalan sa database <br>. i-klik ang sunod ug tiwas apan ang tanang lamesa nga naa niini nga database kay ihulog. <strong>Buot ipasabot niini nga ang imong mga lamesa ug kasayoran kay mawagtang.</strong>',
    'ERR_DB_HOSTNAME' => 'Ang pangan sa host kay dili pwede nga blangko.',
    'ERR_DB_INVALID' => 'Inbalid ang klase sa database nga gipili.',
    'ERR_DB_LOGIN_FAILURE' => 'Ang gihatag nga tig-abiabi nga database, ngalan, ug/o ang password kay dili balido, ug ang koneksyon ngadto sa database kay dili ma-establisar. Palihug ug pasulod ug balido nga tig-abiabi, ngalan ug password',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Ang gihatag nga tig-abiabi nga database, ngalan, ug/o ang password kay dili balido, ug ang koneksyon ngadto sa database kay dili ma-establisar. Palihug ug pasulod ug balido nga tig-abiabi, ngalan ug password',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Ang gihatag nga tig-abiabi nga database, ngalan, ug/o ang password kay dili balido, ug ang koneksyon ngadto sa database kay dili ma-establisar. Palihug ug pasulod ug balido nga tig-abiabi, ngalan ug password',
    'ERR_DB_MYSQL_VERSION' => 'Ang bersyon nga (%s) sa imong MySQL kay wala gisuportahan sa SuiteCRM. Gikinahanglan nimo ang pag-instalar ug bersyon nga mu-uyon sa aplikasyon nga SuiteCRM. Plaihug ug dangop sa Matrix sa Pagka-uyon sa mga Sulat sa Pagpagawas para sa mga bersyon nga gisuportahan sa MySQL.',
    'ERR_DB_NAME' => 'Ang pangan sa database kay dili pwede nga blangko.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Ang pangan sa database kay dili pwede nga adunay '\\', '/', or '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Ang ngalan sa database kay dili mamahimong sugdan sa usa ka numero, '#', o '@' ug dili mamahimong maglangkob ug espasyo, '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', o '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Ang ngalan sa database kay mamahimo lamang maglangkob ug mga karakter nga alphanumeric ug mga simbolo '#', '_' o '$",
    'ERR_DB_PASSWORD' => 'Ang mga password nga gihatag para sa administrador sa database sa SuiteCRM kay wala naparang. Palihug sa pagpasulod ug balik sa pareho nga mga password sa natad sa password.',
    'ERR_DB_PRIV_USER' => 'Paghatag ug ngalan sa admistrador sa database. Ang ngalan kay gikinahanglan para sa pasiuna nga koneksyon ngadto sa database.',
    'ERR_DB_USER_EXISTS' => 'Ang ngalan sa tiggamit alang sa ngalan sa database sa SuiteCRM kay nagamit na -- dili mamahimong magbuhat ug usa pa nga aduna\'y susama nga ngalan. Palihug ug pasulod sa bag-o nga ngalan sa tiggamit.',
    'ERR_DB_USER' => 'Isulod ang ngalan sa tiggamit alang sa database sa administrador sa SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Palihug sa pagtarong sa mga musunod nga mga kasaypanan sa dili pa magpadayon:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Ang mga password nga gihatag alang sa tiggamit sa database sa SuiteCRM kay wala nagparang. Palihug ug sulod ug balik sa mga pareho nga mga password sa mga natad sa password.',
    'ERR_ERROR_GENERAL' => 'Ang mga mosunod nga mga error kay nasugatan:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Dili mamahimong wagtangon ang payl: ',
    'ERR_LANG_MISSING_FILE' => 'Dili makita ang payl: ',
    'ERR_LANG_NO_LANG_FILE' => 'Wala nakita ang pakete sa pinulongan sa sulod sa include/language: ',
    'ERR_LANG_UPLOAD_1' => 'Aduna\'y problema sa imong gi-upload. Palihug sa pag-usab.',
    'ERR_LANG_UPLOAD_2' => 'Ang mga Pakete sa Pinulongan kay gikinahanglang mga archive nga ZIP.',
    'ERR_LANG_UPLOAD_3' => 'Ang PHP kay dili makapabalhin sa payl nga temp ngadto sa direktoryo sa pag-upgrade.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Ang gihatag nga direktoryo sa log kay dili balid.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Ang gihatag nga direktoryo sa log kay dili masuwatan.',
    'ERR_NO_DIRECT_SCRIPT' => 'Wala dayun maproseso ang script.',
    'ERR_NO_SINGLE_QUOTE' => 'Dili magamit ang usa ka quotation mark para sa ',
    'ERR_PASSWORD_MISMATCH' => 'Ang mga password nga gihatag para sa tiggamit nga administrador sa SuiteCRM kay wala magtugma. Palihug sa pagpasulod ug balik sa pareho nga mga password sa mga natad sa password.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Dili pwede ma-suwatan ang <span class=stop>condig.php</span> nga file.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Pwede ka magpadayon sa pag-install pinaagi sa manwal nga pagbuhat sa config.php file og pagbutang sa impormasyon nga gi-configure sa ubos padulong sa config.php nga file. Bisan pa niana, kinahanglan<strong>nimo</strong>magbuhat sa config.php nga file sa dili pa magpadayon sa sunod nga lakang.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Nakahinumdom ba ka na magbuhat ka og config.php file?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Pahibalo: Dili makasuwat sa config.php nga file. Palihug og panigurado nga anaa.',
    'ERR_PERFORM_HTACCESS_1' => 'Dili pwede maka-suwat sa ',
    'ERR_PERFORM_HTACCESS_2' => ' file.',
    'ERR_PERFORM_HTACCESS_3' => 'Kung gusto ka nga ma-secure imong log file gikan sa pag-access pinaagi sa browser, pag buhat og . htaccess file sa imong direktoryo sa log nga adunay linya nga:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Dili nato makit-an ang makita ang koneksyon sa internet.</b> Kung aduna ka na\'y koneksyon, palihug ug bisita sa <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> aron sa pagparehistro sa SuiteCRM. Sa pagpahibalo ka namo sa bisan gamay tungod kung unsa ang mga plano imong kompanya sa paggamit sa SuiteCRM, masiguro nato nga mahatod namo ang tukma nga aplikasyon para sa mga panginahanglan sa imong negosyo.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Ang gihatag nga direktoryo sa session kay dili balid nga direktoryo.',
    'ERR_SESSION_DIRECTORY' => 'Ang gihatag nga direktoryo sa session kay dili masuwatan nga direktoryo.',
    'ERR_SESSION_PATH' => 'Kinahanglan ang agianan sa session kung gusto ka i-specify ang imoha.',
    'ERR_SI_NO_CONFIG' => 'Wala nimo gi-apil ang config_si.php sa dokumento sa root, o wala nimo gi-define ang $sugar_config_si sa config.php',
    'ERR_SITE_GUID' => 'Kinahanglan ang ID sa Aplikasyon kung gusto ka i-specify ang imoha.',
    'ERROR_SPRITE_SUPPORT' => "Kasamtangang dili namo mamahimong mapangita ang librarya sa GD, isip usa ka resulta dili nimo mamahimong gamiton ang pagpagana sa Sprite sa CSS.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Pasidaan: Ang konpigurasyon sa imong PHP kay gikinahanghlang mausab aron sa pagtugot sa mga payls nga labing menos sa 6MB para ma-upload.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'I-upload ang Gidak-on sa Payl',
    'ERR_URL_BLANK' => 'Ihatag nga pundasyon nga URL para sa instans sa SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Dili ma pangita ang ga install sa rekord sa',
    'ERROR_MANIFEST_TYPE' => 'Manifest file dapat specify ang package sulat.',
    'ERROR_PACKAGE_TYPE' => 'Manifest file specifies an wala ma ilhan nga package na sulat',
    'ERROR_VERSION_INCOMPATIBLE' => 'Ang pagupload sa file kay dili siya Kompatible sa bersyon og SuiteCRM: ',

    'LBL_BACK' => 'Balik',
    'LBL_CANCEL' => 'Kanselahon',
    'LBL_ACCEPT' => 'Akong gidawat',
    'LBL_CHECKSYS_CACHE' => 'Masuwatan nga Cache Sub-Directories',
    'LBL_DROP_DB_CONFIRM' => 'Ang gihatag nga Ngalan sa Database kay nagamit na.<br>Mamahimo nimong:<br>1. I-klik ang buton sa Pagkanselar ug pagpili ug bag-o nga ngalan sa database, o <br>2. I-klik ang buton sa Pagdawat ug magpadayon. Ang tanan nga nilungtad na mga lamesa sa database kay ihulog. <strong>Nagpasabot lang kini nga ang tanan nga mga lamesa ug ang mga kasayoran nga ninglungtad na kaniadto kay mawala.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponent',
    'LBL_CHECKSYS_CONFIG' => 'Masuwatan nga SuiteCRM Configuration File (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL Modyol',
    'LBL_CHECKSYS_CUSTOM' => 'Mamahimong Suwatan nga Kustom nga Direktoryo',
    'LBL_CHECKSYS_DATA' => 'Masuwatan nga Data Baylo-Directories',
    'LBL_CHECKSYS_IMAP' => 'IMAP Modyol',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'Modyul sa mga String sa MB',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Walay Limitasyon)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Walay kinutuban)',
    'LBL_CHECKSYS_MEM' => 'Utlanan sa Memorya sa PHP',
    'LBL_CHECKSYS_MODULE' => 'Masuwatan nga Modules Baylo-Directories og Files',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Dili Aveylabol',
    'LBL_CHECKSYS_OK' => 'Sige',
    'LBL_CHECKSYS_PHP_INI' => 'Gihimutangan sa imong gikompigyur nga payl sa PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP Bersyon',
    'LBL_CHECKSYS_IISVER' => 'Bersyon sa IIS',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Susihag balik',
    'LBL_CHECKSYS_STATUS' => 'Stado',
    'LBL_CHECKSYS_TITLE' => 'Pagdawat ug pagsusi sa system',
    'LBL_CHECKSYS_XML' => 'XML nag Konecta',
    'LBL_CHECKSYS_ZLIB' => 'Modyul sa Kompresyon sa ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Tigdumala nga Modyul sa ZIP',
    'LBL_CHECKSYS_PCRE' => 'Librarya sa PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Palihug ug ayo sa mga musunod nga mga payl o direktoyro sa dili pa magpadayon:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Palihug ug ayo sa mga musunod nga mga direktoyro ug mga payl sa ubos nila sa dili pa magpadayon:',
    'LBL_CHECKSYS_UPLOAD' => 'Mamahimong Sulatan nga Direktoryo sa Pag-upload',
    'LBL_CLOSE' => 'Sirado',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'kay mahimo na',
    'LBL_CONFIRM_DB_TYPE' => 'Klase sa Database',
    'LBL_CONFIRM_NOT' => 'dili',
    'LBL_CONFIRM_TITLE' => 'Kompirma mga setting',
    'LBL_CONFIRM_WILL' => 'mo',
    'LBL_DBCONF_DB_DROP' => 'Mga Lamesa sa Gihulog',
    'LBL_DBCONF_DB_NAME' => 'Ngalan sa Database',
    'LBL_DBCONF_DB_PASSWORD' => 'Password sa Tiggamit sa Database sa SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Isulod og Balik ang Password sa Tiggamit sa Database sa SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Tiggamit sa Database sa SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Tiggamit sa Database sa SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Ngalan sa Administrator sa Database',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Password sa Administrator sa Database',
    'LBL_DBCONF_COLLATION' => 'Nagbangga',
    'LBL_DBCONF_CHARSET' => 'Set sa Character',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Butngan ang Database og Demo Data?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Pagpili og Kasayoran nga Demo',
    'LBL_DBCONF_HOST_NAME' => 'Pangalan sa Host',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instans sa Tig-abiabi',
    'LBL_DBCONFIG_SECURITY' => 'Para sa seguridad nga katuyoan, mamahimo nimo nganlan ang tiggamit sa ekslusibo nga database aron sa pagkonek ngadto sa database sa SuiteCRM. Ang kini nga tiggamit kay mamahimong magsuwat, mag-update ug mobawi og kasayoran ngadto sa database sa SuiteCRM nga mamahimo sa kini nga instans. Ang kini nga tiggamit kay mamahimong ginganlan sa administrador sa database nga naa sa ibabaw, o mamahimo kang makahatag og bag-o o ninglungtad na nga kasayoran sa database.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Maghatag ug ninglungtad na nga tiggamit',
    'LBL_DBCONFIG_CREATE_DD' => 'Ipatin-aw ang tiggamit nga himuon',
    'LBL_DBCONFIG_SAME_DD' => 'Susama sa Tiggamit nga Admin',
    'LBL_DBCONF_TITLE' => 'Kumpigurasyon sa Database',
    'LBL_DBCONF_TITLE_NAME' => 'Maghatag ug Ngalan sa Database',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Maghatag ug Kasayoran sa Tiggamit sa Database',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Password',
    'LBL_DISABLED_DESCRIPTION_2' => 'Human sa pagkahimo niini nga kausaban, mamahimo nimo i-klik ang buton nga "Start" sa ubos nga bahin aron sa pagsugod sa imong pag-instalar. <i>Human sa pagkompleto sa pag-instalar, gusto nimo usbon ang bili sa \'installer_locked\' ngadto sa \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Ang tig-instalar kay napadagan na ika-usa. Isip usa ka luwas nga sukod, gibaldado na kini gikan sa pagdagan sa ika-duha nga higayon. Kung ikaw kay hingpit nga sigurado sa pagpadagan niini ug balik, palihug og adto sa imong payl nga config.php ug pangita-a (o dugangi) ang baryabol nga ginatawag nga \'installer_locked\' ug itakda kini nga \'false\'. Ang linya kay gikinahanglang ing-ani ang dagway:',
    'LBL_DISABLED_HELP_1' => 'Para sa tabang sa pag-instalar, palihug bisitaha ang SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'mga porum sa suporta',
    'LBL_DISABLED_TITLE_2' => 'Ang Pag-instalar sa SuiteCRM kay Nabaldado na',
    'LBL_HELP' => 'Nangita og tabang',
    'LBL_INSTALL' => 'Install',
    'LBL_INSTALL_TYPE_TITLE' => 'Mga Opsyon sa Pag-instalar',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Pagpili ug Matang sa Pag-install',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Tipikal nga Pag-install</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Kustom nga Pag-install</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Nanginahanglan ug pinakagamay nga kasayoran sa pag-instalar. Girekomendar sa mga bag-ong tiggamit.',
    'LBL_INSTALL_TYPE_MSG3' => 'Naghatag ug mga dugang nga mga opsyon aron sa pagtakda sa panahaon sa pag-instalar. Kasagaran niini nga mga opsyon kay anaa pud human ang pag-instalar sa mga iskrin sa admin. Girekomendar sa mga tiggamit nga nag-una.',
    'LBL_LANG_1' => 'Aron sa paggamit sa pinulongan sa SuiteCRM gawas sa default nga pinulongan (US-Englis), mamahimo nimo i-upload ug i-instalar ang pakete sa pinulongan niining panahona. Mamahimo nimo i-upload ug i-install ang mga pakete sa pinulongan gikan usab sa sulod sa aplikasyon nga SuiteCRM. Kung gusto nimo sal-angan kini nga lakang, i-klik ang Sunod.',
    'LBL_LANG_BUTTON_COMMIT' => 'Install',
    'LBL_LANG_BUTTON_REMOVE' => 'Tangtangon',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Ge tangtang',
    'LBL_LANG_BUTTON_UPLOAD' => 'I-upload',
    'LBL_LANG_NO_PACKS' => 'wala',
    'LBL_LANG_PACK_INSTALLED' => 'Ang mga musunod nga mga pakete sa pinulongan ka na-instalar na: ',
    'LBL_LANG_PACK_READY' => 'Ang mga musunod nga mga pakete sa pinulongan kay andam sa nga ma-instalar: ',
    'LBL_LANG_SUCCESS' => 'Ang mga pakete sa pinulongan kay malampusong na-upload.',
    'LBL_LANG_TITLE' => 'Pakete sa Pinulongan',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Nag-instalar na karon og SuiteCRM. Kini kay mamahimong molungtad ug mga pipila sa minuto.',
    'LBL_LANG_UPLOAD' => 'Mag-upload ug Pakete sa Pinulongan',
    'LBL_LICENSE_ACCEPTANCE' => 'Pagdawat sa Lisensya',
    'LBL_LICENSE_CHECKING' => 'Gisusi ang imong sistema para sa pagka-uyon.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Gisusi ang Palibot',
    'LBL_LICENSE_CHKDB_HEADER' => 'Gi-suta ang mga Credential nga DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'Napasar sa sistema ang pagsusi para sa pagka-uyon.',
    'LBL_CREATE_CACHE' => 'Nag-andam sa pag-instalar...',
    'LBL_LICENSE_REDIRECT' => 'Gidirekta ug balik sa ',
    'LBL_LICENSE_I_ACCEPT' => 'Akong gidawat',
    'LBL_LICENSE_PRINTABLE' => ' Mamahimong Ipatik nga Talan-awon ',
    'LBL_PRINT_SUMM' => 'Ipatik ang Gilangkoban',
    'LBL_LICENSE_TITLE_2' => 'Lisensya sa SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Doc.',

    'LBL_ML_ACTION' => 'Aksyon',
    'LBL_ML_DESCRIPTION' => 'Deskripsyon',
    'LBL_ML_INSTALLED' => 'Date ge install',
    'LBL_ML_NAME' => 'Pangalan',
    'LBL_ML_PUBLISHED' => 'Date ge Pasa',
    'LBL_ML_TYPE' => 'Isulat',
    'LBL_ML_UNINSTALLABLE' => 'Dili installable',
    'LBL_ML_VERSION' => 'Bersyon',
    'LBL_MSSQL' => 'Serber sa SQL',
    'LBL_MSSQL2' => 'Serber sa SQL (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'Serber sa SQL (Drayber sa Serber sa Microsoft SQL para sa PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (ekstensyon nga mysql)',
    'LBL_NEXT' => 'Sunod',
    'LBL_NO' => 'Dili',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Nagtakda sa password sa admin sa site',
    'LBL_PERFORM_CONFIG_PHP' => 'Naghimo og kumpigurasyon nga file sa SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Naghimo sa database</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>sa</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Naghimo sa Database nga username og pasword...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Naghimo og default SuiteCRM data',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Naghimo og default scheduler nga mga trabaho',
    'LBL_PERFORM_DEFAULT_USERS' => 'Naghimo og default users',
    'LBL_PERFORM_DEMO_DATA' => 'Nagpadaghan sa mga lamesa sa database uban sa mga kasyoran nga demo (mamahimo kining mukawat ug gamay nga oras)',
    'LBL_PERFORM_DONE' => 'humana<br>',
    'LBL_PERFORM_FINISH' => 'Paghuman',
    'LBL_PERFORM_OUTRO_1' => 'Ang setup sa SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' kay kompleto na!',
    'LBL_PERFORM_OUTRO_3' => 'Kinatibuk-ang oras: ',
    'LBL_PERFORM_OUTRO_4' => ' mga segundo.',
    'LBL_PERFORM_OUTRO_5' => 'Gibana-bana nga nagamit sa memory: ',
    'LBL_PERFORM_OUTRO_6' => ' bytes.',
    'LBL_PERFORM_SUCCESS' => 'Malampuson!',
    'LBL_PERFORM_TABLES' => 'Naghimo ug mga lamesa sa aplikasyon nga SuiteCRM, ang mga lamesa sa pagsusi ug ang mga may relasyon nga metadata',
    'LBL_PERFORM_TITLE' => 'Himua ang Setup',
    'LBL_PRINT' => 'Print',
    'LBL_REG_CONF_1' => 'Palihug og kompleto sa mubo nga proma nga anaa sa ubos nga bahin para makadawat ug mga anunsyo sa produkto, balita sa pagbansay, mga ispesyal nga halad ug pagdapit sa mga ispesyal nga panghitabo gikan sa SuiteCRM. Wala kami mamaligya, magpa-abang, magbahin o kon dili nag-apod-apod sa mga kasayoran nga nakolekta diri ngadto sa mga ikatulong partido.',
    'LBL_REG_CONF_3' => 'Salamat sa pagregister. Pislita ang Finish button para maka-sulod sa SuiteCRM. Kinahanglan paka makalog in og kausa gamit ang username nga "admin" og password nga imong gisuwat sa step 2.',
    'LBL_REG_TITLE' => 'Pagrehistro',

    'LBL_REQUIRED' => '* Kinahanglan nga field',

    'LBL_SITECFG_ADMIN_Name' => 'Ngalan sa Admin sa Aplikayon nga SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Ipasulod og balik ang Password sa Tiggamit nga Adminitrador sa SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Password sa Tiggamit nga Admin sa SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID sa Aplikasyon',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Kung napilian, nanginahanglang maghaatag ka ug ID sa aplikasyon para sa pagsapaw sa mga ID nga awtomatikong gimugna. Ang ID ang nagsiguro nga ang mga sesyon sa usa ka instans sa SuiteCRM kay wala magamit sa ubang pang mga instans. Kung aduna\'y kay kumpol sa mga pag-instalar sa SuiteCRM, sila kay gikinahanglang naggamit ug pareho nga ID sa aplikasyon.',
    'LBL_SITECFG_CUSTOM_ID' => 'Pagbutang og imong kaugalingong ID sa Aplikasyon',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Kung napilian, gikinahanglang nimong ngalan ang tala sa direktoryo para sapawan ang direktoryo nga default para sa tala sa SuiteCRM. Bisan asa pa nahimutang ang tala sa payl, ang paggamit niini pinaagi sa web browser kay gipugngan sa pagdirektor sa .htaccess ug balik.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Gamit og Custom log Directory',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Kung napilian, gikinahanglang maghatag ka ug luwas nga polder para sa pagtipig sa mga kasayoran sa sesyon sa SuiteCRM. Kini kay mamahimong buhaton aron sa pagpugong sa pagpahuyang sa mga kasayoran sa sesyon sa mga gipakigbahin nga mga serber.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Gamit og Custom Session Directory para sa SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Palihug sa pag-ayo sa mga musunod nga kasaypanan sa dili pa magpadayon:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Talaan sa Direktoryo',
    'LBL_SITECFG_SESSION_PATH' => 'Agi-anan para sa Sesion Directory<br>(kinahanglan masuwatan)',
    'LBL_SITECFG_SITE_SECURITY' => 'Pagpili ug mga Opsyon sa Seguridad',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Kung napili-an, ang sistema kay susihon matag karon ug unya para sa mga bersyon nga gi-update sa aplikasyon.',
    'LBL_SITECFG_SUITE_UP' => 'Awtomatikong Susishon Para sa mga Update?',
    'LBL_SITECFG_TITLE' => 'Kumpigurasyon sa Site',
    'LBL_SITECFG_TITLE2' => 'Ilhon ang Tiggamit sa Pamunoan',
    'LBL_SITECFG_SECURITY_TITLE' => 'Seguridad sa Site',
    'LBL_SITECFG_URL' => 'URL sa SuiteCRM Instance',
    'LBL_SITECFG_ANONSTATS' => 'Ipadala ug mga Wala Mailhi nga mga Istatistika sa Paggamit?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Kung napili-an, ang SuiteCRM kay magpadala ug <b>wala mailhi</b> nga mga istatistika mahitungod sa imong pag-instalar ngadto sa SuiteCRM Inc. kada oras sa pagsusi sa imong sistema para sa mga bag-ong bersyon. Kini nga kasayoran kay makatabang kanato sa mas maayong pagsabot sa kung gi-unsa paggamit ang aplikasyon ug ang giya sa mga paglambo ngadto sa produkto.',
    'LBL_SITECFG_URL_MSG' => 'Isulod ang URL nga gamiton sa pag-access ang instans sa SuiteCRM human sa pag-instalar. Ang URL kay mamahimo sad gamiton isip usa ka pundasyon para sa mga URL sa mga pahina sa aplikasyon sa SuiteCRM. Ang URL kay gikinahanglang maglakip sa web server o ngalan sa makina o adres sa IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Magpasulod ug ngalan para sa imong sistema. Ang kini nga ngalan kay i-displey sa bar sa titulo sa browser kung mobisita ang mga tiggamit sa aplikasyon nga SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Human sa pag-instalar, gikinahanglan nimo gamiton ang ngalan sa admin sa SuiteCRM (default nga ngalan = admin) para sa pagsulod ngadto sa instans sa SuiteCRM. Magpasulod ug password para niini nga ngalan sa administrador. Ang kini nga password kay mamahimong usbon human ang pahiunang pagsulod. Mamahimo sad nimo isulod ang uban pang mga ngalan sa admin nga gamiton gawas sa gihatag nga default nga bili.',
    'LBL_SITECFG_COLLATION_MSG' => 'Pagpili og mga kahimtang sa pagkumpirma (paghan-ay) para sa imong sistema. Ang kini nga mga kahimtang kay makahimo ug mga lamesa uban sa ginganlan nga mga gigamit nga pinulongan. Sa kaso nga ang imong pinulongan kay wala manginahanglan sa mga kahimtang nga ispesyal palihug sa paggamit sa default nga bili.',
    'LBL_SPRITE_SUPPORT' => 'Suporta sa Sprite',
    'LBL_SYSTEM_CREDS' => 'Mga Kredensyal sa Sistema',
    'LBL_SYSTEM_ENV' => 'Palibot sa Sistema',
    'LBL_SHOW_PASS' => 'Ipakita ang mga Password',
    'LBL_HIDE_PASS' => 'Itago ang mga Password',
    'LBL_HIDDEN' => '<i>(Gitago)</i>',
    'LBL_STEP1' => 'Lakang nga 1 sa 2 - Mga kinahanglanon sa Dili pa Mag-instalar',
    'LBL_STEP2' => 'Lakang nga 2 sa 2 - Pagsumpo',
    'LBL_STEP' => 'Lakang',
    'LBL_TITLE_WELCOME' => 'Maayong pag abot sa SuiteCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Andam naba ka sa pag-instalar?',
    'REQUIRED_SYS_COMP' => 'Gikinahanglan nga Komponent sa Sistema',
    'REQUIRED_SYS_COMP_MSG' =>
        'Sa dili pa nimo sugdan, palihug sigurado-a nga aduna\'y nimo ang mga bersyon nga gisuportahan sa mga mosunod nga komponent sa sistema:<br>
                      <ul>
                      <li> Database/Sistema sa Tigdumala sa Database (Pananglitan: MariaDB, MySQL o Serber sa SQL)</li>
                      <li> Serber sa Web (Apache, IIS)</li>
                      </ul>
                      Konsultaha ang Matrix sa Pagka-uyon sa mga Kasulatan sa Pagpagawas para sa
                      nahiuyon nga mga komponent sa sistema para sa bersyon sa SuiteCRM nga imong gi-instalar.<br>',
    'REQUIRED_SYS_CHK' => 'Pasiuna nga Pagsusi sa Sistema',
    'REQUIRED_SYS_CHK_MSG' =>
        'Kung imo nang sugdan ang proseso sa pag-instalar, ang pakisusi sa sistema kay pagahimuon sa serber sa web kung asa nahimutang ang mga payl sa SuiteCRM ara sa
                      pagsiguro nga husto ang imong pagkompigyur sa sistema ug anaa ang tanang gikinahanglang mga komponent
                      aron sa masalampusong pagkompleto sa pag-instalar. <br><br>
                      Ang sistema kay magsusi sa mga musunod:<br>
                      <ul>
                      <li><b>Bersyon sa PHP</b> &#8211;gikinahanglang nahiuyon sa aplikasyon</li>
                      <li><b>Mga Baryabol sa Sesyon</b> &#8211; kay gikinahanglan migana og tarong</li>
                      <li><b>Mga String sa MB</b> &#8211; kay gikinahanglang gi-instalar ug gipagana sa php.ini</li>
                      <li><b>Suporta sa Database</b> &#8211; gikinahanglang anaa para sa MariaDB, MySQL o Serber sa SQL</li>
                      <li><b>Config.php</b> &#8211; kay gikinahanglang anaa ug gikinahanglang aduna\'y mga angay mga pagtugot para mamahimo kini nga suwatan</li>
                      <li>Ang mga musunod nga mga payl sa SuiteCRM kay gikinahanglang mamahimong suwatan:<ul><li> <b>kustom</li>
                      <li>cache</li>
                      <li>mga modyul</li>
                      <li>gi-upload</b></li></ul></li></ul>
                                  Kung pakyas ang pakisusi, dili ka mamahimong mopadayon sa pag-instalar.
                                  Usa ka mensahe sa kasaypanan ang madispley, magpatin-aw kung nganong pakyas sa pagpasar sa pakisusi ang imong sistema.
                                  Human sa paghimo sa mga gikinahanglang kausaban, mamahimo nimong agian sa pag-usab ang pakisusi sa sistema aron sa pagpadayon sa pag-instalar.<br>',


    'REQUIRED_INSTALLTYPE' => 'Tipikal o Kustom nga pag-instalar',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Human mahimo ang pakisusi sa sistema, mamahimo kang mopili
                      sa Tipikal o sa Kustom nga pag-instalar.<br><br>
                      Para sa duha <b>Tipikal</b> ug <b>Kustom</b> nga mga pag-instalar, nanginahanglan kang makahibalo sa mga musunod:<br>
                      <ul>
                      <li> <b>Matang sa database</b> nga magtipig sa mga kasayoran sa SuiteCRM <ul><li>Nahiuyon nga database nga
                      mga matang: MariaDB, MySQL o Serber sa SQL.<br><br></li></ul></li>
                      <li> <b>Ngalan sa serber sa web</b> o makina (tig-abiabi) kung asa nahimutang ang database
                      <ul><li>Mamahimo kini nga </b>localhost</i> kung ang database kay anaa sa imong lokal nga kompyuter o anaa sa pareho nga serber sa web o sa makina isip mga payl sa imong SuiteCRM.<br><br></li></ul></li>
                      <li><b>Ngalan sa database</b> nga  imong gusto nga gamiton para sa pagtipig sa kasayoran sa SuiteCRM</li>
                        <ul>
                          <li> Mamahimong aduna ka na\'y ninglungtad na nga database nga gusto nimo nga gamiton. Kung
                          mohatag ka ug ngalan sa ninglungtad na nga database, ang mga lamesa nga naa sa database kay
                          ihulog sa panahon sa pag-instalar kung ang panukala para sa database sa SuiteCRM kay gitino.</li>
                          <li> Kung wala kana\'y database, ang ngalan nga imong gihatag kay gamiton alang
                          sa bag-o nga database nga nahimo para sa instans sa panahon sa pag-instalar. <br><br></li>
                        </ul>
                      <li><b>Ang ngalan ug password sa tiggamit nga administrador sa database</b>
<ul><li>Ang administrador sa database kay gikinahanglang makahimo og mga lamesa ug mga tiggamit ug makasuwat ngadto sa database.</li><li>Mamahimo nimong gikinahanglan ang
                      pagkontak sa administrador sa imong database para sa niini nga kasayoran kung ang database kay
                      wala nahimutang sa imong lokal nga kompyuter ug/o kung dili ikaw ang administrador sa database.<br><br></ul></li></li>
                      <li> <b>Ang ngalan ug password sa tiggamitan sa database sa SuiteCRM</b>
                      </li>
                        <ul>
                          <li> Ang tiggamitan kay mamahimo nga ang administrador sa database, o mamahimo sad ka nga maghatag ug ngalan sa
                          lain pa nga minglungtad na nga tiggamitan sa database. </li>
                          <li> Kung gusto nimo maghimo ug bag-o nga tiggamitan sa database para sa niini nga katuyoan, ikaw kay
                          mamahimong maghatag ug bag-o nga ngalan ug password sa panahon sa pagproseso,
                          ug ang tiggamitan kay mahimo na sa panahon sa pag-instalar.</li>
                        </ul></ul><p>

                      Para sa <b>Kustom</b> nga pagset-up, mamahimo nimong gikinahanglan nga mahibaw-an ang mga musunod:<br>
                      <ul>
                      <li> <b>ang URL nga gamiton sa pag-access sa instans sa SuiteCRM</b> human kini ma-instalar.
                      Ang kini nga URL kay gikinahanglang naapil sa serber sa web o ngalan sa makina o adres sa IP. <br><br></li>
                                  <li> [Optional] <b>Dalan padulong sa direktoryo sa sesyon</b> kung gusto nimo ipadayon sa paggamit sa kustom nga
                                  sesyon sa direktoryo para sa kasayoran sa SuiteCRM aron sa pagpugong sa mga kasayoran nga
                                  mamahimong mahuyang sa mga serber nga gipang-apod-apod.<br><br></li>
                                  <li> [Optional] <b>Dalan padulong sa kustom nga tala sa direktoryo</b> kung gusto nimo isapaw ang default nga direktoryo para sa tala sa SuiteCRM.<br><br></li>
                                  <li> [Optional] <b>ID sa Aplikasyon</b> kung gusto nimo isapaw ang awtomatik na namugna nga
                                  ID nga nagsiguro nga ang mga sesyon sa usa ka instans sa SuiteCRM kay wala magamit sa uba pang mga instans.<br><br></li>
                                  <li><b>Itakda ang Karakter</b> kasagaran sa komon nga gigamit sa imong lokal. <br><br></li></ul>
                                  Para sa dugang nga mga detalyadong kasayoran, palihug ug konsulta sa Giya sa Pag-instalar.                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Palihug ug basa sa mga musunod nga importante nga impormasyon sa dili pa magpadayon sa pag-instalar. Ang kasayoran kay makatabang sa pagdeterminar bisan pa o dili pa ka andam sa pag-instalar sa aplikasyon sa karon nga oras.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Pili-a ang imong pinulongan</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Mag-setup og Wizard',
    'LBL_WIZARD_TITLE' => 'Ang Wizard sa Pag-setup sa SuiteCRM: ',
    'LBL_YES' => 'Oo',

    'LBL_PATCHES_TITLE' => 'I-istalar ang mga Katapusang mga Patch',
    'LBL_MODULE_TITLE' => 'I-instalar ang mga Pakete sa Pinulongan',
    'LBL_PATCH_1' => 'Kung gusto nimo sal-angan ang kini nga lakang, i-klik ang Sunod.',
    'LBL_PATCH_TITLE' => 'Patch sa Sistema',
    'LBL_PATCH_READY' => 'Ang mga musunod nga mga patch kay andam na nga ma-instalar:',
    'LBL_SESSION_ERR_DESCRIPTION' => "Ang SuiteCRM kay nagsalig sa mga sesyon nga PHP para sa pagtipig sa mga importante nga kasayoran samtang nakakonekto niini nga serber sa web. Ang imong pag-instalar sa PHP kay wala makataron ug kumpigyor sa kasayoran sa Sesyon.
	<br><br>Ang komon nga sayop sa pagkompigyur kay ang direktiba nga <b>'session.save_path'</b> kay wala pagtudlo sa balido nga direktoryo. <br>
<br> Palihug ayoha ang imong <a target=_new href='http://us2.php.net/manual/en/ref.session.php'> kompigurasyon nga PHP</a> sa payl nga php.ini nga nahimutang sa ubos niini.",
    'LBL_SESSION_ERR_TITLE' => 'Kasaypanan sa Pagkompigyur sa mga Sesyong PHP',
    'LBL_SYSTEM_NAME' => 'Ngalan sa sistema',
    'LBL_COLLATION' => 'Mga Kahimtang sa Pagkumpirma',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Paghatag ug Ngalan sa Sistema para sa instans sa SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Pagpili ug payl nga patch gikan sa imong lokal nga kompyuter',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php bersyon lima. o babaw kay kailangan.',
    'LBL_MINIMUM_PHP_VERSION' => 'Ang pinakaawahi nga gikinahanglang bersyon sa Php kay 5.1.0. Girekomendar nga bersyon sa Php kay 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Ang imong kasamtangang bersyon sa php kay ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Girekomendar nga bersyon sa php kay 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php Baliktad Compatibility mode kay naka siga. I-set zend.ze1_compatibility_mode off para sa sunod na kalayoan',
    'LBL_STREAM' => 'Ang PHP nagtugot sa paggamit sa stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Bag-ong kasayoran sa account',
        'type' => 'sistema',
        'description' => 'Ang kini nga templeyt kay gigamit kung ang Administrador sa Sistema kay nagpadala ug bag-o nga password ngadto sa tiggamitan.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Kini ang ngalan sa imong account ug ang temporaryo nga password:</p><p>Ngalan sa Tiggamit : $contact_user_user_name </p> <p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Human nimo makasulod gamit ang gihatag nga password nga naa sa ibabaw, mamahimong gikinahanglan nimo ang pagtakda og balik og usa ka password nga imong napili.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Kini ang ngalan sa imong account ug ang temporaryo nga password:
Ngalan : $contact_user_user_name
Password: $contact_user_user_hash

$config_site_url

Human sa imong pagsulod gamit ang password sa ibabaw ninii, mamahimong gikinahanglan nimo ang pagtakda og balik og usa ka password nga imong napili.',
        'name' => 'Gimugna sa Sistema nga password sa email',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Itakda og balik ang password sa imong account',
        'type' => 'sistema',
        'description' => "Ang kini nga templeyt kay gigamit sa pagpadala ug link sa usa ka tiggamitan aron sa pagtakda og balik sa password sa account sa tiggamit.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Bag-ohay pa ka naghangyo sa $contact_user_pwd_last_changed aron mamahimo na nimo ang pag-usab sa password sa imong account. </p><p>I-klik ang link sa ubos nga bahin niini aron sa pagtakda og balik sa imong passwsord:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Bag-ohay pa ka naghangyo sa $contact_user_pwd_last_changed aron mamahimo na nimo ang pag-usab sa password sa imong account. 

I-klik ang link sa ubos niini aron sa pagtakda og balik sa imong password:

$contact_user_link_guid',
        'name' => 'Nakalimtan ang Password sa Email',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Duka ka Paktor nga Kodigo sa Pagpamatuod',
        'type' => 'sistema',
        'description' => "Ang kini nga templeyt kay gigamit aron sa pagpadala sa kodigo sa Duha ka Paktor sa Pagpamatuod.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ang Duha ka Paktor nga kodigo sa Pagpamatuod kay <b>$code</b>. </p> </td> </tr><tr><td colspan=\"2\"></td> </tr> </tbody></table> </div>',
        'txt_body' =>
            'Ang kodigo sa Duha ka Paktor sa Pagpamatuod kay $code.',
        'name' => 'Ang email sa Duha ka Paktor sa Pagpamatuod',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Gikan sa" Pangan:',
    'LBL_FROM_ADDR' => '"Gikan sa" Address:',

    'LBL_WIZARD_SMTP_DESC' => 'Hatagi ang email account nga gamiton sa pagpadala sa mga email, sama sa mga notipikasyon sa assignment ug mga bag-ong password sa user. Ang mga tigdawat makadawat mga email gikan sa SuiteCRM, ingon nga gipadala gikan sa gitino nga email account.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pagpili og imohang email nga kangalan:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Lahi',
    'LBL_MAIL_SMTP_SETTINGS' => 'Kangalan sa SMTP nga Serber',
    'LBL_MAIL_SMTPSERVER' => 'Serber sa SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port sa SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Gamiton ang SMTP para authentication?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Paganahon ang SMTP pina-agi sa SSL o TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email Address:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Password:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Tugotan ang mga user nga makagamit aning account para sa mogawas nga email:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kung kining kapilian ang napili, tanan nga mga user makahimo og padala og email gamit ang outgoing mail account gigamit sa pagpadala og pahibalo sa sistema og pag-alisto. Kung ang kapilian ang wla napili. Tanan nga mga user pwede gehapon makagamit sa outgoing mail serber pagkahuman og paghatag sa ilang impormasyon sa ilang account.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Password:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Bayloan og password:',
    'LBL_EXCHANGE_SMTPUSER' => 'Bayloan og Username:',
    'LBL_EXCHANGE_SMTPPORT' => 'Bayloan og serber Port:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Bayloan og serber:',


    'LBL_MAIL_SMTPUSER' => 'Username sa SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Password sa SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Paghatag sa imong ngalan sa organisasyon og logo sa imong brand sa imong SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Pangalan:',
    'SYSTEM_NAME_HELP' => 'Mao ni ang ngalan sa gipakita sa title bar sa imong browser.',
    'NEW_LOGO' => 'Pagpili og logo:',
    'NEW_LOGO_HELP' => 'Ang imahe sa file format pwede i .png o .jpg. Ang maximum nga gitas-on kay 170px. Og ang maximum nga gilapdon kay 450px. Bisag unsa nga imahe ang i-upload nga dako sa bisan asa nga direksyon kay mascaled dayon sa maximum nga sukod.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'I-upload',
    'CURRENT_LOGO' => 'Kasamtangang logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Pagpili sa Sitwasyon',
    'LBL_WIZARD_SCENARIO_DESC' => 'Alang kini sa pagtugot sa pagtahi sa gi-displey nga mga modyul nga nagbase sa imong mga gikinahanglanon. Kada usa sa mga modyul kay mamahimo paganahon human sa pag-instalar gamit ang pahina sa administrador.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Wala\'y mga sitwasyon nga kasamtangang natakda sa payl sa kompigurasyon (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Sistema Ng Lokal na settings',
    'LBL_WIZARD_LOCALE_DESC' => 'Paghingalan nimo kung unsa ang gusto nimo nga datos sa SuiteCRM nga ipasundayag, base sa imong nahimutangan. Ang mga setting nga imong gihatag dinhi mao ang default settings. Ang mga tiggamit makahimo sa ilang mga gusto.',
    'LBL_DATE_FORMAT' => 'Pormat sa Petsa:',
    'LBL_TIME_FORMAT' => 'Pormat sa Oras:',
    'LBL_TIMEZONE' => 'Sona sa Oras:',
    'LBL_LANGUAGE' => 'Lingwahe:',
    'LBL_CURRENCY' => 'Salapi:',
    'LBL_CURRENCY_SYMBOL' => 'Simbolo nga Pansalapi:',
    'LBL_CURRENCY_ISO4217' => 'Kodigo sa Pansalapi sa ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s nga tigbulag:',
    'LBL_DECIMAL_SEP' => 'Simbolo sa Decimal:',
    'LBL_NAME_FORMAT' => 'Ngalan sa Pormat:',
    'UPLOAD_LOGO' => 'Palihug og huwat, gi-upload na ang logo...',
    'ERR_UPLOAD_FILETYPE' => 'Ang matang sa payl kay wala gitugutan, palihug sa pag-upload ug jpeg o png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Naa\'y nahitabo nga wala mailhi nga kasayapanan sa pag-upload sa payl.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Ang pagpasa sa file ni lapas ang pasa_subra_filesize pag utro og activate sa php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Ang pag-pasa file ni subra ang MAX_FILE_SIZE pag-utro og activate kanang ge ispesipay na ang HTML porma.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Ang pagbag-os file kay pwede ra parsyal ma upload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Walay file nga ma upload.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Nawal-an og temporarya nga folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Na bagsak nga sulat na file paingon sa disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Anaa\'y usa ka ekstensyon sa PHP ang nagpahunong sa pag-upload sa payl. Ang PHPkay wala maghatag ug pamaagi sa pagtino kung unsa nga ekstensyon ang hinungdan sa pagpahunong sa pag-upload sa payl.',

    'LBL_INSTALL_PROCESS' => 'I-instalar...',

    'LBL_EMAIL_ADDRESS' => 'Email Address:',
    'ERR_ADMIN_EMAIL' => 'Ang Adres sa Email sa AAdministrador kay dili tukma.',
    'ERR_SITE_URL' => 'Ang Site sa URL kay gikinahanglan.',

    'STAT_CONFIGURATION' => 'Mga relasyon sa kompigurasyon...',
    'STAT_CREATE_DB' => 'Paghimo og database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Paghimo og mga setting nga naka-default...',
    'STAT_INSTALL_FINISH' => 'Human na sa pag-instalar...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Nahuman na ang proseso sa pag-instalar, <a href="%s">palihug sa pagsulod...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Palihug sa pagdawat una sa lisensya',

    'LBL_MORE_OPTIONS_TITLE' => 'Dugang nga mga kapilian',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Kasaypanan sa database',
    'LBL_OLD_PHP' => 'Karaan nga Bersyon sa PHP ang Nakit-an!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'Nasayod ako sa mga risgo ug gusto nga magpadayon.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Tig gamit',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Ngalan sa Database',
    'LBL_DBCONFIG_MSG3' => 'Ang ngalan sa database nga maglangkob sa kasayoran para sa instans sa SuiteCRM nga imong paga-instalaran.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Pangalan sa Host',
    'LBL_DBCONFIG_MSG2' => 'Ngalan sa serber sa web o makina (tig-abiabi) kung asa nahimutang ang database (sama sa www.mydomain.com). Kung nag-instalar sa lokal nga pamaagi, mas maayo nga gamiton ang \'localhost\' imbis sa \'127.0.0.1\', alang sa mga rason sa pagpagana.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Ang ngalan ug password sa tiggamitan sa administrador sa usa ka database kung kinsa mamahimong makabuhat ug mga lamesa sa database ug ang mga tiggamitan kung kinsa mamahimong makasuwat sa database kay gikinahanglan aron sa pagtukod sa database sa SuiteCRM.'
);
