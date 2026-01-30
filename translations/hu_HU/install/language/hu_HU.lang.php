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
    'LBL_BASIC_SEARCH' => 'Gyors szűrő',
    'LBL_ADVANCED_SEARCH' => 'Speciális szűrő',
    'LBL_BASIC_TYPE' => 'Alaptípus',
    'LBL_ADVANCED_TYPE' => 'Részletes típusú',
    'LBL_SYSOPTS_2' => 'Milyen típusú adatbázist használ a CRM telepítéséhez?',
    'LBL_SYSOPTS_DB' => 'Adja meg az adatbázis típusát',
    'LBL_SYSOPTS_DB_TITLE' => 'Adatbázis típusa',
    'LBL_SYSOPTS_ERRS_TITLE' => 'Kérjük, javítsa a következő hibákat folytatás előtt:',
    'ERR_DB_VERSION_FAILURE' => 'Nem lehet ellenőrizni az adatbázis verzióját.',
    'DEFAULT_CHARSET' => 'UTF-8',
    'ERR_ADMIN_USER_NAME_BLANK' => 'Adja meg a CRM admin felhasználójának nevét.',
    'ERR_ADMIN_PASS_BLANK' => 'Adja meg a CRM admin felhasználójának jelszavát!',

    'ERR_CHECKSYS' => 'A kompatibilitás ellenőrzés során hibát találtunk. Ahhoz, hogy a CRM megfelelőképpen működjön, kérjük tegye meg az alább felsorolt szükséges lépéseket, vagy nyomja meg a mégegyszer gombot, esetleg próbálja újratelepíteni!',
    'ERR_CHECKSYS_CALL_TIME' => 'Engedélyezett hivási idő referencia bekapcsolva (ezt kikapcsoltra kell állítani a php.ini-ben)',
    'ERR_CHECKSYS_CURL' => 'Nincs találat: a CRM ütemező korlátozott funkcionalitással fog futni.',
    'ERR_CHECKSYS_IMAP' => 'Nincs találat: A bejövő eMailek és Kampányok -nak szükséges az IMAP könyvtár megléte. Csak akkor lesz működőképes.',
    'ERR_CHECKSYS_MEM_LIMIT_1' => ' (Állítsd',
    'ERR_CHECKSYS_MEM_LIMIT_2' => 'M vagy nagyobbra a php.ini file-ban)',
    'ERR_CHECKSYS_NOT_WRITABLE' => 'Figyelmeztetés: Nem írható',
    'ERR_CHECKSYS_PHP_INVALID_VER' => 'Ön által használt PHP verzió nem támogatja a SuiteCRM-et. Szüksége lesz egy frissebb verzióra, amely kompatibilis a SuiteCRM alkalmazással. Kérjük, olvassa el a kompatibilitási mátrix  Release Notes bejegyzést a támogatott PHP verziókról. Az Ön által használt verzió',
    'ERR_CHECKSYS_IIS_INVALID_VER' => 'Az ön IIS verziója nem támogatja a CRM szoftver futását. A kompatibilis változat telepítéséhez kérem olvassa el a KompatibilitásMátrix leírást! És annak megfelelően telepítse újra a IIS futttató környezetet!',
    'ERR_CHECKSYS_FASTCGI' => 'Észleltük, hogy nem használja a FastCGI kezelőt a PHP-ben. Ezt mindenképpen szükséges installálni, beállítani a CRM rendszer működéséhez. Kérjük olvassa a kompatibilitás mátrixot. További részletekért kattintson  <a href="http://www.iis.net/php/" target="_blank"> http://www.iis.net/php/ </a>',
    'ERR_CHECKSYS_FASTCGI_LOGGING' => 'Az optimális élményhez használjon IIS / FastCGI api-t, és állítsa a fstcgi.logging -ot 0-ra a php.ini-ben. ',
    'LBL_DB_UNAVAILABLE' => 'Adatbázis nem elérhető',
    'LBL_CHECKSYS_DB_SUPPORT_NOT_AVAILABLE' => 'Adatbázis támogatás nem található. Kérjük, győződjön meg róla, hogy a szükséges illesztőprogramokat az alábbi adatbázis típusokra: MySQL vagy MS SQLServer. A php.ini fájl megfelelő bejegyzéseit ellenőrizze, vagy fordítsa újra a megfelelő bináris fájlt, attól függően, hogy a milyen PHP-verziót használ. Kérjük, olvassa el a PHP Manual-t további információértt.',
    'LBL_CHECKSYS_XML_NOT_AVAILABLE' => 'A SuiteCRM-hez szükséges XML Parser könyvtárakhoz kapcsolódó funkciók nem találhatók. Szükséges lehet a php.ini fájlban a kiterjesztés ki kommentelésére; vagy a megfelelő bináris fájl újrafordítására az Ön PHP verziójától függően. Kérjük olvassa át a PHP kézikönyvet a további információkért.',
    'ERR_CHECKSYS_MBSTRING' => 'A SuiteCRM-hez szükséges Multibyte Strings PHP kiterjesztéshez (mbstring) kapcsolódó funkciók nem találhatók.<br/>
