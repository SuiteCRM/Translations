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
    'LBL_BASIC_SEARCH' => 'Greitas filtras',
    'LBL_ADVANCED_SEARCH' => 'Sudėtingas filtras',
    'LBL_BASIC_TYPE' => 'Pagrindinis tipas',
    'LBL_ADVANCED_TYPE' => 'Sudėtingesnis Tipas',
    'LBL_SYSOPTS_2' => 'Kokio tipo duomenų baze bus naudojamasi diegiamoje SuiteCRM sistemoje?',
    'LBL_SYSOPTS_DB' => 'Nurodykite duomenų bazės tipą',
    'LBL_SYSOPTS_DB_TITLE' => 'Duomenų bazės tipas',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Prieš tęsiant prašome ištaisyti žemiau pateiktas klaidas:',
    'ERR_DB_VERSION_FAILURE' => 'Neįmanoma patikrinti duomenų bazės versija.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Pateikite SuiteCRM administratoriaus vartotojo vardą.',
    'ERR_ADMIN_PASS_BLANK' => 'pateikite SuiteCRM administratoriaus vartotojo slaptažodį.',

    'ERR_CHECKSYS' => 'Suderinamumo patikrinimo metu rasta klaidų. Kad Jūsų SuiteCRM tinkamai veiktų, prašome imtis atitinkamų priemonių žemiau išvardytoms pastaboms ir tada paspausti pakartotinio tikrinimo mygtuką arba bandykite diegti dar kartą.',
    'ERR_CHECKSYS_CALL_TIME' => 'Allow Call Time Pass Reference is On (this should be set to Off in php.ini)',
    'ERR_CHECKSYS_CURL' => 'Nerasta: SuiteCRM planuotojai veiks su ribotu funkcionalumu.',
    'ERR_CHECKSYS_IMAP' => 'Nerasta: ateinančiam el. paštui ir kampanijoms (el. laiškų) reikalingos IMAP biliotekos.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Nustatyti į',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M arba daugiau php.ini faile)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Perspėjimas: negalima įrašyti',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Jūsų naudojama PHP versija nesuderinama su SuiteCRM.  Jums reikės įdiegti PHP versiją, kuri yra suderinama su SuiteCRM.  Prašome pasižiūrėti suderinamumo matricą versijos aprašyme. Jūsų versija yra',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Jūsų IIS versija nesuderinama su SuiteCRM.  Jums reikės įdiegti IIS versiją, kuri yra suderinama su SuiteCRM.  Prašome pasižiūrėti suderinamumo matricą versijos aprašyme. Jūsų versija yra',
    'ERR_CHECKSYS_FASTCGI' => 'Aptikta, kad Jūs nenaudojate FastCGI handler mapping PHP.  Jums reikės įdiegti/sukonfigūruoti suderinamą su SuiteCRM.  Prašome pasižiūrėti suderinamumo matricą versijos aprašyme. Prašome peržiūrėti <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> detalėms',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Optimaliam  IIS/FastCGI sapi veikimui nustatykite fastcgi.logging į 0 php.ini faile.',
    'LBL_DB_UNAVAILABLE' => 'Duomenų bazė neprieinama',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Duomenų bazės palaikymas nerastas. Prašome įsitikinti, kad turite reikiamas tvarkykles vienam iš šių palaikomų duomenų bazių tipų: MySQL, MS SQLServer ar Oracle.  Jums gali tekti atkomentuoti išplėtimą php.ini faile arba perkompiliuoti tinkamą binary failą pagal Jūsų PHP versiją. Daugiau informacijos kaip įjungti Duomenų bazės palaikymą ieškokite PHP vadove.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'XML apdarojimo bibliotekos, kurios reikalingos SuiteCRM nerastos. Jums gali reikėti atkomentuoti eilutę php.ini file arba perkompiliuoti binary failą, priklausomai nuo naudojamos PHP versijos.  Daugiau informacijos ieškokite PHP žinyne.',
    'ERR_CHECKSYS_MBSTRING' => 'Funkcijos, susietos su Multibyte Strings PHP išplėtimu (mbstring) nerastos. <br/><br/>Įprastai, mbstring modulis PHP nėra įjungtas. Jis turi būti aktyvuotas pakeitus --enable-mbstring, kai kuriamas PHP binary failas. Daugiau informacijos, kaip įjungti mbstring palaikymą, ieškokite PHP vadove.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'The config file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'The Custom Directory exists but is not writeable. You may have to change permissions on it (chmod 766) or right click on it and uncheck the read only option, depending on your Operating System. Please take the needed steps to make the file writeable.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "The files or directories listed below are not writeable or are missing and cannot be created. Depending on your Operating System, correcting this may require you to change permissions on the files or parent directory (chmod 755), or to right click on the parent directory and uncheck the 'read only' option and apply it to all subfolders.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config override',
    'ERR_CHECKSYS_SAFE_MODE' => 'Saugus rėžimas įjungtas (Jūs galite išjungti php.ini faile)',
    'ERR_CHECKSYS_ZLIB' => 'Nerasta: SuiteCRM puslapių zlib kompresija.',
    'ERR_CHECKSYS_ZIP' => 'ZIP palaikymas nerastas: SuiteCRM reikalingas ZIP palaikymas failų suspaudimui.',
    'ERR_CHECKSYS_PCRE' => 'PCRE bibliotekos nerasta: SuiteCRM PCRE bibliotekos reikalingos apdoroti Perl stiliaus reguliarios išraiškos modeli.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE bibliotekos versija: SuiteCRM reikia PCRE bibliotekos 7.0 arba naujesnė apdoroti Perl stiliaus reguliarios išraiškos modeli.',
    'ERR_DB_ADMIN' => 'Pateiktas duomenų bazės administratoriaus vartotojo vardas ir / arba slaptžodis neteisingi, susijungimas su duomenų baze negalimas. Prašome pateikti teisingą vartotojo vardą ir slaptažodį.  (Klaida:',
    'ERR_DB_ADMIN_MSSQL' => 'Pateiktas duomenų bazės administratoriaus vartotojo vardas ir / arba slaptžodis neteisingi, susijungimas su duomenų baze negalimas. Prašome pateikti teisingą vartotojo vardą ir slaptažodį.',
    'ERR_DB_EXISTS_NOT' => 'Nurodyta duomenų bazė neegzistuoja.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Duomenų bazė su konfigūraciniais duomenimis jau yra. Diegimui su nurodyta duomenų bazė reikia iš naujo paleisti diegimą ir pasirinkti: "Ištrinti ir iš naujo sukurti SuiteCRM lenteles?". Norėdami atnaujinti, naudokite atnaujinimo vedlį iš administratoriaus zonos. Atnaujinimo informacijos ieškokite <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">čia</a>.',
    'ERR_DB_EXISTS' => 'Nurodyta duomenų bazė jau yra - negalima sukurti kitos su tokiu pačiu pavadinimu.',
    'ERR_DB_EXISTS_PROCEED' => 'Nurodyta duomenų bazė jau yra.  Jūs galite<br>1.  paspausti atgal mygtuką ir parinkti naują duomenų bazės pavadinimą <br>2.  spausti toliau ir tęsti, tačiau visos esamos duomenų bazės lentelės bus ištrintos.  <strong>Tai reiškia, kad visi esami duomenys bus ištrinti.</strong>',
    'ERR_DB_HOSTNAME' => 'Serverio vardas negali būti tuščias.',
    'ERR_DB_INVALID' => 'Parinktas neteisingas duomenų bazės tipas.',
    'ERR_DB_LOGIN_FAILURE' => 'Pateiktas serverio adresas, vartotojo vardas ir/arba slaptažodis yra neteisingi - susijungimas su duomenų baze negalimas. Prašome įvesti teisingą serverio adresą, vartotojo vardą ir slaptažodį.',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Pateiktas serverio adresas, vartotojo vardas ir/arba slaptažodis yra neteisingi - susijungimas su duomenų baze negalimas. Prašome įvesti teisingą serverio adresą, vartotojo vardą ir slaptažodį.',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Pateiktas serverio adresas, vartotojo vardas ir/arba slaptažodis yra neteisingi - susijungimas su duomenų baze negalimas. Prašome įvesti teisingą serverio adresą, vartotojo vardą ir slaptažodį.',
    'ERR_DB_MYSQL_VERSION' => 'Jūsų MySQL versija (%s) nepalaiko SuiteCRM.  Jums reikės įdiegti versiją, kuri yra suderinama su SuiteCRM programa.  Ieškokite suderinamumo matrica Release Notes palaikomos MySQL versijos.',
    'ERR_DB_NAME' => 'Duomenų bazės pavadinimas negali būti tuščias.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Duomenų bazės pavadinime negali būti simbolių: '\\', '/', '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Duomenų bazės pavadinime negali būti simbolių:  '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Duomenų bazės pavadinimą gali sudaryti tik raidiniai ir skaitiniai simboliai bei simboliai '#', '_' arba '$'",
    'ERR_DB_PASSWORD' => 'Pateikti slaptažodžiai SuiteCRM duomenų bazės administratoriui nesutampa. Įveskite sutampančius slaptažodžius slaptažodžio laukeliuose.',
    'ERR_DB_PRIV_USER' => 'Pateikite duomenų bazės administratoriaus vartotojo vardą. Vartotojas reikalingas  prisijungimui prie duomenų bazės.',
    'ERR_DB_USER_EXISTS' => 'Vartotojo vardas SuiteCRM duomenų bazei egzistuoja - negalima sukurti dar vieno su tokiu pačiu pavadinimu. Prašome įvesti naują vartotojo vardą.',
    'ERR_DB_USER' => 'Įveskite SuiteCRM duomenų bazės administratoriaus vartotojo vardą.',
    'ERR_DBCONF_VALIDATION' => 'Prieš tęsiant prašome ištaisyti žemiau pateiktas klaidas:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Pateikti slaptažodžiai SuiteCRM duomenų bazės vartotojui nesutampa. Įveskite sutampančius slaptažodžius slaptažodžio laukeliuose.',
    'ERR_ERROR_GENERAL' => 'Susidurta su šiomis klaidomis:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nepavyksta ištrinti failo:',
    'ERR_LANG_MISSING_FILE' => 'Nepavyko rasti failo:',
    'ERR_LANG_NO_LANG_FILE' => 'Kalbos paketas nerastas direktorijoje include/language:',
    'ERR_LANG_UPLOAD_1' => 'Įkėlimo problema.  Bandykite dar kartą.',
    'ERR_LANG_UPLOAD_2' => 'Kalbų paketai turi būti ZIP archyvai.',
    'ERR_LANG_UPLOAD_3' => 'PHP negali perkelti laikinų failų į atnaujinimo direktoriją.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Pateikta istorijos kaupimo direktorija yra neteisinga.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Pateikta istorijos kaupimo direktorija neturi rašymo teisių.',
    'ERR_NO_DIRECT_SCRIPT' => 'Nepavyko paleisti skripto tiesiogiai.',
    'ERR_NO_SINGLE_QUOTE' => 'Negalima naudoti viengubos kabutės',
    'ERR_PASSWORD_MISMATCH' => 'Pateikti slaptažodžiai SuiteCRM administratoriaus vartotojui nesutampa. Įveskite sutampančius slaptažodžius slaptažodžio laukeliuose.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Negalima įrašyti į <span class=stop>config.php</span> failą.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Galite tęsti diegimą rankiniu būdu sukūrę config.php failą ir įkėlę konfigūracijos informaciją. <strong>Privaloma </strong>sukurti config.php failą, prieš tęsiant diegimą.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Ar nepamiršote sukurti config.php failo?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Perspėjimas: neįmanoma rašyti į config.php failą. Prašome įsitikinti ar jis yra.',
    'ERR_PERFORM_HTACCESS_1' => 'Neįmanoma rašyto į',
    'ERR_PERFORM_HTACCESS_2' => 'failą.',
    'ERR_PERFORM_HTACCESS_3' => 'Jeigu norite apsaugoti istorijos kaupimo failą nuo pasiekimo per naršyklę, sukurkite .htaccess failą toje pačioje direktorijoje su šia komandine eilute:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nėra interneto ryšio.</b> Kai interneto ryšys atsiras, prašome aplankyti <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> užregistruoti SuiteCRM. Leisdami matyti kaip Jūsų kompanija planuoja panaudoti SuiteCRM, mes galėsime užtikrinti produktus, atitinkančius Jūsų verslo poreikius.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Pateikta sesijos direktorija yra neteisinga.',
    'ERR_SESSION_DIRECTORY' => 'Pateikta sesijos direktorija yra neįrašoma.',
    'ERR_SESSION_PATH' => 'Sesijos kelias yra būtinas, jei norite nurodyti savo.',
    'ERR_SI_NO_CONFIG' => 'Jūs neįtraukėte config_si.php dokumentų direktorijoje arba neapibrėžėte $sugar_config_si config.php faile',
    'ERR_SITE_GUID' => 'Aplikacijos ID yra būtinas, jei norite nurodyti savo.',
    'ERROR_SPRITE_SUPPORT' => "Šiuo metu mes negalime rasti GD biblioteką, todėl jums nebus galėtų naudoti CSS Sprite funkcijas.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Warning: Your PHP configuration should be changed to allow files of at least 6MB to be uploaded.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Užkraunamo failo dydis',
    'ERR_URL_BLANK' => 'Pateikite bazinį adresą SuiteCRM objektui.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nepavyko rasti diegimo įrašo',
    'ERROR_MANIFEST_TYPE' => 'Manifest failas turi nurodyti paketo tipą.',
    'ERROR_PACKAGE_TYPE' => 'Manifest failas nurodo neatpažintą paketo tipą.',
    'ERROR_VERSION_INCOMPATIBLE' => 'Užkrautas failas nesuderinamas su šia SuiteCRM versija:',

    'LBL_BACK' => 'Atgal',
    'LBL_CANCEL' => 'Atšaukti',
    'LBL_ACCEPT' => 'Aš sutinku',
    'LBL_CHECKSYS_CACHE' => 'Įrašomos kešo subdirektorijos',
    'LBL_DROP_DB_CONFIRM' => 'Pateiktas duomenų bazės pavadinimas jau egzistuoja.<br>Jūs galite:<br>1.  Paspausti atšaukti mygtuką ir pasirinkti naują duomenų bazės pavadinimą arba <br>2.  Paspausti sutinktu mygtuką ir tęsti diegimą. <strong>Visos esamos duomenų bazės lentelėse su įrašytais duomenimis bus ištrintos.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponentas',
    'LBL_CHECKSYS_CONFIG' => 'Įrašomas SuiteCRM konfigūracijos failas (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL modelis',
    'LBL_CHECKSYS_CUSTOM' => 'Įrašoma Custom direktorija',
    'LBL_CHECKSYS_DATA' => 'Įrašomos duomenų subkategorijos',
    'LBL_CHECKSYS_IMAP' => 'IMAP modulis',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings modulis',
    'LBL_CHECKSYS_MEM_OK' => 'GERAI (Be apribojimų)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'GERAI (Be apribojimų)',
    'LBL_CHECKSYS_MEM' => 'PHP atminties limitas',
    'LBL_CHECKSYS_MODULE' => 'Įrašomos modulių subdirektorijos ir failai',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Negalimas',
    'LBL_CHECKSYS_OK' => 'GERAI',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'GERAI (versija',
    'LBL_CHECKSYS_PHPVER' => 'PHP versija',
    'LBL_CHECKSYS_IISVER' => 'IIS versija',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Patikrinti iš naujo',
    'LBL_CHECKSYS_STATUS' => 'Būsena',
    'LBL_CHECKSYS_TITLE' => 'Sistemos patikrinimo priėmimas',
    'LBL_CHECKSYS_XML' => 'XML apdorojimas',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Compression modulis',
    'LBL_CHECKSYS_ZIP' => 'ZIP palaikymo modulis',
    'LBL_CHECKSYS_PCRE' => 'PCRE biblioteka',
    'LBL_CHECKSYS_FIX_FILES' => 'Prieš pradedant ištaisykite šiuos failus ar katalogus:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Prieš pradedant ištaisykite šių modulių katalogus ir failus juose:',
    'LBL_CHECKSYS_UPLOAD' => 'Rašyti įkėlimo katalogas',
    'LBL_CLOSE' => 'Užbaigti',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'bus sukurta',
    'LBL_CONFIRM_DB_TYPE' => 'Duomenų bazės tipas',
    'LBL_CONFIRM_NOT' => 'ne',
    'LBL_CONFIRM_TITLE' => 'Patvirtinimo nustatymai',
    'LBL_CONFIRM_WILL' => 'bus',
    'LBL_DBCONF_DB_DROP' => 'Ištrinti lenteles',
    'LBL_DBCONF_DB_NAME' => 'Duomenų bazės pavadinimas',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM duomenų bazės vartotojo slaptažodis',
    'LBL_DBCONF_DB_PASSWORD2' => 'Dar kartą įveskite SuiteCRM duomenų bazės vartotojo slaptažodį',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Duomenų bazės vartotojas',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Duomenų bazės vartotojas',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Duomenų bazės administratoriaus vartotojo vardas',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Duomenų bazės administratoriaus slaptažodis',
    'LBL_DBCONF_COLLATION' => 'Palyginimas',
    'LBL_DBCONF_CHARSET' => 'Koduotės nustatymas',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Advanced Database Configuration',
    'LBL_DBCONF_DEMO_DATA' => 'Užpildyti duomenų bazę su demonstraciniais duomenimis?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Demonstraciniai duomenys',
    'LBL_DBCONF_HOST_NAME' => 'Serverio pavadinimas',
    'LBL_DBCONF_HOST_INSTANCE' => 'Priimančiosios instancijos',
    'LBL_DBCONFIG_SECURITY' => 'Dėl saugumo galite nurodyti išskirtinį duomenų bazės vartotoją, kuris jungtųsi prie SuiteCRM duomenų bazės.  Šis vartotojas turi galėti rašyti, atnaujinti ir gauti duomenis iš SuiteCRM duomenų bazės. Šis vartotojas gali būti duomenų bazės administratorius nurodytas prieš tai arba galite pateikti naują vartotojo informaciją.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Pateikite esamą vartotoją',
    'LBL_DBCONFIG_CREATE_DD' => 'Nurodykite vartotoją sukūrimui',
    'LBL_DBCONFIG_SAME_DD' => 'Toks pat, kaip administratorius',
    'LBL_DBCONF_TITLE' => 'Duomenų bazės konfigūracija',
    'LBL_DBCONF_TITLE_NAME' => 'Pateikite duomenų bazės pavadinimą',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Pateikite duomenų bazės vartotojo informaciją',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'SMTP slaptažodis:',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Diegimas jau buvo atliktas. Kaip apsaugos priemonė, diegimas yra išjungtas antram paleidimui. Jei jūs esate visiškai tikri, kad norite ją paleisti, eikite į savo config.php failą ir suraskite (ar pridėkite) kintamąjį \'installer_locked\' ir nustatykite į \'false\'.  Ši eilutė turėtų atrodyti taip:',
    'LBL_DISABLED_HELP_1' => 'Dėl įdiegimo pagalbos apsilankykite SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM diegimas buvo išjungtas',
    'LBL_HELP' => 'Pagalba',
    'LBL_INSTALL' => 'Įdiegti',
    'LBL_INSTALL_TYPE_TITLE' => 'Diegimo nustatymai',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Pasirinkite diegimo tipą',
    'LBL_INSTALL_TYPE_TYPICAL' => '<b>Standartinis diegimas</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => '<b>Nestandartinis diegimas</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Reikalingas minimalus informacijos kiekis diegimui. Rekomenduojama naujiems vartotojams.',
    'LBL_INSTALL_TYPE_MSG3' => 'Pateikia papildomus konfigūracijos pasirinkimus diegimo metu. Dauguma iš šių variantų taip pat yra prieinami po diegimo administratoriaus zonoje. Rekomenduojama patyrusiems vartotojams.',
    'LBL_LANG_1' => 'Norėdami naudotis kitomis kalbomis (ne Anglų), Jūs galite užkrauti ir įdiegti kalbos paketą. Jūs galėsite įkelti ir įdiegti kalbos paketus vėliau. Jei norite praleisti šį žingsnį, spauskite toliau.',
    'LBL_LANG_BUTTON_COMMIT' => 'Įdiegti',
    'LBL_LANG_BUTTON_REMOVE' => 'Išmesti',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Išdiegti',
    'LBL_LANG_BUTTON_UPLOAD' => 'Įkelti',
    'LBL_LANG_NO_PACKS' => 'tuščia',
    'LBL_LANG_PACK_INSTALLED' => 'Įdiegti kalbų paketai:',
    'LBL_LANG_PACK_READY' => 'Kalbų paketai, kuriuos galima įdiegti:',
    'LBL_LANG_SUCCESS' => 'Kalbos paketas sėkmingai įkeltas.',
    'LBL_LANG_TITLE' => 'kalbos paketas',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Diegiama SuiteCRM. Tai gali užtrukti iki kelių minučių.',
    'LBL_LANG_UPLOAD' => 'Įkelti kalbų paketą',
    'LBL_LICENSE_ACCEPTANCE' => 'Licencijos priėmimas',
    'LBL_LICENSE_CHECKING' => 'Tikrinamas sistemos suderinamumas.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Sistemos tikrinimas',
    'LBL_LICENSE_CHKDB_HEADER' => 'Tikrinami prisijungimai prie DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'Sistema atitiko suderinamumo reikalavimus.',
    'LBL_CREATE_CACHE' => 'Ruošiama diegimui...',
    'LBL_LICENSE_REDIRECT' => 'Nukreipiama į',
    'LBL_LICENSE_I_ACCEPT' => 'Aš sutinku',
    'LBL_LICENSE_PRINTABLE' => 'Versijos spausdinimui peržiūra',
    'LBL_PRINT_SUMM' => 'Spausdinimo santrauka',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM licencija',

    'LBL_LOCALE_NAME_FIRST' => 'Jonas',
    'LBL_LOCALE_NAME_LAST' => 'Jonaitis',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Veiksmas',
    'LBL_ML_DESCRIPTION' => 'Aprašymas',
    'LBL_ML_INSTALLED' => 'Įdiegimo data',
    'LBL_ML_NAME' => 'Vardas',
    'LBL_ML_PUBLISHED' => 'Paskelbimo data',
    'LBL_ML_TYPE' => 'Tipas:',
    'LBL_ML_UNINSTALLABLE' => 'Nepašalinamas',
    'LBL_ML_VERSION' => 'Versija',
    'LBL_MSSQL' => 'SQL serveris',
    'LBL_MSSQL2' => 'SQL serveris (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL serveris (Microsoft SQL serverio tvarkyklė PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli extension)',
    'LBL_NEXT' => 'Kita',
    'LBL_NO' => '--Tuščia--',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Nustatomas administratoriaus slaptažodis',
    'LBL_PERFORM_CONFIG_PHP' => 'Sukuriamas SuiteCRM konfigūracinis failas',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Kuriama duomenų bazė</b>',
    'LBL_PERFORM_CREATE_DB_2' => '<b>į</b>',
    'LBL_PERFORM_CREATE_DB_USER' => 'Kuriamas duomenų bazės vartotojo vardas ir slaptažodis...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Kuriami standartiniai SuiteCRM duomenys',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Sukuriami standartiniai darbų planuotojai',
    'LBL_PERFORM_DEFAULT_USERS' => 'Sukuriami standartiniai vartotojai',
    'LBL_PERFORM_DEMO_DATA' => 'Užpildoma duomenų bazė demonstraciniais duomenimis (tai gali šiek tiek užtrukti)',
    'LBL_PERFORM_DONE' => 'atlikta<br>',
    'LBL_PERFORM_FINISH' => 'Pabaiga',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM diegimas',
    'LBL_PERFORM_OUTRO_2' => 'yra baigtas!',
    'LBL_PERFORM_OUTRO_3' => 'Laikas iš viso:',
    'LBL_PERFORM_OUTRO_4' => 'sekundžių.',
    'LBL_PERFORM_OUTRO_5' => 'Atminties sunaudojimas:',
    'LBL_PERFORM_OUTRO_6' => 'baitų.',
    'LBL_PERFORM_SUCCESS' => 'Sėkmingai!',
    'LBL_PERFORM_TABLES' => 'Sukuriamos SuiteCRM sistemos lentelės, audito lentelės ir ryšių aprašymai',
    'LBL_PERFORM_TITLE' => 'Diegimo vykdymas',
    'LBL_PRINT' => 'Spausdinti',
    'LBL_REG_CONF_1' => 'Norėdami gauti SuiteCRM produktų naujienų pranešimus, apmokymų naujienas, specialius pasiūlymus ir kvietimus į renginius, prašome užpildyti šią trumpą formą žemiau. Mes neparduodame ar kitaip neplatinam surinktos informacijos trečiosioms šalims.',
    'LBL_REG_CONF_3' => 'Ačiū už registraciją. Paspauskite mygtuką Baigti prisijungimui prie SuiteCRM. Pirmą kartą Jūs turite prisijungti naudodami vartotojo vardą "admin" ir slaptažodį, kurį įvedėte 2 žingsnyje.',
    'LBL_REG_TITLE' => 'Registracija',

    'LBL_REQUIRED' => '* Privalomas laukelis',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM administratoriaus vardas',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Dar kartą įveskite SuiteCRM administratoriaus vartotojo slaptažodį',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM administratoriaus slaptažodis',
    'LBL_SITECFG_APP_ID' => 'Programos ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Jei pasirinkta, Jūs turite pateikti programos ID, kuris pakeis automatiškai sugeneruotą ID. ID užtikrina, kad SuiteCRM objekto sesijos nėra naudojamos kitų objektų. Jeigu turite keletą SuiteCRM diegimų, jie visi turi dalintis tuo pačiu programos ID.',
    'LBL_SITECFG_CUSTOM_ID' => 'Pateikite savo programos ID',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Jei pasirinkta, Jūs turite pateikti SuiteCRM istorijos sekimo direktoriją, kuri pakeis standartinę. Priklausomai nuo istorijos kaupimo failo vietos, priėjimas prie jo per naršyklę bus apribotas .htaccess nukreipimu.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Naudoti nestandartinę istorijos sekimo direktoriją',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Jei pasirinkta, Jūs turite pateikti saugumo aplanką, kuriama bus saugoma SuiteCRM sesijos informacija. Tai galima padaryti siekiant užkirsti kelią sesijos duomenų pažeidui bendriniuose serveriuose.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Naudoti nestandartinę SuiteCRM sesijos direktoriją',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Prieš tęsiant prašome ištaisyti šias klaidas:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Istorijos kaupimo direktorija',
    'LBL_SITECFG_SESSION_PATH' => 'Sesijos direktorijos kelias<br>(privalo būti įrašomas)',
    'LBL_SITECFG_SITE_SECURITY' => 'Pasirinkite saugumo nuostatas',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Jei pasirinkta, sistema periodiškai tikrins programos atnaujinimus.',
    'LBL_SITECFG_SUITE_UP' => 'Automatiškai ieškoti atnaujinimų?',
    'LBL_SITECFG_TITLE' => 'Sistemos konfigūracija',
    'LBL_SITECFG_TITLE2' => 'Nustatyti administratoriaus vartotoją',
    'LBL_SITECFG_SECURITY_TITLE' => 'Sistemos saugumas',
    'LBL_SITECFG_URL' => 'SuiteCRM objekto adresas',
    'LBL_SITECFG_ANONSTATS' => 'Siųsti anoniminę SuiteCRM vartojimo statistiką?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Jei pasirinkta, sistema automatiškai siųs į SuiteCRM Inc. <b>anoniminę</b> statistiką apie SuiteCRM naudojimą kiekvieną kartą, kai bus tikrinami sistemos atnaujinimai. Ši informacija padės mums geriau suprasti, kaip naudojama programa ir leis tobulinti produktą.',
    'LBL_SITECFG_URL_MSG' => 'Įveskite URL, kuris bus naudojamas prieigai prie SuiteCRM sistemos po diegimo. Šis adresas taip pat bus naudojamas, kaip bazinis SuiteCRM sistemos puslapių adresas. Adrese turėtų būti įtraukta serverio vardas ar IP adresas.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Įveskite sistemos pavadinimą. Pavadinimas bus matomas naršyklės pavadinimo juostoje.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Po diegimo, Jūs turėsite naudoti SuiteCRM administratoriaus vartotoją (standartinis vardas = admin) prisijungimui prie SuiteCRM sistemos.  Įveskite slaptažodį administratoriui. Slaptažodis gali būti pakeistas po prisijungimo.  Taip pat galite pateikti kitą administratoriaus vartotojo vardą.',
    'LBL_SITECFG_COLLATION_MSG' => 'Pasirinkite savo sistemos parametrus sulyginimo (rūšiavimas). Šios nuostatos bus sukurti lenteles su naudojamos konkrečios kalbos. Jei jūsų kalba nereikalauja specialios parametrus prašome naudoti numatytąją vertę.',
    'LBL_SPRITE_SUPPORT' => 'Sprite Palaikymas',
    'LBL_SYSTEM_CREDS' => 'Sistemos prisijungimo duomenys',
    'LBL_SYSTEM_ENV' => 'Sistemos aplinka',
    'LBL_SHOW_PASS' => 'Rodyti slaptažodžius',
    'LBL_HIDE_PASS' => 'Paslėpti slaptažodžius',
    'LBL_HIDDEN' => '<i>(paslėpti)</i>',
    'LBL_STEP1' => 'Žingsnis 1 iš 2 - reikalavimai prieš diegimą',
    'LBL_STEP2' => 'Žingsnis 2 iš 2 - konfigūravimas',
    'LBL_STEP' => 'Žingsnis',
    'LBL_TITLE_WELCOME' => 'Sveiki atvykę į SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Ar esate pasirengę įdiegti?',
    'REQUIRED_SYS_COMP' => 'Reikalingi sistemos komponentai',
    'REQUIRED_SYS_COMP_MSG' =>
        'Before you begin, please be sure that you have the supported versions of the following system components:<br>
                      <ul>
                      <li> Database/Database Management System (Examples: MariaDB, MySQL or SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consult the Compatibility Matrix in the Release Notes for
                      compatible system components for the SuiteCRM version that you are installing.<br>',
    'REQUIRED_SYS_CHK' => 'Pradinis sistemos tikrinimas',
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


    'REQUIRED_INSTALLTYPE' => 'Standartinis ar nestandartinis diegimas',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'Po sistemos patikrinimo galite pasirinkti<br />                      Standartinį arba Nestandartinį diegimas.<br><br><br />                      Abiems diegimo tipams <b>Standartiniam</b> ir <b>Nestandartiniam</b> , Jums reikės žinoti:<br><br />                      <ul><br />                      <li> <b>Duomenų bazės tipas</b> kuriame bus saugomi SuiteCRM duomenys <ul><li>Palaikomi duomenų bazės<br />                      tipai: MySQL, MS SQL Server, Oracle.<br><br></li></ul></li><br />                      <li> <b>Serverio pavadinimas</b>, kuriame yra duomenų bazė<br />                      <ul><li>Tai gali būti <i>localhost</i> jei duomenų bazė yra lokaliame kompiuteryje arba tam pačiam serveryje, kur laikomi SuiteCRM failai.<br><br></li></ul></li><br />                      <li><b>Duomenų bazės pavadinimas</b>, kurioje norėtumėte laikyti SuiteCRM duomenis</li><br />                        <ul><br />                          <li>Jūs galite pasirinkti esamą duomenų bazę, kurią galite naudoti su SuiteCRM. Jei<br />                          pateiksite esamos duomenų bazės pavadinimą, duomenų bazės lentelės<br />                          bus ištrintos diegimo metu.</li><br />                          <li> Jei neturite duomenų bazės, ji bus sukurta diegimo metu, tokiu vardu, kokį pateiksite.<br><br></li><br />                        </ul><br />                      <li><b>Duomenų bazės administratoriaus vartotojo vardas ir slaptažodis</b> <ul><li>Duomenų bazės administratorius turi turėti teises sukurti lenteles ir vartotojus.</li><li>Jums gali reikėti<br />                      susisiekti su duomenų bazės administratoriumi šiai informacijai gauti, jeigu duomenų bazė nėra<br />                      laikoma lokaliam kompiuteryje ir/arba jeigu nesate duomenų bazės administratorius.<br><br></ul></li></li><br />                      <li> <b>SuiteCRM duomenų bazės vartotojo vardas ir slaptažodis</b><br />                      </li><br />                        <ul><br />                          <li> Vartotojas gali būti duomenų bazės administratorius arba kitas<br />                          duomenų bazės vartotojas. </li><br />                          <li> Jei norite sukurti naują duomenų bazės vartotoją<br />                          turite pateikti naujo vartotojo vardą ir slaptažodį diegimo metu. </li><br />                        </ul></ul><p><br /><br />                      <b>Nestandartiniam</b> diegimui, Jums gali prireikti:<br><br />                      <ul><br />                      <li> <b>Adreso, kuriuo bus pasiekiama SuiteCRM sistema,</b> po diegimo.<br />                      Šis adresas turi turėti serverio vardą ar IP adresą.<br><br></li><br />                                  <li> [Papildomai] <b>Kelią į sesijos direktoriją</b> jei norite naudoti nestandartinę<br />                                  sesijos direktoriją SuiteCRM informacijai, norint išvengti sesijos duomenų pažeidui bendriniuose serveriuose.<br><br></li><br />                                  <li> [Papildomai] <b>Kelią i nestandartinę istorijos kaupimo direktoriją</b>.<br><br></li><br />                                  <li> [Papildomai] <b>Programos ID</b> jei norite pakeisti automatiškai sugeneruotą ID. ID užtikrina, <br />								  kad SuiteCRM objekto sesijos nėra naudojamos kitų objektų.<br><br></li><br />                                  <li><b>Simbolių rinkinys</b> dažniausiai naudojamas pagal Jūsų vietinius nustatymus.<br><br></li></ul><br />                                  Išsamesnės informacijos ieškokite diegimo vadove.',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Prašome atidžiai perskaityti šią svarbią informaciją prieš tęsiant įdiegimą. Ši informacija padės jums nustatyti, ar esate pasirengę įdiegti SuiteCRM.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Pasirinkite savo kalbą</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Diegimo vedlys',
    'LBL_WIZARD_TITLE' => 'SuiteCRM diegimo vedlys:',
    'LBL_YES' => 'Yes',

    'LBL_PATCHES_TITLE' => 'Įdiegti naujausius atnaujinimus',
    'LBL_MODULE_TITLE' => 'Įdiegti kalbos paketus',
    'LBL_PATCH_1' => 'Jei norite praleisti šį žingsnį, spauskite Toliau.',
    'LBL_PATCH_TITLE' => 'Sistemos atnaujinimas',
    'LBL_PATCH_READY' => 'Šie atnaujinimai paruošti diegimui:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM remiasi PHP sesijomis. Jūsų PHP versija nėra tinkamai sukonfigūruotas sesijoms.<br />											<br><br>Klaida: <b>'session.save_path'</b> veda į klaidingą direktoriją.  <br><br />											<br> Prašome ištaisyti <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP konfigūraciją</a>  php.ini failą.",
    'LBL_SESSION_ERR_TITLE' => 'PHP sesijos konfigūravimo klaida',
    'LBL_SYSTEM_NAME' => 'Sistemos pavadinimas',
    'LBL_COLLATION' => 'Sulyginimo Nustatymai',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Pateikite sistemos pavadinimą SuiteCRM programai.',
    'LBL_PATCH_UPLOAD' => 'Pasirinkite atnaujinimo failą iš savo kompiuterio',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'PHP 5 ar aukštesnė versija reikalinga.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimali PHP versija yra 5.1.0. Rekomenduojama -  5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Jūsų dabartinė php versija yra',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Rekomenduojama PHP versija 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'PHP Backward Compatibility mode yra išjungtas. Nustatykite zend.ze1_compatibility_mode į Off prieš tęsiant',
    'LBL_STREAM' => 'PHP leidimas naudotis srautu',

    'advanced_password_new_account_email' => array(
        'subject' => 'Naujos paskyros informacija',
        'type' => 'system',
        'description' => 'Šis šablonas naudojamas, kai sistemos Administratorius siunčia naują slaptažodį vartotojui.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Čia yra Jūsų paskyros vartotojo vardas ir laikinas slaptažodis:</p><p>Vartotojo vardas: $contact_user_user_name </p><p>Slaptažodis: $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Po to, kai prisijungsite su laikinu slaptažodžiu, Jūs turite pakeisti slaptažodį į savo pasirinktą.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Here is your account username and temporary password:
Username : $contact_user_user_name
Password : $contact_user_user_hash

$config_site_url

After you log in using the above password, you may be required to reset the password to one of your own choice.',
        'name' => 'System-generated password email',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Reset your account password',
        'type' => 'system',
        'description' => "This template is used to send a user a link to click to reset the user's account password.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>You recently requested on $contact_user_pwd_last_changed to be able to reset your account password. </p><p>Click on the link below to reset your password:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
You recently requested on $contact_user_pwd_last_changed to be able to reset your account password.

Click on the link below to reset your password:

$contact_user_link_guid',
        'name' => 'Forgot Password email',
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

    'LBL_FROM_NAME' => 'Siuntėjo vardas:',
    'LBL_FROM_ADDR' => 'Siuntėjo adresas:',

    'LBL_WIZARD_SMTP_DESC' => 'Pateikite el. pašto adresą, kuris bus naudojamas siunčiant užduočių priskirimus ar naujai sugeneruotą slaptažodį.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Pasirinkite pašto tiekėją:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! paštas',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Kiti',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP serverio specifikacijos',
    'LBL_MAIL_SMTPSERVER' => 'SMTP serveris:',
    'LBL_MAIL_SMTPPORT' => 'SMTP portas:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Naudoti SMTP identifikaciją?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Įjungti SMTP su SSL arba TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail pašto adresas:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail slaptažodis:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Leisti vartotojams išsiųsti el. laiškus pasinaudojant šios pašto dėžutės prisijungimu:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kai pažymėtas šis pasirinkimas, visi vartotojai galės siųsti elektroninius laiškus naudojant tą pačią siunčiamų laiškų paskyrą, naudojamą siųsti sistemos pranešimus ir perspėjimus. Jei parinktis nėra pasirinkta, vartotojai gali naudoti atskirai sukonfigūruotą pašto serverį.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! pašto slaptažodis:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! pašto ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange slaptažodis:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange vartotojo vardas:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange serverio portas:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange serveris:',


    'LBL_MAIL_SMTPUSER' => 'SMTP vartotojo vardas:',
    'LBL_MAIL_SMTPPASS' => 'SMTP slaptažodis:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Firmos vardas',
    'LBL_WIZARD_SYSTEM_DESC' => 'Pateikite savo organizacijos pavadinimą ir logotipą.',
    'SYSTEM_NAME_WIZARD' => 'Vardas:',
    'SYSTEM_NAME_HELP' => 'Šis pavadinimas matysis Jūsų Interneto naršyklės antraštės pavadinime.',
    'NEW_LOGO' => 'Užkrauti naujos firmos ženklą (212x40)',
    'NEW_LOGO_HELP' => 'Vaizdo failo formatas gali būti .jpg arba .png. Didžiausias aukštis yra 170px, o didžiausias plotis 450px. Bet vaizdas įkeltas didesnio bet kuria kryptimi bus sumažintas šių max matmenų. Vaizdo failo varde negali būti tarpas.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Įkelti',
    'CURRENT_LOGO' => 'Dabartinis logotipas',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Sistemos lokalizacijos nustatymai',
    'LBL_WIZARD_LOCALE_DESC' => 'Nurodykite kaip norėtumėte matyti duomenų formatus pagal vietovę. Pateikti nustatymai bus pateikti kaip standartiniai.',
    'LBL_DATE_FORMAT' => 'Datos formatas:',
    'LBL_TIME_FORMAT' => 'Laiko formatas:',
    'LBL_TIMEZONE' => 'Laiko juosta:',
    'LBL_LANGUAGE' => 'Kalba:',
    'LBL_CURRENCY' => 'Valiuta:',
    'LBL_CURRENCY_SYMBOL' => 'Valiutos simbolis:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Valiutos kodas:',
    'LBL_NUMBER_GROUPING_SEP' => '1000 skirtukas',
    'LBL_DECIMAL_SEP' => 'Dešimtainės skirtukas',
    'LBL_NAME_FORMAT' => 'Vardo formatas:',
    'UPLOAD_LOGO' => 'Palaukite, logotipas įkeliamas..',
    'ERR_UPLOAD_FILETYPE' => 'Toks failo tipas neleidžiamas, įkelkite jpeg arba png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Nežinoma failo įkėlimo klaida.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Išsiųstas failas viršija išsiuntimo maksimalų dydį upload_max_filesize direktyvą nurodytą php.ini faile.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Išsiųstas failas viršija išsiuntimo maksimalų dydį MAX_FILE_SIZE direktyvą, kuri buvo nurodyta HTML formoje.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Išsiųstas failas buvo tik dalinai išsiųstas.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Jokių failų neišsiųsta.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Trūksta laikino katalogo.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Nepavyko įrašyti failo į diską.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'Įdiegiama...',

    'LBL_EMAIL_ADDRESS' => 'El.paštas:',
    'ERR_ADMIN_EMAIL' => 'Administratoriaus el. pašto adresas yra neteisingas.',
    'ERR_SITE_URL' => 'Svetainės URL yra būtinas.',

    'STAT_CONFIGURATION' => 'Konfigūracijos ryšiai...',
    'STAT_CREATE_DB' => 'Kuriama duomenų bazė...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Kuriami pagrindiniai parametrai...',
    'STAT_INSTALL_FINISH' => 'Diegimas baigtas...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Diegimo procesas baigtas, <a href="%s">Prisijunkite...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Ppirmiausiai priimkite licencijos sąlygas',

    'LBL_MORE_OPTIONS_TITLE' => 'Daugiau nustatymų',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Duomenų bazės klaida',
    'LBL_OLD_PHP' => 'Old PHP Version Detected!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'I\'m aware of the risks and wish to continue.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Vartotojas',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Duomenų bazės pavadinimas',
    'LBL_DBCONFIG_MSG3' => 'Duomenų bazės pavadinimas, kurioje bus diegiama SuiteCRM:',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Serverio pavadinimas',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Duomenų bazės administratoriaus vartotojo vardas ir slaptažodis, kuris turi teises kurti duomenų bazės lenteles ir vartotojus bei įrašyti duomenis yra privalomas SuiteCRM diegimui.'
);
