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
    'LBL_BASIC_SEARCH' => 'Quick Filter',
    'LBL_ADVANCED_SEARCH' => 'Advanced Filter',
    'LBL_BASIC_TYPE' => 'lloj bazik',
    'LBL_ADVANCED_TYPE' => 'lloj i avancuar',
    'LBL_SYSOPTS_2' => 'Çfar lloji të bazës së të fhënave do të përdoret për SuiteCRM shembullin që jeni duke instaluar?',
    'LBL_SYSOPTS_DB' => 'Përcakto llojin e bazës së të dhënave',
    'LBL_SYSOPTS_DB_TITLE' => 'lloji i bazës së të dhënave',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Ju lutemi ndreqni gabimet vijuese para se të vazhdoni:',
    'ERR_DB_VERSION_FAILURE' => 'Çmundëso të kontrollohet versioni i bazës së të dhënave',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Mundësoni emrin e përdorimit për admin përdoruesin e SuiteCRM.',
    'ERR_ADMIN_PASS_BLANK' => 'Mundësoni fjalëkalimin për admin përdoruesin e SuiteCRM.',

    'ERR_CHECKSYS' => 'Gabimet janë zbuluar gjatë kontrollit të pajtueshmërisë. Me qëllim që instalimi juaj SuiteCRMCRM të funksionije sic duhet, ju lutem të merni hapat e duhura për të trajtuar cështjet e listuara më poshtë ose të shtypni butonin edhe njëherë të verifikoni apo të provoni ta instaloni përsëri.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL' => 'Nuk gjendet: SuiteCRM Scheduler do të vazhdojë me funksionalitetin e kufizuar. Shërbimi i arkivimit të Emailit nuk do të konkurroje.',
    'ERR_CHECKSYS_IMAP' => 'Nuk gjendet:Emaill-at hyrse dhe Fushatat (Email) do të kërkojnë bibliotekat IMAP. Asnjëra nuk do të funksionojë.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Përcakto këtë në',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M ose më të madhe në php.ini dosjen tënde',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Paralajmërim: e pashkruajtur',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Versioni juaj i PHP nuk është i mbështetur nga SuiteCRM. Do të duhet të instaloni një të përshtashëm me aplikimin e SuiteCRM. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet PHP të mbështetura. Versioni juaj është',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Versioni juaj i IIS nuk është i mbështetur nga SuiteCRM. Do të duhet të instaloni një të përshtashëm me aplikimin e SuiteCRM. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet IIS të mbështetura. Versioni juaj është',
    'ERR_CHECKSYS_FASTCGI' => 'Ne zbuluam se ju nuk keni përdorur një hartë FastCGI për hapjen e PHP. Ju duhet të instaloni/konfirmoni versionin që është në përputhje me aplikimin SuiteCRM. Ju lutemi të konsultoheni me kompatibilitetin Matrix për shënimet e versionit të mbështetur. Ju lutemi shikoni http://www.iis.net/php/ për më shumë detaje.',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Për eksperiencën optimale duhet përdorur IIS/FastCGI sapi, të vendosur fastcgi.kycu në 0 te skedari juaj php.ini',
    'LBL_DB_UNAVAILABLE' => 'Baza e të dhënave e padisponueshme',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Mbështetja e Bazës së të Dhënave nuk u gjet. Ju lutemi siguroheni që ju keni drejtuesit e nevojshëm për një nga llojet e mëposhtëm të mbështetura nga Baza e të Dhënave: MySQL, MS SQLServer, Oracle, ose DB2. Ju mund të keni nevojë të pa koment në shtrirjen e dosjes php.ini, ose të përpiloni dosjen binare të drejtë në varësi të versionit tuaj të PHP. Ju lutemi referojuni në PHP manualin tuaj për më shumë informacione se si të mundësojnë mbështetjen e Bazës së të Dhënave.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funksionet që lidhen me XML bibliotekat Parser që janë të nevojshme nga ana aplikimit SuiteCRM nuk janë gjetur. Ju mund të keni nevojë të pa pakoment në shtrirjen e dosjes php.ini, ose të përpiloni dosjen binare të drejtë në varësi të versionit tuaj të PHP. Ju lutemi referojuni në PHP manualin tuaj për më shumë informacione.',
    'ERR_CHECKSYS_MBSTRING' => 'Funksionet lidhur me zgjerimin e funksionit Strings PHP (mbstring) që janë të nevojshmë nga ana e aplikimit SuiteCRM nuk u gjetën.<br /><br />Në përgjithësi, moduli mbstring nuk është i aktivizuar nga default në PHP dhe duhet të aktivizoni llogarinë tuaj me --aktivizo--mbstring kur PHP është ndërtuar binare.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Mënyra e sigurt është aktive (ju mund të dëshironi të çaktivizoni në php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Mbështetja Zlib nuk u gjet: SuiteCRMCRM korr përfitime të mëdha të performancës me ngjeshje zlib.',
    'ERR_CHECKSYS_ZIP' => 'ZIP mbështjetja nuk është gjetur; SuiteCRMCRM ka nevojë për ZIP mbështetje për të procesuar dosjet e përmbledhura.',
    'ERR_CHECKSYS_PCRE' => 'PCRE library not found: SuiteCRM needs PCRE library in order to process Perl style of regular expression pattern matching.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE library version: SuiteCRM needs PCRE library 7.0 or above to process Perl style of regular expression pattern matching.',
    'ERR_DB_ADMIN' => 'Me kusht që Baza e të dhënave të emrit përdorues dhe fjalëkalimit të administratorit është jovalid, dhe lidhja për bazën e të dhënave nuk mund të krijohet. Ju lutem shkruani emrin valid të përdoruesit dhe fjalëkalimin.',
    'ERR_DB_ADMIN_MSSQL' => 'Me kusht që Baza e të dhënave të emrit përdorues dhe fjalëkalimit të administratorit është jovalid, dhe lidhja për bazën e të dhënave nuk mund të krijohet. Ju lutem shkruani emrin valid të përdoruesit dhe fjalëkalimin.',
    'ERR_DB_EXISTS_NOT' => 'Baza e të dhënave e veçuar nuk ekziston.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Database already exists with config data. To run an install with the chosen database, please re-run the install and choose: "Drop and recreate existing SuiteCRM tables?". To upgrade, use the Upgrade Wizard in the Admin Console. Please read the upgrade documentation located <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">here</a>.',
    'ERR_DB_EXISTS' => 'Baza e të dhënave e dhënë tashmë ekziston - nuk mund të krijohet një tjetër me të njejtin emër.',
    'ERR_DB_EXISTS_PROCEED' => 'Emri i dhënë së Bazës së të dhënave tashmë ekziston. Ju mund<br />1. goditni mbrapa butonin dhe zgjidhni një emër të ri të bazës së të dhënave<br />2. klikoni më tej dhe vazhdoni, por të gjitha tabelat ekzistuese mbi këtë bazë të dhënave do të hiqen. Kjo do të thotë se tabelat tuaja dhe të dhënat do të jenë të copëtuara.',
    'ERR_DB_HOSTNAME' => 'Emri i hostit nuk mund të jetë zbrazët.',
    'ERR_DB_INVALID' => 'Është selektuar lloj jovalid i bazës së të dhënave',
    'ERR_DB_LOGIN_FAILURE' => 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Hosti i bazës së të dhënave, emri i përdorimit dhe/ose fjalëkalimi është jo valide dhe një lidhje me bazën e të dhënave nuk mund të vendoset. Ju lutemi vendosni një host, emër përdorimi dhe fjalëkalim valid',
    'ERR_DB_MYSQL_VERSION' => 'Versioni juaj i MySQL(%s) nuk është i mbështetur nga SuiteCRM. Do të duhet të instaloni një të përshtashëm me aplikimin e SuiteCRM. Ju lutemi konsultoheni me Matriks përshtashmërinë në shënimet e publikuara për versionet MySQL të mbështetura.',
    'ERR_DB_NAME' => 'Emri i bazës së të dhënave nuk mund të jetë i zbrazët.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Emri i bazës së të dhënave nuk mund të përmbaj &#39;\\&#39;, &#39;/&#39;, ose &#39;.&#39;",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Emri i bazës së të dhënave nuk mund të filloj me numër, &#39;#&#39;, ose &#39;@&#39; dhe të përmbaj hapsirë, &#39;\"&#39;, \"&#39;\", &#39;*&#39;, &#39;/&#39;, &#39;\\&#39;, &#39;?&#39;, &#39;:&#39;, &#39;<&#39;, &#39;>&#39;, &#39;&&#39;, &#39;!&#39;, ose &#39;-&#39;",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Emri i bazës së të dhënave mundet vetëm të përbëhet nga karaktere alfabetikonumerike dhe simbole &#39;#&#39;, &#39;_&#39; ose &#39;$&#39;",
    'ERR_DB_PASSWORD' => 'Fjalëkalimet e parashikuara për administratorin e bazës së të dhënave SuiteCRM nuk përputhen. Ju lutem ri-shkruani fjalëkalimet e njëjta në fushat e fjalëkalimit.',
    'ERR_DB_PRIV_USER' => 'Sigurimi i emrit përdorues të administratorit të bazës së të dhënave. Ky përdorues është i nevojshëm për lidhjen fillestare të bazës së të dhënave.',
    'ERR_DB_USER_EXISTS' => 'Emri i përdoruesit të bazës së të dhënave për përdoruesit SuiteCRM tashmë ekziston -- nuk mund të krijojë një tjetër me të njëjtin emër. Ju lutemi shkruani një emër përdoruesi të ri.',
    'ERR_DB_USER' => 'Futni një emër përdoruesi për bazën e të dhënave të administratorit SuiteCRM.',
    'ERR_DBCONF_VALIDATION' => 'Ju lutemi ndreqni gabimet vijuese para se të vazhdoni:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Fjalëkalimet e ofruara për përdoruesit e bazës së të dhënave SuiteCRM nuk përputhen. Ju lutem ri-shkruani fjalëkalimet e njëjta në fushat fjalëkalimin.',
    'ERR_ERROR_GENERAL' => 'Gabimet e mëposhtme janë hasur:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nuk mund të fshijë dosjen:',
    'ERR_LANG_MISSING_FILE' => 'Nuk mund të gjejë dosjen:',
    'ERR_LANG_NO_LANG_FILE' => 'Nuk u gjet paket të gjuhës në brendinë e përfshi/gjuhë',
    'ERR_LANG_UPLOAD_1' => 'Nodhi problem gjatë ngarkimit tuaj. Ju lutemi provoni përsëri.',
    'ERR_LANG_UPLOAD_2' => 'Paketat e gjuhëve duhet të jenë tek arkivat e ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP nuk mund të lëvize dokumentin temp tek dosja e përmisuar.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Dosja e dhënë e regjistrimit nuk është dosje valide.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Dosja e dhënë e regjistrimit nuk është dosje e regjistruar.',
    'ERR_NO_DIRECT_SCRIPT' => 'E pamundur të procesojë skriptën në mënyrë direkte.',
    'ERR_NO_SINGLE_QUOTE' => 'Nuk mund të përdor shenjën e citimit për',
    'ERR_PASSWORD_MISMATCH' => 'Fjalëkalimet e mundësuara për SuiteCRM nuk përputhen. Ju lutemi rishkruani fjalëkalime të njejta në fushat e fjalëkalimeve;',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Nuk mund të shkruaj conf.php dosjen',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Ju mund të vazhdoni këtë instalim me dorë duke krijuar dokumentin config.php dhe futje të informatave të konfigurimit më poshtë në dokumentin config.php. Megjithatë, ju duhet të krijoni dokumentin config.php para se të vazhdoni me hapin tjetër.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'A u kujtuat të krijoni config.php dosje?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Kujdes: Nuk mund të shkruaj tek dokumenti config.php. Ju lutemi të siguroni se ekziston.',
    'ERR_PERFORM_HTACCESS_1' => 'Nuk mund të shkruaj në',
    'ERR_PERFORM_HTACCESS_2' => 'dosje.',
    'ERR_PERFORM_HTACCESS_3' => 'Nëse ju doni të siguroni dokumentin e regjistrimit tuaj nga të qenit të arritshëm nëpërmjet shfletuesit,  krijojë një .htaccess në direktorinë tuaj të regjistrimit me vijën.:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Ne nuk mund të zbulojmë një lidhje në Internet..</b> Kur ju keni një lidhje, ju lutem vizitoni <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> regjistroheni me SuiteCRM. Duke na lënë të dimë pak rreth asaj se si kompania juaj ka në plan të përdorë SuiteCRM, ne mund të sigurojmë se jemi gjithmonë në dhënien e drejtë të aplikimit për nevojat e biznesit tuaj.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Sesioni i listës së dhënë nuk është listë valide.',
    'ERR_SESSION_DIRECTORY' => 'Sesionit i listës së dhënë nuk është listë e regjistruar.',
    'ERR_SESSION_PATH' => 'Sesioni i rugës kërkohet nëse ju dëshironi të specifikoni.',
    'ERR_SI_NO_CONFIG' => 'Ju nuk keni përfshirë config_si.php në rrënjën e dokumentit, ose ju nuk e keni të përcaktuar $ sugar_config_si në config.php',
    'ERR_SITE_GUID' => 'Aplikimi i identitetit është i nevojshëm nësë ju dëshironi të specifikoni.',
    'ERROR_SPRITE_SUPPORT' => "Aktualisht ne nuk jemi në gjendje për të gjetur vendndodhjen e bibliotekës GD,si rezultat ju nuk do të jeni në gjendje të përdorni funksionalitetin CSS Sprite.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Ngarko madhësinë e dosjes',
    'ERR_URL_BLANK' => 'Mundëso URL e bazës për shemuj të SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nuk mundej të gjente regjistrimin e instalimit',
    'ERROR_MANIFEST_TYPE' => 'Dosja e manifestuar duhet të përcaktoj llojin e paketit.',
    'ERROR_PACKAGE_TYPE' => 'Dosja e manifestuar përcakton lloji paketi që nuk njihet.',
    'ERROR_VERSION_INCOMPATIBLE' => 'Dosja e ngarkuar nuk është e përshtatshme me versionin e SuiteCRM.',

    'LBL_BACK' => 'Kthe',
    'LBL_CANCEL' => 'Anulo',
    'LBL_ACCEPT' => 'Pranoj',
    'LBL_CHECKSYS_CACHE' => 'Shkruhet Cache Nën-Listat',
    'LBL_DROP_DB_CONFIRM' => 'Emri i dhënë të Bazës së të dhënave tashmë ekziston.<br />Ju mund ose:<br />1. Kliko në butonin Anulo dhe zgjidhni një emër të ri të bazës së të dhënave, ose<br />2. Klikoni butonin Prano dhe vazhdoni. Të gjitha tabelat ekzistuese në bazën e të dhënave do të hiqet. Kjo do të thotë se të gjitha tabelat dhe të dhënat para-ekzistuese do të fshihen.',
    'LBL_CHECKSYS_COMPONENT' => 'Përbërës',
    'LBL_CHECKSYS_CONFIG' => 'Shkruhet konfigurimi i SuiteCRMCRM të dokumentit (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL modula',
    'LBL_CHECKSYS_CUSTOM' => 'Shkruhet Drejtoria e përshtatur',
    'LBL_CHECKSYS_DATA' => 'Shkruhen të Dhënat e Nën-Drejtorive',
    'LBL_CHECKSYS_IMAP' => 'IMAP Modula',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Moduli i Vargjeve',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Pa Limit)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (e palimituar)',
    'LBL_CHECKSYS_MEM' => 'PHP Memori Limiti',
    'LBL_CHECKSYS_MODULE' => 'Modulet regjistrohen Nën-Listat dhe Dosjet',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'E padisponuar',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver',
    'LBL_CHECKSYS_PHPVER' => 'PHP Versioni',
    'LBL_CHECKSYS_IISVER' => 'IIS Versioni',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Rikontrollo',
    'LBL_CHECKSYS_STATUS' => 'Statusi',
    'LBL_CHECKSYS_TITLE' => 'Kontrollo Sistemin e Pranimit',
    'LBL_CHECKSYS_XML' => 'XML Analizë',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB  Modul i përmbledhur',
    'LBL_CHECKSYS_ZIP' => 'Trajtimi i Modulit ZIP',
    'LBL_CHECKSYS_PCRE' => 'PCRE Library',
    'LBL_CHECKSYS_FIX_FILES' => 'Ju lutemi të rregulloni dosjet e mëposhtme ose drejtoritë përpara procedurës:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Ju lutemi të rregulloni modulin e drejtorive të mëposhtme dhe dosjet nën ata përpara procedurës:',
    'LBL_CHECKSYS_UPLOAD' => 'Regjistrimi në Dosjen e Ngarkuar',
    'LBL_CLOSE' => 'Mbyll:',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'është krijuar',
    'LBL_CONFIRM_DB_TYPE' => 'lloji i bazës së të dhënave',
    'LBL_CONFIRM_NOT' => 'nuk është',
    'LBL_CONFIRM_TITLE' => 'Konfirmo parametrat',
    'LBL_CONFIRM_WILL' => 'do të',
    'LBL_DBCONF_DB_DROP' => 'Lësho tabelat',
    'LBL_DBCONF_DB_NAME' => 'Emri i bazës së të dhënave',
    'LBL_DBCONF_DB_PASSWORD' => 'Fjalëkalimi i Përdoruesit të Bazës së të dhënave SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Ri-shkruani Fjalëkalimin e Përdoruesit të Bazën e të dhënave SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Identifikimi i Bazës së të dhënave SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Identifikimi i Bazës së të dhënave SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Baza e të dhënave të emrit përdorues të administratorit',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Fjalëkalimi i Bazës së të dhënave Admin',
    'LBL_DBCONF_COLLATION' => 'Krahasim',
    'LBL_DBCONF_CHARSET' => 'Përcaktimi i karakterit',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Riteni Bazën e të Dhënave me të dhënat Demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Zgjidhni të Dhënat Demo',
    'LBL_DBCONF_HOST_NAME' => 'Emri i hostit',
    'LBL_DBCONF_HOST_INSTANCE' => 'Host Raste',
    'LBL_DBCONFIG_SECURITY' => 'Për qëllime të sigurisë, ju mund të specifikoni një përdorues të veçantë të bazës së të dhënave për të lidhur bazën e të dhënave SuiteCRM. Përdoruesi duhet të jetë në gjendje të shkruaje, të rinovoje dhe të marrë të dhëna mbi bazën e të dhënave SuiteCRM që do të krijohet për këtë rast. Ky përdorues mund të jetë administratori i bazës së të dhënave të specifikuar më sipër, ose ju mund të ofroni informacione të reja ose ekzistuese për përdoruesit e bazës së të dhënave.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Ofrimi i përdoruesit ekzistues',
    'LBL_DBCONFIG_CREATE_DD' => 'Definimi i përdoruesit për të krijuar',
    'LBL_DBCONFIG_SAME_DD' => 'Njësoj si Përdoruesi Admin',
    'LBL_DBCONF_TITLE' => 'Konfigurimi i Bazës së të Dhënave',
    'LBL_DBCONF_TITLE_NAME' => 'Sigurimi i Emrit të Bazës së të Dhënave',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Sigurimi i Informacionit të Përdoruesit së bazës së të Dhënave',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Fjalëkalimi',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Instaluesi tashmë është drejtuar një herë. Si masë sigurie, ajo ka qenë e paaftë të drejtohet për herë të dytë. Nëse ju jeni absolutisht të sigurtë që doni ta drejtoni atë përsëri, ju lutem shkoni në dokumentin config.php dhe gjeni (ose shtoni) një ndryshore të quajtur &#39;instaluesi i_mbyllur&#39; dhe e vendosni atë në &#39;false&#39;.Linja duhet të duket si ky:',
    'LBL_DISABLED_HELP_1' => 'Për ndihmë të instalimit, ju lutemi vizitoni SuiteCRMCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'Instalimi i SuiteCRMCRM është çaktivizuar',
    'LBL_HELP' => 'ndihmë',
    'LBL_INSTALL' => 'Instalo',
    'LBL_INSTALL_TYPE_TITLE' => 'Opcionet e instalimit',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Zgjidh llojin e instalimit',
    'LBL_INSTALL_TYPE_TYPICAL' => 'Instalim tipik',
    'LBL_INSTALL_TYPE_CUSTOM' => 'Instalim i zakonshëm',
    'LBL_INSTALL_TYPE_MSG2' => 'Kërkon informata minimale për instalim. E rekomanduar për përdorues të ri',
    'LBL_INSTALL_TYPE_MSG3' => 'Siguroni opsionet shtesë për t&#39;i vendosur gjatë instalimit. Shumica nga këto opsionet gjithashtu janë në dispozicion pas instalimit në ekranet e adminit. Rekomanduar për përdoruesit e përparuar.',
    'LBL_LANG_1' => 'Për të përdorur një gjuhë në SuiteCRM përveç gjuhës tjetër të parazgjedhur (SHBA-Anglisht), ju mund të ngarkoni dhe instaloni gjuhën që në këtë moment. Ju do të jeni në gjendje të ngarkoni dhe instaloni paketa gjuhësore në kuadër të aplikacionit SuiteCRM. Nëse dëshironi të kaloni këtë hap, klikoni Vazhdo.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instalo',
    'LBL_LANG_BUTTON_REMOVE' => 'Fshijë',
    'LBL_LANG_BUTTON_UNINSTALL' => 'çinstalo',
    'LBL_LANG_BUTTON_UPLOAD' => 'Ngarko',
    'LBL_LANG_NO_PACKS' => 'none',
    'LBL_LANG_PACK_INSTALLED' => 'Paketat vijuese të gjuhës janë instaluar:',
    'LBL_LANG_PACK_READY' => 'Paketat e e mëposhtme gjuhësore janë të gatshme për t&#39;u instaluar:',
    'LBL_LANG_SUCCESS' => 'Gjuha e pakos u ngarkua me sukses.',
    'LBL_LANG_TITLE' => 'paketa e gjuhës',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instaloni SuiteCRM tani. Kjo ndoshta mund të marrë disa minuta.',
    'LBL_LANG_UPLOAD' => 'Ngarkoni Pakon e Gjuhës',
    'LBL_LICENSE_ACCEPTANCE' => 'Licenca e Pranimit',
    'LBL_LICENSE_CHECKING' => 'Kontrollimi i sistemit për përputhshmërinë.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Kontrollimi i Ambientit',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifikimi i Kredencialeve DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'Sistemin e kaluar kontrolloni për përputhshmërinë.',
    'LBL_CREATE_CACHE' => 'Preparing to Install...',
    'LBL_LICENSE_REDIRECT' => 'Pëcjellni në',
    'LBL_LICENSE_I_ACCEPT' => 'Pranoj',
    'LBL_LICENSE_PRINTABLE' => 'Grafikë e printueshme',
    'LBL_PRINT_SUMM' => 'Përmbledhje të shtypura',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRMCRM Licenca',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Veprim',
    'LBL_ML_DESCRIPTION' => 'Përshkrim',
    'LBL_ML_INSTALLED' => 'të dhënat e instaluara',
    'LBL_ML_NAME' => 'Emri',
    'LBL_ML_PUBLISHED' => 'Të dhënat e publikuara',
    'LBL_ML_TYPE' => 'Lloji',
    'LBL_ML_UNINSTALLABLE' => 'E painstalueshme',
    'LBL_ML_VERSION' => 'Versioni',
    'LBL_MSSQL' => 'SQL Serveri',
    'LBL_MSSQL2' => 'SQL Server (TDS e lirë)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server Driver për PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli zgjatje)',
    'LBL_NEXT' => 'Vijues',
    'LBL_NO' => 'Jo',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Vendosja e faqës admin të fjalëkalimit',
    'LBL_PERFORM_CONFIG_PHP' => 'Krijimi i konfigurimit në dosjen SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => 'Krijimi i bazës së të dhënave',
    'LBL_PERFORM_CREATE_DB_2' => 'në',
    'LBL_PERFORM_CREATE_DB_USER' => 'Krijimi i identifikimit dhe fjalëkalimit të Bazës së të dhënave...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Krijimi i parazgjedhur të dhënave SuiteCRM',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Krijimi i parazgjedhur pë orarin e punës',
    'LBL_PERFORM_DEFAULT_USERS' => 'Krijimi i përdoruesve të parazgjedhur',
    'LBL_PERFORM_DEMO_DATA' => 'Popullimi i tabelave të Bazës së të dhënave me të dhënat demo (kjo mund të zgjasë pak)',
    'LBL_PERFORM_DONE' => 'e bërë<br>',
    'LBL_PERFORM_FINISH' => 'Mbaro',
    'LBL_PERFORM_OUTRO_1' => 'Skema e SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'Tani është kompletuar!',
    'LBL_PERFORM_OUTRO_3' => 'Koha totale:',
    'LBL_PERFORM_OUTRO_4' => 'sekonda.',
    'LBL_PERFORM_OUTRO_5' => 'Memorie të përafërta përdorën:',
    'LBL_PERFORM_OUTRO_6' => 'bitë.',
    'LBL_PERFORM_SUCCESS' => 'Sukses!',
    'LBL_PERFORM_TABLES' => 'Krijimi i tabelave të aplikimit SuiteCRM, tabelat auditative dhe lidhja metadata',
    'LBL_PERFORM_TITLE' => 'Kryerja e instalimit',
    'LBL_PRINT' => 'Shtyp',
    'LBL_REG_CONF_1' => 'Ju lutemi të plotësoni formularin e shkurtër më poshtë për të marrë njoftimet e produktit, lajmeve trajnimit, ofertat speciale dhe ftesat të veçanta të ngjarjeve nga SuiteCRMCRM. Ne nuk e shesim, me qira, aksionet ose përndryshe shpërndani informacionin e mbledhur këtu për palët e treta.',
    'LBL_REG_CONF_3' => 'Faleminderit për regjistrimin. Kliko në butonin Mbaro për të hy brënda në SuiteCRMCRM. Ju do të duhet të hyni për herë të parë duke përdorur emrin e përdoruesit "admin" dhe fjalëkalimin që dhatë në hapin 2.',
    'LBL_REG_TITLE' => 'Regjistrimi',

    'LBL_REQUIRED' => '* fushat e nevojshme',

    'LBL_SITECFG_ADMIN_Name' => 'Emri i Adminit të Aplikacionit SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Ri-shkrimi i Adminit SuiteCRM i Përdoruesit të Fjalëkalimit',
    'LBL_SITECFG_ADMIN_PASS' => 'Fjalëkalimi i Përdoruesit të Adminit SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID e aplikimit',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Nëse selektohen, ju duhet të siguroni një ID të aplikimit për t&#39;i anashkaluar automatikisht ID të gjeneruara. ID siguron që seancat në rastin SuiteCRM nuk janë përdorur nga raste të tjera. Nëse ju keni një grup të instalimeve SuiteCRM, ata të gjithë duhet të ndajnë të njëjtin aplikim të ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Siguroni ID tuaj të Aplikacionin',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Nëse selektohen, ju duhet të specifikoni dosjen e kyçur  për të anashkaluar dosjen e parazgjedhur për t&#39;u kyçur në SuiteCRM. Pavarësisht se ku ndodhet dokumenti i kyçur, qaseni atë nëpërmjet një shfletuesi i cili do të jetë i kufizuar nëpërmjet një. htaccess përcjellës.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Përdorni Dosjen e përshatur të kyçjes',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Nëse selektohen, ju duhet të siguroni një dosje të sigurtë për ruajtjen e informacionit në sesionin SuiteCRM. Kjo mund të arrihet për të parandaluar të dhënat e sesionit nga të qenit të pambrojtur në serverat e përbashkët.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Përdorni një Dosje të Sesionit të përshtatur për SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => 'Ju lutemi të rregulloni gabimet në vijim përpara procedurës:',
    'LBL_SITECFG_LOG_DIR' => 'Kyçja e Dosjes',
    'LBL_SITECFG_SESSION_PATH' => 'Rruga për Sesionin e Dosjes<br />(duhet të regjistrohet)',
    'LBL_SITECFG_SITE_SECURITY' => 'Selektoni Opsionin e Sigurimit',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Nësë selektohen, sistemi periodikisht do të kontrollojë versionet e azhurimit të aplikimit.',
    'LBL_SITECFG_SUITE_UP' => 'Automatikisht Kontrollo për Azhurimin?',
    'LBL_SITECFG_TITLE' => 'Faqja e Konfigurimit',
    'LBL_SITECFG_TITLE2' => 'Identifikimi i Përdoruesit të Administratës',
    'LBL_SITECFG_SECURITY_TITLE' => 'Sigurimi i Faqës',
    'LBL_SITECFG_URL' => 'URL i Shkallës SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Dërgo Statistikat Anonime të përdorimit?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Nëse selektohen, SuiteCRM do të dërgojë statistikat anonime për instalimin tuaj në SuiteCRMCRM Inc Cdo kohë sistemi juaj kontrollon versionet e reja. Ky informacion do të na ndihmojë të kuptojmë më mirë se si aplikacioni është përdorur dhe udhëzoje në përmirësime të produktit.',
    'LBL_SITECFG_URL_MSG' => 'Shkruani URL që do të përdoret për të hyrë në rastin SuiteCRM pas instalimit.URL gjithashtu do të përdoret si një bazë për URLs në faqet e aplikimit SuiteCRM.URL duhet të përfshijë web serverin ose emrin makinës ose adresën IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Shkruani emrin për sistemin tuaj. Ky emër do të shfaqet në shiritin e titullit të shfletuesit kur përdoruesit do të vizitojnë aplikimin SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Pas instalimit, ju do të duhet të përdorni përdoruesin SuiteCRM të adminit (parazgjedhja e emrit të përdoruesit = admin) që të kyçeni në shkallën SuiteCRM. Fusni një fjalëkalim për këtë përdorues të administratorti. Ky fjalëkalim mund të ndryshohet pas hyrjes fillestare. Ju gjithashtu mund të hyni me emër tjetër në admin të përdorur, përveç vlerës së dhënë të parazgjedhur.',
    'LBL_SITECFG_COLLATION_MSG' => 'Selektoni krahasimin (klasifikimin) e cilësimeve për sistemin tuaj. Këto cilësime do të krijojnë tabelat me gjuhë të veçantë që ju e përdorni. Në rast se gjuha juaj nuk kërkon cilësime të posaçme ju lutemi përdorni vlera të paracaktuar.',
    'LBL_SPRITE_SUPPORT' => 'Mbështetja Sprite',
    'LBL_SYSTEM_CREDS' => 'Sistemi i Kredencialëve',
    'LBL_SYSTEM_ENV' => 'Sistemi i Ambientit',
    'LBL_SHOW_PASS' => 'Trego fjalëkalimet',
    'LBL_HIDE_PASS' => 'Fsheh fjalëkalimet',
    'LBL_HIDDEN' => 'E fshehur',
    'LBL_STEP1' => 'Step 1 of 2 - Pre-Installation requirements',
    'LBL_STEP2' => 'Step 2 of 2 - Configuration',
    'LBL_STEP' => 'Hap',
    'LBL_TITLE_WELCOME' => 'Mirësevini në SuiteCRMCrm',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'A jeni të gatshëm për instalim?',
    'REQUIRED_SYS_COMP' => 'Përbërësit e sistemit të nevojshëm',
    'REQUIRED_SYS_COMP_MSG' =>
        'Before you begin, please be sure that you have the supported versions of the following system components:<br>
                      <ul>
                      <li> Database/Database Management System (Examples: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the SuiteCRM version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'Instalo kontroll të sistemit',
    'REQUIRED_SYS_CHK_MSG' =>
        'When you begin the installation process, a system check will be performed on the web server on which the SuiteCRM files are located in order to
                      make sure the system is configured properly and has all of the necessary components
                      to successfully complete the installation. <br><br>
                      The system checks all of the following:<br>
                      <ul>
                      <li><b>PHP version</b> &#8211; must be compatible with the application</li>
                      <li><b>Session Variables</b> &#8211; must be working properly</li>
                      <li><b>MB Strings</b> &#8211; must be installed and enabled in php.ini</li>
                      <li><b>Database Support</b> &#8211; must exist for MariaDB, MySQL or SQL Server</li>
                      <li><b>Config.php</b> &#8211; must exist and must have the appropriate permissions to make it writeable</li>
                      <li>The following SuiteCRM files must be writeable:<ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  If the check fails, you will not be able to proceed with the installation.
                                  An error message will be displayed, explaining why your system did not pass the check.
                                  After making any necessary changes, you can undergo the system check again to continue the installation.<br>',


    'REQUIRED_INSTALLTYPE' => 'Instalim tipik apo i përshtatur',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Pas kontrollit të sistemit i cili është kryer, ju mund të zgjidhni instalimin tipik ose të përshtatur. <br /><br />Për dy instalimet Tipike dhe të Përshtatur, do të duhet të dini në vijim:<br />Lloji i bazës së të dhënave që do të vendosen në të dhënat e SuiteCRM<br />Llojet në përputhje me Bazën e të Dhënave: MySQL, MS SQL Server, Oracle, DB2.<br /><br />Emri i faqës së serverit ose makinës (host) në të cilën gjendet baza e të dhënave <br />Kjo mund të jetë hosti lokal nëse baza e të dhënave është në kompjuterin tuaj lokal ose është në faqën e njejtë  të serverit ose makinës si në dosjet tuaja të SuiteCRM.<br /><br />Emri i bazës së të dhënave që ju dëshironi të përdorni për të vendosur të dhënat e SuiteCRM<br />Ju mund tashmë të keni një bazë të dhënash ekzistuese që ju dëshironi të përdorni. Nëse ju jepni emrin e një bazë të dhënash ekzistuese, tabelat në bazën e të dhënave do të të hiqen gjatë instalimit kur skema për bazën e të dhënave SuiteCRM është përcaktuar.<br />Nëse ju nuk e keni bazën e të dhënave, emri që ju ofroni do të përdoret për bazën e re të dhënave që është krijuar për rastin gjatë instalimit.<br /><br />Administratori i Bazës së të Dhënave emri i përdoruesit dhe fjalëkalimi<br />Administratori i bazës së të dhënave duhet të jetë në gjendje për të krijuar tabela dhe përdoruesin dhe të shkruaj bazën e të dhënave.<br />Ju mund të kenë nevojë të kontaktoni me administratorin e bazës së të dhënave për këtë informacion, nëse baza e të dhënave nuk është vendosur në kompjuterin tuaj lokal dhe / ose në qoftë se ju nuk jeni administratori bazës së të dhënave.<br />Baza e të dhënave SuiteCRM emri i përdoruesit dhe fjalëkalimi<br />Ky përdorues mund të jetë administratori i bazës së të dhënave, ose ju mund të siguroni emrin e një përdoruesi tjetër ekzistues të bazës së të dhënave.<br />Nëse dëshironi të krijoni një përdorues të ri të bazës së të dhënave për këtë qëllim, ju do të jeni në gjendje të siguroni emrin e ri të përdoruesit dhe fjalëkalimin gjatë procesit të instalimit, dhe përdoruesi do të krijohet gjatë instalimit.<br />Për instalimin e përdoruesit, ju gjithashtu mund të kenë nevojë të dini në vijim:<br />URL që do të përdoret për të hyrë në rastin SuiteCRM pasi ai është instaluar. Kjo URL duhet të përfshijë faqën e serverit ose emrin e makinës ose IP adresën.<br /><br />[Opsional] Rruga për në dosjen e sesionit në qoftë se ju dëshironi të përdorni dosjen  në sesionin e përdoruesit për informacione të SuiteCRM me qëllim për të parandaluar të dhënat e sesionit nga të qenit të pambrojtur në serverat e përbashkët.<br /><br />[Opsional] Rruga në dosjen e përdoruesit të identifikimit në qoftë se ju dëshironi të refuzoni dosjen e parazgjedhur për identifikimin SuiteCRM.<br /><br />[Opsionale] Aplikacioni ID në qoftë se ju dëshironi të refuzoni automatikisht gjenerimin e ID që siguron seancat e një rasti SuiteCRM nuk janë përdorur nga raste të tjera.<br /><br />Vendosja e Karakterit më të zakonshëm që përdoret në lokalin tuaj.<br /><br />Për informata më të hollësishme, ju lutemi konsultoni Udhëzuesin e instalimit.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Ju lutemi lexoni në vijim informacionin e rëndësishëm përpara procedurës së instalimit. Informacion do t&#39;ju ndihmojë të përcaktoni nëse jeni ose nuk jeni gati për të instaluar aplikacionin në këtë moment.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => 'Zgjidhni gjuhën tuaj',
    'LBL_WELCOME_SETUP_WIZARD' => 'Instalim i Wizardit',
    'LBL_WIZARD_TITLE' => 'Wizardi i përdoruesit',
    'LBL_YES' => 'Po',

    'LBL_PATCHES_TITLE' => 'Instalo Pjesët e Fundit',
    'LBL_MODULE_TITLE' => 'Instalo paketat e gjuhëve',
    'LBL_PATCH_1' => 'Në qoftë se dëshironi të',
    'LBL_PATCH_TITLE' => 'Sistemi i Pjesëve',
    'LBL_PATCH_READY' => 'Pjesa(ët) në vijim janë të gatshme për t&#39;u instaluar:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRMCRM mbështetet mbi seancat e PHP për të ruajtur informacione të rëndësishme duke u lidhur me këtë faqe të serverit. Instalimi juaj PHP nuk ka informacione në Sesione të konfiguruara saktë.<br /><br />Një keqkonfigurim i zakonshëm është se &#39;sesioni.ruajtjes_pjesë \"direktiva nuk është vënë në një dosje të vlefshme.<br /><br />Ju lutemi të korrigjoni konfigurimin tuaj PHP në dosjen php.ini i cili gjendet këtu më poshtë.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sesionet e Konfigurimit të Gabuara',
    'LBL_SYSTEM_NAME' => 'Emri i sistemit',
    'LBL_COLLATION' => 'Cilësimet e Krahasimit',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Sigurimi i Emrit të Sistemit për rastin SuiteCRM.',
    'LBL_PATCH_UPLOAD' => 'Zgjidh pjesën e dosjes nga kompjuteri yt lokal',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php versioni 5 ose më lartë është i nevojshëm.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimumi i versionit të nevojshëm Php është 5.1.0. Versioni Php i rekomanduar është 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Versioni i juaj aktual është',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Versioni php i rekomanduarl është 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php prapa mënyrës së përputhueshmërise është kthyer në aktive. Vendosni ze1_përputheshmëria_mënyra në Joaktive për vazhdimin më tej.',
    'LBL_STREAM' => 'PHP allows to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informacioni i llogarisë së re',
        'type' => 'system',
        'description' => 'përshkrim<br />Ky model është përdorur kur Sistemi i Administratorit dërgon një fjalëkalim të ri për përdoruesin.',
        'body' => 'Trupi<br />Këtu është Emri i llogarisë tuaj dhe fjalëkalimi i përkohshëm:<br />Emri i përdoruesit: $ kontakt_përdoruesi_përdoruesi_emri<br />Fjalëkalimi: $ kontaktt_përdoruesi_përdoruesi_hash<br /><br /> $config_site_url<br /><br />Pasi të identifikoheni në përdorimin e fjalëkalimit të mësipërm, mund  t&#39;ju kërkohet të rivendosni fjalëkalimin sipas zgjedhjes tuaj.<br /><br /><br /><br /><br /><br /><br /><br />$ config_site_url<br /><br />Pasi ju të hyni në përdorimin fjalëkalimin e mësipërme, ju mund të kërkohet për të rivendosur fjalëkalimin në një e zgjedhjes tuaj.',
        'txt_body' =>
            'tekst_trupi<br />Këtu është llogaria juaj e emrit të përdoruesit dhe fjalëkalimi i përkohshëm: Emri i përdoruesit:  kontakt_përdorues_përdorues_emri: $ $ kontakt__përdorues_përdorues_hash $config_site_url  Pasi të identifikoheni në përdorimin e fjalëkalimit të mësipërm, mund  t&#39;ju kërkohet të rivendosni fjalëkalimin sipas zgjedhjes tuaj.',
        'name' => 'emri<br />Sistemi- i gjeneruar të fjalëkalimi i emailit',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Rivendos fjalëkalimin e llogarisë tëndë',
        'type' => 'system',
        'description' => "përshkrim<br />Ky model është përdorur kur Sistemi i Administratorit dërgon një fjalëkalim të ri për përdoruesin.",
        'body' => 'trupi<br />Ju së fundmi kërkuat në $ contact_user_pwd_last_changed të jeni në gjendje për të rivendosur fjalëkalimin e llogarisë suaj.<br />Klikoni mbi linkun e mëposhtëm për të rivendosur fjalëkalimin tuaj:<br />$ contact_user_link_guid',
        'txt_body' =>
            'tekst_trupi<br />Ju së fundmi kërkuat në $ contact_user_pwd_last_changed të jeni në gjendje për të rivendosur fjalëkalimin e llogarisë suaj.<br />Klikoni mbi linkun e mëposhtëm për të rivendosur fjalëkalimin tuaj:<br />$ contact_user_link_guid',
        'name' => 'Harove fjalëkalimin e emailit',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Two Factor Authentication Code',
        'type' => 'system',
        'description' => "This template is used to send a user a code for Two Factor Authentication.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Two Factor Authentication code is <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Two Factor Authentication code is $code.',
        'name' => 'Two Factor Authentication email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => 'Nga emri',
    'LBL_FROM_ADDR' => 'Nga adresa',

    'LBL_WIZARD_SMTP_DESC' => 'Ofroni llogarinë e emailit që ju do të përdorni për të dërguar emailat, të tilla si njoftimet e detyrës dhe fjalëkalimet e përdoruesve të rinjë. Përdoruesit do të marrin emaila nga SuiteCRMi, të dërguar nga llogaria e emailit të caktuar.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Zgjidh furnizuesin e emailit tënd',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Shkëmbimi',
    'LBL_SMTPTYPE_OTHER' => 'Tjetër',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specifikimi i SMTP Serverit',
    'LBL_MAIL_SMTPSERVER' => 'Severi i SMTP',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Përdor SMTP Autentikim?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Mundëso SMTP gjatë SSL ose TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Email adresa në Gmail',
    'LBL_GMAIL_SMTPPASS' => 'Fjalëkalimi i Gmailit',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Lejo përdoruesit të përdorin këtë llogari për emailet dalëse',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kur zgjidhet ky opcion, të gjithë përdoruesit do të munden të dërgojnë emaile duke përdorur mail llogaritë e drejtuar për jashta për të dërguar lajmërime dhe alarme të sistemit. Nëse nuk selektohet opcioni, përdoruesit do të mund të përdorin ende serverin e maileve të dërguar për jashta pas sigurimit të informacionit të llogarisë së tyre.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Fjalëkalimi i Yahoo! Mailit',
    'LBL_YAHOOMAIL_SMTPUSER' => 'ID e Yahoo! Mailit',

    'LBL_EXCHANGE_SMTPPASS' => 'Ndrysho fjalëkalimin',
    'LBL_EXCHANGE_SMTPUSER' => 'Ndrysho emrin e përdorimit',
    'LBL_EXCHANGE_SMTPPORT' => 'Ndrysho  portin e Serverit',
    'LBL_EXCHANGE_SMTPSERVER' => 'Ndrysho Serverin',


    'LBL_MAIL_SMTPUSER' => 'Emri i përdorimit SMTP',
    'LBL_MAIL_SMTPPASS' => 'Fjalëkalimi i SMTP',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Brendim',
    'LBL_WIZARD_SYSTEM_DESC' => 'Ofroni emrin e organizatës dhe logon tuaj në mënyrë që të brendoni SuiteCRMin tuaj.',
    'SYSTEM_NAME_WIZARD' => 'Emri',
    'SYSTEM_NAME_HELP' => 'Ky është emri që shfaqet në shtyllën e titullit të shfletuesit tuaj.',
    'NEW_LOGO' => 'Selekto logon:',
    'NEW_LOGO_HELP' => 'Dosja e formatit të imazhit mund të jetë .png ose. .jpg. Lartësia maksimale është 170px, dhe gjerësia maksimale është 450px. Çdo imazh i ngarkuar që është më i madhë në çdo drejtim do të jetë i shkallëzuar me këto dimensione maksimale.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Ngarko',
    'CURRENT_LOGO' => 'Logoja aktuale',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Cilësimet Lokale',
    'LBL_WIZARD_LOCALE_DESC' => 'Specifikoni se si dëshironi të shfaqen të dhënat në SuiteCRM, bazuar në vendndodhjen tuaj gjeografike. Parametrat tuaja që ju ofroni këtu do të jenë parametrat e parazgjedhura. Përdoruesit do të jenë në gjendje për të vendosur preferencat e tyre.',
    'LBL_DATE_FORMAT' => 'Formati i datës',
    'LBL_TIME_FORMAT' => 'Formati i kohës',
    'LBL_TIMEZONE' => 'Ora e zonës',
    'LBL_LANGUAGE' => 'Gjuha:',
    'LBL_CURRENCY' => 'monedha:',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Currency Code:',
    'LBL_NUMBER_GROUPING_SEP' => '1000s separator',
    'LBL_DECIMAL_SEP' => 'Simboli decimal',
    'LBL_NAME_FORMAT' => 'Name Format:',
    'UPLOAD_LOGO' => 'Please wait, logo uploading...',
    'ERR_UPLOAD_FILETYPE' => 'File type not allowed, please upload a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Unknown file upload error occurred.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Dosja e ngarkuar ka tejkaluar MADH_MAKS_DOSJ që është specifikuar në php.ini',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Dosja e ngarkuar ka tejkaluar MADH_MAKS_DOSJ që është specifikuar në formën HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Dosja e ngarkuar është ngarkuar vetëm pjesërisht',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Asnjë dosje nuk është ngarkuar',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Mungon dosje e përkohshme',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Dështoi shkruatja e dosjes në disk',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'Install...',

    'LBL_EMAIL_ADDRESS' => 'Email adresa',
    'ERR_ADMIN_EMAIL' => 'Administrator Email Address is incorrect.',
    'ERR_SITE_URL' => 'Site URL is required.',

    'STAT_CONFIGURATION' => 'Configuration relationships...',
    'STAT_CREATE_DB' => 'Create database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Create default settings...',
    'STAT_INSTALL_FINISH' => 'Install finish...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installation process finished, <a href="%s">please log in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Please accept license first',

    'LBL_MORE_OPTIONS_TITLE' => 'More options',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Database error',
    'LBL_OLD_PHP' => 'Old PHP Version Detected!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'I\'m aware of the risks and wish to continue.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Përdorues',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Emri i bazës së të dhënave',
    'LBL_DBCONFIG_MSG3' => 'Emri i bazës së të dhënave që do të përmbajë të dhënat për rastin e SuiteCRM që ju jeni gati për ta instaluar:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Emri i hostit',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Emri i përdoruesit dhe fjalëkalimi i administratorit të bazës së të dhënave që mund të krijojë tabelat e bazës së të dhënave dhe të përdoruesve dhe të cilët mund të shkruajnë në bazën e të dhënave është e nevojshme në mënyrë që të krijojnë bazën e të dhënave SuiteCRM.'
);
