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
    'LBL_SEND_DATE_TIME' => 'Odoslať dátum',
    'LBL_IN_QUEUE' => 'V priebehu',
    'LBL_IN_QUEUE_DATE' => 'dátum vo fronte',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Pre zadanie počtu správ v dávke použite len celočíselné hodnoty',

    'LBL_ATTACHMENT_AUDIT' => 'bola odoslaná. Nebola duplikovaná lokálne pre ušetrenie miesta na disku.',
    'LBL_CONFIGURE_SETTINGS' => 'Konfigurujte celo-systémové nadstavenia',
    'LBL_CUSTOM_LOCATION' => 'Definované užívateľom',
    'LBL_DEFAULT_LOCATION' => 'Prednastavený',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Vymazať súvisiace poznámky a prílohy spolu s vymazanými správami',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'E-mailové notifikácie',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Nastavenie prihlásenia',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automaticky odoslať email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Šablóna emailu pre potvrdenie prihlásenia',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Nastavenia odchádzajúcej pošty',
    'LBL_EMAILS_PER_RUN' => 'Počet emailov odoslaných v dávke:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Kampaň',
    'LBL_LIST_FORM_TITLE' => 'Fronta',
    'LBL_LIST_FROM_NAME' => 'Od mena:',
    'LBL_LIST_IN_QUEUE' => 'V priebehu',
    'LBL_LIST_MESSAGE_NAME' => 'Marketingová správa',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Email príjemcu',
    'LBL_LIST_RECIPIENT_NAME' => 'Meno príjemcu',
    'LBL_LIST_SEND_ATTEMPTS' => 'Odoslať pokusy',
    'LBL_LIST_SEND_DATE_TIME' => 'Odoslať na',
    'LBL_LIST_USER_NAME' => 'Užívateľské meno',
    'LBL_LOCATION_ONLY' => 'Umiestnenie',
    'LBL_LOCATION_TRACK' => 'Umiestnenie',
    'LBL_CAMP_MESSAGE_COPY' => 'Zachovať kópie správ kampane:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Prajete si uložiť kompletné kópie VŠETKÝCH správ poslaných počas všetkých kampaní? Odporúčame a prednastavujeme nie. Vybraním nie bude uložená iba odoslaná šablóna a potrebné premenné pre opätovné vytvorenie jednotlivých správ.',
    'LBL_MAIL_SENDTYPE' => 'Agent prenosu pošty.',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Použiť SMTP verifikáciu?',
    'LBL_MAIL_SMTPPASS' => 'Heslo:',
    'LBL_MAIL_SMTPPORT' => 'SMTP Port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP poštový server:',
    'LBL_MAIL_SMTPUSER' => 'Užívateľské meno:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte si poskytovateľa pošty',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Heslo pošty',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! ID pošty:',
    'LBL_GMAIL_SMTPPASS' => 'Gmail heslo',
    'LBL_GMAIL_SMTPUSER' => 'Gmail adresa správy:',
    'LBL_EXCHANGE_SMTPPASS' => 'Zmena hesla',
    'LBL_EXCHANGE_SMTPUSER' => 'Zmena užívateľského mena',
    'LBL_EXCHANGE_SMTPPORT' => 'Zmena portu servera',
    'LBL_EXCHANGE_SMTPSERVER' => 'Zmena servera',
    'LBL_EMAIL_LINK_TYPE' => 'Poštový klient',
    'LBL_MARKETING_ID' => 'Marketingové ID',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Nastavenia Emailu',
    'LBL_MODULE_TITLE' => 'mažment odchádzajúcich emailov na front',
    'LBL_NOTIFICATION_ON_DESC' => 'Ak je povolené, sú e-maily odoslané užívateľom pri záznamy k nim priradené.',
    'LBL_NOTIFY_FROMADDRESS' => '"Od" adresy:',
    'LBL_NOTIFY_FROMNAME' => '"Od" mena:',
    'LBL_NOTIFY_ON' => 'Hlásenia úloh',
    'LBL_NOTIFY_TITLE' => 'Možnosti pošty',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Možnosti odchádzajúcej pošty',
    'LBL_RELATED_ID' => 'Súvisiace Id',
    'LBL_RELATED_TYPE' => 'Súvisiaci typ',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhľadávanie vo fronte',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Hodnota Config.php nastavuje site_url',
    'TXT_REMOVE_ME_ALT' => 'Ak sa chcete odstrániť zo zoznamu tejto správy prejdite na',
    'TXT_REMOVE_ME_CLICK' => 'kliknite tu',
    'TXT_REMOVE_ME' => 'Ak sa chcete odstrániť zo zoznamu tejto správy',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Odošlite upozornenie z emailovej adresy prihlasovaného užívateľa',

    'LBL_SECURITY_TITLE' => 'Bezpečnostné nastavenia správy',
    'LBL_SECURITY_DESC' => 'Skontrolujte nasledujúce, ktorá by mala byť zakázané cez InboundEmail alebo zobrazená v e-mailoch modulu.',
    'LBL_SECURITY_APPLET' => 'Applet tag',
    'LBL_SECURITY_BASE' => 'Základný stítok',
    'LBL_SECURITY_EMBED' => 'vložiť štítok',
    'LBL_SECURITY_FORM' => 'štítok formulára',
    'LBL_SECURITY_FRAME' => 'rámový štítok',
    'LBL_SECURITY_FRAMESET' => 'Frameset štítok',
    'LBL_SECURITY_IFRAME' => 'rámový štítok',
    'LBL_SECURITY_IMPORT' => 'importovaný štítok',
    'LBL_SECURITY_LAYER' => 'vrstvový štítok',
    'LBL_SECURITY_LINK' => 'linkový štítok',
    'LBL_SECURITY_OBJECT' => 'štítok objektu',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Vyberte Outlook predvolené nastavenie minimálneho zabezpečenia (chybuje na strane správne zobrazenie).',
    'LBL_SECURITY_STYLE' => 'štítok štýlu',
    'LBL_SECURITY_TOGGLE_ALL' => 'Prepnúť všetky možnosti',
    'LBL_SECURITY_XMP' => 'Xmp štítok',
    'LBL_YES' => 'Áno',
    'LBL_NO' => 'Nie',
    'LBL_PREPEND_TEST' => '[Test]:',
    'LBL_SEND_ATTEMPTS' => 'Odoslať pokusy',
    'LBL_OUTGOING_SECTION_HELP' => 'Konfigurácia predvoleného servera odchádzajúcej pošty pre zasielanie e-mailových upozornení, vrátane  záznamov toku práce.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Užívatelia môžu odosielať za tento účet:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Pokiaľ je vybraná táto možnosť, všetci užívatelia budú môcť posielať správy pomocou jedného účtu odchádzajúcej pošty, používaného pre odosielanie systémových  hlásení a upozornení. Ak možnosť nie je vybraná, užívatelia stále môžu používať server pre odchádzajúcu poštu po poskytnutí ich vlastných informácii o účte.',
    'LBL_FROM_ADDRESS_HELP' => 'Ak je povolené, bude priradenie používateľa \\ &#39;s meno a e-mailovú adresu zahrnuté v poli Od e-mailu. Táto funkcia nemusí pracovať s SMTP serverov, ktoré neumožňujú zaslanie z iného e-mailového konta, než na serveri účet.',
    'LBL_HELP' => 'Pomoc' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Zobraziť účty ochadzajúcich emailov',
    'LBL_ALLOW_SEND_AS_USER' => 'Užívatelia môžu odosielať za seba:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Ak je zapnuté, <b>všetci</b> užívatelia môžu posielať email s použitím poštového servera pre odchádzajúcu poštu s použitím ich vlastnej primárnej emailovej adresy v poli odosielateľa.<br>Táto možnosť nemusí fungovať na serveroch, ktoré nedovoľujú odoslať správu z iného účtu než je účet daného serveru.',
);
