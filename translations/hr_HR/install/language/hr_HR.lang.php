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
    'LBL_BASIC_SEARCH' => 'Brzi Filter',
    'LBL_ADVANCED_SEARCH' => 'Napredni filtar',
    'LBL_BASIC_TYPE' => 'Osnovni Tip',
    'LBL_ADVANCED_TYPE' => 'Napredni Tip',
    'LBL_SYSOPTS_2' => 'Koji tip baze podataka će biti korišten za SuiteCRM instancu koju upravo instalirate?',
    'LBL_SYSOPTS_DB' => 'Odaberite tip baze podataka',
    'LBL_SYSOPTS_DB_TITLE' => 'Tip Baze Podataka',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Molimo popravite sljedeće greške prije nego što nastavite sa instalacijom:',
    'ERR_DB_VERSION_FAILURE' => 'Neuspjela provjera verzije baze podataka.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Pružite korisničko ime za SuiteCRM administratora.',
    'ERR_ADMIN_PASS_BLANK' => 'Pružite lozinku za SuiteCRM adminstratora.',

    'ERR_CHECKSYS' => 'Kod provjere kompatibilnosti otkrivene su greške. Da bi instalacija radila ispravno, molimo poduzmite odgovarajuće korake za uklanjanje grešaka navedenih ispod ili pritisnite gumb "Ponovno provjeri" ili pokušajte opet pokrenuti instalaciju.',
    'ERR_CHECKSYS_CALL_TIME' => 'Opcija "Allow Call Time Pass Reference" je uključena (postavljena je na "ON") a trebala bi biti isključena (postavljena na "OFF") u datoteci php.ini',
    'ERR_CHECKSYS_CURL' => 'Nije pronađeno: SuiteCRM raspored pokrenuti će se sa ograničenim funkcionalnostima.',
    'ERR_CHECKSYS_IMAP' => 'Nije pronađeno: Dolazna e-pošta i kampanje (e-pošta) zahtjevaju IMAP libraries. Niti jedna neće biti funkcionalna.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => '(Postavite ovo na',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M ili veće u vašoj php.ini datoteci.)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Upozorenje: Nije omogućena promjena zapisa',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Vaša verzija PHP nije podržana od SuiteCRM. Morati ćete instalirati verziju koja je kompatibilna sa SuiteCRM aplikacijom. Molim konzultirajte se sa Compatibility Matrix u bilješkama za podržane PHP verzije. Vaša verzija je',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Vaša verzija IIS nije podržana od SuiteCRM. Morati ćete instalirati verziju koja je kompatibilna sa SuiteCRM aplikacijom. Molim konzultirajte se sa Compatibility Matrix u bilješkama za podržane IIS verzije. Vaša verzija je',
    'ERR_CHECKSYS_FASTCGI' => 'Ustanovljeno je da ne koristite FastCGI handler mapping za PHP. Trebate instalirati/konfigurirati verziju koja je kompatibilna sa SuiteCRM aplikacijom. Molimo pogledajte "Tablicu kompatibilnosti" (Compatibility Matrix) u dokumentu "Bilješke o objavi" (Release Notes) za podržane verzije. Molimo potražite detalje na <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Za optimalno iskustvo koristeći IIS/FastCGI sapi, postavite fastcgi.logging na 0 u vašoj php.ini datoteci.',
    'LBL_DB_UNAVAILABLE' => 'Baza podataka nije dostupna',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Podrška za bazu podataka nije pronađena. Provjerite imate li sve potrebne drajvere za podršku slijedećih tipova baza podataka: MySQL or MS SQLServer. Možda će biti potrebno isključiti komentare u dokumentu php.ini, ili ga rekompilirati s ispravnom binarnom datotekom, ovisno o vašoj PHP verziji. Molimo provjerite PHP uputstva za više informacija o tome kako omogućiti Podršku za bazu podataka (enable Database Support).',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Nisu pronađene funkcije povezane s XML Parser Libraries potrebne za rad SuiteCRM-a. Pokušajte isključiti komentare za ekstenziju u datoteci php.ini ili rekompilirajte ispravnu binarnu datoteku, ovisno o verziji PHP-a. Detaljnije informacije potražite u PHP Korisničkom priručniku.',
    'ERR_CHECKSYS_MBSTRING' => 'Nisu pronađene funkcije povezane s Multibyte Strings PHP ekstenzijom potrebne za ispravan rad SuiteCRM-a. <br/><br/>
Najčešće mbstring modul nije automatski aktiviran u PHP-u i potrebno ga je aktivirati ručno naredbom --enable-mbstring u trenutku izrade PHP binarne datoteke. Molimo da detalje za ovu operaciju potražite u PHP Korisničkom priručniku.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Datoteka config postoji ali nije omogućeno njeno editiranje (not writable). Ovisno o vašem Operacijskom sustavu, možda je potrebno promijeniti dopuštenja (permissions) naredbom chmod 766 ili kliknite na ime datoteke desnim gumbom miša, odaberite opciju Properties te isljučite kvačicu na odredniku "samo čitanje" (read only).',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Datoteka config override (premošćavanje) postoji ali nije omogućeno njeno editiranje (not writable). Ovisno o vašem Operacijskom sustavu, možda je potrebno promijeniti dopuštenja (permissions) naredbom chmod 766 ili kliknite na ime datoteke desnim gumbom miša, odaberite opciju Properties te isljučite kvačicu na odredniku "samo čitanje" (read only).',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Datoteka Custom Directory (Poseban direktorij) postoji ali nije omogućeno njeno editiranje (not writable). Ovisno o vašem Operacijskom sustavu, možda je potrebno promijeniti dopuštenja (permissions) naredbom chmod 766 ili kliknite na ime datoteke desnim gumbom miša, odaberite opciju Properties te isljučite kvačicu na odredniku "samo čitanje" (read only).',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Za datoteke ili mape s donjeg popisa nije omogućeno editiranje ili ne postoje i ne mogu se kreirati. Ovisno o vašem Operacijskom sustavu, možda je potrebno promijeniti dopuštenja (permissions) naredbom chmod 766 na krovnom direktoriju (Parent Directory) ili kliknite na njega desnim gumbom miša, odaberite opciju Properties te isljučite kvačicu na odredniku \"samo čitanje\" (read only) uz odabir opcije \"primjeni na sve pod-direktorije\".",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Functions associated with JSON Parser Libraries that are needed by the SuiteCRM application were not found. You might need to uncomment the extension in the php.ini file, or recompile with the right binary file, depending on your version of PHP. Please refer to your PHP Manual for more information.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Premošćavanje naredbi',
    'ERR_CHECKSYS_SAFE_MODE' => 'Sigurnosni način je uključen (možda ćete htjeti isključiti ga u php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Podrška za ZLib nije pronađena: SuiteCRM pruža izuzetno visoke performanse u radu zahvaljujući zlib kompresiji.',
    'ERR_CHECKSYS_ZIP' => 'ZIP podška nije pronađena: SuiteCRM zahtjeva ZIP podršku kako bi procesuirao kompresiranje datoteke.',
    'ERR_CHECKSYS_PCRE' => 'PCRE library nije pronađena: SuiteCRM traži PCRE library kako bi bilo moguće procesuirati Perl stil za uobičajeni izraz poklapanja uzoraka.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE library verzija: SuiteCRM traži PCRE library 7.0 ili noviji kako bi bilo moguće procesuirati Perl stil za uobičajeni izraz poklapanja uzoraka.',
    'ERR_DB_ADMIN' => 'Korisnik i/ili korisnička lozinka za administratora navedene baze podataka nije točna te veza s bazom podataka ne može biti uspostavljena. Molimo unesite točno korisničko ime i lozinku. (Error: ',
    'ERR_DB_ADMIN_MSSQL' => 'Korisnik i/ili korisnička lozinka za administratora navedene baze podataka nije točna te veza s bazom podataka ne može biti uspostavljena. Molimo unesite točno korisničko ime i lozinku.',
    'ERR_DB_EXISTS_NOT' => 'Označena baza podataka ne postoji.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Baza podataka s konfiguracijskim podacima već postoji. Za pokretanje i instalaciju s odabranom bazom podataka, molimo iznova pokrenite instalaciju i izaberite opciju: "Odbaciti i re-kreirati postojeće SuiteCRM tablice?" (Drop and recreate existing SuiteCRM tables?). Za nadogradnju izaberite "Upgrade Wizard" u administratorskom sučelju. Molimo pročitajte dokumentaciju za nadogradnju na <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">here</a>.',
    'ERR_DB_EXISTS' => 'Baza podataka s ovim imenom već postoji - nije moguće kreirati još jednu bazu s istim imenom.',
    'ERR_DB_EXISTS_PROCEED' => 'Baza podataka s ovim imenom već postoji. Možete <br>1. kliknuti na dugme "Povratak" i upisati novo ime <br>2. kliknuti na "Slijedeće i nastavi" ali pritom će sve tablice u postojećoj bazi podataka biti izbrisane. <strong>To znači da će i svi vaši postojeći podaci biti izbrisani.</strong>',
    'ERR_DB_HOSTNAME' => 'Ime hosta nemože biti prazno.',
    'ERR_DB_INVALID' => 'Odabran pogrešan tip baze podataka.',
    'ERR_DB_LOGIN_FAILURE' => 'Domaćin, korisnik i/ili korisnička lozinka za navedenu bazu podataka nije točan te veza s bazom podataka ne može biti uspostavljena. Molimo unesite točno ime domaćina, korisničko ime i lozinku',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Domaćin, korisnik i/ili korisnička lozinka za navedenu bazu podataka nije točan te veza s bazom podataka ne može biti uspostavljena. Molimo unesite točno ime domaćina, korisničko ime i lozinku',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Domaćin, korisnik i/ili korisnička lozinka za navedenu bazu podataka nije točan te veza s bazom podataka ne može biti uspostavljena. Molimo unesite točno ime domaćina, korisničko ime i lozinku',
    'ERR_DB_MYSQL_VERSION' => 'SuiteCRM ne podržava vašu verziju MySQL (%s). Potrebno je instalirati verziju MySQL koju podržava aplikacija SuiteCRM. Molimo potražite podatke o podržanim verzijama MySQL u tablici Compatibility Matrix dokumenta Release Notes.',
    'ERR_DB_NAME' => 'Naziv baze podataka ne može biti prazan.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Naziv baze podataka ne može sadržavati '\\', '/', ili '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Ime baze podataka ne može početi s brojem, '#', ili '@' i ne smije sadržavati razmak te znakove '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', ili '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Ime baze podataka može se sastojati samo od alfanumeričkih znakova i simbola '#', '_' ili '$'",
    'ERR_DB_PASSWORD' => 'Lozinke za SuiteCRM administratora baze podataka se ne podudaraju. Ponovo unesite istovjetnu lozinku u oba za to predviđena polja.',
    'ERR_DB_PRIV_USER' => 'Upišite ime za administratora baze podataka. Taj korisnik je obavezan za početno spajanje na bazu.',
    'ERR_DB_USER_EXISTS' => 'Korisničko ime za korisnika SuiteCRM baze podataka već postoji, ne možete stvoriti još jednoga s istim imenom. Molimo unesite novo korisničko ime.',
    'ERR_DB_USER' => 'Unesite korisničko ime za SuiteCRM administratora baze podataka.',
    'ERR_DBCONF_VALIDATION' => 'Molimo popravite sljedeće greške prije nego što nastavite sa instalacijom:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Lozinke za korisnika SuiteCRM baze podataka se ne podudaraju. Ponovo unesite istovjetnu lozinku u oba za to predviđena polja.',
    'ERR_ERROR_GENERAL' => 'Sljedeće greške su otkrivene:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Datoteka se ne može izbrisati:',
    'ERR_LANG_MISSING_FILE' => 'Datoteka nije pronađena:',
    'ERR_LANG_NO_LANG_FILE' => 'Nije pronađena datoteka jezičnog paketa kod include/language unutar: ',
    'ERR_LANG_UPLOAD_1' => 'Došlo je do greške prilikom učitanja. Molim pokušajte ponovo.',
    'ERR_LANG_UPLOAD_2' => 'Jezični paketi moraju biti ZIp arhive.',
    'ERR_LANG_UPLOAD_3' => 'PHP ne može pomaknuti temp datoteku u direktorij nadogradnje.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Pruženi direktorij zapisa nije validan direktorij.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Za Log direktorij nije omogućeno pisanje (not writable).',
    'ERR_NO_DIRECT_SCRIPT' => 'Nije moguće izravno obraditi skriptu.',
    'ERR_NO_SINGLE_QUOTE' => 'Ne može se koristiti jednostruki citat za',
    'ERR_PASSWORD_MISMATCH' => 'Lozinke za SuiteCRM administratora se ne podudaraju. Ponovo unesite istovjetnu lozinku u oba za to predviđena polja.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Nije moguće pisati u datoteku <span class=stop> config.php</span> (not writable).',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Možete nastaviti s instalacijom tako da ručno napravite dokument imena config.php te u njega unesete (copy/paste) dolje navedene konfiguracijske podatke. Kako bilo da bilo, <strong>morate </strong>napraviti config.php datoteku da biste mogli nastaviti na sljedeći korak.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Jeste li zapamtili kreirati config.php datoteku?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Upozorenje: Ne može se zapisivati u config.php datoteku. Molim provjerite postoji li datoteka.',
    'ERR_PERFORM_HTACCESS_1' => 'Ne može se zapisati u',
    'ERR_PERFORM_HTACCESS_2' => 'datoteku.',
    'ERR_PERFORM_HTACCESS_3' => 'Ako želite osigurati vašu log datoteku tako da ne bude dostupna putem preglednika, napravite .htaccess dokument u Log direktoriju u u njega upišite:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nije pronađena veza s internetom.</b> Kada budete spojeni na internet, molimo posjetite adresu <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> i registrirajte SuiteCRM. S malo podataka o načinu na koji planirate koristiti SuiteCRM, osiguravate nam mogućnost da uvijek isporučujemo aplikaciju koja će zadovoljavati sve potrebe vašeg poslovanja.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Session directory nije ispravan direktorij.',
    'ERR_SESSION_DIRECTORY' => 'Za Session direktorij nije omogućeno pisanje (not writable).',
    'ERR_SESSION_PATH' => 'Put do Session direktorija je neophodan ako želite odabrati/kreirati svoj vlastiti direktorij.',
    'ERR_SI_NO_CONFIG' => 'Niste unijeli config_si.php u korijen dokumenta ili niste definirali $sugar_config_si u config.php',
    'ERR_SITE_GUID' => 'Potreban je ID aplikacije ukoliko želite odrediti vlastiti.',
    'ERROR_SPRITE_SUPPORT' => "Trenutno nismo u mogućnosti pronaći GD knjižnicu, zbog čega nećete moći koristiti CSS Sprite funkcionalnost.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Upozorenje: Potrebno je promijeniti PHP konfiguraciju kako bi se mogle učitati datoteke od najmanje 6 MB.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Veličina datoteke učitanja',
    'ERR_URL_BLANK' => 'Pružite bazni URL za SuiteCRM instancu.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nije pronađen zapis o instalaciji od',
    'ERROR_MANIFEST_TYPE' => 'Manifest datoteka mora imati definirani tip paketa.',
    'ERROR_PACKAGE_TYPE' => 'Tip paketa definiran u Manifest datoteci nije prepoznat.',
    'ERROR_VERSION_INCOMPATIBLE' => 'Učitana datoteka nije kompatibilna sa ovom verzijom SuiteCRM-a:',

    'LBL_BACK' => 'Natrag',
    'LBL_CANCEL' => 'Odustani',
    'LBL_ACCEPT' => 'Prihvaćam',
    'LBL_CHECKSYS_CACHE' => 'Poddirektoriji predmemorije sa mogućnošću zapisa',
    'LBL_DROP_DB_CONFIRM' => 'Navedeni naziv baze podataka već postoji.<br>Možete ili:<br>1. Kliknite gumb Odustani i odaberite novo ime baze podataka, ili <br>2. Kliknite gumb Prihvati i nastavite. Sve postojeće tablice u bazi podataka bit će odbačene. <strong> To znači da će se sve tablice i prethodno postojeći podaci izbrisati.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponenta',
    'LBL_CHECKSYS_CONFIG' => 'Konfiguracijska datoteka SuiteCRM-a (config.php) sa mogućnošću zapisa',
    'LBL_CHECKSYS_CURL' => 'cURL modul',
    'LBL_CHECKSYS_CUSTOM' => 'Prilagođeni direktorij sa mogućnošću zapisa',
    'LBL_CHECKSYS_DATA' => 'Poddirektoriji podataka sa mogućnošću zapisa',
    'LBL_CHECKSYS_IMAP' => 'IMAP modul',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Modul',
    'LBL_CHECKSYS_MEM_OK' => 'Ok (Bez granica)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'Ok (neograničeno)',
    'LBL_CHECKSYS_MEM' => 'PHP ograničenje memorije',
    'LBL_CHECKSYS_MODULE' => 'Poddirektoriji i podatci modula sa mogućnošću zapisa',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Nije dostupno',
    'LBL_CHECKSYS_OK' => 'U redu',
    'LBL_CHECKSYS_PHP_INI' => 'Location of your PHP configuration file (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'U redu (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP verzija',
    'LBL_CHECKSYS_IISVER' => 'IIS verzija',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Ponovo provjeri',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'Suglasnost provjere sustava',
    'LBL_CHECKSYS_XML' => 'XML Analiza Sintakse',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Modul kompresije',
    'LBL_CHECKSYS_ZIP' => 'ZIP modul rukovanja',
    'LBL_CHECKSYS_PCRE' => 'PCRE knjižnica',
    'LBL_CHECKSYS_FIX_FILES' => 'Prije nastavka ispravite sljedeće datoteke ili direktorije:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Prije nastavka ispravite sljedeće datoteke i direktorije modula pod njima:',
    'LBL_CHECKSYS_UPLOAD' => 'Direktorij učitavanja sa mogućnošću zapisa',
    'LBL_CLOSE' => 'Zatvori',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'biti kreirano',
    'LBL_CONFIRM_DB_TYPE' => 'Tip Baze Podataka',
    'LBL_CONFIRM_NOT' => 'nije',
    'LBL_CONFIRM_TITLE' => 'Potvrdi postavke',
    'LBL_CONFIRM_WILL' => 'hoće',
    'LBL_DBCONF_DB_DROP' => 'Odbaci tablice',
    'LBL_DBCONF_DB_NAME' => 'Naziv baze podataka',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM lozinka korisnika baze podataka',
    'LBL_DBCONF_DB_PASSWORD2' => 'Ponovno unesite lozinku korisnika baze podataka',
    'LBL_DBCONF_DB_USER' => 'Korisničko ime SuiteCRM baze podataka',
    'LBL_DBCONF_SUITE_DB_USER' => 'Korisničko ime SuiteCRM baze podataka',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Administratorsko korisničko ime u bazi podataka',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Administratorska lozinka baze podataka',
    'LBL_DBCONF_COLLATION' => 'Kolacija',
    'LBL_DBCONF_CHARSET' => 'Skup znakova',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Napredna konfiguracija baze podataka',
    'LBL_DBCONF_DEMO_DATA' => 'Popuniti bazu podataka sa demo podacima?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Odaberite demo podatke',
    'LBL_DBCONF_HOST_NAME' => 'Ime domaćina',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instanca domaćina',
    'LBL_DBCONFIG_SECURITY' => 'Iz sigurnosnih razloga možete odrediti ekskluzivnog korisnika baze podataka koji će se povezati s SuiteCRM bazom podataka. Ovaj korisnik mora biti u mogućnosti pisati, ažurirati i dohvatiti podatke iz SuiteCRM baze podataka koja će biti stvorena za ovu instancu. Taj korisnik može biti gore naveden administrator baze podataka ili možete odrediti novog ili postojećeg korisnika baze podataka.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Pruži postojećeg korisnika',
    'LBL_DBCONFIG_CREATE_DD' => 'Definiraj korisnika za kreirati',
    'LBL_DBCONFIG_SAME_DD' => 'Isto kao i administratorski korisnik',
    'LBL_DBCONF_TITLE' => 'Konfiguracija baze podataka',
    'LBL_DBCONF_TITLE_NAME' => 'Pružite ime baze podataka',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Pružite informaciju korisnika baze podataka',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Lozinka',
    'LBL_DISABLED_DESCRIPTION_2' => 'After this change has been made, you may click the "Start" button below to begin your installation. <i>After the installation is complete, you will want to change the value for \'installer_locked\' to \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Instalacija je već jednom bila pokrenuta. Kao sigurnosna mjera, onemogućeno je pokretanje instalacije drugi put. Ako ste zaista sigurni želite li ponovno pokrenuti instalaciju, molim idite u vašu config.php datoteku i pronađite (ili dodajte) varijablu naziva \'installer_locked\' i postavite na \'false\'. Redak bi trebao izgledati ovako:',
    'LBL_DISABLED_HELP_1' => 'Za pomoć pri instalaciji, molim posjetite SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'support forums',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM instalacija je onemogućena',
    'LBL_HELP' => 'Pomoć',
    'LBL_INSTALL' => 'Instaliraj',
    'LBL_INSTALL_TYPE_TITLE' => 'Opcije instalacije',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Odaberite tip instalacije',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Tipična instalacija</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Prilagođena instalacija</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Zahtjeva minimalne informacije za instalaciju. Preporučeno novim korisnicima.',
    'LBL_INSTALL_TYPE_MSG3' => 'Pruža dodatne mogućnosti za postavljanje tijekom instalacije. Većina ovih opcija dostupna je i nakon instalacije na administrativnoj stranici. Preporučuje se naprednim korisnicima.',
    'LBL_LANG_1' => 'Da biste koristili jezik u SuiteCRM koji nije zadani jezik (US-English), možete učitati i instalirati jezični paket. Moći ćete učitati i instalirati jezične pakete i kasnije, unutar SuiteCRM aplikacije. Ako želite preskočiti ovaj korak, kliknite Dalje.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instaliraj',
    'LBL_LANG_BUTTON_REMOVE' => 'Ukloni',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Deinstaliraj',
    'LBL_LANG_BUTTON_UPLOAD' => 'Uvezi',
    'LBL_LANG_NO_PACKS' => 'nijedan',
    'LBL_LANG_PACK_INSTALLED' => 'Sljedeći jezični paketi su uspješno instalirani:',
    'LBL_LANG_PACK_READY' => 'Sljedeći jezični paket spreman je za instalaciju:',
    'LBL_LANG_SUCCESS' => 'Jezični paket je uspješno uvezen.',
    'LBL_LANG_TITLE' => 'Jezični paket',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Sada se instalira SuiteCRM. Ovo može potrajati nekoliko minuta.',
    'LBL_LANG_UPLOAD' => 'Uploadaj jezični paket',
    'LBL_LICENSE_ACCEPTANCE' => 'Prihvaćanje licence',
    'LBL_LICENSE_CHECKING' => 'Provjeravanje kompatibilnosti sustava,',
    'LBL_LICENSE_CHKENV_HEADER' => 'Provjera okoline',
    'LBL_LICENSE_CHKDB_HEADER' => 'Provjera DB Credentials.',
    'LBL_LICENSE_CHECK_PASSED' => 'Sustav je prošao provjeru kompatibilnosti.',
    'LBL_CREATE_CACHE' => 'Priprema za instalaciju...',
    'LBL_LICENSE_REDIRECT' => 'Preusmjeravanje u',
    'LBL_LICENSE_I_ACCEPT' => 'Prihvaćam',
    'LBL_LICENSE_PRINTABLE' => ' Pregled za ispis ',
    'LBL_PRINT_SUMM' => 'Rezime ispisa',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM licenca',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Livingstone',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Radnja',
    'LBL_ML_DESCRIPTION' => 'Opis',
    'LBL_ML_INSTALLED' => 'Datum instalacije',
    'LBL_ML_NAME' => 'Ime',
    'LBL_ML_PUBLISHED' => 'Datum objavljivanja',
    'LBL_ML_TYPE' => 'Tip',
    'LBL_ML_UNINSTALLABLE' => 'Ne može se deinstalirati',
    'LBL_ML_VERSION' => 'Verzija',
    'LBL_MSSQL' => 'SQL Server',
    'LBL_MSSQL2' => 'SQL Server (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server upravljački program za PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli ekstenzija)',
    'LBL_NEXT' => 'Sljedeće',
    'LBL_NO' => 'Ne',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Postavljanje lozinke administratora stranice',
    'LBL_PERFORM_CONFIG_PHP' => 'Kreiranje SuiteCRM konfiguracijske datoteke',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Kreiranje baze podataka</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>na</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Kreiranje korisničkog imena i lozinke baz podataka...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Kreiranje zadanih SuiteCRM podataka',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Kreiranje zadanih zakazanih poslova',
    'LBL_PERFORM_DEFAULT_USERS' => 'Kreiranje zadanih korisnika',
    'LBL_PERFORM_DEMO_DATA' => 'Popunjavanje tablica baze podataka s demo podacima (ovo može malo potrajati)',
    'LBL_PERFORM_DONE' => 'obavljeno<br>',
    'LBL_PERFORM_FINISH' => 'Završi',
    'LBL_PERFORM_OUTRO_1' => 'Podešavanje SuiteCRM',
    'LBL_PERFORM_OUTRO_2' => 'je sada dovršeno!',
    'LBL_PERFORM_OUTRO_3' => 'Ukupno vrijeme:',
    'LBL_PERFORM_OUTRO_4' => 'sekunda.',
    'LBL_PERFORM_OUTRO_5' => 'Približno količina korištene memorije:',
    'LBL_PERFORM_OUTRO_6' => 'bajtova.',
    'LBL_PERFORM_SUCCESS' => 'Uspjeh!',
    'LBL_PERFORM_TABLES' => 'Kreiranje SuiteCRM aplikacijskih tablica, revizijskih tablica, i meta podataka veza...',
    'LBL_PERFORM_TITLE' => 'Izvrši podešavanje',
    'LBL_PRINT' => 'Ispis',
    'LBL_REG_CONF_1' => 'Ispunite kratki obrazac u nastavku da biste od SuiteCRM-a dobivali najave o proizvodima, vijesti o treninzima, posebne ponude i pozivnice za događaje. Ne prodajemo, iznajmljujemo, dijelimo ili na drugi način ne distribuiramo ovdje prikupljene podatke trećim osobama.',
    'LBL_REG_CONF_3' => 'Hvala što ste se registrirali. Kliknite na gumb Završi da biste se prijavili na SuiteCRM. Kod prve prijave koristite korisničko ime "admin" i lozinku koju ste unijeli u koraku 2.',
    'LBL_REG_TITLE' => 'Registracija',

    'LBL_REQUIRED' => '* Potrebno polje',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM aplikacija admin ime',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Ponovo unesite SuiteCRM admin korisničku lozinku',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM Admin korisnička lozinka',
    'LBL_SITECFG_APP_ID' => 'ID aplikacije',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Ako odaberete ovu opciju, morate navesti ID aplikacije da biste zamijenilli automatski generirani ID. ID osigurava da sesije jedne instance SuiteCRM-a ne koriste druge instance. Ako imate skup instalacija SuiteCRM-a, sve one moraju dijeliti isti ID aplikacije.',
    'LBL_SITECFG_CUSTOM_ID' => 'Navedite vlastiti ID aplikacije',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Ako je odabrano, morate odrediti direktorij log dnevnika da biste poništili zadani direktorij za SuiteCRM logove. Bez obzira na to gdje se datoteka datoteke dnevnika nalazi, pristup njoj putem web preglednika bit će ograničen putem preusmjeravanja .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Koristi prilagođeni direktorij zapisnika',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Ako je odabrano, morate osigurati sigurnu mapu za spremanje podataka o sesiji SuiteCRM. To se može učiniti kako bi se spriječilo da podaci o sesiji budu ranjivi na zajedničkim poslužiteljima.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Upotrijebite prilagođeni direktorij sesija za SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b> Prije nastavka ispravite sljedeće pogreške: </b>',
    'LBL_SITECFG_LOG_DIR' => 'Direktorij zapisnika',
    'LBL_SITECFG_SESSION_PATH' => 'Put do direktorija sesija <br> (mora biti napisan)',
    'LBL_SITECFG_SITE_SECURITY' => 'Odaberi sigurnosne opcije',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Ako je odabrano, sustav će periodično provjeravati da li postoje ažurirane verzije aplikacije.',
    'LBL_SITECFG_SUITE_UP' => 'Automatski provjeri za ažuriranja?',
    'LBL_SITECFG_TITLE' => 'Konfiguracija stranice',
    'LBL_SITECFG_TITLE2' => 'Identificiraj administracijskog korisnika',
    'LBL_SITECFG_SECURITY_TITLE' => 'Sigurnost stranice',
    'LBL_SITECFG_URL' => 'URL SuiteCRM instance',
    'LBL_SITECFG_ANONSTATS' => 'Pošalji anonimnu statistiku korištenja?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Ako je odabrano, SuiteCRM će slati <b> anonimne </b> statistike o vašoj instalaciji na SuiteCRM Inc. svaki put kada vaš sustav provjeri postoje li nove verzije. Ove informacije će nam pomoći da bolje razumijemo kako se aplikacija koristi i voditi poboljšanja proizvoda.',
    'LBL_SITECFG_URL_MSG' => 'Unesite URL koji će se koristiti nakon pristupa instalaciji SuiteCRM. URL će se koristiti i kao baza za URL-ove na stranicama aplikacije SuiteCRM. URL treba sadržavati naziv web poslužitelja ili stroja ili IP adresu.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Unesite naziv svog sustava. Ovo će se ime prikazati u naslovnoj traci preglednika kada korisnici posjete aplikaciju SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'Nakon instalacije, za prijavu u instancu SuiteCRM morat ćete koristiti administracijskog korisnika SuiteCRM (zadano korisničko ime = admin). Unesite lozinku za ovog administratora. Ova se lozinka može promijeniti nakon početne prijave. Također možete unijeti drugo korisničko ime koje ćete koristiti osim zadane zadane vrijednosti.',
    'LBL_SITECFG_COLLATION_MSG' => 'Odaberite postavke usporedbe (sortiranja) za vaš sustav. Ove će postavke stvoriti tablice s određenim jezikom koji koristite. U slučaju da vaš jezik ne zahtijeva posebne postavke, upotrijebite zadanu vrijednost.',
    'LBL_SPRITE_SUPPORT' => 'Sprite support',
    'LBL_SYSTEM_CREDS' => 'Sustavne vjerodajnice',
    'LBL_SYSTEM_ENV' => 'Okruženje sustava',
    'LBL_SHOW_PASS' => 'Prikaži lozinke',
    'LBL_HIDE_PASS' => 'Sakrij lozinke',
    'LBL_HIDDEN' => '<i>(sakriveno)</i>',
    'LBL_STEP1' => 'Korak 1 od 2 - Zahtjevi pred instalaciju',
    'LBL_STEP2' => 'Korak 2 od 2 - Konfiguracija',
    'LBL_STEP' => 'Korak',
    'LBL_TITLE_WELCOME' => 'Dobrodošli u SuiteCRM',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Jeste li spremni za instalaciju?',
    'REQUIRED_SYS_COMP' => 'Potrebne komponente sustava',
    'REQUIRED_SYS_COMP_MSG' =>
        'Prije nego što započnete, budite sigurni da imate podržane verzije sljedećih komponenti sustava: <br>
                       <ul>
                       <li> Baza podataka / Sustav upravljanja bazama podataka (Primjeri: MariaDB, MySQL ili SQL Server) </li>
                       <li> Web poslužitelj (Apache, IIS) </li>
                       </ul>
                       Obratite se matrici kompatibilnosti u bilješkama o izdanju za
                       kompatibilne komponente sustava za verziju SuiteCRM koju instalirate. <br>',
    'REQUIRED_SYS_CHK' => 'Inicijalna provjera sustava',
    'REQUIRED_SYS_CHK_MSG' =>
        'Kada započnete postupak instalacije, izvršit će se provjera sustava na web poslužitelju na kojem se nalaze datoteke SuiteCRM kako bi se
provjerite je li sustav pravilno konfiguriran i ima li sve potrebne komponente
                       za uspješno dovršavanje instalacije. <br><br>
                       Sustav provjerava sve sljedeće: <br>
                      <ul>
                      <li><b>PHP verzija</b> &#8211; mora biti kompatibilna s aplikacijom</li>
                      <li><b>Sesijske varijable</b> &#8211; moraju raditi ispravno</li>
                      <li><b>MB Strings</b> &#8211; mora biti instaliran i omogućen u php.ini</li>
                      <li><b>Podrška za Bazu podataka</b> &#8211; mora postojati za MariaDB, MySQL or SQL Server</li>
                      <li><b>Config.php</b> &#8211; mora postojati i mora imati odgovarajuća dopuštenja da bi se u datoteku moglo pisati</li>
                      <li> Sljedeće datoteke SuiteCRM moraju imati dopuštenje za pisanje u direktoriju: <ul> <li> <b> / custom </li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Ako provjera ne uspije, nećete moći nastaviti s instalacijom.
                                  Prikazat će se poruka o pogrešci koja objašnjava zašto vaš sustav nije prošao provjeru..
                                  Nakon što izvršite bilo kakve potrebne promjene, možete ponovo proći provjeru sustava da biste nastavili instalaciju. <br>',


    'REQUIRED_INSTALLTYPE' => 'Tipična ili prilagođena instalacija',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'After the system check is performed, you can choose either
                      the Typical or the Custom installation.<br><br>
                      For both <b>Typical</b> and <b>Custom</b> installations, you will need to know the following:<br>
                      <ul>
                      <li> <b>Type of database</b> that will house the SuiteCRM data <ul><li>Compatible database
                      types: MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Name of the web server</b> or machine (host) on which the database is located
                      <ul><li>This may be <i>localhost</i> if the database is on your local computer or is on the same web server or machine as your SuiteCRM files.<br><br></li></ul></li>
                      <li><b>Name of the database</b> that you would like to use to house the SuiteCRM data</li>
                        <ul>
                          <li> You might already have an existing database that you would like to use. If
                          you provide the name of an existing database, the tables in the database will
                          be dropped during installation when the schema for the SuiteCRM database is defined.</li>
                          <li> If you do not already have a database, the name you provide will be used for
                          the new database that is created for the instance during installation.<br><br></li>
                        </ul>
                      <li><b>Database administrator user name and password</b> <ul><li>The database administrator should be able to create tables and users and write to the database.</li><li>You might need to
                      contact your database administrator for this information if the database is
                      not located on your local computer and/or if you are not the database administrator.<br><br></ul></li></li>
                      <li> <b>SuiteCRM database user name and password</b>
                      </li>
                        <ul>
                          <li> The user may be the database administrator, or you may provide the name of
                          another existing database user. </li>
                          <li> If you would like to create a new database user for this purpose, you will
                          be able to provide a new username and password during the installation process,
                          and the user will be created during installation. </li>
                        </ul></ul><p>

                      For the <b>Custom</b> setup, you might also need to know the following:<br>
                      <ul>
                      <li> <b>URL that will be used to access the SuiteCRM instance</b> after it is installed.
                      This URL should include the web server or machine name or IP address.<br><br></li>
                                  <li> [Optional] <b>Path to the session directory</b> if you wish to use a custom
                                  session directory for SuiteCRM information in order to prevent session data from
                                  being vulnerable on shared servers.<br><br></li>
                                  <li> [Optional] <b>Path to a custom log directory</b> if you wish to override the default directory for the SuiteCRM log.<br><br></li>
                                  <li> [Optional] <b>Application ID</b> if you wish to override the auto-generated
                                  ID that ensures that sessions of one SuiteCRM instance are not used by other instances.<br><br></li>
                                  <li><b>Character Set</b> most commonly used in your locale.<br><br></li></ul>
                                  For more detailed information, please consult the Installation Guide.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Please read the following important information before proceeding with the installation. The information will help you determine whether or not you are ready to install the application at this time.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Odaberite jezik</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Čarobnjak za postavljanje',
    'LBL_WIZARD_TITLE' => 'SuiteCRM čarobnjak za postavljanje:',
    'LBL_YES' => 'Yes',

    'LBL_PATCHES_TITLE' => 'Instaliraj najnovije zakrpe',
    'LBL_MODULE_TITLE' => 'Instaliraj jezične pakete',
    'LBL_PATCH_1' => 'Ukoliko želite preskočiti ovaj korak, kliknite Sljedeće.',
    'LBL_PATCH_TITLE' => 'Sistemska zakrpa',
    'LBL_PATCH_READY' => 'The following patch(es) are ready to be installed:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM relies upon PHP sessions to store important information while connected to this web server. Your PHP installation does not have the Session information correctly configured.
											<br><br>A common misconfiguration is that the <b>'session.save_path'</b> directive is not pointing to a valid directory. <br>
											<br> Please correct your <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> in the php.ini file located here below.",
    'LBL_SESSION_ERR_TITLE' => 'PHP Sessions Configuration Error',
    'LBL_SYSTEM_NAME' => 'Ime sustava',
    'LBL_COLLATION' => 'Collation Settings',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Provide a System Name for the SuiteCRM instance.',
    'LBL_PATCH_UPLOAD' => 'Odaberite datoteku zakrpe sa vašeg lokalong računala.',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php verzija 5 ili više je potrebna.',
    'LBL_MINIMUM_PHP_VERSION' => 'Minimalna zahtjevana Php verzija je 5.1.0. Preporučena Php verzija je 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Vaša trenutna php verzija je',
    'LBL_RECOMMENDED_PHP_VERSION' => 'Preporučena php verzija je 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php način unazadne kompatibilnosti je uključen. Podesite zend.ze1_compatibility_mode na Off kako bi nastavili dalje.',
    'LBL_STREAM' => 'PHP allows to use stream',

    'advanced_password_new_account_email' => array(
        'subject' => 'New account information',
        'type' => 'sustav',
        'description' => 'This template is used when the System Administrator sends a new password to a user.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Here is your account username and temporary password:</p><p>Username : $contact_user_user_name </p><p>Password : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>After you log in using the above password, you may be required to reset the password to one of your own choice.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
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
        'type' => 'sustav',
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
        'type' => 'sustav',
        'description' => "This template is used to send a user a code for Two Factor Authentication.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Two Factor Authentication code is <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Two Factor Authentication code is $code.',
        'name' => 'Two Factor Authentication email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Od" Ime:',
    'LBL_FROM_ADDR' => '"Od" adresa:',

    'LBL_WIZARD_SMTP_DESC' => 'Provide the email account that will be used to send emails, such as the assignment notifications and new user passwords. Users will receive emails from SuiteCRM, as sent from the specified email account.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Odaberi svog pružatelja E-mail usluga:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Ostalo',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP Detaljan Opis Servera',
    'LBL_MAIL_SMTPSERVER' => 'SMTP poslužitelj:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Koristi SMTP provjeru autentičnosti?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Omogući SMTP iznad SSL ili TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail E-mail Adresa:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail Lozinka:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Dopusti korisnicima da koriste ovaj račun za izlaznu poštu:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Kada je ova opcija uključena, svi korisnici će moći slati poštu koristeći isti račun za izlaznu poštu koji se koristi za slanje sistemskih upozorenja i obavijesti. Ako ova opcija nije uključena, korisnici će i dalje moći koristiti server izlazne pošte ali nakon što unesu podatke o svom korisničkom računu.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Lozinka:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange Lozinka:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange Korisničko Ime:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Port Servera:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server:',


    'LBL_MAIL_SMTPUSER' => 'SMTP Korisničko Ime:',
    'LBL_MAIL_SMTPPASS' => 'SMTP Lozinka:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Provide your organization\'s name and logo in order to brand your SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Naziv:',
    'SYSTEM_NAME_HELP' => 'Ovo je ime koje se prikazuje na naslovnoj traci Vašeg preglednika.',
    'NEW_LOGO' => 'Odaberi logo:',
    'NEW_LOGO_HELP' => 'The image file format can be either .png or .jpg. The maximum height is 170px, and the maximum width is 450px. Any image uploaded that is larger in any direction will be scaled to these max dimensions.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Uvezi',
    'CURRENT_LOGO' => 'Trenutni logo:',
    'CURRENT_LOGO_HELP' => 'This logo is displayed in the centre of the login screen of the SuiteCRM application.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Scenario Selection',
    'LBL_WIZARD_SCENARIO_DESC' => 'This is to allow tailoring of the displayed modules based on your requirements. Each of the modules can be enabled after install using the administration page.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'There are no scenarios currently set in the configuration file (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Lokalne postavke sustava',
    'LBL_WIZARD_LOCALE_DESC' => 'Specify how you would like data in SuiteCRM to be displayed, based on your geographical location. The settings you provide here will be the default settings. Users will be able set their own preferences.',
    'LBL_DATE_FORMAT' => 'Format datuma:',
    'LBL_TIME_FORMAT' => 'Format vremena:',
    'LBL_TIMEZONE' => 'Vremenska zona:',
    'LBL_LANGUAGE' => 'Jezik:',
    'LBL_CURRENCY' => 'Valuta:',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217 Currency Code:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separator 1000ica:',
    'LBL_DECIMAL_SEP' => 'Decimalni simbol:',
    'LBL_NAME_FORMAT' => 'Name Format:',
    'UPLOAD_LOGO' => 'Please wait, logo uploading...',
    'ERR_UPLOAD_FILETYPE' => 'File type not allowed, please upload a jpeg or png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Unknown file upload error occurred.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'The uploaded file was only partially uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'No file was uploaded.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Missing a temporary folder.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Neuspješno zapisivanje datoteke na disk.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'A PHP extension stopped the file upload. PHP does not provide a way to ascertain which extension caused the file upload to stop.',

    'LBL_INSTALL_PROCESS' => 'Instalacija...',

    'LBL_EMAIL_ADDRESS' => 'Adresa e-pošte:',
    'ERR_ADMIN_EMAIL' => 'Administrator Email Address is incorrect.',
    'ERR_SITE_URL' => 'Site URL is required.',

    'STAT_CONFIGURATION' => 'Configuration relationships...',
    'STAT_CREATE_DB' => 'Create database...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Create default settings...',
    'STAT_INSTALL_FINISH' => 'Install finish...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Installation process finished, <a href="%s">please log in...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Please accept license first',

    'LBL_MORE_OPTIONS_TITLE' => 'Više mogućnosti',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Greška baze podataka',
    'LBL_OLD_PHP' => 'Detektirana je stara PHP verzija!',
    'LBL_OLD_PHP_MSG' => 'The recommended PHP version to install SuiteCRM is %s <br />The minimum PHP version required is %s<br />You are using PHP version %s, which is EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Please consider upgrading your PHP version. ',
    'LBL_OLD_PHP_OK' => 'Svjestan sam rizika i želim nastaviti.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'korisnik',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Naziv baze podataka',
    'LBL_DBCONFIG_MSG3' => 'Name of the database that will contain the data for the SuiteCRM instance you are about to install.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Ime domaćina',
    'LBL_DBCONFIG_MSG2' => 'Name of web server or machine (host) on which the database is located (such as www.mydomain.com). If installing locally, it\'s better to use \'localhost\' than \'127.0.0.1\', for performance reasons.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'The username and password of a database administrator who can create database tables and users and who can write to the database is necessary in order to set up the SuiteCRM database.'
);