<br/>Általában az mbsting modul nincs alapértelmezetten engedélyezve a PHP-ben és külön kell aktiválni a --enable-mbstring paranccsal, amikor a PHP bináris felépült. Kérjük olvassa át a PHP kézikönyvet a további információkért, és hogy hogyan tudja engedélyezni a mbstring támogatást.',
    'ERR_CHECKSYS_CONFIG_NOT_WRITABLE' => 'A konfigurációs fájl létezik, de nem írható. Kérjük kövessen minden lépést a fájl írhatóságának engedélyezésére. Az operációs rendszertől függően ez állhat az engedélyek megváltoztatásából a chmod 766 parancssal vagy az egér jobb gombjával a fájlnévre kattintva elérheti a fájl tulajdonságokat és törölheti a csak olvasható flaget.',
    'ERR_CHECKSYS_CONFIG_OVERRIDE_NOT_WRITABLE' => 'The config override file exists but is not writeable. Please take the necessary steps to make the file writeable. Depending on your Operating system, this might require you to change the permissions by running chmod 766, or to right click on the filename to access the properties and uncheck the read only option.',
    'ERR_CHECKSYS_CUSTOM_NOT_WRITABLE' => 'Az egyedi könyvtár létezik, de nem írható. Az operációs rendszertől függően ez állhat az engedélyek megváltoztatásából (a chmod 766 parancssal) vagy az egér jobb gombjával a fájlnévre kattintva elérheti a fájl tulajdonságokat és törölheti a csak olvasható flaget. Kérjük tegyen meg minden lépést a fájl írhatóvá tételéhez.',
    'ERR_CHECKSYS_FILES_NOT_WRITABLE' => "Az itt felsorolt fájlok vagy könyvtárak nem írhatóak, elérhetőek vagy nem hozhatóak létre. Az operációs rendszertől függően ez állhat a könyvtár engedélyeinek megváltoztatásából (a chmod 766 parancssal) vagy az egér jobb gombjával a fájlnévre kattintva elérheti a fájl tulajdonságokat és törölheti a csak olvasható flaget a könyvtáron és valamennyi alkönyvtárán.",
    'ERR_CHECKSYS_JSON_NOT_AVAILABLE' => "A SuiteCRM-hez szükséges JSON Parser könyvtárakhoz kapcsolódó funkciók nem találhatók. Lehetséges okok: a php.ini fájlban a kiterjesztés ki kommentelése vagy a megfelelő bináris fájl újrafordítása az Ön PHP verziójától függően. Kérjük olvassa át a PHP kézikönyvet a további információkért.",
    'LBL_CHECKSYS_OVERRIDE_CONFIG' => 'Config felülbírálása',
    'ERR_CHECKSYS_SAFE_MODE' => 'Safe Mode is On (please disable in php.ini)',
    'ERR_CHECKSYS_ZLIB' => 'Zlib támogatást nem találtam: SuiteCRM hatalmas teljesítményelőnyt érhet el zlib tömörítés használatával.',
    'ERR_CHECKSYS_ZIP' => 'ZIP támogatás nincs: CRM-nek szükség van ZIP támogatásra a tömörített fájlok feldolgozásához.',
    'ERR_CHECKSYS_PCRE' => 'PCRE könyvtár nem található: CRM-nek kell a PCRE könyvtár, ahol a Perl típusú reguláris kifejezések feldolgozódnak.',
    'ERR_CHECKSYS_PCRE_VER' => 'PCRE könyvtár változat: CRM-nek szüksége van a PCRE 7.0 vagy afeletti verziójú könyvtárra, a reguláris kifejezések feldolgozásához.',
    'ERR_DB_ADMIN' => 'A megadott adatbázis felhasználónév és/vagy jelszó érvénytelen és az adatbáziskapcsolat nem létrehozható. Kérjük adjon meg érvényes felhasználónevet és kódszót. (Hiba:',
    'ERR_DB_ADMIN_MSSQL' => 'A megadott adatbázis adminisztrátor felhasználónév és/vagy jelszó érvénytelen és az adatbáziskapcsolat nem létrehozható. Kérjük adjon meg érvényes felhasználónevet és kódszót.',
    'ERR_DB_EXISTS_NOT' => 'A megadott adatbázis nem létezik.',
    'ERR_DB_EXISTS_WITH_CONFIG' => 'Már létezik adatbázis a konfigurációs adatokkal. Ahhoz, hogy a kiválasztott adatbázissal készítsen egy telepítőt, kérjük, futtassa ismét a telepítőt és válassza a: "Töröljem a jelenlegi SuiteCRM táblákat és hozzam létre ismét?" menüpontot. Frissíteni, a kezelői konzol frissítési varázslójával tud. Kérjük, olvassa el a frissítés dokumentációt amely a <a href="https://docs.suitecrm.com/admin/installation-guide/upgrading/" target="_new">itt</a> található.',
    'ERR_DB_EXISTS' => 'A megadott adatbázisnév már létezik - nem tudok létrehozni egy másikat azonos névvel.',
    'ERR_DB_EXISTS_PROCEED' => 'A megadott adatbázis-név már létezik.<br>1. nyomja meg a vissza gombot, és válasszon egy új adatbázis nevet <br>2. kattintson a tovább gombra, és folytassa tovább, de ekkor meglévő adatbázis minden táblája törlődik. <strong>Azaz bármelyik lehetőségnél a a táblái és adatai elvesznek.</strong>',
    'ERR_DB_HOSTNAME' => 'A kiszolgáló neve nem lehet üres.',
    'ERR_DB_INVALID' => 'A kiválasztott adatbázistípus érvénytelen.',
    'ERR_DB_LOGIN_FAILURE' => 'A megadott adatbázis kiszolgáló, felhasználónév, és/vagy jelszó érvénytelen, ezért nem lehet kapcsolódni az adatbázishoz. Kérjük írjon be érvényes kiszolgáló adatokat, felhasználónevet és jelszót',
    'ERR_DB_LOGIN_FAILURE_MYSQL' => 'A megadott adatbázis kiszolgáló, felhasználónév, és/vagy jelszó érvénytelen, ezért nem lehet kapcsolódni az adatbázishoz. Kérjük írjon be érvényes kiszolgáló adatokat, felhasználónevet és jelszót',
    'ERR_DB_LOGIN_FAILURE_MSSQL' => 'A megadott adatbázis kiszolgáló, felhasználónév, és/vagy jelszó érvénytelen, ezért nem lehet kapcsolódni az adatbázishoz. Kérjük írjon be érvényes kiszolgáló adatokat, felhasználónevet és jelszót',
    'ERR_DB_MYSQL_VERSION' => 'A MySQL verzió (%s) nem támogatja ezt a CRM verziót.  Szüksége lesz CRM alkalmazással kompatibilis MySQL verzió telepítésére.  Kérjük, tanulmányozza a kompatibilitást mátrix a Release Notes MySQL jelenleg is támogatott verzióit.',
    'ERR_DB_NAME' => 'Az adatbázis neve nem lehet üres.',
    'ERR_DB_MYSQL_DB_NAME_INVALID' => "Az adatbázis neve nem tartalmazhat '\\', '/', vagy '.' karaktereket",
    'ERR_DB_MSSQL_DB_NAME_INVALID' => "Adatbázis neve nem kezdődhet számmal, '#', vagy ' @' és szóközzel, nem tartalmazhatnak \"\" \",\" \"\", \"*\", \"/\", \"\\",
    'ERR_DB_OCI8_DB_NAME_INVALID' => "Adatbázis neve csak az alfanumerikus karakterekből és a következő szimbólumokból állhatnak:  '#', '_' vagy a '$'",
    'ERR_DB_PASSWORD' => 'A SuiteCRM admin számára megadott jelszók nem egyeznek. Kérem adjon meg azonos jelszavakat a jelszó mezőkben.',
    'ERR_DB_PRIV_USER' => 'Kérem adjon meg adatbázis adminisztrátor felhasználónevet. A felhasználó az adatbáziskapcsolat létrehozásához szükséges.',
    'ERR_DB_USER_EXISTS' => 'A SuiteCRM adatbázis felhasználó felhasználóneve már létezik - nem tudok létrehozni egy újat azonos névvel. Kérem adjon meg új felhasználónevet.',
    'ERR_DB_USER' => 'Adja meg a SuiteCrm adatbázis adminisztrátor felhasználónevét.',
    'ERR_DBCONF_VALIDATION' => 'Kérjük, javítsa a következő hibákat folytatás előtt:',
    'ERR_DBCONF_PASSWORD_MISMATCH' => 'A beírt SuiteCRM adatbázis felhasználói jelszó nem helyes. Kérem írja be újra a jelszót a jelszó mezőbe.',
    'ERR_ERROR_GENERAL' => 'Az alábbi hibák történtek:',
    'ERR_LANG_CANNOT_DELETE_FILE' => 'Nem lehet törölni a fájlt: ',
    'ERR_LANG_MISSING_FILE' => 'Fájl nem található: ',
    'ERR_LANG_NO_LANG_FILE' => 'Nincs nyelvicsomag-fájl az include/language könyvtárban a következő fájlban: ',
    'ERR_LANG_UPLOAD_1' => 'Probléma történt a feltöltés közben, kérjük próbálja meg újra.',
    'ERR_LANG_UPLOAD_2' => 'A nyelvi csomagoknak ZIP archívum formátumúaknak kell lenniük.',
    'ERR_LANG_UPLOAD_3' => 'A PHP nem tudta áthelyezni az ideiglenes fájlt a frissítési könyvtárba.',
    'ERR_LOG_DIRECTORY_NOT_EXISTS' => 'A megadott naplókönyvtár nem egy érvényes könyvtár.',
    'ERR_LOG_DIRECTORY_NOT_WRITABLE' => 'A megadott naplókönyvtár nem írható.',
    'ERR_NO_DIRECT_SCRIPT' => 'A szkript nem dolgozható fel közvetlenül.',
    'ERR_NO_SINGLE_QUOTE' => 'Nem használható a szimpla idézőjel ',
    'ERR_PASSWORD_MISMATCH' => 'A SuiteCRM admin számára megadott kódszók nem egyeznek. Kérem adjon meg azonos kódszókat a kódszó mezőkben.',
    'ERR_PERFORM_CONFIG_PHP_1' => 'A <span class=stop>config.php</span> fájl nem írható.',
    'ERR_PERFORM_CONFIG_PHP_2' => 'Folytathatja a telepítést a config.php fájl kézzel történő létrehozásával, az alábbi konfigurációs adatokat beillesztve a config.php fájlba. Azonban a config.php fájlt <strong>még azelőtt kell</strong> létrehozza mielőtt továbblépne a következő lépésre.',
    'ERR_PERFORM_CONFIG_PHP_3' => 'Léterehozott config.php fájlt?',
    'ERR_PERFORM_CONFIG_PHP_4' => 'Figyelem: A config.php fájl nem írható. Ellenőrizze, hogy létezik-e.',
    'ERR_PERFORM_HTACCESS_1' => 'Nem írható a következő ',
    'ERR_PERFORM_HTACCESS_2' => ' fájl.',
    'ERR_PERFORM_HTACCESS_3' => 'Ha le szeretné védeni a napló fájlt, hogy az nem legyen elérhető böngészőből, készítsen egy .htaccess fájlt a napló könyvtárban a következő sorokkal:',
    'ERR_PERFORM_NO_TCPIP' => '<b>Nem érzékelek internetkapcsolatot.</b> Amikor van internetelérése kérem látogasson el a <a href="https://www.suitecrm.com/">https://www.suitecrm.com/</a> oldalra SuiteCRM-je regisztrációjához. Azáltal, hogy kicsit ismerteti számunkra hogyan kívánja használni a SuiteCRM-et, biztosíthatjuk, hogy mindig a megfelelő alkalmazást szállítjuk az üzleti igényeihez.',
    'ERR_SESSION_DIRECTORY_NOT_EXISTS' => 'A megadott munkamenet könyvtár nem érvényes könyvtár.',
    'ERR_SESSION_DIRECTORY' => 'A megadott munkamenet könyvtár nem írható könyvtár.',
    'ERR_SESSION_PATH' => 'Munkamenet elérési utat kell megadni, ha szeretné megadni sajátját.',
    'ERR_SI_NO_CONFIG' => 'A dokumentum gyökérkönyvtár nem tartalmaz config_si.php fájlt vagy nem adott meg $sugar_config_si -t a config.php fájlban',
    'ERR_SITE_GUID' => 'Alkalmazás ID szükséges ha sajátot kíván megadni.',
    'ERROR_SPRITE_SUPPORT' => "Jelenleg nem vagyunk képesek megtalálni a GD könyvtárat, ennek eredményeként nem lesz képes használni a CSS Sprite funkciót.",
    'ERR_UPLOAD_MAX_FILESIZE' => 'Figyelem: A PHP beállításai módosítania kell engedélyezve legalább 6MB-os fájlok feltöltését.',
    'LBL_UPLOAD_MAX_FILESIZE_TITLE' => 'Feltöltés Fájl Méret',
    'ERR_URL_BLANK' => 'Adjon meg alap URL címet a SuiteCRM munkamenethez.',
    'ERR_UW_NO_UPDATE_RECORD' => 'A telepítési rekord nem található ',
    'ERROR_MANIFEST_TYPE' => 'A Manifest állomány meg kell hogy adja a csomag típusát.',
    'ERROR_PACKAGE_TYPE' => 'A Manifest állomány egy nem felismerhető csomag típust tartalmaz',
    'ERROR_VERSION_INCOMPATIBLE' => 'A feltöltött állomány nem kompatibilis a SuiteCRM Suite ezen verziójával: ',

    'LBL_BACK' => 'Vissza',
    'LBL_CANCEL' => 'Mégsem',
    'LBL_ACCEPT' => 'Elfogadom',
    'LBL_CHECKSYS_CACHE' => 'Írható cache alkönyvtárak',
    'LBL_DROP_DB_CONFIRM' => 'A megadott adatbázisnév már létezik.<br>1. Nyomja meg a törlés gombot, és válasszon egy új adatbázis nevet <br>2. Kattintson a tovább gombra, és folytassa, ekkor meglévő adatbázis minden táblája törlődik. <strong>Azaz bármelyik lehetőségnél a a táblái és adatai elvesznek.</strong>',
    'LBL_CHECKSYS_COMPONENT' => 'Komponens',
    'LBL_CHECKSYS_CONFIG' => 'Írható SuiteCRM konfigurációs fájl (config.php)',
    'LBL_CHECKSYS_CURL' => 'cURL Modul',
    'LBL_CHECKSYS_CUSTOM' => 'Írható Egyedi Könyvtár',
    'LBL_CHECKSYS_DATA' => 'Írható Adat Al-Könyvtárak',
    'LBL_CHECKSYS_IMAP' => 'IMAP Modul',
    'LBL_CHECKSYS_FASTCGI' => 'FastCGI',
    'LBL_CHECKSYS_MBSTRING' => 'MB Strings Modul',
    'LBL_CHECKSYS_MEM_OK' => 'OK (Nincs korlátozás)',
    'LBL_CHECKSYS_MEM_UNLIMITED' => 'OK (Korlátlan)',
    'LBL_CHECKSYS_MEM' => 'PHP Memória Limit',
    'LBL_CHECKSYS_MODULE' => 'Írható modul alkönyvtárak és fájlok',
    'LBL_CHECKSYS_NOT_AVAILABLE' => 'Nem érhető el',
    'LBL_CHECKSYS_OK' => 'OK',
    'LBL_CHECKSYS_PHP_INI' => 'A PHP konfigurációs fájlt tartalmazó könyvtár (php.ini):',
    'LBL_CHECKSYS_PHP_OK' => 'OK (ver ',
    'LBL_CHECKSYS_PHPVER' => 'PHP verzió',
    'LBL_CHECKSYS_IISVER' => 'IIS-verzió',
    'LBL_CHECKSYS_JSON' => 'JSON Parsing',
    'LBL_CHECKSYS_RECHECK' => 'Újra-ellenőrzés',
    'LBL_CHECKSYS_STATUS' => 'Állapot',
    'LBL_CHECKSYS_TITLE' => 'Rendszerellenőrzés elfogadása',
    'LBL_CHECKSYS_XML' => 'XML feldolgozás',
    'LBL_CHECKSYS_ZLIB' => 'ZLIB Tömörítő Modul',
    'LBL_CHECKSYS_ZIP' => 'ZIP-kezelő modul',
    'LBL_CHECKSYS_PCRE' => 'PCRE könyvtár',
    'LBL_CHECKSYS_FIX_FILES' => 'Kérjük javítsa a hibát a következő fájlokon és könyvtárakon mielőtt folytatja:',
    'LBL_CHECKSYS_FIX_MODULE_FILES' => 'Kérjük javítsa a következő modul könyvtárait és a bennük található fájlokat a folytatás előtt:',
    'LBL_CHECKSYS_UPLOAD' => 'Írható feltöltési könyvtár',
    'LBL_CLOSE' => 'Bezárás',
    'LBL_THREE' => '3',
    'LBL_CONFIRM_BE_CREATED' => 'lesz létrehozva',
    'LBL_CONFIRM_DB_TYPE' => 'Adatbázis típusa',
    'LBL_CONFIRM_NOT' => 'nem',
    'LBL_CONFIRM_TITLE' => 'Beállítások megerősítése',
    'LBL_CONFIRM_WILL' => 'lesz',
    'LBL_DBCONF_DB_DROP' => 'Táblák eldobása',
    'LBL_DBCONF_DB_NAME' => 'Adatbázis neve',
    'LBL_DBCONF_DB_PASSWORD' => 'SuiteCRM Adatbázis Felhasználó Jelszó',
    'LBL_DBCONF_DB_PASSWORD2' => 'Adja meg újra SuiteCRM Adatbázis-át Felhasználó-ját és Jelszavát',
    'LBL_DBCONF_DB_USER' => 'SuiteCRM Adatbázis Felhasználó',
    'LBL_DBCONF_SUITE_DB_USER' => 'SuiteCRM Adatbázis Felhasználó',
    'LBL_DBCONF_DB_ADMIN_USER' => 'Adatbázis Adminisztrátor Felhasználóneve',
    'LBL_DBCONF_DB_ADMIN_PASSWORD' => 'Adatbázis Admin Jelszava',
    'LBL_DBCONF_COLLATION' => 'Karakter kódolás',
    'LBL_DBCONF_CHARSET' => 'Karakterkészlet',
    'LBL_DBCONF_ADV_DB_CFG_TITLE' => 'Adatbázis részletes beállítások',
    'LBL_DBCONF_DEMO_DATA' => 'Feltölti az Adatbázist Demó Adatokkal?',
    'LBL_DBCONF_DEMO_DATA_TITLE' => 'Válasszon Demó Adatot',
    'LBL_DBCONF_HOST_NAME' => 'Kiszolgáló Neve',
    'LBL_DBCONF_HOST_INSTANCE' => 'Fogadó példány',
    'LBL_DBCONFIG_SECURITY' => 'Biztonsági megfontolásból meghatározhat egy külön bejáratú adatbázis felhasználót, hogy azzal kapcsolódjon SuiteCRM adatbázishoz. Ez a felhasználónak a következő jogokkal kell rendelkeznie: írás, frissítés, lekérdezés. Ez a felhasználó lehet az adatbázis adminisztrátor, vagy megadhat egy már létező adatbázis felhasználót is.',
    'LBL_DBCONFIG_PROVIDE_DD' => 'Adjon meg létező felhasználót',
    'LBL_DBCONFIG_CREATE_DD' => 'Válasszon felhasználót a létrehozáshoz',
    'LBL_DBCONFIG_SAME_DD' => 'Ugyanaz mint az Admin Felhasználó',
    'LBL_DBCONF_TITLE' => 'Adatbázis konfiguráció',
    'LBL_DBCONF_TITLE_NAME' => 'Adja meg az Adatbázis Nevét',
    'LBL_DBCONF_TITLE_USER_INFO' => 'Adja meg az Adatbázis Felhasználó Adatait',
    'LBL_DBCONF_TITLE_PSWD_INFO_LABEL' => 'Jelszó',
    'LBL_DISABLED_DESCRIPTION_2' => 'Ezen módosítások végrehajtása után a telepítés megkezdéséhez kattintson a "Start" gombra. <i>A telepítés befejezése után kérjük állítsa az \'installer_locked\' értéket \'true\'-ra.</i>',
    'LBL_DISABLED_DESCRIPTION' => 'A telepítőt már futtatta. Biztonsági intézkedésként a telepítő második futtatását megakadályoztam. Amennyiben mégis teljesen biztos benne, hogy a telepítőt ismét futtatni szeretné, akkor kérem szerkessze config.php fájlját és keresse meg (vagy adja hozzá) az \'installer_locked\' változót és értékét állítsa \'false\'-ra. A sornak így kell kinéznie:',
    'LBL_DISABLED_HELP_1' => 'Telepítéssel kapcsolatos segítségért kérjük keresse fel a SuiteCRM-et',
    'LBL_DISABLED_HELP_LNK' => 'https://community.suitecrm.com',
    'LBL_DISABLED_HELP_2' => 'támogatói fórumok',
    'LBL_DISABLED_TITLE_2' => 'SuiteCRM telepítés letiltva',
    'LBL_HELP' => 'Súgó',
    'LBL_INSTALL' => 'Telepítés',
    'LBL_INSTALL_TYPE_TITLE' => 'Telepítési beállítások',
    'LBL_INSTALL_TYPE_SUBTITLE' => 'Válassza ki a telepítés típusát',
    'LBL_INSTALL_TYPE_TYPICAL' => ' <b>Tipikus telepítés</b>',
    'LBL_INSTALL_TYPE_CUSTOM' => ' <b>Egyéni telepítés</b>',
    'LBL_INSTALL_TYPE_MSG2' => 'Minimális adatok megadása szükséges a telepítéshez. Javasoljuk új felhasználók számára.',
    'LBL_INSTALL_TYPE_MSG3' => 'További beállításokat engedélyez telepítés közben. Ezen beállítások többsége a telepítést követően az adminisztrációs felületről is elérhető. Haladó felhasználóknak ajánljuk.',
    'LBL_LANG_1' => 'A SuiteCRM (amerikai angol) alapértelmezett nyelvétől eltérő nyelven történő használatához most töltheti fel a nyelvi csomagot. Később, a SuiteCRM alkalmazás keretén belül is lesz lehetősége a nyelvi csomagok telepítésére. Ha kihagyná ezt a lépést, úgy kattintson a tovább gombra.',
    'LBL_LANG_BUTTON_COMMIT' => 'Telepítés',
    'LBL_LANG_BUTTON_REMOVE' => 'Eltávolítás',
    'LBL_LANG_BUTTON_UNINSTALL' => 'Eltávolítás',
    'LBL_LANG_BUTTON_UPLOAD' => 'Feltöltés',
    'LBL_LANG_NO_PACKS' => 'semmi',
    'LBL_LANG_PACK_INSTALLED' => 'A következő nyelvi csomagok vannak telepítve: ',
    'LBL_LANG_PACK_READY' => 'A következő nyelvi csomagok telepítésre készen állnak: ',
    'LBL_LANG_SUCCESS' => 'A nyelvi csomag sikeresen feltöltve.',
    'LBL_LANG_TITLE' => 'Nyelvi csomag',
    'LBL_LAUNCHING_SILENT_INSTALL' => 'CRM telepítése elindult.  Ez eltarthat néhány percig.',
    'LBL_LANG_UPLOAD' => 'Nyelvi csomag feltöltése',
    'LBL_LICENSE_ACCEPTANCE' => 'Licensz elfogadása',
    'LBL_LICENSE_CHECKING' => 'Rendszerkompatibilitás ellenőrzése.',
    'LBL_LICENSE_CHKENV_HEADER' => 'Környezet ellenőrzése',
    'LBL_LICENSE_CHKDB_HEADER' => 'DB hitelesítő adatainak ellenőrzésére.',
    'LBL_LICENSE_CHECK_PASSED' => 'Rendszer kompatibilitás ellenőrzés sikeres.',
    'LBL_CREATE_CACHE' => 'Felkészülés a telepítésre...',
    'LBL_LICENSE_REDIRECT' => 'Átirányítás a következőre ',
    'LBL_LICENSE_I_ACCEPT' => 'Elfogadom',
    'LBL_LICENSE_PRINTABLE' => ' Nyomtatási nézet ',
    'LBL_PRINT_SUMM' => 'Összefoglaló nyomtatása',
    'LBL_LICENSE_TITLE_2' => 'SuiteCRM licensz',

    'LBL_LOCALE_NAME_FIRST' => 'Béla',
    'LBL_LOCALE_NAME_LAST' => 'Kis',
    'LBL_LOCALE_NAME_SALUTATION' => 'Dr.',

    'LBL_ML_ACTION' => 'Művelet',
    'LBL_ML_DESCRIPTION' => 'Leírás',
    'LBL_ML_INSTALLED' => 'Telepítés Dátuma',
    'LBL_ML_NAME' => 'Név',
    'LBL_ML_PUBLISHED' => 'Publikálás Dátuma',
    'LBL_ML_TYPE' => 'Típus',
    'LBL_ML_UNINSTALLABLE' => 'Telepíthetetlen',
    'LBL_ML_VERSION' => 'Verzió',
    'LBL_MSSQL' => 'SQL szerver',
    'LBL_MSSQL2' => 'SQL szerver (FreeTDS)',
    'LBL_MSSQL_SQLSRV' => 'SQL Server (Microsoft SQL Server illesztőprogram a PHP)',
    'LBL_MYSQL' => 'MySQL',
    'LBL_MYSQLI' => 'MySQL (mysqli kiterjesztés)',
    'LBL_NEXT' => 'Következő',
    'LBL_NO' => 'Nem',
    'LBL_PERFORM_ADMIN_PASSWORD' => 'A site adminisztrátor jelszavának beállítása',
    'LBL_PERFORM_CONFIG_PHP' => 'SuiteCRM konfigurációs fájl létrehozása',
    'LBL_PERFORM_CREATE_DB_1' => '<b>Az adatbázis létrehozása</b> ',
    'LBL_PERFORM_CREATE_DB_2' => ' <b>-</b> ',
    'LBL_PERFORM_CREATE_DB_USER' => 'Adatbázis felhasználónév és jelszó létrehozása...',
    'LBL_PERFORM_CREATE_DEFAULT' => 'SuiteCRM alapadatok létrehozása',
    'LBL_PERFORM_DEFAULT_SCHEDULER' => 'Alapértelmezett ütemezői feladatok létrehozása',
    'LBL_PERFORM_DEFAULT_USERS' => 'Alapértelmezett felhasználók létrehozása',
    'LBL_PERFORM_DEMO_DATA' => 'Az adatbázistáblák feltöltése demo adatokkal (eltarthat egy ideig)',
    'LBL_PERFORM_DONE' => 'kész<br>',
    'LBL_PERFORM_FINISH' => 'Befejezés',
    'LBL_PERFORM_OUTRO_1' => 'SuiteCRM setup ',
    'LBL_PERFORM_OUTRO_2' => ' elkészült!',
    'LBL_PERFORM_OUTRO_3' => 'Teljes idő: ',
    'LBL_PERFORM_OUTRO_4' => ' másodperc.',
    'LBL_PERFORM_OUTRO_5' => 'Becsült memóriahasználat: ',
    'LBL_PERFORM_OUTRO_6' => ' bájt.',
    'LBL_PERFORM_SUCCESS' => 'Sikerült!',
    'LBL_PERFORM_TABLES' => 'SuiteCRM alkalmazás táblák, audit táblák és kapcsolati metaadatok létrehozása',
    'LBL_PERFORM_TITLE' => 'Telepítés végrehajtása',
    'LBL_PRINT' => 'Nyomtatás',
    'LBL_REG_CONF_1' => 'Kérjük töltse ki ezt a rövid űrlapot, hogy termékkel kapcsolatos bejelentéseket, képzésekkel kapcsolatos híreket, különleges ajánlatokat és különleges esemény meghívókat küldhessen Önnek a SuiteCRM. A megszerzett információt nem adjuk el, juttatjuk el vagy közvetítjük semmilyen módon harmadik fél részére.',
    'LBL_REG_CONF_3' => 'Köszönjük a regisztrációt. Kattintson a Befejezés gombra a SuiteCRM-be történő bejelentkezéshez. A legelső bejelentkezéshez használja az "admin" felhasználónevet és a jelszót, amit megadott a 2 lépésben.',
    'LBL_REG_TITLE' => 'Regisztráció',

    'LBL_REQUIRED' => '* Kötelező mező',

    'LBL_SITECFG_ADMIN_Name' => 'SuiteCRM Alkalmazás Admin Név',
    'LBL_SITECFG_ADMIN_PASS_2' => 'Adja meg újra SuiteCRM Admin Felhasználó-ját és Jelszavát',
    'LBL_SITECFG_ADMIN_PASS' => 'SuiteCRM Adatbázis Felhasználó Jelszó',
    'LBL_SITECFG_APP_ID' => 'Alkalmazás ID',
    'LBL_SITECFG_CUSTOM_ID_DIRECTIONS' => 'Ha kijelölte akkor meg kell adnia egy alkalmazás ID-t hogy felülbírálja az automatikusan generáltat. Az ID biztosítja, hogy egy SuiteCRM példány munkamenteit ne tudja más példány használni. Ha cluser típusú SuiteCRM telepítésekkel rendelkezik, akkor mindegyik példánynak ugyanazon a alkalmazás ID-n kell osztoznia.',
    'LBL_SITECFG_CUSTOM_ID' => 'Adja meg az Ön Saját Alkalmazás ID-jét',
    'LBL_SITECFG_CUSTOM_LOG_DIRECTIONS' => 'Ha kijelölte, meg kell adnia a naplózó könyvtárat, hogy felülbírálja az alapértelmezett könyvtárat a SuiteCRM naplójának. Függetlenül attól, hogy hol található a böngészőből történő elérése korlátozva lesz egy .htaccess átirányítással.',
    'LBL_SITECFG_CUSTOM_LOG' => 'Egyéni Napló Könyvtár Használata',
    'LBL_SITECFG_CUSTOM_SESSION_DIRECTIONS' => 'A kijelölte, meg kell adnia egy biztonságos könyvtára a SuiteCRM munkamenet információinak tárolására. Ezt használja a munkamenetek adatin keresztüli sebeshetőség megakadályozásához osztott kiszolgálókon.',
    'LBL_SITECFG_CUSTOM_SESSION' => 'Egyéni Munkamenet Könyvtár használata a SuiteCRM-hez',
    'LBL_SITECFG_FIX_ERRORS' => '<b>Kérjük, javítsa a következő hibákat mielőtt folytatja:</b>',
    'LBL_SITECFG_LOG_DIR' => 'Naplókönyvtár',
    'LBL_SITECFG_SESSION_PATH' => 'Munkamenet Könyvtár elérési útja<br>(írhatónak kell lennie)',
    'LBL_SITECFG_SITE_SECURITY' => 'Válassza ki a Biztonsági Beállításokat',
    'LBL_SITECFG_SUITE_UP_DIRECTIONS' => 'Ha kijelölte a rendszer szabályos időközönként alkalmazás frissítéseket fog keresni.',
    'LBL_SITECFG_SUITE_UP' => 'Automatikusan Keressen Frissítéseket?',
    'LBL_SITECFG_TITLE' => 'Oldalkonfiguráció',
    'LBL_SITECFG_TITLE2' => 'Adminisztrátor Felhasználó Azonosítása',
    'LBL_SITECFG_SECURITY_TITLE' => 'Oldalbiztonság',
    'LBL_SITECFG_URL' => 'A SuiteCRM Példány URL címe',
    'LBL_SITECFG_ANONSTATS' => 'Küldjön Névtelen Használati Statisztikát?',
    'LBL_SITECFG_ANONSTATS_DIRECTIONS' => '<b>Névtelen használati statisztikák küldése</b> - ha be van jelölve, úgy elküldésre kerülnek a telepítéssel kapcsolatos névtelen statisztikai adatok SuiteCRM részére minden alkalommal, amikor a rendszer ellenőrzi új verziók elérhetőségét. Ez az információ segít nekünk jobban megérteni, hogyan használja az alkalmazást, és irányt mutat a termék fejlesztéséhez.',
    'LBL_SITECFG_URL_MSG' => 'Adja meg az URL címet melyen elérhető lesz a SuiteCRM példány a telepítés után. Az URL ezenkívül a SuiteCRM alkalmazás oldalainak nevében is felhasználásra kerül. Az URL címnek magába kell foglalni a webszerver vagy a kiszolgáló gép nevét vagy IP címét.',
    'LBL_SITECFG_SYS_NAME_MSG' => 'Adjon nevet a rendszerének. Ez a név fog megjelenni a böngésző címsorában amikor a felhasználó meglátogatja a SuiteCRM alkalmazást.',
    'LBL_SITECFG_PASSWORD_MSG' => 'A telepítés után használja a SuiteCRM admin felhasználóját (alapértelmezett felhasználónév=admin), hogy belépjen a SuiteCRM példányába. Adja meg ennek az adminisztrátor felhasználónak a jelszavát. Ez a jelszó megváltoztatható az első bejelentkezés után. Másik adminisztrátori felhasználónevet is megadhat az alapértelmezett érték mellett.',
    'LBL_SITECFG_COLLATION_MSG' => 'Válassza ki a rendezés (rendezés) beállításait a rendszerben. Ez a beállítás az adott nyelv használatával hozza létre a táblákat. Abban az esetben, ha a nyelv nem igényel speciális beállításokat használja alapértelmezett értéket.',
    'LBL_SPRITE_SUPPORT' => 'Sprite-támogatás',
    'LBL_SYSTEM_CREDS' => 'Rendszer Hitelesítő adatai',
    'LBL_SYSTEM_ENV' => 'Rendszer Körülmények',
    'LBL_SHOW_PASS' => 'Jelszavak megjelenítése',
    'LBL_HIDE_PASS' => 'Jelszavak elrejtése',
    'LBL_HIDDEN' => '<i>(rejtett)</i>',
    'LBL_STEP1' => '2/1. lépés - Telepítési előtti követelmények',
    'LBL_STEP2' => '2/2. lépés - Konfiguráció',
    'LBL_STEP' => 'Lépés',
    'LBL_TITLE_WELCOME' => 'Üdvözöljük a SuiteCRM-ben ',
    //welcome page variables
    'LBL_TITLE_ARE_YOU_READY' => 'Készen áll a telepítésre?',
    'REQUIRED_SYS_COMP' => 'Szükséges Rendszerkomponensek',
    'REQUIRED_SYS_COMP_MSG' =>
        'Megkezdése előtt kérjük, ellenőrizze, hogy a rendszer alábbi összetevőinek támogatott verziói:<br>
                      <ul>
                      <li> Adatbázis/Adatbázis-kezelő Rendszer (például: MariaDB, MySQL vagy SQL Server)</li>
                      <li> Webszerver (Apache, IIS) </li>
                      </ul>
                      Nézze át a Kompatibilitási Mátrixot a Kiadási Megjegyzésekben
                      kompatibilis rendszer komponensekkel kapcsolatban ahhoz a SuiteCRM verzióhoz, amelyet telepít.<br>',
    'REQUIRED_SYS_CHK' => 'Kezdeti rendszerellenőrzés',
    'REQUIRED_SYS_CHK_MSG' =>
        'A telepítési folyamat megkezdésekor rendszerellenőrzés történik a webszerveren, amelyen a SuiteCRM fájlok találhatók, annak érdekében, hogy
                      megbizonyosodjunk róla, hogy a rendszer helyesen van konfigurálva és minden szükséges komponens rendelkezésre áll
                      a sikeres telepítéshez.<br><br>
                      A rendszer a következőket fogja ellenőrizni:<br>
                      <ul>
                      <li><b>PHP verzió</b> &#8211; kompatibilisnek kell lennie az alkalmazással</li>
                      <li><b>munkamenet változóknak</b> &#8211; megfelelően kell működniük</li>
                      <li><b>MB Sztringek</b> &#8211; megfelelően  vannak telepítve és engedélyezve vannak-e a php.ini-ben</li>
                      <li><b></b> Adatbázis-támogatással</b> &#8211; kell rendelkeznie MariaDB, MySQL vagy SQL Server-hez</li>
                      <li><b>Config.php -nak</b>&#8211; léteznie kell és megfelelő jogosultságokkal kell rendelkeznie az íráshoz
                      <li>a következő SuiteCRM fájlok kell írhatónak lenniük:<ul><li><b>/custom</li>-
                     <li>cache</li>
                      <li>/modules</li>
                      <li>/upload</b></li></ul></li></ul>     
                                  Ha az ellenőrzés sikertelen, nem lesz képes, hogy folytatni a telepítést.
                                  Egy hibaüzenet fog megjelenni, amely elmagyarázza, hogy miért nem sikerült az ellenőrzés.
                                  A szükséges változtatások után ismét elindíthatja az ellenőrzést, hogy folytathassa a telepítést<br>',


    'REQUIRED_INSTALLTYPE' => 'Szokásos vagy Egyéni Telepítés',
    'REQUIRED_INSTALLTYPE_MSG' =>
        'A rendszerellenőrzés után eldöntheti, hogy 
                      Tipikus vagy Egyedi telepítést szeretne.<br><br>
                      Mindkettőhöz, a <b>Tipikus</b> és az <b>Egyedi</b> telepítéshez rendelkeznie kell a következő információkkal:<br>
                      <ul>
                      <li> <b>Azon Adatbázis típusa</b>, amely a SuiteCRM adatait tárolja majd <ul><li>Kompatibilis adatbázis
                      típusok: MariaDB, MySQL or SQL Server.<br><br></li></ul></li>
                      <li> <b>Azon Szerver neve</b> vagy gép(kiszolgáló) neve, ahol az adatbázis található
                      <ul><li>Ez lehet pl. a <i>localhost</i> ha az adatbázis a saját gépén vagy ugyanazon a gépen található
