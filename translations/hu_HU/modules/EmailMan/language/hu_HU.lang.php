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
    'LBL_SEND_DATE_TIME' => 'Küldés dátuma',
    'LBL_IN_QUEUE' => 'Feldolgozás alatt',
    'LBL_IN_QUEUE_DATE' => 'Várólistára kerülés időpontja',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Csak egész értékek segítségével adja meg, hány e-mailt küldhet tételenként',

    'LBL_ATTACHMENT_AUDIT' => 'elküldve. A tárhelyhasználat csökkentése érdekében nem készült helyi másolat.',
    'LBL_CONFIGURE_SETTINGS' => 'Email beállítások konfigurálása',
    'LBL_CUSTOM_LOCATION' => 'Felhasználó által definiált',
    'LBL_DEFAULT_LOCATION' => 'Alapértelmezett',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'A törölt Email-ekhez kapcsolódó megjegyzések és mellékletek törlése',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Email figyelmeztetési értesítések',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Feliratkozási beállítások',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automatikusan küldjön feliratkozó E-mailt',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Feliratkozó E-mail sablon megerősítése',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Kompatibilis email szerkesztési viselkedés engedélyezése',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Kimenő levelek beállítása',
    'LBL_EMAILS_PER_RUN' => 'Elküldött emailek száma egy kötegben:',
    'LBL_ID' => 'Id',
    'LBL_LIST_CAMPAIGN' => 'Kampány',
    'LBL_LIST_FORM_TITLE' => 'Várólista',
    'LBL_LIST_FROM_NAME' => 'Feladó neve',
    'LBL_LIST_IN_QUEUE' => 'Feldolgozás alatt',
    'LBL_LIST_MESSAGE_NAME' => 'Marketing üzenet',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Címzett Email',
    'LBL_LIST_RECIPIENT_NAME' => 'Címzett neve',
    'LBL_LIST_SEND_ATTEMPTS' => 'Küldés kísérletek',
    'LBL_LIST_SEND_DATE_TIME' => 'Küldés',
    'LBL_LIST_USER_NAME' => 'Felhasználói név',
    'LBL_LOCATION_ONLY' => 'Helyszín',
    'LBL_LOCATION_TRACK' => 'Kampány követő file-ok helye (mint a campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Kampány üzenetek másolatainak megtartása:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Szeretné eltárolni a teljes másolatát minden egyes kampány alatt küldött email üzenetnek? Nyomatékosan ajánljuk hogy állítsa alapértelmezetten nem-re! Ha a nem-et választja, akkor csak a sablonok kerülnek eltárolásra a szükséges változókkal, amikből vissza lehet állítani minden egyes üzenet tartalmát.',
    'LBL_MAIL_SENDTYPE' => 'Mail transfer agent',
    'LBL_MAIL_SMTPAUTH_REQ' => 'SMTP hitelesítés használata:',
    'LBL_MAIL_SMTPPASS' => 'Jelszó:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP Mail szerver:',
    'LBL_MAIL_SMTPUSER' => 'Felhasználónév:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Válasszon Email szolgáltatót',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail Jelszó',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail jelszó',
    'LBL_GMAIL_SMTPUSER' => 'Gmail Email -cím',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange jelszó',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange felhasználónév',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange Server Port',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Szerver:',
    'LBL_EMAIL_LINK_TYPE' => 'Email kliens',
    'LBL_MARKETING_ID' => 'Marketing ID',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Email beállítások',
    'LBL_MODULE_TITLE' => 'Kimenő E-mail várólista kezelése',
    'LBL_NOTIFICATION_ON_DESC' => 'Ha engedélyezi, a felhasználók minden hozzájuk rendelt Esemény-változásról email értesítést kapnak.',
    'LBL_NOTIFY_FROMADDRESS' => '"Feladó" cím:',
    'LBL_NOTIFY_FROMNAME' => '"Feladó" neve:',
    'LBL_NOTIFY_ON' => 'Hozzárendelés-értesítések',
    'LBL_NOTIFY_TITLE' => 'Email beállítások',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Kimenő Email beállítások',
    'LBL_RELATED_ID' => 'Kapcsolódó azonosító',
    'LBL_RELATED_TYPE' => 'Kapcsolódó típus',
    'LBL_SEARCH_FORM_TITLE' => 'Várólista keresése',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Config.php site_url beállításának értéke',
    'TXT_REMOVE_ME_ALT' => 'Ha el akarja távolítani magát erről az email listáról, lépjen tovább',
    'TXT_REMOVE_ME_CLICK' => 'Kattintson ide',
    'TXT_REMOVE_ME' => 'Ha el akarja távolítani magát erről az email listáról',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Értesítés küldése a hozzárendelő felhasználó e-mail címéről',

    'LBL_SECURITY_TITLE' => 'Email biztonsági beállítások',
    'LBL_SECURITY_DESC' => 'Ellenőrizze hogy ne legyen a bejövő Emailen keresztül engedélyezett, és szerepel az e-mailek modulban.',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Base tag',
    'LBL_SECURITY_EMBED' => 'Embed tag',
    'LBL_SECURITY_FORM' => 'Űrlap címke',
    'LBL_SECURITY_FRAME' => 'Frame-tag',
    'LBL_SECURITY_FRAMESET' => 'Frameset tag',
    'LBL_SECURITY_IFRAME' => 'iFrame tag',
    'LBL_SECURITY_IMPORT' => 'Import tag',
    'LBL_SECURITY_LAYER' => 'Layer tag',
    'LBL_SECURITY_LINK' => 'Link tag',
    'LBL_SECURITY_OBJECT' => 'Objektum tag',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Outlook alapértelmezett minimális biztonsági beállításainak kiválasztása (hibák a helyes megjelenítés oldalán)',
    'LBL_SECURITY_STYLE' => 'Style tag',
    'LBL_SECURITY_TOGGLE_ALL' => 'Minden beállítás bekapcsolása',
    'LBL_SECURITY_XMP' => 'XMP-tag',
    'LBL_YES' => 'Igen',
    'LBL_NO' => 'Nem',
    'LBL_PREPEND_TEST' => '[Teszt]:',
    'LBL_SEND_ATTEMPTS' => 'Küldés kísérletek',
    'LBL_OUTGOING_SECTION_HELP' => 'Az alapértelmezett kimenő mail szerver beállítása az értesítések és a riasztások küldésére.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "A felhasználók küldhetik ezen fiók identitásaként:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Ha ezt a beállítást választja, akkor minden felhasználó képes lesz email-eket küldeni ugyanazzal a kimenő email fiók hozzáféréssel, amin keresztül a rendszer értesítések és riasztások történnek.',
    'LBL_FROM_ADDRESS_HELP' => 'Ha engedélyezi, a hozzárendelt felhasználók neve és email címe is megjelenik az email From mezőjében. Ez a funkció lehetséges hogy nem működik azokon az SMTP szervereken, ahol nem engedélyezett a Mail relay.',
    'LBL_HELP' => 'Súgó' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Kimenő E-mail Fiókok megtekintése',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'A felhasználók saját magukként küldhetnek:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Amikor engedélyezve van, <b>minden</b> felhasználó küldhet e-mailt az kimenő levelező szerverrel, saját elsődleges e-mail címüket használva a „Feladó:” címkéhez.<br>Ez a funkció esetleg nem működik olyan SMTP szerverekkel, amelyek nem engedélyezik az e-mail küldését a szerverfiók különböző e-mail fiókjából.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
