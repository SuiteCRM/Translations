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


    'LBL_RE' => 'ODG:',

    'ERR_BAD_LOGIN_PASSWORD' => 'Netačno korisničko ime i lozinka',
    'ERR_INI_ZLIB' => 'Ne mogu da trajno isključim Zlib kompresiju. \"Test podešavanja\" možda beće uspeti.',
    'ERR_NO_IMAP' => 'Nisu nađene IMAP biblioteke. Molim, rešite ovaj problem pre nego što nastavite sa dolaznom e-poštom',
    'ERR_NO_OPTS_SAVED' => 'Optimalna podešavanja za Vaš nalog dolazeće elektronske pošte nisu sačuvana . Molim, pregledajte podešavanja',
    'ERR_TEST_MAILBOX' => 'Molim, proverite Vaša podešavanja i pokušajte ponovo.',
    'ERR_INVALID_PORT' => 'Invalid Port',

    'LBL_ASSIGN_TO_USER' => 'Dodeli korisniku',
    'LBL_AUTOREPLY' => 'Šabloni za automatsko odgovaranje',
    'LBL_AUTOREPLY_HELP' => 'Izaberite automatski odgovor da obavestite pošiljaoce elektonske pošte da je njihov odgovor primljen.',
    'LBL_BASIC' => 'Osnovna podešavanja',
    'LBL_CASE_MACRO' => 'Makro slučaja',
    'LBL_CASE_MACRO_DESC' => 'Postavite makro koji će biti parsiran i korišćen da bi povezao uveženu elektronsku poruku sa slučajem.',
    'LBL_CASE_MACRO_DESC2' => 'Postavite na bilo koju vrednost, ali sačuvajte <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Zatvori prozor',
    'LBL_CREATE_TEMPLATE' => 'Kreiraj',
    'LBL_DELETE_SEEN' => 'Obriši pročitane poruke nakon uvoza',
    'LBL_EDIT_TEMPLATE' => 'Izmeni',
    'LBL_EMAIL_OPTIONS' => 'Opcija rukovanja sa e-poštom',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opcije rukovanja odbačenom',
    'LBL_FILTER_DOMAIN_DESC' => 'Navedite domen kojem se neće slati automatski odgovori.',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Izaberite kako biste automatski pravili zapise email poruka za sve dolazeće email poruke.',
    'LBL_FILTER_DOMAIN' => 'Bez automatskog slanje odgovora u ovaj domen',
    'LBL_FIND_SSL_WARN' => '<br>Za testiranje SSL-a  potrebno je izvesno vreme. Molim, budite strpljivi.<br>',
    'LBL_FROM_ADDR' => 'Adresa pošiljaoca',
    'LBL_FROM_ADDR_DESC' => 'The email address provided here might not appear in the &quot;From&quot; address section of the email sent due to restrictions imposed by the mail service provider. In these circumstances, the email address defined in the outgoing mail server will be used.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Ime pošiljaoca',
    'LBL_GROUP_QUEUE' => 'Dodeljeno grupi',
    'LBL_HOME' => 'Početna strana',
    'LBL_LIST_MAILBOX_TYPE' => 'Upotreba naloga elektronske pošte',
    'LBL_LIST_NAME' => 'Ime:',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Tip',
    'LBL_LIST_SERVER_URL' => 'Mail server:',
    'LBL_SERVER_ADDRESS' => 'Server Address',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Korisničko ime',
    'LBL_USERNAME' => 'Korisničko ime',
    'LBL_MAILBOX_DEFAULT' => 'Prijemno sanduče',
    'LBL_MAILBOX_SSL' => 'Koristi SSL',
    'LBL_MAILBOX_TYPE' => 'Moguće akcije',
    'LBL_DISTRIBUTION_METHOD' => 'Metod distribuiranja',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Kreiraj šablon odgovora za slučaj',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Izaberite automatski odgovor da obavesti po pošiljaoce elektonske pošte koji obaveštava da je slučaj kreiran. Tema elektonske poruke sadrži broj korisničkog slučaja u Temi koja se pridržava Case Macro podešavanja. Ovaj odgovor se šalje samo kada je primljena prva elektronska poruka od pošiljaoca.',
    'LBL_MAILBOX' => 'Nadgledane fascikle',
    'LBL_TRASH_FOLDER' => 'Folder za otpatke',
    'LBL_SENT_FOLDER' => 'Fascikla za poslate',
    'LBL_SELECT' => 'Izaberi',
    'LBL_MARK_READ_NO' => 'elektornska pošta označena kao obrisana nakon uvoza',
    'LBL_MARK_READ_YES' => 'Elektronska pošta koja je ostala na serveru nakon uvoza',
    'LBL_MARK_READ' => 'Ostavite poruke na serveru',
    'LBL_MAX_AUTO_REPLIES' => 'Broj automatskih odgovora',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Podesite maksimalan broj automatskih odgovora za slanje na jedinstvenu e-adresu u toku 24 sata.',
    'LBL_PERSONAL_MODULE_NAME' => 'Lični Email Nalog',
    'LBL_CREATE_CASE' => 'Napravi Slučaj iz Elektronske Pošte',
    'LBL_CREATE_CASE_HELP' => 'Izaberite kako biste automatski pravili nove slučajeve za sve dolazeće email poruke.',
    'LBL_MODULE_NAME' => 'Group Mail Account',
    'LBL_BOUNCE_MODULE_NAME' => 'Pošta rukovanja odbačenom',
    'LBL_MODULE_TITLE' => 'Dolazni email',
    'LBL_NAME' => 'Ime',
    'LBL_NONE' => 'Nijedno',
    'LBL_ONLY_SINCE_NO' => 'Ne. Proverite ponovo sve elektronske poruke na serveru za elektronsku poštu.',
    'LBL_ONLY_SINCE_YES' => 'Da.',
    'LBL_PASSWORD' => 'Lozinka',
    'LBL_EMAIL_PASSWORD' => 'Lozinka',
    'LBL_POP3_SUCCESS' => 'Uspešno se testirali POP3 konekciju.',
    'LBL_POPUP_TITLE' => 'Test Podešavanja',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Izaberite prihvaćen(e) folder(e)',
    'LBL_SELECT_TRASH_FOLDERS' => 'Izaberite odbačeni folder',
    'LBL_SELECT_SENT_FOLDERS' => 'Izaberite poslate fascikle',
    'LBL_DELETED_FOLDERS_LIST' => 'Sledeći folder(i) %s ili ne postoje ili su obrisani sa servera',
    'LBL_PORT' => 'Port servera elektronske pošte',
    'LBL_REPLY_TO_NAME' => 'Pošalji odgovor na ime',
    'LBL_REPLY_TO_ADDR' => 'Pošalji odgovor na adresu',
    'LBL_SAME_AS_ABOVE' => 'Koristi ime/e-adresu pošiljaoca',
    'LBL_SERVER_OPTIONS' => 'Napredna podešavanja',
    'LBL_SERVER_TYPE' => 'Protokol servera elektronske pošte',
    'LBL_SERVER_PORT' => 'Port servera elektronske pošte',
    'LBL_SERVER_URL' => 'Adresa servera elektronske pošte',
    'LBL_SSL_DESC' => 'Ako Vaš server za elektronsku poštu podržava SSL, uključivanjem ove opcije pri uvozu elektronske pošte uključiće se SSL.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'Izabrani tim je pristupio mail nalogu. Ako je izabran grupni folder, tim koji je je dodeljen grupnom folderu pregazi će izabrani tim.',
    'LBL_SSL' => 'Koristi SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Email Body Filter Type',
    'LBL_SYSTEM_DEFAULT' => 'Podrazumevani predložak',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Test Podešavanja',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test Connection Settings',
    'LBL_TEST_SUCCESSFUL' => 'Veza je uspešno uspostavljena.',
    'LBL_TEST_WAIT_MESSAGE' => 'Samo trenutak, molim...',
    'LBL_WARN_IMAP_TITLE' => 'Isključena opcija dolazne elektronske pošte',
    'LBL_WARN_IMAP' => 'Upozorenja:',
    'LBL_WARN_NO_IMAP' => 'Dolazna elektronska pošta <b>ne može</b> da funkcioniše bez IMP c-client baiblioteke uključene/kompajlirane sa PHP modulom. Molimo da kontaktirate Vašeg administratora kako bi rešili ovaj problem.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'New Personal Inbound Email Account',
    'LNK_LIST_CREATE_NEW_GROUP' => 'New Group Inbound Email Account',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'New Case Handling Email Account',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'New Bounce Handling Email Account',
    'LNK_LIST_MAILBOXES' => 'Inbound Email Accounts',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Odlazni email nalozi',
    'LNK_LIST_SCHEDULER' => 'Planeri',
    'LNK_SEED_QUEUES' => 'Početni redovi za timove',
    'LBL_GROUPFOLDER_ID' => 'Id broj grupne fascikle',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Omogućite korisnicima da pošalju mejlove koristeći \"Od\" Ime i Adresu kao odgovor na adresu',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Kada je ova opcija izabrana, From Ime i From E-adresa asocirane sa ovim grupnim e-pošta nalogom će se prikazati kao opcija u From polju u toku pisanja e-pošte za korisnike koji imaju pristup ovom grupnom nalogu.',
    'LBL_STATUS_ACTIVE' => 'Aktivan',
    'LBL_STATUS_INACTIVE' => 'Neaktivan',
    'LBL_IS_PERSONAL' => 'Lični',
    'LBL_IS_GROUP' => 'grupa',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importuj emailove',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Upozorenje: Menjate vaše podešavanje za automatski unos što može rezultirati gubitkom podataka.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Upozorenje',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Drafts',
    'LBL_LIST_TITLE_MY_INBOX' => 'Inbox',
    'LBL_LIST_TITLE_MY_SENT' => 'Poslata el. poruka',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'Arhivirane elektronske poruke',
    'LNK_MY_DRAFTS' => 'Drafts',
    'LNK_MY_INBOX' => 'Email',
    'LNK_VIEW_MY_INBOX' => 'View Email',
    'LNK_QUICK_REPLY' => 'Odgovori',
    'LNK_SENT_EMAIL_LIST' => 'Poslane elektronske poruke:',
    'LBL_EDIT_LAYOUT' => 'Izmeni izgled' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Izmenio',
    'LBL_SERVICE' => 'Usluga',
    'LBL_STORED_OPTIONS' => 'Sačuvane opcije',
    'LBL_GROUP_ID' => 'ID grupe',

    'LBL_OUTBOUND_CONFIGURATION' => 'Outbound Configuration',
    'LBL_CONNECTION_CONFIGURATION' => 'Server Configuration',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Auto Reply Configuration',
    'LBL_CASE_CONFIGURATION' => 'Case Configuration',
    'LBL_GROUP_CONFIGURATION' => 'Group Configuration',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Sigurnosne grupe',


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
    'LBL_DISTRIB_METHOD' => 'Metod distribuiranja',
    'LBL_DISTRIB_OPTIONS' => 'Distribution Options',

    'LBL_DISTRIBUTION_USER' => 'Distribution User',
    'LBL_DISTRIBUTION_USER_ID' => 'Distribution User id',
    'LBL_DISTRIBUTION_USER_NAME' => 'Distribution User',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'External OAuth Connection',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'External OAuth Connection id',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'External OAuth Connection',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'External OAuth Connections',

    'LBL_TYPE' => 'Tip',
    'LBL_AUTH_TYPE' => 'Auth Type',
    'LBL_IS_DEFAULT' => 'Podrazumevano',
    'LBL_SIGNATURE' => 'Potpis',

    'LBL_OWNER_NAME' => 'Vlasnik',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Set as default',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Move Messages To Trash After Import?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
