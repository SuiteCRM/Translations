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
    'LBL_SEND_DATE_TIME' => 'Datum odeslání',
    'LBL_IN_QUEUE' => 'V procesu',
    'LBL_IN_QUEUE_DATE' => 'Datum zařazení do fronty',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Pouze číslo je povoleno pro Počet zpráv odeslaných v jedné dávce',

    'LBL_ATTACHMENT_AUDIT' => ' byl odeslán. Nebyl duplikován lokálně pro ušetření diskového prostoru.',
    'LBL_CONFIGURE_SETTINGS' => 'Pokračovat',
    'LBL_CUSTOM_LOCATION' => 'Umožnit zvolit',
    'LBL_DEFAULT_LOCATION' => 'Výchozí',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'S odstraňovanýmy emaily odstraňte související poznámky a přílohy.',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Upozornění e-mailem',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Nastavní Opt In',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Automaticky odeslat Opt In email',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Potvrdit šablonu Opt In e-mailu',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Enable Legacy Email Compose Behaviour',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Nastavení odchozí pošty',
    'LBL_EMAILS_PER_RUN' => 'Počet zpráv, které mají být odeslány v jedné dávce:',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Kampaň',
    'LBL_LIST_FORM_TITLE' => 'Fronta',
    'LBL_LIST_FROM_NAME' => 'Jméno odesílatele',
    'LBL_LIST_IN_QUEUE' => 'V procesu',
    'LBL_LIST_MESSAGE_NAME' => 'Marketingová zpráva',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Adresa příjemce',
    'LBL_LIST_RECIPIENT_NAME' => 'Jméno příjemce',
    'LBL_LIST_SEND_ATTEMPTS' => 'Pokusů',
    'LBL_LIST_SEND_DATE_TIME' => 'Odesláno ',
    'LBL_LIST_USER_NAME' => 'Uživatelské jméno',
    'LBL_LOCATION_ONLY' => 'Umístění',
    'LBL_LOCATION_TRACK' => 'Umístění souborů pro sledování kampaně (například campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Zachovat kopie zpráv kampaně:',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Chcete ukládat úplné kopie <bold>KAŽDÉ</bold> e-mailové zprávy odeslané během všech kampaní?  <bold>Doporučujeme výchozí hodnotu na ne</bold>. Vybráním volby ne se budou ukládat pouze šablony a potřebné proměnné nutné k znovuvytvoření individuálních zpráv.',
    'LBL_MAIL_SENDTYPE' => 'Agent pro přenos pošty:',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Použít SMTP autentifikaci?',
    'LBL_MAIL_SMTPPASS' => 'Heslo:',
    'LBL_MAIL_SMTPPORT' => 'SMTP port:',
    'LBL_MAIL_SMTPSERVER' => 'SMTP server:',
    'LBL_MAIL_SMTPUSER' => 'SMTP uživatelské jméno:',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Vyberte poskytovatele e-mailu',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail heslo',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail ID',
    'LBL_GMAIL_SMTPPASS' => 'Gmail heslo',
    'LBL_GMAIL_SMTPUSER' => 'Gmail e-mailová adresa',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange heslo',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange uživatelské jméno',
    'LBL_EXCHANGE_SMTPPORT' => 'Port serveru Exchange',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange Server',
    'LBL_EMAIL_LINK_TYPE' => 'Emailový klient',
    'LBL_MARKETING_ID' => 'Marketing ID',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Nastavení pošty',
    'LBL_MODULE_TITLE' => 'Správa fronty odchozích e-mailů',
    'LBL_NOTIFICATION_ON_DESC' => 'Je-li povoleno, e-maily jsou odeslány uživatelům při přiřazení záznamů k nim.',
    'LBL_NOTIFY_FROMADDRESS' => 'Adresa odesílatele:',
    'LBL_NOTIFY_FROMNAME' => 'Odesílatel:',
    'LBL_NOTIFY_ON' => 'Upozornění na přiřazení',
    'LBL_NOTIFY_TITLE' => 'Možnosti odesílání upozornění emailem',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Nastavení odchozích zpráv',
    'LBL_RELATED_ID' => 'Související ID',
    'LBL_RELATED_TYPE' => 'Související typ',
    'LBL_SEARCH_FORM_TITLE' => 'Vyhledávání fronty',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Hodnota nastavení site_url v Config.php',
    'TXT_REMOVE_ME_ALT' => 'Pro odebrání sebe z tohoto seznamu e-mailů jděte na',
    'TXT_REMOVE_ME_CLICK' => 'klikněte zde',
    'TXT_REMOVE_ME' => 'K odebrání sebe z tohoto seznamu emailů',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Odeslat upozornění z e-mailu přiřazujícího uživatele',

    'LBL_SECURITY_TITLE' => 'Nastavení zabezpečení emailu',
    'LBL_SECURITY_DESC' => 'Zaškrtněte následující, aby nebylo povoleno v příchozím emailu nebo zobrazeno v modulu Email.',
    'LBL_SECURITY_APPLET' => 'Applet značka',
    'LBL_SECURITY_BASE' => 'Base značka',
    'LBL_SECURITY_EMBED' => 'Embed značka',
    'LBL_SECURITY_FORM' => 'Form značka',
    'LBL_SECURITY_FRAME' => 'Frame značka',
    'LBL_SECURITY_FRAMESET' => 'Frameset značka',
    'LBL_SECURITY_IFRAME' => 'iFrame značka',
    'LBL_SECURITY_IMPORT' => 'Import značka',
    'LBL_SECURITY_LAYER' => 'Layer značka',
    'LBL_SECURITY_LINK' => 'Link značka',
    'LBL_SECURITY_OBJECT' => 'Object značka',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Zvolte minimální výchozí Outlook bezpečnostní prevence (chyby na straně korektního zobrazení).',
    'LBL_SECURITY_STYLE' => 'Style značka',
    'LBL_SECURITY_TOGGLE_ALL' => 'Přepnout všechny volby',
    'LBL_SECURITY_XMP' => 'Xml značka',
    'LBL_YES' => 'Ano',
    'LBL_NO' => 'Ne',
    'LBL_PREPEND_TEST' => '[Test]: ',
    'LBL_SEND_ATTEMPTS' => 'Pokusů',
    'LBL_OUTGOING_SECTION_HELP' => 'Nastavit výchozí odchozí poštovní server pro odesílání emailových oznámení, včetně upozornění workflow.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Uživatelé mohou odesílat pod identitou tohoto účtu:",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Je-li vybrána tato možnost, budou moci všichni uživatelé posílat emaily pomocí stejného odchozího emailového účtu, který slouží k odesílání systémových upozornění a výstrah.<br> Pokud tato možnost není vybrána, mohou uživatelé dále používat server pro odchozí poštu, ale musí zadat vlastní přihlašovací údaje.',
    'LBL_FROM_ADDRESS_HELP' => 'Je-li povoleno, jméno a adresa přiřazovaného uživatele/ů bude zahrnuto do pole "Od" e-mailu. Tato funkce nemusí fungovat u SMTP serverů neumožňujících odesílání z jiného e-mailového účtu než z účtu serveru.',
    'LBL_HELP' => 'Nápověda' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Zobrazit odchozí e-mailové účty',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Uživatelé mohou odesílat za sebe:',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Pokud je zapnuto, <b>všichni</b> uživatelé mohou odeslat email s použitím odchozího poštovního serveru s použitím jejich vlastní primární emailové adresy &quot;Od:&quot;.<br>Tato možnost nemusí fungovat na SMTP serverech nedovolujících odeslat zprávu z jiného emailového účtu než je emailový účet daného serveru.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
