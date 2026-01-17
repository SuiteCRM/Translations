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


    'LBL_RE' => 'Válasz:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Hibás Login vagy jelszó',
    'ERR_INI_ZLIB' => 'Átmenetileg nem lehet kikapcsolni Zlib tömörítés. "Teszt Beállítás" sikertelen lehet.',
    'ERR_NO_IMAP' => 'Az IMAP könyvtárak nem találhatók. Kérjük, oldja meg ezt a problémát, mielőtt folytatná bejövő Emailek fogadását.',
    'ERR_NO_OPTS_SAVED' => 'Nem az optimális beállításokkal mentette. Kérjük, ellenőrizze a beállításokat',
    'ERR_TEST_MAILBOX' => 'Kérem ellenőrizze a beállításait és próbálja újra.',
    'ERR_INVALID_PORT' => 'Érvénytelen port',

    'LBL_ASSIGN_TO_USER' => 'Felhasználóhoz rendel',
    'LBL_AUTOREPLY' => 'Automata-válasz sablon',
    'LBL_AUTOREPLY_HELP' => 'Válasszon ki egy automatikus válasz Emailt,  amely tájékoztatja a feladót, hogy a CRM rendszer megkapta az üzenetet.',
    'LBL_BASIC' => 'Levelezési fiók információ',
    'LBL_CASE_MACRO' => 'Esemény makró',
    'LBL_CASE_MACRO_DESC' => 'Az itt beállított kifejezést beillesztjük az automatikusan generált válaszlevél tárgy mezőjébe.',
    'LBL_CASE_MACRO_DESC2' => 'A kifejezést tetszőlegesen átírhatja, de őrizze meg a "%1"-et!',
    'LBL_CLOSE_POPUP' => 'Ablak bezárása',
    'LBL_CREATE_TEMPLATE' => 'Létrehozás',
    'LBL_DELETE_SEEN' => 'Importálás után az elolvasott levelek törlése',
    'LBL_EDIT_TEMPLATE' => 'Szerkesztés',
    'LBL_EMAIL_OPTIONS' => 'Email-kezelés beállításai',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Visszapattanó kezelés beállításai',
    'LBL_FILTER_DOMAIN_DESC' => 'Domain megadása, melynek nem kell automatikus választ küldeni',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Minden bejövő levél automatikusan elmentve a CRM-be.',
    'LBL_FILTER_DOMAIN' => 'Nincs automatikus válasz ehhez a domain-hez',
    'LBL_FIND_SSL_WARN' => 'Az SSL tesztelése több időt vehet igénybe. Kérjük a türelmét.',
    'LBL_FROM_ADDR' => 'Küldő cím',
    'LBL_FROM_ADDR_DESC' => 'Az itt megadott e-mail cím nem feltétlenül jelenik meg az e-mail &quot;Feladó&quot; részében az e-mail szolgáltató által bevezetett korlátozások miatt. Ezekben az esetekben a kimenő levelezőszerveren meghatározott e-mail cím lesz használva.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => '"Feladó" neve',
    'LBL_GROUP_QUEUE' => 'Hozzárendelés a Csoporthoz',
    'LBL_HOME' => 'Kezdőlap',
    'LBL_LIST_MAILBOX_TYPE' => 'Levelező fiók használata',
    'LBL_LIST_NAME' => 'Név:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Típus',
    'LBL_LIST_SERVER_URL' => 'Levelező szerver',
    'LBL_SERVER_ADDRESS' => 'Szerver címe',
    'LBL_LIST_STATUS' => 'Állapot',
    'LBL_LOGIN' => 'Felhasználói név',
    'LBL_USERNAME' => 'Felhasználói név',
    'LBL_MAILBOX_DEFAULT' => 'Bejövő levelek',
    'LBL_MAILBOX_SSL' => 'SSL használata',
    'LBL_MAILBOX_TYPE' => 'Lehetséges eljárások',
    'LBL_DISTRIBUTION_METHOD' => 'Elosztási módszer',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Új Eseménykor automatikus - válasz sablon',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Válasszon ki egy automatikus válasz Emailcímet, amelyről tájékoztatja a címzettet, hogy az Eseményt rögzítésre került a CRM rendszerben. Az Email Tárgy sora tartalmazza az Esemény számát. ',
    'LBL_MAILBOX' => 'Megfigyelt mappák',
    'LBL_TRASH_FOLDER' => 'Kuka mappa',
    'LBL_SENT_FOLDER' => 'Elküldöttek mappája',
    'LBL_SELECT' => 'Kiválasztás',
    'LBL_MARK_READ_NO' => 'Importálás után az email-ek jelölése törölt',
    'LBL_MARK_READ_YES' => 'Email-ek a szerveren maradnak  importálás után',
    'LBL_MARK_READ' => 'Hagyja az üzeneteket a szerveren',
    'LBL_MAX_AUTO_REPLIES' => 'Automatikus válaszok száma',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Az automatikus válaszok maximális számának beállítása egy egyedi email címre, 24 órás időszakon belül.',
    'LBL_PERSONAL_MODULE_NAME' => 'Személyes levelező fiók',
    'LBL_CREATE_CASE' => 'Esemény létrehozása email-ből',
    'LBL_CREATE_CASE_HELP' => 'Jelölje be az automatikus Esemény létrehozását a bejövő Emailek esetén.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Visszapattanó postaláda kezelés',
    'LBL_MODULE_TITLE' => 'Bejövő Email',
    'LBL_NAME' => 'Név',
    'LBL_NONE' => 'Semmi',
    'LBL_ONLY_SINCE_NO' => 'Nem. Ellenőrizze újra az összes levelet a mail-szerveren.',
    'LBL_ONLY_SINCE_YES' => 'Igen.',
    'LBL_PASSWORD' => 'Jelszó',
    'LBL_EMAIL_PASSWORD' => 'Jelszó',
    'LBL_POP3_SUCCESS' => 'A POP3 teszt csatlakozás sikeres volt.',
    'LBL_POPUP_TITLE' => 'Teszt beállítások',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Válasszon mappá(ka)t',
    'LBL_SELECT_TRASH_FOLDERS' => 'Válasszon kuka mappát',
    'LBL_SELECT_SENT_FOLDERS' => 'Válasszon elküldött elemek mappát',
    'LBL_DELETED_FOLDERS_LIST' => 'A következő mappa % vagy nem létezik, vagy törölték a szerverről',
    'LBL_PORT' => 'Levelező szerver port',
    'LBL_REPLY_TO_NAME' => '"Válasz" név',
    'LBL_REPLY_TO_ADDR' => '"Válasz" cím:',
    'LBL_SAME_AS_ABOVE' => 'Küldő Neve/Címe',
    'LBL_SERVER_OPTIONS' => 'További beállítások',
    'LBL_SERVER_TYPE' => 'Levelező szerver protokoll',
    'LBL_SERVER_PORT' => 'Levelező szerver port',
    'LBL_SERVER_URL' => 'Levelező szerver cím',
    'LBL_SSL_DESC' => 'Ha a levelezési kiszolgáló támogatja a biztonságos socket kapcsolatokat, bekapcsolása esetén kikényszeríti az SSL kapcsolatot az e-mail importálásakor.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'A kiválasztott csoportnak hozzáférése van a levelező fiókhoz.',
    'LBL_SSL' => 'SSL használata',
    'LBL_STATUS' => 'Állapot',
    'LBL_EMAIL_BODY_FILTERING' => 'Emailtörzs szűrő típusa',
    'LBL_SYSTEM_DEFAULT' => 'Rendszer alapbeállítás',
    'LBL_TEST_BUTTON_TITLE' => 'Teszt',
    'LBL_TEST_SETTINGS' => 'Teszt beállítások',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Kapcsolatbeállítások tesztelése',
    'LBL_TEST_SUCCESSFUL' => 'Csatlakozás sikeresen létrejött.',
    'LBL_TEST_WAIT_MESSAGE' => 'Egy pillanat...',
    'LBL_WARN_IMAP_TITLE' => 'Bejövő email-ek letiltva',
    'LBL_WARN_IMAP' => 'Figyelmeztetések:',
    'LBL_WARN_NO_IMAP' => 'Bejövő Email nem működhet anélkül, hogy az IMAP-c-kliens könyvtárakat képes / összekapcsolni a PHP modullal. Kérjük, lépjen kapcsolatba a rendszergazdával, hogy megoldja ezt a problémát.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Bejövő e-mail fiókok',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Kimenő E-mail fiókok',
    'LNK_LIST_SCHEDULER' => 'Ütemezők',
    'LNK_SEED_QUEUES' => 'Várólisták kiemelése a csoportokból',
    'LBL_GROUPFOLDER_ID' => 'Csoport mappa Id',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'A Küldő nevének és email címének engedélyezése válasz címként a felhasználók részére',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Ha ezt a beállítást választja, a Feladó neve és email címe hozzákapcsolódik a csoport email fiókjához, és megjelenik mint választási lehetőség az email szerkesztése közben a Feladó mezőben azoknak a felhasználóknak, akiknek van hozzáférésük a csoport email fiókjához.',
    'LBL_STATUS_ACTIVE' => 'Aktív',
    'LBL_STATUS_INACTIVE' => 'Inaktív',
    'LBL_IS_PERSONAL' => 'Személyes',
    'LBL_IS_GROUP' => 'csoport',
    'LBL_ENABLE_AUTO_IMPORT' => 'Automatikus email-import',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Figyelmeztetés: Az automatikus import beállításainak megváltoztatása az adatok elvesztésével járhat.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Figyelmeztetés: Az automatikus importot engedélyezni kell az Esemény automatikus létrehozásához.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Piszkozatok',
    'LBL_LIST_TITLE_MY_INBOX' => 'Bejövő',
    'LBL_LIST_TITLE_MY_SENT' => 'Elküldött levelek',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Archivált emailek',
    'LNK_MY_DRAFTS' => 'Piszkozatok',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'E-mail megtekintése',
    'LNK_QUICK_REPLY' => 'Válasz',
    'LNK_SENT_EMAIL_LIST' => 'Email küldése',
    'LBL_EDIT_LAYOUT' => 'Elrendezés szerkesztése' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Módosító',
    'LBL_SERVICE' => 'Szervíz',
    'LBL_STORED_OPTIONS' => 'Tárolt Beállítások',
    'LBL_GROUP_ID' => 'Csoport ID',

    'LBL_OUTBOUND_CONFIGURATION' => 'Kimenő konfiguráció',
    'LBL_CONNECTION_CONFIGURATION' => 'Szerver konfiguráció',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Automatikus válasz konfigurációja',
    'LBL_CASE_CONFIGURATION' => 'Eset konfigurációja',
    'LBL_GROUP_CONFIGURATION' => 'Csoport konfigurációja',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Biztonsági Csoportok',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Outbound Email Account',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'Outbound Email Account id',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Outbound Email Account',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Auto Reply Email Template',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'Auto Reply Email Template id',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Auto Reply Email Template',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Case Email Template',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'Case Email Template id',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Case Email Template',

    'LBL_PROTOCOL' => 'Protocol',
    'LBL_CONNECTION_STRING' => 'Connection String',
    'LBL_DISTRIB_METHOD' => 'Elosztási módszer',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Külső OAuth csatlakozás',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Külső OAuth csatlakozás',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Külső OAuth kapcsolatok',

    'LBL_TYPE' => 'Típus',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Alapértelmezett',
    'LBL_SIGNATURE' => 'Aláírás',

    'LBL_OWNER_NAME' => 'Tulajdonos',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