ahol a SuiteCRM fájljai<br><br></li></ul></li>
                      <li><b>Az adatbázis neve</b>, amelyet a SuiteCRM adatinak tárolására fog használni</li>
                        <ul>
                          <li> Esetlegesen egy már létező adatbázis. Ha egy már létező adatbázis nevét adja meg
                          annak táblái eldobódnak a telepítés során, mikor a SuiteCRM adatbázisának sémája beállításra kerül.</li>
                          <li>Amennyiben még nem rendelkezik adatbázissal az Ön által megadott névvel
                          jön létre egy új adatbázis a példány számára a telepítés során<br><br></li>
                        </ul>
                      <li><b>Adatbázis adminisztrátor felhasználóneve és jelszva</b> <ul><li>Az adatbázis adminisztrátor jogosultnak kell lennie táblák és felhasználók létrehozására és hogy írjon az adatbázisba.</li><li>Esetlegesen fel kell vennie
                      a kapcsolatot az adatbázis adminisztrátorával ezekért az információként, amennyiben az adatbázis
                      nem az Ön helyi gépén van, vagy nem Ön az adatbázis adminisztrátora.<br><br></ul></li></li>
                      <li> <b>SuiteCRM adatbázis felhasználóneve és jelszava</b>
                      </li>
                        <ul>
                          <li> A felhasználó lehet az adatbázis adminisztrátor vagy megadhatja egy egy másik
                          már létező adatbázis felhasználót is.</li>
                          <li> Amennyiben szeretne új adatbázis felhasználót létrehozni erre a célra meg kell
                          adnia az új felhasználónevet és jelszavat a telepítés során
                          és akkor ez a felhasználó létrejön a telepítés során </li>
                        </ul></ul><p>

                      Az <b>Egyedi</b> telepítéshez tudnia kell még a következőket:<br>
                      <ul>
                      <li> <b>Az URL címet, melyet a SuiteCRM eléréséhez használhat</b> a telepítés befejezése után.
                      Ennek az URL címnem magába kell foglalnia a gép nevét, vagy az IP címét<br><br></li>
                                  <li> [Optional]<b>A munkamenet könyvtár elérési útja</b>, amennyiben szeretne egyedi
                                  munkamenet könyvtárat használni azért, hogy megakadályozza a munkamenet adatainak 
                                  sérülékenységét osztott szerveren<br><br></li>
                                  <li> [Optional] <b>Egyéni Naplókönyvtár elérési útja</b>, amennyiben szeretné felülírni a SuiteCRM
                                  alapértelmezett Naplókönyvtárát<br><br></li>
                                  <li> [Optional] <b>Alkalmazás ID</b> Amennyiben szeretné felülbírálni az automatikusan generált
                                  ID-t, amely biztosítja, hogy az egyik SuiteCRM munkamenetet ne használhassák másik példányok.<br><br></li>
                                  <li><b>Karakterkészlet</b> legtöbbször a helyi beállításainak megfelelő.<br><br></li></ul>
                                 További, még részletesebb információkét tekintse meg a Telepítési Segédletet.
                                ',
    'LBL_WELCOME_PLEASE_READ_BELOW' => 'Kérjük olvassa a következő fontos információkat mielőtt folytatja a telepítést. Az információk segíteni fognak abba, hogy eldöntse ezúttal készen áll-e az alkalmazás telepítésére.',

    'LBL_WELCOME_CHOOSE_LANGUAGE' => '<b>Válasszon nyelvet</b>',
    'LBL_WELCOME_SETUP_WIZARD' => 'Telepítő varázsló',
    'LBL_WIZARD_TITLE' => 'SuiteCrm Telepítővarázsló: ',
    'LBL_YES' => 'Igen',

    'LBL_PATCHES_TITLE' => 'Legutóbbi javítások telepítése',
    'LBL_MODULE_TITLE' => 'Nyelvi csomagok telepítése',
    'LBL_PATCH_1' => 'Ha kihagyná ezt a lépést kattintson a Következőre.',
    'LBL_PATCH_TITLE' => 'Rendszerjavítás',
    'LBL_PATCH_READY' => 'A következő javítás(ok) telepítésre előkészítve:',
    'LBL_SESSION_ERR_DESCRIPTION' => "SuiteCRM miközben e kiszolgálóval kapcsolatban van PHP munkameneteket használ a lényeges információk tárolására. A PHP telepítése nem tartalmazza a megfelelő munkamenet beállításokat.
											<br><br>Jellemző téves beállítás, hogy a <b>'session.save_path'</b> változó nem mutat valós könyvtárra. <br>
											<br> Kérem javítsa a <a target=_new href='http://us2.php.net/manual/en/ref.session.php'>PHP beállításokat</a> a php.ini fájlban, amely az alábbi helyen található.",
    'LBL_SESSION_ERR_TITLE' => 'PHP munkamenet konfigurációs hiba',
    'LBL_SYSTEM_NAME' => 'Rendszer név',
    'LBL_COLLATION' => 'Rendezési beállítások',
    'LBL_REQUIRED_SYSTEM_NAME' => 'Adjon meg rendszernevet a SuiteCRM munkamenetnek.',
    'LBL_PATCH_UPLOAD' => 'Válassza ki a patch fájlt a helyi számítógépéről',
    'LBL_INCOMPATIBLE_PHP_VERSION' => 'Php 5-ös verzió vagy újabb szükséges.',
    'LBL_MINIMUM_PHP_VERSION' => 'Szükséges minimum Php verzó az 5.1.0. Ajánlott a Php verziója 5.2.x.',
    'LBL_YOUR_PHP_VERSION' => 'Az Ön által használt php verzió',
    'LBL_RECOMMENDED_PHP_VERSION' => ' Ajánlott php verzió 5.2.x)',
    'LBL_BACKWARD_COMPATIBILITY_ON' => 'Php visszamenőleges kompatibilitási mód be van kapcsolva. Állítsa zend.ze1_compatibility_mode -ot  off-ra.',
    'LBL_STREAM' => 'PHP lehetővé teszi, hogy használja a stream-et',

    'advanced_password_new_account_email' => array(
        'subject' => 'Új felhasználói fiók információ',
        'type' => 'rendszer',
        'description' => 'Ezt a mintát használom, amikor a Rendszergazda új kódszót küld a felhasználó számára.',
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Íme felhasználóneve és ideiglenes jelszava:</p><p>Felhasználónév : $contact_user_user_name </p><p>Jelszó : $contact_user_user_hash </p><br><p>$config_site_url</p><br><p>Ha belép szükség lehet a fenti jelszó megváltoztatására.</p>   </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Íme a felhasználóneve és az ideiglenes jelszava:
Felhasználónév : $contact_user_user_name
Jelszó : $contact_user_user_hash

$config_site_url

Miután jelszavával belépett szükséges lehet a jelszó megváltoztatása.
 ',
        'name' => 'Rendszer által létrehozott kódszó email',
    ),
    'advanced_password_forgot_password_email' => array(
        'subject' => 'Jelszó visszaállítása',
        'type' => 'rendszer',
        'description' => "Ezt a template-et szoktam kiküldeni a felhasználónak egy kattintható linkkel, mellyel alaphelyzetbe állíthatja felhasználói jelszavát.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Nemrégiben kérte a $contact_user_pwd_last_changed -on jelszavának alaphelyzetbe állítását. </p><p>Kattintson az alábbi linkre jelszavának alaphelyzetbe állításához:</p><p> $contact_user_link_guid </p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            '
Nemrégiben kérte a $contact_user_pwd_last_changed -on jelszavának alaphelyzetbe állítását.

Kattintson az alábbi linkre jelszabának alaphelyzetbe állításához:

$contact_user_link_guid',
        'name' => 'Elfelejtett jelszó email',
    ),


    'two_factor_auth_email' => array(
        'subject' => 'Kétlépcsős hitelesítés kód',
        'type' => 'rendszer',
        'description' => "Ezt a sablont használom, amikor a felhasználónak elküldöm a kódot a kétlépcsős hitelesítéshez.",
        'body' => '<div><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width="550" align=\"\&quot;\&quot;center\&quot;\&quot;\"><tbody><tr><td colspan=\"2\"><p>Kéttényezős azonosító kód <b>$code</b>.</p>  </td>         </tr><tr><td colspan=\"2\"></td>         </tr> </tbody></table> </div>',
        'txt_body' =>
            'Kétlépcsős hitelesítés kódja a $code.',
        'name' => 'Kétlépcsős hitelesítés email',
    ),

    // SMTP settings

    'LBL_FROM_NAME' => '"Feladó" neve:',
    'LBL_FROM_ADDR' => '"Feladó" cím:',

    'LBL_WIZARD_SMTP_DESC' => 'Adjon meg egy email fiókot, amin keresztül ki tudja küldeni az olyan email-eket, mint az értesítések és az új felhasználó jelszava. A SuiteCRM által küldött email-eket a felhasználók úgy kapják meg, mintha a megadott fiók küldte volna.',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Válasszon Email szolgáltatót:',

    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Egyéb',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP szerver specifikációja',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Mail szerver:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP hitelesítés:',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'SMTP engedélyezése SSL vagy TLS kapcsolaton keresztül?',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-mail cím:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail jelszó:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Engedélyezi a felhasználónak a kimenő email-ek fiókjának az elérését:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Ha ezt a beállítást választja, akkor minden felhasználó képes lesz email-eket küldeni ugyanazzal a kimenő email fiók hozzáféréssel, amin keresztül a rendszer értesítések és riasztások történnek. Ha a beállítás nincs kiválasztva, a felhasználók továbbra is használhatják a kimenő levelek szerverét a saját adataik megadásakor.',

    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Jelszó:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail azonosító:',

    'LBL_EXCHANGE_SMTPPASS' => 'Exchange jelszó:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange felhasználónév:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Kiszolgáló szerver:',


    'LBL_MAIL_SMTPUSER' => 'SMTP felhasználónév',
    'LBL_MAIL_SMTPPASS' => 'SMTP jelszó:',

    // Branding

    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Adja meg szervezetének nevét és logóját a SuiteCRM-védjegy lecseréléséhez.',
    'SYSTEM_NAME_WIZARD' => 'Név:',
    'SYSTEM_NAME_HELP' => 'Ez a név jelenik meg címként a böngésző címsorában',
    'NEW_LOGO' => 'Válassza ki a logót:',
    'NEW_LOGO_HELP' => 'A képformátum .png és .jpg lehet. legnagyobb magassága 170 pixel, szélessége 450 pixel. Bármely kép, ami feltöltésre kerül ez alapján méreteződik.',
    'COMPANY_LOGO_UPLOAD_BTN' => 'Feltöltés',
    'CURRENT_LOGO' => 'A felületen megjelenő céglogó:',
    'CURRENT_LOGO_HELP' => 'Ez a logó jelenik meg a SuiteCRM alkalmazás belépőképernyőjének közepén.',


    //Scenario selection of modules
    'LBL_WIZARD_SCENARIO_TITLE' => 'Szcenárió kiválasztása',
    'LBL_WIZARD_SCENARIO_DESC' => 'Ezzel biztosítjuk a megjelenített modulok kívánalmainak megfelelő személyre szabhatóságát. Minden modul engedélyezhető telepítést követően az adminisztrációs felületről.',
    'LBL_WIZARD_SCENARIO_EMPTY' => 'Jelenleg nincs beállított forgatókönyv a konfigurációs fájlban (config.php)',


    // System Local Settings


    'LBL_LOCALE_TITLE' => 'Rendszer Nyelvi Beállítások',
    'LBL_WIZARD_LOCALE_DESC' => 'Állítsa be az adatok megjelenítését a SuiteCRM-ban a földrajzi elhelyezkedésének megfelelően. Ezek lesznek az alapértelmezett beállítások, de a felhasználók meg tudják adni a saját beállításaikat.',
    'LBL_DATE_FORMAT' => 'Dátum formátum:',
    'LBL_TIME_FORMAT' => 'Idő formátum:',
    'LBL_TIMEZONE' => 'Időzóna:',
    'LBL_LANGUAGE' => 'Nyelv:',
    'LBL_CURRENCY' => 'Pénznem',
    'LBL_CURRENCY_SYMBOL' => 'Pénznem szimbólum:',
    'LBL_CURRENCY_ISO4217' => 'ISO 4217-es devizakód:',
    'LBL_NUMBER_GROUPING_SEP' => 'Ezres elválasztó',
    'LBL_DECIMAL_SEP' => 'Tizedesjel',
    'LBL_NAME_FORMAT' => 'Felhasználónév formátuma:',
    'UPLOAD_LOGO' => 'Kérjük várjon, logo feltöltése...',
    'ERR_UPLOAD_FILETYPE' => 'Fájl típus nem engedélyezett, töltsön fel jpeg-et vagy png-t.',
    'ERR_LANG_UPLOAD_UNKNOWN' => 'Ismeretlen fájl feltöltési hiba.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_INI_SIZE' => 'A feltöltött fájl mérete meghaladja a php.ini-ben beállított upload_max_filesize-t.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_FORM_SIZE' => 'A feltöltött fájl mérete meghaladja a MAX_FILE_SIZE beállítást, amit a HTML formban megadott.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_PARTIAL' => 'A feltöltött fájlt csak részben töltődött fel.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_FILE' => 'A feltöltés sikertelen volt.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_NO_TMP_DIR' => 'Hiányzik egy ideiglenes mappa.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_CANT_WRITE' => 'Nem sikerült lemezre írni a fájlt.',
    'ERR_UPLOAD_FILE_UPLOAD_ERR_EXTENSION' => 'Egy PHP kiterjesztés megállította a feltöltést. PHP nem biztosít lehetőséget annak megállapítására, hogy melyik kiterjesztés okozta a fájl feltöltés megszakítását.',

    'LBL_INSTALL_PROCESS' => 'Telepítés...',

    'LBL_EMAIL_ADDRESS' => 'Email:',
    'ERR_ADMIN_EMAIL' => 'Rendszergazda E-mail címe nem megfelelő.',
    'ERR_SITE_URL' => 'Weboldalcím hiányos.',

    'STAT_CONFIGURATION' => 'Kapcsolatok beállítása...',
    'STAT_CREATE_DB' => 'Adatbázis létrehozása...',

    'STAT_CREATE_DEFAULT_SETTINGS' => 'Alapértelmezett beállítások létrehozása...',
    'STAT_INSTALL_FINISH' => 'Telepítés befejezése...',
    'STAT_INSTALL_FINISH_LOGIN' => 'Telepítés kész, <a href="%s"> kérem jelentkezzen be...</a>',
    'LBL_LICENCE_TOOLTIP' => 'Kérem fogadja el a licencszerződést',

    'LBL_MORE_OPTIONS_TITLE' => 'További lehetőségek',
    'LBL_START' => '',
    'LBL_DB_CONN_ERR' => 'Adatbázis hiba',
    'LBL_OLD_PHP' => 'Régi PHP verzió észlelve!',
    'LBL_OLD_PHP_MSG' => 'A javasolt PHP verzió a SuiteCRM telepítéséhez: %s <br />A minimum szükséges PHP verzió:%s<br />Ön a következő PHP verziót használja: %s, amely támogtásának végén jár, EOL: <a href="http://php.net/eol.php">http://php.net/eol.php</a>.<br />Kérem frissítse PHP verzióját. ',
    'LBL_OLD_PHP_OK' => 'Tudomásul vettem a kockázatot és folytatom.',

    'LBL_DBCONF_TITLE_USER_INFO_LABEL' => 'Felhasználó',
    'LBL_DBCONFIG_MSG3_LABEL' => 'Adatbázis neve',
    'LBL_DBCONFIG_MSG3' => 'A telepítendő SuiteCRM munkamenetet adatokat tartalmazó adatbázis neve.',
    'LBL_DBCONFIG_MSG2_LABEL' => 'Kiszolgáló Neve',
    'LBL_DBCONFIG_MSG2' => 'A webszerver vagy gép (hoszt) neve, ahol az adatbázis szerver elérhető (mint pl. www.mydomain.com). Ha helyi gépen telepíti, akkor gyorsabb sebesség érdekében jobb, ha \'localhost\'-ot használ \'127.0.0.1\' helyett.',
    'LBL_DBCONFIG_B_MSG1_LABEL' => '', // this label dynamically needed in install/installConfig.php:293
    'LBL_DBCONFIG_B_MSG1' => 'Az adatbázis adminisztrátor - , aki jogosult adatbázis táblákat és felhasználókat létrehozni továbbá szükség esetén írni tudja az adatbázist a SuiteCRM adatbázis létrehozásához - felhasználóneve és jelszava.'
);
