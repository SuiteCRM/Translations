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
    /*'ADMIN_EXPORT_ONLY'=>'Admin export only',*/
    'ADVANCED' => 'Haladóknak',
    'DEFAULT_CURRENCY_ISO4217' => 'ISO 4217-es devizakód',
    'DEFAULT_CURRENCY_NAME' => 'Pénznem neve',
    'DEFAULT_CURRENCY_SYMBOL' => 'Pénznem szimbóluma',
    'DEFAULT_DATE_FORMAT' => 'Alapértelmezett dátumformátum',
    'DEFAULT_DECIMAL_SEP' => 'Tizedesjel',
    'DEFAULT_LANGUAGE' => 'Alapértelmezett nyelv',
    'DEFAULT_SYSTEM_SETTINGS' => 'Felhasználói Felület',
    'DEFAULT_THEME' => 'Alapértelmezett téma',
    'DEFAULT_TIME_FORMAT' => 'Alapértelmezett időformátum',

    'DISPLAY_RESPONSE_TIME' => 'Szerver válaszidő kijelzése',

    'IMAGES' => 'Logók',
    'LBL_ALLOW_USER_TABS' => 'Felhasználó engedélyezése a fülek elrejtéséhez',
    'LBL_CONFIGURE_SETTINGS_TITLE' => 'Beállítások módosítása',
    'LBL_LOGVIEW' => 'Napló megtekintése',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP hitelesítés:',
    'LBL_MAIL_SMTPPASS' => 'SMTP jelszó:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Mail szerver:',
    'LBL_MAIL_SMTPUSER' => 'SMTP felhasználónév',
    'LBL_MAIL_SMTP_SETTINGS' => 'SMTP szerver specifikációja',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Válasszon Email szolgáltatót:',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Jelszó:',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail azonosító:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail jelszó:',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-mail cím:',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange jelszó:',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange felhasználónév:',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Kiszolgáló szerver:',
    'LBL_ALLOW_DEFAULT_SELECTION' => 'Engedélyezi a felhasználónak a kimenő email-ek fiókjának az elérését:',
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Ha ezt a beállítást választja, akkor minden felhasználó képes lesz email-eket küldeni ugyanazzal a kimenő email fiók hozzáféréssel, amin keresztül a rendszer értesítések és riasztások történnek. Ha a beállítás nincs kiválasztva, a felhasználók továbbra is használhatják a kimenő levelek szerverét a saját adataik megadásakor.',
    'LBL_MAILMERGE' => 'Körlevél',
    'LBL_MIN_AUTO_REFRESH_INTERVAL' => 'Minimum Dashlet automatikus frissítés intervallium',
    'LBL_MIN_AUTO_REFRESH_INTERVAL_HELP' => 'Ez a minimum érték, amit kiválaszthat a dashlet-ek automatikus frissítéséhez. Kapcsolja ki a "Soha" opciót az automatikus újra frissítéshez.',
    'LBL_MODULE_FAVICON' => 'A kijelző modul ikont favikonként használja',
    'LBL_MODULE_FAVICON_HELP' => 'Ha egy modulban van egy ikon a böngésző fülön, akkor a modul ikonját használja favikonként és ne sablonjáét.',
    'LBL_MODULE_NAME' => 'Beállítások módosítása',
    'LBL_MODULE_ID' => 'Konfiguráló',
    'LBL_MODULE_TITLE' => 'Felhasználói Felület',
    'LBL_NOTIFY_FROMADDRESS' => '"Feladó" cím:',
    'LBL_NOTIFY_SUBJECT' => 'Email tárgya:',

    'LBL_PROXY_AUTH' => 'Jogosultság-ellenőrzés?',
    'LBL_PROXY_HOST' => 'Proxyállomás',
    'LBL_PROXY_ON_DESC' => 'Állítsa be a proxy szerver címét és hitelesítési beállításait',
    'LBL_PROXY_ON' => 'Használjon proxy szervert?',
    'LBL_PROXY_PASSWORD' => 'Jelszó',
    'LBL_PROXY_PORT' => 'Port',
    'LBL_PROXY_TITLE' => 'Proxy Beállítások',
    'LBL_PROXY_USERNAME' => 'Felhasználói név',
    'LBL_RESTORE_BUTTON_LABEL' => 'Visszaállítás',
    'LBL_SYSTEM_SETTINGS' => 'Beállítások módosítása',
    'LBL_USE_REAL_NAMES' => 'Felhasználók teljes nevének megjelenítése',
    'LBL_USE_REAL_NAMES_DESC' => 'A felhasználó teljes nevét jelenítse meg a Felhasználónév helyett a hozzárendelt mezőkben.',
    'LBL_DISALBE_CONVERT_LEAD' => 'Érdeklődők konvertálása műveletet letiltja konvertált érdeklődőknél',
    'LBL_DISALBE_CONVERT_LEAD_DESC' => 'Ha egy érdeklődőt már konvertált, akkor ezen opció engedélyezése eltávolítja az érdeklődő konvertálása műveletet.',
    'LBL_ENABLE_ACTION_MENU' => 'Műveletek megjelenítése a menükben',
    'LBL_ENABLE_ACTION_MENU_DESC' => 'Válassza ki ezt az opciót a RészletesNézet és alpanel műveletek legördülő menüben történő megjelenítésére. Ha nincs kijelölve, akkor a műveletek külön gombként jelennek meg.',
    'LBL_ENABLE_INLINE_EDITING_LIST' => 'Inline szerkesztés engedélyezése listanézet módban',
    'LBL_ENABLE_INLINE_EDITING_LIST_DESC' => 'Bejelölésével engedélyezheti a mezők Inline szerkesztését listanézetben. Ha nincs kijelölve, úgy listanézetben az Inline szerkesztés nem engedélyezett.',
    'LBL_ENABLE_INLINE_EDITING_DETAIL' => 'Inline szerkesztés engedélyezése részletes nézet módban',
    'LBL_ENABLE_INLINE_EDITING_DETAIL_DESC' => 'Bejelölésével engedélyezheti az Inline szerkesztést a részletes nézet mezőinél. Ha kijelöletlen Inline szerkesztés le lesz tiltva a részlet nézetben.',
    'LBL_HIDE_SUBPANELS' => 'Összecsukott részletek',
    'LIST_ENTRIES_PER_LISTVIEW' => 'Listanézet, elemek száma oldalanként',
    'LIST_ENTRIES_PER_SUBPANEL' => 'Alfejezetek per oldal',
    'LOG_MEMORY_USAGE' => 'Napló memória használat',
    'LOG_SLOW_QUERIES' => 'Napló lassú lekérdezések',
    'CURRENT_LOGO' => 'A felületen megjelenő céglogó:',
    'CURRENT_LOGO_HELP' => 'Ez a logó jelenik meg a SuiteCRM alkalmazás belépőképernyőjének közepén.',
    'NEW_LOGO' => 'Válassza ki a logót:',
    'NEW_LOGO_HELP' => 'A képformátum .png és .jpg lehet. legnagyobb magassága 170 pixel, szélessége 450 pixel. Bármely kép, ami feltöltésre kerül ez alapján méreteződik.',
    'NEW_LOGO_HELP_NO_SPACE' => 'A képformátum .png és .jpg lehet. legnagyobb magassága 170 pixel, szélessége 450 pixel. Bármely kép, ami feltöltésre kerül ez alapján méreteződik.',
    'SLOW_QUERY_TIME_MSEC' => 'Lassú lekérdezés idő küszöbértéke (ms)',
    'STACK_TRACE_ERRORS' => 'Hiba verem megjelenítése',
    'UPLOAD_MAX_SIZE' => 'Maximális feltöltési méret',
    'VERIFY_CLIENT_IP' => 'Felhasználói ip cím ellenőrzése',
    'LOCK_HOMEPAGE' => 'Jelölje pipával, ha a Felhasználónak nem engedélyezi honlapjának testre szabhasát.',
    'LOCK_SUBPANELS' => 'Pipával jelölje az alfejezetek testreszabhatóságának tiltását',
    'MAX_DASHLETS' => 'SuiteCRM Dashletek maximális száma a honlapon',
    'SYSTEM_NAME' => 'Rendszer neve:',
    'SYSTEM_NAME_WIZARD' => 'Név:',
    'SYSTEM_NAME_HELP' => 'Ez a név jelenik meg címként a böngésző címsorában',
    'LBL_LDAP_TITLE' => 'LDAP támogatás',
    'LBL_LDAP_ENABLE' => 'LDAP autentikáció engedélyezése',
    'LBL_LDAP_SERVER_HOSTNAME' => 'Szerver:',
    'LBL_LDAP_SERVER_PORT' => 'Port száma:',
    'LBL_LDAP_ADMIN_USER' => 'Felhasználó neve:',
    'LBL_LDAP_ADMIN_USER_DESC' => 'Az LDAP-felhasználó a keresésére szolgál. Ez lehet teljesen minősített.',
    'LBL_LDAP_ADMIN_PASSWORD' => 'Jelszó:',
    'LBL_LDAP_AUTHENTICATION' => 'Azonosítás:',
    'LBL_LDAP_AUTHENTICATION_DESC' => 'Hozza létre a kapcsolatot az LDAP-kiszolgálóval egy adott felhasználó hitelesítő adataival. Ha nem ad meg felhasználói adatokat, akkor anonymousként próbálom létrehozni.',
    'LBL_LDAP_AUTO_CREATE_USERS' => 'Automatikus felhasználó létrehozás:',
    'LBL_LDAP_USER_DN' => 'Felhasználó DN:',
    'LBL_LDAP_GROUP_DN' => 'Csoport DN:',
    'LBL_LDAP_GROUP_DN_DESC' => 'Például: ou=csoport, dc=például, dc=com',
    'LBL_LDAP_USER_FILTER' => 'Felhasználó szűrő:',
    'LBL_LDAP_GROUP_MEMBERSHIP' => 'Csoport tagjai:',
    'LBL_LDAP_GROUP_MEMBERSHIP_DESC' => 'A felhasználóknak egy meghatározott csoport tagjának kell lennie',
    'LBL_LDAP_GROUP_USER_ATTR' => 'Felhasználó attribútum:',
    'LBL_LDAP_GROUP_USER_ATTR_DESC' => 'A személy egyedi azonosítóját használhatja annak ellenőrzésére, hogy tagja-e a csoportnak. Például: uid',
    'LBL_LDAP_GROUP_ATTR_DESC' => 'A Csoport tulajdonságai szűrésre használhatóak, ellentétben a Felhasználók tulajdonságaival. Például:memberUid',
    'LBL_LDAP_GROUP_ATTR' => 'Csoport attribútum:',
    'LBL_LDAP_USER_FILTER_DESC' => 'Any additional filter params to apply when authenticating users e.g.<em>is_suitecrm_user=1 or (is_suitecrm_user=1)(is_sales=1)</em>',
    'LBL_LDAP_LOGIN_ATTRIBUTE' => 'Login attribútum:',
    'LBL_LDAP_BIND_ATTRIBUTE' => 'Kötés attribútuma:',
    'LBL_LDAP_BIND_ATTRIBUTE_DESC' => 'For Binding the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;dn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;uid] ',
    'LBL_LDAP_LOGIN_ATTRIBUTE_DESC' => 'For searching for the LDAP User Examples:[<b>AD:</b>&nbsp;userPrincipalName] [<b>openLDAP:</b>&nbsp;cn] [<b>Mac&nbsp;OS&nbsp;X:</b>&nbsp;dn] ',
    'LBL_LDAP_SERVER_HOSTNAME_DESC' => 'Példa: ldap.example.com vagy ldaps://ldap.example.com for SSL',
    'LBL_LDAP_SERVER_PORT_DESC' => 'Példa: 389 vagy 636 az SSL',
    'LBL_LDAP_GROUP_NAME' => 'Csoport név:',
    'LBL_LDAP_GROUP_NAME_DESC' => 'Például <em>cn=suitecrm</em>',
    'LBL_LDAP_USER_DN_DESC' => 'Például: ou=emberek, dc=példa, dc=com',
    'LBL_LDAP_AUTO_CREATE_USERS_DESC' => 'Ha egy hitelesített felhasználó létrehozása a SuiteCRM-ban, ha nem létezik.',
    'LBL_LDAP_ENC_KEY' => 'A titkosítási kulcs:',
    'DEVELOPER_MODE' => 'Fejlesztői mód',

    'SHOW_DOWNLOADS_TAB' => 'Letöltés Fül Megjelenítés',
    'SHOW_DOWNLOADS_TAB_HELP' => 'Kiválasztásakor a letöltés fül megjelennek a felhasználói beállításoknál, és elérhetővé teszi a felhasználók számára a SuiteCRM pluginek és egyéb rendelkezésre álló fájlokhoz történő hozzáférést',
    'LBL_LDAP_ENC_KEY_DESC' => 'A SOAP hitelesítés használata esetén az LDAP.',
    'LDAP_ENC_KEY_NO_FUNC_DESC' => 'A php_mcrypt kiterjesztés engedélyezni kell a php.ini fájlban.',
    'LDAP_ENC_KEY_NO_FUNC_OPENSSL_DESC' => 'Az openssl-bővítmény engedélyezni kell a php.ini fájlban.',
    'LBL_ALL' => 'Összes',
    'LBL_MARK_POINT' => 'Pont kijelölése',
    'LBL_NEXT_' => 'Tovább>>',
    'LBL_REFRESH_FROM_MARK' => 'Frissítés a jelöléstől',
    'LBL_SEARCH' => 'Keres:',
    'LBL_REG_EXP' => 'Reguláris kifejezés:',
    'LBL_IGNORE_SELF' => 'Önmaga figyelmenkívűl hagyása:',
    'LBL_MARKING_WHERE_START_LOGGING' => 'Bejelentkezés helyének megjelölése',
    'LBL_DISPLAYING_LOG' => 'Napló megjelenítése',
    'LBL_YOUR_PROCESS_ID' => 'Az Ön folyamat azonosítója',
    'LBL_YOUR_IP_ADDRESS' => 'Az Ön IP címe',
    'LBL_IT_WILL_BE_IGNORED' => 'Ezt figyelmen kívül hagyja',
    'LBL_LOG_NOT_CHANGED' => 'Napló nem változott',
    'LBL_ALERT_JPG_IMAGE' => 'A képfájl formátuma JPEG legyen. Töltsön fel egy új fájlt, a fájl kiterjesztése legyen JPG.',
    'LBL_ALERT_TYPE_IMAGE' => 'A képfájl formátuma JPEG vagy PNG legyen. Töltsön fel egy új fájlt, a fájl kiterjesztése legyen JPG vagy PNG.',
    'LBL_ALERT_SIZE_RATIO' => 'A kép képaránya 1:1-10:1 között legyen. A kép átméretezésre kerül.',
    'ERR_ALERT_FILE_UPLOAD' => 'Hiba történt a kép feltöltése közben.',
    'LBL_LOGGER' => 'Naplózási beállítások',
    'LBL_LOGGER_FILENAME' => 'Naplófájl neve',
    'LBL_LOGGER_FILE_EXTENSION' => 'Kiterjesztés',
    'LBL_LOGGER_MAX_LOG_SIZE' => 'Maximális naplóméret',
    'LBL_STACK_TRACE' => 'Stack nyomkövetés engedélyezése',
    'LBL_LOGGER_DEFAULT_DATE_FORMAT' => 'Alapértelmezett dátumformátum',
    'LBL_LOGGER_LOG_LEVEL' => 'Napló szint',
    'LBL_LEAD_CONV_OPTION' => 'Érdeklődők konvertálása opciók',
    'LEAD_CONV_OPT_HELP' => "<b>Copy</b> - Creates and relates copies of all of the Lead's activities to new records that are selected by the user during conversion. Copies are created for each of the selected records.<br><br><b>Move</b> - Moves all of the Lead's activities to a new record that is selected by the user during conversion.<br><br><b>Do Nothing</b> - Does nothing with the Lead's activities during conversion. The activities remain related to the Lead only.",
    'LBL_CONFIG_AJAX' => 'AJAX felhasználói felület konfigurálása',
    'LBL_CONFIG_AJAX_DESC' => 'Enable or disable the use of the AJAX UI for specific modules.',
    'LBL_LOGGER_MAX_LOGS' => 'Naplóbejegyzések maximális száma (gördítés előtt)',
    'LBL_LOGGER_FILENAME_SUFFIX' => 'Hozzáfűzés a fájlnév után',
    'LBL_VCAL_PERIOD' => 'vCal frissítési időintervalluma:',
    'LBL_IMPORT_MAX_RECORDS' => 'Import - sorok maximális száma:',
    'LBL_IMPORT_MAX_RECORDS_HELP' => 'Adja meg, hány sort enged fájlok importálása.<br>Ha az importfájl sorok száma meghaladja ezt a számot, a felhasználó értesítést kap.<br>Ha nem ad meg számot, akkor korlátlan számú sor importálása engedélyezett.',
    'vCAL_HELP' => 'Használja ezt a beállítást annak meghatározására, hogy az aktuális dátumhoz képest hány hónapra előre lehessen látni a Szabad/Foglalt információt a közzétett hívásoknál és találkozóknál.<br />A Szabad/Foglalt információ közzétételének kikapcsolásához írjon be 0-t. A minimum 1 hónap, a maximum 12 hónap.',

