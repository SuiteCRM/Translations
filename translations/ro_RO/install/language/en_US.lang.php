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
    'LBL_BASIC_SEARCH' => 'Filtru Rapid',
    'LBL_ADVANCED_SEARCH' => 'Filtru Avansat',
    'LBL_BASIC_TYPE' => 'Tip basic',
    'LBL_ADVANCED_TYPE' => 'Tip Avansat',
    'LBL_SYSOPTS_2' => 'Ce tip de baza de date va fi folosită pentru instanta SugarCRM pe care o veți instala?',
    'LBL_SYSOPTS_DB' => 'Specifică Tip Bază Date',
    'LBL_SYSOPTS_DB_TITLE' => 'Tip Bază de Date',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Vă rugăm să corectaţi următoarele erori înainte de a continua:',
    'ERR_DB_VERSION_FAILURE' => 'Nu pot verifica versiune bază de date.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Furnizaţi numele de utilizator pentru utilizatorul admin SuiteCRM.',
    'ERR_ADMIN_PASS_BLANK' => 'Furnizați o parola pentru administratorul SugarCRM. ',

    'ERR_CHECKSYS' => 'Au fost detectate erori în timpul verificării compatibilității. Pentru ca aplicația dumneavoastră SuiteCRM sa funcționeze corect, vă rugăm să faceți pașii corecți pentru a rezolva problemele enumerate mai jos și fie apăsați butonul de reverificare, fie încercați să instalați din nou.',
    'ERR_CHECKSYS_CALL_TIME' => 'Permite ca referința despre timpului apelului să fie activată (acest lucru ar trebui să fie setat la dezactivat în php.ini)',
    'ERR_CHECKSYS_CURL' => 'Nu a fost găsit: planificatorul SugarCRM va rula cu funcționalitate limitată.',
    'ERR_CHECKSYS_IMAP' => 'Negăsit(e): E-mailul de intrare necesită bibliotecile IMAP. Niciuna dintre ele nu va fi funcțională.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Setează asta la ',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M sau mai mare în fișierul dvs. php.ini)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Atenție: Nu Poate Fi Scris',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Versiunea dumneavoastră de PHP nu este compatibilă cu SuiteCRM. Va trebui să instalați o versiune compatibilă cu aplicația SuiteCRM. Vă rugăm să consultați Matricea de compatibilitate în notele de lansare pentru versiunile PHP acceptate. Versiunea dvs. este ',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Versiunea ta de IIS nu este suportata de SuiteCRM. Va trebui sa instalați o versiune compatibila cu aplicația SuiteCRM. Vă rugăm să consultați matricea de compatibilitate în notele de lansare pentru versiunile PHP acceptate. Versiunea ta este ',
    'ERR_CHECKSYS_FASTCGI' => 'Noi detectăm că nu utilizați o cartografiere FastCGI pentru PHP. Va trebui să instalați/configurați o versiune compatibilă cu aplicația SuiteCRM. Vă rugăm să consultați matricea de compatibilitate în notele de lansare pentru versiunile acceptate. Vă rugăm să consultați <a href="http://www.iis.net/php/" target="_blank">http://www.iis.net/php/</a> pentru detalii ',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Pentru o experiență optimă folosind IIS/FastCGI sapi, setați fastcgi.logging la 0 în fișierul dvs. php.ini.',
    'LBL_DB_UNAVAILABLE' => 'Bază de date indisponibilă',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Suportul pentru baze de date nu a fost găsit. Vă rugăm să vă asigurați că aveți driverele necesare pentru unul dintre următoarele tipuri de baze de date suportate: MySQL sau MS SQLServer. Este posibil să fie necesar să debifați extensia în fișierul php.ini sau să recompilați un fișierul binar corect, în funcție de versiunea dvs. de PHP. Vă rugăm să consultați manualul PHP pentru mai multe informații despre cum să activați suportul pentru baze de date.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'Funcțiile asociate cu librăriile de parsare XML care sunt necesare aplicației SuiteCRM nu au fost găsite. S-ar putea să fie nevoie să anulați extensia în fișierul php.ini sau să recompilați un fișier binar corect, în funcție de versiunea dumneavoastră de PHP. Vă rugăm să consultați manualul PHP pentru mai multe informații.',
    'ERR_CHECKSYS_MBSTRING' => 'Funcțiile asociate cu extensia PHP multi-byte Strings (mbstring) care sunt necesare aplicației SuiteCRM nu au fost găsite. <br/><br/>În general, modulul mbstring nu este activat implicit în PHP și trebuie activat cu --enable-mbstring atunci când este construit codul binar PHP. Vă rugăm să consultați manualul PHP pentru mai multe informații despre cum să activați suportul mbstring.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'Fisierul de configurare exista, dar nu poate fi scris. Va rugam luati masurile necesare pentru ca directorul sa poata fi scris.In functie de sistemul dumneavoastra de operare, s-ar pute asa fie nevoie sa modificati accesul ruland chmod 766, sau sa faceti click dreapta pe numele fisierului, pentru a accesa proprietatile si sa debifati optiunea de read only.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'Fişier  de configurare există, dar nu este inscriptibil. Vă rugăm să luati măsurile necesare pentru a face fişierul inscriptibil. În funcţie de sistemul dvs. de operare, acest lucru ar putea să vă solicite să modificaţi permisiunile de funcţionare chmod 766, sau să faceţi clic dreapta pe numele fişierului pentru a accesa proprietăţile şi debifaţi citi singura opţiune.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Directorul Personalizat exista, dar nu poate fi scris. S-ar putea sa fie nevoie sa modificati accesul ruland chmod 766, sau sa faceti click dreapta pe numele fisierului, pentru a accesa proprietatile si sa debifati optiunea de read only. Va rugam luati masurile necesare pentru ca directorul sa poata fi scris.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Fisierele sau directoarele listate mai jos nu pot fi scrise sau lipsesc si nu pot fi create. In functie de sistemul dumneavoastra de operare, s-ar putea sa fie nevoie sa modificati accesul la fisiere sau directorul parinte ruland chmod 766, sau sa faceti click dreapta pe directorul parinte si sa debifati optiunea de read only.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "Funcțiile asociate cu Librăriile de parsare JSON care sunt necesare aplicației SuiteCRM nu au fost găsite. S-ar putea să fie nevoie să anulați extensia în php.ini sau să recompilați fișierul binar corect, în funcție de versiunea dumneavoastră de PHP. Vă rugăm să consultați manualul PHP pentru mai multe informații.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Suprascrie Config',
    'ERR_CHECKSYS_SAFE_MODE' => 'Modul Sigur este pornit (s-ar putea să doriți să-l dezactivați în php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Suportul ZLib nu a fost găsit: SugarCRM culege beneficii enorme de performanță cu compresia zlib.',
    'ERR_CHECKSYS_ZIP' => 'Suportul ZIP nu a fost găsit: SugarCRM are nevoie de suport ZIP pentru a procesa fișierele comprimate.',
    'ERR_CHECKSYS_PCRE' => 'Biblioteca PCRE nu a fost găsită: SuiteCRM are nevoie de biblioteca PCRE pentru a procesa stilul Perl al configurării tiparelor de expresie.',
    'ERR_CHECKSYS_PCRE_VER' => 'Versiunea bibliotecii PCRE: SuiteCRM are nevoie de librăria PCRE 7.0 sau mai mare pentru a procesa stilul Perl pentru potrivirea tiparelor de expresie.',
    'ERR_DB_ADMIN' => 'Numele de utilizator şi/sau parola pentru administratorul bazei de date sunt incorecte, iar conexiunea la baza de date nu a putut fi stabilită. Te rog introdu un nume de utilizator și o parola valide. (Eroare: ',
    'ERR_DB_ADMIN_MSSQL' => 'Numele de utilizator și/sau parola pentru administratorul bazei de date sunt incorecte, și o conexiune cu baza de date nu a putut fi făcută. Vă rugam introduceți un nume de utilizator și o parola validă.',
    'ERR_DB_EXISTS_NOT' => 'Baza de date specificata nu exista.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Baza de date există deja cu datele de configurare. Pentru a rula o instalare cu baza de date aleasa, va rugam reexecutați instalarea și alegeți: "Ștergeți și recreati tabelele existente pentru SuiteCRM?". Pentru a upgrada, folosiți asistentul de actualizare din consola de Admin. Vă rugăm să citiți documentația pentru actualizare localizată <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">aici</a>.',
    'ERR_DB_EXISTS' => 'Numele furnizat al bazei de date deja există - nu se poate crea o alta bază de date cu același nume.',
    'ERR_DB_EXISTS_PROCEED' => 'Numele bazei de date furnizate exista deja. Puteti<br>1. Apasă butonul înapoi și alegeți un nou nume pentru baza de date <br>2. Apasă pe Continuare și toate tabelele existente în această bază de date vor fi șterse. <strong>Asta înseamnă că tabelele și datele tale vor fi pierdute definitiv.</strong>',
    'ERR_DB_HOSTNAME' => 'Numele de gazdă nu poate fi gol.',
    'ERR_DB_INVALID' => 'Tip bază de date selectată invalid.',
    'ERR_DB_LOGIN_FAILURE' => 'Gazda bazei de date furnizată, numele de utilizator şi/sau parola sunt incorecte, iar conexiunea la baza de date nu a putut fi stabilită. Te rog introdu o gazdă validă numele de utilizator și parola',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'Gazda bazei de date furnizată, numele de utilizator şi/sau parola sunt incorecte, iar conexiunea la baza de date nu a putut fi stabilită. Te rog introdu o gazdă validă numele de utilizator și parola',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'Gazda bazei de date furnizată, numele de utilizator şi/sau parola sunt incorecte, iar conexiunea la baza de date nu a putut fi stabilită. Te rog introdu o gazdă validă numele de utilizator și parola',
    'ERR_DB_MYSQL_VERSION' => 'Versiunea ta MySQL (%s) nu este suportă de SuiteCRM. Vei avea nevoie să instalezi o versiune care este compatibilă cu SuiteCRM. Vă rugăm să consultați Matrice de Compatibilitate în notele de lansare pentru versiunile de MySQL suportate.',
    'ERR_DB_NAME' => 'Nume bază de date nu poate fi gol.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Numele bazei de date nu poate conține un '\\', '/', sau '.'",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Numele bazei de date nu poate începe cu un număr, '#' sau '@' și nu poate conține un spațiu sau caracterele '\"', \"'\", '*', '/', '\\', '?', ':', '<', '>', '&', '!', or '-'",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Numele bazei de date poate consta doar din caractere alfanumerice și simboluri '#', '_' sau '$'",
    'ERR_DB_PASSWORD' => 'Parolele furnizate administratorului bazei de date pentru SugarCRM nu se potrivesc. Vă rugăm să reintroduceți aceleași parole în câmpurile pentru parole.',
    'ERR_DB_PRIV_USER' => 'Furnizează un nume de utilizator al administratorului bazei de date. Utilizatorul este necesar pentru conectarea inițială la baza de date.',
    'ERR_DB_USER_EXISTS' => 'Numele de utilizator pentru baza de date SugarCRM exista deja -- nu se poate crea altul cu același nume. Vă rugăm introduceți un nume de utilizator nou.',
    'ERR_DB_USER' => 'Introduceți un nume de utilizator pentru administratorul bazei de date SugarCRM.',
    'ERR_DBCONF_VALIDATION' => 'Vă rugăm să corectaţi următoarele erori înainte de a continua:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'Parolele furnizate pentru baza de date SuiteCRM nu corespund. Vă rugăm să introduceți aceleași parole in câmpurile de parola.',
    'ERR_ERROR_GENERAL' => 'Au fost întâlnite următoarele erori:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nu se poate șterge fișier:',
    'ERR_LANG_MISSING_FILE' => 'Nu se poate găsi fișier: ',
    'ERR_LANG_NO_LANG_FILE' => 'Nu s-a găsit nici un fișier de pachet lingvistic în directorul include/language: ',
    'ERR_LANG_UPLOAD_1' => 'A apărut o problema cu încărcarea ta. Te rugăm să încerci din nou.',
    'ERR_LANG_UPLOAD_2' => 'Pachetele de Limbă trebuie să fie arhive ZIP.',
    'ERR_LANG_UPLOAD_3' => 'PHP nu a putut muta fișierul temporar in directorul de actualizare.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'Directorul log furnizat nu este un director valid.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'Directorul log furnizat nu este un director in care se poate scrie.',
    'ERR_NO_DIRECT_SCRIPT' => 'Nu se poate procesa scriptul direct.',
    'ERR_NO_SINGLE_QUOTE' => 'Nu se pot folosi ghilimele simple pentru ',
    'ERR_PASSWORD_MISMATCH' => 'Parolele furnizate pentru utilizatorul admin SuiteCRM nu se potrivesc. Te rugăm să reintroduci aceleași parole în câmpurile pentru parole.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'Nu se poate scrie in fisierul <span class=stop>config.php</span>.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Puteți continua această instalare creând manual fișierul config.php și adăugând informațiile de configurare de mai jos în fișierul config.php creat. Dar, <strong>trebuie</strong> să creați fișierul config.php înainte de a trece la următorul pas.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Vă amintiți să creați fișierul config.php?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Atenție: Nu se poate scrie în fișierul config.php. Te rog să te asiguri că există.',
    'ERR_PERFORM_HTACCESS_1' => 'Nu se poate scrie la ',
    'ERR_PERFORM_HTACCESS_2' => ' fișier.',
    'ERR_PERFORM_HTACCESS_3' => 'Daca dorești să securizezi fișierul jurnal să nu fie accesibil prin browsere, creează un fișier .htaccess în folderul log cu linia:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nu am putut detecta o conexiune la internet.</b> Când ai o conexiune, te rugăm să vizitezi <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> pentru a te înregistra la SuiteCRM. Spune-ne câte ceva despre modul în care compania dumneavoastră intenționează să utilizeze SuiteCRM, ca noi să ne putem asigura că întotdeauna oferim aplicația potrivită pentru nevoile dvs. de afaceri.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'Directorul sesiunii furnizat nu este un director valid.',
    'ERR_SESSION_DIRECTORY' => 'Directorul sesiunii furnizat nu este un director în care se poate scrie.',
    'ERR_SESSION_PATH' => 'Calea sesiunii este necesară dacă doriți să specificați una proprie.',
    'ERR_SI_NO_CONFIG' => 'Nu ați inclus config_si.php în rădăcina documentului sau nu ați definit $sugar_config_si în config.php',
    'ERR_SITE_GUID' => 'ID-ul aplicației este necesar dacă doriți să specificați unul personal.',
    'ERROR_SPRITE_SUPPORT' => "În prezent, nu suntem în măsură să localizam biblioteca HG, ca urmare nu sunteți capabil să utilizați funcționalitatea Sprite CSS.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Atentie: Configuratia dumneavoastra Php ar trebui schimbata pentru a permite fisierelor de cel putin 6 MB sa fie uploadate',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Dimensiunea fișierului de încărcat',
    'ERR_URL_BLANK' => 'Furnizați URL-ul de bază pentru instanța SuiteCRM.',
    'ERR_UW_NO_UPDATE_RECORD' => 'Nu s-a putut localiza înregistrarea de instalare a',
    'ERROR_MANIFEST_TYPE' => 'Fișierul manifest trebuie să specifice tipul pachetului.',
    'ERROR_PACKAGE_TYPE' => 'Fișierul manifest specifică un tip de pachet nerecunoscut',
    'ERROR_VERSION_INCOMPATIBLE' => 'Fișierul încărcat nu este compatibil cu aceasta versiune de SuiteCRM: ',

    'LBL_BACK' => 'Înapoi',
    'LBL_CANCEL' => 'Anulați',
    'LBL_ACCEPT' => 'Accept',
    'LBL_CHECKSYS_CACHE' => 'Directoare de cache in care se poate scrie',
    'LBL_DROP_DB_CONFIRM' => 'Numele bazei de date furnizate există deja.<br>Puteți să:<br>1. Faceți clic pe butonul Anulare și alegeți un nou nume pentru baza de date, sau <br>2. Faceți clic pe butonul Accept și continuați. Toate tabelele existente din baza de date vor fi eliminate. <strong>Aceasta înseamnă că toate tabelele și datele preexistente vor fi pierdute definitiv.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Componentă',
    'LBL_CHECKSYS_CONFIG' => 'Fisierul de configurare Rescriptibil SuiteCRM (config.php)',
    'LBL_CHECKSYS_CURL' => 'Modul cURL',
    'LBL_CHECKSYS_CUSTOM' => 'Director Personalizat Inscriptibil',
    'LBL_CHECKSYS_DATA' => 'Directoare in care se pot scrie date',
    'LBL_CHECKSYS_IMAP' => 'Modul IMAP',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB strings Module',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Fără Limită)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Nelimitat)',
    'LBL_CHECKSYS_MEM' => 'PHP Limita memorie',
    'LBL_CHECKSYS_MODULE' => 'Module în care se poate scrie, subdirectoare și fișiere',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Nu este disponibil',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'Locatia fisierului de configurare PHP (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK(versiune ',
    'LBL_CHECKSYS_PHPVER' => 'Versiunea PHP',
    'LBL_CHECKSYS_IISVER' => 'Versiunea IIS',
    'LBL_CHECKSYS_JSON' => 'Analiza și prelucrarea JSON',
    'LBL_CHECKSYS_RECHECK' => 'Re-verificați',
    'LBL_CHECKSYS_STATUS' => 'Status',
    'LBL_CHECKSYS_TITLE' => 'Acceptare verificare sistem',
    'LBL_CHECKSYS_XML' => 'Parsing de XML',
    'LBL_CHECKSYS_ZLIB' => 'Modul de compresie ZLIB',
    'LBL_CHECKSYS_ZIP' => 'Modul de manipulare ZIP',
    'LBL_CHECKSYS_PCRE' => 'Biblioteca PCRE',
    'LBL_CHECKSYS_FIX_FILES' => 'Va rugam rezolvați fișierele si directoarele următoare înainte a continua:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Va rugam reparați directoarele pentru următoarele module si fișierele din ele înainte a începe:',
    'LBL_CHECKSYS_UPLOAD' => 'Încarcați scriere Director',
    'LBL_CLOSE' => 'Închide',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'a fi creat',
    'LBL_CONFIRM_DB_TYPE' => 'Tip Bază de Date',
    'LBL_CONFIRM_NOT' => 'nu',
    'LBL_CONFIRM_TITLE' => 'Confirmă setările',
    'LBL_CONFIRM_WILL' => 'va fi',
    'LBL_DBCONF_DB_DROP' => 'Șterge tabele',
    'LBL_DBCONF_DB_NAME' => 'Nume baza de date',
    'LBL_DBCONF_DB_PASSWORD' => 'Parola utilizatorului bazei de date SuiteCRM',
    'LBL_DBCONF_DB_PASSWORD2' => 'Reintroduceți parola pentru baza de date SuiteCRM',
    'LBL_DBCONF_DB_USER' => 'Utilizator baza de date SuiteCRM',
    'LBL_DBCONF_SUITE_DB_USER' => 'Utilizator baza de date SuiteCRM',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Utilizator Administrator Baza de Date',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Parola Administrator Baza de Date',
    'LBL_DBCONF_COLLATION' => 'Colaționare',
    'LBL_DBCONF_CHARSET' => 'Set de Caractere',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Configurație Avansată Bază Date',
    'LBL_DBCONF_DEMO_DATA' => 'Populează baza de date cu date Demo?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Alege Date Demo',
    'LBL_DBCONF_HOST_NAME' => 'Nume gazda',
    'LBL_DBCONF_HOST_INSTANCE' => 'Instanta Gazda',
    'LBL_DBCONFIG_SECURITY' => 'Din motive de securitate, poți specifica un utilizator exclusiv al bazei de date pentru a te conecta la SugarCRM. Acest utilizator trebuie să poată scrie, actualiza și prelua date din baza de date SuiteCRM care va fi creată pentru acest exemplu. Acest utilizator poate fi administratorul bazei de date specificat mai sus, sau puteți furniza informații noi sau existente despre utilizator.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Furnizează un utilizator existent',
    'LBL_DBCONFIG_CREATE_DD' => 'Definiți utilizatorul pentru a crea',
    'LBL_DBCONFIG_SAME_DD' => 'La fel ca userul de admin',
    'LBL_DBCONF_TITLE' => 'Configurare baza de date',
    'LBL_DBCONF_TITLE_NAME' => 'Furnizează numele bazei de date',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Furnizează informații despre utilizatorul bazei de date',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Parolă',
    'LBL_DISABLED_DESCRIPTION_2' => 'După ce aceasta schimbare a fost făcuta, poți da clic pe butonul "Start" de mai jos pentru a începe instalarea. <i>După finalizarea instalării, veți dori să schimbați valoarea pentru \'installer_locked\' în \'true\'.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'Instalatorul a fost rulat deja. Ca măsură de siguranță, a fost dezactivat să ruleze a doua oară. Dacă ești absolut sigur că vrei să rulezi din nou, te rugăm să mergi la fișierul config.php și localizați (sau adăugați) o variabilă numită \'installer_locked\' și setați-o la \'false\'. Linia ar trebui să arate în felul următor:',
    'LBL_DISABLED_HELP_1' => 'Pentru ajutor la instalare, vă rugăm să vizitați SuiteCRM',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'forum de suport',
    'LBL_DISABLED_TITLE_2' => 'Instalarea SuiteCRM a fost dezactivată',
    'LBL_HELP' => 'Ajutor',
    'LBL_INSTALL' => 'Instalează',
    'LBL_INSTALL_TYPE_TITLE' => 'Opțiuni de instalare',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Alege tipul de instalare',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Instalare Tipica</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Instalare Personalizată</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Necesită informații minime pentru instalare. Recomandat pentru utilizatorii noi.',
    'LBL_INSTALL_TYPE_MSG3' => 'Oferă opțiuni suplimentare de setat în timpul instalării. Majoritatea acestor opțiuni sunt disponibile și după instalare în ecranele de administrare. Recomandat pentru utilizatorii avansați.',
    'LBL_LANG_1' => 'Pentru a folosi o limbă în SuiteCRM alta decât limba implicita (US-English), puteți descărca și instala pachetul de limbi chiar în acest moment. Veți putea încărca și instala pachete de limbi din aplicația SuiteCRM. Dacă doriți să săriți peste acest pas, apăsați „Înainte”.',
    'LBL_LANG_BUTTON_COMMIT' => 'Instalează',
    'LBL_LANG_BUTTON_REMOVE' => 'Înlăturați',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Dezinstalează',
    'LBL_LANG_BUTTON_UPLOAD' => 'Încarcă',
    'LBL_LANG_NO_PACKS' => 'nimic',
    'LBL_LANG_PACK_INSTALLED' => 'Următoarele pachete de limbi au fost instalate: ',
    'LBL_LANG_PACK_READY' => 'Următoarele pachete de limbă sunt gata pentru a fi instalate: ',
    'LBL_LANG_SUCCESS' => 'Pachetul de limbă a fost încărcat cu succes.',
    'LBL_LANG_TITLE' => 'Pachet limbă',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'Instalarea SuiteCRM acum. Aceasta poate dura câteva minute.',
    'LBL_LANG_UPLOAD' => 'Încarcă un pachet de limbă',
    'LBL_LICENSE_ACCEPTANCE' => 'Licență acceptată',
    'LBL_LICENSE_CHECKING' => 'Se verifică sistemul de compatibilitate.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Verifica Mediu',
    'LBL_LICENSE_CHKDB_HEADER' => 'Verifica detaliile DB.',
    'LBL_LICENSE_CHECK_PASSED' => 'Sistemul a trecut de verificarea compatibilității.',
    'LBL_CREATE_CACHE' => 'Pregătire instalare...',
    'LBL_LICENSE_REDIRECT' => 'Redirecționare în ',
    'LBL_LICENSE_I_ACCEPT' => 'Accept',
    'LBL_LICENSE_PRINTABLE' => ' Vizualizare pentru tipărire ',
    'LBL_PRINT_SUMM' => 'Imprimă rezumatul',
    'LBL_LICENSE_TITLE_2' => 'Licența SuiteCRM',

    'LBL_LOCALE_NAME_FIRST' => 'David',
    'LBL_LOCALE_NAME_LAST' => 'Popescu',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Acţiune',
    'LBL_ML_DESCRIPTION' => 'Descriere',
    'LBL_ML_INSTALLED' => 'Data de instalare',
    'LBL_ML_NAME' => 'Nume',
    'LBL_ML_PUBLISHED' => 'Data publicării',
    'LBL_ML_TYPE' => 'Tip',
    'LBL_ML_UNINSTALLABLE' => 'Poate fi dezinstalat',
    'LBL_ML_VERSION' => 'Versiune',
    'LBL_MSSQL' => 'Server SQL',
    'LBL_MSSQL2' => 'Server SQL (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'Server SQL (Driver Server Microsoft SQL pentru PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (extensie mysqli)',
    'LBL_NEXT' => 'Următor',
    'LBL_NO' => 'Nu',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'Setarea parolei de administrator',
    'LBL_PERFORM_CONFIG_PHP' => 'Creează fișierul de configurare SuiteCRM',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Se crează bază de date</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>in</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Creează utilizatorul și parola bazei de date...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'Creează date SuiteCRM implicite',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Crearea joburilor implicite de planificare',
    'LBL_PERFORM_DEFAULT_USERS' => 'Creează utilizatori impliciți',
    'LBL_PERFORM_DEMO_DATA' => 'Popularea tabelelor bazei de date cu date demo (acest lucru ar putea dura puțin timp)',
    'LBL_PERFORM_DONE' => 'terminat<br>',
    'LBL_PERFORM_FINISH' => 'Sfârșit',
    'LBL_PERFORM_OUTRO_1' => 'Configurarea SuiteCRM ',
    'LBL_PERFORM_OUTRO_2' => ' este acum complet!',
    'LBL_PERFORM_OUTRO_3' => 'Durată Totală: ',
    'LBL_PERFORM_OUTRO_4' => ' secunde.',
    'LBL_PERFORM_OUTRO_5' => 'Memorie aproximativă utilizată: ',
    'LBL_PERFORM_OUTRO_6' => ' biți.',
    'LBL_PERFORM_SUCCESS' => 'Succes!',
    'LBL_PERFORM_TABLES' => 'Creează tabelele aplicației SuiteCRM, tabelele de audit și metadatele relației',
    'LBL_PERFORM_TITLE' => 'Efectuați configurarea',
    'LBL_PRINT' => 'Tipăriți',
    'LBL_REG_CONF_1' => 'Vă rugăm să completați formularul de mai jos pentru a primi anunțuri despre produs, știri despre antrenament, oferte speciale și invitații pentru evenimente speciale din partea SuiteCRM. Nu vindem, închiriem, împărtășim sau distribuim în alt mod informațiile colectate aici către terțe părți.',
    'LBL_REG_CONF_3' => 'Vă mulțumim pentru înregistrare. Faceți clic pe butonul Finalizare pentru a vă conecta la SuiteCRM. Va trebui să vă autentificați pentru prima dată folosind numele de utilizator "admin" și parola pe care ați introdus-o la pasul 2.',
    'LBL_REG_TITLE' => 'Înregistrare',

    'LBL_REQUIRED' => 'Necesar',

    'LBL_SITECFG_ADMIN_Name' => 'Numele administratorului aplicației SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Reintroduceți parola de admin SuiteCRM',
    'LBL_SITECFG_ADMIN_PASS' => 'Parola de administrare SuiteCRM',
    'LBL_SITECFG_APP_ID' => 'ID aplicație',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Dacă este selectat, trebuie să furnizați un ID al aplicației pentru a suprascrie ID-ul auto-generat. ID-ul asigură ca sesiunile unei instanțe SuiteCRM nu sunt folosite de alte instanțe. Daca aveți un grup de instalări SugarCRM, toate trebuie sa împărtășească același ID de aplicație.',
    'LBL_SITECFG_CUSTOM_ID' => 'Furnizați propriul ID aplicației',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Daca este selectat, trebuie sa specificați un director pentru a suprascrie directorul implicit pentru jurnalul SugarCRM. Indiferent unde este localizat fișierul jurnal, accesul la acesta printr-un browser web va fi restricționat printr-un redirecționare din fișierul .htaccess.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Folosește un director personalizat pentru loguri',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'Dacă este selectat, trebuie sa indicați un director securizat pentru a stoca informațiile din sesiunile SuiteCRM. Acest lucru trebuie să fie făcut pentru a preveni venerabilitățile dintr-un mediu comun.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Utilizați un director personalizat de sesiuni pentru SuiteCRM',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Vă rugăm să corectați următoarele erori înainte de a continua:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Directorul de loguri',
    'LBL_SITECFG_SESSION_PATH' => 'Calea către directorul de sesiuni<br>(trebuie să fiți inscriptibil)',
    'LBL_SITECFG_SITE_SECURITY' => 'Selectați opțiunile de securitate',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Dacă este selectat, sistemul va verifica periodic versiunile de actualizare ale aplicației.',
    'LBL_SITECFG_SUITE_UP' => 'Verifică automat pentru actualizări?',
    'LBL_SITECFG_TITLE' => 'Configurarea Site-ului',
    'LBL_SITECFG_TITLE2' => 'Identificarea Utilizatorului Administrator',
    'LBL_SITECFG_SECURITY_TITLE' => 'Securitatea Site-ului',
    'LBL_SITECFG_URL' => 'URL-ul instanței SuiteCRM',
    'LBL_SITECFG_ANONSTATS' => 'Trimite statistici anonime de utilizare?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => 'Daca este selectat SuiteCRM va trimite statisitici <b>anonime</b> despre instanta dumneavoastra catre SuiteCRM Inc. de fiecare data cand sistemul verifica existanta a unei noi versiuni. Informatia ne va ajuta sa intelegem mai bine cum se foloseste aplicatia si va ajuta la imbunatatirea produsului.',
    'LBL_SITECFG_URL_MSG' => 'Introduceți URL-ul care va fi folosit pentru a accesa instanța SugarCRM după instalare. URL-ul va fi de asemenea folosit ca bază pentru URL-urile din paginile aplicației SugarCRM. URL-ul ar trebui să includă serverul web sau numele mașinii sau adresa IP.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Introduceți un nume pentru sistemul dvs. Acest nume va fi afișat în bara de titlu a browser-ului atunci când utilizatorii vizitează aplicația SuiteCRM.',
    'LBL_SITECFG_PASSWORD_MSG' => 'După instalare, va trebui să folosiți utilizatorul admin SugarCRM (nume de utilizator implicit = admin) pentru a va autentifica la SugarCRM. Introduceți o parolă pentru acest utilizator administrator. Această parolă poate fi schimbată după autentificarea inițială. De asemenea, puteți introduce un alt nume de utilizator admin pentru a utiliza în afară de valoarea implicită furnizată.',
    'LBL_SITECFG_COLLATION_MSG' => 'Selectați setările de colaționare (sortare) pentru sistemul dvs. Aceste setări vor crea tabele cu limbajul specific pe care îl folosiți. În cazul în care limba dvs. nu necesită setări speciale, vă rugăm să folosiți valoarea implicită.',
    'LBL_SPRITE_SUPPORT' => 'Suport Sprite',
    'LBL_SYSTEM_CREDS' => 'Sistemul de Mediu',
    'LBL_SYSTEM_ENV' => 'Mediu Sistem',
    'LBL_SHOW_PASS' => 'Arata parole',
    'LBL_HIDE_PASS' => 'Parole ascunse',
    'LBL_HIDDEN' => '<i>Ascuns</i>',
    'LBL_STEP1' => 'Etapa 1 din 2 – Cerințe pre-instalare',
    'LBL_STEP2' => 'Pasul 2 din 2 - Configurare',
    'LBL_STEP' => 'Pas',
    'LBL_TITLE_WELCOME' => 'Bine ați venit la SugarCRM ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Sunteți gata să instalați?',
    'REQUIRED_SYS_COMP' => 'Componente de sistem necesare',
    'REQUIRED_SYS_COMP_MSG' =>
        'Înainte să începeți, vă rugăm verificați că aveți versiunile suportate pentru următoarele componente:<br>
                      <ul>
                      <li> Sistem de management al bazelor de date/bază de date (exemple: MariaDB, MySQL sau SQL Server)</li>
                      <li> Web Server (Apache, IIS)</li>
                      </ul>
                      Consultați matricea de compatibilitate din notele de lansare pentru
                      componentele de sistem compatibile pentru versiunea SuiteCRM pe care o instalați.<br>',
    'REQUIRED_SYS_CHK' => 'Sistem de control initial',
    'REQUIRED_SYS_CHK_MSG' =>
        'Când începeți procesul de instalare, va fi efectuată o verificare a sistemului pe serverul web pe care sunt amplasate fișierele SuiteCRM, pentru a 
                      se asigura că sistemul este configurat corect și are toate componentele necesare pentru finalizarea cu succes a instalării.<br><br>
                      Sistemul verifică următoarele:<br>
                      <ul>
                      <li><b>Versiunea PHP</b> &#8211;– trebuie să fie compatibilă cu aplicația</li>
                      <li><b>Variabilele de sesiune</b> &#8211; – trebuie să funcționeze corect</li>
                      <li><b>MB Strings</b> &#8211; – trebuie să fie instalat și activat în php.ini</li>
                      <li><b>Suportul bazei de date</b> &#8211; – trebuie să existe pentru MariaDB, MySQL sau SQL Server</li>
                      <li><b>Config.php</b> &#8211; – trebuie să existe și să aibă permisiunile adecvate pentru a fi inscriptibil</li>
                      <li>Următoarele fișiere SuiteCRM trebuie să fie inscriptibile: <ul><li><b>/custom</li>
                      <li>/cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>
                                  Dacă verificarea eșuează, nu veți putea continua cu instalarea. 
                                  Va fi afișat un mesaj de eroare, explicând motivul pentru care sistemul dvs. nu a trecut verificarea. 
                                  După ce faceți modificările necesare, puteți relua verificarea sistemului pentru a continua instalarea.<br>',


    'REQUIRED_INSTALLTYPE' => 'Instalare tipica sau particularizata',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'După efectuarea verificării de sistem, puteți alege fie instalarea
                      tipică, fie cea personalizată.<br><br>
                      Atât pentru instalarea <b>tipică</b> și <b>personalizată</b>, va trebui să cunoașteți următoarele:<br>
                      <ul>
                      <li> <b>Tipul de bază de date</b> care va găzdui datele SuiteCRM <ul>
					  <li>Tipuri de baze de date compatibile: MariaDB, MySQL sau SQL Server.<br><br></li></ul></li>
                      <li> <b>Numele serverului web</b> sau al mașinii (host) pe care este localizată baza de date
                      <ul><li>Acest lucru poate fi <i>locală</i> dacă baza de date se află pe computerul tău sau pe același server web sau mașină cu fișierele SuiteCRM.<br><br></li></ul></li>
                      <li><b>Numele bazei de date</b> pe care doriți să o utilizați pentru a găzdui datele SuiteCRM</li>
                        <ul>
                          <li>Este posibil să aveți deja o bază de date existentă pe care doriți să o utilizați. Dacă furnizați numele unei baze de date existente, tabelele din baza de date vor fi șterse în timpul instalării așa cum este definită schema pentru baza de date SuiteCRM.</li>
                          <li>Dacă nu aveți deja o bază de date, numele pe care îl furnizați va fi utilizat pentru noua bază de date care va fi creată pentru instanță în timpul instalării.<br><br></li>
                        </ul>
                      <li><b>Numele de utilizator și parola administratorului bazei de date</b> <ul><li>Administratorul bazei de date ar trebui să poată crea tabele și utilizatori și să scrie în baza de date.</li><li>Este posibil să fie necesar să contactați administratorul bazei de date pentru aceste informații dacă baza de date nu este localizată pe computerul local și/sau dacă nu sunteți administratorul bazei de date.<br><br></ul></li></li>
                      <li> <b>Numele de utilizator și parola bazei de date SuiteCRM.</b>
                      </li>
                        <ul>
                          <li> Utilizatorul poate fi administratorul bazei de date sau puteți furniza numele 
                          unui alt utilizator existent al bazei de date. </li>
                          <li> Dacă doriți să creați un nou utilizator de bază de date în acest scop, veți putea furniza un nou nume de utilizator și o nouă parolă în timpul procesului de instalare, iar utilizatorul va fi creat în timpul instalării. </li>
                        </ul></ul><p>

                      Pentru configurația <b>personalizată</b>, este posibil să fie necesar să cunoașteți și următoarele:<br>
                      <ul>
                      <li> <b>URL care va fi folosit pentru a accesa instanța SuiteCRM</b> după instalare. Acest URL ar trebui să includă numele serverului web sau al mașinii sau adresa IP.<br><br></li>
                                  <li> [Opțional] <b>Calea către directorul de sesiune</b> dacă doriți să utilizați un director de sesiune personalizat pentru informațiile SuiteCRM, pentru a preveni vulnerabilitatea datelor de sesiune pe serverele partajate.<br><br></li>
                                  <li> [Opțional] <b>Calea către un director de jurnal personalizat</b> dacă doriți să suprascrie directorul implicit pentru jurnalul SuiteCRM.<br><br></li>
                                  <li> [Opțional] <b>ID-ul aplicației</b> dacă doriți să suprascrieți ID-ul generat automat, care asigură că sesiunile unei instanțe SuiteCRM nu sunt utilizate de alte instanțe.<br><br></li>
                                  <li><b>Setul de caractere</b> cel mai frecvent utilizat în locația dvs.<br><br></li></ul>
                                  Pentru informații mai detaliate, consultați Ghidul de instalare.                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Vă rugăm să citiți următoarele informații importante înainte de a continua instalarea. Informațiile vă vor ajuta să stabiliți dacă sunteți pregătit sau nu să instalați aplicația în acest moment.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Alege limba</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Asistent de configurare',
    'LBL_WIZARD_TITLE' => 'Configurare SuiteCRM: ',
    'LBL_YES' => 'Da',

    'LBL_PATCHES_TITLE' => 'Instalaţi Ultimele Patch-uri',
    'LBL_MODULE_TITLE' => 'Instalați pachete de limbă',
    'LBL_PATCH_1' => 'Dacă doriți să săriți peste acest pas, apăsați „Înainte”.',
    'LBL_PATCH_TITLE' => 'Sistem Patch',
    'LBL_PATCH_READY' => 'Următorul patch(uri) sunt gata pentru instalare:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SugarCRM se folosește de sesiunile PHP pentru a salva informații importante cât timp sunteți conectat la acest server web. Instalarea dumneavoastră PHP nu are setările despre sesiuni configurate corect. <br><br>O configurație greșită des întâlnită este directiva <b>'session.save_path'</b> care nu pointează către un director valid.<br><br>Vă rugăm corectați <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP configuration</a> în fișierul php.ini care se afla mai jos.",
    'LBL_SESSION_ERR_TITLE' => 'Sesiuni de configurare PHP Eroare',
    'LBL_SYSTEM_NAME' => 'Nume Sistem',
    'LBL_COLLATION' => 'Setări sortare',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Furnizați un nume de sistem pentru instanta SugarCRM.',
    'LBL_PATCH_UPLOAD' => 'Selectați un fișier patch din calculatorul tău',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Este necesară versiunea PHP 5 sau o versiune superioară.',
    'LBL_MINIMUM_PHP_VERSION' => 'Php versiunea minimă necesară este 5.1.0. Versiunea recomandate Php este 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => '(Versiunea dvs. php curentă este ',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Versiunea recomandată php este 5.2.1 sau mai nouă)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Modul de compatibilitate Php înapoi este activat. Setați zend.ze1_compatibility_mode pe Off pentru a continua',
    'LBL_STREAM' => 'PHP permite folosirea fluxului',

    'advanced_password_new_account_email' => array(
        'subject' => 'Informații de cont noi',
        'type' => 'sistem',
        'description' => 'Acest șablon este folosit când administratorul de sistem trimite o nouă parolă pentru un utilizator.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Iată numele de utilizator și parola temporară pentru contul dumneavoastră:</p><p>Utilizator : $contact_user_user_name </p><p>Parola : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>După ce te conectezi folosind parola de mai sus, s-ar putea să ți se solicite să resetezi parola la una aleasă de tine.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Aici este numele de utilizator şi parola contului temporar:
Nume de utilizator: $contact_user_user_name 
Parola: $contact_user_user_hash 

$config_site_url 

După ce vă conectaţi utilizând parola de mai sus, vi se poate cere pentru a reseta parola o parola aleasa de dvs.',
        'name' => 'Specifica Nume',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Resetați parola contului dumneavoastră',
        'type' => 'sistem',
        'description' => "Acest șablon este folosit pentru a trimite utilizatorului un link să faceți clic pentru a reseta parola pentru contul de utilizator.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Ai solicitat recent resetarea parolei contului tău pe $contact_user_pwd_last_changed. </p><p>Click pe link-ul de mai jos pentru a reseta parola ta:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Ați solicitat recent pe $contact_user_pwd_last_changed să vă puteți reseta parola contului.

Faceți clic pe link-ul de mai jos pentru a reseta parola:

$contact_user_link_guid',
        'name' => 'Specifica Nume',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Cod autentificare cu doi factori',
        'type' => 'sistem',
        'description' => "Acest şablon este folosit pentru a trimite un cod catre utilizator pentru Autentificarea în Doi Pași.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Codul de autentificare în doi pași este <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Codul autentificării în doi pași este $code.',
        'name' => 'E-mail autentificare în Doi Pași',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '„De la„ Nume:',
    'LBL_FROM_ADDR' => '„De la„ Adresa:',

    'LBL_WIZARD_SMTP_DESC' => 'Furnizați contul de e-mail care va fi utilizat pentru a trimite e-mailuri, cum ar fi notificările de atribuire și noile parole de utilizator. Utilizatorii vor primi e-mailuri de la SuiteCRM, ca trimis de la contul de e-mail specificat.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Alegeți furnizorul de e-mail:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Mail Yahoo',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Altele',
    'LBL_MAIL_SMTP_SETTINGS' => 'Specificații SMTP Server',
    'LBL_MAIL_SMTPSERVER' => 'Server SMTP:',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utilizați autentificare SMTP?',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activați SMTP prin SSL sau TLS?',
    'LBL_GMAIL_SMTPUSER' => 'Adresă Mail Gmail:',
    'LBL_GMAIL_SMTPPASS' => 'Parolă Gmail:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Permiteți utilizatorilor să utilizeze acest cont pentru e-mail de ieșire:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Când este selectată această opțiune, toți utilizatorii vor putea trimite e-mailuri folosind același cont de e-mail de ieșire utilizat pentru a trimite notificări și alerte de sistem. În cazul în care opțiunea nu este selectată, utilizatorii pot utiliza în continuare serverul de mail de ieșire după ce au furnizat informații despre propriul cont.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Parola Yahoo! Mail:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID:',

    'LBL_EXCHANGE_SMTPPASS' => 'Parolă Exchange:',
    'LBL_EXCHANGE_SMTPUSER' => 'Numele Utilizator Exchange:',
    'LBL_EXCHANGE_SMTPPORT' => 'Portul serverului Exchange:',
    'LBL_EXCHANGE_SMTPSERVER' => 'Server Exchange:',


    'LBL_MAIL_SMTPUSER' => 'Nume Utilizator SMTP:',
    'LBL_MAIL_SMTPPASS' => 'Parolă SMTP:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Identitate vizuală',
    'LBL_WIZARD_SYSTEM_DESC' => 'Furnizați numele organizației dvs. și logo-ul pentru a marca SuiteCRM.',
    'SYSTEM_NAME_WIZARD' => 'Nume:',
    'SYSTEM_NAME_HELP' => 'Acesta este numele care se afișează în bara de titlu a browser-ului dvs.',
    'NEW_LOGO' => 'Selectați Logo:',
    'NEW_LOGO_HELP' => 'Formatul imaginii poate fi fie .png, fie .jpg. Înălțimea maximă este 170px, iar lățimea maximă este de 450px. Orice imagine încărcată care este mai mare în orice direcție va fi scalată la aceste dimensiuni maxime.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Încarcă',
    'CURRENT_LOGO' => 'Logo-ul actual:',
    'CURRENT_LOGO_HELP' => 'Acest logo este afișat in centrul ecranului de autentificare al aplicației Sugar.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Selecție Scenariu',
    'LBL_WIZARD_SCENARIO_DESC' => 'Acest lucru este pentru a permite adaptarea modulelor afișate pe baza cerințelor dvs. Fiecare modul poate fi activat după instalare folosind pagina de administrare.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Nu există nici un scenariu momentan setat în fișierul de configurare (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Setări de standarde locale',
    'LBL_WIZARD_LOCALE_DESC' => 'Specificați cum doriți să fie afișate datele în SuiteCRM funcție de locația geografica. Setările pe care le furnizați aici vor fi setări implicite. Utilizatorii vor putea să își seteze propriile preferințe.',
    'LBL_DATE_FORMAT' => 'Format dată:',
    'LBL_TIME_FORMAT' => 'Format de timp:',
    'LBL_TIMEZONE' => 'Fus Orar:',
    'LBL_LANGUAGE' => 'Limbă:',
    'LBL_CURRENCY' => 'Monedă:',
    'LBL_CURRENCY_SYMBOL' => 'Simbol Monedă:',
    'LBL_CURRENCY_ISO4217' => 'Codul Monetar ISO 4217:',
    'LBL_NUMBER_GROUPING_SEP' => 'Separator mii:',
    'LBL_DECIMAL_SEP' => 'Simbol zecimal:',
    'LBL_NAME_FORMAT' => 'Format nume:',
    'UPLOAD_LOGO' => 'Vă rugăm să așteptați, încărcarea logo-ului...',
    'ERR_UPLOAD_FILETYPE' => 'Tipul de fișier nu este permis, te rugăm să încarci un jpeg sau un png.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Fișier încărcat necunoscut, a apărut o eroare.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'Fișierul încărcat depășește limita upload_max_filesize în php.ini.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'Fișierul încărcat depășește directiva MAX_FILSE_SIZE care a fost specificată în câmpul HTML.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'Fișierul încărcat a fost încărcat parțial.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'Nici un fișier nu a fost încărcat.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Lipsește un fișier temporar.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Scrierea fișierului pe disk a eșuat.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'O extensie PHP a oprit încărcare fișierului. PHP nu oferă o modalitate de a determina care extensie a determinat oprirea încărcării fișierului.',

    'LBL_INSTALL_PROCESS' => 'Se instalează...',

    'LBL_EMAIL_ADDRESS' => 'Adresă Email:',
    'ERR_ADMIN_EMAIL' => 'Adresa de Email Administrator este incorectă.',
    'ERR_SITE_URL' => 'URL-ul site-ului este necesar.',

    'STAT_CONFIGURATION' => 'Configurarea relațiilor...',
    'STAT_CREATE_DB' => 'Creare bază de date...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Creează setările implicite...',
    'STAT_INSTALL_FINISH' => 'Instalare terminată...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Procesul de instalare terminat,<a href="%s">va rugăm să va logați...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Va rugăm să acceptați licență mai întâi',

    'LBL_MORE_OPTIONS_TITLE' => 'Mai multe opțiuni',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Eroare Bază de date',
    'LBL_OLD_PHP' => 'Versiune Veche PHP detectată!',
    'LBL_OLD_PHP_MSG' => 'Versiunea PHP recomandată pentru instalarea SuiteCRM este %s <br />Versiunea PHP minimă necesară este %s<br />Utilizați versiunea PHP %s, care este EOL: <a href="http://php.net/eol.php">http://php. et/eol.php</a>.<br />Vă rugăm să luați în considerare actualizarea versiunii PHP. ',
    'LBL_OLD_PHP_OK' => 'Sunt conștient de riscuri și doresc să continui.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Utilizator',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Nume baza de date',
    'LBL_DBCONFIG_MSG3' => 'Numele bazei de date care va conține datele pentru instanta SugarCRM pe care o veți instala.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Nume gazda',
    'LBL_DBCONFIG_MSG2' => 'Numele serverului web sau al mașinii (host) pe care se află baza de date (cum ar fi www.domeniu.ro). Dacă se instalează local, este mai bine să utilizezi \'localhost\' decât \'127.0.0.0.1\', din motive de performanță.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Numele de utilizator si parola unui administrator al bazei de date care poate crea tabele și utilizatori și care poate scrie în baza de date sunt necesare pentru a crea baza de date SugarCRM.'
);