// Wizard
    //Wizard Scenarios
    'LBL_WIZARD_SCENARIOS' => 'Forgatókönyveid',
    'LBL_WIZARD_SCENARIOS_EMPTY_LIST' => 'Nincs forgatókönyv van beállítva',
    'LBL_WIZARD_SCENARIOS_DESC' => 'Jelölje ki, mely forgatókönyvek jellemzőek a telepítésére. Ezeket a beállításokat módosíthatja a telepítés után.',

    'LBL_WIZARD_TITLE' => 'Admin varázsló',
    'LBL_WIZARD_WELCOME_TAB' => 'Üdvözöljük',
    'LBL_WIZARD_WELCOME_TITLE' => 'Üdvözli Önt a SuiteCRM!',
    'LBL_WIZARD_WELCOME' => 'Click <b>Next</b> to brand, localize and configure SuiteCRM now. If you wish to configure SuiteCRM later, click <b>Skip</b>.',
    'LBL_WIZARD_NEXT_BUTTON' => 'Következő>',
    'LBL_WIZARD_BACK_BUTTON' => '<Vissza',
    'LBL_WIZARD_SKIP_BUTTON' => 'Átugrás',
    'LBL_WIZARD_CONTINUE_BUTTON' => 'Tovább',
    'LBL_WIZARD_FINISH_TITLE' => 'Ön máris használja a SuiteCRM-et!',
    'LBL_WIZARD_SYSTEM_TITLE' => 'Branding',
    'LBL_WIZARD_SYSTEM_DESC' => 'Adja meg szervezetének nevét és logóját a SuiteCRM-védjegy lecseréléséhez.',
    'LBL_WIZARD_LOCALE_DESC' => 'Állítsa be az adatok megjelenítését a SuiteCRM-ban a földrajzi elhelyezkedésének megfelelően. Ezek lesznek az alapértelmezett beállítások, de a felhasználók meg tudják adni a saját beállításaikat.',
    'LBL_WIZARD_SMTP_DESC' => 'Adjon meg egy email fiókot, amin keresztül ki tudja küldeni az olyan email-eket, mint az értesítések és az új felhasználó jelszava. A SuiteCRM által küldött email-eket a felhasználók úgy kapják meg, mintha a megadott fiók küldte volna.',
    'LBL_LOADING' => 'Betöltés...' /*for 508 compliance fix*/,
    'LBL_DELETE' => 'Törlés' /*for 508 compliance fix*/,
    'LBL_WELCOME' => 'Üdvözöljük' /*for 508 compliance fix*/,
    'LBL_LOGO' => 'Logó' /*for 508 compliance fix*/,
    'LBL_ENABLE_HISTORY_CONTACTS_EMAILS' => 'Show related contacts\' emails in History subpanel for modules',
);
